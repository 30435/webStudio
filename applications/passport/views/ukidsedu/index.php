<?php echo $this->load->view($this->prefix . '/header'); ?>
<div id="memberArea">
	<div class="col-left col-1 left-memu">
		<h5 class="title"><img src="<?php echo $this->staticUrl; ?>kidsedu/images/icon/m_1.png" width="15" height="15" />机构管理</h5>
		<ul>
			<li ><a href="<?php echo $this->appInfos['kidsedu']['url']; ?>agency/add/"><img src="<?php echo $this->staticUrl; ?>kidsedu/images/icon/m_2.png" width="14" height="15" />申请机构入驻</a></li>
			<li ><a href="<?php echo $this->appInfos['kidsedu']['url']; ?>agency/manage/"><img src="<?php echo $this->staticUrl; ?>kidsedu/images/icon/m_3.png" width="14" height="16" />管理机构</a></li>
		</ul>
		<h6 class="title">机构资源管理</h6>
		<ul>
			<li ><a href="<?php echo $this->appInfos['kidsedu']['url']; ?>"><img src="<?php echo $this->staticUrl; ?>kidsedu/images/icon/m_2.png" width="14" height="15" />添加课程</a></li>
			<li ><a href="<?php echo $this->appInfos['kidsedu']['url']; ?>"><img src="<?php echo $this->staticUrl; ?>kidsedu/images/icon/m_3.png" width="14" height="16" />管理课程</a></li>
			<li ><a href="<?php echo $this->appInfos['kidsedu']['url']; ?>"><img src="<?php echo $this->staticUrl; ?>kidsedu/images/icon/m_2.png" width="14" height="15" />添加加盟学校</a></li>
			<li ><a href="<?php echo $this->appInfos['kidsedu']['url']; ?>"><img src="<?php echo $this->staticUrl; ?>kidsedu/images/icon/m_3.png" width="14" height="16" />管理加盟学校</a></li>
		</ul>
        <h6 class="title">短消息</h6>
        <ul>
            <li><a href="<?php echo $this->appInfos['kidsedu']['url']; ?>"><img src="<?php echo $this->staticUrl; ?>kidsedu/images/icon/m_9.png" width="16" height="14" /> 发送短消息</a></li>
            <li><a href="<?php echo $this->appInfos['kidsedu']['url']; ?>"><img src="<?php echo $this->staticUrl; ?>kidsedu/images/icon/m_11.png" width="16" height="16" /> 收件箱</a></li>
            <li><a href="<?php echo $this->appInfos['kidsedu']['url']; ?>"><img src="<?php echo $this->staticUrl; ?>kidsedu/images/icon/m_10.png" width="16" height="16" /> 发件箱</a></li>
		    <li><a href="<?php echo $this->appInfos['kidsedu']['url']; ?>"><img src="<?php echo $this->staticUrl; ?>kidsedu/images/icon/lightbulb.png" width="16" height="16" /> 系统消息</a></li>
        </ul>
        <span class="o1"></span><span class="o2"></span><span class="o3"></span><span class="o4"></span>
    </div>
	<div class="col-auto">
		<div class="col-auto">
            <div class="col-1 ">
            	<h5 class="title">收藏夹</h5>
            	<div class="content"><ul class="title-list"></ul></div>
            	<span class="o1"></span><span class="o2"></span><span class="o3"></span><span class="o4"></span>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>
<?php echo $this->load->view($this->prefix . '/footer'); ?>