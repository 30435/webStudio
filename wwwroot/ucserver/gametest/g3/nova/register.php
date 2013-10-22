<?php $configInfos = require '../config.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 4.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>游戏测试接口</title>
<script src="<?php echo $configInfos['staticUrl']; ?>common/script/jquery-1.8.0.min.js" type="text/javascript" language="javascript"></script>
<script src="<?php echo $configInfos['staticUrl']; ?>common/formvalidator/formValidator-4.1.1.js" type="text/javascript" charset="UTF-8"></script>
<script src="<?php echo $configInfos['staticUrl']; ?>common/formvalidator/formValidatorRegex.js" type="text/javascript" charset="UTF-8"></script>
<script src="<?php echo $configInfos['staticUrl']; ?>common/formvalidator/themes/Default/js/theme.js" type="text/javascript" charset="UTF-8"></script>
<link href="<?php echo $configInfos['staticUrl']; ?>common/formvalidator/themes/Default/style/style.css" type="text/css" />
<script type="text/javascript">
$(document).ready(function(){
	$.formValidator.initConfig({theme:"Default",submitOnce:true,formID:"form1"});
	$("#username").formValidator({onShow:"请输入账号",onFocus:"至少4个长度",onCorrect:"账号合法"}).inputValidator({min:4,empty:{leftEmpty:false,rightEmpty:false,emptyError:"账号两边不能有空符号"},onError:"账号不能为空,请确认"});
	$("#password").formValidator({onShow:"请输入密码",onFocus:"至少4个长度",onCorrect:"密码合法"}).inputValidator({min:4,empty:{leftEmpty:false,rightEmpty:false,emptyError:"密码两边不能有空符号"},onError:"密码不能为空,请确认"});
	$("#password2").formValidator({onShow:"输再次输入密码",onFocus:"至少4个长度",onCorrect:"密码一致"}).inputValidator({min:1,empty:{leftEmpty:false,rightEmpty:false,emptyError:"重复密码两边不能有空符号"},onError:"重复密码不能为空,请确认"}).compareValidator({desID:"password",operateor:"=",onError:"2次密码不一致,请确认"});
});
</script>
<style type="text/css">
body,div{font-size:12px;}
tr{height:32px;}
</style>
</head>
<body>
<form action="action.php" method="post" name="form1" id="form1">
  <input type="submit" name="button" id="button" value="提交" /><br />
  <input type="hidden" name="action" value="register" />
  <input type="hidden" name="gamecode" value="nova" />
  <input type="hidden" name="key" value="novakey" />
  <table border="0px" style="font-size:12px" width="630px">
    <tr> 
      <td align="right">密码:</td>
      <td><input type="password" id="password" name="password" value="<?php if (isset($_GET['passport'])) echo $_GET['passport']; ?>" style="width:120px" /></td>
      <td><div id="passwordTip" style="width:280px"></div></td>
    </tr>
    <tr> 
      <td align="right">确认密码:</td>
      <td><input type="password" id="password2" name="password2" value="<?php if (isset($_GET['passport2'])) echo $_GET['passport2']; ?>" style="width:120px" /></td>
      <td><div id="password2Tip" style="width:280px"></div></td>
    </tr>
    <tr> 
      <td align="right">验证码:</td>
      <td><input type="text" id="seccode" name="seccode" style="width:120px" value="<?php if (isset($_GET['seccode'])) echo $_GET['seccode']; ?>" /></td>
      <td><div id="seccodeTip" style="width:280px"></div></td>
    </tr>
    <tr> 
      <td colspan="3"><div id="msTip" style="width:280px"></div></td>
    </tr>
  </table>
</form>
<div id="output"></div>
<h3><a href="<?php echo $configInfos['getpwdUrl']; ?>" target="_blank">忘记密码</a></h3><h3><a href="index.php">登陆</a></h3><h3><a href="<?php echo $configInfos['payUrl']; ?>" target="_blank">为游戏支付游戏币</a></h3>
</body>
</html>