-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013 �?09 �?10 �?05:54
-- 服务器版本: 5.6.11
-- PHP 版本: 5.5.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `studio_webgame`
--

-- --------------------------------------------------------

--
-- 表的结构 `sm_category`
--

CREATE TABLE IF NOT EXISTS `sm_category` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '栏目ID',
  `catname` varchar(40) NOT NULL DEFAULT '''''' COMMENT '栏目名称',
  `catdir` varchar(100) NOT NULL COMMENT '栏目所至目录',
  `parentdir` varchar(100) NOT NULL COMMENT '上级目录',
  `image` varchar(100) NOT NULL,
  `parentid` mediumint(9) NOT NULL DEFAULT '0' COMMENT '父栏目ID',
  `modelid` smallint(6) NOT NULL DEFAULT '1' COMMENT '模型ID',
  `bind_domain` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `listorder` smallint(5) NOT NULL,
  `description` varchar(300) NOT NULL,
  `template` varchar(20) NOT NULL,
  `meta_title` varchar(100) NOT NULL,
  `meta_keywords` varchar(200) NOT NULL COMMENT '栏目关键字',
  `meta_description` varchar(300) NOT NULL COMMENT '栏目描述',
  `urlrule` varchar(20) NOT NULL COMMENT '栏目URL',
  `ishtml` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否显示 1不显示 0 显示',
  PRIMARY KEY (`id`),
  KEY `catname` (`catname`,`parentid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- 转存表中的数据 `sm_category`
--

INSERT INTO `sm_category` (`id`, `catname`, `catdir`, `parentdir`, `image`, `parentid`, `modelid`, `bind_domain`, `url`, `listorder`, `description`, `template`, `meta_title`, `meta_keywords`, `meta_description`, `urlrule`, `ishtml`) VALUES
(1, '公司信息', 'ourinfo', '/', '', 0, 1, '', 'http://webgame.ci.com/index/category?catid=1', 0, '公司信息相关的栏目', '0', '', '', '', 'biglist_html', 1),
(2, '关于我们', 'gywm', 'ourinfo/', '', 1, 1, '', 'http://webgame.ci.com/index/category?catid=2', 0, '', 'page_aboutus', '', '', '', 'biglist_html', 1),
(3, '员工关怀', 'yggh', 'ourinfo/', '', 1, 1, '', 'http://webgame.ci.com/index/category?catid=3', 0, '', 'page_aboutus', '', '', '', 'biglist_html', 1),
(4, '发展历程', 'fzlc', 'ourinfo/', '', 1, 1, '', 'http://webgame.ci.com/index/category?catid=4', 0, '', 'page_aboutus', '', '', '', 'biglist_html', 1),
(5, '核心价值', 'hxjz', 'ourinfo/', '', 1, 1, '', 'http://webgame.ci.com/index/category?catid=5', 0, '', 'page_aboutus', '', '', '', 'biglist_html', 1),
(6, '联系我们', 'lxwm', 'ourinfo/', '', 1, 1, '', 'http://webgame.ci.com/index/category?catid=6', 0, '', 'page_aboutus', '', '', '', 'biglist_html', 1),
(7, '公司新闻', 'news', 'ourinfo/', '', 1, 2, '', 'http://webgame.ci.com/index/category?catid=7', 0, '', 'list', '', '', '', 'biglist_html', 1),
(8, '诺瓦奇兵', 'nova', '/', '', 0, 2, 'http://nova.ci.com/', 'http://webgame.ci.com/index/category?catid=8', 0, '诺瓦奇兵资讯', 'list_big', '', '', '', 'biglist_html', 1),
(9, '新闻公告', 'xwgg', 'nova/', '', 8, 2, 'http://nova.ci.com/', 'http://webgame.ci.com/index/category?catid=9', 0, '诺瓦新闻', '0', '', '', '', '0', 1),
(10, '诺瓦宠物', 'nwcw', 'nova/', '', 8, 2, '', 'http://webgame.ci.com/index/category?catid=10', 0, '诺瓦宠物', '0', '', '', '', '0', 0),
(11, '宠物练级', 'cwlj', 'nova/', '', 8, 2, '', 'http://webgame.ci.com/index/category?catid=11', 0, '宠物练级', '0', '', '', '', '0', 0),
(12, '宠物捕捉', 'cwbz', 'nova/', '', 8, 2, '', 'http://webgame.ci.com/index/category?catid=12', 0, '宠物捕捉', '0', '', '', '', '0', 0),
(13, '游戏攻略', 'yxgl', 'nova/', '', 8, 2, '', 'http://webgame.ci.com/index/category?catid=13', 0, '游戏攻略', '0', '', '', '', '0', 0),
(14, '诺瓦问答', 'nwwd', 'nova/', '', 8, 2, '', 'http://webgame.ci.com/index/category?catid=14', 0, '诺瓦问答', '0', '', '', '', '0', 0),
(15, '新手指南', 'xszn', 'nova/', '', 8, 2, '', 'http://webgame.ci.com/index/category?catid=15', 0, '新手指南', '0', '', '', '', '0', 0),
(16, '诺瓦图片', 'nwtp', 'nova/', '', 8, 2, '', 'http://webgame.ci.com/index/category?catid=16', 0, '诺瓦图片', '0', '', '', '', '0', 0),
(17, '精彩视频', 'jcsp', 'nova/', '', 8, 2, '', 'http://webgame.ci.com/index/category?catid=17', 0, '精彩视频', '0', '', '', '', '0', 0),
(18, '知金理念', 'zjln', '/', '', 0, 1, '', 'http://webgame.ci.com/index/category?catid=18', 0, '', 'page_service', '', '', '', '0', 1),
(19, '父母须知', 'fmxz', 'zjln/', '', 18, 1, '', 'http://webgame.ci.com/index/category?catid=19', 0, '', 'page_service', '', '', '', '0', 0),
(20, '儿童健康上网', 'jksw', 'zjln/', '', 18, 1, '', 'http://webgame.ci.com/index/category?catid=20', 0, '', 'page_service', '', '', '', '0', 0),
(21, '绿色宣言', 'lsxy', 'zjln/', '', 18, 1, '', 'http://webgame.ci.com/index/category?catid=21', 0, '', 'page_service', '', '', '', '0', 0),
(22, '服务条款', 'fwtk', 'zjln/', '', 18, 1, '', 'http://webgame.ci.com/index/category?catid=22', 0, '', 'page_service', '', '', '', '0', 0);

-- --------------------------------------------------------

--
-- 表的结构 `sm_new`
--

CREATE TABLE IF NOT EXISTS `sm_new` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '新闻类资讯ID',
  `catid` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '栏目ID',
  `title` varchar(80) NOT NULL DEFAULT '' COMMENT '标题',
  `thumb` varchar(100) NOT NULL DEFAULT '' COMMENT '缩略图',
  `keywords` char(40) NOT NULL DEFAULT '' COMMENT '关键字',
  `description` mediumtext NOT NULL COMMENT '描述',
  `url` char(100) NOT NULL COMMENT '资讯访问地址',
  `listorder` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  `status` tinyint(2) unsigned NOT NULL DEFAULT '1' COMMENT '状态',
  `islink` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否为链接内容',
  `username` char(20) NOT NULL COMMENT '录入者',
  `copyfrom` varchar(100) NOT NULL DEFAULT '' COMMENT '来源',
  `content` mediumtext NOT NULL COMMENT '内容',
  `template` varchar(30) NOT NULL COMMENT '使用模板',
  `inputtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '录入时间',
  `updatetime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  `fbak` int(11) NOT NULL,
  `seo_title` varchar(80) NOT NULL COMMENT 'SEO标题',
  PRIMARY KEY (`id`),
  KEY `status` (`status`,`listorder`,`id`),
  KEY `listorder` (`catid`,`status`,`listorder`,`id`),
  KEY `catid` (`catid`,`status`,`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `sm_new`
--

INSERT INTO `sm_new` (`id`, `catid`, `title`, `thumb`, `keywords`, `description`, `url`, `listorder`, `status`, `islink`, `username`, `copyfrom`, `content`, `template`, `inputtime`, `updatetime`, `fbak`, `seo_title`) VALUES
(1, 7, '发生的发生的发生的发生地方', 'http://upload.kids.com/passport2013/0828/20130828182405772.jpg', 'have keyword', '是打发士大夫', 'http://webgame.kids.com/index/show?id=7_1', 0, 1, 0, 'wangcanliang', '', '<p>\r\n	阿萨德发生的发生的发生的发生的发生的发生<img alt="" src="http://upload.kids.com/content/img/2013082881061.png" style="width: 19px; height: 19px;" /></p>\r\n', '', 1377687614, 1377689102, 0, ''),
(2, 7, '阿萨德法师打发', 'http://upload.kids.com/passport2013/0828/20130828182405772.jpg', '等等', '阿士大夫', 'http://webgame.kids.com/index/show?id=7_2', 0, 1, 0, 'wangcanliang', '', '<p>\r\n	阿士大夫撒旦法是否打算打发士大夫</p>\r\n', '', 1378089020, 1378089020, 0, ''),
(3, 7, '娃儿安慰安慰法萨芬', 'http://upload.kids.com/passport2013/0828/20130828182405772.jpg', 'have keyword', '', 'http://webgame.kids.com/index/show?id=7_3', 0, 1, 0, 'wangcanliang', '', '<p>\r\n	阿萨德法师打发十分大叔的发生的发生发的</p>\r\n', '', 1378089029, 1378089029, 0, ''),
(4, 7, '阿士大夫撒旦法十分大叔发的', 'http://upload.kids.com/passport2013/0828/20130828182405772.jpg', 'have keyword', '', 'http://webgame.kids.com/index/show?id=7_4', 0, 1, 0, 'wangcanliang', '', '<p>\r\n	阿萨德发生发大水发大水法师打发士大夫</p>\r\n', '', 1378089063, 1378089063, 0, ''),
(5, 7, '阿尔阿沙发沙发算法的', 'http://static.kids.com/admin/images/icon/upload-pic.png', 'have keyword', '', 'http://webgame.kids.com/index/show?id=7_5', 0, 1, 0, 'wangcanliang', '', '<p>\r\n	阿萨德发生发生发生发大水发大水</p>\r\n', '', 1378089071, 1378089071, 0, ''),
(6, 7, '阿萨德法师打发十分大叔发达', 'http://static.kids.com/admin/images/icon/upload-pic.png', 'have keyword', '', 'http://webgame.kids.com/index/show?id=7_6', 0, 1, 0, 'wangcanliang', '', '<p>\r\n	阿萨德发生法大赛的发生发大水发大水发大水发</p>\r\n', '', 1378089078, 1378089078, 0, ''),
(7, 7, '日日日', 'http://static.kids.com/admin/images/icon/upload-pic.png', 'have keyword', '', 'http://webgame.kids.com/index/show?id=7_7', 0, 1, 0, 'wangcanliang', '', '<p>\r\n	市人大热情而气温气温</p>\r\n', '', 1378089728, 1378089728, 0, ''),
(8, 7, '去委屈而的钱而气温', 'http://static.kids.com/admin/images/icon/upload-pic.png', 'have keyword', '', 'http://webgame.kids.com/index/show?id=7_8', 0, 1, 0, 'wangcanliang', '', '<p>\r\n	去二七日前二七二期热热热企鹅芙蓉区二期诶</p>\r\n', '', 1378089738, 1378089738, 0, ''),
(9, 7, '问问二七二夫人全国地区热情而非', 'http://upload.kids.com/passport2013/0828/20130828182405772.jpg', 'have keyword', '', 'http://webgame.kids.com/index/show?id=7_9', 0, 1, 0, 'wangcanliang', '', '<p>\r\n	案发前发放QERFAQREFAQEAQFRGFGGAED是否达到法定分FSTAERSDFADF四氟板实得分</p>\r\n', '', 1378089756, 1378089756, 0, ''),
(10, 7, '的公司地方噶多人噶尔噶二个人', 'http://upload.kids.com/passport2013/0828/20130828182405772.jpg', 'have keyword', '', 'http://webgame.kids.com/index/show?id=7_10', 0, 1, 0, 'wangcanliang', '', '<p>\r\n	爱的人工台武器而改变前而且额表情而过去而过日期额</p>\r\n', '', 1378089764, 1378089764, 0, '');

-- --------------------------------------------------------

--
-- 表的结构 `sm_picture`
--

CREATE TABLE IF NOT EXISTS `sm_picture` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '图片类资讯ID',
  `catid` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '栏目ID',
  `title` varchar(80) NOT NULL DEFAULT '' COMMENT '标题',
  `thumb` varchar(100) NOT NULL DEFAULT '' COMMENT '缩略图',
  `keywords` char(40) NOT NULL DEFAULT '' COMMENT '关键字',
  `description` mediumtext NOT NULL COMMENT '描述',
  `url` char(100) NOT NULL COMMENT '资讯访问地址',
  `listorder` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  `status` tinyint(2) unsigned NOT NULL DEFAULT '1' COMMENT '状态',
  `islink` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否为链接内容',
  `username` char(20) NOT NULL COMMENT '录入者',
  `copyfrom` varchar(100) NOT NULL DEFAULT '' COMMENT '来源',
  `content` mediumtext NOT NULL COMMENT '内容',
  `pictureurls` mediumtext NOT NULL,
  `template` varchar(30) NOT NULL COMMENT '使用模板',
  `inputtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '录入时间',
  `updatetime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`),
  KEY `status` (`status`,`listorder`,`id`),
  KEY `listorder` (`catid`,`status`,`listorder`,`id`),
  KEY `catid` (`catid`,`status`,`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `sm_spage`
--

CREATE TABLE IF NOT EXISTS `sm_spage` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '单网页资讯ID',
  `catid` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '栏目ID',
  `title` varchar(80) NOT NULL DEFAULT '' COMMENT '标题',
  `username` char(20) NOT NULL COMMENT '录入者',
  `content` mediumtext NOT NULL COMMENT '内容',
  `template` varchar(30) NOT NULL COMMENT '使用模板',
  `inputtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '录入时间',
  `updatetime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `sm_spage`
--

INSERT INTO `sm_spage` (`id`, `catid`, `title`, `username`, `content`, `template`, `inputtime`, `updatetime`) VALUES
(1, 3, '为武器而非v', 'wangcanliang', '<p>\r\n	阿萨德法师法师打发士大夫</p>\r\n', '', 0, 1377688049),
(2, 4, '发生的发生的发生的发生地方', 'wangcanliang', '<p>\r\n	阿萨德发生的发生的发生的发生的发生地方<img alt="" src="http://upload.kids.com/content/img/2013082827531.png" style="width: 19px; height: 19px;" /><img alt="" src="http://upload.kids.com/content/img/2013082865051.png" style="width: 50px; height: 51px;" /></p>\r\n', '', 0, 1377688092),
(3, 6, '777', 'wangcanliang', '<p>\r\n	阿萨德法师打发</p>\r\n', '', 0, 1377688069),
(4, 20, '得得得', 'wangcanliang', '\r\n	为了避免上网对我们身心健康造成损害，要注意的地方可不少呢！爸爸、妈妈、小朋友们，要仔细听好，认真执行哦！<br />\r\n	<br />\r\n	<span class="cGreen f14b">首先，为了保护我们明亮的眼睛</span><br />\r\n	<span class="f12">&middot; 切勿长时间连续上网，尤其不要熬夜上网；<br />\r\n	&middot; 操作过程中常闭上眼睛休息片刻，或经常眨眼，增加泪液分泌，以缓解眼睛疲劳；<br />\r\n	&middot; 每隔一小时，要将视线彻底离开电脑休息10分钟；<br />\r\n	&middot; 室内光照要适中，不可过亮或过暗，一般来说，室内光线应为屏幕明亮度的3倍；<br />\r\n	&middot; 避免灯光、日光等光源直接照射屏幕，以免产生干扰光线；<br />\r\n	&middot; 注意调节电脑屏幕的亮度和对比度，屏幕不要太亮，对比度不要太强；<br />\r\n	&middot; 屏幕刷新频率不小于60赫兹；<br />\r\n	&middot; 电脑屏幕的中心位置应与操作者胸部在同一水平线上，使屏幕中心在眼睛下方7-10&deg;之间；<br />\r\n	&middot; 双眼直视屏幕，不要斜视或扭转，眼睛距离35厘米大的屏幕应不少于60厘米，距离38厘米大的屏幕应不少于70厘米；<br />\r\n	&middot; 要经常擦拭屏幕，避免屏幕过脏使图像模糊，造成眼睛疲劳。<br />\r\n	<span class="tip">淘米网提示：如果你已经严格执行以上建议，却还是觉得眼睛不舒服，那就要及时去医院，请医生帮忙啦！千万不要掉以轻心哦！</span></span><br />\r\n	<br />\r\n	<span class="cGreen f14b">第二，要确保我们的肌肉和骨骼健壮</span><br />\r\n	<span class="f12">&middot; 正面面对电脑，不要歪坐或扭转；<br />\r\n	&middot; 坐姿正确，背部要有完全的支撑，膝盖约弯曲90度，应有足够的空间伸放双脚，不要交叉双脚，以免影响血液循环；<br />\r\n	&middot; 身体不要与桌子靠得太近，肘部保持自然弯曲；<br />\r\n	&middot; 敲击键盘不要过分用力，肌肉尽量放松；<br />\r\n	&middot; 不要连续操作，每隔一小时，起来活动全身；<br />\r\n	&middot; 上网过程中也要时不时伸伸懒腰，舒展筋骨或仰靠在椅子上，双手用力向后伸展；<br />\r\n	&middot; 还可做抖手指运动，这是完全放松手指最简单的方法。<br />\r\n	<span class="tip">淘米网提示：由于爸爸、妈妈、小朋友的身高不同，因此建议选用可调节高度的座椅，每个人上网前，要根据自己的实际情况进行调整，以确保姿势正确！</span></span><br />\r\n	<br />\r\n	<span class="cGreen f14b">第三，保护呼吸系统，防止病从&ldquo;鼻&rdquo;入</span><br />\r\n	<span class="f12">&middot; 上网时要注意屋内空气流通，不要在密闭环境中使用电脑；<br />\r\n	&middot; 有空调的房间应定期进行室内空气消毒；<br />\r\n	&middot; 在冬季等气候寒冷不利于开窗通风的季节，更要注意更换室内空气。</span><br />\r\n	<br />\r\n	<span class="cGreen f14b">最后，保持心理健康，快乐上网</span><br />\r\n	<span class="f12">&middot; 生活要规律，不要因为上网耽误吃饭、睡觉；<br />\r\n	&middot; 不要在睡前玩过于刺激、紧张的游戏，以免影响入睡速度和睡眠质量；<br />\r\n	&middot; 要牢记网络世界与现实世界的区别，不要把网络世界当成逃避现实困难的避风港；<br />\r\n	&middot; 注意培养多种兴趣爱好，丰富业余生活；<br />\r\n	&middot; 积极参加社交活动，培养良好的人际关系；<br />\r\n	&middot; 经常进行户外活动，确保脑力消耗与体力消耗的平衡；<br />\r\n	&middot; 生活中遇到不开心的事或者有不愉快的经历，要及时疏导，不要在网上发泄不良情绪。<br />\r\n	<span class="tip">淘米网提示：亲爱的小朋友们，网上的内容五花八门、有好有坏，对我们的心情产生各种影响是非常正常的，如果你发现上网对自己的身心有很大影响，不用紧张，请及时告诉爸爸、妈妈，如果还得不到解决，没关系，请爸爸、妈妈带小朋友及时向专业的心理医生求助。</span></span>\r\n', '', 0, 1378121350),
(5, 19, '父母须知', 'wangcanliang', '<div class="parents_jianhu">\r\n	<strong>家长监护工程概述</strong><br />\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&ldquo;网络游戏未成年人家长监护工程&rdquo;是一项由多家网络游戏企业共同参与实施，由中华人民共和国文化部指导，旨在加强家长对未成年人参与网络 游戏的监护，引导未成年人健康、绿色参与网络游戏，和谐家庭关系的社会性公益行动。它提供了一种切实可行的方法，一种家长实施监控的管道，使家长纠正部分 未成年子女沉迷游戏的行为成为可能。 该项社会公益行动充分反映了中国网络游戏行业高度的社会责任感，对未成年玩家合法权益的关注及对用实际行动营造和谐社会的愿望。<a class="red" href="http://parents.61.com/care" style="text-decoration:underline;" target="_blank" title="了解详情">了解详情&gt;&gt;</a></div>\r\n<div class="gray6">\r\n	<span class="orange f14b">为了给与我们的儿童一个良好绿色的成长环境。我们承诺：</span><br />\r\n	<span class="f14b gray3">一、保障儿童信息安全</span><br />\r\n	我们采取强大的安全措施保障儿童及其家庭的隐私安全，不泄漏儿童及其家庭的任何信息。<br />\r\n	<span class="f14b gray3">二、防止儿童网络沉迷</span><br />\r\n	我们提倡健康的网络习惯，全方位引导儿童健康上网，防止儿童网络沉迷。<br />\r\n	<span class="f14b gray3">三、不忽视任何一个孩子</span><br />\r\n	我们坚信孩子生来平等，拥有同等的尊严与权利，我们会用心感受每一个儿童的感受，让儿童在健康上网同时培养独立、自信的优良品德。<br />\r\n	<span class="f14b gray3">四、给予儿童优先权</span><br />\r\n	我们将在当今互联网环境中给予儿童优先的全新网络服务。我们积极响应全社会倡导的青少年健康上网的号召，努力保障儿童青少年及其家庭的权益，为世界儿童的健康成长贡献力量。<br />\r\n	<span class="f14b gray3">五、倾听儿童的心声</span><br />\r\n	我们尊重儿童表达自己心声和参与事关自身利益的决定的权利，遵循他们的发展规律，我们认真倾听并且有针对性的采取行动。<br />\r\n	<span class="f14b gray3">六、为儿童聚集更多网络内容</span><br />\r\n	我们将通过儿童网站间的相互合作与自律监督，确保儿童网站的纯洁与安全。我们将与有利于儿童成长的相关机构（包括报纸、杂志、广播、电视、网络、教育机构及其他儿童产品供应商）展开合作。<br />\r\n	<span class="f14b gray3">七、关心儿童的身心健康</span><br />\r\n	我们提倡全社会来共同关注儿童身心健康，关注儿童网络安全，呼吁社会、学校、家庭一起来为孩子们创造美好的现实与网络生活环境。</div>\r\n', '', 0, 1378122028),
(6, 21, '绿色宣言', 'wangcanliang', '<p>\r\n	为了给与我们的儿童一个良好绿色的成长环境。我们承诺：<br />\r\n	<span class="cGreen">一、保障儿童信息安全</span><br />\r\n	我们采取强大的安全措施保障儿童及其家庭的隐私安全，不泄漏儿童及其家庭的任何信息。<br />\r\n	<span class="cGreen">二、防止儿童网络沉迷</span><br />\r\n	我们提倡健康的网络习惯，全方位引导儿童健康上网，防止儿童网络沉迷。<br />\r\n	<span class="red">网络游戏未成年人家长监护工程已经全面启动，<a class="red" href="http://parents.61.com/" style="text-decoration: underline;" target="_blank">点这里了解详情</a>。</span><br />\r\n	<span class="cGreen">三、不忽视任何一个孩子</span><br />\r\n	我们坚信孩子生来平等，拥有同等的尊严与权利，我们会用心感受每一个儿童的感受，让儿童在健康上网同时培养独立、自信的优良品德。<br />\r\n	<span class="cGreen">四、给予儿童优先权</span><br />\r\n	我们将在当今互联网环境中给予儿童优先的全新网络服务。我们积极响应全社会倡导的青少年健康上网的号召，努力保障儿童青少年及其家庭的权益，为世界儿童的 健康成长贡献力量。<br />\r\n	<span class="cGreen">五、倾听儿童的心声</span><br />\r\n	我们尊重儿童表达自己心声和参与事关自身利益的决定的权利，遵循他们的发展规律，我们认真倾听并且有针对性的采取行动。<br />\r\n	<span class="cGreen">六、为儿童聚集更多网络内容</span><br />\r\n	我们将通过儿童网站间的相互合作与自律监督，确保儿童网站的纯洁与安全。我们将与有利于儿童成长的相关机构（包括报纸、杂志、广播、电视、网络、教育机构 及其他儿童产品供应商）展开合作。<br />\r\n	<span class="cGreen">七、关心儿童的身心健康</span><br />\r\n	我们提倡全社会来共同关注儿童身心健康，关注儿童网络安全，呼吁社会、学校、家庭一起来为孩子们创造美好的现实与网络生活环境。</p>\r\n', '', 0, 1378122067),
(7, 22, '服务条款', 'wangcanliang', '<p>\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 重要须知：上海淘米网络科技有限公司（以下简称&ldquo;淘米公司&rdquo;）在此特别提醒用户认真阅读、充分理解本《淘米网服务条款》--- 用户应认真阅读本《淘米网服务条款》 （下称《服务条款》）中各条款， 包括免除或者限制淘米公司责任的免责条款及对用户的权利限制条款。请您认真审阅并选择接受或不接受本《服务条款》（未成年人应在法定监护人陪同下审阅）。 除非您接受本《服务条款》条款，否则您无权下载、安装或使用&ldquo;淘米网&rdquo;及其相关服务。您的下载、安装、使用、账号获取和登录等行为将视为对本《服务条款》 的接受，并同意接受本《服务条款》各项条款的约束。<br />\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 本《服务条款》是您（下称&ldquo;用户&rdquo;）与淘米公司之间关于用户访问&ldquo;淘米网&rdquo;，注册、使用、管理账户，及使用其提供的相关服务所订立的协议。本《服务条款》 描述淘米公司与用户之间关于&ldquo;淘米网&rdquo;许可使用及相关方面的权利义务。&ldquo;用户&rdquo;或&ldquo;您&rdquo;是指通过淘米公司提供的获取&ldquo;淘米儿童产品&rdquo;授权的途径获得授权许 可的个人或单一实体。<br />\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 本《服务条款》可由淘米公司随时更新，更新后的服务条款一旦公布即代替原来的服务条款，恕不再另行通知。用户可重新下载安装淘米网或其相关服务查阅最新版 协议条款。在淘米公司修改《服务条款》后，如果用户不接受修改后的条款，请立即停止使用&ldquo;淘米网&rdquo;提供的软件和服务，用户继续使用&ldquo;淘米网&rdquo;提供的软件和 服务将被视为已接受了修改后的服务条款。<br />\r\n	<br />\r\n	1 权利声明<br />\r\n	1.1 &ldquo;淘米网&rdquo;由淘米公司开发。&ldquo;淘米网&rdquo;的一切版权、商标权、专利权、商业秘密等知识产权，以及相关的所有信息内容，包括但不限于：文字表述及其组合、图 标、图饰、图表、色彩、界面设计、版面框架、有关数据、印刷材料、或电子文档等均为淘米公司所有，受中华人民共和国著作权法、商标法、专利法、反不正当竞 争法和相应的国际条约以及其他知识产权法律法规的保护。<br />\r\n	1.2 未经淘米公司书面同意，用户不得为任何营利性或非营利性的目的自行实施、利用、转让或许可任何三方实施、利用、转让上述知识产权，淘米公司保留追究上述未经许可行为的权利。<br />\r\n	<br />\r\n	2 账号注册、使用和保管<br />\r\n	2.1 用户承诺以其真实身份注册成为淘米公司及其经营网站和游戏平台的用户，并保证所提供的个人信息真实、完整、有效。真实、完整、有效的个人信息，对于使用 &ldquo;淘米网&rdquo;及其相关服务、暂停用户账号使用，及找回丢失账号至关重要。如因用户提供虚假资料或被他人获悉自己的注册资料，从而导致的损失由用户本人承担， 损失包括但不限于因资料虚假或被他人获悉而无法使用的帐号。<br />\r\n	2.2 用户以真实身份注册成为淘米公司的用户后，需要修改所提供的个人身份资料信息的，应当及时通过淘米公司公布的方式，修改保存在淘米公司的个人身份资料信息。淘米公司将及时、有效地为用户提供相关服务。<br />\r\n	2.3 淘米公司有权审查用户注册所提供的身份信息是否真实、有效，并将采取技术与管理等合理措施保障用户账号的安全、有效；用户有义务妥善保管其账号及密码，并 正确、安全地使用其账号及密码。任何一方未尽上述义务导致账号密码遗失、账号被盗等情形，并给用户和他人的民事权利造成损害的，应当承担由此产生的法律责 任。<br />\r\n	2.4 用户以真实身份注册成为淘米公司的用户后，可以使用&ldquo;淘米网&rdquo;及其相关服务，但淘米公司保留对未来服务改变和说明的权利。用户账号的所有权归淘米公司，用 户完成注册手续后，获得账号的使用权。用户对登录后所使用账号所产生的行为依法享有权利和承担责任。<br />\r\n	2.5 用户帐号使用权仅属于初始申请注册人，禁止赠与、借用、租用、转让或售卖。如果淘米公司发现使用者并非帐号初始注册人，淘米公司有权在未经通知的情况下回 收该帐号而无需向该帐号使用人承担法律责任，由此带来的包括并不限于用户通讯中断、用户资料和游戏道具等清空等损失由用户自行承担。淘米公司禁止用户私下 有偿或无偿转让帐号，以免因帐号问题产生纠纷，用户应当自行承担因违反此要求而遭致的任何损失，同时淘米公司保留追究上述行为人法律责任的权利。<br />\r\n	2.6 用户发现其账号或密码被他人非法使用或有使用异常的情况的，应及时根据淘米公司公布的处理方式通知淘米公司，并有权通知淘米公司采取措施暂停该账号的登录和使用。<br />\r\n	2.7 淘米公司根据用户的通知采取措施暂停用户账号的登录和使用的，淘米公司应当要求用户提供并核实与其注册身份信息相一致的个人有效身份信息。<br />\r\n	2.7.1 淘米公司核实用户所提供的个人有效身份信息与所注册的身份信息相一致的，将及时采取措施暂停用户账号的登录和使用。淘米公司仅负责核实申请用户提供的个人 有效身份信息是否与注册的身份信息相一致，但无法识别申请用户是否为真正的拥有账号使用权的用户。<br />\r\n	2.7.2 淘米公司违反2.7.1款项的约定，未及时采取措施暂停用户账号的登录和使用，因此给用户造成损失的，将承担相应的法律责任。<br />\r\n	2.7.3 用户没有提供其个人有效身份证件或者用户提供的个人有效身份证件与所注册的身份信息不一致的，淘米公司有权拒绝用户的上述请求。<br />\r\n	2.8 用户为了维护其合法权益，向淘米公司提供与所注册的身份信息相一致的个人有效身份信息时，淘米公司将为用户提供账号注册人证明、原始注册信息等必要的协助和支持，并根据需要向有关行政机关和司法机关提供相关证据信息资料。<br />\r\n	2.9 用户注册帐号后如果长期不使用，淘米公司有权采取清除账号内信息或回收帐号等措施，以免造成资源浪费，由此带来的包括并不限于用户通信中断、用户资料、邮件和游戏道具丢失等损失由用户自行承担。<br />\r\n	<br />\r\n	3 用户使用许可授权范围<br />\r\n	3.1 用户可以为非商业目的在单一台终端设备(下统称&ldquo;终端设备&rdquo;)上安装、使用、显示、运行&ldquo;淘米网&rdquo;及其相关服务。用户不得为商业运营目的安装、使用、运行 &ldquo;淘米网&rdquo;及其相关服务，不可以对&ldquo;淘米网&rdquo;及其相关服务运行过程中释放到任何终端设备内存中的数据及&ldquo;淘米网&rdquo;及其相关服务运行过程中客户端与服务器端 的交互数据进行复制、更改、修改、挂接运行或创作任何衍生作品，形式包括但不限于使用插件、外挂或非经授权的第三方工具/服务接入&ldquo;淘米网&rdquo;及其相关服务 和相关系统。<br />\r\n	3.2 保留权利： 本《服务条款》未明示授权的其他一切权利仍归淘米公司所有， 用户使用其他权利时须另外取得淘米公司的书面同意。<br />\r\n	3.3 除本《服务条款》有明确规定外，本《服务条款》并未对利用&ldquo;淘米网&rdquo;访问的淘米公司的其他服务规定相关的服务条款，对于这些服务可能有单独的服务条款加以规范，请用户在使用有关服务时另行了解与确认。如用户使用该服务，视为对相关服务条款的接受。<br />\r\n	<br />\r\n	4 用户使用须知<br />\r\n	4.1 用户在遵守法律及本《服务条款》的前提下可依本《服务条款》访问&ldquo;淘米网&rdquo;，及使用其提供的相关服务。用户无权实施包括但不限于下列行为：<br />\r\n	4.1.1 删除&ldquo;淘米网&rdquo;及其他副本上所有关于版权的信息、内容；<br />\r\n	4.1.2 对&ldquo;淘米网&rdquo;进行反向工程、反向汇编、反向编译等；<br />\r\n	4.1.3 用户通过非淘米公司开发、授权或认可的第三方兼容软件、系统登录或使用&ldquo;淘米网&rdquo;及其服务，用户针对淘米公司的软件和服务使用非淘米公司开发、授权或认证的插件和外挂；<br />\r\n	4.1.4 对于&ldquo;淘米网&rdquo;相关信息等，未经淘米公司书面同意，用户不得擅自实施包括但不限于下列行为：使用、复制、修改、链接、转载、汇编、发表、出版，建立镜像站 点、擅自借助&ldquo;淘米儿童产品&rdquo;发展与之有关的衍生产品、作品、服务、插件、外挂、兼容、互联等；<br />\r\n	4.1.5利用&ldquo;淘米网&rdquo;发表、传送、传播、储存违反国家法律、危害国家安全、祖国统一、社会稳定的内容，或任何不当的、侮辱诽谤的、淫秽的、暴力的及任何违反国家法律法规政策的内容；<br />\r\n	4.1.6 利用&ldquo;淘米网&rdquo;发表、传送、传播、储存侵害他人知识产权、商业秘密权等合法权利的内容；<br />\r\n	4.1.7 利用&ldquo;淘米网&rdquo;误导、欺骗他人；<br />\r\n	4.1.8 利用&ldquo;淘米网&rdquo;使用任何包含有通过侵犯商标、版权、专利、商业机密或任何一方的其他专有权利的方式利用&ldquo;淘米网&rdquo;获得的图像或相片的资料或信息；<br />\r\n	4.1.9 传送或散布以其他方式实现传送含有受到知识产权法律保护的图像、相片、软件或其他资料的文件，作为举例（但不限于此）：包括版权或商标权（或隐私权或公开权），除非用户拥有或控制着相应的权利或已得到所有必要的认可；<br />\r\n	4.1.10 利用本&ldquo;淘米网&rdquo;及其服务批量发表、传送、传播广告信息及垃圾信息；<br />\r\n	4.1.11进行任何危害计算机网络安全的行为，包括但不限于：使用未经许可的数据或进入未经许可的服务器/帐户；未经允许进入公众计算机网络或者他人计 算机系统并删除、修改、增加存储信息；未经许可，企图探查、扫描、测试&ldquo;淘米网&rdquo;系统或网络的弱点或其它实施破坏网络安全的行为； 企图干涉、破坏&ldquo;淘米网&rdquo;系统或网站的正常运行，故意传播恶意程序或病毒以及其他破坏干扰正常网络信息服务的行为；伪造TCP/IP数据包名称或部分名 称；<br />\r\n	4.1.12通过修改或伪造&ldquo;淘米网&rdquo;及其服务运行中的指令、数据、数据包，增加、删减、变动&ldquo;淘米网&rdquo;及其服务的功能或运行效果，将用于上述用途的软件通过信息网络向公众传播或者运营；<br />\r\n	4.1.13用户制作、发布、传播用于窃取帐号及他人专属信息、财产、保密信息的软件<br />\r\n	4.1.14在未经淘米公司书面明确授权前提下，出售、出租、出借、散布、转移或转授权&ldquo;淘米网&rdquo;及其服务或相关的链接或从使用&ldquo;淘米网&rdquo;及其服务或&ldquo;淘米网&rdquo;及其服务的条款中获利，无论以上使用是否为直接经济或金钱收益；<br />\r\n	4.1.15其他以任何不合法的方式、为任何不合法的目的、或以任何与本协议不一致的方式使用&ldquo;淘米网&rdquo;及其提供的服务；<br />\r\n	4.1.16用户若违反上述规定，淘米公司有权采取终止、完全或部分中止、限制用户帐号的使用功能。<br />\r\n	4.2 访问&ldquo;淘米网&rdquo;必须遵守国家有关法律和政策，维护国家利益，保护国家安全，并遵守本《服务条款》，对于用户违法或违反本《服务条款》的使用而引起的一切责 任，由用户负全部责任，一概与淘米公司及合作单位无关，导致淘米公司及合作单位损失的，淘米公司及合作单位有权要求用户赔偿，并有权立即停止向其提供服 务，保留相关记录，保留配合司法机关追究法律责任的权利。而且，对于用户违法或违反本《服务条款》以及违反了&ldquo;淘米网&rdquo;及其服务的其他相关服务条款，淘米 公司有权视用户的行为性质，在不事先通知用户的情况下，采取包括但不限于中断使用许可、停止提供服务、限制使用、回收用户帐号、法律追究等措施。对利用帐 号进行违法活动、骚扰、欺骗其他用户等行为，淘米公司有权回收其帐号。由此带来的包括并不限于用户通信中断、用户资料、邮件和游戏道具丢失等损失由用户自 行承担。<br />\r\n	4.3 &ldquo;淘米网&rdquo;同大多数互联网软件一样，可能受到各种安全问题的侵扰，用户应加强信息安全及使用者资料的保护意识，要注意加强密码保护，以免遭致损失和骚扰。 用户知晓账号及密码保管责任在于用户，对于用户因他人冒名使用账号而致的任何损失，淘米公司不承担责任。<br />\r\n	4.4 非经淘米公司或淘米公司授权开发并正式发布的其它任何由&ldquo;淘米网&rdquo;衍生的软件均属非法，下载、安装、使用此类软件，将可能导致不可预知的风险，建议用户不 要轻易下载、安装、使用，由此产生的一切法律责任与纠纷一概与淘米公司无关。用户不得轻易下载、安装、使用此类软件，否则，淘米公司有权在不事先通知用户 的情况下单方面终止用户帐号的使用资格。<br />\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 用户只能通过淘米公司提供的&ldquo;淘米网&rdquo;及其他合法通道登录使用&ldquo;淘米网&rdquo;及其相关服务。用户不得通过其他未经淘米公司授权开发的包括但不限于非法兼容型软 件、程序或者其他非淘米公司明示许可的方式，登录使用帐号，否则，淘米公司有权在不事先通知用户的情况下单方面终止用户帐号的使用资格。<br />\r\n	4.5 未成年人上网应该在父母和老师的指导下，正确学习使用网络。未成年人要避免沉迷虚拟的网络世界而影响了日常的学习生活。<br />\r\n	4.6 淘米公司保留在任何时候根据适用法律、法规、法律程序或政府要求的需要而披露任何信息，或由淘米公司自主决定全部或部分地编辑、拒绝张贴或删除任何信息或资料的权利。<br />\r\n	4.7 软件的替换、修改和升级：淘米公司保留在任何时候通过为您提供本软件替换、修改、升级版本的权利以及为替换、修改或升级收取费用的权利。<br />\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 淘米公司保留因业务发展需要，单方面对软件的部分功能效果进行改变或进行限制，用户需承担此风险。<br />\r\n	4.8 本软件可能使用的第三方软件或技术，是受到合法授权的。因第三方软件或技术引发的任何纠纷，由该第三方负责解决，淘米公司不承担任何责任。 淘米公司不对第三方软件或技术提供客服支持，若您需要获取支持，请与该软件或技术提供商联系。<br />\r\n	4.9 淘米公司有权在服务中或经过服务投放各种广告和宣传信息，该广告/宣传信息可能以系统消息或弹出窗口等形式出现。<br />\r\n	<br />\r\n	5 法律责任与免责<br />\r\n	5.1 用户认可淘米公司将会尽其商业上的合理努力以保护用户的计算机资源及计算机通讯的隐私性和完整性，但是，用户承认和同意淘米公司不能就此事提供任何保证。<br />\r\n	5.2 淘米公司特别提请用户注意：淘米公司为了保障公司业务发展和调整的自主权，拥有随时自行修改或中断软件或服务授权而不需通知用户的权利，如有必要，修改或中断会以通告形式公布于淘米公司网站重要页面上。<br />\r\n	5.3 用户有进行4.1款规定的行为、发布违法信息、严重违反社会公德、以及其他违反法律的禁止性规定的行为，淘米公司将立即终止对用户提供服务。<br />\r\n	5.4 用户违反本《服务条款》或相关的服务条款的规定，导致或产生的任何第三方主张的任何索赔、要求或损失，包括合理的诉讼费用和律师费用，您同意赔偿淘米公司 与合作公司、关联公司，并使之免受损害。对此，淘米公司有权视用户的行为性质，采取包括但不限于中断使用许可、停止提供服务、限制使用、法律追究等措施。<br />\r\n	5.5 访问&ldquo;淘米网&rdquo;由用户自己承担风险，淘米公司对&ldquo;淘米网&rdquo;不作任何类型的担保，不论是明示的、默示的或法令的保证和条件，包括但不限于&ldquo;淘米网&rdquo;的适销 性、适用性、无病毒、无疏忽或无技术瑕疵问题、所有权、平静受益权、和无侵权的明示或默示担保和条件，对在任何情况下因使用或不能使用&ldquo;淘米网&rdquo;所产生的 直接、间接、偶然、特殊及后续的损害及风险，淘米公司及合作单位不承担任何责任。<br />\r\n	5.6 访问&ldquo;淘米网&rdquo;涉及到互联网服务，可能会受到各个环节不稳定因素的影响，存在因不可抗力、计算机病毒、黑客攻击、系统不稳定、用户所在位置、用户关机，非 法内容信息、骚扰信息屏蔽以及其他任何网络、技术、通信线路、信息安全管理措施等原因造成的服务中断或不能满足用户要求的风险，用户须明白并自行承担以上 风险，淘米公司与合作公司、关联公司不承担任何责任。<br />\r\n	5.7 使用&ldquo;淘米网&rdquo;及其服务可能存在来自他人匿名或冒名的含有威胁、诽谤、令人反感或非法内容的信息的风险，用户须明白并自行承担以上风险，淘米公司及合作单位、关联公司不对任何有关信息真实性、适用性、合法性承担责任。<br />\r\n	5.8 用户因第三方如电信部门的通讯线路故障、技术问题、网络、电脑故障、系统不稳定性及其他各种不可抗力原因而遭受的一切损失，淘米公司及其合作单位、关联公司不承担责任。<br />\r\n	5.9 因技术故障等不可抗力事件影响到&ldquo;淘米网&rdquo;及其服务的正常运行的，淘米公司及合作单位承诺在第一时间内与相关单位配合，及时处理进行修复，但用户因此而遭受的一切损失，淘米公司及合作单位不承担责任。<br />\r\n	5.10 用户之间通过&ldquo;淘米网&rdquo;及其服务与其他用户交往，因受误导或欺骗而导致或可能导致的任何心理、生理上的伤害以及经济上的损失，由过错方依法承担所有责任，一概与淘米公司及合作单位、关联公司无关。<br />\r\n	<br />\r\n	6 用户隐私权保护和个人信息利用<br />\r\n	6.1 尊重用户个人隐私是淘米公司的一项基本政策。&ldquo;隐私&rdquo;是指用户在注册淘米及相关游戏账号时提供给淘米公司的个人身份信息，包括用户注册资料中的姓名、个人 有效身份证件号码、联系方式、家庭住址等。而&ldquo;隐私&rdquo;不包括用户对&ldquo;淘米网&rdquo;及其服务的操作状态以及使用习惯等一些明确且客观反映在淘米公司服务器端的基 本记录信息和其他一切个人隐私信息范围外的普通信息。淘米公司一贯积极地采取技术与管理等合理措施保障用户账号的安全、有效；淘米公司将善意使用收集的信 息，采取各项有效且必要的措施以保护用户的隐私安全，并使用商业上合理的安全技术措施来保护用户的隐私不被未经授权的访问、使用或泄漏。<br />\r\n	6.2 因业务所需，淘米公司需与淘米公司的关联公司共享用户注册信息，淘米公司及关联公司承诺将善意使用其个人信息，淘米公司将不会向除关联公司外的任何其他方 公开或共享用户注册资料的中的姓名、个人有效身份证件号码、联系方式、家庭住址等个人身份信息，但下列情况除外：<br />\r\n	6.2.1用户或用户监护人授权淘米公司披露的（如：用户在选择某项服务时选择或同意公开、使用其个人信息）；<br />\r\n	6.2.2有关法律要求淘米公司披露的；<br />\r\n	6.2.3司法机关或行政机关基于法定程序要求淘米公司提供的；<br />\r\n	6.2.4淘米公司为了维护自己合法权益而向用户提起诉讼或者仲裁时；<br />\r\n	6.2.5应用户监护人的合法要求而提供用户个人身份信息时。<br />\r\n	<br />\r\n	7 其他条款<br />\r\n	7.1 本《服务条款》所定的任何条款的部分或全部无效者，不影响其它条款的效力。<br />\r\n	7.2 本《服务条款》的解释、效力及纠纷的解决，适用于中华人民共和国法律。若用户和淘米公司之间发生任何纠纷或争议，首先应友好协商解决，协商不成的，用户在此完全同意将纠纷或争议提交淘米公司所在地法院管辖。<br />\r\n	7.3 在法律容许的范围内，淘米公司拥有对本《服务条款》的解释权与修改权。</p>\r\n', '', 0, 1378122103);

-- --------------------------------------------------------

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
