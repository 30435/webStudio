<?php echo $this->load->view('newfront/header'); ?>
<body>
<div class="content-m">
	<img class="imgbg" src="<?php echo $this->staticUrl; ?>newfront/images/bg/content-bg-top.jpg">
	<!--顶部通知-->
	<?php echo $this->load->view('newfront/inline_header'); ?>
	<div class="content-n">
		<div class="bgset">
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
			<!--宠物介绍-->
			<div class="content-faq">
				<div class="faq-top">
					<ul>
						<li>您目前的位置：</li>
						<li><a href="javascript:void(0)">首页</a><span>|</span></li>
						<li><a href="javascript:void(0)">常见问题</a><span>|</span></li>
						<li><a href="javascript:void(0)">内容页面</a></li>
					</ul>
				</div>
				<div class="content-mid">
					<div class="title"><a class="title" href="javascript:void(0)"><?php echo $this->currentInfo['title']; ?></a></div>
					<div class="detail mb30">
						<a href="javascript:void(0)">时间：<?php echo date('Y年m月d日', $this->currentInfo['updatetime']); ?></a>
						<a href="javascript:void(0)">作者：<?php echo $this->currentInfo['username']; ?></a>
						<a href="javascript:void(0)">责任编辑：<?php echo $this->currentInfo['editor']; ?></a>
					</div>
					<div class="content-mid-mid mb100"><?php echo $this->currentInfo['content']; ?></div>
					<div class="clearf"></div>
					<div class="act-bottom">
					<?php 
					$preSql = "SELECT `url`, `title` FROM `studio_webgame`.`sw_new` WHERE `id` < {$this->currentInfo['id']} ORDER BY `id` DESC LIMIT 1";
					$preQuery = $controller->currentModel->currentDb->query($preSql);
					$preInfo = $preQuery->row_array(); 
					
					$nextSql = "SELECT `url`, `title` FROM `studio_webgame`.`sw_new` WHERE `id` > {$this->currentInfo['id']} LIMIT 1";
					$nextQuery = $controller->currentModel->currentDb->query($nextSql);
					$nextInfo = $nextQuery->row_array(); 
					?>
						<a class="prev" href="<?php if (isset($preInfo['url'])) { echo $preInfo['url']; } else { echo 'javascript:void();'; } ?>">上一篇：<?php if (isset($preInfo['title'])) { echo $preInfo['title']; } else { echo '无'; } ?></a>
						<a class="next" href="<?php if (isset($nextInfo['url'])) { echo $nextInfo['url']; } else { echo 'javascript:void();'; } ?>">上一篇：<?php if (isset($nextInfo['title'])) { echo $nextInfo['title']; } else { echo '无'; } ?></a>
					</div>
				</div>
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

