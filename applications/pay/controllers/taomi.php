<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once dirname(__FILE__) . '/index.php';
class Taomi extends Index
{
	/**
	 * Initial the controller
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();

		$this->prefix = 'taomi/'; 
	}
}