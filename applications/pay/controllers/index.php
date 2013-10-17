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
			$this->_messageInfo('您还没登录，请先登录！', $this->appInfos['passport']['url'] . 'uwebgame/login');
		}
		foreach ($this->paymentInfos as $code => $paymentInfo) {
			if ($paymentInfo['status'] == '0' && !in_array($this->loginedUserInfo['username'], $this->testUsers) && $this->method != 'respond') {
				unset($this->paymentInfos[$code]);
			}
		}
		$this->categoryInfos = $this->_getCategoryInfos();
		$this->moneyInfo = array();
		if (!empty($this->loginedUserInfo)) {
			$this->moneyInfo = $this->_getMoneyInfo($this->loginedUserInfo['username']);
		}

		$this->prefix = '';
	}

	public function test()
	{
		$this->load->view('payResult'); 
	}
	/**
	 * Account to user
	 *
	 * @return void
	 */
	public function index()
	{
		$this->payType = 'touser';
		unset($this->paymentInfos['myself']);

		$this->_showForm();
	}

	/**
	 * Display the index page of the pay
	 *
	 * @return void
	 */
	public function towebgame()
	{
		$this->payType = 'towebgame';
		$codeServerParam = $this->input->get('scode');
		$midParam = explode('_', $codeServerParam);
		$webgameCode = (isset($midParam[0]) && !empty($midParam[0])) ? $midParam[0] : '';
		$this->webgameInfo = isset($this->webgameInfos[$webgameCode]) ? $this->webgameInfos[$webgameCode] : false;

		if (empty($this->webgameInfo) || $this->webgameInfo['type'] == 2) {
			$this->_messageInfo('游戏选择有误！', $this->baseUrl . 'index/exchange');
		}
		$this->serverInfo = array();
		if ($this->webgameInfo['type'] == 3) {
			$serverId = (isset($midParam[1]) && !empty($midParam[1])) ? $midParam[1] : '';
			$this->serverInfo = isset($this->serverInfos[$serverId]) ? $this->serverInfos[$serverId] : false;
		}

		$this->_showForm();
	}

	/**
	 * Pay for a paymonth
	 *
	 * @return void
	 */
	public function topaymonth()
	{
		$this->payType = 'topaymonth';
		$paymonthId = $this->input->get('paymonth');
		$this->paymonthInfo = isset($this->paymonthInfos[$paymonthId]) ? $this->paymonthInfos[$paymonthId] : false;
		$this->webgamePaymonthInfos = array();
		foreach ($this->paymonthInfos as $paymonthInfo) {
			if ($paymonthInfo['webgame_code'] == $this->paymonthInfo['webgame_code']) {
				$this->webgamePaymonthInfos[] = $paymonthInfo;
			}
		}
		if (empty($this->paymonthInfo)) {
			$this->_messageInfo('包月类型有误！', $this->baseUrl . 'index/paymonth');
		}

		$this->_showForm();
	}

	protected function _showForm()
	{
		$paymentCode = $this->input->get('pcode');
		$paymentCode = in_array($paymentCode, array_keys($this->paymentInfos)) ? $paymentCode : 'yeepay';

		$this->showPayment = json_encode($this->paymentInfos[$paymentCode]);

		$this->load->view($this->prefix . 'index');
	}

	/**
	 * Change or account to game
	 *
	 */
	public function exchange()
	{
		$this->load->view($this->prefix . 'exchange');
	}

	/**
	 * Month pay
	 *
	 */
	public function paymonth()
	{
		$this->load->view($this->prefix . 'paymonth');
	}

	/**
	 * Month pay
	 *
	 */
	public function mypayinfo()
	{
		$this->load->view($this->prefix . 'mypayinfo');
	}

	/**
	 * Month pay
	 *
	 */
	public function mypay()
	{
		$this->load->library('pagination');

		$page = intval($this->input->get_post('page'));
		$currentPage = max(1, $page);
		$paginationInfos = $this->_paginationConfig();
		$pageSize = empty($paginationInfos['per_page']) ? 15 : $paginationInfos['per_page'];

		$this->_loadModel('pay', 'payModel');
		$where = $this->_where(true);
		$result = $this->payModel->getInfos('', $where, array(), $currentPage, $pageSize);
		$this->infos = $result['infos'];

		$paginationInfos['base_url'] = $this->baseUrl . 'index/mypay' . '?';
		$paginationInfos['total_rows'] = $result['num'];
		$this->pagination->initialize($paginationInfos);
		$this->pageStr = '<a>' . $result['num'] . '条</a>   <a>第<b>' . $currentPage . '</b>页/总' . ceil($result['num'] / $pageSize) . '页</a>    ';
		$this->pageStr .= $this->pagination->create_links();

		$this->load->view($this->prefix . 'mypay');
	}

	/**
	 * Month pay
	 *
	 */
	public function myaccount()
	{
		$this->load->library('pagination');

		$page = intval($this->input->get_post('page'));
		$currentPage = max(1, $page);
		$paginationInfos = $this->_paginationConfig();
		$pageSize = empty($paginationInfos['per_page']) ? 15 : $paginationInfos['per_page'];

		$this->_loadModel('pay', 'accountModel');
		$where = $this->_where();
		$result = $this->accountModel->getInfos('', $where, array(), $currentPage, $pageSize);
		$this->infos = $result['infos'];

		$paginationInfos['base_url'] = $this->baseUrl . 'index/mypay' . '?';
		$paginationInfos['total_rows'] = $result['num'];
		$this->pagination->initialize($paginationInfos);
		$this->pageStr = '<a>' . $result['num'] . '条</a>   <a>第<b>' . $currentPage . '</b>页/总' . ceil($result['num'] / $pageSize) . '页</a>    ';
		$this->pageStr .= $this->pagination->create_links();

		$this->load->view($this->prefix . 'myaccount');
	}

	/**
	 * Month pay
	 *
	 */
	public function mypaymonth()
	{
		$this->load->view($this->prefix . 'mypaymonth');
	}

	protected function _where($isPay = false)
	{
		$this->pagination->page_query_string=TRUE;
		$this->pagination->enable_query_strings=TRUE;
		$whereArray = array();
		$urlStr = '';

		$timeField = $isPay ? 'pay_time' : 'account_time';
		$startTime = $this->input->get('start_time');
		$endTime = $this->input->get('end_time');
		$endTime = !empty($endTime) ? $endTime . ' 23:59:59' : '';
		if (!empty($startTime) || !empty($endTime)) {
			$whereArray = empty($startTime) ? $whereArray : array_merge($whereArray, array("{$timeField} >=" => strtotime($startTime)));
			$whereArray = empty($endTime) ? $whereArray : array_merge($whereArray, array("{$timeField} <=" => strtotime($endTime)));

			$urlStr .= empty($startTime) ? '' : '&start_time=' . $startTime;
			$urlStr .= empty($endTime) ? '' : '&end_time=' . str_replace(' 23:59:59', '', $endTime);
		}

		$this->_paginationStr($urlStr);
		return $whereArray;
	}
}