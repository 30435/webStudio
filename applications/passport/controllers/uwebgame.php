<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once dirname(__FILE__) . '/indexBase.php';
class Uwebgame extends IndexBase
{
	public function __construct()
	{
		$this->prefix = 'uwebgame';
		parent::__construct();
	}

	public function index()
	{
		header('Location:' . $this->appInfos['pay']['url'] . 'index/mypayinfo');
	}
}