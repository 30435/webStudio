<?php echo $this->load->view('header_base'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo $this->staticUrl; ?>kidsedu/css/admin_personal_base.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->staticUrl; ?>kidsedu/css/admin_form.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->staticUrl; ?>kidsedu/css/admin_personal_reg.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->staticUrl; ?>kidsedu/css/user_footer.css">



</head>
<body>
<div class="headerBox">
	<div class="header">
		<h1><?php echo $this->appInfos['kidsedu']['name']; ?>个人中心</h1>
		<ul class="topNav">
			<li><a hidefocus="true" target="_blank" href="<?php echo $this->appInfos['kidsedu']['url']; ?>kidsedu/">个人中心</a></li>
			<li style="opacity: 1;"><a hidefocus="true" target="_blank" href="<?php echo $this->appInfos['kidsedu']['url']; ?>">中国加盟网</a></li>
		</ul>
	</div>
</div>
<div class="container">
    <div class="regMain">
        <div class="topTitle"><h2>会员注册</h2></div>
        <div class="regBox">
            <div class="formContent">
            <form method="post" action="http://person.jmw.com.cn/registered_check.php" id="regForm">
                <input type="hidden" value="" name="catid" id="catid">
                <p>
                    <em>手机号码：</em>
                    <input type="text" maxlength="11" value="" name="username" id="telphone" class="inp1">
                    <span id="phoneSpan" class="tipsBox"></span>
                </p>
                <p>
                <em>验&nbsp;证&nbsp;码：</em>
                <input type="text" value="" maxlength="6" name="code" id="code" class="inp3" disabled="disabled">
                <input type="text" value="获取验证码" id="checkBtn" class="getCode_btn2" disabled="disabled">
                <span id="codeSpan" class="tipsBox"></span>
            	</p>
                <p>
                    <em>设置登录密码：</em>
                    <input type="password" maxlength="12" value="" name="password" id="password" class="inp1">
                    <span id="pwdSpan" class="tipsBox"></span>
                </p>
                <p>
                    <em>再次输入密码：</em>
                    <input type="password" maxlength="12" value="" name="repassword" id="repassword" class="inp1" disabled="disabled">
                    <span id="rePwdSpan" class="tipsBox"></span>
                </p>
                <p class="submitBtn agree">
                    <em></em>
                    <input type="button" value="" name="" id="submitRegBtn">
                    <span class="treatyLink"><a href="<?php echo $this->categoryInfos[3]['url']; ?>" target="_blank">《<?php echo $this->categoryInfos[3]['catname']; ?>》</a></span>
                </p>
                <input type="hidden" value="0" name="regcookie">
            </form>
            </div>
        </div>
        <!--左侧 end-->
    
        <!--右侧 begin-->
        <div class="sideBar">
            <p>如果您已有《中国加盟网》个人会员账户，请<a href="http://person.jmw.com.cn/login.php">点击这里</a>登录！</p>
        </div>
        <!--右侧 end-->
    
        <div class="clr"></div>
    </div>
</div>
<div class="footer">
    <p>
	<?php foreach (array(2, 3, 4, 19, 20, 21, 22) as $showCatid) { ?>
		<a href="<?php echo $this->categoryInfos[$showCatid]['url']; ?>" title="<?php echo $this->categoryInfos[$showCatid]['catname']; ?>"><?php echo $this->categoryInfos[$showCatid]['catname']; ?></a>|
	<?php } ?>
	</p>
    刊登热线：4000-500-555 咨询电话：010-62168889 中国加盟网友情提示：多打电话、多咨询、实地考察，可降低投资风险<br>
    厦门翔通动漫有限公司 闽ICP备12016397 
</div>
</body>
</html>