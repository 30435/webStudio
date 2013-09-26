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
	$("#password2").formValidator({onShow:"输再次输入密码",onFocus:"至少4个长度",onCorrect:"密码一致"}).inputValidator({min:1,empty:{leftEmpty:false,rightEmpty:false,emptyError:"重复密码两边不能有空符号"},onError:"重复密码不能为空,请确认"}).compareValidator({desID:"password",operateor:"=",onError:"2次密码不一致,请确认"});

	$("#frontCaptcha").formValidator({onShow:"",onFocus:"验证码至少2个字符,最多10个字符",onCorrect:"验证码有效"}).inputValidator({min:2,max:10,onError:"你输入的验证码非法,请确认"})//.regexValidator({regExp:"username",dataType:"enum",onError:"用户名格式不正确"})
	    .ajaxValidator({
		dataType : "jsonp",
		async : false,
		jsonp:"callback",
		url : "<?php echo $configInfos['interfaceUrl']; ?>checkCaptcha",
		success : function(data){
			var captchaValid = parseInt(data.captchaValid);

			if (captchaValid == '1') {
				return true;
			} else {
				return "验证码错误";
			}
		}
	}).defaultPassed();
});
</script>
<style type="text/css">
body,div{font-size:12px;}
tr{height:32px;}
</style>
</head>
<body>
<form action="action.php" method="get" name="form1" id="form1">
  
  <input type="hidden" name="action" value="register" />
  <input type="hidden" name="code" value="<?php echo $webgameCode; ?>" />
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
      <td>
	    <input name="frontCaptcha" type="text" id="frontCaptcha" size="6" maxlength="4" class="reg-sec"/>
		<span id="frontCaptcha_img_tip">
		  <img style="width:100px;" src="<?php echo $configInfos['interfaceUrl']; ?>createCaptcha" onClick="this.src=this.src+'/'+Math.random()"  id="frontCaptcha_img" alt="换一张"/>
		  <a href="javascript:document.getElementById('frontCaptcha_img').src='<?php echo $configInfos['interfaceUrl']; ?>createCaptcha'+'/'+Math.random();void(0);" id="J_change_sess" class="gray f12">换一个</a>
		</span>
	  </td>
      <td><div id="frontCaptchaTip" style="width:280px"></div></td>
    </tr>
    <tr> 
      <td colspan="3"><div id="msTip" style="width:280px"></div></td>
    </tr>
  </table>
  <input type="submit" name="button" id="button" value="提交" /><br />
</form>
<div id="output"></div>
<h3><a href="<?php echo $configInfos['getpwdUrl']; ?>" target="_blank">忘记密码</a></h3><h3><a href="index.php?code=<?php echo $webgameCode; ?>">登陆</a></h3><h3><a href="<?php echo $configInfos['payUrl'] . $webgameCode; ?>" target="_blank">为游戏支付游戏币</a></h3>
</body>
</html>