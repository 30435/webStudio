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
}