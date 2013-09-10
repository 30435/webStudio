<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once dirname(__FILE__) . '/WebgameCommon.php';

class Shenxd extends WebgameCommon
{
	/**
	 * Initial the webgame object
	 *
	 * @param  array $params
	 */
	public function __construct($params)
	{
		parent::__construct($params);


		//新手卡相关
		//$this->total_num=3000; //每服总数
		$this->server_limit=true; //是否限服务器

		//$this->username = urlencode($this->username);
	}

	/**
	 * Get the enter url of the webgame
	 *
	 * @return  string the enter url
	 */
	protected function _getPlayUrl($loginIp, $loginKey)
	{
		$hashStr = $this->username . '_' . $this->time . '_' . $loginKey;
		$hash = strtolower(md5($hashStr));
		$playUrl = $loginIp . '?user=' . $this->username . '&time=' . $this->time . '&hash=' . $hash;
		$playUrl .= empty($this->params['channel_code']) ? '' : '&source=' . $this->params['channel_code'];
		$playUrl .= empty($this->params['regdate']) ? '' : '&regdate=' . $this->params['regdate'];

		return $playUrl;
	}

	/**
	 * 充值接口
	 *
	 * @param unknown_type $orderInfo
	 */
	protected function _payGame($payIp, $payKey, $money, $orderId)
	{
		$gold = $money * $this->webgameInfo['coin_rate'];
		$domain = $this->serverInfo['extra_param'];
		$signStr = urlencode($this->username) . '_' . $gold . '_' . $orderId . '_' . $domain . '_' . $payKey;
		$sign = strtolower(md5($signStr));

		$payUrl = $payIp . '?user=' . urlencode($this->username) . '&gold=' . $gold . '&order=' . $orderId
			. '&domain=' . $domain . '&sign=' . $sign;
		$payResult = file_get_contents($payUrl);
		$payResult = $payResult == 1 ? true : false;

		return $payResult;
	}

	/**
	 * 测试账户是否创建游戏帐号
	 *
	 * @return void
	 */
	public function getServerUser()
	{
		$checkApi = 'http://api.sxd.xd.com/api/check_user.php';
		$checkKey = empty($this->configInfo['isCommon']) ? $this->configInfo[$this->serverInfo['id']]['keyCheck'] : $this->configInfo['commonKeyCheck'];

		$domain = $this->serverInfo['extra_param'];
		$hashStr = $this->username . '_' . $domain . '_' . $checkKey;
		$hash = md5($hashStr);

		$url = $checkApi . '?user=' . $this->username . '&domain=' . $domain . '&sign=' . $hash;
		$result = file_get_contents($url);
		$result = $result == 1 ? true : false;

		return $result;
	}

	/*******************************************新手卡相关***************************************/

	/**
	 * 生成新手卡
	 *
	 * @return string sign
	 */
	public function generate_card() {
		$user = (strlen($this->username)) >20 ? substr($this->username, 0,20) : $this->username;
		$domain =$this->serverInfo['extra_param'];
		$signStr = $user . '_'.$domain;
		$sign = strtolower(md5($signStr));
		return $sign;
	}

}
?>