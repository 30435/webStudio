<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends Custom_AdminController
{
	public function __construct()
	{
		parent::__construct();
	}
	
	/**
	 * Display the admin index page!
	 *
	 * @return void
	 */
	public function index()
	{
		$this->baseMenus = array();
		foreach ($this->menuInfos as $menuId => $menuInfo) {
			if ($menuInfo['parentid'] > 0) {
				continue;
			}
			$appUrl = $this->appInfos[$menuInfo['app_code']]['url'];
			$appUrl = empty($appUrl) ? $this->baseUrl : $appUrl;
			$url = $appUrl . '/admin/' . $menuInfo['controller'] . '/' . $menuInfo['method'] . '/' . $menuId;
			$menuInfo['url'] = $url;
			$this->baseMenus[$menuId] = $menuInfo;
		}
		//print_r($this->baseMenus);
		$this->load->view('admin/index');
	}
	
	/**
	 * Create the left menu
	 * 
	 * @return void
	 */
	public function leftMenu()
	{
		$parentid = intval($this->uri->segment(4));
		$parentid = empty($parentid) ? 10 : $parentid;
	
		$leftMenus = $this->_getMenuTree($parentid);
		$leftMenuStr = '';
		foreach($leftMenus as $leftMenu) {
			if ($leftMenu['display'] > 1) {
				continue;
			}
			$url = "javascript:_MP('$leftMenu[id]', '$leftMenu[url]');";
			$aMark =  '<a href="' . $url . '" hidefocus="true" style="outline:none;">' . $leftMenu['name'] . '</a>';
			$leftMenuStr .= '<h3 class="f14"><span class="switchs cu on" title="expand_or_contract"></span>' . $leftMenu['name'] . '</h3>';
			$leftMenuStr .= '<ul>';
			$subMenus = $leftMenu['childMenus'];
			if (!empty($subMenus)) {
				foreach ($subMenus as $subMenu) {
					if ($subMenu['display'] > 1) {
						continue;
					}
					$subUrl = "javascript:_MP('$subMenu[id]', '$subMenu[url]');";
					$subMark =  '<a href="' . $subUrl . '" hidefocus="true" style="outline:none;">' . $subMenu['name'] . '</a>';
					$leftMenuStr .= '<li id="_MP' . $subMenu['id'].'" class="sub_menu">' . $subMark . '</li>';
				}
			}
			$leftMenuStr .= '</ul>';
		}
	
		$this->leftMenuStr = $leftMenuStr;
		$this->load->view('admin/leftmenu');
	}
	
	/**
	 * Get the current position
	 * 
	 * @return void
	 */
	final public function curpos()
	{
		$menuid = intval($this->uri->segment(4));
		$menuName = $this->menuInfos[$menuid]['name'];
		$parentid = $this->menuInfos[$menuid]['parentid'];
		if ($parentid > 0) {
			do {
				$menuName = $this->menuInfos[$parentid]['name'] . ' > ' . $menuName;
				$parentid = $this->menuInfos[$parentid]['parentid'];
			} while ($parentid > 0);
		}
	
		exit($menuName);
	}
	
	/**
	 * Manager login
	 *
	 * @return void
	 */
	public function login()
	{
		$this->load->library('session');
		$this->form_validation->set_rules('username', 'name', 'trim|required|xss_clean');
	
		if ($this->form_validation->run() == false) {
			$this->load->view('admin/login');
		} else {
			$targetCheckCode = $this->session->userdata('checkcode');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$checkCode = $this->input->post('checkcode');

			$message = '';
			$refererUrl = $this->baseUrl . 'admin/index/login/';
	
			if (empty($username) || empty($password) || empty($checkCode) || ($targetCheckCode != $checkCode)) {
				$this->_showMessage('请填写有效的帐号、密码和验证码！', $refererUrl);
			}
			
			$this->load->model('admin/managerModel');
			$userInfo = $this->managerModel->getInfo(array('username' => $username));
			
			if (empty($userInfo)) {
				$this->_showMessage('管理员不存在！', $refererUrl);
			}
			
			if ($userInfo['islock'] === '0') {
				$this->_showMessage('管理员帐号被锁定！', $refererUrl);
			}
				
			$this->load->model('timesModel');
			$remainMinute = $this->timesModel->checkLoginTimes(array('username' => $username, 'isadmin' => 1));
			if ($remainMinute > 0) {
				$this->_showMessage('密码错误次数太多，请<b color="red">' . $remainMinute . '</b>分钟后再登录！', $refererUrl);
			}

			$currentPassword = $this->_getPassword($password, $userInfo['encrypt']);
			$checkPassword = ($userInfo['password'] == $currentPassword) ? true : false;
			$this->timesModel->writeLoginTimes(array('username' => $username, 'isadmin' => 1), $checkPassword, $this->ip);
			if ($checkPassword === false) {
				$this->_showMessage('密码错误！', $refererUrl);
			}
	
			$cookieTime = $this->time + 86400;
			$encryptString = $userInfo['id'] . "\t" . $userInfo['username'] . "\t" . $password;
			$encryptKey = $this->_getEncryptKey();
			$encrypt = $this->encrypt->encode($encryptString, $encryptKey);
	
			$this->input->set_cookie(array('name' => 'encrypt_admin', 'value' => $encrypt, 'expire' => $cookieTime));
			$this->input->set_cookie(array('name' => 'userid_admin', 'value' => $userInfo['id'], 'expire' => $cookieTime));
			$this->input->set_cookie(array('name' => 'username_admin', 'value' => $userInfo['username'], 'expire' => $cookieTime));
	
			$updateInfo = array('lastip' => $this->input->ip_address(), 'lasttime' => $this->time, 'loginnum' => $userInfo['loginnum'] + 1);
			$this->managerModel->editInfo($updateInfo, array('username' => $username));
	
			$this->_showMessage('登录成功！', $this->baseUrl . 'admin/');
		}
	}
	
	/**
	 * Get the left menu infos
	 *
	 * @param  $parentid the parent menuid
	 * @return array the left menu infos
	 */
	private function _getMenuTree($parentid)
	{
		$infos = array();
		foreach ($this->menuInfos as $key => $info) {
			if ($info['parentid'] == $parentid) {
				$childMenus = $this->_getMenuTree($info['id']);
				$info['childMenus'] = false;
				if (!empty($childMenus)) {
					$info['childMenus'] = $childMenus;
				}
				$infos[$key] = $info;
			}
		}
	
		return $infos;
	}
	
	/**
	 * Manager logout
	 *
	 * @return void
	 */
	public function logout()
	{
	
		$synlogoutstr = '';	//同步退出js代码
	
		$this->input->set_cookie(array('name' => 'encrypt_admin', 'value' => ''));
		$this->input->set_cookie(array('name' => 'userid_admin', 'value' => ''));
		$this->input->set_cookie(array('name' => 'username_admin', 'value' => ''));
	
		$this->_showMessage('成功退出', $this->baseUrl . 'admin/index/login/');
	}
	
}