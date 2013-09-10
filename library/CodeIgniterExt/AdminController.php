<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdminController extends Custom_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->lang->load('admin');
		$this->headerTitle = 'admin';
		$this->messageTemplate = 'message_admin';
		$this->load->library('form_validation');
		ini_set('display_errors', 1); error_reporting(E_ALL);
		if($this->module =='admin' && $this->controller =='index' && in_array($this->method, array('login', 'checkcode', 'logout'))) {
			return ;
		}
		
		$isLogin = $this->_checkAdmin();
		if (empty($isLogin)) {
			redirect($this->appInfos['passport']['url'] . '/admin/index/login');
			exit();
		}

		$this->privInfos = $this->_getPrivInfos($this->roleInfo['id']);
		//var_dump($this->privInfos);
		$this->menuInfos = $this->_getMenuInfos();		
		//var_dump($this->menuInfos); exit();
		$havePriv = $this->_checkPriv();
		if (empty($havePriv)) {
			$this->_showMessage('您没有执行该操作的权限！');
		}

		$this->operationMenus = array('view', 'edit', 'delete');
		$this->appMenus = array();
		if (!empty($this->currentMenu['parentid'])) {
			foreach ($this->menuInfos as $menuInfo) {
				if ($menuInfo['parentid'] == $this->currentMenu['parentid'] && $this->currentMenu['controller'] == $menuInfo['controller']) {
					$this->appMenus[$menuInfo['method']] = $menuInfo;
				}
			}
		}
		$this->urlForward = empty($this->appMenus['listinfo']) ? '' : $this->appMenus['listinfo']['url'];
		$this->showSubnav = true;
		$this->addbg = false;
		$this->template = 'admin/' . $this->controller;
	}

	/**
	 * Check whether a manager is logined!
	 *
	 * @return  boolean return true if a admin user is logined, else return false and redirect to login page
	 */
	private function _checkAdmin()
	{
		$encrypt = $this->input->cookie(config_item('cookie_prefix') . 'encrypt_admin', true);
		$userid = $this->input->cookie(config_item('cookie_prefix') . 'userid_admin', true);
		$username = $this->input->cookie(config_item('cookie_prefix') . 'username_admin', true);
		if (empty($encrypt) || empty($userid) || empty($username)) {
			return false;
		}

		$_userid = $_username = $_password = '';
		$encryptKey = $this->_getEncryptKey();
		$encryptInfo = explode("\t", $this->encrypt->decode($encrypt, $encryptKey));
		$_userid = isset($encryptInfo[0]) ? $encryptInfo[0] : 0;
		$_username = isset($encryptInfo[1]) ? $encryptInfo[1] : '';
		$_password = isset($encryptInfo[2]) ? $encryptInfo[2] : '';
		if (empty($_userid) || empty($_username) || empty($_password) || $userid != $_userid || $username != $_username) {
			return false;
		}

		$this->_loadModel('passport', 'admin/managerModel');
		$userInfo = $this->managerModel->getInfo(array('username' => $username));
		if (empty($userInfo) || $userInfo['id'] != $userid || $userInfo['username'] != $username) {
			return false;
		}

		$currentPassword = $this->_getPassword($_password, $userInfo['encrypt']);
		if ($userInfo['password'] != $currentPassword) {
			return false;
		}

		$this->_loadModel('passport', 'admin/roleModel');
		$this->roleInfo = $this->roleModel->getInfo(array('id' => $userInfo['roleid']));
		if (empty($this->roleInfo)) {
			return false;
		}
		
		$this->userInfo = $userInfo;
		//var_dump($this->userInfo); var_dump($this->roleInfo);
		return true;
	}

	/**
	 * Check the priviledge of the manager.
	 *
	 * @return  boolean return true if the mangager has the operation priviledge, else return false and redirect to login page
	 */
	private function _checkPriv()
	{
		$ignorePrivMethods = array('index', 'curpos', 'leftmenu', 'main');
		if (APPCODE == 'passport' && $this->controller == 'index' && in_array($this->method, $ignorePrivMethods)) {
			return true;
		}
		if ($this->method == 'ckeditorUpload') {
			return true;
		}
		if (in_array($this->currentMenu['id'], $this->privInfos) || ($this->userInfo['roleid'] == 1)) {
			return true;
		}
		return false;
    }

	/**
	 * Get the menu infos
	 *
	 * @return array the menu Infos
	 */
	protected function _getMenuInfos($getAll = false)
	{
		$this->_loadModel('passport', 'admin/menuModel');
		$infos = $this->menuModel->getAllInfos('', 'id', array(), array(array('listorder', 'asc')));
		//print_r($infos);
		$menuInfos = array();
		foreach ($infos as $info) {
			if (($this->userInfo['roleid'] != 1) && empty($getAll) && !in_array($info['id'], $this->privInfos)) {
				continue;
			}

			$appUrl = $this->appInfos[$info['app_code']]['url'];
			$appUrl = empty($appUrl) ? $this->baseUrl : $appUrl;
			$url = $appUrl . 'admin/' . $info['controller'] . '/' . $info['method'] . '/';
			$info['url'] = $url;
			$menuInfos[$info['id']] = $info;
			if ($info['app_code'] == APPCODE 
				&& $info['controller'] == $this->controller && $info['method'] == $this->method ) {
                $this->currentMenu = $info;
			}
		}

		return $menuInfos;
	}

	/**
	 * Get the priv infos of the current role.
	 *
	 * @param int $roleId
	 * @return array the menu Infos
	 */
	protected function _getPrivInfos($roleId)
	{
		$this->_loadModel('passport', 'admin/privilegeModel');
		$infos = $this->privilegeModel->getAllInfos('', 'menu_id', array('role_id' => $roleId));

		$privInfos = array();
		foreach ($infos as $info) {
			$privInfos[] = $info['menu_id'];
		}

		return $privInfos;
	}

	/**
	 * List the infos, the common listinfo operation
	 *
	 * @return void
	 */
	protected function _listinfo($fields = '*')
	{
		$this->load->library('pagination');

		$page = intval($this->input->get_post('page'));
		$currentPage = max(1, $page);
		$paginationInfos = $this->_paginationConfig();
		$pageSize = empty($paginationInfos['per_page']) ? 15 : $paginationInfos['per_page'];
		$where = $this->_where();
		$order = $this->_order();
		$result = $this->currentModel->getInfos('', $where, $order, $currentPage, $pageSize, $fields);
		$this->infos = $this->_formatInfos($result['infos']);

		$paginationInfos['base_url'] = strpos($this->urlForward, '?') !== false ? $this->urlForward : $this->urlForward . '?';
		$paginationInfos['total_rows'] = $result['num'];
		$this->pagination->initialize($paginationInfos);
		$this->pageStr = '<a>' . $result['num'] . '条</a>   <a>第<b>' . $currentPage . '</b>页/总' . ceil($result['num'] / $pageSize) . '页</a>    ';
		$this->pageStr .= $this->pagination->create_links();

		$this->load->view($this->template);
	}
	
	/**
	 * The pagination config infos
	 *
	 * @return array config infos
	 */
	protected function _paginationConfig()
	{
		$config['per_page'] = 15; // Max number of items you want shown per page
		$config['num_links'] =  5; // Number of "digit" links to show before/after the currently viewed page
		$config['use_page_numbers'] = TRUE; // Use page number for segment instead of offset
		$config['next_link'] = '&gt;&gt;';
		$config['prev_link'] = '&lt;&lt;';
		$config['uri_segment'] = 4;
		$config['cur_tag_open'] = '<span>';
		$config['cur_tag_close'] = '</span>';
		$config['page_query_string'] = TRUE;
		$config['query_string_segment'] = 'page';
	
		return $config;
	}

	/**
	 * Get the where clause
	 *
	 * @return array | null
	 */
	protected function _where()
	{ 
		return ''; 
	}

	/**
	 * Get the order clause
	 *
	 * @return array | null
	 */
	/**
	 * Base order method
	 * 
	 * @return array
	 */
	protected function _order()
	{
		return false;
	}

	/**
	 * View a info
	 *
	 * @return void
	 */
	protected function _view()
	{
		$info = $this->_getInfoById();
		$this->currentInfo = $this->_formatInfo($info);

		$this->load->view($this->template);
	}
	
	/**
	 * Initial some info before add
	 *
	 * @return void
	 */
	protected function _initInfo($parentid = 0, $appCode = '', $display = 0)
	{}
	
	/**
	 * Add an info
	 *
	 * @return void
	 */
	protected function _add()
	{
		if ($this->form_validation->run() == false) {
			$this->_initInfo();
			$this->load->view($this->template);
		} else {
			foreach ($this->fieldChanges as $field) {
				$info[$field] = $this->input->post($field);
			}

			$info = $this->_formatInfo($info, true);
			$addResult = $this->currentModel->addInfo($info);
            if ($addResult === true) {
				$this->_afterAdd($info);
            	$this->_writeLog($info, 'add');
            }

			$message = $this->appMenus[$this->method]['name'] . $this->lang->line('admin_successful');
			$this->_showMessage($message);
		}
	}

	/**
	 * Do some operations after adding an info 
	 *
	 * @return void
	 */
	protected function _afterAdd($info)
	{}
	
	/**
	 * Eidt a info
	 *
	 * @return void
	 */
	protected function _edit()
	{
		$info = $this->_getInfoById();
		if (empty($info)) {
			$message = $this->lang->line('admin_infonoexist');
			$this->_showMessage($message);
		}
		
		$this->currentInfo = $this->_formatInfo($info);
		if ($this->form_validation->run() == false) {
			$this->load->view($this->template);
		} else {
			foreach ($this->fieldChanges as $field) {
				$data[$field] = $this->input->post($field);
			}
			$data = $this->_formatInfo($data, true);
			$editResult = $this->currentModel->editInfo($data, array('id' => $this->id));
			
			if ($editResult) {
				$this->_writeLog($data, 'edit', $info);
			}
			$message = $this->appMenus[$this->method]['name'] . $this->lang->line('seccessful');
			$this->_showMessage($message);
		}
	}

	/**
	 * Change the order of the infos
	 * 
	 * @return void
	 */
	protected function _listorderExt()
	{
		$action = $this->input->get_post('action');
		if ($action != 'listorder') {
			return ;
		}
		
		$listorders = $this->input->post('listorders');
		if (!empty($listorders)) {
			foreach ($listorders as $id => $listorder) {
				$query = $this->currentModel->editInfo(array('listorder' => $listorder), array('id' => $id));
				if (empty($query)) {
					unset($listorders[$id]);
				}
			}
		}
		if (!empty($listorders)) {
			$this->_writeLog($listorders, 'listorder');
		}

		$urlForward = $this->input->get_post('urlForward');
		$urlForward = empty($urlForward) ? $this->urlForward : $urlForward;
		$message = '排序' . $this->lang->line('seccessful');

		$this->_showMessage($message, $urlForward);
	}

    /**
	 * 删除
	 *
     * @param sring $condition_field 删除的字段名
	 * @return void
	 */
	public function _delete()
	{
		$info = $this->_getInfoById();
		if (empty($info)) {
			$message = $this->lang->line('admin_infonoexist');
			$this->_showMessage($message);
		}
		
		$deleteResult = $this->currentModel->deleteInfo(array('id' => $this->id));
		if ($deleteResult) {
			$this->_afterDelete();
			$this->_writeLog($info, 'delete');
		}
		
		$message = $this->appMenus[$this->method]['name'] . $this->lang->line('seccessful');
		$this->_showMessage($message);
	}

	/**
	 * Do some operations after deleting an info
	 *
	 * return void
	 */
	protected function _afterDelete()
	{}

	/**
	 * Delete multi infos
	 * 
	 * @return void
	 */
	protected function _deleteExt()
	{
		$action = $this->input->get_post('action');
		if ($action != 'deleteMul') {
			return ;
		}

		$mulIds = $this->input->post('mulIds');
		$mulIdStr = implode(',', $mulIds);
		$where = "id IN ($mulIdStr)";
		$deleteInfos = $this->currentModel->getInfos('', $where);

		if (!empty($deleteInfos)) {
			$query = $this->currentModel->deleteInfo($where);
			$this->_writeLog($deleteInfos['infos'], 'deletemul');
		}

		$urlForward = $this->input->get_post('urlForward');
		$urlForward = empty($urlForward) ? $this->urlForward : $urlForward;
		$message = '操作' . $this->lang->line('seccessful');

		$this->_showMessage($message, $urlForward);
	}

	/**
	 * Format the element of the infos
	 *
	 * @param  array $infos the infos
	 * @return array | false formated infos
	 */
	protected function _formatInfos(array $infos)
	{
		return $infos;
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
		return $info;
	}

	/**
	 * Get a select element string for a form
	 * 
	 * @param  array $infos
	 * @param  string $showField
	 * @param  mixed $selectedKey
	 * @param  boolean $emptyElement have a empty element
	 * @return string
	 */
	protected function _getSelectElement($infos, $keyField, $showField, $currentKey = '', $emptyElement = true)
	{
		if (!is_array($infos) || empty($infos) || empty($keyField) || empty($showField)) {
			return '';
		}
		
		$selectString = empty($emptyElement) ? '' : '<option value="0"></option>';
		foreach ($infos as $info) {
			$selected = ($info[$keyField] == $currentKey) ? 'selected="selected"' : '';
			$selectString .= "<option value='{$info[$keyField]}' $selected>{$info[$showField]}</option>";
		}
		
		return $selectString;
	}
	
	/**
	 * pagination
	 * 
	 * @return void
	 */
	protected function _paginationStr($urlStr)
	{
		if (@strpos($this->pagination->suffix, $urlStr) === false && $urlStr != '') {
			$this->pagination->page_query_string=TRUE;
			$this->pagination->enable_query_strings=TRUE;
		
			@$this->pagination->suffix .= strpos($this->pagination->suffix , '?') !== false ? $urlStr : '?' . $urlStr;
		}
	}
		
	/**
	 * Show the operation message
	 *
	 * @param  string $message
	 * @param  string $urlForward
	 * @param  int $showTime
	 * @return void
	 */
	protected function _showMessage($message, $urlForward = '', $showTime = 1500)
	{
		$this->message = $message;
		$this->urlForward = empty($urlForward) ? $this->urlForward : $urlForward;
		$this->showTime = $showTime;
		echo $this->load->view($this->messageTemplate, '', true);
		exit();
	}

    /**
	 * Record the manager operating log
	 *
	 * @param array $data The changed info
	 * @return boolean
	 */
	protected function _writeLog($data, $type, $dataOld = array())
	{
		$info = array(
			'userid' => $this->userInfo['id'],
			'username' => $this->userInfo['username'],
			'roleid' => $this->userInfo['roleid'],
			'role_name' => $this->roleInfo['name'],
			'menu_id' => $this->currentMenu['id'],
			'menu_name' => $this->currentMenu['name'],
			'logtype' => $type,
			'data' => serialize($data),
			'data_old' => serialize($dataOld),
			'ip' => $this->ip,
			'inputtime' => $this->time,
		);

		$this->_loadModel('passport', 'admin/managerlogModel');
		$addResult = $this->managerlogModel->addInfo($info);
		
		return $addResult;
	}
}