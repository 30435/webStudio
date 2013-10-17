
<div id="content" class="clearfix">
	<dl class="Recharge_prompt bd clearfix">
		<dt><img src="<?php echo $this->staticUrl; ?>Recharge/images/right.jpg" /></dt>
		<dd>
			<strong class="f20"><?php echo $this->message; ?></strong>
			<p><span>您充值的游戏：</span><?php echo $this->resultInfo['webgameName']; ?></p>
			<p><span>游戏服务器：</span><?php echo $this->resultInfo['serverName']; ?></p>
			<p><span>您的支付帐号：</span><?php echo $this->resultInfo['username']; ?></p>
			<p><span>您支付的金额：</span><strong><?php echo $this->resultInfo['money']; ?>元</strong></p>
			<p><span>获得游戏币数量：</span><strong><?php echo $this->resultInfo['coin']; ?></strong></p>
			<p id="taskPay"></p>
			<p><a href="<?php echo $this->appInfos['pay']['url']; ?>" class="prompt_btnJX"></a><a href="<?php echo $this->appInfos['pay']['url']; ?>" class="prompt_btnHM"></a></p>
		</dd>
	</dl>
</div>