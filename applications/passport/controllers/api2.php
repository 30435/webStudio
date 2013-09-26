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
			exit('-9');
		}

		parse_str(uc_authcode($token, 'DECODE', 'novagame'), $infos);
		$validActions = array('login', 'register');
		if (!isset($infos['action']) || !in_array($infos['action'], $validActions)) {
			exit('-8');
		}

		$this->$infos['action']($infos);
	}
}