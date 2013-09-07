<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class frontgame extends Custom_Controller
{

	public function __construct()
	{
		parent::__construct();

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
			$this->_messageInfo('请先登录！', $this->applicationInfos[1]['domain']);  //跳转到主页面
		}
		
		$this->username = $this->loginedUserInfo['username'];
		$isTestUser = in_array($this->username, $this->testUsers) ? true : false;

		$code = strval($this->uri->segment(3));
		$webgameInfo = $this->_checkWebgame($code, $isTestUser);
		
		$serverId = intval($this->uri->segment(4));
		$serverInfo = $this->_checkServer($serverId, $webgameInfo, $isTestUser);

		$this->currentServerInfo = $serverInfo;
		$params = array(
			'userid' => $this->userid,
			'username' => $this->username,
			'channel_code' => $this->loginedUserInfo['channel_code'],
			'resource_id' => $this->loginedUserInfo['resource_id'],
			'subinfo' => $this->loginedUserInfo['subinfo'],				
			'webgameInfo' => $webgameInfo,
			'serverInfo' => $serverInfo,
			'regdate' => $this->loginedUserInfo['regdate'],
		);

		$this->headerTitle =$webgameInfo['name'].' | 敢玩游戏网 | 敢玩游戏 敢拼天下 www.ganwan.com';
		$this->load->library($code, $params);

		$playUrl = $this->$code->getPlayUrl();
		if (empty($playUrl)) {
			$this->_messageInfo('游戏服务器有误，请重新连接！', $this->baseUrl);
		}

		$this->_updateWebgameInfo($params);
		$this->playurl=$playUrl;
		$this->code=$code;
		$this->load->view('playgame');
	}
	
	protected function _checkWebgame($code, $isTestUser)
	{
		$webgameInfo = $this->webgameInfos[$code];
		$webgameStatus = !empty($webgameInfo['code_status']) ? $webgameInfo['code_status'] : '';

		if (((empty($webgameInfo) || empty($webgameStatus))) && empty($isTestUser)) {
			$this->_messageInfo('游戏代码有误！', $this->applicationInfos[2]['domain']);  //跳转到主页面
		}
		if ($webgameStatus === '3' && empty($isTestUser)) {
			if (!empty($webgameInfo['maintain_url'])) {
				redirect($webgameInfo['maintain_url']);
			} else {
				$this->_messageInfo('游戏即将开放！', $this->applicationInfos[2]['domain']);  //跳转到主页面
			}
		}
		$this->_checkWebgameStatus($webgameStatus,$webgameInfo,$isTestUser);

		return $webgameInfo;
	}
	
	protected function _checkWebgameStatus($webgameStatus,$webgameInfo,$isTestUser){
		$urls = '';
		$status = '';
		$mess = $this->game_status_arr[$webgameStatus];
		if(!empty($isTestUser)){
			return true;
		}
		if($webgameStatus === '4'){
			//如果  开始时间 和结束时间都不为空
			if(!empty($webgameInfo['starttime']) && !empty($webgameInfo['endtime'])){
				//判断当前时间收否在  规定的时间范围内
				if(($this->time >= $webgameInfo['starttime']) && ($this->time <= $webgameInfo['endtime'])){
					//如果在范围内  提示错误
					$urls = !empty($webgameInfo['maintain_url']) ? 'y' : 'n';
					
				}elseif($this->time > $webgameInfo['endtime']){	//判断当前时间是否大于结束时间，如果大于证明已经维护把状态调整为1
					$status = 1;
				}else{
					//  及不在 范围内  也不大于结束时间   说明是小与开始时间  可以正常玩游戏
				}
			}elseif(!empty($webgameInfo['endtime'])){		//如果只有结束时间	
				if($this->time <= $webgameInfo['endtime']){	//是否小于结束时间   小于说明正在维护
					$urls = !empty($webgameInfo['maintain_url']) ? 'y' : 'n';
				}else{
					//恢复状态 
					$status = 1;
				}
			}else{	//没有时间  或只有 开始时间
				$urls = !empty($webgameInfo['maintain_url']) ? 'y' : 'n';
			}
			
			if($urls == 'y'){
				redirect($webgameInfo['maintain_url']);
			}elseif($urls == 'n'){
				$this->_messageInfo($mess,$this->applicationInfos[2]['domain']);
			}else{
			
			}
			
			if($status == 1){
				$this->currentDb->where('code',$webgameInfo['code']);
				$table = 'webgame';
				$data = array(
					'status'=>'1',
					'starttime'=>0,
					'endtime'=>0
				);
				$this->currentDb->update($table,$data);
			}
		}
	}
	/**
	 * Get the serverInfo for user to play a game
	 *
	 * @param  int $serverId
	 * @return boolean | array
	 */
	protected function _checkServer($serverId, $webgameInfo, $isTestUser)
	{
		$serverInfo = false;
		$serverInfo = isset($this->serverInfos[$serverId]) ? $this->serverInfos[$serverId] : false;

		if (empty($serverInfo)) {
			$memberTable = 'member';
			$query = $this->currentDb->select('serverid')->from($memberTable)
				->where(array('username' => $this->loginedUserInfo['username'], 'webgame_code' => $webgameInfo['code']))->order_by('lasttime', 'desc');
			$query = $this->currentDb->get();
			$userInfo = $query->row_array();
			if (!empty($userInfo)) {
				$serverInfo = isset($this->serverInfos[$userInfo['serverid']]) ? $this->serverInfos[$userInfo['serverid']] : false;
			}
		}
		if (empty($serverInfo)) {
			$defaultServerId = $webgameInfo['default_serverid'];

			if (!empty($defaultServerId)) {
				$serverInfo = isset($this->serverInfos[$defaultServerId]) ? $this->serverInfos[$defaultServerId] : false;
			}
		}

		$serverStatus = $this->_checkServerStatus($serverInfo,$isTestUser);
		$statusInfo = array('0' => '服务器已关闭', '1' => '', '2' => '服务器正在维护', '3' => '服务器即将开放', '4' => '服务器爆满,请到最新开放的服务器玩游戏');
		$message = isset($statusInfo[$serverStatus]) ? $statusInfo[$serverStatus] : '请指定有效的游戏服务器！';
		if (!empty($message) && empty($isTestUser)) {
			if (!empty($serverInfo['maintain_url'])) {
				redirect($serverInfo['maintain_url']);
			} else {
				$this->_messageInfo($message, $webgameInfo['url_server']);
			}
		}
		return $serverInfo;
	}
	
	protected function _checkServerStatus($serverInfo,$isTestUser)
	{
		$server_table = 'server';
		$data['status'] = 1;
		$data['starttime'] = 0;
		$data['endtime'] = 0;
		if(!empty($isTestUser)){
			return true;
		}
		$serverStatus = isset($serverInfo['status']) ? $serverInfo['status'] : 'no';
		
		if ($serverStatus == '2') {
			$starttime = $serverInfo['starttime'];
			$endtime = $serverInfo['endtime'];

			if(!empty($starttime) && !empty($endtime)){		//开始时间和结束时间都不为空
				if($this->time > $starttime && $this->time < $endtime){		//判断当前时间 是否在维护时间区间
					
				}elseif($this->time > $endtime){	//如果当前时间大于结束时间   说明已经维护过    修改服务器状态
					$serverStatus = 1;
					$this->currentDb->where('id',$serverInfo['id']);
					$this->currentDb->update($server_table,$data);
					
				}elseif($this->time < $starttime){	//如果当前时间  小于 开始时间   说明还没又维护   可以玩游戏  但是不修改服务器状态
					$serverStatus = 1;
				}else{	
					
				}
			//	$serverStatus = ($this->time < $starttime || $this->time > $endtime) ? '1' : $serverStatus;
			}elseif(!empty($endtime)){			//只有结束时间
				if($this->time > $endtime){	//如果当前时间大于结束时间   说明已经维护过    修改服务器状态
					$serverStatus = 1;
					$this->currentDb->where('id',$serverInfo['id']);
					$this->currentDb->update($server_table,$data);
				}
			}else{		//开始和结束 时间都为空   或 只有开始时间
				
			}
		}
		if ($serverStatus == '3') {
			$serverOnTime = $serverInfo['server_on_time'];
			
			if($this->time >= $serverOnTime){
				$serverStatus = 1;
				$this->currentDb->where('id',$serverInfo['id']);
				$this->currentDb->update($server_table,$data);
			}
			//$serverStatus = $this->time >= $serverOnTime ? '1' : $serverStatus;
		}
		
		return $serverStatus;
	}

	/**
	 * Write the user play game info
	 *
	 * @return void
	 */
	protected function _updateWebgameInfo($params, $isPay = false)
	{
		$memberTable = 'member';
		$query = $this->currentDb->get_where($memberTable, array('username' => $params['username'], 'serverid' => $params['serverInfo']['id']));
		$userInfo = $query->row_array();

		$table = 'record';
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
			'channel_code' => $params['channel_code'],
			'subinfo' => $params['subinfo'],
			'resource_id' => $params['resource_id'],
			'inputtime' => $this->time,
			'day' => date('Ymd', $this->time),
			'active_time' => $activeTime,
			'active_day' => $activeDay,
			'active_nat_time' => $activeNatTime,
			'active_nat_day' => $activeNatDay,
			'record_type' => $recordType,
		);
		$data = array_merge($data, $dataExt);
		$this->currentDb->insert($table, $data);

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
				'lasttime_enter' => $this->time,
				'lasttime' => $this->time,
			);
		}
		$data = array_merge($data, $dataExt);
		if (empty($userInfo)) {
			$data['username'] = $params['username'];
			$data['channel_code'] = $params['channel_code'];
			$data['webgame_code'] = $params['webgameInfo']['code'];
			$data['serverid'] = $params['serverInfo']['id'];
			$data['userid'] = $params['userid'];
			$data['firsttime'] =$data['lasttime'] =  $this->time;
			$this->currentDb->insert($memberTable, $data);
		} else {
			$this->currentDb->where(array('username' => $params['username'], 'serverid' => $params['serverInfo']['id']));
			$this->currentDb->update($memberTable, $data);
		}
	}

	/**
	 * 玩过游戏
	 *
	 * @return void
	 */
	public function myWebgame()
	{
		if (empty($this->loginedUserInfo)) {
			$returnArray = array();
		} else {
			$memberTable = 'member';
			$username = $this->loginedUserInfo['username'];
			$userInfos = $this->currentDb->order_by('lasttime desc')->get_where($memberTable, array('username' => $username))->result_array();
			$playedServers = array();
			//用来保存游戏代码
			$temp_recorder=array();

			foreach ($userInfos as $userInfo) {
				$playedServers[] = $userInfo['serverid'];
			}

			if (empty($playedServers)) {
				$myWebgameInfos['nogame'] = "您没有玩过的游戏!";
			} else {
				$counter=0;
				foreach($userInfos as $v){
					if(count($temp_recorder)>1) break;
					if (in_array($v['serverid'], $playedServers)&& in_array($v['webgame_code'],$this->recommand_game_arr)) {
						if(!in_array($v['webgame_code'],$temp_recorder)){
							array_push($temp_recorder,$v['webgame_code']);
						}else{
							continue;
						}
						@$server=$this->serverInfos[$v['serverid']];
						$game_1=$this->webgameInfos[$v['webgame_code']];
						//unset($game['key_login'],$game['key_pay'],$game['pic_middle'],$game['pic_big'],$game['coin_name'],$game['coin_rate'],$game['url_home'],$game['url_server'],$game['type'],$game['show_position'],$game['ispay'],
								//$game['status'],$game['coin_unit'],$game['description'],$game['card_desc'],$game['brief'],$game['listorder'],$game['url_bbs']);
						$game['code'] = $game_1['code'];
						$game['name'] = $game_1['name'];
						$game['serverName'] = $server['name'];
						$game['serverId'] = $v['serverid'];
						$game['picsmall'] = $this->publicConfig['customUploadUrl'].$game_1['pic_small'];
						//unset($game['pic_small']);
						$myWebgameInfos[] = $game;
					}

				}

			}
			$returnArray['my'] = $myWebgameInfos;
			//$returnArray['rec'] = $recWebgames;
		}
		echo $this->_jsonp($returnArray);
		return ;
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
	
	//支付返勇气币
	protected function _payRebateCourage($userInfo,$money,$webgameInfo,$serverInfo,$params){
		$this->courage_money = floor($money/5);
		if($this->courage_money <=0 ){
			return;
		}
		$pay = $this->_loadDatabase('pay');
		$courage_detail_table = 'courage_detail';
			
		$detail_data = array(
				'userid'=>$userInfo['userid'],
				'username'=>$userInfo['username'],
				'gettime' =>time(),
				'courage_money'=>$this->courage_money,
				'source'=>3,
				'state'=>1,
				'webgame_code'=>$webgameInfo['code'],
				'serverid'=>$serverInfo['id'],
				'reason'=>$params['orderid']
		);
		$pay->insert($courage_detail_table,$detail_data);
	
		$member_courage = 'member_courage';
		$query = $pay->where('userid',$userInfo['userid'])->get($member_courage);
		@$result = $query->row_array();
	
		$courage_data['courage'] = isset($result['courage']) ? $result['courage']+$this->courage_money : $this->courage_money;
		$courage_data['all_courage'] = isset($result['all_courage']) ? $result['all_courage'] + $this->courage_money : $this->courage_money;
	
		if(!empty($result)){
			$pay->where('userid',$userInfo['userid']);
			$pay->update($member_courage,$courage_data);
		}else{
			$courage_data['userid'] = $userInfo['userid'];
			$courage_data['username'] = $userInfo['username'];
			$pay->insert($member_courage,$courage_data);
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
	 *支付 游戏 选择
	 *
	 * @return void
	 */
	public function getWebgame()
	{
		//$infos = array_chunk($this->webgameInfos, 3, true);
		$payWebgames = array();
		$currentUser = isset($this->loginedUserInfo['username']) ? $this->loginedUserInfo['username'] : '';
		foreach ($this->webgameInfos as $webgameCode => $webgameInfo) {
			if($webgameInfo['ispay'] == 1 || in_array($currentUser, $this->testUsers)) {
				unset($webgameInfo['key_login'],$webgameInfo['card_desc'],$webgameInfo['brief'],$webgameInfo['description'],$webgameInfo['pic_small'],$webgameInfo['pic_middle'],$webgameInfo['pic_big']);
				$payWebgames[$webgameCode] = $webgameInfo;
			}
		}
		$data['webgame'] = $payWebgames;
		$data['mygame'] = array();//$infos[1];

		echo $this->_jsonp($data);
		return ;
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
		/*$data = array('user' => 'yes');
		echo $this->_jsonp($data);
		return ;
		*/
		$username = $this->input->get('username');
		$serverId = $this->input->get('serverId');
		$serverInfo = isset($this->serverInfos[$serverId]) ? $this->serverInfos[$serverId] : '';
		$data = array('user' => 'no');

		if (empty($username) || empty($serverId) || empty($serverInfo)) {
			echo $this->_jsonp($data);
			return ;
		}
		
		if($username==$this->loginedUserInfo['username']){
			$puserid=$this->loginedUserInfo['userid'];
		}else{
			$payUserInfos=$this->_getUserByUsername($username);
			//var_dump($payUserInfos);
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

	/**
	 * 支付 服务器选择
	 *
	 * @return void
	 */
	public function getServer()
	{
		$webgame = strval($this->uri->segment(3));
		if (empty($webgame)) {
			//echo 'no';
			//exit();
		}
		$serverInfos = array();
		$currentUser = isset($this->loginedUserInfo['username']) ? $this->loginedUserInfo['username'] : '';
		foreach ($this->serverInfos as $serverInfo) {
			if ($serverInfo['webgame_code'] == $webgame && $serverInfo['status'] == '1' && $serverInfo['ispay'] == '1') {
				$serverInfos[] = $serverInfo;
			}
			if (in_array($currentUser, $this->testUsers) && $serverInfo['status'] == '3') {
				$serverInfos[] = $serverInfo;
			}
		}
		$data['server'] = $serverInfos;
		echo $this->_jsonp($data);
		//echo $result;/**/
		return ;
	}

	/**
	 * The interface of webplat application
	 *
	 * @return void
	 */
	public function newServers()
	{
		$serverInfos = array();
		$i = 0;
		foreach ($this->serverInfos as $serverInfo) {
			if (($serverInfo['status'] == 1 || $serverInfo['status'] == 3)) {
				$serverInfos[$serverInfo['id']] = $serverInfo['server_on_time'];
				$i++;
			}
		}
		//print_r($serverInfos);
		arsort($serverInfos);
		$serverInfos=array_chunk($serverInfos,10,true);
		$serverInfos=$serverInfos[0];
		//print_r($serverInfos);die;
		$data = array();
		$i = 1;
		foreach ($serverInfos as $serverId => $serverOnTime) {
			$currentServer = $this->serverInfos[$serverId];
			$webgameCode = $currentServer['webgame_code'];
			$currentWebgame = $this->webgameInfos[$webgameCode];

			$data[$i]['serverid'] = $serverId;
			$data[$i]['webgameCode'] = $webgameCode;
			$data[$i]['website'] = $currentWebgame['url_home'];
			$data[$i]['urlServer'] = $currentWebgame['url_server'];
			$data[$i]['name'] = $currentWebgame['name'];
			$data[$i]['serverNum'] =trim($currentServer['name']);

			$data[$i]['date'] = date('m-d', $serverOnTime);
			$data[$i]['time'] = date('H:i', $serverOnTime);
			$i++;
		}

		echo $this->_jsonp($data);
		return ;
	}
}