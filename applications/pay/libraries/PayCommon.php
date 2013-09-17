<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class PayCommon
{
    public function __construct($params)
    {
    	$this->frontController = $params['frontController'];
    	$this->paymentInfo = $params['paymentInfo'];
    	$this->time = time();

    	//加载配置文件
   		$configFile = dirname(__FILE__) . '/config/' . strtolower($this->paymentInfo['code']) . '.php';
		$this->configInfo = require $configFile;
		if (!is_array($this->configInfo) || empty($this->configInfo)) {
			return false;
		}
    }

    public function getPayButton($orderInfo)
    {
    	$buttonStr = $this->getButton($orderInfo);
    	$javascriptStr = 'javascript: confirmPay();void(0);';
    	$returnButton = '<a href="javascript: art.dialog.list[\'payWindow123\'].close();void(0);" class="modification_btn mt15"></a>';
    	$buttonStr .= "<input type='submit' onclick='javascript: confirmPay();' value='确定' class='affirm_btn' id='confirmPayButton' style='border:none;cursor:pointer;' />{$returnButton}</form>";

    	return $buttonStr;
    }

	protected function operatePay($returnInfo)
	{
		date_default_timezone_set("PRC");

		if (empty($returnInfo)) {
			return false;
		}

		$where = array('orderid =' => $returnInfo['orderid']);
		$this->frontController->_loadModel('pay', 'accountModel');
		$orderInfo = $this->frontController->accountModel->getInfo($where);

		if (empty($orderInfo)) {
			$returnInfo['status'] = '3';
			$this->frontController->accountModel->addInfo($returnInfo);
		} else {
			//$orderStatus = $orderInfo['status'];
			//$getUserInfo = $this->validUserid($orderInfo['userid']);

			if ($orderInfo['status'] == '0') {// && !empty($getUserInfo)) {
				$returnInfo['status'] = '1';
				$returnInfo['money_valid'] = $returnInfo['money_valid_middle'] * (1 - $orderInfo['payment_rate']);

				$this->frontController->accountModel->editInfo($returnInfo, $where);
				$this->_updateUserMoney($returnInfo['money_valid'], $returnInfo['money_valid_middle'], $orderInfo['username'], $orderInfo['userid']);
			} else {
				$returnInfo['status'] = '4';
				$this->frontController->_loadModel('pay', 'account_unusualModel');
				$this->frontController->account_unusualModel->addInfo($returnInfo);
			}
		}

		return array_merge($orderInfo, $returnInfo);
	}

	protected function writeLog($orderInfo)
	{
		$orderInfo['status'] = '2';
		$this->frontController->_loadModel('pay', 'account_unusualModel');
		$infos = $this->frontController->account_unusualModel->addInfo($orderInfo);
	}

	protected function _updateUserMoney($money, $moneyMiddle, $username, $userid)
	{
		$money = (double) $money;
		$moneyMiddle = (double) $moneyMiddle;
		if ($money <= 0)  {
			return ;
		}

		$moneyInfo = $this->frontController->_getMoneyInfo($username);

		$data = array(
			'money' => isset($moneyInfo['money']) ? $moneyInfo['money'] + $money : $money,
			'valid_money_middle' => isset($moneyInfo['valid_money_middle']) ? $moneyInfo['valid_money_middle'] + $moneyMiddle : $moneyMiddle,
			'valid_money' => isset($moneyInfo['valid_money']) ? $moneyInfo['valid_money'] + $money : $money,
			'valid_times' => isset($moneyInfo['valid_times']) ? $moneyInfo['valid_times'] + 1 : 1,
			'lasttime_account' => $this->time,				
		);
		if (empty($moneyInfo)) {
			$data['username'] = $username;
			$data['userid'] = $getuserid;

			$this->member_payModel->addInfo($data);
		} else {
			$where = array('username =' => $username);
			$this->frontController->member_payModel->editInfo($data, $where);
		}
	}
}

?>