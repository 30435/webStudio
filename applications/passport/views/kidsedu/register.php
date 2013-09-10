<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $this->metaDatas['title']; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?php $this->metaDatas['keywords']; ?>" />
<meta name="description" content="<?php $this->metaDatas['description']; ?>" />

<link rel="stylesheet" type="text/css" href="<?php echo $this->staticUrl; ?>kidsedu/css/form.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->staticUrl; ?>kidsedu/css/register.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->staticUrl; ?>kidsedu/css/footer.css">
</head>
<body>
<!--头部 begin-->
<div class="headerBox">
	<div class="header">
        <h1>中国加盟网新会员免费注册</h1>
        <div class="topLinks">
            <ul>
                <li class="last"><a hidefocus="true" target="_blank" href="http://www.jmw.com.cn">中国加盟网首页</a></li>
               <!--  <li class="last"><a href="#" target="_blank" hideFocus="true">帮助中心</a></li> -->
            </ul>
            <p>如遇问题请拔打：<strong>4000-500-555</strong></p>
         </div>
    </div>
</div><!--头部 end-->

<!--主体外框 begin-->
<div class="container">

   	<!--左侧 B-->
    <div class="regBox">
    	<form onsubmit="return submitclick()" name="register" method="post" action="http://comp.jmw.com.cn/registerAction.php">
        <div id="infoBox" class="formContent">
            <h2>会员登录名和密码</h2>            
            <p>
                <em>用户登录名：</em>
                <input type="text" onfocus="uNamefocus();return false;" onblur="uNameblur();return false;" maxlength="20" value="" name="username" id="uName" class="inp1">
                <span class="tipsBox"></span>
            </p>
            <p>
                <em>密码：</em>
                <input type="password" onfocus="uPwdfocus();return false;" onblur="uPwdblur();return false;" maxlength="20" value="" name="company_pwd" id="uPwd" class="inp1">
                <span class="tipsBox"></span>
            </p>
            <p>
                <em>重复密码：</em>
                <input type="password" onfocus="checkPwdfocus();return false;" onblur="checkPwdblur();return false;" value="" maxlength="20" name="company_rpwd" id="checkPwd" class="inp1">
                <span class="tipsBox"></span>
            </p>
             
            <h2>企业资料</h2>
            <p>
                <em>公司名称（中文）：</em>
                <input type="text" onfocus="company_zh_focus();return false;" onblur="company_zh_blur();return false;" value="" maxlength="20" name="company_zh" id="company_zh" class="inp1">
                <span class="tipsBox"></span>
            </p>
            <p>
                <em>公司名称（英文）：</em>
                <input type="text" onfocus="company_en_focus();return false" onblur="company_en_blur();return false;" maxlength="40" value="" name="company_en" id="company_en" class="inp1">
                <span class="tipsBox"></span>
            </p>
            <p>
                <em>企业类型：</em>
                <select style="width:191px;" id="enterprise_type" name="enterprise_type">
                        <option value="0">请选择</option><option value="1">国有</option><option value="2">外资</option><option value="3">合资</option><option value="4">独资</option><option value="5">股份制</option><option value="6">民营</option><option value="7">私有</option>                        </select>
                <span class="tipsBox"></span>
            </p>
            <p>
                <em>所属行业：</em>
                <select onchange="getChildIndustry();" name="industry_id" id="parent">
					<option value="">请选择</option>
					<option value="1">服装</option><option value="2">美食</option><option value="3">美容</option><option value="4">干洗</option><option value="5">精品</option><option value="7">饰品</option><option value="11">教育</option><option value="13">幼儿</option><option value="14">医疗</option><option value="15">零售</option><option value="16">家居</option><option value="17">环保</option><option value="19">五金</option><option value="21">珠宝</option><option value="22">家纺</option><option value="23">汽车</option><option value="24">建材</option><option value="174">其他</option><option value="196">酒水</option>				</select>
				<select name="industry_child_id" id="child">
                    <option value="0">请选择</option>
                </select>
                <span class="tipsBox"></span>
            </p>
            <p>
                <em>注册资金：</em>
                <input type="text" onfocus="register_capital_focus();return false;" onblur="register_capital_blur();return false;" value="" maxlength="20" name="register_money" id="register_capital" class="inp4">
                <span class="tipsBox"></span>
            </p>
            <p>
                <em>注册日期：</em>
                <span id="calendarSpan" class="boxWrap">
                            <input type="text" value="" maxlength="10" name="reg_time" id="buildtime" class="inp4" readonly="readonly">
                            <span class="calendarSelect"></span>
                        </span>
                <span class="tipsBox"></span>
            </p>
            <p>
                <em>公司所在地：</em>
                
                <select style="width:80px;" onchange="change(1,0);" id="province" name="province"><option value="省/市">省/市</option><option value="北京">北京</option><option value="天津">天津</option><option value="河北">河北</option><option value="山西">山西</option><option value="内蒙古">内蒙古</option><option value="辽宁">辽宁</option><option value="吉林">吉林</option><option value="黑龙江">黑龙江</option><option value="上海">上海</option><option value="江苏">江苏</option><option value="浙江">浙江</option><option value="安徽">安徽</option><option value="福建">福建</option><option value="江西">江西</option><option value="山东">山东</option><option value="河南">河南</option><option value="湖北">湖北</option><option value="湖南">湖南</option><option value="广东">广东</option><option value="广西">广西</option><option value="海南">海南</option><option value="重庆">重庆</option><option value="四川">四川</option><option value="贵州">贵州</option><option value="云南">云南</option><option value="西藏">西藏</option><option value="陕西">陕西</option><option value="甘肃">甘肃</option><option value="青海">青海</option><option value="宁夏">宁夏</option><option value="新疆">新疆</option><option value="台湾">台湾</option><option value="香港">香港</option><option value="澳门">澳门</option></select>
                <select style="width:80px;" onchange="change(2,0);" id="city" name="city"><option value="地/州">地/州</option></select>
                <select style="width:93px;" id="area" name="area"><option value="区/县">区/县</option></select>
                <span class="tipsBox"></span>
            </p>
            <p>
                <em>详细地址：</em>
                <input type="text" onfocus="addressfocus();return false" onblur="addressblur();return false;" disabled="" maxlength="30" value="" name="address" id="address" class="inp1">
                <span class="tipsBox"></span>
            </p>
            <h2>联系方式</h2>
            <p>
                <em>联系人：</em>
                <input type="text" onfocus="contactsfocus();return false" onblur="contactsblur();return false;" maxlength="20" value="" name="combiner" id="contacts" class="inp1">
                <span class="tipsBox"></span>
            </p>
            <p>
                <em>联系电话：</em>
                <input type="text" onfocus="contacts_phone_focus();return false;" onblur="contacts_phone_blur();return false;" maxlength="30" value="" name="telephone" id="contacts_phone" class="inp1">
                <span class="tipsBox"></span>
            </p>
            <p>
                <em>联系手机：</em>
                <input type="text" onfocus="contacts_mobile_focus();return false;" onblur="contacts_mobile_blur();return false;" maxlength="11" value="" name="mobel_num" id="contacts_mobile" class="inp1">
                <span class="tipsBox"></span>
            </p>
            <p>
                <em>电子邮箱：</em>
                <input type="text" onfocus="emailfocus();return false;" onblur="emailblur();return false;" maxlength="50" value="" name="email" id="email" class="inp1">
                <span class="tipsBox"></span>
            </p>
            <h2>品牌/项目资料</h2>
            <p>
                <em>品牌名称（中文）：</em>
                <input type="text" onfocus="brand_zh_focus();return false;" onblur="brand_zh_blur();return false;" maxlength="10" value="" name="brand_zh" id="brand_zh" class="inp1">
                <span class="tipsBox"></span>
            </p>
            <p>
                <em>品牌名称（英文）：</em>
                <input type="text" onfocus="brand_en_focus();return false;" onblur="brand_en_blur();return false;" maxlength="20" value="" name="brand_en" id="brand_en" class="inp1">
                <span class="tipsBox"></span>
            </p>
            <p>
                <em>品牌发源地：</em>
                <input type="text" onfocus="brand_cradle_focus();return false;" onblur="brand_cradle_blur();return false;" maxlength="20" value="" name="birthplace" id="brand_cradle" class="inp1">
                <span class="tipsBox"></span>
            </p>
            <p>
                <em>品牌/项目投资额度：</em>
                <input type="text" onfocus="capital_limit1_focus();return false;" onblur="capital_limit_blur();return false;" maxlength="8" value="" name="min_money" id="capital_limit_1" class="inp2">
                <font>～</font> 
                <input type="text" onfocus="capital_limit2_focus();return false;" onblur="capital_limit_blur();return false;" maxlength="8" value="" name="max_money" id="capital_limit_2" class="inp2">
                <font>万元</font> 
                <span class="tipsBox"></span>
            </p>
            <p>
                <em>招商模式：</em>
                <label><input type="checkbox" value="1" name="orders_model[]" id="business_mode_league">加盟连锁</label>
                <label id="business_mode_label"><input type="checkbox" value="2" name="orders_model[]" id="business_mode_agent">分销代理</label>
                <span id="business_mode_s" class="tipsBox"></span>
            </p>
            <p>
                <em>直营店总数：</em>
                <input type="text" onfocus="zhixiaodianfocus();return false;" onblur="zhixiaodianblur();return false;" value="" maxlength="4" name="total_store" id="zhixiaodian" class="inp1">
                <span class="tipsBox"></span>
            </p>
            <p>
                <em>加盟/代理店总数：</em>
                <input type="text" onfocus="jiamengdianfocus();return false;" onblur="jiamengdianblur();return false;" value="" maxlength="6" name="join_store" id="jiamengdian" class="inp1">
                <span class="tipsBox"></span>
            </p>
            <p>
                <em>经营产品/提供服务：</em>
                <input type="text" onfocus="productsfocus();return false;" onblur="productsblur();return false;" maxlength="100" value="" name="product" id="products" class="inp1">
                <span class="tipsBox"></span>
            </p>
            <p>
                <em>验证码：</em>
                <input type="text" onfocus="checkcodefocus();return false;" onblur="checkcodeblur();return false;" value="" name="code" id="checkcode" class="inp2">
                <img width="75" height="28" alt="" class="formCode" src="./identifying_code.php" id="code1">
                <a onclick="changecode();return false;" class="refreshCode" href="">看不清？</a>
                <span class="tipsBox"></span>
            </p>
            <p class="buttonBox">
                <em></em>
                <input type="submit" class="agreeSubmit_btn" value="" id="checkRegister">
                <a class="treatyLink" target="_blank" href="http://user.jmw.com.cn/terms.shtml">点击阅读中国加盟网服务条款</a>
            </p>
        <div id="email" class="mailListBox"></div></div>
        </form>
    </div>
   	<!--左侧 E-->
    
   	<!--右侧 B-->
    <div class="regSide">
        <p>请认真、仔细的填写以下信息，严肃的商业信息有助于获得客户的信任，结交潜在客户，获得更多商业机会！另外，信息的完整度将会影响到您的项目在TOP排行榜中的排名。</p>
    </div>
    <!--右侧 E-->
    
    <div class="clr"></div>
</div>
<!--主体外框 end-->
<div class="clr"></div>
<div class="footer_wrap">
    <!--底部 开始-->
   	<div class="footer">
    <div class="hot"><img src="http://image1.jmw.com.cn/public/images/hot.gif"></div> 
    <p><a target="_blank" href="http://about.jmw.com.cn">关于我们</a>|<a target="_blank" href="http://about.jmw.com.cn/PhotoList_1.shtml">公司相册</a>|<a target="_blank" href="http://about.jmw.com.cn/News_268.shtml">公司视频</a>|<a target="_blank" href="http://about.jmw.com.cn/Internet.shtml">旗下业务</a>|<a target="_blank" href="http://about.jmw.com.cn/CorporateCulture.shtml">企业文化</a>|<a target="_blank" href="http://about.jmw.com.cn/guest.shtml">客户合作</a>|<a target="_blank" href="http://about.jmw.com.cn/Job_one.shtml">诚聘精英</a>|<a target="_blank" href="http://about.jmw.com.cn/MediaList_1.shtml">媒体报道</a>|<a target="_blank" href="http://about.jmw.com.cn/sitemap.shtml">网站地图</a>|<a target="_blank" href="http://about.jmw.com.cn/Statistics.shtml">在线统计</a>|<a target="_blank" href="http://about.jmw.com.cn/ContactUs.shtml">联系我们</a></p>
    刊登热线：4000-500-555 咨询电话：010-62168889 中国加盟网友情提示：多打电话、多咨询、实地考察，可降低投资风险<br>
    Copyright&copy;2004-2013 JMW.COM.CN. All Rights Reserved 北京天创时代信息技术有限公司 版权所有<br>
    <a target="_blank" href="http://www.hd315.gov.cn/beian/view.asp?bianhao=010202006020700545"><img src="http://image1.jmw.com.cn/public/images/biaozhi.gif"></a>京ICP证：040787号 京公海网安备案编号:1101084667<br>
</div>    <!--底部 结束-->
<script type="text/javascript">
    var s0=["province","city","area"];
    var opt0=["省/市","地/州","区/县"];
    change(0,0);

    function SelectValue(c,v)
    {
        var selectList=document.getElementById(c);
        for (i=0;i&lt;selectList.length;i++)
        {
            if (selectList.options[i].text == v)
            {
                selectList.options[i].selected = true;
            }
        }
    }
</script>
</div>


</body></html>