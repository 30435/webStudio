<?php echo $this->load->view('header'); ?>
<div class="container cf">
    <div class="main account_main">
        <div class="main_nav account_nav">
            <ul>
    	        <li class="li_lv_1 cur"><a href="<?php echo $this->baseUrl; ?>index/mypay"><span>我的充值中心</span></a></li>
                <li class="li_lv_1"><a href="<?php echo $this->baseUrl; ?>index/myaccount"><span>交易明细查询</span></a></li>
                <li class="li_lv_1"><a href="<?php echo $this->baseUrl; ?>index/mypaypwd"><span>支付密码管理</span></a></li>
                <li class="li_lv_1"><a href="<?php echo $this->baseUrl; ?>index/mypaymonth"><span>我开通的服务</span></a></li>
            </ul>
        </div>
		<div class="main_cont">
            <div class="main_title"><p><span>我的充值中心</span></p></div>
            <div class="form">
            <form>
                <ul class="form_list">
                    <li class="form_list_li"><label class="lbl">帐号：</label><div class="txt_wrap"><b class="font_14"><?php echo $this->loginedUserInfo['username']; ?></b></div></li>
                    <li class="form_list_li"><label class="lbl">帐户余额：</label><div class="txt_wrap"><b class="font_14"><?php if (isset($this->moneyInfo['money'])) echo $this->moneyInfo['money']; ?></b>&nbsp;&nbsp;诺币</div></li>
                    <li class="form_list_li"><label class="lbl">已开通服务：</label><div class="service service_small"><ul class="service_list cf"><li>暂无开通的服务</li></ul></div></li>
                    <li class="form_list_li"><label class="lbl">米币帐户支付密码：</label><p>未设置  &nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo $this->baseUrl; ?>index/mypaypwd" class="link_create">创建</a></p></li>
                </ul>
            </form>
        </div>
    </div>
</div>
<?php echo $this->load->view('footer'); ?>