<?php echo $this->load->view('header_base'); ?>
<base 
<link type='text/css' href='<?php echo $this->staticUrl; ?>newfront/css/style.css' rel='stylesheet'/>
<script type=text/javascript src="<?php echo $this->staticUrl; ?>newfront/js/jquery-1.7.2.min.js"></script>
<script type=text/javascript src="<?php echo $this->staticUrl; ?>newfront/js/orion.js"></script>
<!--[if IE 6]>
<script src="<?php echo $this->staticUrl; ?>newfront/js/iepng.js" type="text/javascript"></script>
<script type="text/javascript">
  EvPNG.fix('*'); //EvPNG.fix('包含透明PNG图片的标签'); 多个标签之间用英文逗号隔开
</script>
<![endif]-->
</head>

<body>
	<!--顶部通知-->
	<div class="head-top">
		<div class="top-main">
			<a class="logo" href="<?php echo $this->categoryInfos[8]['bind_domain']; ?>"><img src="<?php echo $this->staticUrl; ?>newfront/images/bg/top-logo.jpg"></a>
			<div class="right">
				<div>
				<?php if (!empty($this->loginedUserInfo)) { ?>
					<a class="logoa" href="javascript:void(0)"><?php echo $this->loginedUserInfo['username']; ?></a>
				<? } else { ?>
					<a class="logoa" href="<?php echo $this->appInfos['passport']['url']; ?>uwebgame/login/">登录官方网站</a>
				<? } ?>
					<a class="gifta" href="javascript:void(0)">礼品</a>
				</div>
			</div>
		</div>
	</div>
	<!--内容-->
	<div class="wrap">
		<!--top大图-->
		<div class="top-big"><iframe width="956" scrolling="no" height="640" frameborder="0" src="http://fc.gogoet.com/index.html" class="frm"></iframe></div>
		<!--参杂内容-->
		<div class="next-content">
			<!--新手教程-->
			<div class="faq">
				<a href="javascript:void(0)" title="新手教程"></a>
				<a href="javascript:void(0)" title="常见问题"></a>
				<a href="javascript:void(0)" title="账户充值"></a>
				<a href="javascript:void(0)" title="交易记录查询"></a>
			</div>
			<!--小轮播-->
			<div class="slide">
				<?php 
				$posterInfos = $controller->_getFrontInfos('passport', 'poster', 1, 4); 
				$bigStr = $smallStr = ''; $classOn = 'class="on"';
				foreach ($posterInfos['infos'] as $posterInfo) { 
					$bigStr .= '<a href="' . $posterInfo['url'] . '" title="' . $posterInfo['name'] . '" target="_blank"><img ' . $classOn . ' src="' . $posterInfo['pic'] . '"></a>'; $classOn = '';
					$smallStr .= '<a href="' . $posterInfo['url'] . '" title="' . $posterInfo['name'] . '" target="_blank"><img src="' . $posterInfo['pic'] . '"></a>';
				}
				?>
				<div class="big fl"><?php echo $bigStr; ?></div>
				<div class="small"><?php echo $smallStr; ?></div>
			</div>
			<!--新闻活动-->
			<div class="news">
				<div class="news-top">
					<a href="javascript:void(0)" title="MORE>"></a>
				</div>
				<div class="news-list">
					<ul>
					<?php $newInfos = $controller->_getFrontInfos('webgame', 'new', 1, 7, array('catid' => 9), array(array('inputtime', 'desc'))); ?>
					<?php foreach ($newInfos['infos'] as $newInfo) { ?>
						<li>
							<a class="red" href="<?php echo $newInfo['url']; ?>" title="<?php echo $newInfo['title']; ?>"> · [新闻]</a>
							<a href="<?php echo $newInfo['title']; ?>" title="<?php echo $newInfo['title']; ?>"><?php echo $controller->cutstr($newInfo['title'], 28); ?></a>
						</li>
					<?php } ?>
					</ul>
				</div>
			</div>
			<!--宠物之星-->
			<div class="start">
				<ul>
					<li>
						<a class="imga" href="javascript:void(0)"></a>
						<p><a href="javascript:void(0)">宠物：1000元人民币购买</a></p>
						<p><a href="javascript:void(0)">主人：晴朗的天空</a></p>
					</li>
					<li>
						<a class="imga" href="javascript:void(0)"></a>
						<p><a href="javascript:void(0)">宠物：1000元人民币购买</a></p>
						<p><a href="javascript:void(0)">主人：晴朗的天空</a></p>
					</li>
					<li>
						<a class="imga" href="javascript:void(0)"></a>
						<p><a href="javascript:void(0)">宠物：1000元人民币购买</a></p>
						<p><a href="javascript:void(0)">主人：晴朗的天空</a></p>
					</li>
				</ul>
			</div>
			<!--搜索框-->
			<div class="search-input">
				<input class="text" type="text">
				<input class="submit" type="submit" value="">
			</div>
			<!--两张图-->
			<div class="two-img">
				<a href="javascript:void(0)"><img src="<?php echo $this->staticUrl; ?>newfront/images/1.png"></a>
				<a href="javascript:void(0)"><img src="<?php echo $this->staticUrl; ?>newfront/images/2.png"></a>
			</div>
			<!--热门小宠-->
			<div class="hot-pet">
				<div class="pet-top">
					<a href="<?php echo $this->currentWebgameInfo['url_server']; ?>slist" title="MORE>"></a>
				</div>
				<div class="pet-content">
					<ul>
					<?php $newInfos = $controller->_getFrontInfos('webgame', 'spirit', 1, 12, array('position' => 'index'), array(array('updatetime', 'desc')), 'id, title, thumb,'); ?>
					<?php foreach ($newInfos['infos'] as $newInfo) { ?>
						<li>
							<a href="<?php echo $this->currentWebgameInfo['url_server'] . 'spirit?id=' . $newInfo['id']; ?>"><?php echo $newInfo['title']; ?></a>
							<a href="<?php echo $this->currentWebgameInfo['url_server'] . 'spirit?id=' . $newInfo['id']; ?>"><img src="<?php echo $newInfo['thumb']; ?>"></a>
						</li>
					<?php } ?>
					</ul>
				</div>		
			</div>
			<div class="clearf"></div>
			<!--玩家调查-->
			<div class="user-survey clearf">
				<p>您最关注官网哪块内容？</p>
				<form>
					<p><input type="radio" name="survey-radio" value="1" />玩家互动</p>
					<p><input type="radio" name="survey-radio" value="2" />最新活动</p>
					<p><input type="radio" name="survey-radio" value="3" />游戏资料</p>
					<p><input type="radio" name="survey-radio" value="4" />游戏商城</p>
					<p>
						<input class="submit" type="submit" value=""/>
						<input class="view" type="button" />
					</p>
				</form>			
			</div>
			<!--养宠心得 论坛热贴-->
			<div class="pet-news">
				<a href="javascript:void(0)" class="pet-more" title="more"></a>
				<ul>
				<?php $newInfos = $controller->_getFrontInfos('webgame', 'new', 1, 5, array('catid' => 10), array(array('inputtime', 'desc'))); ?>
				<?php foreach ($newInfos['infos'] as $newInfo) { ?>
					<li>
						<a href="<?php echo $newInfo['url']; ?>" title="<?php echo $newInfo['title']; ?>"> · <?php echo $controller->cutstr($newInfo['title'], 38); ?></a>
						<a class="orange fr" href="<?php echo $newInfo['url']; ?>" title="<?php echo $newInfo['title']; ?>">[<?php echo date('Y-m-d', $newInfo['updatetime']); ?>]</a>
					</li>
				<?php } ?>
				</ul>
			</div>
			<div class="pet-news luntan">
				<a href="javascript:void(0)" class="pet-more" title="more"></a>
				<ul>
				<?php $newInfos = $controller->_getFrontInfos('webgame', 'new', 1, 5, array('catid' => 11), array(array('inputtime', 'desc'))); ?>
				<?php foreach ($newInfos['infos'] as $newInfo) { ?>
					<li>
						<a href="<?php echo $newInfo['url']; ?>" title="<?php echo $newInfo['title']; ?>"> · <?php echo $controller->cutstr($newInfo['title'], 38); ?></a>
						<a class="orange fr" href="<?php echo $newInfo['url']; ?>" title="<?php echo $newInfo['title']; ?>">[<?php echo date('Y-m-d', $newInfo['updatetime']); ?>]</a>
					</li>
				<?php } ?>
				</ul>
			</div>
			<div class="clearf"></div>
			<!--互动社区 客服-->
			<div class="interactive">
				<a href="javascript:void(0)" title="互动社区"></a>
				<a href="javascript:void(0)" title="客服"></a>
			</div>

			<!--最新动漫 宠物杂志-->
			<div class="pet-news2">
				<a href="javascript:void(0)" class="pet-more" title="more"></a>
				<ul>
					<?php
					$newInfos = $controller->_getFrontInfos('webgame', 'new', 1, 4, array('catid' => 12), array(array('inputtime', 'desc')));
					$picStr = $titleStr = ''; $classOn = 'class="on"';
					foreach ($newInfos['infos'] as $newInfo) { 
						$picStr .= '<a href="' . $newInfo['url'] . '"><img ' . $classOn . ' src="' . $newInfo['thumb'] . '"></a>'; $classOn = '';
						$titleStr .= '<li> <a href="' . $newInfo['url'] . '" title="' . $newInfo['title'] . '">· ' . $controller->cutstr($newInfo['title'], 32) . '</a></li>';
					}
					?>
					<div><?php echo $picStr; ?><div><?php echo $titleStr; ?>
				</ul>
			</div>
			<div class="pet-news3">
				<a href="javascript:void(0)" class="pet-more" title="more"></a>
				<ul>
					<?php
					$newInfos = $controller->_getFrontInfos('webgame', 'new', 1, 4, array('catid' => 13), array(array('inputtime', 'desc')));
					$picStr = $titleStr = ''; $classOn = 'class="on"';
					foreach ($newInfos['infos'] as $newInfo) { 
						$picStr .= '<a href="' . $newInfo['url'] . '"><img ' . $classOn . ' src="' . $newInfo['thumb'] . '"></a>'; $classOn = '';
						$titleStr .= '<li> <a href="' . $newInfo['url'] . '" title="' . $newInfo['title'] . '">· ' . $controller->cutstr($newInfo['title'], 32) . '</a></li>';
					}
					?>
					<div><?php echo $picStr; ?><div><?php echo $titleStr; ?>
				</ul>
			</div>
		</div>
	</div>
	<!--底部-->
	<div class="footer">
		<div class="bg">
			<p>
				<a href="javascript:void(0)">关于我们</a> | 
				<a href="javascript:void(0)">服务条款</a> | <a href="javascript:void(0)">客服中心</a> | 
				<a href="javascript:void(0)">父母监护</a>			</p>
			<p class="copyright">COPYRIGHT ·1998-2001 INC. ALL RIGHTS RESERVRED 知金科技  版权所有</p>
		</div>	
	</div>

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
</body>
</html>

