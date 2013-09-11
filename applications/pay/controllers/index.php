<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends Custom_Controller
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
		$needLoginMethods = array('mypay', 'myaccount', 'mypaymonth', 'mypaypwd');

		if (in_array($this->method, $needLoginMethods) && empty($this->loginedUserInfo)) {
			$this->_messageInfo('您还没登录，请先登录！', $this->appInfos['passport']['url'] . 'index/login');
		}
		foreach ($this->paymentInfos as $code => $paymentInfo) {
			if ($paymentInfo['payment_status'] == '0' && !in_array($this->loginedUserInfo['username'], $this->testUsers) && $this->method != 'respond') {
				unset($this->paymentInfos[$code]);
			}
		}
		$this->categoryInfos = $this->_getCategoryInfos();
		$this->moneyInfo = array();
		if (!empty($this->loginedUserInfo)) {
			$this->moneyInfo = $this->_getMoneyInfo($this->loginedUserInfo['username']);
		}
	}

	/**
	 * Display the index page of the pay
	 *
	 * @return void
	 */
	public function index()
	{	
		$paymonthId = $this->input->get('paymonth');
		$this->paymonthInfo = isset($this->paymonthInfos[$paymonthId]) ? $this->paymonthInfos[$paymonthId] : false;

		if (empty($this->paymontInfo)) {
			$codeServerParam = $this->input->get('scode');
			$midParam = explode('_', $codeServerParam);
			$webgameCode = (isset($midParam[0]) && !empty($midParam[0])) ? $midParam[0] : '';
			$this->webgameInfo = isset($this->webgameInfos[$webgameCode]) ? $this->webgameInfos[$webgameCode] : false;
			$serverId = (isset($midParam[1]) && !empty($midParam[1])) ? $midParam[1] : '';
			$this->serverInfo = isset($this->serverInfos[$serverId]) ? $this->serverInfos[$serverId] : false;
		}

		$paymentCode = $this->input->get('pcode');
		$paymentCode = in_array($paymentCode, array_keys($this->paymentInfos)) ? $paymentCode : 'yeepay';
		if ($paymentCode == 'myself') {
			$paymentCode = (isset($this->moneyInfo['money']) && $this->moneyInfo['money'] > 0) ? $paymentCode : 'yeepay';
		}
		$this->showPayment = json_encode($this->paymentInfos[$paymentCode]);

		$this->load->view('index');
	}

	/**
	 * Change or account to game
	 *
	 */
	public function exchange()
	{
		$this->load->view('exchange');
	}

	/**
	 * Month pay
	 *
	 */
	public function paymonth()
	{
		$this->load->view('paymonth');
	}

	/**
	 * Month pay
	 *
	 */
	public function mypay()
	{
		$this->load->view('mypay');
	}

	/**
	 * Month pay
	 *
	 */
	public function myaccount()
	{
		$this->load->view('myaccount');
	}

	/**
	 * Month pay
	 *
	 */
	public function mypaypwd()
	{
		$this->load->view('mypaypwd');
	}

	/**
	 * Month pay
	 *
	 */
	public function mypaymonth()
	{
		$this->load->view('mypaymonth');
	}
}