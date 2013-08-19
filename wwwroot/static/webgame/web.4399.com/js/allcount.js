/*
*	by dragon.liang
*	date:2010-06-07
*/

jQuery(function(){
	flush();
        setInterval("flush()",2500);
});

if(typeof setCookie != 'object'){
        function setCookie(D,$,E,C,B,A){
                var c_val=D+"="+encodeURI($)+((E)?"; expires="+E.toGMTString():"")+((C)?"; path="+C:"")+((B)?"; domain="+B:"")+((A)?"; secure":"");
                document.cookie=c_val
        }
}

function formatCurrencyTenThou(num) {
    num = num.toString().replace(/$|\,/g,'');
    if(isNaN(num))
    num = "0";
    sign = (num == (num = Math.abs(num)));
    num = Math.floor(num*10+0.50000000001);
    num = Math.floor(num/10).toString();
    for (var i = 0; i < Math.floor((num.length-(1+i))/3); i++)
    num = num.substring(0,num.length-(4*i+3))+','+
    num.substring(num.length-(4*i+3));
    return (((sign)?'':'-') + num );
}
function flush(){
        //var c = getCookie('web4399_today_visited');
        var v = getCookie('web4399_reg_allcount');
	var stime = new Date((new Date()).getTime() + 86400);
        if(v==''){
        		var data = 552618238;
                setCookie('web4399_reg_allcount',data,stime,'/','web.4399.com');
                //addCookie('web4399_today_visited','1',86400);
		
                jQuery("#tipno").html(formatCurrencyTenThou(data));
        }else{
                //v = v.replace(/[,]/g,'');
                var randnum = parseInt(Math.random()*6+1); 
		_c = parseInt(v)+randnum;
                setCookie('web4399_reg_allcount', _c, stime, '/', 'web.4399.com');
                jQuery("#tipno").html(formatCurrencyTenThou(_c));
        } 
}
