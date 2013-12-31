<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once __DIR__ . '/statCommon.php';
class statMissionCount extends StatCommon
{
	public function __construct()
	{
		parent::__construct();
		$this->table = 'mission_count';
		$this->taskFields = array('p27', 'p28', 'p29', 'p36', 'p37', 'p38', 'p50', 'p51', 'p52', 'p86', 'p87', 'p88', 'p89', 'p90', 'p91', 'p115', 'p116', 'p146', 'p147', 'p148', 'p149');
	}

	public function mission_count()
	{
		$this->template = 'admin/statDayMission';
		$this->baseList();
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

		$timeFields = array('analyze_status' => 'insert_date', 'nova_behind' => 'create_time');


		$startTime = $this->input->get('start_time');
		$endTime = $this->input->get('end_time');

		if (!empty($startTime) || !empty($endTime)) {
			$whereArray = empty($startTime) ? $whereArray : array_merge($whereArray, array('insert_date >=' => str_replace('-', '', $startTime)));
			$whereArray = empty($endTime) ? $whereArray : array_merge($whereArray, array('insert_date <=' => str_replace('-', '', $endTime)));

			$urlStr .= empty($startTime) ? '' : '&start_time=' . $startTime;
			$urlStr .= empty($endTime) ? '' : '&end_time=' . $endTime;
		}

		$this->_paginationStr($urlStr);
		return $whereArray;
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
	}
}
