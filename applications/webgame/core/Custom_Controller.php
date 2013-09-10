<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once BASEPATH_EXT . 'cms/BaseController.php';

class Custom_Controller extends Base_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->webgameInfos = $this->_getWebgameInfos();
		$this->serverInfos = $this->_getServerInfos();
		$this->frontController = array('controller' => $this);
	}

	/**
	 * Get the server infos 
	 *
	 */
	protected function _getServerInfos()
	{
		$this->_loadModel('webgame', 'serverModel');
		$infos = $this->serverModel->getAllInfos('', 'id', array(), array(array('listorder', 'asc')));
		return $infos;
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