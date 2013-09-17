<?php echo $this->load->view('header1'); ?>

<section class="top_sec">
    <header class="header">
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
            <a class="nav_item" href="http://bbs.61.com/" title="淘米游戏论坛" target="_blank">淘米游戏论坛</a>
            <a class="nav_item" href="http://web.2125.com/" title="网页游戏" target="_blank">网页游戏</a>
            <a class="nav_item" href="http://v.61.com/" title="淘米视频" target="_blank">淘米视频</a>
        </nav>
        <i class="logo_shadow"></i>-->
    </header>
    <div class="top_content">
        <div class="slider_wrapper">
            <ul class="slider_list">
			<?php $posterInfos = $controller->_getFrontInfos('passport', 'poster', 1, 5); ?>
			<?php foreach ($posterInfos['infos'] as $posterInfo) { ?>
				<li class="slider_item">
					<a href="<?php echo $posterInfo['url']; ?>" title="<?php echo $posterInfo['name']; ?>" target="_blank" class="slider_link">
					    <img src="<?php echo $posterInfo['pic']; ?>" class="slider_img" alt="<?php echo $posterInfo['name']; ?>">
					</a>
				</li>
		    <?php } ?>
            </ul>
            <div class="slider_control">
                <a class="slider_control_item" href="javascript:void(0);"></a>
                <a class="slider_control_item" href="javascript:void(0);"></a>
                <a class="slider_control_item" href="javascript:void(0);"></a>
                <a class="slider_control_item" href="javascript:void(0);"></a>
                <a class="slider_control_item" href="javascript:void(0);"></a>
            </div>
        </div>
        <div class="index_news_wrapper">
            <h2 class="index_news_title">知金新闻</h2><a href="<?php echo $this->baseUrl; ?>index/category?catid=7" title="查看更多" class="index_news_more"  target="_blank">查看更多&gt;</a>
            <ul class="index_news_list">
			<?php $newInfos = $controller->_getFrontInfos('webgame', 'new', 1, 8); ?>
			<?php foreach ($newInfos['infos'] as $newInfo) { ?>
				<li class="index_news_item"><a target="_blank" href="<?php echo $newInfo['url']; ?>" title="<?php echo $newInfo['title']; ?>"><i class="news_item_tag"></i><?php echo $newInfo['title']; ?></a></li>
		    <?php } ?>
            </ul>
        </div>
    </div>
    <i class="top_content_bg_repeat"></i>
    <i class="top_content_bg"></i>
</section>
<section class="bottom_sec">
    <div class="top_link_wrapper">
        <div class="top_link_web">
            <h3 class="top_link_tit_w">自主游戏</h3>
            <ul class="tl_list">
			<?php foreach ($this->webgameInfos as $webgameCode => $webgameInfo) { if ($webgameInfo['type'] != 1) { continue; } ?>
                <li class="tl_item_w">
                    <a href="<?php echo $webgameInfo['url_home']; ?>" title="<?php echo $webgameInfo['name']; ?>" class="tl_item_w_link"  target="_blank" >
                    <img src="<?php echo $webgameInfo['pic_small']; ?>" alt="<?php echo $webgameInfo['name']; ?>" class="tl_item_w_pic" width="72px" height="60px" />
                    <span class="tl_item_w_title"><?php echo $webgameInfo['name']; ?></span>
                    </a>
                </li>
		    <?php } ?>
            </ul>
        </div>
        <div class="top_link_web">
            <h3 class="top_link_tit_w">自主游戏</h3>
            <ul class="tl_list">
			<?php foreach ($this->webgameInfos as $webgameCode => $webgameInfo) { if ($webgameInfo['type'] != 3) { continue; } ?>
                <li class="tl_item_w">
                    <a href="<?php echo $webgameInfo['url_home']; ?>" title="<?php echo $webgameInfo['name']; ?>" class="tl_item_w_link"  target="_blank" >
                    <img src="<?php echo $webgameInfo['pic_small']; ?>" alt="<?php echo $webgameInfo['name']; ?>" class="tl_item_w_pic" width="72px" height="60px" />
                    <span class="tl_item_w_title"><?php echo $webgameInfo['name']; ?></span>
                    </a>
                </li>
		    <?php } ?>
            </ul>
        </div>
        <div class="top_link_mobile">
            <h3 class="top_link_tit_m">代理游戏</h3>
            <ul class="tl_list">
  			<?php foreach ($this->webgameInfos as $webgameCode => $webgameInfo) { if ($webgameInfo['type'] != 2) { continue; } ?>
				<li class="tl_item_m">
					<a href="<?php echo $webgameInfo['url_home']; ?>" title="<?php echo $webgameInfo['name']; ?>" class="tl_item_m_link"  target="_blank" >
                    <img src="<?php echo $webgameInfo['pic_middle']; ?>" alt="<?php echo $webgameInfo['name']; ?>" class="tl_item_m_pic" width="80px" height="80px">
					<span class="tl_item_m_cont"><span class="tl_item_m_title"><?php echo $webgameInfo['name']; ?></span><span class="tl_item_m_text"><?php echo $webgameInfo['description']; ?></span></span>
                    </a>
                </li>
		    <?php } ?>
            </ul>
        </div>
    </div>
</section>
<?php echo $this->load->view('footer1'); ?>