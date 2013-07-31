<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Custom_Controller extends CommonController
{
	public function __construct()
	{
		parent::__construct();


		$this->load->model('memberModel');
		$this->fieldInfos = $this->memberModel->fieldInfos;

        $this->metaInfos = array(
			array('name' => 'robots', 'content' => 'no-cache'),
			array('name' => 'description', 'content' => 'passport description'),
			array('name' => 'keywords', 'content' => 'passport keywords'),
			array('name' => 'Content-type', 'content' => 'text/html; charset=utf-8', 'type' => 'equiv')
		);
        $this->headerTitle = 'passport title';
		$this->currentActive = 'passport';

		$this->settings = $this->_getSettings();
		require APPPATH . 'uc_client/' . 'config.php';
		require_once APPPATH . 'uc_client/' . 'client.php';

        $this->urlForward = $this->baseUrl;
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->loginedUserInfo = $this->_checkUserLogin();
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