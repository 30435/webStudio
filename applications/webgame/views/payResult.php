<?php echo $this->load->view('header_cfront'); ?>
<div class="min-content back">
<ul class="list_re">
	<li><span><strong><?php echo $this->message; ?></strong></span>
    <li><span><label>您充值的游戏:</label></span><input type="text" value="<?php echo $this->resultInfo['webgameName']; ?>" /></li>
    <?php if (!empty($this->resultInfo['serverName'])) { ?><li><span><label>游戏服务器:</label></span><input type="text" value="<?php echo $this->resultInfo['serverName']; ?>" /></li><?php } ?>
    <li><span><label>您的支付帐号:</label></span><input type="text" value="<?php echo $this->resultInfo['username']; ?>" /></li>
    <li><span><label>您支付的金额:</label></span><input type="text" value="<?php echo $this->resultInfo['money']; ?>" /></li>
    <li><span><label>获得游戏币数量:</label></span><input type="text" value="<?php echo $this->resultInfo['coin']; ?>" /></li>
</ul>
</div>
<?php echo $this->load->view('footer_cfront'); ?>