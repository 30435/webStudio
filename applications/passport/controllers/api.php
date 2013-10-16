<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once dirname(__FILE__) . '/apiBase.php';
class Api extends ApiBase
{
	public function __construct()
	{
		parent::__construct();

	}
	
	/**
	 * The enter function
	 */
	public function index()
	{
		$infos = array();
		$action = $this->input->get_post('action');
		if (!in_array($action, $this->validActions)) {
			$this->returnResult('10001');
		}

		switch ($action) {
			case 'login':
				$infos['username'] = $this->input->get_post('username');
				$infos['password'] = $this->input->get_post('password');
				$infos['code'] = $this->input->get_post('code');
				break;
			case 'register':
				$infos['password'] = $this->input->get_post('password');
				$infos['password2'] = $this->input->get_post('password2');
				$infos['captcha'] = $this->input->get_post('captcha');
				$infos['email'] = $this->input->get_post('email');
				$infos['channel_code'] = $this->input->get_post('channe_code');
				$infos['code'] = $this->input->get_post('code');
		}
		
		$this->$action($infos);
	}

	/**
	public function token()
	{
		$token = str_replace(' ', '+', $this->input->get('token'));
		if (empty($token)) {
			$this->returnInfos['code'] = '10001';
			$this->returnInfos['msg'] = $this->messageInfos['10001'];
			echo json_encode($msg);
			exit();
		}

		parse_str(uc_authcode($token, 'DECODE', 'novagame'), $infos);
		if (!isset($infos['action']) || !in_array($infos['action'], $this->validActions)) {
			$this->returnInfos['code'] = '10001';
			$this->returnInfos['msg'] = $this->messageInfos['10001'];
			echo json_encode($msg);
			exit();
		}

		$this->$infos['action']($infos);
	}
	*/
}