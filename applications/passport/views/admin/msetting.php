<?php $this->load->view('header_admin') ?>
<?php if ($this->method == 'main' || $this->method == 'register' || $this->method == 'badword') { ?>

<style type="text/css">
.radio-label{ border-top:1px solid #e4e2e2; border-left:1px solid #e4e2e2}
.radio-label td{ border-right:1px solid #e4e2e2; border-bottom:1px solid #e4e2e2;background:#f6f9fd}
</style>
<div class="pad_10">
  <div class="common-form">
<?php
	echo validation_errors();
	$attributes = array('name' => 'myform', 'id' => 'myform');
	$this->id = isset($this->id) ? $this->id : 0;
	echo form_open($this->appMenus[$this->method]['url'] . '/' . $this->id, $attributes);
?>
    <table width="100%" class="table_form contentWrap">
      <tbody>

        <tr>
          <th width="80"><?php echo $this->lang->line('mem_set_register'); ?>:</th>
          <td class="y-bg"><?php echo $this->lang->line('mem_set_allow'); ?>
          <input type="radio" name="register"  class="input-radio" <?php if (isset($this->currentInfo['register']) &&$this->currentInfo['register']==1) echo 'checked' ;?> value='1' >

        <?php echo $this->lang->line('mem_set_nallow'); ?>
          <input type="radio" name="register"  class="input-radio" <?php if (isset($this->currentInfo['register']) &&$this->currentInfo['register']==0) echo 'checked' ;?> value='0' >
          <?php echo $this->lang->line('mem_set_register'); ?>

        </tr>

                <tr>
          <th width="80"><?php echo $this->lang->line('mem_set_mail_verify'); ?>:</th>
          <td class="y-bg"><?php echo $this->lang->line('mem_set_allow'); ?>
          <input type="radio" name="mail_verify"  class="input-radio" <?php if (isset($this->currentInfo['mail_verify']) &&$this->currentInfo['mail_verify']==1) echo 'checked' ;?> value='1' >

        <?php echo $this->lang->line('mem_set_nallow'); ?>
          <input type="radio" name="mail_verify"  class="input-radio" <?php if (isset($this->currentInfo['mail_verify']) &&$this->currentInfo['mail_verify']==0) echo 'checked' ;?> value='0' >
    <?php echo $this->lang->line('mem_set_mail_notice'); ?>
        </tr>

        <tr>
			 <th width="80"><?php echo $this->lang->line('mem_set_reg_agreement'); ?></th>
			 <td class="y-bg">
				<textarea name="reg_agreement" id="reg_agreement" rows="10" cols='120'"><?php if (isset($this->currentInfo['reg_agreement'])) echo $this->currentInfo['reg_agreement']; ?></textarea>
			</td>
		</tr>
		<tr>
			 <th width="80"><?php echo $this->lang->line('mem_set_mail_content'); ?></th>
			 <td class="y-bg">
				<textarea name="mail_verify_content" id="mail_verify_content" rows="4" cols='120'><?php if(isset($this->currentInfo['mail_verify_content'])) echo $this->currentInfo['mail_verify_content']; ?></textarea>
				<br/>
                <?php echo $this->lang->line('mem_var_intro'); ?>
			</td>
		</tr>

		<tr>
			 <th width="80"><?php echo $this->lang->line('mem_set_fg_content'); ?></th>
			 <td class="y-bg">
				<textarea name="mail_forgetpass_content" id="mail_forgetpass_content" rows="4" cols='120'><?php if (isset($this->currentInfo['mail_forgetpass_content'])) echo  $this->currentInfo['mail_forgetpass_content']; ?></textarea>
			</td>
		</tr>

</tbody>
    </table>
    <div class="bk15"></div>
    <?php if (in_array($this->method, array('main', 'add', 'delete'))) { ?>
	<input type="submit" class="button" value="<?php echo $this->lang->line('admin_submit'); ?>" name="dosubmit">
	<?php } ?>
    </form>
  </div>
</div>
<?php } ?>
</body></html>