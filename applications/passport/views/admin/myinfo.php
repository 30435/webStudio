<?php $this->load->view('header_admin') ?>
<style type="text/css">
.radio-label{ border-top:1px solid #e4e2e2; border-left:1px solid #e4e2e2}
.radio-label td{ border-right:1px solid #e4e2e2; border-bottom:1px solid #e4e2e2;background:#f6f9fd}
</style>
<?php if ($this->method == 'editp') { ?>
<script type="text/javascript">
  $(document).ready(function() {
	$.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
	$("#old_password").formValidator({onshow:"不修改密码请留空。",onfocus:"密码应该为6-20位之间",oncorrect:"旧密码输入正确"}).inputValidator({min:6,max:20,onerror:"密码应该为6-20位之间"}).ajaxValidator({
	    type : "get",
		url : "",
		data :"action=checkPassword",
		datatype : "html",
		async:'false',
		success : function(data) {	
            if( data == "1" ) {
                return true;
			} else {
                return false;
			}
		},
		buttons: $("#dosubmit"),
		onerror : "旧密码输入错误",
		onwait : "请稍候..."
	});
	$("#password").formValidator({onshow:"不修改密码请留空。",onfocus:"密码应该为6-20位之间"}).inputValidator({min:6,max:20,onerror:"密码应该为6-20位之间"});
	$("#pwdconfirm").formValidator({onshow:"不修改密码请留空。",onfocus:"请输入两次密码不同。",oncorrect:"密码输入一致"}).compareValidator({desid:"password",operateor:"=",onerror:"请输入两次密码不同。"});
  })
</script>
<?php } else if ($this->method == 'editm') { ?>
<script type="text/javascript">
  $(document).ready(function() {
	$.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
	$("#truename").formValidator({onshow:"请输入真实姓名",onfocus:"真实姓名应该为2-20位之间"}).inputValidator({min:2,max:20,onerror:"真实姓名应该为2-20位之间"})
	$("#email").formValidator({onshow:"请输入E-mail",onfocus:"E-mail格式错误",oncorrect:"E-mail格式正确"}).regexValidator({regexp:"email",datatype:"enum",onerror:"E-mail格式错误"});
  })
</script>
<?php } ?>
<div class="pad_10">
  <div class="common-form">
  <?php
	//echo validation_errors();
	$attributes = array('name' => 'myform', 'id' => 'myform');
	$this->id = isset($this->id) ? $this->id : 0;
	echo form_open($this->appMenus[$this->method]['url'] . '?id=' . $this->id, $attributes);
  ?>
    <input type="hidden" name="info[userid]" value="1"></input>
    <input type="hidden" name="info[username]" value="phpcms"></input>
    <table width="100%" class="table_form contentWrap">
      <tr>
        <td width="80"><?php echo $this->fieldInfos['username']['name']; ?>:</td> 
        <td><?php echo $this->currentInfo['username']; ?></td>
      </tr>
      <tr>
        <td width="80"><?php echo $this->fieldInfos['email']['name']; ?>:</td> 
        <td><?php echo $this->currentInfo['email']; ?></td>
      </tr>
      <tr>
        <td width="80"><?php echo $this->fieldInfos['createtime']['name']; ?>:</td> 
        <td><?php echo $this->currentInfo['createtime']; ?></td>
      </tr>
      <tr>
        <td width="80"><?php echo $this->fieldInfos['lasttime']['name']; ?>:</td> 
        <td><?php echo $this->currentInfo['lasttime']; ?></td>
      </tr>
      <tr>
        <td width="80"><?php echo $this->fieldInfos['lastip']['name']; ?>:</td> 
        <td><?php echo $this->currentInfo['lastip']; ?></td>
      </tr>
      <tr>
        <td width="80"><?php echo $this->fieldInfos['loginnum']['name']; ?>:</td> 
        <td><?php echo $this->currentInfo['loginnum']; ?></td>
      </tr>
<?php if ($this->method == 'editp') { ?>
      <tr>
        <td>旧密码</td> 
        <td><input type="password" name="old_password" id="old_password" class="input-text"></input></td>
      </tr>
      <tr>
        <td>新密码</td> 
        <td><input type="password" name="password" id="password" class="input-text"></input></td>
      </tr>
      <tr>
        <td>重复新密码</td> 
        <td><input type="password" name="pwdconfirm" id="pwdconfirm" class="input-text"></input></td>
      </tr>
<?php } else if ($this->method == 'editm') { ?>
      <tr>
        <td>真实姓名</td>
        <td><input type="text" name="truename" id="truename" class="input-text" size="30" value="<?php echo $this->currentInfo['truename']; ?>"></input></td>
      </tr>
      <tr>
        <td>E-mail</td>
        <td><input type="text" name="email" id="email" class="input-text" size="40" value="<?php echo $this->currentInfo['email']; ?>"></input></td>
      </tr>
<?php } ?>
    </table>
    <div class="bk15"></div>
    <input name="dosubmit" type="submit" value="提交" class="button" id="dosubmit">
  </form>
  </div>
</div>
</body></html>