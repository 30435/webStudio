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
		$where = array('aid_status' => 0);
		$userInfo = $this->memberModel->getInfo($where, 'aid_cre');

		$updateWhere = array('id' => $userInfo['id']);
		$data = array('aid_status' => '1');
		
		$this->memberModel->editInfo($data, $updateWhere, 'aid_cre');
		return $userInfo['aid'];
	}
}

class Custom_AdminController extends AdminController
{
	public function __construct()
	{
		parent::__construct();
	}
}