<?php
class GamestatModel extends CommonModel 
{
	public function __construct($data = '')
	{
		parent::__construct($data);		
	}

	/**
	 * Get the infos
	 *
	 * @param  int $page point the current page
	 * @param  int $pageSize the numbers of every page
	 * @return array the infos
	 */
	public function getInfosbak($table, $where = array(), $order = array(), $page = 1, $pageSize = 15, $fields = '*', $keyField = '', $start = 0)
	{
		$table = empty($table) ? $this->table : $table;
		$start = empty($start) ? ($page - 1) * $pageSize : $start;

		if (!empty($where)) {
			$whereStr = '';
			foreach ($where as $subKey => $subValue) {
				$whereStr .= $subKey . $subValue . ' AND ';
			}
		}
		$whereStr = rtrim($whereStr, ' AND ');
		$getNums = $this->currentDb->query("SELECT COUNT(DISTINCT(`guid`)) AS `count` FROM `nova_behind` WHERE {$whereStr}");
		$numInfos = $getNums->row_array();
		$totalNums = $numInfos['count'];

		$query = $this->currentDb->select($fields)->from($table);
		if (!empty($where)) {
			$query = $query->where($where);
		}

		if (is_array($order) && !empty($order)) {
			foreach ($order as $orderField) {
				$query = $query->order_by($orderField[0], $orderField[1]);
			}
		}
		$query = $query->group_by('guid');
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
}