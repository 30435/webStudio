<?php $this->load->view('header_yangsh_list'); $currentCi =& get_instance(); ?>
<div class="dq">
	<div class="dq1">
		<span>当前位置：</span><a href="/arqys">人群养生</a>&gt;<a href="/nxysw">女性养生</a>&gt;<a href="/mrmt">美容美体</a>
	</div>
</div>
<div id="banner1" style="width:958px;">
	<script src="http://localhost/github/shapp/php/yangsh/target/adv/adv8.js" type="text/javascript"></script>
	<script type="text/javascript">var cpro_id = "u1165080";</script>
</div>
<div class="list">
	<div class="list1">
		<h1><span>美容<font style="font-size:14px;">美体</font></span></h1>
        <?php 
		$infos = $currentCi->getCmsInfos(30, '', array('catid' => $this->catid), array(), true);
		if (is_array($infos)) { 
		    $i = 0;
			$infosStr = '';
			foreach ($infos as $info) {
				if ($i % 10 == 0) {
					$infosStr .= '<ul class="bj1-2">';
				}

				$infosStr .= '<li><a href="' . $info['url'] . '" target="_blank">' 
					. $info['title'] . '</a><span>' . date('Y-m-d H:i:s', $info['updatetime']) . '</span></li>';
				if ($i % 10 == 9) {
					$infosStr .= '</ul>';
				}
				$i++;
			}
			echo $infosStr;
		} 
		?>
		<div class="clear">
			&nbsp;
		</div>
		<div class="pag1">
			287 条记录 1/10 页
			<a href="/index.php/Arqys/slists?id=51&amp;p=2">
				下一页
			</a>
			&nbsp;
			<span class="current">
				1
			</span>
			&nbsp;
			<a href="/index.php/Arqys/slists?id=51&amp;p=2">
				&nbsp;2&nbsp;
			</a>
			&nbsp;
			<a href="/index.php/Arqys/slists?id=51&amp;p=3">
				&nbsp;3&nbsp;
			</a>
			&nbsp;
			<a href="/index.php/Arqys/slists?id=51&amp;p=4">
				&nbsp;4&nbsp;
			</a>
			&nbsp;
			<a href="/index.php/Arqys/slists?id=51&amp;p=5">
				&nbsp;5&nbsp;
			</a>
			<a href="/index.php/Arqys/slists?id=51&amp;p=6">
				下5页
			</a>
			<a href="/index.php/Arqys/slists?id=51&amp;p=10">
				最后一页
			</a>
		</div>
	</div>
	<div class="list2">
		<div style="margin-top:0px;" class="jb1-2-1 bw2-3">
			<h1>
				<p>
					<span>
						热门关注
					</span>
				</p>
			</h1>
			<ul class="jb1-3">
				<li>
					<span class="top2">
						1
					</span>
					<a href="/lnys/86074.html">
						老年人春季养生多喝粥 健康又长寿
					</a>
				</li>
				<li>
					<span class="top2">
						2
					</span>
					<a href="/yyys/86017.html">
						春季应酬贪杯男性应该如何养生呢？
					</a>
				</li>
				<li>
					<span class="top2">
						3
					</span>
					<a href="/mrmt/86148.html">
						女人怎么可以拥有健康红润的脸色
					</a>
				</li>
				<li>
					<span>
						4
					</span>
					<a href="/yyys/86124.html">
						土豆对女人的益处
					</a>
				</li>
				<li>
					<span>
						5
					</span>
					<a href="/mrmt/86130.html">
						日常生活中怎样祛除脸上斑点
					</a>
				</li>
				<li>
					<span>
						6
					</span>
					<a href="/ysbj/86136.html">
						男性摆脱5个弱点可延长生命
					</a>
				</li>
				<li>
					<span>
						7
					</span>
					<a href="/slbj/86158.html">
						改变男性走路方式可改善肾虚
					</a>
				</li>
				<li>
					<span>
						8
					</span>
					<a href="/mrmt/86161.html">
						女人选择合适的睡姿的重要性
					</a>
				</li>
				<li>
					<span>
						9
					</span>
					<a href="/mrmt/86168.html">
						女人面色暗黄怎么调养
					</a>
				</li>
				<li>
					<span>
						10
					</span>
					<a href="/ysbj/86162.html">
						男人用什么方法养生能够轻松拥有好睡眠
					</a>
				</li>
				<div class="clear">
					&nbsp;
				</div>
			</ul>
		</div>
		<div class="clear">
		</div>
		<div class="jb1-2-1 bw2-3">
			<h1>
				<p>
					<span>
						每日推荐
					</span>
				</p>
			</h1>
			<ul class="cer2-4-1 bj2-5">
				<li>
					<a class="img1" href="/lnsh/86253.html">
						<img src="http://localhost/github/shapp/php/yangsh/target/uploads/1362452432/51355fd062817_resize_88x70.jpg">
					</a>
					<div class="title1">
						<a href="/lnsh/86253.html">
							<b style="color:#0b8f88; font-size:14px;">
								老年人想人老心不老要怎么保养
							</b>
						</a>
						<p>
							老年人随着年龄的增长身体的很多...
							<a href="/lnsh/86253.html">
								[详情]
							</a>
						</p>
					</div>
				</li>
			</ul>
			<ul class="new5">
				<li>
					<a href="/lnsh/86252.html">
						老年人健康睡眠有哪些禁忌
					</a>
				</li>
				<li>
					<a href="/lnbj/86251.html">
						老人提升记性力 多转眼珠是正道
					</a>
				</li>
				<li>
					<a href="/lnbj/86250.html">
						老年人不可不知的八种营养
					</a>
				</li>
				<li>
					<a href="/lnys/86218.html">
						老年人多食狗肉可缓解精神不振
					</a>
				</li>
				<li>
					<a href="/lnbj/86174.html">
						正确应对中老年人的高血压症状
					</a>
				</li>
				<li>
					<a href="/yyys/86173.html">
						让男性远离前列腺疾病的蔬菜
					</a>
				</li>
				<li>
					<a href="/slbj/86170.html">
						男人没有胡须也是一种病？
					</a>
				</li>
			</ul>
		</div>
		<div class="clear">
			&nbsp;
		</div>
		<div id="banner2" class="banner3">
			<script src="http://localhost/github/shapp/php/yangsh/target/adv/adv16.js" type="text/javascript">
			</script>
			<script type="text/javascript">
				/*三级首页*/
				var cpro_id = "u1168310";
			</script>
			<script type="text/javascript" src="http://localhost/github/shapp/php/yangsh/target/http:/cpro.baidustatic.com/cpro/ui/c.js">
			</script>
		</div>
	</div>
</div>
<div class="clear">
	&nbsp;
</div>
<div class="yq">
	<h1 id="linkh1">
		<span>
		</span>
	</h1>
	<p id="ylinks">
	</p>
	<div style="height:5px;" class="clear">
		&nbsp;
	</div>
</div>
<!------M8 开始------->
<?php $this->load->view('footer_yangsh_list') ?>