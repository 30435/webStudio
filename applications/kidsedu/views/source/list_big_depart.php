<?php echo $this->load->view('header_base'); ?>
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $this->staticUrl; ?>kidsedu/kidsdepart/css/style.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $this->staticUrl; ?>kidsedu/kidsdepart/css/slanissue.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $this->staticUrl; ?>kidsedu/kidsdepart/css/pagenavi-css.css" />
<script src="http://s.beva.cn/js/core/jquery.min.js"></script>
</head>
<body>
<div id="top">
	<div id="header"><a href="<?php echo $this->categoryInfos[20]['url']; ?>" class="logo" title="<?php echo $this->currentCategoryInfo['catname']; ?>"></a><div class="conversion"></div></div>
	<div id="home-nav" class="homenav-1">
        <div class="navigation">
			<ul id="navmenu">
				<li><a href="<?php echo $this->categoryInfos[20]['url']; ?>" class="nav1 nav1_s" ></a></li>
				<?php $i = 2; foreach ($this->categoryInfos as $key => $category) { if ($category['parentid'] == 20) { ?>
				<li>
					<a href="<?php echo $category['url']; ?>" class="nav<?php echo $i; ?>" navid="nav<?php echo $i; ?>"></a>
        			<div class="nav-dropmenue">
					<?php foreach ($this->categoryInfos as $subKey => $subCategory) { if ($subCategory['parentid'] == $key) { ?>
        				<a href="<?php echo $subCategory['url']; ?>" title="<?php echo $subCategory['catname']; ?>"><?php echo $subCategory['catname']; ?></a>
						<span></span>
					<?php } } ?>
                    </div>
        		</li>
				<?php $i++; } } ?>
			</ul>
	    </div>
              <div class="home-background-image" id="home-bgs">
       		<img src="http://www.slanissue.com/wp-content/themes/slanissue/images/home1.jpg" id="home-img-1" />
       		<img src="http://www.slanissue.com/wp-content/themes/slanissue/images/home2.jpg" id="home-img-2" style="display:none;" />
       		<img src="http://www.slanissue.com/wp-content/themes/slanissue/images/home3.jpg" id="home-img-3" style="display:none;" />
       		<div id="home-top-pages">
       			<a href="javascript:;" imgid="home-img-1" data-navclass="homenav-1" class="on">1</a>
       			<a href="javascript:;" imgid="home-img-2" data-navclass="homenav-2">2</a>
       			<a href="javascript:;" imgid="home-img-3" data-navclass="homenav-3">3</a>
       		</div>
       </div>
       <script>
       $(document).ready(function()
       {
           $("#home-top-pages > a").mouseover(function()
           {
        	   $("#home-top-pages > a").removeClass("on");
        	   $(this).addClass("on");
               var obj = $(this), imgid = obj.attr('imgid'), navclass = obj.attr('data-navclass');
               $("#home-nav").removeClass().addClass(navclass);
        	   $("#home-bgs > img").hide();
        	   $("#" + imgid).show();
           });
       });
       </script>
          </div>
   <script>
   $(document).ready(function()
   {
	   $("#navmenu > li").hover(function()
	   {
		   var menua = $(this).children('a');
		   menua.removeClass(menua.attr("navid") + "_s").addClass(menua.attr("navid") + "_s");
		   $(this).children(".nav-dropmenue").show();
	   }, function()
	   {
		   var menua = $(this).children('a');
		   menua.removeClass(menua.attr("navid") + "_s");
		   $(this).children(".nav-dropmenue").hide();
	   });
   });
   </script>
   
	<div id="home-main">
		
		<div class="home-session-left">
            <h2 class="sub-nav-one"></h2>
            <div class="content-left">        
	    		<p>我们是中国领先的儿童成长公司，我们以“发现儿童的兴趣与天赋，培养儿童的爱好与技能，分享儿童成长中的快乐”为使命，以“有爱、用心”为经营理念。我们通过互联网、移动终端、多媒体新兴技术、出版、实体产品与服务等方式，以及深受儿童喜爱的卡通形象，努力创造高品质内容与产品，打造最优质的全媒体家庭早教产品，促进学龄前儿童教育与成长事业的发展。</p>
	    		<p>我们是一个有激情、有理想、务实创新的团队，我们为志同道合的年轻人提供实现梦想的舞台！作为一家高速成长的新型公司，我们关注每位员工的职业发展，鼓励员工进行学习和探索，提升职业技能和素养。同时我们员工提供良好的工作环境、愉悦的工作氛围、宽广的职业发展空间，以及有竞争力的薪酬福利待遇。</p>	
            </div>
		</div>
       
		<div class="home-session-middle"> 
            <h2 class="sub-nav-two"></h2> 
            <div class="content-middle">
				<div class="content-middle-top">
										                	<h3><span class="right">2013-09-06</span><a href="http://www.slanissue.com/archives/3032">[Alvin]在线教育未来存在机会 </a></h3>
   					<p><span style="color: #ffffff;">我们</span><span style="font-size: medium...</p>                  
                </div>
                                                                <div class="content-middle-bottom">
                     <ul>
    					<li><span class="triangle"></span>2013-09-06</li>
                        <li><a href="http://www.slanissue.com/archives/3077" title="[Donews]贝瓦BEVA入围红鲱鱼亚洲科技100强">[Donews]贝瓦BEVA入围红鲱鱼亚洲科...</a></li>
                    </ul>
                </div>
                                <div class="content-middle-bottom">
                     <ul>
    					<li><span class="triangle"></span>2013-08-23</li>
                        <li><a href="http://www.slanissue.com/archives/2987" title="贝瓦获选2013中国创新产品10强">贝瓦获选2013中国创新产品10强</a></li>
                    </ul>
                </div>
                                <div class="content-middle-bottom">
                     <ul>
    					<li><span class="triangle"></span>2013-07-26</li>
                        <li><a href="http://www.slanissue.com/archives/3018" title="[Donews]百度移动测试中心助力贝瓦移动应用布局">[Donews]百度移动测试中心助力贝瓦移动...</a></li>
                    </ul>
                </div>
                            	<div class="understand2"><a href="http://www.slanissue.com/news-opinions/events" >了解更多>></a></div>
    		</div>
		</div>
		<div class="home-session-right">
            <h2 class="sub-nav-three"></h2>
            <div class="content-right">
            	<div class="content-right-top">
            		<div class="content-right-top1">
            			<div class="content-right-top2">
                            <div class="content-right-top3">
                            <img src="http://www.slanissue.com/wp-content/themes/slanissue/images/logo/ilogo-beva.png" />
                            </div>
                		</div>
                		<div class="content-right-top2">
							<div class="content-right-top3">
                            <img src="http://www.slanissue.com/wp-content/themes/slanissue/images/logo/ilogo-taoqibao.png" />
                			</div>
                		</div>
                		<div class="content-right-top2">
							<div class="content-right-top3">
                            <img src="http://www.slanissue.com/wp-content/themes/slanissue/images/logo/ilogo-papa.jpg" />
                			</div>
                		</div>
                		<div class="content-right-top2">
							<div class="content-right-top3">
                            <img src="http://www.slanissue.com/wp-content/themes/slanissue/images/logo/ilogo-tingting.png" />
                			</div>
                		</div>
                	</div>
                	<div><div class="understand3"><a href="http://www.slanissue.com/archives/1340" >了解更多>></a></div></div>
            	</div>
    			<div class="content-right-bottom">
                	<div class="content-right-bottom1">
                        <a href="http://www.beva.com/home/family" target="_blank"><img src="http://www.slanissue.com/wp-content/themes/slanissue/images/logo/ilogo-beva-all.jpg" /></a>
                    </div>
                	<div class="content-right-bottom1 content-right-bottom2">
                        <a href="http://www.slanissue.com/archives/1357"><img src="http://www.slanissue.com/wp-content/themes/slanissue/images/logo/ilogo-research.jpg" /></a>
                    </div>
            	</div>
		 	</div>
        </div>
	</div>
    
		<div id="footer">
    		<div class="footer-main">
    			<div class="footer-top">
					<a href="http://www.beva.com/about/parents.html" target="_blank">父母须知</a>&nbsp|
					<a href="http://www.beva.com/about/security.html" target="_blank">儿童安全上网</a>&nbsp|
					<a href="http://www.slanissue.com/archives/1296">联系我们</a>&nbsp|
					<a href="http://www.beva.com/home/suggest" target="_blank">客服服务</a>
        		</div>	
				<div class="footer-bottom">&copy;2010 北京芝兰玉树科技有限公司 &nbsp 京ICP证10051322号-1&nbsp 京公海网安备110108000750号</div>
       		</div>
		</div>
</body>
</html>