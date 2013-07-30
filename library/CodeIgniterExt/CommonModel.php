<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

abstract class CommonModel extends CI_Model
{
	public function __construct($data)
	{
		parent::__construct();

		$this->time = time();
		$data = empty($data) ? APPCODE : $data;
		$this->currentDb = $this->_loadDatabase($data);

		$this->fieldInfos = $this->_fieldInfos();
	}

	/**
	 * Create database resouce
	 *
	 * @param  string $applicationCode
	 * @return resource
	 */
	protected function _loadDatabase($appCode)
	{
		static $databases = array();
		if (isset($databases[$appCode])) {
			return $databases[$appCode];
		}
	
		$filePath = dirname(APPPATH) . '/config_database.php';
		if (!file_exists($filePath)) {
			exit('数据库配置文件不存在！');
		}
	
		$config = require($filePath);
		if (!is_array($config[$appCode]) || empty($config[$appCode])) {
			exit('应用 ' . $appCode . ' 的数据库配置信息不存在！');
		}
	
		$dbHandler = $this->load->database($config[$appCode], true);
		$databases[$appCode] = $dbHandler;
		return $dbHandler;
	}
	
	/**
	 * Get an info
	 *
	 * @param  array $where e.g. array('id' => 3)
	 * @return array | false return the info or false if no info
	 */
	public function getInfo($where, $table = '')
	{
		if (empty($where)) {
			return false;
		}
		$table = empty($table) ? $this->table : $table;
		$query = $this->currentDb->get_where($table, $where);
		$info = $query->row_array();
	
		return $info;
	}

	/**
	 * Get infos
	 *
	 * @param  array $where
	 * @param  string $table
	 * @return array the infos
	 */
	public function getAllInfos($table = '', $keyField = '', $where = array(), $order = array())
	{
		$table = empty($table) ? $this->table : $table;
		$result = $this->getInfos($table, $where, $order, 1, 500, '*', $keyField);

		return $result['infos'];
	}

	/**
	 * Get the infos
	 *
	 * @param  int $page point the current page
	 * @param  int $pageSize the numbers of every page
	 * @return array the infos
	 */
	public function getInfos($table, $where = array(), $order = array(), $page = 1, $pageSize = 15, $fields = '*', $keyField = '')
	{
		$table = empty($table) ? $this->table : $table;
		$start = ($page - 1) * $pageSize;
	
		if (!empty($where)) {
			$this->currentDb->where($where);
		}
		$totalNums = $this->currentDb->count_all_results($table);
		
		$query = $this->currentDb->select($fields)->from($table);
		if (!empty($where)) {
			$query = $query->where($where);
		}

		if (is_array($order) && !empty($order)) {
			foreach ($order as $orderField) {
				$query = $query->order_by($orderField[0], $orderField[1]);
			}
		}
		$query->limit($pageSize, $start);
		$query = $this->currentDb->get();
		$infos = $query->result_array();

		if (!empty($infos) && !empty($keyField)) {
			foreach ($infos as $info) {
				$midInfos[$info[$keyField]] = $info;
			}
			$infos = $midInfos;
		}
		
		
		$result['num'] = $totalNums;
		$result['infos'] = $infos;
		//var_dump($result);
		
		return $result;
	}
		
	/**
	 * Add an info
	 *
	 * @param  array $data 
	 * @return void
	 */
	public function addInfo($data, $table = '', $replace = false)
	{
		$table = empty($table) ? $this->table : $table;
		if ($replace) {
			$result = $this->currentDb->replace($table, $data);
		} else {
			$result = $this->currentDb->insert($table, $data);
		}

		return $result;
	}

	/**
	 * Edit an info
	 *
	 * @param  array $where e.g. array('id' => 3)
	 * @return array | false return the info or false if no info
	 */
	public function editInfo($data, $where, $table = '')
	{
		if (empty($where) || empty($data)) {
			return false;
		}

		$table = empty($table) ? $this->table : $table;
		$query = $this->currentDb->update($table, $data, $where);
	
		return $query;
	}
	
	/**
	 * Delete an info
	 *
	 * @param  array $where e.g. array('id' => 3)
	 * @return void
	 */
	public function deleteInfo($where, $table = '')
	{
		if (empty($where)) {
			return false;
		}
		$table = empty($table) ? $this->table : $table;
		$query = $this->currentDb->delete($table, $where);

		return $query;
	}
	
	/**
	 * Initial the fields for manger
	 *
	 * @return array the field infos of manager
	 */
	protected function _fieldInfos(){}
}