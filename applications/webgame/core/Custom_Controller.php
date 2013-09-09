<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once BASEPATH_EXT . 'cms/BaseController.php';

class Custom_Controller extends Base_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->webgameInfos = $this->_getWebgameInfos();
		$this->frontController = array('controller' => $this);
	}
}

require_once BASEPATH_EXT . 'cms/BaseAdminController.php';
class Custom_AdminController extends Base_AdminController
{
	public function __construct()
	{
		parent::__construct();
	}
}