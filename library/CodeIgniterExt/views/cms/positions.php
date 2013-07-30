<?php $this->load->view('header_admin') ?>
<?php  $filepath=str_replace('library/CodeIgniter/','',BASEPATH).'wwwroot/uploadfile/webplat/' ?>
<?php if ($this->method == 'positions') { ?>
<div class="pad_10">
  <form action="<?php echo $this->appMenus[$this->method]['url'] . $this->posid.'/'.$this->page;?>" method="post">
  <div class="table-list">

    <table width="100%" cellspacing="0">
      <thead>
        <tr>
          <th width='40'><input type="checkbox" id="all" >全选</th>
          <th width="80">ID</th>
          <th>标题</th>
         
        </tr>
      </thead>
      <tbody>

        <?php if (is_array($this->infos)) { foreach ($this->infos as $info) { ?>
        <tr>
          <td><input type="checkbox" name="checkbox[]" value="<?php echo $info['id'];?>" 
          <?php 
          	if(!empty($this->res)){
          	if(in_array($info['id'],$this->res)) {
          ?> 
          	checked 
          <?php }}?> ></input></td>
          <td width="80" align="center"><a href='<?php echo $info['url'];?>' target='_blank'><?php echo $info['id']; ?></a></td>
          <td align="center"><a href='<?php echo $info['url'];?>' target='_blank'><?php echo $info['title']; ?></a></td>
          <td align="center">
		   
		  </td>
        </tr>
        <?php } } ?>
      </tbody>
    </table>
   </div>
   <input type="submit" value="推荐" class="button">
  <div id="pages"> <?php echo $this->pageStr; ?></div>
  </form>
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
          <th width="80"><?php echo $this->lang->line('service_name'); ?>:</th>
          <td class="y-bg"><input  value="<?php if (isset($this->currentInfo['name'])) echo $this->currentInfo['name']; ?>" size="30" id="name" name="name" class="input-text">
            <div id="codeTip" class="onCorrect"></div></td>
        </tr>

		<tr>
          <th width="200"><?php echo $this->lang->line('service_game'); ?>:</th>
          <td><select name="game" ><?php echo $this->selectGame; ?></select></td>
        </tr>

        <tr>
          <th width="80"><?php echo $this->lang->line('service_pic'); ?>:</th>
          <td class="y-bg"><input  type="file"   name="service_pic" >
            <div id="service_pic" ><?php if (isset($this->currentInfo['pic'])) echo $this->lang->line('file_exist'); ?></div></td>
        </tr>
        <tr ><td class="y-bg" colspan='2' align='center'>
        <img width='320' height='180' src="<?php if(isset($this->currentInfo['pic'])) echo $this->publicConfig['customUploadfileUrl'].$this->currentInfo['pic']?>" ></div>
    <div class="bk15">
        </td></tr>

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
     $(function(){
     	$("#all").click(function(){
         	if($("#all").attr('checked')){
         		$("input:checkbox").attr("checked",'true');
             }else{
            	 $("input:checkbox").removeAttr("checked");
             }
     	});	
     });
</script>
</html>