<?php echo $this->load->view('header_base'); ?>
<link rel="stylesheet" type="text/css"  href="<?php echo $this->staticUrl; ?>cfront/css/style.css"/>
<link rel="stylesheet" type="text/css"  href="<?php echo $this->staticUrl; ?>cfront/css/reset.css"/>
<script language="javascript" type="text/javascript" src="<?php echo $this->staticUrl; ?>common/script/common.js"></script>
</head>
<script type="text/javascript">
function searchFunc()
{
	document.searchForm.submit();
}
</script>
<body>
<div class="header">
	<div class="nav">
		<div class="logo fl"><a href="<?php echo $this->categoryInfos[8]['bind_domain']; ?>"><img src="<?php echo $this->staticUrl; ?>cfront/images/logo.png" /></a></div>
		<p class="nav_r fr">
		<?php if (!empty($this->loginedUserInfo)) { ?>
			(<span><?php echo $this->loginedUserInfo['username']; ?></span>)<a href="<?php echo $this->appInfos['pay']['url']; ?>index/mypay"> 我的余额 </a>|
			<a href="<?php echo $this->appInfos['passport']['url']; ?>uwebgame/logout/">安全退出</a>|
		<? } else { ?>
			<a href="<?php echo $this->appInfos['passport']['url']; ?>uwebgame/login/">登录</a>|
			<a href="<?php echo $this->appInfos['passport']['url']; ?>uwebgame/register/">注册</a>|
		<? } ?>
			<a href="<?php echo $this->appInfos['pay']['url']; ?>">充值中心</a>&nbsp;|
			<a href="javascript: addFavorite(); void(null);">收藏本页</a>
		</p>
	</div>
</div>