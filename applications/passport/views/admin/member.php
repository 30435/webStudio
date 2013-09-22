<?php $this->load->view('header_admin') ?>
<?php if ($this->method == 'listinfo') { ?>
<div class="pad_10">
  <div class="table-list">
    <table width="100%" cellspacing="0">
      <thead>
        <tr>
          <th width="80">ID</th>
          <th><?php echo $this->fieldInfos['username']['name']; ?></th>
		  <th><?php echo $this->fieldInfos['email']['name']; ?></th>
		  <th><?php echo $this->fieldInfos['regdate']['name']; ?></th>
		  <th><?php echo $this->fieldInfos['loginnum']['name']; ?></th>
		  <th><?php echo $this->fieldInfos['lastloginip']['name']; ?></th>
		  <th><?php echo $this->fieldInfos['lastlogintime']['name']; ?></th>
          <th width="150"><?php echo $this->lang->line('admin_operation'); ?></th>
        </tr>
      </thead>
      <tbody>
        <?php if (is_array($this->infos)) { foreach ($this->infos as $info) { ?>
        <tr>
          <td width="80" align="center"><?php echo $info['userid']; ?></td>
          <td align="center"><?php echo $info['username']; ?></td>
		  <td align="center"><?php echo $info['email']; ?></td>
		  <td align="center"><?php echo date('Y-m-d H:i:s', $info['regdate']); ?></td>
		  <td align="center"><?php echo $info['loginnum']; ?></td>
		  <td align="center"><?php echo $info['lastloginip']; ?></td>
		  <td align="center"><?php echo date('Y-m-d H:i:s', $info['lastlogintime']); ?></td>
          <td align="center">
    		<a href='javascript: showLog("<?php echo $url = $this->appMenus['view']['url'] . '?userid=' . $info['userid']; ?>"); void(0);'><?php echo $this->appMenus['view']['name']; ?></a> |
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
<div class="subnav">
	<h2 class="title-1 line-x f14 fb blue lh28"><?php echo '用户--' . $this->currentInfo['username'] . '--信息'; ?></h2>
</div>
<div class="pad-10">
  <div>
    <fieldset>
	  <legend></legend>
	  <table width="100%"  class="table_form">
	  <?php foreach ($this->currentInfo as $field => $value) { ?>
        <tr>
          <th width="80"><?php echo $this->fieldInfos[$field]['name']; ?></th>
          <td class="y-bg"><input type="text" class="input-text" value="<?php echo $value; ?>" disabled="desabled" /></td>
        </tr>
      <?php } ?>
      </table>
    </fieldset>
	<div class="bk15"></div>
  </div>
</div>
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