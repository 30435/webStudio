<?php echo doctype(); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $this->headerTitle; ?></title>
<?php echo meta($this->metaInfos); ?>
<meta http-equiv="cache-control" content="no-cache, must-revalidate">
<?php 
$styleFiles = array(
	'yangsh/css/top.css',
	'yangsh/css/dz-cj.css',
	'yangsh/Skins/Blue/jbox.css'
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
<div class="top">
<div class="top1">
	<p>
		<a href="/" style=" margin-left:2px; margin-right:2px;">
			首页
		</a>
		|
		<a style=" margin-left:2px; margin-right:2px;" href="/zyys" target="_blank">
			中医养生
		</a>
		|
		<a style=" margin-left:2px; margin-right:2px;" href="/shbj" target="_blank">
			生活保健
		</a>
		|
		<a style=" margin-left:2px; margin-right:2px;" href="/ysys" target="_blank">
			饮食养生
		</a>
		|
		<a style=" margin-left:2px; margin-right:2px;" href="/arqys" target="_blank">
			人群养生
		</a>
		|
		<a style=" margin-left:2px; margin-right:2px;" href="/aydys" target="_blank">
			运动养生
		</a>
		|
		<a style=" margin-left:2px; margin-right:2px;" href="/jbfz" target="_blank">
			疾病防治
		</a>
		|
		<a style=" margin-left:2px; margin-right:2px;" href="/yssp" target="_blank">
			养生食谱
		</a>
		|
		<a href="/jbk" target="_blank" style=" margin-left:2px; margin-right:2px;">
			疾病库
		</a>
		|
		<a href="/zice" target="_blank" style=" margin-left:2px; margin-right:2px;">
			健康自测
		</a>
		|
		<a href="http://tupian.cndzys.com">
			养生图库
		</a>
		|
		<a href="http://ask.cndzys.com" target="_blank" style=" margin-left:2px; margin-right:2px;">
			有问必答
		</a>
	</p>
	<div id="login_status" class="top2">
		<div class="top2-3">
			<a class="top2-2" target="_blank" href="http://www.cndzys.com/Member/Reg/index">
			</a>
			<span>
				或
			</span>
			<a class="top2-1" target="_self" onhttp://localhost/github/shapp/php/yangsh/target/click="mask.show();" style="cursor:pointer;cursor:hand;"
			id="jslogin">
			</a>
			<span>
				欢迎您，请
			</span>
		</div>
	</div>
</div>
</div>
<!--Top 结束-->
<!--Top 结束-->
<!--wapper 开始-->
<div class="wapper">
<!--logo 开始-->
<div class="logo">
	<a class="logo1" href="/">
		<img src="http://localhost/github/shapp/php/yangsh/target/Home/Tpl/Home/Public/images/logo2.jpg">
	</a>
	<a class="logo4" href="javascript:void(0);">
		<img src="http://localhost/github/shapp/php/yangsh/target/Home/Tpl/Home/Public/images/a22.jpg">
	</a>
	<form id="search" action="/index.php/Search/index" method="GET">
		<div class="ss">
			<p style="display:none;" id="ss7" class="ss7">
				<a target="_self" href="javascript:void(0);">
					综合
				</a>
				<a target="_self" href="javascript:void(0);">
					疾病
				</a>
				<a target="_self" href="javascript:void(0);">
					症状
				</a>
				<a target="_self" href="javascript:void(0);">
					文章
				</a>
			</p>
			<div class="clear">
				&nbsp;
			</div>
			<a class="ss1" target="_self" href="javascript:void(0);">
				<span>
					综合
				</span>
			</a>
			<div class="ss2">
				<input type="hidden" value="综合" id="type" name="type">
				<input type="text" value="" id="keywords" name="keywords">
			</div>
			<a class="ss3" target="_self" href="javascript:void(0);">
				&nbsp;
			</a>
		</div>
		<input type="hidden" value="9350b4f934e23ec6e9d67d53a5ddef85_e1472cfb7f834ecdcb2fdfe57d2a5268"
		name="__hash__">
	</form>
	<p class="logo5">
		<a href="jb/aizibing/ydff">
			运动方法
		</a>
		|
		<a href="zyys/ysyx">
			养生养心
		</a>
		|
		<a href="yssl">
			药膳食疗
		</a>
	</p>
</div>
<!--logo 结束-->
<!--导航 开始-->
<div class="nav nav3-5">
	<a href="/nxysw">
		首页
	</a>
	<span class="xian1">
		&nbsp;
	</span>
	<a href="/yyys">
		营养饮食
	</a>
	<span class="xian1">
		&nbsp;
	</span>
	<a class="on7" href="/mrmt">
		美容美体
	</a>
	<span class="xian1">
		&nbsp;
	</span>
	<a href="/schl">
		私处护理
	</a>
	<span class="xian1">
		&nbsp;
	</span>
	<a href="/tssq">
		特殊时期
	</a>
</div>
<!--导航 结束-->
<div style="height:50px;" class="clear">
	&nbsp;
</div>
<!--当前位置 开始-->
<div style="height: 90px;width: 960px;">
	<script src="http://localhost/github/shapp/php/yangsh/target/adv/adv17.js" type="text/javascript">
	</script>
	<script type="text/javascript">
		/*960*90，创建于2012-10-23内容页横通栏*/
		var cpro_id = "u1099233";
	</script>
</div>
<div class="dq">
	<div class="dq1">
		<span>
			当前位置：
		</span>
		<a href="/arqys">
			人群养生
		</a>
		&gt;
		<a href="/nxysw">
			女性养生
		</a>
		&gt;
		<a href="/mrmt">
			美容美体
		</a>
	</div>
</div>
<!--当前位置 结束-->