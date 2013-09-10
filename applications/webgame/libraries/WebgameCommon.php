<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class WebgameCommon
{
	/**
	 * Intial the webgame
	 *
	 * @param  array $params include the userid, webgame info and server info
	 */
	public function __construct($params)
	{
		$this->userid = (isset($params['get_userid']) && !empty($params['get_userid'])) ? $params['get_userid'] : $params['userid'];
		$this->username = (isset($params['get_username']) && !empty($params['get_username'])) ? $params['get_username'] : $params['username'];
		if (empty($this->username)) {
			return false;
		}

		$this->webgameInfo = $params['webgameInfo'];
		$this->serverInfo = $params['serverInfo'];
		if (!is_array($this->webgameInfo) || empty($this->webgameInfo) || !is_array($this->serverInfo) || empty($this->serverInfo)) {

			return false;
		}


		$configFile = dirname(__FILE__) . '/config/' . strtolower($this->webgameInfo['code']) . '.php';

		$this->configInfo = require $configFile;
		if (!is_array($this->configInfo) || empty($this->configInfo)){
			return false;
		}
		$this->params = $params;
		$this->time = time();


		//新手卡相关
		//$this->total_num=3000; //每服新手卡总数
		$this->type_limit=false; //是否限制卡的类型
		$this->is_import=false; // 是否是导入的类型
		$this->server_limit=true; //是否限服务器
		$this->card_types= array('a'=>'新手卡');
	}

	/**
	 * Check the server status, get the enter url of the webgame, static the operation
	 *
	 * @return  false | string if status of the server is empty return false, else return the enter url
	 */
	public function getPlayUrl()
	{
		$loginIp = rtrim($this->configInfo['enter_login'], '/');
		$loginKey = empty($this->configInfo['isCommon']) ? $this->configInfo[$this->serverInfo['id']]['keyLogin'] : $this->configInfo['commonKeyLogin'];
		$playUrl = $this->_getPlayUrl($loginIp, $loginKey);

		return $playUrl;
	}

	/**
	 * 充值接口
	 *
	 * @param unknown_type $orderInfo
	 */
	public function payGame()
	{
		$payIp = trim($this->serverInfo['enter_pay'], '/');
		$payKey = empty($this->configInfo['isCommon']) ? $this->configInfo[$this->serverInfo['id']]['keyPay'] : $this->configInfo['commonKeyPay'];

		$money = $this->params['money'];
		$orderId = $this->params['orderid'];
		if (empty($money) || empty($orderId)) {
			return false;
		}

		$payResult = $this->_payGame($payIp, $payKey, $money, $orderId);
		return $payResult;
	}

	/*******************************************新手卡相关***************************************/
	/**
	 * 生成新手卡
	 *
	 * @return string sign
	 */
	public function generate_card() {
		$sign = $this->userid.$this->serverInfo['id'];
		return $sign;
	}

	/**
	 * 新手卡类型
	 *
	 * @return array $type
	 */
	public function get_type(){
		$self_type=array();
		return array_merge($this->card_types,$self_type);
	}

	/**
	 * 返回查询条件
	 *
	 * @return array
	 */
	public function get_where_arr(){
		return array('serverid'=>$this->serverInfo['id'],'gamename'=>$this->webgameInfo['code'],'userid'=>$this->userid);
	}

}