<?php $this->load->view('header_admin') ?>
<?php if ($this->method == 'listinfo' || $this->method == 'listinfom') { ?>
<div class="table-list pad-lr-10">
  <form method="get" action="" name="searchform">
    <table width="100%" cellspacing="0" class="search-form">
      <tbody>
		<tr>
		  <td>
		  <div class="explain-col">
			操作时间：<input type="text" readonly="" class="date input-text" size="10" value="" id="start_time" name="start_time">&nbsp;
			<script type="text/javascript">
				Calendar.setup({
				weekNumbers: true,
				inputField : "start_time",
				trigger    : "start_time",
				dateFormat: "%Y-%m-%d",
				showTime: false,
				minuteStep: 1,
				onSelect   : function() {this.hide();}
				});
			</script>-<input type="text" readonly="" class="date input-text" size="10" value="" id="end_time" name="end_time">&nbsp;
			<script type="text/javascript">
				Calendar.setup({
				weekNumbers: true,
				inputField : "end_time",
				trigger    : "end_time",
				dateFormat: "%Y-%m-%d",
				showTime: false,
				minuteStep: 1,
				onSelect   : function() {this.hide();}
				});
			</script>
			<?php if (empty($this->showCurrent)) { ?>
			<select name="userid"><option selected="" value="0">选择管理员</option><?php echo $this->selectManager; ?></select>							
			<select name="roleid"><option selected="" value="0">选择角色</option><?php echo $this->selectRole; ?></select>
			<?php } ?>
			<select name="menu_id"><option selected="" value="">选择操作</option><?php echo $this->selectMenu; ?></select>				
			<input type="submit" value="搜索" class="button" name="search">
	      </div>
		  </td>
	    </tr>
      </tbody>
    </table>
    <input type="hidden" name="pc_hash" value="oP31Gm">
	</form>
    <table width="100%" cellspacing="0">
      <thead>
		<tr>
		  <th width="10%"><?php echo $this->fieldInfos['id']['name']; ?></th>
		  <th width="15%"><?php echo $this->fieldInfos['username']['name']; ?> ( <?php echo $this->fieldInfos['userid']['name']; ?> )</th>
		  <th width="15%" align="center"><?php echo $this->fieldInfos['role_name']['name']; ?> ( <?php echo $this->fieldInfos['roleid']['name']; ?> )</th>
		  <th width="256" align="center"><?php echo $this->fieldInfos['menu_name']['name']; ?> ( <?php echo $this->fieldInfos['menu_id']['name']; ?> )</th>
		  <th width="5%" align="center"><?php echo $this->fieldInfos['ip']['name']; ?></th>
		  <th width="20%"><?php echo $this->fieldInfos['inputtime']['name']; ?></th>
		  <th  class="text-c"><?php echo $this->lang->line('admin_operation'); ?></th>
		</tr>
      </thead>
      <tbody>
	  <?php if (is_array($this->infos) && !empty($this->infos)) { foreach ($this->infos as $info) { ?>
        <tr>
          <td width="10%" align="center"><?php echo $info['id']; ?></td>
          <td width="15%" align="center"><?php echo $info['username']; ?>( <?php echo $info['userid']; ?> )</td>
		  <td width="256" align="center"><?php echo $info['role_name']; ?>( <?php echo $info['roleid']; ?> )</td>
		  <td width="15%" align="center"><?php echo $info['menu_name']; ?>( <?php echo $info['menu_id']; ?> )</td>
		  <td width="15%" align="center"><?php echo $info['ip']; ?></td>
		  <td width="20%" align="center"><?php echo $info['inputtime']; ?></td>
          <td class="text-c">
		  	<?php foreach ($this->operationMenus as $operationMenu) { if (!in_array($operationMenu, array_keys($this->appMenus))) continue; $menu = $this->appMenus[$operationMenu]; $url = $menu['url'] . '?id=' . $info['id'];?>
    		<a href='javascript: showLog("<?php echo $url; ?>"); void(0);'><?php echo $menu['name']; ?></a> |
    		<?php } ?>
		  </td>
        </tr>
      <?php } } ?>
      </tbody>
    </table>
  <div id="pages"> <?php echo $this->pageStr; ?></div>
</div>
<?php } else {?>
<style type="text/css">
.radio-label{ border-top:1px solid #e4e2e2; border-left:1px solid #e4e2e2}
.radio-label td{ border-right:1px solid #e4e2e2; border-bottom:1px solid #e4e2e2;background:#f6f9fd}
</style>
<?php if ($this->noPriv) { ?>
<h1>您没有查看该记录的权限</h1>
<?php } else { ?>
<div class="subnav">
	<h2 class="title-1 line-x f14 fb blue lh28"><?php echo $this->logDescription; ?></h2>
</div>
<div class="pad-10">
  <div>
  <?php if ($this->currentInfo['logtype'] == 'deletemul') { ?>
    <?php if (is_array($this->currentInfo['data']) && !empty($this->currentInfo['data'])) { foreach ($this->currentInfo['data'] as $infoIndex => $subInfo) { ?>
    <fieldset>
	  <legend><?php echo $infoIndex . '--' . $this->currentLogType; ?></legend>
	  <table width="100%"  class="table_form">
	  <?php if (is_array($subInfo) && !empty($subInfo)) { foreach ($subInfo as $infoKey => $infoValue) { ?>
        <tr>
          <th width="80"><?php echo $infoKey; ?></th>
          <td class="y-bg"><input type="text" class="input-text" name="name" id="name" size="30" value="<?php echo $infoValue; ?>" disabled="desabled" /></td>
        </tr>
      <?php } } ?>
      </table>
    </fieldset>
	<div class="bk15"></div>
	<?php } } ?>
  <?php } else { ?>
    <fieldset>
	  <legend><?php echo $this->currentLogType; ?></legend>
	  <table width="100%"  class="table_form">
	  <?php if (is_array($this->currentInfo['data']) && !empty($this->currentInfo['data'])) { foreach ($this->currentInfo['data'] as $infoKey => $infoValue) { ?>
        <tr>
          <th width="80"><?php echo $infoKey; ?></th>
          <td class="y-bg"><input type="text" class="input-text" name="name" id="name" size="30" value="<?php echo $infoValue; ?>" disabled="desabled" /></td>
        </tr>
      <?php } } ?>
      </table>
    </fieldset>
	<div class="bk15"></div>
	<?php if ($this->currentInfo['logtype'] == 'edit') { ?>
    <fieldset>
	  <legend><?php echo $this->currentLogType; ?></legend>
	  <table width="100%"  class="table_form">
	  <?php if (is_array($this->currentInfo['data_old']) && !empty($this->currentInfo['data_old'])) { foreach ($this->currentInfo['data_old'] as $infoKey => $infoValue) { ?>
        <tr>
          <th width="80"><?php echo $infoKey; ?></th>
          <td class="y-bg"><input type="text" class="input-text" name="name" id="name" size="30" value="<?php echo $infoValue; ?>" disabled="desabled" /></td>
        </tr>
      <?php } } ?>
      </table>
    </fieldset>
	<?php } ?>
  <?php } ?>
  </div>
</div>
<?php } ?>
<?php } ?>
<script type="text/javascript">
<!--
document.domain='<?php echo $this->frontDomain; ?>';
function showLog(url) {
	window.top.art.dialog({id:'show'}).close();
	window.top.art.dialog({title:'操作详情',id:'show',iframe: url,width:'700',height:'500'}, function(){
		var d = window.top.art.dialog({id:'show'}).data.iframe;return false;
	}, function(){window.top.art.dialog({id:'show'}).close()});
}
//-->
</script>
</body>
</html>