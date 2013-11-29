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
}