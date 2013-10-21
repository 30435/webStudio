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
		  <th align="center"><?php echo $this->fieldInfos['code']['name']; ?></th>
		  <th align="center"><?php echo $this->fieldInfos['author']['name']; ?></th>
		  <th align="center"><?php echo $this->fieldInfos['type']['name']; ?></th>
		  <th align="center"><?php echo $this->fieldInfos['num_words']['name']; ?></th>
		  <th align="center"><?php echo $this->fieldInfos['is_publish']['name']; ?></th>
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
		  <td align="center"><?php echo $info['code']; ?></td>
		  <td align="center"><?php echo $info['author']; ?></td>
		  <td align="center"><?php echo $info['type']; ?></td>
		  <td align="center"><?php echo $info['num_words']; ?></td>
		  <td align="center"><?php echo $info['is_publish']; ?></td>
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
<?php if ($this->method == 'add') { ?>
<script type="text/javascript">
<!--
$(function(){
  $.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
  $("#code").formValidator({onshow:"请输入2-10为小写字母的图书代码",onfocus:"请输入图书代码"}).regexValidator({regexp:"^[a-z]{2,10}$",onerror:"2-10个小写字母"}).inputValidator({min:1,onerror:"请输入图书代码"}).ajaxValidator({
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
	},buttons: $("#dosubmit"),onerror : "图书代码已存在",onwait : "正在连接，请稍候。"}
  );
  $("#name").formValidator({onshow:"请输入图书名称",onfocus:"图书名称不能为空。"}).inputValidator({min:1,max:999,onerror:"图书名称不能为空。"});
})
//-->
</script>
<?php } else if ($this->method == 'edit') { ?>
<script type="text/javascript">
<!--
$(function(){
  $.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
  $("#name").formValidator({onshow:"请输入图书名称",onfocus:"图书名称不能为空。"}).inputValidator({min:1,max:999,onerror:"图书名称不能为空。"});
})
//-->
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
        <th width="120"><?php echo $this->fieldInfos['name']['name']; ?>:</th> 
        <td><input type="text" name="name" class="input-text" id="name" value="<?php if (isset($this->currentInfo['name'])) echo $this->currentInfo['name']; ?>" /></input></td>
      </tr>
      <tr>
        <th width="120"><?php echo $this->fieldInfos['author']['name']; ?>:</th> 
        <td><input type="text" name="author" class="input-text" id="author" value="<?php if (isset($this->currentInfo['author'])) echo $this->currentInfo['author']; ?>" /></input></td>
      </tr>
	  <tr>
	    <th><?php echo $this->fieldInfos['code']['name']; ?>：</th>
		<td class="y-bg"><input type="text" class="input-text" name="code" value="<?php if (isset($this->currentInfo['code'])) echo $this->currentInfo['code']; ?>" id="code" size="30" <?php if ($this->method == 'edit') echo 'disabled="disabled"'; ?> /></td>
	  </tr>
	  <tr>
	    <th width="100"><?php echo $this->fieldInfos['type']['name']; ?>：</th>
		<td><select name="type" id="type"><?php echo $this->selectType; ?></select></td>
	  </tr>
	  <tr>
	    <th><?php echo $this->fieldInfos['listorder']['name']; ?>：</th>
		<td class="y-bg"><input type="text" class="input-text" name="listorder" value="<?php if (isset($this->currentInfo['listorder'])) echo $this->currentInfo['listorder']; ?>" id="listorder"  size="30"/></td>
	  </tr>
	  <tr>
	    <th><?php echo $this->fieldInfos['num_words']['name']; ?>：</th>
		<td class="y-bg"><input type="text" class="input-text" name="num_words" value="<?php if (isset($this->currentInfo['num_words'])) echo $this->currentInfo['num_words']; ?>" id="num_words"  size="30"/></td>
	  </tr>
      <tr>
        <th><?php echo $this->fieldInfos['is_publish']['name']; ?></th>
        <td><input type="radio" name="is_publish" value="0" <?php if (!isset($this->currentInfo['is_publish']) || empty($this->currentinfo['is_publish'])) echo "checked='checked'"; ?>' /> <?php echo $this->fieldInfos['is_publish']['infos']['0']; ?> <label><input type="radio" name="is_publish" value="1" <?php if (isset($this->currentInfo['is_publish']) || !empty($this->currentinfo['is_publish'])) echo "checked='checked'"; ?>/><?php echo $this->fieldInfos['is_publish']['infos']['1']; ?></td>
      </tr>
	  <tr>
        <th><?php echo $this->fieldInfos['fcover_small']['name']; ?>:</th>
        <td>
	      <script type="text/javascript" src="<?php echo $this->staticUrl; ?>common/swfupload/swf2ckeditor.js"></script>
		  <input type="text" name="fcover_small" id="fcover_small" value="<?php if (isset($this->currentInfo['fcover_small'])) echo $this->currentInfo['fcover_small']; ?>" size="50" class="" />  
		  <input type="button" class="button" onclick="javascript:flashupload('<?php echo $this->appInfos['passport']['url'];?>attachment/swfupload?', 'image_images', '附件上传','fcover_small',submit_images,'1,jpg|jpeg|gif|bmp|png,1,,,0','content','','5afc0afaab383b2983ada373112bad77')"/ value="上传图片">
		</td>
      </tr>
	  <tr>
        <th><?php echo $this->fieldInfos['fcover']['name']; ?>:</th>
        <td>
	      <script type="text/javascript" src="<?php echo $this->staticUrl; ?>common/swfupload/swf2ckeditor.js"></script>
		  <input type="text" name="fcover" id="fcover" value="<?php if (isset($this->currentInfo['fcover'])) echo $this->currentInfo['fcover']; ?>" size="50" class="" />  
		  <input type="button" class="button" onclick="javascript:flashupload('<?php echo $this->appInfos['passport']['url'];?>attachment/swfupload?', 'image_images', '附件上传','fcover',submit_images,'1,jpg|jpeg|gif|bmp|png,1,,,0','content','','5afc0afaab383b2983ada373112bad77')"/ value="上传图片">
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
    inputField : "time_start",
    trigger    : "time_start",
    dateFormat: "%Y-%m-%d  %H:%M",
    showTime: true,
    minuteStep: 1,
    onSelect   : function() {this.hide();}
});

Calendar.setup({
    weekNumbers: true,
    inputField : "start_maintain",
    trigger    : "start_maintain",
    dateFormat: "%Y-%m-%d  %H:%M",
    showTime: true,
    minuteStep: 1,
    onSelect   : function() {this.hide();}
});

Calendar.setup({
    weekNumbers: true,
    inputField : "end_maintain",
    trigger    : "end_maintain",
    dateFormat: "%Y-%m-%d  %H:%M",
    showTime: true,
    minuteStep: 1,
    onSelect   : function() {this.hide();}
});
</script>
<?php } ?>
</body>
</html>