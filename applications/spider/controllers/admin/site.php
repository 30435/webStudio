<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends Custom_AdminController
{
	public function __construct()
	{
		parent::__construct();
		$this->_initCurrentModel('siteModel');

        $this->lang->load('form_key');
        $this->form_validation->set_rules('name', "lang:name", 'trim|min_length[2]|max_length[20]|xss_clean');
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
		$this->_checkExist('name');
		$this->_add();
	}

	/**
	 * Edit a manager
	 *
	 * @return void
	 */
	public function edit()
	{
		$this->_checkExist('name');
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
}