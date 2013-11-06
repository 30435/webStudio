<?php echo $this->load->view('cfront/header_list'); ?>
   <div class="zx_main">
   	<div class="zx_main_t"><img src="<?php echo $this->staticUrl; ?>cfront/images/zx_04.jpg" /></div>
    <!------------内容页面--------------->
    <div class="nr_con">
    	<div class="nr_con_p"><h2><?php echo $this->currentInfo['title']; ?></h2><?php echo date('Y-m-d H:i:s', $this->currentInfo['updatetime']); ?></div>
        <p><?php echo $this->currentInfo['content']; ?></p>
    </div>
    <!------------over!!!!--------------->
    <div><img src="<?php echo $this->staticUrl; ?>cfront/images/zx_05.jpg" /></div>
   </div>
<?php echo $this->load->view('footer_cfront'); ?>