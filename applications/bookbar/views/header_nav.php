		<div class="not-login no-level2" id="header">
			<div class="bd">
				<h1 class="logo">
					<a href="/"><img alt="" src="<?php echo $this->staticUrl; ?>bookbar/images/logo-new.jpg"><img width="19" height="16" src="<?php echo $this->staticUrl; ?>bookbar/images/ico-home.png?3" class="ico-home"></a>
				</h1>
				<span class=" nav-level-1">
					<a class="n-square" href="/">首页</a><!-- <img src="<?php echo $this->staticUrl; ?>bookbar/images/ico-hot.png" width="24" height="37" class="ico" alt="" /><a href="/jingpin" class="n-classic">精品</a> -->
					<a class="n-bookall" href="/all">书库</a>
					<a class="n-bookall" href="/top10">排行</a>
					<a href="/group/545/">论坛</a>
				</span>
				<div id="person-status" class="person-status"><div class="person-controal"><a href="/accounts/login">登录</a><a class="last" href="/accounts/register">注册</a></div></div>
				<div id="search-top">
					<form action="/rest/" method="get">
						<input type="text" value="" class="search lst is-empty-value ui-autocomplete-input" id="search-global" name="queryString" placeholder="找书、成员、小组、文章" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true">
						<input type="submit" class="lsb" value="">
						<span class="loadIco must-hide"></span>
					</form>
				</div>
			</div>
		</div>
