<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Linkurl extends Custom_AdminController
{
	public function __construct()
	{
		parent::__construct();
		$this->_initCurrentModel('linkurlModel');

        $this->lang->load('form_key');
        $this->form_validation->set_rules('username', "lang:username", 'trim|min_length[2]|max_length[20]|xss_clean');
		$this->spaceInfos = $this->currentModel->getAllInfos('poster_space', 'id');
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
	protected function _initInfo($linkurlType = '')
	{
		$this->selectLinkurlType = $this->_getSelectElement($this->fieldInfos['type']['infos'], 'key', 'value', $linkurlType, true);
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
		$this->_initInfo($info['type']);

		if ($isWrite) {
			$info['add_time'] = !empty($info['add_time']) ? strtotime($info['add_time']) : 0;
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
				$info['logo'] = !empty($info['logo']) ? '<img src="' . $info['logo'] . '" width="60px" height="30px" />' : '';
				$infos[$key] = $info;
			}
		}
		return $infos;
	}
}