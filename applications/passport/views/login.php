<?php $this->load->view('sshop/header'); ?>
<script src="<?php echo $this->staticUrl; ?>common/script/member.js" type="text/javascript" language="javascript"></script>
<div id="bd">
	<div class="block950 block1">
		<div class="usBox clearfix">
			<div class="usBox_1 f_l">
				<div class="logtitle"></div>
				<div style="color:#ac0136; font-size:14px;  padding:30px 20px 10px 30px;">已注册用户请从这里登录</div>
				<form onsubmit="return userLogin()" method="post" action="<?php echo $this->baseUrl; ?>index/login" name="loginform" id="loginform">
					<table width="100%" cellspacing="5" cellpadding="3" border="0" align="left" class="user_table">
						<tbody>
							<tr>
								<td width="15%" align="right">用户名</td>
								<td width="85%">
									<input type="text" class="inputBg" name="username" id="regusername" onBlur="loginusername(this.value);" />
									<input type="hidden" id="username" value="no" />
									<span id="usernamenote">请输帐号</span>
								</td>
							</tr>
							<tr>
								<td align="right">密码</td>
								<td>
									<input type="password" class="inputBg" name="password" id="regpassword" onBlur="loginpassword(this.value);" />
									<input type="hidden" id="password" value="no" />
									<span id="passwordnote">请输入密码</span>
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<input type="checkbox" id="setcookie" name="setcookietime" value="1">
									<label for="remember">请保存我这次的登录信息。</label>
								</td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td align="left">
									<input type="hidden" value="" name="">
									<input type="submit" class="us_Submit" value="" name="submit">
								</td>
							</tr>
							<tr>
								<td></td>
								<td style="padding-top:10px;">
									<a class="f3" href="<?php echo $this->baseUrl; ?>index/getpwd">密码问题找回密码</a>&nbsp;&nbsp;&nbsp;
									<a class="f3" href="<?php echo $this->baseUrl; ?>index/getpwd">注册邮件找回密码</a>
								</td>
							</tr>
						</tbody>
					</table>
				</form>
				<div class="blank"></div>
			</div>
			<div class="usTxt">
				<div class="regtitle"></div>
				<div style="padding-left:50px; padding-top:25px;">
					<p style="color:#ac0136; font-size:14px; ">如果您不是会员，请注册</p><br>
					<strong class="f4">友情提示：</strong><br>
					不注册为会员也可在本店购买商品 <br>
					但注册之后您可以： <br>
					1. 保存您的个人资料 <br>
					2. 收藏您关注的商品 <br>
					3. 享受会员积分制度 <br>
					4. 订阅本店商品信息 <br>
					<a href="<?php echo $this->baseUrl; ?>index/register"><img src="<?php echo $this->staticUrl; ?>sshop/themes/moonbasa/images/bnt_ur_reg.gif"></a>
				</div>
			</div>
		</div>
	</div>
	<div class="blank"></div>
</div>
<?php $this->load->view('sshop/footer'); ?>