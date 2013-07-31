<?php $this->load->view('sshop/header'); ?>
<script src="<?php echo $this->staticUrl; ?>common/script/member.js" type="text/javascript" language="javascript"></script>
<div id="bd">
	<div class="block950 block1">
		<div class="usBox">
			<div class="usBox_2 clearfix">
				<div class="logtitle3"></div>
				<form style="width:400px;float:left;" onsubmit="return register();" name="registerform" method="post" id="registerform" action="<?php echo $this->baseUrl; ?>index/register/">
					<table width="100%" cellspacing="3" cellpadding="5" border="0" align="left">
						<tbody>
							<tr>
								<td width="33%" align="right">用户名</td>
								<td width="87%">
									<input type="text" class="inputBg" name="username" value="" id="regusername" onBlur="checkusername(this.value);" size="25">
									<input type="hidden" id="username" value="no" />
									<span style="color:#FF0000" id="usernamenote"> * </span>
								</td>
							</tr>
							<tr>
								<td align="right">email</td>
								<td>
									<input type="text" class="inputBg" name="email" value="" id="regemail" onBlur="checkemail(this.value);" size="25" />
									<input type="hidden" id="email" value="no" />
									<span style="color:#FF0000" id="emailnote"> * </span>
								</td>
							</tr>
							<tr>
								<td align="right">密码</td>
								<td>
									<input type="password" style="width:179px;" class="inputBg" name="password" value="" id="regpassword" onBlur="checkpassword(this.value);" />
									<input type="hidden" id="password" value="no" />
									<span id="passwordnote" style="color:#FF0000"> * </span>
								</td>
							</tr>
							<!--<tr>
								<td align="right">密码强度</td>
								<td>
									<table width="145" cellspacing="0" cellpadding="1" border="0">
										<tbody>
											<tr align="center">
												<td width="33%" id="pwd_lower">
													弱
												</td>
												<td width="33%" id="pwd_middle">
													中
												</td>
												<td width="33%" id="pwd_high">
													强
												</td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>-->
							<tr>
								<td align="right">确认密码</td>
								<td>
									<input type="password" style="width:179px;" class="inputBg" name="password2" value="" id="regpassword2" onBlur="checkpassword2(this.value);" />
									<input type="hidden" id="password2" value="no" />
									<span id="password2note" style="color:#FF0000"> * </span>
								</td>
							</tr>
							<!--<tr>
								<td align="right" id="extend_field5i">
									手机
								</td>
								<td>
									<input type="text" class="inputBg" size="25" name="extend_field5">
									<span style="color:#FF0000">
										*
									</span>
								</td>
							</tr>
							<tr>
								<td align="right">
									密码提示问题
								</td>
								<td>
									<select name="sel_question">
										<option value="0">
											请选择密码提示问题
										</option>
										<option value="friend_birthday">
											我最好朋友的生日？
										</option>
										<option value="old_address">
											我儿时居住地的地址？
										</option>
										<option value="motto">
											我的座右铭是？
										</option>
										<option value="favorite_movie">
											我最喜爱的电影？
										</option>
										<option value="favorite_song">
											我最喜爱的歌曲？
										</option>
										<option value="favorite_food">
											我最喜爱的食物？
										</option>
										<option value="interest">
											我最大的爱好？
										</option>
										<option value="favorite_novel">
											我最喜欢的小说？
										</option>
										<option value="favorite_equipe">
											我最喜欢的运动队？
										</option>
									</select>
								</td>
							</tr>
							<tr>
								<td align="right">
									密码问题答案
								</td>
								<td>
									<input type="text" maxlengt="20" class="inputBg" size="25" name="passwd_answer">
								</td>
							</tr>-->
							<tr>
								<td>
									&nbsp;
								</td>
								<td>
									<label>
										<input type="checkbox" checked="checked" value="1" name="agreement">
										我已看过并接受《
										<a target="_blank" style="color:blue" href="/article.php?cat_id=-1">
											用户协议
										</a>
										》
									</label>
								</td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td align="left">
									<input type="hidden" value="act_register" name="act">
									<input type="hidden" value="" name="">
									<input type="submit" class="us_Submit_reg" value="" name="Submit">
								</td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td align="left">
									<a rel="nofollow" class="f6" href="/user.php?act=qpassword_name">密码问题找回密码</a>
									<a rel="nofollow" class="f6" href="/user.php?act=get_password">注册邮件找回密码</a>
								</td>
							</tr>
						</tbody>
					</table>
				</form>
				<div style="float:left; width:410px;  border:1px solid #A10000; margin:0 0 0 60px;">
					<table>
						<tbody>
							<tr>
								<td>
									会员必读：
								</td>
							</tr>
							<tr>
								<td>
									1、注册就成为UPSEX爱向上会员
								</td>
							</tr>
							<tr>
								<td>
									2、成为会员后，立即送500积分（相当于5元现金），购买时可以抵用现金
								</td>
							</tr>
							<tr>
								<td>
									3、会员每购买一次产品都得到相应的会员积分，积分越多现金抵用越多
								</td>
							</tr>
							<tr>
								<td>
									4、成为会员可享受UPSEX爱向上带给您的丰富活动
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="blank">
	</div>
</div>
<?php $this->load->view('sshop/footer'); ?>