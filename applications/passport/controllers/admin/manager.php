<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manager extends Custom_AdminController
{
	public function __construct()
	{
		parent::__construct();
		$this->_initCurrentModel('admin/managerModel');

        $this->lang->load('form_key');
        $this->form_validation->set_rules('username', "lang:username", 'trim|min_length[2]|max_length[20]|xss_clean');
		$this->roleInfos = $this->currentModel->getAllInfos('admin_role', 'id');
		$this->operationMenus = array('edit', 'delete');
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
	 * Add a manager
	 *
	 * @return void
	 */
	public function add()
	{
		$this->_checkExist('username');
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
	 * Edit a manager
	 *
	 * @return void
	 */
	public function editm()
	{
		$this->fieldChanges = array('truename', 'email');
		$this->template = 'admin/myinfo';
		$_GET['id'] = $this->userInfo['id'];
		$this->_edit();
	}

	/**
	 * Edit a manager
	 *
	 * @return void
	 */
	public function editp()
	{
		$action = $this->input->get_post('action');
		$oldPassword = $this->input->get('old_password');
		if ($action == 'checkPassword') {
			$currentPassword = $this->_getPassword($oldPassword, $this->userInfo['encrypt']);
			if ($this->userInfo['password'] != $currentPassword) {
				exit('0');
			}
			exit('1');
		}

		$this->fieldChanges = array();
		$this->template = 'admin/myinfo';
		$_GET['id'] = $this->userInfo['id'];
		$this->_edit();
	}

    /**
	 * 删除管理员
	 *
	 * @return void
	 */
	public function delete()
	{
        $this->_delete();
	}

	/**
	 * Initial some info before add
	 *
	 * @return void
	 */
	protected function _initInfo($roleid = 0)
	{
		$this->selectRole = $this->_getSelectElement($this->roleInfos, 'id', 'name', $roleid, true);
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
		$this->selectRole = $this->_getSelectElement($this->roleInfos, 'id', 'name', $info['roleid']);

		if ($isWrite) {
			$info['username'] = !empty($this->currentInfo['username']) ? $this->currentInfo['username'] : $info['username'];
			$info['createtime'] = $this->time;
			$password = $this->input->post('password');
			if (!empty($password)) {
				$passwordInfo = $this->_getPassword($password);
				$info['password'] = $passwordInfo['password'];
				$info['encrypt'] = $passwordInfo['encrypt'];
			}
		}

		return $info;
	}
		
	/**
	 * Format the element of the infos
	 *
	 * @param  array $infos the infos
	 * @return array | false formated infos
	 */
	protected function _formatInfos(array $infos)
	{
		if (is_array($infos) && !empty($infos)) {
			foreach ($infos as $key => $info) {
				$info['roleid'] = !empty($this->roleInfos[$info['roleid']]['name']) ? $this->roleInfos[$info['roleid']]['name'] : $info['roleid'];
				$info['islock'] = !empty($this->fieldInfos['islock']['infos'][$info['islock']]) ? $this->fieldInfos['islock']['infos'][$info['islock']] : $info['islock'];
				$info['createtime'] = date('Y-m-d H:i:s', $info['createtime']);
				$info['lasttime'] = date('Y-m-d H:i:s', $info['lasttime']);
				$infos[$key] = $info;
			}
		}
		return $infos;
	}
}