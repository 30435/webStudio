<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once dirname(__FILE__) . '/PayCommon.php';

class YeepayBase extends PayCommon
{
    public function __construct($params)
    {
    	parent::__construct($params);

    	//$this->sentApiUrl = 'https://www.yeepay.com/app-merchant-proxy/node'; // Formal api url
    	//$this->sentApiUrl = 'http://tech.yeepay.com:8080/robot/debug.action'; // Test api url
    	$this->sentApiUrl = 'http://pay.kids.com/paytest.php?code=yeepay';
    	
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
    
    public function secretKey($signStr)
    {
    	$key = $this->configInfo['key'];
        $key  = iconv('GB2312', 'UTF-8', $key);
        $data = iconv('GB2312', 'UTF-8', $signStr);

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
}
?>
