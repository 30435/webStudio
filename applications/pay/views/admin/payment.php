<?php $this->load->view('header_admin') ?>
<?php if ($this->method == 'listinfo') { ?>
<div class="table-list pad-lr-10">
	<?php
		//echo validation_errors();
		$attributes = array('name' => 'myform', 'id' => 'myform');
		$hidden = array('forwardUrl' => current_url());
		echo form_open($this->appMenus['edit']['url'] . '?action=listorder', $attributes, $hidden);
	?>
	<input type="hidden" name="urlForward" id="urlForward" />
    <table width="100%" cellspacing="0">
      <thead>
		<tr>
		  <th><?php echo $this->fieldInfos['listorder']['name']; ?></th>
		  <th><?php echo $this->fieldInfos['id']['name']; ?></th>
		  <th align="center"><?php echo $this->fieldInfos['name']['name']; ?></th>
		  <th align="center"><?php echo $this->fieldInfos['code']['name']; ?></th>
		  <th align="center"><?php echo $this->fieldInfos['status']['name']; ?></th>
		  <th class="text-c"><?php echo $this->lang->line('admin_operation'); ?></th>
		</tr>
      </thead>
      <tbody>
	  <?php if (is_array($this->infos) && !empty($this->infos)) { foreach ($this->infos as $info) { ?>
        <tr>
		  <td align="center"><input name='listorders[<?php echo $info['id']; ?>]' type='text' size='3' value='<?php echo $info['listorder']; ?>' class="input-text-c"></td>
          <td align="center"><?php echo $info['id']; ?></td>
          <td align="center"><?php echo $info['name']; ?></td>
		  <td align="center"><?php echo $info['code']; ?></td>
		  <td align="center"><?php echo $info['status']; ?></td>
          <td class="text-c">
		  	<?php foreach ($this->operationMenus as $operationMenu) { if (!in_array($operationMenu, array_keys($this->appMenus))) continue; $menu = $this->appMenus[$operationMenu]; $menuUrl = $operationMenu == 'delete' ? 'javascript:confirmurl("' . $menu['url'] . '?id=' . $info['id'] . '", "确认要删除 『 ' . $info['name'] . '』 吗？");' : $menu['url'] . '?id=' . $info['id']; ?>
    		<a href='<?php echo $menuUrl; ?>'><?php echo $menu['name']; ?></a> |
    		<?php } ?>
          </td>
        </tr>
      <?php } } ?>
      </tbody>
    </table>
    <div class="btn"><input type="submit" class="button" name="dosubmit" value="排序" /></div>
  </form>
  <div id="pages"> <?php echo $this->pageStr; ?></div>
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
  <?php if ($this->method == 'add') { ?>
  $("#code").formValidator({onshow:"请输入2-10为小写字母的支付方式代码",onfocus:"请输入支付方式代码"}).regexValidator({regexp:"^[a-z]{2,10}$",onerror:"2-10个小写字母"}).inputValidator({min:1,onerror:"请输入支付方式代码"}).ajaxValidator({
	type : "get",
	url : "",
	data :"action=checkExist",
	datatype : "html",
	cached:false,
	getdata:{id:'id'},
	async:'true',
	cached:false,
	success : function(data){	
		if( data == "1" ){return true;}else{return false;}
	},buttons: $("#dosubmit"),onerror : "支付方式代码已存在",onwait : "正在连接，请稍候。"}
  );
  <?php } ?>
  $("#name").formValidator({onshow:"请输入支付方式名称",onfocus:"支付方式名称不能为空。"}).inputValidator({min:1,max:999,onerror:"支付方式名称不能为空。"});
})
//-->
</script>
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
	    <th><?php echo $this->fieldInfos['code']['name']; ?>：</th>
		<td class="y-bg"><input type="text" class="input-text" name="code" value="<?php if (isset($this->currentInfo['code'])) echo $this->currentInfo['code']; ?>" id="code" size="30" <?php if ($this->method == 'edit') echo 'disabled="disabled"'; ?> /></td>
	  </tr>
	  <tr>
	    <th><?php echo $this->fieldInfos['name']['name']; ?>：</th>
		<td class="y-bg"><input type="text" class="input-text" name="name" value="<?php if (isset($this->currentInfo['name'])) echo $this->currentInfo['name']; ?>" id="name"  size="30"/></td>
	  </tr>
	  <tr>
	    <th><?php echo $this->fieldInfos['rate']['name']; ?>：</th>
		<td class="y-bg"><input type="text" class="input-text" name="rate" value="<?php if (isset($this->currentInfo['rate'])) echo $this->currentInfo['rate']; ?>" id="rate"  size="30"/></td>
	  </tr>
	  <tr>
	    <th><?php echo $this->fieldInfos['listorder']['name']; ?>：</th>
		<td class="y-bg"><input type="text" class="input-text" name="listorder" value="<?php if (isset($this->currentInfo['listorder'])) echo $this->currentInfo['listorder']; ?>" id="listorder"  size="30"/></td>
	  </tr>
      <tr>
        <th><?php echo $this->fieldInfos['status']['name']; ?></th>
        <td><input type="radio" name="status" value="0" <?php if (!isset($this->currentInfo['status']) || empty($this->currentinfo['status'])) echo "checked='checked'"; ?>' /> <?php echo $this->fieldInfos['status']['infos']['0']; ?> <label><input type="radio" name="status" value="1" <?php if (isset($this->currentInfo['status']) || !empty($this->currentinfo['status'])) echo "checked='checked'"; ?>/><?php echo $this->fieldInfos['status']['infos']['1']; ?></td>
      </tr>	  
      <tr>
        <th><?php echo $this->fieldInfos['description']['name']; ?></th>
        <td><textarea name="description" rows="2" cols="20" id="description" class="inputtext" style="height:100px;width:500px;"><?php if (isset($this->currentInfo['description'])) echo $this->currentInfo['description']; ?></textarea></td>
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