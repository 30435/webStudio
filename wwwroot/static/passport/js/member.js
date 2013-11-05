
function login()
{
	username = $("#username").val();
	password = $("#password").val();
	if (username == '' || password == '') {
		$("#usernamenote").show().children("span").text("用户名和密码不能为空！");
		return false;
	}

	$("#loginform").submit();
	return true;
}

function loginusername(username)
{
	$("#password").css('opacity','1');
	if (username == '') {
		$("#usernamenote").show().children("span").text("请输入用户名！");
		$("#usernametip").val("no");
		return false;
	}
	
	$("#usernametip").val("yes");
	$("#usernamenote").hide();
	return true;
}

function loginpassword(password)
{
	$("#password").css('opacity','1');
	if (password == '') {
		$("#passwordnote").show().children("span").text("请输入密码！");
		$("#passwordtip").val("no");
		return false;
	}

	$("#password").val("yes");
	$("#passwordnote").hide();
	return true;
}

function editpassword()
{
	/*var elems = new Array('oldpassword', 'password', 'password2');

	var validvalue = '';
	for (var i = 0; i < elems.length; i++) {
		validvalue = $("#" + elems[i] + 'tip').val();

		if (validvalue == 'yes') {
			continue;
		} else if (validvalue == 'no') {

			$("#dosubmit").val("");
			$("#" + elems[i]).val("");
			$("#" + elems[i]).focus();
			$("#" + elems[i] + 'note').show().children('span').text("请输入有效信息！");
			return false;
		}
			
	}

	$("#dosubmit").val("yes");*/
	$("#editpasswordform").submit();
	return true;
}

function checkoldpassword(password)
{
	if (password == '') {
		$("#oldpasswordnote").show().children('span').text("旧密码不能为空！");
		$("#oldpasswordtip").val("no");
		return false;
	} 
	
	$("#oldpasswordnote").hide();
	$("#oldpasswordtip").val("yes");
	return true;
}

function checkseccode(seccode)
{
	$("#seccode_img_tip").show();
	$.ajax({
		url: passportUrl + 'index/isValidCode/',
		data: "checkcode=" + seccode + "&isajax=yes",
		async: false,
		cache: false,
		success: function(html) {
			if (html == 'yes') {
				//$("#seccodenote").show().children("span").text("验证码有效！");
				$("#seccodenote").hide();
				$("#seccodetip").val("yes");
				return true;				

			} else {
				$("#seccodenote").show().children("span").text("验证码错误");
				$("#seccodetip").val("no");
				//$("#regcheckcodestr").focus();
				return false;
			}
		}
	});	
}

function getpwdAccount()
{
	var account = $("#account").val();

	if (account == '') {
		$("#accountNote").show().children("span").text("账号信息不能为空！");
		$("#username").val("no");
		return false;
	}

	$.ajax({
		type: "get",		//使用get方法访问后台  
		dataType: "jsonp",	//返回json格式的数据  
		jsonp:"callback",
		url: passportUrl + 'uwebgame/getAccount/?account=' + account,	//要访问的后台地址  
		//data:{"opp":"main"},
		async: false,
		success: function(html) {
			var userid = parseInt(html.userid);
			var accountType = html.accountType;

			if (userid > 1) {
				$("#userid").val(userid);
				$("#accountType").val(accountType);
				$("#form1").submit();
			} else {
				$('#accountNote').show().children('span').text("该账户不存在，请指定正确的账号类型和账号");
				return false;
			}
		}
	});	
}

function getStrLen(str)
{
	var len = 0;
	var cnstrCount = 0; 
	for(var i = 0 ; i < str.length ; i++){
	  if(str.charCodeAt(i)>255)
	   cnstrCount = cnstrCount + 1 ;
	}
	len = str.length + cnstrCount;
	return len;
}