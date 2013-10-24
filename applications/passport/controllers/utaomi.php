<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once dirname(__FILE__) . '/indexBase.php';
class Utaomi extends IndexBase
{
	public function __construct()
	{
		$this->prefix = 'utaomi';
		parent::__construct();
	}

	public function security()
	{
		$action = $this->input->get('action');
		$method = '_' . $action;
		$this->$method();
	}

	public function _question()
	{
		$this->load->view($this->prefix . '/bind_question');
	}

	public function securityLevel()
	{
		if (empty($this->loginedUserInfo)) {
			return false;
		}

		$score = 0;
		$haveMovile = !empty($this->loginedUserInfo['mobile']);
		$haveTruename = empty($this->loginedUserInfo['truename']) || empty($this->loginedUserInfo['idcard']);
		$haveEmail = !empty($this->loginedUserInfo['email']);

		if (empty($this->loginedUserInfo['mobile'])) {
		}
	}
}