<?php
if (! defined ( 'BASEPATH' )) exit ( 'No direct script access allowed' );

require dirname(dirname(__FILE__)) . '/index.php';

/**
 * 神仙道官网
 */
class nobei extends Index
{
	public function __construct()
	{
		parent::__construct ();

		$this->currentWebgameInfo = $this->webgameInfos['nobei'];
		$this->templatePre = 'nobei/';
	}

	public function novasub()
	{
		$this->load->view('nobei/novasub', $this->frontController);
	}
}