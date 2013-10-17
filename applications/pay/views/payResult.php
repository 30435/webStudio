<?php echo $this->load->view('header_cfront'); ?>
<div class="min-content back">
<?php if ($this->payResult) { ?>
	<ul class="list_re">
		<li><span><strong><?php echo $this->message; ?></strong></span>
		<li><span><label>您的充值方式:</label></span><input type="text" value="<?php echo $this->paymentInfos[$this->respondInfo['payment_code']]['name']; ?>" /></li>
		<li><span><label>您的订单号:</label></span><input type="text" value="<?php echo $this->respondInfo['orderid']; ?>" /></li>
		<li><span><label>您的帐号:</label></span><input type="text" value="<?php echo $this->respondInfo['username']; ?>" /></li>
		<li><span><label>订您的充值金额:</label></span><input type="text" value="<?php echo $this->respondInfo['money_valid_middle']; ?>元" /></li>
		<li><span><label>您获得金币数量:</label></span><input type="text" value="<?php echo $this->respondInfo['money_valid']; ?> " /></li>
	</ul>
<?php } else { ?>	
	<ul class="list_re">
		<li><span><strong><?php echo $this->message; ?></strong></span>
		<li><span><label>您的充值方式:</label></span><input type="text" value="<?php echo $this->paymentInfos[$this->respondInfo['payment_code']]['name']; ?>" /></li>
		<li><span><label>您的订单号:</label></span><input type="text" value="<?php echo $this->respondInfo['orderid']; ?>" /></li>
		<li><span><label>您的帐号:</label></span><input type="text" value="<?php echo $this->respondInfo['username']; ?>" /></li>
		<li><span><label>订您的充值金额:</label></span><input type="text" value="<?php echo $this->respondInfo['money_valid_middle']; ?>元" /></li>
	</ul>
<?php } ?>
</div>

<?php echo $this->load->view('footer_cfront'); ?>