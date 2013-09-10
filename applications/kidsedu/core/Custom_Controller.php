<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once BASEPATH_EXT . 'cms/BaseController.php';

class Custom_Controller extends Base_Controller
{
	public function __construct()
	{
		parent::__construct();

		//$this->webgameInfos = $this->_getWebgameInfos();
		$this->frontController = array('controller' => $this);
	}

	/**
     * Get the category infos
     *
     * @return array the category Infos
     */
    protected function _getCategoryInfos($parentid = 0, $getAll = false)
    {
		$this->_loadModel(APPCODE, 'categoryModel');
        $categoryInfos = $this->categoryModel->getAllInfos('', $keyField = 'id');

    	return $categoryInfos;
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