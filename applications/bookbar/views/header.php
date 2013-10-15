<?php echo doctype(); ?>
<!--[if lt IE 7]><html xmlns:wb="http://open.weibo.com/wb" class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]><html xmlns:wb="http://open.weibo.com/wb" class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]><html xmlns:wb="http://open.weibo.com/wb" class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html xmlns:wb="http://open.weibo.com/wb" class="no-js" lang="en"> <!--<![endif]-->
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title><?php echo $this->metaDatas['title']; ?></title>
<meta content="<?php echo $this->metaDatas['keywords']; ?>" name="Keywords"> 
<meta content="<?php echo $this->metaDatas['description']; ?>" name="Description">
<!-- [if lte IE 8]>
<meta http-equiv="X-UA-Compatible" content="IE=7,chrome=1" />
<![endif]-->
<script type="text/javascript">
	var _loginUser = 'basic';
    var _config = '';
</script>
<link href="<?php echo $this->staticUrl; ?>bookbar/css/core.packed.css?201301311453" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->staticUrl; ?>bookbar/css/jquery-ui-1.8.16.custom.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->staticUrl; ?>bookbar/css/model.packed.css?201302270930" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="http://img.motieimg.com/_resources/js/plugins/DD_belatedPNG.js"></script>
<script type="text/javascript"> document.execCommand("BackgroundImageCache", false, true); </script>
<![endif]-->
<script type="text/javascript" src="http://img.motieimg.com/_resources/js/release/plugin.js?201211010520"></script>
<script type="text/javascript" src="http://img.motieimg.com/_resources/js/release/Motie.core.packed.js?201309021552"></script>
<script type="text/javascript">
	$(function(){
		Mo.init.InitAll();
		Mo.core.collect();
	})
</script>

<link rel="stylesheet" type="text/css" href="<?php echo $this->staticUrl; ?>bookbar/css/square.css?201303071915" media="all">
<style type="text/css">
/* mod chapter- update */
.mod-chapter-update .hd .tabs2 li, .update-chapter-list td {
	background: url(<?php echo $this->staticUrl; ?>bookbar/images/sp.png) no-repeat;
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
.mod-qianshu li { padding: 10px; background: url(<?php echo $this->staticUrl; ?>bookbar/images/home-sp.png?2) repeat-x left 94px; }
.mod-qianshu li .lpic { padding-right: 10px; }
.mod-qianshu li .lpic img { padding: 2px; background: #fff; } 
.mod-qianshu li .rtext p.title { padding: 5px 0; line-height: 1.5em; font-size: 14px; font-weight: bold; }
</style>
	<!--[if IE]>
<link href="<?php echo $this->staticUrl; ?>bookbar/css/style-ie.css?201209101757" rel="stylesheet" type="text/css" />
<![endif]--> 
</head>
<body class="page-type-square">
<div class="body-bg">
	<div class="wrap">
		<div class="not-login no-level2" id="header">
			<div class="bd">
				<h1 class="logo">
					<a href="/"><img alt="" src="<?php echo $this->staticUrl; ?>bookbar/images/logo-new.jpg"><img width="19" height="16" src="<?php echo $this->staticUrl; ?>bookbar/images/ico-home.png?3" class="ico-home"></a>
				</h1>
				<span class=" nav-level-1">
					<a class="n-square" href="/">首页</a><!-- <img src="<?php echo $this->staticUrl; ?>bookbar/images/ico-hot.png" width="24" height="37" class="ico" alt="" /><a href="/jingpin" class="n-classic">精品</a> -->
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
				</div>
			</div>
		</div>
