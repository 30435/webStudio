-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013-12-27 10:32:57
-- 服务器版本: 5.6.11
-- PHP 版本: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `studio_kidsedu`
--

-- --------------------------------------------------------

--
-- 表的结构 `sk_agency`
--

CREATE TABLE IF NOT EXISTS `sk_agency` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '机构ID',
  `userid` int(10) unsigned NOT NULL COMMENT '机构所有者ID',
  `username` char(20) NOT NULL COMMENT '机构所有者',
  `name` varchar(80) NOT NULL DEFAULT '' COMMENT '机构名称',
  `name_english` varchar(80) NOT NULL DEFAULT '' COMMENT '机构英文名称',
  `type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '机构类型',
  `industry` tinyint(1) NOT NULL DEFAULT '0' COMMENT '机构所属行业',
  `capital` int(8) unsigned NOT NULL DEFAULT '0' COMMENT '注册资金',
  `regdate` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '注册时间',
  `address` varchar(160) NOT NULL DEFAULT '' COMMENT '机构地址',
  `contact_man` varchar(80) NOT NULL DEFAULT '' COMMENT '联系人',
  `contact_email` varchar(80) NOT NULL DEFAULT '' COMMENT '机构邮箱',
  `contact_mobile` char(13) NOT NULL DEFAULT '' COMMENT '联系手机',
  `contact_telephone` char(15) NOT NULL DEFAULT '' COMMENT '联系电话',
  `brand_name` varchar(80) NOT NULL DEFAULT '' COMMENT '品牌名称',
  `brand_name_english` varchar(80) NOT NULL DEFAULT '' COMMENT '品牌英文名称',
  `invest_capital` varchar(80) NOT NULL DEFAULT '' COMMENT '投资额度',
  `invit_model` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '招商模式',
  `direct_num` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '直营店数量',
  `league_num` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '加盟店数量',
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `sk_category`
--

CREATE TABLE IF NOT EXISTS `sk_category` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '栏目ID',
  `catname` varchar(40) NOT NULL DEFAULT '''''' COMMENT '栏目名称',
  `catdir` varchar(100) NOT NULL COMMENT '栏目所至目录',
  `image` varchar(100) NOT NULL,
  `parentid` mediumint(9) NOT NULL DEFAULT '0' COMMENT '父栏目ID',
  `modelid` smallint(6) NOT NULL DEFAULT '1' COMMENT '模型ID',
  `bind_domain` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `listorder` smallint(5) NOT NULL,
  `description` varchar(500) NOT NULL,
  `template_page` varchar(20) NOT NULL,
  `template_big` varchar(20) NOT NULL,
  `template_list` varchar(20) NOT NULL,
  `template_show` varchar(20) NOT NULL,
  `meta_title` varchar(100) NOT NULL,
  `meta_keywords` varchar(200) NOT NULL COMMENT '栏目关键字',
  `meta_description` varchar(300) NOT NULL COMMENT '栏目描述',
  `ishtml` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否显示 1不显示 0 显示',
  PRIMARY KEY (`id`),
  KEY `catname` (`catname`,`parentid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=56 ;

--
-- 转存表中的数据 `sk_category`
--

INSERT INTO `sk_category` (`id`, `catname`, `catdir`, `image`, `parentid`, `modelid`, `bind_domain`, `url`, `listorder`, `description`, `template_page`, `template_big`, `template_list`, `template_show`, `meta_title`, `meta_keywords`, `meta_description`, `ishtml`) VALUES
(1, '快乐学堂', 'school', '', 0, 2, '', 'http://kidsedu.ci.com/index/category?catid=1', 0, '', '', 'list_school_big', '', '', '', '', '', 0),
(2, '国学启蒙', 'gxqm', '', 1, 2, '', 'http://kidsedu.ci.com/index/category?catid=2', 0, '', '', 'list_school', '', '', '', '', '', 0),
(3, '快乐拼音', 'klpy', '', 1, 2, '', 'http://kidsedu.ci.com/index/category?catid=3', 0, '', '', 'list_school', '', '', '', '', '', 0),
(4, '轻松识字', 'qssz', '', 1, 2, '', 'http://kidsedu.ci.com/index/category?catid=4', 0, '', '', 'list_school', '', '', '', '', '', 0),
(5, '趣味英语', 'qwyy', '', 1, 2, '', 'http://kidsedu.ci.com/index/category?catid=5', 0, '', '', 'list_school', '', '', '', '', '', 0),
(6, '少儿科普', 'sekp', '', 1, 2, '', 'http://kidsedu.ci.com/index/category?catid=6', 0, '', '', 'list_school', '', '', '', '', '', 0),
(7, '三字经', 'szj', '', 2, 2, '', 'http://kidsedu.ci.com/index/category?catid=7', 0, '', '', 'list_school', '', '', '', '', '', 0),
(8, '学习唐诗', 'xxts', '', 2, 2, '', 'http://kidsedu.ci.com/index/category?catid=8', 0, '', '', 'list_school', '', '', '', '', '', 0),
(9, '认识声母', 'rssm', '', 3, 2, '', 'http://kidsedu.ci.com/index/category?catid=9', 0, '', '', 'list_school', '', '', '', '', '', 0),
(10, '认识韵母', 'rsym', '', 3, 2, '', 'http://kidsedu.ci.com/index/category?catid=10', 0, '', '', 'list_school', '', '', '', '', '', 0),
(11, '整体认读', 'ztrd', '', 3, 2, '', 'http://kidsedu.ci.com/index/category?catid=11', 0, '', '', 'list_school', '', '', '', '', '', 0),
(12, '中文识字卡', 'zwszk', '', 4, 2, '', 'http://kidsedu.ci.com/index/category?catid=12', 0, '', '', 'list_school', '', '', '', '', '', 0),
(13, '中文词组卡', 'zwczk', '', 4, 2, '', 'http://kidsedu.ci.com/index/category?catid=13', 0, '', '', 'list_school', '', '', '', '', '', 0),
(14, '英文单词卡', 'ywdck', '', 4, 2, '', 'http://kidsedu.ci.com/index/category?catid=14', 0, '', '', 'list_school', '', '', '', '', '', 0),
(15, '学英语', 'xyy', '', 5, 2, '', 'http://kidsedu.ci.com/index/category?catid=15', 0, '', '', 'list_school', '', '', '', '', '', 0),
(16, '英文字母歌', 'ywzmg', '', 5, 2, '', 'http://kidsedu.ci.com/index/category?catid=16', 0, '', '', 'list_school', '', '', '', '', '', 0),
(17, '奇趣自然', 'qqzr', '', 6, 2, '', 'http://kidsedu.ci.com/index/category?catid=17', 0, '', '', 'list_school', '', '', '', '', '', 0),
(18, '趣味科普', 'qwkp', '', 6, 2, '', 'http://kidsedu.ci.com/index/category?catid=18', 0, '', '', 'list_school', '', '', '', '', '', 0),
(19, '少儿数学', 'sesx', '', 6, 2, '', 'http://kidsedu.ci.com/index/category?catid=19', 0, '', '', 'list_school', '', '', '', '', '', 0),
(20, '儿童事业部', 'depart', '', 0, 2, '', 'http://kidsedu.ci.com/index/category?catid=20', 0, '<p>我们是中国领先的儿童成长公司，我们以“发现儿童的兴趣与天赋，培养儿童的爱好与技能，分享儿童成长中的快乐”为使命，以“有爱、用心”为经营理念。我们通过互联网、儿童游戏、移动终端、多媒体新兴技术、出版、实体产品与服务等方式，以及深受儿童喜爱的卡通形象，努力创造高品质内容与产品，打造最优质的全媒体家庭早教产品，促进学龄前儿童教育与成长事业的发展。</p><p>我们是一个有激情、有理想、务实创新的团队，我们为志同道合的年轻人提供实现梦想的舞台！作为一家高速成长的新型公司，我们关注每位员工的职业发展，鼓励员工进行学习和探索，提升职业技能和素养。同时我们员工提供良好的工作环境、愉悦的工作氛围、宽广的职业发展空，以及有竞争力的薪酬福利待遇。</p>', '0', 'list_big_depart', '0', '0', '', '', '', 0),
(21, '关于我们', 'gywm', '', 20, 2, '', 'http://kidsedu.ci.com/index/category?catid=21', 0, '', '0', '0', 'list_depart', '0', '', '', '', 0),
(22, '新闻与观点', 'xwgd', '', 20, 2, '', 'http://kidsedu.ci.com/index/category?catid=22', 0, '', '0', '0', 'list_depart', '0', '', '', '', 0),
(23, '产品中心', 'cpzx', '', 20, 2, '', 'http://kidsedu.ci.com/index/category?catid=23', 0, '', '0', '0', 'list_depart', '0', '', '', '', 0),
(24, '企业文化', 'qywh', '', 20, 2, '', 'http://kidsedu.ci.com/index/category?catid=24', 0, '', '0', '0', 'list_depart', '0', '', '', '', 0),
(25, '招贤纳士', 'zxns', '', 20, 2, '', 'http://kidsedu.ci.com/index/category?catid=25', 0, '', '0', '0', 'list_depart', '0', '', '', '', 0),
(26, '儿童成长研究中心', 'czyj', '', 20, 2, '', 'http://kidsedu.ci.com/index/category?catid=26', 0, '', '0', '0', 'list_depart', '0', '', '', '', 0),
(27, '使命与愿景', 'smyj', '', 21, 1, '', 'http://kidsedu.ci.com/index/category?catid=27', 0, '', '0', '0', 'page_depart', '0', '', '', '', 0),
(28, '品牌故事', 'ppgs', '', 21, 1, '', 'http://kidsedu.ci.com/index/category?catid=28', 0, '', '0', '0', 'page_depart', '0', '', '', '', 0),
(29, '合作伙伴', 'hzhb', '', 21, 1, '', 'http://kidsedu.ci.com/index/category?catid=29', 0, '', '0', '0', 'page_depart', '0', '', '', '', 0),
(30, '联系我们', 'lxwm', '', 21, 1, '', 'http://kidsedu.ci.com/index/category?catid=30', 0, '', '0', '0', 'page_depart', '0', '', '', '', 0),
(31, '发展历程', 'smyj', '', 22, 2, '', 'http://kidsedu.ci.com/index/category?catid=31', 0, '', '0', '0', 'list_depart', '0', '', '', '', 0),
(32, '媒体报道', 'ppgs', '', 22, 2, '', 'http://kidsedu.ci.com/index/category?catid=32', 0, '', '0', '0', 'list_depart', '0', '', '', '', 0),
(33, '观点', 'hzhb', '', 22, 2, '', 'http://kidsedu.ci.com/index/category?catid=33', 0, '', '0', '0', 'list_depart', '0', '', '', '', 0),
(34, '儿童游戏平台', 'yxpt', 'http://upload.ci.com/passport2013/1119/20131119140309562.jpg', 23, 1, '', 'http://kidsedu.ci.com/index/category?catid=34', 0, '', 'page_depart', '0', '0', '0', '', '', '', 0),
(35, '诺瓦奇兵', 'nwqb', 'http://upload.ci.com/passport2013/1119/20131119140341940.jpg', 23, 1, '', 'http://kidsedu.ci.com/index/category?catid=35', 0, '', 'page_depart', '0', '0', '0', '', '', '', 0),
(36, '儿童学堂', 'etxt', 'http://upload.ci.com/passport2013/1119/20131119140420453.jpg', 23, 1, '', 'http://kidsedu.ci.com/index/category?catid=36', 0, '', 'page_depart', '0', '0', '0', '', '', '', 0),
(37, '儿童读物', 'etdw', 'http://upload.ci.com/passport2013/1119/20131119140457349.jpg', 23, 1, '', 'http://kidsedu.ci.com/index/category?catid=37', 0, '', 'page_depart', '0', '0', '0', '', '', '', 0),
(38, '儿童商城', 'etsc', 'http://upload.ci.com/passport2013/1119/20131119140528263.jpg', 23, 1, '', 'http://kidsedu.ci.com/index/category?catid=38', 0, '', 'page_depart', '0', '0', '0', '', '', '', 0),
(39, '移动应用站', 'ydyy', '', 23, 1, '', 'http://kidsedu.ci.com/index/category?catid=39', 0, '', '0', '0', 'page_depart', '0', '', '', '', 0),
(40, '人才发展', 'rcfz', '', 24, 1, '', 'http://kidsedu.ci.com/index/category?catid=40', 0, '', '0', '0', 'page_depart', '0', '', '', '', 0),
(41, '价值观', 'jzg', '', 24, 1, '', 'http://kidsedu.ci.com/index/category?catid=41', 0, '', '0', '0', 'page_depart', '0', '', '', '', 0),
(42, '员工关怀', 'yggh', '', 24, 1, '', 'http://kidsedu.ci.com/index/category?catid=42', 0, '', '0', '0', 'page_depart', '0', '', '', '', 0),
(43, '快乐生活', 'klsh', '', 24, 1, '', 'http://kidsedu.ci.com/index/category?catid=43', 0, '', '0', '0', 'page_depart', '0', '', '', '', 0),
(48, '社会招聘', 'shzp', '', 25, 1, '', 'http://kidsedu.ci.com/index/category?catid=48', 0, '', '0', '0', 'page_depart', '0', '', '', '', 0),
(49, '校园招聘', 'xyzp', '', 25, 1, '', 'http://kidsedu.ci.com/index/category?catid=49', 0, '', '0', '0', 'page_depart', '0', '', '', '', 0),
(50, '工作环境', 'gzhj', '', 25, 1, '', 'http://kidsedu.ci.com/index/category?catid=50', 0, '', '0', '0', 'page_depart', '0', '', '', '', 0),
(51, '薪酬福利', 'xcfl', '', 25, 1, '', 'http://kidsedu.ci.com/index/category?catid=51', 0, '', '0', '0', 'page_depart', '0', '', '', '', 0),
(52, '机构简介', 'jgjj', '', 26, 1, '', 'http://kidsedu.ci.com/index/category?catid=52', 0, '', '0', '0', 'page_depart', '0', '', '', '', 0),
(53, '专家团队', 'zjtd', '', 26, 1, '', 'http://kidsedu.ci.com/index/category?catid=53', 0, '', '0', '0', 'page_depart', '0', '', '', '', 0),
(54, '教育体系', 'jytx', '', 26, 1, '', 'http://kidsedu.ci.com/index/category?catid=54', 0, '', '0', '0', 'page_depart', '0', '', '', '', 0),
(55, '研究成果', 'yjcg', '', 26, 1, '', 'http://kidsedu.ci.com/index/category?catid=55', 0, '', '0', '0', 'page_depart', '0', '', '', '', 0);

-- --------------------------------------------------------

--
-- 表的结构 `sk_course`
--

CREATE TABLE IF NOT EXISTS `sk_course` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '课程ID',
  `agency_id` smallint(5) unsigned NOT NULL COMMENT '所属机构ID',
  `school_id` smallint(5) unsigned NOT NULL COMMENT '所属学校ID',
  `name` char(20) NOT NULL COMMENT '课程名称',
  `sort` char(10) NOT NULL DEFAULT '' COMMENT '课程分类',
  `description` mediumtext NOT NULL COMMENT '课程描述',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `sk_member_kidsedu`
--

CREATE TABLE IF NOT EXISTS `sk_member_kidsedu` (
  `userid` int(10) unsigned NOT NULL COMMENT '用户ID',
  `username` char(32) NOT NULL COMMENT '用户名',
  `firsttime` int(10) unsigned NOT NULL COMMENT '第一次玩游戏的时间',
  `lasttime_login` int(10) NOT NULL,
  `lasttime_pay` int(10) NOT NULL,
  `lasttime` int(10) unsigned NOT NULL COMMENT '最后一次玩游戏的时间'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `sk_new`
--

CREATE TABLE IF NOT EXISTS `sk_new` (
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
  `position` varchar(20) NOT NULL,
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- 表的结构 `sk_picture`
--

CREATE TABLE IF NOT EXISTS `sk_picture` (
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
-- 表的结构 `sk_school`
--

CREATE TABLE IF NOT EXISTS `sk_school` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '学校ID',
  `agency_id` smallint(5) unsigned NOT NULL COMMENT '所属机构ID',
  `name` char(20) NOT NULL COMMENT '学校名称',
  `address` varchar(160) NOT NULL DEFAULT '' COMMENT '学校地址',
  `contact_man` varchar(80) NOT NULL DEFAULT '' COMMENT '联系人',
  `email` varchar(80) NOT NULL DEFAULT '' COMMENT '学校邮箱',
  `mobile` char(13) NOT NULL DEFAULT '' COMMENT '联系手机',
  `telephone` char(15) NOT NULL DEFAULT '' COMMENT '联系电话',
  `school_app` varchar(80) NOT NULL DEFAULT '' COMMENT '手机端应用',
  `school_map` varchar(80) NOT NULL DEFAULT '' COMMENT '地图信息',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `sk_spage`
--

CREATE TABLE IF NOT EXISTS `sk_spage` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '单网页资讯ID',
  `catid` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '栏目ID',
  `title` varchar(80) NOT NULL DEFAULT '' COMMENT '标题',
  `username` char(20) NOT NULL COMMENT '录入者',
  `content` mediumtext NOT NULL COMMENT '内容',
  `template` varchar(30) NOT NULL COMMENT '使用模板',
  `inputtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '录入时间',
  `updatetime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `sk_spage`
--

INSERT INTO `sk_spage` (`id`, `catid`, `title`, `username`, `content`, `template`, `inputtime`, `updatetime`) VALUES
(1, 27, '使命与愿景', 'wangcan', '<p><span style="color: #195a94;"><strong>我们的使命：</strong></span></p>\r\n<p><strong> </strong><span style="color: #539b31;"><strong>发现</strong><strong>、培养、分享</strong></span></p>\r\n<p><span style="color: #539b31;">发现儿童的兴趣与天赋</span></p>\r\n<ul></ul>\r\n<p><span style="color: #666666;">通过提供儿童喜爱的各种优质内容，以及适合各种场景的亲子互动工具，帮助家长（教育工作者）发现儿童细小的行为和兴趣点，做到对儿童的用心。让儿童接触他们真正感兴趣的，挖掘属于每一个个体特有的天赋。</span></p>\r\n<p><span style="color: #539b31;">培养儿童的爱好和技能</span></p>\r\n<ul></ul>\r\n<p><span style="color: #666666;">利用有强大理论支持的、经过广泛实验的全媒体表现形式作为工具，辅助家长（教育工作者）将被挖掘出的儿童兴趣发展成其终身收益的爱好，将个体特有的天赋培养成技能。</span></p>\r\n<p><span style="color: #539b31;">分享儿童成长中的乐趣</span></p>\r\n<ul></ul>\r\n<p><span style="color: #666666;">在儿童成长与发展的过程中，我们提供强大的服务平台，供儿童、家长及教育工作者记录与分享各种滋味的乐趣。在未来某一刻回顾过去时，儿童成长的点滴可以全方位立体展现在面前。</span></p>\r\n<p style="padding-left: 30px;">&nbsp;</p>\r\n<p><span style="color: #195a94;"><strong>我们的愿景：</strong></span></p>\r\n<p><strong> </strong><span style="color: #539b31;"><strong>中国最有贡献的儿童成长公司</strong></span></p>\r\n<p><strong> </strong></p>\r\n<p><span style="color: #666666;">儿童成长，既包含了孩子需要被关注的“教”与“育”的双方面，又包括了其从出生到长大成人的全过程。我们致力于在对儿童一生发展起决定性作用的学龄前阶段，努力做出最大的贡献，以此为社会乃至人类的进步贡献自己的力量。</span></p>\r\n<p style="padding-left: 30px;">&nbsp;</p>\r\n<p><strong><br />\r\n</strong></p>\r\n<p>&nbsp;</p>', '', 0, 1384830377),
(2, 53, '', 'wangcan', '<p><strong><img width="728" height="1170" alt="" src="http://preview.slanissue.com/wp-content/uploads/2012/04/profess-.jpg" title="专家团队"><br>\r\n</strong></p>', '', 0, 1384835150),
(3, 52, '', 'wangcan', '<p><span style="color: #195a94;"><strong>芝兰玉树儿童成长研究中心</strong></span></p>\r\n<p><span style="color: #195a94;"><strong></strong></span>芝兰玉树儿童成长研究中心是芝兰玉树公司旗下的专业教育科研机构，承担着国家和地方各级教育科研课题的研究、成果转化与应用推广工作。中心与北京师范大学、中国科学院心理研究所、中央教育科学研究所、中国人民大学、华东师范大学、南京师范大学等多个国家高等学府或专业教育科研机构的科研力量，以及各省市教育系统的科研力量，建立了广泛而密切的合作，承担了《多种媒体在学前教育中应用研究》等多个前沿教育科研课题的研究工作，促进科研成果与儿童成长发展需要的相互转化，服务于中国学龄前儿童全面健康快乐成长。</p>\r\n', '', 0, 1384835249),
(4, 54, '', 'wangcan', '<p><a href="http://www.slanissue.com/wp-content/uploads/2012/04/芝兰玉树儿童教育体系.jpg"><img class="aligncenter" title="芝兰玉树儿童教育体系" src="http://www.slanissue.com/wp-content/uploads/2012/04/芝兰玉树儿童教育体系.jpg" alt="" width="600" height="743" /></a></p>\r\n<p><span style="color: #666666;">以加德纳多元智能理论和皮亚杰儿童发展阶段论为基础，吸收借鉴中华民族优秀教育传统中因材施教理念的精髓，在北京师范大学学前教育研究所博士生导师霍力岩教授的科研指导下，芝兰玉树提出“8+1儿童成长模式”，即通过一套科学的测评体系，评估儿童各项成长指标发展水平，并以此为依据，为每一个儿童量身定制的个性化学习成长解决方案，促进其“八大能力培养+综合素质提升”，为幸福人生奠基。</span></p>\r\n<p><span style="color: #666666;">“8+1儿童成长模式”，包含“健康”、“语言”、“科学”、“数学”、“社会”、“习惯”、“美术”、“音乐”、“综合”9个模块。其中，前8个模块对应“八大能力培养”，最后1个模块对应“综合素质提升”。</span></p>\r\n<p><span style="color: #666666;"><br />\r\n</span></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', '', 0, 1384835279),
(5, 55, '', 'wangcan', '<p><strong><span style="color: #195a94;"> 芝兰玉树儿童发展指标体系</span></strong></p>\r\n<ul></ul>\r\n<p><span style="color: #666666;">参考美国各州儿童发展指标制定标准与策略，结合我国“幼儿园教育指导纲要”和“0～6岁年龄段家庭教育指导大纲”，以“8+1儿童成长模式”教育体系为基础，芝兰玉树邀请专家学者合作科研，制定了“芝兰玉树儿童发展指标体系”。该指标体系涵盖健康、语言、科学、数学、社会、习惯、美术、音乐、综合9个模块，每个模块下的指标由三级构成，前两级为概括性、指导性指标，第三级为操作指导型指标，后一级指标是前一级指标的细化，总计包含400多个细分指标。本套指标体系由芝兰玉树与北京师范大学学前教育研究所霍力岩教授合作完成。</span></p>\r\n<p>&nbsp;</p>\r\n<p><strong><span style="color: #195a94;"> 芝兰玉树儿童成长测评量表</span></strong></p>\r\n<ul></ul>\r\n<p>“儿童成长测评量表”是在借鉴国内外相关研究成果的基础上，按照心理测量学原理编制的，以测量儿童健康、言语、认知、社会、个性等各方面发展情况为基础目标，以为家长育儿提供个性化解决方案为追求意趣的专业测评量表。通过正确使用该量表，使用者可以较为全面地评价儿童的成长情况。在专业人士的指导下，家长或者教师，能够选择更科学合理的教育方法与策略，促进儿童全面发展。该量表使用对象为幼儿教育专业认识、幼儿教师、家长等。由芝兰玉树与中国科学院心理研究所朱莉琪研究员合作完成。</p>\r\n<p>&nbsp;</p>\r\n<p><strong><span style="color: #195a94;"> 芝兰玉树0-6岁幼儿品德与社会性发展指标</span></strong></p>\r\n<ul></ul>\r\n<p><span style="color: #666666;">社会科学领域相关研究显示，儿童在幼年阶段的品德和社会性发展水平，与未来事业成就状况、人生幸福感等生命品质关键衡量指标实现程度具有非常密切的关系。因此，芝兰玉树邀请相关领域专家学者研发了“芝兰玉树0-6岁幼儿品德与社会性发展指标”，从情绪情感智力、自我意识、性别角色、社会行为、道德发展等多个维度描述了不同年龄段儿童应实现的发展水平，并为实现各个发展目标提供了科学的教育活动设计建议。此发展指标体系由芝兰玉树与中央教育科学研究所吴安春研究员合作完成。</span></p>\r\n<p>&nbsp;</p>\r\n<p><strong><span style="color: #195a94;">芝兰玉树分年龄段分层分级儿童成长内容体系</span></strong></p>\r\n<ul></ul>\r\n<p>在以“8+1儿童成长模式”为主体的教育理论体系指导下，根据0-6岁儿童每个成长阶段身心发展、情绪情感、思维方式的不同特征，在专家顾问团队广泛参与、深度介入的条件下，芝兰玉树研发了学龄前儿童应该学习和掌握的内容体系。该内容体系涵盖健康、语言、科学、数学、社会、习惯、美术、音乐、综合9个模块，具有全面、系统、分年龄段、分级、分层的主要特征，关注儿童身心健康、习惯养成、智力发展等多个维度的发展，以促进儿童全面、健康、和谐发展为主旨，为广大家长和幼儿教育工作者教育儿童提供专业化的支撑。</p>\r\n<p>&nbsp;</p>\r\n<p><strong><span style="color: #195a94;">芝兰玉树幼儿识字库</span></strong></p>\r\n<ul></ul>\r\n<p>脑科学研究发现，幼儿的逻辑思维能力虽然不抵成人，但他们的形象认知能力远强于成人。他们的眼睛就像照相机，汉字、英文单词等字符都是一种形象，幼儿对他们就像认物一样从整体加以识别。科学研究证明，拼音文字主要是音码在左脑发挥作用的单脑文字，而汉字是音码、形码、意码在左右脑上同时起作用的双脑文字。表音表意、象形为主的汉字具有最适合婴幼儿的认知识别的特点，每个字就像一幅画一样，很好地开发右脑，使其逐步达到手脑协调、整合。科学的识字教育对婴幼儿的全面发展是有益的。在北京师范大学专家指导下，芝兰玉树研发了幼儿识字库，以指导0-6岁幼儿识字教育类产品研发。</p>\r\n<p>&nbsp;</p>', '', 0, 1384835315),
(6, 51, '', 'wangcan', '<p>芝兰玉树在为每一位员工提供良好的发展空间的同时，建立了全面的薪酬福利体系，包括固定薪酬、年终红包、项目奖金、伯乐奖金、各种专项奖励及完善的福利。</p>\r\n<p><img class="aligncenter" title="薪酬福利_" src="http://preview.slanissue.com/wp-content/uploads/2012/05/薪酬福利_.png" alt="" width="360" height="359" /></p>\r\n<p><strong><span style="color: #195a94;">固定薪酬</span></strong></p>\r\n<p>一年4次调薪机会，每季度会对绩效表现持续优秀的员工，进行特殊调薪。</p>\r\n<p>&nbsp;</p>\r\n<p><strong><span style="color: #195a94;">激励奖金</span></strong></p>\r\n<p><strong><span style="color: #539b31;">年度贡献奖金</span></strong></p>\r\n<p>每年公司将设立各种奖项，奖励那些优秀员工。包括：最佳创意奖、最佳编剧奖、最具潜力新人奖、智勇神狸奖等，以精神激励和物质奖励的形式，激励每一位有突出表现和杰出贡献的员工和团队。</p>\r\n<p>&nbsp;</p>\r\n<p><strong><span style="color: #195a94;">年终红包</span></strong></p>\r\n<p>年度结束后，根据员工本年度的绩效表现及公司当年的业绩情况发放年终红包，共同感受收获的喜悦。</p>\r\n<p>&nbsp;</p>\r\n<p><strong><span style="color: #195a94;">项目奖金</span></strong></p>\r\n<p>项目结束后，将以不同形式对项目参与人员进行鼓励，感谢他们的努力。同时其他人也能分享到他们的喜悦——喜糖。</p>\r\n<p>&nbsp;</p>\r\n<p><strong><span style="color: #195a94;">伯乐奖金</span></strong></p>\r\n<p>根据岗位需求，推荐成功的员工将得到“伯乐”称号及奖励。全员共同参与招聘，共同为完成公司战略目标以及人才战略的实施献出一份力量。</p>\r\n<p>&nbsp;</p>\r\n<p><strong><span style="color: #195a94;">专项奖金</span></strong></p>\r\n<p>你可以通过发现你周围的事与物，用文字展现它们的美。同时可以赢得“智慧贝果”兑换你想要的礼品。</p>\r\n<p>&nbsp;</p>\r\n<p><strong><span style="color: #195a94;">基本福利</span></strong></p>\r\n<p><strong><span style="color: #539b31;">社会保险</span></strong></p>\r\n<p>为员工提供完善的福利保障，对于符合条件的员工，按照国家和地区相关规定交纳五险。五险包括：医疗保险、养老保险、失业保险、工伤保险、生育保险。</p>\r\n<p><strong><span style="color: #539b31;">员工宿舍</span></strong></p>\r\n<p>为符合条件的员工提供员工集体宿舍。你只需要支付很少的费用就可以享受不一样的住宿。</p>\r\n<p>&nbsp;</p>\r\n<p><strong><span style="color: #195a94;">补充福利</span></strong></p>\r\n<p><strong><span style="color: #539b31;">年度健康体检</span></strong></p>\r\n<p>每年为每位员工提供全面的健康体检，关注每一位员工的身心健康。</p>\r\n<p><strong><span style="color: #539b31;">年度旅游</span></strong></p>\r\n<p>每年组织全体员工外出游玩，走入大自然开阔视野、放松心情，让你与大自然零距离接触。</p>\r\n<p>&nbsp;</p>\r\n<p><img class="aligncenter" title="年度旅游" src="http://preview.slanissue.com/wp-content/uploads/2012/05/河狸家族合影_副本.jpg" alt="" width="450" height="338" /></p>\r\n<p><strong><span style="color: #539b31;">员工假期</span></strong></p>\r\n<p>除法定的公众假期、周末双休日、婚假、丧假、产假、陪产假、哺乳假等相关假期外，员工还可享有带薪年假、带薪病假、带薪思考假等相关假期。</p>\r\n<p>&nbsp;</p>\r\n<p><strong><span style="color: #195a94;">文化活动</span></strong></p>\r\n<p><span style="color: #539b31;"><strong>社团活动</strong></span></p>\r\n<p>丰富的社团活动，让你在工作之余尽情发挥你的特长，放松心情，享受生活，保持健康体魄。<br />\r\n只要你在某方面有特长或者你对某方面有兴趣，就可以召集队员，组成社团。目前社图有游泳社团、羽毛球社团、台球社团、K歌社团、电影社团、动漫社团……更多的社团在等待你的发掘或加入。</p>\r\n<p><a href="http://preview.slanissue.com/wp-content/uploads/2012/05/喜极而泣_副本.jpg"><img class="aligncenter" title="喜极而泣_副本" src="http://preview.slanissue.com/wp-content/uploads/2012/05/喜极而泣_副本.jpg" alt="" width="450" height="338" /></a></p>\r\n<p>&nbsp;</p>\r\n<p><strong><span style="color: #195a94;">其他福利</span></strong></p>\r\n<p>节日礼品、生日礼物、结婚贺礼、生育礼金、夏季防暑降温食品提供等等。更多的特别福利在等着你，快来亲身体会这些吧！</p>\r\n<div>\r\n<hr size="1" />\r\n<div>\r\n<div>\r\n<p>&nbsp;</p>\r\n</div>\r\n</div>\r\n</div>', '', 0, 1384835376),
(7, 50, '', 'wangcan', '<p>为员工提供良好的办公环境及娱乐设施，让你时刻感受到“家”的感觉。<br />\r\n只要有想法，就可以在“你的空间里”里做一位“装修达人”！<br />\r\n<img title="工作环境" src="http://preview.slanissue.com/wp-content/uploads/2012/05/工作环境.png" alt="" width="600" height="800" /></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', '', 0, 1384835404),
(8, 40, '', 'wangcan', '<div><span style="color: #195a94; font-size: medium;"><strong>人才发展</strong></span></div>\r\n<p><span style="color: #539b31; font-size: medium;"><span style="color: #666666;">芝兰玉树注重每一位员工的发展，建立了管理与专业“双通道”的职业发展体系，并根据员工自身的素质模型及兴趣取向选择适合的发展通道，做到时刻关注员工不同阶段的发展。</span><br />\r\n<strong><span style="color: #888888;"><img class="aligncenter size-full wp-image-1899" src="http://preview.slanissue.com/wp-content/uploads/2012/04/人才发展2.png" alt="" width="460" height="371" /></span></strong></span></p>\r\n<div><span style="color: #666666; font-size: medium;"> </span></div>\r\n<div><span style="font-size: small;"><span style="line-height: 24px;"><br />\r\n</span></span></div>\r\n<div><span style="color: #99cc00; font-size: medium;"><strong> </strong></span></div>\r\n<div><span style="font-size: medium;"><strong> </strong></span></div>\r\n<div><strong><span style="color: #195a94; font-size: medium;">培训体系</span></strong><br />\r\n<span style="font-size: medium;"><img class="aligncenter size-full wp-image-1901" title="培训体系" src="http://preview.slanissue.com/wp-content/uploads/2012/04/培训体系.png" alt="" width="460" height="461" /></span></div>\r\n<div>\r\n<div><span style="color: #539b31;"><strong><span style="font-size: medium;">导师计划</span></strong></span></div>\r\n<div><strong> </strong></div>\r\n<div><span style="font-size: medium; color: #666666; background-color: #ffffff;">从进入芝兰玉树第一天开始，将由你身边的“司兄”与“司姐”帮助你快速的融入。</span></div>\r\n<div><span style="color: #99cc00;"><strong><span style="color: #539b31;"><span style="font-size: medium;">外部培训、交流及学历再深造</span><span style="font-size: medium;"><br />\r\n</span></span></strong></span></div>\r\n<div><span style="font-size: medium; color: #666666;">选派优秀的员工参加外部专业培训或业界交流会，学习最新的专业技术，了解行业咨询；</span></div>\r\n<div><span style="font-size: medium;"><span style="color: #666666;">对年度优秀员工，由公司出资提供学历再次深造机会。</span><br />\r\n</span></div>\r\n<div><span style="font-size: medium; color: #539b31;"><strong>公司图书库 </strong></span></div>\r\n<div>\r\n<div>\r\n<div><span style="font-size: medium; color: #666666;">提供大量专业书籍，建立各专业领域图书库，提供专项教育津贴，用于购买学习书籍。</span></div>\r\n<div><span style="font-size: medium; color: #539b31;"><strong>分享活动 </strong></span></div>\r\n<div><span style="font-size: medium;"><span style="color: #666666;">不定期的举行分享活动（包括旅游、养生保健、美食、美容等方面的知识信息）。</span></span></div>\r\n</div>\r\n</div>\r\n</div>', '', 0, 1384835443),
(9, 41, '', 'wangcan', '<p><span style="color: #195a94; font-size: medium;"><strong>我们的价值观</strong></span></p>\r\n<p><span style="font-size: medium;"><strong> </strong><span style="color: #539b31;"><strong>责任</strong></span></span></p>\r\n<p><span style="font-size: medium;">我们的事业将影响一代或几代人，我们肩负着对下一代的责任、对千万家庭的责任、对社会的未来的责任。我们更要从小事，做到对亲人、用户、同事、朋友负责任。</span></p>\r\n<p><span style="font-size: medium; color: #539b31;"><strong>信念</strong></span></p>\r\n<p><span style="font-size: medium;">伟大梦想的实现，源自坚定的信念和强大的意志。我们坚信，为了儿童的成长和教育事业，我们将不懈努力追求极致。</span></p>\r\n<p><span style="font-size: medium; color: #539b31;"><strong>创新</strong></span></p>\r\n<p><span style="font-size: medium;">在孩子的角度看世界，以最适合TA们的媒介形式，不断推出具有创造性的内容、产品与服务。用“爱”去创造，用“心”来服务。</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style="color: #195a94; font-size: medium;"><strong>我们的经营理念 </strong></span></p>\r\n<p><span style="font-size: medium; color: #539b31;"><strong>有爱</strong></span></p>\r\n<p><span style="font-size: medium;">心怀有爱地对待伟大的事业，让影响一代乃至几代人的爱融入到产品与服务的点滴之中。</span></p>\r\n<p><span style="font-size: medium; color: #539b31;"><strong>用心</strong></span></p>\r\n<p><span style="font-size: medium;">用心对待产品与服务的每个细节，让心的力量伴随孩子成长。促进家长对孩子用心，观察、记录、分享TA的一切。</span></p>', '', 0, 1384835480),
(10, 42, '', 'wangcan', '<p><strong><span style="color: #539b31; font-size: medium;">免费早餐及加班宵夜</span></strong></p>\r\n<p><span style="font-size: medium;">公司提供免费的早餐及加班宵夜，关注员工的饮食健康，让你时刻精神百倍！</span></p>\r\n<p><strong><span style="color: #539b31; font-size: medium;">多种口味的下午茶</span></strong></p>\r\n<p><span style="font-size: medium;">公司根据员工意见不定期的更换不同口味的下午茶及各种饮料，让你时刻补充能量！</span></p>\r\n<p><strong><span style="color: #539b31; font-size: medium;">年度健康体检</span></strong></p>\r\n<p><span style="font-size: medium;">每年挑选口碑良好的体检中心，为员工提供专业全面的健康体检并通过第三方为员工建立员工电子健康档案。</span></p>\r\n<p><strong><span style="color: #539b31; font-size: medium;">常用医药箱</span></strong></p>\r\n<p><span style="font-size: medium;">配备常用药品（非处方药品），以备临时需要。</span></p>', '', 0, 1384835517),
(11, 30, '', 'wangcan', '<address> </address>\r\n<address><strong><br />\r\n<img class="alignright size-full wp-image-2878" title="联系我们" src="http://www.slanissue.com/wp-content/uploads/2012/04/地图地图.jpg" alt="" width="364" height="251" /><br />\r\n</strong></address>\r\n<address></address>\r\n<p><strong>北京芝兰玉树科技有限公司</strong></p>\r\n<p><span style="color: #539b31;">总    机：</span>+86-10-53232055</p>\r\n<p><span style="color: #539b31;">传    真：</span>+86-10-53232050</p>\r\n<p><span style="color: #539b31;">地    址：<span style="color: #888888;">北京市</span></span><span style="color: #888888;">朝阳区北四环东路133号嘉华大厦7层</span></p>\r\n<p><span style="color: #539b31;">邮    编：</span>100101</p>\r\n<p><span style="color: #539b31;">商务合作：</span><span>BD#beva.com（请用@替换#)</span></p>\r\n<p><span style="color: #539b31;">客户服务：</span><span>service#beva.com（请用@替换#)</span></p>\r\n<p><span style="color: #539b31;">媒体采访</span><span style="color: #539b31;">：</span><span>PR#beva.com（请用@替换#)</span></p>\r\n<p><span style="color: #539b31;">媒体素材</span><span style="color: #539b31;">：</span><span style="font-size: medium; color: #ffff00;"><a href="http://www.beva.com/logos.html">http://www.beva.com/logos.html</a></span><span style="color: #539b31;"> </span><span style="font-size: medium;"> </span><span style="font-size: medium;"><a href="http://www.beva.com/logos.html"></a></span></p>\r\n<p>&nbsp;</p>\r\n<p><strong><em><br />\r\n</em><br />\r\n</strong></p>', '', 0, 1384835561),
(12, 29, '', 'wangcan', '<p><img src="http://www.slanissue.com/wp-content/uploads/2012/04/合作伙伴.jpg" alt="" width="600" height="352" /></p>\r\n<p><a href="http://preview.slanissue.com/wp-content/uploads/2012/04/合作机构.jpg"><br />\r\n</a><a href="http://preview.slanissue.com/wp-content/uploads/2012/04/3_peihuakids.jpg"></a></p>\r\n<p><a href="http://preview.slanissue.com/wp-content/uploads/2012/04/3_peihuakids.jpg"></a></p>\r\n<p><a href="http://preview.slanissue.com/wp-content/uploads/2012/04/3_peihuakids.jpg"></a></p>', '', 0, 1384835587),
(13, 28, '', 'wangcan', '<p>&nbsp;</p>\r\n<p><span style="color: #195a94;"><strong>芝兰玉树品牌故事</strong></span><br />\r\n<img class="aligncenter" title="slanissue" src="http://preview.slanissue.com/wp-content/uploads/2012/04/图片1.jpg" alt="" width="200" height="211" /></p>\r\n<p><span style="color: #666666;">玄字幼度。少颖悟，与从兄朗俱为叔父安所器重。安尝戒约子侄，因曰：“子弟亦何豫人事，而正欲使其佳？”诸人莫有言者。玄答曰：“譬如芝兰玉树，欲使其生于庭阶耳。”安悦。</span></p>\r\n<p style="text-align: right;"><span style="color: #666666;">——《晋书·谢安传》</span></p>\r\n<p><span style="color: #666666;">“芝兰玉树”是指名贵的兰花、玉做的树，比喻一个人有高品格、高气节、高道德情操，取自《晋书•谢安传》。公司之所以取名为“芝兰玉树”，也正是想借用这样一个美好的寓意来阐述公司的核心理念：我们致力于帮助儿童成长为高品格、高气节、高道德情操的人，并以此为公司业务发展的根本。愿我们能尽自己所能，去影响未来一代甚至几代人。为中国学龄前教育的进步贡献点滴之力。</span></p>\r\n<p style="text-align: right;"><span style="color: #666666;">—— Alvin （CEO of Slanissue）</span></p>\r\n<p style="text-align: right;"><a href="http://www.slanissue.com/archives/134" target="_blank">观看芝兰玉树品牌宣传片</a></p>\r\n<p style="text-align: left;"><span style="color: #195a94;"><strong>“贝瓦”品牌故事</strong></span></p>\r\n<p style="text-align: left;"><span style="color: #195a94;"><strong><a href="http://www.beva.com/home/family" target="_blank"><img class="aligncenter" title="family" src="http://preview.slanissue.com/wp-content/uploads/2012/04/family-.jpg" alt="" width="500" height="293" /></a><br />\r\n</strong></span></p>\r\n<p>&nbsp;</p>', '', 0, 1384835605);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
