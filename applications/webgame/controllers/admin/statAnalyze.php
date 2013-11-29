<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once __DIR__ . './statCommon.php';
class statAnalyze extends StatCommon
{
	public function __construct()
	{
		parent::__construct();
		$this->table = 'analyze_status';
	}
}