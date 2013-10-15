<?php echo $this->load->view('taomi/header'); ?>
<div class="all_content">
	<div class="left_nav">
		<div class="login_nav">
			<div class="login_navtop"></div>
			<div class="login_navmid">
			<?php if (empty($this->loginedUserInfo)) { ?>
				<a href="<?php echo $this->appInfos['passport']['url']; ?>uwebgame/login/" id="login_btn" class="login_btn"></a>
			<?php } else { ?>
				<div class="profile">
					<dl>
	                	<dt><img src="<?php echo $this->staticUrl; ?>webgame/common/images/1.gif" id="avatar_src"></dt>
	                    <dd class="tit usercolor" id="username"><?php echo $this->loginedUserInfo['username']; ?></dd>
	                    <dd class="usercolor" id="userlevel"></dd>
	                </dl>
					<div class="profile_href"><a class="org" target="_blank" href="<?php echo $this->appInfos['passport']['url']; ?>uwebgame">[进入个人中心]</a></div>
					<a class="logout blue" id="logout_btn" href="<?php echo $this->appInfos['passport']['url']; ?>uwebgame/logout/">[退出]</a>
				</div>
			<?php } ?>
			</div>
		</div>
		<div class="recent_play">
			<div class="recent_playtop"></div>
			<div class="recent_playmid tc">
			<?php if (empty($this->loginedUserInfo)) { ?>
				<p class="recent_playtip"><a href="javascript:;" id="login_href" class="blue underline">[登录]</a>后才能显示哦</p>
			<?php } else { ?>
				<ul class="recent_playlist"><li><img src="http://upload.ci.com/sitePage/2//res.2125.com/images/game/webgame/gameicon/icon_pmxy.png"><a href="http://web.2125.com/pmxy/" target="_blank" class="icon_arrow">飘渺西游 <b class="org">&gt;</b></a></li></ul>
			<?php } ?>
			</div>
		</div>
		<div class="allgame_list">
			<div class="allgame_listtop"></div>
			<div class="allgame_listmid">
				<dl>
					<dt onclick="listFolder(this)" class="fold">自主开发</dt>
					<dd>
						<ul style="display:block;">
						<?php foreach ($this->webgameInfos as $webgameCode => $webgameInfo) { if ($webgameInfo['type'] != 1) { continue; } ?>
							<li><img src="<?php echo $webgameInfo['pic_small']; ?>"><a href="<?php echo $webgameInfo['url_home']; ?>" target="_blank" class="icon_arrow" width="16px" height="16px" /><?php echo $webgameInfo['name']; ?>&gt;</a></li>
						<?php } ?>
						</ul>
					</dd>
				</dl>
				<dl>
					<dt onclick="listFolder(this)" class="fold">代理游戏</dt>
					<dd>
						<ul>
						<?php foreach ($this->webgameInfos as $webgameCode => $webgameInfo) { if ($webgameInfo['type'] != 2) { continue; } ?>
							<li><img src="<?php echo $webgameInfo['pic_small']; ?>"><a href="<?php echo $webgameInfo['url_home']; ?>" target="_blank" class="icon_arrow" width="16px" height="16px" /><?php echo $webgameInfo['name']; ?>&gt;</a></li>
						<?php } ?>
						</ul>
					</dd>
				</dl>
				<dl style="background:none;">
					<dt onclick="listFolder(this)" class="fold">网页游戏</dt>
					<dd>
						<ul>
						<?php foreach ($this->webgameInfos as $webgameCode => $webgameInfo) { if ($webgameInfo['type'] != 3) { continue; } ?>
							<li><img src="<?php echo $webgameInfo['pic_small']; ?>"><a href="<?php echo $webgameInfo['url_home']; ?>" target="_blank" class="icon_arrow" width="16px" height="16px" /><?php echo $webgameInfo['name']; ?>&gt;</a></li>
						<?php } ?>
						</ul>
					</dd>
				</dl>
			</div>
		</div>
		<div class="nav_btm"></div>
	</div>
	<div class="content">
		<div id="slider" class="slidePic">
			<?php 
			$posterInfos = $controller->_getFrontInfos('passport', 'poster', 1, 4);
			$titleStr = ''; $urlStr = ''; $picStr = ''; $i = 1; 
			foreach ($posterInfos['infos'] as $posterInfo) {
				if ($i == 1) {
					$titleStr .= '<a class="no3_selected" hidefocus="true" target="_blank" href="' . $posterInfo['url'] . '"><span>' . $posterInfo['name'] . '</span><em class="no3 title_arrow" style="display: inline;"></em></a>';
					$urlStr .= '<a style="display: block;" target="_blank" href="' . $posterInfo['url'] . '"></a>';
				} else {
					$titleStr .= '<a class="no1" hidefocus="true" target="_blank" href="' . $posterInfo['url'] . '"><span>' . $posterInfo['name'] . '</span><em style="display: none;" class="no1 title_arrow"></em></a>';
					$urlStr .= '<a style="display: none;" target="_blank" href="' . $posterInfo['url'] . '"></a>';
				}
				$picStr .= '<img bak_src="" src="' . $posterInfo['pic'] . '">';
		    
			} ?>
			<div class="slider_con">
				<div class="slider_title" id="slider_title"><?php echo $titleStr; ?></div>
				<div class="slider_lnk" id="slider_lnk"><?php echo $urlStr; ?></div>
			</div>
			<div class="slider_bg"></div>
			<div class="slider_pic" id="slider_pic" style="left: -815px;"><?php echo $picStr; ?></div>
    	</div>
		<div class="news l">
	    	<div class="top"></div>
	        <div class="con">
	        	<ul>
				<?php $newInfos = $controller->_getFrontInfos('webgame', 'new', 1, 7); ?>
				<?php foreach ($newInfos['infos'] as $newInfo) { ?>
					<li><span class="date">[<?php echo date('m/d', $newInfo['inputtime']); ?>]</span><span class="aw"><a target="_blank" href="<?php echo $newInfo['url']; ?>"><font class="red"><?php echo $newInfo['title']; ?></font></a></span></li>
				<?php } ?>
	            </ul> 
	        </div>
	        <div class="btm"></div>
	    </div>
	</div>
	<div style="margin-left:10px; width:763px;" class="content mt7">
		<div class="con_top"></div>
		<div class="con_mid">
			<div class="recom_box">
				<div class="recbox_top"></div>
				<div class="recbox_con">
					<?php foreach ($this->webgameInfos as $webgameCode => $webgameInfo) { if ($webgameInfo['type'] == 3) { continue; } ?>
			        <div class="recgame_box">
						<div class="rgbox_mid"><a target="_blank" href="<?php echo $webgameInfo['url_home']; ?>"><img src="<?php echo $webgameInfo['pic_big']; ?>" width="129px" height="129px" /></a></div>
						<a class="start-game-btn" title="开始游戏" target="_blank" href="<?php echo $webgameInfo['url_server']; ?>"></a>
					</div>
					<?php } ?>
			    </div>
			</div>
			<div class="webgame_box">
				<div class="wgbox_top"></div>
				<div class="splitline"></div>
				<div class="wgbox_con">
					<?php foreach ($this->webgameInfos as $webgameCode => $webgameInfo) { if ($webgameInfo['type'] != 3) { continue; } ?>
				    <div class="g_item">
						<dl>
		                	<dt><a href="<?php echo $webgameInfo['url_home']; ?>" target="_blank"><img src="<?php echo $webgameInfo['pic_middle']; ?>" width="100px" height="100px"></a></dt>
		                    <dd class="tit"><?php echo $webgameInfo['name']; ?></dd>
		                    <dd class="des"><span class="des-blue"><?php echo $webgameInfo['type']; ?></span></dd>
		                    <dd class="des"><span class="bg-green"><?php echo $webgameInfo['status']; ?></span></dd>
		                    <dd class="s-btn"><a title="开始游戏" target="_blank" href="<?php echo $webgameInfo['url_server']; ?>" class="start-game-btn"></a></dd>
		                </dl>
		            </div>
					<?php } ?>
		        </div>
				<!--<div style="height:37px;" class="wgbox_btm">
					<a class="prev_btn gray" href="javascript:;">上一页</a><a class="page_num on" href="javascript:;"><b>1</b></a><a class="page_num" href="http://web.2125.com/index_2.html"><b>2</b></a><a class="next_btn" href="http://web.2125.com/index_2.html">下一页</a>
				</div>-->
			</div>
		</div>
		<div class="con_btm"></div>
	</div>
</div>


<script src="<?php echo $this->staticUrl; ?>common/script/jquery-1.8.0.min.js" type="text/javascript"></script> 
<script type="text/javascript">
$.fn.Slider = function(settings){
	settings = jQuery.extend({
    	speed : "normal",
		num : 4,
		timer : 3000
	}, settings);
	return this.each(function() {
		$.fn.Slider.scllor( $(this), settings );
	});
};
	
$.fn.Slider.scllor=function($this,settings){
	var index = 0;
	var list = $("#slider_title > a");
	var link = $("#slider_lnk > a");
	
	list.hover(function(){
		if(intervalTime){
			clearInterval(intervalTime);
		}
		index=list.index(this);			
		
		slidepic(index);
		index++;
		if (index == settings.num) {
			index = 0;
		}	
	},function(){
		clearInterval(intervalTime);
		intervalTime=setInterval(function(){
			slidepic(index);
			index++;
			if (index == settings.num) {
				index = 0;
			}
		}, settings.timer);
	
	});
	
	link.hover(function(){
		if(intervalTime){
			clearInterval(intervalTime);
		}			
		index=link.index(this);
		index++;
		if (index == settings.num) {
			index = 0;
		}
	},function(){
		intervalTime=setInterval(function(){
			slidepic(index);
			index++;
			if (index == settings.num) {
				index = 0;
			}
		}, settings.timer);
	});
	
	var intervalTime= setInterval(function(){
		slidepic(index);
		index++;
		if(index==settings.num){
			index=0;
		}
	},settings.timer);
	
	var slidepic = function(i){
		var bakSrcAttr = $('#slider_pic img:eq('+i+')').attr('bak_src');
		if (typeof(bakSrcAttr) != 'undefined')
		{
			if (bakSrcAttr.length>0)
			{
				$('#slider_pic img:eq('+i+')').attr('src', bakSrcAttr);
				$('#slider_pic img:eq('+i+')').attr('bak_src', '');
			}
		}
		for(s=0;s<=3;s++){list.eq(s).attr("class","no"+(s+1));}
		list.eq(i).attr("class","no" + (i+1) + "_selected");
		list.eq(i).siblings().find('em').hide();
		list.eq(i).find('em').show();
		if(i==0){
			$("#slider_pic").animate({left : "9px"},{ queue: false, duration: 200, easing: "swing"});
		}
		else{
			$("#slider_pic").animate({left : "-" + (parseInt(i*412) - 9)+ "px"},{ queue: false, duration: 200, easing: "swing"});
		}
		$("#slider_lnk > a").eq(i).css("display","block").siblings().css("display","none");			
	}
};
jQuery(function($){
	$("#slider").Slider({speed:"normal",num:4,timer:3000});
});
</script>

<?php echo $this->load->view('taomi/footer'); ?>