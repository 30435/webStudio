<?php echo $this->load->view('header_base'); ?>
<link href="<?php echo $this->staticUrl; ?>juvenile/common/css/common.css" type="text/css" rel="stylesheet"/>
<link href="<?php echo $this->staticUrl; ?>juvenile/common/css/global.css" type="text/css" rel="stylesheet" />
<link href="<?php echo $this->staticUrl; ?>juvenile/common/css/index.css" type="text/css" rel="stylesheet" />
<link href="<?php echo $this->staticUrl; ?>juvenile/common/css/floatAd.css" type="text/css" rel="stylesheet" />

<link type="text/css" href="<?php echo $this->staticUrl; ?>juvenile/css/lrtk.css" rel="stylesheet" />

<script src="http://www.ccppg.com.cn/scripts/jquery.min.js" type="text/javascript"></script>
<script src="http://www.ccppg.com.cn/scripts/MSClass.js" type="text/javascript"></script>
<script src="http://www.ccppg.com.cn/scripts/floatAd.js" type="text/javascript"></script>
<script src="http://www.ccppg.com.cn/scripts/common.js" type="text/javascript"></script>

<script type="text/javascript" src="http://www.ccppg.com.cn/images/index/js/jquery.js"></script>
<script type="text/javascript" src="http://www.ccppg.com.cn/images/index/js/js.js"></script>
</head>
<body>
<!--<script type="text/javascript">
var intervalId = null;
function slideAd(id,nStayTime,sState,nMaxHth,nMinHth){
  this.stayTime=nStayTime*2000 || 5000;
  this.maxHeigth=nMaxHth || 400;
  this.minHeigth=nMinHth || 1;
  this.state=sState || "down" ;
  var obj = document.getElementById(id);
  if(intervalId != null)window.clearInterval(intervalId);
  function openBox(){
   var h = obj.offsetHeight;
   obj.style.height = ((this.state == "down") ? (h + 2) : (h - 2))+"px";
    if(obj.offsetHeight>this.maxHeigth){
    window.clearInterval(intervalId);
    intervalId=window.setInterval(closeBox,this.stayTime);
    }
    if (obj.offsetHeight<this.minHeigth){
    window.clearInterval(intervalId);
    obj.style.display="none";
    }
  }
  function closeBox(){
   slideAd(id,this.stayTime,"up",nMaxHth,nMinHth);
  }
  intervalId = window.setInterval(openBox,20);
}//顶部自动伸缩广告代码
</script>
</head>
<div id="www_zzjs_net" style="background:#fff;height:12px;text-align:center;overflow:hidden;">
<img src="http://www.ccppg.com.cn/images/index/61.gif" width="990" height="400" /></div>--顶部自动伸缩广告>

<script type="text/javascript">
<!--
 slideAd('www_zzjs_net',2);
-->
</script>
<script type="text/javascript" id="bdshare_js" data="type=slide&amp;img=1&amp;pos=left&amp;uid=6519315" ></script>

<div class="header clearfix">
    <div class="ll block"><a href="<?php echo $this->baseUrl; ?>" target="_blank"><img src="<?php echo $this->staticUrl; ?>juvenile/common/images/top_logo.gif" width="95" height="28" border="0"/></a></div>

	<div class="headerLogin ll" style="display:none;">
		&nbsp;&nbsp;欢迎您，zhijinuser。
		&nbsp;&nbsp;<a target="_blank" class="blue" href="http://bbs.ccppg.com.cn/home.php?mod=space&amp;do=pm">短消息</a>
		&nbsp;&nbsp;<a target="_blank" class="blue" href="http://bbs.ccppg.com.cn/home.php?mod=space&amp;do=favorite">收藏夹</a>
		&nbsp;&nbsp;<a target="_blank" class="blue" href="http://bbs.ccppg.com.cn/home.php">会员中心</a>
		&nbsp;&nbsp;<a onclick="return confirm('确认要退出吗?');" target="_parent" href="http://www.ccppg.com.cn/e/enews?enews=exit&amp;prtype=9&amp;gotourl=http%3A%2F%2Fwww.ccppg.com.cn%2F">退出</a>
	</div>

    <div class="headerLogin ll">
	<form action="http://www.ccppg.com.cn/e/enews/index.php" method="post" name="login">
		<input type="hidden" value="http://www.ccppg.com.cn/" name="location">
		<input type="hidden" value="login" name="enews">
		<input type="hidden" value="1" name="prtype">
		&nbsp;&nbsp;用户名:&nbsp;<input type="text" style="width:80px" class="ipt_text_1" id="username" name="username">
		&nbsp;&nbsp;密码:&nbsp;<input type="password" style="width:80px" class="ipt_text_1" id="password" name="password">
		&nbsp;<input type="submit" class="ipt_btn_1" value="登录" id="submit" name="loginsubmit">
		<input type="hidden" value="login" name="action">
		&nbsp;<a target="_parent" class="red" href="http://bbs.ccppg.com.cn/member.php?mod=register.php">注册</a>
		&nbsp;<a target="_parent" href="http://bbs.ccppg.com.cn/member.php?mod=logging&amp;action=login&amp;viewlostpw">忘记密码</a>
	</form>
	</div>

    <div class="headerSearch ll">
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

    <div class="headerOur rr">
		<a target="_blank" href="http://www.ccppg.com.cn/download/class_3/2013-08-02/231.html"><b><font style=" font-family:Verdana, Geneva, sans-serif; color: #C00">English</font></b></a>&nbsp;&nbsp;
		<a onmouseover="$('.headerOur ul').show('slow');" href="http://www.ccppg.com.cn/baokan/qikan/">我们的书报刊</a>
		<ul style="display:none;" class="clearfix">
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
        </ul>
    </div>
</div>

<div class="ww mainNav clearfix">
    <ul class="ll clearfix">
        <li><a href="http://www.ccppg.com.cn/video"><img src="http://www.ccppg.com.cn/images/common/video.png" align="absmiddle" name="video" /></a></li>
        <li><a href="http://www.ccppg.com.cn/download"><img src="http://www.ccppg.com.cn/images/common/download.png" align="absmiddle" name="download" /></a></li>
        <li><a href="http://www.ccppg.com.cn/chengzhang"><img src="http://www.ccppg.com.cn/images/common/grow.png" align="absmiddle" name="grow" /></a></li>
        <li><a href="http://www.ccppg.com.cn/dashijie"><img src="http://www.ccppg.com.cn/images/common/games.png" align="absmiddle" name="games" /></a></li>
        <li><a href="http://www.ccread.cn"><img src="http://www.ccppg.com.cn/images/common/ccread.png" align="absmiddle" name="ccread" /></a></li>
    </ul>
   <div class="ll">
        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="90" height="135">
            <param name="movie" value="/d/images/index_new/nav_logo.swf" />
            <param name="quality" value="high" />
            <param name="wmode" value="Opaque" />
            <embed src="http://www.ccppg.com.cn//d/images/index_new/nav_logo.swf" quality="high" wmode="Opaque" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="90" height="135"></embed>
        </object>
    </div>
    <ul class="ll clearfix">
        <li><a href="http://www.ccppg.com.cn/kuaibao"><img src="http://www.ccppg.com.cn/images/common/news.png" align="absmiddle" name="news" /></a></li>
        <li><a href="http://shop.ccppg.com.cn"><img src="http://www.ccppg.com.cn/images/common/mall.png" align="absmiddle" name="mall" /></a></li>
        <li><a href="http://www.ccppg.com.cn/baokan/qikan"><img src="http://www.ccppg.com.cn/images/common/newspaper.png" align="absmiddle" name="newspaper" /></a></li>
        <li><a href="http://bbs.ccppg.com.cn"><img src="http://www.ccppg.com.cn/images/common/bbs.png" align="absmiddle" name="bbs" /></a></li>
        <li><a href="http://bbs.ccppg.com.cn/home.php?action/spaces""><img src="http://www.ccppg.com.cn/images/common/blog.png" align="absmiddle" name="blog" /></a></li>
    </ul>
</div>

<div class="ww mtn"><div class="topRed block"><a href="http://www.ccppg.com.cn/"><img src="http://www.ccppg.com.cn/images/common/ccppg_com_cn.gif" /></a></div></div>
<div class="ww"><script type="text/javascript" src="http://www.ccppg.com.cn/d/js/acmsd/thea97.js"></script></div>

<div class="ww clearfix mtm">
  <div class="leftBox ll clearfix">
    <div class="box1 ll">
      <div class="box_t clearfix"><h1 class="ll"><a href="http://www.ccppg.com.cn/kuaibao">精华文章</a></h1><p class="rr more" onclick="location.href='http://www.ccppg.com.cn/kuaibao'">更多</p></div>
      <ul class="mtn">
        <li><a href="http://www.ccppg.com.cn/kuaibao/yule/2013-11-11/138189.html" title="小燕子姐姐：无招胜又招" target="_blank">小燕子姐姐：无招胜又招</a></li><li><a href="http://www.ccppg.com.cn/kuaibao/tiyu/2013-11-11/138188.html" title="“贝”影斑斓" target="_blank">“贝”影斑斓</a></li><li><a href="http://www.ccppg.com.cn/chengzhang/chengchangguanzhu/2013-11-08/138161.html" title="新生第一年" target="_blank">新生第一年</a></li><li><a href="http://www.ccppg.com.cn/kuaibao/xiaoyuan/2013-11-08/138160.html" title="钻石谜案" target="_blank">钻石谜案</a></li><li><a href="http://www.ccppg.com.cn/kuaibao/xiaoyuan/2013-11-07/138142.html" title="一条逃生的鱼" target="_blank">一条逃生的鱼</a></li><li><a href="http://www.ccppg.com.cn/kuaibao/xiaoyuan/2013-11-07/138141.html" title="最后一个安打" target="_blank">最后一个安打</a></li><li><a href="http://www.ccppg.com.cn/chengzhang/chengchangguanzhu/2013-11-06/138105.html" title="帮助孩子学会应对突发性失望事件" target="_blank">帮助孩子学会应对突发性失望事件</a></li><li><a href="http://www.ccppg.com.cn/kuaibao/keji/2013-11-04/138058.html" title="燃烧的“地狱之门”" target="_blank">燃烧的“地狱之门”</a></li>      </ul>
    </div>
    <div class="box2 rr">
      <div class="box_t clearfix">
        <h1 class="ll"><a href="http://ebook.ccread.cn">好书在线读</a></h1>
        <p class="rr" onmouseover="this.className='rr on'" onmouseout="this.className='rr'" onclick="location.href='http://ebook.ccread.cn'">更多</p>
      </div>
	  <ul class="mtn nowrap">
        <li><a class="blue_2" target="_blank" title="《why?快乐学科学1》" href="http://ebook.ccread.cn/book!detail/bookid/4684/format/1">《why?快乐学科学1》</a>金基明</li>
		<li><a class="blue_2" target="_blank" title="《笨笨鼠小弟漫游记》" href="http://ebook.ccread.cn/book!detail/bookid/5769/format/2">《笨笨鼠小弟漫游记》</a>蓝雪儿</li>
		<li><a class="blue_2" target="_blank" title="《孩子都是老灵魂》" href="http://ebook.ccread.cn/book!detail/bookid/5753/format/2">《孩子都是老灵魂》</a>湖南人民出版社</li>
		<li><a class="blue_2" target="_blank" title="《解放父母 解放孩子》" href="http://ebook.ccread.cn/book!detail/bookid/4799/format/2">《解放父母 解放孩子》</a> [美] 阿黛尔 "法伯和伊莱恩 "玛兹丽施 著</li>
		<li><a class="blue_2" target="_blank" title="《一只想飞的猫》" href="http://ebook.ccread.cn/book!detail/bookid/7705/format/2">《一只想飞的猫》</a>陈伯吹</li>
		<li><a class="blue_2" target="_blank" title="《警犬汉克初次历险》" href="http://ebook.ccread.cn/book!detail/bookid/4944/format/1">《警犬汉克初次历险》</a>约翰 R. 埃里克森</li>
		<li><a class="blue_2" target="_blank" title="《万物有灵且美》" href="http://ebook.ccread.cn/book!detail/bookid/2421/format/2">《万物有灵且美》</a> [英] 吉米·哈利（James Herriot）</li>
		<li><a class="blue_2" target="_blank" title="《《Discovery Education 探索科学百科（中阶）1级A4·地球宝藏》》" href="http://ebook.ccread.cn/book!detail/bookid/5372/format/1">《《Discovery Education...》</a>"著（澳）爱德华·克洛斯 译 魏晓燕（学乐·译言）"</li>
      </ul>
    </div>
  </div>
  <div class="box3 rr">
    <div class="box3_t clearfix">
      <h1 class="ll"><a href="#">图片新闻</a></h1>
      <p class="rr more" onclick="location.href='#'">更多</p>
    </div>
    <div class="box3_b">
	<script type="text/javascript">
	<!--
	 //var interval_time=8;
	 var config="8|0xffffff|0x0099ff|50|0xffffff|0x0099ff|0x000000";
	 //-- config 参数设置 -- 自动播放时间(秒)|文字颜色|文字背景色|文字背景透明度|按键数字颜色|当前按键颜色|普通按键色彩
	 var swf_width=290;
	 var swf_height=210;
	 //var text_height=22;
	 //var text_align="center";
	 //var swf_height = focus_height+text_height;
	 var swfpath="http://www.ccppg.com.cn/e/data/images/pixviewer_b.swf";
	 //var swfpatha="http://www.ccppg.com.cn/e/data/images/pixviewer.swf";
	 
	 var files="http://att.ccppg.cn/kuaibao/photos/2013-11-07/7858a47f305dcb5048aee6e1d7fede91.jpg|http://att.ccppg.cn/kuaibao/photos/2013-11-05/61dd8ee33820a9aa70b201a8bd412640.jpg|http://att.ccppg.cn/kuaibao/photos/2013-10-31/e9a93040e63d3b88d1541b29628985b7.jpg";
	 var links="http://www.ccppg.com.cn/kuaibao/photos/2013-11-07/138159.html|http://www.ccppg.com.cn/kuaibao/photos/2013-11-05/138068.html|http://www.ccppg.com.cn/kuaibao/photos/2013-10-31/138010.html";
	 var texts="造诣几十载  国学育后人|KWN儿童微电影 & 环保绘画日记大赛颁奖典礼在京举行|中国（温州）青少年摄影教育高峰论坛召开25-27日在温州";
	 
	 document.write('<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="'+ swf_width +'" height="'+ swf_height +'">');
	 document.write('<param name="movie" value="'+swfpath+'"><param name="quality" value="high">');
	 document.write('<param name="menu" value="false"><param name="wmode" value="opaque">');
	 document.write('<param name="FlashVars" value="config='+config+'&bcastr_flie='+files+'&bcastr_link='+links+'&bcastr_title='+texts+'">');
	 document.write('<embed src="'+swfpath+'" wmode="opaque" FlashVars="config='+config+'&bcastr_flie='+files+'&bcastr_link='+links+'&bcastr_title='+texts+'& menu="false" quality="high" width="'+ swf_width +'" height="'+ swf_height +'" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />');
	 document.write('</object>');
	//-->
	</script>
	</div>
  </div>
</div>

<div class="ww clearfix mtn">
  <div class="leftBox ll block"><script src="http://www.ccppg.com.cn/d/js/acmsd/thea94.js" type="text/javascript"></script></div>
  <div class="rightBox rr block"><script src="http://www.ccppg.com.cn/d/js/acmsd/thea93.js" type="text/javascript"></script></div>
</div>

<div class="ww clearfix mtn">
  <div class="leftBox ll clearfix">
    <div class="box4 ll">
      <div class="box4_t clearfix">
        <ul class="ll clearfix iTab">
          <li class="on" id="1"><a href="http://www.ccppg.com.cn/chengzhang/">成长关注</a></li>
          <li id="2"><a href="http://bbs.ccppg.com.cn/forum-59-1.html">成长互助</a></li>
          <li id="3"><a href="http://www.ccppg.com.cn/chengzhang/chengchanggushi/">成长故事</a></li>
        </ul>
        <p class="rr more" onclick="location.href='http://www.ccppg.com.cn/chengzhang/'">更多</p>
      </div>
      <div class="iBox" id="iBox_1">
        <div class="box4_pic clearfix">
          <h1 class="ll block">
		    <a href="http://www.ccppg.com.cn/chengzhang/chengchangguanzhu/2013-09-23/137106.html" title="我患了“荣誉后遗症”" target="_blank">
			  <img src="http://att.ccppg.cn/chengzhang/chengchangguanzhu/2013-09-23/d1429e716c04ddf4458ad7d866024618.jpg" />
			</a>
          </h1>
          <p class="rr">
		    <a href="http://www.ccppg.com.cn/chengzhang/chengchangguanzhu/2013-09-23/137106.html" title="我患了“荣誉后遗症”" target="_blank">我患了“荣誉后遗症”</a><br />
            知心姐姐：　　我是一个初二的学生，初中生活改变了我许多。　　我在上学期期末考试一鸣
		  </p>
        </div>
        <div class="box4_b mtn">
          <ul>
            <li><a href="http://www.ccppg.com.cn/chengzhang/chengchangguanzhu/2013-11-08/138161.html" title="新生第一年" target="_blank">新生第一年</a></li>
			<li><a href="http://www.ccppg.com.cn/chengzhang/chengchangguanzhu/2013-11-06/138105.html" title="帮助孩子学会应对突发性失望事件" target="_blank">帮助孩子学会应对突发性失望事件</a></li>
			<li><a href="http://www.ccppg.com.cn/chengzhang/chengchangguanzhu/2013-11-04/138056.html" title="“自我保护”我们该多留个“心眼儿”" target="_blank">“自我保护”我们该多留个“心眼儿”</a></li>
			<li><a href="http://www.ccppg.com.cn/chengzhang/chengchangguanzhu/2013-10-21/137811.html" title="亲，你在以爱之名欺骗我" target="_blank">亲，你在以爱之名欺骗我</a></li>
		  </ul>
        </div>
      </div>
      <div class="iBox" id="iBox_2" style="display:none;">
        <div class="box4_pic clearfix">
          <h1 class="ll block">
		    <a href="http://bbs.ccppg.com.cn/viewthread.php?tid=914180&page=1&extra=page%3D1" title="被磨没的想象力" target="_blank">
			  <img src="http://att.ccppg.cn/chengzhang/chengchanghuzhu/2010-10-29/2e83bee3ba44e4e6df136d8b3eaecf09.jpg" />
			</a>
		  </h1>
          <p class="rr">
		    <a href="http://bbs.ccppg.com.cn/viewthread.php?tid=914180&page=1&extra=page%3D1" title="被磨没的想象力" target="_blank">被磨没的想象力</a><br />
            试问。谁还记得那段可笑的童年。 仰望着天空，总觉得白白的云朵同棉花糖一般柔软；俯 
		  </p>
        </div>
        <div class="box4_b mtn">
          <ul>
            <li><a href="http://www.ccppg.com.cn/chengzhang/chengchanghuzhu/2013-02-19/134044.html" title="儿子的虚荣让我担心" target="_blank">儿子的虚荣让我担心</a></li>
			<li><a href="http://bbs.ccppg.com.cn/viewthread.php?tid=914180&page=1&extra=page%3D1" title="被磨没的想象力" target="_blank">被磨没的想象力</a></li>
			<li><a href="http://bbs.ccppg.com.cn/thread-855352-1-1.html" title="没有组织能力，只能默默流泪吗？" target="_blank">没有组织能力，只能默默流泪吗？</a></li>
			<li><a href="http://www.ccppg.com.cn/chengzhang/chengchanghuzhu/2010-04-06/107888.html" title="在“玩”中开启心灵之旅" target="_blank">在“玩”中开启心灵之旅</a></li>          
		  </ul>
        </div>
      </div>
      <div class="iBox" id="iBox_3" style="display:none;">
        <div class="box4_pic clearfix">
          <h1 class="ll block">
		    <a href="http://www.ccppg.com.cn/chengzhang/chengchanggushi/2013-08-20/136638.html" title="梅西：感谢那些曾经看轻我的人" target="_blank">
			  <img src="http://att.ccppg.cn/chengzhang/chengchanggushi/2013-08-20/a7256680dcabb98629c94b3f131924fc.jpg" />
			</a>
		  </h1>
          <p class="rr">
		    <a href="http://www.ccppg.com.cn/chengzhang/chengchanggushi/2013-08-20/136638.html" title="梅西：感谢那些曾经看轻我的人" target="_blank">梅西：感谢那些曾经看轻我 </a><br />
            文&amp;middot;王文娟　　利昂内尔&amp;middot;安德烈斯&amp;middot;梅西，现为西班牙巴塞罗那的前锋 
		  </p>
        </div>
        <div class="box4_b mtn">
          <ul>
            <li><a href="http://www.ccppg.com.cn/chengzhang/chengchanggushi/2013-11-04/138055.html" title="莫小贝的孤独" target="_blank">莫小贝的孤独</a></li>
			<li><a href="http://www.ccppg.com.cn/chengzhang/chengchanggushi/2013-10-11/137309.html" title="瘦囡囡，胖囡囡" target="_blank">瘦囡囡，胖囡囡</a></li>
			<li><a href="http://www.ccppg.com.cn/chengzhang/chengchanggushi/2013-10-10/137289.html" title="你是一树一树的花开" target="_blank">你是一树一树的花开</a></li>
			<li><a href="http://www.ccppg.com.cn/chengzhang/chengchanggushi/2013-08-20/136638.html" title="梅西：感谢那些曾经看轻我的人" target="_blank">梅西：感谢那些曾经看轻我的人</a></li>
		  </ul>
        </div>
      </div>
    </div>
    <div class="box4 rr">
      <div class="box4_t clearfix">
        <ul class="ll clearfix iTab">
          <li class="on" id="4"><a href="http://www.ccppg.com.cn/topic/2012">中少专题</a></li>
          <li id="5"><a href="http://www.ccppg.com.cn/download">资源下载</a></li>
          <li id="6"><a href="http://bbs.ccppg.com.cn">论坛热点</a></li>
        </ul>
        <p class="rr more" onclick="location.href='http://www.ccppg.com.cn/topic/2012'">更多</p>
      </div>
      <div class="box4_b mtn iBox" id="iBox_4">
        <ul>
          <li><a href="http://www.ccppg.com.cn/huodong/zhuantihuodong/huanxiang/index.html" title="儿童文学幻想文学专题　乘着想象的翅膀让心灵自由飞翔" target="_blank">儿童文学幻想文学专题　乘着想象的翅膀让心</a></li>
		  <li><a href="http://www.ccppg.com.cn/huodong/zhuantihuodong/tsgytg/" title="为读者找好书　为好书找读者" target="_blank">为读者找好书　为好书找读者</a></li>
		  <li><a href="http://www.ccppg.com.cn/live/2012-09-10/272.html" title="植物大战僵尸系列图书发行突破500万册研讨会" target="_blank">植物大战僵尸系列图书发行突破500万册研讨会</a></li>
		  <li><a href="http://www.ccppg.com.cn/dashijie/" title="青少年阅读体验大世界周年庆" target="_blank">青少年阅读体验大世界周年庆</a></li>
		  <li><a href="http://www.ccread.cn/drift_bak.php?turn=2" title="虫虫阅读网图书漂流活动 唐山站" target="_blank">虫虫阅读网图书漂流活动 唐山站</a></li>
		  <li><a href="http://www.ccppg.com.cn/zizhan/warriors/" title="猫武士（WARRIORS）" target="_blank">猫武士（WARRIORS）</a></li>
		  <li><a href="http://www.ccppg.com.cn/2012/zhonggongshibada/" title="中国共产党第十八次全国代表大会" target="_blank">中国共产党第十八次全国代表大会</a></li>
		  <li><a href="http://www.ccppg.com.cn/topic/2012/2012-10-17/2.html" title="知心姐姐冬令营" target="_blank">知心姐姐冬令营</a></li>
		</ul>
      </div>
      <div class="box4_b mtn iBox" id="iBox_5" style="display:none;">
        <ul>
          <li><a href="http://www.ccppg.com.cn/download/class_2/2013-10-31/288.html" title="2013年12月《我们爱科学》画报版语音文件" target="_blank">2013年12月《我们爱科学》画报版语音文件</a></li>
		  <li><a href="http://www.ccppg.com.cn/download/class_2/2013-10-25/287.html" title="2013年10月《我们爱科学》画报版语音文件" target="_blank">2013年10月《我们爱科学》画报版语音文件</a></li>
		  <li><a href="http://www.ccppg.com.cn/download/class_2/2013-10-25/286.html" title="2013年11月《我们爱科学》画报版语音文件" target="_blank">2013年11月《我们爱科学》画报版语音文件</a></li>
		  <li><a href="http://www.ccppg.com.cn/download/class_4/2013-10-23/280.html" title="2013年11月 《中国少年英语报》　6年级　语音文件" target="_blank">2013年11月 《中国少年英语报》　6年级　语</a></li>
		  <li><a href="http://www.ccppg.com.cn/download/class_4/2013-10-23/279.html" title="2013年11月 《中国少年英语报》　5年级　语音文件" target="_blank">2013年11月 《中国少年英语报》　5年级　语</a></li>
		  <li><a href="http://www.ccppg.com.cn/download/class_4/2013-10-23/278.html" title="2013年11月 《中国少年英语报》　4年级　语音文件" target="_blank">2013年11月 《中国少年英语报》　4年级　语</a></li>
		  <li><a href="http://www.ccppg.com.cn/download/class_4/2013-10-23/277.html" title="2013年11月 《中国少年英语报》　3年级　语音文件" target="_blank">2013年11月 《中国少年英语报》　3年级　语</a></li>
		  <li><a href="http://www.ccppg.com.cn/download/kejian/2013-10-23/276.html" title="《中国少年英语报》2013年11月刊教师用报指南（6年级）" target="_blank">《中国少年英语报》2013年11月刊教师用报指</a></li>
		</ul>
      </div>
      <div class="box4_b mtn iBox" id="iBox_6" style="display:none;">
        <ul>
          <script type="text/javascript" src="http://bbs.ccppg.com.cn/api.php?mod=js&bid=68"></script>
        </ul>
      </div>
    </div>
  </div>
  <div class="box5 rr">
    <div class="box3_t clearfix">
      <h1 class="ll"><a href="http://www.ccppg.com.cn/kuaibao/haowai/">活动号外</a></h1>
      <p class="rr more" onclick="location.href='http://www.ccppg.com.cn/kuaibao/haowai/'">更多</p>
    </div>
    <div id="TextDiv1" class="mtn">
      <ul class="box5_b" id="TextContent1">
        <li><a href="http://www.ccppg.com.cn/kuaibao/haowai/2013-10-09/137276.html" title="“改变人生的十次对话”第四讲征集分会场" target="_blank"><strong><font color='#FF0000'>“改变人生的十次对话”第四讲征集分会场</font></strong></a></li>
		<li><a href="http://www.ccppg.com.cn/huodong/zhuantihuodong/baizhonghaoshu/xinwenzhibojian/2013-09-26/137154.html" title="郭耕主讲“改变人生的十次对话”第三讲" target="_blank"><font color='#FF0000'>郭耕主讲“改变人生的十次对话”第三讲</font></a></li>
		<li><a href="http://www.ccppg.com.cn/kuaibao/keji/2013-09-18/137132.html" title="我的科普我做主：“公众喜爱的科普作品”推介活动正在进行" target="_blank">我的科普我做主：“公众喜爱的科普作品”推介活</a></li>
		<li><a href="http://www.ccppg.com.cn/kuaibao/haowai/2013-08-08/136493.html" title="“校园图书漂流”获全民阅读年三等奖" target="_blank">“校园图书漂流”获全民阅读年三等奖</a></li>
		<li><a href="http://www.ccppg.com.cn/kuaibao/haowai/2013-07-10/136192.html" title="“改变人生的十次对话”第二讲火热开讲" target="_blank">“改变人生的十次对话”第二讲火热开讲</a></li>
		<li><a href="http://www.ccppg.com.cn/huodong/zhuantihuodong/baizhonghaoshu/xinwenzhibojian/2013-07-08/136145.html" title="“改变人生的十次对话”系列讲座第二讲即将开讲" target="_blank"><font color='#FF0000'>“改变人生的十次对话”系列讲座第二讲即将开讲</font></a></li>
		<li><a href="http://www.ccppg.com.cn/huodong/zhuantihuodong/baizhonghaoshu/xinwenzhibojian/2013-06-03/135649.html" title="“向全国青少年推荐百种优秀图书”十年盘点启动" target="_blank">“向全国青少年推荐百种优秀图书”十年盘点启动</a></li>
		<li><a href="http://www.ccppg.com.cn/huodong/zhuantihuodong/baizhonghaoshu/xinwenzhibojian/2013-05-27/135571.html" title="“改变人生的十次对话”活动即将启动 肖复兴首讲" target="_blank">“改变人生的十次对话”活动即将启动 肖复兴首讲</a></li>
		<li><a href="http://www.ccppg.com.cn/kuaibao/haowai/2013-05-28/135583.html" title="【六一】中少在线将全程直播“《儿童文学》50周年经典诵读会”" target="_blank">【六一】中少在线将全程直播“《儿童文学》50周</a></li>
		<li><a href="http://www.ccppg.com.cn/huodong/zhuantihuodong/baizhonghaoshu/xinwenzhibojian/2013-05-28/135575.html" title="2013向全国青少年推荐百种优秀图书发布会即将召开" target="_blank"><font color='#FF0000'>2013向全国青少年推荐百种优秀图书发布会即将召</font></a></li>
	  </ul>
    </div>
    <script type="text/javascript">
	new Marquee(["TextDiv1","TextContent1"],0,1,290,104,20,4000,3000,26);
    </script>
    <ul class="box5_btn clearfix">
      <li><a href="http://www.ccppg.com.cn/chengzhang" target="_blank"><img src="http://www.ccppg.com.cn/images/index/btn01_off.jpg" class="imgBtn" /></a></li>
      <li><a href="http://bbs.ccppg.com.cn/home-space-do-contribute.html" target="_blank"><img src="http://www.ccppg.com.cn/images/index/btn02_off.jpg" class="imgBtn" /></a></li>
      <li><a href="http://shop.ccppg.com.cn/" target="_blank"><img src="http://www.ccppg.com.cn/images/index/btn03_off.jpg" class="imgBtn" /></a></li>
      <li><a href="http://ebook.ccread.cn/" target="_blank"><img src="http://www.ccppg.com.cn/images/index/btn04_off.jpg" class="imgBtn" /></a></li>
    </ul>
  </div>
</div>

<div class="ww poster mtm clearfix">
  <h1 class="ll block"><script src="http://www.ccppg.com.cn/d/js/acmsd/thea100.js"></script></a></h1>
  <h2 class="ll block"><script src="http://www.ccppg.com.cn/d/js/acmsd/thea101.js"></script></a></h2>
  <h2 class="ll block"><script src="http://www.ccppg.com.cn/d/js/acmsd/thea102.js"></script></a></h2>
  <h2 class="ll block"><script src="http://www.ccppg.com.cn/d/js/acmsd/thea103.js"></script></a></h2>
</div>

<div class="ww mtm">
  <div class="media">
    <div class="media_t clearfix">
      <h1 class="ll"><a href="http://www.ccppg.com.cn/baokan/qikan">我们的书报刊</a></h1>
      <h2 class="ll nowrap">
	    <a href="http://www.ccppg.com.cn/baokan/zhiliketang/jingcaidaodu/shuxue/2013-11-08/138183.html" title="《真正的孙悟空在哪里？》" target="_blank">《真正的孙悟空在哪里？》</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="http://www.ccppg.com.cn/baokan/zhiliketang/jingcaidaodu/yuwen/2013-11-08/138180.html" title="《挑战你的“字慧”》" target="_blank">《挑战你的“字慧”》</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="http://www.ccppg.com.cn/baokan/zhiliketang/jingcaidaodu/yuwenyushuxue/2013-11-08/138176.html" title="《掌上立体迷宫》" target="_blank">《掌上立体迷宫》</a> &nbsp;&nbsp;&nbsp;&nbsp;
        <a href="http://www.ccppg.com.cn/baokan/zhiliketang/jingcaidaodu/yuwenyushuxue/2013-10-14/137467.html" title="《认识智慧板》" target="_blank">《认识智慧板》</a>
	  </h2>
      <p class="rr more" onclick="location.href='http://www.ccppg.com.cn/baokan/qikan'">更多</p>
    </div>
    <ul class="clearfix mtn">
      <li><a href="http://www.ccppg.com.cn/baokan/zhongguoshaonianbao" target="_blank" title="中国少年报"><img src="http://www.ccppg.com.cn/images/index/baokan/zgsnb.gif" /></a></li>
      <li><a href="http://www.ccppg.com.cn/baokan/zhongguoertongbao" target="_blank" title="中国儿童报"><img src="http://www.ccppg.com.cn/images/index/baokan/zgetb.gif" /></a></li>
      <li><a href="http://www.ccppg.com.cn/baokan/zhongguozhongxueshengbao" target="_blank" title="中国中学生报"><img src="http://www.ccppg.com.cn/images/index/baokan/zgzxsb.gif" /></a></li>
      <li><a href="http://www.ccppg.com.cn/baokan/zhongguoshaonianyingyubao" target="_blank" title="中国少年英语报"><img src="http://www.ccppg.com.cn/images/index/baokan/zgsnyyb.gif" /></a></li>
      <li><a href="http://www.ccppg.com.cn/baokan/zhongguokatong" target="_blank" title="中国卡通"><img src="http://www.ccppg.com.cn/images/index/baokan/katong.gif" /></a></li>
      <li><a href="http://www.hongdaishu.com/yehb/Index.aspx" target="_blank" title="婴儿画报"><img src="http://www.ccppg.com.cn/images/index/baokan/yingerhuabao.gif" /></a></li>
      <li><a href="http://www.youerhuabao.com/" target="_blank" title="幼儿画报"><img src="http://www.ccppg.com.cn/images/index/baokan/youerhuabao.gif" /></a></li>
      <li><a href="http://www.hongdaishu.com/ddx/Index.aspx" target="_blank" title="嘟嘟熊画报"><img src="http://www.ccppg.com.cn/images/index/baokan/duduxiong.gif" /></a></li>
      <li><a href="http://www.hongdaishu.com/ethb/index.aspx" target="_blank" title="中国儿童画报"><img src="http://www.ccppg.com.cn/images/index/baokan/ertonghuabao.gif" /></a></li>
      <li><a href="http://www.ccppg.com.cn/baokan/zhongxuesheng" target="_blank" title="中学生"><img src="http://www.ccppg.com.cn/images/index/baokan/zhongxuesheng.gif" /></a></li>
      <li><a href="http://www.ccppg.com.cn/baokan/ertongwenxue" target="_blank" title="儿童文学"><img src="http://www.ccppg.com.cn/images/index/baokan/ertongwenxue.gif" /></a></li>
      <li><a href="http://www.ccppg.com.cn/baokan/womenaikexue" target="_blank" title="我们爱科学"><img src="http://www.ccppg.com.cn/images/index/baokan/aikexue.gif" /></a></li>
      <li><a href="http://www.ccppg.com.cn/baokan/zhixinjiejie" target="_blank" title="知心姐姐"><img src="http://www.ccppg.com.cn/images/index/baokan/zhixinjiejie.gif" /></a></li>
      <li><a href="http://www.ccppg.com.cn/baokan/zhongguoshaonianertong" target="_blank" title="中国少年儿童"><img src="http://www.ccppg.com.cn/images/index/baokan/zgsnet.gif" /></a></li>
      <li><a href="http://www.ccppg.com.cn/baokan/zhongguoshaonianwenzhai" target="_blank" title="中国少年文摘"><img src="http://www.ccppg.com.cn/images/index/baokan/wenzhai.gif" /></a></li>
      <li><a href="http://www.zhiliketang.com" target="_blank" title="智力课堂"><img src="http://att.ccppg.cn/huodong/huodongcanyu/2013-01-24/d8e0333605c286e9f75713cbe95339bf.jpg" /></a></li>
    </ul>
  </div>
</div>

<div class="ww ccread mtm">
  <div class="ccread_t clearfix">
    <h1 class="ll"><a href="http://www.ccread.cn">CCread精选</a></h1>
    <p onclick="location.href='http://www.ccread.cn'" class="rr more">更多</p>
  </div>
  <ul class="clearfix mtm books">
    <li><a target="_blank" title="《孩子，我们来谈谈钱1：财富号历险记之换宝石的大蒜头》" href="http://ebook.ccread.cn/book!detail/bookid/5093/format/1"><img src="http://www.ccread.cn/upload/book/201203/1332988224041909491.jpg"></a><h1></h1><p><a target="_blank" title="《孩子，我们来谈谈钱1：财富号历险记之换宝石的大蒜头》" href="http://ebook.ccread.cn/book!detail/bookid/5093/format/1">孩子，我们来谈谈钱...</a></p></li><li><a target="_blank" title="《why?快乐学科学1》" href="http://ebook.ccread.cn/book!detail/bookid/4684/format/1"><img src="http://www.ccread.cn/upload/book/201201/1326336972805530739.jpg"></a><h1></h1><p><a target="_blank" title="《why?快乐学科学1》" href="http://ebook.ccread.cn/book!detail/bookid/4684/format/1">why?快乐学科学...</a></p></li><li><a target="_blank" title="《汤素兰奇迹系列·小巫婆真美丽之住在好玩街》" href="http://ebook.ccread.cn/book!detail/bookid/3693/format/1"><img src="http://www.ccread.cn/upload/book/201011/1291016392372395916.jpg"></a><h1></h1><p><a target="_blank" title="《汤素兰奇迹系列·小巫婆真美丽之住在好玩街》" href="http://ebook.ccread.cn/book!detail/bookid/3693/format/1">汤素兰奇迹系列·小...</a></p></li><li><a target="_blank" title="《笨笨鼠小弟漫游记》" href="http://ebook.ccread.cn/book!detail/bookid/5769/format/2"><img src="http://www.ccread.cn/upload/book/201212/1355450238983811338.jpg"></a><h1></h1><p><a target="_blank" title="《笨笨鼠小弟漫游记》" href="http://ebook.ccread.cn/book!detail/bookid/5769/format/2">笨笨鼠小弟漫游记</a></p></li><li><a target="_blank" title="《阿拉丁神灯》" href="http://ebook.ccread.cn/book!detail/bookid/4985/format/1"><img src="http://www.ccread.cn/upload/book/201202/1329980185598198289.jpg"></a><h1></h1><p><a target="_blank" title="《阿拉丁神灯》" href="http://ebook.ccread.cn/book!detail/bookid/4985/format/1">阿拉丁神灯</a></p></li><li><a target="_blank" title="《口袋里的太阳花》" href="http://ebook.ccread.cn/book!detail/bookid/5280/format/2"><img src="http://www.ccread.cn/upload/book/201205/1336630169556547284.jpg"></a><h1></h1><p><a target="_blank" title="《口袋里的太阳花》" href="http://ebook.ccread.cn/book!detail/bookid/5280/format/2">口袋里的太阳花</a></p></li>
  </ul>
  <ul class="mtm reviews clearfix nowrap">
    <li class="clearfix"><h1><a title="孩子中魔啦！" target="_blank" href="http://www.ccread.cn/review_detail.php?brid=6365">孩子中魔啦！</a>&nbsp;评《魔法树》</h1><p>10/06 13:09:16</p></li><li class="clearfix"><h1><a title="书评" target="_blank" href="http://www.ccread.cn/review_detail.php?brid=6325">书评</a>&nbsp;评《柳林风声》</h1><p>08/07 16:37:50</p></li><li class="clearfix"><h1><a title="我很喜欢这本书！" target="_blank" href="http://www.ccread.cn/review_detail.php?brid=6361">我很喜欢这本书！</a>&nbsp;评《《儿童文学》2014》</h1><p>09/27 11:10:30</p></li><li class="clearfix"><h1><a title="书评" target="_blank" href="http://www.ccread.cn/review_detail.php?brid=6322">书评</a>&nbsp;评《红铅笔》</h1><p>08/07 15:45:18</p></li><li class="clearfix"><h1><a title="评《瞧，这帮坏小子》" target="_blank" href="http://www.ccread.cn/review_detail.php?brid=6279">评《瞧，这帮坏小子》</a>&nbsp;评《瞧，这帮坏小子》</h1><p>07/26 21:31:01</p></li><li class="clearfix"><h1><a title="评《桥下一家人》" target="_blank" href="http://www.ccread.cn/review_detail.php?brid=6282">评《桥下一家人》</a>&nbsp;评《桥下一家人》</h1><p>07/27 21:15:57</p></li><li class="clearfix"><h1><a title="评《天蓝色的彼岸&gt;" target="_blank" href="http://www.ccread.cn/review_detail.php?brid=6273">评《天蓝色的彼岸&gt;</a>&nbsp;评《天蓝色的彼岸》</h1><p>07/25 17:44:06</p></li><li class="clearfix"><h1><a title="蓝色的兔耳朵草" target="_blank" href="http://www.ccread.cn/review_detail.php?brid=6316">蓝色的兔耳朵草</a>&nbsp;评《蓝色的兔耳朵草》</h1><p>08/05 18:25:31</p></li>
  </ul>
</div>

<div class="ww video mtm">
  <div class="ccread_t clearfix">
    <h1 class="ll"><a href="http://www.ccppg.com.cn/video">中少视频</a></h1>
    <h2 class="ll"></h2>
    <p class="rr more" onclick="location.href='http://www.ccppg.com.cn/video'">更多</p>
  </div>
  <div class="video_scroll clearfix mtm" id="still_main">
    <button title="向左翻动" type="button" class="prev" id="scrollLeftBtn"></button>
    <div class="video_cont" id="Movie_Box">
      <ul id="still_scroll_container" class="clearfix">
                <li><a href="http://www.ccppg.com.cn/video/ccppg/2013-10-28/302.html" title="改变人生的十次对话第四讲-成长的天空" target="_blank"><img src="http://att.ccppg.cn/video/ccppg/2013-10-28/dc665eac06ad973992be235167be3e0a.gif" /></a>
          <h1></h1>
          <p><a href="http://www.ccppg.com.cn/video/ccppg/2013-10-28/302.html" title="改变人生的十次对话第四讲-成长的天空" target="_blank">
            改变人生的十次对话第四讲            </a></p>
        </li>
                <li><a href="http://www.ccppg.com.cn/video/ccppg/2013-10-12/300.html" title="《儿童文学》创刊50周年纯净阅读季" target="_blank"><img src="http://att.ccppg.cn/video/ccppg/2013-10-12/193aeab7f36311500c7554a7c8663188.jpg" /></a>
          <h1></h1>
          <p><a href="http://www.ccppg.com.cn/video/ccppg/2013-10-12/300.html" title="《儿童文学》创刊50周年纯净阅读季" target="_blank">
            《儿童文学》创刊50周年纯            </a></p>
        </li>
                <li><a href="http://www.ccppg.com.cn/video/ccppg/2013-09-29/296.html" title="“改变人生的十次对话”第三讲郭耕主讲“你是我的好朋友——走进动物世界”" target="_blank"><img src="http://att.ccppg.cn/video/ccppg/2013-09-29/9b9a803c0c1aed9a8ffd68273507d393.jpg" /></a>
          <h1></h1>
          <p><a href="http://www.ccppg.com.cn/video/ccppg/2013-09-29/296.html" title="“改变人生的十次对话”第三讲郭耕主讲“你是我的好朋友——走进动物世界”" target="_blank">
            “改变人生的十次对话”第            </a></p>
        </li>
                <li><a href="http://www.ccppg.com.cn/video/ccppg/2013-08-26/294.html" title="最能打动孩子心灵的世界经典家庭诵读会——伊能静" target="_blank"><img src="http://www.ccppg.com.cn/d/file/video/class_2/flv/yinengjing.jpg" /></a>
          <h1></h1>
          <p><a href="http://www.ccppg.com.cn/video/ccppg/2013-08-26/294.html" title="最能打动孩子心灵的世界经典家庭诵读会——伊能静" target="_blank">
            最能打动孩子心灵的世界经            </a></p>
        </li>
                <li><a href="http://www.ccppg.com.cn/video/ccppg/2013-07-10/292.html" title="“改变人生的十次对话”系列讲座第二讲我的探月梦" target="_blank"><img src="http://att.ccppg.cn/kuaibao/haowai/2013-07-10/e24fd4ed5d1d3683125502cc4d2c8b2e.jpg" /></a>
          <h1></h1>
          <p><a href="http://www.ccppg.com.cn/video/ccppg/2013-07-10/292.html" title="“改变人生的十次对话”系列讲座第二讲我的探月梦" target="_blank">
            “改变人生的十次对话”系            </a></p>
        </li>
                <li><a href="http://www.ccppg.com.cn/video/ccppg/2013-06-28/290.html" title="建筑与青少年教育——访美国人民建筑基金会 候唯唯女士" target="_blank"><img src="http://att.ccppg.cn/video/ccppg/2013-06-28/19ae27aa715a74134856c9f6aba5d9b7.gif" /></a>
          <h1></h1>
          <p><a href="http://www.ccppg.com.cn/video/ccppg/2013-06-28/290.html" title="建筑与青少年教育——访美国人民建筑基金会 候唯唯女士" target="_blank">
            建筑与青少年教育——访美            </a></p>
        </li>
                <li><a href="http://www.ccppg.com.cn/video/ccppg/2013-06-01/289.html" title="《儿童文学》创刊50周年家庭诵读会" target="_blank"><img src="http://att.ccppg.cn/video/ccppg/2013-06-01/f0b3824dda1df6479584ebe28b1bf0f0.jpg" /></a>
          <h1></h1>
          <p><a href="http://www.ccppg.com.cn/video/ccppg/2013-06-01/289.html" title="《儿童文学》创刊50周年家庭诵读会" target="_blank">
            《儿童文学》创刊50周年家            </a></p>
        </li>
                <li><a href="http://www.ccppg.com.cn/video/ccppg/2013-05-29/287.html" title="国家新闻出版广电总局2013（第十次）向全国青少年推荐百种优秀图书新闻发布会暨出版座谈会" target="_blank"><img src="http://att.ccppg.cn/video/ccppg/2013-05-29/bb2ded78d683068d09830d7f218e05b0.gif" /></a>
          <h1></h1>
          <p><a href="http://www.ccppg.com.cn/video/ccppg/2013-05-29/287.html" title="国家新闻出版广电总局2013（第十次）向全国青少年推荐百种优秀图书新闻发布会暨出版座谈会" target="_blank">
            国家新闻出版广电总局2013            </a></p>
        </li>
                <li><a href="http://www.ccppg.com.cn/video/ccppg/2013-05-16/286.html" title="中央电视台少儿频道著名节目主持人金龟子姐姐见面会" target="_blank"><img src="http://att.ccppg.cn/video/ccppg/2013-05-16/188f1106f95bf7228666d139de517cd8.jpg" /></a>
          <h1></h1>
          <p><a href="http://www.ccppg.com.cn/video/ccppg/2013-05-16/286.html" title="中央电视台少儿频道著名节目主持人金龟子姐姐见面会" target="_blank">
            中央电视台少儿频道著名节            </a></p>
        </li>
                <li><a href="http://www.ccppg.com.cn/video/ccppg/2013-04-16/284.html" title="乐亭大鼓《书香校园》" target="_blank"><img src="http://att.ccppg.cn/video/ccppg/2013-04-16/f142b4f5951e3eb16c52ee9aa54def43.jpg" /></a>
          <h1></h1>
          <p><a href="http://www.ccppg.com.cn/video/ccppg/2013-04-16/284.html" title="乐亭大鼓《书香校园》" target="_blank">
            乐亭大鼓《书香校园》            </a></p>
        </li>
                <li><a href="http://www.ccppg.com.cn/video/ccppg/2013-01-31/283.html" title="《少年数学实验》视频文件" target="_blank"><img src="http://att.ccppg.cn/video/ccppg/2013-02-20/6d77ab5605f95d66eb8c3d5085dfb9f7.jpg" /></a>
          <h1></h1>
          <p><a href="http://www.ccppg.com.cn/video/ccppg/2013-01-31/283.html" title="《少年数学实验》视频文件" target="_blank">
            《少年数学实验》视频文件            </a></p>
        </li>
                <li><a href="http://www.ccppg.com.cn/video/ccppg/2013-01-11/280.html" title="中少总社《世界通史故事》新书发布" target="_blank"><img src="http://att.ccppg.cn/video/ccppg/2013-01-11/f6a6b2ad8ec2c6131265884d2b443bdf.jpg" /></a>
          <h1></h1>
          <p><a href="http://www.ccppg.com.cn/video/ccppg/2013-01-11/280.html" title="中少总社《世界通史故事》新书发布" target="_blank">
            中少总社《世界通史故事》            </a></p>
        </li>
              </ul>
    </div>
    <button title="向右翻动" type="button" class="next" id="scrollRightBtn"></button>
  </div>
  <script type="text/javascript">
/*********DIV + CSS左右交替滚动、缓动、默认静止、跳过等待时间改变方向及样式切换实例(将第WaitTime设置成60000，则第DelayTime会起作用)***************/
var MarqueeDiv4Control = new Marquee(
{
	MSClass	  : ["Movie_Box","still_scroll_container"],
	Direction : 4,
	Step	  : 0.1,
	Width	  : 920,
	Height	  : 126,
	Timer	  : 20,
	DelayTime : 3000,
	WaitTime  : 100000,
	ScrollStep: 0,
	SwitchType: 0,
	AutoStart : true
});
$("#scrollLeftBtn").click(function(){MarqueeDiv4Control.Run("Left")});	//跳过等待时间向左滚动 可以用MarqueeDiv4Control.Run(2)代替
$("#scrollRightBtn").click(function(){MarqueeDiv4Control.Run("Right")});//跳过等待时间向右滚动
$("#scrollRightBtn").attr('class','next over');				//将按钮置为不可点击(样式)
MarqueeDiv4Control.OnBound = function()
	{
		if(MarqueeDiv4Control.Bound == 2)
		{
			$("#scrollLeftBtn").attr('class', 'prev over');
		}
		else
		{
			$("#scrollRightBtn").attr('class', 'next over');
		}
	};	//滚动至边界做相应处理，切换按钮状态(样式)
MarqueeDiv4Control.UnBound = function()
	{
		$("#scrollRightBtn").disabled = $("scrollLeftBtn").disabled = false;
		$("#scrollRightBtn").attr('class', 'next');
		$("#scrollLeftBtn").attr('class', 'prev');
	};	//非边界状态处理

</script>
</div>
<div class="ww mtm">
  <script type="text/javascript" src="http://www.ccppg.com.cn/d/js/acmsd/thea92.js"></script>
</div>
<div class="ww footer">
  <ul class="mtm friendlink clearfix">
    <li><a href='http://www.ccppg.com.cn/zizhan/btwl/xiaojizhe/' title='小记者频道' target=_blank>小记者频道</a></li><li><a href='http://www.ccyl.org.cn' title='中国共青团' target=_blank>中国共青团</a></li><li><a href='http://www.zgxzjxh.com/' title='中国小作家协会' target=_blank>中国小作家协会</a></li><li><a href='http://zsjf.ccppg.com.cn' title='小作家走天下' target=_blank>小作家走天下</a></li><li><a href='http://www.zxjj.com.cn/' title='知心姐姐' target=_blank>知心姐姐</a></li><li><a href='http://zsbk.ccppg.com.cn/' title='中少期刊' target=_blank>中少期刊</a></li><li><a href='http://www.fjcp.com/' title='福建少年儿童出版社' target=_blank>福建少年儿童出版社</a></li><li><a href='http://www.xinhuanet.com/book/' title='新华网-读书频道' target=_blank>新华网-读书频道</a></li><li><a href='http://shaoer.cntv.cn' title='央视网青少频道' target=_blank>央视网青少频道</a></li><li><a href='http://www.456.net/' title='456小游戏' target=_blank>456小游戏</a></li><li><a href='http://www.haott.com/' title='好太太网' target=_blank>好太太网</a></li><li><a href='http://www.edu-sp.com/' title='清华同方学堂' target=_blank>清华同方学堂</a></li><li><a href='http://www.ccppg.com.cn/zizhan/cartoon/' title='中少动漫频道' target=_blank>中少动漫频道</a></li><li><a href='http://www.haoerge.cn/' title='儿歌网' target=_blank>儿歌网</a></li><li><a href='http://ayongshushu.ccppg.com.cn/' title='阿涌叔叔' target=_blank>阿涌叔叔</a></li><li><a href='http://www.nycr.org.cn/' title='全国少年儿童阅读年' target=_blank>全国少年儿童阅读年</a></li><li><a href='http://www.xwg.cc/' title='希望谷' target=_blank>希望谷</a></li><li><a href='http://www.ryb-baby.com/' title='红黄蓝早期教育' target=_blank>红黄蓝早期教育</a></li><li><a href='http://www.huadoo.com/' title='花朵网' target=_blank>花朵网</a></li><li><a href='http://www.mamacn.com/' title='妈妈网' target=_blank>妈妈网</a></li><li><a href='http://www.babytree.com/' title='宝宝树育儿网' target=_blank>宝宝树育儿网</a></li><li><a href='http://cn.babycenter.com/' title='宝宝中心' target=_blank>宝宝中心</a></li><li><a href='http://baby.ifeng.com/' title='凤凰网亲子频道' target=_blank>凤凰网亲子频道</a></li><li><a href='http://www.qiuq.net/' title='秋千网' target=_blank>秋千网</a></li><li><a href='http://www.qiluoxing.com/' title='挑战奇罗星' target=_blank>挑战奇罗星</a></li><li><a href='http://www.zszww.com' title='中少作文网' target=_blank>中少作文网</a></li><li><a href='http://www.bjsciencefestival.com/' title='北京科学嘉年华' target=_blank>北京科学嘉年华</a></li><li><a href='http://www.tt277.com/' title='中学生学习网' target=_blank>中学生学习网</a></li><li><a href='http://www.baijiajiangtan.org' title='百家讲坛网' target=_blank>百家讲坛网</a></li><li><a href='http://www.ibabyzone.cn/' title='宝宝地带' target=_blank>宝宝地带</a></li><li><a href='http://www.wan-ku.com/' title='玩库网' target=_blank>玩库网</a></li><li><a href='http://www.123langlang.com/' title='乐朗乐读' target=_blank>乐朗乐读</a></li><li><a href='http://www.2love.cn/' title='家长会' target=_blank>家长会</a></li><li><a href='http://www.mama.cn/' title='妈妈网' target=_blank>妈妈网</a></li><li><a href='http://baby.liao1.com/' title='辽一网亲子' target=_blank>辽一网亲子</a></li><li><a href='http://www.bbtpress.com/index.asp' title='广西师范大学出版社' target=_blank>广西师范大学出版社</a></li><li><a href='http://www.gugubaby.com/' title='亲子王国' target=_blank>亲子王国</a></li><li><a href='http://www.jzbook.net.cn/' title='九章读书网' target=_blank>九章读书网</a></li><li><a href='http://www.3ren.cn/login' title='三人行网络教育' target=_blank>三人行网络教育</a></li><li><a href='http://www.hnjy.com.cn/ ' title='为先网' target=_blank>为先网</a></li><li><a href='http://t.xhsmb.com/Special_41/Index.aspx' title='图书馆报' target=_blank>图书馆报</a></li><li><a href='http://www.chinayd.org/html/ztzz/2013qmydnh/' title='全民阅读年会' target=_blank>全民阅读年会</a></li><li><a href='http://www.kids21.cn' title='中国未成年人网' target=_blank>中国未成年人网</a></li><li><a href='http://www.zuoyebao.com ' title='作业宝' target=_blank>作业宝</a></li><li><a href='http://xinli.k618.cn/' title='未来网心理频道' target=_blank>未来网心理频道</a></li><li><a href='http://baby.sina.com.cn/' title='新浪育儿' target=_blank>新浪育儿</a></li><li><a href='http://www.shaoer.com/' title='中国少儿网' target=_blank>中国少儿网</a></li><li><a href='http://www.yaolan.com/' title='摇篮网' target=_blank>摇篮网</a></li><li><a href='http://zsbk.ccppg.com.cn/' title='中少报刊阅读推广平台' target=_parent>中少报刊阅读推广平台</a></li>  </ul>
  <div class="mtm footerLink"><a href="http://www.ccppg.com.cn/about.html">[关于我们]</a> <a href="http://www.ccppg.com.cn/adbj.html">[广告服务]</a> <a href="http://www.ccppg.com.cn/lxwm.html">[联系我们]</a> <a href="http://shop.ccppg.com.cn/shumu.xls">[经销商书目下载]</a> <a href=" http://www.ccppg.com.cn/zizhan/btwl/reporter/" target="_blank" title="通讯员频道">[中少通讯员频道]</a> <a href="http://www.paccp.org" target="_blank" title="童媒联盟">[童媒联盟]</a> <a href="http://cms.ccppg.com.cn/job.html" target="_blank">[人才招聘]</a> <a href="http://cms.ccppg.com.cn/yqlj.html" target="_blank">[友情链接]</a></div>
  <div class="mtm footerCopyright clearfix">
    <h1 class="ll"><a href="http://www.hd315.gov.cn/beian/view.asp?bianhao=010202002030800475" target="_blank"><img src="http://www.ccppg.com.cn/images/common/icp_01.gif" /></a> <a href="http://www.bj.cyberpolice.cn/index.htm" target="_blank"><img src="http://www.ccppg.com.cn/images/common/icp_02.gif" /></a></h1>
    <p class="rr">团中央中国少年儿童新闻出版总社 CHINA CHILDREN'S PRESS&PUBLICATION GROUP<br />
      声明:本网站内容未经授权不得转载或建立镜像 <a href="http://www.miibeian.gov.cn/" target="_blank" class="gray">京ICP备13015003号</a>&nbsp;&nbsp;京公网安备11010502022170 <a href="http://webscan.360.cn/index/checkwebsite/url/www.ccppg.com.cn" name="2cb2a3ab90529bb0f8dc7bcd93f65734" ></a> </p>
  </div>
</div>
<!-- phpstat.net -->
<script type="text/javascript">
 var _PCSWebSite="100003";
 var _PCSText="num1";
</script>
<script type="text/javascript" src="http://count.ccppg.cn//count/count.js" ></script>
<!-- /phpstat.net -->
<!-- Baidu Button BEGIN -->

<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000);
</script>
<!-- 代码开始 -->
<div id="code"></div>
<div id="code_img"></div>
<a id="gotop" href="javascript:void(0)"></a>
<!-- 代码结束 -->
</body>
</html>