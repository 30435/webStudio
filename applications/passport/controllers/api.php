<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api extends Custom_Controller
{
	public function __construct()
	{
		parent::__construct();
		
		ini_set('display_errors', 1);
		error_reporting(0);	
	}
	
	/**
	 * The enter function
	 */
	public function index()
	{
		$token = str_replace(' ', '+', $this->input->get('token'));
		if (empty($token)) {
			exit('-9');
		}

		parse_str(uc_authcode($token, 'DECODE', 'novagame'), $infos);
		$validActions = array('login', 'register');
		if (!isset($infos['action']) || !in_array($infos['action'], $validActions)) {
			exit('-8');
		}

		$this->$infos['action']($infos);
	}

	/**
	 * register through the game
	 *
	 */
	public function register($infos)
	{
		$datas = array('status' => false, 'code' => 'EXCEPTION', 'msg' => 'EXCEPTION');
		$password = $infos['password'];
		$password2 = $infos['password2'];
		$seccode = $infos['seccode'];
		$email = $infos['email'];

		if (empty($password) || empty($password2) || empty($seccode)) {
			$datas['code'] = -7; $datas['msg'] = 'INFO EMPTY';
			exit(json_encode($datas));
		}
		if ($password != $password2) {
			$datas['code'] = -6; $datas['msg'] = 'PASSWORD NO EQUAL';
			exit(json_encode($datas));
		}
		$this->load->library('session');
		$currentSeccode = $this->session->userdata('checkcode');
		if ($seccode != $currentSeccode) {
			//$datas['code'] = $datas['msg'] = 'SECCODE ERROR';
			//exit(json_encode($datas));
		}
		$this->session->unset_userdata('checkcode');
		$userInfo['username'] = $this->getUsername();

		/*$checkUsername = $this->checkUsername();
		if ($checkUsername['status'] == 'error') {
			$this->_messageInfo($checkUsername['message'], $this->applicationInfos[1]['domain'] . 'index/register');
		}*/

		$userid= uc_user_register($userInfo['username'], $password, $email);
		$userid = intval($userid);
		if ($userid <= 0) {
			$datas['code'] = -5; $datas['msg'] = 'SERVER_ERROR';
			exit(json_encode($datas));
		} else {
			$passwordInfos = $this->_getPassword($password);

			$userInfo['userid'] = $userInfo['username'];
			$userInfo['password'] = $passwordInfos['password'];
			$userInfo['encrypt'] = $passwordInfos['encrypt'];
			$userInfo['regip'] = $this->input->ip_address();
			$userInfo['regdate'] = $this->time;
			$userInfo['ucserver_id'] = $userid;

			$addUser = $this->memberModel->addInfo($userInfo);
			if (empty($addUser)) {
				$datas['code'] = -4; $datas['msg'] = 'SERVER2_ERROR';
				exit(json_encode($datas));
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
			
			$datas['status'] = true;
			$datas['username'] = $userInfo['username'];
			$datas['code'] = $datas['msg'] = 'SUCCESSFUL';
			exit(json_encode($datas));
		}
	}
	
	/**
	 * login through the game
	 *
	 */
	public function login($infos)
	{
		$datas['status'] = false;
		$datas['code']   = '3';//'PASSWD_OR_AID_WRONG';
		$datas['msg']    = 'PASSWD_OR_AID_WRONG';

		$username = $infos['username'];
		$password = $infos['password'];

		if (empty($username) || empty($password)) {
			$data['code'] = $data['msg'] = 'INFO EMPTY';
			exit(json_encode($datas));
		}

		$this->load->model('timesModel');
		/*$remainMinute = $this->timesModel->checkLoginTimes(array('username' => $username, 'isadmin' => 0));
		if ($remainMinute > 0) {
			$datas['code'] = '4';//'PASSWD_WRONG_TIMES';
			$datas['msg'] = 'PASSWD_WRONG_TIMES';
			exit(json_encode($datas));
		}*/

		list($ucInfo['userid'], $ucInfo['username'], $ucInfo['password'], $ucInfo['email']) = uc_user_login($username, $password);


		$statusInfos = array('-1' => 'USER_NO_EXIST', '-2' => 'PASSWD_WRONG', '-3' => 'WRONG_');

		
		if ($ucInfo['userid'] <= 0) {
			if ($ucInfo['userid'] == -2) {
				$this->timesModel->writeLoginTimes(array('username' => $username, 'isadmin' => 0), false, $this->ip);
			}
			$message = in_array($ucInfo['userid'], array_keys($statusInfos)) ? $statusInfos[$ucInfo['userid']] : 'OTHER_ERROR';
			$datas['code'] = $ucInfo['userid'];
			$datas['msg'] = $message;
			exit(json_encode($datas));
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
			$datas['code'] = $datas['msg'] = $statusInfos['-1'];
			exit(json_encode($datas));
		}

		/*if ($userInfo['islock']) {
			$this->_messageInfo('帐号被锁定！', $this->baseUrl . $this->prefix . '/login');
		}*/

		$updateInfo = array('lastloginip' => $this->ip, 'lastlogintime' => $this->time, 'loginnum' => $userInfo['loginnum'] + 1);
		$this->memberModel->editInfo($updateInfo, $where);

		$setCookieTime = $this->input->post('setcookietime');
		$cookieTime = empty($setCookieTime) ? $this->time + 86400 : $this->time + 864000;

		$encryptString = $userInfo['userid'] . "\t" . $userInfo['username'] . "\t" . $password;
		//echo $encryptString;
		$encryptKey = $this->_getEncryptKey();
		$encrypt = $this->encrypt->encode($encryptString, $encryptKey);

		$this->input->set_cookie(array('name' => 'encrypt', 'value' => $encrypt, 'expire' => $cookieTime));
		$this->input->set_cookie(array('name' => 'userid', 'value' => $userInfo['userid'], 'expire' => $cookieTime));
		$this->input->set_cookie(array('name' => 'username', 'value' => $userInfo['username'], 'expire' => $cookieTime));

		$datas['status'] = true;
		$datas['code'] = 1;
		$datas['msg'] = 'SUCCESS';
		echo json_encode($datas);
		exit();
		exit(json_encode($datas));
		//$this->_messageInfo('登录成功！' . $synloginCode, $this->applicationInfos[2]['domain']);
	}
}