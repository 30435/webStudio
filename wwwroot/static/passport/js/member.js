function selectFast()
{
	$("#haveEmail").val("no");
	$("#haveUsername").val("no");
	
	$("#selectFast").addClass("cur");
	$("#selectUsername").removeClass("cur");
	$("#selectEmail").removeClass("cur");
	$("#registerWithEmail").hide();
	$("#registerWithUsername").hide();
}

function selectSelf()
{
	$("#haveUsername").val("yes");
	$("#haveEmail").val("no");

	$("#selectFast").removeClass("cur");
	$("#selectUsername").addClass("cur");
	$("#selectEmail").removeClass("cur");		
	$("#registerWithUsername").show();
	$("#registerWithEmail").hide();
}

function selectEmail()
{
	$("#haveEmail").val("yes");

	$("#selectFast").removeClass("cur");
	$("#selectUsername").removeClass("cur");
	$("#selectEmail").addClass("cur");	
	$("#registerWithEmail").show();
	$("#registerWithUsername").hide();
}

function selectRealName()
{	
	$("#haveRealName").val("yes");
	$("#selectRealNameBar").hide();
	$("#selectNoRealNameBar").show();
	$("#registerWithRealName").show();
}

function selectNoRealName()
{
	$("#haveRealName").val("no");
	$("#selectRealNameBar").show();
	$("#selectNoRealNameBar").hide();
	$("#registerWithRealName").hide();
}

function register()
{
	var haveEmail = $("#haveEmail").val();
	var haveRealName = $("#haveRealName").val();
	var haveUsername = $("#haveUsername").val();
	var elems = new Array("password", "password2", "seccode");
	if (haveUsername == "yes") {
		elems = elems.concat("username");
	}
	if (haveEmail == "yes") {
		elems = elems.concat("email");
	}
	if (haveRealName == "yes") {
		elems = elems.concat("truename", "idcard");
	}
alert(elems);
	var validvalue = "";
	for (var i = 0; i < elems.length; i++) {
		validvalue = $("#" + elems[i] + "tip").val();
		if (validvalue == "yes") {
			continue;
		} else if (validvalue == "no") {
			$("#dosubmit").val("");
			$("#" + elems[i]).val("");
			$("#" + elems[i]).focus();
			$("#" + elems[i]).css('opacity','1');
			$("#" + elems[i] + "note").show().children("span").text("请输入有效信息！");
			return false;
		}
	}

	$("#dosubmit").val("yes");
	$("#registerForm").submit();
	return true;
}

function checkusername(username)
{
	if (username == '') {
		$('#usernamenote').show().children('span').text('请输入账号');
		$("#usernametip").val("no");
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

				if (userid > 1) {
					$('#usernamenote').show().children('span').text("帐号已存在，请选择别的账号");
					//$('#username').val('');
					$("#usernametip").val("no");
				} else {
					$("#usernametip").val("yes");
					$("#usernamenote").hide();
					//$("#usernamenoteRight").html('<i class="ico ico_success_16"></i>');
				}
			}
		});
	}
}

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
	var elems = new Array('oldpassword', 'password', 'password2');

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

	$("#dosubmit").val("yes");
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

function checkpassword(password)
{
	$("#password").css('opacity','1');
	var oldpassword = $("#oldpassword").val();
	if (password == '') {
		$("#passwordnote").show().children('span').text("密码不能为空！");
		$("#passwordtip").val("no");
		$("#password").css('opacity','0.58');
		return false;
	} else if (password == oldpassword) {
		$("#passwordnote").show().children('span').text("新密码不能与旧密码相同！");
		$("#passwordtip").val("no");
		$("#password").css('opacity','0.58');
		return false;
	} else {
		var passwordlength = getStrLen(password);
		if (passwordlength < 6 || passwordlength > 20) {
			$("#passwordnote").show().children('span').text("密码长度应为6-20个字符！");
			$("#passwordtip").val("no");
			return false;
		}
	}

	$("#passwordnote").hide();
	$("#passwordtip").val("yes");
	return true;
}

function checkpassword2(password2)
{
	$("#password2").css('opacity','1');
	var password = $("#password").val();
	if (password2 == password) {
		checkpassword(password2);
	} else {
		$("#password2note").show().children("span").text("您两次输入的密码不一致符！");
		$("#password2tip").val("no");
		return false;
	}

	$("#password2note").hide();
	$("#password2tip").val("yes");
	return true;
}

function checkemail(email)
{
	$("#email").css('opacity','1');
	if (email == '') {
		//$("#"+id).show().children('span').text(msg);
		$("#emailnote").show().children('span').text("邮箱不能为空！");
		$("#emailtip").val("no");
		//$("#email").css('opacity','0.58');
		return false;
	} else {
		$.ajax({
			url: passportUrl + 'index/checkEmail/',
			data: "email=" + email,
			async: false,
			cache: false,
			type: 'POST',
			success: function(html) {
				if (html == 1) {
					//$("#emailnote").show().children("span").text("恭喜，邮箱可以使用！");
					$("#emailtip").val("yes");
					return true;				
				} else {
					$("#emailnote").show().children("span").text(html);
					$("#emailtip").val("no");
					return false;
				}
			}
		});	
	}
}

function checktruename(truename)
{
	if (truename == '') {
		$("#truenamenote").html("<b class='red'>真实姓名不能为空！</b>");
		$("#truename").val("no");
		return false;
	} else {
		var truenamelength = getStrLen(truename);
		if (truenamelength < 2 || truenamelength > 20) {
			$("#truenamenote").html("<b class='red'>姓名长度应为2-20个字符！</b>");
			$("#truename").val("no");
			return false;
		}
	}
	$("#truenamenote").html("<b style='color:#009900'>姓名符合规范！</b>");
	$("#truename").val("yes");
	return true;
}

function checkidcard(idcard)
{
	var aCity = {
			11:"北京",12:"天津",13:"河北",14:"山西",15:"内蒙古",21:"辽宁",22:"吉林",23:"黑龙江",31:"上海",32:"江苏",33:"浙江",
			34:"安徽",35:"福建",36:"江西",37:"山东",41:"河南",42:"湖北",43:"湖南",44:"广东",45:"广西",46:"海南",50:"重庆",51:"四川",
			52:"贵州",53:"云南",54:"西藏",61:"陕西",62:"甘肃",63:"青海",64:"宁夏",65:"新疆",71:"台湾",81:"香港",82:"澳门",91:"国外"
	}; 
	
	var iSum=0;
	var info="";
	if (!/^\d{17}(\d|x)$/i.test(idcard)) {
		$("#idcardnote").html("<b class='red'>请输入18位的有效身份证号！</b>");
		$("#idcard").val("no");
		return false; 
	}
	var dateObj = new Date()
	var currentYear = dateObj.getFullYear();
	idcard = idcard.replace(/x$/i, "a"); 
	var birthday = idcard.substr(6,4) + "-" + Number(idcard.substr(10,2)) + "-" + Number(idcard.substr(12,2)); 
	var userAge = currentYear - idcard.substr(6,4);
	if (userAge < 18) {
		var message='您还未成年,暂不能注册';
			$("#idcardnote").html("<b class='red'>"+message+"</b>");
			$("#idcard").val("no");
		return false; 	
	}else{
		var a=idcard.substr(17,1)%2;
		if(a) $("#genderid").attr("value","1");
		else  $("#genderid").attr("value","2");
		$("#birthdayid").attr("value",birthday);
		$("#showmessagesfz").html("");	
	}
		var message='身份证号码验证通过';
		$("#idcardnote").html("<font color='#009900'><b>"+message+"<b></font>");
		$("#idcard").val("yes");	
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

function selectOperation(operation)
{
	var elems = new Array('baseInfo', 'changePassword', 'protectPassword', 'preventWallow','chargeRecord');
	for (var i = 0; i < elems.length; i++) {
		$("#" + elems[i] + 'Tab').attr("class", "");
		$("#" + elems[i]).hide();
	
	}
	
	$("#" + operation).show();
	$("#" + operation + 'Tab').attr('class', 'box_active');
	if (operation != 'chargeRecord') {
		$("#chargeRecordTab").attr('class', 'bgnone');
	}
}


function cheddckidcard(idcard) 
{
	//身份证号码为15位或者18位，15位时全为数字，18位前17位为数字，最后一位是校验位，可能为数字或字符X。
    idcart = idcard.toUpperCase(); 
            
    if (!(/(^\d{15}$)|(^\d{17}([0-9]|X)$)/.test(idcard))) {     
        alert('输入的身份证号长度不对，或者号码不符合规定！/n15位号码应全为数字，18位号码末位可以为数字或X。');              
        return false;         
    } 
    //校验位按照ISO 7064:1983.MOD 11-2的规定生成，X可以认为是数字10;下面分别分析出生日期和校验位
    var len, re; 
    len = idcard.length; 
    if (len == 15) {
        re = new RegExp(/^(\d{6})(\d{2})(\d{2})(\d{2})(\d{3})$/);
        var arrSplit = idcard.match(re);  //检查生日日期是否正确
        var dtmBirth = new Date('19' + arrSplit[2] + '/' + arrSplit[3] + '/' + arrSplit[4]);
        var bGoodDay; 
        bGoodDay = (dtmBirth.getYear() == Number(arrSplit[2])) && 
        	((dtmBirth.getMonth() + 1) == Number(arrSplit[3])) && 
        	(dtmBirth.getDate() == Number(arrSplit[4]));
        if (!bGoodDay) {
            alert('输入的身份证号里出生日期不对！');            
            return false;
        } else { 
        	//将15位身份证转成18位 //校验位按照ISO 7064:1983.MOD 11-2的规定生成，X可以认为是数字10。        
            var arrInt = new Array(7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2);         
            var arrCh = new Array('1', '0', 'X', '9', '8', '7', '6', '5', '4', '3', '2');      
            var nTemp = 0, i;            
            idcard = idcard.substr(0, 6) + '19' + idcard.substr(6, idcard.length - 6);           
            for(i = 0; i < 17; i ++) {                 
                nTemp += idcard.substr(i, 1) * arrInt[i];        
            }
            idcard += arrCh[nTemp % 11];
            return true;
        }
    }
    
    if (len == 18) {
        re = new RegExp(/^(\d{6})(\d{4})(\d{2})(\d{2})(\d{3})([0-9]|X)$/);
        var arrSplit = idcard.match(re);  //检查生日日期是否正确
        var dtmBirth = new Date(arrSplit[2] + "/" + arrSplit[3] + "/" + arrSplit[4]);
        var bGoodDay; 
        bGoodDay = (dtmBirth.getFullYear() == Number(arrSplit[2])) && 
        	((dtmBirth.getMonth() + 1) == Number(arrSplit[3])) && 
        	(dtmBirth.getDate() == Number(arrSplit[4]));
        if (!bGoodDay) {
            alert(dtmBirth.getYear());
            alert(arrSplit[2]);
            alert('输入的身份证号里出生日期不对！');
            return false;
        }
        else { 
        	//检验18位身份证的校验码是否正确。 //校验位按照ISO 7064:1983.MOD 11-2的规定生成，X可以认为是数字10。
            var valnum;
            var arrInt = new Array(7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2);
            var arrCh = new Array('1', '0', 'X', '9', '8', '7', '6', '5', '4', '3', '2');
            var nTemp = 0, i;
            for(i = 0; i < 17; i ++) {
                nTemp += idcard.substr(i, 1) * arrInt[i];
            }
            valnum = arrCh[nTemp % 11];
            if (valnum != idcard.substr(17, 1)) {
                alert('18位身份证的校验码不正确！应该为：' + valnum);
                return false;
            }
            return true;
        }
    } 
    return false;
}

