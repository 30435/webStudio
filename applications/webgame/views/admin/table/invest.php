<?php 
$this->showStr = <<<EXTSHOWSTR
<a href="javascript: $('#extType').val(1); showInfo(); void(0);">美食活动信息</a>

<a href="javascript: $('#extType').val(2); showInfo(); void(0);">美食活动次数信息</a>
</div>
<input type="hidden" name="extType" id="extType" value="" />
EXTSHOWSTR;
$this->load->view('admin/table/baseTable'); 
?>