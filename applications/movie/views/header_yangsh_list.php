<?php echo doctype(); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $this->headerTitle; ?></title>
<?php echo meta($this->metaInfos); ?>
<meta http-equiv="cache-control" content="no-cache, must-revalidate">
<?php 
$styleFiles = array(
	'yangsh/css/dz-cj_2.css',
	'yangsh/new/dazong-01.css'
);
$linkString = '';
foreach ($styleFiles as $styleFile) {
	$linkString .= link_tag($this->staticUrl . $styleFile);
}
echo $linkString; 
?>
<style>
	.list2 .jb1-2-1 h1 p,.list1 h1 span{ margin:0px;}
</style>
</head>
<body>
<div class="wapper">
<div class="wrap">
	<div class="top">
		<div class="top_1">
			<div class="hello">
				<span class="s_a"><i class="ico_01 ico_01_01"></i><a href="<?php echo $this->baseUrl; ?>">大众养生网首页</a></span>
				<span class="s_a"><i class="ico_01 ico_01_02"></i>欢迎访问大众养生网</span>
			</div>
			<div class="deng" id="login_status">
				<div class="top2-3">
					<a class="top2-2" target="_blank" href="http://www.cndzys.com/Member/Reg/index">注册</a> |
					<a class="top2-1" target="_self" onclick="mask.show();" style="cursor:pointer;cursor:hand;" id="jslogin">登录</a>
				</div>
			</div>
			<div class="shou">
				<a class="s_a" onclick="SetHome(this,window.location);" href="javascript:void(0);"><i class="ico_01 ico_01_03"></i>设为主页</a> |
				<a href="javascript:void(0);" onclick="AddFavorite(window.location,document.title)">加入收藏</a>
			</div>
		</div>
	</div>
	<div class="line_10">
	</div>
	<div class="nav">
		<div class="nav1">
			<dl class="nav1_dl">
				<dt>
					<a href="http://www.cndzys.com/zyys"http://localhost/github/shapp/php/yangsh/target/ target="_blank">
						中医
					</a>
					<a href="http://www.cndzys.com/arqys"http://localhost/github/shapp/php/yangsh/target/ target="_blank">
						人群
					</a>
				</dt>
				<dd>
					<a href="http://www.cndzys.com/tslf"http://localhost/github/shapp/php/yangsh/target/ target="_blank">
						特色疗法
					</a>
					<i class="xui">
					</i>
					<a href="http://www.cndzys.com/zywh"http://localhost/github/shapp/php/yangsh/target/ target="_blank">
						中医文化
					</a>
				</dd>
				<dd>
					<a href="http://www.cndzys.com/nxysm"http://localhost/github/shapp/php/yangsh/target/ target="_blank">
						男性养生
					</a>
					<i class="xui">
					</i>
					<a href="http://www.cndzys.com/nxysw"http://localhost/github/shapp/php/yangsh/target/ target="_blank">
						女性养生
					</a>
				</dd>
			</dl>
			<div class="xui_1">
			</div>
			<dl class="nav1_dl">
				<dt>
					<a href="http://www.cndzys.com/ysys"http://localhost/github/shapp/php/yangsh/target/ target="_blank">
						饮食
					</a>
					<a href="http://www.cndzys.com/shbj"http://localhost/github/shapp/php/yangsh/target/ target="_blank">
						生活
					</a>
				</dt>
				<dd>
					<a href="http://www.cndzys.com/yscs"http://localhost/github/shapp/php/yangsh/target/ target="_blank">
						饮食常识
					</a>
					<i class="xui">
					</i>
					<a href="http://www.cndzys.com/yssc"http://localhost/github/shapp/php/yangsh/target/ target="_blank">
						饮食食材
					</a>
				</dd>
				<dd>
					<a href="http://www.cndzys.com/sjys"http://localhost/github/shapp/php/yangsh/target/ target="_blank">
						四季养生
					</a>
					<i class="xui">
					</i>
					<a href="http://www.cndzys.com/shcs"http://localhost/github/shapp/php/yangsh/target/ target="_blank">
						生活常识
					</a>
				</dd>
			</dl>
			<div class="xui_1">
			</div>
			<dl class="nav1_dl">
				<dt>
					<a href="http://www.cndzys.com/aydys"http://localhost/github/shapp/php/yangsh/target/ target="_blank">
						运动
					</a>
					<a href="http://www.cndzys.com/yssp"http://localhost/github/shapp/php/yangsh/target/ target="_blank">
						食谱
					</a>
				</dt>
				<dd>
					<a href="http://www.cndzys.com/ydff"http://localhost/github/shapp/php/yangsh/target/ target="_blank">
						运动方法
					</a>
					<i class="xui">
					</i>
					<a href="http://www.cndzys.com/ydqc"http://localhost/github/shapp/php/yangsh/target/ target="_blank">
						运动器材
					</a>
				</dd>
				<dd>
					<a href="http://www.cndzys.com/index.php/yssp/tlists/?k=&amp;id=113&amp;c=&amp;r=3"
				   http://localhost/github/shapp/php/yangsh/target/ target="_blank">
						老人食谱
					</a>
					<i class="xui">
					</i>
					<a href="http://www.cndzys.com/index.php/yssp/tlists/?k=&amp;id=113&amp;c=&amp;r=1"
				   http://localhost/github/shapp/php/yangsh/target/ target="_blank">
						孕妇食谱
					</a>
				</dd>
			</dl>
			<div class="xui_1">
			</div>
			<dl class="nav1_dl nav2_dl">
				<dt style="width:60px; text-align:center;">
					<a href="http://www.cndzys.com/jbfz"http://localhost/github/shapp/php/yangsh/target/ target="_blank">
						疾病防治
					</a>
					<ahttp://localhost/github/shapp/php/yangsh/target/ target="_blank" href="http://www.cndzys.com/jbk">
						疾病库
					</a>
				</dt>
				<dd>
					<a href="http://www.cndzys.com/nake"http://localhost/github/shapp/php/yangsh/target/ target="_blank">
						内科
					</a>
					<i class="xui">
					</i>
					<a href="http://www.cndzys.com/jbyf/fk"http://localhost/github/shapp/php/yangsh/target/ target="_blank">
						妇科
					</a>
				</dd>
				<dd>
					<a href="http://www.cndzys.com/jbk/department/index.html"http://localhost/github/shapp/php/yangsh/target/ target="_blank">
						科室
					</a>
					<i class="xui">
					</i>
					<a href="http://www.cndzys.com/jbk/parts/index.html"http://localhost/github/shapp/php/yangsh/target/ target="_blank">
						部位
					</a>
				</dd>
			</dl>
			<div class="xui_1">
			</div>
			<dl class="nav1_dl">
				<dt>
					<a href="http://ask.cndzys.com/"http://localhost/github/shapp/php/yangsh/target/ target="_blank">
						问答
					</a>
					<a href="http://tupian.cndzys.com/"http://localhost/github/shapp/php/yangsh/target/ target="_blank">
						图库
					</a>
				</dt>
				<dd>
					<a href="http://ask.cndzys.com/Problems/add"http://localhost/github/shapp/php/yangsh/target/ target="_blank">
						免费提问
					</a>
					<i class="xui">
					</i>
					<a href="http://ask.cndzys.com/"http://localhost/github/shapp/php/yangsh/target/ target="_blank">
						找答案
					</a>
				</dd>
				<dd>
					<a href="http://tupian.cndzys.com/list_94_1.html"http://localhost/github/shapp/php/yangsh/target/ target="_blank">
						大千世界
					</a>
					<i class="xui">
					</i>
					<a href="http://tupian.cndzys.com/list_98_1.html"http://localhost/github/shapp/php/yangsh/target/ target="_blank">
						养生保健
					</a>
				</dd>
			</dl>
		</div>
	</div>
	<div class="line_10"></div>
	<div class="dda_01"><a href=""><img src="<?php echo $this->staticUrl ; ?>yangsh/new/pic/dda_01.jpg"></a></div>
	<div class="line_10">
	</div>
	<div class="t1">
		<div class="logo">
			<a href="<?php echo $this->baseUrl; ?>"><img src="<?php echo $this->staticUrl ; ?>yangsh/new/images/logo.jpg"></a>
			<a href="<?php echo $this->baseUrl; ?>arqys"><img src="<?php echo $this->staticUrl ; ?>yangsh/new/images/arqys.jpg"></a>
		</div>
		<div class="search_z">
			<div class="ss">
				<a class="ss1" href="javascript:void(0);">文章</a>
				<p style="display:none;">
					<a href="javascript:void(0);">文章</a>
					<a href="javascript:void(0);">食谱</a>
					<a href="javascript:void(0);">问答</a>
					<a href="javascript:void(0);">疾病</a>
					<a href="javascript:void(0);">图库</a>
				</p>
			</div>
			<form target="_blank" method="get" action="/Search/index">
				<input type="hidden" value="文章" name="type" id="sosoClasses">
				<input type="text" value="营养美食" class="ss2" name="keywords">
				<a class="anniu" style="margin:0px;" href="javascript:void(0);">&nbsp;</a>
				<input type="hidden" value="cd5ce23a902a9f4752a91818cb370230_35bbd0f5402b967a2b0ea8c649f0dcbb" name="__hash__">
			</form>
		</div>
	</div>
</div>
<div class="main_nav">
	<div class="nav_center">
		<a href="http://www.cndzys.com/arqys">首页</a>
		<a href="/yyys">营养饮食</a>
		<a class="down" href="/mrmt">美容美体</a>
		<a href="/schl">私处护理</a>
		<a href="/tssq">特殊时期</a>
	</div>
</div>
<div style="height:10px;" class="clear">&nbsp;</div>
