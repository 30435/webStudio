<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ci开发团队</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<link type="image/ico" rel="shortcut icon" href="http://static.ci.com/favicon.ico" />
<link type="text/css" rel="stylesheet" href="http://static.ci.com/passport/css/style.css" />
<link type="text/css" rel="stylesheet" href="http://static.ci.com/passport/css/member.css" />
<script type="text/javascript">
var passportUrl = "http://passport.ci.com";
var webgameUrl = "http://webgame.ci.com";
var payUrl = "http://pay.ci.com";
</script>
<script language="javascript" type="text/javascript" src="http://static.ci.com/common/script/jquery-1.8.0.min.js"></script>
<script language="javascript" type="text/javascript" src="http://static.ci.com/common/script/jquery.cookie.js"></script>
<script language="javascript" type="text/javascript" src="http://static.ci.com/passport/js/common.js"></script>
<script language="javascript" type="text/javascript" src="http://static.ci.com/passport/js/member.js"></script>
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
        <div class="logo"><a href="" hidefocus="true"><img src="http://static.ci.com/passport/images/logo.png"alt="图片未能显示"/></a></div>
        <div class="top-right">
			<span class="top-link">
				<a id="account_login" href="javascript:void(null);">登录</a>　|　
				<a href="javascript:void(null);" id="J_user_recharge">充值中心</a>　| 
				<a href="javascript:void(null);" id="J_user_feedback">意见反馈</a>　|　
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
<?php if ($_GET['action'] == 'registersuccess') echo '<h1>注册成功，可以登陆游戏了</h1>'; ?>
<div class="top-bar">
	<ul class="in-bar">
		<li class="bar"><a href="/" id="account_index" class="no-underline" hidefocus="true"><span class="spanout-bar">登陆</span></a></li>
        <li class="bar"><a href="register.html" id="account_register" class="no-underline" hidefocus="true"><span class="spanout-bar">申请米米号</span></a></li>
        <li class="bar"><a href="http://passport.ci.com/index/safe" id="account_protect" class="no-underline" hidefocus="true"><span class="spanout-bar">密码保护</span></a></li>
        <li class="bar"><a href="http://passport.ci.com/index/getpwd" id="account_forget" class="no-underline" hidefocus="true"><span class="spanout-bar">找回密码</span></a></li>
        <li class="bar"><a href="http://passport.ci.com/index/editpwd" id="account_change" class="no-underline"hidefocus="true"><span class="spanout-bar">修改密码</span></a></li>
        <!--<li class="bar"><a href="/appeal" id="account_appeal" class="no-underline"hidefocus="true"><span class="spanout-bar">密码申诉</span></a></li>
        <li class="bar"><a href="/classroom" id="account_classroom" class="no-underline" hidefocus="true"><span class="spanout-bar">安全学堂</span></a></li>-->
	</ul>
</div>
<div class="min-body" style="height:411px;margin-bottom: -8px;">
    <div class="min-content has-background">
	    <span class="hack-span"></span>
	    <div class="login" style="right:480px;">
		<form action="action.php" method="post" accept-charset="utf-8" name="loginform" id="loginform"> 
			<input type="hidden" name="action" value="login" />
		    <div class="inputout-first">
			    <div class="comm-error ps-error" id="usernamenote" style="margin-left:25px;*margin-left:-10px;"><span></span></div>
	            <i class="fimg l-user">&nbsp;&nbsp;</i><span class="t-span">输入米米号或邮箱</span>
				<input type="text" tabindex="1" class="text-input" name="username" id="username" onBlur="$('#username').css('opacity','1');" onMouseDown="$('#username').css('opacity','1');" value="<?php if (isset($_GET['username'])) echo $_GET['username']; ?>" style="opacity: 0.58;" />
				<div id="select_userid" class="select-div"><div class="select-option">96278713</div></div>
				<div class="rimg"/></div>
		    </div>
		    <div class="inputout-two">
		        <div class="comm-error ps-error" id="passwordnote" style="margin-left:25px;*margin-left:-10px;"><span></span></div>
	            <i class="fimg l-pwd">&nbsp;&nbsp;</i><span class="t-span">输入登录密码</span>
			    <input type="password" value="<?php if (isset($_GET['password'])) echo $_GET['password']; ?> " name="password" id="password" onBlur="$('#password').css('opacity','1');" onMouseDown="$('#password').css('opacity','1');" style="width:134px;position:relative;" class="text-input" tabindex="2"/>
			    <input type="text" value="" id="J_user_pwd1" style="width:134px;display:none;position:relative;opacity:1;" class="text-input" tabindex="2"/>
				<label class='ab_label'><input type='checkbox' value="1" id="J_show_passwd1"/><span>显示</span></label>
			</div>
			<div id="sesscode1" class="sesscode hidden">
				<div class="comm-error ps-error" id="J_error_sec1" style="margin-left:25px;"><span></span></div>
				<span class="s-span">输入验证码</span><input type="text" class="ses-text" maxlength="4"  id="seccode_text1" tabindex="3" />
				<img src="http://passport.ci.com//admin/index/checkcode" onClick="this.src=this.src+'/'+Math.random()" id="verify_img_login1" class="ses-img" alt="换一张"/>
				<a href="javascript:document.getElementById('seccode_img').src='http://passport.ci.com/admin/index/checkcode'+'/'+Math.random();void(0);" class="ses-a gray no-underline">换一个</a>
			</div>
			<div class="botton f16b" id="J_login1" onClick="javascript: login(); "><span>登&nbsp;录</span></div>
			<span class="a-span"><a href="register.html" class="no-underline">申请米米号</a>&nbsp;&nbsp; |  &nbsp;&nbsp;<a href="/forget" class="no-underline">忘记密码</a></span>
		</form>
		</div>
	</div>
</div>
<div class="foot-bar">
    <div class="foot-content">
        <div class="content">
        <a class="no-underline no-underline-hover" href="classroom/encyclopedias2">
	        <i class="fleft foot-ico1">&nbsp;&nbsp;</i><span class="fcon"><p class="fcon-pl">请勿相信“刷米币工具”</p><p class="fcon-pb">小心掉进“免费陷阱”导致米米号被盗</p></span>
        </a>
        </div>
        <div class="content">
        <a class="no-underline no-underline-hover" href="classroom/course2">
	        <i class="fleft foot-ico2">&nbsp;&nbsp;</i><span class="fcon"><p class="fcon-pl">找回保存的帐号</p><p class="fcon-pb">密码和米米号忘记了？先到电脑中找找</p></span>
        </a>
        </div>
        <div class="content" style="border:none;">
        <a class="no-underline no-underline-hover" href="classroom/protect1">
	        <i class="fleft foot-ico3">&nbsp;&nbsp;</i><span class="fcon"><p class="fcon-pl">提高密码强度</p><p class="fcon-pb">提高密码强度，帐号安全不用愁</p></span>
        </a>
    </div>
</div>
<div class="foot">
	<div class="foot-info">
		<img src="http://static.ci.com/passport/images/taomee_logo.gif" alt="淘米">
        <div class="info">
			<p class="mb8">
                <a title="关于淘米" href="http://www.taomee.com/info/">关于淘米</a><i class="part">|</i>
                <a title="联系我们" href="http://www.taomee.com/contact/">联系我们</a><i class="part">|</i>
                <a title="淘米招聘" href="http://www.taomee.com/hr/tech/">淘米招聘</a><i class="part">|</i>
                <a title="父母须知" href="http://www.61.com/about/parents.html">父母须知</a><i class="part">|</i>
                <a title="儿童安全上网" href="http://www.61.com/about/children.html">儿童安全上网</a><i class="part">|</i>
                <a title="绿色宣言" href="http://www.61.com/about/green.html">绿色宣言</a><i class="part">|</i>
                <a title="意见反馈" href="http://www.61.com/about/feedback.html#tab=1">意见反馈</a><i class="part">|</i>
                <a title="淘米客服" href="http://service.61.com/">淘米客服</a>
            </p>
            <p><span>增值电信业务许可经营证：沪B2-20090070&nbsp;&nbsp;</span><span>文网文[2009]093号&nbsp;&nbsp;</span><span>互联网出版许可证 新出网证(沪)字023号&nbsp;&nbsp;</span></p>
            <p>上海淘米网络科技有限公司 Copyright©2008-2012 TaoMee Inc. All Rights Reserved&nbsp;&nbsp;服务热线：021-61130888</p>
		</div>
        <div class="police"><a target="_blank" href="http://sh.cyberpolice.cn/"><span>网警</span></a></div>
        <div class="wang"><a target="_blank" href="http://www.zx110.org/"><span>绿色宣言 - 淘米</span></a></div>
        <div class="gongs"><a target="_blank" href="http://www.sgs.gov.cn/lz/licenseLink.do?method=licenceView&entyId=201205111446596"><span>绿色宣言 - 淘米</span></a></div>
        <div class="green-declar"><a target="_blank" href="http://www.61.com/about/green.html"><span>绿色宣言 - 淘米</span></a></div>
    </div>
</div>
</body>
</html>
