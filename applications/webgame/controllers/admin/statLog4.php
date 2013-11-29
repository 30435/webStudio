<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once __DIR__ . './statCommon.php';
class StatLog4 extends StatCommon
{
	public function __construct()
	{
		parent::__construct();
		$this->table = empty($this->input->get_post('table')) ? $this->controllerTables[$this->controller][0] : $this->input->get_post('table');
	}

	public function restorepet()
	{
		$this->tableExt = true;
		
		$isExt = $this->input->get_post('isExt');
		if (empty($isExt)) {
			$this->baseList();
		} else {
			$this->extTime = $this->input->get_post('ext_time');
			$extTimeStamp = strtotime($this->extTime);
			$loginedNums = $this->currentModel->getloginNum($extTimeStamp);

			$extTimeStampEnd = $extTimeStamp + 86400;
			$where = "`time` >= {$extTimeStamp} AND `time` < {$extTimeStampEnd}";
			$extType = $this->input->get_post('extType');
			$petId = $this->input->get_post('id');
			if ($extType == 2 && !empty($petId)) {
				$where .= " AND `id` = {$petId}";
			}
			$getPetNums = $this->currentModel->currentDb->query("SELECT SUM(`seizepetcount`) AS `petnums` FROM `{$this->table}` WHERE {$where}");
			$petNums = $getPetNums->row_array(); 
			echo $loginedNums . '--' . $petNums['petnums']; 
		}
	}

	public function seizepet()
	{
		$this->tableExt = true;
		
		$isExt = $this->input->get_post('isExt');
		if (empty($isExt)) {
			$this->baseList();
		} else {
			$this->extTime = $this->input->get_post('ext_time');
			$extTimeStamp = strtotime($this->extTime);
			$loginedNums = $this->currentModel->getloginNum($extTimeStamp);

			$extTimeStampEnd = $extTimeStamp + 86400;
			$where = "`time` >= {$extTimeStamp} AND `time` < {$extTimeStampEnd}";
			$extType = $this->input->get_post('extType');
			$petId = $this->input->get_post('id');
			if ($extType == 2 && !empty($petId)) {
				$where .= " AND `id` = {$petId}";
			}
			$getPetNums = $this->currentModel->currentDb->query("SELECT SUM(`seizepetcount`) AS `petnums` FROM `{$this->table}` WHERE {$where}");
			$petNums = $getPetNums->row_array(); 
			echo $loginedNums . '--' . $petNums['petnums']; 
		}
	}
}