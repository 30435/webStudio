<?php echo $this->load->view($this->templatePre . 'header_depart'); ?>
   
<div id="about_as-main">  
    <div class="list about_as-list">    		
        <ul>
		<?php
		if (in_array($this->currentCategoryInfo['id'], array_keys($this->middleCats))) {
			foreach ($this->currentSubCategoryInfos as $subCategory) {
				$currentSelected = $subCategory['id'] == $this->currentCategoryInfo['id'] ? ' class="selected"' : '';
				echo '<li><a href="' . $subCategory['url'] . '" title="' . $subCategory['catname'] . '"' . $currentSelected . '>' . $subCategory['catname'] . '</a></li>';
			}
		} else {
			foreach ($this->categoryInfos as $subCategory) {
				if ($subCategory['parentid'] != $this->currentCategoryInfo['parentid']) {
					continue;
				}
				$currentSelected = $subCategory['id'] == $this->currentCategoryInfo['id'] ? ' class="selected"' : '';
				echo '<li><a href="' . $subCategory['url'] . '" title="' . $subCategory['catname'] . '"' . $currentSelected . '>' . $subCategory['catname'] . '</a></li>';
			}
		}
		?>        		                        
        </ul>
    </div>
    <div class="news_views-session-right">
    	<div class="news_views-content">
    		<div class="events_views-content-bottom">
    			<ul>
    									<li><span class="triangle"></span><a href="http://www.slanissue.com/archives/3032">2013-09-06 [Alvin]在线教育未来存在机会</a></li>
										<li><span class="triangle"></span><a href="http://www.slanissue.com/archives/3077"> [Donews]贝瓦BEVA入围红鲱鱼亚洲科技100强</a></li>
										<li><span class="triangle"></span><a href="http://www.slanissue.com/archives/2987">2013-08-23 贝瓦获选2013中国创新产品10强</a></li>
										<li><span class="triangle"></span><a href="http://www.slanissue.com/archives/3018">2013-07-26 [Donews]百度移动测试中心助力贝瓦移动应用布局</a></li>
										<li><span class="triangle"></span><a href="http://www.slanissue.com/archives/2966">2013-06-22 儿童专属早教平板电脑：贝瓦Pad</a></li>
										<li><span class="triangle"></span><a href="http://www.slanissue.com/archives/2975">2013-05-25 4510套贝瓦淘奇包 助力云南2万幼儿成长</a></li>
										<li><span class="triangle"></span><a href="http://www.slanissue.com/archives/2862">2012-12-07 贝瓦入选“创业邦100”榜单</a></li>
										<li><span class="triangle"></span><a href="http://www.slanissue.com/archives/2632">2012-08-03 贝瓦淘奇包首家体验店开业</a></li>
										<li><span class="triangle"></span><a href="http://www.slanissue.com/archives/2446">2012-05-15 贝瓦儿童推出iPad/iPhone版</a></li>
										<li><span class="triangle"></span><a href="http://www.slanissue.com/archives/2332">2012-05-07 为中国儿童成长事业做出更大贡献——芝兰玉树两岁愿望</a></li>
									</ul>
				<div class="nav-pages"><div class='wp-pagenavi'>
<span class='pages'>第1/3页</span><span class='current'>1</span><a href='http://www.slanissue.com/news-opinions/events/page/2' class='page larger'>2</a><a href='http://www.slanissue.com/news-opinions/events/page/3' class='page larger'>3</a><a href="http://www.slanissue.com/news-opinions/events/page/2" class="nextpostslink">下一页</a>
</div></div>
    		</div>
    	</div>
    </div>
   <div class="clear"></div>
</div>
<?php echo $this->load->view($this->templatePre . 'footer_depart'); ?>