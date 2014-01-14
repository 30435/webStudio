<?php echo $this->load->view('newfront/header'); ?>
<?php $sortInfos = $controller->currentModel->sortInfos; ?>
<body>
<div class="content-m">
	<img class="imgbg" src="<?php echo $this->staticUrl; ?>newfront/images/bg/content-bg-top.jpg">
	<!--顶部通知-->
	<?php echo $this->load->view('newfront/inline_header'); ?>
	<div class="content-n">
		<div class=" bgset">
	<!--内容-->
	<div class="wrap">
		<!--top 导航-->
		<?php echo $this->load->view('newfront/inline_nav'); ?>
		<!--参杂内容-->
		<div class="next-content-top"></div>
		<div class="next-content">
			<!--热门小宠-->
			<div class="hot-pet mb10">
				<div class="pet-top">
					<a href="javascript:void(0)" title="MORE>"></a>
				</div>
				<div class="pet-content pet-content-min">
					<ul>
					<?php $newInfos = $controller->_getFrontInfos('webgame', 'spirit', 1, 6, array(), array(array('id', 'desc')), 'id, title, thumb,'); ?>
					<?php foreach ($newInfos['infos'] as $newInfo) { ?>
						<li>
							<a href="<?php echo $this->currentWebgameInfo['url_server'] . 'spirit?id=' . $newInfo['id']; ?>"><?php echo $newInfo['title']; ?></a>
							<a href="<?php echo $this->currentWebgameInfo['url_server'] . 'spirit?id=' . $newInfo['id']; ?>"><img src="<?php echo $newInfo['thumb']; ?>"></a>
						</li>
					<?php } ?>
					</ul>
				</div>		
			</div>	
			<!--宠物之星-->
			<?php echo $this->load->view('newfront/inline_left2'); ?>
			<!--两张图-->
			<div class="two-img">
				<a href="javascript:void(0)"><img src="<?php echo $this->staticUrl; ?>newfront/images/1.png"></a>
				<a href="javascript:void(0)"><img src="<?php echo $this->staticUrl; ?>newfront/images/2.png"></a>
			</div>
			<!--搜索框-->
			<div class="search-input">
				<input class="text" type="text">
				<input class="submit" type="submit" value="">
			</div>
			
			<div class="clearf"></div>
			<!--选项切换卡-->
			<div class="all-tab mt10">
	            <ul class="tab-hd" id="sortList">
	                <li class"active">
	                	<a class="tab1" href="javascript:void(0)"></a>
	                	<span>全部</span>
	                </li>
	    			<?php foreach ($sortInfos as $sortCode => $sortInfo) { ?>    
					<li id="<?php echo $sortCode; ?>">
						<a class="<?php echo $sortInfo['class']; ?>" href="javascript: $('#sortList > li').removeClass('active'); $('#<?php echo $sortCode; ?>').addClass('active'); getSort('<?php echo $sortCode; ?>'); void(0);"></a>
						<span><?php echo $sortInfo['value']; ?></span>
	                </li>
			        <?php } ?>
	            </ul>
	            <ul class="tab-bd">
	                <li>
	                	<div class="pet-content">
					        <ul id="listSpirit">
							<?php $sortDefault = $this->input->get_post('sort'); $where = empty($sortDefault) ? array() : array('sort' => $sortDefault); $newInfos = $controller->_getFrontInfos('webgame', 'spirit', 1, 36, $where, array(array('id', 'desc')), 'id, title, thumb,'); ?>
							<?php foreach ($newInfos['infos'] as $newInfo) { ?>
              					<li>
	                				<a href="<?php echo $this->currentWebgameInfo['url_server'] . 'spirit?id=' . $newInfo['id']; ?>"><?php echo $newInfo['title']; ?></a>
	                				<a href="<?php echo $this->currentWebgameInfo['url_server'] . 'spirit?id=' . $newInfo['id']; ?>"><img src="<?php echo $newInfo['thumb']; ?>"></a>
	                			</li>
							<?php } ?>
				       		</ul>
	                	</div>
	                </li>
	            </ul>
        	</div>
			<div class="clearf"></div>
		</div>
		<div class="next-content-bottom"></div>
	</div>
	</div>
	<!--底部-->
	<?php echo $this->load->view('newfront/inline_footer'); ?>
	</div>
	</div>

<script  type="text/jscript">

function getSearch()
{
	var keyword = $("#keyword").val();
	getSpiritInfos('keyword', keyword)
}

function getSort(sort)
{
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
			var infoLists = '';
			$.each(data,function(i,n) {
				infoLists += '<li><a href="' + n.url + '">' + n.title + '</a><a href="' + n.url + '"><img src="' + n.thumb + '" /></a></li>';
			});
			$("#listSpirit").html(infoLists);
		}
	});	
}

<?php if (!empty($sortDefault)) {
	echo "$('.nw_dq_sx > li > a').removeClass('pet-subtab-on'); $('#" . $sortDefault . "').addClass('pet-subtab-on');";
}
?>
</script>
</body>
</html>

