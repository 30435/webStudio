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
			if ($this->settings['ucserver']) {
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
			}

			if (empty($userInfo)) {
				$message = $statusInfos['-1'];
				$this->_messageInfo($message, $this->baseUrl . 'index/login');
			}

			if ($userInfo['islock']) {
				$this->_messageInfo('帐号被锁定！', $this->baseUrl . 'index/login');
			}

			if (empty($this->settings['ucserver'])) {
				$currentPassword = $this->_getPassword($password, $userInfo['encrypt']);
				$checkPassword = ($userInfo['password'] == $currentPassword) ? true : false;
				$this->timesModel->writeLoginTimes(array('username' => $username, 'isadmin' => 0), $checkPassword, $this->ip);
				if ($checkPassword === false) {
					$this->_showMessage('密码错误！', $this->baseUrl . 'index/login');
				}
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
		$xianlfcID = $this->uri->segment(4); //segment(4)得到数值 segment(3)得到字段
		$shenxiandaoID = $this->uri->segment(4); //segment(4)得到数值 segment(3)得到字段
		$this->input->set_cookie(array('name' => 'encrypt', 'value' => ''));
		$this->input->set_cookie(array('name' => '_userid', 'value' => ''));
		$this->input->set_cookie(array('name' => '_username', 'value' => ''));

		if($xianlfcID ==1) {
			$urlll=$this->applicationInfos[2]['domain'].'/xianlfc/';
			echo "<SCRIPT LANGUAGE='JavaScript'>";      
			echo "location.href='$urlll'";
			echo "</SCRIPT>"; 
		}elseif($shenxiandaoID==11){
			$urlll=$this->applicationInfos[2]['domain'].'/shenxiandao/';
			echo "<SCRIPT LANGUAGE='JavaScript'>";      
			echo "location.href='$urlll'";
			echo "</SCRIPT>"; 
		}else{
			$this->_messageInfo('退出成功！', $this->appInfos['passport']['url']);
		}
	}

	/**
	 * Register a member
	 *
	 * @param  boolean $isSpread
	 * @return vaoid
	 */
	public function register($isSpread = false)
	{
		if (!empty($this->loginedUserInfo) && empty($isSpread)) {
			$this->_messageInfo('您已登录！', $this->baseUrl);
		}
		if(empty($this->settings['allowregister'])) {
		}

		$this->form_validation->set_rules('username', 'name', 'trim|required|xss_clean');
		header("Cache-control: private");
		if ($this->form_validation->run() == false) {
			$this->registerInfos = array(
				'username' => array('name' => '用户名', 'type' => 'text', 'infos' => '用户名为4-30字符。'),
				'password' => array('name' => '密码', 'type' => 'password', 'infos' => '密码由6-16位数字或字母组成，区分大小写。'),
				'password2' => array('name' => '确认密码', 'type' => 'password', 'infos' => '请再次输入密码。'),
				'email' => array('name' => '邮箱', 'type' => 'text', 'infos' => '请输入你常用的邮箱。'),
				'truename' => array('name' => '真实姓名', 'type' => 'text', 'infos' => '请输入你的真实姓名。'),
				'idcard' => array('name' => '身份证号', 'type' => 'text', 'infos' => '请输入你真实的身份证号。'),
				//'seccode' => array('name' => '验证码', 'type' => 'text', 'infos' => '请输入下面图片里显示的字符。'),
			);

			$this->load->view('register');
		} else {
			$fields = array('username', 'email', 'truename', 'idcard');
			$userInfo = array();
			foreach ($fields as $field) {
				$userInfo[$field] = $this->input->post($field);
			}
			$checkUsername = $this->checkUsername();
			if ($checkUsername['status'] == 'error') {
				$this->_messageInfo($checkUsername['message'], $this->applicationInfos[1]['domain'] . 'index/register');
			}

			$userid= uc_user_register($userInfo['username'], $this->input->post('password'), $userInfo['email']);
			$userid = intval($userid);
			if ($userid <= 0) {
				$this->_messageInfo('注册失败，请重新注册！' . $userid, $this->applicationInfos[1]['domain']);
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
				$synloginCode = '';
				if ($this->settings['ucserver']) {
					//$synloginCode = uc_user_synlogin($userInfo['userid']);
				}
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
	 * Check username for jsons
	 *
	 * @return string | int
	 */
	public function checkUsername()
	{
		$username = $this->input->post('username');
		$username = empty($username) ? $this->input->get('username') : $username;
		$requireType = $this->input->post('require_type');
		$requireType = empty($requireType) ? $this->input->get('require_type') : $requireType;

		$statusInfo = array(
			'-1' => '字符串长度有误，4-30个字符',
			'-2' => '存在非法字符！',
			'-3' => '用户已存在！',
		);
		$result = uc_user_checkname($username);

		if ($result > 0) {
			$returnInfo['status'] = 'ok';
			$returnInfo['message'] = '';
		} else if (in_array($result, array_keys($statusInfo))) {
			$returnInfo['status'] = 'error';
			$returnInfo['message'] = $statusInfo[$result];
		} else {
			$returnInfo['status'] = 'error';
			$returnInfo['message'] = '未知错误！';
		}

		if ($requireType == 'isjsonp') {
			echo $this->_jsonp($returnInfo);
			exit();
		} else if ($requireType == 'common') {
			echo $returnInfo['status'] == 'ok' ? 'ok' : $returnInfo['message'];
			exit();
		} else {
			return $returnInfo;
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

}