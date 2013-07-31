<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu extends Custom_AdminController
{
	public function __construct()
	{
		parent::__construct();
		$this->_initCurrentModel('admin/menuModel');
		$this->form_validation->set_rules('name10', 'name10', 'trim|min_length[5]|max_length[12]|xss_clean');

		$this->allMenuInfos = $this->_getMenuInfos(true);
		foreach ($this->allMenuInfos as $menuId => $info) {
			$info['editUrl'] = $this->appMenus['edit']['url'] . '?id=' . $menuId;
			$info['deleteUrl'] = 'javascript:confirmurl("' . $this->appMenus['delete']['url'] . '?id=' . $menuId . '", "确认要删除 『 ' . $info['name'] . '』 吗？"); ';
			$appName = isset($this->appInfos[$info['app_code']]['name']) ? $this->appInfos[$info['app_code']]['name'] : '';
			$info['app_code'] = !empty($appName) ? $appName : $info['app_code'];
			$displayName = isset($this->fieldInfos['display']['infos'][$info['display']]['value']) ? $this->fieldInfos['display']['infos'][$info['display']]['value'] : '';
			$info['display'] = !empty($displayName) ? $displayName : $info['display'];
			$info['parentid_node'] = ($info['parentid'])? ' class="child-of-node-' . $info['parentid'] . '"' : '';		
			
			$this->allMenuInfos[$menuId] = $info;
		}
	}

	/**
	 * List the manager infos
	 *
	 * @return void
	 */
	public function listinfo()
	{
		$menuTree = new CustomTree($this->allMenuInfos);

		$format = "<tr id='node-\$id' \$parentid_node>
			<td style='padding-left:30px;'>\$spacer\$name ( \$id )</td>
			<td width='10%' align='center'><input name='listorders[\$id]' type='text' size='3' value='\$listorder' class='input-text-c'></td>
			<td align='center'>\$app_code</td>
			<td align='center'>\$controller</td>
			<td align='center'>\$method</td>
			<td align='center'>\$display</td>
			<td align='center'><a href='\$editUrl'>编辑</a>&nbsp;&nbsp;<a href='\$deleteUrl'>删除</a>&nbsp;&nbsp;</td>
			</tr>";
		$this->menusStr = $menuTree->getTree(0, $format);

		$this->showSubnav = true;
		$this->load->view($this->template);
	}

	/**
	 * View a menu
	 *
	 * @return void
	 */
	public function view()
	{
		$this->_view();
	}

	/**
	 * Add a menu
	 *
	 * @return void
	 */
	public function add()
	{
		$this->_add();
	}

	/**
	 * Edit a menu
	 *
	 * @return void
	 */
	public function edit()
	{
		$this->_listorderExt();
		$this->_edit();
	}

    /**
	 * delete a menu
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
	protected function _initInfo($parentid = 0, $appCode = '', $display = 0)
	{
		$format = "<option value='\$id' \$selected>\$spacer\$name</option>";
		$tree = new CustomTree($this->allMenuInfos);
		$this->selectParent = $tree->getTree(0, $format, $parentid);
	
		$this->selectApp = $this->_getSelectElement($this->appInfos, 'code', 'name', $appCode, true);
		$this->selectDisplay = $this->_getSelectElement($this->fieldInfos['display']['infos'], 'key', 'value', $display, true);
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
		$this->_initInfo($info['parentid'], $info['app_code'],$info['display']);
	
		return $info;
	}
}