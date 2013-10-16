<?php echo $this->load->view('header_cfront'); ?>
<!----------------------------父母须知页面-->
<div class="channel">
    <div class="xz_wrap">
		<em>&gt;</em><a href="<?php echo $this->categoryInfos[$this->currentCategoryInfo['parentid']]['url']; ?>"><?php echo $this->categoryInfos[$this->currentCategoryInfo['parentid']]['catname']; ?></a>
		<em>&gt;</em><a href="javascript: void(0);"><?php echo $this->currentCategoryInfo['catname']; ?></a>
	</div>
</div>
<div class="banner"><img src="<?php echo $this->staticUrl; ?>cfront/images/banner01.jpg" alt="关于知金"></div>
<div class="zx_main">
	<div class="zx_main_t"><img src="<?php echo $this->staticUrl; ?>cfront/images/zx_04.jpg" /></div>
    <!------------内容页面--------------->
    <div class="nr_con">
    		<div class="frm_jz"><?php echo $this->currentCategoryInfo['catname']; ?></div>
			<?php $catContent = $controller->currentModel->getInfo(array('catid =' => $this->catid)); echo $catContent['content']; ?>
    </div>
    <!------------over!!!!--------------->
    <div><img src="<?php echo $this->staticUrl; ?>cfront/images/zx_05.jpg" /></div>
</div>
<?php echo $this->load->view('footer_cfront'); ?>