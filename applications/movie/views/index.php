<?php echo $this->load->view('header_base'); ?>
<link rel="stylesheet" href="<?php echo $this->staticUrl; ?>movie/css/style.css?v2013">
</head>
<body>
<div id="top">
	<div class="wrapper">
		<div class="fl">
			<a target="_blnak" class="home" href="http://www.114la.com">114啦首页</a>
			<i class="sq">|</i>
			<a target="_blnak" href="http://youxi.114la.com/">游戏</a>
			<a target="_blnak" href="http://yinyue.114la.com/">音乐</a>
			<a target="_blnak" href="http://meishi.114la.com/">美食</a>
			<a target="_blnak" href="http://book.114la.com/">小说</a>
			<a target="_blnak" href="http://tuan.114la.com/">团购</a>
			<a target="_blnak" href="http://hgd.114la.com/">皇冠店</a>
			<a v="" href="http://app.114la.com/">实用工具</a>
		</div>
		<div class="fr"><a target="_blnak" href="http://www.114la.com/feedback">意见反馈</a><i class="sq">|</i><a id="collet" title="收藏114la影视" href="javascript:;">收藏本页</a></div>
	</div>
</div>
<div id="header">
	<div class="wrapper">
		<h1 class="logo"><a href="http://v.114la.com">114啦影视</a></h1>
		<div class="search">
			<form method="post" action="/" id="searchform" name="search">
				<input type="text" placeholder="输入影片名称、演员" name="q">
				<input type="hidden" value="" name="t">
				<button type="submit">搜索</button>
			</form>
			<div class="queryList clearfix">
				<ul>
					<li class="hover">神探狄仁杰 第二部 (电视剧)<em></em></li>
					<li>神探狄仁杰 第二部 (电影)<em></em></li>
					<li>神探狄仁杰 第二部 (动漫)<em></em></li>
					<li>神探狄仁杰 第二部 (综艺)<em></em></li>
					<li>中国合伙人 高清预告片</li>
					<li>冰与火之歌（权力游戏）第三季</li>
					<li>达芬奇的恶魔 第一季</li>
				</ul>
				<div class="prevList">
					<dl class="tcont">
						<dt>
							<img alt="中国合伙人" src="http://v.114la.com/static/images/thums.jpg">
							<div>
								<p>电视剧 2009</p>
								<p>更新至25集</p>
								<p>主演：<span>黄晓明，佟大为，邓超，杜鹃</span></p>
							</div>
						</dt>
						<dd>
							<a href="#">1</a>
							<a href="#">2</a>
							<a href="#">3</a>
							<a href="#">4</a>
							<a href="#">5</a>
							<a href="#">6</a>
							<a href="#">7</a>
							<a href="#">8</a>
							<a href="#">9</a>
							<a href="#">10</a>
							<a class="all" href="#">全部&gt;&gt;</a>
						</dd>
					</dl>
					<dl style="display:block;" class="tcont">
						<dt>
							<img alt="中国合伙人" src="http://v.114la.com/static/images/thums.jpg">
							<div>
								<p>电视剧 2009</p>
								<p>更新至25集</p>
								<p>主演：<span>黄晓明，佟大为，邓超，杜鹃</span></p>
							</div>
						</dt>
						<dd>
							<a class="goplay" href="#">立即播放</a>
							<a class="past" href="#">往期节目</a>
						</dd>
					</dl>
				</div>
			</div>
		</div>
		<div class="operht">
			<div class="userlog"><a href="http://v.114la.com/?ct=login">登录</a><a href="http://v.114la.com/?ct=register">注册</a></div>
			<div class="history">
				<span class="kick">播放记录<i></i></span>
				<dl class="hisCont">
					<dt>播放记录</dt>
					<dd id="hisStatu"><ul><li id="noHis">您还没有观看记录~</li></ul></dd>
				</dl>
			</div>
		</div>
	</div>
</div>
<div id="slider">
	<div id="indexSlide" class="sliCont">
		<ul>
            <li style="background: url('http://v.114la.com/img/focus_img/201309/138016778722090.jpg') no-repeat scroll center center rgb(0, 0, 0); display: block;">
				<a title="神盾局特工第1季" target="_blank" href="http://v.114la.com/tv/52839.html"><img alt="神盾局特工第1季" src="http://v.114la.com/img/focus_img/201309/138016778722090.jpg"></a>
				<div class="summary">
					<i><a title="神盾局特工第1季" target="_blank" href="http://v.114la.com/tv/52839.html"></a></i>
					<h3><a title="神盾局特工第1季" target="_blank" href="http://v.114la.com/tv/52839.html">神盾局特工第1季</a></h3>
					<p>超级英雄，让位人类特工。</p>
				</div>
			</li>
			<?php for ($i = 1; $i < 8; $i++) { ?>
			<li style="background: url(&quot;http://v.114la.com/img/focus_img/201309/138018061617849.jpg&quot;) no-repeat scroll center center rgb(231, 233, 249); display: none;">
				<a title="神枪狙击" target="_blank" rel="nofollow" href="http://v.114la.com/tv/40758.html"><img alt="神枪狙击" src="http://v.114la.com/img/focus_img/201309/138018061617849.jpg"></a>
				<div class="summary">
					<i><a title="神枪狙击" target="_blank" rel="nofollow" href="http://v.114la.com/tv/40758.html"></a></i>
					<h3><a title="神枪狙击" target="_blank" rel="nofollow" href="http://v.114la.com/tv/40758.html">神枪狙击</a></h3>
					<p>型男飞虎队,张兆辉谢天华枪王大对决。</p>
				</div>
			</li>
			<?php } ?>
        </ul>
		<div class="snum">
			<a title="神枪狙击" target="_blank" rel="nofollow" href="http://v.114la.com/tv/40758.html" class="current"><img width="58" height="38" alt="神枪狙击" src="http://v.114la.com/img/small_img/201309/137947350043618.jpg"></a>
			<?php for ($i = 1; $i < 8; $i++) { ?>
            <a title="神盾局特工第1季" target="_blank" href="http://v.114la.com/tv/52839.html" class=""><img width="58" height="38" alt="神盾局特工第1季" src="http://v.114la.com/img/small_img/201309/138016675660521.jpg"></a>
			<?php } ?>
        </div>
        <div class="inSlide-mouse"><a class="tk-left" href="javascript:;"></a><a class="tk-right" href="javascript:;"></a></div>
	</div>
</div>
<div id="navis">
	<ul>
		<li class="active"><a title="首页" href="http://v.114la.com/">首页<i></i></a></li>
		<li><a title="电影" href="http://v.114la.com/movie/">电影<i></i></a></li>
		<li><a title="电视剧" href="http://v.114la.com/tv/">电视剧<i></i></a></li>
		<li><a title="动漫" href="http://v.114la.com/anime/">动漫<i></i></a></li>
		<li><a title="综艺" href="http://v.114la.com/zongyi/">综艺<i></i></a></li>
        <li><a class="co" title="娱乐" href="http://v.114la.com/yule/">娱乐<em>new</em><i></i></a></li>
        <li><a title="排行榜" href="http://v.114la.com/top/">排行榜<i></i></a></li>
		<li><a title="影视网址" href="http://v.114la.com/website/">影视网址<i></i></a></li>
	</ul>
</div>
<div id="dexCol" class="wrapper">
	<dl class="siteLink">
		<dt>影视名站<i></i></dt>
		<dd>
		    <a rel="nofollow" target="_blnak" href="http://cps.youku.com/redirect.html?id=00000240">优酷网</a><i>|</i>
			<a rel="nofollow" target="_blnak" href="http://www.iqiyi.com/">爱奇艺</a><i>|</i>
			<a rel="nofollow" target="_blnak" href="http://www.letv.com/">乐视网</a><i>|</i>
			<a rel="nofollow" target="_blnak" href="http://tv.sohu.com/?aureole=1171">搜狐视频</a><i>|</i>
			<a rel="nofollow" target="_blnak" href="http://www.kankan.com/">迅雷看看</a><i>|</i>
			<a rel="nofollow" target="_blnak" href="http://www.pptv.com/">PPTV</a><i>|</i>
			<a rel="nofollow" target="_blnak" href="http://www.tudou.com/">土豆网</a><i>|</i>
			<a rel="nofollow" target="_blnak" href="http://v.qq.com/index.html">腾讯视频</a><i>|</i>
			<a rel="nofollow" target="_blnak" href="http://www.m1905.com/vod/">电影网</a><i>|</i>
			<a rel="nofollow" target="_blnak" href="http://www.pps.tv/">PPS网络电视</a><i>|</i>
			<a rel="nofollow" target="_blnak" href="http://www.69k.com/?merchant_no=114la">69k影院</a><i>|</i>
			<a rel="nofollow" target="_blnak" href="http://www.56.com/">56网</a><i>|</i>
			<a rel="nofollow" target="_blnak" href="http://app.114la.com/zhibo/">电视直播</a>
			<a rel="nofollow" class="more" target="_blnak" href="http://v.114la.com/website/">更多&gt;&gt;</a>
		</dd>
	</dl>
	<div class="comwrap topare">
		<div class="comTitle"><h6>卫视热播</h6></div>
		<ul class="comcaseRow clearfix">
			<?php for ($i = 1; $i < 6; $i++) { ?>
			<li>
				<a title="主君的太阳" href="http://v.114la.com/tv/34625.html"><img alt="主君的太阳" src="http://v.114la.com/img/focus_img/201309/138017450977608.jpg"><cite>主君的太阳</cite><em></em></a>
				<p>更新至第14集</p>
			</li>
			<?php } ?>
		</ul>
	</div>
	<div class="comwrap clearfix">
		<div class="leftSide fl ingrep">
			<dl class="inTitle">
				<dt>推荐电视剧</dt>
				<dd class="contabs">
					<ul>
						<li class="current"><a href="javascript:;">最热</a></li>
						<li><a href="javascript:;">最新</a></li>
						<li><a href="javascript:;">内地</a></li>
						<li><a href="javascript:;">港台</a></li>
						<li><a href="javascript:;">韩剧</a></li>
						<li><a href="javascript:;">美剧</a></li>
						<li><a href="javascript:;">泰剧</a></li>
					</ul>
					<a class="more" href="http://v.114la.com/tv/">更多&gt;&gt;</a>
				</dd>
			</dl>
			<div style="display:block;" class="ingrep-Cont">
				<div class="clearfix rowleft">
					<div class="bgsummar fl">
						<a title="小爸爸" href="http://v.114la.com/tv/38555.html">
							<img alt="小爸爸" data-original="http://v.114la.com/img/focus_img/201309/138018117580076.jpg" src="http://v.114la.com/img/focus_img/201309/138018117580076.jpg" style="display: inline;">
							<cite><strong>小爸爸</strong>33集全</cite>
						</a>
						<p>&#12288;一个生长在美国的男孩，偶遇一个女孩，不自觉恋爱上了，一不小心生下了一个小男孩，之后小男孩就留在了美国，而这个男孩则回到了国内，等那孩子长大了之后，美国的亲戚携带着小孩回到国...<em></em></p>
					</div>
					<ul class="sumgroup fr clearfix">
						<?php for ($i = 1; $i < 7; $i++) { ?>
						<li class="">
							<a title="半泽直树" href="http://v.114la.com/tv/52585.html">
								<img alt="半泽直树" data-original="http://v.114la.com/img/focus_img/201309/138009984951598.jpg" src="http://v.114la.com/img/focus_img/201309/138009984951598.jpg" style="display: inline;">
								<cite>半泽直树</cite><em></em>
							</a>
							<p>更新至第10集</p>
						</li>
						<?php } ?>
					</ul>
				</div>
			</div>
			<div class="ingrep-Cont">
				<ul class="sumgroup entire clearfix">
					<?php for ($i = 1; $i < 9; $i++) { ?>
					<li>
						<a title="巨轮" href="http://v.114la.com/tv/52794.html"><img alt="巨轮" data-original="http://v.114la.com/img/up_img/201309/138007319230883.jpg" src="http://v.114la.com/static/images/loading.gif"><cite>巨轮</cite><em></em></a>
						<p>更新至第3集</p>
					</li>
					<?php } ?>					
				</ul>
			</div>
			<div class="ingrep-Cont">
				<ul class="sumgroup entire clearfix">
					<?php for ($i = 1; $i < 9; $i++) { ?>
					<li>
						<a title="辣妈正传" href="http://v.114la.com/tv/51847.html"><img data-original="http://v.114la.com/img/up_img/201309/137929600155843.jpg" src="http://v.114la.com/static/images/loading.gif"><cite>辣妈正传</cite><em></em></a>
						<p>更新至第33集</p>
					</li>
					<?php } ?>
				</ul>
			</div>
			<div class="ingrep-Cont">
				<ul class="sumgroup entire clearfix">
					<?php for ($i = 1; $i < 9; $i++) { ?>
					<li>
						<a title="巨轮" href="http://v.114la.com/tv/52794.html"><img alt="巨轮" data-original="http://v.114la.com/img/up_img/201309/138007319230883.jpg" src="http://v.114la.com/static/images/loading.gif"><cite>巨轮</cite><em></em></a>
						<p>更新至第3集</p>
					</li>
					<?php } ?>	
				</ul>
			</div>
			<div class="ingrep-Cont">
				<ul class="sumgroup entire clearfix">
					<?php for ($i = 1; $i < 9; $i++) { ?>
					<li>
						<a title="辣妈正传" href="http://v.114la.com/tv/51847.html"><img data-original="http://v.114la.com/img/up_img/201309/137929600155843.jpg" src="http://v.114la.com/static/images/loading.gif"><cite>辣妈正传</cite><em></em></a>
						<p>更新至第33集</p>
					</li>
					<?php } ?>
				</ul>
			</div>
			<div class="ingrep-Cont">
				<ul class="sumgroup entire clearfix">
					<?php for ($i = 1; $i < 9; $i++) { ?>
					<li>
						<a title="巨轮" href="http://v.114la.com/tv/52794.html"><img alt="巨轮" data-original="http://v.114la.com/img/up_img/201309/138007319230883.jpg" src="http://v.114la.com/static/images/loading.gif"><cite>巨轮</cite><em></em></a>
						<p>更新至第3集</p>
					</li>
					<?php } ?>	
				</ul>
			</div>
			<div class="ingrep-Cont">
				<ul class="sumgroup entire clearfix">
					<?php for ($i = 1; $i < 9; $i++) { ?>
					<li>
						<a title="辣妈正传" href="http://v.114la.com/tv/51847.html"><img data-original="http://v.114la.com/img/up_img/201309/137929600155843.jpg" src="http://v.114la.com/static/images/loading.gif"><cite>辣妈正传</cite><em></em></a>
						<p>更新至第33集</p>
					</li>
					<?php } ?>
				</ul>
			</div>
		</div>
	   	<div class="sideCont fr ingrep">
			<div class="inTitle">
				<h6><a target="_blank" title="电视剧排行榜" href="http://v.114la.com/top/tv.html">电视剧排行榜</a></h6>
				<div class="contabs">
					<ul>
						<li class="current"><a href="javascript:;">全部</a></li>
						<li><a href="javascript:;">韩剧</a></li>
						<li><a href="javascript:;">美剧</a></li>
					</ul>
					<a target="_blank" class="more" href="http://v.114la.com/top/tv.html">更多&gt;&gt;</a>
				</div>
			</div>
			<div style="display:block;" class="ingrep-Cont">
				<ul class="foldlist">
					<li class="hover">
						<div class="hisus">
							<a class="img" href="http://v.114la.com/tv/51938.html"><img alt="辣妈正传" src="http://v.114la.com/static/images/loading.gif"><b>1</b></a>
							<div class="imr">
								<h4>辣妈正传</h4>
								<p>类型：电视剧,言情剧,家...</p>
								<p>主演：孙俪,张译,明道,邬君梅,张晨光,奚美娟,秦沛,朱茵</p>
								<a class="p" href="http://v.114la.com/tv/51938.html">立即播放</a>
							</div>
						</div>
						<p><em>1</em><a href="http://v.114la.com/tv/51938.html">辣妈正传</a><span>522045</span></p>
					</li>
					<?php for ($i = 1; $i < 10; $i++) { ?>
					<li>
						<div class="hisus">
							<a class="img" href="http://v.114la.com/tv/38028.html">
								<img alt="璀璨人生" data-original="http://i0.letvimg.com/vrs/201212/05/d7438b035e324bd2aba604354b68144d.jpg" src="http://v.114la.com/static/images/loading.gif">
								<b>2</b>
							</a>
							<div class="imr">
								<h4>璀璨人生</h4>
								<p>类型：电视剧,言情剧,偶...</p>
								<p>主演：李沁,何润东,阚清子,张勋杰,杨雨婷,杨明娜,尹昭德,张衣,周晓涵,缪俊杰,刘文治,王侃伟,张子枫</p>
								<a class="p" href="http://v.114la.com/tv/38028.html">立即播放</a>
							</div>
						</div>
						<p><em><?php echo $i + 1; ?></em><a href="http://v.114la.com/tv/38028.html">璀璨人生</a><span>322852</span></p>
					</li>
					<?php } ?>									
				</ul>
			</div>
			<div class="ingrep-Cont">
				<ul class="foldlist">
					<li class="hover">
						<div class="hisus">
							<a class="img" href="http://v.114la.com/tv/34625.html">
								<img alt="主君的太阳" data-original="http://v.114la.com/img/up_img/201308/137724328366910.jpg" src="http://v.114la.com/static/images/loading.gif">
								<b>1</b>
							</a>
							<div class="imr">
								<h4>主君的太阳</h4><p>类型：都市言情时装...</p><p>主演：苏志燮孔孝珍徐仁国</p><a class="p" href="http://v.114la.com/tv/34625.html">立即播放</a>
							</div>
						</div>
						<p><em>1</em><a href="http://v.114la.com/tv/34625.html">主君的太阳</a><span>85427</span></p>
					</li>
					<?php for ($i = 1; $i < 10; $i++) { ?>
					<li>
						<div class="hisus">
							<a class="img" href="http://v.114la.com/tv/32482.html">
								<img alt="她的神话" data-original="http://i0.letvimg.com/vrs/201308/06/4b7376c17e034f89877cc38854784f06.jpg" src="http://v.114la.com/static/images/loading.gif">
								<b>2</b>
							</a>
							<div class="imr">
								<h4>她的神话</h4>
								<p>类型：偶像,都市,情感...</p>
								<p>主演：崔贞媛,金桢勋,孙恩书,朴允载</p>
								<a class="p" href="http://v.114la.com/tv/32482.html">立即播放</a>
							</div>
						</div>
						<p><em><?php echo $i + 1; ?></em><a href="http://v.114la.com/tv/32482.html">她的神话</a><span>32279</span></p>
					</li>
					<?php } ?>
				</ul>
			</div>
			<div class="ingrep-Cont">
				<ul class="foldlist">
					<li class="hover">
						<div class="hisus">
							<a class="img" href="http://v.114la.com/tv/1810.html">
								<img alt="绝命毒师" data-original="http://photocdn.sohu.com/20120724/vrsab_ver5030869.jpg" src="http://v.114la.com/static/images/loading.gif">
								<b>1</b>
							</a>
							<div class="imr">
								<h4>绝命毒师</h4>
								<p>类型：都市剧,悬疑剧,剧...</p>
								<p>主演：布莱恩.科兰斯顿,亚伦.保尔,安娜.冈,迪恩.诺里斯</p>
								<a class="p" href="http://v.114la.com/tv/1810.html">立即播放</a>
							</div>
						</div>
						<p><em>1</em><a href="http://v.114la.com/tv/1810.html">绝命毒师</a><span>30728</span></p>
					</li>
					<?php for ($i = 1; $i < 10; $i++) { ?>
					<li>
						<div class="hisus">
							<a class="img" href="http://v.114la.com/tv/52613.html">
								<img alt="破产姐妹" data-original="http://photocdn.sohu.com/20130807/vrsab_ver5690705.jpg" src="http://v.114la.com/static/images/loading.gif">
								<b>2</b>
							</a>
							<div class="imr">
								<h4>破产姐妹</h4>
								<p>类型：电视剧,偶像剧,青...</p>
								<p>主演：凯特·戴琳斯,贝丝·贝尔斯,诺亚·米尔斯,马修·摩伊,乔纳森·克特,加勒特·莫里斯</p>
								<a class="p" href="http://v.114la.com/tv/52613.html">立即播放</a>
							</div>
						</div>
						<p><em><?php echo $i + 1; ?></em><a href="http://v.114la.com/tv/52613.html">破产姐妹</a><span>29321</span></p>
					</li>
					<?php } ?>
				</ul>
			</div>			
		</div>
	</div>
	<div class="comwrap topare clearfix">
		<dl class="spitRow fl">
			<dt><a href="http://v.114la.com/music/0-0-0-0-2.html">MV欣赏</a></dt>
			<dd><?php for ($i = 1; $i < 30; $i++) { ?><a href="http://v.114la.com/music/0-0-235-0-2.html">港台</a><?php } ?></dd>
		</dl>
		<ul class="spitMvList fr clearfix">
			<?php for ($i = 1; $i < 11; $i++) { ?>
			<li>
				<a title="郭燕 - 天空之城 电视剧 《兰陵王》 主题曲" target="_blank" href="">
					<img alt="" src="http://v.114la.com/static/images/zt0717-01.jpg" style="display: inline;" />
					<cite>电视剧《兰陵王》主题曲，由林依晨和冯绍峰主演。</cite><em></em>
				</a>
				<p>郭燕 - 天空之城 电视剧 《兰陵王》 主题曲</p>
			</li>
			<?php } ?>
		</ul>
	</div>

	<div class="comwrap topare">
		<div class="inTitle"><h6>影视专题</h6><a rel="nofollow" target="_blnak" class="more" href="http://www.k559.com/superstar/">更多专题&gt;&gt;</a></div>
		<ul class="comSumList clearfix">
			<?php for ($i = 1; $i < 6; $i++) { ?>
			<li>
				<a rel="nofollow" target="_blnak" href="http://www.k559.com/superstar/liangchaowei/">
					<img alt="梁朝伟电影全集" data-original="http://v.114la.com/static/images/zt0717-01.jpg" src="http://v.114la.com/static/images/zt0717-01.jpg">
					<cite>梁朝伟电影全集</cite>
				</a>
			</li>
			<?php } ?>
		</ul>
	</div>
	<dl class="flink">
		<dt class="comTitle"><h6>友情链接</h6></dt>
		<dd>
		<?php $linkurlInfos = $controller->_getFrontInfos('passport', 'linkurl', 1, 4, array('type =' => 'nova'), array(array('listorder', 'desc'))); foreach ($linkurlInfos['infos'] as $linkurlInfo) { ?>
			<a href="<?php echo $linkurlInfo['url']; ?>" target="_blank"><?php echo $linkurlInfo['name']; ?></a> 
		<?php } ?>
		</dd>
	</dl>
</div>
<?php echo $this->load->view('footer_index'); ?>