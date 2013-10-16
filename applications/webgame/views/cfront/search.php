<?php echo $this->load->view('cfront/header_list'); ?>
   
   <div class="zx_main">
   	<div class="zx_main_t"><img src="<?php echo $this->staticUrl; ?>cfront/images/zx_04.jpg" /></div>
    <ul>
	<?php if (is_array($this->resultArray)) { foreach ($this->resultArray as $newInfo) { ?>
		<li><span><?php echo date('Y-m-d', $newInfo['updatetime']); ?></span><a href="<?php echo $newInfo['url']; ?>" title="<?php echo $newInfo['title']; ?>"><?php echo $newInfo['title']; ?></a></li>
	<?php } } ?>
    </ul>
    <div><img src="<?php echo $this->staticUrl; ?>cfront/images/zx_05.jpg" /></div>
   </div>
<?php echo $this->load->view('cfront/footer'); ?>