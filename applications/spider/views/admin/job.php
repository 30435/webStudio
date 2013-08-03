<?php $this->load->view('header_admin') ?>
<?php if ($this->method == 'listinfo') { ?>
<div class="pad_10">
  <div class="table-list">
    <table width="100%" cellspacing="0">
      <thead>
        <tr>
          <th width="80"><?php echo $this->fieldInfos['id']['name']; ?></th>
          <th><?php echo $this->fieldInfos['name']['name']; ?></th>
		  <th><?php echo $this->fieldInfos['site_id']['name']; ?></th>
		  <th><?php echo $this->fieldInfos['crule_id']['name']; ?></th>
		  <th><?php echo $this->fieldInfos['status']['name']; ?></th>
          <th width="450"><?php echo $this->lang->line('admin_operation'); ?></th>
        </tr>
      </thead>
      <tbody>
        <?php if (is_array($this->infos)) { foreach ($this->infos as $info) { ?>
        <tr>
          <td width="80" align="center"><?php echo $info['id']; ?></td>
          <td align="center"><?php echo $info['name']; ?></td>
		  <td align="center"><?php echo '<a href="' . $info['site_id'] . '" target="_blank">' . $info['site_id'] . '</a>'; ?></td>
		  <td align="center"><?php echo $info['crule_id']; ?></td>
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
<!--
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
	$("#name").formValidator({onshow:"请输入任务名称",onfocus:"任务名称应该为6-20位之间"}).inputValidator({min:6,max:20,onerror:"输入6-20位之间的任务名称"});
	$("#site_id").formValidator({onshow:"请选择所属站点",onfocus:"请选择所属站点",oncorrect:"正确"}).inputValidator({min:1,onerror:"请选择所属站点"});
	$("#crule_id").formValidator({onshow:"请选择内容采集规则",onfocus:"请选择内容采集规则",oncorrect:"正确"}).inputValidator({min:1,onerror:"请选择内容采集规则"});
	$("#list_start").formValidator({onshow:"请输入列表开始标记",onfocus:"请输入列表开始标记"}).inputValidator({min:1,onerror:"列表页开始标记不能为空"});
	$("#list_end").formValidator({onshow:"请输入列表结束标记",onfocus:"请输入列表结束标记"}).inputValidator({min:1,onerror:"列表页结束标记不能为空"});
	$("#list_url").formValidator({onshow:"请输入列表页地址",onfocus:"请输入列表页地址"}).inputValidator({min:1,onerror:"列表页地址不能为空"});
	$("#pattern").formValidator({onshow:"请输入列表页采集规则",onfocus:"请输入列表页采集规则"}).inputValidator({min:1,onerror:"列表页采集规则不能为空"});
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
        <td width="80"><?php echo $this->fieldInfos['name']['name']; ?>:</td> 
        <td><input type="text" name="name" class="input-text" id="name" value="<?php if (isset($this->currentInfo['name'])) echo $this->currentInfo['name']; ?>" /></input></td>
      </tr>
      <tr>
        <td><?php echo $this->fieldInfos['site_id']['name']; ?>:</td>
        <td><select name="site_id" id="site_id"><?php echo $this->selectSite; ?></select></td>
      </tr>
      <tr>
        <td><?php echo $this->fieldInfos['crule_id']['name']; ?>:</td>
        <td><select name="crule_id" id="crule_id"><?php echo $this->selectCrule; ?></select></td>
      </tr>
      <tr>
        <td><?php echo $this->fieldInfos['content_urlpre']['name']; ?>:</td>
        <td>
          <input type="text" name="content_urlpre" value="<?php if (isset($this->currentInfo['content_urlpre'])) echo $this->currentInfo['content_urlpre']; ?>" class="input-text" id="content_urlpre" size="100"></input>
        </td>
      </tr>
      <tr>
        <td><?php echo $this->fieldInfos['list_url']['name']; ?>:</td>
        <td>
          <textarea type="text" name="list_url" id="list_url" cols="80" rows="5"><?php if (isset($this->currentInfo['list_url'])) echo $this->currentInfo['list_url']; ?></textarea>
        </td>
      </tr>
      <tr>
        <td><?php echo $this->fieldInfos['list_start']['name']; ?>:</td>
        <td>
          <textarea type="text" name="list_start" id="list_start" cols="80" rows="2"><?php if (isset($this->currentInfo['list_start'])) echo $this->currentInfo['list_start']; ?></textarea>
        </td>
      </tr>
      <tr>
        <td><?php echo $this->fieldInfos['list_end']['name']; ?>:</td>
        <td>
          <textarea type="text" name="list_end" id="list_end" cols="80" rows="2"><?php if (isset($this->currentInfo['list_end'])) echo $this->currentInfo['list_end']; ?></textarea>
        </td>
      </tr>
      <tr>
        <td><?php echo $this->fieldInfos['pattern']['name']; ?>:</td>
        <td>
          <textarea type="text" name="pattern" id="pattern" cols="80" rows="2"><?php if (isset($this->currentInfo['pattern'])) echo $this->currentInfo['pattern']; ?></textarea>
        </td>
      </tr>
	  <tr>
        <td><?php echo $this->fieldInfos['status']['name']; ?>:</td>
        <td class="y-bg">
          <input type="radio" name="status" value="0" class="input-text" <?php if (isset($this->currentInfo['status']) && empty($this->currentInfo['status'])) echo 'checked="checked"'; ?> /><?php echo $this->fieldInfos['status']['infos']['0']; ?> |
		  <input type="radio" name="status" value="1" class="input-text" <?php if (isset($this->currentInfo['status']) && $this->currentInfo['status'] == '1') echo 'checked="checked"'; ?> /><?php echo $this->fieldInfos['status']['infos']['1']; ?>
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