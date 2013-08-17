;(function($){
  var data = [];

  $.extend({
    pages_range: function (page, page_count, page_size) {
      var m = page * page_size, range = '', range_prev = ':lt(0)', range_next = ':gt('+(m - 1)+')';
      if (page < 1) page = 1;
      if (page > page_count) page = page_count;
      if (page > 1) {
        m -= page_size;
        range = ':gt('+(m - 1)+')';
        range_prev = ':lt('+m+')';
      }
      range += ':lt('+page_size+')';
      return [page, range, range_prev, range_next];
    }
  });

  $.fn.extend({
    /**
     * 分页，由分页容器调用
     * @author YJC, web.4399.com
     * @param {string} child_selector 子元素选择器
     * @param {object} option 选项，详见下文注释
     * @param {jQuery object|string} page_selector 放置页码的容器
     * @param {function} page_html 产生页码容器HTML的函数；传入参数：总页数，子元素个数，每页元素个数[，当前容器jQuery对象]
     * @return {jQuery object} 分页容器
     */
    pages: function(child_selector, option, page_selector, page_html){
      var i;
      switch (typeof arguments[0]) {
        case 'string': // 初始化
          if ( ! child_selector) break;
          if (arguments[0] == 'reset') { // 重置
            i = this.attr('data-pages-index');
            this.pages(data[i].selector, data[i].o, data[i].pages, data[i].page_html);
            return this;
          }
          option = $.extend({ // 默认选项
            size: 10, // 每页子元素个数
            row_size: 0, // 每行元素个数，配合max_page使用
            max_page: 0, // 最大页数，为0时忽略
            pages_limit: 0, // 显示的最大页码按钮个数
            page_con_set: false, // 页码容器是否页码按钮本身的集合
            page_event: 'click', // 触发翻页的事件
            page_on: 0, // 选中某页时调用；传入参数：页码容器对象的引用，当前页码（从1开始）
            page_action: 0, // 翻页效果；传入参数：当前页子元素的集合，当前页之前子元素的集合，当前页之后子元素的集合
            page_callback: 0, // 翻页结束前调用，传参同 page_action
            class_first: 'pages_first', // 首页按钮className
            class_last: 'pages_last', // 末页按钮className
            class_prev: 'pages_prev', // 上一页按钮className
            class_next: 'pages_next', // 下一页按钮className
            class_each: 'pages_each', // 页码按钮className
            class_on: 'on', // 页码按钮高亮时附加的className
            keep_prev_next: 0, // 是否总是显示上一页/下一页
            attr_number: 'data-pages-num', // 附加到页码按钮的页码数属性名
            attr_exception: 'data-pages-exc' // 标记例外元素的属性名
          }, option);
          i = data.length;
          child_selector += ':not(['+option.attr_exception+'])';
          var items = this.find(child_selector), page_con;
          if (page_selector instanceof jQuery && page_selector.length) {
            page_con = page_selector;
          } else if (page_selector && $(page_selector).length) {
            page_con = $(page_selector);
          } else {
            this.after('<div></div>');
            page_con = this.next();
          }
          if (typeof page_html != 'function') {
            page_html = function(n){
              var html = '<a class="'+option.class_first+'">首页</a> <a class="'+option.class_prev+'">上一页</a>';
              for (var i = 0; i < n; i++) {
                html += ' <a class="'+option.class_each+'">'+(i + 1)+'</a>';
              }
              return html + ' <a class="'+option.class_next+'">下一页</a> <a class="'+option.class_last+'">末页</a>';
            };
          }
          var page_count = Math.ceil(items.length / option.size), query_method;
          if (option.max_page && page_count > option.max_page) {
            option.size = Math.ceil(items.length / option.max_page);
            if (option.row_size) option.size += (option.row_size - option.size % option.row_size);
            page_count = Math.ceil(items.length / option.size);
          }
          if (option.page_con_set || page_con.length > 1) {
            page_con.each(function(){
              page_html(page_count, items.length, option.size, $(this));
            });
            query_method = 'filter';
          } else {
            page_con.html(page_html(page_count, items.length, option.size, this));
            query_method = 'find';
          }
          this.attr('data-pages-index', i);
          data[i] = {
            0:this, // 分页容器
            o:option, // 选项
            pages:page_con, // 页码容器
            selector:child_selector, // 子元素选择器
            count:page_count, // 总页数
            current:1, // 当前页码（从1开始）
            page_html:page_html // 产生页码容器HTML的函数
          };
          page_con[query_method]('.'+option.class_first).bind(option.page_event, function(){
            data[i][0].pages(1);
          });
          page_con[query_method]('.'+option.class_last).bind(option.page_event, function(){
            data[i][0].pages(data[i].count);
          });
          page_con[query_method]('.'+option.class_prev).bind(option.page_event, function(){
            if (data[i].current == 1) return;
            data[i][0].pages(data[i].current - 1);
          });
          page_con[query_method]('.'+option.class_next).bind(option.page_event, function(){
            if (data[i].current == data[i].count) return;
            data[i][0].pages(data[i].current + 1);
          });
          page_con[query_method]('.'+option.class_each).bind(option.page_event, function(){
            var n = $(this).attr(option.attr_number);
            if (isNaN(n)) n = $(this).html();
            data[i][0].pages(parseInt(n));
          });
          this.pages(1);
          break;
        case 'number': // 翻到某一页
          i = this.attr('data-pages-index');
          var n = arguments[0];
          if (data[i].o.pages_limit) data[i].pages.pages_limit(n, {
            max: data[i].o.pages_limit,
            selector: '.' + data[i].o.class_each,
            attr_num: data[i].o.attr_number
          });
          var range = $.pages_range(n, data[i].count, data[i].o.size);
          n = range[0];
          data[i].current = n;
          if (typeof data[i].o.page_on == 'function') {
            data[i].o.page_on(data[i].pages, n);
          } else {
            data[i].pages.find('.'+data[i].o.class_each).removeClass(data[i].o.class_on);
            data[i].pages.find('.'+data[i].o.class_each+':eq('+(n - 1)+')').addClass(data[i].o.class_on);
          }
          if ( ! data[i].o.keep_prev_next) {
            if (n == 1) data[i].pages.find('.'+data[i].o.class_prev).hide();
            else data[i].pages.find('.'+data[i].o.class_prev).show();
            if (n == data[i].count) data[i].pages.find('.'+data[i].o.class_next).hide();
            else data[i].pages.find('.'+data[i].o.class_next).show();
          }
          var items_current = this.find(data[i].selector + range[1]);
          var items_prev = this.find(data[i].selector + range[2]);
          var items_next = this.find(data[i].selector + range[3]);
          if (typeof data[i].o.page_action == 'function') {
            data[i].o.page_action(items_current, items_prev, items_next);
          } else {
            items_prev.hide();
            items_next.hide();
            items_current.show();
          }
          if (typeof data[i].o.page_callback == 'function') {
            data[i].o.page_callback(items_current, items_prev, items_next);
          }
          break;
      }
      return this;
    },
    /**
     * 从分页的子元素中搜索
     * @param {string|function} filter 从元素的文本部分查找该字符串或用以匹配的函数；传参：子元素的jQuery对象
     * @param {object} option 选项
     * @return {boolean|number} 如果分页没有初始化，返回false；否则返回匹配元素的个数
     */
    pages_search: function(filter, option){
      var i = this.attr('data-pages-index');
      if (isNaN(i) || i === '') return false;
      if (typeof filter != 'function') {
        var text = filter.toString();
        filter = function(item){
          return item.text().indexOf(text) > -1;
        };
      }
      option = $.extend({
        list_max: 0, // 显示前多少个匹配的元素，0表示不限制
        hide_pages: 0 // 是否隐藏页码部分
      }, option);
      var selector = data[i].selector.replace(':not(['+data[i].o.attr_exception+'])', '');
      var count = 0, items = data[i][0].find(selector);
      items.each(function(){
        if ((option.list_max && count == option.list_max) || ! filter($(this))) {
          $(this).hide().attr(data[i].o.attr_exception, '1');
        } else {
          $(this).show().removeAttr(data[i].o.attr_exception);
          count ++;
        }
      });
      this.pages('reset');
      if (option.hide_pages) data[i].pages.hide();
      else data[i].pages.show();
      return count;
    },
    /**
     * 限制页码容器显示的页码按钮个数
     * @param current 当前页码
     * @param option 选项，详见代码注释
     */
    pages_limit: function(current, option){
      if ( ! this.length) return this;
      current = parseInt(current);
      if (typeof option !== 'object') option = {};
      var max = option.max || 10, // 显示的最大页码按钮个数
        selector = option.selector || '.pages_each', // 页码按钮选择器
        attr_num = option.attr_num || 'data-pages-num'; // 从页码按钮获取页码数的属性名
      function get_num(dom) {
        if (dom.is('['+attr_num+']')) return parseInt(dom.attr(attr_num));
        return parseInt(dom.html());
      }
      var children = this.find(selector), last = get_num(children.filter(':last'));
      if (last <= max) return this;
      var e_str = option.e_str || '...', // 省略的页码按钮的html
        e_class = option.e_class || '', // 省略的页面按钮的class
        ellipsis = option.ellipsis || // 对[需要]省略处理的按钮的操作
        function(d, e) {
          var i = d.is('[data-pages_ellipsis]');
          if (e) {
            if ( ! i) {
              var n = d.html();
              if (e_class) d.addClass(e_class);
              if ( ! d.is('[' + attr_num + ']')) d.attr(attr_num, n);
              d.attr('data-pages_ellipsis', n);
              d.html(e_str);
            }
          } else {
            if (i) {
              if (e_class) d.removeClass(e_class);
              d.html(d.attr('data-pages_ellipsis'));
              d.removeAttr('data-pages_ellipsis');
            }
          }
          return d;
        };
      var half_max_ceil = Math.ceil(max / 2), half_max_floor = Math.floor(max / 2);
      if (current <= half_max_ceil) {
        children.each(function(){
          var i = children.index(this), c = $(this);
          if (get_num(c) == Math.ceil((last - max) / 2) + max) ellipsis(c, 1).show();
          else if (i >= max) c.hide();
          else ellipsis(c, 0).show();
        });
      } else if (current > last - half_max_ceil) {
        children.each(function(){
          var i = children.index(this), c = $(this);
          if (get_num(c) == Math.ceil((last - max) / 2)) ellipsis(c, 1).show();
          else if (i < last - max) c.hide();
          else ellipsis(c, 0).show();
        });
      } else {
        var n_c_last = current + half_max_floor;
        children.each(function(){
          var i = children.index(this), c = $(this), c_n = get_num(c);
          if (c_n == Math.ceil((current - half_max_ceil) / 2) || c_n == n_c_last + Math.ceil((last - n_c_last) / 2)) ellipsis(c, 1).show();
          else if (i < current - half_max_ceil || i >= current + half_max_floor) c.hide();
          else ellipsis(c, 0).show();
        });
      }
      return this;
    }
  });
})(jQuery);
