	</div>
	<div id="footer">
		<div class="bd">
			<h1 class="logo"><a href="#"><img alt="Motie" src="<?php echo $this->staticUrl; ?>bookbar/images/logo-footer.gif"></a></h1>
			<div class="sp-20"></div>
			<div class="lpic clear">
				<h5>合作伙伴</h5> 
				<div class="blogroll">
					<a boxid='19' target="_blank" href="http://www.motie.com/home">磨铁中文网</a>
					<a target="_blank" href="http://vip.book.sina.com.cn/">新浪原创</a>
				</div>
			</div>
			<div class="rtext">
				<div class="c1" style="height: 70px">
					<p>
						<a href="http://weibo.com/motiezhongwenwang" target="_blank" class="link-sina"><img class="png" src="http://img.motieimg.com/_assets/wb_logo16_a.png" alt="" />官方微博</a>
						<a href="http://e.weibo.com/qianshuchuban" target="_blank" class="link-qianshu"><img class="png" src="http://img.motieimg.com/_assets/shu1000.gif?201211191543" alt="" height="12" /></a>
					</p>
					<p>
						<a href="http://shuzhan.motie.com" target="_blank" class="link-iphone"><img class="png" src="http://img.motieimg.com/_assets/ico-iphone.png" width="14" height="14" /> 苹果客户端：磨铁书栈</a>
					</p>
					<p>
						<a href="http://motie.cn" target="_blank" style="color: #C7C7C7"><img style="margin: 0 2px 0 2px;vertical-align:-4px;" src="http://img.motieimg.com/_assets/ico-mobile.gif" width="10" height="16" /> 磨铁手机版</a>
					</p>
				</div>
				<div class="c2" style="padding-bottom: 10px;">
					<a href="/about"><b>关于磨铁</b></a>&nbsp;
					<a href="/about/reward2013">奖励计划</a>&nbsp;
					<a href="/about/contactus">联系我们</a>&nbsp;
					<a href="#">返回页首↑</a>
				</div>
			</div>
			<p class="cp">
				北京磨铁数盟信息技术有限公司 版权所有<br />
				Copyright &copy; 2011-2012 Motie.com All Rights Reserved. <br />
				新出网证京字162号&nbsp;&nbsp;文网文[2012]0129-045号&nbsp;&nbsp;京公网安备 11010202005938&nbsp;&nbsp;京ICP证110262号&nbsp;&nbsp;<a href="http://www.hd315.gov.cn/beian/view.asp?bianhao=010202012091700010" class="link-biaoshi" target="_blank"><img src="http://img.motieimg.com/_assets/biaoshi.gif?1413" width="14" alt="" />经营性网站备案信息</a>&nbsp;&nbsp;<a href="http://www.miitbeian.gov.cn" target="_blank">京ICP备11010626号-1</a>&nbsp;&nbsp;高新技术企业&nbsp;&nbsp;GR201211001345 
			</p>
		</div>
	</div>
</div>
</body>
	<script type="text/javascript">
		$(function(){
			var sf = window._STAFF_FUNCTION || false, sf_c = sf && sf.tools.collect;
			(function(){
				var allTips = {}, tabs = $('#Billboard .a3 .tabs'), list = $('#Billboard .a3 .list');
				new Motie.Tab({
					handle: tabs.find('li'),
					handleClass: "",
					handleCurrentClass: "current",
					toggleItem: list,
					callback: function(index, handle, item){
						var cid = handle.data('cid');
						if(sf && sf_c.createOver){
							if(!allTips[cid]){
								allTips[cid] = $('body .mo-ui-collect-tips[collect-id='+cid+']').each(function(){
									sf_c.position( $(this).data('element'),$(this))
								});
							}
							for(var i in allTips){
								allTips[i].hide();
							}
							allTips[cid].show()
						}
					}
				});
			})()
			
			var tb2 = $(".tabs-content-2");
			new Motie.Tab({
				handle: "#Billboard .a1 .list li",
				handleClass: "",
				handleCurrentClass: "current",
				toggleItem: "#Billboard .a1 .tabs-content",
				auto: !0,
				callback: function(a) {
					tb2.hide().eq(a).show()
				},
				duration: 4e3
			});
			
			new Mo.Tab({
				handle: $('.mod-chapter-update .tabs2 li'),
				handleClass : '',
				handleCurrentClass : 'current',
				toggleItem : $('.mod-chapter-update .list')
			})
		})
	</script>
</html>