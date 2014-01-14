<!--底部-->
<div class="footer">
	<div class="bg">
		<p>
		<?php foreach (array(2, 4, 19, 20) as $showCatid) { ?>
			<a href="<?php echo $this->categoryInfos[$showCatid]['url']; ?>" title="<?php echo $this->categoryInfos[$showCatid]['catname']; ?>"><?php echo $this->categoryInfos[$showCatid]['catname']; ?></a> |
		<?php } ?>	
			<a href="<?php echo $this->categoryInfos[24]['url']; ?>" target="_blank">京网文[2013]0506-133号</a> | 
			<a href="<?php echo $this->categoryInfos[23]['url']; ?>" target="_blank">网络文化经营许可证</a>
		</p>
		<p class="copyright"> 知金伟业教育科技（北京）有限公司 Copyright ? 2008 - 2012 ZhiJin Inc. All Rights Reserved </p>
	</div>	
</div>

<link rel="stylesheet" href="<?php echo $this->staticUrl; ?>newfront/kf/2/css/public_index.css" />
<div class="box_os">
    <div class="osqq">
    	<p><strong>在线QQ</strong></p>
<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2978216678&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:2978216678:53" alt="点击这里给我发消息" title="点击这里给我发消息"/></a>
        <!--<p><strong>客服电话</strong><span>010-80080060</span><span>010-40040080</span></p>
        <p><strong>会员卡代理</strong><span>010-000000-8028</span></p>
        <p><strong>微博</strong><span><a href="http://weibo.com/u/1752410062" target="_blank">站长素材</a></span></p>-->
    </div>
</div>
