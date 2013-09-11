<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once dirname(__FILE__) . '/PayCommon.php';

class Myself extends PayCommon
{
    public function __construct($params)
    {
    	parent::__construct($params);
    }

   public function getButton($orderInfo)
   {
        $signmsgval = ''; // 生成加密签名串 请务必按照如下顺序和规则组成加密串！
    	$buttonStr = "\n<form name='kqPay' id='sendForm' action='{$this->pamentInfo['sendApi']}' method='post' target='_blank'>\n";
    	return $buttonStr;
    }

    public function respond()
    {
    	$returnInfos = array();
    	foreach ($this->returnParams as $param) {
    		$key = $param['key'];
    		$value = $_REQUEST[$key];
    		$returnInfos[$key] = $value;
    		if (!$param['noKeyData']) {
        		$merchant_signmsgval = $this->append_param($merchant_signmsgval, $key, $value);
    		}
        
    	}

    	$merchant_signmsgval = $this->append_param($merchant_signmsgval, 'key', $this->configInfo['key']);
        //$secret = md5($merchant_signmsgval);
    	$secret = $returnInfos['signMsg'];
    	$mySecret = md5($merchant_signmsgval);

		$orderInfo = array(
			'orderid_plat' => $returnInfos['dealId'], 
			'orderid' => $returnInfos['orderId'],
			'paycode' => $this->payCode,
			'true_money' => $returnInfos['payAmount'] / 100,
			'paytime' => $this->time,
			'paynote' => serialize($_REQUEST),
		);
    	if (strtoupper($secret) == strtoupper($mySecret) && ($returnInfos['payResult'] == 10 || $returnInfos['payResult'] == 00)) {
    		$resultOrderInfo = $this->operatePay($orderInfo);
			return $resultOrderInfo;
    	} else {
    		$this->writeLog($orderInfo);
    		return false;
    	}
    }

    protected function append_param($strs, $key, $val)
    {
        if ($strs != '') {
            if($key != '' && $val != '') {
                $strs .= '&' . $key . '=' . $val;
            }
        } else {
            if($val != '') {
                $strs = $key . '=' . $val;
            }
        }
        return $strs;
    }
}
?>