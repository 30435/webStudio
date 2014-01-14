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
				<!--公司信息-->
				<div class="mes">
					<div class="mt50">
						<a class="a1 <?php if ($this->currentCategoryInfo['id'] == 2) echo 'active1'; ?>" href="<?php echo $this->categoryInfos[2]['url']; ?>" title="<?php echo $this->categoryInfos[2]['catname']; ?>"></a>
						<a class="a2 <?php if ($this->currentCategoryInfo['id'] == 22) echo 'active2'; ?>" href="<?php echo $this->categoryInfos[22]['url']; ?>" title="<?php echo $this->categoryInfos[22]['catname']; ?>"></a>
						<a class="a3 <?php if ($this->currentCategoryInfo['id'] == 25) echo 'active3'; ?>" href="<?php echo $this->categoryInfos[25]['url']; ?>" title="<?php echo $this->categoryInfos[25]['catname']; ?>"></a>
						<a class="a4 <?php if ($this->currentCategoryInfo['id'] == 19) echo 'active4'; ?>" href="<?php echo $this->categoryInfos[19]['url']; ?>" title="<?php echo $this->categoryInfos[19]['catname']; ?>"></a>
					</div>
				</div>
			</div>
			
			<!--常见问题-->
			<div class="content-faq">
				<div class="faq-top">
					<ul>
						<li>您目前的位置：</li>
						<li><a href="javascript:void(0)">首页</a><span>|</span></li>
						<li><a href="javascript:void(0)">关于我们</a></li>
					</ul>
				</div>
				<div class="faq-mid c999">
				<h3 class="orange mt30 mb10"><?php echo $this->currentCategoryInfo['catname']; ?></h3>
				 <?php $catContent = $controller->currentModel->getInfo(array('catid =' => $this->catid)); echo $catContent['content']; ?>
			  </div>
			</div>
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

