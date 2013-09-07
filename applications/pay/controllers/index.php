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

		$this->_loadModel($this->appCode, 'paymonthModel');
		$this->paymonthInfos = $this->paymonthModel->getAllInfos('paymonth', 'id', array(), array(array('listorder', 'desc')));
	}

	/**
	 * Display the index page of the pay
	 *
	 * @return void
	 */
	public function index()
	{	
		$codeServerParam = $this->input->get('scode');
		$midParam = explode('_', $codeServerParam);
		$this->webgameCode = (isset($midParam[0]) && !empty($midParam[0])) ? $midParam[0] : '';
		$this->serverId = (isset($midParam[1]) && !empty($midParam[1])) ? $midParam[1] : '';

		$paymentCode = $this->input->get('pcode');
		$paymentCode = in_array($paymentCode, array_keys($this->paymentInfos)) ? $paymentCode : 'yeepay';
		if ($paymentCode == 'myself') {
			$paymentCode = (isset($moneyInfo['money']) && $moneyInfo['money'] > 0) ? $paymentCode : 'yeepay';
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