<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends Custom_Controller
{
	public function __construct()
	{
		parent::__construct();

		$needLoginMethods = array('index');

		if (in_array($this->method, $needLoginMethods) && empty($this->loginedUserInfo)) {
			redirect('index/login');
		}
		$this->categoryInfos = $this->_getCategoryInfos();
	}

	public function index()
	{
		$this->load->view('index');
	}

	/**
	 * User login
	 *
	 * @return void
	 */
	public function login()
	{
		if (!empty($this->loginedUserInfo)) {
			$this->_messageInfo('您已登录！', $this->baseUrl);
		}
		
		$this->form_validation->set_rules('username', 'name', 'trim|required|xss_clean');
		if ($this->form_validation->run() == false) {
			$this->load->view('login');
		} else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$synloginCode = ''; // 同步登陆js代码
			
			
			$this->load->model('timesModel');
			$remainMinute = $this->timesModel->checkLoginTimes(array('username' => $username, 'isadmin' => 0));
			if ($remainMinute > 0) {
				$this->_showMessage('密码错误次数太多，请<b color="red">' . $remainMinute . '</b>分钟后再登录！', $this->baseUrl . 'index/login');
			}
			
			$where = array('username' => $username);
			$userInfo = $this->memberModel->getInfo($where);
			
			$statusInfos = array('-1' => '用户不存在！', '-2' => '密码不正确！', '-3' => '验证问题回答错误！');

			list($ucInfo['userid'], $ucInfo['username'], $ucInfo['password'], $ucInfo['email']) = uc_user_login($username, $password);
			if ($ucInfo['userid'] <= 0) {
				if ($ucInfo['userid'] == -2) {
					$this->timesModel->writeLoginTimes(array('username' => $username, 'isadmin' => 0), false, $this->ip);
				}
				$message = in_array($ucInfo['userid'], array_keys($statusInfos)) ? $statusInfos[$ucInfo['userid']] : '帐号被锁定！';
				$this->_messageInfo($message, $this->baseUrl . 'index/login');
			}
			if (empty($userInfo) && $ucInfo['userid'] > 0) {
				$userInfo['username'] = $ucInfo['username'];
				$userInfo['email'] = $ucInfo['email'];
				$passwordInfos = $this->_getPassword($ucInfo['password']);

				$userInfo['password'] = $passwordInfos['password'];
				$userInfo['encrypt'] = $passwordInfos['encrypt'];
				$userInfo['regip'] = $this->input->ip_address();
				$userInfo['regdate'] = $this->time;
				$userInfo['ucserver_id'] = $ucInfo['userid'];
				$this->memberModel->addInfo($userInfo);
			}


			if (empty($userInfo)) {
				$message = $statusInfos['-1'];
				$this->_messageInfo($message, $this->baseUrl . 'index/login');
			}

			if ($userInfo['islock']) {
				$this->_messageInfo('帐号被锁定！', $this->baseUrl . 'index/login');
			}

			$updateInfo = array('lastloginip' => $this->ip, 'lastlogintime' => $this->time, 'loginnum' => $userInfo['loginnum'] + 1);
			$this->memberModel->editInfo($updateInfo, $where);
			
			if ($this->settings['ucserver']) {
				//$synloginCode = uc_user_synlogin($userInfo['userid']);
			}
			$setCookieTime = $this->input->post('setcookietime');
			$cookieTime = empty($setCookieTime) ? $this->time + 86400 : $this->time + 864000;

			$encryptString = $userInfo['userid'] . "\t" . $userInfo['username'] . "\t" . $password;
			//echo $encryptString;
			$encryptKey = $this->_getEncryptKey();
			$encrypt = $this->encrypt->encode($encryptString, $encryptKey);

			$this->input->set_cookie(array('name' => 'encrypt', 'value' => $encrypt, 'expire' => $cookieTime));
			$this->input->set_cookie(array('name' => 'userid', 'value' => $userInfo['userid'], 'expire' => $cookieTime));
			$this->input->set_cookie(array('name' => 'username', 'value' => $userInfo['username'], 'expire' => $cookieTime));

			$this->_messageInfo('登录成功！' . $synloginCode, $this->applicationInfos[2]['domain']);
		}
	}

	/**
	 * User logout
	 *
	 * @return void
	 */
	public function logout()
	{
		$synlogoutstr = '';	//同步退出js代码
		$this->input->set_cookie(array('name' => 'encrypt', 'value' => ''));
		$this->input->set_cookie(array('name' => '_userid', 'value' => ''));
		$this->input->set_cookie(array('name' => '_username', 'value' => ''));

		$this->_messageInfo('退出成功！' . $synlogoutstr, $this->baseUrl);
	}

	/**
	 * Register a member
	 *
	 * @return vaoid
	 */
	public function register()
	{
		if (!empty($this->loginedUserInfo)) {
			$this->_messageInfo('您已登录！', $this->baseUrl);
		}
		if(empty($this->settings['allowregister'])) {
		}

		$this->form_validation->set_rules('password', 'name', 'trim|required|xss_clean');
		header("Cache-control: private");
		if ($this->form_validation->run() == false) {
			$this->load->view('register');
		} else {
			$fields = array();
			$this->input->post('haveUsername') == 'yes' && $fields[] = 'username';
			$this->input->post('haveEmail') == 'yes' && $fields[] = 'email';
			$this->input->post('haveRealName') == 'yes' && $fields = array_merge($fields, array('truename', 'idcard'));

			foreach ($fields as $field) {
				$userInfo[$field] = $this->input->post($field);
			}
			$userInfo['userid'] = $this->getUsername();
			if (empty($userInfo['username'])) {
				$userInfo['username'] = $userInfo['userid'];
			} 
			var_dump($userInfo);

			/*$checkUsername = $this->checkUsername();
			if ($checkUsername['status'] == 'error') {
				$this->_messageInfo($checkUsername['message'], $this->applicationInfos[1]['domain'] . 'index/register');
			}*/

			$userid= uc_user_register($userInfo['username'], $this->input->post('password'), $userInfo['email']);
			$userid = intval($userid);
			if ($userid <= 0) {
				$this->_messageInfo('注册失败，请重新注册！' . $userid, $this->baseUrl . 'index/register');
			} else {
				$passwordInfos = $this->_getPassword($this->input->post('password'));

				$userInfo['password'] = $passwordInfos['password'];
				$userInfo['encrypt'] = $passwordInfos['encrypt'];
				$userInfo['regip'] = $this->input->ip_address();
				$userInfo['regdate'] = $this->time;
				$userInfo['ucserver_id'] = $userid;

				$addUser = $this->memberModel->addInfo($userInfo);
				if (empty($addUser)) {
					$this->_messageInfo('注册失败，请重新注册1！' . $userid, $this->applicationInfos[1]['domain']);
				}

				$where = array('username' => $userInfo['username']);
				$userInfo = $this->memberModel->getInfo($where);
				$synloginCode = ''; //uc_user_synlogin($userInfo['userid']);

				$setCookieTime = $this->input->post('setcookietime');
				$cookieTime = empty($setCookieTime) ? $this->time + 86400 : $this->time + 864000;

				$encryptString = $userInfo['userid'] . "\t" . $userInfo['username'] . "\t" . $this->input->post('password');
				//echo $encryptString;
				$encryptKey = $this->_getEncryptKey();
				$encrypt = $this->encrypt->encode($encryptString, $encryptKey);

				$this->input->set_cookie(array('name' => 'encrypt', 'value' => $encrypt, 'expire' => $cookieTime));
				$this->input->set_cookie(array('name' => 'userid', 'value' => $userInfo['userid'], 'expire' => $cookieTime));
				$this->input->set_cookie(array('name' => 'username', 'value' => $userInfo['username'], 'expire' => $cookieTime));
				$this->_messageInfo('恭喜，注册成功！' . $synloginCode, $this->applicationInfos[2]["domain"]);
			}
		}
	}
	
	/**
	 * Check the email whether valid
	 *
	 * @param  string $email
	 * @return mixed
	 */
	public function checkEmail()
	{
		$email = $this->input->post('email');
		$status = 1;
		$isValid = strlen($email) > 6 && preg_match('/^[\w\-\.]+@[\w\-\.]+(\.\w+)+$/', $email);
		if (empty($isValid)) {
			$status = -4;
		}
		if ($this->settings['ucserver'] && $status == 1) {
			$status = uc_user_checkemail($email);
		}

		$statusInfo = array(
			'-4' => '邮箱格式有误!',
			'-5' => '邮箱被禁止！',
			'-6' => '邮箱已存在！',
		);
		$result = $status > 0 ? 1 : (in_array($status, array_keys($statusInfo)) ? $statusInfo[$status] : '邮箱有误！');
		echo $result;
		exit();
	}
	/**
	 * Check username exist
	 *
	 * @return void
	 */
	public function getUserid()
	{
		$username = $this->input->get('username');
		$username = urldecode(iconv('gbk', 'utf-8', $username));

		if (empty($username)) {
			$userid = 0;
		} else {

			$where = array('username' => $username);
			$userInfo = $this->memberModel->getInfo($where);
			$userid = empty($userInfo['userid']) ? 0 : $userInfo['userid'];
		}
		$data['userid'] = $userid;
		echo $this->_jsonp($data);
		exit();
	}

	/**
	 * Edit the password
	 *
	 */
	public function editpwd()
	{
		if (empty($this->loginedUserInfo)) {
			$this->_messageInfo('您还没有登录！', $this->baseUrl);
		}
		
		$this->form_validation->set_rules('password', 'passport', 'trim|required|xss_clean');
		if ($this->form_validation->run() == false) {
			$this->load->view('editpwd');
		} else {
			$oldpassword = $this->input->post('oldpassword');
			$password = $this->input->post('password');
			$password2 = $this->input->post('password2');

			if (empty($oldpassword) || empty($password) || empty($password2) || ($password != $password2)) {
				$this->_messageInfo('输入信息有误，请重新输入！', $this->baseUrl . 'index/editpwd');
			}

			$result = uc_user_edit($this->loginedUserInfo['username'], $oldpassword, $password, 0, 0);
			if ($result === 1) {
				$data = array('password' => $this->_getPassword($password, $this->loginedUserInfo['encrypt']));
				$where = array('userid =' => $this->loginedUserInfo['userid']);

				$editResult = $this->memberModel->editInfo($data, $where);
				if ($editResult) {
					$this->_messageInfo('密码修改成功，请重新登陆！', $this->baseUrl);
				} else {
					$this->_messageInfo('密码修改异常，请重新修改！', $this->baseUrl . 'index/editpwd');
				}
			} else {
				$str = $result == -1 ? '旧密码错误！' : '密码修改失败！';
				$this->_messageInfo($str, $this->baseUrl . 'index/editpwd');
			}
		}
	}
}