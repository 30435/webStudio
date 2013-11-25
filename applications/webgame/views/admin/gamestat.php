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
    <table width="100%" cellspacing="0" class="search-form">
      <tbody>
		<tr>
		<?php
		if ($this->method == 'index') { $i = 1;
			foreach ($this->tableInfos as $keyNavTable => $value) {
				if (in_array($keyNavTable, array('columns', 'online', 'analyze_status', 'nova_behind'))) {
					continue;
				}
				$fontStyle = $keyNavTable == $this->table ? ' style="font-size:18px;color:#009900;"' : '';
				$strPrefix = ($i % 15) == 1 ? '<tr>' : '';
				$strSuffix = ($i % 15) == 0 ? '</tr>' : '';
				echo '<td><a ' . $fontStyle . ' href="' . $this->currentMenu['url'] . '?table=' . $keyNavTable . '">' . $keyNavTable . '</a></td>' . $strSuffix;
				$i++;
			}
			$strSuffix = empty($strSuffix) ? '</tr>' : ''; echo $strSuffix;
		} 
		?>
		</tr>
      </tbody>
    </table>
    
	
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
			查找指定用户：<input type="text" name="guid" value="" />				
			<input type="submit" value="搜索" class="button" name="search">
	      </div>
		  </td>
		<input type="hidden" name="table" value="<?php echo $this->table; ?>">
		</form>
		<?php if ($this->table == 'nova_behind') { ?>
		  <form method="get" id="remainForm" action="" name="searchform">
		  <td>
		  <div class="explain-col">
			查询日期：<input type="text" readonly="" class="date input-text" size="10" value="<?php if (isset($this->remainTime)) echo $this->remainTime; ?>" id="remain_time" name="remain_time">&nbsp;
			<script type="text/javascript">
				Calendar.setup({
				weekNumbers: true,
				inputField : "remain_time",
				trigger    : "remain_time",
				dateFormat: "%Y-%m-%d",
				showTime: false,
				minuteStep: 1,
				onSelect   : function() {this.hide();}
				});
			</script>
			留存类型： 
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
		<?php } ?>
	    </tr>
      </tbody>
    </table>

    <table width="100%" cellspacing="0">
      <thead>
		<tr>
		<?php 
		foreach ($this->tableInfo['fields'] as $keyField => $nameField) {
			$nameField = empty($nameField) ? $keyField : $nameField . ' ( ' . $keyField . ' ) 点击排序 ';
			if (in_array($keyField, $this->orderFields)) {
				$nameField = '<a href="javascript: orderField(\'' . $keyField . '\');void(0);">' . $nameField . '</a>';
			}
			echo '<th>' . $nameField . '</th>'; 
		}
		?>
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