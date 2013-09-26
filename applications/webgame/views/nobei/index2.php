<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $this->metaDatas['title']; ?></title>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<meta content="Copyright (c) 2006-2010 TENCNET" name="Copyright"> 
<meta content="<?php echo $this->metaDatas['keywords']; ?>" name="Keywords">
<meta content="<?php echo $this->metaDatas['description']; ?>" name="Description">
<link type="image/x-icon" href="<?php echo $this->staticUrl; ?>favico.ico" rel="shortcut icon">
<link media="screen" rel="stylesheet" type="text/css" href="<?php echo $this->staticUrl; ?>nova/css/style.css">
</head>
<body>
<div style="position: absolute;display: none; left:0; top:0;width: 100%;height: 100%; z-index: 900; background: #DFE0E1 ;filter: alpha(opacity=50);opacity: 0.5" class="mask" id="maskDiv"></div>
<div class="container bc ovh">
    <div class="share bc">
		<span class="fl fyh fb">分享到：</span>
		<a title="分享到微博" href="javascript:share('qqwb');" onclick="pgvSendClick({hottag:'index.share.weibo'});" class="spr ht weibo">微博</a>
		<a title="分享到空间" href="javascript:share('qqzone');" onclick="pgvSendClick({hottag:'index.share.qzone'});" class="spr ht qzone">分享到空间</a>
	</div>
    <div class="game bc">
        <div id="framecontent">
        	<iframe width="960" scrolling="no" height="560" frameborder="0" allowtransparency="true" src="<?php echo $this->currentWebgameInfo['url_webgame']; ?>" id="mainiframe"></iframe>
        </div>
    </div>
	<div class="notice w976 bc pr tc">
        <div class="noticebox pa" id="newscon">
            <ul id="newscondiv">
				<li><a target="_blank" href="">玩具总动员机 械叮叮等你来兑换！</a></li>
			</ul>
            <ul id="newsdiv">
				<li><a target="_blank" href="">玩具总动员机 械叮叮等你来兑换！</a></li>
			</ul>
        </div>
        <span class="pa flash-version tr">
            <script>
                var fls=flashChecker();
                var s="";
                if(fls.f) document.write("当前flash版本为: "+fls.v+".0");
                else document.write("您没有安装flash"); 
            </script>当前flash版本为: 11.0
        </span>
    </div>
    <div class="main pr bc ovh">
    	<div class="spr pa main-top">&nbsp;</div>
        <ul class="gglist">
        	<li id="gg1" class="spr">
				<a href="http://www.t3.com.cn/ticket_1405397464825743757.html" target="_blank" onclick="pgvSendClick({hottag:'game.index.single.gg1'});">
					<img width="235" height="85" src="http://ossweb-img.qq.com/upload/adw/image/201308/1377557993602959467.jpg" alt="">
				</a>
			</li>
            <li id="gg2" class="spr"><a href="http://bnn.qq.com/" target="_blank" onclick="pgvSendClick({hottag:'game.index.single.gg2'});"><img width="235" height="85" src="http://ossweb-img.qq.com/upload/adw/image/201308/1377460467817897790.JPG" alt=""></a></li>
            <li id="gg3" class="spr"><a href="http://roco.qq.com/act/a20130705risk/index.htm" target="_blank" onclick="pgvSendClick({hottag:'game.index.single.gg3'});"><img width="235" height="85" src="http://ossweb-img.qq.com/upload/adw/image/201308/1376969294917524115.jpg" alt=""></a></li>
            <li id="gg4" class="spr"><a href="http://roco.qq.com/act/a20130705risk/index.htm" target="_blank" onclick="pgvSendClick({hottag:'game.index.single.gg4'});"><img width="235" height="85" src="http://ossweb-img.qq.com/upload/adw/image/201308/1377227104720848790.jpg" alt=""></a></li>
        </ul>
    	<div class="quick fl ovh">
        	<ul id="quickList" class="quicklist">
            	<li class="spr quick-a"><a title="进入官网" target="_blank" href="<?php echo $this->baseUrl; ?>" class="spr ht q-home">进入官网</a></li>
                <li class="spr quick-a"><a title="洛克VIP" target="_blank" href="<?php echo $this->appInfos['pay']['url']; ?>" class="spr ht q-vip">诺瓦VIP</a></li>
                <li class="spr quick-a"><a title="洛克论坛" target="_blank" href="<?php echo $this->appInfos['bbs']['url']; ?>" class="spr ht q-bbs">诺瓦论坛</a></li>
                <li class="spr quick-a"><a title="洛克电影" target="_blank" href="<?php echo $this->baseUrl; ?>category/17" class="spr ht q-movie">诺瓦视频</a></li>
                <li class="spr quick-a"><a title="官方微博" target="_blank" href="<?php echo 'abc'; ?>" class="spr ht q-weibo">官方微博</a></li>
                <li class="spr quick-a"><a title="保存游戏" href="javascript:saveroco()" class="spr ht q-savegame">保存游戏</a></li>
                <li class="spr quick-a"><a title="礼包兑换" target="_blank" href="<?php echo $this->baseUrl; ?>newhand/" class="spr ht q-cdk">礼包兑换</a></li>
                <li class="spr quick-a"><a title="3366" target="_blank" href="<?php echo $this->baseUrl; ?>" class="spr ht q-3366">进入平台</a></li>
            </ul>
        </div>
        <div id="rotate" class="rotate pr fl ovh">
			<ul class="r-pic">
				<li class="pa" style="opacity: 1; z-index: 1;">
					<a href="http://luokewangguo.tmall.com/shop/view_shop.htm" target="_blank" onclick="pgvSendClick({hottag:'game.index.rotate.ad1'});"><img width="400" height="174" alt="" src="http://ossweb-img.qq.com/upload/adw/image/201308/1376593657246116274.jpg"></a></li>
				<li class="pa" style="opacity: 1; z-index: 1;"><a href="http://www.3366.com/act/a20130701webgame/index6.shtml?ADTAG=cop.yy.roco.banner" target="_blank" onclick="pgvSendClick({hottag:'game.index.rotate.ad2'});"><img width="400" height="174" alt="" src="http://ossweb-img.qq.com/upload/adw/image/201308/1376593806159016717.jpg"></a></li>
				<li class="pa" style="opacity: 1; z-index: 1;"><a href="http://roco.qq.com/act/a20130705risk/index.htm" target="_blank" onclick="pgvSendClick({hottag:'game.index.rotate.ad3'});"><img width="400" height="174" alt="" src="http://ossweb-img.qq.com/upload/adw/image/201308/1377227046595122702.jpg"></a></li>
				<li class="pa" style="opacity: 1; z-index: 1;"><a href="http://cdj.qq.com" target="_blank" onclick="pgvSendClick({hottag:'game.index.rotate.ad4'});"><img width="400" height="174" alt="" src="http://ossweb-img.qq.com/upload/adw/image/201308/1377741972924325792.jpg"></a></li>
				<li class="pa" style="opacity: 1; z-index: 5;"><a href="http://roco.qq.com/play2013/" target="_blank" onclick="pgvSendClick({hottag:'game.index.rotate.ad5'});"><img width="400" height="174" alt="" src="http://ossweb-img.qq.com/upload/adw/image/201308/1377570760542221253.jpg"></a></li>
			</ul>
			
			<div class="r-num">
				<span onclick="loads.gg.ev(0)" class="spr r-non" id="rotate_num1"></span>
				<span onclick="loads.gg.ev(1)" class="spr r-non" id="rotate_num2"></span>
				<span onclick="loads.gg.ev(2)" class="spr r-non" id="rotate_num3"></span>
				<span onclick="loads.gg.ev(3)" class="spr r-non" id="rotate_num4"></span>
				<span onclick="loads.gg.ev(4)" class="spr r-non r-cur" id="rotate_num5"></span>
			</div>
		</div>
        <div class="infor fl ovh">
            <a title="宠物大全" target="_blank" href="<?php echo $this->currentWebgameInfo['url_home']; ?>category?catid=10" class="spr infor-a infor-a1 ht">诺瓦宠物</a>
            <a title="壁纸大全" target="_blank" href="<?php echo $this->currentWebgameInfo['url_home']; ?>category?catid=16" class="spr infor-a infor-a2 ht">诺瓦图片</a>
            <a title="四格漫画" target="_blank" href="<?php echo $this->currentWebgameInfo['url_home']; ?>category?catid15" class="spr infor-a infor-a3 ht">新手指南</a>
        </div>
    </div>
    <div class="data w976 bc">
    	<div id="dataTit" class="spr data-tit w976 pr">
        	<h3 class="none">诺瓦奇兵游戏资料库</h3>
            <a class="ht hide-btn pa" onclick="pgvSendClick({hottag:'game.data.hide'});" href="javascript:hidedata();" title="收起" id="hidedata">收起</a><a class="ht show-btn pa" onclick="pgvSendClick({hottag:'game.data.show'});" href="javascript:showdata();" title="展开" id="showdata" style="display:none">展开</a>
        </div>
        <div id="data-h" class="data-main pr"><div id="dataMain" class="pa data-box">
		<iframe width="1000" scrolling="no" height="766" frameborder="0" src="<?php echo $this->webgameInfos['nova']['url_home']; ?>novasub/" allowtransparency="true"></iframe></div></div>
		<!--<div class="data-main pr" id="data-h"><div class="pa data-box" id="dataMain" delayLoad="load_data()"></div></div>-->
    </div>
    <div class="friend-links tc"><span>友情链接：</span>
		<?php $linkurlInfos = $controller->_getFrontInfos('passport', 'linkurl', 1, 4, array('type =' => 'nova'), array(array('listorder', 'desc'))); foreach ($linkurlInfos['infos'] as $linkurlInfo) { ?>
			<a href="<?php echo $linkurlInfo['url']; ?>" target="_blank"><?php echo $linkurlInfo['name']; ?></a> 
		<?php } ?>
	</div>
    <div class="footer pr">
        <a class="spr pa ht foot_logo" target="_blank" href="http://kid.qq.com"></a>
        <div class="text">
            <p class="linklist">
			<?php foreach (array(2, 3, 4, 19) as $showCatid) { ?>
				<a title="<?php echo $this->categoryInfos[$showCatid]['catname']; ?>" class="hgray" target="_blank" href="http://www.2125.com/about.html"><?php echo $this->categoryInfos[$showCatid]['catname']; ?></a>|
			<?php } ?>
            </p>
            <p>知金伟业教育科技（北京）有限公司 Copyright ? 2008 - 2012 ZhiJin Inc. All Rights Reserved.</p>
			<p>京ICP备09081115号-6 京网文[2013]0506-133号 网络文化经营许可证</p>
            <p>抵制不良游戏    拒绝盗版游戏    注意自我保护    谨防受骗上当    适度游戏益脑    沉迷游戏伤身    合理安排时间    享受健康生活</p>
        </div>
    </div>
</div>
</body>
</html>