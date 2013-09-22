<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Custom_Controller extends CommonController
{
	public function __construct()
	{
		parent::__construct();

		$this->configPassportInfos = require $this->appInfos[APPCODE]['path'] . 'config/config_passport.php';

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

		require APPPATH . 'uc_client/' . 'config.php';
		require_once APPPATH . 'uc_client/' . 'client.php';

        //$this->urlForward = $this->baseUrl;
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->loginedUserInfo = $this->_checkUserLogin();
	}
	
	/**
	 * Get the username for register
	 *
	 * @return string 
	 */
	public function getUsername()
	{
		$username = date('d') . str_pad(mt_rand(1, 99999), 4, '0', STR_PAD_LEFT);
		return $username;
	}
}

class Custom_AdminController extends AdminController
{
	public function __construct()
	{
		parent::__construct();
	}
}