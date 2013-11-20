$(function(){
	$.fn.accordin = function(o){
		var conf = {
			section      : '.section' ,  	 //A selector for elements that are used as accordin inside the root element.
			effect       : 'default' ,       /* 'default':    a simple show/hide effect. The default behaviour for accordin.
										        'fade':       the accordin contents are gradually shown from zero to full opacity.
											    'slide':      a vertical sliding effect, suitable for accordions.*/
			vertical     : false ,		     // 'vertical':   a vertical (default, fade, sliding) effect accordions.
			current      : 'current' ,
			event        : 'click' ,         //other event are 'mouseover'
			fadeInSpeed  : '450',      		 //Only available when used together with the "fade" effect.
			fadeOutSpeed : 0,          		 //Only available when used together with the "fade" effect.
			initIdx      : 0,                //Specifies the accordin that is initially opened when the page loads.
			ease         : 'swing',
			timeout      : 4000              //if timeout > 0 , there's setInterval in the Accordin
		}
		var instances = [] ;
		o = $.extend(conf, o);
		return this.each(function(){
			var _this = $(this),
				_sect = $(this).children(o.section),
				_cont = $(this).children().not(o.section);
			//init
			_sect.eq(o.initIdx).addClass(o.current);
			if(o.vertical){
				_cont.eq(o.initIdx).slideDown();	
			}else{
				_cont.eq(o.initIdx).show();	
			}			
			//event
			_sect.bind(o.event, function(){
				if($(this).hasClass(o.current)) return;
				var curr_pos = _sect.index(_sect.filter('.'+o.current)[0]);
				var next_pos = _sect.index(this);
				
				animate(curr_pos, next_pos);
				if(o.event == 'click') return false;
			});
			
			//auto animate
			if (o.timeout > 0) {
				var timer = setInterval(mydo, o.timeout);
				_this.hover(function(){
					clearInterval(timer);
				}, function(){
					timer = setInterval(mydo,  o.timeout);
				});
			}			
			
			function mydo(){
				var pos1 = _sect.index(_sect.filter('.'+o.current)[0]);
				var pos2 = (pos1+1 < _sect.length) ? pos1+1 : 0;
				animate(pos1, pos2);
			}
			
			function animate(curr_pos, next_pos){
				$(_sect[curr_pos]).removeClass(o.current);
				$(_sect[next_pos]).addClass(o.current);
				
				//effect == 'default'
				if(o.effect == 'default'){	
					$(_cont[curr_pos]).hide();
					$(_cont[next_pos]).show();
				}else if(o.effect == 'fade'){
					$(_cont[curr_pos]).fadeOut(o.fadeOutSpeed);
					$(_cont[next_pos]).fadeIn(o.fadeInSpeed);
				}else if(o.effect == 'slide'){
					if(o.vertical){
						$(_cont[curr_pos]).slideUp();
						$(_cont[next_pos]).slideDown();
					}else{
						$(_cont[curr_pos]).animate({width: 'hide'});
						$(_cont[next_pos]).animate({width: 'show', ease: o.ease});
					}
				}	
			}			
		});
	}
});
$(function(){
	 $('#accordin').accordin({effect: 'slide', section: 'h3', event: 'click',timeout:'0'}); 	
})