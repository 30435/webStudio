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

	public function composepet()
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
			$extInfos[] = array('key' => '宠物id', 'value' => $petId);
		}

		$sql = "SELECT COUNT(DISTINCT(`guid`)) AS `nums` FROM `{$this->table}` WHERE {$this->where}"; 
		$nums = $this->getNums($sql);
		$loginedNums = $this->getLoginedNums(); 
		$rate = $loginedNums > 0 ? $nums / $loginedNums : 0;

		$extInfos[] = array('key' => '宠物合成人数', 'value' => $nums);
		$extInfos[] = array('key' => '登陆人数', 'value' => $loginedNums);
		$extInfos[] = array('key' => '功能使用比率', 'value' => $rate);

		$this->showExtInfo($extInfos);
	}

	public function copybabel()
	{
		$initResult = $this->initExt();
		if (empty($initResult)) {
			return ;
		}

		$extType = $this->input->get_post('extType');
		$petStr = $extWhere = '';
		if ($extType == 2) {
			$where1 = $this->where . " AND `floor` >= 1 AND `floor` <= 10";
			$sql1 = "SELECT COUNT(DISTINCT(`guid`)) AS `nums` FROM `{$this->table}` WHERE {$where1}"; 
			$nums1 = $this->getNums($sql1);

			$where2 = $this->where . " AND `floor` >= 11 AND `floor` <= 20";
			$sql2 = "SELECT COUNT(DISTINCT(`guid`)) AS `nums` FROM `{$this->table}` WHERE {$where2}"; 
			$nums2 = $this->getNums($sql2);

			$where3 = $this->where . " AND `floor` >= 21 AND `floor` <= 30";
			$sql3 = "SELECT COUNT(DISTINCT(`guid`)) AS `nums` FROM `{$this->table}` WHERE {$where3}"; 
			$nums3 = $this->getNums($sql3);

			$where4 = $this->where . " AND `floor` >= 31 AND `floor` <= 40";
			$sql4 = "SELECT COUNT(DISTINCT(`guid`)) AS `nums` FROM `{$this->table}` WHERE {$where4}"; 
			$nums4 = $this->getNums($sql4);

			$where5 = $this->where . " AND `floor` >= 41 AND `floor` <= 50";
			$sql5 = "SELECT COUNT(DISTINCT(`guid`)) AS `nums` FROM `{$this->table}` WHERE {$where5}"; 
			$nums5 = $this->getNums($sql5);

			$extInfos[] = array('key' => '完成1-10层挑战次人数', 'value' => $nums1);
			$extInfos[] = array('key' => '完成11-20层挑战次人数', 'value' => $nums2);
			$extInfos[] = array('key' => '完成21-30层挑战次人数', 'value' => $nums3);
			$extInfos[] = array('key' => '完成31-40层挑战次人数', 'value' => $nums4);
			$extInfos[] = array('key' => '完成41-50层挑战次人数', 'value' => $nums5);
		} else {
			$sql1 = "SELECT COUNT(DISTINCT(`guid`)) AS `nums` FROM `{$this->table}` WHERE {$this->where}"; 
			$nums1 = $this->getNums($sql1);

			$loginedNums = $this->getLoginedNums(); 
			$rate = $loginedNums > 0 ? $nums1 / $loginedNums : 0;

			$extInfos[] = array('key' => '登陆人数', 'value' => $loginedNums);
			$extInfos[] = array('key' => '未通天塔人数', 'value' => $loginedNums - $nums1);
			$extInfos[] = array('key' => '通天塔人数', 'value' => $nums1);
			$extInfos[] = array('key' => '通天塔使用率', 'value' => $rate);
		}

		$this->showExtInfo($extInfos);
	}

	public function createegg()
	{
		$initResult = $this->initExt();
		if (empty($initResult)) {
			return ;
		}

		$extType = $this->input->get_post('extType');
		$petStr = $extWhere = '';
		if ($extType == 2) {
			$where1 = $this->where . " AND `floor` >= 1 AND `floor` <= 10";
			$sql1 = "SELECT COUNT(DISTINCT(`guid`)) AS `nums` FROM `{$this->table}` WHERE {$where1}"; 
			$nums1 = $this->getNums($sql1);

			$where2 = $this->where . " AND `floor` >= 11 AND `floor` <= 20";
			$sql2 = "SELECT COUNT(DISTINCT(`guid`)) AS `nums` FROM `{$this->table}` WHERE {$where2}"; 
			$nums2 = $this->getNums($sql2);

			$where3 = $this->where . " AND `floor` >= 21 AND `floor` <= 30";
			$sql3 = "SELECT COUNT(DISTINCT(`guid`)) AS `nums` FROM `{$this->table}` WHERE {$where3}"; 
			$nums3 = $this->getNums($sql3);

			$where4 = $this->where . " AND `floor` >= 31 AND `floor` <= 40";
			$sql4 = "SELECT COUNT(DISTINCT(`guid`)) AS `nums` FROM `{$this->table}` WHERE {$where4}"; 
			$nums4 = $this->getNums($sql4);

			$where5 = $this->where . " AND `floor` >= 41 AND `floor` <= 50";
			$sql5 = "SELECT COUNT(DISTINCT(`guid`)) AS `nums` FROM `{$this->table}` WHERE {$where5}"; 
			$nums5 = $this->getNums($sql5);

			$extInfos[] = array('key' => '完成1-10层挑战次人数', 'value' => $nums1);
			$extInfos[] = array('key' => '完成11-20层挑战次人数', 'value' => $nums2);
			$extInfos[] = array('key' => '完成21-30层挑战次人数', 'value' => $nums3);
			$extInfos[] = array('key' => '完成31-40层挑战次人数', 'value' => $nums4);
			$extInfos[] = array('key' => '完成41-50层挑战次人数', 'value' => $nums5);
		} else {
			$sql1 = "SELECT COUNT(DISTINCT(`guid`)) AS `nums` FROM `{$this->table}` WHERE {$this->where}"; 
			$nums1 = $this->getNums($sql1);

			$loginedNums = $this->getLoginedNums(); 
			$rate = $loginedNums > 0 ? $nums1 / $loginedNums : 0;

			$extInfos[] = array('key' => '登陆人数', 'value' => $loginedNums);
			$extInfos[] = array('key' => '未通天塔人数', 'value' => $loginedNums - $nums1);
			$extInfos[] = array('key' => '通天塔人数', 'value' => $nums1);
			$extInfos[] = array('key' => '通天塔使用率', 'value' => $rate);
		}

		$this->showExtInfo($extInfos);
	}

	public function delicacyshop()
	{
		$initResult = $this->initExt();
		if (empty($initResult)) {
			return ;
		}

		$extType = $this->input->get_post('extType');
		$petStr = $extWhere = '';
		if ($extType == 2) {
			$where1 = $this->where . " AND `recipecookcount` = 1";
			$sql1 = "SELECT COUNT(DISTINCT(`guid`)) AS `nums` FROM `{$this->table}` WHERE {$where1}"; 
			$nums1 = $this->getNums($sql1);

			$where2 = $this->where . " AND `recipecookcount` >= 2";
			$sql2 = "SELECT COUNT(DISTINCT(`guid`)) AS `nums` FROM `{$this->table}` WHERE {$where2}"; 
			$nums2 = $this->getNums($sql2);

			$extInfos[] = array('key' => '美食活动1次人数', 'value' => $nums1);
			$extInfos[] = array('key' => '美食活动大于等于2次人数', 'value' => $nums2);
		} else {
			$sql1 = "SELECT COUNT(DISTINCT(`guid`)) AS `nums` FROM `{$this->table}` WHERE {$this->where}"; 
			$nums1 = $this->getNums($sql1);

			$loginedNums = $this->getLoginedNums(); 
			$rate = $loginedNums > 0 ? $nums1 / $loginedNums : 0;

			$extInfos[] = array('key' => '登陆人数', 'value' => $loginedNums);
			$extInfos[] = array('key' => '未美食活动人数', 'value' => $loginedNums - $nums1);
			$extInfos[] = array('key' => '美食活动人数', 'value' => $nums1);
			$extInfos[] = array('key' => '美食活动使用率', 'value' => $rate);
		}

		$this->showExtInfo($extInfos);
	}

	public function freepet()
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
			$extInfos[] = array('key' => '宠物id', 'value' => $petId);
		}

		$sql = "SELECT SUM(`freepetnum`) AS `nums` FROM `{$this->table}` WHERE {$this->where}"; 
		$nums = $this->getNums($sql);

		$sql2 = "SELECT COUNT(*) AS `nums` FROM `addnewpet` WHERE {$this->where}"; 
		$nums2 = $this->getNums($sql2);
		$rate = empty($nums2) ? 0 : $nums / $nums2;

		$extInfos[] = array('key' => '宠物释放总数', 'value' => $nums);
		$extInfos[] = array('key' => '宠物获得总数', 'value' => $nums2);
		$extInfos[] = array('key' => '功能使用比率', 'value' => $rate);

		$this->showExtInfo($extInfos);
	}

	public function getrubbish()
	{
		$initResult = $this->initExt();
		if (empty($initResult)) {
			return ;
		}

		$extType = $this->input->get_post('extType');
		$petStr = $extWhere = '';
		if ($extType == 2) {
			$where1 = $this->where . " AND `getrubbishnum` = 1";
			$sql1 = "SELECT COUNT(DISTINCT(`guid`)) AS `nums` FROM `{$this->table}` WHERE {$where1}"; 
			$nums1 = $this->getNums($sql1);

			$where2 = $this->where . " AND `getrubbishnum` = 2";
			$sql2 = "SELECT COUNT(DISTINCT(`guid`)) AS `nums` FROM `{$this->table}` WHERE {$where2}"; 
			$nums2 = $this->getNums($sql2);

			$where3 = $this->where . " AND `getrubbishnum` >= 3 AND `getrubbishnum` <= 5";
			$sql3 = "SELECT COUNT(DISTINCT(`guid`)) AS `nums` FROM `{$this->table}` WHERE {$where3}"; 
			$nums3 = $this->getNums($sql3);

			$where4 = $this->where . " AND `getrubbishnum` > 6";
			$sql4 = "SELECT COUNT(DISTINCT(`guid`)) AS `nums` FROM `{$this->table}` WHERE {$where4}"; 
			$nums4 = $this->getNums($sql4);

			$extInfos[] = array('key' => '捡垃圾1次人数', 'value' => $nums1);
			$extInfos[] = array('key' => '捡垃圾2次人数', 'value' => $nums2);
			$extInfos[] = array('key' => '捡垃圾大于等于3小于等于5次人数', 'value' => $nums3);
			$extInfos[] = array('key' => '捡垃圾6次以上人数', 'value' => $nums4);
		} else {
			$sql1 = "SELECT COUNT(DISTINCT(`guid`)) AS `nums` FROM `{$this->table}` WHERE {$this->where}"; 
			$nums1 = $this->getNums($sql1);

			$loginedNums = $this->getLoginedNums(); 
			$rate = $loginedNums > 0 ? $nums1 / $loginedNums : 0;

			$extInfos[] = array('key' => '登陆人数', 'value' => $loginedNums);
			$extInfos[] = array('key' => '未捡垃圾人数', 'value' => $loginedNums - $nums1);
			$extInfos[] = array('key' => '捡垃圾人数', 'value' => $nums1);
			$extInfos[] = array('key' => '通天塔使用率', 'value' => $rate);
		}

		$this->showExtInfo($extInfos);
	}
}