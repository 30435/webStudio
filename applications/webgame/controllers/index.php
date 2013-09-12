<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once BASEPATH_EXT . 'cms/controllers/index.php';

class Index extends CmsIndex
{
	public function __construct()
	{
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
		$this->load->view('index1', $this->frontController);
	}
}