<?php $this->load->view('header_admin') ?>
<?php if ($this->method == 'listinfo') { ?>
<div class="pad_10">
  <div class="table-list">
    <table width="100%" cellspacing="0">
      <thead>
        <tr>
          <th width="80"><?php echo $this->fieldInfos['id']['name']; ?></th>
          <th><?php echo $this->fieldInfos['name']['name']; ?></th>
		  <th><?php echo $this->fieldInfos['space_type']['name']; ?></th>
		  <th><?php echo $this->fieldInfos['width']['name']; ?></th>
		  <th><?php echo $this->fieldInfos['height']['name']; ?></th>
		  <th><?php echo $this->fieldInfos['description']['name']; ?></th>
		  <th><?php echo $this->fieldInfos['space_status']['name']; ?></th>
          <th width="150"><?php echo $this->lang->line('admin_operation'); ?></th>
        </tr>
      </thead>
      <tbody>
        <?php if (is_array($this->infos)) { foreach ($this->infos as $info) { ?>
        <tr>
          <td width="80" align="center"><?php echo $info['id']; ?></td>
          <td align="center"><?php echo $info['name']; ?></td>
		  <td align="center"><?php echo $info['space_type']; ?></td>
		  <td align="center"><?php echo $info['width']; ?></td>
		  <td align="center"><?php echo $info['height']; ?></td>
		  <td align="center"><?php echo $info['description']; ?></td>
		  <td align="center"><?php echo $info['space_status']; ?></td>
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
        <th><?php echo $this->fieldInfos['space_type']['name']; ?>:</th>
        <td><select name="space_type" id="space_type"><?php echo $this->selectSpaceType; ?></select></td>
      </tr>
	  <tr>
	    <th><?php echo $this->fieldInfos['width']['name']; ?>：</th>
		<td class="y-bg"><input type="text" class="input-text" name="width" value="<?php if (isset($this->currentInfo['width'])) echo $this->currentInfo['width']; ?>" id="width"  size="30"/></td>
	  </tr>
	  <tr>
	    <th><?php echo $this->fieldInfos['height']['name']; ?>：</th>
		<td class="y-bg"><input type="text" class="input-text" name="height" value="<?php if (isset($this->currentInfo['height'])) echo $this->currentInfo['height']; ?>" id="height"  size="30"/></td>
	  </tr>
      <tr>
        <th><?php echo $this->fieldInfos['space_status']['name']; ?></th>
        <td><input type="radio" name="space_status" value="0" <?php if (!isset($this->currentInfo['space_status']) || empty($this->currentinfo['space_status'])) echo "checked='checked'"; ?>' /> <?php echo $this->fieldInfos['space_status']['infos']['0']; ?> <label><input type="radio" name="space_status" value="1" <?php if (isset($this->currentInfo['space_status']) || !empty($this->currentinfo['space_status'])) echo "checked='checked'"; ?>/><?php echo $this->fieldInfos['space_status']['infos']['1']; ?></td>
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