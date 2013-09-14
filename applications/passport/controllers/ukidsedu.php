<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once dirname(__FILE__) . '/indexBase.php';
class Ukidsedu extends IndexBase
{
	public function __construct()
	{
		$this->prefix = 'ukidsedu';
		parent::__construct();
	}
}