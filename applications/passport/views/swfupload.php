<?php $this->load->view('header_admin'); ?>
<link href="<?php echo $this->staticUrl; ?>common/swfupload/swfupload.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" type="text/javascript" src="<?php echo $this->staticUrl; ?>common/swfupload/swfupload.js"></script>
<script language="JavaScript" type="text/javascript" src="<?php echo $this->staticUrl; ?>common/swfupload/fileprogress.js"></script>
<script language="JavaScript" type="text/javascript" src="<?php echo $this->staticUrl; ?>common/swfupload/handlers.js"></script>
<script type="text/javascript"><?php echo $this->_uploadString; ?></script>
<div class="pad-10">
    <div class="col-tab">
        <ul class="tabBut cu-li">
            <li id="tab_swf_1" <?php echo $this->tabStatus; ?> onclick="SwapTab('swf','on','',5,1);">上传附件</li>
            <li id="tab_swf_2" onclick="SwapTab('swf','on','',5,2);">网络文件</li>
            <li id="tab_swf_3" onclick="SwapTab('swf','on','',5,3);set_iframe('album_list','<?php echo $this->baseUrl; ?>attachment/album_load?args=<?php echo $this->uploadArgs['args']; ?>');">图库</li>
            <li id="tab_swf_4" onclick="SwapTab('swf','on','',5,4);set_iframe('album_dir','<?php echo $this->baseUrl; ?>attachment/album_load?args=<?php echo $this->uploadArgs['args']; ?>');">目录浏览</li>
            <li id="tab_swf_5" class="on icon" onclick="SwapTab('swf','on','',5,5);">未处理文件</li>
        </ul>
         <div id="div_swf_1" class="content pad-10 <?php echo $this->divStatus?>">
        	<div>
				<div class="addnew" id="addnew"><span id="buttonPlaceHolder"></span></div>
				<input type="button" id="btupload" value="开始上传" onClick="swfu.startUpload();" />
                <div id="nameTip" class="onShow">最多上传<font color="red"> <?php echo $this->uploadArgs['fileNumLimit']; ?></font> 个附件,单文件最大 <font color="red"><?php echo $this->uploadArgs['fileSizeLimit']; ?> MB</font></div>
                <div class="bk3"></div>
                <div class="lh24">支持 <font style="font-family: Arial, Helvetica, sans-serif"><?php echo $this->uploadArgs['fileTypesPost']; ?></font> 格式。</div>
				<input type="checkbox" id="watermark_enable" value="1" <?php if(isset($this->uploadArgs['watermarkEnable']) && $this->uploadArgs['watermarkEnable'] == 1) echo 'checked'; ?> onclick="change_params()"> 是否添加水印        	
			</div> 	
    		<div class="bk10"></div>
        	<fieldset class="blue pad-10" id="swfupload">
        	<legend>列表</legend>
        	<ul class="attachment-list"  id="fsUploadProgress">    
        	</ul>
    		</fieldset>
    	</div>
        <div id="div_swf_2" class="contentList pad-10 hidden">
        <div class="bk10"></div>
        	请输入网络地址<div class="bk3"></div><input type="text" name="filename" class="input-text" value=""  style="width:350px;"  onblur="addonlinefile(this)">
			<div class="bk10"></div>
        </div> 

        <div id="div_swf_3" class="contentList pad-10 hidden">
            <ul class="attachment-list">
        	 <iframe name="album-list" src="#" frameborder="false" scrolling="no" style="overflow-x:hidden;border:none" width="100%" height="345" allowtransparency="true" id="album_list"></iframe>   
        	</ul>
        </div>
        <div id="div_swf_4" class="contentList pad-10 hidden">
            <ul class="attachment-list">
        	 <iframe name="album-dir" src="#" frameborder="false" scrolling="auto" style="overflow-x:hidden;border:none" width="100%" height="330" allowtransparency="true" id="album_dir"></iframe>   
        	</ul>
        </div>
        <div id="div_swf_5" class="contentList pad-10" style="display: none">
        	<div class="explain-col">上次上传未处理的附件，如使用请点击选择。</div>
            <ul class="attachment-list" id="album">
            <?php if(is_array($att) && !empty($att)){ foreach ($att as $_v) {?>
			<li>
				<div class="img-wrap">
					<a onclick="javascript:album_cancel(this,<?php echo $_v['aid']?>,'<?php echo $_v['src']?>')" href="javascript:;" class="off"  title="<?php echo $_v['filename']?>"><div class="icon"></div><img width="<?php echo $_v['width']?>"  path="<?php echo $_v['src']?>" src="<?php echo $_v['fileimg']?>" title="<?php echo $_v['filename']?>"></a>
				</div>
			</li>
			<?php }}?>
        	</ul>
        </div> 
                     
    <div id="att-status" class="hidden"></div>
     <div id="att-status-del" class="hidden"></div>
    <div id="att-name" class="hidden"></div>
<!-- swf -->
</div>
</body>
<script type="text/javascript">
document.domain='<?php echo $this->frontDomain; ?>';
if ($.browser.mozilla) {
	window.onload=function(){
	  if (location.href.indexOf("&rand=")<0) {
			location.href=location.href+"&rand="+Math.random();
		}
	}
}
function imgWrap(obj){
	$(obj).hasClass('on') ? $(obj).removeClass("on") : $(obj).addClass("on");
}

function SwapTab(name,cls_show,cls_hide,cnt,cur) {
    for(i=1;i<=cnt;i++){
		if(i==cur){
			 $('#div_'+name+'_'+i).show();
			 $('#tab_'+name+'_'+i).addClass(cls_show);
			 $('#tab_'+name+'_'+i).removeClass(cls_hide);
		}else{
			 $('#div_'+name+'_'+i).hide();
			 $('#tab_'+name+'_'+i).removeClass(cls_show);
			 $('#tab_'+name+'_'+i).addClass(cls_hide);
		}
	}
}

function addonlinefile(obj) {
	var strs = $(obj).val() ? '|'+ $(obj).val() :'';
	$('#att-status').html(strs);
}

function change_params(){
	if($('#watermark_enable').attr('checked')) {
		swfu.addPostParam('watermark_enable', '1');
	} else {
		swfu.removePostParam('watermark_enable');
	}
}
function set_iframe(id,src){
	$("#"+id).attr("src",src); 
}
function album_cancel(obj,id,source){
	var src = $(obj).children("img").attr("path");
	var filename = $(obj).attr('title');
	if($(obj).hasClass('on')){
		$(obj).removeClass("on");
		var imgstr = $("#att-status").html();
		var length = $("a[class='on']").children("img").length;
		var strs = filenames = '';
		$.get('index.php?m=attachment&c=attachments&a=swfupload_json_del&aid='+id+'&src='+source+'&filename='+filename);
		for(var i=0;i<length;i++){
			strs += '|'+$("a[class='on']").children("img").eq(i).attr('path');
			filenames += '|'+$("a[class='on']").children("img").eq(i).attr('title');
		}
		$('#att-status').html(strs);
		$('#att-status').html(filenames);
	} else {
		var num = $('#att-status').html().split('|').length;
		var file_upload_limit = '1';
		if(num > file_upload_limit) {alert('不能选择超过'+file_upload_limit+'个附件'); return false;}
		$(obj).addClass("on");
		$.get('index.php?m=attachment&c=attachments&a=swfupload_json&aid='+id+'&src='+source+'&filename='+filename);
		$('#att-status').append('|'+src);
		$('#att-name').append('|'+filename);
	}
}
</script>
</html>