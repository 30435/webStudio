<?php echo $this->load->view($this->prefix . '/header'); ?>
<div class="min-body">
   <div class="min-content back">
<form name="form1" enctype="application/x-www-form-urlencoded" method="post" action="/forget/findType" id="form1" autocomplete="off">
   <div class="reg-box">
		<div class="reg-top">
		    <span class="fleft fb">请填写需要找回密码的诺瓦号信息</span>
	    </div>
       <div id="J_error_pwd" style="margin-left:118px;" class="comm-error ps-error"><span></span></div>
       <div id="for_uid" class="comm-error ps-error" style="display: none;"><span></span></div>
       <div class="reg-row">
            <label class="label">帐号：</label>
            <div class="reg-div">
                <span id="J_mimi_tip" class="reg-span">诺瓦号/邮箱/自定义帐号</span>
                <input type="text" name="uid" id="J_mimi_id" class="reg-input">
            </div>
       </div>
       <div class="a-botton" id="J_submit">
             <span class="f14">确定</span>
       </div>
    	</div>
    </form></div>
</div>
<?php echo $this->load->view($this->prefix . '/footer'); ?>