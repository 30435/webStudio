<?php $this->load->view('header_admin') ?>
<?php if ($this->method == 'listinfo') { ?>
<div class="pad_10">
  <div class="table-list">
    <table width="100%" cellspacing="0">
      <thead>
        <tr>
          <th width="80"><?php echo $this->fieldInfos['id']['name']; ?></th>
          <th><?php echo $this->fieldInfos['username']['name']; ?></th>
		  <th><?php echo $this->fieldInfos['roleid']['name']; ?></th>
		  <th><?php echo $this->fieldInfos['email']['name']; ?></th>
		  <th><?php echo $this->fieldInfos['createtime']['name']; ?></th>
		  <th><?php echo $this->fieldInfos['loginnum']['name']; ?></th>
		  <th><?php echo $this->fieldInfos['lastip']['name']; ?></thdata-validation-ajax-ajax="/path/to/validator/script" >
		  <th><?php echo $this->fieldInfos['lasttime']['name']; ?></th>
		  <th><?php echo $this->fieldInfos['islock']['name']; ?></th>
          <th width="150"><?php echo $this->lang->line('admin_operation'); ?></th>
        </tr>
      </thead>
      <tbody>
        <?php if (is_array($this->infos)) { foreach ($this->infos as $info) { ?>
        <tr>
          <td width="80" align="center"><?php echo $info['id']; ?></td>
          <td align="center"><?php echo $info['username']; ?></td>
		  <td align="center"><?php echo $info['roleid']; ?></td>
		  <td align="center"><?php echo $info['email']; ?></td>
		  <td align="center"><?php echo $info['createtime']; ?></td>
		  <td align="center"><?php echo $info['loginnum']; ?></td>
		  <td align="center"><?php echo $info['lastip']; ?></td>
		  <td align="center"><?php echo $info['lasttime']; ?></td>
		  <td align="center"><?php echo $info['islock']; ?></td>
          <td align="center">
		  	<?php foreach ($this->operationMenus as $operationMenu) { if (!in_array($operationMenu, array_keys($this->appMenus))) continue; $menu = $this->appMenus[$operationMenu]; $menuUrl = $operationMenu == 'delete' ? 'javascript:confirmurl("' . $menu['url'] . '?id=' . $info['id'] . '", "确认要删除 『 ' . $info['username'] . '』 吗？");' : $menu['url'] . '?id=' . $info['id']; ?>
    		<a href='<?php echo $menuUrl; ?>'><?php echo $menu['name']; ?></a> |
    		<?php } ?>
		  </td>
        </tr>
        <?php } } ?>
      </tbody>
    </table>
  </div>
  <div id="pages"> <?php echo $this->pageStr; ?></div>
</div>
<?php } else { ?>
<style type="text/css">
.radio-label{ border-top:1px solid #e4e2e2; border-left:1px solid #e4e2e2}
.radio-label td{ border-right:1px solid #e4e2e2; border-bottom:1px solid #e4e2e2;background:#f6f9fd}
</style>
<?php if ($this->method == 'add') { ?>
<script type="text/javascript">
<!--
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
	$("#username").formValidator({onshow:"请输入用户名",onfocus:"用户名应该为2-20位之间"}).inputValidator({min:2,max:20,onerror:"用户名应该为2-20位之间"}).ajaxValidator({
	    type : "get",
		url : "",
		data :"action=checkExist",
		datatype : "html",
		async:'false',
		success : function(data){	
            if( data == "1" ) {
                return true;
			} else {
                return false;
			}
		},
		buttons: $("#dosubmit"),
		onerror : "用户已存在。",
		onwait : "请稍候..."
	});
	$("#password").formValidator({onshow:"请输入密码",onfocus:"密码应该为6-20位之间"}).inputValidator({min:6,max:20,onerror:"密码应该为6-20位之间"});
	$("#passwordConfirm").formValidator({onshow:"请输入确认密码",onfocus:"请输入两次密码不同。",oncorrect:"密码输入一致"}).compareValidator({desid:"password",operateor:"=",onerror:"请输入两次密码不同。"});
	$("#email").formValidator({onshow:"请输入E-mail",onfocus:"E-mail格式错误",oncorrect:"E-mail格式正确"}).regexValidator({regexp:"email",datatype:"enum",onerror:"E-mail格式错误"});
})
//-->
</script>
<?php } else if ($this->method == 'edit') { ?>
<script type="text/javascript">
  $(document).ready(function() {
	$.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
	$("#password").formValidator({empty:true,onshow:"不修改密码请留空。",onfocus:"密码应该为6-20位之间"}).inputValidator({min:6,max:20,onerror:"密码应该为6-20位之间"});
	$("#pwdconfirm").formValidator({empty:true,onshow:"不修改密码请留空。",onfocus:"请输入两次密码不同。",oncorrect:"密码输入一致"}).compareValidator({desid:"password",operateor:"=",onerror:"请输入两次密码不同。"});
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
    <table width="100%" class="table_form contentWrap">
      <tr>
        <td width="80"><?php echo $this->fieldInfos['username']['name']; ?>:</td> 
        <td><input type="text" name="username" class="input-text" id="username" value="<?php if (isset($this->currentInfo['username'])) echo $this->currentInfo['username']; ?>" <?php if ($this->method == 'edit') echo 'disabled="disabled"'; ?> /></input></td>
      </tr>
      <tr>
        <td><?php echo $this->fieldInfos['roleid']['name']; ?>:</td>
        <td><select name="roleid" id="roleid"><?php echo $this->selectRole; ?></select></td>
      </tr>
      <tr>
        <td><?php echo $this->fieldInfos['password']['name']; ?>:</td> 
        <td><input type="password" name="password" class="input-text" id="password" value=""></input></td>
      </tr>
      <tr>
        <td>确认密码:</td> 
        <td><input type="password" name="passwordConfirm" class="input-text" id="passwordConfirm" value=""></input></td>
      </tr>
      <tr>
        <td><?php echo $this->fieldInfos['email']['name']; ?>:</td>
        <td>
          <input type="text" name="email" value="<?php if (isset($this->currentInfo['email'])) echo $this->currentInfo['email']; ?>" class="input-text" id="email" size="30"></input>
        </td>
      </tr>
	  <tr>
        <td><?php echo $this->fieldInfos['islock']['name']; ?>:</td>
        <td class="y-bg">
          <input type="radio" name="islock" value="0" class="input-text" <?php if (isset($this->currentInfo['islock']) && empty($this->currentInfo['islock'])) echo 'checked="checked"'; ?> /><?php echo $this->fieldInfos['islock']['infos']['0']; ?> |
		  <input type="radio" name="islock" value="1" class="input-text" <?php if (isset($this->currentInfo['islock']) && $this->currentInfo['islock'] == '1') echo 'checked="checked"'; ?> /><?php echo $this->fieldInfos['islock']['infos']['1']; ?>
        </td>
      </tr>
    </table>
    <div class="bk15"></div>
    <input name="dosubmit" type="submit" value="提交" class="button">
  </form>
  </div>
</div>
<?php } ?>
</body>
</html>
