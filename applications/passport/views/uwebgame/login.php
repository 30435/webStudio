<?php echo $this->load->view($this->prefix . '/header'); ?>
<div class="dl_main">
	<div class="dl_main_l fl"><img src="<?php echo $this->staticUrl; ?>cfront/images/dly.png" /></div>
    <div class="dl_main_r fl">
	<form action="<?php echo $this->baseUrl . $this->prefix; ?>/login/" method="post" accept-charset="utf-8" name="loginform" id="loginform"> 
    	<div class="dl_main_r_con">
            <span>登录</span>
            <input type="text" value="" name="username" id="username" class="dl_yhm"/>
            <input type="password" value="" name="password" id="password" class="dl_mm"  />
            <p class="dl_but"><a href="javascript: login(); void(0);" >登&nbsp;录</a></p>
            <p class="dl_xz"><a href="<?php echo $this->baseUrl . $this->prefix; ?>/register">申请诺瓦号</a><a href="<?php echo $this->baseUrl . $this->prefix; ?>/getpwd">忘记密码</a></p>
        </div>
	</form>
    </div>
</div>
<?php echo $this->load->view($this->prefix . '/footer'); ?>