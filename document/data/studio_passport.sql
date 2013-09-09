-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013 �?09 �?09 �?07:54
-- 服务器版本: 5.6.11
-- PHP 版本: 5.5.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `studio_passport`
--

-- --------------------------------------------------------

--
-- 表的结构 `sp_admin_manager`
--

CREATE TABLE IF NOT EXISTS `sp_admin_manager` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '管理员ID',
  `username` varchar(20) NOT NULL COMMENT '管理员帐号',
  `truename` varchar(30) NOT NULL,
  `password` char(32) NOT NULL COMMENT '管理员密码',
  `roleid` smallint(5) unsigned NOT NULL COMMENT '管理员角色',
  `email` varchar(40) NOT NULL COMMENT '管理员E-mail',
  `encrypt` char(6) NOT NULL COMMENT '辅助加密字符串',
  `createtime` int(10) unsigned NOT NULL COMMENT '创建时间',
  `loginnum` smallint(5) unsigned NOT NULL COMMENT '登录次数',
  `lastip` varchar(15) NOT NULL COMMENT '最后登录IP',
  `lasttime` int(10) unsigned NOT NULL COMMENT '最后登录时间',
  `islock` enum('1','0') NOT NULL COMMENT '是否锁定，0：锁定，1：不锁定',
  `handpay_key` char(100) NOT NULL COMMENT '人工支付密钥',
  `handpay_en` char(10) NOT NULL COMMENT '支付密钥短语',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `sp_admin_manager`
--

INSERT INTO `sp_admin_manager` (`id`, `username`, `truename`, `password`, `roleid`, `email`, `encrypt`, `createtime`, `loginnum`, `lastip`, `lasttime`, `islock`, `handpay_key`, `handpay_en`) VALUES
(1, 'wangcanliang', '', '04ffd28d0a85e2050db77cbeeaa7d8ac', 1, '0', 'l9rIUD', 1361149565, 131, '127.0.0.1', 1378705114, '1', '2f5a45a93f1bb1824dbb649e85e3753d', 'tE4RTF'),
(2, 'wangcan', 'wang', '37bbc5485e0993f7caf024ef545d5d5c', 2, 'eee@test.com', 'g9dYGv', 1364371358, 3, '127.0.0.1', 1362981487, '1', '', '');

-- --------------------------------------------------------

--
-- 表的结构 `sp_admin_managerlog`
--

CREATE TABLE IF NOT EXISTS `sp_admin_managerlog` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '日志ID',
  `userid` smallint(5) unsigned NOT NULL COMMENT '管理员ID',
  `username` varchar(20) NOT NULL COMMENT '管理员帐号',
  `roleid` smallint(5) unsigned NOT NULL COMMENT '角色ID',
  `role_name` varchar(50) NOT NULL COMMENT '角色名称',
  `menu_id` varchar(100) NOT NULL COMMENT '菜单ID',
  `menu_name` char(20) NOT NULL COMMENT '菜单名称',
  `data` mediumtext NOT NULL COMMENT '操作详情',
  `data_old` varchar(5000) NOT NULL,
  `logtype` varchar(20) NOT NULL,
  `ip` varchar(17) NOT NULL COMMENT '操作IP',
  `inputtime` int(10) unsigned NOT NULL COMMENT '操作时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `sp_admin_menu`
--

CREATE TABLE IF NOT EXISTS `sp_admin_menu` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '菜单ID',
  `name` char(20) NOT NULL COMMENT '名称',
  `parentid` smallint(5) unsigned NOT NULL COMMENT '父级菜单ID',
  `app_code` char(20) NOT NULL COMMENT '所属应用代码',
  `controller` char(20) NOT NULL COMMENT '控制器代码',
  `method` char(20) NOT NULL COMMENT '方法',
  `extparam` char(100) NOT NULL COMMENT '附加参数',
  `listorder` smallint(5) unsigned NOT NULL COMMENT '排序',
  `islog` enum('1','0') NOT NULL COMMENT '是否记入管理员操作日志，0：不记入；1：记入',
  `display` enum('4','3','2','1','0') NOT NULL DEFAULT '1' COMMENT '显示类型，0或1：在后台顶部和左侧显示；2：在后台右侧顶部显示；3：基于具体的记录显示',
  PRIMARY KEY (`id`),
  KEY `listorder` (`listorder`),
  KEY `parentid` (`parentid`),
  KEY `operation` (`app_code`,`controller`,`method`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=248 ;

--
-- 转存表中的数据 `sp_admin_menu`
--

INSERT INTO `sp_admin_menu` (`id`, `name`, `parentid`, `app_code`, `controller`, `method`, `extparam`, `listorder`, `islog`, `display`) VALUES
(1, '我的面板', 0, 'passport', '', '', '', 1, '0', '1'),
(2, '管理设置', 0, 'passport', '', '', '', 2, '0', '1'),
(3, '用户中心', 0, 'passport', '', '', '', 3, '0', '1'),
(4, '应用管理', 0, 'passport', '', '', '', 4, '0', '1'),
(5, '网页游戏', 0, 'webgame', '', '', '', 5, '0', '1'),
(6, '支付模块', 0, 'pay', '', '', '', 6, '0', '1'),
(7, '采集系统', 0, 'spider', '', '', '', 7, '0', '1'),
(8, '测试站点', 0, 'movie', '', '', '', 8, '0', '1'),
(9, '测试站点2', 0, 'tbshop', '', '', '', 9, '0', '1'),
(10, '儿童教育', 0, 'kidsedu', '', '', '', 10, '0', '1'),
(11, '管理员信息', 1, 'passport', '', '', '', 0, '0', '1'),
(12, '修改个人信息', 11, 'passport', 'manager', 'editm', '', 0, '0', '1'),
(13, '修改密码', 11, 'passport', 'manager', 'editp', '', 0, '0', '1'),
(14, '操作记录', 11, 'passport', 'managerlog', 'listinfom', '', 0, '0', '1'),
(15, '查看日志', 11, 'passport', 'managerlog', 'viewm', '', 0, '0', '1'),
(16, '管理员设置', 2, 'passport', '', '', '', 0, '0', '1'),
(17, '管理员操作日志', 2, 'passport', '', '', '', 1, '0', '0'),
(18, '管理员管理', 16, 'passport', 'manager', 'listinfo', '', 0, '0', '1'),
(19, '添加管理员', 16, 'passport', 'manager', 'add', '', 0, '1', '2'),
(20, '编辑管理员', 16, 'passport', 'manager', 'edit', '', 0, '1', '3'),
(21, '删除管理员', 16, 'passport', 'manager', 'delete', '', 0, '1', '3'),
(22, '锁定管理员', 16, 'passport', 'manager', 'lock', '', 0, '1', '3'),
(23, '查看管理员', 16, 'passport', 'manager', 'view', '', 0, '1', '3'),
(24, '角色管理', 16, 'passport', 'role', 'listinfo', '', 0, '0', '1'),
(25, '查看', 16, 'passport', 'role', 'view', '', 0, '1', '3'),
(26, '编辑', 16, 'passport', 'role', 'edit', '', 0, '1', '3'),
(27, '删除', 16, 'passport', 'role', 'delete', '', 0, '1', '3'),
(28, '添加角色', 16, 'passport', 'role', 'add', '', 0, '1', '2'),
(29, '菜单管理', 16, 'passport', 'menu', 'listinfo', '', 0, '0', '1'),
(30, '查看', 16, 'passport', 'menu', 'view', '', 0, '1', '2'),
(31, '查看', 16, 'passport', 'menu', 'view', '', 0, '1', '3'),
(32, '编辑', 16, 'passport', 'menu', 'edit', '', 0, '1', '3'),
(33, '删除角色', 16, 'passport', 'menu', 'delete', '', 0, '1', '3'),
(34, '添加菜单', 16, 'passport', 'menu', 'add', '', 0, '1', '2'),
(35, '角色权限', 16, 'passport', 'role', 'editPriv', '', 0, '1', '3'),
(36, '查看日志', 17, 'passport', 'managerlog', 'view', '', 0, '0', '3'),
(37, '操作日志', 17, 'passport', 'managerlog', 'listinfo', '', 0, '0', '1'),
(38, '用户中心设置', 3, 'passport', '', '', '', 0, '1', '1'),
(39, '用户管理', 3, 'passport', '', '', '', 1, '1', '1'),
(40, '用户组管理', 3, 'passport', '', '', '', 2, '1', '1'),
(41, '基本设置', 38, 'passport', 'config', 'base', '', 0, '1', '1'),
(42, '管理用户', 39, 'passport', 'member', 'listinfo', '', 0, '1', '1'),
(43, '查看用户', 39, 'passport', 'member', 'view', '', 0, '1', '1'),
(44, '审核用户', 39, 'passport', 'member', 'check', '', 0, '1', '1'),
(45, '管理用户组', 40, 'passport', 'group', 'listinfo', '', 0, '1', '1'),
(46, '添加用户组', 40, 'passport', 'group', 'add', '', 0, '1', '2'),
(47, '查看用户组', 40, 'passport', 'group', 'view', '', 0, '1', '3'),
(48, '编辑用户组', 40, 'passport', 'group', 'edit', '', 0, '1', '3'),
(49, '删除用户组', 40, 'passport', 'group', 'delete', '', 0, '1', '3'),
(50, '平台附件管理', 4, 'passport', '', '', '', 0, '1', '1'),
(51, '广告管理', 4, 'passport', '', '', '', 0, '1', '1'),
(52, '友情链接', 4, 'passport', '', '', '', 0, '1', '1'),
(53, '消息管理', 4, 'passport', '', '', '', 0, '1', '1'),
(54, '评论管理', 4, 'passport', '', '', '', 0, '1', '1'),
(55, '管理附件', 50, 'passport', 'attachment', 'listinfo', '', 0, '1', '1'),
(56, '查看附件', 50, 'passport', 'attachment', 'view', '', 0, '1', '3'),
(57, '删除附件', 50, 'passport', 'attachment', 'delete', '', 0, '1', '3'),
(58, '管理版位', 51, 'passport', 'poster_space', 'listinfo', '', 0, '1', '1'),
(59, '添加版位', 51, 'passport', 'poster_space', 'add', '', 0, '1', '2'),
(60, '查看版位', 51, 'passport', 'poster_space', 'view', '', 0, '1', '3'),
(61, '编辑版位', 51, 'passport', 'poster_space', 'edit', '', 0, '1', '3'),
(62, '删除版位', 51, 'passport', 'poster_space', 'delete', '', 0, '1', '3'),
(63, '管理广告', 51, 'passport', 'poster', 'listinfo', '', 0, '1', '1'),
(64, '添加广告', 51, 'passport', 'poster', 'add', '', 0, '1', '2'),
(65, '查看广告', 51, 'passport', 'poster', 'view', '', 0, '1', '3'),
(66, '编辑广告', 51, 'passport', 'poster', 'edit', '', 0, '1', '3'),
(67, '删除广告', 51, 'passport', 'poster', 'delete', '', 0, '1', '3'),
(68, '管理友链', 52, 'passport', 'linkurl', 'listinfo', '', 0, '1', '1'),
(69, '添加友链', 52, 'passport', 'linkurl', 'add', '', 0, '1', '2'),
(70, '查看友链', 52, 'passport', 'linkurl', 'view', '', 0, '1', '3'),
(71, '编辑友链', 52, 'passport', 'linkurl', 'edit', '', 0, '1', '3'),
(72, '删除友链', 52, 'passport', 'linkurl', 'delete', '', 0, '1', '3'),
(73, '管理类型', 53, 'passport', 'message_type', 'listinfo', '', 0, '1', '1'),
(74, '添加类型', 53, 'passport', 'message_type', 'add', '', 0, '1', '2'),
(75, '查看类型', 53, 'passport', 'message_type', 'view', '', 0, '1', '3'),
(76, '编辑类型', 53, 'passport', 'message_type', 'edit', '', 0, '1', '3'),
(77, '删除类型', 53, 'passport', 'message_type', 'delete', '', 0, '1', '3'),
(78, '管理消息', 53, 'passport', 'message', 'listinfo', '', 0, '1', '1'),
(79, '添加消息', 53, 'passport', 'message', 'add', '', 0, '1', '2'),
(80, '查看消息', 53, 'passport', 'message', 'view', '', 0, '1', '3'),
(81, '编辑消息', 53, 'passport', 'message', 'edit', '', 0, '1', '3'),
(82, '删除消息', 53, 'passport', 'message', 'delete', '', 0, '1', '3'),
(83, '管理评论', 54, 'passport', 'commend', 'listinfo', '', 0, '1', '1'),
(84, '添加评论', 54, 'passport', 'commend', 'add', '', 0, '1', '2'),
(85, '查看评论', 54, 'passport', 'commend', 'view', '', 0, '1', '3'),
(86, '编辑评论', 54, 'passport', 'commend', 'edit', '', 0, '1', '3'),
(87, '删除评论', 54, 'passport', 'commend', 'delete', '', 0, '1', '3'),
(88, '游戏管理', 5, 'webgame', '', '', '', 1, '0', '1'),
(89, '内容相关设置', 5, 'webgame', '', '', '', 2, '1', '1'),
(90, '内容管理', 5, 'webgame', '', '', '', 3, '1', '1'),
(91, '发布管理', 5, 'webgame', '', '', '', 4, '1', '1'),
(92, '添加栏目', 89, 'webgame', 'category', 'add', '', 0, '1', '2'),
(93, '删除栏目', 89, 'webgame', 'category', 'delete', '', 0, '1', '3'),
(94, '编辑栏目', 89, 'webgame', 'category', 'edit', '', 0, '1', '3'),
(95, '管理栏目', 89, 'webgame', 'category', 'listinfo', '', 0, '1', '1'),
(96, '查看栏目', 89, 'webgame', 'category', 'view', '', 0, '1', '3'),
(97, '添加内容', 90, 'webgame', 'content', 'add', '', 0, '1', '2'),
(98, '管理内容', 90, 'webgame', 'content', 'catquick', '', 0, '1', '1'),
(99, '删除内容', 90, 'webgame', 'content', 'delete', '', 0, '1', '3'),
(100, '编辑内容', 90, 'webgame', 'content', 'edit', '', 0, '1', '3'),
(101, '内容列表', 90, 'webgame', 'content', 'listinfo', '', 0, '1', '3'),
(102, '查看内容', 90, 'webgame', 'content', 'view', '', 0, '1', '3'),
(103, '生成栏目页', 91, 'webgame', 'publish', 'category', '', 0, '1', '1'),
(104, '生成内容页', 91, 'webgame', 'publish', 'content', '', 0, '1', '1'),
(105, '生成首页', 91, 'webgame', 'publish', 'index', '', 0, '1', '1'),
(106, '更新URL页', 91, 'webgame', 'publish', 'url', '', 0, '1', '1'),
(107, '游戏帐号报表', 88, 'webgame', 'member', 'report', '', 0, '1', '2'),
(108, '游戏帐号明细', 88, 'webgame', 'member', 'listinfo', '', 4, '1', '1'),
(109, '复制服务器', 88, 'webgame', 'server', 'copy', '', 0, '1', '3'),
(110, '删除服务器', 88, 'webgame', 'server', 'delete', '', 0, '1', '3'),
(111, '编辑服务器', 88, 'webgame', 'server', 'edit', '', 0, '1', '3'),
(112, '查看服务器', 88, 'webgame', 'server', 'view', '', 0, '1', '3'),
(113, '添加服务器', 88, 'webgame', 'server', 'add', '', 0, '1', '2'),
(114, '管理服务器', 88, 'webgame', 'server', 'listinfo', '', 2, '1', '1'),
(115, '删除游戏', 88, 'webgame', 'webgame', 'delete', '', 0, '1', '3'),
(116, '编辑游戏', 88, 'webgame', 'webgame', 'edit', '', 0, '1', '3'),
(117, '查看游戏', 88, 'webgame', 'webgame', 'view', '', 0, '1', '3'),
(118, '添加游戏', 88, 'webgame', 'webgame', 'add', '', 0, '1', '2'),
(119, '管理游戏', 88, 'webgame', 'webgame', 'listinfo', '', 1, '1', '1'),
(120, '支付管理', 6, 'pay', '', '', '', 0, '1', '1'),
(121, '支付报表', 6, 'pay', '', '', '', 0, '1', '1'),
(122, '管理包月', 120, 'pay', 'paymonth', 'listinfo', '', 0, '1', '1'),
(123, '添加包月', 120, 'pay', 'paymonth', 'add', '', 0, '1', '2'),
(124, '查看包月', 120, 'pay', 'paymonth', 'view', '', 0, '1', '3'),
(125, '编辑包月', 120, 'pay', 'paymonth', 'edit', '', 0, '1', '3'),
(126, '删除包月', 120, 'pay', 'paymonth', 'delete', '', 0, '1', '3'),
(127, '帐号充值统计', 120, 'pay', 'member_pay', 'listinfo', '', 0, '1', '1'),
(128, '删除支付方式', 120, 'pay', 'payment', 'delete', '', 0, '1', '3'),
(129, '编辑支付方式', 120, 'pay', 'payment', 'edit', '', 0, '1', '3'),
(130, '查看支付方式', 120, 'pay', 'payment', 'view', '', 0, '1', '3'),
(131, '添加支付方式', 120, 'pay', 'payment', 'add', '', 0, '1', '2'),
(132, '管理支付方式', 120, 'pay', 'payment', 'listinfo', '', 0, '1', '1'),
(133, '编辑配置', 120, 'pay', 'config', 'change', '', 0, '1', '3'),
(134, '支付配置', 120, 'pay', 'config', 'base', '', 0, '1', '1'),
(135, '活动奖励', 121, 'pay', 'handcharge', 'listinfo', '', 0, '1', '1'),
(136, '手工充值', 121, 'pay', 'handcharge', 'add', '', 0, '1', '2'),
(137, '异常充值', 121, 'pay', 'account_unusual', 'listinfo', '', 0, '1', '1'),
(138, '支付记录', 121, 'pay', 'pay', 'listinfo', '', 0, '1', '1'),
(139, '充值记录', 121, 'pay', 'account', 'listinfo', '', 0, '1', '1'),
(140, '源站管理', 7, 'spider', '', '', '', 0, '0', '1'),
(141, '采集管理', 7, 'spider', '', '', '', 1, '0', '1'),
(142, '采集内容管理', 7, 'spider', '', '', '', 2, '0', '1'),
(143, '源站管理', 140, 'spider', 'site', 'listinfo', '', 0, '0', '1'),
(144, '添加源站', 140, 'spider', 'site', 'add', '', 0, '0', '2'),
(145, '编辑源站', 140, 'spider', 'site', 'edit', '', 0, '0', '3'),
(146, '删除源站', 140, 'spider', 'site', 'delete', '', 0, '0', '3'),
(147, '源站页面采集', 140, 'spider', 'sitePage', 'listinfo', '', 0, '0', '1'),
(148, '添加页面', 140, 'spider', 'sitePage', 'add', '', 0, '0', '2'),
(149, '编辑页面', 140, 'spider', 'sitePage', 'edit', '', 0, '0', '3'),
(150, '删除页面', 140, 'spider', 'sitePage', 'delete', '', 0, '0', '3'),
(151, '查看源页面', 140, 'spider', 'sitePage', 'showSource', '', 0, '0', '3'),
(152, '查看本地页面', 140, 'spider', 'sitePage', 'showTarget', '', 0, '0', '3'),
(153, '采集页面资源', 140, 'spider', 'sitePage', 'spider', '', 0, '0', '3'),
(154, '页面本地化', 140, 'spider', 'sitePage', 'localPage', '', 0, '0', '3'),
(155, '采集资源', 140, 'spider', 'sitePage', 'downFile', '', 0, '1', '4'),
(156, '复制任务', 141, 'spider', 'job', 'copy', '', 0, '0', '3'),
(157, '采集规则管理', 141, 'spider', 'crule', 'listinfo', '', 0, '0', '1'),
(158, '添加规则', 141, 'spider', 'crule', 'add', '', 0, '0', '2'),
(159, '编辑规则', 141, 'spider', 'crule', 'edit', '', 0, '0', '3'),
(160, '删除规则', 141, 'spider', 'crule', 'delete', '', 0, '0', '3'),
(161, '采集任务管理', 141, 'spider', 'job', 'listinfo', '', 0, '0', '1'),
(162, '添加任务', 141, 'spider', 'job', 'add', '', 0, '0', '2'),
(163, '编辑任务', 141, 'spider', 'job', 'edit', '', 0, '0', '3'),
(164, '删除任务', 141, 'spider', 'job', 'delete', '', 0, '0', '3'),
(165, '列表页面采集', 141, 'spider', 'spider', 'spiderList', '', 0, '0', '3'),
(166, '列表页处理', 141, 'spider', 'spider', 'dealList', '', 0, '0', '3'),
(167, '内容页面采集', 141, 'spider', 'spider', 'spiderContent', '', 0, '0', '3'),
(168, '内容页处理', 141, 'spider', 'spider', 'dealContent', '', 0, '0', '3'),
(169, '申请强制处理', 141, 'spider', 'spider', 'askForce', '', 0, '0', '3'),
(170, '文件采集', 141, 'spider', 'spider', 'spiderFile', '', 0, '0', '3'),
(171, '采集内容管理', 142, 'spider', 'content', 'listinfo', '', 0, '0', '1'),
(172, '采集任务发布', 142, 'spider', 'content', 'publish', '', 0, '0', '1'),
(173, '查看源内容', 142, 'spider', 'content', 'showSource', '', 0, '0', '3'),
(174, '查看本地内容', 142, 'spider', 'content', 'showTarget', '', 0, '0', '3'),
(175, '内容管理', 8, 'movie', '', '', '', 3, '1', '1'),
(176, '发布管理', 8, 'movie', '', '', '', 4, '1', '1'),
(177, '添加栏目', 175, 'movie', 'category', 'add', '', 0, '1', '2'),
(178, '删除栏目', 175, 'movie', 'category', 'delete', '', 0, '1', '3'),
(179, '编辑栏目', 175, 'movie', 'category', 'edit', '', 0, '1', '3'),
(180, '管理栏目', 175, 'movie', 'category', 'listinfo', '', 0, '1', '1'),
(181, '查看栏目', 175, 'movie', 'category', 'view', '', 0, '1', '3'),
(182, '添加内容', 175, 'movie', 'content', 'add', '', 0, '1', '2'),
(183, '管理内容', 175, 'movie', 'content', 'catquick', '', 0, '1', '1'),
(184, '删除内容', 175, 'movie', 'content', 'delete', '', 0, '1', '3'),
(185, '编辑内容', 175, 'movie', 'content', 'edit', '', 0, '1', '3'),
(186, '内容列表', 175, 'movie', 'content', 'listinfo', '', 0, '1', '3'),
(187, '查看内容', 175, 'movie', 'content', 'view', '', 0, '1', '3'),
(188, '生成栏目页', 176, 'movie', 'publish', 'category', '', 0, '1', '1'),
(189, '生成内容页', 176, 'movie', 'publish', 'content', '', 0, '1', '1'),
(190, '生成首页', 176, 'movie', 'publish', 'index', '', 0, '1', '1'),
(191, '更新URL页', 176, 'movie', 'publish', 'url', '', 0, '1', '1'),
(192, '内容管理', 9, 'tbshop', '', '', '', 3, '1', '1'),
(193, '发布管理', 9, 'tbshop', '', '', '', 4, '1', '1'),
(194, '添加栏目', 192, 'tbshop', 'category', 'add', '', 0, '1', '2'),
(195, '删除栏目', 192, 'tbshop', 'category', 'delete', '', 0, '1', '3'),
(196, '编辑栏目', 192, 'tbshop', 'category', 'edit', '', 0, '1', '3'),
(197, '管理栏目', 192, 'tbshop', 'category', 'listinfo', '', 0, '1', '1'),
(198, '查看栏目', 192, 'tbshop', 'category', 'view', '', 0, '1', '3'),
(199, '添加内容', 192, 'tbshop', 'content', 'add', '', 0, '1', '2'),
(200, '管理内容', 192, 'tbshop', 'content', 'catquick', '', 0, '1', '1'),
(201, '删除内容', 192, 'tbshop', 'content', 'delete', '', 0, '1', '3'),
(202, '编辑内容', 192, 'tbshop', 'content', 'edit', '', 0, '1', '3'),
(203, '内容列表', 192, 'tbshop', 'content', 'listinfo', '', 0, '1', '3'),
(204, '查看内容', 192, 'tbshop', 'content', 'view', '', 0, '1', '3'),
(205, '生成栏目页', 193, 'tbshop', 'publish', 'category', '', 0, '1', '1'),
(206, '生成内容页', 193, 'tbshop', 'publish', 'content', '', 0, '1', '1'),
(207, '生成首页', 193, 'tbshop', 'publish', 'index', '', 0, '1', '1'),
(208, '更新URL页', 193, 'tbshop', 'publish', 'url', '', 0, '1', '1'),
(209, '机构管理', 10, 'kidsedu', '', '', '', 0, '0', '1'),
(210, '内容管理', 10, 'kidsedu', '', '', '', 0, '0', '1'),
(211, '资源管理', 10, 'kidsedu', '', '', '', 0, '0', '1'),
(212, '内容发布管理', 10, 'kidsedu', '', '', '', 0, '0', '1'),
(213, '添加栏目', 210, 'kidsedu', 'category', 'add', '', 0, '1', '2'),
(214, '删除栏目', 210, 'kidsedu', 'category', 'delete', '', 0, '1', '3'),
(215, '编辑栏目', 210, 'kidsedu', 'category', 'edit', '', 0, '1', '3'),
(216, '管理栏目', 210, 'kidsedu', 'category', 'listinfo', '', 0, '1', '1'),
(217, '查看栏目', 210, 'kidsedu', 'category', 'view', '', 0, '1', '3'),
(218, '添加内容', 210, 'kidsedu', 'content', 'add', '', 0, '1', '2'),
(219, '管理内容', 210, 'kidsedu', 'content', 'catquick', '', 0, '1', '1'),
(220, '删除内容', 210, 'kidsedu', 'content', 'delete', '', 0, '1', '3'),
(221, '编辑内容', 210, 'kidsedu', 'content', 'edit', '', 0, '1', '3'),
(222, '内容列表', 210, 'kidsedu', 'content', 'listinfo', '', 0, '1', '3'),
(223, '查看内容', 210, 'kidsedu', 'content', 'view', '', 0, '1', '3'),
(224, '生成栏目页', 212, 'kidsedu', 'publish', 'category', '', 0, '1', '1'),
(225, '生成内容页', 212, 'kidsedu', 'publish', 'content', '', 0, '1', '1'),
(226, '生成首页', 212, 'kidsedu', 'publish', 'index', '', 0, '1', '1'),
(227, '更新URL页', 212, 'kidsedu', 'publish', 'url', '', 0, '1', '1'),
(228, '添加机构', 209, 'kidsedu', 'agency', 'add', '', 0, '1', '2'),
(229, '删除机构', 209, 'kidsedu', 'agency', 'delete', '', 0, '1', '3'),
(230, '编辑机构', 209, 'kidsedu', 'agency', 'edit', '', 0, '1', '3'),
(231, '管理机构', 209, 'kidsedu', 'agency', 'listinfo', '', 0, '1', '1'),
(232, '查看机构', 209, 'kidsedu', 'agency', 'view', '', 0, '1', '3'),
(233, '添加管理员', 209, 'kidsedu', 'superuserl', 'add', '', 0, '1', '2'),
(234, '删除管理员', 209, 'kidsedu', 'superuserl', 'delete', '', 0, '1', '3'),
(235, '编辑管理员', 209, 'kidsedu', 'superuserl', 'edit', '', 0, '1', '3'),
(236, '管理管理员', 209, 'kidsedu', 'superuserl', 'listinfo', '', 0, '1', '1'),
(237, '查看管理员', 209, 'kidsedu', 'superuserl', 'view', '', 0, '1', '3'),
(238, '添加课程', 211, 'kidsedu', 'course', 'add', '', 0, '1', '2'),
(239, '删除课程', 211, 'kidsedu', 'course', 'delete', '', 0, '1', '3'),
(240, '编辑课程', 211, 'kidsedu', 'course', 'edit', '', 0, '1', '3'),
(241, '管理课程', 211, 'kidsedu', 'course', 'listinfo', '', 0, '1', '1'),
(242, '查看课程', 211, 'kidsedu', 'course', 'view', '', 0, '1', '3'),
(243, '添加学校', 211, 'kidsedu', 'school', 'add', '', 0, '1', '2'),
(244, '删除学校', 211, 'kidsedu', 'school', 'delete', '', 0, '1', '3'),
(245, '编辑学校', 211, 'kidsedu', 'school', 'edit', '', 0, '1', '3'),
(246, '管理学校', 211, 'kidsedu', 'school', 'listinfo', '', 0, '1', '1'),
(247, '查看学校', 211, 'kidsedu', 'school', 'view', '', 0, '1', '3');

-- --------------------------------------------------------

--
-- 表的结构 `sp_admin_privilege`
--

CREATE TABLE IF NOT EXISTS `sp_admin_privilege` (
  `role_id` tinyint(3) unsigned NOT NULL COMMENT '角色ID',
  `menu_id` smallint(5) unsigned NOT NULL COMMENT '菜单ID',
  UNIQUE KEY `priviledge` (`role_id`,`menu_id`),
  KEY `operation` (`role_id`,`menu_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `sp_admin_role`
--

CREATE TABLE IF NOT EXISTS `sp_admin_role` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT COMMENT '角色ID',
  `name` varchar(50) NOT NULL COMMENT '名称',
  `description` varchar(1000) NOT NULL COMMENT '描述',
  `status` enum('0','1') NOT NULL COMMENT '0:禁用；1：启用',
  `listorder` smallint(5) unsigned NOT NULL COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `sp_admin_role`
--

INSERT INTO `sp_admin_role` (`id`, `name`, `description`, `status`, `listorder`) VALUES
(1, '超级管理员', '超级管理员', '', 7),
(2, '编辑', '网站编辑', '0', 0);

-- --------------------------------------------------------

--
-- 表的结构 `sp_attachment`
--

CREATE TABLE IF NOT EXISTS `sp_attachment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `app_code` char(15) NOT NULL,
  `catid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `contentid` int(10) unsigned NOT NULL,
  `file_name` char(50) NOT NULL,
  `file_path` char(200) NOT NULL,
  `file_size` int(10) unsigned NOT NULL DEFAULT '0',
  `file_ext` char(10) NOT NULL,
  `isimage` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `isthumb` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `downloads` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `username` char(32) NOT NULL DEFAULT '',
  `uploadtime` int(10) unsigned NOT NULL DEFAULT '0',
  `uploadip` char(15) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `authcode` char(32) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `authcode` (`authcode`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `sp_linkurl`
--

CREATE TABLE IF NOT EXISTS `sp_linkurl` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `linkurl_type` char(8) NOT NULL DEFAULT '',
  `name` varchar(50) NOT NULL DEFAULT '',
  `url` varchar(255) NOT NULL DEFAULT '',
  `logo` varchar(255) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `username` varchar(30) NOT NULL DEFAULT '',
  `listorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  `linkurl_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `sp_linkurl`
--

INSERT INTO `sp_linkurl` (`id`, `linkurl_type`, `name`, `url`, `logo`, `description`, `username`, `listorder`, `linkurl_status`, `add_time`) VALUES
(1, 'nova', '友情链接1', 'http://abc.com', 'http://upload.kids.com/passport2013/0902/20130902141706112.png', '暗室逢灯', '', 2, 1, 1378081920),
(2, 'nova', '网页游戏', 'http://weibo.com/ajaxlogin.php?framelogin=1&callback=parent.sinaSSOController.feedBackUrlCallBack', '', '', '', 66, 1, 1378536060),
(3, 'web', '淘米游戏样式style', 'http://weibo.com/ajaxlogin.php?framelogin=1&callback=parent.sinaSSOController.feedBackUrlCallBack', '', '', '', 444, 0, 1378622460);

-- --------------------------------------------------------

--
-- 表的结构 `sp_member`
--

CREATE TABLE IF NOT EXISTS `sp_member` (
  `userid` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户ID',
  `username` char(32) NOT NULL DEFAULT '' COMMENT '用户名',
  `ucserver_id` int(10) unsigned NOT NULL DEFAULT '0',
  `password` char(32) NOT NULL DEFAULT '' COMMENT '密码',
  `pwd_strong` enum('1','2','3') NOT NULL DEFAULT '1' COMMENT '密码强度 1 弱 2 中 3 强',
  `encrypt` char(6) NOT NULL COMMENT '辅助加密字符串',
  `avatar` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '用户头像',
  `email` char(32) NOT NULL DEFAULT '' COMMENT '邮箱',
  `truename` varchar(255) NOT NULL DEFAULT '' COMMENT '真实姓名',
  `gender` enum('1','2') NOT NULL DEFAULT '2' COMMENT '性别 1 男 2 女',
  `msn` varchar(20) NOT NULL DEFAULT '' COMMENT 'msn帐号',
  `telephone` varchar(255) NOT NULL DEFAULT '' COMMENT '电话',
  `get_username` varchar(32) NOT NULL COMMENT '收货人地址',
  `address` varchar(255) NOT NULL DEFAULT '' COMMENT '地址',
  `qq` varchar(255) NOT NULL DEFAULT '' COMMENT 'QQ号',
  `birthday` int(11) NOT NULL COMMENT '生日',
  `postcode` varchar(255) NOT NULL DEFAULT '' COMMENT '邮编',
  `mobile` varchar(255) NOT NULL DEFAULT '' COMMENT '手机号',
  `idcard` char(18) NOT NULL COMMENT '身份证号',
  `regip` char(15) NOT NULL DEFAULT '' COMMENT '注册IP',
  `regdate` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '注册时间',
  `loginnum` int(8) NOT NULL COMMENT '登录次数',
  `lastloginip` char(15) NOT NULL DEFAULT '0' COMMENT '最后一次登录IP',
  `lastlogintime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '最后一次登录时间',
  `active` enum('1','0') NOT NULL COMMENT '当天活跃标识，0：活跃；1：不活跃',
  `active_7` enum('1','0') NOT NULL COMMENT '7天内活跃标识，0：活跃；1：不活跃',
  `active_over` enum('1','0') NOT NULL COMMENT '7天后活跃标识，0：活跃；1：不活跃',
  `active_day` int(7) NOT NULL,
  `active_7_day` int(7) NOT NULL,
  `active_over_day` int(7) NOT NULL,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `sp_poster`
--

CREATE TABLE IF NOT EXISTS `sp_poster` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `space_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `ad_type` varchar(10) NOT NULL,
  `start_time` int(10) unsigned NOT NULL DEFAULT '0',
  `end_time` int(10) unsigned NOT NULL DEFAULT '0',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0',
  `listorder` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ad_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `url` varchar(200) NOT NULL,
  `url_ext` varchar(200) NOT NULL,
  `pic` varchar(200) NOT NULL,
  `pic_ext` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `spaceid` (`space_id`,`ad_status`,`listorder`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `sp_poster`
--

INSERT INTO `sp_poster` (`id`, `name`, `space_id`, `ad_type`, `start_time`, `end_time`, `add_time`, `listorder`, `ad_status`, `url`, `url_ext`, `pic`, `pic_ext`) VALUES
(1, '幻灯广告1', 1, 'image', 0, 0, 0, 1, 1, '', '', 'http://upload.kids.com/passport2013/0829/20130829165118385.png', ''),
(2, '首页幻灯广告2', 1, '0', 0, 0, 0, 0, 1, '', '', 'http://upload.kids.com/passport2013/0829/20130829165158554.jpg', ''),
(3, '首页幻灯广告3', 1, 'image', 0, 0, 0, 4, 1, 'http://www.163.com/special/0077450P/login_frame.html', '', 'http://upload.kids.com/passport2013/0829/20130829165231318.png', ''),
(4, '幻灯广告4', 1, 'image', 0, 0, 0, 1, 1, '', '', 'http://upload.kids.com/passport2013/0829/20130829165118385.png', ''),
(5, '首页幻灯广告5', 1, '0', 0, 0, 0, 0, 1, '', '', 'http://upload.kids.com/passport2013/0829/20130829165158554.jpg', ''),
(6, '首页幻灯广告6', 1, 'image', 0, 0, 0, 4, 1, 'http://www.163.com/special/0077450P/login_frame.html', '', 'http://upload.kids.com/passport2013/0829/20130829165231318.png', '');

-- --------------------------------------------------------

--
-- 表的结构 `sp_poster_space`
--

CREATE TABLE IF NOT EXISTS `sp_poster_space` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(50) NOT NULL,
  `space_type` char(30) NOT NULL,
  `width` smallint(4) unsigned NOT NULL DEFAULT '0',
  `height` smallint(4) unsigned NOT NULL DEFAULT '0',
  `description` char(100) NOT NULL,
  `space_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `disabled` (`space_status`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `sp_poster_space`
--

INSERT INTO `sp_poster_space` (`id`, `name`, `space_type`, `width`, `height`, `description`, `space_status`) VALUES
(1, '首页幻灯广告', 'imagelist', 400, 500, '首页幻灯图片广告列表', 0);

-- --------------------------------------------------------

--
-- 表的结构 `sp_times`
--

CREATE TABLE IF NOT EXISTS `sp_times` (
  `username` char(40) NOT NULL,
  `ip` char(15) NOT NULL,
  `logintime` int(10) unsigned NOT NULL DEFAULT '0',
  `isadmin` tinyint(1) NOT NULL DEFAULT '0',
  `times` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`username`,`isadmin`)
) ENGINE=MEMORY DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
