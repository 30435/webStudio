<form method="get" id="extForm" action="" name="extForm">
	<td>
		<div class="explain-col">
		查询日期：<input type="text" readonly="" class="date input-text" size="10" value="<?php if (isset($this->extTime)) echo $this->extTime; ?>" id="ext_time" name="ext_time">&nbsp;
		<script type="text/javascript">
			Calendar.setup({
			weekNumbers: true,
			inputField : "ext_time",
			trigger    : "ext_time",
			dateFormat: "%Y-%m-%d",
			showTime: false,
			minuteStep: 1,
			onSelect   : function() {this.hide();}
			});
		</script>
		<a href="javascript: $('#extType').val(1); $('#extForm').submit(); void(0);">宠物捕捉信息</a>

		检索指定宠物：<input type="text" name="id" value="" />
		<a href="javascript: $('#extType').val(2); $('#extForm').submit(); void(0);">指定宠物捕捉信息</a>
		</div>
	</td>
	<input type="hidden" name="table" value="<?php echo $this->table; ?>">
	<input type="hidden" name="extType" value="" />
	<input type="hidden" name="isExt" id="isExt" value="yes" />
</form>