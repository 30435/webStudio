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
		  <th align="center"><?php echo $this->fieldInfos['webgame_code']['name']; ?></th>
		  <th align="center"><?php echo $this->fieldInfos['ispay']['name']; ?></th>
		  <th align="center"><?php echo $this->fieldInfos['status']['name']; ?></th>
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
		  <td align="center"><?php echo $info['webgame_code']; ?></td>
		  <td align="center"><?php echo $info['ispay']; ?></td>
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
  $(document).ready(function() {
	$.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
    $("#name").formValidator({onshow:"请输入服务器名称",onfocus:"服务器名称不能为空。"}).inputValidator({min:1,max:999,onerror:"服务器名称不能为空。"});
	$("#webgame_code").formValidator({onshow:"请选择所属游戏",onfocus:"所属游戏不能为空。"}).inputValidator({min:1,max:999,onerror:"所属游戏不能为空。"});
  })
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
        <th width="120"><?php echo $this->fieldInfos['name']['name']; ?>:</th> 
        <td><input type="text" name="name" class="input-text" id="name" value="<?php if (isset($this->currentInfo['name'])) echo $this->currentInfo['name']; ?>" /></input></td>
      </tr>
      <tr>
        <th><?php echo $this->fieldInfos['webgame_code']['name']; ?>:</th>
        <td><select name="webgame_code" id="webgame_code"><?php echo $this->selectWebgame; ?></select></td>
      </tr>
	  <tr>
	    <th><?php echo $this->fieldInfos['listorder']['name']; ?>：</th>
		<td class="y-bg"><input type="text" class="input-text" name="listorder" value="<?php if (isset($this->currentInfo['listorder'])) echo $this->currentInfo['listorder']; ?>" id="listorder"  size="30"/></td>
	  </tr>
	  <tr>
	    <th width="80"><?php echo $this->fieldInfos['status']['name']; ?>：</th>
		<td><select name="status" id="status"><?php echo $this->selectServerStatus; ?></select></td>
	  </tr>
      <tr>
        <th><?php echo $this->fieldInfos['ispay']['name']; ?></th>
        <td><input type="radio" name="ispay" value="0" <?php if (!isset($this->currentInfo['ispay']) || empty($this->currentinfo['ispay'])) echo "checked='checked'"; ?>' /> <?php echo $this->fieldInfos['ispay']['infos']['0']; ?> <label><input type="radio" name="ispay" value="1" <?php if (isset($this->currentInfo['ispay']) || !empty($this->currentinfo['ispay'])) echo "checked='checked'"; ?>/><?php echo $this->fieldInfos['ispay']['infos']['1']; ?></td>
      </tr>
	  <tr>
	    <th><?php echo $this->fieldInfos['server_mark']['name']; ?>：</th>
		<td class="y-bg"><input type="text" class="input-text" name="server_mark" value="<?php if (isset($this->currentInfo['server_mark'])) echo $this->currentInfo['server_mark']; ?>" id="server_mark"  size="30"/></td>
	  </tr>
      <tr>
		<th width="80"><?php echo $this->fieldInfos['time_start']['name']; ?>:</th>
		<td class="y-bg"><input id="time_start" type="text" name="time_start" value="<?php if(!empty($this->currentInfo['time_start'])) echo date('Y-m-d H:i:s',$this->currentInfo['time_start']);?>"></td>
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