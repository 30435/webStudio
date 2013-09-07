<?php echo doctype(); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $this->headerTitle; ?></title>
<?php
	echo meta($this->metaInfos);
?>
<meta http-equiv="refresh" content="2; url=<?php echo $this->urlForward?>" />
<!-- 登录样式 -->
<style type="text/css">
*{ margin:0; padding:0;}
.login_secc{ width:392px; height:192px; border:4px solid #ffb72b; margin:260px auto; text-align:center; font-size:14px;}
.login_secc h1{ margin:1px; background:#ffaf14; height:28px; line-height:28px; color:#FFF; font-size:14px;}
.login_secc p{ padding-top:45px;}
.login_secc a{ color:#C00; text-decoration:none;}
.login_secc a:hover{ text-decoration:underline;}
.login_secc h2{ font-size:14px; text-align:center; line-height:162px; font-weight:100; color:#333333;}
</style>
<script type="text/javaScript" src="<?php echo $this->staticUrl; ?>common/script/jquery-1.8.0.min.js"></script>
<script language="JavaScript" src="<?php echo $this->staticUrl; ?>common/script/admin_common.js"></script>
</head>

<body>
<!-- 登录成功 -->
<div class="login_secc">
    <h1><?php echo $this->lang->line('message_tips');?></h1>
    <p><?php echo $this->message?></p>
    <p><a href="<?php echo $this->urlForward?>">&lt;&lt;返回上一页</a></p>
</div>

<!-- 登录成功 end -->
</body>
</html>
