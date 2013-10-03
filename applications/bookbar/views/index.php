<?php echo $this->load->view('header_base'); ?>
<!-- [if lte IE 8]>
<meta http-equiv="X-UA-Compatible" content="IE=7,chrome=1" />
<![endif]-->
<link type="text/css" rel="stylesheet" href="<?php echo $this->staticUrl; ?>bookbar/css/core.packed.css?201301311453">
<link type="text/css" rel="stylesheet" href="<?php echo $this->staticUrl; ?>bookbar/css/jquery-ui-1.8.16.custom.min.css">
<link type="text/css" rel="stylesheet" href="<?php echo $this->staticUrl; ?>bookbar/css/model.packed.css?201302270930">
<!--[if IE 6]>
<script type="text/javascript" src="<?php echo $this->staticUrl; ?>bookbar/js/DD_belatedPNG.js"></script>
<script type="text/javascript"> document.execCommand("BackgroundImageCache", false, true); </script>
<![endif]-->
<script src="http://img.motieimg.com/_resources/js/release/plugin.js?201211010520" type="text/javascript"></script>
<script src="http://img.motieimg.com/_resources/js/release/Motie.core.packed.js?201309021552" type="text/javascript"></script>
<script type="text/javascript">
$(function(){
	Mo.init.InitAll();
	Mo.core.collect();
})
</script>
<link media="all" href="<?php echo $this->staticUrl; ?>bookbar/css/square.css?201303071915" type="text/css" rel="stylesheet">
<style type="text/css">
/* mod chapter- update */
.mod-chapter-update .hd .tabs2 li, .update-chapter-list td {
	background: url(http://img.motieimg.com/_resources/css/special/Specialty/sp.png) no-repeat;
}
.mod-chapter-update .hd .title-bd { height: 40px; line-height: 40px; }
.mod-chapter-update .hd .tabs2 { position: absolute; left: 217px; top: 13px; }
	.mod-chapter-update .hd .tabs2 li { cursor: pointer; float: left; width: 95px; height: 29px; line-height: 29px; text-align: center; margin-right: 10px; background-position: 0 -120px; }
	.mod-chapter-update .hd .tabs2 li.current { background-position: 0 -150px; }

.update-chapter-list table { width: 100%; table-layout: fixed; }
	.update-chapter-list th, .update-chapter-list td { padding: 0 15px; color: #666; }
	.update-chapter-list th { background: #dfdfdf; height: 29px; line-height: 29px; }
	.update-chapter-list td { height: 40px; line-height: 40px; background-color: #f4f4f4; background-position: left bottom; background-repeat: repeat-x; }
		.update-chapter-list td div { overflow: hidden; white-space: nowrap; text-overflow: ellipsis; width: 100%; }
	.update-chapter-list td.col4 { font-family: Arial; color: #666; }
		.update-chapter-list .book-name { color: #06c; font-size: 14px; margin-right: 5px; }
		.update-chapter-list .author, .update-chapter-list .cat-name { color: #666; }
		.update-chapter-list .chapter-name { color: #666; }
</style>

<style type="text/css">
	.mod-qianshu ul { margin-bottom: -2px; overflow: hidden; }
		.mod-qianshu li { padding: 10px; background: url(http://img.motieimg.com/_resources/css/img/home-sp.png?2) repeat-x left 94px; }
			.mod-qianshu li .lpic { padding-right: 10px; }
				.mod-qianshu li .lpic img { padding: 2px; background: #fff; } 
			.mod-qianshu li .rtext p.title { padding: 5px 0; line-height: 1.5em; font-size: 14px; font-weight: bold; }
</style>
<!--[if IE]>
<link href="<?php echo $this->staticUrl; ?>bookbar/css/style-ie.css?201209101757" rel="stylesheet" type="text/css" />
<![endif]--> 
<script charset="UTF-8" src="http://js.t.sinajs.cn/open/api/js/api/bundle.js?version=20130730"></script>
<script charset="UTF-8" src="http://js.t.sinajs.cn/open/api/js/widget/iframeWidget/iframeWidget.js?version=20130828"></script>
</head>
<body class="page-type-square">
<div class="body-bg">
	<div class="wrap">
<div class=" not-login no-level2" id="header">
	<div class="bd">
		<h1 class="logo">
			<a href="/"><img alt="" src="<?php echo $this->staticUrl; ?>bookbar/images/logo-new.jpg"><img width="19" height="16" src="<?php echo $this->staticUrl; ?>bookbar/images/ico-home.png?3" class="ico-home"></a>
		</h1>
		<span class=" nav-level-1">
			<a class="n-square" href="/">首页</a><!-- <img src="http://img.motieimg.com/_assets/ico-hot.png" width="24" height="37" class="ico" alt="" /><a href="/jingpin" class="n-classic">精品</a> -->
			<a class="n-bookall" href="/all">书库</a>
			<a class="n-bookall" href="/top10">排行</a>
			<a href="/group/545/">论坛</a>
		</span>
		<div id="person-status" class="person-status"><div class="person-controal"><a href="/accounts/login">登录</a><a class="last" href="/accounts/register">注册</a></div></div>
		<div id="search-top">
			<form action="/rest/" method="get">
				<input type="text" value="" class="search lst is-empty-value ui-autocomplete-input" id="search-global" name="queryString" placeholder="找书、成员、小组、文章" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true">
				<input type="submit" class="lsb" value="">
				<span class="loadIco must-hide"></span>
			</form>
		</div><!-- end search top -->
	</div>
</div>

<div class="mod channel-change">
	<div class="bd">
		<div class="item item1">
			<a data-channel="classic" class="channel-button channel-classic" href="javascript:;">
				<div class="lpic"></div>
				<div class="rtext">
					<span class="arrow"></span>
					<span class="title"></span>
				</div>
			</a>
		</div>
		<div class="item divide"></div>
		<div class="item item2">
			
				
					<h3><a href="http://www.motie.com/topic/20690" target="_blank" data-control-type="shelf" boxid="header_classic">白鹭未双作品强势占领苹果客户端：笔尖爱情</a></h3>
				
			
				
			
				
			
			<p>
				
					
				
					
						<a href="http://www.motie.com/topic/20362" target="_blank">对话童馨儿：做你喜欢的事</a>
						
							<span>|</span>
						
					
				
					
						<a href="http://www.motie.com/topic/20111" target="_blank">栈长明天见，栈长天天见&mdash;&mdash;栈长力荐</a>
						
					
				
			</p>
		</div>
		<div class="item divide"></div>
		<div class="item item3">
			<p class="i1">
				
					
						<a href="http://www.motie.com/about/reward2013" target="_blank" data-control-type="shelf" boxid="header_common">2013(下半年)作者千万奖励计划</a>
					
				
					
				
					
				
			</p>
			<p class="i2">
				
					
				
					
						<a href="http://www.motie.com/about/faq" target="_blank">常见问题</a><span>|</span>
					
				
					
						<a href="http://www.motie.com/topic/3832" target="_blank">签约流程</a><span>|</span>
					
				
				<a class="show-weibo" target="_blank" href="http://weibo.com/2168130287/profile?topnav=1&amp;wvr=5"><img width="16" height="14" alt="" src="http://img.motieimg.com/_assets/wb_logo16_a.png" class="png">关注磨铁</a>
			</p>
		</div>
	</div>
	<script charset="utf-8" type="text/javascript" src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js"></script>
	<div class="weibo" style="display: none;">
		<ul>
			<li class="first">
				<div class="lpic">官方微博</div>
				<div class="rtext">
					<wb:follow-button height="24" width="136" type="red_2" uid="2168130287"><iframe width="136" scrolling="no" height="24" frameborder="0" src="http://widget.weibo.com/relationship/followbutton.php?btn=red&amp;style=2&amp;uid=2168130287&amp;width=136&amp;height=24&amp;language=zh_cn" marginheight="0"></iframe></wb:follow-button>
				</div>
			</li>
			<li>
				<div class="lpic">磨铁书栈</div>
				<div class="rtext"><wb:follow-button height="24" width="136" type="red_2" uid="3174239721"><iframe width="136" scrolling="no" height="24" frameborder="0" src="http://widget.weibo.com/relationship/followbutton.php?btn=red&amp;style=2&amp;uid=3174239721&amp;width=136&amp;height=24&amp;language=zh_cn" marginheight="0"></iframe></wb:follow-button></div>
			</li>
		</ul>
	</div>
	<ul class="channel-select-list">
		<li>
			<a data-channel="male" class="channel-button channel-male" href="/male">
				<div class="lpic"></div>
				<div class="rtext">
					<span class="title"></span>
				</div>
			</a>
		</li>
		<li>
			<a data-channel="female" class="channel-button channel-female" href="/female">
				<div class="lpic"></div>
				<div class="rtext">
					<span class="title"></span>
				</div>
			</a>
		</li>
		<li style="display: none;">
			<a data-channel="classic" class="channel-button channel-classic" href="/classic">
				<div class="lpic"></div>
				<div class="rtext">
					<span class="title"></span>
				</div>
			</a>
		</li>
	</ul>
</div>
<script type="text/javascript">
	$(function(){
		var getChannelList = $('.channel-change .item1 a'), channelList = $('.channel-select-list');
		channelList.find('a[data-channel='+getChannelList.data('channel')+']').parent().hide();
		getChannelList.click(function(){
			if(channelList.is(':visible')){
				channelList.hide();
			}else{
				channelList.show();
				setTimeout(function(){
					$(document).one('mousedown', function(e){
						if(e.target != getChannelList[0] &amp;&amp; e.target != channelList[0] &amp;&amp; !$.contains(channelList[0], e.target) &amp;&amp; !$.contains(getChannelList[0],e.target)){
							channelList.hide();
						}
					})
				},1)
			}
			return false;
		});
		
		var weibo = $('.show-weibo'), weiboDialog = $('.channel-change .weibo');
		var timer = null;
		var clearTimer = function(){
			if(timer){
				clearTimeout(timer);
				timer = null;
			}
		}
		weibo.hover(function(){
			clearTimer();
			weiboDialog.show()
		},function(){
			clearTimer();
			timer = setTimeout(function(){
				weiboDialog.hide();
			},50)
		});
		weiboDialog.hover(function(){
			clearTimer();
			weiboDialog.show()
		},function(){
			clearTimer();
			timer = setTimeout(function(){
				weiboDialog.hide();
			},50)
		});
	})
</script>
				<div id="main">
					<div style="width: auto;" class="left">
						<div id="Billboard" class="mod">
							<div class="bd">
								<div data-collect-id="41" class="block a1">
									
       
<div class="tabs">
	<ul class="list">
		
		<li data-collect-index="1" class="current">
			<img width="41" height="57" alt="死者的眼睛" src="http://img.motieimg.com/book/10680s1.jpg">
		</li>
		
		<li data-collect-index="2" class="">
			<img width="41" height="57" alt="黄泉眼之印1" src="http://img.motieimg.com/book/3063s3.jpg">
		</li>
		
		<li data-collect-index="3" class="">
			<img width="41" height="57" alt="妈妈有办法，宝宝就聪明" src="http://img.motieimg.com/book/8191s1.jpg">
		</li>
		
		<li data-collect-index="4" class="">
			<img width="41" height="57" alt="承欢愿" src="http://img.motieimg.com/book/9564s3.jpg">
		</li>
		
	</ul>
	
		<div class="tabs-content" style="display: block;">
			<a data-collect-index="1" href="/book/10680" target="_blank">
				<img width="200" height="280" alt="死者的眼睛" src="http://img.motieimg.com/book/10680l1.jpg">
			</a>
		</div>
	
		<div style="display: none;" class="tabs-content">
			<a data-collect-index="2" href="/book/3063" target="_blank">
				<img width="200" height="280" alt="黄泉眼之印1" src="http://img.motieimg.com/book/3063l3.jpg">
			</a>
		</div>
	
		<div style="display: none;" class="tabs-content">
			<a data-collect-index="3" href="/book/8191" target="_blank">
				<img width="200" height="280" alt="妈妈有办法，宝宝就聪明" src="http://img.motieimg.com/book/8191l1.jpg">
			</a>
		</div>
	
		<div style="display: none;" class="tabs-content">
			<a data-collect-index="4" href="/book/9564" target="_blank">
				<img width="200" height="280" alt="承欢愿" src="http://img.motieimg.com/book/9564l3.jpg">
			</a>
		</div>
	
</div>


	<div class="tabs-content-2" style="display: block;">
		<h3><a data-collect-index="1" href="/book/10680" data-control-type="shelf" boxid="slider_classic" target="_blank">死者的眼睛</a></h3>
		<p>
			<a data-collect-index="1" href="/book/10680" target="_blank">
				时隐时现的黑衣女人，病床下的诡异信息，停尸间里的凶险秘密……<img alt="打开" src="http://img.motieimg.com/_assets/li-6.gif">
			</a>
		</p>
	</div>

	<div style="display: none;" class="tabs-content-2">
		<h3><a data-collect-index="2" href="/book/3063" data-control-type="shelf" boxid="slider_classic" target="_blank">黄泉眼之印1</a></h3>
		<p>
			<a data-collect-index="2" href="/book/3063" target="_blank">
				我是一个“水鬼”，这书是本最富传奇色彩的深海探险小说！<img alt="打开" src="http://img.motieimg.com/_assets/li-6.gif">
			</a>
		</p>
	</div>

	<div style="display: none;" class="tabs-content-2">
		<h3><a data-collect-index="3" href="/book/8191" data-control-type="shelf" boxid="slider_classic" target="_blank">妈妈有办法，宝宝就聪明</a></h3>
		<p>
			<a data-collect-index="3" href="/book/8191" target="_blank">
				实用性超强！讲述孩子成长中经常遇到的问题并给出解决方法！<img alt="打开" src="http://img.motieimg.com/_assets/li-6.gif">
			</a>
		</p>
	</div>

	<div style="display: none;" class="tabs-content-2">
		<h3><a data-collect-index="4" href="/book/9564" data-control-type="shelf" boxid="slider_classic" target="_blank">承欢愿</a></h3>
		<p>
			<a data-collect-index="4" href="/book/9564" target="_blank">
				深深宫墙里沅馨偶遇一生挚爱，不料意外却牵绊接踵而至，浪迹天涯还是深留宫中？<img alt="打开" src="http://img.motieimg.com/_assets/li-6.gif">
			</a>
		</p>
	</div>


								</div>
								<div class="block a2">
									<div data-collect-id="42" class="c-1">
										<h3 data-collect-index="1" class="font-songti">
											
												<a href="/book/11740" target="_blank" data-control-type="shelf" boxid="tushu_recommend_1">下面等着你：会讲话的死者</a>
											
												<a href="/book/28812" target="_blank" data-control-type="shelf" boxid="tushu_recommend_1">到底是谁：噬魂藤</a>
											
										</h3>
										<p data-collect-index="2">
											
												<a href="/book/2298" target="_blank" data-control-type="shelf" boxid="tushu_recommend_2">英雄折腰：魅姬：媚倾天下</a>
												
												|
												 
											
												<a href="/book/9299" target="_blank" data-control-type="shelf" boxid="tushu_recommend_2">三王争霸：崇祯王朝</a>
												
												|
												 
											
												<a href="/book/861" target="_blank" data-control-type="shelf" boxid="tushu_recommend_2">掩面而泣：孩子，爸爸其实不想和妈妈离婚</a>
												<br>
												
												 
											
												<a href="/book/10868" target="_blank" data-control-type="shelf" boxid="tushu_recommend_2">看小说，学人脉：富二代</a>
												
												|
												 
											
												<a href="/book/6746" target="_blank" data-control-type="shelf" boxid="tushu_recommend_2">吃喝玩乐减肥法</a>
												
												|
												 
											
												<a href="/book/11728" target="_blank" data-control-type="shelf" boxid="tushu_recommend_2">秘术：鼎玉铉</a>
												
												
												 
											
										</p>
									</div>
									<div data-collect-id="43" class="c-2">
										<h3 data-collect-index="1" class="font-songti">
											
												<a href="/book/778" target="_blank" data-control-type="shelf" boxid="tushu_recommend_3">那女孩对我说</a>
											
												<a href="/book/1472" target="_blank" data-control-type="shelf" boxid="tushu_recommend_3">你是我的青春：极端优雅的少年</a>
											
										</h3>
										<p data-collect-index="2">
											
												<a href="/book/92" target="_blank" data-control-type="shelf" boxid="tushu_recommend_4">沧月：七夜雪</a>
												
												|
												 
											
												<a href="/book/9466" target="_blank" data-control-type="shelf" boxid="tushu_recommend_4">望而生畏：九号房</a>
												
												|
												 
											
												<a href="/book/8122" target="_blank" data-control-type="shelf" boxid="tushu_recommend_4">20几岁女孩，动情先动脑</a>
												<br>
												
												 
											
												<a href="/book/12565" target="_blank" data-control-type="shelf" boxid="tushu_recommend_4">你有爹可拼吗：你在荒废时间的时候，别人都在拼命</a>
												
												
												 
											
										</p>
									</div>
									<div data-collect-id="44" class="c-3">
										<h3 data-collect-index="1" class="font-songti">
											
												<a href="/book/9465" target="_blank" data-control-type="shelf" boxid="tushu_recommend_5">物欲横流：剩女当嫁</a>
											
												<a href="/book/68" target="_blank" data-control-type="shelf" boxid="tushu_recommend_5">梅子黄时雨：江南恨</a>
											
										</h3>
										<p data-collect-index="2">
											
												<a href="/book/6754" target="_blank" data-control-type="shelf" boxid="tushu_recommend_6">此后，不再爱你</a>
												
												|
												 
											
												<a href="/book/776" target="_blank" data-control-type="shelf" boxid="tushu_recommend_6">心动千年：鸾，我的前半生，我的后半生3</a>
												
												|
												 
											
												<a href="/book/773" target="_blank" data-control-type="shelf" boxid="tushu_recommend_6">爱情绝唱：鸾，我的前半生，我的后半生2</a>
												<br>
												
												 
											
										</p>
									</div>
								</div>
								<div class="block a3">
									<ul class="tabs">
										<li data-cid="45" class="current">点击榜</li>
										<li data-cid="46">推荐榜</li>
										<li data-cid="47" class="last">订阅榜</li>
									</ul>
									<ul data-collect-id="45" class="list" style="display: block;">
										
											
												<li class="top">
													<a class="fb pic" data-collect-index="1" target="_blank" href="/book/12383"><img width="50" height="70" src="http://img.motieimg.com/book/12383s1.jpg"></a>
													<span style="position: relative; top: 7px;">
														 <a href="/book/12383" data-collect-index="1" class="fb" target="_blank">必须犯规的游戏</a>
														 <span class="author">作者：<a class="deep-blue fz-12" href="/people/151016" target="_blank">宁航一V</a></span>
													</span>
											</li>
											
											
										
											
											
												<li>
													<a href="/book/691" data-collect-index="2" target="_blank">黑档案：东北第一黑帮覆灭记</a>
												</li>
											
										
											
											
												<li>
													<a href="/book/20276" data-collect-index="3" target="_blank">当李晓峰成为SKY</a>
												</li>
											
										
											
											
												<li>
													<a href="/book/7702" data-collect-index="4" target="_blank">爱要深，心要狠，幸福不能等</a>
												</li>
											
										
											
											
												<li>
													<a href="/book/12385" data-collect-index="5" target="_blank">战争教父李靖</a>
												</li>
											
										
											
											
												<li>
													<a href="/book/755" data-collect-index="6" target="_blank">官术</a>
												</li>
											
										
											
											
												<li>
													<a href="/book/252" data-collect-index="7" target="_blank">婚姻是女人一辈子的事</a>
												</li>
											
										
											
											
												<li>
													<a href="/book/1404" data-collect-index="8" target="_blank">盗墓阴阳录</a>
												</li>
											
										
											
											
												<li>
													<a href="/book/633" data-collect-index="9" target="_blank">做单</a>
												</li>
											
										
											
											
												<li>
													<a href="/book/8979" data-collect-index="10" target="_blank">领导班子 </a>
												</li>
											
										
										<li class="more"><a target="_blank" data-collect-index="11" href="/top10/dianji/tushu/day">·更多</a></li>
									</ul>
									<ul data-collect-id="46" style="display:none" class="list">
										
											
												<li class="top">
													<a class="fb pic" target="_blank" data-collect-index="1" href="/book/12383"><img width="50" height="70" src="http://img.motieimg.com/book/12383s1.jpg"></a>
													<span style="position: relative; top: 7px;left:5px">
														 <a href="/book/12383" class="fb" data-collect-index="1" target="_blank">必须犯规的游戏</a>
														 <span class="author">作者：<a class="deep-blue fz-12" href="/people/151016" target="_blank">宁航一V</a></span>
													</span>
											</li>
											
											
										
											
											
												<li>
													<a href="/book/378" data-collect-index="2" target="_blank">我和三个穿CK的美女</a>
												</li>
											
										
											
											
												<li>
													<a href="/book/20276" data-collect-index="3" target="_blank">当李晓峰成为SKY</a>
												</li>
											
										
											
											
												<li>
													<a href="/book/1371" data-collect-index="4" target="_blank">一杯咖啡de时光</a>
												</li>
											
										
											
											
												<li>
													<a href="/book/29746" data-collect-index="5" target="_blank">藏獒笔记</a>
												</li>
											
										
											
											
												<li>
													<a href="/book/29120" data-collect-index="6" target="_blank">藏獒笔记之反盗猎可可西里</a>
												</li>
											
										
											
											
												<li>
													<a href="/book/11137" data-collect-index="7" target="_blank">西游记</a>
												</li>
											
										
											
											
												<li>
													<a href="/book/691" data-collect-index="8" target="_blank">黑档案：东北第一黑帮覆灭记</a>
												</li>
											
										
											
											
												<li>
													<a href="/book/28775" data-collect-index="9" target="_blank">给我一个理由忘记</a>
												</li>
											
										
											
											
												<li>
													<a href="/book/28812" data-collect-index="10" target="_blank">噬魂藤</a>
												</li>
											
										
										<li class="more"><a target="_blank" data-collect-index="11" href="/top10/tuijian/tushu/day">·更多</a></li>
									</ul>
									<ul data-collect-id="47" style="display:none" class="list">
										
											
												<li class="top">
													<a class="fb pic" target="_blank" data-collect-index="1" href="/book/20276"><img width="50" height="70" src="http://img.motieimg.com/book/20276s1.jpg"></a>
													<span style="position: relative; top: 7px;">
														  <a href="/book/20276" class="fb" data-collect-index="1" target="_blank">当李晓峰成为SKY</a>
														 <span class="author"> 作者：<a class="deep-blue fz-12" href="/people/903640" target="_blank">李晓峰V</a></span>
													</span>
											</li>
											
											
										
											
											
												<li>
													<a href="/book/28775" data-collect-index="2" target="_blank">给我一个理由忘记</a>
												</li>
											
										
											
											
												<li>
													<a href="/book/28812" data-collect-index="3" target="_blank">噬魂藤</a>
												</li>
											
										
											
											
												<li>
													<a href="/book/30559" data-collect-index="4" target="_blank">敛骨人笔记</a>
												</li>
											
										
											
											
												<li>
													<a href="/book/9246" data-collect-index="5" target="_blank">丑女皇后</a>
												</li>
											
										
											
											
												<li>
													<a href="/book/8979" data-collect-index="6" target="_blank">领导班子 </a>
												</li>
											
										
											
											
												<li>
													<a href="/book/691" data-collect-index="7" target="_blank">黑档案：东北第一黑帮覆灭记</a>
												</li>
											
										
											
											
												<li>
													<a href="/book/12383" data-collect-index="8" target="_blank">必须犯规的游戏</a>
												</li>
											
										
											
											
												<li>
													<a href="/book/12800" data-collect-index="9" target="_blank">青山湿遍</a>
												</li>
											
										
											
											
												<li>
													<a href="/book/9094" data-collect-index="10" target="_blank">我的特种生涯</a>
												</li>
											
										
										<li class="more"><a target="_blank" data-collect-index="11" href="/top10/dingyue/tushu/day">·更多</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					
					<div class="ad empty-mod mod">
						<a target="_blank" href="/mid"><img width="980" height="100" src="http://img.motieimg.com/img/13799011348877557_980_100.jpg"></a>
					</div>
					
					<div class="left fl">
						<div class="left-bd">
							<div class="mod  editors-choice">
								<div class="hd">
									<a class="more" href="#">更多&gt;&gt;</a>
									<img alt="精品推荐" src="http://img.motieimg.com/_resources/css/img/t4.png">
								</div>
								<div class="bd">
									<div class="mod-basic-txtbox-layout txt-items-two-columns clear">
										<div data-collect-id="48" class="txtbox-item big">
											<div class="txtbox-bd">
												<div class="clear">
													
													
														
       
<div class="txtbox-pic">
	<div class="txtbox-pic-wrap">
		<a style="" class="deep-blue" href="/book/6383" data-collect-index="1" target="_blank"><img width="70" height="98" alt="" src="http://img.motieimg.com/book/6383s2.jpg"></a>
	</div>
</div>
<div class="txtbox-content">
	<h5><a href="/book/6383" target="_blank" data-collect-index="1" data-control-type="shelf" boxid="tu_picture_0">禁忌游戏</a></h5>
	<div class="txtbox-text">
		<p class="desc">
			脚印、怪影、红衣女，毛骨悚然的事情正在发生着，惊悚的氛围、扑朔迷离的画面让我们身临其境！
		</p>
		<p class="info">
			作者：<a class="author blue" target="_blank" href="/people/108821">花想容V</a><br>
			
		</p>
	</div>
</div>
													
												</div>
												<!--------------------------------------列表-------------------------------------->
												<p data-collect-index="2" class="outer-text">
															
														<a class="col1" href="http://www.motie.com/all?sort=17&amp;tag1=&amp;tag=&amp;publication=true&amp;words=-1&amp;updateDay=-1&amp;free=&amp;finish=&amp;group=3&amp;order=0" data-control-type="shelf" boxid="tushu_body_1_1">[文学]</a>
														
														
															
														
														<a class="col2" href="/book/12013" data-control-type="shelf" boxid="tushu_body_1_1">精神桃源：蓝的情人</a>
														
															
														
														
														<a class="col3" href="/book/10310" data-control-type="shelf" boxid="tushu_body_1_1">不可复制：北纬已北</a>
													
															
														<a class="col1" href="http://www.motie.com/all?sort=12&amp;tag1=&amp;tag=&amp;publication=true&amp;words=-1&amp;updateDay=-1&amp;free=&amp;finish=&amp;group=3&amp;order=0" data-control-type="shelf" boxid="tushu_body_1_2">[生活]</a>
														
														
															
														
														<a class="col2" href="/book/18697" data-control-type="shelf" boxid="tushu_body_1_2">我的两个世界</a>
														
															
														
														
														<a class="col3" href="/book/12687" data-control-type="shelf" boxid="tushu_body_1_2">平民生活：叶落长安</a>
													
															
														<a class="col1" href="http://www.motie.com/all?sort=5&amp;tag1=&amp;tag=&amp;publication=true&amp;words=-1&amp;updateDay=-1&amp;free=&amp;finish=&amp;group=3&amp;order=0" data-control-type="shelf" boxid="tushu_body_1_3">[军事]</a>
														
														
															
														
														<a class="col2" href="/book/9544" data-control-type="shelf" boxid="tushu_body_1_3">收复腾冲：战狼突击</a>
														
															
														
														
														<a class="col3" href="/book/9094" data-control-type="shelf" boxid="tushu_body_1_3">狙击：我的特种生涯</a>
													
															
														<a class="col1" href="http://www.motie.com/all?sort=11&amp;tag1=&amp;tag=&amp;publication=true&amp;words=-1&amp;updateDay=-1&amp;free=&amp;finish=&amp;group=3&amp;order=0" data-control-type="shelf" boxid="tushu_body_1_4">[财经]</a>
														
														
															
														
														<a class="col2" href="/book/8649" data-control-type="shelf" boxid="tushu_body_1_4">酣畅淋漓：输赢1</a>
														
															
														
														
														<a class="col3" href="/book/8541" data-control-type="shelf" boxid="tushu_body_1_4">翘首以盼：输赢2</a>
													
													<br>
												</p>
											</div>
										</div>
										<div data-collect-id="49" class="txtbox-item big">
											<div class="txtbox-bd">
												<div class="clear">
													
													
														
       
<div class="txtbox-pic">
	<div class="txtbox-pic-wrap">
		<a style="" class="deep-blue" href="/book/1333" data-collect-index="1" target="_blank"><img width="70" height="98" alt="" src="http://img.motieimg.com/book/1333s1.jpg"></a>
	</div>
</div>
<div class="txtbox-content">
	<h5><a href="/book/1333" target="_blank" data-collect-index="1" data-control-type="shelf" boxid="tu_picture_1">遇见你，已经很不可思议</a></h5>
	<div class="txtbox-text">
		<p class="desc">
			她白天是能力顶呱呱的编辑，晚上是故作清高的歌女。
		</p>
		<p class="info">
			作者：<a class="author blue" target="_blank" href="/people/381">木卯</a><br>
			
		</p>
	</div>
</div>
													
												</div>
												<!--------------------------------------列表-------------------------------------->
												<p data-collect-index="2" class="outer-text">
															
														<a class="col1" href="http://www.motie.com/all?sort=1&amp;tag1=&amp;tag=&amp;publication=true&amp;words=-1&amp;updateDay=-1&amp;free=&amp;finish=&amp;group=3&amp;order=0" data-control-type="shelf" boxid="tushu_body_2_1">[悬疑]</a>
														
														
															
														
														<a class="col2" href="/book/10529" data-control-type="shelf" boxid="tushu_body_2_1">榨干想象力：卅街档案馆</a>
														
															
														
														
														<a class="col3" href="/book/742" data-control-type="shelf" boxid="tushu_body_2_1">五行谜藏之恶水</a>
													
															
														<a class="col1" href="http://www.motie.com/all?sort=13&amp;tag1=&amp;tag=&amp;publication=true&amp;words=-1&amp;updateDay=-1&amp;free=&amp;finish=&amp;group=3&amp;order=0" data-control-type="shelf" boxid="tushu_body_2_2">[社科]</a>
														
														
															
														
														<a class="col2" href="/book/11703" data-control-type="shelf" boxid="tushu_body_2_2">淡定力：不浮躁的智慧</a>
														
															
														
														
														<a class="col3" href="/book/11534" data-control-type="shelf" boxid="tushu_body_2_2">可贵：姐姐和弟弟</a>
													
															
														<a class="col1" href="http://www.motie.com/all?sort=3&amp;tag1=&amp;tag=&amp;publication=true&amp;words=-1&amp;updateDay=-1&amp;free=&amp;finish=&amp;group=3&amp;order=0" data-control-type="shelf" boxid="tushu_body_2_3">[历史]</a>
														
														
															
														
														<a class="col2" href="/book/13717" data-control-type="shelf" boxid="tushu_body_2_3">国运拐点：中西精英大对决</a>
														
															
														
														
														<a class="col3" href="/book/13056" data-control-type="shelf" boxid="tushu_body_2_3">如果这是宋史南宋卷：官宦王朝</a>
													
															
														<a class="col1" href="http://www.motie.com/all?sort=6&amp;tag1=&amp;tag=&amp;publication=true&amp;words=-1&amp;updateDay=-1&amp;free=&amp;finish=&amp;group=3&amp;order=0" data-control-type="shelf" boxid="tushu_body_2_4">[玄幻]</a>
														
														
															
														
														<a class="col2" href="/book/1641" data-control-type="shelf" boxid="tushu_body_2_4">暗夜之王：德库拉</a>
														
															
														
														
														<a class="col3" href="/book/11735" data-control-type="shelf" boxid="tushu_body_2_4">千回百转：夺宝迷城</a>
													
													<br>
												</p>
											</div>
										</div>
									</div>	
									
									<div data-collect-id="50" class="mod-basic-txtbox-layout txt-items-two-columns block-2 clear">	
										
										
       

	<div class="txtbox-item">
		<div class="txtbox-bd">
			<div class="txtbox-pic">
				<div class="txtbox-pic-wrap">
					<a class="deep-blue" href="/book/2522" data-collect-index="1" target="_blank">
						<img width="43" height="61" alt="" src="http://img.motieimg.com/book/2522s2.jpg">
					</a>
				</div>
			</div>
			<div class="txtbox-content">
				<h5><a href="/book/2522" target="_blank" data-collect-index="1" data-control-type="shelf" boxid="tu_contain_0">
					六根岛</a>
				</h5>
				<div class="txtbox-text">
					<p class="desc">
						六根岛，一个地图上找不到的神秘所在，听到的人竞相为之色变，甚至自残！
					</p>
				</div>
			</div>
		</div>
	</div>

	<div class="txtbox-item">
		<div class="txtbox-bd">
			<div class="txtbox-pic">
				<div class="txtbox-pic-wrap">
					<a class="deep-blue" href="/book/269" data-collect-index="2" target="_blank">
						<img width="43" height="61" alt="" src="http://img.motieimg.com/book/269s3.jpg">
					</a>
				</div>
			</div>
			<div class="txtbox-content">
				<h5><a href="/book/269" target="_blank" data-collect-index="2" data-control-type="shelf" boxid="tu_contain_0">
					流经存在的邂逅</a>
				</h5>
				<div class="txtbox-text">
					<p class="desc">
						爱上了一个人，也就赋予了那个人伤害自己的权利……
					</p>
				</div>
			</div>
		</div>
	</div>

	<div class="txtbox-item">
		<div class="txtbox-bd">
			<div class="txtbox-pic">
				<div class="txtbox-pic-wrap">
					<a class="deep-blue" href="/book/12667" data-collect-index="3" target="_blank">
						<img width="43" height="61" alt="" src="http://img.motieimg.com/book/12667s1.jpg">
					</a>
				</div>
			</div>
			<div class="txtbox-content">
				<h5><a href="/book/12667" target="_blank" data-collect-index="3" data-control-type="shelf" boxid="tu_contain_0">
					太太万岁</a>
				</h5>
				<div class="txtbox-text">
					<p class="desc">
						叶小玲是在接到升职邮件的这一天被男友甩了。
					</p>
				</div>
			</div>
		</div>
	</div>

	<div class="txtbox-item">
		<div class="txtbox-bd">
			<div class="txtbox-pic">
				<div class="txtbox-pic-wrap">
					<a class="deep-blue" href="/book/12027" data-collect-index="4" target="_blank">
						<img width="43" height="61" alt="" src="http://img.motieimg.com/book/12027s1.jpg">
					</a>
				</div>
			</div>
			<div class="txtbox-content">
				<h5><a href="/book/12027" target="_blank" data-collect-index="4" data-control-type="shelf" boxid="tu_contain_0">
					不要脸要趁早</a>
				</h5>
				<div class="txtbox-text">
					<p class="desc">
						爱得唇边有血，眼中有泪，胸口有纠缠的爱和恨，爱到如连体婴般骨肉相边。
					</p>
				</div>
			</div>
		</div>
	</div>

									</div>
								</div>
							</div>
							
							<div class="mod editors-choice mod-cate">
								<div class="bd">
									<div class="cate-title"><a class="more" target="_blank" href="/all?tag=%E5%B0%8F%E8%AF%B4&amp;sort=0&amp;tag1=&amp;publication=true&amp;beginWords=&amp;endWords=&amp;updateDay=-1&amp;free=&amp;finish=">更多&gt;&gt;</a><img alt="小说" src="http://img.motieimg.com/_resources/css/img/t-xiaoshuo.png"></div>
									<div data-collect-id="109" class="cate-content clear">
										<div class="txtbox-item big">
											<div class="clear">
												
												
													
       
<div class="txtbox-pic">
	<div class="txtbox-pic-wrap">
		<a style="" class="deep-blue" href="/book/177" data-collect-index="1" target="_blank">
		<img width="70" height="98" alt="" src="http://img.motieimg.com/book/177s4.jpg"></a>
	</div>
</div>
<div class="txtbox-content">
	<p class="title">
		<a href="/book/177" target="_blank" class="book-name" data-control-type="shelf" boxid="tu_picture_sort_0" data-collect-index="1">
		李可乐抗拆记</a> 作者：<a class="blue" href="/people/189">李承鹏</a></p>
	<div class="txtbox-text">
		<p class="desc">
			他有理想，却没有能力；他有激情，却没有韧劲；他善良聪明，又世故圆滑；他勇于挑战，却随时又想拔腿逃跑……
		</p>
		<p class="update">
			<b>最新章节：</b> <a target="_blank" href="/book/177_13733" data-collect-index="2">第三十三章 让世界飞</a>
		</p>
	</div>
</div>
												
											</div>
											<p data-collect-index="3" class="outer-text">
														
													<a class="col1" href="http://www.motie.com/all?sort=1&amp;tag1=&amp;tag=&amp;publication=true&amp;words=-1&amp;updateDay=-1&amp;free=&amp;finish=&amp;group=3&amp;order=0" data-control-type="shelf" boxid="tushu_body_3_1">[悬疑]</a>
													
													
														
													
													<a class="col2" href="/book/108" data-control-type="shelf" boxid="tushu_body_3_1">死亡通知单之二宿命（上）</a>
													
														
													
													
													<a class="col3" href="/book/13469" data-control-type="shelf" boxid="tushu_body_3_1">死亡通知单之二宿命（下）</a>
												
														
													<a class="col1" href="http://www.motie.com/all?sort=3&amp;tag1=&amp;tag=&amp;publication=true&amp;words=-1&amp;updateDay=-1&amp;free=&amp;finish=&amp;group=3&amp;order=0" data-control-type="shelf" boxid="tushu_body_3_2">[历史]</a>
													
													
														
													
													<a class="col2" href="/book/9541" data-control-type="shelf" boxid="tushu_body_3_2">全彩中国史（上）</a>
													
														
													
													
													<a class="col3" href="/book/9546" data-control-type="shelf" boxid="tushu_body_3_2">全彩中国史（下）</a>
												
												<br>
											</p>
											<p data-collect-index="4" class="outer-text">
														
													<a class="col1" href="http://www.motie.com/all?sort=4&amp;tag1=&amp;tag=&amp;publication=true&amp;words=-1&amp;updateDay=-1&amp;free=&amp;finish=&amp;group=3&amp;order=0" data-control-type="shelf" boxid="tushu_body_4_1">[都市]</a>
													
													
														
													
													<a class="col2" href="/book/8332" data-control-type="shelf" boxid="tushu_body_4_1">时尚入门：北京甜心</a>
													
														
													
													
													<a class="col3" href="/book/8419" data-control-type="shelf" boxid="tushu_body_4_1">南北差异：丈母娘</a>
												
														
													<a class="col1" href="http://www.motie.com/all?sort=2&amp;tag1=&amp;tag=&amp;publication=true&amp;words=-1&amp;updateDay=-1&amp;free=&amp;finish=&amp;group=3&amp;order=0" data-control-type="shelf" boxid="tushu_body_4_2">[言情]</a>
													
													
														
													
													<a class="col2" href="/book/9278" data-control-type="shelf" boxid="tushu_body_4_2">留学不留爱</a>
													
														
													
													
													<a class="col3" href="/book/9420" data-control-type="shelf" boxid="tushu_body_4_2">青春：再见摩天轮</a>
												
												<br>
											</p>
										</div>
									</div>
									<div class="cate-title"><a class="more" target="_blank" href="/all?sort=11&amp;tag1=&amp;tag=&amp;publication=true&amp;words=-1&amp;updateDay=-1&amp;free=&amp;finish=">更多&gt;&gt;</a><img alt="经管" src="http://img.motieimg.com/_resources/css/img/t-jingguan.png"></div>
									<div data-collect-id="110" class="cate-content clear">
										<div class="txtbox-item big">
											<div class="clear">
												
												
													
       
<div class="txtbox-pic">
	<div class="txtbox-pic-wrap">
		<a style="" class="deep-blue" href="/book/8193" data-collect-index="1" target="_blank">
		<img width="70" height="98" alt="" src="http://img.motieimg.com/book/8193s1.jpg"></a>
	</div>
</div>
<div class="txtbox-content">
	<p class="title">
		<a href="/book/8193" target="_blank" class="book-name" data-control-type="shelf" boxid="tu_picture_sort_1" data-collect-index="1">
		价值为王</a> 作者：<a class="blue" href="/people/128239">李文勇</a></p>
	<div class="txtbox-text">
		<p class="desc">
			书中以四位大师的卓绝投资智慧为准绳，以大师的亲身经历为载体，以中国股市的狂热为背景，来一次价值投资的集中展示，帮助中国的每一位股民认识到什么叫投资，什么叫价值投资。
		</p>
		<p class="update">
			<b>最新章节：</b> <a target="_blank" href="/book/8193_168103" data-collect-index="2">第九十八章 索罗斯的智慧法则六：预定错误</a>
		</p>
	</div>
</div>
												
											</div>
											<p data-collect-index="3" class="outer-text">
														
													<a class="col1" href="http://www.motie.com/all?sort=11&amp;tag1=&amp;tag=&amp;publication=true&amp;words=-1&amp;updateDay=-1&amp;free=&amp;finish=&amp;group=3&amp;order=0" data-control-type="shelf" boxid="tushu_body_5_1">[管理]</a>
													
													
														
													
													<a class="col2" href="/book/1376" data-control-type="shelf" boxid="tushu_body_5_1">利益搏杀：赢单</a>
													
														
													
													
													<a class="col3" href="/book/1340" data-control-type="shelf" boxid="tushu_body_5_1">从沸腾到癫狂</a>
												
														
													<a class="col1" href="http://www.motie.com/all?sort=11&amp;tag1=&amp;tag=&amp;publication=true&amp;words=-1&amp;updateDay=-1&amp;free=&amp;finish=&amp;group=3&amp;order=0" data-control-type="shelf" boxid="tushu_body_5_2">[励志]</a>
													
													
														
													
													<a class="col2" href="/book/5769" data-control-type="shelf" boxid="tushu_body_5_2">20个月赚130亿</a>
													
														
													
													
													<a class="col3" href="/book/7107" data-control-type="shelf" boxid="tushu_body_5_2">突围式销售：破围</a>
												
												<br>
											</p>
											<p data-collect-index="4" class="outer-text">
														
													<a class="col1" href="http://www.motie.com/all?sort=11&amp;tag1=&amp;tag=&amp;publication=true&amp;words=-1&amp;updateDay=-1&amp;free=&amp;finish=&amp;group=3&amp;order=0" data-control-type="shelf" boxid="tushu_body_6_1">[投资]</a>
													
													
														
													
													<a class="col2" href="/book/565" data-control-type="shelf" boxid="tushu_body_6_1">这样炒股才赚钱</a>
													
														
													
													
													<a class="col3" href="/book/711" data-control-type="shelf" boxid="tushu_body_6_1">如何把股市变成提款机</a>
												
														
													<a class="col1" href="http://www.motie.com/all?sort=11&amp;tag1=&amp;tag=&amp;publication=true&amp;words=-1&amp;updateDay=-1&amp;free=&amp;finish=&amp;group=3&amp;order=0" data-control-type="shelf" boxid="tushu_body_6_2">[金融]</a>
													
													
														
													
													<a class="col2" href="/book/1707" data-control-type="shelf" boxid="tushu_body_6_2">华尔街Ⅰ</a>
													
														
													
													
													<a class="col3" href="/book/723" data-control-type="shelf" boxid="tushu_body_6_2">陈志武说中国经济</a>
												
												<br>
											</p>
										</div>
									</div>
									<div class="cate-title"><a class="more" target="_blank" href="/all?sort=12&amp;tag1=&amp;tag=&amp;publication=true&amp;words=-1&amp;updateDay=-1&amp;free=&amp;finish=">更多&gt;&gt;</a><img alt="生活" src="http://img.motieimg.com/_resources/css/img/t-shenghuo.png"></div>
									<div data-collect-id="111" class="cate-content clear">
										<div class="txtbox-item big">
											<div class="clear">
												
												
													
       
<div class="txtbox-pic">
	<div class="txtbox-pic-wrap">
		<a style="" class="deep-blue" href="/book/9210" data-collect-index="1" target="_blank">
		<img width="70" height="98" alt="" src="http://img.motieimg.com/book/9210s2.jpg"></a>
	</div>
</div>
<div class="txtbox-content">
	<p class="title">
		<a href="/book/9210" target="_blank" class="book-name" data-control-type="shelf" boxid="tu_picture_sort_2" data-collect-index="1">
		婚姻七宗罪</a> 作者：<a class="blue" href="/people/146229">童馨儿V</a></p>
	<div class="txtbox-text">
		<p class="desc">
			周燕年近四十，陡遇小三，从此和嚣张小三展开了不屈不挠的无数争斗，延续近两年的婚姻战争，让她无瑕顾及女儿诺诺，失去了家庭亲情的诺诺陷入了网恋，竟然怀孕了……
		</p>
		<p class="update">
			<b>最新章节：</b> <a target="_blank" href="/book/9210_194487" data-collect-index="2">第三十三章  未来总有险途(7)</a>
		</p>
	</div>
</div>
												
											</div>
											<p data-collect-index="3" class="outer-text">
														
													<a class="col1" href="http://www.motie.com/all?sort=12&amp;tag1=%E5%BF%83%E7%90%86&amp;tag=&amp;publication=true&amp;words=-1&amp;updateDay=-1&amp;free=&amp;finish=&amp;group=3&amp;order=0" data-control-type="shelf" boxid="tushu_body_7_1">[心理]</a>
													
													
														
													
													<a class="col2" href="/book/1493" data-control-type="shelf" boxid="tushu_body_7_1">找回你的生命礼物</a>
													
														
													
													
													<a class="col3" href="/book/1343" data-control-type="shelf" boxid="tushu_body_7_1">嫁人厚黑学 </a>
												
														
													<a class="col1" href="http://www.motie.com/all?sort=12&amp;tag1=%E6%95%99%E8%82%B2&amp;tag=&amp;publication=true&amp;words=-1&amp;updateDay=-1&amp;free=&amp;finish=&amp;group=3&amp;order=0" data-control-type="shelf" boxid="tushu_body_7_2">[教育]</a>
													
													
														
													
													<a class="col2" href="/book/12173" data-control-type="shelf" boxid="tushu_body_7_2">经典：宝贝战争</a>
													
														
													
													
													<a class="col3" href="/book/232" data-control-type="shelf" boxid="tushu_body_7_2">别以为你懂孩子的心</a>
												
												<br>
											</p>
											<p data-collect-index="4" class="outer-text">
														
													<a class="col1" href="http://www.motie.com/all?sort=12&amp;tag1=%E5%81%A5%E5%BA%B7&amp;tag=&amp;publication=true&amp;words=-1&amp;updateDay=-1&amp;free=&amp;finish=&amp;group=3&amp;order=0" data-control-type="shelf" boxid="tushu_body_8_1">[健康]</a>
													
													
														
													
													<a class="col2" href="/book/8195" data-control-type="shelf" boxid="tushu_body_8_1">健康来自餐前饭后</a>
													
														
													
													
													<a class="col3" href="/book/379" data-control-type="shelf" boxid="tushu_body_8_1">医生告诉你不生病的真智慧</a>
												
														
													<a class="col1" href="http://www.motie.com/all?sort=12&amp;tag1=%E6%96%87%E5%8C%96&amp;tag=&amp;publication=true&amp;words=-1&amp;updateDay=-1&amp;free=&amp;finish=&amp;group=3&amp;order=0" data-control-type="shelf" boxid="tushu_body_8_2">[文化]</a>
													
													
														
													
													<a class="col2" href="/book/727" data-control-type="shelf" boxid="tushu_body_8_2">第一家族</a>
													
														
													
													
													<a class="col3" href="/book/1429" data-control-type="shelf" boxid="tushu_body_8_2">神魂颠倒日本国</a>
												
												<br>
											</p>
										</div>
									</div>
									<div class="cate-title"><a class="more" target="_blank" href="/all?sort=13&amp;tag1=&amp;tag=&amp;publication=true&amp;words=-1&amp;updateDay=-1&amp;free=&amp;finish=">更多&gt;&gt;</a><img alt="社科" src="http://img.motieimg.com/_resources/css/img/t-sheke.png"></div>
									<div data-collect-id="112" class="cate-content clear">
										<div class="txtbox-item big">
											<div class="clear">
												
												
													
       
<div class="txtbox-pic">
	<div class="txtbox-pic-wrap">
		<a style="" class="deep-blue" href="/book/12380" data-collect-index="1" target="_blank">
		<img width="70" height="98" alt="" src="http://img.motieimg.com/book/12380s1.jpg"></a>
	</div>
</div>
<div class="txtbox-content">
	<p class="title">
		<a href="/book/12380" target="_blank" class="book-name" data-control-type="shelf" boxid="tu_picture_sort_3" data-collect-index="1">
		如何说别人才会听，怎么听别人才肯说</a> 作者：<a class="blue" href="/people/241755">章岩</a></p>
	<div class="txtbox-text">
		<p class="desc">
			说话是改变命运的最直接方式！
		</p>
		<p class="update">
			<b>最新章节：</b> <a target="_blank" href="/book/12380_260294" data-collect-index="2">第五十四章   吊胃口的技巧&mdash;&mdash;让听众欲</a>
		</p>
	</div>
</div>
												
											</div>
											<p data-collect-index="3" class="outer-text">
														
													<a class="col1" href="http://www.motie.com/all?sort=13&amp;tag1=%E8%81%8C%E5%9C%BA&amp;tag=&amp;publication=true&amp;words=-1&amp;updateDay=-1&amp;free=&amp;finish=&amp;group=3&amp;order=0" data-control-type="shelf" boxid="tushu_body_9_1">[职场]</a>
													
													
														
													
													<a class="col2" href="/book/1360" data-control-type="shelf" boxid="tushu_body_9_1">职场脑结构</a>
													
														
													
													
													<a class="col3" href="/book/8986" data-control-type="shelf" boxid="tushu_body_9_1">上班族：上班奴</a>
												
														
													<a class="col1" href="http://www.motie.com/all?sort=13&amp;tag1=%E5%AE%98%E5%9C%BA&amp;tag=&amp;publication=true&amp;words=-1&amp;updateDay=-1&amp;free=&amp;finish=&amp;group=3&amp;order=0" data-control-type="shelf" boxid="tushu_body_9_2">[官场]</a>
													
													
														
													
													<a class="col2" href="/book/25" data-control-type="shelf" boxid="tushu_body_9_2">拯救人类：低碳阴谋</a>
													
														
													
													
													<a class="col3" href="/book/749" data-control-type="shelf" boxid="tushu_body_9_2">资本奴役全人类	</a>
												
												<br>
											</p>
											<p data-collect-index="4" class="outer-text">
														
													<a class="col1" href="http://www.motie.com/all?sort=13&amp;tag1=%E5%8A%B1%E5%BF%97&amp;tag=&amp;publication=true&amp;words=-1&amp;updateDay=-1&amp;free=&amp;finish=&amp;group=3&amp;order=0" data-control-type="shelf" boxid="tushu_body_10_1">[励志]</a>
													
													
														
													
													<a class="col2" href="/book/56" data-control-type="shelf" boxid="tushu_body_10_1">宁要一个LG，不要十个LV</a>
													
														
													
													
													<a class="col3" href="/book/372" data-control-type="shelf" boxid="tushu_body_10_1">一个外企高管的职言</a>
												
														
													<a class="col1" href="http://www.motie.com/all?sort=13&amp;tag1=%E4%BA%BA%E7%94%9F&amp;tag=&amp;publication=true&amp;words=-1&amp;updateDay=-1&amp;free=&amp;finish=&amp;group=3&amp;order=0" data-control-type="shelf" boxid="tushu_body_10_2">[人生]</a>
													
													
														
													
													<a class="col2" href="/book/22455" data-control-type="shelf" boxid="tushu_body_10_2">命令我沉默</a>
													
														
													
													
													<a class="col3" href="/book/13146" data-control-type="shelf" boxid="tushu_body_10_2">忠诚</a>
												
												<br>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
					<div class="right row-newbook newbook-rank">
						<div class="right-bd">
							<div class="mod ranks">
								<div class="bd">
									<ul class="tabs2">
									</ul>
									<h3 class="title">新书推荐</h3>
									<ul data-collect-id="51" class="list">
										
											
												<li class="top">
													<a style="" data-collect-index="1" class="fb" target="_blank" href="/book/30559" data-control-type="shelf" boxid="tu_tu_paihang">
													       <img width="50" height="70" src="http://img.motieimg.com/book/30559l1.jpg" style="padding:0px;">
													</a>
													<span style="position: relative; top: 7px;">
														 <a data-collect-index="1" href="/book/30559" class="fb" target="_blank">敛骨人笔记</a>
															<span class="author">作者：<a class="deep-blue fz-12" href="/people/1523460" target="_blank">唐兜</a></span>
													</span>
												</li>
											
											
										
											
											
												<li><a href="/book/30566" target="_blank" data-collect-index="2">两人前往北海道</a></li>
											
										
											
											
												<li><a href="/book/556" target="_blank" data-collect-index="3">我和一个日本女生</a></li>
											
										
											
											
												<li><a href="/book/9246" target="_blank" data-collect-index="4">丑女皇后</a></li>
											
										
											
											
												<li><a href="/book/9265" target="_blank" data-collect-index="5">婚姻男女</a></li>
											
										
											
											
												<li><a href="/book/1432" target="_blank" data-collect-index="6">中国人盗墓史</a></li>
											
										
											
											
												<li><a href="/book/9273" target="_blank" data-collect-index="7">同居后又住进来一个美女</a></li>
											
										
											
											
												<li><a href="/book/3365" target="_blank" data-collect-index="8">随遇而安</a></li>
											
										
											
											
												<li><a href="/book/1435" target="_blank" data-collect-index="9">魔鬼连：一本遗失多年的特种兵日记</a></li>
											
										
											
											
												<li><a href="/book/9544" target="_blank" data-collect-index="10">战狼突击</a></li>
											
										
											
											
												<li><a href="/book/9243" target="_blank" data-collect-index="11">机关男人</a></li>
											
										
											
											
												<li><a href="/book/10383" target="_blank" data-collect-index="12">二婚</a></li>
											
										
											
											
												<li><a href="/book/792" target="_blank" data-collect-index="13">谋杀现场</a></li>
											
										
											
											
												<li><a href="/book/8123" target="_blank" data-collect-index="14">性殇</a></li>
											
										
											
											
												<li><a href="/book/9503" target="_blank" data-collect-index="15">守墓人</a></li>
											
										
									</ul>
								</div>
							</div>
							<!-- 新书榜 -->
						
							<div data-collect-id="113" class="mod mod-qianshu">
								<div class="hd mod-title">
									<div class="title-bd">
										<h2>千书出版</h2>
									</div>
								</div>
								<div class="bd">
									<ul>
										
											<li class="clear">
												<div class="lpic">
													<a style="" class="fb" target="_blank" href="/book/1821" data-collect-index="1"><img width="50" height="70" src="http://img.motieimg.com/book/1821l6.jpg"></a>
												</div>
												<div class="rtext">
													<p class="title"><a target="_blank" href="/book/1821" data-collect-index="1" data-control-type="shelf" boxid="qian_shu_chu_ban">秦迹</a></p>
													<p class="info">
														作者：<a target="_blank" class="blue" href="/people/44214" data-collect-index="1">忆长歌</a>
													</p>
												</div>
											</li>
										
											<li class="clear">
												<div class="lpic">
													<a style="" class="fb" target="_blank" href="/book/5972" data-collect-index="2"><img width="50" height="70" src="http://img.motieimg.com/book/5972l7.jpg"></a>
												</div>
												<div class="rtext">
													<p class="title"><a target="_blank" href="/book/5972" data-collect-index="2" data-control-type="shelf" boxid="qian_shu_chu_ban">禁宫绾暒传</a></p>
													<p class="info">
														作者：<a target="_blank" class="blue" href="/people/100782" data-collect-index="2">苡菲</a>
													</p>
												</div>
											</li>
										
											<li class="clear">
												<div class="lpic">
													<a style="" class="fb" target="_blank" href="/book/5785" data-collect-index="3"><img width="50" height="70" src="http://img.motieimg.com/book/5785l13.jpg"></a>
												</div>
												<div class="rtext">
													<p class="title"><a target="_blank" href="/book/5785" data-collect-index="3" data-control-type="shelf" boxid="qian_shu_chu_ban">盗墓鬼话</a></p>
													<p class="info">
														作者：<a target="_blank" class="blue" href="/people/35481" data-collect-index="3">烛阳</a>
													</p>
												</div>
											</li>
										
											<li class="clear">
												<div class="lpic">
													<a style="" class="fb" target="_blank" href="/book/11112" data-collect-index="4"><img width="50" height="70" src="http://img.motieimg.com/book/11112l6.jpg"></a>
												</div>
												<div class="rtext">
													<p class="title"><a target="_blank" href="/book/11112" data-collect-index="4" data-control-type="shelf" boxid="qian_shu_chu_ban">承天八索</a></p>
													<p class="info">
														作者：<a target="_blank" class="blue" href="/people/103116" data-collect-index="4">TV帝</a>
													</p>
												</div>
											</li>
										
											<li class="clear">
												<div class="lpic">
													<a style="" class="fb" target="_blank" href="/book/2210" data-collect-index="5"><img width="50" height="70" src="http://img.motieimg.com/book/2210l2.jpg"></a>
												</div>
												<div class="rtext">
													<p class="title"><a target="_blank" href="/book/2210" data-collect-index="5" data-control-type="shelf" boxid="qian_shu_chu_ban">婚后三十六个月</a></p>
													<p class="info">
														作者：<a target="_blank" class="blue" href="/people/2774" data-collect-index="5">刘小念</a>
													</p>
												</div>
											</li>
										
											<li class="clear">
												<div class="lpic">
													<a style="" class="fb" target="_blank" href="/book/306" data-collect-index="6"><img width="50" height="70" src="http://img.motieimg.com/book/306l9.jpg"></a>
												</div>
												<div class="rtext">
													<p class="title"><a target="_blank" href="/book/306" data-collect-index="6" data-control-type="shelf" boxid="qian_shu_chu_ban">借你的唇，想一个人</a></p>
													<p class="info">
														作者：<a target="_blank" class="blue" href="/people/2217" data-collect-index="6">懒柒</a>
													</p>
												</div>
											</li>
										
											<li class="clear">
												<div class="lpic">
													<a style="" class="fb" target="_blank" href="/book/2133" data-collect-index="7"><img width="50" height="70" src="http://img.motieimg.com/book/2133l3.jpg"></a>
												</div>
												<div class="rtext">
													<p class="title"><a target="_blank" href="/book/2133" data-collect-index="7" data-control-type="shelf" boxid="qian_shu_chu_ban">赏金编辑</a></p>
													<p class="info">
														作者：<a target="_blank" class="blue" href="/people/8764" data-collect-index="7">小龙生</a>
													</p>
												</div>
											</li>
										
											<li class="clear">
												<div class="lpic">
													<a style="" class="fb" target="_blank" href="/book/336" data-collect-index="8"><img width="50" height="70" src="http://img.motieimg.com/book/336l2.jpg"></a>
												</div>
												<div class="rtext">
													<p class="title"><a target="_blank" href="/book/336" data-collect-index="8" data-control-type="shelf" boxid="qian_shu_chu_ban">竹马，借我嫁一下</a></p>
													<p class="info">
														作者：<a target="_blank" class="blue" href="/people/2246" data-collect-index="8">钟灵儿</a>
													</p>
												</div>
											</li>
										
											<li class="clear">
												<div class="lpic">
													<a style="" class="fb" target="_blank" href="/book/2209" data-collect-index="9"><img width="50" height="70" src="http://img.motieimg.com/book/2209l1.jpg"></a>
												</div>
												<div class="rtext">
													<p class="title"><a target="_blank" href="/book/2209" data-collect-index="9" data-control-type="shelf" boxid="qian_shu_chu_ban">花开半生</a></p>
													<p class="info">
														作者：<a target="_blank" class="blue" href="/people/64527" data-collect-index="9">草芊芊</a>
													</p>
												</div>
											</li>
										
									</ul>
								</div>
							</div>
							
       
<div class="mod mod-pure-text">
	<div class="hd mod-title">
		<div class="title-bd">
			<h2>联系客服</h2>
		</div>
	</div>
	<div style="line-height: 2em;padding:15px;" class="bd">
		客服留言：<a class="blue" target="_blank" href="/msg/kefu">点此进入</a><br>
		客服QQ： 2448613277<br>
		<a href="http://wpa.qq.com/msgrd?v=3&amp;uin=2448613277&amp;site=qq&amp;menu=yes" style="margin-left:52px;" target="_blank"><img border="0" title="点击这里给我发消息" alt="点击这里给我发消息" src="http://wpa.qq.com/pa?p=2:2448613277:41"></a><br>
		客服邮箱：kefu@motie.com <br>
		(周一到周五8:00-24:00)<br>
		(周六、周日9:00-24:00)
		<div style="height:1px;overflow:hidden;background:#CACACA;margin:10px 0;" class="line"></div>
		客服电话：010-82068723 <br>
		(周一到周五9:00-18:30)
		
	</div>
</div>
						</div>
					</div>
				</div>
				<div class="cl"></div>
			</div>
			
<div id="footer">
	<div class="bd">
		<h1 class="logo"><a href="#"><img src="http://img.motieimg.com/_assets/logo-footer.gif" alt="Motie"></a></h1>
		<div class="sp-20"></div>
		<div class="lpic clear">
			<h5>合作伙伴</h5> 	
			<div class="blogroll">
				<a href="http://www.motie.com/home" target="_blank" boxid="19">磨铁中文网</a>
				<a href="http://vip.book.sina.com.cn/" target="_blank">新浪原创</a>
			</div>	
		</div>
		<div class="rtext">
			<div style="height: 70px" class="c1">
				<p>
					<a class="link-sina" target="_blank" href="http://weibo.com/motiezhongwenwang"><img alt="" src="http://img.motieimg.com/_assets/wb_logo16_a.png" class="png">官方微博</a>
					<a class="link-qianshu" target="_blank" href="http://e.weibo.com/qianshuchuban"><img height="12" alt="" src="http://img.motieimg.com/_assets/shu1000.gif?201211191543" class="png"></a>
				</p>
				<p>
					<a class="link-iphone" target="_blank" href="http://shuzhan.motie.com"><img width="14" height="14" src="http://img.motieimg.com/_assets/ico-iphone.png" class="png"> 苹果客户端：磨铁书栈</a>
				</p>
				<p>
					<a style="color: #C7C7C7" target="_blank" href="http://motie.cn"><img width="10" height="16" src="http://img.motieimg.com/_assets/ico-mobile.gif" style="margin: 0 2px 0 2px;vertical-align:-4px;"> 磨铁手机版</a>
				</p>
			</div>
			<div style="padding-bottom: 10px;" class="c2">
				<a href="/about"><b>关于磨铁</b></a>&nbsp;
				<a href="/about/reward2013">奖励计划</a>&nbsp;
				<a href="/about/contactus">联系我们</a>&nbsp;
				<a href="#">返回页首↑</a>
			</div>
		</div>
		<p class="cp">
			北京磨铁数盟信息技术有限公司 版权所有<br>
			Copyright &copy; 2011-2012 Motie.com All Rights Reserved. <br>
			新出网证京字162号&nbsp;&nbsp;文网文[2012]0129-045号&nbsp;&nbsp;京公网安备 11010202005938&nbsp;&nbsp;京ICP证110262号&nbsp;&nbsp;<a target="_blank" class="link-biaoshi" href="http://www.hd315.gov.cn/beian/view.asp?bianhao=010202012091700010"><img width="14" alt="" src="http://img.motieimg.com/_assets/biaoshi.gif?1413">经营性网站备案信息</a>&nbsp;&nbsp;<a target="_blank" href="http://www.miitbeian.gov.cn">京ICP备11010626号-1</a>&nbsp;&nbsp;高新技术企业&nbsp;&nbsp;GR201211001345 
		</p>
	</div>
</div>
		</div>
	
	
	<script type="text/javascript">
		$(function(){
			var sf = window._STAFF_FUNCTION || false, sf_c = sf &amp;&amp; sf.tools.collect;
			(function(){
				var allTips = {}, tabs = $('#Billboard .a3 .tabs'), list = $('#Billboard .a3 .list');
				new Motie.Tab({
					handle: tabs.find('li'),
					handleClass: "",
					handleCurrentClass: "current",
					toggleItem: list,
					callback: function(index, handle, item){
						var cid = handle.data('cid');
						if(sf &amp;&amp; sf_c.createOver){
							if(!allTips[cid]){
								allTips[cid] = $('body .mo-ui-collect-tips[collect-id='+cid+']').each(function(){
									sf_c.position( $(this).data('element'),$(this))
								});
							}
							for(var i in allTips){
								allTips[i].hide();
							}
							allTips[cid].show()
						}
					}
				});
			})()
			
			var tb2 = $(".tabs-content-2");
			new Motie.Tab({
				handle: "#Billboard .a1 .list li",
				handleClass: "",
				handleCurrentClass: "current",
				toggleItem: "#Billboard .a1 .tabs-content",
				auto: !0,
				callback: function(a) {
					tb2.hide().eq(a).show()
				},
				duration: 4e3
			});
			
			new Mo.Tab({
				handle: $('.mod-chapter-update .tabs2 li'),
				handleClass : '',
				handleCurrentClass : 'current',
				toggleItem : $('.mod-chapter-update .list')
			})
		})
	</script>

<div class="fixed-rb" style="opacity: 0; display: none;"><a title="返回顶端" href="javascript:;" class="goTop"></a></div>
<ul class="ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all search-result" role="listbox" aria-activedescendant="ui-active-menuitem" style="z-index: 11; top: 0px; left: 0px; display: none;"></ul><div style="display: none; position: absolute; z-index: 1000;" visible="display" class="namecard"><div style="position:relative"><div class="namecard-arrow"></div><table width="100%"><tbody><tr><td class="pop-tl"></td><td class="pop-border"></td><td class="pop-tr"></td></tr><tr><td class="pop-border"></td><td class="pop-content"><div class="mod-author-info mod"><div style="background: url(http://img.motieimg.com/_assets/ajax-loader.gif) no-repeat 100px center; line-height: 200px; height: 200px;" class="loading-card ac fz-14">加载中..</div><div class="bd"></div></div></td><td class="pop-border"></td></tr><tr><td class="pop-bl"></td><td class="pop-border"></td><td class="pop-br"></td></tr></tbody></table></div></div></body></html>