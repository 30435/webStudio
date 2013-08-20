-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1
-- 生成日期: 2013 �?08 �?20 �?12:52
-- 服务器版本: 5.6.11
-- PHP 版本: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `studio_passport`
--
CREATE DATABASE IF NOT EXISTS `studio_passport` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `studio_passport`;

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
(1, 'wangcanliang', '', '04ffd28d0a85e2050db77cbeeaa7d8ac', 1, '0', 'l9rIUD', 1361149565, 126, '127.0.0.1', 1376991054, '1', '2f5a45a93f1bb1824dbb649e85e3753d', 'tE4RTF'),
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=196 ;

--
-- 转存表中的数据 `sp_admin_menu`
--

INSERT INTO `sp_admin_menu` (`id`, `name`, `parentid`, `app_code`, `controller`, `method`, `extparam`, `listorder`, `islog`, `display`) VALUES
(1, '我的面板', 0, 'passport', '', '', '', 0, '0', '1'),
(2, '管理设置', 0, 'passport', '', '', '', 1, '0', '1'),
(3, '用户中心', 0, 'passport', '', '', '', 2, '0', '1'),
(5, '应用管理', 0, 'passport', '', '', '', 5, '0', '1'),
(6, '管理员信息', 1, 'passport', '', '', '', 0, '0', '1'),
(7, '修改个人信息', 6, 'passport', 'manager', 'editm', '', 0, '0', '1'),
(8, '修改密码', 6, 'passport', 'manager', 'editp', '', 0, '0', '1'),
(9, '操作记录', 6, 'passport', 'managerlog', 'listinfom', '', 0, '0', '1'),
(10, '查看日志', 6, 'passport', 'managerlog', 'viewm', '', 0, '0', '4'),
(11, '管理员设置', 2, 'passport', '', '', '', 0, '0', '1'),
(12, '管理员操作日志', 2, 'passport', '', '', '', 1, '0', '0'),
(13, '管理员管理', 11, 'passport', 'manager', 'listinfo', '', 0, '0', '1'),
(14, '添加管理员', 11, 'passport', 'manager', 'add', '', 0, '1', '2'),
(15, '编辑管理员', 11, 'passport', 'manager', 'edit', '', 0, '1', '3'),
(16, '删除管理员', 11, 'passport', 'manager', 'delete', '', 0, '1', '3'),
(17, '锁定管理员', 11, 'passport', 'manager', 'lock', '', 0, '1', '3'),
(18, '查看管理员', 11, 'passport', 'manager', 'view', '', 0, '1', '3'),
(19, '角色管理', 11, 'passport', 'role', 'listinfo', '', 0, '0', '1'),
(20, '查看', 11, 'passport', 'role', 'view', '', 0, '1', '3'),
(21, '编辑', 11, 'passport', 'role', 'edit', '', 0, '1', '3'),
(22, '删除', 11, 'passport', 'role', 'delete', '', 0, '1', '3'),
(23, '添加角色', 11, 'passport', 'role', 'add', '', 0, '1', '2'),
(24, '菜单管理', 11, 'passport', 'menu', 'listinfo', '', 0, '0', '1'),
(25, '查看', 11, 'passport', 'menu', 'view', '', 0, '1', '2'),
(26, '查看', 11, 'passport', 'menu', 'view', '', 0, '1', '3'),
(27, '编辑', 11, 'passport', 'menu', 'edit', '', 0, '1', '3'),
(28, '删除角色', 11, 'passport', 'menu', 'delete', '', 0, '1', '3'),
(29, '添加菜单', 11, 'passport', 'menu', 'add', '', 0, '1', '2'),
(30, '查看日志', 12, 'passport', 'managerlog', 'view', '', 0, '0', '3'),
(31, '操作日志', 12, 'passport', 'managerlog', 'listinfo', '', 0, '0', '1'),
(32, '用户中心设置', 3, 'passport', '', '', '', 0, '1', '1'),
(33, '用户管理', 3, 'passport', '', '', '', 1, '1', '1'),
(34, '用户组管理', 3, 'passport', '', '', '', 2, '1', '1'),
(35, '基本设置', 32, 'passport', 'config', 'base', '', 0, '1', '1'),
(36, 'UCSERVER设置', 32, 'passport', 'config', 'ucserver', '', 0, '1', '1'),
(37, '管理用户', 33, 'passport', 'member', 'listinfo', '', 0, '1', '1'),
(38, '查看用户', 33, 'passport', 'member', 'view', '', 0, '1', '1'),
(39, '审核用户', 33, 'passport', 'member', 'check', '', 0, '1', '1'),
(40, '管理用户组', 34, 'passport', 'group', 'listinfo', '', 0, '1', '1'),
(41, '添加用户组', 34, 'passport', 'group', 'add', '', 0, '1', '2'),
(42, '查看用户组', 34, 'passport', 'group', 'view', '', 0, '1', '3'),
(43, '编辑用户组', 34, 'passport', 'group', 'edit', '', 0, '1', '3'),
(44, '删除用户组', 34, 'passport', 'group', 'delete', '', 0, '1', '3'),
(68, '管理附件', 123, 'passport', 'attachment', 'listinfo', '', 0, '1', '1'),
(69, '查看附件', 123, 'passport', 'attachment', 'view', '', 0, '1', '3'),
(70, '编辑附件', 123, 'passport', 'attachment', 'edit', '', 0, '1', '3'),
(71, '删除附件', 123, 'passport', 'attachment', 'delete', '', 0, '1', '3'),
(87, '角色权限', 11, 'passport', 'role', 'editPriv', '', 0, '1', '4'),
(123, '平台附件管理', 5, 'passport', '', '', '', 0, '1', '1'),
(124, '网页游戏', 0, '51jiansh', '', '', '', 9, '0', '1'),
(125, '内容相关设置', 124, '51jiansh', '', '', '', 0, '1', '1'),
(126, '内容管理', 124, '51jiansh', '', '', '', 1, '1', '1'),
(127, '发布管理', 124, '51jiansh', '', '', '', 2, '1', '1'),
(128, '专题', 124, '51jiansh', '', '', '', 3, '1', '1'),
(129, '添加栏目', 125, '51jiansh', 'category', 'add', '', 0, '1', '2'),
(130, '删除栏目', 125, '51jiansh', 'category', 'delete', '', 0, '1', '3'),
(131, '编辑栏目', 125, '51jiansh', 'category', 'edit', '', 0, '1', '3'),
(132, '管理栏目', 125, '51jiansh', 'category', 'listinfo', '', 0, '1', '1'),
(133, '查看栏目', 125, '51jiansh', 'category', 'view', '', 0, '1', '3'),
(134, '添加内容', 126, '51jiansh', 'content', 'add', '', 0, '1', '2'),
(135, '管理内容', 126, '51jiansh', 'content', 'catquick', '', 0, '1', '1'),
(136, '删除内容', 126, '51jiansh', 'content', 'delete', '', 0, '1', '3'),
(137, '编辑内容', 126, '51jiansh', 'content', 'edit', '', 0, '1', '3'),
(138, '内容列表', 126, '51jiansh', 'content', 'listinfo', '', 0, '1', '3'),
(139, '查看内容', 126, '51jiansh', 'content', 'view', '', 0, '1', '3'),
(140, '添加推荐位', 125, '51jiansh', 'position', 'add', '', 0, '1', '2'),
(141, '删除推荐位', 125, '51jiansh', 'position', 'delete', '', 0, '1', '3'),
(142, '编辑推荐位', 125, '51jiansh', 'position', 'edit', '', 0, '1', '3'),
(143, '管理推荐位', 125, '51jiansh', 'position', 'listinfo', '', 0, '1', '1'),
(144, '查看推荐位', 125, '51jiansh', 'position', 'view', '', 0, '1', '3'),
(145, '生成栏目页', 127, '51jiansh', 'publish', 'category', '', 0, '1', '1'),
(146, '生成内容页', 127, '51jiansh', 'publish', 'content', '', 0, '1', '1'),
(147, '生成首页', 127, '51jiansh', 'publish', 'index', '', 0, '1', '1'),
(148, '更新URL页', 127, '51jiansh', 'publish', 'url', '', 0, '1', '1'),
(149, '添加专题', 128, '51jiansh', 'special', 'add', '', 0, '1', '2'),
(150, '删除专题', 128, '51jiansh', 'special', 'delete', '', 0, '1', '3'),
(151, '编辑专题', 128, '51jiansh', 'special', 'edit', '', 0, '1', '3'),
(152, '生成专题首页', 128, '51jiansh', 'special', 'htmlIndex', '', 0, '1', '1'),
(153, '更新html', 128, '51jiansh', 'special', 'htmlSpecial', '', 0, '1', '1'),
(154, '管理专题', 128, '51jiansh', 'special', 'listinfo', '', 0, '1', '1'),
(155, '查看专题', 128, '51jiansh', 'special', 'view', '', 0, '1', '3'),
(156, '采集系统', 0, 'spider', '', '', '', 6, '0', '1'),
(157, '源站管理', 156, 'spider', '', '', '', 0, '0', '1'),
(158, '采集管理', 156, 'spider', '', '', '', 1, '0', '1'),
(159, '采集内容管理', 156, 'spider', '', '', '', 2, '0', '1'),
(160, '源站管理', 157, 'spider', 'site', 'listinfo', '', 0, '0', '1'),
(161, '添加源站', 157, 'spider', 'site', 'add', '', 0, '0', '2'),
(162, '编辑源站', 157, 'spider', 'site', 'edit', '', 0, '0', '3'),
(163, '删除源站', 157, 'spider', 'site', 'delete', '', 0, '0', '3'),
(164, '源站页面采集', 157, 'spider', 'sitePage', 'listinfo', '', 0, '0', '1'),
(165, '添加页面', 157, 'spider', 'sitePage', 'add', '', 0, '0', '2'),
(166, '编辑页面', 157, 'spider', 'sitePage', 'edit', '', 0, '0', '3'),
(167, '删除页面', 157, 'spider', 'sitePage', 'delete', '', 0, '0', '3'),
(185, '复制任务', 158, 'spider', 'job', 'copy', '', 0, '0', '3'),
(169, '查看源页面', 157, 'spider', 'sitePage', 'showSource', '', 0, '0', '3'),
(170, '查看本地页面', 157, 'spider', 'sitePage', 'showTarget', '', 0, '0', '3'),
(171, '采集规则管理', 158, 'spider', 'crule', 'listinfo', '', 0, '0', '1'),
(172, '添加规则', 158, 'spider', 'crule', 'add', '', 0, '0', '2'),
(173, '编辑规则', 158, 'spider', 'crule', 'edit', '', 0, '0', '3'),
(174, '删除规则', 158, 'spider', 'crule', 'delete', '', 0, '0', '3'),
(175, '采集任务管理', 158, 'spider', 'job', 'listinfo', '', 0, '0', '1'),
(176, '添加任务', 158, 'spider', 'job', 'add', '', 0, '0', '2'),
(177, '编辑任务', 158, 'spider', 'job', 'edit', '', 0, '0', '3'),
(178, '删除任务', 158, 'spider', 'job', 'delete', '', 0, '0', '3'),
(179, '采集内容管理', 159, 'spider', 'content', 'listinfo', '', 0, '0', '1'),
(180, '采集任务发布', 159, 'spider', 'content', 'publish', '', 0, '0', '1'),
(181, '查看源内容', 159, 'spider', 'content', 'showSource', '', 0, '0', '3'),
(182, '查看本地内容', 159, 'spider', 'content', 'showTarget', '', 0, '0', '3'),
(183, '采集页面资源', 157, 'spider', 'sitePage', 'spider', '', 0, '0', '3'),
(184, '页面本地化', 157, 'spider', 'sitePage', 'localPage', '', 0, '0', '3'),
(186, '列表页面采集', 158, 'spider', 'spider', 'spiderList', '', 0, '0', '3'),
(187, '列表页处理', 158, 'spider', 'spider', 'dealList', '', 0, '0', '3'),
(188, '内容页面采集', 158, 'spider', 'spider', 'spiderContent', '', 0, '0', '3'),
(189, '内容页处理', 158, 'spider', 'spider', 'dealContent', '', 0, '0', '3'),
(190, '申请强制处理', 158, 'spider', 'spider', 'askForce', '', 0, '0', '3'),
(192, '文件采集', 158, 'spider', 'spider', 'spiderFile', '', 0, '0', '3'),
(193, '采集资源', 157, 'spider', 'sitePage', 'downFile', '', 0, '1', '4');

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
