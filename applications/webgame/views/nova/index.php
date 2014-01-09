<?php echo $this->load->view('cfront/header'); ?>
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
</script>
<!--------------------------宽度一样的977px---------------------------------------->
<div class="all">
	<div class="ban"><iframe class="frm" src="<?php echo $this->currentWebgameInfo['url_webgame']; ?>" width="956" height="640" frameborder="0" scrolling="no"></iframe></div>
		<div class="nav_nuowa">
			<div class="nuowa_bj0">
				<p class="more"><a target="_blank" href="<?php echo $this->currentWebgameInfo['url_server']; ?>slist">更多</a></p>
                <div id="scolldiv" name="scolldiv" style="margin:0 auto;padding-top:50px;">
                	<table width="200" border="0" cellpadding="0" cellspacing="0">
  <tr>
  
					<?php $newInfos = $controller->_getFrontInfos('webgame', 'spirit', 1, 12, array('position' => 'index'), array(array('updatetime', 'desc')), 'id, title, thumb,'); ?>
					<?php foreach ($newInfos['infos'] as $newInfo) { ?>
					<td>
						<table width="123" height="170" border="0" cellpadding="0" cellspacing="0">
							<tr><td width="103" align="center"><a href="<?php echo $this->currentWebgameInfo['url_server'] . 'spirit?id=' . $newInfo['id']; ?>" target="_blank"><img class="sycwt" src="<?php echo $newInfo['thumb']; ?>" /></a></td></tr>
							<tr><td align="center" class="index_colleges_font"><a href="<?php echo $this->currentWebgameInfo['url_server'] . 'spirit?id=' . $newInfo['id']; ?>" target="_blank"><?php echo $newInfo['title']; ?></a></td></tr>
						</table>
					</td>
					<?php } ?>

</tr>
</table>

<script type="text/javascript" src="<?php echo $this->staticUrl; ?>cfront/js/msclass.js"></script>
<script type="text/javascript" >
var youqingmarquee = new Marquee("scolldiv");
youqingmarquee.Direction="left"; //方向
youqingmarquee.Step=1; 
youqingmarquee.Width=950; //容器宽高
youqingmarquee.Height=230;
youqingmarquee.Timer=30;
youqingmarquee.ScrollStep=1;
youqingmarquee.Start();
</script>


			</div>
		</div>
	</div>
</div>

<?php echo $this->load->view('footer_cfront'); ?>
