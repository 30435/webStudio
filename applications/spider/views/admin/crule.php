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
		  <th><?php echo $this->fieldInfos['pageurl']['name']; ?></th>
          <th width="150"><?php echo $this->lang->line('admin_operation'); ?></th>
        </tr>
      </thead>
      <tbody>
        <?php if (is_array($this->infos)) { foreach ($this->infos as $info) { ?>
        <tr>
          <td width="80" align="center"><?php echo $info['id']; ?></td>
          <td align="center"><?php echo $info['name']; ?></td>
		  <td align="center"><?php echo '<a href="' . $info['site_id'] . '" target="_blank">' . $info['site_id'] . '</a>'; ?></td>
		  <td align="center"><?php echo '<a href="' . $info['pageurl'] . '" target="_blank">' . $info['pageurl'] . '</a>'; ?></td>
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
	$("#name").formValidator({onshow:"请输入站点名",onfocus:"请输入站点名"}).inputValidator({min:1,onerror:"请输入站点名"}).ajaxValidator({
		type : "get",
		url : "",
		data :"action=checkExist&id=<?php if (isset($this->id)) echo $this->id; ?>",
		datatype : "html",
		async:'false',
		success : function(data){ if( data == "1" ){return true;}else{return false;}},buttons: $("#dosubmit"),onerror : "站点名已存在。",onwait : "正在连接，请稍候。"
	});
	$("#siteurl").formValidator({
		onshow:"请填写域名，格式为：http://www.alyee.com/",
		onfocus:"请填写域名，格式为：http://www.alyee.com/",
		tipcss:{width:'300px'},
		empty:false}).inputValidator({onerror:"请填写域名，格式为：http://www.alyee.com/"}).regexValidator({regexp:"http:\/\/(.+)\/$",
		onerror:"格式应该为http://www.alyee.com/，请以‘/’结束"
	});
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
        <td><?php echo $this->fieldInfos['mulpage_mark']['name']; ?>:</td>
        <td>
          <input type="text" name="mulpage_mark" value="<?php if (isset($this->currentInfo['mulpage_mark'])) echo $this->currentInfo['mulpage_mark']; ?>" class="input-text" id="mulpage_mark" size="30"></input>
        </td>
      </tr>
      <tr>
        <td><?php echo $this->fieldInfos['pageurl']['name']; ?>:</td>
        <td>
          <input type="text" name="pageurl" value="<?php if (isset($this->currentInfo['pageurl'])) echo $this->currentInfo['pageurl']; ?>" class="input-text" id="pageurl" size="100"></input>
        </td>
      </tr>
      <tr>
        <td><?php echo $this->fieldInfos['pattern_time']['name']; ?>:</td>
        <td>
          <input type="text" name="pattern_time" value="<?php if (isset($this->currentInfo['pattern_time'])) echo $this->currentInfo['pattern_time']; ?>" class="input-text" id="pattern_time" size="100"></input>
        </td>
      </tr>
      <tr>
        <td><?php echo $this->fieldInfos['pattern_file']['name']; ?>:</td>
        <td>
          <textarea type="text" name="pattern_file" cols="80" rows="2"><?php if (isset($this->currentInfo['pattern_file'])) echo $this->currentInfo['pattern_file']; ?></textarea>
        </td>
      </tr>
      <tr>
        <td><?php echo $this->fieldInfos['pattern']['name']; ?>:</td>
        <td>
          <textarea type="text" name="pattern" cols="80" rows="5"><?php if (isset($this->currentInfo['pattern'])) echo $this->currentInfo['pattern']; ?></textarea>
        </td>
      </tr>
      <tr>
        <td><?php echo $this->fieldInfos['replace_source']['name']; ?>:</td>
        <td>
          <textarea type="text" name="replace_source" cols="80" rows="5"><?php if (isset($this->currentInfo['replace_source'])) echo $this->currentInfo['replace_source']; ?></textarea>
        </td>
      </tr>
      <tr>
        <td><?php echo $this->fieldInfos['replace_target']['name']; ?>:</td>
        <td>
          <textarea type="text" name="replace_target" cols="80" rows="5"><?php if (isset($this->currentInfo['replace_target'])) echo $this->currentInfo['replace_target']; ?></textarea>
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