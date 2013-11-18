<?php $this->load->view('header_admin') ?>
<?php if ($this->method == 'listinfo') { ?>
<link href="<?php echo $this->staticUrl; ?>admin/css/jquery.treeTable.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $this->staticUrl; ?>common/script/jquery.treetable.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $("#dnd-example").treeTable({
    	indent: 30
    	});
  });
</script>
<div class="pad_10">
  <div class="table-list">
	<?php
		//echo validation_errors();
		$attributes = array('name' => 'myform', 'id' => 'myform');
		echo form_open($this->appMenus[$this->method]['url'], $attributes);
	?>
    <table width="100%" cellspacing="0" id="dnd-example">
      <thead>
        <tr>
          <th><?php echo $this->fieldInfos['catname']['name']; ?></th>
		  <th ><?php echo $this->fieldInfos['id']['name']; ?></th>
		  <th ><?php echo $this->fieldInfos['listorder']['name']; ?></th>
		  <th><?php echo $this->fieldInfos['catdir']['name']; ?></th>
		  <th><?php echo $this->fieldInfos['modelid']['name']; ?></th>
		  <th><?php echo $this->fieldInfos['ishtml']['name']; ?></th>
          <th width="150"><?php echo $this->lang->line('admin_operation'); ?></th>
        </tr>
      </thead>
      <tbody>
      <?php echo $this->categoryStr; ?>
      </tbody>
    </table>
    <div class="btn"><input type="submit"  class="button" name="dosubmit" id="dosubmit" value="<?php echo 'submit';?>" /></div>
    </form>
  </div>
</div>
<?php } else { ?>
<style type="text/css">
.radio-label{ border-top:1px solid #e4e2e2; border-left:1px solid #e4e2e2}
.radio-label td{ border-right:1px solid #e4e2e2; border-bottom:1px solid #e4e2e2;background:#f6f9fd}
</style>
<script type="text/javascript"> 
<!--
	document.domain='<?php echo $this->frontDomain; ?>';
	$(function(){
		$.formValidator.initConfig({formid:"myform",autotip:true,onerror:function(msg,obj){}});
		$("#catname").formValidator({onshow:"请输入栏目名称",onfocus:"请输入栏目名称",oncorrect:"输入正确"}).inputValidator({min:1,onerror:"请输入栏目名称"});
		$("#catdir").formValidator({onshow:"请输入目录名称",onfocus:"请输入目录名称"}).regexValidator({regexp:"^([a-zA-Z0-9]|[_-]){0,30}$",onerror:"目录名称必须为字母、数字、下划线、中划线"}).inputValidator({min:1,onerror:"请输入目录名称"}).ajaxValidator({
			type : "get",
			url : "",
			data :"action=checkCatdir",
			datatype : "html",
			cached:false,
			getdata:{parentid:'parentid', catid:'catid'},
			async:'true',
			cached:false,
			success : function(data){	
				if( data == "1" ){return true;}else{return false;}
			},buttons: $("#dosubmit"),onerror : "目录名称已存在",onwait : "正在连接，请稍候。"}
		);
	})
//-->
</script>
<div class="pad-10">
  <div class="col-tab">
    <ul class="tabBut cu-li">
      <li id="tab_setting_1" class="on" onclick="SwapTab('setting','on','',5,1);">基本选项</li>
      <li id="tab_setting_2" onclick="SwapTab('setting','on','',5,2);">静态化和模板设置</li>
      <li id="tab_setting_3" onclick="SwapTab('setting','on','',5,3);">SEO 设置</li>
    </ul>
  <?php
	echo validation_errors();
	$attributes = array('name' => 'myform', 'id' => 'myform');
	$this->id = isset($this->id) ? $this->id : 0;
	echo form_open($this->appMenus[$this->method]['url'] . '?id=' . $this->id, $attributes);
  ?>
    <div id="div_setting_1" class="contentList pad-10">
      <table width="100%" class="table_form ">
        <tr>
		  <th width="200"><?php echo $this->fieldInfos['parentid']['name']; ?>:</th>
		  <td><select name="parentid" id="parentid"><option value="0"></option><?php echo $this->selectParent; ?></select></td>
        </tr>
        <tr>
		  <th width="200"><?php echo $this->fieldInfos['modelid']['name']; ?>:</th>
		  <td><select name="modelid" id="modelid"><?php echo $this->selectModel; ?></select></td>
        </tr>
        <tr>
          <th><?php echo $this->fieldInfos['catname']['name']; ?>:</th>
          <td><input type="text" name="catname" id="catname" class="input-text" value="<?php if (isset($this->currentInfo['catname'])) echo $this->currentInfo['catname']; ?>"></td>
        </tr>
	    <tr>
          <th><?php echo $this->fieldInfos['catdir']['name']; ?>:</th>
          <td><input type="text" name="catdir" id="catdir" class="input-text" value="<?php if (isset($this->currentInfo['catdir'])) echo $this->currentInfo['catdir']; ?>"></td>
        </tr>
	    <tr>
          <th><?php echo $this->fieldInfos['bind_domain']['name']; ?>:</th>
          <td><input type="text" name="bind_domain" id="bind_domain" class="input-text" value="<?php if (isset($this->currentInfo['bind_domain'])) echo $this->currentInfo['bind_domain']; ?>" size="100px" /><div id="tip" class="onShow">只对一级目录有效！</div></td>
        </tr>
	    <tr>
          <th><?php echo $this->fieldInfos['image']['name']; ?>:</th>
          <td>
		  <script type="text/javascript" src="<?php echo $this->staticUrl; ?>common/swfupload/swf2ckeditor.js"></script>
		  <input type="text" name="image" id="image" value="" size="50" class="" />  
		  <input type="button" class="button" onclick="javascript:flashupload('<?php echo $this->appInfos['passport']['url'];?>attachment/swfupload?', 'image_images', '附件上传','image',submit_images,'1,jpg|jpeg|gif|bmp|png,1,,,0','content','','5afc0afaab383b2983ada373112bad77')"/ value="上传图片">
		  </td>
        </tr>
	    <tr>
          <th><?php echo $this->fieldInfos['description']['name']; ?>:</th>
          <td><textarea name="description" maxlength="255" style="width:300px;height:60px;"><?php if (isset($this->currentInfo['description'])) echo $this->currentInfo['description']; ?></textarea></td>
        </tr>
      </table>
    </div>
    <div id="div_setting_2" class="contentList pad-10 hidden">
      <table width="100%" class="table_form ">
		<tr>
          <th width="200"><?php echo $this->fieldInfos['template_page']['name']; ?>:</th>
          <td id="page_template"><select name="template_page" id="template_page"><?php echo $this->selectTemplatePage; ?></select></td>
        </tr>
		<tr>
          <th width="200"><?php echo $this->fieldInfos['template_big']['name']; ?>:</th>
          <td id="page_template"><select name="template_big" id="template_big"><?php echo $this->selectTemplateBig; ?></select></td>
        </tr>
		<tr>
          <th width="200"><?php echo $this->fieldInfos['template_list']['name']; ?>:</th>
          <td id="page_template"><select name="template_list" id="template_list"><?php echo $this->selectTemplateList; ?></select></td>
        </tr>
		<tr>
          <th width="200"><?php echo $this->fieldInfos['template_show']['name']; ?>:</th>
          <td id="page_template"><select name="template_show" id="template_show"><?php echo $this->selectTemplateShow; ?></select></td>
        </tr>
      </table>
    </div>
    <div id="div_setting_3" class="contentList pad-10 hidden">
      <table width="100%" class="table_form ">
	    <tr>
          <th width="200"><strong><?php echo $this->fieldInfos['meta_title']['name']; ?>:</strong></th>
          <td><input name='meta_title' type='text' id='meta_title' value='<?php if (isset($this->currentInfo['meta_title'])) echo $this->currentInfo['meta_title']; ?>' size='60' maxlength='60'></td>
        </tr>
        <tr>
          <th ><strong><?php echo $this->fieldInfos['meta_keywords']['name']; ?>:</strong></th>
          <td><textarea name='meta_keywords' id='meta_keywords' style="width:90%;height:40px"><?php if (isset($this->currentInfo['meta_keywords'])) echo $this->currentInfo['meta_keywords']; ?></textarea></td>
        </tr>
        <tr>
          <th ><strong><?php echo $this->fieldInfos['meta_description']['name']; ?>:</strong></th>
          <td><textarea name='meta_description' id='meta_description' style="width:90%;height:50px"><?php if (isset($this->currentInfo['meta_description'])) echo $this->currentInfo['meta_description']; ?></textarea></td>
        </tr>
      </table>
    </div>
      <div class="bk15"></div>
	  <input name="catid" type="hidden" value="<?php if(isset($this->id)) echo $this->id; ?>" id="catid">
	  <input name="type" type="hidden" value="1">
      <input name="dosubmit" type="submit" value="提交" class="button">
    </form>
    </div>
  </div>
</div>
<script language="JavaScript">
<!--
window.top.$('#display_center_id').css('display','none');
function SwapTab(name,cls_show,cls_hide,cnt,cur){
	for(i=1;i<=cnt;i++){
		if(i==cur){
			 $('#div_'+name+'_'+i).show();
			 $('#tab_'+name+'_'+i).attr('class',cls_show);
		}else{
			 $('#div_'+name+'_'+i).hide();
			 $('#tab_'+name+'_'+i).attr('class',cls_hide);
		}
	}
}
//-->
</script>
<?php } ?>
</body>
</html>