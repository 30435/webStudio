<?php echo $this->load->view('newfront/header'); ?>
<body>
<div class="content-m">
	<!--顶部通知-->
	<?php echo $this->load->view('newfront/inline_header'); ?>
	<div class="content-n">
	<!--内容-->
	<div class="wrap bgset">
		<!--top 导航-->
		<?php echo $this->load->view('newfront/inline_nav'); ?>
		<!--参杂内容-->
		<div class="next-content-top"></div>
		<div class="next-content">
			<!--新手教程-->
			<?php echo $this->load->view('newfront/inline_left1'); ?>
			<!--宠物介绍-->
			<div class="content-faq">
				<div class="faq-top">
					<ul>
						<li>您目前的位置：</li>
						<li><a href="javascript:void(0)">首页</a><span>|</span></li>
						<li><a href="javascript:void(0)">宠物大全</a><span>|</span></li>
						<li><a href="javascript:void(0)">宠物介绍</a></li>
					</ul>
				</div>
				<div class="act-mid">
					<div class="title"><a class="title" href="javascript:void(0)">诺瓦奇兵-吞噬者-属性详解</a></div>
					<a href="javascript:void(0)" class="act-img"><img src="images/act-1.png"></a>
					<div class="act-mid-top"></div>
					<div class="act-mid-mid"><?php echo $this->currentInfo['content']; ?></div>
					<div class="act-mid-bottom"></div>
					<div class="act-bottom">
					<a class="prev" href="javascript:void(0)">上一篇：很好</a>
					<a class="next" href="javascript:void(0)">下一篇：不好</a>
				</div>
				</div>
			</div>
			<!--宠物之星-->
			<?php echo $this->load->view('newfront/inline_left2'); ?>
			<!--新闻活动-->
			<?php echo $this->load->view('newfront/inline_left3'); ?>
			<div class="clearf"></div>
		</div>
		<div class="next-content-bottom"></div>
	</div>
	<!--底部-->
	<?php echo $this->load->view('newfront/inline_footer'); ?>
	</div>
</div>
</div>
</body>
</html>

