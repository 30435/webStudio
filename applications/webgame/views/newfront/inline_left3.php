<div class="content-news">
	<a href="<?php echo $this->categoryInfos[9]['url']; ?>" class="more" title="<?php echo $this->categoryInfos[9]['catname']; ?>"></a>
	<ul>
		<?php $newInfos = $controller->_getFrontInfos('webgame', 'new', 1, 5, array('position' => 'index'), array(array('updatetime', 'desc')), 'id, title, url,'); ?>
		<?php foreach ($newInfos['infos'] as $newInfo) { ?>
		<li>
			<a href="<?php echo $newInfo['url']; ?>" title="<?php echo $newInfo['title']; ?>">· <?php echo $newInfo['title']; ?></a>
		</li>
		<?php } ?>
	</ul>
</div>
