<?php $this->load->view('header_admin') ?>
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
        <td width="10%">是否开启用户模块:</td> 
        <td>
		  <input type="text" name="passport_open" id="passport_open" class="input-text" value="<?php echo $this->configPassportInfos['passport_open']; ?>"></input>
		  <div class="onShow">是否开启用户模块，值为yes时开启，否则不开启</div>
		</td>
      </tr>
      <tr>
        <td width="10%">跳转地址:</td> 
        <td>
		  <input type="text" name="passport_close_url" id="passport_open" class="input-text" value="<?php echo $this->configPassportInfos['passport_close_url']; ?>"></input>
		  <div class="onShow">设置关闭用户模块时的跳转地址，为空时，跳转至游戏首页</div>
		</td>
      </tr>
      <tr>
        <td width="10%">是否开启用户注册:</td> 
        <td>
		  <input type="text" name="passport_register_open" id="passport_register_open" class="input-text" value="<?php echo $this->configPassportInfos['passport_register_open']; ?>"></input>
		  <div class="onShow">是否开启用户注册，值为yes时开启，否则不开启</div>
		</td>
      </tr>
    </table>
    <div class="bk15"></div>
    <?php if ($this->method == 'change') { ?><input name="dosubmit" type="submit" value="提交" class="button" id="dosubmit"><?php } ?>
  </form>
  </div>
</div>
</body></html>