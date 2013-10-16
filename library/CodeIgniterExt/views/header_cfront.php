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
			<?php if (!empty($this->loginedUserInfo)) { ?>
				(<span><?php echo $this->loginedUserInfo['username']; ?></span>)<li><a href="<?php echo $this->appInfos['pay']['url']; ?>index/mypay"> 我的充值中心 </a>&nbsp;<span>|</span></li>
				<li><a href="<?php echo $this->appInfos['passport']['url']; ?>uwebgame/logout/">安全退出</a>&nbsp;<span>|</span></li>
			<? } else { ?>
				<li><a id="login" href="<?php echo $this->appInfos['passport']['url']; ?>uwebgame/login/">登录</a>&nbsp;<span>|</span></li>
			<? } ?>
				<li><a href="<?php echo $this->appInfos['pay']['url']; ?>">充值中心</a>&nbsp;<span>|</span></li>
				<li><a href="javascript:void(null);" onclick="addBookmark();">收藏本页</a></li>
            </ul>
        </div>
    </div>
    <div class="nav">
    	<ul class="nav_list"><?php if (isset($topNavString)) echo $topNavSTring; ?></ul>
    </div>
</div>