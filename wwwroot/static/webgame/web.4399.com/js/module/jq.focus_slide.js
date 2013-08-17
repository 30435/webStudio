;(function($){
  var counter = (function(){
    var i = 0;
    return function(){ return ++i; };
  })();
  var cache = {}, switch_effect = {
    "show": function(dom){ dom.show(); },
    "fade-in": function(dom){ dom.fadeIn(); }
  };
  function on_switch(f_child, p_child, page, option, cache_id) {
    var i = p_child.index(page), current = f_child.filter(":eq("+i+")"),
      next = p_child.filter(":eq("+(i+1)+")");
    if (current.is(":animated")) return;
    if (next.length == 0) next = p_child.filter(":eq(0)");
    if (option.page_on) {
      p_child.removeClass(option.page_on);
      page.addClass(option.page_on);
    } else {
      p_child.css({"background-color":"#AAA"});
      page.css({"background-color":"#FFA064"});
    }
    f_child.filter(":visible").hide();
    switch_effect[option.switch_in](current);
    if (typeof util == 'object' && ('lazyload' in util)) util.lazyload.check();
    if ( ! cache[cache_id].mouse_on) {
      cache[cache_id].timeout_auto = setTimeout(function(){
        on_switch(f_child, p_child, next, option, cache_id);
      }, option.switch_time);
    }
  }

  $.fn.extend({
    focus_slide: function(option){
      var i, pages_class = $(this).attr('data-pages') || 'focus_slide_pages', f_child = $(this).attr('data-child');
      f_child = f_child? $(this).find(f_child): $(this).children(":not(."+pages_class+")");
      f_child.hide();
      f_child.filter(":first").show();
      $(this).show();
      if (f_child.length == 0) return;
      var cache_id = counter(), pages = $(this).children("."+pages_class);
      cache[cache_id] = {};
      option = $.extend({
        each_page: function(i){ return '<a>'+(i+1)+'</a>'; }, // 生成每一个页码元素的函数
        on_time: 300, // 鼠标悬浮触发延时
        switch_time: $(this).attr('data-turn') * 1000 || 5000, // 轮换时间间隔
        switch_in: $(this).attr('data-in') || 'fade-in', // 轮换动画
        page_on: $(this).attr('data-on') || '', // 页码高亮类名
        use_class: $(this).attr('data-class') || false, // 是否使用外部定义的样式
        click_on: $(this).attr('data-click') || false, // 是否允许页码a的点击
        width: $(this).attr('data-width') || $(this).width(), // 容器宽度
        height: $(this).attr('data-height') || $(this).height() // 容器高度
      }, option);
      if (pages.length == 0) {
        $(this).append('<div class="'+pages_class+'"></div>');
        pages = $(this).children("."+pages_class);
      }
      if ($.trim(pages.html()) == '') {
        for (i = 0; i < f_child.length; i++) {
          pages.append(option.each_page(i));
        }
      }
      var p_child = pages.children(':not(shape)');
      if ( ! option.use_class) {
        $(this).css({
          position: $(this).css('position') == 'absolute'? "absolute": "relative",
          width: option.width,
          height: option.height
        });
        pages.css({
          position: "absolute",
          right: 3,
          bottom: 3
        });

        p_child.css({
          cursor: "pointer",
          margin: "2px",
          color: "#FFF",
          filter: "alpha(opacity=70)",
          "-moz-opacity": 0.7,
          "-khtml-opacity": 0.7,
          opacity: 0.7,
          padding: "0 8px",
          "font-size": "9px"
        });
      }
      if ( ! option.click_on) p_child.click(function(){return false;});
      p_child
        .mouseover(function(){
          var page = $(this);
          cache[cache_id].timeout_over = setTimeout(function(){
            cache[cache_id].mouse_on = true;
            clearTimeout(cache[cache_id].timeout_leave);
            clearTimeout(cache[cache_id].timeout_auto);
            on_switch(f_child, p_child, page, option, cache_id);
          }, option.on_time);
        })
        .mouseleave(function(){
          clearTimeout(cache[cache_id].timeout_over);
          if (cache[cache_id].mouse_on) {
            cache[cache_id].mouse_on = false;
            var next = $(this).next();
            if (next.length == 0) next = p_child.filter(":eq(0)");
            cache[cache_id].timeout_leave = setTimeout(function(){
              on_switch(f_child, p_child, next, option, cache_id);
            }, option.switch_time);
          }
        });
      on_switch(f_child, p_child, p_child.filter(":eq(0)"), option, cache_id);
    }
  });
  var focus = $("#focus");
  if ( ! focus.is('[data-auto="no"]')) focus.focus_slide();
})(jQuery);