<table cellspacing="0" cellpadding="0" border="0" class="boxy-wrapper fixed" style="z-index: 1339; visibility: visible; left: 759px; top: 111.5px; opacity: 1;">
<tbody>
<tr>
<td class="boxy-inner">
	<div class="pop_wrap boxy-content" style="display: block;" id="payConfirmWindow">
		<div class="pop">
			<div class="pop_hd">
				<h3>你确定以下消费信息正确吗？</h3>
				<a id="close_btn" class="pop_close" href="javascript: art.dialog.list['payWindow123'].close();void(0);"><span>关闭</span></a>
			</div>
			<div class="pop_bd">
				<ul style="padding-left:22px;" id="confirm_msg" class="pop_info_list">
					
				<li><label>充值米米号:</label><div class="b"><?php echo $this->orderInfo['username']; ?></div></li>
				<li><label>你充值的方式:</label><div><?php echo $this->currentPayment['name']; ?></div></li>
				<li><label>你的充值金额:</label><div class="b"><?php echo $this->orderInfo['money']; ?> 元</div></li>
				<li><label>充值所得:</label><div class="b"><?php echo $this->orderInfo['money']; ?>诺币</div></li></ul>
				<input type="hidden" id="orderStr" value="<?php echo $this->orderStr; ?>" />
				<div style="padding-left:115px;text-align: left;" class="pop_btns">
					 <?php echo $this->buttonStr; ?>
					 <button type="button" value="" style="margin-left:20px" id="no" class="ui_btn_small_em" onclick="art.dialog.list['payWindow123'].close();void(0);"><span>修改</span></button>
				</div>
			</div>
		</div>
	</div>
</td>
</tr>
</tbody>
</table>