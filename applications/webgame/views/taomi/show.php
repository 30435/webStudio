<?php echo $this->load->view('taomi/header1'); ?>
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
<section class="news_content_wrapper">
	<div class="news_list_title_wrapper">
		<i class="news_list_title"></i>
	</div>
	<div class="news_name_wrapper">
		<h1 class="news_name"><?php echo $this->currentInfo['title']; ?></h1>
		<p class="news_info"><?php echo date('Y-m-d H:i:s', $this->currentInfo['inputtime']); ?></p>
	</div>
	<div class="news_content"><?php echo $this->currentInfo['content']; ?></div>
</section>
<?php echo $this->load->view('taomi/footer1'); ?>