<?php echo $this->load->view('header_cfront'); ?>
<!----------------------------父母须知页面-->
<div class="channel">
    <div class="xz_wrap">
		<em>&gt;</em><a href="<?php echo $this->categoryInfos[$this->currentCategoryInfo['parentid']]['url']; ?>"><?php echo $this->categoryInfos[$this->currentCategoryInfo['parentid']]['catname']; ?></a>
		<em>&gt;</em><a href="javascript: void(0);"><?php echo $this->currentCategoryInfo['catname']; ?></a>
	</div>
</div>
<div class="banner"><img src="<?php echo $this->currentCategoryInfo['image']; ?>" width="1000px" height="800px" alt="关于知金"></div>
<?php echo $this->load->view('footer_cfront'); ?>