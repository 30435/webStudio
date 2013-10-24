<?php echo $this->load->view($this->prefix . '/header'); ?>
<div class="big-body">
      <div class="big-content big-back">
          <div class="lit-top">

              <span class="tip">密码保护&nbsp;&gt;&nbsp;<span class="gray">设置密保问题</span></span>

   	      </div>
 <div id="J_question_step1">
 <div class="reg-box of-v">
       <div class="pr"></div>
       <div id="J_for_question1_error" class="comm-error ps-error" style="visibility: hidden; display: none;"><span></span></div>
       <div class="reg-row">
            <label class="label">问题一：</label>
            <div class="reg-div">
              <input type="text" value="请选择你的密保问题" id="J_for_question1" maxlength="20" readonly="true" class="reg-input" style="opacity: 1;">
                <input type="hidden" value="99" id="select_for_question1" name="question1">
                <div class="s-botton">
                </div>
            </div>
       </div>
       <div name="2|3" id="for_question1" class="s-select" style="display: none;">
            <div name="0" class="s-option">请选择你的密保问题</div>
                               <div name="1" class="s-option">你爸爸妈妈都叫你什么小名？</div>
                              <div name="12" class="s-option">你的出生地是哪里？</div>
                              <div name="14" class="s-option">你爸爸的职业是什么？</div>
                              <div name="15" class="s-option">你妈妈的职业是什么？</div>
                              <div name="8" class="s-option">你爸爸的名字叫什么？</div>
                              <div name="9" class="s-option">你妈妈的名字叫什么？</div>
                              <div name="13" class="s-option">你爸爸的生日是哪天？</div>
                              <div name="5" class="s-option">你妈妈的生日是哪天？</div>
                              <div name="4" class="s-option">你的英文名字是什么？</div>
                              <div name="99" class="s-option selected">自定义问题</div>
                   </div>
       <div id="for_self1" class="comm-error ps-error" style="visibility: hidden; display: none;"><span></span></div>
       <div id="for_question1_self" style="" class="reg-row">
            <label class="label">问题：</label>
            <div class="reg-div">
             <input type="text" id="J_self1" name="self1" maxlength="20" class="reg-input">
            </div>
       </div>
       <div id="J_answer1_error" style="margin-left: 227px; visibility: visible; display: block;" class="comm-error ps-error"><span>答案不能为空</span></div>
       <div class="reg-row">
            <label class="label">答案：</label>
            <div class="reg-div">
                <span id="J_for_question1_tip" class="reg-span">请输入2-20个字符</span>
                <input type="text" name="answer1" id="J_answer1" maxlength="20" class="reg-input" style="opacity: 0.58;">
            </div>
       </div>
       <div id="J_for_question2_error" class="comm-error ps-error"><span></span></div>
       <div class="reg-row">
            <label class="label">问题二：</label>
            <div class="reg-div">
              <input type="text" value="请选择你的密保问题" id="J_for_question2" maxlength="20" readonly="true" class="reg-input" style="opacity: 1;">
                <input type="hidden" value="0" id="select_for_question2" name="question2">
                <div class="s-botton">
                </div>
            </div>
       </div>
       <div name="1|3" id="for_question2" class="s-select" style="display: none;">
            <div name="0" class="s-option selected">请选择你的密保问题</div>
                               <div name="1" class="s-option">你爸爸妈妈都叫你什么小名？</div>
                              <div name="12" class="s-option">你的出生地是哪里？</div>
                              <div name="14" class="s-option">你爸爸的职业是什么？</div>
                              <div name="15" class="s-option">你妈妈的职业是什么？</div>
                              <div name="8" class="s-option">你爸爸的名字叫什么？</div>
                              <div name="9" class="s-option">你妈妈的名字叫什么？</div>
                              <div name="13" class="s-option">你爸爸的生日是哪天？</div>
                              <div name="5" class="s-option">你妈妈的生日是哪天？</div>
                              <div name="4" class="s-option">你的英文名字是什么？</div>
                              
                   </div>
       <div id="for_self2" class="comm-error ps-error" style="visibility: hidden; display: none;"><span></span></div>
       <div id="for_question2_self" style="display:none;" class="reg-row">
            <label class="label">问题：</label>
            <div class="reg-div">
             <input type="text" id="J_self2" name="self2" maxlength="20" class="reg-input">
            </div>
       </div>
       <div id="J_answer2_error" class="comm-error ps-error"><span></span></div>
       <div class="reg-row">
            <label class="label">答案：</label>
            <div class="reg-div">
                <span id="J_for_question2_tip" class="reg-span"></span>
                <input type="text" name="answer2" id="J_answer2" maxlength="20" class="reg-input">
            </div>
       </div>
       <div id="J_for_question3_error" style="margin-left:227px;" class="comm-error ps-error"><span></span></div>
       <div class="reg-row">
            <label class="label">问题三：</label>
            <div class="reg-div">
              <input type="text" value="请选择你的密保问题" id="J_for_question3" maxlength="20" readonly="true" class="reg-input" style="opacity: 1;">
                <input type="hidden" value="0" id="select_for_question3" name="question3">
                <div class="s-botton">
                </div>
            </div>
       </div>
       <div name="1|2" id="for_question3" class="s-select" style="display: none;">
            <div name="0" class="s-option selected">请选择你的密保问题</div>
                               <div name="1" class="s-option">你爸爸妈妈都叫你什么小名？</div>
                              <div name="12" class="s-option">你的出生地是哪里？</div>
                              <div name="14" class="s-option">你爸爸的职业是什么？</div>
                              <div name="15" class="s-option">你妈妈的职业是什么？</div>
                              <div name="8" class="s-option">你爸爸的名字叫什么？</div>
                              <div name="9" class="s-option">你妈妈的名字叫什么？</div>
                              <div name="13" class="s-option">你爸爸的生日是哪天？</div>
                              <div name="5" class="s-option">你妈妈的生日是哪天？</div>
                              <div name="4" class="s-option">你的英文名字是什么？</div>
                              
                   </div>
       <div id="for_self3" class="comm-error ps-error" style="visibility: hidden; display: none;"><span></span></div>
       <div id="for_question3_self" style="display:none;" class="reg-row">
            <label class="label">问题：</label>
            <div class="reg-div">
             <input type="text" id="J_self3" name="self3" maxlength="20" class="reg-input">
            </div>
       </div>
       <div id="J_answer3_error" style="margin-left:227px;" class="comm-error ps-error"><span></span></div>
       <div class="reg-row">
            <label class="label">答案：</label>
            <div class="reg-div">
                <span id="J_for_question3_tip" class="reg-span"></span>
                <input type="text" name="answer3" id="J_answer3" maxlength="20" class="reg-input">
            </div>
       </div>
      </div>
       <div style="margin-left:372px;" class="a-botton hack-list" id="J_question_verify">
             <span class="f14">确定</span>
       </div>
        <div style="margin-left:10px;" class="a-botton hack-list" id="J_question_cancel">
         <span class="f14">重置</span>
        </div>
   </div>
   <div id="J_question_step2" class="hidden">
   <div class="reg-box">
       <div style="margin-left:146px;" class="reg-top">
           <span class="red">请牢牢记住这三个问题，以后可以通过这三个问题找回密码哟！</span>
       </div>
       <div class="reg-row">
            <label class="label">问题一：</label>
            <span id="J_q_review1" style="line-height:47px;" class="tip-span"></span>
       </div>
       <div class="reg-row">
            <label class="label">答案：</label>
            <span id="J_a_review1" style="line-height:47px;" class="tip-span red"></span>
       </div>
       <div class="reg-row">
            <label class="label">问题二：</label>
            <span id="J_q_review2" style="line-height:47px;" class="tip-span "></span>
       </div>
       <div class="reg-row">
            <label class="label">答案：</label>
            <span id="J_a_review2" style="line-height:47px;" class="tip-span red"></span>
       </div>
       <div class="reg-row">
            <label class="label">问题三：</label>
            <span id="J_q_review3" style="line-height:47px;" class="tip-span"></span>
       </div>
       <div class="reg-row">
            <label class="label">答案：</label>
            <span id="J_a_review3" style="line-height:47px;" class="tip-span red "></span>
       </div>
      </div>
      <div style="margin-left:372px;" class="a-botton hack-list" id="J_com_question_ok">
            <span class="f14">确定</span>
      </div>
       <div style="margin-left:10px;" class="a-botton hack-list" id="J_back_question">
        <span class="f14">返回</span>
       </div>
   </div>
    <div style="display:none;" id="J_question_step3">
        <div style="margin-top:100px;margin-left:390px;" class="reg-box">
        <div style="background: url('http://support-res.61.com/account/new-account/images/common.png') no-repeat scroll 0 -536px;height:25px;padding-left:35px;padding-top:5px;" class="fb f14">密保问题设置成功！</div>
        </div>
        <div style="margin-left:300px;" class="reg-box">
        <a href="/main?flag=account" class="f-botton">测试帐户安全等级</a>
        <a href="/protect/save" id="J_save_q" class="f-botton">保存密保问题到本地</a>
        </div>
    </div>
  </div>
</div>
<?php echo $this->load->view($this->prefix . '/footer'); ?>