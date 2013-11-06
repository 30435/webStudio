<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Spirit extends Custom_AdminController
{
	public function __construct()
	{
		parent::__construct();
		$this->_initCurrentModel('spiritModel');

        $this->lang->load('form_key');
        $this->form_validation->set_rules('username', "lang:username", 'trim|min_length[2]|max_length[20]|xss_clean');
		//$this->roleInfos = $this->currentModel->getAllInfos('admin_role', 'id');
		$this->operationMenus = array('edit', 'delete');

		$this->ckeditor = new CKEditor ();
		$this->ckeditor->basePath = $this->staticUrl . 'common/ckeditor/';
		$this->ckeditor->returnOutput = true;
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
		//$this->_checkExist('username');
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
	protected function _initInfo($sort = '', $position = 0)
	{
		$this->selectSort = $this->_getSelectElement($this->fieldInfos['sort']['infos'], 'key', 'value', $sort, true);
		$this->selectPosition = $this->_getSelectElement($this->fieldInfos['position']['infos'], 'key', 'value', $position, true);
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
		$this->_initInfo($info['sort'], $info['position']);
		if ($isWrite) {
			$info['inputtime'] = empty($this->currentInfo['inputtime']) ? $this->time : $this->currentInfo['inputtime'];
			$info['updatetime'] = $this->time;
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
				$info['sort'] = !empty($this->fieldInfos['sort']['infos'][$info['sort']]['value']) ? $this->fieldInfos['sort']['infos'][$info['sort']]['value'] : $info['sort'];
				$info['status'] = !empty($this->fieldInfos['status']['infos'][$info['status']]['value']) ? $this->fieldInfos['status']['infos'][$info['status']]['value'] : $info['status'];
				$info['position'] = !empty($this->fieldInfos['position']['infos'][$info['position']]['value']) ? $this->fieldInfos['position']['infos'][$info['position']]['value'] : $info['position'];
				$info['updatetime'] = date('Y-m-d H:i:s', $info['updatetime']);
				$info['inputtime'] = date('Y-m-d H:i:s', $info['inputtime']);

				$infos[$key] = $info;
			}
		}

		return $infos;
	}
}