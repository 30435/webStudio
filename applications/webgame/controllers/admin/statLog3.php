<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once __DIR__ . './statCommon.php';
class StatLog3 extends StatCommon
{
	public function __construct()
	{
		parent::__construct();
		$this->table = empty($this->input->get_post('table')) ? $this->controllerTables[$this->controller][0] : $this->input->get_post('table');
	}
}
/**
	public function freepet()
	{
		$this->baseList();
	}

	public function gettrubbish()
	{
		$this->baseList();
	}

	public function invest()
	{
		$this->baseList();
	}

	public function mission()
	{
		$this->baseList();
	}

	public function openshop()
	{
		$this->baseList();
	}

	public function petevolution()
	{
		$this->baseList();
	}

	public function userdata()
	{
		$this->baseList();
	}
}*/