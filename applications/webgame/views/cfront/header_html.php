<?php echo $this->load->view('header_base'); ?>
<link rel="stylesheet" type="text/css"  href="<?php echo $this->staticUrl; ?>cfront/css/style.css"/>
<link rel="stylesheet" type="text/css"  href="<?php echo $this->staticUrl; ?>cfront/css/reset.css"/>
<script language="javascript" type="text/javascript" src="<?php echo $this->staticUrl; ?>common/script/common.js"></script>
<script src="<?php echo $this->staticUrl; ?>common/script/jquery-1.8.0.min.js" type="text/javascript" language="javascript"></script>
</head>
<script type="text/javascript">
var passportUrl = "<?php echo $this->appInfos['passport']['url']; ?>";
function searchFunc()
{
	document.searchForm.submit();
}

function initUser()
{
	$.ajax({
		type: "get",		//使用get方法访问后台  
		dataType: "jsonp",	//返回json格式的数据  
		jsonp:"callback",
		url: passportUrl + 'uwebgame/getLoginUser',	//要访问的后台地址  
		//data:{"opp":"main"},
		async: false,
		success: function(data) {
			var username = data.username;
			var userInfoStr = '';
			$('#usernameId').val(username);
			if (username == '')	{
				userInfoStr = '<a href="' + passportUrl + 'uwebgame/login/">登录</a>|<a href="' + passportUrl + 'uwebgame/register/">注册</a>|';
			} else {
				userInfoStr = '(<span>' + username + '</span>) <a href="' + passportUrl + 'uwebgame/logout/">安全退出</a>|';
			}
			userInfoStr += '<a href="javascript: addFavorite(); void(null);">收藏本页</a>';

			$('#userInfo').html(userInfoStr);
		}
	});	
}

initUser();
</script>
<body>
<div class="header">
	<div class="nav">
		<div class="logo fl"><a href="<?php echo $this->categoryInfos[8]['bind_domain']; ?>"><img src="<?php echo $this->staticUrl; ?>cfront/images/logo.png" /></a></div>
		<p class="nav_r fr" id="userInfo"></p>
	</div>
</div>