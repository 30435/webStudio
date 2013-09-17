function setPayment(paymentStr) //paymentCode, paymentName, description)
{
	$("#paymentLists>li").attr("class", "");
	$("#" + paymentStr.code + 'PaymentCode').attr("class", "cur");	
	$("#paymentName").html(paymentStr.name);
	$("#paymentDescription").html(paymentStr.description);

	$("#paymentCode").val(paymentStr.code);
	$("#paymentRate").val(paymentStr.rate);
	$("#payTypeSelect").show();

	if (paymentStr.code == 'myself') {
		//$('#payButton').attr('href', 'javascript: payChange();void(0);');
	}
}

function paysubmit()
{
	var paymentCode = $('#paymentCode').val();
	var paymentRate = $('#paymentRate').val();
	var username = $('#username').val();
	var userid = $('#userid').val();
	var confirmusername = $('#confirmusername').val();
	var money = $('#money').val();
	var payType = $("#payType").val();
	var paymonthId = $("#paymonthId").val();
	var webgameCode = $("#webgameCode").val();
	var serverId = $("#serverId").val();
	var serverRole = $("#serverRole").val();

	//alert("paymentCode=" + paymentCode + '&paymentRate=' + paymentRate + '&username=' + username + '&getuserid=' + getuserid + '&payuserid=' + payuserid + '&money=' + money);
	$.ajax({
		type: "post", 
		url: payUrl + 'frontpay/pay',
		data: "paymentCode=" + paymentCode + '&paymentRate=' + paymentRate + '&username=' + username + '&userid=' + userid + '&payType=' + payType + '&money=' + money + '&webgameCode=' + webgameCode + '&serverId=' + serverId + '&serverRole=' + serverRole + '&paymonthId=' + paymonthId,
			  
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
	var elems = new Array('username', 'username2');
	for (var i = 0; i < elems.length; i++) {
		var validvalue = $("#" + elems[i] + 'valid').val();
		var cur_val = $("#" + elems[i]).val();
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

	var money = $('#money').val();
	var checkmoneyResult = checkmoney(money);
	if (checkmoneyResult == false) {
		$('#moneynote').show().children('span').text("请输入1到50000的整数");
		return ;
	}

	var payType = $("#payType").val();
	switch (payType) {
		case 'topaymonth':
			break;
		case 'towebgame':
			var webgameCode = $("#webgameCode").val();
			var serverId = $("#serverId").val();
			if (webgameCode == '' || serverId == 0)	{
				$('#serverIdnote').show().children('span').text("游戏信息有误！");
				return ;
			}
			
			checkServerUser(username, serverId);
			var serverUser = $("#serverUser").val();
			if (serverUser == "no")	{
				return ;
			}
			$("#serverIdnote").hide();
			break;
	}

	$("#changeForm").submit();
	return ;
}

function checkServerUser()
{
	var username = $("#username").val();
	var serverId = $("#serverId").val();

	if (serverId == '' || username == '') {
		return true;
	}
	$.ajax({
       	type: "get",		//使用get方法访问后台  
       	dataType: "jsonp",	//返回json格式的数据  
		jsonp:"callback",
       	url: webgameUrl + 'frontgame/getServerUser/',	//要访问的后台地址  
		data:{"serverId": serverId, "username": username},
		async: false,
       	success: function(data){
			var userExist = data.user;
			if (userExist == 'yes') {
				$("#serverUser").val("yes");
			} else {
				$("#serverUser").val("no");
			}
       	}		     
	});
	var serverUser = $("#serverUser").val();
	if (serverUser == "yes") {
		return true;
	} else {
		return false;
	}
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

function selectBankCode(bankCode)
{
	$("#galleryCode").val(bankCode);
}
