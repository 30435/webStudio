<?php echo $this->load->view('header_cfront'); ?>
<script language="javascript" type="text/javascript" src="<?php echo $this->staticUrl; ?>common/script/member.js"></script>
<div class="min-content back">
	<div class="zc_main_r_con">
	<form autocomplete="off" id="editpasswordform" name="editpasswordform" method="post" action="<?php echo $this->baseUrl . $this->prefix . '/editpwd/'; ?>" >
		<div class="zc_reg_top xg">修改密码>设置新密码</div>
		<div class="reg_row"><label class="lable">输入旧密码：</label><div class="reg_div"><input type="password" id="oldpassword" name="oldpassword" onblur="checkoldpassword(this.value);" class="zc_reg" /><input type="hidden" id="oldpasswordtip" value="no" /></div></div>
		<div class="reg_row"><label class="lable">输入新密码：</label><div class="reg_div"><input type="password" id="password" name="password" onBlur="checkpassword(this.value);" class="zc_reg" /><input type="hidden" id="passwordtip" value="no" /></div></div>
		<div class="reg_row"><label class="lable">确认密码：</label><div class="reg_div"><input type="password" name="password2" id="password2" onBlur="checkpassword2(this.value);" class="zc_reg" /><input type="hidden" id="password2tip" value="no" /></div></div>
		<div class="reg_botton"><a href="javascript: editpassword();void(0);" class="ljzc">确&nbsp;定</a></div>
	</form>
	</div>
</div>
<?php echo $this->load->view('footer_cfront'); ?>