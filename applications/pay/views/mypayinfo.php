<?php echo $this->load->view('header_cfront'); ?>
<div class="my_main account_main">
	<?php echo $this->load->view('mypay_left'); ?>
	<div class="main_cont">
		<div class="main_title"><p><span>我的充值中心</span></p></div>
            <div class="form">
            <form>
                <ul class="form_list">
                    <li class="form_list_li"><label class="lbl">帐号：</label><div class="txt_wrap"><b class="font_14"><?php echo $this->loginedUserInfo['username']; ?></b></div></li>
                    <li class="form_list_li"><label class="lbl">帐户余额：</label><div class="txt_wrap"><b class="font_14"><?php if (isset($this->moneyInfo['money'])) echo $this->moneyInfo['money']; ?></b>&nbsp;&nbsp;诺币</div></li>
                </ul>
            </form>
        </div>
    </div>
</div>
<?php echo $this->load->view('footer_cfront'); ?>