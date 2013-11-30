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

	public function invest()
	{
		$initResult = $this->initExt();
		if (empty($initResult)) {
			return ;
		}

		$extType = $this->input->get_post('extType');
		$petStr = $extWhere = '';
		if ($extType == 2) {
			$where1 = $this->where . " AND `investnum` = 1";
			$sql1 = "SELECT COUNT(DISTINCT(`guid`)) AS `nums` FROM `{$this->table}` WHERE {$where1}"; 
			$nums1 = $this->getNums($sql1);

			$where2 = $this->where . " AND `investnum` >= 2";
			$sql2 = "SELECT COUNT(DISTINCT(`guid`)) AS `nums` FROM `{$this->table}` WHERE {$where2}"; 
			$nums2 = $this->getNums($sql2);

			$extInfos[] = array('key' => '投资1次人数', 'value' => $nums1);
			$extInfos[] = array('key' => '投资大于等于2次人数', 'value' => $nums2);
		} else {
			$sql1 = "SELECT COUNT(DISTINCT(`guid`)) AS `nums` FROM `{$this->table}` WHERE {$this->where}"; 
			$nums1 = $this->getNums($sql1);

			$loginedNums = $this->getLoginedNums(); 
			$rate = $loginedNums > 0 ? $nums1 / $loginedNums : 0;

			$extInfos[] = array('key' => '登陆人数', 'value' => $loginedNums);
			$extInfos[] = array('key' => '未投资人数', 'value' => $loginedNums - $nums1);
			$extInfos[] = array('key' => '投资人数', 'value' => $nums1);
			$extInfos[] = array('key' => '投资使用率', 'value' => $rate);
		}

		$this->showExtInfo($extInfos);
	}

	public function openshop()
	{
		$initResult = $this->initExt();
		if (empty($initResult)) {
			return ;
		}

		$sql = "SELECT SUM(`openshopnum`) AS `nums` FROM `{$this->table}` WHERE {$this->where}";
		$nums = $this->getNums($sql);
		$loginedNums = $this->getLoginedNums(); 
		$rate = $loginedNums > 0 ? $nums / $loginedNums : 0;
	
		//$resultInfos = $this->getExtInfo('restorepetnum');
		$extInfos[] = array('key' => '商店打开次数', 'value' => $nums);
		$extInfos[] = array('key' => '登陆人数', 'value' => $loginedNums);
		$extInfos[] = array('key' => '商店使用比率', 'value' => $rate);

		$this->showExtInfo($extInfos);
	}

	public function petevolution()
	{
		$initResult = $this->initExt();
		if (empty($initResult)) {
			return ;
		}

		$sql = "SELECT COUNT(*) AS `nums` FROM `{$this->table}` WHERE {$this->where}";
		$nums = $this->getNums($sql);

		$sql2 = "SELECT MAX(`pet_all_count`) AS `nums` FROM `analyze_status`";
		$nums2 = $this->getNums($sql2);
		$rate = empty($nums2) ? 0 : $nums / $nums2;

		$extInfos[] = array('key' => '进化数据总量', 'value' => $nums);
		$extInfos[] = array('key' => '宠物总量', 'value' => $nums2);
		$extInfos[] = array('key' => '宠物进化比率', 'value' => $rate);

		$this->showExtInfo($extInfos);
	}

	public function petlevelup()
	{
		$initResult = $this->initExt();
		if (empty($initResult)) {
			return ;
		}

		$sql = "SELECT COUNT(*) AS `nums` FROM `{$this->table}` WHERE {$this->where}";
		$nums = $this->getNums($sql);

		$sql1 = "SELECT (AVG(`newpetlevel`) - AVG(`oldpetlevel`)) AS `nums` FROM `{$this->table}` WHERE {$this->where}";
		$nums1 = $this->getNums($sql1);

		$extInfos[] = array('key' => '宠物升级次数', 'value' => $nums);
		$extInfos[] = array('key' => '平均宠物提升等级', 'value' => $nums1);

		$this->showExtInfo($extInfos);
	}

	public function praybean()
	{
		$initResult = $this->initExt();
		if (empty($initResult)) {
			return ;
		}
		
		$this->where .= " AND `praycount` = 1";
		$sql = "SELECT COUNT(DISTINCT(`guid`)) AS `nums` FROM `{$this->table}` WHERE {$this->where}";
		$nums = $this->getNums($sql);
		$loginedNums = $this->getLoginedNums(); 
		$rate = $loginedNums > 0 ? $nums / $loginedNums : 0;
	
		//$resultInfos = $this->getExtInfo('restorepetnum');
		$extInfos[] = array('key' => '许愿人数', 'value' => $nums);
		$extInfos[] = array('key' => '登陆人数', 'value' => $loginedNums);
		$extInfos[] = array('key' => '使用比率', 'value' => $rate);

		$this->showExtInfo($extInfos);
	}

	public function question()
	{
		$initResult = $this->initExt();
		if (empty($initResult)) {
			return ;
		}
		
		$sql = "SELECT COUNT(DISTINCT(`guid`)) AS `nums` FROM `{$this->table}` WHERE {$this->where}";
		$nums = $this->getNums($sql);
		$loginedNums = $this->getLoginedNums(); 
		$rate = $loginedNums > 0 ? $nums / $loginedNums : 0;
	
		//$resultInfos = $this->getExtInfo('restorepetnum');
		$extInfos[] = array('key' => '答题人数', 'value' => $nums);
		$extInfos[] = array('key' => '登陆人数', 'value' => $loginedNums);
		$extInfos[] = array('key' => '使用比率', 'value' => $rate);

		$this->showExtInfo($extInfos);
	}
}