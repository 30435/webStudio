-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1
-- 生成日期: 2013 年 04 月 29 日 16:27
-- 服务器版本: 5.5.27
-- PHP 版本: 5.4.7

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
(1, 'wangcanliang', '', '04ffd28d0a85e2050db77cbeeaa7d8ac', 1, '0', 'l9rIUD', 1361149565, 119, '127.0.0.1', 1367193676, '1', '2f5a45a93f1bb1824dbb649e85e3753d', 'tE4RTF'),
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=63 ;

--
-- 转存表中的数据 `sp_admin_managerlog`
--

INSERT INTO `sp_admin_managerlog` (`id`, `userid`, `username`, `roleid`, `role_name`, `menu_id`, `menu_name`, `data`, `data_old`, `logtype`, `ip`, `inputtime`) VALUES
(1, 1, 'wangcanliang', 1, '超级管理员', '14', '添加管理员', 'a:7:{s:8:"username";s:7:"wangcan";s:6:"roleid";s:1:"2";s:5:"email";s:12:"eee@test.com";s:6:"islock";s:1:"1";s:10:"createtime";i:1359515342;s:8:"password";s:32:"6a2bbbefb54aa8096e29c2c9f903b5d0";s:7:"encrypt";s:6:"PNQKTg";}', 'a:0:{}', 'add', '127.0.0.1', 1359515342),
(2, 1, 'wangcanliang', 1, '超级管理员', '27', '编辑', 'a:8:{s:4:"name";s:12:"内容管理";s:8:"parentid";s:1:"0";s:8:"app_code";s:7:"content";s:10:"controller";s:0:"";s:6:"method";s:0:"";s:8:"extparam";s:0:"";s:9:"listorder";b:0;s:7:"display";s:1:"1";}', 'a:10:{s:2:"id";s:1:"4";s:4:"name";s:12:"内容管理";s:8:"parentid";s:1:"1";s:8:"app_code";s:7:"content";s:10:"controller";s:0:"";s:6:"method";s:0:"";s:8:"extparam";s:0:"";s:9:"listorder";s:1:"0";s:5:"islog";s:1:"0";s:7:"display";s:1:"1";}', 'edit', '127.0.0.1', 1359515900),
(3, 1, 'wangcanliang', 1, '超级管理员', '27', '编辑', 'a:8:{s:4:"name";s:12:"操作记录";s:8:"parentid";s:1:"6";s:8:"app_code";s:8:"passport";s:10:"controller";s:10:"managerlog";s:6:"method";s:8:"listinfo";s:8:"extparam";s:0:"";s:9:"listorder";b:0;s:7:"display";s:1:"1";}', 'a:10:{s:2:"id";s:1:"9";s:4:"name";s:12:"操作记录";s:8:"parentid";s:1:"6";s:8:"app_code";s:8:"passport";s:10:"controller";s:6:"myinfo";s:6:"method";s:9:"operation";s:8:"extparam";s:0:"";s:9:"listorder";s:1:"0";s:5:"islog";s:1:"0";s:7:"display";s:1:"1";}', 'edit', '127.0.0.1', 1359515970),
(4, 1, 'wangcanliang', 1, '超级管理员', '27', '编辑', 'a:8:{s:4:"name";s:12:"查看日志";s:8:"parentid";s:1:"6";s:8:"app_code";s:8:"passport";s:10:"controller";s:10:"managerlog";s:6:"method";s:5:"viewm";s:8:"extparam";s:0:"";s:9:"listorder";b:0;s:7:"display";s:1:"3";}', 'a:10:{s:2:"id";s:2:"10";s:4:"name";s:12:"查看日志";s:8:"parentid";s:1:"6";s:8:"app_code";s:8:"passport";s:10:"controller";s:6:"myinfo";s:6:"method";s:4:"view";s:8:"extparam";s:0:"";s:9:"listorder";s:1:"0";s:5:"islog";s:1:"0";s:7:"display";s:1:"3";}', 'edit', '127.0.0.1', 1359516958),
(5, 1, 'wangcanliang', 1, '超级管理员', '27', '编辑', 'a:8:{s:4:"name";s:12:"查看日志";s:8:"parentid";s:1:"6";s:8:"app_code";s:8:"passport";s:10:"controller";s:10:"managerlog";s:6:"method";s:5:"viewm";s:8:"extparam";s:0:"";s:9:"listorder";b:0;s:7:"display";s:1:"4";}', 'a:10:{s:2:"id";s:2:"10";s:4:"name";s:12:"查看日志";s:8:"parentid";s:1:"6";s:8:"app_code";s:8:"passport";s:10:"controller";s:10:"managerlog";s:6:"method";s:5:"viewm";s:8:"extparam";s:0:"";s:9:"listorder";s:1:"0";s:5:"islog";s:1:"0";s:7:"display";s:1:"3";}', 'edit', '127.0.0.1', 1359516972),
(6, 1, 'wangcanliang', 1, '超级管理员', '27', '编辑', 'a:8:{s:4:"name";s:12:"操作记录";s:8:"parentid";s:1:"6";s:8:"app_code";s:8:"passport";s:10:"controller";s:10:"managerlog";s:6:"method";s:9:"listinfom";s:8:"extparam";s:0:"";s:9:"listorder";b:0;s:7:"display";s:1:"1";}', 'a:10:{s:2:"id";s:1:"9";s:4:"name";s:12:"操作记录";s:8:"parentid";s:1:"6";s:8:"app_code";s:8:"passport";s:10:"controller";s:10:"managerlog";s:6:"method";s:8:"listinfo";s:8:"extparam";s:0:"";s:9:"listorder";s:1:"0";s:5:"islog";s:1:"0";s:7:"display";s:1:"1";}', 'edit', '127.0.0.1', 1359516994),
(7, 1, 'wangcanliang', 1, '超级管理员', '27', '编辑', 'a:8:{s:4:"name";s:18:"修改个人信息";s:8:"parentid";s:1:"6";s:8:"app_code";s:8:"passport";s:10:"controller";s:7:"manager";s:6:"method";s:5:"editm";s:8:"extparam";s:0:"";s:9:"listorder";b:0;s:7:"display";s:1:"1";}', 'a:10:{s:2:"id";s:1:"7";s:4:"name";s:18:"修改个人信息";s:8:"parentid";s:1:"6";s:8:"app_code";s:8:"passport";s:10:"controller";s:6:"myinfo";s:6:"method";s:10:"changeInfo";s:8:"extparam";s:0:"";s:9:"listorder";s:1:"0";s:5:"islog";s:1:"0";s:7:"display";s:1:"1";}', 'edit', '127.0.0.1', 1359518678),
(8, 1, 'wangcanliang', 1, '超级管理员', '27', '编辑', 'a:8:{s:4:"name";s:12:"修改密码";s:8:"parentid";s:1:"6";s:8:"app_code";s:8:"passport";s:10:"controller";s:7:"manager";s:6:"method";s:5:"editp";s:8:"extparam";s:0:"";s:9:"listorder";b:0;s:7:"display";s:1:"1";}', 'a:10:{s:2:"id";s:1:"8";s:4:"name";s:12:"修改密码";s:8:"parentid";s:1:"6";s:8:"app_code";s:8:"passport";s:10:"controller";s:6:"myinfo";s:6:"method";s:9:"changePwd";s:8:"extparam";s:0:"";s:9:"listorder";s:1:"0";s:5:"islog";s:1:"0";s:7:"display";s:1:"1";}', 'edit', '127.0.0.1', 1359518704),
(9, 1, 'wangcanliang', 1, '超级管理员', '28', '删除角色', 'a:10:{s:2:"id";s:2:"46";s:4:"name";s:12:"模型管理";s:8:"parentid";s:2:"45";s:8:"app_code";s:7:"content";s:10:"controller";s:5:"model";s:6:"method";s:8:"listinfo";s:8:"extparam";s:0:"";s:9:"listorder";s:1:"0";s:5:"islog";s:1:"1";s:7:"display";s:1:"1";}', 'a:0:{}', 'delete', '127.0.0.1', 1359533530),
(10, 1, 'wangcanliang', 1, '超级管理员', '28', '删除角色', 'a:10:{s:2:"id";s:2:"50";s:4:"name";s:12:"编辑模型";s:8:"parentid";s:2:"45";s:8:"app_code";s:7:"content";s:10:"controller";s:5:"model";s:6:"method";s:4:"edit";s:8:"extparam";s:0:"";s:9:"listorder";s:1:"0";s:5:"islog";s:1:"1";s:7:"display";s:1:"3";}', 'a:0:{}', 'delete', '127.0.0.1', 1359533544),
(11, 1, 'wangcanliang', 1, '超级管理员', '28', '删除角色', 'a:10:{s:2:"id";s:2:"49";s:4:"name";s:12:"删除模型";s:8:"parentid";s:2:"45";s:8:"app_code";s:7:"content";s:10:"controller";s:5:"model";s:6:"method";s:6:"delete";s:8:"extparam";s:0:"";s:9:"listorder";s:1:"0";s:5:"islog";s:1:"1";s:7:"display";s:1:"3";}', 'a:0:{}', 'delete', '127.0.0.1', 1359533559),
(12, 1, 'wangcanliang', 1, '超级管理员', '28', '删除角色', 'a:10:{s:2:"id";s:2:"48";s:4:"name";s:12:"查看模型";s:8:"parentid";s:2:"45";s:8:"app_code";s:7:"content";s:10:"controller";s:5:"model";s:6:"method";s:4:"view";s:8:"extparam";s:0:"";s:9:"listorder";s:1:"0";s:5:"islog";s:1:"1";s:7:"display";s:1:"3";}', 'a:0:{}', 'delete', '127.0.0.1', 1359533573),
(13, 1, 'wangcanliang', 1, '超级管理员', '28', '删除角色', 'a:10:{s:2:"id";s:2:"47";s:4:"name";s:12:"添加模型";s:8:"parentid";s:2:"45";s:8:"app_code";s:7:"content";s:10:"controller";s:5:"model";s:6:"method";s:3:"add";s:8:"extparam";s:0:"";s:9:"listorder";s:1:"0";s:5:"islog";s:1:"1";s:7:"display";s:1:"2";}', 'a:0:{}', 'delete', '127.0.0.1', 1359533585),
(14, 1, 'wangcanliang', 1, '超级管理员', '27', '编辑', 'a:8:{s:4:"name";s:12:"内容列表";s:8:"parentid";s:2:"61";s:8:"app_code";s:7:"content";s:10:"controller";s:7:"content";s:6:"method";s:8:"listinfo";s:8:"extparam";s:0:"";s:9:"listorder";b:0;s:7:"display";s:1:"3";}', 'a:10:{s:2:"id";s:2:"63";s:4:"name";s:12:"内容列表";s:8:"parentid";s:2:"61";s:8:"app_code";s:7:"content";s:10:"controller";s:7:"content";s:6:"method";s:8:"listinfo";s:8:"extparam";s:0:"";s:9:"listorder";s:1:"0";s:5:"islog";s:1:"1";s:7:"display";s:1:"1";}', 'edit', '127.0.0.1', 1359533691),
(15, 1, 'wangcanliang', 1, '超级管理员', '7', '修改个人信息', 'a:5:{s:8:"username";s:12:"wangcanliang";s:6:"roleid";b:0;s:5:"email";b:0;s:6:"islock";b:0;s:10:"createtime";i:1361149565;}', 'a:13:{s:2:"id";s:1:"1";s:8:"username";s:12:"wangcanliang";s:8:"password";s:32:"04ffd28d0a85e2050db77cbeeaa7d8ac";s:6:"roleid";s:1:"1";s:5:"email";s:26:"wangcanliang@xiangtone.com";s:7:"encrypt";s:6:"l9rIUD";s:10:"createtime";s:10:"1348821097";s:8:"loginnum";s:2:"70";s:6:"lastip";s:9:"127.0.0.1";s:8:"lasttime";s:10:"1361149542";s:6:"islock";s:1:"1";s:11:"handpay_key";s:32:"2f5a45a93f1bb1824dbb649e85e3753d";s:10:"handpay_en";s:6:"tE4RTF";}', 'edit', '127.0.0.1', 1361149565),
(16, 1, 'wangcanliang', 1, '超级管理员', '52', '添加栏目', 'a:14:{s:7:"catname";s:12:"活动公告";s:8:"parentid";s:3:"125";s:7:"modelid";s:1:"1";s:6:"catdir";s:5:"basew";s:5:"image";s:0:"";s:11:"description";s:6:"aaaaaa";s:6:"ishtml";b:0;s:8:"template";s:1:"0";s:10:"meta_title";s:0:"";s:13:"meta_keywords";s:0:"";s:16:"meta_description";s:0:"";s:9:"listorder";b:0;s:7:"urlrule";s:1:"0";s:9:"parentdir";s:5:"base/";}', 'a:0:{}', 'add', '127.0.0.1', 1361849730),
(17, 1, 'wangcanliang', 1, '超级管理员', '29', '添加菜单', 'a:8:{s:4:"name";s:12:"内容列表";s:8:"parentid";s:2:"89";s:8:"app_code";s:7:"webgame";s:10:"controller";s:7:"content";s:6:"method";s:8:"listinfo";s:8:"extparam";s:0:"";s:9:"listorder";b:0;s:7:"display";s:1:"3";}', 'a:0:{}', 'add', '127.0.0.1', 1362643693),
(18, 1, 'wangcanliang', 1, '超级管理员', '27', '编辑', 'a:8:{s:4:"name";s:12:"内容列表";s:8:"parentid";s:2:"90";s:8:"app_code";s:7:"webgame";s:10:"controller";s:7:"content";s:6:"method";s:8:"listinfo";s:8:"extparam";s:0:"";s:9:"listorder";b:0;s:7:"display";s:1:"3";}', 'a:10:{s:2:"id";s:3:"122";s:4:"name";s:12:"内容列表";s:8:"parentid";s:2:"89";s:8:"app_code";s:7:"webgame";s:10:"controller";s:7:"content";s:6:"method";s:8:"listinfo";s:8:"extparam";s:0:"";s:9:"listorder";s:1:"0";s:5:"islog";s:1:"1";s:7:"display";s:1:"3";}', 'edit', '127.0.0.1', 1362643875),
(19, 1, 'wangcanliang', 1, '超级管理员', '29', '添加菜单', 'a:8:{s:4:"name";s:18:"平台附件管理";s:8:"parentid";s:1:"5";s:8:"app_code";s:8:"passport";s:10:"controller";s:0:"";s:6:"method";s:0:"";s:8:"extparam";s:0:"";s:9:"listorder";b:0;s:7:"display";s:1:"2";}', 'a:0:{}', 'add', '127.0.0.1', 1362726537),
(20, 1, 'wangcanliang', 1, '超级管理员', '27', '编辑', 'a:8:{s:4:"name";s:18:"平台附件管理";s:8:"parentid";s:1:"5";s:8:"app_code";s:8:"passport";s:10:"controller";s:0:"";s:6:"method";s:0:"";s:8:"extparam";s:0:"";s:9:"listorder";b:0;s:7:"display";s:1:"1";}', 'a:10:{s:2:"id";s:3:"123";s:4:"name";s:18:"平台附件管理";s:8:"parentid";s:1:"5";s:8:"app_code";s:8:"passport";s:10:"controller";s:0:"";s:6:"method";s:0:"";s:8:"extparam";s:0:"";s:9:"listorder";s:1:"0";s:5:"islog";s:1:"1";s:7:"display";s:1:"2";}', 'edit', '127.0.0.1', 1362726643),
(21, 1, 'wangcanliang', 1, '超级管理员', '15', '编辑管理员', 'a:7:{s:8:"username";s:7:"wangcan";s:6:"roleid";s:1:"2";s:5:"email";s:12:"eee@test.com";s:6:"islock";s:1:"1";s:10:"createtime";i:1362981077;s:8:"password";s:32:"a03bcf966089984f1fee70c4ec6d4bcf";s:7:"encrypt";s:6:"ISfBjk";}', 'a:14:{s:2:"id";s:1:"2";s:8:"username";s:7:"wangcan";s:8:"truename";s:0:"";s:8:"password";s:32:"6a2bbbefb54aa8096e29c2c9f903b5d0";s:6:"roleid";s:1:"2";s:5:"email";s:12:"eee@test.com";s:7:"encrypt";s:6:"PNQKTg";s:10:"createtime";s:10:"1359515342";s:8:"loginnum";s:1:"0";s:6:"lastip";s:0:"";s:8:"lasttime";s:1:"0";s:6:"islock";s:1:"1";s:11:"handpay_key";s:0:"";s:10:"handpay_en";s:0:"";}', 'edit', '127.0.0.1', 1362981077),
(22, 2, 'wangcan', 2, '编辑', '7', '修改个人信息', 'a:4:{s:8:"truename";s:4:"wang";s:5:"email";s:12:"eee@test.com";s:8:"username";s:7:"wangcan";s:10:"createtime";i:1362981132;}', 'a:14:{s:2:"id";s:1:"2";s:8:"username";s:7:"wangcan";s:8:"truename";s:0:"";s:8:"password";s:32:"a03bcf966089984f1fee70c4ec6d4bcf";s:6:"roleid";s:1:"2";s:5:"email";s:12:"eee@test.com";s:7:"encrypt";s:6:"ISfBjk";s:10:"createtime";s:10:"1362981077";s:8:"loginnum";s:1:"1";s:6:"lastip";s:9:"127.0.0.1";s:8:"lasttime";s:10:"1362981086";s:6:"islock";s:1:"1";s:11:"handpay_key";s:0:"";s:10:"handpay_en";s:0:"";}', 'edit', '127.0.0.1', 1362981132),
(23, 2, 'wangcan', 2, '编辑', '8', '修改密码', 'a:4:{s:8:"username";s:7:"wangcan";s:10:"createtime";i:1362981159;s:8:"password";s:32:"37bbc5485e0993f7caf024ef545d5d5c";s:7:"encrypt";s:6:"g9dYGv";}', 'a:14:{s:2:"id";s:1:"2";s:8:"username";s:7:"wangcan";s:8:"truename";s:4:"wang";s:8:"password";s:32:"a03bcf966089984f1fee70c4ec6d4bcf";s:6:"roleid";s:1:"2";s:5:"email";s:12:"eee@test.com";s:7:"encrypt";s:6:"ISfBjk";s:10:"createtime";s:10:"1362981132";s:8:"loginnum";s:1:"1";s:6:"lastip";s:9:"127.0.0.1";s:8:"lasttime";s:10:"1362981086";s:6:"islock";s:1:"1";s:11:"handpay_key";s:0:"";s:10:"handpay_en";s:0:"";}', 'edit', '127.0.0.1', 1362981159),
(24, 1, 'wangcanliang', 1, '超级管理员', '96', '编辑栏目', 'a:14:{s:7:"catname";s:12:"信息管理";s:8:"parentid";s:1:"0";s:7:"modelid";s:1:"1";s:6:"catdir";s:5:"spage";s:5:"image";s:0:"";s:11:"description";s:34:"http://www.ganwan.com/index/cat/45";s:6:"ishtml";s:1:"0";s:8:"template";s:1:"0";s:10:"meta_title";s:0:"";s:13:"meta_keywords";s:0:"";s:16:"meta_description";s:0:"";s:9:"listorder";b:0;s:7:"urlrule";s:1:"0";s:9:"parentdir";s:1:"/";}', 'a:16:{s:2:"id";s:2:"45";s:7:"catname";s:12:"信息管理";s:6:"catdir";s:0:"";s:6:"caturl";s:1:"0";s:9:"parentdir";s:1:"/";s:5:"image";s:0:"";s:8:"parentid";s:1:"0";s:7:"modelid";s:1:"2";s:9:"listorder";s:1:"0";s:11:"description";s:34:"http://www.ganwan.com/index/cat/45";s:8:"template";s:0:"";s:10:"meta_title";s:0:"";s:13:"meta_keywords";s:0:"";s:16:"meta_description";s:0:"";s:7:"urlrule";s:0:"";s:6:"ishtml";s:1:"0";}', 'edit', '127.0.0.1', 1362982416),
(25, 1, 'wangcanliang', 1, '超级管理员', '103', '添加内容', 'a:4:{s:5:"catid";b:0;s:5:"title";b:0;s:8:"username";b:0;s:7:"content";s:24:"<p>\r\n	点点滴滴</p>\r\n";}', 'a:0:{}', 'add', '127.0.0.1', 1363337566),
(26, 1, 'wangcanliang', 1, '超级管理员', '103', '添加内容', 'a:4:{s:5:"catid";b:0;s:5:"title";b:0;s:8:"username";b:0;s:7:"content";s:24:"<p>\r\n	啊啊啊啊</p>\r\n";}', 'a:0:{}', 'add', '127.0.0.1', 1363337609),
(27, 1, 'wangcanliang', 1, '超级管理员', '64', '添加内容', 'a:4:{s:5:"catid";b:0;s:5:"title";b:0;s:8:"username";b:0;s:7:"content";s:0:"";}', 'a:0:{}', 'add', '127.0.0.1', 1363580806),
(28, 1, 'wangcanliang', 1, '超级管理员', '64', '添加内容', 'a:4:{s:5:"catid";s:3:"127";s:5:"title";s:61:"linux(centos)下编译安装php性能测试工具xhprof笔记";s:8:"username";b:0;s:7:"content";s:23:"<p>\r\n	asdfasdfasf</p>\r\n";}', 'a:0:{}', 'add', '127.0.0.1', 1363680118),
(29, 1, 'wangcanliang', 1, '超级管理员', '64', '添加内容', 'a:4:{s:5:"catid";s:3:"127";s:5:"title";s:12:"asdfasdfasdf";s:8:"username";b:0;s:7:"content";s:36:"<p>\r\n	sadfasdfasdfasdfasdfasdf</p>\r\n";}', 'a:0:{}', 'add', '127.0.0.1', 1363680220),
(30, 1, 'wangcanliang', 1, '超级管理员', '136', '删除内容', 'a:18:{s:2:"id";s:1:"2";s:5:"catid";s:2:"15";s:5:"title";s:47:"4.文件与目录的默认权限与隐藏权限";s:5:"thumb";s:0:"";s:8:"keywords";s:12:"have keyword";s:11:"description";s:6:"eeeeee";s:3:"url";s:0:"";s:9:"listorder";s:1:"0";s:6:"status";s:1:"1";s:6:"islink";s:1:"0";s:8:"username";s:12:"wangcanliang";s:8:"copyfrom";s:6:"aaaaaa";s:7:"content";s:30:"<p>\r\n	asdfasdfsadfsdfsdf</p>\r\n";s:8:"template";s:0:"";s:9:"inputtime";s:10:"1363853097";s:10:"updatetime";s:10:"1363853097";s:4:"fbak";s:1:"0";s:9:"seo_title";s:0:"";}', 'a:0:{}', 'delete', '127.0.0.1', 1363855432),
(31, 1, 'wangcanliang', 1, '超级管理员', '136', '删除内容', 'a:18:{s:2:"id";s:1:"3";s:5:"catid";s:2:"15";s:5:"title";s:22:"uuuuuuuuuuuuuuuuuuuuuu";s:5:"thumb";s:60:"http://upload.ci.com/passport2013/0321/20130321164229179.jpg";s:8:"keywords";s:12:"have keyword";s:11:"description";s:45:"iiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii";s:3:"url";s:0:"";s:9:"listorder";s:1:"0";s:6:"status";s:1:"1";s:6:"islink";s:1:"0";s:8:"username";s:12:"wangcanliang";s:8:"copyfrom";s:6:"333333";s:7:"content";s:57:"<p>\r\n	iiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii</p>\r\n";s:8:"template";s:0:"";s:9:"inputtime";s:10:"1363853152";s:10:"updatetime";s:10:"1363855360";s:4:"fbak";s:1:"0";s:9:"seo_title";s:0:"";}', 'a:0:{}', 'delete', '127.0.0.1', 1363855467),
(32, 1, 'wangcanliang', 1, '超级管理员', '27', '编辑', 'a:8:{s:4:"name";s:18:"采集内容管理";s:8:"parentid";s:3:"156";s:8:"app_code";s:6:"spider";s:10:"controller";s:0:"";s:6:"method";s:0:"";s:8:"extparam";s:0:"";s:9:"listorder";b:0;s:7:"display";s:1:"1";}', 'a:10:{s:2:"id";s:3:"159";s:4:"name";s:18:"采集内容任务";s:8:"parentid";s:3:"156";s:8:"app_code";s:6:"spider";s:10:"controller";s:0:"";s:6:"method";s:0:"";s:8:"extparam";s:0:"";s:9:"listorder";s:1:"0";s:5:"islog";s:1:"0";s:7:"display";s:1:"1";}', 'edit', '127.0.0.1', 1364207491),
(33, 1, 'wangcanliang', 1, '超级管理员', '161', '添加源站', 'a:2:{s:4:"name";s:3:"eee";s:7:"siteurl";s:17:"http://localhost/";}', 'a:0:{}', 'add', '127.0.0.1', 1364354334),
(34, 1, 'wangcanliang', 1, '超级管理员', '162', '编辑源站', 'a:2:{s:4:"name";s:3:"eee";s:7:"siteurl";s:11:"http://aaa/";}', 'a:4:{s:2:"id";s:2:"21";s:4:"name";s:3:"eee";s:4:"code";s:0:"";s:7:"siteurl";s:17:"http://localhost/";}', 'edit', '127.0.0.1', 1364354847),
(35, 1, 'wangcanliang', 1, '超级管理员', '163', '删除源站', 'a:4:{s:2:"id";s:2:"21";s:4:"name";s:3:"eee";s:4:"code";s:0:"";s:7:"siteurl";s:11:"http://aaa/";}', 'a:0:{}', 'delete', '127.0.0.1', 1364354859),
(36, 1, 'wangcanliang', 1, '超级管理员', '162', '编辑源站', 'a:2:{s:4:"name";s:9:"多玩网";s:7:"siteurl";s:22:"http://web.duowan.com/";}', 'a:4:{s:2:"id";s:1:"5";s:4:"name";s:9:"多玩网";s:4:"code";s:6:"duowan";s:7:"siteurl";s:21:"http://web.duowan.com";}', 'edit', '127.0.0.1', 1364369700),
(37, 1, 'wangcanliang', 1, '超级管理员', '15', '编辑管理员', 'a:5:{s:8:"username";s:7:"wangcan";s:6:"roleid";s:1:"2";s:5:"email";s:12:"eee@test.com";s:6:"islock";s:1:"1";s:10:"createtime";i:1364371358;}', 'a:14:{s:2:"id";s:1:"2";s:8:"username";s:7:"wangcan";s:8:"truename";s:4:"wang";s:8:"password";s:32:"37bbc5485e0993f7caf024ef545d5d5c";s:6:"roleid";s:1:"2";s:5:"email";s:12:"eee@test.com";s:7:"encrypt";s:6:"g9dYGv";s:10:"createtime";s:10:"1362981159";s:8:"loginnum";s:1:"3";s:6:"lastip";s:9:"127.0.0.1";s:8:"lasttime";s:10:"1362981487";s:6:"islock";s:1:"1";s:11:"handpay_key";s:0:"";s:10:"handpay_en";s:0:"";}', 'edit', '127.0.0.1', 1364371358),
(38, 1, 'wangcanliang', 1, '超级管理员', '165', '添加页面', 'a:3:{s:4:"name";s:6:"328349";s:7:"site_id";b:0;s:7:"pageurl";s:4:"aaaa";}', 'a:0:{}', 'add', '127.0.0.1', 1364373799),
(39, 1, 'wangcanliang', 1, '超级管理员', '29', '添加菜单', 'a:8:{s:4:"name";s:12:"采集资源";s:8:"parentid";s:3:"157";s:8:"app_code";s:6:"spider";s:10:"controller";s:8:"sitePage";s:6:"method";s:8:"downFile";s:8:"extparam";s:0:"";s:9:"listorder";b:0;s:7:"display";s:1:"4";}', 'a:0:{}', 'add', '127.0.0.1', 1366183832),
(40, 1, 'wangcanliang', 1, '超级管理员', '27', '编辑', 'a:8:{s:4:"name";s:12:"养生咨询";s:8:"parentid";s:1:"0";s:8:"app_code";s:6:"yangsh";s:10:"controller";s:0:"";s:6:"method";s:0:"";s:8:"extparam";s:0:"";s:9:"listorder";b:0;s:7:"display";s:1:"1";}', 'a:10:{s:2:"id";s:3:"124";s:4:"name";s:12:"内容管理";s:8:"parentid";s:1:"0";s:8:"app_code";s:6:"yangsh";s:10:"controller";s:0:"";s:6:"method";s:0:"";s:8:"extparam";s:0:"";s:9:"listorder";s:1:"0";s:5:"islog";s:1:"0";s:7:"display";s:1:"1";}', 'edit', '127.0.0.1', 1366196008),
(41, 1, 'wangcanliang', 1, '超级管理员', '27', '编辑', 'a:8:{s:4:"name";s:15:"我要养生网";s:8:"parentid";s:1:"0";s:8:"app_code";s:6:"yangsh";s:10:"controller";s:0:"";s:6:"method";s:0:"";s:8:"extparam";s:0:"";s:9:"listorder";b:0;s:7:"display";s:1:"1";}', 'a:10:{s:2:"id";s:3:"124";s:4:"name";s:12:"养生咨询";s:8:"parentid";s:1:"0";s:8:"app_code";s:6:"yangsh";s:10:"controller";s:0:"";s:6:"method";s:0:"";s:8:"extparam";s:0:"";s:9:"listorder";s:1:"0";s:5:"islog";s:1:"0";s:7:"display";s:1:"1";}', 'edit', '127.0.0.1', 1366196040),
(42, 1, 'wangcanliang', 1, '超级管理员', '27', '编辑', 'a:8:{s:4:"name";s:21:"第三方平台管理";s:8:"parentid";s:1:"0";s:8:"app_code";s:5:"third";s:10:"controller";s:0:"";s:6:"method";s:0:"";s:8:"extparam";s:0:"";s:9:"listorder";b:0;s:7:"display";s:1:"1";}', 'a:10:{s:2:"id";s:2:"88";s:4:"name";s:18:"网游内容管理";s:8:"parentid";s:1:"0";s:8:"app_code";s:5:"third";s:10:"controller";s:0:"";s:6:"method";s:0:"";s:8:"extparam";s:0:"";s:9:"listorder";s:1:"0";s:5:"islog";s:1:"0";s:7:"display";s:1:"1";}', 'edit', '127.0.0.1', 1366196061),
(43, 1, 'wangcanliang', 1, '超级管理员', '27', '编辑', 'a:8:{s:4:"name";s:12:"应用管理";s:8:"parentid";s:1:"0";s:8:"app_code";s:8:"passport";s:10:"controller";s:0:"";s:6:"method";s:0:"";s:8:"extparam";s:0:"";s:9:"listorder";b:0;s:7:"display";s:1:"1";}', 'a:10:{s:2:"id";s:1:"5";s:4:"name";s:12:"应用管理";s:8:"parentid";s:1:"0";s:8:"app_code";s:4:"shop";s:10:"controller";s:0:"";s:6:"method";s:0:"";s:8:"extparam";s:0:"";s:9:"listorder";s:1:"0";s:5:"islog";s:1:"0";s:7:"display";s:1:"1";}', 'edit', '127.0.0.1', 1366196096),
(44, 1, 'wangcanliang', 1, '超级管理员', '27', '编辑', 'a:8:{s:4:"name";s:12:"最爱电影";s:8:"parentid";s:1:"0";s:8:"app_code";s:5:"movie";s:10:"controller";s:0:"";s:6:"method";s:0:"";s:8:"extparam";s:0:"";s:9:"listorder";b:0;s:7:"display";s:1:"1";}', 'a:10:{s:2:"id";s:2:"88";s:4:"name";s:21:"第三方平台管理";s:8:"parentid";s:1:"0";s:8:"app_code";s:5:"movie";s:10:"controller";s:0:"";s:6:"method";s:0:"";s:8:"extparam";s:0:"";s:9:"listorder";s:1:"0";s:5:"islog";s:1:"0";s:7:"display";s:1:"1";}', 'edit', '127.0.0.1', 1366245538),
(45, 1, 'wangcanliang', 1, '超级管理员', '27', '编辑', 'a:8:{s:4:"name";s:12:"电子商城";s:8:"parentid";s:1:"0";s:8:"app_code";s:7:"content";s:10:"controller";s:0:"";s:6:"method";s:0:"";s:8:"extparam";s:0:"";s:9:"listorder";b:0;s:7:"display";s:1:"1";}', 'a:10:{s:2:"id";s:1:"4";s:4:"name";s:12:"内容管理";s:8:"parentid";s:1:"0";s:8:"app_code";s:4:"shop";s:10:"controller";s:0:"";s:6:"method";s:0:"";s:8:"extparam";s:0:"";s:9:"listorder";s:1:"0";s:5:"islog";s:1:"0";s:7:"display";s:1:"1";}', 'edit', '127.0.0.1', 1366245603),
(46, 1, 'wangcanliang', 1, '超级管理员', '29', '添加菜单', 'a:8:{s:4:"name";s:21:"第三方平台管理";s:8:"parentid";s:1:"0";s:8:"app_code";s:5:"third";s:10:"controller";s:0:"";s:6:"method";s:0:"";s:8:"extparam";s:0:"";s:9:"listorder";b:0;s:7:"display";s:1:"1";}', 'a:0:{}', 'add', '127.0.0.1', 1366246026),
(47, 1, 'wangcanliang', 1, '超级管理员', '29', '添加菜单', 'a:8:{s:4:"name";s:12:"个人空间";s:8:"parentid";s:1:"0";s:8:"app_code";s:6:"myhome";s:10:"controller";s:0:"";s:6:"method";s:0:"";s:8:"extparam";s:0:"";s:9:"listorder";b:0;s:7:"display";s:1:"1";}', 'a:0:{}', 'add', '127.0.0.1', 1366246125),
(48, 1, 'wangcanliang', 1, '超级管理员', '27', '编辑', 'a:183:{i:1;s:1:"0";i:6;s:1:"0";i:7;s:1:"0";i:8;s:1:"0";i:9;s:1:"0";i:10;s:1:"0";i:2;s:1:"1";i:11;s:1:"0";i:13;s:1:"0";i:14;s:1:"0";i:15;s:1:"0";i:16;s:1:"0";i:17;s:1:"0";i:18;s:1:"0";i:19;s:1:"0";i:20;s:1:"0";i:21;s:1:"0";i:22;s:1:"0";i:23;s:1:"0";i:24;s:1:"0";i:25;s:1:"0";i:26;s:1:"0";i:27;s:1:"0";i:28;s:1:"0";i:29;s:1:"0";i:87;s:1:"0";i:12;s:1:"0";i:30;s:1:"0";i:31;s:1:"0";i:3;s:1:"0";i:32;s:1:"0";i:35;s:1:"0";i:36;s:1:"0";i:33;s:1:"0";i:37;s:1:"0";i:38;s:1:"0";i:39;s:1:"0";i:34;s:1:"0";i:40;s:1:"0";i:41;s:1:"0";i:42;s:1:"0";i:43;s:1:"0";i:44;s:1:"0";i:4;s:1:"0";i:45;s:1:"0";i:51;s:1:"0";i:52;s:1:"0";i:53;s:1:"0";i:54;s:1:"0";i:55;s:1:"0";i:56;s:1:"0";i:57;s:1:"0";i:58;s:1:"0";i:59;s:1:"0";i:60;s:1:"0";i:61;s:1:"0";i:62;s:1:"0";i:63;s:1:"0";i:64;s:1:"0";i:65;s:1:"0";i:66;s:1:"0";i:67;s:1:"0";i:72;s:1:"0";i:73;s:1:"0";i:74;s:1:"0";i:75;s:1:"0";i:76;s:1:"0";i:77;s:1:"0";i:78;s:1:"0";i:79;s:1:"0";i:80;s:1:"0";i:81;s:1:"0";i:82;s:1:"0";i:83;s:1:"0";i:84;s:1:"0";i:5;s:1:"0";i:123;s:1:"0";i:68;s:1:"0";i:69;s:1:"0";i:70;s:1:"0";i:71;s:1:"0";i:88;s:1:"0";i:92;s:1:"0";i:115;s:1:"0";i:116;s:1:"0";i:117;s:1:"0";i:118;s:1:"0";i:119;s:1:"0";i:120;s:1:"0";i:121;s:1:"0";i:89;s:1:"0";i:93;s:1:"0";i:94;s:1:"0";i:95;s:1:"0";i:96;s:1:"0";i:97;s:1:"0";i:98;s:1:"0";i:99;s:1:"0";i:100;s:1:"0";i:101;s:1:"0";i:90;s:1:"0";i:102;s:1:"0";i:103;s:1:"0";i:104;s:1:"0";i:105;s:1:"0";i:106;s:1:"0";i:122;s:1:"0";i:91;s:1:"0";i:111;s:1:"0";i:112;s:1:"0";i:113;s:1:"0";i:114;s:1:"0";i:124;s:1:"0";i:125;s:1:"0";i:129;s:1:"0";i:130;s:1:"0";i:131;s:1:"0";i:132;s:1:"0";i:133;s:1:"0";i:140;s:1:"0";i:141;s:1:"0";i:142;s:1:"0";i:143;s:1:"0";i:144;s:1:"0";i:126;s:1:"0";i:134;s:1:"0";i:135;s:1:"0";i:136;s:1:"0";i:137;s:1:"0";i:138;s:1:"0";i:139;s:1:"0";i:127;s:1:"0";i:145;s:1:"0";i:146;s:1:"0";i:147;s:1:"0";i:148;s:1:"0";i:128;s:1:"0";i:149;s:1:"0";i:150;s:1:"0";i:151;s:1:"0";i:152;s:1:"0";i:153;s:1:"0";i:154;s:1:"0";i:155;s:1:"0";i:156;s:1:"0";i:157;s:1:"0";i:160;s:1:"0";i:161;s:1:"0";i:162;s:1:"0";i:163;s:1:"0";i:164;s:1:"0";i:165;s:1:"0";i:166;s:1:"0";i:167;s:1:"0";i:169;s:1:"0";i:170;s:1:"0";i:183;s:1:"0";i:184;s:1:"0";i:193;s:1:"0";i:158;s:1:"0";i:185;s:1:"0";i:171;s:1:"0";i:172;s:1:"0";i:173;s:1:"0";i:174;s:1:"0";i:175;s:1:"0";i:176;s:1:"0";i:177;s:1:"0";i:178;s:1:"0";i:186;s:1:"0";i:187;s:1:"0";i:188;s:1:"0";i:189;s:1:"0";i:190;s:1:"0";i:191;s:1:"0";i:192;s:1:"0";i:159;s:1:"0";i:179;s:1:"0";i:180;s:1:"0";i:181;s:1:"0";i:182;s:1:"0";i:194;s:1:"0";i:195;s:1:"0";}', 'a:0:{}', 'listorder', '127.0.0.1', 1366272465),
(49, 1, 'wangcanliang', 1, '超级管理员', '27', '编辑', 'a:183:{i:1;s:1:"0";i:6;s:1:"0";i:7;s:1:"0";i:8;s:1:"0";i:9;s:1:"0";i:10;s:1:"0";i:2;s:1:"1";i:11;s:1:"0";i:13;s:1:"0";i:14;s:1:"0";i:15;s:1:"0";i:16;s:1:"0";i:17;s:1:"0";i:18;s:1:"0";i:19;s:1:"0";i:20;s:1:"0";i:21;s:1:"0";i:22;s:1:"0";i:23;s:1:"0";i:24;s:1:"0";i:25;s:1:"0";i:26;s:1:"0";i:27;s:1:"0";i:28;s:1:"0";i:29;s:1:"0";i:87;s:1:"0";i:12;s:1:"0";i:30;s:1:"0";i:31;s:1:"0";i:3;s:1:"2";i:32;s:1:"0";i:35;s:1:"0";i:36;s:1:"0";i:33;s:1:"0";i:37;s:1:"0";i:38;s:1:"0";i:39;s:1:"0";i:34;s:1:"0";i:40;s:1:"0";i:41;s:1:"0";i:42;s:1:"0";i:43;s:1:"0";i:44;s:1:"0";i:4;s:1:"7";i:45;s:1:"0";i:51;s:1:"0";i:52;s:1:"0";i:53;s:1:"0";i:54;s:1:"0";i:55;s:1:"0";i:56;s:1:"0";i:57;s:1:"0";i:58;s:1:"0";i:59;s:1:"0";i:60;s:1:"0";i:61;s:1:"0";i:62;s:1:"0";i:63;s:1:"0";i:64;s:1:"0";i:65;s:1:"0";i:66;s:1:"0";i:67;s:1:"0";i:72;s:1:"0";i:73;s:1:"0";i:74;s:1:"0";i:75;s:1:"0";i:76;s:1:"0";i:77;s:1:"0";i:78;s:1:"0";i:79;s:1:"0";i:80;s:1:"0";i:81;s:1:"0";i:82;s:1:"0";i:83;s:1:"0";i:84;s:1:"0";i:5;s:1:"5";i:123;s:1:"0";i:68;s:1:"0";i:69;s:1:"0";i:70;s:1:"0";i:71;s:1:"0";i:88;s:1:"8";i:92;s:1:"0";i:115;s:1:"0";i:116;s:1:"0";i:117;s:1:"0";i:118;s:1:"0";i:119;s:1:"0";i:120;s:1:"0";i:121;s:1:"0";i:89;s:1:"0";i:93;s:1:"0";i:94;s:1:"0";i:95;s:1:"0";i:96;s:1:"0";i:97;s:1:"0";i:98;s:1:"0";i:99;s:1:"0";i:100;s:1:"0";i:101;s:1:"0";i:90;s:1:"0";i:102;s:1:"0";i:103;s:1:"0";i:104;s:1:"0";i:105;s:1:"0";i:106;s:1:"0";i:122;s:1:"0";i:91;s:1:"0";i:111;s:1:"0";i:112;s:1:"0";i:113;s:1:"0";i:114;s:1:"0";i:124;s:1:"9";i:125;s:1:"0";i:129;s:1:"0";i:130;s:1:"0";i:131;s:1:"0";i:132;s:1:"0";i:133;s:1:"0";i:140;s:1:"0";i:141;s:1:"0";i:142;s:1:"0";i:143;s:1:"0";i:144;s:1:"0";i:126;s:1:"0";i:134;s:1:"0";i:135;s:1:"0";i:136;s:1:"0";i:137;s:1:"0";i:138;s:1:"0";i:139;s:1:"0";i:127;s:1:"0";i:145;s:1:"0";i:146;s:1:"0";i:147;s:1:"0";i:148;s:1:"0";i:128;s:1:"0";i:149;s:1:"0";i:150;s:1:"0";i:151;s:1:"0";i:152;s:1:"0";i:153;s:1:"0";i:154;s:1:"0";i:155;s:1:"0";i:156;s:1:"6";i:157;s:1:"0";i:160;s:1:"0";i:161;s:1:"0";i:162;s:1:"0";i:163;s:1:"0";i:164;s:1:"0";i:165;s:1:"0";i:166;s:1:"0";i:167;s:1:"0";i:169;s:1:"0";i:170;s:1:"0";i:183;s:1:"0";i:184;s:1:"0";i:193;s:1:"0";i:158;s:1:"0";i:185;s:1:"0";i:171;s:1:"0";i:172;s:1:"0";i:173;s:1:"0";i:174;s:1:"0";i:175;s:1:"0";i:176;s:1:"0";i:177;s:1:"0";i:178;s:1:"0";i:186;s:1:"0";i:187;s:1:"0";i:188;s:1:"0";i:189;s:1:"0";i:190;s:1:"0";i:191;s:1:"0";i:192;s:1:"0";i:159;s:1:"0";i:179;s:1:"0";i:180;s:1:"0";i:181;s:1:"0";i:182;s:1:"0";i:194;s:1:"3";i:195;s:1:"4";}', 'a:0:{}', 'listorder', '127.0.0.1', 1366272500),
(50, 1, 'wangcanliang', 1, '超级管理员', '27', '编辑', 'a:183:{i:1;s:1:"0";i:6;s:1:"0";i:10;s:1:"0";i:9;s:1:"0";i:8;s:1:"0";i:7;s:1:"0";i:2;s:1:"1";i:12;s:1:"0";i:31;s:1:"0";i:30;s:1:"0";i:11;s:1:"0";i:29;s:1:"0";i:28;s:1:"0";i:27;s:1:"0";i:26;s:1:"0";i:25;s:1:"0";i:13;s:1:"0";i:14;s:1:"0";i:15;s:1:"0";i:16;s:1:"0";i:24;s:1:"0";i:23;s:1:"0";i:22;s:1:"0";i:21;s:1:"0";i:20;s:1:"0";i:19;s:1:"0";i:18;s:1:"0";i:17;s:1:"0";i:87;s:1:"0";i:3;s:1:"2";i:34;s:1:"0";i:44;s:1:"0";i:43;s:1:"0";i:42;s:1:"0";i:41;s:1:"0";i:40;s:1:"0";i:33;s:1:"0";i:37;s:1:"0";i:39;s:1:"0";i:38;s:1:"0";i:32;s:1:"0";i:35;s:1:"0";i:36;s:1:"0";i:194;s:1:"3";i:195;s:1:"4";i:5;s:1:"5";i:123;s:1:"0";i:71;s:1:"0";i:70;s:1:"0";i:69;s:1:"0";i:68;s:1:"0";i:156;s:1:"6";i:158;s:1:"1";i:178;s:1:"0";i:177;s:1:"0";i:176;s:1:"0";i:175;s:1:"0";i:174;s:1:"0";i:173;s:1:"0";i:172;s:1:"0";i:192;s:1:"0";i:191;s:1:"0";i:190;s:1:"0";i:189;s:1:"0";i:188;s:1:"0";i:187;s:1:"0";i:186;s:1:"0";i:171;s:1:"0";i:185;s:1:"0";i:157;s:1:"0";i:193;s:1:"0";i:184;s:1:"0";i:183;s:1:"0";i:170;s:1:"0";i:160;s:1:"0";i:169;s:1:"0";i:167;s:1:"0";i:166;s:1:"0";i:165;s:1:"0";i:164;s:1:"0";i:163;s:1:"0";i:162;s:1:"0";i:161;s:1:"0";i:159;s:1:"2";i:180;s:1:"0";i:179;s:1:"0";i:181;s:1:"0";i:182;s:1:"0";i:4;s:1:"7";i:45;s:1:"0";i:56;s:1:"0";i:55;s:1:"0";i:54;s:1:"0";i:53;s:1:"0";i:52;s:1:"0";i:51;s:1:"0";i:59;s:1:"0";i:57;s:1:"0";i:60;s:1:"0";i:58;s:1:"0";i:77;s:1:"0";i:78;s:1:"0";i:79;s:1:"0";i:80;s:1:"0";i:84;s:1:"0";i:83;s:1:"0";i:82;s:1:"0";i:81;s:1:"0";i:72;s:1:"0";i:76;s:1:"0";i:75;s:1:"0";i:74;s:1:"0";i:73;s:1:"0";i:61;s:1:"0";i:67;s:1:"0";i:64;s:1:"0";i:65;s:1:"0";i:63;s:1:"0";i:62;s:1:"0";i:66;s:1:"0";i:88;s:1:"8";i:92;s:1:"0";i:121;s:1:"0";i:120;s:1:"0";i:119;s:1:"0";i:118;s:1:"0";i:117;s:1:"0";i:116;s:1:"0";i:115;s:1:"0";i:89;s:1:"0";i:101;s:1:"0";i:100;s:1:"0";i:99;s:1:"0";i:98;s:1:"0";i:97;s:1:"0";i:96;s:1:"0";i:95;s:1:"0";i:94;s:1:"0";i:93;s:1:"0";i:91;s:1:"0";i:114;s:1:"0";i:113;s:1:"0";i:112;s:1:"0";i:111;s:1:"0";i:90;s:1:"0";i:122;s:1:"0";i:106;s:1:"0";i:105;s:1:"0";i:104;s:1:"0";i:103;s:1:"0";i:102;s:1:"0";i:124;s:1:"9";i:128;s:1:"0";i:155;s:1:"0";i:154;s:1:"0";i:153;s:1:"0";i:152;s:1:"0";i:151;s:1:"0";i:150;s:1:"0";i:149;s:1:"0";i:127;s:1:"0";i:146;s:1:"0";i:145;s:1:"0";i:147;s:1:"0";i:148;s:1:"0";i:125;s:1:"0";i:133;s:1:"0";i:132;s:1:"0";i:131;s:1:"0";i:130;s:1:"0";i:129;s:1:"0";i:144;s:1:"0";i:143;s:1:"0";i:142;s:1:"0";i:141;s:1:"0";i:140;s:1:"0";i:126;s:1:"0";i:134;s:1:"0";i:135;s:1:"0";i:136;s:1:"0";i:139;s:1:"0";i:138;s:1:"0";i:137;s:1:"0";}', 'a:0:{}', 'listorder', '127.0.0.1', 1366275186),
(51, 1, 'wangcanliang', 1, '超级管理员', '27', '编辑', 'a:183:{i:1;s:1:"0";i:6;s:1:"0";i:10;s:1:"0";i:9;s:1:"0";i:8;s:1:"0";i:7;s:1:"0";i:2;s:1:"1";i:12;s:1:"1";i:31;s:1:"0";i:30;s:1:"0";i:11;s:1:"0";i:29;s:1:"0";i:28;s:1:"0";i:27;s:1:"0";i:26;s:1:"0";i:25;s:1:"0";i:13;s:1:"0";i:14;s:1:"0";i:15;s:1:"0";i:16;s:1:"0";i:24;s:1:"0";i:23;s:1:"0";i:22;s:1:"0";i:21;s:1:"0";i:20;s:1:"0";i:19;s:1:"0";i:18;s:1:"0";i:17;s:1:"0";i:87;s:1:"0";i:3;s:1:"2";i:34;s:1:"2";i:44;s:1:"0";i:43;s:1:"0";i:42;s:1:"0";i:41;s:1:"0";i:40;s:1:"0";i:33;s:1:"1";i:37;s:1:"0";i:39;s:1:"0";i:38;s:1:"0";i:32;s:1:"0";i:35;s:1:"0";i:36;s:1:"0";i:194;s:1:"3";i:195;s:1:"4";i:5;s:1:"5";i:123;s:1:"0";i:71;s:1:"0";i:70;s:1:"0";i:69;s:1:"0";i:68;s:1:"0";i:156;s:1:"6";i:157;s:1:"0";i:193;s:1:"0";i:184;s:1:"0";i:183;s:1:"0";i:170;s:1:"0";i:160;s:1:"0";i:169;s:1:"0";i:167;s:1:"0";i:166;s:1:"0";i:165;s:1:"0";i:164;s:1:"0";i:163;s:1:"0";i:162;s:1:"0";i:161;s:1:"0";i:158;s:1:"1";i:178;s:1:"0";i:177;s:1:"0";i:176;s:1:"0";i:175;s:1:"0";i:174;s:1:"0";i:173;s:1:"0";i:172;s:1:"0";i:192;s:1:"0";i:191;s:1:"0";i:190;s:1:"0";i:189;s:1:"0";i:188;s:1:"0";i:187;s:1:"0";i:186;s:1:"0";i:171;s:1:"0";i:185;s:1:"0";i:159;s:1:"2";i:180;s:1:"0";i:179;s:1:"0";i:181;s:1:"0";i:182;s:1:"0";i:4;s:1:"7";i:45;s:1:"0";i:55;s:1:"0";i:57;s:1:"0";i:56;s:1:"0";i:54;s:1:"0";i:53;s:1:"0";i:52;s:1:"0";i:51;s:1:"0";i:58;s:1:"0";i:59;s:1:"0";i:60;s:1:"0";i:77;s:1:"3";i:78;s:1:"0";i:84;s:1:"0";i:83;s:1:"0";i:82;s:1:"0";i:81;s:1:"0";i:80;s:1:"0";i:79;s:1:"0";i:72;s:1:"2";i:76;s:1:"0";i:75;s:1:"0";i:74;s:1:"0";i:73;s:1:"0";i:61;s:1:"1";i:67;s:1:"0";i:66;s:1:"0";i:65;s:1:"0";i:64;s:1:"0";i:63;s:1:"0";i:62;s:1:"0";i:88;s:1:"8";i:92;s:1:"3";i:121;s:1:"0";i:120;s:1:"0";i:119;s:1:"0";i:118;s:1:"0";i:117;s:1:"0";i:116;s:1:"0";i:115;s:1:"0";i:91;s:1:"2";i:114;s:1:"0";i:113;s:1:"0";i:112;s:1:"0";i:111;s:1:"0";i:90;s:1:"1";i:122;s:1:"0";i:106;s:1:"0";i:105;s:1:"0";i:104;s:1:"0";i:103;s:1:"0";i:102;s:1:"0";i:89;s:1:"0";i:101;s:1:"0";i:100;s:1:"0";i:99;s:1:"0";i:98;s:1:"0";i:97;s:1:"0";i:96;s:1:"0";i:95;s:1:"0";i:94;s:1:"0";i:93;s:1:"0";i:124;s:1:"9";i:128;s:1:"3";i:155;s:1:"0";i:154;s:1:"0";i:153;s:1:"0";i:152;s:1:"0";i:151;s:1:"0";i:150;s:1:"0";i:149;s:1:"0";i:127;s:1:"2";i:145;s:1:"0";i:148;s:1:"0";i:147;s:1:"0";i:146;s:1:"0";i:125;s:1:"0";i:133;s:1:"0";i:132;s:1:"0";i:131;s:1:"0";i:130;s:1:"0";i:129;s:1:"0";i:144;s:1:"0";i:143;s:1:"0";i:142;s:1:"0";i:141;s:1:"0";i:140;s:1:"0";i:126;s:1:"1";i:134;s:1:"0";i:135;s:1:"0";i:139;s:1:"0";i:138;s:1:"0";i:137;s:1:"0";i:136;s:1:"0";}', 'a:0:{}', 'listorder', '127.0.0.1', 1366275264),
(52, 1, 'wangcanliang', 1, '超级管理员', '165', '添加页面', 'a:4:{s:4:"name";s:18:"第一养生首页";s:7:"site_id";s:1:"1";s:7:"pageurl";s:22:"http://www.cndzys.com/";s:7:"baseurl";s:0:"";}', 'a:0:{}', 'add', '127.0.0.1', 1366332663),
(53, 1, 'wangcanliang', 1, '超级管理员', '166', '编辑页面', 'a:4:{s:4:"name";s:18:"第一养生首页";s:7:"site_id";s:1:"1";s:7:"pageurl";s:22:"http://www.cndzys.com/";s:7:"baseurl";s:22:"http://www.cndzys.com/";}', 'a:5:{s:2:"id";s:1:"3";s:7:"site_id";s:1:"1";s:4:"name";s:18:"第一养生首页";s:7:"pageurl";s:22:"http://www.cndzys.com/";s:7:"baseurl";s:0:"";}', 'edit', '127.0.0.1', 1366337058),
(54, 1, 'wangcanliang', 1, '超级管理员', '165', '添加页面', 'a:4:{s:4:"name";s:13:"养生样式1";s:7:"site_id";s:1:"1";s:7:"pageurl";s:56:"http://www.cndzys.com/Home/Tpl/Home/Public/css/top_2.css";s:7:"baseurl";s:47:"http://www.cndzys.com/Home/Tpl/Home/Public/css/";}', 'a:0:{}', 'add', '127.0.0.1', 1366859257),
(55, 1, 'wangcanliang', 1, '超级管理员', '165', '添加页面', 'a:4:{s:4:"name";s:13:"养生样式2";s:7:"site_id";s:1:"1";s:7:"pageurl";s:58:"http://www.cndzys.com/Home/Tpl/Home/Public/css/dz-cj_2.css";s:7:"baseurl";s:47:"http://www.cndzys.com/Home/Tpl/Home/Public/css/";}', 'a:0:{}', 'add', '127.0.0.1', 1366859906),
(56, 1, 'wangcanliang', 1, '超级管理员', '165', '添加页面', 'a:4:{s:4:"name";s:18:"养生大栏目页";s:7:"site_id";s:1:"1";s:7:"pageurl";s:27:"http://www.cndzys.com/zyys/";s:7:"baseurl";s:22:"http://www.cndzys.com/";}', 'a:0:{}', 'add', '127.0.0.1', 1366878026),
(57, 1, 'wangcanliang', 1, '超级管理员', '165', '添加页面', 'a:4:{s:4:"name";s:13:"养生样式3";s:7:"site_id";s:1:"1";s:7:"pageurl";s:60:"http://www.cndzys.com/Home/Tpl/Home/Public/new/dazong-01.css";s:7:"baseurl";s:47:"http://www.cndzys.com/Home/Tpl/Home/Public/new/";}', 'a:0:{}', 'add', '127.0.0.1', 1366885326),
(58, 1, 'wangcanliang', 1, '超级管理员', '28', '删除角色', 'a:10:{s:2:"id";s:3:"191";s:4:"name";s:12:"强制处理";s:8:"parentid";s:3:"158";s:8:"app_code";s:6:"spider";s:10:"controller";s:6:"spider";s:6:"method";s:9:"dealForce";s:8:"extparam";s:0:"";s:9:"listorder";s:1:"0";s:5:"islog";s:1:"0";s:7:"display";s:1:"3";}', 'a:0:{}', 'delete', '127.0.0.1', 1367049045),
(59, 1, 'wangcanliang', 1, '超级管理员', '162', '编辑源站', 'a:2:{s:4:"name";s:24:"龙部落电影资源网";s:7:"siteurl";s:25:"http://www.longbuluo.com/";}', 'a:3:{s:2:"id";s:1:"3";s:4:"name";s:6:"敢玩";s:7:"siteurl";s:21:"http://www.ganwan.cn/";}', 'edit', '127.0.0.1', 1367136009),
(60, 1, 'wangcanliang', 1, '超级管理员', '166', '编辑页面', 'a:4:{s:4:"name";s:18:"大众养生首页";s:7:"site_id";s:1:"1";s:7:"pageurl";s:22:"http://www.cndzys.com/";s:7:"baseurl";s:22:"http://www.cndzys.com/";}', 'a:5:{s:2:"id";s:1:"1";s:7:"site_id";s:1:"0";s:4:"name";s:6:"敢玩";s:7:"pageurl";s:20:"http://www.ganwan.cn";s:7:"baseurl";s:0:"";}', 'edit', '127.0.0.1', 1367136123),
(61, 1, 'wangcanliang', 1, '超级管理员', '166', '编辑页面', 'a:4:{s:4:"name";s:19:"大众养生样式1";s:7:"site_id";s:1:"1";s:7:"pageurl";s:56:"http://www.cndzys.com/Home/Tpl/Home/Public/css/top_2.css";s:7:"baseurl";s:47:"http://www.cndzys.com/Home/Tpl/Home/Public/css/";}', 'a:5:{s:2:"id";s:1:"2";s:7:"site_id";s:1:"0";s:4:"name";s:12:"敢玩样式";s:7:"pageurl";s:45:"http://static.ganwan.cn/index/styles/page.css";s:7:"baseurl";s:37:"http://static.ganwan.cn/index/styles/";}', 'edit', '127.0.0.1', 1367136208),
(62, 1, 'wangcanliang', 1, '超级管理员', '166', '编辑页面', 'a:4:{s:4:"name";s:19:"大众养生样式2";s:7:"site_id";s:1:"1";s:7:"pageurl";s:58:"http://www.cndzys.com/Home/Tpl/Home/Public/css/dz-cj_2.css";s:7:"baseurl";s:47:"http://www.cndzys.com/Home/Tpl/Home/Public/css/";}', 'a:5:{s:2:"id";s:1:"3";s:7:"site_id";s:1:"1";s:4:"name";s:18:"第一养生首页";s:7:"pageurl";s:22:"http://www.cndzys.com/";s:7:"baseurl";s:22:"http://www.cndzys.com/";}', 'edit', '127.0.0.1', 1367136270);

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
(4, '电子商城', 0, 'shop', '', '', '', 7, '0', '1'),
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
(45, '内容相关设置', 4, 'shop', '', '', '', 0, '1', '1'),
(92, '专题', 88, 'movie', '', '', '', 3, '1', '1'),
(88, '最爱电影', 0, 'movie', '', '', '', 8, '0', '1'),
(89, '内容相关设置', 88, 'movie', '', '', '', 0, '1', '1'),
(90, '内容管理', 88, 'movie', '', '', '', 1, '1', '1'),
(91, '发布管理', 88, 'movie', '', '', '', 2, '1', '1'),
(51, '管理栏目', 45, 'shop', 'category', 'listinfo', '', 0, '1', '1'),
(52, '添加栏目', 45, 'shop', 'category', 'add', '', 0, '1', '2'),
(53, '查看栏目', 45, 'shop', 'category', 'view', '', 0, '1', '3'),
(54, '编辑栏目', 45, 'shop', 'category', 'edit', '', 0, '1', '3'),
(55, '删除栏目', 45, 'shop', 'category', 'delete', '', 0, '1', '3'),
(56, '管理推荐位', 45, 'shop', 'position', 'listinfo', '', 0, '1', '1'),
(57, '添加推荐位', 45, 'shop', 'position', 'add', '', 0, '1', '2'),
(58, '查看推荐位', 45, 'shop', 'position', 'view', '', 0, '1', '3'),
(59, '编辑推荐位', 45, 'shop', 'position', 'edit', '', 0, '1', '3'),
(60, '删除推荐位', 45, 'shop', 'position', 'delete', '', 0, '1', '3'),
(61, '内容管理', 4, 'shop', '', '', '', 1, '1', '1'),
(62, '管理内容', 61, 'shop', 'content', 'catquick', '', 0, '1', '1'),
(63, '内容列表', 61, 'shop', 'content', 'listinfo', '', 0, '1', '3'),
(64, '添加内容', 61, 'shop', 'content', 'add', '', 0, '1', '2'),
(65, '查看内容', 61, 'shop', 'content', 'view', '', 0, '1', '3'),
(66, '编辑内容', 61, 'shop', 'content', 'edit', '', 0, '1', '3'),
(67, '删除内容', 61, 'shop', 'content', 'delete', '', 0, '1', '3'),
(68, '管理附件', 123, 'passport', 'attachment', 'listinfo', '', 0, '1', '1'),
(69, '查看附件', 123, 'passport', 'attachment', 'view', '', 0, '1', '3'),
(70, '编辑附件', 123, 'passport', 'attachment', 'edit', '', 0, '1', '3'),
(71, '删除附件', 123, 'passport', 'attachment', 'delete', '', 0, '1', '3'),
(72, '发布管理', 4, 'shop', '', '', '', 2, '1', '1'),
(73, '生成首页', 72, 'shop', 'publish', 'index', '', 0, '1', '1'),
(74, '更新URL页', 72, 'shop', 'publish', 'url', '', 0, '1', '1'),
(75, '生成栏目页', 72, 'shop', 'publish', 'category', '', 0, '1', '1'),
(76, '生成内容页', 72, 'shop', 'publish', 'content', '', 0, '1', '1'),
(77, '专题', 4, 'shop', '', '', '', 3, '1', '1'),
(78, '管理专题', 77, 'shop', 'special', 'listinfo', '', 0, '1', '1'),
(79, '添加专题', 77, 'shop', 'special', 'add', '', 0, '1', '2'),
(80, '查看专题', 77, 'shop', 'special', 'view', '', 0, '1', '3'),
(81, '编辑专题', 77, 'shop', 'special', 'edit', '', 0, '1', '3'),
(82, '删除专题', 77, 'shop', 'special', 'delete', '', 0, '1', '3'),
(83, '生成专题首页', 77, 'shop', 'special', 'htmlIndex', '', 0, '1', '1'),
(84, '更新html', 77, 'shop', 'special', 'htmlSpecial', '', 0, '1', '1'),
(87, '角色权限', 11, 'passport', 'role', 'editPriv', '', 0, '1', '4'),
(93, '管理栏目', 89, 'movie', 'category', 'listinfo', '', 0, '1', '1'),
(94, '添加栏目', 89, 'movie', 'category', 'add', '', 0, '1', '2'),
(95, '查看栏目', 89, 'movie', 'category', 'view', '', 0, '1', '3'),
(96, '编辑栏目', 89, 'movie', 'category', 'edit', '', 0, '1', '3'),
(97, '删除栏目', 89, 'movie', 'category', 'delete', '', 0, '1', '3'),
(98, '管理推荐位', 89, 'movie', 'position', 'listinfo', '', 0, '1', '1'),
(99, '添加推荐位', 89, 'movie', 'position', 'add', '', 0, '1', '2'),
(100, '编辑推荐位', 89, 'movie', 'position', 'edit', '', 0, '1', '3'),
(101, '删除推荐位', 89, 'movie', 'position', 'delete', '', 0, '1', '3'),
(102, '管理内容', 90, 'movie', 'content', 'catquick', '', 0, '1', '1'),
(103, '添加内容', 90, 'movie', 'content', 'add', '', 0, '1', '2'),
(104, '查看内容', 90, 'movie', 'content', 'view', '', 0, '1', '3'),
(105, '编辑内容', 90, 'movie', 'content', 'edit', '', 0, '1', '3'),
(106, '删除内容', 90, 'movie', 'content', 'delete', '', 0, '1', '3'),
(123, '平台附件管理', 5, 'passport', '', '', '', 0, '1', '1'),
(124, '我要养生网', 0, 'yangsh', '', '', '', 9, '0', '1'),
(125, '内容相关设置', 124, 'yangsh', '', '', '', 0, '1', '1'),
(126, '内容管理', 124, 'yangsh', '', '', '', 1, '1', '1'),
(111, '生成首页', 91, 'movie', 'publish', 'index', '', 0, '1', '1'),
(112, '更新URL页', 91, 'movie', 'publish', 'url', '', 0, '1', '1'),
(113, '生成栏目页', 91, 'movie', 'publish', 'category', '', 0, '1', '1'),
(114, '生成内容页', 91, 'movie', 'publish', 'content', '', 0, '1', '1'),
(115, '管理专题', 92, 'movie', 'special', 'listinfo', '', 0, '1', '1'),
(116, '添加专题', 92, 'movie', 'special', 'add', '', 0, '1', '2'),
(117, '查看专题', 92, 'movie', 'special', 'view', '', 0, '1', '3'),
(118, '编辑专题', 92, 'movie', 'special', 'edit', '', 0, '1', '3'),
(119, '删除专题', 92, 'movie', 'special', 'delete', '', 0, '1', '3'),
(120, '生成专题首页', 92, 'movie', 'special', 'htmlIndex', '', 0, '1', '1'),
(121, '更新html', 92, 'movie', 'special', 'htmlSpecial', '', 0, '1', '1'),
(122, '内容列表', 90, 'movie', 'content', 'listinfo', '', 0, '1', '3'),
(127, '发布管理', 124, 'yangsh', '', '', '', 2, '1', '1'),
(128, '专题', 124, 'yangsh', '', '', '', 3, '1', '1'),
(129, '添加栏目', 125, 'yangsh', 'category', 'add', '', 0, '1', '2'),
(130, '删除栏目', 125, 'yangsh', 'category', 'delete', '', 0, '1', '3'),
(131, '编辑栏目', 125, 'yangsh', 'category', 'edit', '', 0, '1', '3'),
(132, '管理栏目', 125, 'yangsh', 'category', 'listinfo', '', 0, '1', '1'),
(133, '查看栏目', 125, 'yangsh', 'category', 'view', '', 0, '1', '3'),
(134, '添加内容', 126, 'yangsh', 'content', 'add', '', 0, '1', '2'),
(135, '管理内容', 126, 'yangsh', 'content', 'catquick', '', 0, '1', '1'),
(136, '删除内容', 126, 'yangsh', 'content', 'delete', '', 0, '1', '3'),
(137, '编辑内容', 126, 'yangsh', 'content', 'edit', '', 0, '1', '3'),
(138, '内容列表', 126, 'yangsh', 'content', 'listinfo', '', 0, '1', '3'),
(139, '查看内容', 126, 'yangsh', 'content', 'view', '', 0, '1', '3'),
(140, '添加推荐位', 125, 'yangsh', 'position', 'add', '', 0, '1', '2'),
(141, '删除推荐位', 125, 'yangsh', 'position', 'delete', '', 0, '1', '3'),
(142, '编辑推荐位', 125, 'yangsh', 'position', 'edit', '', 0, '1', '3'),
(143, '管理推荐位', 125, 'yangsh', 'position', 'listinfo', '', 0, '1', '1'),
(144, '查看推荐位', 125, 'yangsh', 'position', 'view', '', 0, '1', '3'),
(145, '生成栏目页', 127, 'yangsh', 'publish', 'category', '', 0, '1', '1'),
(146, '生成内容页', 127, 'yangsh', 'publish', 'content', '', 0, '1', '1'),
(147, '生成首页', 127, 'yangsh', 'publish', 'index', '', 0, '1', '1'),
(148, '更新URL页', 127, 'yangsh', 'publish', 'url', '', 0, '1', '1'),
(149, '添加专题', 128, 'yangsh', 'special', 'add', '', 0, '1', '2'),
(150, '删除专题', 128, 'yangsh', 'special', 'delete', '', 0, '1', '3'),
(151, '编辑专题', 128, 'yangsh', 'special', 'edit', '', 0, '1', '3'),
(152, '生成专题首页', 128, 'yangsh', 'special', 'htmlIndex', '', 0, '1', '1'),
(153, '更新html', 128, 'yangsh', 'special', 'htmlSpecial', '', 0, '1', '1'),
(154, '管理专题', 128, 'yangsh', 'special', 'listinfo', '', 0, '1', '1'),
(155, '查看专题', 128, 'yangsh', 'special', 'view', '', 0, '1', '3'),
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
(193, '采集资源', 157, 'spider', 'sitePage', 'downFile', '', 0, '1', '4'),
(194, '第三方平台管理', 0, 'third', '', '', '', 3, '1', '1'),
(195, '个人空间', 0, 'myhome', '', '', '', 4, '1', '1');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `sp_member`
--

INSERT INTO `sp_member` (`userid`, `username`, `ucserver_id`, `password`, `pwd_strong`, `encrypt`, `avatar`, `email`, `truename`, `gender`, `msn`, `telephone`, `get_username`, `address`, `qq`, `birthday`, `postcode`, `mobile`, `idcard`, `regip`, `regdate`, `loginnum`, `lastloginip`, `lastlogintime`, `active`, `active_7`, `active_over`, `active_day`, `active_7_day`, `active_over_day`) VALUES
(1, 'test0001', 1, '5683899d9024e7cc8e5a0ed9815b6bb0', '1', 'pMh8EL', 0, 'aaaa@soshu.com', '0', '2', '', '', '', '', '', 0, '', '', '0', '127.0.0.1', 1361786716, 1, '127.0.0.1', 1361790608, '1', '1', '1', 0, 0, 0),
(2, 'test0002', 2, 'abd95aa7029d99d19c2d81e99cbbc8fe', '1', 'xCY44G', 0, 'aaaaa@sohu.com', '0', '2', '', '', '', '', '', 0, '', '', '0', '127.0.0.1', 1361789274, 0, '0', 0, '1', '1', '1', 0, 0, 0),
(3, 'test0003', 3, '76a37a9b6af4d918b60712fbe338f85f', '1', 'WiLIPG', 0, 'test0003@sohu.com', '0', '2', '', '', '', '', '', 0, '', '', '0', '127.0.0.1', 1361789942, 1, '127.0.0.1', 1361791268, '1', '1', '1', 0, 0, 0),
(4, 'test0004', 4, 'ca4e5744dc4de393eed7f2a2bd881dfb', '1', 'uTjUmv', 0, 'test0004@ganwan.com', '0', '2', '', '', '', '', '', 0, '', '', '0', '127.0.0.1', 1361790081, 0, '0', 0, '1', '1', '1', 0, 0, 0);

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
