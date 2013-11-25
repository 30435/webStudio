<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once BASEPATH_EXT . 'cms/controllers/index.php';

class Book extends CmsIndex
{
	public function __construct()
	{
		parent::__construct();
		$this->_initCurrentModel('bookModel');

		$this->loginedUserInfo = $this->_checkUserLogin();
		$this->bookPath = $this->appInfos[APPCODE]['path'] . 'books/';
	}

	public function index()
	{
		$this->load->view('index', $this->frontController);
	}

	public function chapter()
	{
		$this->currentInfo = $this->_getInfoById();
		$chapterFile = $this->bookPath . 'luxun/' . $this->currentInfo['code'] . '.php';
		if (!file_exists($chapterFile)) {
			exit();
		}

		$this->chapterInfos = require $chapterFile; 
		$this->load->view('book_chapter', $this->frontController);
	}
	
	public function content()
	{
		$this->currentInfo = $this->_getInfoById();
		$chapter = $this->input->get('chapter');

		$chapterFile = $this->bookPath . 'luxun/' . $this->currentInfo['code'] . '.php';
		if (!file_exists($chapterFile)) {
			exit();
		}

		$this->chapterInfos = require $chapterFile;
		$this->currentChapter = $this->chapterInfos[$chapter]; 

		$contentFile = $this->bookPath . 'luxun/' . $this->currentInfo['code'] . '/' . $chapter . '.txt'; 
		$this->content = file_get_contents($contentFile);

		$this->load->view('book_content', $this->frontController);
	}

	public function show()
	{
		$this->currentInfo = $this->_getInfoById(); 
		$this->load->view('book_show', $this->frontController);
	}
}