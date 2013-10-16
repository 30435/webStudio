<?php echo $this->load->view('header_cfront'); ?>
<div class="min-body">
    <div class="min-content back">
	    <div class="min-head">
		    <div class="top-tip">
		        <div class="head-row">
			        <i class="fleft t-user">&nbsp;&nbsp;</i>
			        <span class="mimi-span">知金号：<span class="fb-ar"><?php echo $this->loginedUserInfo['username']; ?></span></span>
			        <a class="fright green" style="margin-right:104px;" href="/user/getVerify">进行实名认证</a>
		        </div>
		        <div class="head-row">
			        <div class="fleft">
				        <span class="fleft mimi-span">帐号安全等级：<span class="fb-ar">20分</span></span>
						<div style="margin-left:10px;" class="fleft"> 													  
							<i class="star-orange fleft">&nbsp;&nbsp;</i>
							<i class="star-gray fleft">&nbsp;&nbsp;</i>
							<i class="star-gray fleft">&nbsp;&nbsp;</i>
							<i class="star-gray fleft">&nbsp;&nbsp;</i>
							<i class="star-gray fleft">&nbsp;&nbsp;</i>
						</div>
				        <div style="line-height:30px;" class="clear"><span>在你的细心呵护下，你的米米号暂时处于安全状态</span></div>
			        </div>
	                <i style="margin-left:165px;" class="fleft face-red">&nbsp;&nbsp;</i>
				</div>
		    </div>
	    </div>
	    <div class="min-foot fb"> 你的帐号存在<span class="red">4</span>项风险</div>
		    <div class="min-foot">
			    <i class="fleft ico-pwd">&nbsp;&nbsp;</i>
	            <i class="fleft mark-gray">&nbsp;&nbsp;</i>
			    <span class="fleft">密码强度较低</span>
			    <a class="fright a-botton" href="/change">立即修改</a>
		    </div>
			<div class="min-foot">
			    <i class="fleft ico-mbq">&nbsp;&nbsp;</i>
            	<i class="fleft mark-gray">&nbsp;&nbsp;</i>
			    <span class="fleft">设置密保问题</span>
			    <a class="fright a-botton" href="/protect/show_set_question">立即设置</a>
		    </div>
			<div class="min-foot">
			    <i class="fleft ico-email">&nbsp;&nbsp;</i>
            	<i class="fleft mark-gray">&nbsp;&nbsp;</i>
			    <span class="fleft">设置登录邮箱</span>
			    <a class="fright a-botton" href="/protect/show_set_email">立即设置</a>
		    </div>
			<div class="min-foot">
			    <i class="fleft ico-mbk">&nbsp;&nbsp;</i>
            	<i class="fleft mark-gray">&nbsp;&nbsp;</i>
			    <span class="fleft">绑定密保卡</span>
			    <a class="fright a-botton" href="/protect/show_set_mmk">立即设置</a>
		    </div>
		</div>
	</div>
</div>
<?php echo $this->load->view('footer_cfront'); ?>