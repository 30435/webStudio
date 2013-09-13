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
			if ($paymentInfo['payment_status'] == '0' && !in_array($this->loginedUserInfo['username'], $this->testUsers) && $this->method != 'respond') {
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
		$paymentCode = $this->orderInfo['paymentCode'];
		$this->currentPayment['returnUrl'] = $this->baseUrl . '/index/respond?code=' . $paymentCode;
		$this->currentPayment['notifyUrl'] = $this->baseUrl . '/index/notify?code=' . $paymentCode;

		$params = array('frontController' => $this, 'paymentInfo' => $this->currentPayment);
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

		$where = array('username' => $orderInfo['username']);
		$userInfo = $this->getUserInfo($where);
		if (empty($userInfo) || $userInfo['userid'] != $orderInfo['getuserid']) {
			echo '用户' . $orderInfo['username'] . '不存在,请重新操作!';
			exit();
		}
		$insertInfo = array(
			'orderid' => $orderInfo['orderid'],
			'payment_code' => $orderInfo['paymentCode'],
			'payment_rate' => $orderInfo['paymentRate'],
			'money' => $orderInfo['money'],
			'get_userid' => $orderInfo['getuserid'],
			'pay_userid' => $orderInfo['payuserid'],
			'get_username' => $orderInfo['username'],
			'account_time' => $this->time,
			'day' => date('Ymd', $this->time),
			'account_status' => '0',
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
		if ($respondInfo['account_status'] === '1') {			
			if ($respondInfo['pay_type'] == 1 && !empty($respondInfo['webgame_code']) && !empty($respondInfo['serverid'])) {
				$this->load->library('session');
				$payInfos = array(
					'type' => 'respond',
					'orderidPlat' => $respondInfo['orderid'],
					'username' => $respondInfo['get_username'],
					'money' => $respondInfo['money_valid'],
					'webgameCode' => $respondInfo['webgame_code'],
					'serverId' => $respondInfo['serverid'],
					'userid' => $respondInfo['get_userid'],
					'serverRole' => $respondInfo['server_role'],
					'usernamePay' => $respondInfo['get_username'],
					'moneyMiddle' => $respondInfo['money_valid_middle'],
				);
				$this->session->set_userdata('payInfos', $payInfos);
				header('Location:' . $this->appInfos['webgame']['url'] . '/frontgame/pay/');
			} else {
				$this->payResult = true;
				$this->message = '充值成功！';
				$this->respondInfo = $respondInfo;
				//$message = '成功充值到帐号<b>' . $respondInfo['get_username'] . '</b>  <b>' . $respondInfo['money_valid'] . '</b>元';
				$this->load->view('payResult');
			}
		} else if ($respondInfo['account_status'] === '4') {
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
		$paymentCode = $this->input->get_post('paymentCode'); 
		$paymentRate = $this->input->get_post('paymentRate');
		$this->currentPayment = isset($this->paymentInfos[$paymentCode]) && $this->paymentInfos[$paymentCode]['rate'] == $paymentRate ? $this->paymentInfos[$paymentCode] : false;
		$username = $this->input->get_post('username');
		$getuserid = $this->input->get_post('getuserid');
		$payuserid = $this->input->get_post('payuserid');
		$money = $this->input->get_post('money');

		if (empty($this->currentPayment) ||  empty($username) || empty($money)) {
			return false;
		}

		$orderInfo = array(
			'paymentCode' => $paymentCode,
			'paymentRate' => $paymentRate,
			'username' => $username,
			'money' => $money,
			'getuserid' => $getuserid,
			'payuserid' => $payuserid,
		);
		$orderInfo['orderid'] = $this->_createSingleRandomStr();

		return $orderInfo;
	}
}