
<link href="<?php echo $this->staticUrl; ?>newfront/kf/3/css/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="<?php echo $this->staticUrl; ?>newfront/kf/3/js/kefu.js"></script>
<!--在线客服Begin-->
<div id="floatTools" class="rides-cs">
	<div class="floatL">
		<a style="display: block" id="aFloatTools_Show" class="btnOpen" title="查看在线客服" onclick="javascript:$('#divFloatToolsView').animate({width: 'show', opacity: 'show'}, 'normal',function(){ $('#divFloatToolsView').show();kf_setCookie('RightFloatShown', 0, '', '/', 'www.shopnc.net'); });$('#aFloatTools_Show').attr('style','display:none');$('#aFloatTools_Hide').attr('style','display:block');" href="javascript:void(0);">
		展开</a>
		<a style="display: none" id="aFloatTools_Hide" class="btnCtn" title="关闭在线客服" onclick="javascript:$('#divFloatToolsView').animate({width: 'hide', opacity: 'hide'}, 'normal',function(){ $('#divFloatToolsView').hide();kf_setCookie('RightFloatShown', 1, '', '/', 'www.shopnc.net'); });$('#aFloatTools_Show').attr('style','display:block');$('#aFloatTools_Hide').attr('style','display:none');" href="javascript:void(0);">
		收缩</a> </div>
	<div id="divFloatToolsView" class="floatR" style="display: none">
		<div class="cn">
			<h3 class="titZx">在线QQ</h3>
			<ul>
				<li>
<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2978216678&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:2978216678:53" alt="点击这里给我发消息" title="点击这里给我发消息"/></a>
				</li>
			</ul>
			<h3>诺瓦玩家群</h3>
			<ul>
				<li><a target="_blank" href="http://shang.qq.com/wpa/qunwpa?idkey=97c38294432b2014789ed7270b42465539b04e76a7ccd9ad0c5bb550cb114049"><img border="0" src="http://pub.idqqimg.com/wpa/images/group.png" alt="诺瓦奇兵" title="诺瓦奇兵"></a></li>
			</ul>
		</div>
	</div>
</div>
