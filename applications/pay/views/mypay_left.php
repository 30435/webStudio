<div class="main0_nav account_nav">
	<ul>
		<li class="li_lv_1 <?php if ($this->method == 'mypayinfo') echo 'cur'; ?>"><a href="<?php echo $this->baseUrl; ?>index/mypayinfo"><span>我的余额</span></a></li>
		<li class="li_lv_1 <?php if ($this->method == 'myaccount') echo 'cur'; ?>"><a href="<?php echo $this->baseUrl; ?>index/myaccount"><span>我的充值</span></a></li>
		<li class="li_lv_1 <?php if ($this->method == 'mypay') echo 'cur'; ?>"><a href="<?php echo $this->baseUrl; ?>index/mypay"><span>我的支付</span></a></li>
	</ul>
</div>