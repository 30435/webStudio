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
						<li><a href="javascript:void(0)">首页</a><span>|</span></li>
						<?php 
						$breadStr = ''; 
						$parentCatid = $this->currentCategoryInfo['id'];
						do { 
							$breadStr = '<li><a href="' . $this->categoryInfos[$parentCatid]['url'] . '">' . $this->categoryInfos[$parentCatid]['catname'] . '</a><span>|</span></li>' . $breadStr; 
							$parentCatid = $this->categoryInfos[$parentCatid]['parentid']; 
						} while ($parentCatid > 0); 
						echo rtrim($breadStr, '<span>|</span></li>') . '</li>';
						?>
					</ul>
				</div>
				<div class="wan-mid">
					<ul>
					<?php $page = intval($this->input->get_post('page')); $page = max(1, $page); $where = array('catid' => $this->catid); $newInfos = $controller->_getFrontInfos('webgame', 'new', $page, 10, $where, array(), 'updatetime, url, title, description, thumb', '', 0, true, $this->currentCategoryInfo['url']); ?>
					<?php foreach ($newInfos['infos'] as $newInfo) { ?>
						<li>
							<p class="wan-title" ><a class="orange" href="<?php echo $newInfo['url']; ?>">·<?php echo $newInfo['title']; ?></a></p>
							<a href="<?php echo $newInfo['url']; ?>" class="wan-img"><img src="<?php echo $newInfo['thumb']; ?>"></a>
							<p class="wan-p"><?php echo $newInfo['description']; ?>......<a href="<?php echo $newInfo['url']; ?>">[详细查看]</a>
							</p>
						</li>
					<?php } ?>
					</ul>
				</div>
				<div class="clearf"></div>
				<div class="faq-bottom pb30"><ul><?php echo $controller->pageStr; ?></ul></div>
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

