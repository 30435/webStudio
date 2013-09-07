document.domain="2125.com";
if(typeof(gid) == "undefined")
        var gid = 3;
if(typeof(globaluid) == "undefined")
	var globaluid;
if(typeof(globallogin) == "undefined")
	var globallogin;
if(typeof(gamename) == "undefined")
	var gamename = "";
if(typeof(webtop_ad) == "undefined")
	var webtop_ad = "";
function createLoader(src,label,callback){
    var heads = document.getElementsByTagName( 'head' );
    if( !heads.length ){
        return false;
    }
    var head = heads[ 0 ];
    var frame = document.createElement( label );
    frame.setAttribute( 'src', src );
	switch(label){
		case "iframe":
			frame.setAttribute( 'style', 'display:none;' );
			frame.setAttribute( 'id', 'webtop' );
		break;
		case "script":
			frame.setAttribute( 'type', 'text/javascript' );
		break;
		case "link":
			frame.setAttribute( 'href', src );
			frame.setAttribute( 'rel', 'stylesheet' );
			frame.setAttribute( 'type', 'text/css' );
		break;
	}

    head.appendChild( frame );
    frame.onload = function(){
    	if(callback)
		callback();
    }
}
function iframeBack(){
	if(gamename!="thyj"&&gamename!='pmxy'&&gamename!='ddt'&&gamename!='duola'&&gamename!='yuzhou'&&gamename!='renzhe')
		$('body').addClass('body_pt40');
    var iframcont = document.getElementById('webtop').contentWindow.document.getElementById('content').innerHTML;
    $('body').append(iframcont);
    $('#qqfollow').attr('src','http://follow.v.t.qq.com/index.php?c=follow&a=quick&name=taomee2125&style=5&t=1334288651559&f=0');
    $('#qzone').attr('src','http://open.qzone.qq.com/like?url=http%3A%2F%2Fuser.qzone.qq.com%2F1993578879&type=button&width=400&height=30&style=2');
    $('.webtop-login>a').last().attr('href',"http://login.2125.com/webpay/pay/?gid="+gid);
    var imadata = eval($('#tempdata').html());
    var rankarr = new Array();
    var selectimg = new Array();
    for (var key in imadata){
    	rankarr[imadata[key]['thumb_link']] = imadata[key];
    }
    var randomnum = Math.floor(Math.random()*10+1);
    if(randomnum%2==0){
    	selectimg = rankarr[5];
    }else{
    	randomnum = Math.floor(Math.random()*10+1);
    	if(randomnum<5){
			selectimg = rankarr[4];
    	}else if(randomnum<8){
    		selectimg = rankarr[3];
    	}else if(randomnum<10){
    		selectimg = rankarr[2];
    	}else
    		selectimg = rankarr[1];
    }
    if(!selectimg)
    	selectimg = rankarr[5];
        var outlink = selectimg.out_link.replace(/&amp;/g,"&");
    $('#product-ad').attr("src",selectimg.thumb_intro);
    $('.product-ad').attr("href",outlink);
    $('.webtop-big-img-link > img').attr("src",selectimg.thumb);
    $('.webtop-big-img-link').attr("href",outlink);

	var product_ad = $('#product-ad');
	var product_ad_big = $('#webtop-big-img');
	var expand_link = $('#webtop-expand-link');
	var expand_area = $('#webtop-expand-area');
	
	if(window.location.href.indexOf('head.html')==-1 && webtop_ad!=1){
		product_ad.hover(
			function(){
				if(product_ad.css('display') != 'none'){
					product_ad.hide();
					product_ad_big.show();
				}
			},
			function(){
				return false;
			}
		);
		product_ad_big.hover(
			function(){
				return false;
			},
			function(){
				product_ad_big.hide();
				product_ad.show();
			}
		);
		$('#webtop-expand-link,#webtop-expand-area').hover(
			function(){
				expand_area.show();
			},
			function(){
				expand_area.hide();
			}
		);
	}
	function speakerRun(){
		var len = $(".webtop-speaker-list").css("margin-top");
		len     = len.substring(0,len.indexOf("px"));
		len     = len - 20;
		var maxlength = $(".webtop-speaker-list > li").length;
		$(".webtop-speaker-list").animate({ marginTop : len + "px" } , "slow" ,function(){
			if(len <= (2-maxlength*20))
			{
				len = 2;
				$(".webtop-speaker-list").css("margin-top",len+"px");
			}
			setTimeout(speakerRun, 3000);
		});	
	}
	jQuery(function($){
		setTimeout(speakerRun, 3000);
	});
	if(globallogin){
		webtoptologin();
	}else{
		$.ajax({
		  url:'http://login.2125.com/?c=loginses&d=index',
		  type:'GET',
		  dataType:'jsonp',
		  jsonp:'callback',
		  data:{'fatigue':1},
		  success:function(data)
		  {
		      if(data.error === 0)
		      {
		      		globaluid = data.uid;
					webtoptologin();
			  }else{
			  		if(typeof(CsPopup)=="undefined"){
						createLoader('http://res.2125.com/css/comm/webtop.css','link');
						$.getScript('http://res.2125.com/js/CS_Popup_min.js',function(){loginjs()});
					}else{
						loginjs();
					}
			  }
		  }
		});
	}

}
var logincallback;
var loginbox;
function loginjs(){
	if(typeof(logincallback)=="undefined"){
		logincallback = function(data){
			if(data.error!=0){
				$('#CS_Popup_errtip').html(data.info);
				setTimeout("$('#CS_Popup_errtip').html('')",2000);
			}else{
				loginbox.close();
				globaluid = data.uid;
				webtoptologin();
			}
		}
	}
	loginbox = new CsPopup('webtop_login', 'web_login_box',{
	    loginback : 'logincallback'
	});
}
function webtoptologin(){
	var obj = $(".webtop-login span:first-child");
	obj.removeClass('webtop-login-link');
	obj.addClass('webtop-login-after');
	obj.html('欢迎你：<em class="webtop-login-user">'+globaluid+'</em>');
	$(".webtop-login").append('<span class="webtop-login-split">|</span> <a id="other_login_top" class="webtop-login-link">退出</a>');
    $('#other_login_top').click(function (e) { logout(e) });
	$(".webtop-login-split").css("padding","0px 1px");
	$("#webtop_login").unbind("click");
	if(typeof(gamelogin)!="undefined"){
		gamelogin();
	}
}
function webtoptologinout(){
	var obj = $(".webtop-login span:first-child");
	obj.removeClass('webtop-login-after');
	obj.addClass('webtop-login-link');
	obj.html('登录');
}
function logout(event)
{
  event.preventDefault();

  $.ajax({
      url:'http://login.2125.com/?c=login&d=logout',
      type:'GET',
      dataType:'jsonp',
      jsonp:'callback',
      success:function(data)
      {
          location.reload();
      }
  });
}
createLoader('http://web.2125.com/webtop/webtop_20120509.html','iframe',iframeBack);
