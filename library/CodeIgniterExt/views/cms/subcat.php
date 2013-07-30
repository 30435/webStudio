<?php $this->load->view('header_admin') ?>
<link type="text/css" href="<?php echo $this->staticUrl; ?>admin/css/jquery.treeview.css" rel="stylesheet">
<script src="<?php echo $this->staticUrl; ?>common/script/jquery.cookie.js" type="text/javascript"></script>
<script src="<?php echo $this->staticUrl; ?>common/script/jquery.treeview.js" type="text/javascript"></script>
<script language="JavaScript">
document.domain='<?php echo $this->frontDomain; ?>';
$(document).ready(function(){
    $("#category_tree").treeview({
			control: "#treecontrol",
			persist: "cookie",
			cookieId: "treeview-black"
	});
});
function open_list(obj) {

	window.top.$("#current_pos_attr").html($(obj).html());
}

</script>
<style type="text/css">
.filetree *{white-space:nowrap;}
.filetree span.folder, .filetree span.file{display:auto;padding:1px 0 1px 16px;}
 </style>
<ul class="filetree  treeview">
  <li class="collapsable">
    <div class="hitarea collapsable-hitarea"></div>
    <span><img width="15" height="14" src="<?php echo $this->staticUrl; ?>admin/images/icon/box-exclaim.gif">&nbsp;<a target="right" href="javascript: void(0);">审核内容</a></span></li>
</ul>
<ul class="filetree  treeview" id="category_tree">
  <?php echo $this->categoryStr; ?>
</ul>
</body>
</html>
