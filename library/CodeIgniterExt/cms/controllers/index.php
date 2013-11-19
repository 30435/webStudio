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

		$template = '';
		if ($this->modelInfo['id'] == 1 && !empty($this->currentCategoryInfo['template_page'])) {
			$template = $this->templatePre . $this->currentCategoryInfo['template_page'];
		}
		//print_r($this->currentSubCategoryInfos); echo $this->currentCategoryInfo['template_big']; exit();
		if (empty($temlate) && !empty($this->currentSubCategoryInfos) && !empty($this->currentCategoryInfo['template_big'])) {
			$template = $this->templateListPre . $this->currentCategoryInfo['template_big'];
		}
		
		if (empty($template)) {
			$template = !empty($this->currentCategoryInfo['template_list']) ? $this->templateListPre . $this->currentCategoryInfo['template_list'] : $this->templateListPre . 'list';
		}
		$this->metaDatas = array('title' => '诺瓦奇兵游戏官网', 'keywords' => 'kids 少儿 事业部 知金', 'description' => '少儿事业部是个少儿的乐园');
		$this->metaDatas['title'] = $this->currentCategoryInfo['catname'] . '-' . $this->metaDatas['title'];
		$this->metadatas['keywords'] = empty($this->currentCategoryInfo['meta_keywords']) ? $this->metaDatas['keywords'] : $this->currentCategoryInfo['meta_keywords'];
		$this->metadatas['description'] = empty($this->currentCategoryInfo['meta_description']) ? $this->metaDatas['description'] : $this->currentCategoryInfo['meta_description'];
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
			$this->pageStr = '<a>' . $result['num'] . '条</a>   <a>第<b>' . $currentPage . '</b>页/总' . ceil($result['num'] / $pageSize) . '页</a>    ';
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