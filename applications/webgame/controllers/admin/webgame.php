<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Webgame extends Custom_AdminController
{
	public function __construct()
	{
		parent::__construct();
		$this->_initCurrentModel('webgameModel');

        $this->lang->load('form_key');
        $this->form_validation->set_rules('username', "lang:username", 'trim|min_length[2]|max_length[20]|xss_clean');
		//$this->roleInfos = $this->currentModel->getAllInfos('admin_role', 'id');
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
	protected function _initInfo($webgameStatus = 0, $webgameType = 0)
	{
		$this->selectWebgameStatus = $this->_getSelectElement($this->fieldInfos['webgame_status']['infos'], 'key', 'value', $webgameStatus, true);
		$this->selectWebgameType = $this->_getSelectElement($this->fieldInfos['webgame_type']['infos'], 'key', 'value', $webgameType, true);
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
		$this->_initInfo($info['webgame_status'], $info['webgame_type']);
		if ($isWrite) {
			$info['code'] = !empty($this->currentInfo['code']) ? $this->currentInfo['code'] : $info['code'];
			$info['start_maintain'] = !empty($info['start_maintain']) ? strtotime($info['start_maintain']) : 0;
			$info['end_maintain'] = !empty($info['end_maintain']) ? strtotime($info['end_maintain']) : 0;
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
				$info['webgame_type'] = !empty($this->fieldInfos['webgame_type']['infos'][$info['webgame_type']]['value']) ? $this->fieldInfos['webgame_type']['infos'][$info['webgame_type']]['value'] : $info['webgame_type'];
				$info['webgame_status'] = !empty($this->fieldInfos['webgame_status']['infos'][$info['webgame_status']]['value']) ? $this->fieldInfos['webgame_status']['infos'][$info['webgame_status']]['value'] : $info['webgame_status'];
				$info['ispay'] = !empty($this->fieldInfos['ispay']['infos'][$info['ispay']]) ? $this->fieldInfos['ispay']['infos'][$info['ispay']] : $info['ispay'];

				$infos[$key] = $info;
			}
		}

		return $infos;
	}
}