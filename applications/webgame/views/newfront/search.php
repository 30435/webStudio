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
			<!--常见问题-->
			<div class="content-faq">
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
</body>
</html>

