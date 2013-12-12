<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once __DIR__ . '/statCommon.php';
class StatLog4 extends StatCommon
{
	public function __construct()
	{
		parent::__construct();

		$table = $this->input->get_post('table');
		$this->table = empty($table) ? $this->controllerTables[$this->controller][0] : $table;
	}

	public function restorepet()
	{
		$initResult = $this->initExt();
		if (empty($initResult)) {
			return ;
		}

		$sql = "SELECT SUM(`restorepetnum`) AS `nums` FROM `{$this->table}` WHERE {$this->where}";
		$nums = $this->getNums($sql);
		$loginedNums = $this->getLoginedNums(); 
		$rate = $loginedNums > 0 ? $nums / $loginedNums : 0;
	
		//$resultInfos = $this->getExtInfo('restorepetnum');
		$extInfos[] = array('key' => '恢复次数', 'value' => $nums);
		$extInfos[] = array('key' => '登陆人数', 'value' => $loginedNums);
		$extInfos[] = array('key' => '恢复比率', 'value' => $rate);

		$this->showExtInfo($extInfos);
	}

	public function seizepet()
	{
		$initResult = $this->initExt();
		if (empty($initResult)) {
			return ;
		}

		$extType = $this->input->get_post('extType');
		$petId = $this->input->get_post('id'); 
		$petStr = $extWhere = '';
		if ($extType == 2 && !empty($petId)) {
			$this->where .= " AND `id` = {$petId}"; 
			$extInfos[] = array('key' => '宠物id', 'value' => $petId);
		}

		$sql = "SELECT SUM(`seizepetcount`) AS `nums` FROM `{$this->table}` WHERE {$this->where}"; 
		$nums = $this->getNums($sql);
		$loginedNums = $this->getLoginedNums(); 
		$rate = $loginedNums > 0 ? $nums / $loginedNums : 0;

		//$resultInfos = $this->getExtInfo('seizepetcount', $extWhere);
		$extInfos[] = array('key' => '捕捉宠物数', 'value' => $nums);
		$extInfos[] = array('key' => '登陆人数', 'value' => $loginedNums);
		$extInfos[] = array('key' => '平均捕捉数量', 'value' => $rate);

		$this->showExtInfo($extInfos);
	}

	public function useitem()
	{
		$initResult = $this->initExt();
		if (empty($initResult)) {
			return ;
		}

		$loginedNums = $this->getLoginedNums(); 

		$where1 = $this->where . " AND `itemid` >= 12010001 AND `itemid` <= 12010005";
		$sql1 = "SELECT avg(`count`) AS `nums` FROM (SELECT COUNT(`itemid`) AS `count` FROM `useitem` WHERE {$where1} GROUP BY `itemid`) AS `middleTable`";
		$nums1 = $this->getNums($sql1);

		$where2 = $this->where . " AND `itemid` >= 12040001 AND `itemid` <= 12040005";
		$sql2 = "SELECT avg(`count`) AS `nums` FROM (SELECT COUNT(`itemid`) AS `count` FROM `useitem` WHERE {$where1} GROUP BY `itemid`) AS `middleTable`";
		$nums2 = $this->getNums($sql2);

		$where3 = $this->where . " AND `itemid` >= 12060001 AND `itemid` < 12060005";
		$sql3 = "SELECT avg(`count`) AS `nums` FROM (SELECT COUNT(`itemid`) AS `count` FROM `useitem` WHERE {$where1} GROUP BY `itemid`) AS `middleTable`";
		$nums3 = $this->getNums($sql3);

		$where4 = $this->where . " AND `itemid` >= 12090001 AND `itemid` < 12090007";
		$sql4 = "SELECT avg(`count`) AS `nums` FROM (SELECT COUNT(`itemid`) AS `count` FROM `useitem` WHERE {$where1} GROUP BY `itemid`) AS `middleTable`";
		$nums4 = $this->getNums($sql4);

		$where5 = $this->where . " AND `itemid` >= 12110001 AND `itemid` < 12110007";
		$sql5 = "SELECT avg(`count`) AS `nums` FROM (SELECT COUNT(`itemid`) AS `count` FROM `useitem` WHERE {$where1} GROUP BY `itemid`) AS `middleTable`";
		$nums5 = $this->getNums($sql5);

		$where6 = $this->where . " AND `itemid` >= 12050001 AND `itemid` < 12050008";
		$sql6 = "SELECT avg(`count`) AS `nums` FROM (SELECT COUNT(`itemid`) AS `count` FROM `useitem` WHERE {$where1} GROUP BY `itemid`) AS `middleTable`";
		$nums6 = $this->getNums($sql6);

		$extInfos[] = array('key' => '登陆人数', 'value' => $loginedNums);
		$extInfos[] = array('key' => '补给类道具使用量', 'value' => $nums1 . '---' .  ($nums1 / $loginedNums));
		$extInfos[] = array('key' => '捕捉类道具使用量', 'value' => $nums2 . '---' . ($nums2 / $loginedNums));
		$extInfos[] = array('key' => '经验类道具使用量', 'value' => $nums3 . '---' . ($nums3 / $loginedNums));
		$extInfos[] = array('key' => '学习类道具使用量', 'value' => $nums4 . '---' . ($nums4 / $loginedNums));
		$extInfos[] = array('key' => '个体值随机类道具使用量', 'value' => $nums5 . '---' . ($nums5 / $loginedNums));
		$extInfos[] = array('key' => '增益Buff类道具使用量', 'value' => $nums6 . '---' . ($nums6 / $loginedNums));

		$this->showExtInfo($extInfos);
	}

}