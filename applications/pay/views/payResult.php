
<div id="content" class="clearfix">
<?php if ($this->payResult) { ?>
	<dl class="Recharge_prompt bd clearfix">
		<dt><img src="<?php echo $this->staticUrl; ?>Recharge/images/right.jpg" /></dt>
		<dd>
			<strong class="f20"><?php echo $this->message; ?></strong>
			<p><span>您的充值方式：</span><?php echo $this->paymentInfos[$this->respondInfo['payment_code']]['name']; ?></p>
			<p><span>您的订单号：</span><?php echo $this->respondInfo['orderid']; ?></p>
			<p><span>您的帐号：</span><?php echo $this->respondInfo['username']; ?></p>
			<p><span>您的充值金额：</span><strong><?php echo $this->respondInfo['money_valid_middle']; ?>元</strong></p>
			<p><span>您获得金币数量：</span><strong><?php echo $this->respondInfo['money_valid']; ?> 块金币</strong></p><!---->
		</dd>
	</dl>
<?php } else { ?>	
	<dl class="Recharge_prompt bd clearfix">
		<dt><img src="<?php echo $this->staticUrl; ?>Recharge/images/wrong.jpg" /></dt>
		<dd>
			<strong class="f20"><?php echo $this->message; ?></strong>
			<p><span class="fl">如果操作正常，请联系</span><a href="javascript:window.open('http://www.53kf.com/company.php?arg=wgsmtiger&style=1','_blank','height=473,width=703,fullscreen=3,top=200,left=200,status=yes,toolbar=no,menubar=no,resizable=no,scrollbars=no,location=no,titlebar=no,fullscreen=no');void(0);" class="prompt_btnKF"></a></p>
			<p><span>您的充值方式：</span><?php echo $this->paymentInfos[$this->respondInfo['payment_code']]['name']; ?></p>
			<p><span>您的订单号：</span><?php echo $this->respondInfo['orderid']; ?></p>
			<p><span>您的帐号：</span><?php echo $this->respondInfo['username']; ?></p>
			<p><span>您的充值金额：</span><strong><?php echo $this->respondInfo['money']; ?>元</strong></p>
			<!--<p><span>您获得金币数量：</span><strong>100</strong></p>-->
		</dd>
	</dl>
<?php } ?>
</div>