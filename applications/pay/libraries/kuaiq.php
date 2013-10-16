<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once dirname(__FILE__) . '/PayCommon.php';

class Kuaiq extends PayCommon
{
	public function __construct($params)
    {
    	parent::__construct($params);

    	//$this->sentApiUrl = 'https://www.yeepay.com/app-merchant-proxy/node'; // Formal api url
    	$this->sentApiUrl = 'https://sandbox.99bill.com/gateway/recvMerchantInfoAction.htm'; // Test api url
    	//$this->sentApiUrl = 'http://pay.ci.com/paytest.php?code=yeepay';
    	

	function kq_ck_null($kq_va,$kq_na){if($kq_va == ""){return $kq_va="";}else{return $kq_va=$kq_na.'='.$kq_va.'&';}}



    	$this->returnParams = array(
    		array('key' => 'merchantAcctId', 'name' => '人民币网关账号', 'value' => ''), // 人民币网关账号，该账号为11位人民币网关商户编号+01,该值与提交时相同。
			array('key' => 'version', 'name' => '', 'value' => ''),  // 网关版本，固定值：v2.0,该值与提交时相同。
			array('key' => 'language', 'name' => '', 'value' => ''),  // 语言种类，1代表中文显示，2代表英文显示。默认为1,该值与提交时相同。
			array('key' => 'signType', 'name' => '', 'value' => ''), // 签名类型,该值为4，代表PKI加密方式,该值与提交时相同。
			array('key' => 'payType', 'name' => '', 'value' => ''), // 支付方式，一般为00，代表所有的支付方式。如果是银行直连商户，该值为10,该值与提交时相同。
			array('key' => 'bankId', 'name' => '', 'value' => ''), // 银行代码，如果payType为00，该值为空；如果payType为10,该值与提交时相同。
			array('key' => 'orderId', 'name' => '', 'value' => ''), // 商户订单号，,该值与提交时相同。
			array('key' => 'orderTime', 'name' => '', 'value' => ''), // 订单提交时间，格式：yyyyMMddHHmmss，如：20071117020101,该值与提交时相同。
			array('key' => 'orderAmount', 'name' => '', 'value' => ''), // 订单金额，金额以“分”为单位，商户测试以1分测试即可，切勿以大金额测试,该值与支付时相同。
			array('key' => 'dealId', 'name' => '', 'value' => ''), // 快钱交易号，商户每一笔交易都会在快钱生成一个交易号。
			array('key' => 'bankDealId', 'name' => '', 'value' => ''), // 银行交易号 ，快钱交易在银行支付时对应的交易号，如果不是通过银行卡支付，则为空
			array('key' => 'dealtime', 'name' => '', 'value' => ''), // 快钱交易时间，快钱对交易进行处理的时间,格式：yyyyMMddHHmmss，如：20071117020101
			array('key' => 'payAmount', 'name' => '', 'value' => ''), // 商户实际支付金额 以分为单位。比方10元，提交时金额应为1000。该金额代表商户快钱账户最终收到的金额。
			array('key' => 'fee', 'name' => '', 'value' => ''), // 费用，快钱收取商户的手续费，单位为分。
			array('key' => 'ext1', 'name' => '', 'value' => ''), // 扩展字段1，该值与提交时相同
			array('key' => 'ext2', 'name' => '', 'value' => ''), // 扩展字段2，该值与提交时相同。
			array('key' => 'payResult', 'name' => '', 'value' => ''), // 处理结果， 10支付成功，11 支付失败，00订单申请成功，01 订单申请失败
			array('key' => 'errcode', 'name' => '', 'value' => ''), // 错误代码 ，请参照《人民币网关接口文档》最后部分的详细解释。
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
			//
    		array('key' => 'inputCharset', 'value' => '1'), // 编码方式，1代表 UTF-8; 2 代表 GBK; 3代表 GB2312 默认为1,该参数必填。
			array('key' => 'pageUrl', 'value' => ''), // 接收支付结果的页面地址，该参数一般置为空即可
			array('key' => 'bgUrl', 'value' => $this->paymentInfo['returnUrl']), // 服务器接收支付结果的后台地址，该参数务必填写，不能为空
			array('key' => 'version', 'value' => 'v2.0'), // 网关版本，固定值：v2.0,该参数必填
			array('key' => 'language', 'value' => '1'), // 语言种类，1代表中文显示，2代表英文显示。默认为1,该参数必填
			array('key' => 'signType', 'value' => '4'), // 签名类型,该值为4，代表PKI加密方式,该参数必填
			array('key' => 'merchantAcctId', 'value' => '1001213884201'), // 人民币网关账号，该账号为11位人民币网关商户编号+01,该参数必填。
			array('key' => 'payerName', 'value' => ''), // 支付人姓名,可以为空
			array('key' => 'payerContactType', 'value' => ''), // 支付人联系类型，1 代表电子邮件方式；2 代表手机联系方式。可以为空
			array('key' => 'payerContact', 'value' => ''), // 支付人联系方式，与payerContactType设置对应，payerContactType为1，则填写邮箱地址；payerContactType为2，则填写手机号码。可以为空
			array('key' => 'orderId', 'value' => $orderInfo['orderid']), // 商户订单号，以下采用时间来定义订单号，商户可以根据自己订单号的定义规则来定义该值，不能为空
    		array('key' => 'orderAmount', 'value' => $orderInfo['money'] * 100), // 订单金额，金额以“分”为单位，商户测试以1分测试即可，切勿以大金额测试。该参数必填
			array('key' => 'orderTime', 'value' => date('YmdHis')), // 订单提交时间，格式：yyyyMMddHHmmss，如：20071117020101，不能为空
			array('key' => 'productname', 'value' => ''), // 商品名称，可以为空。
			array('key' => 'productNum', 'value' => ''), // 商品数量，可以为空。
			array('key' => 'productId', 'value' => ''), // 商品代码，可以为空。
			array('key' => 'productDesc', 'value' => ''), // 商品描述，可以为空。
			array('key' => 'ext1', 'value' => ''), // 扩展字段1，商户可以传递自己需要的参数，支付完快钱会原值返回，可以为空。
			array('key' => 'ext2', 'value' => ''), // 扩展字段2，商户可以传递自己需要的参数，支付完快钱会原值返回，可以为空。
			array('key' => 'payType', 'value' => '00'), // 支付方式，一般为00，代表所有的支付方式。如果是银行直连商户，该值为10，必填。
			array('key' => 'bankId', 'value' => ''), // 银行代码，如果payType为00，该值可以为空；如果payType为10，该值必须填写，具体请参考银行列表。
			array('key' => 'redoFlag', 'value' => 1), // 同一订单禁止重复提交标志，实物购物车填1，虚拟产品用0。1代表只能提交一次，0代表在支付不成功情况下可以再提交。可为空。
			array('key' => 'pid', 'value' => ''), // 快钱合作伙伴的帐户号，即商户编号，可为空。
			//array('key' => 'signMsg', 'value' => ''), // signMsg 签名字符串 不可空，生成加密签名串
    	);

    	$signStr = '';
    	$buttonStr = "\n<form name='kqPay' action='$this->sentApiUrl' method='post' target='_blank'>\n<input type='hidden' name='merchantAcctId' value='1001213884201' />"; //<form name='sendForm' id='sendForm' action='$this->sentApiUrl' method='post' target='_blank'>\n";
    	foreach ($sentParams as $param) {
    		$key = $param['key'];
    		$value = $param['value'];
    		$signStr .= $this->kq_ck_null($value, $key);
    		$buttonStr .= "<input type='hidden' name='$key' value='$value'>\n";
    		
    	}
		$signStr = substr($signStr, 0, strlen($signStr) - 1);
    	$sign = $this->secretKey($signStr);
    	$buttonStr .= "<input type='hidden' name='signMsg' value='$sign' />";

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
    	    $signStr .= $this->kq_ck_null($value, $key);
    	}

		$orderInfo = array(
			'orderid_plat' => $returnInfos['r2_TrxId'],
			'orderid' => $returnInfos['r6_Order'],
			'payment_code' => $this->paymentInfo['code'],
			'money_valid_middle' => $returnInfos['r3_Amt'],
			'account_time_valid' => $this->time,
			'account_data' => serialize($_REQUEST),
		);

		$signStr = substr($signStr, 0, strlen($signStr) - 1);
    	$secret = base64_decode($returnInfos['signMsg']);
		$fp = fopen(dirname(__FILE__) . '/kuaiq_99bill[1].cert.rsa.20140803.cer', 'r'); 
		$cert = fread($fp, 8192); 
		fclose($fp); 
	    $pubkeyid = openssl_get_publickey($cert);

	    $ok = openssl_verify($signStr, $secret, $pubkeyid); 
        if ($ok == 1) {
			if ($returnInfos['payResult'] == '10') {
				$resultOrderInfo = $this->operatePay($orderInfo);
				return $resultOrderInfo;
			}
    	} else {
    		$this->writeLog($orderInfo);
    		return false;
    	}
    }

    
    /**
     * The codes list of gallery pay
     *
     * @return string
     */
    protected function _getGalleryCode($galleryCode)
    {
    	$bankCodes = array(
    			'icbc' => 'ICBC-NET-B2C', 'ccb' => 'CCB-NET-B2C', 'abc' => 'ABC-NET-B2C',
    			'cmbchina' => 'CMBCHINA-NET-B2C', 'boc' => 'BOC-NET-B2C', 'boco' => 'BOCO-NET-B2C',
    			'ceb' => 'CEB-NET-B2C', 'cmbc' => 'CMBC-NET-B2C', 'cib' => 'CIB-NET-B2C',
    			'spdb' => 'SPDB-NET-B2C', 'hkbea' => 'HKBEA-NET-B2C', 'ecitic' => 'ECITIC-NET-B2C',
    			'sdb' => 'SDB-NET-B2C', 'bccb' => 'BCCB-NET-B2C', 'pinganbank' => 'PINGANBANK-NET',
    	);
    	$cardCodes = array(
    			'ybjunnet' => 'JUNNET', 'ybjiuyou' => 'JIUYOU', 'ybshenzx' => 'SZX',
    			'ybunicom' => 'UNICOM', 'ybwanmei' => 'WANMEI', 'ybzyou' => 'ZONGYOU', 
    			'ybtelecom' => 'TELECOM', 'ybzhengtu' => 'ZHENGTU', 'ybsndacard' => 'SNDACARD',
    			'ybnetease' => 'NETEASE',
    	);
    	$selectCode = isset($bankCodes[$galleryCode]) ? $bankCodes[$galleryCode] : '';
    	$selectCode = empty($selectCode) ? (isset($cardCodes[$galleryCode]) ? $cardCodes[$galleryCode] : '') : $selectCode;
    	
    	return $selectCode;
    }

	protected function secretKey($signStr)
	{
		$fp = fopen(dirname(__FILE__) . '/config/kuaiq_pcarduser.pem', 'r');
		$priv_key = fread($fp, 123456);
		fclose($fp);
		$pkeyid = openssl_get_privatekey($priv_key);

		openssl_sign($signStr, $signMsg, $pkeyid, OPENSSL_ALGO_SHA1); // compute signature
		openssl_free_key($pkeyid); // free the key from memory
 
		$signMsg = base64_encode($signMsg); //echo $signStr . '<br />' . $signMsg; exit();
		return $signMsg;
	}

	protected function kq_ck_null($kq_va,$kq_na)
	{
		if ($kq_va == "") {
			$kq_va="";
		} else {
			return $kq_va = $kq_na . '=' . $kq_va . '&';
		}
	}
}