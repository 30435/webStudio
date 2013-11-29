<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once __DIR__ . './statCommon.php';
class StatLog2 extends StatCommon
{
	public function __construct()
	{
		parent::__construct();
		$this->table = empty($this->input->get_post('table')) ? $this->controllerTables[$this->controller][0] : $this->input->get_post('table');
	}
}
/**
	public function bosschallenge()
	{
		$this->baseList();
	}

	public function buyitem()
	{
		$this->baseList();
	}

	public function composepet()
	{
		$this->baseList();
	}

	public function copybabel()
	{
		$this->baseList();
	}

	public function createegg()
	{
		$this->baseList();
	}

	public function delecacyshop()
	{
		$this->baseList();
	}

	public function useitem()
	{
		$this->baseList();
	}
}*/