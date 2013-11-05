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
			<li <?php if ($this->currentCategoryInfo['id'] == 2) { echo 'class="on"'; } ?>><a href="<?php echo $this->categoryInfos[2]['url']; ?>" title="<?php echo $this->categoryInfos[2]['catname']; ?>"><?php echo $this->categoryInfos[2]['catname']; ?></a></li>
			<li <?php if ($this->currentCategoryInfo['id'] == 4) { echo 'class="on"'; } ?>><a href="<?php echo $this->categoryInfos[4]['url']; ?>" title="<?php echo $this->categoryInfos[4]['catname']; ?>"><?php echo $this->categoryInfos[4]['catname']; ?></a></li>
			<li <?php if ($this->currentCategoryInfo['id'] == 6) { echo 'class="on"'; } ?>><a href="<?php echo $this->categoryInfos[6]['url']; ?>" title="<?php echo $this->categoryInfos[6]['catname']; ?>"><?php echo $this->categoryInfos[6]['catname']; ?></a></li>
		</ul>
	</div>
	<div class="cont fr">
		<?php $catContent = $controller->currentModel->getInfo(array('catid =' => $this->catid)); echo $catContent['content']; ?>
	</div>
	<div class="clear"></div>
</div>
<?php echo $this->load->view('footer_cfront'); ?>