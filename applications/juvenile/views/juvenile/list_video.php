<?php echo $this->load->view('header_base'); ?>
<link href="http://images.ccppg.cn/style/global.css" type="text/css" rel="stylesheet" />
<link href="http://images.ccppg.cn/style/index.css" type="text/css" rel="stylesheet" />
<link href="http://images.ccppg.cn/flv-media/style.css" type="text/css" rel="stylesheet" />
<script src="http://images.ccppg.cn/scripts/index.js" type="text/javascript"></script>
<script src="http://images.ccppg.cn/scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>
<body>
<div class="main">
	<div class="ccppg_top_1">
		<div class="iframe_top_logo ll"><a href="<?php echo $this->baseUrl; ?>" target="_blank"><img src="<?php echo $this->staticUrl; ?>juvenile/common/images/top_logo.gif" width="95" height="28" border="0"/></a></div>
		<div class="ccppg_top_login ll">
		<form action="http://www.ccppg.com.cn/e/enews/index.php" method="post" name="login">
			<input type="hidden" value="http://www.ccppg.com.cn/" name="location">
			<input type="hidden" value="login" name="enews">
			<input type="hidden" value="1" name="prtype">&nbsp;&nbsp;
			用户名:&nbsp;<input type="text" style="width:80px" class="ipt_text_1" id="username" name="username">&nbsp;&nbsp;
			密码:&nbsp;<input type="password" style="width:80px" class="ipt_text_1" id="password" name="password">&nbsp;
			<input type="submit" class="ipt_btn_1" value="登录" id="submit" name="loginsubmit">
			<input type="hidden" value="login" name="action">&nbsp;
			<a target="_parent" class="red" href="http://bbs.ccppg.com.cn/member.php?mod=register.php">注册</a>&nbsp;
			<a target="_parent" href="http://bbs.ccppg.com.cn/member.php?mod=logging&amp;action=login&amp;viewlostpw">忘记密码</a>
		</form>
		</div>

		<div class="ccppg_top_sch ll">
		<form onsubmit="return search_check(document.search_js1);" action="http://www.ccppg.com.cn/e/sch/index.php" method="GET" name="search_js1">
			<input type="text" title="请输入关键字" value="请输入关键字" style="width:150px; color:#CCCCCC" class="ipt_text_1" id="keyboard" name="keyboard">
			<input type="hidden" value="1" id="dotime" name="dotime">
			<select class="sel_1" id="field" name="field">
			<option value="1">不限</option>
			<option value="2">标题</option>    
			<option value="3">内容</option>
			</select> 
			<input type="submit" class="ipt_btn_1" value="搜索" id="submit" name="submit">
		</form>  
		</div>

		<div class="ccppg_top_our rr" style="position:relative" onmouseover="show_div('our_baokan')" onmouseout="hide_div('our_baokan')">
			<a href="http://www.ccppg.com.cn/baokan/qikan/">我们的书报刊</a>
			<div id="our_baokan" style="display:none">
				<ul>
					<li><a target="_blank" href="http://www.ccppg.com.cn/baokan/zhongguoshaonianbao">中国少年报</a></li>
					<li><a target="_blank" href="http://www.ccppg.com.cn/baokan/zhongguoertongbao">中国儿童报</a></li>
					<li><a target="_blank" href="http://www.ccppg.com.cn/baokan/zhongguozhongxueshengbao">中国中学生报</a></li>
					<li><a target="_blank" href="http://www.hongdaishu.com/ethb/index.aspx">中国儿童画报</a></li>
					<li><a target="_blank" href="http://www.ccppg.com.cn/baokan/zhongguoshaonianyingyubao">中国少年英语报</a></li>
					<li><a target="_blank" href="http://www.ccppg.com.cn/baokan/zhongxuesheng">中学生</a></li>
					<li><a target="_blank" href="http://www.ccppg.com.cn/baokan/zhixinjiejie">知心姐姐</a></li>
					<li><a target="_blank" href="http://www.ccppg.com.cn/baokan/zhongguoshaonianwenzhai">中国少年文摘</a></li>
					<li><a target="_blank" href="http://www.ccppg.com.cn/baokan/zhongguoshaonianertong">中国少年儿童</a></li>
					<li><a target="_blank" href="http://www.hongdaishu.com/yehb/Index.aspx">婴儿画报</a></li>
					<li><a target="_blank" href="http://www.ccppg.com.cn/baokan/zhongguokatong">中国卡通</a></li>
					<li><a target="_blank" href="http://www.ccppg.com.cn/baokan/etwx">儿童文学</a></li>
					<li><a target="_blank" href="http://www.ccppg.com.cn/baokan/womenaikexue">我们爱科学</a></li>
					<li><a target="_blank" href="http://www.youerhuabao.com/">幼儿画报</a></li>
					<li><a target="_blank" href="http://www.hongdaishu.com/ddx/Index.aspx">嘟嘟熊</a></li>
					<li><a target="_blank" href="http://www.zhiliketang.com">智力课堂</a></li>
					<li><a onclick="$('.headerOur ul').hide('slow');" class="red" href="javascript:void(0);">关闭</a></li>
					<div class="clear"></div>
				</ul>
			</div>
		</div>
		<div class="clear"></div>
	</div>

	<div class="ww bg clearfix">
		<div class="ccppg_nav ll">
			<ul class="clearfix">
				<li><a href="http://www.ccppg.com.cn/video"><img src="http://images.ccppg.cn/index_new/content/video.png" align="absmiddle" name="video" /></a></li>
				<li><a href="http://www.ccppg.com.cn/shequ"><img src="http://images.ccppg.cn/index_new/content/club.png" align="absmiddle" name="club" /></a></li>
				<li><a href="http://www.ccppg.com.cn/chengzhang"><img src="http://images.ccppg.cn/index_new/content/grow.png" align="absmiddle" name="grow" /></a></li>
				<li><a href="http://www.ccppg.com.cn/dashijie"><img src="http://images.ccppg.cn/index_new/content/games.png" align="absmiddle" name="games" /></a></li>
				<li><a href="http://www.ccread.cn"><img src="http://images.ccppg.cn/index_new/content/ccread.png" align="absmiddle" name="ccread" /></a></li>
			</ul>
		</div>
		<div class="ll">
			<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="90" height="135">
			<param name="movie" value="/d/images/index_new/nav_logo.swf" />
			<param name="quality" value="high" />
			<param name="wmode" value="Opaque" />
			<embed src="http://www.ccppg.com.cn/d/images/index_new/nav_logo.swf" quality="high" wmode="Opaque" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="90" height="135"></embed>
			</object>
		</div>
		<div class="ccppg_nav ll">
			<ul class="clearfix">
				<li><a href="http://www.ccppg.com.cn/kuaibao"><img src="http://images.ccppg.cn/index_new/content/news.png" align="absmiddle" name="news" /></a></li>
				<li><a href="http://www.ccppg.com.cn/shangcheng"><img src="http://images.ccppg.cn/index_new/content/mall.png" align="absmiddle" name="mall" /></a></li>
				<li><a href="http://www.ccppg.com.cn/baokan/qikan"><img src="http://images.ccppg.cn/index_new/content/newspaper.png" align="absmiddle" name="newspaper" /></a></li>
				<li><a href="http://www.ccppg.com.cn/bbs"><img src="http://images.ccppg.cn/index_new/content/bbs.png" align="absmiddle" name="bbs" /></a></li>
				<li><a href="http://bbs.ccppg.com.cn/home.php?action/spaces"><img src="http://images.ccppg.cn/index_new/content/blog.png" align="absmiddle" name="blog" /></a></li>
			</ul>
		</div>
	</div>

	<div class="ww">
		<div class="ccppg_red"><a href="http://www.ccppg.com.cn/"><img src="http://images.ccppg.cn/index_new/ccppg_com_cn.gif" /></a></div>
		<div class="block"><img src="http://images.ccppg.cn/index_new/top_bg_02.gif" /></div>
	</div>
	<div class="video">
		<div class="video_nav">
			<h1>分类</h1>
			<ul>
			<?php foreach ($this->categoryInfos as $categoryInfo) { if ($categoryInfo['parentid'] == 1) { ?>
				<li><button class="video_nav_<?php if ($this->catid == $categoryInfo['id']) { echo 'on'; } else { echo 'off'; } ?>" onmouseover="this.className='video_nav_on';" onmouseout="this.className='video_nav_off';" onclick="location.href='<?php echo $categoryInfo['url']; ?>';"><?php echo $categoryInfo['catname']; ?></button></li>
			<?php } } ?>
			</ul>
		</div>
		<div class="video_list">
			<?php if ($this->catid == 1) { ?>

			<?php foreach ($this->categoryInfos as $categoryInfo) { if ($categoryInfo['parentid'] == 1) { ?>
			<div class="video_list_top"><h1><?php echo $categoryInfo['catname']; ?></h1><span><a href="<?php echo $categoryInfo['url']; ?>">更多>></a></span><div class="clear"></div></div>
			<ul>
				<?php $newInfos = $controller->_getFrontInfos('juvenile', 'new', 1, 4, array('catid' => $categoryInfo['id']), array(array('inputtime', 'desc'))); ?>
				<?php foreach ($newInfos['infos'] as $newInfo) { ?>
					<li><a href="<?php echo $newInfo['url']; ?>" target="_blank" title="会飞的鞋子"><img src="<?php echo $newInfo['thumb']; ?>"/></a><br><a href="<?php echo $newInfo['url']; ?>" target="_blank" title="<?php echo $newInfo['title']; ?>"><?php echo $newInfo['title']; ?></a></li>
				<?php } ?>
			</ul>
			<?php } } ?>

			<?php } else { ?>
			<div class="video_list_top"><h1><?php echo $this->currentCategoryInfo['catname']; ?></h1><span><a href="<?php echo $this->currentCategoryInfo['url']; ?>">更多>></a></span><div class="clear"></div></div>
			<ul>
			<?php $page = intval($this->input->get_post('page')); $page = max(1, $page); $where = array('catid' => $this->catid); $newInfos = $controller->_getFrontInfos('juvenile', 'new', $page, 8, $where); ?>
			<?php foreach ($newInfos['infos'] as $newInfo) { ?>
				<li><a href="<?php echo $newInfo['url']; ?>" target="_blank" title="会飞的鞋子"><img src="<?php echo $newInfo['thumb']; ?>"/></a><br><a href="<?php echo $newInfo['url']; ?>" target="_blank" title="<?php echo $newInfo['title']; ?>"><?php echo $newInfo['title']; ?></a></li>
			<?php } ?>
			<div class="clear"></div>
			</ul>
			 <div class="pagestr"><?php echo $controller->pageStr; ?></div>
			<?php } ?>
		</div>
	</div>

	<div class="footer">
	<div class="friend_link">
		<?php $linkurlInfos = $controller->_getFrontInfos('passport', 'linkurl', 1, 4, array('type =' => 'nova'), array(array('listorder', 'desc'))); foreach ($linkurlInfos['infos'] as $linkurlInfo) { ?>
			<a href="<?php echo $linkurlInfo['url']; ?>" target="_blank"><?php echo $linkurlInfo['name']; ?></a> 
		<?php } ?>
	</div>
	<div class="other_link"><a href="http://www.ccppg.com.cn/about.html">[关于我们]</a> <a href="http://www.ccppg.com.cn/adbj.html">[广告服务]</a> <a href="http://www.ccppg.com.cn/lxwm.html">[联系我们]</a> <a href="http://www.ccppg.com.cn/shangcheng/shumu.xls">[经销商书目下载]</a> <a href=" http://www.ccppg.com.cn/zizhan/btwl/reporter/" target="_blank" title="通讯员频道">[中少通讯员频道]</a> <a href="http://www.paccp.org" target="_blank" title="童媒联盟">[童媒联盟]</a>

	</div>
	<div class="copyright">
	<h1 class="ll"><a href="http://www.hd315.gov.cn/beian/view.asp?bianhao=010202002030800475" target="_blank"><img src="http://images.ccppg.cn/index_new/icp_01.gif" /></a> <a href="http://www.bj.cyberpolice.cn/index.htm" target="_blank"><img src="http://images.ccppg.cn/index_new/icp_02.gif" /></a></h1>
	<p class="rr">团中央中国少年儿童新闻出版总社 <a href="http://www.miibeian.gov.cn/" target="_blank" class="gray">京ICP备09032992号</a><br />CHINA CHILDREN'S PRESS&PUBLICATION GROUP 声明:本网站内容未经授权不得转载或建立镜像</p>
	<div class="clear"></div>
	</div>
	</div>
	<!-- phpstat.net -->
	<script language=javascript>
	var _PCSWebSite="100003";
	var _PCSText="num1";
	</script>
	<script language="javascript" type="text/javascript" src="http://count.ccppg.cn//count/count.js" ></script>
	<!-- /phpstat.net -->
</div>
</body>
</html>