<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

abstract class ApiBase extends Custom_Controller
{
	public function __construct()
	{
		parent::__construct();
	
		$this->validActions = array('login', 'register');	
		ini_set('display_errors', 1);
		error_reporting(0);

		$this->messageInfos = array(
			'10000' => array('SUCCESSFUL'),
			'10001' => array('PARAMS_WRONG'),
			'10002' => array('VERIFICATION_WRONG'),

			'10003' => array('LOGIN_INFO_EMPTY'),
			'10004' => array('PASSWD_WRONG_TIMESOVER'),
			'10005' => array('USERNAME_NOT_EXIST'),
			'10006' => array('PASSWD_WRONG'),
			'10007' => array('EXTRA_WRONG'),
			'10008' => array('DATABASE_ERROR'),

			'10009' => array('REGISTER_INFO_EMPTY'),
			'10010' => array('REGISTER_PASSWORD_NOEQUAL'),
			'10011' => array('CAPTCHA_WRONG'),
			'10012' => array('EMAIL_WRONG'),

			'11000' => array('EXCEPTION'),
		);
	}

	/**
	 * register through the game
	 *
	 */
	public function register($infos)
	{
		//var_dump($_COOKIE);
		$password = $infos['password'];
		$password2 = $infos['password2'];
		$captcha = $infos['captcha'];
		$email = $infos['email'];

		if (empty($password) || empty($password2) || empty($captcha)) {
			$this->returnResult('10009');
		}

		if ($password != $password2) {
			$this->returnResult('10010');
		}

		$this->load->library('session');
		$currentCaptcha = $this->session->userdata('frontCaptcha');
		if ($captcha != $currentCaptcha) {
			$this->returnResult('10011');
		}
		$this->session->unset_userdata('frontCaptcha');
		$userInfo['username'] = $this->getUsername();

		if (!empty($email)) {
			$emailStatus = uc_user_checkemail($email);
			if ($emailStatus != 1) {
				$this->returnResult('10012');
			}
		}

		$userid= uc_user_register($userInfo['username'], $password, $email);
		$userid = intval($userid);
		if ($userid <= 0) {
			$this->returnResult('10008');
		} else {
			$passwordInfos = $this->_getPassword($password);

			$userInfo['userid'] = $userInfo['username'];
			$userInfo['password'] = $passwordInfos['password'];
			$userInfo['encrypt'] = $passwordInfos['encrypt'];
			$userInfo['regip'] = $this->input->ip_address();
			$userInfo['regdate'] = $this->time;
			$userInfo['ucserver_id'] = $userid;
			$userInfo['channel_code'] = 'official';

			$addUser = $this->memberModel->addInfo($userInfo);
			if (empty($addUser)) {
				$this->returnResult('10008');
			}

			$where = array('username' => $userInfo['username']);
			$userInfo = $this->memberModel->getInfo($where);

			$cookieTime = $this->time + 864000;

			$encryptString = $userInfo['userid'] . "\t" . $userInfo['username'] . "\t" . $password;
			$encryptKey = $this->_getEncryptKey();
			$encrypt = $this->encrypt->encode($encryptString, $encryptKey);

			$this->input->set_cookie(array('name' => 'encrypt', 'value' => $encrypt, 'expire' => $cookieTime));
			$this->input->set_cookie(array('name' => 'userid', 'value' => $userInfo['userid'], 'expire' => $cookieTime));
			$this->input->set_cookie(array('name' => 'username', 'value' => $userInfo['username'], 'expire' => $cookieTime));
			
			$this->returnResult('10000', array('userInfo' => $userInfo));
		}
	}
	
	/**
	 * login through the game
	 *
	 */
	public function login($infos)
	{
		$username = $infos['username'];
		$password = $infos['password'];

		if (empty($username) || empty($password)) {
			$this->returnResult('10003');
		}

		$this->load->model('timesModel');
		$remainMinute = $this->timesModel->checkLoginTimes(array('username' => $username, 'isadmin' => 0));
		if ($remainMinute > 0) {
			$this->returnResult('10004');
		}

		list($ucInfo['userid'], $ucInfo['username'], $ucInfo['password'], $ucInfo['email']) = uc_user_login($username, $password); 
		$statusInfos = array('-1' => '10005', '-2' => '10006', '-3' => '10007');
		if ($ucInfo['userid'] <= 0) {
			if ($ucInfo['userid'] == -2) {
				$this->timesModel->writeLoginTimes(array('username' => $username, 'isadmin' => 0), false, $this->ip);
			}

			$this->returnResult($statusInfos[$ucInfo['userid']]);
		}

		$where = array('username' => $username);
		$userInfo = $this->memberModel->getInfo($where);

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
			$this->returnResult('10008');
		}

		/*if ($userInfo['islock']) {
			$this->_messageInfo('帐号被锁定！', $this->baseUrl . $this->prefix . '/login');
		}*/

		$updateInfo = array('lastloginip' => $this->ip, 'lastlogintime' => $this->time, 'loginnum' => $userInfo['loginnum'] + 1);
		$this->memberModel->editInfo($updateInfo, $where);

		$cookieTime = $this->time + 864000;
		$encryptString = $userInfo['userid'] . "\t" . $userInfo['username'] . "\t" . $password;
		$encryptKey = $this->_getEncryptKey();
		$encrypt = $this->encrypt->encode($encryptString, $encryptKey);

		$this->input->set_cookie(array('name' => 'encrypt', 'value' => $encrypt, 'expire' => $cookieTime));
		$this->input->set_cookie(array('name' => 'userid', 'value' => $userInfo['userid'], 'expire' => $cookieTime));
		$this->input->set_cookie(array('name' => 'username', 'value' => $userInfo['username'], 'expire' => $cookieTime));

		$params['webgameInfo']['code'] = $infos['code'];
		$params['serverInfo']['id'] = 0;
		$params['userInfo'] = $userInfo;
		$this->_updateWebgameInfo($params);

		$this->returnResult('10000');
	}

	/**
	 * Create the checkcode for front webgame
	 *
	 */
	public function createCaptcha()
	{
		$this->checkcode('frontCaptcha');
	}

	/**
	 * Check the checkcode for front webgame
	 *
	 */
	public function checkCaptcha()
	{
		$captchaValid = $this->isValidCode('frontCaptcha');
		
		$data['captchaValid'] = $captchaValid;
		echo $this->_jsonp($data);
		exit();
	}

	public function returnResult($resultKey, $array = array())
	{
		$status = $resultKey == '10000' ? true : false;
		$resultKey = in_array($resultKey, array_keys($this->messageInfos)) ? $resultKey : '11000';
		$returnInfos = array(
			'status' => $status,
			'code'   => $resultKey,
			'msg'    => $this->messageInfos[$resultKey],
		);
		
		$returnInfos = !empty($array) ? array_merge($returnInfos, $array) : $returnInfos; 
		exit(json_encode($returnInfos));
	}
}