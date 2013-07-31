<?php $this->load->view('header_admin'); ?>

<link href="http://localhost/php9/statics/js/swfupload/swfupload.css" rel="stylesheet" type="text/css" />
<form name="myform" action="" method="get" >
<input type="hidden" value="attachment" name="m">
<input type="hidden" value="attachments" name="c">
<input type="hidden" value="album_load" name="a">
<input type="hidden" value="1" name="info[file_upload_limit]">
<div class="lh26" style="padding:10px 0 0">
<label>名称</label>
<input type="text" value="" class="input-text" name="info[filename]"> 
<label>日期</label>
<link rel="stylesheet" type="text/css" href="http://localhost/php9/statics/js/calendar/jscal2.css"/>
			<link rel="stylesheet" type="text/css" href="http://localhost/php9/statics/js/calendar/border-radius.css"/>
			<link rel="stylesheet" type="text/css" href="http://localhost/php9/statics/js/calendar/win2k.css"/>
			<script type="text/javascript" src="http://localhost/php9/statics/js/calendar/calendar.js"></script>
			<script type="text/javascript" src="http://localhost/php9/statics/js/calendar/lang/en.js"></script><input type="text" name="info[uploadtime]" id="uploadtime" value="" size="10" class="date" readonly>&nbsp;<script type="text/javascript">
			Calendar.setup({
			weekNumbers: true,
		    inputField : "uploadtime",
		    trigger    : "uploadtime",
		    dateFormat: "%Y-%m-%d",
		    showTime: false,
		    minuteStep: 1,
		    onSelect   : function() {this.hide();}
			});
        </script><input type="submit" value="搜索" class="button" name="dosubmit">
</div>
</form>
<div class="bk20 hr"></div>
<ul class="attachment-list"  id="fsUploadProgress">
<li>
	<div class="img-wrap">
		<a href="javascript:;" onclick="javascript:album_cancel(this,'5','http://localhost/php9/uploadfile/2013/0131/20130131035305537.jpg')"><div class="icon"></div><img src="http://localhost/php9/uploadfile/2013/0131/20130131035305537.jpg" width="80" path="http://localhost/php9/uploadfile/2013/0131/20130131035305537.jpg" title="酷巴熊日用品系列9W_16.jpg"/></a>
	</div>
</li>
<li>
	<div class="img-wrap">
		<a href="javascript:;" onclick="javascript:album_cancel(this,'4','http://localhost/php9/uploadfile/2013/0131/20130131034009403.jpg')"><div class="icon"></div><img src="http://localhost/php9/uploadfile/2013/0131/20130131034009403.jpg" width="80" path="http://localhost/php9/uploadfile/2013/0131/20130131034009403.jpg" title="酷巴熊日用品系列9W_05.jpg"/></a>
	</div>
</li>
<li>
	<div class="img-wrap">
		<a href="javascript:;" onclick="javascript:album_cancel(this,'3','http://localhost/php9/uploadfile/2013/0131/20130131034008728.jpg')"><div class="icon"></div><img src="http://localhost/php9/uploadfile/2013/0131/20130131034008728.jpg" width="80" path="http://localhost/php9/uploadfile/2013/0131/20130131034008728.jpg" title="酷巴熊日用品系列9W_16.jpg"/></a>
	</div>
</li>
<li>
	<div class="img-wrap">
		<a href="javascript:;" onclick="javascript:album_cancel(this,'2','http://localhost/php9/uploadfile/2013/0131/20130131032528227.jpg')"><div class="icon"></div><img src="http://localhost/php9/uploadfile/2013/0131/20130131032528227.jpg" width="80" path="http://localhost/php9/uploadfile/2013/0131/20130131032528227.jpg" title="酷巴熊日用品系列9W_04.jpg"/></a>
	</div>
</li>
<li>
	<div class="img-wrap">
		<a href="javascript:;" onclick="javascript:album_cancel(this,'1','http://localhost/php9/uploadfile/2013/0130/20130130042040501.jpg')"><div class="icon"></div><img src="http://localhost/php9/uploadfile/2013/0130/20130130042040501.jpg" width="80" path="http://localhost/php9/uploadfile/2013/0130/20130130042040501.jpg" title="酷巴熊日用品系列9W_05.jpg"/></a>
	</div>
</li>
</ul>
 <div id="pages" class="text-c"> </div>
<script type="text/javascript">
$(document).ready(function(){
	set_status_empty();
});	
function set_status_empty(){
	parent.window.$('#att-status').html('');
	parent.window.$('#att-name').html('');
}
function album_cancel(obj,id,source){
	var src = $(obj).children("img").attr("path");
	var filename = $(obj).children("img").attr("title");
	if($(obj).hasClass('on')){
		$(obj).removeClass("on");
		var imgstr = parent.window.$("#att-status").html();
		var length = $("a[class='on']").children("img").length;
		var strs = filenames = '';
		$.get('index.php?m=attachment&c=attachments&a=swfupload_json_del&aid='+id+'&src='+source);
		for(var i=0;i<length;i++){
			strs += '|'+$("a[class='on']").children("img").eq(i).attr('path');
			filenames += '|'+$("a[class='on']").children("img").eq(i).attr('title');
		}
		parent.window.$('#att-status').html(strs);
		parent.window.$('#att-name').html(filenames);
	} else {
		var num = parent.window.$('#att-status').html().split('|').length;
		var file_upload_limit = '1';
		if(num > file_upload_limit) {alert('不能选择超过'+file_upload_limit+'个附件'); return false;}
		$(obj).addClass("on");
		$.get('index.php?m=attachment&c=attachments&a=swfupload_json&aid='+id+'&src='+source);
		parent.window.$('#att-status').append('|'+src);
		parent.window.$('#att-name').append('|'+filename);
	}
}
</script>