<?php if ($this->time < $this->currentWebgameInfo['start_maintain']) { $this->load->view('cfront/countdown'); } else { ?>
<?php echo $this->load->view('cfront/header'); ?>
<script type="text/javascript">
function searchFunc()
{
	document.searchForm.submit();
}
</script>
<!--------------------------宽度一样的977px---------------------------------------->
<div class="all">
	<div class="ban"><iframe class="frm" src="<?php echo $this->currentWebgameInfo['url_webgame']; ?>" width="956" height="640" frameborder="0" scrolling="no"></iframe></div>
		<div class="nav_nuowa">
			<div class="nuowa_bj0">
				<p class="more"><a target="_blank">更多</a></p>
				<ul>
					<?php $newInfos = $controller->_getFrontInfos('webgame', 'spirit', 1, 6, array('position' => 'index'), array(array('updatetime', 'desc')), 'id, title, thumb,'); ?>
					<?php foreach ($newInfos['infos'] as $newInfo) { ?>
						<li><a href="<?php echo $this->currentWebgameInfo['url_home'] . 'spirit?id=' . $newInfo['id']; ?>" target="_blank"><img src="<?php echo $newInfo['thumb']; ?>" width="109px" height="143px" /></a></li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div>
</div>

<?php echo $this->load->view('footer_cfront'); ?>
<?php } ?>