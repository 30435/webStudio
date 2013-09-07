	var IEBrowser = jQuery.browser.msie,
		browserVersion = parseInt(jQuery.browser.version,10);

	//topbar部分
	
	//计算游戏列表高度
	var gameListHeight = $('.game_list').height(),
		gameListShow = false,
		gameListUnclicked = true,
		animState = false;

	$('.game_list').css('margin-top',-gameListHeight)
	
	//topbar展开/隐藏
	$('.topbar_all').bind('click',function(e) {
		var target = $('.game_list'),
			listImg = target.find('img'),
			_this = $(this);			

		e.preventDefault();
		
		if (gameListUnclicked) {
			if (IEBrowser && browserVersion < 7) {
				listImg.each(function() {
					$(this).attr('src',$(this).attr('data-srcIE'))
				})
			} else{
				listImg.each(function() {
					$(this).attr('src',$(this).data('src'))
				})
			};
			gameListUnclicked = false;
			
		};
		if (!animState) {
			animState = true;
			if (gameListShow) {
				_this.removeClass('topbar_open').html('<span>全部</span>');	
				if (IEBrowser && browserVersion < 10) {	
					target.css('margin-top',-gameListHeight);
					animState = false;
				} else {
					target.css('margin-top',-gameListHeight);
					setTimeout(function() {
						target.hide();
						animState = false;
					},310)
				}		
				gameListShow = false;				
			} else if (!gameListShow){
				_this.addClass('topbar_open').html('<span>收起</span>');
				if (IEBrowser && browserVersion < 10) {	
					target.css('margin-top',0).show();
					animState = false;
				} else {
					target.show();
					setTimeout(function() {
						target.css('margin-top',0);
						animState = false;
					},50)
				};
				gameListShow = true;
				
			}
		};
		
	})

	//添加收藏
	$('#j_addFav').bind('click',function() {
		var title = document.title,
			url = window.location.href;
		if (window.sidebar) {
            window.sidebar.addPanel(title, url, "");
        } else if (window.external && ('AddFavorite' in window.external)) {
            window.external.AddFavorite(url, title);
        } else {
            alert('请使用 Ctrl+D 添加到收藏夹');
        }
	})	