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
		$this->userid = $params['getUserInfo']['userid'];
		$this->username = $params['getUserInfo']['username'];
		if (empty($this->username)) {
			return false;
		}

		$this->webgameInfo = $params['webgameInfo'];
		$this->serverInfo = isset($params['serverInfo']) ? $params['serverInfo'] : array();
		if (empty($this->webgameInfo)) {
			return false;
		}
		if ($this->webgameInfo['type'] == 3 && empty($params['serverInfo'])) {
			return false;
		}

		$configFile = dirname(__FILE__) . '/config/' . strtolower($this->webgameInfo['code']) . '.php';

		$this->configInfo = require $configFile;
		if (!is_array($this->configInfo) || empty($this->configInfo)){
			return false;
		}
		$this->params = $params;
		$this->time = time();
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
		$payIp = trim($this->configInfo['enter_pay'], '/');
		$payKey = empty($this->configInfo['isCommon']) ? $this->configInfo[$this->serverInfo['id']]['keyPay'] : $this->configInfo['commonKeyPay'];

		$payResult = $this->_payGame($payIp, $payKey);
		return $payResult;
	}
}