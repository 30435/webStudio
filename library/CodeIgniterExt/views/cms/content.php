<?php $this->load->view('header_admin') ?>
<script language="javascript" type="text/javascript" src="<?php echo $this->staticUrl; ?>common/script/cookie.js"></script>
<div id="closeParentTime" style="display:none"></div>
<SCRIPT LANGUAGE="JavaScript">
<!--
	if(window.top.$("#current_pos").data('clicknum')==1 || window.top.$("#current_pos").data('clicknum')==null) {
	parent.document.getElementById('display_center_id').style.display='';
	parent.document.getElementById('center_frame').src = '?m=content&c=content&a=public_categorys&type=add&menuid=822&pc_hash=mU7BOq';
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
<div class="pad-10">
  <div class="content-menu ib-a blue line-x">
    <a class="add fb" href="javascript:;" onclick=javascript:openwinx("<?php echo $this->appMenus['add']['url'] . '?catid=' . $this->catid; ?>",'')><em><?php echo $this->appMenus['add']['name']; ?></em></a>　
    <a href="<?php echo $this->appMenus['listinfo']['url'] . '?catid=' . $this->catid; ?>" class=on><em><?php echo $this->appMenus['listinfo']['name']; ?></em></a>
  </div>
  <div id="searchid" style="">
  <form name="searchform" action="" method="get" >
    <input type="hidden" value="content" name="m">
    <input type="hidden" value="content" name="c">
    <input type="hidden" value="init" name="a">
    <input type="hidden" value="6" name="catid">
    <input type="hidden" value="0" name="steps">
    <input type="hidden" value="1" name="search">
    <input type="hidden" value="mU7BOq" name="pc_hash">
    <table width="100%" cellspacing="0" class="search-form">
    <tbody>
      <tr>
		<td>
		  <div class="explain-col">
			添加时间：<input type="text" readonly="" class="date input-text" size="10" value="" id="start_time" name="start_time">&nbsp;
			<script type="text/javascript">
				Calendar.setup({
				weekNumbers: true,
				inputField : "start_time",
				trigger    : "start_time",
				dateFormat: "%Y-%m-%d",
				showTime: false,
				minuteStep: 1,
				onSelect   : function() {this.hide();}
				});
			</script>-<input type="text" readonly="" class="date input-text" size="10" value="" id="end_time" name="end_time">&nbsp;
			<script type="text/javascript">
				Calendar.setup({
				weekNumbers: true,
				inputField : "end_time",
				trigger    : "end_time",
				dateFormat: "%Y-%m-%d",
				showTime: false,
				minuteStep: 1,
				onSelect   : function() {this.hide();}
				});
			</script>				
			<select name="posids">
			  <option value='' selected>全部</option>
			  <option value="1" >推荐</option>
			  <option value="2" >不推荐</option>
			</select>				
			<select name="searchtype">
			  <option value='0' selected>标题</option>
			  <option value='1' >简介</option>
			  <option value='2' >用户名</option>
			  <option value='3' >ID</option>
			</select>
			<input name="keyword" type="text" value="" class="input-text" />
			<input type="submit" name="search" class="button" value="搜索" />
	      </div>
		</td>
	  </tr>
    </tbody>
    </table>
  </form>
  </div>
  <form name="myform" id="myform" action="" method="post" >
  <div class="table-list">
    <table width="100%">
    <thead>
      <tr>
	    <th width="16"><input type="checkbox" value="" id="check_box" onclick="selectall('ids[]');"></th>
        <th width="37">排序</th>
        <th width="40">ID</th>
	    <th>标题</th>
        <th width="70">发布人</th>
        <th width="118">更新时间</th>
	    <th width="100">管理操作</th>
      </tr>
    </thead>
    <tbody>
      <?php if (is_array($this->infos)) { foreach ($this->infos as $info) { ?>
      <tr>
		<td align="center"><input class="inputcheckbox " name="ids[]" value="<?php echo $info['id']; ?>" type="checkbox"></td>
        <td align='center'><input name='listorders[<?php echo $info['id']; ?>]' type='text' size='3' value='<?php echo $info['listorder']; ?>' class='input-text-c'></td>
		<td align='center' ><?php echo $info['id']; ?></td>
		<td><a href="<?php echo $info['url']; ?>" target="_blank"><span style="" ><?php echo $info['title']; ?></span></a></td>
		<td align='center'><?php echo $info['username']; ?></td>
		<td align='center'><?php echo $info['updatetime']; ?></td>
		<td align='center'>
		  <?php 
		  foreach ($this->operationMenus as $operationMenu) { 
			  if (!in_array($operationMenu, array_keys($this->appMenus))) continue; 
			  $menu = $this->appMenus[$operationMenu];
			  $menuUrl = $menu['url'] . '?catid=' . $this->catid . '&id=' . $info['id'];
			  $menuUrl = ($operationMenu == 'delete') ? 'javascript:confirmurl("' . $menuUrl . '", "确认要删除 『 ' . $info['username'] . '』 吗？");' : $menuUrl;
			  $menuUrl = in_array($operationMenu, array('edit', 'view')) ? 'javascript:openwinx("' . $menuUrl . '", "");' : $menuUrl;
		  ?>
    	  <a href='<?php echo $menuUrl; ?>'><?php echo $menu['name']; ?></a> |
    	  <?php } ?>
		  <!--<a href="javascript:;" onclick="javascript:openwinx('?m=content&c=content&a=edit&catid=6&id=22','')">修改</a> | 
		  <a href="javascript:view_comment('content_6-22-1','哦哦哦哦哦哦哦哦哦')">评论</a>-->
		</td>
	  </tr>
      <?php } } ?>
     </tbody>
     </table>
    <div class="btn"><label for="check_box">全选/取消</label>
		<input type="hidden" value="mU7BOq" name="pc_hash">
    	<input type="button" class="button" value="排序" onclick="myform.action='?m=content&c=content&a=listorder&dosubmit=1&catid=6&steps=0';myform.submit();"/>
				<input type="button" class="button" value="删除" onclick="myform.action='?m=content&c=content&a=delete&dosubmit=1&catid=6&steps=0';return confirm_delete()"/>
				<input type="button" class="button" value="推送" onclick="push();"/>
				<input type="button" class="button" value="批量移动" onclick="myform.action='?m=content&c=content&a=remove&catid=6';myform.submit();"/>
			</div>
    <div id="pages"><?php echo $this->pageStr; ?></div>
</div>
</form>
</div>
<script type="text/javascript"> 
<!--
function push() {
	var str = 0;
	var id = tag = '';
	$("input[name='ids[]']").each(function() {
		if($(this).attr('checked')==true) {
			str = 1;
			id += tag+$(this).val();
			tag = '|';
		}
	});
	if(str==0) {
		alert('您没有勾选信息');
		return false;
	}
	window.top.art.dialog({id:'push'}).close();
	window.top.art.dialog({title:'推送：',id:'push',iframe:'?m=content&c=push&action=position_list&catid=6&modelid=1&id='+id,width:'800',height:'500'}, function(){var d = window.top.art.dialog({id:'push'}).data.iframe;// 使用内置接口获取iframe对象
	var form = d.document.getElementById('dosubmit');form.click();return false;}, function(){window.top.art.dialog({id:'push'}).close()});
}
function confirm_delete(){
	if(confirm('确认删除吗？')) $('#myform').submit();
}
function view_comment(id, name) {
	window.top.art.dialog({id:'view_comment'}).close();
	window.top.art.dialog({yesText:'关闭',title:'查看评论：'+name,id:'view_comment',iframe:'index.php?m=comment&c=comment_admin&a=lists&show_center_id=1&commentid='+id,width:'800',height:'500'}, function(){window.top.art.dialog({id:'edit'}).close()});
}
function reject_check(type) {
	if(type==1) {
		var str = 0;
		$("input[name='ids[]']").each(function() {
			if($(this).attr('checked')==true) {
				str = 1;
			}
		});
		if(str==0) {
			alert('您没有勾选信息');
			return false;
		}
		document.getElementById('myform').action='?m=content&c=content&a=pass&catid=6&steps=0&reject=1';
		document.getElementById('myform').submit();
	} else {
		$('#reject_content').css('display','');
		return false;
	}	
}
setcookie('refersh_time', 0);
function refersh_window() {
	var refersh_time = getcookie('refersh_time');
	if(refersh_time==1) {
		window.location.reload();
	}
}
setInterval("refersh_window()", 3000);
//-->
</script>
</body>
</html>