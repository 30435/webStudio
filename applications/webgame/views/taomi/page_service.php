<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title><?php echo $this->metaDatas['title']; ?></title>
<meta content="<?php echo $this->metaDatas['keywords']; ?>" name="Keywords"> 
<meta content="<?php echo $this->metaDatas['description']; ?>" name="Description">
<link href="http://www.2125.com/" rel="canonical">
<link href="<?echo $this->staticUrl; ?>favicon.ico" rel="shortcut icon" type="image/ico">
<link type="text/css" rel="stylesheet" href="<?php echo $this->staticUrl; ?>webgame/spage/css/base.css"> 
<link type="text/css" rel="stylesheet" href="<?php echo $this->staticUrl; ?>webgame/spage/css/about.css"> 
</head> 
<body> 
<div class="topbar_b"> 
    <div class="wrapper_950"> 
        <a href="<?php echo $this->baseUrl; ?>" title="<?php echo $this->metaDatas['title']; ?>"><img class="left logo" src="<?php echo $this->staticUrl; ?>webgame/spage/images/61_logo_b.gif" /></a> 
        <div class="right"> 
            <div class="right toplink"></div> 
            <ul class="nav">
			<?php foreach (array(19, 20, 21, 22) as $showCatid) { ?>
				<li <?php if ($this->catid == $showCatid) echo 'class="on"'; ?>><a href="<?php echo $this->categoryInfos[$showCatid]['url']; ?>" class="f14b"><?php echo $this->categoryInfos[$showCatid]['catname']; ?></a></li>
			<?php } ?>
            </ul> 
        </div> 
    </div> 
</div> 
 
<div class="clear"></div> 
<div class="break"></div> 
<div class="wrapper_950"> 
    <div class="frm_detail"> 
        <div class="top"></div> 
        <div class="content">
		    <div align="center"><strong><?php echo $this->currentCategoryInfo['catname']; ?></strong><br /></div>
		    <?php $catContent = $controller->currentModel->getInfo(array('catid =' => $this->catid)); echo $catContent['content']; ?>
		</div> 
		<div class="clear"></div> 
		<div class="bottom"></div> 
    </div> 
</div> 

<div class="copyright wrapper_950" style="width:980px;">
	<div class="left" style="width:160px;"><a href="/" target="_blank" title="<?php echo $this->metaDatas['title']; ?>"><img src="<?php echo $this->staticUrl; ?>passport/images/taomee_logo.gif" alt="淘米" /></a></div>
	<div class="cont" style="margin-left:175px; margin-right:180px;">
		<div class="row hgray">
		<?php foreach (array(2, 3, 4, 19, 20, 21, 22) as $showCatid) { ?>
			<a href="<?php echo $this->categoryInfos[$showCatid]['url']; ?>" class="hgray" title="<?php echo $this->categoryInfos[$showCatid]['catname']; ?>"><?php echo $this->categoryInfos[$showCatid]['catname']; ?></a>  |
		<?php } ?>
		</div>
		<div class="row hgray">京ICP备09081115号-6 京网文[2013]0506-133号 网络文化经营许可证</div>
        <div class="row hgray">抵制不良游戏    拒绝盗版游戏    注意自我保护    谨防受骗上当    适度游戏益脑    沉迷游戏伤身    合理安排时间    享受健康生活</div>
		<div class="row hgray">知金伟业教育科技（北京）有限公司 Copyright ? 2008 - 2012 ZhiJin Inc. All Rights Reserved.</div>
	</div>
</div>
<div class="blank_10"></div>
</body> 
</html>