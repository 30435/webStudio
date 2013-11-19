<?php echo $this->load->view($this->templatePre . 'header_depart'); ?>
   
<div id="about_as-main">  
    <div class="list about_as-list">    		
        <ul>
		<?php
		if (in_array($this->catid, array_keys($this->middleCats))) {
			foreach ($this->currentSubCategoryInfos as $subCategory) {
				$currentSelected = $subCategory['id'] == $this->catid ? ' class="selected"' : '';
				echo '<li><a href="' . $subCategory['url'] . '" title="' . $subCategory['catname'] . '"' . $currentSelected . '>' . $subCategory['catname'] . '</a></li>';
			}
		} else {
			foreach ($this->categoryInfos as $subCategory) {
				if ($subCategory['parentid'] != $this->currentCategoryInfo['parentid']) {
					continue;
				}
				$currentSelected = $subCategory['id'] == $this->catid ? ' class="selected"' : '';
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
				<?php $page = intval($this->input->get_post('page')); $page = max(1, $page); $where = array('catid' => $this->catid); $newInfos = $controller->_getFrontInfos('webgame', 'new', $page, 12, $where, array(), 'inputtime, url, title', '', 0, true, $this->currentCategoryInfo['url']); ?>
				<?php foreach ($newInfos['infos'] as $newInfo) { ?>
					<li><span class="triangle"></span><a href="<?php echo $newInfo['url']; ?>">?php echo date('Y-m-d', $newInfo['inputtime']); ?> <?php echo $newInfo['title']; ?>"><?php echo $newInfo['title']; ?></a></li>
				<?php } ?>
    			</ul>
				<div class="nav-pages"><div class='wp-pagenavi'><?php echo $controller->pageStr; ?></div></div>
    		</div>
    	</div>
    </div>
   <div class="clear"></div>
</div>
<?php echo $this->load->view($this->templatePre . 'footer_depart'); ?>