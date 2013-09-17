<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Managerlog extends Custom_AdminController
{
	public function __construct()
	{
		parent::__construct();
		$this->_initCurrentModel('admin/managerlogModel');

		$this->logType = array('add' => '增加信息', 'edit' => '编辑信息', 'listorder' => '信息排序', 'delete' => '删除信息', 'deletemul' => '删除多条信息');
		$this->showCurrent = false;
		$this->operationMenus = array('view', 'viewm');
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
	 * View a manager log info of current manager
	 *
	 * @return void
	 */
	public function viewm()
	{
		$this->showCurrent = true;
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
		$this->noPriv = false;
		if ($this->showCurrent && $info['userid'] != $this->userInfo['id']) {
			$this->noPriv = true;
			return $info;
		}

		$this->currentLogType = isset($this->logType[$info['logtype']]) ? $this->logType[$info['logtype']] : '';
		$this->logDescription = $this->currentLogType . '==' . $info['role_name'] . '--' . $info['username'] . '--' . $info['menu_name'] 
			. '--' . date('Y-m-d H:i:s', $info['inputtime']) . '--' . $info['ip'];

		$info['data'] = unserialize($info['data']);
		$info['data_old'] = unserialize($info['data_old']);

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
		if (is_array($infos) && !empty($infos)) {
			foreach ($infos as $key => $info) {
				$info['inputtime'] = date('Y-m-d H:i:s', $info['inputtime']);
				$info['logtype'] = isset($this->logTypes[$info['logtype']]) ? $this->logTypes[$info['logtype']] : $info['logtype'];
				$infos[$key] = $info;
			}
		}

		if (empty($this->showCurrent)) {
			$managerInfos = $this->currentModel->getAllInfos('admin_manager', 'id');
			$this->selectManager = $this->_getSelectElement($managerInfos, 'id', 'username', '');
			$roleInfos = $this->currentModel->getAllInfos('admin_role', 'id');
			$this->selectRole = $this->_getSelectElement($roleInfos, 'id', 'name', '');
		}
		$menuInfos = empty($this->showCurrent) ? $this->currentModel->getAllInfos('admin_menu', 'id') : $this->menuInfos;
		$format = "<option value='\$id' \$selected>\$spacer\$name</option>";
		$tree = new CustomTree($menuInfos);
		$this->selectMenu = $tree->getTree(0, $format);

		return $infos;
	}
		
	/**
	 * Get the order clause
	 * 
	 * @return array
	 */
	protected function _order()
	{
		$order = array(array('inputtime', 'desc'));
		
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
		$endTime = !empty($this->input->get('end_time')) ? $this->input->get('end_time') . ' 23:59:59' : '';
		if (!empty($startTime) || !empty($endTime)) {
			$whereArray = empty($startTime) ? $whereArray : array_merge($whereArray, array('inputtime >=' => strtotime($startTime)));
			$whereArray = empty($endTime) ? $whereArray : array_merge($whereArray, array('inputtime <=' => strtotime($endTime)));

			$urlStr .= empty($startTime) ? '' : '&start_time=' . $startTime;
			$urlStr .= empty($endTime) ? '' : '&end_time=' . str_replace(' 23:59:59', '', $endTime);
		}

		if (empty($this->showCurrent)) {
			$userid = trim($this->input->get('userid'));
			if (!empty($userid)) {
				$whereArray = array_merge($whereArray, array('userid = ' => $userid));
				$urlStr .= empty($userid) ? '' : '&userid=' . $userid;
			}

			$roleid = $this->input->get('roleid');
			if (!empty($roleid)) {
				$whereArray = array_merge($whereArray, array('roleid = ' => $roleid));
				$urlStr .= empty($roleid) ? '' : '&roleid=' . $roleid;
			}
		} else {
			$whereArray = array_merge($whereArray, array('userid = ' => $this->userInfo['id']));
			$urlStr .= '&userid=' . $this->userInfo['id'];
		}
		
		$menuId = $this->input->get('menu_id');
		if (!empty($menuId)) {
			$whereArray = array_merge($whereArray, array('menu_id = ' => $menuId));
			$urlStr .= empty($menuId) ? '' : '&menu_id=' . $menuId;
		}

		$this->_paginationStr($urlStr);
		return $whereArray;
	}
}