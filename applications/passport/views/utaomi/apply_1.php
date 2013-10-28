<?php echo $this->load->view($this->prefix . '/header'); ?>
<div class="big-body">
    <div class="big-content big-back">
       <div class="lit-top">
           <span class="tip">密码申诉</span>
       </div>
       <div class="step-one"></div>
       <div style="margin-top:30px;" class="reg-box">
	       <div class="appeal-top">
	           <span class="fb">填写需要密码申诉的米米号信息</span>
	       </div>
	       <div class="reg-row">
            <label class="label">请选择密码类别：</label>
            <div class="reg-radio">
               <div style="font-size: 14px;margin-top:15px;_margin-top:7px;" class="raido">
	               <input type="radio" value="0" checked="checked" id="type0" name="type">
	               <span>找回帐号的登录密码</span>
               </div>
               <div style="font-size: 14px;margin-top:10px;_margin-top:7px;" class="radio">
	               <input type="radio" value="1" id="type1" name="type">
	               <span>找回米币账户的支付密码</span>
	           </div>
            </div>
         </div>
       <div id="for_uid" class="comm-error ps-error"><span></span></div>
       <div class="reg-row">
            <label class="label">帐号：</label>
            <div class="reg-div">
                <span class="reg-span">手机号/自定义帐号/邮箱/米米号</span>
                <input type="text" name="uid" id="uid" class="reg-input">
            </div>
       </div>
       <div id="for_email" class="comm-error ps-error"><span></span></div>
       <div class="reg-row">
            <label class="label">联系邮箱：</label>
            <div class="reg-div">
                <span class="reg-span">请输入用于联系的邮箱</span>
                <input type="text" name="email" id="email" class="reg-input">
            </div>
       </div>
       <div style="margin-left: 207px; margin-top: -25px; display: none;" id="select_email" class="select-email"></div>
        <div id="for_J_appeal_seccode" class="comm-error ps-error"><span></span></div>
       <div class="rsess-row">
            <label class="label">验证码：</label>
            <div class="reg-div">
                  <input type="text" class="reg-sec" maxlength="4" size="6" id="J_appeal_seccode" name="seccode">
            </div>
            <div style="margin-top:11px;" id="J_reg_img" class="reg-img pointer">
                 <img id="J_sess_code" alt="图片未能显示" src="">
                 <a class="gray f12" id="J_change_sess" href="javascript:void(null);">换一个</a>
            </div>
       </div>
       <div id="button" class="a-botton">
             <span class="f14">下一步</span>
       </div>
       </div>
</div>
</div>


<div class="big-body">
    <div class="big-content big-back">
       <div class="lit-top">
           <span class="tip">密码申诉</span>
       </div>
       <div class="step-two"></div>
       <div class="reg-box" style="margin-top:30px;">
	       <div class="appeal-top">
	           <span class="fb">你正在为帐号
	               <span class="orange appeal_udid">36207085</span>
	                                         进行密码申诉
	                <a class="n-gray" href="/appeal">如果帐号不对，可点击这里返回重填</a>
	           </span>
	       </div>
<form autocomplete="off" id="formMimi" name="form1" method="post" action="" >
	   <div class="comm-error ps-error"id="for_realname"><span></span></div>
       <div class="reg-row">
            <label class="label">真实姓名：</label>
            <div class="reg-div">
                <input type="text" class="reg-input" id="J_realname" name="realname"/>
            </div>
       </div>
       <div class="comm-error ps-error"id="for_pwd_history"><span></span></div>
       <div class="reg-row">
            <label class="label">用过的密码：</label>
            <div class="reg-div">
                <input type="text" class="reg-input" maxlength="16" id="J_user_pwd" name="pwd_history[]"/>
            </div>
            <span class="must">（必填）</span>
       </div>
        <div class="reg-tip-foot clear" style="margin-left: 204px;">
                                        填写越早使用的密码，申诉成功率越高。<br/>
             <a class="green f12 pointer no-underline" id="J_add_input">填写更多&#43;</a>
        </div>
       <div class="comm-error ps-error"id="for_country"><span></span></div>
       <div class="reg-row" style="width:700px;">
            <label class="label new-label">经常登录的城市：</label>
             <div class="min-select">
                <div class="m-botton" id="J_country"></div>
                <input type="text" readonly="true" class="m-input" name='country_name' id="J_country_select_value" value="中国"/>
                <input type="hidden" id="J_country_select_code" value="1" name="login_country[]"/>
            </div>
             <div class="min-select">
                <div class="m-botton" id="J_province"></div>
                <input type="text" readonly="true" class="m-input" name='province_name' value="所在省份" id="J_province_select_value"/>
                <input type="hidden" id="J_province_select_code" value="0" name="login_province[]"/>
            </div>
             <div class="min-select">
                <div class="m-botton" id="J_city"></div>
                <input type="text" readonly="true" class="m-input" name='city_name' value="所在城市" id="J_city_select_value"/>
                 <input type="hidden" id="J_city_select_code" value="0" name="login_city[]"/>
            </div>
            <span class="must">（必填）</span>
       </div>
       <div class="comm-error ps-error"id="for_time"><span></span></div>
       <div class="reg-row" style="width:700px;">
            <label class="label new-label">申请该帐号的时间：</label>
             <div class="min-select">
                <div class="m-botton" id="J_year"></div>
                <input type="text" class="m-input" readonly="true" name="year" value="选择年" id="J_year_select_value"/>
                <input type="hidden" id="J_year_select_code" value="0" name="reg_year"/>
            </div>
             <div class="min-select">
                <div class="m-botton" id="J_month"></div>
                <input type="text" class="m-input" readonly="true" name="month" value="选择月" id="J_month_select_value"/>
                <input type="hidden" id="J_month_select_code" value="0" name="reg_month"/>
            </div>
             <div class="min-select">
                <div class="m-botton" id="J_day"></div>
                <input type="text" class="m-input" readonly="true" name="day" value="选择日" id="J_day_select_value"/>
                <input type="hidden" id="J_day_select_code" value="0" name="reg_day"/>
            </div>
            <span class="must">（必填）</span>
       </div>
       <div class="a-botton ml325" id="button">
             <span class="f14">下一步</span>
       </div>
	  </div>
    </div>
</div>
</form>
<div class="one" id="J_country_select">
	 <div class="option selected" name="1" style="margin-top:5px;">中国</div>
	 <div class="option" name="2">其他国家</div>
</div>
<div  id="J_province_select" class="one">
	<div class="option selected" style="margin-top:5px;">所在省份</div>
		    <div class="option" name="11">北京</div>
		    <div class="option" name="12">天津</div>
		    <div class="option" name="13">河北</div>
		    <div class="option" name="14">山西</div>
		    <div class="option" name="15">内蒙古</div>
		    <div class="option" name="21">辽宁</div>
		    <div class="option" name="22">吉林</div>
		    <div class="option" name="23">黑龙江</div>
		    <div class="option" name="31">上海</div>
		    <div class="option" name="32">江苏</div>
		    <div class="option" name="33">浙江</div>
		    <div class="option" name="34">安徽</div>
		    <div class="option" name="35">福建</div>
		    <div class="option" name="36">江西</div>
		    <div class="option" name="37">山东</div>
		    <div class="option" name="41">河南</div>
		    <div class="option" name="42">湖北</div>
		    <div class="option" name="43">湖南</div>
		    <div class="option" name="44">广东</div>
		    <div class="option" name="45">广西</div>
		    <div class="option" name="46">海南</div>
		    <div class="option" name="50">重庆</div>
		    <div class="option" name="51">四川</div>
		    <div class="option" name="52">贵州</div>
		    <div class="option" name="53">云南</div>
		    <div class="option" name="54">西藏</div>
		    <div class="option" name="61">陕西</div>
		    <div class="option" name="62">甘肃</div>
		    <div class="option" name="63">青海</div>
		    <div class="option" name="64">宁夏</div>
		    <div class="option" name="65">新疆</div>
		    <div class="option" name="71">台湾</div>
		    <div class="option" name="81">香港</div>
		    <div class="option" name="82">澳门</div>
		</div>
<div id="J_city_select"  class="one">
    <div name="0" class="option selected">所在城市</div>
</div>
<div id="J_year_select" class="one">
     <div name="0" class="option selected">选择年</div>
          <div class="option" name="2013">2013</div>
          <div class="option" name="2012">2012</div>
          <div class="option" name="2011">2011</div>
          <div class="option" name="2010">2010</div>
          <div class="option" name="2009">2009</div>
          <div class="option" name="2008">2008</div>
          <div class="option" name="2007">2007</div>
     </div>
<div id="J_month_select" class="one">
     <div name="0" class="option selected" >选择月</div>
</div>
<div id="J_day_select" class="one">
     <div name="0" class="option selected" >选择日</div>
</div>





<div class="big-body">
    <div class="big-content big-back">
       <div class="lit-top">
           <span class="tip">密码申诉</span>
       </div>
       <div class="step-three"></div>
       <div class="reg-box" style="margin-top:0px!important;*margin-top:-30px;">
	       <div class="appeal-top">
	           <span class="fb">你正在为帐号
	               <span class="orange appeal_udid">36207085</span>
	                                         进行密码申诉
	                <a class="n-gray" href="/appeal">如果帐号不对，可点击这里返回重填</a>
	           </span>
	       </div>
	   </div>
	   <div class="game-div">
	      <label>请选择最近玩过的游戏：</label>
	      <div class="choose-game-tip">
	           <div class="game">
	               <div class="game-show" id="mole">
	                  <div class="g-mole"></div>
                      <div class="ps-select"></div>
	                                                摩尔庄园
	               </div>
	           </div>
	           <div class="game">
	                <div class="game-show" id="seer">
	                  <div class="g-seer"></div>
                      <div class="ps-select"></div>
	                                                赛尔号</div>
	           </div>
	           <div class="game">
	                <div class="game-show" id="seer2">
	               <div class="g-seer2"></div>
                   <div class="ps-select"></div>
	                                         约瑟传说</div>
	           </div>
	           <div class="game">
	               <div class="game-show" id="xhx">
	               <div class="g-hua"></div>
                   <div class="ps-select"></div>
	             		 小花仙</div>
	           </div>
	           <div class="game">
	               <div class="game-show" id="gf">
	               <div class="g-gf"></div>
                   <div class="ps-select"></div>
	                                                功夫派</div>
	           </div>
	           <div class="game">
	               <div class="game-show" id="hero">
	               <div class="g-hero"></div>
                   <div class="ps-select"></div>
	                                                 摩尔勇士</div>
	           </div>
	           <div class="game">
	               <div class="game-show" id="zs">
	               <div class="g-zs"></div>
                   <div class="ps-select"></div>
	                                                战神联盟</div>
	           </div>
	      </div>
	   </div>
	   <div class="reg-tip-foot clear" style="margin-left:188px;width:588px;">
           <i class="add-more"></i> 可多选，填写的游戏越多，申诉的成功率越大。
           <span class="newgame">申诉创想兵团或2125小游戏</span>
       </div>
 <form autocomplete="off" id="form2" name="form2" method="post" action="/appeal/useInfo">
       <input name="is_lianyun" id="J_is_lianyun" type="hidden" value="0">
       <input name="game_select[]" id="J_game_select_mole" type="hidden">
       <input name="game_select[]" id="J_game_select_hero"type="hidden">
       <input name="game_select[]" id="J_game_select_gf"type="hidden">
       <input name="game_select[]" id="J_game_select_seer2"type="hidden">
       <input name="game_select[]" id="J_game_select_seer"type="hidden">
       <input name="game_select[]" id="J_game_select_xhx"type="hidden">
       <div class="newgame-row hidden" id="J_game_zs">
           <div class="reg-row">
                <label class="label">游戏名称：</label>
                <div class="reg-div">
                    <input type="text" class="reg-input"  value="战神联盟" readonly='readonly'
                       maxlength="10" name="game_zs" id="J_gname_zs"/>
                </div>
           </div>
           <div class="reg-row">
               <label class="label">内容：</label>
                  <div class="reg-text">
                         <span class="textarea-tip" id="J_con_tip_zs">
                             请填写你的区服，角色名、角色等级和其他游戏信息，填写的越详细，越有助于你通过审核。
                         </span>
                        <textarea class="reg-area" name="game_answer_zs"></textarea>
                  </div>
           </div>
      </div>
       <div class="newgame-row hidden" id="J_lianyun_1">
           <div class="reg-row">
                <label class="label">游戏名称：</label>
                <div class="reg-div">
                    <input type="text" class="reg-input" maxlength="10" name="game_name_1"/>
                </div>
           </div>
           <div class="reg-row">
               <label class="label">内容：</label>
                  <div class="reg-text">
                     <span class="textarea-tip" id="J_con_tip_1">
                         请填写你的区服，角色名、角色等级和其他游戏信息，填写的越详细，越有助于你通过审核。
                     </span>
                    <textarea class="reg-area" name="game_answer_1"></textarea>
                  </div>
           </div>
       </div>
       <div class="newgame-row hidden" id="J_lianyun_2">
           <div class="reg-row">
                <label class="label">游戏名称：</label>
                <div class="reg-div">
                    <input type="text" class="reg-input" maxlength="10" name="game_name_2"/>
                </div>
           </div>
           <div class="reg-row">
               <label class="label">内容：</label>
                  <div class="reg-text">
                         <span class="textarea-tip" id="J_con_tip_2">
                             请填写你的区服，角色名、角色等级和其他游戏信息，填写的越详细，越有助于你通过审核。
                         </span>
                        <textarea class="reg-area" name="game_answer_2"></textarea>
                  </div>
           </div>
      </div>
       <div class="newgame-row hidden" id="J_lianyun_3">
           <div class="reg-row">
                <label class="label">游戏名称：</label>
                <div class="reg-div">
                    <input type="text" class="reg-input"  maxlength="10" name="game_name_3"/>
                </div>
           </div>
           <div class="reg-row">
               <label class="label">内容：</label>
                  <div class="reg-text">
                         <span class="textarea-tip" id="J_con_tip_3">
                             请填写你的区服，角色名、角色等级和其他游戏信息，填写的越详细，越有助于你通过审核。
                         </span>
                        <textarea class="reg-area" name="game_answer_3"></textarea>
                  </div>
           </div>
      </div>
      <div class="clear"  style="margin-left:305px;width:500px;">
        <span class="green f12 pointer hidden" id="J_add_new_more">填写更多&#43;</span>
        <span class="green hidden" id="J_back_to_old" style="margin-left:310px;cursor:pointer;">修改申诉的游戏</span>
      </div>
       <div  style="margin-top:7px;margin-left:187px;display:none;" id="J_game_seer">
            <label class="label-tip">在游戏<span class="orange">赛尔号</span>中</label>
            <div class="line"></div>
       <div class="reg-row">
            <label class="label" style="width:308px;text-align:left;">问题一：你最后一次购买的物品是什么？</label>
            <div class="reg-div">
                <input type="text" class="reg-input" id="seer_usage_tool" name="seer_buy_prodect"/>
            </div>
       </div>
       <div class="reg-row">
            <label class="label" style="width:308px;text-align:left;">问题二：你最新击败的SPT BOSS是哪个？</label>
            <div class="reg-div">
                <input type="text" class="reg-input" id="seer_fairy_name" name="seer_spt_boss"/>
            </div>
       </div>
       <div class="reg-row">
            <label class="label" style="width:308px;text-align:left;">问题三：你最后一次获得的成就是什么？</label>
            <div class="reg-div">
                <input type="text" class="reg-input" id="seer_stp_task" name="seer_last_score"/>
            </div>
       </div>
       </div>
       <div  style="margin-top:7px;margin-left:187px;display:none;" id="J_game_mole">
            <label class="label-tip">在游戏<span class="orange">摩尔庄园</span>中</label>
            <div class="line"></div>
       <div class="reg-row">
            <label class="label" style="width:308px;text-align:left;">问题一：最近使用金豆购买过什么物品？</label>
            <div class="reg-div">
                <input type="text" class="reg-input" id="mole_buy_product" name="mole_buy_product"/>
            </div>
       </div>
       <div class="reg-row">
            <label class="label" style="width:308px;text-align:left;">问题二： 最近收获的天使有哪些？</label>
            <div class="reg-div">
                <input type="text" class="reg-input"  name="mole_get_angel"/>
            </div>
       </div>
       <div class="reg-row">
            <label class="label" style="width:308px;text-align:left;">问题三： 你拥有的拉姆装扮有哪些？</label>
            <div class="reg-div">
                <input type="text" class="reg-input"  name="mole_own_product"/>
            </div>
       </div>
        
       </div>
       <div  style="margin-top:7px;margin-left:187px;display:none;" id="J_game_xhx">
            <label class="label-tip">在游戏<span class="orange">小花仙</span>中</label>
            <div class="line"></div>
       <div class="reg-row">
            <label class="label" style="width:308px;text-align:left;">问题一：最后一次获得的装扮是什么？</label>
            <div class="reg-div">
                <input type="text" class="reg-input" name="hua_last_cloth"/>
            </div>
       </div>
       <div class="reg-row">
            <label class="label" style="width:308px;text-align:left;">问题二：最后一次获得的花精灵是什么？</label>
            <div class="reg-div">
                <input type="text" class="reg-input"  name="hua_last_fairy"/>
            </div>
       </div>
       <div class="reg-row">
            <label class="label" style="width:308px;text-align:left;">问题三：帐号丢失前拥有的花精灵有哪些？</label>
            <div class="reg-div">
                <input type="text" class="reg-input"  name="hua_own_fairy"/>
            </div>
       </div>
       
       </div>
        <div  style="margin-top:7px;margin-left:187px;display:none;" id="J_game_seer2">
            <label class="label-tip">在游戏<span class="orange">约瑟传说</span>中</label>
            <div class="line"></div>
       <div class="reg-row">
            <label class="label" style="width:308px;text-align:left;">问题一：最后一次设置的首发精灵是哪只？</label>
            <div class="reg-div">
                <input type="text" class="reg-input" id="seer2_usage_tool" name="seer2_set_fairy"/>
            </div>
       </div>
       <div class="reg-row">
            <label class="label" style="width:308px;text-align:left;">问题二：你领取的第一只初始精灵是什么？</label>
            <div class="reg-div">
                <input type="text" class="reg-input"  name="seer2_first_name"/>
            </div>
       </div>
       <div class="reg-row">
            <label class="label" style="width:308px;text-align:left;">问题三：你目前的星石数量有多少？</label>
            <div class="reg-div">
                <input type="text" class="reg-input num_ber"  name="seer2_power_last"/>
            </div>
       </div>
       
       </div>
     <div  style="margin-top:7px;margin-left:187px;display:none;" id="J_game_hero">
        <label class="label-tip">在游戏<span class="orange">摩尔勇士</span>中</label>
        <div class="line"></div>
       <div class="reg-row">
            <label class="label" style="width:308px;text-align:left;">问题一：最近的完成的任务是什么？</label>
            <div class="reg-div">
                <input type="text" class="reg-input"  name="warr_task_name" />
            </div>
       </div>
       <div class="reg-row">
            <label class="label" style="width:308px;text-align:left;">问题二：最高等级的精灵有哪些？</label>
            <div class="reg-div">
                <input type="text" class="reg-input"  name="warr_hightest_name"/>
            </div>
       </div>
       <div class="reg-row">
            <label class="label" style="width:308px;text-align:left;">问题三：人物技能等级中最高的是哪些技能？</label>
            <div class="reg-div">
                <input type="text" class="reg-input" name="warr_hightest_skill"/>
            </div>
       </div>
       
       </div>
       <div  style="margin-top:7px;margin-left:187px;display:none;" id="J_game_gf">
        <label class="label-tip">在游戏<span class="orange">功夫派</span>中</label>
        <div class="line"></div>
       <div class="reg-row" style="width:760px;">
            <label class="label" style="width:308px;text-align:left;">问题一：最常玩的是什么角色，什么时间创建的？</label>
             <div class="min-select">
                <div class="m-botton" id="J_gf_role"></div>
                <input type="text" readonly="true"class="m-input" name="year" value="猴子" id="J_gf_role_select_value"/>
                <input type="hidden" name="gf_role" id="J_gf_role_select_code" value="1"/>
            </div>
             <div class="min-select">
                <div class="m-botton" id="J_gf_year"></div>
                <input type="text" readonly="true"class="m-input" name="year" value="选择年" id="J_gf_year_select_value"/>
                <input type="hidden" name="gf_last_login_year" id="J_gf_year_select_code" value="0"/>
            </div>
             <div class="min-select">
             <div class="m-botton" id="J_gf_month"></div>
                <input type="text" readonly="true"class="m-input" name="month" value="选择月" id="J_gf_month_select_value"/>
                <input type="hidden" name="gf_last_login_month" id="J_gf_month_select_code" value="0"/>
            </div>
       </div>
       <div class="reg-row">
            <label class="label" style="width:308px;text-align:left;">问题二：帐号丢失前做的最后一次任务是什么？</label>
            <div class="reg-div">
                <input type="text" class="reg-input" id="gf_pet_name" name="gf_task_name"/>
            </div>
       </div>
       <div class="reg-row">
            <label class="label" style="width:308px;text-align:left;">问题三：你有几只守护神？</label>
            <div class="reg-div">
                <input type="text" class="reg-input num_ber" id="gf_buy_product" name="gf_has_fairy"/>
            </div>
       </div>
       </div>
       <div class="a-botton hack-list" id="J_prev" style="margin-left:340px;">
             <span class="f14">上一步</span>
       </div>
        <div class="a-botton hack-list" style="margin-left:134px;" id="button">
             <span class="f14">下一步</span>
       </div>
	</div>
</div>
</form>
<div id="J_gf_role_select" class="one">
     <div name="1" class="option selected">猴子</div>
     <div name="2" class="option">兔子</div>
     <div name="3" class="option">熊猫</div>
     <div name="4" class="option">龙人</div>
     <div name="5" class="option">老虎</div>
     <div name="6" class="option">猫女</div>
</div>
<div id="J_gf_year_select" class="one">
     <div name="0" class="option selected">选择年</div>
                <div class="option" name="2013">2013</div>
               <div class="option" name="2012">2012</div>
               <div class="option" name="2011">2011</div>
               <div class="option" name="2010">2010</div>
               <div class="option" name="2009">2009</div>
               <div class="option" name="2008">2008</div>
               <div class="option" name="2007">2007</div>
      </div>
<div id="J_gf_month_select" class="one">
     <div name="0" class="option selected">选择月</div>
</div>





<div class="big-body">
    <div class="big-content big-back">
       <div class="lit-top">
           <span class="tip">密码申诉</span>
       </div>
       <div class="step-four"></div>
       <div class="reg-box" style="margin-top:30px;">
	       <div class="appeal-top">
	           <span class="fb">你正在为帐号
	               <span class="orange appeal_udid">36207085</span>
	                                         进行密码申诉
	                <a class="n-gray" href="/appeal">如果帐号不对，可点击这里返回重填</a>
	           </span>
	       </div>
<form autocomplete="off" id="formPayInfo" name="form1" method="post" action="/appeal/payInfo" >
       <div class="reg-top">
	           <span class="fleft">请填写最近此帐号有过的消费行为信息
	           </span>
	       </div>
	  <div class="comm-error ps-error" id="for_pay_pwd"><span></span></div>
       <div class="reg-row">
            <label class="label">支付密码：</label>
            <div class="reg-div">
                <input type="text" class="reg-input" maxlength="16" id="pay_pwd" name="pay_pwd"/>
            </div>
       </div>
       <div class="reg-row" style="width:760px;">
            <label class="label">你最近使用过的兑换码：</label>
             <div class="min-select" style="margin-right:20px;">
                <div class="m-botton" id="J_card_select"></div>
                <input type="text" class="m-input" name="year" readonly="true"value="摩尔庄园" id="J_card_real_select_value"/>
                <input type="hidden" name="card_game"  id="J_card_real_select_code" value="1"/>
            </div>
             <div class="min-select">
                <div class="m-botton" id="J_game_card_select"></div>
                <input type="text" class="m-input" readonly="true"value="相应的卡" id="J_game_card_real_select_value"/>
                <input type="hidden" name="game_card" id="J_game_card_real_select_code" value="0"/>
            </div>
       </div>
       <div class="reg-row">
            <label class="label">兑换卡的密码：</label>
            <div class="reg-div">
                <input type="text" class="reg-input" id="card_pwd" name="card_pwd"/>
            </div>
       </div>
        <div class="reg-row" style="width:760px;" id="index_1">
            <label class="label">你使用过的充值方式：</label>
             <div class="min-select">
                <div class="m-botton" id="J_paywayone_select"></div>
                <input type="text" class="m-input" readonly="true"value="充值方式" id="J_paywayone_real_select_value"/>
                <input type="hidden" name="pay_way[]" id="J_paywayone_real_select_code" value="0"/>
            </div>
             <div class="min-select">
                <div class="m-botton" id="J_game_useone_select"></div>
                <input type="text" class="m-input" readonly="true"value="消费产品" id="J_game_useone_real_select_value"/>
                <input type="hidden" name="game_use[]" id="J_game_useone_real_select_code" value="0"/>
            </div>
             <div class="min-select" style="display:none;" id="J_next_one">
                <div class="m-botton" id="J_selectone_select"></div>
                <input type="text" class="m-input" readonly="true"value="米币数量" id="J_selectone_real_select_value"/>
                <input type="hidden" name="num_or_time1[]" id="J_selectone_real_select_code" value="0"/>
            </div>
            <div class="rsess-row" id="J_inputone_select" style="clear:none;margin-bottom:-5px;display:none;">
	            <div class="reg-div">
	                  <input name="num_or_time2[]" type="text" id="J_inputone_value" class="reg-sec">
	            </div><span style="line-height:43px;">米币</span>
            </div>
       </div>
       <div class="comm-error ps-error" id="for_pay_mimi_one"><span></span></div>
       <div class="reg-row" id="J_paywayone_mmk" style="display:none;">
            <label class="label">请输入充值的米米卡号：</label>
            <div class="reg-div">
                <input type="text" class="reg-input" id="J_paywayonemmk" name="pay_mimi[]"/>
            </div>
       </div>
       <div class="comm-error ps-error" id="for_pay_phone_one"><span></span></div>
       <div class="reg-row" id="J_paywayone_phone" style="display:none;">
            <label class="label">请输入手机号：</label>
            <div class="reg-div">
                <input type="text" class="reg-input" id="J_paywayoneemail" name="pay_mobile[]"/>
            </div>
       </div>
       <div class="reg-row" style="width:760px;display:none;"id="index_2">
            <label class="label">你使用过的充值方式：</label>
             <div class="min-select">
                <div class="m-botton" id="J_paywaytwo_select"></div>
                <input type="text" class="m-input" readonly="true"value="充值方式" id="J_paywaytwo_real_select_value"/>
                <input type="hidden" name="pay_way[]" id="J_paywaytwo_real_select_code" value="0"/>
            </div>
             <div class="min-select">
                <div class="m-botton" id="J_game_usetwo_select"></div>
                <input type="text" class="m-input" readonly="true"value="消费产品" id="J_game_usetwo_real_select_value"/>
                <input type="hidden" name="game_use[]" id="J_game_usetwo_real_select_code" value="0"/>
            </div>
             <div class="min-select" style="display:none;" id="J_next_two">
                <div class="m-botton" id="J_selecttwo_select"></div>
                <input type="text" class="m-input" readonly="true"value="米币数量" id="J_selecttwo_real_select_value"/>
                <input type="hidden" name="num_or_time1[]" id="J_selecttwo_real_select_code" value="0"/>
            </div>
            <div class="rsess-row" id="J_inputtwo_select" style="clear:none;margin-bottom:-5px;display:none;">
	            <div class="reg-div">
	                  <input name="num_or_time2[]" type="text" id="J_inputtwo_value" class="reg-sec">
	            </div><span style="line-height:43px;">米币</span>
            </div>
       </div>
       <div class="comm-error ps-error" id="for_pay_mimi_two"><span></span></div>
       <div class="reg-row" id="J_paywaytwo_mmk" style="display:none;">
            <label class="label">请输入充值的米米卡号：</label>
            <div class="reg-div">
                <input type="text" class="reg-input" id="J_paywaytwommk" name="pay_mimi[]"/>
            </div>
       </div>
       <div class="comm-error ps-error" id="for_pay_phone_two"><span></span></div>
       <div class="reg-row" id="J_paywaytwo_phone" style="display:none;">
            <label class="label">请输入手机号：</label>
            <div class="reg-div">
                <input type="text" class="reg-input" id="J_paywaytwoemail" name="pay_mobile[]"/>
            </div>
       </div>
       <div class="reg-row" style="width:760px;display:none;" id="index_3">
            <label class="label">你使用过的充值方式：</label>
             <div class="min-select">
                <div class="m-botton" id="J_paywaythree_select"></div>
                <input type="text" class="m-input" readonly="true"value="充值方式" id="J_paywaythree_real_select_value"/>
                <input type="hidden" name="pay_way[]" id="J_paywaythree_real_select_code" value="0"/>
            </div>
             <div class="min-select">
                <div class="m-botton" id="J_game_usethree_select"></div>
                <input type="text" class="m-input" readonly="true" value="消费产品" id="J_game_usethree_real_select_value"/>
                <input type="hidden" name="game_use[]" id="J_game_usethree_real_select_code" value="0"/>
            </div>
             <div class="min-select" style="display:none;" id="J_next_three">
                <div class="m-botton" id="J_selectthree_select"></div>
                <input type="text" class="m-input" readonly="true"value="米币数量" id="J_selectthree_real_select_value"/>
                <input type="hidden" name="num_or_time1[]" id="J_selectthree_real_select_code" value="0"/>
            </div>
            <div class="rsess-row" id="J_inputthree_select" style="clear:none;margin-bottom:-5px;display:none;">
	            <div class="reg-div">
	                  <input name="num_or_time2[]" type="text" id="J_inputthree_value" class="reg-sec">
	            </div><span style="line-height:43px;">米币</span>
            </div>
       </div>
       <div class="comm-error ps-error" id="for_pay_mimi_three"><span></span></div>
       <div class="reg-row" id="J_paywaythree_mmk" style="display:none;">
            <label class="label">请输入充值的米米卡号：</label>
            <div class="reg-div">
                <input type="text" class="reg-input" id="J_paywaytwommk" name="pay_mimi[]"/>
            </div>
       </div>
       <div class="comm-error ps-error" id="for_pay_phone_three"><span></span></div>
       <div class="reg-row" id="J_paywaythree_phone" style="display:none;">
            <label class="label">请输入手机号：</label>
            <div class="reg-div">
                <input type="text" class="reg-input" id="J_paywaythreeemail" name="pay_mobile[]"/>
            </div>
       </div>
       <div class="reg-tip-foot clear" style="margin-left: 204px;">
             <span class="green f12 pointer" id="J_add_input">填写更多&#43;</span>
        </div>
	  </div>
       <div class="a-botton hack-list" id="J_prev" style="margin-left:370px;">
             <span class="f14">上一步</span>
       </div>
        <div class="a-botton hack-list" style="margin-left:134px;" id="button">
             <span class="f14">下一步</span>
       </div>
    </div>
</div>
</form>
<div class="one" id="J_paywayone_real_select">
	<div class="option" name="0">充值方式</div>
		    <div class="option" name="16">米米卡</div>
		    <div class="option" name="18a">手机短信-中国移动</div>
		    <div class="option" name="18b">手机短信-中国电信</div>
		    <div class="option" name="25">实体卡-骏网一卡通</div>
		    <div class="option" name="20">实体卡-天下通一卡通</div>
		    <div class="option" name="15a">固定电话-江苏电信电话</div>
		    <div class="option" name="15b">手机充值卡-移动神州行充值卡（捷迅）</div>
		    <div class="option" name="15c">手机充值卡-移动神州行充值卡（易宝）</div>
		    <div class="option" name="15d">手机充值卡-联通全国一卡充充值卡</div>
		    <div class="option" name="28">固定电话-电信易充（方式二）</div>
		    <div class="option" name="13">银行卡</div>
		    <div class="option" name="29">固定电话-电信易充（方式一）</div>
		    <div class="option" name="30">固定电话-声讯电话</div>
		    <div class="option" name="19">固定电话-Ebilling电话</div>
		    <div class="option" name="11">支付宝</div>
		    <div class="option" name="12">财付通</div>
		    <div class="option" name="22">实体卡-盛大娱乐卡</div>
		    <div class="option" name="26a">手机充值卡-电信充值卡</div>
		    <div class="option" name="26b">拨打手机-移动手机</div>
		    <div class="option" name="26c">拨打手机-电信手机</div>
		    <div class="option" name="26d">拨打手机-江苏电信手机</div>
		    <div class="option" name="27">固定电话-南京电信电话</div>
		    <div class="option" name="80">固定电话-浙江电信电话</div>
		    <div class="option" name="82">空中充值</div>
		    <div class="option" name="84a">宽带充值-上海电信</div>
		    <div class="option" name="84b">宽带直充-江苏电信</div>
		    <div class="option" name="84c">宽带直充-其他地区</div>
	</div>
<div class="one" id="J_paywaytwo_real_select">
	<div class="option" name="0">充值方式</div>
		    <div class="option" name="16">米米卡</div>
		    <div class="option" name="18a">手机短信-中国移动</div>
		    <div class="option" name="18b">手机短信-中国电信</div>
		    <div class="option" name="25">实体卡-骏网一卡通</div>
		    <div class="option" name="20">实体卡-天下通一卡通</div>
		    <div class="option" name="15a">固定电话-江苏电信电话</div>
		    <div class="option" name="15b">手机充值卡-移动神州行充值卡（捷迅）</div>
		    <div class="option" name="15c">手机充值卡-移动神州行充值卡（易宝）</div>
		    <div class="option" name="15d">手机充值卡-联通全国一卡充充值卡</div>
		    <div class="option" name="28">固定电话-电信易充（方式二）</div>
		    <div class="option" name="13">银行卡</div>
		    <div class="option" name="29">固定电话-电信易充（方式一）</div>
		    <div class="option" name="30">固定电话-声讯电话</div>
		    <div class="option" name="19">固定电话-Ebilling电话</div>
		    <div class="option" name="11">支付宝</div>
		    <div class="option" name="12">财付通</div>
		    <div class="option" name="22">实体卡-盛大娱乐卡</div>
		    <div class="option" name="26a">手机充值卡-电信充值卡</div>
		    <div class="option" name="26b">拨打手机-移动手机</div>
		    <div class="option" name="26c">拨打手机-电信手机</div>
		    <div class="option" name="26d">拨打手机-江苏电信手机</div>
		    <div class="option" name="27">固定电话-南京电信电话</div>
		    <div class="option" name="80">固定电话-浙江电信电话</div>
		    <div class="option" name="82">空中充值</div>
		    <div class="option" name="84a">宽带充值-上海电信</div>
		    <div class="option" name="84b">宽带直充-江苏电信</div>
		    <div class="option" name="84c">宽带直充-其他地区</div>
	</div>
<div class="one" id="J_paywaythree_real_select">
	<div class="option" name="0">充值方式</div>
		    <div class="option" name="16">米米卡</div>
		    <div class="option" name="18a">手机短信-中国移动</div>
		    <div class="option" name="18b">手机短信-中国电信</div>
		    <div class="option" name="25">实体卡-骏网一卡通</div>
		    <div class="option" name="20">实体卡-天下通一卡通</div>
		    <div class="option" name="15a">固定电话-江苏电信电话</div>
		    <div class="option" name="15b">手机充值卡-移动神州行充值卡（捷迅）</div>
		    <div class="option" name="15c">手机充值卡-移动神州行充值卡（易宝）</div>
		    <div class="option" name="15d">手机充值卡-联通全国一卡充充值卡</div>
		    <div class="option" name="28">固定电话-电信易充（方式二）</div>
		    <div class="option" name="13">银行卡</div>
		    <div class="option" name="29">固定电话-电信易充（方式一）</div>
		    <div class="option" name="30">固定电话-声讯电话</div>
		    <div class="option" name="19">固定电话-Ebilling电话</div>
		    <div class="option" name="11">支付宝</div>
		    <div class="option" name="12">财付通</div>
		    <div class="option" name="22">实体卡-盛大娱乐卡</div>
		    <div class="option" name="26a">手机充值卡-电信充值卡</div>
		    <div class="option" name="26b">拨打手机-移动手机</div>
		    <div class="option" name="26c">拨打手机-电信手机</div>
		    <div class="option" name="26d">拨打手机-江苏电信手机</div>
		    <div class="option" name="27">固定电话-南京电信电话</div>
		    <div class="option" name="80">固定电话-浙江电信电话</div>
		    <div class="option" name="82">空中充值</div>
		    <div class="option" name="84a">宽带充值-上海电信</div>
		    <div class="option" name="84b">宽带直充-江苏电信</div>
		    <div class="option" name="84c">宽带直充-其他地区</div>
	</div>
<div id="J_card_real_select"  class="one">
		  <div class="option" name="1">摩尔庄园</div>
		  <div class="option" name="6">功夫派</div>
		  <div class="option" name="7">摩尔勇士</div>
		  <div class="option" name="5">小花仙</div>
		  <div class="option" name="10">约瑟传说</div>
		  <div class="option" name="2">赛尔号</div>
	</div>
<div class="one" id="J_game_useone_real_select">
	<div class="option selected" name="0">消费产品</div>
</div>
<div class="one"  id="J_game_usetwo_real_select">
	<div class="option selected" name="0">消费产品</div>
</div>
<div class="one"  id="J_game_usethree_real_select">
	<div class="option selected" name="0">消费产品</div>
</div>
<div name="game_card" class="one" id="J_game_card_real_select">
	<div class="option" name="0">相应的卡</div>
</div>
<div class="one" id="J_selectone_real_select">
	<div class="option selected" name="0">米币数量</div>
</div>
<div class="one" id="J_selecttwo_real_select">
	<div class="option selected" name="0">米币数量</div>
</div>
<div class="one" id="J_selectthree_real_select">
	<div class="option selected" name="0">米币数量</div>
</div>





<div class="big-body">
    <div class="big-content big-back">
       <div class="lit-top">
           <span class="tip">密码申诉</span>
       </div>
       <div class="step-five"></div>
<form autocomplete="off" id="form2" name="form2" method="post" action="/appeal/otherInfo">
   <div class="newgame-row" id="J_lianyun_1">
	  <div class="comm-error ps-error" id="for_pay_pwd"><span></span></div>
       <div class="reg-row">
           <label class="label">备注内容：</label>
              <div class="reg-text">
                 <span class="textarea-tip" id="J_con_tip_1">
                 可任意填写关于您帐号的其他信息，越详细越有助于申诉成功
                 </span>
                <textarea class="reg-area" name="otherinfo"></textarea>
              </div>
       </div>
    <div class="a-botton hack-list" id="button">
         <span class="f14">下一步</span>
   </div>
   </div>
</form>
</div>




<div class="min-body">
    <div class="min-content back">
       <div class="lit-top">
           <span class="tip">密码申诉</span>
       </div>
       <div class="step-five"></div>
       <div class="reg-box" style="margin-left:278px;">
           <div class="reg-succ">
               <div class="big-icon hack-list"></div>
           <div class="succ-tip hack-list">
               <span class="fb">帐号<span class="orange">36207085</span>密码申诉已受理</span><br/>我们将在<span class="orange">12小时</span>内处理完毕，并通过邮箱<span class="orange">hd****@163.com</span>将结果通知您。</div>
           </div>
       <div class="a-botton" id="J_go_back">
             <span class="f14">确定</span>
       </div>
       </div>
    </div>
 </div>

<?php echo $this->load->view($this->prefix . '/footer'); ?>