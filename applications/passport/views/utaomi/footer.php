<div class="foot">
	<div class="foot-info">
		<img src="<?php echo $this->staticUrl; ?>tsource/passport/images/taomee_logo.gif" alt="淘米">
        <div class="info">
			<p class="mb8">
			<?php foreach (array(2, 3, 4, 19, 20, 21, 22) as $showCatid) { ?>
				<a href="<?php echo $this->categoryInfos[$showCatid]['url']; ?>" title="<?php echo $this->categoryInfos[$showCatid]['catname']; ?>"><?php echo $this->categoryInfos[$showCatid]['catname']; ?></a><i class="part">|</i>
			<?php } ?>
            </p>
            <p><span>京ICP备09081115号-6 京网文[2013]0506-133号 网络文化经营许可证</span></p>
            <p>知金伟业教育科技（北京）有限公司 Copyright ? 2008 - 2012 ZhiJin Inc. All Rights Reserved.</p>
		</div>
    </div>
</div>
</body>
</html>
