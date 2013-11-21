<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gamestat extends Custom_AdminController
{
	public function __construct()
	{
		parent::__construct();
		$this->_initCurrentModel('gamestatModel');
		$this->currentDb = $this->gamestatModel->_loadDatabase('novalog'); print_r($this->currentModel);

		$this->tableInfosFile = $this->appInfos[APPCODE]['path'] . 'cache/tableInfo.php'; echo $this->tableInfosFile;
		$this->tableInfos = require $this->tableInfosFile; //print_r($this->tableInfos); exit();
	}

	public function indexbak()
	{
		$tableStructs = $this->currentDb->from('columns')->get()->result_array();

		$tableInfos = array();
		foreach ($tableStructs as $tableStruct) {
			if ($tableStruct['TABLE_SCHEMA'] == 'nova_log') {
				$tableName = $tableStruct['TABLE_NAME'];
				$fieldName = $tableStruct['COLUMN_NAME'];
				$fieldComment = $tableStruct['COLUMN_COMMENT']; 
				$tableInfos[$tableName]['fields'][$fieldName] = $fieldComment;
			}
		}

		$data = "<?php\nreturn " . var_export($tableInfos, true) . ";\n?>";
		$strlen = file_put_contents($this->tableInfosFile, $data);
		print_r($tableInfos);
	}

	/**
	 * List the all manager log infos
	 *
	 * @return void
	 */
	public function index()
	{
		$table = $this->input->get_post('table');
		$table = in_array($table, array_keys($this->tableInfos)) ? $table : 'addnewpet';
		$this->load->library('pagination');

		$page = intval($this->input->get_post('page'));
		$currentPage = max(1, $page);
		$paginationInfos = $this->_paginationConfig();
		$pageSize = empty($paginationInfos['per_page']) ? 15 : $paginationInfos['per_page'];
		$where = $this->_where();
		$order = $this->_order(); print_r($this->managerModel); exit();
		$result = $this->managerModel->getInfos($table, $where, $order, $currentPage, $pageSize, $fields);
		$this->infos = $this->_formatInfos($result['infos']);

		$paginationInfos['base_url'] = strpos($this->urlForward, '?') !== false ? $this->urlForward : $this->urlForward . '?';
		$paginationInfos['total_rows'] = $result['num'];
		$this->pagination->initialize($paginationInfos);
		$this->pageStr = '<a>' . $result['num'] . '条</a>   <a>第<b>' . $currentPage . '</b>页/总' . ceil($result['num'] / $pageSize) . '页</a>    ';
		$this->pageStr .= $this->pagination->create_links();

		$this->load->view($this->template);
	}

    /**
	 * View a manager log info
	 *
	 * @return void
	 */
	public function view()
	{
		$this->_view();
	}

	/**
	 * Format an info
	 *
	 * @param  array $info
	 * @param  boolean $isWrite
	 * @return array
	 */
	protected function _formatInfo($info)
	{
		$this->noPriv = false;
		if ($this->showCurrent && $info['userid'] != $this->userInfo['id']) {
			$this->noPriv = true;
			return $info;
		}

		$this->currentLogType = isset($this->logType[$info['logtype']]) ? $this->logType[$info['logtype']] : '';
		$this->logDescription = $this->currentLogType . '==' . $info['role_name'] . '--' . $info['username'] . '--' . $info['menu_name'] 
			. '--' . date('Y-m-d H:i:s', $info['inputtime']) . '--' . $info['ip'];

		$info['data'] = unserialize($info['data']);
		$info['data_old'] = unserialize($info['data_old']);

		return $info;
	}

    /**
	 * Format the manager infos 
	 *
	 * @param  array $infos the infos
	 * @return array | false formated infos
	 */
	protected function _formatInfos(array $infos)
	{
		return $infos;
		if (is_array($infos) && !empty($infos)) {
			foreach ($infos as $key => $info) {
				$info['inputtime'] = date('Y-m-d H:i:s', $info['inputtime']);
				$info['logtype'] = isset($this->logTypes[$info['logtype']]) ? $this->logTypes[$info['logtype']] : $info['logtype'];
				$infos[$key] = $info;
			}
		}

		if (empty($this->showCurrent)) {
			$managerInfos = $this->currentModel->getAllInfos('admin_manager', 'id');
			$this->selectManager = $this->_getSelectElement($managerInfos, 'id', 'username', '');
			$roleInfos = $this->currentModel->getAllInfos('admin_role', 'id');
			$this->selectRole = $this->_getSelectElement($roleInfos, 'id', 'name', '');
		}
		$menuInfos = empty($this->showCurrent) ? $this->currentModel->getAllInfos('admin_menu', 'id') : $this->menuInfos;
		$format = "<option value='\$id' \$selected>\$spacer\$name</option>";
		$tree = new CustomTree($menuInfos);
		$this->selectMenu = $tree->getTree(0, $format);

		return $infos;
	}
}