<?php 
$this->middleCats = array(
	21 => 'about', 22 => 'news-opinions', 23 => 'products', 24 => 'culture', 25 => 'careers', 26 => 'growup-research'
);
if (in_array($this->catid, array_keys($this->middleCats)) && $this->catid != 22) {
	$rewardInfos = array(21 => 27, 23 => 34, 24 => 40, 25 => 48, 26 => 52);
	header('Location:' . $this->categoryInfos[$rewardInfos[$this->catid]]['url']);
}
$wrapClass = $innerClass = '';
if ($this->catid == 20) {
	$wrapClass = 'homenav-1';
} elseif (in_array($this->catid, array_keys($this->middleCats))) {
	$wrapClass = $this->middleCats[$this->catid] . '-nav2';
	$innerClass = $this->middleCats[$this->catid] . '-bgimg';
} elseif (in_array($this->currentCategoryInfo['parentid'], array_keys($this->middleCats))) {
	$wrapClass = $this->middleCats[$this->currentCategoryInfo['parentid']] . '-nav2';
	$innerClass = $this->middleCats[$this->currentCategoryInfo['parentid']] . '-bgimg';
}

?>
<?php echo $this->load->view('header_base'); ?>
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $this->staticUrl; ?>kidsedu/kidsdepart/css/style.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $this->staticUrl; ?>kidsedu/kidsdepart/css/slanissue.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $this->staticUrl; ?>kidsedu/kidsdepart/css/pagenavi-css.css" />
<script src="http://s.beva.cn/js/core/jquery.min.js"></script>
</head>
<body>

<div id="header"><a href="<?php echo $this->categoryInfos[20]['url']; ?>" class="logo" title="<?php echo $this->currentCategoryInfo['catname']; ?>"></a><div class="conversion"></div></div>
<div id="home-nav" class="<?php echo $wrapClass; ?>">
	<div class="navigation">
		<ul id="navmenu">
			<li><a href="<?php echo $this->categoryInfos[20]['url']; ?>" class="nav1 nav1_s" ></a></li>
			<?php $i = 2; foreach ($this->categoryInfos as $key => $category) { if ($category['parentid'] == 20) { ?>
			<li>
			<?php $currentNav = $this->catid == $key || $this->currentCategoryInfo['parentid'] == $key ? ' nav' . $i . '_curr' : ''; ?>
				<a href="<?php echo $category['url']; ?>" class="nav<?php echo $i . $currentNav; ?>" navid="nav<?php echo $i; ?>"></a>
				<div class="nav-dropmenue">
				<?php foreach ($this->categoryInfos as $subKey => $subCategory) { if ($subCategory['parentid'] == $key) { ?>
					<a href="<?php echo $subCategory['url']; ?>" title="<?php echo $subCategory['catname']; ?>"><?php echo $subCategory['catname']; ?></a>	
				<?php } } ?>
				<span></span>
				</div>
			</li>
			<?php $i++; } } ?>
		</ul>
	</div>
	<?php if ($this->catid == 20) { ?>
	<div class="home-background-image" id="home-bgs">
		<img src="http://www.slanissue.com/wp-content/themes/slanissue/images/home1.jpg" id="home-img-1" />
		<img src="http://www.slanissue.com/wp-content/themes/slanissue/images/home2.jpg" id="home-img-2" style="display:none;" />
		<img src="http://www.slanissue.com/wp-content/themes/slanissue/images/home3.jpg" id="home-img-3" style="display:none;" />
		<div id="home-top-pages">
			<a href="javascript:;" imgid="home-img-1" data-navclass="homenav-1" class="on">1</a>
			<a href="javascript:;" imgid="home-img-2" data-navclass="homenav-2">2</a>
			<a href="javascript:;" imgid="home-img-3" data-navclass="homenav-3">3</a>
		</div>
	</div>
	<script>
	$(document).ready(function()
	{
		$("#home-top-pages > a").mouseover(function()
		{
			$("#home-top-pages > a").removeClass("on");
			$(this).addClass("on");
			var obj = $(this), imgid = obj.attr('imgid'), navclass = obj.attr('data-navclass');
			$("#home-nav").removeClass().addClass(navclass);
			$("#home-bgs > img").hide();
			$("#" + imgid).show();
		});
	});
	</script>
	<?php } ?>
	<?php if (!empty($innerClass)) { echo '<div class="' . $innerClass . '"></div>'; } ?>
</div>
<script>
$(document).ready(function()
{
	$("#navmenu > li").hover(function()
	{
		var menua = $(this).children('a');
		menua.removeClass(menua.attr("navid") + "_s").addClass(menua.attr("navid") + "_s");
		$(this).children(".nav-dropmenue").show();
	}, function()
	{
		var menua = $(this).children('a');
		menua.removeClass(menua.attr("navid") + "_s");
		$(this).children(".nav-dropmenue").hide();
	});
});
</script>