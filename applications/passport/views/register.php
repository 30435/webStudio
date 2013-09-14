<?php echo $this->load->view('header'); ?>
<script language="javascript" type="text/javascript">
setNav(1);
selectFast();
selectNoRealName();
</script>
<div class="min-body">
    <div class="min-content back">
    <form autocomplete="off" id="registerForm" name="registerForm" method="post" action="<?php echo $this->baseUrl . $this->prefix . '/register/'; ?>" >
        <input type="hidden" id="haveEmail" name="haveEmail" value="no" />
		<input type="hidden" id="haveUsername" name="haveUsername" value="no" />
        <input type="hidden" id="haveRealName" name="haveRealName" value="no" />
        <div class='new-nav'>
            <ul id="usenamelist">
                <li><a href="javascript: selectFast(); void(0);" class="nav-box cur" id="selectFast" hidefocus="true"><span class='title'><i class="spmm"></i>知金号</span><span class='tip'>自动分配帐号，快速注册</span></a></li>
				<li><a class="nav-box " href="javascript: selectSelf(); void(0);" id="selectSelf"><span class="title"><i class="spself"></i>自定义<i class="new"></i></span><span class="tip">用喜欢的字符注册，简单好记</span></a></li>
                <li><a href="javascript: selectEmail(); void(0);" class="nav-box" id="selectEmail" hidefocus="true"><span class='title'><i class='spemail'></i>邮箱帐号</span><span class='tip'>用邮箱地址注册，便于记忆</span></a></li>
            </ul>
        </div>
        <div class="reg-box" style="width:700px;overflow:hidden;float:left;margin-left:20px;">
        <div class="reg-top">
			<span class="fright f14" style="margin-right: 50px;" id="selectRealNameBar">建议你进行<a href="javascript: selectRealName(); void(0);" class="green no-underline">实名注册</a></span>
			<span class="fright f14" style="margin-right: 50px; display: none;" id="selectNoRealNameBar">您也可以<a href="javascript: selectNoRealName(); void(0);" class="green no-underline">不实名注册</a></span>
			<span class="fleft fb" id="J_quick_tip">快速注册知金号，开始快乐之旅</span>
		</div>
        <div style="position:relative;"></div>

		<div id="registerWithUsername" style="display:none">
		<div id="usernamenote" class="comm-error ps-error"><span></span></div>
		<div class="reg-row">
            <label class="label">自定义帐号：</label>
            <div class="reg-div">
                <span id="J_pwd_tip" class="reg-span">自定义帐号由6-20个字符组成，可用数字、字母、下划线</span>
                <input type="text" name="username" id="username" class="reg-input" onMouseDown="$('#username').css('opacity','1');" onBlur="checkusername(this.value);" />
				<input type="hidden" id="usernametip" value="no" />
            </div>
       </div>
	   </div>

		<div id="registerWithEmail" style="display: none">
		<div class="comm-error ps-error" id="emailnote"><span id="emailnote"></span></div>
        <div class="reg-row">
            <label class="label">注册邮箱：</label>
            <div class="reg-div">
                <span class="reg-span" id="J_pwd_tip">请输入你的常用邮箱</span>
                <input type="text" class="reg-input" id="email" name="email" onMouseDown="$('#email').css('opacity','1');" onBlur="checkemail(this.value);"/>
				<input type="hidden" id="emailtip" value="no" />
            </div>
        </div>
        <div class="select-email" id="select_email" style="margin-left: 207px;margin-top: -25px;"></div>
		</div>

        <div class="comm-error ps-error" id="passwordnote" style="margin-top:-28px;"><span></span></div>
        <div class="reg-row">
            <label class="label">设置密码：</label>
            <div class="reg-div">
				<span class="reg-span" id="J_pwd_tip">密码由6-16个字符组成，可用数字、字母下划线</span>
				<input type="password" class="reg-input" onMouseDown="$('#password').css('opacity','1');" id="password" name="password" onBlur="checkpassword(this.value);" />
				<input type="hidden" id="passwordtip" value="no" />
			</div>
        </div>
        <!--<div class="reg-row"  id="J_safe_box" style="margin-left: 103px;"><i id="J_safe_level" class="fleft safe-none">&nbsp;&nbsp;</i></div>-->
        <div class="comm-error ps-error"id="password2note"><span></span></div>
        <div class="reg-row" style="margin-bottom:30px;">
            <label class="label">确认密码：</label>
            <div class="reg-div">
				<span class="reg-span">请再次输入密码</span>
				<input type="password" style="line-height:34px;" onMouseDown="$('#password2').css('opacity','1');" class="reg-input" name="cfmpwd" id="password2" onBlur="checkpassword2(this.value);" />
				<input type="hidden" id="password2tip" value="no" />
			</div>
        </div>

		<div id="registerWithRealName" style="display: none">
        <div class="reg-row">
            <label class="label">真实姓名：</label>
            <div class="reg-div">
                <input type="text" class="reg-input" maxlength="5" id="truename" name="truename" value=""/>
            </div>
        </div>
        <div class="comm-error ps-error" style="margin-left:227px" id="J_error_idnumber" ><span></span></div>
        <div class="reg-row">
            <label class="label">身份证号：</label>
            <div class="reg-div">
                <input type="text" class="reg-input" name="idcard" id="idcard" value=""/>
            </div>
        </div>
        <div class="reg-tip"><span>请一定要准确填写自己的身份证号，如果没有，可以向爸爸妈妈借看下！</span></div>
		</div>

        <div class="comm-error ps-error"id="seccodenote"><span></span></div>
        <div class="rsess-row">
            <label class="label">验证码：</label>
            <div class="reg-div"><input name=seccode type="text" id="seccode" size="6" maxlength="4" onBlur="checkseccode(this.value);" class="reg-sec"/></div>
            <div class="reg-img pointer" id="seccode_img_tip">
				<img style="width:100px;" src="<?php echo $this->baseUrl; ?>admin/index/checkcode" onClick="this.src=this.src+'/'+Math.random()"  id="seccode_img" alt="换一张"/>
				<a href="javascript:document.getElementById('seccode_img').src='<?php echo $this->baseUrl; ?>admin/index/checkcode'+'/'+Math.random();void(0);" id="J_change_sess" class="gray f12">换一个</a>
			</div>
        </div>

        <div class="comm-error ps-error" style="margin-left:198px;*margin-left:0px;" id="J_error_agree"><span></span></div>
        <div class="check-row">
            <div id="J_check_box" class="check"><input type="hidden" id="J_agree" name="agree" value='1' class="reg-check"/></div>
            <span class="gray che-span">我已阅读并同意《<a href="http://www.61.com/about/service.html" class="fb gray no-underline">淘米网服务条款</a>》</span>
        </div>
        <div id="J_submit" class="reg-botton pointer"><span class="f16b" onclick="register();">立即注册</span></div>
        </div>
    </form>
    </div>
</div>
<div class="foot-img"></div>
<div class="alter-box" id="J_alter_email" style="width:400px;">
	<div class="top">
        <div class="inner" style="float:left;"><span>验证注册邮箱</span></div>
        <a class="off" href="javascript:void(null);" id="close_btn"></a>
    </div>
    <div class="body">
        <div class="reg-box" style="margin-left:20px;margin-top:0;">
            <p class="rs-tip">请进入你的邮箱<span id="J_review_email" class="orange"></span>,继续完成注册。<br/>如果发现邮箱不正确，点此<a class="orange no-underline" href="javascript:void(null);" id="J_change_email" >更换邮箱</a></p>
	        <input type="hidden" id="J_email_url">
	        <div id="J_app_email_btn" class="a-botton pointer" style="margin-left:110px;margin-top:20px;"><span class="f14">立即进入邮箱</span></div>
        </div>
    </div>
</div>

<?php echo $this->load->view('footer'); ?>