<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Content extends Custom_AdminController
{
	public function __construct()
	{
		parent::__construct();
		$this->_initCurrentModel('contentModel');

        $this->lang->load('form_key');
        $this->form_validation->set_rules('name', "lang:name", 'trim|min_length[2]|max_length[20]|xss_clean');
		$this->siteInfos = $this->currentModel->getAllInfos('site', 'id');
		$this->cruleInfos = $this->currentModel->getAllInfos('crule', 'id');

		/*foreach ($this->menuInfos as $menuInfo) {
			if ($menuInfo['parentid'] == $this->currentMenu['parentid'] && $menuInfo['controller'] == 'spider') {
				$this->appMenus[$menuInfo['method']] = $menuInfo;
			}
		}
		$this->operationMenus = array('spiderList', 'dealList', 'spiderContent', 'dealContent', 'askForce', 'dealForce', 'spiderFile', 'copy', 'edit', 'delete');*/
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
	 * List the manager infos
	 *
	 * @return void
	 */
	public function publish()
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
		//$this->_checkManager();
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
	protected function _initInfo($siteId = 0, $cruleId = 0)
	{
		$this->selectSite = $this->_getSelectElement($this->siteInfos, 'id', 'name', $siteId, true);
		$this->selectCrule = $this->_getSelectElement($this->cruleInfos, 'id', 'name', $cruleId, true);
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
		$this->selectCrule = $this->_getSelectElement($this->cruleInfos, 'id', 'name', $info['crule_id']);

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
				//$info['siteId'] = !empty($this->siteInfos[$info['site_id']]['name']) ? $this->siteInfos[$info['site_id']]['name'] : $info['site_id'];
				$infos[$key] = $info;
			}
		}
		return $infos;
	}
}