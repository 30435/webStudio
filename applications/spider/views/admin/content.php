<?php $this->load->view('header_admin') ?>
<div class="pad-10">
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
            添加时间：<link rel="stylesheet" type="text/css" href="http://localhost/php9/statics/js/calendar/jscal2.css"/>
			<link rel="stylesheet" type="text/css" href="http://localhost/php9/statics/js/calendar/border-radius.css"/>
			<link rel="stylesheet" type="text/css" href="http://localhost/php9/statics/js/calendar/win2k.css"/>
			<script type="text/javascript" src="http://localhost/php9/statics/js/calendar/calendar.js"></script>
			<script type="text/javascript" src="http://localhost/php9/statics/js/calendar/lang/en.js"></script>
			<input type="text" name="start_time" id="start_time" value="" size="10" class="date" readonly>&nbsp;
			<script type="text/javascript">
				Calendar.setup({
				weekNumbers: false,
				inputField : "start_time",
				trigger    : "start_time",
				dateFormat: "%Y-%m-%d",
				showTime: false,
				minuteStep: 1,
				onSelect   : function() {this.hide();}
				});
            </script>- &nbsp;
			<input type="text" name="end_time" id="end_time" value="" size="10" class="date" readonly>&nbsp;
			<script type="text/javascript">
				Calendar.setup({
				weekNumbers: false,
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
  <form name="myform" id="myform" action="" method="post" >
  <div class="table-list">
    <table width="100%">
    <thead>
      <tr>
        <th width="5"><?php echo $this->fieldInfos['id']['name']; ?></th>
	    <th width="10"><?php echo $this->fieldInfos['job_id']['name']; ?></th>
        <th width="10"><?php echo $this->fieldInfos['content_key']['name']; ?></th>
        <th width="40"><?php echo $this->fieldInfos['title']['name']; ?></th>
		<th width="10"><?php echo $this->fieldInfos['status']['name']; ?></th>
	    <th width="100">管理操作</th>
      </tr>
    </thead>
    <tbody>
      <?php if (is_array($this->infos)) { foreach ($this->infos as $info) { ?>
      <tr>
		<td align='center' ><?php echo $info['id']; ?></td>
		<td align='center' ><?php echo $info['job_id']; ?></td>
		<td align='center' ><?php echo $info['content_key']; ?></td>
		<td><a href="" target="_blank"><span style="" ><?php echo $info['title']; ?></span></a></td>
		<td align='center'><?php echo $info['status']; ?></td>
		<td align='center'>
		  <?php 
		  foreach ($this->operationMenus as $operationMenu) { 
			  if (!in_array($operationMenu, array_keys($this->appMenus))) continue; 
			  $menu = $this->appMenus[$operationMenu];
			  $menuUrl = $menu['url'] . '?catid=' . $this->catid . '&id=' . $info['id'];
			  $menuUrl = ($operationMenu == 'delete') ? 'javascript:confirmurl("' . $menuUrl . '", "确认要删除 『 ' . $info['username'] . '』 吗？");' : $menuUrl;
			  $menuUrl = ($operationMenu == 'edit') ? 'javascript:openwinx("' . $menuUrl . '", "");' : $menuUrl;
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
<script language="javascript" type="text/javascript" src="http://localhost/php9/statics/js/cookie.js"></script>
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