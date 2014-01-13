<!--参杂内容-->
<div class="next-content-top"></div>
<div class="next-content">
	<!--新手教程-->
	<?php echo $this->load->view('newfront/inline_left1'); ?>
	<!--小轮播-->
	<div class="slide">
		<?php 
		$posterInfos = $controller->_getFrontInfos('passport', 'poster', 1, 4); 
		$bigStr = $smallStr = ''; $classOn = 'class="on"';
		foreach ($posterInfos['infos'] as $posterInfo) { 
			$bigStr .= '<a href="' . $posterInfo['url'] . '" title="' . $posterInfo['name'] . '" target="_blank"><img ' . $classOn . ' src="' . $posterInfo['pic'] . '"></a>'; $classOn = '';
			$smallStr .= '<a href="' . $posterInfo['url'] . '" title="' . $posterInfo['name'] . '" target="_blank"><img src="' . $posterInfo['pic'] . '"></a>';
		}
		?>
		<div class="big fl"><?php echo $bigStr; ?></div>
		<div class="small"><?php echo $smallStr; ?></div>
	</div>
	<!--新闻活动-->
	<div class="news">
		<div class="news-top">
			<a href="<?php echo $this->categoryInfos[9]['url']; ?>" title="<?php echo $this->categoryInfos[9]['catname']; ?>" target="_blank"></a>
		</div>
		<div class="news-list">
			<ul>
			<?php $newInfos = $controller->_getFrontInfos('webgame', 'new', 1, 7, array('catid' => 9), array(array('inputtime', 'desc'))); ?>
			<?php foreach ($newInfos['infos'] as $newInfo) { ?>
				<li>
					<a class="red" href="<?php echo $newInfo['url']; ?>" title="<?php echo $newInfo['title']; ?>" target="_blank"> · <?php echo $controller->cutstr($newInfo['title'], 34); ?></a>
				</li>
			<?php } ?>
			</ul>
		</div>
	</div>
	<!--宠物之星-->
	<?php echo $this->load->view('newfront/inline_left2'); ?>
	<!--搜索框-->
	<div class="search-input">
		<form name="searchForm" action="<?php echo $this->appInfos['webgame']['url']; ?>index/search" target="_blank" method="POST">
		<input type="text" name="searchStr" value="" class="text"/>
		<input class="submit" type="submit" value="">
		</form>
	</div>
	<!--两张图-->
	<div class="two-img">
		<a href="javascript:void(0)" target="_blank"><img src="<?php echo $this->staticUrl; ?>newfront/images/1.png"></a>
		<a href="javascript:void(0)" target="_blank"><img src="<?php echo $this->staticUrl; ?>newfront/images/2.png"></a>
	</div>
	<!--热门小宠-->
	<div class="hot-pet">
		<div class="pet-top">
			<a href="<?php echo $this->currentWebgameInfo['url_server']; ?>slist" title="MORE>" target="_blank"></a>
		</div>
		<div class="pet-content">
			<ul>
			<?php $newInfos = $controller->_getFrontInfos('webgame', 'spirit', 1, 12, array('position' => 'index'), array(array('updatetime', 'desc')), 'id, title, thumb,'); ?>
			<?php foreach ($newInfos['infos'] as $newInfo) { ?>
				<li>
					<a href="<?php echo $this->currentWebgameInfo['url_server'] . 'spirit?id=' . $newInfo['id']; ?>" target="_blank"><?php echo $newInfo['title']; ?></a>
					<a href="<?php echo $this->currentWebgameInfo['url_server'] . 'spirit?id=' . $newInfo['id']; ?>" target="_blank"><img src="<?php echo $newInfo['thumb']; ?>"></a>
				</li>
			<?php } ?>
			</ul>
		</div>		
	</div>
	<div class="clearf"></div>
	<!--玩家调查-->
	<div class="user-survey clearf">
		<p>您最关注官网哪块内容？</p>
		<form onsubmit="showStatic();return false;">
			<p><input type="radio" name="survey-radio" value="1" />玩家互动</p>
			<p><input type="radio" name="survey-radio" value="2" />最新活动</p>
			<p><input type="radio" name="survey-radio" value="3" />游戏资料</p>
			<p><input type="radio" name="survey-radio" value="4" />游戏商城</p>
			<p>
				<input class="submit" type="submit" value=""/>
				<input class="view" type="button" />
			</p>
		</form>			
	</div>
	<!--养宠心得 论坛热贴-->
	<div class="pet-news">
		<a href="<?php echo $this->categoryInfos[10]['url']; ?>" class="pet-more" title="<?php echo $this->categoryInfos[10]['catname']; ?>"></a>
		<ul>
		<?php $newInfos = $controller->_getFrontInfos('webgame', 'new', 1, 5, array('catid' => 10), array(array('inputtime', 'desc'))); ?>
		<?php foreach ($newInfos['infos'] as $newInfo) { ?>
			<li>
				<a href="<?php echo $newInfo['url']; ?>" title="<?php echo $newInfo['title']; ?>" target="_blank"> · <?php echo $controller->cutstr($newInfo['title'], 38); ?></a>
				<a class="orange fr" href="<?php echo $newInfo['url']; ?>" title="<?php echo $newInfo['title']; ?>" target="_blank">[<?php echo date('Y-m-d', $newInfo['updatetime']); ?>]</a>
			</li>
		<?php } ?>
		</ul>
	</div>
	<div class="pet-news luntan">
		<a href="<?php echo $this->categoryInfos[11]['url']; ?>" class="pet-more" title="<?php echo $this->categoryInfos[11]['catname']; ?>"></a>
		<ul>
		<?php $newInfos = $controller->_getFrontInfos('webgame', 'new', 1, 5, array('catid' => 11), array(array('inputtime', 'desc'))); ?>
		<?php foreach ($newInfos['infos'] as $newInfo) { ?>
			<li>
				<a href="<?php echo $newInfo['url']; ?>" title="<?php echo $newInfo['title']; ?>" target="_blank"> · <?php echo $controller->cutstr($newInfo['title'], 38); ?></a>
				<a class="orange fr" href="<?php echo $newInfo['url']; ?>" title="<?php echo $newInfo['title']; ?>" target="_blank">[<?php echo date('Y-m-d', $newInfo['updatetime']); ?>]</a>
			</li>
		<?php } ?>
		</ul>
	</div>
	<div class="clearf"></div>
	<!--互动社区 客服-->
	<div class="interactive">
		<a href="javascript:void(0)" title="互动社区"></a>
		<a href="javascript:void(0)" title="客服"></a>
	</div>

	<!--最新动漫 宠物杂志-->
	<div class="pet-news2">
		<a href="<?php echo $this->categoryInfos[12]['url']; ?>" class="pet-more" title="<?php echo $this->categoryInfos[12]['url']; ?>"></a>
		<ul>
			<?php
			$newInfos = $controller->_getFrontInfos('webgame', 'new', 1, 4, array('catid' => 12), array(array('inputtime', 'desc')));
			$picStr = $titleStr = ''; $classOn = 'class="on"';
			foreach ($newInfos['infos'] as $newInfo) { 
				$picStr .= '<a href="' . $newInfo['url'] . '"><img ' . $classOn . ' src="' . $newInfo['thumb'] . '" target="_blank"></a>'; $classOn = '';
				$titleStr .= '<li> <a href="' . $newInfo['url'] . '" title="' . $newInfo['title'] . '" target="_blank">· ' . $controller->cutstr($newInfo['title'], 32) . '</a></li>';
			}
			?>
			<div><?php echo $picStr; ?><div><?php echo $titleStr; ?>
		</ul>
	</div>
	<div class="pet-news3">
		<a href="<?php echo $this->categoryInfos[13]['url']; ?>" class="pet-more" title="<?php echo $this->categoryInfos[13]['catname']; ?>"></a>
		<ul>
			<?php
			$newInfos = $controller->_getFrontInfos('webgame', 'new', 1, 4, array('catid' => 13), array(array('inputtime', 'desc')));
			$picStr = $titleStr = ''; $classOn = 'class="on"';
			foreach ($newInfos['infos'] as $newInfo) { 
				$picStr .= '<a href="' . $newInfo['url'] . '"><img ' . $classOn . ' src="' . $newInfo['thumb'] . '" target="_blank"></a>'; $classOn = '';
				$titleStr .= '<li> <a href="' . $newInfo['url'] . '" title="' . $newInfo['title'] . '" target="_blank">· ' . $controller->cutstr($newInfo['title'], 32) . '</a></li>';
			}
			?>
			<div><?php echo $picStr; ?><div><?php echo $titleStr; ?>
		</ul>
	</div>
	<div class="clearf"></div>
</div>
<div class="next-content-bottom"></div>
