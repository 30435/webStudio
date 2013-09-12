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
		$this->userid = $this->loginedUserInfo['userid'];
		if (empty($this->userid)) {
			$this->_messageInfo('请先登录！', $this->appInfos['passport']['url'] . 'index/login/');  //跳转到主页面
		}
		
		$this->username = $this->loginedUserInfo['username'];
		$isTestUser = in_array($this->username, $this->testUsers) ? true : false;

		$webgameCode = $this->input->get('code');
		$this->webgameInfo = $this->_checkWebgame($webgameCode, $isTestUser);
		
		$serverId = $this->input->get('serverid');
		$this->serverInfo = $this->_checkServer($serverId, $this->webgameInfo);
		$params = array(
			'userid' => $this->userid,
			'username' => $this->username,			
			'webgameInfo' => $this->webgameInfo,
			'serverInfo' => $this->serverInfo,
			'regdate' => $this->loginedUserInfo['regdate'],
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
		if (empty($webgameInfo) || $webgameInfo['webgame_type'] != 3) {
			$this->_messageInfo('游戏有误！', $this->baseUrl);
		}

		if (in_array($this->username, $this->testUsers)) {
			return $webgameInfo;
		}

		$webgameStatus = $webgameInfo['webgame_status'];
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

				$data['webgame_status'] = '1';
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
		if (in_array($this->username, $this->testUsers)) {
			return $serverInfo;
		}
		
		$serverStatus = $serverInfo['server_status'];
		$statusInfo = array('0' => '服务器已关闭', '1' => '', '2' => '服务器正在维护', '3' => '服务器即将开放', '4' => '服务器爆满,请到最新开放的服务器玩游戏');
		switch ($serverStatus) {
			case '1':
				return $serverInfo;
				break;
			case '3':
				if (isset($serverInfo['time_start']) && $this->time > $serverInfo['time_start']) {
					$data['server_status'] = '1';
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

				$data['server_status'] = '1';
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
	 * Write the user play game info
	 *
	 * @return void
	 */
	protected function _updateWebgameInfo($params, $isPay = false)
	{
		$this->_loadModel(APPCODE, 'member_webgameModel');
		$where = array('username' => $params['username'], 'server_id' => $params['serverInfo']['id']);
		$userInfo = $this->member_webgameModel->getInfo($where);

		$this->_loadModel(APPCODE, 'recordModel');
		$recordType = empty($isPay) ? '0' : '1';
		$activeTime = $this->time - $params['regdate'];
		$activeDay = ceil($activeTime / 86400);
		$midTime1 = mktime(0, 0, 0, date('m', $params['regdate']), date('d', $params['regdate']), date('Y', $params['regdate']));
		$midTime2 = mktime(0, 0, 0, date('m', $this->time), date('d', $this->time), date('Y', $this->time));
		$activeNatTime = $midTime2 - $midTime1;
		$activeNatDay = ceil($activeNatTime / 86400) + 1;

		$activeDays = empty($isPay) ? array(3 => 'three', 7 => 'seven', 10 => 'ten') : array(7 => 'seven', 10 => 'ten');
		$dataExt = array();
		foreach ($activeDays as $activeDayKey => $activeDayValue) {
			$memberField = $activeDayValue . '_mark';
			$memberFieldValue = isset($userInfo[$memberField]) ? $userInfo[$memberField] : 0;
			if (empty($memberFieldValue) && (($isPay && $activeNatDay >= $activeDayKey) || (!$isPay && $activeNatDay <= $activeDayKey))) {
				$dataExt[$memberField ] = 1;
			}
		}

		$data = array(
			'webgame_code' => $params['webgameInfo']['code'],
			'serverid' => $params['serverInfo']['id'],
			'userid' => $params['userid'],
			'username' => $params['username'],
			'inputtime' => $this->time,
			'day' => date('Ymd', $this->time),
			'active_time' => $activeTime,
			'active_day' => $activeDay,
			'active_nat_time' => $activeNatTime,
			'active_nat_day' => $activeNatDay,
			'record_type' => $recordType,
		);
		$data = array_merge($data, $dataExt);
		$this->recordModel->addInfo($data);

		if ($isPay) {
			$data = array(
				'pay_num' => isset($userInfo['pay_num']) ? $userInfo['pay_num'] + 1 : 1,
				'pay_money' => isset($userInfo['pay_money']) ? $userInfo['pay_money'] + $params['money'] : $params['money'],
				'lasttime_pay' => $this->time,
				'lasttime' => $this->time,
			);
		} else {
			$data = array(
				'play_num' => isset($userInfo['play_num']) ? $userInfo['play_num'] + 1 : 1,
				'lasttime_login' => $this->time,
				'lasttime' => $this->time,
			);
		}
		if (empty($userInfo)) {
			$data['username'] = $params['username'];
			$data['webgame_code'] = $params['webgameInfo']['code'];
			$data['server_id'] = $params['serverInfo']['id'];
			$data['userid'] = $params['userid'];
			$data['firsttime'] =$data['lasttime'] =  $this->time;
			$this->member_webgameModel->addInfo($data);
		} else {
			$where = array('username' => $params['username'], 'server_id' => $params['serverInfo']['id']);
			$this->member_webgameModel->editInfo($data, $where);
		}
	}

	/**
	 * Enter a point webgame
	 *
	 * @return void
	 */
	public function pay()
	{
		$this->load->library('session');
		$payInfos = $this->session->userdata('payInfos');
		$this->session->unset_userdata('payInfos');

		$username = isset($payInfos['username']) ? $payInfos['username'] : '';
		$money = isset($payInfos['money']) ? $payInfos['money'] : 0;
		$moneyValidMiddle = !empty($payInfos['moneyValidMiddle']) ? $payInfos['moneyValidMiddle'] : $money;
		$webgameCode = isset($payInfos['webgameCode']) ? $payInfos['webgameCode'] : '';
		$serverId = isset($payInfos['serverId']) ? $payInfos['serverId'] : '';
		$serverRole = isset($payInfos['serverRole']) ? $payInfos['serverRole'] : '';
		$userid = isset($payInfos['userid']) ? $payInfos['userid'] : '';
		$usernamePay = isset($payInfos['usernamePay']) ? $payInfos['usernamePay'] : '';
		$orderidPlat = isset($payInfos['orderidPlat']) ? $payInfos['orderidPlat'] : '';

		$payType = isset($payInfos['type']) ? $payInfos['type'] : false;
		$payTypeValid = in_array($payType, array('ischange', 'respond', 'iscourage')) ? true : false;
		if ($payTypeValid && $payType == 'respond') {
			$payTypeValid = $this->_checkOrder($orderidPlat, $username, $money, $webgameCode, $serverId);
		}

		if (empty($payTypeValid) || $money < 1 || empty($webgameCode) || empty($serverId) || empty($username) || empty($usernamePay)) {
			//exit('1');
			$this->_messageInfo('请求参数有误1', $this->applicationInfos[3]['domain']);
		}
		
		$webgameInfo = isset($this->webgameInfos[$webgameCode]) ? $this->webgameInfos[$webgameCode] : false;
		$serverInfo = isset($this->serverInfos[$serverId]) ? $this->serverInfos[$serverId] : false;
		if (empty($webgameInfo) || empty($serverInfo) || $serverInfo['webgame_code'] != $webgameCode) {
			//exit('2');
			$this->_messageInfo('游戏参数有误2！', $this->applicationInfos[3]['domain']);
		}

		$userInfo = $this->_getUserByUsername($username);
		$moneyInfo = $this->_getMoneyInfo($usernamePay, true);
		if (empty($userInfo) || ($userInfo['userid'] != $userid) || empty($moneyInfo) || $moneyInfo['money'] < $money) {
			//exit('3');
			$this->_messageInfo('请求参数有误3', $this->applicationInfos[3]['domain']);
		}

		$params = array(
			'get_userid' => $userid,
			'get_username' => $username,
			'username' => $usernamePay,
			'userid' => $moneyInfo['userid'],
			'orderid_plat' => $orderidPlat,
			'channel_code' => $userInfo['channel_code'],
			'resource_id' => $userInfo['resource_id'],
			'subinfo' => $userInfo['subinfo'],
			'regdate' => $userInfo['regdate'],
			'webgameInfo' => $webgameInfo,
			'serverInfo' => $serverInfo,
			'serverRole' => $serverRole,
			'money' => $money,
			'moneyValidMiddle' => $moneyValidMiddle,
			'orderid' => $this->_getOrderId(),
		);

		$this->load->library($webgameCode, $params);
		$payResult = $this->$webgameCode->payGame();

		if (empty($payResult)) {
			$this->_messageInfo('充值到游戏失败,系统自动转充平台账号成功!', $this->applicationInfos[1]['domain'], 4000);
		} else {
			$this->_recordPay($params);
			$this->_updateWebgameInfo($params, true);
			$gameCoin = $money * $webgameInfo['coin_rate'] . ' ' . $webgameInfo['coin_unit'] . ' ' . $webgameInfo['coin_name'];
			$gameCoin .= ($moneyMid - $money) > 0 ? '   (剩余' . ($moneyMid - $money) . '金币)' : '';
			$this->_getHeader();
			$this->_getFooter();
			
			//如果不是勇气币支付    返勇气币
			if($payType == 'respond' || $payType == 'ischange'){
				$this->_payRebateCourage($userInfo,$money,$webgameInfo,$serverInfo,$params);
			}
			
			$this->payResult = true;
			$this->message = '支付成功！';
			$this->resultInfo = array(
				'webgameName' => $this->webgameInfos[$webgameCode]['name'],
				'serverName'=> $this->serverInfos[$serverId]['name'],
				'username' => $username,
				'money' => $money,
				'moneyValidMiddle' => $moneyValidMiddle,
				'coin' => $gameCoin,
				'orderid' => $params['orderid'],
				'courage_money' => $this->courage_money
			);

			$this->load->view('payResult');
		}
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
		
		$db = $this->_loadDatabase('pay');
		$tablePay = 'pay';
		$data = array(
			'userid' => $params['userid'],
			'orderid' => $params['orderid'],
			'orderid_plat' => $params['orderid_plat'],
			'username' => $params['username'],
			'get_username' => $params['get_username'],
			'get_userid' => $params['get_userid'],
			'channel_code' => $params['channel_code'],
			'subinfo' => $params['subinfo'],
			'resource_id' => $params['resource_id'],
			'money' => $params['money'],
			'webgame_code' => $params['webgameInfo']['code'],//->webgameInfo['code'],
			'serverid' => $params['serverInfo']['id'],
			'server_role' => $params['serverRole'],
			'pay_time' => $this->time,
			'day' => date('Ymd', $this->time),
		);
		
		//cps
		
		$spreadDb = $this->_loadDatabase('spread');
		$spread_user=$spreadDb->select('spread_id')->get_where('cps_card',array('userid'=>$params['userid'],'game'=> $params['webgameInfo']['code'],'spread_id !='=>0))->row_array();
		if(!empty($spread_user) && $spread_user['spread_id']!=='0'){
			$data['cps_user']=$spread_user['spread_id'];
		}
		
		$db->insert($tablePay, $data);
		
		unset($data['cps_user']);
		
		$tableMember = 'member';
		$query = $db->get_where($tableMember, array('username' => $params['username']));
		$oldInfo = $query->row_array();

		$data = array(
			'money' => $oldInfo['money'] - $params['money'],
			'lasttime_pay' => $this->time,
			'pay_times' => $oldInfo['pay_times'] + 1,
			'pay_money' => $oldInfo['pay_money'] + $params['money'],
		);

		$db->where('username', $params['username']);
		$db->update($tableMember, $data);

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
	protected function _checkOrder($orderid, $username, $money, $webgameCode, $serverId)
	{
		$payDb = $this->_loadDatabase('pay');

		$query = $payDb->get_where('account', array('orderid' => $orderid, 'status' => '1'));
		$orderInfo = $query->row_array();
		if (empty($orderInfo)) {
			return false;
		}

		if ($orderInfo['get_username'] != $username || floor($orderInfo['money_valid']) != $money
			|| $orderInfo['webgame_code'] != $webgameCode || $orderInfo['serverid'] != $serverId) {
			return false;
		}
		return true;
	}

	/**
	 * The interface of webplat application
	 *
	 * @return void
	 */
	public function getPoint()
	{
		$webgameCode = $this->input->get('webgameCode');
		$serverId = $this->input->get('serverId');

		$data[] = array();
		$webgameInfo = $this->webgameInfos[$webgameCode];
		$serverInfo = $this->serverInfos[$serverId];
		if (empty($webgameInfo)) {
			$data['webgameInfo'] = array('code' => 'no', 'name' => 'no');
			$data['serverInfo'] = array('code' => 'no', 'name' => 'no');
		} else {
			$data['webgameInfo'] = array(
				'code' => $webgameInfo['code'],
				'name' => $webgameInfo['name'],
				'coinName' => $webgameInfo['coin_name'],
				'coinUnit' => $webgameInfo['coin_unit'],
				'coinRate' => $webgameInfo['coin_rate'],
				'courageRate' => $webgameInfo['courage_rate']
			);

			$serverInfo = isset($this->serverInfos[$serverId]) ? $this->serverInfos[$serverId] : array();
			if (empty($serverInfo) || $serverInfo['webgame_code'] != $webgameCode) {
				$serverId = $webgameInfo['default_serverid'];
				$serverInfo = isset($this->serverInfos[$serverId]) ? $this->serverInfos[$serverId] : array();
			}
			$data['serverInfo'] = empty($serverInfo) ? array('id' => 'no', 'name' => 'no') : array('id' => $serverInfo['id'], 'name' => $serverInfo['name']);
		}

		echo $this->_jsonp($data);
		return ;
	}

	/**
	 * Get the info of game role
	 *
	 * @return void
	 */
	public function getServerUser()
	{	
		//$data = array('user' => 'yes');
		//echo $this->_jsonp($data);
		//return ;
		
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