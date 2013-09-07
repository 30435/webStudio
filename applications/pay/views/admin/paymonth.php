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
    	  <th align="center"><input type="checkbox" value="" id="check_box" onclick="selectall('mulIds[]');"></th>
		  <th><?php echo $this->fieldInfos['listorder']['name']; ?></th>
		  <th><?php echo $this->fieldInfos['id']['name']; ?></th>
		  <th align="center"><?php echo $this->fieldInfos['name']['name']; ?></th>
		  <th align="center"><?php echo $this->fieldInfos['money']['name']; ?></th>
		  <th class="text-c"><?php echo $this->lang->line('admin_operation'); ?></th>
		</tr>
      </thead>
      <tbody>
	  <?php if (is_array($this->infos) && !empty($this->infos)) { foreach ($this->infos as $info) { ?>
        <tr>
		  <td align="center"><input type="checkbox" name="mulIds[]" value="<?php echo $info['id']; ?>"></td>
		  <td align="center"><input name='listorders[<?php echo $info['id']; ?>]' type='text' size='3' value='<?php echo $info['listorder']; ?>' class="input-text-c"></td>
          <td align="center"><?php echo $info['id']; ?></td>
          <td align="center"><?php echo $info['name']; ?></td>
		  <td align="center"><?php echo $info['money']; ?></td>
          <td class="text-c">
		  	<?php foreach ($this->operationMenus as $operationMenu) { if (!in_array($operationMenu, array_keys($this->appMenus))) continue; $menu = $this->appMenus[$operationMenu]; $menuUrl = $operationMenu == 'delete' ? 'javascript:confirmurl("' . $menu['url'] . '?id=' . $info['id'] . '", "确认要删除 『 ' . $info['name'] . '』 吗？");' : $menu['url'] . '?id=' . $info['id']; ?>
    		<a href='<?php echo $menuUrl; ?>'><?php echo $menu['name']; ?></a> |
    		<?php } ?>
          </td>
        </tr>
      <?php } } ?>
      </tbody>
    </table>
    <div class="btn"><label for="check_box">全选/取消</label><input type="submit" class="button" name="dosubmit" value="排序" /></div>
  </form>
  <div id="pages"> <?php echo $this->pageStr; ?></div>
</div>
<?php } else { ?>
<style type="text/css">
.radio-label{ border-top:1px solid #e4e2e2; border-left:1px solid #e4e2e2}
.radio-label td{ border-right:1px solid #e4e2e2; border-bottom:1px solid #e4e2e2;background:#f6f9fd}
</style>
<script type="text/javascript">
document.domain='<?php echo $this->frontDomain; ?>';
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
	    <th><?php echo $this->fieldInfos['name']['name']; ?>：</th>
		<td class="y-bg"><input type="text" class="input-text" name="name" value="<?php if (isset($this->currentInfo['name'])) echo $this->currentInfo['name']; ?>" id="name"  size="30"/></td>
	  </tr>
	  <tr>
	    <th><?php echo $this->fieldInfos['money']['name']; ?>：</th>
		<td class="y-bg"><input type="text" class="input-text" name="money" value="<?php if (isset($this->currentInfo['money'])) echo $this->currentInfo['money']; ?>" id="money"  size="30"/></td>
	  </tr>
	  <tr>
	    <th><?php echo $this->fieldInfos['listorder']['name']; ?>：</th>
		<td class="y-bg"><input type="text" class="input-text" name="listorder" value="<?php if (isset($this->currentInfo['listorder'])) echo $this->currentInfo['listorder']; ?>" id="listorder"  size="30"/></td>
	  </tr>
 	  <tr>
	    <th><?php echo $this->fieldInfos['unit']['name']; ?>：</th>
		<td class="y-bg"><select name="unit" id="unit"><?php echo $this->selectUnit; ?></select></td>
	  </tr>
	  <tr>
        <th><?php echo $this->fieldInfos['thumb']['name']; ?>:</th>
        <td>
	      <script type="text/javascript" src="<?php echo $this->staticUrl; ?>common/swfupload/swf2ckeditor.js"></script>
		  <input type="text" name="thumb" id="thumb" value="<?php if (isset($this->currentInfo['thumb'])) echo $this->currentInfo['thumb']; ?>" size="50" class="" />  
		  <input type="button" class="button" onclick="javascript:flashupload('image_images', '附件上传','thumb',submit_images,'1,jpg|jpeg|gif|bmp|png,1,,,0','content','','5afc0afaab383b2983ada373112bad77')"/ value="上传图片">
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