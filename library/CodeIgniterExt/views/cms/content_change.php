<?php $this->load->view('header_admin') ?>
<script type="text/javascript">
<!--
	var charset = 'utf-8';
	var uploadurl = '<?php echo $this->uploadUrl; ?>';
//-->
</script>
<script language="javascript" type="text/javascript" src="<?php echo $this->staticUrl; ?>common/script/content_addtop.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->staticUrl; ?>common/script/colorpicker.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->staticUrl; ?>common/script/hotkeys.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->staticUrl; ?>common/script/cookie.js"></script>
<script type="text/javascript" src="<?php echo $this->staticUrl; ?>common/swfupload/swf2ckeditor.js"></script>
<script type="text/javascript">
var catid=<?php echo $this->catid; ?>;
document.domain='<?php echo $this->frontDomain; ?>';
</script>
<?php
  //echo validation_errors();
  $attributes = array('name' => 'myform', 'id' => 'myform', 'enctype' => 'multipart/form-data');
  $this->id = isset($this->id) ? $this->id : 0;
  echo form_open($this->appMenus[$this->method]['url'] . '?catid=' . $this->catid . '&id=' . $this->id, $attributes);
?>
<div class="addContent">
  <div class="crumbs">当前位置：内容  > 内容发布管理 > 添加内容</div>
  <div class="col-auto">
    <div class="col-1">
      <div class="content pad-6">
      <table width="100%" cellspacing="0" class="table_form">
	    <tbody>	
	      <tr>
            <th width="80"> <font color="red">*</font><?php echo $this->fieldInfos['catid']['name']; ?>:</th>
            <td>
	          <input type="hidden" name="catid" value="<?php echo $this->catid; ?>"><?php echo $this->currentCategoryInfo['catname']; ?>
	        </td>
          </tr>
	      <tr>
            <th width="80"> <font color="red">*</font><?php echo $this->fieldInfos['title']['name']; ?>:</th>
            <td>
	          <input type="text" style="width:400px;" name="title" id="title" value="<?php if (isset($this->currentInfo['title'])) echo $this->currentInfo['title']; ?>" style="color:" class="measure-input " />
		      <input type="hidden" name="style_color" id="style_color" value="">
	        </td>
          </tr>
		  <tr>
			<th><?php echo $this->fieldInfos['thumb']['name']; ?>:</th>
			<td>
			  <script type="text/javascript" src="<?php echo $this->staticUrl; ?>common/swfupload/swf2ckeditor.js"></script>
			  <input type="text" name="thumb" id="thumb" value="<?php if (isset($this->currentInfo['thumb'])) echo $this->currentInfo['thumb']; ?>" size="50" class="" />  
			  <input type="button" class="button" onclick="javascript:flashupload('<?php echo $this->appInfos['passport']['url'];?>attachment/swfupload?', 'image_images', '附件上传','thumb',submit_images,'1,jpg|jpeg|gif|bmp|png,1,,,0','content','','5afc0afaab383b2983ada373112bad77')"/ value="上传图片">
			</td>
		  </tr>
		  <tr>
			<th width="100"><?php echo $this->fieldInfos['position']['name']; ?>：</th>
			<td><select name="position" id="position"><?php echo $this->selectPosition; ?></select></td>
		  </tr>
		  <tr>
			<th width="100"><?php echo $this->fieldInfos['copyfrom']['name']; ?>：</th>
			<td><select name="copyfrom" id="copyfrom"><?php echo $this->selectCopyfrom; ?></select></td>
		  </tr>
		  <tr>
			<th width="100"><?php echo $this->fieldInfos['editor']['name']; ?>：</th>
			<td><input type="text" name="editor" id="editor" value="<?php if (isset($this->currentInfo['editor'])) echo $this->currentInfo['editor']; ?>" /></td>
		  </tr>
		  <tr>
			<th width="100"><?php echo $this->fieldInfos['template']['name']; ?>：</th>
			<td><select name="template" id="template"><?php echo $this->selectTemplate; ?></select></td>
		  </tr>
	      <tr>
            <th width="80"><?php echo $this->fieldInfos['keywords']['name']; ?>:</th>
            <td><input type='text' name='keywords' id='keywords' value="<?php if (isset($this->currentInfo['keywords'])) echo $this->currentInfo['keywords']; ?>" style='width:280px' class='input-text'>多关键词之间用空格或者“,”隔开</td>
          </tr>
	      <tr>
            <th width="80"><?php echo $this->fieldInfos['description']['name']; ?>:</th>
            <td><textarea name='description' id='description' style='width:98%;height:46px;'   onkeyup="strlen_verify(this, 'description_len', 255)"><?php if (isset($this->currentInfo['description'])) echo $this->currentInfo['description']; ?></textarea>还可输入<B><span id="description_len">255</span></B> 个字符  </td>
          </tr>
      	  <tr>
            <th width="80"> <font color="red">*</font><?php echo $this->fieldInfos['content']['name']; ?>:</th>
            <td>
	          <div id='content_tip'></div>
      	      <?php
	          	$contentAuto= isset($this->currentInfo['content']) ? $this->currentInfo['content'] : '';
		        echo $this->ckeditor->editor('content', $contentAuto); 
      		  ?>
	        </td>
          </tr>
        </tbody>
	  </table>
    </div>
  </div>
</div>

</div>
</div>
<?php if (in_array($this->method, array('add', 'edit'))) { ?>
<div class="fixed-bottom">
	<div class="fixed-but text-c">
		<div class="button"><input value="保存后自动关闭" type="submit" name="dosubmit" class="cu" style="width:145px;" onclick="refersh_window()"></div>
		<div class="button"><input value="保存并继续发表" type="submit" name="dosubmit_continue" class="cu" style="width:130px;" title="Alt+X" onclick="refersh_window()"></div>
		<div class="button"><input value="关闭(X)" type="button" name="close" onclick="refersh_window();close_window();" class="cu" style="width:70px;"></div>
    </div>
</div>
<?php } ?>
</form>
</body>
</html>
<script type="text/javascript"> 
<!--
//只能放到最下面
var openClose = $("#RopenClose"), rh = $(".addContent .col-auto").height(), colRight = $(".addContent .col-right"), valClose = getcookie('openClose');
$(function(){
	if(valClose==1){
		colRight.hide();
		openClose.addClass("r-open");
		openClose.removeClass("r-close");
	}else{
		colRight.show();
	}
	openClose.height(rh);
	$.formValidator.initConfig({formid:"myform",autotip:true,onerror:function(msg,obj){window.top.art.dialog({id:'check_content_id',content:msg,lock:true,width:'200',height:'50'}, 	function(){$(obj).focus();
	boxid = $(obj).attr('id');
	if($('#'+boxid).attr('boxid')!=undefined) {
		check_content(boxid);
	}
	})}});
	$("#title").formValidator({onshow:"",onfocus:"请输入标题"}).inputValidator({min:1,max:80,onerror:"标题不能为空"});$("#content").formValidator({onshow:"",onfocus:"内容不能为空"}).functionValidator({
	    fun:function(val,elem){
			var oEditor = CKEDITOR.instances.content;
			var data = oEditor.getData();
	        if($('#islink').attr('checked')){
			    return true;
		    } else if(($('#islink').attr('checked')==false) && (data=='')){
			    return "内容不能为空";
		    } else if (data=='' || $.trim(data)=='') {
				return "内容不能为空";
			}
			return true;
		}
	});	
/*
 * 加载禁用外边链接
 */

	$('#linkurl').attr('disabled',true);
	$('#islink').attr('checked',false);
	$('.edit_content').hide();
	jQuery(document).bind('keydown', 'Alt+x', function (){close_window();});
})
document.title='添加内容';
self.moveTo(-4, -4);
function refersh_window() {
	setcookie('refersh_time', 1);
}
openClose.click(
	  function (){
		if(colRight.css("display")=="none"){
			setcookie('openClose',0,1);
			openClose.addClass("r-close");
			openClose.removeClass("r-open");
			colRight.show();
		}else{
			openClose.addClass("r-open");
			openClose.removeClass("r-close");
			colRight.hide();
			setcookie('openClose',1,1);
		}
	}
)
//-->
</script>
