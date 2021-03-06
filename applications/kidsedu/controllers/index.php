<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once BASEPATH_EXT . 'cms/controllers/index.php';

class Index extends CmsIndex
{
	public function __construct()
	{
		$this->templatePre = $this->templateListPre = $this->templateShowPre = 'source/';
		parent::__construct();

		$this->loginedUserInfo = $this->_checkUserLogin();
	}

	public function index()
	{
		$this->load->view($this->templatePre . 'index', $this->frontController);
	}

	public function index1()
	{
		$this->load->view('index1', $this->frontController);
	}

	public function show()
	{
		$this->load->view('show', $this->frontController);
	}
}