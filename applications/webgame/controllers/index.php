<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once BASEPATH_EXT . 'cms/controllers/index.php';

class Index extends CmsIndex
{
	public function __construct()
	{
		$this->templatePre = $this->templateListPre = $this->templateShowPre = 'cfront/';
		parent::__construct();

		$this->loginedUserInfo = $this->_checkUserLogin();
	}

	public function index()
	{
		$template = isset($this->templatePre) ? $this->templatePre . 'index' : 'index';
		$this->load->view($template, $this->frontController);
	}

	public function index1()
	{
		$template = isset($this->templatePre) ? $this->templatePre . 'index1' : 'index1';
		$this->load->view($template, $this->frontController);
	}

	public function index2()
	{
		$template = isset($this->templatePre) ? $this->templatePre . 'index2' : 'index2';
		$this->load->view($template, $this->frontController);
	}

	public function search()
	{
		$key = $this->input->post('searchStr');
		$model = 'newModel';
		$this->_loadModel('webgame', $model);
		$this->resultArray = $this->newModel->currentDb->from('sw_new')->select('title, url, updatetime')->like(array('title' => $key))->limit(100)->get()->result_array();
		$this->load->view('newfront/search', $this->frontController);
	}

	public function slist()
	{
		$this->_initCurrentModel('spiritModel');
		
		$this->load->view('cfront/list_spirit', $this->frontController);
	}

	public function spirit()
	{
		$this->_initCurrentModel('spiritModel');
		$this->currentInfo = $this->_getInfoById();
		$template = isset($this->templateSpiritPre) ? $this->templateSpiritPre . 'show_spirit' : 'cfront/show_spirit';
		//var_dump($this->currentInfo);
		$this->load->view($template, $this->frontController);
	}

	public function getSpirit()
	{
		$field = $this->input->get_post('field');
		$value = $this->input->get_post('value');

		$where = array();
		if (in_array($field, array('sort', 'attribute'))) {
			$where = array($field => $value);
			$newInfos = $this->_getFrontInfos('webgame', 'spirit', 1, 18, $where, array(array('id', 'desc')), 'id, title, thumb,');
			$newInfos = $newInfos['infos'];
		} elseif ($field == 'keyword') {
			$model = 'spiritModel';
			$this->_loadModel('webgame', $model);
			$newInfos = $this->spiritModel->currentDb->from('sw_spirit')->select('title, id, thumb')->like(array('title' => $value))->limit(18)->get()->result_array();
		} else {
			$newInfos = array();
		}
		
		foreach ($newInfos as $key => $newInfo) {
			$newInfo['url'] = $this->currentWebgameInfo['url_server'] . 'spirit?id=' . $newInfo['id'];
			$newInfos[$key] = $newInfo;
		}

		echo $this->_jsonp($newInfos);
		exit();
	}
}
