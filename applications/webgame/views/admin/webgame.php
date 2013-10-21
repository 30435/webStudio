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
		  <th width="5%" align="center"><?php echo $this->fieldInfos['type']['name']; ?></th>
		  <th width="15%" align="center"><?php echo $this->fieldInfos['name']['name']; ?></th>
		  <th width="80" align="center"><?php echo $this->fieldInfos['code']['name']; ?></th>
		  <th width="100" align="center"><?php echo $this->fieldInfos['url_home']['name']; ?></th>
		  <th width="100" align="center"><?php echo $this->fieldInfos['url_server']['name']; ?></th>
		  <th width="5%" align="center"><?php echo $this->fieldInfos['ispay']['name']; ?></th>
		  <th width="5%" align="center"><?php echo $this->fieldInfos['status']['name']; ?></th>
		  <th class="text-c"><?php echo $this->lang->line('admin_operation'); ?></th>
		</tr>
      </thead>
      <tbody>
	  <?php if (is_array($this->infos) && !empty($this->infos)) { foreach ($this->infos as $info) { ?>
        <tr>
		  <td align="center"><input type="checkbox" name="mulIds[]" value="<?php echo $info['id']; ?>"></td>
		  <td width="10%" align="center"><input name='listorders[<?php echo $info['id']; ?>]' type='text' size='3' value='<?php echo $info['listorder']; ?>' class="input-text-c"></td>
          <td width="10%" align="center"><?php echo $info['id']; ?></td>
		  <td width="10%" align="center"><?php echo $info['type']; ?></td>
          <td width="15%" align="center"><?php echo $info['name']; ?></td>
		  <td width="80" align="center"><?php echo $info['code']; ?></td>
		  <td width="100" align="center"><a href="<?php echo $info['url_home']; ?>" target="_blank"><?php echo $this->fieldInfos['url_home']['name']; ?></a></td>
		  <td width="100" align="center"><a href="<?php echo $info['url_server']; ?>" target="_blank"><?php echo $this->fieldInfos['url_server']['name']; ?></a></td>
		  <td width="5%" align="center"><?php echo $info['ispay']; ?></td>
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
    <div class="btn"><label for="check_box">全选/取消</label><input type="submit" class="button" name="dosubmit" value="排序" /></div>
  </form>
  <div id="pages"> <?php echo $this->pageStr; ?></div>
</div>
<script language="javascript">
$("#urlForward").val(this.location.href);
</script>
<?php } else {?>
<script language="javascript">
document.domain='<?php echo $this->frontDomain; ?>';
</script>
<?php if ($this->method == 'add') { ?>
<script type="text/javascript">
<!--
$(function(){
  $.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
  $("#code").formValidator({onshow:"请输入2-10为小写字母的游戏代码",onfocus:"请输入游戏代码"}).regexValidator({regexp:"^[a-z]{2,10}$",onerror:"2-10个小写字母"}).inputValidator({min:1,onerror:"请输入游戏代码"}).ajaxValidator({
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
	},buttons: $("#dosubmit"),onerror : "游戏代码已存在",onwait : "正在连接，请稍候。"}
  );
  $("#name").formValidator({onshow:"请输入游戏名称",onfocus:"游戏名称不能为空。"}).inputValidator({min:1,max:999,onerror:"游戏名称不能为空。"});
})
//-->
</script>
<?php } else if ($this->method == 'edit') { ?>
<script type="text/javascript">
<!--
$(function(){
  $.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
  $("#name").formValidator({onshow:"请输入游戏名称",onfocus:"游戏名称不能为空。"}).inputValidator({min:1,max:999,onerror:"游戏名称不能为空。"});
})
//-->
</script>
<?php } ?>
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

	<fieldset>
	  <legend>基本配置</legend>
	  <table width="100%"  class="table_form">
	  <tr>
	    <th width="100"><?php echo $this->fieldInfos['type']['name']; ?>：</th>
		<td><select name="type" id="type"><?php echo $this->selectWebgameType; ?></select></td>
	  </tr>
	  <tr>
	    <th><?php echo $this->fieldInfos['code']['name']; ?>：</th>
		<td class="y-bg"><input type="text" class="input-text" name="code" value="<?php if (isset($this->currentInfo['code'])) echo $this->currentInfo['code']; ?>" id="code" size="30" <?php if ($this->method == 'edit') echo 'disabled="disabled"'; ?> /></td>
	  </tr>
	  <tr>
	    <th><?php echo $this->fieldInfos['name']['name']; ?>：</th>
		<td class="y-bg"><input type="text" class="input-text" name="name" value="<?php if (isset($this->currentInfo['name'])) echo $this->currentInfo['name']; ?>" id="name"  size="30"/></td>
	  </tr>
	  <tr>
	    <th><?php echo $this->fieldInfos['listorder']['name']; ?>：</th>
		<td class="y-bg"><input type="text" class="input-text" name="listorder" value="<?php if (isset($this->currentInfo['listorder'])) echo $this->currentInfo['listorder']; ?>" id="listorder"  size="30"/></td>
	  </tr>
	  <tr>
	    <th><?php echo $this->fieldInfos['url_webgame']['name']; ?>：</th>
		<td class="y-bg"><input type="text" class="input-text" name="url_webgame" value="<?php if (isset($this->currentInfo['url_webgame'])) echo $this->currentInfo['url_webgame']; ?>" id="url_webgame"  size="100"/></td>
	  </tr>
	  <tr>
	    <th><?php echo $this->fieldInfos['url_home']['name']; ?>：</th>
		<td class="y-bg"><input type="text" class="input-text" name="url_home" value="<?php if (isset($this->currentInfo['url_home'])) echo $this->currentInfo['url_home']; ?>" id="url_home"  size="100"/></td>
	  </tr>
	  <tr>
	    <th><?php echo $this->fieldInfos['url_server']['name']; ?>：</th>
		<td class="y-bg"><input type="text" class="input-text" name="url_server" value="<?php if (isset($this->currentInfo['url_server'])) echo $this->currentInfo['url_server']; ?>" id="url_server"  size="100"/></td>
	  </tr>
	  <tr>
	    <th><?php echo $this->fieldInfos['url_bbs']['name']; ?>：</th>
		<td class="y-bg"><input type="text" class="input-text" name="url_bbs" value="<?php if (isset($this->currentInfo['url_bbs'])) echo $this->currentInfo['url_bbs']; ?>" id="url_bbs"  size="100"/></td>
	  </tr>
	  <tr>
	    <th width="80"><?php echo $this->fieldInfos['status']['name']; ?>：</th>
		<td><select name="status" id="status"><?php echo $this->selectWebgameStatus; ?></select></td>
	  </tr>
      <tr>
        <th><?php echo $this->fieldInfos['ispay']['name']; ?></th>
        <td><input type="radio" name="ispay" value="0" <?php if (!isset($this->currentInfo['ispay']) || empty($this->currentinfo['ispay'])) echo "checked='checked'"; ?>' /> <?php echo $this->fieldInfos['ispay']['infos']['0']; ?> <label><input type="radio" name="ispay" value="1" <?php if (isset($this->currentInfo['ispay']) || !empty($this->currentinfo['ispay'])) echo "checked='checked'"; ?>/><?php echo $this->fieldInfos['ispay']['infos']['1']; ?></td>
      </tr>
	  </table>
	</fieldset>

	<div class="bk15"></div>
	<fieldset>
	  <legend>扩展信息</legend>
	  <table width="100%"  class="table_form">
	  <tr>
	    <th width="110"><?php echo $this->fieldInfos['coin_name']['name']; ?>：</th>
		<td class="y-bg"><input type="text" class="input-text" name="coin_name" value="<?php if (isset($this->currentInfo['coin_name'])) echo $this->currentInfo['coin_name']; ?>" id="coin_name"  size="30"/></td>
	  </tr>
	  <tr>
	    <th><?php echo $this->fieldInfos['coin_unit']['name']; ?>：</th>
		<td class="y-bg"><input type="text" class="input-text" name="coin_unit" value="<?php if (isset($this->currentInfo['coin_unit'])) echo $this->currentInfo['coin_unit']; ?>" id="coin_unit"  size="30"/></td>
	  </tr>
	  <tr>
	    <th><?php echo $this->fieldInfos['coin_rate']['name']; ?>：</th>
		<td class="y-bg"><input type="text" class="input-text" name="coin_rate" value="<?php if (isset($this->currentInfo['coin_rate'])) echo $this->currentInfo['coin_rate']; ?>" id="coin_rate"  size="30"/></td>
	  </tr>
	  <tr>
        <th><?php echo $this->fieldInfos['pic_small']['name']; ?>:</th>
        <td>
	      <script type="text/javascript" src="<?php echo $this->staticUrl; ?>common/swfupload/swf2ckeditor.js"></script>
		  <input type="text" name="pic_small" id="pic_small" value="<?php if (isset($this->currentInfo['pic_small'])) echo $this->currentInfo['pic_small']; ?>" size="50" class="" />  
		  <input type="button" class="button" onclick="javascript:flashupload('<?php echo $this->appInfos['passport']['url'];?>attachment/swfupload?', 'image_images', '附件上传','pic_small',submit_images,'1,jpg|jpeg|gif|bmp|png,1,,,0','content','','5afc0afaab383b2983ada373112bad77')"/ value="上传图片">
		</td>
      </tr>
	  <tr>
        <th><?php echo $this->fieldInfos['pic_middle']['name']; ?>:</th>
        <td>
	      <script type="text/javascript" src="<?php echo $this->staticUrl; ?>common/swfupload/swf2ckeditor.js"></script>
		  <input type="text" name="pic_middle" id="pic_middle" value="<?php if (isset($this->currentInfo['pic_middle'])) echo $this->currentInfo['pic_middle']; ?>" size="50" class="" />  
		  <input type="button" class="button" onclick="javascript:flashupload('<?php echo $this->appInfos['passport']['url'];?>attachment/swfupload?', 'image_images', '附件上传','pic_middle',submit_images,'1,jpg|jpeg|gif|bmp|png,1,,,0','content','','5afc0afaab383b2983ada373112bad77')"/ value="上传图片">
		</td>
      </tr>
	  <tr>
        <th><?php echo $this->fieldInfos['pic_big']['name']; ?>:</th>
        <td>
	      <script type="text/javascript" src="<?php echo $this->staticUrl; ?>common/swfupload/swf2ckeditor.js"></script>
		  <input type="text" name="pic_big" id="pic_big" value="<?php if (isset($this->currentInfo['pic_big'])) echo $this->currentInfo['pic_big']; ?>" size="50" class="" />  
		  <input type="button" class="button" onclick="javascript:flashupload('<?php echo $this->appInfos['passport']['url'];?>attachment/swfupload?', 'image_images', '附件上传','pic_big',submit_images,'1,jpg|jpeg|gif|bmp|png,1,,,0','content','','5afc0afaab383b2983ada373112bad77')"/ value="上传图片">
		</td>
      </tr>
      <tr>
		<th width="80"><?php echo $this->fieldInfos['start_maintain']['name']; ?>:</th>
		<td class="y-bg"><input id="start_maintain" type="text" name="start_maintain" value="<?php if(!empty($this->currentInfo['start_maintain'])) echo date('Y-m-d H:i:s',$this->currentInfo['start_maintain']);?>"></td>
	  </tr>
      <tr>
		<th width="80"><?php echo $this->fieldInfos['end_maintain']['name']; ?>:</th>
		<td class="y-bg"><input id="end_maintain" type="text" name="end_maintain" value="<?php if(!empty($this->currentInfo['end_maintain'])) echo date('Y-m-d H:i:s',$this->currentInfo['end_maintain']);?>"></td>
	  </tr>
	  <tr>
	    <th><?php echo $this->fieldInfos['url_maintain']['name']; ?>：</th>
		<td class="y-bg"><input type="text" class="input-text" name="url_maintain" value="<?php if (isset($this->currentInfo['url_maintain'])) echo $this->currentInfo['url_maintain']; ?>" id="url_maintain"  size="100"/></td>
	  </tr>
      <tr>
        <th><?php echo $this->fieldInfos['description']['name']; ?></th>
        <td><textarea name="description" rows="2" cols="20" id="description" class="inputtext" style="height:100px;width:500px;"><?php if (isset($this->currentInfo['description'])) echo $this->currentInfo['description']; ?></textarea></td>
      </tr>
	  </table>
	</fieldset>
    <div class="bk15"></div>
    <?php if ($this->method != 'view') { ?><input type="submit" class="button" value="<?php echo $this->lang->line('admin_submit'); ?>" name="dosubmit"><?php } ?>
    </form>
  </div>
</div>
<script type="text/javascript">
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


