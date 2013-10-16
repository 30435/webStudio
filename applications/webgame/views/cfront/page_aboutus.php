<?php echo $this->load->view('header_cfront'); ?>
<div class="channel">
    <div class="xz_wrap">
		<em>&gt;</em><a href="<?php echo $this->categoryInfos[$this->currentCategoryInfo['parentid']]['url']; ?>"><?php echo $this->categoryInfos[$this->currentCategoryInfo['parentid']]['catname']; ?></a>
		<em>&gt;</em><a href="javascript: void(0);"><?php echo $this->currentCategoryInfo['catname']; ?></a>
	</div>
</div>
<div class="banner"><img src="<?php echo $this->staticUrl; ?>cfront/images/banner01.jpg" alt="关于知金"></div>
<div class="gywm_main">
	<div class="classify fl">
		<ul>
			<li class="on"><a href="#" title="使命与愿景">使命与愿景</a></li>
			<li><a href="#" title="发展历程">发展历程</a></li>
			<li><a href="#" title="知金荣誉">知金荣誉</a></li>
             <li><a href="#" title="联系我们">联系我们</a></li>
		</ul>
	</div>
	<div class="cont fr">
		<h3>我们的使命</h3><?php $catContent = $controller->currentModel->getInfo(array('catid =' => $this->catid)); echo $catContent['content']; ?>
	</div>
	<div class="clear"></div>
</div>
<?php echo $this->load->view('footer_cfront'); ?>