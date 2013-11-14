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
		<input type="hidden" value="1" name="prtype">&nbsp;&nbsp;
		用户名:&nbsp;<input type="text" style="width:80px" class="ipt_text_1" id="username" name="username">&nbsp;&nbsp;
		密码:&nbsp;<input type="password" style="width:80px" class="ipt_text_1" id="password" name="password">&nbsp;
		<input type="submit" class="ipt_btn_1" value="登录" id="submit" name="loginsubmit">
		<input type="hidden" value="login" name="action">&nbsp;
		<a target="_parent" class="red" href="http://bbs.ccppg.com.cn/member.php?mod=register.php">注册</a>&nbsp;
		<a target="_parent" href="http://bbs.ccppg.com.cn/member.php?mod=logging&amp;action=login&amp;viewlostpw">忘记密码</a>
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
