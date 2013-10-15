<?php echo $this->load->view('cfront/header'); ?>
   
   <div class="zx_main">
   	<div class="zx_main_t"><img src="<?php echo $this->staticUrl; ?>cfront/images/zx_04.jpg" /></div>
    <ul>
	<?php $page = intval($this->input->get_post('page')); $page = max(1, $page); $where = array('catid' => $this->catid); $newInfos = $controller->_getFrontInfos('webgame', 'new', $page, 8, $where); ?>
	<?php foreach ($newInfos['infos'] as $newInfo) { ?>
		<li><span><?php echo date('Y-m-d', $newInfo['inputtime']); ?></span><a href="<?php echo $newInfo['url']; ?>" title="<?php echo $newInfo['title']; ?>"><?php echo $newInfo['title']; ?></a></li>
	<?php } ?>
    	<li><span><?php echo date('Y-m-d', $newInfo['inputtime']); ?></span><a href="<?php echo $newInfo['url']; ?>" title="<?php echo $newInfo['title']; ?>"><?php echo $newInfo['title']; ?></a></li>
    </ul>
    <div><img src="<?php echo $this->staticUrl; ?>cfront/images/zx_05.jpg" /></div>
   </div>
<?php echo $this->load->view('cfront/footer'); ?>