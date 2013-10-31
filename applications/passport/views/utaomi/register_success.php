<?php echo $this->load->view($this->prefix . '/header'); ?>
<div class="min-body">
    <div class="min-content back">
        <div class="reg-box new-one">
            <div style="overflow:hidden;margin-top:14px;">
                <div class="big-gou-icon"></div>
	            <div class="reg-email-tip fleft">
			        <span class="fleft">申请成功<br>你的米米号是：
					    <strong style="font-size:28px;" class="orange"><?php echo $this->username; ?></strong> 
			            <a style="margin-left:20px;" class="f-botton" href="<?php echo $this->baseUrl; ?>utaomi/saveInfo">保存帐号到本地</a>
                        <span class="rnew_t">1、你可以使用米米号登录淘米任何产品</span>
                        <span class="rnew_t">2、米米号属于淘米帐号</span>
			        </span>
		        </div>
            </div>
            <div class="select-game">
                <div class="choose-game">
                    <div class="game-botton"><span style="margin-left:12px;" class="game-list t-hack " id="J_selected"><img width="48" height="48" src="<?php echo $this->webgameInfos['nova']['pic_small']; ?>"></span><span class="v-top  ml20 d-ib">进入<?php echo $this->webgameInfos['nova']['name']; ?></span></div>
                </div>
            </div>
		  	<div class="gray-div">
                <div class="notice hack-list"></div>
                <div style="width:auto;" class="notice-content hack-list">
                    <span class="fb">小提示:<br></span>
                    <span class="gray"> 想让你的米米号更加安全，赶快去</span>
                    <a id="J_set_phone" href="javascript:void(null);" class="orange no-underline fb">设置密保手机</a>
                    <span class="gray">或</span>
                    <a id="J_set_question" href="javascript:void(null);" class="orange no-underline fb">设置密保问题</a>
                </div>
            </div>
	    </div>
        <div class="fleft-game">
            <div class="before before_gray"></div>
			<div class="jdr_game">
			    <ul style="position: relative;list-style-type: none;z-index:1;width: 1914px;" id="J_game_list">
				<?php foreach ($this->webgameInfos as $webgameCode => $webgameInfo) { ?>
					<li name="<?php echo $webgameInfo['name']; ?>" class="unselect-game"><div class="game-list"><img src="<?php echo $webgameInfo['pic_small']; ?>" width="48px" height="48px"></div><div class="game_name"><?php echo $webgameInfo['name']; ?></div></li>
				<?php } ?>
                </ul>
            </div>
			<div class="after"></div>
		</div>
   </div>
</div>
<?php echo $this->load->view($this->prefix . '/footer'); ?>