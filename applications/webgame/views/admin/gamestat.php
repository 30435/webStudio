<?php $this->load->view('header_admin') ?>
<div class="table-list pad-lr-10">
    <table width="100%" cellspacing="0" class="search-form">
      <tbody>
		<tr>
		<?php
		if ($this->method == 'index') {
			foreach ($this->tableInfos as $keyNavTable => $value) {
				$fontStyle = $keyNavTable == $this->table ? ' style="font-size:18px;color:#009900;"' : '';
				echo '<td><a ' . $fontStyle . ' href="' . $this->currentMenu['url'] . '?table=' . $keyNavTable . '">' . $keyNavTable . '</a></td>'; 
			} 
		} else {
			echo '<td style="font-size:18px;color:#009900;">' . $this->table . '</td>';
		}
		?>
		</tr>
      </tbody>
    </table>
  <form method="get" action="" name="searchform">
    <table width="100%" cellspacing="0" class="search-form">
      <tbody>
		<tr>
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
			查找指定用户：<input type="text" name="guid" value="" />				
			<input type="submit" value="搜索" class="button" name="search">
	      </div>
		  </td>
	    </tr>
      </tbody>
    </table>
    <input type="hidden" name="table" value="<?php echo $this->table; ?>">
	</form>
    <table width="100%" cellspacing="0">
      <thead>
		<tr>
		<?php foreach ($this->tableInfo['fields'] as $keyField => $nameField) { $nameField = empty($nameField) ? $keyField : $nameField; echo '<th>' . $nameField . '</th>'; } ?>
		</tr>
      </thead>
      <tbody>
	  <?php if (is_array($this->infos) && !empty($this->infos)) { foreach ($this->infos as $info) { ?>
        <tr>
		<?php foreach ($this->tableInfo['fields'] as $keyField => $nameField) { echo '<td align="center">' . $info[$keyField] . '</td>'; } ?>
        </tr>
      <?php } } ?>
      </tbody>
    </table>
  <div id="pages"> <?php echo $this->pageStr; ?></div>
</div>

<script type="text/javascript">
<!--
document.domain='<?php echo $this->frontDomain; ?>';
function showLog(url) {
	window.top.art.dialog({id:'show'}).close();
	window.top.art.dialog({title:'操作详情',id:'show',iframe: url,width:'700',height:'500'}, function(){
		var d = window.top.art.dialog({id:'show'}).data.iframe;return false;
	}, function(){window.top.art.dialog({id:'show'}).close()});
}
//-->
</script>
</body>
</html>