<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member extends Custom_AdminController
{
	public function __construct()
	{
		parent::__construct();
		$this->_initCurrentModel('memberModel');

		$this->logType = array('add' => '增加信息', 'edit' => '编辑信息', 'listorder' => '信息排序', 'delete' => '删除信息', 'deletemul' => '删除多条信息');
		$this->showCurrent = false;
		$this->operationMenus = array('view');
	}

	/**
	 * List the all manager log infos
	 *
	 * @return void
	 */
	public function listinfo()
	{
        $this->_listinfo();
	}

	/**
	 * List the current manager log infos
	 *
	 * @return void
	 */
	public function listinfom()
	{
		$this->showCurrent = true;
        $this->_listinfo();
	}

    /**
	 * View a manager log info
	 *
	 * @return void
	 */
	public function view()
	{
		$this->_view();
	}

	/**
	 * Format an info
	 *
	 * @param  array $info
	 * @param  boolean $isWrite
	 * @return array
	 */
	protected function _formatInfo($info)
	{
		return $info;
	}

    /**
	 * Format the manager infos 
	 *
	 * @param  array $infos the infos
	 * @return array | false formated infos
	 */
	protected function _formatInfos(array $infos)
	{
		return $infos;
	}
		
	/**
	 * Get the order clause
	 * 
	 * @return array
	 */
	protected function _order()
	{
		//$order = array(array('inputtime', 'desc'));
		
		//return $order;
	}
		
	/**
	 * Get the where clause
	 *
	 * @return array | null
	 */
	protected function _where()
	{
		//return $whereArray;
	}
}