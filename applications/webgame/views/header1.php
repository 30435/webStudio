<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title><?php echo $this->metaDatas['title']; ?></title>
<meta charset="UTF-8">
<meta name="robots" content="all" />
<meta name="keywords" content="<?php echo $this->metaDatas['keywords']; ?>" />
<meta name="description" content="<?php echo $this->metaDatas['description']; ?>" />
<link rel="shortcut icon" href="<?php echo $this->staticUrl; ?>favicon.ico" type="image/x-icon"  />
<link rel="stylesheet" href="<?php echo $this->staticUrl; ?>webgame/common/css/game_61/style.css">
<link rel="stylesheet" href="<?php echo $this->staticUrl; ?>webgame/common/css/game_61/ie.css?v=201308201823">
<link rel="stylesheet" href="<?php echo $this->staticUrl; ?>webgame/topbar/topbar/style/css/topbarStyle.css?v=20130820062314">
</head>
<body>
<div class="topbar_outer" id="J_topbarNav">
	<div class="topbar_wrap cf" style="position:relative">
		<a target="_blank" title="淘米网" class="topbar_logo" href="<?php echo $this->baseUrl; ?>">知金游戏</a>
		<div class="topbar_nav cf">
        <?php foreach ($this->webgameInfos as $webgameCode => $webgameInfo) { if ($webgameInfo['webgame_type'] != 1) { continue; } ?>
		    <a class="" href="<?php echo $webgameInfo['url_home']; ?>" target="_blank" title="<?php echo $webgameInfo['name']; ?>"><img src="<?php echo $webgameInfo['pic_small']; ?>" width="16px" height="16px"></img><?php echo $webgameInfo['name']; ?></a>
		<?php } ?>
		</div>
		<!--<div class="topbar_all" id="J_topbarOpen"><span>全部</span></div>-->
		<div class="topbar_reg">
		<?php if (!empty($this->loginedUserInfo)) { ?>
			(<span class="uid_account"><?php echo $this->loginedUserInfo['username']; ?></span>)<!--<a class="head_top" title="我的充值中心" href="<?php echo $this->baseUrl; ?>index/myaccount"> 我的充值中心 </a><i class="divide_new">|</i>-->
			<a href="<?php echo $this->appInfos['passport']['url']; ?>uwebgame/logout/">安全退出</a><i class="divide_new">|</i>
		<? } else { ?>
			<a href="<?php echo $this->appInfos['passport']['url']; ?>uwebgame/login" title="登陆" target="_blank" rel="nofollow">登陆</a><i class="divide_new">|</i>
			<a href="<?php echo $this->appInfos['passport']['url']; ?>uwebgame/register" title="注册" target="_blank" rel="nofollow">注册</a><i class="divide_new">|</i>
		<? } ?>
			<a href="<?php echo $this->appInfos['pay']['url']; ?>" title="诺币充值" target="_blank" rel="nofollow">充值</a><i class="divide_new">|</i>
			<a id="j_addFav" href="javascript: addFavorite(); void(0);" title="添加到收藏夹" target="_self" rel="nofollow">收藏</a>
			<!--<i class="divide_new">|</i>
            <a rel="nofollow" target="_blank" title="官方论坛" href="http://bbs.61.com/">官方论坛</a>-->
		</div>
		<!--<em class="cf" style="height:0;line-height:0"></em>
		<span style="z-index:100;position:absolute;float:left;top:0px;left:600px;width:25px;height:14px;background-image:url(http://upload.ci.com/sitePage/1//game-res.61.com/common/v3/style/images/as_hot_icon.gif);background-repeat:no-repeat;" /></span>-->
	</div>
</div>