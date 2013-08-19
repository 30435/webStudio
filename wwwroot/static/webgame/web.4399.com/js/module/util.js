(function(W, D, undefined){
  var fixed_valid, canvas_valid, is_gecko = undefined,
    blank_image = 'http://pic.my4399.com/js/resource/image/blank.gif';

  var util = {
    util_id: (function(){
      var  i = 0;
      return function(){
        var  id = "ID-UTIL-" + (i++);
        if (D.getElementById(id)) return arguments.callee();
        return id;
      };
    })(),
    /**
     * prototype方式的深度复制对象
     * @param object
     * @return {Object}
     */
    p_clone: function(object) {
      function F(){}
      F.prototype = object;
      return new F;
    },
    is_firefox: function(){
      if (is_gecko === undefined) is_gecko = (('getBoxObjectFor' in document) || ('mozInnerScreenX' in window));
      return is_gecko;
    },
    /**
     * COOKIE操作
     * @param {string} name 索引
     * @param {string} value 设置的值
     * @param {number} ttl 有效期，单位秒
     * @param {string} path 路径
     * @param {string} domain 域
     * @return {boolean|string} 获取的值
     */
    cookie: function(name, value, ttl, path, domain){
      // 获取cookie
      if (arguments.length == 1) {
        try {
          var  a = (new RegExp('\\b'+name+'=([^;]*);?', 'i')).exec(D.cookie.toString());
        } catch(e) {
          return false;
        }
        if (a instanceof Array && a.length > 1) return a[1];
        return '';
      }
      // 2个参数时，如果第二个参数是数字，则ttl为此值
      if (arguments.length == 2 && typeof value == 'number') {
        ttl = value;
        // 如果ttl为负值，说明需要删除cookie，则value值置为空；否则获取此cookie原始值
        value = ttl < 0? '': arguments.callee(name);
      }
      var  date = '';
      if ( ! isNaN(ttl)) {
        date = new Date();
        date.setTime(date.getTime() + ttl * 1000);
        date = ";expires=" + date.toGMTString();
      }
      if (typeof CONFIG == 'object') {
        if (CONFIG['DOMAIN']) domain = CONFIG['DOMAIN'];
        if (CONFIG['PATH']) path = CONFIG['PATH'];
      }
      D.cookie = name + "=" + value + (domain? ";domain=" + domain: '') + (path? ";path=" + path: '') + date;
      return true;
    },
    /**
     * 返回对象的一段（IE6下此函数对Function内的arguments对象无效）
     * @param {object} object
     * @param {boolean} as_array 是否返回数组；返回数组时下标会重新索引，返回对象时保留原下标
     * @param {number} start 所指定的部分的开始元素，从零开始计算的下标
     * @param {number} end 所指定的部分的结束元素，从零开始计算的下标，不包括此元素；如果省略，则一直复制到结尾
     * @return {object}
     */
    slice: function(object, as_array, start, end){
      var i, j = 0, o = as_array? []: {};
      if (typeof object != 'object') return o;
      for (i in object) {
        if (j++ < start) continue;
        if (end && j > end) break;
        if (as_array) {
          o.push(object[i]);
        } else {
          o[i] = object[i];
        }
      }
      return o;
    },
    /**
     * 预加载资源文件
     */
    pre_load: function(url){
      var i = D.createElement('iframe'),
        body = D.body || D.getElementsByTagName('body')[0] || D.documentElement;
      i.style.display = 'none';
      i.src = url;
      i.onload = function(){
        i.parentNode.removeChild(i);
        i.src = '';
        i.onload = null;
        i = null;
      };
      body.insertBefore(i, body.firstChild);
    },
    /**
     * 检查email地址合法性
     */
    check_email: function(email) {
      return /^[a-z0-9]([a-z0-9]*[-_\.]?[a-z0-9]+)*@([a-z0-9]+(-?[a-z0-9]+)?)(\.[a-z0-9]+(-?[a-z0-9]+))*[\.][a-z]{2,4}$/i.test(email);
    },
    /**
     * 依次用传入参数替换字符串中的 {$0} {$1} ...
     */
    template_str: function(str, as_url) {
      for (var i = 2; i < arguments.length; i++) {
        str = str.replace('{$'+(i-2)+'}', as_url? encodeURIComponent(arguments[i]): arguments[i]);
      }
      return str;
    },
    str_size: function(str) {
      var count = 0;
      for (var i = str.length - 1; i > -1; i --) {
        count += (str.charCodeAt(i) > 127? 2: 1);
      }
      return count;
    },
    time_format: function(format, timestamp) {
      var t = timestamp? new Date(timestamp * 1000): new Date;
      var i, f = [], week = ['','一','二','三','四','五','六','日'];
      f['Y'] = t.getFullYear();
      f['n'] = t.getMonth() + 1;
      f['m'] = f['n'] < 10? '0' + f['n'].toString(): f['n'];
      f['j'] = t.getDate();
      f['d'] = f['j'] < 10? '0' + f['j'].toString(): f['j'];
      f['G'] = t.getHours();
      f['H'] = f['G'] < 10? '0' + f['G'].toString(): f['G'];
      i = t.getMinutes();
      f['i'] = i < 10? '0' + i.toString(): i;
      i = t.getSeconds();
      f['s'] = i < 10? '0' + i.toString(): i;
      f['N'] = t.getDay() == 0? 7: t.getDay();
      f['X'] = week[f['N']];
      for (i in f) {
        format = format.replace(i, f[i]);
      }
      return format;
    },
    flash: function(swf, width, height, param, codebase, pluginspage){
      var i, object = '', embed = '';
      codebase = codebase || 'http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0';
      pluginspage = pluginspage || 'http://www.macromedia.com/go/getflashplayer';
      param = param || {};
      param.quality = param.quality || "high";
      param.wmode = param.wmode || "transparent";
      for (i in param) {
        object += '<param name="'+i+'" value="'+param[i]+'" />';
        embed += ' ' + i.toString().toLowerCase() + '="' + param[i] + '"';
      }
      return '<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="'+codebase+'" width="'+width+'" height="'+height+'"><param name="movie" value="'+swf+'" />'+object+'<embed src="'+swf+'" pluginspage="'+pluginspage+'" type="application/x-shockwave-flash" width="'+width+'" height="'+height+'"'+embed+'></embed></object>';
    },
    canvas_valid: function(){
      if (typeof canvas_valid === 'boolean') return canvas_valid;
      canvas_valid = ("getContext" in D.createElement('canvas'));
      return canvas_valid;
    },
    fixed_valid: function(){
      if (typeof fixed_valid === 'boolean') return fixed_valid;
      var id = util.util_id();
      $('body').prepend('<div style="display:block;position:absolute;top:200px;border:none;background:none" id="'+id+'"><div style="display:block;position:fixed;top:100px;border:none;background:none"></div></div>');
      fixed_valid = ($('div#' + id + ' div').offset().top - $(W).scrollTop() == 100);
      $('div#' + id).remove();
      return fixed_valid;
    },
    parse_css_name: function(name){
      var i, c, n = '', ascii;
      for (i = 0; i < name.length; i ++) {
        c = name.charAt(i);
        ascii  = c.charCodeAt(0);
        if (ascii >= 65 && ascii <= 90) n += '-' + c.toLowerCase();
        else n += c;
      }
      return n;
    },
    parse_dom: function(str, attrs){
      // tagName.className#id'style string'/|>contain text
      var i, tag = /^([a-z]+)(#[a-z][\w-]*)?(\.[a-z][\w-]*)?(#[a-z][\w-]*)?('[^:';]+:[^:';]+(;[^:';]+:[^:';]+)*;*')?(\/|>.*)?$/i.exec(str);
      if ( ! tag || ! tag[1] || (tag[2] && tag[4])) return '';
      if (typeof attrs != 'object') attrs = [];
      if (tag[3]) attrs['class'] = tag[3].substr(1);
      if (tag[2] || tag[4]) attrs['id'] = (tag[2] || tag[4]).substr(1);
      str = '<' + tag[1];
      for (i in attrs) {
        str += ' ' + i + '="' + attrs[i] + '"';
      }
      if (tag[5]) {
        str += ' style="' + tag[5].substr(1).replace(/;*'$/, '') + '"';
      }
      if (tag[7] == '/') str += '/>';
      else {
        str += '>';
        if (tag[7]) str += tag[7].substr(1);
        str += '</'+tag[1]+'>';
      }
      return str;
    },
    select_fix:function (dom,type,top,left) {
      if (dom.attr('data-select_fix')) {
        return dom;
      }
      var zindex = parseInt(dom.css('z-index'));
      if (isNaN(zindex)) {
        zindex = 50;
      }
      zindex--;
      var cls = util.util_id();
      $("body").append('<iframe id="' + cls + '" frameborder="0" style="position:absolute;display:none;z-index:' + zindex + '"></iframe>');
      var i = $("#" + cls);
      dom.parent().prepend(i);
      i.show();
      var bw = parseInt(dom.css('border-left-width')) + parseInt(dom.css('border-right-width'));
      var bh = parseInt(dom.css('border-top-width')) + parseInt(dom.css('border-bottom-width'));
      if(type == 'meiti'){
          i.css({left:dom.css('left'), top:top, border:"none", width:(dom.width() + bw) + 'px', height:(dom.height() + bh) + 'px'});
      }else{
          i.css({left:dom.css('left'), top:dom.css('top'), border:"none", width:(dom.width() + bw) + 'px', height:(dom.height() + bh) + 'px'});
      }
      dom.attr('data-select_fix', cls);
      return dom;
    },
    select_fix_remove:function (dom) {
      if (dom.attr('data-select_fix')) {
        $("#" + dom.attr('data-select_fix')).remove();
        dom.removeAttr('data-select_fix');
      }
      return dom;
    },
    center: function(dom) {
      var w = $(window), width = dom.outerWidth(), height = dom.outerHeight(),
        w_width = w.width(), w_height = w.height(), s_left = w.scrollLeft(), s_top = w.scrollTop(),
        m_left = parseInt(dom.css('margin-left')), m_top = parseInt(dom.css('margin-top')),
        dom_left = (w_width - width) / 2 + s_left - m_left, dom_top = (w_height - height) / 2 + s_top - m_top;
      dom.css({left: dom_left < 0? 0: dom_left, top: dom_top < 0? 0: dom_top});
    },
    inside_view: function(dom, buffer){
      // firefox下，img 如果没有src属性，不可见
      if (util.is_firefox() && dom.is('img') && ! dom.attr('src')) dom.attr('src', blank_image);
      if ( ! (dom instanceof jQuery) || ! dom.is(':visible')) return false;
      if (isNaN(buffer)) buffer = 0;
      var w = $(window), left = w.scrollLeft(), top = w.scrollTop(), width = w.width(), height = w.height(), d = dom.offset();
      d.width = dom.width();
      d.height = dom.height();
      return ((d.left + d.width >= left - buffer && d.left <= left + width + buffer) &&
        (d.top + d.height >= top - buffer && d.top <= top + height + buffer));
    },
    lazyload: (function(){
      var lazy_on = false, length = 0, eles, buffer, timeout = 0,
        ie6png_loaded = (typeof ie6png === 'object'), r_class;
      var r = {
        release: function(dom) {
          var v = dom.attr('data-lazyload'), i = v.indexOf(' '), name = v.substr(0, i), value = $.trim(v.substr(i + 1));
          dom.removeAttr('data-lazyload');
          switch (name) {
            case 'fn':
              (new Function(value))();
              break;
            case 'swf':
              var object = dom.is('object')? dom: dom.find('object');
              if (object.length) {
                dom.find('embed').attr('src', value);
                var param = dom.find('param[name="movie"]');
                if (param.length) param.attr('value', value);
                else dom.append('<param name="movie" value="'+value+'">');
              } else {
                value = value.split(' ');
                dom.html(util.flash(value[0], value[1] || 64, value[2] || 64));
              }
              break;
            default:
              dom.attr(name, value);
              if (ie6png_loaded && dom.is('img')) ie6png.fixPng(dom[0]);
          }
          if (r_class) dom.addClass(r_class);
        },
        check: function(){
          if (length === 0 || ! eles) return;
          var i;
          for (i in eles) {
            if (util.inside_view(eles[i].data('on_lazyload') || eles[i], buffer)) {
              if ( ! eles) return;
              r.release(eles[i]);
              delete eles[i];
              length --;
            }
          }
          if (length === 0) eles = null;
        },
        on: function(view_buffer, released_class) {
          if (lazy_on) return;
          lazy_on = true;
          if (util.is_firefox()) {
            var img = new Image();
            img.src = blank_image;
          }
          buffer = parseInt(view_buffer) || 0;
          if (released_class) r_class = released_class;
          r.reset();
          $(window).bind('resize scroll', function(){
            if (timeout) {
              clearTimeout(timeout);
              timeout = 0;
            }
            timeout = setTimeout(r.check, 200);
          });
        },
        reset: function(){
          if ( ! lazy_on) return false;
          var es = $('[data-lazyload]');
          eles = [];
          length = 0;
          if (es.length == 0) return false;
          es.each(function(){
            if (util.inside_view($(this), buffer)) r.release($(this));
            else {
              length ++;
              eles.push($(this));
            }
          });
          return true;
        }
      };
      return r;
    })(),
    insert_textarea: function(textarea, text) {
      if ('selectionStart' in textarea) {
        var start = textarea.selectionStart, end = textarea.selectionEnd;
        textarea.value = textarea.value.substring(0, start) + text + textarea.value.substr(end);
        textarea.focus();
        textarea.selectionEnd = textarea.selectionStart = start + text.length;
      } else if (document.selection) {
        textarea.focus();
        var selection = document.selection.createRange();
        selection.text = text;
        selection.select();
      } else {
        textarea.value += text;
        textarea.focus();
      }
    },
    /**
     * 去除字符串头尾空字符
     * @param str
     * @return {String}
     */
    trim: function(str){
      switch(typeof str) {
        case 'string':
          break;
        case 'number':
          return str.toString();
        default:
          return '';
      }
      return ''.trim? str.trim(): str.replace(/^\s*/, '').replace(/\s*$/, '');
    },
    /**
     * 解析字符串为对象
     * @param str
     * @param separator
     * @param mark
     * @param cover_mode 相同key处理方式：first(取第一个出现的值)/last(取最后出现的值)/all(保留全部值)
     * @param fn_value
     * @param fn_key
     * @return {Object}
     */
    parse_str: function(str, separator, mark, cover_mode, fn_value, fn_key){
      if (typeof str !== 'string') return {};
      var re = {}, key, value;
      str = str.split(separator || ';');
      if ( ! mark) mark = ':';
      for (var i in str) {
        if ( ! this.trim(str[i])) continue;
        str[i] = str[i].split(mark);
        key = (typeof fn_key === 'function')? fn_key(str[i][0]): str[i][0];
        value = (typeof fn_value === 'function')? fn_value(str[i][1]): str[i][1];
        if (key in re) {
          switch(cover_mode){
            case 'first':
              continue;
            case 'last':
              re[key] = value;
              break;
            default:
              if (typeof re[key] === 'object') re[key].push(value);
              else re[key] = [re[key], value];
          }
        } else re[key] = value;
      }
      return re;
    },
    tpl: function(tpl, data) {
      var match, reg = /{(\w+)}/g, html = '', last_i = 0;
      while(match = reg.exec(tpl)) {
        html += tpl.substring(last_i, match.index);
        if (match[1] in data) html += data[match[1]];
        last_i = match.index + match[1].length + 2;
      }
      return html + tpl.substr(last_i);
    },
    sound_play: function(url){
      var div = document.createElement('div');
      div.innerHTML = '<object style="display:none" classid="CLSID:6BF52A52-394A-11d3-B153-00C04F79FAA6">\
<param name="AutoStart" value="1"><param name="PlayCount" value="1">\
<param name="url" value="'+url+'"></object><audio style="display:none" autoplay="autoplay" src="'+url+'"></audio>';
      document.getElementsByTagName('body')[0].appendChild(div);
    }
  };
  if (typeof core == 'object' && 'util' in core) {
    core.util.extend(core.util, util);
  } else if (typeof W.util === 'object' && typeof W.util.extend === 'function') {
    W.util.extend(W.util, util);
  } else {
    W.util = util;
  }
})(window, document);