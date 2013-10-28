<?php echo $this->load->view($this->prefix . '/header'); ?>
<div class="min-body">
   <div class="min-content back">
<form name="form1" enctype="application/x-www-form-urlencoded" method="post" action="/forget/findType" id="form1" autocomplete="off">
   <div class="reg-box">
		<div class="reg-top">
		    <span class="fleft fb">请填写需要找回密码的米米号信息</span>
	    </div>
       <div id="J_error_pwd" style="margin-left:118px;" class="comm-error ps-error"><span></span></div>
       <div class="reg-row">
            <label class="label">请选择密码类别：</label>
            <div class="reg-radio">
               <div style="font-size: 14px;margin-top:15px;_margin-top:7px;" class="raido">
	               <input type="radio" value="0" checked="checked" id="choose_0" name="choose">
	               <span>找回帐号的登录密码</span>
               </div>
               <div style="font-size: 14px;margin-top:10px;_margin-top:7px;" class="radio">
	               <input type="radio" value="1" id="choose_1" name="choose">
	               <span>找回帐号的支付密码</span>
	           </div>
            </div>
       </div>
       <div id="for_uid" class="comm-error ps-error" style="visibility: hidden; display: none;"><span></span></div>
       <div class="reg-row">
            <label class="label">帐号：</label>
            <div class="reg-div">
                <span id="J_mimi_tip" class="reg-span">手机号/自定义帐号/邮箱/米米号</span>
                <input type="text" name="uid" id="J_mimi_id" class="reg-input">
            </div>
       </div>
       <div class="a-botton" id="J_submit">
             <span class="f14">确定</span>
       </div>
    	</div>
    </form></div>
</div>

<div class="min-body">
   <div class="min-content back">
       <div class="min-head">
         <div class="tip-div">     帐号：<span class="orange f16b">
                   36207085                  </span></div>
       </div>
       <p style="text-align:center;margin-top:20px;" class="f14b">请选择找回密码的方式</p>
       <div style="margin-left:104px" class="reg-box">
                    <div class="find-all">
			       <div class="reg-img">
			           <div class="reg-on p-reg-off">
			               <div style="" class="o-reg-tip">通过手机</div>
			               <div class="reg-tip-two">找回密码</div>
			           </div>
			            			           <div class="reg-foot">
			                <div class="reg-f">
			                                                                该米米号尚未绑定手机
			                 <a class="reg-tip-a" href="/protect">立即绑定</a>
			                </div>
			           </div>
			           			       </div>
		           <div class="reg-img">
			           <div class="reg-on q-reg-on"> 
			               <div class="o-reg-tip">验证密保问题</div>
			               <div class="reg-tip-two">找回密码</div>
			           </div>
			        			       </div>
			       <div class="reg-img">
			           <div class="reg-on e-reg-on">
			               <div style="" class="o-reg-tip">通过登录邮箱</div>
			               <div class="reg-tip-two">找回密码</div>
			           </div>
			            			       </div>
			       <div class="reg-img">
			           <div class="reg-on k-reg-off"> 
			               <div style="" class="o-reg-tip">通过密保卡</div>
			               <div class="reg-tip-two">找回密码</div>
			           </div>
			          			           <div class="reg-foot" style="display: none;">
			                <div class="reg-f">
			                                                       该米米号尚未绑定密保卡
			                 <a class="reg-tip-a" href="/protect">立即设置</a>
			                </div>
			           </div>
			         			       </div>
			       <div class="reg-img">
			           <div class="reg-on s-reg-on"> 
			               <div class="o-reg-tip">密码申诉</div>
			               <div class="reg-tip-two">找回密码</div>
			           </div>
			           <div class="reg-foot" style="display: none;">
			               <div class="reg-f">
			                                           若以上方式都无法找回密码，可以进行
			                 <a class="reg-tip-a" href="/appeal?userid=36207085" id="J_go_appeal">密码申诉</a>
			               </div>
			           </div>
			       </div>
	          </div>
       </div>
   </div>
</div>

<div class="min-body">
   <div class="min-content back">
       <div class="lit-top">
           <span class="tip">忘记密码&nbsp;&gt;&nbsp;<span class="gray">验证登录邮箱找回密码</span></span>
       </div>
    <form id="form2" name="form2" enctype="application/x-www-form-urlencoded" method="post" action="/forget/findByEmail" autocomplete="off">
       <div class="reg-box">
	       <div class="reg-top">
			    <span class="fleft">你的登录邮箱为&nbsp;&nbsp;<span class="fb">52*****@qq.com</span></span>
		   </div>
		  <div id="J_error_verify_email" class="comm-error ps-error"><span></span></div>
		  <div class="reg-row">
              <label class="label">输入邮箱：</label>
	              <div class="reg-div">
	                <input type="text" value="" id="J_email_verify" class="reg-input" name="email">
	              </div> 
           </div>
           <input type="hidden" value="36207085" name="uid">
           <div class="reg-tip-foot">
                                        请输入你设置密码保护时填写的邮箱地址，或者注册米米号时所填写的邮箱地址。
           </div>
           <div class="a-botton pointer" id="J_submit_email">
             <span class="f14">确定</span>
           </div>
             <div style="margin: 30px 0 0 110px;width:500px;" class="gray-div">
                    <div class="notice hack-list"></div>
                    <div style="width:400px;" class="notice-content hack-list">
                       <span class="gray f12">如果你的登录邮箱无效，你可以让你的家长给客服姐姐打电话进行修改。<br></span>                              <span class="gray f12"> 电话：</span><span class="orange f12">021-61130888</span>
                   </div>
            </div>
	    </div>
	 </form>
     </div>
</div>

<div class="min-body">
   <div class="min-content back">
       <div class="lit-top">
           <span class="tip">忘记密码&nbsp;&gt;&nbsp;<span class="gray">通过
                      登录邮箱
                      找回密码</span></span>
       </div>
       <div class="reg-box">
           <div style="margin-top: 8px;" class="min-gou-icon"></div>
	       <div class="reg-email-tip fleft">
			    <span class="fleft">重设密码邮件已经发送至
			         <span class="orange fb">52******@qq.com</span>
			         请按邮件中的指引，重新设置你的密码。如果长时间没有收到邮件，你可以
                     <a href="/forget/findByEmail" class="orange no-underline">重新发送</a>。
                     			    </span>
		   </div>
                      <div style="margin-top:88px;margin-left:260px;" class="a-botton pointer" id="J_submit_email">
               <a href="http://mail.qq.com/" target="_blank" id="J_send_mail" class="f14b orange no-underline">立即进入邮箱</a>
           </div>
           	    </div>
   </div>
</div>


<div class="min-body">
   <div class="min-content back">
       <div class="lit-top">
           <span class="tip">忘记密码&nbsp;>&nbsp;<span class="gray">设置新密码</span></span>
       </div>
    <form autocomplete="off" action="resetRegPassword" method="post" enctype="application/x-www-form-urlencoded" name="form5" id="form5">  
    <input name="time" type="hidden" id="time" value="1382953089" />
    <input name="uid" type="hidden" id="uid" value="36207085" />
    <input name="sign" type="hidden" id="sign" value="964337a179f7c5cbd24fcc3580cc008b" />
    <input name="from" type="hidden" id="from" value="36ce1df9bc8942a25b405e601a28a76f" />
            <input name="type" type="hidden" id="type" value="findbyemail" />
        <div class="reg-box">
           <div style="position:relative;"></div>
	       <div class="comm-error ps-error"id="J_error_pwd"><span></span></div>
	       <div class="reg-row">
	            <label class="label">
	            	            	设置登录密码：
	            	            </label>
	            <div class="reg-div">
	                <span class="reg-span" id="J_pwd_tip">密码由6-16个字符组成，可用数字、字母下划线</span>
	                <input type="password" class="reg-input" id="J_pwd" name="newpwd"/>
	            </div>
	       </div>
               <div class="reg-row"  id="J_safe_box" style="margin-left: 103px;">
                  <i id="J_safe_level" class="fleft safe-none">&nbsp;&nbsp;</i>
               </div>
	       <div class="comm-error ps-error"id="J_error_again"><span></span></div>
	       <div class="reg-row">
	            <label class="label">
	            	            	确认登录密码：
	            	            </label>
	            <div class="reg-div">
	                <span class="reg-span">请再次输入密码</span>
	                <input type="password" class="reg-input" name="repwd" id="J_pwd_again"/>
	            </div>
	       </div>
	      <div id="J_submit_change" class="a-botton pointer">
             <span class="f14">确定</span>
          </div>
	    </div>
	 </form>
   </div>
</div>


<div class="min-body">
   <div class="min-content back">
       <div class="lit-top">
           <span class="tip">忘记密码&nbsp;>&nbsp;<span class="gray">设置新密码</span></span>
       </div>
       <div class="reg-box" style="margin-top:90px;margin-left:376px;">
           <div class="min-gou-icon"></div>
	       <div class="reg-email-tip hack-list" style="width:auto;">
			    <span class="fleft">
			         <span class="fb">新的设置成功</span>。
			    </span>
		   </div>
	    </div>
	    <div class="foot-botton" id="J_go_back" style="margin-left:376px;">
		        <div class="f-botton">返回首页</div>
	    </div>
   </div>
</div>


<?php echo $this->load->view($this->prefix . '/footer'); ?>