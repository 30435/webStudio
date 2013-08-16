<?php echo doctype(); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $this->headerTitle; ?></title>
<?php echo meta($this->metaInfos); ?>
<meta http-equiv="cache-control" content="no-cache, must-revalidate">
<?php 
$styleFiles = array(
	'yangsh/css/top_2.css',
	'yangsh/css/dz-cj_2.css'
);
$linkString = '';
foreach ($styleFiles as $styleFile) {
	$linkString .= link_tag($this->staticUrl . $styleFile);
}
echo $linkString; 
?>
<style>
	a:hover{test:expression(target="_blank");}
</style>
</head>
<body>
<div class="top">
	<div class="top1">
		<p style="color:#8c8c8c;">Hi，<span id="mytime">下午</span>好，欢迎访问大众养生网</p>
		<div id="login_status" class="top2">
			<div class="top2-3">
				<a class="top2-2" target="_blank" href="http://www.cndzys.com/Member/Reg/index"></a>
				<span>或</span>
				<a class="top2-1" target="_self" onclick="mask.show();" style="cursor:pointer;cursor:hand;" id="jslogin"></a>
				<span>欢迎您，请</span>
			</div>
		</div>
	</div>
</div>
<div class="wapper">
	<div class="logo">
		<a class="logo1" href="/"><img src="<?php echo $this->staticUrl; ?>yangsh/images/logo.jpg"></a>
		<div class="logo2">
			<div class="logo2-1">
				<a class="logo2-1-1" href="javascrip:void(0);">&nbsp;</a>
				<p>
					<a href="/zyys">
						中医
					</a>
					<a href="arqys">
						人群
					</a>
					<a href="shbj">
						生活保健
					</a>
					<a href="yssc">
						食材
					</a>
					<a href="aydys">
						运动
					</a>
					<a href="http://www.cndzys.com/yssl/">
						药膳食疗
					</a>
				</p>
			</div>
			<div class="logo2-1">
				<a class="logo2-1-2" href="javascrip:void(0);">&nbsp;</a>
				<p>
					<a href="nake">
						内科
					</a>
					<a href="waike">
						外科
					</a>
					<a href="http://www.cndzys.com/jbk/7.html">
						颈椎病
					</a>
					<a href="jbyf/fk">
						妇科
					</a>
					<a href="ek">
						儿科
					</a>
					<a href="http://www.cndzys.com/jbk/23.html">
						脂肪肝
					</a>
				</p>
			</div>
		</div>
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
			<input type="hidden" value="e251273eb74a8ee3f661a7af00915af1_f8b2083c2b07e54bae502d7ad53b0226"
			name="__hash__">
		</form>
	</div>
	<div class="nav">
		<a class="on" href="/">首页</a><span>&nbsp;</span>
		<?php 
		foreach ($this->categoryInfos as $categoryInfo) { 
		    if ($categoryInfo['parentid'] == 0) {
				echo '<a href="' . $categoryInfo['catdir'] . '" target="_blank">' . $categoryInfo['catname'] . '</a><span>&nbsp;</span>';
			}
		}
		?>
	</div>
	<!--导航 结束-->
	<div style="height:50px;" class="clear">
		&nbsp;
	</div>