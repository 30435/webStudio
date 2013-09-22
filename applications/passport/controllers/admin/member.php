<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member extends Custom_AdminController
{
	public function __construct()
	{
		parent::__construct();
		$this->_initCurrentModel('memberModel');

		$this->form_validation->set_rules('name6', 'name6', 'trim|xss_clean');
		$this->fields = array('username', 'email','password');
	}

	/**
	 * List the manager infos
	 *
	 * @return void
	 */
	public function listinfo()
	{
		$this->_listinfo();
	}

	/**
	 * View a manager
	 *
	 * @return void
	 */
	public function view()
	{
		$this->showSubnav = false;
		$this->userid = $this->input->get_post('userid');
		$where = array('userid' => $this->userid);
		$info = $this->currentModel->getInfo($where);
		$this->currentInfo = $this->_formatInfo($info);

		$this->load->view($this->template);
	}

	/**
	 * Edit a manager
	 *
	 * @return void
	 */
	public function edit()
	{
		$this->_edit();
	}

    /**
	 * 删除用户
	 *
	 * @return void
	 */
	public function delete()
	{
        $this->_delete('userid');
	}

	/**
	 * Format the info
	 *
	 * @see AdminController::_formatInfo()
	 * @param  array $info
	 * @param  boolean $isWrite
	 * @return array
	 */
	protected function _formatInfo($info, $isWrite = false)
	{
		if (!$isWrite) {
			unset($info['password']);
			unset($info['avatar']);
			unset($info['encrypt']);
		}

		return $info;
	}

}