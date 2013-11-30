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

	public function addnewpet()
	{
		$initResult = $this->initExt();
		if (empty($initResult)) {
			return ;
		}

		$extType = $this->input->get_post('extType');
		$petId = $this->input->get_post('id'); 
		$petStr = $extWhere = '';
		if ($extType == 2 && !empty($petId)) {
			$this->where .= " AND `pettype` = {$petId}"; 
			$extInfos[] = array('key' => '指定宠物id', 'value' => $petId);
		}

		$sql = "SELECT COUNT(*) AS `nums` FROM `{$this->table}` WHERE {$this->where}"; 
		$nums = $this->getNums($sql);

		$extInfos[] = array('key' => '获得宠物数', 'value' => $nums);

		$this->showExtInfo($extInfos);
	}

	public function airport()
	{
		$initResult = $this->initExt();
		if (empty($initResult)) {
			return ;
		}

		$extType = $this->input->get_post('extType');
		$petStr = $extWhere = '';
		if ($extType == 2) {
			$where1 = $this->where . " AND `exploringcount` = 1";
			$sql1 = "SELECT COUNT(DISTINCT(`guid`)) AS `nums` FROM `{$this->table}` WHERE {$where1}"; 
			$nums1 = $this->getNums($sql1);

			$where2 = $this->where . " AND `exploringcount` = 2";
			$sql2 = "SELECT COUNT(DISTINCT(`guid`)) AS `nums` FROM `{$this->table}` WHERE {$where2}"; 
			$nums2 = $this->getNums($sql2);

			$where3 = $this->where . " AND `exploringcount` >= 3";
			$sql3 = "SELECT COUNT(DISTINCT(`guid`)) AS `nums` FROM `{$this->table}` WHERE {$where3}"; 
			$nums3 = $this->getNums($sql3);

			$extInfos[] = array('key' => '战斗小于等于5次人数', 'value' => $nums1);
			$extInfos[] = array('key' => '战斗大于5小于等于10次人数', 'value' => $nums2);
			$extInfos[] = array('key' => '战斗大于10次人数', 'value' => $nums3);
		} else {
			$sql = "SELECT COUNT(*) AS `nums` FROM `{$this->table}` WHERE {$this->where}"; 
			$nums = $this->getNums($sql);
			$loginedNums = $this->getLoginedNums(); 
			$rate = $loginedNums > 0 ? $nums / $loginedNums : 0;

			$extInfos[] = array('key' => '星空探索次数', 'value' => $nums);
			$extInfos[] = array('key' => '登陆人数', 'value' => $loginedNums);
			$extInfos[] = array('key' => '平均探索次数', 'value' => $rate);
		}

		$this->showExtInfo($extInfos);
	}

	public function battle()
	{
		$initResult = $this->initExt();
		if (empty($initResult)) {
			return ;
		}

		$extType = $this->input->get_post('extType');
		$petStr = $extWhere = '';
		if ($extType == 2) {
			$where1 = $this->where . " AND `battlecount` <= 5";
			$sql1 = "SELECT COUNT(DISTINCT(`guid`)) AS `nums` FROM `{$this->table}` WHERE {$where1}"; 
			$nums1 = $this->getNums($sql1);

			$where2 = $this->where . " AND `battlecount` > 5 AND `battlecount` <= 10";
			$sql2 = "SELECT COUNT(DISTINCT(`guid`)) AS `nums` FROM `{$this->table}` WHERE {$where2}"; 
			$nums2 = $this->getNums($sql2);

			$where3 = $this->where . " AND `battlecount` > 10";
			$sql3 = "SELECT COUNT(DISTINCT(`guid`)) AS `nums` FROM `{$this->table}` WHERE {$where3}"; 
			$nums3 = $this->getNums($sql3);

			$extInfos[] = array('key' => '探索1次人数', 'value' => $nums1);
			$extInfos[] = array('key' => '探索2次人数', 'value' => $nums2);
			$extInfos[] = array('key' => '探索3次及以上人数', 'value' => $nums3);
		} else {
			$sql = "SELECT SUM(`battlecount`) AS `nums` FROM `{$this->table}` WHERE {$this->where}"; 
			$nums = $this->getNums($sql);

			$sql1 = "SELECT COUNT(DISTINCT(`guid`)) AS `nums` FROM `{$this->table}` WHERE {$this->where}"; 
			$nums1 = $this->getNums($sql1);

			$loginedNums = $this->getLoginedNums(); 
			$rate = $loginedNums > 0 ? $nums / $loginedNums : 0;

			
			$extInfos[] = array('key' => '战斗人数', 'value' => $nums1);
			$extInfos[] = array('key' => '未战斗数', 'value' => $loginedNums - $nums1);
			$extInfos[] = array('key' => '登陆人数', 'value' => $loginedNums);

			$extInfos[] = array('key' => '战斗总数', 'value' => $nums);
			$extInfos[] = array('key' => '平均战斗数', 'value' => $rate);
		}

		$this->showExtInfo($extInfos);
	}

	public function blackhole()
	{
		$initResult = $this->initExt();
		if (empty($initResult)) {
			return ;
		}

		$extType = $this->input->get_post('extType');
		$petStr = $extWhere = '';
		if ($extType == 2) {
			$where1 = $this->where . " AND `blackholenum` = 1";
			$sql1 = "SELECT COUNT(DISTINCT(`guid`)) AS `nums` FROM `{$this->table}` WHERE {$where1}"; 
			$nums1 = $this->getNums($sql1);

			$where2 = $this->where . " AND `blackholenum` >= 2";
			$sql2 = "SELECT COUNT(DISTINCT(`guid`)) AS `nums` FROM `{$this->table}` WHERE {$where2}"; 
			$nums2 = $this->getNums($sql2);

			$extInfos[] = array('key' => '黑洞1次人数', 'value' => $nums1);
			$extInfos[] = array('key' => '黑洞大于等于2次人数', 'value' => $nums2);
		} else {
			$sql1 = "SELECT COUNT(DISTINCT(`guid`)) AS `nums` FROM `{$this->table}` WHERE {$this->where}"; 
			$nums1 = $this->getNums($sql1);

			$loginedNums = $this->getLoginedNums(); 
			$rate = $loginedNums > 0 ? $nums1 / $loginedNums : 0;

			$extInfos[] = array('key' => '登陆人数', 'value' => $loginedNums);
			$extInfos[] = array('key' => '未黑洞人数', 'value' => $loginedNums - $nums1);
			$extInfos[] = array('key' => '黑洞人数', 'value' => $nums1);
			$extInfos[] = array('key' => '黑洞使用率', 'value' => $rate);
		}

		$this->showExtInfo($extInfos);
	}

	public function bosschallenge()
	{
		$initResult = $this->initExt();
		if (empty($initResult)) {
			return ;
		}

		$extType = $this->input->get_post('extType');
		$petStr = $extWhere = '';
		if ($extType == 2) {
			$where1 = $this->where . " AND `bosschallengenum` = 1";
			$sql1 = "SELECT COUNT(DISTINCT(`guid`)) AS `nums` FROM `{$this->table}` WHERE {$where1}"; 
			$nums1 = $this->getNums($sql1);

			$where2 = $this->where . " AND `bosschallengenum` > 2";
			$sql2 = "SELECT COUNT(DISTINCT(`guid`)) AS `nums` FROM `{$this->table}` WHERE {$where2}"; 
			$nums2 = $this->getNums($sql2);

			$extInfos[] = array('key' => '星际挑战1次人数', 'value' => $nums1);
			$extInfos[] = array('key' => '星际挑战大于等于2次人数', 'value' => $nums2);
		} else {
			$sql1 = "SELECT COUNT(DISTINCT(`guid`)) AS `nums` FROM `{$this->table}` WHERE {$this->where}"; 
			$nums1 = $this->getNums($sql1);

			$loginedNums = $this->getLoginedNums(); 
			$rate = $loginedNums > 0 ? $nums1 / $loginedNums : 0;

			$extInfos[] = array('key' => '登陆人数', 'value' => $loginedNums);
			$extInfos[] = array('key' => '未星际挑战人数', 'value' => $loginedNums - $nums1);
			$extInfos[] = array('key' => '星际挑战人数', 'value' => $nums1);
			$extInfos[] = array('key' => '星际挑战使用率', 'value' => $rate);
		}

		$this->showExtInfo($extInfos);
	}
}