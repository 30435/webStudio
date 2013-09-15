<?php echo $this->load->view($this->prefix . '/header'); ?>
<div id="memberArea">
<div class="col-left col-1 left-memu">
        	<h5 class="title"><img src="http://localhost/phpcms/statics/images/icon/m_1.png" width="15" height="15" /> 管理中心</h5>
            <ul>
       	    <li ><a href="index.php?m=member&c=content&a=publish"><img src="http://localhost/phpcms/statics/images/icon/m_2.png" width="14" height="15" /> 在线投稿</a></li>
            <li ><a href="index.php?m=member&c=content&a=published"><img src="http://localhost/phpcms/statics/images/icon/m_3.png" width="14" height="16" /> 已发布稿件</a></li>
            </ul>
            <h6 class="title">财务管理</h6>
            <ul>
            	<li><a href="index.php?m=pay&c=deposit&a=pay"><img src="http://localhost/phpcms/statics/images/icon/m_4.png" width="15" height="16" /> 在线充值</a></li>
                <li><a href="index.php?m=pay&c=deposit&a=init"><img src="http://localhost/phpcms/statics/images/icon/m_8.png" width="16" height="16" /> 支付记录</a></li>
                <li><a href="index.php?m=pay&c=spend_list&a=init"><img src="http://localhost/phpcms/statics/images/icon/table-information.png" width="16" height="16" /> 消费记录</a></li>
				<li><a href="index.php?m=member&c=index&a=change_credit"><img src="http://localhost/phpcms/statics/images/icon/coins_add.png" width="16" height="16" /> 积分购买/兑换</a></li>
      </ul>
            <h6 class="title">短消息</h6>
          <ul>
           	  <li><a href="index.php?m=message&c=index&a=send"><img src="http://localhost/phpcms/statics/images/icon/m_9.png" width="16" height="14" /> 发送短消息</a></li>
           	  <li><a href="index.php?m=message&c=index&a=inbox"><img src="http://localhost/phpcms/statics/images/icon/m_11.png" width="16" height="16" /> 收件箱</a></li>
              <li><a href="index.php?m=message&c=index&a=outbox"><img src="http://localhost/phpcms/statics/images/icon/m_10.png" width="16" height="16" /> 发件箱</a></li>
			   <li><a href="index.php?m=message&c=index&a=group"><img src="http://localhost/phpcms/statics/images/icon/lightbulb.png" width="16" height="16" /> 系统消息</a></li>
          </ul>
      <span class="o1"></span><span class="o2"></span><span class="o3"></span><span class="o4"></span>
</div>    <div class="col-auto">
				    	<div class="col-auto">
        	<div class="col-1 member-info">
            	<div class="content">
                    <div class="col-left himg">
					<a title="修改头像" href="index.php?m=member&c=index&a=account_manage_avatar&t=1"><img src="http://localhost/phpcms/phpsso_server/uploadfile/avatar/1/1/1/90x90.jpg" width="60" height="60" onerror="this.src='http://localhost/phpcms/phpsso_server/statics/images/member/nophoto.gif'"></a>
					</div>
                  <div class="col-auto">
                   	<h5>										<font color="">
					 aaaaaa 					</font>
					（admin@admin.com）					</h5>
                    <p class="blue">
					  会员组：新手上路，
                      账户余额：<font style="color:#F00; font-size:22px;font-family:Georgia,Arial; font-weight:700">0.00</font> 元，
					积分点数：<font style="color:#F00; font-size:12px;font-family:Georgia,Arial; font-weight:700">0</font> 点                       </p>
                    </div>
           	  </div>

            	<span class="o1"></span><span class="o2"></span><span class="o3"></span><span class="o4"></span>
            </div>
            <div class="bk10"></div>

            <div class="col-1 ">
            	<h5 class="title">收藏夹</h5>
            	<div class="content">
						
                    <ul class="title-list">
					                    </ul>
										            	</div>
            	<span class="o1"></span><span class="o2"></span><span class="o3"></span><span class="o4"></span>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>
<?php echo $this->load->view($this->prefix . '/footer'); ?>