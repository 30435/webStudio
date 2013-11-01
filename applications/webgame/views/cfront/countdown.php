<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>倒计时</title>
<link rel="stylesheet" type="text/css" href="<?php echo $this->staticUrl; ?>cfront/countdown/css/index.css" />
<script src="<?php echo $this->staticUrl; ?>common/script/jquery-1.8.0.min.js" type="text/javascript" charset="utf-8"></script>
<script>
function lxfEndtime(){
	$(".lxftime").each(function(){
		var lxfday=$(this).attr("lxfday");//用来判断是否显示天数的变量
		var endtime = new Date($(this).attr("endtime")).getTime();//取结束日期(毫秒值)
		var nowtime = new Date().getTime();        //今天的日期(毫秒值)
		var youtime = endtime-nowtime;//还有多久(毫秒值)
		var seconds = youtime/1000;
		var minutes = Math.floor(seconds/60);
		var hours = Math.floor(minutes/60);
		var days = Math.floor(hours/24);
		var CDay= days ;
		var CHour= hours % 24;
		var CMinute= minutes % 60;
		var CSecond= Math.floor(seconds%60);//"%"是取余运算，可以理解为60进一后取余数，然后只要余数。

		if(endtime<=nowtime){
			location.reload();//$(this).html("已过期")//如果结束日期小于当前日期就提示过期啦
		} else {
			if($(this).attr("lxfday")=="no"){
				//$(this).html("<i>剩余时间：</i><span>"+CHour+"</span>时<span>"+CMinute+"</span>分<span>"+CSecond+"</span>秒");          //输出没有天数的数据
				$(this).html('<p><span id="hours">' + CHour + '</span></p><p><span id="minutes" style="padding-left:205px;">' + CMinute + '</span></p><p><span id="seconds"style="padding-left:315px;">' + CSecond + '</span></p>');
			} else {
				//$(this).html("<i>剩余时间：</i><span>"+days+"</span><em>天</em><span>"+CHour+"</span><em>时</em><span>"+CMinute+"</span><em>分</em><span>"+CSecond+"</span><em>秒</em>");          //输出有天数的数据
				$(this).html('<p><span id="hours">' + days + '</span></p><p><span id="hours">' + CHour + '</span></p><p><span id="minutes" style="padding-left:205px;">' + CMinute + '</span></p><p><span id="seconds"style="padding-left:315px;">' + CSecond + '</span></p>');
			}
		}
	});

	setTimeout("lxfEndtime()",1000);
};

$(function(){
    lxfEndtime();
});
</script>
</head>
<body>
<div id="wrap" style="position:relative;">
	<div class="cutdown" style="position:absolute;top:130px;left:130px">
	    <div lxfday="no" endtime="<?php echo date('m/d/Y H:i:s', $this->currentWebgameInfo['start_maintain']); ?>" class="lxftime" id="clock"><p><span id="hours"></span></p><p><span id="minutes" style="padding-left:205px;"></span></p><p><span id="seconds"style="padding-left:315px;"></span></p></div>
	</div>
</div>
</body>
</html>
