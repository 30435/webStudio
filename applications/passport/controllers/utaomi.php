<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once dirname(__FILE__) . '/indexBase.php';
class Utaomi extends IndexBase
{
	public function __construct()
	{
		$this->prefix = 'utaomi';
		parent::__construct();
	}

	public function apply()
	{
		if (!empty($this->loginedUserInfo)) {
			header('Location:' . $this->appInfos['passport']['url'] . 'uwebgame/');
		}

		$this->load->view($this->prefix . '/apply_1');
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

	public function sinfo()
	{
		$this->load->view($this->prefix . '/sinfo');
	}

	/**
	 * Get the password
	 *
	 */
	public function getpwd()
	{
		if (!empty($this->loginedUserInfo)) {
			header('Location:' . $this->appInfos['passport']['url'] . 'uwebgame/');
		}
print_r($_POST);
		$step = intval($this->input->get_post('step'));
		$this->step = empty($step) ? 1 : $step;
		$this->load->view($this->prefix . '/getpwd');
	}
}