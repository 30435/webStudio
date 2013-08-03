<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Custom_Controller extends CommonController
{
	public function __construct()
	{
		parent::__construct();

        $this->metaInfos = array(
			array('name' => 'robots', 'content' => 'no-cache'),
			array('name' => 'description', 'content' => 'passport description'),
			array('name' => 'keywords', 'content' => 'passport keywords'),
			array('name' => 'Content-type', 'content' => 'text/html; charset=utf-8', 'type' => 'equiv')
		);
        $this->headerTitle = 'spider title';
		$this->currentActive = 'spider';
	}

	/**
	 * Get the settings of the passport application
	 *
	 * @return array the settings
	 */
	protected function _getSettings()
	{

	}
}

class Custom_AdminController extends AdminController
{
	public function __construct()
	{
		parent::__construct();
	}
}