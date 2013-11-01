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
	<div class="ban"><iframe id="frm" src="<?php echo $this->currentWebgameInfo['url_webgame']; ?>" width="960" height="620" frameborder="0" scrolling="no"></iframe></div>
		<p class="lt_nuowa_down"><img src="<?php echo $this->staticUrl; ?>cfront/images/xy.jpg" /></p>
		<!--------------------------游戏背景---------------------------------------->
		<div class="nuowa_bj">
			<p class="more"><a href="<?php echo $this->categoryInfos[16]['url']; ?>" target="_blank">更多</a></p>
			<ul>
			<?php $newInfos = $controller->_getFrontInfos('webgame', 'new', 1, 4, array('catid' => 16), array(array('inputtime', 'desc'))); ?>
			<?php $i = 1; foreach ($newInfos['infos'] as $newInfo) { ?>
				<li><a href="<?php echo $newInfo['thumb']; ?>" target="_blank"><img src="<?php echo $newInfo['thumb']; ?>" width="223px" height="136px" /></a><br /><a href="<?php echo $newInfo['thumb']; ?>" target="_blank"><?php echo $controller->cutstr($newInfo['title'], 32); ?></a></li>
			<?php if ($i == 5 || $i == 10) echo '<li class="line2"></li>'; $i++; } ?>
			</ul>
		</div>
		<div class="footer">
			<div class="huang"><img src="<?php echo $this->staticUrl; ?>cfront/images/h.png" /></div>
			<p>小游戏作品版权归原作者享有，如无意之中侵犯了您的版权，请您按照《版权保护投诉指引》来信告知，本网站将应您的要求删除。<br />知金温馨提示：抵制不良游戏 拒绝盗版游戏 注意自我保护 谨防受骗上当 适度游戏益脑 沉迷游戏伤身 合理安排时间 享受健康生活<br/>京ICP备09081115号-6 京网文[2013]0506-133号 网络文化经营许可证<br />知金伟业教育科技（北京）有限公司 Copyright ? 2008 - 2012 ZhiJin Inc. All Rights Reserved.</p>
		</div>   
	</div>
</div>
</body>
</html>
<?php } ?>