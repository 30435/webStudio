<?php echo $this->load->view('header_base'); ?>
<link rel="stylesheet" type="text/css"  href="<?php echo $this->staticUrl; ?>cfront/css/style.css"/>
<link rel="stylesheet" type="text/css"  href="<?php echo $this->staticUrl; ?>cfront/css/reset.css"/>
</head>
<body>
	
	<div class="header">
			<div class="nav">
            	<div class="logo fl"></div>
                <p class="nav_r fr"><a href="#" class="logo_all">全部</a> <a href="#">充值</a>|<a href="#">注册</a>|<a href="#">收藏</a>|&nbsp;&nbsp;<a href="#">官方论坛</a></p>
            </div>
	</div>
    
   <div class="zx_ban">
   	<div class="zx_ban_con">
    	<div class="zx_ban_con_r">
        	<p class="zx_p0"><a href="<?php echo $this->categoryInfos[7]['url']; ?>">查看更多>></a><span>知金动态</span></p>
            <ul>
			<?php $newInfos = $controller->_getFrontInfos('webgame', 'new', 1, 8); ?>
			<?php foreach ($newInfos['infos'] as $newInfo) { ?>
				<li><a href="<?php echo $newInfo['url']; ?>" title="<?php echo $newInfo['title']; ?>" ><?php echo $controller->cutstr($newInfo['title'], 30); ?></a></li>
		    <?php } ?>
            </ul>
        </div>
    </div>
   </div>