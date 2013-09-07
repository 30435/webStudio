<?php
if (! defined ( 'BASEPATH' )) exit ( 'No direct script access allowed' );

require dirname(dirname(__FILE__)) . '/index.php';

/**
 * 神仙道官网
 */
class nova extends Index
{
	public function __construct() {
		parent::__construct ();

		
	}

	public function index()
	{
		$this->load->view('nova/nova', $this->frontController);
	}

	public function novasub()
	{
		$this->load->view('nova/novasub', $this->frontController);
	}

	public function test()
	{
		echo 'ssssssss';
	}
}