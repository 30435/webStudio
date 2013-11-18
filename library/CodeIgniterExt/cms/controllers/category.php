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
	protected function _initInfo($currentCatid = 0, $currentModelid = 0, $templatePage = '', $templateBig = '', $templateList = '', $templateShow = '')
	{
		$format = "<option value='\$id' \$selected>\$spacer\$catname</option>";
		$tree = new CustomTree($this->categoryInfos);
		$this->selectParent = $tree->getTree(0, $format, $currentCatid);

		$this->selectModel = $this->_getSelectElement($this->fieldInfos['modelid']['infos'], 'id', 'name', $currentModelid, true);
		$this->selectTemplatePage = $this->_getSelectElement($this->fieldInfos['template_page']['infos'], 'key', 'value', $templatePage, true);
		$this->selectTemplateBig = $this->_getSelectElement($this->fieldInfos['template_big']['infos'], 'key', 'value', $templateBig, true);
		$this->selectTemplateList = $this->_getSelectElement($this->fieldInfos['template_list']['infos'], 'key', 'value', $templateList, true);
		$this->selectTemplateShow = $this->_getSelectElement($this->fieldInfos['template_show']['infos'], 'key', 'value', $templateShow, true);
		//$this->selectUrlrule = $this->_getSelectElement($this->fieldInfos['urlrule']['infos'], 'key', 'value', $urlrule, true);
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
		$this->_initInfo($info['parentid'], $info['modelid'], $info['template_page'], $info['template_big'], $info['template_list'], $info['template_show']);

		if ($isWrite) {
			$info['bind_domain'] = !empty($info['bind_domain']) && $info['parentid'] == 0 ? $info['bind_domain'] : '';
			if (isset($this->currentInfo)) {
				$info['url'] = $this->_getUrl($info);
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
        $id = $this->currentModel->currentDb->insert_id();
		$info['id'] = $id;

		$data['url'] = $this->_getUrl($info);

		$where = array('id =' => $id);
		$this->currentModel->editInfo($data, $where);
	}

	/**
	 * Create a url for a category
	 *
	 * @param array $info
	 * @return string
	 */
	protected function _getUrl($info)
	{
		$url = '';
		$ishtml = $info['ishtml'];
		$parentid = $info['parentid'];
		$parentDir = $info['catdir'];
		$bindDomain = $info['bind_domain'];
		$info['id'] = empty($info['id']) ? $this->currentInfo['id'] : $info['id'];

		while (isset($this->categoryInfos[$parentid])) {
			$parentDir = $this->categoryInfos[$parentid]['catdir'] . '/' . $parentDir;
			$bindDomain = $this->categoryInfos[$parentid]['bind_domain'];
			$parentid = $this->categoryInfos[$parentid]['parentid'];
		}

		$urlPre = empty($bindDomain) ? $this->baseUrl : $bindDomain;
		
		if (empty($ishtml)) {
			$url = empty($bindDomain) ? $urlPre . 'index/category?catid=' . $info['id'] : $urlPre . 'category?catid=' . $info['id'];
		} else {
			$urlPre = str_replace('index.php/', '', $urlPre);
			$url = $urlPre . $parentDir . 'index.html';
		}

		return $url;
	}
}