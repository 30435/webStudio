<?php require './init.php'; ?>
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
});
</script>
<style type="text/css">
body,div{font-size:12px;}
tr{height:32px;}
</style>
</head>
<body>
<form action="action.php" method="get" name="form1" id="form1">
  <input type="submit" name="button" id="button" value="提交" /><br />
  <input type="hidden" name="action" value="login" />
  <input type="hidden" name="code" value="<?php echo $webgameCode; ?>" />
  <table border="0px" style="font-size:12px" width="630px">
    <tr> 
      <td align="right">用户名:</td>
      <td><input type="text" id="username" name="username" style="width:120px" value="<?php if (isset($_GET['username'])) echo $_GET['username']; ?>" /></td>
      <td><div id="usernameTip" style="width:280px"></div></td>
    </tr>
    <tr> 
      <td align="right">密码:</td>
      <td><input type="password" id="password" name="password" value="<?php if (isset($_GET['passport'])) echo $_GET['passport']; ?>" style="width:120px" /></td>
      <td><div id="passwordTip" style="width:280px"></div></td>
    </tr>
    <tr> 
      <td colspan="3"><div id="msTip" style="width:280px"></div></td>
    </tr>
  </table>
</form>
<div id="output"></div>

<h3><a href="<?php echo $configInfos['getpwdUrl']; ?>" target="_blank">忘记密码</a></h3><h3><a href="register.php?code=<?php echo $webgameCode; ?>">注册</a></h3><h3><a href="<?php echo $configInfos['payUrl'] . $webgameCode; ?>" target="_blank">为游戏支付游戏币</a></h3>
</body>
</html>