<?php echo $this->load->view('header'); ?>
<style type="text/css">
.related .txtbox-text { max-height: 84px; _height: 84px; overflow: hidden; }
.related .user-list li { padding: 0 4px; margin: 7px 0; width: 70px; height: 97px; }
.related .user-list li img { border: 1px solid white; display: block; }
.related-author .bd h5 { padding-bottom: 10px; }
.related-author .txtbox-bd { padding: 12px; }

.related-books .txtbox-bd { padding: 10px; height: 60px; overflow: hidden; } 
.related-books .txtbox-pic { width: 40px; padding-right: 10px; }
.related-books .txtbox-pic img { width: 36px; }
.related-books .txtbox-text { height: auto;}
.related-books .txtbox-content h5 { font-weight: normal; padding-top: 5px; margin-bottom: 2px; }
.related-books .txtbox-content .num { color: #999; margin-top: 2px; font-size: 12px; }
.related-books .txtbox-text, .related-books .txtbox-text a { color: #666; padding-bottom:0; padding-top: 0; }
</style>
<script type="text/javascript">
var serverTime = "2013-10-16 22:18:28";	
function addTags(tag){
var valu=$("#tags")[0].value;
valu = valu + " " + tag;
$("#tags")[0].value = valu;
}
$(function(){
//增加new图标
Motie.addNewClass && $('ul.add-new-class').length && $('ul.add-new-class').each(function(){ Motie.addNewClass($(this)) })

})
</script>
<link rel="stylesheet" type="text/css" href="http://img.motieimg.com/_resources/css/model/bookDetail.css?201307071800" media="all" />
<!--[if IE]>
<link href="http://img.motieimg.com/_resources/css/style-ie.css?201209101757" rel="stylesheet" type="text/css" />
<![endif]--> 
</head>
<body class="page-type-4 book-respond-list">
<div class="body-bg">
<div id="wrap">
<?php echo $this->load->view('header_nav'); ?>

<div id="main">
	<h1 class="p-title fl" style="margin-right:26px;"><a href="/book/12650"><?php echo $this->currentInfo['name']; ?></a></h1>
	<div class="clearfix"></div>
	<div class="left fl">
		<div class="left-bd">
			<div class="mod mod-article-list">
				<div class="bd">
					<div class="mod-basic-txtbox-layout">
						<div class="txtbox-item"> 
							<div class="txtbox-hd"><h2>未分卷</h2></div>
							<div class="txtbox-bd">
								<ul class="list add-new-class">
									<?php foreach ($this->chapterInfos as $key => $chapterInfo) { ?>
									<li class="" createdate="2012-07-05 13:48:38">
										<a href="/book/12650_263328" ><?php echo $chapterInfo['title']; ?></a>
										<!--<img alt="vip" src="http://img.motieimg.com/_assets/vip.gif">-->
										<span class="desc"><?php echo $chapterInfo['date_write']; ?></span>
									</li>
									<?php } ?>
								</ul>
								<div class="cl"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

	<div class="right fr">
		<div class="right-bd">
			<div class="mod mod-go-home"><div class="hd"><a href="/book/12650/">返回到作品封面页</a></div></div>
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
		</div>	
	</div>
	<div class="cl"></div>
</div>
<?php echo $this->load->view('footer'); ?>