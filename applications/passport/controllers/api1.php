<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once dirname(__FILE__) . '/apiBase.php';
class Api2 extends ApiBase
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
			$this->returnInfos['code'] = '10001';
			$this->returnInfos['msg'] = $this->messageInfos['10001'];
			echo json_encode($msg);
			exit();
		}

		switch ($action) {
			case 'login':
				$infos['username'] = $this->input->get_post('username');
				$infos['password'] = $this->input->get_post('password');
				break;
			case 'register':
				$infos['password'] = $this->input->get_post('password');
				$infos['password2'] = $this->input->get_post('password2');
				$infos['seccode'] = $this->input->get_post('seccode');
				$infos['email'] = $this->input->get_post('email');
				break;
			default:
				break;
		}
		
		$this->$action($infos);
	}
}