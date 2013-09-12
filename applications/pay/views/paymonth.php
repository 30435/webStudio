<?php echo $this->load->view('header'); ?>
<div class="container cf">
         <div class="ui_step ui_step_on_1">
   
    <div class="ui_step_1 ui_step_on">
        <i class="ui_step_num ui_step_num_1">
            <span>1</span>
        </i>
        <span class="ui_step_name">选择包月游戏</span></div>
    
    <div class="ui_step_2">
        <i class="ui_step_num ui_step_num_2"><span>2</span></i>
        <span class="ui_step_name">选择开通方式</span>
    </div>
    
    <div class="ui_step_3">
        <i class="ui_step_num ui_step_num_3"><span>3</span></i>
        <span class="ui_step_name">成功开通包月服务</span>
    </div>
</div>
<div class="main">
	<div class="service_wrap">
		<div class="service service_large">
			<ul class="service_list cf">
			<?php foreach ($this->paymonthInfos as $paymonthInfo) { ?>
				<li>
					<div class="service_img_wrap">
						<div class="service_img"><img width="120" height="120" src="<?php echo $paymonthInfo['thumb']; ?>"></div>
						<h5 class="red"><?php echo $paymonthInfo['name']; ?></h5>
						<!--<div class="link_info_wrap"><a class="link_info" href="/service/nonoservice"><span>详细</span></a><span class="ui_tips ui_tips_t"><span>详细</span><i>◆</i></span></div>-->
					</div>
					<div class="service_price"><?php echo $paymonthInfo['money']; ?>元/<?php echo $paymonthInfo['month']; ?>月</div>
					<div class="service_btns"><a class="ui_btn_small_em" href="<?php echo $this->baseUrl . 'index/topaymonth?paymonth=' . $paymonthInfo['id']; ?>"><span>立即开通</span></a><!--<a class="ui_btn_small" href="<?php echo $this->baseUrl . '?paymonth=' . $paymonthInfo['id']; ?>"><span>给好友开通</span></a></div>-->
				</li>
			<?php } ?>	
			</ul>
		</div>
	</div>
</div>
</div>
<?php echo $this->load->view('footer'); ?>