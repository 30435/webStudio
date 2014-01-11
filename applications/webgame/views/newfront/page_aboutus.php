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
			<?php echo $this->load->view('newfront/inline_left4'); ?>
			<!--常见问题-->
			<div class="content-faq">
				<div class="faq-top">
					<ul>
						<li>您目前的位置：</li>
						<li><a href="javascript:void(0)">首页</a><span>|</span></li>
						<li><a href="javascript:void(0)">客服中心</a></li>
					</ul>
				</div>
				<div class="faq-mid">
					<div class="services mt30 "> <?php $catContent = $controller->currentModel->getInfo(array('catid =' => $this->catid)); echo $catContent['content']; ?></div>
				</div>
			</div>
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

