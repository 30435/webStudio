<?php echo $this->load->view('header_base'); ?>
<link rel="stylesheet" type="text/css"  href="<?php echo $this->staticUrl; ?>cfront/css/style.css"/>
<link rel="stylesheet" type="text/css"  href="<?php echo $this->staticUrl; ?>cfront/css/reset.css"/>
</head>
<body>
	
	<div class="header">
			<div class="nav">
            	<div class="logo fl"></div>
                <p class="nav_r fr"><a href="#" class="logo_all">全部</a> <a href="#">充值</a>|<a href="#">注册</a>|<a href="#">收藏</a>|&nbsp;&nbsp;<a href="#">官方论坛</a></p>
            </div>
	</div>
    
    <!--------------------------宽度一样的977px---------------------------------------->
    <div class="all">
    	<div class="ban"><iframe id="frm" src="<?php echo $this->currentWebgameInfo['url_webgame']; ?>" width="1010" height="620" frameborder="0" scrolling="no"></iframe></div>
			<div class="nav_nuowa">
            	<div class="nwbg">
                	<div class="ser_bar">
                    	<input type="text" value="请输入诺瓦攻略、秘籍" class="n_tag"/><input type="button" value="" class="s_but" />
                    </div>
                    <div class="nav1">
                    	<a href="#" target="_blank" class="n1">诺瓦首页</a>
                        <a href="#" target="_blank" class="n1">诺瓦攻略</a>
                        <a href="#" target="_blank" class="n1">诺瓦米吧</a>
                        <a href="#" target="_blank" class="n1">诺瓦指南</a>
                        <a href="#" target="_blank" class="n1">诺瓦新闻</a>
                        <a href="#" target="_blank" class="n1">诺瓦故事</a>
                    </div>
                    <div class="r_btn">
                    	<a href="#" target="_blank" class="j1"></a>
                        <a href="#" target="_blank" class="sc"></a>
                    </div>
                </div>
                <div class="demon">
				<?php foreach (array(9, 10, 11, 12, 13, 14) as $showCatid) { ?>
                	<dl>
                    	<dt><a title="<?php echo $this->categoryInfos[$showCatid]['catname']; ?>" target="_blank" href="<?php echo $this->categoryInfos[$showCatid]['url']; ?>" class="icon0"><img src="<?php echo $this->staticUrl; ?>cfront/images/car.png" /></a></dt>
                        <dd><p><a href="<?php echo $this->categoryInfos[$showCatid]['url']; ?>" target="_blank" class="t0"><b><?php echo $this->categoryInfos[$showCatid]['catname']; ?></b></a></p></dd>
                    </dl>
				<?php } ?>
                </div>
                <div class="nuowa_line"><img src="images/yj.jpg" /></div>
                
            </div>
            <!--------------------------热帖和攻略---------------------------------------->
            <p class="lt_nuowa_up"><img src="<?php echo $this->staticUrl; ?>cfront/images/sy.jpg" /></p>
            <div class="lt_nuowa">
            <div class="lt_nuowa0_l fl">
                <p class="nuowa_new"><img src="<?php echo $this->staticUrl; ?>cfront/images/new.jpg" /></p>
                    <div class="lt_nuowa_l">
                        <ul class="hot_nuowa">
						<?php foreach (array(9, 10, 11, 12, 13, 14) as $showCatid) { ?>
							<li <?php if (in_array($showCatid, array(10, 12, 14))) {echo 'class="se"';} ?>><a title="<?php echo $this->categoryInfos[$showCatid]['catname']; ?>" target="_blank" href="<?php echo $this->categoryInfos[$showCatid]['url']; ?>" class="icon0"><?php echo $this->categoryInfos[$showCatid]['catname']; ?></a></li>
						<?php } ?>
                        </ul>
                        <div class="wen0"><span>赛尔号游戏简介和特色</span>
						<p><a href="#">游戏简介</a>　<a href="#">故事背景</a>　<a href="#">游戏特色</a></p>
						</div>
                        <div class="wen0"><span>赛尔号游戏简介和特色</span>
						<p><a href="#">游戏简介</a>　<a href="#">故事背景</a>　<a href="#">游戏特色</a>　<a href="#">游戏特色</a>　<a href="#">游戏特色</a></p><p><a href="#">游戏简介</a>　<a href="#">故事背景</a>　<a href="#">游戏特色</a>　<a href="#">游戏特色</a>　<a href="#">游戏特色</a></p><p><a href="#">游戏简介</a>　<a href="#">故事背景</a>　<a href="#">游戏特色</a>　<a href="#">游戏特色</a>　<a href="#">游戏特色</a></p>
						</div>
                        <div class="wen0"><span>赛尔号游戏简介和特色</span>
						<p><a href="#">游戏简介</a>　<a href="#">故事背景</a>　<a href="#">游戏特色</a>　<a href="#">游戏特色</a>　<a href="#">游戏特色</a></p><p><a href="#">游戏简介</a>　<a href="#">故事背景</a>　<a href="#">游戏特色</a>　<a href="#">游戏特色</a>　<a href="#">游戏特色</a></p><p><a href="#">游戏简介</a>　<a href="#">故事背景</a>　<a href="#">游戏特色</a>　<a href="#">游戏特色</a>　<a href="#">游戏特色</a></p>
						</div>
                        <div><img src="<?php echo $this->staticUrl; ?>cfront/images/rt.jpg" /></div>
                        <ul class="new_nuowa">
						<?php $newInfos = $controller->_getFrontInfos('webgame', 'new', 1, 6, array('catid' => 14), array(array('inputtime', 'desc'))); ?>
						<?php foreach ($newInfos['infos'] as $newInfo) { ?>
							<li><span><a target="_blank" href="<?php echo $newInfo['url']; ?>" title="<?php echo $newInfo['title']; ?>"><?php echo date('m/d', $newInfo['inputtime']); ?></span><?php echo $controller->cutstr($newInfo['title'], 36); ?></a></li>
						<?php } ?>
                        </ul>
                    </div>
                 <p class="nuowa_xyj"><img src="images/xyj.jpg" /></p>
             </div>
             <div class="lt_nuowa0_r fr">
             <div class="lt_nuowa0_r_z_up">
                    <div class="lt_nuowa0_r_z">
                        <p><a href="<?php echo $this->categoryInfos[15]['url']; ?>"><img src="<?php echo $this->staticUrl; ?>cfront/images/pic_tit0.jpg" /></a></p>
						<?php $newInfos = $controller->_getFrontInfos('webgame', 'new', 1, 16, array('catid' => 15), array(array('inputtime', 'desc'))); $newInfos = $newInfos['infos'];?>
                        <p class="nuowa_gl">
							<h2><a target="_blank" href="<?php echo $newInfos[0]['url']; ?>" title="<?php echo $newInfos[0]['title']; ?>"><?php echo $controller->cutstr($newInfos[0]['title'], 40); ?></a></h2>
							<a target="_blank" href="<?php echo $newInfos[1]['url']; ?>" title="<?php echo $newInfos[1]['title']; ?>"><?php echo $controller->cutstr($newInfos[1]['title'], 15); ?></a>|
							<a target="_blank" href="<?php echo $newInfos[2]['url']; ?>" title="<?php echo $newInfos[2]['title']; ?>"><?php echo $controller->cutstr($newInfos[3]['title'], 15); ?></a>
							<h2><a target="_blank" href="<?php echo $newInfos[4]['url']; ?>"><?php echo $controller->cutstr($newInfos[4]['title'], 40); ?></a></h2>
							<a target="_blank" href="<?php echo $newInfos[5]['url']; ?>" title="<?php echo $newInfos[3]['title']; ?>"><?php echo $controller->cutstr($newInfos[5]['title'], 15); ?></a>|
							<a target="_blank" href="<?php echo $newInfos[6]['url']; ?>" title="<?php echo $newInfos[4]['title']; ?>"><?php echo $controller->cutstr($newInfos[6]['title'], 15); ?></a>
						</p>
                        <ul>
						<?php for ($i = 7; $i < 11; $i++) { ?>
                            <li><a href="<?php echo $newInfos[$i]['url']; ?>" target="_blank" title="<?php echo $newInfos[$i]['title']; ?>"><span>[<?php echo date('m/d', $newInfos[$i]['updatetime']); ?>]</span><?php echo $controller->cutstr($newInfos[$i]['title'], 36); ?></a></li>
                        <?php } ?>
                        </ul>
                         <ul>
						<?php for ($i = 12; $i < 16; $i++) { ?>
                            <li><a href="<?php echo $newInfos[$i]['url']; ?>" target="_blank" title="<?php echo $newInfos[$i]['title']; ?>"><span>[<?php echo date('m/d', $newInfos[$i]['updatetime']); ?>]</span><?php echo $controller->cutstr($newInfos[$i]['title'], 36); ?></a></li>
                        <?php } ?>
                        </ul>
                    </div>
                    <div class="lt_nuowa0_r_z">
                        <p><a href="<?php echo $this->categoryInfos[13]['url']; ?>"><img src="<?php echo $this->staticUrl; ?>cfront/images/pic_tit0.jpg" /></a></p>
						<?php $newInfos = $controller->_getFrontInfos('webgame', 'new', 1, 16, array('catid' => 13), array(array('inputtime', 'desc'))); $newInfos = $newInfos['infos'];?>
                        <p class="nuowa_gl">
							<h2><a target="_blank" href="<?php echo $newInfos[0]['url']; ?>" title="<?php echo $newInfos[0]['title']; ?>"><?php echo $controller->cutstr($newInfos[0]['title'], 40); ?></a></h2>
							<a target="_blank" href="<?php echo $newInfos[1]['url']; ?>" title="<?php echo $newInfos[1]['title']; ?>"><?php echo $controller->cutstr($newInfos[1]['title'], 15); ?></a>|
							<a target="_blank" href="<?php echo $newInfos[2]['url']; ?>" title="<?php echo $newInfos[2]['title']; ?>"><?php echo $controller->cutstr($newInfos[3]['title'], 15); ?></a>
							<h2><a target="_blank" href="<?php echo $newInfos[4]['url']; ?>"><?php echo $controller->cutstr($newInfos[4]['title'], 40); ?></a></h2>
							<a target="_blank" href="<?php echo $newInfos[5]['url']; ?>" title="<?php echo $newInfos[3]['title']; ?>"><?php echo $controller->cutstr($newInfos[5]['title'], 15); ?></a>|
							<a target="_blank" href="<?php echo $newInfos[6]['url']; ?>" title="<?php echo $newInfos[4]['title']; ?>"><?php echo $controller->cutstr($newInfos[6]['title'], 15); ?></a>
						</p>
                        <ul>
						<?php for ($i = 7; $i < 11; $i++) { ?>
                            <li><a href="<?php echo $newInfos[$i]['url']; ?>" target="_blank" title="<?php echo $newInfos[$i]['title']; ?>"><span>[<?php echo date('m/d', $newInfos[$i]['updatetime']); ?>]</span><?php echo $controller->cutstr($newInfos[$i]['title'], 36); ?></a></li>
                        <?php } ?>
                        </ul>
                         <ul>
						<?php for ($i = 12; $i < 16; $i++) { ?>
                            <li><a href="<?php echo $newInfos[$i]['url']; ?>" target="_blank" title="<?php echo $newInfos[$i]['title']; ?>"><span>[<?php echo date('m/d', $newInfos[$i]['updatetime']); ?>]</span><?php echo $controller->cutstr($newInfos[$i]['title'], 36); ?></a></li>
                        <?php } ?>
                        </ul>
                    </div>
                  </div>
             <div class="lt_nuowa0_r_z_up bot">
                    <div class="lt_nuowa0_r_z">
                        <p><a href="<?php echo $this->categoryInfos[12]['url']; ?>"><img src="<?php echo $this->staticUrl; ?>cfront/images/pic_tit0.jpg" /></a></p>
						<?php $newInfos = $controller->_getFrontInfos('webgame', 'new', 1, 16, array('catid' => 12), array(array('inputtime', 'desc'))); $newInfos = $newInfos['infos'];?>
                        <p class="nuowa_gl">
							<h2><a target="_blank" href="<?php echo $newInfos[0]['url']; ?>" title="<?php echo $newInfos[0]['title']; ?>"><?php echo $controller->cutstr($newInfos[0]['title'], 40); ?></a></h2>
							<a target="_blank" href="<?php echo $newInfos[1]['url']; ?>" title="<?php echo $newInfos[1]['title']; ?>"><?php echo $controller->cutstr($newInfos[1]['title'], 15); ?></a>|
							<a target="_blank" href="<?php echo $newInfos[2]['url']; ?>" title="<?php echo $newInfos[2]['title']; ?>"><?php echo $controller->cutstr($newInfos[3]['title'], 15); ?></a>
							<h2><a target="_blank" href="<?php echo $newInfos[4]['url']; ?>"><?php echo $controller->cutstr($newInfos[4]['title'], 40); ?></a></h2>
							<a target="_blank" href="<?php echo $newInfos[5]['url']; ?>" title="<?php echo $newInfos[3]['title']; ?>"><?php echo $controller->cutstr($newInfos[5]['title'], 15); ?></a>|
							<a target="_blank" href="<?php echo $newInfos[6]['url']; ?>" title="<?php echo $newInfos[4]['title']; ?>"><?php echo $controller->cutstr($newInfos[6]['title'], 15); ?></a>
						</p>
                        <ul>
						<?php for ($i = 7; $i < 11; $i++) { ?>
                            <li><a href="<?php echo $newInfos[$i]['url']; ?>" target="_blank" title="<?php echo $newInfos[$i]['title']; ?>"><span>[<?php echo date('m/d', $newInfos[$i]['updatetime']); ?>]</span><?php echo $controller->cutstr($newInfos[$i]['title'], 36); ?></a></li>
                        <?php } ?>
                        </ul>
                         <ul>
						<?php for ($i = 12; $i < 16; $i++) { ?>
                            <li><a href="<?php echo $newInfos[$i]['url']; ?>" target="_blank" title="<?php echo $newInfos[$i]['title']; ?>"><span>[<?php echo date('m/d', $newInfos[$i]['updatetime']); ?>]</span><?php echo $controller->cutstr($newInfos[$i]['title'], 36); ?></a></li>
                        <?php } ?>
                        </ul>
                    </div>
                    <div class="lt_nuowa0_r_z">
                        <p><a href="<?php echo $this->categoryInfos[17]['url']; ?>" target="_blank"><img src="<?php echo $this->staticUrl; ?>cfront/images/pic_tit0.jpg" /></a></p>
						<?php $newInfos = $controller->_getFrontInfos('webgame', 'new', 1, 16, array('catid' => 17), array(array('inputtime', 'desc'))); $newInfos = $newInfos['infos'];?>
                        <p class="nuowa_gl">
							<h2><a target="_blank" href="<?php echo $newInfos[0]['url']; ?>" title="<?php echo $newInfos[0]['title']; ?>"><?php echo $controller->cutstr($newInfos[0]['title'], 40); ?></a></h2>
							<a target="_blank" href="<?php echo $newInfos[1]['url']; ?>" title="<?php echo $newInfos[1]['title']; ?>"><?php echo $controller->cutstr($newInfos[1]['title'], 15); ?></a>|
							<a target="_blank" href="<?php echo $newInfos[2]['url']; ?>" title="<?php echo $newInfos[2]['title']; ?>"><?php echo $controller->cutstr($newInfos[3]['title'], 15); ?></a>
							<h2><a target="_blank" href="<?php echo $newInfos[4]['url']; ?>"><?php echo $controller->cutstr($newInfos[4]['title'], 40); ?></a></h2>
							<a target="_blank" href="<?php echo $newInfos[5]['url']; ?>" title="<?php echo $newInfos[3]['title']; ?>"><?php echo $controller->cutstr($newInfos[5]['title'], 15); ?></a>|
							<a target="_blank" href="<?php echo $newInfos[6]['url']; ?>" title="<?php echo $newInfos[4]['title']; ?>"><?php echo $controller->cutstr($newInfos[6]['title'], 15); ?></a>
						</p>
                        <ul>
						<?php for ($i = 7; $i < 11; $i++) { ?>
                            <li><a href="<?php echo $newInfos[$i]['url']; ?>" target="_blank" title="<?php echo $newInfos[$i]['title']; ?>"><span>[<?php echo date('m/d', $newInfos[$i]['updatetime']); ?>]</span><?php echo $controller->cutstr($newInfos[$i]['title'], 36); ?></a></li>
                        <?php } ?>
                        </ul>
                         <ul>
						<?php for ($i = 12; $i < 16; $i++) { ?>
                            <li><a href="<?php echo $newInfos[$i]['url']; ?>" target="_blank" title="<?php echo $newInfos[$i]['title']; ?>"><span>[<?php echo date('m/d', $newInfos[$i]['updatetime']); ?>]</span><?php echo $controller->cutstr($newInfos[$i]['title'], 36); ?></a></li>
                        <?php } ?>
                        </ul>
                    </div>
                  </div>
             </div>
            </div>
             <p class="lt_nuowa_down"><img src="<?php echo $this->staticUrl; ?>cfront/images/xy.jpg" /></p>
              <!--------------------------游戏背景---------------------------------------->
              <div class="nuowa_bj">
              	<p class="more"><a href="<?php echo $this->categoryInfos[16]['url']; ?>" target="_blank">更多</a></p>
                <ul>
				<?php $newInfos = $controller->_getFrontInfos('webgame', 'new', 1, 4, array('catid' => 16), array(array('inputtime', 'desc'))); ?>
				<?php $i = 1; foreach ($newInfos['infos'] as $newInfo) { ?>
					<li><a href="<?php echo $newInfo['thumb']; ?>" target="_blank"><img src="<?php echo $newInfo['thumb']; ?>" width="223px" height="136px" /></a><br /><a href="<?php echo $newInfo['thumb']; ?>" target="_blank"><?php echo $controller->cutstr($newInfo['title'], 32); ?></a></li>
				<?php if ($i == 5 || $i == 10) echo '<li class="line2"></li>'; $i++; } ?>
                </ul>
              </div>

              <div class="footer">
              	<div class="huang"><img src="images/h.png" /></div>
                <p>小游戏作品版权归原作者享有，如无意之中侵犯了您的版权，请您按照《版权保护投诉指引》来信告知，本网站将应您的要求删除。
2125温馨提示：抵制不良游戏 拒绝盗版游戏 注意自我保护 谨防受骗上当 适度游戏益脑 沉迷游戏伤身 合理安排时间 享受健康生活
用户协议   |    上传游戏   |    版权保护投诉指引 
上海淘米网络科技有限公司 Copyright © 2010-2012 2125小游戏 All Rights Reserved.   |   沪ICP备10205640号 文网文[2009]093号 </p>
              </div>
              
 </div>
</div>
</body>
</html>
