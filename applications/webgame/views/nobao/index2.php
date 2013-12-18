<?php echo $this->load->view('header_base'); ?>
<link href="http://newsimg.5054399.com/xipu/static/www/css/style_e3.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function tracking(e){
	e = e ? e : window.event;
	var s = e.srcElement ? e.srcElement : e.target;
	var a = s.tagName;
	var u = s.href;
	var t = s.innerText ? s.innerText : s.textContent;
	if (a == "B"||a == "STRONG"){
		a = "A";
		u = s.parentNode.href;
	}
	if (a == "IMG"){
		t = u;
		u = s.parentNode.href;
	}
	if(a == "A" || a == "IMG"){
		try{
			new Image().src = "http://tracenews.5054399.com/trace.js?addd="+a+"&uddd="+escape(u)+"&tddd="+t;
		}catch(ex){}
	}
	return true;
}
</script>
<script language="javascript" src="http://news.4399.com/js/jquery-1.4.min.js"></script>
<base target="_blank" />
</head>
<body onmousedown="tracking(event);">
<div id="newtop">
  <div id="screen">
    <div class="s1"><a href="http://www.4399.com/" ><img src="http://news.4399.com/xipu/static/www/images/logo.gif" alt="4399小游戏" /></a></div>
    <div class="s2">
      <ul>
        <li><a href="http://www.4399.com/">首页</a></li>
        <li class="four"><a href="http://www.4399.com/special/19.htm">网页游戏</a></li>
		<li><a href="http://www.4399dmw.com/">动漫</a></li>
        <li style=" width:68px; text-align:left; background:url(http://www.4399.com/imageyx/seer2012/hottop.gif) 35px 5px no-repeat;"><a href="http://www.4399dmw.com/donghua/" style="color:#ff6e25;">动画片</a></li> 
      </ul>
    </div>
    <div class="s3"><a href="" onclick="qq_share();return false;"><img src="http://news.4399.com/kbxz/static/v2/images/friend.png" alt="邀请qq好友来玩西普大陆" /></a>
<a href="http://news.4399.com/xipu/toDeskIcon.php"><img src="http://newsimg.5054399.com/xipu/static/www/images/top_btn1.gif"/></a><a href="http://xp.4399.com/vip/"><img src="http://newsimg.5054399.com/xipu/static/www/images/top_btn2.gif" /></a><a href="http://my.4399.com/forums-mtag-tagid-81191.html"><img src="http://newsimg.5054399.com/xipu/static/www/images/top_btn3.gif" /></a><a href="javascript:void(0)" target="_self" onclick="addfav(event);return false;"><img src="http://newsimg.5054399.com/xipu/static/www/images/top_btn4.gif" /></a></div>
  </div>
</div>

<div class="gamebg">   
    <div class="gmtop">
        <div class="top_tj" id="onlooks">
            <ul style="margin-top:0px;">
                <li><a href="http://news.4399.com/gonglue/xipu/gl/330745.html">西普大陆12月13日更新总攻略</a></li>
<li><a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/330001.html">西普大陆煌炎龙帝在哪得 怎么得</a></li>
<li><a href="http://news.4399.com/gonglue/xipu/gl/330734.html">天天乐翻天 多种双倍免费领</a></li>
<li><a href="http://news.4399.com/gonglue/xipu/xd/325621.html">西普大陆玉叶培育配方</a></li>
            </ul>
            <span onclick="return nextLook();" hideFocus="true"></span>
        </div>
        
        <div class="qq_wb"><iframe src="http://follow.v.t.qq.com/index.php?c=follow&a=quick&name=xipudalu&style=5&t=1359530284234&f=1" frameborder="0" scrolling="auto" width="178" height="24" marginwidth="0" marginheight="0" allowtransparency="true"></iframe></div>
        <div class="twobtn">
            <a href="http://news.4399.com/gonglue/xipu/xd/331056.html" style="float:left"><img src="http://news.4399.com/uploads/userup/1312/131623033049.gif" alt="西普大陆多种双倍出现时间" /></a>
            <a href="" onclick="window.scrollTo(0,60);return false;" style="float:right;"><img src="http://newsimg.5054399.com/xipu/static/www/images/heshi.gif"/></a>
        </div>
        
        <!--分享-->
        <div class="sc_baidu">
            <div class="bdshare_t bds_tools get-codes-bdshare" id="bdshare">
                <span>分享到：</span>
                <a class="bds_tqq" title="分享到腾讯微博"></a>
                <a class="bds_qzone" title="分享到QQ空间"></a>
                <a class="bds_tqf" title="分享到腾讯朋友"></a>
                <a class="bds_tsina" title="分享到新浪微博"></a>
                <a class="bds_copy t_qq" title="分享到复制网址"></a>
            </div>
       </div>
       <!--分享end-->
   </div>
   
   <!--游戏嵌入-->
   <div class="mb_game">
        <center>
        <script language="javascript">
			var today = new Date();
			document.write('<iframe align="middle" width="960" scrolling="no" height="560" frameborder="no" src="http://xpdl999.aiwan4399.com/myindex.html?v='+today.getMonth().toString()+today.getDate().toString()+today.getHours().toString()+'" border="0" marginwidth="0" marginheight="0"></iframe>');
		</script>
        </center>
   </div>
   <!--游戏嵌入end-->
   
   <!--三个小框-->
   <div class="addbox">
        <div class="addban">     
			<script type="text/javascript" src="http://news.4399.com/baiduad/function.js"></script>
            <div class="l_ban">
                <script type="text/javascript">BaiduAdFunc('663022',445,0,0,0);</script> 
            </div>
            <div class="c_ban">
                <script type="text/javascript">BaiduAdFunc('663023',130,0,0,0);</script>
            </div>
         </div>
         
         <!--推荐游戏-->
         <div class="addxg_game">
			<a id="tuijianyouxi_pre" target="_self" href="javascript:switchpage(2,'tuijianyouxi',2);" class="xg_left"></a>
            <div class="xggame_li">
                <ul id="tuijianyouxi1">		
	<li><a href="http://www.4399.com/flash/48399.htm"><img src="http://imga5.4399.com/upload_pic/2011/12/15/4399_18064236167.gif">卡布西游</a></li>
	<li><a href="http://kbmj.4399.com/"><img src="http://news.4399.com/uploads/userup/1210/26163A1W51.gif">卡布魔境</a></li>
	<li><a href="http://www.4399.com/flash/89546.htm"><img src="http://news.4399.com/uploads/userup/1210/261P12645I.gif">你画我猜</a></li>
	<li><a href="http://huodong.4399.com/yizhou/"><img src="http://news.4399.com/uploads/userup/1208/2116463E0A.jpg">一周游戏精选</a></li>
</ul>
<ul id="tuijianyouxi2" style="display:none">
	<li><a href="http://www.4399.com/flash/18012.htm"><img lz_src="http://news.4399.com/uploads/userup/1208/21164R2K26.jpg">植物大战僵尸</a></li>
	<li><a href="http://www.4399.com/special/158.htm"><img lz_src="http://imga2.4399.com/upload_pic/2010/5/27/4399_15455980967.jpg">喜羊羊与灰太狼</a></li>
	<li><a href="http://www.4399.com/special/1.htm"><img lz_src="http://imga2.4399.com/upload_pic/2010/5/27/4399_15443969338.jpg">双人小游戏</a></li>
	<li><a href="http://www.4399.com/special/148.htm"><img lz_src="http://news.4399.com/uploads/userup/1208/21164931T41.jpg">无敌版</a></li>
</ul>
            </div>
            <a id="tuijianyouxi_nex" target="_self" href="javascript:switchpage(2,'tuijianyouxi',2);" class="xg_right"></a>
         </div>
         <!--推荐游戏-->
    </div>
    <!--三个小框end-->
    
</div>

<!--搜索导航-->
<div class="sonav">
     <div class="navbg_1">
         <div class="search">
           <form name="searchform" id="searchform" method="get" action="http://news.4399.com/xipu/search.php" onsubmit="return checkSearch();"> 
              <label><input type="text" name="q" id="stxt" value="请输入要查找的内容" style="color:#9b9b9b;" onblur="this.style.color='#9b9b9b';if(this.value=='') this.value='请输入要查找的内容';" onfocus="this.style.color='#69320f';if(this.value=='请输入要查找的内容') this.value='';" value="请输入要查找的内容" class="qq_info"></label> 
              <input type="submit" value="" class="qq_button">
           </form>
           <span><a href="http://news.4399.com/gonglue/xipu/xd/145864.html">搜索说明书</a></span>
           <a href="http://my.4399.com/jifen/yx-xpdl"><img src="http://newsimg.5054399.com/xipu/static/www/images/so_sm.gif" alt="兑换积分礼包" /></a>
        </div>
        <div class="hottag">
           <span>热门搜索：</span><a href="http://news.4399.com/xipu/search.php?q=双倍"><strong><font color="#FF0000">双倍</font></strong></a>
<a href="http://news.4399.com/gonglue/xipu/xd/154548.html" title="快速练级" target="_blank"><strong><font color="0c07f7">快速练级</font></strong><img src="http://news.4399.com/xipu/images1/hot.gif"></a>
<a href="http://news.4399.com/xipu/search.php?q=精灵召唤"><strong><font color="#FF0000">精灵召唤</font></strong></a>
<a href="http://news.4399.com/xipu/search.php?q=传说碎片"><font color="#FF0000">传说碎片</font></a>
<a href="http://news.4399.com/xipu/search.php?q=玉叶配方"><strong><font color="#FF0000">玉叶配方</font></strong></a>
        </div>
        <div class="btninfo">
            <a href="http://news.4399.com/gonglue/xipu/xd/205763.html"><img src="http://newsimg.5054399.com/xipu/static/www/images/btn_1.gif" alt="找回账号" /></a>
            <a href="http://news.4399.com/xipu/xpxz/bizhi/"><img src="http://newsimg.5054399.com/xipu/static/www/images/btn_2.gif" alt="周边下载" /></a>
            <a href="http://my.4399.com/forums-thread-tagid-81191-id-35043325.html"><img src="http://newsimg.5054399.com/xipu/static/www/images/btn_3.gif" alt="账号交易" /></a>
            <a href="http://pay.my.4399.com/?ac=paygame&union=80013&je=10&ptype=4399ykt"><img src="http://newsimg.5054399.com/xipu/static/www/images/btn_4.gif" alt="充值西普豆" /></a>
            <a href="http://news.4399.com/gonglue/xipu/zhinan/"><img src="http://newsimg.5054399.com/xipu/static/www/images/btn_5.gif" alt="新手指南" /></a>
        </div>
        
        <div class="kefuinfo">
            <div class="qq2">
               <span>专属QQ群:</span>
               <div class="top_se">
				<h2 id="show_all">212059998<b>(已满)</b></h2>
<ul style="display:none;" id="mt_select">
<li>115225973（已满）</li>
<li>212063702（已满）</li>
</ul>
               </div>
            </div>
            <img src="http://newsimg.5054399.com/xipu/static/www/images/tel.gif" />
            <a href="#" onclick="return QQnum(0);return false;" target="_self" title="4399西普大陆客服QQ" class="kfQQ"><img src="http://newsimg.5054399.com/xipu/static/www/images/qq_kf_e1.gif" /></a>
			<iframe id="showQQ" height="0" width="0" frameborder="0" style="display:none" src=""></iframe>
        </div>
        
     </div>
     
     <div class="navbg_2">
         <a href="http://news.4399.com/gonglue/xipu/jingling/fenbu.html"><img src="http://newsimg.5054399.com/xipu/static/www/images/nav_1.gif" alt="西普大陆精灵分布" /></a>
         <a href="http://news.4399.com/gonglue/xipu/boss/tianqi.html"><img src="http://newsimg.5054399.com/xipu/static/www/images/nav_2.gif" alt="西普大陆天启纪元" /></a>
         <a href="http://news.4399.com/xipu/zhuangbandaquan/"><img src="http://newsimg.5054399.com/xipu/static/www/images/nav_3.gif" alt="西普大陆装扮大全" /></a>
         <a href="http://news.4399.com/gonglue/xipu/jingling/"><img src="http://newsimg.5054399.com/xipu/static/www/images/nav_4.gif" alt="西普大陆精灵大全" /></a>
         <a href="http://news.4399.com/gonglue/xipu/boss/"><img src="http://newsimg.5054399.com/xipu/static/www/images/nav_5.gif" alt="西普大陆BOSS分布" /></a>
         <a href="http://news.4399.com/xipu/jsq/"><img src="http://newsimg.5054399.com/xipu/static/www/images/nav_6.gif" alt="西普大陆计算器" /></a>
     </div>
</div>
<!--搜索导航end-->

<!--3个banner-->

<!--3个banner/end-->

<!--推荐精灵-->
<div class="tjjl_box">
    <div class="tjjl_t">
        <div class="div_top">
            <div class="n_tab">
            <a href="http://news.4399.com/xipu/sxxk/">属性相克表</a><a href="http://news.4399.com/gonglue/xipu/xd/142755.html">性格大全</a><a href="http://news.4399.com/gonglue/xipu/xd/143033.html">特性大全</a><a href="http://news.4399.com/gonglue/xipu/xd/155677.html" class="tag110">异常状态精灵对照</a>
            </div>
            <a class="div_tit" href="http://news.4399.com/gonglue/xipu/jingling/">西普大陆热门精灵</a><a class="more a_blue" href="http://news.4399.com/gonglue/xipu/jingling/">更多&gt;&gt;</a>
        </div>
    </div>
    <div class="tjjl_c">
      <ul class="tjjl_ul">
		<li>
	<a href="http://news.4399.com/gonglue/xipu/xd/331435.html" >
	<img alt="小雪人" name="lzimg_1" lz_src="http://newsimg.5054399.com/uploads/userup/1312/141526425O3.gif" />小雪人</a>
</li>
<li>
	<a href="http://news.4399.com/gonglue/xipu/xd/331451.html" >
	<img alt="铛铛袜" name="lzimg_1" lz_src="http://newsimg.5054399.com/uploads/userup/1312/1415240GQ1.gif" />铛铛袜</a>
</li>
<li>
	<a href="http://news.4399.com/gonglue/xipu/jingling/longxi/330025.html" >
	<img alt="煌炎龙帝" name="lzimg_1" lz_src="http://newsimg.5054399.com/uploads/userup/1312/1309500A234.gif" />煌炎龙帝</a>
</li>
<li>
	<a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/330013.html" ><span class="new_bq"></span>
	<img alt="海贼鼠王" name="lzimg_1" lz_src="http://newsimg.5054399.com/uploads/userup/1312/12111J34515.gif" />海贼鼠王</a>
</li>
<li>
	<a href="http://news.4399.com/gonglue/xipu/jingling/gx/327957.html" >
	<img alt="金光翔云" name="lzimg_1" lz_src="http://newsimg.5054399.com/uploads/userup/1312/051JJO1A.gif" />金光翔云</a>
</li>
<li>
	<a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/325218.html" ><span class="hot_bq"></span>
	<img alt="绿翼花蝴" name="lzimg_1" lz_src="http://newsimg.5054399.com/uploads/userup/1311/2QT141Y16.gif" />绿翼花蝴</a>
</li>
<li>
	<a href="http://news.4399.com/gonglue/xipu/jingling/binxi/322513.html" >
	<img alt="寒擎" name="lzimg_1" lz_src="http://newsimg.5054399.com/uploads/userup/1311/211A4359415.gif" />寒擎</a>
</li>
<li>
	<a href="http://news.4399.com/gonglue/xipu/jingling/longxi/322489.html" >
	<img alt="龙麟" name="lzimg_1" lz_src="http://newsimg.5054399.com/uploads/userup/1311/211A40b296.gif" />龙麟</a>
</li>
<li>
	<a href="http://news.4399.com/gonglue/xipu/jingling/gx/319782.html" ><span class="hot_bq"></span>
	<img alt="光溟" name="lzimg_1" lz_src="http://newsimg.5054399.com/uploads/userup/1311/1415421110R.gif" />光溟</a>
</li>
<li>
	<a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/319788.html" ><span class="hot_bq"></span>
	<img alt="魔能机甲" name="lzimg_1" lz_src="http://newsimg.5054399.com/uploads/userup/1311/141539231003.gif" />魔能机甲</a>
</li>
<li>
	<a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/309636.html" ><span class="hot_bq"></span>
	<img alt="神·炎芒" name="lzimg_1" lz_src="http://newsimg.5054399.com/uploads/userup/1310/1P64205L95.gif" />神·炎芒</a>
</li>
<li>
	<a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/305172.html" ><span class="hot_bq"></span>
	<img alt="神·沧涛" name="lzimg_1" lz_src="http://newsimg.5054399.com/uploads/userup/1309/291U23G351.gif" />神·沧涛</a>
</li>
      </ul>
    <div class="clear"></div>
    </div>
    <div class="tjjl_b"></div>
</div>
<!--推荐精灵结束-->

<div class="main">
    <!--视频答疑提问-->
    <div class="l_box">
         <!--热门视频推荐-->
         <div class="t_1">
             <div class="title1"><a href="http://v.4399pk.com/xipu/">西普大陆视频</a></div>
             <div class="more_2"><a href="http://v.4399pk.com/xipu/">西普大陆视频</a></div>
         </div>
         <div class="c_1">
             <div class="tj_sp">
                 <a onclick="scroll1.ISL_GoDown();return false;" href="javascript:void(0);" class="left_ico"></a>
<div class="tjsp_list">
<div class="cw_scroll_img">
	<div class="cw_scroll">
		<div id="photo_ul" class="photo_ul" style="left:0px;">
			<ul id="l0">
			<li>
     <a href="http://v.4399pk.com/xipu/video_230072.htm" >
     <img name="lzimg_2" lz_src="http://newsimg.5054399.com/uploads/userup/1312/13094PT2P.jpg" alt="龙帝pk风采展"/>龙帝pk风采展</a>
</li>
<li>
     <a href="http://v.4399pk.com/xipu/video_230016.htm" >
     <img name="lzimg_2" lz_src="http://newsimg.5054399.com/uploads/userup/1312/1211201KR2.jpg" alt="煌炎龙帝风采展" />煌炎龙帝风采展</a>
</li>

<li>
     <a href="http://v.4399pk.com/xipu/video_229649.htm" >
     <img name="lzimg_2" lz_src="http://newsimg.5054399.com/uploads/userup/1312/061J2491143.jpg" alt="斗牛号战机甲" />斗牛号战机甲</a>
</li>
<li>
     <a href="http://v.4399pk.com/xipu/video_229409.htm" >
     <img name="lzimg_2" lz_src="http://newsimg.5054399.com/uploads/userup/1312/041212362a5.jpg" alt="3星魂RP过狂力皇" />3星魂RP过狂力皇</a>
</li>
<li>
     <a href="http://v.4399pk.com/xipu/video_227140.htm" >
     <img name="lzimg_2" lz_src="http://newsimg.5054399.com/uploads/userup/1310/31153441I49.jpg" alt="过极光角鹿" />过极光角鹿</a>
</li>
<li>
     <a href="http://v.4399pk.com/xipu/video_226466.htm" >
     <img name="lzimg_2" lz_src="http://newsimg.5054399.com/uploads/userup/1310/221Q9455126.jpg" alt="领主古堡单挑蓝龙王" />领主古堡单挑蓝龙王</a>
</li>
<li>
     <a href="http://v.4399pk.com/xipu/video_225367.htm" >
     <img name="lzimg_2" lz_src="http://newsimg.5054399.com/uploads/userup/1310/111446434139.jpg" alt="平民暴击过月刀皇" />平民暴击过月刀皇</a>
</li>
<li>
     <a href="http://v.4399pk.com/xipu/video_224579.htm" >
     <img name="lzimg_2" lz_src="http://newsimg.5054399.com/uploads/userup/1309/301IJB2Z.jpg" alt="必过长青皇打法" />必过长青皇打法</a>
</li>
<li>
     <a href="http://v.4399pk.com/xipu/video_222710.htm" >
     <img name="lzimg_2" lz_src="http://newsimg.5054399.com/uploads/userup/1309/091J40SN5.jpg" alt="犬皇打法解析"/>犬皇打法解析</a>
</li>
<li>
     <a href="http://v.4399pk.com/xipu/video_222447.htm" >
     <img name="lzimg_2" lz_src="http://newsimg.5054399.com/uploads/userup/1309/061935122333.jpg" alt="完胜戾雷皇" />完胜戾雷皇</a>
</li>
<li>
     <a href="http://v.4399pk.com/xipu/video_221240.htm" >
     <img name="lzimg_2" lz_src="http://newsimg.5054399.com/uploads/userup/1308/261I2501492.jpg" alt="必过狂力皇打法"/>必过狂力皇打法</a>
</li>
<li>
     <a href="http://v.4399pk.com/xipu/video_220384.htm" >
     <img name="lzimg_2" lz_src="http://newsimg.5054399.com/uploads/userup/1308/1G52HC4H.jpg" alt="卡鲁皇平民打法"/>卡鲁皇平民打法</a>
</li>
<li>
     <a href="http://v.4399pk.com/xipu/video_218760.htm" >
     <img name="lzimg_2" lz_src="http://newsimg.5054399.com/uploads/userup/1308/061KK3K92.jpg" alt="新手过炎凰"/>新手过炎凰</a>
</li>
<li>
     <a href="http://v.4399pk.com/xipu/video_213968.htm" >
     <img name="lzimg_2" lz_src="http://newsimg.5054399.com/uploads/userup/1307/301UZ3Q24.jpg" alt="魔魂过裂空纪"/>魔魂过裂空纪</a>
</li>
<li>
     <a href="http://v.4399pk.com/xipu/video_212900.htm" >
     <img name="lzimg_2" lz_src="http://newsimg.5054399.com/uploads/userup/1312/121JA45T4.jpg" alt="霍斯单挑耀麟布鲁" />霍斯单挑耀麟布鲁</a>
</li>
			</ul>
			<ul id="l1">
			</ul>
		</div>
	</div>
</div>
<div class="clear"></div>
</div>
                 <a onclick="scroll1.ISL_GoUp();return false;" href="javascript:void(0);" class="right_ico"></a>
             </div>
         </div>
         <div class="b_1"></div>
         <!--热门视频推荐end-->
         
         <!--小编答疑-->
         <div class="t_2">
             <div class="title"><a href="http://news.4399.com/gonglue/xipu/wenda/">小编答疑</a></div>
             <div class="more_2"><a href="http://news.4399.com/gonglue/xipu/wenda/">小编答疑</a></div>
         </div>
         <div class="c_1">
             <div class="textlist_1">
				<ul>
					<li><a href="http://news.4399.com/gonglue/xipu/wenda/330974.html">煌炎龙帝什么时候会出？</a><span>12-13</span></li><li><a href="http://news.4399.com/gonglue/xipu/wenda/330970.html">双倍西普币怎么得？什么时候有？</a><span>12-13</span></li><li><a href="http://news.4399.com/gonglue/xipu/wenda/330962.html">双倍星魂怎么得？什么时候有？</a><span>12-13</span></li><li><a href="http://news.4399.com/gonglue/xipu/wenda/330960.html">双倍天启能量怎么得？什么时候有？</a><span>12-13</span></li><li><a href="http://news.4399.com/gonglue/xipu/wenda/330947.html">晨露怎么得？有什么用？</a><span>12-13</span></li>
				</ul>
              <div class="clear"></div>
           </div> 
         </div>
         <div class="b_1"></div>
         <!--小编答疑end-->
         
         <!--我要提问-->
         <div class="t_3">
             <div class="title"><a href="http://wenda.4399.com/xipu/">西普大陆问答</a></div>
             <div class="more_2"><a href="http://wenda.4399.com/xipu/">西普大陆问答</a></div>
         </div>
         <div class="c_1">
            <div class="aq_put">
                   <form action="http://wenda.4399.com/search.php" method="get" name="wendaform" id="wendaform" onsubmit="ckwenda();return false;"> 
                      <label><input type="text" style="color:#CCC;" onblur="this.style.color='#333';if(this.value=='') this.value='请输入要搜索的问题';" onfocus="this.style.color='#333';if(this.value=='请输入要搜索的问题') this.value='';" value="请输入要搜索的问题" class="aq_info" name="q" id="wendaq"></label> 
                      <input onclick="ckwenda();return false;" type="image" src="http://newsimg.5054399.com/xipu/static/www/images/so_da.gif" value="" class="aq_button">
                   </form>
                   <a href="http://wenda.4399.com/myquestion.php?op=add"><img src="http://newsimg.5054399.com/xipu/static/www/images/tiwen.gif" /></a>
             </div>
            <div class="textlist_2">
              <ul>
                  <li><a href='http://wenda.4399.com/question/50/505748.html'>什么精灵能减闪避</a><span>12-15</span></li><li><a href='http://wenda.4399.com/question/50/505289.html'>西瓜战神的技能有减物防的吗？</a><span>12-14</span></li><li><a href='http://wenda.4399.com/question/50/505263.html'>蟠桃大圣好吗?</a><span>12-14</span></li>            
              </ul>
              <div class="clear"></div>
            </div> 
         </div>
         <div class="b_1"></div>
         <!--我要提问end-->
    </div>
    <!--视频答疑提问end-->
    
    <!--中间推荐-->
    <div class="tjtext_bg">
        <div class="tj_wz">
		<h2><a href="http://news.4399.com/gonglue/xipu/gl/330745.html">西普大陆12月13日更新总攻略</a></h2>
            <p>圣诞狂欢前奏，欢乐送送送活动中有超多传说碎片和点心哦！天天乐翻天开启双倍日历，在特定日期中有超多金钱、星魂等双倍奖励，赶快来看看吧~<a href="http://news.4399.com/gonglue/xipu/gl/330745.html">[详情]</a></p>
        </div>
        <div class="clbg_1">
            <ul>
                <li><a id="hot_new_t1" href="" class="on" onclick="hot_new_change(1);return false;">热门文章</a></li>
                <li><a id="hot_new_t2" href="" onclick="hot_new_change(2);return false;">最新文章</a></li>
            </ul>
            <div class="gx_info"><a href="http://news.4399.com/xipu/new/">今日更新<span>5</span>篇</a></div>
        </div>
        
        <div class="textlist_3">
          <ul id="hot_new_1">
			<li><a href="http://news.4399.com/gonglue/xipu/xd/330805.html"><font color='#CC0000'>西普大陆钱多多交易行怎么赚最多钱</font><img src='http://newsimg.5054399.com/xipu/static/www/images/new.gif'></a><span>12-16</span></li><li><a href="http://news.4399.com/gonglue/xipu/xd/331451.html"><font color='#CC0000'>西普大陆铛铛袜圣诞精灵预测</font></a><span>12-14</span></li><li><a href="http://news.4399.com/gonglue/xipu/xd/331435.html"><font color='#CC0000'>西普大陆小雪人圣诞精灵预测</font></a><span>12-14</span></li><li><a href="http://news.4399.com/gonglue/xipu/gonggao/331396.html"><font color='#990000'>西普大陆12月20日预告</font></a><span>12-14</span></li><li><a href="http://news.4399.com/gonglue/xipu/xd/331125.html"><font color='#CC0000'>西普大陆快速收集欢乐送送送兑换材料</font></a><span>12-13</span></li><li><a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/330001.html"><font color='#006600'>西普大陆煌炎龙帝在哪得 怎么得</font></a><span>12-13</span></li><li><a href="http://news.4399.com/gonglue/xipu/gl/330734.html"><font color='#CC0000'>西普大陆天天乐翻天 多种双倍免费领</font></a><span>12-13</span></li><li><a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/329985.html"><font color='#006600'>西普大陆水手小鼠在哪得 怎么得</font></a><span>12-12</span></li><li><a href="http://news.4399.com/gonglue/xipu/xd/260920.html"><font color='#CC0000'>西普大陆驯宠师快速升级详解</font></a><span>12-11</span></li><li><a href="http://news.4399.com/gonglue/xipu/xd/261143.html">西普大陆驯宠师头衔挑战详解</a><span>12-10</span></li><li><a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/281996.html"><font color='#006600'>西普大陆基扭龙在哪得 怎么得</font></a><span>12-10</span></li><li><a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/217537.html"><font color='#006600'>西普大陆馋嘴小魔在哪得 怎么得</font></a><span>12-10</span></li><li><a href="http://news.4399.com/gonglue/xipu/xd/328170.html"><font color='#CC0000'>西普大陆怎么快速得精灵卡</font></a><span>12-06</span></li><li><a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/327930.html"><font color='#006600'>西普大陆云豆怎么得 在哪得</font></a><span>12-05</span></li>                      
          </ul>

		  <ul id="hot_new_2" style="display:none;">
             <li><a href="http://my.4399.com/forums-thread-tagid-81191-id-38398434.html"><font color='#CC0000'>12月新人报道帖 最后一个月，冲刺啦</font><img src='http://newsimg.5054399.com/xipu/static/www/images/new.gif'></a><span>12-01</span></li><li><a href="http://news.4399.com/gonglue/xipu/xd/330805.html"><font color='#CC0000'>西普大陆钱多多交易行怎么赚最多钱</font><img src='http://newsimg.5054399.com/xipu/static/www/images/new.gif'></a><span>12-16</span></li><li><a href="http://news.4399.com/gonglue/xipu/shouhui/331688.html">西普玩家手绘 自创精灵十尾<img src='http://newsimg.5054399.com/xipu/static/www/images/new.gif'></a><span>12-16</span></li><li><a href="http://news.4399.com/gonglue/xipu/manhua/331679.html">西普大陆漫画-新手打劫<img src='http://newsimg.5054399.com/xipu/static/www/images/new.gif'></a><span>12-16</span></li><li><a href="http://news.4399.com/gonglue/xipu/manhua/331664.html">西普大陆漫画-我看，完了<img src='http://newsimg.5054399.com/xipu/static/www/images/new.gif'></a><span>12-16</span></li><li><a href="http://news.4399.com/gonglue/xipu/xiaoshuo/331625.html">圣灵编年史第八十二章——不要说话<img src='http://newsimg.5054399.com/xipu/static/www/images/new.gif'></a><span>12-16</span></li><li><a href="http://news.4399.com/gonglue/xipu/xd/331451.html"><font color='#CC0000'>西普大陆铛铛袜圣诞精灵预测</font></a><span>12-14</span></li><li><a href="http://my.4399.com/forums-thread-tagid-81191-id-38516893.html">西普大陆最快赚钱法（一夜暴富）</a><span>12-14</span></li><li><a href="http://news.4399.com/gonglue/xipu/xd/331435.html"><font color='#CC0000'>西普大陆小雪人圣诞精灵预测</font></a><span>12-14</span></li><li><a href="http://news.4399.com/gonglue/xipu/gonggao/331396.html"><font color='#990000'>西普大陆12月20日预告</font></a><span>12-14</span></li><li><a href="http://news.4399.com/gonglue/xipu/xiaoshuo/331335.html">圣灵编年史第八十一章——圣山</a><span>12-14</span></li><li><a href="http://news.4399.com/gonglue/xipu/manhua/331316.html">西普大陆漫画-不环保的木木</a><span>12-14</span></li><li><a href="http://news.4399.com/gonglue/xipu/manhua/331307.html">西普大陆漫画-守护农场的精灵</a><span>12-14</span></li><li><a href="http://news.4399.com/gonglue/xipu/shouhui/331299.html">西普玩家板绘 自创精灵银翼天使</a><span>12-14</span></li>                        
          </ul>
          <div class="clear"></div>
       </div> 
    </div>
    <!--中间推荐end-->
    
    <!--右侧-->
    <div class="r_box">
        <div class="rebg" id="hotimg">
            <div class="hd_qie week_img_a">
                <ul>
                    <li><a href="" class="on">1</a></li>
                    <li><a href="">2</a></li>
                    <li><a href="">3</a></li>
                    <li><a href="">4</a></li>
                </ul>
            </div>
            
            <div class="sideshow" >
                <ul class="week_img_ul">
<li><a href="http://news.4399.com/gonglue/xipu/xd/331056.html"><img src="http://newsimg.5054399.com/uploads/userup/1312/1316040644V.jpg" alt="西普大陆12月多重双倍出现时间表" /></a></li>
<li style="display:none"><a href="http://news.4399.com/gonglue/xipu/gl/330689.html" title="西普大陆欢乐送送送"><img src="http://newsimg.5054399.com/uploads/userup/1312/1316043b9E.jpg" alt="西普大陆欢乐送送送" /></a></li><li style="display:none"><a href="http://news.4399.com/gonglue/xipu/gl/328212.html" title="西普大陆洛奇·友谊第一"><img src="http://newsimg.5054399.com/uploads/userup/1312/0616220421R.jpg" alt="西普大陆洛奇·友谊第一" /></a></li><li style="display:none"><a href="http://news.4399.com/gonglue/xipu/gl/328204.html" title="西普大陆联盟契约精灵召唤"><img src="http://newsimg.5054399.com/uploads/userup/1312/061I300c34.jpg" alt="西普大陆联盟契约精灵召唤" /></a></li>
                </ul>
            </div>
        </div><!--热点幻灯end-->
        
        <div class="jiyu_bg">
		<div class="wypl"><a href="http://news.4399.com/gonglue/xipu/jiyu/330256.html">我要评论</a></div>
            <div class="yuyan">                
                <div class="xb_img"><img src="http://news.4399.com/uploads/userup/1307/120U23WK1.gif"/></div>
                <div class="xb_text">
					明年法定假日时间公布咯~不幸的是元旦只放一天，春节居然不放假...
                </div>
            </div>
			<script type="text/javascript">var tid = 330256</script>    
            <div class="bqing">
				<div id="win_xbjy" style="display:none;" class="tcbg">
                    <div  class="close"><a href="" onclick="$('#win_xbjy').hide();return false;"></a></div>
                    <div class="clear"></div>
                    <div id="win_xbjy_html" class="tctext"></div>
                </div>
                <ul>
                    <li>
						<div id="nob0" class="nob" style="display:none"></div>
                        <div class="piao_bg">
                            <div class="p_fd" style=""></div>
                        </div>
                        <div class="face"><a href="" onclick="xbjy_vote(0);return false;"><img src="http://newsimg.5054399.com/xipu/static/www/images/face1.gif" /></a></div>
                        <div class="bq_btn"><a href="" onclick="xbjy_vote(0);return false;"><img src="http://newsimg.5054399.com/xipu/static/www/images/bq_1.gif" /></a></div>
                    </li>
                    <li>
						<div id="nob1" class="nob" style="display:none"></div>
                        <div class="piao_bg">
                            <div class="p_fd" style=""></div>
                        </div>
                        <div class="face"><a href="" onclick="xbjy_vote(1);return false;"><img src="http://newsimg.5054399.com/xipu/static/www/images/face2.gif" /></a></div>
                        <div class="bq_btn"><a href="" onclick="xbjy_vote(1);return false;"><img src="http://newsimg.5054399.com/xipu/static/www/images/bq_2.gif" /></a></div>
                    </li>
                    <li>
						<div id="nob2" class="nob" style="display:none"></div>
                        <div class="piao_bg" >
                            <div class="p_fd" style=""></div>
                        </div>
                        <div class="face"><a href="" onclick="xbjy_vote(2);return false;"><img src="http://newsimg.5054399.com/xipu/static/www/images/face3.gif" /></a></div>
                        <div class="bq_btn"><a href="" onclick="xbjy_vote(2);return false;"><img src="http://newsimg.5054399.com/xipu/static/www/images/bq_3.gif" /></a></div>
                    </li>
                    <li>
						<div id="nob3" class="nob" style="display:none"></div>
                        <div class="piao_bg">
                            <div class="p_fd" style=""></div>
                        </div>
                        <div class="face"><a href="" onclick="xbjy_vote(3);return false;"><img src="http://newsimg.5054399.com/xipu/static/www/images/face4.gif" /></a></div>
                        <div class="bq_btn"><a href="" onclick="xbjy_vote(3);return false;"><img src="http://newsimg.5054399.com/xipu/static/www/images/bq_4.gif" /></a></div>
                    </li>
                </ul>
            </div>
            <div class="jiyu_text">
               <div class="ckxq"><a href="http://news.4399.com/gonglue/xipu/jiyu/328374.html">查看详细</a></div>
				明年的法定节假日到现在都没有公布，小西普们元旦怎么放假的呢？...
            </div>
        </div><!--小编寄语end-->
    </div>
    <!--右侧-end-->
    <div class="clear"></div>
</div>

<div class="main">
    <div class="leftbox_1">
        <!--精灵攻略-->
        <div class="t_4">
            <div class="title"><a href="http://news.4399.com/gonglue/xipu/jlgl/">西普大陆精灵攻略</a></div>
            <div class="more_1"><a href="http://news.4399.com/gonglue/xipu/jlgl/">西普大陆精灵攻略</a></div>
        </div>
        <div class="c_2">
            <div class="textlist_4">
               <ul>			  
<li><em><a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/" class="buzhuo">【捕捉】</a></em><p><a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/330001.html">煌炎龙帝在哪得 怎么得</a></p><span>12-13</span></li><li><em><a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/" class="buzhuo">【捕捉】</a></em><p><a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/329985.html">水手小鼠在哪得 怎么得</a></p><span>12-12</span></li><li><em><a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/" class="buzhuo">【捕捉】</a></em><p><a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/281996.html">基扭龙在哪得 怎么得</a></p><span>12-10</span></li><li><em><a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/" class="buzhuo">【捕捉】</a></em><p><a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/217537.html">馋嘴小魔在哪得 怎么得</a></p><span>12-10</span></li><li><em><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/" class="lianji">【练级】</a></em><p><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/329555.html">云雀练级与解析</a></p><span>12-10</span></li><li><em><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/" class="lianji">【练级】</a></em><p><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/328857.html">金光翔云练级与解析</a></p><span>12-07</span></li>
               </ul>
               <div class="clear"></div>
           </div> 
        </div>
        <div class="b_2"></div>
        <!--精灵攻略-end-->
        <!--工具-->
        <div class="t_5"></div>
        <div class="c_2">
            <div class="tool">
                <ul>
                    <li class="tool_1"><span class="hot_ico"></span><a href="http://news.4399.com/gonglue/xipu/jingling/fenbu.html">精灵分布大全</a></li>
<li class="tool_1"><span class="hot_ico"></span><a href="http://news.4399.com/gonglue/xipu/xd/171935.html">怪堆分布大全</a></li>
<li class="tool_1"><span class="hot_ico"></span><a href="http://news.4399.com/gonglue/xipu/xd/191668.html">各系练级路线</a></li>
<li class="tool_1"><span class="hot_ico"></span><a href="http://news.4399.com/xipu/sxxk/">属性相克</a></li>
<li class="tool_2"><a href="http://news.4399.com/gonglue/xipu/xd/143033.html">特性大全</a></li>
<li class="tool_1"><span class="hot_ico"></span><a href="http://news.4399.com/gonglue/xipu/xd/142755.html">性格大全</a></li>
<li class="tool_2"><a href="http://news.4399.com/xipu/jsq/">精灵计算器</a></li>
<li class="tool_1"><span class="hot_ico"></span><a href="http://news.4399.com/gonglue/xipu/xd/155677.html">异常状态精灵</a></li>
<li class="tool_2"><a href="http://news.4399.com/gonglue/xipu/xd/142648.html">捕捉技巧</a></li>
                </ul>
            </div>
        </div>
        <div class="b_2"></div>
        <!--工具-end-->
    </div>
    
    <div class="rightbox_1">
         <!--热门boss推荐-->
         <div class="t_6">
             <div class="title"><a href="http://news.4399.com/gonglue/xipu/boss/">热门boss推荐</a></div>
             <div class="more_1"><a href="http://news.4399.com/gonglue/xipu/boss/">热门boss推荐</a></div>
         </div>
         <div class="c_3">
             <div class="boss_li">
                 <ul>
<li><a href="http://news.4399.com/gonglue/xipu/boss/290635.html"><img name="lzimg_3" lz_src="http://newsimg.5054399.com/uploads/userup/1308/152022011043.gif" alt="卡鲁皇" >卡鲁皇</a></li><li><a href="http://news.4399.com/gonglue/xipu/boss/234053.html"><img name="lzimg_3" lz_src="http://newsimg.5054399.com/uploads/130220/_1G949159.gif" alt="圣·耀麟" >圣·耀麟</a></li><li><a href="http://news.4399.com/gonglue/xipu/boss/224308.html"><img name="lzimg_3" lz_src="http://newsimg.5054399.com/uploads/130220/_1H10SO.gif" alt="烈锯螳螂" >烈锯螳螂</a></li><li><a href="http://news.4399.com/gonglue/xipu/boss/220226.html"><img name="lzimg_3" lz_src="http://newsimg.5054399.com/uploads/130220/_1H230133.gif" alt="飞廉" >飞廉</a></li><li><a href="http://news.4399.com/gonglue/xipu/boss/220071.html"><img name="lzimg_3" lz_src="http://newsimg.5054399.com/uploads/130220/_1H254104.gif" alt="费尔斯" >费尔斯</a></li>  
                 </ul>
             </div>
         </div>
         <!--热门boss推荐end-->
         
         <!--boss攻略经验心得-->
         <div class="b_3">
             <div class="lf">
                 <div class="lftop">
                     <div class="title"><a href="http://news.4399.com/gonglue/xipu/bossgl/">西普大陆boss攻略</a></div>
                     <div class="more_1"><a href="http://news.4399.com/gonglue/xipu/bossgl/">西普大陆boss攻略</a></div>
                     <div class="tougao_2"><a href="http://huodong.4399.com/comm/tougao/index.php?zt=102"><img src="http://newsimg.5054399.com/xipu/static/www/images/tougao2.gif" /></a></div>
                 </div>
                 <div class="textlist_5">
                      <ul>
						  <li><a href="http://news.4399.com/gonglue/xipu/bossgl/291345.html">平民轻松打卡鲁皇视频解析</a><span>12-12</span></li><li><a href="http://news.4399.com/gonglue/xipu/xd/220514.html">快速过飞廉</a><span>12-07</span></li><li><a href="http://news.4399.com/gonglue/xipu/xd/220382.html">快速过费尔斯</a><span>12-07</span></li><li><a href="http://news.4399.com/gonglue/xipu/xd/234431.html">圣·耀麟物攻打法视频攻略</a><span>12-05</span></li><li><a href="http://news.4399.com/gonglue/xipu/xd/224451.html">快速过烈锯螳螂打法</a><span>12-01</span></li>
                      </ul>
                      <div class="clear"></div>
                 </div> 
             </div>
             
             <div class="rf">
                 <div class="lftop">
                     <div class="title"><a href="http://news.4399.com/gonglue/xipu/xd/">西普大陆经验心得</a></div>
                     <div class="more_1"><a href="http://news.4399.com/gonglue/xipu/xd/">西普大陆经验心得</a></div>
                     <div class="tougao_2"><a href="http://huodong.4399.com/comm/tougao/index.php?zt=102"><img src="http://newsimg.5054399.com/xipu/static/www/images/tougao2.gif" /></a></div>
                 </div>
                 <div class="textlist_5">
                      <ul>
<li><a href="http://news.4399.com/gonglue/xipu/xd/330805.html">钱多多交易行怎么赚最多钱<img border='0' src='http://newsimg.5054399.com/xipu/static/www/images/new.gif'></a><span>12-16</span></li><li><a href="http://news.4399.com/gonglue/xipu/xd/331451.html">铛铛袜圣诞精灵预测</a><span>12-14</span></li><li><a href="http://news.4399.com/gonglue/xipu/xd/331435.html">小雪人圣诞精灵预测</a><span>12-14</span></li><li><a href="http://news.4399.com/gonglue/xipu/xd/331125.html">快速收集欢乐送送送兑换材料</a><span>12-13</span></li><li><a href="http://news.4399.com/gonglue/xipu/xd/331056.html">12月多重双倍出现时间表</a><span>12-13</span></li>                     
                      </ul>
                      <div class="clear"></div>
                 </div> 
             </div>
         </div>
         <!--boss攻略经验心得end-->
    </div>
    
    <div class="clear"></div>
</div>

<!--调查视频等-->
<div class="main">
    <div class="leftbox_2">
         <div class="t_7"></div>
         <div class="c_4" style="height:119px;" id="week_diaoc">
             <div class="diaocha" style="display:none;"></div>
         </div>
         <div class="b_4"></div><!--调查end-->
         
         <div class="t_8">
             <div class="title"><a href="http://news.4399.com/gonglue/xipu/zhiye/">西普大陆职业攻略</a></div>
         </div>
         <div class="c_4">
             <div class="zhiye">
                 <ul>
					<li class="zhiyeimg"><a href="http://news.4399.com/gonglue/xipu/zhiye/160035.html"><img name="lzimg_4" lz_src="http://newsimg.5054399.com/uploads/120526/_160129530.jpg" alt="造型师"/></a></li>
                    <li class="zycl_2">造型师</li>
                    <li class="zycl_1">暂未开启</li>
                    <li class="zycl_1">暂未开启</li>
                    <li class="zycl_1">暂未开启</li>
                    <li class="zycl_1">暂未开启</li>
                 </ul>
             </div>
         </div>
         <div class="b_4"></div><!--职业end-->
    </div>
    
    <!--精彩视频-->
    <div class="rightbox_1">
        <div class="t_9">
            <div class="title"><a href="http://v.4399pk.com/xipu/">西普大陆视频</a></div>
            
            <div class="vcl">
                <ul>
                   <li><a onmouseover="sel_sp('all')" id="a_sp_all" href="http://v.4399pk.com/xipu/" class="on">最新视频</a></li>
				   <li><a onmouseover="sel_sp('boss')" id="a_sp_boss" href="http://v.4399pk.com/xipu/list_new_7428.htm">BOSS打法</a></li>
				   <li><a onmouseover="sel_sp('rewu')" id="a_sp_rewu" href="http://v.4399pk.com/xipu/list_new_7427.htm">活动任务</a></li>
				   <li><a onmouseover="sel_sp('user')" id="a_sp_user" href="http://v.4399pk.com/xipu/list_new_8923.htm">玩家风采</a></li>
                   <li><a onmouseover="sel_sp('editor')" id="a_sp_editor" href="http://v.4399pk.com/xipu/list_new_9018.htm">小编精选</a></li>                  
                </ul>
            </div>
            
            <div class="more_2"><a href="http://v.4399pk.com/xipu/">西普大陆视频</a></div>
        </div>
        <div class="c_5">
             <div class="video_list">
<ul class="jcsp_ul" id="sp_all">
<li><a href="http://v.4399pk.com/xipu/video_230253.htm"><img name="lzimg_4" lz_src="http://vedio.5054399.com/video/upload/1387002438.jpg" alt="新手烈风过费尔斯"/>新手烈风过费尔斯</a></li><li><a href="http://v.4399pk.com/xipu/video_230072.htm"><img name="lzimg_4" lz_src="http://vedio.5054399.com/video/upload/1386894775.jpg" alt="煌炎龙帝pk风采展"/>煌炎龙帝pk风采展</a></li><li><a href="http://v.4399pk.com/xipu/video_230016.htm"><img name="lzimg_4" lz_src="http://vedio.5054399.com/video/upload/1386816452.jpg" alt="煌炎龙帝风采展"/>煌炎龙帝风采展</a></li><li><a href="http://v.4399pk.com/xipu/video_229837.htm"><img name="lzimg_4" lz_src="http://vedio.5054399.com/video/upload/1386662243.jpg" alt="四斗牛战队打机甲"/>四斗牛战队打机甲</a></li><li><a href="http://v.4399pk.com/xipu/video_229649.htm"><img name="lzimg_4" lz_src="http://vedio.5054399.com/video/upload/1386320349.jpg" alt="四星魂斗牛号战机甲"/>四星魂斗牛号战机甲</a></li><li><a href="http://v.4399pk.com/xipu/video_229648.htm"><img name="lzimg_4" lz_src="http://vedio.5054399.com/video/upload/1386320193.jpg" alt="寒假集结令"/>寒假集结令</a></li><li><a href="http://v.4399pk.com/xipu/video_229524.htm"><img name="lzimg_4" lz_src="http://vedio.5054399.com/video/upload/1386227603.jpg" alt="土豪混战唐纳"/>土豪混战唐纳</a></li><li><a href="http://v.4399pk.com/xipu/video_229409.htm"><img name="lzimg_4" lz_src="http://vedio.5054399.com/video/upload/1386128889.jpg" alt="三星魂RP暴击过狂力皇"/>三星魂RP暴击过狂力皇</a></li>
</ul>
<ul class="jcsp_ul" id="sp_boss" style="display:none">
<li><a href="http://v.4399pk.com/xipu/video_230253.htm"><img lz_src="http://vedio.5054399.com/video/upload/1387002438.jpg" alt="新手烈风过费尔斯"/>新手烈风过费尔斯</a></li><li><a href="http://v.4399pk.com/xipu/video_230016.htm"><img lz_src="http://vedio.5054399.com/video/upload/1386816452.jpg" alt="煌炎龙帝风采展"/>煌炎龙帝风采展</a></li><li><a href="http://v.4399pk.com/xipu/video_229524.htm"><img lz_src="http://vedio.5054399.com/video/upload/1386227603.jpg" alt="土豪混战唐纳"/>土豪混战唐纳</a></li><li><a href="http://v.4399pk.com/xipu/video_229409.htm"><img lz_src="http://vedio.5054399.com/video/upload/1386128889.jpg" alt="三星魂RP暴击过狂力皇"/>三星魂RP暴击过狂力皇</a></li><li><a href="http://v.4399pk.com/xipu/video_229003.htm"><img lz_src="http://vedio.5054399.com/video/upload/1385438430.jpg" alt="过最强战力比拼蝎子"/>过最强战力比拼蝎子</a></li><li><a href="http://v.4399pk.com/xipu/video_228776.htm"><img lz_src="http://vedio.5054399.com/video/upload/1385110442.jpg" alt="过最强战力比拼狐姬"/>过最强战力比拼狐姬</a></li><li><a href="http://v.4399pk.com/xipu/video_228573.htm"><img lz_src="http://vedio.5054399.com/video/upload/1384849417.jpg" alt="新手过最强战力桃圣"/>新手过最强战力桃圣</a></li><li><a href="http://v.4399pk.com/xipu/video_228538.htm"><img lz_src="http://vedio.5054399.com/video/upload/1384762317.jpg" alt="最强战力比拼队长打法"/>最强战力比拼队长打法</a></li>
</ul>
<ul class="jcsp_ul" id="sp_rewu" style="display:none">
<li><a href="http://v.4399pk.com/xipu/video_229837.htm"><img lz_src="http://vedio.5054399.com/video/upload/1386662243.jpg" alt="四斗牛战队打机甲"/>四斗牛战队打机甲</a></li><li><a href="http://v.4399pk.com/xipu/video_229649.htm"><img lz_src="http://vedio.5054399.com/video/upload/1386320349.jpg" alt="四星魂斗牛号战机甲"/>四星魂斗牛号战机甲</a></li><li><a href="http://v.4399pk.com/xipu/video_228777.htm"><img lz_src="http://vedio.5054399.com/video/upload/1385110549.jpg" alt="时空传送门竞速攻略"/>时空传送门竞速攻略</a></li><li><a href="http://v.4399pk.com/xipu/video_228390.htm"><img lz_src="http://vedio.5054399.com/video/upload/1384508657.jpg" alt="超RP打魔能机甲高伤害"/>超RP打魔能机甲高伤害</a></li><li><a href="http://v.4399pk.com/xipu/video_228389.htm"><img lz_src="http://vedio.5054399.com/video/upload/1384508471.jpg" alt="光溟风采展"/>光溟风采展</a></li><li><a href="http://v.4399pk.com/xipu/video_227140.htm"><img lz_src="http://vedio.5054399.com/video/upload/1383187432.jpg" alt="过利亚神化极光角鹿"/>过利亚神化极光角鹿</a></li><li><a href="http://v.4399pk.com/xipu/video_226838.htm"><img lz_src="http://vedio.5054399.com/video/upload/1382687219.jpg" alt="神利亚战呱呱国王"/>神利亚战呱呱国王</a></li><li><a href="http://v.4399pk.com/xipu/video_226837.htm"><img lz_src="http://vedio.5054399.com/video/upload/1382687109.jpg" alt="过离火火焰焰篷贤者"/>过离火火焰焰篷贤者</a></li>
</ul>
<ul class="jcsp_ul" id="sp_user" style="display:none">
<li><a href="http://v.4399pk.com/xipu/video_230072.htm"><img lz_src="http://vedio.5054399.com/video/upload/1386894775.jpg" alt="煌炎龙帝pk风采展"/>煌炎龙帝pk风采展</a></li><li><a href="http://v.4399pk.com/xipu/video_229648.htm"><img lz_src="http://vedio.5054399.com/video/upload/1386320193.jpg" alt="寒假集结令"/>寒假集结令</a></li><li><a href="http://v.4399pk.com/xipu/video_228979.htm"><img lz_src="http://vedio.5054399.com/video/upload/1385373628.jpg" alt="4星魂pk"/>4星魂pk</a></li><li><a href="http://v.4399pk.com/xipu/video_228034.htm"><img lz_src="http://vedio.5054399.com/video/upload/1384226077.jpg" alt="三宠异常pk战"/>三宠异常pk战</a></li><li><a href="http://v.4399pk.com/xipu/video_227972.htm"><img lz_src="http://vedio.5054399.com/video/upload/1384154082.jpg" alt="无星魂pk赏"/>无星魂pk赏</a></li><li><a href="http://v.4399pk.com/xipu/video_225875.htm"><img lz_src="http://vedio.5054399.com/video/upload/1381828006.jpg" alt="神·沧涛1V1擂台pk"/>神·沧涛1V1擂台pk</a></li><li><a href="http://v.4399pk.com/xipu/video_225571.htm"><img lz_src="http://vedio.5054399.com/video/upload/1381546042.jpg" alt="极炫丿灬90後家族宣传"/>极炫丿灬90後家族宣传</a></li><li><a href="http://v.4399pk.com/xipu/video_224532.htm"><img lz_src="http://vedio.5054399.com/video/upload/1380519562.jpg" alt="西普灬皇族欢度国庆"/>西普灬皇族欢度国庆</a></li>   
</ul>
<ul class="jcsp_ul" id="sp_editor" style="display:none">
<li><a href="http://v.4399pk.com/xipu/video_228565.htm"><img lz_src="http://vedio.5054399.com/video/upload/1384832784.jpg" alt="开启天启勇士教程"/>开启天启勇士教程</a></li><li><a href="http://v.4399pk.com/xipu/video_226261.htm"><img lz_src="http://vedio.5054399.com/video/upload/1382339575.jpg" alt="小颖教你玩西普大陆"/>小颖教你玩西普大陆</a></li><li><a href="http://v.4399pk.com/xipu/video_226199.htm"><img lz_src="http://vedio.5054399.com/video/upload/1382082377.jpg" alt="体验给力加速器"/>体验给力加速器</a></li><li><a href="http://v.4399pk.com/xipu/video_225560.htm"><img lz_src="http://vedio.5054399.com/video/upload/1382339637.jpg" alt="小颖教你做漫画"/>小颖教你做漫画</a></li><li><a href="http://v.4399pk.com/xipu/video_224287.htm"><img lz_src="http://vedio.5054399.com/video/upload/1380331385.jpg" alt="西普镖局活动教程"/>西普镖局活动教程</a></li><li><a href="http://v.4399pk.com/xipu/video_223490.htm"><img lz_src="http://vedio.5054399.com/video/upload/1379497182.jpg" alt="4399演播室贺中秋快乐"/>4399演播室贺中秋快乐</a></li><li><a href="http://v.4399pk.com/xipu/video_222447.htm"><img lz_src="http://vedio.5054399.com/video/upload/1378462420.jpg" alt="小妮教你完胜戾雷皇"/>小妮教你完胜戾雷皇</a></li><li><a href="http://v.4399pk.com/xipu/video_220793.htm"><img lz_src="http://vedio.5054399.com/video/upload/1377073187.jpg" alt="西普大陆全新改版"/>西普大陆全新改版</a></li>
</ul>
               <div class="clear"></div>
            </div>
        </div>
        <div class="b_5"></div>
    </div>  
    <!--精彩视频end-->  
    <div class="clear"></div>
</div>
<!--调查视频等end-->

<!--公告交流等-->
<div class="main">
    <div class="lbox">
        <div class="t_10">
            <div class="title"></div>
            <div class="more_2"></div>
        </div>
        <div class="c_6">
            <div class="textlist_6">
               <ul>
<li><em><a href="http://news.4399.com/gonglue/xipu/gonggao/"><font color="#4a8609">【公告】</font></a></em><p><a href="http://news.4399.com/gonglue/xipu/gonggao/331396.html"><font color='#990000'>西普大陆12月20日预告</font></a></p><span>12-14</span></li><li><em><a href="http://news.4399.com/gonglue/xipu/gonggao/"><font color="#4a8609">【公告】</font></a></em><p><a href="http://news.4399.com/gonglue/xipu/gonggao/329133.html">西普大陆12月13日预告</a></p><span>12-12</span></li><li><em><a href="http://news.4399.com/gonglue/xipu/gonggao/"><font color="#4a8609">【公告】</font></a></em><p><a href="http://news.4399.com/gonglue/xipu/gonggao/329223.html">西普大陆第三届精灵设计大赛获奖作品</a></p><span>12-09</span></li><li><em><a href="http://news.4399.com/gonglue/xipu/gonggao/"><font color="#4a8609">【公告】</font></a></em><p><a href="http://news.4399.com/gonglue/xipu/gonggao/326160.html">西普大陆12月6日预告</a></p><span>12-05</span></li><li><em><a href="http://news.4399.com/gonglue/xipu/gonggao/"><font color="#4a8609">【公告】</font></a></em><p><a href="http://news.4399.com/gonglue/xipu/gonggao/326526.html">西普大陆SPC俱乐部相关活动下线通知</a></p><span>12-02</span></li><li><em><a href="http://news.4399.com/gonglue/xipu/gonggao/"><font color="#4a8609">【公告】</font></a></em><p><a href="http://news.4399.com/gonglue/xipu/gonggao/325376.html">致西普的一封信 感谢有你</a></p><span>11-28</span></li><li><em><a href="http://news.4399.com/gonglue/xipu/gonggao/"><font color="#4a8609">【公告】</font></a></em><p><a href="http://news.4399.com/gonglue/xipu/gonggao/323448.html">西普大陆11月29日预告</a></p><span>11-28</span></li><li><em><a href="http://news.4399.com/gonglue/xipu/gonggao/"><font color="#4a8609">【公告】</font></a></em><p><a href="http://news.4399.com/gonglue/xipu/gonggao/320726.html">西普大陆11月22日预告</a></p><span>11-21</span></li><li><em><a href="http://news.4399.com/gonglue/xipu/gonggao/"><font color="#4a8609">【公告】</font></a></em><p><a href="http://news.4399.com/gonglue/xipu/gonggao/319312.html">西普大陆11月15日预告</a></p><span>11-14</span></li>                
               </ul>
               <div class="clear"></div>
           </div>
        </div>
        <div class="b_6"></div>
    </div>

    <div class="cbox">
        <div class="t_11">
            <div class="title"><a href="http://news.4399.com/gonglue/xipu/gl/">西普大陆任务攻略</a></div>
            <div class="more_1"><a href="http://news.4399.com/gonglue/xipu/gl/">西普大陆任务攻略</a></div>
        </div>
        <div class="c_7">
            <div class="textlist_5">
               <ul>
<li><a href="http://news.4399.com/gonglue/xipu/gl/330982.html">拯救失落帝国（中）任务攻略</a><span>12-13</span></li><li><a href="http://news.4399.com/gonglue/xipu/gl/330745.html">西普大陆12月13日更新总攻略</a><span>12-13</span></li><li><a href="http://news.4399.com/gonglue/xipu/gl/330734.html">天天乐翻天 多种双倍免费领</a><span>12-13</span></li><li><a href="http://news.4399.com/gonglue/xipu/gl/330689.html">欢乐送送送</a><span>12-13</span></li><li><a href="http://news.4399.com/gonglue/xipu/gl/328621.html">拯救失落帝国(上)任务攻略</a><span>12-06</span></li><li><a href="http://news.4399.com/gonglue/xipu/gl/328280.html">西普大陆12月6日更新总攻略</a><span>12-06</span></li><li><a href="http://news.4399.com/gonglue/xipu/gl/328230.html">排行榜TOP1</a><span>12-06</span></li><li><a href="http://news.4399.com/gonglue/xipu/gl/328225.html">职业联盟之精灵协会</a><span>12-06</span></li><li><a href="http://news.4399.com/gonglue/xipu/gl/328212.html">洛奇·友谊第一</a><span>12-06</span></li>                 
               </ul>
               <div class="clear"></div>
            </div>
        </div>
        <div class="b_7"></div>
    </div>
   
    <div class="rbox">
        <div class="t_12">
            <div class="title"><a href="http://my.4399.com/forums-mtag-tagid-81191.html">西普大陆论坛</a></div>
            <div class="more_2"><a href="http://my.4399.com/forums-mtag-tagid-81191.html">西普大陆论坛</a></div>
            <div class="fatie"><a href="http://my.4399.com/forums-thread-tagid-81191-op-send.html"><img src="http://newsimg.5054399.com/xipu/static/www/images/fatie.gif"></a></div>
        </div>
        <div class="c_6">
            <div class="textlist_5">
               <ul>
<li><a href="http://my.4399.com/forums-thread-tagid-81191-id-38398434.html"><font color='#CC0000'>12月新人报道帖 最后一个月，冲刺啦</font><img src='http://newsimg.5054399.com/xipu/static/www/images/new.gif'></a><span>12-01</span></li><li><a href="http://my.4399.com/forums-thread-tagid-81191-id-38516893.html">西普大陆最快赚钱法（一夜暴富）</a><span>12-14</span></li><li><a href="http://my.4399.com/forums-thread-tagid-81191-id-38509830.html">【西普大陆侦探团】环法车手</a><span>12-13</span></li><li><a href="http://my.4399.com/forums-thread-tagid-81191-id-38499572.html">[周五更新爆料]欢乐送送送~</a><span>12-11</span></li><li><a href="http://my.4399.com/forums-thread-tagid-81191-id-38342689.html">【情缘】史上最强的各个BOSS攻略视频</a><span>12-11</span></li><li><a href="http://my.4399.com/forums-thread-tagid-81191-id-38438869.html"><font color='#000099'>【小炜来找查】精灵协会</font></a><span>12-07</span></li><li><a href="http://my.4399.com/forums-thread-tagid-81191-id-38419374.html">【西普大陆侦探团】含蓄的表达</a><span>12-05</span></li><li><a href="http://my.4399.com/forums-thread-tagid-81191-id-38180805.html">【龙布】四格漫画之欢乐校园篇</a><span>12-05</span></li><li><a href="http://my.4399.com/forums-thread-tagid-81191-id-38410527.html">[周五更新爆料]精灵协会成立啦！</a><span>12-04</span></li>                  
               </ul>
               <div class="clear"></div>
            </div>
        </div>
        <div class="b_6"></div>
    </div>
    
    <div class="clear"></div>
</div>
<!--公告交流等end-->

<!--两个banner-->

<!--两个banner/end-->

<!--四格手绘-->
<div class="main">
    <div class="sg_box">
        <div class="sg_t">
            <div class="title"><a href="http://news.4399.com/gonglue/xipu/manhua/">爆笑四格</a></div>
            <div class="more_1"><a href="http://news.4399.com/gonglue/xipu/manhua/">爆笑四格</a></div>
            <div class="tougao"><a href="http://huodong.4399.com/comm/tougao/index.php?zt=102"><img src="http://newsimg.5054399.com/xipu/static/www/images/tougao.gif" alt="我要投稿"></a></div>
        </div>
        <div class="sg_c">
           <div class="sige_list">
               <ul>
<li><a href="http://news.4399.com/gonglue/xipu/manhua/331679.html"><img name="lzimg_5" lz_src="http://newsimg.5054399.com/uploads/userup/1312/16104059C17.jpg" alt="西普大陆漫画-新手打劫"/>新手打劫</a></li><li><a href="http://news.4399.com/gonglue/xipu/manhua/331664.html"><img name="lzimg_5" lz_src="http://newsimg.5054399.com/uploads/userup/1312/1610332aC5.jpg" alt="西普大陆漫画-我看，完了"/>我看，完了</a></li><li><a href="http://news.4399.com/gonglue/xipu/manhua/331316.html"><img name="lzimg_5" lz_src="http://newsimg.5054399.com/uploads/userup/1312/1411040V1E.jpg" alt="西普大陆漫画-不环保的木木"/>不环保的木木</a></li><li><a href="http://news.4399.com/gonglue/xipu/manhua/331307.html"><img name="lzimg_5" lz_src="http://newsimg.5054399.com/uploads/userup/1312/14105U3K56.jpg" alt="西普大陆漫画-守护农场的精灵"/>守护农场的精灵</a></li>
               </ul>
               <div class="clear"></div>
           </div>
           
           <div class="sgli_text">
               <ul>
<li><a href="http://news.4399.com/gonglue/xipu/manhua/330478.html">西普大陆漫画-炸小偷</a></li><li><a href="http://news.4399.com/gonglue/xipu/manhua/330484.html">西普大陆漫画-猎影的真面目</a></li><li><a href="http://news.4399.com/gonglue/xipu/manhua/330189.html">西普大陆漫画-形容肥妈的电视剧</a></li><li><a href="http://news.4399.com/gonglue/xipu/manhua/330185.html">西普大陆漫画-先知绷带武士</a></li>
               </ul>
               <div class="clear"></div>
           </div>
           
        </div>
        <div class="sg_b"></div>
    </div><!--爆笑四格end-->
    
    <div class="sh_box">
        <div class="sh_t">
            <div class="title"><a href="http://news.4399.com/gonglue/xipu/shouhui/">玩家手绘</a></div>
            <div class="xiaoshuo"><a href="http://news.4399.com/gonglue/xipu/xiaoshuo/"><img src="http://newsimg.5054399.com/xipu/static/www/images/xiaoshuo.gif" alt="西普小说"></a></div>
            <div class="more_1"><a href="http://news.4399.com/gonglue/xipu/shouhui/">玩家手绘</a></div>
        </div>
        <div class="sh_c">
            <div class="sh_list">
               <ul>
<li><a href="http://news.4399.com/gonglue/xipu/shouhui/331688.html"><img name="lzimg_5" lz_src="http://newsimg.5054399.com/uploads/userup/1312/161434254426.jpg" alt="十尾"/>十尾</a></li><li><a href="http://news.4399.com/gonglue/xipu/shouhui/331299.html"><img name="lzimg_5" lz_src="http://newsimg.5054399.com/uploads/userup/1312/14105003I62.jpg" alt="银翼天使"/>银翼天使</a></li>
               </ul>
               <div class="clear"></div>
           </div>
        </div>
        <div class="sh_b"></div>
    </div><!--玩家手绘end-->
    <div class="clear"></div>
</div>
<!--四格手绘end-->

<!--精灵大全-->
<div id="bestposition"></div>
<div class="i_box3">
    <div class="b_top">
        <div class="name"><a href="http://news.4399.com/gonglue/xipu/jingling/">西普大陆精灵大全</a></div> 
        <div class="n_tip">
            <ul>
                <li><a class="in" target="_self" href="#">所有精灵</a></li>
                <li><a target="_self" href="#">稀有精灵</a></li>
                <li><a target="_self" href="#">天启专属精灵</a></li>
            </ul>
            <div class="clear"></div>
        </div>
    </div>
    
    <div class="content1">
        <div class="c_zm">
        按精灵<span>"首"</span>字母查询：
        <a target="_self" href="#">A</a><a target="_self" href="#">B</a><a target="_self" href="#">C</a><a target="_self" href="#">D</a><a target="_self" href="#">E</a><a target="_self" href="#">F</a><a target="_self" href="#">G</a><a target="_self" href="#">H</a><a style="display:none" target="_self" href="#">I</a><a target="_self" href="#">J</a><a target="_self" href="#">K</a><a target="_self" href="#">L</a><a target="_self" href="#">M</a><a target="_self" href="#">N</a><a style="display:none" target="_self" href="#">O</a><a target="_self" href="#">P</a><a target="_self" href="#">Q</a><a target="_self" href="#">R</a><a target="_self" href="#">S</a><a target="_self" href="#">T</a><a target="_self" href="#">W</a><a target="_self" href="#">X</a><a target="_self" href="#">Y</a><a target="_self" href="#">Z</a>
        <a onclick="hideTool();window.scrollTo(0,60);return false;" href="#"><img src="http://newsimg.5054399.com/xipu/images1/ico3.gif"></a></div>
        <div class="cw">
        <div class="c_icos">
            <ul>
                <li class="c1"><a target="_self" href="#" class="k1"></a></li>
                <li class="c2"><a target="_self" href="#"></a></li>
                <li class="c4"><a target="_self" href="#"></a></li>
                <li class="c7"><a target="_self" href="#"></a></li>
                <li class="c9"><a target="_self" href="#"></a></li>
                <li class="c8"><a target="_self" href="#"></a></li>
                <li class="c10"><a target="_self" href="#"></a></li>
                <li class="c12"><a target="_self" href="#"></a></li>
                <li class="c11"><a target="_self" href="#"></a></li>
                <li class="c6"><a target="_self" href="#"></a></li>
                <li class="c3"><a target="_self" href="#"></a></li>
                <li class="c5"><a target="_self" href="#"></a></li>
                <li class="c13"><a target="_self" href="#"></a></li>
            </ul>
            <div class="clear"></div>
        </div>
        <div class="c_o"></div>
        <div class="c_photo">
            <ul style="height:673px;overflow:hidden;" id="genius_all">
<li><a href="http://news.4399.com/gonglue/xipu/jingling/longxi/330025.html" rel="H|12|4648"><img name="lzimg_6" lz_src="http://newsimg.5054399.com/uploads/userup/1312/111I0593W9.gif" alt="西普大陆煌炎龙帝技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/longxi/330025.html">煌炎龙帝</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/330001.html" class="bz_1">煌炎龙帝精灵捕捉</a><span class="lj_2"></span>
</div>
<span class="like"><a href="#" target="_self" rel="330025"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/330013.html" rel="H|12|4639"><img name="lzimg_6" lz_src="http://newsimg.5054399.com/uploads/userup/1312/111G2154502.gif" alt="西普大陆海贼鼠王技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/330013.html">海贼鼠王</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/329985.html" class="bz_1">海贼鼠王精灵捕捉</a><span class="lj_2"></span>
</div>
<span class="like"><a href="#" target="_self" rel="330013"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/282010.html" rel="J|12|4647"><img name="lzimg_6" lz_src="http://newsimg.5054399.com/uploads/userup/1307/1QAQYJ4.gif" alt="西普大陆机甲暴龙技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/282010.html">机甲暴龙</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/281996.html" class="bz_1">机甲暴龙精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/282633.html" class="lj_1">机甲暴龙练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="282010"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/217680.html" rel="A|12|4650"><img name="lzimg_6" lz_src="http://newsimg.5054399.com/uploads/litimg/121129/15192X95N9.gif" alt="西普大陆傲慢翼魔技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/217680.html">傲慢翼魔</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/217537.html" class="bz_1">傲慢翼魔精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/218276.html" class="lj_1">傲慢翼魔练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="217680"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/327979.html" rel="Y|12|4641"><img name="lzimg_6" lz_src="http://newsimg.5054399.com/uploads/userup/1312/051G4151031.gif" alt="西普大陆云雀技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/327979.html">云雀</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/327930.html" class="bz_1">云雀精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/329555.html" class="lj_1">云雀练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="327979"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gx/327957.html" rel="J|12|4649"><img name="lzimg_6" lz_src="http://newsimg.5054399.com/uploads/userup/1312/05164024A15.gif" alt="西普大陆金光翔云技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gx/327957.html">金光翔云</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/327893.html" class="bz_1">金光翔云精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/328857.html" class="lj_1">金光翔云练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="327957"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/325264.html" rel="S|12|4639"><img name="lzimg_6" lz_src="http://newsimg.5054399.com/uploads/userup/1311/2QK23U493.gif" alt="西普大陆双鳍鲨灵技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/325264.html">双鳍鲨灵</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/325118.html" class="bz_1">双鳍鲨灵精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/327006.html" class="lj_1">双鳍鲨灵练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="325264"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gx/325246.html" rel="X|12|4649"><img name="lzimg_6" lz_src="http://newsimg.5054399.com/uploads/userup/1311/2QI0043260.gif" alt="西普大陆嘻哈鸡雏技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gx/325246.html">嘻哈鸡雏</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/325121.html" class="bz_1">嘻哈鸡雏精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/326123.html" class="lj_1">嘻哈鸡雏练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="325246"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/325218.html" rel="L|12|4644"><img name="lzimg_6" lz_src="http://newsimg.5054399.com/uploads/userup/1311/2QF3209503.gif" alt="西普大陆绿翼花蝴技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/325218.html">绿翼花蝴</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/325130.html" class="bz_1">绿翼花蝴精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/326129.html" class="lj_1">绿翼花蝴练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="325218"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/322513.html" rel="H|12|4646"><img name="lzimg_6" lz_src="http://newsimg.5054399.com/uploads/userup/1311/211620032C1.gif" alt="西普大陆寒擎技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/322513.html">寒擎</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/322111.html" class="bz_1">寒擎精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/323827.html" class="lj_1">寒擎练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="322513"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/longxi/322489.html" rel="L|12|4648"><img name="lzimg_6" lz_src="http://newsimg.5054399.com/uploads/userup/1311/21161913O94.gif" alt="西普大陆龙麟技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/longxi/322489.html">龙麟</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/322112.html" class="bz_1">龙麟精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/323828.html" class="lj_1">龙麟练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="322489"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/319788.html" rel="M|12|4647"><img name="lzimg_6" lz_src="http://newsimg.5054399.com/uploads/userup/1311/1415033A319.gif" alt="西普大陆魔能机甲技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/319788.html">魔能机甲</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/319754.html" class="bz_1">魔能机甲精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/320852.html" class="lj_1">魔能机甲练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="319788"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gx/319782.html" rel="G|12|4649"><img name="lzimg_7" lz_src="http://newsimg.5054399.com/uploads/userup/1311/14144HO5I.gif" alt="西普大陆光溟技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gx/319782.html">光溟</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/319749.html" class="bz_1">光溟精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/320831.html" class="lj_1">光溟练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="319782"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gx/317353.html" rel="Y|12|4649"><img name="lzimg_7" lz_src="http://newsimg.5054399.com/uploads/userup/1311/0G451512012.gif" alt="西普大陆月灵熊技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gx/317353.html">月灵熊</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/317210.html" class="bz_1">月灵熊精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/317316.html" class="lj_1">月灵熊练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="317353"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/317336.html" rel="Z|12|4650"><img name="lzimg_7" lz_src="http://newsimg.5054399.com/uploads/userup/1311/0G42H11542.gif" alt="西普大陆紫媚魔灵技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/317336.html">紫媚魔灵</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/317220.html" class="bz_1">紫媚魔灵精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/317312.html" class="lj_1">紫媚魔灵练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="317336"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/314720.html" rel="H|12|4639"><img name="lzimg_7" lz_src="http://newsimg.5054399.com/uploads/userup/1310/311433416212.gif" alt="西普大陆黑翼乌王技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/314720.html">黑翼乌王</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/314654.html" class="bz_1">黑翼乌王精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/315597.html" class="lj_1">黑翼乌王练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="314720"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/314713.html" rel="Z|12|4650"><img name="lzimg_7" lz_src="http://newsimg.5054399.com/uploads/userup/1310/3114231D592.gif" alt="西普大陆烛火将军技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/314713.html">烛火将军</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/314641.html" class="bz_1">烛火将军精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/315637.html" class="lj_1">烛火将军练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="314713"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/314705.html" rel="W|12|4650"><img name="lzimg_7" lz_src="http://newsimg.5054399.com/uploads/userup/1310/311414443418.gif" alt="西普大陆万圣魔灵技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/314705.html">万圣魔灵</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/314632.html" class="bz_1">万圣魔灵精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/315625.html" class="lj_1">万圣魔灵练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="314705"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/314702.html" rel="K|12|4650"><img name="lzimg_7" lz_src="http://newsimg.5054399.com/uploads/userup/1310/311404053541.gif" alt="西普大陆狂暴小恶魔技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/314702.html">狂暴小恶魔</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/314617.html" class="bz_1">狂暴小恶魔精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/315580.html" class="lj_1">狂暴小恶魔练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="314702"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gx/312181.html" rel="S|0|4649"><img name="lzimg_7" lz_src="http://newsimg.5054399.com/uploads/userup/1310/2413424N051.gif" alt="西普大陆神·利亚技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gx/312181.html">神·利亚</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/312145.html" class="bz_1">神·利亚精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/312143.html" class="lj_1">神·利亚练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="312181"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/311587.html" rel="C|12|4640"><img name="lzimg_7" lz_src="http://newsimg.5054399.com/uploads/userup/1310/23135924IX.gif" alt="西普大陆超·炎火技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/311587.html">超·炎火</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/311572.html" class="bz_1">超·炎火精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/312134.html" class="lj_1">超·炎火练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="311587"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/311577.html" rel="C|12|4639"><img name="lzimg_7" lz_src="http://newsimg.5054399.com/uploads/userup/1310/23115S1LI.gif" alt="西普大陆超·水灵技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/311577.html">超·水灵</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/311569.html" class="bz_1">超·水灵精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/312101.html" class="lj_1">超·水灵练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="311577"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/309636.html" rel="S|12|4640"><img name="lzimg_7" lz_src="http://newsimg.5054399.com/uploads/userup/1310/1G6325A349.gif" alt="西普大陆神·炎芒技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/309636.html">神·炎芒</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/309793.html" class="bz_1">神·炎芒精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/310559.html" class="lj_1">神·炎芒练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="309636"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/309614.html" rel="S|12|4639"><img name="lzimg_7" lz_src="http://newsimg.5054399.com/uploads/userup/1310/1G6032S616.gif" alt="西普大陆水灵技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/309614.html">水灵</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/309519.html" class="bz_1">水灵精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/310514.html" class="lj_1">水灵练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="309614"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/307025.html" rel="Y|12|4640"><img name="lzimg_7" lz_src="http://newsimg.5054399.com/uploads/userup/1310/10142ROX9.gif" alt="西普大陆炎火技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/307025.html">炎火</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/306998.html" class="bz_1">炎火精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/307523.html" class="lj_1">炎火练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="307025"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/305172.html" rel="S|0|4639"><img name="lzimg_8" lz_src="http://newsimg.5054399.com/uploads/userup/1309/291K3426043.gif" alt="西普大陆神·沧涛技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/305172.html">神·沧涛</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/305076.html" class="bz_1">神·沧涛精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/305492.html" class="lj_1">神·沧涛练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="305172"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gx/305166.html" rel="Y|12|4649"><img name="lzimg_8" lz_src="http://newsimg.5054399.com/uploads/userup/1309/291I3435H0.gif" alt="西普大陆月盈莲技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gx/305166.html">月盈莲</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/305143.html" class="bz_1">月盈莲精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/305433.html" class="lj_1">月盈莲练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="305166"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/305156.html" rel="C|12|4644"><img name="lzimg_8" lz_src="http://newsimg.5054399.com/uploads/userup/1309/291G3006031.gif" alt="西普大陆长青皇技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/305156.html">长青皇</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/305063.html" class="bz_1">长青皇精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/305489.html" class="lj_1">长青皇练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="305156"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/305149.html" rel="F|12|4641"><img name="lzimg_8" lz_src="http://newsimg.5054399.com/uploads/userup/1309/291G14414a.gif" alt="西普大陆飞翼风灵技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/305149.html">飞翼风灵</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/305081.html" class="bz_1">飞翼风灵精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/305384.html" class="lj_1">飞翼风灵练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="305149"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/305145.html" rel="H|13|4641"><img name="lzimg_8" lz_src="http://newsimg.5054399.com/uploads/userup/1309/291A251D13.gif" alt="西普大陆撼空兽技能表 "/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/305145.html">撼空兽</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/305073.html" class="bz_1">撼空兽精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/305411.html" class="lj_1">撼空兽练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="305145"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/300823.html" rel="Y|12|4642"><img name="lzimg_8" lz_src="http://newsimg.5054399.com/uploads/userup/1309/1G40554A51.gif" alt="西普大陆月刀皇技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/300823.html">月刀皇</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/300761.html" class="bz_1">月刀皇精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/301524.html" class="lj_1">月刀皇练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="300823"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/300819.html" rel="Y|12|4640"><img name="lzimg_8" lz_src="http://newsimg.5054399.com/uploads/userup/1309/1G3593E551.gif" alt="西普大陆月兔·晓晨技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/300819.html">月兔·晓晨</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/300748.html" class="bz_1">月兔·晓晨精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/301463.html" class="lj_1">月兔·晓晨练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="300819"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/300817.html" rel="Y|12|4640"><img name="lzimg_8" lz_src="http://newsimg.5054399.com/uploads/userup/1309/1G35341J96.gif" alt="西普大陆月饼火火技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/300817.html">月饼火火</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/300599.html" class="bz_1">月饼火火精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/301452.html" class="lj_1">月饼火火练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="300817"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/300813.html" rel="Y|12|4646"><img name="lzimg_8" lz_src="http://newsimg.5054399.com/uploads/userup/1309/1G350311629.gif" alt="西普大陆月饼冰冰技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/300813.html">月饼冰冰</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/300598.html" class="bz_1">月饼冰冰精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/301432.html" class="lj_1">月饼冰冰练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="300813"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gx/300808.html" rel="L|12|4649"><img name="lzimg_8" lz_src="http://newsimg.5054399.com/uploads/userup/1309/1G34602Y36.gif" alt="西普大陆莲蓉小月技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gx/300808.html">莲蓉小月</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/300670.html" class="bz_1">莲蓉小月精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/301417.html" class="lj_1">莲蓉小月练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="300808"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/blx/300806.html" rel="G|12|4645"><img name="lzimg_8" lz_src="http://newsimg.5054399.com/uploads/userup/1309/1G34232K61.gif" alt="西普大陆桂花小月技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/blx/300806.html">桂花小月</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/300662.html" class="bz_1">桂花小月精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/301415.html" class="lj_1">桂花小月练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="300806"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/300804.html" rel="Q|12|4644"><img name="lzimg_8" lz_src="http://newsimg.5054399.com/uploads/userup/1309/1G3400342I.gif" alt="西普大陆青梅小月技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/300804.html">青梅小月</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/300646.html" class="bz_1">青梅小月精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/301413.html" class="lj_1">青梅小月练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="300804"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/300803.html" rel="L|12|4641"><img name="lzimg_8" lz_src="http://newsimg.5054399.com/uploads/userup/1309/1G335431534.gif" alt="西普大陆兰心小月技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/300803.html">兰心小月</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/300605.html" class="bz_1">兰心小月精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/301411.html" class="lj_1">兰心小月练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="300803"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/300802.html" rel="Z|12|4647"><img name="lzimg_9" lz_src="http://newsimg.5054399.com/uploads/userup/1309/1G3224S944.gif" alt="西普大陆芝麻小月技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/300802.html">芝麻小月</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/300653.html" class="bz_1">芝麻小月精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/301079.html" class="lj_1">芝麻小月练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="300802"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/300800.html" rel="Z|12|4650"><img name="lzimg_9" lz_src="http://newsimg.5054399.com/uploads/userup/1309/1G249545E0.gif" alt="西普大陆紫芋小月技能表 "/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/300800.html">紫芋小月</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/300602.html" class="bz_1">紫芋小月精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/301078.html" class="lj_1">紫芋小月练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="300800"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/300799.html" rel="J|12|4640"><img name="lzimg_9" lz_src="http://newsimg.5054399.com/uploads/userup/1309/1G24501GW.gif" alt="西普大陆金橙小月技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/300799.html">金橙小月</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/300601.html" class="bz_1">金橙小月精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/301075.html" class="lj_1">金橙小月练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="300799"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/297158.html" rel="B|12|4646"><img name="lzimg_9" lz_src="http://newsimg.5054399.com/uploads/userup/1309/051Q91IX2.gif" alt="西普大陆冰犬皇技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/297158.html">冰犬皇</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/296831.html" class="bz_1">冰犬皇精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/297738.html" class="lj_1">冰犬皇练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="297158"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/297131.html" rel="L|12|4650"><img name="lzimg_9" lz_src="http://newsimg.5054399.com/uploads/userup/1309/051PUE095.gif" alt="西普大陆猎影技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/297131.html">猎影</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/296864.html" class="bz_1">猎影精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/297736.html" class="lj_1">猎影练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="297131"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/294821.html" rel="F|12|4642"><img name="lzimg_9" lz_src="http://newsimg.5054399.com/uploads/userup/1308/291921021W0.gif" alt="西普大陆岩封兽技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/294821.html">岩封兽</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/294882.html" class="bz_1">岩封兽精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/295630.html" class="lj_1">岩封兽练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="294821"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/294796.html" rel="L|12|4643"><img name="lzimg_9" lz_src="http://newsimg.5054399.com/uploads/userup/1308/291S61U029.gif" alt="西普大陆戾雷皇技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/294796.html">戾雷皇</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/294798.html" class="bz_1">戾雷皇精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/295559.html" class="lj_1">戾雷皇练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="294796"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/294790.html" rel="M|12|4642"><img name="lzimg_9" lz_src="http://newsimg.5054399.com/uploads/userup/1308/291S404M12.gif" alt="西普大陆漠岩技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/294790.html">漠岩</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/294863.html" class="bz_1">漠岩精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/295583.html" class="lj_1">漠岩练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="294790"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/292781.html" rel="K|12|4640"><img name="lzimg_9" lz_src="http://newsimg.5054399.com/uploads/userup/1308/2220543b247.gif" alt="西普大陆狂力皇技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/292781.html">狂力皇</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/292734.html" class="bz_1">狂力皇精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/293469.html" class="lj_1">狂力皇练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="292781"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/292774.html" rel="L|12|4641"><img name="lzimg_9" lz_src="http://newsimg.5054399.com/uploads/userup/1308/222013559457.gif" alt="西普大陆烈风技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/292774.html">烈风</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/292733.html" class="bz_1">烈风精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/293440.html" class="lj_1">烈风练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="292774"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/255743.html" rel="S|12|4647"><img name="lzimg_9" lz_src="http://newsimg.5054399.com/uploads/userup/1304/1111105IC6.gif" alt="西普大陆三皇大地机神技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/255743.html">三皇大地机神</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/255745.html" class="bz_1">三皇大地机神精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/256707.html" class="lj_1">三皇大地机神练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="255743"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/290634.html" rel="L|12|4643"><img name="lzimg_9" lz_src="http://newsimg.5054399.com/uploads/userup/1308/152050002015.gif" alt="西普大陆雷光狼王技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/290634.html">雷光狼王</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/290381.html" class="bz_1">雷光狼王精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/291189.html" class="lj_1">雷光狼王练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="290634"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gx/290531.html" rel="L|12|4649"><img name="lzimg_9" lz_src="http://newsimg.5054399.com/uploads/userup/1308/151G41152V.gif" alt="西普大陆利亚技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gx/290531.html">利亚</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/290481.html" class="bz_1">利亚精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/291148.html" class="lj_1">利亚练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="290531"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/290491.html" rel="K|12|4650"><img name="lzimg_10" lz_src="http://newsimg.5054399.com/uploads/userup/1308/151IJ05422.gif" alt="西普大陆卡鲁皇技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/290491.html">卡鲁皇</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/290485.html" class="bz_1">卡鲁皇精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/291126.html" class="lj_1">卡鲁皇练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="290491"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/288388.html" rel="Y|12|4640"><img name="lzimg_10" lz_src="http://newsimg.5054399.com/uploads/userup/1308/0QQ6195T6.gif" alt="西普大陆炎芒技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/288388.html">炎芒</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/288166.html" class="bz_1">炎芒精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/289243.html" class="lj_1">炎芒练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="288388"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/288373.html" rel="Z|12|4643"><img name="lzimg_10" lz_src="http://newsimg.5054399.com/uploads/userup/1308/0QJ23cA6.gif" alt="西普大陆张飞技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/288373.html">张飞</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/288159.html" class="bz_1">张飞精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/289201.html" class="lj_1">张飞练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="288373"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/288365.html" rel="G|12|4639"><img name="lzimg_10" lz_src="http://newsimg.5054399.com/uploads/userup/1308/0Q634433145.gif" alt="西普大陆关羽技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/288365.html">关羽</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/288164.html" class="bz_1">关羽精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/289257.html" class="lj_1">关羽练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="288365"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/288327.html" rel="D|12|4643"><img name="lzimg_10" lz_src="http://newsimg.5054399.com/uploads/userup/1308/0QF5009217.gif" alt="西普大陆电光舞羽雀技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/288327.html">电光舞羽雀</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/288171.html" class="bz_1">电光舞羽雀精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/289172.html" class="lj_1">电光舞羽雀练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="288327"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/288272.html" rel="L|12|4646"><img name="lzimg_10" lz_src="http://newsimg.5054399.com/uploads/userup/1308/0QA60094U.gif" alt="西普大陆刘备技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/288272.html">刘备</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/288121.html" class="bz_1">刘备精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/289210.html" class="lj_1">刘备练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="288272"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/286017.html" rel="C|12|4639"><img name="lzimg_10" lz_src="http://newsimg.5054399.com/uploads/userup/1308/01152A61J0.gif" alt="西普大陆沧涛技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/286017.html">沧涛</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/286040.html" class="bz_1">沧涛精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/286868.html" class="lj_1">沧涛练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="286017"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/239033.html" rel="L|12|4643"><img name="lzimg_10" lz_src="http://newsimg.5054399.com/uploads/userup/1302/0G532151423.gif" alt="西普大陆雷光勇士技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/239033.html">雷光勇士</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/238627.html" class="bz_1">雷光勇士精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/239551.html" class="lj_1">雷光勇士练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="239033"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/251981.html" rel="C|12|4647"><img name="lzimg_10" lz_src="http://newsimg.5054399.com/uploads/userup/1303/2QI13164B.gif" alt="西普大陆超命运战神技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/251981.html">超命运战神</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/251914.html" class="bz_1">超命运战神精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/253023.html" class="lj_1">超命运战神练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="251981"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/284127.html" rel="X|12|4646"><img name="lzimg_10" lz_src="http://newsimg.5054399.com/uploads/userup/1307/252043343Z9.gif" alt="西普大陆雪羽龙技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/284127.html">雪羽龙</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/284116.html" class="bz_1">雪羽龙精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/284675.html" class="lj_1">雪羽龙练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="284127"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/284044.html" rel="X|12|4646"><img name="lzimg_10" lz_src="http://newsimg.5054399.com/uploads/userup/1307/25203530Y16.gif" alt="西普大陆雪龙技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/284044.html">雪龙</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/284116.html" class="bz_1">雪龙精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/284675.html" class="lj_1">雪龙练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="284044"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/284043.html" rel="X|12|4646"><img name="lzimg_10" lz_src="http://newsimg.5054399.com/uploads/userup/1307/252026155401.gif" alt="西普大陆雪小龙技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/284043.html">雪小龙</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/284116.html" class="bz_1">雪小龙精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/284675.html" class="lj_1">雪小龙练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="284043"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gx/284063.html" rel="Z|12|4649"><img name="lzimg_10" lz_src="http://newsimg.5054399.com/uploads/userup/1307/25200AEY7.gif" alt="西普大陆诸葛亮技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gx/284063.html">诸葛亮</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/284114.html" class="bz_1">诸葛亮精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/284716.html" class="lj_1">诸葛亮练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="284063"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/284052.html" rel="Z|12|4640"><img name="lzimg_11" lz_src="http://newsimg.5054399.com/uploads/userup/1307/25200000DO.gif" alt="西普大陆周瑜技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/284052.html">周瑜</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/284113.html" class="bz_1">周瑜精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/285080.html" class="lj_1">周瑜练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="284052"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/284049.html" rel="C|12|4650"><img name="lzimg_11" lz_src="http://newsimg.5054399.com/uploads/userup/1307/251940336308.gif" alt="西普大陆曹操技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/284049.html">曹操</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/284112.html" class="bz_1">曹操精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/285092.html" class="lj_1">曹操练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="284049"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gx/284041.html" rel="J|12|4649"><img name="lzimg_11" lz_src="http://newsimg.5054399.com/uploads/userup/1307/251929294442.gif" alt="西普大陆极光角鹿技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gx/284041.html">极光角鹿</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/284108.html" class="bz_1">极光角鹿精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/285099.html" class="lj_1">极光角鹿练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="284041"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gx/284037.html" rel="Y|12|4649"><img name="lzimg_11" lz_src="http://newsimg.5054399.com/uploads/userup/1307/251923041336.gif" alt="西普大陆月灵鹿技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gx/284037.html">月灵鹿</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/284108.html" class="bz_1">月灵鹿精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/285099.html" class="lj_1">月灵鹿练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="284037"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gx/284032.html" rel="Y|12|4649"><img name="lzimg_11" lz_src="http://newsimg.5054399.com/uploads/userup/1307/251UG55259.gif" alt="西普大陆月角鹿技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gx/284032.html">月角鹿</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/284108.html" class="bz_1">月角鹿精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/285099.html" class="lj_1">月角鹿练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="284032"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/253949.html" rel="C|12|4647"><img name="lzimg_11" lz_src="http://newsimg.5054399.com/uploads/userup/1304/031J61I3U.gif" alt="西普大陆超大地雷皇技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/253949.html">超大地雷皇</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/253873.html" class="bz_1">超大地雷皇精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/254283.html" class="lj_1">超大地雷皇练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="253949"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/253970.html" rel="C|12|4647"><img name="lzimg_11" lz_src="http://newsimg.5054399.com/uploads/userup/1304/031Z9416133.gif" alt="西普大陆超漩涡海皇技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/253970.html">超漩涡海皇</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/253910.html" class="bz_1">超漩涡海皇精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/254325.html" class="lj_1">超漩涡海皇练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="253970"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/253969.html" rel="C|12|4647"><img name="lzimg_11" lz_src="http://newsimg.5054399.com/uploads/userup/1304/031R61325K.gif" alt="西普大陆超暴风空皇技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/253969.html">超暴风空皇</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/253905.html" class="bz_1">超暴风空皇精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/254310.html" class="lj_1">超暴风空皇练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="253969"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/253922.html" rel="C|12|4640"><img name="lzimg_11" lz_src="http://newsimg.5054399.com/uploads/userup/1304/031G22W524.gif" alt="西普大陆赤炎流星号技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/253922.html">赤炎流星号</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/253858.html" class="bz_1">赤炎流星号精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/254226.html" class="lj_1">赤炎流星号练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="253922"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/250017.html" rel="K|12|4642"><img name="lzimg_11" lz_src="http://newsimg.5054399.com/uploads/userup/1303/211FTb4V.gif" alt="西普大陆狂野斗牛号技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/250017.html">狂野斗牛号</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/249990.html" class="bz_1">狂野斗牛号精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/250594.html" class="lj_1">狂野斗牛号练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="250017"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/251951.html" rel="F|12|4641"><img name="lzimg_11" lz_src="http://newsimg.5054399.com/uploads/userup/1303/2Q6012K238.gif" alt="西普大陆风神迅灵号技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/251951.html">风神迅灵号</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/251908.html" class="bz_1">风神迅灵号精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/252953.html" class="lj_1">风神迅灵号练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="251951"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/255826.html" rel="Y|12|4639"><img name="lzimg_11" lz_src="http://newsimg.5054399.com/uploads/userup/1304/111434405545.gif" alt="西普大陆月光神水号技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/255826.html">月光神水号</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/255738.html" class="bz_1">月光神水号精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/256768.html" class="lj_1">月光神水号练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="255826"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/282046.html" rel="P|12|4639"><img name="lzimg_11" lz_src="http://newsimg.5054399.com/uploads/userup/1307/1QQ612bH.gif" alt="西普大陆噗嘟侠技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/282046.html">噗嘟侠</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/282001.html" class="bz_1">噗嘟侠精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/282677.html" class="lj_1">噗嘟侠练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="282046"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/282039.html" rel="X|0|4639"><img name="lzimg_12" lz_src="http://newsimg.5054399.com/uploads/userup/1307/1QQ0334954.gif" alt="西普大陆小胖嘟技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/282039.html">小胖嘟</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/282001.html" class="bz_1">小胖嘟精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/282677.html" class="lj_1">小胖嘟练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="282039"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/282029.html" rel="D|0|4639"><img name="lzimg_12" lz_src="http://newsimg.5054399.com/uploads/userup/1307/1QP003Z31.gif" alt="西普大陆嘟宝技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/282029.html">嘟宝</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/282001.html" class="bz_1">嘟宝精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/282677.html" class="lj_1">嘟宝练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="282029"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gx/282023.html" rel="Y|12|4649"><img name="lzimg_12" lz_src="http://newsimg.5054399.com/uploads/userup/1307/1QH60I0Y.gif" alt="西普大陆云月仙技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gx/282023.html">云月仙</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/281992.html" class="bz_1">云月仙精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/282656.html" class="lj_1">云月仙练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="282023"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gx/282019.html" rel="Y|12|4649"><img name="lzimg_12" lz_src="http://newsimg.5054399.com/uploads/userup/1307/1QG4109252.gif" alt="西普大陆月光喵技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gx/282019.html">月光喵</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/281992.html" class="bz_1">月光喵精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/282656.html" class="lj_1">月光喵练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="282019"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/282003.html" rel="B|12|4647"><img name="lzimg_12" lz_src="http://newsimg.5054399.com/uploads/userup/1307/1Q62T5Y42.gif" alt="西普大陆爆甲龙技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/282003.html">爆甲龙</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/281996.html" class="bz_1">爆甲龙精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/282633.html" class="lj_1">爆甲龙练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="282003"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/281999.html" rel="J|12|4647"><img name="lzimg_12" lz_src="http://newsimg.5054399.com/uploads/userup/1307/1Q620362252.gif" alt="西普大陆基扭龙技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/281999.html">基扭龙</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/281996.html" class="bz_1">基扭龙精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/282633.html" class="lj_1">基扭龙练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="281999"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/277861.html" rel="H|12|4650"><img name="lzimg_12" lz_src="http://newsimg.5054399.com/uploads/userup/1307/04134412O23.gif" alt="西普大陆哈维奇技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/277861.html">哈维奇</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/277793.html" class="bz_1">哈维奇精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/278790.html" class="lj_1">哈维奇练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="277861"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/277859.html" rel="H|12|4650"><img name="lzimg_12" lz_src="http://newsimg.5054399.com/uploads/userup/1307/04133A01F2.gif" alt="西普大陆哈维技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/277859.html">哈维</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/277793.html" class="bz_1">哈维精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/278790.html" class="lj_1">哈维练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="277859"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/277857.html" rel="H|12|4650"><img name="lzimg_12" lz_src="http://newsimg.5054399.com/uploads/userup/1307/041332524539.gif" alt="西普大陆哈小维技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/277857.html">哈小维</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/277793.html" class="bz_1">哈小维精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/278790.html" class="lj_1">哈小维练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="277857"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/blx/280085.html" rel="M|0|4645"><img name="lzimg_12" lz_src="http://newsimg.5054399.com/uploads/userup/1307/120605433W9.gif" alt="西普大陆喵首富技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/blx/280085.html">喵首富</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/279929.html" class="bz_1">喵首富精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/280773.html" class="lj_1">喵首富练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="280085"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/blx/280079.html" rel="M|0|4645"><img name="lzimg_12" lz_src="http://newsimg.5054399.com/uploads/userup/1307/120603491144.gif" alt="西普大陆喵聚宝技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/blx/280079.html">喵聚宝</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/279929.html" class="bz_1">喵聚宝精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/280773.html" class="lj_1">喵聚宝练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="280079"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/blx/280068.html" rel="M|0|4645"><img name="lzimg_12" lz_src="http://newsimg.5054399.com/uploads/userup/1307/120602415W7.gif" alt="西普大陆喵小财技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/blx/280068.html">喵小财</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/279929.html" class="bz_1">喵小财精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/280773.html" class="lj_1">喵小财练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="280068"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/280048.html" rel="K|12|4642"><img name="lzimg_12" lz_src="http://newsimg.5054399.com/uploads/userup/1307/111R3142019.gif" alt="西普大陆狂牛酋长技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/280048.html">狂牛酋长</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/279920.html" class="bz_1">狂牛酋长精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/280767.html" class="lj_1">狂牛酋长练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="280048"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/280037.html" rel="J|12|4642"><img name="lzimg_13" lz_src="http://newsimg.5054399.com/uploads/userup/1307/111PA0H06.gif" alt="西普大陆巨力牛技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/280037.html">巨力牛</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/279920.html" class="bz_1">巨力牛精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/280767.html" class="lj_1">巨力牛练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="280037"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/280022.html" rel="N|12|4642"><img name="lzimg_13" lz_src="http://newsimg.5054399.com/uploads/userup/1307/111J3563127.gif" alt="西普大陆牛小蹄技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/280022.html">牛小蹄</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/279920.html" class="bz_1">牛小蹄精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/280767.html" class="lj_1">牛小蹄练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="280022"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/blx/279992.html" rel="Q|12|4645"><img name="lzimg_13" lz_src="http://newsimg.5054399.com/uploads/userup/1307/111G91962b.gif" alt="西普大陆企鹅星战神技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/blx/279992.html">企鹅星战神</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/279913.html" class="bz_1">企鹅星战神精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/280764.html" class="lj_1">企鹅星战神练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="279992"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/blx/279978.html" rel="Q|12|4645"><img name="lzimg_13" lz_src="http://newsimg.5054399.com/uploads/userup/1307/111G442C58.gif" alt="西普大陆企鹅勇士技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/blx/279978.html">企鹅勇士</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/279913.html" class="bz_1">企鹅勇士精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/280764.html" class="lj_1">企鹅勇士练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="279978"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/blx/279975.html" rel="Q|12|4645"><img name="lzimg_13" lz_src="http://newsimg.5054399.com/uploads/userup/1307/111A3513R9.gif" alt="西普大陆企鹅小宝技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/blx/279975.html">企鹅小宝</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/279913.html" class="bz_1">企鹅小宝精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/280764.html" class="lj_1">企鹅小宝练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="279975"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/279944.html" rel="C|12|4646"><img name="lzimg_13" lz_src="http://newsimg.5054399.com/uploads/userup/1307/1116210440N.gif" alt="西普大陆超雪力懒王技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/279944.html">超雪力懒王</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/279936.html" class="bz_1">超雪力懒王精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/280637.html" class="lj_1">超雪力懒王练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="279944"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/174052.html" rel="X|0|4646"><img name="lzimg_13" lz_src="http://newsimg.5054399.com/uploads/litimg/120705/191925YLG.gif" alt="西普大陆雪力懒技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/174052.html">雪力懒</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/173921.html" class="bz_1">雪力懒精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/174669.html" class="lj_1">雪力懒练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="174052"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/174051.html" rel="L|0|4646"><img name="lzimg_13" lz_src="http://newsimg.5054399.com/uploads/litimg/120705/1Z92b91457.gif" alt="西普大陆力懒懒技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/174051.html">力懒懒</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/173921.html" class="bz_1">力懒懒精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/174648.html" class="lj_1">力懒懒练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="174051"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/174043.html" rel="X|0|4646"><img name="lzimg_13" lz_src="http://newsimg.5054399.com/uploads/121027/_14304E93.gif" alt="西普大陆雪懒懒技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/174043.html">雪懒懒</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/173921.html" class="bz_1">雪懒懒精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/174625.html" class="lj_1">雪懒懒练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="174043"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/blx/278020.html" rel="Y|12|4645"><img name="lzimg_13" lz_src="http://newsimg.5054399.com/uploads/userup/1307/0416401392O.gif" alt="西普大陆摇杆战机熊技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/blx/278020.html">摇杆战机熊</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/277817.html" class="bz_1">摇杆战机熊精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/278811.html" class="lj_1">摇杆战机熊练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="278020"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/blx/278009.html" rel="T|12|4645"><img name="lzimg_13" lz_src="http://newsimg.5054399.com/uploads/userup/1307/04162T03552.gif" alt="西普大陆投币熊技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/blx/278009.html">投币熊</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/277817.html" class="bz_1">投币熊精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/278811.html" class="lj_1">投币熊练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="278009"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/blx/278005.html" rel="Y|12|4645"><img name="lzimg_13" lz_src="http://newsimg.5054399.com/uploads/userup/1307/0416252344V.gif" alt="西普大陆游戏小熊技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/blx/278005.html">游戏小熊</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/277817.html" class="bz_1">游戏小熊精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/278811.html" class="lj_1">游戏小熊练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="278005"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/longxi/277938.html" rel="J|12|4648"><img name="lzimg_13" lz_src="http://newsimg.5054399.com/uploads/userup/1307/04150F92308.gif" alt="西普大陆荆棘暴龙王技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/longxi/277938.html">荆棘暴龙王</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/277813.html" class="bz_1">荆棘暴龙王精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/278800.html" class="lj_1">荆棘暴龙王练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="277938"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/longxi/277924.html" rel="X|12|4648"><img name="lzimg_14" lz_src="http://newsimg.5054399.com/uploads/userup/1307/0415045H258.gif" alt="西普大陆迅斧暴龙技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/longxi/277924.html">迅斧暴龙</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/277813.html" class="bz_1">迅斧暴龙精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/278800.html" class="lj_1">迅斧暴龙练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="277924"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/longxi/277901.html" rel="B|12|4648"><img name="lzimg_14" lz_src="http://newsimg.5054399.com/uploads/userup/1307/04143P09E3.gif" alt="西普大陆暴龙厄斯技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/longxi/277901.html">暴龙厄斯</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/277813.html" class="bz_1">暴龙厄斯精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/278800.html" class="lj_1">暴龙厄斯练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="277901"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gx/268978.html" rel="T|12|4649"><img name="lzimg_14" lz_src="http://newsimg.5054399.com/uploads/userup/1305/3013495L251.jpg" alt="西普大陆天圣帝龙技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gx/268978.html">天圣帝龙</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/268979.html" class="bz_1">天圣帝龙精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/276826.html" class="lj_1">天圣帝龙练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="268978"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/274151.html" rel="C|12|4640"><img name="lzimg_14" lz_src="http://newsimg.5054399.com/uploads/userup/1306/20140U4IW.gif" alt="西普大陆超包三叔技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/274151.html">超包三叔</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/274101.html" class="bz_1">超包三叔精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/274669.html" class="lj_1">超包三叔练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="274151"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/147578.html" rel="B|12|4640"><img name="lzimg_14" lz_src="http://newsimg.5054399.com/uploads/userup/1212/061639462H1.gif" alt="西普大陆包三叔技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/147578.html">包三叔</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/147577.html" class="bz_1">包三叔精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/150935.html" class="lj_1">包三叔练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="147578"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/147575.html" rel="B|12|4640"><img name="lzimg_14" lz_src="http://newsimg.5054399.com/uploads/userup/1212/06163H59627.gif" alt="西普大陆包二哥技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/147575.html">包二哥</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/147577.html" class="bz_1">包二哥精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/150932.html" class="lj_1">包二哥练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="147575"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/147570.html" rel="B|12|4640"><img name="lzimg_14" lz_src="http://newsimg.5054399.com/uploads/userup/1212/0616332022P.gif" alt="西普大陆包小弟技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/147570.html">包小弟</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/147577.html" class="bz_1">包小弟精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/150930.html" class="lj_1">包小弟练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="147570"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/blx/274138.html" rel="C|12|4645"><img name="lzimg_14" lz_src="http://newsimg.5054399.com/uploads/userup/1306/20134UEC1.gif" alt="西普大陆超火山龟技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/blx/274138.html">超火山龟</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/274104.html" class="bz_1">超火山龟精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/274680.html" class="lj_1">超火山龟练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="274138"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/blx/145709.html" rel="H|12|4645"><img name="lzimg_14" lz_src="http://newsimg.5054399.com/uploads/userup/1212/061F2113052.gif" alt="西普大陆火山龟技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/blx/145709.html">火山龟</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/145884.html" class="bz_1">火山龟精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/150936.html" class="lj_1">火山龟练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="145709"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/blx/148673.html" rel="L|12|4645"><img name="lzimg_14" lz_src="http://newsimg.5054399.com/uploads/userup/1212/061F054Q34.gif" alt="西普大陆绿椰龟技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/blx/148673.html">绿椰龟</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/145884.html" class="bz_1">绿椰龟精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/150933.html" class="lj_1">绿椰龟练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="148673"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/blx/148671.html" rel="S|12|4645"><img name="lzimg_14" lz_src="http://newsimg.5054399.com/uploads/userup/1212/061F135P96.gif" alt="西普大陆沙铲龟技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/blx/148671.html">沙铲龟</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/145884.html" class="bz_1">沙铲龟精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/150929.html" class="lj_1">沙铲龟练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="148671"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/274126.html" rel="C|12|4650"><img name="lzimg_14" lz_src="http://newsimg.5054399.com/uploads/userup/1306/201310511436.gif" alt="西普大陆超烛火伯爵技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/274126.html">超烛火伯爵</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/274096.html" class="bz_1">超烛火伯爵精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/274627.html" class="lj_1">超烛火伯爵练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="274126"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/207182.html" rel="Z|12|4650"><img name="lzimg_14" lz_src="http://newsimg.5054399.com/uploads/121027/_13545N47.gif" alt="西普大陆烛火伯爵技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/207182.html">烛火伯爵</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/207090.html" class="bz_1">烛火伯爵精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/207962.html" class="lj_1">烛火伯爵练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="207182"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/207177.html" rel="Z|12|4650"><img name="lzimg_15" lz_src="http://newsimg.5054399.com/uploads/121027/_135601953.gif" alt="西普大陆烛火恶魔技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/207177.html">烛火恶魔</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/207090.html" class="bz_1">烛火恶魔精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/207962.html" class="lj_1">烛火恶魔练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="207177"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/207173.html" rel="Z|12|4650"><img name="lzimg_15" lz_src="http://newsimg.5054399.com/uploads/121027/_135634533.gif" alt="西普大陆烛火嘟嘟技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/207173.html">烛火嘟嘟</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/207090.html" class="bz_1">烛火嘟嘟精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/207962.html" class="lj_1">烛火嘟嘟练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="207173"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/274109.html" rel="C|12|4650"><img name="lzimg_15" lz_src="http://newsimg.5054399.com/uploads/userup/1306/2011295VN3.gif" alt="西普大陆超光怪陆离技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/274109.html">超光怪陆离</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/274090.html" class="bz_1">超光怪陆离精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/274613.html" class="lj_1">超光怪陆离练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="274109"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/167017.html" rel="G|12|4650"><img name="lzimg_15" lz_src="http://newsimg.5054399.com/uploads/121027/_14193c29.gif" alt="西普大陆光怪陆离技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/167017.html">光怪陆离</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/167020.html" class="bz_1">光怪陆离精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/167055.html" class="lj_1">光怪陆离练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="167017"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/166992.html" rel="L|12|4650"><img name="lzimg_15" lz_src="http://newsimg.5054399.com/uploads/litimg/120609/114020Y2c2.gif" alt="西普大陆陆离技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/166992.html">陆离</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/167020.html" class="bz_1">陆离精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/167047.html" class="lj_1">陆离练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="166992"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/272450.html" rel="C|12|4639"><img name="lzimg_15" lz_src="http://newsimg.5054399.com/uploads/userup/1306/13164Q3W21.gif" alt="西普大陆超化石鱼龙王技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/272450.html">超化石鱼龙王</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/272415.html" class="bz_1">超化石鱼龙王精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/273056.html" class="lj_1">超化石鱼龙王练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="272450"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/209473.html" rel="H|13|4639"><img name="lzimg_15" lz_src="http://newsimg.5054399.com/uploads/121102/_0933013E.gif" alt="西普大陆化石鱼龙王技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/209473.html">化石鱼龙王</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/209367.html" class="bz_1">化石鱼龙王精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/210055.html" class="lj_1">化石鱼龙王练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="209473"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/209470.html" rel="H|13|4639"><img name="lzimg_15" lz_src="http://newsimg.5054399.com/uploads/121102/_093324J5.gif" alt="西普大陆化石鱼龙技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/209470.html">化石鱼龙</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/209367.html" class="bz_1">化石鱼龙精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/210055.html" class="lj_1">化石鱼龙练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="209470"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/209464.html" rel="G|13|4639"><img name="lzimg_15" lz_src="http://newsimg.5054399.com/uploads/121102/_093350554.gif" alt="西普大陆古化石鱼技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/209464.html">古化石鱼</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/209367.html" class="bz_1">古化石鱼精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/210055.html" class="lj_1">古化石鱼练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="209464"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/longxi/272442.html" rel="C|12|4648"><img name="lzimg_15" lz_src="http://newsimg.5054399.com/uploads/userup/1306/1316422J226.gif" alt="西普大陆超草灵独角龙技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/longxi/272442.html">超草灵独角龙</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/272412.html" class="bz_1">超草灵独角龙精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/273043.html" class="lj_1">超草灵独角龙练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="272442"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/longxi/209491.html" rel="C|13|4648"><img name="lzimg_15" lz_src="http://newsimg.5054399.com/uploads/121102/_093422308.gif" alt="西普大陆草灵独角龙技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/longxi/209491.html">草灵独角龙</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/209352.html" class="bz_1">草灵独角龙精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/209983.html" class="lj_1">草灵独角龙练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="209491"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/longxi/209485.html" rel="D|13|4648"><img name="lzimg_15" lz_src="http://newsimg.5054399.com/uploads/121102/_093445106.gif" alt="西普大陆独角红果龙技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/longxi/209485.html">独角红果龙</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/209352.html" class="bz_1">独角红果龙精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/209983.html" class="lj_1">独角红果龙练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="209485"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/longxi/209481.html" rel="H|13|4648"><img name="lzimg_15" lz_src="http://newsimg.5054399.com/uploads/121102/_093519210.gif" alt="西普大陆红果小龙技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/longxi/209481.html">红果小龙</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/209352.html" class="bz_1">红果小龙精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/209983.html" class="lj_1">红果小龙练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="209481"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/longxi/272437.html" rel="C|12|4648"><img name="lzimg_16" lz_src="http://newsimg.5054399.com/uploads/userup/1306/1316362632Q.gif" alt="西普大陆超爆炎翼龙技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/longxi/272437.html">超爆炎翼龙</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/272408.html" class="bz_1">超爆炎翼龙精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/273065.html" class="lj_1">超爆炎翼龙练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="272437"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/longxi/200701.html" rel="B|13|4648"><img name="lzimg_16" lz_src="http://newsimg.5054399.com/uploads/121027/_1353195U.gif" alt="西普大陆爆炎翼龙技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/longxi/200701.html">爆炎翼龙</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/200670.html" class="bz_1">爆炎翼龙精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/202139.html" class="lj_1">爆炎翼龙练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="200701"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/longxi/200699.html" rel="Y|13|4648"><img name="lzimg_16" lz_src="http://newsimg.5054399.com/uploads/121017/_15560EA.gif" alt="西普大陆炎翼龙技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/longxi/200699.html">炎翼龙</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/200670.html" class="bz_1">炎翼龙精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/202139.html" class="lj_1">炎翼龙练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="200699"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/longxi/200698.html" rel="Y|13|4648"><img name="lzimg_16" lz_src="http://newsimg.5054399.com/uploads/121027/_135426153.gif" alt="西普大陆幼炎龙技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/longxi/200698.html">幼炎龙</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/200670.html" class="bz_1">幼炎龙精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/202139.html" class="lj_1">幼炎龙练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="200698"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/272435.html" rel="C|12|4644"><img name="lzimg_16" lz_src="http://newsimg.5054399.com/uploads/userup/1306/1316261522Z.gif" alt="西普大陆超树人智者技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/272435.html">超树人智者</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/272416.html" class="bz_1">超树人智者精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/273024.html" class="lj_1">超树人智者练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="272435"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/178689.html" rel="S|0|4644"><img name="lzimg_16" lz_src="http://newsimg.5054399.com/uploads/litimg/120719/20115X94048.gif" alt="西普大陆树人智者技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/178689.html">树人智者</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/178580.html" class="bz_1">树人智者精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/179393.html" class="lj_1">树人智者练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="178689"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/178683.html" rel="S|0|4644"><img name="lzimg_16" lz_src="http://newsimg.5054399.com/uploads/121027/_145533b5.gif" alt="西普大陆树人护卫技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/178683.html">树人护卫</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/178580.html" class="bz_1">树人护卫精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/179389.html" class="lj_1">树人护卫练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="178683"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/178680.html" rel="S|0|4644"><img name="lzimg_16" lz_src="http://newsimg.5054399.com/uploads/121027/_145606410.gif" alt="西普大陆树人小木技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/178680.html">树人小木</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/178580.html" class="bz_1">树人小木精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/179387.html" class="lj_1">树人小木练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="178680"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/271002.html" rel="C|12|4641"><img name="lzimg_16" lz_src="http://newsimg.5054399.com/uploads/userup/1306/061I340A15.gif" alt="西普大陆超恶魔蝠技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/271002.html">超恶魔蝠</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/270918.html" class="bz_1">超恶魔蝠精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/271757.html" class="lj_1">超恶魔蝠练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="271002"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/171906.html" rel="E|0|4641"><img name="lzimg_16" lz_src="http://newsimg.5054399.com/uploads/121027/_155532320.gif" alt="西普大陆恶魔蝠技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/171906.html">恶魔蝠</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/171921.html" class="bz_1">恶魔蝠精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/172376.html" class="lj_1">恶魔蝠练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="171906"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/171894.html" rel="C|0|4641"><img name="lzimg_16" lz_src="http://newsimg.5054399.com/uploads/litimg/120628/155020YK03.gif" alt="西普大陆长耳蝠技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/171894.html">长耳蝠</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/171921.html" class="bz_1">长耳蝠精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/172340.html" class="lj_1">长耳蝠练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="171894"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/171886.html" rel="D|0|4641"><img name="lzimg_16" lz_src="http://newsimg.5054399.com/uploads/litimg/120628/153230Y4501.gif" alt="西普大陆大眼蝠技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/171886.html">大眼蝠</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/171921.html" class="bz_1">大眼蝠精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/172327.html" class="lj_1">大眼蝠练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="171886"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/270993.html" rel="C|12|4639"><img name="lzimg_16" lz_src="http://newsimg.5054399.com/uploads/userup/1306/061H4393054.gif" alt="西普大陆超怒涛夜叉技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/270993.html">超怒涛夜叉</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/270915.html" class="bz_1">超怒涛夜叉精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/271951.html" class="lj_1">超怒涛夜叉练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="270993"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/148297.html" rel="N|0|4639"><img name="lzimg_17" lz_src="http://newsimg.5054399.com/uploads/121027/_1620012b.gif" alt="西普大陆怒涛夜叉技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/148297.html">怒涛夜叉</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/148579.html" class="bz_1">怒涛夜叉精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/150746.html" class="lj_1">怒涛夜叉练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="148297"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/148293.html" rel="J|0|4639"><img name="lzimg_17" lz_src="http://newsimg.5054399.com/uploads/121027/_16202O53.gif" alt="西普大陆巨浪夜叉技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/148293.html">巨浪夜叉</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/148579.html" class="bz_1">巨浪夜叉精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/150724.html" class="lj_1">巨浪夜叉练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="148293"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/148285.html" rel="X|0|4639"><img name="lzimg_17" lz_src="http://newsimg.5054399.com/uploads/121027/_16205D27.gif" alt="西普大陆巡查夜叉技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/148285.html">巡查夜叉</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/148579.html" class="bz_1">巡查夜叉精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/150714.html" class="lj_1">巡查夜叉练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="148285"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/270940.html" rel="C|12|4642"><img name="lzimg_17" lz_src="http://newsimg.5054399.com/uploads/userup/1306/0616245U416.gif" alt="西普大陆超绷带法老王技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/270940.html">超绷带法老王</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/270913.html" class="bz_1">超绷带法老王精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/271919.html" class="lj_1">超绷带法老王练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="270940"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/146589.html" rel="B|0|4642"><img name="lzimg_17" lz_src="http://newsimg.5054399.com/uploads/121027/_154240H9.gif" alt="西普大陆绷带法老王技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/146589.html">绷带法老王</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/147148.html" class="bz_1">绷带法老王精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/150912.html" class="lj_1">绷带法老王练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="146589"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/147932.html" rel="B|0|4642"><img name="lzimg_17" lz_src="http://newsimg.5054399.com/uploads/120425/_203J5242.gif" alt="西普大陆绷带先锋技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/147932.html">绷带先锋</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/147148.html" class="bz_1">绷带先锋精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/150911.html" class="lj_1">绷带先锋练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="147932"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/148831.html" rel="B|0|4642"><img name="lzimg_17" lz_src="http://newsimg.5054399.com/uploads/121027/_154023413.gif" alt="西普大陆绷带武士技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/148831.html">绷带武士</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/147148.html" class="bz_1">绷带武士精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/150910.html" class="lj_1">绷带武士练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="148831"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/270880.html" rel="C|12|4640"><img name="lzimg_17" lz_src="http://newsimg.5054399.com/uploads/userup/1306/061501094521.gif" alt="西普大陆超焰篷贤者技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/270880.html">超焰篷贤者</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/270890.html" class="bz_1">超焰篷贤者精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/271748.html" class="lj_1">超焰篷贤者练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="270880"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/205102.html" rel="Y|0|4640"><img name="lzimg_17" lz_src="http://newsimg.5054399.com/uploads/litimg/121018/153312Y5214.gif" alt="西普大陆焰篷贤者技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/205102.html">焰篷贤者</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/204923.html" class="bz_1">焰篷贤者精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/205738.html" class="lj_1">焰篷贤者练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="205102"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/205099.html" rel="Y|0|4640"><img name="lzimg_17" lz_src="http://newsimg.5054399.com/uploads/121027/_140439621.gif" alt="西普大陆焰铃斗篷技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/205099.html">焰铃斗篷</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/204923.html" class="bz_1">焰铃斗篷精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/205738.html" class="lj_1">焰铃斗篷练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="205099"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/205094.html" rel="Q|0|4640"><img name="lzimg_17" lz_src="http://newsimg.5054399.com/uploads/litimg/121018/15195D94C5.gif" alt="西普大陆晴焰娃娃技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/205094.html">晴焰娃娃</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/204923.html" class="bz_1">晴焰娃娃精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/205738.html" class="lj_1">晴焰娃娃练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="205094"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/260603.html" rel="D|13|4644"><img name="lzimg_17" lz_src="http://newsimg.5054399.com/uploads/userup/1306/06144515G61.gif" alt="西普大陆东方喵不败技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/260603.html">东方喵不败</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/259912.html" class="bz_1">东方喵不败精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/271741.html" class="lj_1">东方喵不败练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="260603"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gx/269025.html" rel="C|12|4649"><img name="lzimg_17" lz_src="http://newsimg.5054399.com/uploads/userup/1306/011159409534.jpg" alt="西普大陆超圣耀奇灵技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gx/269025.html">超圣耀奇灵</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/268997.html" class="bz_1">超圣耀奇灵精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/270065.html" class="lj_1">超圣耀奇灵练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="269025"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gx/247606.html" rel="S|12|4649"><img name="lzimg_18" lz_src="http://newsimg.5054399.com/uploads/userup/1303/14112J14205.gif" alt="西普大陆圣耀奇灵技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gx/247606.html">圣耀奇灵</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/247501.html" class="bz_1">圣耀奇灵精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/248456.html" class="lj_1">圣耀奇灵练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="247606"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gx/247586.html" rel="S|12|4649"><img name="lzimg_18" lz_src="http://newsimg.5054399.com/uploads/userup/1303/211G33cU3.gif" alt="西普大陆圣光灵技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gx/247586.html">圣光灵</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/247501.html" class="bz_1">圣光灵精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/248456.html" class="lj_1">圣光灵练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="247586"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gx/247550.html" rel="S|12|4649"><img name="lzimg_18" lz_src="http://newsimg.5054399.com/uploads/userup/1303/14105533L10.gif" alt="西普大陆圣幼灵技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gx/247550.html">圣幼灵</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/247501.html" class="bz_1">圣幼灵精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/248456.html" class="lj_1">圣幼灵练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="247550"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/269012.html" rel="G|12|4646"><img name="lzimg_18" lz_src="http://newsimg.5054399.com/uploads/userup/1305/301504252945.jpg" alt="西普大陆骨顶虫技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/269012.html">骨顶虫</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/268996.html" class="bz_1">骨顶虫精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/275680.html" class="lj_1">骨顶虫练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="269012"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/268994.html" rel="S|12|4642"><img name="lzimg_18" lz_src="http://newsimg.5054399.com/uploads/userup/1305/3014201944T.jpg" alt="西普大陆圣光宝蛇技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/268994.html">圣光宝蛇</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/268982.html" class="bz_1">圣光宝蛇精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/270035.html" class="lj_1">圣光宝蛇练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="268994"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/267328.html" rel="H|12|4646"><img name="lzimg_18" lz_src="http://newsimg.5054399.com/uploads/userup/1305/231JQT4N.jpg" alt="西普大陆海象大佬技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/267328.html">海象大佬</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/267179.html" class="bz_1">海象大佬精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/268037.html" class="lj_1">海象大佬练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="267328"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/267322.html" rel="B|12|4646"><img name="lzimg_18" lz_src="http://newsimg.5054399.com/uploads/userup/1305/231I04140B.jpg" alt="西普大陆冰海象技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/267322.html">冰海象</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/267179.html" class="bz_1">冰海象精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/268037.html" class="lj_1">冰海象练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="267322"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/267320.html" rel="B|12|4646"><img name="lzimg_18" lz_src="http://newsimg.5054399.com/uploads/userup/1305/231H6304258.jpg" alt="西普大陆冰小象技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/267320.html">冰小象</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/267179.html" class="bz_1">冰小象精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/268037.html" class="lj_1">冰小象练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="267320"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/267304.html" rel="H|12|4650"><img name="lzimg_18" lz_src="http://newsimg.5054399.com/uploads/userup/1305/231F600B31.jpg" alt="西普大陆霍斯武士技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/267304.html">霍斯武士</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/267177.html" class="bz_1">霍斯武士精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/268055.html" class="lj_1">霍斯武士练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="267304"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/267284.html" rel="H|12|4650"><img name="lzimg_18" lz_src="http://newsimg.5054399.com/uploads/userup/1305/2315450O1Z.jpg" alt="西普大陆霍斯卫士技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/267284.html">霍斯卫士</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/267177.html" class="bz_1">霍斯卫士精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/268055.html" class="lj_1">霍斯卫士练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="267284"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/267275.html" rel="H|12|4650"><img name="lzimg_18" lz_src="http://newsimg.5054399.com/uploads/userup/1305/23154031K36.jpg" alt="西普大陆霍斯小兵技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/267275.html">霍斯小兵</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/267177.html" class="bz_1">霍斯小兵精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/268055.html" class="lj_1">霍斯小兵练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="267275"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/267216.html" rel="M|12|4644"><img name="lzimg_18" lz_src="http://newsimg.5054399.com/uploads/userup/1305/2313402cV7.jpg" alt="西普大陆魔幻米兔技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/267216.html">魔幻米兔</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/267172.html" class="bz_1">魔幻米兔精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/268068.html" class="lj_1">魔幻米兔练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="267216"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/267212.html" rel="M|12|4644"><img name="lzimg_18" lz_src="http://newsimg.5054399.com/uploads/userup/1305/2312115N211.jpg" alt="西普大陆魔米兔技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/267212.html">魔米兔</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/267172.html" class="bz_1">魔米兔精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/268068.html" class="lj_1">魔米兔练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="267212"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/267196.html" rel="M|12|4644"><img name="lzimg_19" lz_src="http://newsimg.5054399.com/uploads/userup/1305/231136403D4.jpg" alt="西普大陆魔米技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/267196.html">魔米</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/267172.html" class="bz_1">魔米精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/268068.html" class="lj_1">魔米练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="267196"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/265486.html" rel="B|12|4639"><img name="lzimg_19" lz_src="http://newsimg.5054399.com/uploads/userup/1305/161AJUG7.jpg" alt="西普大陆碧羽海马技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/265486.html">碧羽海马</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/265358.html" class="bz_1">碧羽海马精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/266351.html" class="lj_1">碧羽海马练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="265486"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/265477.html" rel="D|12|4639"><img name="lzimg_19" lz_src="http://newsimg.5054399.com/uploads/userup/1305/161A2204353.jpg" alt="西普大陆嘟嘟海马技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/265477.html">嘟嘟海马</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/265358.html" class="bz_1">嘟嘟海马精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/266351.html" class="lj_1">嘟嘟海马练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="265477"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/265464.html" rel="X|12|4639"><img name="lzimg_19" lz_src="http://newsimg.5054399.com/uploads/userup/1305/16162350W40.jpg" alt="西普大陆小海墨技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/265464.html">小海墨</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/265358.html" class="bz_1">小海墨精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/266351.html" class="lj_1">小海墨练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="265464"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/265437.html" rel="H|12|4646"><img name="lzimg_19" lz_src="http://newsimg.5054399.com/uploads/userup/1305/16153G59561.jpg" alt="西普大陆皇匣匣技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/265437.html">皇匣匣</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/265348.html" class="bz_1">皇匣匣精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/266336.html" class="lj_1">皇匣匣练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="265437"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/265428.html" rel="B|12|4646"><img name="lzimg_19" lz_src="http://newsimg.5054399.com/uploads/userup/1305/161534411012.jpg" alt="西普大陆宝匣匣技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/265428.html">宝匣匣</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/265348.html" class="bz_1">宝匣匣精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/266336.html" class="lj_1">宝匣匣练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="265428"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/265419.html" rel="X|12|4646"><img name="lzimg_19" lz_src="http://newsimg.5054399.com/uploads/userup/1305/1615015O205.jpg" alt="西普大陆匣匣技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/265419.html">匣匣</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/265348.html" class="bz_1">匣匣精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/266336.html" class="lj_1">匣匣练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="265419"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/265411.html" rel="B|12|4639"><img name="lzimg_19" lz_src="http://newsimg.5054399.com/uploads/userup/1305/161433146128.jpg" alt="西普大陆邦邦邦邦呆技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/265411.html">邦邦邦邦呆</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/265364.html" class="bz_1">邦邦邦邦呆精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/266374.html" class="lj_1">邦邦邦邦呆练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="265411"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/209436.html" rel="B|0|4639"><img name="lzimg_19" lz_src="http://newsimg.5054399.com/uploads/litimg/121101/154GN93E2.gif" alt="西普大陆邦呆邦呆邦呆技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/209436.html">邦呆邦呆邦呆</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/209363.html" class="bz_1">邦呆邦呆邦呆精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/210042.html" class="lj_1">邦呆邦呆邦呆练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="209436"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/209433.html" rel="B|0|4639"><img name="lzimg_19" lz_src="http://newsimg.5054399.com/uploads/litimg/121101/15392X95Q3.gif" alt="西普大陆邦呆邦呆技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/209433.html">邦呆邦呆</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/209363.html" class="bz_1">邦呆邦呆精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/210042.html" class="lj_1">邦呆邦呆练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="209433"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/209417.html" rel="B|0|4639"><img name="lzimg_19" lz_src="http://newsimg.5054399.com/uploads/litimg/121101/151954Y2560.gif" alt="西普大陆邦呆技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/209417.html">邦呆</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/209363.html" class="bz_1">邦呆精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/210042.html" class="lj_1">邦呆练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="209417"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/263517.html" rel="Y|12|4650"><img name="lzimg_19" lz_src="http://newsimg.5054399.com/uploads/userup/1305/09120A530P.gif" alt="西普大陆烟气瓦斯龙技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/263517.html">烟气瓦斯龙</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/263508.html" class="bz_1">烟气瓦斯龙精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/264148.html" class="lj_1">烟气瓦斯龙练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="263517"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/263511.html" rel="Y|12|4650"><img name="lzimg_19" lz_src="http://newsimg.5054399.com/uploads/userup/1305/0911531R546.gif" alt="西普大陆烟瓦龟技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/263511.html">烟瓦龟</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/263508.html" class="bz_1">烟瓦龟精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/264148.html" class="lj_1">烟瓦龟练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="263511"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/263500.html" rel="X|12|4650"><img name="lzimg_20" lz_src="http://newsimg.5054399.com/uploads/userup/1305/09111524OL.gif" alt="西普大陆小瓦弹技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/263500.html">小瓦弹</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/263508.html" class="bz_1">小瓦弹精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/264148.html" class="lj_1">小瓦弹练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="263500"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/260028.html" rel="D|12|4643"><img name="lzimg_20" lz_src="http://newsimg.5054399.com/uploads/userup/1304/25120940a53.gif" alt="西普大陆电力闹闹技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/260028.html">电力闹闹</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/259919.html" class="bz_1">电力闹闹精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/260955.html" class="lj_1">电力闹闹练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="260028"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/260004.html" rel="D|12|4643"><img name="lzimg_20" lz_src="http://newsimg.5054399.com/uploads/userup/1304/25114534cb.gif" alt="西普大陆大闹闹技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/260004.html">大闹闹</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/259919.html" class="bz_1">大闹闹精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/260955.html" class="lj_1">大闹闹练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="260004"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/259996.html" rel="X|12|4643"><img name="lzimg_20" lz_src="http://newsimg.5054399.com/uploads/userup/1304/25112KbB6.gif" alt="西普大陆小闹闹技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/259996.html">小闹闹</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/259919.html" class="bz_1">小闹闹精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/260955.html" class="lj_1">小闹闹练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="259996"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/257747.html" rel="Y|12|4650"><img name="lzimg_20" lz_src="http://newsimg.5054399.com/uploads/userup/1304/1Q439221528.gif" alt="西普大陆永夜神子技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/257747.html">永夜神子</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/257681.html" class="bz_1">永夜神子精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/260978.html" class="lj_1">永夜神子练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="257747"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gx/257742.html" rel="G|12|4649"><img name="lzimg_20" lz_src="http://newsimg.5054399.com/uploads/userup/1304/1Q43A3XL.gif" alt="西普大陆光轮星使技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gx/257742.html">光轮星使</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/257682.html" class="bz_1">光轮星使精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/258658.html" class="lj_1">光轮星使练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="257742"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/257650.html" rel="L|12|4643"><img name="lzimg_20" lz_src="http://newsimg.5054399.com/uploads/userup/1304/1Q1253C251.gif" alt="西普大陆雷翼青羽鸟技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/257650.html">雷翼青羽鸟</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/257676.html" class="bz_1">雷翼青羽鸟精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/258702.html" class="lj_1">雷翼青羽鸟练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="257650"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/257637.html" rel="L|12|4643"><img name="lzimg_20" lz_src="http://newsimg.5054399.com/uploads/userup/1304/1Q1113H520.gif" alt="西普大陆雷青雉技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/257637.html">雷青雉</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/257676.html" class="bz_1">雷青雉精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/258702.html" class="lj_1">雷青雉练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="257637"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/257629.html" rel="L|12|4643"><img name="lzimg_20" lz_src="http://newsimg.5054399.com/uploads/userup/1304/1Q1024J2I.gif" alt="西普大陆雷小雏技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/257629.html">雷小雏</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/257676.html" class="bz_1">雷小雏精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/258702.html" class="lj_1">雷小雏练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="257629"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/255820.html" rel="S|12|4639"><img name="lzimg_20" lz_src="http://newsimg.5054399.com/uploads/userup/1304/1114211054T.gif" alt="西普大陆水蓝号技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/255820.html">水蓝号</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/255738.html" class="bz_1">水蓝号精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/256768.html" class="lj_1">水蓝号练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="255820"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/255813.html" rel="J|12|4639"><img name="lzimg_20" lz_src="http://newsimg.5054399.com/uploads/userup/1304/1114060T414.gif" alt="西普大陆汲水号技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/255813.html">汲水号</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/255738.html" class="bz_1">汲水号精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/256768.html" class="lj_1">汲水号练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="255813"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/255787.html" rel="B|12|4647"><img name="lzimg_20" lz_src="http://newsimg.5054399.com/uploads/userup/1304/1112041V530.gif" alt="西普大陆布鲁卡特技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/255787.html">布鲁卡特</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/255722.html" class="bz_1">布鲁卡特精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/256745.html" class="lj_1">布鲁卡特练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="255787"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/255778.html" rel="B|12|4647"><img name="lzimg_20" lz_src="http://newsimg.5054399.com/uploads/userup/1304/111151112F4.gif" alt="西普大陆布鲁诺技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/255778.html">布鲁诺</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/255722.html" class="bz_1">布鲁诺精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/256745.html" class="lj_1">布鲁诺练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="255778"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/255757.html" rel="B|12|4647"><img name="lzimg_21" lz_src="http://newsimg.5054399.com/uploads/userup/1304/1111451D148.gif" alt="西普大陆布鲁技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/255757.html">布鲁</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/255722.html" class="bz_1">布鲁精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/256745.html" class="lj_1">布鲁练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="255757"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/157593.html" rel="N|0|4647"><img name="lzimg_21" lz_src="http://newsimg.5054399.com/uploads/121027/_163Jb33.gif" alt="西普大陆怒海漩涡王技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/157593.html">怒海漩涡王</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/157606.html" class="bz_1">怒海漩涡王精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/157928.html" class="lj_1">怒海漩涡王练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="157593"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/157590.html" rel="N|0|4647"><img name="lzimg_21" lz_src="http://newsimg.5054399.com/uploads/120503/_1F131351.gif" alt="西普大陆怒海王技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/157590.html">怒海王</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/157606.html" class="bz_1">怒海王精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/157926.html" class="lj_1">怒海王练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="157590"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/157581.html" rel="H|0|4647"><img name="lzimg_21" lz_src="http://newsimg.5054399.com/uploads/120503/_1F154360.gif" alt="西普大陆海神颜技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/157581.html">海神颜</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/157606.html" class="bz_1">海神颜精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/157922.html" class="lj_1">海神颜练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="157581"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/146437.html" rel="B|0|4647"><img name="lzimg_21" lz_src="http://newsimg.5054399.com/uploads/121027/_164223C5.gif" alt="西普大陆暴风裂空王技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/146437.html">暴风裂空王</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/152177.html" class="bz_1">暴风裂空王精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/152514.html" class="lj_1">暴风裂空王练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="146437"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/148650.html" rel="B|0|4647"><img name="lzimg_21" lz_src="http://newsimg.5054399.com/uploads/121027/_163U04Q.gif" alt="西普大陆暴风王技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/148650.html">暴风王</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/152177.html" class="bz_1">暴风王精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/152513.html" class="lj_1">暴风王练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="148650"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/148644.html" rel="F|0|4647"><img name="lzimg_21" lz_src="http://newsimg.5054399.com/uploads/120428/_1HGYQ.gif" alt="西普大陆风神颜技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/148644.html">风神颜</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/152177.html" class="bz_1">风神颜精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/152512.html" class="lj_1">风神颜练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="148644"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/145715.html" rel="D|12|4647"><img name="lzimg_21" lz_src="http://newsimg.5054399.com/uploads/121027/_164122137.gif" alt="西普大陆大地轰雷王技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/145715.html">大地轰雷王</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/146808.html" class="bz_1">大地轰雷王精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/179322.html" class="lj_1">大地轰雷王练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="145715"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/148637.html" rel="D|12|4647"><img name="lzimg_21" lz_src="http://newsimg.5054399.com/uploads/121027/_16402b39.gif" alt="西普大陆大地王技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/148637.html">大地王</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/146808.html" class="bz_1">大地王精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/179282.html" class="lj_1">大地王练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="148637"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/178700.html" rel="D|12|4647"><img name="lzimg_21" lz_src="http://newsimg.5054399.com/uploads/litimg/120719/204ADa536.gif" alt="西普大陆地神颜技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/178700.html">地神颜</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/146808.html" class="bz_1">地神颜精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/179222.html" class="lj_1">地神颜练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="178700"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/253913.html" rel="L|12|4640"><img name="lzimg_21" lz_src="http://newsimg.5054399.com/uploads/userup/1304/031G01GU6.gif" alt="西普大陆利火号技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/253913.html">利火号</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/253858.html" class="bz_1">利火号精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/254226.html" class="lj_1">利火号练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="253913"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/253903.html" rel="C|12|4640"><img name="lzimg_21" lz_src="http://newsimg.5054399.com/uploads/userup/1304/03164910I60.gif" alt="西普大陆赤火号技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/253903.html">赤火号</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/253858.html" class="bz_1">赤火号精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/254226.html" class="lj_1">赤火号练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="253903"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/253864.html" rel="B|12|4647"><img name="lzimg_21" lz_src="http://newsimg.5054399.com/uploads/userup/1304/03161304G01.gif" alt="西普大陆柏格兰特技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/253864.html">柏格兰特</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/253844.html" class="bz_1">柏格兰特精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/254217.html" class="lj_1">柏格兰特练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="253864"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/253848.html" rel="B|12|4647"><img name="lzimg_22" lz_src="http://newsimg.5054399.com/uploads/userup/1304/031600316059.gif" alt="西普大陆柏格亚特技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/253848.html">柏格亚特</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/253844.html" class="bz_1">柏格亚特精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/254217.html" class="lj_1">柏格亚特练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="253848"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/253828.html" rel="B|12|4647"><img name="lzimg_22" lz_src="http://newsimg.5054399.com/uploads/userup/1304/031541156031.gif" alt="西普大陆柏格技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/253828.html">柏格</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/253844.html" class="bz_1">柏格精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/254217.html" class="lj_1">柏格练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="253828"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/145263.html" rel="M|12|4647"><img name="lzimg_22" lz_src="http://newsimg.5054399.com/uploads/userup/1212/061A1025316.gif" alt="西普大陆命运勇士技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/145263.html">命运勇士</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/151425.html" class="bz_1">命运勇士精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/145323.html" class="lj_1">命运勇士练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="145263"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/147360.html" rel="Z|12|4647"><img name="lzimg_22" lz_src="http://newsimg.5054399.com/uploads/userup/1212/06164K55430.gif" alt="西普大陆自由战士技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/147360.html">自由战士</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/151425.html" class="bz_1">自由战士精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/151638.html" class="lj_1">自由战士练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="147360"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/147353.html" rel="Q|12|4647"><img name="lzimg_22" lz_src="http://newsimg.5054399.com/uploads/userup/1212/0616494GC3.gif" alt="西普大陆强袭斗士技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/147353.html">强袭斗士</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/151425.html" class="bz_1">强袭斗士精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/151589.html" class="lj_1">强袭斗士练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="147353"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gx/251965.html" rel="Y|12|4649"><img name="lzimg_22" lz_src="http://newsimg.5054399.com/uploads/userup/1303/2Q645416144.gif" alt="西普大陆翼灵技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gx/251965.html">翼灵</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/251911.html" class="bz_1">翼灵精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/252984.html" class="lj_1">翼灵练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="251965"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/251941.html" rel="J|12|4641"><img name="lzimg_22" lz_src="http://newsimg.5054399.com/uploads/userup/1303/2Q54H35064.gif" alt="西普大陆疾风号技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/251941.html">疾风号</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/251908.html" class="bz_1">疾风号精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/252953.html" class="lj_1">疾风号练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="251941"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/251937.html" rel="Q|12|4641"><img name="lzimg_22" lz_src="http://newsimg.5054399.com/uploads/userup/1303/2Q545043152.gif" alt="西普大陆青鸟号技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/251937.html">青鸟号</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/251908.html" class="bz_1">青鸟号精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/252953.html" class="lj_1">青鸟号练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="251937"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/251910.html" rel="T|12|4647"><img name="lzimg_22" lz_src="http://newsimg.5054399.com/uploads/userup/1303/2Q50122VP.gif" alt="西普大陆唐纳休顿技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/251910.html">唐纳休顿</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/251883.html" class="bz_1">唐纳休顿精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/252996.html" class="lj_1">唐纳休顿练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="251910"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/251905.html" rel="T|12|4647"><img name="lzimg_22" lz_src="http://newsimg.5054399.com/uploads/userup/1303/2Q44G0VW.gif" alt="西普大陆唐纳修技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/251905.html">唐纳修</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/251883.html" class="bz_1">唐纳修精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/252996.html" class="lj_1">唐纳修练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="251905"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/251900.html" rel="T|12|4647"><img name="lzimg_22" lz_src="http://newsimg.5054399.com/uploads/userup/1303/2Q444403404.gif" alt="西普大陆唐纳技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/251900.html">唐纳</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/251883.html" class="bz_1">唐纳精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/252996.html" class="lj_1">唐纳练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="251900"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/251873.html" rel="D|12|4647"><img name="lzimg_22" lz_src="http://newsimg.5054399.com/uploads/userup/1303/2Q40913ZZ.gif" alt="西普大陆迪尼巴泽技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/251873.html">迪尼巴泽</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/251866.html" class="bz_1">迪尼巴泽精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/253012.html" class="lj_1">迪尼巴泽练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="251873"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/251861.html" rel="B|12|4647"><img name="lzimg_22" lz_src="http://newsimg.5054399.com/uploads/userup/1303/2Q209232P2.gif" alt="西普大陆巴泽尔技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/251861.html">巴泽尔</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/251866.html" class="bz_1">巴泽尔精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/253012.html" class="lj_1">巴泽尔练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="251861"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/251854.html" rel="B|12|4647"><img name="lzimg_23" lz_src="http://newsimg.5054399.com/uploads/userup/1303/2Q203391233.gif" alt="西普大陆巴泽技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/251854.html">巴泽</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/251866.html" class="bz_1">巴泽精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/253012.html" class="lj_1">巴泽练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="251854"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/250011.html" rel="M|12|4642"><img name="lzimg_23" lz_src="http://newsimg.5054399.com/uploads/userup/1303/211FQ1J36.gif" alt="西普大陆蛮力号技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/250011.html">蛮力号</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/249990.html" class="bz_1">蛮力号精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/250594.html" class="lj_1">蛮力号练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="250011"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/250004.html" rel="X|12|4642"><img name="lzimg_23" lz_src="http://newsimg.5054399.com/uploads/userup/1303/211FH35400.gif" alt="西普大陆小吉技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/250004.html">小吉</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/249990.html" class="bz_1">小吉精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/250594.html" class="lj_1">小吉练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="250004"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/245679.html" rel="J|12|4639"><img name="lzimg_23" lz_src="http://newsimg.5054399.com/uploads/userup/1303/0G555252J7.gif" alt="西普大陆金刚怒海王技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/245679.html">金刚怒海王</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/245503.html" class="bz_1">金刚怒海王精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/246546.html" class="lj_1">金刚怒海王练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="245679"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/245664.html" rel="J|12|4642"><img name="lzimg_23" lz_src="http://newsimg.5054399.com/uploads/userup/1303/0G54455D28.gif" alt="西普大陆金刚裂地王技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/245664.html">金刚裂地王</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/245501.html" class="bz_1">金刚裂地王精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/246512.html" class="lj_1">金刚裂地王练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="245664"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/245650.html" rel="J|12|4641"><img name="lzimg_23" lz_src="http://newsimg.5054399.com/uploads/userup/1303/0G5210O044.gif" alt="西普大陆金刚飓风王技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/245650.html">金刚飓风王</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/245498.html" class="bz_1">金刚飓风王精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/246496.html" class="lj_1">金刚飓风王练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="245650"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/245639.html" rel="J|12|4640"><img name="lzimg_23" lz_src="http://newsimg.5054399.com/uploads/userup/1303/0G4251BQ5.gif" alt="西普大陆金刚炽炎王技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/245639.html">金刚炽炎王</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/245492.html" class="bz_1">金刚炽炎王精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/246478.html" class="lj_1">金刚炽炎王练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="245639"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/245612.html" rel="Y|12|4644"><img name="lzimg_23" lz_src="http://newsimg.5054399.com/uploads/userup/1303/0G35HL361.gif" alt="西普大陆影幽小带技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/245612.html">影幽小带</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/245472.html" class="bz_1">影幽小带精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/246421.html" class="lj_1">影幽小带练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="245612"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/245604.html" rel="Q|12|4644"><img name="lzimg_23" lz_src="http://newsimg.5054399.com/uploads/userup/1303/0G34SI249.gif" alt="西普大陆青釉小带技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/245604.html">青釉小带</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/245472.html" class="bz_1">青釉小带精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/246421.html" class="lj_1">青釉小带练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="245604"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/245587.html" rel="M|12|4644"><img name="lzimg_23" lz_src="http://newsimg.5054399.com/uploads/userup/1303/0G2133S420.gif" alt="西普大陆沫小带技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/245587.html">沫小带</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/245472.html" class="bz_1">沫小带精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/246421.html" class="lj_1">沫小带练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="245587"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/blx/241516.html" rel="Q|12|4645"><img name="lzimg_23" lz_src="http://newsimg.5054399.com/uploads/litimg/130221/201015Y5236.gif" alt="西普大陆拳王巴尼技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/blx/241516.html">拳王巴尼</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/241413.html" class="bz_1">拳王巴尼精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/242172.html" class="lj_1">拳王巴尼练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="241516"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/blx/241514.html" rel="G|12|4645"><img name="lzimg_23" lz_src="http://newsimg.5054399.com/uploads/litimg/130221/20031N94508.gif" alt="西普大陆格斗巴尼技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/blx/241514.html">格斗巴尼</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/241413.html" class="bz_1">格斗巴尼精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/242172.html" class="lj_1">格斗巴尼练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="241514"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/blx/241510.html" rel="H|12|4645"><img name="lzimg_23" lz_src="http://newsimg.5054399.com/uploads/130221/_20163R96.gif" alt="西普大陆红帽巴尼技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/blx/241510.html">红帽巴尼</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/241413.html" class="bz_1">红帽巴尼精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/242172.html" class="lj_1">红帽巴尼练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="241510"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/241497.html" rel="H|12|4642"><img name="lzimg_24" lz_src="http://newsimg.5054399.com/uploads/litimg/130221/19132N95007.gif" alt="西普大陆黄金榴莲狮技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/241497.html">黄金榴莲狮</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/241410.html" class="bz_1">黄金榴莲狮精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/242181.html" class="lj_1">黄金榴莲狮练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="241497"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/241492.html" rel="L|12|4642"><img name="lzimg_24" lz_src="http://newsimg.5054399.com/uploads/130221/_211A13c.gif" alt="西普大陆榴莲狮技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/241492.html">榴莲狮</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/241410.html" class="bz_1">榴莲狮精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/242181.html" class="lj_1">榴莲狮练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="241492"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/241485.html" rel="L|12|4642"><img name="lzimg_24" lz_src="http://newsimg.5054399.com/uploads/130221/_211Q4I8.gif" alt="西普大陆榴莲狮仔技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/241485.html">榴莲狮仔</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/241410.html" class="bz_1">榴莲狮仔精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/242181.html" class="lj_1">榴莲狮仔练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="241485"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/241459.html" rel="C|12|4640"><img name="lzimg_24" lz_src="http://newsimg.5054399.com/uploads/userup/1302/21164J5B09.gif" alt="西普大陆赤炎果龙技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/241459.html">赤炎果龙</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/241409.html" class="bz_1">赤炎果龙精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/242202.html" class="lj_1">赤炎果龙练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="241459"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/241436.html" rel="H|12|4640"><img name="lzimg_24" lz_src="http://newsimg.5054399.com/uploads/userup/1302/211644061P3.gif" alt="西普大陆轰轰果龙技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/241436.html">轰轰果龙</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/241409.html" class="bz_1">轰轰果龙精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/242202.html" class="lj_1">轰轰果龙练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="241436"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/241405.html" rel="Y|12|4640"><img name="lzimg_24" lz_src="http://newsimg.5054399.com/uploads/userup/1302/21162S5O94.gif" alt="西普大陆炎果龙技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/241405.html">炎果龙</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/241409.html" class="bz_1">炎果龙精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/242202.html" class="lj_1">炎果龙练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="241405"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/239081.html" rel="T|12|4650"><img name="lzimg_24" lz_src="http://newsimg.5054399.com/uploads/userup/1302/0GIP14R1.gif" alt="西普大陆天禄圣兽技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/239081.html">天禄圣兽</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/238633.html" class="bz_1">天禄圣兽精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/239544.html" class="lj_1">天禄圣兽练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="239081"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/239075.html" rel="T|12|4650"><img name="lzimg_24" lz_src="http://newsimg.5054399.com/uploads/userup/1302/0GHI53c9.gif" alt="西普大陆天禄灵兽技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/239075.html">天禄灵兽</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/238633.html" class="bz_1">天禄灵兽精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/239544.html" class="lj_1">天禄灵兽练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="239075"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/239065.html" rel="L|12|4650"><img name="lzimg_24" lz_src="http://newsimg.5054399.com/uploads/userup/1302/0GGH42b0.gif" alt="西普大陆灵夕兽技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/239065.html">灵夕兽</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/238633.html" class="bz_1">灵夕兽精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/239544.html" class="lj_1">灵夕兽练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="239065"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/239053.html" rel="N|12|4650"><img name="lzimg_24" lz_src="http://newsimg.5054399.com/uploads/userup/1302/0GG0143R5.gif" alt="西普大陆年幼兽技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/239053.html">年幼兽</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/238633.html" class="bz_1">年幼兽精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/239544.html" class="lj_1">年幼兽练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="239053"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/190604.html" rel="L|12|4643"><img name="lzimg_24" lz_src="http://newsimg.5054399.com/uploads/121027/_15030A18.gif" alt="西普大陆雷光狼技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/190604.html">雷光狼</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/190523.html" class="bz_1">雷光狼精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/191427.html" class="lj_1">雷光狼练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="190604"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/183648.html" rel="L|12|4643"><img name="lzimg_24" lz_src="http://newsimg.5054399.com/uploads/121027/_150333917.gif" alt="西普大陆雷小狼技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/183648.html">雷小狼</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/183641.html" class="bz_1">雷小狼精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/184548.html" class="lj_1">雷小狼练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="183648"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/238960.html" rel="S|12|4650"><img name="lzimg_24" lz_src="http://newsimg.5054399.com/uploads/userup/1302/0G51254HL.gif" alt="西普大陆圣·霸天技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/238960.html">圣·霸天</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/238624.html" class="bz_1">圣·霸天精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/239545.html" class="lj_1">圣·霸天练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="238960"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/238939.html" rel="Z|12|4650"><img name="lzimg_25" lz_src="http://newsimg.5054399.com/uploads/userup/1302/0G4294395E.gif" alt="西普大陆紫盔白虎技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/238939.html">紫盔白虎</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/238624.html" class="bz_1">紫盔白虎精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/239545.html" class="lj_1">紫盔白虎练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="238939"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/238934.html" rel="Z|12|4650"><img name="lzimg_25" lz_src="http://newsimg.5054399.com/uploads/userup/1302/0G41633H93.gif" alt="西普大陆紫小虎技能表 "/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/238934.html">紫小虎</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/238624.html" class="bz_1">紫小虎精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/239545.html" class="lj_1">紫小虎练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="238934"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/238913.html" rel="S|12|4639"><img name="lzimg_25" lz_src="http://newsimg.5054399.com/uploads/userup/1302/0G336192X4.gif" alt="西普大陆圣·武罗技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/238913.html">圣·武罗</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/238623.html" class="bz_1">圣·武罗精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/239553.html" class="lj_1">圣·武罗练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="238913"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/238911.html" rel="B|12|4639"><img name="lzimg_25" lz_src="http://newsimg.5054399.com/uploads/userup/1302/0G243535607.gif" alt="西普大陆碧水玄龟技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/238911.html">碧水玄龟</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/238623.html" class="bz_1">碧水玄龟精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/239553.html" class="lj_1">碧水玄龟练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="238911"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/238872.html" rel="B|12|4639"><img name="lzimg_25" lz_src="http://newsimg.5054399.com/uploads/userup/1302/0G235339232.gif" alt="西普大陆碧小龟技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/238872.html">碧小龟</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/238623.html" class="bz_1">碧小龟精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/239553.html" class="lj_1">碧小龟练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="238872"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/longxi/238858.html" rel="S|12|4648"><img name="lzimg_25" lz_src="http://newsimg.5054399.com/uploads/userup/1302/0G04105E51.gif" alt="西普大陆圣·苍角技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/longxi/238858.html">圣·苍角</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/238625.html" class="bz_1">圣·苍角精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/239543.html" class="lj_1">圣·苍角练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="238858"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/longxi/238847.html" rel="L|12|4648"><img name="lzimg_25" lz_src="http://newsimg.5054399.com/uploads/userup/1302/0G020139496.gif" alt="西普大陆利刃苍龙技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/longxi/238847.html">利刃苍龙</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/238625.html" class="bz_1">利刃苍龙精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/239543.html" class="lj_1">利刃苍龙练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="238847"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/longxi/238822.html" rel="C|12|4648"><img name="lzimg_25" lz_src="http://newsimg.5054399.com/uploads/userup/1302/0F9405B534.gif" alt="西普大陆苍小龙技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/longxi/238822.html">苍小龙</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/238625.html" class="bz_1">苍小龙精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/239543.html" class="lj_1">苍小龙练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="238822"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/longxi/236395.html" rel="L|13|4648"><img name="lzimg_25" lz_src="http://newsimg.5054399.com/uploads/litimg/130131/22462b960L.gif" alt="西普大陆蓝龙王技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/longxi/236395.html">蓝龙王</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/236269.html" class="bz_1">蓝龙王精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/238193.html" class="lj_1">蓝龙王练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="236395"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/longxi/236394.html" rel="L|13|4648"><img name="lzimg_25" lz_src="http://newsimg.5054399.com/uploads/litimg/130131/223943Y45D.gif" alt="西普大陆蓝龙精英技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/longxi/236394.html">蓝龙精英</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/236269.html" class="bz_1">蓝龙精英精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/238193.html" class="lj_1">蓝龙精英练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="236394"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/longxi/236393.html" rel="L|13|4648"><img name="lzimg_25" lz_src="http://newsimg.5054399.com/uploads/litimg/130131/22334Na106.gif" alt="西普大陆蓝龙哨卫技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/longxi/236393.html">蓝龙哨卫</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/236269.html" class="bz_1">蓝龙哨卫精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/238193.html" class="lj_1">蓝龙哨卫练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="236393"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/longxi/236392.html" rel="L|13|4648"><img name="lzimg_25" lz_src="http://newsimg.5054399.com/uploads/litimg/130131/222504YI38.gif" alt="西普大陆蓝小龙技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/longxi/236392.html">蓝小龙</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/236269.html" class="bz_1">蓝小龙精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/238193.html" class="lj_1">蓝小龙练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="236392"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/236391.html" rel="S|12|4640"><img name="lzimg_25" lz_src="http://newsimg.5054399.com/uploads/userup/1301/312211142E9.gif" alt="西普大陆圣·炎凰技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/236391.html">圣·炎凰</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/236281.html" class="bz_1">圣·炎凰精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/237472.html" class="lj_1">圣·炎凰练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="236391"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/236390.html" rel="H|12|4640"><img name="lzimg_26" lz_src="http://newsimg.5054399.com/uploads/userup/1301/312146051D7.gif" alt="西普大陆火炎元凰技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/236390.html">火炎元凰</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/236281.html" class="bz_1">火炎元凰精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/237472.html" class="lj_1">火炎元凰练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="236390"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/236384.html" rel="C|12|4640"><img name="lzimg_26" lz_src="http://newsimg.5054399.com/uploads/userup/1301/31212320E32.gif" alt="西普大陆赤幼羽技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/236384.html">赤幼羽</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/236281.html" class="bz_1">赤幼羽精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/237472.html" class="lj_1">赤幼羽练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="236384"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/236389.html" rel="L|12|4644"><img name="lzimg_26" lz_src="http://newsimg.5054399.com/uploads/litimg/130131/215130Y3161.gif" alt="西普大陆绿刺鲜花菇技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/236389.html">绿刺鲜花菇</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/236274.html" class="bz_1">绿刺鲜花菇精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/237735.html" class="lj_1">绿刺鲜花菇练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="236389"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/236387.html" rel="X|12|4644"><img name="lzimg_26" lz_src="http://newsimg.5054399.com/uploads/130131/_215H1Z2.gif" alt="西普大陆戏水菇技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/236387.html">戏水菇</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/236274.html" class="bz_1">戏水菇精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/237735.html" class="lj_1">戏水菇练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="236387"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/236386.html" rel="D|12|4644"><img name="lzimg_26" lz_src="http://newsimg.5054399.com/uploads/litimg/130131/21354N92351.gif" alt="西普大陆呱呱菇技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/236386.html">呱呱菇</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/236274.html" class="bz_1">呱呱菇精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/237735.html" class="lj_1">呱呱菇练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="236386"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/236385.html" rel="D|12|4644"><img name="lzimg_26" lz_src="http://newsimg.5054399.com/uploads/litimg/130131/212J1Y2T7.gif" alt="西普大陆大头菇技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/236385.html">大头菇</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/236274.html" class="bz_1">大头菇精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/237735.html" class="lj_1">大头菇练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="236385"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/236380.html" rel="C|12|4644"><img name="lzimg_26" lz_src="http://newsimg.5054399.com/uploads/litimg/130131/211025YA00.gif" alt="西普大陆潮轮嗨驼技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/236380.html">潮轮嗨驼</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/236132.html" class="bz_1">潮轮嗨驼精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/237749.html" class="lj_1">潮轮嗨驼练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="236380"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/145235.html" rel="C|0|4644"><img name="lzimg_26" lz_src="http://newsimg.5054399.com/uploads/120425/_20264M21.gif" alt="西普大陆冲浪嗨驼技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/145235.html">冲浪嗨驼</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/150483.html" class="bz_1">冲浪嗨驼精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/150855.html" class="lj_1">冲浪嗨驼练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="145235"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/148591.html" rel="X|0|4644"><img name="lzimg_26" lz_src="http://newsimg.5054399.com/uploads/120425/_202419157.gif" alt="西普大陆夏威夷嗨驼技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/148591.html">夏威夷嗨驼</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/150483.html" class="bz_1">夏威夷嗨驼精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/150852.html" class="lj_1">夏威夷嗨驼练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="148591"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/148590.html" rel="H|0|4644"><img name="lzimg_26" lz_src="http://newsimg.5054399.com/uploads/120425/_202440621.gif" alt="西普大陆嗨驼技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/148590.html">嗨驼</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/150483.html" class="bz_1">嗨驼精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/150846.html" class="lj_1">嗨驼练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="148590"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/blx/236377.html" rel="H|12|4645"><img name="lzimg_26" lz_src="http://newsimg.5054399.com/uploads/litimg/130131/20531N94341.gif" alt="西普大陆火擎轰炸兔技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/blx/236377.html">火擎轰炸兔</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/236138.html" class="bz_1">火擎轰炸兔精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/238157.html" class="lj_1">火擎轰炸兔练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="236377"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/blx/145711.html" rel="H|0|4645"><img name="lzimg_26" lz_src="http://newsimg.5054399.com/uploads/121027/_144H2P7.gif" alt="西普大陆火旗兔技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/blx/145711.html">火旗兔</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/145886.html" class="bz_1">火旗兔精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/156972.html" class="lj_1">火旗兔练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="145711"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/blx/148622.html" rel="H|0|4645"><img name="lzimg_26" lz_src="http://newsimg.5054399.com/uploads/121027/_14464QY.gif" alt="西普大陆火桶兔技能表 "/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/blx/148622.html">火桶兔</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/145886.html" class="bz_1">火桶兔精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/156963.html" class="lj_1">火桶兔练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="148622"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/blx/148615.html" rel="H|0|4645"><img name="lzimg_27" lz_src="http://newsimg.5054399.com/uploads/120425/_2021361E.gif" alt="西普大陆火柴兔技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/blx/148615.html">火柴兔</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/145886.html" class="bz_1">火柴兔精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/156956.html" class="lj_1">火柴兔练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="148615"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/236376.html" rel="K|12|4646"><img name="lzimg_27" lz_src="http://newsimg.5054399.com/uploads/litimg/130131/204ZN951U.gif" alt="西普大陆狂翼冰龙王技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/236376.html">狂翼冰龙王</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/236145.html" class="bz_1">狂翼冰龙王精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/238144.html" class="lj_1">狂翼冰龙王练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="236376"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/168297.html" rel="F|0|4646"><img name="lzimg_27" lz_src="http://newsimg.5054399.com/uploads/121027/_143143O0.gif" alt="西普大陆风翼迅冰龙技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/168297.html">风翼迅冰龙</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/168260.html" class="bz_1">风翼迅冰龙精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/168785.html" class="lj_1">风翼迅冰龙练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="168297"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/168292.html" rel="X|0|4646"><img name="lzimg_27" lz_src="http://newsimg.5054399.com/uploads/121027/_143212B7.gif" alt="西普大陆迅冰龙技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/168292.html">迅冰龙</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/168260.html" class="bz_1">迅冰龙精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/168782.html" class="lj_1">迅冰龙练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="168292"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/168265.html" rel="Y|0|4646"><img name="lzimg_27" lz_src="http://newsimg.5054399.com/uploads/121027/_143250327.gif" alt="西普大陆幼冰龙技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/168265.html">幼冰龙</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/168260.html" class="bz_1">幼冰龙精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/168748.html" class="lj_1">幼冰龙练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="168265"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/longxi/236375.html" rel="S|13|4648"><img name="lzimg_27" lz_src="http://newsimg.5054399.com/uploads/userup/1301/312035321S0.gif" alt="西普大陆三角剑龙王技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/longxi/236375.html">三角剑龙王</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/236273.html" class="bz_1">三角剑龙王精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/238183.html" class="lj_1">三角剑龙王练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="236375"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/longxi/236374.html" rel="L|13|4648"><img name="lzimg_27" lz_src="http://newsimg.5054399.com/uploads/userup/1301/312024336413.gif" alt="西普大陆裂地三角龙技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/longxi/236374.html">裂地三角龙</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/236273.html" class="bz_1">裂地三角龙精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/238183.html" class="lj_1">裂地三角龙练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="236374"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/longxi/236370.html" rel="S|13|4648"><img name="lzimg_27" lz_src="http://newsimg.5054399.com/uploads/userup/1301/3119355SC3.gif" alt="西普大陆三角龙荷恩技能表 "/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/longxi/236370.html">三角龙荷恩</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/236273.html" class="bz_1">三角龙荷恩精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/238183.html" class="lj_1">三角龙荷恩练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="236370"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/236371.html" rel="J|12|4643"><img name="lzimg_27" lz_src="http://newsimg.5054399.com/uploads/litimg/130131/201605Y4293.gif" alt="西普大陆基加特斯拉技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/236371.html">基加特斯拉</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/236141.html" class="bz_1">基加特斯拉精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/238020.html" class="lj_1">基加特斯拉练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="236371"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/170317.html" rel="N|0|4643"><img name="lzimg_27" lz_src="http://newsimg.5054399.com/uploads/121027/_15063S30.gif" alt="西普大陆怒咆特斯拉技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/170317.html">怒咆特斯拉</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/170383.html" class="bz_1">怒咆特斯拉精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/170757.html" class="lj_1">怒咆特斯拉练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="170317"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/170313.html" rel="T|0|4643"><img name="lzimg_27" lz_src="http://newsimg.5054399.com/uploads/litimg/120621/152605Y33S.gif" alt="西普大陆特斯拉技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/170313.html">特斯拉</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/170383.html" class="bz_1">特斯拉精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/170749.html" class="lj_1">特斯拉练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="170313"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/170301.html" rel="S|0|4643"><img name="lzimg_27" lz_src="http://newsimg.5054399.com/uploads/121027/_150A9430.gif" alt="西普大陆斯拉技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/170301.html">斯拉</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/170383.html" class="bz_1">斯拉精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/170747.html" class="lj_1">斯拉练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="170301"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/236368.html" rel="M|12|4641"><img name="lzimg_27" lz_src="http://newsimg.5054399.com/uploads/litimg/130131/194J1YP56.gif" alt="西普大陆喵影技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/236368.html">喵影</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/236148.html" class="bz_1">喵影精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/237846.html" class="lj_1">喵影练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="236368"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/146188.html" rel="M|0|4641"><img name="lzimg_28" lz_src="http://newsimg.5054399.com/uploads/userup/1204/2311215920B.gif" alt="西普大陆喵上忍技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/146188.html">喵上忍</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/149928.html" class="bz_1">喵上忍精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/150332.html" class="lj_1">喵上忍练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="146188"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/148604.html" rel="M|0|4641"><img name="lzimg_28" lz_src="http://newsimg.5054399.com/uploads/userup/1204/23112220OK.gif" alt="西普大陆喵中忍技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/148604.html">喵中忍</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/149928.html" class="bz_1">喵中忍精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/150331.html" class="lj_1">喵中忍练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="148604"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/148602.html" rel="M|0|4641"><img name="lzimg_28" lz_src="http://newsimg.5054399.com/uploads/userup/1204/23112251KS.gif" alt="西普大陆喵下忍技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/148602.html">喵下忍</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/149928.html" class="bz_1">喵下忍精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/150233.html" class="lj_1">喵下忍练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="148602"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/236367.html" rel="C|12|4640"><img name="lzimg_28" lz_src="http://newsimg.5054399.com/uploads/litimg/130131/19321Db954.gif" alt="西普大陆赤焰狐仙技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/236367.html">赤焰狐仙</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/236133.html" class="bz_1">赤焰狐仙精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/237402.html" class="lj_1">赤焰狐仙练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="236367"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/146385.html" rel="J|12|4640"><img name="lzimg_28" lz_src="http://newsimg.5054399.com/uploads/121027/_160ZV60.gif" alt="西普大陆九尾灵狐技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/146385.html">九尾灵狐</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/156294.html" class="bz_1">九尾灵狐精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/157015.html" class="lj_1">九尾灵狐练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="146385"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/148539.html" rel="H|12|4640"><img name="lzimg_28" lz_src="http://newsimg.5054399.com/uploads/120426/_16213AR.gif" alt="西普大陆火灵狐技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/148539.html">火灵狐</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/156294.html" class="bz_1">火灵狐精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/157014.html" class="lj_1">火灵狐练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="148539"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/148535.html" rel="S|12|4640"><img name="lzimg_28" lz_src="http://newsimg.5054399.com/uploads/120426/_164625S2.gif" alt="西普大陆三尾狐技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/148535.html">三尾狐</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/156294.html" class="bz_1">三尾狐精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/157011.html" class="lj_1">三尾狐练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="148535"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/236347.html" rel="M|12|4650"><img name="lzimg_28" lz_src="http://newsimg.5054399.com/uploads/litimg/130131/1UPXc916.gif" alt="西普大陆冥王小幽技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/236347.html">冥王小幽</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/236150.html" class="bz_1">冥王小幽精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/238039.html" class="lj_1">冥王小幽练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="236347"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/154750.html" rel="S|0|4650"><img name="lzimg_28" lz_src="http://newsimg.5054399.com/uploads/userup/1204/2311154B0a.gif" alt="西普大陆死神小幽技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/154750.html">死神小幽</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/154859.html" class="bz_1">死神小幽精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/155252.html" class="lj_1">死神小幽练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="154750"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/154742.html" rel="Q|0|4650"><img name="lzimg_28" lz_src="http://newsimg.5054399.com/uploads/userup/1204/23111523M51.gif" alt="西普大陆骑士小幽技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/154742.html">骑士小幽</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/154859.html" class="bz_1">骑士小幽精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/155245.html" class="lj_1">骑士小幽练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="154742"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/154736.html" rel="L|0|4650"><img name="lzimg_28" lz_src="http://newsimg.5054399.com/uploads/userup/1204/23111455Y51.gif" alt="西普大陆流浪小幽技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/154736.html">流浪小幽</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/154859.html" class="bz_1">流浪小幽精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/155241.html" class="lj_1">流浪小幽练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="154736"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/236361.html" rel="W|13|4641"><img name="lzimg_28" lz_src="http://newsimg.5054399.com/uploads/userup/1301/311ZQ05392.gif" alt="西普大陆王骑狮鹫技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/236361.html">王骑狮鹫</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/236270.html" class="bz_1">王骑狮鹫精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/237987.html" class="lj_1">王骑狮鹫练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="236361"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/236351.html" rel="S|13|4641"><img name="lzimg_28" lz_src="http://newsimg.5054399.com/uploads/userup/1301/311S95R504.gif" alt="西普大陆狮鹫技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/236351.html">狮鹫</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/236270.html" class="bz_1">狮鹫精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/237987.html" class="lj_1">狮鹫练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="236351"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/236324.html" rel="S|13|4641"><img name="lzimg_29" lz_src="http://newsimg.5054399.com/uploads/userup/1301/311S1333535.gif" alt="西普大陆狮小鹫技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/236324.html">狮小鹫</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/236270.html" class="bz_1">狮小鹫精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/237987.html" class="lj_1">狮小鹫练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="236324"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/blx/233881.html" rel="S|12|4645"><img name="lzimg_29" lz_src="http://newsimg.5054399.com/uploads/litimg/130124/154UN9AL.gif" alt="西普大陆圣·耀麟技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/blx/233881.html">圣·耀麟</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/233775.html" class="bz_1">圣·耀麟精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/234843.html" class="lj_1">圣·耀麟练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="233881"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/blx/233862.html" rel="J|12|4645"><img name="lzimg_29" lz_src="http://newsimg.5054399.com/uploads/litimg/130124/152952Y1P1.gif" alt="西普大陆金耀麒麟技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/blx/233862.html">金耀麒麟</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/233775.html" class="bz_1">金耀麒麟精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/234843.html" class="lj_1">金耀麒麟练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="233862"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/blx/233837.html" rel="J|12|4645"><img name="lzimg_29" lz_src="http://newsimg.5054399.com/uploads/litimg/130124/14503D92512.gif" alt="西普大陆金小麟技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/blx/233837.html">金小麟</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/233775.html" class="bz_1">金小麟精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/234843.html" class="lj_1">金小麟练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="233837"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/233821.html" rel="J|12|4646"><img name="lzimg_29" lz_src="http://newsimg.5054399.com/uploads/litimg/130124/141Q4Y4146.gif" alt="西普大陆吉米拉技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/233821.html">吉米拉</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/233764.html" class="bz_1">吉米拉精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/234759.html" class="lj_1">吉米拉练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="233821"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/233809.html" rel="J|12|4646"><img name="lzimg_29" lz_src="http://newsimg.5054399.com/uploads/litimg/130124/140515YK16.gif" alt="西普大陆吉拉技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/233809.html">吉拉</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/233764.html" class="bz_1">吉拉精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/234759.html" class="lj_1">吉拉练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="233809"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/233800.html" rel="J|12|4646"><img name="lzimg_29" lz_src="http://newsimg.5054399.com/uploads/litimg/130124/13505b93229.gif" alt="西普大陆吉小米技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/233800.html">吉小米</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/233764.html" class="bz_1">吉小米精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/234759.html" class="lj_1">吉小米练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="233800"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/226070.html" rel="H|12|4646"><img name="lzimg_29" lz_src="http://newsimg.5054399.com/uploads/litimg/121227/1Z612YZ44.gif" alt="西普大陆寒冰熊王技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/226070.html">寒冰熊王</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/225811.html" class="bz_1">寒冰熊王精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/226807.html" class="lj_1">寒冰熊王练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="226070"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/226063.html" rel="H|12|4646"><img name="lzimg_29" lz_src="http://newsimg.5054399.com/uploads/litimg/121227/1UK0YI19.gif" alt="西普大陆浣冰熊技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/226063.html">浣冰熊</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/225811.html" class="bz_1">浣冰熊精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/226807.html" class="lj_1">浣冰熊练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="226063"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/226033.html" rel="B|12|4646"><img name="lzimg_29" lz_src="http://newsimg.5054399.com/uploads/litimg/121227/1K54D92234.gif" alt="西普大陆冰熊仔技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/226033.html">冰熊仔</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/225811.html" class="bz_1">冰熊仔精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/226807.html" class="lj_1">冰熊仔练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="226033"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/226012.html" rel="X|12|4647"><img name="lzimg_29" lz_src="http://newsimg.5054399.com/uploads/litimg/121227/1H624Y4259.gif" alt="西普大陆西瓜战神技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/226012.html">西瓜战神</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/225823.html" class="bz_1">西瓜战神精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/226710.html" class="lj_1">西瓜战神练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="226012"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/226000.html" rel="X|12|4647"><img name="lzimg_29" lz_src="http://newsimg.5054399.com/uploads/121227/_191929320.gif" alt="西普大陆西瓜小战技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/226000.html">西瓜小战</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/225823.html" class="bz_1">西瓜小战精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/226710.html" class="lj_1">西瓜小战练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="226000"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/225994.html" rel="X|12|4647"><img name="lzimg_29" lz_src="http://newsimg.5054399.com/uploads/121227/_1GZ4239.gif" alt="西普大陆小球瓜技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/225994.html">小球瓜</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/225823.html" class="bz_1">小球瓜精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/226710.html" class="lj_1">小球瓜练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="225994"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/223969.html" rel="P|12|4646"><img name="lzimg_30" lz_src="http://newsimg.5054399.com/uploads/litimg/121220/211ZD934E.gif" alt="西普大陆帕米拉技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/223969.html">帕米拉</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/223660.html" class="bz_1">帕米拉精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/224814.html" class="lj_1">帕米拉练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="223969"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/223968.html" rel="P|12|4646"><img name="lzimg_30" lz_src="http://newsimg.5054399.com/uploads/litimg/121220/21130NbK3.gif" alt="西普大陆帕拉技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/223968.html">帕拉</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/223660.html" class="bz_1">帕拉精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/224814.html" class="lj_1">帕拉练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="223968"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/223967.html" rel="P|12|4646"><img name="lzimg_30" lz_src="http://newsimg.5054399.com/uploads/litimg/121220/205341Y3603.gif" alt="西普大陆帕小米技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/223967.html">帕小米</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/223660.html" class="bz_1">帕小米精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/224814.html" class="lj_1">帕小米练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="223967"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/223966.html" rel="L|12|4644"><img name="lzimg_30" lz_src="http://newsimg.5054399.com/uploads/litimg/121220/203614Y5194.gif" alt="西普大陆烈锯螳螂技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/223966.html">烈锯螳螂</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/223635.html" class="bz_1">烈锯螳螂精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/224811.html" class="lj_1">烈锯螳螂练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="223966"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/223965.html" rel="L|12|4644"><img name="lzimg_30" lz_src="http://newsimg.5054399.com/uploads/litimg/121220/203140YK19.gif" alt="西普大陆利剑螂技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/223965.html">利剑螂</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/223635.html" class="bz_1">利剑螂精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/224811.html" class="lj_1">利剑螂练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="223965"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/223964.html" rel="X|12|4644"><img name="lzimg_30" lz_src="http://newsimg.5054399.com/uploads/litimg/121220/202341Y4618.gif" alt="西普大陆小花螂技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/223964.html">小花螂</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/223635.html" class="bz_1">小花螂精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/224811.html" class="lj_1">小花螂练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="223964"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/223960.html" rel="W|12|4643"><img name="lzimg_30" lz_src="http://newsimg.5054399.com/uploads/litimg/121220/19495X91344.gif" alt="西普大陆乌力卡加斯技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/223960.html">乌力卡加斯</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/223637.html" class="bz_1">乌力卡加斯精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/224802.html" class="lj_1">乌力卡加斯练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="223960"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/223959.html" rel="W|12|4643"><img name="lzimg_30" lz_src="http://newsimg.5054399.com/uploads/litimg/121220/194424Y20T.gif" alt="西普大陆乌力斯技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/223959.html">乌力斯</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/223637.html" class="bz_1">乌力斯精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/224802.html" class="lj_1">乌力斯练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="223959"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/223958.html" rel="W|12|4643"><img name="lzimg_30" lz_src="http://newsimg.5054399.com/uploads/litimg/121220/19335Dc036.gif" alt="西普大陆乌斯技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/223958.html">乌斯</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/223637.html" class="bz_1">乌斯精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/224802.html" class="lj_1">乌斯练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="223958"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/223953.html" rel="L|12|4643"><img name="lzimg_30" lz_src="http://newsimg.5054399.com/uploads/litimg/121220/19152Nb3c.gif" alt="西普大陆雷神太鼓技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/223953.html">雷神太鼓</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/223650.html" class="bz_1">雷神太鼓精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/224965.html" class="lj_1">雷神太鼓练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="223953"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/223952.html" rel="L|12|4643"><img name="lzimg_30" lz_src="http://newsimg.5054399.com/uploads/litimg/121220/1ZZDa100.gif" alt="西普大陆雷击太鼓技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/223952.html">雷击太鼓</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/223650.html" class="bz_1">雷击太鼓精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/224965.html" class="lj_1">雷击太鼓练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="223952"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/223946.html" rel="T|12|4643"><img name="lzimg_30" lz_src="http://newsimg.5054399.com/uploads/litimg/121220/1P032Y1246.gif" alt="西普大陆太鼓仔技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/223946.html">太鼓仔</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/223650.html" class="bz_1">太鼓仔精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/224965.html" class="lj_1">太鼓仔练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="223946"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/223919.html" rel="B|12|4646"><img name="lzimg_30" lz_src="http://newsimg.5054399.com/uploads/litimg/121220/164423Y1U2.gif" alt="西普大陆冰翼战马技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/223919.html">冰翼战马</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/223630.html" class="bz_1">冰翼战马精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/224780.html" class="lj_1">冰翼战马练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="223919"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/223907.html" rel="H|12|4646"><img name="lzimg_31" lz_src="http://newsimg.5054399.com/uploads/litimg/121220/16264N94103.gif" alt="西普大陆寒冰快马技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/223907.html">寒冰快马</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/223630.html" class="bz_1">寒冰快马精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/224780.html" class="lj_1">寒冰快马练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="223907"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/223900.html" rel="B|12|4646"><img name="lzimg_31" lz_src="http://newsimg.5054399.com/uploads/litimg/121220/161Qb920X.gif" alt="西普大陆冰幼马技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/223900.html">冰幼马</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/223630.html" class="bz_1">冰幼马精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/224780.html" class="lj_1">冰幼马练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="223900"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/223866.html" rel="M|12|4639"><img name="lzimg_31" lz_src="http://newsimg.5054399.com/uploads/litimg/121220/155035Y4a2.gif" alt="西普大陆蔓蒂·帕克技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/223866.html">蔓蒂·帕克</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/215417.html" class="bz_1">蔓蒂·帕克精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/216317.html" class="lj_1">蔓蒂·帕克练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="223866"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/217568.html" rel="M|12|4639"><img name="lzimg_31" lz_src="http://newsimg.5054399.com/uploads/litimg/121129/110PXc412.gif" alt="西普大陆萌奇·帕克技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/217568.html">萌奇·帕克</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/215417.html" class="bz_1">萌奇·帕克精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/216317.html" class="lj_1">萌奇·帕克练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="217568"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/215591.html" rel="P|12|4639"><img name="lzimg_31" lz_src="http://newsimg.5054399.com/uploads/litimg/121122/142351YNR.gif" alt="西普大陆帕克技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/215591.html">帕克</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/215417.html" class="bz_1">帕克精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/216317.html" class="lj_1">帕克练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="215591"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/219968.html" rel="F|12|4641"><img name="lzimg_31" lz_src="http://newsimg.5054399.com/uploads/litimg/121206/1G202Y5615.gif" alt="西普大陆飞廉技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/219968.html">飞廉</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/219752.html" class="bz_1">飞廉精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/220727.html" class="lj_1">飞廉练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="219968"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/146612.html" rel="Z|0|4641"><img name="lzimg_31" lz_src="http://newsimg.5054399.com/uploads/120425/_20435M54.gif" alt="西普大陆侦察咕技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/146612.html">侦察咕</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/146797.html" class="bz_1">侦察咕精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/148407.html" class="lj_1">侦察咕练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="146612"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/147200.html" rel="B|0|4641"><img name="lzimg_31" lz_src="http://newsimg.5054399.com/uploads/120425/_204303L7.gif" alt="西普大陆宝石咕技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/147200.html">宝石咕</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/146797.html" class="bz_1">宝石咕精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/148406.html" class="lj_1">宝石咕练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="147200"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/147199.html" rel="P|0|4641"><img name="lzimg_31" lz_src="http://newsimg.5054399.com/uploads/121027/_15564Y31.gif" alt="西普大陆胖咕咕技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/147199.html">胖咕咕</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/146797.html" class="bz_1">胖咕咕精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/148405.html" class="lj_1">胖咕咕练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="147199"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/219911.html" rel="K|12|4642"><img name="lzimg_31" lz_src="http://newsimg.5054399.com/uploads/litimg/121206/16063N91S8.gif" alt="西普大陆卡尔斯技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/219911.html">卡尔斯</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/219764.html" class="bz_1">卡尔斯精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/220697.html" class="lj_1">卡尔斯练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="219911"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/146626.html" rel="S|0|4642"><img name="lzimg_31" lz_src="http://newsimg.5054399.com/uploads/121027/_15405B27.gif" alt="西普大陆圣角鹿技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/146626.html">圣角鹿</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/146784.html" class="bz_1">圣角鹿精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/148268.html" class="lj_1">圣角鹿练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="146626"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/147197.html" rel="J|0|4642"><img name="lzimg_31" lz_src="http://newsimg.5054399.com/uploads/120425/_20394R15.gif" alt="西普大陆巨角鹿技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/147197.html">巨角鹿</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/146784.html" class="bz_1">巨角鹿精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/148198.html" class="lj_1">巨角鹿练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="147197"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/147194.html" rel="X|0|4642"><img name="lzimg_31" lz_src="http://newsimg.5054399.com/uploads/120425/_20401bX.gif" alt="西普大陆小角鹿技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/147194.html">小角鹿</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/146784.html" class="bz_1">小角鹿精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/148180.html" class="lj_1">小角鹿练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="147194"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/219878.html" rel="F|12|4640"><img name="lzimg_32" lz_src="http://newsimg.5054399.com/uploads/litimg/121206/15323Dc926.gif" alt="西普大陆费尔斯技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/219878.html">费尔斯</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/219755.html" class="bz_1">费尔斯精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/220641.html" class="lj_1">费尔斯练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="219878"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/146594.html" rel="R|0|4640"><img name="lzimg_32" lz_src="http://newsimg.5054399.com/uploads/120425/_20541A06.gif" alt="西普大陆燃烧虎技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/146594.html">燃烧虎</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/146790.html" class="bz_1">燃烧虎精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/148090.html" class="lj_1">燃烧虎练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="146594"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/147188.html" rel="S|0|4640"><img name="lzimg_32" lz_src="http://newsimg.5054399.com/uploads/120425/_205325225.gif" alt="西普大陆帅帅虎技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/147188.html">帅帅虎</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/146790.html" class="bz_1">帅帅虎精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/148065.html" class="lj_1">帅帅虎练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="147188"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/147165.html" rel="G|0|4640"><img name="lzimg_32" lz_src="http://newsimg.5054399.com/uploads/120425/_205351233.gif" alt="西普大陆乖乖虎技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/147165.html">乖乖虎</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/146790.html" class="bz_1">乖乖虎精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/148096.html" class="lj_1">乖乖虎练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="147165"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/219863.html" rel="L|12|4639"><img name="lzimg_32" lz_src="http://newsimg.5054399.com/uploads/litimg/121206/150H5Y13B.gif" alt="西普大陆玲珑技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/219863.html">玲珑</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/219770.html" class="bz_1">玲珑精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/220749.html" class="lj_1">玲珑练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="219863"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/146616.html" rel="S|0|4639"><img name="lzimg_32" lz_src="http://newsimg.5054399.com/uploads/121027/_161922434.gif" alt="西普大陆双响斯内克技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/146616.html">双响斯内克</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/146793.html" class="bz_1">双响斯内克精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/148377.html" class="lj_1">双响斯内克练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="146616"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/147208.html" rel="J|0|4639"><img name="lzimg_32" lz_src="http://newsimg.5054399.com/uploads/120425/_200510209.gif" alt="西普大陆巨角斯内克技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/147208.html">巨角斯内克</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/146793.html" class="bz_1">巨角斯内克精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/148375.html" class="lj_1">巨角斯内克练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="147208"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/147205.html" rel="L|0|4639"><img name="lzimg_32" lz_src="http://newsimg.5054399.com/uploads/120425/_200542151.gif" alt="西普大陆蓝斯内克技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/147205.html">蓝斯内克</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/146793.html" class="bz_1">蓝斯内克精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/148369.html" class="lj_1">蓝斯内克练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="147205"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/217675.html" rel="W|12|4650"><img name="lzimg_32" lz_src="http://newsimg.5054399.com/uploads/litimg/121129/151011YQ11.gif" alt="西普大陆顽皮恶魔技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/217675.html">顽皮恶魔</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/217537.html" class="bz_1">顽皮恶魔精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/218276.html" class="lj_1">顽皮恶魔练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="217675"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/217653.html" rel="C|12|4650"><img name="lzimg_32" lz_src="http://newsimg.5054399.com/uploads/litimg/121129/14493Nc345.gif" alt="西普大陆馋嘴小魔技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/217653.html">馋嘴小魔</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/217537.html" class="bz_1">馋嘴小魔精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/218276.html" class="lj_1">馋嘴小魔练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="217653"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/215600.html" rel="J|12|4640"><img name="lzimg_32" lz_src="http://newsimg.5054399.com/uploads/litimg/121122/14415N94952.gif" alt="西普大陆机械火鸡技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/215600.html">机械火鸡</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/215440.html" class="bz_1">机械火鸡精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/216414.html" class="lj_1">机械火鸡练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="215600"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/213761.html" rel="S|12|4647"><img name="lzimg_32" lz_src="http://newsimg.5054399.com/uploads/litimg/121115/20103D94341.gif" alt="西普大陆锁甲士技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/213761.html">锁甲士</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/213507.html" class="bz_1">锁甲士精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/214417.html" class="lj_1">锁甲士练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="213761"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/213759.html" rel="S|12|4647"><img name="lzimg_32" lz_src="http://newsimg.5054399.com/uploads/litimg/121115/200425Y6252.gif" alt="西普大陆锁卫宝技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/213759.html">锁卫宝</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/213507.html" class="bz_1">锁卫宝精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/214417.html" class="lj_1">锁卫宝练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="213759"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/213756.html" rel="X|12|4647"><img name="lzimg_33" lz_src="http://newsimg.5054399.com/uploads/litimg/121115/195A5Y1953.gif" alt="西普大陆小锁头技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/213756.html">小锁头</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/213507.html" class="bz_1">小锁头精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/214417.html" class="lj_1">小锁头练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="213756"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/213754.html" rel="C|12|4639"><img name="lzimg_33" lz_src="http://newsimg.5054399.com/uploads/litimg/121115/193T2YMC.gif" alt="西普大陆彩鳍豚技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/213754.html">彩鳍豚</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/213496.html" class="bz_1">彩鳍豚精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/214354.html" class="lj_1">彩鳍豚练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="213754"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/213753.html" rel="K|12|4639"><img name="lzimg_33" lz_src="http://newsimg.5054399.com/uploads/litimg/121115/193153Y9512.gif" alt="西普大陆阔鳍豚技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/213753.html">阔鳍豚</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/213496.html" class="bz_1">阔鳍豚精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/214354.html" class="lj_1">阔鳍豚练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="213753"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/213751.html" rel="X|12|4639"><img name="lzimg_33" lz_src="http://newsimg.5054399.com/uploads/litimg/121115/19242N94612.gif" alt="西普大陆小飞豚技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/213751.html">小飞豚</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/213496.html" class="bz_1">小飞豚精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/214354.html" class="lj_1">小飞豚练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="213751"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/213737.html" rel="B|0|4639"><img name="lzimg_33" lz_src="http://newsimg.5054399.com/uploads/litimg/121115/1U640Y5F5.gif" alt="西普大陆伯爵虾技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/213737.html">伯爵虾</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/213526.html" class="bz_1">伯爵虾精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/214390.html" class="lj_1">伯爵虾练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="213737"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/213732.html" rel="S|0|4639"><img name="lzimg_33" lz_src="http://newsimg.5054399.com/uploads/121115/_1URU41.gif" alt="西普大陆绅士虾技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/213732.html">绅士虾</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/213526.html" class="bz_1">绅士虾精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/214390.html" class="lj_1">绅士虾练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="213732"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/213726.html" rel="D|0|4639"><img name="lzimg_33" lz_src="http://newsimg.5054399.com/uploads/litimg/121115/1T541Y64V.gif" alt="西普大陆大头虾技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/213726.html">大头虾</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/213526.html" class="bz_1">大头虾精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/214390.html" class="lj_1">大头虾练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="213726"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/213708.html" rel="Z|0|4639"><img name="lzimg_33" lz_src="http://newsimg.5054399.com/uploads/121115/_1K94H47.gif" alt="西普大陆重型艇汪酱技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/213708.html">重型艇汪酱</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/213531.html" class="bz_1">重型艇汪酱精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/214327.html" class="lj_1">重型艇汪酱练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="213708"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/213697.html" rel="W|0|4639"><img name="lzimg_33" lz_src="http://newsimg.5054399.com/uploads/litimg/121115/1IJ3Y4253.gif" alt="西普大陆汪酱小子技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/213697.html">汪酱小子</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/213531.html" class="bz_1">汪酱小子精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/214327.html" class="lj_1">汪酱小子练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="213697"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/213691.html" rel="M|0|4639"><img name="lzimg_33" lz_src="http://newsimg.5054399.com/uploads/litimg/121115/1HK5Y10X.gif" alt="西普大陆萌阿酱技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/213691.html">萌阿酱</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/213531.html" class="bz_1">萌阿酱精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/214327.html" class="lj_1">萌阿酱练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="213691"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/156375.html" rel="J|12|4644"><img name="lzimg_33" lz_src="http://newsimg.5054399.com/uploads/121027/_145H0a6.gif" alt="西普大陆金盏蜂皇技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/156375.html">金盏蜂皇</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/156376.html" class="bz_1">金盏蜂皇精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/156909.html" class="lj_1">金盏蜂皇练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="156375"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/156374.html" rel="J|12|4644"><img name="lzimg_33" lz_src="http://newsimg.5054399.com/uploads/120427/_0Z23YC.gif" alt="西普大陆金盏蜂兵技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/156374.html">金盏蜂兵</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/156376.html" class="bz_1">金盏蜂兵精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/156905.html" class="lj_1">金盏蜂兵练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="156374"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/156372.html" rel="J|12|4644"><img name="lzimg_33" lz_src="http://newsimg.5054399.com/uploads/120427/_0Z303163.gif" alt="西普大陆金盏蜂仔技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/156372.html">金盏蜂仔</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/156376.html" class="bz_1">金盏蜂仔精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/156901.html" class="lj_1">金盏蜂仔练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="156372"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/211720.html" rel="Q|13|4646"><img name="lzimg_34" lz_src="http://newsimg.5054399.com/uploads/litimg/121108/1RP1Y35C.gif" alt="西普大陆沁晶勇斗士技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/211720.html">沁晶勇斗士</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/211687.html" class="bz_1">沁晶勇斗士精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/212395.html" class="lj_1">沁晶勇斗士练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="211720"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/211718.html" rel="Q|13|4646"><img name="lzimg_34" lz_src="http://newsimg.5054399.com/uploads/litimg/121108/1QUX91939.gif" alt="西普大陆沁晶战士技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/211718.html">沁晶战士</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/211687.html" class="bz_1">沁晶战士精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/212395.html" class="lj_1">沁晶战士练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="211718"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/211716.html" rel="J|13|4646"><img name="lzimg_34" lz_src="http://newsimg.5054399.com/uploads/litimg/121108/1Q103Y1057.gif" alt="西普大陆晶幼士技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/211716.html">晶幼士</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/211687.html" class="bz_1">晶幼士精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/212395.html" class="lj_1">晶幼士练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="211716"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/211623.html" rel="R|0|4647"><img name="lzimg_34" lz_src="http://newsimg.5054399.com/uploads/litimg/121108/150155Y3061.gif" alt="西普大陆R2D4技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/211623.html">R2D4</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/211471.html" class="bz_1">R2D4精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/212307.html" class="lj_1">R2D4练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="211623"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/211618.html" rel="R|0|4647"><img name="lzimg_34" lz_src="http://newsimg.5054399.com/uploads/litimg/121108/145341YO42.gif" alt="西普大陆R2D3技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/211618.html">R2D3</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/211471.html" class="bz_1">R2D3精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/212307.html" class="lj_1">R2D3练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="211618"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/211601.html" rel="R|0|4647"><img name="lzimg_34" lz_src="http://newsimg.5054399.com/uploads/litimg/121108/143G0Y2250.gif" alt="西普大陆R2D2技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/211601.html">R2D2</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/211471.html" class="bz_1">R2D2精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/212307.html" class="lj_1">R2D2练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="211601"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/211565.html" rel="W|0|4643"><img name="lzimg_34" lz_src="http://newsimg.5054399.com/uploads/litimg/121108/141014Y30N.gif" alt="西普大陆武装皮耶罗技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/211565.html">武装皮耶罗</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/211474.html" class="bz_1">武装皮耶罗精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/212371.html" class="lj_1">武装皮耶罗练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="211565"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/211561.html" rel="H|0|4643"><img name="lzimg_34" lz_src="http://newsimg.5054399.com/uploads/litimg/121108/140PN93119.gif" alt="西普大陆红发耶罗技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/211561.html">红发耶罗</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/211474.html" class="bz_1">红发耶罗精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/212371.html" class="lj_1">红发耶罗练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="211561"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/211559.html" rel="B|0|4643"><img name="lzimg_34" lz_src="http://newsimg.5054399.com/uploads/litimg/121108/140635Y2N5.gif" alt="西普大陆棒棒耶罗技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/211559.html">棒棒耶罗</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/211474.html" class="bz_1">棒棒耶罗精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/212371.html" class="lj_1">棒棒耶罗练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="211559"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/209404.html" rel="Z|0|4639"><img name="lzimg_34" lz_src="http://newsimg.5054399.com/uploads/litimg/121101/150431YJX.gif" alt="西普大陆装甲渔人技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/209404.html">装甲渔人</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/209361.html" class="bz_1">装甲渔人精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/210018.html" class="lj_1">装甲渔人练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="209404"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/209399.html" rel="J|0|4639"><img name="lzimg_34" lz_src="http://newsimg.5054399.com/uploads/litimg/121101/14551b93957.gif" alt="西普大陆机枪渔人技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/209399.html">机枪渔人</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/209361.html" class="bz_1">机枪渔人精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/210018.html" class="lj_1">机枪渔人练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="209399"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/209395.html" rel="L|0|4639"><img name="lzimg_34" lz_src="http://newsimg.5054399.com/uploads/litimg/121101/144Jb92X5.gif" alt="西普大陆喽啰渔兵技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/209395.html">喽啰渔兵</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/209361.html" class="bz_1">喽啰渔兵精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/210018.html" class="lj_1">喽啰渔兵练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="209395"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/207210.html" rel="Z|0|4644"><img name="lzimg_34" lz_src="http://newsimg.5054399.com/uploads/121027/_135H3617.gif" alt="西普大陆折折女王技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/207210.html">折折女王</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/207059.html" class="bz_1">折折女王精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/207978.html" class="lj_1">折折女王练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="207210"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/207203.html" rel="C|0|4644"><img name="lzimg_35" lz_src="http://newsimg.5054399.com/uploads/121027/_135J6158.gif" alt="西普大陆彩纹折折技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/207203.html">彩纹折折</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/207059.html" class="bz_1">彩纹折折精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/207978.html" class="lj_1">彩纹折折练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="207203"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/207199.html" rel="Z|0|4644"><img name="lzimg_35" lz_src="http://newsimg.5054399.com/uploads/litimg/121025/16000b91045.gif" alt="西普大陆折折技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/207199.html">折折</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/207059.html" class="bz_1">折折精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/207978.html" class="lj_1">折折练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="207199"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/207156.html" rel="W|12|4650"><img name="lzimg_35" lz_src="http://newsimg.5054399.com/uploads/litimg/121025/143311Y9257.gif" alt="西普大陆万圣之主技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/207156.html">万圣之主</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/207075.html" class="bz_1">万圣之主精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/207938.html" class="lj_1">万圣之主练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="207156"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/207151.html" rel="W|12|4650"><img name="lzimg_35" lz_src="http://newsimg.5054399.com/uploads/litimg/121025/14262N91539.gif" alt="西普大陆万圣之子技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/207151.html">万圣之子</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/207075.html" class="bz_1">万圣之子精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/207938.html" class="lj_1">万圣之子练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="207151"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/207145.html" rel="W|12|4650"><img name="lzimg_35" lz_src="http://newsimg.5054399.com/uploads/litimg/121025/141T5YS33.gif" alt="西普大陆万圣之灵技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/207145.html">万圣之灵</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/207075.html" class="bz_1">万圣之灵精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/207938.html" class="lj_1">万圣之灵练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="207145"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/blx/205088.html" rel="M|0|4645"><img name="lzimg_35" lz_src="http://newsimg.5054399.com/uploads/litimg/121018/145Z0YAI.gif" alt="西普大陆魔王爆弹技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/blx/205088.html">魔王爆弹</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/204915.html" class="bz_1">魔王爆弹精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/205740.html" class="lj_1">魔王爆弹练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="205088"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/blx/205084.html" rel="L|0|4645"><img name="lzimg_35" lz_src="http://newsimg.5054399.com/uploads/litimg/121018/145150YcW.gif" alt="西普大陆烈焰爆弹技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/blx/205084.html">烈焰爆弹</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/204915.html" class="bz_1">烈焰爆弹精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/205740.html" class="lj_1">烈焰爆弹练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="205084"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/blx/205078.html" rel="X|0|4645"><img name="lzimg_35" lz_src="http://newsimg.5054399.com/uploads/litimg/121018/143T3Y6115.gif" alt="西普大陆小爆弹技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/blx/205078.html">小爆弹</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/204915.html" class="bz_1">小爆弹精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/205740.html" class="lj_1">小爆弹练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="205078"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/203070.html" rel="K|0|4650"><img name="lzimg_35" lz_src="http://newsimg.5054399.com/uploads/121027/_1400092G.gif" alt="西普大陆凯里威尔斯技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/203070.html">凯里威尔斯</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/202978.html" class="bz_1">凯里威尔斯精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/203510.html" class="lj_1">凯里威尔斯练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="203070"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/203068.html" rel="K|0|4650"><img name="lzimg_35" lz_src="http://newsimg.5054399.com/uploads/litimg/121011/151600Y4324.gif" alt="西普大陆凯里威技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/203068.html">凯里威</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/202978.html" class="bz_1">凯里威精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/203510.html" class="lj_1">凯里威练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="203068"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/203066.html" rel="K|0|4650"><img name="lzimg_35" lz_src="http://newsimg.5054399.com/uploads/121027/_1400431P.gif" alt="西普大陆凯里技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/203066.html">凯里</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/202978.html" class="bz_1">凯里精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/203510.html" class="lj_1">凯里练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="203066"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/203060.html" rel="B|0|4646"><img name="lzimg_35" lz_src="http://newsimg.5054399.com/uploads/121027/_140401c5.gif" alt="西普大陆冰心叮当技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/203060.html">冰心叮当</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/202984.html" class="bz_1">冰心叮当精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/203558.html" class="lj_1">冰心叮当练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="203060"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/203058.html" rel="B|0|4646"><img name="lzimg_35" lz_src="http://newsimg.5054399.com/uploads/litimg/121011/15064bb4L.gif" alt="西普大陆冰晶叮当技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/203058.html">冰晶叮当</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/202984.html" class="bz_1">冰晶叮当精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/203558.html" class="lj_1">冰晶叮当练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="203058"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/203057.html" rel="B|0|4646"><img name="lzimg_36" lz_src="http://newsimg.5054399.com/uploads/121027/_14031R62.gif" alt="西普大陆冰叮当技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/203057.html">冰叮当</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/202984.html" class="bz_1">冰叮当精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/203558.html" class="lj_1">冰叮当练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="203057"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/200935.html" rel="W|13|4642"><img name="lzimg_36" lz_src="http://newsimg.5054399.com/uploads/121027/_140PLP.gif" alt="西普大陆武装猛犸技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/200935.html">武装猛犸</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/200668.html" class="bz_1">武装猛犸精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/201762.html" class="lj_1">武装猛犸练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="200935"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/200934.html" rel="B|13|4642"><img name="lzimg_36" lz_src="http://newsimg.5054399.com/uploads/121027/_140T3F6.gif" alt="西普大陆鼻钉猛犸技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/200934.html">鼻钉猛犸</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/200668.html" class="bz_1">鼻钉猛犸精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/201762.html" class="lj_1">鼻钉猛犸练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="200934"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/200933.html" rel="G|13|4642"><img name="lzimg_36" lz_src="http://newsimg.5054399.com/uploads/121027/_140919551.gif" alt="西普大陆钢牙小猛技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/200933.html">钢牙小猛</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/200668.html" class="bz_1">钢牙小猛精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/201762.html" class="lj_1">钢牙小猛练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="200933"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/200926.html" rel="S|13|4650"><img name="lzimg_36" lz_src="http://newsimg.5054399.com/uploads/121017/_154Z64U.gif" alt="西普大陆神灯苏丹技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/200926.html">神灯苏丹</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/200667.html" class="bz_1">神灯苏丹精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/201752.html" class="lj_1">神灯苏丹练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="200926"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/200925.html" rel="S|13|4650"><img name="lzimg_36" lz_src="http://newsimg.5054399.com/uploads/121027/_14014W25.gif" alt="西普大陆神灯埃米尔技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/200925.html">神灯埃米尔</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/200667.html" class="bz_1">神灯埃米尔精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/201752.html" class="lj_1">神灯埃米尔练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="200925"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/200921.html" rel="S|13|4650"><img name="lzimg_36" lz_src="http://newsimg.5054399.com/uploads/121027/_140220359.gif" alt="西普大陆神灯小胖技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/200921.html">神灯小胖</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/200667.html" class="bz_1">神灯小胖精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/201752.html" class="lj_1">神灯小胖练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="200921"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/200918.html" rel="J|13|4641"><img name="lzimg_36" lz_src="http://newsimg.5054399.com/uploads/121027/_141443236.gif" alt="西普大陆疾风烈焰犬技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/200918.html">疾风烈焰犬</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/200669.html" class="bz_1">疾风烈焰犬精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/201735.html" class="lj_1">疾风烈焰犬练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="200918"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/200916.html" rel="L|13|4641"><img name="lzimg_36" lz_src="http://newsimg.5054399.com/uploads/121027/_14150S32.gif" alt="西普大陆烈风犬技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/200916.html">烈风犬</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/200669.html" class="bz_1">烈风犬精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/201735.html" class="lj_1">烈风犬练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="200916"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/200915.html" rel="F|13|4641"><img name="lzimg_36" lz_src="http://newsimg.5054399.com/uploads/121017/_1551533K.gif" alt="西普大陆风犬技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/200915.html">风犬</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/200669.html" class="bz_1">风犬精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/201735.html" class="lj_1">风犬练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="200915"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/200891.html" rel="J|12|4644"><img name="lzimg_36" lz_src="http://newsimg.5054399.com/uploads/120927/_191203621.gif" alt="西普大陆绝代双椒技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/200891.html">绝代双椒</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/200673.html" class="bz_1">绝代双椒精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/201701.html" class="lj_1">绝代双椒练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="200891"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/200888.html" rel="H|12|4644"><img name="lzimg_36" lz_src="http://newsimg.5054399.com/uploads/121027/_135U3I2.gif" alt="西普大陆火爆椒技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/200888.html">火爆椒</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/200673.html" class="bz_1">火爆椒精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/201701.html" class="lj_1">火爆椒练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="200888"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/200884.html" rel="T|12|4644"><img name="lzimg_36" lz_src="http://newsimg.5054399.com/uploads/120927/_191410B9.gif" alt="西普大陆甜小椒技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/200884.html">甜小椒</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/200673.html" class="bz_1">甜小椒精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/201701.html" class="lj_1">甜小椒练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="200884"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/200868.html" rel="K|12|4644"><img name="lzimg_37" lz_src="http://newsimg.5054399.com/uploads/121027/_135921N3.gif" alt="西普大陆凯克希亚技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/200868.html">凯克希亚</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/200689.html" class="bz_1">凯克希亚精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/201673.html" class="lj_1">凯克希亚练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="200868"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/200860.html" rel="K|12|4644"><img name="lzimg_37" lz_src="http://newsimg.5054399.com/uploads/litimg/120927/1J04Xa5V.gif" alt="西普大陆凯克牛仔技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/200860.html">凯克牛仔</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/200689.html" class="bz_1">凯克牛仔精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/201673.html" class="lj_1">凯克牛仔练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="200860"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/200857.html" rel="K|12|4644"><img name="lzimg_37" lz_src="http://newsimg.5054399.com/uploads/litimg/120927/1IJ0Y9B7.gif" alt="西普大陆凯利技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/200857.html">凯利</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/200689.html" class="bz_1">凯利精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/201673.html" class="lj_1">凯利练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="200857"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/blx/200851.html" rel="Y|12|4645"><img name="lzimg_37" lz_src="http://newsimg.5054399.com/uploads/121027/_1405592T.gif" alt="西普大陆岩晶王波多技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/blx/200851.html">岩晶王波多</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/200695.html" class="bz_1">岩晶王波多精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/201653.html" class="lj_1">岩晶王波多练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="200851"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/blx/200845.html" rel="J|12|4645"><img name="lzimg_37" lz_src="http://newsimg.5054399.com/uploads/121027/_140FA33.gif" alt="西普大陆晶钻波多技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/blx/200845.html">晶钻波多</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/200695.html" class="bz_1">晶钻波多精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/201653.html" class="lj_1">晶钻波多练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="200845"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/blx/200843.html" rel="B|12|4645"><img name="lzimg_37" lz_src="http://newsimg.5054399.com/uploads/litimg/120927/1FKb941M.gif" alt="西普大陆波多技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/blx/200843.html">波多</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/200695.html" class="bz_1">波多精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/201653.html" class="lj_1">波多练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="200843"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/200839.html" rel="T|12|4644"><img name="lzimg_37" lz_src="http://newsimg.5054399.com/uploads/litimg/120927/1F302Ycb.gif" alt="西普大陆塔诺技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/200839.html">塔诺</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/200693.html" class="bz_1">塔诺精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/201630.html" class="lj_1">塔诺练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="200839"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/200832.html" rel="Z|0|4643"><img name="lzimg_37" lz_src="http://newsimg.5054399.com/uploads/121027/_1350133T.gif" alt="西普大陆Z极双磁鼠技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/200832.html">Z极双磁鼠</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/200722.html" class="bz_1">Z极双磁鼠精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/201610.html" class="lj_1">Z极双磁鼠练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="200832"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/200829.html" rel="Z|0|4643"><img name="lzimg_37" lz_src="http://newsimg.5054399.com/uploads/121027/_13510B11.gif" alt="西普大陆Z力鼠技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/200829.html">Z力鼠</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/200722.html" class="bz_1">Z力鼠精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/201610.html" class="lj_1">Z力鼠练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="200829"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/200822.html" rel="Z|0|4643"><img name="lzimg_37" lz_src="http://newsimg.5054399.com/uploads/litimg/120927/163100Y4620.gif" alt="西普大陆Z幼鼠技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/200822.html">Z幼鼠</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/200722.html" class="bz_1">Z幼鼠精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/201610.html" class="lj_1">Z幼鼠练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="200822"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/200781.html" rel="D|0|4639"><img name="lzimg_37" lz_src="http://newsimg.5054399.com/uploads/litimg/120927/154F1Y5G9.gif" alt="西普大陆电光安康技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/200781.html">电光安康</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/200725.html" class="bz_1">电光安康精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/201573.html" class="lj_1">电光安康练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="200781"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/200773.html" rel="D|0|4639"><img name="lzimg_37" lz_src="http://newsimg.5054399.com/uploads/litimg/120927/153352Y2G0.gif" alt="西普大陆灯小康技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/200773.html">灯小康</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/200725.html" class="bz_1">灯小康精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/201573.html" class="lj_1">灯小康练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="200773"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/200770.html" rel="A|0|4639"><img name="lzimg_37" lz_src="http://newsimg.5054399.com/uploads/121027/_135245647.gif" alt="西普大陆安小康技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/200770.html">安小康</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/200725.html" class="bz_1">安小康精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/201573.html" class="lj_1">安小康练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="200770"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/198752.html" rel="D|0|4647"><img name="lzimg_38" lz_src="http://newsimg.5054399.com/uploads/121027/_141531392.gif" alt="西普大陆多利安技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/198752.html">多利安</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/198631.html" class="bz_1">多利安精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/199452.html" class="lj_1">多利安练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="198752"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/198745.html" rel="D|0|4647"><img name="lzimg_38" lz_src="http://newsimg.5054399.com/uploads/121027/_141555A6.gif" alt="西普大陆多姆技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/198745.html">多姆</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/198631.html" class="bz_1">多姆精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/199452.html" class="lj_1">多姆练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="198745"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/198738.html" rel="X|0|4647"><img name="lzimg_38" lz_src="http://newsimg.5054399.com/uploads/litimg/120920/155500Y2019.gif" alt="西普大陆小多克技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/198738.html">小多克</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/198631.html" class="bz_1">小多克精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/199452.html" class="lj_1">小多克练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="198738"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/198722.html" rel="F|0|4644"><img name="lzimg_38" lz_src="http://newsimg.5054399.com/uploads/litimg/120920/15233D94023.gif" alt="西普大陆飞叶草狸技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/198722.html">飞叶草狸</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/198636.html" class="bz_1">飞叶草狸精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/199492.html" class="lj_1">飞叶草狸练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="198722"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/198714.html" rel="Y|0|4644"><img name="lzimg_38" lz_src="http://newsimg.5054399.com/uploads/121027/_135R5460.gif" alt="西普大陆叶帽草狸技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/198714.html">叶帽草狸</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/198636.html" class="bz_1">叶帽草狸精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/199492.html" class="lj_1">叶帽草狸练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="198714"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/198703.html" rel="X|0|4644"><img name="lzimg_38" lz_src="http://newsimg.5054399.com/uploads/litimg/120920/145223Y5118.gif" alt="西普大陆小叶草狸技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/198703.html">小叶草狸</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/198636.html" class="bz_1">小叶草狸精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/199492.html" class="lj_1">小叶草狸练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="198703"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/196889.html" rel="G|0|4639"><img name="lzimg_38" lz_src="http://newsimg.5054399.com/uploads/121027/_14101NU.gif" alt="西普大陆呱呱大王技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/196889.html">呱呱大王</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/196685.html" class="bz_1">呱呱大王精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/197663.html" class="lj_1">呱呱大王练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="196889"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/196886.html" rel="G|0|4639"><img name="lzimg_38" lz_src="http://newsimg.5054399.com/uploads/121027/_14112D95.gif" alt="西普大陆呱呱王子技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/196886.html">呱呱王子</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/196685.html" class="bz_1">呱呱王子精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/197663.html" class="lj_1">呱呱王子练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="196886"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/196883.html" rel="G|0|4639"><img name="lzimg_38" lz_src="http://newsimg.5054399.com/uploads/litimg/120913/164351YCY.gif" alt="西普大陆呱仔技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/196883.html">呱仔</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/196685.html" class="bz_1">呱仔精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/197663.html" class="lj_1">呱仔练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="196883"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/196790.html" rel="J|0|4639"><img name="lzimg_38" lz_src="http://newsimg.5054399.com/uploads/121027/_141313G2.gif" alt="西普大陆舰长蟹技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/196790.html">舰长蟹</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/196675.html" class="bz_1">舰长蟹精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/197644.html" class="lj_1">舰长蟹练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="196790"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/196788.html" rel="C|0|4639"><img name="lzimg_38" lz_src="http://newsimg.5054399.com/uploads/121027/_14135C41.gif" alt="西普大陆车长蟹技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/196788.html">车长蟹</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/196675.html" class="bz_1">车长蟹精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/197644.html" class="lj_1">车长蟹练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="196788"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/196775.html" rel="X|0|4639"><img name="lzimg_38" lz_src="http://newsimg.5054399.com/uploads/121027/_14141DM.gif" alt="西普大陆下士蟹技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/196775.html">下士蟹</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/196675.html" class="bz_1">下士蟹精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/197644.html" class="lj_1">下士蟹练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="196775"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/194899.html" rel="G|12|4639"><img name="lzimg_38" lz_src="http://newsimg.5054399.com/uploads/litimg/120906/161IXb403.gif" alt="西普大陆功夫达克技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/194899.html">功夫达克</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/194680.html" class="bz_1">功夫达克精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/195759.html" class="lj_1">功夫达克练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="194899"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/194893.html" rel="Z|12|4639"><img name="lzimg_39" lz_src="http://newsimg.5054399.com/uploads/litimg/120906/161131Y1621.gif" alt="西普大陆醉达克技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/194893.html">醉达克</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/194680.html" class="bz_1">醉达克精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/195759.html" class="lj_1">醉达克练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="194893"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/194886.html" rel="D|12|4639"><img name="lzimg_39" lz_src="http://newsimg.5054399.com/uploads/121027/_161642610.gif" alt="西普大陆达克技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/194886.html">达克</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/194680.html" class="bz_1">达克精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/195759.html" class="lj_1">达克练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="194886"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/194865.html" rel="C|0|4642"><img name="lzimg_39" lz_src="http://newsimg.5054399.com/uploads/121027/_153024505.gif" alt="西普大陆穿越蜗蜗技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/194865.html">穿越蜗蜗</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/194668.html" class="bz_1">穿越蜗蜗精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/195721.html" class="lj_1">穿越蜗蜗练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="194865"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/194858.html" rel="S|0|4642"><img name="lzimg_39" lz_src="http://newsimg.5054399.com/uploads/121027/_153104939.gif" alt="西普大陆时间蜗蜗技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/194858.html">时间蜗蜗</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/194668.html" class="bz_1">时间蜗蜗精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/195721.html" class="lj_1">时间蜗蜗练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="194858"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/194845.html" rel="W|0|4642"><img name="lzimg_39" lz_src="http://newsimg.5054399.com/uploads/121027/_153140344.gif" alt="西普大陆蜗蜗技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/194845.html">蜗蜗</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/194668.html" class="bz_1">蜗蜗精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/195721.html" class="lj_1">蜗蜗练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="194845"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/blx/194811.html" rel="Z|0|4645"><img name="lzimg_39" lz_src="http://newsimg.5054399.com/uploads/121027/_143ZS14.gif" alt="西普大陆重装音响音符技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/blx/194811.html">重装音响音符</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/194664.html" class="bz_1">重装音响音符精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/195744.html" class="lj_1">重装音响音符练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="194811"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/blx/194808.html" rel="D|0|4645"><img name="lzimg_39" lz_src="http://newsimg.5054399.com/uploads/121027/_143941131.gif" alt="西普大陆低音炮音符技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/blx/194808.html">低音炮音符</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/194664.html" class="bz_1">低音炮音符精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/195744.html" class="lj_1">低音炮音符练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="194808"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/blx/194796.html" rel="L|0|4645"><img name="lzimg_39" lz_src="http://newsimg.5054399.com/uploads/121027/_144012139.gif" alt="西普大陆留声音符技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/blx/194796.html">留声音符</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/194664.html" class="bz_1">留声音符精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/195744.html" class="lj_1">留声音符练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="194796"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/192929.html" rel="F|0|4647"><img name="lzimg_39" lz_src="http://newsimg.5054399.com/uploads/121027/_163403592.gif" alt="西普大陆飞翼奔狼技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/192929.html">飞翼奔狼</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/192763.html" class="bz_1">飞翼奔狼精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/193627.html" class="lj_1">飞翼奔狼练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="192929"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/192925.html" rel="Z|0|4647"><img name="lzimg_39" lz_src="http://newsimg.5054399.com/uploads/121027/_16333V54.gif" alt="西普大陆制导猎犬技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/192925.html">制导猎犬</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/192763.html" class="bz_1">制导猎犬精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/193627.html" class="lj_1">制导猎犬练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="192925"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/192923.html" rel="J|0|4647"><img name="lzimg_39" lz_src="http://newsimg.5054399.com/uploads/121027/_16342D40.gif" alt="西普大陆机械狗技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/192923.html">机械狗</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/192763.html" class="bz_1">机械狗精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/193627.html" class="lj_1">机械狗练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="192923"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/192902.html" rel="Y|0|4639"><img name="lzimg_39" lz_src="http://newsimg.5054399.com/uploads/litimg/120830/1J624Y33U.gif" alt="西普大陆鱿鱿战斗员技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/192902.html">鱿鱿战斗员</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/192766.html" class="bz_1">鱿鱿战斗员精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/193666.html" class="lj_1">鱿鱿战斗员练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="192902"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/192900.html" rel="Y|0|4639"><img name="lzimg_39" lz_src="http://newsimg.5054399.com/uploads/121027/_161H3963.gif" alt="西普大陆鱿鱿考察员技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/192900.html">鱿鱿考察员</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/192766.html" class="bz_1">鱿鱿考察员精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/193666.html" class="lj_1">鱿鱿考察员练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="192900"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/192881.html" rel="Y|0|4639"><img name="lzimg_40" lz_src="http://newsimg.5054399.com/uploads/121027/_161J95B.gif" alt="西普大陆鱿鱿宇航员技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/192881.html">鱿鱿宇航员</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/192766.html" class="bz_1">鱿鱿宇航员精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/193666.html" class="lj_1">鱿鱿宇航员练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="192881"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/190596.html" rel="C|0|4642"><img name="lzimg_40" lz_src="http://newsimg.5054399.com/uploads/121027/_153214449.gif" alt="西普大陆瓷歪歪技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/190596.html">瓷歪歪</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/190519.html" class="bz_1">瓷歪歪精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/191430.html" class="lj_1">瓷歪歪练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="190596"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/190589.html" rel="T|0|4642"><img name="lzimg_40" lz_src="http://newsimg.5054399.com/uploads/litimg/120823/1TZ3Y4935.gif" alt="西普大陆陶嘭嘭技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/190589.html">陶嘭嘭</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/190519.html" class="bz_1">陶嘭嘭精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/191430.html" class="lj_1">陶嘭嘭练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="190589"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/190577.html" rel="N|0|4642"><img name="lzimg_40" lz_src="http://newsimg.5054399.com/uploads/litimg/120823/1PU3YLI.gif" alt="西普大陆泥卜卜技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/190577.html">泥卜卜</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/190519.html" class="bz_1">泥卜卜精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/191430.html" class="lj_1">泥卜卜练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="190577"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/190564.html" rel="J|0|4641"><img name="lzimg_40" lz_src="http://newsimg.5054399.com/uploads/litimg/120823/1I501YL06.gif" alt="西普大陆疾风之鹰技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/190564.html">疾风之鹰</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/190521.html" class="bz_1">疾风之鹰精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/191418.html" class="lj_1">疾风之鹰练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="190564"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/190558.html" rel="L|0|4641"><img name="lzimg_40" lz_src="http://newsimg.5054399.com/uploads/121027/_155352T7.gif" alt="西普大陆凌风小鹰技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/190558.html">凌风小鹰</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/190521.html" class="bz_1">凌风小鹰精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/191418.html" class="lj_1">凌风小鹰练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="190558"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/190546.html" rel="D|0|4641"><img name="lzimg_40" lz_src="http://newsimg.5054399.com/uploads/litimg/120823/1G424Y9111.gif" alt="西普大陆带壳小鹰技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/190546.html">带壳小鹰</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/190521.html" class="bz_1">带壳小鹰精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/191418.html" class="lj_1">带壳小鹰练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="190546"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/188132.html" rel="C|12|4640"><img name="lzimg_40" lz_src="http://newsimg.5054399.com/uploads/121027/_1604255H.gif" alt="西普大陆赤射流星技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/188132.html">赤射流星</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/185703.html" class="bz_1">赤射流星精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/191389.html" class="lj_1">赤射流星练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="188132"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/188127.html" rel="J|12|4640"><img name="lzimg_40" lz_src="http://newsimg.5054399.com/uploads/litimg/120816/1K40Xc2W.gif" alt="西普大陆疾火流星技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/188127.html">疾火流星</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/185703.html" class="bz_1">疾火流星精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/191389.html" class="lj_1">疾火流星练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="188127"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/188109.html" rel="H|12|4640"><img name="lzimg_40" lz_src="http://newsimg.5054399.com/uploads/121027/_16044I46.gif" alt="西普大陆火流星技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/188109.html">火流星</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/185703.html" class="bz_1">火流星精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/191389.html" class="lj_1">火流星练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="188109"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/188092.html" rel="D|0|4643"><img name="lzimg_40" lz_src="http://newsimg.5054399.com/uploads/litimg/120816/1F310YG61.gif" alt="西普大陆电池炮手技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/188092.html">电池炮手</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/187912.html" class="bz_1">电池炮手精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/189333.html" class="lj_1">电池炮手练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="188092"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/188083.html" rel="D|0|4643"><img name="lzimg_40" lz_src="http://newsimg.5054399.com/uploads/litimg/120816/1A12N92536.gif" alt="西普大陆电池枪手技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/188083.html">电池枪手</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/187912.html" class="bz_1">电池枪手精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/189333.html" class="lj_1">电池枪手练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="188083"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/188073.html" rel="D|0|4643"><img name="lzimg_40" lz_src="http://newsimg.5054399.com/uploads/litimg/120816/163Sb9D58.gif" alt="西普大陆电池蜻蜓技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/188073.html">电池蜻蜓</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/187912.html" class="bz_1">电池蜻蜓精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/189333.html" class="lj_1">电池蜻蜓练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="188073"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/188046.html" rel="X|0|4641"><img name="lzimg_41" lz_src="http://newsimg.5054399.com/uploads/litimg/120816/161143YR43.gif" alt="西普大陆翔天小滴技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/188046.html">翔天小滴</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/187908.html" class="bz_1">翔天小滴精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/189286.html" class="lj_1">翔天小滴练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="188046"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/188040.html" rel="Q|0|4641"><img name="lzimg_41" lz_src="http://newsimg.5054399.com/uploads/litimg/120816/160253Y5205.gif" alt="西普大陆晴天小滴技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/188040.html">晴天小滴</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/187908.html" class="bz_1">晴天小滴精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/189286.html" class="lj_1">晴天小滴练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="188040"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/188004.html" rel="X|0|4641"><img name="lzimg_41" lz_src="http://newsimg.5054399.com/uploads/litimg/120816/153941Y4495.gif" alt="西普大陆小滴技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/188004.html">小滴</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/187908.html" class="bz_1">小滴精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/189286.html" class="lj_1">小滴练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="188004"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/185917.html" rel="X|12|4647"><img name="lzimg_41" lz_src="http://newsimg.5054399.com/uploads/litimg/120809/215945Y4446.gif" alt="西普大陆悬浮侠技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/185917.html">悬浮侠</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/185696.html" class="bz_1">悬浮侠精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/186948.html" class="lj_1">悬浮侠练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="185917"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/185916.html" rel="G|12|4647"><img name="lzimg_41" lz_src="http://newsimg.5054399.com/uploads/121027/_1634555N.gif" alt="西普大陆高铁侠技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/185916.html">高铁侠</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/185696.html" class="bz_1">高铁侠精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/186943.html" class="lj_1">高铁侠练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="185916"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/185915.html" rel="D|12|4647"><img name="lzimg_41" lz_src="http://newsimg.5054399.com/uploads/litimg/120809/214523Y5a5.gif" alt="西普大陆动车侠技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/185915.html">动车侠</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/185696.html" class="bz_1">动车侠精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/186939.html" class="lj_1">动车侠练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="185915"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/185913.html" rel="M|0|4641"><img name="lzimg_41" lz_src="http://newsimg.5054399.com/uploads/litimg/120809/212A4Y5202.gif" alt="西普大陆魔魂之剑技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/185913.html">魔魂之剑</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/185701.html" class="bz_1">魔魂之剑精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/187015.html" class="lj_1">魔魂之剑练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="185913"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/185912.html" rel="M|0|4641"><img name="lzimg_41" lz_src="http://newsimg.5054399.com/uploads/litimg/120809/211914YPK.gif" alt="西普大陆魔源之剑技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/185912.html">魔源之剑</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/185701.html" class="bz_1">魔源之剑精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/187011.html" class="lj_1">魔源之剑练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="185912"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/185911.html" rel="M|0|4641"><img name="lzimg_41" lz_src="http://newsimg.5054399.com/uploads/litimg/120809/211031Y5344.gif" alt="西普大陆魔力之剑技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/185911.html">魔力之剑</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/185701.html" class="bz_1">魔力之剑精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/187007.html" class="lj_1">魔力之剑练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="185911"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/185910.html" rel="B|0|4640"><img name="lzimg_41" lz_src="http://newsimg.5054399.com/uploads/121027/_160524S4.gif" alt="西普大陆百变悠悠技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/185910.html">百变悠悠</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/185699.html" class="bz_1">百变悠悠精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/186990.html" class="lj_1">百变悠悠练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="185910"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/185909.html" rel="S|0|4640"><img name="lzimg_41" lz_src="http://newsimg.5054399.com/uploads/121027/_1605521R.gif" alt="西普大陆双响悠悠技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/185909.html">双响悠悠</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/185699.html" class="bz_1">双响悠悠精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/186989.html" class="lj_1">双响悠悠练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="185909"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/185908.html" rel="Y|0|4640"><img name="lzimg_41" lz_src="http://newsimg.5054399.com/uploads/litimg/120809/203400Y2L3.gif" alt="西普大陆悠悠技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/185908.html">悠悠</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/185699.html" class="bz_1">悠悠精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/186976.html" class="lj_1">悠悠练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="185908"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/185907.html" rel="C|12|4650"><img name="lzimg_41" lz_src="http://newsimg.5054399.com/uploads/litimg/120809/201231Y1406.gif" alt="西普大陆裁决之神技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/185907.html">裁决之神</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/185697.html" class="bz_1">裁决之神精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/186965.html" class="lj_1">裁决之神练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="185907"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/185900.html" rel="W|12|4650"><img name="lzimg_42" lz_src="http://newsimg.5054399.com/uploads/121027/_142006153.gif" alt="西普大陆亡者护卫技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/185900.html">亡者护卫</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/185697.html" class="bz_1">亡者护卫精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/186960.html" class="lj_1">亡者护卫练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="185900"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/185898.html" rel="A|12|4650"><img name="lzimg_42" lz_src="http://newsimg.5054399.com/uploads/litimg/120809/19420X94601.gif" alt="西普大陆阿努比斯技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/anxi/185898.html">阿努比斯</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/185697.html" class="bz_1">阿努比斯精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/186956.html" class="lj_1">阿努比斯练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="185898"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/183675.html" rel="D|0|4647"><img name="lzimg_42" lz_src="http://newsimg.5054399.com/uploads/litimg/120802/21201X95502.gif" alt="西普大陆导弹战列鱼技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/183675.html">导弹战列鱼</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/183646.html" class="bz_1">导弹战列鱼精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/184739.html" class="lj_1">导弹战列鱼练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="183675"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/183672.html" rel="J|0|4647"><img name="lzimg_42" lz_src="http://newsimg.5054399.com/uploads/litimg/120802/21094N9C50.gif" alt="西普大陆机枪巡洋鱼技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/183672.html">机枪巡洋鱼</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/183646.html" class="bz_1">机枪巡洋鱼精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/184736.html" class="lj_1">机枪巡洋鱼练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="183672"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/183668.html" rel="T|0|4647"><img name="lzimg_42" lz_src="http://newsimg.5054399.com/uploads/litimg/120802/205Zb96492.gif" alt="西普大陆铁甲潜猎鱼技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/183668.html">铁甲潜猎鱼</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/183646.html" class="bz_1">铁甲潜猎鱼精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/184733.html" class="lj_1">铁甲潜猎鱼练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="183668"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/183653.html" rel="H|0|4647"><img name="lzimg_42" lz_src="http://newsimg.5054399.com/uploads/121027/_163541151.gif" alt="西普大陆轰速小子技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/183653.html">轰速小子</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/183644.html" class="bz_1">轰速小子精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/184696.html" class="lj_1">轰速小子练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="183653"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/183651.html" rel="J|0|4647"><img name="lzimg_42" lz_src="http://newsimg.5054399.com/uploads/litimg/120802/20241b92194.gif" alt="西普大陆急速小子技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/183651.html">急速小子</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/183644.html" class="bz_1">急速小子精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/184689.html" class="lj_1">急速小子练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="183651"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/183650.html" rel="S|0|4647"><img name="lzimg_42" lz_src="http://newsimg.5054399.com/uploads/litimg/120802/201340YPY.gif" alt="西普大陆速度小子技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/183650.html">速度小子</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/183644.html" class="bz_1">速度小子精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/184669.html" class="lj_1">速度小子练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="183650"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/181406.html" rel="Z|12|4641"><img name="lzimg_42" lz_src="http://newsimg.5054399.com/uploads/121027/_155419536.gif" alt="西普大陆佐罗球克技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/181406.html">佐罗球克</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/181325.html" class="bz_1">佐罗球克精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/182120.html" class="lj_1">佐罗球克练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="181406"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/181403.html" rel="X|12|4641"><img name="lzimg_42" lz_src="http://newsimg.5054399.com/uploads/121027/_1554423A.gif" alt="西普大陆侠盗球克技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/181403.html">侠盗球克</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/181325.html" class="bz_1">侠盗球克精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/182110.html" class="lj_1">侠盗球克练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="181403"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/181399.html" rel="Q|12|4641"><img name="lzimg_42" lz_src="http://newsimg.5054399.com/uploads/121027/_15550RH.gif" alt="西普大陆球克技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/181399.html">球克</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/181325.html" class="bz_1">球克精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/182091.html" class="lj_1">球克练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="181399"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/blx/181393.html" rel="W|0|4645"><img name="lzimg_42" lz_src="http://newsimg.5054399.com/uploads/litimg/120726/1S444YIK.gif" alt="西普大陆威武小刺技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/blx/181393.html">威武小刺</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/181334.html" class="bz_1">威武小刺精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/182159.html" class="lj_1">威武小刺练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="181393"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/blx/181392.html" rel="Z|0|4645"><img name="lzimg_42" lz_src="http://newsimg.5054399.com/uploads/121027/_144102958.gif" alt="西普大陆正义小刺技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/blx/181392.html">正义小刺</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/181334.html" class="bz_1">正义小刺精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/182157.html" class="lj_1">正义小刺练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="181392"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/blx/181389.html" rel="Y|0|4645"><img name="lzimg_43" lz_src="http://newsimg.5054399.com/uploads/121027/_144254S1.gif" alt="西普大陆月光小刺技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/blx/181389.html">月光小刺</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/181334.html" class="bz_1">月光小刺精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/182146.html" class="lj_1">月光小刺练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="181389"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/181384.html" rel="J|0|4644"><img name="lzimg_43" lz_src="http://newsimg.5054399.com/uploads/121027/_14524TA.gif" alt="西普大陆剪刀手木木技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/181384.html">剪刀手木木</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/181329.html" class="bz_1">剪刀手木木精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/182167.html" class="lj_1">剪刀手木木练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="181384"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/181374.html" rel="J|0|4644"><img name="lzimg_43" lz_src="http://newsimg.5054399.com/uploads/121027/_145350304.gif" alt="西普大陆机械木木技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/181374.html">机械木木</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/181329.html" class="bz_1">机械木木精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/182165.html" class="lj_1">机械木木练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="181374"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/181367.html" rel="M|0|4644"><img name="lzimg_43" lz_src="http://newsimg.5054399.com/uploads/litimg/120726/1I222Yc61.gif" alt="西普大陆木木技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/181367.html">木木</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/181329.html" class="bz_1">木木精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/182163.html" class="lj_1">木木练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="181367"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/181349.html" rel="G|12|4642"><img name="lzimg_43" lz_src="http://newsimg.5054399.com/uploads/121027/_153243H2.gif" alt="西普大陆哥布林勇士技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/181349.html">哥布林勇士</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/181320.html" class="bz_1">哥布林勇士精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/182137.html" class="lj_1">哥布林勇士练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="181349"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/148838.html" rel="G|0|4642"><img name="lzimg_43" lz_src="http://newsimg.5054399.com/uploads/userup/1204/23111625B27.gif" alt="西普大陆哥布林士兵技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/148838.html">哥布林士兵</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/149964.html" class="bz_1">哥布林士兵精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/150200.html" class="lj_1">哥布林士兵练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="148838"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/149724.html" rel="G|0|4642"><img name="lzimg_43" lz_src="http://newsimg.5054399.com/uploads/userup/1204/23111AKE8.gif" alt="西普大陆哥布林哨兵技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/149724.html">哥布林哨兵</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/149964.html" class="bz_1">哥布林哨兵精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/150133.html" class="lj_1">哥布林哨兵练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="149724"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/178669.html" rel="M|0|4646"><img name="lzimg_43" lz_src="http://newsimg.5054399.com/uploads/121027/_142641118.gif" alt="西普大陆魔术普卡技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/178669.html">魔术普卡</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/178582.html" class="bz_1">魔术普卡精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/179471.html" class="lj_1">魔术普卡练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="178669"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/178666.html" rel="P|0|4646"><img name="lzimg_43" lz_src="http://newsimg.5054399.com/uploads/121027/_142R0558.gif" alt="西普大陆普卡技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/178666.html">普卡</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/178582.html" class="bz_1">普卡精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/179456.html" class="lj_1">普卡练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="178666"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/178662.html" rel="M|0|4646"><img name="lzimg_43" lz_src="http://newsimg.5054399.com/uploads/121027/_142UTP.gif" alt="西普大陆魔艾技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/178662.html">魔艾</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/178582.html" class="bz_1">魔艾精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/179436.html" class="lj_1">魔艾练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="178662"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/176245.html" rel="H|12|4646"><img name="lzimg_43" lz_src="http://newsimg.5054399.com/uploads/121027/_142920461.gif" alt="西普大陆寒冰至尊技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/176245.html">寒冰至尊</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/176066.html" class="bz_1">寒冰至尊精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/176955.html" class="lj_1">寒冰至尊练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="176245"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/176243.html" rel="H|12|4646"><img name="lzimg_43" lz_src="http://newsimg.5054399.com/uploads/litimg/120712/21002b95092.gif" alt="西普大陆寒冰王技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/176243.html">寒冰王</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/176066.html" class="bz_1">寒冰王精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/176944.html" class="lj_1">寒冰王练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="176243"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/176242.html" rel="H|12|4646"><img name="lzimg_43" lz_src="http://newsimg.5054399.com/uploads/121027/_14295QF.gif" alt="西普大陆寒星技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/176242.html">寒星</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/176066.html" class="bz_1">寒星精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/176933.html" class="lj_1">寒星练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="176242"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/176241.html" rel="J|0|4642"><img name="lzimg_44" lz_src="http://newsimg.5054399.com/uploads/121027/_153315596.gif" alt="西普大陆巨镰矮人酋长技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/176241.html">石镰矮人酋长</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/176060.html" class="bz_1">石镰矮人酋长精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/176869.html" class="lj_1">石镰矮人酋长练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="176241"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/176240.html" rel="Y|0|4642"><img name="lzimg_44" lz_src="http://newsimg.5054399.com/uploads/121027/_153402160.gif" alt="西普大陆翼斧矮人技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/176240.html">翼斧矮人</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/176060.html" class="bz_1">翼斧矮人精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/176841.html" class="lj_1">翼斧矮人练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="176240"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/176239.html" rel="Y|0|4642"><img name="lzimg_44" lz_src="http://newsimg.5054399.com/uploads/121027/_153425X2.gif" alt="西普大陆牙矛矮人技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/176239.html">牙矛矮人</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/176060.html" class="bz_1">牙矛矮人精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/176824.html" class="lj_1">牙矛矮人练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="176239"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/176236.html" rel="M|0|4643"><img name="lzimg_44" lz_src="http://newsimg.5054399.com/uploads/121027/_1504054W.gif" alt="西普大陆魔方王蛇技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/176236.html">魔方王蛇</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/176062.html" class="bz_1">魔方王蛇精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/176918.html" class="lj_1">魔方王蛇练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="176236"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/176233.html" rel="M|0|4643"><img name="lzimg_44" lz_src="http://newsimg.5054399.com/uploads/litimg/120712/192GbbI1.gif" alt="西普大陆魔方巨蛇技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/176233.html">魔方巨蛇</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/176062.html" class="bz_1">魔方巨蛇精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/176912.html" class="lj_1">魔方巨蛇练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="176233"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/176228.html" rel="M|0|4643"><img name="lzimg_44" lz_src="http://newsimg.5054399.com/uploads/121027/_150434a0.gif" alt="西普大陆魔方幼蛇技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/176228.html">魔方幼蛇</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/176062.html" class="bz_1">魔方幼蛇精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/176900.html" class="lj_1">魔方幼蛇练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="176228"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/173958.html" rel="L|0|4643"><img name="lzimg_44" lz_src="http://newsimg.5054399.com/uploads/121027/_150545552.gif" alt="西普大陆雷云精灵技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/173958.html">雷云精灵</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/173915.html" class="bz_1">雷云精灵精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/174745.html" class="lj_1">雷云精灵练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="173958"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/173947.html" rel="Y|0|4643"><img name="lzimg_44" lz_src="http://newsimg.5054399.com/uploads/121027/_15060S31.gif" alt="西普大陆雨云精灵技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/173947.html">雨云精灵</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/173915.html" class="bz_1">雨云精灵精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/174734.html" class="lj_1">雨云精灵练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="173947"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/173935.html" rel="Y|0|4643"><img name="lzimg_44" lz_src="http://newsimg.5054399.com/uploads/litimg/120705/163240Y6301.gif" alt="西普大陆云精灵技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/173935.html">云精灵</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/173915.html" class="bz_1">云精灵精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/174724.html" class="lj_1">云精灵练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="173935"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/171842.html" rel="G|12|4647"><img name="lzimg_44" lz_src="http://newsimg.5054399.com/uploads/121027/_1636264R.gif" alt="西普大陆钢格林技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/171842.html">钢格林</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/171917.html" class="bz_1">钢格林精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/172414.html" class="lj_1">钢格林练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="171842"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/171823.html" rel="G|12|4647"><img name="lzimg_44" lz_src="http://newsimg.5054399.com/uploads/121027/_163A2422.gif" alt="西普大陆钢布尔技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/171823.html">钢布尔</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/171917.html" class="bz_1">钢布尔精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/172409.html" class="lj_1">钢布尔练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="171823"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/171743.html" rel="G|12|4647"><img name="lzimg_44" lz_src="http://newsimg.5054399.com/uploads/121027/_163G5644.gif" alt="西普大陆钢托普技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/171743.html">钢托普</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/171917.html" class="bz_1">钢托普精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/172396.html" class="lj_1">钢托普练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="171743"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/170357.html" rel="Z|12|4644"><img name="lzimg_44" lz_src="http://newsimg.5054399.com/uploads/121027/_1456312C.gif" alt="西普大陆粽娃娃技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/170357.html">粽娃娃</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/170375.html" class="bz_1">粽娃娃精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/170782.html" class="lj_1">粽娃娃练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="170357"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/170348.html" rel="Z|12|4644"><img name="lzimg_45" lz_src="http://newsimg.5054399.com/uploads/litimg/120621/1A622Y5150.gif" alt="西普大陆粽小白技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/170348.html">粽小白</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/170375.html" class="bz_1">粽小白精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/170781.html" class="lj_1">粽小白练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="170348"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/170341.html" rel="Z|12|4644"><img name="lzimg_45" lz_src="http://newsimg.5054399.com/uploads/121027/_145A5956.gif" alt="西普大陆粽大头技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/170341.html">粽大头</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/170375.html" class="bz_1">粽大头精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/170765.html" class="lj_1">粽大头练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="170341"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/168314.html" rel="B|0|4646"><img name="lzimg_45" lz_src="http://newsimg.5054399.com/uploads/121027/_1431135R.gif" alt="西普大陆冰晶王技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/168314.html">冰晶王</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/168258.html" class="bz_1">冰晶王精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/168791.html" class="lj_1">冰晶王练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="168314"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/168309.html" rel="C|0|4646"><img name="lzimg_45" lz_src="http://newsimg.5054399.com/uploads/litimg/120614/1P615Y3R6.gif" alt="西普大陆成熟冰晶技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/168309.html">成熟冰晶</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/168258.html" class="bz_1">成熟冰晶精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/168790.html" class="lj_1">成熟冰晶练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="168309"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/168307.html" rel="Y|0|4646"><img name="lzimg_45" lz_src="http://newsimg.5054399.com/uploads/120614/_1R016220.gif" alt="西普大陆幼生冰晶技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/168307.html">幼生冰晶</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/168258.html" class="bz_1">幼生冰晶精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/168789.html" class="lj_1">幼生冰晶练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="168307"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/blx/168238.html" rel="J|12|4645"><img name="lzimg_45" lz_src="http://newsimg.5054399.com/uploads/121027/_14434bT.gif" alt="西普大陆级联加农技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/blx/168238.html">级联加农</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/168240.html" class="bz_1">级联加农精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/168726.html" class="lj_1">级联加农练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="168238"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/blx/168236.html" rel="S|12|4645"><img name="lzimg_45" lz_src="http://newsimg.5054399.com/uploads/121027/_14442JY.gif" alt="西普大陆双联加农技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/blx/168236.html">双联加农</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/168240.html" class="bz_1">双联加农精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/168721.html" class="lj_1">双联加农练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="168236"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/blx/168202.html" rel="J|12|4645"><img name="lzimg_45" lz_src="http://newsimg.5054399.com/uploads/121027/_144450492.gif" alt="西普大陆加农小子技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/blx/168202.html">加农小子</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/168240.html" class="bz_1">加农小子精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/168716.html" class="lj_1">加农小子练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="168202"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/166370.html" rel="M|0|4642"><img name="lzimg_45" lz_src="http://newsimg.5054399.com/uploads/litimg/120607/160413YZS.gif" alt="西普大陆门神卡洛技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/166370.html">门神卡洛</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/166345.html" class="bz_1">门神卡洛精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/166734.html" class="lj_1">门神卡洛练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="166370"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/166361.html" rel="K|0|4642"><img name="lzimg_45" lz_src="http://newsimg.5054399.com/uploads/litimg/120607/155225YV19.gif" alt="西普大陆铠甲卡洛技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/166361.html">铠甲卡洛</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/166345.html" class="bz_1">铠甲卡洛精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/166718.html" class="lj_1">铠甲卡洛练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="166361"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/166353.html" rel="K|0|4642"><img name="lzimg_45" lz_src="http://newsimg.5054399.com/uploads/121027/_153516321.gif" alt="西普大陆卡洛技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/166353.html">卡洛</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/166345.html" class="bz_1">卡洛精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/166711.html" class="lj_1">卡洛练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="166353"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/166313.html" rel="C|0|4641"><img name="lzimg_45" lz_src="http://newsimg.5054399.com/uploads/litimg/120607/143232Y2I7.gif" alt="西普大陆臭鼬头头技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/166313.html">臭鼬头头</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/166329.html" class="bz_1">臭鼬头头精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/166689.html" class="lj_1">臭鼬头头练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="166313"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/166309.html" rel="C|0|4641"><img name="lzimg_45" lz_src="http://newsimg.5054399.com/uploads/litimg/120607/142411Y5520.gif" alt="西普大陆臭鼬打手技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/166309.html">臭鼬打手</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/166329.html" class="bz_1">臭鼬打手精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/166686.html" class="lj_1">臭鼬打手练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="166309"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/166307.html" rel="C|0|4641"><img name="lzimg_46" lz_src="http://newsimg.5054399.com/uploads/litimg/120607/141632Y2V0.gif" alt="西普大陆臭鼬小弟技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/166307.html">臭鼬小弟</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/166329.html" class="bz_1">臭鼬小弟精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/166680.html" class="lj_1">臭鼬小弟练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="166307"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/164495.html" rel="Q|0|4641"><img name="lzimg_46" lz_src="http://newsimg.5054399.com/uploads/litimg/120531/201114Y2351.gif" alt="西普大陆球超人技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/164495.html">球超人</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/164475.html" class="bz_1">球超人精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/165123.html" class="lj_1">球超人练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="164495"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/164494.html" rel="Q|0|4641"><img name="lzimg_46" lz_src="http://newsimg.5054399.com/uploads/121027/_15555Q50.gif" alt="西普大陆球比特技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/164494.html">球比特</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/164475.html" class="bz_1">球比特精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/165122.html" class="lj_1">球比特练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="164494"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/164493.html" rel="F|0|4641"><img name="lzimg_46" lz_src="http://newsimg.5054399.com/uploads/litimg/120531/194J1YU16.gif" alt="西普大陆飞球技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/164493.html">飞球</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/164475.html" class="bz_1">飞球精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/165119.html" class="lj_1">飞球练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="164493"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/164483.html" rel="B|0|4646"><img name="lzimg_46" lz_src="http://newsimg.5054399.com/uploads/121027/_143333S2.gif" alt="西普大陆布丁冰绵绵技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/164483.html">布丁冰绵绵</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/164459.html" class="bz_1">布丁冰绵绵精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/165132.html" class="lj_1">布丁冰绵绵练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="164483"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/164480.html" rel="S|0|4646"><img name="lzimg_46" lz_src="http://newsimg.5054399.com/uploads/litimg/120531/1U445Y4145.gif" alt="西普大陆什锦冰绵绵技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/164480.html">什锦冰绵绵</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/164459.html" class="bz_1">什锦冰绵绵精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/165130.html" class="lj_1">什锦冰绵绵练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="164480"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/145319.html" rel="G|0|4646"><img name="lzimg_46" lz_src="http://newsimg.5054399.com/uploads/userup/1202/2914322DX5.jpg" alt="西普大陆果味冰绵绵技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/binxi/145319.html">果味冰绵绵</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/164459.html" class="bz_1">果味冰绵绵精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/165129.html" class="lj_1">果味冰绵绵练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="145319"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/164430.html" rel="Z|12|4643"><img name="lzimg_46" lz_src="http://newsimg.5054399.com/uploads/litimg/120531/164454Y5a3.gif" alt="西普大陆真雷雨闪电蝎技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/164430.html">真雷雨闪电蝎</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/164448.html" class="bz_1">真雷雨闪电蝎精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/165115.html" class="lj_1">真雷雨闪电蝎练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="164430"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/164426.html" rel="Z|12|4643"><img name="lzimg_46" lz_src="http://newsimg.5054399.com/uploads/litimg/120531/163443Y62M.gif" alt="西普大陆真双尾闪电蝎技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/164426.html">真双尾闪电蝎</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/164448.html" class="bz_1">真双尾闪电蝎精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/165109.html" class="lj_1">真双尾闪电蝎练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="164426"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/164421.html" rel="Z|12|4643"><img name="lzimg_46" lz_src="http://newsimg.5054399.com/uploads/litimg/120531/16224b93122.gif" alt="西普大陆真闪电蝎技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/164421.html">真闪电蝎</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/164448.html" class="bz_1">真闪电蝎精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/165080.html" class="lj_1">真闪电蝎练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="164421"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/164395.html" rel="Y|12|4639"><img name="lzimg_46" lz_src="http://newsimg.5054399.com/uploads/120531/_154Q0254.gif" alt="西普大陆悠咪糖技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/164395.html">悠咪糖</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/164431.html" class="bz_1">悠咪糖精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/164972.html" class="lj_1">悠咪糖练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="164395"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/164387.html" rel="Y|12|4640"><img name="lzimg_46" lz_src="http://newsimg.5054399.com/uploads/litimg/120531/152922Y3342.gif" alt="西普大陆悠玛糖技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/164387.html">悠玛糖</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/164440.html" class="bz_1">悠玛糖精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/165026.html" class="lj_1">悠玛糖练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="164387"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/blx/162466.html" rel="T|0|4645"><img name="lzimg_46" lz_src="http://newsimg.5054399.com/uploads/litimg/120524/16092N93619.gif" alt="西普大陆突击兔技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/blx/162466.html">突击兔</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/162491.html" class="bz_1">突击兔精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/162831.html" class="lj_1">突击兔练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="162466"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/blx/162462.html" rel="X|0|4645"><img name="lzimg_47" lz_src="http://newsimg.5054399.com/uploads/120524/_161034594.gif" alt="西普大陆侠义兔技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/blx/162462.html">侠义兔</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/162491.html" class="bz_1">侠义兔精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/162823.html" class="lj_1">侠义兔练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="162462"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/blx/162446.html" rel="D|0|4645"><img name="lzimg_47" lz_src="http://newsimg.5054399.com/uploads/litimg/120524/154FN94B6.gif" alt="西普大陆呆瓜兔技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/blx/162446.html">呆瓜兔</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/162491.html" class="bz_1">呆瓜兔精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/162811.html" class="lj_1">呆瓜兔练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="162446"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/162419.html" rel="H|0|4640"><img name="lzimg_47" lz_src="http://newsimg.5054399.com/uploads/121027/_160624F2.gif" alt="西普大陆轰鸣特洛伊技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/162419.html">轰鸣特洛伊</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/162493.html" class="bz_1">轰鸣特洛伊精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/162766.html" class="lj_1">轰鸣特洛伊练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="162419"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/162400.html" rel="T|0|4640"><img name="lzimg_47" lz_src="http://newsimg.5054399.com/uploads/litimg/120524/14552N93038.gif" alt="西普大陆特洛伊改技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/162400.html">特洛伊改</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/162493.html" class="bz_1">特洛伊改精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/162752.html" class="lj_1">特洛伊改练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="162400"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/162393.html" rel="T|0|4640"><img name="lzimg_47" lz_src="http://newsimg.5054399.com/uploads/121027/_160FNV.gif" alt="西普大陆特洛伊技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/162393.html">特洛伊</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/162493.html" class="bz_1">特洛伊精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/162739.html" class="lj_1">特洛伊练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="162393"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/160749.html" rel="A|0|4640"><img name="lzimg_47" lz_src="http://newsimg.5054399.com/uploads/litimg/120517/15233N9BM.gif" alt="西普大陆翱翔灯满技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/160749.html">翱翔灯满</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/160780.html" class="bz_1">翱翔灯满精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/161067.html" class="lj_1">翱翔灯满练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="160749"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/160746.html" rel="X|0|4640"><img name="lzimg_47" lz_src="http://newsimg.5054399.com/uploads/litimg/120517/151504YC41.gif" alt="西普大陆巡洋灯满技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/160746.html">巡洋灯满</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/160780.html" class="bz_1">巡洋灯满精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/161058.html" class="lj_1">巡洋灯满练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="160746"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/160738.html" rel="J|0|4640"><img name="lzimg_47" lz_src="http://newsimg.5054399.com/uploads/litimg/120517/145534YX47.gif" alt="西普大陆近视灯满技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/160738.html">近视灯满</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/160780.html" class="bz_1">近视灯满精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/161043.html" class="lj_1">近视灯满练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="160738"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/160721.html" rel="S|0|4639"><img name="lzimg_47" lz_src="http://newsimg.5054399.com/uploads/litimg/120517/141RNa513.gif" alt="西普大陆水灵王技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/160721.html">水灵王</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/160789.html" class="bz_1">水灵王精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/161094.html" class="lj_1">水灵王练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="160721"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/160716.html" rel="S|0|4639"><img name="lzimg_47" lz_src="http://newsimg.5054399.com/uploads/litimg/120517/14095N96020.gif" alt="西普大陆水灵灵技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/160716.html">水灵灵</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/160789.html" class="bz_1">水灵灵精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/161090.html" class="lj_1">水灵灵练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="160716"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/160707.html" rel="L|0|4639"><img name="lzimg_47" lz_src="http://newsimg.5054399.com/uploads/litimg/120517/14010b91952.gif" alt="西普大陆蓝灵技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/160707.html">蓝灵</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/160789.html" class="bz_1">蓝灵精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/161086.html" class="lj_1">蓝灵练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="160707"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/159067.html" rel="H|0|4641"><img name="lzimg_47" lz_src="http://newsimg.5054399.com/uploads/litimg/120510/142221Y5608.gif" alt="西普大陆海鸥船长技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/159067.html">海鸥船长</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/158933.html" class="bz_1">海鸥船长精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/159468.html" class="lj_1">海鸥船长练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="159067"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/159060.html" rel="H|0|4641"><img name="lzimg_47" lz_src="http://newsimg.5054399.com/uploads/litimg/120510/14120NaL9.gif" alt="西普大陆海鸥大副技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/159060.html">海鸥大副</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/158933.html" class="bz_1">海鸥大副精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/159463.html" class="lj_1">海鸥大副练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="159060"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/159052.html" rel="H|0|4641"><img name="lzimg_48" lz_src="http://newsimg.5054399.com/uploads/litimg/120510/135300Ya07.gif" alt="西普大陆海鸥水手技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/159052.html">海鸥水手</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/158933.html" class="bz_1">海鸥水手精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/159453.html" class="lj_1">海鸥水手练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="159052"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/159034.html" rel="K|0|4642"><img name="lzimg_48" lz_src="http://newsimg.5054399.com/uploads/litimg/120510/13052X9B36.gif" alt="西普大陆狂战塔达技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/159034.html">狂战塔达</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/158944.html" class="bz_1">狂战塔达精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/159402.html" class="lj_1">狂战塔达练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="159034"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/159027.html" rel="Y|0|4642"><img name="lzimg_48" lz_src="http://newsimg.5054399.com/uploads/litimg/120510/122A0Y1B5.gif" alt="西普大陆勇猛塔达技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/159027.html">勇猛塔达</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/158944.html" class="bz_1">勇猛塔达精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/159398.html" class="lj_1">勇猛塔达练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="159027"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/159002.html" rel="T|0|4642"><img name="lzimg_48" lz_src="http://newsimg.5054399.com/uploads/litimg/120510/113R5Y31F.gif" alt="西普大陆塔达技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/159002.html">塔达</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/158944.html" class="bz_1">塔达精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/159385.html" class="lj_1">塔达练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="159002"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/157570.html" rel="L|0|4643"><img name="lzimg_48" lz_src="http://newsimg.5054399.com/uploads/litimg/120503/155045YV52.gif" alt="西普大陆雷暴小子技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/157570.html">雷暴小子</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/157615.html" class="bz_1">雷暴小子精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/157914.html" class="lj_1">雷暴小子练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="157570"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/157562.html" rel="C|0|4643"><img name="lzimg_48" lz_src="http://newsimg.5054399.com/uploads/121027/_150H5359.gif" alt="西普大陆磁暴小子技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/157562.html">磁暴小子</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/157615.html" class="bz_1">磁暴小子精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/157910.html" class="lj_1">磁暴小子练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="157562"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/157503.html" rel="C|0|4643"><img name="lzimg_48" lz_src="http://newsimg.5054399.com/uploads/litimg/120503/135F5Y6104.gif" alt="西普大陆磁力小子技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/157503.html">磁力小子</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/157615.html" class="bz_1">磁力小子精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/157907.html" class="lj_1">磁力小子练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="157503"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/156359.html" rel="H|0|4639"><img name="lzimg_48" lz_src="http://newsimg.5054399.com/uploads/litimg/120426/1K335Y2P1.gif" alt="西普大陆海盗黑珍珠技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/156359.html">海盗黑珍珠</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/156269.html" class="bz_1">海盗黑珍珠精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/156943.html" class="lj_1">海盗黑珍珠练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="156359"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/156351.html" rel="H|0|4639"><img name="lzimg_48" lz_src="http://newsimg.5054399.com/uploads/litimg/120426/1J121Y2050.gif" alt="西普大陆海盗双帆技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/156351.html">海盗双帆</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/156269.html" class="bz_1">海盗双帆精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/156938.html" class="lj_1">海盗双帆练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="156351"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/156338.html" rel="H|0|4639"><img name="lzimg_48" lz_src="http://newsimg.5054399.com/uploads/litimg/120426/1H64X92914.gif" alt="西普大陆海盗小桨技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/156338.html">海盗小桨</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/156269.html" class="bz_1">海盗小桨精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/156933.html" class="lj_1">海盗小桨练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="156338"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/146441.html" rel="K|0|4647"><img name="lzimg_48" lz_src="http://newsimg.5054399.com/uploads/121027/_164152P6.gif" alt="西普大陆卡修拉达技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/146441.html">卡修拉达</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/147915.html" class="bz_1">卡修拉达精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/155274.html" class="lj_1">卡修拉达练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="146441"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/147888.html" rel="K|0|4647"><img name="lzimg_48" lz_src="http://newsimg.5054399.com/uploads/userup/1204/231109255Y2.gif" alt="西普大陆卡拉达技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/147888.html">卡拉达</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/147915.html" class="bz_1">卡拉达精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/155273.html" class="lj_1">卡拉达练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="147888"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/154799.html" rel="W|0|4647"><img name="lzimg_48" lz_src="http://newsimg.5054399.com/uploads/userup/1204/2311062950c.gif" alt="西普大陆瓦卡技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/154799.html">瓦卡</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/147915.html" class="bz_1">瓦卡精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/155261.html" class="lj_1">瓦卡练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="154799"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/153397.html" rel="G|0|4639"><img name="lzimg_49" lz_src="http://newsimg.5054399.com/uploads/userup/1204/23111232R35.gif" alt="西普大陆橄榄壮壮技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/153397.html">橄榄壮壮</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/153418.html" class="bz_1">橄榄壮壮精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/153846.html" class="lj_1">橄榄壮壮练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="153397"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/153385.html" rel="P|0|4639"><img name="lzimg_49" lz_src="http://newsimg.5054399.com/uploads/userup/1204/231112115O6.gif" alt="西普大陆乒乓壮壮技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/153385.html">乒乓壮壮</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/153418.html" class="bz_1">乒乓壮壮精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/153819.html" class="lj_1">乒乓壮壮练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="153385"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/153372.html" rel="B|0|4639"><img name="lzimg_49" lz_src="http://newsimg.5054399.com/uploads/userup/1204/231111523A8.gif" alt="西普大陆棒球壮壮技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/153372.html">棒球壮壮</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/153418.html" class="bz_1">棒球壮壮精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/153788.html" class="lj_1">棒球壮壮练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="153372"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/153357.html" rel="J|0|4647"><img name="lzimg_49" lz_src="http://newsimg.5054399.com/uploads/userup/1204/2311064K935.gif" alt="西普大陆金刚铁青蛙技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/153357.html">金刚铁青蛙</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/153421.html" class="bz_1">金刚铁青蛙精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/153780.html" class="lj_1">金刚铁青蛙练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="153357"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/153351.html" rel="T|0|4647"><img name="lzimg_49" lz_src="http://newsimg.5054399.com/uploads/userup/1204/23110GH644.gif" alt="西普大陆铜锣蛙技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/153351.html">铜锣蛙</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/153421.html" class="bz_1">铜锣蛙精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/153778.html" class="lj_1">铜锣蛙练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="153351"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/153338.html" rel="F|0|4647"><img name="lzimg_49" lz_src="http://newsimg.5054399.com/uploads/userup/1204/23110K11224.gif" alt="西普大陆发条蛙技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/153338.html">发条蛙</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/153421.html" class="bz_1">发条蛙精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/153775.html" class="lj_1">发条蛙练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="153338"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/146381.html" rel="J|0|4644"><img name="lzimg_49" lz_src="http://newsimg.5054399.com/uploads/userup/1204/231114354555.gif" alt="西普大陆蕉蕉战神技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/146381.html">蕉蕉战神</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/152188.html" class="bz_1">蕉蕉战神精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/152511.html" class="lj_1">蕉蕉战神练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="146381"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/148582.html" rel="J|0|4644"><img name="lzimg_49" lz_src="http://newsimg.5054399.com/uploads/userup/1204/231113325638.gif" alt="西普大陆蕉蕉狂战技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/148582.html">蕉蕉狂战</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/152188.html" class="bz_1">蕉蕉狂战精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/152510.html" class="lj_1">蕉蕉狂战练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="148582"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/148581.html" rel="J|0|4644"><img name="lzimg_49" lz_src="http://newsimg.5054399.com/uploads/userup/1204/231113113009.gif" alt="西普大陆蕉蕉战士技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/148581.html">蕉蕉战士</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/152188.html" class="bz_1">蕉蕉战士精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/152509.html" class="lj_1">蕉蕉战士练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="148581"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/151293.html" rel="G|0|4641"><img name="lzimg_49" lz_src="http://newsimg.5054399.com/uploads/userup/1204/231119503H0.gif" alt="西普大陆钢甲剑圣技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/151293.html">钢甲剑圣</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/151411.html" class="bz_1">钢甲剑圣精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/151547.html" class="lj_1">钢甲剑圣练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="151293"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/151292.html" rel="S|0|4641"><img name="lzimg_49" lz_src="http://newsimg.5054399.com/uploads/userup/1204/2311200J3b.gif" alt="西普大陆圣甲虫技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/151292.html">圣甲虫</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/151411.html" class="bz_1">圣甲虫精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/151543.html" class="lj_1">圣甲虫练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="151292"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/151291.html" rel="T|0|4641"><img name="lzimg_49" lz_src="http://newsimg.5054399.com/uploads/userup/1204/231120254050.gif" alt="西普大陆铁甲虫技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/151291.html">铁甲虫</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/151411.html" class="bz_1">铁甲虫精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/151519.html" class="lj_1">铁甲虫练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="151291"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/145220.html" rel="P|12|4641"><img name="lzimg_49" lz_src="http://newsimg.5054399.com/uploads/userup/1204/2311213251W.gif" alt="西普大陆蟠桃大圣技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/145220.html">蟠桃大圣</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/144367.html" class="bz_1">蟠桃大圣精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/151771.html" class="lj_1">蟠桃大圣练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="145220"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/148626.html" rel="P|12|4641"><img name="lzimg_50" lz_src="http://newsimg.5054399.com/uploads/userup/1204/23112049EP.gif" alt="西普大陆蟠桃多多技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/148626.html">蟠桃多多</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/144367.html" class="bz_1">蟠桃多多精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/151770.html" class="lj_1">蟠桃多多练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="148626"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/148623.html" rel="P|12|4641"><img name="lzimg_50" lz_src="http://newsimg.5054399.com/uploads/userup/1204/23112113YW.gif" alt="西普大陆蟠桃小小技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/148623.html">蟠桃小小</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/144367.html" class="bz_1">蟠桃小小精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/145321.html" class="lj_1">蟠桃小小练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="148623"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/148561.html" rel="H|0|4642"><img name="lzimg_50" lz_src="http://newsimg.5054399.com/uploads/userup/1204/23111KB5R.gif" alt="西普大陆豪钻阿宝技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/148561.html">豪钻阿宝</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/149976.html" class="bz_1">豪钻阿宝精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/150436.html" class="lj_1">豪钻阿宝练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="148561"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/148558.html" rel="C|0|4642"><img name="lzimg_50" lz_src="http://newsimg.5054399.com/uploads/userup/1204/23111T61340.gif" alt="西普大陆冲击阿宝技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/148558.html">冲击阿宝</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/149976.html" class="bz_1">冲击阿宝精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/150425.html" class="lj_1">冲击阿宝练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="148558"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/148551.html" rel="K|0|4642"><img name="lzimg_50" lz_src="http://newsimg.5054399.com/uploads/userup/1204/2311191XQ1.gif" alt="西普大陆矿工阿宝技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/148551.html">矿工阿宝</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/149976.html" class="bz_1">矿工阿宝精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/150357.html" class="lj_1">矿工阿宝练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="148551"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/148563.html" rel="S|12|4647"><img name="lzimg_50" lz_src="http://newsimg.5054399.com/uploads/121027/_16391I22.gif" alt="西普大陆圣印飞龙技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/148563.html">圣印飞龙</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/151816.html" class="bz_1">圣印飞龙精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/150473.html" class="lj_1">圣印飞龙练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="148563"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/148711.html" rel="L|0|4642"><img name="lzimg_50" lz_src="http://newsimg.5054399.com/uploads/121027/_1535552F.gif" alt="西普大陆狸猫主治医师技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/148711.html">狸猫主治医师</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/147525.html" class="bz_1">狸猫主治医师精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/150822.html" class="lj_1">狸猫主治医师练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="148711"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/148708.html" rel="L|0|4642"><img name="lzimg_50" lz_src="http://newsimg.5054399.com/uploads/120425/_203050494.gif" alt="西普大陆狸猫牙医技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/148708.html">狸猫牙医</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/147525.html" class="bz_1">狸猫牙医精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/150799.html" class="lj_1">狸猫牙医练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="148708"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/148707.html" rel="L|0|4642"><img name="lzimg_50" lz_src="http://newsimg.5054399.com/uploads/120425/_203116238.gif" alt="西普大陆狸猫护士技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/148707.html">狸猫护士</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/147525.html" class="bz_1">狸猫护士精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/150781.html" class="lj_1">狸猫护士练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="148707"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/148705.html" rel="K|0|4642"><img name="lzimg_50" lz_src="http://newsimg.5054399.com/uploads/120425/_2033303N.gif" alt="西普大陆凯撒沃夫技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/148705.html">凯撒沃夫</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/149838.html" class="bz_1">凯撒沃夫精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/150848.html" class="lj_1">凯撒沃夫练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="148705"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/148703.html" rel="W|0|4642"><img name="lzimg_50" lz_src="http://newsimg.5054399.com/uploads/121027/_153625263.gif" alt="西普大陆武士沃夫技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/148703.html">武士沃夫</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/149838.html" class="bz_1">武士沃夫精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/150845.html" class="lj_1">武士沃夫练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="148703"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/148701.html" rel="W|0|4642"><img name="lzimg_50" lz_src="http://newsimg.5054399.com/uploads/121027/_153A0924.gif" alt="西普大陆沃夫技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/148701.html">沃夫</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/149838.html" class="bz_1">沃夫精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/150843.html" class="lj_1">沃夫练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="148701"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/148700.html" rel="A|0|4642"><img name="lzimg_50" lz_src="http://newsimg.5054399.com/uploads/121027/_153H5I9.gif" alt="西普大陆安哥拉蓬蓬技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/148700.html">安哥拉蓬蓬</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/149692.html" class="bz_1">安哥拉蓬蓬精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/150871.html" class="lj_1">安哥拉蓬蓬练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="148700"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/148698.html" rel="C|0|4642"><img name="lzimg_51" lz_src="http://newsimg.5054399.com/uploads/120425/_2035102R.gif" alt="西普大陆彩虹蓬蓬技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/148698.html">彩虹蓬蓬</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/149692.html" class="bz_1">彩虹蓬蓬精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/150870.html" class="lj_1">彩虹蓬蓬练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="148698"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/148696.html" rel="P|0|4642"><img name="lzimg_51" lz_src="http://newsimg.5054399.com/uploads/121027/_153K2227.gif" alt="西普大陆蓬蓬技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/148696.html">蓬蓬</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/149692.html" class="bz_1">蓬蓬精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/150862.html" class="lj_1">蓬蓬练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="148696"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/148692.html" rel="M|0|4642"><img name="lzimg_51" lz_src="http://newsimg.5054399.com/uploads/120425/_203610Y7.gif" alt="西普大陆蜜糖熊技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/148692.html">蜜糖熊</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/149697.html" class="bz_1">蜜糖熊精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/150898.html" class="lj_1">蜜糖熊练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="148692"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/148691.html" rel="M|0|4642"><img name="lzimg_51" lz_src="http://newsimg.5054399.com/uploads/121027/_153RE31.gif" alt="西普大陆蜜罐熊技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/148691.html">蜜罐熊</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/149697.html" class="bz_1">蜜罐熊精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/150893.html" class="lj_1">蜜罐熊练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="148691"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/148690.html" rel="H|0|4642"><img name="lzimg_51" lz_src="http://newsimg.5054399.com/uploads/121027/_153952156.gif" alt="西普大陆哈尼熊技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/148690.html">哈尼熊</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/149697.html" class="bz_1">哈尼熊精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/150885.html" class="lj_1">哈尼熊练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="148690"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/146402.html" rel="L|0|4639"><img name="lzimg_51" lz_src="http://newsimg.5054399.com/uploads/120425/_2006352D.gif" alt="西普大陆领航鲸技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/146402.html">领航鲸</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/147528.html" class="bz_1">领航鲸精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/150918.html" class="lj_1">领航鲸练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="146402"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/148685.html" rel="B|0|4639"><img name="lzimg_51" lz_src="http://newsimg.5054399.com/uploads/120425/_200143E6.gif" alt="西普大陆堡垒鲸技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/148685.html">堡垒鲸</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/147528.html" class="bz_1">堡垒鲸精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/150915.html" class="lj_1">堡垒鲸练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="148685"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/148682.html" rel="X|0|4639"><img name="lzimg_51" lz_src="http://newsimg.5054399.com/uploads/120425/_200213G7.gif" alt="西普大陆小岛鲸技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/148682.html">小岛鲸</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/147528.html" class="bz_1">小岛鲸精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/150913.html" class="lj_1">小岛鲸练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="148682"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/146400.html" rel="H|0|4639"><img name="lzimg_51" lz_src="http://newsimg.5054399.com/uploads/121027/_161Qa43.gif" alt="西普大陆海盗蟹技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/146400.html">海盗蟹</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/149691.html" class="bz_1">海盗蟹精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/150928.html" class="lj_1">海盗蟹练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="146400"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/148678.html" rel="C|0|4639"><img name="lzimg_51" lz_src="http://newsimg.5054399.com/uploads/121027/_161U1B3.gif" alt="西普大陆厨师蟹技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/148678.html">厨师蟹</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/149691.html" class="bz_1">厨师蟹精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/150926.html" class="lj_1">厨师蟹练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="148678"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/148676.html" rel="X|0|4639"><img name="lzimg_51" lz_src="http://newsimg.5054399.com/uploads/120425/_200320559.gif" alt="西普大陆相扑蟹技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/shuixi/148676.html">相扑蟹</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/149691.html" class="bz_1">相扑蟹精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/150923.html" class="lj_1">相扑蟹练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="148676"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/blx/146199.html" rel="Q|0|4645"><img name="lzimg_51" lz_src="http://newsimg.5054399.com/uploads/120425/_202253504.gif" alt="西普大陆酋长龙技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/blx/146199.html">酋长龙</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/149797.html" class="bz_1">酋长龙精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/151037.html" class="lj_1">酋长龙练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="146199"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/blx/148669.html" rel="Z|0|4645"><img name="lzimg_51" lz_src="http://newsimg.5054399.com/uploads/121027/_144530324.gif" alt="西普大陆战车龙技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/blx/148669.html">战车龙</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/149797.html" class="bz_1">战车龙精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/151021.html" class="lj_1">战车龙练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="148669"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/blx/148667.html" rel="T|0|4645"><img name="lzimg_52" lz_src="http://newsimg.5054399.com/uploads/121027/_14460R26.gif" alt="西普大陆跳跳龙技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/blx/148667.html">跳跳龙</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/149797.html" class="bz_1">跳跳龙精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/151014.html" class="lj_1">跳跳龙练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="148667"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/blx/146229.html" rel="J|0|4645"><img name="lzimg_52" lz_src="http://newsimg.5054399.com/uploads/120425/_20222L39.gif" alt="西普大陆劲爆龙技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/blx/146229.html">劲爆龙</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/149825.html" class="bz_1">劲爆龙精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/151201.html" class="lj_1">劲爆龙练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="146229"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/blx/148666.html" rel="Y|0|4645"><img name="lzimg_52" lz_src="http://newsimg.5054399.com/uploads/120425/_202009292.gif" alt="西普大陆摇滚龙技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/blx/148666.html">摇滚龙</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/149825.html" class="bz_1">摇滚龙精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/151195.html" class="lj_1">摇滚龙练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="148666"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/blx/148663.html" rel="D|0|4645"><img name="lzimg_52" lz_src="http://newsimg.5054399.com/uploads/120425/_2020361C.gif" alt="西普大陆呆呆龙技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/blx/148663.html">呆呆龙</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/149825.html" class="bz_1">呆呆龙精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/151183.html" class="lj_1">呆呆龙练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="148663"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/146167.html" rel="C|0|4641"><img name="lzimg_52" lz_src="http://newsimg.5054399.com/uploads/121027/_155623535.gif" alt="西普大陆彩羽哆哆技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/146167.html">彩羽哆哆</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/149837.html" class="bz_1">彩羽哆哆精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/151193.html" class="lj_1">彩羽哆哆练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="146167"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/148659.html" rel="J|0|4641"><img name="lzimg_52" lz_src="http://newsimg.5054399.com/uploads/120425/_204203b0.gif" alt="西普大陆尖嘴哆哆技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/148659.html">尖嘴哆哆</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/149837.html" class="bz_1">尖嘴哆哆精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/151190.html" class="lj_1">尖嘴哆哆练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="148659"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/148656.html" rel="D|0|4641"><img name="lzimg_52" lz_src="http://newsimg.5054399.com/uploads/120425/_204233345.gif" alt="西普大陆哆哆技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/fengxi/148656.html">哆哆</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/149837.html" class="bz_1">哆哆精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/151181.html" class="lj_1">哆哆练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="148656"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/148607.html" rel="D|0|4643"><img name="lzimg_52" lz_src="http://newsimg.5054399.com/uploads/121027/_150KWF.gif" alt="西普大陆铛铛手套技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/148607.html">铛铛手套</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/148580.html" class="bz_1">铛铛手套精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/151215.html" class="lj_1">铛铛手套练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="148607"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/148593.html" rel="P|0|4643"><img name="lzimg_52" lz_src="http://newsimg.5054399.com/uploads/121027/_150R0a3.gif" alt="西普大陆砰砰手套技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/148593.html">砰砰手套</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/148580.html" class="bz_1">砰砰手套精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/151213.html" class="lj_1">砰砰手套练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="148593"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/148592.html" rel="Y|0|4643"><img name="lzimg_52" lz_src="http://newsimg.5054399.com/uploads/120425/_202P34I.gif" alt="西普大陆呦呦手套技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/148592.html">呦呦手套</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/148580.html" class="bz_1">呦呦手套精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/151210.html" class="lj_1">呦呦手套练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="148592"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/145303.html" rel="Z|0|4644"><img name="lzimg_52" lz_src="http://newsimg.5054399.com/uploads/121027/_145J9641.gif" alt="西普大陆正义萝卜技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/145303.html">正义萝卜</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/144316.html" class="bz_1">正义萝卜精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/150879.html" class="lj_1">正义萝卜练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="145303"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/148585.html" rel="W|0|4644"><img name="lzimg_52" lz_src="http://newsimg.5054399.com/uploads/120425/_202506413.gif" alt="西普大陆顽强萝卜技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/148585.html">顽强萝卜</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/144316.html" class="bz_1">顽强萝卜精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/150876.html" class="lj_1">顽强萝卜练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="148585"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/148584.html" rel="J|0|4644"><img name="lzimg_52" lz_src="http://newsimg.5054399.com/uploads/120425/_20253Q03.gif" alt="西普大陆倔强萝卜技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/caoxi/148584.html">倔强萝卜</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/144316.html" class="bz_1">倔强萝卜精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/150872.html" class="lj_1">倔强萝卜练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="148584"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/145176.html" rel="H|0|4640"><img name="lzimg_53" lz_src="http://newsimg.5054399.com/uploads/120425/_205505V4.gif" alt="西普大陆猴兜兜技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/145176.html">猴兜兜</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/144296.html" class="bz_1">猴兜兜精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/152231.html" class="lj_1">猴兜兜练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="145176"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/148229.html" rel="H|0|4640"><img name="lzimg_53" lz_src="http://newsimg.5054399.com/uploads/120425/_204533600.gif" alt="西普大陆猴帅帅技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/148229.html">猴帅帅</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/144296.html" class="bz_1">猴帅帅精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/152226.html" class="lj_1">猴帅帅练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="148229"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/148199.html" rel="H|0|4640"><img name="lzimg_53" lz_src="http://newsimg.5054399.com/uploads/120425/_204H0C6.gif" alt="西普大陆猴嘟嘟技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/148199.html">猴嘟嘟</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/144296.html" class="bz_1">猴嘟嘟精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/152231.html" class="lj_1">猴嘟嘟练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="148199"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/146448.html" rel="T|12|4647"><img name="lzimg_53" lz_src="http://newsimg.5054399.com/uploads/121027/_163953592.gif" alt="西普大陆太空战士技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/146448.html">太空战士</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/146811.html" class="bz_1">太空战士精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/150896.html" class="lj_1">太空战士练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="146448"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/151281.html" rel="T|12|4647"><img name="lzimg_53" lz_src="http://newsimg.5054399.com/uploads/121027/_163R25F.gif" alt="西普大陆太空战机技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/151281.html">太空战机</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/146811.html" class="bz_1">太空战机精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/151766.html" class="lj_1">太空战机练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="151281"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/151279.html" rel="X|12|4647"><img name="lzimg_53" lz_src="http://newsimg.5054399.com/uploads/120423/_1Z051X3.gif" alt="西普大陆星战机技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/151279.html">星战机</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/146811.html" class="bz_1">星战机精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/151762.html" class="lj_1">星战机练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="151279"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/148298.html" rel="Y|0|4647"><img name="lzimg_53" lz_src="http://newsimg.5054399.com/uploads/120425/_201354506.gif" alt="西普大陆翼贝蒂技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/148298.html">翼贝蒂</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/144293.html" class="bz_1">翼贝蒂精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/150829.html" class="lj_1">翼贝蒂练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="148298"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/148290.html" rel="B|0|4647"><img name="lzimg_53" lz_src="http://newsimg.5054399.com/uploads/120425/_2014361a.gif" alt="西普大陆贝蒂技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/148290.html">贝蒂</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/144293.html" class="bz_1">贝蒂精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/150811.html" class="lj_1">贝蒂练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="148290"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/148052.html" rel="M|0|4647"><img name="lzimg_53" lz_src="http://newsimg.5054399.com/uploads/120425/_201505b2.gif" alt="西普大陆迷你贝蒂技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/gangxi/148052.html">迷你贝蒂</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/144293.html" class="bz_1">迷你贝蒂精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/150835.html" class="lj_1">迷你贝蒂练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="148052"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/147972.html" rel="M|0|4640"><img name="lzimg_53" lz_src="http://newsimg.5054399.com/uploads/120425/_204JNQ.gif" alt="西普大陆麻辣火锅技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/147972.html">麻辣火锅</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/147965.html" class="bz_1">麻辣火锅精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/150939.html" class="lj_1">麻辣火锅练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="147972"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/147961.html" rel="G|0|4640"><img name="lzimg_53" lz_src="http://newsimg.5054399.com/uploads/121027/_160KOC.gif" alt="西普大陆鬼脸火罐技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/huoxi/147961.html">鬼脸火罐</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/147965.html" class="bz_1">鬼脸火罐精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/150938.html" class="lj_1">鬼脸火罐练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="147961"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/blx/147870.html" rel="H|0|4645"><img name="lzimg_53" lz_src="http://newsimg.5054399.com/uploads/120425/_202201S7.gif" alt="西普大陆核弹兄弟技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/blx/147870.html">核弹兄弟</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/145888.html" class="bz_1">核弹兄弟精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/150909.html" class="lj_1">核弹兄弟练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="147870"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/blx/147869.html" rel="D|0|4645"><img name="lzimg_53" lz_src="http://newsimg.5054399.com/uploads/userup/1203/131329322F8.jpg" alt="西普大陆导弹兄弟技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/blx/147869.html">导弹兄弟</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/145888.html" class="bz_1">导弹兄弟精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/150906.html" class="lj_1">导弹兄弟练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="147869"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/blx/148933.html" rel="Z|0|4645"><img name="lzimg_54" lz_src="http://newsimg.5054399.com/uploads/120425/_201F4327.gif" alt="西普大陆炸弹兄弟技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/blx/148933.html">炸弹兄弟</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/145888.html" class="bz_1">炸弹兄弟精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/150902.html" class="lj_1">炸弹兄弟练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="148933"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/147440.html" rel="Y|0|4642"><img name="lzimg_54" lz_src="http://newsimg.5054399.com/uploads/120425/_203Q9363.gif" alt="西普大陆原力胖达技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/147440.html">原力胖达</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/144303.html" class="bz_1">原力胖达精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/150919.html" class="lj_1">原力胖达练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="147440"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/147436.html" rel="Y|0|4642"><img name="lzimg_54" lz_src="http://newsimg.5054399.com/uploads/121027/_153912321.gif" alt="西普大陆妖瞳胖达技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/147436.html">妖瞳胖达</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/144303.html" class="bz_1">妖瞳胖达精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/150917.html" class="lj_1">妖瞳胖达练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="147436"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/147433.html" rel="P|0|4642"><img name="lzimg_54" lz_src="http://newsimg.5054399.com/uploads/120425/_2039232T.gif" alt="西普大陆胖达技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dixi/147433.html">胖达</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/144303.html" class="bz_1">胖达精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/150916.html" class="lj_1">胖达练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="147433"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/147393.html" rel="L|12|4643"><img name="lzimg_54" lz_src="http://newsimg.5054399.com/uploads/userup/1212/061A92W0W.gif" alt="西普大陆雷雨闪电蝎技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/147393.html">雷雨闪电蝎</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/144339.html" class="bz_1">雷雨闪电蝎精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/150925.html" class="lj_1">雷雨闪电蝎练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="147393"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/147373.html" rel="S|12|4643"><img name="lzimg_54" lz_src="http://newsimg.5054399.com/uploads/userup/1212/061AU130Y.gif" alt="西普大陆双尾闪电蝎技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/147373.html">双尾闪电蝎</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/144339.html" class="bz_1">双尾闪电蝎精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/150924.html" class="lj_1">双尾闪电蝎练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="147373"></a><p></p></span>
</li><li><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/147370.html" rel="S|12|4643"><img name="lzimg_54" lz_src="http://newsimg.5054399.com/uploads/userup/1212/061AJ24W6.gif" alt="西普大陆闪电蝎技能表"/></a><span><a href="http://news.4399.com/gonglue/xipu/jingling/dianxi/147370.html">闪电蝎</a></span>
<div class="xg">
<a href="http://news.4399.com/gonglue/xipu/jlgl/buzhuo/144339.html" class="bz_1">闪电蝎精灵捕捉</a><a href="http://news.4399.com/gonglue/xipu/jlgl/lianji/150922.html" class="lj_1">闪电蝎练级攻略</a>
</div>
<span class="like"><a href="#" target="_self" rel="147370"></a><p></p></span>
</li>
            </ul>
        <div class="clear"></div>
		<div class="c_more" id="show_more"><a href="#" onclick="show_more(true);return false;"></a></div>
        </div>
        <div class="c_b"></div>
        </div>     					
    </div>
</div>
<!--精灵大全end-->

  
<!--评论-->
<div class="pl_box">
    <div class="pl_t"></div>
    <div class="pl_c">
        <div class="plpl"> 
            <script type="text/javascript" src="http://news.4399.com/js/pl_js.js"></script>
            <script type="text/javascript">show_pilun(81895,946);</script>		
        </div>
        
        <!--友情链接-->
        <div class="i_middle2 pd_miky">
            <div class="link_miky">
                <div class="line_miky">
                    <ul>
		            <?php $linkurlInfos = $controller->_getFrontInfos('passport', 'linkurl', 1, 4, array('type =' => 'nova'), array(array('listorder', 'desc'))); foreach ($linkurlInfos['infos'] as $linkurlInfo) { ?>
			            <li><a href="<?php echo $linkurlInfo['url']; ?>" target="_blank"><?php echo $linkurlInfo['name']; ?></a></li> 
		            <?php } ?>
                    </ul>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <!--友情链接end-->
    </div>
    <div class="pl_b"></div>
</div>
<!--评论结束-->

<div class="footer"><?php echo $this->load->view('nobao/footer'); ?></div>

<div id="full" class="float_btn">
	<a href="#" target="_self" id="top_btn" style="display:none"><img src="http://newsimg.5054399.com/xipu/images1/nr_gbg1.gif"></a>
    <a href="#" target="_self" id="top_btn2"><img src="http://newsimg.5054399.com/xipu/images1/nr_gbg2.gif"></a>
</div>

<!--弹窗1-->
<div class="tc" style="display:none;" id="tc1">
<table border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td class="top_1">&nbsp;</td>
        <td class="top_2">&nbsp;</td>
        <td class="top_3"><a onclick="closeWin();return false;" target="_self"></a></td>
      </tr>
      <tr>
        <td class="left_c">&nbsp;</td>
        <td class="centerinfo"> 
            <div class="tctext2">谢谢你的投票，<br />快来查看调查结果吧！</div>
            <div class="OKbtn"><a href="http://news.4399.com/xipu/result.html"><img src="http://newsimg.5054399.com/xipu/images1/OKbtn.gif" /></a></div>      
        </td>
        <td class="right_c">&nbsp;</td>
      </tr>
      <tr>
        <td class="bottom_1">&nbsp;</td>
        <td class="bottom_2">&nbsp;</td>
        <td class="bottom_3">&nbsp;</td>
      </tr>
    </table>
</div>
<!--弹窗1结束-->

<div style="display:none">
<script language="javascript" src="http://www.4399.com/jss/4399.js"></script>
<script src="http://news.4399.com/xipu/static/www/css/js_e3.js" type="text/javascript"></script>
<script type="text/javascript" id="bdshare_js" data="type=tools&amp;mini=1&amp;uid=480925" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript" id="bdshare_control"></script>
<img id="img_trace"/>
<script type="text/javascript">
	//页面初始化
	initIndexPage();
	
	var share_img = 'http://news.4399.com/xipu/images/13285833301.jpg';
	var share_content = '最新最全的4399西普大陆精灵资料、最快最好的boss打法攻略、最精彩的游戏内容更新,尽在#4399西普大陆#游戏专区!';
	var bds_config = {
		'bdPic':share_img,
		'bdText':share_content,
		'bdComment':share_content+window.location.href,
		'bdDesc':share_content+window.location.href
	};
	document.getElementById("bdshare_control").src = "http://news.4399.com/js/bdshare.js?t=" + new Date().getMonth() + new Date().getDate() + new Date().getHours();

	//玩过的游戏
	var title="西普大陆";
	var nFlashId=81895;
</script>
<script src="http://news.4399.com/xipu/static/www/css/index_top.js" type="text/javascript"></script>
<script type="text/javascript" src="http://news.4399.com/js/play_hs20120105.js"></script>
<script type="text/javascript" src="http://news.4399.com/js/tj.js"></script>
<script type="text/javascript" src="http://s4.cnzz.com/stat.php?id=3844615&web_id=3844615"></script>
<script type="text/javascript" src="http://s16.cnzz.com/stat.php?id=2386239&web_id=2386239"></script>
<script type="text/javascript" src="http://4399stat.5054399.com/js/click.js"></script>
</div>
</body>
</html>

 
