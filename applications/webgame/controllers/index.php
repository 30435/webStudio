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
		$this->load->view($this->templatePre . 'search', $this->frontController);
	}

	public function spirit()
	{
		$this->_initCurrentModel('spiritModel');
		$this->currentInfo = $this->_getInfoById();
		//var_dump($this->currentInfo);
		$this->load->view('cfront/show_spirit', $this->frontController);
	}
}