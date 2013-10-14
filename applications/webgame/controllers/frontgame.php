<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class frontgame extends Custom_Controller
{
	public function __construct()
	{
		parent::__construct();
		
		$this->loginedUserInfo = $this->_checkUserLogin();
		$this->urlForward = $this->baseUrl;
	}

	/**
	 * Enter a point webgame
	 *
	 * @return void
	 */
	public function play()
	{	
		if (empty($this->loginedUserInfo)) {
			$this->_messageInfo('请先登录！', $this->appInfos['passport']['url'] . 'uwebgame/login/');  //跳转到主页面
		}
		
		$isTestUser = in_array($this->loginedUserInfo['username'], $this->testUsers) ? true : false;

		$webgameCode = $this->input->get('code');
		$this->webgameInfo = $this->_checkWebgame($webgameCode, $isTestUser);
		
		$serverId = $this->input->get('serverid');
		$this->serverInfo = $this->_checkServer($serverId, $this->webgameInfo);
		$params = array(			
			'webgameInfo' => $this->webgameInfo,
			'serverInfo' => $this->serverInfo,
			'userInfo' => $this->loginedUserInfo,
		);
		$this->load->library($webgameCode, $params);
		$playUrl = $this->$webgameCode->getPlayUrl();
		if (empty($playUrl)) {
			$this->_messageInfo('游戏服务器有误，请重新连接！', $this->baseUrl);
		}

		$this->_updateWebgameInfo($params);
		$this->playurl = $playUrl;
		$this->load->view('playgame');
	}
	
	protected function _checkWebgame($webgameCode, $isTestUser)
	{
		$webgameInfo = isset($this->webgameInfos[$webgameCode]) ? $this->webgameInfos[$webgameCode] : false;
		if (empty($webgameInfo) || $webgameInfo['type'] != 3) {
			$this->_messageInfo('游戏有误！', $this->baseUrl);
		}

		if (in_array($this->loginedUserInfo['username'], $this->testUsers)) {
			return $webgameInfo;
		}

		$webgameStatus = $webgameInfo['status'];
		switch ($webgameStatus) {
			case '0':
				$this->_messageInfo('游戏已关闭', $this->baseUrl);
				break;
			case '1':
			case '2':
				return $webgameInfo;
				break;
			case '3':
				$this->_messageInfo('即将开启，敬请期待！', $this->baseUrl);
				break;
			case '4':
				$urlMaintain = !empty($webgameInfo['url_maintain']) ? $webgameInfo['url_maintain'] : $this->baseUrl;
				if ($this->time >= $webgameInfo['start_maintain'] && $this->time <= $webgameInfo['end_maintain']) {
					$this->_messageInfo('游戏正在维护中，将于' . date('Y-m-d H:i:s', $webgameInfo['end_maintain']) . '开启!', $urlMainmain);
				}

				$data['status'] = '1';
				$where = array('code =' => $webgameInfo['code']);
				$this->_loadModel(APPCODE, 'webgameModel');
				$this->webgameModel->editInfo($data, $where);
				return $webgameInfo;
				break;
			default:
				$this->_messageInfo('游戏信息有误！', $this->baseUrl);
		}
	}

	/**
	 * Get the serverInfo for user to play a game
	 *
	 * @param  int $serverId
	 * @return boolean | array
	 */
	protected function _checkServer($serverId, $webgameInfo)
	{
		$serverInfo = false;
		$serverInfo = isset($this->serverInfos[$serverId]) ? $this->serverInfos[$serverId] : false;
		if (empty($serverInfo)) {
			$this->_messageInfo('游戏服务器不存在！', $webgameInfo['url_home']);
		}
		if (in_array($this->loginedUserInfo['username'], $this->testUsers)) {
			return $serverInfo;
		}
		
		$serverStatus = $serverInfo['status'];
		$statusInfo = array('0' => '服务器已关闭', '1' => '', '2' => '服务器正在维护', '3' => '服务器即将开放', '4' => '服务器爆满,请到最新开放的服务器玩游戏');
		switch ($serverStatus) {
			case '1':
				return $serverInfo;
				break;
			case '3':
				if (isset($serverInfo['time_start']) && $this->time > $serverInfo['time_start']) {
					$data['status'] = '1';
					$where = array('id =' => $serverId);
					$this->_loadModel(APPCODE, 'serverModel');
					$this->webgameModel->editInfo($data, $where);
					return $serverInfo;
				}
				$this->_messageInfo($statusInfo[$serverStatus], $webgameInfo['url_home']);
				break;
			case '0':
			case '4':
				$this->_messageInfo($statusInfo[$serverStatus], $webgameInfo['url_home']);
				break;
			case '2':
				$urlMaintain = !empty($serverInfo['url_maintain']) ? $serverInfo['url_maintain'] : $this->baseUrl;
				if ($this->time >= $serverInfo['start_maintain'] && $this->time <= $serverInfo['end_maintain']) {
					$this->_messageInfo('服务器正在维护中，将于' . date('Y-m-d H:i:s', $serverInfo['end_maintain']) . '开启!', $urlMainmain);
				}

				$data['status'] = '1';
				$where = array('id =' => $serverId);
				$this->_loadModel(APPCODE, 'serverModel');
				$this->webgameModel->editInfo($data, $where);
				return $serverInfo;
				break;
			default:
				$this->_messageInfo('服务器信息有误！', $this->baseUrl);
		}
	}

	/**
	 * Enter a point webgame
	 *
	 * @return void
	 */
	public function pay()
	{
		$payInfos = $this->_checkPayInfos();//print_r($payInfos);	exit();
		
		$webgameCode = $payInfos['webgameInfo']['code'];
		if ($payInfos['webgameInfo']['type'] == 1) {
			$payInfos['frontController'] = $this;
		}
		$this->load->library($webgameCode, $payInfos);
		$payResult = $this->$webgameCode->payGame();
		if (empty($payResult)) {
			$message = empty($payInfos['accountId']) ? '兑换游戏币失败，请重新操作！' : '充值到游戏失败，系统转充至您的平台账号！';
			$this->_messageInfo($message, $this->appInfos['pay']['url'], 4000);
		} else {
			$this->_recordPay($payInfos);
			$this->_updateWebgameInfo($payInfos, true);


			$gameCoin = $payInfos['money'] * $payInfos['webgameInfo']['coin_rate'] . ' ' . $payInfos['webgameInfo']['coin_unit'] . ' ' . $payInfos['webgameInfo']['coin_name'];

			$this->payResult = true;
			$this->message = '支付成功！';
			$this->resultInfo = array(
				'webgameName' => $payInfos['webgameInfo']['name'],
				'serverName'=> isset($payInfos['serverInfo']['name']) ? $payInfos['serverInfo']['name'] : '',
				'username' => $payInfos['username'],
				'money' => $payInfos['money'],
				'coin' => $gameCoin,
				'orderid' => $payInfos['orderId'],
			);

			$this->load->view('payResult');
		}
	}

	/**
	 * Check the pay infos
	 *
	 * @return array
	 */
	protected function _checkPayInfos()
	{
		$this->load->library('session');
		$payInfos = $this->session->userdata('payInfos');
		$this->session->unset_userdata('payInfos');//var_dump($payInfos);

		if (!in_array($payInfos['payType'], array('topaymonth', 'towebgame'))) {
			exit('payType error'); // $this->_messageInfo('支付类型有误！', $this->appInfos['pay']['url']);
		}
		if (!empty($payInfos['accountId'])) {
			$payInfos['accountInfo'] = $this->_checkAccount($payInfos);
			if (empty($payInfos['accountInfo'])) {
				exit('account error'); //$this->_messageInfo('充值到游戏失败！', $this->appInfos['pay']['url']);
			}
		}

		$payInfos['getUserInfo'] = $payInfos['username'] == $this->loginedUserInfo['username'] ? $this->loginedUserInfo : $this->getUserInfo(array('username =' => $payInfos['username']));
		$payInfos['userInfo'] = $payInfos['payUsername'] == $this->loginedUserInfo['username'] ? $this->loginedUserInfo : $this->getUserInfo(array('username =' => $payInfos['payUsername']));
		$payInfos['moneyInfo'] = $this->_getMoneyInfo($payInfos['payUsername'], true);
		//var_dump($payInfos['userInfo']); var_dump($payInfos['moneyInfo']); 
		if (empty($payInfos['userInfo']) || empty($payInfos['moneyInfo']) || $payInfos['moneyInfo']['money'] < $payInfos['money']) {
			exit('user error');//$this->_messageInfo('支付账号信息有误！', $this->appInfos['pay']['url']);
		}

		if ($payInfos['payType'] == 'topaymonth') {
			$payInfos['paymonthInfo'] = $this->_getPaymonth($payInfos);
			$payInfos['webgameInfo'] = $this->webgameInfos[$payInfos['paymonthInfo']['webgame_code']]; 
			if (empty($payInfos['paymonthInfo']) || $payInfos['paymonthInfo']['money'] != $payInfos['money'] || empty($payInfos['webgameInfo'])) {
				exit('topaymonth param error');//$this->_messageInfo('支付包月参数错误！', $this->appInfos['pay']['url'] . 'index/paymonth/');
			}
		}
		if ($payInfos['payType'] == 'towebgame') {
			$payInfos['webgameInfo'] = $this->webgameInfos[$payInfos['webgameCode']];
			$payInfos['serverInfo'] = $payInfos['webgameInfo']['type'] == 3 ? $this->serverInfos[$payInfos['serverId']] : array('id' => 0);
			if (empty($payInfos['webgameInfo']) || ($payInfos['webgameInfo']['type'] == 3 && (empty($payInfos['serverInfo']) || $payInfos['webgameCode'] != $payInfos['serverInfo']['webgame_code']))) {
				exit('towebgame param error');//$this->_messageInfo('支付游戏服务器参数错误！', $this->appInfos['pay']['url'] . 'index/exchange/');
			}
		}

		$payInfos['orderId'] = $this->_createSingleRandomStr();
		return $payInfos;
	}

	/**
	 * Pay to paymonth
	 *
	 * @return array
	 */
	protected function _getPaymonth($payInfos)
	{
		$where = array('id =' => $payInfos['paymonthId']);
		$this->_loadModel('pay', 'paymonthModel');
		$paymonthInfo = $this->paymonthModel->getInfo($where);

		return $paymonthInfo;
	}
	
	/**
	 * 记录并统计支付信息
	 *
	 * @return void
	 */
	protected function _recordPay($params)
	{
		if (!is_array($params) || empty($params)) {
			return false;
		}

		$data = array(
			'userid' => $params['userInfo']['userid'],
			'username' => $params['userInfo']['username'],
			'get_userid' => $params['getUserInfo']['userid'],
			'get_username' => $params['getUserInfo']['username'],
			'orderid' => $params['orderId'],
			'orderid_account' => isset($params['accountId']) ? $params['accountId'] : '',
			'money' => $params['money'],
			'webgame_code' => $params['webgameInfo']['code'],
			'server_id' => isset($params['serverInfo']['id']) ? $params['serverInfo']['id'] : 0,
			'server_role' => isset($params['serverRole']) ? $params['serverRole'] : '',
			'pay_time' => $this->time,
			'day' => date('Ymd', $this->time),
		);
		$this->_loadModel('pay', 'payModel');
		$this->payModel->addInfo($data);

		if ($params['payType'] == 'topaymonth') {
			$data = array(
				'userid' => $params['userInfo']['userid'],
				'username' => $params['userInfo']['username'],
				'get_userid' => $params['getUserInfo']['userid'],
				'get_username' => $params['getUserInfo']['username'],
				'paymonth_id' => $params['paymonthInfo']['id'],
				'orderid' => $params['orderId'],
				'orderid_account' => isset($params['accountId']) ? $params['accountId'] : '',
				'money' => $params['money'],
				'month' => $params['paymonthInfo']['month'],
				'webgame_code' => $params['webgameInfo']['code'],
				'pay_time' => $this->time,
				'day' => date('Ymd', $this->time),
			);
			$this->payModel->addInfo($data, 'pay_paymonth');
		}

		$moneyInfo = $this->_getMoneyInfo($params['userInfo']['username']);
		$data = array(
			'money' => $moneyInfo['money'] - $params['money'],
			'pay_money' => $moneyInfo['pay_money'] + $params['money'],
			'pay_times' => $moneyInfo['pay_times'] + 1,
			'lasttime_pay' => $this->time,
		);
		$where = array('username =' => $params['userInfo']['username']);
		$this->payModel->editInfo($data, $where, 'member_pay');
		
		return ;
	}

	/**
	 * Get the order info by pointing the id
	 *
	 * @param  int $orderid
	 * @param  string $username
	 * @param  int money
	 * @return array | boolean
	 */
	protected function _checkAccount($payInfo)
	{
		$this->_loadModel('pay', 'accountModel');
		$accountInfo = $this->accountModel->getInfo(array('orderid' => $payInfo['accountId'])); 
		//print_r($payInfo); print_r($accountInfo);
		if (empty($accountInfo) || $payInfo['payType'] != $accountInfo['type'] || $accountInfo['username'] != $payInfo['username'] || floor($accountInfo['money_valid']) != $payInfo['money']) {
			//echo 'ssssssss';
			return false;
		}
		if ($payInfo['payType'] == 'topaymonth' && $accountInfo['paymonth_id'] != $payInfo['paymonthId']) {
			//echo 'iiiiiiiii';
			return false;
		}
		if ($payInfo['payType'] == 'towebgame' && ($accountInfo['webgame_code'] != $payInfo['webgameCode'] || $accountInfo['server_id'] != $payInfo['serverId'])) { 
			//echo 'aaaaaaaaa';
			return false;
		}

		return true;
	}

	/**
	 * Get the info of game role
	 *
	 * @return void
	 */
	public function getServerUser()
	{	
		$data = array('user' => 'yes');
		echo $this->_jsonp($data);
		return ;
		
		$username = $this->input->get('username');
		$serverId = $this->input->get('serverId');
		$serverInfo = isset($this->serverInfos[$serverId]) ? $this->serverInfos[$serverId] : '';
		$data = array('user' => 'no');

		if (empty($username) || empty($serverId) || empty($serverInfo)) {
			echo $this->_jsonp($data);
			return ;
		}
		
		if ($username == $this->loginedUserInfo['username']) {
			$puserid = $this->loginedUserInfo['userid'];
		}else{
			$payUserInfos = $this->_getUserByUsername($username);
			$puserid=isset($payUserInfos['userid'])?$payUserInfos['userid']:0;
		}

		$webgameCode = $serverInfo['webgame_code'];
		$webgameInfo = $this->webgameInfos[$webgameCode];
		if (empty($webgameInfo) || empty($webgameInfo['show_position'])) {
			echo $this->_jsonp($data);
			return ;
		}

		$params = array(
				'userid' => $puserid,
				'username' => $username,
				'webgameInfo' => $webgameInfo,
				'serverInfo' => $serverInfo,
				'extInfo' => array(),
		);
		$this->load->library($webgameCode, $params);
		$serverUser = $this->$webgameCode->getServerUser();
		$data = empty($serverUser) ? array('user' => 'no') : array('user' => 'yes', 'userCount' => count($serverUser), 'webgameCode' => $serverInfo['webgame_code'], 'userInfo' => $serverUser);

		echo $this->_jsonp($data);
		return ;
	}
}