<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once __DIR__ . './statCommon.php';
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

		$this->load->library('pagination');

		$page = intval($this->input->get_post('page'));
		$currentPage = max(1, $page);
		$paginationInfos = $this->_paginationConfig();
		$pageSize = empty($paginationInfos['per_page']) ? 15 : $paginationInfos['per_page'];
		$where = $this->_extWhere();
		$order = $this->_order(); 

		$result = $this->currentModel->getInfosbak($this->table, $where, $order, $currentPage, $pageSize);

		$this->infos = $this->_formatInfos($result['infos']);

		$paginationInfos['base_url'] = strpos($this->urlForward, '?') !== false ? $this->urlForward : $this->urlForward . '?';
		$paginationInfos['total_rows'] = $result['num'];
		$this->pagination->initialize($paginationInfos);
		$this->pageStr = '<a>' . $result['num'] . '条</a>   <a>第<b>' . $currentPage . '</b>页/总' . ceil($result['num'] / $pageSize) . '页</a>    ';
		$this->pageStr .= $this->pagination->create_links();

		$this->load->view($this->template);
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