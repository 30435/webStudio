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
			<!--常见问题-->
			<div><img src="<?php echo $this->currentCategoryInfo['image']; ?>" width="930px" height="800px" alt="<?php echo $this->currentCategoryInfo['catname']; ?>"></div>
			<div class="clearf"></div>
		</div>
		<div class="next-content-bottom"></div>
	</div>
	</div>
	<div class="clearf"></div>
	<!--底部-->
	<?php echo $this->load->view('newfront/inline_footer'); ?>
	</div>
</div>
</body>
</html>

