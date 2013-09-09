<?php $this->load->view('header_admin') ?>
<div class="table-list pad-lr-10">
  <form method="get" action="" name="searchform">
    <input type="hidden" name="m" value="member">
    <input type="hidden" name="c" value="member">
    <input type="hidden" name="a" value="search">
    <input type="hidden" name="menuid" value="879">
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
			<select name="userid"><option selected="" value="0">选择游戏</option><?php echo $this->selectWebgameCode; ?></select>							
			<select name="roleid"><option selected="" value="0">选择游戏服务器</option><?php echo $this->selectServer; ?></select>		
			<input type="submit" value="搜索" class="button" name="search">
	      </div>
		  </td>
	    </tr>
      </tbody>
    </table>
    <input type="hidden" name="pc_hash" value="oP31Gm">
	</form>
    <table width="100%" cellspacing="0">
      <thead>
		<tr>
		  <th><?php echo $this->fieldInfos['username']['name']; ?> ( <?php echo $this->fieldInfos['userid']['name']; ?> )</th>
		  <th align="center"><?php echo $this->fieldInfos['webgame_code']['name']; ?></th>
		  <th align="center"><?php echo $this->fieldInfos['server_id']['name']; ?> </th>
		  <th align="center"><?php echo $this->fieldInfos['play_num']['name']; ?></th>
		  <th align="center"><?php echo $this->fieldInfos['pay_num']['name']; ?></th>
		  <th align="center"><?php echo $this->fieldInfos['pay_money']['name']; ?></th>
		  <th align="center"><?php echo $this->fieldInfos['lasttime_login']['name']; ?></th>
		  <th align="center"><?php echo $this->fieldInfos['lasttime_pay']['name']; ?></th>
		  <th align="center"><?php echo $this->fieldInfos['lasttime']['name']; ?></th>
		  <th  class="text-c"><?php echo $this->lang->line('admin_operation'); ?></th>
		</tr>
      </thead>
      <tbody>
	  <?php if (is_array($this->infos) && !empty($this->infos)) { foreach ($this->infos as $info) { ?>
        <tr>
          <td align="center"><?php echo $info['username']; ?>( <?php echo $info['userid']; ?> )</td>
		  <td align="center"><?php echo $info['webgame_code']; ?></td>
		  <td align="center"><?php echo $info['server_id']; ?></td>
		  <td align="center"><?php echo $info['play_num']; ?></td>
		  <td align="center"><?php echo $info['pay_num']; ?></td>
		  <td align="center"><?php echo $info['pay_money']; ?></td>
		  <td align="center"><?php echo $info['lasttime_login']; ?></td>
		  <td align="center"><?php echo $info['lasttime_pay']; ?></td>
		  <td align="center"><?php echo $info['lasttime']; ?></td>
          <td class="text-c">
		  	<?php foreach ($this->operationMenus as $operationMenu) { if (!in_array($operationMenu, array_keys($this->appMenus))) continue; $menu = $this->appMenus[$operationMenu]; $url = $menu['url'] . '?id=' . $info['id'];?>
    		<a href='javascript: showLog("<?php echo $url; ?>"); void(0);'><?php echo $menu['name']; ?></a> |
    		<?php } ?>
		  </td>
        </tr>
      <?php } } ?>
      </tbody>
    </table>
  <div id="pages"> <?php echo $this->pageStr; ?></div>
</div>
</body>
</html>