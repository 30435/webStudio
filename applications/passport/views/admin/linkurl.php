<?php $this->load->view('header_admin') ?>
<?php if ($this->method == 'listinfo') { ?>
<div class="pad_10">
  <div class="table-list">
    <table width="100%" cellspacing="0">
      <thead>
        <tr>
		  <th width="10%"><?php echo $this->fieldInfos['listorder']['name']; ?></th>
          <th width="80"><?php echo $this->fieldInfos['id']['name']; ?></th>
          <th><?php echo $this->fieldInfos['name']['name']; ?></th>
		  <th><?php echo $this->fieldInfos['type']['name']; ?></th>
		  <th><?php echo $this->fieldInfos['url']['name']; ?></th>
		  <th><?php echo $this->fieldInfos['logo']['name']; ?></th>
		  <th><?php echo $this->fieldInfos['add_time']['name']; ?></th>
		  <th><?php echo $this->fieldInfos['status']['name']; ?></th>
          <th width="150"><?php echo $this->lang->line('admin_operation'); ?></th>
        </tr>
      </thead>
      <tbody>
        <?php if (is_array($this->infos)) { foreach ($this->infos as $info) { ?>
        <tr>
		  <td width="10%" align="center"><input name='listorders[<?php echo $info['id']; ?>]' type='text' size='3' value='<?php echo $info['listorder']; ?>' class="input-text-c"></td>
          <td width="80" align="center"><?php echo $info['id']; ?></td>
          <td align="center"><a href="<?php echo $info['url']; ?>" target="_blank"><?php echo $info['name']; ?></a></td>
		  <td align="center"><?php echo $info['type']; ?></td>
		  <td align="center"><a href="<?php echo $info['url']; ?>" target="_blank"><?php echo $info['url']; ?></a></td>
		  <td align="center"><a href="<?php echo $info['url']; ?>" target="_blank"><?php echo $info['logo']; ?></a></td>
		  <td align="center"><?php echo $info['add_time']; ?></td>
		  <td align="center"><?php echo $info['status']; ?></td>
          <td align="center">
		  	<?php foreach ($this->operationMenus as $operationMenu) { if (!in_array($operationMenu, array_keys($this->appMenus))) continue; $menu = $this->appMenus[$operationMenu]; $menuUrl = $operationMenu == 'delete' ? 'javascript:confirmurl("' . $menu['url'] . '?id=' . $info['id'] . '", "确认要删除 『 ' . $info['name'] . '』 吗？");' : $menu['url'] . '?id=' . $info['id']; ?>
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
<script type="text/javascript">
document.domain='<?php echo $this->frontDomain; ?>';
<!--
$(function(){
  $.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
  $("#name").formValidator({onshow:"请输入友链名称",onfocus:"友链名称不能为空。"}).inputValidator({min:1,max:999,onerror:"友链名称不能为空。"});
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
        <th width="80"><?php echo $this->fieldInfos['name']['name']; ?>:</th> 
        <td><input type="text" name="name" class="input-text" id="name" value="<?php if (isset($this->currentInfo['name'])) echo $this->currentInfo['name']; ?>" /></input></td>
      </tr>
	  <tr>
	    <th width="100"><?php echo $this->fieldInfos['type']['name']; ?>：</th>
		<td><select name="type" id="type"><?php echo $this->selectLinkurlType; ?></select></td>
	  </tr>
	  <tr>
	    <th><?php echo $this->fieldInfos['url']['name']; ?>：</th>
		<td class="y-bg"><input type="text" class="input-text" name="url" value="<?php if (isset($this->currentInfo['url'])) echo $this->currentInfo['url']; ?>" id="url"  size="100"/></td>
	  </tr>
	  <tr>
        <th><?php echo $this->fieldInfos['logo']['name']; ?>:</th>
        <td>
	      <script type="text/javascript" src="<?php echo $this->staticUrl; ?>common/swfupload/swf2ckeditor.js"></script>
		  <input type="text" name="logo" id="logo" value="<?php if (isset($this->currentInfo['logo'])) echo $this->currentInfo['logo']; ?>" size="50" class="" />  
		  <input type="button" class="button" onclick="javascript:flashupload('<?php echo $this->appInfos['passport']['url'];?>attachment/swfupload?', 'image_images', '附件上传','logo',submit_images,'1,jpg|jpeg|gif|bmp|png,1,,,0','content','','5afc0afaab383b2983ada373112bad77')"/ value="上传图片">
		</td>
      </tr>
      <tr>
	    <th><?php echo $this->fieldInfos['listorder']['name']; ?>：</th>
		<td class="y-bg"><input type="text" class="input-text" name="listorder" value="<?php if (isset($this->currentInfo['listorder'])) echo $this->currentInfo['listorder']; ?>" id="listorder"  size="30"/></td>
	  </tr>
      <tr>
		<th width="80"><?php echo $this->fieldInfos['add_time']['name']; ?>:</th>
		<td class="y-bg"><input id="add_time" type="text" name="add_time" value="<?php if(!empty($this->currentInfo['add_time'])) echo date('Y-m-d H:i:s',$this->currentInfo['add_time']);?>"></td>
	  </tr>
      <tr>
        <th><?php echo $this->fieldInfos['status']['name']; ?></th>
        <td>
		  <input type="radio" name="status" value="0" <?php if (!isset($this->currentInfo['status']) || empty($this->currentinfo['status'])) echo "checked='checked'"; ?>' /> <?php echo $this->fieldInfos['status']['infos']['0']; ?> 
		  <label><input type="radio" name="status" value="1" <?php if (isset($this->currentInfo['status']) && !empty($this->currentInfo['status'])) echo "checked='checked'"; ?>/><?php echo $this->fieldInfos['status']['infos']['1']; ?>
		</td>
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
<script type="text/javascript">
Calendar.setup({
    weekNumbers: true,
    inputField : "add_time",
    trigger    : "add_time",
    dateFormat: "%Y-%m-%d  %H:%M",
    showTime: true,
    minuteStep: 1,
    onSelect   : function() {this.hide();}
});
</script>
<?php } ?>
</body>
</html>