<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class frontpay extends Custom_Controller
{
	/**
	 * Initial the controller
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();

		$this->loginedUserInfo = $this->_checkUserLogin();
		foreach ($this->paymentInfos as $code => $paymentInfo) {
			if ($paymentInfo['status'] == '0' && !in_array($this->loginedUserInfo['username'], $this->testUsers) && $this->method != 'respond') {
				unset($this->paymentInfos[$code]);
			}
		}
		$this->categoryInfos = $this->_getCategoryInfos();
	}

	/**
	 * Create pay form
	 *
	 * @return void
	 */
	public function pay()
	{
		$windowString = '';
		$this->params = $this->_checkParams();
		
		if (empty($this->params)) {
			$windowString = 'error';
			echo $windowString;
			exit();
		}
		$paymentCode = $this->params['paymentInfo']['code'];
		$this->params['paymentInfo']['returnUrl'] = $this->baseUrl . '/index/respond?code=' . $paymentCode;
		$this->params['paymentInfo']['notifyUrl'] = $this->baseUrl . '/index/notify?code=' . $paymentCode;

		$datas = array('frontController' => $this, 'paymentInfo' => $this->params['paymentInfo']);
		$this->load->library($paymentCode, $datas);
		$this->buttonStr = $this->$paymentCode->getPayButton($this->params['orderInfo']);

		$encryptKey = $this->_getEncryptKey();
		$orderStr = serialize($this->params['orderInfo']);
		$this->orderStr = $this->encrypt->encode($orderStr, $encryptKey);

		$windowString = $this->load->view('payWindow', '', true);
		echo $windowString;
		exit();
	}

	/**
	 * Deal the pay operatoin
	 *
	 * @return void
	 */
	public function confirmPay()
	{
		$orderStr = $this->input->get_post('orderStr');
		if (empty($orderStr)) {
			echo '充值信息有误,请重新操作!';
			exit();
		}

		$encryptKey = $this->_getEncryptKey();
		$orderStr = $this->encrypt->decode(str_replace(' ', '+' , $orderStr), $encryptKey);

		$orderInfo = unserialize($orderStr);
		if (!is_array($orderInfo) || empty($orderInfo)) {
			echo '充值信息有误,请重新操作!';
			exit();
		}

		$insertInfo = array(
			'type' => $orderInfo['payType'],
			'orderid' => $orderInfo['orderid'],
			'payment_code' => $orderInfo['paymentCode'],
			'payment_rate' => $orderInfo['paymentRate'],
			'money' => $orderInfo['money'],
			'userid' => $orderInfo['userid'],
			'pay_userid' => $orderInfo['pay_userid'],
			'username' => $orderInfo['username'],
			'account_time' => $this->time,
			'day' => date('Ymd', $this->time),
			'status' => '0',
			'paymonth_id' => isset($orderInfo['paymonthId']) ? $orderInfo['paymonthId'] : 0,
			'webgame_code' => isset($orderInfo['webgameCode']) ? $orderInfo['webgameCode'] : '',
			'server_id' => isset($orderInfo['serverId']) ? $orderInfo['serverId'] : 0,
			'server_role' => isset($orderInfo['serverRole']) ? $orderInfo['serverRole'] : '',
		);

		$this->_loadModel(APPCODE, 'accountModel');
		$this->accountModel->addInfo($insertInfo);
		$this->_updateUserMoney($orderInfo['money'], $orderInfo['username'], $orderInfo['userid']);
		echo '1';
		exit();
	}

	/**
	 * Respond the result of the pay
	 *
	 * @return void
	 */
	public function respond()
	{
		
		$paymentCode = $this->input->get('code');
		if (!in_array($paymentCode, array_keys($this->paymentInfos))) {
			exit('paymentCode error');
		}
		$this->currentPayment = $this->paymentInfos[$paymentCode];
		$this->currentPayment['returnUrl'] = $this->baseUrl . '/index/respond?code=' . $paymentCode;
		$this->currentPayment['notifyUrl'] = $this->baseUrl . '/index/notify?code=' . $paymentCode;

		$params = array('frontController' => $this, 'paymentInfo' => $this->currentPayment);
		$this->load->library($paymentCode, $params);
		$respondInfo = $this->$paymentCode->respond();
		/*$respondInfo = Array
(
    'id' => '22',
    'orderid' => '2013091824189',
    'orderid_plat' => '',
    'payment_code' => 'yeepay',
    'type' => 'topaymonth',//'touser','towebgame',//	
    'webgame_code' => 'nova',
    'server_id' => '1',//'0',
    'server_role' => '',
    'paymonth_id' => '1',
    'pay_userid' => '1286042',
    'userid' => '1286042',
    'username' => 'bbbbbb',
    'mobile' => '',
    'payment_rate' => '0.3',
    'money' => '5.00',
    'money_valid_middle' => '5',
    'money_valid' => '3.5',
    'account_time' => '1379474158',
    'day' => '20130918',
    'account_time_valid' => '1379474159',
    'account_data' => 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:1:"5";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013091824189";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"e35c3ea593425a5bd5636b927095e0df";}',
    'status' => '1',
    'handpay_manager' => '',
);
		print_r($respondInfo);*/
		if ($respondInfo['status'] === '1') {
			$accountType = $respondInfo['type'];
			$payInfos = array(
				'payType' => $accountType,
				'accountId' => $respondInfo['orderid'],
				'username' => $respondInfo['username'],
				'userid' => $respondInfo['userid'],
				'money' => floor($respondInfo['money_valid']),
				'moneyMiddle' => $respondInfo['money_valid_middle'],
			);
			$payInfos = $accountType == 'touser' ? false : $payInfos;
			$payInfos = $accountType == 'topaymonth' ? (empty($respondInfo['paymonth_id']) ?  false : array_merge($payInfos, array('paymonthId' => $respondInfo['paymonth_id']))) : $payInfos; print_r($payInfos);
			$payInfos = ($accountType == 'towebgame') ? (empty($respondInfo['webgame_code']) || empty($respondInfo['server_id'])) ? 
				false : array_merge($payInfos, array('webgameCode' => $respondInfo['webgame_code'], 'serverId' => $respondInfo['server_id'], 'serverRole' => $respondInfo['server_role'])) : $payInfos;

			if (!empty($payInfos)) {
				$this->session->set_userdata('payInfos', $payInfos);
				header('Location:' . $this->appInfos['webgame']['url'] . 'frontgame/pay/');
			} else {
				$this->payResult = true;
				$this->message = '充值成功！';
				$this->respondInfo = $respondInfo;
				//$message = '成功充值到帐号<b>' . $respondInfo['username'] . '</b>  <b>' . $respondInfo['money_valid'] . '</b>元';
				$this->load->view('payResult');
			}
		} else if ($respondInfo['status'] === '4') {
			header('Location:' . $this->applicationInfos[1]['domain']);
		} else {
			$this->payResult = false;
			$this->message = '充值异常！';
			$this->respondInfo = $respondInfo;

			$this->load->view('payResult');
		}
	}

	/**
	 * Notify the result of the pay
	 *
	 * @return void
	 */
	public function notify()
	{
		$paymentCode = $this->uri->segment(3);
		if (!in_array($paymentCode, array_keys($this->paymentInfos))) {
			exit('paymentCode error');
		}

		$this->currentPayment = $this->paymentInfos[$paymentCode];
		$this->currentPayment['returnUrl'] = $this->applicationInfos[3]['domain'] . '/index/respond/' . $paymentCode;
		$this->currentPayment['notifyUrl'] = $this->applicationInfos[3]['domain'] . '/index/notify/' . $paymentCode;
		$params = array('db' => $this->currentDb, 'paymentInfo' => $this->currentPayment);
		$this->load->library($paymentCode, $params);
		$respondInfo = $this->$paymentCode->notify();
	}

	/**
	 * Pay for webgame
	 *
	 * @return void
	 */
	public function change($payType = '', $infos = array())
	{
		$payType = empty($payType) ? $this->input->post('payType') : $payType;
		$payFields = array(
			'topaymonth' => array('username', 'money', 'paymonthId', 'payUserid'),
			'towebgame' => array('username', 'money', 'webgameCode', 'serverId', 'payUserid'),
		);
		if (!isset($payFields[$payType])) {
			exit('paytype error'); //$this->_messageInfo('支付类型有误！', $this->baseUrl);
		}

		$payInfos['payType'] = $payType;
		$payInfos['accountId'] = isset($infos['accountId']) ? $infos['accountId'] : false;
		foreach ($payFields[$payType] as $payField) {
			$payInfos[$payField] = isset($infos[$payField]) ? $infos[$payField] : $this->input->post($payField);
			if ($payField != 'payUserid' && empty($payInfos[$payField])) {
				exit($payField . ' empty');//$this->_messageInfo('信息 ' . $payField . ' 不能为空', $this->baseUrl);
			}
		}

		$this->load->library('session');
		$this->session->set_userdata('payInfos', $payInfos);
		header('Location:' . $this->appInfos['webgame']['url'] . 'frontgame/pay/');
	}

	/**
	 * Check the params of the pay action
	 *
	 * @return array | boolean
	 */
	protected function _checkParams()
	{
		$fields = array('payType', 'username', 'money', 'paymentCode', 'paymentRate');
		$orderInfo = $params = array();
		foreach ($fields as $field) {
			$orderInfo[$field] = $this->input->get_post($field);
		}

		$params['paymentInfo'] = isset($this->paymentInfos[$orderInfo['paymentCode']]) ? $this->paymentInfos[$orderInfo['paymentCode']] : false;
		if ($orderInfo['money'] < 1 || !in_array($orderInfo['payType'], array('topaymonth', 'towebgame', 'touser')) || empty($params['paymentInfo']) || $params['paymentInfo']['rate'] != $orderInfo['paymentRate']) {
			exit('ddd');//return false;
		}
		if ($orderInfo['payType'] == 'topaymonth') {
			$orderInfo['paymonthId'] = $this->input->get_post('paymonthId');
			if (empty($this->paymonthInfos[$orderInfo['paymonthId']])) {
				exit('eee');//return false;
			}
			$params['paymonthInfo'] = $this->paymonthInfos[$orderInfo['paymonthId']];
			$orderInfo['webgameCode'] = $params['paymonthInfo']['webgame_code'];
			$params['webgameInfo'] = isset($this->webgameInfos[$orderInfo['webgameCode']]) ? $this->webgameInfos[$orderInfo['webgameCode']] : false;
			if (empty($params['webgameInfo'])) {
				exit('zzz');//return false;
			}
		}

		if ($orderInfo['payType'] == 'towebgame') {
			$orderInfo['webgameCode'] = $this->input->get_post('webgameCode');
			$params['webgameInfo'] = isset($this->webgameInfos[$orderInfo['webgameCode']]) ? $this->webgameInfos[$orderInfo['webgameCode']] : false;
			$orderInfo['serverId'] = $this->input->get_post('serverId');
			$params['serverInfo'] = isset($this->serverInfos[$orderInfo['serverId']]) ? $this->serverInfos[$orderInfo['serverId']] : false;
			$orderInfo['serverRole'] = $this->input->get_post('serverRole');
			if (empty($params['webgameInfo']) || empty($params['serverInfo']) || $orderInfo['webgameCode'] != $params['serverInfo']['webgame_code']) {
				exit('fff');//return false;
			}
		}
			
		$orderInfo['pay_userid'] = isset($this->loginedUserInfo['userid']) ? $this->loginedUserInfo['userid'] : 0;
		$userInfo = (isset($this->loginedUserInfo) && $orderInfo['username'] == $this->loginedUserInfo['username']) ? $this->loginedUserInfo : $this->getUserInfo(array('username' => $orderInfo['username']));
		$params['userInfo'] = (isset($this->loginedUserInfo) && $orderInfo['username'] == $this->loginedUserInfo['username']) ? $this->loginedUserInfo : $this->getUserInfo(array('username' => $orderInfo['username']));
		if (empty($userInfo)) {
			exit('gg');//return false;
		}
		$orderInfo['userid'] = $userInfo['userid'];

		$orderInfo['orderid'] = $this->_createSingleRandomStr();
		$params['orderInfo'] = $orderInfo;
		//print_r($params);
		return $params;
	}
}