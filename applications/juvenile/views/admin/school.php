<?php $this->load->view('header_admin') ?>
<?php if ($this->method == 'listinfo') { ?>
<div class="table-list pad-lr-10">
    <table width="100%" cellspacing="0">
      <thead>
		<tr>
		  <th ><?php echo $this->fieldInfos['id']['name']; ?></th>
		  <th align="center"><?php echo $this->fieldInfos['name']['name']; ?></th>
		  <th align="center"><?php echo $this->fieldInfos['agency_id']['name']; ?></th>
		  <th align="center"><?php echo $this->fieldInfos['email']['name']; ?></th>
		  <th align="center"><?php echo $this->fieldInfos['mobile']['name']; ?></th>
		  <th align="center"><?php echo $this->fieldInfos['telephone']['name']; ?></th>
		  <th align="center"><?php echo $this->fieldInfos['address']['name']; ?></th>
		  <th align="center"><?php echo $this->fieldInfos['school_app']['name']; ?></th>
		  <th class="text-c"><?php echo $this->lang->line('admin_operation'); ?></th>
		</tr>
      </thead>
      <tbody>
	  <?php if (is_array($this->infos) && !empty($this->infos)) { foreach ($this->infos as $info) { ?>
        <tr>
          <td align="center"><?php echo $info['id']; ?></td>
		  <td align="center"><?php echo $info['name']; ?></td>
          <td align="center"><?php echo $info['agency_id']; ?></td>
		  <td align="center"><?php echo $info['email']; ?></td>
		  <td align="center"><?php echo $info['telephone']; ?></td>
		  <td align="center"><?php echo $info['address']; ?></td>
		  <td align="center"><?php if (!empty($info['school_app'])) { ?><a href="<?php echo $info['school_app']; ?>" target="_blank"><?php echo $this->fieldInfos['school_app']['name']; ?></a><?php } ?></td>
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
        <td><?php echo $this->fieldInfos['contact_man']['name']; ?>:</td> 
        <td><input type="contact_man" name="contact_man" class="input-text" id="contact_man" value="<?php if (isset($this->currentInfo['contact_man'])) echo $this->currentInfo['contact_man']; ?>"></input></td>
      </tr>
      <tr>
        <td><?php echo $this->fieldInfos['address']['name']; ?>:</td> 
        <td><input type="address" name="address" class="input-text" id="address" value="<?php if (isset($this->currentInfo['address'])) echo $this->currentInfo['address']; ?>"></input></td>
      </tr>
      <tr>
        <td><?php echo $this->fieldInfos['telephone']['name']; ?>:</td> 
        <td><input type="telephone" name="telephone" class="input-text" id="telephone" value="<?php if (isset($this->currentInfo['telephone'])) echo $this->currentInfo['telephone']; ?>"></input></td>
      </tr>
      <tr>
        <td><?php echo $this->fieldInfos['mobile']['name']; ?>:</td> 
        <td><input type="mobile" name="mobile" class="input-text" id="mobile" value="<?php if (isset($this->currentInfo['mobile'])) echo $this->currentInfo['mobile']; ?>"></input></td>
      </tr>
      <tr>
        <td><?php echo $this->fieldInfos['email']['name']; ?>:</td> 
        <td><input type="email" name="email" class="input-text" id="email" value="<?php if (isset($this->currentInfo['email'])) echo $this->currentInfo['email']; ?>"></input></td>
      </tr>
      <tr>
        <td><?php echo $this->fieldInfos['school_app']['name']; ?>:</td> 
        <td><input type="school_app" name="school_app" class="input-text" id="school_app" value="<?php if (isset($this->currentInfo['school_app'])) echo $this->currentInfo['school_app']; ?>"></input></td>
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


