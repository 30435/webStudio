<?php $this->load->view('header_admin') ?>
<?php  $filepath=str_replace('library/CodeIgniter/','',BASEPATH).'wwwroot/uploadfile/webplat/' ?>
<?php if ($this->method == 'listinfo') { ?>
<div class="pad_10">
  <div class="table-list">
    <table width="100%" cellspacing="0">
      <thead>
        <tr>
          <th width="80">ID</th>
          <th>公告类型</th>
          <th width="150"><?php echo $this->lang->line('admin_operation'); ?></th>
        </tr>
      </thead>
      <tbody>
        <?php if (is_array($this->infos)) { foreach ($this->infos as $info) { ?>
        <tr>
          <td width="80" align="center"><?php echo $info['id']; ?></td>
          <td align="center"><?php echo $info['name']; ?></td>
          <td align="center">
		    <?php foreach ($this->appMenus as $appKey => $appMenu) { if (!in_array($appKey, array('edit', 'view', 'delete','positions','delpositions'))) continue;?>
            <?php if($appKey==='delete'){ ?>
    		        <a href='javascript:;' onclick="return confirm_del('<?php echo $appMenu['url']  . $info['id']?>')" ><?php echo $appMenu['name']; ?></a> |

            <?php }else{?>
                    <a href='<?php echo $appMenu['url']  . $info['id']; ?>'><?php echo $appMenu['name']; ?></a> |
    		<?php } ?>	
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
<div class="pad_10">
  <div class="common-form">
<?php
	echo validation_errors();
	$attributes = array('name' => 'myform', 'id' => 'myform');
	$this->id = isset($this->id) ? $this->id : 0;
	echo form_open_multipart($this->appMenus[$this->method]['url'] . $this->id, $attributes);
?>
    <table width="100%" class="table_form contentWrap">
      <tbody>
        <tr>
          <th width="80">公告类型:</th>
          <td class="y-bg"><input  value="<?php if (isset($this->currentInfo['name'])) echo $this->currentInfo['name']; ?>" size="30" id="name" name="name" class="input-text">
            <div id="codeTip" class="onCorrect"></div></td>
        </tr>

      </tbody>
    </table>

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