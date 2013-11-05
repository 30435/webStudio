<?php echo $this->load->view('cfront/header'); ?>
<!--------------------------宽度一样的977px---------------------------------------->
<div class="all">
	<!--------------------------热帖和攻略---------------------------------------->
    <p class="lt_nuowa_up"><img src="<?php echo $this->staticUrl; ?>cfront/images/sy.png" /></p>
    <div class="lt_nuowa" style="background:#FFF;height:auto;">
		<div class="sigert">
			<strong style="color:#900;">您当前的位置：</strong>
			<a href="<?php echo $this->currentWebgameInfo['url_home']; ?>" target="_self"><?php echo $this->currentWebgameInfo['name']; ?></a>>
			<a href="javascript: void(0);" target="_self">精灵大全</a>><a href="javascript: void(0);" target="_self"><?php echo $this->currentInfo['title']; ?></a>正文
		</div>  
        <h1 class="sec_tit"><strong>诺瓦奇兵_<?php echo $this->currentInfo['title']; ?> 技能表</strong></h1>   
		<div class="sec_deng">
			<div class="sec_pic"><img width="920px" height="200px" src="<?php echo $this->currentInfo['pic_effect']; ?>" /></div>
			<?php if (!empty($this->currentInfo['pic_growup'])) { ?><br /><div class="sec_pic"><img width="920px" height="200px" src="<?php echo $this->currentInfo['pic_growup']; ?>" /></div><?php } ?>
			<?php if (!empty($this->currentInfo['pic_ext'])) { ?><br /><div class="sec_pic"><img width="900px" height="180px" src="<?php echo $this->currentInfo['pic_ext']; ?>" /></div><?php } ?>

			<?php echo $this->currentInfo['content']; ?>
			<ul class="sec_tj">
				<h2>宠物推荐</h2>
				<?php $newInfos = $controller->_getFrontInfos('webgame', 'spirit', 1, 7, array(), array(array('inputtime', 'desc'))); ?>
				<?php foreach ($newInfos['infos'] as $newInfo) { ?>
					<li><a href="<?php echo $this->currentWebgameInfo['url_home'] . 'spirit?id=' . $newInfo['id']; ?>" target="_blank"><img src="<?php echo $newInfo['thumb']; ?>" width="115px" height="120px" /></a></li>
				<?php } ?>
			</ul>
        </div>     
    </div>
    <p class="lt_nuowa_down"><img src="<?php echo $this->staticUrl; ?>cfront/images/xy.jpg" /></p>   
</div>

<?php echo $this->load->view('footer_cfront'); ?>