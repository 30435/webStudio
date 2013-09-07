<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title><?php echo $this->metaDatas['title']; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?php $this->metaDatas['keywords']; ?>" />
<meta name="description" content="<?php $this->metaDatas['description']; ?>" />
<link type="image/ico" rel="shortcut icon" href="<?php echo $this->staticUrl; ?>favicon.ico" />
<link rel="stylesheet" type="text/css" href="<?php echo $this->staticUrl; ?>pay/css/pay.css?v=20130514699" />
<link rel="stylesheet" type="text/css" href="<?php echo $this->staticUrl; ?>pay/css/global.css?v=201311014699" />
<link rel="stylesheet" type="text/css" href="<?php echo $this->staticUrl; ?>pay/css/service.css?v=20130814699" />
<link rel="stylesheet" type="text/css" href="<?php echo $this->staticUrl; ?>pay/css/account.css?v=20130814699" />
<script src="<?php echo $this->staticUrl; ?>common/script/jquery-1.8.0.min.js" type="text/javascript" language="javascript"></script>
<script type="text/javascript">
var passportUrl = "<?php echo $this->appInfos['passport']['url']; ?>";
var webgameUrl = "<?php echo $this->appInfos['webgame']['url']; ?>";
var payUrl = "<?php echo $this->appInfos['pay']['url']; ?>";
</script>
</head>
<body>
<input type="hidden" name="check_form" id="check_form" value="0"/>
<div class="header">
	<div class="top">
		<h1 class="logo"><a href="/"><span><?php echo $this->metaDatas['title']; ?></span></a></h1>
		<div class="top_links">
			<ul class="top_links_list">
			<?php if (!empty($this->loginedUserInfo)) { ?>
				<li>(<span class="uid_account"><?php echo $this->loginedUserInfo['username']; ?></span>)<a class="head_top" title="我的充值中心" href="<?php echo $this->baseUrl; ?>index/myaccount"> 我的充值中心 </a><span>|</span></li>
				<li><a href="<?php echo $this->appInfos['passport']['url']; ?>index/logout/">安全退出</a><span>|</span></li>
			<? } else { ?>
				<li><a id="login" href="<?php echo $this->appInfos['passport']['url']; ?>">登录</a><span>|</span></li>
			<? } ?>
				<li><a href="/" target="_blank">意见反馈</a><span>|</span></li>
				<li><a href="###"  hidefocus="true" style="cursor:pointer;" onclick="addBookmark();">收藏本站</a></li>
			</ul>
		</div>
	</div>
	<div class="nav">
		<ul class="nav_list">
			<li <?php if ($this->method == 'index') echo 'class="cur"' ?>><a href="/"><span>米币充值</span></a></li>
			<li <?php if ($this->method == 'monthpay') echo 'class="cur"' ?>><a href="<?php echo $this->baseUrl; ?>index/paymonth"><span>游戏包月</span></a></li>
			<li <?php if ($this->method == 'exchange') echo 'class="cur"' ?>><a href="<?php echo $this->baseUrl; ?>index/exchange"><span>游戏币兑换</span></a></li>
			<li <?php if ($this->method == 'myaccount') echo 'class="cur"' ?>><a href="<?php echo $this->baseUrl; ?>index/mypay"><span>我的充值中心</span></a></li>
		</ul>
	</div>
</div>