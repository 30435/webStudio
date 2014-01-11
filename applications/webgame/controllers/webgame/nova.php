<?php
if (! defined ( 'BASEPATH' )) exit ( 'No direct script access allowed' );

require dirname(dirname(__FILE__)) . '/index.php';

/**
 * 诺瓦官网
 */
class nova extends Index
{
	public function __construct()
	{
		parent::__construct ();

		$this->currentWebgameInfo = $this->webgameInfos['nova'];
		//$stopWebgame = $this->stopWebgame();
		//$this->currentWebgameInfo['stop_webgame'] = $stopWebgame;
		
		$this->templatePre = 'newfront/';
	}

	public function indexnew()
	{
		$template = 'newfront/index';//isset($this->templatePre) ? $this->templatePre . 'index' : 'index';
		$this->load->view($template, $this->frontController);
	}

	public function categorynew()
	{
		$this->templateListPre = 'newfront/';
		parent::category();	
	}

	public function spiritnew()
	{
		$this->templateSpiritPre = 'newfront/';
		parent::spirit();
	}

	public function novaInfos()
	{
		$this->load->view('newfront/infos', $this->frontController);
	}
}
