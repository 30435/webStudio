<?php $this->load->view('header_admin') ?>
<?php if ($this->method == 'listinfo') { ?>
<div class="table-list pad-lr-10">
    <table width="100%" cellspacing="0">
      <thead>
		<tr>
		  <th ><?php echo $this->fieldInfos['id']['name']; ?></th>
		  <th align="center"><?php echo $this->fieldInfos['name']['name']; ?></th>
		  <th align="center"><?php echo $this->fieldInfos['agency_id']['name']; ?></th>
		  <th align="center"><?php echo $this->fieldInfos['school_id']['name']; ?></th>
		  <th align="center"><?php echo $this->fieldInfos['sort']['name']; ?></th>
		  <th align="center"><?php echo $this->fieldInfos['status']['name']; ?></th>
		  <th class="text-c"><?php echo $this->lang->line('admin_operation'); ?></th>
		</tr>
      </thead>
      <tbody>
	  <?php if (is_array($this->infos) && !empty($this->infos)) { foreach ($this->infos as $info) { ?>
        <tr>
          <td align="center"><?php echo $info['id']; ?></td>
		  <td align="center"><?php echo $info['name']; ?></td>
          <td align="center"><?php echo $info['agency_id']; ?></td>
		  <td align="center"><?php echo $info['school_id']; ?></td>
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
  <div id="pages"> <?php echo $this->pageStr; ?></div>
</div>
<script language="javascript">
$("#urlForward").val(this.location.href);
</script>
<?php } else {?>
<script type="text/javascript">
<!--
$(function(){
  $.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
  $("#name").formValidator({onshow:"请输入游戏名称",onfocus:"游戏名称不能为空。"}).inputValidator({min:1,max:999,onerror:"游戏名称不能为空。"});
})
//-->
</script>
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
        <td width="80"><?php echo $this->fieldInfos['name']['name']; ?>:</td> 
        <td><input type="text" name="name" class="input-text" id="name" value="<?php if (isset($this->currentInfo['name'])) echo $this->currentInfo['name']; ?>" /></input></td>
      </tr>
      <tr>
        <td><?php echo $this->fieldInfos['agency_id']['name']; ?>:</td>
        <td><select name="agency_id" id="agency_id"><?php echo $this->selectAgency; ?></select></td>
      </tr>
      <tr>
        <td><?php echo $this->fieldInfos['school_id']['name']; ?>:</td>
        <td><select name="school_id" id="school_id"><?php echo $this->selectSchool; ?></select></td>
      </tr>
      <tr>
        <td><?php echo $this->fieldInfos['sort']['name']; ?>:</td>
        <td><select name="sort" id="sort"><?php echo $this->selectSort; ?></select></td>
      </tr>
      <tr>
        <td><?php echo $this->fieldInfos['status']['name']; ?>:</td>
        <td><select name="status" id="status"><?php echo $this->selectStatus; ?></select></td>
      </tr>
      <tr>
        <th><?php echo $this->fieldInfos['description']['name']; ?></th>
        <td><textarea name="description" rows="2" cols="20" id="description" class="inputtext" style="height:100px;width:500px;"><?php if (isset($this->currentInfo['description'])) echo $this->currentInfo['description']; ?></textarea></td>
      </tr>
    </table>
    <div class="bk15"></div>
    <?php if ($this->method != 'view') { ?><input type="submit" class="button" value="<?php echo $this->lang->line('admin_submit'); ?>" name="dosubmit"><?php } ?>
    </form>
  </div>
</div>
<?php } ?>
</body>
</html>


