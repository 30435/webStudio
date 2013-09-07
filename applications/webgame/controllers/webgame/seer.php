<?php
if (! defined ( 'BASEPATH' )) exit ( 'No direct script access allowed' );

require dirname(dirname(__FILE__)) . '/index.php';

/**
 * 神仙道官网
 */
class seer extends Index
{
	public function __construct() 
	{
		parent::__construct ();
	}

	public function index()
	{
		$this->load->view('seer/seer1');
	}

	public function seer()
	{
		$this->load->view('seer/seer');
	}

}