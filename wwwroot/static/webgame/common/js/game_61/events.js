$(document).ready(function() {
	var IEBrowser = jQuery.browser.msie,
		browserVersion = parseInt(jQuery.browser.version,10);

	//首页轮播图
	var sliderItem = $('.slider_item'),
		activeSliderItem = $('.slider_item_active'),
		sliderControlItem = $('.slider_control_item'),
		curNum = 0;
 
	sliderFunc = function() {
		sliderLoop = setInterval(function() {
						sliderItem.eq(curNum).removeClass('slider_item_active');
						sliderControlItem.eq(curNum).removeClass('slider_control_item_active');
						if (curNum ==  sliderItem.length - 1) {
							curNum = 0;
						} else{
							curNum ++;
						};
						sliderItem.eq(curNum).addClass('slider_item_active');
						sliderControlItem.eq(curNum).addClass('slider_control_item_active');
					},3500)
	}

	sliderItem.eq(0).addClass('slider_item_active');
	sliderControlItem.eq(0).addClass('slider_control_item_active');
	sliderFunc();
	
	sliderControlItem.bind('click',function() {
		clearInterval(sliderLoop);
		sliderItem.eq(curNum).removeClass('slider_item_active');
		sliderControlItem.eq(curNum).removeClass('slider_control_item_active');
		curNum = $(this).index();
		sliderItem.eq(curNum).addClass('slider_item_active');
		sliderControlItem.eq(curNum).addClass('slider_control_item_active');
		sliderFunc();
	})


	// 使 footer 一直位于底部
	var footerBtm = function() {
	    var footerWrap = $('footer');
	    if($('body').outerHeight() < $(window).height() ){
	    	$('body').css('height',$(window).height());
	    	$('footer').css('width','100%');
	        footerWrap.css({
	            'position' : 'absolute',
	            'bottom' : 0
	        })
	    }
	}

	footerBtm();
	$(window).resize(function() {
	    footerBtm();
	})

	//代理游戏测试列表翻页
	var gameTestListLeft = 0,
		gameTestListNum = $('.game_test_list').length,
		gameTestListItemNum = $('.game_test_item').length,
		gameTestListCurNum = 0;


	$(".game_test_list_mid_wrapper").css('width',gameTestListNum * 216);
	if (gameTestListItemNum > 6) {
		$('.game_test_list_next_btn').show();
		$('.game_test_list_prev_btn').show();
	};
	var gameTestListBtnFun = function() {
		if (gameTestListCurNum < (gameTestListNum - 1) && gameTestListNum > 0) {
			$('.game_test_list_next_btn').removeClass('game_test_list_next_btn_disable');
		} else if (gameTestListCurNum == (gameTestListNum - 1) && gameTestListNum > 0) {
			$('.game_test_list_next_btn').addClass('game_test_list_next_btn_disable');
		};
		if (gameTestListCurNum > 0 && gameTestListNum > 0) {
			$('.game_test_list_prev_btn').removeClass('game_test_list_prev_btn_disable');
		} else if (gameTestListCurNum == 0 && gameTestListNum > 0) {
			$('.game_test_list_prev_btn').addClass('game_test_list_prev_btn_disable');
		};
	}

	gameTestListBtnFun();

	$('.game_test_list_prev_btn').bind('click',function() {
		if ($(this).hasClass('game_test_list_prev_btn_disable')) {
			return
		} else{
			gameTestListCurNum--;
			gameTestListBtnFun();
			gameTestListLeft += 216; 
			$('.game_test_list_mid_wrapper').css('left' , gameTestListLeft);
		};
	})
	$('.game_test_list_next_btn').bind('click',function() {
		if ($(this).hasClass('game_test_list_next_btn_disable')) {
			return
		} else{
			gameTestListCurNum++;
			gameTestListBtnFun();
			gameTestListLeft -= 216; 
			$('.game_test_list_mid_wrapper').css('left' , gameTestListLeft);
		}
	})

	//游戏列表页切换
	var glTabBtn = $('.gl_tab_link'),
		glTabCur = 'gl_tab_link_sel',
		glList = $('.gl_item_list'),
		glListCur = 'gl_item_list_sel';

	glTabBtn.on('click',function() {
		glTabBtn.removeClass(glTabCur);
		$(this).addClass(glTabCur);
		glList.removeClass(glListCur).eq($(this).parent().index()).addClass(glListCur);

	})
	
								
})