<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class School extends Custom_AdminController
{
	public function __construct()
	{
		parent::__construct();
		$this->_initCurrentModel('schoolModel');

        $this->lang->load('form_key');
        $this->form_validation->set_rules('username', "lang:username", 'trim|min_length[2]|max_length[20]|xss_clean');
		$this->agencyInfos = $this->currentModel->getAllInfos('agency', 'id');
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
		$this->_checkExist('code');
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
	protected function _initInfo($agencyId = 0)
	{
		$this->selectAgency = $this->_getSelectElement($this->agencyInfos, 'id', 'name', $agencyId, true);
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
		
		if (!$isWrite) {
			$this->_initInfo($info['agency_id']);
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
				$info['type'] = !empty($this->fieldInfos['type']['infos'][$info['type']]['value']) ? $this->fieldInfos['type']['infos'][$info['type']]['value'] : $info['type'];
				$info['status'] = !empty($this->fieldInfos['status']['infos'][$info['status']]['value']) ? $this->fieldInfos['status']['infos'][$info['status']]['value'] : $info['status'];
				$info['ispay'] = !empty($this->fieldInfos['ispay']['infos'][$info['ispay']]) ? $this->fieldInfos['ispay']['infos'][$info['ispay']] : $info['ispay'];

				$infos[$key] = $info;
			}
		}

		return $infos;
	}
}