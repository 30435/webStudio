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

		$step = intval($this->input->get_post('step'));
		$this->step = empty($step) ? 1 : $step;
		$userid = intval($this->input->get_post('userid'));
		$this->userInfo = array();
		if (!empty($userid)) {
			$where = array('userid' => $userid); 
			$this->userInfo = $this->memberModel->getInfo($where);
		}
print_r($this->userInfo);
		$this->load->view($this->prefix . '/getpwd');
	}

	public function testSendEmail()
	{
		$this->_sendEmail();
	}
	
	public function sendMessage()
	{
		$mobile = $this->input->get_post('mobile');
		if (empty($mobile)) {
			echo $this->_jsonp(array('status' => 0));
			exit();
		} 

		$where = array('mobile' => $mobile);
		$mobileInfo = $this->memberModel->getInfo($where, 'mobile_message');

		$data['message'] = $this->_createRandomstr(4);
		$data['lasttime'] = $this->time;

		if (empty($mobileInfo)) {
			$data['mobile'] = $mobile;
			$this->memberModel->addInfo($data, 'mobile_message');
			$message = $data['message'];
		} else {
			if ($this->time - $mobileInfo['lasttime'] > 300) {
				$this->memberModel->editInfo($data, $where, 'mobile_message');
				$message = $data['message'];
			} else {
				$message = $mobileInfo['message'];
			}
		}

		$sendResult = $this->_sendMessage($mobile, $message);

		echo $this->_jsonp(array('status' => $message));//intval($sendResult)));
		exit();
		
	}

	public function checkMessage()
	{
		$mobileMessage = $this->input->get('mobileMessage');
		$mobile = $this->input->get_post('mobile'); 
		if (empty($mobile) || empty($mobileMessage)) {
			echo $this->_jsonp(array('status' => 0));
			exit();
		} 

		$where = array('mobile' => $mobile);
		$mobileInfo = $this->memberModel->getInfo($where, 'mobile_message');

		$targetMessage = isset($mobileInfo['message']) ? $mobileInfo['message'] : '';

		$status = strtolower($mobileMessage) == strtolower($targetMessage);
		echo $this->_jsonp(array('status' => intval($status)));
		exit();
		
	}
}