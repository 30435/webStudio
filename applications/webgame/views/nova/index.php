<?php if ($this->time < $this->currentWebgameInfo['start_maintain']) { $this->load->view('cfront/countdown'); } else { ?>
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
				<ul>
					<?php $newInfos = $controller->_getFrontInfos('webgame', 'spirit', 1, 6, array('position' => 'index'), array(array('updatetime', 'desc')), 'id, title, thumb,'); ?>
					<?php foreach ($newInfos['infos'] as $newInfo) { ?>
						<li><a href="<?php echo $this->currentWebgameInfo['url_server'] . 'spirit?id=' . $newInfo['id']; ?>" target="_blank"><img src="<?php echo $newInfo['thumb']; ?>" width="109px" height="130px" /></a><span>黄蜂塞卡</span></li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div>
</div>

<?php echo $this->load->view('footer_cfront'); ?>
<?php } ?>