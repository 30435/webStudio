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
		$this->orderInfo = $this->_checkParams();
		
		if (empty($this->orderInfo)) {
			$windowString = 'error';
			echo $windowString;
			exit();
		}
		$paymentCode = $this->orderInfo['paymentInfo']['code'];
		$this->orderInfo['paymentInfo']['returnUrl'] = $this->baseUrl . '/index/respond?code=' . $paymentCode;
		$this->orderInfo['paymentInfo']['notifyUrl'] = $this->baseUrl . '/index/notify?code=' . $paymentCode;

		$params = array('frontController' => $this, 'paymentInfo' => $this->orderInfo['paymentInfo']);
		$this->load->library($paymentCode, $params);
		$this->buttonStr = $this->$paymentCode->getPayButton($this->orderInfo);

		$encryptKey = $this->_getEncryptKey();
		$orderStr = serialize($this->orderInfo);
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
			'orderid' => $orderInfo['orderid'],
			'payment_code' => $orderInfo['paymentCode'],
			'payment_rate' => $orderInfo['paymentRate'],
			'money' => $orderInfo['money'],
			'userid' => $orderInfo['getuserid'],
			'pay_userid' => $orderInfo['payuserInfopay_userid'],
			'username' => $orderInfo['username'],
			'account_time' => $this->time,
			'day' => date('Ymd', $this->time),
			'status' => '0',
		);

		$this->_loadModel(APPCODE, 'accountModel');
		$this->accountModel->addInfo($insertInfo);
		$this->_updateUserMoney($orderInfo['money'], $orderInfo['username'], $orderInfo['getuserid']);
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
		if ($respondInfo['status'] === '1') {			
			if ($respondInfo['type'] == 1 && !empty($respondInfo['webgame_code']) && !empty($respondInfo['serverid'])) {
				$this->load->library('session');
				$payInfos = array(
					'type' => 'respond',
					'orderidPlat' => $respondInfo['orderid'],
					'username' => $respondInfo['username'],
					'money' => $respondInfo['money_valid'],
					'webgameCode' => $respondInfo['webgame_code'],
					'serverId' => $respondInfo['serverid'],
					'userid' => $respondInfo['userid'],
					'serverRole' => $respondInfo['server_role'],
					'usernamePay' => $respondInfo['username'],
					'moneyMiddle' => $respondInfo['money_valid_middle'],
				);
				$this->session->set_userdata('payInfos', $payInfos);
				header('Location:' . $this->appInfos['webgame']['url'] . '/frontgame/pay/');
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
		$orderInfo = array();
		foreach ($fields as $field) {
			$orderInfo[$field] = $this->input->get_post($field);
		}

		$this->paymentInfo = isset($this->paymentInfos[$orderInfo['paymentCode']]) ? $this->paymentInfos[$orderInfo['paymentCode']] : false;
		if ($orderInfo['money'] < 1 || !in_array($orderInfo['payType'], array('topaymonth', 'towebgame', 'touser')) || empty($this->paymentInfo) || $this->paymentInfo['rate'] != $orderInfo['paymentRate']) {
			exit('ddd');//return false;
		}
		if ($orderInfo['payType'] == 'topaymonth') {
			$paymonthId = $this->input->get_post('paymonthId');
			if (empty($this->paymonthInfos[$paymonthId])) {
				exit('eee');//return false;
			}
			$this->paymonthInfo = $this->paymonthInfos[$paymonthId];
		}

		if ($orderInfo['payType'] == 'towebgame') {
			$webgameCode = $this->input->get_post('webgameCode');
			$this->webgameInfo = isset($this->webgameInfos[$webgameCode]) ? $this->webgameInfos[$webgameCode] : false;
			$serverId = $this->input->get_post('serverId');
			$this->serverInfo = isset($this->serverInfos[$serverId]) ? $this->serverInfos[$serverId] : false;
			$serverRole = $this->input->get_post('serverRole');
			if (empty($this->webgameInfo) || empty($this->serverInfo) || $webgameCode != $this->serverInfo['webgame_code']) {
				exit('fff');//return false;
			}
		}
			
		$orderInfo['pay_userid'] = isset($this->loginedUserInfo['userid']) ? $this->loginedUserInfo['userid'] : 0;
		$userInfo = (isset($this->loginedUserInfo) && $orderInfo['username'] == $this->loginedUserInfo['username']) ? $this->loginedUserInfo : $this->getUserInfo(array('username' => $orderInfo['username']));
		$orderInfo['userInfo'] = (isset($this->loginedUserInfo) && $orderInfo['username'] == $this->loginedUserInfo['username']) ? $this->loginedUserInfo : $this->getUserInfo(array('username' => $orderInfo['username']));
		if (empty($userInfo)) {
			exit('gg');//return false;
		}
		$orderInfo['userid'] = $userInfo['userid'];

		$orderInfo['orderid'] = $this->_createSingleRandomStr();
//print_r($orderInfo);
		return $orderInfo;
	}
}