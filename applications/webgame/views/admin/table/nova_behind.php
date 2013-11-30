<form method="get" id="remainForm" action="" name="searchform">
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
			<a href="javascript: showInfo(); void(0);">留存信息</a>



			|  留存用户列表： 
			<?php
			foreach (array(1, 3, 7) as $remainType) {
				$classStr = ($remainType == $this->remainType) ? ' style="font-size:18px;color:#009900;"' : '';
				$link = 'href="javascript: $(\'#remainType\').val(' . $remainType . '); $(\'#isRemain\').val(\'yes\'); $(\'#remainForm\').submit(); void(0);"';
				echo '<a ' . $classStr . ' ' . $link . '>' . $remainType . ' 日留存</a>  ';
			}
			?>

		</div>
	</td>
	<input type="hidden" name="table" value="<?php echo $this->table; ?>">
	<input type="hidden" name="isRemain" id="isRemain" value="<?php echo $this->isRemain; ?>">
	<input type="hidden" name="remainType" id="remainType" value="">
</form>