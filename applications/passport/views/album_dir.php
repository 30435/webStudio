<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8 echo CHARSET?>" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<title>phpcmsV9 - 后台管理中心</title>
<link href="http://localhost/php9/statics/css/reset.css" rel="stylesheet" type="text/css" />
<link href="http://localhost/php9/statics/css/zh-cn-system.css" rel="stylesheet" type="text/css" />
<link href="http://localhost/php9/statics/css/table_form.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="http://localhost/php9/statics/css/style/zh-cn-styles1.css" title="styles1" media="screen" />
	<link rel="alternate stylesheet" type="text/css" href="http://localhost/php9/statics/css/style/zh-cn-styles2.css" title="styles2" media="screen" />
	<link rel="alternate stylesheet" type="text/css" href="http://localhost/php9/statics/css/style/zh-cn-styles3.css" title="styles3" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="http://localhost/php9/statics/css/style/zh-cn-styles4.css" title="styles4" media="screen" />
<script language="javascript" type="text/javascript" src="http://localhost/php9/statics/js/jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="http://localhost/php9/statics/js/admin_common.js"></script>
<script language="javascript" type="text/javascript" src="http://localhost/php9/statics/js/styleswitch.js"></script>
<style type="text/css">
	html{_overflow-y:scroll}
</style>
<link href="http://localhost/php9/statics/js/swfupload/swfupload.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="http://localhost/php9/statics/js/jquery.imgpreview.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		var obj=$("#imgPreview a[rel]");
		if(obj.length>0) {
			$('#imgPreview a[rel]').imgPreview({
				srcAttr: 'rel',
			    imgCSS: { width: 200 }
			});
		}
	});	
</script>
<div class="pad-lr-10">
<div class="table-list">
<table width="100%" cellspacing="0" id="imgPreview">
<tr>
<td align="left">当前目录：uploadfile/</td>
</tr>
<tr>
<td align="left"><img src="http://localhost/php9/statics/images/folder-closed.gif" /> <a href="?m=attachment&c=attachments&a=album_dir&dir=poster"><b>poster</b></a></td></tr>
<tr>
<td align="left"><img src="http://localhost/php9/statics/images/folder-closed.gif" /> <a href="?m=attachment&c=attachments&a=album_dir&dir=2013"><b>2013</b></a></td></tr>
</table>
</div>
</div>
</body>
<script type="text/javascript">
$(document).ready(function(){
	set_status_empty();
});	
function set_status_empty(){
	parent.window.$('#att-status').html('');
	parent.window.$('#att-name').html('');
}
function album_cancel(obj){
	var src = $(obj).children("a").attr("rel");
	var filename = $(obj).children("a").attr("title");
	if($(obj).hasClass('on')){
		$(obj).removeClass("on");
		var imgstr = parent.window.$("#att-status").html();
		var length = $("a[class='on']").children("a").length;
		var strs = filenames = '';
		for(var i=0;i<length;i++){
			strs += '|'+$("a[class='on']").children("a").eq(i).attr('rel');
			filenames += '|'+$("a[class='on']").children("a").eq(i).attr('title');
		}
		parent.window.$('#att-status').html(strs);
		parent.window.$('#att-name').html(filenames);
	} else {
		var num = parent.window.$('#att-status').html().split('|').length;
		var file_upload_limit = '1';
		$(obj).addClass("on");
		parent.window.$('#att-status').append('|'+src);
		parent.window.$('#att-name').append('|'+filename);
	}
}
</script>
</html>