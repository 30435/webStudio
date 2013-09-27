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
					<p><em>2</em><a href="http://v.114la.com/tv/38028.html">璀璨人生</a><span>322852</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/tv/39154.html">
							<img alt="小爸爸" data-original="http://pic9.qiyipic.com/thumb/20130829/a610147.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>3</b>
						</a>
						<div class="imr">
							<h4>小爸爸</h4>
							<p>类型：电视剧,言情剧,偶...</p>
							<p>主演：文章,马伊琍,朱佳煜,王耀庆,刘欢,徐翠翠,张子萱</p>
							<a class="p" href="http://v.114la.com/tv/39154.html">立即播放</a>
						</div>
					</div>
					<p><em>3</em><a href="http://v.114la.com/tv/39154.html">小爸爸</a><span>274416</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/tv/50857.html">
							<img alt="万万没想到" data-original="http://v.114la.com/img/up_img/201309/137895698051955.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>4</b>
						</a>
						<div class="imr">
							<h4>万万没想到</h4>
							<p>类型：武侠搞笑时装...</p>
							<p>主演：白客 刘循子墨 小爱</p>
							<a class="p" href="http://v.114la.com/tv/50857.html">立即播放</a>
						</div>
					</div>
					<p><em>4</em><a href="http://v.114la.com/tv/50857.html">万万没想到</a><span>108767</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/tv/52031.html">
							<img alt="向着胜利前进" data-original="http://pic9.qiyipic.com/thumb/20130917/a628407.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>5</b>
						</a>
						<div class="imr">
							<h4>向着胜利前进</h4>
							<p>类型：电视剧,偶像剧,悬...</p>
							<p>主演：吴奇隆,甘婷婷,王新,赵会南,谢孟伟,杨婷婷,于荣光,陈迪</p>
							<a class="p" href="http://v.114la.com/tv/52031.html">立即播放</a>
						</div>
					</div>
					<p><em>5</em><a href="http://v.114la.com/tv/52031.html">向着胜利前进</a><span>95458</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/tv/39423.html">
							<img alt="大秦帝国之纵横" data-original="http://p2.img.cctvpic.com/fmspic/vms/image/2013/08/22/VSET_1377153950978885.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>6</b>
						</a>
						<div class="imr">
							<h4>大秦帝国之纵横</h4>
							<p>类型：大秦帝国之纵横...</p>
							<p>主演：宁静,王学兵,富大龙,喻恩泰</p>
							<a class="p" href="http://v.114la.com/tv/39423.html">立即播放</a>
						</div>
					</div>
					<p><em>6</em><a href="http://v.114la.com/tv/39423.html">大秦帝国之纵横</a><span>92671</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/tv/34625.html">
							<img alt="主君的太阳" data-original="http://v.114la.com/img/up_img/201308/137724328366910.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>7</b>
						</a>
						<div class="imr">
							<h4>主君的太阳</h4>
							<p>类型：都市言情时装...</p>
							<p>主演：苏志燮孔孝珍徐仁国</p>
							<a class="p" href="http://v.114la.com/tv/34625.html">立即播放</a>
						</div>
					</div>
					<p><em>7</em><a href="http://v.114la.com/tv/34625.html">主君的太阳</a><span>85427</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/tv/18509.html">
							<img alt="终极一班3" data-original="http://v.114la.com/img/up_img/201307/137414036969165.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>8</b>
						</a>
						<div class="imr">
							<h4>终极一班3</h4>
							<p>类型：</p>
							<p>主演：汪东城 / 蔡芷纭 / 曾沛慈 / Spexial</p>
							<a class="p" href="http://v.114la.com/tv/18509.html">立即播放</a>
						</div>
					</div>
					<p><em>8</em><a href="http://v.114la.com/tv/18509.html">终极一班3</a><span>78396</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/tv/52585.html">
							<img alt="半泽直树" data-original="http://i2.letvimg.com/vrs/201309/13/f34c1bde8f624dd8b7b4463b88b36cb1.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>9</b>
						</a>
						<div class="imr">
							<h4>半泽直树</h4>
							<p>类型：剧情|都市|情感...</p>
							<p>主演：堺雅人,上户彩,及川光博,香川照之</p>
							<a class="p" href="http://v.114la.com/tv/52585.html">立即播放</a>
						</div>
					</div>
					<p><em>9</em><a href="http://v.114la.com/tv/52585.html">半泽直树</a><span>75135</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/tv/51839.html">
							<img alt="谁是真英雄" data-original="http://i2.letvimg.com/vrs/201309/12/4b1c942473ab48d080cd484adcdc9662.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>10</b>
						</a>
						<div class="imr">
							<h4>谁是真英雄</h4>
							<p>类型：剧情|战争|历史|...</p>
							<p>主演：小沈阳,王刚,王佳宁</p>
							<a class="p" href="http://v.114la.com/tv/51839.html">立即播放</a>
						</div>
					</div>
					<p><em>10</em><a href="http://v.114la.com/tv/51839.html">谁是真英雄</a><span>71171</span></p>
				</li>
									
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
							<h4>主君的太阳</h4>
							<p>类型：都市言情时装...</p>
							<p>主演：苏志燮孔孝珍徐仁国</p>
							<a class="p" href="http://v.114la.com/tv/34625.html">立即播放</a>
						</div>
					</div>
					<p><em>1</em><a href="http://v.114la.com/tv/34625.html">主君的太阳</a><span>85427</span></p>
				</li>
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
					<p><em>2</em><a href="http://v.114la.com/tv/32482.html">她的神话</a><span>32279</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/tv/28729.html">
							<img alt="good doctor" data-original="http://photocdn.sohu.com/20130723/vrsab_ver5630504.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>3</b>
						</a>
						<div class="imr">
							<h4>good doctor</h4>
							<p>类型：电视剧,言情剧,青...</p>
							<p>主演：朱元,文彩元,朱相昱,金敏瑞,千浩振,郭道元,罗英姬,金英光,郑满植,严贤璟</p>
							<a class="p" href="http://v.114la.com/tv/28729.html">立即播放</a>
						</div>
					</div>
					<p><em>3</em><a href="http://v.114la.com/tv/28729.html">good doctor</a><span>25702</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/tv/27935.html">
							<img alt="听见你的声音" data-original="http://v.114la.com/img/up_img/201308/137542272790559.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>4</b>
						</a>
						<div class="imr">
							<h4>听见你的声音</h4>
							<p>类型：偶像言情时装...</p>
							<p>主演：李宝英 李钟硕 尹尚贤 李多熙</p>
							<a class="p" href="http://v.114la.com/tv/27935.html">立即播放</a>
						</div>
					</div>
					<p><em>4</em><a href="http://v.114la.com/tv/27935.html">听见你的声音</a><span>9639</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/tv/1701.html">
							<img alt="善良的男人" data-original="http://v.114la.com/img/2013/07/18/qy/tvs/9/3C76H762a69.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>5</b>
						</a>
						<div class="imr">
							<h4>善良的男人</h4>
							<p>类型：都市剧,剧情片,言...</p>
							<p>主演：宋钟基,文彩媛,朴诗妍</p>
							<a class="p" href="http://v.114la.com/tv/1701.html">立即播放</a>
						</div>
					</div>
					<p><em>5</em><a href="http://v.114la.com/tv/1701.html">善良的男人</a><span>5529</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/tv/1953.html">
							<img alt="最佳爱情" data-original="http://v.114la.com/img/2013/07/18/qy/tvs/6/16u58ai9G10.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>6</b>
						</a>
						<div class="imr">
							<h4>最佳爱情</h4>
							<p>类型：言情剧,偶像剧,剧...</p>
							<p>主演：车胜元,孔孝真,尹启相,刘仁娜</p>
							<a class="p" href="http://v.114la.com/tv/1953.html">立即播放</a>
						</div>
					</div>
					<p><em>6</em><a href="http://v.114la.com/tv/1953.html">最佳爱情</a><span>3717</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/tv/1708.html">
							<img alt="逆转女王" data-original="http://v.114la.com/img/2013/07/18/qy/tvs/3/QMFl80556Z0.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>7</b>
						</a>
						<div class="imr">
							<h4>逆转女王</h4>
							<p>类型：言情剧,喜剧片,,...</p>
							<p>主演：郑俊浩,金南珠,蔡贞安,朴施厚</p>
							<a class="p" href="http://v.114la.com/tv/1708.html">立即播放</a>
						</div>
					</div>
					<p><em>7</em><a href="http://v.114la.com/tv/1708.html">逆转女王</a><span>3589</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/tv/15398.html">
							<img alt="丑闻" data-original="http://img36.pplive.cn/2013/06/27/17120014346_230X306.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>8</b>
						</a>
						<div class="imr">
							<h4>丑闻</h4>
							<p>类型：偶像</p>
							<p>主演：金载沅,赵允熙,赵在炫</p>
							<a class="p" href="http://v.114la.com/tv/15398.html">立即播放</a>
						</div>
					</div>
					<p><em>8</em><a href="http://v.114la.com/tv/15398.html">丑闻</a><span>3047</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/tv/1687.html">
							<img alt="至诚感天" data-original="http://photocdn.sohu.com/20130501/vrsab_ver5295002.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>9</b>
						</a>
						<div class="imr">
							<h4>至诚感天</h4>
							<p>类型：家庭剧,言情剧,都...</p>
							<p>主演：朴世英,李海仁,刘健,朴载正</p>
							<a class="p" href="http://v.114la.com/tv/1687.html">立即播放</a>
						</div>
					</div>
					<p><em>9</em><a href="http://v.114la.com/tv/1687.html">至诚感天</a><span>2878</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/tv/28339.html">
							<img alt="搞笑一家人" data-original="http://i0.letvimg.com/vrs/201301/24/50bda131a220491a92eace95c8c459fb.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>10</b>
						</a>
						<div class="imr">
							<h4>搞笑一家人</h4>
							<p>类型：剧情,喜剧,情景,...</p>
							<p>主演：牛莉,高亚麟,白志迪,宫景华,姜妍</p>
							<a class="p" href="http://v.114la.com/tv/28339.html">立即播放</a>
						</div>
					</div>
					<p><em>10</em><a href="http://v.114la.com/tv/28339.html">搞笑一家人</a><span>2649</span></p>
				</li>
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
					<p><em>2</em><a href="http://v.114la.com/tv/52613.html">破产姐妹</a><span>29321</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/tv/51953.html">
							<img alt="断头谷" data-original="http://photocdn.sohu.com/20130711/vrsab_ver5590113.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>3</b>
						</a>
						<div class="imr">
							<h4>断头谷</h4>
							<p>类型：电视剧,偶像剧,悬...</p>
							<p>主演：汤姆 ·米森,妮可儿·贝海尔,奥兰多·琼斯,卡蒂亚 温特</p>
							<a class="p" href="http://v.114la.com/tv/51953.html">立即播放</a>
						</div>
					</div>
					<p><em>3</em><a href="http://v.114la.com/tv/51953.html">断头谷</a><span>12695</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/tv/34812.html">
							<img alt="穹顶之下" data-original="http://v.114la.com/img/up_img/201308/137749878589497.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>4</b>
						</a>
						<div class="imr">
							<h4>穹顶之下</h4>
							<p>类型：剧情科幻悬疑...</p>
							<p>主演：迈克·沃格尔 科林·福特</p>
							<a class="p" href="http://v.114la.com/tv/34812.html">立即播放</a>
						</div>
					</div>
					<p><em>4</em><a href="http://v.114la.com/tv/34812.html">穹顶之下</a><span>10161</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/tv/52021.html">
							<img alt="性爱大师" data-original="http://v.114la.com/img/2013/09/18/le/tvs/2/Z8T6W31i84X.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>5</b>
						</a>
						<div class="imr">
							<h4>性爱大师</h4>
							<p>类型：剧情</p>
							<p>主演：麦克·辛,丽兹·卡潘</p>
							<a class="p" href="http://v.114la.com/tv/52021.html">立即播放</a>
						</div>
					</div>
					<p><em>5</em><a href="http://v.114la.com/tv/52021.html">性爱大师</a><span>7789</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/tv/1765.html">
							<img alt="摩登家庭" data-original="http://photocdn.sohu.com/20120823/vrsab_ver5066337.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>6</b>
						</a>
						<div class="imr">
							<h4>摩登家庭</h4>
							<p>类型：家庭剧,喜剧片,,...</p>
							<p>主演：阿芮尔·温特,艾德.奥尼尔,杰西.泰勒.弗格森,朱丽·鲍温</p>
							<a class="p" href="http://v.114la.com/tv/1765.html">立即播放</a>
						</div>
					</div>
					<p><em>6</em><a href="http://v.114la.com/tv/1765.html">摩登家庭</a><span>4687</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/tv/1657.html">
							<img alt="纸牌屋" data-original="http://photocdn.sohu.com/20130302/vrsab_ver5175537.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>7</b>
						</a>
						<div class="imr">
							<h4>纸牌屋</h4>
							<p>类型：悬疑剧,剧情片,都...</p>
							<p>主演：凯文·史派西,罗宾·怀特,迈克尔·凯利</p>
							<a class="p" href="http://v.114la.com/tv/1657.html">立即播放</a>
						</div>
					</div>
					<p><em>7</em><a href="http://v.114la.com/tv/1657.html">纸牌屋</a><span>3733</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/tv/52839.html">
							<img alt="神盾局特工" data-original="http://photocdn.sohu.com/20130711/vrsab_ver5590402.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>8</b>
						</a>
						<div class="imr">
							<h4>神盾局特工</h4>
							<p>类型：电视剧,偶像剧,悬...</p>
							<p>主演：温明娜,克拉克·格雷格,乔斯·韦登</p>
							<a class="p" href="http://v.114la.com/tv/52839.html">立即播放</a>
						</div>
					</div>
					<p><em>8</em><a href="http://v.114la.com/tv/52839.html">神盾局特工</a><span>3644</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/tv/16732.html">
							<img alt="绿箭侠" data-original="http://v.114la.com/img/2013/07/18/qy/tvs/6/l714TB15p01.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>9</b>
						</a>
						<div class="imr">
							<h4>绿箭侠</h4>
							<p>类型：电视剧,悬疑剧,科...</p>
							<p>主演：斯蒂芬·阿美尔,凯蒂·卡西迪,薇拉·贺兰德,科林·唐纳,苏珊娜·汤姆森,大卫·拉姆西,杰米·谢尔丹</p>
							<a class="p" href="http://v.114la.com/tv/16732.html">立即播放</a>
						</div>
					</div>
					<p><em>9</em><a href="http://v.114la.com/tv/16732.html">绿箭侠</a><span>3136</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/tv/52612.html">
							<img alt="人质" data-original="http://photocdn.sohu.com/20130807/vrsab_ver5690708.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>10</b>
						</a>
						<div class="imr">
							<h4>人质</h4>
							<p>类型：电视剧,悬疑剧,谍...</p>
							<p>主演：托妮·科莱特,迪伦·麦克德莫特,比利·布朗,劳拉·库克,泰勒·埃利奥特·伯克,马泰斯·瓦德,奎恩·谢法德</p>
							<a class="p" href="http://v.114la.com/tv/52612.html">立即播放</a>
						</div>
					</div>
					<p><em>10</em><a href="http://v.114la.com/tv/52612.html">人质</a><span>1769</span></p>
				</li>
								</ul>
			</div>			
		</div>
	</div>
	<div class="comwrap clearfix">
	    					   		<div class="leftSide fl ingrep">
			<dl class="inTitle">
				<dt>推荐电影</dt>
				<dd class="contabs">
					<ul>
						<li class="current"><a href="javascript:;">最热</a></li>
												<li><a href="javascript:;">欧美</a></li>
												<li><a href="javascript:;">动作</a></li>
												<li><a href="javascript:;">喜剧</a></li>
												<li><a href="javascript:;">战争</a></li>
												<li><a href="javascript:;">恐怖</a></li>
												<li><a href="javascript:;">伦理</a></li>
											</ul>
					<a class="more" href="http://v.114la.com/movie/">更多&gt;&gt;</a>
				</dd>
			</dl>
						<div style="display:block;" class="ingrep-Cont">
				<div class="clearfix rowleft">
										<div class="bgsummar fl">
						<a title="《僵尸世界大战》特辑" href="http://v.114la.com/movie/16359.html">
							<img alt="《僵尸世界大战》特辑" data-original="http://v.114la.com/img/focus_img/201309/138017369728314.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>
								<strong>《僵尸世界大战》特辑</strong>
								主演：布拉德·皮特,米瑞·伊诺丝,马修·福克斯,埃里克·韦斯特,大卫·摩斯							</cite>
						</a>
						<p>    由科幻小说《僵尸世界大战》改编。通过联合国战后调查人员对一场毁灭世界各国的僵尸战争幸存者的调查展现了一次虚构的世界大战。 故事背景设定在人类赢得僵尸大战的十年后，当年...<em></em></p>
					</div>
										<ul class="sumgroup fr clearfix">
												<li class="">
							<a title="天神传" href="http://v.114la.com/movie/39286.html">
								<img alt="天神传" data-original="http://v.114la.com/img/focus_img/201309/138017132815168.jpg" src="http://v.114la.com/static/images/loading.gif">
								<cite>天神传</cite>
								<em></em>
							</a>
							<p>性感女优大尺度出镜 </p>
						</li>
												<li class="">
							<a title="超级大导演之金刚王" href="http://v.114la.com/movie/52137.html">
								<img alt="超级大导演之金刚王" data-original="http://v.114la.com/img/focus_img/201309/137991778461593.jpg" src="http://v.114la.com/static/images/loading.gif">
								<cite>超级大导演之金刚王</cite>
								<em></em>
							</a>
							<p>暴力枪战肉搏爽翻天</p>
						</li>
												<li class="">
							<a title="夜店北京" href="http://v.114la.com/movie/51595.html">
								<img alt="夜店北京" data-original="http://v.114la.com/img/focus_img/201309/138016837410415.jpg" src="http://v.114la.com/static/images/loading.gif">
								<cite>夜店北京</cite>
								<em></em>
							</a>
							<p>嫩模主演大秀豪乳 </p>
						</li>
												<li class="">
							<a title="我是裸模" href="http://v.114la.com/movie/40653.html">
								<img alt="我是裸模" data-original="http://v.114la.com/img/focus_img/201309/137991852712027.jpg" src="http://v.114la.com/static/images/loading.gif">
								<cite>我是裸模</cite>
								<em></em>
							</a>
							<p>裸模背后的故事</p>
						</li>
												<li class="">
							<a title="妈咪" href="http://v.114la.com/movie/15427.html">
								<img alt="妈咪" data-original="http://v.114la.com/img/focus_img/201309/138017121572637.jpg" src="http://v.114la.com/static/images/loading.gif">
								<cite>妈咪</cite>
								<em></em>
							</a>
							<p>陪酒女孩的迷醉生活</p>
						</li>
												<li class="">
							<a title="四大名捕" href="http://v.114la.com/movie/15420.html">
								<img alt="四大名捕" data-original="http://v.114la.com/img/focus_img/201309/138017205928963.jpg" src="http://v.114la.com/static/images/loading.gif">
								<cite>四大名捕</cite>
								<em></em>
							</a>
							<p>江一燕与女捕头裸浴</p>
						</li>
											</ul>
				</div>
			</div>
									<div class="ingrep-Cont">
				<ul class="sumgroup entire clearfix">
										<li>
						<a title="王者之剑" href="http://www.m1905.com/vod/play/516590.shtml">
							<img data-original="http://image11.m1905.cn/uploadfile/2013/0206/thumb_1_160_230_20130206100707796.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>王者之剑</cite>
							<em></em>
						</a>
						<p>主演：杰森·莫玛,朗·普尔曼,罗丝·麦高恩</p>
					</li>
										<li>
						<a title="敢死队" href="http://v.114la.com/movie/4501.html">
							<img data-original="http://v.114la.com/img/2013/07/17/m1905/movie/1/10ZMX9w364H.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>敢死队</cite>
							<em></em>
						</a>
						<p>主演：西尔维斯特·史泰龙,李连杰,米基·洛克,布鲁斯·威利斯</p>
					</li>
										<li>
						<a title="永无止境" href="http://v.114la.com/movie/3733.html">
							<img data-original="http://image11.m1905.cn/uploadfile/2013/0911/thumb_1_160_230_20130911034749857.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>永无止境</cite>
							<em></em>
						</a>
						<p>主演：布莱德利·库珀,艾比·考尼什,罗伯特·德尼罗,安德鲁·霍华德(I)</p>
					</li>
										<li>
						<a title="女巫季节" href="http://v.114la.com/movie/4229.html">
							<img data-original="http://v.114la.com/img/2013/07/17/m1905/movie/2/701j7H56Vt4.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>女巫季节</cite>
							<em></em>
						</a>
						<p>主演：罗伯特·席安,尼古拉斯·凯奇,朗·普尔曼,克里斯托弗·李</p>
					</li>
										<li>
						<a title="黄沙武士" href="http://v.114la.com/movie/3735.html">
							<img data-original="http://image11.m1905.cn/uploadfile/2013/0410/thumb_1_160_230_20130410114301127.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>黄沙武士</cite>
							<em></em>
						</a>
						<p>主演：凯特·波茨沃斯,张东健,托尼·考克斯,杰弗里·拉什</p>
					</li>
										<li>
						<a title="夺命手机" href="http://v.114la.com/movie/4360.html">
							<img data-original="http://v.114la.com/img/2013/07/17/m1905/movie/1/43K5683D5s3.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>夺命手机</cite>
							<em></em>
						</a>
						<p>主演：夏恩·韦斯特,爱德华·伯恩斯,文·瑞姆斯,Yuri Kutsenko</p>
					</li>
										<li>
						<a title="X战争" href="http://v.114la.com/movie/3910.html">
							<img data-original="http://v.114la.com/img/2013/08/01/xl/movie/4/y6W89v92j23.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>X战争</cite>
							<em></em>
						</a>
						<p>主演：小古巴•古丁,J•K•西蒙斯</p>
					</li>
										<li>
						<a title="孤堡惊情" href="http://v.114la.com/movie/5636.html">
							<img data-original="http://v.114la.com/img/2013/07/17/m1905/movie/10/gr13584pI38.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>孤堡惊情</cite>
							<em></em>
						</a>
						<p>主演：贝琳·瑞达,Roger Príncep,梅宝·里维拉,Montserrat Carulla</p>
					</li>
									</ul>
			</div>
						<div class="ingrep-Cont">
				<ul class="sumgroup entire clearfix">
										<li>
						<a title="灭门" href="http://v.114la.com/movie/52040.html">
							<img data-original="http://images.movie.xunlei.com/100x140/573/901377fc51e902a6c424ca5f4ddaba7a.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>灭门</cite>
							<em></em>
						</a>
						<p>杀机四伏 血战连场 任达华安志杰好勇斗狠</p>
					</li>
										<li>
						<a title="赏金杀手" href="http://v.114la.com/movie/42548.html">
							<img data-original="http://v.114la.com/img/up_img/201309/137888515246496.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>赏金杀手</cite>
							<em></em>
						</a>
						<p>西部牛仔恩仇 ，一路砍头。</p>
					</li>
										<li>
						<a title="赤警威龙" href="http://v.114la.com/movie/40656.html">
							<img data-original="http://v.114la.com/img/up_img/201309/137878525680491.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>赤警威龙</cite>
							<em></em>
						</a>
						<p>简单、直接、粗暴又话唠的史泰龙大叔，不变的动作英雄。</p>
					</li>
										<li>
						<a title="白蛇传说" href="http://www.m1905.com/vod/play/503568.shtml">
							<img data-original="http://image11.m1905.cn/uploadfile/2012/0518/thumb_1_160_230_20120518032956786.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>白蛇传说</cite>
							<em></em>
						</a>
						<p>主演：李连杰,黄圣依,林峰,蔡卓妍</p>
					</li>
										<li>
						<a title="灵魂战车2：复仇时刻" href="http://www.m1905.com/vod/play/520724.shtml">
							<img data-original="http://image11.m1905.cn/uploadfile/2012/0406/thumb_1_160_230_20120406045650351.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>灵魂战车2：复仇时刻</cite>
							<em></em>
						</a>
						<p>主演：尼古拉斯·凯奇,伊德瑞斯·艾尔巴,塞伦·希德,薇奥兰特·普拉西多,约翰尼·威特沃斯</p>
					</li>
										<li>
						<a title="忠烈杨家将" href="http://www.m1905.com/vod/play/656353.shtml">
							<img data-original="http://image11.m1905.cn/uploadfile/2013/0329/thumb_1_160_230_20130329093527365.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>忠烈杨家将</cite>
							<em></em>
						</a>
						<p>忠烈杨家将型男大集结。</p>
					</li>
										<li>
						<a title="太极2：英雄崛起" href="http://www.m1905.com/vod/play/611056.shtml">
							<img data-original="http://image11.m1905.cn/uploadfile/2012/1018/thumb_1_160_230_20121018083925874.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>太极2：英雄崛起</cite>
							<em></em>
						</a>
						<p>主演：梁家辉,袁晓超,杨颖,彭于晏,冯绍峰</p>
					</li>
										<li>
						<a title="致命黑兰" href="http://v.114la.com/movie/33528.html">
							<img data-original="http://pic8.qiyipic.com/thumb/20130813/a525699u1.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>致命黑兰</cite>
							<em></em>
						</a>
						<p>“阿凡达”女星 冷艳血腥仇杀</p>
					</li>
									</ul>
			</div>
						<div class="ingrep-Cont">
				<ul class="sumgroup entire clearfix">
										<li>
						<a title="大野狼和小绵羊的爱情" href="http://v.114la.com/movie/52501.html">
							<img data-original="http://pic3.qiyipic.com/thumb/20130821/a598239.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>大野狼和小绵羊的爱情</cite>
							<em></em>
						</a>
						<p>柯震东再度上演小清新的爱情故事。</p>
					</li>
										<li>
						<a title="决战大洋" href="http://v.114la.com/movie/49608.html">
							<img data-original="http://pic1.qiyipic.com/thumb/20130912/a624362u1.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>决战大洋</cite>
							<em></em>
						</a>
						<p>麻生希版 ，性感风骚船灵。</p>
					</li>
										<li>
						<a title="金太郎的幸福生活 " href="http://v.114la.com/movie/39136.html">
							<img data-original="http://v.114la.com/img/up_img/201309/137819203718526.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>金太郎的幸福生活 </cite>
							<em></em>
						</a>
						<p>王雷再演“金太狼”，电影版讲述妇科男医生婚前那点闷骚囧事</p>
					</li>
										<li>
						<a title="疯狂的导演" href="http://v.114la.com/movie/52243.html">
							<img data-original="http://pic5.qiyipic.com/thumb/20130829/a609846.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>疯狂的导演</cite>
							<em></em>
						</a>
						<p>超越“疯狂系列”的又一”疯狂力作“</p>
					</li>
										<li>
						<a title="疯狂原始人 英文版" href="http://v.114la.com/movie/28837.html">
							<img data-original="http://i1.letvimg.com/vrs/201304/07/a68af03014aa4a008cf3b60662078f47.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>疯狂原始人 英文版</cite>
							<em></em>
						</a>
						<p>主演：尼古拉斯·凯奇,瑞恩·雷诺兹,艾玛·斯通</p>
					</li>
										<li>
						<a title="西游·降魔篇" href="http://v.114la.com/movie/34468.html">
							<img data-original="http://v.114la.com/img/up_img/201308/137715274232626.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>西游·降魔篇</cite>
							<em></em>
						</a>
						<p> 周星驰巨制，东方魔幻爱情喜剧。</p>
					</li>
										<li>
						<a title="夜幕惊魂" href="http://v.114la.com/movie/52244.html">
							<img data-original="http://image11.m1905.cn/uploadfile/2013/0531/thumb_1_160_230_20130531044253196.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>夜幕惊魂</cite>
							<em></em>
						</a>
						<p>主演：吴佩慈,张翰,连晋,淳于珊珊</p>
					</li>
										<li>
						<a title="2013王牌情敌" href="http://v.114la.com/movie/28727.html">
							<img data-original="http://img36.pplive.cn/2013/06/04/13542235226_230X306.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>2013王牌情敌</cite>
							<em></em>
						</a>
						<p>主演：曾志伟,谭咏麟,陈百祥,谢天华,黄宗泽</p>
					</li>
									</ul>
			</div>
						<div class="ingrep-Cont">
				<ul class="sumgroup entire clearfix">
										<li>
						<a title="忠烈杨家将" href="http://www.m1905.com/vod/play/656353.shtml">
							<img data-original="http://image11.m1905.cn/uploadfile/2013/0329/thumb_1_160_230_20130329093527365.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>忠烈杨家将</cite>
							<em></em>
						</a>
						<p>忠烈杨家将型男大集结。</p>
					</li>
										<li>
						<a title="特种部队" href="http://v.114la.com/movie/63.html">
							<img data-original="http://photocdn.sohu.com/20120821/vrsab_ver5064833.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>特种部队</cite>
							<em></em>
						</a>
						<p>主演：黛安·克鲁格,杰曼·翰苏,贝诺特.马吉梅尔,丹尼斯.门诺切特</p>
					</li>
										<li>
						<a title="金陵十三钗" href="http://v.114la.com/movie/11827.html">
							<img data-original="http://image11.m1905.cn/uploadfile/2011/1202/thumb_1_160_230_20111202024213166.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>金陵十三钗</cite>
							<em></em>
						</a>
						<p>主演：克里斯汀·贝尔,佟大为,窦骁,黄海波,曹可凡,聂远,倪妮</p>
					</li>
										<li>
						<a title="叶问" href="http://v.114la.com/movie/177.html">
							<img data-original="http://v.114la.com/img/2013/07/17/m1905/movie/6/672m8Z2tX82.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>叶问</cite>
							<em></em>
						</a>
						<p>主演：甄子丹,任达华,池内博之,林家栋</p>
					</li>
										<li>
						<a title="超级女特工" href="http://v.114la.com/movie/188.html">
							<img data-original="http://v.114la.com/img/2013/07/18/qy/movie/5/967gK248624.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>超级女特工</cite>
							<em></em>
						</a>
						<p>主演：苏菲·玛索,茱莉·德帕迪约,玛丽.吉莲</p>
					</li>
										<li>
						<a title="杨门女将之军令如山" href="http://v.114la.com/movie/3731.html">
							<img data-original="http://image11.m1905.cn/uploadfile/2011/1028/thumb_1_160_230_20111028040632249.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>杨门女将之军令如山</cite>
							<em></em>
						</a>
						<p>主演：张柏芝,郑佩佩,刘晓庆,金巧巧</p>
					</li>
										<li>
						<a title="D4救援队" href="http://v.114la.com/movie/26025.html">
							<img data-original="http://i2.letvimg.com/vrs/201301/24/8a318eb59beb4b35bc16dd78a9e4746c.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>D4救援队</cite>
							<em></em>
						</a>
						<p>主演：Darrin Dickerson,Clay Brocker</p>
					</li>
										<li>
						<a title="赛德克·巴莱" href="http://v.114la.com/movie/25894.html">
							<img data-original="http://images.movie.xunlei.com/100x140/673/8ba1ce9a3f3d639ec8338645b9fdf639.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>赛德克·巴莱</cite>
							<em></em>
						</a>
						<p>主演：林庆台,徐若瑄,徐若瑄,温岚,温岚,田中千绘,田中千绘,徐诣帆,徐诣帆,林源杰</p>
					</li>
									</ul>
			</div>
						<div class="ingrep-Cont">
				<ul class="sumgroup entire clearfix">
										<li>
						<a title="半夜不要照镜子" href="http://www.m1905.com/vod/play/549024.shtml">
							<img data-original="http://image11.m1905.cn/uploadfile/2012/0730/thumb_1_160_230_20120730094333984.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>半夜不要照镜子</cite>
							<em></em>
						</a>
						<p>主演：关智斌,李曼筠,刘静怡,姜梦茹</p>
					</li>
										<li>
						<a title="床下有人" href="http://www.m1905.com/vod/play/479438.shtml">
							<img data-original="http://v.114la.com/img/2013/07/17/m1905/movie/6/05N6J36O34s.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>床下有人</cite>
							<em></em>
						</a>
						<p>主演：郭晓然,何可人,武文佳,葛红霖</p>
					</li>
										<li>
						<a title="暴劫倾情" href="http://v.114la.com/movie/42.html">
							<img data-original="http://v.114la.com/img/2013/07/17/m1905/movie/10/1733Xf79t34.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>暴劫倾情</cite>
							<em></em>
						</a>
						<p>主演：任达华,叶玉卿</p>
					</li>
										<li>
						<a title="暮光之城2:新月" href="http://v.114la.com/movie/25746.html">
							<img data-original="http://images.movie.xunlei.com/100x140/974/7dd50d89903753fb1fdd16d43ac2e010.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>暮光之城2:新月</cite>
							<em></em>
						</a>
						<p>主演：罗伯特·帕丁森,克里斯汀·斯图尔特,泰勒·洛特纳,达寇塔·范宁,安娜·肯德里克</p>
					</li>
										<li>
						<a title="饥饿游戏" href="http://v.114la.com/movie/100.html">
							<img data-original="http://v.114la.com/img/2013/07/18/qy/movie/4/o66y35i4HQ3.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>饥饿游戏</cite>
							<em></em>
						</a>
						<p>主演：詹妮弗.劳伦斯,乔什·哈切森</p>
					</li>
										<li>
						<a title="巨蟒惊魂(泰国)" href="http://v.114la.com/movie/25958.html">
							<img data-original="http://images.movie.xunlei.com/100x140/726/d52556c8605121b3ff749974ced50bd5.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>巨蟒惊魂(泰国)</cite>
							<em></em>
						</a>
						<p>主演：pympan chalayanacupt,sittha lertsrimonkol,kiratikorn</p>
					</li>
										<li>
						<a title="异虫咒" href="http://v.114la.com/movie/25701.html">
							<img data-original="http://v.114la.com/img/2013/08/01/xl/movie/6/6gZ56ExN108.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>异虫咒</cite>
							<em></em>
						</a>
						<p>主演：</p>
					</li>
										<li>
						<a title="超能游戏者" href="http://v.114la.com/movie/80.html">
							<img data-original="http://v.114la.com/img/2013/07/18/qy/movie/3/Y26C42x8506.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>超能游戏者</cite>
							<em></em>
						</a>
						<p>主演：亚力克萨.巴杜科夫,谢尔盖.布鲁诺夫</p>
					</li>
									</ul>
			</div>
						<div class="ingrep-Cont">
				<ul class="sumgroup entire clearfix">
										<li>
						<a title="金陵十三钗" href="http://v.114la.com/movie/11827.html">
							<img data-original="http://image11.m1905.cn/uploadfile/2011/1202/thumb_1_160_230_20111202024213166.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>金陵十三钗</cite>
							<em></em>
						</a>
						<p>主演：克里斯汀·贝尔,佟大为,窦骁,黄海波,曹可凡,聂远,倪妮</p>
					</li>
										<li>
						<a title="妈咪" href="http://v.114la.com/movie/15427.html">
							<img data-original="http://v.114la.com/img/2013/07/18/qy/movie/2/24o2v769R6l.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>妈咪</cite>
							<em></em>
						</a>
						<p>陪酒女孩的迷醉生活</p>
					</li>
										<li>
						<a title="樱桃汁" href="http://v.114la.com/movie/25656.html">
							<img data-original="http://images.movie.xunlei.com/100x140/370/d71f7e340ab168ca99be9215979f0c4a.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>樱桃汁</cite>
							<em></em>
						</a>
						<p>主演：尼基·雷德,Jonathan_Tucker,迈克尔·奥吉弗,哈维兰·莫里斯,弗兰克·惠利</p>
					</li>
										<li>
						<a title="我们都是坏孩子" href="http://v.114la.com/movie/15432.html">
							<img data-original="http://v.114la.com/img/2013/07/18/qy/movie/6/2Ti3596gw02.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>我们都是坏孩子</cite>
							<em></em>
						</a>
						<p>主演：谢容儿,杨杏儿,李艾佳,夏筠妍,邢增婧,孙曼龄</p>
					</li>
										<li>
						<a title="爱滋初体验" href="http://v.114la.com/movie/25963.html">
							<img data-original="http://v.114la.com/img/2013/08/01/xl/movie/10/20FQ1H19C46.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>爱滋初体验</cite>
							<em></em>
						</a>
						<p>主演：罗家英,蓝洁瑛,彭丹</p>
					</li>
										<li>
						<a title="感情生活" href="http://v.114la.com/movie/30348.html">
							<img data-original="http://i1.letvimg.com/vrs/201301/23/9be9fd7391fb43c5a8b32b092939e0d8.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>感情生活</cite>
							<em></em>
						</a>
						<p>主演：夏雨,明道</p>
					</li>
										<li>
						<a title="迷城" href="http://v.114la.com/movie/30297.html">
							<img data-original="http://i2.letvimg.com/vrs/201301/23/6123737ba5824f5387db5672d6d4df17.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>迷城</cite>
							<em></em>
						</a>
						<p>主演：霍思燕,郭晓然</p>
					</li>
										<li>
						<a title="古镇情缘" href="http://v.114la.com/movie/30304.html">
							<img data-original="http://i0.letvimg.com/vrs/201301/23/fb279e1a8f2848dba0d157b9b01c0c50.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>古镇情缘</cite>
							<em></em>
						</a>
						<p>主演：伊能静,段钧豪,贡米,车永莉,丁海峰</p>
					</li>
									</ul>
			</div>
					</div>
	   	   <div class="sideCont fr ingrep">
			<div class="inTitle">
				<h6><a target="_blank" title="电影排行榜" href="http://v.114la.com/top/movie.html">电影排行榜</a></h6>
				<div class="contabs">
					<ul>
						<li class="current"><a href="javascript:;">全部</a></li>
						<li><a href="javascript:;">喜剧</a></li>
						<li><a href="javascript:;">科幻</a></li>
					</ul>
					<a target="_blank" class="more" href="http://v.114la.com/top/movie.html">更多&gt;&gt;</a>
				</div>
			</div>
			<div style="display:block;" class="ingrep-Cont">
				<ul class="foldlist">
								<li class="hover">
					<div class="hisus">
						<a class="img" href="http://v.114la.com/movie/33807.html">
							<img alt="全民目击" data-original="http://v.114la.com/img/focus_img/201309/137930421692788.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>1</b>
						</a>
						<div class="imr">
							<h4>全民目击</h4>
							<p>类型：悬疑 / 犯罪...</p>
							<p>主演： 孙红雷 / 余男 / 郭富城 / 邓家佳 </p>
							<a class="p" href="http://v.114la.com/movie/33807.html">立即播放</a>
						</div>
					</div>
					<p><em>1</em><a href="http://v.114la.com/movie/33807.html">全民目击</a><span>47496</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/movie/16359.html">
							<img alt="僵尸世界大战" data-original="http://v.114la.com/img/2013/07/18/qy/movie/4/67A94T990K5.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>2</b>
						</a>
						<div class="imr">
							<h4>僵尸世界大战</h4>
							<p>类型：电影,科幻,恐怖,...</p>
							<p>主演：布拉德·皮特,米瑞·伊诺丝,马修·福克斯,埃里克·韦斯特,大卫·摩斯</p>
							<a class="p" href="http://v.114la.com/movie/16359.html">立即播放</a>
						</div>
					</div>
					<p><em>2</em><a href="http://v.114la.com/movie/16359.html">僵尸世界大战</a><span>35036</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/movie/40657.html">
							<img alt="非常幸运" data-original="http://v.114la.com/img/up_img/201309/137878554775216.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>3</b>
						</a>
						<div class="imr">
							<h4>非常幸运</h4>
							<p>类型：喜剧 爱情...</p>
							<p>主演： 章子怡  王力宏 林心如</p>
							<a class="p" href="http://v.114la.com/movie/40657.html">立即播放</a>
						</div>
					</div>
					<p><em>3</em><a href="http://v.114la.com/movie/40657.html">非常幸运</a><span>32124</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/movie/25373.html">
							<img alt="不二神探" data-original="http://v.114la.com/img/up_img/201307/137516280789310.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>4</b>
						</a>
						<div class="imr">
							<h4>不二神探</h4>
							<p>类型：犯罪 / 动作 /...</p>
							<p>主演：李连杰 / 文章 / 刘诗诗</p>
							<a class="p" href="http://v.114la.com/movie/25373.html">立即播放</a>
						</div>
					</div>
					<p><em>4</em><a href="http://v.114la.com/movie/25373.html">不二神探</a><span>30603</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/movie/52502.html">
							<img alt="摩登年代" data-original="http://v.114la.com/img/up_img/201309/137990032215596.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>5</b>
						</a>
						<div class="imr">
							<h4>摩登年代</h4>
							<p>类型：剧情 / 喜剧...</p>
							<p>主演：徐峥 / 张子枫 / 王宣予 / 张颂文</p>
							<a class="p" href="http://v.114la.com/movie/52502.html">立即播放</a>
						</div>
					</div>
					<p><em>5</em><a href="http://v.114la.com/movie/52502.html">摩登年代</a><span>29518</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/movie/33305.html">
							<img alt="一路向西" data-original="http://v.114la.com/img/up_img/201308/137594651995462.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>6</b>
						</a>
						<div class="imr">
							<h4>一路向西</h4>
							<p>类型：剧情</p>
							<p>主演：李沐晴 舒沁妍 胡耀辉</p>
							<a class="p" href="http://v.114la.com/movie/33305.html">立即播放</a>
						</div>
					</div>
					<p><em>6</em><a href="http://v.114la.com/movie/33305.html">一路向西</a><span>23155</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/movie/29274.html">
							<img alt="失恋33天" data-original="http://i2.letvimg.com/vrs/201301/24/f168fca062434b99a6ee4c9b08a46cd5.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>7</b>
						</a>
						<div class="imr">
							<h4>失恋33天</h4>
							<p>类型：剧情,喜剧,爱情...</p>
							<p>主演：文章,白百何,张子萱,王耀庆,郭京飞,张嘉译</p>
							<a class="p" href="http://v.114la.com/movie/29274.html">立即播放</a>
						</div>
					</div>
					<p><em>7</em><a href="http://v.114la.com/movie/29274.html">失恋33天</a><span>22394</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/movie/51591.html">
							<img alt="小时代" data-original="http://v.114la.com/img/up_img/201309/137903798754097.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>8</b>
						</a>
						<div class="imr">
							<h4>小时代</h4>
							<p>类型：喜剧 爱情 剧情...</p>
							<p>主演：郭采洁杨幂谢依霖</p>
							<a class="p" href="http://v.114la.com/movie/51591.html">立即播放</a>
						</div>
					</div>
					<p><em>8</em><a href="http://v.114la.com/movie/51591.html">小时代</a><span>21312</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/movie/34470.html">
							<img alt="被偷走的那五年" data-original="http://v.114la.com/img/up_img/201308/137715603667441.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>9</b>
						</a>
						<div class="imr">
							<h4>被偷走的那五年</h4>
							<p>类型：爱情 / 剧情...</p>
							<p>主演：白百何 / 张孝全 / 范玮琪</p>
							<a class="p" href="http://v.114la.com/movie/34470.html">立即播放</a>
						</div>
					</div>
					<p><em>9</em><a href="http://v.114la.com/movie/34470.html">被偷走的那五年</a><span>18776</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/movie/25171.html">
							<img alt="了不起的盖茨比" data-original="http://v.114la.com/img/2013/07/27/qy/movie/9/T61524K2HR6.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>10</b>
						</a>
						<div class="imr">
							<h4>了不起的盖茨比</h4>
							<p>类型：电影,爱情,剧情...</p>
							<p>主演：莱昂纳多·迪卡普里奥,凯瑞·穆里根,托比·马奎尔,艾拉·菲舍尔,乔尔·埃哲顿</p>
							<a class="p" href="http://v.114la.com/movie/25171.html">立即播放</a>
						</div>
					</div>
					<p><em>10</em><a href="http://v.114la.com/movie/25171.html">了不起的盖茨比</a><span>18185</span></p>
				</li>
									
				</ul>
			</div>
			<div class="ingrep-Cont">
				<ul class="foldlist">
								<li class="hover">
					<div class="hisus">
						<a class="img" href="http://v.114la.com/movie/40657.html">
							<img alt="非常幸运" data-original="http://v.114la.com/img/up_img/201309/137878554775216.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>1</b>
						</a>
						<div class="imr">
							<h4>非常幸运</h4>
							<p>类型：喜剧 爱情...</p>
							<p>主演： 章子怡  王力宏 林心如</p>
							<a class="p" href="http://v.114la.com/movie/40657.html">立即播放</a>
						</div>
					</div>
					<p><em>1</em><a href="http://v.114la.com/movie/40657.html">非常幸运</a><span>32124</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/movie/25373.html">
							<img alt="不二神探" data-original="http://v.114la.com/img/up_img/201307/137516280789310.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>2</b>
						</a>
						<div class="imr">
							<h4>不二神探</h4>
							<p>类型：犯罪 / 动作 /...</p>
							<p>主演：李连杰 / 文章 / 刘诗诗</p>
							<a class="p" href="http://v.114la.com/movie/25373.html">立即播放</a>
						</div>
					</div>
					<p><em>2</em><a href="http://v.114la.com/movie/25373.html">不二神探</a><span>30603</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/movie/52502.html">
							<img alt="摩登年代" data-original="http://v.114la.com/img/up_img/201309/137990032215596.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>3</b>
						</a>
						<div class="imr">
							<h4>摩登年代</h4>
							<p>类型：剧情 / 喜剧...</p>
							<p>主演：徐峥 / 张子枫 / 王宣予 / 张颂文</p>
							<a class="p" href="http://v.114la.com/movie/52502.html">立即播放</a>
						</div>
					</div>
					<p><em>3</em><a href="http://v.114la.com/movie/52502.html">摩登年代</a><span>29518</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/movie/33655.html">
							<img alt="一夜惊喜" data-original="http://photocdn.sohu.com/20130812/vrsab_ver5696302.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>4</b>
						</a>
						<div class="imr">
							<h4>一夜惊喜</h4>
							<p>类型：电影,爱情片,喜剧...</p>
							<p>主演：丹尼尔·海尼,范冰冰,李治廷,蒋劲夫</p>
							<a class="p" href="http://v.114la.com/movie/33655.html">立即播放</a>
						</div>
					</div>
					<p><em>4</em><a href="http://v.114la.com/movie/33655.html">一夜惊喜</a><span>9731</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/movie/52138.html">
							<img alt="一座城池" data-original="http://www.qiyipic.com/thumb/20130918/a629882.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>5</b>
						</a>
						<div class="imr">
							<h4>一座城池</h4>
							<p>类型：电影,喜剧,剧情,...</p>
							<p>主演：房祖名,王太利,黄瀞怡,谢芳</p>
							<a class="p" href="http://v.114la.com/movie/52138.html">立即播放</a>
						</div>
					</div>
					<p><em>5</em><a href="http://v.114la.com/movie/52138.html">一座城池</a><span>8435</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/movie/417.html">
							<img alt="亨利的罪行" data-original="http://v.114la.com/img/2013/07/18/qy/movie/6/Wk8155a6267.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>6</b>
						</a>
						<div class="imr">
							<h4>亨利的罪行</h4>
							<p>类型：电影,剧情片,爱情...</p>
							<p>主演：基努·李维斯,詹姆斯·凯恩,维拉.法米加</p>
							<a class="p" href="http://v.114la.com/movie/417.html">立即播放</a>
						</div>
					</div>
					<p><em>6</em><a href="http://v.114la.com/movie/417.html">亨利的罪行</a><span>7667</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/movie/49.html">
							<img alt="我老公不靠谱" data-original="http://photocdn.sohu.com/20121113/vrsab_ver5109833.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>7</b>
						</a>
						<div class="imr">
							<h4>我老公不靠谱</h4>
							<p>类型：电影,爱情片,喜剧...</p>
							<p>主演：蔡卓妍,郑伊健,张歆艺,徐正曦</p>
							<a class="p" href="http://v.114la.com/movie/49.html">立即播放</a>
						</div>
					</div>
					<p><em>7</em><a href="http://v.114la.com/movie/49.html">我老公不靠谱</a><span>6664</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/movie/34466.html">
							<img alt="超级经纪人" data-original="http://v.114la.com/img/up_img/201308/137715200090840.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>8</b>
						</a>
						<div class="imr">
							<h4>超级经纪人</h4>
							<p>类型：爱情 / 剧情...</p>
							<p>主演：蔡卓妍 / 杜汶泽 / 高云翔</p>
							<a class="p" href="http://v.114la.com/movie/34466.html">立即播放</a>
						</div>
					</div>
					<p><em>8</em><a href="http://v.114la.com/movie/34466.html">超级经纪人</a><span>6539</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/movie/20621.html">
							<img alt="一起飞" data-original="http://image11.m1905.cn/uploadfile/2012/0809/thumb_1_160_230_20120809085605554.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>9</b>
						</a>
						<div class="imr">
							<h4>一起飞</h4>
							<p>类型：喜剧,爱情,剧情,...</p>
							<p>主演：林志颖,张娜拉,万思维,王子子</p>
							<a class="p" href="http://v.114la.com/movie/20621.html">立即播放</a>
						</div>
					</div>
					<p><em>9</em><a href="http://v.114la.com/movie/20621.html">一起飞</a><span>6478</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/movie/34631.html">
							<img alt="怪兽大学" data-original="http://pic6.qiyipic.com/thumb/20130821/a598099.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>10</b>
						</a>
						<div class="imr">
							<h4>怪兽大学</h4>
							<p>类型：电影,喜剧,动画...</p>
							<p>主演：比利·克里斯托,约翰·古德曼,史蒂夫·布西密,海伦·米伦,彼得·索恩</p>
							<a class="p" href="http://v.114la.com/movie/34631.html">立即播放</a>
						</div>
					</div>
					<p><em>10</em><a href="http://v.114la.com/movie/34631.html">怪兽大学</a><span>6335</span></p>
				</li>
							</ul>
			</div>
			<div class="ingrep-Cont">
				<ul class="foldlist">
								<li class="hover">
					<div class="hisus">
						<a class="img" href="http://v.114la.com/movie/16359.html">
							<img alt="僵尸世界大战" data-original="http://v.114la.com/img/2013/07/18/qy/movie/4/67A94T990K5.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>1</b>
						</a>
						<div class="imr">
							<h4>僵尸世界大战</h4>
							<p>类型：电影,科幻,恐怖,...</p>
							<p>主演：布拉德·皮特,米瑞·伊诺丝,马修·福克斯,埃里克·韦斯特,大卫·摩斯</p>
							<a class="p" href="http://v.114la.com/movie/16359.html">立即播放</a>
						</div>
					</div>
					<p><em>1</em><a href="http://v.114la.com/movie/16359.html">僵尸世界大战</a><span>35036</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/movie/25169.html">
							<img alt="环太平洋" data-original="http://v.114la.com/img/2013/07/27/qy/movie/10/1A2485w1J0j.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>2</b>
						</a>
						<div class="imr">
							<h4>环太平洋</h4>
							<p>类型：电影,科幻,动作,...</p>
							<p>主演：查理·汉纳姆,菊地凛子,伊德瑞斯·艾尔巴,查理·戴,朗·普尔曼</p>
							<a class="p" href="http://v.114la.com/movie/25169.html">立即播放</a>
						</div>
					</div>
					<p><em>2</em><a href="http://v.114la.com/movie/25169.html">环太平洋</a><span>17810</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/movie/38438.html">
							<img alt="极乐空间" data-original="http://v.114la.com/img/up_img/201308/137782860840457.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>3</b>
						</a>
						<div class="imr">
							<h4>极乐空间</h4>
							<p>类型：科幻 / 剧情 /...</p>
							<p>主演：马特·达蒙 / 朱迪·福斯特 </p>
							<a class="p" href="http://v.114la.com/movie/38438.html">立即播放</a>
						</div>
					</div>
					<p><em>3</em><a href="http://v.114la.com/movie/38438.html">极乐空间</a><span>10625</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/movie/15528.html">
							<img alt="钢铁侠3" data-original="http://v.114la.com/img/2013/07/18/qy/movie/9/0Nd57qF0305.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>4</b>
						</a>
						<div class="imr">
							<h4>钢铁侠3</h4>
							<p>类型：电影,科幻,动作,...</p>
							<p>主演：小罗伯特·唐尼,格温妮丝·帕特洛,唐·钱德尔,本·金斯利,盖·皮尔斯</p>
							<a class="p" href="http://v.114la.com/movie/15528.html">立即播放</a>
						</div>
					</div>
					<p><em>4</em><a href="http://v.114la.com/movie/15528.html">钢铁侠3</a><span>7022</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/movie/38608.html">
							<img alt="遗落战境" data-original="http://v.114la.com/img/up_img/201309/137817470087735.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>5</b>
						</a>
						<div class="imr">
							<h4>遗落战境</h4>
							<p>类型：科幻 / 动作 /...</p>
							<p>主演：汤姆·克鲁斯 / 欧嘉·柯瑞兰寇</p>
							<a class="p" href="http://v.114la.com/movie/38608.html">立即播放</a>
						</div>
					</div>
					<p><em>5</em><a href="http://v.114la.com/movie/38608.html">遗落战境</a><span>3591</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/movie/34103.html">
							<img alt="特种部队2" data-original="http://v.114la.com/img/up_img/201308/137689889166870.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>6</b>
						</a>
						<div class="imr">
							<h4>特种部队2</h4>
							<p>类型：科幻 | 动作 |...</p>
							<p>主演： 丹尼斯·奎德 | 查宁·塔图姆 | 雷·帕克</p>
							<a class="p" href="http://v.114la.com/movie/34103.html">立即播放</a>
						</div>
					</div>
					<p><em>6</em><a href="http://v.114la.com/movie/34103.html">特种部队2</a><span>2894</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/movie/15477.html">
							<img alt="v字仇杀队" data-original="http://v.114la.com/img/2013/07/18/qy/movie/7/w37Z91A7F34.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>7</b>
						</a>
						<div class="imr">
							<h4>v字仇杀队</h4>
							<p>类型：电影,科幻,动作,...</p>
							<p>主演：娜塔莉·波特曼,雨果·维文,斯蒂芬·瑞,斯蒂芬·弗雷,约翰·赫特</p>
							<a class="p" href="http://v.114la.com/movie/15477.html">立即播放</a>
						</div>
					</div>
					<p><em>7</em><a href="http://v.114la.com/movie/15477.html">v字仇杀队</a><span>2641</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/movie/29768.html">
							<img alt="蓝血人" data-original="http://i3.letvimg.com/vrs/201301/24/def921a2f1104c7ebec63232d293e219.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>8</b>
						</a>
						<div class="imr">
							<h4>蓝血人</h4>
							<p>类型：剧情,动作,爱情,...</p>
							<p>主演：刘德华,关之琳,舒淇,张耀扬</p>
							<a class="p" href="http://v.114la.com/movie/29768.html">立即播放</a>
						</div>
					</div>
					<p><em>8</em><a href="http://v.114la.com/movie/29768.html">蓝血人</a><span>2258</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/movie/15535.html">
							<img alt="超人3" data-original="http://v.114la.com/img/2013/07/18/qy/movie/8/6s38g3c8102.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>9</b>
						</a>
						<div class="imr">
							<h4>超人3</h4>
							<p>类型：电影,喜剧,科幻,...</p>
							<p>主演：克里斯托弗·里夫,玛戈·基德,理查德·普赖尔,杰基·库伯,马克·麦克罗</p>
							<a class="p" href="http://v.114la.com/movie/15535.html">立即播放</a>
						</div>
					</div>
					<p><em>9</em><a href="http://v.114la.com/movie/15535.html">超人3</a><span>2128</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/movie/15652.html">
							<img alt="逆世界" data-original="http://v.114la.com/img/2013/07/18/qy/movie/9/7Z902Xpg2d8.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>10</b>
						</a>
						<div class="imr">
							<h4>逆世界</h4>
							<p>类型：电影,爱情,科幻,...</p>
							<p>主演：克尔斯滕·邓斯特,吉姆·斯特吉斯,蒂莫西·斯波,詹姆斯·基德尼,尼尔·纳皮尔</p>
							<a class="p" href="http://v.114la.com/movie/15652.html">立即播放</a>
						</div>
					</div>
					<p><em>10</em><a href="http://v.114la.com/movie/15652.html">逆世界</a><span>1969</span></p>
				</li>
								</ul>
			</div>			
		</div>
	</div>	
	<div class="comwrap clearfix">
							   		<div class="leftSide fl ingrep">
			<dl class="inTitle">
				<dt>热播动漫</dt>
				<dd class="contabs">
					<ul>
						<li class="current"><a href="javascript:;">最热</a></li>
												<li><a href="javascript:;">日韩</a></li>
												<li><a href="javascript:;">国产</a></li>
												<li><a href="javascript:;">欧美</a></li>
											</ul>
					<a class="more" href="http://v.114la.com/anime/">更多&gt;&gt;</a>
				</dd>
			</dl>
						<div style="display:block;" class="ingrep-Cont">
				<div class="clearfix rowleft">
										<div class="bgsummar fl">
						<a title="妖精的尾巴（国语）" href="http://v.114la.com/anime/2644.html">
							<img alt="妖精的尾巴（国语）" data-original="http://v.114la.com/img/focus_img/201309/138017615252731.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>
								<strong>妖精的尾巴（国语）</strong>
								更新至第164集							</cite>
						</a>
						<p>少女露西一直希望能加入云集众多厉害魔法师的名为“妖精尾巴”的公会，在纳兹的引导下，露西终于得偿所愿，随后，露西跟纳兹、格雷、艾尔莎和哈比组成“最强！？”队伍，二男二女一猫的旅...<em></em></p>
					</div>
										<ul class="sumgroup fr clearfix">
												<li class="">
							<a title="进击的巨人MAD" href="http://v.114la.com/anime/33786.html">
								<img alt="进击的巨人MAD" data-original="http://v.114la.com/img/focus_img/201309/137897249984444.jpg" src="http://v.114la.com/static/images/loading.gif">
								<cite>进击的巨人MAD</cite>
								<em></em>
							</a>
							<p>更新至第45集</p>
						</li>
												<li class="">
							<a title="海贼王" href="http://v.114la.com/anime/2646.html">
								<img alt="海贼王" data-original="http://v.114la.com/img/focus_img/201309/137828194469238.jpg" src="http://v.114la.com/static/images/loading.gif">
								<cite>海贼王</cite>
								<em></em>
							</a>
							<p>613集全</p>
						</li>
												<li class="">
							<a title="尸兄" href="http://v.114la.com/anime/17625.html">
								<img alt="尸兄" data-original="http://v.114la.com/img/focus_img/201309/137938483767724.jpg" src="http://v.114la.com/static/images/loading.gif">
								<cite>尸兄</cite>
								<em></em>
							</a>
							<p>10集全</p>
						</li>
												<li class="">
							<a title="十万个语言版十万个冷笑话" href="http://v.114la.com/anime/36723.html">
								<img alt="十万个语言版十万个冷笑话" data-original="http://v.114la.com/img/focus_img/201309/137938482431955.jpg" src="http://v.114la.com/static/images/loading.gif">
								<cite>十万个语言版十万个冷笑话</cite>
								<em></em>
							</a>
							<p>8集全</p>
						</li>
												<li class="">
							<a title="全职猎人（2011）" href="http://v.114la.com/anime/2642.html">
								<img alt="全职猎人（2011）" data-original="http://v.114la.com/img/focus_img/201309/137938503127946.jpg" src="http://v.114la.com/static/images/loading.gif">
								<cite>全职猎人（2011）</cite>
								<em></em>
							</a>
							<p>更新至第97集</p>
						</li>
												<li class="">
							<a title="我叫MT第六季" href="http://v.114la.com/anime/17615.html">
								<img alt="我叫MT第六季" data-original="http://v.114la.com/img/focus_img/201309/137828192681819.jpg" src="http://v.114la.com/static/images/loading.gif">
								<cite>我叫MT第六季</cite>
								<em></em>
							</a>
							<p>27集全</p>
						</li>
											</ul>
				</div>
			</div>
									<div class="ingrep-Cont">
				<ul class="sumgroup entire clearfix">
										<li>
						<a title="蜡笔小新" href="http://v.114la.com/anime/2676.html">
							<img data-original="http://photocdn.sohu.com/20110421/vrsab_ver1002411.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>蜡笔小新</cite>
							<em></em>
						</a>
						<p>1449集全</p>
					</li>
										<li>
						<a title="魔鬼恋人" href="http://v.114la.com/anime/51951.html">
							<img data-original="http://images.movie.xunlei.com/100x140/1012/40ff40fabfe506a595c76ed9050aaf53.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>魔鬼恋人</cite>
							<em></em>
						</a>
						<p>更新至第2集</p>
					</li>
										<li>
						<a title="进击的巨人MAD" href="http://v.114la.com/anime/33786.html">
							<img data-original="http://i0.letvimg.com/vrs/201308/14/73d68884428240138bb7e1bb8ecb9845.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>进击的巨人MAD</cite>
							<em></em>
						</a>
						<p>更新至第45集</p>
					</li>
										<li>
						<a title="樱桃小丸子 第2季" href="http://v.114la.com/anime/30863.html">
							<img data-original="http://i1.letvimg.com/vrs/201208/21/0cccd7833c6c4028a13571616be72718.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>樱桃小丸子 第2季</cite>
							<em></em>
						</a>
						<p>更新至第616集</p>
					</li>
										<li>
						<a title="火影忍者剧场版合集" href="http://v.114la.com/anime/31729.html">
							<img data-original="http://i1.letvimg.com/vrs/201211/10/1225e22b7a7349c19b461817b7843836.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>火影忍者剧场版合集</cite>
							<em></em>
						</a>
						<p>9集全</p>
					</li>
										<li>
						<a title="火影忍者2012剧场版：忍者之路" href="http://v.114la.com/anime/30861.html">
							<img data-original="http://i1.letvimg.com/vrs/201304/12/2c31467e20a6479ca187616f63cb98ca.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>火影忍者2012剧场版：忍者之路</cite>
							<em></em>
						</a>
						<p>1集全</p>
					</li>
										<li>
						<a title="海贼王" href="http://v.114la.com/anime/2646.html">
							<img data-original="http://photocdn.sohu.com/20130624/vrsab_ver1007474.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>海贼王</cite>
							<em></em>
						</a>
						<p>613集全</p>
					</li>
										<li>
						<a title="宫崎骏作品集" href="http://v.114la.com/anime/49611.html">
							<img data-original="http://images.movie.xunlei.com/100x140/788/a3a0214e7ed3869594d9250cb14d0faf.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>宫崎骏作品集</cite>
							<em></em>
						</a>
						<p>18集全</p>
					</li>
									</ul>
			</div>
						<div class="ingrep-Cont">
				<ul class="sumgroup entire clearfix">
										<li>
						<a title="喜羊羊与灰太狼之开心方程式" href="http://v.114la.com/anime/37337.html">
							<img data-original="http://pic8.qiyipic.com/thumb/20130826/a604569.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>喜羊羊与灰太狼之开心方程式</cite>
							<em></em>
						</a>
						<p>78集全</p>
					</li>
										<li>
						<a title="十万个冷笑话特别版" href="http://v.114la.com/anime/2573.html">
							<img data-original="http://photocdn.sohu.com/20130320/vrsab_ver5191342.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>十万个冷笑话特别版</cite>
							<em></em>
						</a>
						<p>更新至第5集</p>
					</li>
										<li>
						<a title="神魄" href="http://v.114la.com/anime/37718.html">
							<img data-original="http://pic9.qiyipic.com/thumb/20130904/a611060u1.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>神魄</cite>
							<em></em>
						</a>
						<p>33集全</p>
					</li>
										<li>
						<a title="熊出没" href="http://v.114la.com/anime/9127.html">
							<img data-original="http://v.114la.com/img/2013/07/18/qy/comic/6/C242CH58609.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>熊出没</cite>
							<em></em>
						</a>
						<p>207集全</p>
					</li>
										<li>
						<a title="洛克王国大冒险" href="http://v.114la.com/anime/34823.html">
							<img data-original="http://pic9.qiyipic.com/thumb/20130826/a605692.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>洛克王国大冒险</cite>
							<em></em>
						</a>
						<p>52集全</p>
					</li>
										<li>
						<a title="贝瓦儿歌" href="http://v.114la.com/anime/14664.html">
							<img data-original="http://www.qiyipic.com/thumb/20120723/a198539u1.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>贝瓦儿歌</cite>
							<em></em>
						</a>
						<p>88集全</p>
					</li>
										<li>
						<a title="尸兄" href="http://v.114la.com/anime/17625.html">
							<img data-original="http://photocdn.sohu.com/20130801/vrsab_ver5670609.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>尸兄</cite>
							<em></em>
						</a>
						<p>10集全</p>
					</li>
										<li>
						<a title="十万个冷笑话" href="http://v.114la.com/anime/2621.html">
							<img data-original="http://photocdn.sohu.com/20120727/vrsab_ver5034904.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>十万个冷笑话</cite>
							<em></em>
						</a>
						<p>12集全</p>
					</li>
									</ul>
			</div>
						<div class="ingrep-Cont">
				<ul class="sumgroup entire clearfix">
										<li>
						<a title="蓝精灵" href="http://v.114la.com/anime/35155.html">
							<img data-original="http://v.114la.com/img/2013/09/26/sh/comic/2/42M17rF0Nx5.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>蓝精灵</cite>
							<em></em>
						</a>
						<p>82集全</p>
					</li>
										<li>
						<a title="灰姑娘动画电影" href="http://v.114la.com/anime/39091.html">
							<img data-original="http://s2.56img.com/images/index/1111/7974_d.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>灰姑娘动画电影</cite>
							<em></em>
						</a>
						<p>1集全</p>
					</li>
										<li>
						<a title="米奇和米妮" href="http://v.114la.com/anime/39088.html">
							<img data-original="http://s2.56img.com/images/index/1111/8152_d.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>米奇和米妮</cite>
							<em></em>
						</a>
						<p>1集全</p>
					</li>
										<li>
						<a title="迈达斯国王的宝藏" href="http://v.114la.com/anime/39032.html">
							<img data-original="http://i1.letvimg.com/vrs/201309/24/ac67fc5651c340049ac4f2d747a50178.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>迈达斯国王的宝藏</cite>
							<em></em>
						</a>
						<p>1集全</p>
					</li>
										<li>
						<a title="刺猬索尼克之历险记" href="http://v.114la.com/anime/39078.html">
							<img data-original="http://s2.56img.com/images/index/1111/18963_d.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>刺猬索尼克之历险记</cite>
							<em></em>
						</a>
						<p>65集全</p>
					</li>
										<li>
						<a title="歌牛之金牛钟" href="http://v.114la.com/anime/39030.html">
							<img data-original="http://i2.letvimg.com/vrs/201309/24/e670b2e6ba7f408794af6502152f65fa.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>歌牛之金牛钟</cite>
							<em></em>
						</a>
						<p>1集全</p>
					</li>
										<li>
						<a title="刺猬索尼克外传" href="http://v.114la.com/anime/39076.html">
							<img data-original="http://v.114la.com/img/2013/09/26/56/comic/6/132aaU7y656.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>刺猬索尼克外传</cite>
							<em></em>
						</a>
						<p>13集全</p>
					</li>
										<li>
						<a title="刺猬索尼克之音速三兄妹" href="http://v.114la.com/anime/39077.html">
							<img data-original="http://s2.56img.com/images/index/1111/18964_d.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>刺猬索尼克之音速三兄妹</cite>
							<em></em>
						</a>
						<p>40集全</p>
					</li>
									</ul>
			</div>
					</div>
	   		<div class="sideCont fr ingrep">
			<div class="inTitle">
				<h6><a title="动漫排行榜" href="http://v.114la.com/top/anime.html">动漫排行榜</a></h6>
				<div class="contabs">
					<ul>
						<li class="current"><a href="javascript:;">全部</a></li>
						<li><a href="javascript:;">日韩</a></li>
						<li><a href="javascript:;">国产</a></li>
					</ul>
					<a target="_blank" class="more" href="http://v.114la.com/top/anime.html">更多&gt;&gt;</a>
				</div>
			</div>
			<div style="display:block;" class="ingrep-Cont">
				<ul class="foldlist">
								<li class="hover">
					<div class="hisus">
						<a class="img" href="http://v.114la.com/anime/36551.html">
							<img alt="火影忍者" data-original="http://v.114la.com/img/2013/08/27/v61/comic/3/leZ5560c9E9.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>1</b>
						</a>
						<div class="imr">
							<h4>火影忍者</h4>
							<p>类型：</p>
							<p>十多年前一只拥有巨大威力的妖兽“九尾妖狐”袭击了木叶忍者村，当时的第四代火影拼尽全力，以自己的生命为代价将“九尾妖狐”封印在了刚出生的鸣人身上。木叶村终于恢复了平静，但村民们却把鸣人当成像“九尾妖狐”那样的怪物看待，所有人都疏远他。鸣人自小就孤苦无依，一晃十多年过去了，少年鸣人考入了木叶村的忍者学校，结识了好朋友佐助和小樱。佐助是宇智波家族的传人之一，当他还是小孩的时候他的哥哥&mdash;&mdash;一个已经拥有高超忍术的忍者将他们家族的人都杀死了，然后投靠了一直想将木叶村毁灭的大蛇丸，佐助自小就发誓要超越哥哥，为家族报仇。鸣人他们在忍者学校得到了教官卡卡西的精心指点，在他的帮助下去迎接成长中的一次又一次挑战！</p>
							<a class="p" href="http://v.114la.com/anime/36551.html">立即播放</a>
						</div>
					</div>
					<p><em>1</em><a href="http://v.114la.com/anime/36551.html">火影忍者</a><span>285181</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/anime/37642.html">
							<img alt="进击的巨人" data-original="http://v.114la.com/img/2013/08/27/v61/comic/8/254hM13r4sl.png" src="http://v.114la.com/static/images/loading.gif">
							<b>2</b>
						</a>
						<div class="imr">
							<h4>进击的巨人</h4>
							<p>类型：</p>
							<p>&#12288;&#12288;进击的巨人全集动画改编自是日本漫画家 谏山创 所著的同名漫画。2009年开始连载于月刊别册少年magazine（创刊号）的漫画。在2010年12月发售3本单行本累计发行量达到180万。进击的巨人获得“这本漫画真厉害2011 男子榜”第1位，2010『NEXTブレイク漫画ランキングBEST50』第2位。被评论为“自亚基拉以来的冲击，自烙印战士以来的绝望”。&#12288;&#12288;在最新期的《别册少年Magazine》1月号（12/8发售）的预告上，正式宣布漫画「进击的巨人」TV动画化确定！并将于2013年春（4月）放送！除「进击的巨人」TV动画化的消息外，另一部在《别册少年Magazine》连载的已宣布TV动画化的作品「恶之华」也正式确定将于明年春（4月）开播。进击的巨人全集动画海报&#12288;&#12288;进击的巨人动漫全集讲述的是悠长的历史之中,人类曾一度因被巨人捕食而崩溃。幸存下来的人们建造了一面巨大的墙壁,防止了巨人的入侵。不过,作为「和平」的代价,人类失去了到墙壁的外面去这一「自由」，主人公艾伦·耶格尔对还没见过的外面的世界抱有兴趣。在他正做着到墙壁的外面去这个梦的时候,毁坏墙壁的大巨人出现了！&#12288;&#12288;进击的巨人全集动画片人物介绍：&#12288;&#12288;艾伦·耶格尔，第104期训练兵?庾湟瞪??o.5。现为调查兵团新入生，在调查兵团王牌团员利威尔的特别作战班中。因自幼曾目睹母亲被巨人迫害，对巨人有着非同他人的愤怒。曾经被父亲注射过不明药物，使其在被巨人吃掉食时第一次巨人化，成功扭转了特罗斯特区的战况。在巨人化时会失去意识，也因此被宪兵团团长和主教在军事法庭上要求判死刑，但在调查兵团团长和士兵长利威尔的保证下以有待观察的情况下加入了调查兵团。&nbsp;&#12288;&#12288;三笠·阿克曼，第104期训练兵?庾湟瞪?氖紫?Ｏ治?鞑楸?判氯肷??苁前谧乓环?丝肆常?氚?缀桶⒚魇乔嗝分衤恚?改冈诠章羧丝诘氖录?斜簧焙Γ?招┳约阂脖环仿簟Ｒ虮挥啄曛?钡陌?拙戎?靡员Ｃ?Ｊ影?孜???娜?俊Ｎ?吮；ぐ?祝?恢弊柚顾?尤氲鞑楸?牛???雷约何薹ㄗ柚故保?龆ǜ??黄鸺尤氩⑾露ň鲂囊?；に?Ｖ灰?俏?税?祝?还苁蔷奕嘶故侨死啵??慷蓟嵘钡簟１黄兰畚?肺耷袄?囊莶摹?/p&gt;&#12288;&#12288;阿明·阿诺德，第104期训练兵?庾湟瞪?Ｏ治?鞑楸?判氯肷??氚?住⑷?易杂紫嗍叮?且?玫呐笥选Ｔ??籽勰慷霉?0M巨人的侵略袭击，因其向士兵求救而让艾伦活了下来。自幼便常被他人欺负，这时艾伦总会出来为阿明解围。是相当要好的朋友。虽然实战技术勉强及格，但在关键时刻总能想出脱困的方法，成功地运用自己的头脑，让巨人化的艾伦干掉多个巨人并将艾伦从人类的炮弹下解救下来，并且献计成功夺回特罗斯特区，让艾伦和三笠都愿意再关键时刻把性命交给他。&nbsp;</p>
							<a class="p" href="http://v.114la.com/anime/37642.html">立即播放</a>
						</div>
					</div>
					<p><em>2</em><a href="http://v.114la.com/anime/37642.html">进击的巨人</a><span>150967</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/anime/37813.html">
							<img alt="海贼王" data-original="http://images.movie.xunlei.com/100x140/546/afac16856c995f29afddd595a2b0ff15.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>3</b>
						</a>
						<div class="imr">
							<h4>海贼王</h4>
							<p>类型：励志,搞笑,冒险,...</p>
							<p>&#12288;&#12288;草帽小子路飞等人历尽各种艰难挫折，终于到达了伟大航路后半段新世界。为了确保在这片世界最强的海上航行万无一失，弗兰奇对千阳号进行整修，来帮忙的乌索普、乔巴、布鲁克三人则乘着梅利2号出海，检查其是否正常。布鲁克问起了梅利2号名字的由来，乌索普和乔巴这才意识到布鲁克并不知道梅利号的事。于是乌索普开始为布鲁克讲述起这艘曾经载着众人穿洋过海的船的传奇故事</p>
							<a class="p" href="http://v.114la.com/anime/37813.html">立即播放</a>
						</div>
					</div>
					<p><em>3</em><a href="http://v.114la.com/anime/37813.html">海贼王</a><span>117855</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/anime/17625.html">
							<img alt="尸兄" data-original="http://i3.letvimg.com/vrs/201305/20/504f4134b4ce4d698b03256d729392fe.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>4</b>
						</a>
						<div class="imr">
							<h4>尸兄</h4>
							<p>类型：动漫,搞笑,青春,...</p>
							<p>一次意外的自来水厂污染，打破了屌丝青年白小飞的平淡生活。面对前所未闻超强大尸兄，小飞 毅然踏上了寻找女友的道路。但途中困难重重，身为普通人类的小飞渐渐力不从心。在注射了从网上购买的人体强化药剂后，自身潜能逐渐爆发。过五关斩六将，打败了各式各样的变异大尸兄。变异的源头幕后黑手也渐渐显露除了其锋利的獠牙……</p>
							<a class="p" href="http://v.114la.com/anime/17625.html">立即播放</a>
						</div>
					</div>
					<p><em>4</em><a href="http://v.114la.com/anime/17625.html">尸兄</a><span>44864</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/anime/17570.html">
							<img alt="熊出没" data-original="http://v.114la.com/img/2013/07/18/qy/comic/9/6KGU2f4p349.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>5</b>
						</a>
						<div class="imr">
							<h4>熊出没</h4>
							<p>类型：动漫,搞笑,剧情,...</p>
							<p>《熊出没之丛林总动员》延续《熊出没》和《熊出没之环球大冒险》轻松搞笑的风格，讲述了两头熊&mdash;&mdash;熊大和熊二和光头强身上发生的保护森林和砍伐森林之间的搞笑斗争故事。两熊回到森林，再次见到森林里的朋友们，众人欢聚一堂，光头强追着两熊也回到旧地，双方阵营在森林里再次展开保卫家园和盗砍盗伐之间的环保大战。</p>
							<a class="p" href="http://v.114la.com/anime/17570.html">立即播放</a>
						</div>
					</div>
					<p><em>5</em><a href="http://v.114la.com/anime/17570.html">熊出没</a><span>38892</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/anime/38155.html">
							<img alt="我叫mt" data-original="http://images.movie.xunlei.com/100x140/989/d897e9f756636fade7495777a0fc743c.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>6</b>
						</a>
						<div class="imr">
							<h4>我叫mt</h4>
							<p>类型：励志,搞笑,冒险,...</p>
							<p>&#12288;&#12288;《我叫MT》是一部由七彩映画工作室出品的原创3D网络动画，被众多网友冠之以国产动画新光芒的动画剧集。该动画是以魔兽为核心的人气旺盛的同人网络动画，其原型是暴雪公司著名的网络游戏《魔兽世界》。该片是由一群游戏动漫爱好者共同打造的，其中人物包括MT、傻馒、大小姐等，清馨幽默的风格倍受魔兽玩家的推崇。</p>
							<a class="p" href="http://v.114la.com/anime/38155.html">立即播放</a>
						</div>
					</div>
					<p><em>6</em><a href="http://v.114la.com/anime/38155.html">我叫mt</a><span>36414</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/anime/38542.html">
							<img alt="死神" data-original="http://i3.letvimg.com/vrs/201309/12/1acacbfe724d4ad296983523c51a87f1.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>7</b>
						</a>
						<div class="imr">
							<h4>死神</h4>
							<p>类型：搞笑,冒险...</p>
							<p>&#12288;&#12288; &#12288;&#12288;小屁孩比利和曼蒂成功在一场与死神对抗的 limbo 游戏中使诈，因而打败了死神。之后，他们把死神留在人间成为他们的随从，逼迫死神听他们俩的话。借助死神的魔法以及超能力，控制欲强的曼蒂和她的傻傻伙伴比利在与怪物、小妖精与野兽的互动中经历了一次又一次华丽的冒险。</p>
							<a class="p" href="http://v.114la.com/anime/38542.html">立即播放</a>
						</div>
					</div>
					<p><em>7</em><a href="http://v.114la.com/anime/38542.html">死神</a><span>35403</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/anime/37568.html">
							<img alt="名侦探柯南" data-original="http://v.114la.com/img/2013/08/27/v61/comic/7/2P94D3429LT.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>8</b>
						</a>
						<div class="imr">
							<h4>名侦探柯南</h4>
							<p>类型：</p>
							<p>某天，柯南因感冒在家休息，期间接到了灰原哀的电话。原来灰原做出了APTX-4869的最新解药，虽然只是试制品，但一心恢复工藤新一身份的柯南仍然迫不及待赶往阿笠博士的实验室。服药后，新一终于回到原有状态，不过周遭的一切却似乎有所改变：博士院子里的树长高了，出现许多新的建筑物，体育老师变得苍老，班里的同学全是陌生面孔，甚至元太、光彦和步美也都变成高中生的模样。     他找到同样变成高中生的灰原，得知自己在过去的10年里不断服用解毒药导致产生抗药性，最近5年已无法变会原有状态。失落的柯南无奈看着周遭的转变，更让他倍受打击的是，小兰决定放弃杳无音讯的新一而嫁给新出老师。他们的恋情亦梦以幻，何以为终……</p>
							<a class="p" href="http://v.114la.com/anime/37568.html">立即播放</a>
						</div>
					</div>
					<p><em>8</em><a href="http://v.114la.com/anime/37568.html">名侦探柯南</a><span>26147</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/anime/35211.html">
							<img alt="妖精的尾巴" data-original="http://v.114la.com/img/2013/08/26/v61/comic/8/08Bui4456u9.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>9</b>
						</a>
						<div class="imr">
							<h4>妖精的尾巴</h4>
							<p>类型：</p>
							<p>OAD 01：妖精的尾巴 总集篇
OAD 02：欢迎来到 Fairy Hills!!
OAD 03：妖精学园 不良少年与大姐头
OAD 04：Memory Days</p>
							<a class="p" href="http://v.114la.com/anime/35211.html">立即播放</a>
						</div>
					</div>
					<p><em>9</em><a href="http://v.114la.com/anime/35211.html">妖精的尾巴</a><span>20403</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/anime/37107.html">
							<img alt="十万个冷笑话" data-original="http://v.114la.com/img/2013/08/27/v61/comic/5/F99V164xcH5.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>10</b>
						</a>
						<div class="imr">
							<h4>十万个冷笑话</h4>
							<p>类型：</p>
							<p>&#12288;&#12288;十万个冷笑话粤语版全集原作是一部连载于有妖气原创漫画梦工厂的国产漫画，由一系列吐槽短篇组成，短篇之间目前看似没关系，但关系又非常微妙，语言也十分符合网民需求，被誉为“中国版的日和”。十万个冷笑话粤语版全集图片</p>
							<a class="p" href="http://v.114la.com/anime/37107.html">立即播放</a>
						</div>
					</div>
					<p><em>10</em><a href="http://v.114la.com/anime/37107.html">十万个冷笑话</a><span>19309</span></p>
				</li>
									
				</ul>
			</div>
			<div class="ingrep-Cont">
				<ul class="foldlist">
									<li class="hover">
					<div class="hisus">
						<a class="img" href="http://v.114la.com/anime/36551.html">
							<img alt="火影忍者" data-original="http://v.114la.com/img/2013/08/27/v61/comic/3/leZ5560c9E9.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>1</b>
						</a>
						<div class="imr">
							<h4>火影忍者</h4>
							<p>类型：</p>
							<p>十多年前一只拥有巨大威力的妖兽“九尾妖狐”袭击了木叶忍者村，当时的第四代火影拼尽全力，以自己的生命为代价将“九尾妖狐”封印在了刚出生的鸣人身上。木叶村终于恢复了平静，但村民们却把鸣人当成像“九尾妖狐”那样的怪物看待，所有人都疏远他。鸣人自小就孤苦无依，一晃十多年过去了，少年鸣人考入了木叶村的忍者学校，结识了好朋友佐助和小樱。佐助是宇智波家族的传人之一，当他还是小孩的时候他的哥哥&mdash;&mdash;一个已经拥有高超忍术的忍者将他们家族的人都杀死了，然后投靠了一直想将木叶村毁灭的大蛇丸，佐助自小就发誓要超越哥哥，为家族报仇。鸣人他们在忍者学校得到了教官卡卡西的精心指点，在他的帮助下去迎接成长中的一次又一次挑战！</p>
							<a class="p" href="http://v.114la.com/anime/36551.html">立即播放</a>
						</div>
					</div>
					<p><em>1</em><a href="http://v.114la.com/anime/36551.html">火影忍者</a><span>285181</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/anime/37642.html">
							<img alt="进击的巨人" data-original="http://v.114la.com/img/2013/08/27/v61/comic/8/254hM13r4sl.png" src="http://v.114la.com/static/images/loading.gif">
							<b>2</b>
						</a>
						<div class="imr">
							<h4>进击的巨人</h4>
							<p>类型：</p>
							<p>&#12288;&#12288;进击的巨人全集动画改编自是日本漫画家 谏山创 所著的同名漫画。2009年开始连载于月刊别册少年magazine（创刊号）的漫画。在2010年12月发售3本单行本累计发行量达到180万。进击的巨人获得“这本漫画真厉害2011 男子榜”第1位，2010『NEXTブレイク漫画ランキングBEST50』第2位。被评论为“自亚基拉以来的冲击，自烙印战士以来的绝望”。&#12288;&#12288;在最新期的《别册少年Magazine》1月号（12/8发售）的预告上，正式宣布漫画「进击的巨人」TV动画化确定！并将于2013年春（4月）放送！除「进击的巨人」TV动画化的消息外，另一部在《别册少年Magazine》连载的已宣布TV动画化的作品「恶之华」也正式确定将于明年春（4月）开播。进击的巨人全集动画海报&#12288;&#12288;进击的巨人动漫全集讲述的是悠长的历史之中,人类曾一度因被巨人捕食而崩溃。幸存下来的人们建造了一面巨大的墙壁,防止了巨人的入侵。不过,作为「和平」的代价,人类失去了到墙壁的外面去这一「自由」，主人公艾伦·耶格尔对还没见过的外面的世界抱有兴趣。在他正做着到墙壁的外面去这个梦的时候,毁坏墙壁的大巨人出现了！&#12288;&#12288;进击的巨人全集动画片人物介绍：&#12288;&#12288;艾伦·耶格尔，第104期训练兵?庾湟瞪??o.5。现为调查兵团新入生，在调查兵团王牌团员利威尔的特别作战班中。因自幼曾目睹母亲被巨人迫害，对巨人有着非同他人的愤怒。曾经被父亲注射过不明药物，使其在被巨人吃掉食时第一次巨人化，成功扭转了特罗斯特区的战况。在巨人化时会失去意识，也因此被宪兵团团长和主教在军事法庭上要求判死刑，但在调查兵团团长和士兵长利威尔的保证下以有待观察的情况下加入了调查兵团。&nbsp;&#12288;&#12288;三笠·阿克曼，第104期训练兵?庾湟瞪?氖紫?Ｏ治?鞑楸?判氯肷??苁前谧乓环?丝肆常?氚?缀桶⒚魇乔嗝分衤恚?改冈诠章羧丝诘氖录?斜簧焙Γ?招┳约阂脖环仿簟Ｒ虮挥啄曛?钡陌?拙戎?靡员Ｃ?Ｊ影?孜???娜?俊Ｎ?吮；ぐ?祝?恢弊柚顾?尤氲鞑楸?牛???雷约何薹ㄗ柚故保?龆ǜ??黄鸺尤氩⑾露ň鲂囊?；に?Ｖ灰?俏?税?祝?还苁蔷奕嘶故侨死啵??慷蓟嵘钡簟１黄兰畚?肺耷袄?囊莶摹?/p&gt;&#12288;&#12288;阿明·阿诺德，第104期训练兵?庾湟瞪?Ｏ治?鞑楸?判氯肷??氚?住⑷?易杂紫嗍叮?且?玫呐笥选Ｔ??籽勰慷霉?0M巨人的侵略袭击，因其向士兵求救而让艾伦活了下来。自幼便常被他人欺负，这时艾伦总会出来为阿明解围。是相当要好的朋友。虽然实战技术勉强及格，但在关键时刻总能想出脱困的方法，成功地运用自己的头脑，让巨人化的艾伦干掉多个巨人并将艾伦从人类的炮弹下解救下来，并且献计成功夺回特罗斯特区，让艾伦和三笠都愿意再关键时刻把性命交给他。&nbsp;</p>
							<a class="p" href="http://v.114la.com/anime/37642.html">立即播放</a>
						</div>
					</div>
					<p><em>2</em><a href="http://v.114la.com/anime/37642.html">进击的巨人</a><span>150967</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/anime/37813.html">
							<img alt="海贼王" data-original="http://images.movie.xunlei.com/100x140/546/afac16856c995f29afddd595a2b0ff15.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>3</b>
						</a>
						<div class="imr">
							<h4>海贼王</h4>
							<p>类型：励志,搞笑,冒险,...</p>
							<p>&#12288;&#12288;草帽小子路飞等人历尽各种艰难挫折，终于到达了伟大航路后半段新世界。为了确保在这片世界最强的海上航行万无一失，弗兰奇对千阳号进行整修，来帮忙的乌索普、乔巴、布鲁克三人则乘着梅利2号出海，检查其是否正常。布鲁克问起了梅利2号名字的由来，乌索普和乔巴这才意识到布鲁克并不知道梅利号的事。于是乌索普开始为布鲁克讲述起这艘曾经载着众人穿洋过海的船的传奇故事</p>
							<a class="p" href="http://v.114la.com/anime/37813.html">立即播放</a>
						</div>
					</div>
					<p><em>3</em><a href="http://v.114la.com/anime/37813.html">海贼王</a><span>117855</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/anime/38542.html">
							<img alt="死神" data-original="http://i3.letvimg.com/vrs/201309/12/1acacbfe724d4ad296983523c51a87f1.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>4</b>
						</a>
						<div class="imr">
							<h4>死神</h4>
							<p>类型：搞笑,冒险...</p>
							<p>&#12288;&#12288; &#12288;&#12288;小屁孩比利和曼蒂成功在一场与死神对抗的 limbo 游戏中使诈，因而打败了死神。之后，他们把死神留在人间成为他们的随从，逼迫死神听他们俩的话。借助死神的魔法以及超能力，控制欲强的曼蒂和她的傻傻伙伴比利在与怪物、小妖精与野兽的互动中经历了一次又一次华丽的冒险。</p>
							<a class="p" href="http://v.114la.com/anime/38542.html">立即播放</a>
						</div>
					</div>
					<p><em>4</em><a href="http://v.114la.com/anime/38542.html">死神</a><span>35403</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/anime/37568.html">
							<img alt="名侦探柯南" data-original="http://v.114la.com/img/2013/08/27/v61/comic/7/2P94D3429LT.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>5</b>
						</a>
						<div class="imr">
							<h4>名侦探柯南</h4>
							<p>类型：</p>
							<p>某天，柯南因感冒在家休息，期间接到了灰原哀的电话。原来灰原做出了APTX-4869的最新解药，虽然只是试制品，但一心恢复工藤新一身份的柯南仍然迫不及待赶往阿笠博士的实验室。服药后，新一终于回到原有状态，不过周遭的一切却似乎有所改变：博士院子里的树长高了，出现许多新的建筑物，体育老师变得苍老，班里的同学全是陌生面孔，甚至元太、光彦和步美也都变成高中生的模样。     他找到同样变成高中生的灰原，得知自己在过去的10年里不断服用解毒药导致产生抗药性，最近5年已无法变会原有状态。失落的柯南无奈看着周遭的转变，更让他倍受打击的是，小兰决定放弃杳无音讯的新一而嫁给新出老师。他们的恋情亦梦以幻，何以为终……</p>
							<a class="p" href="http://v.114la.com/anime/37568.html">立即播放</a>
						</div>
					</div>
					<p><em>5</em><a href="http://v.114la.com/anime/37568.html">名侦探柯南</a><span>26147</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/anime/35211.html">
							<img alt="妖精的尾巴" data-original="http://v.114la.com/img/2013/08/26/v61/comic/8/08Bui4456u9.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>6</b>
						</a>
						<div class="imr">
							<h4>妖精的尾巴</h4>
							<p>类型：</p>
							<p>OAD 01：妖精的尾巴 总集篇
OAD 02：欢迎来到 Fairy Hills!!
OAD 03：妖精学园 不良少年与大姐头
OAD 04：Memory Days</p>
							<a class="p" href="http://v.114la.com/anime/35211.html">立即播放</a>
						</div>
					</div>
					<p><em>6</em><a href="http://v.114la.com/anime/35211.html">妖精的尾巴</a><span>20403</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/anime/37724.html">
							<img alt="全职猎人" data-original="http://v.114la.com/img/2013/08/27/v61/comic/5/8w9L7v319DA.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>7</b>
						</a>
						<div class="imr">
							<h4>全职猎人</h4>
							<p>类型：</p>
							<p>全职猎人剧场版最后的任务全集动画预定2013年12月27日在日本上映&#12288;&#12288;全职猎人剧场版最后的任务全集动画全名全职猎人剧场版THE LAST MISSION，是全职猎人第二部剧场版动画，剧情大概仍是描写猎人协会的同人剧情（不能指望懒到死的富坚义博会写剧场版剧本）。监督是川口敬一郎，脚本是岸间信明。全职猎人剧场版最后的任务全集动画海报&#12288;&#12288;全职猎人全集动画讲述主人公小杰自小在鲸鱼岛长大，与米特阿姨和阿婆相依为命。性格开朗的他，有着能与动物沟通的灵性。因为无父无母，小杰将米特阿姨当作自己的生母爱着。直到9岁那一年，小杰在森林里被一个青年男子搭救。从他口中小杰得知自己的父亲还活着且职业是猎人。全职猎人剧场版最后的任务全集动画海报</p>
							<a class="p" href="http://v.114la.com/anime/37724.html">立即播放</a>
						</div>
					</div>
					<p><em>7</em><a href="http://v.114la.com/anime/37724.html">全职猎人</a><span>17323</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/anime/36856.html">
							<img alt="只有神知道的世界" data-original="http://v.114la.com/img/2013/08/27/v61/comic/7/6FM2F29M0z8.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>8</b>
						</a>
						<div class="imr">
							<h4>只有神知道的世界</h4>
							<p>类型：</p>
							<p>只有神知道的世界第三季全集动画改编自若木民喜在《周刊少年 Sunday》上2008年19号开始进行连载的爱情喜剧同名漫画作品，是《只有神知道的世界》系列动画作品的第三季。
只有神知道的世界第三季全集动画讲述的是就读于舞岛学园高中部的桂木桂马是个喜欢恋爱养成游戏（Galgame）的高中生。曾经成功攻略过10000名女生（游戏中），有着能够攻略任何类型女性的能力，是拥有一切galgame攻略的网站“落とし神”的管理者，以高超的技术被广大机友尊称为“落とし神”（攻略之神、攻陷之神）。
&#12288;&#12288;某日，一名少女从天而降来到他的面前。这名少女名叫艾露西，从地狱远道而来的她委托桂马为她捕获“驱魂”(驱け魂)的协力者。方法是使被附身的人类恋爱，填补她的心灵缝隙，从而把因在心里无处容身而逃出来的驱魂捕获。对现实生活中的女孩退避三舍的桂马自然毫不犹豫的拒绝了艾露西的要求，但是由于和艾露西结成的契约危及生命，所以他不得不心不甘情不愿的承诺帮忙。于是，GAL界的“攻略之神”桂木桂马终于以三次元世界的女生发动了攻略。
&#12288;&#12288;只有神知道的世界第三季全集人物简介：
&#12288;&#12288;桂木桂马，人称攻略之神的Galgame达人高中生。开始时已攻下第10000名女主角，玩的游戏接近5000部。绝招（攻略之神模式）是同时攻略6部游戏，极限是同时攻略24部ADV游戏。一直上课玩游戏，可是学习很好，基本全科满分，但是有一次因为那些被攻略对象因而得过一次99分。同学都称他为“眼镜宅”（オタメガネ）。
&#12288;&#12288;艾露西，本作女主角，来到桂马家后自称叫做桂木艾露西，桂马妈妈对她昵称“小艾露”(エルちゃん)。地狱的冥界法治省极东支局的“驱魂队”其中一个恶魔，自己有一个姐姐貌似十分优秀。在进入驱魂队之前当了300年的地狱扫除人员，现在也仅是三等公务恶魔。头上戴有骷髅的发饰，这个发饰也是驱魂探测器。
&#12288;&#12288;白娅，和艾鲁西是同学，以第一名的成绩毕业，手上拿的大镰刀是学年第一名毕业的象征“证明之镰”。在学生时代经常帮艾鲁西，而艾鲁西也相当尊敬她。经常教训不成器的艾鲁西，但其实两人是好友。飞机场，桂马曾说过他的身材都比她好。
&#12288;&#12288;鲇川天理，女主角之一，性格内向不善表达，总是玩噼啪噼啪。已知关系好的朋友只有榛原七香，特技是变魔术。10年前住在桂马家的斜侧，不过由于地震倒塌，搬到了远方。现在又搬到了桂马隔壁的家（因为艾露西的某件事使得桂马家隔壁的人搬走了）。</p>
							<a class="p" href="http://v.114la.com/anime/36856.html">立即播放</a>
						</div>
					</div>
					<p><em>8</em><a href="http://v.114la.com/anime/36856.html">只有神知道的世界</a><span>15115</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/anime/52414.html">
							<img alt="蜡笔小新" data-original="http://img36.pplive.cn/2008/11/01/16482248041_230X306.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>9</b>
						</a>
						<div class="imr">
							<h4>蜡笔小新</h4>
							<p>类型：亲子,搞笑...</p>
							<p>小新是一个年仅５岁，正在幼儿园上学的小男孩。他家住在春日市的市郊，最初小新与父亲广志和母亲美冴组成一个三人家族。随后又添加了流浪狗小白，随着故事展开，又加入了新的成员妹妹野原葵（漫画版：野原向日葵）。在最新的故事里，美冴的妹妹小山梦冴住到了野原家（不过找到工作后又离开了）。作者臼井仪人从日常生活中的故事取材，叙述小新在日常生活中所发生的事情。小新是一个有点调皮的小孩，他喜欢别出心裁，富于幻想。</p>
							<a class="p" href="http://v.114la.com/anime/52414.html">立即播放</a>
						</div>
					</div>
					<p><em>9</em><a href="http://v.114la.com/anime/52414.html">蜡笔小新</a><span>14888</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/anime/36460.html">
							<img alt="银魂" data-original="http://v.114la.com/img/2013/08/27/v61/comic/2/91x2P1mi452.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>10</b>
						</a>
						<div class="imr">
							<h4>银魂</h4>
							<p>类型：</p>
							<p>&#12288;&#12288;江户时代末期（本作的20年前），被称为“天人”（あまんと）的谜之异星人来袭。于是地球人与天人之间的战争瞬即爆发，为数众多的武士和攘夷派志士都参与与天人的战斗。幕府见识到天人强大的实力后，最终向天人低头，放弃武士不管，擅自与天人签订不平等条约，准许他们入国。其后更颁布了“废刀令”，夺走了武士的刀，使他们无力反抗。自此，天人横行霸道，幕府为天人所影响，甚至被控制，成为了“傀儡政权”。在这样的时代，有一个落魄，但是却一直贯彻自己武士道的男人与同伴的生活的故事。也有人称万事屋银魂的诞生源于作者和编辑的一次激烈争执，编辑希望空知英秋搭上时下热门题材“幕末新撰组”的顺风车，但空知英秋却一心想画幻想漫画，在争执不下的情况下，空知英秋终于爆发了，大喊：“那就他妈的让新撰组和外星人对打吧！”&mdash;&mdash;于是《银魂》就诞生了。坂田银时所经营的万事屋。号称做万事其实万事不做的“事务所”。天人掌权后武士没落，身为武士的银时为了维生而建立万事屋，接受他人的请求；只要付钱，什么工作都会做（前提是不违背他的武士道）。</p>
							<a class="p" href="http://v.114la.com/anime/36460.html">立即播放</a>
						</div>
					</div>
					<p><em>10</em><a href="http://v.114la.com/anime/36460.html">银魂</a><span>11751</span></p>
				</li>
								</ul>
			</div>
			<div class="ingrep-Cont">
				<ul class="foldlist">
								<li class="hover">
					<div class="hisus">
						<a class="img" href="http://v.114la.com/anime/17625.html">
							<img alt="尸兄" data-original="http://i3.letvimg.com/vrs/201305/20/504f4134b4ce4d698b03256d729392fe.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>1</b>
						</a>
						<div class="imr">
							<h4>尸兄</h4>
							<p>类型：动漫,搞笑,青春,...</p>
							<p>一次意外的自来水厂污染，打破了屌丝青年白小飞的平淡生活。面对前所未闻超强大尸兄，小飞 毅然踏上了寻找女友的道路。但途中困难重重，身为普通人类的小飞渐渐力不从心。在注射了从网上购买的人体强化药剂后，自身潜能逐渐爆发。过五关斩六将，打败了各式各样的变异大尸兄。变异的源头幕后黑手也渐渐显露除了其锋利的獠牙……</p>
							<a class="p" href="http://v.114la.com/anime/17625.html">立即播放</a>
						</div>
					</div>
					<p><em>1</em><a href="http://v.114la.com/anime/17625.html">尸兄</a><span>44864</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/anime/17570.html">
							<img alt="熊出没" data-original="http://v.114la.com/img/2013/07/18/qy/comic/9/6KGU2f4p349.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>2</b>
						</a>
						<div class="imr">
							<h4>熊出没</h4>
							<p>类型：动漫,搞笑,剧情,...</p>
							<p>《熊出没之丛林总动员》延续《熊出没》和《熊出没之环球大冒险》轻松搞笑的风格，讲述了两头熊&mdash;&mdash;熊大和熊二和光头强身上发生的保护森林和砍伐森林之间的搞笑斗争故事。两熊回到森林，再次见到森林里的朋友们，众人欢聚一堂，光头强追着两熊也回到旧地，双方阵营在森林里再次展开保卫家园和盗砍盗伐之间的环保大战。</p>
							<a class="p" href="http://v.114la.com/anime/17570.html">立即播放</a>
						</div>
					</div>
					<p><em>2</em><a href="http://v.114la.com/anime/17570.html">熊出没</a><span>38892</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/anime/37107.html">
							<img alt="十万个冷笑话" data-original="http://v.114la.com/img/2013/08/27/v61/comic/5/F99V164xcH5.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>3</b>
						</a>
						<div class="imr">
							<h4>十万个冷笑话</h4>
							<p>类型：</p>
							<p>&#12288;&#12288;十万个冷笑话粤语版全集原作是一部连载于有妖气原创漫画梦工厂的国产漫画，由一系列吐槽短篇组成，短篇之间目前看似没关系，但关系又非常微妙，语言也十分符合网民需求，被誉为“中国版的日和”。十万个冷笑话粤语版全集图片</p>
							<a class="p" href="http://v.114la.com/anime/37107.html">立即播放</a>
						</div>
					</div>
					<p><em>3</em><a href="http://v.114la.com/anime/37107.html">十万个冷笑话</a><span>19309</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/anime/39516.html">
							<img alt="喜羊羊与灰太狼" data-original="http://v.114la.com/img/2013/09/09/ct/comic/7/ud105r06uz7.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>4</b>
						</a>
						<div class="imr">
							<h4>喜羊羊与灰太狼</h4>
							<p>类型：喜羊羊与灰太狼之给...</p>
							<p>新一年青青草原迎来很多变化,小灰灰长大了，却整天在家里面捣乱。为了让小灰灰能成为一只真正的狼，灰太狼送他去上学了。懒羊羊也有改变，某天他在苹果树下睡大觉，树上突然掉下一个苹果……

</p>
							<a class="p" href="http://v.114la.com/anime/39516.html">立即播放</a>
						</div>
					</div>
					<p><em>4</em><a href="http://v.114la.com/anime/39516.html">喜羊羊与灰太狼</a><span>13665</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/anime/37251.html">
							<img alt="贝瓦儿歌" data-original="http://v.114la.com/img/2013/08/27/v61/comic/7/0iL4m6p93e9.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>5</b>
						</a>
						<div class="imr">
							<h4>贝瓦儿歌</h4>
							<p>类型：</p>
							<p>贝瓦儿歌是贝瓦网旗下的产品。它是集儿童歌谣、经典儿歌、三字经、古诗为一体的儿歌汇合，具有动画精美、节奏欢快、语言简单、易学易懂等特点，深受广大小朋友和家长的喜爱...</p>
							<a class="p" href="http://v.114la.com/anime/37251.html">立即播放</a>
						</div>
					</div>
					<p><em>5</em><a href="http://v.114la.com/anime/37251.html">贝瓦儿歌</a><span>9944</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/anime/35137.html">
							<img alt="秦时明月之万里长城" data-original="http://v.114la.com/img/2013/08/26/v61/comic/7/F55Y1A4E056.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>6</b>
						</a>
						<div class="imr">
							<h4>秦时明月之万里长城</h4>
							<p>类型：</p>
							<p>自从机关城崩塌，墨家抵抗势力几乎被全部清除。秦帝国又回到太平盛世的迷梦中……n      咸阳宫中的嬴政一边动用无数劳工营造万里长城，一边进行着一些更为精密的计划。现在这个计划已经接近完成，由阴阳家协助完成的巨艇“蜃楼”已经建造完毕。它壮丽精绝的身姿浮现海平面彼端，宛如人人梦想中的海上仙山。为了解开巨艇“蜃楼”的疑团，各家各派势力慢慢汇聚到这座平静的海边小城。此时，故事主角天明和少羽为了避开秦兵追捕，正在儒家庄园学习和生活。而接下来各种奇异事件在此地发生，小城的平静也被完全打破。 &#12288;&#12288;所有的生死仇，家国恨，都将在那个时刻凝结。所有人的目光，都将在那个地点汇聚！n &#12288; 芸芸众生不过是一块块城砖，用来铸造帝国的万里长城。</p>
							<a class="p" href="http://v.114la.com/anime/35137.html">立即播放</a>
						</div>
					</div>
					<p><em>6</em><a href="http://v.114la.com/anime/35137.html">秦时明月之万里长城</a><span>8089</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/anime/2585.html">
							<img alt="熊出没之过年" data-original="http://v.114la.com/img/2013/07/19/qy/comic/6/824hJx69u97.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>7</b>
						</a>
						<div class="imr">
							<h4>熊出没之过年</h4>
							<p>类型：亲子,益智,搞笑,...</p>
							<p>春节前夕，没钱回家的光头强不得不努力给李老板砍树来赚取回家的车票。因此，光头强与保护丛林的熊大、熊二继续展开斗争。熊兄弟胜利后，却被光头强不能和家人相聚的悲伤所感动，于是它们想尽办法帮助光头强回家，默默地在暗中协助光头强，即使被光头强误解成绑架也无怨无悔。历经波折，光头强终于在新年与家人团聚了。</p>
							<a class="p" href="http://v.114la.com/anime/2585.html">立即播放</a>
						</div>
					</div>
					<p><em>7</em><a href="http://v.114la.com/anime/2585.html">熊出没之过年</a><span>6905</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/anime/37539.html">
							<img alt="啦啦啦德玛西亚" data-original="http://v.114la.com/img/2013/08/27/v61/comic/4/8u0u6M3eT78.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>8</b>
						</a>
						<div class="imr">
							<h4>啦啦啦德玛西亚</h4>
							<p>类型：</p>
							<p>《啦啦啦德玛西亚》是根据目前炙手可热的英雄对战网游《英雄联盟》为故事背景，剧本取材于玩家在游戏中各种喜闻乐见的游戏文化，以幽默、轻松、搞笑的故事风格，真实还原英雄联盟的玩家在游戏中的乐趣和对战生活。</p>
							<a class="p" href="http://v.114la.com/anime/37539.html">立即播放</a>
						</div>
					</div>
					<p><em>8</em><a href="http://v.114la.com/anime/37539.html">啦啦啦德玛西亚</a><span>6241</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/anime/37584.html">
							<img alt="铠甲勇士" data-original="http://v.114la.com/img/2013/08/27/v61/comic/4/0T7316HR741.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>9</b>
						</a>
						<div class="imr">
							<h4>铠甲勇士</h4>
							<p>类型：</p>
							<p>五千年前，宇宙的最大黑暗势力-暗影大帝对太阳系有着旺盛生命体的地球发动侵略，并派出了暗影五行魔率领了50个魔灵石（魔灵石能与地球上的生命结合为暗影异能兽）来到了地球，暗影五行魔当时选中了有着高度文明的古中国作为首要毁灭的对象，太阳系的守护者-太阳星，为了预防地球被暗影势力所吞噬毁灭，于是向古中国发射了五颗光影石，这五颗光影石分别能与形成地球万物的五行元素结合，形成五套能在光和影中穿梭战斗的铠甲-光影铠甲，而能召唤这些光影铠甲的人，就是当初这五颗光影石分别落地的五个村落中的人们，不管时代的变迁，只要这些村人遗传的血液仍在，他们就能透过光影石的力量，召唤光影铠甲来执行与暗影集团的神圣战斗!</p>
							<a class="p" href="http://v.114la.com/anime/37584.html">立即播放</a>
						</div>
					</div>
					<p><em>9</em><a href="http://v.114la.com/anime/37584.html">铠甲勇士</a><span>5741</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/anime/35063.html">
							<img alt="偷星九月天" data-original="http://v.114la.com/img/2013/08/26/v61/comic/7/0t45apw6F86.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>10</b>
						</a>
						<div class="imr">
							<h4>偷星九月天</h4>
							<p>类型：</p>
							<p>《偷星九月天》是在《知音漫客》连载的大人气国产漫画，作者为新生代漫画创作者周洪滨、小松等人。讲述了主人公琉星追逐大盗九天月的过程发生的离奇故事，作品被誉为时尚轻小说与唯美青春漫画的完美结合。</p>
							<a class="p" href="http://v.114la.com/anime/35063.html">立即播放</a>
						</div>
					</div>
					<p><em>10</em><a href="http://v.114la.com/anime/35063.html">偷星九月天</a><span>5661</span></p>
				</li>
								</ul>
			</div>			
		</div>
	</div>
	<div class="comwrap clearfix">
							   		<div class="leftSide fl ingrep">
			<dl class="inTitle">
				<dt>综艺节目</dt>
				<dd class="contabs">
					<ul>
						<li class="current"><a href="javascript:;">最热</a></li>
												<li><a href="javascript:;">时尚</a></li>
												<li><a href="javascript:;">选秀</a></li>
												<li><a href="javascript:;">综艺</a></li>
												<li><a href="javascript:;">访谈</a></li>
											</ul>
					<a class="more" href="http://v.114la.com/zongyi/">更多&gt;&gt;</a>
				</dd>
			</dl>
						<div style="display:block;" class="ingrep-Cont">
				<div class="clearfix rowleft">
										<div class="bgsummar fl">
						<a title="康熙来了" href="http://v.114la.com/zongyi/18337.html">
							<img alt="康熙来了" data-original="http://v.114la.com/img/focus_img/201309/137999069051034.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>
								<strong>康熙来了</strong>
								最新20130925期
							</cite>
						</a>
						<p>康熙来了20130424，人人都向往演艺界的工作，一般人看似简单唱唱跳跳，可是台上十分钟，台下十年功，想在演艺界成功立足说、学、逗、唱，可是要样样通，但是在光鲜亮丽的背后，又...<em></em></p>
					</div>
										<ul class="sumgroup fr clearfix">
												<li class="">
							<a title="天天向上" href="http://v.114la.com/zongyi/18328.html">
								<img alt="天天向上" data-original="http://v.114la.com/img/focus_img/201309/137991698395075.jpg" src="http://v.114la.com/static/images/loading.gif">
								<cite>天天向上</cite>
								<em></em>
							</a>
							<p>最新20130920期</p>
						</li>
												<li class="">
							<a title="Running Man" href="http://v.114la.com/zongyi/18385.html">
								<img alt="Running Man" data-original="http://v.114la.com/img/focus_img/201309/137811298311153.jpg" src="http://v.114la.com/static/images/loading.gif">
								<cite>Running Man</cite>
								<em></em>
							</a>
							<p>最新20130922期</p>
						</li>
												<li class="">
							<a title="非常完美" href="http://v.114la.com/zongyi/18407.html">
								<img alt="非常完美" data-original="http://v.114la.com/img/focus_img/201309/137886852185076.jpg" src="http://v.114la.com/static/images/loading.gif">
								<cite>非常完美</cite>
								<em></em>
							</a>
							<p>最新20130922期</p>
						</li>
												<li class="">
							<a title="非诚勿扰" href="http://v.114la.com/zongyi/18322.html">
								<img alt="非诚勿扰" data-original="http://v.114la.com/img/focus_img/201309/137990530722355.jpg" src="http://v.114la.com/static/images/loading.gif">
								<cite>非诚勿扰</cite>
								<em></em>
							</a>
							<p>最新20130922期</p>
						</li>
												<li class="">
							<a title="武林风" href="http://v.114la.com/zongyi/18367.html">
								<img alt="武林风" data-original="http://v.114la.com/img/focus_img/201309/137990585882447.jpg" src="http://v.114la.com/static/images/loading.gif">
								<cite>武林风</cite>
								<em></em>
							</a>
							<p>最新20130925期</p>
						</li>
												<li class="">
							<a title="中国梦之声" href="http://v.114la.com/zongyi/18329.html">
								<img alt="中国梦之声" data-original="http://v.114la.com/img/focus_img/201308/137784283379662.jpg" src="http://v.114la.com/static/images/loading.gif">
								<cite>中国梦之声</cite>
								<em></em>
							</a>
							<p>最新20130825期</p>
						</li>
											</ul>
				</div>
			</div>
									<div class="ingrep-Cont">
				<ul class="sumgroup entire clearfix">
										<li>
						<a title="健康相对论" href="http://v.114la.com/zongyi/18341.html">
							<img data-original="http://v.114la.com/img/2013/07/18/qy/variety/3/1sIo0Zl8899.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>健康相对论</cite>
							<em></em>
						</a>
						<p>最新20130925期</p>
					</li>
										<li>
						<a title="最耀B" href="http://v.114la.com/zongyi/39103.html">
							<img data-original="http://s2.56img.com/images/index/1111/21864_d.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>最耀B</cite>
							<em></em>
						</a>
						<p>最新20130920期</p>
					</li>
										<li>
						<a title="湖南卫视给力2011跨年演唱会" href="http://v.114la.com/zongyi/18432.html">
							<img data-original="http://v.114la.com/img/2013/07/18/qy/variety/7/Mu825ZE954h.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>湖南卫视给力2011跨年演唱会</cite>
							<em></em>
						</a>
						<p>最新20110101期</p>
					</li>
										<li>
						<a title="帕帕帮" href="http://v.114la.com/zongyi/18420.html">
							<img data-original="http://pic0.qiyipic.com/thumb/20130909/a615407u4.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>帕帕帮</cite>
							<em></em>
						</a>
						<p>最新20130923期</p>
					</li>
										<li>
						<a title="China艺术客" href="http://v.114la.com/zongyi/52866.html">
							<img data-original="http://s2.56img.com/images/index/1111/22125_d.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>China艺术客</cite>
							<em></em>
						</a>
						<p>最新20130924期</p>
					</li>
										<li>
						<a title="宅女食验室" href="http://v.114la.com/zongyi/39110.html">
							<img data-original="http://s2.56img.com/images/index/1111/21212_d.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>宅女食验室</cite>
							<em></em>
						</a>
						<p>最新20130918期</p>
					</li>
										<li>
						<a title="健康肌础" href="http://v.114la.com/zongyi/18497.html">
							<img data-original="http://v.114la.com/img/2013/07/18/qy/variety/10/530E29J5kyC.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>健康肌础</cite>
							<em></em>
						</a>
						<p>最新20130919期</p>
					</li>
										<li>
						<a title="黑龙江卫视美丽俏佳人" href="http://v.114la.com/zongyi/18624.html">
							<img data-original="http://v.114la.com/img/2013/07/18/qy/variety/6/4K6NE45612Q.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>黑龙江卫视美丽俏佳人</cite>
							<em></em>
						</a>
						<p>最新20130925期</p>
					</li>
									</ul>
			</div>
						<div class="ingrep-Cont">
				<ul class="sumgroup entire clearfix">
										<li>
						<a title="中国梦之声" href="http://v.114la.com/zongyi/18329.html">
							<img data-original="http://v.114la.com/img/2013/08/02/pp/variety/7/11IiQ372F70.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>中国梦之声</cite>
							<em></em>
						</a>
						<p>最新20130825期</p>
					</li>
										<li>
						<a title="快乐男声2013" href="http://v.114la.com/zongyi/18335.html">
							<img data-original="http://pic5.qiyipic.com/image/20130920/v_100242253_m_601_m1.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>快乐男声2013</cite>
							<em></em>
						</a>
						<p>最新20130920期</p>
					</li>
										<li>
						<a title="好声音后传之酷我真声音" href="http://v.114la.com/zongyi/18314.html">
							<img data-original="http://v.114la.com/img/2013/07/18/qy/variety/6/B6Vn885152I.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>好声音后传之酷我真声音</cite>
							<em></em>
						</a>
						<p>最新20120930期</p>
					</li>
										<li>
						<a title="快乐女声" href="http://v.114la.com/zongyi/18316.html">
							<img data-original="http://v.114la.com/img/2013/07/18/qy/variety/7/23Hm89P5g3w.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>快乐女声</cite>
							<em></em>
						</a>
						<p>最新20110916期</p>
					</li>
										<li>
						<a title="我是歌手" href="http://v.114la.com/zongyi/18318.html">
							<img data-original="http://v.114la.com/img/2013/07/18/qy/variety/7/1g30zD6420s.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>我是歌手</cite>
							<em></em>
						</a>
						<p>最新20130412期</p>
					</li>
										<li>
						<a title="中国达人秀第3季" href="http://v.114la.com/zongyi/18333.html">
							<img data-original="http://v.114la.com/img/2013/07/18/qy/variety/1/56SV7vg08K1.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>中国达人秀第3季</cite>
							<em></em>
						</a>
						<p>最新20120121期</p>
					</li>
										<li>
						<a title="一声所爱大地飞歌" href="http://v.114la.com/zongyi/18686.html">
							<img data-original="http://v.114la.com/img/2013/07/18/qy/variety/3/a5312vi534G.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>一声所爱大地飞歌</cite>
							<em></em>
						</a>
						<p>最新20130821期</p>
					</li>
										<li>
						<a title="非你莫属" href="http://v.114la.com/zongyi/18372.html">
							<img data-original="http://v.114la.com/img/2013/07/18/qy/variety/7/8TO2M21L26G.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>非你莫属</cite>
							<em></em>
						</a>
						<p>最新20130923期</p>
					</li>
									</ul>
			</div>
						<div class="ingrep-Cont">
				<ul class="sumgroup entire clearfix">
										<li>
						<a title="爸爸我们去哪儿" href="http://v.114la.com/zongyi/28730.html">
							<img data-original="http://pic5.qiyipic.com/image/20130915/v_100184987_m_601_m1.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>爸爸我们去哪儿</cite>
							<em></em>
						</a>
						<p>最新20130922期</p>
					</li>
										<li>
						<a title="中国梦之声" href="http://v.114la.com/zongyi/18329.html">
							<img data-original="http://v.114la.com/img/2013/08/02/pp/variety/7/11IiQ372F70.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>中国梦之声</cite>
							<em></em>
						</a>
						<p>最新20130825期</p>
					</li>
										<li>
						<a title="爱情连连看" href="http://v.114la.com/zongyi/18381.html">
							<img data-original="http://v.114la.com/img/2013/07/18/qy/variety/10/860DU42N566.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>爱情连连看</cite>
							<em></em>
						</a>
						<p>最新20130924期</p>
					</li>
										<li>
						<a title="快乐男声2013" href="http://v.114la.com/zongyi/18335.html">
							<img data-original="http://pic5.qiyipic.com/image/20130920/v_100242253_m_601_m1.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>快乐男声2013</cite>
							<em></em>
						</a>
						<p>最新20130920期</p>
					</li>
										<li>
						<a title="超级演说家" href="http://v.114la.com/zongyi/27730.html">
							<img data-original="http://pic1.qiyipic.com/thumb/20130802/a569494u2.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>超级演说家</cite>
							<em></em>
						</a>
						<p>最新20130919期</p>
					</li>
										<li>
						<a title="快乐大本营" href="http://v.114la.com/zongyi/18315.html">
							<img data-original="http://v.114la.com/img/2013/07/18/qy/variety/9/9X8i282RM19.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>快乐大本营</cite>
							<em></em>
						</a>
						<p>最新20130921期</p>
					</li>
										<li>
						<a title="我们约会吧" href="http://v.114la.com/zongyi/18376.html">
							<img data-original="http://v.114la.com/img/2013/07/18/qy/variety/5/822137j3Ghl.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>我们约会吧</cite>
							<em></em>
						</a>
						<p>最新20130925期</p>
					</li>
										<li>
						<a title="快乐男声2013之男声学院" href="http://v.114la.com/zongyi/18343.html">
							<img data-original="http://v.114la.com/img/2013/07/18/qy/variety/5/9zh8256H3GC.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>快乐男声2013之男声学院</cite>
							<em></em>
						</a>
						<p>最新20130707期</p>
					</li>
									</ul>
			</div>
						<div class="ingrep-Cont">
				<ul class="sumgroup entire clearfix">
										<li>
						<a title="康熙来了" href="http://v.114la.com/zongyi/18337.html">
							<img data-original="http://www.qiyipic.com/thumb/20100624/vrsa3927.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>康熙来了</cite>
							<em></em>
						</a>
						<p>最新20130925期</p>
					</li>
										<li>
						<a title="天天向上" href="http://v.114la.com/zongyi/18328.html">
							<img data-original="http://pic8.qiyipic.com/thumb/20130906/a620409u2.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>天天向上</cite>
							<em></em>
						</a>
						<p>最新20130920期</p>
					</li>
										<li>
						<a title="超级访问" href="http://v.114la.com/zongyi/18390.html">
							<img data-original="http://v.114la.com/img/2013/07/18/qy/variety/6/wD22O22968T.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>超级访问</cite>
							<em></em>
						</a>
						<p>最新20130924期</p>
					</li>
										<li>
						<a title="龙斌大话电影" href="http://v.114la.com/zongyi/52869.html">
							<img data-original="http://s2.56img.com/images/index/1111/22121_d.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>龙斌大话电影</cite>
							<em></em>
						</a>
						<p>最新20130923期</p>
					</li>
										<li>
						<a title="综艺劲爆点" href="http://v.114la.com/zongyi/18344.html">
							<img data-original="http://v.114la.com/img/2013/09/22/qy/variety/2/532Ce32F901.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>综艺劲爆点</cite>
							<em></em>
						</a>
						<p>最新20130926期</p>
					</li>
										<li>
						<a title="青春那些事儿" href="http://v.114la.com/zongyi/18397.html">
							<img data-original="http://v.114la.com/img/2013/07/18/qy/variety/4/1303YD2A6TH.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>青春那些事儿</cite>
							<em></em>
						</a>
						<p>最新20130926期</p>
					</li>
										<li>
						<a title="最耀B" href="http://v.114la.com/zongyi/39103.html">
							<img data-original="http://s2.56img.com/images/index/1111/21864_d.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>最耀B</cite>
							<em></em>
						</a>
						<p>最新20130920期</p>
					</li>
										<li>
						<a title="以德服人" href="http://v.114la.com/zongyi/18396.html">
							<img data-original="http://v.114la.com/img/2013/07/18/qy/variety/7/6kS6d7O9760.jpg" src="http://v.114la.com/static/images/loading.gif">
							<cite>以德服人</cite>
							<em></em>
						</a>
						<p>最新20130618期</p>
					</li>
									</ul>
			</div>
					</div>
	   		<div class="sideCont fr ingrep">
			<div class="inTitle">
				<h6><a title="综艺排行榜" href="http://v.114la.com/top/zongyi.html">综艺排行榜</a></h6>
				<div class="contabs">
					<ul>
						<li class="current"><a href="javascript:;">全部</a></li>
						<li><a href="javascript:;">选秀</a></li>
						<li><a href="javascript:;">访谈</a></li>
					</ul>
					<a target="_blank" class="more" href="http://v.114la.com/top/zongyi.html">更多&gt;&gt;</a>
				</div>
			</div>
			<div style="display:block;" class="ingrep-Cont">
				<ul class="foldlist">
									<li class="hover">
					<div class="hisus">
						<a class="img" href="http://v.114la.com/zongyi/27580.html">
							<img alt="中国好声音" data-original="http://v.114la.com/img/2013/08/08/le/variety/6/PL660r325U4.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>1</b>
						</a>
						<div class="imr">
							<h4>中国好声音</h4>
							<p>类型：其他</p>
							<p>主演：华少</p>
							<a class="p" href="http://v.114la.com/zongyi/27580.html">立即播放</a>
						</div>
					</div>
					<p><em>1</em><a href="http://v.114la.com/zongyi/27580.html">中国好声音</a><span>135650</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/zongyi/18337.html">
							<img alt="康熙来了" data-original="http://v.114la.com/img/2013/08/07/le/variety/3/4I0Uh01S262.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>2</b>
						</a>
						<div class="imr">
							<h4>康熙来了</h4>
							<p>类型：综艺,访谈,搞笑...</p>
							<p>主演：谢娜,柳翰雅,卜学亮</p>
							<a class="p" href="http://v.114la.com/zongyi/18337.html">立即播放</a>
						</div>
					</div>
					<p><em>2</em><a href="http://v.114la.com/zongyi/18337.html">康熙来了</a><span>99259</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/zongyi/9257.html">
							<img alt="快乐大本营" data-original="http://v.114la.com/img/2013/07/18/pp/variety/1/5u1u172SK29.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>3</b>
						</a>
						<div class="imr">
							<h4>快乐大本营</h4>
							<p>类型：大陆综艺</p>
							<p>主演：何炅,谢娜,李维嘉,吴昕,杜海涛</p>
							<a class="p" href="http://v.114la.com/zongyi/9257.html">立即播放</a>
						</div>
					</div>
					<p><em>3</em><a href="http://v.114la.com/zongyi/9257.html">快乐大本营</a><span>87148</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/zongyi/9646.html">
							<img alt="非诚勿扰" data-original="http://v.114la.com/img/2013/07/18/pp/variety/10/4xsO0V828T0.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>4</b>
						</a>
						<div class="imr">
							<h4>非诚勿扰</h4>
							<p>类型：非诚勿扰</p>
							<p>主演：孟非 李艾 李好 李响 阿雅 hold住姐</p>
							<a class="p" href="http://v.114la.com/zongyi/9646.html">立即播放</a>
						</div>
					</div>
					<p><em>4</em><a href="http://v.114la.com/zongyi/9646.html">非诚勿扰</a><span>71809</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/zongyi/18385.html">
							<img alt="running man" data-original="http://v.114la.com/img/2013/07/18/qy/variety/3/L8Ox2892C07.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>5</b>
						</a>
						<div class="imr">
							<h4>running man</h4>
							<p>类型：综艺,游戏...</p>
							<p>主演：宋智孝</p>
							<a class="p" href="http://v.114la.com/zongyi/18385.html">立即播放</a>
						</div>
					</div>
					<p><em>5</em><a href="http://v.114la.com/zongyi/18385.html">running man</a><span>64085</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/zongyi/18330.html">
							<img alt="转身遇到ta" data-original="http://v.114la.com/img/2013/07/18/qy/variety/9/945Ln55Y1dz.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>6</b>
						</a>
						<div class="imr">
							<h4>转身遇到ta</h4>
							<p>类型：综艺,相亲...</p>
							<p>主演：肖飞,周阳,高珊,许畯森,沈婷</p>
							<a class="p" href="http://v.114la.com/zongyi/18330.html">立即播放</a>
						</div>
					</div>
					<p><em>6</em><a href="http://v.114la.com/zongyi/18330.html">转身遇到ta</a><span>56384</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/zongyi/18629.html">
							<img alt="我的中国星" data-original="http://v.114la.com/img/2013/07/18/qy/variety/4/c55mru87f22.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>7</b>
						</a>
						<div class="imr">
							<h4>我的中国星</h4>
							<p>类型：综艺,选秀...</p>
							<p>主演：谭咏麟,宋茜,瞿颖,袁惟仁</p>
							<a class="p" href="http://v.114la.com/zongyi/18629.html">立即播放</a>
						</div>
					</div>
					<p><em>7</em><a href="http://v.114la.com/zongyi/18629.html">我的中国星</a><span>53105</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/zongyi/18328.html">
							<img alt="天天向上" data-original="http://v.114la.com/img/focus_img/201308/137756843672940.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>8</b>
						</a>
						<div class="imr">
							<h4>天天向上</h4>
							<p>类型：综艺,访谈,搞笑,...</p>
							<p>主演：柳岩,叶一茜,居文沛</p>
							<a class="p" href="http://v.114la.com/zongyi/18328.html">立即播放</a>
						</div>
					</div>
					<p><em>8</em><a href="http://v.114la.com/zongyi/18328.html">天天向上</a><span>39993</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/zongyi/51944.html">
							<img alt="赢在中国蓝天碧水间" data-original="http://v.114la.com/img/2013/09/18/le/variety/8/E06LS35m53O.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>9</b>
						</a>
						<div class="imr">
							<h4>赢在中国蓝天碧水间</h4>
							<p>类型：游戏</p>
							<p>主演：</p>
							<a class="p" href="http://v.114la.com/zongyi/51944.html">立即播放</a>
						</div>
					</div>
					<p><em>9</em><a href="http://v.114la.com/zongyi/51944.html">赢在中国蓝天碧水间</a><span>33225</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/zongyi/27703.html">
							<img alt="快乐男声" data-original="http://v.114la.com/img/2013/09/14/le/variety/10/46527Qv65h6.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>10</b>
						</a>
						<div class="imr">
							<h4>快乐男声</h4>
							<p>类型：其他</p>
							<p>主演：何炅,汪涵</p>
							<a class="p" href="http://v.114la.com/zongyi/27703.html">立即播放</a>
						</div>
					</div>
					<p><em>10</em><a href="http://v.114la.com/zongyi/27703.html">快乐男声</a><span>33063</span></p>
				</li>
									
				</ul>
			</div>
			<div class="ingrep-Cont">
				<ul class="foldlist">
									<li class="hover">
					<div class="hisus">
						<a class="img" href="http://v.114la.com/zongyi/27580.html">
							<img alt="中国好声音" data-original="http://v.114la.com/img/2013/08/08/le/variety/6/PL660r325U4.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>1</b>
						</a>
						<div class="imr">
							<h4>中国好声音</h4>
							<p>类型：其他</p>
							<p>主演：华少</p>
							<a class="p" href="http://v.114la.com/zongyi/27580.html">立即播放</a>
						</div>
					</div>
					<p><em>1</em><a href="http://v.114la.com/zongyi/27580.html">中国好声音</a><span>135650</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/zongyi/9646.html">
							<img alt="非诚勿扰" data-original="http://v.114la.com/img/2013/07/18/pp/variety/10/4xsO0V828T0.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>2</b>
						</a>
						<div class="imr">
							<h4>非诚勿扰</h4>
							<p>类型：非诚勿扰</p>
							<p>主演：孟非 李艾 李好 李响 阿雅 hold住姐</p>
							<a class="p" href="http://v.114la.com/zongyi/9646.html">立即播放</a>
						</div>
					</div>
					<p><em>2</em><a href="http://v.114la.com/zongyi/9646.html">非诚勿扰</a><span>71809</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/zongyi/18629.html">
							<img alt="我的中国星" data-original="http://v.114la.com/img/2013/07/18/qy/variety/4/c55mru87f22.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>3</b>
						</a>
						<div class="imr">
							<h4>我的中国星</h4>
							<p>类型：综艺,选秀...</p>
							<p>主演：谭咏麟,宋茜,瞿颖,袁惟仁</p>
							<a class="p" href="http://v.114la.com/zongyi/18629.html">立即播放</a>
						</div>
					</div>
					<p><em>3</em><a href="http://v.114la.com/zongyi/18629.html">我的中国星</a><span>53105</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/zongyi/27703.html">
							<img alt="快乐男声" data-original="http://v.114la.com/img/2013/09/14/le/variety/10/46527Qv65h6.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>4</b>
						</a>
						<div class="imr">
							<h4>快乐男声</h4>
							<p>类型：其他</p>
							<p>主演：何炅,汪涵</p>
							<a class="p" href="http://v.114la.com/zongyi/27703.html">立即播放</a>
						</div>
					</div>
					<p><em>4</em><a href="http://v.114la.com/zongyi/27703.html">快乐男声</a><span>33063</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/zongyi/18334.html">
							<img alt="我们结婚了" data-original="http://v.114la.com/img/2013/07/18/qy/variety/1/407OXB08Xa7.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>5</b>
						</a>
						<div class="imr">
							<h4>我们结婚了</h4>
							<p>类型：综艺,搞笑,情感,...</p>
							<p>主演：吴映洁,玉泽演,李弘基,藤井美菜</p>
							<a class="p" href="http://v.114la.com/zongyi/18334.html">立即播放</a>
						</div>
					</div>
					<p><em>5</em><a href="http://v.114la.com/zongyi/18334.html">我们结婚了</a><span>32550</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/zongyi/27702.html">
							<img alt="非你莫属" data-original="http://v.114la.com/img/2013/08/08/le/variety/8/otx773G61b3.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>6</b>
						</a>
						<div class="imr">
							<h4>非你莫属</h4>
							<p>类型：其他</p>
							<p>主演：张绍刚</p>
							<a class="p" href="http://v.114la.com/zongyi/27702.html">立即播放</a>
						</div>
					</div>
					<p><em>6</em><a href="http://v.114la.com/zongyi/27702.html">非你莫属</a><span>20832</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/zongyi/39986.html">
							<img alt="非常完美" data-original="http://v.114la.com/img/2013/09/16/ct/variety/2/6E995Ac17j1.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>7</b>
						</a>
						<div class="imr">
							<h4>非常完美</h4>
							<p>类型：非常完美 陈怡 洪...</p>
							<p>主演：</p>
							<a class="p" href="http://v.114la.com/zongyi/39986.html">立即播放</a>
						</div>
					</div>
					<p><em>7</em><a href="http://v.114la.com/zongyi/39986.html">非常完美</a><span>16474</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/zongyi/40577.html">
							<img alt="老梁故事汇" data-original="http://v.114la.com/img/2013/09/16/ct/variety/10/2j6M468I209.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>8</b>
						</a>
						<div class="imr">
							<h4>老梁故事汇</h4>
							<p>类型：老梁故事汇 老梁 ...</p>
							<p>主演：</p>
							<a class="p" href="http://v.114la.com/zongyi/40577.html">立即播放</a>
						</div>
					</div>
					<p><em>8</em><a href="http://v.114la.com/zongyi/40577.html">老梁故事汇</a><span>14313</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/zongyi/39358.html">
							<img alt="最美和声" data-original="http://v.114la.com/img/2013/09/08/le/variety/4/6wI61XL43X1.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>9</b>
						</a>
						<div class="imr">
							<h4>最美和声</h4>
							<p>类型：其他</p>
							<p>主演：杨坤</p>
							<a class="p" href="http://v.114la.com/zongyi/39358.html">立即播放</a>
						</div>
					</div>
					<p><em>9</em><a href="http://v.114la.com/zongyi/39358.html">最美和声</a><span>10539</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/zongyi/18405.html">
							<img alt="年代秀" data-original="http://v.114la.com/img/2013/07/18/qy/variety/6/Nx6I00D918Z.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>10</b>
						</a>
						<div class="imr">
							<h4>年代秀</h4>
							<p>类型：综艺,搞笑...</p>
							<p>主演：宋茜,周觅,严爵,宁静,贾玲</p>
							<a class="p" href="http://v.114la.com/zongyi/18405.html">立即播放</a>
						</div>
					</div>
					<p><em>10</em><a href="http://v.114la.com/zongyi/18405.html">年代秀</a><span>8351</span></p>
				</li>
							</ul>
			</div>
			<div class="ingrep-Cont">
				<ul class="foldlist">
									<li class="hover">
					<div class="hisus">
						<a class="img" href="http://v.114la.com/zongyi/18337.html">
							<img alt="康熙来了" data-original="http://v.114la.com/img/2013/08/07/le/variety/3/4I0Uh01S262.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>1</b>
						</a>
						<div class="imr">
							<h4>康熙来了</h4>
							<p>类型：综艺,访谈,搞笑...</p>
							<p>主演：谢娜,柳翰雅,卜学亮</p>
							<a class="p" href="http://v.114la.com/zongyi/18337.html">立即播放</a>
						</div>
					</div>
					<p><em>1</em><a href="http://v.114la.com/zongyi/18337.html">康熙来了</a><span>99259</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/zongyi/9257.html">
							<img alt="快乐大本营" data-original="http://v.114la.com/img/2013/07/18/pp/variety/1/5u1u172SK29.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>2</b>
						</a>
						<div class="imr">
							<h4>快乐大本营</h4>
							<p>类型：大陆综艺</p>
							<p>主演：何炅,谢娜,李维嘉,吴昕,杜海涛</p>
							<a class="p" href="http://v.114la.com/zongyi/9257.html">立即播放</a>
						</div>
					</div>
					<p><em>2</em><a href="http://v.114la.com/zongyi/9257.html">快乐大本营</a><span>87148</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/zongyi/9646.html">
							<img alt="非诚勿扰" data-original="http://v.114la.com/img/2013/07/18/pp/variety/10/4xsO0V828T0.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>3</b>
						</a>
						<div class="imr">
							<h4>非诚勿扰</h4>
							<p>类型：非诚勿扰</p>
							<p>主演：孟非 李艾 李好 李响 阿雅 hold住姐</p>
							<a class="p" href="http://v.114la.com/zongyi/9646.html">立即播放</a>
						</div>
					</div>
					<p><em>3</em><a href="http://v.114la.com/zongyi/9646.html">非诚勿扰</a><span>71809</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/zongyi/18385.html">
							<img alt="running man" data-original="http://v.114la.com/img/2013/07/18/qy/variety/3/L8Ox2892C07.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>4</b>
						</a>
						<div class="imr">
							<h4>running man</h4>
							<p>类型：综艺,游戏...</p>
							<p>主演：宋智孝</p>
							<a class="p" href="http://v.114la.com/zongyi/18385.html">立即播放</a>
						</div>
					</div>
					<p><em>4</em><a href="http://v.114la.com/zongyi/18385.html">running man</a><span>64085</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/zongyi/18328.html">
							<img alt="天天向上" data-original="http://v.114la.com/img/focus_img/201308/137756843672940.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>5</b>
						</a>
						<div class="imr">
							<h4>天天向上</h4>
							<p>类型：综艺,访谈,搞笑,...</p>
							<p>主演：柳岩,叶一茜,居文沛</p>
							<a class="p" href="http://v.114la.com/zongyi/18328.html">立即播放</a>
						</div>
					</div>
					<p><em>5</em><a href="http://v.114la.com/zongyi/18328.html">天天向上</a><span>39993</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/zongyi/18544.html">
							<img alt="锵锵三人行" data-original="http://v.114la.com/img/2013/07/18/qy/variety/9/h6S9D82h5p6.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>6</b>
						</a>
						<div class="imr">
							<h4>锵锵三人行</h4>
							<p>类型：综艺,访谈,其它...</p>
							<p>主演：马未都,孟广美</p>
							<a class="p" href="http://v.114la.com/zongyi/18544.html">立即播放</a>
						</div>
					</div>
					<p><em>6</em><a href="http://v.114la.com/zongyi/18544.html">锵锵三人行</a><span>25244</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/zongyi/39521.html">
							<img alt="开讲啦" data-original="http://v.114la.com/img/2013/09/16/ct/variety/6/0YEo7t818G8.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>7</b>
						</a>
						<div class="imr">
							<h4>开讲啦</h4>
							<p>类型：开讲啦 撒贝宁 方...</p>
							<p>主演：</p>
							<a class="p" href="http://v.114la.com/zongyi/39521.html">立即播放</a>
						</div>
					</div>
					<p><em>7</em><a href="http://v.114la.com/zongyi/39521.html">开讲啦</a><span>18765</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/zongyi/18376.html">
							<img alt="我们约会吧" data-original="http://v.114la.com/img/2013/07/18/qy/variety/5/822137j3Ghl.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>8</b>
						</a>
						<div class="imr">
							<h4>我们约会吧</h4>
							<p>类型：综艺,情感...</p>
							<p>主演：</p>
							<a class="p" href="http://v.114la.com/zongyi/18376.html">立即播放</a>
						</div>
					</div>
					<p><em>8</em><a href="http://v.114la.com/zongyi/18376.html">我们约会吧</a><span>14990</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/zongyi/18514.html">
							<img alt="国光帮帮忙" data-original="http://v.114la.com/img/2013/07/18/qy/variety/5/n7x8y289927.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>9</b>
						</a>
						<div class="imr">
							<h4>国光帮帮忙</h4>
							<p>类型：综艺,访谈,搞笑...</p>
							<p>主演：宋少卿,马国毕</p>
							<a class="p" href="http://v.114la.com/zongyi/18514.html">立即播放</a>
						</div>
					</div>
					<p><em>9</em><a href="http://v.114la.com/zongyi/18514.html">国光帮帮忙</a><span>12187</span></p>
				</li>
								<li>
					<div class="hisus">
						<a class="img" href="http://v.114la.com/zongyi/18360.html">
							<img alt="非常了得" data-original="http://v.114la.com/img/2013/07/18/qy/variety/1/2g4j946e03T.jpg" src="http://v.114la.com/static/images/loading.gif">
							<b>10</b>
						</a>
						<div class="imr">
							<h4>非常了得</h4>
							<p>类型：综艺,搞笑,游戏...</p>
							<p>主演：姜振宇</p>
							<a class="p" href="http://v.114la.com/zongyi/18360.html">立即播放</a>
						</div>
					</div>
					<p><em>10</em><a href="http://v.114la.com/zongyi/18360.html">非常了得</a><span>11923</span></p>
				</li>
								</ul>
			</div>			
		</div>
	</div>
	<div class="comwrap topare clearfix">
		<dl class="spitRow fl">
			<dt><a href="http://v.114la.com/music/0-0-0-0-2.html">MV欣赏</a></dt>
			<dd>										<a href="http://v.114la.com/music/0-0-235-0-2.html">港台</a>
										<a href="http://v.114la.com/music/0-0-209-0-2.html">其它</a>
										<a href="http://v.114la.com/music/0-0-207-0-2.html">欧美</a>
										<a href="http://v.114la.com/music/0-0-208-0-2.html">日韩</a>
										<a href="http://v.114la.com/music/0-0-206-0-2.html">内地</a>
														<a href="http://v.114la.com/music/242-0-0-0-2.html">韩语</a>
										<a href="http://v.114la.com/music/241-0-0-0-2.html">闽南</a>
										<a href="http://v.114la.com/music/240-0-0-0-2.html">英语</a>
										<a href="http://v.114la.com/music/239-0-0-0-2.html">粤语</a>
										<a href="http://v.114la.com/music/238-0-0-0-2.html">日语</a>
										<a href="http://v.114la.com/music/237-0-0-0-2.html">国语</a>
								
										<a href="http://v.114la.com/music/230-0-0-0-2.html">民谣</a>
											<a href="http://v.114la.com/music/231-0-0-0-2.html">独立</a>
											<a href="http://v.114la.com/music/232-0-0-0-2.html">朋克</a>
											<a href="http://v.114la.com/music/233-0-0-0-2.html">另类</a>
											<a href="http://v.114la.com/music/234-0-0-0-2.html">灵魂</a>
											<a href="http://v.114la.com/music/229-0-0-0-2.html">舞曲</a>
											<a href="http://v.114la.com/music/227-0-0-0-2.html">轻音乐</a>
											<a href="http://v.114la.com/music/225-0-0-0-2.html">古典</a>
											<a href="http://v.114la.com/music/226-0-0-0-2.html">民歌</a>
											<a href="http://v.114la.com/music/223-0-0-0-2.html">乡村</a>
											<a href="http://v.114la.com/music/224-0-0-0-2.html">R&amp;B</a>
											<a href="http://v.114la.com/music/221-0-0-0-2.html">爵士</a>
											<a href="http://v.114la.com/music/222-0-0-0-2.html">金属</a>
											<a href="http://v.114la.com/music/220-0-0-0-2.html">电音</a>
											<a href="http://v.114la.com/music/218-0-0-0-2.html">摇滚</a>
											<a href="http://v.114la.com/music/219-0-0-0-2.html">说唱</a>
											<a href="http://v.114la.com/music/217-0-0-0-2.html">流行</a>
											<a href="http://v.114la.com/music/228-0-0-0-2.html">电影音乐</a>
								</dd>
		</dl>
		<ul class="spitMvList fr clearfix">
						<li>
				<a title="郭燕 - 天空之城 电视剧 《兰陵王》 主题曲" target="_blank" href="http://v.114la.com/?ac=play&amp;id=27774&amp;url=http%3A%2F%2Fwww.iqiyi.com%2Fv_19rrifwyid.html">
					<img alt="郭燕 - 天空之城 电视剧 《兰陵王》 主题曲" data-original="http://pic8.qiyipic.com/thumb/20130801/a569259.jpg" src="http://v.114la.com/static/images/loading.gif">
					<cite>电视剧《兰陵王》主题曲，由林依晨和冯绍峰主演。</cite>
					<em></em>
				</a>
				<p>郭燕 - 天空之城 电视剧 《兰陵王》 主题曲</p>
			</li>
						<li>
				<a title="M83 - Wait 电视剧 《穹顶之下》 07集片尾曲" target="_blank" href="http://v.114la.com/?ac=play&amp;id=33351&amp;url=http%3A%2F%2Fwww.iqiyi.com%2Fv_19rrifwg2e.html">
					<img alt="M83 - Wait 电视剧 《穹顶之下》 07集片尾曲" data-original="http://pic0.qiyipic.com/thumb/20130808/a579129.jpg" src="http://v.114la.com/static/images/loading.gif">
					<cite>M83，又名南天纸风车星系，是业余天文学家们能够在夜空中看到的最壮观旋涡星系之一。在这里M83不再是星系，而是来自法国的两人组合(05年已经变成一个人...)。电子外衣下的shoegaze(自赏派)+迷幻nosie rock。可以说有时像 Sigur Ros 刻意构造的实验噪音，或还带有点 Vangelis 的环境音效在里面，有时候给人以飘渺，有时却又是如M83给我们的迷一样的宽广。</cite>
					<em></em>
				</a>
				<p>M83 - Wait 电视剧 《穹顶之下》 07集片尾曲</p>
			</li>
						<li>
				<a title="Connie Talbot - Wrecking Ball" target="_blank" href="http://v.114la.com/?ac=play&amp;id=52725&amp;url=http%3A%2F%2Fwww.iqiyi.com%2Fv_19rrhabikc.html">
					<img alt="Connie Talbot - Wrecking Ball" data-original="http://pic5.qiyipic.com/image/20130924/v_100275411_m_601.jpg" src="http://v.114la.com/static/images/loading.gif">
					<cite>达人小康妮Connie Talbot翻唱Miley Cyrus最新热单《wrecking ball》</cite>
					<em></em>
				</a>
				<p>Connie Talbot - Wrecking Ball</p>
			</li>
						<li>
				<a title="冯允谦 - 世界剧团" target="_blank" href="http://v.114la.com/?ac=play&amp;id=52498&amp;url=http%3A%2F%2Fwww.iqiyi.com%2Fv_19rrhbemf4.html">
					<img alt="冯允谦 - 世界剧团" data-original="http://pic5.qiyipic.com/image/20130922/v_100249808_m_601.jpg" src="http://v.114la.com/static/images/loading.gif">
					<cite>继承新专辑第一首派台歌《What do you want from me》的合作班底，冯允谦(Jay)很高兴能继续和作曲的Kelvin Avon、Shridhar Salanki及填词的杨熙合作，为他制作新歌&lt;&lt;世界剧团&gt;&gt;。此歌曲有别于一般的情歌，这次的主题是讲述都市人为了要在社会中生存，往往会有压力地被迫戴上面具示人，但久而久之，可能忘却了真正的自己。对Jay来说，于整张新专题当中，这首歌别具意义。除了旋律动听、曲风令人容易记得，Jay觉得是次的歌词既写得真实，也很深入，期望能够引起乐迷的共鸣；亦希望大家能喜欢这首收录在他即将于9月份推出的最新专辑中的第二首主打歌。</cite>
					<em></em>
				</a>
				<p>冯允谦 - 世界剧团</p>
			</li>
						<li>
				<a title="摘星的你" target="_blank" href="http://v.114la.com/?ac=play&amp;id=52497&amp;url=http%3A%2F%2Fwww.iqiyi.com%2Fv_19rrhbcepg.html">
					<img alt="摘星的你" data-original="http://pic5.qiyipic.com/image/20130922/v_100258391_m_601.jpg" src="http://v.114la.com/static/images/loading.gif">
					<cite>摘星的你</cite>
					<em></em>
				</a>
				<p>摘星的你</p>
			</li>
						<li>
				<a title="容祖儿 - 小日子" target="_blank" href="http://v.114la.com/?ac=play&amp;id=52496&amp;url=http%3A%2F%2Fwww.iqiyi.com%2Fv_19rrhbdr2c.html">
					<img alt="容祖儿 - 小日子" data-original="http://pic5.qiyipic.com/image/20130922/v_100249817_m_601.jpg" src="http://v.114la.com/static/images/loading.gif">
					<cite>Joey大碟主題作《小日子》MV於9月19日面世，與大家共渡中秋，MV於台灣拍攝­，於一所棄置的車場由早上拍至零晨，MV內容描一對情侶於亂世中相遇，愛上，兩口子的­世界裡只有對方，那管社會洪流怎樣衝激，只要能共所愛的共渡小小時間，小小的日子，已­很足夠！雖說是小小的日子，陣容一點也不賴，導演找來真情侶加上60位演繹憤青及防暴­警察，煙霧彈，防煙面罩等重裝備，加上眾工作人員，達百人之多，場面壯觀，還以為是電­影製作呢！
MV中，Joey以說書人的角色穿梭於不同場景，拍攝當天氣温高達攝氏39度，甫到達­場地，眾工作人員己經汗流浹背，Joey熱到即興唱起：攝氏48度...《逃》令這熱­騰騰的環境中增添不少歡樂！</cite>
					<em></em>
				</a>
				<p>容祖儿 - 小日子</p>
			</li>
						<li>
				<a title="信 - 你存在" target="_blank" href="http://v.114la.com/?ac=play&amp;id=52158&amp;url=http%3A%2F%2Fwww.iqiyi.com%2Fv_19rrhaxpo4.html">
					<img alt="信 - 你存在" data-original="http://pic5.qiyipic.com/image/20130916/v_100193241_m_601.jpg" src="http://v.114la.com/static/images/loading.gif">
					<cite>信 - 你存在</cite>
					<em></em>
				</a>
				<p>信 - 你存在</p>
			</li>
						<li>
				<a title="许靖韵 - 那个他" target="_blank" href="http://v.114la.com/?ac=play&amp;id=52157&amp;url=http%3A%2F%2Fwww.iqiyi.com%2Fv_19rrhb4tvg.html">
					<img alt="许靖韵 - 那个他" data-original="http://pic5.qiyipic.com/image/20130918/v_100223336_m_601.jpg" src="http://v.114la.com/static/images/loading.gif">
					<cite>MV描述一段感情結束後的空窗期，不停跟自已說不要再留戀上一段情，要重新振作收拾心情迎接&lt;那個他&gt;，剛開始時，第一次拍攝MV的Angela顯然有點生硬及不知所措，但經導演指導後, 在第三Take便進入佳境馬上投入角色，現場的工作人員都稱讚她非常聰明伶俐兼消化力强，問Angela聽到稱讚鬆一口氣嗎? Angela道：「我今日真係好感動，覺得自已很幸運有一個咁好的工作的團隊。」說罷眼睜睜的望著眾工作人員，要唱片公司問她是否有話要說，Angela眼紅紅的應道：「係呀！好多謝大家呀!」眾工作人員即道：「唔使客氣，請食飯就得喇!」就這樣Angela便許下承諾，待新碟後便請客！</cite>
					<em></em>
				</a>
				<p>许靖韵 - 那个他</p>
			</li>
						<li>
				<a title="平野绫 - Promise 短版" target="_blank" href="http://v.114la.com/?ac=play&amp;id=52156&amp;url=http%3A%2F%2Fwww.iqiyi.com%2Fv_19rrhb52v0.html">
					<img alt="平野绫 - Promise 短版" data-original="http://pic5.qiyipic.com/image/20130918/v_100223332_m_601.jpg" src="http://v.114la.com/static/images/loading.gif">
					<cite>电影《狐狸的故事》插曲</cite>
					<em></em>
				</a>
				<p>平野绫 - Promise 短版</p>
			</li>
						<li>
				<a title="信 - 远得要命的爱情" target="_blank" href="http://v.114la.com/?ac=play&amp;id=52155&amp;url=http%3A%2F%2Fwww.iqiyi.com%2Fv_19rrhaw1po.html">
					<img alt="信 - 远得要命的爱情" data-original="http://pic5.qiyipic.com/image/20130916/v_100193488_m_601.jpg" src="http://v.114la.com/static/images/loading.gif">
					<cite>信 - 远得要命的爱情</cite>
					<em></em>
				</a>
				<p>信 - 远得要命的爱情</p>
			</li>
					</ul>
	</div>

	<div class="comwrap topare">
		<div class="inTitle">
			<h6>影视专题</h6>
			<a rel="nofollow" target="_blnak" class="more" href="http://www.k559.com/superstar/">更多专题&gt;&gt;</a>
		</div>
		<ul class="comSumList clearfix">
			<li>
				<a rel="nofollow" target="_blnak" href="http://www.k559.com/superstar/liangchaowei/">
					<img alt="梁朝伟电影全集" data-original="static/images/zt0717-01.jpg" src="http://v.114la.com/static/images/loading.gif">
					<cite>梁朝伟电影全集</cite>
				</a>
			</li>
			<li>
				<a rel="nofollow" target="_blnak" href="http://www.k559.com/superstar/zhenzidan/">
					<img alt="甄子丹电影全集" data-original="static/images/zt0717-02.jpg" src="http://v.114la.com/static/images/loading.gif">
					<cite>甄子丹电影全集</cite>
				</a>
			</li>
			<li>
				<a rel="nofollow" target="_blnak" href="http://www.k559.com/superstar/zhourunfa/">
					<img alt="周润发电影全集" data-original="static/images/zt0717-03.jpg" src="http://v.114la.com/static/images/loading.gif">
					<cite>周润发电影全集</cite>
				</a>
			</li>
			<li>
				<a rel="nofollow" target="_blnak" href="http://www.k559.com/superstar/chenglong/">
					<img alt="成龙电影全集" data-original="static/images/zt0717-04.jpg" src="http://v.114la.com/static/images/loading.gif">
					<cite>成龙电影全集</cite>
				</a>
			</li>
			<li>
				<a rel="nofollow" target="_blnak" href="http://www.k559.com/superstar/lilianjie/">
					<img alt="李连杰电影全集" data-original="static/images/zt0717-05.jpg" src="http://v.114la.com/static/images/loading.gif">
					<cite>李连杰电影全集</cite>
				</a>
			</li>
		</ul>
	</div>
		<div class="comwrap category clearfix">
		<dl>
			<dt><span>电影</span></dt>
			<dd>
				<a href="http://v.114la.com/movie/6-0-0-0-2.html">动作</a>
				<a href="http://v.114la.com/movie/7-0-0-0-2.html">喜剧</a>
				<a href="http://v.114la.com/movie/8-0-0-0-2.html">恐怖</a>
				<a href="http://v.114la.com/movie/9-0-0-0-2.html">科幻</a>
				<a href="http://v.114la.com/movie/10-0-0-0-2.html">爱情</a>
				<a href="http://v.114la.com/movie/11-0-0-0-2.html">犯罪</a>
				<a href="http://v.114la.com/movie/12-0-0-0-2.html">惊悚</a>
				<a href="http://v.114la.com/movie/13-0-0-0-2.html">动画</a>
				<a href="http://v.114la.com/movie/14-0-0-0-2.html">剧情</a>
				<a href="http://v.114la.com/movie/15-0-0-0-2.html">历史</a>
				<a href="http://v.114la.com/movie/246-0-0-0-2.html">奇幻</a>
				<a href="http://v.114la.com/movie/16-0-0-0-2.html">战争</a>
				<a href="http://v.114la.com/movie/247-0-0-0-2.html">悬疑</a>
				<a href="http://v.114la.com/movie/248-0-0-0-2.html">伦理</a>
				<a href="http://v.114la.com/movie/0-0-20-0-2.html">美国</a>
				<a href="http://v.114la.com/movie/0-0-250-0-2.html">香港</a>
			</dd>
		</dl>
		<dl>
			<dt><span>电视</span></dt>
			<dd>
				<a href="http://v.114la.com/tv/39-0-0-0-2.html">偶像</a>
				<a href="http://v.114la.com/tv/40-0-0-0-2.html">言情</a>
				<a href="http://v.114la.com/tv/41-0-0-0-2.html">都市</a>
				<a href="http://v.114la.com/tv/42-0-0-0-2.html">家庭</a>
				<a href="http://v.114la.com/tv/43-0-0-0-2.html">农村</a>
				<a href="http://v.114la.com/tv/44-0-0-0-2.html">警匪</a>
				<a href="http://v.114la.com/tv/45-0-0-0-2.html">悬疑</a>
				<a href="http://v.114la.com/tv/46-0-0-0-2.html">搞笑</a>
				<a href="http://v.114la.com/tv/47-0-0-0-2.html">军事</a>
				<a href="http://v.114la.com/tv/42-0-0-0-2.html">伦理</a>
				<a href="http://v.114la.com/tv/268-0-0-0-2.html">喜剧</a>
				<a href="http://v.114la.com/tv/48-0-0-0-2.html">古装</a>
				<a href="http://v.114la.com/tv/274-0-0-0-2.html">神话</a>
				<a href="http://v.114la.com/tv/269-0-0-0-2.html">武侠</a>
				<a href="http://v.114la.com/tv/275-0-0-0-2.html">谍战</a>
				<a href="http://v.114la.com/tv/273-0-0-0-2.html">励志</a>
			</dd>
		</dl>
		<dl>
			<dt><span>动漫</span></dt>
			<dd>
				<a class="current" href="http://v.114la.com/anime/0-0-0-0-2.html">全部</a>
				<a href="http://v.114la.com/anime/85-0-0-0-2.html">热血</a>
				<a href="http://v.114la.com/anime/86-0-0-0-2.html">科幻</a>
				<a href="http://v.114la.com/anime/87-0-0-0-2.html">青春</a>
				<a href="http://v.114la.com/anime/88-0-0-0-2.html">搞笑</a>
				<a href="http://v.114la.com/anime/89-0-0-0-2.html">亲子</a>
				<a href="http://v.114la.com/anime/90-0-0-0-2.html">魔幻</a>
				<a href="http://v.114la.com/anime/91-0-0-0-2.html">运动</a>
				<a href="http://v.114la.com/anime/92-0-0-0-2.html">少女</a>
				<a href="http://v.114la.com/anime/93-0-0-0-2.html">真人</a>
				<a href="http://v.114la.com/anime/244-0-0-0-2.html">冒险</a>
				<a href="http://v.114la.com/anime/243-0-0-0-2.html">益智</a>
				<a href="http://v.114la.com/anime/297-0-0-0-2.html">成人</a>
				<a href="http://v.114la.com/anime/288-0-0-0-2.html">恋爱</a>
				<a href="http://v.114la.com/anime/298-0-0-0-2.html">竞技</a>
				<a href="http://v.114la.com/anime/293-0-0-0-2.html">动物</a>
			</dd>
		</dl>
		<dl>
			<dt><span>综艺</span></dt>
			<dd>
				<a class="current" href="http://v.114la.com/zongyi/0-0-0-0-2.html">全部</a>
				<a href="http://v.114la.com/zongyi/106-0-0-0-2.html">时尚</a>
				<a href="http://v.114la.com/zongyi/107-0-0-0-2.html">娱乐</a>
				<a href="http://v.114la.com/zongyi/108-0-0-0-2.html">综艺</a>
				<a href="http://v.114la.com/zongyi/109-0-0-0-2.html">选秀</a>
				<a href="http://v.114la.com/zongyi/110-0-0-0-2.html">音乐</a>
				<a href="http://v.114la.com/zongyi/111-0-0-0-2.html">访谈</a>
				<a href="http://v.114la.com/zongyi/112-0-0-0-2.html">生活</a>
				<a href="http://v.114la.com/zongyi/113-0-0-0-2.html">游戏</a>
				<a href="http://v.114la.com/zongyi/305-0-0-0-2.html">美食</a>
				<a href="http://v.114la.com/zongyi/308-0-0-0-2.html">求职</a>
				<a href="http://v.114la.com/zongyi/304-0-0-0-2.html">旅游</a>
				<a href="http://v.114la.com/zongyi/309-0-0-0-2.html">曲艺</a>
				<a href="http://v.114la.com/zongyi/307-0-0-0-2.html">财经</a>
				<a href="http://v.114la.com/zongyi/303-0-0-0-2.html">播报</a>
			</dd>
		</dl>
		<dl class="last">
			<dt><span>音乐</span></dt>
			<dd>
			        <a href="http://v.114la.com/music/0-0-235-0-2.html">港台</a>
				<a href="http://v.114la.com/music/0-0-209-0-2.html">其它</a>
				<a href="http://v.114la.com/music/0-0-207-0-2.html">欧美</a>
				<a href="http://v.114la.com/music/0-0-208-0-2.html">日韩</a>
				<a href="http://v.114la.com/music/0-0-206-0-2.html">内地</a>
								<a href="http://v.114la.com/music/242-0-0-0-2.html">韩语</a>
				<a href="http://v.114la.com/music/241-0-0-0-2.html">闽南</a>
				<a href="http://v.114la.com/music/240-0-0-0-2.html">英语</a>
				<a href="http://v.114la.com/music/239-0-0-0-2.html">粤语</a>
				<a href="http://v.114la.com/music/238-0-0-0-2.html">日语</a>
				<a href="http://v.114la.com/music/237-0-0-0-2.html">国语</a>
			</dd>
		</dl>
	</div>			<dl class="flink">
		<dt class="comTitle">
			<h6>友情链接</h6>
		</dt>
		<dd>
						<a target="_blank" href="http://www.news.cn/video/index.htm">新华网视频</a>
						<a target="_blank" href="http://www.ku6.com/">酷6网</a>
						<a target="_blank" href="http://www.iqiyi.com">爱奇艺视频</a>
						<a target="_blank" href="http://www.k559.com/">高清电影</a>
						<a target="_blank" href="http://ent.v1.cn/">第一视频</a>
						<a target="_blank" href="http://tv.v.ifeng.com/">凤凰影视 </a>
						<a target="_blank" href="http://www.bale.cn/">芭乐新媒体</a>
						<a target="_blank" href="http://www.7706.com/">7706娱乐网</a>
						<a target="_blank" href="http://ent.cntv.cn/">央视网综艺</a>
						<a target="_blank" href="http://www.kangou.cn/">电影卡</a>
						<a target="_blank" href="http://www.fengyunzhibo.com">风云直播</a>
						<a target="_blank" href="http://www.69k.com">最新电影</a>
						<a target="_blank" href="http://www.51rrkan.com/">51人人看电影</a>
						<a target="_blank" href="http://v.61.com/">淘米视频</a>
						<a target="_blank" href="http://www.51vv.com/">51vv视频聊天</a>
						<a target="_blank" href="http://www.56.com/">56视频</a>
						<a target="_blank" href="http://v.2345.com/"> 2345影视大全</a>
						<a target="_blank" href="http://me.cztv.com/">新蓝网TV</a>
						<a target="_blank" href="http://www.11pk.net/">11pk影院</a>
						<a target="_blank" href="http://www.yueyuez.com/">粤语电影</a>
						<a target="_blank" href="http://www.31y.com/ ">31y影院 </a>
						<a target="_blank" href="http://www.233d.com/">3d电影下载</a>
						<a target="_blank" href="http://www.nydown.com/">MP4电影下载</a>
						<a target="_blank" href="http://www.meiju.la/">美剧</a>
						<a target="_blank" href="http://www.myrice.com">多来米视频</a>
						<a target="_blank" href="http://www.guagua.cn/">呱呱视频</a>
						<a target="_blank" href="http://film.spider.com.cn/">电影票预订</a>
						<a target="_blank" href="http://www.zhejiangmi.com/">浙江卫视直播</a>
						<a target="_blank" href="http://video.iresearch.cn/">艾瑞网络视频</a>
						<a target="_blank" href="http://www.suxiazai.com">速下载</a>
						<a target="_blank" href="http://www.ttuu.com/">推优网</a>
						<a target="_blank" href="http://www.babady.com ">快播电影网站大全</a>
						<a target="_blank" href="http://www.cccnews.com.cn/">中国动漫产业网</a>
						<a target="_blank" href="http://www.jiangsufang.com/">江苏卫视直播</a>
						<a target="_blank" href="http://www.0755.so/">深圳在线</a>
						<a target="_blank" href="http://www.boosj.com/">播视网 </a>
						<a target="_blank" href="http://www.tvbzhibo.com">TVB最新电视剧</a>
						<a target="_blank" href="http://zhibo.90tiyu.com/ ">体育直播 </a>
						<a target="_blank" href="http://www.shuangshitv.net/">双视影院</a>
						<a target="_blank" href="http://www.80s3gp.com/">手机电影下载</a>
						<a target="_blank" href="http://www.ywt.cc/ ">野兔影院 </a>
						<a target="_blank" href="http://www.datou8.com/">韩剧网</a>
					</dd>
	</dl>
	</div>
<?php echo $this->load->view('footer_index'); ?>