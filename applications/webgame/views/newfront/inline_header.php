<div class="head-top">
	<div class="top-main">
		<a class="logo" href="<?php echo $this->categoryInfos[8]['bind_domain']; ?>"><img src="<?php echo $this->staticUrl; ?>newfront/images/bg/top-logo.jpg"></a>
		<div class="right">
			<div>
			<?php if (!empty($this->loginedUserInfo)) { ?>
				<a class="logoa" href="javascript:void(0)"><?php echo $this->loginedUserInfo['username']; ?></a>
			<? } else { ?>
				<a class="logoa" href="<?php echo $this->appInfos['passport']['url']; ?>uwebgame/login/">登录官方网站</a>
			<? } ?>
				<a class="gifta" href="javascript:void(0)">礼品</a>
			</div>
		</div>
	</div>
</div>

