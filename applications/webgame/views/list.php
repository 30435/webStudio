<?php echo $this->load->view('header1'); ?>
<div class="game_list" id="J_gameList">
	<div class="game_list_bott"></div>
</div>
<header class="news_header">
	<div class="header">
		<h1 class="logo">
			<a href="<?php echo $this->baseUrl; ?>" title="<?php echo $this->metaDatas['title']; ?>" class="logo_link">
				<i class="logo_main"></i>
				<i class="logo_pad_l"></i>
				<i class="logo_pad_r"></i>
				<i class="logo_eye"></i>
				<i class="logo_font">
					<i class="logo_font_light"></i>
				</i>
				<i class="logo_slogen"></i>
			</a>
		</h1>
		<!--<nav class="nav">
			<a class="nav_item" href="http://bbs.61.com/" title="淘米游戏论坛">淘米游戏论坛</a>
			<a class="nav_item" href="http://www.2125.com/" title="2125小游戏">2125小游戏</a>
			<a class="nav_item" href="http://v.61.com/" title="淘米视频">淘米视频</a>
		</nav>-->
		<div class="back_btn_wrapper">
			<a href="<?php echo $this->baseUrl; ?>" title="返回<?php echo $this->metaDatas['title']; ?>主页" class="back_btn"><i class="back_btn_light"></i></a>
		</div>
	</div>
	<i class="top_content_bg_repeat"></i>
	<i class="top_content_bg"></i>
</header>
<section class="news_list_wrapper">
	<div class="news_list_title_wrapper">
		<i class="news_list_title"></i>
	</div>
	<ul class="news_list">
	<?php $page = empty($this->input->get_post('page')) ? 1 : $this->input->get_post('page'); $newInfos = $controller->_getFrontInfos('webgame', 'new', $page, 8); ?>
	<?php foreach ($newInfos['infos'] as $newInfo) { ?>
			<li class="news_item">
				<a target="_blank" href="<?php echo $newInfo['url']; ?>" title="<?php echo $newInfo['title']; ?>"><i class="news_item_tag"></i><?php echo $newInfo['title']; ?></a>
				<span class="news_item_time"><?php echo date('Y-m-d', $newInfo['inputtime']); ?></span>
			</li>
	<?php } ?>
	</ul>
	<div class="page_contorl_wrapper cf"><a href="javascript:void(0);" class="prev_page_btn page_btn_disable"  title="&lt;上一页">&lt;上一页</a><a href="index_1.shtml" class="next_page_btn"  title="淘米动态 淘米游戏 下一页">下一页&gt;</a></div>
</section>
<?php echo $this->load->view('footer1'); ?>