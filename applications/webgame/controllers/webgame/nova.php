<?php
if (! defined ( 'BASEPATH' )) exit ( 'No direct script access allowed' );

require dirname(dirname(__FILE__)) . '/index.php';

/**
 * 神仙道官网
 */
class nova extends Index
{
	public function __construct()
	{
		parent::__construct ();

		$this->currentWebgameInfo = $this->webgameInfos['nova'];
		$this->templatePre = 'nova/';
	}

	public function novasub()
	{
		$this->load->view('nova/novasub', $this->frontController);
	}
}