<form method="get" id="extForm" action="" name="extForm">
	<td>
		<div class="explain-col">
		查询日期：<input type="text" readonly="" class="date input-text" size="10" value="<?php if (isset($this->extTime)) echo $this->extTime; ?>" id="extTime" name="extTime">&nbsp;
		<script type="text/javascript">
			Calendar.setup({
			weekNumbers: true,
			inputField : "extTime",
			trigger    : "extTime",
			dateFormat: "%Y-%m-%d",
			showTime: false,
			minuteStep: 1,
			onSelect   : function() {this.hide();}
			});
		</script>

		<?php if(!empty($this->showStr)) { echo $this->showStr; }?>
		</div>
	</td>
	<input type="hidden" name="table" id="currentTable" value="<?php echo $this->table; ?>">
	<input type="hidden" name="isExt" id="isExt" value="yes" />
</form>