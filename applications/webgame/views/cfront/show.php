<?php echo $this->load->view('cfront/header_list'); ?>
   <div class="zx_main">
   	<div class="zx_main_t"><img src="<?php echo $this->staticUrl; ?>cfront/images/zx_04.jpg" /></div>
    <!------------内容页面--------------->
    <div class="nr_con">
    	<div class="nr_con_p"><h2><?php echo $this->currentInfo['title']; ?></h2><?php echo date('Y-m-d H:i:s', $this->currentInfo['updatetime']); ?></div>
        <p>赛尔号即将在8月9日迎来神宠超进化庆典开幕式，8月9日至8月15日全天米币绝版精灵免费送。8月活动再掀高潮，绝对不能错过哟！</p>
        <p><?php echo $this->currentInfo['content']; ?></p>
    </div>
    <!------------over!!!!--------------->
    <div><img src="<?php echo $this->staticUrl; ?>cfront/images/zx_05.jpg" /></div>
   </div>
<?php echo $this->load->view('cfront/footer'); ?>