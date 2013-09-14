<?php echo $this->load->view('header'); ?>
<script language="javascript" type="text/javascript">
setNav(3);
</script>
<div class="min-body">
	<div class="min-content back">
		<div class="lit-top">
			<span class="tip">修改密码&nbsp;&gt;&nbsp;<span class="gray">设置新密码</span></span>
		</div>
		<form autocomplete="off" id="editpasswordform" name="editpasswordform" method="post" action="<?php echo $this->baseUrl . $this->prefix . '/editpwd/'; ?>" >
		<div class="reg-box">
			<div style="position: relative;"></div>
			<div style="display: none;" id="oldpasswordnote" class="comm-error ps-error"><span></span></div>
			<div class="reg-row">
	            <label class="label">输入旧密码：</label>
	            <div class="reg-div">
	                <input type="password" id="oldpassword" name="oldpassword" onblur="checkoldpassword(this.value);" class="reg-input" style="opacity: 1;">
					<input type="hidden" id="oldpasswordtip" value="no" />
	            </div>
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
	        <div class="comm-error ps-error"id="password2note"><span></span></div>
			<div class="reg-row" style="margin-bottom:30px;">
				<label class="label">确认密码：</label>
				<div class="reg-div">
					<span class="reg-span">请再次输入密码</span>
					<input type="password" style="line-height:34px;" onMouseDown="$('#password2').css('opacity','1');" class="reg-input" name="password2" id="password2" onBlur="checkpassword2(this.value);" />
					<input type="hidden" id="password2tip" value="no" />
				</div>
			</div>
			<div class="a-botton pointer" onclick="editpassword();void(0);" id="modification"><span class="f14">确定</span></div>
	    </div>
		</form>
    </div>
</div>

<?php echo $this->load->view('footer'); ?>