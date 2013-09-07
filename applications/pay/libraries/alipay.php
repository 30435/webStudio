<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once dirname(__FILE__) . '/PayCommon.php';

class Alipay extends PayCommon
{	
    public function __construct($params)
    {
    	parent::__construct($params);

    	$this->configInfo = $this->_initConfig();
    	$this->alipayGateway = 'https://mapi.alipay.com/gateway.do?';
    }

    public function getButton($orderInfo)
    {
    	// 基本参数
    	$out_trade_no = $orderInfo['orderid']; // 请与贵网站订单系统中的唯一订单号匹配
    	$subject = 'game'; // 订单名称，显示在支付宝收银台里的“商品名称”里，显示在支付宝的交易管理的“商品名称”的列表里。
    	$body = 'gamecoin'; // 订单描述、订单详细、订单备注，显示在支付宝收银台里的“商品描述”里
    	$total_fee = $orderInfo['money']; // 订单总金额，显示在支付宝收银台里的“应付总额”里
    	//扩展功能参数——默认支付方式//
    	$paymethod = ''; //默认支付方式，取值见“即时到帐接口”技术文档中的请求参数列表
    	$defaultbank = ''; // 默认网银代号，代号列表见“即时到帐接口”技术文档“附录”→“银行列表”
    	//扩展功能参数——其他
    	$show_url = ''; // 商品展示地址，要用 http://格式的完整路径，不允许加?id=123这类自定义参数
    	$extra_common_param = ''; // 自定义参数，可存放任何内容（除=、&等特殊字符外），不会显示在页面上
    	
    	//扩展功能参数——防钓鱼//
    	$anti_phishing_key = ''; // 防钓鱼时间戳
    	$exter_invoke_ip = ''; // 获取客户端的IP地址，建议：编写获取客户端IP地址的程序
    	//扩展功能参数——分润(若要使用，请按照注释要求的格式赋值)
    	$royalty_type = ""; // 提成类型，该值为固定值：10，不需要修改
    	$royalty_parameters	= "";
    	
    	$this->configInfo['return_url'] = $this->paymentInfo['returnUrl'];
    	$this->configInfo['notify_url'] = $this->paymentInfo['notifyUrl'];
    	//构造要请求的参数数组
    	$parameter = array(
			'service' => 'create_direct_pay_by_user',
			'payment_type' => '1',
    	
			'partner' => trim($this->configInfo['partner']),
			'_input_charset' => trim(strtolower($this->configInfo['input_charset'])),
			'seller_email' => trim($this->configInfo['seller_email']),
			'return_url' => trim($this->configInfo['return_url']),
			'notify_url' => trim($this->configInfo['notify_url']),
    	
			'out_trade_no' => $out_trade_no,
			'subject' => $subject,
			'body' => $body,
			'total_fee' => $total_fee,
    	
			'paymethod' => $paymethod,
			'defaultbank' => $defaultbank,
    	
			'anti_phishing_key' => $anti_phishing_key,
			'exter_invoke_ip' => $exter_invoke_ip,
    	
			'show_url' => $show_url,
			'extra_common_param' => $extra_common_param,
    	
			'royalty_type' => $royalty_type,
			'royalty_parameters' => $royalty_parameters
    	);

    	require_once dirname(__FILE__) . '/alipaylib/alipay_submit.class.php';
    	$alipaySubmit = new AlipaySubmit(); // 生成表单提交HTML文本信息
    	$buttonStr = $alipaySubmit->buildForm($parameter, $this->alipayGateway, "get", $this->configInfo);
    	//echo $buttonStr;
    	//exit();
    	return $buttonStr;
    }
    
    /**
     * Respond the result of the pay plat
     * 
     * @return boolean
     */
    public function respond()
    {
    	require_once dirname(__FILE__) . '/alipaylib/alipay_notify.class.php';
    	
    	$this->configInfo['return_url'] = $this->paymentInfo['returnUrl']; // 页面跳转,要用 http://格式的完整路径,不允许加?id=123这类自定义参数
    	$this->configInfo['notify_url'] = $this->paymentInfo['notifyUrl'];
    	$orderInfo = array(
    			'orderid_plat' => $_GET['trade_no'], // 获取支付宝交易号
    			'orderid' => $_GET['out_trade_no'], // 获取订单号
    			'payment_code' => $this->paymentInfo['code'],
    			'money_valid_middle' => $_GET['total_fee'], // 获取总价格
    			'pay_time_valid' => $this->time,
    			'pay_data' => serialize($_GET),
    	);
    	
    	$alipayNotify = new AlipayNotify($this->configInfo);
    	$verify_result = $alipayNotify->verifyReturn();
    	if ($verify_result) {
    		//验证成功,请在这里加上商户的业务逻辑程序代码
    		//$_GET['trade_status'] == 'TRADE_FINISHED' || $_GET['trade_status'] == 'TRADE_SUCCESS'
          
			$resultOrderInfo = $this->operatePay($orderInfo);
			return $resultOrderInfo;
    	} else {    		
    		$this->writeLog($orderInfo);
    		return false;
    	}
    }
    
    /**
     * Notify the result of the pay plat
     * 
     * @return string
     */
    public function notify()
    {
    	require_once dirname(__FILE__) . '/alipaylib/alipay_notify.class.php';
    	$alipayNotify = new AlipayNotify($this->configInfo);
	    $verify_result = $alipayNotify->verifyNotify();
	    
	    if ($verify_result) {
	    	// 验证成功
	    	$orderInfo = array(
    			'orderid_plat' => $_POST['trade_no'], // 获取支付宝交易号
    			'orderid' => $_POST['out_trade_no'], // 获取订单号
    			'payment_code' => $this->paymentInfo['code'],
    			'money_valid_middle' => $_POST['total_fee'], // 获取总价格
    			'pay_time_valid' => $this->time,
    			'pay_data' => serialize($_POST),
	    	);
	    	if($_POST['trade_status'] == 'TRADE_FINISHED' || $_POST['trade_status'] == 'TRADE_SUCCESS') {
	    		$orderid = $orderInfo['orderid'];
				$query = $this->db->get_where($this->tableAccount, array('orderid' => $orderid));
				$orderInfoOld = $query->row_array();
				if ($orderInfoOld['status'] != '1') {
					$this->operatePay($orderInfo);
				}
	    	}

	    	echo "success";	// 请不要修改或删除
			exit();
	    } else {
	    	echo 'fail'; // 验证失败
	    	//logResult("这里写入想要调试的代码变量值，或其他运行的结果记录"); // 调试用，写文本函数记录程序运行情况是否正常
	    	exit();
	    }
    }
    
    /**
     * Initial the config info
     * 
     * @return array
     */
    protected function _initConfig()
    {
    	$configInfo['partner'] = $this->configInfo['account']; // 合作身份者id，以2088开头的16位纯数字
    	$configInfo['key'] = $this->configInfo['key']; // 安全检验码，以数字和字母组成的32位字符
    	$configInfo['seller_email'] = $this->configInfo['sellerEmail'];//'xupengfei@xiangtone.com'; // 签约支付宝账号或卖家支付宝帐户
    	//return_url的域名不能写成http://localhost/create_direct_pay_by_user_php_utf8/return_url.php ，否则会导致return_url执行无效
    	$configInfo['return_url'] = ''; // 页面跳转,要用 http://格式的完整路径,不允许加?id=123这类自定义参数
    	$configInfo['notify_url'] = ''; // 服务器异步通知页面路径，要用 http://格式的完整路径，不允许加?id=123这类自定义参数
    	$configInfo['sign_type'] = 'MD5'; // 签名方式 不需修改
    	$configInfo['input_charset'] = 'utf-8'; // 字符编码格式 目前支持 gbk 或 utf-8
    	$configInfo['transport'] = 'http'; // 访问模式,根据自己的服务器是否支持ssl访问，若支持请选择https；若不支持请选择http
    	
    	return $configInfo;
    }
}
?>