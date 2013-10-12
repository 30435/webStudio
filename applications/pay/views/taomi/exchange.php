<?php echo $this->load->view($this->prefix . 'header'); ?>
<script type="text/javascript" src="<?php echo $this->staticUrl; ?>common/script/jquery.artDialog.js"></script>
<script type="text/javascript" src="<?php echo $this->staticUrl; ?>common/script/pay.js"></script>
<div class="container cf">
	<div class="ui_step ui_step_on_1">
	    <div class="ui_step_1 ui_step_on"><i class="ui_step_num ui_step_num_1"><span>1</span></i><span class="ui_step_name">选择兑换游戏</span></div>
		<div class="ui_step_2"><i class="ui_step_num ui_step_num_2"><span>2</span></i><span class="ui_step_name">选择兑换方式</span></div>
		<div class="ui_step_3"><i class="ui_step_num ui_step_num_3"><span>3</span></i><span class="ui_step_name">成功兑换游戏币</span></div>
	</div>
    <div class="main">
		<div style="padding-top:0;" class="service_wrap">
			<div class="service service_small">
                <div class="game_box">
					<h2>游戏币兑换</h2>
                    <div class="search_box">
						<div class="search_area">
							<div class="search"><input type="text" id="search_input" value="请输入需要兑换游戏币的游戏名称"></div>
                            <input type="button" value="兑换" id="search_btn">
                            <div class="select_game" id="list_div"><ul id="select_list"></ul></div>
                        </div>
                        <div class="hot_game"><span>热门：</span><a href="/xb/processcard">小花仙灵豆</a><a href="/ddt/processcard">弹弹堂点券</a></div>
                    </div>
                </div>
                <ul class="service_list cf">
				<?php foreach ($this->webgameInfos as $webgameCode => $webgameInfo) { ?>
                    <li>
                        <div class="service_img_wrap"><div class="service_img"><img width="36" height="36" src="<?php echo $webgameInfo['pic_middle']; ?>"></div><h5><?php echo $webgameInfo['name']; ?></h5></div>
                        <div class="service_price"><?php echo $webgameInfo['coin_rate'] . $webgameInfo['coin_unit'] . $webgameInfo['coin_name']; ?>/诺币</div>
                        <div class="service_btns"><a class="ui_btn_small_em" href="<?php echo $this->baseUrl . 'index/towebgame?scode=' . $webgameInfo['code']; ?>"><span>立即兑换</span></a></div>
                    </li>
				<?php } ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<script language="javascript">
	setPayment(<?php echo $this->showPayment; ?>);
</script>
<?php echo $this->load->view($this->prefix . 'footer'); ?>