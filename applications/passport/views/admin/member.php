<?php $this->load->view('header_admin') ?>
<?php if ($this->method == 'listinfo') { ?>
<div class="pad_10">
  <div class="table-list">
    <table width="100%" cellspacing="0">
      <thead>
        <tr>
          <th width="80">ID</th>
          <th><?php echo $this->lang->line('member_name'); ?></th>
		  <th><?php echo $this->lang->line('member_email'); ?></th>
		  <th><?php echo $this->lang->line('member_createtime'); ?></th>
		  <th><?php echo $this->lang->line('member_loginnum'); ?></th>
		  <th><?php echo $this->lang->line('member_lastip'); ?></th>
		  <th><?php echo $this->lang->line('member_lasttime'); ?></th>
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
		    <?php foreach ($this->appMenus as $appKey => $appMenu) { if (!in_array($appKey, array('edit', 'view', 'delete'))) continue;?>
            <?php if($appKey==='delete'){ ?>
    		        <a href='javascript:;' onclick="return confirm_del('<?php echo $appMenu['url']  . $info['userid']?>')" ><?php echo $appMenu['name']; ?></a> |

            <?php }else{?>
                    <a href='<?php echo $appMenu['url']  . $info['id']; ?>'><?php echo $appMenu['name']; ?></a> |
    		<?php } } ?>
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
          <th width="80"><?php echo $this->lang->line('member_name'); ?>:</th>
          <td class="y-bg"><input type="text" value="<?php if (isset($this->currentInfo['username'])) echo $this->currentInfo['username']; ?>" size="30" id="username" name="username" class="input-text">
            <div id="nameTip" class="onCorrect"></div></td>
        </tr>

        <tr>
          <th width="80"><?php echo $this->lang->line('member_password'); ?>:</th>
          <td class="y-bg"><input type="password" value="" size="30" id="password" name="password" class="input-text">
            <div id="passwordTip" class="onCorrect"></div></td>
        </tr>

        <tr>
          <th><?php echo $this->lang->line('member_email'); ?>:</th>
          <td class="y-bg"><input type="text" value="<?php if (isset($this->currentInfo['email'])) echo $this->currentInfo['email']; ?>" size="50" id="email" name="email" class="input-text">
            <div id="emailTip" class="onShow"></div></td>
        </tr>

            <!--
                <tr>
          <th><?php echo $this->lang->line('member_islock'); ?>:</th>
          <td class="y-bg">
            <?php echo $this->lang->line('member_lock'); ?>
            <input type="radio" name="islock" value='1' <?php if (isset($this->currentInfo['islock'])) echo 'checked'; ?>>
            <?php echo $this->lang->line('member_nlock'); ?>
            <input type="radio" name="islock" value='0' <?php if (isset($this->currentInfo['islock'])) echo 'checked'; ?>>
          </td>
        </tr> -->

      </tbody>
    </table>
    <div class="bk15"></div>
    <?php if (in_array($this->method, array('edit', 'add', 'delete'))) { ?><input type="submit" class="button" value="<?php echo $this->lang->line('admin_submit'); ?>" name="dosubmit"><?php } ?>
    </form>
  </div>
</div>
<?php } ?>
</body>
<script type="text/javascript">
     function confirm_del(url){
         if (confirm('确认删除?'))
             window.location.href=url;
         }
</script>
</html>