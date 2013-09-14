<?php echo $this->load->view('header_base'); ?>
<link href="<?php echo $this->staticUrl; ?>webgame/seer2/css/style.css?v=20130826110354" rel="stylesheet">
<link href="<?php echo $this->staticUrl; ?>webgame/seer2/css/public.css" rel="stylesheet">
<link href="<?php echo $this->staticUrl; ?>webgame/seer2/css/seer.css" rel="stylesheet">
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
		<?php foreach ($this->webgameInfos as $webgameCode => $webgameInfo) { ?>
			<a title="<?php echo $webgameInfo['name']; ?>" target="_blank" href="<?php echo $webgameInfo['url_home']; ?>" class=""><img src="<?php echo $webgameInfo['pic_small']; ?>"><?php echo $webgameInfo['name']; ?></a>
		<?php } ?>							
		</div>
		<div id="J_topbarOpen" class="topbar_all"><span>全部</span></div>
		<div class="topbar_reg">
			<a rel="nofollow" target="_blank" title="米币充值" href="http://pay.61.com/buy/paytype?type=cardpay&pos=top">充值</a><i class="divide_new">|</i>
			<a rel="nofollow" target="_blank" title="米米号注册" href="http://account.61.com/register">注册</a><i class="divide_new">|</i>
			<a rel="nofollow" target="_self" title="添加到收藏夹" href="javascript:void(0);" id="j_addFav">收藏</a><i class="divide_new">|</i>
            <a href="http://bbs.61.com/" title="官方论坛" target="_blank" rel="nofollow">官方论坛</a>
		</div>
		<em style="height:0;line-height:0" class="cf"></em>
	</div>
</div>
<div id="J_gameList" class="game_list">
	<div class="game_list_top"><div class="game_list_point"></div></div>
	<div class="game_list_cont">
		<ul>
		<?php for ($i = 0; $i < 7; $i++) { foreach ($this->webgameInfos as $webgameCode => $webgameInfo) { ?>
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
    <div class="flash_main" id="myFlashBox"><div class="flash_content"><iframe width="960" height="560" src="http://seer.61.com/Client.swf"></iframe></div></div>
	<div style="display:block" class="game_notice_seer" id="j_notice">
		<ul class="game_notice_scroll_seer">
			<li class="notice_link_seer"><i></i><span>9月6日-12日，每天13:00-14:00，为了捍卫龙族的荣耀。为了证明龙族守卫军无懈可击的强大实力！布里克超进化VS帕罗狄亚，火爆上线!</span></li>
			<li class="notice_link_seer"><i></i><span>9月6日&mdash;9月12日，每天14:00-15:00,19:00-20:00明星精灵超进化，精元及超进化道具大回馈！还有机会获得极光曜石哦!</span></li>
			<li class="notice_link_seer"><i></i><span>突破极限，传承之母吉米丽娅超进化&mdash;吉安娜火爆登场!</span></li>
			<li class="notice_link_seer"><i></i><span>9月6日-12日全天，为敬爱的老师们送上最真挚的节日祝福就能获得绝版超进化精灵哦!</span></li>
			<li class="notice_link_seer"><i></i><span>给力回馈，天降精灵蛋，蛋蛋有惊喜！暑假错过的boss和明星，绝版回归！快接住你的专属开学大礼包!</span></li>
			<li class="notice_link_seer"><i></i><span>万众期待的“赛尔号开学超值礼包”已经上市，新学期大惊喜，超低价格获得超值道具，不容错过!</span></li>
			<li class="notice_link_seer"><i></i><span>9月6日-9月12日 朱雀守卫争夺战开启招募！赛尔们，快来成为朱雀联盟的一员并争夺冠军吧!</span></li>
		</ul>
	</div>
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
			<?php for ($i = 0; $i < 7; $i++) { foreach ($this->webgameInfos as $webgameCode => $webgameInfo) { ?>
				<a title="<?php echo $webgameInfo['name']; ?>" class="brand_link" href="<?php echo $webgameInfo['url_home']; ?>" target="_blank"><img src="<?php echo $webgameInfo['pic_small']; ?>"><span><?php echo $webgameInfo['name']; ?></span></a>
			<?php } } ?>
			</div>
		</div>
		<span id="j_slideNext" class="slider_r"><i>向后</i></span>
	</div>

	<div class="product_link">
		<a id="j_addFav2" title="收藏赛尔号" href="javascript:void(0);">收藏赛尔号</a>
		<a title="赛尔号攻略" href="http://seer.61.com/main/">赛尔号攻略</a>
		<a title="赛尔论坛" href="http://bbs.61.com/forum.php?mod=forumdisplay&fid=36">赛尔号论坛</a>
		<a title="米币充值" href="http://pay.61.com/buy/payType?type=cardpay&pos=bottom">赛尔号米币充值</a>
		<a title="开通超能NoNo" href="http://pay.61.com/service?pos=bottom">开通超能NoNo</a>
		<a title="问题反馈" href="http://service.61.com/user?gid=2&tid=30">赛尔号问题反馈</a>
		<a title="Flash下载" href="http://get.adobe.com/cn/flashplayer/">Flash下载</a>
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