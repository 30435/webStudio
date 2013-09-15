<?php echo $this->load->view('header_base'); ?>

<link href="<?php echo $this->staticUrl; ?>kidsedu/css/reset.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->staticUrl; ?>kidsedu/css/dialog_simp.css" rel="stylesheet" type="text/css" />

<script src="<?php echo $this->staticUrl; ?>common/script/jquery-1.8.0.min.js" type="text/javascript" charset="UTF-8"></script>
<script src="<?php echo $this->staticUrl; ?>common/formvalidator/formValidator-4.1.1.js" type="text/javascript" charset="UTF-8"></script>
<script src="<?php echo $this->staticUrl; ?>common/formvalidator/formValidatorRegex.js" type="text/javascript" charset="UTF-8"></script>
<script src="<?php echo $this->staticUrl; ?>common/formvalidator/themes/baidu/js/theme.js" type="text/javascript" charset="UTF-8"></script>
<link href="<?php echo $this->staticUrl; ?>common/formvalidator/themes/baidu/style/style.css" type="text/css" />
<script type="text/javascript">
var passportUrl = "<?php echo $this->appInfos['passport']['url']; ?>";
</script>
<script language="JavaScript">
<!--
$(function(){
	$.formValidator.initConfig({formID:"form1",theme:"baidu",submitOnce:true,
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

	$("#username").formValidator({onShow:"请输入用户名",onFocus:"用户名至少5个字符,最多20个字符",onCorrect:"该用户名有效"}).inputValidator({min:5,max:20,onError:"你输入的用户名非法,请确认"})//.regexValidator({regExp:"username",dataType:"enum",onError:"用户名格式不正确"})
	    .ajaxValidator({
		dataType : "jsonp",
		async : false,
		jsonp:"callback",
		url : passportUrl + '<?php echo $this->prefix; ?>/getUserid/',
		success : function(data){
			var userid = parseInt(data.userid);
			if (userid == 0) {
				return true;
			}
			return "该用户名已存在，请更换用户名";
		},
		buttons: $("#button"),
		error: function(jqXHR, textStatus, errorThrown){alert("服务器没有返回数据，可能服务器忙，请重试"+errorThrown);},
		onError : "该用户名已存在，请更换用户名",
		onWait : "正在对用户名进行合法性校验，请稍候..."
	}).defaultPassed();
	$("#password").formValidator({onShow:"请输入密码",onFocus:"密码为6-16个字符",onCorrect:"密码合法"}).inputValidator({min:6,max:16,empty:{leftEmpty:false,rightEmpty:false,emptyError:"密码两边不能有空符号"},onError:"密码为6-16个字符,请确认"});
	$("#password2").formValidator({onShow:"输再次输入密码",onFocus:"至少1个长度",onCorrect:"密码一致"}).inputValidator({min:1,empty:{leftEmpty:false,rightEmpty:false,emptyError:"重复密码两边不能有空符号"},onError:"重复密码不能为空,请确认"}).compareValidator({desID:"password",operateor:"=",onError:"2次密码不一致,请确认"});
	$("#email").formValidator({onShow:"请输入邮箱",onFocus:"邮箱6-100个字符,输入正确了才能离开焦点",onCorrect:"恭喜你,你输对了",defaultValue:"@"}).inputValidator({min:6,max:100,onError:"你输入的邮箱长度非法,请确认"}).regexValidator({regExp:"^([\\w-.]+)@(([[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.)|(([\\w-]+.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(]?)$",onError:"你输入的邮箱格式不正确"})
	.ajaxValidator({
		dataType : "jsonp",
		async : false,
		jsonp:"callback",
		url : passportUrl + '<?php echo $this->prefix; ?>/emailValid/',
		success : function(data){
			var emailValid = parseInt(data.emailValid);
			if (emailValid == 1) {
				return true;
			}
			return "该邮箱已存在，请更换邮箱";
		},
		buttons: $("#button"),
		error: function(jqXHR, textStatus, errorThrown){alert("服务器没有返回数据，可能服务器忙，请重试"+errorThrown);},
		onError : "该用邮箱已存在，请更换邮箱",
		onWait : "正在对邮箱进行合法性校验，请稍候..."
	}).defaultPassed();
	$(":checkbox[name='protocol']").formValidator({onshow:"请阅读协议",onfocus:"请阅读协议"}).inputValidator({min:1,onerror:"请阅读协议"});

	
});

function show_protocol()
{
	art.dialog({lock:false,title:'会员注册协议',id:'protocoliframe', iframe:'?m=member&c=index&a=register&protocol=1',width:'500',height:'310',yesText:'同意'}, function(){
		$("#protocol").attr("checked",true);
	});
}
//-->
</script>
<link href="<?php echo $this->staticUrl; ?>kidsedu/css/table_form.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.submit,.pass-logo a,.form-login .input label,.item span,#content h2 span em{display:inline-block;display:-moz-inline-stack;zoom:1;*display:inline;}
.blue,.blue a{color:#377abe},.submit input{cursor:hand;}
.log{line-height:24px; height:24px;float:right; font-size:12px}
.log span{color:#ced9e7}
.log a{color:#049;text-decoration: none;}
.log a:hover{text-decoration: underline;}
#header{ height:94px; background:url(<?php echo $this->staticUrl; ?>kidsedu/images/member/h.png) repeat-x}
#header .logo{ padding-right:100px;float:left;background:url(<?php echo $this->staticUrl; ?>kidsedu/images/member/login-logo.png) no-repeat right 2px;}
#header .content{width:920px; margin:auto; height:60px;padding:10px 0 0 0}
#content{width:920px; margin:auto; padding:20px 0 0 0; overflow:auto}
.form-login{width:420px; padding-left:40px}
#content h2{font-size:25px;color:#494949;border-bottom: 1px dashed #CCC;padding-bottom:3px; margin-bottom:10px}
#content h2 span{font-size:12px; font-weight:normal}
#content h2 span em{background: url(<?php echo $this->staticUrl; ?>kidsedu/images/member/order.png) no-repeat 0px -16px; width:15px; height:15px; line-height:15px; text-align:center; margin-right:5px; color:#FFF}
#content h2 span.on{ color:#333; font-weight:700}
#content h2 span.on em{background-position: 0px 0px;}

.form-login .input{ padding:7px 0; overflow:hidden; clear:both}
.form-login .input label{ width:84px;font-size:14px; color:#8c8686; text-align:right; float:left}
.form-login .input .form{ width:560px; float:left}
.take,.reg{padding:0 0 0 84px}
.take .submit{margin-top:10px}
.form-login .hr{background: url(<?php echo $this->staticUrl; ?>kidsedu/images/member/line.png) no-repeat left center; height:50px;}
.form-login .hr hr{ display:none}

.form-reg{padding:10px 0 0 14px; width:700px; border-right:1px solid #ccc}
.form-reg .input label{ width:120px}
.form-reg .input label.type{ width:auto; color:#000; padding-right:10px}
.form-reg .reg{padding:10px 0 0 120px}
.form-reg .reg .submit{ margin-bottom:5px}

.submit{padding-left:3px}
.submit,.submit input{ background: url(<?php echo $this->staticUrl; ?>kidsedu/images/member/but.png) no-repeat; height:29px;width:auto;_width:0;overflow:visible !ie}
.submit input{background-position: right top; border:none; padding:0 10px 0 7px; font-size:14px}
.reg{ color:#666; line-height:24px}
.reg .submit{background-position: left -35px; height:35px}
.reg .submit input{background-position: right -35px; font-weight:700; color:#fff; height:35px}
.reg-auto{ padding:10px 0 0 20px}
.reg-auto p{ margin-bottom:10px; color:#666;}
.col-1{position:relative; float:right; border:1px solid #c4d5df; zoom:1;background: url(<?php echo $this->staticUrl; ?>kidsedu/images/member/member_title.png) repeat-x; width:310px; margin: auto; height:304px}
.col-1 span.o1,
	.col-1 span.o2,
	.col-1 span.o3,
	.col-1 span.o4{position:absolute;width:3px;height:3px;background: url(<?php echo $this->staticUrl; ?>kidsedu/images/fillet.png) no-repeat}
	.col-1 span.o1{background-position: left -6px; top:-1px; left:-1px}
	.col-1 span.o2{background-position: right -6px; top:-1px; right:-1px}
	.col-1 span.o3{background-position: left bottom; bottom:-1px; left:-1px}
	.col-1 span.o4{background-position: right bottom; bottom:-1px; right:-1px;}
.col-1 .title{color:#386ea8; padding:5px 10px 3px}
.col-1 div.content{padding:0px 10px 10px}
.col-1 div.content h5{background: url(<?php echo $this->staticUrl; ?>kidsedu/images/member/ext-title.png) no-repeat 2px 10px; height:34px}
.col-1 div.content h5 strong{ visibility: hidden}
.pass-logo{ margin:auto; width:261px; padding-top:15px}
.pass-logo a img{ border:1px solid #ddd}
.pass-logo a{border:3px solid #fff}
.pass-logo a.logo,
.pass-logo a:hover{border:3px solid #e8f1f1;}
.pass-logo p{border-top: 1px solid #e1e4e8; padding-top:15px}
.item{padding:10px 0; vertical-align:middle; margin-bottom:10px}
.item span{ color:#8c8686}

#footer{color:#666; line-height:24px;width:920px; margin:auto; text-align:center; padding:12px 0; margin-top:52px; border-top:1px solid #e5e5e5}
#footer a{color:#666;}

.point{border:1px solid #ffbf7a; background:#fffced; margin-bottom:10px; margin-right:100px;margin-left:50px;position:relative}
.point .content{padding:8px 10px;}
.point .content .title{color:#ff8400}
.point .content p{color:#777; text-indent:20px}
.point span.o1,
	.point span.o2,
	.point span.o3,
	.point span.o4{position:absolute;width:3px;height:3px;background: url(<?php echo $this->staticUrl; ?>kidsedu/images/fillet.png) no-repeat; overflow:hidden}
	.point span.o1{background-position: left top; top:-1px; left:-1px}
	.point span.o2{background-position: right top; top:-1px; right:-1px}
	.point span.o3{background-position: left -3px; bottom:-1px; left:-1px}
	.point span.o4{background-position: right -3px; bottom:-1px; right:-1px;}
.submit button.hqyz{margin:0px; padding:0px; border:none; cursor:pointer; }
.submit button.hqyz{
    background-position: 100% 0%;
    border: medium none;
    font-size: 12px;
    padding: 0 10px 0 7px;
}
.submit button.hqyz{
    background: url("<?php echo $this->staticUrl; ?>kidsedu/images/member/but.png") no-repeat 100% 0px;
    height: 29px;
    width: auto;
	
}
#mobile_div input{*margin-bottom:12px;*_padding:0px 0px 6px 0px}
</style>
</head>
<body>
<div id="header"><div class="content"><div class="logo"><img src="<?php echo $this->staticUrl; ?>kidsedu/images/v9/logo.jpg"/></div><span class="log"></span></div></div>

<div id="content">
	<h2>会员注册&nbsp;&nbsp;&nbsp;&nbsp;<span class="on"><em>1</em>填写信息</span></h2>
	<form id="form1" action="" method="post">
	<input type="hidden" name="hasEmail" value="yes" />
	<input type="hidden" name="hasUsername" value="yes" />
	<div class="col-left form-login form-reg">
    	<div class="input">
			<label>用户名：</label><input type="text" class="input-text" size="36" name="username" id="username">
			<div id="usernameTip"></div>
		</div>
        <div class="input">
			<label>密码：</label><input type="password" class="input-text" size="36" name="password" id="password">
			<div id="passwordTip"></div>
		</div>
        <div class="input">
			<label>确认密码：</label><input type="password" class="input-text" size="36" id="password2" name="password2">
			<div id="password2Tip"></div>
		</div>
        <div class="input">
			<label>邮箱：</label><input type="text" class="input-text" size="36" name="email" id="email">
			<div id="emailTip" class="onError">邮箱应该为2-32位之间</div>
		</div>					
        <div class="reg">
            <div class="submit"><input type="submit" value="同意注册协议，提交注册" name="dosubmit"></div><br>
            <input type="checkbox" value="" id="protocol" name="protocol"><a class="blue" onclick="show_protocol();return false;" href="javascript:void(0);">点击阅读注册协议</a>
            <div id="protocoltip" class="onShow">请阅读协议</div>
		</div>
    </div>
	</form>

    <div class="col-auto reg-auto">
    	<p class="f14">已经有了账号？<br>请直接登录</p>
        <div class="submit"><input type="submit" onclick="redirect('<?php echo $this->baseUrl . $this->prefix; ?>/login/')" value="登录" name="dosubmit"></div>
    </div>
</div>
<?php echo $this->load->view($this->prefix . '/footer');