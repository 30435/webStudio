<?php $this->load->view('header_admin') ?>
<?php if ($this->method == 'listinfo') { ?>
<div class="table-list pad-lr-10">
    <table width="100%" cellspacing="0">
      <thead>
		<tr>
		  <th><?php echo $this->fieldInfos['id']['name']; ?></th>
		  <th align="center"><?php echo $this->fieldInfos['username']['name']; ?></th>
		  <th align="center"><?php echo $this->fieldInfos['name']['name']; ?> ( <?php echo $this->fieldInfos['name_english']['name']; ?> )</th>
		  <th align="center"><?php echo $this->fieldInfos['type']['name']; ?></th>
		  <th align="center"><?php echo $this->fieldInfos['industry']['name']; ?></th>
		  <th align="center"><?php echo $this->fieldInfos['capital']['name']; ?></th>
		  <th align="center"><?php echo $this->fieldInfos['regdate']['name']; ?></th>
		  <th align="center"><?php echo $this->fieldInfos['contact_man']['name']; ?></th>
		  <th align="center"><?php echo $this->fieldInfos['brand_name']['name']; ?></th>
		  <th align="center"><?php echo $this->fieldInfos['invit_model']['name']; ?></th>
		  <th align="center"><?php echo $this->fieldInfos['status']['name']; ?></th>
		  <th class="text-c"><?php echo $this->lang->line('admin_operation'); ?></th>
		</tr>
      </thead>
      <tbody>
	  <?php if (is_array($this->infos) && !empty($this->infos)) { foreach ($this->infos as $info) { ?>
        <tr>
          <td align="center"><?php echo $info['id']; ?></td>
		  <td align="center"><?php echo $info['username']; ?></td>
          <td align="center"><?php echo $info['name']; ?></td>
		  <td align="center"><?php echo $info['type']; ?></td>
		  <td align="center"><?php echo $info['industry']; ?></td>
          <td align="center"><?php echo $info['capital']; ?></td>
		  <td align="center"><?php echo $info['regdate']; ?></td>
          <td align="center"><?php echo $info['contact_man']; ?></td>
		  <td align="center"><?php echo $info['brand_name']; ?></td>
		  <td align="center"><?php echo $info['invit_model']; ?></td>
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

	<fieldset>
	  <legend>基本信息</legend>
	  <table width="100%"  class="table_form">
	  <tr>
	    <th><?php echo $this->fieldInfos['username']['name']; ?>：</th>
		<td class="y-bg"><input type="text" class="input-text" name="username" value="<?php if (isset($this->currentInfo['username'])) echo $this->currentInfo['username']; ?>" id="username" size="30" /></td>
	  </tr>
	  <tr>
	    <th><?php echo $this->fieldInfos['name']['name']; ?>：</th>
		<td class="y-bg"><input type="text" class="input-text" name="name" value="<?php if (isset($this->currentInfo['name'])) echo $this->currentInfo['name']; ?>" id="name"  size="30"/></td>
	  </tr>
	  <tr>
	    <th><?php echo $this->fieldInfos['name_english']['name']; ?>：</th>
		<td class="y-bg"><input type="text" class="input-text" name="name_english" value="<?php if (isset($this->currentInfo['name_english'])) echo $this->currentInfo['name_english']; ?>" id="name_english" size="30" /></td>
	  </tr>
      <tr>
        <th><?php echo $this->fieldInfos['type']['name']; ?>:</th>
        <td><select name="type" id="type"><?php echo $this->selectIndustry; ?></select></td>
      </tr>
      <tr>
        <th><?php echo $this->fieldInfos['industry']['name']; ?>:</th>
        <td><select name="industry" id="industry"><?php echo $this->selectIndustry; ?></select></td>
      </tr>
	  <tr>
	    <th><?php echo $this->fieldInfos['capital']['name']; ?>：</th>
		<td class="y-bg"><input type="text" class="input-text" name="capital" value="<?php if (isset($this->currentInfo['capital'])) echo $this->currentInfo['capital']; ?>" id="capital"  size="100"/></td>
	  </tr>
      <tr>
		<th width="80"><?php echo $this->fieldInfos['regdate']['name']; ?>:</th>
		<td class="y-bg"><input id="regdate" type="text" name="regdate" value="<?php if(!empty($this->currentInfo['regdate'])) echo date('Y-m-d H:i:s',$this->currentInfo['regdate']);?>"></td>
	  </tr>
	  </table>
	</fieldset>

	<div class="bk15"></div>
	<fieldset>
	  <legend>联系方式</legend>
	  <table width="100%"  class="table_form">
	  <tr>
	    <th width="110"><?php echo $this->fieldInfos['address']['name']; ?>：</th>
		<td class="y-bg"><input type="text" class="input-text" name="address" value="<?php if (isset($this->currentInfo['address'])) echo $this->currentInfo['address']; ?>" id="address"  size="30"/></td>
	  </tr>
	  <tr>
	    <th><?php echo $this->fieldInfos['contact_man']['name']; ?>：</th>
		<td class="y-bg"><input type="text" class="input-text" name="contact_man" value="<?php if (isset($this->currentInfo['contact_man'])) echo $this->currentInfo['contact_man']; ?>" id="contact_man"  size="30"/></td>
	  </tr>
	  <tr>
	    <th><?php echo $this->fieldInfos['contact_email']['name']; ?>：</th>
		<td class="y-bg"><input type="text" class="input-text" name="coin_rate" value="<?php if (isset($this->currentInfo['coin_rate'])) echo $this->currentInfo['coin_rate']; ?>" id="coin_rate"  size="30"/></td>
	  </tr>
	  <tr>
	    <th><?php echo $this->fieldInfos['contact_mobile']['name']; ?>：</th>
		<td class="y-bg"><input type="text" class="input-text" name="coin_rate" value="<?php if (isset($this->currentInfo['coin_rate'])) echo $this->currentInfo['coin_rate']; ?>" id="coin_rate"  size="30"/></td>
	  </tr>
	  <tr>
	    <th><?php echo $this->fieldInfos['contact_telephone']['name']; ?>：</th>
		<td class="y-bg"><input type="text" class="input-text" name="coin_rate" value="<?php if (isset($this->currentInfo['coin_rate'])) echo $this->currentInfo['coin_rate']; ?>" id="coin_rate"  size="30"/></td>
	  </tr>
	  </table>
	</fieldset>
	<fieldset>
	  <legend>加盟信息</legend>
	  <table width="100%"  class="table_form">
	  <tr>
	    <th width="110"><?php echo $this->fieldInfos['brand_name']['name']; ?>：</th>
		<td class="y-bg"><input type="text" class="input-text" name="brand_name" value="<?php if (isset($this->currentInfo['brand_name'])) echo $this->currentInfo['brand_name']; ?>" id="brand_name"  size="30"/></td>
	  </tr>
	  <tr>
	    <th><?php echo $this->fieldInfos['brand_name_english']['name']; ?>：</th>
		<td class="y-bg"><input type="text" class="input-text" name="brand_name_english" value="<?php if (isset($this->currentInfo['brand_name_english'])) echo $this->currentInfo['brand_name_english']; ?>" id="brand_name_english"  size="30"/></td>
	  </tr>
      <tr>
        <th><?php echo $this->fieldInfos['invit_model']['name']; ?>:</th>
        <td><select name="invit_model" id="invit_model"><?php echo $this->selectInvitModel; ?></select></td>
      </tr>
	  <tr>
	    <th><?php echo $this->fieldInfos['invest_capital']['name']; ?>:</th>
		<td class="y-bg"><input type="text" class="input-text" name="coin_rate" value="<?php if (isset($this->currentInfo['coin_rate'])) echo $this->currentInfo['coin_rate']; ?>" id="coin_rate"  size="30"/></td>
	  </tr>
	  <tr>
	    <th><?php echo $this->fieldInfos['direct_num']['name']; ?>：</th>
		<td class="y-bg"><input type="text" class="input-text" name="coin_rate" value="<?php if (isset($this->currentInfo['coin_rate'])) echo $this->currentInfo['coin_rate']; ?>" id="coin_rate"  size="30"/></td>
	  </tr>
	  <tr>
	    <th><?php echo $this->fieldInfos['league_num']['name']; ?>：</th>
		<td class="y-bg"><input type="text" class="input-text" name="coin_rate" value="<?php if (isset($this->currentInfo['coin_rate'])) echo $this->currentInfo['coin_rate']; ?>" id="coin_rate"  size="30"/></td>
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
    inputField : "regdate",
    trigger    : "regdate",
    dateFormat: "%Y-%m-%d",
    showTime: true,
    minuteStep: 1,
    onSelect   : function() {this.hide();}
});
</script>
<?php } ?>
</body>
</html>


