<?php echo $this->load->view('cfront/header'); ?>
    
    <!--------------------------宽度一样的977px---------------------------------------->
    <div class="all">
    	<div class="ban"><iframe id="frm" src="http://192.168.0.116/index.html" width="960" height="620" frameborder="0" scrolling="no"></iframe></div>
			
            <!--------------------------热帖和攻略---------------------------------------->
            <p class="lt_nuowa_up"><img src="<?php echo $this->staticUrl; ?>cfront/images/sy.png" /></p>
            <div class="lt_nuowa" style="background:#FFF;height:auto;">
                <div class="sigert">
                <strong style="color:#900;">您当前的位置：</strong><a href="/luoke/" target="_self">洛克王国</a>><a href="#" target="_self">洛克王国宠物大全</a>><a href="#" target="_self">土系</a>>正文</div>  
                <h1 class="sec_tit"><strong><?php echo $this->currentInfo['title']; ?></strong></h1>   
<div class="sec_deng">
                	<div class="sec_pic"></div>
<?php echo $this->currentInfo['content']; ?>
		<p class="sec_ms"><?php echo $this->currentInfo['description']; ?></p>
		<ul class="sec_tj">
        	<h2>宠物推荐</h2>
        	<li><a href="#"><img src="../images/001.png" /></a></li>
            <li><a href="#"><img src="../images/001.png" /></a></li>
            <li><a href="#"><img src="../images/001.png" /></a></li>
            <li><a href="#"><img src="../images/001.png" /></a></li>
            <li><a href="#"><img src="../images/001.png" /></a></li>
            <li><a href="#"><img src="../images/001.png" /></a></li>
            <li class="ts"><a href="#"><img src="../images/001.png" /></a></li>
        </ul>
        
        
          </div>
             
            </div>
             <p class="lt_nuowa_down"><img src="<?php echo $this->staticUrl; ?>cfront/images/xy.jpg" /></p>
             
              <!--------------------------游戏背景---------------------------------------->
              
              
              
              
 </div>
	<div class="footer">
		<div class="foot_con">
			<div class="foot_logo fl"><a href="<?php echo $this->currentWebgameInfo['url_home']; ?>"><img src="<?php echo $this->staticUrl; ?>cfront/images/logo.png" /></a></div>
			<div class="foot_tent fl">
				<p class="nav_foot">
				<?php foreach (array(2, 3, 4, 19, 20, 21) as $showCatid) { ?>
					<a href="<?php echo $this->categoryInfos[$showCatid]['url']; ?>" title="<?php echo $this->categoryInfos[$showCatid]['catname']; ?>"><?php echo $this->categoryInfos[$showCatid]['catname']; ?></a> |
				<?php } ?>	
				
				</p>
				<p>京ICP备09081115号-6 京网文[2013]0506-133号 网络文化经营许可证<br />知金伟业教育科技（北京）有限公司 Copyright ? 2008 - 2012 ZhiJin Inc. All Rights Reserved.</p>
			</div>
		</div>
	</div>
</div>
</body>
</html>
