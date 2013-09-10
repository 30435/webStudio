<?php echo doctype(); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $this->headerTitle; ?></title>
<?php echo meta($this->metaInfos); ?>
<style type="text/css">
	div{overflow:hidden; *display:inline-block;}div{*display:block;}
	.login_box{background:url(<?php echo $this->staticUrl; ?>admin/images/login_bg.jpg) no-repeat; width:602px; height:416px; overflow:hidden; position:absolute; left:50%; top:50%; margin-left:-301px; margin-top:-208px;}
	.login_iptbox{bottom:90px;_bottom:72px;color:#FFFFFF;font-size:12px;height:30px;left:50%;
margin-left:-280px;position:absolute;width:560px; overflow:visible;}
	.login_iptbox .ipt{height:24px; width:110px; margin-right:22px; color:#fff; background:url(<?php echo $this->staticUrl; ?>admin/images/ipt_bg.jpg) repeat-x; *line-height:24px; border:none; color:#000; overflow:hidden;}
		.login_iptbox label{ *position:relative; *top:-6px;}
	.login_iptbox .ipt_reg{margin-left:12px;width:46px; margin-right:16px; background:url(<?php echo $this->staticUrl; ?>admin/images/ipt_bg.jpg) repeat-x; *overflow:hidden;text-align:left;padding:2px 0 2px 5px;font-size:16px;font-weight:bold;}
	.login_tj_btn{ background:url(<?php echo $this->staticUrl; ?>admin/images/login_dl_btn.jpg) no-repeat 0px 0px; width:52px; height:24px; margin-left:16px; border:none; cursor:pointer; padding:0px; float:right;}
	.yzm{position:absolute; background:url(<?php echo $this->staticUrl; ?>admin/images/login_ts140x89.gif) no-repeat; width:140px; height:89px;right:56px;top:-96px; text-align:center; font-size:12px; display:none;}
	.yzm a:link,.yzm a:visited{color:#036;text-decoration:none;}
	.yzm a:hover{color:#C30;}
	.yzm img{cursor:pointer; margin:4px auto 7px; width:130px; height:50px; border:1px solid #fff;}
	.cr{font-size:12px;font-style:inherit;text-align:center;color:#ccc;width:100%; position:absolute; bottom:58px;}
	.cr a{color:#ccc;text-decoration:none;}
</style>
<script language="JavaScript">
<!--
	if(top!=self)
	if(self!=top) top.location=self.location;
//-->
</script>
</head>
<body onLoad="javascript:document.myform.username.focus();">
<div class="login_box" id="login_bg">
  <div class="login_iptbox">
    <form name="myform" method="post" action="<?php echo $this->baseUrl; ?>admin/index/login/">
      <input type="submit" class="login_tj_btn" value="" name="dosubmit">
      <label><?php echo $this->lang->line('admin_username'); ?>:</label>
      <input type="text" value="" class="ipt" name="username">
      <label><?php echo $this->lang->line('admin_password'); ?>:</label>
      <input type="password" value="" class="ipt" name="password">
      <label><?php echo $this->lang->line('admin_checkcode'); ?>:</label>
      <input type="text" onFocus="document.getElementById('yzm').style.display='block'" class="ipt ipt_reg" name="checkcode">
      <div class="yzm" id="yzm">
	  <img src="<?php echo $this->baseUrl; ?>admin/index/checkcode" onClick="this.src=this.src+'/'+Math.random()" id="code_img"><br>
        <a href="javascript:document.getElementById('code_img').src='<?php echo $this->baseUrl; ?>admin/index/checkcode'+'/'+Math.random();void(0);"><?php echo $this->lang->line('admin_changecode'); ?>:</a>
	  </div>
    </form>
  </div>
  <div class="cr"><?php echo $this->lang->line('admin_copyright'); ?>:</div>
</div>
</body>
</html>