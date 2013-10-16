<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CmsIndex extends Custom_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('index');
	}

	public function category()
	{
		$this->_initModel();

		$template = !empty($this->currentCategoryInfo['template']) ? $this->templateListPre . $this->currentCategoryInfo['template'] : $this->templateListPre . 'list';
		$this->load->view($template, $this->frontController);
	}
	
	public function getCmsInfos($pageSize, $fields, $where = array(), $order = array(), $withPage = false)
	{
		$page = intval($this->input->get_post('page'));
		$currentPage = empty($withPage) ? 1 : max(1, $page);
		
		$pageSize = empty($pageSize) ? 30 : $pageSize;
		$where = array_merge($where, $this->_where());
		$order = array_merge($order, $this->_order());
		$fields = empty($fields) ? 'id, title, updatetime, url, thumb, description' : $fields;
		$result = $this->currentModel->getInfos('', $where, $order, $currentPage, $pageSize, $fields);
		$infos = $this->_formatInfos($result['infos']);

		if ($withPage) {
			$this->load->library('pagination');
			$paginationInfos = $this->_paginationConfig();
			$paginationInfos['base_url'] = strpos($this->urlForward, '?') !== false ? $this->urlForward : $this->urlForward . '?';
			$paginationInfos['total_rows'] = $result['num'];
			$this->pagination->initialize($paginationInfos);
			$this->pageStr = '<a>' . $result['num'] . 'ฬ๕</a>   <a>ตฺ<b>' . $currentPage . '</b>าณ/ืÜ' . ceil($result['num'] / $pageSize) . 'าณ</a>    ';
			$this->pageStr .= $this->pagination->create_links();
		}

		return $infos;
	}

	/**
	 * Show the content of the info
	 */
	public function show()
	{
		$id = $this->input->get_post('id');
		list($catid, $id) = explode('_', $id);

		$_GET['id'] = $id;
		$this->_initModel($catid);
		$this->currentInfo = $this->_getInfoById();
		$this->load->view($this->templateShowPre . 'show', $this->frontController);
	}

	/**
	 * Format the element of the infos
	 *
	 * @param  array $infos the infos
	 * @return array | false formated infos
	 */
	protected function _formatInfos(array $infos)
	{
		return $infos;
	}

	/**
	 * The pagination config infos
	 *
	 * @return array config infos
	 */
	protected function _paginationConfig()
	{
		$config['per_page'] = 15; // Max number of items you want shown per page
		$config['num_links'] =  5; // Number of "digit" links to show before/after the currently viewed page
		$config['use_page_numbers'] = TRUE; // Use page number for segment instead of offset
		$config['next_link'] = '&gt;&gt;';
		$config['prev_link'] = '&lt;&lt;';
		$config['uri_segment'] = 4;
		$config['cur_tag_open'] = '<span>';
		$config['cur_tag_close'] = '</span>';
		$config['page_query_string'] = TRUE;
		$config['query_string_segment'] = 'page';
	
		return $config;
	}

	/**
	 * Get the where clause
	 *
	 * @return array | null
	 */
	protected function _where()
	{ 
		//$where = array('catid' => $this->catid);
		return array();
	}

	/**
	 * Get the order clause
	 *
	 * @return array | null
	 */
	/**
	 * Base order method
	 * 
	 * @return array
	 */
	protected function _order()
	{
		return array(array('inputtime', 'desc'));
	}
}