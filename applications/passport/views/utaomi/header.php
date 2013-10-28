<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $this->metaDatas['title']; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<meta name="keywords" content="<?php $this->metaDatas['keywords']; ?>" />
<meta name="description" content="<?php $this->metaDatas['description']; ?>" />
<link type="image/ico" rel="shortcut icon" href="<?php echo $this->staticUrl; ?>favicon.ico" />
<link type="text/css" rel="stylesheet" href="<?php echo $this->staticUrl; ?>passport/css/base.css" />
<link type="text/css" rel="stylesheet" href="<?php echo $this->staticUrl; ?>passport/css/account.css" />
<script type="text/javascript">
var passportUrl = "<?php echo $this->baseUrl; ?>";
var webgameUrl = "<?php echo $this->appInfos['webgame']['url']; ?>";
var payUrl = "<?php echo $this->appInfos['pay']['url']; ?>";
</script>
<script language="javascript" type="text/javascript" src="<?php echo $this->staticUrl; ?>common/script/jquery-1.8.0.min.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->staticUrl; ?>common/script/jquery.cookie.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->staticUrl; ?>common/script/common.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->staticUrl; ?>passport/js/member.js"></script>
<style>
	.gonggao-notice{
		font-weight: bold;
		top: 48px;
		position: absolute;
		right: 0px;
		text-decoration:none;
		padding:2px;
		display:none;
	}
	.gonggao-notice .show-tip{
		font-weight: bold;
		text-decoration:none;
		color:#F00000;
		display:inline-block;
		*display:inline;
		*zoom:1;
		margin-top:12px;
		margin-right:15px;
	}
	.gonggao-close{
	position: absolute;
	right: 0;
	top: 11px;
	cursor:pointer;
		font-size:16px;
		color:#9A9A9A;
	}
</style>
</head>
<body>
<div class="top-logo">
    <div class="top">
		<div class="f14 red gonggao-notice" id="J_notice"><i class='gonggao-icon'></i><span class="gonggao-close">x</span><a class="show-tip" href="/user/showNoticePage">中国雅虎邮箱将停止服务,使用雅虎邮箱的淘米用户请尽快修改，点击查看详情。</a></div>
        <div class="logo"><a href="<?php echo $this->baseUrl; ?>" hidefocus="true"><img src="<?php echo $this->staticUrl; ?>passport/images/logo.png"alt="图片未能显示"/></a></div>
        <div class="top-right">
			<span class="top-link">
			<?php if (!empty($this->loginedUserInfo)) { ?>
				(<span><?php echo $this->loginedUserInfo['username']; ?></span>)<a href="<?php echo $this->appInfos['pay']['url']; ?>index/mypay"> 我的充值中心 </a> |
				<a href="<?php echo $this->baseUrl . $this->prefix; ?>/logout/">安全退出</a> |
			<? } else { ?>
				<a id="login" href="<?php echo $this->baseUrl . $this->prefix; ?>/login/">登录</a>　|　
			<? } ?>
				<a href="<?php echo $this->appInfos['pay']['url']; ?>">充值中心</a>　| 
				<a href="javascript:void(null);" onclick="addBookmark();">收藏本页</a>
			</span>
        </div>
	</div>
</div>
<script>
$(function() {
	var notice = $("#J_notice");
    if(notice.length==1) {
        var is_close = $.cookie('notice_close_button');
        if (is_close) {
            notice.hide();
        } else {
            notice.fadeIn();
        }
    }
});
$(".gonggao-close").click(function() {
    $("#J_notice").hide();
    var expiresTime = new Date();
    expiresTime.setTime(expiresTime.getTime() + 20 * 60 * 1000);
    $.cookie('notice_close_button', 1, {expires: expiresTime});
 });
</script>
<div class="top-bar">
	<ul class="in-bar">
		<li class="bar"><a href="<?php echo $this->baseUrl . $this->prefix; ?>" id="account_index" class="no-underline" hidefocus="true"><span class="spanout-bar">首页</span></a></li>
    <?php if (empty($this->loginedUserInfo)) { ?>
		<li class="bar"><a href="<?php echo $this->baseUrl . $this->prefix; ?>/register" id="account_register" class="no-underline" hidefocus="true"><span class="spanout-bar">申请米米号</span></a></li>
		<li class="bar"><a href="<?php echo $this->baseUrl . $this->prefix; ?>/getpwd" id="account_forget" class="no-underline" hidefocus="true"><span class="spanout-bar">找回密码</span></a></li>
		<li class="bar"><a href="<?php echo $this->baseUrl . $this->prefix; ?>/apply" id="account_appeal" class="no-underline"hidefocus="true"><span class="spanout-bar">密码申诉</span></a></li>
	<?php }  else { ?>
        <li class="bar"><a href="<?php echo $this->baseUrl . $this->prefix; ?>/safe" id="account_protect" class="no-underline" hidefocus="true"><span class="spanout-bar">密码保护</span></a></li>
        <li class="bar"><a href="<?php echo $this->baseUrl . $this->prefix; ?>/editpwd" id="account_change" class="no-underline"hidefocus="true"><span class="spanout-bar">修改密码</span></a></li>
	<?php } ?>
        <li class="bar"><a href="/classroom" id="account_classroom" class="no-underline" hidefocus="true"><span class="spanout-bar">安全学堂</span></a></li>
	</ul>
</div>
