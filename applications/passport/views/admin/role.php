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
    	  <th width="35" align="center"><input type="checkbox" value="" id="check_box" onclick="selectall('mulIds[]');"></th>
		  <th width="10%"><?php echo $this->fieldInfos['listorder']['name']; ?></th>
		  <th width="10%"><?php echo $this->fieldInfos['id']['name']; ?></th>
		  <th width="15%" align="center"><?php echo $this->fieldInfos['name']['name']; ?></th>
		  <th width="256" align="center"><?php echo $this->fieldInfos['description']['name']; ?></th>
		  <th width="5%" align="center"><?php echo $this->fieldInfos['status']['name']; ?></th>
		  <th  class="text-c"><?php echo $this->lang->line('admin_operation'); ?></th>
		</tr>
      </thead>
      <tbody>
	  <?php if (is_array($this->infos) && !empty($this->infos)) { foreach ($this->infos as $info) { ?>
        <tr>
		  <td align="center"><input type="checkbox" name="mulIds[]" value="<?php echo $info['id']; ?>"></td>
		  <td width="10%" align="center"><input name='listorders[<?php echo $info['id']; ?>]' type='text' size='3' value='<?php echo $info['listorder']; ?>' class="input-text-c"></td>
          <td width="10%" align="center"><?php echo $info['id']; ?></td>
          <td width="15%" align="center"><?php echo $info['name']; ?></td>
		  <td width="256" align="center"><?php echo $info['description']; ?></td>
		  <td width="5%" align="center"><?php echo $info['status']; ?></td>
          <td class="text-c">
		  	<?php foreach ($this->operationMenus as $operationMenu) { if (!in_array($operationMenu, array_keys($this->appMenus))) continue; $menu = $this->appMenus[$operationMenu]; $menuUrl = $operationMenu == 'delete' ? 'javascript:confirmurl("' . $menu['url'] . '?id=' . $info['id'] . '", "确认要删除 『 ' . $info['name'] . '』 吗？");' : $menu['url'] . '?id=' . $info['id']; ?>
    		<a href='<?php echo $menuUrl; ?>'><?php echo $menu['name']; ?></a> |
    		<?php } ?>

</td>
        </tr>
      <?php } } ?>
      </tbody>
    </table>
    <div class="btn"><label for="check_box">全选/取消</label><input name="submit" type="submit" class="button" value="删除选中" onClick="document.myform.action='<?php echo $this->appMenus['delete']['url'] . '?action=deleteMul'; ?>';return confirm('您确定要删除吗？')">&nbsp;&nbsp; <input type="submit" class="button" name="dosubmit" value="排序" /></div>
  </form>
  <div id="pages"> <?php echo $this->pageStr; ?></div>
</div>
<script language="javascript">
$("#urlForward").val(this.location.href);
</script>
<?php } else {?>
<script type="text/javascript">
<!--
$(function(){
  $.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
  $("#name").formValidator({onshow:"请输入角色名称",onfocus:"角色名称不能为空。"}).inputValidator({min:1,max:999,onerror:"角色名称不能为空。"});
})
//-->
</script>
<style type="text/css">
.radio-label{ border-top:1px solid #e4e2e2; border-left:1px solid #e4e2e2}
.radio-label td{ border-right:1px solid #e4e2e2; border-bottom:1px solid #e4e2e2;background:#f6f9fd}
</style>
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
        <td><?php echo $this->fieldInfos['name']['name']; ?></td> 
        <td><input type="text" name="name" value="<?php if (isset($this->currentInfo['name'])) echo $this->currentInfo['name']; ?>" class="input-text" id="name"></input></td>
      </tr>
      <tr>
        <td><?php echo $this->fieldInfos['description']['name']; ?></td>
        <td><textarea name="description" rows="2" cols="20" id="description" class="inputtext" style="height:100px;width:500px;"><?php if (isset($this->currentInfo['description'])) echo $this->currentInfo['description']; ?></textarea></td>
      </tr>
      <tr>
        <td><?php echo $this->fieldInfos['status']['name']; ?></td>
        <td><input type="radio" name="status" value="0" <?php if (!isset($this->currentInfo['status']) || empty($this->currentinfo['status'])) echo "checked='checked'"; ?>' /> <?php echo $this->fieldInfos['status']['infos']['0']; ?> <label><input type="radio" name="status" value="1" <?php if (isset($this->currentInfo['status']) || !empty($this->currentinfo['status'])) echo "checked='checked'"; ?>/><?php echo $this->fieldInfos['status']['infos']['1']; ?></td>
      </tr>
	  <tr>
	    <td><?php echo $this->fieldInfos['listorder']['name']; ?></td>
        <td><input type="text" name="listorder" size="3" class="input-text" value="<?php if (isset($this->currentInfo['sescription'])) echo $this->currentInfo['description']; ?>" /></td>
      </tr>
    </table>
    <div class="bk15"></div>
    <?php if ($this->method != 'view') { ?><input type="submit" class="button" value="<?php echo $this->lang->line('admin_submit'); ?>" name="dosubmit"><?php } ?>
    </form>
  </div>
</div>
<?php } ?>
</body>
</html>


