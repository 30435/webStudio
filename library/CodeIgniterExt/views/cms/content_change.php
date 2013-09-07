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

</script>
<?php
  //echo validation_errors();
  $attributes = array('name' => 'myform', 'id' => 'myform', 'enctype' => 'multipart/form-data');
  $this->id = isset($this->id) ? $this->id : 0;
  echo form_open($this->appMenus[$this->method]['url'] . '?catid=' . $this->catid . '&id=' . $this->id, $attributes);
?>
<div class="addContent">
  <div class="crumbs">当前位置：内容  > 内容发布管理 > 添加内容</div>
  <div class="col-right">
    <div class="col-1">
      <div class="content pad-6">
	    <h6> 缩略图</h6>
	    <div class='upload-pic img-wrap'>
		  <?php $imgSrc = empty($this->currentInfo['thumb']) ? $this->staticUrl . 'admin/images/icon/upload-pic.png' : $this->currentInfo['thumb']; ?>
		  <input type='hidden' name='thumb' id='thumb' value='<?php echo $imgSrc; ?>'>
		  <a href='javascript:void(0);' onclick="flashupload('thumb_images', '附件上传','thumb',thumb_images,'1,jpg|jpeg|gif|png|bmp,1,,,0','content','6','479eb6970bcc771958c0fa41d5694faf');return false;">
		  
		  <img src='<?php echo $imgSrc; ?>' id='thumb_preview' width='135' height='113' style='cursor:hand' /></a>
		  <!--<input type="button" style="width: 66px;" class="button" onclick="crop_cut_thumb($('#thumb').val());return false;" value="裁切图片">-->
		  <input type="button" style="width: 66px;" class="button" onclick="$('#thumb_preview').attr('src','<?php echo $this->staticUrl; ?>admin/images/icon/upload-pic.png');$('#thumb').val(' ');return false;" value="取消图片">
		  <script type="text/javascript">
		      function crop_cut_thumb(id)
			  {
				  alert('http://passport.ci.com/attachment/crop?module=content&catid='+catid+'&picurl='+encodeURIComponent(id)+'&input=thumb&preview=thumb_preview');
			      if (id=='') { 
					  alert('请先上传缩略图');
					  return false;
				  }
				  window.top.art.dialog({
					  title:'裁切图片', id:'crop',
					  iframe:'http://passport.ci.com/attachment/crop?module=content&catid='+catid+'&picurl='+encodeURIComponent(id)+'&input=thumb&preview=thumb_preview',
					  width:'680px', height:'480px'
				  }, function(){
					  var d = window.top.art.dialog({id:'crop'}).data.iframe;
					  d.uploadfile();
					  return false;
				  }, function(){
					  window.top.art.dialog({id:'crop'}).close()
				  });
			  };
		  </script>
        </div> 
	    <!--<h6> 相关文章</h6>
	    <input type='hidden' name='relation' id='relation' value='' style='50' >
        <ul class="list-dot" id="relation_text"></ul>
        <div>
          <input type='button' value="添加相关" onclick="omnipotent('selectid','?m=content&c=content&a=public_relationlist&modelid=1','添加相关文章',1)" class="button" style="width:66px;">
          <span class="edit_content"><input type='button' value="显示已有" onclick="show_relation(1,0)" class="button" style="width:66px;"></span>
        </div>-->
	    <h6> 发布时间</h6>
	    <link rel="stylesheet" type="text/css" href="<?php echo $this->staticUrl; ?>common/calendar/jscal2.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $this->staticUrl; ?>common/calendar/border-radius.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $this->staticUrl; ?>common/calendar/win2k.css"/>
		<script type="text/javascript" src="<?php echo $this->staticUrl; ?>common/calendar/calendar.js"></script>
		<script type="text/javascript" src="<?php echo $this->staticUrl; ?>common/calendar/lang/en.js"></script>
		<input type="text" name="inputtime" id="inputtime" value="2013-01-30 16:23:50" size="21" class="date" readonly>&nbsp;
		<script type="text/javascript">
			Calendar.setup({
			weekNumbers: true,
		    inputField : "inputtime",
		    trigger    : "inputtime",
		    dateFormat: "%Y-%m-%d %H:%M:%S",
		    showTime: true,
		    minuteStep: 1,
		    onSelect   : function() {this.hide();}
			});
        </script> 
	    <!--<h6> 转向链接</h6>
	    <input type="hidden" name="islink" value="0">
		<input type="text" name="linkurl" id="linkurl" value="" size="25" maxlength="255" disabled class="input-text"> 
		<input name="islink" type="checkbox" id="islink" value="1" onclick="ruselinkurl();" ><font color="red">转向链接</font>-->
	    <h6> 内容页模板</h6>
	    <select name="template" id="template">
		  <option value='' selected>请选择</option>
		  <option value="show" >文章内容页(show.html)</option>
		  <option value="show_download" >下载内容页(show_download.html)</option>
		  <option value="show_picture" >图片内容页(show_picture.html)</option>
		</select> 
	    <!--<h6> 允许评论</h6>
	    <label class="ib" style="width:88px"><input type="radio" name='allow_comment'  id="allow_comment_1" checked value="1"> 允许评论</label>
		<label class="ib" style="width:88px"><input type="radio" name='allow_comment'  id="allow_comment_0"  value="0"> 不允许评论</label> 
	    <h6> 阅读收费</h6>
	    <input type="text" name="readpoint" value="" size="5">
		<input type="radio" name="paytype" value="0" checked> 点 
		<input type="radio" name="paytype" value="1" >元 -->
        <h6>状态</h6>
        <span class="ib" style="width:90px"><label><input type="radio" name="status" value="99" checked/> 发布 </label></span>
      </div>
    </div>
  </div>
  <a title="展开与关闭" class="r-close" hidefocus="hidefocus" style="outline-style: none; outline-width: medium;" id="RopenClose" href="javascript:;">
    <span class="hidden">展开</span>
  </a>
  <div class="col-auto">
    <div class="col-1">
      <div class="content pad-6">
      <table width="100%" cellspacing="0" class="table_form">
	    <tbody>	
	      <tr>
            <th width="80"> <font color="red">*</font>栏目</th>
            <td>
	          <input type="hidden" name="catid" value="<?php echo $this->catid; ?>"><?php echo $this->currentCategoryInfo['catname']; ?>
		      <!--<a href='javascript:;' onclick="omnipotent('selectid','?m=content&c=content&a=add_othors&siteid=1','同时发布到其他栏目',1);return false;" style='color:#B5BFBB'>[同时发布到其他栏目]</a>
		      <ul class='list-dot-othors' id='add_othors_text'></ul>-->
	        </td>
          </tr>
	      <tr>
            <th width="80"> <font color="red">*</font>标题</th>
            <td>
	          <input type="text" style="width:400px;" name="title" id="title" value="<?php if (isset($this->currentInfo['title'])) echo $this->currentInfo['title']; ?>" style="color:" class="measure-input " onBlur="$.post('?action=getKeywords&number=3&sid='+Math.random()*5, {data:$('#title').val()}, function(data){if(data && $('#keywords').val()=='') $('#keywords').val(data); })" onkeyup="strlen_verify(this, 'title_len', 80);"/>
		      <input type="hidden" name="style_color" id="style_color" value="">
		      <input type="hidden" name="style_font_weight" id="style_font_weight" value="">
		      <input type="button" class="button" id="check_title_alt" value="检测重复" onclick="$.get('?m=content&c=content&a=public_check_title&catid=6&sid='+Math.random()*5, {data:$('#title').val()}, function(data){if(data=='1') {$('#check_title_alt').val('标题重复');$('#check_title_alt').css('background-color','#FFCC66');} else if(data=='0') {$('#check_title_alt').val('标题不重复');$('#check_title_alt').css('background-color','#F8FFE1')}})" style="width:73px;"/>
		      <img src="<?php echo $this->staticUrl; ?>admin/images/icon/colour.png" width="15" height="16" onclick="colorpicker('title_colorpanel','set_title_color');" style="cursor:hand"/> 
		      <img src="<?php echo $this->staticUrl; ?>admin/images/icon/bold.png" width="10" height="10" onclick="input_font_bold()" style="cursor:hand"/> 
		      <span id="title_colorpanel" style="position:absolute;" class="colorpanel"></span>还可输入<B><span id="title_len">80</span></B> 个字符
	        </td>
          </tr>
	      <tr>
            <th width="80">关键词</th>
            <td><input type='text' name='keywords' id='keywords' value="<?php if (isset($this->currentInfo['keywords'])) echo $this->currentInfo['keywords']; ?>" style='width:280px' class='input-text'>多关键词之间用空格或者“,”隔开</td>
          </tr>
	      <tr>
            <th width="80">来源</th>
            <td>
	          <input type='text' name='copyfrom' value="<?php if (isset($this->currentInfo['copyfrom'])) echo $this->currentInfo['copyfrom']; ?>" style='width: 400px;' class='input-text'>
		      <select name='copyfrom_data' ><option value="0" selected>≡请选择≡</option></select>
	        </td>
          </tr>
	      <tr>
            <th width="80">摘要</th>
            <td><textarea name='description' id='description' style='width:98%;height:46px;'   onkeyup="strlen_verify(this, 'description_len', 255)"><?php if (isset($this->currentInfo['description'])) echo $this->currentInfo['description']; ?></textarea>还可输入<B><span id="description_len">255</span></B> 个字符  </td>
          </tr>
      	  <tr>
            <th width="80"> <font color="red">*</font>内容</th>
            <td>
	          <div id='content_tip'></div>
      	      <?php 			
	          	$contentAuto= isset($this->currentInfo['content']) ? $this->currentInfo['content'] : '';
		        echo $this->ckeditor->editor('content',$contentAuto); 
      		  ?>
		      <!--<div class="content_attr">
		      <label><input name="add_introduce" type="checkbox"  value="1" checked>是否截取内容</label>
		      <input type="text" name="introcude_length" value="200" size="3">字符至内容摘要
		      <label><input type='checkbox' name='auto_thumb' value="1" checked>是否获取内容第</label>
		      <input type="text" name="auto_thumb_no" value="1" size="2" class="">张图片作为标题图片
		      </div>-->
	        </td>
          </tr>
	      <!--<tr>
            <th width="80"> 分页方式	  </th>
            <td>
			  <select name="info[paginationtype]" id="paginationtype" onchange="if(this.value==1)$('#paginationtype1').css('display','');else $('#paginationtype1').css('display','none');">
                <option value="0">不分页</option>
                <option value="1">自动分页</option>
                <option value="2">手动分页</option>
              </select>
			  <span id="paginationtype1" style="display:none"><input name="info[maxcharperpage]" type="text" id="maxcharperpage" value="10000" size="8" maxlength="8">字符数（包含HTML标记）</span>  
			</td>
          </tr>
	      <tr>
            <th width="80">推荐位</th>
              <td>
	            <input type='hidden' name='posids[]' value='-1'>
		        <label class="ib" style="width:125px"><input type="checkbox" name='posids[]' id="_1"  value="2"> 首页头条推荐</label>
		        <label class="ib" style="width:125px"><input type="checkbox" name='posids[]' id="_2"  value="1"> 首页焦点图推荐</label>
		        <label class="ib" style="width:125px"><input type="checkbox" name='posids[]' id="_3"  value="9"> 网站顶部推荐</label>
		        <label class="ib" style="width:125px"><input type="checkbox" name='posids[]' id="_4"  value="10"> 栏目首页推荐</label>
		        <label class="ib" style="width:125px"><input type="checkbox" name='posids[]' id="_5"  value="12"> 首页图片推荐</label>
	          </td>
          </tr>
	      <tr>
            <th width="80">阅读权限</th>
            <td>
	          <input type="hidden" name="info[groupids_view]" value="1">
		      <label class="ib" style="width:120px"><input type="checkbox" name="groupids_view[]" id="groupids_view" id="_1"  value="8"> 游客</label>
		      <label class="ib" style="width:120px"><input type="checkbox" name="groupids_view[]" id="groupids_view" id="_2"  value="2"> 新手上路</label>
		      <label class="ib" style="width:120px"><input type="checkbox" name="groupids_view[]" id="groupids_view" id="_3"  value="6"> 注册会员</label>
		      <label class="ib" style="width:120px"><input type="checkbox" name="groupids_view[]" id="groupids_view" id="_4"  value="4"> 中级会员</label>
		      <label class="ib" style="width:120px"><input type="checkbox" name="groupids_view[]" id="groupids_view" id="_5"  value="5"> 高级会员</label>
		      <label class="ib" style="width:120px"><input type="checkbox" name="groupids_view[]" id="groupids_view" id="_6"  value="1"> 禁止访问</label>
		      <label class="ib" style="width:120px"><input type="checkbox" name="groupids_view[]" id="groupids_view" id="_7"  value="7"> 邮件认证</label>
	        </td>
          </tr>
	      <tr>
            <th width="80">添加投票</th>
            <td>
	          <input type='text' name='info[voteid]' id='voteid' value='' size='3'> 
		      <input type='button' value="选择已有投票" onclick="omnipotent('selectid','?m=vote&c=vote&a=public_get_votelist&from_api=1','选择已有投票')" class="button">
		      <input type='button' value="新增投票" onclick="omnipotent('addvote','?m=vote&c=vote&a=add&from_api=1','添加投票',0)" class="button">
	        </td>
          </tr>-->
        </tbody>
	  </table>
    </div>
  </div>
</div>
        
    </div>
</div>

<div class="fixed-bottom">
	<div class="fixed-but text-c">
    <div class="button"><input value="保存后自动关闭" type="submit" name="dosubmit" class="cu" style="width:145px;" onclick="refersh_window()"></div>
    <div class="button"><input value="保存并继续发表" type="submit" name="dosubmit_continue" class="cu" style="width:130px;" title="Alt+X" onclick="refersh_window()"></div>
    <div class="button"><input value="关闭(X)" type="button" name="close" onclick="refersh_window();close_window();" class="cu" style="width:70px;"></div>
    </div>
</div>
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