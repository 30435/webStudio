/*
 *	遮罩插件	
 *	@author	jerryge
 *	@last modify	20110407
 */
(function($)
{
   $.fn.extend
   ({	
	   //右下
        setRightbottom : function()
        {
            var obj = $(this);

            //计算居中位置
            function _computer(popup,flag)
            {
                var viewPortHeight = $(window).height();
                var viewPortWidth  = $(window).width();

                var top            = viewPortHeight - popup.height();
                var left           = viewPortWidth - popup.width();
                
                if(!!flag)
                {
                    top  = top + $(document).scrollTop();
                    left = left + $(document).scrollLeft();
                }
                
                return {"top": top , "left" : left};
            }

            
            //ie6 添加事件模拟相对视口定位
            if($.browser.msie && $.browser.version=='6.0')
            {
                obj.css(_computer(obj,true));
                
                obj.css("position","absolute");
                
                $(window).bind('resize',function()
                {
                    obj.css(_computer(obj,true));
                }).bind('scroll',function()
                {
                    obj.css(_computer(obj,true));
                });
            }
            else
            {
                obj.css(_computer(obj));

                obj.css("position","fixed");

                $(window).bind('resize',function()
                {
                    obj.css(_computer(obj));
                });

            }

        },
		
		//居中
		setCenter : function()
        {
            var obj = $(this);

            //计算居中位置
            function _computer(popup,flag)
            {
                var viewPortHeight = $(window).height();
                var viewPortWidth  = $(window).width();

                var top            = (viewPortHeight - popup.height()) / 2;
                var left           = (viewPortWidth - popup.width()) / 2;
                
                if(!!flag)
                {
                    top  = top + $(document).scrollTop();
                    left = left + + $(document).scrollLeft();
                }
                
                return {"top": top , "left" : left};
            }

            
            //ie6 添加事件模拟相对视口定位
            if($.browser.msie && $.browser.version=='6.0')
            {
                obj.css(_computer(obj,true));
                
                obj.css("position","absolute");
                
                $(window).bind('resize',function()
                {
                    obj.css(_computer(obj,true));
                }).bind('scroll',function()
                {
                    obj.css(_computer(obj,true));
                });
            }
            else
            {
                obj.css(_computer(obj));

                obj.css("position","fixed");

                $(window).bind('resize',function()
                {
                    obj.css(_computer(obj));
                });

            }

        },

        /*
         *  遮罩
		 *	@para	opacity		透明度
		 *	@para	zIndex		层级高度
		 *	@para	hideElement	隐藏页面中的不可遮挡元素 默认不遮挡
         */
        getMasker : function (opacity,zIndex,hideElement)
        {
            opacity = opacity || 0.5;
            zIndex  = zIndex  || 1500;
            
            var cssProperty = {'opacity' : opacity , 'zIndex' : zIndex};
            
            var _masker = $("<div style='position:absolute;display:none;top:0px;left:0px;background:#333;'></div>");

            this.show   = function()
            {  
                if(!!hideElement)
				{
                
                    $("select").css("visibility","hidden");
					$("embed").css("visibility","hidden");
					$("object").css("visibility","hidden");
                }
                
                _masker.css(this.getSize()).show();
            }

            this.hide   = function()
            {
				if(!!hideElement)
				{            
                   $("select").css("visibility","visible");
				   $("embed").css("visibility","visible");
				   $("object").css("visibility","visible");
               
				}
                   _masker.hide();
            }

            /*
             * 获取准确的宽高，fix ie6滚动条
             */
            this.getSize= function()
            {
                if($.browser.msie && $.browser.version=='6.0')
                {
                    return {
                            "width":Math.max(document.documentElement.scrollWidth, document.documentElement.clientWidth),
                            "height":Math.max(document.documentElement.scrollHeight, document.documentElement.clientHeight)
                           }
                }
                else
                {
                    return {
                            "width"  : $(document).width(),
                            "height" : ( $(document).height() )
                           }
                }
            }

            this.init  = function()
            {
                var that = this;
				
                _masker.css(cssProperty).css(this.getSize()).appendTo("body");
                $(window).bind('resize',function()
                {
                    _masker.css(cssProperty).css(that.getSize());
                });

                return this;
            }

            return this.init();
        }

   }); 
 })(jQuery);
