<?php echo $this->load->view($this->prefix . '/header'); ?>
<div class="min-body">
   <div class="min-content back">
       <div class="min-head">
         <div class="tip-div">     帐号：<span class="orange f16b">
         36207085                  </span></div>
       </div>
       <p class="f14b" style="text-align:center;margin-top:20px;">请选择验证绑定密保手机的方式</p>
       <div class="reg-box" style="margin-left:258px">
                    <div class="find-all">
		           <div class="reg-img">
			           <div 
			               			                class="reg-on q-reg-off"
			               			               > 
			               <div class="o-reg-tip">验证密保问题</div>
			               <div class="reg-tip-two">绑定密保手机</div>
			           </div>
			        			           <div class="reg-foot">
			              <div class="reg-f">
			                                                        该米米号尚未设置密保问题
			                 <a href="/protect" class="reg-tip-a">立即设置</a>
			              </div>
			           </div>
			        			       </div>
			       <div class="reg-img">
			           <div 
			           			           class="reg-on e-reg-on"
			           			           >
			               <div class="o-reg-tip" style="">通过登录邮箱</div>
			               <div class="reg-tip-two">绑定密保手机</div>
			           </div>
			            			       </div>
			       <div class="reg-img">
			           <div 
			           			              class="reg-on k-reg-off"
			           			           > 
			               <div class="o-reg-tip" style="">通过密保卡</div>
			               <div class="reg-tip-two">绑定密保手机</div>
			           </div>
			          			           <div class="reg-foot">
			                <div class="reg-f">
			                                                       该米米号尚未绑定密保卡
			                 <a href="/protect" class="reg-tip-a">立即设置</a>
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
           <span class="tip">密码保护&nbsp;>&nbsp;<span class="gray">验证密保邮箱绑定密保手机</span></span>
       </div>
    <form autocomplete="off" action="/protect/bindByEmail" method="post" enctype="application/x-www-form-urlencoded" name="form2" id="form2">
       <div class="reg-box">
	       <div class="reg-top">
			    <span class="fleft">你的登录邮箱为&nbsp;&nbsp;<span class="fb">52*****@qq.com</span></span>
		   </div>
		  <div class="comm-error ps-error"  id="J_error_verify_email"><span></span></div>
		  <div class="reg-row">
              <label class="label">输入邮箱：</label>
	              <div class="reg-div">
	                <input type="text"  name="email" class="reg-input"  id="J_email_verify" value=""/>
	              </div> 
           </div>
           <input type="hidden" name="uid" value="" />
           <div class="reg-tip-foot">
                                        请输入你设置密码保护时填写的邮箱地址，或者注册米米号时所填写的邮箱地址。
           </div>
           <div id="J_submit_email" class="a-botton pointer">
             <span class="f14">确定</span>
           </div>
             <div class="gray-div" style="margin: 30px 0 0 110px;width:500px;">
                    <div class="notice hack-list"></div>
                    <div class="notice-content hack-list" style="width:400px;">
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

                   <span class="tip">密码保护&nbsp;&gt;&nbsp;<span class="gray">绑定手机</span></span>

   	      	</div>
            <div id="J_phone_step1">
              <div class="reg-box">
                 <div class="reg-top" style="margin-left:205px;">
	               <span class="fb">请认真填写要绑定的手机号</span>
                </div>
              <div class="comm-error ps-error" id="for_phone"><span></span></div>
              <div class="reg-row">
                 <label class="label">手机号：</label>
	              <div class="reg-div">
                  <span class="reg-span">请输入你的手机号</span>
	                <input type="text"  maxlength="11" class="reg-input" id="J_paccount"
                                        />
	              </div>
                  <a class="btn_disabled fleft" style="margin-left:5px;" id="J_send_secc" href="javascript:;">
                   <span id="J_secc_span">
                   点击发送验证码
                   </span>
                   <img id="J_secc_loading" style="display:none;width:22px;margin-top:12px;"
                      src="http://support-res.61.com/account/new-account/images/loading.gif"/>
                  </a>
              </div>
            <div class="comm-error ps-error" id="for_phone_secc"><span></span></div>
             <div class="reg-row">
                 <label class="label">验证码：</label>
	              <div class="reg-div">
	                <input type="text"  id="J_phone_sec" maxlength="6" class="reg-input"/>
	              </div>
              </div>
              <div id="J_set_phone_ok" class="a-botton" >
             <span class="f14">确定</span>
           </div>
           </div>
           
          </div>
          <div id="J_phone_step2" style="display:none;">

               <div class="result-error f14" style="margin:100px auto 20px 400px;line-height: 25px;">
               	<div class="min-gou-icon hack-list"></div>
               	密保手机绑定成功！
               </div>
               <div style="width: 300px;margin-left: 438px;margin-top: 10px;font-size: 12px;color: #747171;">
                你可以使用该手机号登录淘米任何产品！
               </div>
	           <div style="margin-left:300px;margin-top:40px;font-size:14px;">
        			<a href="/main?flag=account" class="f-botton">测试帐户安全等级</a>
		            <a href="/protect/save_phone"  class="f-botton">保存手机到本地</a>
		       </div>

          </div>
      </div>
      </div>
   </div>
<?php echo $this->load->view($this->prefix . '/footer'); ?>