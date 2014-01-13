/**
Author: Orion-drogjh
Email: dr@te.gd
URL: http://orion.so
**/

$(function () {
	Drslider();
	Drnews();
	Drtabs(".tab-hd", "active", ".tab-bd");
})

$(document).ready(function(){ 
$("#top-select").selectCss(); 
}); 

//小轮播
function Drslider()
{
	var _slider=$('.next-content .slide .small a');
	var _sliderimg=$('.next-content .slide .big a img');
	_slider.hover(function() {
		index=_slider.index(this);
		$('.next-content .slide .big a img.on').removeClass('on');
		 _sliderimg.eq(index).addClass('on');
        }); 
}

//最新动漫 宠物杂志切换图片
function Drnews()
{
	var al2=$('.next-content .pet-news2 ul li a');
	var al2img=$('.next-content .pet-news2 ul div a img');
	al2.hover(function() {
		index=al2.index(this);
		al2img.removeClass('on');
		al2img.eq(index).addClass('on');
        }); 
	var al3=$('.next-content .pet-news3 ul li a');
	var al3img=$('.next-content .pet-news3 ul div a img');
	al3.hover(function() {
		index=al3.index(this);
		al3img.removeClass('on');
		al3img.eq(index).addClass('on');
        }); 
}

//tab切换
function Drtabs(tabTit, on, tabCon) {
	$(tabCon).each(function() {
		$(this).children().eq(0).show();
	});
	$(tabTit).each(function() {
		$(this).children().eq(0).addClass(on);
	});
	$(tabTit).children().hover(function() { //鼠标“hover”的效果
		$(this).addClass(on).siblings().removeClass(on);
		var index = $(tabTit).children().index(this);
		$(tabCon).children().eq(index).show().siblings().hide();
	});
}
                
                

