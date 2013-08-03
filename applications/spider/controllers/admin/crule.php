<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Crule extends Custom_AdminController
{
	public function __construct()
	{
		parent::__construct();
		$this->_initCurrentModel('cruleModel');

        $this->lang->load('form_key');
        $this->form_validation->set_rules('name', "lang:name", 'trim|min_length[2]|max_length[20]|xss_clean');
		$this->siteInfos = $this->currentModel->getAllInfos('site', 'id');
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

	/**
	 * Initial some info before add
	 *
	 * @return void
	 */
	protected function _initInfo($siteId = 0)
	{
		$this->selectSite = $this->_getSelectElement($this->siteInfos, 'id', 'name', $siteId, true);
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
		$this->selectSite = $this->_getSelectElement($this->siteInfos, 'id', 'name', $info['site_id']);

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
				$info['siteId'] = !empty($this->siteInfos[$info['site_id']]['name']) ? $this->siteInfos[$info['site_id']]['name'] : $info['site_id'];
				$infos[$key] = $info;
			}
		}
		return $infos;
	}
}