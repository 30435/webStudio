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
		$this->_view();
	}

	/**
	 * Add a manager
	 *
	 * @return void
	 */
	public function add()
	{
		$this->_add();
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

		if ($this->method == 'add') {
			$info['regdate'] = $this->time;
			$passwordInfos = $this->_getPassword($this->input->post('password'));
			$info['password'] = $passwordInfos['password'];
			$info['encrypt'] = $passwordInfos['encrypt'];
		}elseif($this->method == 'edit'){
            $info['regdate'] = $this->time;
			$passwordInfos = $this->_getPassword($this->input->post('password'));
			$info['password'] = $passwordInfos['password'];
			$info['encrypt'] = $passwordInfos['encrypt'];
        }

		return $info;
	}

}