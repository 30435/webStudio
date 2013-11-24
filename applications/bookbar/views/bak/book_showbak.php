<?php echo $this->load->view('header'); ?>
<script type="text/javascript" src="http://img.motieimg.com/_resources/js/plugins/jquery.pagination.js"></script>
<script type="text/javascript" src="http://img.motieimg.com/_resources/js/utils/share.js?201209111130"></script>
<link rel="stylesheet" type="text/css" href="http://img.motieimg.com/_resources/css/model/bookDetail.css?201307071800" media="all" />
<style type="text/css">
	.yanqing { vertical-align: -5px; }
</style>

<script type="text/javascript">
	var serverTime = "2013-10-16 22:15:18";
	var awaitPoll = parseInt(0);
	var BOOK_DETAIL = {
		author: '宁航一V',
		name: '必须犯规的游戏'
	}
	//bookId is globel
	var bookId = '12383';
</script>

</head>
<body class="page-type-4">
<div class="body-bg">
<div class="wrap">
<?php echo $this->load->view('header_nav'); ?>
				
<div id="main">
	<h1 class="p-title"><a href="/book/12383"><?php echo $this->currentInfo['name']; ?></a></h1>
	<div class="clearfix"></div>
	<div class="left fl">
		<div class="left-bd">
			<div class="mod mod-book">
				<div class="bd">
					<div class="detail clear">
						<div class="lpic">
							<div class="pic">
								<a href="/book/12383/chapter">
									<img src="<?php echo $this->currentInfo['fcover']; ?>" alt="<?php echo $this->currentInfo['name']; ?>" width="161" height="225" />
								</a>
							</div>
							<div class="vote">
								<ul>
									<li class="recs" style="width: 100%;"><b class="num" >284</b><a href="javascript:;" role="support" data-book-id="12383" action-type="pollForBook">推荐票</a></li>
									<li class="fans"><a href="/book/12383/follower">书迷：<b class="num">2549</b></a></li>
									<li class="revs"><a href="/book/12383/review">书评：<b class="num">14</b></a></li>
								</ul>
							</div>
						</div>
						<div class="rtext">
							<ul class="info clear">
								<li><a href="/all?sort=1">悬疑</a></li>
								<li>154197字</li>
								<li>已出版</li>
								<li>总点击1091876</li>
								<li style="margin-right:0;">7618人浏览</li>
							</ul>
							<div class="desc"><?php echo $this->currentInfo['description']; ?></div>
							<div class="tags">标签：
								<a target="_blank" href="/all?sort=1&tag1=%E6%83%8A%E6%82%9A">惊悚</a>
								<a target="_blank" href="/all?sort=1&tag1=%E4%BE%A6%E6%8E%A2">侦探</a>
								<a target="_blank" href="/all?sort=1&tag1=%E8%AF%A1%E5%BC%82">诡异</a>
								<a target="_blank" href="/all?sort=1&tag1=%E6%82%AC%E7%96%91">悬疑</a>
								<a target="_blank" href="/all?sort=1&tag1=%E6%8E%A8%E7%90%86">推理</a>
							</div>
						</div>
					</div>
					<div class="ctrl">
						<ul role="data-feed" data-feed-id="12383" data-feed-type="2">
							<li class="auto"><a data-book-autopay="true" href="javascript:;" title="开启此功能，当您阅读到付费章节时将直接支付章节费用"><span></span>自动订阅</a></li>
							<li class="follow"><a href="javascript:;" class="followBtn" data-follow-status="5" data-read-status="-1"><span></span>收藏</a></li>
							<li class="forward"><a href="javascript:;" action-type="forward">转发</a></li>
							<li class="favorite"><a title="喜欢" action-type="favorite" href="javascript:;"><img src="http://img.motieimg.com/_resources/css/img/field.gif" alt="喜欢" role="status" class="ico-heart-grey"></a></li>
							<li class="read"><a href="/book/12383/chapter" class="M-button-b">开始阅读</a></li>
						</ul>
					</div>
					<div class="boost">
						<table width="100%">
							<tr>
								<td width="201">
									<div class="area">
										<a href="javascript:;" id="boosthe" class="btn-boost"></a>
										<ul>
											<li>
												<a class="vm" href="/people/990669">风辰帮灬小胖</a>
												<span class="vm">捧场了10枚</span><img class="vm" src="http://img.motieimg.com/_assets/donate/mb.gif"/>
											</li>
											<li>
												<a class="vm" href="/people/990669">风辰帮灬小胖</a>
												<span class="vm">捧场了10枚</span><img class="vm" src="http://img.motieimg.com/_assets/donate/mb.gif"/>
											</li>
											<li>
												<a class="vm" href="/people/990669">风辰帮灬小胖</a>
												<span class="vm">捧场了10枚</span><img class="vm" src="http://img.motieimg.com/_assets/donate/mb.gif"/>
											</li>
										</ul>
										<p class="ac"><a href="/book/12383/donate/list" class="fb deep-blue">全部捧场记录>></a></p>
									</div>
								</td>
								<td>
									<div class="area">
										<h3>
											<span class="fb">最新章节： </span>
											<a href="/book/12383_260353"><img alt="vip" src="http://img.motieimg.com/_assets/vip.gif">尾声3</a>
											<span class="time">2012-06-28 16:48</span>
										</h3>
										<p class="desc">
											 夏侯申的头缓缓抬起来，目瞪口呆地盯着徐文，他的表情和动作都凝固了。 其他人吃惊的程度也不亚于夏侯申。龙马张口结舌地问道：&ldquo;你说清楚些，是怎么回事？&rdquo; 徐文显然也很诧异，不知道大家为什么在听到他这句话后，都变得紧张起来。他不安地说道：&ldquo;前天晚上，我做了一个噩梦，被吓醒了。本来我没...
										</p>
										<div class="sp-10"></div>
										<div class="btn-area ar"><a href="/book/12383/chapter" class="mo-button">章节目录>></a></div>
									</div>
								</td>
							</tr>
						</table>
					</div>

					<div class="mo-ui-share">
						<span>分享给朋友：</span>
						<a title="分享到新浪微博" class="share-sina"></a><a title="分享到QQ空间" class="share-qzone">
						</a><a title="分享到人人网" class="share-renren">
						</a><a title="分享到开心网" class="share-kaixin">
						</a><a title="分享到腾讯微博" class="share-tenwb">
						</a><a title="分享到百度" class="share-baidu">
						</a><a title="分享到豆瓣" class="share-douban"></a>
					</div>
					<!-- end share -->
				</div>
				<div class="ico"><img src="http://img.motieimg.com/_assets/ico-in-end.gif" alt="已完结"></div>
			</div>

			<div class="mod mod-book-dynamics">
				<div class="hd">
					<a href="javascript:;" style="right: 10px;" id="add-review">写评论</a>
					<ul class="mod-tabs">
						<li><h2><a href="/book/12383/review?showType=time">必须犯规的游戏的评论<span class="number"></span></a></h2></li>
						<li class="current" ><h2><a href="/book/12383/review?showType=best">精华评论</a></h2></li>
					</ul>
				</div>
				<div class="bd">
					<div style="padding:30px;text-align: center;"><i class="loadIco"></i></div>
				</div>
			</div>

			<div class="mod mod-respond" role="data-comment" data-feed-id="12383" data-feed-type="2" data-use-template="#bookReply">
				<div class="hd mod-title "><div class="title-bd "><h2 class="fl">必须犯规的游戏的回应</h2></div></div>
				<div class="bd"><div style="padding:30px;text-align: center;"><i class="loadIco"></i></div></div>
			</div>
		</div>
	</div>

	<div class="right fr">
		<div class="right-bd">
			<div class="mod related-author">
				<div class="bd">
					<div class="author-info clear">
						<div class="lpic">
							<a href="/people/151016" target="_blank"><img style="width: 50px;" width="50" height="50" src="http://img.motieimg.com/people/151016s1.jpg" /></a>
						</div>
						<div class="rtext">
							<h5>作者：<a class="blue" href="/people/151016" target="_blank"><?php echo $this->currentInfo['author']; ?></a></h5>
							<p>
								作品 <a href="/people/151016/book"><span class="blue">3</span></a> 文章   <a href="/people/151016/article"><span class="blue">0</span></a>  粉丝  <a href="/people/151016/follower"><span class="blue">84</span></a>
							</p>
						</div>
					</div>
					<div class="others clear">
						<h5>宁航一V的其它作品：</h5>
						<ul class="user-list" data-collect-id="52">
							<li>
								<a href="/book/12665" data-collect-index="1" target="_blank"><img style="width: 68px;" width="68" height="95" src="http://img.motieimg.com/book/12665l1.jpg" alt="夜话"></a>
								<p><a href="/book/12665" data-collect-index="1" target="_blank">夜话</a></p>
							</li>
							<li>
								<a href="/book/9532" data-collect-index="3" target="_blank"><img style="width: 68px;" width="68" height="95" src="http://img.motieimg.com/book/9532l1.jpg" alt="末日预言"></a>
								<p><a href="/book/9532" data-collect-index="3" target="_blank">末日预言</a></p>
							</li>
						</ul>
					</div>
				</div>
			</div>
			
			<div class="ad empty-mod mod">
				<a href="http://www.lefeng.com/?aid=1050554&referer=http://www.motie.com/mid/" target="_blank">
					<img src="http://img.motieimg.com/img/138043141212386253_261_80.jpg" width="261" height="80" />
				</a>
			</div>

			<div class="mod side-list">
				<div class="hd mod-title"><div class="title-bd"><h2>新书推荐</h2></div></div>
				<div class="bd">
					<ul class="list" data-collect-id="119">
						<li class="top">
							<a href="/book/31369" boxid="book_detail_tu1" data-control-type="shelf" class="fb" data-collect-index="1">
								<img style="padding:0px;" src="http://img.motieimg.com/book/31369s1.jpg" width="50" height="70">
							</a>
							<span style="position: relative; top: 7px;">
								<a target="_blank" class="fb" boxid="book_detail_tu1" data-control-type="shelf" href="/book/31369" data-collect-index="1">爱到流年落华处</a>
								<span class="author">作者：<a target="_blank" href="/people/603" class="deep-blue fz-12">白双双</a></span>
							</span>
						</li>
						<li><a href="/book/382" data-collect-index="2">隐交易</a></li>	
						<li><a href="/book/124" data-collect-index="3">心理医生的窥视</a></li>	
						<li><a href="/book/176" data-collect-index="4">太监往事</a></li>	
						<li><a href="/book/382" data-collect-index="2">隐交易</a></li>	
						<li><a href="/book/124" data-collect-index="3">心理医生的窥视</a></li>	
						<li><a href="/book/176" data-collect-index="4">太监往事</a></li>	
						<li><a href="/book/382" data-collect-index="2">隐交易</a></li>	
						<li><a href="/book/124" data-collect-index="3">心理医生的窥视</a></li>	
						<li><a href="/book/176" data-collect-index="4">太监往事</a></li>	
					</ul>
				</div>
			</div>

			<div class="mod side-list">
				<div class="hd mod-title"><div class="title-bd"><h2>精品推荐</h2></div></div>
				<div class="bd">
					<ul class="list" data-collect-id="119">
						<li class="top">
							<a href="/book/31369" boxid="book_detail_tu1" data-control-type="shelf" class="fb" data-collect-index="1">
								<img style="padding:0px;" src="http://img.motieimg.com/book/31369s1.jpg" width="50" height="70">
							</a>
							<span style="position: relative; top: 7px;">
								<a target="_blank" class="fb" boxid="book_detail_tu1" data-control-type="shelf" href="/book/31369" data-collect-index="1">爱到流年落华处</a>
								<span class="author">作者：<a target="_blank" href="/people/603" class="deep-blue fz-12">白双双</a></span>
							</span>
						</li>
						<li><a href="/book/382" data-collect-index="2">隐交易</a></li>	
						<li><a href="/book/124" data-collect-index="3">心理医生的窥视</a></li>	
						<li><a href="/book/176" data-collect-index="4">太监往事</a></li>	
						<li><a href="/book/382" data-collect-index="2">隐交易</a></li>	
						<li><a href="/book/124" data-collect-index="3">心理医生的窥视</a></li>	
						<li><a href="/book/176" data-collect-index="4">太监往事</a></li>	
						<li><a href="/book/382" data-collect-index="2">隐交易</a></li>	
						<li><a href="/book/124" data-collect-index="3">心理医生的窥视</a></li>	
						<li><a href="/book/176" data-collect-index="4">太监往事</a></li>	
					</ul>
				</div>
			</div>

			<div class="mod fans-rank">
				<div class="hd mod-title"><div class="title-bd"><h2>粉丝榜</h2></div></div>
				<div class="bd">
					<table>
						<thead>
							<tr><th width="36">排行</th><th>用户名</th><th width="80">级别</th></tr>
						</thead>
						<tbody>
							<tr ><td class="ac"></td><td class="col2"><a href="/people/117289"  >薰姨</a></td><td class="col3">平民</td></tr>
							<tr ><td class="ac"></td><td class="col2"><a href="/people/117289"  >薰姨</a></td><td class="col3">平民</td></tr>
							<tr ><td class="ac"></td><td class="col2"><a href="/people/117289"  >薰姨</a></td><td class="col3">平民</td></tr>
							<tr ><td class="ac"></td><td class="col2"><a href="/people/117289"  >薰姨</a></td><td class="col3">平民</td></tr>
							<tr ><td class="ac"></td><td class="col2"><a href="/people/117289"  >薰姨</a></td><td class="col3">平民</td></tr>
							<tr ><td class="ac"></td><td class="col2"><a href="/people/117289"  >薰姨</a></td><td class="col3">平民</td></tr>
							<tr ><td class="ac"></td><td class="col2"><a href="/people/117289"  >薰姨</a></td><td class="col3">平民</td></tr>
							<tr ><td class="ac"></td><td class="col2"><a href="/people/117289"  >薰姨</a></td><td class="col3">平民</td></tr>
							<tr ><td class="ac"></td><td class="col2"><a href="/people/117289"  >薰姨</a></td><td class="col3">平民</td></tr>
							<tr ><td class="ac"></td><td class="col2"><a href="/people/117289"  >薰姨</a></td><td class="col3">平民</td></tr>							
							<tr><td colspan="2"></td><td class="ar"><a href="/book/12383/bookfollow" class="fans-gray" >[更多]</a></td></tr>
						</tbody>
					</table>
				</div>
			</div>

			<div class="mod empty-mod ac">
				<a href="javascript:;" id="collect-to-mygroup" title="收藏到小组"><img src="http://img.motieimg.com/_assets/btn-collection.gif" alt="收藏到小组" /></a>
			</div>
		</div>	
	</div>
	<div class="cl"></div>
</div>

<?php echo $this->load->view('footer'); ?>