<?php echo $this->load->view('header_cfront'); ?>
<script src="<?php echo $this->staticUrl; ?>common/script/jquery-1.8.0.min.js" type="text/javascript" language="javascript"></script>
<?php $sortInfos = $controller->currentModel->sortInfos; ?>
<div class="nav_nuowa">
	<div class="nuowa_bj0">
		<ul>
		<?php $newInfos = $controller->_getFrontInfos('webgame', 'spirit', 1, 6, array(), array(array('id', 'desc')), 'id, title, thumb,'); ?>
		<?php foreach ($newInfos['infos'] as $newInfo) { ?>
			<li><a href="<?php echo $this->currentWebgameInfo['url_server'] . 'spirit?id=' . $newInfo['id']; ?>" target="_blank"><img src="<?php echo $newInfo['thumb']; ?>" width="109px" height="143px" /></a></li>
		<?php } ?>
		</ul>
	</div>
</div>
<div class="nw_dq">
	<div class="nw_dq_con">
		<ul class="nw_dq_nav">
			<li class="li-1"><a id="attriall" class="on" href="javascript: freshPage(); void(0);">所有宠物</a></li>
            <li class="li-2"><a id="attrirare" href="javascript: $('#attribute').val('rare'); $('.nw_dq_nav > li > a').removeClass('on'); $('#attrirare').addClass('on'); getAttribute(); void(0);">稀有宠物</a></li>
            <li class="li-3"><a id="attrivip" href="javascript: $('#attribute').val('attrivip'); $('.nw_dq_nav > li > a').removeClass('on'); $('#attrivip').addClass('on'); getAttribute(); void(0);">VIP宠物</a></li>
        </ul>
        <div class="nw_dq_form">
            <input type="text" class="nw_form_con" value="" id="keyword" />
            <input type="button" value="搜索" onclick="getSearch()" class="nw_form_ss"/>
			<input type="hidden" id="sortType" value="all" />
			<input type="hidden" id="attribute" value="" />
        </div>
        <div class="clear"></div>
    </div>
    <ul class="nw_dq_sx">
		<li id="three2" ><a class="pet-subtab-on" href="javascript: freshPage(); void(0);"><img src="<?php echo $this->staticUrl; ?>cfront/images/sx001.jpg" /><p>全部</p></a></li>
	    <?php foreach ($sortInfos as $sortCode => $sortInfo) { ?>    
		<li><a id="<?php echo $sortCode; ?>" href="javascript: $('#sortType').val('<?php echo $sortCode; ?>'); $('.nw_dq_sx > li > a').removeClass('pet-subtab-on'); $('#<?php echo $sortCode; ?>').addClass('pet-subtab-on'); getSort(); void(0);"><img src="<?php echo $this->staticUrl; ?>cfront/images/sx001.jpg" /><p><?php echo $sortInfo['value']; ?></p></a></li>
        <?php } ?>
    </ul>
</div>
<div class="nw_dq_bd">
    <div class="pet_list">
        <ul id="listSpirit">
		<?php $newInfos = $controller->_getFrontInfos('webgame', 'spirit', 1, 18, array('position' => 'index'), array(array('id', 'desc')), 'id, title, thumb,'); ?>
		<?php foreach ($newInfos['infos'] as $newInfo) { ?>
            <li>
			    <a href="<?php echo $this->currentWebgameInfo['url_server'] . 'spirit?id=' . $newInfo['id']; ?>"><img src="<?php echo $newInfo['thumb']; ?>" class="pet-img"/></a>
				<p class="pet_pw"><a href="<?php echo $this->currentWebgameInfo['url_server'] . 'spirit?id=' . $newInfo['id']; ?>"><?php echo $newInfo['title']; ?></a></p>
				<p><a href="<?php echo $this->currentWebgameInfo['url_server'] . 'spirit?id=' . $newInfo['id']; ?>" class="pet_but01" title="<?php echo $newInfo['title']; ?>宠物获得"></a><a href="<?php echo $this->currentWebgameInfo['url_server'] . 'spirit?id=' . $newInfo['id']; ?>" class="pet_but02" title="<?php echo $newInfo['title']; ?>宠物升级"></a></p>
			</li>
		<?php } ?>
        </ul>
    </div>
</div>
<div class="nw_dq_bot"></div>

<script  type="text/jscript">

function getSearch()
{
	var keyword = $("#keyword").val();
	getSpiritInfos('keyword', keyword)
}

function getAttribute()
{
	var attribute = $("#attribute").val();
	getSpiritInfos('attribute', attribute)
}

function getSort()
{
	var sort = $("#sortType").val();
	getSpiritInfos('sort', sort)
}

function freshPage()
{
	location.reload();
}
function getSpiritInfos(field, value)
{
	$.ajax({

		type: "get",		//使用get方法访问后台  
		dataType: "jsonp",	//返回json格式的数据  
		jsonp:"callback",
		url: "<?php echo $this->currentWebgameInfo['url_server']; ?>getSpirit?field=" + field + "&value=" + value,
		//data:{"opp":"main"},
		//async: false,
		success: function(data) {
			var infoLists = ''
			$.each(data,function(i,n) {
				infoLists += '<li><a href="' + n.url + '"><img src="' + n.thumb + '" class="pet-img"/></a><p class="pet_pw"><a href="' + n.url + '">' + n.title + 
					'</a></p><p><a href="' + n.url + '" class="pet_but01" title="' + n.title + '"></a><a href="' + n.url + '" class="pet_but02" title="' + n.title + '"></a></p></li>';
			})
			$("#listSpirit").html(infoLists);
		}
	});	
}
</script>
<?php echo $this->load->view('footer_cfront'); ?>