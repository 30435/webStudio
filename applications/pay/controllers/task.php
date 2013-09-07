<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Task extends Custom_Controller
{
	/**
	 * Initial the controller
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();

		foreach ($this->taskInfos as $code => $taskInfo) {
			if ($taskInfo['status'] != '1' && !in_array($this->loginedUserInfo['username'], $this->testUsers)) {
				unset($this->taskInfos[$code]);
			}
		}
	}
	
	/**
	 * End of task
	 * 
	 * @return void
	 */
	public function taskpay()
	{
		$tastResult = array('result' => 'no', 'coinNum' => 0);
		$taskCode = 'taskpay';
		$orderid = $this->input->get('orderid');
		$taskPayInfos = array();
		foreach ($this->taskInfos as $taskKey => $taskValue) {
			if ($taskValue['reward_type'] != 'taskpay' || empty($taskValue['webgame_code']) || empty($taskValue['serverid']) || $taskValue['coin_num'] <= 0
				 || $taskValue['rate'] <= 0 || ($this->time < $taskValue['time_start'] || $this->time > $taskValue['time_end'])) {
				continue ;
			}

			$taskPayInfos[$taskKey] = $taskValue;
		}
		if (empty($orderid) || empty($taskPayInfos)) {
			echo $this->_jsonp($tastResult);
			exit() ;
		}

		$query = $this->currentDb->get_where('pay', array('orderid' => $orderid));
		$payInfo = $query->row_array();
		if (empty($payInfo)) {
			echo $this->_jsonp($tastResult);
			exit() ;
		}
		
		$query = $this->currentDb->get_where('reward', array('orderid_pay' => $orderid));
		$rewardInfo = $query->row_array();
		if (!empty($rewardInfo)) {
			echo $this->_jsonp($tastResult);
			exit() ;
		}
		
		$rewardMoney = 0;
		$taskCodeStr = '';
		foreach ($taskPayInfos as $taskKey => $taskInfo) {
			if ($payInfo['money'] < $taskInfo['coin_num'] || ($payInfo['webgame_code'] != $taskInfo['webgame_code']) || ($payInfo['serverid'] != $taskInfo['serverid'])) {
				continue ;
			}

			$rewardMoney += $payInfo['money'] * $taskInfo['rate']; 
			$taskCodeStr .= $taskKey . ','; 
		}
		
		if ($rewardMoney <= 0) {
			echo $this->_jsonp($tastResult);
			exit() ;
		}
		
		$rewardInfo = $payInfo;
		unset($rewardInfo['pay_time']);
		unset($rewardInfo['day']);
		unset($rewardInfo['id']);
		unset($rewardInfo['orderid_plat']);
		unset($rewardInfo['get_username']);
		unset($rewardInfo['get_userid']);
		unset($rewardInfo['cps_user']);
		$rewardInfo['task_code'] = trim($taskCodeStr, ',');
		$rewardInfo['orderid_pay'] = $payInfo['orderid'];
		$rewardInfo['orderid'] = $this->_getOrderId();
		$rewardInfo['charge_time'] = $this->time;
		$rewardInfo['money'] = $rewardMoney;
		
		$this->currentDb->insert('reward', $rewardInfo);
		
		$tableMember = 'member';
		$query = $this->currentDb->get_where($tableMember, array('username' => $payInfo['username']));
		$oldInfo = $query->row_array();
		
		$data = array(
				'money' => $oldInfo['money'] + $rewardMoney,
				'lasttime_reward' => $this->time,
				'reward_times' => $oldInfo['reward_times'] + 1,
				'reward_money' => $oldInfo['reward_money'] + $rewardMoney,
		);
		
		$this->currentDb->where('username', $payInfo['username']);
		$this->currentDb->update($tableMember, $data);
		
		$tastResult = array('result' => 'yes', 'coinNum' => $rewardMoney);
		echo $this->_jsonp($tastResult);
		exit() ;
	}
}