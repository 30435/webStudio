<?php 
$this->showStr = <<<EXTSHOWSTR
<a href="javascript: $('#extType').val(1); showInfo(); void(0);">投资信息</a>

<a href="javascript: $('#extType').val(2); showInfo(); void(0);">投资次数信息</a>
</div>
<input type="hidden" name="extType" id="extType" value="" />
EXTSHOWSTR;
$this->load->view('admin/table/baseTable'); 
?>