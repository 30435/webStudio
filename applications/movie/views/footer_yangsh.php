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
	<p class="copy">Copyright @ 2011 <a href="<?php echo $this->baseUrl; ?>"><?php echo $this->baseUrl; ?></a>大众养生网 版权所有 豫ICP备1101894号</p>
	<div style="display:none;">
		<script language="JavaScript" src="http://s20.cnzz.com/stat.php?id=4708056&amp;web_id=4708056"></script>
	</div>
</div>
</div>
</body>
</html>
