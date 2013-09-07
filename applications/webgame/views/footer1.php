<footer>
    <div role="contentinfo" class="footer_wrap">
        <div class="footer_inner">
            <a title="" class="ft_logo" href="/" rel="nofollow" target="_blank">知金游戏</a>
            <div class="ft_remark">
                <div class="ft_link">
				<?php foreach (array(2, 3, 4, 19, 20, 21, 22) as $showCatid) { ?>
					<a title="<?php echo $this->categoryInfos[$showCatid]['catname']; ?>" href="<?php echo $this->categoryInfos[$showCatid]['url']; ?>" rel="nofollow" target="_blank"><?php echo $this->categoryInfos[$showCatid]['catname']; ?></a><i class="divide">|</i>
				<?php } ?>
                </div>
                <div class="ft_icp">京ICP备09081115号-6 京网文[2013]0506-133号 网络文化经营许可证</div>
                <div class="ft_copyright">知金伟业教育科技（北京）有限公司 Copyright ? 2008 - 2012 ZhiJin Inc. All Rights Reserved.</div>
            </div>
        </div>
    </div>
</footer>
</body>
<script src="<?php echo $this->staticUrl; ?>webgame/common/js/jquery_1.71.js"></script>
<script src="<?php echo $this->staticUrl; ?>webgame/common/js/game_61/events.js"></script>
<script src="<?php echo $this->staticUrl; ?>webgame/topbar/topbar/js/topbarEvents.js"></script>
</html>