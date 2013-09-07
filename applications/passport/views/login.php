<?php echo $this->load->view('header'); ?>
<div class="min-body" style="height:411px;margin-bottom: -8px;">
    <div class="min-content has-background">
	    <span class="hack-span"></span>
	    <div class="login">
		<form action="<?php echo $this->baseUrl; ?>index/login/" method="post" accept-charset="utf-8" name="loginform" id="loginform"> 
		    <div class="inputout-first">
			    <div class="comm-error ps-error" id="usernamenote" style="margin-left:25px;*margin-left:-10px;"><span></span></div>
	            <i class="fimg l-user">&nbsp;&nbsp;</i><span class="t-span">输入米米号或邮箱</span>
				<input type="text" tabindex="1" class="text-input" name="username" id="username" onBlur="$('#username').css('opacity','1');" onMouseDown="$('#username').css('opacity','1');" value="" style="opacity: 0.58;" />
				<div id="select_userid" class="select-div"><div class="select-option">96278713</div></div>
				<div class="rimg"/></div>
		    </div>
		    <div class="inputout-two">
		        <div class="comm-error ps-error" id="passwordnote" style="margin-left:25px;*margin-left:-10px;"><span></span></div>
	            <i class="fimg l-pwd">&nbsp;&nbsp;</i><span class="t-span">输入登录密码</span>
			    <input type="password" value="" name="password" id="password" onBlur="$('#password').css('opacity','1');" onMouseDown="$('#password').css('opacity','1');" style="width:134px;position:relative;" class="text-input" tabindex="2"/>
			    <input type="text" value="" id="J_user_pwd1" style="width:134px;display:none;position:relative;opacity:1;" class="text-input" tabindex="2"/>
				<label class='ab_label'><input type='checkbox' value="1" id="J_show_passwd1"/><span>显示</span></label>
			</div>
			<div id="sesscode1" class="sesscode hidden">
				<div class="comm-error ps-error" id="J_error_sec1" style="margin-left:25px;"><span></span></div>
				<span class="s-span">输入验证码</span><input type="text" class="ses-text" maxlength="4"  id="seccode_text1" tabindex="3" />
				<img src="<?php echo $this->baseUrl; ?>/admin/index/checkcode" onClick="this.src=this.src+'/'+Math.random()" id="verify_img_login1" class="ses-img" alt="换一张"/>
				<a href="javascript:document.getElementById('seccode_img').src='<?php echo $this->baseUrl; ?>admin/index/checkcode'+'/'+Math.random();void(0);" class="ses-a gray no-underline">换一个</a>
			</div>
			<div class="botton f16b" id="J_login1" onClick="javascript: login(); "><span>登&nbsp;录</span></div>
			<span class="a-span"><a href="/index/register" class="no-underline">申请米米号</a>&nbsp;&nbsp; |  &nbsp;&nbsp;<a href="/index/getpwd" class="no-underline">忘记密码</a></span>
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
<?php echo $this->load->view('footer'); ?>