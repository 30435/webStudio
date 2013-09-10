<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

abstract class CmsCategory extends Custom_AdminController
{
	public function __construct()
	{
		parent::__construct();

		$this->_initCurrentModel('categoryModel');
		$this->template = 'cms/' . $this->controller;

		$this->form_validation->set_rules('name5', 'name5', 'trim|min_length[5]|max_length[12]|xss_clean');

        foreach ($this->categoryInfos as $catId => $info) {
        	$info['viewUrl'] = $this->appMenus['view']['url'] . '?id=' . $catId;
        	$info['editUrl'] = $this->appMenus['edit']['url'] . '?id=' . $catId;
        	$deleteUrl = $this->appMenus['delete']['url'] . '?id=' . $catId;
			$info['deleteUrl'] = 'javascript:confirmurl("' . $deleteUrl . '", "确认要删除 『 ' . $info['catname'] . '』 吗？");';
        	$info['modelName'] = isset($this->modelInfos[$info['modelid']]['name']) ? $this->modelInfos[$info['modelid']]['name'] : '';
			$info['parentid_node'] = ($info['parentid'])? ' class="child-of-node-' . $info['parentid'] . '"' : '';		

        	$this->categoryInfos[$catId] = $info;
        }
	}

	/**
	 * List the manager infos
	 *
	 * @return void
	 */
	public function listinfo()
	{
		$tree = new CustomTree($this->categoryInfos);

		$format = "<tr id='node-\$id' \$parentid_node>	
			<td >\$spacer\$catname</td>
			<td align='center'>\$id</td>
			<td width='10%' align='center'><input name='listorders[\$id]' type='text' size='3' value='\$listorder' class='input-text-c'></td>
			<td align='center'>\$catdir</td>
			<td align='center'>\$modelName</td>
            <td align='center'>\$ishtml</td>
			<td align=center><a href='\$url' target='_blank'>访问</a>&nbsp;&nbsp;<a href='\$viewUrl'>查看</a>&nbsp;&nbsp;<a href='\$editUrl'>编辑</a>&nbsp;&nbsp;<a href='\$deleteUrl'>删除</a>&nbsp;&nbsp;</td>
			</tr>";

		$this->categoryStr = $tree->getTree(0, $format);
		$this->showSubnav = true;
		$this->load->view($this->template);
	}

	/**
	 * Add a category
	 *
	 * @return void
	 */
	public function add()
	{
		$this->_checkCatdir();
		$this->_add();
	}

	/**
	 * View a category
	 *
	 * @return void
	 */
	public function view()
	{
		$this->_view();
	}

	/**
	 * View a category
	 *
	 * @return void
	 */
	public function edit()
	{
		$this->_checkCatdir();
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
	 * Check the dir of the category
	 * @return void
	 */
	protected function _checkCatdir()
	{
		$action = $this->input->get_post('action');
		if ($action != 'checkCatdir') {
			return ;
		}

		$catdir = $this->input->get('catdir');
		$parentid = intval($this->input->get('parentid'));
		$currentCatid = intval($this->input->get('catid'));
		$isExist = '1';
		if (is_array($this->categoryInfos)) {
			foreach ($this->categoryInfos as $catid => $category) {
				if ($category['parentid'] == $parentid && $catid != $currentCatid && $category['catdir'] == $catdir) {
					$isExist = '0';
				}
			}
		}
		
		exit($isExist);
	}

	/**
	 * Initial some info before add
	 *
	 * @return void
	 */
	protected function _initInfo($currentCatid = 0, $currentModelid = 0, $template = '', $urlrule = '')
	{
		$format = "<option value='\$id' \$selected>\$spacer\$catname</option>";
		$tree = new CustomTree($this->categoryInfos);
		$this->selectParent = $tree->getTree(0, $format, $currentCatid);

		$this->selectModel = $this->_getSelectElement($this->fieldInfos['modelid']['infos'], 'id', 'name', $currentModelid, true);
		$this->selectTemplate = $this->_getSelectElement($this->fieldInfos['template']['infos'], 'key', 'value', $template, true);
		$this->selectUrlrule = $this->_getSelectElement($this->fieldInfos['urlrule']['infos'], 'key', 'value', $urlrule, true);
	}

	/**
	 * Format an info
	 *
	 * @param  array $info
	 * @param  boolean $isWrite
	 * @return array
	 */
	protected function _formatInfo($info, $isWrite = false)
	{
		$this->_initInfo($info['parentid'], $info['modelid'], $info['template'], $info['urlrule']);

		if ($isWrite) {
			if (!empty($info['bind_domain'])) {
				$info['bind_domain'] = $info['parentid'] == 0 ? $info['bind_domain'] : '';
			}
		}

		return $info;
	}

	/**
	 * Do some operations after adding an info 
	 *
	 * @return void
	 */
	protected function _afterAdd($info)
	{
        $catId = $this->currentModel->currentDb->insert_id();

		$tree = new CustomTree($this->categoryInfos);
		$parentdir = $bindDomain = '';
		$this->_getParentInfos($info['parentid'], $parentdir, $bindDomain);
		$data['parentdir'] = $parentdir;
		$ishtml = $info['ishtml'];
		if ($ishtml) {
			$data['url'] = empty($bindDomain) ? $this->baseUrl . $parentdir . '.html' : $bindDomain . $parentdir . '.html';
		} else {
			$data['url'] = empty($bindDomain) ? $this->baseUrl . 'index/category?catid=' . $catId : $bindDomain . 'category?catid=' . $catId;
		}

		$where = array('id =' => $catId);
		$this->currentModel->editInfo($data, $where);
	}

	protected  function _getParentInfos($pid, & $parentdir, & $bindDomain)
	{
		if (!isset($this->categoryInfos[$pid])) {
			return ;
		} else {
			$parentdir = $this->categoryInfos[$pid]['catdir'] . '/' . $parentdir;
			$bindDomain = isset($this->categoryInfos[$pid]['bind_domain']) && $this->categoryInfos[$pid]['parentid'] == 0 ? $this->categoryInfos[$pid]['bind_domain'] : '';
		}

		$ppid = $this->_getParentInfos($this->categoryInfos[$pid]['parentid'], $parentdir, $bindDomain);
	}
}