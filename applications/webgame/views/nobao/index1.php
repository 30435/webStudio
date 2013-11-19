<?php echo doctype(); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title><?php echo $this->metaDatas['title']; ?></title>
<meta content="<?php echo $this->metaDatas['keywords']; ?>" name="Keywords"> 
<meta content="<?php echo $this->metaDatas['description']; ?>" name="Description">

<link type="image/ico" rel="shortcut icon" href="<?php echo $this->staticUrl; ?>favicon.ico" />
<link type="text/css" rel="stylesheet" href="<?php echo $this->staticUrl; ?>tsource/webgame/seer/css/style.css?v=201301232028"  />
<link type="text/css" rel="stylesheet" href="<?php echo $this->staticUrl; ?>tsource/webgame/seer/css/seer.css?v=201301232028"/>
</head>
<body style="background:#fff;">
<div id="header_3">
	<div class="top-container">
		<h1>
			<a class="logo" target="_blank" href="<?php echo $this->baseUrl; ?>" hidefocus="true" title="<?php echo $this->metaDatas['title']; ?>">
				<img width="137" height="37" src="<?php echo $this->staticUrl; ?>tsource/webgame/topbar/images/2125logo.png"/>
			</a>
		</h1>
		<span class="divide"></span>
		<div class="product-area">
			<ul id="webtop_product_ul" class="product-tab"></ul>
			<div id="webtop_product_hrefs" class="product-hrefs"></div>
		</div>
		<span class="divide"></span>
		<div class="topserve-area">
			<div class="serve-hrefs">
				<a onclick="addFav();" href="javascript:;" class="serve-href href-fav">收藏</a>
				<a href="http://pay.61.com/nono/nonopay" class="serve-href href-pay" target="_blank">充值</a>
				<a href="http://miba.2125.com/thread/l/?fid=2" class="serve-href href-miba" target="_blank">米吧</a>
				<a href="http://service.61.com/" class="serve-href href-service" id="last-serve-href" target="_blank">客服</a>
			</div>
			<div class="topevent-speaker-contain">
				<ul class="topevent-speaker" id="webtop_product_news" style="top: -60px;">
					<li><a target="_blank" href="http://web.2125.com/game/rxhzw.html"><span style="color:#FF0000;">《热血海贼王》12月13日火爆上线</span></a></li>
					<li><a target="_blank" href="http://event.2125.com/signlink?tmcid=180&amp;gamename=hysj">火影世界强势来袭</a></li>
					<li><a target="_blank" href="http://web.2125.com/ddt/login.html?site=web&amp;source=recommendpicture">弹弹堂新服“免费”送米币</a></li>
					<li><a target="_blank" href="http://wo.2125.com">《沃尔学院》5月9日炫世开测</a></li>
					<li><a target="_blank" href="http://pinyin.sogou.com/skins/sv_427261.html?skinidxb4"><span style="color:#0000FF;">2125搜狗输入法第一旦</span></a></li>
					<li><a target="_blank" href="http://web.2125.com/game/rxhzw.html"><span style="color:#FF0000;">《热血海贼王》12月13日火爆上线</span></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div class="blank_7"></div>

<div class="box_game">
	<div class="box_inner">
		<div style="width:956px; height:559px; overflow:hidden; margin:0pt auto;">
			<div id="iframe_seer" style="margin-left:-28px;margin-top:-61px;"><iframe id="frm" src="<?php echo $this->currentWebgameInfo['url_webgame']; ?>" width="1010" height="620" frameborder="0" scrolling="no"></iframe></div>
		</div>
	</div>
</div>
<div class="blank_10"></div>

<div class="nav_seer">
	<div class="navbg">
    	<div class="search_bar">
        	<input class="s_tag" id="seer_search_tag" type="text" onblur="if (value ==''){value='请输入赛尔号攻略、秘籍'}" onfocus="if (value =='请输入赛尔号攻略、秘籍'){value =''}" value="请输入赛尔号攻略、秘籍">
            <input class="s_btn" onclick="seer_search();" type="button" value=""/>
        </div>
        <div class="nav1">
        	<a class="n1" target="_blank" href="<?php echo $this->currentWebgameInfo['url_home']; ?>"><?php echo $this->currentWebgameInfo['name']; ?>首页</a>
            <a class="n2" target="_blank" href="<?php echo $this->categoryInfos[9]['url']; ?>"><?php echo $this->categoryInfos[9]['catname']; ?></a>
            <a class="n3" target="_blank" href="<?php echo $this->categoryInfos[10]['url']; ?>" target="_blank"><?php echo $this->categoryInfos[10]['catname']; ?></a>
            <a class="n4" target="_blank" href="<?php echo $this->categoryInfos[11]['url']; ?>"><?php echo $this->categoryInfos[11]['catname']; ?></a>
            <a class="n5" target="_blank" href="<?php echo $this->categoryInfos[12]['url']; ?>"><?php echo $this->categoryInfos[12]['catname']; ?></a>
            <a class="n6" target="_blank" href="<?php echo $this->categoryInfos[13]['url']; ?>"><?php echo $this->categoryInfos[13]['catname']; ?></a>
        </div>
        <div class="r_btn"><a class="jl" target="_blank" href=""></a><a class="sc" href="javascript:;" onclick=""></a></div>
    </div>
</div>
<div class="sg">
	<ul>
	<?php $i = 1; foreach ($this->webgameInfos as $webgameCode => $webgameInfo) {  if ($i > 8) {break; } ?>
		<li class="game_<?php echo $i; ?>"><a href="<?php echo $webgameInfo['url_home']; ?>" target="_blank" title="<?php echo $webgameInfo['name']; ?>"></a></li>
	<?php $i++; } ?>
    </ul>
    <a class="mor underline" href="http://web.2125.com/" target="_blank">更多>></a>
</div>
<div class="main_box sblue">
	<div class="t1"></div>
    <div class="middle">   
<div class="ml">
        	<div class="t2"></div>
            <div class="ml_m">
                <ul class="ks_n">
					<?php $newInfos = $controller->_getFrontInfos('webgame', 'new', 1, 15, array('catid' => 9), array(array('inputtime', 'desc'))); ?>
					<?php $i = 1; foreach ($newInfos['infos'] as $newInfo) { ?>
						<li><span class="date">[<?php echo date('m/d', $newInfo['inputtime']); ?>]</span><a target="_blank" href="<?php echo $newInfo['url']; ?>"><?php echo $newInfo['title']; ?></a></li>
					<?php if ($i == 5 || $i == 10) echo '<li class="line2"></li>'; $i++; } ?>		        			        			        
                </ul>
                <div class="clear"></div>
                
                <h3 class="ks_t"><a target="_blank" href="<?php echo $this->categoryInfos[14]['url']; ?>">更多</a></h3>
                <ul class="ks_n">
					<?php $newInfos = $controller->_getFrontInfos('webgame', 'new', 1, 12, array('catid' => 14), array(array('inputtime', 'desc'))); ?>
					<?php $i = 1; foreach ($newInfos['infos'] as $newInfo) { ?>
						<li><span class="date">[<?php echo date('m/d', $newInfo['inputtime']); ?>]</span><a target="_blank" href="<?php echo $newInfo['url']; ?>"><?php echo $newInfo['title']; ?></a></li>
					<?php if ($i == 5 || $i == 10) echo '<li class="line2"></li>'; $i++; } ?>		        			        			        
                </ul>
                
            </div>
            <div class="clear"></div>
            <div class="b2"></div>
        </div>	
        <div class="mm">
        	
        	<div class="seer_box">
            	<div class="t3">
                	<a class="more" href="<?php echo $this->categoryInfos[15]['url']; ?>" target="_blank"></a>
                	<span class="glic"></span><span class="glwz"></span>
                </div>
                <div class="con">
					<?php $newInfos = $controller->_getFrontInfos('webgame', 'new', 1, 4, array('catid' => 15), array(array('inputtime', 'desc'))); ?>
					<?php $i = 1; foreach ($newInfos['infos'] as $newInfo) { ?>
						<?php if ($i % 2 == 1) { ?><h4 class="title1"><a href="<?php echo $newInfo['url']; ?>" target="_blank"><?php echo $newInfo['title']; ?></a></h4><?php } ?>
						<?php if ($i % 2 == 0) { ?><h4 class="title2"><a href="<?php echo $newInfo['url']; ?>" target="_blank"><?php echo $newInfo['title']; ?></a></h4><?php } ?>
					<?php $i++; } ?> 	 		
	                <ul class="news pt10">
					<?php $newInfos = $controller->_getFrontInfos('webgame', 'new', 1, 10, array('catid' => 15), array(array('inputtime', 'desc'))); ?>
					<?php $i = 1; foreach ($newInfos['infos'] as $newInfo) { ?>
						<li><span class="date">[<?php echo date('m/d', $newInfo['inputtime']); ?>]</span><a target="_blank" href="<?php echo $newInfo['url']; ?>"><?php echo $newInfo['title']; ?></a></li>
					<?php if ($i == 5 || $i == 10) echo '<li class="line2"></li>'; $i++; } ?>		        			        			        
                    </ul>
                </div>
                <div class="b3"></div>
            </div>
            
            <div class="seer_box pl8">
            	<div class="t3">
                	<a class="more" href="<?php echo $this->categoryInfos[13]['url']; ?>" target="_blank"></a>
                	<span class="mjic"></span><span class="mjwz"></span>
                </div>
                <div class="con">
                	<ul class="news pt5">                	
					<?php $newInfos = $controller->_getFrontInfos('webgame', 'new', 1, 15, array('catid' => 13), array(array('inputtime', 'desc'))); ?>
					<?php $i = 1; foreach ($newInfos['infos'] as $newInfo) { ?>
						<li><span class="date">[<?php echo date('m/d', $newInfo['inputtime']); ?>]</span><a target="_blank" href="<?php echo $newInfo['url']; ?>"><?php echo $newInfo['title']; ?></a></li>
					<?php if ($i == 5 || $i == 10) echo '<li class="line2"></li>'; $i++; } ?>		        			        			        
                    </ul>
                </div>
                <div class="b3"></div>
            </div>  
        </div>
        
        
        <div class="seer_line"></div>
        <div class="mm mt2">
        	
        	<div class="seer_box">
            	<div class="t3">
                	<a class="more" href="<?php echo $this->categoryInfos[12]['url']; ?>" target="_blank"></a>
                	<span class="dzic"></span><span class="dzwz"></span>
                </div>
                <div class="con">
					<?php $newInfos = $controller->_getFrontInfos('webgame', 'new', 1, 4, array('catid' => 11), array(array('inputtime', 'desc'))); ?>
					<?php $i = 1; foreach ($newInfos['infos'] as $newInfo) { ?>
						<?php if ($i % 2 == 1) { ?><h4 class="title1"><a href="<?php echo $newInfo['url']; ?>" target="_blank"><?php echo $newInfo['title']; ?></a></h4><?php } ?>
						<?php if ($i % 2 == 0) { ?><h4 class="title2"><a href="<?php echo $newInfo['url']; ?>" target="_blank"><?php echo $newInfo['title']; ?></a></h4><?php } ?>
					<?php $i++; } ?> 		
                    <ul class="news pt10">
					<?php $newInfos = $controller->_getFrontInfos('webgame', 'new', 1, 10, array('catid' => 12), array(array('inputtime', 'desc'))); ?>
					<?php $i = 1; foreach ($newInfos['infos'] as $newInfo) { ?>
						<li><span class="date">[<?php echo date('m/d', $newInfo['inputtime']); ?>]</span><a target="_blank" href="<?php echo $newInfo['url']; ?>"><?php echo $newInfo['title']; ?></a></li>
					<?php if ($i == 5 || $i == 10) echo '<li class="line2"></li>'; $i++; } ?>		        			        			        
                    </ul>
                </div>
                <div class="b3"></div>
            </div>
            
            <div class="seer_box pl8">
            	<div class="t3"><a class="more" href="<?php echo $this->categoryInfos[17]['url']; ?>" target="_blank"></a><span class="jhic"></span><span class="jhwz"></span></div>
                <div class="con">
                	<ul class="news">
					<?php $newInfos = $controller->_getFrontInfos('webgame', 'new', 1, 15, array('catid' => 17), array(array('inputtime', 'desc'))); ?>
					<?php $i = 1; foreach ($newInfos['infos'] as $newInfo) { ?>
						<li><span class="date">[<?php echo date('m/d', $newInfo['inputtime']); ?>]</span><a target="_blank" href="<?php echo $newInfo['url']; ?>"><?php echo $newInfo['title']; ?></a></li>
					<?php if ($i == 5 || $i == 10) echo '<li class="line2"></li>'; $i++; } ?>		        			        			        
                    </ul>
                </div>
                <div class="b3"></div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="b1"></div>
</div>
<div class="bizhiBox">
	<div class="top"><a class="more" href="<?php echo $this->categoryInfos[16]['url']; ?>" target="_blank"></a></div>
    <div class="con">
    	<ul>
		<?php $newInfos = $controller->_getFrontInfos('webgame', 'new', 1, 4, array('catid' => 16), array(array('inputtime', 'desc'))); ?>
		<?php $i = 1; foreach ($newInfos['infos'] as $newInfo) { ?>
			<li><a href="<?php echo $newInfo['thumb']; ?>" target="_blank"><img src="<?php echo $newInfo['thumb']; ?>" /></a><p><a href="<?php echo $newInfo['title']; ?>" target="_blank"><?php echo $newInfo['title']; ?></a></p></li>
		<?php if ($i == 5 || $i == 10) echo '<li class="line2"></li>'; $i++; } ?>						
        </ul>
        <div class="clear"></div>
    </div>
    <div class="btm">
    </div>
</div>
<div class="jinglingBox">
    <div class="jl_title"><a class="back" href="javascript:;" onclick="$(document).scrollTop(0);return false;"></a></div> 
	<div id="ul_midd">
		<ul class="jltj_ul">      			       				       			
		<?php $newInfos = $controller->_getFrontInfos('webgame', 'new', 1, 32, array('catid' => 10), array(array('inputtime', 'desc'))); ?>
		<?php foreach ($newInfos['infos'] as $newInfo) { ?>
			<li id="865" jl_num="2" name="<?php echo $newInfo['title']; ?>" py="t"><a href="<?php echo $newInfo['url']; ?>" target="_blank"><img name="page_cnt_1" src="<?php echo $newInfo['thumb']; ?>" /><p><?php echo $controller->cutstr($newInfo['title'], 15); ?></p></a></li>
		<?php } ?>
		</ul>
	</div>
	<div class="jl_btm"></div> 
</div>
<div class="blank_10"></div>
<div class="footer_line"></div>
<div id="footer">
    <div class="f_notice">
    	<p>小游戏作品版权归原作者享有，如无意之中侵犯了您的版权，请您按照<a class="hgray" target="_blank" href="http://www.2125.com/copyright.html">《版权保护投诉指引》</a>来信告知，本网站将应您的要求删除。<br/>2125温馨提示：抵制不良游戏  拒绝盗版游戏  注意自我保护  谨防受骗上当  适度游戏益脑  沉迷游戏伤身  合理安排时间  享受健康生活</p>
	</div>
    <div class="row">
	<?php foreach (array(2, 3, 4, 19, 20, 21, 22) as $showCatid) { ?>
		<a title="<?php echo $this->categoryInfos[$showCatid]['catname']; ?>" href="<?php echo $this->categoryInfos[$showCatid]['url']; ?>" rel="nofollow" target="_blank"><?php echo $this->categoryInfos[$showCatid]['catname']; ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
	<?php } ?>
    </div>
    <div class="row">知金伟业教育科技（北京）有限公司 Copyright ? 2008 - 2012 ZhiJin Inc. All Rights Reserved. &nbsp;&nbsp;&nbsp;&nbsp;京ICP备09081115号-6 京网文[2013]0506-133号 网络文化经营许可证</div>
    <div class="row"></div>
</div>
</body>
</html>
