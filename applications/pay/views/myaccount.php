<?php echo $this->load->view('header'); ?>
<div class="container cf">
    <div class="main account_main">
        <div class="main_nav account_nav">
            <ul>
    	        <li class="li_lv_1"><a href="<?php echo $this->baseUrl; ?>index/mypay"><span>我的充值中心</span></a></li>
                <li class="li_lv_1 cur"><a href="<?php echo $this->baseUrl; ?>index/myaccount"><span>交易明细查询</span></a></li>
                <li class="li_lv_1"><a href="<?php echo $this->baseUrl; ?>index/mypaypwd"><span>支付密码管理</span></a></li>
                <li class="li_lv_1"><a href="<?php echo $this->baseUrl; ?>index/mypaymonth"><span>我开通的服务</span></a></li>
            </ul>
        </div>


        <div class="main_cont">
            <div class="main_title"><p><span>我的充值消费记录</span></p></div>
            <form method="post" action="/account/dealsearchprocess" id="dealDate" style="margin:20px auto;">
                <input type="hidden" value="4" id="is_query" name="is_query">
                <input type="hidden" value="4" id="time_quantum" name="time_quantum">
                <div class="search_data cf">
					<span>查询日期</span>
					<div class="ui_date"><input type="text" id="start_date" value="2013-08-05" autocomplete="off" name="start_date" class="txt hasDatepicker"><i class="ico ico_calendar_16"></i></div>
					<span>至</span>
					<div class="ui_date"><input type="text" id="end_date" value="2013-09-05" autocomplete="off" name="end_date" class="txt hasDatepicker"><i class="ico ico_calendar_16"></i></div>
					<a class="ui_btn_small" id="searchDeal" href="javascript:"><span>查询</span></a>
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
                        <tr><td colspan="6">暂无充值记录</td></tr>
                    </tbody>
                </table>
                <div style="text-align:center;margin-top:10px;font-size:14px">当前 1/0  首页 上一页 下一页 尾页 </div>
            </div>      
        </div>
    </div>
</div>
<?php echo $this->load->view('footer'); ?>