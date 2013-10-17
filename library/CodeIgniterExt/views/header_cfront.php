<?php echo doctype(); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title><?php echo $this->metaDatas['title']; ?></title>
<meta content="<?php echo $this->metaDatas['keywords']; ?>" name="Keywords"> 
<meta content="<?php echo $this->metaDatas['description']; ?>" name="Description">
<link rel="stylesheet" type="text/css"  href="<?php echo $this->staticUrl; ?>cfront/css/reset.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo $this->staticUrl; ?>cfront/css/chongzhi.css" />
<script type="text/javascript">
var passportUrl = "<?php echo $this->appInfos['passport']['url']; ?>";
var webgameUrl = "<?php echo $this->appInfos['webgame']['url']; ?>";
var payUrl = "<?php echo $this->appInfos['pay']['url']; ?>";
</script>
<script language="javascript" type="text/javascript" src="<?php echo $this->staticUrl; ?>common/script/jquery-1.8.0.min.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->staticUrl; ?>common/script/jquery.cookie.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->staticUrl; ?>common/script/common.js"></script>
</head>
<body>
<div class="header">
	<div class="top">
    	<h1 class="logo"><a href="<?php echo $this->categoryInfos[8]['bind_domain']; ?>"><img src="<?php echo $this->staticUrl; ?>cfront/images/logo.png" /></a></h1>
        <div class="top_links">
        	<ul class="top_links_list">
				<li><a href="<?php echo $this->categoryInfos['8']['bind_domain']; ?>">诺瓦首页</a>&nbsp;<span>|</span></li>
			<?php if (!empty($this->loginedUserInfo)) { ?>
				(<span><?php echo $this->loginedUserInfo['username']; ?></span>)<li><a href="<?php echo $this->appInfos['pay']['url']; ?>index/mypay"> 我的充值中心 </a>&nbsp;<span>|</span></li>
				<li><a href="<?php echo $this->appInfos['passport']['url']; ?>uwebgame/logout/">安全退出</a>&nbsp;<span>|</span></li>
			<? } else { ?>
				<li><a id="login" href="<?php echo $this->appInfos['passport']['url']; ?>uwebgame/login/">登录</a>&nbsp;<span>|</span></li>
				<li><a id="login" href="<?php echo $this->appInfos['passport']['url']; ?>uwebgame/register/">注册</a>&nbsp;<span>|</span></li>
			<? } ?>
				<li><a href="<?php echo $this->appInfos['pay']['url']; ?>">充值中心</a>&nbsp;<span>|</span></li>
				<li><a href="javascript: addFavorite(); void(null);">收藏本页</a></li>
            </ul>
        </div>
    </div>
    <div class="nav">
    	<ul class="nav_list">
	        <li class="cur"><a href="<?php echo $this->appInfos['pay']['url']; ?>">诺贝充值</a></li>
            <li class="cur"><a href="<?php echo $this->appInfos['pay']['url']; ?>index/mypayinfo">我的余额</a></li>
            <li class="cur"><a href="<?php echo $this->appInfos['pay']['url']; ?>index/myaccount">我的充值</a></li>
            <li class="cur"><a href="<?php echo $this->appInfos['pay']['url']; ?>index/mypay">我的支付</a></li>
			<li class="cur"><a href="<?php echo $this->appInfos['passport']['url']; ?>uwebgame/editpwd">修改密码</a></li>
		</ul>
    </div>
</div>