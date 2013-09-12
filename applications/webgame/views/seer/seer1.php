<?php echo doctype(); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title><?php echo $this->metaDatas['title']; ?></title>
<meta content="<?php echo $this->metaDatas['keywords']; ?>" name="Keywords"> 
<meta content="<?php echo $this->metaDatas['description']; ?>" name="Description">

<link type="image/ico" rel="shortcut icon" href="<?php echo $this->staticUrl; ?>favicon.ico" />
<link type="text/css" rel="stylesheet" href="<?php echo $this->staticUrl; ?>webgame/seer/css/style.css?v=201301232028"  />
<link type="text/css" rel="stylesheet" href="<?php echo $this->staticUrl; ?>webgame/seer/css/seer.css?v=201301232028"/>
</head>
<body style="background:#fff;">
<div id="header_3">
	<div class="top-container">
		<h1>
			<a class="logo" target="_blank" href="<?php echo $this->baseUrl; ?>" hidefocus="true" title="<?php echo $this->metaDatas['title']; ?>">
				<img width="137" height="37" src="<?php echo $this->staticUrl; ?>webgame/topbar/images/topbar_v2012/2125logo.png?date=20120119"/>
			</a>
		</h1>
		<span class="divide"></span>
		<div class="product-area">
			<ul id="webtop_product_ul" class="product-tab">
				<li class="product-tab-li"><a href="javascript:void(0);" hidefocus="true" class="product-tab-list list-on">热门游戏</a></li>
				<li class="product-tab-li"><a href="javascript:void(0);" hidefocus="true" class="product-tab-list">角色扮演</a></li>
				<li class="product-tab-li"><a href="javascript:void(0);" hidefocus="true" class="product-tab-list">休闲竞技</a></li>
				<li class="product-tab-li"><a href="javascript:void(0);" hidefocus="true" class="product-tab-list">社区养成</a></li>
				<li class="product-tab-li" id="list-mr0"><a href="javascript:void(0);" hidefocus="true" class="product-tab-list">推荐小游戏</a></li>
			</ul>
			<div id="webtop_product_hrefs" class="product-hrefs">
			</div>
		</div>
		<span class="divide"></span>
		<div class="topserve-area">
			<div class="serve-hrefs">
				<a onclick="addFav();" href="javascript:;" class="serve-href href-fav">收藏</a>
				<a href="http://pay.61.com/nono/nonopay" class="serve-href href-pay" target="_blank">充值</a>
				<a href="http://miba.2125.com/thread/l/?fid=2" class="serve-href href-miba" target="_blank">米吧</a>
				<a href="http://service.61.com/" class="serve-href href-service" id="last-serve-href" target="_blank">客服</a>
			</div>
			<div class="topevent-speaker-contain">
				<ul id="webtop_product_news" class="topevent-speaker">
				</ul>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
function addFav()
{
	var title= document.title;
	var url= window.location.href;
    try{
        if ((typeof window.sidebar == 'object') && (typeof window.sidebar.addPanel == 'function')) {
            window.sidebar.addPanel(title,url,"");
        } else {
            window.external.AddFavorite(url, title);
        }
    } catch(err) {
    	alert("请使用 Ctrl+D 添加到收藏夹");
    }
    return false;
}
</script>

<div class="blank_7"></div>

<div class="box_game">
	<div class="box_inner">
		<div style="width:956px; height:559px; overflow:hidden; margin:0pt auto;">
			<div id="iframe_seer" style="margin-left:-28px;margin-top:-61px;">
				<iframe id="frm" src="http://seer.61.com/?tmcid=29" width="1010" height="620" frameborder="0" scrolling="no"></iframe>
			</div>

		</div>
	</div>
</div>
<div class="blank_10"></div>


<div class="nav_seer">
	<div class="navbg">
    	<div class="search_bar">
        	<input class="s_tag" id="seer_search_tag" type="text" onblur="if (value ==''){value='请输入赛尔号攻略、秘籍'}" onfocus="if (value =='请输入赛尔号攻略、秘籍'){value =''}" value="请输入赛尔号攻略、秘籍">
            <input class="s_btn" onclick="seer_search();" type="button" value=""/>
        </div>
        <div class="nav1">
        	<a class="n1" target="_blank" href="/seer/">赛尔首页</a>
            <a class="n2" target="_blank" href="/seer/gl/">赛尔攻略</a>
            <a class="n3" target="_blank" href="http://miba.2125.com/thread/l?fid=2" target="_blank">赛尔米吧</a>
            <a class="n4" target="_blank" href="/seer/zn/yxjj.html">赛尔指南</a>
            <a class="n5" target="_blank" href="/seer/news/">赛尔新闻</a>
            <a class="n6" target="_blank" href="/seer/gs/">赛尔故事</a>
        </div>
        <div class="r_btn">
        	<a class="jl" target="_blank" href="/seer/index.html?JLDQ"></a>
            <a class="sc" href="javascript:;" onclick="document.all && window.external.addFavorite('http://web.2125.com/seer/','赛尔号 - 2125小游戏 - www.2125.com') || window.sidebar && window.sidebar.addPanel('赛尔号 - 2125小游戏 - www.2125.com', 'http://www.2125.com/seer/', '');return false;"></a>
        </div>
    </div>
    <div class="demon">
    	<dl>
        	<dt>
            	
            	<a class="icon1" href="javascript:;" onclick="alert('即将开通，敬请期待！');return false;" ></a>
            </dt>
            <dd>
            	
            	<p><a class="t1" href="javascript:;" onclick="alert('即将开通，敬请期待！');return false;" ></a>(全部融合精灵详解)</p>
            </dd>
        </dl>
        <dl>
        	<dt>
            	
            	<a class="icon2" href="javascript:;" onclick="alert('即将开通，敬请期待！');return false;" ></a>
            </dt>
            <dd>
            	
            	<p><a class="t2" href="javascript:;" onclick="alert('即将开通，敬请期待！');return false;" ></a>(全部融合精灵详解)</p>
            </dd>
        </dl>
        <dl>
        	<dt>
            	<a class="icon3" target="_blank" href="/seer/shsc/jlxgdq.html" target="_blank"></a>
            </dt>
            <dd>
            	<p><a class="t3" target="_blank" href="/seer/shsc/jlxgdq.html" target="_blank"></a>(打造极品精灵)</p>
            </dd>
        </dl>
        <dl>
        	<dt>
            	<a class="icon4" target="_blank" href="/seer/SPT/" target="_blank"></a>
            </dt>
            <dd>
            	<p><a class="t4" target="_blank" href="/seer/SPT/" target="_blank"></a>(各个BOSS击破方法)</p>
            </dd>
        </dl>
        <dl>
        	<dt>
            	<a class="icon5" target="_blank" href="/seer/yzzt/" target="_blank"></a>
            </dt>
            <dd>
            	<p><a class="t5" target="_blank" href="/seer/yzzt/" target="_blank"></a>(1-70层BOSS全攻略)</p>
            </dd>
        </dl>
        <dl>
        	<dt>
            	<a class="icon6" target="_blank" href="/seer/pngl/" target="_blank"></a>
            </dt>
            <dd>
            	<p><a class="t6" target="_blank" href="/seer/pngl/" target="_blank"></a>(1-7封印心得)</p>
            </dd>
        </dl>
    </div>
    <div class="btm"></div>
</div>

 


<div class="sg">
	<ul>
    	<li class="game_1"><a href="http://web.2125.com/ddt/login.html" target="_blank" title="弹弹堂"></a></li>
        <li class="game_2"><a href="http://web.2125.com/hysj/login.html" target="_blank" title="火影世界"></a></li>
        <li class="game_3"><a href="http://web.2125.com/renzhe/" target="_blank" title="小小忍者"></a></li>
        <li class="game_4"><a href="http://web.2125.com/haqi/" target="_blank" title="魔法哈奇"></a></li>
        <li class="game_5"><a href="http://web.2125.com/gf/" target="_blank" title="功夫派"></a></li>
        <li class="game_10"><a href="http://web.2125.com/mole/" target="_blank" title="摩尔庄园"></a></li>
        <li class="game_11"><a href="http://web.2125.com/hua/" target="_blank" title="小花仙"></a></li>
        <li class="game_7"><a href="http://web.2125.com/hero/" target="_blank" title="摩尔勇士"></a></li>
    </ul>
    <a class="mor underline" href="http://web.2125.com/" target="_blank">更多>></a>
</div>
 


<div id="seer_AD" style="display:none;"></div>

<div class="main_box sblue">
	<div class="t1"></div>
    <div class="middle">
        
        <div class="ml">
        	<div class="t2"></div>
            <div class="ml_m">
            	<ul class="jlsz">
                	<li>
                    	<a class="icon_new"></a>
                        <a class="hotic" href="/seer/shsc/jlsxxk.html" target="_blank" >精灵属性相克</a>
                    </li>
                    <li>
                    	<a class="hotic" href="/seer/shsc/nlzdq.html" target="_blank">努力值大全</a>
                    </li>
                    <li>
                    	<a href="/seer/shsc/jlxsjn.html" target="_blank">精灵先手技能</a>
                    </li>
                    <li>
                    	<a class="hotic" href="/seer/shsc/jlljsz.html" target="_blank">精灵练级数值</a>
                    </li>
                    <li>
                    	<a href="/seer/shsc/nykcdq.html" target="_blank">能源矿产大全</a>
                    </li>
                    <li>
                    	<a class="newic" href="/seer/gs/" target="_blank">赛尔故事</a>
                    </li>
                </ul>
                <div class="clear"></div>
                <div class="ml_n">
                	<h4 class="ml_n_t">赛尔号游戏简介和特色</h4>
                    <p>
                    	<a href="/seer/zn/yxjj.html" target="_blank">游戏简介</a>
                    	<a href="/seer/zn/gsbj.html" target="_blank">故事背景</a>
                    	<a href="/seer/zn/yxts.html" target="_blank">游戏特色</a>
                    </p>
                    <div class="line2"></div>
                    <h4 class="ml_n_t">赛尔号SPT任务</h4>
                    <p>
		        		<a href="/seer/SPT/1744.html" target="_blank">蘑菇怪</a>
		        		<a href="/seer/SPT/1743.html" target="_blank">钢牙鲨</a>
		        		<a href="/seer/SPT/1755.html" target="_blank">里奥斯</a>
		        		<a href="/seer/SPT/1741.html" target="_blank">阿克希亚</a>
		        		<a href="/seer/SPT/1740.html" target="_blank">提亚斯</a>
		        		<a href="/seer/SPT/1756.html" target="_blank">雷伊</a>
		        		<a href="/seer/SPT/1733.html" target="_blank">纳多雷</a>
		        		<a href="/seer/SPT/1739.html" target="_blank">雷纳多</a>
		        		<a href="/seer/SPT/1738.html" target="_blank">尤纳斯</a>
		        		<a href="/seer/SPT/1735.html" target="_blank">魔狮迪露</a>
		        		<a href="/seer/SPT/1761.html" target="_blank">哈莫雷特</a>
		        		<a href="/seer/SPT/1762.html" target="_blank">奈尼芬多</a>
		        		<a href="/seer/SPT/1763.html" target="_blank">塔西亚</a>
		        		<a href="/seer/SPT/1768.html" target="_blank">波戈</a>
		        		<a href="/seer/SPT/1764.html" target="_blank">塔克林</a>
		        		<a href="/seer/SPT/1769.html" target="_blank">塞维尔</a>
		        		<a href="/seer/SPT/1767.html" target="_blank">厄尔塞拉</a>
                    </p>
                    <div class="line2"></div>
                    <h4 class="ml_n_t">谱尼：突破封印全攻略</h4>
                    <p>
	                    <span><a href="/seer/pngl/1881.html" target="_blank">第一封印[虚无]</a></span>
	                    <span><a href="/seer/pngl/1882.html" target="_blank">第二封印[元素]</a></span>
	                    <span><a href="/seer/pngl/1883.html" target="_blank">第三封印[能量]</a></span>
	                    <span><a href="/seer/pngl/1885.html" target="_blank">第四封印[生命]</a></span>
	                    <span><a href="/seer/pngl/1886.html" target="_blank">第五封印[轮回]</a></span>
	                    <span><a href="/seer/pngl/1887.html" target="_blank">第六封印[永恒]</a></span>
	                    <span><a href="/seer/pngl/1899.html" target="_blank">第七封印[圣洁]</a></span>
                    </p>
                    <div class="line2"></div>
                </div>
                
                <h3 class="ks_t"><a href="http://miba.2125.com/thread/l?fid=2" target="_blank">更多米吧热帖</a></h3>
                <ul class="ks_n">
                	        		        		<li><span><a href="http://miba.2125.com/thread/c?tid=406" target="_blank">讨论</a></span><a href="http://miba.2125.com/thread/c?tid=406" target="_blank">
			                										谁是速度，速攻之王？								                 	
					</a></li>
	            	        		<li><span><a href="http://miba.2125.com/thread/c?tid=1040" target="_blank">讨论</a></span><a href="http://miba.2125.com/thread/c?tid=1040" target="_blank">
			                										50只100的进来								                 	
					</a></li>
	            	        		<li><span><a href="http://miba.2125.com/thread/c?tid=603" target="_blank">讨论</a></span><a href="http://miba.2125.com/thread/c?tid=603" target="_blank">
			                										怎么打哈默啊								                 	
					</a></li>
	            	        		<li><span><a href="http://miba.2125.com/thread/c?tid=607" target="_blank">讨论</a></span><a href="http://miba.2125.com/thread/c?tid=607" target="_blank">
			                										哪些神兽好秒								                 	
					</a></li>
	            	        		<li><span><a href="http://miba.2125.com/thread/c?tid=175" target="_blank">讨论</a></span><a href="http://miba.2125.com/thread/c?tid=175" target="_blank">
			                										大家想要什么样的精灵？								                 	
					</a></li>
	            	        		<li><span><a href="http://miba.2125.com/thread/c?tid=336" target="_blank">讨论</a></span><a href="http://miba.2125.com/thread/c?tid=336" target="_blank">
			                										大家有几个100的？								                 	
					</a></li>
	            	        		<li><span><a href="http://miba.2125.com/thread/c?tid=3174" target="_blank">讨论</a></span><a href="http://miba.2125.com/thread/c?tid=3174" target="_blank">
			                										祖耀在哪里，怎么获得？								                 	
					</a></li>
	            	        		<li><span><a href="http://miba.2125.com/thread/c?tid=245" target="_blank">讨论</a></span><a href="http://miba.2125.com/thread/c?tid=245" target="_blank">
			                										怎么打雷伊！（求助）								                 	
					</a></li>
	            	        		<li><span><a href="http://miba.2125.com/thread/c?tid=339" target="_blank">讨论</a></span><a href="http://miba.2125.com/thread/c?tid=339" target="_blank">
			                										大家说谁是火系之王。								                 	
					</a></li>
	            	        		<li><span><a href="http://miba.2125.com/thread/c?tid=416" target="_blank">讨论</a></span><a href="http://miba.2125.com/thread/c?tid=416" target="_blank">
			                										谱尼圣洁能用绝命秒吗								                 	
					</a></li>
	            	        		<li><span><a href="http://miba.2125.com/thread/c?tid=344" target="_blank">讨论</a></span><a href="http://miba.2125.com/thread/c?tid=344" target="_blank">
			                										雷神天明闪另类学法								                 	
					</a></li>
	            	        		<li><span><a href="http://miba.2125.com/thread/c?tid=2553" target="_blank">讨论</a></span><a href="http://miba.2125.com/thread/c?tid=2553" target="_blank">
			                										新年了，你最想在赛尔号得到什么礼物呢？ 								                 	
					</a></li>
	                            </ul>
                
            </div>
            <div class="clear"></div>
            <div class="b2"></div>
        </div>
        
        
        <div class="mm">
        	
        	<div class="seer_box">
            	<div class="t3">
                	<a class="more" href="/seer/gl/" target="_blank"></a>
                	<span class="glic"></span><span class="glwz"></span>
                </div>
                <div class="con">
                	        		        		        		<h4 class="title1">
                    	<a href="http://web.2125.com/seer/gl/11881.html" target="_blank">埃洛兽的擂台-任务流程</a>
                    </h4>
	        		
	            	        		        		<h4 class="title2">
                    	<a href="http://web.2125.com/seer/gl/11880.html" target="_blank">出发！麒麟的召唤-任务流程</a>
                         |
	        		
	            	        		        			<a href="http://web.2125.com/seer/gl/11879.html" target="_blank">20120203更新内容</a>
                    </h4>
	        		
	            	        		        		<h4 class="title1">
                    	<a href="http://web.2125.com/seer/gl/11695.html" target="_blank">传递幸福的使者-任务流程</a>
                    </h4>
	        		
	            	        		        		<h4 class="title2">
                    	<a href="http://web.2125.com/seer/gl/11694.html" target="_blank">决战天幕宫殿-任务流程</a>
                         |
	        		
	            	        		        			<a href="http://web.2125.com/seer/gl/11693.html" target="_blank">光明顶的奇迹-任务流程</a>
                    </h4>
	        		
	            	        		
	            	        		
	            	        		
	            	        		
	            	        		
	            	        		
	            	        		
	            	        		
	            	        		
	                                <ul class="news">
                    	<li class="line2"></li>
                    	                    	                    	                    	                    	                    	                    	                    	                    	                    	                    	                    	                    	                    	                    		<li><span class="date">[01/13]</span><a target="_blank" href="http://web.2125.com/seer/gl/11691.html">
			                									20120113更新内容														</a></li>
                    	                    	                    	                    		<li><span class="date">[01/13]</span><a target="_blank" href="http://web.2125.com/seer/gl/11690.html">
			                									20120106更新内容														</a></li>
                    	                    	                    	                    		<li><span class="date">[12/30]</span><a target="_blank" href="http://web.2125.com/seer/gl/11689.html">
			                									20111230更新内容														</a></li>
                    	                    	                    	                    		<li><span class="date">[08/29]</span><a target="_blank" href="http://web.2125.com/seer/gl/10171.html">
			                									赛尔号雪灵解析														</a></li>
                    	                    	                    	                    	                    	                    	                    	                    	                    	                    	                    	                    	                        <li class="line2"></li>
                                            	                    	                    	                    	                    	                    	                    	                    	                    	                    	                    	                    	                    	                    	                    	                    	                    	                    	                    	                    	                    	                    		<li><span class="date">[08/29]</span><a target="_blank" href="http://web.2125.com/seer/gl/10170.html">
			                										赛尔号瑞尔斯怎么得								                 			
                    		</a></li>
                    	                    	                    	                    		<li><span class="date">[08/26]</span><a target="_blank" href="http://web.2125.com/seer/gl/10150.html">
			                				                		<font class="org">
			                			0826版本攻略全知道									</font>
								                 			
                    		</a></li>
                    	                    	                    	                    		<li><span class="date">[08/26]</span><a target="_blank" href="http://web.2125.com/seer/gl/10147.html">
			                										精灵— 赛特								                 			
                    		</a></li>
                    	                    	                    	                    		<li><span class="date">[08/26]</span><a target="_blank" href="http://web.2125.com/seer/gl/10146.html">
			                										精灵—奇变								                 			
                    		</a></li>
                    	                    	                    	                    		<li><span class="date">[08/26]</span><a target="_blank" href="http://web.2125.com/seer/gl/10145.html">
			                										精灵—艾特								                 			
                    		</a></li>
                    	                    	                    </ul>
                </div>
                <div class="b3"></div>
            </div>
            
            <div class="seer_box pl8">
            	<div class="t3">
                	<a class="more" href="/seer/gs/" target="_blank"></a>
                	<span class="mjic"></span><span class="mjwz"></span>
                </div>
                <div class="con">
                	<ul class="news pt5">                	
                		        			        			        			<li><span class="date">[05/30]</span><a target="_blank" href="http://web.2125.com/seer/gs/8282.html">
			                										粉嘟嘟&本竺历险记								                 	
						</a></li>
	        			        			        			        			<li><span class="date">[05/17]</span><a target="_blank" href="http://web.2125.com/seer/gs/7679.html">
			                										我不想说我是珍稀精灵								                 	
						</a></li>
	        			        			        			        			<li><span class="date">[05/12]</span><a target="_blank" href="http://web.2125.com/seer/gs/7582.html">
			                										NONO版—一闪一闪小星星								                 	
						</a></li>
	        			        			        			        			<li><span class="date">[05/12]</span><a target="_blank" href="http://web.2125.com/seer/gs/7581.html">
			                										NONO版上学歌								                 	
						</a></li>
	        			        			        			        			        			        			        			        			        			        			        			        			        			        			        			        			        			        			        			        			        		
                        <li class="line2"></li>
                        
	        			        			        			        			        			        			        			        			        			        			        			<li><span class="date">[05/12]</span><a target="_blank" href="http://web.2125.com/seer/gs/7579.html">
			                										谱尼外传Ⅱ第四章								                 	
						</a></li>
	        			        			        			        			<li><span class="date">[05/12]</span><a target="_blank" href="http://web.2125.com/seer/gs/7578.html">
			                										谱尼外传Ⅱ第三章								                 	
						</a></li>
	        			        			        			        			<li><span class="date">[05/12]</span><a target="_blank" href="http://web.2125.com/seer/gs/7577.html">
			                										谱尼外传Ⅱ第二章								                 	
						</a></li>
	        			        			        			        			<li><span class="date">[05/12]</span><a target="_blank" href="http://web.2125.com/seer/gs/7576.html">
			                										谱尼外传Ⅱ第一章								                 	
						</a></li>
	        			        			        			        			        			        			        			        			        			        			        			        			        		
                        <li class="line2"></li>
                        
                    	        			        			        			        			        			        			        			        			        			        			        			        			        			        			        			        			        			        			<li><span class="date">[05/12]</span><a target="_blank" href="http://web.2125.com/seer/gs/7563.html">
			                										精灵世界的恐慌（5） 狂K美拉图								                 	
						</a></li>
	        			        			        			        			<li><span class="date">[05/12]</span><a target="_blank" href="http://web.2125.com/seer/gs/7562.html">
			                										精灵世界的恐慌（4） 回到亚多								                 	
						</a></li>
	        			        			        			        			<li><span class="date">[05/12]</span><a target="_blank" href="http://web.2125.com/seer/gs/7561.html">
			                										精灵世界的恐慌（3） 假叛变								                 	
						</a></li>
	        			        			        			        			<li><span class="date">[05/12]</span><a target="_blank" href="http://web.2125.com/seer/gs/7560.html">
			                										精灵世界的恐慌（2）巨大的阴谋								                 	
						</a></li>
	        			        			        			        			<li><span class="date">[05/12]</span><a target="_blank" href="http://web.2125.com/seer/gs/7558.html">
			                										精灵世界的恐慌（1）精灵学院历险记								                 	
						</a></li>
	        			        		   
                    </ul>
                </div>
                <div class="b3"></div>
            </div>  
        </div>
        
        
        <div class="seer_line"></div>
        <div class="mm mt2">
        	
        	<div class="seer_box">
            	<div class="t3">
                	<a class="more" href="/seer/zddz/" target="_blank"></a>
                	<span class="dzic"></span><span class="dzwz"></span>
                </div>
                <div class="con">
                	        		        		        		<h4 class="title1">
                    	<a href="http://web.2125.com/seer/zddz/8998.html" target="_blank">赛尔号弱化精灵选择心得</a>
                    </h4>
	        		
	            	        		        		<h4 class="title2">
                    	<a href="http://web.2125.com/seer/zddz/8940.html" target="_blank">盖亚三魂印解析</a>
                         |
	        		
	            	        		        			<a href="http://web.2125.com/seer/zddz/8936.html" target="_blank">传承解析</a>
                    </h4>
	        		
	            	        		        		<h4 class="title1">
                    	<a href="http://web.2125.com/seer/zddz/8762.html" target="_blank">卡修斯技能乾坤反转效果猜想</a>
                    </h4>
	        		
	            	        		        		<h4 class="title2">
                    	<a href="http://web.2125.com/seer/zddz/8275.html" target="_blank">所有精灵能力极限数据</a>
                         |
	        		
	            	        		        			<a href="http://web.2125.com/seer/zddz/8273.html" target="_blank">巅峰之战 每个人都不是新手</a>
                    </h4>
	        		
	            	        		
	            	        		
	            	        		
	            	        		
	            	        		
	            	        		
	            	        		
	            	        		
	            	        		
	                            	
                    <ul class="news pt10">
                    	<li class="line2"></li>
                  	                  	                  	                  	                  	                  	                  	                  	                  	                  	                  	                  	                  	                  	                  		<li><span class="date">[05/24]</span><a target="_blank" href="http://web.2125.com/seer/zddz/8088.html">
			                										赛尔号属性分析（Ⅱ）								                 	
						</a></li>
                  	                  	                  	                  		<li><span class="date">[05/24]</span><a target="_blank" href="http://web.2125.com/seer/zddz/8087.html">
			                										赛尔号属性分析（Ⅰ）								                 	
						</a></li>
                  	                  	                  	                  		<li><span class="date">[05/23]</span><a target="_blank" href="http://web.2125.com/seer/zddz/8020.html">
			                										赛尔号pk战术详解Ⅱ								                 	
						</a></li>
                  	                  	                  	                  		<li><span class="date">[05/10]</span><a target="_blank" href="http://web.2125.com/seer/zddz/7487.html">
			                										赛尔号传承高手攻略4								                 	
						</a></li>
                  	                  	                  	                  	                  	                  	                  	                  	                  	                  	                  	                  	                        <li class="line2"></li>
                                       	                   	                   	                   	                   	                   	                   	                   	                   	                   	                   	                   	                   	                   	                   	                   	                   	                   	                   	                   	                   	                   		<li><span class="date">[05/09]</span><a target="_blank" href="http://web.2125.com/seer/zddz/7443.html">
			                										赛尔号传承高手攻略3								                 	           			
                   		</a></li>
                   	                   	                   	                   		<li><span class="date">[05/09]</span><a target="_blank" href="http://web.2125.com/seer/zddz/7442.html">
			                										赛尔号传承高手攻略2								                 	           			
                   		</a></li>
                   	                   	                   	                   		<li><span class="date">[05/09]</span><a target="_blank" href="http://web.2125.com/seer/zddz/7440.html">
			                										赛尔号传承高手攻略1								                 	           			
                   		</a></li>
                   	                   	                   	                   		<li><span class="date">[05/04]</span><a target="_blank" href="http://web.2125.com/seer/zddz/7292.html">
			                										巅峰之战详解								                 	           			
                   		</a></li>
                   	                   	                   	                   		<li><span class="date">[04/27]</span><a target="_blank" href="http://web.2125.com/seer/zddz/7067.html">
			                										白虎实战解析								                 	           			
                   		</a></li>
                   	                   	                    </ul>
                </div>
                <div class="b3"></div>
            </div>
            
            <div class="seer_box pl8">
            	<div class="t3">
                	<a class="more" href="/seer/news/" target="_blank"></a>
                	<span class="jhic"></span><span class="jhwz"></span>
                </div>
                <div class="con">
                	<ul class="news">
                		        			        			        			<li><span class="date">[08/03]</span><a target="_blank" href="http://web.2125.com/seer/news/9795.html">
			                										星系守护神之朱雀菲尼克斯								                 	
						</a></li>
	        			        			        			        			<li><span class="date">[08/03]</span><a target="_blank" href="http://web.2125.com/seer/news/9794.html">
			                										光明的守护者								                 	
						</a></li>
	        			        			        			        			<li><span class="date">[08/03]</span><a target="_blank" href="http://web.2125.com/seer/news/9793.html">
			                										解密新同学								                 	
						</a></li>
	        			        			        			        			<li><span class="date">[08/03]</span><a target="_blank" href="http://web.2125.com/seer/news/9792.html">
			                										泡泡五兄妹&葡萄庄园的捣蛋鬼								                 	
						</a></li>
	        			        			        			        			<li><span class="date">[08/03]</span><a target="_blank" href="http://web.2125.com/seer/news/9791.html">
			                										未来星的“危机”&精灵梦之队Ⅱ								                 	
						</a></li>
	        			        			        			        			        			        			        			        			        			        			        			        			        			        			        			        			        			        			        			        			        		
                        <li class="line2" style="height:16px;"></li>
                        
	        			        			        			        			        			        			        			        			        			        			        			        			        			<li><span class="date">[08/03]</span><a target="_blank" href="http://web.2125.com/seer/news/9789.html">
			                										梦幻扭蛋机—第九弹								                 		        				
						</a></li>
	        			        			        			        			<li><span class="date">[08/03]</span><a target="_blank" href="http://web.2125.com/seer/news/9790.html">
			                										梦幻扭蛋机—第九弹								                 		        				
						</a></li>
	        			        			        			        			<li><span class="date">[07/28]</span><a target="_blank" href="http://web.2125.com/seer/news/9701.html">
			                										大电影兑换								                 		        				
						</a></li>
	        			        			        			        			<li><span class="date">[07/28]</span><a target="_blank" href="http://web.2125.com/seer/news/9700.html">
			                										击破邪灵圣殿								                 		        				
						</a></li>
	        			        			        			        			        			        			        			        			        			        			        			        			        		
                        <li class="line2"></li>
                        
                    	        			        			        			        			        			        			        			        			        			        			        			        			        			        			        			        			        			        			        			        			<li><span class="date">[07/28]</span><a target="_blank" href="http://web.2125.com/seer/news/9699.html">
			                										五行仙境								                 	
						</a></li>
	        			        			        			        			<li><span class="date">[07/28]</span><a target="_blank" href="http://web.2125.com/seer/news/9698.html">
			                										“奇怪”的新同学								                 	
						</a></li>
	        			        			        			        			<li><span class="date">[07/28]</span><a target="_blank" href="http://web.2125.com/seer/news/9697.html">
			                										巅峰之战								                 	
						</a></li>
	        			        			        			        			<li><span class="date">[07/28]</span><a target="_blank" href="http://web.2125.com/seer/news/9696.html">
			                										更新内容								                 	
						</a></li>
	        			        			        			        			<li><span class="date">[07/21]</span><a target="_blank" href="http://web.2125.com/seer/news/9577.html">
			                										格雷深湖阻击战								                 	
						</a></li>
	        			        		 
                    	
                    </ul>
                </div>
                <div class="b3"></div>
            </div>
        </div>
        
        <div class="clear"></div>
    </div>
    <div class="b1"></div>
</div>


<div class="bizhiBox">
	<div class="top">
    	<a class="more" href="/seer/yxbz" target="_blank"></a>
    </div>
    <div class="con">
    	<ul>
        	        	            	<li><a href="http://img.2125.com/upload/seer/d49caa71d987d710d4dcfdeaa452ae5c.jpg" target="_blank"><img src="http://upload.ci.com/sitePage/1//img.2125.com/upload/seer/thumb/3e8966686939fca08d32e8113b089ec6.jpg" /></a>
				<p><a href="http://img.2125.com/upload/seer/d49caa71d987d710d4dcfdeaa452ae5c.jpg" target="_blank">1024*768</a>
									  |  <a href="http://img.2125.com/upload/seer/d327dd2c53392c7df55a3307c00f2cda.jpg" target="_blank">1280*960</a>
						
				</p>
				</li>	
			            	<li><a href="http://img.2125.com/upload/seer/e132a5d85df450b9905402f7fa0130f9.jpg" target="_blank"><img src="http://upload.ci.com/sitePage/1//img.2125.com/upload/seer/thumb/a5f781971f6c9c0809cc47bffb668499.jpg" /></a>
				<p><a href="http://img.2125.com/upload/seer/e132a5d85df450b9905402f7fa0130f9.jpg" target="_blank">1024*768</a>
									  |  <a href="http://img.2125.com/upload/seer/ec7a4bab892a17494065add4b00bf5e3.jpg" target="_blank">1280*960</a>
						
				</p>
				</li>	
			            	<li><a href="http://img.2125.com/upload/seer/be73a437ba3025fcb6b26fb045b66ba9.jpg" target="_blank"><img src="http://upload.ci.com/sitePage/1//img.2125.com/upload/seer/thumb/8986c3aec5eec8219bfc15004b4e619e.jpg" /></a>
				<p><a href="http://img.2125.com/upload/seer/be73a437ba3025fcb6b26fb045b66ba9.jpg" target="_blank">1024*768</a>
									  |  <a href="http://img.2125.com/upload/seer/dd9ec5dad23c6da3bd1a3f4db2d11cdb.jpg" target="_blank">1280*960</a>
						
				</p>
				</li>	
			            	<li><a href="http://img.2125.com/upload/seer/fd94b71f3415415cbb0c1e51e0455647.jpg" target="_blank"><img src="http://upload.ci.com/sitePage/1//img.2125.com/upload/seer/thumb/a1e40771a5d520ae3e71e65437c917c1.jpg" /></a>
				<p><a href="http://img.2125.com/upload/seer/fd94b71f3415415cbb0c1e51e0455647.jpg" target="_blank">1024*768</a>
									  |  <a href="http://img.2125.com/upload/seer/0f2752482156c761a8cbb111df8ea6a3.jpg" target="_blank">1280*960</a>
						
				</p>
				</li>	
						
        </ul>
        <div class="clear"></div>
    </div>
    <div class="btm">
    </div>
</div>




<div class="jinglingBox">
    <div class="jl_title">
    	<a class="back" href="javascript:;" onclick="$(document).scrollTop(0);return false;"></a>
        <p>按照精灵“首”字母查询：
        	<a href="javascript:;" id='a'>A</a><a href="javascript:;" id='b'>B</a><a href="javascript:;" id='c'>C</a><a href="javascript:;" id='d'>D</a><a href="javascript:;" id='e'>E</a><a href="javascript:;" id='f'>F</a><a href="javascript:;" id='g'>G</a><a href="javascript:;" id='h'>H</a><a href="javascript:;" id='i'>I</a><a href="javascript:;" id='j'>J</a><a href="javascript:;" id='k'>K</a><a href="javascript:;" id='l'>L</a><a href="javascript:;" id='m'>M</a><a href="javascript:;" id='n'>N</a><a href="javascript:;" id='o'>O</a><a href="javascript:;" id='p'>P</a><a href="javascript:;" id='q'>Q</a><a href="javascript:;" id='r'>R</a><a href="javascript:;" id='s'>S</a><a href="javascript:;" id='t'>T</a><a href="javascript:;" id='u'>U</a><a href="javascript:;" id='v'>V</a><a href="javascript:;" id='w'>W</a><a href="javascript:;" id='x'>X</a><a href="javascript:;" id='y'>Y</a><a href="javascript:;" id='z'>Z</a>
        </p>
    </div> 
    	     
        <ul class="ul_top">
            <li onclick="typejl('all',this);" class="over"><a href="javascript:;"><img alt="全属性" src="http://upload.ci.com/sitePage/1//res.2125.com/images/seer/jltj/t1.png"/>全属性</a></li>
            <li onclick="typejl('火',this);"><a href="javascript:;"><img alt="火" src="http://upload.ci.com/sitePage/1//res.2125.com/images/seer/jltj/t2.png"/>火</a></li>
            <li onclick="typejl('水',this);"><a href="javascript:;"><img alt="水" src="http://upload.ci.com/sitePage/1//res.2125.com/images/seer/jltj/t3.png"/>水</a></li>
            <li onclick="typejl('草',this);"><a href="javascript:;"><img alt="草" src="http://upload.ci.com/sitePage/1//res.2125.com/images/seer/jltj/t4.png"/>草</a></li>
            <li onclick="typejl('飞行',this);"><a href="javascript:;"><img alt="飞行" src="http://upload.ci.com/sitePage/1//res.2125.com/images/seer/jltj/t5.png"/>飞行</a></li>
            <li onclick="typejl('电',this);"><a href="javascript:;"><img alt="电" src="http://upload.ci.com/sitePage/1//res.2125.com/images/seer/jltj/t6.png"/>电</a></li>
            <li onclick="typejl('地面',this);"><a href="javascript:;"><img alt="地面" src="http://upload.ci.com/sitePage/1//res.2125.com/images/seer/jltj/t7.png"/>地面</a></li>
            <li onclick="typejl('机械',this);"><a href="javascript:;"><img alt="机械" src="http://upload.ci.com/sitePage/1//res.2125.com/images/seer/jltj/t8.png"/>机械</a></li>
            <li onclick="typejl('普通',this);"><a href="javascript:;"><img alt="普通" src="http://upload.ci.com/sitePage/1//res.2125.com/images/seer/jltj/t9.png"/>普通</a></li>
            <li onclick="typejl('冰雪',this);"><a href="javascript:;"><img alt="冰雪" src="http://upload.ci.com/sitePage/1//res.2125.com/images/seer/jltj/t10.png"/>冰</a></li>
            <li onclick="typejl('战斗',this);"><a href="javascript:;"><img alt="战斗" src="http://upload.ci.com/sitePage/1//res.2125.com/images/seer/jltj/t11.png"/>战斗</a></li>
            <li onclick="typejl('暗影',this);"><a href="javascript:;"><img alt="暗影" src="http://upload.ci.com/sitePage/1//res.2125.com/images/seer/jltj/t12.png"/>暗影</a></li>
            <li onclick="typejl('龙',this);"><a href="javascript:;"><img alt="龙系" src="http://upload.ci.com/sitePage/1//res.2125.com/images/seer/jltj/t13.png"/>龙系</a></li>
            <li onclick="typejl('神秘',this);"><a href="javascript:;"><img alt="神秘" src="http://upload.ci.com/sitePage/1//res.2125.com/images/seer/jltj/t14.png"/>神秘</a></li>
            <li onclick="typejl('光',this);"><a href="javascript:;"><img alt="光" src="http://upload.ci.com/sitePage/1//res.2125.com/images/seer/jltj/t15.png"/>光</a></li>
            <li onclick="typejl('圣灵',this);"><a href="javascript:;"><img alt="圣灵" src="http://upload.ci.com/sitePage/1//res.2125.com/images/seer/jltj/t16.png"/>圣灵</a></li>
            <li onclick="typejl('超能',this);"><a href="javascript:;"><img alt="超能" src="http://upload.ci.com/sitePage/1//res.2125.com/images/seer/jltj/t17.png"/>超能</a></li>
       		<li onclick="typejl('double',this);"><a href="javascript:;"><img alt="双属性" src="http://upload.ci.com/sitePage/1//res.2125.com/images/seer/jltj/t18.png"/>双属性</a></li>
            <li onclick="typejl('融合精灵',this);"><a href="javascript:;"><img alt="融合" src="http://upload.ci.com/sitePage/1//res.2125.com/images/seer/jltj/t19.png"/>融合</a></li>
        </ul>
         <div id="ul_midd">
              <ul class="jltj_ul">
              		       			       				       			
	       			       				       			
	       			       					       			<li id="900" jl_num="2" name="水" py="b" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img3.2125.com/upload/seer/thumb/61500f49418a5e31ab0e9ac07112e247.png" />
			            		       			<p>900比巴卜神枪 </p></li>
	       			
						<div id="open_900" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/2b1f5f88945f25c9c4f32350ed32b24f.png"/>
                            		</span>
                        			<a href="javascript:void(0);">899神枪 </a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/61500f49418a5e31ab0e9ac07112e247.png"/>
                            		</span>
                        			<a href="javascript:void(0);">900比巴卜神枪 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="896" jl_num="2" name="超能" py="b" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/6df23d75f4a531243fd66c288f658d7f.jpg" />
			            		       			<p>896比巴卜奇变 </p></li>
	       			
						<div id="open_896" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/76f7a2ea284cf3d9618c7b7d0e34375d.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">895奇变</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/6df23d75f4a531243fd66c288f658d7f.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">896比巴卜奇变 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="894" jl_num="2" name="冰" py="a" rhtype="稀有精灵">
		       						            	<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/b304146fd48c8d4a1e7412ff8683c89e.jpg" />
			            		       			<p>894艾斯特 </p></li>
	       			
						<div id="open_894" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/47a6c54449f3b972cac2f22a232389fe.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">893艾特</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/b304146fd48c8d4a1e7412ff8683c89e.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">894艾斯特 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="892" jl_num="2" name="超能" py="k" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/c3932ff139446452c11cf9941a4f8a14.jpg" />
			            		       			<p>892克米特 </p></li>
	       			
						<div id="open_892" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/e49416324108efd68b79a9c3b6d54753.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">891克米尔</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/c3932ff139446452c11cf9941a4f8a14.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">892克米特 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="890" jl_num="2" name="火" py="t" rhtype="BOSS精灵">
		       						            	<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/d637399da098ff049d522b37ebb648f3.jpg" />
			            		       			<p>890泰沃斯 </p></li>
	       			
						<div id="open_890" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/244cd608d98acbdec1b8ceb51d294540.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">889沃尔斯</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/d637399da098ff049d522b37ebb648f3.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">890泰沃斯 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="888" jl_num="2" name="机械" py="b" rhtype="收费精灵">
		       						            	<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/6571e54b45b14532d21b570c26215e14.jpg" />
			            		       			<p>888彼得华 </p></li>
	       			
						<div id="open_888" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/dde2b9823ea6b28aba2f27fef39470f6.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">887彼得</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/6571e54b45b14532d21b570c26215e14.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">888彼得华 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="886" jl_num="3" name="地面" py="k" rhtype="稀有精灵">
		       						            	<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/077a6d20d5ba6d7351819ac14fade478.jpg" />
			            		       			<p>886卡迪达克 </p></li>
	       			
						<div id="open_886" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img3.2125.com/upload/seer/thumb/f59115ac89135f72c484e90bef162ade.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">884达迪拉</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img3.2125.com/upload/seer/thumb/28737810963487bc8955a6c9eaa26aa2.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">885达迪克</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/077a6d20d5ba6d7351819ac14fade478.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">886卡迪达克 </a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="883" jl_num="2" name="飞行" py="b" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img3.2125.com/upload/seer/thumb/08791fa02dced2d084a3f0ad10571adb.jpg" />
			            		       			<p>883比巴卜酷滑 </p></li>
	       			
						<div id="open_883" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/f7c9363a48be48adcf86ae86ed6b6250.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">882酷滑  </a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/08791fa02dced2d084a3f0ad10571adb.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">883比巴卜酷滑 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="881" jl_num="1" name="火 战斗" py="c" rhtype="http://upload.ci.com/sitePage/1//img1.2125.com/upload/seer/thumb/bdeae94f057c635c234a70ae9c885095.jpg">
		       										<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img1.2125.com/upload/seer/thumb/bdeae94f057c635c234a70ae9c885095.jpg" />
			            		       			<p>881炽焰之刃 </p></li>
	       			
						<div id="open_881" style="width: 113px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img.2125.com/img/seer/zhandou/c17dd72cf4b7682654c5fff78c270065.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">881炽焰之刃 </a>
                    			</li>
                      		</ul>
                   		</div>  	                   		
	       				       			
	       			       					       			<li id="880" jl_num="3" name="普通" py="y" rhtype="初始精灵">
		       						            	<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/b170f0aa8948be3abbc6322ed7b8ab2f.jpg" />
			            		       			<p>880伊杰罗尼 </p></li>
	       			
						<div id="open_880" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img3.2125.com/upload/seer/thumb/40294d8c5e3a312e56da0e45dc846a8e.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">878杰尼</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img3.2125.com/upload/seer/thumb/e4539d0c1f4727c5719b8263d678dd3f.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">879杰鲁尼</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/b170f0aa8948be3abbc6322ed7b8ab2f.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">880伊杰罗尼 </a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="877" jl_num="2" name="草" py="b" rhtype="稀有精灵">
		       										<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img1.2125.com/upload/seer/thumb/2ec44862e31967adc265065a771dbb77.jpg" />
			            		       			<p>877比巴卜花仙 </p></li>
	       			
						<div id="open_877" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/3dea2d0419dcee8ec9082848e780a62c.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">876 花仙</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/2ec44862e31967adc265065a771dbb77.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">877比巴卜花仙 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="875" jl_num="1" name="暗影" py="b" rhtype="http://img1.2125.com/upload/seer/thumb/9d0664320a6b0edc39ce9ffd08dd84f0.jpg">
		       						            	<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img3.2125.com/upload/seer/thumb/9d0664320a6b0edc39ce9ffd08dd84f0.jpg" />
			            		       			<p>875布莱克 </p></li>
	       			
						<div id="open_875" style="width: 113px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img.2125.com/img/seer/anying/5061d80a1c341551f6aae906ee77e9b2.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">875布莱克 </a>
                    			</li>
                      		</ul>
                   		</div>  	                   		
	       				       			
	       			       					       			<li id="874" jl_num="3" name="水" py="h" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/f796fc23de6b1f0e755ef7ff3bc99561.jpg" />
			            		       			<p>874海魂 </p></li>
	       			
						<div id="open_874" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img3.2125.com/upload/seer/thumb/8bd8712b4e470a176115496e2f739a44.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">872小海牙</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img3.2125.com/upload/seer/thumb/dea7ad99f0e93017547ed46676530983.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">873海牙</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/f796fc23de6b1f0e755ef7ff3bc99561.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">874海魂 </a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="871" jl_num="2" name="普通" py="j" rhtype="收费精灵">
		       						            	<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img3.2125.com/upload/seer/thumb/30904580361c451598b9d9adb1bddc29.jpg" />
			            		       			<p>871杰里 </p></li>
	       			
						<div id="open_871" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/2d53820903641ac5505115af28600439.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">870蜗蜗  </a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/30904580361c451598b9d9adb1bddc29.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">871杰里 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="869" jl_num="2" name="战斗" py="d" rhtype="野生精灵">
		       										<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img1.2125.com/upload/seer/thumb/f44df30ce7a05610a26bcf00c97151fb.jpg" />
			            		       			<p>869大力王 </p></li>
	       			
						<div id="open_869" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/fd8cfba87aa8a11d81b94aa736d09c5e.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">868大力  </a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/f44df30ce7a05610a26bcf00c97151fb.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">869大力王 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="867" jl_num="2" name="水" py="a" rhtype="收费精灵">
		       						            	<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img3.2125.com/upload/seer/thumb/293d992c6246ba683566c18b649f8bd0.jpg" />
			            		       			<p>867阿蓝多 </p></li>
	       			
						<div id="open_867" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/36140a63b7fbbffc824c7d8fe161444f.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">866蓝蓝</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/293d992c6246ba683566c18b649f8bd0.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">867阿蓝多 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="865" jl_num="2" name="飞行" py="t" rhtype="收费精灵">
		       										<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img1.2125.com/upload/seer/thumb/447af4b00ab1ab24096cfa7b45f54b14.jpg" />
			            		       			<p>865托鲁克 </p></li>
	       			
						<div id="open_865" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/fcedf68e3958577ae5fbba632a224d81.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">864托达</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/447af4b00ab1ab24096cfa7b45f54b14.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">865托鲁克 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="863" jl_num="3" name="火" py="l" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img3.2125.com/upload/seer/thumb/6a753cb45121a95f5b4cf35359a4766d.jpg" />
			            		       			<p>863烈火雀 </p></li>
	       			
						<div id="open_863" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img3.2125.com/upload/seer/thumb/399bba3f26aa16d3a7093f77b0a02a5a.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">861小火雀</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img3.2125.com/upload/seer/thumb/a3ab79d6ae63d02e8bb3fcceaae5b2c1.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">862火尾雀</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/6a753cb45121a95f5b4cf35359a4766d.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">863烈火雀 </a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="860" jl_num="2" name="草" py="g" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/4d1b620f6348b4b7e9ace05a25ff9d13.jpg" />
			            		       			<p>860古力可可 </p></li>
	       			
						<div id="open_860" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/afd877b86d5d8281479d20e55138696a.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">859毛球</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/4d1b620f6348b4b7e9ace05a25ff9d13.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">860古力可可 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="858" jl_num="1" name="水" py="z" rhtype="http://img1.2125.com/upload/seer/thumb/f65cc62115d881aeb8131215d9b45e0e.jpg">
		       						            	<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/f65cc62115d881aeb8131215d9b45e0e.jpg" />
			            		       			<p>858佐洛</p></li>
	       			
						<div id="open_858" style="width: 113px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img.2125.com/img/seer/shui/3c05820ed7eec70bf1b65bc24edfcdb5.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">858佐洛</a>
                    			</li>
                      		</ul>
                   		</div>  	                   		
	       				       			
	       			       					       			<li id="857" jl_num="1" name="光" py="b" rhtype="http://upload.ci.com/sitePage/1//img1.2125.com/upload/seer/thumb/8a9835c341f96c6ea5993b5398bd8f5a.jpg">
		       										<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img1.2125.com/upload/seer/thumb/8a9835c341f96c6ea5993b5398bd8f5a.jpg" />
			            		       			<p>857布尔德</p></li>
	       			
						<div id="open_857" style="width: 113px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img.2125.com/img/seer/guang/0508eabf1001fadb265d8abeabada7de.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">857布尔德</a>
                    			</li>
                      		</ul>
                   		</div>  	                   		
	       				       			
	       			       					       			<li id="856" jl_num="1" name="地面" py="p" rhtype="http://img1.2125.com/upload/seer/thumb/149683c70b00141afa0d2dffd0b7a7f2.jpg">
		       						            	<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/149683c70b00141afa0d2dffd0b7a7f2.jpg" />
			            		       			<p>856潘达</p></li>
	       			
						<div id="open_856" style="width: 113px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img.2125.com/img/seer/dimian/fa1bb764522b9a2c25f981c4032d10ce.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">856潘达</a>
                    			</li>
                      		</ul>
                   		</div>  	                   		
	       				       			
	       			       					       			<li id="855" jl_num="2" name="火" py="k" rhtype="BOSS精灵">
		       						            	<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img3.2125.com/upload/seer/thumb/12dd985e2fa963448447a1da42a47316.jpg" />
			            		       			<p>855克莱芬</p></li>
	       			
						<div id="open_855" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/c0fa0d0f79209c1d24c6e6064e271411.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">854克迪</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/12dd985e2fa963448447a1da42a47316.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">855克莱芬</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="853" jl_num="2" name="超能" py="m" rhtype="活动精灵">
		       										<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img1.2125.com/upload/seer/thumb/82379087154d8426dd80b7e7388532c0.jpg" />
			            		       			<p>853蒙米克</p></li>
	       			
						<div id="open_853" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/a8b3e8b8d1f4aa4acf0946c19d10ba82.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">852妙妙</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/82379087154d8426dd80b7e7388532c0.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">853蒙米克</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="851" jl_num="3" name="冰" py="b" rhtype="融合精灵">
		       						            	<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img3.2125.com/upload/seer/thumb/c5d9f3f7381f27e39e5c945fd09a0c78.jpg" />
			            		       			<p>851冰封雪灵</p></li>
	       			
						<div id="open_851" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img3.2125.com/upload/seer/thumb/a9a97845d2ba269e7c779ae7b6849285.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">849雪灵</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img3.2125.com/upload/seer/thumb/92c294e3e6ca3c2064b92d53ef3d4985.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">850冰雪灵</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/c5d9f3f7381f27e39e5c945fd09a0c78.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">851冰封雪灵</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="848" jl_num="2" name="水" py="j" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/81ee72c094fbd27b55c8c43d72e9aa77.jpg" />
			            		       			<p>848巨钳蟹</p></li>
	       			
						<div id="open_848" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/651073e6cebdb525f59aa7979156bf89.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">847蓝壳蟹</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/81ee72c094fbd27b55c8c43d72e9aa77.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">848巨钳蟹</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="846" jl_num="2" name="冰" py="j" rhtype="稀有精灵">
		       						            	<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/9f2002dca3e1f7399dfb390567819374.jpg" />
			            		       			<p>846吉克尤斯</p></li>
	       			
						<div id="open_846" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/132c7d1dc6e8db40e216cc828ec782e5.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">845阿尤</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/9f2002dca3e1f7399dfb390567819374.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">846吉克尤斯</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="844" jl_num="3" name="战斗" py="f" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/b796027354995400bfd821cabc2ffb1b.jpg" />
			            		       			<p>844伏地兽</p></li>
	       			
						<div id="open_844" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img3.2125.com/upload/seer/thumb/9e5eb38ba73124cccd12c1968b8b5390.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">842托特</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//res.61.com/img/seer/07ddd0fa5907a23c067463f4d876b277.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">843托瑞斯</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/b796027354995400bfd821cabc2ffb1b.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">844伏地兽</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="841" jl_num="2" name="草" py="b" rhtype="活动精灵">
		       										<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img1.2125.com/upload/seer/thumb/b061870b72eca0759557fef4c977360a.jpg" />
			            		       			<p>841斑点牛</p></li>
	       			
						<div id="open_841" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/9c0162287797a604fc92224f80d43112.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">840牛牛</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/b061870b72eca0759557fef4c977360a.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">841斑点牛</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="834" jl_num="2" name="光" py="l" rhtype="BOSS精灵">
		       						            	<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img3.2125.com/upload/seer/thumb/64d54d9e300b7c4b6deea41172c061cc.jpg" />
			            		       			<p>834路西法</p></li>
	       			
						<div id="open_834" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/58c7a4d6e31bb940b81ca54bb99ac170.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">833斯奥</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/64d54d9e300b7c4b6deea41172c061cc.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">834路西法</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="832" jl_num="2" name="暗影" py="s" rhtype="收费精灵">
		       										<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img1.2125.com/upload/seer/thumb/8c1f73ed17e8f3a15b5b527c4149af2f.jpg" />
			            		       			<p>832斯特尔</p></li>
	       			
						<div id="open_832" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/39a4142e7bd73cdd428e9680e880d68f.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">831隐形蝶</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/8c1f73ed17e8f3a15b5b527c4149af2f.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">832斯特尔</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="830" jl_num="2" name="超能" py="s" rhtype="稀有精灵">
		       						            	<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img3.2125.com/upload/seer/thumb/f88ddec6000f8b3045c2614875877608.jpg" />
			            		       			<p>830深渊巨兽</p></li>
	       			
						<div id="open_830" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/ef35a817fe330b9c11cb87a164603960.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">829罗查</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/f88ddec6000f8b3045c2614875877608.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">830深渊巨兽</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="828" jl_num="2" name="飞行" py="k" rhtype="野生精灵">
		       										<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img1.2125.com/upload/seer/thumb/d2426049be71ff9b08e91222cd213145.jpg" />
			            		       			<p>828狂野黑鸟</p></li>
	       			
						<div id="open_828" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/2326a4bfda2a2f3c3b3c2d568d9f3977.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">827尖嘴乌</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/d2426049be71ff9b08e91222cd213145.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">828狂野黑鸟</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="817" jl_num="2" name="雷电 火" py="q" rhtype="BOSS精灵">
		       						            	<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img3.2125.com/upload/seer/thumb/f18f6ccc65dea3b1296ac6519857af5f.jpg" />
			            		       			<p>817奇吉克尔 </p></li>
	       			
						<div id="open_817" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/d25188223499a2b843cda4845a5efbca.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">816奇德</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/f18f6ccc65dea3b1296ac6519857af5f.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">817奇吉克尔 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="815" jl_num="2" name="水" py="d" rhtype="野生精灵">
		       										<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img1.2125.com/upload/seer/thumb/b3328a01f986942d8747dce376263b5b.jpg" />
			            		       			<p>815达瑞丽 </p></li>
	       			
						<div id="open_815" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/e4fcfbf63290fcc3a0115f51128dfbc2.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">814琳达</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/b3328a01f986942d8747dce376263b5b.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">815达瑞丽 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="813" jl_num="2" name="战斗" py="k" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img3.2125.com/upload/seer/thumb/68111310decda176ebba3c85a446e970.jpg" />
			            		       			<p>813狂暴战熊 </p></li>
	       			
						<div id="open_813" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/c4220096ac4a162f582757f1c17c1372.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">812汤尼熊</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/68111310decda176ebba3c85a446e970.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">813狂暴战熊 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="811" jl_num="3" name="草" py="s" rhtype="收费精灵">
		       										<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img1.2125.com/upload/seer/thumb/d8c5839f1261539d34a9e88890e23c52.jpg" />
			            		       			<p>811始祖灵兽 </p></li>
	       			
						<div id="open_811" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img3.2125.com/upload/seer/thumb/dda08e57236306abcb104fec588ec37a.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">809灵驹</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img3.2125.com/upload/seer/thumb/dfa11019973ae848ced9575d20bd2779.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">810灵光兽</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/d8c5839f1261539d34a9e88890e23c52.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">811始祖灵兽 </a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="808" jl_num="2" name="机械" py="a" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/6010d9fe273538712688298174c001a2.jpg" />
			            		       			<p>808艾蒂森 </p></li>
	       			
						<div id="open_808" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/83363f628cbbb17731da19a074554c27.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">807艾派</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/6010d9fe273538712688298174c001a2.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">808艾蒂森 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="806" jl_num="2" name="飞行" py="d" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/f759b66c6ca52ccf4c749b7ac720ee7e.jpg" />
			            		       			<p>806大耳吉嘟 </p></li>
	       			
						<div id="open_806" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/99d4fb61955ff8e416d99414f7f8d4e0.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">805吉嘟</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/f759b66c6ca52ccf4c749b7ac720ee7e.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">806大耳吉嘟 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="804" jl_num="2" name="普通" py="d" rhtype="BOSS精灵">
		       						            	<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/51e29382197b7612344145b399a3562e.jpg" />
			            		       			<p>804迪符特 </p></li>
	       			
						<div id="open_804" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/177b70c89a7857b4740686602b809415.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">803迪符</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/51e29382197b7612344145b399a3562e.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">804迪符特 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="802" jl_num="2" name="超能" py="m" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/df187a79b94eb786faa3f4239623919f.jpg" />
			            		       			<p>802马切洛 </p></li>
	       			
						<div id="open_802" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/255137fd0b54ac9c5f33017562a12d3c.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">801马修</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/df187a79b94eb786faa3f4239623919f.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">802马切洛 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="800" jl_num="2" name="草" py="d" rhtype="收费精灵">
		       						            	<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/d6b5271a7bae81962f2c39324f647552.jpg" />
			            		       			<p>800达普林</p></li>
	       			
						<div id="open_800" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/3488a2058782c6ca17ef5eacb9c32e2e.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">799潇潇</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/d6b5271a7bae81962f2c39324f647552.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">800达普林</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="798" jl_num="3" name="地面 暗影" py="k" rhtype="BOSS精灵">
		       						            	<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/ace4bf0a46984ea7143e9fe26eddf1d7.jpg" />
			            		       			<p>798卡修罗</p></li>
	       			
						<div id="open_798" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img3.2125.com/upload/seer/thumb/a281c885e2a655c43a8883ea394e6f53.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">796卡茨</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img3.2125.com/upload/seer/thumb/dfb82a71c8eeaa7177d8cf18a9880976.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">797卡修</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/ace4bf0a46984ea7143e9fe26eddf1d7.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">798卡修罗</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="795" jl_num="2" name="暗影" py="s" rhtype="BOSS精灵">
		       										<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img1.2125.com/upload/seer/thumb/fa78df4143def2adbd9f6ffa1aabde4e.jpg" />
			            		       			<p>795萨弗拉 </p></li>
	       			
						<div id="open_795" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/acdcb6720e2a1be513da7bde95e9537a.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">794萨摩</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/fa78df4143def2adbd9f6ffa1aabde4e.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">795萨弗拉 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="793" jl_num="3" name="电" py="d" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img3.2125.com/upload/seer/thumb/a707ee3a394e8830991f596551f88022.jpg" />
			            		       			<p>793杜尼鲁</p></li>
	       			
						<div id="open_793" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img3.2125.com/upload/seer/thumb/b0e433364146b798a9043449ba2ea6af.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">791杜尔</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img3.2125.com/upload/seer/thumb/242fb846480d6e13cfdddcd2390818e1.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">792杜波</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/a707ee3a394e8830991f596551f88022.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">793杜尼鲁</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="790" jl_num="2" name="水" py="x" rhtype="初始精灵">
		       						            	<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/58fad5a78944c21f63c1f92574fe37c9.jpg" />
			            		       			<p>790西瓦克 </p></li>
	       			
						<div id="open_790" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/7a5f407018d80b6566b2c2eb57097f02.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">789西瓦</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/58fad5a78944c21f63c1f92574fe37c9.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">790西瓦克 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="788" jl_num="2" name="龙" py="c" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/30d2a3eac1382d846a5532e5286471a9.jpg" />
			            		       			<p>788查德伦斯</p></li>
	       			
						<div id="open_788" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/249dbb01f437ab2d5d1a64bfe28d5e0b.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">787查奥德</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/30d2a3eac1382d846a5532e5286471a9.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">788查德伦斯</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="786" jl_num="2" name="水" py="k" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/0900c52e85e6c90743167d0c729f8ec5.jpg" />
			            		       			<p>786卡西露</p></li>
	       			
						<div id="open_786" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/d6e47a121c8620ab1297ab119be43ce5.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">785汐汐</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/0900c52e85e6c90743167d0c729f8ec5.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">786卡西露</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="784" jl_num="2" name="飞行" py="b" rhtype="暗黑精灵 ">
		       						            	<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/facb119f09d454347f7aa45fb8112936.jpg" />
			            		       			<p>784拜洛亚斯 </p></li>
	       			
						<div id="open_784" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/6d474222662886b395f6d197abc9e2eb.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">783洛拉</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/facb119f09d454347f7aa45fb8112936.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">784拜洛亚斯 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="782" jl_num="3" name="冰" py="a" rhtype="暗黑精灵 ">
		       						            	<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/5b3dcfe8dead8990d1d8d67f48dabdcc.jpg" />
			            		       			<p>782阿克诺亚 </p></li>
	       			
						<div id="open_782" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img3.2125.com/upload/seer/thumb/c45a66a6fac643614568abc3dee0e9ff.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">780索斯特 </a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img3.2125.com/upload/seer/thumb/e8553f25c4e5197053cf839a135a5978.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">781赫拉克</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/5b3dcfe8dead8990d1d8d67f48dabdcc.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">782阿克诺亚 </a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="779" jl_num="3" name="超能" py="d" rhtype="暗黑精灵 ">
		       										<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img1.2125.com/upload/seer/thumb/260293318f475e6c665b42767f0552d7.jpg" />
			            		       			<p>779迪普利德 </p></li>
	       			
						<div id="open_779" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img3.2125.com/upload/seer/thumb/20748902d3aa806a8c92a07f050f2003.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">777迪卡</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img3.2125.com/upload/seer/thumb/51f56acaa484a721d0722314d8eb9f51.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">778迪纳德</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/260293318f475e6c665b42767f0552d7.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">779迪普利德 </a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="776" jl_num="2" name="地面" py="l" rhtype="收费精灵">
		       						            	<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/c0408d78abef2cc18575e2d9212384bb.jpg" />
			            		       			<p>776灵灵 </p></li>
	       			
						<div id="open_776" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/8b9571e0e4151548826ba324b8ec00bc.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">775粉粉</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/c0408d78abef2cc18575e2d9212384bb.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">776灵灵 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="774" jl_num="2" name="火" py="y" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/488f18c05c3ce9c2bd7a9291a56645ff.jpg" />
			            		       			<p>774亚兰洛 </p></li>
	       			
						<div id="open_774" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/f9265160860b616f5e671560fded22e7.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">773亚丁 </a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/488f18c05c3ce9c2bd7a9291a56645ff.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">774亚兰洛 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="772" jl_num="2" name="战斗" py="n" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/f0cfde604a93013e3d2877f249042556.jpg" />
			            		       			<p>772纳迪科</p></li>
	       			
						<div id="open_772" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/bc04f46abb24609a2573c8bfc45473ed.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">771纳西</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/f0cfde604a93013e3d2877f249042556.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">772纳迪科</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="770" jl_num="2" name="超能" py="b" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/a52bd2cf7182a9cd62eacebb5bf2b4a8.jpg" />
			            		       			<p>770本伊美</p></li>
	       			
						<div id="open_770" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/a104c7ae3978ee9bb0d50a5a3df04411.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">769本竺  </a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/a52bd2cf7182a9cd62eacebb5bf2b4a8.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">770本伊美</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="768" jl_num="3" name="草" py="d" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/173f1271bbf99c1a1f224c97b1ca8a2f.jpg" />
			            		       			<p>768多格雅</p></li>
	       			
						<div id="open_768" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img3.2125.com/upload/seer/thumb/ce60c4b80e2406d563ed53139723a601.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">766多特</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img3.2125.com/upload/seer/thumb/839b1a9d5ae0e501efcb0d5d072b8401.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">767多雷</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/173f1271bbf99c1a1f224c97b1ca8a2f.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">768多格雅</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="765" jl_num="2" name="地面" py="y" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img3.2125.com/upload/seer/thumb/cd28a08d93c0f625f4d595885ba180a8.jpg" />
			            		       			<p>765依洛克</p></li>
	       			
						<div id="open_765" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/bc1a6cab992a3cda287963e347e0eebf.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">764依乐</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/cd28a08d93c0f625f4d595885ba180a8.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">765依洛克</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="763" jl_num="3" name="水" py="k" rhtype="活动精灵">
		       										<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img1.2125.com/upload/seer/thumb/a1ad3ae15bc4514c19c1beea14dcbc27.jpg" />
			            		       			<p>763库吉拉尔</p></li>
	       			
						<div id="open_763" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img3.2125.com/upload/seer/thumb/c8f2ebc902cb1d0d345ef3072469afd8.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">761库比</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img3.2125.com/upload/seer/thumb/925f1ae9804dde78515cf79026f3d7f6.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">762库拉特</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/a1ad3ae15bc4514c19c1beea14dcbc27.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">763库吉拉尔</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="760" jl_num="1" name="火" py="y" rhtype="http://img1.2125.com/upload/seer/thumb/4ce657b088f4e48d47722344084a141c.jpg">
		       						            	<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/4ce657b088f4e48d47722344084a141c.jpg" />
			            		       			<p>760炎魔</p></li>
	       			
						<div id="open_760" style="width: 113px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//res.61.com/img/seer/a48352b35633beeec460e65fe5dd7f09.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">760炎魔</a>
                    			</li>
                      		</ul>
                   		</div>  	                   		
	       				       			
	       			       					       			<li id="759" jl_num="3" name="水" py="s" rhtype="稀有精灵">
		       										<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img1.2125.com/upload/seer/thumb/ac93ba1ffb10dd299490fc7e147453cf.jpg" />
			            		       			<p>759斯拉特</p></li>
	       			
						<div id="open_759" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img3.2125.com/upload/seer/thumb/8d973cf0f642ca55e393e6f30773b7a5.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">756邪特</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img3.2125.com/upload/seer/thumb/a1b9dd0b26eae1483c156aa86f3693d8.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">757西鲁</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/ac93ba1ffb10dd299490fc7e147453cf.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">759斯拉特</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       					       			<li id="758" jl_num="3" name="火" py="x" rhtype="稀有精灵">
		       						            	<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/6ec622025d1f127285812246b517f2d0.jpg" />
			            		       			<p>758邪洛</p></li>
	       			
						<div id="open_758" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img3.2125.com/upload/seer/thumb/8d973cf0f642ca55e393e6f30773b7a5.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">756邪特</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img3.2125.com/upload/seer/thumb/a1b9dd0b26eae1483c156aa86f3693d8.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">757西鲁</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/6ec622025d1f127285812246b517f2d0.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">758邪洛</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="755" jl_num="2" name="冰 暗影" py="s" rhtype="BOSS精灵">
		       						            	<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img3.2125.com/upload/seer/thumb/ea447a29355b195f7bd965b18323f155.jpg" />
			            		       			<p>755斯普林特</p></li>
	       			
						<div id="open_755" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/81d2d7a8996633e56eaf26601f4d0962.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">754斯林德</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/ea447a29355b195f7bd965b18323f155.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">755斯普林特</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="753" jl_num="3" name="飞行 超能" py="k" rhtype="活动精灵">
		       										<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img1.2125.com/upload/seer/thumb/0ba3642ed1e9850b00b9e5aa15654adf.jpg" />
			            		       			<p>753克多尔</p></li>
	       			
						<div id="open_753" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img3.2125.com/upload/seer/thumb/0474d5ab87806e2ec3a986fbba4069bc.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">751珠儿鸟</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img3.2125.com/upload/seer/thumb/1eafdd9c94802d32cdec7d8298ab83ff.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">752克拉</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/0ba3642ed1e9850b00b9e5aa15654adf.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">753克多尔</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="750" jl_num="2" name="暗影" py="t" rhtype="收费精灵">
		       						            	<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/124db3c9caac6f366bbee417f0580cd9.jpg" />
			            		       			<p>750塔米多德</p></li>
	       			
						<div id="open_750" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/2c49174a6c1162675fe9b36aa67d7191.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">749塔米拉</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/124db3c9caac6f366bbee417f0580cd9.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">750塔米多德</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="748" jl_num="3" name="普通" py="t" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/c64e80ed43a0c727335bbb975f7359bc.jpg" />
			            		       			<p>748塔格沃</p></li>
	       			
						<div id="open_748" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img3.2125.com/upload/seer/thumb/0319db237ffeb71df5ff1db3c074e5d6.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">746基鲁</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img3.2125.com/upload/seer/thumb/2211e19671b966f35ac3e66735cd30fe.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">747基格</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/c64e80ed43a0c727335bbb975f7359bc.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">748塔格沃</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="745" jl_num="2" name="水 超能" py="l" rhtype="活动精灵">
		       										<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img1.2125.com/upload/seer/thumb/d97c84e9ba177c8b592109c16b57c513.jpg" />
			            		       			<p>745雷奥纳</p></li>
	       			
						<div id="open_745" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/a76c9726a64792b4f52d6763089b0d44.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">744雷奥</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/d97c84e9ba177c8b592109c16b57c513.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">745雷奥纳</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="743" jl_num="2" name="飞行" py="l" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img3.2125.com/upload/seer/thumb/62997d87c58a328987f5c78d237a2fc8.jpg" />
			            		       			<p>743丽萨克</p></li>
	       			
						<div id="open_743" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/cacd50c24f30ff59c1b07c528b707bb8.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">742莱克</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/62997d87c58a328987f5c78d237a2fc8.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">743丽萨克</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="741" jl_num="2" name="火 超能" py="j" rhtype="BOSS精灵">
		       										<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img1.2125.com/upload/seer/thumb/dd09ed1433883514273315d171046440.jpg" />
			            		       			<p>741吉尼萨</p></li>
	       			
						<div id="open_741" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/89f04b49c3d9ab278bc851055465ef4b.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">740吉吉</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/dd09ed1433883514273315d171046440.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">741吉尼萨</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="739" jl_num="2" name="草" py="h" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img3.2125.com/upload/seer/thumb/8244d48f97d07bfbad163244867901b1.jpg" />
			            		       			<p>739哈德萨</p></li>
	       			
						<div id="open_739" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/262f1143d3987e92532084df22c20468.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">738哈喽</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/8244d48f97d07bfbad163244867901b1.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">739哈德萨</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="737" jl_num="2" name="地面 战斗" py="l" rhtype="活动精灵">
		       										<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img1.2125.com/upload/seer/thumb/6e62c5322b957e374145be37fb48d329.jpg" />
			            		       			<p>737拉斐尔</p></li>
	       			
						<div id="open_737" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/ef2047f694aa95499fffa4f3c65b29b9.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">736拉鲁</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/6e62c5322b957e374145be37fb48d329.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">737拉斐尔</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="735" jl_num="2" name="冰 电" py="t" rhtype="收费精灵">
		       						            	<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img3.2125.com/upload/seer/thumb/88b96e712e3bdc13c2f241fab6e05956.jpg" />
			            		       			<p>735泰坦达</p></li>
	       			
						<div id="open_735" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/060cb893e5cdb5ae0899e2353929e829.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">734电雪球</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/88b96e712e3bdc13c2f241fab6e05956.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">735泰坦达</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="733" jl_num="2" name="光" py="a" rhtype="野生精灵">
		       										<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img1.2125.com/upload/seer/thumb/c9b84fc57a74371c5cab502dc4642da9.jpg" />
			            		       			<p>733艾里蒙特</p></li>
	       			
						<div id="open_733" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/3c075047af5556628cd9d616cc6a93ea.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">732蒙多</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/c9b84fc57a74371c5cab502dc4642da9.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">733艾里蒙特</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="731" jl_num="2" name="水 暗影" py="s" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img3.2125.com/upload/seer/thumb/2cdf433e8998637b2344526553ecc664.jpg" />
			            		       			<p>731斯特洛亚</p></li>
	       			
						<div id="open_731" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/1c4d396a30876e3a50e6fed2fd9e1f9e.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">730斯比亚</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/2cdf433e8998637b2344526553ecc664.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">731斯特洛亚</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="729" jl_num="1" name="水" py="y" rhtype="http://upload.ci.com/sitePage/1//img1.2125.com/upload/seer/thumb/3e3db9c5298ed823b1224cf0a347e706.jpg">
		       										<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img1.2125.com/upload/seer/thumb/3e3db9c5298ed823b1224cf0a347e706.jpg" />
			            		       			<p>729鱼龙王</p></li>
	       			
						<div id="open_729" style="width: 113px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//res.61.com/img/seer/c39947907f2810c6ee7122d9a362b01e.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">729鱼龙王</a>
                    			</li>
                      		</ul>
                   		</div>  	                   		
	       				       			
	       			       					       			<li id="728" jl_num="3" name="暗影" py="m" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/f8245d54b3a90a3741d88ad02c4000cc.jpg" />
			            		       			<p>728马力</p></li>
	       			
						<div id="open_728" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img3.2125.com/upload/seer/thumb/3cd8bdbb8a069498305fac30d843cddb.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">726力亚</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img3.2125.com/upload/seer/thumb/815834d63651070380fe8633abf6d5ae.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">727马鲁</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/f8245d54b3a90a3741d88ad02c4000cc.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">728马力</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="725" jl_num="2" name="机械" py="l" rhtype="稀有精灵">
		       										<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img1.2125.com/upload/seer/thumb/0b268015aa0e1870f71d283f726e047c.jpg" />
			            		       			<p>725洛斯贝拉</p></li>
	       			
						<div id="open_725" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/da7f85930ad25597ebd0362b9b28ee21.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">724斯贝拉</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/0b268015aa0e1870f71d283f726e047c.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">725洛斯贝拉</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="723" jl_num="2" name="草 战斗" py="k" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img3.2125.com/upload/seer/thumb/6074feccbc6f4ec19baa231e8a9c8a6e.jpg" />
			            		       			<p>723库鲁</p></li>
	       			
						<div id="open_723" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/8ec1406575a44228e8d0054de0c2a19a.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">722库达</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/6074feccbc6f4ec19baa231e8a9c8a6e.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">723库鲁</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="721" jl_num="2" name="超能" py="p" rhtype="活动精灵">
		       										<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img1.2125.com/upload/seer/thumb/84fea50b43eee70f633c2939abbc7598.jpg" />
			            		       			<p>721皮卡达</p></li>
	       			
						<div id="open_721" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/39623e575ed38cf262ccd6f2c98f0fe0.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">720皮卡</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/84fea50b43eee70f633c2939abbc7598.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">721皮卡达</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="719" jl_num="2" name="普通" py="f" rhtype="收费精灵">
		       						            	<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img3.2125.com/upload/seer/thumb/ba05a0c13f0de27eb6ba03165d6b4f4b.jpg" />
			            		       			<p>719符达拉克</p></li>
	       			
						<div id="open_719" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/19a7697c4d4390170a0681d54a8eada8.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">718符克</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/ba05a0c13f0de27eb6ba03165d6b4f4b.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">719符达拉克</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="717" jl_num="2" name="冰雪" py="k" rhtype="野生精灵">
		       										<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img1.2125.com/upload/seer/thumb/094ec6ec5049721d1dfb5a7d16d22520.jpg" />
			            		       			<p>717康克特</p></li>
	       			
						<div id="open_717" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/17017da337bfc3b24ce62d5f94f2bec2.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">716康康</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/094ec6ec5049721d1dfb5a7d16d22520.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">717康克特</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="715" jl_num="3" name="冰 龙" py="d" rhtype="BOSS精灵">
		       						            	<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img3.2125.com/upload/seer/thumb/e6ce237c4ff594d1159b73cad089bb86.jpg" />
			            		       			<p>715德拉萨</p></li>
	       			
						<div id="open_715" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img3.2125.com/upload/seer/thumb/c23058f8f65cd0f78e59642a652e6e36.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">713拉比</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img3.2125.com/upload/seer/thumb/b3c34043651a2e20ffefb9db86e17a29.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">714拉萨克 </a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/e6ce237c4ff594d1159b73cad089bb86.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">715德拉萨</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="712" jl_num="3" name="超能" py="p" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img2.2125.com/upload/seer/thumb/b506302ec76701f568d8aa039c7f97a4.jpg" />
			            		       			<p>712普利德</p></li>
	       			
						<div id="open_712" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img3.2125.com/upload/seer/thumb/69499a9ceac72c93c7b383fe776986c0.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">710卡普</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img3.2125.com/upload/seer/thumb/76d42a6939c6a9347bf8409c481614c2.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">711卡纳德</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://upload.ci.com/sitePage/1//img4.2125.com/upload/seer/thumb/b506302ec76701f568d8aa039c7f97a4.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">712普利德</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="709" jl_num="2" name="电" py="l" rhtype="任务精灵">
		       										<img name="page_cnt_1" lz_src="http://upload.ci.com/sitePage/1//img1.2125.com/upload/seer/thumb/30f9c29f904f5c595d29139b7c952d63.jpg" />
			            		       			<p>709雷洛</p></li>
	       			
						<div id="open_709" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/0bbee7100218d590495ef2bd8f4a4a37.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">708桑德</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/30f9c29f904f5c595d29139b7c952d63.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">709雷洛</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="707" jl_num="2" name="地面" py="q" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/140de7fb43481ef9516a8c9de6693898.jpg" />
			            		       			<p>707巧克利</p></li>
	       			
						<div id="open_707" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/aded64a0aee029c759c357b77bfa10f4.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">706拉利</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/140de7fb43481ef9516a8c9de6693898.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">707巧克利</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="705" jl_num="3" name="水" py="k" rhtype="活动精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/addbb10402a5bb6ab4e09f11f3ebb3be.jpg" />
			            		       			<p>705考拉库</p></li>
	       			
						<div id="open_705" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/a8d6af409307a66af017f219863a8046.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">703小可</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/4787b164e74cfc04889e558d9e437309.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">704考拉</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/addbb10402a5bb6ab4e09f11f3ebb3be.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">705考拉库</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="702" jl_num="2" name="火" py="m" rhtype="稀有精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/fcfcb3e437c6c386d242e11687875995.jpg" />
			            		       			<p>702蒙特纳</p></li>
	       			
						<div id="open_702" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/1ec7ee435e242ec5af9f393ccf096ce7.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">701西蒙</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/fcfcb3e437c6c386d242e11687875995.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">702蒙特纳</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="700" jl_num="2" name="地面" py="r" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/9b1b7f5b0a56ec6a9d51804975801f1d.jpg" />
			            		       			<p>700瑞特拉</p></li>
	       			
						<div id="open_700" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/3eb6117ecf1fd155daae9080787c252f.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">699瑞特</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/9b1b7f5b0a56ec6a9d51804975801f1d.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">700瑞特拉</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="698" jl_num="3" name="超能" py="a" rhtype="收费精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/5994718fccf510b8d648965cc140278a.jpg" />
			            		       			<p>698艾洛达</p></li>
	       			
						<div id="open_698" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/6c5f313c5129704c7a1d5dc5ace49302.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">696艾伦</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/72331882b60814cb09c7ea31d95eaf95.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">697洛伦</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/5994718fccf510b8d648965cc140278a.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">698艾洛达</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="695" jl_num="2" name="超能" py="d" rhtype="BOSS精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/1e9499229846b045b2f83c6d1b4f6c37.jpg" />
			            		       			<p>695狄修斯</p></li>
	       			
						<div id="open_695" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/fc027b06ad2ffa943ac40549ae28dbe5.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">694狄亚</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/1e9499229846b045b2f83c6d1b4f6c37.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">695狄修斯</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="693" jl_num="2" name="飞行" py="h" rhtype="活动精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/6592ea5c4080e9b865b14c18185803cd.jpg" />
			            		       			<p>693哈特曼</p></li>
	       			
						<div id="open_693" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/dd0812e962d1da092f59c58c44c2a9d8.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">692扶来</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/6592ea5c4080e9b865b14c18185803cd.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">693哈特曼</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="691" jl_num="2" name="普通" py="t" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/ac3afd19f50c64ed057669edb7bc1587.jpg" />
			            		       			<p>691泰勒斯</p></li>
	       			
						<div id="open_691" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/40f602772c1df258ab2f86a03663bbe8.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">690泰达</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/ac3afd19f50c64ed057669edb7bc1587.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">691泰勒斯</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="689" jl_num="2" name="草" py="f" rhtype="收费精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/fadbbdd28d926f16b0518611979953a9.jpg" />
			            		       			<p>689符萨塔斯</p></li>
	       			
						<div id="open_689" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/608010548a19ba89cb1c32d87792b088.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">688符娅</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/fadbbdd28d926f16b0518611979953a9.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">689符萨塔斯</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="685" jl_num="2" name="水" py="g" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/62e99849df5f07df72acf36e774921d0.jpg" />
			            		       			<p>685果然葡萄多 </p></li>
	       			
						<div id="open_685" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/e4c9d9e74877b6901d918e072950ac2b.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">684葡萄多多</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/62e99849df5f07df72acf36e774921d0.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">685果然葡萄多 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="681" jl_num="2" name="飞行" py="g" rhtype="野生精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/61e391401b1a232fbfde4b56b69afe4f.jpg" />
			            		       			<p>681果然蜜桃多 </p></li>
	       			
						<div id="open_681" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/7c2e06fe25a14eb0212ca6d56fa1f74b.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">680蜜桃多多</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/61e391401b1a232fbfde4b56b69afe4f.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">681果然蜜桃多 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="679" jl_num="3" name="火" py="g" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/7f6a07eb2a03e2b1d0b2bde8087b65f8.jpg" />
			            		       			<p>679果然草莓多 </p></li>
	       			
						<div id="open_679" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/e71ff4f94d9269d42f6403891b042880.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">677草莓多多</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/45bc3aa74cf09d2dc8fb98b5852926b9.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">678果然草莓</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/7f6a07eb2a03e2b1d0b2bde8087b65f8.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">679果然草莓多 </a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="676" jl_num="2" name="火 战斗" py="j" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/f942d81de9dce20d6068d94e5ce5e971.jpg" />
			            		       			<p>676迦贺</p></li>
	       			
						<div id="open_676" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/642877b1ba6a246e38cade1861ef56ab.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">675迦勒</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/f942d81de9dce20d6068d94e5ce5e971.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">676迦贺</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="674" jl_num="2" name="战斗 暗影" py="l" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/1893edc0a74d0630f3308f78d069ab23.jpg" />
			            		       			<p>674洛迦</p></li>
	       			
						<div id="open_674" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/ffc7d0f5830e52972c165782108a6ce8.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">673伊迦</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/1893edc0a74d0630f3308f78d069ab23.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">674洛迦</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="672" jl_num="2" name="超能 冰" py="y" rhtype="BOSS精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/d29f7e89040ab73708886499e195c143.jpg" />
			            		       			<p>672亚伦斯</p></li>
	       			
						<div id="open_672" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/61ff641b298c05583e975329cd6b1989.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">671冰妖</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/d29f7e89040ab73708886499e195c143.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">672亚伦斯</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="670" jl_num="2" name="机械" py="h" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/6877ece4b64f8128696f4008a3938f78.jpg" />
			            		       			<p>670哈德克</p></li>
	       			
						<div id="open_670" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/dddec24133c4987045bf8e14eb5852b8.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">669哈德</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/6877ece4b64f8128696f4008a3938f78.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">670哈德克</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="668" jl_num="2" name="暗影" py="p" rhtype="收费精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/2ce9edfc805777e287eb81210ae5d7cd.jpg" />
			            		       			<p>668普拉顿</p></li>
	       			
						<div id="open_668" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/44f32b1e356c1a91cf04298eb31a3067.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">667普顿</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/2ce9edfc805777e287eb81210ae5d7cd.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">668普拉顿</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="666" jl_num="2" name="光" py="g" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/5a7cf1feae583c98a7b291809be9f490.jpg" />
			            		       			<p>666古琪</p></li>
	       			
						<div id="open_666" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/713f164f1c9de262e808eb4c51b0a606.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">665古丽</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/5a7cf1feae583c98a7b291809be9f490.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">666古琪</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="664" jl_num="3" name="地面" py="s" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/a7f4164f96241072dcd8ad077decd14a.jpg" />
			            		       			<p>664塞迪拉</p></li>
	       			
						<div id="open_664" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/c99af75b5e63e9b4a917f2fa237d3caf.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">662塞西</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/b3135e99d1de4c9cd6c44654af3c822e.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">663塞迪</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/a7f4164f96241072dcd8ad077decd14a.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">664塞迪拉</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="661" jl_num="2" name="龙" py="s" rhtype="暗黑精灵 ">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/f9072af93840e39d00782d99fc2dbd2c.jpg" />
			            		       			<p>661萨多拉尼</p></li>
	       			
						<div id="open_661" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/61c52986d02f079997bbeb2c34737515.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">660萨多</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/f9072af93840e39d00782d99fc2dbd2c.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">661萨多拉尼</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="659" jl_num="3" name="草 超能" py="j" rhtype="暗黑精灵 ">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/0a76bf986c98447101a01ec8c4246683.jpg" />
			            		       			<p>659加洛德</p></li>
	       			
						<div id="open_659" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/a409d37626aca27592317d3c7a56b3c7.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">657加加洛</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/962850f76d615ce77bb6001f3f594552.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">658加洛丹</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/0a76bf986c98447101a01ec8c4246683.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">659加洛德</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="656" jl_num="2" name="普通" py="p" rhtype="暗黑精灵 ">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/adca55305f48994e9a9f7751766ab453.jpg" />
			            		       			<p>656帕多尼</p></li>
	       			
						<div id="open_656" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/53dfec501e2dd2a8e9533104ad3e2af9.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">655帕多</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/adca55305f48994e9a9f7751766ab453.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">656帕多尼</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="654" jl_num="2" name="地面" py="k" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/1a3e0f79d7da84c01bd0b050dae5052f.jpg" />
			            		       			<p>654卡拉尼</p></li>
	       			
						<div id="open_654" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/dfa9bf8463e8d39481c8a39dd3432010.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">653卡兔宝</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/1a3e0f79d7da84c01bd0b050dae5052f.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">654卡拉尼</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="652" jl_num="3" name="普通" py="n" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/d0c8101c80107cde34be63e90a3c49d3.jpg" />
			            		       			<p>652诺拉德</p></li>
	       			
						<div id="open_652" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/d2bdb6eaf906f370767a33790999252b.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">650吉诺</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/ed21526bee2ff98bca26706d9899198f.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">651诺奇</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/d0c8101c80107cde34be63e90a3c49d3.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">652诺拉德</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="649" jl_num="2" name="战斗" py="k" rhtype="稀有精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/a882304eaf195d9fadfe0b1c3239bf8d.jpg" />
			            		       			<p>649卡奥鲁</p></li>
	       			
						<div id="open_649" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/76873a8c8132a13cd1eb68ba826ddb7c.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">648卡西达</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/a882304eaf195d9fadfe0b1c3239bf8d.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">649卡奥鲁</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="647" jl_num="2" name="超能" py="p" rhtype="稀有精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/553bb43187f4813cc95c0b8dee455647.jpg" />
			            		       			<p>647佩斯里</p></li>
	       			
						<div id="open_647" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/71d7fe34d5bbcc149ba8b2f6c888fbfa.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">646佩希</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/553bb43187f4813cc95c0b8dee455647.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">647佩斯里</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="645" jl_num="2" name="雷电 火" py="z" rhtype="BOSS精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/9abc139794855d82be7bdb60974c4e16.jpg" />
			            		       			<p>645扎尔酷</p></li>
	       			
						<div id="open_645" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/5c68c6d85d8dcceea9480ba061538593.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">644杰酷</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/9abc139794855d82be7bdb60974c4e16.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">645扎尔酷</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="643" jl_num="2" name="水 超能" py="j" rhtype="初始精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/adaeb3edc75c92c13ee2ac21fb8b4266.jpg" />
			            		       			<p>643吉鲁加尔</p></li>
	       			
						<div id="open_643" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/e1e43ec4922e2119eb1b8e2c79367b61.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">642吉贝鲁</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/adaeb3edc75c92c13ee2ac21fb8b4266.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">643吉鲁加尔</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="641" jl_num="3" name="神秘" py="x" rhtype="融合精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/c7f66ff84fd10090bcf028a96b558213.jpg" />
			            		       			<p>641希格瑞特</p></li>
	       			
						<div id="open_641" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/65489b547c84f322f92922349ae4dea1.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">639希格</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/a8e93b07041ebedb80c30a19e5f8ca79.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">640希鲁格</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/c7f66ff84fd10090bcf028a96b558213.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">641希格瑞特</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="638" jl_num="2" name="冰雪" py="f" rhtype="收费精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/33b8dca75dc8f9ceffc841258de7300c.jpg" />
			            		       			<p>638符尔加登</p></li>
	       			
						<div id="open_638" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/587ea7cf169b2e6665f75e97668fe33c.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">637符坦</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/33b8dca75dc8f9ceffc841258de7300c.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">638符尔加登</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="636" jl_num="2" name="火" py="f" rhtype="收费精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/3585998385d5b8e49f882c889882e59c.jpg" />
			            		       			<p>636符拉迪诺</p></li>
	       			
						<div id="open_636" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/54909c2a11e07941d6af22e745f07a9a.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">635符诺</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/3585998385d5b8e49f882c889882e59c.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">636符拉迪诺</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="634" jl_num="3" name="暗影" py="d" rhtype="融合精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/261f937ea53204988f9c16cf94f845b7.jpg" />
			            		       			<p>634德格拉克</p></li>
	       			
						<div id="open_634" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/9a82f3a9bcc4b4fac9aeb701ab8a36d0.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">632杰丹</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/96a2460b1408ce1d05a9408b40f9b9c6.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">633杰尔德</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/261f937ea53204988f9c16cf94f845b7.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">634德格拉克</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="631" jl_num="3" name="草 战斗" py="y" rhtype="融合精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/40aa7bf351bb9aa879c62b0ca9c3b2bf.jpg" />
			            		       			<p>631依卡劳特</p></li>
	       			
						<div id="open_631" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/b0dfe0d4eb0d0dc4b5be504e42bb01eb.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">629依尔</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/21b795c87e75a9f21fe49eb9b272d370.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">630丁尼丝</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/40aa7bf351bb9aa879c62b0ca9c3b2bf.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">631依卡劳特</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="628" jl_num="2" name="地面" py="y" rhtype="融合精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/892da224fdddcd13387dedfae1ae99d4.jpg" />
			            		       			<p>628远古塔拉</p></li>
	       			
						<div id="open_628" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/10a7016ef6d578715bd6e40de192b15e.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">627晶岩虫</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/892da224fdddcd13387dedfae1ae99d4.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">628远古塔拉</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="626" jl_num="2" name="水" py="k" rhtype="融合精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/c4ed1a1f7f2a82a6038392969da7b4bd.jpg" />
			            		       			<p>626卡拉巨龙</p></li>
	       			
						<div id="open_626" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/736da2e684e7cb04680434bb27ef719b.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">625卡龙</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/c4ed1a1f7f2a82a6038392969da7b4bd.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">626卡拉巨龙</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="624" jl_num="2" name="地面 龙" py="w" rhtype="融合精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/960bf3e31ad1f1c370819d93ae173cd4.jpg" />
			            		       			<p>624沃德斯特</p></li>
	       			
						<div id="open_624" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/9338e5cb1ccdcb4632f6126f91b4554a.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">623沃拉普</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/960bf3e31ad1f1c370819d93ae173cd4.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">624沃德斯特</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="622" jl_num="3" name="战斗 暗影" py="j" rhtype="BOSS精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/7b7c83286c91f253be21f9ddfaae15d3.jpg" />
			            		       			<p>622加鲁德</p></li>
	       			
						<div id="open_622" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/fcc90b52a4da703a2c2b38b57625f3ab.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">620沙鲁</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/842e9a2613afc5adea2933e46b7b282d.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">621加德拉</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/7b7c83286c91f253be21f9ddfaae15d3.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">622加鲁德</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="619" jl_num="2" name="飞行" py="d" rhtype="稀有精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/f15db11b2c6350e2a43fb690aa973df4.jpg" />
			            		       			<p>619嘟嘟卡拉</p></li>
	       			
						<div id="open_619" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/d4f848f1889934b209398c84fefaedf3.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">618嘟拉</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/f15db11b2c6350e2a43fb690aa973df4.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">619嘟嘟卡拉</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="617" jl_num="3" name="水 暗影" py="k" rhtype="BOSS精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/5b17e0334f752c9e9561ae5d095589ec.jpg" />
			            		       			<p>617肯佩德</p></li>
	       			
						<div id="open_617" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/fad8b449b0d73b10a3918f53cf98a32a.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">615佩奇</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/279f3d674b58e0f57b47a93d1ea80a61.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">616佩罗德</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/5b17e0334f752c9e9561ae5d095589ec.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">617肯佩德</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="614" jl_num="3" name="飞行 超能" py="m" rhtype="BOSS精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/ab5f2c44de4e0843e31bb55695fe91a2.jpg" />
			            		       			<p>614玛酷索</p></li>
	       			
						<div id="open_614" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/2aa533be8452207dff76ee6599de8561.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">612西索</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/c669ddde2a985d5cc1249492baaa645b.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">613索拉达</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/ab5f2c44de4e0843e31bb55695fe91a2.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">614玛酷索</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="611" jl_num="2" name="机械 超能" py="k" rhtype="收费精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/5eb26f32d9ce31dbe7e9799f228fbdd9.jpg" />
			            		       			<p>611卡帕达</p></li>
	       			
						<div id="open_611" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/c59da0d98ec30d2867f9f971e5109202.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">610帕尔</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/5eb26f32d9ce31dbe7e9799f228fbdd9.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">611卡帕达</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="609" jl_num="3" name="冰雪" py="k" rhtype="繁殖精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/aa5716db3bf250ef6f0bac31e08ecc18.jpg" />
			            		       			<p>609可泰勒</p></li>
	       			
						<div id="open_609" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/907c7428c576ee51f135b723cd86a2ce.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">607尼洛</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/e3fea303b41fd62b34f49fc7f03bc281.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">608特洛</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/aa5716db3bf250ef6f0bac31e08ecc18.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">609可泰勒</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="606" jl_num="3" name="普通" py="k" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/68cfa243b0425beccd3147f66aed88c8.jpg" />
			            		       			<p>606克斯莉</p></li>
	       			
						<div id="open_606" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/c110cf823848dac8a30f343ba00278cd.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">604莎莉</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/b76449ce00d2586a8afb1a9b66b04069.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">605莉莉加</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/68cfa243b0425beccd3147f66aed88c8.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">606克斯莉</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="603" jl_num="2" name="雷电 冰" py="a" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/ed8ac3f337dc5519194328b4a89bda72.jpg" />
			            		       			<p>603埃尔夫</p></li>
	       			
						<div id="open_603" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/4f2278e30a4c8e04641570fee492e53f.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">602埃森</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/ed8ac3f337dc5519194328b4a89bda72.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">603埃尔夫</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="601" jl_num="2" name="" py="h" rhtype="繁殖精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/f848a03d4c26cf4afe9be0aaf89c0ca8.jpg" />
			            		       			<p>601火刃</p></li>
	       			
						<div id="open_601" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/84722fa6c6c9f0644a77ffca46c756c6.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">600安洛达斯</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/f848a03d4c26cf4afe9be0aaf89c0ca8.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">601火刃</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="599" jl_num="2" name="" py="j" rhtype="收费精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/0d78eebcda9b381695546560108d1814.jpg" />
			            		       			<p>599吉米丽娅</p></li>
	       			
						<div id="open_599" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/9f16e6dbb70939783bc0d948428f8a32.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">598米娅</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/0d78eebcda9b381695546560108d1814.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">599吉米丽娅</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="597" jl_num="2" name="" py="s" rhtype="收费精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/eb2197c8b7d593e6b2375a16c17f572a.jpg" />
			            		       			<p>597史密斯</p></li>
	       			
						<div id="open_597" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/723bf34df18edf615b47b0bc7624e062.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">596史克</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/eb2197c8b7d593e6b2375a16c17f572a.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">597史密斯</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="595" jl_num="2" name="超能" py="k" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/6452bb9aecde3628533a814d73d07d5c.jpg" />
			            		       			<p>595卡洛达斯</p></li>
	       			
						<div id="open_595" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/502172cd79679c7821abdffa52e9ba2d.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">594祖洛</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/6452bb9aecde3628533a814d73d07d5c.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">595卡洛达斯</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="593" jl_num="2" name="" py="p" rhtype="活动精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/74cdb19de0f03c904aef7d9747ff9770.jpg" />
			            		       			<p>593佩克特</p></li>
	       			
						<div id="open_593" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/db53427238efaf4623e62abb7daee714.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">592佩恩</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/74cdb19de0f03c904aef7d9747ff9770.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">593佩克特</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="591" jl_num="2" name="" py="j" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/3063daf4b8873c5b1effe99aa795a450.jpg" />
			            		       			<p>591杰洛恩</p></li>
	       			
						<div id="open_591" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/b8469f4ff890a2f6459097395e22c8a0.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">590卡罗</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/3063daf4b8873c5b1effe99aa795a450.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">591杰洛恩</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="589" jl_num="2" name="冰雪" py="k" rhtype="活动精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/d22619c45acfd0e8ff60465a84dceb42.jpg" />
			            		       			<p>589克瑞斯</p></li>
	       			
						<div id="open_589" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/94a917ec0ab8ce44c7da017ffa91c79a.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">588瑞克</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/d22619c45acfd0e8ff60465a84dceb42.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">589克瑞斯</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="587" jl_num="3" name="超能" py="m" rhtype="BOSS精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/ec4dd7a9df4085c0f2e63646442d61cd.jpg" />
			            		       			<p>587墨杜萨</p></li>
	       			
						<div id="open_587" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/98e353946fb1ec2713cf4aeeaaeb6519.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">585莎莎</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/ff06f3d0822c07516421e9ce19e18853.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">586墨丽萨</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/ec4dd7a9df4085c0f2e63646442d61cd.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">587墨杜萨</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="584" jl_num="2" name="" py="a" rhtype="收费精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/38e0dd34548286c17da8bc94d0ad3fe3.jpg" />
			            		       			<p>584阿哆啦</p></li>
	       			
						<div id="open_584" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/08f97e83b70a083319f0beb7ba777404.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">583哆哆</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/38e0dd34548286c17da8bc94d0ad3fe3.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">584阿哆啦</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="582" jl_num="3" name="战斗" py="t" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/52d42102dd4d74e1ef241b13ddfd3b93.jpg" />
			            		       			<p>582特洛尼特</p></li>
	       			
						<div id="open_582" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/9d00b0855be3facbe7c8d2be7fa668af.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">580特尼</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/e81673c83dc42810fe5894621603b350.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">581特洛德</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/52d42102dd4d74e1ef241b13ddfd3b93.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">582特洛尼特</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="579" jl_num="2" name="" py="k" rhtype="融合精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/a4592582cc850269d65048fcdc67aa19.jpg" />
			            		       			<p>579库洛卡</p></li>
	       			
						<div id="open_579" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/d3afa191ae7205db53cf4d387e0c5632.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">578萨酷</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/a4592582cc850269d65048fcdc67aa19.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">579库洛卡</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="577" jl_num="2" name="龙" py="t" rhtype="稀有精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/e95820ce9dd2dead1a3f771b3a8694b8.jpg" />
			            		       			<p>577贪食龙</p></li>
	       			
						<div id="open_577" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/ecae91cccca2fc331cb3941c30bc3ea6.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">576德普</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/e95820ce9dd2dead1a3f771b3a8694b8.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">577贪食龙</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="575" jl_num="2" name="水" py="k" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/9ce0ccdff48a0785f4b83ed663154ac3.jpg" />
			            		       			<p>575克罗达</p></li>
	       			
						<div id="open_575" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/34cdf29cfbc029479c74be56607f76e1.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">574克里</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/9ce0ccdff48a0785f4b83ed663154ac3.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">575克罗达</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="573" jl_num="3" name="" py="b" rhtype="融合精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/b5292edbd40d00b5c99d505935db48bf.jpg" />
			            		       			<p>573布莱卡恩</p></li>
	       			
						<div id="open_573" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/a299dd469548d1680ef696732dad7a56.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">571埃洛种子</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/cddc05b1b57e54f83e6c01c60582123d.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">572布莱特</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/b5292edbd40d00b5c99d505935db48bf.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">573布莱卡恩</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="570" jl_num="2" name="水" py="k" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/0d53a3b95eb57d25171fd54484e1f8a1.jpg" />
			            		       			<p>570克拉肯</p></li>
	       			
						<div id="open_570" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/002a7172a45cf3cab26e07c656a25ee0.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">569苍苍</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/0d53a3b95eb57d25171fd54484e1f8a1.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">570克拉肯</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="568" jl_num="2" name="普通" py="n" rhtype="BOSS精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/4710e76721a1632d851cdba167bccca7.jpg" />
			            		       			<p>568诺姆</p></li>
	       			
						<div id="open_568" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/d500201074be2b29ecf5bf9d1c44f4e2.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">567吉姆</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/4710e76721a1632d851cdba167bccca7.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">568诺姆</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="566" jl_num="3" name="" py="s" rhtype="收费精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/052c4efa2809921dd4b618e125dd1cf4.jpg" />
			            		       			<p>566桑特诺娃</p></li>
	       			
						<div id="open_566" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/47972e9aec4bfc5a41355dc2ef6f860b.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">564桑妮</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/6cdd9940a6f514f414682645b01bff90.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">565桑洛希</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/052c4efa2809921dd4b618e125dd1cf4.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">566桑特诺娃</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="563" jl_num="2" name="冰雪" py="l" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/0092ab12c39f155aeb32873d22ce8740.jpg" />
			            		       			<p>563莱格卡萨</p></li>
	       			
						<div id="open_563" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/7b53c18a3be9bf5147abbda0c21d2e1e.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">562莱格</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/0092ab12c39f155aeb32873d22ce8740.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">563莱格卡萨</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="561" jl_num="2" name="地面" py="s" rhtype="稀有精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/7f668575a93b1107f0912a726ec1a5a0.jpg" />
			            		       			<p>561史沃勒</p></li>
	       			
						<div id="open_561" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/883b312299e9194a994623461f24c20f.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">560沃特</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/7f668575a93b1107f0912a726ec1a5a0.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">561史沃勒</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="559" jl_num="3" name="战斗" py="b" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/5a1c32a00dcd85b2df0e505d0fb7c4ce.jpg" />
			            		       			<p>559波尼斯</p></li>
	       			
						<div id="open_559" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/47a3e374c03e21626453cb4e53e3b42f.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">557波伦</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/5a1d3e91a643dd26ce050069e956208a.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">558波尼儿</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/5a1c32a00dcd85b2df0e505d0fb7c4ce.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">559波尼斯</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="556" jl_num="2" name="冰雪" py="b" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/56839f3d10942be80f88333c12f1cbc5.jpg" />
			            		       			<p>556宾塞克</p></li>
	       			
						<div id="open_556" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/52c922ca61fdb2a372872cb6672b9cd5.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">555宾克</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/56839f3d10942be80f88333c12f1cbc5.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">556宾塞克</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="554" jl_num="2" name="地面" py="y" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/d2b9d3c22afd55561094c63b9c2a5af6.jpg" />
			            		       			<p>554远古甲虫</p></li>
	       			
						<div id="open_554" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/32810118917c78f05314a37b4badbbad.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">553丫丫</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/d2b9d3c22afd55561094c63b9c2a5af6.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">554远古甲虫</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="552" jl_num="3" name="" py="w" rhtype="繁殖精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/8966c578c09ff024cb59e4ee8af28c20.jpg" />
			            		       			<p>552乌托卡</p></li>
	       			
						<div id="open_552" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/946c36eb64755bf9472d81500264e7e0.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">550托托</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/c5e048c81899846bc8e4980b510c09e0.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">551乌托</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/8966c578c09ff024cb59e4ee8af28c20.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">552乌托卡</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="549" jl_num="3" name="火" py="n" rhtype="野生精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/13a0b2cacd83005b00f6a0b2ed6b8a30.jpg" />
			            		       			<p>549妮洛娜</p></li>
	       			
						<div id="open_549" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/2d8b9ddf6c34ef6a54f9be2891aee831.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">547紫炎虫</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/24f16db8e998834fb1ec4d6a57c99625.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">548紫妮</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/13a0b2cacd83005b00f6a0b2ed6b8a30.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">549妮洛娜</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="546" jl_num="3" name="水" py="z" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/0b95a4ccae349a16431d27107632a510.jpg" />
			            		       			<p>546佐斯德</p></li>
	       			
						<div id="open_546" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/0e73218a47b6b87ad90f5792f6eb490e.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">544水球</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/abf979bfa1498159bf21fce59238cd59.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">545佐拉</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/0b95a4ccae349a16431d27107632a510.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">546佐斯德</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="543" jl_num="3" name="机械" py="h" rhtype="兑换精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/b7b086476093b22d0e1d89d94fb96a80.jpg" />
			            		       			<p>543赫拉尼洛</p></li>
	       			
						<div id="open_543" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/4289499e9b504cc6bcb7885f4faf683d.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">541赫洛</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/56ae8622afbdef5c96ecaf0ff75e13c7.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">542赫格拉斯</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/b7b086476093b22d0e1d89d94fb96a80.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">543赫拉尼洛</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="538" jl_num="3" name="" py="k" rhtype="BOSS精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/fd16638c5933a5d29c02e4e91b9718a9.jpg" />
			            		       			<p>538克拉尼特</p></li>
	       			
						<div id="open_538" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/bae546f7acdabcc652da292df29ddff0.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">536克拉尔</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/d8d76486e37997071e407716e5967d01.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">537克尔尼</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/fd16638c5933a5d29c02e4e91b9718a9.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">538克拉尼特</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="535" jl_num="3" name="" py="g" rhtype="繁殖精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/5221ee9ac42649ea335ccb9ce1b3b882.jpg" />
			            		       			<p>535古拉草</p></li>
	       			
						<div id="open_535" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/8287d7d88397f76382706da605b2ddd4.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">533古鲁</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/dfa948f3bf3b38515f0587b4599f5a88.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">534古拉苗</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/5221ee9ac42649ea335ccb9ce1b3b882.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">535古拉草</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="532" jl_num="2" name="雷电 冰" py="q" rhtype="BOSS精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/fbaed5b013d908a1726b0526c9972504.jpg" />
			            		       			<p>532奇格萨</p></li>
	       			
						<div id="open_532" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/89348e17221d437eb87adfec27ae9887.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">531萨格</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/fbaed5b013d908a1726b0526c9972504.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">532奇格萨</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="530" jl_num="3" name="水 超能" py="w" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/7103a635742300eebb59cf972f069978.jpg" />
			            		       			<p>530乌索达</p></li>
	       			
						<div id="open_530" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/9f24627bb211cde03dc8fcc87bb00075.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">528乌索</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/37562236176f8f22bb95da7d09716d53.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">529乌索尔</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/7103a635742300eebb59cf972f069978.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">530乌索达</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="527" jl_num="2" name="火" py="h" rhtype="收费精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/4b669b4224d7b1d2d60585531122775f.jpg" />
			            		       			<p>527赫尔托克</p></li>
	       			
						<div id="open_527" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/f142961b6885ff1b4fef0bf1f11f9056.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">526托克</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/4b669b4224d7b1d2d60585531122775f.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">527赫尔托克</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="525" jl_num="3" name="草" py="g" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/34fe3048c3f7e7386ec358b298f23bd9.jpg" />
			            		       			<p>525咕咕果</p></li>
	       			
						<div id="open_525" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/0b6228270c1a3ec4d651e8edf595a740.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">523咕咕芽</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/b8adfdacc96bda74b8b5892db64cce92.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">524咕咕草</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/34fe3048c3f7e7386ec358b298f23bd9.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">525咕咕果</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="522" jl_num="2" name="飞行" py="d" rhtype="兑换精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/97bde568f0f497e6bfe5486adb1d0de2.jpg" />
			            		       			<p>522丁里克</p></li>
	       			
						<div id="open_522" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/6a2d6f116f6f36578f665e314795f9c8.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">521丁奇</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/97bde568f0f497e6bfe5486adb1d0de2.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">522丁里克</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="520" jl_num="2" name="普通" py="g" rhtype="繁殖精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/c5fe9f30ab15b34858baea7f71021c8a.jpg" />
			            		       			<p>520古林斯特</p></li>
	       			
						<div id="open_520" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/450f5bf3da0dbf43be8cf2bb744fa804.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">519绿毛球</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/c5fe9f30ab15b34858baea7f71021c8a.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">520古林斯特</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="518" jl_num="2" name="龙" py="n" rhtype="繁殖精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/105949823ce86336ef5fb8128b0b53ff.jpg" />
			            		       			<p>518奈加恩</p></li>
	       			
						<div id="open_518" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/941685a2625da021940456b6fb8bbe91.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">517小艾</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/105949823ce86336ef5fb8128b0b53ff.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">518奈加恩</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="516" jl_num="2" name="龙" py="n" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/892a2799332f10bd1e3d7a7771ea3a45.jpg" />
			            		       			<p>516奈落达尔</p></li>
	       			
						<div id="open_516" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/8a82fa84284669099fdff58532630ced.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">515奈落</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/892a2799332f10bd1e3d7a7771ea3a45.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">516奈落达尔</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="514" jl_num="3" name="冰雪" py="g" rhtype="繁殖精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/eac6226b3d6c7f8a20e90a20fc6568e8.jpg" />
			            		       			<p>514格多尔诺</p></li>
	       			
						<div id="open_514" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/72bb26831def62a7f22404db788fd2c0.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">512格多</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/50e52ddbb2a19c75be3cf9a43473bc0b.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">513格格诺</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/eac6226b3d6c7f8a20e90a20fc6568e8.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">514格多尔诺</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="511" jl_num="3" name="暗影" py="s" rhtype="活动精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/2f7996fb579c1d808e9ffe6a4f6663ab.jpg" />
			            		       			<p>511撒格利加</p></li>
	       			
						<div id="open_511" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/cf0c5bea0f04752bea69d7befaf86d9a.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">509利加</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/7082da4c9aba5083ec23e5c9fcf6c154.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">510格利加</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/2f7996fb579c1d808e9ffe6a4f6663ab.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">511撒格利加</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="508" jl_num="3" name="暗影" py="s" rhtype="收费精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/26f1bccbbdc98401f10f48056bb328db.jpg" />
			            		       			<p>508桑诺特</p></li>
	       			
						<div id="open_508" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/b31656153ca0362613342714aae8959c.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">506诺特</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/8076a2a141c602474aa0057923eae84c.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">507诺诺特</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/26f1bccbbdc98401f10f48056bb328db.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">508桑诺特</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="504" jl_num="1" name="火" py="f" rhtype="http://img1.2125.com/upload/seer/thumb/99eef74bbe448b4fcde383aee4b20249.jpg">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/99eef74bbe448b4fcde383aee4b20249.jpg" />
			            		       			<p>504菲尼克斯 </p></li>
	       			
						<div id="open_504" style="width: 113px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img.2125.com/img/seer/huo/a4f1b87c2b589bb4a9693f8acb73fa65.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">504菲尼克斯 </a>
                    			</li>
                      		</ul>
                   		</div>  	                   		
	       				       			
	       			       					       			<li id="503" jl_num="1" name="电 战斗" py="t" rhtype="http://img1.2125.com/upload/seer/thumb/52f036fb4ed705a54ff0e40ddf7f432e.jpg">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/52f036fb4ed705a54ff0e40ddf7f432e.jpg" />
			            		       			<p>503泰格尔</p></li>
	       			
						<div id="open_503" style="width: 113px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://res.61.com/img/seer/1cb6241ff42e2179f1d1c66ed10da23b.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">503泰格尔</a>
                    			</li>
                      		</ul>
                   		</div>  	                   		
	       				       			
	       			       					       			<li id="502" jl_num="1" name="水 龙" py="d" rhtype="http://img1.2125.com/upload/seer/thumb/7c1a5a63e92b332769a201a485c3b4c4.jpg">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/7c1a5a63e92b332769a201a485c3b4c4.jpg" />
			            		       			<p>502朵拉格</p></li>
	       			
						<div id="open_502" style="width: 113px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://res.61.com/img/seer/e2aeef1faf0ddbed9c904571ebead732.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">502朵拉格</a>
                    			</li>
                      		</ul>
                   		</div>  	                   		
	       				       			
	       			       					       			<li id="501" jl_num="1" name="地面 机械" py="b" rhtype="http://img1.2125.com/upload/seer/thumb/102f790003e497abf5faf4674e1cca3d.jpg">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/102f790003e497abf5faf4674e1cca3d.jpg" />
			            		       			<p>501巴斯特</p></li>
	       			
						<div id="open_501" style="width: 113px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://res.61.com/img/seer/88513a78c400e587ca12c81dce0039f6.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">501巴斯特</a>
                    			</li>
                      		</ul>
                   		</div>  	                   		
	       				       			
	       			       					       			<li id="500" jl_num="2" name="超能" py="a" rhtype="任务精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/fdc48441e1264acaaf7a0f605426a27d.jpg" />
			            		       			<p>500阿尔比零</p></li>
	       			
						<div id="open_500" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/595f555d7a44e4cf2e559df634b6e49c.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">499阿零</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/fdc48441e1264acaaf7a0f605426a27d.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">500阿尔比零</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="498" jl_num="2" name="水" py="a" rhtype="任务精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/035a6e257bff64d1a3a87b1d5e1bc9ab.jpg" />
			            		       			<p>498阿葵丽亚</p></li>
	       			
						<div id="open_498" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/010baeb3451c2cff07a96cb37a1bb725.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">497阿葵</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/035a6e257bff64d1a3a87b1d5e1bc9ab.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">498阿葵丽亚</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="496" jl_num="3" name="机械" py="l" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/4df6db205005ace27e19a2ef4a11f32a.jpg" />
			            		       			<p>496洛卡斯特</p></li>
	       			
						<div id="open_496" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/eccf3def2cbe89584239a3ec4181a03e.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">494卡丹</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/22d2b6a2343744c9b6dbb947c69377be.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">495洛卡特</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/4df6db205005ace27e19a2ef4a11f32a.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">496洛卡斯特</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="493" jl_num="3" name="草 超能" py="k" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/8660a4895e4f25727fa9180a90bf08e2.jpg" />
			            		       			<p>493克洛洛特</p></li>
	       			
						<div id="open_493" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/226d4f77303b6365f1e169f9b2db886e.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">491洛洛斯</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/9b3a6812c11cd0dc76c62c61c25e0a4f.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">492洛洛特</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/8660a4895e4f25727fa9180a90bf08e2.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">493克洛洛特</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="490" jl_num="3" name="战斗" py="l" rhtype="BOSS精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/46bb9ce4f4ef650f1ebd1bc89f5be2ce.jpg" />
			            		       			<p>490劳克蒙德</p></li>
	       			
						<div id="open_490" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/7ebec6196205693c01f4d905e3add1db.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">488劳特</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/e0ddf0fba185304a875e2bbf117bc1e5.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">489劳加德</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/46bb9ce4f4ef650f1ebd1bc89f5be2ce.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">490劳克蒙德</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="487" jl_num="2" name="雷电 火" py="y" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/9396e7ca166f9a00f9c8b88d3e2fd499.jpg" />
			            		       			<p>487亚格洛</p></li>
	       			
						<div id="open_487" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/5105815ff137c12291029977b96aad10.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">486洛森</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/9396e7ca166f9a00f9c8b88d3e2fd499.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">487亚格洛</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="485" jl_num="2" name="普通" py="q" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/5fcb73e3c8ccdf6114b9b58a20aa42af.jpg" />
			            		       			<p>485乔安娜</p></li>
	       			
						<div id="open_485" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/3fea933a60b87e4399c16f7fe340a214.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">484乔乔</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/5fcb73e3c8ccdf6114b9b58a20aa42af.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">485乔安娜</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="483" jl_num="2" name="地面" py="h" rhtype="收费精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/67c5c7f90d49cc35b96a75239f989e06.jpg" />
			            		       			<p>483亨姆</p></li>
	       			
						<div id="open_483" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/d44801da84fac5adc8e9bf9d442ebf81.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">482亨特</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/67c5c7f90d49cc35b96a75239f989e06.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">483亨姆</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="481" jl_num="2" name="暗影" py="a" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/c3b447869252cc77558e759b6eff6f80.jpg" />
			            		       			<p>481埃洛兽</p></li>
	       			
						<div id="open_481" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/25215448b2a11d773564af9e2263d540.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">480埃尔特</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/c3b447869252cc77558e759b6eff6f80.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">481埃洛兽</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="479" jl_num="2" name="超能 冰" py="b" rhtype="兑换精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/e7d892554263b8f153f90202303ccc09.jpg" />
			            		       			<p>479冰洛伏特</p></li>
	       			
						<div id="open_479" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/21e193f72c1d6927cf68877eac61f417.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">478冰洛</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/e7d892554263b8f153f90202303ccc09.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">479冰洛伏特</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="477" jl_num="2" name="冰雪" py="c" rhtype="兑换精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/66d971696c7d2f04bd5b732e574ffa9b.jpg" />
			            		       			<p>477查库拉</p></li>
	       			
						<div id="open_477" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/5b89770142c4c85c78881af7c689a0e1.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">476库德</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/66d971696c7d2f04bd5b732e574ffa9b.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">477查库拉</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="473" jl_num="3" name="草" py="y" rhtype="稀有精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/23de569f51f612690dded20aed6b5f20.jpg" />
			            		       			<p>473伊洛花</p></li>
	       			
						<div id="open_473" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/a0a90c97a4a620427219ceded8ba3a10.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">471伊特</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/e92300db1cb0462cb8cb4d467f8007f6.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">472伊洛草</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/23de569f51f612690dded20aed6b5f20.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">473伊洛花</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="470" jl_num="2" name="龙" py="m" rhtype="活动精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/938f13a3dcd865daef96438dd32498aa.jpg" />
			            		       			<p>470米奈希尔</p></li>
	       			
						<div id="open_470" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/07c1811e9f7e6edae4a227cb85eafe79.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">469米奈</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/938f13a3dcd865daef96438dd32498aa.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">470米奈希尔</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="468" jl_num="3" name="" py="l" rhtype="战队之勇者之塔">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/59b293f51b92960ed1f2b4b6b776cb5c.jpg" />
			            		       			<p>468罗德利斯</p></li>
	       			
						<div id="open_468" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/25e996384af4c635fcfec4fd76c14475.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">466罗特</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/2a5f2d21063c813e5b53acf001bf2faf.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">467赛洛</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/59b293f51b92960ed1f2b4b6b776cb5c.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">468罗德利斯</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="465" jl_num="3" name="" py="n" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/a2c1adba25fc8c28e58168ac3f859686.jpg" />
			            		       			<p>465纳鲁洛特</p></li>
	       			
						<div id="open_465" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/3d8f867956b7d895793b71144f4d7959.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">463鲁格洛</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/08bac64ea04aecc9f464d48ae7b5aebc.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">464纳尔鲁</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/a2c1adba25fc8c28e58168ac3f859686.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">465纳鲁洛特</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="462" jl_num="2" name="" py="a" rhtype="收费精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/ccbe07838af9d10351885ca34fa5d97f.jpg" />
			            		       			<p>462阿尔达拉</p></li>
	       			
						<div id="open_462" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/104ec076690fad9558cac34ebb2d09c3.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">461阿尔克</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/ccbe07838af9d10351885ca34fa5d97f.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">462阿尔达拉</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="460" jl_num="2" name="机械" py="y" rhtype="任务精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/745ebe798755e3df8beb020d1115de30.jpg" />
			            		       			<p>460尤达里克</p></li>
	       			
						<div id="open_460" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/67a56df48a536bf9af721e95f7ce6938.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">459尤达</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/745ebe798755e3df8beb020d1115de30.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">460尤达里克</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="458" jl_num="3" name="普通" py="a" rhtype="活动精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/3843e5a07fd7679c4c2b5d12c3eb4c27.jpg" />
			            		       			<p>458奥利贡</p></li>
	       			
						<div id="open_458" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/cb6d9e69b2c7782efd1cce2deea092c4.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">456阿贡</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/8b3f20fa12e16553ddf77fd593673d12.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">457波波贡</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/3843e5a07fd7679c4c2b5d12c3eb4c27.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">458奥利贡</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="455" jl_num="2" name="电" py="l" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/978d9962311356d19e106917dba46363.jpg" />
			            		       			<p>455雷光兽</p></li>
	       			
						<div id="open_455" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/8889e370a2d5489a1fd0ce9c38766d22.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">454霹雳兽</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/26b2b7b5b4a3a71ae9984af6d2be5743.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">475该隐</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/978d9962311356d19e106917dba46363.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">455雷光兽</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="453" jl_num="3" name="地面 战斗" py="f" rhtype="BOSS精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/c75a2341111db86f65e7fd31a0735186.jpg" />
			            		       			<p>453菲拉斯特</p></li>
	       			
						<div id="open_453" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/1f8e880725f8390e1715e340a43b25f1.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">451塞德</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/7a7e222331330ec38b39451e0be1f07c.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">452菲拉德</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/c75a2341111db86f65e7fd31a0735186.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">453菲拉斯特</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="450" jl_num="3" name="冰 暗影" py="g" rhtype="活动精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/af7bbf93ce613292baf746f28684a56f.jpg" />
			            		       			<p>450格拉诺</p></li>
	       			
						<div id="open_450" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/b62066c4a84f19a858fafbc7376b0c0f.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">448拉瑞</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/8961cd26453e731319e6a362dcd6ce2a.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">449拉诺</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/af7bbf93ce613292baf746f28684a56f.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">450格拉诺</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="447" jl_num="3" name="冰 光" py="g" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/e80448f5223f15c49199377e8739449e.jpg" />
			            		       			<p>447格兰诺</p></li>
	       			
						<div id="open_447" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/12e1f57a4947254254bac67f6f89877f.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">445兰妮</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/52878c0f0f689cf8440c560e99171198.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">446兰诺</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/e80448f5223f15c49199377e8739449e.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">447格兰诺</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="444" jl_num="3" name="草" py="s" rhtype="稀有精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/65121daf475c7a7b46b8118bdf2c9aa9.jpg" />
			            		       			<p>444闪光依莱恩</p></li>
	       			
						<div id="open_444" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/caf80831f196679c3ba992cc91e01360.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">442闪光依依</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/4ee9434afe937f3369152472cff1b1b2.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">443闪光依丁丝</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/65121daf475c7a7b46b8118bdf2c9aa9.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">444闪光依莱恩</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="441" jl_num="3" name="地面" py="m" rhtype="暗黑精灵 ">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/c10bd3f43fd0a19ad695e6df48e4cbce.jpg" />
			            		       			<p>441莫尔加斯</p></li>
	       			
						<div id="open_441" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/bbf2dc944ce63df85bb9905f78b4ddcb.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">439哈比特</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/4e33076bedcf8a61588fb55162c08f43.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">440莫鲁格尔</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/c10bd3f43fd0a19ad695e6df48e4cbce.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">441莫尔加斯</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="438" jl_num="3" name="草" py="m" rhtype="暗黑精灵 ">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/749c189d43ea8831e6457a8704c0e866.jpg" />
			            		       			<p>438魔花使者</p></li>
	       			
						<div id="open_438" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/028614e0eac8dc7f9ae72eb423601d89.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">436黑豆芽</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/db607e8cdb35c31be3c75aa917e1497f.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">437比恩特</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/749c189d43ea8831e6457a8704c0e866.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">438魔花使者</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="435" jl_num="3" name="火" py="s" rhtype="暗黑精灵 ">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/897f130c94b6780c65965a9da798043b.jpg" />
			            		       			<p>435萨诺拉斯</p></li>
	       			
						<div id="open_435" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/ee68a6f198c1446f351212ff0f8a1cbe.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">433萨尔</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/89daa86d6a7dd38e05d193f1137e4d5d.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">434萨诺</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/897f130c94b6780c65965a9da798043b.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">435萨诺拉斯</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="432" jl_num="3" name="战斗" py="j" rhtype="收费精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/19879b33c19061aad29d2b2c6d8270ce.jpg" />
			            		       			<p>432杰西卡</p></li>
	       			
						<div id="open_432" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/b6e99609962efd3bd2ebef51030bf186.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">397杰奥</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/c9cdf24f63e9a60fae475d0b7ea3cd0f.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">398杰拉德</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/19879b33c19061aad29d2b2c6d8270ce.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">432杰西卡</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       					       			<li id="431" jl_num="2" name="水 暗影" py="l" rhtype="稀有精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/b6966a719f46e02aa49c835613ee1ae9.jpg" />
			            		       			<p>431鲁尔蒂尼</p></li>
	       			
						<div id="open_431" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/29ec231bb54126c4700256ac239bd3df.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">430鲁迪</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/b6966a719f46e02aa49c835613ee1ae9.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">431鲁尔蒂尼</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="429" jl_num="3" name="飞行 超能" py="a" rhtype="融合精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/f50f02f99d95ec2d14c6464904cd9d8f.jpg" />
			            		       			<p>429艾克里桑</p></li>
	       			
						<div id="open_429" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/080eb16a72553977b8766d69b22c2a24.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">427桑帕</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/18528da0047e05109111e7cbce4f47de.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">428利桑</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/f50f02f99d95ec2d14c6464904cd9d8f.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">429艾克里桑</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="426" jl_num="2" name="火 战斗" py="d" rhtype="BOSS精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/2107f02d6dbabd949bfaf78192c3c746.jpg" />
			            		       			<p>426迪尔科特</p></li>
	       			
						<div id="open_426" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/aec72bf1433bd7229c1d869d8b08f855.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">425迪克</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/2107f02d6dbabd949bfaf78192c3c746.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">426迪尔科特</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="424" jl_num="3" name="草 超能" py="k" rhtype="稀有精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/1ab81ea09e17e124cf38343f413c94f9.jpg" />
			            		       			<p>424克尔加德</p></li>
	       			
						<div id="open_424" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/a75f570d6b698662cc9a16db0f90acfa.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">422里昂</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/bda929e2226ff44df54826219de0fa98.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">423克苏昂</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/1ab81ea09e17e124cf38343f413c94f9.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">424克尔加德</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="421" jl_num="3" name="光" py="e" rhtype="BOSS精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/7dfe0559dedfb41b60898f325db8a1be.jpg" />
			            		       			<p>421厄尔塞拉</p></li>
	       			
						<div id="open_421" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/534dd486d0a2b238d63434e1d05db846.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">419塞拉</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/0dc2a03eda99550ac22c58eb78a4a56d.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">420拉尔斯</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/7dfe0559dedfb41b60898f325db8a1be.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">421厄尔塞拉</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="418" jl_num="3" name="超能" py="a" rhtype="稀有精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/2f050a35fe33b9b8c9662ebba0e7b746.jpg" />
			            		       			<p>418艾斯菲格</p></li>
	       			
						<div id="open_418" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/2afd5f8f0726193fa834d3088b982cb3.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">416尼奥</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/963fac2fb851cf30b39b9db1716fa7cc.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">417菲斯德</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/2f050a35fe33b9b8c9662ebba0e7b746.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">418艾斯菲格</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="411" jl_num="3" name="地面" py="s" rhtype="稀有精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/4accfecada42bc94d257ad623d3f742f.jpg" />
			            		       			<p>411闪光格鲁高</p></li>
	       			
						<div id="open_411" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/652c9f05bf4de7f32eb07278308d596c.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">409闪光格林</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/debca2283bee84b76d0d48a3b0c22ee4.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">410闪光格力姆</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/4accfecada42bc94d257ad623d3f742f.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">411闪光格鲁高</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="408" jl_num="3" name="地面" py="s" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/728eff74f619962cc1cb7b775b30118f.jpg" />
			            		       			<p>408沙恩克</p></li>
	       			
						<div id="open_408" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/c8450e23da4af243786e379aeb2fdf13.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">406沙尔</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/4f6039bc061959e5c2c2a826659dfb55.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">407沙拉凯</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/728eff74f619962cc1cb7b775b30118f.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">408沙恩克</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="405" jl_num="2" name="战斗" py="t" rhtype="融合精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/2ef8c7d5f169d3b38be42e2c42e685f1.jpg" />
			            		       			<p>405提姆提姆</p></li>
	       			
						<div id="open_405" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/0897caebe548af7934d1eabb2bdb4452.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">404迪姆</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/2ef8c7d5f169d3b38be42e2c42e685f1.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">405提姆提姆</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="403" jl_num="3" name="电" py="t" rhtype="融合精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/b20ad079df3b6385c16c8060d46bec42.jpg" />
			            		       			<p>403泰瑞</p></li>
	       			
						<div id="open_403" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/f6154ef48d3b61f974830080b0fc1807.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">401泰尼</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/27a3234c967bc4455a4b2b09fac7e696.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">402泰克斯</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/b20ad079df3b6385c16c8060d46bec42.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">403泰瑞</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="400" jl_num="2" name="龙" py="s" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/1f29f3a039c14864f921c8d7a3c162fe.jpg" />
			            		       			<p>400萨帕克</p></li>
	       			
						<div id="open_400" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/1e9be5e752a7c40731b5c72d968149bf.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">399萨拉</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/1f29f3a039c14864f921c8d7a3c162fe.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">400萨帕克</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="396" jl_num="3" name="飞行" py="l" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/f3ce9c23c4b9f29070d48696828cb256.jpg" />
			            		       			<p>396龙须蝴</p></li>
	       			
						<div id="open_396" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/4e0b04149d5bb6fb9aa0ab0ec2d58b49.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">394嗡嗡茧</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/d848c6609d172283581d66429276733f.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">395嗡嗡蝴</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/f3ce9c23c4b9f29070d48696828cb256.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">396龙须蝴</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="393" jl_num="2" name="火" py="s" rhtype="收费精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/898e0033fcde1cfabd42fadaab50f14e.jpg" />
			            		       			<p>393上古炎兽</p></li>
	       			
						<div id="open_393" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/445e7768e0117a37161a01941de89465.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">392夏伏兽</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/898e0033fcde1cfabd42fadaab50f14e.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">393上古炎兽</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="391" jl_num="2" name="龙" py="t" rhtype="BOSS精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/b13a12024cb2f6e7cccaa849278d0d8b.jpg" />
			            		       			<p>391塔西亚</p></li>
	       			
						<div id="open_391" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/4946f7ae9073500d820f5b5a65ded093.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">390塔拉</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/b13a12024cb2f6e7cccaa849278d0d8b.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">391塔西亚</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="389" jl_num="3" name="草" py="x" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/5bcd00dac41052c2e8b1f698e71b5857.jpg" />
			            		       			<p>389辛奇帕克</p></li>
	       			
						<div id="open_389" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/cd855ca9f96cb2d34bfe30888401db2c.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">387辛诺</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/9a04788dc211077b0067c583fb251969.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">388辛诺瓦</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/5bcd00dac41052c2e8b1f698e71b5857.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">389辛奇帕克</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="386" jl_num="2" name="冰雪" py="j" rhtype="初始精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/d9a3795efffb9b3150aaa09c5d93f7e6.jpg" />
			            		       			<p>386基维奥拉</p></li>
	       			
						<div id="open_386" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/b65cf0c388c052b20e0860704ee95d2b.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">385基摩</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/d9a3795efffb9b3150aaa09c5d93f7e6.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">386基维奥拉</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="384" jl_num="2" name="普通" py="b" rhtype="任务精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/07335bcb58f635e20ee971aac1c05c7a.jpg" />
			            		       			<p>384波戈</p></li>
	       			
						<div id="open_384" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/34f6264d171379326397172d9e866702.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">383波比</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/07335bcb58f635e20ee971aac1c05c7a.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">384波戈</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="380" jl_num="3" name="冰雪" py="k" rhtype="任务精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/0b6e5aa71e23de020080400e05e1e08e.jpg" />
			            		       			<p>380凯凯西朴</p></li>
	       			
						<div id="open_380" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/e57ab8adadddd1597cdd26a1ee7daadb.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">378凯奴</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/b903abab4266cce366a2d3e38ea545e9.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">379凯瑟琳</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/0b6e5aa71e23de020080400e05e1e08e.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">380凯凯西朴</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="377" jl_num="2" name="地面" py="s" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/dad8dd9fa8b4a4568e42865681c1bef6.jpg" />
			            		       			<p>377宿主岩</p></li>
	       			
						<div id="open_377" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/85de7e3df239eb94737f214fc7ba1596.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">376寄宿岩</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/dad8dd9fa8b4a4568e42865681c1bef6.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">377宿主岩</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="375" jl_num="3" name="机械" py="l" rhtype="任务精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/28d8bfcb6e28ebd5b43bfa003dc4c18d.jpg" />
			            		       			<p>375隆米尔</p></li>
	       			
						<div id="open_375" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/ff79084aecd9831a2b8ce94138ec0052.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">373莫顿</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/60a751c062f6eb1e2eefc3fca85c62ff.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">374古利安</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/28d8bfcb6e28ebd5b43bfa003dc4c18d.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">375隆米尔</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="372" jl_num="3" name="光" py="k" rhtype="任务精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/8893e03bed244def8551d2a12fa40785.jpg" />
			            		       			<p>372奎比历斯</p></li>
	       			
						<div id="open_372" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/4c410f4bdf60671a8259a6923e3b0add.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">370奎尼</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/1336bf89406c9e6db9994f3831151048.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">371奎斯多</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/8893e03bed244def8551d2a12fa40785.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">372奎比历斯</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="369" jl_num="1" name="草" py="x" rhtype="http://img1.2125.com/upload/seer/thumb/943211361a2e404f000c78b4a2832d36.jpg">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/943211361a2e404f000c78b4a2832d36.jpg" />
			            		       			<p>369橡木蝶</p></li>
	       			
						<div id="open_369" style="width: 113px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://res.61.com/img/seer/6f2cc3b2f6e4b1124c34f2d2c9fe9faa.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">369橡木蝶</a>
                    			</li>
                      		</ul>
                   		</div>  	                   		
	       				       			
	       			       					       			<li id="368" jl_num="1" name="火" py="c" rhtype="http://img1.2125.com/upload/seer/thumb/3b84e43b90ecb9cafd47cc292e7cf3d2.jpg">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/3b84e43b90ecb9cafd47cc292e7cf3d2.jpg" />
			            		       			<p>368炽翼蝶</p></li>
	       			
						<div id="open_368" style="width: 113px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://res.61.com/img/seer/fe6f449fd634fd473dde42cc2ec35e89.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">368炽翼蝶</a>
                    			</li>
                      		</ul>
                   		</div>  	                   		
	       				       			
	       			       					       			<li id="367" jl_num="1" name="水" py="h" rhtype="http://img1.2125.com/upload/seer/thumb/45b1b4cdcec2e1c71e3b16541f3deb98.jpg">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/45b1b4cdcec2e1c71e3b16541f3deb98.jpg" />
			            		       			<p>367海纹蝶</p></li>
	       			
						<div id="open_367" style="width: 113px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://res.61.com/img/seer/15b6428c4984ef65108e63e2359a0492.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">367海纹蝶</a>
                    			</li>
                      		</ul>
                   		</div>  	                   		
	       				       			
	       			       					       			<li id="366" jl_num="1" name="普通" py="d" rhtype="http://img1.2125.com/upload/seer/thumb/c875122923a9b1c62cbc216f6c150458.jpg">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/c875122923a9b1c62cbc216f6c150458.jpg" />
			            		       			<p>366呆呆蛹</p></li>
	       			
						<div id="open_366" style="width: 113px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://res.61.com/img/seer/59078d496e1d5313d347a46dca41cee0.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">366呆呆蛹</a>
                    			</li>
                      		</ul>
                   		</div>  	                   		
	       				       			
	       			       					       			<li id="365" jl_num="2" name="火" py="h" rhtype="任务精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/5211a60494d186ed57b1474017d8b631.jpg" />
			            		       			<p>365火爆鼠</p></li>
	       			
						<div id="open_365" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/6d301822c4a3add346f454a58bec33dd.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">364琪可</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/5211a60494d186ed57b1474017d8b631.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">365火爆鼠</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="363" jl_num="2" name="超能" py="l" rhtype="任务精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/a3decb4b32b29181a0bdc9caf89d3914.jpg" />
			            		       			<p>363鲁比克</p></li>
	       			
						<div id="open_363" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/c3adba15f4f942afe6e06270f3ca457f.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">362丘波</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/a3decb4b32b29181a0bdc9caf89d3914.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">363鲁比克</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="361" jl_num="2" name="电" py="a" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/a99f242bbd7436953597790d97715e17.jpg" />
			            		       			<p>361艾丝柏</p></li>
	       			
						<div id="open_361" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/08913d38e5a57e46fc97a58c14be1490.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">360艾米</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/a99f242bbd7436953597790d97715e17.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">361艾丝柏</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="359" jl_num="3" name="水" py="b" rhtype="暗黑精灵 ">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/98e7e643fffd1e449c45c46a0e62bdc4.jpg" />
			            		       			<p>359布林克克</p></li>
	       			
						<div id="open_359" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/b51acd3dfcd8f3ed5b6e7f88d91aab74.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">357布林</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/4e0a4ad856bf1198bce795962d91d13c.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">358布林多</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/98e7e643fffd1e449c45c46a0e62bdc4.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">359布林克克</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="356" jl_num="3" name="电" py="s" rhtype="暗黑精灵 ">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/586c54222f6f51567b829baac47a9e83.jpg" />
			            		       			<p>356斯加尔卡</p></li>
	       			
						<div id="open_356" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/8d0ad2a46f53393657bbf018059b7ad5.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">354克鲁</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/159ad4da2068d2db7320dda3e73dfb4a.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">355加鲁卡</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/586c54222f6f51567b829baac47a9e83.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">356斯加尔卡</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="353" jl_num="3" name="超能" py="d" rhtype="任务精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/93bd1cd2c8ab979bbe40ef5484d84b50.jpg" />
			            		       			<p>353迪斯凯特</p></li>
	       			
						<div id="open_353" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/2af950fe3fdffe0a42e20b614d51a7d5.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">351磁碟怪</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/714e39b660af5e75a52ea9f59ce6085b.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">352双碟怪</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/93bd1cd2c8ab979bbe40ef5484d84b50.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">353迪斯凯特</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="350" jl_num="3" name="普通" py="x" rhtype="任务精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/f63ff4d00ef06b8191ca3a64000e274e.jpg" />
			            		       			<p>350夏洛犬</p></li>
	       			
						<div id="open_350" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/00b3988a8300033b4e88b62cb0fce284.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">348小犬苗</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/c18cf5cb0ec8a7f3d64ff3d72b0d4f3c.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">349天才犬</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/f63ff4d00ef06b8191ca3a64000e274e.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">350夏洛犬</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="347" jl_num="2" name="水" py="y" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/8b786e139dcec8c888233b27a2b48e12.jpg" />
			            		       			<p>347远古鱼龙</p></li>
	       			
						<div id="open_347" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/5c32b94b9d76095227a6158691888378.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">346宝贝鲤</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/8b786e139dcec8c888233b27a2b48e12.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">347远古鱼龙</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="345" jl_num="2" name="飞行" py="j" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/9beb8b466345f66203341c3f4e968f3a.jpg" />
			            		       			<p>345巨镰鸟</p></li>
	       			
						<div id="open_345" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/402737fcece8756b1cae95f6ea0b1422.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">344幼镰鸟</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/9beb8b466345f66203341c3f4e968f3a.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">345巨镰鸟</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="343" jl_num="3" name="暗影" py="s" rhtype="融合精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/25a52735f1098af8754c677db3711bac.jpg" />
			            		       			<p>343索比拉特</p></li>
	       			
						<div id="open_343" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/37dd4eb0b06557f9ad3ed2e3ef5be3b6.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">341索尔</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/09a26025f0fa4f74ad67e78a1eb4cf63.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">342索米亚</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/25a52735f1098af8754c677db3711bac.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">343索比拉特</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="340" jl_num="3" name="机械" py="t" rhtype="融合精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/19686e738bb535336910d155c276b752.jpg" />
			            		       			<p>340托雷塔斯</p></li>
	       			
						<div id="open_340" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/a652989df18dbd7a71c2f93106848e05.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">338多塔</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/8297824e2d5bd5d0a239e19ee3d6d8bb.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">339托雷亚</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/19686e738bb535336910d155c276b752.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">340托雷塔斯</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="337" jl_num="3" name="火" py="c" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/401df652ae8f3ef0501f032587b20cf2.jpg" />
			            		       			<p>337赤西西比</p></li>
	       			
						<div id="open_337" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/9e66b445aa0e5166801de768236c285b.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">335赤甲虫</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/da0a6ca551e79d3421ff52181ff436be.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">336赤贝利</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/401df652ae8f3ef0501f032587b20cf2.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">337赤西西比</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="334" jl_num="3" name="火" py="d" rhtype="初始精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/35fb32f04e74d353b8c706e4fd04c4ab.jpg" />
			            		       			<p>334多鲁鲁斯</p></li>
	       			
						<div id="open_334" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/22e713154906c764b4d7522ff5e21b1c.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">332烈炎兽</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/38987f15b929a3dff44dda1af3c722dc.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">333艮米拉</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/35fb32f04e74d353b8c706e4fd04c4ab.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">334多鲁鲁斯</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="331" jl_num="2" name="普通" py="h" rhtype="融合精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/5ba4cfb2f013fb66ea400c858fdfc7bf.jpg" />
			            		       			<p>331哈伊卡</p></li>
	       			
						<div id="open_331" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/234b5605b5e3ae27bd012e066c5c16cf.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">330伊达</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/5ba4cfb2f013fb66ea400c858fdfc7bf.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">331哈伊卡</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="329" jl_num="2" name="普通" py="x" rhtype="融合精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/59cdb69f2e52ec969ea89b3fd7da2547.jpg" />
			            		       			<p>329辛娜斯</p></li>
	       			
						<div id="open_329" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/fcfb52076361eaa3b0e9be7976a4951c.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">328辛克</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/59cdb69f2e52ec969ea89b3fd7da2547.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">329辛娜斯</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="327" jl_num="3" name="普通" py="s" rhtype="融合精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/f1310c9d123d5525e0a718651daf9db4.jpg" />
			            		       			<p>327塞拉兔</p></li>
	       			
						<div id="open_327" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/9f7958db26ef5b6893c78645675e83da.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">325卡门兔</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/9e0c8ade9578d2fbc783a02439b3b582.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">326海格兔</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/f1310c9d123d5525e0a718651daf9db4.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">327塞拉兔</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="324" jl_num="3" name="冰雪" py="g" rhtype="融合精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/b11b62c77d2c2af8dbf681829a5b0592.jpg" />
			            		       			<p>324古雷亚</p></li>
	       			
						<div id="open_324" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/e28375cdc29ef7a255b6d4e460d9fbfe.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">322卡克</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/c367dedd177409f4cd5c9e2079267d35.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">323利斯</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/b11b62c77d2c2af8dbf681829a5b0592.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">324古雷亚</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="321" jl_num="3" name="飞行" py="h" rhtype="融合精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/3babb59cfb168d377afeadba3cea90da.jpg" />
			            		       			<p>321哈尔翼蜂</p></li>
	       			
						<div id="open_321" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/7e49e71c86ffd6b605497e8e9519ce32.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">319轻羽蜂</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/04db30625b8f6111f2b466b8bc5b55c5.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">320迅捷蛹</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/3babb59cfb168d377afeadba3cea90da.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">321哈尔翼蜂</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="318" jl_num="3" name="地面" py="k" rhtype="融合精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/77d2922427641b4034db31e80b7c6c0d.jpg" />
			            		       			<p>318卡鲁克斯</p></li>
	       			
						<div id="open_318" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/b9dd3bb955b44d8cbda8121d278b4b30.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">316达莫拉</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/4651876957925cca5f387a2f7715cf44.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">317达拉格</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/77d2922427641b4034db31e80b7c6c0d.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">318卡鲁克斯</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="315" jl_num="3" name="神秘" py="k" rhtype="融合精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/61e123e72d78a71e8bd93c70e97dea79.jpg" />
			            		       			<p>315卡鲁耶克</p></li>
	       			
						<div id="open_315" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/a1191a60f6783c63dc221be4396d001b.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">313卡鲁</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/0bf687e8846760f37bbeca3d3e12fcdd.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">314卡克拉</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/61e123e72d78a71e8bd93c70e97dea79.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">315卡鲁耶克</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="312" jl_num="3" name="超能" py="s" rhtype="融合精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/eccee9522502149a6ca8ad23731c2cb7.jpg" />
			            		       			<p>312闪光艾菲亚</p></li>
	       			
						<div id="open_312" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/5bf42a532e7573add30f351cf0d40ea9.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">310闪光尼尔</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/3377a8ede6bf61a33be1d2abfed5df7b.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">311闪光菲斯利</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/eccee9522502149a6ca8ad23731c2cb7.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">312闪光艾菲亚</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="309" jl_num="3" name="火" py="m" rhtype="融合精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/7d9d4016ca878c1da1a3f244e31643a1.jpg" />
			            		       			<p>309魔焰猩猩</p></li>
	       			
						<div id="open_309" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/302f45eb97d383d13a93e46a0a043152.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">307炎火猴</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/b1e9f5a0c8e5098fdd18c2d216b9653d.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">308熔火灵猴</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/7d9d4016ca878c1da1a3f244e31643a1.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">309魔焰猩猩</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="306" jl_num="3" name="水" py="l" rhtype="融合精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/6cb802a327d565d39e251f224c0fb350.jpg" />
			            		       			<p>306鲁斯王</p></li>
	       			
						<div id="open_306" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/ba72cf8c9decd779a4fe5163be4209fe.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">304伊优达</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/67ebbecbdd5f76e568866474db548e5a.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">305利爪尤里安</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/6cb802a327d565d39e251f224c0fb350.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">306鲁斯王</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="303" jl_num="3" name="草" py="l" rhtype="融合精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/f384e9fe8e08e1775efcbebcefefe32a.jpg" />
			            		       			<p>303丽莎布布</p></li>
	       			
						<div id="open_303" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/a6f8b8df3b8c2ce86d7fe65a4c89bcb1.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">301黄金布布</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/123b7aefc38ca797891452489fc93e5f.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">302蒙娜布布</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/f384e9fe8e08e1775efcbebcefefe32a.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">303丽莎布布</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="300" jl_num="1" name="圣灵" py="" rhtype="http://img1.2125.com/upload/seer/thumb/31900b0f9a41fee73784652a53100d11.jpg">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/31900b0f9a41fee73784652a53100d11.jpg" />
			            		       			<p>300谱尼</p></li>
	       			
						<div id="open_300" style="width: 113px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://res.61.com/img/seer/shengling/e6b9b25cd658c3b7d514799c753e5b60.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">300谱尼</a>
                    			</li>
                      		</ul>
                   		</div>  	                   		
	       				       			
	       			       					       			<li id="299" jl_num="2" name="地面" py="m" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/f537af5913f2b3cf7f169781d1049bd1.jpg" />
			            		       			<p>299猛虎王</p></li>
	       			
						<div id="open_299" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/f5feb7e665278d8abb81c18119e8d2f0.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">298迅牙虎</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/f537af5913f2b3cf7f169781d1049bd1.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">299猛虎王</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="295" jl_num="3" name="草" py="m" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/a60c58d5cb4b1cb77e34dcd4c69f7cad.jpg" />
			            		       			<p>295迷你果</p></li>
	       			
						<div id="open_295" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/f3ca538e8014e61f44733e3e6ff74fe0.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">293迷你芽</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/bb45080b9ad36b4e753045631a793043.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">294迷你草</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/a60c58d5cb4b1cb77e34dcd4c69f7cad.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">295迷你果</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="292" jl_num="2" name="地面" py="f" rhtype="野生精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/dbc9143f0e03a7dbe10c8fa09e7e4b88.jpg" />
			            		       			<p>292弗里昂</p></li>
	       			
						<div id="open_292" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/f0caf71f97840167d4b99a755d742b57.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">291弗曼</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/dbc9143f0e03a7dbe10c8fa09e7e4b88.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">292弗里昂</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="290" jl_num="2" name="水" py="y" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/79531f60ec18d972c5d832d66b3bf730.jpg" />
			            		       			<p>290约凡撒 </p></li>
	       			
						<div id="open_290" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/6b8fa1a24f1924c6cfc6353e650f86c4.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">289约西</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/79531f60ec18d972c5d832d66b3bf730.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">290约凡撒 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="288" jl_num="2" name="机械" py="e" rhtype="野生精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/453dc81baa46a35f9b700c5fd5d848c2.jpg" />
			            		       			<p>288厄斯沃姆</p></li>
	       			
						<div id="open_288" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/67e8783e40220f526fc894127114a697.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">287厄斯</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/453dc81baa46a35f9b700c5fd5d848c2.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">288厄斯沃姆</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="286" jl_num="3" name="电" py="s" rhtype="稀有精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/d7dce375bf2823be4ec8330a19d5ad95.jpg" />
			            		       			<p>286闪光电击兔</p></li>
	       			
						<div id="open_286" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/2b57e05914999a5651317c625e7af780.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">284闪光利利</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/aba49caf0364b2f6693541f856f6658f.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">285闪光绵绵</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/d7dce375bf2823be4ec8330a19d5ad95.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">286闪光电击兔</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="283" jl_num="3" name="光" py="l" rhtype="任务精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/60f6eeeb8145a21e72a6c1fc56debbdc.jpg" />
			            		       			<p>283伶俐雕</p></li>
	       			
						<div id="open_283" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/20512aff2396268776ac872c44412efd.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">281伶俐鸟</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/217f1ea6b2d209487ee1a1c3bd9ffaae.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">282伶俐雀</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/60f6eeeb8145a21e72a6c1fc56debbdc.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">283伶俐雕</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="280" jl_num="3" name="暗影" py="s" rhtype="野生精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/bdff97d4aaca3ad999d464cf042fbb1e.jpg" />
			            		       			<p>280沙罗希瓦</p></li>
	       			
						<div id="open_280" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/0d3ad95cb894fb932e6b0a19644a3c16.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">278沙顿</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/7e83beeaaee0443938b1bea058023877.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">279沙比克</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/bdff97d4aaca3ad999d464cf042fbb1e.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">280沙罗希瓦</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="277" jl_num="3" name="战斗" py="y" rhtype="任务精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/51672cd066cc3a013e581bce5ff58469.jpg" />
			            		       			<p>277尹泰拉多</p></li>
	       			
						<div id="open_277" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/fa92e1ecf8091efb6a6a8779fc422d49.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">275尹赫</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/748fbd266e38273c1964ec152dfe1a51.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">276尹泰奇</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/51672cd066cc3a013e581bce5ff58469.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">277尹泰拉多</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="274" jl_num="2" name="龙" py="" rhtype="BOSS精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/c7799ccc6d509cab26942389a4d02916.jpg" />
			            		       			<p>274塔克林</p></li>
	       			
						<div id="open_274" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/64588b07deac4fd597bc55aa1a60d1d7.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">273塔米</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/c7799ccc6d509cab26942389a4d02916.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">274塔克林</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="268" jl_num="2" name="飞行" py="w" rhtype="初始精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/23dae0428049b75ab7229a44d5574f9b.jpg" />
			            		       			<p>268乌力朴</p></li>
	       			
						<div id="open_268" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/60ea566abd8dc364d532ed9d90cd287d.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">267乌凯</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/23dae0428049b75ab7229a44d5574f9b.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">268乌力朴</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="266" jl_num="2" name="普通" py="p" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/565fd9804817ca9522130ddd8ed7aa86.jpg" />
			            		       			<p>266帕格尼尼</p></li>
	       			
						<div id="open_266" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/dd6a04299482f40c9d821d310fa09f4a.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">265帕尼</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/565fd9804817ca9522130ddd8ed7aa86.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">266帕格尼尼</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="264" jl_num="3" name="超能" py="n" rhtype="BOSS精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/698b9f1d5ecdbb459ac016bfea358122.jpg" />
			            		       			<p>264奈尼芬多</p></li>
	       			
						<div id="open_264" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/0f51eb7deca225c2111e4d737b0ab90e.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">262奈姬</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/324dcf433cb79f0c4bc2339bc63c2557.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">263奈诺伊</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/698b9f1d5ecdbb459ac016bfea358122.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">264奈尼芬多</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="261" jl_num="2" name="战斗" py="g" rhtype="BOSS精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/a5f8078df45cb9acacea718cee536e4d.jpg" />
			            		       			<p>261盖亚</p></li>
	       			
						<div id="open_261" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/a6533baa8c521d0521fb112c6003133d.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">260提坦</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/a5f8078df45cb9acacea718cee536e4d.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">261盖亚</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="259" jl_num="3" name="地面" py="a" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/0e56d2f188b2d7b17a897a2a98d2af09.jpg" />
			            		       			<p>259埃里克斯</p></li>
	       			
						<div id="open_259" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/f8f8dbc1b7f0364ae45b3aac81ded178.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">257埃闻</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/35f31be81a5164dba519c77fe185068f.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">258埃瑞克</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/0e56d2f188b2d7b17a897a2a98d2af09.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">259埃里克斯</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="256" jl_num="3" name="普通" py="d" rhtype="稀有精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/e98e1e364dc626537dd8074d974b4c63.jpg" />
			            		       			<p>256嘟咕噜王</p></li>
	       			
						<div id="open_256" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/685d6b4c4a9a078ee1bfc6aa90ff7d9b.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">254嘟咕噜</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/546aa9f04e6ad55d2b787dce2e77fb0b.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">255嘟咕噜达</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/e98e1e364dc626537dd8074d974b4c63.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">256嘟咕噜王</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="253" jl_num="2" name="普通" py="d" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/a0517d5f88070dd8746a7c377bc3d969.jpg" />
			            		       			<p>253嘟噜噜王</p></li>
	       			
						<div id="open_253" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/62af50738eca3e8125f5deaaf0e45256.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">252嘟噜噜</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/a0517d5f88070dd8746a7c377bc3d969.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">253嘟噜噜王</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="251" jl_num="3" name="飞行" py="s" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/469f496b2282f4a58d1ee8d4b261c7a0.jpg" />
			            		       			<p>251萨洛姆斯</p></li>
	       			
						<div id="open_251" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/eecbf02bc4f4d0977087ff685bac51ff.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">249浮空苗</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/1668fb4c106b9d3c35f4af336b452c26.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">250浮空鱼</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/469f496b2282f4a58d1ee8d4b261c7a0.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">251萨洛姆斯</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="248" jl_num="3" name="超能" py="a" rhtype="任务精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/e16c291c9aacf92b55d0a5d952680b25.jpg" />
			            		       			<p>248艾贝多芬</p></li>
	       			
						<div id="open_248" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/a5977d58f25375d1c87d3c789ab3df23.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">246艾格</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/eb3260acd9a7cb7797844d9a5e89a5c8.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">247艾尔特</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/e16c291c9aacf92b55d0a5d952680b25.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">248艾贝多芬</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="245" jl_num="3" name="草" py="b" rhtype="任务精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/08294b0219284c00eba78d341edd1031.jpg" />
			            		       			<p>245宾尼纳拉</p></li>
	       			
						<div id="open_245" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/6a1b1937ee1780eba319f69c5ff1fb9c.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">243宾波</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/52b3b739b6281dad8f803d8f68bbf5c6.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">244宾多拉</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/08294b0219284c00eba78d341edd1031.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">245宾尼纳拉</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="242" jl_num="3" name="暗影" py="h" rhtype="稀有精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/1f18e89bb2349a9fe895889e05061846.jpg" />
			            		       			<p>242海德拉</p></li>
	       			
						<div id="open_242" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/8a57a53d99818199ff4c7b09e429f1e2.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">240斯内克</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/56ed1f4773fc765d5c55e9837944d73f.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">241比格尔</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/1f18e89bb2349a9fe895889e05061846.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">242海德拉</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="239" jl_num="3" name="光" py="j" rhtype="稀有精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/02488e72f1b5f458617a391b857de9ef.jpg" />
			            		       			<p>239吉娜斯</p></li>
	       			
						<div id="open_239" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/bdcefdc04c6505b15235e39945f8d385.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">237吉宝</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/e394fed34408556f0cd623d510de3d32.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">238吉娜</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/02488e72f1b5f458617a391b857de9ef.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">239吉娜斯</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="236" jl_num="2" name="地面" py="m" rhtype="野生精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/3a7a0910dda873f788d785b76fc8043a.jpg" />
			            		       			<p>236米洛尼</p></li>
	       			
						<div id="open_236" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/35e01cd01d848ceb471bf92920965359.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">235米隆</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/3a7a0910dda873f788d785b76fc8043a.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">236米洛尼</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="234" jl_num="3" name="超能" py="y" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/51bf452466e76e0fc88781dd55d743e4.jpg" />
			            		       			<p>234伊娅丝</p></li>
	       			
						<div id="open_234" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/927e90240af86414ac63a491ad7fe5a4.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">232伊娃</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/5557825d7f3080406c7a7e2ef6fb9ff4.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">233伊妮娅</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/51bf452466e76e0fc88781dd55d743e4.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">234伊娅丝</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="231" jl_num="2" name="普通" py="c" rhtype="任务精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/098353797a2f4595fb02edea59c8a727.jpg" />
			            		       			<p>231刺爪蟹</p></li>
	       			
						<div id="open_231" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/7f47bbf4377bb42ee55cf6525a201bcc.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">230硬甲蟹</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/098353797a2f4595fb02edea59c8a727.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">231刺爪蟹</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="229" jl_num="2" name="战斗" py="c" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/8c7eb96a2b52955f0b689458b00f7076.jpg" />
			            		       			<p>229查尔顿</p></li>
	       			
						<div id="open_229" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/cc9f61a8d100b8876034140b97785838.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">228查斯</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/8c7eb96a2b52955f0b689458b00f7076.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">229查尔顿</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="227" jl_num="3" name="普通" py="y" rhtype="暗黑精灵 ">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/559307325f2de5340a702eeec98d08f6.jpg" />
			            		       			<p>227伊兰罗尼</p></li>
	       			
						<div id="open_227" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/1a21efa0ba5f97ae63232760c713392e.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">225罗尼</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/b92fa733d955473aa42850987e7b5905.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">226吉鲁尼</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/559307325f2de5340a702eeec98d08f6.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">227伊兰罗尼</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="224" jl_num="2" name="机械" py="h" rhtype="暗黑精灵 ">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/793d0e245d93d9ff08563817f399e103.jpg" />
			            		       			<p>224赫德卡</p></li>
	       			
						<div id="open_224" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/d9b153a2d5cd6e54b20b4e782d53999f.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">223德塔</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/793d0e245d93d9ff08563817f399e103.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">224赫德卡</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="222" jl_num="2" name="战斗" py="k" rhtype="暗黑精灵 ">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/12c928dfad4f958921aa998382d800bf.jpg" />
			            		       			<p>222卡库</p></li>
	       			
						<div id="open_222" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/4fc7b45b5fd791f9b196b29033d92a08.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">221卡博</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/12c928dfad4f958921aa998382d800bf.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">222卡库</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="220" jl_num="2" name="光" py="y" rhtype="稀有精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/e4b2e76d769264eb521f380c3e34b55c.jpg" />
			            		       			<p>220依希亚</p></li>
	       			
						<div id="open_220" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/c8f6846c5bf0f864672de419514866a2.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">219依卢</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/e4b2e76d769264eb521f380c3e34b55c.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">220依希亚</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="218" jl_num="2" name="暗影" py="z" rhtype="稀有精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/849509c52a975baa7861e2a7a0a6aec3.jpg" />
			            		       			<p>218扎夫特</p></li>
	       			
						<div id="open_218" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/509d5c7a5dfc0b1bb2a341fd06bf4268.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">217扎克</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/849509c52a975baa7861e2a7a0a6aec3.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">218扎夫特</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="216" jl_num="2" name="龙" py="h" rhtype="BOSS精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/4e850e990c7b9eabc1f453266ae8b4b6.jpg" />
			            		       			<p>216哈莫雷特</p></li>
	       			
						<div id="open_216" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/8cfb3bf1f8806198f128809d64cc4a2c.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">215哈莫</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/4e850e990c7b9eabc1f453266ae8b4b6.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">216哈莫雷特</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="214" jl_num="2" name="机械" py="T" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/b87b973f39478972f873843bd281f24c.jpg" />
			            		       			<p>214TOH</p></li>
	       			
						<div id="open_214" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/5cb452720405d1d6b73cd34a6f127314.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">213TOE</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/b87b973f39478972f873843bd281f24c.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">214TOH</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="210" jl_num="3" name="火" py="d" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/86f4aadecc925892377a47c0d47e597a.jpg" />
			            		       			<p>210多鲁姆</p></li>
	       			
						<div id="open_210" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/9508a3cb738f8a035f2d1602b30df403.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">208火晶兽</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/2825c4faab103bb4b78dbc6fe4c7c40b.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">209艮吉兽</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/86f4aadecc925892377a47c0d47e597a.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">210多鲁姆</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="207" jl_num="3" name="普通" py="x" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/7001c58d13ddeb3554decabcf448ded9.jpg" />
			            		       			<p>207星吉拉</p></li>
	       			
						<div id="open_207" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/74b6b2bc86b884970dd3bc33f6acbd9f.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">205阿兹</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/406ab26703f0ff3051f6f7095fd38a05.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">206科利</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/7001c58d13ddeb3554decabcf448ded9.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">207星吉拉</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="204" jl_num="2" name="地面" py="t" rhtype="稀有精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/6bec625f13081c2e387f361204535d6e.jpg" />
			            		       			<p>204塔姆拉</p></li>
	       			
						<div id="open_204" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/6beabf883a0650d70d04d2c4d49a26af.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">203晶岩兽</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/6bec625f13081c2e387f361204535d6e.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">204塔姆拉</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="202" jl_num="2" name="机械" py="S" rhtype="兑换精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/15c86d2dc82c1d6c7fa38c3c83022758.jpg" />
			            		       			<p>202SRX</p></li>
	       			
						<div id="open_202" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/7520ed6dd7665ad9e73d8743de1d0de3.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">201SRT</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/15c86d2dc82c1d6c7fa38c3c83022758.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">202SRX</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="200" jl_num="3" name="水" py="l" rhtype="野生精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/13e38545b19cb410e14d1ffdf8deadc0.jpg" />
			            		       			<p>200麟甲龙鱼</p></li>
	       			
						<div id="open_200" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/5be98fcc737d352a865c94116fc89acf.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">198小鳍鱼</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/aee516604d996ec6548d80348ba36e1f.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">199贝克鱼</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/13e38545b19cb410e14d1ffdf8deadc0.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">200麟甲龙鱼</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="197" jl_num="2" name="超能" py="y" rhtype="任务精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/662c45d7275d61eeb39a5df9573db38e.jpg" />
			            		       			<p>197亚梅丝</p></li>
	       			
						<div id="open_197" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/9d1bb45f750d9a592fb1bfae7c3ee8d0.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">196祖拉</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/662c45d7275d61eeb39a5df9573db38e.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">197亚梅丝</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="195" jl_num="3" name="电" py="x" rhtype="暗黑精灵 ">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/9aafae501895eb58d276964b799c2551.jpg" />
			            		       			<p>195西萨拉斯</p></li>
	       			
						<div id="open_195" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/cf1f8fcc309f6d7960efd057ed5c80a7.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">193奇达</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/68586afe743d04ce2961003f7c050d8f.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">194罗卡尔</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/9aafae501895eb58d276964b799c2551.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">195西萨拉斯</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="192" jl_num="3" name="冰雪" py="k" rhtype="暗黑精灵 ">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/1ef63e59b59a3b36d1458deb10ed932e.jpg" />
			            		       			<p>192克林卡修</p></li>
	       			
						<div id="open_192" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/30df33ed2409e050b6f56f6c2508c135.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">190林奇</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/13e8d9a6dc56717574e055470843a95a.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">191林修斯</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/1ef63e59b59a3b36d1458deb10ed932e.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">192克林卡修</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="189" jl_num="2" name="战斗" py="j" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/3efe14a1d597122e94c3e585606b79a6.jpg" />
			            		       			<p>189加格尔</p></li>
	       			
						<div id="open_189" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/ff1f3872fc3302110bc76d868827e635.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">188加格</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/3efe14a1d597122e94c3e585606b79a6.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">189加格尔</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="187" jl_num="2" name="普通" py="m" rhtype="BOSS精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/fe8aa7ca8d6e401ac42d4574f3df5781.jpg" />
			            		       			<p>187魔狮迪露</p></li>
	       			
						<div id="open_187" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/aa8749828ffd98d7c77b35ff2aafc134.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">186露露</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/fe8aa7ca8d6e401ac42d4574f3df5781.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">187魔狮迪露</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="185" jl_num="2" name="普通" py="m" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/3b3d302f2a5c23d27c500e5f29c6acc4.jpg" />
			            		       			<p>185梅鲁</p></li>
	       			
						<div id="open_185" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/4ae41ed37d4274be1abe961808298c80.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">184古鲁</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/3b3d302f2a5c23d27c500e5f29c6acc4.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">185梅鲁</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="183" jl_num="3" name="地面" py="q" rhtype="暗黑精灵 ">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/bd1e73d19917edbb284073b45c8fbb10.jpg" />
			            		       			<p>183奇拉塔顿</p></li>
	       			
						<div id="open_183" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/cd574a75dddd167ea9b9a051cd339da5.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">181洛奇</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/16f400236e78230a433a9392446b2e5c.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">182拉杰特</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/bd1e73d19917edbb284073b45c8fbb10.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">183奇拉塔顿</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="180" jl_num="3" name="地面" py="k" rhtype="稀有精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/2836d39c5618c5a9ec70135abc32d7ac.jpg" />
			            		       			<p>180卡斯达克</p></li>
	       			
						<div id="open_180" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/45ec1a5ca7b4e5476501474891ae71e9.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">178达比拉</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/dcf836d8cfd8c067762fd9b1c85ea7e7.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">179达拉克</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/2836d39c5618c5a9ec70135abc32d7ac.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">180卡斯达克</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="177" jl_num="3" name="飞行" py="b" rhtype="暗黑精灵 ">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/e96b4ec6c515e1b7ec6809c3561801a7.jpg" />
			            		       			<p>177巴弗洛</p></li>
	       			
						<div id="open_177" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/7277f9a285281b47a8907f1c5f9fb978.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">175希洛</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/bc6e3e77dc680933d421b126da2cb1fc.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">176卡沸</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/e96b4ec6c515e1b7ec6809c3561801a7.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">177巴弗洛</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="174" jl_num="3" name="火" py="b" rhtype="暗黑精灵 ">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/78c21de73777695919d94f859f98987a.jpg" />
			            		       			<p>174贝鲁基德</p></li>
	       			
						<div id="open_174" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/d88d86de527e6779b5817716281aa201.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">172黑火贝</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/f2e5d51223a9937cb97d788bc7ad3697.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">173贝米拉</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/78c21de73777695919d94f859f98987a.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">174贝鲁基德</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="171" jl_num="2" name="水" py="m" rhtype="暗黑精灵 ">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/ec3551c35f5944218e39d05c4c627109.jpg" />
			            		       			<p>171魔牙鱼</p></li>
	       			
						<div id="open_171" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/79040bddb15a564620f990a04c7b3020.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">170利齿鱼</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/ec3551c35f5944218e39d05c4c627109.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">171魔牙鱼</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="169" jl_num="3" name="草" py="k" rhtype="初始精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/07e458558243694dee6069032366a944.jpg" />
			            		       			<p>169卡特斯</p></li>
	       			
						<div id="open_169" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/8fad5b225302b7b76bf8ce45c008f4a6.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">167黑刺球</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/6ade00210d061bb01d76e5e0e12443d9.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">168卡布尔</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/07e458558243694dee6069032366a944.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">169卡特斯</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="166" jl_num="3" name="飞行" py="s" rhtype="稀有精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/e8e74006dc2b3de9d126ca314c24c7e8.jpg" />
			            		       			<p>166闪光波克尔</p></li>
	       			
						<div id="open_166" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/51b4d9311c385de8d3668a29a8c0ba6c.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">164闪光皮皮</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/41369e1c3eff26ffceaf969aa948526a.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">165闪光比波</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/e8e74006dc2b3de9d126ca314c24c7e8.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">166闪光波克尔</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="163" jl_num="3" name="冰雪" py="d" rhtype="任务精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/13ae0ac5ed23b4aa43578c1274b8ef16.jpg" />
			            		       			<p>163达鲁切尔</p></li>
	       			
						<div id="open_163" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/36da44afaa41b01eb2707e0e8808c89d.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">161米鲁</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/3d9bef396b1386bfeb1dd022abb40e93.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">162谢鲁米</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/13ae0ac5ed23b4aa43578c1274b8ef16.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">163达鲁切尔</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="160" jl_num="3" name="冰雪" py="s" rhtype="稀有精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/6049ca8af49cb77dbe6d1b4a84fac7ce.jpg" />
			            		       			<p>160斯托利亚</p></li>
	       			
						<div id="open_160" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/bea2469b3782bff7e7601ffe2c9c64e8.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">158托尼</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/88e7ca9c076b7ebfca1ec99506d835b9.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">159托尼亚</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/6049ca8af49cb77dbe6d1b4a84fac7ce.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">160斯托利亚</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="157" jl_num="2" name="冰雪" py="b" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/92b532c9e4ab23bee6f6e98d2117eff7.jpg" />
			            		       			<p>157巴尔克</p></li>
	       			
						<div id="open_157" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/fce897e5d02225deb8dcb9e6cc096918.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">156迪度</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/92b532c9e4ab23bee6f6e98d2117eff7.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">157巴尔克</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="155" jl_num="3" name="飞行" py="l" rhtype="稀有精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/bb6360aad43b918eb0a502dcb4d28675.jpg" />
			            		       			<p>155灵翼蜂</p></li>
	       			
						<div id="open_155" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/31a90fa55abe9e7c2690ed10156c3ed3.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">153小莹蜂</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/89c8f19d2ff6347fcecab8a74aa14cf5.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">154迅黄蜂</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/bb6360aad43b918eb0a502dcb4d28675.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">155灵翼蜂</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="152" jl_num="3" name="普通" py="c" rhtype="任务精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/0298b51e8f9dc5996c36fd0da7423c37.jpg" />
			            		       			<p>152查理几斯</p></li>
	       			
						<div id="open_152" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/c4341eaa5d81b7ed9e1a8c16c79a38e5.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">150查克</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/8cda14f1307d9b5e8b4982f2285541f3.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">151查莫斯</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/0298b51e8f9dc5996c36fd0da7423c37.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">152查理几斯</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="149" jl_num="2" name="战斗" py="b" rhtype="初始精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/d408b4465af91c24bbbb138d8826d1cf.jpg" />
			            		       			<p>149贝特卡恩</p></li>
	       			
						<div id="open_149" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/b8534b263423bb9793900cdf0c4bbe83.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">148尼克</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/d408b4465af91c24bbbb138d8826d1cf.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">149贝特卡恩</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="147" jl_num="3" name="电" py="j" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/070f0e181eaf0719500931c11ad3ad26.jpg" />
			            		       			<p>147吉尼亚斯</p></li>
	       			
						<div id="open_147" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/0a79883689eac348fd979c1941a0d0a7.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">145吉斯</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/2d8706a36fcc9eadfebeb32cd0f1bf06.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">146亚米拉</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/070f0e181eaf0719500931c11ad3ad26.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">147吉尼亚斯</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="144" jl_num="2" name="机械" py="h" rhtype="任务精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/19b54121c51acf67bbcb743c37ab7b30.jpg" />
			            		       			<p>144赫卡特</p></li>
	       			
						<div id="open_144" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/ed316cc0812961a8ab5c87f4753e39fc.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">143卡塔</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/19b54121c51acf67bbcb743c37ab7b30.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">144赫卡特</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="142" jl_num="2" name="战斗" py="k" rhtype="兑换精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/beb9242ec31e46e1ca0c3f97b2fc2a62.jpg" />
			            		       			<p>142肯扎特</p></li>
	       			
						<div id="open_142" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/bc524e4c33f49dfc745141203a0f3e7d.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">141肯</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/beb9242ec31e46e1ca0c3f97b2fc2a62.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">142肯扎特</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="140" jl_num="2" name="超能" py="a" rhtype="初始精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/674201ae4ded83b23e3f7244851b6f0a.jpg" />
			            		       			<p>140艾迪希洛</p></li>
	       			
						<div id="open_140" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/abc30a30c53647eaf64694b994fac010.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">139迪卢卡</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/674201ae4ded83b23e3f7244851b6f0a.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">140艾迪希洛</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       					       			<li id="1393" jl_num="2" name="机械" py="L " rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/d1e5a1a300c56beffba723a8b033e012.png" />
			            		       			<p>1393莱伯拉</p></li>
	       			
						<div id="open_1393" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/d0340494839dd96733d101ecd67a6ae1.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1392莱奇斯</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/d1e5a1a300c56beffba723a8b033e012.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1393莱伯拉</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1391" jl_num="2" name="超能" py="S " rhtype="BOSS精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/424551ff0b5b9c10b7318ff7d11a2984.png" />
			            		       			<p>1391斯图尔特</p></li>
	       			
						<div id="open_1391" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/002b1705047b2183aef867b5db7edfa4.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1390斯图拉</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/424551ff0b5b9c10b7318ff7d11a2984.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1391斯图尔特</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="1389" jl_num="2" name="水" py="L " rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/0d0f36483bbca897cf3c1fb08575ed2d.png" />
			            		       			<p>1389罗斯克</p></li>
	       			
						<div id="open_1389" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/a4005f293110fc6949bf4cf08edb3a56.png"/>
                            		</span>
                        			<a href="javascript:void(0);">罗迪1388</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/0d0f36483bbca897cf3c1fb08575ed2d.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1389罗斯克</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       					       			<li id="1385" jl_num="2" name="暗影" py="g" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/1426a73b91750bbc68551e91fa0014bd.png" />
			            		       			<p>1385古斯特</p></li>
	       			
						<div id="open_1385" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/ad59253660bc4cf1739524f1474a4efd.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1384飘飘</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/1426a73b91750bbc68551e91fa0014bd.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1385古斯特</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1383" jl_num="2" name="超能 冰" py="f" rhtype="BOSS精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/147e232aafbc61ac537d9fbaa5e41791.png" />
			            		       			<p>1383弗洛斯</p></li>
	       			
						<div id="open_1383" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/58fabb24733a882b0ec4de38d1e83355.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1382弗尔</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/147e232aafbc61ac537d9fbaa5e41791.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1383弗洛斯</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1381" jl_num="2" name="电" py="t" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/cd85e1b51878a8519c1a5c6d8c5802ca.png" />
			            		       			<p>1381托德</p></li>
	       			
						<div id="open_1381" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/dbfc59fab298eb6d895c7f7bb108970f.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1380德莫</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/cd85e1b51878a8519c1a5c6d8c5802ca.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1381托德</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="138" jl_num="3" name="暗影" py="l" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/5760be92a95dbb497ea10dc61b32831f.jpg" />
			            		       			<p>138洛比特</p></li>
	       			
						<div id="open_138" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/682d15fc55fa37e6203292cc113d3f47.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">136卢比</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/66e8df57b0fc541b6073f86b88e2a82d.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">137伊克多</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/5760be92a95dbb497ea10dc61b32831f.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">138洛比特</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       					       			<li id="1379" jl_num="2" name="普通" py="A " rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/6994bc23483b3c9574ab54b7c0025f75.png" />
			            		       			<p>1379阿曼尼</p></li>
	       			
						<div id="open_1379" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/ef3c068342cdcf1aa7409f389595b0e9.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1378阿曼</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/6994bc23483b3c9574ab54b7c0025f75.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1379阿曼尼</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1377" jl_num="2" name="火" py="N " rhtype="BOSS精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/68293db02a4b8460c2b3c5c677ea4e79.png" />
			            		       			<p>1377纳特</p></li>
	       			
						<div id="open_1377" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/8547663a9d2c29afcfb8a33c43d4d4db.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1376莱纳</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/68293db02a4b8460c2b3c5c677ea4e79.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1377纳特</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1375" jl_num="2" name="草" py="Z" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/1483ed7993da5a68e78d680688545775.png" />
			            		       			<p>1375佐梅斯</p></li>
	       			
						<div id="open_1375" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/dc3836ec083c500925a06b72b9c42f1d.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1374佐佐</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/1483ed7993da5a68e78d680688545775.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1375佐梅斯</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1373" jl_num="2" name="光" py="L " rhtype="收费精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/dc3836ec083c500925a06b72b9c42f1d.png" />
			            		       			<p>1373露娜</p></li>
	       			
						<div id="open_1373" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/d77ae6c63213e14d089cb7ce1da36471.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1372小娥</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/dc3836ec083c500925a06b72b9c42f1d.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1373露娜</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1371" jl_num="2" name="飞行" py="S " rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/769d46c986717a3f561066311d817480.png" />
			            		       			<p>1371珊珊</p></li>
	       			
						<div id="open_1371" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/80381aa003afdc70c0f5ab09f68e8928.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1370小珊</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/769d46c986717a3f561066311d817480.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1371珊珊</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="1369" jl_num="3" name="地面 龙" py="g" rhtype="收费精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/e6d3304f943ea1a66df0fa3d08a9485b.png" />
			            		       			<p>1369古朗德</p></li>
	       			
						<div id="open_1369" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/7b872a340c934f7273bfd62ce9fccc2f.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1367古特</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/0ddc06e690e8dde90152ecfc4c829e32.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1368朗尔德</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/e6d3304f943ea1a66df0fa3d08a9485b.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1369古朗德</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="1366" jl_num="2" name="暗影" py="a" rhtype="活动精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/b6732225fb4255d493be455d7ebb4562.png" />
			            		       			<p>1366阿德洛卡</p></li>
	       			
						<div id="open_1366" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/e8ef4a6a017c78822462bbcde7fe4ffe.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1365阿杰洛</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/b6732225fb4255d493be455d7ebb4562.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1366阿德洛卡</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1364" jl_num="3" name="飞行 超能" py="a" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/ab9e4e1942e0a8171080ed7c9c76b45c.png" />
			            		       			<p>1364艾里克</p></li>
	       			
						<div id="open_1364" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/169c412e62f5b8156bdf031eade550ac.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1362艾里</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/570dd745d7150ba5195b0bd97c6a896a.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1363艾莫斯</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/ab9e4e1942e0a8171080ed7c9c76b45c.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1364艾里克</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="1360" jl_num="2" name="地面" py="m" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/e0103a65b429f02bea8b62edfb57dab9.png" />
			            		       			<p>1360米尤拉</p></li>
	       			
						<div id="open_1360" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/5c45201abc021971d3cc852dd77c828a.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1359尤拉 </a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/e0103a65b429f02bea8b62edfb57dab9.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1360米尤拉</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="1358" jl_num="2" name="暗影" py="a" rhtype="活动精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/57603638f96a1d2738c76037550e2dee.png" />
			            		       			<p>1358阿德莱特</p></li>
	       			
						<div id="open_1358" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/64c17c1225b86e285d0f650cafc3203b.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1357阿莱杰</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/57603638f96a1d2738c76037550e2dee.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1358阿德莱特</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1356" jl_num="2" name="电" py="L " rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/eb8c7c06974f8e84bf0165c4525cb508.png" />
			            		       			<p>1356利昂斯</p></li>
	       			
						<div id="open_1356" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/a9dc19013ce1620720b58faa7010bb77.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1355阿昂 </a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/eb8c7c06974f8e84bf0165c4525cb508.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1356利昂斯</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1354" jl_num="2" name="冰" py="S " rhtype="BOSS精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/0c078a4c0038838f5d1ee2544d43fa55.png" />
			            		       			<p>1354斯克鲁</p></li>
	       			
						<div id="open_1354" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/c9e498e20ec3f06d1b89ebb9af8bf529.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1353哈鲁</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/0c078a4c0038838f5d1ee2544d43fa55.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1354斯克鲁</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1352" jl_num="2" name="战斗" py="K " rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/b6a99f2e860f3d32321e93a11c45ed25.png" />
			            		       			<p>1352库克</p></li>
	       			
						<div id="open_1352" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/d72a1dae93af22d8572adc2f9cc3cc1f.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1351库尼</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/b6a99f2e860f3d32321e93a11c45ed25.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1352库克</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1350" jl_num="2" name="地面" py="K " rhtype="活动精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/2cba0efcf56357454be27c7e1083bd63.png" />
			            		       			<p>1350卡梅隆</p></li>
	       			
						<div id="open_1350" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/4130fced737050a7852dc78719e4caf8.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1349卡隆</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/2cba0efcf56357454be27c7e1083bd63.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1350卡梅隆</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       					       			<li id="135" jl_num="3" name="火" py="b" rhtype="稀有精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/e33ca70545ee18a2e007c9368a9e1006.jpg" />
			            		       			<p>135巴法尔</p></li>
	       			
						<div id="open_135" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/8cd4116a945f19c653a5da6c6efb53cd.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">133巴多</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/ccf39f91cb8788f80a6c001d7bcf3180.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">134巴奈特</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/e33ca70545ee18a2e007c9368a9e1006.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">135巴法尔</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       					       			<li id="1348" jl_num="2" name="普通" py="H " rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/ec64e8091e9a3c990e8981a70d390b10.png" />
			            		       			<p>1348哈根</p></li>
	       			
						<div id="open_1348" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/22d61ca5f0fb0225f20f6a893f49e17c.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1347哈吉</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/ec64e8091e9a3c990e8981a70d390b10.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1348哈根</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1345" jl_num="2" name="草" py="G " rhtype="收费精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/afe2cbd1896e1e7f448767eccbd1ce27.png" />
			            		       			<p>1345咕拉拉</p></li>
	       			
						<div id="open_1345" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/59dec2708c75747471dac148ddd5fc5b.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1344小咕</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/afe2cbd1896e1e7f448767eccbd1ce27.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1345咕拉拉</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1343" jl_num="2" name="冰" py="K " rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/6351ec77d007c3aaea89f6ece5e57d96.png" />
			            		       			<p>1343凯斯尔</p></li>
	       			
						<div id="open_1343" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/eca98187c4b2fb2667e025e9483196b0.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1342凯拉利</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/6351ec77d007c3aaea89f6ece5e57d96.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1343凯斯尔</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1341" jl_num="2" name="地面 暗影" py="L " rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/f66e9f11371b723c7b6b8227d4842713.png" />
			            		       			<p>1341洛拉菲德</p></li>
	       			
						<div id="open_1341" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/4d89e115dd0c29c56e4f943433f3f22f.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1340洛菲斯</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/f66e9f11371b723c7b6b8227d4842713.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1341洛拉菲德</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="1339" jl_num="2" name="水" py="A" rhtype="活动精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/de6911354c59a251ae3edc8096e43ce5.png" />
			            		       			<p>1339阿基米德</p></li>
	       			
						<div id="open_1339" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/180fa40b29ec4e071180aa146948aca7.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1338基拉</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/de6911354c59a251ae3edc8096e43ce5.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1339阿基米德</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="1334" jl_num="2" name="神秘" py="S" rhtype="活动精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/8808234b2e85f3656d10cb2be42533bd.png" />
			            		       			<p>1334闪光迈克瑞</p></li>
	       			
						<div id="open_1334" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/a377bea51336fa4d30d3dc749b067623.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1333闪光迈迈</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/8808234b2e85f3656d10cb2be42533bd.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1334闪光迈克瑞</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1332" jl_num="2" name="超能" py="J" rhtype="BOSS精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/7741ec2d4c1858da0280b5dd7e7e7c97.png" />
			            		       			<p>1332杰米尼</p></li>
	       			
						<div id="open_1332" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/05922d26f29b717d4ac8bf8699605813.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1331杰斯</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/7741ec2d4c1858da0280b5dd7e7e7c97.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1332杰米尼</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1330" jl_num="2" name="机械" py="L" rhtype="活动精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/0de6e8b1b28a7768b60caf1f9dfa533c.png" />
			            		       			<p>1330罗伯斯</p></li>
	       			
						<div id="open_1330" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/4eeb8cb3d44cac5a75f598d8ed5aa2ec.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1329罗伊</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/0de6e8b1b28a7768b60caf1f9dfa533c.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1330罗伯斯</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="1328" jl_num="3" name="龙" py="s" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/e2c5b448f57baf6f33141e087730d28c.png" />
			            		       			<p>1328索兰特</p></li>
	       			
						<div id="open_1328" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/4ff4e755736741c932655967f085f2bf.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1326兰迪</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/12ab4cf849a141208423faabc73db924.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1327兰特</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/e2c5b448f57baf6f33141e087730d28c.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1328索兰特</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="1325" jl_num="2" name="地面" py="M" rhtype="收费精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/fb5583cd458f9cb7c6c84c107f3bf065.png" />
			            		       			<p>1325玛可</p></li>
	       			
						<div id="open_1325" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/e4344d7f0b42f30d0b89653925adf932.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1324玛尔</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/fb5583cd458f9cb7c6c84c107f3bf065.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1325玛可</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1323" jl_num="2" name="火" py="T" rhtype="BOSS精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/5e5bd94334778154e86b7c7d2b5524aa.png" />
			            		       			<p>1323托罗斯</p></li>
	       			
						<div id="open_1323" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/5ab6c59150657b9352dc008b795be9ab.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1322阿牛</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/5e5bd94334778154e86b7c7d2b5524aa.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1323托罗斯</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1321" jl_num="2" name="超能" py="M" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/0c9a269df717610be68a36046298fcf5.png" />
			            		       			<p>1321米兰</p></li>
	       			
						<div id="open_1321" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/d6077d75769233bc60a57f753f052fdb.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1320米加</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/0c9a269df717610be68a36046298fcf5.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1321米兰</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="132" jl_num="2" name="暗影" py="y" rhtype="BOSS精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/141530419f1a1e2268333f8701ebe3bb.jpg" />
			            		       			<p>132尤纳斯</p></li>
	       			
						<div id="open_132" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/8de490573e557131148410f1fa5fe7d9.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">131影球</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/141530419f1a1e2268333f8701ebe3bb.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">132尤纳斯</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       					       			<li id="1319" jl_num="2" name="机械" py="L " rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/98b715b116ab8688c5ea1f0e9620e977.png" />
			            		       			<p>1319罗伯特</p></li>
	       			
						<div id="open_1319" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/1cd83bf23fc9fc84dd7bb255d60e7785.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1318罗比</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/98b715b116ab8688c5ea1f0e9620e977.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1319罗伯特</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1314" jl_num="2" name="战斗" py="A " rhtype="BOSS精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/8d2edeb8f5054348f59f67a3c3ab4a5e.png" />
			            		       			<p>1314阿里斯</p></li>
	       			
						<div id="open_1314" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/3ff93f205a99ea1f52351ded546eaa4f.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1313阿羊</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/8d2edeb8f5054348f59f67a3c3ab4a5e.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1314阿里斯</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1312" jl_num="2" name="地面" py="G" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/e11992c50ac26575d7fbebe41c647325.png" />
			            		       			<p>1312格雷迪</p></li>
	       			
						<div id="open_1312" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/22490b0045cfcc9213c17b0d81ebbfc8.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1311格拉里</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/e11992c50ac26575d7fbebe41c647325.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1312格雷迪</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1310" jl_num="2" name="飞行" py="Y" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/d02a120d2a371cd3df2206fbbd7e56fe.png" />
			            		       			<p>1310伊力沙</p></li>
	       			
						<div id="open_1310" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/e1fc7e4d280d6600f5669ac310197e62.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1309伊沙</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/d02a120d2a371cd3df2206fbbd7e56fe.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1310伊力沙</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="1308" jl_num="2" name="地面 战斗" py="D" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/d705d02bc12a904fdc7f97e166331a61.png" />
			            		       			<p>1308袋拉拉</p></li>
	       			
						<div id="open_1308" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/e32c4212d1555e83495fdceb2feed054.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1307袋袋</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/d705d02bc12a904fdc7f97e166331a61.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1308袋拉拉</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1306" jl_num="2" name="飞行 超能" py="L" rhtype="活动精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/952b53e28b13e225db3878d5568f3fda.png" />
			            		       			<p>1306利亚斯</p></li>
	       			
						<div id="open_1306" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/44d71a6bb67c0a7a6147a42554190723.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1305利文</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/952b53e28b13e225db3878d5568f3fda.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1306利亚斯</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1304" jl_num="2" name="水 暗影" py="P" rhtype="BOSS精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/6e2c6cac90ab9b12f1d265d7aef475f2.png" />
			            		       			<p>1304帕里斯</p></li>
	       			
						<div id="open_1304" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/6cf462b18a8ac356476d2e1e04db53ec.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1303帕特</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/6e2c6cac90ab9b12f1d265d7aef475f2.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1304帕里斯</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1302" jl_num="2" name="普通" py="F" rhtype="活动精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/21f1866c04a1e79cb37afce397938993.png" />
			            		       			<p>1302菲普斯</p></li>
	       			
						<div id="open_1302" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/d8ae546f099b638b971f8008488a522f.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1301菲洛</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/21f1866c04a1e79cb37afce397938993.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1302菲普斯</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1300" jl_num="2" name="草" py="G" rhtype="任务精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/75fd0903859f3a6bf7c08f4519463f80.png" />
			            		       			<p>1300格莫</p></li>
	       			
						<div id="open_1300" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/8f81dd22215c57c59fdbe001228f52b8.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1299小格</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/75fd0903859f3a6bf7c08f4519463f80.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1300格莫</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       					       			<li id="130" jl_num="3" name="暗影" py="j" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/f861bac70af3efc723924d7d5966e5d3.jpg" />
			            		       			<p>130吉古拉</p></li>
	       			
						<div id="open_130" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/2791b9333008fbf31c84ea3daae96735.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">128波古</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/51a51c1b4e988e031018e3461c54bc4a.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">129吉拉</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/f861bac70af3efc723924d7d5966e5d3.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">130吉古拉</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       					       			<li id="1296" jl_num="2" name="电" py="T" rhtype="收费精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/6befd2db2038020375c3397d4b387935.png" />
			            		       			<p>1296特里奥</p></li>
	       			
						<div id="open_1296" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/c31c2d7f6d48e74220e80162417ce461.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1295特里</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/6befd2db2038020375c3397d4b387935.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1296特里奥</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1294" jl_num="2" name="火" py="S" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/3f597485e72b3019c1a77fff21771df2.png" />
			            		       			<p>1294斯嘟尔</p></li>
	       			
						<div id="open_1294" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/49d9fc7851be95f5c7445e3df10047a8.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1293可嘟</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/3f597485e72b3019c1a77fff21771df2.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1294斯嘟尔</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1292" jl_num="2" name="冰" py="H" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/b72cf579dc3515c9c5abad15e0bb1967.png" />
			            		       			<p>1292哈图尔</p></li>
	       			
						<div id="open_1292" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/9b23ac877a0232c5d814a329b3b251dc.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1291图图</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/b72cf579dc3515c9c5abad15e0bb1967.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1292哈图尔</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1290" jl_num="3" name="光" py="B" rhtype="收费精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/df0696e2503823565b7d148139efce5e.png" />
			            		       			<p>1290波拉克斯</p></li>
	       			
						<div id="open_1290" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/df0696e2503823565b7d148139efce5e.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1290波拉克斯</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="1288" jl_num="2" name="暗影" py="K " rhtype="收费精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/44bc691882105841348f3a7842958a8b.png" />
			            		       			<p>1288卡斯托尔</p></li>
	       			
						<div id="open_1288" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/b671b4990f91f4cc4e8baffde1d5eaf9.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1287卡萨</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/44bc691882105841348f3a7842958a8b.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1288卡斯托尔</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1286" jl_num="2" name="雷电 火" py="K " rhtype="BOSS精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/b4e53d7960bf6d1622498aecda3d100b.png" />
			            		       			<p>1286卡罗特利</p></li>
	       			
						<div id="open_1286" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/2355e58d717ed0f0e5cc7539960e7640.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1285卡莱拉</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/b4e53d7960bf6d1622498aecda3d100b.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1286卡罗特利</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1284" jl_num="2" name="水" py="K" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/f529bb0ae6bd40ba0fe4abccf901dac0.png" />
			            		       			<p>1284库兮兮</p></li>
	       			
						<div id="open_1284" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/0886c14c15533b681892cad673e18917.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1283小库</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/f529bb0ae6bd40ba0fe4abccf901dac0.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1284库兮兮</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1282" jl_num="3" name="超能" py="M" rhtype="活动精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/032456b3bf4ee4f826afe83d0e97b82d.png" />
			            		       			<p>1282棉花泡泡糖</p></li>
	       			
						<div id="open_1282" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/676ec4a2fac6e9489d8920cb455dfd1c.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1280棉棉</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/e85054a4060e8162b5900e7d07d52769.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1281棉花泡</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/032456b3bf4ee4f826afe83d0e97b82d.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1282棉花泡泡糖</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="1276" jl_num="2" name="冰" py="K" rhtype="活动精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/7a18bc097df22608a9faaf07c7cf5521.png" />
			            		       			<p>1276卡奇斯</p></li>
	       			
						<div id="open_1276" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/4294288d59e3255f954e76a2859b5501.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1275阿亭</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/7a18bc097df22608a9faaf07c7cf5521.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1276卡奇斯</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1274" jl_num="2" name="机械" py="" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/c005277b2b2e56d14d5acf549e14c9bf.png" />
			            		       			<p>1274卡雷尼</p></li>
	       			
						<div id="open_1274" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/cde45cf050f1d12e94e4a8d8165df5b8.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1273卡斯奇</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/c005277b2b2e56d14d5acf549e14c9bf.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1274卡雷尼</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1272" jl_num="2" name="草" py="Y" rhtype="活动精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/7235c9dd63756f864054a85b14644feb.png" />
			            		       			<p>1272荧光草</p></li>
	       			
						<div id="open_1272" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/2749fe9ed98d7be6a6dd6ec2913cad1a.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1271球球</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/7235c9dd63756f864054a85b14644feb.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1272荧光草</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1270" jl_num="2" name="飞行" py="H" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/aa168ca8b2042043bf2a60aee448f097.png" />
			            		       			<p>1270霍吉斯</p></li>
	       			
						<div id="open_1270" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/3a10ce1dd27b4523dde2c881a1ac4644.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1269霍克</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/aa168ca8b2042043bf2a60aee448f097.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1270霍吉斯</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       					       			<li id="127" jl_num="2" name="战斗" py="k" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/185ea04d11bc0b0dd6bab090e81a4a6c.jpg" />
			            		       			<p>127库博</p></li>
	       			
						<div id="open_127" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/0614e355318ccd7b077dd31df66688ed.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">126拉博</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/185ea04d11bc0b0dd6bab090e81a4a6c.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">127库博</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1268" jl_num="2" name="地面" py="R" rhtype="融合精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/2f47c790e436a4def4e9fb5d09bf399a.png" />
			            		       			<p>1268瑞德洛</p></li>
	       			
						<div id="open_1268" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/12fa1693aa5974b530889599ead63c0a.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1267瑞姆</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/2f47c790e436a4def4e9fb5d09bf399a.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1268瑞德洛</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1265" jl_num="2" name="光" py="B" rhtype="BOSS精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/35210d16a82de056af03824ee66b027e.png" />
			            		       			<p>1265巴索尔</p></li>
	       			
						<div id="open_1265" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/f399b9e9e997ccb3d4164d2778a49cd4.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1264巴哈特</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/35210d16a82de056af03824ee66b027e.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1265巴索尔</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1263" jl_num="3" name="飞行 龙" py="O" rhtype="收费精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/06e648476a0703d2bc1277b54b752150.png" />
			            		       			<p>1263欧西斯</p></li>
	       			
						<div id="open_1263" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/31eefe78d81d2b4c88d6a075e4c1a8c9.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1261欧拉</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/5243a3c4468517a4ecc7b0dde28cfcc9.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1262西杰斯</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/06e648476a0703d2bc1277b54b752150.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1263欧西斯</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="1260" jl_num="2" name="火 超能" py="N " rhtype="收费精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/862e23ae603bdf199a02d5e5752a2d49.png" />
			            		       			<p>1260纳扎</p></li>
	       			
						<div id="open_1260" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/e99bc63bb33699d014ac54b3eca17ec1.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1259纳尼</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/862e23ae603bdf199a02d5e5752a2d49.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1260纳扎</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="1258" jl_num="2" name="飞行" py="B" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/87635eb1b22693f464ed8fccc2cf1328.png" />
			            		       			<p>1258拜特</p></li>
	       			
						<div id="open_1258" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/84a797e21316aba488fe4c5910502ef1.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1257小拜</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/87635eb1b22693f464ed8fccc2cf1328.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1258拜特</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1256" jl_num="2" name="地面" py="Y" rhtype="收费精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/0a263f53c276746f2607e5402e0868b2.png" />
			            		       			<p>1256幽灵猛虎王</p></li>
	       			
						<div id="open_1256" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/52c8ddce9dda0adf334dd9c6b8990a97.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1255幽灵迅牙虎</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/0a263f53c276746f2607e5402e0868b2.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1256幽灵猛虎王</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1254" jl_num="2" name="超能" py="J" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/9a2f14c38d9e6a33f044048703bff14d.png" />
			            		       			<p>1254吉拉特</p></li>
	       			
						<div id="open_1254" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/1be02ff90c9e37f8d3a65e1f625cda59.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1253吉瓦</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/9a2f14c38d9e6a33f044048703bff14d.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1254吉拉特</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1252" jl_num="2" name="冰" py="A" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/e8c3a05ffdaf57a3ffd26af8fbb92e92.png" />
			            		       			<p>1252艾拉尔</p></li>
	       			
						<div id="open_1252" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/e0ba012ac64d6132cca9e7577d0c4dea.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1251艾诺</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/e8c3a05ffdaf57a3ffd26af8fbb92e92.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1252艾拉尔</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1247" jl_num="2" name="地面" py="S" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/8516192607084cd604b0e10733273b26.png" />
			            		       			<p>1247萨姆</p></li>
	       			
						<div id="open_1247" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/99201a2509dd42ae2549f0ad9cf97554.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1246萨吉</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/8516192607084cd604b0e10733273b26.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1247萨姆</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1245" jl_num="3" name="超能" py="J" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/e56bbb06984cf9ed7700e5a70aef411f.png" />
			            		       			<p>1245杰莫尔</p></li>
	       			
						<div id="open_1245" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/839b63cbda7f1a304cef37425b4e94a4.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1243杰特</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/e77c5babe272517831a7ed9b7b828fac.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1244杰克斯</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/e56bbb06984cf9ed7700e5a70aef411f.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1245杰莫尔</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="1242" jl_num="2" name="普通" py="K" rhtype="活动精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/ee49db83b826d95936a338ed18afc8fd.png" />
			            		       			<p>1242凯米拉</p></li>
	       			
						<div id="open_1242" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/c2a6caa19b842aaa60f91cc6408c6f95.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1241凯利</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/ee49db83b826d95936a338ed18afc8fd.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1242凯米拉</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1240" jl_num="2" name="超能" py="K" rhtype="BOSS精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/f4f47a74aa077c1539928fa6cf787bc2.png" />
			            		       			<p>1240克伦曼尔</p></li>
	       			
						<div id="open_1240" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/677dffa1c3354d41609de81f80bc018d.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1239克拉曼</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/f4f47a74aa077c1539928fa6cf787bc2.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1240克伦曼尔</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1238" jl_num="2" name="火" py="Z" rhtype="收费精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/07fc46ea9fd0378ef1bf0c2b6a87b68b.png" />
			            		       			<p>1238炽翼火龙</p></li>
	       			
						<div id="open_1238" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/0d7df64ab2178c10e2a42712e05bf11e.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1237洛拉托兹</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/07fc46ea9fd0378ef1bf0c2b6a87b68b.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1238炽翼火龙</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1236" jl_num="2" name="地面" py="L" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/b68db96527d4d51c4fb5d28a0eced2a3.png" />
			            		       			<p>1236朗耐克</p></li>
	       			
						<div id="open_1236" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/539914f5e7b9788359174230725522c9.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1235小朗</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/b68db96527d4d51c4fb5d28a0eced2a3.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1236朗耐克</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1234" jl_num="2" name="草" py="A" rhtype="活动精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/42898fcebfdfba30a116766a3d681ff6.png" />
			            		       			<p>1234阿粽</p></li>
	       			
						<div id="open_1234" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/f6c2a1aa82d1df39c188650ec3177c80.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1233粽仔</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/42898fcebfdfba30a116766a3d681ff6.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1234阿粽</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1230" jl_num="3" name="水" py="j" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/5f207d296bdf7e25d360825f09f810df.png" />
			            		       			<p>1230巨齿鲨</p></li>
	       			
						<div id="open_1230" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/5f207d296bdf7e25d360825f09f810df.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1230巨齿鲨</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       					       			<li id="1229" jl_num="2" name="地面" py="K" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/fcba80f1303228fcbeabcc3e20026cc7.png" />
			            		       			<p>1229科拉岩</p></li>
	       			
						<div id="open_1229" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/5de69dfd6c817ba578812c99bf245388.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1228科特</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/fcba80f1303228fcbeabcc3e20026cc7.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1229科拉岩</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1227" jl_num="2" name="战斗" py="J" rhtype="收费精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/7db33ebe15040e8ce2aef748296be21c.png" />
			            		       			<p>1227加瑞尔</p></li>
	       			
						<div id="open_1227" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/3f88d6a9714f93a998ecd30c552dcfd2.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1226瑞格</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/7db33ebe15040e8ce2aef748296be21c.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1227加瑞尔</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1225" jl_num="2" name="超能" py="z" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/d883079c2ea10f4d8b4b606fb3f42d44.png" />
			            		       			<p>1225佐科斯</p></li>
	       			
						<div id="open_1225" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/2a0b3bd6f2c72b8c48050991f6a5ee64.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1224阿佐</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/d883079c2ea10f4d8b4b606fb3f42d44.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1225佐科斯</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1223" jl_num="2" name="光" py="s" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/00b88981af2b4d880658ef4dff4265b7.png" />
			            		       			<p>1223斯洛塔</p></li>
	       			
						<div id="open_1223" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/70215bd2f98406b63281994348e66be7.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1222斯尔</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/00b88981af2b4d880658ef4dff4265b7.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1223斯洛塔</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1221" jl_num="2" name="机械" py="B" rhtype="BOSS精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/dbbb24f3a5d803b7c364c86135244b91.png" />
			            		       			<p>1221博卡特</p></li>
	       			
						<div id="open_1221" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/e25491d6fe8e4f410c51fe54b09892bb.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1220博杰斯</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/dbbb24f3a5d803b7c364c86135244b91.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1221博卡特</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1219" jl_num="2" name="水" py="y" rhtype="任务精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/81f9dace64c3a3fe4cc4b60136851250.png" />
			            		       			<p>1219亚奇</p></li>
	       			
						<div id="open_1219" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src=""/>
                            		</span>
                        			<a href="javascript:void(0);">1218奇纳</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/81f9dace64c3a3fe4cc4b60136851250.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1219亚奇</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1217" jl_num="1" name="暗影" py="m" rhtype="http://img1.2125.com/upload/seer/thumb/d174f507d7c11aa0ee6bd9f6c043d497.png">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/d174f507d7c11aa0ee6bd9f6c043d497.png" />
			            		       			<p>1217木木</p></li>
	       			
						<div id="open_1217" style="width: 113px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://game-res.61.com/picture/seer/spirit/b370c0e812717ce9265733e67a4f5592.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1217木木</a>
                    			</li>
                      		</ul>
                   		</div>  	                   		
	       				       			
	       			       					       			<li id="1216" jl_num="1" name="草" py="m" rhtype="http://img1.2125.com/upload/seer/thumb/8608b34bda12747407fe62338011cdd6.png">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/8608b34bda12747407fe62338011cdd6.png" />
			            		       			<p>1216魔域仙子</p></li>
	       			
						<div id="open_1216" style="width: 113px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://game-res.61.com/picture/seer/spirit/a447e5f113372c5e81b31c7705b7a598.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1216魔域仙子</a>
                    			</li>
                      		</ul>
                   		</div>  	                   		
	       				       			
	       			       					       			<li id="1215" jl_num="3" name="冰 暗影" py="y" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/299afe05060e5a7565bad1711bef2984.png" />
			            		       			<p>1215尤米娜</p></li>
	       			
						<div id="open_1215" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/c055625255636d8622a39872bfc31385.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1213尤米</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/41518d1d2985ba9bea436ccc181b9866.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1214尤米尔</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/299afe05060e5a7565bad1711bef2984.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1215尤米娜</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="1212" jl_num="2" name="雷电 火" py="b" rhtype="收费精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/7f0d93a693778a4b8762677d026fff3e.png" />
			            		       			<p>1212巴里修斯</p></li>
	       			
						<div id="open_1212" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/d777cff552d425e2a13f463d1e888aa8.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1211巴洛里</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/7f0d93a693778a4b8762677d026fff3e.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1212巴里修斯</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1210" jl_num="2" name="机械" py="d" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/3bf51ec156bfd0f190fbe11f8e68605d.png" />
			            		       			<p>1210道格</p></li>
	       			
						<div id="open_1210" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/b011f251ed8b4bae955d4250a7b127e2.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1209道尔</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/3bf51ec156bfd0f190fbe11f8e68605d.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1210道格</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       					       			<li id="121" jl_num="3" name="普通" py="y" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/cce20e493eedbe95d47d66a025b9aa54.jpg" />
			            		       			<p>121伊卡罗尼</p></li>
	       			
						<div id="open_121" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/e90a2fa45d36a5b0556c417cb6c74c5f.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">119莱尼</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/44817717b440f85eab121a22c5f3a711.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">120特鲁尼</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/cce20e493eedbe95d47d66a025b9aa54.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">121伊卡罗尼</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       					       			<li id="1208" jl_num="2" name="电" py="p" rhtype="BOSS精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/a68d38c87ee20e59480a0247719ef9dc.png" />
			            		       			<p>1208佩吉克</p></li>
	       			
						<div id="open_1208" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/09da792c8cd25c12429f2565538974f2.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1207佩塔</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/a68d38c87ee20e59480a0247719ef9dc.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1208佩吉克</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1206" jl_num="2" name="火" py="k" rhtype="任务精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/be9cbdb76ee4ff2ad8ea347c892d2313.png" />
			            		       			<p>1206凯琳</p></li>
	       			
						<div id="open_1206" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/6058ae87db1f09a2257513d7e7ed2620.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1205琳诺</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/be9cbdb76ee4ff2ad8ea347c892d2313.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1206凯琳</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1201" jl_num="1" name="火" py="A" rhtype="http://img1.2125.com/upload/seer/thumb/6d57deebb8abf7d6f937aaae22ceb369.png">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/6d57deebb8abf7d6f937aaae22ceb369.png" />
			            		       			<p>1201暗金炎魔</p></li>
	       			
						<div id="open_1201" style="width: 113px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://game-res.61.com/picture/seer/spirit/6a939da3771dee895c9fb67727354ad3.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1201暗金炎魔</a>
                    			</li>
                      		</ul>
                   		</div>  	                   		
	       				       			
	       			       					       			<li id="1200" jl_num="1" name="水" py="A" rhtype="http://img1.2125.com/upload/seer/thumb/c8ab4385b12bbb60f0d8b3496a395ec0.png">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/c8ab4385b12bbb60f0d8b3496a395ec0.png" />
			            		       			<p>1200暗金鱼龙王</p></li>
	       			
						<div id="open_1200" style="width: 113px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://game-res.61.com/picture/seer/spirit/92f91852e30f607f9e347fc450130d74.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1200暗金鱼龙王</a>
                    			</li>
                      		</ul>
                   		</div>  	                   		
	       				       			
	       			       				       			
	       			       					       			<li id="1199" jl_num="2" name="草" py="f" rhtype="活动精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/3d2032ccb4726a5692a0975b16db4b69.png" />
			            		       			<p>1199芙莉依儿</p></li>
	       			
						<div id="open_1199" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/c15fda931874756d1ea1c42a67b0431c.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1198莉洛</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/3d2032ccb4726a5692a0975b16db4b69.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1199芙莉依儿</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1197" jl_num="3" name="机械" py="k" rhtype="任务精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/793591911b060788b9bc1b6e9375744f.png" />
			            		       			<p>1197卡莫尔</p></li>
	       			
						<div id="open_1197" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/744f416fb0cf3a1fffaf1b6ad77e5b18.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1195卡桑</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/48ee90942691fb98bbf80901914d1d1c.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1196卡利莫</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/793591911b060788b9bc1b6e9375744f.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1197卡莫尔</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="1189" jl_num="2" name="暗影" py="l" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/1f7a5fdcacc346d4256c4b5ebaf96ba7.png" />
			            		       			<p>1189拉莫德斯</p></li>
	       			
						<div id="open_1189" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/12f7112912c706c50febf74f632e8667.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1188拉洛德</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/1f7a5fdcacc346d4256c4b5ebaf96ba7.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1189拉莫德斯</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1187" jl_num="2" name="普通" py="k" rhtype="暗黑精灵 ">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/6fcc8e8f1a122e6979e588fcd25148bf.png" />
			            		       			<p>1187狂狮迪卡</p></li>
	       			
						<div id="open_1187" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/50a1e6c7d3006ff1dded74ff2f9c92f5.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1186迪莫</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/6fcc8e8f1a122e6979e588fcd25148bf.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1187狂狮迪卡</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1185" jl_num="3" name="超能" py="a" rhtype="暗黑精灵 ">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/b3d23e229fdbbebb1955659dc0b935b7.png" />
			            		       			<p>1185艾斯德克</p></li>
	       			
						<div id="open_1185" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/9baf2069e91dca06513a939860770426.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1183尼拉</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/5a75b2dc6280a55a727c874e73db1005.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1184菲德尔</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/b3d23e229fdbbebb1955659dc0b935b7.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1185艾斯德克</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="1182" jl_num="3" name="水" py="l" rhtype="暗黑精灵 ">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/979dad5d12b94c41758d40b5e65ea771.png" />
			            		       			<p>1182鳞甲魔鱼</p></li>
	       			
						<div id="open_1182" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/4ec2dd12c80582357217703ee1fe6083.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1180黑鳍鱼</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/cec92571c92c439b95a63ab225966230.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1181魔甲鱼</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/979dad5d12b94c41758d40b5e65ea771.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1182鳞甲魔鱼</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="118" jl_num="3" name="冰雪" py="k" rhtype="野生精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/f2b2195abda7bbb2692a79a91590ebb6.jpg" />
			            		       			<p>118克洛亚</p></li>
	       			
						<div id="open_118" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/ab6a418ea8a858085ab67ab034d97a88.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">116卡卡</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/67d1ef020f238efdb7553153a190b0af.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">117利兹</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/f2b2195abda7bbb2692a79a91590ebb6.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">118克洛亚</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       					       			<li id="1179" jl_num="2" name="火 战斗" py="m" rhtype="收费精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/e1382016facf19a5d315a645c1e7076e.png" />
			            		       			<p>1179蒙奇克</p></li>
	       			
						<div id="open_1179" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/7b36c364c7fa4ce1498f5d55594411d2.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1178蒙奇</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/e1382016facf19a5d315a645c1e7076e.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1179蒙奇克</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1177" jl_num="2" name="冰" py="f" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/8afe29d7d4b0d0f5e51d6138b6dce342.png" />
			            		       			<p>1177芙兰希儿</p></li>
	       			
						<div id="open_1177" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/1f6233c3c0247eb1d21588a1c599b05f.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1176兰卡</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/8afe29d7d4b0d0f5e51d6138b6dce342.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1177芙兰希儿</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1175" jl_num="2" name="火" py="f" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/f82fdec4e24e8715ced619f8e935b9ec.png" />
			            		       			<p>1175芙拉萝儿</p></li>
	       			
						<div id="open_1175" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/007fc61a3c9d5ef2bcbd613791de9da0.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1174萝可</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/f82fdec4e24e8715ced619f8e935b9ec.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1175芙拉萝儿</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1173" jl_num="2" name="草" py="a" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/97075136a49bf75687c216f2f37a59cd.png" />
			            		       			<p>1173彩色菇</p></li>
	       			
						<div id="open_1173" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/ef36bb5cf32177e3620ea605292073f7.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1172阿彩</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/97075136a49bf75687c216f2f37a59cd.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1173彩色菇</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1171" jl_num="2" name="战斗" py="l" rhtype="BOSS精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/be079da05444b2f44b6b01207201d890.png" />
			            		       			<p>1171林克鼠</p></li>
	       			
						<div id="open_1171" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/4841739ae41c21b7d03231196730c1ae.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1170林诺</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/be079da05444b2f44b6b01207201d890.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1171林克鼠</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="1169" jl_num="2" name="龙" py="b" rhtype="活动精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/ea1e7b049ebd11107d694fde6e751227.png" />
			            		       			<p>1169布里克</p></li>
	       			
						<div id="open_1169" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/5eea33ecee285e386f18e9249d16a1ae.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1168小布</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/ea1e7b049ebd11107d694fde6e751227.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1169布里克</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1167" jl_num="3" name="飞行 超能" py="p" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/0760994d995f642c85dc0a001ee3aea5.png" />
			            		       			<p>1167帕罗狄亚</p></li>
	       			
						<div id="open_1167" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/18e0013323f7859b1dec5cf0c2457549.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1165帕罗</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/d6d4b56d0cbd488404e206aa617b7387.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1166帕莫亚</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/0760994d995f642c85dc0a001ee3aea5.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1167帕罗狄亚</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="1164" jl_num="2" name="龙" py="s" rhtype="BOSS精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/89a2edde315c1c1cc6ba43fb8a2d8665.png" />
			            		       			<p>1164斯利普</p></li>
	       			
						<div id="open_1164" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/6cd2113fb1a310df939f11ea277452b7.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1163斯洛</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/89a2edde315c1c1cc6ba43fb8a2d8665.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1164斯利普</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1162" jl_num="2" name="超能" py="a" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/e8d517178d19a9d94c07d6c79d97131c.png" />
			            		       			<p>1162艾隆尼斯</p></li>
	       			
						<div id="open_1162" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/9ccdca72b2e165b6c8d8cd4b696fb271.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1161艾隆</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/e8d517178d19a9d94c07d6c79d97131c.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1162艾隆尼斯</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1160" jl_num="2" name="地面" py="t" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/29de528e27fb7819b5f117ec347fae9b.png" />
			            		       			<p>1160特拉修斯</p></li>
	       			
						<div id="open_1160" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/415be7b255ff44eb6a3c4ff236a438ec.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1159特拉拉</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/29de528e27fb7819b5f117ec347fae9b.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1160特拉修斯</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="1158" jl_num="2" name="飞行" py="C" rhtype="野生精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/8923b03c18194566e54ef533a92b2b50.png" />
			            		       			<p>1158彩翼蝶</p></li>
	       			
						<div id="open_1158" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/e2afc2213c8c45fbebb2e2dc6264d128.gif"/>
                            		</span>
                        			<a href="javascript:void(0);">1157小尾蝶</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/8923b03c18194566e54ef533a92b2b50.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1158彩翼蝶</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1156" jl_num="2" name="战斗" py="W" rhtype="收费精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/b11dce1885d574e01a01024317791619.png" />
			            		       			<p>1156威里特</p></li>
	       			
						<div id="open_1156" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/4afba4793a1af4c0ab051fd6cfcfb076.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1155威克</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/b11dce1885d574e01a01024317791619.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1156威里特</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1154" jl_num="3" name="火 龙" py="B" rhtype="收费精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/34316580885cf1d56fd5d23ffa7653db.png" />
			            		       			<p>1154伯恩尼</p></li>
	       			
						<div id="open_1154" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/cb0cfb665a97e2f68e0222e403ac409d.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1152伯特</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/f35afd068d7e68a0c30b0bc956a7b747.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1153恩尔特</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/34316580885cf1d56fd5d23ffa7653db.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1154伯恩尼</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="1151" jl_num="2" name="火" py="N" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/8b8f8dddc57b165a191ab8b09cae1463.png" />
			            		       			<p>1151努加达斯</p></li>
	       			
						<div id="open_1151" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/db2f866b5c663a014f2c56357201aa62.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1150努努</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/8b8f8dddc57b165a191ab8b09cae1463.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1151努加达斯</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="115" jl_num="2" name="草" py="j" rhtype="BOSS精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/6e7dd036784d7c6d02e2dd403af8a643.jpg" />
			            		       			<p>115巨型树妖</p></li>
	       			
						<div id="open_115" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/f8f8e1ad58954e2a9a56e9b8ecf29925.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">114小树精</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/6e7dd036784d7c6d02e2dd403af8a643.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">115巨型树妖</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       					       			<li id="1149" jl_num="2" name="普通" py="W" rhtype="BOSS精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/51f183c27b4d0c2c34dfcd3215fd33b7.png" />
			            		       			<p>1149瓦尔普</p></li>
	       			
						<div id="open_1149" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/97f6a81d06c72a5278e8ec7c3130b964.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1148瓦卡</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/51f183c27b4d0c2c34dfcd3215fd33b7.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1149瓦尔普</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1147" jl_num="2" name="草 暗影" py="K" rhtype="难度4颗星精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/06b845fe09b744cc79d231b2a15b103b.png" />
			            		       			<p>1147卡伦尼</p></li>
	       			
						<div id="open_1147" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/cac04547f6b6faf1b705ebff345b7f66.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1146卡奇</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/06b845fe09b744cc79d231b2a15b103b.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1147卡伦尼</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1145" jl_num="2" name="草" py="M" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/af1e5019cf15b50c68cb9af6695b7b8c.png" />
			            		       			<p>1145麦古古</p></li>
	       			
						<div id="open_1145" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/e07d7157cda913c3a8399d17a7b40d02.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1144古古</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/af1e5019cf15b50c68cb9af6695b7b8c.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1145麦古古</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1143" jl_num="1" name="地面" py="L" rhtype="http://img1.2125.com/upload/seer/thumb/01c169436906c54be37495dfd572b9de.png">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/01c169436906c54be37495dfd572b9de.png" />
			            		       			<p>1143鲁迪诺斯</p></li>
	       			
						<div id="open_1143" style="width: 113px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://game-res.61.com/picture/seer/spirit/893424085d0d5f8a80e73f98713acb21.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1143鲁迪诺斯</a>
                    			</li>
                      		</ul>
                   		</div>  	                   		
	       				       			
	       			       					       			<li id="1142" jl_num="2" name="飞行" py="B" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/c28aa69993ec307634592fdfeb7463b2.png" />
			            		       			<p>1142巴特弗莱</p></li>
	       			
						<div id="open_1142" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/8c2ab5eee1e82d8549586670c01a8538.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1141巴特</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/c28aa69993ec307634592fdfeb7463b2.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1142巴特弗莱</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1140" jl_num="2" name="水" py="D" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/9771ff42b402237042d64b6ed1f35310.png" />
			            		       			<p>1140朵莉哈特</p></li>
	       			
						<div id="open_1140" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/a23597d3c3ddd50a3ab590a3195407b3.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1139朵莉</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/9771ff42b402237042d64b6ed1f35310.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1140朵莉哈特</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="1138" jl_num="2" name="龙" py="H" rhtype="BOSS精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/20ce1d2b9f8c5cbccefec91929afc90b.png" />
			            		       			<p>1138哈尼卡</p></li>
	       			
						<div id="open_1138" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/167f8fd2ae80cc21e91322c1d1968860.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1137哈尼</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/20ce1d2b9f8c5cbccefec91929afc90b.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1138哈尼卡</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1136" jl_num="2" name="地面" py="W" rhtype="活动精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/210c4ac282e57de2f82e858a3e0502da.png" />
			            		       			<p>1136沃斯特</p></li>
	       			
						<div id="open_1136" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/ea17a37aa97eb7656ebb28caa5908be2.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1135沃沃尔</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/210c4ac282e57de2f82e858a3e0502da.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1136沃斯特</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1134" jl_num="3" name="草" py="L" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/888a372ba401997dfdb06ce14deb9aaf.png" />
			            		       			<p>1134丽丽苗</p></li>
	       			
						<div id="open_1134" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/c4ab69166ed8c047278809b7e1854e93.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1132可丽</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/eb7eea6612a7ca6e5bdc4ef61ad61673.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1133丽多尔</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/888a372ba401997dfdb06ce14deb9aaf.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1134丽丽苗</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="1131" jl_num="2" name="水 超能" py="K" rhtype="难度4颗星精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/69c59f3debfae2741c1c546410e598f6.png" />
			            		       			<p>1131凯洛亚</p></li>
	       			
						<div id="open_1131" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/03a22f4a9feae8bce766ccb1e96b12c0.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1130凯尼</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/69c59f3debfae2741c1c546410e598f6.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1131凯洛亚</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="113" jl_num="3" name="机械" py="l" rhtype="BOSS精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/783253058fbd4393e72d1cefc0c444b4.jpg" />
			            		       			<p>113雷纳多</p></li>
	       			
						<div id="open_113" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/75ecc425528bfabb2c1e2f6ee1236cfc.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">111雷格</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/1ff7ea9150de42881d86334f3e22715c.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">112羸顿塔</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/783253058fbd4393e72d1cefc0c444b4.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">113雷纳多</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       					       			<li id="1129" jl_num="2" name="水" py="T" rhtype="活动精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/3f9c3f32e7da6f4194fd9db8a249fb1a.png" />
			            		       			<p>1129塔特尔</p></li>
	       			
						<div id="open_1129" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/cda0ce6add03010f7615e91814189454.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1128塔塔</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/3f9c3f32e7da6f4194fd9db8a249fb1a.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1129塔特尔</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1127" jl_num="2" name="光" py="K" rhtype="BOSS精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/6a09d2b215142c306d34364e2e830696.png" />
			            		       			<p>1127卡莱洛</p></li>
	       			
						<div id="open_1127" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/192cef6a52c86cea8231ff167d657962.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1126莱斯</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/6a09d2b215142c306d34364e2e830696.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1127卡莱洛</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1125" jl_num="3" name="普通" py="L" rhtype="活动精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/d7b058fb63dd9fed610ff6c0e08c7b84.png" />
			            		       			<p>1125隆利尼斯</p></li>
	       			
						<div id="open_1125" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/17dd77e206daa855fa1503e31734f9fe.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1123隆利</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/37cf74b6fa37898dc2694a5bcae7ada3.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1124隆利尔</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/d7b058fb63dd9fed610ff6c0e08c7b84.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1125隆利尼斯</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="1122" jl_num="1" name="飞行 光" py="S" rhtype="http://img1.2125.com/upload/seer/thumb/92df9f62213dab9f7bbbced1392264ab.png">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/92df9f62213dab9f7bbbced1392264ab.png" />
			            		       			<p>1122圣光天马</p></li>
	       			
						<div id="open_1122" style="width: 113px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://game-res.61.com/picture/seer/spirit/3897d0f5d77dad32943f010009accac5.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1122圣光天马</a>
                    			</li>
                      		</ul>
                   		</div>  	                   		
	       				       			
	       			       					       			<li id="1121" jl_num="1" name="地面 暗影" py="J" rhtype="http://img1.2125.com/upload/seer/thumb/188401093c035bba4bbf2aa7c08001a3.png">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/188401093c035bba4bbf2aa7c08001a3.png" />
			            		       			<p>1121巨石灵王</p></li>
	       			
						<div id="open_1121" style="width: 113px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://game-res.61.com/picture/seer/spirit/e859e529353e5a6572cb1289e8340643.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1121巨石灵王</a>
                    			</li>
                      		</ul>
                   		</div>  	                   		
	       				       			
	       			       					       			<li id="1120" jl_num="3" name="地面 暗影" py="A" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/8893469b69c20075de6af72453e09282.png" />
			            		       			<p>1120阿洛比斯</p></li>
	       			
						<div id="open_1120" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/6077e166fa58bbb948699daac7230cc1.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1118安普</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/ed5bba59d359909c57978adcb8eec451.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1119安洛斯</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/8893469b69c20075de6af72453e09282.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1120阿洛比斯</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="1117" jl_num="2" name="水" py="F" rhtype="BOSS精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/8ee4621131d7aae25eee9169f16ea94a.png" />
			            		       			<p>1117费奥德</p></li>
	       			
						<div id="open_1117" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/795d5ad581f1b55c12b57da76f56a436.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1116费西</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/8ee4621131d7aae25eee9169f16ea94a.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1117费奥德</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1115" jl_num="2" name="战斗" py="W" rhtype="收费精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/64e5d26f1392fb72f1c91afa44de91ab.png" />
			            		       			<p>1115威沃夫</p></li>
	       			
						<div id="open_1115" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/1e261a0513c78eb9413cb55e81b26487.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1114威尔</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/64e5d26f1392fb72f1c91afa44de91ab.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1115威沃夫</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1113" jl_num="2" name="飞行" py="s" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/0c2118562c83a32becac01425c20e331.png" />
			            		       			<p>1113森普特 </p></li>
	       			
						<div id="open_1113" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/7afef363e82b7df97ee8ff4fcafc44f0.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1112森卡尔 </a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/0c2118562c83a32becac01425c20e331.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1113森普特 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1111" jl_num="2" name="冰" py="f" rhtype="BOSS精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/e9540555fe4cecb4b06e05fc945b15e6.png" />
			            		       			<p>1111菲尔洛 </p></li>
	       			
						<div id="open_1111" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/fd2aeb18baa4b2a3d923fd3be4cb299f.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1110菲菲 </a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/e9540555fe4cecb4b06e05fc945b15e6.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1111菲尔洛 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="1109" jl_num="2" name="雷电 冰" py="k" rhtype="BOSS精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/114b7b0d838e1e6dfef375e8c1a4e706.png" />
			            		       			<p>1109卡沃尔 </p></li>
	       			
						<div id="open_1109" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/d7923fb390ab8e1741880f95d183fa1a.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1108杰沃 </a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/114b7b0d838e1e6dfef375e8c1a4e706.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1109卡沃尔 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1107" jl_num="2" name="战斗" py="h" rhtype="难度4颗星精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/84b87b20f86dab46251622d90fa428c5.png" />
			            		       			<p>1107亨诺尔 </p></li>
	       			
						<div id="open_1107" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/22c632ec04aec40a8bdca383467e89b5.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1106亨亨 </a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/84b87b20f86dab46251622d90fa428c5.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1107亨诺尔 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1105" jl_num="3" name="普通" py="p" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/32a29456a1b69425238bf9e0c53eb6e6.png" />
			            		       			<p>1105卜卜洛 </p></li>
	       			
						<div id="open_1105" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/c33c87eb51aa334d34c2055f66bb7d42.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1103卜卡</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/b01d07fbed74db9f7da8c86054bd4212.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1104卜拉 </a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/32a29456a1b69425238bf9e0c53eb6e6.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1105卜卜洛 </a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="1102" jl_num="3" name="草" py="k" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/74399a9e0d887a436bceda2c76614b33.png" />
			            		       			<p>1102凯克特斯 </p></li>
	       			
						<div id="open_1102" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/690c5d8bdcf7b73cd218f9e28b5e4fc5.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1100阿凯 </a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/51dd2c3f1a42d9a57203b9f639ac0c63.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1101凯鲁斯 </a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/74399a9e0d887a436bceda2c76614b33.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1102凯克特斯 </a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="110" jl_num="3" name="水" py="b" rhtype="稀有精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/c9dfa3b73f5e8c7872bfeb4a77db2af2.jpg" />
			            		       			<p>110布鲁克克</p></li>
	       			
						<div id="open_110" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/9a8bf7a829c1abd250afeb9cb59ef3cf.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">108布鲁</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/7380c5b62460fa30df5eb2314e0493f3.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">109布鲁布</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/c9dfa3b73f5e8c7872bfeb4a77db2af2.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">110布鲁克克</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       					       			<li id="1099" jl_num="2" name="暗影" py="d" rhtype="BOSS精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/559ec2778fbe3e66767af09925245b64.png" />
			            		       			<p>1099达克其 </p></li>
	       			
						<div id="open_1099" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/9e40b04316c32631a9b83530440de468.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1098达其 </a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/559ec2778fbe3e66767af09925245b64.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1099达克其 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1097" jl_num="2" name="地面" py="k" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/10271fce8b3ebd4b7306881a68c7b5aa.png" />
			            		       			<p>1097凯拉特 </p></li>
	       			
						<div id="open_1097" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/c4f74682abf280a966df41df2d6f8624.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1096凯拉 </a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/10271fce8b3ebd4b7306881a68c7b5aa.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1097凯拉特 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1095" jl_num="2" name="火" py="l" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/c2973b041f03237ff6f0fae8e2031e4e.png" />
			            		       			<p>1095拉列尼 </p></li>
	       			
						<div id="open_1095" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/f5db865280d9535aaaf99f084b76419b.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1094列特 </a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/c2973b041f03237ff6f0fae8e2031e4e.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1095拉列尼 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1093" jl_num="2" name="光" py="j" rhtype="收费精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/b8b8cfba8953918f6d81b2bbd87bcff1.png" />
			            		       			<p>1093杰恩斯 </p></li>
	       			
						<div id="open_1093" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/d19eefe67d6a3fda33cb7427d8af9772.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1092杰恩 </a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/b8b8cfba8953918f6d81b2bbd87bcff1.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1093杰恩斯 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1091" jl_num="2" name="战斗" py="j" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/d86ade7e4056f68af195f419792554e0.png" />
			            		       			<p>1091吉拉克 </p></li>
	       			
						<div id="open_1091" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/4a56aa152f94b03562fe92e03fd365d1.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1090吉塔 </a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/d86ade7e4056f68af195f419792554e0.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1091吉拉克 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="1089" jl_num="2" name="火" py="f" rhtype="活动精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/c60f07391a5590737eec368a95b13e41.png" />
			            		       			<p>1089法洛特 </p></li>
	       			
						<div id="open_1089" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/3b92eec866bd623a52839d598c7f8f82.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1088法尔 </a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/c60f07391a5590737eec368a95b13e41.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1089法洛特 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1087" jl_num="2" name="暗影" py="b" rhtype="收费精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/4103a56acc7db4f010d11f20003a920f.png" />
			            		       			<p>1087巴恩那 </p></li>
	       			
						<div id="open_1087" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/4426474d1ffa331869bf60712afd7e5f.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1086巴恩 </a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/4103a56acc7db4f010d11f20003a920f.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1087巴恩那 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1085" jl_num="2" name="地面 战斗" py="l" rhtype="BOSS精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/8dd4fb17c6231ce09586a4f45d084106.png" />
			            		       			<p>1085兰斯特 </p></li>
	       			
						<div id="open_1085" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/2e6568f1a4ceee9fce4f7843449a8097.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1084卡斯 </a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/8dd4fb17c6231ce09586a4f45d084106.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1085兰斯特 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1083" jl_num="2" name="机械" py="l" rhtype="BOSS精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/2d5f513d2813690f8dc3c90965ed2e7f.png" />
			            		       			<p>1083LYN </p></li>
	       			
						<div id="open_1083" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src=""/>
                            		</span>
                        			<a href="javascript:void(0);">1082LEK</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/2d5f513d2813690f8dc3c90965ed2e7f.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1083LYN </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1081" jl_num="2" name="超能" py="s" rhtype="活动精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/1592b89154da516620a48128176c27f8.png" />
			            		       			<p>1081萨菲罗 </p></li>
	       			
						<div id="open_1081" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/c4281d776ec42f2195af7a0b808c6c78.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1080萨奇 </a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/1592b89154da516620a48128176c27f8.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1081萨菲罗 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="1079" jl_num="2" name="地面" py="y" rhtype="BOSS精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/3324a0d21f05cb569803f3f5385e2a74.png" />
			            		       			<p>1079岩锤怪 </p></li>
	       			
						<div id="open_1079" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/b921fc14d3e241130f8dc19b37e4166e.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1078锤锤</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/3324a0d21f05cb569803f3f5385e2a74.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1079岩锤怪 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1077" jl_num="2" name="暗影" py="b" rhtype="稀有精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/7b07109af35bb43957a0c5da757e5ce8.png" />
			            		       			<p>1077波德尔 </p></li>
	       			
						<div id="open_1077" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/3ed66d702c99a9a4a16b6e3421410aa4.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1076波拉 </a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/7b07109af35bb43957a0c5da757e5ce8.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1077波德尔 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1075" jl_num="2" name="机械" py="j" rhtype="稀有精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/804e23b99a1bd074d6490a80360d875d.png" />
			            		       			<p>1075杰莱卡 </p></li>
	       			
						<div id="open_1075" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/a22d4f1885229cfc487f031398344047.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1074杰雷 </a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/804e23b99a1bd074d6490a80360d875d.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1075杰莱卡 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1073" jl_num="2" name="水 暗影" py="m" rhtype="融合精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/cd605cb55cb28065f5f20066536bc812.png" />
			            		       			<p>1073莫德纳 </p></li>
	       			
						<div id="open_1073" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/1ee7c4044babbbcdcaf08b5fa772f9d7.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1072莫德 </a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/cd605cb55cb28065f5f20066536bc812.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1073莫德纳 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1071" jl_num="2" name="飞行" py="b" rhtype="融合精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/6e3af8acc24f1049e42a31f30f3fb588.png" />
			            		       			<p>1071布克鸟</p></li>
	       			
						<div id="open_1071" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/ec6b18e27a8021e9c28fdcacbe93b4f4.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1070布迪 </a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/6e3af8acc24f1049e42a31f30f3fb588.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1071布克鸟</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="107" jl_num="3" name="地面" py="d" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/139e45bec689103529878cb0e987c60f.jpg" />
			            		       			<p>107丁鲁特</p></li>
	       			
						<div id="open_107" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/981364ef7aaabf0a80e90b3a9504cc8e.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">105丁格</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/2825d81e9918fd0b956a6ff8c565b59d.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">106丁加鲁</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/139e45bec689103529878cb0e987c60f.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">107丁鲁特</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       					       			<li id="1069" jl_num="1" name="光" py="m" rhtype="http://img1.2125.com/upload/seer/thumb/7c094a482a157f6b86cb4bf5bfe85fd5.png">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/7c094a482a157f6b86cb4bf5bfe85fd5.png" />
			            		       			<p>1069米咔 </p></li>
	       			
						<div id="open_1069" style="width: 113px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://game-res.61.com/picture/seer/spirit/9d6190f2850259bbfd47a4026a8b10fc.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1069米咔 </a>
                    			</li>
                      		</ul>
                   		</div>  	                   		
	       				       			
	       			       					       			<li id="1068" jl_num="2" name="普通" py="b" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/908b7b1f85b8f7a45aa482e6fc0d2c94.png" />
			            		       			<p>1068巴克迪 </p></li>
	       			
						<div id="open_1068" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/d0a5ce76f2c8a354efeb3b57f64c27d7.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1067巴沃 </a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/908b7b1f85b8f7a45aa482e6fc0d2c94.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1068巴克迪 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1066" jl_num="2" name="光" py="k" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/e474948f72baaf6f6a8af9b3f3ac3807.png" />
			            		       			<p>1066卡瑞 </p></li>
	       			
						<div id="open_1066" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/4091656d95586d6b93108b35d415e965.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1065阿卡 </a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/e474948f72baaf6f6a8af9b3f3ac3807.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1066卡瑞 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1064" jl_num="3" name="冰 龙" py="f" rhtype="收费精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/edb6c97db3cb3e5515d39365d6529792.png" />
			            		       			<p>1064弗里兹 </p></li>
	       			
						<div id="open_1064" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/924a81b221788115977310a5e983a0ef.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1062弗德 </a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/c1d941727cfa848c6db1c8ea78d11d35.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1063里洛德 </a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/edb6c97db3cb3e5515d39365d6529792.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1064弗里兹 </a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="1061" jl_num="2" name="草" py="a" rhtype="BOSS精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/f437dba9f96fa7c904bd45ab0c7d5d08.png" />
			            		       			<p>1061阿加莎 </p></li>
	       			
						<div id="open_1061" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/5267a193def093b57008f7a668f3ac21.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1060莎尔 </a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/f437dba9f96fa7c904bd45ab0c7d5d08.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1061阿加莎 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="1059" jl_num="2" name="暗影" py="m" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/d21111ee18ef22192087cfe76b3c4a78.png" />
			            		       			<p>1059莫弗克 </p></li>
	       			
						<div id="open_1059" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/fda83e176a9d293849e393c1c565f7a8.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1058莫格 </a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/d21111ee18ef22192087cfe76b3c4a78.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1059莫弗克 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1057" jl_num="2" name="地面" py="g" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/cbee90a27b76ce3adf46a0b26b2f5472.png" />
			            		       			<p>1057怪怪岩 </p></li>
	       			
						<div id="open_1057" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/83109f7f9c294bdb97585d8e8a62337a.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1056小岩怪 </a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/cbee90a27b76ce3adf46a0b26b2f5472.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1057怪怪岩 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1055" jl_num="2" name="机械" py="p" rhtype="收费精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/46fc0f4478b843e3a93dfe0a0240161e.png" />
			            		       			<p>1055佩罗姆 </p></li>
	       			
						<div id="open_1055" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/cf042bddbe5daf5b07ecd0f540bf7755.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1054佩里 </a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/46fc0f4478b843e3a93dfe0a0240161e.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1055佩罗姆 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1053" jl_num="2" name="超能" py="j" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/a82f4d17cecfb2a0298aa50a63ac8862.png" />
			            		       			<p>1053吉亚尼 </p></li>
	       			
						<div id="open_1053" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/65b713b297d8f73863642691ed6a6002.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1052祖迪 </a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/a82f4d17cecfb2a0298aa50a63ac8862.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1053吉亚尼 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1051" jl_num="2" name="飞行" py="j" rhtype="BOSS精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/82ae2eaedfb1196f2380c0668a803ccd.png" />
			            		       			<p>1051加耶罗 </p></li>
	       			
						<div id="open_1051" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/721d4e727d75187b9f25f01e0fdc8375.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1050耶尼 </a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/82ae2eaedfb1196f2380c0668a803ccd.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1051加耶罗 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="1049" jl_num="2" name="飞行" py="y" rhtype="野生精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/fe8976ce4b591d318c43b6eba87490e5.png" />
			            		       			<p>1049鹰嘴蝶 </p></li>
	       			
						<div id="open_1049" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/bd8d19537940fe2f8c71dcb02965072f.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1048伊尔 </a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/fe8976ce4b591d318c43b6eba87490e5.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1049鹰嘴蝶 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1047" jl_num="2" name="水" py="x" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/c3d1ec4dbc85649be084977e1757acf1.png" />
			            		       			<p>1047希克拉 </p></li>
	       			
						<div id="open_1047" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/9084b860c1c26bd26d1b7aaddd6f133d.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1046纳克 </a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/c3d1ec4dbc85649be084977e1757acf1.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1047希克拉 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1045" jl_num="2" name="战斗" py="r" rhtype="BOSS精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/5eda07913895aba449d35aafa04c73df.png" />
			            		       			<p>1045瑞尔斯 </p></li>
	       			
						<div id="open_1045" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/937820eea063b05c8454fe049112e14b.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1044提诺 </a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/5eda07913895aba449d35aafa04c73df.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1045瑞尔斯 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1043" jl_num="2" name="超能" py="l" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/1e05fa67cdf361157bc2ef0227a029bf.png" />
			            		       			<p>1043铃铃猫 </p></li>
	       			
						<div id="open_1043" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/f6ad75513e1593a2a23e1b484cdd8cbe.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1042铃儿 </a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/1e05fa67cdf361157bc2ef0227a029bf.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1043铃铃猫 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1041" jl_num="2" name="冰" py="y" rhtype="活动精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/7a1c0cb1b0b320230e67b164af619df2.png" />
			            		       			<p>1041眼镜酷毛球 </p></li>
	       			
						<div id="open_1041" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/dce9fb072a314c26705d195810e2f93f.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1040酷雪球 </a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/7a1c0cb1b0b320230e67b164af619df2.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1041眼镜酷毛球 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="104" jl_num="3" name="机械" py="l" rhtype="任务精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/fb48c4d935bb8695a5fbd7fc71378fc5.jpg" />
			            		       			<p>104雷吉姆斯</p></li>
	       			
						<div id="open_104" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/0446ccb604644131cc56a2e0b751cc78.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">102奇塔</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/edd996c5fe4f561baec94b1ba470b729.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">103钢塔斯</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/fb48c4d935bb8695a5fbd7fc71378fc5.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">104雷吉姆斯</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       					       			<li id="1039" jl_num="2" name="冰" py="y" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/76938d34af7610ca1366962d2c43deb4.png" />
			            		       			<p>1039眼镜蓝毛球 </p></li>
	       			
						<div id="open_1039" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/c27c7145c443bf9f8bd7067f255d2dd5.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1038蓝色雪球 </a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/76938d34af7610ca1366962d2c43deb4.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1039眼镜蓝毛球 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1037" jl_num="2" name="冰" py="y" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/d9d5772e34737bb30bbb691843c2ecc7.png" />
			            		       			<p>1037眼镜紫毛球 </p></li>
	       			
						<div id="open_1037" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/89535fde64fe13f5614ef59537e69ba2.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1036紫色雪球 </a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/d9d5772e34737bb30bbb691843c2ecc7.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1037眼镜紫毛球 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1035" jl_num="2" name="冰" py="y" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/8d0b6d55fcb1c18f29fc9b9f0a767eca.png" />
			            		       			<p>1035眼镜红毛球 </p></li>
	       			
						<div id="open_1035" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/df78cf41fc2198e00e9a66505aa05361.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1034红色雪球 </a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/8d0b6d55fcb1c18f29fc9b9f0a767eca.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1035眼镜红毛球 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1033" jl_num="2" name="冰" py="y" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/9e39ba049f6ff66084218bb10201d72f.png" />
			            		       			<p>1033眼镜绿毛球 </p></li>
	       			
						<div id="open_1033" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/951a8682b0aa15c9a543fc92f65a7727.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1032绿色雪球 </a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/9e39ba049f6ff66084218bb10201d72f.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1033眼镜绿毛球 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1031" jl_num="2" name="水" py="d" rhtype="BOSS精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/f10a181a811f6b2784ba67c51f2b915e.png" />
			            		       			<p>1031多尔尼 </p></li>
	       			
						<div id="open_1031" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/5fd133b8ae39aa83c0e1fc26e1942192.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1030多诺 </a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/f10a181a811f6b2784ba67c51f2b915e.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1031多尔尼 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="1029" jl_num="2" name="普通" py="m" rhtype="BOSS精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/4a88513455f8e03e9707c2e1ef35a0ea.png" />
			            		       			<p>1029马西莫斯 </p></li>
	       			
						<div id="open_1029" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/12b16a04f1318f9ab346bb3399d026e0.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1028麦斯 </a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/4a88513455f8e03e9707c2e1ef35a0ea.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1029马西莫斯 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1027" jl_num="2" name="冰" py="j" rhtype="活动精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/5d327aea518bf2b58fe3f0cff7f58156.png" />
			            		       			<p>1027极寒冰蛛 </p></li>
	       			
						<div id="open_1027" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/dfa2eb1da38deaf9dc75a78f02a45176.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1026冰蛛 </a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/5d327aea518bf2b58fe3f0cff7f58156.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1027极寒冰蛛 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1025" jl_num="2" name="地面" py="m" rhtype="任务精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/e8af1066258183a317ee860ae1218666.png" />
			            		       			<p>1025莫拉坦 </p></li>
	       			
						<div id="open_1025" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/cdbeb5d649626c65a198ff271faacc07.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1024莫卡 </a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/e8af1066258183a317ee860ae1218666.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1025莫拉坦 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1023" jl_num="2" name="暗影" py="" rhtype="野生精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/4aadde2e4744d25e0ae49215ef7d828b.png" />
			            		       			<p>1023黑布罗 </p></li>
	       			
						<div id="open_1023" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/9e8726d94c0a86f35ba4d5f08707e301.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1022黑格 </a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/4aadde2e4744d25e0ae49215ef7d828b.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1023黑布罗 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1021" jl_num="2" name="冰" py="" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/539b90ffbf8c7035e4e56a52ce038eb2.png" />
			            		       			<p>1021眼镜毛球 </p></li>
	       			
						<div id="open_1021" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/0033bba3b5ad9c1238d51456b4dc4512.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1020小雪球 </a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/539b90ffbf8c7035e4e56a52ce038eb2.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1021眼镜毛球 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="1019" jl_num="3" name="火" py="j" rhtype="收费精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/7176230f3073823369763972af71f6a8.png" />
			            		       			<p>1019九尾火狐 </p></li>
	       			
						<div id="open_1019" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/47c91ba29e578663711bc4222f513526.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1017三尾火狐 </a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/fe25ca110376dff8d9be2b10bc3441f6.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1018四尾火狐 </a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/7176230f3073823369763972af71f6a8.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1019九尾火狐 </a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="1016" jl_num="2" name="超能" py="l" rhtype="活动精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/90cc8d9d2b1f58bcc65e1435562843b9.png" />
			            		       			<p>1016鲁尼卡 </p></li>
	       			
						<div id="open_1016" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/9f382ba9bd26aeb4a2a5415a9d7bd8e7.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1015鲁尔 </a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/90cc8d9d2b1f58bcc65e1435562843b9.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1016鲁尼卡 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1014" jl_num="2" name="飞行 超能" py="y" rhtype="收费精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/fcf8a6f87b278f0acf78ab3239a560f1.png" />
			            		       			<p>1014亚森 </p></li>
	       			
						<div id="open_1014" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/08460b90e141126b4baef0c9e104dcc3.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1013亚吉 </a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/fcf8a6f87b278f0acf78ab3239a560f1.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1014亚森 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1012" jl_num="2" name="冰 暗影" py="a" rhtype="BOSS精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/1fce373a2c7e57c8d840181551ae5765.png" />
			            		       			<p>1012暗夜冰狐</p></li>
	       			
						<div id="open_1012" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/0ccd40f802979e095e66c44d271a8d67.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1011冰狐 </a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/1fce373a2c7e57c8d840181551ae5765.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1012暗夜冰狐</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1010" jl_num="2" name="战斗" py="d" rhtype="收费精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/0e8118e72080eb9e465a4aa434cb9867.png" />
			            		       			<p>1010迪马克 </p></li>
	       			
						<div id="open_1010" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/a93a0c9184a69994804e4203032f3da7.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1009史迪 </a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/0e8118e72080eb9e465a4aa434cb9867.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1010迪马克 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       					       			<li id="101" jl_num="2" name="机械" py="k" rhtype="任务精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/8fea4f18d75d3ab1665f8a242b728a51.jpg" />
			            		       			<p>101卡尔特</p></li>
	       			
						<div id="open_101" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/f6bfd376f041c57c4efb1d2147bddfb8.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">100卡西</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/8fea4f18d75d3ab1665f8a242b728a51.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">101卡尔特</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1008" jl_num="2" name="超能" py="c" rhtype="BOSS精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/4f0a7b3a0602f1a46afca735ee87ec34.png" />
			            		       			<p>1008查德洛 </p></li>
	       			
						<div id="open_1008" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/6aa79c2704c918bf189581b427a8de9b.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1007查理</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/4f0a7b3a0602f1a46afca735ee87ec34.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1008查德洛 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="1006" jl_num="3" name="水" py="f" rhtype="活动精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/ef2c57fa5e72fc1f2a5dbec9efe44847.png" />
			            		       			<p>1006费洛舍 </p></li>
	       			
						<div id="open_1006" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/c39faa2c52a8f8329ca22ac99688c555.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1004费舍 </a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/a227569cff0d3e9b40f241a92188ef45.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1005费吉尔 </a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/ef2c57fa5e72fc1f2a5dbec9efe44847.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1006费洛舍 </a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="1003" jl_num="2" name="火" py="d" rhtype="收费精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/754935f367350e458887a71dafdf88c4.png" />
			            		       			<p>1003戈登 </p></li>
	       			
						<div id="open_1003" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/d40492a130953ae8e8dbf43a407e87b1.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1002多戈</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/754935f367350e458887a71dafdf88c4.png"/>
                            		</span>
                        			<a href="javascript:void(0);">1003戈登 </a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="099" jl_num="3" name="电" py="k" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/0834d8d4f5a262e476bb7e8af71c18e1.jpg" />
			            		       			<p>099卡尔加斯</p></li>
	       			
						<div id="open_099" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/60681ad3ecd7a5db547b23eedd427116.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">097鲁克</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/854bd2bf806c04c0b96157cee995c081.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">098卡鲁加</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/0834d8d4f5a262e476bb7e8af71c18e1.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">099卡尔加斯</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="096" jl_num="2" name="水" py="n" rhtype="任务精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/ca175b010ac8a776d7c326a323962dfd.jpg" />
			            		       			<p>096尼斯克</p></li>
	       			
						<div id="open_096" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/b8bdcc069f8fee146266770d12b07993.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">095尼布</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/ca175b010ac8a776d7c326a323962dfd.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">096尼斯克</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="094" jl_num="1" name="冰雪" py="k" rhtype="http://img1.2125.com/upload/seer/thumb/2ae20b5baae2304a5aae1cef9777420d.jpg">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/2ae20b5baae2304a5aae1cef9777420d.jpg" />
			            		       			<p>094柯蓝</p></li>
	       			
						<div id="open_094" style="width: 113px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://res.61.com/img/seer/bin/aa0aafa4489d754d896111e91b791a0f.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">094柯蓝</a>
                    			</li>
                      		</ul>
                   		</div>  	                   		
	       				       			
	       			       					       			<li id="093" jl_num="1" name="电" py="x" rhtype="http://img1.2125.com/upload/seer/thumb/8207a3074abee51d00d126883ed8c67b.jpg">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/8207a3074abee51d00d126883ed8c67b.jpg" />
			            		       			<p>093希拉</p></li>
	       			
						<div id="open_093" style="width: 113px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://res.61.com/img/seer/dian/1925b54ab44c9e5f46b4128ea27367cc.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">093希拉</a>
                    			</li>
                      		</ul>
                   		</div>  	                   		
	       				       			
	       			       					       			<li id="092" jl_num="1" name="飞行" py="d" rhtype="http://img1.2125.com/upload/seer/thumb/52ae89610bc7cdbac58d9ab90140ef0a.jpg">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/52ae89610bc7cdbac58d9ab90140ef0a.jpg" />
			            		       			<p>092蝠迪</p></li>
	       			
						<div id="open_092" style="width: 113px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://res.61.com/img/seer/fei/527affed1b0d2377a62e25326e4dc6b4.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">092蝠迪</a>
                    			</li>
                      		</ul>
                   		</div>  	                   		
	       				       			
	       			       					       			<li id="091" jl_num="1" name="普通" py="y" rhtype="http://img1.2125.com/upload/seer/thumb/c45b516135061030147e44e597130b4a.jpg">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/c45b516135061030147e44e597130b4a.jpg" />
			            		       			<p>091悠悠</p></li>
	       			
						<div id="open_091" style="width: 113px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://res.61.com/img/seer/putong/e020ab56962d40dbfec72fe708d85fa2.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">091悠悠</a>
                    			</li>
                      		</ul>
                   		</div>  	                   		
	       				       			
	       			       					       			<li id="090" jl_num="2" name="火" py="d" rhtype="初始精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/1b1a60016c1de949a22ab993d858a63f.jpg" />
			            		       			<p>090迪尔克</p></li>
	       			
						<div id="open_090" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/b74666e71d562ebec0bfb2d03c8900f6.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">089迪达</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/1b1a60016c1de949a22ab993d858a63f.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">090迪尔克</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="088" jl_num="3" name="地面" py="n" rhtype="BOSS精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/d75b043141c2c962cf4898db6e033c7b.jpg" />
			            		       			<p>088纳多雷</p></li>
	       			
						<div id="open_088" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/680ef5723b58901cf85bb01dfe257680.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">086纳格</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/c9023756f01f87b40713655d9ce01c4e.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">087纳奇鲁</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/d75b043141c2c962cf4898db6e033c7b.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">088纳多雷</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="085" jl_num="3" name="草" py="y" rhtype="稀有精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/19f36ba1e1b1a134d260ed1b122b8ae4.jpg" />
			            		       			<p>085依卡莱恩</p></li>
	       			
						<div id="open_085" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/19f36ba1e1b1a134d260ed1b122b8ae4.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">085依卡莱恩</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="082" jl_num="3" name="机械" py="p" rhtype="任务精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/33f156b6309243e4dc1f31b7c62393a6.jpg" />
			            		       			<p>082帕尔西丝</p></li>
	       			
						<div id="open_082" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/0f0bbabb5aeee6b09b34308326ba6dfb.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">080帕诺</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/dd5ab046aeb614295d1b28e97a30fb39.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">081帕拉斯</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/33f156b6309243e4dc1f31b7c62393a6.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">082帕尔西丝</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="079" jl_num="3" name="超能" py="a" rhtype="稀有精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/085ed335b86da1cec4bb03b87c0b69e3.jpg" />
			            		       			<p>079艾斯菲亚</p></li>
	       			
						<div id="open_079" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/69bbe2d0ebf1c6e36df07fe7863fd016.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">077尼尔</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/35e6498ba6750b3c3b28f4ab10e70245.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">078菲斯利</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/085ed335b86da1cec4bb03b87c0b69e3.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">079艾斯菲亚</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="076" jl_num="3" name="水" py="s" rhtype="稀有精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/e1cd74c941add04345e37c155e58a7a8.jpg" />
			            		       			<p>076水晶鸭</p></li>
	       			
						<div id="open_076" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/bf33bd9386ba80a66b46a347c185a300.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">074果冻鸭</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/5e240bf5533513035398f1f2eb725e9a.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">075波浪鸭</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/e1cd74c941add04345e37c155e58a7a8.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">076水晶鸭</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="073" jl_num="3" name="机械" py="p" rhtype="任务精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/b916968a41ed634fc6a8931c50510b0f.jpg" />
			            		       			<p>073派鲁基达</p></li>
	       			
						<div id="open_073" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/c04a4954f00cdc1ff49259b57381ac27.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">071派派</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/a671ae30e191799f209331beb7352c09.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">072派鲁克</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/b916968a41ed634fc6a8931c50510b0f.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">073派鲁基达</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="070" jl_num="1" name="电" py="l" rhtype="http://img1.2125.com/upload/seer/thumb/a5b55de84537625fa0ea79b596597854.jpg">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/a5b55de84537625fa0ea79b596597854.jpg" />
			            		       			<p>070雷伊</p></li>
	       			
						<div id="open_070" style="width: 113px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://res.61.com/img/seer/dian/20af8b3917e0f354e51cf386a4b5a6da.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">070雷伊</a>
                    			</li>
                      		</ul>
                   		</div>  	                   		
	       				       			
	       			       					       			<li id="069" jl_num="2" name="飞行" py="t" rhtype="BOSS精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/5c6ac0f905d563db445ded83d425bc64.jpg" />
			            		       			<p>069提亚斯</p></li>
	       			
						<div id="open_069" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/577e68e685d52eb1f97b46bbe65d150f.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">068米拉美</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/5c6ac0f905d563db445ded83d425bc64.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">069提亚斯</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="067" jl_num="3" name="冰雪" py="b" rhtype="稀有精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/ed657bc218047559ad1442d945493fa1.jpg" />
			            		       			<p>067布林克斯</p></li>
	       			
						<div id="open_067" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/09f28caa7be1e217e53bb6c110c9f52f.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">065林克</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/9e57fda344dcfe24336af8bb18f87e2b.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">066林斯奇</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/ed657bc218047559ad1442d945493fa1.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">067布林克斯</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="064" jl_num="3" name="地面" py="g" rhtype="稀有精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/0111d9e3efa2ee9f957b7303ce97edfc.jpg" />
			            		       			<p>064格鲁奇高</p></li>
	       			
						<div id="open_064" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/235c62f32ddeabb59925203b4d5057bd.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">062格林</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/cd137ab975ca056f82c7978868e616cc.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">063格力姆</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/0111d9e3efa2ee9f957b7303ce97edfc.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">064格鲁奇高</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="061" jl_num="3" name="机械" py="l" rhtype="任务精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/fabaa7c99622d538550e70d8b4efb486.jpg" />
			            		       			<p>061雷吉欧斯</p></li>
	       			
						<div id="open_061" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/0fcc02d461538023bc78b25e4b8ee608.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">059西塔</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/cd1e5d1c82a2fcf20053eb3f95fb7e6c.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">060铁达斯</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/fabaa7c99622d538550e70d8b4efb486.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">061雷吉欧斯</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="058" jl_num="3" name="地面" py="t" rhtype="初始精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/d0026a7b9c6e68c3a36aa106e49d25d8.jpg" />
			            		       			<p>058塔奇拉顿</p></li>
	       			
						<div id="open_058" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/10da99ca945ed3ef540ef263d6957904.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">056奇洛</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/6ba95cf1fcce8688db8ed7e9df8e9e6e.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">057杰拉特</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/d0026a7b9c6e68c3a36aa106e49d25d8.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">058塔奇拉顿</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="055" jl_num="3" name="地面" py="l" rhtype="稀有精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/30a632ea5eb2fb49a0234aafa1e736d7.jpg" />
			            		       			<p>055鲁加斯</p></li>
	       			
						<div id="open_055" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/f4b132d74ab834a7aa727a2a7f3180b8.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">044基罗拉</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/b13ba4ea2b0f4907389e3967e2042263.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">053莫比</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/b8821278419bbcb75924fd94897a6da5.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">054格格尔</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/30a632ea5eb2fb49a0234aafa1e736d7.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">055鲁加斯</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="052" jl_num="2" name="冰雪" py="j" rhtype="野生精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/1d4a29a0d181538d0c9c3ba3a9d596fd.jpg" />
			            		       			<p>052急冻兽</p></li>
	       			
						<div id="open_052" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/ce8b4bed870e3caa1e339cc78f8885fa.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">051玄冰兽</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/1d4a29a0d181538d0c9c3ba3a9d596fd.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">052急冻兽</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="050" jl_num="3" name="冰雪" py="a" rhtype="BOSS精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/5e4dc6ea8527d6dc12633dd4b3785fa4.jpg" />
			            		       			<p>050阿克希亚</p></li>
	       			
						<div id="open_050" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/10989684b278628ae7d252115b2b3149.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">048索拉</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/777ba31ebb20353dcc22fbc1ef891971.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">049赫拉丝</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/5e4dc6ea8527d6dc12633dd4b3785fa4.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">050阿克希亚</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="047" jl_num="2" name="草" py="m" rhtype="BOSS精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/21e8ccae4d5ba9e64d4227095c348243.jpg" />
			            		       			<p>047蘑菇怪</p></li>
	       			
						<div id="open_047" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/70200c3d7b5897abfddaf4de69b93305.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">046小蘑菇</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/21e8ccae4d5ba9e64d4227095c348243.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">047蘑菇怪</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       				       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="042" jl_num="2" name="火" py="l" rhtype="BOSS精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/64d7cfe173ed4cd944810e92def33585.jpg" />
			            		       			<p>042里奥斯</p></li>
	       			
						<div id="open_042" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/9a0661b14e24bb2b2181ec1ed54d5afe.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">041胡里亚</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/64d7cfe173ed4cd944810e92def33585.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">042里奥斯</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="040" jl_num="3" name="火" py="b" rhtype="野生精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/ec92db45120aab715abee175fac50617.jpg" />
			            		       			<p>040贝尔鲁斯</p></li>
	       			
						<div id="open_040" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/8942627fe1f4c59724ca7e3c6c6a6763.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">038火炎贝</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/c71f7cdaa3c8e538d90cbca9c69313e9.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">039贝拉米</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/ec92db45120aab715abee175fac50617.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">040贝尔鲁斯</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="037" jl_num="3" name="火" py="l" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/280900a075520088368e0ab3f032f74c.jpg" />
			            		       			<p>037洛吉拉斯</p></li>
	       			
						<div id="open_037" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/831de7b60b84497a00243beb73ceca7e.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">035吉尔</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/836d22fb20a0908d91dd6c94ef9b46e0.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">036里诺</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/280900a075520088368e0ab3f032f74c.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">037洛吉拉斯</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="034" jl_num="2" name="水" py="g" rhtype="BOSS精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/c9f4b381a52a7f32ecec2a0fcf3b9626.jpg" />
			            		       			<p>034钢牙鲨</p></li>
	       			
						<div id="open_034" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/19ad7685e77e46845bb5a8352495bf3b.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">033利牙鱼</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/c9f4b381a52a7f32ecec2a0fcf3b9626.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">034钢牙鲨</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="032" jl_num="3" name="水" py="b" rhtype="野生精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/8ecbc12fc5feba85d87a8972ce87d8cd.jpg" />
			            		       			<p>032巴拉龟</p></li>
	       			
						<div id="open_032" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/1568f6c1e4bf350160533ba73e1301a8.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">030贝尔</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/40cd55de0100cad9455f5f2ed6996d58.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">031阿布</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/8ecbc12fc5feba85d87a8972ce87d8cd.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">032巴拉龟</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="029" jl_num="3" name="草" py="m" rhtype="稀有精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/8b2289cb522be120b84749a19df04b3f.jpg" />
			            		       			<p>029魔花仙子</p></li>
	       			
						<div id="open_029" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/f1d34d4595a90b9b2ddb7358e3e219df.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">027小豆芽</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/573572927a60b5f0abd056bafd6e6ef3.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">028叮叮</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/8b2289cb522be120b84749a19df04b3f.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">029魔花仙子</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="026" jl_num="2" name="飞行" py="h" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/cd00430e58d1e34a4b4d1473227b0fb6.jpg" />
			            		       			<p>026哈尔浮</p></li>
	       			
						<div id="open_026" style="width: 222px;display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img2.2125.com/upload/seer/thumb/51666a4d236a0a014df84c68b9f4227a.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">025幽浮</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/cd00430e58d1e34a4b4d1473227b0fb6.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">026哈尔浮</a>
                    			</li>
                      		</ul>
                   		</div>  	
                   			       			
	       			       				       			
	       			       					       			<li id="024" jl_num="3" name="飞行" py="b" rhtype="野生精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/bdcef46c82a975d28d0d0d8806ce50bd.jpg" />
			            		       			<p>024巴洛克</p></li>
	       			
						<div id="open_024" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/f49001136abf35732ea6e36f09684993.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">022毛毛</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/5b7f2115bc05ec3da87a4d8d1a1e707e.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">023卡洛</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/bdcef46c82a975d28d0d0d8806ce50bd.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">024巴洛克</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="021" jl_num="3" name="电" py="d" rhtype="稀有精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/a211b5c56672192f59504cb25d3d1384.jpg" />
			            		       			<p>021电击兔</p></li>
	       			
						<div id="open_021" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/abaf3f8dfca233f29950cdbf8b60858b.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">019利利</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/99f6c430cda5d4944f930623a86e4cdb.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">020绵绵</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/a211b5c56672192f59504cb25d3d1384.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">021电击兔</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="018" jl_num="3" name="草" py="j" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/b6b3368ed0adbf6156a0cbe4f27b70c5.jpg" />
			            		       			<p>018巨型仙人掌</p></li>
	       			
						<div id="open_018" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/a5e9eab90dfc70d956a69bb78be61148.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">016仙人球</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/25bd2ea5702f4591e540b63b4c936d56.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">017仙人掌</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/b6b3368ed0adbf6156a0cbe4f27b70c5.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">018巨型仙人掌</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="015" jl_num="3" name="电" py="t" rhtype="野生精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/cf523b5669f8237c7aa1982b23549ec8.jpg" />
			            		       			<p>015天雷鼠</p></li>
	       			
						<div id="open_015" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/635d79f959bbb0822ecc8c864d5d0dad.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">013比比鼠</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/c33cfee5f6e552a5bbd20d1d81497423.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">014闪电鼠</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/cf523b5669f8237c7aa1982b23549ec8.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">015天雷鼠</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="012" jl_num="3" name="飞行" py="b" rhtype="野生精灵">
		       										<img name="page_cnt_1" lz_src="http://img1.2125.com/upload/seer/thumb/accca4d367574bfa82154267b716ad74.jpg" />
			            		       			<p>012波克尔</p></li>
	       			
						<div id="open_012" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/5b2aea3daec2c79a99434e01fc9b63d1.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">010皮皮</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/06dc422332c2cac814a2da51fbce6c04.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">011比波</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/accca4d367574bfa82154267b716ad74.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">012波克尔</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="009" jl_num="3" name="火" py="l" rhtype="初始精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img4.2125.com/upload/seer/thumb/99483e64ef6e29a3e46fccf38132b535.jpg" />
			            		       			<p>009烈焰猩猩</p></li>
	       			
						<div id="open_009" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/6c33d456673e5322c08198a82eebf95c.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">007小火猴</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/2fbe8d1edfcacc241f65b494c8ac2b49.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">008烈火猴</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/99483e64ef6e29a3e46fccf38132b535.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">009烈焰猩猩</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="006" jl_num="3" name="水" py="b" rhtype="初始精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img3.2125.com/upload/seer/thumb/f41435d7176e2536c48701c891a3b4aa.jpg" />
			            		       			<p>006巴鲁斯</p></li>
	       			
						<div id="open_006" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/2d245cac1639e9ca9330d3c32a1edf02.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">004伊优</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/605705d6f93d95867915476c78deb6b9.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">005尤里安</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/f41435d7176e2536c48701c891a3b4aa.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">006巴鲁斯</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			       					       			<li id="003" jl_num="3" name="草" py="b" rhtype="初始精灵">
		       						            	<img name="page_cnt_1" lz_src="http://img2.2125.com/upload/seer/thumb/9bf143ba58b6a83a0b3b5f15e7ecdb48.jpg" />
			            		       			<p>003布布花</p></li>
	       			
						<div id="open_003" style="display:none;position: absolute; top:100px;left:100px;z-index:2001;" class="pop_box">
							<ul class="tab_wt">
																                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/ceb44d660270c027af45ecaff99ca38a.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">001布布种子</a>								
								</li>
								                            	<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img3.2125.com/upload/seer/thumb/9740c8132ab1ad70c91f54cbcbfdafa5.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">002布布草</a>								
								</li>
								                    			<li>
                            		<span>
                                           <img name="page_cnt_1" alt="" title="" lz_src="http://img4.2125.com/upload/seer/thumb/9bf143ba58b6a83a0b3b5f15e7ecdb48.jpg"/>
                            		</span>
                        			<a href="javascript:void(0);">003布布花</a>
                    			</li>
                      		</ul>
                   		</div>      		
                   			       			
	       			       				       			
	       			       				       			
	       			 
              </ul>
          </div>
          <div class="jl_btm"></div> 
</div>


<div class="blank_10"></div>
<div class="footer_line"></div>
<div id="footer">
      <div class="f_notice">
    	<p>小游戏作品版权归原作者享有，如无意之中侵犯了您的版权，请您按照<a class="hgray" target="_blank" href="http://www.2125.com/copyright.html">《版权保护投诉指引》</a>来信告知，本网站将应您的要求删除。<br/>2125温馨提示：抵制不良游戏  拒绝盗版游戏  注意自我保护  谨防受骗上当  适度游戏益脑  沉迷游戏伤身  合理安排时间  享受健康生活</p>
	  </div>
      <div class="row">
          <a href="http://www.2125.com/about.html" target="_blank" class="hgray" title="用户协议">用户协议</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="http://www.2125.com/upload.html" target="_blank" class="hgray" title="上传游戏">上传游戏</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="http://www.2125.com/copyright.html" target="_blank" class="hgray" title="版权保护投诉指引">版权保护投诉指引</a>
       </div>
       <div class="row">
             上海淘米网络科技有限公司 Copyright&nbsp;&copy;&nbsp;2010-2012 2125小游戏 All Rights Reserved.&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;沪ICP备10205640号 文网文[2009]093号
       </div>
       <div class="row"></div>
</div>

<div id="login_box" class="tie_login pop"  style="display:none;">
	<div class="top"><h3>登录</h3><a id="close_btn" class="close" href="javascript:;"></a></div>
	<div class="mid">
		<p>米米号或者密码输入有误,请重新输入！</p>
		<div class="field">
			<label class="mm">米米号/邮箱：</label>
			<input name="uid" class="txt" type="text" tabindex="1" maxLength="64"/>
			<a href="http://account.61.com/register?gid=3" target="_blank" class="blue">申请米米号</a>
		</div>
		<div class="field">
			<label class="mm">密码：</label>
			<input class="txt" name="password" type="password" tabindex="2" maxlength="16"/>
			<a href="http://account.61.com/forget/" target="_blank"  class="blue">忘记密码</a>
		</div>
		<div id="hide_seccode" style="display:none;">
			<div class="field">
				<label class="mm">验证码：</label>
				<input name="seccode" class="yz" type="text" tabindex="3" autocomplete="off" maxlength="4"/>
			</div>
		
			<div class="yanzh" id="yz_area">
			</div>
			<div class="clear"></div>
		</div>
		<div class="btn">
			<a id="ajax_login" href="javascript:;" class="affirm">登录</a>
		</div>
		<div class="clear"></div>
	</div>
	<div class="btm"></div>	
</div>

<script type="text/javascript" src="http://res.2125.com/js/base.js"></script> 
<script type="text/javascript">
document.domain="2125.com";

if(window.location.host=='www.2125.com'||window.location.host=='test.www.2125.com')
{
	//搜索 预置
	var searchtag_html = $.ajax({
			 url: "/AD/2125_searchtag.html?rnd="+Math.random(),
			 async: false   
			}).responseText; 
	var showsearchtag = '搜"'+searchtag_html+'"试试!';

	jQuery(function($){
		if(searchtag_html != '')
		{
			$("#search_tag").val(showsearchtag);
		}
	});

	//鼠标进入搜索框
	$('#search_tag').mousedown(function(){
		var word = $(this).val();
		if(word == showsearchtag)
		{
			$(this).val('');
			$(this).focus();
		}
	});

	//鼠标离开搜索框
	$('#search_tag').focusout(function(){
		var word = $(this).val();
		if(word == '')
		{
			$(this).val(showsearchtag);
			$(this).focus();
		}
	});
}

function search()
{
    var search_value = $('#search_tag').attr("value");
    search_value = $.trim(search_value);

    if(search_value)
    {
        if(search_value.length>20)
        {
            alert("您输入的搜索内容太长了，请不要超过20个字");
        }
        else
        {
            if(search_value == showsearchtag)
            {
            	search_value = searchtag_html;
            }
            location.href = "/search.html?"+search_value;
        }
    }
    else
    {
        alert("请先输入搜索内容");
    }
}
</script>
<script type="text/javascript">
function seer_search()
{
    var seer_search_value = $('#seer_search_tag').attr("value");
    seer_search_value = $.trim(seer_search_value);

    if(seer_search_value)
    {
    	if(seer_search_value.length>20)
        {
            alert("您输入的搜索内容太长了，请不要超过20个字");
        }
        else
        {
            window.open("/seer/seer_search.html?"+seer_search_value);
        }
    }
    else
    {
        alert("请先输入搜索内容");
    }
}
$(function(){
	$("#seer_search_tag").keypress(function(e){
		if(e.keyCode==13){
			seer_search();
		}
	});
})

document.domain="2125.com";

var topbar_content = new Array(0,0,0,0,0);

//初始化第一个
jQuery(function($){
	get_topbar_url(0);
});

//跨域获得web.2125.com头部信息
function get_topbar_url(con_index)
{
	//搜索 预置
	var topbar_url = "/webtop/webtop_"+con_index+".html?rnd="+Math.random();
	topbar_url = encodeURI(topbar_url);
	var topbar_iframe = '<iframe style="display:none" id="topbar_iframe'+con_index+'" name="topbar_iframe'+con_index+'" src="" ></iframe>';
	$('body').append(topbar_iframe);
	$('#topbar_iframe'+con_index).attr('src',topbar_url);

	$('#topbar_iframe'+con_index).bind('load',function()
	{
		var topbar_value          = document.getElementById("topbar_iframe"+con_index).contentWindow;
		topbar_content[con_index] = topbar_value.document.body.innerHTML;

		$("#webtop_product_hrefs").html(topbar_content[con_index]);
	});
}

jQuery(function($){
	
	$("#webtop_product_ul > li").mouseover(function(){
		$(this).siblings().find("a").attr("class","product-tab-list");
		$(this).find("a").addClass("list-on");
		
		var con_index = $(this).index();

		if(topbar_content[con_index]==0)
		{
			get_topbar_url(con_index);
		}
		else
		{
			$("#webtop_product_hrefs").html(topbar_content[con_index]);
		}
	});
	
});

var topbar_news;
jQuery(function($){
	
	//右侧滚动新闻预置
	var topbar_right_url = "/webtop/webtop_news.html?rnd="+Math.random();
	topbar_right_url = encodeURI(topbar_right_url);
	var topbar_right_iframe = '<iframe style="display:none" id="topbar_right_iframe" name="topbar_right_iframe" src="" ></iframe>';
	$('body').append(topbar_right_iframe);
	$('#topbar_right_iframe').attr('src',topbar_right_url);

	$('#topbar_right_iframe').bind('load',function()
	{
		var topbar_right_value = document.getElementById("topbar_right_iframe").contentWindow;
		topbar_news            = topbar_right_value.document.body.innerHTML;

		$("#webtop_product_news").html(topbar_news);
		//右侧滚动，将第一个新闻 复制到最后
		var webtop_product_news_fist = $("#webtop_product_news > li").first().html();
		$("#webtop_product_news").append("<li>"+webtop_product_news_fist+"</li>");
		
		//右侧新闻链接  滚动
		var webtop_news_num    = $("#webtop_product_news > li").length;//li的数量
		var webtop_news_height = 20;//li的高度
		var webtop_news_len    = 0;//当前top值
		
		function webtop_scroll(){
			webtop_news_len    = webtop_news_len - webtop_news_height;

			$("#webtop_product_news").animate({ top : webtop_news_len + "px" } , "slow" ,function(){
				if(webtop_news_len <= -webtop_news_height*(webtop_news_num-1))
				{
					webtop_news_len = 0;
					$("#webtop_product_news").css("top",webtop_news_len+"px");
				}
				setTimeout(webtop_scroll, 3000);
			});	
		}
		
		setTimeout(webtop_scroll, 3000);
	});	

});
</script><script type="text/javascript" src="http://res.2125.com/js/main.js?v=201301232028"></script>

<script type="text/javascript">
function getBrowser()
{
 var bro = navigator.userAgent.toLowerCase();
 if(/msie/.test(bro)) return 'IE' + bro.match(/msie ([\d.]*);/)[1]
 else if(/navigator/.test(bro)) return 'NS' + bro.match(/navigator\/([\d.]*)/)[1]
 else if(/chrome/.test(bro)) return 'CR' + bro.match(/chrome\/([\d]*)/)[1]
 else if(/safari/.test(bro)) return 'SF' + bro.match(/version\/([\d]*)/)[1]
 else if(/opera/.test(bro)) return 'OP' + bro.match(/version\/([\d]*)/)[1]
 else if(/firefox/.test(bro)) return 'FF' + bro.match(/firefox\/([\d]*)/)[1]
 }
 
if(getBrowser() == "CR8")
{
    $('#iframe_seer').css('margin-left','-18px');
}

$(function(){
	//广告
	var get_url   = "/AD/2125_seer_AD.html?rnd="+Math.random();
	get_url       = encodeURI(get_url);
	var ad_iframe = '<iframe style="display:none" id="ad_iframe" name="ad_iframe" src="" ></iframe>';
	$('body').append(ad_iframe);
	$('#ad_iframe').attr('src',get_url);

	$('#ad_iframe').bind('load',function()
	{
		var ad_html         = document.getElementById("ad_iframe").contentWindow;
		var ad_html_content = ad_html.document.body.innerHTML;

		if(ad_html_content != '')
		{
			$("#seer_AD").html(ad_html_content);
			$("#seer_AD").show();
		}
	});
	
	//将双属性的都改为double
	$(".jltj_ul > li").each(function(i){
		if($(this).attr("name").indexOf(" ") > 0 )  
		{  
			$(this).attr("name","double");  
		}  
	});
	
	//$(document).scrollTop(70);
	var index_tag = (decodeURIComponent(location.search).substring(1));//获取查询串
	if(index_tag == "JLDQ")
	{
		$(document).scrollTop(1705);
	}
	else if(index_tag == "MAIN")
	{
		$(document).scrollTop(605);
	}

	$(".jl_title > p > a").click(function(event){
		$(".jl_title > p > a").removeAttr("style");	
		$(this).attr("style","color:#FF6600");

		$(".jltj_ul > li").hide();
		$(".jltj_ul").find("[py='"+ $(this).attr("id") +"']").show();
		$(".ul_top").find('li').removeClass("over");		
		
	});

	$(".jltj_ul > li").mouseover(function(event){
		var type  = $(this).attr("jl_num");
		var id    = $(".jltj_ul > li:visible").index($(this));
		var top   = 100;
		var left  = 100;
		var width = 331;
	
		if(type == 3)
		{
			if(id%8 == 5 || id%8 == 6 || id%8 == 7)
			{
				top  = 145+Math.floor(id/8)*147;
				left = 630;						
			}
			else
			{
				top  = 145+Math.floor(id/8)*147;
				left = 105+Math.floor(id%8)*118;
			}			
		}
		else if(type == 2)
		{
			if(id%8 == 6 || id%8 == 7)
			{
				top  = 145+Math.floor(id/8)*147;
				left = 739;						
			}
			else
			{
				top  = 145+Math.floor(id/8)*147;
				left = 105+Math.floor(id%8)*118;
			}
			width = 222;
		}
		else
		{
			if(id%8 == 7)
			{
				top  = 145+Math.floor(id/8)*147;
				left = 848;						
			}
			else
			{
				top  = 145+Math.floor(id/8)*147;
				left = 105+Math.floor(id%8)*118;
			}
			width = 113;
		}

		$("#open_"+$(this).attr("id")).attr("style","width: "+width+"px; position: absolute; top: "+top+"px; left: "+left+"px; z-index: 2001;");
	});

	$(".jltj_ul > li").mouseout(function(event){
		$("#open_"+$(this).attr("id")).hide();
	});
	
});

function typejl(t,obj)
{	
	var jl_ul = $(".jltj_ul");
	var $this=$(obj);

	$(".jl_title > p > a").removeAttr("style");	
	$(".ul_top").find('li').removeClass("over");
	$this.addClass("over");
	
	if(t=="all")
	{
		jl_ul.find('li').show();	
	}
	else if(t=="融合精灵")
	{
		$(".jltj_ul > li").hide();
		$("[rhtype='融合精灵']").show();
	}
	else
	{
		$(".jltj_ul > li").hide();
		jl_ul.find("[name='"+ t +"']").show();
	}
}

//5分钟后激活获奖提示
jQuery(function($)
{
	creditsplus('webgame');
});
		
document.domain = "2125.com";

var statistic_url = "http://app.2125.com/?c=statistics&d=addgamehit&gid=68101";
statistic_url = encodeURI(statistic_url);
var iframe = '<iframe style="display:none" id="statistic_iframe" src=""></iframe>';
$('body').append(iframe);
$('#statistic_iframe').attr('src',statistic_url);

</script>
<div id="login_box" class="tie_login pop"  style="display:none;">
	<div class="top"><h3>登录</h3><a id="close_btn" class="close" href="javascript:;"></a></div>
	<div class="mid">
		<p>米米号或者密码输入有误,请重新输入！</p>
		<div class="field">
			<label class="mm">米米号/邮箱：</label>
			<input name="uid" class="txt" type="text" tabindex="11" maxLength="64"/>
			<a href="http://account.61.com/register?gid=3" target="_blank" class="blue">申请米米号</a>
		</div>
		<div class="field">
			<label class="mm">密码：</label>
			<input class="txt" name="password" type="password" tabindex="12" maxLength="16"/>
			<a href="http://account.61.com/forget/" target="_blank"  class="blue">忘记密码</a>
		</div>
		<div id="hide_seccode" style="display:none;">
			<div class="field">
				<label class="mm">验证码：</label>
				<input name="seccode" class="yz" autocomplete="off" type="text" tabindex="13" maxLength="4"/>
			</div>
		
			<div class="yanzharea" id="yz_area">
			</div>
			<div class="clear"></div>
		</div>
		<div class="btn">
			<a id="ajax_login" href="javascript:;" class="affirm">登录</a>
		</div>
		<div class="clear"></div>
	</div>
	<div class="btm"></div>	
</div>

<div id="tip_frame" class="tips_frame" style="display:none; position:fixed; bottom:5px; z-index:1501;">
	<div class="top"><a id="tipclose_btn" class="close" href="javascript:;"></a></div>
    <div class="mid">
    	<p id="tip_text1">恭喜你获得了<b id="tip_num" class="red">2</b>点成长值！<br/></p>
        <p id="tip_text2"><a id="tlogin_href" class="blue underline" href="javascript:;">快去登录领取>></a></p>
    </div>
    <div class="btm"></div>
</div>
<script type="text/javascript" src="http://res.2125.com/js/jquery.masker.js?v=201301232028"></script>
<script type="text/javascript" src="http://res.2125.com/js/comm_creditplus.js?v=201301232028"></script>
<script type="text/javascript">
	var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
	document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Ffa3be724d729f256e474a68530bb07a3' type='text/javascript'%3E%3C/script%3E"));
</script>
</body>
</html>
