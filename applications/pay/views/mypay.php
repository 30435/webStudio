<?php echo $this->load->view('header_cfront'); ?>

<link href="http://static.ci.com/common/calendar/jscal2.css" rel="stylesheet" type="text/css" />
<link href="http://static.ci.com/common/calendar/border-radius.css" rel="stylesheet" type="text/css" />
<link href="http://static.ci.com/common/calendar/win2k.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="http://static.ci.com/common/calendar/calendar.js"></script>
<script type="text/javascript" src="http://static.ci.com/common/calendar/lang/en.js"></script>
<script type="text/javascript" src="http://static.ci.com/common/script/dialog.js" language="javascript"></script>

<div class="my_main account_main">
	<?php echo $this->load->view('mypay_left'); ?>
	<div class="main_cont">
		<div class="main_title"><p><span>我的充值消费记录</span></p></div>
        <form method="get" id="searchForm" action="" id="dealDate" style="margin:20px auto;">
			<div class="search_data cf">
				<span>查询日期</span>
				<div class="ui_date"><input type="text" readonly="" value="" id="start_time" name="start_time" autocomplete="off"  class="txt hasDatepicker"><i class="ico ico_calendar_16"></i></div>
				<span>至</span>
				<div class="ui_date"><input type="text" readonly="" value="" id="end_time" name="end_time" autocomplete="off" class="txt hasDatepicker"><i class="ico ico_calendar_16"></i></div>
				<a class="ui_btn_small" id="searchDeal" href="javascript: $('#searchForm').submit(); void(0);"><span>查询</span></a>
			 </div>
		</form>
        <div class="ui_table_wrap">
			<table border="1" class="ui_table">
				<thead>
					<tr>
						<th width="20%">日期</th>
						<th width="15%">消费米米号</th>
						<th width="20%">充值消费（米币）</th>
						<th width="25%">明细</th>
						<th width="10%">数量</th>
						<th width="10%">帐户余额</th>
					</tr>
				</thead>
				<tbody>
				<?php if (empty($this->infos)) { ?>
					<tr><td colspan="6">暂无充值记录</td></tr>
				<?php } else { foreach ($this->infos as $info) { ?>
					<tr>
						<td width="20%"><?php echo date('Y-m-d H:i:s', $info['pay_time']); ?></td>
						<td width="15%"><?php echo $info['orderid']; ?></td>
						<td width="20%"><?php echo $info['money']; ?>（米币）</td>
						<td width="25%"><?php echo $info['username']; ?></td>
						<td width="10%"><?php echo $info['username']; ?></td>
						<td width="10%"><?php echo $info['username']; ?></td>
					</tr>
				<?php } } ?>
				</tbody>
			</table>
			<div style="text-align:center;margin-top:10px;font-size:14px"><?php echo $this->pageStr; ?></div>
		</div>      
	</div>
</div>
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
</script>
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
<?php echo $this->load->view('footer_cfront'); ?>

