<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class StatCommon extends Custom_AdminController
{
	public function __construct()
	{
		parent::__construct();
		$this->_initCurrentModel('gamestatModel');
		$this->currentModel->currentDb = $this->currentModel->_loadDatabase('novalog'); 

		$this->tableInfosFile = $this->appInfos[APPCODE]['path'] . 'cache/tableInfo.php'; //echo $this->tableInfosFile;
		$this->tableInfos = require $this->tableInfosFile; 
		$this->orderFields = array(
			'paradiselevel', 'petnum', 'fulllevelpetnum', 'achievementnum', 'money', 'charlevel', 'seizepetcount', 'restorepetnum', 'askcount', 'praybean', 'openshopnum',  'investnum', 'getrubbishnum', 'praycount',
			'friendcount', 'freepetnum', 'recipecookcount', 'eggnum', 'floor', 'composepetnum', 'bosschallengenum', 'blackholenum', 'battlecount', 'exploringcount', 'pethprange', 'petspeedrange', 
			'petattackrange', 'petdefencerange', 'petspeattrange', 'petspedefrange', 'plat_count', 'game_count', 'pet_all_count', 'money_all_count', 'item_all_count', 'online_count', 'lastin'
		);

		$this->controllerTables = array(
			'statLog1' => array('addachievement', 'addnewpet', 'addtitle', 'airport', 'battle', 'blackhole', 'bosschallenge'),
			'statLog2' => array('buyitem', 'composepet', 'copybabel', 'createegg', 'delicacyshop', 'freepet', 'getrubbish'),
			'statLog3' => array('invest', 'mission', 'openshop', 'petevolution', 'petlevelup', 'praybean', 'question'),
			'statLog4' => array('questionchoice', 'relation', 'restorepet', 'seizepet', 'useitem', 'userdata'),
		);
		$this->template = 'admin/statCommon';
		$this->showSubnav = false;
		$this->tableExt = false;
		
		$this->weekInfos = array(
			'0' => '周一',
			'1' => '周二',
			'2' => '周三',
			'3' => '周四',
			'4' => '周五',
			'5' => '周六',
			'6' => '周日',
		);
	}

	public function createTableInfo()
	{
		$link = mysql_connect($this->currentModel->currentDb->hostname, $this->currentModel->currentDb->username, $this->currentModel->currentDb->password); //'nova_log', 'novadb521');

		$tableInfos = array();
		$sql = "SELECT * FROM `information_schema`.`tables`";
		$result = mysql_query($sql);
		while ($row = mysql_fetch_array($result)) {
			if ($row['TABLE_SCHEMA'] == 'nova_log') {
				$tableInfos[$row['TABLE_NAME']]['comment'] = $row['TABLE_COMMENT'];
			}
		}

		$sql = "SELECT * FROM `information_schema`.`columns`";
		$result = mysql_query($sql);
		while ($row = mysql_fetch_array($result)) {
			if ($row['TABLE_SCHEMA'] == 'nova_log') {
				$tableInfos[$row['TABLE_NAME']]['fields'][$row['COLUMN_NAME']] = $row['COLUMN_COMMENT'];
			}
		}

		$data = "<?php\nreturn " . var_export($tableInfos, true) . ";\n?>";

		$bakSuffix = $this->userInfo['username'] . '-' . date('YmdHis', $this->time);
		$bakFile = str_replace('tableInfo', 'tableInfo-' . $bakSuffix, $this->tableInfosFile);
		copy($this->tableInfosFile, $bakFile);
		$strlen = file_put_contents($this->tableInfosFile, $data);
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
	 * Index
	 */
	public function index()
	{
		$this->table = isset($this->table) ? $this->table : $this->input->get_post('table');
		$this->tableInfo = $this->tableInfos[$this->table];

		$method = $this->table;
		if (in_array($this->table, array_keys($this->tableInfos)) && method_exists($this, $method)) {
			
			$this->$method();
		} else {
			$this->baseList();
		}
	}

	/**
	 * Initial ext operation
	 */
	public function initExt()
	{
		$this->tableExt = true;

		$isExt = $this->input->get_post('isExt');
		if (empty($isExt)) {
			$this->baseList();
			return false;
		} else {
			$this->extTime = $this->input->get_post('extTime');
			$this->extTime = empty($this->extTime) ? 0 : $this->extTime;
			if (!empty($this->extTime)) {
				$this->extTimeStamp = strtotime($this->extTime);
				$this->extTimeStampEnd = $this->extTimeStamp + 86400;
				$this->where = "`time` >= {$this->extTimeStamp} AND `time` < {$this->extTimeStampEnd}";
			} else {
				$this->extTimeStamp = $this->extTimeStampEnd = 0;
				$this->where = "1";
			}
			return true;
		}
	}

	/**
	 * Get ExtInfo
	 */
	public function getExtInfo($field, $extWhere = '')
	{
		$loginedNums = $this->getLoginedNums();

		$extTimeStampEnd = $this->extTimeStamp + 86400;
		$where = "`time` >= {$this->extTimeStamp} AND `time` < {$extTimeStampEnd}";
		$where .= empty($extWhere) ? '' : $extWhere;
		
		$getNums = $this->currentModel->currentDb->query("SELECT SUM(`{$field}`) AS `nums` FROM `{$this->table}` WHERE {$where}");
		$nums = $getNums->row_array();
		$rate = $loginedNums > 0 ? $nums['nums'] / $loginedNums : 0;

		$returnArray = array('loginedNums' => $loginedNums, 'nums' => $nums['nums'], 'rate' => $rate);
		return $returnArray;
	}

	/**
	 * Get statistic num
	 */
	public function getNums($sql, $returnNum = true)
	{
		$getNums = $this->currentModel->currentDb->query($sql);
		$nums = $getNums->row_array();
		if ($returnNum) {
			$nums = $nums['nums'];
		}
		return $nums;
	}

	/**
	 * Get the login nums
	 */
	public function getLoginedNums($time = 0)
	{
		$extTimeStamp = empty($time) ? $this->extTimeStamp : $time;
		$loginedNums = $this->currentModel->getloginNum($extTimeStamp);

		return $loginedNums;
	}

	public function showExtInfo($extInfos)
	{
		$resultStr = '<meta http-equiv="Content-type" content="text/html; charset=utf-8" /><div class="pad_10"><div class="common-form"><table width="100%" class="table_form contentWrap">';
		foreach ($extInfos as $extInfo) {
			$resultStr .= '<tr><td>' . $extInfo['key'] . '：</td><td>' . $extInfo['value'] . '</td></tr>';
		}
		$resultStr .= '</table></div></div>';
		echo $resultStr;
	}

	/**
	 * List the all manager log infos
	 *
	 * @return void
	 */
	public function baseList()
	{
		$this->load->library('pagination');

		$page = intval($this->input->get_post('page'));
		$currentPage = max(1, $page);
		$paginationInfos = $this->_paginationConfig();
		$pageSize = empty($paginationInfos['per_page']) ? 15 : $paginationInfos['per_page'];
		$where = $this->_where();
		$order = $this->_order(); 
		$result = $this->currentModel->getInfos($this->table, $where, $order, $currentPage, $pageSize);
		$this->extInfo = isset($result['extInfo']) ? $result['extInfo'] : false;
		$this->infos = $this->_formatInfos($result['infos']);

		$paginationInfos['base_url'] = strpos($this->urlForward, '?') !== false ? $this->urlForward : $this->urlForward . '?';
		$paginationInfos['total_rows'] = $result['num'];
		$this->pagination->initialize($paginationInfos);
		$this->pageStr = '<a>' . $result['num'] . '条</a>   <a>第<b>' . $currentPage . '</b>页/总' . ceil($result['num'] / $pageSize) . '页</a>    ';
		$this->pageStr .= $this->pagination->create_links();

		$this->load->view($this->template);
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
		
		$timeFields = array('analyze_status' => 'insert_date', 'nova_behind' => 'create_time', 'big_count' => 'insert_date', 't_pet_log' => 'insert_date', 'online_hour' => 'insert_date', 'mission_count' => 'insert_date');
		$timeField = isset($timeFields[$this->table]) ? $timeFields[$this->table] : 'time'; 

		$order = array_merge($order, array(array($timeField, 'desc')));
		
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
					if (isset($info[$dateField])) {
						$info[$dateField] = date('Y-m-d H:i:s', $info[$dateField]);
					}
				}
				$infos[$key] = $info;
			}
		}

		return $infos;
	}
}
