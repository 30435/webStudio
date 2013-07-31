<?php $this->load->view('header_admin') ?>
<?php if ($this->method == 'listinfo') { ?>
<link href="<?php echo $this->staticUrl; ?>admin/css/jquery.treeTable.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $this->staticUrl; ?>common/script/jquery.treetable.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $("#dnd-example").treeTable({
    	indent: 30
    	});
  });
</script>
<div class="pad_10">
  <div class="table-list">
	<?php
		//echo validation_errors();
		$attributes = array('name' => 'myform', 'id' => 'myform');
		$hidden = array('forwardUrl' => current_url());
		//echo form_open($this->appMenus[$this->method]['url'], $attributes);
		echo form_open($this->appMenus['edit']['url'] . '?action=listorder', $attributes, $hidden);
	?>
    <table width="100%" cellspacing="0" id="dnd-example">
      <thead>
        <tr>
		  <th><?php echo $this->fieldInfos['name']['name']; ?> ( <?php echo $this->fieldInfos['id']['name']; ?> )</th>
		  <th width="10%"><?php echo $this->fieldInfos['listorder']['name']; ?></th>
		  <th><?php echo $this->fieldInfos['app_code']['name']; ?></th>
		  <th><?php echo $this->fieldInfos['controller']['name']; ?></th>
		  <th><?php echo $this->fieldInfos['method']['name']; ?></th>
		  <th><?php echo $this->fieldInfos['display']['name']; ?></th>
          <th width="150"><?php echo $this->lang->line('admin_operation'); ?></th>
        </tr>
      </thead>
      <tbody>
      <?php echo $this->menusStr; ?>
      </tbody>
    </table>
    <div class="btn"><input type="submit"  class="button" name="dosubmit" id="dosubmit" value="<?php echo 'submit';?>" /></div>
    </form>
  </div>
</div>
<?php } else { ?>
<style type="text/css">
.radio-label{ border-top:1px solid #e4e2e2; border-left:1px solid #e4e2e2}
.radio-label td{ border-right:1px solid #e4e2e2; border-bottom:1px solid #e4e2e2;background:#f6f9fd}
</style>
<script type="text/javascript">
<!--
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
	$("#name").formValidator({onshow:"请输入菜单英文名称",onfocus:"请输入菜单英文名称",oncorrect:"输入正确"}).inputValidator({min:1,onerror:"请输入菜单英文名称"});
	$("#app_code").formValidator({onshow:"请选择所属应用",onfocus:"请选择所属应用",oncorrect:"正确"}).inputValidator({min:1,onerror:"请选择所属应用"});
	$("#display").formValidator({onshow:"请选展示位置",onfocus:"请选展示位置",oncorrect:"正确"}).inputValidator({min:1,onerror:"请选展示位置"});
})
//-->
</script>
<div class="pad_10">
  <div class="common-form">
  <?php
	echo validation_errors();
	$attributes = array('name' => 'myform', 'id' => 'myform');
	$this->id = isset($this->id) ? $this->id : 0;
	echo form_open($this->appMenus[$this->method]['url'] . '/?id=' . $this->id, $attributes);
  ?>
    <table width="100%" class="table_form contentWrap">
      <tbody>
		<tr>
          <th width="200"><?php echo $this->fieldInfos['parentid']['name']; ?>:</th>
          <td><select name="parentid" ><option value="0"></option><?php echo $this->selectParent; ?></select></td>
        </tr>
		<tr>
          <th width="200"><?php echo $this->fieldInfos['app_code']['name']; ?>:</th>
          <td><select name="app_code" id="app_code"><?php echo $this->selectApp; ?></select></td>
        </tr>
        <tr>
          <th width="80"><?php echo $this->fieldInfos['name']['name']; ?>:</th>
          <td class="y-bg"><input type="text" value="<?php if (isset($this->currentInfo['name'])) echo $this->currentInfo['name']; ?>" size="30" id="name" name="name" class="input-text">
            <div id="nameTip" class="onCorrect"></div></td>
        </tr>
        <tr>
          <th width="80"><?php echo $this->fieldInfos['controller']['name']; ?>:</th>
          <td class="y-bg"><input type="text" value="<?php if (isset($this->currentInfo['controller'])) echo $this->currentInfo['controller']; ?>" size="30" id="controller" name="controller" class="input-text">
            <div id="controllerTip" class="onCorrect"></div></td>
        </tr>
		<tr>
          <th width="80"><?php echo $this->fieldInfos['method']['name']; ?>:</th>
          <td class="y-bg"><input type="text" value="<?php if (isset($this->currentInfo['method'])) echo $this->currentInfo['method']; ?>" size="30" id="method" name="method" class="input-text">
            <div id="methodTip" class="onCorrect"></div></td>
        </tr>
		<tr>
          <th width="80"><?php echo $this->fieldInfos['extparam']['name']; ?>:</th>
          <td class="y-bg"><input type="text" value="<?php if (isset($this->currentInfo['extparam'])) echo $this->currentInfo['extparam']; ?>" size="30" id="extparam" name="extparam" class="input-text">
            <div id="extparamTip" class="onCorrect"></div></td>
        </tr>
        <tr>
          <th width="80"><?php echo $this->fieldInfos['display']['name']; ?>:</th>
          <td class="y-bg"><select name='display' id="display"><?php echo $this->selectDisplay; ?></select></td>
        </tr>
      </tbody>
    </table>
    <div class="bk15"></div>
    <?php if (in_array($this->method, array('edit', 'add', 'delete'))) { ?><input type="submit" class="button" value="<?php echo $this->lang->line('admin_submit'); ?>" name="dosubmit"><?php } ?>
    </form>
  </div>
</div>
<?php } ?>
</body></html>