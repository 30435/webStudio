<?php echo doctype(); ?>
<head>
<title><?php echo $this->metaDatas['title']; ?></title>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<meta content="<?php echo $this->metaDatas['keywords']; ?>" name="Keywords"> 
<meta content="<?php echo $this->metaDatas['description']; ?>" name="Description">
<link href="<?echo $this->staticUrl; ?>favicon.ico" rel="shortcut icon" type="image/ico">
<link href="<?php echo $this->staticUrl; ?>tsource/webgame/common/css/comm/global_v0422.css?v=201308201554" rel="stylesheet" type="text/css">
<link href="<?php echo $this->staticUrl; ?>tsource/webgame/common/css/game/webgame_v0609.css?v=201308201554" rel="stylesheet" type="text/css">
<link href="<?php echo $this->staticUrl; ?>tsource/webgame/common/css/comm/webtop.css" rel="stylesheet" type="text/css">
</head>
<body style="background:url(<?php echo $this->staticUrl; ?>tsource/webgame/common/images/bg_bar.gif?v=201308201554) repeat-x 0 32px #fff;" class="body_pt40">
<div style="position: absolute; display: none; top: 0px; left: 0px; background: none repeat scroll 0% 0% rgb(51, 51, 51); opacity: 0.5; z-index: 1500; width: 1903px; height: 1326px;"></div>
<div id="header_4">
	<div class="top-container">
		<h1 style="position:relative;width:205px;height:40px;float:left;_zoom:1">
			<a title="<?php echo $this->metaDatas['title']; ?>" target="_blank" hidefocus="true" href="<?php echo $this->baseUrl; ?>" class="logo"><img width="205" height="34" src="<?php echo $this->staticUrl; ?>tsource/webgame/common/images/comm/topbar_v2012/2125logo_v0503.png"></a>
			<span style="clear:both;"></span>
		</h1>
		<span class="divide"></span>
		<a target="_blank" class="product-ad" href="/" onclick="pgvSendClick(4)"><img width="174" height="38" src="<?php echo $this->staticUrl; ?>tsource/webgame/common/images/ad.jpg" id="product-ad" style="display: inline;"></a>
		<!--<div class="webtop-speaker">
			<ul class="webtop-speaker-list" style="margin-top: -58px;">
				<li class="webtop-speaker-option"><a target="_blank" href="http://event.2125.com/signlink?tmcid=180&amp;gamename=xddt" onclick="pgvSendClick(7)" class="webtop-speaker-link">【新弹弹】淘米首发 新服火爆全场</a></li>
			</ul>
		</div>-->
		<div class="webtop-login-area">
			<div class="webtop-login">
			<?php if (!empty($this->loginedUserInfo)) { ?>
				(<span class="uid_account"><a href="<?php echo $this->appInfos['passport']['url']; ?>uwebgame/" target="_blank"><?php echo $this->loginedUserInfo['username']; ?></a></span>)
				<span class="webtop-login-split">|</span> <a target="_blank" href="<?php echo $this->appInfos['passport']['url']; ?>uwebgame/logout/" class="webtop-login-link">退出</a>
			<? } else { ?>
				<a style="color:#FF7F01;" target="_blank" href="<?php echo $this->appInfos['passport']['url']; ?>uwebgame/login" class="webtop-login-link">登陆</a>
				<span class="webtop-login-split">|</span> <a target="_blank" href="<?php echo $this->appInfos['passport']['url']; ?>uwebgame/register" class="webtop-login-link">注册</a>
			<? } ?>
				<span class="webtop-login-split">|</span><a style="font-weight:700;color:#f00;" target="_blank" href="<?php echo $this->appInfos['pay']['url']; ?>" class="webtop-login-link">充值</a>
			</div>
			<div class="webtop-speaker"></div>
		</div>
	</div>
</div>