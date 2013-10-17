<?php echo $this->load->view('header'); ?>
<div id="main">
	<div style="width: auto;" class="left">
		<div id="Billboard" class="mod">
			<div class="bd">
				<div data-collect-id="41" class="block a1">
				<?php $coverSmallStr = $coverStr = $bookInfoStr = ''; $newInfos = $controller->_getFrontInfos('bookbar', 'book', 1, 4, array(), array(), 'id, name, fcover_small, fcover, description', '', $start = 0); ?>
				<?php foreach ($newInfos['infos'] as $newInfo) { 
					$coverSmallStr .= '<li data-collect-index="1" class=""><img width="41" height="57" alt="' . $newInfo['name'] . '" src="' . $newInfo['fcover'] . '"></li>';
					$coverStr .= '<div class="tabs-content" style="display: none;"><a data-collect-index="1" href="' . $newInfo['fcover'] . '" target="_blank"><img width="200" height="280" alt="' . $newInfo['name'] . '" src="' . $newInfo['fcover'] . '"></a></div>';
					$bookInfoStr .= '<div class="tabs-content-2" style="display: none;"><h3><a data-collect-index="1" href="' . $newInfo['fcover'] . '" data-control-type="shelf" boxid="slider_classic" target="_blank">' . $newInfo['name'] . '</a></h3><p><a data-collect-index="1" href="' . $newInfo['fcover'] . '" target="_blank">' . $newInfo['fcover'] . '<img alt="打开" src="' . $this->staticUrl . 'bookbar/images/li-6.gif"></a></p></div>';
				} ?>
					<div class="tabs">
						<ul class="list"><?php echo $coverSmallStr; ?></ul>
						<?php echo $coverStr; ?>	
					</div>
					<?php echo $bookInfoStr; ?>
				</div>
				<div class="block a2">

				<?php $newInfos = $controller->_getFrontInfos('bookbar', 'book', 1, 16, array(), array(), 'id, name, fcover_small, fcover, description', '', $start = 0); ?>

				<?php $mark1 = 41; $mark2 = 0; $j = 0; for ($i = 1; $i < 4; $i++) { ?>
					<div data-collect-id="<?php echo $mark1++; ?>" class="c-<?php echo $i; ?>">
						<h3 data-collect-index="1" class="font-songti">
							<a href="<?php $j++; echo $newInfos['infos'][$j]['fcover']; ?>" target="_blank" data-control-type="shelf" boxid="tushu_recommend_1"><?php echo $newInfos['infos'][$j]['name']; ?></a>
						</h3>
						<p data-collect-index="2">
							<a href="<?php $j++; echo $newInfos['infos'][$j]['fcover']; ?>" target="_blank" data-control-type="shelf" boxid="tushu_recommend_1"><?php echo $newInfos['infos'][$j]['name']; ?></a> |
							<a href="<?php $j++; echo $newInfos['infos'][$j]['fcover']; ?>" target="_blank" data-control-type="shelf" boxid="tushu_recommend_1"><?php echo $newInfos['infos'][$j]['name']; ?></a> <br>
							<a href="<?php $j++; echo $newInfos['infos'][$j]['fcover']; ?>" target="_blank" data-control-type="shelf" boxid="tushu_recommend_1"><?php echo $newInfos['infos'][$j]['name']; ?></a> |
							<a href="<?php $j++; echo $newInfos['infos'][$j]['fcover']; ?>" target="_blank" data-control-type="shelf" boxid="tushu_recommend_1"><?php echo $newInfos['infos'][$j]['name']; ?></a>
						</p>
					</div>
				<?php } ?>
				</div>
				<div class="block a3">
					<ul class="tabs">
						<li data-cid="45" class="current">点击榜</li>
						<li data-cid="46">推荐榜</li>
						<li data-cid="47" class="last">订阅榜</li>
					</ul>
					<?php $newInfos = $controller->_getFrontInfos('bookbar', 'book', 1, 30, array(), array(), 'id, name, fcover_small, fcover, description, author', '', $start = 0); ?>
					<?php $mark1 = 44; $j = -1; for ($i = 1; $i < 4; $i++) { ?>
					<ul data-collect-id="<?php echo $mark1++; ?>" class="list" style="display: block;">
						<li class="top">
							<a class="fb pic" data-collect-index="1" target="_blank" href="<?php $j++; echo $newInfos['infos'][$j]['fcover']; ?>"><img width="50" height="70" src="<?php echo $newInfos['infos'][$j]['fcover']; ?>"></a>
							<span style="position: relative; top: 7px;">
								<a href="<?php echo $newInfos['infos'][$j]['fcover']; ?>" data-collect-index="1" class="fb" target="_blank"><?php echo $newInfos['infos'][$j]['name']; ?></a>
								<span class="author">作者：<a class="deep-blue fz-12" href="<?php echo $newInfos['infos'][$j]['fcover']; ?>" target="_blank"><?php echo $newInfos['infos'][$j]['author']; ?></a></span>
							</span>
						</li>
						<?php for ($z = 1; $z < 10; $z++) { $j++; ?>					
						<li><a href="<?php echo $newInfos['infos'][$j]['fcover']; ?>" data-collect-index="2" target="_blank"><?php echo $newInfos['infos'][$j]['name']; ?></a></li>
						<?php } ?>
						<li class="more"><a target="_blank" data-collect-index="11" href="javascript: void(0);">·更多</a></li>
					</ul>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
	<div class="ad empty-mod mod">
		<a target="_blank" href=""><img width="980" height="100" src="http://img.motieimg.com/img/13804312540498789_980_100.jpg"></a>
	</div>
</div>
<div class="cl"></div>
<?php echo $this->load->view('footer'); ?>