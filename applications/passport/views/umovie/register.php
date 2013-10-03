<html><head>
		<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
<!-- [if lte IE 8]>
<meta http-equiv="X-UA-Compatible" content="IE=7,chrome=1" />
<![endif]-->
<script type="text/javascript" async="" src="http://www.google-analytics.com/ga.js"></script><script type="text/javascript">
	var _loginUser = 'basic';
    var _config = '';
</script>
<link type="text/css" rel="stylesheet" href="http://img.motieimg.com/_resources/css/core/core.packed.css?201301311453">

<link type="text/css" rel="stylesheet" href="http://img.motieimg.com/_resources/css/model/ui-lightness/jquery-ui-1.8.16.custom.min.css">
<link type="text/css" rel="stylesheet" href="http://img.motieimg.com/_resources/css/model/model.packed.css?201302270930">


<!--[if IE 6]>
<script type="text/javascript" src="http://img.motieimg.com/_resources/js/plugins/DD_belatedPNG.js"></script>
<script type="text/javascript"> document.execCommand("BackgroundImageCache", false, true); </script>
<![endif]-->
<script src="http://img.motieimg.com/_resources/js/release/plugin.js?201211010520" type="text/javascript"></script>

<script src="http://img.motieimg.com/_resources/js/release/Motie.core.packed.js?201309021552" type="text/javascript"></script>

<script type="text/javascript">
	$(function(){
		Mo.init.InitAll();
		Mo.core.collect();
	})
</script>



		<script src="http://img.motieimg.com/_resources/js/plugins/jquery.infieldlabel.min.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(function(){
				jQuery.validator.addMethod("userName", function(value, element) { 
					return this.optional(element) || /^[\u0391-\uFFE5\w]+$/.test(value); 
				}, "用户名只能包括中文字、英文字母、数字和下划线"); 
				
				$(".default-value label").inFieldLabels();
				
				$('#signForm').validate({
					rules:{
						email: {
							 required: true,
							 email: true,
							 remote: {
								type: "POST",
								url: '/ajax/accounts/checkemail',
								data: { email: function (){ return $('#email').val() }}
							 }
						},
						password: {
							required: true,
							minlength: 6
						},
						password1: {
							required: true,
							minlength: 6
						},
						code: { 
							required: true,
							minlength: 4
						},
						name: {
							required: true,
							minlength: 2,
							maxlength: 14,
							userName: true,
							remote: {
								type: 'post',
								url: '/ajax/accounts/checkname',
								data: { name: function(){ return $('#name').val() } } 
							}
						}
					},
					messages: {
						email: {
							required: '请填写E-mail',
							email: '请填写正确的E-mail格式',
							remote: '邮箱已被注册！'
						},
						password: {
							required: '请填写密码',
							minlength: '请至少填写6位密码'
						},
						password1: {
							required: '请填写密码',
							minlength: '请至少填写6位密码'
						},
						code: {
							required: '请输入验证码',
							minlength: '验证码为4位'
						},
						name: {
							required: '请输入昵称',
							remote: '昵称已被使用！',
							minlength: '请至少填写2个字符',
							maxlength: '仅可输入14个字符你'
						}
					},
					errorPlacement: function(error, element) {
						 $('#'+element.attr('id')+'-message').html(error).addClass('is-error');
					}
				});
				
				$('.text-login').blur(function(){
					$(this).valid();
				});
				
				$(".color-0682c7").click(function(){
					var t = Math.ceil(Math.random()*1000000000000);
					$(".auth-code &gt; img").attr("src", "/ajax/auth/code?t="+ t);
					$("#codeHidden").val(t);
				});
				
				Motie.changeCity({
					handle: '#selCityBtn'
				})
			})
		</script>
		<title>加入磨铁_磨铁</title>
		<style type="text/css">
			.margintop{height:20px;}
			.login { position: static; margin: 0; }
			.login .bd { padding: 30px }
			.login .bd td { vertical-align: middle; }
			.login .bd .ar { padding-right: 20px; }
			td.desc { padding-top: 0; padding-left: 15px; }
			.mod-suggested-follow { width: 570px; margin: 0 auto; padding-top: 30px; padding-bottom: 40px; }
			.p-title { margin-bottom: 10px!important; font-size: 24px!important; background: url(http://img.motieimg.com/_resources/css/model/img/title-register.gif) no-repeat 10px center; padding: 10px 0 10px 50px; }
			.login .input-wrap input { width: 164px; }
		</style>
	<!--[if IE]>
<link href="http://img.motieimg.com/_resources/css/style-ie.css?201209101757" rel="stylesheet" type="text/css" />
<![endif]--> 
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F787f56b1cbcc88565530881379078614' type='text/javascript'%3E%3C/script%3E"));
</script><script type="text/javascript" src=" http://hm.baidu.com/h.js?787f56b1cbcc88565530881379078614"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-25001926-1']);
  _gaq.push(['_setDomainName', '.motie.com']);
  _gaq.push(['_addOrganic', 'baidu', 'word']);
  _gaq.push(['_addOrganic', 'soso', 'w']);
  _gaq.push(['_addOrganic', '3721', 'name']);
  _gaq.push(['_addOrganic', 'yodao', 'q']);
  _gaq.push(['_addOrganic', 'vnet', 'kw']);
  _gaq.push(['_addOrganic', 'sogou', 'query']);
  _gaq.push(['_trackPageview']);
  _gaq.push(['_trackPageLoadTime']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
	<body class="page-type-special">
		<div class="body-bg">
			<!--start header -->
			

       
<!-- 1 year -->
<div class=" not-login no-level2" id="header">
	<div class="bd">
		<h1 class="logo">
			<a href="/"><img alt="" src="http://img.motieimg.com/_assets/logo-new.jpg"><img width="19" height="16" src="http://img.motieimg.com/_assets/ico-home.png?3" class="ico-home"></a>
		</h1>
		<!-- end logo -->
		
		<!-- nav level 1-->
		<span class=" nav-level-1">
			<a class="n-square" href="/">首页</a><!-- <img src="http://img.motieimg.com/_assets/ico-hot.png" width="24" height="37" class="ico" alt="" /><a href="/jingpin" class="n-classic">精品</a> -->
			<a class="n-bookall" href="/all">书库</a>
			<a class="n-bookall" href="/top10">排行</a>
			<a href="/group/545/">论坛</a>
			
		</span>
		<!-- end level 1 -->
		
			
		
		
		
		
		
		
			<div id="person-status" class="person-status">
				<div class="person-controal">
					<a href="/accounts/login">登录</a><a class="last" href="/accounts/register">注册</a>
				</div>
			</div>
				
		<!-- end person-status -->
		<div id="search-top">
			<form action="/rest/" method="get">
				<input type="text" value="" class="search lst is-empty-value ui-autocomplete-input" id="search-global" name="queryString" placeholder="找书、成员、小组、文章" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true">
				<input type="submit" class="lsb" value="">
				<span class="loadIco must-hide"></span>
			</form>
		</div><!-- end search top -->
	</div>
</div>
			<!-- end header -->
			<div class="wrap">
				<div id="main">
					<div class="left">
							<div class="mod-suggested-follow">
								<h1 class="p-title">
									注册成为磨铁会员：
								</h1>
								<form id="signForm" action="/accounts/register" method="post">
								<div class="login mod">
									<div class="bd">
										
										
										<table>
											<tbody><tr>
												<td width="70" class="fz-14 ar">邮箱：</td>
												<td width="195">
													<div class="input-wrap default-value">
														<div class="input-bd">
															<label class="default" for="email">邮箱</label>
															<input type="text" value="" id="email" name="email" class="text-login">
														</div>
													</div>
												</td>
												<td id="email-message" class="desc">
													请填写常用邮箱作为磨铁账号，为保证能够收到激活邮件，推荐使用网易，QQ，新浪邮箱
												</td>
											</tr>
											<tr class="margintop"><td colspan="3"></td></tr>
											<tr>
												<td class="fz-14 ar">密码：</td>
												<td width="195">
													<div class="input-wrap default-value">
														<div class="input-bd">
															<label class="default" for="password">密码</label>
															<input type="password" value="" class="text-login" id="password" name="password">
														</div>
													</div>
												</td>
												<td id="password-message" class="desc">
													请设置不少于6位的密码
												</td>
											</tr>
											<tr class="margintop"><td colspan="3"></td></tr>
											<tr>
												<td class="fz-14 ar ">昵称：</td>
												<td width="195">
													<div class="input-wrap default-value">
														<div class="input-bd">
															<label class="default" for="name">昵称</label>
															<input type="text" value="" class="text-login" id="name" name="name" maxlength="14">
														</div>
													</div>
												</td>
												<td id="name-message" class="desc">
													可使用中英文、数字与下划线
												</td>
											</tr>
											<tr class="margintop"><td colspan="3"></td></tr>
											<tr>
												<td class="fz-14 ar">地区：</td>
												<td width="195">
													<div class="input-wrap">
														<div class="input-bd">
															<a class="blue" style="position: absolute; right: 10px; top: 10px; font-size: 14px; border-left: 1px solid #ccc; padding-left: 10px;" href="javascript:;" id="selCityBtn">选择</a>
															<input type="text" value="" readonly="readonly" class="text-login" id="selCity" name="selCity">
															<input type="hidden" value="0" name="cityId" id="cityId">
														</div>
													</div>
												</td>
												<td id="password-message" class="desc">
													请选择地区
												</td>
											</tr>
											<tr class="margintop"><td colspan="3"></td></tr>
											<tr>
												<td class="fz-14 ar">验证码：</td>
												<td width="195">
													<div class="auth-code">
														<img alt="" class="fl" src="/ajax/auth/code?t=1380683697305">
														<div class="input-wrap fr">
															<div class="input-bd">
																<input type="text" id="code" value="" name="code" class="text-login" maxlength="4">
																<input type="hidden" value="1380683697305" name="t" id="codeHidden"> 
															</div>
														</div>
													</div>
												</td>
												<td class="desc">
													<a class="color-0682c7" href="javascript:;">看不清？换一张</a>
													<span id="code-message">输入验证码</span>
												</td>
											</tr>
											<tr>
												<td></td>
												<td class="al" colspan="2">
													<div class="sp-20"></div>
													<input type="submit" class="M-button-b M-button-submit btn-register" value="注册">
												</td>
											</tr>
										</tbody></table>
									</div>
								</div>
								</form>
							</div>
					</div>
				</div>
			</div>
		</div><!--end body-bg -->
		<!-- start footer -->
		
		<!-- end footer -->
	
<div class="fixed-rb" style="opacity: 0; display: none;"><a title="返回顶端" href="javascript:;" class="goTop"></a></div><ul class="ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all search-result" role="listbox" aria-activedescendant="ui-active-menuitem" style="z-index: 11; top: 0px; left: 0px; display: none;"></ul></body></html>