<?php echo $this->load->view($this->templatePre . 'header_depart'); ?>
<div id="home-main">	
	<div class="home-session-left">
		<h2 class="sub-nav-one"></h2>
		<div class="content-left"><?php echo $this->currentCategoryInfo['description']; ?></div>
	</div>

	<div class="home-session-middle"> 
		<h2 class="sub-nav-two"></h2> 
		<div class="content-middle">
			<?php for ($i = 1; $i < 8; $i++) { ?>
			<div class="content-middle-bottom">
				 <ul>
					<li><span class="triangle"></span>2013-08-23</li>
					<li><a title="贝瓦获选2013中国创新产品10强" href="http://www.slanissue.com/archives/2987">贝瓦获选2013中国创新产品10强</a></li>
				</ul>
			</div>
			<?php } ?>
			<div class="understand2"><a href="<?php echo $this->categoryInfos[22]['url']; ?>">了解更多&gt;&gt;</a></div>
		</div>
	</div>

	<div class="home-session-right">
		<h2 class="sub-nav-three"></h2>
		<div class="content-right">
			<div class="content-right-top">
				<div class="content-right-top1">
				<?php $i = 1; foreach ($this->categoryInfos as $key => $category) { if ($i > 4) { break; } if ($category['parentid'] == 23) { ?>
					<div class="content-right-top2">
						<div class="content-right-top3">
						<img src="<?php echo $category['image']; ?>" width="123px" height="62px" />
						</div>
					</div>
				<?php $i++; } } ?>
				</div>
				<div><div class="understand3"><a href="<?php echo $this->categoryInfos[23]['url']; ?>" >了解更多>></a></div></div>
			</div>
			<div class="content-right-bottom">
				<div class="content-right-bottom1">
					<a href="<?php echo $this->categoryInfos[24]['url']; ?>" target="_blank"><img src="http://www.slanissue.com/wp-content/themes/slanissue/images/logo/ilogo-beva-all.jpg" /></a>
				</div>
				<div class="content-right-bottom1 content-right-bottom2">
					<a href="<?php echo $this->categoryInfos[26]['url']; ?>"><img src="http://www.slanissue.com/wp-content/themes/slanissue/images/logo/ilogo-research.jpg" /></a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php echo $this->load->view($this->templatePre . 'footer_depart'); ?>