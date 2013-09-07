<?php echo $this->load->view('header'); ?>
<script type="text/javascript" src="<?php echo $this->staticUrl; ?>common/script/jquery.artDialog.js"></script>
<script type="text/javascript" src="<?php echo $this->staticUrl; ?>common/script/pay.js"></script>
<div class="container cf">
	<div class="ui_step ui_step_on_1">
		<div class="ui_step_1 ui_step_on"><i class="ui_step_num ui_step_num_1"><span>1</span></i><span class="ui_step_name">选择兑换游戏</span></div>
		<div class="ui_step_2"><i class="ui_step_num ui_step_num_2"><span>2</span></i><span class="ui_step_name">选择兑换方式</span></div>
		<div class="ui_step_3"><i class="ui_step_num ui_step_num_3"><span>3</span></i><span class="ui_step_name">成功兑换游戏币</span></div>
	</div>

    <div class="main service_main">
		<div class="main_nav service_nav">
			<ul id="paymentLists">
			<?php foreach ($this->paymentInfos as $paymentCode => $paymentInfo) { $paymentStr = json_encode($paymentInfo); ?>
				<li id="<?php echo $paymentCode; ?>PaymentCode">
					<a href='javascript:setPayment(<?php echo $paymentStr; ?>);void(0);'><?php echo $paymentInfo['name']; ?></a>
				</li>
			<?php } ?>
            </ul>
		</div>
		<div class="main_cont">
			<div class="main_title">
				<p><span>你正在使用</span><b id="paymentName"></b><span>充值</span><b>诺币</b></p>
				<div class="ui_mibi"><label>米币帐户余额：</label><b><?php if (isset($this->moneyInfo['money'])) echo $this->moneyInfo['money']; ?><input type="hidden" value="<?php if (isset($this->moneyInfo['money'])) echo $this->moneyInfo['money']; ?>" id="mb_blance_f" name="mb_blance_f"></b><span>米币</span></div>
				<!--<a class="link_inquiry" id="balancePage" href="<?php echo $this->baseUrl; ?>index/myaccount/" target="_blank">诺币余额查询</a>-->
			</div>							
			<div class="form">
			<form method="post" autocomplete="off" action="" target="_blank">    
				<input type="hidden" name="paymentCode" id="paymentCode" />
				<input type="hidden" name="paymentRate" id="paymentRate" />
				<input type="hidden" name="payuserid" id="payuserid" value="<?php if (!empty($this->loginedUserInfo['userid'])) { echo $this->loginedUserInfo['userid']; } ?>" />
				<input type="hidden" name="money" id="money" value="0"/>
				<ul class="form_list">
					<li class="form_list_li">
						<label class="lbl">充值的诺瓦号：</label>
						<div class="txt_wrap">
							<input  class="txt txt_num" name="username" id="username" onblur="checkusername(this.value)" value="<?php if (!empty($this->loginedUserInfo['username'])) { echo $this->loginedUserInfo['username']; } ?>" maxlength="20"/>
							<input type="hidden" name="get_userid" id="getuserid" value="<?php if (!empty($this->loginedUserInfo['userid'])) { echo $this->loginedUserInfo['userid']; } ?>" />
							<input type="hidden" id="usernamevalid" value="<?php if (!empty($this->loginedUserInfo['username'])) { echo 'yes'; } else { echo 'no'; }?>">
							<div class="txt_tips" id="usernamenote" style="display:none;"><i class="ico ico_error_16"></i><span>帐号不存在或被冻结</span><i class="txt_tips_r"></i></div>
							<span id="usernamenoteRight"></span>
						</div>
					</li>
					<li class="form_list_li">
						<label class="lbl">确认充值的诺瓦号：</label>
						<div class="txt_wrap">
							<input value="<?php if (!empty($this->loginedUserInfo['username'])) { echo $this->loginedUserInfo['username']; } ?>"  name="username2" id="musername2" onblur="checkusername2(this.value)" class="txt txt_num" maxlength="20" />
							<input type="hidden" id="username2valid" value="<?php if (!empty($this->loginedUserInfo['username'])) { echo 'yes'; } else { echo 'no'; }?>">
							<div class="txt_tips" id="username2note" style="display:none;"><i class="ico ico_error_16"></i><span></span><i class="txt_tips_r"></i></div>
							<span id="username2noteRight"></span>
						</div>
					</li>
					<li class="form_list_li">
						<label class="lbl">充值诺币数：</label>
						<div class="txt_wrap">
							<input type="text" maxlength="4" onblur="checkmoney(this.value)" class="txt txt_num" style="width:175px;"><span id="moneynoteRight"></span> 诺币
							<div class="txt_tips" id="moneynote" style="display:none;"><i class="ico ico_error_16"></i><span>该项不能为空</span><i class="txt_tips_r"></i></div>
						</div>
					</li>
					<li class="form_list_li">
						<label class="lbl"> 付款金额：</label>
						<span class="orange f16b" style="font-weight: bold;" id="moneyShow"></span> 元 &nbsp;&nbsp;(1人民币等于1诺币)
					</li>
					<li class="form_list_li">
						<a class="ui_btn_large_em" href="javascript: paysubmit(); void(0);" id="nextStep"><span>确定充值</span></a>
					</li>
				</ul>
			</form>
			</div>
			<div class="caption" id="paymentDescription"></div>
		</div>
    </div>
    <div class="sidebar">
    <div class="ui_box">
        <div class="ui_box_hd"><h3>充值问题反馈</h3></div>
        <div class="ui_box_bd">
            <ul class="ui_box_links_list">
            	<li><i class="ico ico_qq_16 vtop"></i><span class="phone_num"><a href='http://login.53kf.com/webCompany.php?arg=10004331&style=1' target='blank'>在线客服</a></span></li>
                <li><i class="ico ico_phone_16 vtop"></i><span class="phone_num">客服电话<b>021-61130888</b></span></li>
                <li><i class="ico ico_message_16"></i><a href="http://kf.61.com" target="_blank">在线提问</a></li>
            </ul>
        </div>
    </div>
    <div class="ad"></div>
</div>
<script language="javascript">
	setPayment(<?php echo $this->showPayment; ?>);
</script>
<?php echo $this->load->view('footer'); ?>