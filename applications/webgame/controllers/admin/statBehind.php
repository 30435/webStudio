<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once __DIR__ . '/statCommon.php';
class statBehind extends StatCommon
{
	public function __construct()
	{
		parent::__construct();
		$this->table = 'nova_behind';
	}

	public function nova_behind()
	{
		$initResult = $this->initExt();
		if (empty($initResult)) {
			return ;
		}

		$sql = "SELECT SUM(`openshopnum`) AS `nums` FROM `{$this->table}` WHERE {$this->where}";
		$nums = $this->getNums($sql);
		$loginedNums = $this->getLoginedNums(); 
		$rate = $loginedNums > 0 ? $nums / $loginedNums : 0;
	
		//$resultInfos = $this->getExtInfo('restorepetnum');
		$extInfos[] = array('key' => '商店打开次数', 'value' => $nums);
		$extInfos[] = array('key' => '登陆人数', 'value' => $loginedNums);
		$extInfos[] = array('key' => '商店使用比率', 'value' => $rate);

		$this->showExtInfo($extInfos);
	}

	protected function _extWhere()
	{
		$this->pagination->page_query_string=TRUE;
		$this->pagination->enable_query_strings=TRUE;
		$whereArray = array();
		$urlStr = '&table=' . $this->input->get_post('table');

		$this->isExt = 'yes';
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
	

		$this->_paginationStr($urlStr);
		return $whereArray;
	}
}