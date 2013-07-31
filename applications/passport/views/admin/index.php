<?php echo doctype(); ?>
<html class="off" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $this->headerTitle; ?></title>
<?php 
	echo meta($this->metaInfos);
	echo link_tag($this->staticUrl . 'admin/css/reset.css');
	echo link_tag($this->staticUrl . 'admin/css/zh-cn-system.css');
	echo link_tag($this->staticUrl . 'admin/css/dialog.css');
	echo link_tag($this->staticUrl . 'admin/css/style/zh-cn-styles1.css');
	echo link_tag('admin/css/reset.css'); 
?>
<script src="<?php echo $this->staticUrl; ?>common/script/jquery-1.8.0.min.js" type="text/javascript" language="javascript"></script>
<script src="<?php echo $this->staticUrl; ?>common/script/dialog.js" type="text/javascript" language="javascript"></script>
<script type="text/javascript">
var pc_hash = '<?php echo 'pc_hash'; ?>'
</script>
<style type="text/css">
.objbody{overflow:hidden}
</style>
</head>
<body class="objbody" scroll="no">
<div style="display:none" class="ScreenLock" id="dvLockScreen">
  <div class="inputpwd" id="dvLockScreenWin">
    <h5><b class="ico ico-info"></b><span id="lock_tips"><?php echo $this->lang->line('admin_screenLockInfo'); ?></span></h5>
    <div class="input">
      <label class="lb"><?php echo $this->lang->line('admin_password'); ?>:</label>
      <input type="password" size="24" class="input-text" id="lock_password">
      <input type="submit" onClick="check_screenlock();return false;" name="dosubmit" value="&nbsp;" class="submit">
    </div>
  </div>
</div>
<div class="header" style="width: auto;">
  <div class="logo lf"><a target="_blank" href="<?php echo $this->baseUrl . 'admin'; ?>"><span class="invisible"><?php echo $this->headerTitle; ?></span></a></div>
  <div class="rt-col">
    <div class="tab_style white cut_line text-r">
	  <a onClick="lock_screen()" href="javascript:;"><img src="<?php echo $this->staticUrl; ?>admin/images/icon/lockscreen.png"><?php echo $this->lang->line('admin_screenLock'); ?></a><span>|</span>
	  <a target="_blank" href="http://www.phpcms.cn"><?php echo $this->lang->line('admin_officeWeb'); ?></a><span>|</span>
	  <a target="_blank" href="http://www.phpcms.cn/license/license.php"><?php echo $this->lang->line('admin_license'); ?></a><span>|</span>
	  <a target="_blank" href="http://bbs.phpcms.cn"><?php echo $this->lang->line('admin_bbs'); ?></a><span>|</span>
	  <a target="_blank" href="http://v9.help.phpcms.cn"><?php echo $this->lang->line('admin_help'); ?></a>
      <ul id="Skin">
        <li rel="styles1" class="s1 styleswitch"></li>
        <li rel="styles2" class="s2 styleswitch"></li>
        <li rel="styles3" class="s3 styleswitch"></li>
        <li rel="styles4" class="s4 styleswitch"></li>
      </ul>
    </div>
  </div>
  <div class="col-auto">
    <div class="log white cut_line"><?php echo $this->lang->line('admin_screenLock'); ?>: <?php echo $this->userInfo['username']; echo '[' . $this->roleInfo['name'] . ']'; ?><span>|</span>
	  <a href="<?php echo $this->baseUrl . 'admin/index/logout/'; ?>">[<?php echo $this->lang->line('admin_logout'); ?>]</a><span>|</span> 
	  <a id="site_homepage" target="_blank" href="<?php echo $this->baseUrl; ?>"><?php echo $this->lang->line('admin_webIndex'); ?></a><span>|</span> 
	  <a target="_blank" href="?m=member"><?php echo $this->lang->line('admin_userCenter'); ?></a><span>|</span> 
	  <a id="site_search" target="_blank" href="?m=search"><?php echo $this->lang->line('admin_search'); ?></a> 
	</div>
    <ul id="top_menu" class="nav white">
<?php foreach ($this->baseMenus as $baseMenu) { ?>
      <li id="_M<?php echo $baseMenu['id']; ?>" class="<?php if ($baseMenu['id'] == 1) echo 'on '; ?>top_menu">
	    <a class="baseMenus" href="javascript:_M(<?php echo $baseMenu['id']; ?>)" hidefocus="true" style="outline:none;">
		<?php echo $baseMenu['name']; ?>
		</a>
	  </li>
<?php } ?>
      <!--<li class="tab_web"><a href="javascript:;"><span>special menu</span></a></li>-->
    </ul>
  </div>
</div>
<div id="content" style="width: auto;">
  <div class="col-left left_menu">
    <div id="Scroll" style="height: 155px;">
      <div id="leftMain">
      </div>
    </div>
    <a title="<?php echo $this->lang->line('admin_expand'); ?>" class="open" hidefocus="hidefocus" style="outline-style: none; outline-width: medium; height: 205px;" id="openClose" href="javascript:;"><span class="hidden"><?php echo $this->lang->line('admin_expand'); ?></span></a>
  </div>
  <div height="100%" style="display:none" id="display_center_id" class="col-1 lf cat-menu">
    <div class="content">
      <iframe width="100%" scrolling="auto" height="auto" frameborder="false" allowtransparency="true" style="border: medium none; height: 184px;" src="" id="center_frame" name="center_frame"></iframe>
    </div>
  </div>
  <div class="col-auto mr8">
    <div class="crumbs">
      <div class="shortcut cu-span">
	    <a target="right" href="<?php echo $this->baseUrl; ?>admin/index/map/"><span><?php echo $this->lang->line('admin_index'); ?></span></a>
		<a target="right" href="<?php echo $this->baseUrl; ?>admin/index/map/"><span><?php echo $this->lang->line('admin_cache'); ?></span></a>
		<a href="javascript:art.dialog({id:'map',iframe:'<?php echo $this->baseUrl; ?>admin/index/map/', title:'<?php echo $this->lang->line('admin_opmap'); ?>', width:'700', height:'500', lock:true});void(0);"><span><?php echo $this->lang->line('admin_opmap'); ?></span></a>
	  </div>
      <?php echo $this->lang->line('admin_curpos'); ?>: <span id="current_pos"></span>
	</div>
    <div class="col-1">
      <div style="position:relative; overflow:hidden" class="content">
		<iframe name="right" id="rightMain" src="" frameborder="false" scrolling="auto" style="border:none; margin-bottom:30px" width="100%" height="auto" allowtransparency="true"></iframe>
        <div class="fav-nav">
          <div id="panellist"> </div>
          <div id="paneladd"></div>
          <input type="hidden" value="" id="menuid">
          <input type="hidden" value="" id="bigid">
          <div class="fav-help" id="help"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="scroll" style="display: none;">
  <a onClick="menuScroll(1);" title="<?php echo $this->lang->line('admin_mouseroll'); ?>" class="per" href="javascript:;"></a>
  <a onClick="menuScroll(2);" title="<?php echo $this->lang->line('admin_mouseroll'); ?>" class="next" href="javascript:;"></a>
</div>
<script type="text/javascript">
if(!Array.prototype.map)
Array.prototype.map = function(fn,scope) {
    var result = [],ri = 0;
    for (var i = 0,n = this.length; i < n; i++){
	    if(i in this){
	        result[ri++]  = fn.call(scope ,this[i],i,this);
	    }
    }
    return result;
};

var getWindowSize = function(){
    return ["Height","Width"].map(function(name){
        return window["inner"+name] ||
	    document.compatMode === "CSS1Compat" && document.documentElement[ "client" + name ] || document.body[ "client" + name ]
    });
}

window.onload = function (){
	if(!+"\v1" && !document.querySelector) { // for IE6 IE7
	  document.body.onresize = resize;
	} else { 
	  window.onresize = resize;
	}
	function resize() {
		wSize();
		return false;
	}
}

function wSize()
{	
	var str=getWindowSize(); // This is a string
	var strs= new Array(); // Define an array
	strs=str.toString().split(","); // Split the string
	var heights = strs[0]-150,Body = $('body');$('#rightMain').height(heights);   
	//iframe.height = strs[0]-46;
	if(strs[1]<980){
		$('.header').css('width',980+'px');
		$('#content').css('width',980+'px');
		Body.attr('scroll','');
		Body.removeClass('objbody');
	}else{
		$('.header').css('width','auto');
		$('#content').css('width','auto');
		Body.attr('scroll','no');
		Body.addClass('objbody');
	}
	
	var openClose = $("#rightMain").height()+39;
	$('#center_frame').height(openClose+9);
	$("#openClose").height(openClose+30);	
	$("#Scroll").height(openClose-20);
	windowW();
}
wSize();

function windowW(){
	if($('#Scroll').height()<$("#leftMain").height()){
		$(".scroll").show();
	}else{
		$(".scroll").hide();
	}
}
windowW();

// Left switch
$("#openClose").click(function(){
	if($(this).data('clicknum')==1) {
		$("html").removeClass("on");
		$(".left_menu").removeClass("left_menu_on");
		$(this).removeClass("close");
		$(this).data('clicknum', 0);
		$(".scroll").show();
	} else {
		$(".left_menu").addClass("left_menu_on");
		$(this).addClass("close");
		$("html").addClass("on");
		$(this).data('clicknum', 1);
		$(".scroll").hide();
	}
	return false;
});

function _M(menuid) 
{
	$("#menuid").val(menuid);
	$("#bigid").val(menuid);
	$("#paneladd").html('<a class="panel-add" href="javascript:add_panel();"><em><?php echo 'add'; ?></em></a>');
	$("#leftMain").load("<?php echo $this->baseUrl; ?>admin/index/leftmenu/"+menuid, {limit: 25}, function(){
	   windowW();
	});
		 
	//$("#rightMain").attr('src', targetUrl);
	$('.top_menu').removeClass("on");
	$('#_M'+menuid).addClass("on");
	$.get("<?php echo $this->baseUrl; ?>admin/index/curpos/"+menuid, function(data){
		$("#current_pos").html(data);
	});
	// Hide the center frame when hit the top menu
	$('#display_center_id').css('display','none');
	// Show the left menu when hit the top
	$(".left_menu").removeClass("left_menu_on");
	$("#openClose").removeClass("close");
	$("html").removeClass("on");
	$("#openClose").data('clicknum', 0);
	$("#current_pos").data('clicknum', 1);
}

function _MP(menuid,targetUrl) 
{
	$("#menuid").val(menuid);
	$("#paneladd").html('<a class="panel-add" href="javascript:add_panel();"><em><?php echo 'add'; ?></em></a>');

	$("#rightMain").attr('src', targetUrl);
	$("#display_center_id").hide();
	$('.sub_menu').removeClass("on fb blue");
	$('#_MP'+menuid).addClass("on fb blue");
	$.get("<?php echo $this->baseUrl; ?>admin/index/curpos/"+menuid, function(data){
		$("#current_pos").html(data+'<span id="current_pos_attr"></span>');
	});
	$("#current_pos").data('clicknum', 1);
}

//$(document).bind('keydown', 'return', function(evt){check_screenlock();return false;});

_M(1);
(function(){
    var addEvent = (function(){
             if (window.addEventListener) {
                return function(el, sType, fn, capture) {
                    el.addEventListener(sType, fn, (capture));
                };
            } else if (window.attachEvent) {
                return function(el, sType, fn, capture) {
                    el.attachEvent("on" + sType, fn);
                };
            } else {
                return function(){};
            }
        })(),
    Scroll = document.getElementById('Scroll');
    // IE6/IE7/IE8/Opera 10+/Safari5+
    addEvent(Scroll, 'mousewheel', function(event){
        event = window.event || event ;  
		if(event.wheelDelta <= 0 || event.detail > 0) {
				Scroll.scrollTop = Scroll.scrollTop + 29;
			} else {
				Scroll.scrollTop = Scroll.scrollTop - 29;
		}
    }, false);

    // Firefox 3.5+
    addEvent(Scroll, 'DOMMouseScroll',  function(event){
        event = window.event || event ;
		if(event.wheelDelta <= 0 || event.detail > 0) {
				Scroll.scrollTop = Scroll.scrollTop + 29;
			} else {
				Scroll.scrollTop = Scroll.scrollTop - 29;
		}
    }, false);
	
})();

document.domain='<?php echo $this->frontDomain; ?>';
</script>
</body>
</html>
