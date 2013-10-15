<?php
if (! defined ( 'BASEPATH' )) exit ( 'No direct script access allowed' );

require dirname(__FILE__) . '/index.php';

/**
 * 神仙道官网
 */
class Taomi extends Index
{
	public function __construct()
	{
		parent::__construct ();

		$this->currentWebgameInfo = $this->webgameInfos['nova'];
		$this->templatePre = $this->templateListPre = $this->templateShowPre = 'taomi/';
	}
}