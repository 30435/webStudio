<table cellspacing="0" cellpadding="0" border="0" class="boxy-wrapper fixed" style="z-index: 1339; visibility: visible; left: 759px; top: 111.5px; opacity: 1;">
<tbody>
<tr>
<?php
$getStr = '';
$validMoney = $this->params['orderInfo']['money'] * (1 - $this->params['orderInfo']['paymentRate']);
switch ($this->params['orderInfo']['payType']) { 
	case 'touser': 
		$getStr = '<li><label>充值所得:</label><div class="b">' . $validMoney . '诺币</div></li>';
		break;
	case 'towebgame':
		$validMoney = $validMoney * $this->params['webgameInfo']['coin_rate'];
		$getStr = '<li><label>你充值的游戏:</label><div class="b">' . $this->params['webgameInfo']['name'] . '</div></li>'
			. '<li><label>你充值的服务器:</label><div class="b">' . $this->params['serverInfo']['name'] . '</div></li>'
			. '<li><label>充值所得:</label><div class="b">' . $validMoney . $this->params['webgameInfo']['coin_unit'] . $this->params['webgameInfo']['coin_name'] . '诺币</div></li>';
		break;
	case 'topaymonth':
		$getStr = '<li><label>您花费了:</label><div class="b">' . $validMoney . '诺币</div></li>'
			. '<li><label>为游戏:</label><div class="b">' . $this->params['webgameInfo']['name'] . '</div></li>'
			. '<li><label>购买了:</label><div class="b">' . $this->params['paymonthInfo']['name'] . '</div></li>';
		break;
}
?>
<td class="boxy-inner">
	<div class="pop_wrap boxy-content" style="display: block;" id="payConfirmWindow">
		<div class="pop">
			<div class="pop_hd">
				<h3>你确定以下消费信息正确吗？</h3>
				<a id="close_btn" class="pop_close" href="javascript: art.dialog.list['payWindow123'].close();void(0);"><span>关闭</span></a>
			</div>
			<div class="pop_bd">
				<ul style="padding-left:22px;" id="confirm_msg" class="pop_info_list">
				<li><label>充值米米号:</label><div class="b"><?php echo $this->params['orderInfo']['username']; ?></div></li>
				<li><label>你充值的方式:</label><div><?php echo $this->params['paymentInfo']['name']; ?></div></li>
				<li><label>你的充值金额:</label><div class="b"><?php echo $this->params['orderInfo']['money']; ?> 元</div></li>
				<?php echo $getStr; ?>
				</ul>
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