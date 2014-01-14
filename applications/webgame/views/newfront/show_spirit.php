<?php echo $this->load->view('newfront/header'); ?>
<?php $sortInfos = $controller->currentModel->sortInfos; ?>
<body>
<div class="content-m">
	<img class="imgbg" src="<?php echo $this->staticUrl; ?>newfront/images/bg/content-bg-top.jpg">
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
						<li><a href="<?php echo $this->currentWebgameInfo['url_home']; ?>" target="_self"><?php echo $this->currentWebgameInfo['name']; ?></a><span>|</span></li>
						<li><a href="<?php echo $this->currentWebgameInfo['url_server']; ?>slist">诺瓦奇兵宠物大全</a><span>|</span></li>
						<?php if (isset($sortInfos[$this->currentInfo['sort']]['value'])) { 
						    echo '<li><a href="' . $this->currentWebgameInfo['url_server'] . 'slist?sort=' . $sortInfos[$this->currentInfo['sort']]['key'] . '">' . $sortInfos[$this->currentInfo['sort']]['value'] .  '系</a></li>'; 
						} ?>
					</ul>
				</div>
				<div class="act-mid">
					<div class="title"><a class="title" href="javascript:void(0)">诺瓦奇兵--<?php echo $this->currentInfo['title']; ?>-属性详解</a></div>
					<?php 
					$picString = '';
					$picString .= empty($this->currentInfo['pic_effect']) ? '' : '<a href="javascript:void(0);" class="act-img"><img src="' . $this->currentInfo['pic_effect'] . '" /></a>';
					$picString .= empty($this->currentInfo['pic_growup']) ? '' : '<a href="javascript:void(0);" class="act-img"><img src="' . $this->currentInfo['pic_growup'] . '" /></a>';
					$picString .= empty($this->currentInfo['pic_ext']) ? '' : '<a href="javascript:void(0); class="act-img"><img src="' . $this->currentInfo['pic_ext'] . '" /></a>';
					echo $picString;
					?>
					<div class="act-mid-top"></div>
					<div class="act-mid-mid">
					<?php 
					echo str_replace('width="920"', '', $this->currentInfo['content']);
					?>
					</div>
					<div class="act-mid-bottom"></div>
					<div class="act-bottom">
					<?php 
					$preSql = "SELECT `id`, `title` FROM `studio_webgame`.`sw_spirit` WHERE `id` < {$this->currentInfo['id']} ORDER BY `id` DESC LIMIT 1";
					$preQuery = $controller->currentModel->currentDb->query($preSql);
					$preInfo = $preQuery->row_array(); 
					
					$nextSql = "SELECT `id`, `title` FROM `studio_webgame`.`sw_spirit` WHERE `id` > {$this->currentInfo['id']} LIMIT 1";
					$nextQuery = $controller->currentModel->currentDb->query($nextSql);
					$nextInfo = $nextQuery->row_array(); 
					?>
						<a class="prev" href="<?php if (isset($preInfo['id'])) { echo $this->currentWebgameInfo['url_server'] . 'spirit?id=' . $preInfo['id']; } else { echo 'javascript:void();'; } ?>">上一篇：<?php if (isset($preInfo['title'])) { echo $preInfo['title']; } else { echo '无'; } ?></a>
						<a class="next" href="<?php if (isset($nextInfo['id'])) { echo $this->currentWebgameInfo['url_server'] . 'spirit?id=' . $nextInfo['id']; } else { echo 'javascript:void();'; } ?>">上一篇：<?php if (isset($nextInfo['title'])) { echo $nextInfo['title']; } else { echo '无'; } ?></a>
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
</body>
</html>

