<?php echo $this->load->view('newfront/header'); ?>
<body>
<div class="content-m">
	<img class="imgbg" src="<?php echo $this->staticUrl; ?>newfront/images/bg/content-bg-top.jpg">
	<!--顶部通知-->
	<?php echo $this->load->view('newfront/inline_header'); ?>
	<div class="content-n">
		<div class=" bgset">
	<!--内容-->
	<div class="wrap">
		<!--top 导航-->
		<?php echo $this->load->view('newfront/inline_nav'); ?>
		<!--参杂内容-->
		<div class="next-content-top"></div>
		<div class="next-content">
			<div class="content-left">
				<!--新手教程-->
				<?php echo $this->load->view('newfront/inline_left1'); ?>
				<!--宠物之星-->
				<?php echo $this->load->view('newfront/inline_left2'); ?>
				<!--新闻活动-->
				<?php echo $this->load->view('newfront/inline_left3'); ?>
			</div>
			
			<!--常见问题-->
			<div class="content-faq">
				<div class="faq-top">
					<ul>
						<li>您目前的位置：</li>
						<li><a href="<?php echo $this->categoryInfos[8]['bind_domain']; ?>">首页</a><span>|</span></li>
					</ul>
				</div>
								<div class="faq-mid">
					<ul>
					<?php foreach ($this->resultArray as $newInfo) { ?>
						<li>
							<a href="<?php echo $newInfo['url']; ?>" title="<?php echo $newInfo['title']; ?>">· <?php echo $newInfo['title']; ?></a>
							<a class="data fr" href="<?php echo $newInfo['url']; ?>" title="<?php echo $newInfo['title']; ?>">[<?php echo date('m-d', $newInfo['updatetime']); ?>]</a>
						</li>
					<?php } ?>
					</ul>
				</div>
				<div class="clearf"></div>
			</div>
			
			<div class="clearf"></div>
		</div>
		<div class="next-content-bottom"></div>
	</div>
	</div>
	<!--底部-->
	<?php echo $this->load->view('newfront/inline_footer'); ?>
	</div>
	</div>
</body>
</html>


