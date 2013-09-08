<?php $this->load->view('header_yangsh_list'); $currentCi =& get_instance(); ?>
<div class="wapper">
	<div style="height:10px;" class="clear">&nbsp;</div>
	<div id="banner1" class="banner">
		<script src="http://localhost/github/shapp/php/yangsh/target/adv/adv3.js" type="text/javascript"></script>
		<script type="text/javascript">var cpro_id = "u1168295";</script>
	</div>
	<?php
	$infos = array();
	foreach ($this->categoryInfos as $catid => $categoryInfo) { 
		if ($categoryInfo['parentid'] == $this->catid) {
			foreach ($this->categoryInfos as $subCatid => $subCategoryInfo) { 
				if ($subCategoryInfo['parentid'] == $categoryInfo['id']) {
					$num = isset($catInfos[$subCatid]['num']) ? $catInfos[$subCatid]['num'] : 2;
					$contentInfos = $currentCi->getCmsInfos($num, '', array('catid' => $subCatid));
					$infos[$catid][$subCatid] = $contentInfos;
				} 
			}
		} 
	}
	?>

	<?php foreach ($infos as $bigCatid => $bigInfos) { ?>
	<div class="zy2">
		<div class="xian3">&nbsp;</div>
		<h3><span><?php echo $this->categoryInfos[$bigCatid]['catname']; ?><font style="font-size:14px;"><?php echo $this->categoryInfos[$bigCatid]['catname']; ?></font></span></h3>
		<div class="clear">&nbsp;</div>
		<div class="zy2-1">
		<?php foreach ($bigInfos as $subCatid => $subInfos) { ?>
			<div class="ys">
				<h1><span><?php echo $this->categoryInfos[$subCatid]['catname']; ?></span><a href="<?php echo $this->categoryInfos[$subCatid]['caturl']; ?>">更多&gt;&gt;</a></h1>
			<?php foreach ($subInfos as $subInfo) { ?>
				<div class="ys1">
					<a class="img2" href="<?php echo $subInfo['url']; ?>">
						<img src="<?php echo $subInfo['thumb']; ?>">
					</a>
					<div class="ys1-1">
						<h2>
							<a href="<?php echo $subInfo['url']; ?>">
								<?php echo $subInfo['title']; ?>
							</a>
						</h2>
						<p>
							<?php echo $subInfo['description']; ?>...
							<a href="<?php echo $subInfo['url']; ?>">
								[详情]
							</a>
						</p>
					</div>
				</div>
				<div class="clear">&nbsp;</div>
			<?php } ?>
			</div>
		<?php } ?>
		</div>
		<div class="zy2-2">
			<h1 class="h1-cj">
				<span>
					药膳食谱排行榜
				</span>
			</h1>
			<ul class="zy2-3">
				<li class="zy2-3-1">
					<span>
						1
					</span>
					<a class="img1" href="/xfys/86115.html">
						<img src="http://localhost/github/shapp/php/yangsh/target/uploads/1361930095/512d676fe0f94.jpg">
					</a>
					<div class="zy2-4-1">
						<h2>
							<a href="/xfys/86115.html">
								什么食物对于男性的性能力有帮助
							</a>
						</h2>
						<p>
							一些男性很想提高自己的性能力，奈何不太了...
							<a href="/xfys/86115.html">
								[详情]
							</a>
						</p>
					</div>
				</li>
				<li class="zy2-3-1">
					<span>
						2
					</span>
					<a class="img1" href="/jbys/86176.html">
						<img src="http://localhost/github/shapp/php/yangsh/target/uploads/1361955519/512dcabf89914.jpg">
					</a>
					<div class="zy2-4-1">
						<h2>
							<a href="/jbys/86176.html">
								缓解咽炎可以尝试一下苦丁蜂蜜
							</a>
						</h2>
						<p>
							患有咽炎的人非常多，早上起来就觉得嗓子发...
							<a href="/jbys/86176.html">
								[详情]
							</a>
						</p>
					</div>
				</li>
				<li class="zy2-3-1">
					<span>
						3
					</span>
					<a class="img1" href="/jbys/86093.html">
						<img src="http://localhost/github/shapp/php/yangsh/target/uploads/1361437044/5125e174a5292.jpg">
					</a>
					<div class="zy2-4-1">
						<h2>
							<a href="/jbys/86093.html">
								烦人口臭让人厌 该如何解决口臭
							</a>
						</h2>
						<p>
							口臭令别人厌烦、口臭这毛病虽小，却不可小...
							<a href="/jbys/86093.html">
								[详情]
							</a>
						</p>
					</div>
				</li>
				<li class="zy2-3-2">
					<span>
						4
					</span>
					<a href="/mrjf/86104.html">
						营养早餐也能瘦身 让我们来瞧一瞧
					</a>
				</li>
				<li class="zy2-3-2">
					<span>
						5
					</span>
					<a href="/jtys/86233.html">
						胃溃疡的药膳食疗方法
					</a>
				</li>
				<li class="zy2-3-2">
					<span>
						6
					</span>
					<a href="/jtys/86133.html">
						老年人的灵芝降血压食疗方法
					</a>
				</li>
				<li class="zy2-3-2">
					<span>
						7
					</span>
					<a href="/jtys/86087.html">
						家庭药膳 女性常吃姜好处多
					</a>
				</li>
				<li class="zy2-3-2">
					<span>
						8
					</span>
					<a href="/jbys/86110.html">
						老年性耳聋有什么方法可以解决吗
					</a>
				</li>
				<!-- <li class="zy2-3-2"><span>4</span><a href="#">补脑小菜黄豆排骨汤老醋核桃仁</a></li>
				<li class="zy2-3-2"><span>5</span><a href="#">补脑小菜黄豆排骨汤老醋核桃仁</a></li>
				<li class="zy2-3-2"><span>6</span><a href="#">补脑小菜黄豆排骨汤老醋核桃仁</a></li>
				<li class="zy2-3-2"><span>7</span><a href="#">补脑小菜黄豆排骨汤老醋核桃仁</a></li>
				<li class="zy2-3-2"><span>8</span><a href="#">补脑小菜黄豆排骨汤老醋核桃仁</a></li>
				-->
			</ul>
		</div>
	</div>
	<?php }	?>
</div>
<?php $this->load->view('footer_yangsh_list') ?>