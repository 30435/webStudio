<?php
if (! defined ( 'BASEPATH' )) exit ( 'No direct script access allowed' );

require dirname(dirname(__FILE__)) . '/index.php';

/**
 * 神仙道官网
 */
class nobao extends Index
{
	public function __construct()
	{
		parent::__construct ();

		$this->currentWebgameInfo = $this->webgameInfos['nobao'];
		$this->templatePre = 'nobao/';
	}

	public function novasub()
	{
		$this->load->view('nobao/novasub', $this->frontController);
	}
}