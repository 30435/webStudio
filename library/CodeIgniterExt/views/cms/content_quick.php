<?php $this->load->view('header_admin') ?>
<div id="closeParentTime" style="display:none"></div>
<SCRIPT LANGUAGE="JavaScript">
<!--
document.domain='<?php echo $this->frontDomain; ?>';
if(window.top.$("#current_pos").data('clicknum')==1 || window.top.$("#current_pos").data('clicknum')==null) {
	parent.document.getElementById('display_center_id').style.display='';
	parent.document.getElementById('center_frame').src = '<?php echo $this->baseUrl . 'admin/content/catquick/?subCat=subCat'; ?>';
	window.top.$("#current_pos").data('clicknum',0);
}
$(document).ready(function(){
	setInterval(closeParent,5000);
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
<div class="showMsg" style="text-align:center">
	<h5>内容管理</h5>
    <div class="content">
    <ul id="search_div">点击左侧栏目，实现对指定栏目的内容管理</ul>
	</div>
</div>
</body>
</html>
