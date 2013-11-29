<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once __DIR__ . './statCommon.php';
class StatLog1 extends StatCommon
{
	public function __construct()
	{
		parent::__construct();

		$this->table = empty($this->input->get_post('table')) ? $this->controllerTables[$this->controller][0] : $this->input->get_post('table');
	}
}
/**

	public function addachievement()
	{
		$this->baseList();
	}

	public function addnewpet()
	{
		$this->baseList();
	}

	public function addtitle()
	{
		$this->baseList();
	}

	public function airport()
	{
		$this->baseList();
	}

	public function battle()
	{
		$this->baseList();
	}

	public function blackhole()
	{
		$this->baseList();
	}
	
	public function seizepet()
	{
		$this->baseList();
	}
}*/