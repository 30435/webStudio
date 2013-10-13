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
<script type="text/javascript">
var passportUrl = "<?php echo $this->baseUrl; ?>";
var webgameUrl = "<?php echo $this->appInfos['webgame']['url']; ?>";
var payUrl = "<?php echo $this->appInfos['pay']['url']; ?>";
</script>
<script language="javascript" type="text/javascript" src="<?php echo $this->staticUrl; ?>common/script/jquery-1.8.0.min.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->staticUrl; ?>common/script/jquery.cookie.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->staticUrl; ?>common/script/common.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->staticUrl; ?>passport/js/member.js"></script>
<body>
<div class="header">
	<div class="top">
    	<h1 class="logo"><a href="#"><span>诺瓦开发团队</span></a></h1>
        <div class="top_links">
        	<ul class="top_links_list">
			<?php if (!empty($this->loginedUserInfo)) { ?>
				(<span><?php echo $this->loginedUserInfo['username']; ?></span>)<li><a href="<?php echo $this->appInfos['pay']['url']; ?>index/mypay"> 我的充值中心 </a>&nbsp;<span>|</span></li>
				<li><a href="<?php echo $this->baseUrl . $this->prefix; ?>/logout/">安全退出</a>&nbsp;<span>|</span></li>
			<? } else { ?>
				<li><a id="login" href="<?php echo $this->baseUrl . $this->prefix; ?>/login/">登录</a>&nbsp;<span>|</span></li>
			<? } ?>
				<li><a href="<?php echo $this->appInfos['pay']['url']; ?>">充值中心</a>&nbsp;<span>|</span></li>
				<li><a href="javascript:void(null);" onclick="addBookmark();">收藏本页</a></li>
            </ul>
        </div>
    </div>
    <div class="nav">
    	<ul class="nav_list">
			<li class="cur"><a href="<?php echo $this->baseUrl . $this->prefix; ?>" >首页</a></li>
			<?php if (empty($this->loginedUserInfo)) { ?><li class="cur"><a href="<?php echo $this->baseUrl . $this->prefix; ?>/register" >申请诺瓦号</a></li><?php } ?>
			<li class="bar"><a href="<?php echo $this->baseUrl . $this->prefix; ?>/getpwd" id="account_forget" class="no-underline" hidefocus="true"><span class="spanout-bar">找回密码</span></a></li>
			<?php if (!empty($this->loginedUserInfo)) { ?><li class="cur"><a href="<?php echo $this->baseUrl . $this->prefix; ?>/editpwd">修改密码</a></li><?php } ?>
			<!--<li class="bar"><a href="/appeal" id="account_appeal" class="no-underline"hidefocus="true"><span class="spanout-bar">密码申诉</span></a></li>
			<li class="bar"><a href="/classroom" id="account_classroom" class="no-underline" hidefocus="true"><span class="spanout-bar">安全学堂</span></a></li>-->
        </ul>
    </div>
</div>