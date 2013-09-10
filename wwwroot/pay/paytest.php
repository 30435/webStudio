<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>充值测试</title>
<style type="text/css">
body {
	font-size:10pt;
	margin-left:15px;
	color:#666666;
	font-weight:600;
}

input {
	border:1px solid #c0c0c0;
}
.radio {
	border-width:0px;
}
}
/* a */
a {
	text-decoration:none;
}
a:link {
	margin:auto;
	color:#c0c0c0;
}

a:hover {
	margin:auto;
	color:#993399;
	text-decoration:underline;
}

a:active {
	margin:auto;
	color:#c0c0c0;
	
}

a:visited {
	margin:auto;
	color:#cccccc;
}


</style>
	</head>

<?php
$returnParams = array(
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

$code = $_GET['code'];
$link = '<form action="http://pay.ci.com/frontpay/respond?code=' . $code . '" method="POST">';
foreach ($returnParams as $param) {
	@$value = $_REQUEST[$param['value']];
	$link .= $param['name'] . '<input type="text" name="' . $param['key'] . '" value="' . $value . '" /><br />';
}

$link .= '<input type="text" name="code" value="' . $code . '" /><br /><input type="submit" value="ffff" /></form>';
echo $link;
?>
</html>