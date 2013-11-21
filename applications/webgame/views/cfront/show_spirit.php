<?php echo $this->load->view('cfront/header'); ?>
<?php $sortInfos = $controller->currentModel->sortInfos; ?>
<div class="all">
	<p class="lt_nuowa_up"><img src="<?php echo $this->staticUrl; ?>cfront/images/sy.png" /></p>
    <div class="lt_nuowa" style="background:#FFF;height:auto;">
		<div class="sigert">
			<strong style="color:#900;">您当前的位置：</strong>
			<a href="<?php echo $this->currentWebgameInfo['url_home']; ?>" target="_self"><?php echo $this->currentWebgameInfo['name']; ?></a>>
			<a href="<?php echo $this->currentWebgameInfo['url_server']; ?>slist">诺瓦奇兵宠物大全</a>>
			<?php if (isset($sortInfos[$this->currentInfo['sort']]['value'])) { 
			    echo '<a href="' . $this->currentWebgameInfo['url_server'] . 'slist?sort=' . $sortInfos[$this->currentInfo['sort']]['key'] . '">' . $sortInfos[$this->currentInfo['sort']]['value'] .  '系</a>'; 
			} ?>
			
		</div>  
		<h1 class="sec_tit"><strong>诺瓦奇兵-<?php echo $this->currentInfo['title']; ?>-属性详解</strong></h1>   
		<div class="sec_deng">
			<div class="sec_pic">
				<?php 
				$picString = '';
				$picString .= empty($this->currentInfo['pic_effect']) ? '' : '<img src="' . $this->currentInfo['pic_effect'] . '" />';
				$picString .= empty($this->currentInfo['pic_growup']) ? '' : '<img src="' . $this->currentInfo['pic_growup'] . '" />';
				$picString .= empty($this->currentInfo['pic_ext']) ? '' : '<img src="' . $this->currentInfo['pic_ext'] . '" />';
				echo $picString;
				?>
			</div>
			<?php echo $this->currentInfo['content']; ?>
			<ul class="sec_tj">
				<h2>宠物推荐</h2>
				<?php $newInfos = $controller->_getFrontInfos('webgame', 'spirit', 1, 6, array('position' => 'show', 'sort = ' => $this->currentInfo['sort']), array(array('updatetime', 'desc')), 'id, title, thumb,'); ?>
				<?php foreach ($newInfos['infos'] as $newInfo) { ?>
					<li><a href="<?php echo $this->currentWebgameInfo['url_server'] . 'spirit?id=' . $newInfo['id']; ?>" target="_blank"><img src="<?php echo $newInfo['thumb']; ?>" width="109px" height="143px" /></a></li>
				<?php } ?>
			</ul>
		</div>         
    </div>
	<p class="lt_nuowa_down"><img src="<?php echo $this->staticUrl; ?>cfront/images/xy.jpg" /></p>
 </div>
<?php echo $this->load->view('footer_cfront'); ?>