<?php echo $this->load->view('header'); ?>



		<link rel="stylesheet" type="text/css" href="http://img.motieimg.com/_resources/css/model/chapter.css?201305301003" media="all" />
		<style type="text/css">
			.fixed-rb .other-link a { display: block; text-align: center; margin-top: 10px; color: #424242; }
				.fixed-rb .other-link a:hover { color: #FF0; }
				.allow-reply { color: #ccc; }
		</style>
		
		<script src="http://img.motieimg.com/_resources/js/release/chapter.js?201305301003"></script>
		<script>
			var _CHAPTER = {
				isfree: false,
				finish: false,
				over: false,
				unlogin: false,
				unpay: false,
				buyerror: false,
				payinfo: {},
				detail: {},
				nextChapter: 0
			}
		</script>
</head>
<body class="chapter-detail" ondragstart="return false" oncopy="return false;" oncut="return false;" oncontextmenu="return false">
<div class="body-bg">
<div class="wrap">

<?php echo $this->load->view('header_nav'); ?>
<div class="chapter-bg">
	<div id="main">
	<div class="mod-page" data-chapter-id="263328" id="chapter263328" data-isfree="true" data-next-chapter="263329">
		<div class="bd">
			<input type="hidden" value="263328" name="chapterId">
			<div class="page-top"></div>
			<div class="page-body">
				
				<div id="breadcrumb">
					<ul>
						<li><a href="/people/358"><?php echo $this->currentInfo['author']; ?></a></li>
						<li><a href="/book/12650"><?php echo $this->currentInfo['name']; ?></a></li>
						<li><a href="/book/12650/chapter">章节目录</a></li>
					</ul>
				</div>
				<h1 id="chapter_title_263328" ><?php echo $this->currentChapter['title']; ?></h1>
				<input class="title" type="hidden" value="中国解梦师解梦实录.职场真相_总序：梦是人格开出的花_磨铁" />
				<p class="page-info" >
					作者：<a  class="blue" href="/people/358" ><?php echo $this->currentInfo['author']; ?></a> &nbsp;发布时间：<?php echo $this->currentChapter['date_write']; ?>
					&nbsp;字数：1077&nbsp; 浏览：11人
				</p>
				<div class="page-content">
					<pre ondragstart="return false" oncopy="return false;" oncut="return false;" oncontextmenu="return false" class="note" id="html_content_263328"><?php echo $this->content; ?>
					<img src="/ajax/chapter/12650/263328" class="hidden" /></pre>
				</div>
				
				
				
				
					<ul class="page-score">
						<li class="report"><a href="javascript:;" action-type="report" action-params='{"objectId":"263328","objectType":"4"}'>举报</a></li>
						<li class="bad"><a href="javascript:;" action-type="upordown" control-type="down" data-feed-id="263328">踩<span>(<em class="num">0</em>)</span></a></li>
						<li class="good"><a href="javascript:;" action-type="upordown" control-type="up" data-feed-id="263328">顶<span>(<em class="num">0</em>)</span></a></li>
						<li class="sp"></li>
						<li class="comment"><a link="/reply/4_263328/list" href="javascript:;" action-type="chapterComment">回应<span>(<em class="num">0</em>)</span></a></li>
						<li class="forward" ><a action-type="forward" data-feed-id="263328" data-feed-type="4" href="javascript:;">转发<span>(<em class="num">0</em>)</span></a></li>
						<li class="review"><a href="/review/add/12650" onclick="if(!Mo.CheckLogin(true,$.noop,function(){window.location.href='/review/add/'})) return false">写书评</a></li>
					</ul>
				
			</div>
			<div class="page-bottom"></div>
		</div>
	</div>		
	</body>
</html>

