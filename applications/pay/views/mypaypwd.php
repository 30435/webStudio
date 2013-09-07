<?php echo $this->load->view('header'); ?>
<div class="container cf">
    <div class="main account_main">
        <div class="main_nav account_nav">
            <ul>
    	        <li class="li_lv_1"><a href="<?php echo $this->baseUrl; ?>index/mypay"><span>我的充值中心</span></a></li>
                <li class="li_lv_1"><a href="<?php echo $this->baseUrl; ?>index/myaccount"><span>交易明细查询</span></a></li>
                <li class="li_lv_1 cur"><a href="<?php echo $this->baseUrl; ?>index/mypaypwd"><span>支付密码管理</span></a></li>
                <li class="li_lv_1"><a href="<?php echo $this->baseUrl; ?>index/mypaymonth"><span>我开通的服务</span></a></li>
            </ul>
        </div>
        <div class="main_cont">
            <div class="main_title"><p><span>米币账户密码设置</span></p></div>
                <div style="margin-top: 45px;" class="form">
                <form onsubmit="return chkForm();" id="baseform" class="baseform" method="post" action="/account/setpwdprocess">
                    <ul class="form_list">
                        <li class="form_list_li">
                            <label class="lbl">请设置你的支付密码：</label>
                            <div class="txt_wrap"><input type="password" value="" name="pay_pwd[pwd]" id="J_pwd" class="txt txt_num txt_error"><div class="txt_tips"><i class="ico ico_error_16"></i><span>密码长度错误</span><i class="txt_tips_r"></i></div></div>
                            <span style="font-size: 12px">密码由6-16个字符组成，可用数字、字母下划线</span>
                            <div class="txt_wrap"><div class="safety safety"><span>安全性：</span><div id="J_safe_level" class="safety_level"><div class="safety_level_inner"></div></div></div></div>
                        </li>
                        <li class="form_list_li">
                            <label class="lbl">确认账户支付密码：</label>
                            <div class="txt_wrap"><input type="password" value="" id="J_pwd_again" name="pay_pwd[pwd_cfm]" class="txt txt_num"></div>
                        </li>
                        <li class="form_list_li"><a class="ui_btn_large_em" id="submit" href="###"><span>确定</span></a></li>
                    </ul>
                </form>
                </div>
                <div class="caption">
                    <h5 class="orange">友情提示：</h5>
                    <p>1. 米币账户支付密码是小朋友使用米币购买淘米服务，游戏道具时所要填写的密码。</p>
                    <p> 2. 米币账户支付密码不同于登录密码哦，它是针对米币账户设置的密码，用于保证你的账户安全。</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $this->load->view('footer'); ?>