;(function($){
  var float_fixed_timeout = 0, dom_set = [], resize_unbind = true;
  function fixed_reset(dom, p, animate) {
    if (p.visible && ! dom.is(':visible')) {
      return;
    }
    if (dom.attr('data-stop_top') && $(window).scrollTop() < dom.attr('data-stop_top')) {
      dom.hide();
      return;
    }
    var w_width = $(window).width(), w_height = $(window).height(), width = parseInt(dom.attr('data-width')), height = dom.height();
    if (p.width) var p_width = isNaN(p.width)? $(p.width).width(): parseInt(p.width);
    if ( !p.visible && ((p_width && p_width >= w_width) || width > w_width || height > w_height)) {
      dom.hide();
      return;
    }
    p = $.extend({}, p);
    dom.show();
    if (p.width) {
      var d = (w_width - p_width) / 2;
      if ('left' in p) {
        if (typeof p.left == 'string') {
          p.left = parseInt(d * parseInt(p.left) / 100);
          p["margin-left"] = 0;
        }
        p.left = d - p.left - width;
      } else {
        if (typeof p.right == 'string') {
          p.right = parseInt(d * parseInt(p.right) / 100);
          p["margin-right"] = 0;
        }
        p.left = w_width - d + p.right;
        delete p.right;
      }
    }
    if ( ! util.fixed_valid()) {
      var s_left = $(window).scrollLeft(), s_top = $(window).scrollTop();
      if ('left' in p) {
        if (typeof p.left == 'string') p.left = parseInt(w_width * parseInt(p.left) / 100) - width / 2;
        p.left += s_left;
        p["margin-left"] = 0;
      } else {
        if (typeof p.right == 'string') p.right = parseInt(w_width * parseInt(p.right) / 100) - width / 2;
        p.left = s_left + w_width - p.right - width;
        delete p.right;
        p["margin-right"] = 0;
      }
      if ('top' in p) {
        if (typeof p.top == 'string') p.top = parseInt(w_height * parseInt(p.top) / 100) - height / 2;
        p.top += s_top;
        p["margin-top"] = 0;
      } else {
        if (typeof p.bottom == 'string') p.bottom = parseInt(w_height * parseInt(p.bottom) / 100) - height / 2;
        p.top = s_top + w_height - p.bottom - height;
        delete p.bottom;
        p["margin-bottom"] = 0;
      }
      if (p.left + width > s_left + w_width) {
        if (p.width) {
          //dom.hide(); return;
          var n_width = (w_width - p_width) / 2;
          p.left = w_width - n_width;
          dom.width(n_width);
        } else {
          p.left = s_left + w_width - width;
        }
      } else {
        dom.width(width);
      }
      if (p.top + height > s_top + w_height) {
        p.top = s_top + w_height - height;
      }
    }
    delete p['width'];
    if (p.visible) delete p.visible;
    if (animate) dom.animate(p, 200);
    else dom.css(p);
  }
  $.fn.extend({
    float_fixed: function(option){
      if (this.length == 0 || $.trim(this.html()) == '') return this;
      option = $.extend({
        p: this.attr('data-p') || 'right:10;bottom:0',
        stop: this.attr('data-stop') || '',
        close: this.attr('data-close') || '',
        width: this.attr('data-width'),
        height: this.attr('data-height')
      }, option);
      option.p = option.p.split(';');
      var dom = this, i, p = { width: 0, left: 0, right: 0, top: 0, bottom: 0, visible: 0 },
        css = {
          position:util.fixed_valid()? 'fixed': 'absolute', overflow: "hidden",
          "margin-left":0, "margin-right":0, "margin-top":0, "margin-bottom":0,"z-index":43999
        };
      if (option.stop) {
        option.stop = option.stop.split(';');
        for (i in option.stop) {
          option.stop[i] = option.stop[i].split(':');
          if (option.stop[i][0] == 'top' && option.stop[i][1]) dom.attr('data-stop_top', option.stop[i][1]);
          else if (option.stop[i][0] == 'bottom' && option.stop[i][1]) dom.attr('data-stop_bottom', option.stop[i][1]);
        }
      }
      if (option.close) {
        option.close = util.parse_dom(option.close);
        if (option.close) {
          dom.wrap(util.parse_dom('div'));
          dom = dom.parent();
          dom.prepend(option.close);
        }
      }
      dom.show();
      $('body').append(dom);
      css.width = parseInt(option.width || dom.width());
      css.height = parseInt(option.height || dom.height());
      for (i in option.p) {
        option.p[i] = option.p[i].toString().split(':');
        if (option.p[i][0] in p) {
          if (option.p[i][1].charAt(option.p[i][1].length - 1) == '%' || option.p[i][0] == 'width') p[option.p[i][0]] = option.p[i][1];
          else p[option.p[i][0]] = parseInt(option.p[i][1]) || 0;
          option.p[option.p[i][0]] = 1;
        }
      }
      if ('left' in option.p) delete p['right'];
      else if ('right' in option.p) delete p['left'];
      if ('top' in option.p) delete p['bottom'];
      else if ('bottom' in option.p) delete p['top'];
      if (typeof p.left == 'string') css['margin-left'] = - css.width / 2;
      else if (typeof p.right == 'string') css['margin-right'] = - css.width / 2;
      if (typeof p.top == 'string') css['margin-top'] = - css.height / 2;
      else if (typeof p.bottom == 'string') css['margin-bottom'] = - css.height / 2;
      dom.css(css);
      dom.attr('data-width', css.width);
      fixed_reset(dom, p);
      if ( ! util.fixed_valid()) {
        dom_set.push([dom, p]);
        if (resize_unbind) {
          resize_unbind = false;
          $(window).bind('scroll resize', function(){
            if (float_fixed_timeout) clearTimeout(float_fixed_timeout);
            float_fixed_timeout = setTimeout(function(){
              for (var i = 0, l = dom_set.length; i < l; i++) {
                fixed_reset(dom_set[i][0], dom_set[i][1], 1);
              }
              float_fixed_timeout = 0;
            }, 100);
          });
        }
      } else {
        if (p.width) {
          $(window).bind('resize', function(){fixed_reset(dom, p)});
        }
        if (option.stop) {
          $(window).bind('scroll', function(){fixed_reset(dom, p)});
        }
      }
      dom.find('.close').click(function(){
        dom.remove();
      });
      if (typeof util === 'object') util.lazyload.check();
      return this;
    },
    mouse_float: function(float_child, ref) {
      if ($(this).length == 0 || ! float_child) return this;
      this.append(float_child);
      float_child = this.children(':last');
      var p_width = this.width(), p_height = this.height(), width = float_child.width(), height = float_child.height();
      if ( ! p_width || ! p_height) return this;
      if ( ! /absolute|relative|fixed/.test(this.css('position'))) this.css({position:"relative"});

    }
  });
})(jQuery);