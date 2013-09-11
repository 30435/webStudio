function setPayment(paymentStr) //paymentCode, paymentName, description)
{
	$("#paymentLists>li").attr("class", "");
	$("#" + paymentStr.code + 'PaymentCode').attr("class", "cur");	
	$("#paymentName").html(paymentStr.name);
	$("#paymentDescription").html(paymentStr.description);

	$("#paymentCode").val(paymentStr.code);
	$("#paymentRate").val(paymentStr.rate);
	$("#payTypeSelect").show();
}

function setWebgame(webgameStr)
{
	$("#paytoType").text(webgameStr.name + ' ' + webgameStr.coin_name);
	if (webgameStr.webgame_type == '3')	{
		$("#webgameInfo").show();
	}
}

function setPaymonth(paymonthStr)
{
	$("#paytoType").text(paymonthStr.name);
	$("#moneyInfo").hide();
	$("#paymonthInfo").show();
}

function checkusername(username)
{
	if (username == '') {
		$('#usernamenote').show().children('span').text('请输入账号');
		$("#usernamevalid").val("no");
		return false;
	} else {
		$.ajax({
			type: "get",		//使用get方法访问后台  
			dataType: "jsonp",	//返回json格式的数据  
			jsonp:"callback",
			url: passportUrl + 'index/getUserid/?username=' + username,	//要访问的后台地址  
			//data:{"opp":"main"},
			async: false,
			success: function(html) {
				var userid = parseInt(html.userid);
				if (userid < 1) {
					$('#usernamenote').show().children('span').text("帐号不存在");
					//$('#username').val('');
					$("#usernamevalid").val("no");
				} else {
					$("#getuserid").val(userid);
					$("#usernamevalid").val("yes");
					$("#usernamenote").hide();
					$("#usernamenoteRight").html('<i class="ico ico_success_16"></i>');
				}
			}
		});
	}
}

function checkusername2(username2)
{
	var username = $("#username").val();

	if (username != username2) {
		$('#username2note').show().children('span').text("您输入的账户不一致");
		$("#username2valid").val("no");
		return false;
	} else {
		$('#username2note').hide();
		$('#username2noteRight').html('<i class="ico ico_success_16"></i>');
		$("#username2valid").val("yes");
		return true;
	}
}

function checkmoney(money)
{
	var numberPattern = "^[1-9]*[1-9][0-9]*$";//^((\\d+)|(0+))$";
	var isNumber = money.match(numberPattern);
	if (isNumber == null || isNaN(money) || Number(money) < 1 || Number(money) > 50000) {
		$('#moneynote').show().children('span').text("请输入1到50000的整数");
		$("#money").val();
		$("#moneyShow").text(0);
		return false;
	} else {
		$("#money").val(money);
		$('#moneynote').hide()
		$('#moneynoteRight').html('<i class="ico ico_success_16"></i>');
		$("#moneyShow").text(money);
	}
	
	
	return true;
}

function paysubmit()
{
	var paymentCode = $('#paymentCode').val();
	var paymentRate = $('#paymentRate').val();
	var username = $('#username').val();
	var getuserid = $('#getuserid').val();
	var payuserid = $('#payuserid').val();
	var confirmusername = $('#confirmusername').val();
	var money = $('#money').val();
	var checkmoneyResult = checkmoney(money);
	if (checkmoneyResult == false) {
		$('#moneynote').show().children('span').text("请输入1到50000的整数");
		return ;
	}

	//alert(username + '--' + confirmusername + '--' + money + '--' + paymentCode + '--' + '--' + getuserid + '--' + payuserid);
	
	var elems = new Array('username', 'username2');
	for (var i = 0; i < elems.length; i++) {
		var validvalue = $("#" + elems[i] + 'valid').val();
		//先检查当前的值
		var cur_val = $("#" + elems[i]).val();
		//alert(validvalue);
		if (validvalue == 'yes') {
			continue;
		} else if (validvalue == 'no'|| cur_val =='') {
			$("#dosubmit").val("");
			$("#" + elems[i]).val("");
			$("#" + elems[i]).focus();
			$("#" + elems[i] + 'note').show().children('span').text('请输入有效信息！');
			return false;
		}
	}
	//alert("paymentCode=" + paymentCode + '&paymentRate=' + paymentRate + '&username=' + username + '&getuserid=' + getuserid + '&payuserid=' + payuserid + '&money=' + money);
	$.ajax({
		type: "post", 
		url: payUrl + 'frontpay/pay',
		data: "paymentCode=" + paymentCode + '&paymentRate=' + paymentRate + '&username=' + username + '&getuserid=' + getuserid + '&payuserid=' + payuserid + '&money=' + money,
			  
		success: function (data) {
			if (data == 'error') {
				var dialogError = window.top.art.dialog({time:3, title: '我是对话框', content: '充值信息有误，请重新填写！', lock: true});
				dialogError.content('充值信息有误，请重新填写！');
			} else {
				var dialog = window.top.art.dialog({id: 'payWindow123',title: false, lock: true});
				dialog.content(data);
			}
		},
		cache: false
	}); 
	
	return ;
}

function payChange()
{
	var webgameCode = $('#webgameCode').val();
	var serverCode = $('#serverCode').val();
	var serverRole = $('#serverRole').val();
	var username = $('#username').val();
	var userid = $('#getuserid').val();
	var confirmusername = $('#confirmusername').val();
	var money = $('#money').val();
//alert(webgameCode + '--' + serverCode + '--' + username + '--' + confirmusername + '--' + money);
	var checkChangeMoney = checkmoneychange(money)
	if (checkChangeMoney == false) {
		alert('请指定有效的金额');
		return ;
	}
	
	$('#webgamenote').val('');
	$('#servernote').html('');
	if (webgameCode == '') {
		$('#webgamenote').html('<b style="color:#cc0000">请选择游戏！</b>');
		$("#webgameName").focus();
		return false;
	}
	if (serverCode < 1) {
		$("#serverName").focus();
		$('#servernote').html('<b style="color:#cc0000">请选择服务器！</b>');
		return false;
	}

	var elems = new Array('username', 'confirmusername');//, 'ordermoney');//, 'mobile');
	for (var i = 0; i < elems.length; i++) {
		validvalue = $("#" + elems[i] + 'valid').val();
		//alert(validvalue);
		if (validvalue == 'yes') {
			continue;
		} else if (validvalue == 'no') {
			$("#dosubmit").val("");
			$("#" + elems[i]).val("");
			$("#" + elems[i]).focus();
			$("#" + elems[i] + 'note').html('<b style="color:#cc0000">请输入有效信息！</b>');
			return false;
		}
	}
	var serverUser = $('#serverUser').val();
	if (serverUser == 'no') {
		$("#usernamenote").html('<font style="color:#cc0000; left:180px;top:0;">没有创建游戏角色</font>');	
		return false;
	}
	var haveRole = $('#haveRole').val();
	if (haveRole == 'yes' && serverRole == '') {
		$("#serverrolenote").html('<font style="color:#cc0000; float:left; margin-left:5px;">请选择游戏角色</font>');	
		return false;
	}	
	$("#c_webgameCode").val(webgameCode);
	$("#c_serverId").val(serverCode);
	$("#c_serverRole").val(serverRole);
	$("#c_username").val(username);
	$("#c_money").val(money);
	$("#c_userid").val(userid);
	$("#changeForm").submit();
	return ;
}

function confirmPay()
{
	var orderStr = $('#orderStr').val();
	alert(payUrl + 'frontpay/confirmPay?orderStr=' + orderStr);
	$.ajax({    
		type: "post", 
		url: payUrl + 'frontpay/confirmPay',
		data: "orderStr=" + orderStr,
		//async: false,
		//data: {"method":"measuring"},
		//dataType: "json",/*这句可用可不用，没有影响*/
		//contentType: "application/html; charset=utf-8",    
		success: function (data) {
			if (data == '1') {
				var payContent =
					'<style type="text/css">' +
					'.payfloatdiv{ width:326px; height:200px;}' +
					'.payfloatdiv h1{ font-family:"Microsoft Yahei"; font-size:14px; text-align:center; padding:15px 0; color:#C00;}' +
					'.payfloatdiv p{ text-align:center; font-size:12px; line-height:24px; padding:15px 0 25px;}' +
					'.payfloatdiv a{ display:inline-block; font-size:12px; padding:0 5px; border:1px solid #C00; color:#C00; height:24px; line-height:24px; text-decoration:none; text-align:center;}' +
					'.payfloatdiv a:link{ color:#C00;}' +
					'</style>' +
						'<div class="payfloatdiv">' +
					  '<h1>请您在新打开的支付页面上完成付款充值！</h1>' +
					  '<p><strong>付款完成前请不在关闭或刷新此窗口。</strong><br />' +
					'完成付款后请根据您的情况点击下面的按钮。</p>' +
					'<div align="center"><a href="' + passportUrl + '">查看充值结果</a>&nbsp;&nbsp;<a href=\'javascript:window.open("http://www.53kf.com/company.php?arg=wgsmtiger&style=1","_blank","height=473,width=703,fullscreen=3,top=200,left=200,status=yes,toolbar=no,menubar=no,resizable=no,scrollbars=no,location=no,titlebar=no,fullscreen=no");void(0);\'>付款遇到问题</a>&nbsp;&nbsp;<a href="javascript: art.dialog.list[\'payWindow123\'].close();void(0);">返回</a>' +
					'</div>' +
					'</div>';
				$('#confirmPayButton').attr('href', 'javascript:void();');//href('javascript:void();');
				//$("#sendForm").submit();
				$('#payConfirmWindow').html(payContent);
			}
		},
		cache: false
	}); 
	return ;
}

function checkmobile(mobile)
{
	//mobile = $("#mobile").val();
	if (mobile=='') {
		$('#mobilenote').html("<b style='color:#cc0000'>请输入有效的手机号！</b>");
		$("#mobilevalid").val("no");
		return false;
	}

	mobileReg = /^([0-9]{11})?$/;
	checkResult = mobile.search(mobileReg);

	if (checkResult == -1) {
		$('#mobilenote').html("<b style='color:#cc0000'>请输入的手机号无效！</b>");
		$("#mobilevalid").val("no");
		return false;
	}else{
		$('#mobilenote').html("<b style='color:#009900'>手机号有效！</b>");
		$("#mobilevalid").val("yes");
		return true;	
	}
}

function selectBankCode(bankCode)
{
	$("#galleryCode").val(bankCode);
}
