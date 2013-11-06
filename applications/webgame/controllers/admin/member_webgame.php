<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member_webgame extends Custom_AdminController
{
	public function __construct()
	{
		parent::__construct();
		$this->_initCurrentModel('member_webgameModel');

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
		foreach ($infos as $key => $info) {
			$info['lasttime'] = date('Y-m-d H:i:s', $info['lasttime']);
			$info['lasttime_login'] = date('Y-m-d H:i:s', $info['lasttime_login']);
			$info['lasttime_pay'] = date('Y-m-d H:i:s', $info['lasttime_pay']);
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
		$order = array(array('lasttime', 'desc'));
		
		return $order;
	}
		
	/**
	 * Get the where clause
	 *
	 * @return array | null
	 */
	protected function _where()
	{
		$this->pagination->page_query_string=TRUE;
		$this->pagination->enable_query_strings=TRUE;
		$whereArray = array();
		$urlStr = '';

		$startTime = $this->input->get('start_time');
		$endTime = $this->input->get('end_time');
		$endTime = !empty($endTime) ? $endTime . ' 23:59:59' : '';
		if (!empty($startTime) || !empty($endTime)) {
			$whereArray = empty($startTime) ? $whereArray : array_merge($whereArray, array('lasttime >=' => strtotime($startTime)));
			$whereArray = empty($endTime) ? $whereArray : array_merge($whereArray, array('lasttimez <=' => strtotime($endTime)));

			$urlStr .= empty($startTime) ? '' : '&start_time=' . $startTime;
			$urlStr .= empty($endTime) ? '' : '&end_time=' . str_replace(' 23:59:59', '', $endTime);
		}
		
		$username = $this->input->get('username');
		if (!empty($username)) {
			$whereArray = array_merge($whereArray, array('username = ' => $username));
			$urlStr .= empty($username) ? '' : '&username=' . $username;
		}

		$this->_paginationStr($urlStr);
		return $whereArray;
	}
}