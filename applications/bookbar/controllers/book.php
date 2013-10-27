<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once BASEPATH_EXT . 'cms/controllers/index.php';
echo 's';
class Book extends CmsIndex
{
	public function __construct()
	{
		parent::__construct();

		$this->loginedUserInfo = $this->_checkUserLogin();
	}

	public function index()
	{
		$this->load->view('index', $this->frontController);
	}

	public function chapter()
	{
		$this->load->view('book_chapter', $this->frontController);
	}
	
	public function content()
	{
		$this->load->view('book_content', $this->frontController);
	}

	public function show()
	{
		$this->load->view('book_show', $this->frontController);
	}
}