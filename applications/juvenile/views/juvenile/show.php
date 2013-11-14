<?php echo doctype(); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title><?php echo $this->metaDatas['title']; ?></title>
<meta content="<?php echo $this->metaDatas['keywords']; ?>" name="Keywords"> 
<meta content="<?php echo $this->metaDatas['description']; ?>" name="Description">

<link type="text/css" rel="stylesheet" href="<?php echo $this->staticUrl; ?>kidsedu/css/common.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->staticUrl; ?>kidsedu/css/toolbar.css">
<link type="text/css" rel="stylesheet" href="<?php echo $this->staticUrl; ?>kidsedu/css/grade.css">
</head>
<body>
<!--主体外框 start-->
<div class="bzWrap">
<!--header start-->
<div class="header">
	  <!--顶部入口 start-->
  <div class="top_1">
    
    <!-- 导航状态条 start -->
     <div class="topToolbar_box"><div id="testDiv" class="topToolbar"><iframe scrolling="0" frameborder="0" class="topToolbar_iframe"></iframe><ul class="siteLink"><li><i class="ico1"></i><a target="_blank" href="http://www.jmw.com.cn">中国加盟网首页</a></li><li><i class="ico2"></i><a target="_blank" href="http://shangpu.jmw.com.cn">我要找场地</a></li><li><i class="ico3"></i><a target="_blank" href="http://search.jmw.com.cn">项目搜索</a></li><li id="ShowMore1" class="ShowMore"><i class="ico4"></i><a target="_self" href="javascript:">门户站</a><i class="ico8"></i><span id="subLink1" class="SubLink"><a target="_blank" href="http://www.vc.jmw.com.cn">创业在线</a><a target="_blank" href="http://trade.jmw.com.cn">商机在线</a><a target="_blank" href="http://www.dl.jmw.com.cn">代理在线</a><a target="_blank" href="http://www.ls.jmw.com.cn">连锁在线</a></span></li></ul><ul class="userStatus"><li><i class="ico5"></i>晚上好！亲爱的 <em>王灿</em></li><li id="ShowMore2" class="ShowMore"><a target="_blank" href="http://person.jmw.com.cn/index.php">我的个人中心</a><i class="ico8"></i><span id="subLink2" class="SubLink"><a target="_blank" href="http://person.jmw.com.cn/index.php">我的首页</a><a target="_blank" href="http://person.jmw.com.cn/attentionlist.php">我关注的项目</a><a target="_blank" href="http://person.jmw.com.cn/subcibeList.php">我的订阅</a><a target="_blank" href="http://person.jmw.com.cn/mymessagelist.php">我的留言</a><a target="_self" href="http://protectedapi.jmw.com.cn/person/QuitAPI.php">退出</a></span></li><li id="ShowMore3" class="ShowMore nl"><a target="_self" href="javascript:">消息</a><a target="_blank" href="http://person.jmw.com.cn/notRead.php"><i class="ico7"></i>(<span>1</span>)</a><span id="subLink3" class="SubLink"><a href="http://person.jmw.com.cn/notRead.php" target="_blank">未读消息</a><a href="http://person.jmw.com.cn/systemInfoList.php" target="_blank">系统消息</a></span></li></ul></div></div>
    <script type="text/javascript" src="http://function.jmw.com.cn/loginStatus.js"></script>   
    <!-- 导航状态条 end  -->

      <ul class="subMenu">
          <li><a href="http://www.vc.jmw.com.cn/" target="_blank">创业</a><a href="http://www.ls.jmw.com.cn/" target="_blank">连锁</a><a href="http://www.dl.jmw.com.cn/" target="_blank">代理</a><a href="http://trade.jmw.com.cn/" target="_blank">商机</a><a href="http://zh.jmw.com.cn/" target="_blank">展会</a><a href="http://mt.jmw.com.cn/" target="_blank">媒体</a><a href="http://hr.jmw.com.cn/" target="_blank">招聘</a></li>
          <li><a href="http://hebei.jmw.com.cn/" target="_blank">河北</a><a href="http://qingdao.jmw.com.cn/" target="_blank">青岛</a><a href="http://sichuan.jmw.com.cn/" target="_blank">四川</a><a href="http://shenzhen.jmw.com.cn/" target="_blank">深圳</a><a href="http://jiangsu.jmw.com.cn/" target="_blank">江苏</a><a href="http://fujian.jmw.com.cn/" target="_blank">福建</a><a href="http://fujian.jmw.com.cn/" target="_blank">广州</a><a href="http://shanxi.jmw.com.cn/" target="_blank">山西</a><a href="http://liaoning.jmw.com.cn/" target="_blank">辽宁</a><a class="redTxt" href="http://search.jmw.com.cn/jmw_user/zhaoshang/more/" target="_blank">更多地方站</a></li>
          <li class="noLine"><a href="http://www.hb.jmw.com.cn/" target="_blank">环保</a><a href="http://www.xs.jmw.com.cn/" target="_blank">零售</a><a href="http://huoguo.jmw.com.cn/" target="_blank">火锅</a><a href="http://www.tx.jmw.com.cn/" target="_blank">五金</a><a href="http://tongzhuang.jmw.com.cn/" target="_blank">童装</a><a href="http://www.jp.jmw.com.cn/" target="_blank">精品</a></li>
      </ul>
  </div>
  <!--顶部入口 end-->
  
  <!--行业导航 start-->
  <div class="top_2">
      <ul class="nav">
        <li class="ico1"><a hidefocus="true" href="http://www.jmw.com.cn/" target="_blank">综合页</a></li>
        <li class="ico2"><a hidefocus="true" href="http://www.cy.jmw.com.cn/" target="_blank">美食</a></li>
        <li class="ico3"><a hidefocus="true" href="http://www.jf.jmw.com.cn/" target="_blank">家纺</a></li>
        <li class="ico4"><a hidefocus="true" href="http://www.fz.jmw.com.cn/" target="_blank">服装</a></li>
        <li class="ico5"><a hidefocus="true" href="http://www.jj.jmw.com.cn/" target="_blank">家居</a></li>
        <li class="ico6"><a hidefocus="true" href="http://www.sp.jmw.com.cn/" target="_blank">饰品</a></li>
        <li class="ico7"><a hidefocus="true" href="http://www.jy.jmw.com.cn/" target="_blank">教育</a></li>
        <li class="ico8"><a hidefocus="true" href="http://www.jc.jmw.com.cn/" target="_blank">建材</a></li>
        <li class="ico9"><a hidefocus="true" href="http://www.yr.jmw.com.cn/" target="_blank">幼儿</a></li>
        <li class="ico10"><a hidefocus="true" href="http://www.mr.jmw.com.cn/" target="_blank">美容</a></li>
        <li class="ico11"><a hidefocus="true" href="http://www.ganxi.jmw.com.cn/" target="_blank">干洗</a></li>
        <li class="ico12"><a hidefocus="true" href="http://www.zb.jmw.com.cn/" target="_blank">珠宝</a></li>
        <li class="ico13"><a hidefocus="true" href="http://www.qc.jmw.com.cn/" target="_blank">汽车</a></li>
      </ul>
      
      <ul class="price">
          <li><a href="http://search.jmw.com.cn/searchlist.html?industryId=0&amp;money=0,1&amp;industrySubclassId=0&amp;mm=mm" target="_blank">1万以下</a> </li>
          <li><a href="http://search.jmw.com.cn/searchlist.html?industryId=0&amp;money=1,10&amp;industrySubclassId=0&amp;mm=mm" target="_blank">1万-10万</a> </li>
          <li><a href="http://search.jmw.com.cn/searchlist.html?industryId=0&amp;money=10,20&amp;industrySubclassId=0&amp;mm=mm" target="_blank">10万-20万</a> <br>
          </li>
          <li><a href="http://search.jmw.com.cn/searchlist.html?industryId=0&amp;money=20,50&amp;industrySubclassId=0&amp;mm=mm" target="_blank">20万-50万</a> </li>
          <li><a href="http://search.jmw.com.cn/searchlist.html?industryId=0&amp;money=50,100&amp;industrySubclassId=0&amp;mm=mm" target="_blank">50万-100万</a> </li>
          <li><a href="http://search.jmw.com.cn/searchlist.html?industryId=0&amp;money=100,999999&amp;industrySubclassId=0&amp;mm=mm" target="_blank">100万以上</a> </li>
      </ul>
  </div>
  <!--行业导航 end-->
	<div class="bannerAd">
		<div class="ad_1">
		
<a target="_blank" href="http://ynbyyjb.jmw.com.cn/" ad_id="194" ad_need_click="true"><img width="711" height="60" src="http://attachment.jmw.com.cn/jmw_search_uploadfile/2013/0809/20130809042117187.gif"></a>

		</div>
		<div class="ad_2">    <a target="_blank" href="http://search.jmw.com.cn/jmw_user/ysjy/" ad_id="195" ad_need_click="true"><img width="241" height="60" src="http://attachment.jmw.com.cn/jmw_search_uploadfile/2013/0619/20130619104518520.gif"></a>
</div>
	</div>
</div>
<!--header end-->
    <!--主体 start-->
    <div class="bzMain">
        <!--sousuo start--> 
		<div class="serachBox">
		<div style="width:350px;" class="logo"><img width="135" height="32" src="http://image1.jmw.com.cn/search/images/search_logo.jpg"><a href="http://www.jmw.com.cn/" target="_blank">首页</a>&gt;<a href="http://jy.jmw.com.cn/" target="_blank">教育</a>	&gt;<a href="http://yingyu.jmw.com.cn" target="_blank">英语</a></div>

		        <script type="text/javascript">var host = "http://search.jmw.com.cn/";</script>

		<form action="http://search.jmw.com.cn/searchlist.html" target="_blank" onsubmit="return formSubmit()" method="get" id="searchConditionForm">
            <ul>
                <li>搜索：</li>
                <li>
                    <input type="hidden" value="1" id="dosubmit">
                    <select name="industryId" id="sid1s">
                      <option value="" selected="">行业</option>
					  					  <option value="1">服装</option>
					  					  <option value="2">美食</option>
					  					  <option value="3">美容</option>
					  					  <option value="4">干洗</option>
					  					  <option value="5">精品</option>
					  					  <option value="7">饰品</option>
					  					  <option value="11">教育</option>
					  					  <option value="13">幼儿</option>
					  					  <option value="15">零售</option>
					  					  <option value="16">家居</option>
					  					  <option value="17">环保</option>
					  					  <option value="19">五金</option>
					  					  <option value="21">珠宝</option>
					  					  <option value="22">家纺</option>
					  					  <option value="23">汽车</option>
					  					  <option value="24">建材</option>
					  					  <option value="196">酒水</option>
					                      </select>            
                </li>
                <li>
                    <select name="money" id="mid">
                      <option value="" selected="">投资金额</option>
					  					  <option value="0,1">1万元以下</option>
					  					  <option value="1,10">1~~10万元</option>
					  					  <option value="10,20">10~~20万元</option>
					  					  <option value="20,50">20~~50万元</option>
					  					  <option value="50,100">50~~100万元</option>
					  					  <option value="100,999999">100万元以上</option>
					                      </select>            
                </li>
                <li class="bg_serch">
                    <input type="hidden" id="ppmc" name="ppmc" value="ppmc">
                    <input value="请输入文本" name="keyword" id="keyword">
                </li>
                <li class="last"><input type="image" src="http://image1.jmw.com.cn/search/images/search.gif"></li>
            </ul>
			</form>
            <div class="clr"></div>
            <script language="javascript">
            jQuery(function(){
                jQuery("#keyword").focus(function(){
                	if(jQuery(this).val() == '请输入文本'){
                		jQuery(this).val('');
                	}
                });
                jQuery("#keyword").blur(function(){
                	if(jQuery(this).val() == ''){
                		jQuery(this).val('请输入文本');
                	}
                });
            });
            </script>
			<script>
				function formSubmit(){
					//var host = "http://search.jmw.com.cn/";
					var industryId = document.getElementById('sid1s').value;
					var money = document.getElementById('mid').value;
					var keyword = document.getElementById('keyword').value;
					if(keyword == '请输入文本')keyword = '';
					// alert(money);alert(keyword);
					if(money != '' || keyword != ''){
						return true;
					}else{
						if(industryId != ''){
							window.open(host+industryId+'/',target="_blank");
							return false;
						}else{
							window.open(host,target="_blank");
							return false;
						}
					}
				}
			</script>		</div>
		<div id="concern"></div><div id="addmessage"></div>
		<!--sousuo end--> 
        <!--项目页标题 start-->
        <div class="itemNav_box">
			<div id="itemNav" class="itemNav" style="position: absolute; top: 244px; display: block;">
			 <iframe scrolling="0" frameborder="0" class="itemNav_iframe"></iframe><h1>美国学乐儿童英语火爆加盟中</h1>
				<ul>
				<li class="current"><a href="http://xuele.jmw.com.cn/">项目介绍</a></li>
		<li class=""><a href="http://xuele.jmw.com.cn/tupian/">图片展示</a></li>
				<li class=""><a href="http://xuele.jmw.com.cn/shuju/">数据分析</a></li>
		<li class=""><a href="http://xuele.jmw.com.cn/dianping/">网友点评</a></li>
				<li><a title="学乐儿童英语官网，学乐儿童英语招商海报" target="_blank" href="http://search.jmw.com.cn/jmw_user/lexue/" onclick="addPageView('pv',129498);"><img src="http://image1.jmw.com.cn/search/images/zshb.gif"></a></li>
			</ul>
	<p id="totalBrand" class="total">意向加盟者(<strong id="divZongFangWen1">12040</strong>)人 | 申请加盟者(<strong id="divLiuYanShu">534</strong>)人</p>
	<script>
	project_id = 129498;
	addPageView("pv",project_id);
	getData("totalNum",project_id);

	</script>


			<div class="itemNav_bot_bg"></div>
            <a title="关闭" href="javascript:;" class="itemNav_close"></a>
			</div>
		</div>
        <!--项目页标题 end-->
        <script type="text/javascript">
        //页面滚动时层智能浮动定位
        $.fn.smartFloat = function() {
            var position = function(element) {
                var top = element.position().top, pos = element.css("position");
                $(window).scroll(function() {
                    var scrolls = $(this).scrollTop();
                    if (scrolls &gt; top) {
                        if (window.XMLHttpRequest) {
                            element.addClass('shade');
                            element.css({
                                position: "fixed",
                                top: 31
                            });	
                        } else {
                            element.addClass('shade');
                            element.css({
                                top: scrolls+31
                            });	
                        }
                    }else {
                        element.removeClass('shade');
                        element.css({
                            position: pos,
                            top: top,
                            display:'block'
                        });	
                    }
                });
        };
            return $(this).each(function() {
                position($(this));						 
            });
        };
        //绑定
        $("#itemNav").smartFloat();
        $(function(){
            $('.itemNav_close').click(function(){
                    $('#itemNav').hide();
                })	
        });
        </script>    
        <!--左侧 start-->
        <div class="mianbody">
            <!--项目左上主体介绍内容 start-->
            <div class="mianConBox">
                <div class="conTop_left">
                 <!--循环展示项目图片 start-->
                  <div class="focusPic_box">
  	<!--大图 begin-->
  	<ul id="focusPic" class="bigPic_list">
        <li class="bPic" style="display: none; overflow: hidden; visibility: visible;"><img width="250" height="188" title="学乐儿童英语" src="http://photo.jmw.com.cn/pic/2012/4/11/11025757375mmKN39cWzY.jpg"></li><li class="bPic" style="display: none; overflow: hidden; visibility: visible;"><img width="250" height="188" title="学乐儿童英语" src="http://photo.jmw.com.cn/pic/2012/4/11/11024646218dCgmwEniXf.jpg"></li><li class="bPic" style="display: none; overflow: hidden; visibility: visible;"><img width="250" height="188" title="学乐儿童英语" src="http://photo.jmw.com.cn/pic/2012/4/11/11023030593dhBxJHhRiB.jpg"></li><li class="bPic" style="display: none; overflow: hidden; visibility: visible;"><img width="250" height="188" title="学乐儿童英语" src="http://photo.jmw.com.cn/pic/2012/4/11/11021414531iMVj5xk8C2.jpg"></li><li class="bPic" style="display: block; overflow: hidden; visibility: visible;"><img width="250" height="188" title="学乐儿童英语" src="http://photo.jmw.com.cn/pic/2012/4/11/1102044421Zlps2JVamf.jpg"></li><li class="bPic" style="display: none; overflow: hidden; visibility: visible;"><img width="250" height="188" title="学乐儿童英语" src="http://photo.jmw.com.cn/pic/2012/4/11/11015252421jr64vHEPiC.jpg"></li><li class="bPic" style="display: none; overflow: hidden; visibility: visible;"><img width="250" height="188" title="学乐儿童英语" src="http://photo.jmw.com.cn/pic/2012/4/11/11014141468sltuZwni6t.jpg"></li><li class="bPic" style="display: none; overflow: hidden; visibility: visible;"><img width="250" height="188" title="学乐儿童英语" src="http://photo.jmw.com.cn/pic/2012/4/11/11012828484Z6P553dsBH.jpg"></li>    </ul>
    <!--大图 end-->
    
    <!--缩略图 begin-->
    <div id="thumb_focusPic" class="smallThumb_box">
    	<a href="javascript:;" id="prev" class="prev"></a>
        <div class="smallThumb_list">
        	<div style="margin-left: -90px;">
                <ul>
                    <li class="toc" style="float: left;" rel="1"><img width="38" height="29" title="学乐儿童英语" src="http://photo.jmw.com.cn/slt/2012/4/11/s1_11025757375mmKN39cWzY.jpg"></li><li class="toc" style="float: left;" rel="2"><img width="38" height="29" title="学乐儿童英语" src="http://photo.jmw.com.cn/slt/2012/4/11/s1_11024646218dCgmwEniXf.jpg"></li><li class="toc" style="float: left;" rel="3"><img width="38" height="29" title="学乐儿童英语" src="http://photo.jmw.com.cn/slt/2012/4/11/s1_11023030593dhBxJHhRiB.jpg"></li><li class="toc" style="float: left;" rel="4"><img width="38" height="29" title="学乐儿童英语" src="http://photo.jmw.com.cn/slt/2012/4/11/s1_11021414531iMVj5xk8C2.jpg"></li><li class="toc selected" style="float: left;" rel="5"><img width="38" height="29" title="学乐儿童英语" src="http://photo.jmw.com.cn/slt/2012/4/11/s1_1102044421Zlps2JVamf.jpg"></li><li class="toc" style="float: left;" rel="6"><img width="38" height="29" title="学乐儿童英语" src="http://photo.jmw.com.cn/slt/2012/4/11/s1_11015252421jr64vHEPiC.jpg"></li><li class="toc" style="float: left;" rel="7"><img width="38" height="29" title="学乐儿童英语" src="http://photo.jmw.com.cn/slt/2012/4/11/s1_11014141468sltuZwni6t.jpg"></li><li class="toc" style="float: left;" rel="8"><img width="38" height="29" title="学乐儿童英语" src="http://photo.jmw.com.cn/slt/2012/4/11/s1_11012828484Z6P553dsBH.jpg"></li>                </ul>
            </div>
        </div>
    	<a href="javascript:;" id="next" class="next"></a>
    </div>
    <!--缩略图 end-->
	<script type="text/javascript">
        //焦点图初始化
        JMW_focusPicSlider.init({
			id: "focusPic", //指定ID
			contentsource: ["inline", ""], //有效值: ["inline", ""] 嵌入html or ["ajax", "path_to_file"] 嵌入utf-8文件
			toc: "scroll", //有效值: "#increment" 标记序号, "markup", ["markup1", "markup2", etc]标记具体内容
			nextprev: ["", ""], //next_pre标记 ，如："上一条" "下一条"，设置为 "" 为不出现
			revealtype: "click", //鼠标事件有效值: "click" or "mouseover"
			enablefade: [false, 0.15], // 切换褪色度 "true"or "false"
			autorotate: [true, 2500], // 切换停留时间 "true"or "false"
			delay: 0, //事件延迟时间(默认值：0，单位：ms)
			//playtab: 4, 默认的播放舌签
			onChange: function(previndex, curindex){ //触发处理;previndex 触发处理上一个记录;curindex 触发处理上一个记录 可以自定义函数控制"
			}
        });
    </script>
</div>
                  <!--循环展示项目图片 end-->
                    <!--网友点评 start--> 
                    <div class="itemGrade_wrap">
               
                    <script type="text/javascript" src="http://image1.jmw.com.cn/search/js/scrollText-min.js"></script>
<!--网友点评 start--> 
<div class="gradeRank_Total">
	<h2>网友总评：</h2>
	<span class="gradeRank_mid m_star5"></span>
	<span class="note">特别好</span> 
		<a title="点评" class="gradeBtn_small" href="http://xuele.jmw.com.cn/dianping/">点评</a>
</div>
<div id="gradeList_roll" style="overflow: hidden; width: 247px; height: 148px;">
	<ul>
			<li style="cursor:pointer;" onclick="window.open('http://xuele.jmw.com.cn/dianping/#anchor485','_blank')"> 
			<img width="30" height="30" alt="" class="userFace" src="http://image1.jmw.com.cn/user/images/mediumBoy.jpg">
			<p><em title="李晓晓">李晓晓</em> 说</p>
			<p>项目看着很高端，但不是否有双语教学</p>
		</li>
		</ul>                    
</div>
<script type="text/javascript">new Marquee("gradeList_roll",0,1,247,148,50,0,0)</script>
<!--网友点评 end-->

                    </div>
                    <!--网友点评 end-->
                
			</div>
                
              <!--项目概述 start-->
              <div class="conTop_right">
  <div class="yj1"></div>
  <div class="yj2"></div>
  <div class="yj3">
      <!--列表内容 start-->
      <dl class="yjCon">
        <dt class="bg">品牌名称：</dt>
        <dd title="学乐儿童英语" class="col1 bg">学乐儿童英语</dd>
        <dt class="bg">基本投资：</dt>
        <dd class="col2 bg"><span>50～100万元</span></dd>
        
        <dt>所属行业：</dt>
        <dd class="col1">教育</dd>
        <dt>成立时间：</dt>
        <dd class="col2">1920年</dd>
        
        <dt class="bg"><strong>注册资本：</strong></dt>
        <dd class="col1 bg">114万美金</dd>
        <dt class="bg">门店总数：</dt>
        <dd class="col2 bg">29家</dd>

        <dt>经营模式：</dt>
        <dd>特许 直营 </dd>
                <dt class="bg">经营产品：</dt>
        <dd class="bg">少儿英语加盟 儿童英语加盟 幼儿英语加盟 儿童教育培训 教育培训加盟</dd>
                		<dt>总部地址：</dt>
        <dd>水城路68号3楼（长宁社区学院内）</dd>
		                <dt class="bg">发展模式：</dt>
        <dd class="bg">单店特许 区域开发 </dd>
        
        <dt>公司网址：</dt>
        <dd>
          <span class="urlTxt">
            http://xuele.jmw.com.cn/          </span>
          <a style="cursor:pointer" onclick="copyToClipBoard1('http://xuele.jmw.com.cn/');">复制</a></dd>
                <dt class="bg">联系电话：</dt>
        <dd class="bg">
                    <a id="chakanzbdh" href="javascript:;"><img alt="点击查看总部电话" src="http://image1.jmw.com.cn/search/images/Telephone_top.gif"></a>
          <div style="display:none;" id="zongbudianhua"><strong title="021-64264130" class="redTxt">021-64264130<img width="17" height="14" alt="" style="_margin-top:5px;" src="http://image1.jmw.com.cn/search/images/left_ico5.jpg"></strong><a onclick="sendPhone('129498');return false;" href="javascript:void(0)">发送至手机</a></div>              
        </dd>
        
        <dt>Q Q 号码：</dt>
        <dd>
                      <div name="qqshow" id="qqshow"><a target="_self" id="clickqq">              <img style="margin-top:2px;" src="http://image1.jmw.com.cn/search/images/qq_top.gif"></a>
            </div>
            <div style="display:none;" name="qqhidden" id="qqhidden">
              <strong class="redTxt">1972480745</strong> <a onclick="copyToClipBoard1('1972480745');" href="javascript:;">复制</a>
            </div>
                  </dd>
        
        <dd class="operateBtn">
        	<a onclick="javascript:attention('129498','学乐儿童英语');_gaq.push(['_trackEvent', '关注', '点击', '标项页关注点击']);return false;" title="关注项目" hidefocus="true" href="javascript:;">加关注</a>
        	<a onclick="subEditUserInfo('129498','1');_gaq.push(['_trackEvent', '留言', '点击', '标项页索要资料点击']);return false;" title="快速获得加盟资料" hidefocus="true" href="javascript:;">索要资料</a>
        	<a onclick="subEditUserInfo('129498','2');_gaq.push(['_trackEvent', '留言', '点击', '标项页发送意向点击']);return false;" title="立即向企业发送加盟意向" hidefocus="true" href="javascript:;">发送意向</a>
        	<a onclick="subEditUserInfo('129498','3');_gaq.push(['_trackEvent', '留言', '点击', '标项页回电话点击']);return false;" title="想知道更多项目详情？让企业给您回电话吧!" hidefocus="true" href="javascript:;">回电话</a>
        </dd>
        
                  <dd class="tel">
            <div class="free_tel">
                <h3>学乐儿童英语全国免费咨询热线</h3>
                <p>4000-500-555<span>转</span>86199     </p>
            </div>                      
          </dd>
        
        <div class="clr"></div>
      </dl>
      <!--列表内容 end-->
  </div>
  <div class="yj2"></div>
  <div class="yj1"></div>  
  <iframe name="createiframeq" src="about:blank" id="createiframeq" style="display:none;"></iframe>
  <iframe name="frmForTel" src="about:blank" id="frmForTel" style="display:none;"></iframe>
      
  <script type="text/javascript">
    if(document.getElementById("chakanzbdh")){
      document.getElementById("chakanzbdh").onclick=function(){
        var timestamp =Date.parse(new Date());
        var project_id = $('#projectId').val();
        addPhone(project_id);

        $.ajax({
          async:false,
          type:'get',
          dataType:'jsonp',
          jsonp:'tel_dy',
          url:'http://protectedapi.jmw.com.cn/person/teldy.php?type=teldynamic&amp;projectId='+$('#projectId').val()+'&amp;timestamp='+timestamp,
          success:function(html){}
        });
        
        document.getElementById("zongbudianhua").style.display="block";
        document.getElementById("chakanzbdh").style.display="none";
      }
    }
  </script>    

  <script type="text/javascript">
    if(document.getElementById("qqshow")){
      document.getElementById("qqshow").onclick=function(){
        var timestamp =Date.parse(new Date());
        var project_id = $('#projectId').val();
        var qq = '1972480745';
        addQQ('qq',project_id,qq);
    
        $.ajax({
          async:false,
          type:'get',
          dataType:'jsonp',
          jsonp:'qq_dy',
          url:'http://protectedapi.jmw.com.cn/person/qqdy.php?type=qqdynamic&amp;projectId='+$('#projectId').val()+'&amp;timestamp='+timestamp,
          success:function(html){}
        });
        document.getElementById("qqshow").style.display = 'none';
        document.getElementById("qqhidden").style.display = 'block';
      }
    }
  </script>    

</div>
              <!--项目概述 end-->

            </div>
            <!--项目左上主体介绍内容 end-->
            
            <!--项目图片展示 start-->
            <div class="subConBox">
    <h2><span class="ico1">学乐儿童英语图片展示</span></h2>
    <div class="subCon">
        <ul class="picList">
            <li><a target="_blank" href="http://photo.jmw.com.cn/pic/2012/4/11/11025757375mmKN39cWzY.jpg"><img width="148" height="110" title="学乐儿童英语" src="http://photo.jmw.com.cn/slt/2012/4/11/s1_11025757375mmKN39cWzY.jpg"></a></li><li><a target="_blank" href="http://photo.jmw.com.cn/pic/2012/4/11/11024646218dCgmwEniXf.jpg"><img width="148" height="110" title="学乐儿童英语" src="http://photo.jmw.com.cn/slt/2012/4/11/s1_11024646218dCgmwEniXf.jpg"></a></li><li><a target="_blank" href="http://photo.jmw.com.cn/pic/2012/4/11/11023030593dhBxJHhRiB.jpg"><img width="148" height="110" title="学乐儿童英语" src="http://photo.jmw.com.cn/slt/2012/4/11/s1_11023030593dhBxJHhRiB.jpg"></a></li><li><a target="_blank" href="http://photo.jmw.com.cn/pic/2012/4/11/11021414531iMVj5xk8C2.jpg"><img width="148" height="110" title="学乐儿童英语" src="http://photo.jmw.com.cn/slt/2012/4/11/s1_11021414531iMVj5xk8C2.jpg"></a></li><li><a target="_blank" href="http://photo.jmw.com.cn/pic/2012/4/11/1102044421Zlps2JVamf.jpg"><img width="148" height="110" title="学乐儿童英语" src="http://photo.jmw.com.cn/slt/2012/4/11/s1_1102044421Zlps2JVamf.jpg"></a></li><li><a target="_blank" href="http://photo.jmw.com.cn/pic/2012/4/11/11015252421jr64vHEPiC.jpg"><img width="148" height="110" title="学乐儿童英语" src="http://photo.jmw.com.cn/slt/2012/4/11/s1_11015252421jr64vHEPiC.jpg"></a></li><li><a target="_blank" href="http://photo.jmw.com.cn/pic/2012/4/11/11014141468sltuZwni6t.jpg"><img width="148" height="110" title="学乐儿童英语" src="http://photo.jmw.com.cn/slt/2012/4/11/s1_11014141468sltuZwni6t.jpg"></a></li><li><a target="_blank" href="http://photo.jmw.com.cn/pic/2012/4/11/11012828484Z6P553dsBH.jpg"><img width="148" height="110" title="学乐儿童英语" src="http://photo.jmw.com.cn/slt/2012/4/11/s1_11012828484Z6P553dsBH.jpg"></a></li>            <div class="clr"></div>
      </ul>
          <div class="clr"></div>
    </div>
</div>
            <!--项目图片展示 end-->
            
            <!--项目参数 start-->
            <div class="subConBox">
                <h2><span class="ico2">学乐儿童英语项目参数</span></h2>
                <div class="subCon">
                    <!--列表内容 start-->
                    <dl class="yjCon">
                      <dt class="bg">品牌名称（中文）：</dt>
                      <dd title="学乐儿童英语" class="col1 bg">学乐儿童英语</dd>
                      <dt class="bg">品牌发源地：</dt>
                      <dd class="col2 bg">美国</dd>
                      
                      <dt>品牌名称（英文）：</dt>
                      <dd class="col1">SCHOLASTIC</dd>
                      <dt>品牌创立时间：</dt>
                      <dd class="col2">1920年</dd>
                      
                      <dt class="bg">商务备案：</dt>
                      <dd class="col1 bg">否</dd>
                      <dt class="bg">门店总数：</dt>
                      <dd class="col2 bg">29家</dd>
                      
                      <dt>直营店总数：</dt>
                      <dd class="col1">13家</dd>
                      <dt>加盟/代理总店数：</dt>
                      <dd class="col2">16家</dd>
    
                      <dt class="bg">区域授权：</dt>
                      <dd class="col1 bg">是</dd>
                      <dt class="bg">首家直营店成立时间：</dt>
                      <dd class="col2 bg"> </dd>
        
                      <dt>加盟区域：</dt>
                      <dd>全国</dd>
                      <dt class="bg">经营产品：</dt>
                      <dd class="bg">少儿英语加盟 儿童英语加盟 幼儿英语加盟 儿童教育培训 教育培训加盟</dd>
                      <dt>经营模式：</dt>
                      <dd>特许 直营 </dd>
                      <dt class="bg">发展模式：</dt>
                      <dd class="bg">单店特许 区域开发 </dd>
                      <dt>适合投资人群：</dt>
                      <dd>自由创业 在岗投资 现有公司增项 毕业生创业 </dd>
                      
                      <div class="clr"></div>
                    </dl>
                    <!--列表内容 end-->
                </div>
            </div>
            <!--项目参数 end-->
            
            <!--项目加盟条件 start-->
            	<div class="subConBox">
    <h2><span class="ico3">学乐儿童英语加盟条件</span></h2>
    <div class="subCon">
        <!--列表内容 start-->
        <dl class="yjCon">
                  <dt class="bg">基本投资额/单店：</dt>
          <dd class="bg">人民币50万-100万</dd>
                  <dt class="">加盟/代理商身份：</dt>
          <dd class="">热爱幼教行业的认识</dd>
                  <dt class="bg">店铺形象：</dt>
          <dd class="bg">全国统一</dd>
                  <dt class="">运营管理：</dt>
          <dd class="">全国统一</dd>
                  <dt class="bg">其他条件：</dt>
          <dd class="bg"> </dd>
                  <dt class="">店铺条件：</dt>
          <dd class="">暂无</dd>
        
          <div class="clr"></div>
        </dl>
        <!--列表内容 end-->
    </div>
</div>
            <!--项目加盟条件 end-->

            <!--项目加盟费用 start-->            
            	<div class="subConBox">
    <h2><span class="ico3">
    学乐儿童英语加盟费用</span></h2>
    <div class="subCon">
        <!--列表内容 start-->
        <dl class="yjCon">
                  <dt class="bg">
            管理费：          </dt>
          <dd class="bg">
            包含在权益金中          </dd>
                  <dt class="">
            培训费：          </dt>
          <dd class="">
            包含在权益金中          </dd>
                  <dt class="bg">
            设备费：          </dt>
          <dd class="bg">
            17000元/套          </dd>
                  <dt class="">
            权益金：          </dt>
          <dd class="">
            7万-30万          </dd>
                  <dt class="bg">
            品牌使用：          </dt>
          <dd class="bg">
            12万-30万（          </dd>
                  <dt class="">
            首批进货：          </dt>
          <dd class="">
            7680元          </dd>
                  <dt class="bg">
            代理费：          </dt>
          <dd class="bg">
            无          </dd>
                  <dt class="">
            保证金：          </dt>
          <dd class="">
            无          </dd>
                  <dt class="bg">
            特许使用：          </dt>
          <dd class="bg">
            无          </dd>
        
          <div class="clr"></div>
        </dl>
        <!--列表内容 end-->
    </div>
</div>
            <!--项目加盟费用 end-->

            <!--项目介绍 start-->
            <div class="subConBox">
                <h2><span class="ico4">项目介绍</span></h2>
                <div class="subConMore">
                    <strong>企业简介</strong>
                    <p></p><p style="text-align: center"><img width="630" height="133" src="http://photo.jmw.com.cn/pic/2012/4/10/634696916077812500YhzXwhjCru.jpg" alt=""></p>
<p>&nbsp;</p>
<p><strong>学乐&mdash;&mdash;“<a href="http://www.jy.jmw.com.cn/">教育</a>界值得信赖的品牌”<br>
</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 美国学乐教育集团1920年成立于美国纽约，是全球知名的儿童图书和多媒体软件的出版和发行商。90多年来，学乐始终致力于发展儿童<a href="http://yingyu.jmw.com.cn/">英语</a>教育，因此在美国很受家长和孩子们的欢迎。学乐的宗旨是“帮助全球儿童更好地阅读和学习”。</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 学乐集团是一家集儿童<a href="http://yingyu.jmw.com.cn/">英语教育</a>、儿童教育图书出版的美国上市企业。在美国90%的<a href="http://www.yr.jmw.com.cn/">幼儿</a>园和中小学选用学乐的英语教材或书籍进行教学。学乐的阅读俱乐部是美国知名的读书俱乐部，覆盖全美各类学校。学乐的教学网站每年帮助1800万学生完成研究课题。</p>
<p><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 每年，学乐发行超过3亿2千万册图书，使用25种不同语言，畅销165个国家和地区。学乐不仅出版了迄今为止热销的儿童书籍《Harry Potter哈利波特》系列，更为全世界儿童带来众多在国际上屡获殊荣的优秀图书。其中包括著名的《I SPY 视觉大发现》、《Clifford the Big Red Dog大红狗克里夫系列丛书》、《Goosebumps鸡皮疙瘩》、《Magic School Bus神奇校车》等。</p>
<p>&nbsp; <br>
<strong>学乐儿童英语在中国<br>
</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2005年，学乐教育集团开始进驻中国，将原汁原味的美式儿童英语教学带给中国的孩子和家庭。如今，学乐已在上海、北京、深圳等多个省市地区开设了近20家学乐儿童英语教学点。6年来，学乐通过科学前沿的教学体系帮助众多3-16岁的中国少年儿童全面提高听、说、读、写各项英语能力。在学乐我们不仅培育孩子掌握卓越的英语技能，更倡导孩子养成卓越的道德品质。正因为取得了如此出色的教学成果，学乐儿童英语品牌正被越来越多的中国家长喜爱和推崇。</p>
<p>&nbsp;</p>
<p style="text-align: center"><img src="http://photo.jmw.com.cn/pic/2012/4/11/634697388376562500qUUHPnbY6a.jpg" alt=""></p>
<p style="text-align: left"><strong><br>
原版儿童英语图书馆<br>
</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 每一家学乐儿童英语教学中心都配备有一座超大的原版儿童英语图书馆。图书馆的所有书籍均从美国学乐教育集团总部原装进口。书籍的难易程度经过科学地分级，为不同英语程度的学员提供了丰富的课后补充读物。书籍供学员免费借阅，每人每次可借阅4本图书，借期一周。按一年计算，一个学生一年可以借阅200多本原版图书，总价值超过1000美金。学乐相信：让孩子从小养成阅读英语书籍的好习惯，有助于孩子更快更好地掌握英语能力。</p>
<p><br>
<strong>美国学乐儿童英语（SEE）课程介绍</strong></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 美国学乐儿童英语（SEE）是学乐教育集团针对英语非母语国家的孩子倾力打造的专业儿童英语课程。它运用高科技数字智能教学手段，融合成熟的课程系列和有效的教学方法，为孩子构建了有趣互动的学习环境，激发孩子的学习兴趣，深化孩子的学习体验。经长期教学研究证明，对孩子的听说读写等各方面英语能力的提升，有显著的效果。</p>
<p><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 美国学乐儿童英语由5大学习板块构成，每个板块对应一个英语核心学习技能：词汇、自然拼读、阅读、口语和书写。掌握这些核心技能能保障孩子扎扎实实地学好英语。</p>
<p>&nbsp;</p>
<p><strong>5大学习板块介绍：<br>
词汇<br>
</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 每个单词除了用有声动画的形式呈现外，更有预先设置在智能白板中的美国老师将语言的意义用动作表演出来，孩子可以充分调动视觉、听觉、体觉来深刻理解单词的意思。每组单词后面还设计了2-3个互动游戏，让孩子快快乐乐地学单词。</p>
<p><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 美国学乐儿童英语不提倡孤立地学单词，而是将单词放在句型和阅读材料中使用，小朋友在一年中可以熟练掌握和运用与日常生活息息相关的几百个英语单词哦！</p>
<p>&nbsp;</p>
<p><strong>自然拼读<br>
</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 美国学乐儿童英语强调发音，字母以及词汇之间的联系，将声音形象化（发a的声音时，想到苹果），动作化（发a的声音时，作出吃苹果的动作），让孩子能自由地数出声音、拆分声音、组合声音、判定声音的位置，并根据押韵词族扩大词汇量，这样能有效提高孩子的语感，让他们*后具备见词能读，听音能写的能力。自然拼读，能让孩子流利地读出单词，是打开英语阅读大门的金钥匙。</p>
<p>&nbsp;</p>
<p><strong>阅读<br>
</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 每单元，美国学乐儿童英语都设计了一本阅读书，将所学的单词和发音有效地融和到阅读材料里。高科技的数字智能白板能做到图片、声音和单词对应，让孩子更好地通过多元智能管道来理解文字的意义。</p>
<p><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 美国学乐儿童英语的数字故事书不仅让孩子们充分感受阅读的乐趣，同时让他们获得更多在教室里练习阅读的机会。孩子们可以通过集体、分组或者个体朗读故事书，并在丰富的游戏和活动中帮助孩子理解和运用故事书里的句子哦！</p>
<p><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 每个学乐英语中心，都拥有海量原版英语图书，这样可以鼓励孩子发展独立阅读的技能。您和您的孩子可以免费从我们的图书馆借阅所需要的书籍回家进行阅读。</p>
<p><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 阅读，能帮助孩子累积词汇、活用词汇、学到有益的表达方法。阅读是打开英语学习大门的金钥匙。</p>
<p>&nbsp;</p>
<p><strong>口语<br>
</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 美国学乐儿童英语强调孩子的口语必须是自然而然的习得的。除了在教室中老师全部使用英语授课之外，还在课堂开始时，设置10分钟的口语互动时间，小朋友可以通过智能白板，与老师和同学之间练习日常口语。在每节课中，另外设置了30分钟的口语练习时间，孩子通过游戏、活动、音乐、绘画等形式，自然而然地学习口语。<br>
除了练习英语表达之外，我们还设计了语法运用时间。</p>
<p><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 美国学乐儿童英语帮助您的孩子自信流利地说英语！</p>
<p><br>
<strong>书写<br>
</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 美国学乐儿童英语的书写课程从手写训练开始，逐步完善孩子对“发音与字母”关系的理解，并且为孩子在“字母到单词”的组成、基础语法和标点符号运用等书写技能发展上打好扎实的基础。</p>
<p>&nbsp;</p><p></p>
                </div>
            </div>
            <!--项目介绍 end-->
            
            <!--广告-->
            <div class="subConBox"><img width="711" height="81" alt="" src="http://image1.jmw.com.cn/search/images/bz_xmy_ts.gif"></div>
            
            <!--咨询内容列表 start-->
<div class="commentBox">
    <h3><span>在线咨询</span>
    <a target="_blank" class="more" hidefocus="true" href="http://liuyan.jmw.com.cn/messagelist.php?param=11-129498">&gt;&gt;更多留言</a>    </h3>
    <div class="comment">
<div class="comList">
<div class="userHead"><img width="46" height="46" alt="" src="http://image1.jmw.com.cn/liuyan/images/men.jpg"><br>王先生</div>
<ul class="comContent">
<li class="ipAdd"><span>60.169.128.*（安徽） 留言时间 2013-09-10 16:53:12 <img width="22" height="11" alt="new" src="http://image1.jmw.com.cn/liuyan/images/new.gif"></span><a target="_blank" href="http://user.jmw.com.cn/"><img width="46" height="18" alt="回复" src="http://image1.jmw.com.cn/liuyan/images/bg2.gif"></a></li>
<li class="userCon">学乐儿童英语项目很好，请尽快联系我详谈。</li>
<li class="adminCon"></li>
<li class="tipsCon">该创业者已免费索取<a target="_blank" href="http://zch.jmw.com.cn">"第六届中国（国际）品牌招商•创业投资博览会"</a>门票</li>
</ul>	
<div class="clr"></div>
</div>		
<div class="comList">
<div class="userHead"><img width="46" height="46" alt="" src="http://image1.jmw.com.cn/liuyan/images/women.jpg"><br>张女士</div>
<ul class="comContent">
<li class="ipAdd"><span>60.6.241.* 留言时间 2013-09-10 15:47:40 <img width="22" height="11" alt="new" src="http://image1.jmw.com.cn/liuyan/images/new.gif"></span><a target="_blank" href="http://user.jmw.com.cn/"><img width="46" height="18" alt="回复" src="http://image1.jmw.com.cn/liuyan/images/bg2.gif"></a></li>
<li class="userCon">我想加盟学乐儿童英语，请电话联系我。</li>
<li class="adminCon"></li>
</ul>	
<div class="clr"></div>
</div>		
<div class="comList">
<div class="userHead"><img width="46" height="46" alt="" src="http://image1.jmw.com.cn/liuyan/images/women.jpg"><br>王女士</div>
<ul class="comContent">
<li class="ipAdd"><span>120.84.13.*（贵州） 留言时间 2013-09-09 17:14:11 <img width="22" height="11" alt="new" src="http://image1.jmw.com.cn/liuyan/images/new.gif"></span><a target="_blank" href="http://user.jmw.com.cn/"><img width="46" height="18" alt="回复" src="http://image1.jmw.com.cn/liuyan/images/bg2.gif"></a></li>
<li class="userCon">·做为此项目的代理加盟商能得到哪些支持？</li>
<li class="adminCon"></li>
</ul>	
<div class="clr"></div>
</div>		
<div class="comList">
<div class="userHead"><img width="46" height="46" alt="" src="http://image1.jmw.com.cn/liuyan/images/women.jpg"><br>李女士</div>
<ul class="comContent">
<li class="ipAdd"><span>202.106.148.*（北京） 留言时间 2013-09-06 18:58:28 <img width="22" height="11" alt="new" src="http://image1.jmw.com.cn/liuyan/images/new.gif"></span><a target="_blank" href="http://user.jmw.com.cn/"><img width="46" height="18" alt="回复" src="http://image1.jmw.com.cn/liuyan/images/bg2.gif"></a></li>
<li class="userCon">学乐儿童英语项目很好，请尽快联系我详谈。</li>
<li class="adminCon">感谢您对我们学乐儿童英语的关注，稍后会有学乐儿童英语的专业客服人员跟您联...<a target="_blank" href="http://liuyan.jmw.com.cn/messagelist.php?param=11-129498">[查看全部]</a></li>
<li class="tipsCon">该创业者已免费索取<a target="_blank" href="http://zch.jmw.com.cn">"第六届中国（国际）品牌招商•创业投资博览会"</a>门票</li>
</ul>	
<div class="clr"></div>
</div>		
<p class="more2"><a target="_blank" hidefocus="true" href="http://liuyan.jmw.com.cn/messagelist.php?param=11-129498">&gt;&gt;更多留言</a></p>
    </div>
</div>

            <!--咨询内容列表 end-->

            <a id="liuyan" name="liuyan"></a>
            <!--在线咨询 start-->
            			<div id="LiuYan2">
			<link type="text/css" rel="stylesheet" href="http://image1.jmw.com.cn/comment/css/comment_711.css">
<!-- <form id="form1" name="form1" method="post" action="http://liuyan.jmw.com.cn/message/messagecurd.php"> -->
<div class="comWrap">
	<h3>我要咨询</h3>
    <div class="comBox_1">
    <div class="comBox_2">
    	<!--左区 开始-->
    	<div class="boxLeft">
        	<div class="comTable">
            <table cellspacing="0" cellpadding="0">
            	<tbody>
                	<tr>
<td colspan="2">
<div class="content">
<p class="topTxt">关心学乐儿童英语，需要如下帮助<span>【<a onmouseover="jQuery('#msgList').show();" onmouseout="jQuery('#msgList').hide();" href="javascript:;">快捷留言</a>】</span></p>
<div class="textBox">
<textarea id="content" name="content"></textarea>
<span class="mark" id="conspan">*</span>
</div>
<!--快捷留言 start-->
<div onmouseover="jQuery('#msgList').show();" onmouseout="jQuery('#msgList').hide();" style="display:none;" id="msgList" class="secMsg">
<iframe frameborder="0" class="msgIframe"></iframe>
<p><strong>您可以根据意向选择下列[快捷留言] ↓</strong></p>
<ul>
<li><a href="javascript:;" onclick="avals(this);">学乐儿童英语项目很好，请尽快联系我详谈。</a></li>
<li><a href="javascript:;" onclick="avals(this);">请问我所在的地区有学乐儿童英语加盟商了吗？</a></li>
<li><a href="javascript:;" onclick="avals(this);">我已留下了邮箱，请将学乐儿童英语加盟详细资料发邮件给我。</a></li>
<li><a href="javascript:;" onclick="avals(this);">我想详细了解学乐儿童英语的加盟流程，请与我联系！</a></li>
<li><a href="javascript:;" onclick="avals(this);">做为学乐儿童英语的代理加盟商能得到哪些支持？</a></li>
<li><a href="javascript:;" onclick="avals(this);">请问投资学乐儿童英语所需要的费用有哪些？</a></li>
<li class="noLine"><a href="javascript:;" onclick="avals(this);">我想加盟学乐儿童英语，请电话联系我。</a></li>                    
   </ul>
</div>
<!--快捷留言 end-->
</div>
</td>
</tr>                    <tr>
                    	<td width="13%"><img width="16" height="16" alt="所在地区" src="http://image1.jmw.com.cn/comment/images/region_icon.gif"> 地区</td>
                    	<td width="87%">
                                <select onchange="change(1,0);" name="dqid10" id="dqid10"><option value="省/市">省/市</option><option value="北京">北京</option><option value="天津">天津</option><option value="河北">河北</option><option value="山西">山西</option><option value="内蒙古">内蒙古</option><option value="辽宁">辽宁</option><option value="吉林">吉林</option><option value="黑龙江">黑龙江</option><option value="上海">上海</option><option value="江苏">江苏</option><option value="浙江">浙江</option><option value="安徽">安徽</option><option value="福建">福建</option><option value="江西">江西</option><option value="山东">山东</option><option value="河南">河南</option><option value="湖北">湖北</option><option value="湖南">湖南</option><option value="广东">广东</option><option value="广西">广西</option><option value="海南">海南</option><option value="重庆">重庆</option><option value="四川">四川</option><option value="贵州">贵州</option><option value="云南">云南</option><option value="西藏">西藏</option><option value="陕西">陕西</option><option value="甘肃">甘肃</option><option value="青海">青海</option><option value="宁夏">宁夏</option><option value="新疆">新疆</option><option value="台湾">台湾</option><option value="香港">香港</option><option value="澳门">澳门</option></select>
		      <select onchange="change(2,0);" name="dqid20" id="dqid20"><option value="地/州">地/州</option><option value="市辖区">市辖区</option><option value="县">县</option></select>
		      <select name="dqid30" id="dqid30"><option value="区/县">区/县</option><option value="东城区">东城区</option><option value="西城区">西城区</option><option value="崇文区">崇文区</option><option value="宣武区">宣武区</option><option value="朝阳区">朝阳区</option><option value="丰台区">丰台区</option><option value="石景山区">石景山区</option><option value="海淀区">海淀区</option><option value="门头沟区">门头沟区</option><option value="房山区">房山区</option><option value="通州区">通州区</option><option value="顺义区">顺义区</option><option value="昌平区">昌平区</option><option value="大兴区">大兴区</option><option value="怀柔区">怀柔区</option><option value="平谷区">平谷区</option></select>
		      <script type="text/javascript">
                                    var s0=["dqid10","dqid20","dqid30"];
                                    var opt0=["省/市","地/州","区/县"];
                                </script>
		<script type="text/javascript">change(0,0);</script>
                            <span class="mark" id="xiaspan">*</span>
                      </td>
                    </tr>
                    <tr>
                    	<td><img width="16" height="16" alt="详细地址" src="http://image1.jmw.com.cn/comment/images/add_icon.gif"> 地址</td>
                    	<td><input type="text" value="" class="input1" name="address" maxlength="75" id="g_adds"><span id="addspan"></span></td>
                    </tr>
                    <tr>
                    	<td style="" id="box1" class="subTable" colspan="2">
                    	<table cellspacing="0" cellpadding="0">
        	<tbody><tr>
    	<td width="13%"><img width="16" height="16" alt="姓名" src="http://image1.jmw.com.cn/comment/images/name_icon.gif"> 姓名</td>
    	<td width="37%"><input type="text" value="请输入您的中文名" class="input2" maxlength="19" id="sname" name="sname"> <span class="mark" id="namespan">*</span></td>
    	<td width="16%"><img width="16" height="16" alt="性别" src="http://image1.jmw.com.cn/comment/images/user_icon.gif"> 性&nbsp;&nbsp;别</td>
    	<td width="34%" class="chk">
            <input type="radio" checked="checked" value="0" name="sex" id="nan"><span>先生</span>
            <input type="radio" value="1" name="sex" id="nv"><span>女士</span>
        </td>
    </tr>
	<tr>
    	<td><img width="16" height="16" alt="手机" src="http://image1.jmw.com.cn/comment/images/tel_icon.gif"> 手机</td>
    	<td><input type="text" value="请输入您的手机号" class="input2" maxlength="11" id="g_sj" name="mobile"> <span class="mark" id="sjspan">*</span></td>
    	<td><img width="16" height="16" alt="固话" src="http://image1.jmw.com.cn/comment/images/tel_icon2.gif"> 固&nbsp;&nbsp;话</td>
    	<td><input type="text" value="" class="input4" maxlength="13" id="g_tel" name="phone"> <span class="mark" id="telspan"></span></td>
    </tr>
	<tr>
    	<td><img width="16" height="16" alt="电子邮箱" src="http://image1.jmw.com.cn/comment/images/email_icon.gif"> 邮箱</td>
    	<td><input type="text" value="" class="input2" maxlength="50" id="g_mail" name="email"> <span class="mark" id="emailspan"></span></td>
    	<td><img width="16" height="16" alt="QQ或MSN" src="http://image1.jmw.com.cn/comment/images/qq_icon.gif"> QQ/MSN</td>
    	<td>
            <input type="text" value="" class="input4" maxlength="50" id="g_qq" name="qqmsn"> <span class="mark" id="qqspan"></span>
            <input type="text" style="display:none" value="" class="input4" maxlength="6" id="g_post" name="postcode"> <span class="mark" id="pospan"></span>
       </td>
    </tr>
</tbody></table>      	
                        </td>
                        <!--提交成功返回状态 start-->
                    	<td style="display:none;" id="box2" class="succeed_Box" colspan="2">
                        </td>
                        <!--提交成功返回状态 end-->
                    </tr>
                 	<tr>
                    	<td colspan="2">
                        	<ul class="submitBox">
                                <li onmouseout="this.className='btn'" onmouseover="this.className='btn on'" class="btn" id="lgbtn_li"><input type="button" name="Submit" id="lgbtn"></li>
                                <li><input type="checkbox" onclick="changetype()" value="1" checked="checked" name="type" id="bookbox"></li>
                                <li>
                                	<p><strong>免费索取12•21国际创业节门票兑换码</strong></p>
                                    <p><strong><a href="http://zch.jmw.com.cn/" target="_blank">第六届中国(国际)品牌招商•创业投资博览会</a></strong></p>
                                    <p>举办时间：<strong>2013年12月21日-22日</strong>(周六~周日)</p>
		                            <p>举办地点：<strong>北京•国家会议中心</strong></p>
                                </li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
        <!--左区 结束-->
        <div class="midLine"></div>
        <input type="hidden" value="0" id="hidCookie" name="cookie">
          <input type="hidden" value="129498" id="belowmessagesid" name="sid">
           <input type="hidden" value="1" name="booking" id="booking">
           <input type="hidden" value="学乐儿童英语" name="brandname" id="belowmessagebrandname">
          </div>
    </div>
</div>
<!-- </form> -->
<iframe style="display:none;" name="createiframeq" id="createiframeq"></iframe>
<!-- 
<script>
$(function(){
		var html = '<table cellpadding="0" cellspacing="0">'+
        	'<tr>'+
    	'<td width="13%"><img src="http://image1.jmw.com.cn/comment/images/name_icon.gif" width="16" height="16" alt="姓名" /> 姓名</td>'+
    	'<td width="37%"><input name="sname" id="sname" maxlength="19" type="text" class="input2" value="请输入您的中文名" /> <span id="namespan" class="mark">*</span></td>'+
    	'<td width="16%"><img src="http://image1.jmw.com.cn/comment/images/user_icon.gif" width="16" height="16" alt="性别" /> 性&nbsp;&nbsp;别</td>'+
    	'<td width="34%" class="chk">'+
            '<input id="nan" name="sex" type="radio" value="0"  checked="checked" /><span>先生</span>'+
            '<input id="nv" type="radio" name="sex" value="1" /><span>女士</span>'+
        '</td>'+
    '</tr>'+
	'<tr>'+
    	'<td><img src="http://image1.jmw.com.cn/comment/images/tel_icon.gif" width="16" height="16" alt="手机" /> 手机</td>'+
    	'<td><input name="mobile" id="g_sj" maxlength="11" type="text" class="input2" value="请输入您的手机号" /> <span id="sjspan" class="mark">*</span></td>'+
    	'<td><img src="http://image1.jmw.com.cn/comment/images/tel_icon2.gif" width="16" height="16" alt="固话" /> 固&nbsp;&nbsp;话</td>'+
    	'<td><input name="phone" id="g_tel" maxlength="13" type="text" class="input4" value="" /> <span id="telspan" class="mark"></span></td>'+
    '</tr>'+
	'<tr>'+
    	'<td><img src="http://image1.jmw.com.cn/comment/images/email_icon.gif" width="16" height="16" alt="电子邮箱" /> 邮箱</td>'+
    	'<td><input name="email" id="g_mail" maxlength="50" type="text" class="input2" value="" /> <span id="emailspan" class="mark"></span></td>'+
    	'<td><img src="http://image1.jmw.com.cn/comment/images/qq_icon.gif" width="16" height="16" alt="QQ或MSN" /> QQ/MSN</td>'+
    	'<td>'+
            '<input name="qqmsn" id="g_qq"  maxlength="50" type="text" class="input4" value="" /> <span id="qqspan" class="mark"></span>'+
            '<input name="postcode" id="g_post" maxlength="6" type="text" class="input4" value="" style="display:none"/> <span id="pospan" class="mark"></span>'+
       '</td>'+
    '</tr>'+
'</table>';
		$("#box1").html(html);
});
</script> -->
<script type="text/javascript" src="http://liuyan.jmw.com.cn/jmw_tpl_2011/js/checkMessage400.js"></script><script type="text/javascript">
var obj=0;
if(getCookie('mssname')) obj=1;
Check.sendMessage(obj);
</script>
<script type="text/javascript">var host = "http://search.jmw.com.cn/";</script>
<script type="text/javascript" src="http://image1.jmw.com.cn/search/js/WebCall.js"></script>
<div class="boxRight_400">
        <div class="topPic_tel">
        	<p class="telName">学乐儿童英语免费咨询热线</p>
        	<p class="telNum">4000-500-555<span>转</span>86199     </p>
        </div>
        <div class="boxRight">
            <div class="con1"></div>
            <div class="con2">
                <div class="topPic"><img alt="用回呼电话免费通话，自由沟通！" src="http://image1.jmw.com.cn/comment/images/com_tips_02.jpg"></div>
                <div class="telBox">
                    <ul>
                        <li class="topTxt">输入您的电话，点击呼叫，按提示音操作</li>
                        <li>
                            <span>姓名</span>
                            <input type="text" id="name" class="input1" name="tel_name">
                            <input type="radio" class="chk" checked="checked" value="0" id="sex" name="tel_sex"><span class="first">先生</span>
                            <input type="radio" class="chk" value="1" id="sex" name="tel_sex"><span>女士</span>
                        </li>
                        <li>
                            <input type="radio" class="chk" checked="checked" value="0" name="tel_type">
                            <input type="text" class="input2" value="请填写手机号码" id="mobil" name="mobil" onblur="this.style.color='#999';if(this.value=='') this.value='请填写手机号码';" onkeyup="if(event.keyCode==13){doSearch();}" onfocus="this.style.color='#000';if(this.value=='请填写手机号码') this.value='';">
                        </li>
                        <li>
                            <input type="radio" class="chk" value="1" name="tel_type">
                            <input type="text" class="input3" value="区号" id="qh" name="qh" onblur="this.style.color='#999';if(this.value=='') this.value='区号';" onkeyup="if(event.keyCode==13){doSearch();}" onfocus="this.style.color='#000';if(this.value=='区号') this.value='';">
                            <input type="text" class="input4" value="固定电话" id="phone" name="phone" onblur="this.style.color='#999';if(this.value=='') this.value='固定电话';" onkeyup="if(event.keyCode==13){doSearch();}" onfocus="this.style.color='#000';if(this.value=='固定电话') this.value='';">
                        </li>
                        <li class="callBtn"><a title="免费呼叫" onclick="Webcall();return false;" href="javascript:;"></a></li>
                    </ul>
                    <p class="bottomTxt"><strong>温馨提示：</strong>费用将由企业支付，请放心拨打！</p>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript">
function  Webcall(){
	var com_id = "129498";
	var cn_num  = 0;var tel_name;var tel_sex;
	var tel_name = jQuery('input[name=tel_name]').val();
	if(jQuery('input[name=tel_type]:checked').val() == 0) cn_num = jQuery('#mobil').val();
	else cn_num = jQuery("#qh").val()+jQuery("#phone").val();
	if(cn_num == '区号固定电话') {
		alert('请填写固定电话！');return false;
	}
	if(cn_num == '请填写手机号码')
	{
		alert('请填写手机号码！');return false;
	}
	tel_name = jQuery("#name").val();
	tel_sex = getGender();
	if(com_id != '' &amp;&amp; cn_num != 0)
	{
		jQuery.ajax({
			type:'get',
			url:'http://protectedapi.jmw.com.cn/search/fouroorecord.php',
			dataType:'jsonp',
			jsonp:'fouroorecord',
			data:'cn_num='+cn_num+'&amp;com_id='+com_id+'&amp;sex='+tel_sex+'&amp;name='+tel_name,
			success:function(html){}
		});
	}
	var call=new WebCall400(com_id);
	call.webcall(cn_num);
}
</script>

			</div>			
			            <!--在线咨询 end-->
        </div>
        <!--左侧 end-->
        
        <!--右侧 start-->
        <div class="sidebar">
        
           <!--品牌基本信息 start-->
          		    	<!--投票 start-->
    	<div style="display:none;" id="voteBox" class="voteWrap">
	        
        </div>
      
        <!--投票 end-->
		<div class="itemR_Box">
            <div class="itemR_Top"></div>
            <div class="basePic"><a class="pic" href="http://xuele.jmw.com.cn/"><img width="113" height="87" alt="学乐儿童英语" src="http://photo.jmw.com.cn/pic/2012/4/11/1040555528178WQlet7xd.jpg"></a>
              <ul>
                <li><a href="#liuyan"><img width="83" height="25" alt="快捷留言" src="http://image1.jmw.com.cn/search/images/right_an1.gif"></a></li>
                <li><a onclick="AddVote(129498,1)" href="javascript:;"><img width="83" height="25" alt="给我投票" src="http://image1.jmw.com.cn/search/images/right_an2.jpg"></a></li>
                <li><a onclick="javascript:attention('129498','学乐儿童英语');return false;" href="javascript:;"><img width="83" height="25" alt="关注项目" src="http://image1.jmw.com.cn/search/images/right_an3.jpg"></a></li>
              </ul>
              <div class="clr"></div>
            </div>
            <script type="text/javascript">
                // &lt;![CDaTa[
                function bookmark(){
	                var title=document.title
	                var url=document.location.href
	                if (window.sidebar){ 
	                	window.sidebar.addPanel(title, url,"");
	                }else if( window.opera &amp;&amp; window.print ){
		                var mbm = document.createElement('a');
		                mbm.setattribute('rel','sidebar');
		                mbm.setattribute('href',url);
		                mbm.setattribute('title',title);
		                mbm.click();
	                }else if( document.all ) 
	                	window.external.addFavorite( url, title);
	                }
                // ]]&gt;
            </script>
           
            <ul class="baseList">
                          <li class="name">品牌名称：<span>学乐儿童英语</span></li>
              <li class="type">企业类型：<span>独资 </span></li>
              <li class="reg">会员注册：<span>2012-03-28 14:16</span></li>
              <li class="update noLine">资料更新：<span>2013-04-02 14:24</span></li>
                          </ul>
			            <h3 class="first">学乐儿童英语访问/排名信息</h3>
            <ul class="baseList">
              <li class="visit">本月访问：<span id="divBenYueFangWen">236</span></li>
              <li class="visit">总访问：<span id="divZongFangWen">17825</span></li>
              <li class="rank">本月排名：<span id="divBenYuePaiMing">93</span></li>
              <li class="days">上榜时间：<span id="divShangBangTime">531天</span></li>
              <li class="nums noLine">综合指数：<span id="FontZongHeZhiShu">1104</span></li>
            </ul>
            <div class="itemR_Foot"></div>
          </div>
		  
		<script>
          showEvote(129498,'xuele');
      	</script>
          <!--品牌基本信息 end-->
          
          <!--广告文字 start-->
          <div class="sideAD_229">    <a target="_blank" href="http://search.jmw.com.cn/jmw_user/yxyk/" ad_id="196" ad_need_click="true"><img width="229" height="60" src="http://attachment.jmw.com.cn/jmw_search_uploadfile/2013/0118/20130118030716652.gif"></a>
</div>
          <!--广告文字 end-->
          
          <!--项目查询入口 start-->
          		<div class="itemR_Box">
            <h3><span class="ico1">项目查询快速入口</span></h3>
            <ul class="itemQlink">
                          <li>[<a href="http://search.jmw.com.cn/2/" target="_blank">美食</a>]</li>
                            <li>[<a href="http://search.jmw.com.cn/1/" target="_blank">服装</a>]</li>
                            <li>[<a href="http://search.jmw.com.cn/3/" target="_blank">美容</a>]</li>
                            <li>[<a href="http://search.jmw.com.cn/7/" target="_blank">饰品</a>]</li>
                            <li>[<a href="http://search.jmw.com.cn/11/" target="_blank">教育</a>]</li>
                            <li>[<a href="http://search.jmw.com.cn/13/" target="_blank">幼儿</a>]</li>
                            <li>[<a href="http://search.jmw.com.cn/22/" target="_blank">家纺</a>]</li>
                            <li>[<a href="http://search.jmw.com.cn/4/" target="_blank">干洗</a>]</li>
                            <li>[<a href="http://search.jmw.com.cn/196/" target="_blank">酒水</a>]</li>
                            <li>[<a href="http://search.jmw.com.cn/16/" target="_blank">家居</a>]</li>
                            <li>[<a href="http://search.jmw.com.cn/17/" target="_blank">环保</a>]</li>
                            <li>[<a href="http://search.jmw.com.cn/21/" target="_blank">珠宝</a>]</li>
                            <li>[<a href="http://search.jmw.com.cn/23/" target="_blank">汽车</a>]</li>
                            <li>[<a href="http://search.jmw.com.cn/24/" target="_blank">建材</a>]</li>
                            <li>[<a href="http://search.jmw.com.cn/5/" target="_blank">精品</a>]</li>
                            <li>[<a href="http://search.jmw.com.cn/19/" target="_blank">五金</a>]</li>
                          </ul>
            <div class="itemR_Foot"></div>
          </div>
          <!--项目查询入口 end-->
          
          <!--项目资讯列表 start-->
          		<div class="itemR_Box">
			            <h3><span class="ico1">学乐儿童英语资讯</span></h3>
                        <ul class="itemNews_list">
            	<li>暂无企业资讯</li>
            </ul>
                        <div class="itemR_Foot"></div>
          </div>
          <!--项目资讯列表 end-->
          
          <!--同类项目 start-->
		  		<div class="itemR_Box">
            <h3><span class="ico2">教育同类项目</span></h3>
            <ul class="itemRelated">
			              <li><span class="name"><a title="优胜教育" target="_blank" href="http://youshengjiaoyu.jmw.com.cn/">优胜教育</a></span> <span>50~100万</span>
              <a href="javascript:;" onclick="javascript:attention(57189,'优胜教育' );_gaq.push(['_trackEvent', '关注', '点击', '同类项目关注点击']);return false;" class="link_btn">关注</a>
              </li>
                          <li><span class="name"><a title="北外少儿英语" target="_blank" href="http://beiwai.jmw.com.cn/">北外少儿英语</a></span> <span>10~20万</span>
              <a href="javascript:;" onclick="javascript:attention(14205,'北外少儿英语' );_gaq.push(['_trackEvent', '关注', '点击', '同类项目关注点击']);return false;" class="link_btn">关注</a>
              </li>
                          <li><span class="name"><a title="学乐儿童英语" target="_blank" href="http://xuele.jmw.com.cn/">学乐儿童英语</a></span> <span>50~100万</span>
              <a href="javascript:;" onclick="javascript:attention(129498,'学乐儿童英语' );_gaq.push(['_trackEvent', '关注', '点击', '同类项目关注点击']);return false;" class="link_btn">关注</a>
              </li>
                          <li><span class="name"><a title="布朗英语" target="_blank" href="http://bulang.jmw.com.cn/">布朗英语</a></span> <span>1~10万</span>
              <a href="javascript:;" onclick="javascript:attention(50391,'布朗英语' );_gaq.push(['_trackEvent', '关注', '点击', '同类项目关注点击']);return false;" class="link_btn">关注</a>
              </li>
                          <li><span class="name"><a title="北大青鸟一对一辅导" target="_blank" href="http://bdqnwljy.jmw.com.cn/">北大青鸟一对一</a></span> <span>20~50万</span>
              <a href="javascript:;" onclick="javascript:attention(162290,'北大青鸟一对一辅导' );_gaq.push(['_trackEvent', '关注', '点击', '同类项目关注点击']);return false;" class="link_btn">关注</a>
              </li>
                          <li><span class="name"><a title="巨人教育" target="_blank" href="http://jurenjiaoyu.jmw.com.cn/">巨人教育</a></span> <span>50~100万</span>
              <a href="javascript:;" onclick="javascript:attention(35381,'巨人教育' );_gaq.push(['_trackEvent', '关注', '点击', '同类项目关注点击']);return false;" class="link_btn">关注</a>
              </li>
                          <li><span class="name"><a title="巧口少儿英语" target="_blank" href="http://qiaokou.jmw.com.cn/">巧口少儿英语</a></span> <span>20~50万</span>
              <a href="javascript:;" onclick="javascript:attention(150395,'巧口少儿英语' );_gaq.push(['_trackEvent', '关注', '点击', '同类项目关注点击']);return false;" class="link_btn">关注</a>
              </li>
                          <li><span class="name"><a title="聚能1对1教育" target="_blank" href="http://junengjy.jmw.com.cn/">聚能1对1教育</a></span> <span>20~50万</span>
              <a href="javascript:;" onclick="javascript:attention(122291,'聚能1对1教育' );_gaq.push(['_trackEvent', '关注', '点击', '同类项目关注点击']);return false;" class="link_btn">关注</a>
              </li>
                          <li><span class="name"><a title="棒丁网络英语" target="_blank" href="http://bangding.jmw.com.cn/">棒丁网络英语</a></span> <span>10~50万</span>
              <a href="javascript:;" onclick="javascript:attention(151622,'棒丁网络英语' );_gaq.push(['_trackEvent', '关注', '点击', '同类项目关注点击']);return false;" class="link_btn">关注</a>
              </li>
                          <li><span class="name"><a title="用友新道学院" target="_blank" href="http://yyxdxy.jmw.com.cn/">用友新道学院</a></span> <span>20~50万</span>
              <a href="javascript:;" onclick="javascript:attention(131375,'用友新道学院' );_gaq.push(['_trackEvent', '关注', '点击', '同类项目关注点击']);return false;" class="link_btn">关注</a>
              </li>
                          <li><span class="name"><a title="东方童少儿艺术培训" target="_blank" href="http://dongfangtong.jmw.com.cn/">东方童少儿艺术</a></span> <span>10~20万</span>
              <a href="javascript:;" onclick="javascript:attention(150350,'东方童少儿艺术培训' );_gaq.push(['_trackEvent', '关注', '点击', '同类项目关注点击']);return false;" class="link_btn">关注</a>
              </li>
                          <li><span class="name"><a title="乐兜学科英语" target="_blank" href="http://ledouxueke.jmw.com.cn/">乐兜学科英语</a></span> <span>20~50万</span>
              <a href="javascript:;" onclick="javascript:attention(124509,'乐兜学科英语' );_gaq.push(['_trackEvent', '关注', '点击', '同类项目关注点击']);return false;" class="link_btn">关注</a>
              </li>
                          <li><span class="name"><a title="智新超越" target="_blank" href="http://zhixinchaoyue.jmw.com.cn/">智新超越</a></span> <span>1~10万</span>
              <a href="javascript:;" onclick="javascript:attention(26899,'智新超越' );_gaq.push(['_trackEvent', '关注', '点击', '同类项目关注点击']);return false;" class="link_btn">关注</a>
              </li>
                          <li><span class="name"><a title="北大青鸟国际教育" target="_blank" href="http://qingniaoguojijiaoyu.jmw.com.cn/">北大青鸟国际教</a></span> <span>50~100万</span>
              <a href="javascript:;" onclick="javascript:attention(158184,'北大青鸟国际教育' );_gaq.push(['_trackEvent', '关注', '点击', '同类项目关注点击']);return false;" class="link_btn">关注</a>
              </li>
                          <li><span class="name"><a title="小主人小记者" target="_blank" href="http://xiaozhuren.jmw.com.cn/">小主人小记者</a></span> <span>1~10万</span>
              <a href="javascript:;" onclick="javascript:attention(1527,'小主人小记者' );_gaq.push(['_trackEvent', '关注', '点击', '同类项目关注点击']);return false;" class="link_btn">关注</a>
              </li>
              
            </ul>
            <div class="itemR_Foot"></div>
          </div>

          <!--同类项目 end-->
          
          <!--万元项目 start-->
		  		<div class="itemR_Box">
			            <h3><span class="ico2">50~~100万元项目</span></h3>
            <ul class="itemRelated">
			              <li style="z-index:99">
              	  <span class="name2"><a title="优胜教育" target="_blank" href="http://youshengjiaoyu.jmw.com.cn/">优胜教育</a></span>
                  <span>教育</span>
                  <a href="javascript:;" onclick="javascript:attention(57189,'优胜教育');_gaq.push(['_trackEvent', '关注', '点击', '百万项目关注点击']);return false;" class="link_btn">关注</a>
				  <a href="javascript:;" onclick="onClickBBSInfo('57189','优胜教育','');return false;" class="link_btn">留言</a>
                  <!-- <span class="msg"><img src="http://image1.jmw.com.cn/search/images/right_boico4.jpg" onmouseout="jQuery('#fl_57189').hide();" onmouseover="jQuery('#fl_57189').show();" width="60" height="19" alt="留言" /></span> -->
                  <!--留言 start-->
                  <div onmouseover="jQuery('#fl_57189').show();" onmouseout="jQuery('#fl_57189').hide();" style="display:none;" id="fl_57189" class="secMsg">
                        <p><strong>您可以根据意向选择下列[快捷留言] ↓</strong></p>
                        <ul>
                           <input type="hidden" id="js_item_57189" value="57189">
                           <li><a href="javascript:;" onclick="onClickBBSInfo('57189','优胜教育','此项目很好，请尽快联系我详谈。')">此项目很好，请尽快联系我详谈。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('57189','优胜教育','请问我所在的地区有此项目加盟商了吗？')">请问我所在的地区有此项目加盟商了吗？</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('57189','优胜教育','我已留下了邮箱，请将此项目详细资料发邮件给我。' )">我已留下了邮箱，请将此项目详细资料发邮件给我。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('57189','优胜教育','我想详细了解此项目的加盟流程，请与我联系。' )">我想详细了解此项目的加盟流程，请与我联系。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('57189','优胜教育','做为此项目的代理加盟商能得到哪些支持？' )">做为此项目的代理加盟商能得到哪些支持？</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('57189','优胜教育','请问投资此项目所需要的费用有哪些？')">请问投资此项目所需要的费用有哪些？</a></li>
                           <li class="noLine"><a href="javascript:;" onclick="onClickBBSInfo('57189','优胜教育','我想加盟此项目，请电话联系我。' )">我想加盟此项目，请电话联系我。</a></li>                    
                       </ul>
                    </div>
                  <!--留言 end-->
              </li>
			              <li style="z-index:98">
              	  <span class="name2"><a title="御贝孕婴会所" target="_blank" href="http://yubeiyunying.jmw.com.cn/">御贝孕婴会所</a></span>
                  <span>幼儿</span>
                  <a href="javascript:;" onclick="javascript:attention(157507,'御贝孕婴会所');_gaq.push(['_trackEvent', '关注', '点击', '百万项目关注点击']);return false;" class="link_btn">关注</a>
				  <a href="javascript:;" onclick="onClickBBSInfo('157507','御贝孕婴会所','');return false;" class="link_btn">留言</a>
                  <!-- <span class="msg"><img src="http://image1.jmw.com.cn/search/images/right_boico4.jpg" onmouseout="jQuery('#fl_157507').hide();" onmouseover="jQuery('#fl_157507').show();" width="60" height="19" alt="留言" /></span> -->
                  <!--留言 start-->
                  <div onmouseover="jQuery('#fl_157507').show();" onmouseout="jQuery('#fl_157507').hide();" style="display:none;" id="fl_157507" class="secMsg">
                        <p><strong>您可以根据意向选择下列[快捷留言] ↓</strong></p>
                        <ul>
                           <input type="hidden" id="js_item_157507" value="157507">
                           <li><a href="javascript:;" onclick="onClickBBSInfo('157507','御贝孕婴会所','此项目很好，请尽快联系我详谈。')">此项目很好，请尽快联系我详谈。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('157507','御贝孕婴会所','请问我所在的地区有此项目加盟商了吗？')">请问我所在的地区有此项目加盟商了吗？</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('157507','御贝孕婴会所','我已留下了邮箱，请将此项目详细资料发邮件给我。' )">我已留下了邮箱，请将此项目详细资料发邮件给我。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('157507','御贝孕婴会所','我想详细了解此项目的加盟流程，请与我联系。' )">我想详细了解此项目的加盟流程，请与我联系。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('157507','御贝孕婴会所','做为此项目的代理加盟商能得到哪些支持？' )">做为此项目的代理加盟商能得到哪些支持？</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('157507','御贝孕婴会所','请问投资此项目所需要的费用有哪些？')">请问投资此项目所需要的费用有哪些？</a></li>
                           <li class="noLine"><a href="javascript:;" onclick="onClickBBSInfo('157507','御贝孕婴会所','我想加盟此项目，请电话联系我。' )">我想加盟此项目，请电话联系我。</a></li>                    
                       </ul>
                    </div>
                  <!--留言 end-->
              </li>
			              <li style="z-index:97">
              	  <span class="name2"><a title="学乐儿童英语" target="_blank" href="http://xuele.jmw.com.cn/">学乐儿童英语</a></span>
                  <span>教育</span>
                  <a href="javascript:;" onclick="javascript:attention(129498,'学乐儿童英语');_gaq.push(['_trackEvent', '关注', '点击', '百万项目关注点击']);return false;" class="link_btn">关注</a>
				  <a href="javascript:;" onclick="onClickBBSInfo('129498','学乐儿童英语','');return false;" class="link_btn">留言</a>
                  <!-- <span class="msg"><img src="http://image1.jmw.com.cn/search/images/right_boico4.jpg" onmouseout="jQuery('#fl_129498').hide();" onmouseover="jQuery('#fl_129498').show();" width="60" height="19" alt="留言" /></span> -->
                  <!--留言 start-->
                  <div onmouseover="jQuery('#fl_129498').show();" onmouseout="jQuery('#fl_129498').hide();" style="display:none;" id="fl_129498" class="secMsg">
                        <p><strong>您可以根据意向选择下列[快捷留言] ↓</strong></p>
                        <ul>
                           <input type="hidden" id="js_item_129498" value="129498">
                           <li><a href="javascript:;" onclick="onClickBBSInfo('129498','学乐儿童英语','此项目很好，请尽快联系我详谈。')">此项目很好，请尽快联系我详谈。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('129498','学乐儿童英语','请问我所在的地区有此项目加盟商了吗？')">请问我所在的地区有此项目加盟商了吗？</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('129498','学乐儿童英语','我已留下了邮箱，请将此项目详细资料发邮件给我。' )">我已留下了邮箱，请将此项目详细资料发邮件给我。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('129498','学乐儿童英语','我想详细了解此项目的加盟流程，请与我联系。' )">我想详细了解此项目的加盟流程，请与我联系。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('129498','学乐儿童英语','做为此项目的代理加盟商能得到哪些支持？' )">做为此项目的代理加盟商能得到哪些支持？</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('129498','学乐儿童英语','请问投资此项目所需要的费用有哪些？')">请问投资此项目所需要的费用有哪些？</a></li>
                           <li class="noLine"><a href="javascript:;" onclick="onClickBBSInfo('129498','学乐儿童英语','我想加盟此项目，请电话联系我。' )">我想加盟此项目，请电话联系我。</a></li>                    
                       </ul>
                    </div>
                  <!--留言 end-->
              </li>
			              <li style="z-index:96">
              	  <span class="name2"><a title="朝天门火锅" target="_blank" href="http://chaotianmen.jmw.com.cn/">朝天门火锅</a></span>
                  <span>美食</span>
                  <a href="javascript:;" onclick="javascript:attention(90420,'朝天门火锅');_gaq.push(['_trackEvent', '关注', '点击', '百万项目关注点击']);return false;" class="link_btn">关注</a>
				  <a href="javascript:;" onclick="onClickBBSInfo('90420','朝天门火锅','');return false;" class="link_btn">留言</a>
                  <!-- <span class="msg"><img src="http://image1.jmw.com.cn/search/images/right_boico4.jpg" onmouseout="jQuery('#fl_90420').hide();" onmouseover="jQuery('#fl_90420').show();" width="60" height="19" alt="留言" /></span> -->
                  <!--留言 start-->
                  <div onmouseover="jQuery('#fl_90420').show();" onmouseout="jQuery('#fl_90420').hide();" style="display:none;" id="fl_90420" class="secMsg">
                        <p><strong>您可以根据意向选择下列[快捷留言] ↓</strong></p>
                        <ul>
                           <input type="hidden" id="js_item_90420" value="90420">
                           <li><a href="javascript:;" onclick="onClickBBSInfo('90420','朝天门火锅','此项目很好，请尽快联系我详谈。')">此项目很好，请尽快联系我详谈。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('90420','朝天门火锅','请问我所在的地区有此项目加盟商了吗？')">请问我所在的地区有此项目加盟商了吗？</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('90420','朝天门火锅','我已留下了邮箱，请将此项目详细资料发邮件给我。' )">我已留下了邮箱，请将此项目详细资料发邮件给我。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('90420','朝天门火锅','我想详细了解此项目的加盟流程，请与我联系。' )">我想详细了解此项目的加盟流程，请与我联系。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('90420','朝天门火锅','做为此项目的代理加盟商能得到哪些支持？' )">做为此项目的代理加盟商能得到哪些支持？</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('90420','朝天门火锅','请问投资此项目所需要的费用有哪些？')">请问投资此项目所需要的费用有哪些？</a></li>
                           <li class="noLine"><a href="javascript:;" onclick="onClickBBSInfo('90420','朝天门火锅','我想加盟此项目，请电话联系我。' )">我想加盟此项目，请电话联系我。</a></li>                    
                       </ul>
                    </div>
                  <!--留言 end-->
              </li>
			              <li style="z-index:95">
              	  <span class="name2"><a title="恒星珠宝" target="_blank" href="http://hengxingzb.jmw.com.cn/">恒星珠宝</a></span>
                  <span>珠宝</span>
                  <a href="javascript:;" onclick="javascript:attention(149905,'恒星珠宝');_gaq.push(['_trackEvent', '关注', '点击', '百万项目关注点击']);return false;" class="link_btn">关注</a>
				  <a href="javascript:;" onclick="onClickBBSInfo('149905','恒星珠宝','');return false;" class="link_btn">留言</a>
                  <!-- <span class="msg"><img src="http://image1.jmw.com.cn/search/images/right_boico4.jpg" onmouseout="jQuery('#fl_149905').hide();" onmouseover="jQuery('#fl_149905').show();" width="60" height="19" alt="留言" /></span> -->
                  <!--留言 start-->
                  <div onmouseover="jQuery('#fl_149905').show();" onmouseout="jQuery('#fl_149905').hide();" style="display:none;" id="fl_149905" class="secMsg">
                        <p><strong>您可以根据意向选择下列[快捷留言] ↓</strong></p>
                        <ul>
                           <input type="hidden" id="js_item_149905" value="149905">
                           <li><a href="javascript:;" onclick="onClickBBSInfo('149905','恒星珠宝','此项目很好，请尽快联系我详谈。')">此项目很好，请尽快联系我详谈。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('149905','恒星珠宝','请问我所在的地区有此项目加盟商了吗？')">请问我所在的地区有此项目加盟商了吗？</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('149905','恒星珠宝','我已留下了邮箱，请将此项目详细资料发邮件给我。' )">我已留下了邮箱，请将此项目详细资料发邮件给我。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('149905','恒星珠宝','我想详细了解此项目的加盟流程，请与我联系。' )">我想详细了解此项目的加盟流程，请与我联系。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('149905','恒星珠宝','做为此项目的代理加盟商能得到哪些支持？' )">做为此项目的代理加盟商能得到哪些支持？</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('149905','恒星珠宝','请问投资此项目所需要的费用有哪些？')">请问投资此项目所需要的费用有哪些？</a></li>
                           <li class="noLine"><a href="javascript:;" onclick="onClickBBSInfo('149905','恒星珠宝','我想加盟此项目，请电话联系我。' )">我想加盟此项目，请电话联系我。</a></li>                    
                       </ul>
                    </div>
                  <!--留言 end-->
              </li>
			              <li style="z-index:94">
              	  <span class="name2"><a title="金嘉利珠宝" target="_blank" href="http://jinjiali.jmw.com.cn/">金嘉利珠宝</a></span>
                  <span>珠宝</span>
                  <a href="javascript:;" onclick="javascript:attention(13294,'金嘉利珠宝');_gaq.push(['_trackEvent', '关注', '点击', '百万项目关注点击']);return false;" class="link_btn">关注</a>
				  <a href="javascript:;" onclick="onClickBBSInfo('13294','金嘉利珠宝','');return false;" class="link_btn">留言</a>
                  <!-- <span class="msg"><img src="http://image1.jmw.com.cn/search/images/right_boico4.jpg" onmouseout="jQuery('#fl_13294').hide();" onmouseover="jQuery('#fl_13294').show();" width="60" height="19" alt="留言" /></span> -->
                  <!--留言 start-->
                  <div onmouseover="jQuery('#fl_13294').show();" onmouseout="jQuery('#fl_13294').hide();" style="display:none;" id="fl_13294" class="secMsg">
                        <p><strong>您可以根据意向选择下列[快捷留言] ↓</strong></p>
                        <ul>
                           <input type="hidden" id="js_item_13294" value="13294">
                           <li><a href="javascript:;" onclick="onClickBBSInfo('13294','金嘉利珠宝','此项目很好，请尽快联系我详谈。')">此项目很好，请尽快联系我详谈。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('13294','金嘉利珠宝','请问我所在的地区有此项目加盟商了吗？')">请问我所在的地区有此项目加盟商了吗？</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('13294','金嘉利珠宝','我已留下了邮箱，请将此项目详细资料发邮件给我。' )">我已留下了邮箱，请将此项目详细资料发邮件给我。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('13294','金嘉利珠宝','我想详细了解此项目的加盟流程，请与我联系。' )">我想详细了解此项目的加盟流程，请与我联系。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('13294','金嘉利珠宝','做为此项目的代理加盟商能得到哪些支持？' )">做为此项目的代理加盟商能得到哪些支持？</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('13294','金嘉利珠宝','请问投资此项目所需要的费用有哪些？')">请问投资此项目所需要的费用有哪些？</a></li>
                           <li class="noLine"><a href="javascript:;" onclick="onClickBBSInfo('13294','金嘉利珠宝','我想加盟此项目，请电话联系我。' )">我想加盟此项目，请电话联系我。</a></li>                    
                       </ul>
                    </div>
                  <!--留言 end-->
              </li>
			              <li style="z-index:93">
              	  <span class="name2"><a title="巨人教育" target="_blank" href="http://jurenjiaoyu.jmw.com.cn/">巨人教育</a></span>
                  <span>教育</span>
                  <a href="javascript:;" onclick="javascript:attention(35381,'巨人教育');_gaq.push(['_trackEvent', '关注', '点击', '百万项目关注点击']);return false;" class="link_btn">关注</a>
				  <a href="javascript:;" onclick="onClickBBSInfo('35381','巨人教育','');return false;" class="link_btn">留言</a>
                  <!-- <span class="msg"><img src="http://image1.jmw.com.cn/search/images/right_boico4.jpg" onmouseout="jQuery('#fl_35381').hide();" onmouseover="jQuery('#fl_35381').show();" width="60" height="19" alt="留言" /></span> -->
                  <!--留言 start-->
                  <div onmouseover="jQuery('#fl_35381').show();" onmouseout="jQuery('#fl_35381').hide();" style="display:none;" id="fl_35381" class="secMsg">
                        <p><strong>您可以根据意向选择下列[快捷留言] ↓</strong></p>
                        <ul>
                           <input type="hidden" id="js_item_35381" value="35381">
                           <li><a href="javascript:;" onclick="onClickBBSInfo('35381','巨人教育','此项目很好，请尽快联系我详谈。')">此项目很好，请尽快联系我详谈。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('35381','巨人教育','请问我所在的地区有此项目加盟商了吗？')">请问我所在的地区有此项目加盟商了吗？</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('35381','巨人教育','我已留下了邮箱，请将此项目详细资料发邮件给我。' )">我已留下了邮箱，请将此项目详细资料发邮件给我。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('35381','巨人教育','我想详细了解此项目的加盟流程，请与我联系。' )">我想详细了解此项目的加盟流程，请与我联系。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('35381','巨人教育','做为此项目的代理加盟商能得到哪些支持？' )">做为此项目的代理加盟商能得到哪些支持？</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('35381','巨人教育','请问投资此项目所需要的费用有哪些？')">请问投资此项目所需要的费用有哪些？</a></li>
                           <li class="noLine"><a href="javascript:;" onclick="onClickBBSInfo('35381','巨人教育','我想加盟此项目，请电话联系我。' )">我想加盟此项目，请电话联系我。</a></li>                    
                       </ul>
                    </div>
                  <!--留言 end-->
              </li>
			              <li style="z-index:92">
              	  <span class="name2"><a title="德克士" target="_blank" href="http://dekeshi.jmw.com.cn/">德克士</a></span>
                  <span>美食</span>
                  <a href="javascript:;" onclick="javascript:attention(222,'德克士');_gaq.push(['_trackEvent', '关注', '点击', '百万项目关注点击']);return false;" class="link_btn">关注</a>
				  <a href="javascript:;" onclick="onClickBBSInfo('222','德克士','');return false;" class="link_btn">留言</a>
                  <!-- <span class="msg"><img src="http://image1.jmw.com.cn/search/images/right_boico4.jpg" onmouseout="jQuery('#fl_222').hide();" onmouseover="jQuery('#fl_222').show();" width="60" height="19" alt="留言" /></span> -->
                  <!--留言 start-->
                  <div onmouseover="jQuery('#fl_222').show();" onmouseout="jQuery('#fl_222').hide();" style="display:none;" id="fl_222" class="secMsg">
                        <p><strong>您可以根据意向选择下列[快捷留言] ↓</strong></p>
                        <ul>
                           <input type="hidden" id="js_item_222" value="222">
                           <li><a href="javascript:;" onclick="onClickBBSInfo('222','德克士','此项目很好，请尽快联系我详谈。')">此项目很好，请尽快联系我详谈。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('222','德克士','请问我所在的地区有此项目加盟商了吗？')">请问我所在的地区有此项目加盟商了吗？</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('222','德克士','我已留下了邮箱，请将此项目详细资料发邮件给我。' )">我已留下了邮箱，请将此项目详细资料发邮件给我。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('222','德克士','我想详细了解此项目的加盟流程，请与我联系。' )">我想详细了解此项目的加盟流程，请与我联系。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('222','德克士','做为此项目的代理加盟商能得到哪些支持？' )">做为此项目的代理加盟商能得到哪些支持？</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('222','德克士','请问投资此项目所需要的费用有哪些？')">请问投资此项目所需要的费用有哪些？</a></li>
                           <li class="noLine"><a href="javascript:;" onclick="onClickBBSInfo('222','德克士','我想加盟此项目，请电话联系我。' )">我想加盟此项目，请电话联系我。</a></li>                    
                       </ul>
                    </div>
                  <!--留言 end-->
              </li>
			              <li style="z-index:91">
              	  <span class="name2"><a title="北大青鸟国际教育" target="_blank" href="http://qingniaoguojijiaoyu.jmw.com.cn/">北大青鸟国际教</a></span>
                  <span>教育</span>
                  <a href="javascript:;" onclick="javascript:attention(158184,'北大青鸟国际教育');_gaq.push(['_trackEvent', '关注', '点击', '百万项目关注点击']);return false;" class="link_btn">关注</a>
				  <a href="javascript:;" onclick="onClickBBSInfo('158184','北大青鸟国际教育','');return false;" class="link_btn">留言</a>
                  <!-- <span class="msg"><img src="http://image1.jmw.com.cn/search/images/right_boico4.jpg" onmouseout="jQuery('#fl_158184').hide();" onmouseover="jQuery('#fl_158184').show();" width="60" height="19" alt="留言" /></span> -->
                  <!--留言 start-->
                  <div onmouseover="jQuery('#fl_158184').show();" onmouseout="jQuery('#fl_158184').hide();" style="display:none;" id="fl_158184" class="secMsg">
                        <p><strong>您可以根据意向选择下列[快捷留言] ↓</strong></p>
                        <ul>
                           <input type="hidden" id="js_item_158184" value="158184">
                           <li><a href="javascript:;" onclick="onClickBBSInfo('158184','北大青鸟国际教育','此项目很好，请尽快联系我详谈。')">此项目很好，请尽快联系我详谈。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('158184','北大青鸟国际教育','请问我所在的地区有此项目加盟商了吗？')">请问我所在的地区有此项目加盟商了吗？</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('158184','北大青鸟国际教育','我已留下了邮箱，请将此项目详细资料发邮件给我。' )">我已留下了邮箱，请将此项目详细资料发邮件给我。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('158184','北大青鸟国际教育','我想详细了解此项目的加盟流程，请与我联系。' )">我想详细了解此项目的加盟流程，请与我联系。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('158184','北大青鸟国际教育','做为此项目的代理加盟商能得到哪些支持？' )">做为此项目的代理加盟商能得到哪些支持？</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('158184','北大青鸟国际教育','请问投资此项目所需要的费用有哪些？')">请问投资此项目所需要的费用有哪些？</a></li>
                           <li class="noLine"><a href="javascript:;" onclick="onClickBBSInfo('158184','北大青鸟国际教育','我想加盟此项目，请电话联系我。' )">我想加盟此项目，请电话联系我。</a></li>                    
                       </ul>
                    </div>
                  <!--留言 end-->
              </li>
			              <li style="z-index:90">
              	  <span class="name2"><a title="辣尚瘾" target="_blank" href="http://lashangyin.jmw.com.cn/">辣尚瘾</a></span>
                  <span>美食</span>
                  <a href="javascript:;" onclick="javascript:attention(119993,'辣尚瘾');_gaq.push(['_trackEvent', '关注', '点击', '百万项目关注点击']);return false;" class="link_btn">关注</a>
				  <a href="javascript:;" onclick="onClickBBSInfo('119993','辣尚瘾','');return false;" class="link_btn">留言</a>
                  <!-- <span class="msg"><img src="http://image1.jmw.com.cn/search/images/right_boico4.jpg" onmouseout="jQuery('#fl_119993').hide();" onmouseover="jQuery('#fl_119993').show();" width="60" height="19" alt="留言" /></span> -->
                  <!--留言 start-->
                  <div onmouseover="jQuery('#fl_119993').show();" onmouseout="jQuery('#fl_119993').hide();" style="display:none;" id="fl_119993" class="secMsg">
                        <p><strong>您可以根据意向选择下列[快捷留言] ↓</strong></p>
                        <ul>
                           <input type="hidden" id="js_item_119993" value="119993">
                           <li><a href="javascript:;" onclick="onClickBBSInfo('119993','辣尚瘾','此项目很好，请尽快联系我详谈。')">此项目很好，请尽快联系我详谈。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('119993','辣尚瘾','请问我所在的地区有此项目加盟商了吗？')">请问我所在的地区有此项目加盟商了吗？</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('119993','辣尚瘾','我已留下了邮箱，请将此项目详细资料发邮件给我。' )">我已留下了邮箱，请将此项目详细资料发邮件给我。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('119993','辣尚瘾','我想详细了解此项目的加盟流程，请与我联系。' )">我想详细了解此项目的加盟流程，请与我联系。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('119993','辣尚瘾','做为此项目的代理加盟商能得到哪些支持？' )">做为此项目的代理加盟商能得到哪些支持？</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('119993','辣尚瘾','请问投资此项目所需要的费用有哪些？')">请问投资此项目所需要的费用有哪些？</a></li>
                           <li class="noLine"><a href="javascript:;" onclick="onClickBBSInfo('119993','辣尚瘾','我想加盟此项目，请电话联系我。' )">我想加盟此项目，请电话联系我。</a></li>                    
                       </ul>
                    </div>
                  <!--留言 end-->
              </li>
			              <li style="z-index:89">
              	  <span class="name2"><a title="禧六福珠宝" target="_blank" href="http://xiliufu.jmw.com.cn/">禧六福珠宝</a></span>
                  <span>珠宝</span>
                  <a href="javascript:;" onclick="javascript:attention(13076,'禧六福珠宝');_gaq.push(['_trackEvent', '关注', '点击', '百万项目关注点击']);return false;" class="link_btn">关注</a>
				  <a href="javascript:;" onclick="onClickBBSInfo('13076','禧六福珠宝','');return false;" class="link_btn">留言</a>
                  <!-- <span class="msg"><img src="http://image1.jmw.com.cn/search/images/right_boico4.jpg" onmouseout="jQuery('#fl_13076').hide();" onmouseover="jQuery('#fl_13076').show();" width="60" height="19" alt="留言" /></span> -->
                  <!--留言 start-->
                  <div onmouseover="jQuery('#fl_13076').show();" onmouseout="jQuery('#fl_13076').hide();" style="display:none;" id="fl_13076" class="secMsg">
                        <p><strong>您可以根据意向选择下列[快捷留言] ↓</strong></p>
                        <ul>
                           <input type="hidden" id="js_item_13076" value="13076">
                           <li><a href="javascript:;" onclick="onClickBBSInfo('13076','禧六福珠宝','此项目很好，请尽快联系我详谈。')">此项目很好，请尽快联系我详谈。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('13076','禧六福珠宝','请问我所在的地区有此项目加盟商了吗？')">请问我所在的地区有此项目加盟商了吗？</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('13076','禧六福珠宝','我已留下了邮箱，请将此项目详细资料发邮件给我。' )">我已留下了邮箱，请将此项目详细资料发邮件给我。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('13076','禧六福珠宝','我想详细了解此项目的加盟流程，请与我联系。' )">我想详细了解此项目的加盟流程，请与我联系。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('13076','禧六福珠宝','做为此项目的代理加盟商能得到哪些支持？' )">做为此项目的代理加盟商能得到哪些支持？</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('13076','禧六福珠宝','请问投资此项目所需要的费用有哪些？')">请问投资此项目所需要的费用有哪些？</a></li>
                           <li class="noLine"><a href="javascript:;" onclick="onClickBBSInfo('13076','禧六福珠宝','我想加盟此项目，请电话联系我。' )">我想加盟此项目，请电话联系我。</a></li>                    
                       </ul>
                    </div>
                  <!--留言 end-->
              </li>
			              <li style="z-index:88">
              	  <span class="name2"><a title="SK英国皇家少儿英语" target="_blank" href="http://skhuangjiayingyu.jmw.com.cn/">SK英国皇家少</a></span>
                  <span>教育</span>
                  <a href="javascript:;" onclick="javascript:attention(164150,'SK英国皇家少儿英语');_gaq.push(['_trackEvent', '关注', '点击', '百万项目关注点击']);return false;" class="link_btn">关注</a>
				  <a href="javascript:;" onclick="onClickBBSInfo('164150','SK英国皇家少儿英语','');return false;" class="link_btn">留言</a>
                  <!-- <span class="msg"><img src="http://image1.jmw.com.cn/search/images/right_boico4.jpg" onmouseout="jQuery('#fl_164150').hide();" onmouseover="jQuery('#fl_164150').show();" width="60" height="19" alt="留言" /></span> -->
                  <!--留言 start-->
                  <div onmouseover="jQuery('#fl_164150').show();" onmouseout="jQuery('#fl_164150').hide();" style="display:none;" id="fl_164150" class="secMsg">
                        <p><strong>您可以根据意向选择下列[快捷留言] ↓</strong></p>
                        <ul>
                           <input type="hidden" id="js_item_164150" value="164150">
                           <li><a href="javascript:;" onclick="onClickBBSInfo('164150','SK英国皇家少儿英语','此项目很好，请尽快联系我详谈。')">此项目很好，请尽快联系我详谈。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('164150','SK英国皇家少儿英语','请问我所在的地区有此项目加盟商了吗？')">请问我所在的地区有此项目加盟商了吗？</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('164150','SK英国皇家少儿英语','我已留下了邮箱，请将此项目详细资料发邮件给我。' )">我已留下了邮箱，请将此项目详细资料发邮件给我。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('164150','SK英国皇家少儿英语','我想详细了解此项目的加盟流程，请与我联系。' )">我想详细了解此项目的加盟流程，请与我联系。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('164150','SK英国皇家少儿英语','做为此项目的代理加盟商能得到哪些支持？' )">做为此项目的代理加盟商能得到哪些支持？</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('164150','SK英国皇家少儿英语','请问投资此项目所需要的费用有哪些？')">请问投资此项目所需要的费用有哪些？</a></li>
                           <li class="noLine"><a href="javascript:;" onclick="onClickBBSInfo('164150','SK英国皇家少儿英语','我想加盟此项目，请电话联系我。' )">我想加盟此项目，请电话联系我。</a></li>                    
                       </ul>
                    </div>
                  <!--留言 end-->
              </li>
			              <li style="z-index:87">
              	  <span class="name2"><a title="蓝宇外语学校" target="_blank" href="http://lanyuwaiyu.jmw.com.cn/">蓝宇外语学校</a></span>
                  <span>教育</span>
                  <a href="javascript:;" onclick="javascript:attention(28004,'蓝宇外语学校');_gaq.push(['_trackEvent', '关注', '点击', '百万项目关注点击']);return false;" class="link_btn">关注</a>
				  <a href="javascript:;" onclick="onClickBBSInfo('28004','蓝宇外语学校','');return false;" class="link_btn">留言</a>
                  <!-- <span class="msg"><img src="http://image1.jmw.com.cn/search/images/right_boico4.jpg" onmouseout="jQuery('#fl_28004').hide();" onmouseover="jQuery('#fl_28004').show();" width="60" height="19" alt="留言" /></span> -->
                  <!--留言 start-->
                  <div onmouseover="jQuery('#fl_28004').show();" onmouseout="jQuery('#fl_28004').hide();" style="display:none;" id="fl_28004" class="secMsg">
                        <p><strong>您可以根据意向选择下列[快捷留言] ↓</strong></p>
                        <ul>
                           <input type="hidden" id="js_item_28004" value="28004">
                           <li><a href="javascript:;" onclick="onClickBBSInfo('28004','蓝宇外语学校','此项目很好，请尽快联系我详谈。')">此项目很好，请尽快联系我详谈。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('28004','蓝宇外语学校','请问我所在的地区有此项目加盟商了吗？')">请问我所在的地区有此项目加盟商了吗？</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('28004','蓝宇外语学校','我已留下了邮箱，请将此项目详细资料发邮件给我。' )">我已留下了邮箱，请将此项目详细资料发邮件给我。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('28004','蓝宇外语学校','我想详细了解此项目的加盟流程，请与我联系。' )">我想详细了解此项目的加盟流程，请与我联系。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('28004','蓝宇外语学校','做为此项目的代理加盟商能得到哪些支持？' )">做为此项目的代理加盟商能得到哪些支持？</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('28004','蓝宇外语学校','请问投资此项目所需要的费用有哪些？')">请问投资此项目所需要的费用有哪些？</a></li>
                           <li class="noLine"><a href="javascript:;" onclick="onClickBBSInfo('28004','蓝宇外语学校','我想加盟此项目，请电话联系我。' )">我想加盟此项目，请电话联系我。</a></li>                    
                       </ul>
                    </div>
                  <!--留言 end-->
              </li>
			              <li style="z-index:86">
              	  <span class="name2"><a title="愚掌门" target="_blank" href="http://yuzhangmen.jmw.com.cn/">愚掌门</a></span>
                  <span>美食</span>
                  <a href="javascript:;" onclick="javascript:attention(155018,'愚掌门');_gaq.push(['_trackEvent', '关注', '点击', '百万项目关注点击']);return false;" class="link_btn">关注</a>
				  <a href="javascript:;" onclick="onClickBBSInfo('155018','愚掌门','');return false;" class="link_btn">留言</a>
                  <!-- <span class="msg"><img src="http://image1.jmw.com.cn/search/images/right_boico4.jpg" onmouseout="jQuery('#fl_155018').hide();" onmouseover="jQuery('#fl_155018').show();" width="60" height="19" alt="留言" /></span> -->
                  <!--留言 start-->
                  <div onmouseover="jQuery('#fl_155018').show();" onmouseout="jQuery('#fl_155018').hide();" style="display:none;" id="fl_155018" class="secMsg">
                        <p><strong>您可以根据意向选择下列[快捷留言] ↓</strong></p>
                        <ul>
                           <input type="hidden" id="js_item_155018" value="155018">
                           <li><a href="javascript:;" onclick="onClickBBSInfo('155018','愚掌门','此项目很好，请尽快联系我详谈。')">此项目很好，请尽快联系我详谈。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('155018','愚掌门','请问我所在的地区有此项目加盟商了吗？')">请问我所在的地区有此项目加盟商了吗？</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('155018','愚掌门','我已留下了邮箱，请将此项目详细资料发邮件给我。' )">我已留下了邮箱，请将此项目详细资料发邮件给我。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('155018','愚掌门','我想详细了解此项目的加盟流程，请与我联系。' )">我想详细了解此项目的加盟流程，请与我联系。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('155018','愚掌门','做为此项目的代理加盟商能得到哪些支持？' )">做为此项目的代理加盟商能得到哪些支持？</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('155018','愚掌门','请问投资此项目所需要的费用有哪些？')">请问投资此项目所需要的费用有哪些？</a></li>
                           <li class="noLine"><a href="javascript:;" onclick="onClickBBSInfo('155018','愚掌门','我想加盟此项目，请电话联系我。' )">我想加盟此项目，请电话联系我。</a></li>                    
                       </ul>
                    </div>
                  <!--留言 end-->
              </li>
			              <li style="z-index:85">
              	  <span class="name2"><a title="永源汽车4S店" target="_blank" href="http://yongyuan.jmw.com.cn/">永源汽车4S店</a></span>
                  <span>汽车</span>
                  <a href="javascript:;" onclick="javascript:attention(139711,'永源汽车4S店');_gaq.push(['_trackEvent', '关注', '点击', '百万项目关注点击']);return false;" class="link_btn">关注</a>
				  <a href="javascript:;" onclick="onClickBBSInfo('139711','永源汽车4S店','');return false;" class="link_btn">留言</a>
                  <!-- <span class="msg"><img src="http://image1.jmw.com.cn/search/images/right_boico4.jpg" onmouseout="jQuery('#fl_139711').hide();" onmouseover="jQuery('#fl_139711').show();" width="60" height="19" alt="留言" /></span> -->
                  <!--留言 start-->
                  <div onmouseover="jQuery('#fl_139711').show();" onmouseout="jQuery('#fl_139711').hide();" style="display:none;" id="fl_139711" class="secMsg">
                        <p><strong>您可以根据意向选择下列[快捷留言] ↓</strong></p>
                        <ul>
                           <input type="hidden" id="js_item_139711" value="139711">
                           <li><a href="javascript:;" onclick="onClickBBSInfo('139711','永源汽车4S店','此项目很好，请尽快联系我详谈。')">此项目很好，请尽快联系我详谈。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('139711','永源汽车4S店','请问我所在的地区有此项目加盟商了吗？')">请问我所在的地区有此项目加盟商了吗？</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('139711','永源汽车4S店','我已留下了邮箱，请将此项目详细资料发邮件给我。' )">我已留下了邮箱，请将此项目详细资料发邮件给我。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('139711','永源汽车4S店','我想详细了解此项目的加盟流程，请与我联系。' )">我想详细了解此项目的加盟流程，请与我联系。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('139711','永源汽车4S店','做为此项目的代理加盟商能得到哪些支持？' )">做为此项目的代理加盟商能得到哪些支持？</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('139711','永源汽车4S店','请问投资此项目所需要的费用有哪些？')">请问投资此项目所需要的费用有哪些？</a></li>
                           <li class="noLine"><a href="javascript:;" onclick="onClickBBSInfo('139711','永源汽车4S店','我想加盟此项目，请电话联系我。' )">我想加盟此项目，请电话联系我。</a></li>                    
                       </ul>
                    </div>
                  <!--留言 end-->
              </li>
			            </ul>
            <div class="itemR_Foot"></div>
          </div>
          <!--万元项目 end-->
          
          <!--项目推荐 start-->
          <div class="itemR_Box">
            <h3><span class="ico2">精品项目推荐</span></h3>
            <dl class="itemHot bg"><dt><a target="_blank" href="http://lianhelvdong.jmw.com.cn/"><img width="113" height="87" alt="" src="http://attachment.jmw.com.cn/jmw_search_uploadfile/2013/0909/20130909025341551.jpg"></a></dt><dd>项目名：<a target="_blank" href="http://lianhelvdong.jmw.com.cn/">联合绿动“动动吧”</a></dd><dd>投资额：<a target="_blank" href="http://lianhelvdong.jmw.com.cn/">1万&mdash;10万</a></dd><dd>项目特点：<a target="_blank" href="http://lianhelvdong.jmw.com.cn/">联想集团投资的新兴产业，2013年全国限量招商。</a></dd><dd class="btn"><a onclick="javascript:attention(200680,'联合绿动“动动吧”');_gaq.push(['_trackEvent', '关注', '点击', '项目推荐关注点击']);return false;" href="javascript:;">
<img width="69" height="21" src="http://image1.jmw.com.cn/search/images/tjbutton_02b.gif">
</a>
         <a onclick="onClickBBSInfo('200680','联合绿动“动动吧”','');return false;" href="javascript:;"><img width="69" height="21" src="http://image1.jmw.com.cn/search/images/tjbutton_01.gif"></a>
         <!--留言 start-->
                    <div onmouseover="jQuery('#f2_200680').show();" onmouseout="jQuery('#f2_200680').hide();" style="display:none;" id="f2_200680" class="secMsg">
                        <p><strong>您可以根据意向选择下列[快捷留言] ↓</strong></p>
                        <ul>
                           <input type="hidden" id="js_item_200680" value="200680">
                           <li><a href="javascript:;" onclick="onClickBBSInfo('200680','联合绿动“动动吧”','此项目很好，请尽快联系我详谈。');return false;">此项目很好，请尽快联系我详谈。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('200680','联合绿动“动动吧”','请问我所在的地区有此项目加盟商了吗？');return false;">请问我所在的地区有此项目加盟商了吗？</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('200680','联合绿动“动动吧”','我已留下了邮箱，请将此项目详细资料发邮件给我。');return false;">我已留下了邮箱，请将此项目详细资料发邮件给我。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('200680','联合绿动“动动吧”','我想详细了解此项目的加盟流程，请与我联系。');return false;">我想详细了解此项目的加盟流程，请与我联系。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('200680','联合绿动“动动吧”','做为此项目的代理加盟商能得到哪些支持？');return false;">做为此项目的代理加盟商能得到哪些支持？</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('200680','联合绿动“动动吧”','请问投资此项目所需要的费用有哪些？');return false;">请问投资此项目所需要的费用有哪些？</a></li>
                           <li class="noLine"><a href="javascript:;" onclick="onClickBBSInfo('200680','联合绿动“动动吧”','我想加盟此项目，请电话联系我。');return false;">我想加盟此项目，请电话联系我。</a></li>                    
                       </ul>
                    </div>
                    <!--留言 end-->
</dd></dl>
            
            <dl class="itemHot"><dt><a target="_blank" href="http://bubblegummers.jmw.com.cn/"><img width="113" height="87" alt="" src="http://attachment.jmw.com.cn/jmw_search_uploadfile/2013/0909/20130909034855118.jpg"></a></dt><dd>项目名：<a target="_blank" href="http://bubblegummers.jmw.com.cn/">bbg童鞋</a></dd><dd>投资额：<a target="_blank" href="http://bubblegummers.jmw.com.cn/">10万&mdash;20万</a></dd><dd>项目特点：<a target="_blank" href="http://bubblegummers.jmw.com.cn/">零加盟费加盟bata集团旗下国际高端童鞋品牌！</a></dd><dd class="btn"><a onclick="javascript:attention(60513,'bbg童鞋');_gaq.push(['_trackEvent', '关注', '点击', '项目推荐关注点击']);return false;" href="javascript:;">
<img width="69" height="21" src="http://image1.jmw.com.cn/search/images/tjbutton_02b.gif">
</a>
         <a onmouseover="jQuery('#f2_60513').show();" onmouseout="jQuery('#f2_60513').hide();" href="javascript:;"><img width="69" height="21" src="http://image1.jmw.com.cn/search/images/tjbutton_01.gif"></a>
         <!--留言 start-->
                    <div onmouseover="jQuery('#f2_60513').show();" onmouseout="jQuery('#f2_60513').hide();" style="display:none;" id="f2_60513" class="secMsg">
                        <p><strong>您可以根据意向选择下列[快捷留言] ↓</strong></p>
                        <ul>
                           <input type="hidden" id="js_item_60513" value="60513">
                           <li><a href="javascript:;" onclick="onClickBBSInfo('60513','bbg童鞋','此项目很好，请尽快联系我详谈。');return false;">此项目很好，请尽快联系我详谈。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('60513','bbg童鞋','请问我所在的地区有此项目加盟商了吗？');return false;">请问我所在的地区有此项目加盟商了吗？</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('60513','bbg童鞋','我已留下了邮箱，请将此项目详细资料发邮件给我。');return false;">我已留下了邮箱，请将此项目详细资料发邮件给我。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('60513','bbg童鞋','我想详细了解此项目的加盟流程，请与我联系。');return false;">我想详细了解此项目的加盟流程，请与我联系。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('60513','bbg童鞋','做为此项目的代理加盟商能得到哪些支持？');return false;">做为此项目的代理加盟商能得到哪些支持？</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('60513','bbg童鞋','请问投资此项目所需要的费用有哪些？');return false;">请问投资此项目所需要的费用有哪些？</a></li>
                           <li class="noLine"><a href="javascript:;" onclick="onClickBBSInfo('60513','bbg童鞋','我想加盟此项目，请电话联系我。');return false;">我想加盟此项目，请电话联系我。</a></li>                    
                       </ul>
                    </div>
                    <!--留言 end-->
</dd></dl>
            
            <dl class="itemHot bg"><dt><a target="_blank" href="http://search.jmw.com.cn/jmw_user/atxfl/"><img width="113" height="87" alt="" src="http://attachment.jmw.com.cn/jmw_search_uploadfile/2013/0703/20130703034842430.jpg"></a></dt><dd>项目名：<a target="_blank" href="http://search.jmw.com.cn/jmw_user/atxfl/">奥特洗福莱</a></dd><dd>投资额：<a target="_blank" href="http://search.jmw.com.cn/jmw_user/atxfl/">10万&mdash;20万</a></dd><dd>项目特点：<a target="_blank" href="http://search.jmw.com.cn/jmw_user/atxfl/">奢侈品洗护专家，洗护一体的一站式超级先锋干洗品牌！</a></dd><dd class="btn"><a onclick="javascript:attention(26683,'奥特洗福莱');_gaq.push(['_trackEvent', '关注', '点击', '项目推荐关注点击']);return false;" href="javascript:;">
<img width="69" height="21" src="http://image1.jmw.com.cn/search/images/tjbutton_02b.gif">
</a>
         <a onmouseover="jQuery('#f2_26683').show();" onmouseout="jQuery('#f2_26683').hide();" href="javascript:;"><img width="69" height="21" src="http://image1.jmw.com.cn/search/images/tjbutton_01.gif"></a>
         <!--留言 start-->
                    <div onmouseover="jQuery('#f2_26683').show();" onmouseout="jQuery('#f2_26683').hide();" style="display:none;" id="f2_26683" class="secMsg">
                        <p><strong>您可以根据意向选择下列[快捷留言] ↓</strong></p>
                        <ul>
                           <input type="hidden" id="js_item_26683" value="26683">
                           <li><a href="javascript:;" onclick="onClickBBSInfo('26683','奥特洗福莱','此项目很好，请尽快联系我详谈。');return false;">此项目很好，请尽快联系我详谈。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('26683','奥特洗福莱','请问我所在的地区有此项目加盟商了吗？');return false;">请问我所在的地区有此项目加盟商了吗？</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('26683','奥特洗福莱','我已留下了邮箱，请将此项目详细资料发邮件给我。');return false;">我已留下了邮箱，请将此项目详细资料发邮件给我。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('26683','奥特洗福莱','我想详细了解此项目的加盟流程，请与我联系。');return false;">我想详细了解此项目的加盟流程，请与我联系。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('26683','奥特洗福莱','做为此项目的代理加盟商能得到哪些支持？');return false;">做为此项目的代理加盟商能得到哪些支持？</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('26683','奥特洗福莱','请问投资此项目所需要的费用有哪些？');return false;">请问投资此项目所需要的费用有哪些？</a></li>
                           <li class="noLine"><a href="javascript:;" onclick="onClickBBSInfo('26683','奥特洗福莱','我想加盟此项目，请电话联系我。');return false;">我想加盟此项目，请电话联系我。</a></li>                    
                       </ul>
                    </div>
                    <!--留言 end-->
</dd></dl>
			
      			<dl class="itemHot"><dt><a target="_blank" href="http://search.jmw.com.cn/comp/157507.shtml"><img width="113" height="87" alt="" src="http://attachment.jmw.com.cn/jmw_search_uploadfile/2013/0423/20130423025427332.jpg"></a></dt><dd>项目名：<a target="_blank" href="http://search.jmw.com.cn/comp/157507.shtml">御贝国际孕婴</a></dd><dd>投资额：<a target="_blank" href="http://search.jmw.com.cn/comp/157507.shtml">50万&mdash;100万</a></dd><dd>项目特点：<a target="_blank" href="http://search.jmw.com.cn/comp/157507.shtml">御贝国际孕婴SPA主题会所，专注母婴产业，打造高端母婴护理；重拾妈妈自信，培育宝宝健康！</a></dd><dd class="btn"><a onclick="javascript:attention(157507,'御贝国际孕婴');_gaq.push(['_trackEvent', '关注', '点击', '项目推荐关注点击']);return false;" href="javascript:;">
<img width="69" height="21" src="http://image1.jmw.com.cn/search/images/tjbutton_02b.gif">
</a>
         <a onmouseover="jQuery('#f2_157507').show();" onmouseout="jQuery('#f2_157507').hide();" href="javascript:;"><img width="69" height="21" src="http://image1.jmw.com.cn/search/images/tjbutton_01.gif"></a>
         <!--留言 start-->
                    <div onmouseover="jQuery('#f2_157507').show();" onmouseout="jQuery('#f2_157507').hide();" style="display:none;" id="f2_157507" class="secMsg">
                        <p><strong>您可以根据意向选择下列[快捷留言] ↓</strong></p>
                        <ul>
                           <input type="hidden" id="js_item_157507" value="157507">
                           <li><a href="javascript:;" onclick="onClickBBSInfo('157507','御贝国际孕婴','此项目很好，请尽快联系我详谈。');return false;">此项目很好，请尽快联系我详谈。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('157507','御贝国际孕婴','请问我所在的地区有此项目加盟商了吗？');return false;">请问我所在的地区有此项目加盟商了吗？</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('157507','御贝国际孕婴','我已留下了邮箱，请将此项目详细资料发邮件给我。');return false;">我已留下了邮箱，请将此项目详细资料发邮件给我。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('157507','御贝国际孕婴','我想详细了解此项目的加盟流程，请与我联系。');return false;">我想详细了解此项目的加盟流程，请与我联系。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('157507','御贝国际孕婴','做为此项目的代理加盟商能得到哪些支持？');return false;">做为此项目的代理加盟商能得到哪些支持？</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('157507','御贝国际孕婴','请问投资此项目所需要的费用有哪些？');return false;">请问投资此项目所需要的费用有哪些？</a></li>
                           <li class="noLine"><a href="javascript:;" onclick="onClickBBSInfo('157507','御贝国际孕婴','我想加盟此项目，请电话联系我。');return false;">我想加盟此项目，请电话联系我。</a></li>                    
                       </ul>
                    </div>
                    <!--留言 end-->
</dd></dl>
      			
      			<dl class="itemHot bg"><dt><a target="_blank" href="http://search.jmw.com.cn/jmw_user/huign/index.html"><img width="113" height="87" alt="" src="http://attachment.jmw.com.cn/jmw_search_uploadfile/2013/0217/20130217061549915.jpg"></a></dt><dd>项目名：<a target="_blank" href="http://search.jmw.com.cn/jmw_user/huign/index.html">灰姑娘干洗</a></dd><dd>投资额：<a target="_blank" href="http://search.jmw.com.cn/jmw_user/huign/index.html">1万&mdash;10万</a></dd><dd>项目特点：<a target="_blank" href="http://search.jmw.com.cn/jmw_user/huign/index.html">洗衣、洗鞋、洗包、奢侈品洗护、皮具及家居多元化一站式清洗服务；专业隔离式干洗设备，更专业、更健康，更快捷。</a></dd><dd class="btn"><a onclick="javascript:attention(4336,'灰姑娘干洗');_gaq.push(['_trackEvent', '关注', '点击', '项目推荐关注点击']);return false;" href="javascript:;">
<img width="69" height="21" src="http://image1.jmw.com.cn/search/images/tjbutton_02b.gif">
</a>
         <a onmouseover="jQuery('#f2_4336').show();" onmouseout="jQuery('#f2_4336').hide();" href="javascript:;"><img width="69" height="21" src="http://image1.jmw.com.cn/search/images/tjbutton_01.gif"></a>
         <!--留言 start-->
                    <div onmouseover="jQuery('#f2_4336').show();" onmouseout="jQuery('#f2_4336').hide();" style="display:none;" id="f2_4336" class="secMsg">
                        <p><strong>您可以根据意向选择下列[快捷留言] ↓</strong></p>
                        <ul>
                           <input type="hidden" id="js_item_4336" value="4336">
                           <li><a href="javascript:;" onclick="onClickBBSInfo('4336','灰姑娘干洗','此项目很好，请尽快联系我详谈。');return false;">此项目很好，请尽快联系我详谈。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('4336','灰姑娘干洗','请问我所在的地区有此项目加盟商了吗？');return false;">请问我所在的地区有此项目加盟商了吗？</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('4336','灰姑娘干洗','我已留下了邮箱，请将此项目详细资料发邮件给我。');return false;">我已留下了邮箱，请将此项目详细资料发邮件给我。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('4336','灰姑娘干洗','我想详细了解此项目的加盟流程，请与我联系。');return false;">我想详细了解此项目的加盟流程，请与我联系。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('4336','灰姑娘干洗','做为此项目的代理加盟商能得到哪些支持？');return false;">做为此项目的代理加盟商能得到哪些支持？</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('4336','灰姑娘干洗','请问投资此项目所需要的费用有哪些？');return false;">请问投资此项目所需要的费用有哪些？</a></li>
                           <li class="noLine"><a href="javascript:;" onclick="onClickBBSInfo('4336','灰姑娘干洗','我想加盟此项目，请电话联系我。');return false;">我想加盟此项目，请电话联系我。</a></li>                    
                       </ul>
                    </div>
                    <!--留言 end-->
</dd></dl>
      			
      			<dl class="itemHot"><dt><a target="_blank" href="http://guojianglonghg.jmw.com.cn/"><img width="113" height="87" alt="" src="http://attachment.jmw.com.cn/jmw_search_uploadfile/2013/0903/20130903062515971.jpg"></a></dt><dd>项目名：<a target="_blank" href="http://guojianglonghg.jmw.com.cn/">过江龙火锅</a></dd><dd>投资额：<a target="_blank" href="http://guojianglonghg.jmw.com.cn/">20万&mdash;50万</a></dd><dd>项目特点：<a target="_blank" href="http://guojianglonghg.jmw.com.cn/">时尚火锅主题餐厅，精致营养，好吃不贵。</a></dd><dd class="btn"><a onclick="javascript:attention(95849,'过江龙火锅');_gaq.push(['_trackEvent', '关注', '点击', '项目推荐关注点击']);return false;" href="javascript:;">
<img width="69" height="21" src="http://image1.jmw.com.cn/search/images/tjbutton_02b.gif">
</a>
         <a onmouseover="jQuery('#f2_95849').show();" onmouseout="jQuery('#f2_95849').hide();" href="javascript:;"><img width="69" height="21" src="http://image1.jmw.com.cn/search/images/tjbutton_01.gif"></a>
         <!--留言 start-->
                    <div onmouseover="jQuery('#f2_95849').show();" onmouseout="jQuery('#f2_95849').hide();" style="display:none;" id="f2_95849" class="secMsg">
                        <p><strong>您可以根据意向选择下列[快捷留言] ↓</strong></p>
                        <ul>
                           <input type="hidden" id="js_item_95849" value="95849">
                           <li><a href="javascript:;" onclick="onClickBBSInfo('95849','过江龙火锅','此项目很好，请尽快联系我详谈。');return false;">此项目很好，请尽快联系我详谈。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('95849','过江龙火锅','请问我所在的地区有此项目加盟商了吗？');return false;">请问我所在的地区有此项目加盟商了吗？</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('95849','过江龙火锅','我已留下了邮箱，请将此项目详细资料发邮件给我。');return false;">我已留下了邮箱，请将此项目详细资料发邮件给我。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('95849','过江龙火锅','我想详细了解此项目的加盟流程，请与我联系。');return false;">我想详细了解此项目的加盟流程，请与我联系。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('95849','过江龙火锅','做为此项目的代理加盟商能得到哪些支持？');return false;">做为此项目的代理加盟商能得到哪些支持？</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('95849','过江龙火锅','请问投资此项目所需要的费用有哪些？');return false;">请问投资此项目所需要的费用有哪些？</a></li>
                           <li class="noLine"><a href="javascript:;" onclick="onClickBBSInfo('95849','过江龙火锅','我想加盟此项目，请电话联系我。');return false;">我想加盟此项目，请电话联系我。</a></li>                    
                       </ul>
                    </div>
                    <!--留言 end-->
</dd></dl>
      			
      			<dl class="itemHot"><dt><a target="_blank" href="http://search.jmw.com.cn/jmw_user/amn/"><img width="113" height="87" alt="" src="http://attachment.jmw.com.cn/jmw_search_uploadfile/2012/1227/20121227070731970.jpg"></a></dt><dd>项目名：<a target="_blank" href="http://search.jmw.com.cn/jmw_user/amn/">阿玛尼洗衣</a></dd><dd>投资额：<a target="_blank" href="http://search.jmw.com.cn/jmw_user/amn/">1万&mdash;10万</a></dd><dd>项目特点：<a target="_blank" href="http://search.jmw.com.cn/jmw_user/amn/">洗衣 洗鞋 洗包 皮具护理一体洗护站 29800元开家名牌洗衣店；多桶单件隔离干洗，更卫生，更健康，更环保。</a></dd><dd class="btn"><a onclick="javascript:attention(142768,'阿玛尼洗衣');_gaq.push(['_trackEvent', '关注', '点击', '项目推荐关注点击']);return false;" href="javascript:;">
<img width="69" height="21" src="http://image1.jmw.com.cn/search/images/tjbutton_02b.gif">
</a>
         <a onmouseover="jQuery('#f2_142768').show();" onmouseout="jQuery('#f2_142768').hide();" href="javascript:;"><img width="69" height="21" src="http://image1.jmw.com.cn/search/images/tjbutton_01.gif"></a>
         <!--留言 start-->
                    <div onmouseover="jQuery('#f2_142768').show();" onmouseout="jQuery('#f2_142768').hide();" style="display:none;" id="f2_142768" class="secMsg">
                        <p><strong>您可以根据意向选择下列[快捷留言] ↓</strong></p>
                        <ul>
                           <input type="hidden" id="js_item_142768" value="142768">
                           <li><a href="javascript:;" onclick="onClickBBSInfo('142768','阿玛尼洗衣','此项目很好，请尽快联系我详谈。');return false;">此项目很好，请尽快联系我详谈。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('142768','阿玛尼洗衣','请问我所在的地区有此项目加盟商了吗？');return false;">请问我所在的地区有此项目加盟商了吗？</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('142768','阿玛尼洗衣','我已留下了邮箱，请将此项目详细资料发邮件给我。');return false;">我已留下了邮箱，请将此项目详细资料发邮件给我。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('142768','阿玛尼洗衣','我想详细了解此项目的加盟流程，请与我联系。');return false;">我想详细了解此项目的加盟流程，请与我联系。</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('142768','阿玛尼洗衣','做为此项目的代理加盟商能得到哪些支持？');return false;">做为此项目的代理加盟商能得到哪些支持？</a></li>
                           <li><a href="javascript:;" onclick="onClickBBSInfo('142768','阿玛尼洗衣','请问投资此项目所需要的费用有哪些？');return false;">请问投资此项目所需要的费用有哪些？</a></li>
                           <li class="noLine"><a href="javascript:;" onclick="onClickBBSInfo('142768','阿玛尼洗衣','我想加盟此项目，请电话联系我。');return false;">我想加盟此项目，请电话联系我。</a></li>                    
                       </ul>
                    </div>
                    <!--留言 end-->
</dd></dl>
			                  
            <div class="itemR_Foot"></div>
          </div>
          <!--项目推荐 end-->
          <div class="sideAD_241">    <a target="_blank" href="http://search.jmw.com.cn/jmw_user/xr/" ad_id="197" ad_need_click="true"><img width="241" height="349" src="http://attachment.jmw.com.cn/jmw_search_uploadfile/2013/0201/20130201015431267.jpg"></a>
</div>
           <div class="sideAD_241">
                <a target="_blank" href="http://search.jmw.com.cn/jmw_user/bcyss/" ad_id="210" ad_need_click="true"><img width="241" height="349" src="http://attachment.jmw.com.cn/jmw_search_uploadfile/2013/0627/20130627111700328.jpg"></a>

          </div>
          <div class="sideAD_241">
                <a target="_blank" href="http://search.jmw.com.cn/jmw_user/zh/index.html" ad_id="211" ad_need_click="true"><img width="241" height="349" src="http://attachment.jmw.com.cn/jmw_search_uploadfile/2013/0730/20130730051120598.jpg"></a>

          </div>
        </div>
        <!--右侧 end-->
        <div class="clr"></div>
    </div>
    <!--主体 end-->
    
    <!--底部 开始-->
   <link rel="stylesheet" type="text/css" href="http://image1.jmw.com.cn/public/css/public_footer.css">
<div class="footer">
    <div class="hot"><img src="http://image1.jmw.com.cn/public/images/hot.gif"></div> 
    <p><a target="_blank" href="http://about.jmw.com.cn">关于我们</a>|<a target="_blank" href="http://about.jmw.com.cn/PhotoList_1.shtml">公司相册</a>|<a target="_blank" href="http://about.jmw.com.cn/News_268.shtml">公司视频</a>|<a target="_blank" href="http://about.jmw.com.cn/Internet.shtml">旗下业务</a>|<a target="_blank" href="http://about.jmw.com.cn/CorporateCulture.shtml">企业文化</a>|<a target="_blank" href="http://about.jmw.com.cn/guest.shtml">客户合作</a>|<a target="_blank" href="http://about.jmw.com.cn/Job_one.shtml">诚聘精英</a>|<a target="_blank" href="http://about.jmw.com.cn/MediaList_1.shtml">媒体报道</a>|<a target="_blank" href="http://about.jmw.com.cn/sitemap.shtml">网站地图</a>|<a target="_blank" href="http://about.jmw.com.cn/Statistics.shtml">在线统计</a>|<a target="_blank" href="http://about.jmw.com.cn/ContactUs.shtml">联系我们</a></p>
    刊登热线：4000-500-555 咨询电话：010-62168889 中国加盟网友情提示：多打电话、多咨询、实地考察，可降低投资风险<br>
    Copyright&copy;2004-2013 JMW.COM.CN. All Rights Reserved 北京天创时代信息技术有限公司 版权所有<br>
    <a target="_blank" href="http://www.hd315.gov.cn/beian/view.asp?bianhao=010202006020700545"><img src="http://image1.jmw.com.cn/public/images/biaozhi.gif"></a>京ICP证：040787号 京公海网安备案编号:1101084667<br>
</div>

    <!--底部 结束-->
</div>
<!--主体外框 end-->

	<!--快速留言通道 begin-->
		<div id="onlineMsg" class="onlineMsg_box">

	<div id="toggleBar">
			    		    		<div>加盟热线<span>4000<br><i>|</i><br>500<br><i>|</i><br>555<font>转</font>86199     </span></div>
	    		        </div>
   
    <div class="onlineMsg">
    	<div class="onlineMsg_tel">
    		    				        		<p>免费企业咨询热线</p>
		        	<p><strong>4000-500-555</strong></p>
		        	<p>转<strong>86199     </strong></p>
	        	        	        </div>
        <div id="onlineMsg_form" class="onlineMsg_form"><form name="form" method="post" action="http://liuyan.jmw.com.cn/message/newServiceLeaveMessage.php" id="servicemessage"><p><strong>企业收到您的留言后将第一时间与您联系！</strong></p><p><span class="inpBox"><i class="userIco"></i><input type="text" value="王灿" id="messagename" maxlength="6" onblur="blurname($(this))" onfocus="focusname($(this))" name="messagename"></span></p><p><span class="inpBox"><i class="telIco"></i><input type="text" value="13811974106" id="messagemobile" maxlength="11" onblur="blurmobile($(this))" onfocus="focusmobile($(this))" name="messagemobile"></span></p><p class="labelBox"><label for="nan"><input type="radio" name="messagesex" value="0" checked="checked" id="nan">男</label><label for="nv"><input type="radio" name="messagesex" value="1" id="nv">女</label></p><div class="quickMsg_pop"><a onmouseout="jQuery('#secly_1111').hide();" onmouseover="jQuery('#secly_1111').show();" href="javascript:;" id="viewTxt" class="viewTxt">快捷留言</a><div onmouseover="jQuery('#secly_1111').show();" onmouseout="jQuery('#secly_1111').hide();" style="display:none;" id="secly_1111" class="secMsg"><iframe frameborder="0" class="msgIframe"></iframe><p><strong>您可以根据意向选择下列[快捷留言] ↓ </strong><a onclick="jQuery('.secMsg').hide();" href="javascript:;"><img src="http://image1.jmw.com.cn/search/images/sec_015.gif"></a></p><ul><input type="hidden" id="js_item_129498" name="target_id" value="129498"><input type="hidden" name="brandname" id="messagebrandname" value="学乐儿童英语"><li><a onclick="insertintotext(1111,'学乐儿童英语项目很好，请尽快联系我详谈。');return false;" href="javascript:;">学乐儿童英语项目很好，请尽快联系我详谈。</a></li><li><a onclick="insertintotext(1111,'请问我所在的地区有学乐儿童英语加盟商了吗？');return false;" href="javascript:;">请问我所在的地区有学乐儿童英语加盟商了吗？</a></li><li><a onclick="insertintotext(1111,'我已留下了邮箱，请将学乐儿童英语加盟详细资料发邮件给我。');return false;" href="javascript:;">我已留下了邮箱，请将学乐儿童英语加盟详细资料发邮件给我。</a></li><li><a onclick="insertintotext(1111,'我想详细了解学乐儿童英语的加盟流程，请与我联系！');return false;" href="javascript:;">我想详细了解学乐儿童英语的加盟流程，请与我联系！</a></li><li><a onclick="insertintotext(1111,'做为学乐儿童英语的代理加盟商能得到哪些支持？');return false;" href="javascript:;">做为学乐儿童英语的代理加盟商能得到哪些支持？</a></li><li><a onclick="insertintotext(1111,'请问投资学乐儿童英语所需要的费用有哪些？');return false;" href="javascript:;">请问投资学乐儿童英语所需要的费用有哪些？</a></li><li class="noLine"><a onclick="insertintotext(1111,'我想加盟学乐儿童英语，请电话联系我。');return false;" href="javascript:;">我想加盟学乐儿童英语，请电话联系我。</a></li></ul></div></div><p><span class="inpBox text"><textarea id="js_textarea_1111" onblur="blurtextarea()" onfocus="focustextarea()" rows="30" cols="20" name="messagecontent">内容</textarea></span></p><p><input type="button" class="onlineMsg_btn" onclick="checknewmessage();" value="" id="" name="button"></p></form></div>
        <script type="text/javascript" src="http://search.jmw.com.cn/js/checknewmessage.js"></script>
        </div>
    </div>    <!--快速留言通道 end-->

	<!--快捷留言表单 start-->
		<div name="show_hide" style="display:none;" id="show_hide">
    <iframe frameborder="0" class="secIframe"></iframe>
    <div id="sec_from">
        <div class="secfrom_1"><a onclick="closeBg();" href="javascript:;"><img width="14" height="14" src="http://image1.jmw.com.cn/search/images/sec_close.jpg"></a></div>
        <div class="secfrom_2">
            <form action="http://liuyan.jmw.com.cn/message/messagecurd.php" name="UbbFm" id="postFrom" method="post">
            <div class="box_1">留言内容:<span>[<a href="javascript:;" onmouseover="javascript:jQuery('#secly_1').show();" onmouseout="javascript:jQuery('#secly_1').hide();" onclick="return false">快捷留言</a>]</span></div>
            <div class="box_1"><textarea id="js_textarea" name="content" onkeyup="keyUp();"></textarea></div>
            <div class="box_2">
                <p>您的姓名：<input type="text" class="name" value="" id="Uname" name="sname" maxlength="6"><span>*</span>性别：<label>男</label><input type="radio" class="a3" checked="" value="0" id="sexm" name="sex"><label>女</label><input type="radio" class="a3" value="1" id="sexfm" name="sex"></p>
                <p>联系电话：<input type="text" class="tel" maxlength="11" value="" id="Utel" name="mobile"><span>*</span></p>
                <input type="hidden" name="sid" value="0" id="Usid">
                <input type="hidden" name="brandname" value="0" id="brandname">
                <p class="btn"><input width="88" type="image" height="26" src="http://image1.jmw.com.cn/search/images/sec_input.jpg" onclick="onClickMessInfo();return false;"></p>
            </div>
            <!--留言 start-->
            <div onmouseover="jQuery('#secly_1').show();" onmouseout="jQuery('#secly_1').hide();" style="display:none;" id="secly_1" class="secMsg">
                <p><strong>您可以根据意向选择下列[快捷留言] ↓</strong></p>
                <ul>
                   <li><a href="javascript:;" onclick="onClickBBSFrom('此项目很好，请尽快联系我详谈。')">此项目很好，请尽快联系我详谈。</a></li>
                   <li><a href="javascript:;" onclick="onClickBBSFrom('请问我所在的地区有此项目加盟商了吗？')">请问我所在的地区有此项目加盟商了吗？</a></li>
                   <li><a href="javascript:;" onclick="onClickBBSFrom('我已留下了邮箱，请将此项目详细资料发邮件给我。')">我已留下了邮箱，请将此项目详细资料发邮件给我。</a></li>
                   <li><a href="javascript:;" onclick="onClickBBSFrom('我想详细了解此项目的加盟流程，请与我联系。')">我想详细了解此项目的加盟流程，请与我联系。</a></li>
                   <li><a href="javascript:;" onclick="onClickBBSFrom('做为此项目的代理加盟商能得到哪些支持？')">做为此项目的代理加盟商能得到哪些支持？</a></li>
                   <li><a href="javascript:;" onclick="onClickBBSFrom('请问投资此项目所需要的费用有哪些？')">请问投资此项目所需要的费用有哪些？</a></li>
                   <li class="noLine"><a href="javascript:;" onclick="onClickBBSFrom('我想加盟此项目，请电话联系我。')">我想加盟此项目，请电话联系我。</a></li>                    
               </ul>
            </div>
            <!--留言 end-->
            </form>
        </div>
    </div>
</div>	<!--快捷留言表单 end-->
<script type="text/javascript" src="http://search.jmw.com.cn/js/smallmessagefouroobox.js"></script>
<script>
        document.oncontextmenu = new Function("return false");
        document.onselectstart = new Function("return false");
</script>
<script>
jQuery(function(){
	var maodian = document.location.hash;
	if(maodian == '#concern')
	{
		jQuery('a[title="关注项目"]').click();
	}
	else if(maodian == '#addmessage')
	{
		jQuery('a[title="立即向企业发送加盟意向"]').click();
	}
});
   function copyToClipBoard1(txt) { 
     if(window.clipboardData) { 
             window.clipboardData.clearData(); 
             window.clipboardData.setData("Text", txt); 
     } else if(navigator.userAgent.indexOf("Opera") != -1) { 
          window.location = txt; 
     } else if (window.netscape) { 
          try { 
               netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect"); 
          } catch (e) { 
               alert("被浏览器拒绝！\n请在浏览器地址栏输入'about:config'并回车\n然后将 'signed.applets.codebase_principal_support'设置为'true'"); 
          } 
          var clip = Components.classes['@mozilla.org/widget/clipboard;1'].createInstance(Components.interfaces.nsIClipboard); 
          if (!clip) 
               return; 
          var trans = Components.classes['@mozilla.org/widget/transferable;1'].createInstance(Components.interfaces.nsITransferable); 
          if (!trans) 
               return; 
          trans.addDataFlavor('text/unicode'); 
          var str = new Object(); 
          var len = new Object(); 
          var str = Components.classes["@mozilla.org/supports-string;1"].createInstance(Components.interfaces.nsISupportsString); 
          var copytext = txt; 
          str.data = copytext; 
          trans.setTransferData("text/unicode",str,copytext.length*2); 
          var clipid = Components.interfaces.nsIClipboard; 
          if (!clip) 
               return false; 
          clip.setData(trans,null,clipid.kGlobalClipboard); 
     } 
  alert("复制成功！") ;
 }
$(function(){
   	//关闭弹层窗口
   	$(".popClose").click(function(){
   		  $(".popWrap,.bgIframe,.bgDiv").hide();
   	  });
   });
</script>
<!--联系电话 弹出层 开始-->
<div id="onlineMsg2" class="popWrap phoneBox">
    <iframe scrolling="0" frameborder="0" class="popIframe"></iframe>
    <div class="popWrap_sub"></div>
    <form id="frm" onsubmit="return sendform();" method="post" action="http://person.jmw.com.cn/sendMessage.php">
    <div class="popBox popBox2">
    	<h3>发送到手机</h3>
        <div class="phoneMessage">
        	<table cellspacing="0" cellpadding="0" class="phoneForm">
            	<tbody>
                	<tr>
                    	<td width="26%" class="phoneTit"><strong>短信内容：</strong></td>
                    	<td width="74%"></td>
                    </tr>
                	<tr id="infos" class="trLine">
                    	
                    </tr>
                    <input type="hidden" value="" name="content" id="contents">
                    <input type="hidden" value="" name="mobile" id="mobile">
                    <tr>
                    	<td class="phoneTit">手机号码：</td>
                    	<td><input type="text" disabled="disabled" value="" name="tel" id="tel" class="input1"></td>
                    </tr>
                	<tr>
                    	<td class="phoneTit">验&nbsp;&nbsp;证&nbsp;&nbsp;码：</td>
                    	<td><input type="text" onfocus="changeStyle()" id="checkcode" value="" name="telcode" class="input2">
                    	<span class="phoneCode"><img height="30px" alt="点击刷新验证码" src="http://person.jmw.com.cn/telcode.php?0.638831459790335" onclick="t1(); return false;" id="telcode"></span></td>
                    </tr>
                	<tr>
                    	<td>&nbsp;</td>
                    	<td><input type="submit" value="" name="" class="sendMsg" id="sub"></td>
                    </tr>
                </tbody>
            </table>
        </div>
            
    </div>
    </form>
    <a title="关闭" class="popClose" onclick="jQuery('#onlineMsg2,#bgIframe,#bgDiv').hide();" href="javascript:;"></a>
</div>
<script type="text/javascript">
t1();
//验证码刷新
function t1()
{
    $("#telcode").attr("src","http://person.jmw.com.cn/telcode.php?"+Math.random());
    return false;
}
</script><!--联系电话 弹出层 结束-->

<!--项目关注弹出层 开始-->
<div id="itemAtt" class="popWrap">
  <iframe scrolling="0" frameborder="0" id="popIframe" class="popIframe"></iframe>
  <div id="popWrap_sub" class="popWrap_sub"></div>
  <div id="popBox" class="popBox">
    
    <!--未登录提示 begin-->
      <iframe width="634" scrolling="no" height="393" frameborder="0" src="http://person.jmw.com.cn/iframeLogin.php?url=http%3A%2F%2Fxuele.jmw.com.cn%2F" style="display:none;" name="hidLoginDiv" id="hidLoginDiv"></iframe>
    <!--未登录提示 end-->
    <!--关注状态 begin-->
      <div id="hidAttentionDiv" class="attState">
        
          <!--提示 B-->
          <div id="attTips" class="attTips ok">
              <p id="tipsOne"><strong>恭喜您！</strong></p>
              <p id="tipsTwo">成功关注了<span>[<a target="_blank" href="#" id="brandNameOne"></a>]</span></p>
          </div>
          <!--提示 E-->
          
          <!--留言 B-->
          <form action="http://liuyan.jmw.com.cn/message/messagecurd.php" name="attentionFrom" id="attentionFrom" method="post">
            <div style="display:none;" id="interested_item" class="interested_item">
            	<p><strong>我们还为您准备了一些可能感兴趣的加盟项目：</strong></p>
                <ul></ul>
            </div>
            <div style="display:none;" id="submitBtn_box" class="submitBtn_box">
              <input type="hidden" value="" name="projectId" id="projectId">
              <input type="hidden" value="" name="user_realname" id="user_realname">
              <input type="hidden" value="" name="gender" id="gender">
              <input type="hidden" value="" name="telphone" id="telphone">
              <input type="button" class="contactBtn" onclick="sendMessage();_gaq.push(['_trackEvent', '关注推荐', '点击', '标项页关注层点击&lt;好的，联系我吧&gt;']);return false;">
            </div>
            <div style="display:none;" id="quickBox" class="grayBox">
              <table cellspacing="0" cellpadding="0" border="0" class="attMsg_table">
                <caption>
                  <div class="secMsg_position">
                        <em>现在可以给<span>[<a target="_blank" href="#" id="brandNameTwo"></a>]</span>发送意向:</em>
                        <a onmouseout="jQuery('#secly_0000').hide();" onmouseover="jQuery('#secly_0000').show();" href="javascript:;" class="quickMsg_link">快捷留言</a>
                        
                        <!--快捷留言 start-->
                        <div onmouseover="jQuery('#secly_0000').show();" onmouseout="jQuery('#secly_0000').hide();" style="display:none;" id="secly_0000" class="secMsg">
                            <p><strong>您可以根据意向选择下列[快捷留言]</strong><a onclick="jQuery('#secly_0000').hide();" href="javascript:;"><img src="http://image1.jmw.com.cn/search/images/sec_015.gif"></a></p>
                            <ul id="messageUl">
                             <li><a href="javascript:;">此项目很好，请尽快联系我详谈。</a></li>
                             <li><a href="javascript:;">请问我所在的地区有此项目加盟商了吗？</a></li>
                             <li><a href="javascript:;">我已留下了邮箱，请将此项目详细资料发邮件给我。</a></li>
                             <li><a href="javascript:;">我想详细了解此项目的加盟流程，请与我联系。</a></li>
                             <li><a href="javascript:;">做为此项目的代理加盟商能得到哪些支持？</a></li>
                             <li><a href="javascript:;">请问投资此项目所需要的费用有哪些？</a></li>
                             <li class="noLine"><a href="javascript:;">我想加盟此项目，请电话联系我。</a></li> 
                           </ul>
                        </div>
                        <!--快捷留言 end-->
                    
                    </div>
                </caption>
                <tbody>
                  <tr>
                      <td colspan="2"><textarea name="content" id="messContent"></textarea></td>
                    </tr>
                    <tr>
                      <th width="15%">姓 名：</th>
                        <td width="85%">
                            <font>*</font>
                            <input type="text" maxlength="6" class="Inp1" name="sname" id="realname" value="">
                            <em>性 别：</em>
                             <label><input type="radio" name="sex" value="0" checked="checked" id="messsexm">男</label>
                             <label><input type="radio" name="sex" value="1" id="messsexfm">女</label>
                        </td>
                    </tr>
                    <tr>
                      <th>手 机：</th>
                        <td>
                            <font>*</font>
                            <input type="text" maxlength="11" class="Inp2" name="mobile" id="messMobile" value="">
                        </td>
                    </tr>
                </tbody>
              </table>
              <p id="att_submitBtn" class="att_submitBtn"><input type="button" onclick="AttentionMessage();" value=""></p>
            </div>
            <input type="hidden" value="" name="sid" id="hidSidVal">
            <input type="hidden" value="" name="attentionbrandname" id="attentionbrandname">
            <input type="hidden" value="" id="url" name="url">
            <input type="hidden" value="" id="ispay" name="ispay">
        </form>
          <!--留言 E-->
                      
      </div>
      <!--关注状态 end-->
      
      <!--确然信息 B--> 
        <div style="display:none;" id="c_infoBox1" class="c_infoBox">
            <h3>确认您的信息</h3>
            <table cellspacing="0" cellpadding="0" class="infoTable c_sub">
            <tbody>
                <tr>
                    <th width="27%"><i></i>真实姓名：</th>
                    <td width="73%" id="user_name"></td>
                </tr>
                <tr>
                    <th><i></i>手机号码：</th>
                    <td id="user_mobile"></td>
                </tr>
                <tr>
                    <th><i></i>电子邮箱：</th>
                    <td id="user_email"></td>
                </tr>
                <tr>
                    <th><i></i>性<font>别</font>：</th>
                    <td id="user_sex">男</td>
                </tr>
                <tr>
                    <th class="noLine">&nbsp;</th>
                    <td class="c_submitBtn noLine">
                          <input type="hidden" value="" name="basicid" id="basicid">
                          <input type="hidden" value="" name="basicname" id="basicname">
                          <input type="hidden" value="" name="basicsex" id="basicsex">
                          <input type="hidden" value="" name="basicmobile" id="basicmobile">
                          <input type="hidden" value="" name="basicemail" id="basicemail">
                          <input type="hidden" value="" name="messagetype" id="messagetype">
                          <input type="button" onclick="addMessagesToLiuyan();return false;" value="" id="submitEdit" name="">
                        <a onclick="jQuery('#c_infoBox1').hide();jQuery('#c_infoBox2').show();" href="javascript:;">修改我的信息</a>
                    </td>
                </tr>
            </tbody>
            </table>
        </div>
        <!--确然信息 E--> 
        
        <!--修改信息 B--> 
        <div style="display:none;" id="c_infoBox2" class="c_infoBox">
            <h3>修改我的信息</h3>
            <table cellspacing="0" cellpadding="0" class="infoTable">
            <tbody>
                  <tr>
                      <th width="27%"><i>*</i>真实姓名：</th>
                      <td width="73%">
                          <input type="text" class="c_inp1" value="" id="UserName" name="basicname" maxlength="6">                    
                          <!--验证提示-->
                          <span id="nameError" class="tipsIcon"></span>
                      </td>
                  </tr>
                  <tr>
                      <th><i>*</i>手机号码：</th>
                      <td>
                          <input type="text" class="c_inp1" value="" maxlength="11" id="UserMobile" name="basicmobile">
                          <!--验证提示-->
                          <span id="mobileError" class="tipsIcon"></span>
                      </td>
                  </tr>
                  <tr>
                      <th><i></i>电子邮箱：</th>
                      <td>
                          <input type="text" class="c_inp1" value="" id="UserEmail" name="basicemail" maxlength="50">  
                          <!--验证提示-->
                          <span id="emailError" class="tipsIcon"></span>
                      </td>
                  </tr>
                  <tr>
                      <th><i></i>性<font>别</font>：</th>
                      <td>
                          <label for="nan"><input type="radio" name="basicsex" value="0" id="UserNan">男</label>
                          <label for="nv"><input type="radio" name="basicsex" value="1" id="UserNv">女</label>
                      </td>
                  </tr>
                  <tr>
                      <th>&nbsp;</th>
                      <td class="c_submitBtn">
                          <input type="hidden" id="sid" value="" name="basicid">
                          <input type="hidden" id="UserType" value="" name="messagetype">
                          <input type="button" onclick="quickButtonMessage();return false;" value="" id="" name="">
                      </td>
                  </tr>
            </tbody>
            </table>
        </div>
        <!--修改信息 E-->
        
         <!--索要资料、发送意向、回电话 成功 B-->
        <div style="display:none;" id="c_infoBox3" class="c_infoBox">
            <h3 id="sendType">索要资料</h3>
            <div id="sendClass" class="success_alert syzl"><!--索要资料syzl | 发送意向fsyx — 回电话hdh -->	
            	<p id="msgSuccess" class="successTit"><strong>成 功！</strong></p>
                <p><em id="sendStatus">您已向企业索要加盟资料</em></p>
                <p id="sendContent">企业会将更多详细资料发送至您的电子邮箱中，请注意查收！</p>
            </div>
            <div id="editButton" class="submitBtn_box c_sub">
                <input type="button" onclick="hidDiv();" id="" name="" value="" class="c_confirmBtn">
                <a target="_blank" href="http://person.jmw.com.cn/updateContact.php">修改我的联系方式</a>
            </div>
        </div>
        <!--索要资料、发送意向、回电话 成功 E-->	 
 		
 		  		<!--登录投票内容 B-->
        <div id="voto_grayBox" style="display:none;" class="voto_grayBox">            
            <p id="send">您还可以立即给<span>[<a target="_blank" href="#">体会内衣</a>]</span>发送相关意向：</p> 
            <ul id="messageInfo" class="votoMsg">
              <li id="first"><label for="m1"><input type="radio" value="1" id="m1" name="msg_type">做为体会内衣的代理加盟商能得到哪些支持？</label></li>
              <li id="second"><label for="m2"><input type="radio" value="2" id="m2" name="msg_type">我想详细了解体会内衣的加盟流程，请与我联系！</label></li>
              <li id="third"><label for="m3"><input type="radio" value="3" id="m3" name="msg_type">请问我所在的地区有体会内衣加盟商了吗？</label></li>
              <li id="four"><label for="m4"><input type="radio" value="4" id="m4" name="msg_type">请问投资体会内衣所需要的费用有哪些？</label></li>
            </ul> 
            <div class="voto_grayBox_btn"><input type="button" onclick="addVoteMessage('129498');return false;" class="voto_confirmBtn"></div>           
        </div>
        <!--登录投票内容 E--> 
                    
        <!--未登录投票内容 B-->
        <div id="nologin_voto" style="display:none;" class="voto_grayBox">            
            <p>注册中国加盟网会员，您可以享受这些功能：</p> 
            <ul class="votoFun">
              <li class="f_ico1">关注自己喜欢的项目</li>
              <li class="f_ico2">向企业索要加盟资料</li>
              <li class="f_ico3">随时了解企业的动态</li>
              <li class="f_ico4">将联系方式存到手机</li>
            </ul> 
            <div class="voto_grayBox_btn">
                <input type="button" onclick="javascript:window.open('http://person.jmw.com.cn/login.php');" id="" name="" class="voto_regBtn">
                <strong><a target="_blank" href="http://person.jmw.com.cn/registered.php">新用户注册</a></strong>
            </div>           
        </div>
        <!--未登录投票内容 E-->   
          </div>
  <a title="关闭" class="popClose" id="popClose" onclick="hidDiv();" href="javascript:;"></a>
</div><!--项目关注弹出层 结束-->
<!--发送到手机成功 开始-->
<div id="send_success" class="popWrap send_success">
    <iframe scrolling="0" frameborder="0" class="popIframe"></iframe>
    <div class="popWrap_sub"></div>
    <div class="popBox">
    
    	<div class="successAlert">
        	<div class="alertText">
            	<p><strong>成功啦！</strong></p>
                <p>该项目的联系方式已发送至您的手机！</p>
            </div>
        	<div class="alertConfirm_btn"><input type="button" onclick="sendSuccess()" value="" id="" name=""></div>
        </div>   
      
    </div>
</div><!--发送到手机成功 结束-->
<!--发送到手机出错 开始-->
<div id="send_failed" class="popWrap send_success">
    <iframe scrolling="0" frameborder="0" class="popIframe"></iframe>
    <div class="popWrap_sub"></div>
    <div class="popBox">
    
    	<div class="successAlert">
        	<div class="alertText">
            	<p><strong>出错了！</strong></p>
                <p>您今天获取该项目的电话次数已经达到上限啦，请明天再试~</p>
            </div>
        	<div class="alertConfirm_btn"><input type="button" onclick="sendSuccess()" value="" id="" name=""></div>
        </div>   
      
    </div>
</div><!--发送到手机出错 结束-->
<!--背景遮罩层 开始-->
<iframe frameborder="0" class="bgIframe" id="bgIframe"></iframe>
<div class="bgDiv" id="bgDiv"></div> 
<!--背景遮罩层 结束-->


</body></html>