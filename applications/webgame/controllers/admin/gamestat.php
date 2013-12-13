<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gamestat extends Custom_AdminController
{
	public function __construct()
	{
		parent::__construct();
		$this->_initCurrentModel('gamestatModel');
		$this->currentModel->currentDb = $this->currentModel->_loadDatabase('novalog'); 

		$this->tableInfosFile = $this->appInfos[APPCODE]['path'] . 'cache/tableInfo.php'; //echo $this->tableInfosFile;
		$this->tableInfos = require $this->tableInfosFile; 
		$this->orderFields = array(
			'paradiselevel', 'petnum', 'fulllevelpetnum', 'achievementnum', 'money', 'charlevel', 'seizepetcount', 'restorepetnum', 'askcount', 'praybean', 'openshopnum',  'investnum', 'getrubbishnum', 
			'friendcount', 'freepetnum', 'recipecookcount', 'eggnum', 'floor', 'composepetnum', 'bosschallengenum', 'blackholenum', 'battlecount', 'exploringcount', 'pethprange', 'petspeedrange', 
			'petattackrange', 'petdefencerange', 'petspeattrange', 'petspedefrange', 'plat_all_count', 'game_all_count', 'pet_all_count', 'money_all_count', 'item_all_count', 'online_count', 'lastin'
		);
	}

	public function indexbak()
	{
		$tableStructs = $this->currentModel->currentDb->from('columns')->get()->result_array();

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
		print_r($tableInfos);exit();
	}

	/**
	 * List the all manager log infos
	 *
	 * @return void
	 */
	public function index()
	{
		$this->table = $this->input->get_post('table');
		$this->table = in_array($this->table, array_keys($this->tableInfos)) ? $this->table : 'addnewpet'; 
		$this->tableInfo = $this->tableInfos[$this->table];
		$this->load->library('pagination');

		$page = intval($this->input->get_post('page'));
		$currentPage = max(1, $page);
		$paginationInfos = $this->_paginationConfig();
		$pageSize = empty($paginationInfos['per_page']) ? 15 : $paginationInfos['per_page'];
		$where = $this->_where();
		$order = $this->_order(); 
		$result = $this->currentModel->getInfos($this->table, $where, $order, $currentPage, $pageSize);
		$this->infos = $this->_formatInfos($result['infos']);

		$paginationInfos['base_url'] = strpos($this->urlForward, '?') !== false ? $this->urlForward : $this->urlForward . '?';
		$paginationInfos['total_rows'] = $result['num'];
		$this->pagination->initialize($paginationInfos);
		$this->pageStr = '<a>' . $result['num'] . '条</a>   <a>第<b>' . $currentPage . '</b>页/总' . ceil($result['num'] / $pageSize) . '页</a>    ';
		$this->pageStr .= $this->pagination->create_links();

		$this->load->view($this->template);
	}

	public function analyze()
	{
		$_GET['table'] = 'analyze_status';
		$this->index();
	}

	public function behind()
	{
		$_GET['table'] = 'nova_behind';
		$this->table = $this->input->get_post('table');
		$this->table = in_array($this->table, array_keys($this->tableInfos)) ? $this->table : 'addnewpet'; 
		$this->tableInfo = $this->tableInfos[$this->table];
		$this->load->library('pagination');

		$page = intval($this->input->get_post('page'));
		$currentPage = max(1, $page);
		$paginationInfos = $this->_paginationConfig();
		$pageSize = empty($paginationInfos['per_page']) ? 15 : $paginationInfos['per_page'];
		$where = $this->_where();
		$order = $this->_order(); 
		if ($this->input->get_post('isRemain') == 'yes') {
			$result = $this->currentModel->getInfosbak($this->table, $where, $order, $currentPage, $pageSize);
		} else {
			$result = $this->currentModel->getInfos($this->table, $where, $order, $currentPage, $pageSize);
		}
		$this->infos = $this->_formatInfos($result['infos']);

		$paginationInfos['base_url'] = strpos($this->urlForward, '?') !== false ? $this->urlForward : $this->urlForward . '?';
		$paginationInfos['total_rows'] = $result['num'];
		$this->pagination->initialize($paginationInfos);
		$this->pageStr = '<a>' . $result['num'] . '条</a>   <a>第<b>' . $currentPage . '</b>页/总' . ceil($result['num'] / $pageSize) . '页</a>    ';
		$this->pageStr .= $this->pagination->create_links();

		$this->load->view($this->template);
	}

	public function online()
	{
		$_GET['table'] = 'online';
		$this->index();
	}
		
	/**
	 * Get the where clause
	 *
	 * @return array | null
	 */
	protected function _where()
	{
		$this->pagination->page_query_string=TRUE;
		$this->pagination->enable_query_strings=TRUE;
		$whereArray = array();
		$urlStr = '&table=' . $this->input->get_post('table');
		$this->isRemain = 'no';
		$this->remainType = '';
	
		if ($this->table == 'nova_behind' && $this->input->get_post('isRemain') == 'yes') {
			$this->isRemain = 'yes';
			$this->remainType = intval($this->input->get_post('remainType'));
			$this->remainTime = $this->input->get('remain_time');
			if (empty($this->remainType) || empty($this->remainType)) {
				return $whereArray;
			}

			$remainTimeStamp = strtotime($this->remainTime);
			$remainTimeStamp1 = $remainTimeStamp + 86400;
			$whereArray = array_merge($whereArray, array('create_time >=' => $remainTimeStamp), array('create_time < ' => $remainTimeStamp1));
			$whereArray = array_merge($whereArray, array('lastin >=' => $remainTimeStamp + 86400), array('lastin <' => $remainTimeStamp1 + 86400 * $this->remainType));

			$urlStr .= '&remain_time=' . $this->remainTime . '&remainType=' . $this->remainType . '&isRemain=yes';
		} else {
			$timeFields = array('analyze_status' => 'insert_date', 'nova_behind' => 'create_time');
			$timeField = isset($timeFields[$this->table]) ? $timeFields[$this->table] : 'time'; 

			$startTime = $this->input->get('start_time');
			$endTime = $this->input->get('end_time');
			$endTime = !empty($endTime) ? $endTime . ' 23:59:59' : '';
			if ((!empty($startTime) || !empty($endTime)) && in_array($timeField, array_keys($this->tableInfo['fields']))) {
				$whereArray = empty($startTime) ? $whereArray : array_merge($whereArray, array($timeField . ' >=' => strtotime($startTime)));
				$whereArray = empty($endTime) ? $whereArray : array_merge($whereArray, array($timeField . ' <=' => strtotime($endTime)));

				$urlStr .= empty($startTime) ? '' : '&start_time=' . $startTime;
				$urlStr .= empty($endTime) ? '' : '&end_time=' . str_replace(' 23:59:59', '', $endTime);
			}

			$guid = $this->input->get('guid');
			if (!empty($guid)) {
				$whereArray = array_merge($whereArray, array('guid = ' => $guid));
				$urlStr .= empty($guid) ? '' : '&guid=' . $guid;
			}
		}

		$this->_paginationStr($urlStr);
		return $whereArray;
	}
		
	/**
	 * Get the order clause
	 * 
	 * @return array
	 */
	protected function _oruder()
	{
		$timeFields = array('analyze_status' => 'insert_date', 'nova_behind' => 'create_time');
		$timeField = isset($timeFields[$this->table]) ? $timeFields[$this->table] : 'time'; 

		$order = array(array($timeField, 'desc'));
		
		return $order;
	}

	
	/**
	 * Base order method
	 * 
	 * @return array
	 */
	protected function _order()
	{
		$order = array();
		$urlStr = '';
		$orderField = $this->input->get_post('orderField');
		if (!empty($orderField)) {
			$orderType = $this->input->get_post('orderType');
			$orderType = in_array($orderType, array('desc', 'asc')) ? $orderType : 'desc';
			$order[] = array($orderField, $orderType);
			$urlStr .= '&orderField=' . $orderField . '&orderType=' . $orderType;
		}
		
		$timeFields = array('analyze_status' => 'insert_date', 'nova_behind' => 'create_time');
		$timeField = isset($timeFields[$this->table]) ? $timeFields[$this->table] : 'time'; 

		if ($this->table != 'big_count') {
			$order = array_merge($order, array(array($timeField, 'desc')));
		}
		
		$this->_paginationStr($urlStr);
		return $order;
	}
	
    /**
	 * Format the manager infos 
	 *
	 * @param  array $infos the infos
	 * @return array | false formated infos
	 */
	protected function _formatInfos(array $infos)
	{
		$dateFields = array('time', 'insert_date', 'create_time', 'lastin', 'lastout');
		if (is_array($infos) && !empty($infos)) {
			foreach ($infos as $key => $info) {
				foreach ($dateFields as $dateField) {
					if (isset($info[$dateField]) && $this->table != 'big_count') {
						$info[$dateField] = date('Y-m-d H:i:s', $info[$dateField]);
					}
				}
				$infos[$key] = $info;
			}
		}

		return $infos;
	}
}