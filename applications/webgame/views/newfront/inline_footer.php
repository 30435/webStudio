<!--底部-->
<div class="footer">
	<div class="bg">
		<p>
		<?php foreach (array(2, 4, 19, 20) as $showCatid) { ?>
			<a href="<?php echo $this->categoryInfos[$showCatid]['url']; ?>" title="<?php echo $this->categoryInfos[$showCatid]['catname']; ?>"><?php echo $this->categoryInfos[$showCatid]['catname']; ?></a> |
		<?php } ?>	
			<a href="<?php echo $this->categoryInfos[24]['url']; ?>" target="_blank">京网文[2013]0506-133号</a> | 
			<a href="<?php echo $this->categoryInfos[23]['url']; ?>" target="_blank">网络文化经营许可证</a>
		</p>
		<p class="copyright"> 知金伟业教育科技（北京）有限公司 Copyright ? 2008 - 2012 ZhiJin Inc. All Rights Reserved </p>
	</div>	
</div>

