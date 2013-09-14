<div id="footer">
<?php foreach (array(2, 3, 4, 19, 20, 21, 22) as $showCatid) { ?>
	<a href="<?php echo $this->categoryInfos[$showCatid]['url']; ?>" title="<?php echo $this->categoryInfos[$showCatid]['catname']; ?>"><?php echo $this->categoryInfos[$showCatid]['catname']; ?></a>|
<?php } ?>
<p>
刊登热线：4000-500-555 咨询电话：010-62168889 中国加盟网友情提示：多打电话、多咨询、实地考察，可降低投资风险<br>
厦门翔通动漫有限公司 闽ICP备12016397 
</p>
<p class="cp">Powered by <strong><a href="" target="_blank">kids studio!</a></strong>
&copy; <?php echo date('Y', $this->time); ?> <img src="<?php echo $this->staticUrl; ?>kidsedu/imgaes/copyright.gif"/>
</p>
</div>
</body>
</html>