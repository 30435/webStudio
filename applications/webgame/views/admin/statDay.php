<?php $this->load->view('header_admin') ?>
<script type="text/javascript" src="<?php echo $this->staticUrl; ?>common/script/jquery.cookie.js"></script>
<script type='text/javascript'>
function orderField(field)
{
	var cookieVar = field + '_cookie';
	var cookieValue = $.cookie(cookieVar);
	var orderType = cookieValue == 'desc' ? 'asc' : 'desc';
	var extUrl = 'orderField=' + field + '&orderType=' + orderType;
	var extUrl1 = 'orderField=' + field + '&orderType=' + cookieValue;
	
	var currentUrl = window.location.href;
	currentUrl = currentUrl.replace(extUrl, ""); 
	currentUrl = currentUrl.replace(extUrl1, ""); 
	var haveMark = currentUrl.indexOf('?');
	
	var extMark = haveMark > 0 ? '&' : '?';
	var newUrl = currentUrl + extMark + extUrl;
	newUrl = newUrl.replace('?&', '?');
	newUrl = newUrl.replace('&&', '&');
	$.cookie(cookieVar, orderType);
	window.location.href = newUrl;
}
</script>
<div class="table-list pad-lr-10">
   
<?php if (isset($this->showDetail)) { ?>
	<h3><?php echo $this->currentInfo['insert_date']; ?> 信息汇总</h3>
    <table width="100%" cellspacing="0">
      <tbody>
		<?php 
		$i = 0;
		foreach ($this->tableInfo['fields'] as $keyField => $nameField) {
			if ($keyField == 'id') {
				continue;
			}
			
			$nameField = empty($nameField) ? $keyField : $nameField;
			$prefix = $i % 4 == 0 ? '<tr>' : '';
			echo $prefix . '<th>' . $nameField . '</th>';
			echo '<td align="center">' . $this->currentInfo[$keyField] . '</td>';
			$suffix = $i % 4 == 3 ? '</tr>' : '';
			echo $suffix;
			$i++;
		}
		$tail = $i % 4 != 3 ? '</tr>' : '';
		echo $tail;
		?>
      </tbody>
    </table>
<?php } else { ?>
    <table width="100%" cellspacing="0" class="search-form">
      <tbody>
		<tr>
		<form method="get" action="" name="searchform">
		  <td>
		  <div class="explain-col">
			操作时间：<input type="text" readonly="" class="date input-text" size="10" value="" id="start_time" name="start_time">&nbsp;
			<script type="text/javascript">
				Calendar.setup({
				weekNumbers: true,
				inputField : "start_time",
				trigger    : "start_time",
				dateFormat: "%Y-%m-%d",
				showTime: false,
				minuteStep: 1,
				onSelect   : function() {this.hide();}
				});
			</script>-<input type="text" readonly="" class="date input-text" size="10" value="" id="end_time" name="end_time">&nbsp;
			<script type="text/javascript">
				Calendar.setup({
				weekNumbers: true,
				inputField : "end_time",
				trigger    : "end_time",
				dateFormat: "%Y-%m-%d",
				showTime: false,
				minuteStep: 1,
				onSelect   : function() {this.hide();}
				});
			</script>			
			周信息：<select name="week" id="week">
				<option value=''></option>
				<?php foreach ($this->weekInfos as $weekKey => $weekValue) { echo '<option value="' . $weekKey . '">' . $weekValue . '</option>'; } ?>
			</select>
			<input type="submit" value="搜索" class="button" name="search">
	      </div>
		  </td>
		<input type="hidden" name="table" value="<?php echo $this->table; ?>">
		</form>
		<?php if (!empty($this->tableExt)) { echo $this->load->view('admin/table/' . $this->table); } ?>
	    </tr>
      </tbody>
    </table>

    <table width="100%" cellspacing="0" style="display:none">
      <thead>
		<tr>
		<?php 
		foreach ($this->tableInfo['fields'] as $keyField => $nameField) {
			$nameField = empty($nameField) ? $keyField : $nameField;
			if (in_array($keyField, $this->orderFields)) {
				$nameField = '<a style="color:#009900;" href="javascript: orderField(\'' . $keyField . '\');void(0);">' . $nameField . '</a>';
			}
			echo '<th>' . $nameField . '</th>'; 
		}
		?>
		</tr>
      </thead>
      <tbody>
	  <?php if (is_array($this->infos) && !empty($this->infos)) { foreach ($this->infos as $info) { ?>
        <tr><a href="javascript: showInfo(); void(0);">
		<?php foreach ($this->tableInfo['fields'] as $keyField => $nameField) { echo '<td align="center">' . $info[$keyField] . '</td>'; } ?>
        </a></tr>
      <?php } } ?>
      </tbody>
    </table>


    <table width="100%" cellspacing="0">
      <tbody>
		<?php 
		foreach ($this->tableInfo['fields'] as $keyField => $nameField) {
			if ($keyField == 'id') {
				continue;
			}
			$nameField = empty($nameField) ? $keyField : $nameField;
			if (in_array($keyField, $this->orderFields)) {
				$nameField = '<a href="javascript: orderField(\'' . $keyField . '\');void(0);">' . $nameField . '</a>';
			}
			echo '<tr><th>' . $nameField . '</th>';

		    if (is_array($this->infos) && !empty($this->infos)) { 
				foreach ($this->infos as $info) {
					$value = $keyField == 'insert_date' ? '<a style="color:#009900;" href="javascript: showDetail(\'' .  $info['id'] . '\');void(0);">' . $info[$keyField] . '</a>' : $info[$keyField];
					echo '<td align="center">' . $value . '</td>'; 
				}
			}
			echo '</tr>';
		}
		?>
      </tbody>
    </table>
  <div id="pages"> <?php echo $this->pageStr; ?></div>
<?php } ?>
</div>

<script type="text/javascript">
<!--
document.domain='<?php echo $this->frontDomain; ?>';
function showDialog(url)
{
	window.top.art.dialog({id:'show'}).close();
	window.top.art.dialog({title:'',id:'show',iframe: url,width:'400',height:'200'}, function(){
		var d = window.top.art.dialog({id:'show'}).data.iframe;return false;
	}, function(){window.top.art.dialog({id:'show'}).close()});
}

function showInfo()
{
	var url = "<?php echo $this->currentMenu['url']; ?>"; 
	var currentTable = $('#currentTable').val();
	var extType = $('#extType').val();
	var isExt = $('#isExt').val();
	var id = $('#id').val();
	var extTime = $('#extTime').val();

	url = url + '?table=' + currentTable + '&extType=' + extType + '&isExt=' + isExt + '&extTime=' + extTime + '&id=' + id;
	showDialog(url);
}

function showDetail(id)
{
	var url = "<?php echo $this->currentMenu['url']; ?>"; 

	url = url + '?id=' + id; 
	window.top.art.dialog({id:'show'}).close();
	window.top.art.dialog({title:id + ' 信息汇总',id:'show',iframe: url,width:'900',height:'500'}, function(){
		var d = window.top.art.dialog({id:'show'}).data.iframe;return false;
	}, function(){window.top.art.dialog({id:'show'}).close()});
}
//-->
</script>
</body>
</html>
