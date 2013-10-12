<?php echo $this->load->view('header'); ?>
<div class="main">
	<div class="main_nav">
    	<ul>
        	<li><a href="#">实体卡</a></li><li><a href="#">固体电话</a></li><li><a href="#">手机充值卡</a></li>
        </ul>
    </div>
    <div class="main_con">
    	<div class="main_con_tent">
        	<p class="cz_p"><span><a href="#">卡内余额？</a></span>你正在使用 <b>实体卡</b> 充值</p>
			<ul>
            	<li><span>充值号：</span><input type="text" class="c_ipu"/></li>
            	<li><span>确认充值号：</span><input type="text" class="c_ipu"/></li>
                <li><span>充值卡号：</span><input type="text" class="c_ipu"/></li>
                <li><span>充值卡密码：</span><input type="text" class="c_ipu"/></li>
                <li><span>充值的金钱：</span><input type="radio" />仅充<input type="text" class="rmb"/>人民币</li>
                 <li><span>验校码：</span><input type="text" class="yxm"/></li>
                 <li><span></span><input type="button" value="确认充值" class="cz_but"/></li> 
            </ul>
            <p class="cz_wt"><b>友情提示：</b>买不到米米卡就请拨打<span>  固定电话</span>  来充值吧！一定要获得父母的同意哦~。</p>
            <p class="cz_wt"><b>常见问题：</b>1、在哪儿可以买到实体卡？     2、什么是实体卡？</p>
         </div>
        
    </div>
</div>
<?php echo $this->load->view('footer'); ?>