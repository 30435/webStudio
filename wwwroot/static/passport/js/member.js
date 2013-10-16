
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