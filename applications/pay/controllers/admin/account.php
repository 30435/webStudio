<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account extends Custom_AdminController
{
	public function __construct()
	{
		parent::__construct();
		$this->_initCurrentModel('accountModel');

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
		foreach ($infos as $key => $info) {
			$info['payment_code'] = isset($this->paymentInfos[$info['payment_code']]['name']) ? $this->paymentInfos[$info['payment_code']]['name'] : $info['payment_code'];
			$info['webgame_code'] = isset($this->webgameInfos[$info['webgame_code']]['name']) ? $this->webgameInfos[$info['webgame_code']]['name'] : $info['webgame_code'];
			$info['server_id'] = isset($this->webgameInfos[$info['server_id']]['name']) ? $this->webgameInfos[$info['server_id']]['name'] : $info['server_id'];
			$info['status'] = $info['status'] == '1' ? '成功支付' : '未支付';
			$info['account_time'] = date('Y-m-d H:i:s', $info['account_time']);
			$infos[$key] = $info;
		}
		return $infos;
	}
		
	/**
	 * Get the order clause
	 * 
	 * @return array
	 */
	protected function _order()
	{
		$order = array(array('account_time', 'desc'));
		
		return $order;
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