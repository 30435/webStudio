<?php echo $this->load->view($this->prefix . '/header'); ?>
<div class="dl_main">
	<div class="dl_main_l fl"><img src="<?php echo $this->staticUrl; ?>cfront/images/dly.png" /></div>
    <div class="dl_main_r fl">
    	<div class="dl_main_r_con">
            <span>登录</span>
          <input type="text" value="输入诺瓦号或邮箱" class="dl_yhm"/>
            <input type="text" value="输入登录密码" class="dl_mm"/>
            <p class="dl_but"><a href="#" >登&nbsp;录</a></p>
            <p class="dl_xz"><a href="#">申请诺瓦号</a><a href="#">忘记密码</a></p>
        </div>
    </div>
</div>
<?php echo $this->load->view($this->prefix . '/footer'); ?>