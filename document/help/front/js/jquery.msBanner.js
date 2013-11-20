(function($){
			
			$.fn.msBanner=function(options){
				var defauls={
					type:1,
					mouse:"mouseenter",
					time:3000
				};
				
				var options=$.extend(true, {}, defauls, options);
				
				return this.each(function(){
					
					var that=$(this);
					var time=null;
					var liwidth=that.children("ul.bd").find("li").width();
					var leng=that.children("ul.bd").find("li").length;
					var index=0;
					
					that.children("ul.bd").css("width",liwidth*(leng));
					
					that.find(".hd-b>a").bind(options.mouse,function(){
						index=$(this).index();
						showPic(index);
						clearInterval(time);
						return false;
						//alert(width+"=="+leng+"=="+index);	
					});
					
					that.mouseenter(function(){
						clearInterval(time);	
					}).mouseleave(function(){
						time=setInterval(function(){
							
							showPic(index);		
							index++				
							if(index==leng){
								index=0;
							};
							
						},options.time);	
					}).trigger("mouseleave");
					
					function showPic(index){
						if(options.type==1){
							that.children("ul.bd").stop(true,false).animate({"left":-index*liwidth},300);	
							that.find(".hd-b>a").eq(index).addClass("cur").siblings().removeClass("cur");
							that.find(".hd-txt>p").eq(index).show().siblings().hide();
							//alert(11);
						}else if(options.type==2) {
							that.children("ul.bd").children("li").eq(index).show().siblings().hide();
							that.find(".hd-b>a").eq(index).addClass("cur").siblings().removeClass("cur");
							that.find(".hd-txt>p").eq(index).show().siblings().hide();
						}else if(options.type==3){
							//that.children("ul.bd").children("li").fadeOut();
							that.children("ul.bd").children("li").stop(true,true).eq(index).fadeIn(1500).siblings().fadeOut(500);
							that.find(".hd-b>a").eq(index).addClass("cur").siblings().removeClass("cur");
							that.find(".hd-txt>p").eq(index).show().siblings().hide();
						}
											
					}
					
				});
			};
})(jQuery);
$(function(){
	$("#imgADPlayer").msBanner({"type":2});
	$("#sBanner").msBanner({"type":3});
	$("#xm-banner").msBanner();

	var _wrap=$('#yuyue-ul');
	var _interval=3000;
	var _moving;
	
	_wrap.hover(function(){
		clearInterval(_moving);	
	},function(){
		_moving=setInterval(function(){
			var fr=_wrap.children('li:first');
			var h=fr.height();
				fr.animate({marginTop:-h+'px'},600,function(){
				fr.css('marginTop',0).appendTo(_wrap);	
			});
		},_interval);
	}).trigger('mouseleave');
	
	
   chT(document.getElementById("myUl"));     
			
});

//function $$(id) { return document.getElementById(id); }
/*function navCheck(num) {
            for (var i = 1; i < 14; i++) {
                if (num == i) {
                   
					$("#myli" + num).get(0).className = "myLi_A";
					// alert(num);
					continue;
                } 
                $("#myli" + i).get(0).className = "myLi_B";
            }
            
}*/

function chT(obj) {
	var links = obj.getElementsByTagName('a');
	for (var i = 0; i < links.length; i++) {
		var obj = links[i];
		var url = obj.href;
		
		obj.parentNode.className = "myLi_B";
		
		if (url == top.document.location.href) {
			obj.parentNode.className = "myLi_A";
			break;
		}
	}
};


$(function(){
	$('a[href="/swt/"]').attr('target','_blank');
})