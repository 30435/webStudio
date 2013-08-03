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
		  <th><?php echo '本地页面'; ?></th>
          <th width="300"><?php echo $this->lang->line('admin_operation'); ?></th>
        </tr>
      </thead>
      <tbody>
        <?php if (is_array($this->infos)) { foreach ($this->infos as $info) { ?>
        <tr>
          <td width="80" align="center"><?php echo $info['id']; ?></td>
          <td align="center"><?php echo $info['name']; ?></td>
		  <td align="center"><?php echo '<a href="' . $info['siteUrl'] . '" target="_blank">' . $info['siteId'] . '</a>'; ?></td>
		  <td align="center"><?php echo '<a href="' . $info['pageurl'] . '" target="_blank">' . $info['pageurl'] . '</a>'; ?></td>
		  <td align="center"><?php echo '<a href="' . $info['localUrl'] . '" target="_blank">本地页面</a>'; ?></td>
          <td align="center">
		  	<?php foreach ($this->operationMenus as $operationMenu) { if (!in_array($operationMenu, array_keys($this->appMenus))) continue; $menu = $this->appMenus[$operationMenu]; $menuUrl = $operationMenu == 'delete' ? 'javascript:confirmurl("' . $menu['url'] . '?id=' . $info['id'] . '", "确认要删除 『 ' . $info['name'] . '』 吗？");' : $menu['url'] . '?id=' . $info['id']; ?>
    		<a href='<?php echo $menuUrl; ?>' target="_blank"><?php echo $menu['name']; ?></a> |
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
		data :"action=checkExist&id=<?php echo $this->id; ?>",
		datatype : "html",
		async:'false',
		success : function(data){ if( data == "1" ){return true;}else{return false;}},buttons: $("#dosubmit"),onerror : "站点名已存在。",onwait : "正在连接，请稍候。"
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
        <td width="80"><?php echo $this->fieldInfos['baseurl']['name']; ?>:</td> 
        <td><input type="text" name="baseurl" class="input-text" id="baseurl" value="<?php if (isset($this->currentInfo['baseurl'])) echo $this->currentInfo['baseurl']; ?>" size="100"></input></td>
      </tr>
      <tr>
        <td><?php echo $this->fieldInfos['pageurl']['name']; ?>:</td>
        <td>
          <input type="text" name="pageurl" value="<?php if (isset($this->currentInfo['pageurl'])) echo $this->currentInfo['pageurl']; ?>" class="input-text" id="pageurl" size="100"></input>
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