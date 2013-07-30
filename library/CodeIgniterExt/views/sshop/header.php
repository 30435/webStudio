<?php echo doctype(); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $this->headerTitle; ?></title>
<?php
	echo meta($this->metaInfos);
	echo link_tag($this->staticUrl . 'sshop/favicon.ico', 'shortcut icon', 'image/ico');
	echo link_tag($this->staticUrl . 'sshop/animated_favicon.gif', 'icon', 'image/gif');
	echo link_tag($this->staticUrl . 'sshop/temp/upsex.css?20130107074556', 'stylesheet', 'text/css');
	echo link_tag($this->staticUrl . 'sshop/themes/moonbasa/style.css', 'stylesheet', 'text/css');
?>
<script src="<?php echo $this->staticUrl; ?>common/script/jquery-1.8.0.min.js" type="text/javascript" language="javascript"></script>
<script type="text/javascript" language="javascript">
var passportUrl = "<?php echo $this->appInfos['passport']['url']; ?>";
</script>
</head>
<body>
        <div id="bdshare_s">
            <div id="bdshare_l" style="display: none;">
                <div id="bdshare_l_c">
                    <h6>
                        分享到
                    </h6>
                    <ul>
                        <li>
                            <a class="bds_mshare mshare" href="#">
                                一键分享
                            </a>
                        </li>
                        <li>
                            <a class="bds_qzone qqkj" href="#">
                                QQ空间
                            </a>
                        </li>
                        <li>
                            <a class="bds_tsina xlwb" href="#">
                                新浪微博
                            </a>
                        </li>
                        <li>
                            <a class="bds_baidu bdsc" href="#">
                                百度搜藏
                            </a>
                        </li>
                        <li>
                            <a class="bds_renren rrw" href="#">
                                人人网
                            </a>
                        </li>
                        <li>
                            <a class="bds_tqq txwb" href="#">
                                腾讯微博
                            </a>
                        </li>
                        <li>
                            <a class="bds_bdxc bdxc" href="#">
                                百度相册
                            </a>
                        </li>
                        <li>
                            <a class="bds_kaixin001 kxw" href="#">
                                开心网
                            </a>
                        </li>
                        <li>
                            <a class="bds_tqf txpy" href="#">
                                腾讯朋友
                            </a>
                        </li>
                        <li>
                            <a class="bds_tieba bdtb" href="#">
                                百度贴吧
                            </a>
                        </li>
                        <li>
                            <a class="bds_douban db" href="#">
                                豆瓣网
                            </a>
                        </li>
                        <li>
                            <a class="bds_tsohu shwb" href="#">
                                搜狐微博
                            </a>
                        </li>
                        <li>
                            <a class="bds_bdhome bdhome" href="#">
                                百度新首页
                            </a>
                        </li>
                        <li>
                            <a class="bds_sqq sqq" href="#">
                                QQ
                            </a>
                        </li>
                        <li>
                            <a class="bds_thx thx" href="#">
                                和讯微博
                            </a>
                        </li>
                        <li>
                            <a class="bds_more" href="#">
                                更多...
                            </a>
                        </li>
                    </ul>
                    <p>
                        <a class="goWebsite" href="#">
                            百度分享
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <div id="hd">
            <div style="width:100%;" class="box J_TBox">
                <div class="sun_header_top">
                    <div class="header_top">
                        <ul class="top_list">
                            <li class="on">
                                <a rel="nofollow" href="/">
                                    爱向上商城
                                </a>
                            </li>
                            <li class="">
                                <a rel="nofollow" href="/club/">
                                    爱向上情趣CLUB
                                </a>
                            </li>
                            <!-- <li class=""><a href="/share/faq.php" rel="nofollow">性困惑咨询</a></li> -->
                            <!-- <li class=""><a href="/share/share.php" rel="nofollow">美女情趣分享</a></li> -->
                        </ul>
                        <div class="top_txt">
                            国内首家真人分享类性健康用品购物网站
                        </div>
                        <ul id="ECS_MEMBERZONE" class="tm">
                            <!-- <li><a href="http://wap.upsex.cn/">手机版</a></li> -->
                            <li class="c32">
                                <a rel="nofollow" href="/user.php">
                                    登录
                                </a>
                                |
                                <a rel="nofollow" href="/user.php?act=register">
                                    注册
                                </a>
                            </li>
                            <li class="newweibo">
                                <a rel="nofollow" href="/oauth/weibo">
                                    <img src="<?php echo $this->staticUrl; ?>sshop/themes/moonbasa/images/weibo.gif" alt="">
                                </a>
                            </li>
                            <li class="newweibo">
                                <a rel="nofollow" href="/oauth/qq">
                                    <img src="<?php echo $this->staticUrl; ?>sshop/themes/moonbasa/images/qq.gif" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="layout grid-m">
                <div class="main-wrap">
                    <div style="width:100%;" class="box J_TBox">
                        <div class="myhead">
                            <div class="bd">
                                <div id="append_parent">
                                </div>
                                <div class="hshow">
                                    <h2>
                                        <a href="/">
                                            <img src="<?php echo $this->staticUrl; ?>sshop/images/logo0830.gif">
                                        </a>
                                    </h2>
                                    <div class="tel">
                                        <img src="<?php echo $this->staticUrl; ?>sshop/themes/moonbasa/images/20121212/tel.gif">
                                    </div>
                                </div>
                                <div data-widget-config="{'<?php echo $this->staticUrl; ?>sshop/trigger':'.nav','dmenu':'.smenu','align':{'offset':[-1,-2],'points':['bl','tl']}}"
                                data-widget-type="Drop" class="mymenu J_TWidget">
                                    <ul class="nav">
                                        <li class="li">
                                            <a class="b" href="/">
                                                <strong>
                                                    首页
                                                </strong>
                                            </a>
                                        </li>
                                        <li class="li s0">
                                            <a target="_blank" class="b" href="/nvxingyongpin/">
                                                <strong>
                                                    女性自爱
                                                </strong>
                                            </a>
                                            <div class="smenu">
                                                <div class="s_dropdown">
                                                    <div class="s_bd">
                                                        <div class="s_list">
                                                            <div class="goods">
                                                                <div class="tit">
                                                                    <a target="_blank" href="/anmobang/">
                                                                        阴道按摩棒：
                                                                    </a>
                                                                </div>
                                                                <ul class="lists">
                                                                    <li>
                                                                        <a target="_blank" href="/category-19-b0-min0-max0-attr0.0.3590.0.0.0.0.0.html">
                                                                            G点 - 专攻G点高潮
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank" href="/category-19-b0-min0-max0-attr2946.0.0.0.0.0.0.0.html">
                                                                            内外多点 - 阴道阴蒂双刺激
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank" href="/category-19-b0-min0-max0-attr0.2947.0.0.0.0.0.0.html">
                                                                            伸缩 + 转珠
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank" href="/category-19-b0-min0-max0-attr0.0.0.0.0.0.0.0.5124.html">
                                                                            传统抽插
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank" href="/tiaodan/">
                                                                            跳蛋 - 小巧经济
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank" href="/category-19-b0-min0-max0-attr0.0.0.3772.0.0.0.0.html">
                                                                            穿戴 + 遥控
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="goods">
                                                                <div class="tit">
                                                                    <a target="_blank" href="/fangzhenyangju/">
                                                                        逼真阳具：
                                                                    </a>
                                                                </div>
                                                                <ul class="lists">
                                                                    <li>
                                                                        <a target="_blank" href="/category-26-b0-min0-max0-attr0.0.0.5192.html">
                                                                            仿真 + 振动
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank" href="/zuoaijiqi/">
                                                                            仿真 + 自动抽插强动力
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank" href="/category-26-b0-min0-max0-attr0.0.0.0.5198.html">
                                                                            实体仿真 - 经久耐用
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="goods">
                                                                <div class="tit">
                                                                    <a target="_blank" href="/yindiciji/">
                                                                        外阴振动器：
                                                                    </a>
                                                                </div>
                                                                <ul class="lists">
                                                                    <li>
                                                                        <a target="_blank" href="/category-23-b0-min0-max0-attr3016.0.0.html">
                                                                            阴蒂按摩
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank" href="/category-23-b0-min0-max0-attr0.4198.0.html">
                                                                            口交器
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank" href="/avbang/">
                                                                            AV按摩棒 - 强动力强刺激
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank" href="/tiaodan/">
                                                                            跳蛋 - 小巧方便
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank" href="/category-23-b0-min0-max0-attr0.0.0.5169.0.html">
                                                                            振动C裤 - 方便穿戴
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="goods">
                                                                <div class="tit">
                                                                    <strong>
                                                                        全身敏感带刺激：
                                                                    </strong>
                                                                </div>
                                                                <ul class="lists">
                                                                    <li>
                                                                        <a target="_blank" href="/category-23-b0-min0-max0-attr0.0.0.0.5206.html">
                                                                            便携振动器
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank" href="/tiaodan/">
                                                                            跳蛋
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank" href="/rufangciji/">
                                                                            乳房按摩器
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank" href="/houtingwanju/">
                                                                            后庭振动器
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="goods">
                                                                <div class="tit">
                                                                    <a target="_blank" href="/nvyongwanju/">
                                                                        配套用品：
                                                                    </a>
                                                                </div>
                                                                <ul class="lists">
                                                                    <li>
                                                                        <a target="_blank" href="/category-425-b0-min0-max0-attr0.0.0.0.3051.html">
                                                                            清洁用品
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank" href="/category-425-b0-min0-max0-attr0.3151.0.0.0.html">
                                                                            消毒保健
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank" href="/category-425-b0-min0-max0-attr0.0.5209.0.0.html">
                                                                            辅助配件
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="more">
                                                                <span class="t01">
                                                                    <a target="_blank" href="/category-448-b0.html">
                                                                        限时特价
                                                                    </a>
                                                                </span>
                                                                <span class="t02">
                                                                    <a target="_blank" href="/femaletoys/">
                                                                        热销排行
                                                                    </a>
                                                                </span>
                                                                <span class="t03">
                                                                    <a target="_blank" href="/nvxingyongpin/">
                                                                        &gt;&gt;女性自爱频道
                                                                    </a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="s_guide">
                                                            <div class="tit">
                                                                购买指南
                                                            </div>
                                                            <ul class="lists">
                                                                <li>
                                                                    <a target="_blank" href="/category-476-b0.html">
                                                                        适合城市金领使用的高端情趣玩具
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a target="_blank" href="/category-473-b0.html">
                                                                        初级用户最喜欢的高潮玩具
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a target="_blank" href="/topic/95">
                                                                        天天拥有一个强壮男人，最嗨女性玩具
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a target="_blank" href="/category-475-b0.html">
                                                                        最经济最具性价比的女性自爱玩具
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a target="_blank" href="/category-477-b0.html">
                                                                        一边爱抚一边自爱的最畅销情趣玩具
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a target="_blank" href="/topic/91/">
                                                                        不知疲倦的猛男-最强爱爱机器
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a target="_blank" href="/category-478-b0.html">
                                                                        最完美体验的口交玩具
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a target="_blank" href="/topic/97/">
                                                                        2012年度情趣用品排行榜
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a target="_blank" href="/topic/92/">
                                                                        干净、美观、耐用、不吸水（吸水让阴道干涩），玻璃自爱器具大全
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="s_ads">
                                                            <ul class="adpic">
                                                                <li class="tit">
                                                                    <strong>
                                                                        国际名牌：
                                                                    </strong>
                                                                </li>
                                                                <li>
                                                                    <a target="_blank" href="/lelo/">
                                                                        <img src="<?php echo $this->staticUrl; ?>sshop/data/brandlogo/1324350797538630459.jpg"
                                                                        alt="">
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a target="_blank" href="/jejoue/">
                                                                        <img src="<?php echo $this->staticUrl; ?>sshop/data/brandlogo/1324350620999069588.jpg"
                                                                        alt="">
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a target="_blank" href="/funfactory/">
                                                                        <img src="<?php echo $this->staticUrl; ?>sshop/data/brandlogo/1324350423749186074.jpg"
                                                                        alt="">
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a target="_blank" href="/brand-118-c0.html">
                                                                        <img src="<?php echo $this->staticUrl; ?>sshop/data/brandlogo/1343736252963644050.jpg"
                                                                        alt="">
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="li s1">
                                            <a target="_blank" class="b" href="/nanxingyongpin/">
                                                <strong>
                                                    男性自爱
                                                </strong>
                                            </a>
                                            <div class="smenu">
                                                <div class="s_dropdown">
                                                    <div class="s_bd">
                                                        <div class="s_list">
                                                            <div class="goods">
                                                                <div class="tit">
                                                                    <a target="_blank" href="/feijibei/">
                                                                        自爱飞机杯：
                                                                    </a>
                                                                </div>
                                                                <ul class="lists">
                                                                    <li>
                                                                        <a target="_blank" href="/category-389-b0-min0-max0-attr0.0.0.0.3311.0.0.0.0.0.0.0.0.html">
                                                                            仿阴道
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank" href="/category-389-b0-min0-max0-attr0.0.0.3323.0.0.0.0.0.0.0.0.0.html">
                                                                            仿口交
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank" href="/category-389-b0-min0-max0-attr0.4546.0.0.0.0.0.0.0.0.0.0.0.html">
                                                                            一端阴道一端口庭
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank" href="/category-389-b0-min0-max0-attr3363.0.0.0.0.0.0.0.0.0.0.0.0.html">
                                                                            仿后庭
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank" href="/category-389-b0-min0-max0-attr0.0.0.0.0.0.3320.0.0.0.0.0.0.html">
                                                                            振动 + 抽插
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank" href="/category-389-b0-min0-max0-attr0.0.0.0.0.0.0.0.0.4582.0.0.0.html">
                                                                            延时训练 + 抽插
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank" href="/category-389-b0-min0-max0-attr0.0.0.0.0.0.0.0.0.0.0.0.0.5211.html">
                                                                            超真人感觉 - 进口高科技材质
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="goods">
                                                                <div class="tit">
                                                                    <a target="_blank" href="/category-364-b0-min0-max0-attr0.3200.html">
                                                                        无勃起自爱：
                                                                    </a>
                                                                </div>
                                                                <ul class="lists">
                                                                    <li>
                                                                        <a target="_blank" href="/category-364-b0-min0-max0-attr0.3200.html">
                                                                            助勃 + 自慰器
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="goods">
                                                                <div class="tit">
                                                                    <strong>
                                                                        真人仿真：
                                                                    </strong>
                                                                </div>
                                                                <ul class="lists">
                                                                    <li>
                                                                        <a target="_blank" href="/ribennvyou/">
                                                                            女优名器 - 女优私处倒模
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank" href="/fangzhenyindao/">
                                                                            臀胸仿真 - 女性臀部胸部仿真
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="goods">
                                                                <div class="tit">
                                                                    <a target="_blank" href="/chongqiwawa/">
                                                                        充气娃娃：
                                                                    </a>
                                                                </div>
                                                                <ul class="lists">
                                                                    <li>
                                                                        <a target="_blank" href="/category-117-b0-min0-max0-attr0.0.0.2949.0.0.html">
                                                                            充气娃娃
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank" href="/category-117-b0-min0-max0-attr0.2957.0.0.0.0.html">
                                                                            实体娃娃
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="goods">
                                                                <div class="tit">
                                                                    <a target="_blank" href="/houtingyongpin/">
                                                                        男性G点：
                                                                    </a>
                                                                </div>
                                                                <ul class="lists">
                                                                    <li>
                                                                        <a target="_blank" href="/houtingyongpin/">
                                                                            前列腺按摩器
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="goods">
                                                                <div class="tit">
                                                                    <a target="_blank" href="/nanyongwanju/">
                                                                        配套用品：
                                                                    </a>
                                                                </div>
                                                                <ul class="lists">
                                                                    <li>
                                                                        <a target="_blank" href="/category-426-b0-min0-max0-attr0.0.0.0.3136.html">
                                                                            清洁用品
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank" href="/category-426-b0-min0-max0-attr0.0.3137.0.0.html">
                                                                            消毒保健
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank" href="/category-426-b0-min0-max0-attr5227.0.0.0.0.html">
                                                                            辅助配件
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="more">
                                                                <span class="t01">
                                                                    <a target="_blank" href="/category-472-b0.html">
                                                                        限时特价
                                                                    </a>
                                                                </span>
                                                                <span class="t02">
                                                                    <a target="_blank" href="/maletoys/">
                                                                        热销排行
                                                                    </a>
                                                                </span>
                                                                <span class="t03">
                                                                    <a target="_blank" href="/nanxingyongpin/">
                                                                        &gt;&gt;男性自爱频道
                                                                    </a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="s_guide">
                                                            <div class="tit">
                                                                购买指南
                                                            </div>
                                                            <ul class="lists">
                                                                <li>
                                                                    <a target="_blank" href="/category-479-b0.html">
                                                                        最经济最方便携带的自慰器
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a target="_blank" href="/category-480-b0.html">
                                                                        男人最喜欢的女星私处自慰器
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a target="_blank" href="/category-481-b0.html">
                                                                        深喉口交、允吸酥麻，男人最刺激的自慰器
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a target="_blank" href="/category-482-b0.html">
                                                                        性价比最高的充气娃娃
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a target="_blank" href="/category-483-b0.html">
                                                                        不射精、护肾、保养前列腺的男性自慰
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a target="_blank" href="/topic/97/">
                                                                        2012年度情趣用品排行榜
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="s_ads">
                                                            <ul class="adpic">
                                                                <li class="tit">
                                                                    <strong>
                                                                        国际名牌：
                                                                    </strong>
                                                                </li>
                                                                <li>
                                                                    <a target="_blank" href="/tenga/">
                                                                        <img src="<?php echo $this->staticUrl; ?>sshop/data/brandlogo/1324907777303002149.jpg"
                                                                        alt="">
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a target="_blank" href="/fleshlight/">
                                                                        <img src="<?php echo $this->staticUrl; ?>sshop/data/brandlogo/1326082396999531380.jpg"
                                                                        alt="">
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a target="_blank" href="/funfactory/">
                                                                        <img src="<?php echo $this->staticUrl; ?>sshop/data/brandlogo/1324350423749186074.jpg"
                                                                        alt="">
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="li s2">
                                            <a target="_blank" class="b" href="/men/">
                                                <strong>
                                                    强大男人
                                                </strong>
                                            </a>
                                            <div class="smenu">
                                                <div class="s_dropdown">
                                                    <div class="s_bd">
                                                        <div class="s_list">
                                                            <div class="goods">
                                                                <div class="tit">
                                                                    <strong>
                                                                        性生活延时：
                                                                    </strong>
                                                                </div>
                                                                <ul class="lists">
                                                                    <li>
                                                                        <a target="_blank" href="/yanshipenji/">
                                                                            速效延时喷剂
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank" href="/yanshitao/">
                                                                            延时套
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank" href="/yanshihuan/">
                                                                            延时套环 - 延时 + 刺激
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank" href="/category-50-b0-min0-max0-attr0.0.0.0.0.0.2931.0.0.html">
                                                                            延时润滑
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="goods">
                                                                <div class="tit">
                                                                    <strong>
                                                                        早泄防治：
                                                                    </strong>
                                                                </div>
                                                                <ul class="lists">
                                                                    <li>
                                                                        <a target="_blank" href="/yanshixunlian/">
                                                                            防早泄训练
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank" href="/category-459-b0.html">
                                                                            包皮纠正
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="goods">
                                                                <div class="tit">
                                                                    <strong>
                                                                        阴茎增大：
                                                                    </strong>
                                                                </div>
                                                                <ul class="lists">
                                                                    <li>
                                                                        <a target="_blank" href="/category-363-b0-min0-max0-attr0.4791.0.html">
                                                                            增大器 - 促进阴茎生长
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank" href="/category-363-b0-min0-max0-attr3225.0.0.html">
                                                                            加长套
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="goods">
                                                                <div class="tit">
                                                                    <strong>
                                                                        助勃：
                                                                    </strong>
                                                                </div>
                                                                <ul class="lists">
                                                                    <li>
                                                                        <a target="_blank" href="/category-364-b0-min0-max0-attr3198.0.html">
                                                                            助勃喷剂
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank" href="/category-364-b0-min0-max0-attr0.3200.html">
                                                                            助勃器具 - 快速安全有效
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="goods">
                                                                <div class="tit">
                                                                    <strong>
                                                                        诱惑香水：
                                                                    </strong>
                                                                </div>
                                                                <ul class="lists">
                                                                    <li>
                                                                        <a target="_blank" href="/nanshixiangshui/">
                                                                            迷情香水
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="more">
                                                                <span class="t01">
                                                                    <a target="_blank" href="/category-460-b0.html">
                                                                        限时特价
                                                                    </a>
                                                                </span>
                                                                <span class="t02">
                                                                    <a target="_blank" href="/category-461-b0.html">
                                                                        热销排行
                                                                    </a>
                                                                </span>
                                                                <span class="t03">
                                                                    <a target="_blank" href="/men/">
                                                                        &gt;&gt;强大男人频道
                                                                    </a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="s_guide">
                                                            <div class="tit">
                                                                购买指南
                                                            </div>
                                                            <ul class="lists">
                                                                <li>
                                                                    <a target="_blank" href="/topic/98/">
                                                                        如何选择延时喷剂
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a target="_blank" href="/category-484-b0.html">
                                                                        年轻人最喜爱的效果最好的外用延时
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a target="_blank" href="/category-485-b0.html">
                                                                        中年人最喜爱的效果好又助勃的外用延时
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a target="_blank" href="/category-486-b0.html">
                                                                        延长阴茎延长时间并更刺激女性的阴茎套
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a target="_blank" href="/aida/yanshi/">
                                                                        根治早泄，爱向上发布2+2延时训练法
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a target="_blank" href="/aida/maleedgeia/">
                                                                        如何让自己的阴茎增大
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a target="_blank" href="/topic/96">
                                                                        费洛蒙香水，闻下就跟你走
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="s_ads">
                                                            <ul class="adpic">
                                                                <li class="tit">
                                                                    <strong>
                                                                        国际名牌：
                                                                    </strong>
                                                                </li>
                                                                <li>
                                                                    <a target="_blank" href="/jo/">
                                                                        <img src="<?php echo $this->staticUrl; ?>sshop/data/brandlogo/1324273269115665972.jpg"
                                                                        alt="">
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a target="_blank" href="/eros/">
                                                                        <img src="<?php echo $this->staticUrl; ?>sshop/data/brandlogo/1324350290378311750.jpg"
                                                                        alt="">
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="li s3">
                                            <a target="_blank" class="b" href="/women/">
                                                <strong>
                                                    风情女人
                                                </strong>
                                            </a>
                                            <div class="smenu">
                                                <div class="s_dropdown">
                                                    <div class="s_bd">
                                                        <div class="s_list">
                                                            <div class="goods">
                                                                <div class="tit">
                                                                    <a target="_blank" href="/suoyin/">
                                                                        缩阴：
                                                                    </a>
                                                                </div>
                                                                <ul class="lists">
                                                                    <li>
                                                                        <a target="_blank" href="/category-377-b0-min0-max0-attr3678.0.0.0.html">
                                                                            植物缩阴产品
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank" href="/category-377-b0-min0-max0-attr0.3668.0.0.html">
                                                                            缩阴锻炼
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="goods">
                                                                <div class="tit">
                                                                    <a href="/fengxiong/">
                                                                        丰胸：
                                                                    </a>
                                                                </div>
                                                                <ul class="lists">
                                                                    <li>
                                                                        <a target="_blank" href="/category-380-b0-min0-max0-attr0.4785.html">
                                                                            外敷丰胸
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank" href="/category-380-b0-min0-max0-attr4034.0.html">
                                                                            丰胸按摩器
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="goods">
                                                                <div class="tit">
                                                                    <a target="_blank" href="/meixiong/">
                                                                        美胸：
                                                                    </a>
                                                                </div>
                                                                <ul class="lists">
                                                                    <li>
                                                                        <a target="_blank" href="/meixiong/">
                                                                            胸部坚挺塑形
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="goods">
                                                                <div class="tit">
                                                                    <a target="_blank" href="/sichumeirong/">
                                                                        私处养护：
                                                                    </a>
                                                                </div>
                                                                <ul class="lists">
                                                                    <li>
                                                                        <a target="_blank" href="/sichumeirong/">
                                                                            外阴修复粉嫩
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank" href="/category-452-b0.html">
                                                                            处女膜修复
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="goods">
                                                                <div class="tit">
                                                                    <a target="_blank" href="/feiluomeng/">
                                                                        诱惑香水：
                                                                    </a>
                                                                </div>
                                                                <ul class="lists">
                                                                    <li>
                                                                        <a target="_blank" href="/feiluomeng/">
                                                                            迷情香水 - 增加性感吸引力
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="more">
                                                                <span class="t01">
                                                                    <a target="_blank" href="/category-462-b0.html">
                                                                        限时特价
                                                                    </a>
                                                                </span>
                                                                <span class="t02">
                                                                    <a target="_blank" href="/category-463-b0.html">
                                                                        热销排行
                                                                    </a>
                                                                </span>
                                                                <span class="t03">
                                                                    <a target="_blank" href="/women/">
                                                                        &gt;&gt;风情女人频道
                                                                    </a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="s_guide">
                                                            <div class="tit">
                                                                购买指南
                                                            </div>
                                                            <ul class="lists">
                                                                <li>
                                                                    <a target="_blank" href="/topic/73/">
                                                                        董卿推荐的缩阴产品-莎娜琳
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a target="_blank" href="/aida/stherb/">
                                                                        全球最畅销的丰胸产品-圣荷,2012新上市！
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a target="_blank" href="/category-487-b0.html">
                                                                        让你的私处由黑木耳变成水蜜桃
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="s_ads">
                                                            <ul class="adpic">
                                                                <li class="tit">
                                                                    <strong>
                                                                        国际名牌：
                                                                    </strong>
                                                                </li>
                                                                <li>
                                                                    <a target="_blank" href="/lelo/">
                                                                        <img src="<?php echo $this->staticUrl; ?>sshop/data/brandlogo/1324350797538630459.jpg"
                                                                        alt="">
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="li s4">
                                            <a target="_blank" class="b" href="/chengrenyouxi/">
                                                <strong>
                                                    双人技巧
                                                </strong>
                                            </a>
                                            <div class="smenu">
                                                <div class="s_dropdown">
                                                    <div class="s_bd">
                                                        <div class="s_list">
                                                            <div class="goods">
                                                                <div class="tit">
                                                                    <a target="_blank" href="/qianxi/">
                                                                        约会技巧：
                                                                    </a>
                                                                </div>
                                                                <ul class="lists">
                                                                    <li>
                                                                        <a target="_blank" href="/category-324-b0-min0-max0-attr0.0.0.0.0.0.5230.html">
                                                                            情色游戏
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank" href="/category-324-b0-min0-max0-attr2991.0.0.0.0.0.html">
                                                                            迷情香水
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="goods">
                                                                <div class="tit">
                                                                    <strong>
                                                                        前戏技巧：
                                                                    </strong>
                                                                </div>
                                                                <ul class="lists">
                                                                    <li>
                                                                        <a target="_blank" href="/category-453-b0.html">
                                                                            挑逗工具
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank" href="/anmojingyou/">
                                                                            情欲按摩
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="goods">
                                                                <div class="tit">
                                                                    <strong>
                                                                        性爱技巧：
                                                                    </strong>
                                                                </div>
                                                                <ul class="lists">
                                                                    <li>
                                                                        <a target="_blank" href="/category-324-b0-min0-max0-attr0.3083.0.0.0.0.html">
                                                                            燃情产品 - 激发性欲
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank" href="/category-72-b0-min0-max0-attr0.0.0.0.html">
                                                                            尝试新爱爱姿势
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank" href="/xinggaochao/">
                                                                            男女共振器 - 爱爱时同时刺激
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="goods">
                                                                <div class="tit">
                                                                    <strong>
                                                                        后庭用品：
                                                                    </strong>
                                                                </div>
                                                                <ul class="lists">
                                                                    <li>
                                                                        <a target="_blank" href="/gangjiaorunhua/">
                                                                            后庭润滑
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank" href="/category-456-b0.html">
                                                                            后庭松弛
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="goods">
                                                                <div class="tit">
                                                                    <strong>
                                                                        SM情趣：
                                                                    </strong>
                                                                </div>
                                                                <ul class="lists">
                                                                    <li>
                                                                        <a target="_blank" href="/smyongpin/">
                                                                            SM用品
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank" href="/category-457-b0.html">
                                                                            角色扮演
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="goods">
                                                                <div class="tit">
                                                                    <strong>
                                                                        同性专区：
                                                                    </strong>
                                                                </div>
                                                                <ul class="lists">
                                                                    <li>
                                                                        <a target="_blank" href="/gay/">
                                                                            GAY用品
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank" href="/les/">
                                                                            拉拉用品
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="goods">
                                                                <div class="tit">
                                                                    <strong>
                                                                        两性保健：
                                                                    </strong>
                                                                </div>
                                                                <ul class="lists">
                                                                    <li>
                                                                        <a target="_blank" href="/ceyun/">
                                                                            测孕测精
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank" href="/xiye/">
                                                                            私处卫生
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="more">
                                                                <span class="t01">
                                                                    <a target="_blank" href="/category-464-b0.html">
                                                                        限时特价
                                                                    </a>
                                                                </span>
                                                                <span class="t02">
                                                                    <a target="_blank" href="/category-465-b0.html">
                                                                        热销排行
                                                                    </a>
                                                                </span>
                                                                <span class="t03">
                                                                    <a target="_blank" href="/chengrenyouxi/">
                                                                        &gt;&gt;双人技巧频道
                                                                    </a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="s_guide">
                                                            <div class="tit">
                                                                购买指南
                                                            </div>
                                                            <ul class="lists">
                                                                <li>
                                                                    <a target="_blank" href="/category-488-b0.html">
                                                                        如何让厌倦性爱的女人变潘金莲
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a target="_blank" href="/category-489-b0.html">
                                                                        共同达到性高潮的技巧
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a target="_blank" href="/category-490-b0.html">
                                                                        如何让伴侣肛交时不疼
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a target="_blank" href="/category-491-b0.html">
                                                                        怎样说服让她喜欢为你口交
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a target="_blank" href="/topic/96">
                                                                        费洛蒙香水，闻下就跟你走
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a target="_blank" href="/topic/67/">
                                                                        让爱更和谐，按摩、润滑、助情区
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="s_ads">
                                                            <ul class="adpic">
                                                                <li class="tit">
                                                                    <strong>
                                                                        国际名牌：
                                                                    </strong>
                                                                </li>
                                                                <li>
                                                                    <a target="_blank" href="/kamasutra/">
                                                                        <img src="<?php echo $this->staticUrl; ?>sshop/data/brandlogo/1324905298125627980.jpg"
                                                                        alt="">
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a target="_blank" href="/lylou/">
                                                                        <img src="<?php echo $this->staticUrl; ?>sshop/data/brandlogo/1324905408740864219.jpg"
                                                                        alt="">
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="li s5">
                                            <a target="_blank" class="b" href="/qingquneiyi/">
                                                <strong>
                                                    情趣内衣
                                                </strong>
                                            </a>
                                            <div class="smenu">
                                                <div class="s_dropdown">
                                                    <div class="s_bd">
                                                        <div class="s_list">
                                                            <div class="goods">
                                                                <div class="tit">
                                                                    <strong>
                                                                        内衣：
                                                                    </strong>
                                                                </div>
                                                                <ul class="lists">
                                                                    <li>
                                                                        <a target="_blank" href="/xingganneiyi/">
                                                                            性感睡裙
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank" href="/zhifuyouhuo/">
                                                                            制服诱惑
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank" href="/liantizhuang/">
                                                                            连体网衣
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank" href="/sandianshi/">
                                                                            惹火三点
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="goods">
                                                                <div class="tit">
                                                                    <strong>
                                                                        内裤丝袜：
                                                                    </strong>
                                                                </div>
                                                                <ul class="lists">
                                                                    <li>
                                                                        <a target="_blank" href="/xingganneiku/">
                                                                            性感内裤
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank" href="/siwameitui/">
                                                                            丝袜美腿
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="goods">
                                                                <div class="tit">
                                                                    <strong>
                                                                        其他：
                                                                    </strong>
                                                                </div>
                                                                <ul class="lists">
                                                                    <li>
                                                                        <a target="_blank" href="/qinglvneiyi/">
                                                                            情侣套装
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank" href="/nanshineiku/">
                                                                            男士情趣内衣
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="more">
                                                                <span class="t01">
                                                                    <a target="_blank" href="/category-466-b0.html">
                                                                        限时特价
                                                                    </a>
                                                                </span>
                                                                <span class="t02">
                                                                    <a target="_blank" href="/category-467-b0.html">
                                                                        热销排行
                                                                    </a>
                                                                </span>
                                                                <span class="t03">
                                                                    <a target="_blank" href="/qingquneiyi/">
                                                                        &gt;&gt;情趣内衣频道
                                                                    </a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="s_guide">
                                                            <div class="tit">
                                                                购买指南
                                                            </div>
                                                            <ul class="lists">
                                                                <li>
                                                                    <a target="_blank" href="/topic/97/">
                                                                        2012年度情趣用品排行榜
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="s_ads">
                                                            <ul class="adpic">
                                                                <li class="tit">
                                                                    <strong>
                                                                        国际名牌：
                                                                    </strong>
                                                                </li>
                                                                <li>
                                                                    <a target="_blank" href="/yeniya/">
                                                                        <img src="<?php echo $this->staticUrl; ?>sshop/data/brandlogo/1337592945573425418.jpg"
                                                                        alt="">
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a target="_blank" href="/nightfire/">
                                                                        <img src="<?php echo $this->staticUrl; ?>sshop/data/brandlogo/1324351179101852069.jpg"
                                                                        alt="">
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="li s6">
                                            <a target="_blank" class="b" href="/runhuaye/">
                                                <strong>
                                                    润滑液
                                                </strong>
                                            </a>
                                            <div class="smenu">
                                                <div class="s_dropdown">
                                                    <div class="s_bd">
                                                        <div class="s_list">
                                                            <div class="goods">
                                                                <div class="tit">
                                                                    <strong>
                                                                        人体：
                                                                    </strong>
                                                                </div>
                                                                <ul class="lists">
                                                                    <li>
                                                                        <a target="_blank" href="/zuoairunhua/">
                                                                            人体润滑液
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank" href="/koujiaorunhua/">
                                                                            口交润滑液
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank" href="/gangjiaorunhua/">
                                                                            后庭润滑液
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="goods">
                                                                <div class="tit">
                                                                    <strong>
                                                                        器具：
                                                                    </strong>
                                                                </div>
                                                                <ul class="lists">
                                                                    <li>
                                                                        <a target="_blank" href="/wanjurunhuaji/">
                                                                            玩具润滑液
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="more">
                                                                <span class="t01">
                                                                    <a target="_blank" href="/category-468-b0.html">
                                                                        限时特价
                                                                    </a>
                                                                </span>
                                                                <span class="t02">
                                                                    <a target="_blank" href="/category-469-b0.html">
                                                                        热销排行
                                                                    </a>
                                                                </span>
                                                                <span class="t03">
                                                                    <a target="_blank" href="/runhuaye/">
                                                                        &gt;&gt;润滑液频道
                                                                    </a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="s_guide">
                                                            <div class="tit">
                                                                购买指南
                                                            </div>
                                                            <ul class="lists">
                                                                <li>
                                                                    <a target="_blank" href="/topic/97/">
                                                                        2012年度情趣用品排行榜
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a target="_blank" href="/runhuaye/">
                                                                        太干了！润滑下吧
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="s_ads">
                                                            <ul class="adpic">
                                                                <li class="tit">
                                                                    <strong>
                                                                        国际名牌：
                                                                    </strong>
                                                                </li>
                                                                <li>
                                                                    <a target="_blank" href="/eros/">
                                                                        <img src="<?php echo $this->staticUrl; ?>sshop/data/brandlogo/1324350290378311750.jpg"
                                                                        alt="">
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a target="_blank" href="/jo/">
                                                                        <img src="<?php echo $this->staticUrl; ?>sshop/data/brandlogo/1324273269115665972.jpg"
                                                                        alt="">
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a target="_blank" href="/sliquid/">
                                                                        <img src="<?php echo $this->staticUrl; ?>sshop/data/brandlogo/1324351581199663379.jpg"
                                                                        alt="">
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="li s7">
                                            <a target="_blank" class="b" href="/anquantao/">
                                                <strong>
                                                    安全套
                                                </strong>
                                            </a>
                                            <div class="smenu">
                                                <div class="s_dropdown">
                                                    <div class="s_bd">
                                                        <div class="s_list">
                                                            <div class="goods">
                                                                <div class="tit">
                                                                    <strong>
                                                                        通用：
                                                                    </strong>
                                                                </div>
                                                                <ul class="lists">
                                                                    <li>
                                                                        <a target="_blank" href="/biyuntao/">
                                                                            避孕套
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="goods">
                                                                <div class="tit">
                                                                    <strong>
                                                                        调情：
                                                                    </strong>
                                                                </div>
                                                                <ul class="lists">
                                                                    <li>
                                                                        <a target="_blank" href="/koukoutao/">
                                                                            扣扣套
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a target="_blank" href="/koujiaotao/">
                                                                            口交套
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="goods">
                                                                <div class="tit">
                                                                    <strong>
                                                                        女用：
                                                                    </strong>
                                                                </div>
                                                                <ul class="lists">
                                                                    <li>
                                                                        <a target="_blank" href="/yinxingbiyuntao/">
                                                                            女用套
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="more">
                                                                <span class="t01">
                                                                    <a target="_blank" href="/category-470-b0.html">
                                                                        限时特价
                                                                    </a>
                                                                </span>
                                                                <span class="t02">
                                                                    <a target="_blank" href="/category-471-b0.html">
                                                                        热销排行
                                                                    </a>
                                                                </span>
                                                                <span class="t03">
                                                                    <a target="_blank" href="/anquantao/">
                                                                        &gt;&gt;安全套频道
                                                                    </a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="s_guide">
                                                            <div class="tit">
                                                                购买指南
                                                            </div>
                                                            <ul class="lists">
                                                                <li>
                                                                    <a target="_blank" href="/topic/97/">
                                                                        2012年度情趣用品排行榜
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="s_ads">
                                                            <ul class="adpic">
                                                                <li class="tit">
                                                                    <strong>
                                                                        国际名牌：
                                                                    </strong>
                                                                </li>
                                                                <li>
                                                                    <a target="_blank" href="/durex/">
                                                                        <img src="<?php echo $this->staticUrl; ?>sshop/data/brandlogo/1324351869601538184.jpg"
                                                                        alt="">
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a target="_blank" href="/okamoto/">
                                                                        <img src="<?php echo $this->staticUrl; ?>sshop/data/brandlogo/1324351913749326619.jpg"
                                                                        alt="">
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div id="ECS_CARTINFO_new" class="smlbuycar">
                                        <div>
                                            <i class="down">
                                            </i>
                                            <i>
                                            </i>
                                            <a title="查看购物车" href="/flow.php">
                                                购物车(0)
                                            </a>
                                        </div>
                                    </div>
                                    <div style="display: none;" data-widget-config="{'<?php echo $this->staticUrl; ?>sshop/trigger':'.smlbuycar','callback':showminflowcart,'align':{'offset':[-1,-1],'points':['br','tr']}}"
                                    data-widget-type="Popup" class="pop_drop pop_smlbuycar J_TWidget">
                                        <div isnull="true" class="bds">
                                            <p style="text-align: center;padding:10px 0;">
                                                您的购物车里没有商品，赶快挑选吧！
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="otline"><ul class="otmenu"><li class="forpinpai"><i></i>按品牌</li><li class="forxuqiu"><i></i>按需求</li></ul><div class="recword affiche" _id="217"></div></div><!-- 按品牌 下拉<div class="pop_drop pop_pinpai J_TWidget" data-widget-type="Popup" data-widget-config="{'<?php echo $this->staticUrl; ?>sshop/trigger':'.forpinpai','callback':showminpinpai,'align':{'offset':[-16,-2],'points':['bl','tl']}}" style="display: none;"></div>-->
                                <!-- 按需求 下拉<div class="pop_drop pop_xuqiu J_TWidget affiche" id="pop_xuqiu"
                                data-widget-type="Popup" data-widget-config="{'<?php echo $this->staticUrl; ?>sshop/trigger':'.forxuqiu','align':{'offset':[-16,-2],'points':['bl','tl']}}"
                                style="display: none;" _id="204" _type="2"></div> -->
                                <div class="topbottom">
                                    <div _id="253" class="slogan affiche">
                                        <ul class="pp">
                                            <li>
                                                <a rel="nofollow" target="_blank" href="article.php?id=43">
                                                    <i>
                                                    </i>
                                                    <strong>
                                                        360°
                                                    </strong>
                                                    保密派送
                                                </a>
                                            </li>
                                            <li class="i02">
                                                <a rel="nofollow" target="_blank" href="article.php?id=93">
                                                    <i>
                                                    </i>
                                                    <strong>
                                                        100%
                                                    </strong>
                                                    &nbsp;正品保障
                                                </a>
                                            </li>
                                            <li class="i03">
                                                <a rel="nofollow" target="_blank" href="article.php?id=747">
                                                    <i>
                                                    </i>
                                                    <strong>
                                                        2000
                                                    </strong>
                                                    城市货到付款
                                                </a>
                                            </li>
                                            <li class="i03">
                                                总裁投诉热线:
                                                <strong>
                                                    13910263291
                                                </strong>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mySearch">
                                        <div class="form">
                                            <form onsubmit="return checkSearchForm()" action="/search.php" method="get"
                                            name="searchForm" id="searchForm">
                                                <input type="text" maxlength="18" value="" dvalue="品名或商品号..." class="i01 dinput"
                                                id="keyword" name="keywords" style="color: rgb(150, 150, 150);">
                                                <input type="submit" class="i02" value="搜索" name="">
                                            </form>
                                        </div>
                                        <div class="keyword">
                                            <span class="c52">
                                                搜索热词：
                                            </span>
                                            <a href="/search.php?keywords=%C8%F0%B5%E4lelo">
                                                瑞典lelo
                                            </a>
                                            <a href="/search.php?keywords=%C5%AE%D3%C5%C3%FB%C6%F7">
                                                女优名器
                                            </a>
                                            <a href="/search.php?keywords=%B6%C5%C0%D9%CB%B9">
                                                杜蕾斯
                                            </a>
                                            <a href="/search.php?keywords=%D1%D3%CA%B1">
                                                延时
                                            </a>
                                            <a href="/search.php?keywords=%D5%F1%B6%AF%B0%F4">
                                                振动棒
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box J_TBox">
                        <div class="ur_here">
                            <div class="bd">
                                当前位置:
                                <a href="/.">
                                    首页
                                </a>
                                <code>
                                    &gt;
                                </code>
                                用户中心
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>