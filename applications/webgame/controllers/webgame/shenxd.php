<?php
if (! defined ( 'BASEPATH' )) exit ( 'No direct script access allowed' );

require dirname(dirname(__FILE__)) . '/index.php';

/**
 * 神仙道官网
 */
class shenxd extends Index
{
	public function __construct() {
		parent::__construct ();

		$this->templatePre = 'shenxd/';
	}
}