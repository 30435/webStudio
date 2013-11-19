<?php echo $this->load->view('header_base'); ?>
<link href="<?php echo $this->staticUrl; ?>tsource/webgame/seer2/css/style.css?v=20130826110354" rel="stylesheet">
<link href="<?php echo $this->staticUrl; ?>tsource/webgame/seer2/css/public.css" rel="stylesheet">
<link href="<?php echo $this->staticUrl; ?>tsource/webgame/seer2/css/seer.css" rel="stylesheet">
<style type="text/css">
	#flashTextContent {visibility:hidden;padding-top:210px;overflow:hidden;height:100px;}
	#innerPopIframe{position:absolute;top:0;left:0;width:1px;height:1px;display:none;}	
</style>
<base target="_blank">
</head>
<body class="index_seer">
<h1 class="game_name"><?php $this->currentWebgameInfo['name']; ?></h1>
<div id="J_topbarNav" class="topbar_outer">
	<div style="position:relative" class="topbar_wrap cf">
		<a href="<?php echo $this->baseUrl; ?>" class="topbar_logo" title="<?php echo $this->metaDatas['title']; ?>" target="_blank"><?php echo $this->metaDatas['title']; ?></a>
		<div class="topbar_nav cf">
		<?php $i = 1; foreach ($this->webgameInfos as $webgameCode => $webgameInfo) { if ($i > 8) {break; } ?>
			<a title="<?php echo $webgameInfo['name']; ?>" target="_blank" href="<?php echo $webgameInfo['url_home']; ?>" class=""><img src="<?php echo $webgameInfo['pic_small']; ?>"><?php echo $webgameInfo['name']; ?></a>
		<?php $i++; } ?>							
		</div>
		<div id="J_topbarOpen" class="topbar_all"><span>全部</span></div>
		<div class="topbar_reg">

		<?php if (!empty($this->loginedUserInfo)) { ?>
			(<span class="uid_account"><?php echo $this->loginedUserInfo['username']; ?></span>)<!--<a class="head_top" title="我的充值中心" href="<?php echo $this->baseUrl; ?>index/myaccount"> 我的充值中心 </a><i class="divide_new">|</i>-->
			<a href="<?php echo $this->appInfos['passport']['url']; ?>uwebgame/logout/">安全退出</a><i class="divide_new">|</i>
		<? } else { ?>
			<a href="<?php echo $this->appInfos['passport']['url']; ?>uwebgame/login" title="登陆" target="_blank" rel="nofollow">登陆</a><i class="divide_new">|</i>
			<a href="<?php echo $this->appInfos['passport']['url']; ?>uwebgame/register" title="注册" target="_blank" rel="nofollow">注册</a><i class="divide_new">|</i>
		<? } ?>
			<a href="<?php echo $this->appInfos['pay']['url']; ?>" title="诺币充值" target="_blank" rel="nofollow">充值</a><i class="divide_new">|</i>
		</div>
		<em style="height:0;line-height:0" class="cf"></em>
	</div>
</div>
<div id="J_gameList" class="game_list">
	<div class="game_list_top"><div class="game_list_point"></div></div>
	<div class="game_list_cont">
		<ul>
		<?php for ($i = 0; $i < 2; $i++) { foreach ($this->webgameInfos as $webgameCode => $webgameInfo) { ?>
			<li>
				<a title="<?php echo $webgameInfo['name']; ?>" target="_blank" href="<?php echo $webgameInfo['url_home']; ?>" class="">
					<img src="<?php echo $webgameInfo['pic_small']; ?>" class="img">
					<span><?php echo $webgameInfo['name']; ?></span><span class="text_stroke"><?php echo $webgameInfo['name']; ?></span>
				</a>
			</li>
		<?php } } ?>
		</ul>
	</div>
	<div class="game_list_bott"></div>
</div>
<div class="container">
    <div class="flash_main" id="myFlashBox"><div class="flash_content"><iframe width="960" height="560" src="<?php echo $this->currentWebgameInfo['url_webgame']; ?>"></iframe></div></div>
	<div class="iframe_banner" id="J_iframeBanner">
		<ul class="action_banner" id="action_banner">
		<?php $posterInfos = $controller->_getFrontInfos('passport', 'poster', 1, 4); ?>
		<?php foreach ($posterInfos['infos'] as $posterInfo) { ?>
			<li><div><a target="_blank" href="<?php echo $posterInfo['url']; ?>"><img width="226" height="124" border="0" alt="" title="<?php echo $posterInfo['name']; ?>" src="<?php echo $posterInfo['pic']; ?>"></a></div></li>
		<?php } ?>
		</ul>
	</div>
	<div class="product">
		<span id="j_slidePrev" class="slider_l_grey"><i>向前</i></span>        
		<div class="brand_zoon">
			<div id="j_brands" class="brands cf">
			<?php foreach ($this->webgameInfos as $webgameCode => $webgameInfo) { ?>
				<a title="<?php echo $webgameInfo['name']; ?>" class="brand_link" href="<?php echo $webgameInfo['url_home']; ?>" target="_blank"><img src="<?php echo $webgameInfo['pic_small']; ?>"><span><?php echo $webgameInfo['name']; ?></span></a>
			<?php } ?>
			</div>
		</div>
		<span id="j_slideNext" class="slider_r"><i>向后</i></span>
	</div>
</div>

<div role="contentinfo" class="footer_wrap">
    <div class="footer_inner">
        <a title="淘米网" class="ft_logo" href="http://www.taomee.com/" rel="nofollow" target="_blank">Taomee 淘米</a>
        <div class="ft_remark">
            <div class="ft_link">
			<?php foreach (array(2, 3, 4, 19, 20, 21, 22) as $showCatid) { ?>
				<a title="<?php echo $this->categoryInfos[$showCatid]['catname']; ?>" href="<?php echo $this->categoryInfos[$showCatid]['url']; ?>" rel="nofollow" target="_blank"><?php echo $this->categoryInfos[$showCatid]['catname']; ?></a><i class="divide">|</i>
			<?php } ?>
            </div>
            <div class="ft_icp">
                <p>京ICP备09081115号-6 京网文[2013]0506-133号 网络文化经营许可证</p>
                <p class="slogan">抵制不良游戏<span>拒绝盗版游戏</span><span>注意自我保护</span><span>谨防受骗上当</span><span>适度游戏益脑</span><span>沉迷游戏伤身</span><span>合理安排时间</span><span>享受健康生活</span></p>
                <p>知金伟业教育科技（北京）有限公司 Copyright ? 2008 - 2012 ZhiJin Inc. All Rights Reserved.</p>                
            </div>
        </div>
        <a href="http://www.61.com/about/green.html" class="logo_green" title="绿色宣言"></a>
        <a title="上海网警" class="ft_netpolice" href="http://sh.cyberpolice.cn/" rel="nofollow" target="_blank">上海网警</a>
    </div>
</div>
<script src="http://game-res.61.com/common/v2/js/1.7.2.jquery.min.js" type="text/javascript"></script>
<script src="http://game-res.61.com/common/main/js/swfobject.js" type="text/javascript"></script>
<iframe style="display: none;"></iframe><script src="http://game-res.61.com/common/v3/js/common/gamePublic.js" type="text/javascript"></script>  
<script type="text/javascript">
	(function(e) {              
		$("#J_topbarOpen").click(function(e) {
			var gameListUnclicked = true;
			var target = $('.game_list'),
				listImg = target.find('img'),
				_this = $(this);

			e.preventDefault();
			if (gameListUnclicked) {
				if (jQuery.browser.msie && parseInt(jQuery.browser.version,10) < 7) {
					listImg.each(function() {
						$(this).attr('src',$(this).attr('data-srcIE'))
					})
				} else{
					listImg.each(function() {
						$(this).attr('src',$(this).data('src'))
					})
				};
				gameListUnclicked = false;
				
			};
		})
	})()
</script>
</body>
</html>