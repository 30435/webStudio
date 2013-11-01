<?php if ($this->time < $this->currentWebgameInfo['start_maintain']) { $this->load->view('cfront/countdown'); } else { ?>
<?php echo $this->load->view('cfront/header'); ?>
<script type="text/javascript">
function searchFunc()
{
	document.searchForm.submit();
}
</script>
<!--------------------------宽度一样的977px---------------------------------------->
<div class="all">
	<div class="ban"><iframe class="frm"  src="<?php echo $this->currentWebgameInfo['url_webgame']; ?>" width="956" height="640" frameborder="0" scrolling="no"></iframe></div>
		<div class="nav_nuowa">
			<div class="nuowa_bj0">
				<p class="more"><a href="<?php echo $this->categoryInfos[16]['url']; ?>" target="_blank">更多</a></p>
				<ul>
					<?php $newInfos = $controller->_getFrontInfos('webgame', 'new', 1, 6, array('catid' => 10), array(array('inputtime', 'desc'))); ?>
					<?php foreach ($newInfos['infos'] as $newInfo) { ?>
						<li><a href="#"><img src="images/001.png" /></a></li>
						<li><a href="<?php echo $newInfo['thumb']; ?>" target="_blank"><img src="<?php echo $newInfo['thumb']; ?>" width="115px" height="120px" /></a></li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div>

	<div class="footer">
		<div class="foot_con">
			<div class="foot_logo fl"><a href="<?php echo $this->currentWebgameInfo['url_home']; ?>"><img src="<?php echo $this->staticUrl; ?>cfront/images/logo.png" /></a></div>
			<div class="foot_tent fl">
				<p class="nav_foot">
				<?php foreach (array(2, 3, 4, 19, 20, 21) as $showCatid) { ?>
					<a href="<?php echo $this->categoryInfos[$showCatid]['url']; ?>" title="<?php echo $this->categoryInfos[$showCatid]['catname']; ?>"><?php echo $this->categoryInfos[$showCatid]['catname']; ?></a> |
				<?php } ?>	
				
				</p>
				<p>京ICP备09081115号-6 京网文[2013]0506-133号 网络文化经营许可证<br />知金伟业教育科技（北京）有限公司 Copyright ? 2008 - 2012 ZhiJin Inc. All Rights Reserved.</p>
			</div>
		</div>
	</div>
</div>
</body>
</html>
<?php } ?>