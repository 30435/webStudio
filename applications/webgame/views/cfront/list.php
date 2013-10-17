<?php echo $this->load->view('cfront/header_list'); ?>
   
   <div class="zx_main">
   	<div class="zx_main_t"><img src="<?php echo $this->staticUrl; ?>cfront/images/zx_04.jpg" /></div>
    <ul>
	<?php $page = intval($this->input->get_post('page')); $page = max(1, $page); $where = array('catid' => $this->catid); $newInfos = $controller->_getFrontInfos('webgame', 'new', $page, 12, $where, array(), 'inputtime, url, title', '', 0, true, $this->currentCategoryInfo['url']); ?>
	<?php foreach ($newInfos['infos'] as $newInfo) { ?>
		<li><span><?php echo date('Y-m-d', $newInfo['inputtime']); ?></span><a href="<?php echo $newInfo['url']; ?>" title="<?php echo $newInfo['title']; ?>"><?php echo $newInfo['title']; ?></a></li>
	<?php } ?>
    </ul>
	<div style="text-align:center;margin-top:10px;font-size:14px"><?php echo $controller->pageStr; ?></div>
    <div><img src="<?php echo $this->staticUrl; ?>cfront/images/zx_05.jpg" /></div>
   </div>
<?php echo $this->load->view('footer_cfront'); ?>