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
				<div class="faq-top">
					<ul>
						<li>您目前的位置：</li>
						<li><a href="<?php echo $this->categoryInfos[8]['bind_domain']; ?>">首页</a><span>|</span></li>
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
				<div class="faq-mid">
					<ul>
					<?php $page = intval($this->input->get_post('page')); $page = max(1, $page); $where = array('catid' => $this->catid); $newInfos = $controller->_getFrontInfos('webgame', 'new', $page, 12, $where, array(), 'updatetime, url, title', '', 0, true, $this->currentCategoryInfo['url']); ?>
					<?php foreach ($newInfos['infos'] as $newInfo) { ?>
						<li>
							<a href="<?php echo $newInfo['url']; ?>" title="<?php echo $newInfo['title']; ?>">· <?php echo $newInfo['title']; ?></a>
							<a class="data fr" href="<?php echo $newInfo['url']; ?>" title="<?php echo $newInfo['title']; ?>">[<?php echo date('m-d', $newInfo['updatetime']); ?>]</a>
						</li>
					<?php } ?>
					</ul>
				</div>
				<div class="clearf"></div>
				<div class="faq-bottom"><ul><?php echo $controller->pageStr; ?></ul></div>
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

