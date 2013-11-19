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
    <div class="products-session-right">
        <!--<h3><?php echo $this->currentCategoryInfo['catname']; ?></h3>-->
        <div class="products-content">
			<div id="artCon"><?php $catContent = $controller->currentModel->getInfo(array('catid =' => $this->catid)); if (!empty($catContent)) { echo $catContent['content']; } ?></div>
        </div>
    </div>
    <div class="clear"></div>
</div>
<?php echo $this->load->view($this->templatePre . 'footer_depart'); ?>