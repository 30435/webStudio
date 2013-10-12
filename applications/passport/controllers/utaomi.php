<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once dirname(__FILE__) . '/indexBase.php';
class Utaomi extends IndexBase
{
	public function __construct()
	{
		$this->prefix = 'utaomi';
		parent::__construct();
	}
}