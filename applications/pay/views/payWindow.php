
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>确定取消页面</title>
<link rel="stylesheet" type="text/css" href="<?php echo $this->staticUrl; ?>cfront/css/style1.css" />
</head>
<?php
$getStr = '';
$validMoney = $this->params['orderInfo']['money'] * (1 - $this->params['orderInfo']['paymentRate']);
switch ($this->params['orderInfo']['payType']) { 
	case 'touser': 
		$getStr = '<li><label>充值所得:</label><div class="b">' . $validMoney . '诺币</div></li>';
		break;
	case 'towebgame':
		$validMoney = $validMoney * $this->params['webgameInfo']['coin_rate'];
		$getStr = '<li><label>你充值的游戏:</label><div class="b">' . $this->params['webgameInfo']['name'] . '</div></li>';
		$getStr .= $this->params['webgameInfo']['type'] == 3 ? '<li><label>你充值的服务器:</label><div class="b">' . $this->params['serverInfo']['name'] . '</div></li>' : '';
		$getStr .= '<li><label>充值所得:</label><div class="b">' . $validMoney . $this->params['webgameInfo']['coin_unit'] . $this->params['webgameInfo']['coin_name'] . '诺币</div></li>';
		break;
	case 'topaymonth':
		$getStr = '<li><label>您花费了:</label><div class="b">' . $validMoney . '诺币</div></li>'
			. '<li><label>为游戏:</label><div class="b">' . $this->params['webgameInfo']['name'] . '</div></li>'
			. '<li><label>购买了:</label><div class="b">' . $this->params['paymonthInfo']['name'] . '</div></li>';
		break;
}
?>
<body>
<table class="boxy" cellpadding="0" cellspacing="0" border="0" style="z-inden:1339;visibility:visible;left:759px;top:116px;opacity:1;">
	<tr><td class="boxy-inner">
    	<div class="pop_wrap" style="display:block" id="payConfirmWindow">
        	<div class="pop">
            	<div class="pop_hd">
                	<h3>你确定一下消息正确吗？</h3>
                    <a class="close" href="javascript: art.dialog.list['payWindow123'].close();void(0);"><span>关闭</span></a>
                </div>
                <div class="pop_bd">
                	<ul class="pob_info_list">
                    	<li><label>充值诺瓦号：</label><div class="b"><?php echo $this->params['orderInfo']['username']; ?></div></li>
                        <li><label>你充值的方式：</label><div class="b"><?php echo $this->params['paymentInfo']['name']; ?></div></li>
                        <li><label>你充值的金额：</label><div class="b"><?php echo $this->params['orderInfo']['money']; ?>元</div></li>
						<?php echo $getStr; ?>
                    </ul>
                    <div class="pop_btns">
						<input type="hidden" id="orderStr" value="<?php echo $this->orderStr; ?>" />
						<?php echo $this->buttonStr; ?>
                        <button class="ui_btn" type="button" value="" onclick="art.dialog.list['payWindow123'].close();void(0);"><span>修改</span></button>
                    </div>
                </div>
            </div>
        </div>
    </td></tr>
</table>
</body>
</html>
