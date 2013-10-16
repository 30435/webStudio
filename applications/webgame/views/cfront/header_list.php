<?php echo $this->load->view('cfront/header'); ?>
<div class="zx_ban">
	<div class="zx_ban_con">
		<div class="zx_ban_con_r">
			<p class="zx_p0"><a href="<?php echo $this->categoryInfos[7]['url']; ?>">查看更多>></a><span>知金动态</span></p>
			<ul>
			<?php $newInfos = $controller->_getFrontInfos('webgame', 'new', 1, 8); ?>
			<?php foreach ($newInfos['infos'] as $newInfo) { ?>
				<li><a href="<?php echo $newInfo['url']; ?>" title="<?php echo $newInfo['title']; ?>" ><?php echo $controller->cutstr($newInfo['title'], 30); ?></a></li>
			<?php } ?>
			</ul>
		</div>
	</div>
</div>