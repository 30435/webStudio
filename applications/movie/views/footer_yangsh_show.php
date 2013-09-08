<div class="footer">
	<p>
		<?php 
		foreach ($this->categoryInfos as $categoryInfo) { 
		    if ($categoryInfo['parentid'] == 10) {
				echo '<a href="' . $categoryInfo['catdir'] . '" target="_blank">' . $categoryInfo['catname'] . '</a>';
			}
		}
		?>
	</p>
	<p class="copy">Copyright @ 2011 <a href="http://www.cndzys.com">www.cndzys.com</a>大众养生网 版权所有 豫ICP备1101894号</p>
	<div style="display:none;">
		<script language="JavaScript" src="http://s20.cnzz.com/stat.php?id=4708056&amp;web_id=4708056">
		</script>
		<script type="text/javascript" charset="utf-8" src="http://c.cnzz.com/cnzz_core.php?web_id=4708056&amp;l=none">
		</script>
		<a title="站长统计" target="_blank" href="http://www.cnzz.com/stat/website.php?web_id=4708056">
			站长统计
		</a>
	</div>
</div>
</div>
</body>
</html>