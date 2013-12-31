<form method="get" id="extForm" action="" name="extForm">
	<td>
		<div class="explain-col">
		<input type="text" readonly="" class="date input-text" value="<?php if (isset($this->extTime)) echo $this->extTime; ?>" id="extTime" name="extTime">&nbsp;
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
		<a href="javascript: $('#extType').val(1); showInfo1(); void(0);">指定某天活跃信息</a> |

		<select name="selectHour" id="selectHour">
		<?php for ($i = 0; $i < 24; $i++) { echo '<option value="' . $i . '">' . $i . '</option>'; } ?>
		</select>	
		<a href="javascript: $('#extType').val(2); showInfo1(); void(0);">指定小时活跃信息</a> |

		起始时间：<input type="text" readonly="" class="date input-text" value="<?php if (isset($this->startTime)) echo $this->startTime; ?>" id="startTime" name="startTime">&nbsp;
		<script type="text/javascript">
			Calendar.setup({
			weekNumbers: true,
			inputField : "startTime",
			trigger    : "startTime",
			dateFormat: "%Y-%m-%d %H:%M",
			showTime: true,
			minuteStep: 1,
			onSelect   : function() {this.hide();}
			});
		</script>
		-结束时间<input type="text" readonly="" class="date input-text" value="<?php if (isset($this->endTime)) echo $this->endTime; ?>" id="endTime" name="endTime">&nbsp;
		<script type="text/javascript">
			Calendar.setup({
			weekNumbers: true,
			inputField : "endTime",
			trigger    : "endTime",
			dateFormat: "%Y-%m-%d %H:%M",
			showTime: true,
			minuteStep: 1,
			onSelect   : function() {this.hide();}
			});
		</script>
		<a href="javascript: $('#extType').val(3); showInfo1(); void(0);">指定时间段活跃信息</a> |

		</div>
	</td>
	<input type="hidden" name="extType" id="extType" value="" />
	<input type="hidden" name="table" id="currentTable" value="<?php echo $this->table; ?>">
	<input type="hidden" name="isExt" id="isExt" value="yes" />
</form>
<script type="text/javascript">
<!--
function showDialog1(url)
{
	window.top.art.dialog({id:'show'}).close();
	window.top.art.dialog({title:'',id:'show',iframe: url,width:'1200',height:'500'}, function(){
		var d = window.top.art.dialog({id:'show'}).data.iframe;return false;
	}, function(){window.top.art.dialog({id:'show'}).close()});
}

function showInfo1()
{
	var url = "<?php echo $this->currentMenu['url']; ?>"; 
	var currentTable = $('#currentTable').val();
	var extType = $('#extType').val();
	var isExt = $('#isExt').val();
	var selectHour = $('#selectHour').val();
	var extTime = $('#extTime').val();
	var startTime2 = $('#startTime').val();
	var entTime = $('#endTime').val();

	url = url + '?table=' + currentTable + '&extType=' + extType + '&isExt=' + isExt + '&extTime=' + extTime + '&selectHour=' + selectHour + '&startTime=' + startTime + '&endTime=' + endTime; 
	showDialog1(url);
}
//-->
</script>
