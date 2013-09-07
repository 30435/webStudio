<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once dirname(__FILE__) . '/YeepayBase.php';

class yeepay extends YeepayBase
{
    public function __construct($params)
    {
    	parent::__construct($params);

    	$this->returnParams = array(
    		array('key' => 'r0_Cmd', 'name' => '辅助参数1', 'value' => 'p0_Cmd'),
    		array('key' => 'r1_Code', 'name' => '交易结果,1成功,-1失败', 'value' => ''),
    		array('key' => 'r2_TrxId', 'name' => '辅助参数2', 'value' => ''),
    		array('key' => 'r3_Amt', 'name' => '订单金额', 'value' => 'p3_Amt'),
    		array('key' => 'r4_Cur', 'name' => '订单货币单位', 'value' => 'p4_Cur'),
    		array('key' => 'r5_Pid', 'name' => '产品ID', 'value' => 'p5_Pid'),
    		array('key' => 'r6_Order', 'name' => '订单ID', 'value' => 'p2_Order'),
    		array('key' => 'r7_Uid', 'name' => '辅助参数3', 'value' => ''),
    		array('key' => 'r8_MP', 'name' => '商户私有参数', 'value' => 'pa_MP'),
    		array('key' => 'r9_BType', 'name' => '订单ID', 'value' => ''),
    		array('key' => 'hmac', 'name' => '安全加密串', 'value' => 'hmac', 'noKeyData' => true),
    	);

    }

    public function getButton($orderInfo)
    {
    	//$galleryCode = $orderInfo['galleryCode'];
    	$frpId = '';
    	if (!empty($galleryCode)) {
    		//$frpId = $this->_getGalleryCode($galleryCode);
    	}
    	$sentParams = array(
			array('key' => 'p0_Cmd', 'value' => 'Buy'), // 业务类型
    		array('key' => 'p1_MerId', 'value' => $this->configInfo['account']), // 商户编号
			array('key' => 'p2_Order', 'value' => $orderInfo['orderid']), // 订单ID
			array('key' => 'p3_Amt', 'value' => $orderInfo['money']), // 支付金额
			array('key' => 'p4_Cur', 'value' => 'CNY'), // 交易币种
			array('key' => 'p5_Pid', 'value' => ''), // 商品名称
			array('key' => 'p6_Pcat', 'value' => ''), // 商品分类
			array('key' => 'p7_Pdesc', 'value' => ''), // 商品描述
			array('key' => 'p8_Url', 'value' => $this->paymentInfo['returnUrl']), // 接收支付成功数据的地址
			array('key' => 'p9_SAF', 'value' => '0'), // 送货地址标识
			array('key' => 'pa_MP', 'value' => ''), // 商户扩展信息
    		array('key' => 'pd_FrpId', 'value' => $frpId), // 支付通道编码
    		array('key' => 'pr_NeedResponse', 'value' => ''), // 是否需要应答机制
    	);

    	$signStr = '';
    	$buttonStr = "\n<form name='sendForm' id='sendForm' action='$this->sentApiUrl' method='post' target='_blank'>\n";
    	foreach ($sentParams as $param) {
    		$key = $param['key'];
    		$value = $param['value'];
    		$signStr .= $value;
    		$buttonStr .= "<input type='hidden' name='$key' value='$value'>\n";
    		
    	}
    	$sign = $this->secretKey($signStr);
    	$buttonStr .= "<input type='hidden' name='hmac' value='$sign' />";

    	return $buttonStr;
    }    
    
    public function respond()
    {
    	$returnInfos = array();
    	$signStr = '';
    	foreach ($this->returnParams as $param) {
    		$key = $param['key'];
    		$value = $_REQUEST[$key];
    		$returnInfos[$key] = $value;
    	    if (!isset($param['noKeyData']) || !$param['noKeyData']) {
    			$signStr .= $value;
    		}
    	}

    	$secret = $returnInfos['hmac'];
    	$signStr = $this->configInfo['account'] . $signStr;
    	$mySecret = $this->secretKey($signStr);

		$orderInfo = array(
			'orderid_plat' => $returnInfos['r2_TrxId'],
			'orderid' => $returnInfos['r6_Order'],
			'payment_code' => $this->paymentInfo['code'],
			'money_valid_middle' => $returnInfos['r3_Amt'],
			'account_time_valid' => $this->time,
			'account_data' => serialize($_REQUEST),
		);

        //if (strtoupper($secret) == strtoupper($mySecret) && $returnInfos['r1_Code'] == 1) {
			$resultOrderInfo = $this->operatePay($orderInfo);
			return $resultOrderInfo;
    	//} else {
    		//$this->writeLog($orderInfo);
    		//return false;
    	//}
    }
    
    public function secretKey($data)
    {
    	$key = $this->configInfo['key'];
        $key  = iconv('GB2312', 'UTF-8', $key);
        $data = iconv('GB2312', 'UTF-8', $data);

        $b = 64; // byte length for md5
        if (strlen($key) > $b) {
            $key = pack('H*', md5($key));
        }

        $key    = str_pad($key, $b, chr(0x00));
        $ipad   = str_pad('', $b, chr(0x36));
        $opad   = str_pad('', $b, chr(0x5c));
        $k_ipad = $key ^ $ipad ;
        $k_opad = $key ^ $opad;

        return md5($k_opad . pack('H*', md5($k_ipad . $data)));
    }
}
?>