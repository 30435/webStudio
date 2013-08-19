if (/\bf=d\b/.test(location.search)) user_action.util.cookie('from_desktop', '1');
function show_type(type){
	$('#news .new').hide();
	$('#news .new[data-rel="' + type + '"]').show();
	$("#news h3 a").attr('class','n2');
	$('#news h3 a[data-rel="' + type + '"]').attr('class','n1');
	$("#more").show();
	if (type=='xw' || type=='gg' || type=='hot'){
		$('#news .more').attr('href','/news/');
	}else if(type=='hd'){
		$('#news .more').attr('href','/huodong/');
	}
}

function scrollStep(id, d, speed) {
	var e = $("#" + id).children(), left = parseInt(e.css('left'));
	if (left < - d) {
		e.css('left', '-1px');
	} else {
		e.css('left', (left - 1) + 'px');
	}
	window.logined_timeout = setTimeout(function(){
		scrollStep(id, d, speed);
	}, speed);
}
function setScroll(id, speed, tag) {
	var e = $("#" + id);
	if (e.length == 0) return;
	var c = e[0].childNodes[0];
	var t = $(c).find(tag);
	if (t.length == 0) return;
	var d = 0;
	t.each(function () {
		d += $(this).width() + parseInt($(this).css("margin-left")) + parseInt($(this).css("margin-right"));
	});
	if (d <= e.width()) return;
	c.innerHTML += c.innerHTML;
	setTimeout(function(){
		scrollStep(id, d, speed);
	}, speed);
}

function stepScroll(id, child_tag, show_count, d, init, speed, space, con_style, p_style, first) {
	var con = $("#" + id);
	if (first) {
		window[id + '_i'] = 0;
		window[id + '_count'] = con.find(child_tag).length;
		if (con.find(child_tag).length <= show_count) return;
		con.html('<div id="'+id+'_p" style="position:absolute;">'+con.html()+'</div>');
		con.css({"overflow":"hidden", "position":"relative"});
		con.css(con_style);
		con.find('#' + id + '_p').css(p_style);
		setTimeout(function(){
			stepScroll(id, child_tag, show_count, d, init, speed, space, {}, {}, false);
		}, space);
	} else {
		var p = con.find('#' + id + '_p'), an = {};
		window[id + '_i'] ++;
		if (window[id + '_count'] <= window[id + '_i']) {
			an = eval('(' + init + ')');
			window[id + '_i'] = 0;
		} else {
			an = eval('(' + d + ')');
		}
		p.animate(an, speed, 'swing');
		setTimeout(function(){
			stepScroll(id, child_tag, show_count, d, init, speed, space, {}, {}, false);
		}, space + 100 + speed);
	}
}
function load_games(){if($("#g_box .g_box_bg a").length>0){return;}$.ajax({type:"GET",cache:false,url: "http://web.4399.com/games.json",success:function(_a){try{_a=eval("("+_a+")");}catch(e){_a = {};}var j=0;$.each(_a, function(i,_t){var _u=j>=23?(_t.url):("/hall.html#"+i),_g=j>=23?'target="_blank"':"";$("#g_box .g_box_bg").append('<a game="'+i+'" '+_g+' href="'+_u+'"'+(j<6?' class="red"':'')+'>'+_t.name+'<span class="ico_'+i+'"></span></a>');j++;});if(document.location.href.indexOf("hall")!=-1){$("#g_box .g_box_bg a").click(function(){if($(this).index()>=23){return}var _y= $(this).attr('game');$(".box a[desc='"+_y+"']").click();});}}});}

function lastgame_loaded(){
	if ($('#logined .lastgame').children().length == 0) {
		$(".History, .like").hide();
		$(".ts, .tj_g").show();
	} else {
		$(".History, .like").show();
		$(".ts, .tj_g").hide();
	}
}
$(function(){
	$('.tj_g p').html('').append($('.hot .tj a:lt(6)').clone());
	if ($("#time_tip").length) {
		var i, h = (new Date).getHours();
		var s = {
			'早上好':[5, 12],
			'中午好':[12, 14],
			'下午好':[14, 19],
			'晚上好':[19, 24],
			'夜深了':[0, 5]
		};
		for (i in s) {
			if (h >= s[i][0] && h < s[i][1]) {
				$("#time_tip").html(i);
				break;
			}
		}
	}
	user_action.init(
		"#nolog",
		"#logined",
		"",
		function(user, form, logined){
			user_action.util.set_username(logined.find("#ustr"));
			user_action.util.load_lastgame(logined.find('.lastgame'));
			logined.show();
			var p = user_action.util.cookie('Pauth');
			if (p.charAt(p.length - 1) == '0') {
				$("#bind").show();
				$("#logined_scroll").hide();
				if (typeof window.logined_timeout != 'undefined')clearTimeout(window.logined_timeout);
			} else {
				$("#bind").hide();
				$("#logined_scroll").show();
				$('#logined_scroll div').css({left:0});
				setScroll('logined_scroll', 50, 'a');
			}
		},
		function(user, form, logined){
			if (typeof window.logined_timeout != 'undefined')clearTimeout(window.logined_timeout);
		}
	);
	$('#news').delegate('h3 a', 'mouseover', function(){
		show_type($(this).attr('data-rel'));
	});
	$('#log_form')
		.delegate('li>input[name]', 'focus', function(){
			$(this).css({"border-color":"#FF7F00"});
		})
		.delegate('li>input[name]', 'blur', function(){
			$(this).css({"border-color":"#F8BE63"});
		});
	stepScroll("topnew", "a", 1, '{top:"-=33px"}', '{top:"0px"}', 160, 5000, {
		height:32
	}, {
		left:20
	}, true);
	load_games();
	$(".ic04").hover(function(){$('#g_box').show();$('.ic04').css('background-position','-579px -325px');},function(){$('#g_box').hide();$('.ic04').css('background-position','-579px -262px');});
	$("#g_box").hover(function(){$('#g_box').show();$('.ic04').css('background-position','-579px -325px');},function(){$('#g_box').hide();$('.ic04').css('background-position','-579px -262px');});
	$('#fwq_list').pages(
		'tr',
		{ size: $('#fwq_list tr:visible').length },
		'#fwq_pages',
		function(n){
			var html = '';
			for (var i = 0; i < n; i++) {
				html += ' <a class="pages_each">'+(i + 1)+'</a>';
			}
			return html;
		}
	);
});
