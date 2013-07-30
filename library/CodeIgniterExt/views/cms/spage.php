<?php $this->load->view('header_admin') ?>
<div id="closeParentTime" style="display:none"></div>
<SCRIPT LANGUAGE="JavaScript">
<!--
if(window.top.$("#current_pos").data('clicknum')==1) {
	parent.document.getElementById('display_center_id').style.display='';
	parent.document.getElementById('center_frame').src="?m=content&c=content&a=public_categorys&type=add&menuid=<?php echo 'menuid';?>";
	window.top.$("#current_pos").data('clicknum',0);
}
$(document).ready(function(){
	setInterval(closeParent,3000);
});
function closeParent() {
	if($('#closeParentTime').html() == '') {
		window.top.$(".left_menu").addClass("left_menu_on");
		window.top.$("#openClose").addClass("close");
		window.top.$("html").addClass("on");
		$('#closeParentTime').html('1');
		window.top.$("#openClose").data('clicknum',1);
	}
}
//-->
</SCRIPT>
<div class="pad-lr-10">
  <?php
	//echo validation_errors();
	$attributes = array('name' => 'myform', 'id' => 'myform', 'enctype' => 'multipart/form-data');
	$this->id = isset($this->id) ? $this->id : 0;
	echo form_open($this->appMenus[$this->method]['url'] . '?catid=' . $this->catid, $attributes);
  ?>
  <div class="pad_10">
    <div style='overflow-y:auto;overflow-x:hidden' class='scrolltable'>
      <table width="100%" cellspacing="0" class="table_form contentWrap">
        <tr>
	      <th width="80"> <?php echo 'title';?></th>
          <td>
		    <input type="text" style="width:400px;" name="title" id="title" value="<?php if (isset($this->currentInfo['title'])) echo $this->currentInfo['title']; ?>" style="color:<?php if (isset($this->currentInfo['style'])) echo $this->currentInfo['style']; ?>" class="measure-input " onBlur="$.post('api.php?op=get_keywords&number=3&sid='+Math.random()*5, {data:$('#title').val()}, function(data){if(data && $('#keywords').val()=='') $('#keywords').val(data); })"/>
		    <input type="hidden" name="style_color" id="style_color" value="<?php if (isset($this->currentInfo['style_color'])) echo $this->currentInfo['style_color']; ?>">
		    <input type="hidden" name="style_font_weight" id="style_font_weight" value="<?php if (isset($this->currentInfo['style_font_weight'])) echo $this->currentInfo['style_font_weight']; ?>">
		    <img src="<?php echo $this->staticUrl; ?>admin/images/icon/colour.png" width="15" height="16" onclick="colorpicker('title_colorpanel','set_title_color');" style="cursor:hand"/> 
		    <img src="<?php echo $this->staticUrl; ?>admin/images/icon/bold.png" width="10" height="10" onclick="input_font_bold()" style="cursor:hand"/> <span id="title_colorpanel" style="position:absolute; z-index:200" class="colorpanel"></span> 
		  </td>
        </tr>
        <tr>
          <th width="80"> <?php echo 'keywords';?>	  </th>
          <td><input type="text" name="keywords" id="keywords" value="<?php if (isset($this->currentInfo['keywords'])) echo $this->currentInfo['keywords']; ?>" size="50">  <?php echo 'explode_keywords';?></td>
        </tr>
        <tr>
          <th width="80"><?php echo 'content';?></th>
          <td>
            <?php 			
				$contentAuto= isset($this->currentInfo['content']) ? $this->currentInfo['content'] : '';
				echo $this->ckeditor->editor('content',$contentAuto); 
			?>
          </td>
		</tr>
      </table>
    </div>
    <div class="bk10"></div>
    <div class="btn">
      <input type="hidden" name="catid" value="<?php echo $this->catid;?>" />
      <input type="hidden" name="edit" value="<?php echo 'title' ? 1 : 0;?>" />
      <input type="submit" class="button" name="dosubmit" value="<?php echo 'submit';?>" />
    </div> 
  </div>
  </form>
</div>
<script language="javascript" type="text/javascript" src="<?php echo $this->staticUrl; ?>common/script/content_addtop.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->staticUrl; ?>common/script/colorpicker.js"></script>
</body>
</html>