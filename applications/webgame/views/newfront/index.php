<?php echo $this->load->view('newfront/header'); ?>
<body>
<div class="index">
	<!--顶部通知-->
	<?php echo $this->load->view('newfront/inline_header'); ?>
	<!--内容-->
	<div class="wrap">
		<!--top大图-->
		<div class="top-big"><iframe width="956" scrolling="no" height="640" frameborder="0" src="<?php echo $this->currentWebgameInfo['url_webgame']; ?>" class="frm"></iframe></div>
		<div id="novaInfo"></div>
	</div>
	<!--底部-->
	<?php echo $this->load->view('newfront/inline_footer'); ?>
</div>
<script type="text/javascript" src="<?php echo $this->staticUrl; ?>common/script/dialog.js" language="javascript"></script>
<script type="text/javascript">
function searchFunc()
{
	document.searchForm.submit();
}

var key =false;
function keydown (e) {
    e = e || window.event;
    key = e.keyCode;
    key =e.ctrlKey;
}

var scrollFunc = function (e) {
    var direct=0;
    e=e || window.event;
    //alert(key);
    if (key) {
        if (document.addEventListener) {
            e.preventDefault();
        } else {
            window.event.returnValue = false;
        }
        return false;
    }
}

/*注册事件*/
if (document.addEventListener) {
    document.addEventListener('DOMMouseScroll',scrollFunc,false);
}
window.onmousewheel=document.onmousewheel=scrollFunc;//IE/Opera/Chrome/Safari
window.onkeydown = document.onkeydown = keydown;

<!--
document.domain='ci.com';
function showStatic()
{
	var url = 'http://www.baidu.com';
	window.top.art.dialog({id:'show'}).close();
	window.top.art.dialog({title:'操作详情',id:'show',iframe: url,width:'700',height:'500'}, function(){
		var d = window.top.art.dialog({id:'show'}).data.iframe;return false;
	}, function(){window.top.art.dialog({id:'show'}).close()});
}

$(function(){
    t = setTimeout("showInfos()",2000);
});

function showInfos()
{
	$.ajax({
		type: "get", 
		url: '<?php echo $this->categoryInfos[8]['bind_domain']; ?>novaInfos',
		success: function (data) {
			$('#novaInfo').html(data);
		},
		cache: false
	});
}	
//-->
</script>

</body>
</html>

