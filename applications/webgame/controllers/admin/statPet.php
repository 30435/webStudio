<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once __DIR__ . '/statCommon.php';
class statPet extends StatCommon
{
	public function __construct()
	{
		parent::__construct();
		$this->table = 't_pet_log';
		$this->levelArray = array('one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten', 'eleven', 'twelve', 'thirteen', 'fourteen', 'fifteen');
	}

	public function t_pet_log()
	{
		$this->template = 'admin/statPet';
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
		if (is_array($infos) && !empty($infos)) {
			foreach ($infos as $key => $info) {
				foreach ($this->levelArray as $level) {
					$rate = empty($info['pet_all_count']) ? 0 : round($info[$level . '_level'] / $info['pet_all_count'], 3);
					$rate = $rate * 100 . '%';
					$info[$level . '_level'] = $info[$level . '_level'] . ' (' . $rate . ')';
				}
				$infos[$key] = $info;
			}
		}

		return $infos;
	}
	
	/**
	 * The pagination config infos
	 *
	 * @return array config infos
	 */
	protected function _paginationConfig()
	{
		$config['per_page'] = 20; // Max number of items you want shown per page
		$config['num_links'] =  5; // Number of "digit" links to show before/after the currently viewed page
		$config['use_page_numbers'] = TRUE; // Use page number for segment instead of offset
		$config['next_link'] = '&gt;&gt;';
		$config['prev_link'] = '&lt;&lt;';
		//$config['uri_segment'] = 4;
		$config['cur_tag_open'] = '<span>';
		$config['cur_tag_close'] = '</span>';
		$config['page_query_string'] = TRUE;
		$config['query_string_segment'] = 'page';
	
		return $config;
	}
}