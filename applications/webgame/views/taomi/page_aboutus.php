<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<title><?php echo $this->metaDatas['title']; ?></title>
<meta content="<?php echo $this->metaDatas['keywords']; ?>" name="Keywords"> 
<meta content="<?php echo $this->metaDatas['description']; ?>" name="Description">
<link href="http://www.2125.com/" rel="canonical">
<link href="<?echo $this->staticUrl; ?>favicon.ico" rel="shortcut icon" type="image/ico">
<link rel="stylesheet" type="text/css" href="<?php echo $this->staticUrl; ?>tsource/webgame/spage/css/style.css" />
</head>
<body id="about">


	<div class="header"><a href="/" title="淘米" class="logo"></a><!--<p><a href="index.html">简体中文</a>|<a href="en_taomee.html">ENGLISH</a></p>--></div>
    <div class="banner"><div class="wrap"><img src="<?php echo $this->staticUrl; ?>tsource/webgame/spage/images/banner02.jpg" alt="<?php echo $this->metaDatas['title']; ?>" /></div></div>
	<div class="main">
		<div class="left classify">
			<ul>
	        	<li <?php if ($this->catid == 2) echo 'class="on"'; ?>><a href="<?php echo $this->categoryInfos[2]['url']; ?>"><?php echo $this->categoryInfos[2]['catname']; ?></a></li>
				<li <?php if ($this->catid == 3) echo 'class="on"'; ?>><a href="<?php echo $this->categoryInfos[3]['url']; ?>"><?php echo $this->categoryInfos[3]['catname']; ?></a></li>
				<li <?php if ($this->catid == 4) echo 'class="on"'; ?>><a href="<?php echo $this->categoryInfos[4]['url']; ?>"><?php echo $this->categoryInfos[4]['catname']; ?></a></li>
				<li <?php if ($this->catid == 5) echo 'class="on"'; ?>><a href="<?php echo $this->categoryInfos[5]['url']; ?>"><?php echo $this->categoryInfos[5]['catname']; ?></a></li>
				<li <?php if ($this->catid == 6) echo 'class="on"'; ?>><a href="<?php echo $this->categoryInfos[6]['url']; ?>"><?php echo $this->categoryInfos[6]['catname']; ?></a></li>
			</ul>
		</div>
		<div class="right cont"><?php $catContent = $controller->currentModel->getInfo(array('catid =' => $this->catid)); echo $catContent['content']; ?></div>
		<div class="clear"></div>
	</div>	

    <div class="footer">
    	<div class="wrap">
            <p>
	        	<a href="<?php echo $this->categoryInfos[22]['url']; ?>" target="_blank" title="<?php echo $this->categoryInfos[22]['catname']; ?>"><?php echo $this->categoryInfos[22]['catname']; ?></a><em>|</em>
				<a href="<?php echo $this->categoryInfos[21]['url']; ?>" target="_blank" title="<?php echo $this->categoryInfos[21]['catname']; ?>"><?php echo $this->categoryInfos[21]['catname']; ?></a><em>|</em>
				<a href="<?php echo $this->categoryInfos[20]['url']; ?>" target="_blank" title="<?php echo $this->categoryInfos[20]['catname']; ?>"><?php echo $this->categoryInfos[20]['catname']; ?></a><em>|</em>
				<a href="<?php echo $this->categoryInfos[19]['url']; ?>" target="_blank" title="<?php echo $this->categoryInfos[19]['catname']; ?>"><?php echo $this->categoryInfos[19]['catname']; ?></a><em>|</em>
			</p>
            <p class="gray">知金伟业教育科技（北京）有限公司 Copyright ? 2008 - 2012 ZhiJin Inc. All Rights Reserved.</p>
			<p class="gray">京ICP备09081115号-6 京网文[2013]0506-133号 网络文化经营许可证</p>
        </div>
    </div>
</body>
</html>