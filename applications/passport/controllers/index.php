<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends Custom_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		header('Location:' . $this->appInfos['passport']['url'] . 'uwebgame/');
	}
}