<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

abstract class CmsContent extends Custom_AdminController
{
	public function __construct()
	{
		parent::__construct ();
		$this->form_validation->set_rules ( 'name1', 'name1', 'trim|min_length[5]|max_length[12]|xss_clean' );
		$this->template = 'cms/' . $this->controller;

		$this->showSubnav = false;
		
		$this->ckeditor = new CKEditor ();
		$this->ckeditor->basePath = $this->staticUrl . 'common/ckeditor/';
		$this->ckeditor->returnOutput = true;
	}

	/**
	 * 展示指定游戏的内容管理
	 *
	 * @return void
	 */
	public function catquick()
	{
		$subCat = $this->input->get('subCat');
		if ($subCat == 'subCat') {
			$this->_getSubCat();
		} else {
			$this->load->view('cms/content_quick');
		}
	}
	
	/**
	 * Create the sub category tree
	 *
	 * @return void
	 */
	protected function _getSubCat() {
		$tree = new CustomTree($this->categoryInfos);
		$strs = "<span class=''><a href='{$this->baseUrl}admin/content/listinfo/?catid=\$id' target='right'>\$catname</a></span>";
		$strs2 = "<span class='folder'>\$catname</span>";

		$this->categoryStr = $tree->get_treeview(0, 'category_tree', $strs, $strs2 );
		$this->load->view('cms/subcat');
	}

	/**
	 * List the infos
	 *
	 * @return void
	 */
	public function listinfo()
	{
		$this->_initModel();
		if ($this->modelInfo['id'] == 1) {
			$this->_spage();
		} else {
			$this->showSubnav = false;
			$this->urlForward = $this->urlForward . '?catid=' . $this->catid;
			$this->_listinfo($this->currentModel->fieldInfos['fieldList']);
		}
	}

	/**
	 * View a content
	 *
	 * @return void
	 */
	public function view()
	{
		$this->_initModel();
		$this->template = 'cms/content_change';
		$this->_view();
	}

	/**
	 * Edit a content
	 *
	 * @return void
	 */
	public function edit()
	{
		$this->_initModel();
		$this->addbg = true;

		$info = $this->_getInfoById();
		if (empty($info)) {
			$message = $this->lang->line('admin_infonoexist');
			$this->_showMessage($message);
		}
		
		$this->currentInfo = $this->_formatInfo($info);
		if ($this->form_validation->run() == false) {
			$this->load->view('cms/content_change');
		} else {

			foreach ($this->fieldChanges as $field) {
				$data[$field] = $this->input->post($field);
			}
			$data = $this->_formatInfo($data, true);
			$editResult = $this->currentModel->editInfo($data, array('id' => $this->id));

			$message = $this->appMenus[$this->method]['name'] . $this->lang->line('admin_successful');
			$submitContinue = $this->input->post('dosubmit_continue');
			if (!empty($submitContinue)) {
				$this->urlForward = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
			} else {
				$this->urlForward .= '?catid=' . $this->catid;
				$this->returnjs = 'function set_time() {$("#secondid").html(1);}setTimeout("set_time()", 500);setTimeout("window.close()", 1200);';
			}
			
			$this->_showMessage($message);
		}
	}

	/**
	 * Add a content
	 *
	 * @return void
	 */
	public function add()
	{
		$this->_initModel();
		$this->addbg = true;

		//$this->urlForward = $this->urlForward . '?catid=' . $this->catid;
		//$this->_add();


		if ($this->form_validation->run() == false) {
			$this->_initInfo();
			$this->load->view('cms/content_change');
		} else {
			foreach ($this->fieldChanges as $field) {
				$info[$field] = $this->input->post($field);
			}

			$info = $this->_formatInfo($info, true);
			$info['inputtime'] = $this->time;
			$addResult = $this->currentModel->addInfo($info);
			$this->_afterAdd($info);

			$message = $this->appMenus[$this->method]['name'] . $this->lang->line('admin_successful');
			$submitContinue = $this->input->post('dosubmit_continue');
			if (!empty($submitContinue)) {
				$this->urlForward = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
			} else {
				$this->urlForward .= '?catid=' . $this->catid;
				$this->returnjs = 'function set_time() {$("#secondid").html(1);}setTimeout("set_time()", 500);setTimeout("window.close()", 1200);';
			}
			
			$this->_showMessage($message);
		}
	}

	/**
	 * 删除内容
	 *
	 * @return void
	 */
	public function delete()
	{
		$this->_initModel();
		$this->urlForward = $this->urlForward . '?catid=' . $this->catid;
		$this->_delete ();
	}

	/**
	 * Initial some info before add
	 *
	 * @return void
	 */
	protected function _initInfo($currentCatid = 0, $currentPosition = '', $currentCopyfrom = '', $currentTemplate = '')
	{
		$currentCatid = empty($currentCatid) ? $this->catid : $currentCatid;

		$format = "<option value='\$id' \$selected>\$spacer\$catname</option>";
		$tree = new CustomTree($this->categoryInfos);
		$this->selectCategory = $tree->getTree(0, $format, $currentCatid);

		$this->selectPosition = $this->_getSelectElement($this->fieldInfos['position']['infos'], 'key', 'value', $currentPosition, true);
		$this->selectCopyfrom = $this->_getSelectElement($this->fieldInfos['copyfrom']['infos'], 'key', 'value', $currentCopyfrom, true);
		$this->selectTemplate = $this->_getSelectElement($this->fieldInfos['template']['infos'], 'key', 'value', $currentTemplate, true);
	}

	/**
	 * Point the where clause for listinfo
	 *
	 * @return array
	 */
	protected function _where()
	{
		$where = array('catid' => $this->catid);
		return $where;
	}

	/**
	 * Get the order clause
	 *
	 * @return array | null
	 */
	protected function _order()
	{
		 return array(array('inputtime', 'desc'));
	}

	/**
	 * Deal the page model content
	 *
	 * @return void
	 */
	protected function _spage()
	{
		$info = $this->currentModel->getInfo(array('catid' => $this->catid));
		
		if ($this->form_validation->run() == false) {
			//$this->currentInfo = $this->_formatInfo($info);
			$this->load->view('cms/spage');
		} else {
			foreach ($this->fieldChanges as $field) {
				$data[$field] = $this->input->post($field);
			}
			$data['username'] = $this->userInfo['username'];
			$data['updatetime'] = $this->time;

			if (empty($info)) {
				$data['catid'] = $this->catid;
				$this->currentModel->addInfo($data);
			} else {
				$where = array('catid' => $this->catid);
				$this->currentModel->editInfo($data, $where);
			}

			$this->_showMessage('信息编辑成功！', $this->urlForward = $this->urlForward . '?catid=' . $this->catid);
		}
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
		$this->_initInfo($info['catid'], $info['position'], $info['copyfrom'], $info['template']);
		if ($isWrite) {
			$info['username'] = $this->userInfo['username'];
			$info['updatetime'] = $this->time;
			if (!empty($this->currentInfo)) {
				$info['url'] = $this->_getUrl($info);
			}
			//$info['description'] = empty($info['description']) ? substr(trim(strip_tags($info['content'])), 0, 255) : $info['description'];
		}
		return $info;
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
		$catid = $info['catid'];
		$ishtml = $this->categoryInfos[$catid]['ishtml'];
		$parentDir = $bindDomain = '';
		$info['id'] = empty($info['id']) ? $this->currentInfo['id'] : $info['id'];

		while (isset($this->categoryInfos[$catid])) {
			$parentDir = $this->categoryInfos[$catid]['catdir'] . '/' . $parentDir;
			$bindDomain = $this->categoryInfos[$catid]['bind_domain'];
			$catid = $this->categoryInfos[$catid]['parentid'];
		}

		$urlPre = empty($bindDomain) ? $this->baseUrl : $bindDomain;
		if (empty($ishtml)) {
			$url = empty($bindDomain) ? $urlPre . 'index/show?id=' . $info['id'] : $urlPre . 'show?id=' . $info['catid'] . '_' . $info['id'];
		} else {
			$urlPre = str_replace('index.php/', '', $urlPre);
			$url = $urlPre . $parentDir . 'content_' . $info['id'] . '.html';
		}

		return $url;
	}
}