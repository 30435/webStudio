<?php echo $this->load->view('header_base'); ?>


<script src="<?php echo $this->staticUrl; ?>common/script/jquery-1.8.0.min.js" type="text/javascript" charset="UTF-8"></script>
<script src="<?php echo $this->staticUrl; ?>common/formvalidator/formValidator-4.1.1.js" type="text/javascript" charset="UTF-8"></script>
<script src="<?php echo $this->staticUrl; ?>common/formvalidator/formValidatorRegex.js" type="text/javascript" charset="UTF-8"></script>
<script src="<?php echo $this->staticUrl; ?>common/formvalidator/themes/Default/js/theme.js" type="text/javascript" charset="UTF-8"></script>
<link href="<?php echo $this->staticUrl; ?>common/formvalidator/themes/Default/style/style.css" type="text/css" />
<script type="text/javascript">
var passportUrl = "<?php echo $this->appInfos['passport']['url']; ?>";
</script>
<script language="JavaScript">
<!--
$(function(){
	$.formValidator.initConfig({formID:"form1",theme:"Default",submitOnce:true,
		onError:function(msg,obj,errorlist){
			$("#errorlist").empty();
			$.map(errorlist,function(msg){
				$("#errorlist").append("<li>" + msg + "</li>")
			});
			alert(msg);
		},
		onSuccess:function() {
			var paymentCode = $("#paymentCode").val();
			if (paymentCode != 'myself') {
				paysubmit();
				return false;
			}
			return true;
		},
		ajaxPrompt : '有数据正在异步验证，请稍等...'
	});

	$("#username").formValidator({onShow:"请输入用户名",onFocus:"用户名至少5个字符,最多20个字符",onCorrect:"该用户名有效"}).inputValidator({min:5,max:20,onError:"你输入的用户名非法,请确认"});
	$("#password").formValidator({onShow:"请输入密码",onFocus:"密码不能为空",onCorrect:"密码合法"}).inputValidator({min:2,max:16,empty:{leftEmpty:false,rightEmpty:false,emptyError:"密码两边不能有空符号"},onError:"密码不能为空,请确认"});

});
//-->
</script>
<link href="<?php echo $this->staticUrl; ?>kidsedu/css/reset.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->staticUrl; ?>kidsedu/css/table_form.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->staticUrl; ?>kidsedu/css/dialog_simp.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.submit,.pass-logo a,.form-login .input label,.item span{display:inline-block;zoom:1;*display:inline;}
.blue,.blue a{color:#377abe}
.log{line-height:24px; height:24px;float:right; font-size:12px}
.log span{color:#ced9e7}
.log a{color:#049;text-decoration: none;}
.log a:hover{text-decoration: underline;}
#header{ height:94px; background:url(<?php echo $this->staticUrl; ?>kidsedu/images/member/h.png) repeat-x}
#header .logo{ padding-right:100px;float:left;background:url(<?php echo $this->staticUrl; ?>kidsedu/images/member/login-logo.png) no-repeat right 2px;}
#header .content{width:920px; margin:auto; height:60px;padding:10px 0 0 0}
#content{width:920px; margin:auto; padding:36px 0 0 0}
.form-login{ width:440px; padding-left:40px}
.form-login h2{font-size:25px;color:#494949;border-bottom: 1px dashed #CCC;padding-bottom:3px; margin-bottom:10px}
.form-login .input{ padding:7px 0}
.form-login .input label{ width:84px;font-size:14px; color:#888; text-align:right}
.take,.reg{padding:0 0 0 84px}
.take .submit{ margin-top:10px}
.form-login .hr{background: url(<?php echo $this->staticUrl; ?>kidsedu/images/member/line.png) no-repeat left center; height:50px;}
.form-login .hr hr{ display:none}

.submit{padding-left:3px}
.submit,.submit input{ background: url(<?php echo $this->staticUrl; ?>kidsedu/images/member/but.png) no-repeat; height:29px;cursor:hand;}
.submit input{background-position: right top; border:none; padding:0 10px 0 7px; font-size:14px}
.reg{ color:#666; line-height:24px}
.reg .submit{background-position: left -35px; height:35px}
.reg .submit input{background-position: right -35px; font-weight:700; color:#fff; height:35px}

.col-1{position:relative; float:right; border:1px solid #c4d5df; zoom:1;background: url(<?php echo $this->staticUrl; ?>kidsedu/images/member/member_title.png) repeat-x; width:310px; margin: auto; height:304px}
.col-1 span.o1,
	.col-1 span.o2,
	.col-1 span.o3,
	.col-1 span.o4{position:absolute;width:3px;height:3px; overflow:hidden;background: url(<?php echo $this->staticUrl; ?>kidsedu/images/fillet.png) no-repeat}
	.col-1 span.o1{background-position: left -6px; top:-1px; left:-1px}
	.col-1 span.o2{background-position: right -6px; top:-1px; right:-1px}
	.col-1 span.o3{background-position: left -9px; bottom:-1px; left:-1px}
	.col-1 span.o4{background-position: right -9px; bottom:-1px; right:-1px;}
.col-1 .title{color:#386ea8; padding:5px 10px 3px}
.col-1 div.content{padding:0px 10px 10px}
.col-1 div.content h5{background: url(<?php echo $this->staticUrl; ?>kidsedu/images/member/ext-title.png) no-repeat 2px 10px; height:34px}
.col-1 div.content h5 strong{ visibility: hidden}
.pass-logo{ margin:auto; width:261px; padding-top:15px}
.pass-logo p{border-top: 1px solid #e1e4e8; padding-top:15px}
.item{padding:10px 0; vertical-align:middle; margin-bottom:10px}
.item span{ color:#8c8686}
.login-list li{ float:left;height:26px; margin-bottom:14px;width:123px;background:url(<?php echo $this->staticUrl; ?>kidsedu/images/member/mbg.png) no-repeat}
.login-list li a{ display:block;background-repeat:no-repeat; background-position:6px 5px;height:26px; padding-left:36px; line-height:26px}
.login-list li a:hover{text-decoration: none;}
#footer{color:#666; line-height:24px;width:920px; margin:auto; text-align:center; padding:12px 0; margin-top:52px; border-top:1px solid #e5e5e5}
#footer a{color:#666;}

</style>
</head>
<body>
<div id="header">
	<div class="content">
		<div class="logo"><a href="<?php echo $this->baseUrl . $this->prefix; ?>"><img src="<?php echo $this->staticUrl; ?>kidsedu/images/v9/logo.jpg"/></a></div>
		<span class="rt log"></span>
    </div>
</div>
<div id="content">
<div class="col-left form-login" id="logindiv">
<form method="post" action="" onsubmit="save_username();" id="form1" name="form1">
	<input type="hidden" name="forward" id="forward" value="">
    <h2>会员登录</h2>
    <div class="input"><label>用户名：</label><input type="text" id="username" name="username" size="22" class="input-text"><div id="usernameTip"></div></div>
    <div class="input"><label>密码：</label><input type="password" id="password" name="password" size="22" class="input-text"><div id="passwordTip"></div></div>
    <div class="input">
		<label>验证码：</label><input type="text" id="code" name="code" size="8" class="input-text">
		<img id='code_img' onclick='this.src=this.src+"&"+Math.random()' src='http://localhost/phpcms/api.php?op=checkcode&code_len=4&font_size=14&width=84&height=24&font_color=&background='>
	</div>
    <div class="take">
		<input type="checkbox" name="cookietime" value="2592000" id="cookietime"> 记住用户名		
		<a href="index.php?m=member&c=index&a=public_forget_password&siteid=1" class="blue">密码找回</a><br />
		<div class="submit"><input type="submit" name="dosubmit" id="dosubmit" value="登录"></div>
	</div>
    <div class="hr"><hr /></div>
    <div class="reg">您还没有注册PHPCMS会员？<br />
       	<div class="submit"><input type="button" name="register" value="立即注册" onclick="redirect('<?php echo $this->baseUrl . $this->prefix; ?>/register')"></div>
	</div>
</form>
</div>
<div class="col-auto">
	<div class="col-1">
		<div class="content">
			<h5><strong>使用外部通行证</strong></h5>
            <div class="pass-logo">
               	<ul class="item login-list clear blue"></ul>
                <p><span class="blue">通行证介绍</span><br />PHPCMS支持使用第三方账号登录。</p>
            </div>
       	</div>
        <span class="o1"></span><span class="o2"></span><span class="o3"></span><span class="o4"></span>
     </div>
</div>

<?php echo $this->load->view($this->prefix . '/footer'); ?>