<?php echo $this->load->view($this->prefix . '/header'); ?>
<?php
$secureField = array('mobile', 'username', 'email', 'truename');
$topNav = '';
if (empty($this->loginedUserInfo['mobile'])) {
	$topNav .= '<li style="position:relative;"><a title="去绑定密保手机" target="_blank" href="/protect/show_set_phone"><i style="right: -8px;top: -19px;" class="hot"></i><i class="list_em gray_ph"></i><div>密保手机</div></a></li>';
} else {
	$topNav .= '<li style="position:relative;"><a class="pnormal" href="javascript:;"><i title="186***134" class="list_ph"></i><div>密保手机</div></a></li>';
}
?>
<div class="min-body">
    <div class="min-content back">
	    <div class="min-head">
		    <div class="top-tip">
		        <div class="head-row">
			        <div class="luser_left"><i class="fleft t-guser">&nbsp;&nbsp;</i><span class="mimi-span">知金号：<span class="fb-ar"><?php echo $this->loginedUserInfo['username']; ?></span></span></div>
			        <div class="list_cont">
				        <ul>
							<li style="position:relative;"><a class="pnormal" href="javascript:;"><i title="186***134" class="list_ph"></i><div>密保手机</div></a></li>
						    <li><a title="lilongdi" class="pnormal" href="javascript:;"><i class="list_self"></i><div>自定义帐号</div></a></li>
						    <li><a title="去设置密保问题" target="_blank" href="/protect/show_set_question"><i class="list_qu gray_qu"></i><div>密保问题</div></a></li>
						    <li><a title="去绑定密保邮箱" target="_blank" href="/protect/show_set_email"><i class="list_em gray_em"></i><div>密保邮箱</div></a></li>
						    <!--<li><a title="去绑定密保卡" target="_blank" href="/protect/show_set_mmk"><i class="list_mmk gray_mmk"></i><div>密保卡</div></a></li>-->
						    <li><a title="去进行实名认证" target="_blank" href="/user/getVerify"><i class="list_id gray_id"></i><div>实名认证</div></a></li>
				        </ul>
			        </div>
		        </div>
		        <div class="head-row">
			        <div class="fleft">
						<span class="fleft mimi-span">帐号安全等级：<span class="fb-ar">30分</span></span>
						<div style="margin-left:10px;" class="fleft">
							<i class="star-orange fleft">&nbsp;&nbsp;</i>
							<i class="star-half-orange fleft">&nbsp;&nbsp;</i>
							<i class="star-gray fleft">&nbsp;&nbsp;</i>
							<i class="star-gray fleft">&nbsp;&nbsp;</i>
							<i class="star-gray fleft">&nbsp;&nbsp;</i>
						</div>
						<div style="line-height:30px;" class="clear"><span>你的帐号安全级别非常低，存在严重的盗号风险哟，请尽快设置密码保护</span></div>
					</div>
					<i style="margin-left:165px;" class="fleft face-red">&nbsp;&nbsp;</i>
				</div>
			</div>
		</div>
		<div class="min-foot fb">你的帐号存在<span class="red">4</span>项风险</div>
		<div class="min-foot">
			<i class="fleft ico-pwd">&nbsp;&nbsp;</i>
			<i class="fleft mark-gray">&nbsp;&nbsp;</i>
			<span class="fleft">密码强度较低</span>
			<a target="_blank" class="fright a-botton" href="/change">立即修改</a>
		</div>
		<div class="min-foot">
			<i class="fleft ico-mbq">&nbsp;&nbsp;</i>
			<i class="fleft mark-gray">&nbsp;&nbsp;</i>
			<span class="fleft">设置密保问题</span>
			<a target="_blank" class="fright a-botton" href="/protect/show_set_question">立即设置</a>
		</div>
		<div class="min-foot">
			<i class="fleft ico-email">&nbsp;&nbsp;</i>
			<i class="fleft mark-gray">&nbsp;&nbsp;</i>
			<span class="fleft">设置登录邮箱</span>
			<a target="_blank" class="fright a-botton" href="/protect/show_set_email">立即设置</a>
		</div>
		<!--<div class="min-foot">
			<i class="fleft ico-mbk">&nbsp;&nbsp;</i>
			<i class="fleft mark-gray">&nbsp;&nbsp;</i>
			<span class="fleft">绑定密保卡</span>
			<a target="_blank" class="fright a-botton" href="/protect/show_set_mmk">立即设置</a>
		</div>-->
		<div class="min-foot">
			<i class="fleft ico-phone">&nbsp;&nbsp;</i>
			<i class="fleft mark-green">&nbsp;&nbsp;</i>
			<span class="fleft">设置密保手机</span>
			<span class="fright g-span">已设置</span>
		</div>
	</div>
</div>
<?php echo $this->load->view($this->prefix . '/footer'); ?>