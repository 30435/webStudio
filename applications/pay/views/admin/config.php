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
        <td width="10%">是否开启支付模块:</td> 
        <td>
		  <input type="text" name="pay_open" id="pay_open" class="input-text" value="<?php echo $this->configPayInfos['pay_open']; ?>"></input>
		  <div class="onShow">是否开启充值支付模块，值为yes时开启，否则不开启</div>
		</td>
      </tr>
      <tr>
        <td width="10%">跳转地址:</td> 
        <td>
		  <input type="text" name="pay_close_url" id="pay_open" class="input-text" value="<?php echo $this->configPayInfos['pay_close_url']; ?>"></input>
		  <div class="onShow">设置关闭充值支付模块时的跳转地址，为空时，跳转至游戏首页</div>
		</td>
      </tr>
      <tr>
        <td width="10%">是否开启包月服务:</td> 
        <td>
		  <input type="text" name="pay_paymonth_open" id="pay_paymonth_open" class="input-text" value="<?php echo $this->configPayInfos['pay_paymonth_open']; ?>"></input>
		  <div class="onShow">是否开启购买包月服务功能，值为yes时开启，否则不开启</div>
		</td>
      </tr>
      <tr>
        <td width="10%">是否开启游戏支付:</td> 
        <td>
		  <input type="text" name="pay_webgame_open" id="pay_webgame_open" class="input-text" value="<?php echo $this->configPayInfos['pay_webgame_open']; ?>"></input>
		  <div class="onShow">是否开启向游戏直接充值支付功能，值为yes时开启，否则不开启</div>
		</td>
      </tr>
    </table>
    <div class="bk15"></div>
    <?php if ($this->method == 'change') { ?><input name="dosubmit" type="submit" value="提交" class="button" id="dosubmit"><?php } ?>
  </form>
  </div>
</div>
</body></html>