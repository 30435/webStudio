<?php echo doctype(); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title><?php echo $this->metaDatas['title']; ?></title>
<meta content="<?php echo $this->metaDatas['keywords']; ?>" name="Keywords"> 
<meta content="<?php echo $this->metaDatas['description']; ?>" name="Description">
<link rel="stylesheet" type="text/css"  href="<?php echo $this->staticUrl; ?>cfront/css/reset.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo $this->staticUrl; ?>cfront/css/chongzhi.css" />
</head>

<body>
<div class="header">
	<div class="top">
    	<h1 class="logo"><a href="#"><span>诺瓦开发团队</span></a></h1>
        <div class="top_links">
        	<ul class="top_links_list">
            	<li><a href="#">登陆</a>&nbsp;<span>|</span></li>
                <li><a href="#">意见反馈</a>&nbsp;<span>|</span></li>
                <li><a href="#">收藏本站</a></li>
            </ul>
        </div>
    </div>
    <div class="nav">
    	<ul class="nav_list">
        	<li class="cur"><a href="#">诺贝充值</a></li>
            <li class="cur"><a href="#">游戏包月</a></li>
            <li class="cur"><a href="#">游戏币兑换</a></li>
            <li class="cur ts" ><a href="#">我的充值</a></li>
        </ul>
    </div>
</div>