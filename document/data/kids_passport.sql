-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013 �?09 �?06 �?12:04
-- 服务器版本: 5.6.11
-- PHP 版本: 5.5.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `kids_passport`
--

-- --------------------------------------------------------

--
-- 表的结构 `kp_admin_manager`
--

CREATE TABLE IF NOT EXISTS `kp_admin_manager` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `kp_admin_manager`
--

INSERT INTO `kp_admin_manager` (`id`, `username`, `truename`, `password`, `roleid`, `email`, `encrypt`, `createtime`, `loginnum`, `lastip`, `lasttime`, `islock`, `handpay_key`, `handpay_en`) VALUES
(1, 'wangcanliang', '', '04ffd28d0a85e2050db77cbeeaa7d8ac', 1, '0', 'l9rIUD', 1361149565, 153, '127.0.0.1', 1378429414, '1', '2f5a45a93f1bb1824dbb649e85e3753d', 'tE4RTF');

-- --------------------------------------------------------

--
-- 表的结构 `kp_admin_managerlog`
--

CREATE TABLE IF NOT EXISTS `kp_admin_managerlog` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=88 ;

--
-- 转存表中的数据 `kp_admin_managerlog`
--

INSERT INTO `kp_admin_managerlog` (`id`, `userid`, `username`, `roleid`, `role_name`, `menu_id`, `menu_name`, `data`, `data_old`, `logtype`, `ip`, `inputtime`) VALUES
(1, 1, 'wangcanliang', 1, '超级管理员', '29', '添加菜单', 'a:8:{s:4:"name";s:12:"支付模块";s:8:"parentid";s:1:"0";s:8:"app_code";s:3:"pay";s:10:"controller";s:0:"";s:6:"method";s:0:"";s:8:"extparam";s:0:"";s:9:"listorder";b:0;s:7:"display";s:1:"1";}', 'a:0:{}', 'add', '127.0.0.1', 1377148500),
(2, 1, 'wangcanliang', 1, '超级管理员', '27', '编辑', 'a:82:{i:196;s:1:"8";i:1;s:1:"0";i:6;s:1:"0";i:10;s:1:"0";i:9;s:1:"0";i:8;s:1:"0";i:7;s:1:"0";i:2;s:1:"1";i:11;s:1:"0";i:87;s:1:"0";i:23;s:1:"0";i:17;s:1:"0";i:21;s:1:"0";i:20;s:1:"0";i:19;s:1:"0";i:18;s:1:"0";i:16;s:1:"0";i:15;s:1:"0";i:14;s:1:"0";i:13;s:1:"0";i:22;s:1:"0";i:24;s:1:"0";i:25;s:1:"0";i:26;s:1:"0";i:27;s:1:"0";i:28;s:1:"0";i:29;s:1:"0";i:12;s:1:"1";i:31;s:1:"0";i:30;s:1:"0";i:3;s:1:"2";i:32;s:1:"0";i:35;s:1:"0";i:36;s:1:"0";i:33;s:1:"1";i:37;s:1:"0";i:38;s:1:"0";i:39;s:1:"0";i:34;s:1:"2";i:44;s:1:"0";i:42;s:1:"0";i:41;s:1:"0";i:40;s:1:"0";i:43;s:1:"0";i:5;s:1:"5";i:123;s:1:"0";i:71;s:1:"0";i:70;s:1:"0";i:69;s:1:"0";i:68;s:1:"0";i:124;s:1:"9";i:125;s:1:"0";i:133;s:1:"0";i:132;s:1:"0";i:131;s:1:"0";i:130;s:1:"0";i:129;s:1:"0";i:144;s:1:"0";i:143;s:1:"0";i:142;s:1:"0";i:141;s:1:"0";i:140;s:1:"0";i:126;s:1:"1";i:135;s:1:"0";i:134;s:1:"0";i:136;s:1:"0";i:137;s:1:"0";i:139;s:1:"0";i:138;s:1:"0";i:127;s:1:"2";i:146;s:1:"0";i:148;s:1:"0";i:147;s:1:"0";i:145;s:1:"0";i:128;s:1:"3";i:155;s:1:"0";i:154;s:1:"0";i:153;s:1:"0";i:152;s:1:"0";i:151;s:1:"0";i:150;s:1:"0";i:149;s:1:"0";}', 'a:0:{}', 'listorder', '127.0.0.1', 1377148531),
(3, 1, 'wangcanliang', 1, '超级管理员', '27', '编辑', 'a:8:{s:4:"name";s:12:"网页游戏";s:8:"parentid";s:3:"124";s:8:"app_code";s:7:"webgame";s:10:"controller";s:0:"";s:6:"method";s:0:"";s:8:"extparam";s:0:"";s:9:"listorder";b:0;s:7:"display";s:1:"1";}', 'a:10:{s:2:"id";s:3:"124";s:4:"name";s:12:"网页游戏";s:8:"parentid";s:1:"0";s:8:"app_code";s:7:"webgame";s:10:"controller";s:0:"";s:6:"method";s:0:"";s:8:"extparam";s:0:"";s:9:"listorder";s:1:"9";s:5:"islog";s:1:"0";s:7:"display";s:1:"1";}', 'edit', '127.0.0.1', 1377498577),
(4, 1, 'wangcanliang', 1, '超级管理员', '27', '编辑', 'a:8:{s:4:"name";s:12:"游戏管理";s:8:"parentid";s:3:"124";s:8:"app_code";s:7:"webgame";s:10:"controller";s:0:"";s:6:"method";s:0:"";s:8:"extparam";s:0:"";s:9:"listorder";b:0;s:7:"display";s:1:"1";}', 'a:10:{s:2:"id";s:3:"212";s:4:"name";s:12:"游戏管理";s:8:"parentid";s:1:"0";s:8:"app_code";s:7:"webgame";s:10:"controller";s:0:"";s:6:"method";s:0:"";s:8:"extparam";s:0:"";s:9:"listorder";s:1:"0";s:5:"islog";s:1:"0";s:7:"display";s:1:"1";}', 'edit', '127.0.0.1', 1377499591),
(5, 1, 'wangcanliang', 1, '超级管理员', '27', '编辑', 'a:111:{i:1;s:1:"0";i:6;s:1:"0";i:7;s:1:"0";i:8;s:1:"0";i:9;s:1:"0";i:10;s:1:"0";i:124;s:1:"7";i:125;s:1:"0";i:129;s:1:"0";i:130;s:1:"0";i:131;s:1:"0";i:132;s:1:"0";i:133;s:1:"0";i:140;s:1:"0";i:141;s:1:"0";i:142;s:1:"0";i:143;s:1:"0";i:144;s:1:"0";i:212;s:1:"0";i:225;s:1:"0";i:224;s:1:"0";i:223;s:1:"0";i:222;s:1:"0";i:221;s:1:"0";i:220;s:1:"0";i:219;s:1:"0";i:218;s:1:"0";i:217;s:1:"0";i:216;s:1:"0";i:215;s:1:"0";i:214;s:1:"0";i:213;s:1:"0";i:126;s:1:"1";i:134;s:1:"0";i:135;s:1:"0";i:136;s:1:"0";i:137;s:1:"0";i:138;s:1:"0";i:139;s:1:"0";i:127;s:1:"2";i:145;s:1:"0";i:146;s:1:"0";i:147;s:1:"0";i:148;s:1:"0";i:128;s:1:"3";i:149;s:1:"0";i:150;s:1:"0";i:151;s:1:"0";i:152;s:1:"0";i:153;s:1:"0";i:154;s:1:"0";i:155;s:1:"0";i:2;s:1:"1";i:11;s:1:"0";i:13;s:1:"0";i:14;s:1:"0";i:15;s:1:"0";i:16;s:1:"0";i:17;s:1:"0";i:18;s:1:"0";i:19;s:1:"0";i:20;s:1:"0";i:21;s:1:"0";i:22;s:1:"0";i:23;s:1:"0";i:24;s:1:"0";i:25;s:1:"0";i:26;s:1:"0";i:27;s:1:"0";i:28;s:1:"0";i:29;s:1:"0";i:87;s:1:"0";i:12;s:1:"1";i:30;s:1:"0";i:31;s:1:"0";i:3;s:1:"2";i:32;s:1:"0";i:35;s:1:"0";i:36;s:1:"0";i:33;s:1:"1";i:37;s:1:"0";i:38;s:1:"0";i:39;s:1:"0";i:34;s:1:"2";i:40;s:1:"0";i:41;s:1:"0";i:42;s:1:"0";i:43;s:1:"0";i:44;s:1:"0";i:5;s:1:"5";i:123;s:1:"0";i:68;s:1:"0";i:69;s:1:"0";i:70;s:1:"0";i:71;s:1:"0";i:196;s:1:"8";i:198;s:1:"0";i:211;s:1:"0";i:210;s:1:"0";i:209;s:1:"0";i:208;s:1:"0";i:207;s:1:"0";i:197;s:1:"0";i:206;s:1:"0";i:205;s:1:"0";i:204;s:1:"0";i:203;s:1:"0";i:202;s:1:"0";i:201;s:1:"0";i:200;s:1:"0";i:199;s:1:"0";}', 'a:0:{}', 'listorder', '127.0.0.1', 1377499612),
(6, 1, 'wangcanliang', 1, '超级管理员', '27', '编辑', 'a:111:{i:1;s:1:"0";i:6;s:1:"0";i:7;s:1:"0";i:8;s:1:"0";i:9;s:1:"0";i:10;s:1:"0";i:2;s:1:"1";i:11;s:1:"0";i:13;s:1:"0";i:14;s:1:"0";i:15;s:1:"0";i:16;s:1:"0";i:17;s:1:"0";i:18;s:1:"0";i:19;s:1:"0";i:20;s:1:"0";i:21;s:1:"0";i:22;s:1:"0";i:23;s:1:"0";i:24;s:1:"0";i:25;s:1:"0";i:26;s:1:"0";i:27;s:1:"0";i:28;s:1:"0";i:29;s:1:"0";i:87;s:1:"0";i:12;s:1:"1";i:30;s:1:"0";i:31;s:1:"0";i:3;s:1:"2";i:32;s:1:"0";i:35;s:1:"0";i:36;s:1:"0";i:33;s:1:"1";i:37;s:1:"0";i:38;s:1:"0";i:39;s:1:"0";i:34;s:1:"2";i:40;s:1:"0";i:41;s:1:"0";i:42;s:1:"0";i:43;s:1:"0";i:44;s:1:"0";i:5;s:1:"5";i:123;s:1:"0";i:68;s:1:"0";i:69;s:1:"0";i:70;s:1:"0";i:71;s:1:"0";i:124;s:1:"7";i:125;s:1:"1";i:129;s:1:"0";i:130;s:1:"0";i:131;s:1:"0";i:132;s:1:"0";i:133;s:1:"0";i:140;s:1:"0";i:141;s:1:"0";i:142;s:1:"0";i:143;s:1:"0";i:144;s:1:"0";i:212;s:1:"0";i:225;s:1:"0";i:224;s:1:"0";i:223;s:1:"0";i:222;s:1:"0";i:221;s:1:"0";i:220;s:1:"0";i:219;s:1:"0";i:218;s:1:"0";i:217;s:1:"0";i:216;s:1:"0";i:215;s:1:"0";i:214;s:1:"0";i:213;s:1:"0";i:126;s:1:"2";i:134;s:1:"0";i:135;s:1:"0";i:136;s:1:"0";i:137;s:1:"0";i:138;s:1:"0";i:139;s:1:"0";i:127;s:1:"3";i:145;s:1:"0";i:146;s:1:"0";i:147;s:1:"0";i:148;s:1:"0";i:128;s:1:"4";i:149;s:1:"0";i:150;s:1:"0";i:151;s:1:"0";i:152;s:1:"0";i:153;s:1:"0";i:154;s:1:"0";i:155;s:1:"0";i:196;s:1:"8";i:198;s:1:"0";i:211;s:1:"0";i:210;s:1:"0";i:209;s:1:"0";i:208;s:1:"0";i:207;s:1:"0";i:197;s:1:"0";i:206;s:1:"0";i:205;s:1:"0";i:204;s:1:"0";i:203;s:1:"0";i:202;s:1:"0";i:201;s:1:"0";i:200;s:1:"0";i:199;s:1:"0";}', 'a:0:{}', 'listorder', '127.0.0.1', 1377499639),
(7, 1, 'wangcanliang', 1, '超级管理员', '27', '编辑', 'a:111:{i:1;s:1:"0";i:6;s:1:"0";i:7;s:1:"0";i:8;s:1:"0";i:9;s:1:"0";i:10;s:1:"0";i:2;s:1:"1";i:11;s:1:"0";i:13;s:1:"0";i:14;s:1:"0";i:15;s:1:"0";i:16;s:1:"0";i:17;s:1:"0";i:18;s:1:"0";i:19;s:1:"0";i:20;s:1:"0";i:21;s:1:"0";i:22;s:1:"0";i:23;s:1:"0";i:24;s:1:"0";i:25;s:1:"0";i:26;s:1:"0";i:27;s:1:"0";i:28;s:1:"0";i:29;s:1:"0";i:87;s:1:"0";i:12;s:1:"1";i:30;s:1:"0";i:31;s:1:"0";i:3;s:1:"2";i:32;s:1:"0";i:35;s:1:"0";i:36;s:1:"0";i:33;s:1:"1";i:37;s:1:"0";i:38;s:1:"0";i:39;s:1:"0";i:34;s:1:"2";i:40;s:1:"0";i:41;s:1:"0";i:42;s:1:"0";i:43;s:1:"0";i:44;s:1:"0";i:5;s:1:"5";i:123;s:1:"0";i:68;s:1:"0";i:69;s:1:"0";i:70;s:1:"0";i:71;s:1:"0";i:124;s:1:"7";i:212;s:1:"0";i:225;s:1:"5";i:224;s:1:"0";i:223;s:1:"0";i:222;s:1:"0";i:221;s:1:"0";i:220;s:1:"0";i:219;s:1:"0";i:218;s:1:"2";i:217;s:1:"0";i:216;s:1:"0";i:215;s:1:"0";i:214;s:1:"0";i:213;s:1:"0";i:125;s:1:"1";i:129;s:1:"0";i:130;s:1:"0";i:131;s:1:"0";i:132;s:1:"0";i:133;s:1:"0";i:140;s:1:"0";i:141;s:1:"0";i:142;s:1:"0";i:143;s:1:"0";i:144;s:1:"0";i:126;s:1:"2";i:134;s:1:"0";i:135;s:1:"0";i:136;s:1:"0";i:137;s:1:"0";i:138;s:1:"0";i:139;s:1:"0";i:127;s:1:"3";i:145;s:1:"0";i:146;s:1:"0";i:147;s:1:"0";i:148;s:1:"0";i:128;s:1:"4";i:149;s:1:"0";i:150;s:1:"0";i:151;s:1:"0";i:152;s:1:"0";i:153;s:1:"0";i:154;s:1:"0";i:155;s:1:"0";i:196;s:1:"8";i:198;s:1:"0";i:211;s:1:"0";i:210;s:1:"0";i:209;s:1:"0";i:208;s:1:"0";i:207;s:1:"0";i:197;s:1:"0";i:206;s:1:"0";i:205;s:1:"0";i:204;s:1:"0";i:203;s:1:"0";i:202;s:1:"0";i:201;s:1:"0";i:200;s:1:"0";i:199;s:1:"0";}', 'a:0:{}', 'listorder', '127.0.0.1', 1377565435),
(8, 1, 'wangcanliang', 1, '超级管理员', '27', '编辑', 'a:111:{i:1;s:1:"0";i:6;s:1:"0";i:7;s:1:"0";i:8;s:1:"0";i:9;s:1:"0";i:10;s:1:"0";i:2;s:1:"1";i:11;s:1:"0";i:13;s:1:"0";i:14;s:1:"0";i:15;s:1:"0";i:16;s:1:"0";i:17;s:1:"0";i:18;s:1:"0";i:19;s:1:"0";i:20;s:1:"0";i:21;s:1:"0";i:22;s:1:"0";i:23;s:1:"0";i:24;s:1:"0";i:25;s:1:"0";i:26;s:1:"0";i:27;s:1:"0";i:28;s:1:"0";i:29;s:1:"0";i:87;s:1:"0";i:12;s:1:"1";i:30;s:1:"0";i:31;s:1:"0";i:3;s:1:"2";i:32;s:1:"0";i:35;s:1:"0";i:36;s:1:"0";i:33;s:1:"1";i:37;s:1:"0";i:38;s:1:"0";i:39;s:1:"0";i:34;s:1:"2";i:40;s:1:"0";i:41;s:1:"0";i:42;s:1:"0";i:43;s:1:"0";i:44;s:1:"0";i:5;s:1:"5";i:123;s:1:"0";i:68;s:1:"0";i:69;s:1:"0";i:70;s:1:"0";i:71;s:1:"0";i:124;s:1:"7";i:212;s:1:"5";i:224;s:1:"0";i:223;s:1:"0";i:222;s:1:"0";i:221;s:1:"0";i:220;s:1:"0";i:219;s:1:"0";i:217;s:1:"0";i:216;s:1:"0";i:215;s:1:"0";i:214;s:1:"0";i:213;s:1:"0";i:218;s:1:"2";i:225;s:1:"0";i:125;s:1:"1";i:129;s:1:"0";i:130;s:1:"0";i:131;s:1:"0";i:132;s:1:"0";i:133;s:1:"0";i:140;s:1:"0";i:141;s:1:"0";i:142;s:1:"0";i:143;s:1:"0";i:144;s:1:"0";i:126;s:1:"2";i:134;s:1:"0";i:135;s:1:"0";i:136;s:1:"0";i:137;s:1:"0";i:138;s:1:"0";i:139;s:1:"0";i:127;s:1:"3";i:145;s:1:"0";i:146;s:1:"0";i:147;s:1:"0";i:148;s:1:"0";i:128;s:1:"4";i:149;s:1:"0";i:150;s:1:"0";i:151;s:1:"0";i:152;s:1:"0";i:153;s:1:"0";i:154;s:1:"0";i:155;s:1:"0";i:196;s:1:"8";i:198;s:1:"0";i:211;s:1:"0";i:210;s:1:"0";i:209;s:1:"0";i:208;s:1:"0";i:207;s:1:"0";i:197;s:1:"0";i:206;s:1:"0";i:205;s:1:"0";i:204;s:1:"0";i:203;s:1:"0";i:202;s:1:"0";i:201;s:1:"0";i:200;s:1:"0";i:199;s:1:"0";}', 'a:0:{}', 'listorder', '127.0.0.1', 1377565494),
(9, 1, 'wangcanliang', 1, '超级管理员', '27', '编辑', 'a:111:{i:1;s:1:"0";i:6;s:1:"0";i:7;s:1:"0";i:8;s:1:"0";i:9;s:1:"0";i:10;s:1:"0";i:2;s:1:"1";i:11;s:1:"0";i:13;s:1:"0";i:14;s:1:"0";i:15;s:1:"0";i:16;s:1:"0";i:17;s:1:"0";i:18;s:1:"0";i:19;s:1:"0";i:20;s:1:"0";i:21;s:1:"0";i:22;s:1:"0";i:23;s:1:"0";i:24;s:1:"0";i:25;s:1:"0";i:26;s:1:"0";i:27;s:1:"0";i:28;s:1:"0";i:29;s:1:"0";i:87;s:1:"0";i:12;s:1:"1";i:30;s:1:"0";i:31;s:1:"0";i:3;s:1:"2";i:32;s:1:"0";i:35;s:1:"0";i:36;s:1:"0";i:33;s:1:"1";i:37;s:1:"0";i:38;s:1:"0";i:39;s:1:"0";i:34;s:1:"2";i:40;s:1:"0";i:41;s:1:"0";i:42;s:1:"0";i:43;s:1:"0";i:44;s:1:"0";i:5;s:1:"5";i:123;s:1:"0";i:68;s:1:"0";i:69;s:1:"0";i:70;s:1:"0";i:71;s:1:"0";i:124;s:1:"7";i:125;s:1:"2";i:129;s:1:"0";i:130;s:1:"0";i:131;s:1:"0";i:132;s:1:"0";i:133;s:1:"0";i:140;s:1:"0";i:141;s:1:"0";i:142;s:1:"0";i:143;s:1:"0";i:144;s:1:"0";i:126;s:1:"3";i:134;s:1:"0";i:135;s:1:"0";i:136;s:1:"0";i:137;s:1:"0";i:138;s:1:"0";i:139;s:1:"0";i:127;s:1:"4";i:145;s:1:"0";i:146;s:1:"0";i:147;s:1:"0";i:148;s:1:"0";i:128;s:1:"5";i:149;s:1:"0";i:150;s:1:"0";i:151;s:1:"0";i:152;s:1:"0";i:153;s:1:"0";i:154;s:1:"0";i:155;s:1:"0";i:212;s:1:"1";i:225;s:1:"0";i:224;s:1:"0";i:223;s:1:"0";i:222;s:1:"0";i:221;s:1:"0";i:220;s:1:"0";i:219;s:1:"0";i:217;s:1:"0";i:216;s:1:"0";i:215;s:1:"0";i:214;s:1:"0";i:213;s:1:"0";i:218;s:1:"2";i:196;s:1:"8";i:198;s:1:"0";i:211;s:1:"0";i:210;s:1:"0";i:209;s:1:"0";i:208;s:1:"0";i:207;s:1:"0";i:197;s:1:"0";i:206;s:1:"0";i:205;s:1:"0";i:204;s:1:"0";i:203;s:1:"0";i:202;s:1:"0";i:201;s:1:"0";i:200;s:1:"0";i:199;s:1:"0";}', 'a:0:{}', 'listorder', '127.0.0.1', 1377565866),
(10, 1, 'wangcanliang', 1, '超级管理员', '27', '编辑', 'a:111:{i:1;s:1:"0";i:6;s:1:"0";i:7;s:1:"0";i:8;s:1:"0";i:9;s:1:"0";i:10;s:1:"0";i:2;s:1:"1";i:11;s:1:"0";i:13;s:1:"0";i:14;s:1:"0";i:15;s:1:"0";i:16;s:1:"0";i:17;s:1:"0";i:18;s:1:"0";i:19;s:1:"0";i:20;s:1:"0";i:21;s:1:"0";i:22;s:1:"0";i:23;s:1:"0";i:24;s:1:"0";i:25;s:1:"0";i:26;s:1:"0";i:27;s:1:"0";i:28;s:1:"0";i:29;s:1:"0";i:87;s:1:"0";i:12;s:1:"1";i:30;s:1:"0";i:31;s:1:"0";i:3;s:1:"2";i:32;s:1:"0";i:35;s:1:"0";i:36;s:1:"0";i:33;s:1:"1";i:37;s:1:"0";i:38;s:1:"0";i:39;s:1:"0";i:34;s:1:"2";i:40;s:1:"0";i:41;s:1:"0";i:42;s:1:"0";i:43;s:1:"0";i:44;s:1:"0";i:5;s:1:"5";i:123;s:1:"0";i:68;s:1:"0";i:69;s:1:"0";i:70;s:1:"0";i:71;s:1:"0";i:124;s:1:"7";i:212;s:1:"1";i:225;s:1:"0";i:224;s:1:"4";i:223;s:1:"0";i:222;s:1:"0";i:221;s:1:"0";i:220;s:1:"0";i:219;s:1:"0";i:217;s:1:"0";i:216;s:1:"0";i:215;s:1:"0";i:214;s:1:"0";i:213;s:1:"1";i:218;s:1:"2";i:125;s:1:"2";i:129;s:1:"0";i:130;s:1:"0";i:131;s:1:"0";i:132;s:1:"0";i:133;s:1:"0";i:140;s:1:"0";i:141;s:1:"0";i:142;s:1:"0";i:143;s:1:"0";i:144;s:1:"0";i:126;s:1:"3";i:134;s:1:"0";i:135;s:1:"0";i:136;s:1:"0";i:137;s:1:"0";i:138;s:1:"0";i:139;s:1:"0";i:127;s:1:"4";i:145;s:1:"0";i:146;s:1:"0";i:147;s:1:"0";i:148;s:1:"0";i:128;s:1:"5";i:149;s:1:"0";i:150;s:1:"0";i:151;s:1:"0";i:152;s:1:"0";i:153;s:1:"0";i:154;s:1:"0";i:155;s:1:"0";i:196;s:1:"8";i:198;s:1:"0";i:211;s:1:"0";i:210;s:1:"0";i:209;s:1:"0";i:208;s:1:"0";i:207;s:1:"0";i:197;s:1:"0";i:206;s:1:"0";i:205;s:1:"0";i:204;s:1:"0";i:203;s:1:"0";i:202;s:1:"0";i:201;s:1:"0";i:200;s:1:"0";i:199;s:1:"0";}', 'a:0:{}', 'listorder', '127.0.0.1', 1377565910),
(11, 1, 'wangcanliang', 1, '超级管理员', '27', '编辑', 'a:8:{s:4:"name";s:18:"帐号充值统计";s:8:"parentid";s:3:"197";s:8:"app_code";s:3:"pay";s:10:"controller";s:6:"member";s:6:"method";s:8:"listinfo";s:8:"extparam";s:0:"";s:9:"listorder";b:0;s:7:"display";s:1:"1";}', 'a:10:{s:2:"id";s:3:"206";s:4:"name";s:18:"帐号充值统计";s:8:"parentid";s:3:"197";s:8:"app_code";s:3:"pay";s:10:"controller";s:9:"payMember";s:6:"method";s:8:"listinfo";s:8:"extparam";s:0:"";s:9:"listorder";s:1:"0";s:5:"islog";s:1:"1";s:7:"display";s:1:"1";}', 'edit', '127.0.0.1', 1377586118),
(12, 1, 'wangcanliang', 1, '超级管理员', '27', '编辑', 'a:8:{s:4:"name";s:12:"充值记录";s:8:"parentid";s:3:"198";s:8:"app_code";s:3:"pay";s:10:"controller";s:7:"account";s:6:"method";s:8:"listinfo";s:8:"extparam";s:0:"";s:9:"listorder";b:0;s:7:"display";s:1:"1";}', 'a:10:{s:2:"id";s:3:"207";s:4:"name";s:12:"充值记录";s:8:"parentid";s:3:"198";s:8:"app_code";s:3:"pay";s:10:"controller";s:10:"statements";s:6:"method";s:8:"listinfo";s:8:"extparam";s:0:"";s:9:"listorder";s:1:"0";s:5:"islog";s:1:"1";s:7:"display";s:1:"1";}', 'edit', '127.0.0.1', 1377586554),
(13, 1, 'wangcanliang', 1, '超级管理员', '27', '编辑', 'a:8:{s:4:"name";s:12:"支付记录";s:8:"parentid";s:3:"198";s:8:"app_code";s:3:"pay";s:10:"controller";s:3:"pay";s:6:"method";s:8:"listinfo";s:8:"extparam";s:0:"";s:9:"listorder";b:0;s:7:"display";s:1:"1";}', 'a:10:{s:2:"id";s:3:"208";s:4:"name";s:12:"支付记录";s:8:"parentid";s:3:"198";s:8:"app_code";s:3:"pay";s:10:"controller";s:10:"statements";s:6:"method";s:3:"pay";s:8:"extparam";s:0:"";s:9:"listorder";s:1:"0";s:5:"islog";s:1:"1";s:7:"display";s:1:"1";}', 'edit', '127.0.0.1', 1377586571),
(14, 1, 'wangcanliang', 1, '超级管理员', '27', '编辑', 'a:8:{s:4:"name";s:12:"异常充值";s:8:"parentid";s:3:"198";s:8:"app_code";s:3:"pay";s:10:"controller";s:14:"accountUnusual";s:6:"method";s:8:"listinfo";s:8:"extparam";s:0:"";s:9:"listorder";b:0;s:7:"display";s:1:"1";}', 'a:10:{s:2:"id";s:3:"209";s:4:"name";s:12:"异常充值";s:8:"parentid";s:3:"198";s:8:"app_code";s:3:"pay";s:10:"controller";s:10:"statements";s:6:"method";s:11:"abnormalpay";s:8:"extparam";s:0:"";s:9:"listorder";s:1:"0";s:5:"islog";s:1:"1";s:7:"display";s:1:"1";}', 'edit', '127.0.0.1', 1377586608),
(15, 1, 'wangcanliang', 1, '超级管理员', '27', '编辑', 'a:8:{s:4:"name";s:12:"异常充值";s:8:"parentid";s:3:"198";s:8:"app_code";s:3:"pay";s:10:"controller";s:15:"account_unusual";s:6:"method";s:8:"listinfo";s:8:"extparam";s:0:"";s:9:"listorder";b:0;s:7:"display";s:1:"1";}', 'a:10:{s:2:"id";s:3:"209";s:4:"name";s:12:"异常充值";s:8:"parentid";s:3:"198";s:8:"app_code";s:3:"pay";s:10:"controller";s:14:"accountUnusual";s:6:"method";s:8:"listinfo";s:8:"extparam";s:0:"";s:9:"listorder";s:1:"0";s:5:"islog";s:1:"1";s:7:"display";s:1:"1";}', 'edit', '127.0.0.1', 1377587822),
(16, 1, 'wangcanliang', 1, '超级管理员', '28', '删除角色', 'a:10:{s:2:"id";s:3:"149";s:4:"name";s:12:"添加专题";s:8:"parentid";s:3:"128";s:8:"app_code";s:7:"webgame";s:10:"controller";s:7:"special";s:6:"method";s:3:"add";s:8:"extparam";s:0:"";s:9:"listorder";s:1:"0";s:5:"islog";s:1:"1";s:7:"display";s:1:"2";}', 'a:0:{}', 'delete', '127.0.0.1', 1377593066),
(17, 1, 'wangcanliang', 1, '超级管理员', '28', '删除角色', 'a:10:{s:2:"id";s:3:"150";s:4:"name";s:12:"删除专题";s:8:"parentid";s:3:"128";s:8:"app_code";s:7:"webgame";s:10:"controller";s:7:"special";s:6:"method";s:6:"delete";s:8:"extparam";s:0:"";s:9:"listorder";s:1:"0";s:5:"islog";s:1:"1";s:7:"display";s:1:"3";}', 'a:0:{}', 'delete', '127.0.0.1', 1377593079),
(18, 1, 'wangcanliang', 1, '超级管理员', '28', '删除角色', 'a:10:{s:2:"id";s:3:"151";s:4:"name";s:12:"编辑专题";s:8:"parentid";s:3:"128";s:8:"app_code";s:7:"webgame";s:10:"controller";s:7:"special";s:6:"method";s:4:"edit";s:8:"extparam";s:0:"";s:9:"listorder";s:1:"0";s:5:"islog";s:1:"1";s:7:"display";s:1:"3";}', 'a:0:{}', 'delete', '127.0.0.1', 1377593093),
(19, 1, 'wangcanliang', 1, '超级管理员', '28', '删除角色', 'a:10:{s:2:"id";s:3:"152";s:4:"name";s:18:"生成专题首页";s:8:"parentid";s:3:"128";s:8:"app_code";s:7:"webgame";s:10:"controller";s:7:"special";s:6:"method";s:9:"htmlIndex";s:8:"extparam";s:0:"";s:9:"listorder";s:1:"0";s:5:"islog";s:1:"1";s:7:"display";s:1:"1";}', 'a:0:{}', 'delete', '127.0.0.1', 1377593103),
(20, 1, 'wangcanliang', 1, '超级管理员', '28', '删除角色', 'a:10:{s:2:"id";s:3:"153";s:4:"name";s:10:"更新html";s:8:"parentid";s:3:"128";s:8:"app_code";s:7:"webgame";s:10:"controller";s:7:"special";s:6:"method";s:11:"htmlSpecial";s:8:"extparam";s:0:"";s:9:"listorder";s:1:"0";s:5:"islog";s:1:"1";s:7:"display";s:1:"1";}', 'a:0:{}', 'delete', '127.0.0.1', 1377593114),
(21, 1, 'wangcanliang', 1, '超级管理员', '28', '删除角色', 'a:10:{s:2:"id";s:3:"154";s:4:"name";s:12:"管理专题";s:8:"parentid";s:3:"128";s:8:"app_code";s:7:"webgame";s:10:"controller";s:7:"special";s:6:"method";s:8:"listinfo";s:8:"extparam";s:0:"";s:9:"listorder";s:1:"0";s:5:"islog";s:1:"1";s:7:"display";s:1:"1";}', 'a:0:{}', 'delete', '127.0.0.1', 1377593123),
(22, 1, 'wangcanliang', 1, '超级管理员', '28', '删除角色', 'a:10:{s:2:"id";s:3:"155";s:4:"name";s:12:"查看专题";s:8:"parentid";s:3:"128";s:8:"app_code";s:7:"webgame";s:10:"controller";s:7:"special";s:6:"method";s:4:"view";s:8:"extparam";s:0:"";s:9:"listorder";s:1:"0";s:5:"islog";s:1:"1";s:7:"display";s:1:"3";}', 'a:0:{}', 'delete', '127.0.0.1', 1377593131),
(23, 1, 'wangcanliang', 1, '超级管理员', '28', '删除角色', 'a:10:{s:2:"id";s:3:"128";s:4:"name";s:6:"专题";s:8:"parentid";s:3:"124";s:8:"app_code";s:7:"webgame";s:10:"controller";s:0:"";s:6:"method";s:0:"";s:8:"extparam";s:0:"";s:9:"listorder";s:1:"5";s:5:"islog";s:1:"1";s:7:"display";s:1:"1";}', 'a:0:{}', 'delete', '127.0.0.1', 1377593140),
(24, 1, 'wangcanliang', 1, '超级管理员', '214', '添加游戏', 'a:8:{s:2:"id";b:0;s:4:"name";s:12:"诺克传奇";s:4:"code";s:5:"nuoke";s:8:"url_home";s:22:"http://www.gogoet.com/";s:10:"url_server";s:0:"";s:5:"ispay";s:1:"1";s:12:"webgame_type";s:1:"1";s:14:"webgame_status";b:0;}', 'a:0:{}', 'add', '127.0.0.1', 1377671591),
(25, 1, 'wangcanliang', 1, '超级管理员', '214', '添加游戏', 'a:8:{s:2:"id";b:0;s:4:"name";s:9:"凤飞飞";s:4:"code";s:3:"aaa";s:8:"url_home";s:22:"http://www.gogoet.com/";s:10:"url_server";s:12:"反反复复";s:5:"ispay";s:1:"1";s:12:"webgame_type";s:1:"2";s:14:"webgame_status";b:0;}', 'a:0:{}', 'add', '127.0.0.1', 1377674326),
(26, 1, 'wangcanliang', 1, '超级管理员', '216', '编辑游戏', 'a:19:{s:4:"name";s:12:"诺克传奇";s:4:"code";b:0;s:12:"webgame_type";s:1:"2";s:14:"webgame_status";b:0;s:8:"url_home";s:22:"http://www.gogoet.com/";s:10:"url_server";s:12:"反反复复";s:7:"url_bbs";s:9:"凤飞飞";s:9:"listorder";s:1:"0";s:5:"ispay";s:1:"1";s:11:"description";s:8:"aaaaaaaa";s:9:"pic_small";s:62:"http://upload.kids.com/passport2013/0828/20130828152656337.jpg";s:10:"pic_middle";s:62:"http://upload.kids.com/passport2013/0828/20130828152656337.jpg";s:7:"pic_big";s:62:"http://upload.kids.com/passport2013/0828/20130828152656337.jpg";s:9:"coin_name";s:3:"333";s:9:"coin_unit";s:3:"www";s:9:"coin_rate";s:3:"333";s:14:"start_maintain";s:17:"2013-08-24  15:26";s:12:"end_maintain";s:17:"2013-08-17  15:26";s:12:"url_maintain";s:1:"1";}', 'a:21:{s:2:"id";s:1:"1";s:4:"code";s:5:"nuoke";s:4:"name";s:12:"诺克传奇";s:11:"description";s:0:"";s:5:"brief";N;s:9:"pic_small";s:0:"";s:10:"pic_middle";s:0:"";s:7:"pic_big";s:0:"";s:8:"url_home";s:22:"http://www.gogoet.com/";s:10:"url_server";s:0:"";s:7:"url_bbs";s:0:"";s:9:"coin_name";s:0:"";s:9:"coin_unit";s:0:"";s:9:"coin_rate";s:1:"0";s:9:"listorder";s:1:"0";s:5:"ispay";s:1:"1";s:12:"webgame_type";s:1:"1";s:14:"webgame_status";s:0:"";s:12:"url_maintain";s:1:"1";s:14:"start_maintain";s:1:"0";s:12:"end_maintain";s:1:"0";}', 'edit', '127.0.0.1', 1377674828),
(27, 1, 'wangcanliang', 1, '超级管理员', '216', '编辑游戏', 'a:19:{s:4:"name";s:13:"诺克传奇1";s:4:"code";b:0;s:12:"webgame_type";s:1:"2";s:14:"webgame_status";s:1:"2";s:8:"url_home";s:23:"http://www.gogoet.com/1";s:10:"url_server";s:13:"反反复复1";s:7:"url_bbs";s:10:"凤飞飞1";s:9:"listorder";s:4:"7771";s:5:"ispay";s:1:"1";s:11:"description";s:8:"aaaaaaaa";s:9:"pic_small";s:62:"http://upload.kids.com/passport2013/0828/20130828152656337.jpg";s:10:"pic_middle";s:62:"http://upload.kids.com/passport2013/0828/20130828152656337.jpg";s:7:"pic_big";s:62:"http://upload.kids.com/passport2013/0828/20130828152656337.jpg";s:9:"coin_name";s:4:"3331";s:9:"coin_unit";s:4:"www1";s:9:"coin_rate";s:4:"3331";s:14:"start_maintain";s:17:"1970-01-15  08:33";s:12:"end_maintain";s:17:"1970-01-02  08:33";s:12:"url_maintain";s:5:"11111";}', 'a:21:{s:2:"id";s:1:"1";s:4:"code";s:1:"0";s:4:"name";s:12:"诺克传奇";s:11:"description";s:8:"aaaaaaaa";s:5:"brief";N;s:9:"pic_small";s:62:"http://upload.kids.com/passport2013/0828/20130828152656337.jpg";s:10:"pic_middle";s:62:"http://upload.kids.com/passport2013/0828/20130828152656337.jpg";s:7:"pic_big";s:62:"http://upload.kids.com/passport2013/0828/20130828152656337.jpg";s:8:"url_home";s:22:"http://www.gogoet.com/";s:10:"url_server";s:12:"反反复复";s:7:"url_bbs";s:9:"凤飞飞";s:9:"coin_name";s:3:"333";s:9:"coin_unit";s:3:"www";s:9:"coin_rate";s:3:"333";s:9:"listorder";s:1:"0";s:5:"ispay";s:1:"1";s:12:"webgame_type";s:1:"2";s:14:"webgame_status";s:0:"";s:12:"url_maintain";s:1:"1";s:14:"start_maintain";s:4:"2013";s:12:"end_maintain";s:4:"2013";}', 'edit', '127.0.0.1', 1377676207),
(28, 1, 'wangcanliang', 1, '超级管理员', '216', '编辑游戏', 'a:19:{s:4:"name";s:13:"诺克传奇1";s:4:"code";s:4:"fuck";s:12:"webgame_type";s:1:"2";s:14:"webgame_status";s:1:"2";s:8:"url_home";s:23:"http://www.gogoet.com/1";s:10:"url_server";s:13:"反反复复1";s:7:"url_bbs";s:10:"凤飞飞1";s:9:"listorder";s:4:"7771";s:5:"ispay";s:1:"1";s:11:"description";s:8:"aaaaaaaa";s:9:"pic_small";s:62:"http://upload.kids.com/passport2013/0828/20130828152656337.jpg";s:10:"pic_middle";s:62:"http://upload.kids.com/passport2013/0828/20130828152656337.jpg";s:7:"pic_big";s:62:"http://upload.kids.com/passport2013/0828/20130828152656337.jpg";s:9:"coin_name";s:4:"3331";s:9:"coin_unit";s:4:"www1";s:9:"coin_rate";s:4:"3331";s:14:"start_maintain";i:1377649920;s:12:"end_maintain";i:1376699520;s:12:"url_maintain";s:5:"11111";}', 'a:21:{s:2:"id";s:1:"1";s:4:"code";s:4:"fuck";s:4:"name";s:13:"诺克传奇1";s:11:"description";s:8:"aaaaaaaa";s:5:"brief";N;s:9:"pic_small";s:62:"http://upload.kids.com/passport2013/0828/20130828152656337.jpg";s:10:"pic_middle";s:62:"http://upload.kids.com/passport2013/0828/20130828152656337.jpg";s:7:"pic_big";s:62:"http://upload.kids.com/passport2013/0828/20130828152656337.jpg";s:8:"url_home";s:23:"http://www.gogoet.com/1";s:10:"url_server";s:13:"反反复复1";s:7:"url_bbs";s:10:"凤飞飞1";s:9:"coin_name";s:4:"3331";s:9:"coin_unit";s:4:"www1";s:9:"coin_rate";s:4:"3331";s:9:"listorder";s:4:"7771";s:5:"ispay";s:1:"1";s:12:"webgame_type";s:1:"2";s:14:"webgame_status";s:1:"2";s:12:"url_maintain";s:5:"11111";s:14:"start_maintain";s:4:"1970";s:12:"end_maintain";s:4:"1970";}', 'edit', '127.0.0.1', 1377676989),
(29, 1, 'wangcanliang', 1, '超级管理员', '219', '添加服务器', 'a:6:{s:2:"id";b:0;s:4:"name";s:12:"反反复复";s:12:"webgame_code";s:3:"aaa";s:9:"listorder";s:0:"";s:5:"ispay";s:1:"0";s:13:"server_status";b:0;}', 'a:0:{}', 'add', '127.0.0.1', 1377680486),
(30, 1, 'wangcanliang', 1, '超级管理员', '221', '编辑服务器', 'a:8:{s:2:"id";b:0;s:4:"name";s:12:"反反复复";s:12:"webgame_code";s:4:"fuck";s:9:"listorder";s:10:"0得得得";s:5:"ispay";s:1:"1";s:13:"server_status";b:0;s:14:"start_maintain";i:0;s:12:"end_maintain";i:0;}', 'a:11:{s:2:"id";s:1:"1";s:12:"webgame_code";s:3:"aaa";s:4:"name";s:12:"反反复复";s:9:"listorder";s:1:"0";s:5:"ispay";s:1:"0";s:13:"server_status";s:1:"0";s:10:"time_start";s:1:"0";s:11:"server_mark";s:0:"";s:14:"start_maintain";s:1:"0";s:12:"end_maintain";s:1:"0";s:12:"url_maintain";s:0:"";}', 'edit', '127.0.0.1', 1377680767),
(31, 1, 'wangcanliang', 1, '超级管理员', '221', '编辑服务器', 'a:10:{s:4:"name";s:12:"反反复复";s:11:"server_mark";s:5:"33333";s:12:"webgame_code";s:4:"fuck";s:9:"listorder";s:3:"888";s:5:"ispay";s:1:"1";s:13:"server_status";b:0;s:10:"time_start";s:17:"2013-08-10  17:08";s:14:"start_maintain";i:1377335280;s:12:"end_maintain";i:1377940080;s:12:"url_maintain";s:4:"4444";}', 'a:11:{s:2:"id";s:1:"1";s:12:"webgame_code";s:4:"fuck";s:4:"name";s:12:"反反复复";s:9:"listorder";s:1:"0";s:5:"ispay";s:1:"1";s:13:"server_status";s:1:"0";s:10:"time_start";s:1:"0";s:11:"server_mark";s:0:"";s:14:"start_maintain";s:1:"0";s:12:"end_maintain";s:1:"0";s:12:"url_maintain";s:0:"";}', 'edit', '127.0.0.1', 1377680912),
(32, 1, 'wangcanliang', 1, '超级管理员', '221', '编辑服务器', 'a:10:{s:4:"name";s:12:"反反复复";s:11:"server_mark";s:5:"33333";s:12:"webgame_code";s:4:"fuck";s:9:"listorder";s:3:"888";s:5:"ispay";s:1:"1";s:13:"server_status";s:1:"2";s:10:"time_start";s:19:"1970-01-01 08:33:33";s:14:"start_maintain";i:1377335280;s:12:"end_maintain";i:1377940080;s:12:"url_maintain";s:4:"4444";}', 'a:11:{s:2:"id";s:1:"1";s:12:"webgame_code";s:4:"fuck";s:4:"name";s:12:"反反复复";s:9:"listorder";s:3:"888";s:5:"ispay";s:1:"1";s:13:"server_status";s:1:"0";s:10:"time_start";s:4:"2013";s:11:"server_mark";s:5:"33333";s:14:"start_maintain";s:10:"1377335280";s:12:"end_maintain";s:10:"1377940080";s:12:"url_maintain";s:4:"4444";}', 'edit', '127.0.0.1', 1377681045),
(33, 1, 'wangcanliang', 1, '超级管理员', '214', '添加游戏', 'a:19:{s:4:"name";s:12:"诺瓦奇兵";s:4:"code";s:4:"nova";s:12:"webgame_type";s:1:"1";s:14:"webgame_status";s:1:"1";s:8:"url_home";s:21:"http://nova.kids.com/";s:10:"url_server";s:0:"";s:7:"url_bbs";s:0:"";s:9:"listorder";s:1:"1";s:5:"ispay";s:1:"1";s:11:"description";s:48:"诺瓦奇兵，倾心打造，经典儿童游戏";s:9:"pic_small";s:62:"http://upload.kids.com/passport2013/0828/20130828182405772.jpg";s:10:"pic_middle";s:62:"http://upload.kids.com/passport2013/0828/20130828182415985.jpg";s:7:"pic_big";s:62:"http://upload.kids.com/passport2013/0828/20130828182438223.png";s:9:"coin_name";s:6:"瓦币";s:9:"coin_unit";s:3:"个";s:9:"coin_rate";s:2:"10";s:14:"start_maintain";i:1377164880;s:12:"end_maintain";i:1377769680;s:12:"url_maintain";s:21:"http://nova.kids.com/";}', 'a:0:{}', 'add', '127.0.0.1', 1377685570),
(34, 1, 'wangcanliang', 1, '超级管理员', '214', '添加游戏', 'a:19:{s:4:"name";s:6:"娜喔";s:4:"code";s:4:"navo";s:12:"webgame_type";s:1:"1";s:14:"webgame_status";s:1:"1";s:8:"url_home";s:21:"http://navo.kids.com/";s:10:"url_server";s:0:"";s:7:"url_bbs";s:0:"";s:9:"listorder";s:1:"2";s:5:"ispay";s:1:"1";s:11:"description";s:78:"娜喔游戏是我们公司用三年时间打造的一款牛到不行的游戏";s:9:"pic_small";s:62:"http://upload.kids.com/passport2013/0828/20130828182801991.jpg";s:10:"pic_middle";s:62:"http://upload.kids.com/passport2013/0828/20130828182810323.png";s:7:"pic_big";s:62:"http://upload.kids.com/passport2013/0828/20130828182818206.png";s:9:"coin_name";s:9:"窝窝币";s:9:"coin_unit";s:3:"个";s:9:"coin_rate";s:3:"100";s:14:"start_maintain";i:1377426360;s:12:"end_maintain";i:1377858360;s:12:"url_maintain";s:0:"";}', 'a:0:{}', 'add', '127.0.0.1', 1377685735),
(35, 1, 'wangcanliang', 1, '超级管理员', '129', '添加栏目', 'a:14:{s:7:"catname";s:12:"公司新闻";s:8:"parentid";s:1:"1";s:7:"modelid";s:1:"2";s:6:"catdir";s:4:"news";s:5:"image";s:0:"";s:11:"description";s:0:"";s:6:"ishtml";s:1:"1";s:8:"template";s:4:"list";s:10:"meta_title";s:0:"";s:13:"meta_keywords";s:0:"";s:16:"meta_description";s:0:"";s:9:"listorder";b:0;s:7:"urlrule";s:12:"biglist_html";s:9:"parentdir";s:8:"ourinfo/";}', 'a:0:{}', 'add', '127.0.0.1', 1377687593),
(36, 1, 'wangcanliang', 1, '超级管理员', '29', '添加菜单', 'a:8:{s:4:"name";s:12:"广告管理";s:8:"parentid";s:1:"5";s:8:"app_code";s:8:"passport";s:10:"controller";s:0:"";s:6:"method";s:0:"";s:8:"extparam";s:0:"";s:9:"listorder";b:0;s:7:"display";s:1:"2";}', 'a:0:{}', 'add', '127.0.0.1', 1377757787),
(37, 1, 'wangcanliang', 1, '超级管理员', '29', '添加菜单', 'a:8:{s:4:"name";s:12:"版位管理";s:8:"parentid";s:3:"226";s:8:"app_code";s:8:"passport";s:10:"controller";s:12:"poster_space";s:6:"method";s:8:"listinfo";s:8:"extparam";s:0:"";s:9:"listorder";b:0;s:7:"display";s:1:"2";}', 'a:0:{}', 'add', '127.0.0.1', 1377757837),
(38, 1, 'wangcanliang', 1, '超级管理员', '29', '添加菜单', 'a:8:{s:4:"name";s:12:"广告管理";s:8:"parentid";s:3:"226";s:8:"app_code";s:8:"passport";s:10:"controller";s:6:"poster";s:6:"method";s:8:"listinfo";s:8:"extparam";s:0:"";s:9:"listorder";b:0;s:7:"display";s:1:"2";}', 'a:0:{}', 'add', '127.0.0.1', 1377757875),
(39, 1, 'wangcanliang', 1, '超级管理员', '27', '编辑', 'a:8:{s:4:"name";s:12:"广告管理";s:8:"parentid";s:1:"5";s:8:"app_code";s:8:"passport";s:10:"controller";s:0:"";s:6:"method";s:0:"";s:8:"extparam";s:0:"";s:9:"listorder";b:0;s:7:"display";s:1:"1";}', 'a:10:{s:2:"id";s:3:"226";s:4:"name";s:12:"广告管理";s:8:"parentid";s:1:"5";s:8:"app_code";s:8:"passport";s:10:"controller";s:0:"";s:6:"method";s:0:"";s:8:"extparam";s:0:"";s:9:"listorder";s:1:"0";s:5:"islog";s:1:"1";s:7:"display";s:1:"2";}', 'edit', '127.0.0.1', 1377757949),
(40, 1, 'wangcanliang', 1, '超级管理员', '27', '编辑', 'a:8:{s:4:"name";s:12:"广告管理";s:8:"parentid";s:3:"226";s:8:"app_code";s:8:"passport";s:10:"controller";s:6:"poster";s:6:"method";s:8:"listinfo";s:8:"extparam";s:0:"";s:9:"listorder";b:0;s:7:"display";s:1:"1";}', 'a:10:{s:2:"id";s:3:"228";s:4:"name";s:12:"广告管理";s:8:"parentid";s:3:"226";s:8:"app_code";s:8:"passport";s:10:"controller";s:6:"poster";s:6:"method";s:8:"listinfo";s:8:"extparam";s:0:"";s:9:"listorder";s:1:"0";s:5:"islog";s:1:"1";s:7:"display";s:1:"2";}', 'edit', '127.0.0.1', 1377757978),
(41, 1, 'wangcanliang', 1, '超级管理员', '27', '编辑', 'a:8:{s:4:"name";s:12:"版位管理";s:8:"parentid";s:3:"226";s:8:"app_code";s:8:"passport";s:10:"controller";s:12:"poster_space";s:6:"method";s:8:"listinfo";s:8:"extparam";s:0:"";s:9:"listorder";b:0;s:7:"display";s:1:"1";}', 'a:10:{s:2:"id";s:3:"227";s:4:"name";s:12:"版位管理";s:8:"parentid";s:3:"226";s:8:"app_code";s:8:"passport";s:10:"controller";s:12:"poster_space";s:6:"method";s:8:"listinfo";s:8:"extparam";s:0:"";s:9:"listorder";s:1:"0";s:5:"islog";s:1:"1";s:7:"display";s:1:"2";}', 'edit', '127.0.0.1', 1377757987),
(42, 1, 'wangcanliang', 1, '超级管理员', '27', '编辑', 'a:8:{s:4:"name";s:12:"删除版位";s:8:"parentid";s:3:"227";s:8:"app_code";s:8:"passport";s:10:"controller";s:12:"poster_space";s:6:"method";s:6:"delete";s:8:"extparam";s:0:"";s:9:"listorder";b:0;s:7:"display";s:1:"4";}', 'a:10:{s:2:"id";s:3:"229";s:4:"name";s:12:"删除版位";s:8:"parentid";s:3:"227";s:8:"app_code";s:8:"passport";s:10:"controller";s:12:"poster_space";s:6:"method";s:6:"delete";s:8:"extparam";s:0:"";s:9:"listorder";s:1:"0";s:5:"islog";s:1:"1";s:7:"display";s:1:"3";}', 'edit', '127.0.0.1', 1377759979),
(43, 1, 'wangcanliang', 1, '超级管理员', '27', '编辑', 'a:8:{s:4:"name";s:12:"编辑版位";s:8:"parentid";s:3:"227";s:8:"app_code";s:8:"passport";s:10:"controller";s:12:"poster_space";s:6:"method";s:4:"edit";s:8:"extparam";s:0:"";s:9:"listorder";b:0;s:7:"display";s:1:"4";}', 'a:10:{s:2:"id";s:3:"230";s:4:"name";s:12:"编辑版位";s:8:"parentid";s:3:"227";s:8:"app_code";s:8:"passport";s:10:"controller";s:12:"poster_space";s:6:"method";s:4:"edit";s:8:"extparam";s:0:"";s:9:"listorder";s:1:"0";s:5:"islog";s:1:"1";s:7:"display";s:1:"3";}', 'edit', '127.0.0.1', 1377759986),
(44, 1, 'wangcanliang', 1, '超级管理员', '27', '编辑', 'a:8:{s:4:"name";s:12:"查看版位";s:8:"parentid";s:3:"227";s:8:"app_code";s:8:"passport";s:10:"controller";s:12:"poster_space";s:6:"method";s:4:"view";s:8:"extparam";s:0:"";s:9:"listorder";b:0;s:7:"display";s:1:"4";}', 'a:10:{s:2:"id";s:3:"231";s:4:"name";s:12:"查看版位";s:8:"parentid";s:3:"227";s:8:"app_code";s:8:"passport";s:10:"controller";s:12:"poster_space";s:6:"method";s:4:"view";s:8:"extparam";s:0:"";s:9:"listorder";s:1:"0";s:5:"islog";s:1:"1";s:7:"display";s:1:"3";}', 'edit', '127.0.0.1', 1377759991),
(45, 1, 'wangcanliang', 1, '超级管理员', '27', '编辑', 'a:8:{s:4:"name";s:12:"添加版位";s:8:"parentid";s:3:"227";s:8:"app_code";s:8:"passport";s:10:"controller";s:12:"poster_space";s:6:"method";s:3:"add";s:8:"extparam";s:0:"";s:9:"listorder";b:0;s:7:"display";s:1:"3";}', 'a:10:{s:2:"id";s:3:"232";s:4:"name";s:12:"添加版位";s:8:"parentid";s:3:"227";s:8:"app_code";s:8:"passport";s:10:"controller";s:12:"poster_space";s:6:"method";s:3:"add";s:8:"extparam";s:0:"";s:9:"listorder";s:1:"0";s:5:"islog";s:1:"1";s:7:"display";s:1:"2";}', 'edit', '127.0.0.1', 1377759995),
(46, 1, 'wangcanliang', 1, '超级管理员', '27', '编辑', 'a:8:{s:4:"name";s:12:"编辑广告";s:8:"parentid";s:3:"228";s:8:"app_code";s:8:"passport";s:10:"controller";s:6:"poster";s:6:"method";s:4:"edit";s:8:"extparam";s:0:"";s:9:"listorder";b:0;s:7:"display";s:1:"4";}', 'a:10:{s:2:"id";s:3:"234";s:4:"name";s:12:"编辑广告";s:8:"parentid";s:3:"228";s:8:"app_code";s:8:"passport";s:10:"controller";s:6:"poster";s:6:"method";s:4:"edit";s:8:"extparam";s:0:"";s:9:"listorder";s:1:"0";s:5:"islog";s:1:"1";s:7:"display";s:1:"3";}', 'edit', '127.0.0.1', 1377759999),
(47, 1, 'wangcanliang', 1, '超级管理员', '27', '编辑', 'a:8:{s:4:"name";s:12:"查看广告";s:8:"parentid";s:3:"228";s:8:"app_code";s:8:"passport";s:10:"controller";s:6:"poster";s:6:"method";s:4:"view";s:8:"extparam";s:0:"";s:9:"listorder";b:0;s:7:"display";s:1:"4";}', 'a:10:{s:2:"id";s:3:"235";s:4:"name";s:12:"查看广告";s:8:"parentid";s:3:"228";s:8:"app_code";s:8:"passport";s:10:"controller";s:6:"poster";s:6:"method";s:4:"view";s:8:"extparam";s:0:"";s:9:"listorder";s:1:"0";s:5:"islog";s:1:"1";s:7:"display";s:1:"3";}', 'edit', '127.0.0.1', 1377760002),
(48, 1, 'wangcanliang', 1, '超级管理员', '27', '编辑', 'a:8:{s:4:"name";s:12:"添加广告";s:8:"parentid";s:3:"228";s:8:"app_code";s:8:"passport";s:10:"controller";s:6:"poster";s:6:"method";s:3:"add";s:8:"extparam";s:0:"";s:9:"listorder";b:0;s:7:"display";s:1:"3";}', 'a:10:{s:2:"id";s:3:"236";s:4:"name";s:12:"添加广告";s:8:"parentid";s:3:"228";s:8:"app_code";s:8:"passport";s:10:"controller";s:6:"poster";s:6:"method";s:3:"add";s:8:"extparam";s:0:"";s:9:"listorder";s:1:"0";s:5:"islog";s:1:"1";s:7:"display";s:1:"2";}', 'edit', '127.0.0.1', 1377760009),
(49, 1, 'wangcanliang', 1, '超级管理员', '27', '编辑', 'a:8:{s:4:"name";s:12:"删除广告";s:8:"parentid";s:3:"228";s:8:"app_code";s:8:"passport";s:10:"controller";s:6:"poster";s:6:"method";s:6:"delete";s:8:"extparam";s:0:"";s:9:"listorder";b:0;s:7:"display";s:1:"4";}', 'a:10:{s:2:"id";s:3:"233";s:4:"name";s:12:"删除广告";s:8:"parentid";s:3:"228";s:8:"app_code";s:8:"passport";s:10:"controller";s:6:"poster";s:6:"method";s:6:"delete";s:8:"extparam";s:0:"";s:9:"listorder";s:1:"0";s:5:"islog";s:1:"1";s:7:"display";s:1:"3";}', 'edit', '127.0.0.1', 1377760013),
(50, 1, 'wangcanliang', 1, '超级管理员', '236', '添加广告', 'a:11:{s:4:"name";s:13:"dfthsftsrdtrt";s:7:"ad_type";b:0;s:8:"space_id";b:0;s:3:"url";s:0:"";s:7:"url_ext";s:0:"";s:10:"start_time";s:0:"";s:8:"end_time";s:0:"";s:9:"listorder";s:0:"";s:9:"ad_status";s:1:"0";s:3:"pic";s:62:"http://upload.kids.com/passport2013/0829/20130829154830772.png";s:7:"pic_ext";s:62:"http://upload.kids.com/passport2013/0829/20130829154839522.png";}', 'a:0:{}', 'add', '127.0.0.1', 1377762795),
(51, 1, 'wangcanliang', 1, '超级管理员', '234', '编辑广告', 'a:11:{s:4:"name";s:13:"dfthsftsrdtrt";s:7:"ad_type";b:0;s:8:"space_id";b:0;s:3:"url";s:52:"http://www.163.com/special/0077450P/login_frame.html";s:7:"url_ext";s:0:"";s:10:"start_time";s:17:"2013-08-15  15:53";s:8:"end_time";s:17:"2013-08-01  15:53";s:9:"listorder";s:1:"0";s:9:"ad_status";s:1:"1";s:3:"pic";s:62:"http://upload.kids.com/passport2013/0829/20130829154830772.png";s:7:"pic_ext";s:62:"http://upload.kids.com/passport2013/0829/20130829154839522.png";}', 'a:13:{s:2:"id";s:2:"11";s:4:"name";s:13:"dfthsftsrdtrt";s:8:"space_id";s:1:"0";s:7:"ad_type";s:1:"0";s:10:"start_time";s:1:"0";s:8:"end_time";s:1:"0";s:8:"add_time";s:1:"0";s:9:"listorder";s:1:"0";s:9:"ad_status";s:1:"0";s:3:"url";s:0:"";s:7:"url_ext";s:0:"";s:3:"pic";s:62:"http://upload.kids.com/passport2013/0829/20130829154830772.png";s:7:"pic_ext";s:62:"http://upload.kids.com/passport2013/0829/20130829154839522.png";}', 'edit', '127.0.0.1', 1377762816),
(52, 1, 'wangcanliang', 1, '超级管理员', '236', '添加广告', 'a:11:{s:4:"name";s:12:"网页游戏";s:7:"ad_type";s:5:"image";s:8:"space_id";s:1:"4";s:3:"url";s:52:"http://www.163.com/special/0077450P/login_frame.html";s:7:"url_ext";s:0:"";s:10:"start_time";s:17:"2013-08-24  16:23";s:8:"end_time";s:17:"2013-09-07  16:23";s:9:"listorder";s:1:"1";s:9:"ad_status";s:1:"1";s:3:"pic";s:62:"http://upload.kids.com/passport2013/0829/20130829162341821.png";s:7:"pic_ext";s:0:"";}', 'a:0:{}', 'add', '127.0.0.1', 1377764626),
(53, 1, 'wangcanliang', 1, '超级管理员', '229', '删除版位', 'a:7:{s:2:"id";s:1:"6";s:4:"name";s:27:"下载详情页右侧顶部";s:10:"space_type";s:6:"banner";s:5:"width";s:3:"248";s:6:"height";s:3:"162";s:11:"description";s:0:"";s:12:"space_status";s:1:"0";}', 'a:0:{}', 'delete', '127.0.0.1', 1377766120),
(54, 1, 'wangcanliang', 1, '超级管理员', '229', '删除版位', 'a:7:{s:2:"id";s:2:"11";s:4:"name";s:9:"汉字啊";s:10:"space_type";s:5:"float";s:5:"width";s:4:"1111";s:6:"height";s:4:"2222";s:11:"description";s:0:"";s:12:"space_status";s:1:"0";}', 'a:0:{}', 'delete', '127.0.0.1', 1377766125),
(55, 1, 'wangcanliang', 1, '超级管理员', '232', '添加版位', 'a:6:{s:4:"name";s:18:"首页幻灯广告";s:10:"space_type";s:9:"imagelist";s:5:"width";s:3:"400";s:6:"height";s:3:"500";s:11:"description";s:30:"首页幻灯图片广告列表";s:12:"space_status";s:1:"0";}', 'a:0:{}', 'add', '127.0.0.1', 1377766239),
(56, 1, 'wangcanliang', 1, '超级管理员', '236', '添加广告', 'a:12:{s:4:"name";s:13:"幻灯广告1";s:7:"ad_type";s:5:"image";s:8:"space_id";s:1:"1";s:3:"url";s:0:"";s:7:"url_ext";s:0:"";s:8:"add_time";s:0:"";s:10:"start_time";s:0:"";s:8:"end_time";s:0:"";s:9:"listorder";s:1:"1";s:9:"ad_status";s:1:"1";s:3:"pic";s:62:"http://upload.kids.com/passport2013/0829/20130829165118385.png";s:7:"pic_ext";s:0:"";}', 'a:0:{}', 'add', '127.0.0.1', 1377766286),
(57, 1, 'wangcanliang', 1, '超级管理员', '236', '添加广告', 'a:12:{s:4:"name";s:19:"首页幻灯广告2";s:7:"ad_type";s:1:"0";s:8:"space_id";s:1:"1";s:3:"url";s:0:"";s:7:"url_ext";s:0:"";s:8:"add_time";s:0:"";s:10:"start_time";s:0:"";s:8:"end_time";s:0:"";s:9:"listorder";s:0:"";s:9:"ad_status";s:1:"1";s:3:"pic";s:62:"http://upload.kids.com/passport2013/0829/20130829165158554.jpg";s:7:"pic_ext";s:0:"";}', 'a:0:{}', 'add', '127.0.0.1', 1377766323),
(58, 1, 'wangcanliang', 1, '超级管理员', '236', '添加广告', 'a:12:{s:4:"name";s:19:"首页幻灯广告3";s:7:"ad_type";s:5:"image";s:8:"space_id";s:1:"1";s:3:"url";s:52:"http://www.163.com/special/0077450P/login_frame.html";s:7:"url_ext";s:0:"";s:8:"add_time";s:0:"";s:10:"start_time";s:0:"";s:8:"end_time";s:0:"";s:9:"listorder";s:1:"4";s:9:"ad_status";s:1:"1";s:3:"pic";s:62:"http://upload.kids.com/passport2013/0829/20130829165231318.png";s:7:"pic_ext";s:0:"";}', 'a:0:{}', 'add', '127.0.0.1', 1377766360),
(59, 1, 'wangcanliang', 1, '超级管理员', '129', '添加栏目', 'a:14:{s:7:"catname";s:12:"诺瓦奇兵";s:8:"parentid";s:1:"0";s:7:"modelid";s:1:"2";s:6:"catdir";s:4:"nova";s:5:"image";s:0:"";s:11:"description";s:18:"诺瓦奇兵资讯";s:6:"ishtml";s:1:"1";s:8:"template";s:8:"list_big";s:10:"meta_title";s:0:"";s:13:"meta_keywords";s:0:"";s:16:"meta_description";s:0:"";s:9:"listorder";b:0;s:7:"urlrule";s:12:"biglist_html";s:9:"parentdir";s:1:"/";}', 'a:0:{}', 'add', '127.0.0.1', 1377841320),
(60, 1, 'wangcanliang', 1, '超级管理员', '129', '添加栏目', 'a:14:{s:7:"catname";s:12:"新闻公告";s:8:"parentid";s:1:"8";s:7:"modelid";s:1:"2";s:6:"catdir";s:4:"news";s:5:"image";s:0:"";s:11:"description";s:12:"诺瓦新闻";s:6:"ishtml";b:0;s:8:"template";s:1:"0";s:10:"meta_title";s:0:"";s:13:"meta_keywords";s:0:"";s:16:"meta_description";s:0:"";s:9:"listorder";b:0;s:7:"urlrule";s:1:"0";s:9:"parentdir";s:5:"nova/";}', 'a:0:{}', 'add', '127.0.0.1', 1377841353),
(61, 1, 'wangcanliang', 1, '超级管理员', '131', '编辑栏目', 'a:14:{s:7:"catname";s:12:"新闻公告";s:8:"parentid";s:1:"8";s:7:"modelid";s:1:"2";s:6:"catdir";s:4:"xwgg";s:5:"image";s:0:"";s:11:"description";s:12:"诺瓦新闻";s:6:"ishtml";s:1:"0";s:8:"template";s:1:"0";s:10:"meta_title";s:0:"";s:13:"meta_keywords";s:0:"";s:16:"meta_description";s:0:"";s:9:"listorder";b:0;s:7:"urlrule";s:1:"0";s:9:"parentdir";s:5:"nova/";}', 'a:15:{s:2:"id";s:1:"9";s:7:"catname";s:12:"新闻公告";s:6:"catdir";s:4:"news";s:9:"parentdir";s:5:"nova/";s:5:"image";s:0:"";s:8:"parentid";s:1:"8";s:7:"modelid";s:1:"2";s:9:"listorder";s:1:"0";s:11:"description";s:12:"诺瓦新闻";s:8:"template";s:1:"0";s:10:"meta_title";s:0:"";s:13:"meta_keywords";s:0:"";s:16:"meta_description";s:0:"";s:7:"urlrule";s:1:"0";s:6:"ishtml";s:1:"0";}', 'edit', '127.0.0.1', 1377841582),
(62, 1, 'wangcanliang', 1, '超级管理员', '29', '添加菜单', 'a:8:{s:4:"name";s:12:"友情链接";s:8:"parentid";s:1:"5";s:8:"app_code";s:8:"passport";s:10:"controller";s:0:"";s:6:"method";s:0:"";s:8:"extparam";s:0:"";s:9:"listorder";b:0;s:7:"display";s:1:"1";}', 'a:0:{}', 'add', '127.0.0.1', 1378100448),
(63, 1, 'wangcanliang', 1, '超级管理员', '241', '添加友链', 'a:8:{s:4:"name";s:13:"友情链接1";s:12:"linkurl_type";s:4:"nova";s:3:"url";s:14:"http://abc.com";s:4:"logo";s:62:"http://upload.kids.com/passport2013/0902/20130902141706112.png";s:9:"listorder";s:1:"2";s:8:"add_time";s:17:"2013-09-07  14:16";s:11:"description";s:12:"暗室逢灯";s:14:"linkurl_status";s:1:"0";}', 'a:0:{}', 'add', '127.0.0.1', 1378102635),
(64, 1, 'wangcanliang', 1, '超级管理员', '239', '编辑友链', 'a:8:{s:4:"name";s:13:"友情链接1";s:12:"linkurl_type";b:0;s:3:"url";s:14:"http://abc.com";s:4:"logo";s:62:"http://upload.kids.com/passport2013/0902/20130902141706112.png";s:9:"listorder";s:1:"2";s:8:"add_time";s:19:"1970-01-01 08:33:33";s:11:"description";s:12:"暗室逢灯";s:14:"linkurl_status";s:1:"1";}', 'a:10:{s:2:"id";s:1:"1";s:12:"linkurl_type";s:4:"nova";s:4:"name";s:13:"友情链接1";s:3:"url";s:14:"http://abc.com";s:4:"logo";s:62:"http://upload.kids.com/passport2013/0902/20130902141706112.png";s:11:"description";s:12:"暗室逢灯";s:8:"username";s:0:"";s:9:"listorder";s:1:"2";s:14:"linkurl_status";s:1:"0";s:8:"add_time";s:4:"2013";}', 'edit', '127.0.0.1', 1378102739),
(65, 1, 'wangcanliang', 1, '超级管理员', '239', '编辑友链', 'a:8:{s:4:"name";s:13:"友情链接1";s:12:"linkurl_type";b:0;s:3:"url";s:14:"http://abc.com";s:4:"logo";s:62:"http://upload.kids.com/passport2013/0902/20130902141706112.png";s:9:"listorder";s:1:"2";s:8:"add_time";s:19:"1970-01-01 08:32:50";s:11:"description";s:12:"暗室逢灯";s:14:"linkurl_status";s:1:"0";}', 'a:10:{s:2:"id";s:1:"1";s:12:"linkurl_type";s:1:"0";s:4:"name";s:13:"友情链接1";s:3:"url";s:14:"http://abc.com";s:4:"logo";s:62:"http://upload.kids.com/passport2013/0902/20130902141706112.png";s:11:"description";s:12:"暗室逢灯";s:8:"username";s:0:"";s:9:"listorder";s:1:"2";s:14:"linkurl_status";s:1:"1";s:8:"add_time";s:4:"1970";}', 'edit', '127.0.0.1', 1378102881),
(66, 1, 'wangcanliang', 1, '超级管理员', '239', '编辑友链', 'a:8:{s:4:"name";s:13:"友情链接1";s:12:"linkurl_type";b:0;s:3:"url";s:14:"http://abc.com";s:4:"logo";s:62:"http://upload.kids.com/passport2013/0902/20130902141706112.png";s:9:"listorder";s:1:"2";s:8:"add_time";s:19:"1970-01-01 08:32:50";s:11:"description";s:12:"暗室逢灯";s:14:"linkurl_status";s:1:"1";}', 'a:10:{s:2:"id";s:1:"1";s:12:"linkurl_type";s:1:"0";s:4:"name";s:13:"友情链接1";s:3:"url";s:14:"http://abc.com";s:4:"logo";s:62:"http://upload.kids.com/passport2013/0902/20130902141706112.png";s:11:"description";s:12:"暗室逢灯";s:8:"username";s:0:"";s:9:"listorder";s:1:"2";s:14:"linkurl_status";s:1:"0";s:8:"add_time";s:4:"1970";}', 'edit', '127.0.0.1', 1378102958),
(67, 1, 'wangcanliang', 1, '超级管理员', '239', '编辑友链', 'a:8:{s:4:"name";s:13:"友情链接1";s:12:"linkurl_type";s:1:"0";s:3:"url";s:14:"http://abc.com";s:4:"logo";s:62:"http://upload.kids.com/passport2013/0902/20130902141706112.png";s:9:"listorder";s:1:"2";s:8:"add_time";i:779520;s:11:"description";s:12:"暗室逢灯";s:14:"linkurl_status";s:1:"1";}', 'a:10:{s:2:"id";s:1:"1";s:12:"linkurl_type";s:1:"0";s:4:"name";s:13:"友情链接1";s:3:"url";s:14:"http://abc.com";s:4:"logo";s:62:"http://upload.kids.com/passport2013/0902/20130902141706112.png";s:11:"description";s:12:"暗室逢灯";s:8:"username";s:0:"";s:9:"listorder";s:1:"2";s:14:"linkurl_status";s:1:"1";s:8:"add_time";s:4:"1970";}', 'edit', '127.0.0.1', 1378103241),
(68, 1, 'wangcanliang', 1, '超级管理员', '239', '编辑友链', 'a:8:{s:4:"name";s:13:"友情链接1";s:12:"linkurl_type";s:4:"nova";s:3:"url";s:14:"http://abc.com";s:4:"logo";s:62:"http://upload.kids.com/passport2013/0902/20130902141706112.png";s:9:"listorder";s:1:"2";s:8:"add_time";i:2593920;s:11:"description";s:12:"暗室逢灯";s:14:"linkurl_status";s:1:"1";}', 'a:10:{s:2:"id";s:1:"1";s:12:"linkurl_type";s:1:"0";s:4:"name";s:13:"友情链接1";s:3:"url";s:14:"http://abc.com";s:4:"logo";s:62:"http://upload.kids.com/passport2013/0902/20130902141706112.png";s:11:"description";s:12:"暗室逢灯";s:8:"username";s:0:"";s:9:"listorder";s:1:"2";s:14:"linkurl_status";s:1:"1";s:8:"add_time";s:6:"779520";}', 'edit', '127.0.0.1', 1378103270),
(69, 1, 'wangcanliang', 1, '超级管理员', '239', '编辑友链', 'a:8:{s:4:"name";s:13:"友情链接1";s:12:"linkurl_type";s:4:"nova";s:3:"url";s:14:"http://abc.com";s:4:"logo";s:62:"http://upload.kids.com/passport2013/0902/20130902141706112.png";s:9:"listorder";s:1:"2";s:8:"add_time";i:1378081920;s:11:"description";s:12:"暗室逢灯";s:14:"linkurl_status";s:1:"1";}', 'a:10:{s:2:"id";s:1:"1";s:12:"linkurl_type";s:4:"nova";s:4:"name";s:13:"友情链接1";s:3:"url";s:14:"http://abc.com";s:4:"logo";s:62:"http://upload.kids.com/passport2013/0902/20130902141706112.png";s:11:"description";s:12:"暗室逢灯";s:8:"username";s:0:"";s:9:"listorder";s:1:"2";s:14:"linkurl_status";s:1:"1";s:8:"add_time";s:7:"2593920";}', 'edit', '127.0.0.1', 1378103288),
(70, 1, 'wangcanliang', 1, '超级管理员', '241', '添加友链', 'a:8:{s:4:"name";s:12:"网页游戏";s:12:"linkurl_type";s:4:"nova";s:3:"url";s:97:"http://weibo.com/ajaxlogin.php?framelogin=1&callback=parent.sinaSSOController.feedBackUrlCallBack";s:4:"logo";s:0:"";s:9:"listorder";s:2:"66";s:8:"add_time";i:1378536060;s:11:"description";s:0:"";s:14:"linkurl_status";s:1:"1";}', 'a:0:{}', 'add', '127.0.0.1', 1378104082),
(71, 1, 'wangcanliang', 1, '超级管理员', '241', '添加友链', 'a:8:{s:4:"name";s:23:"淘米游戏样式style";s:12:"linkurl_type";s:3:"web";s:3:"url";s:97:"http://weibo.com/ajaxlogin.php?framelogin=1&callback=parent.sinaSSOController.feedBackUrlCallBack";s:4:"logo";s:0:"";s:9:"listorder";s:3:"444";s:8:"add_time";i:1378622460;s:11:"description";s:0:"";s:14:"linkurl_status";s:1:"0";}', 'a:0:{}', 'add', '127.0.0.1', 1378104098),
(72, 1, 'wangcanliang', 1, '超级管理员', '131', '编辑栏目', 'a:14:{s:7:"catname";s:12:"关于我们";s:8:"parentid";s:1:"1";s:7:"modelid";s:1:"1";s:6:"catdir";s:4:"gywm";s:5:"image";s:0:"";s:11:"description";s:0:"";s:6:"ishtml";s:1:"1";s:8:"template";s:12:"page_aboutus";s:10:"meta_title";s:0:"";s:13:"meta_keywords";s:0:"";s:16:"meta_description";s:0:"";s:9:"listorder";b:0;s:7:"urlrule";s:12:"biglist_html";s:9:"parentdir";s:8:"ourinfo/";}', 'a:15:{s:2:"id";s:1:"2";s:7:"catname";s:12:"关于我们";s:6:"catdir";s:4:"gywm";s:9:"parentdir";s:8:"ourinfo/";s:5:"image";s:0:"";s:8:"parentid";s:1:"1";s:7:"modelid";s:1:"1";s:9:"listorder";s:1:"0";s:11:"description";s:0:"";s:8:"template";s:12:"page_default";s:10:"meta_title";s:0:"";s:13:"meta_keywords";s:0:"";s:16:"meta_description";s:0:"";s:7:"urlrule";s:12:"biglist_html";s:6:"ishtml";s:1:"1";}', 'edit', '127.0.0.1', 1378111332),
(73, 1, 'wangcanliang', 1, '超级管理员', '129', '添加栏目', 'a:14:{s:7:"catname";s:12:"知金理念";s:8:"parentid";s:1:"0";s:7:"modelid";s:1:"1";s:6:"catdir";s:4:"zjln";s:5:"image";s:0:"";s:11:"description";s:0:"";s:6:"ishtml";s:1:"1";s:8:"template";s:12:"page_service";s:10:"meta_title";s:0:"";s:13:"meta_keywords";s:0:"";s:16:"meta_description";s:0:"";s:9:"listorder";b:0;s:7:"urlrule";s:1:"0";s:9:"parentdir";s:1:"/";}', 'a:0:{}', 'add', '127.0.0.1', 1378119634),
(74, 1, 'wangcanliang', 1, '超级管理员', '129', '添加栏目', 'a:14:{s:7:"catname";s:12:"父母须知";s:8:"parentid";s:2:"18";s:7:"modelid";s:1:"1";s:6:"catdir";s:4:"fmxz";s:5:"image";s:0:"";s:11:"description";s:0:"";s:6:"ishtml";b:0;s:8:"template";s:12:"page_service";s:10:"meta_title";s:0:"";s:13:"meta_keywords";s:0:"";s:16:"meta_description";s:0:"";s:9:"listorder";b:0;s:7:"urlrule";s:1:"0";s:9:"parentdir";s:5:"zjln/";}', 'a:0:{}', 'add', '127.0.0.1', 1378119658);
INSERT INTO `kp_admin_managerlog` (`id`, `userid`, `username`, `roleid`, `role_name`, `menu_id`, `menu_name`, `data`, `data_old`, `logtype`, `ip`, `inputtime`) VALUES
(75, 1, 'wangcanliang', 1, '超级管理员', '129', '添加栏目', 'a:14:{s:7:"catname";s:18:"儿童健康上网";s:8:"parentid";s:2:"18";s:7:"modelid";s:1:"1";s:6:"catdir";s:4:"jksw";s:5:"image";s:0:"";s:11:"description";s:0:"";s:6:"ishtml";b:0;s:8:"template";s:12:"page_service";s:10:"meta_title";s:0:"";s:13:"meta_keywords";s:0:"";s:16:"meta_description";s:0:"";s:9:"listorder";b:0;s:7:"urlrule";s:1:"0";s:9:"parentdir";s:5:"zjln/";}', 'a:0:{}', 'add', '127.0.0.1', 1378119685),
(76, 1, 'wangcanliang', 1, '超级管理员', '129', '添加栏目', 'a:14:{s:7:"catname";s:12:"绿色宣言";s:8:"parentid";s:2:"18";s:7:"modelid";s:1:"1";s:6:"catdir";s:4:"lsxy";s:5:"image";s:0:"";s:11:"description";s:0:"";s:6:"ishtml";b:0;s:8:"template";s:12:"page_service";s:10:"meta_title";s:0:"";s:13:"meta_keywords";s:0:"";s:16:"meta_description";s:0:"";s:9:"listorder";b:0;s:7:"urlrule";s:1:"0";s:9:"parentdir";s:5:"zjln/";}', 'a:0:{}', 'add', '127.0.0.1', 1378119708),
(77, 1, 'wangcanliang', 1, '超级管理员', '129', '添加栏目', 'a:14:{s:7:"catname";s:12:"服务条款";s:8:"parentid";s:2:"18";s:7:"modelid";s:1:"1";s:6:"catdir";s:4:"fwtk";s:5:"image";s:0:"";s:11:"description";s:0:"";s:6:"ishtml";b:0;s:8:"template";s:12:"page_service";s:10:"meta_title";s:0:"";s:13:"meta_keywords";s:0:"";s:16:"meta_description";s:0:"";s:9:"listorder";b:0;s:7:"urlrule";s:1:"0";s:9:"parentdir";s:5:"zjln/";}', 'a:0:{}', 'add', '127.0.0.1', 1378119729),
(78, 1, 'wangcanliang', 1, '超级管理员', '131', '编辑栏目', 'a:14:{s:7:"catname";s:12:"核心价值";s:8:"parentid";s:1:"1";s:7:"modelid";s:1:"1";s:6:"catdir";s:4:"hxjz";s:5:"image";s:0:"";s:11:"description";s:0:"";s:6:"ishtml";s:1:"1";s:8:"template";s:12:"page_aboutus";s:10:"meta_title";s:0:"";s:13:"meta_keywords";s:0:"";s:16:"meta_description";s:0:"";s:9:"listorder";b:0;s:7:"urlrule";s:12:"biglist_html";s:9:"parentdir";s:8:"ourinfo/";}', 'a:16:{s:2:"id";s:1:"5";s:7:"catname";s:12:"项目合作";s:6:"catdir";s:4:"xmhz";s:9:"parentdir";s:8:"ourinfo/";s:5:"image";s:0:"";s:8:"parentid";s:1:"1";s:7:"modelid";s:1:"1";s:3:"url";s:46:"http://webgame.kids.com/index/category?catid=5";s:9:"listorder";s:1:"0";s:11:"description";s:0:"";s:8:"template";s:12:"page_default";s:10:"meta_title";s:0:"";s:13:"meta_keywords";s:0:"";s:16:"meta_description";s:0:"";s:7:"urlrule";s:12:"biglist_html";s:6:"ishtml";s:1:"1";}', 'edit', '127.0.0.1', 1378209835),
(79, 1, 'wangcanliang', 1, '超级管理员', '131', '编辑栏目', 'a:14:{s:7:"catname";s:12:"员工关怀";s:8:"parentid";s:1:"1";s:7:"modelid";s:1:"1";s:6:"catdir";s:4:"yggh";s:5:"image";s:0:"";s:11:"description";s:0:"";s:6:"ishtml";s:1:"1";s:8:"template";s:12:"page_aboutus";s:10:"meta_title";s:0:"";s:13:"meta_keywords";s:0:"";s:16:"meta_description";s:0:"";s:9:"listorder";b:0;s:7:"urlrule";s:12:"biglist_html";s:9:"parentdir";s:8:"ourinfo/";}', 'a:16:{s:2:"id";s:1:"3";s:7:"catname";s:12:"诚聘英才";s:6:"catdir";s:4:"cpyc";s:9:"parentdir";s:8:"ourinfo/";s:5:"image";s:0:"";s:8:"parentid";s:1:"1";s:7:"modelid";s:1:"1";s:3:"url";s:46:"http://webgame.kids.com/index/category?catid=3";s:9:"listorder";s:1:"0";s:11:"description";s:0:"";s:8:"template";s:12:"page_default";s:10:"meta_title";s:0:"";s:13:"meta_keywords";s:0:"";s:16:"meta_description";s:0:"";s:7:"urlrule";s:12:"biglist_html";s:6:"ishtml";s:1:"1";}', 'edit', '127.0.0.1', 1378209866),
(80, 1, 'wangcanliang', 1, '超级管理员', '131', '编辑栏目', 'a:14:{s:7:"catname";s:12:"发展历程";s:8:"parentid";s:1:"1";s:7:"modelid";s:1:"1";s:6:"catdir";s:4:"fzlc";s:5:"image";s:0:"";s:11:"description";s:0:"";s:6:"ishtml";s:1:"1";s:8:"template";s:12:"page_aboutus";s:10:"meta_title";s:0:"";s:13:"meta_keywords";s:0:"";s:16:"meta_description";s:0:"";s:9:"listorder";b:0;s:7:"urlrule";s:12:"biglist_html";s:9:"parentdir";s:8:"ourinfo/";}', 'a:16:{s:2:"id";s:1:"4";s:7:"catname";s:12:"管理团队";s:6:"catdir";s:4:"gltd";s:9:"parentdir";s:8:"ourinfo/";s:5:"image";s:0:"";s:8:"parentid";s:1:"1";s:7:"modelid";s:1:"1";s:3:"url";s:46:"http://webgame.kids.com/index/category?catid=4";s:9:"listorder";s:1:"0";s:11:"description";s:0:"";s:8:"template";s:12:"page_default";s:10:"meta_title";s:0:"";s:13:"meta_keywords";s:0:"";s:16:"meta_description";s:0:"";s:7:"urlrule";s:12:"biglist_html";s:6:"ishtml";s:1:"1";}', 'edit', '127.0.0.1', 1378209928),
(81, 1, 'wangcanliang', 1, '超级管理员', '131', '编辑栏目', 'a:14:{s:7:"catname";s:12:"联系我们";s:8:"parentid";s:1:"1";s:7:"modelid";s:1:"1";s:6:"catdir";s:4:"lxwm";s:5:"image";s:0:"";s:11:"description";s:0:"";s:6:"ishtml";s:1:"1";s:8:"template";s:12:"page_aboutus";s:10:"meta_title";s:0:"";s:13:"meta_keywords";s:0:"";s:16:"meta_description";s:0:"";s:9:"listorder";b:0;s:7:"urlrule";s:12:"biglist_html";s:9:"parentdir";s:8:"ourinfo/";}', 'a:16:{s:2:"id";s:1:"6";s:7:"catname";s:12:"联系我们";s:6:"catdir";s:4:"lxwm";s:9:"parentdir";s:8:"ourinfo/";s:5:"image";s:0:"";s:8:"parentid";s:1:"1";s:7:"modelid";s:1:"1";s:3:"url";s:46:"http://webgame.kids.com/index/category?catid=6";s:9:"listorder";s:1:"0";s:11:"description";s:0:"";s:8:"template";s:12:"page_default";s:10:"meta_title";s:0:"";s:13:"meta_keywords";s:0:"";s:16:"meta_description";s:0:"";s:7:"urlrule";s:12:"biglist_html";s:6:"ishtml";s:1:"1";}', 'edit', '127.0.0.1', 1378275546),
(82, 1, 'wangcanliang', 1, '超级管理员', '27', '编辑', 'a:8:{s:4:"name";s:18:"帐号充值统计";s:8:"parentid";s:3:"197";s:8:"app_code";s:3:"pay";s:10:"controller";s:10:"member_pay";s:6:"method";s:8:"listinfo";s:8:"extparam";s:0:"";s:9:"listorder";b:0;s:7:"display";s:1:"1";}', 'a:10:{s:2:"id";s:3:"206";s:4:"name";s:18:"帐号充值统计";s:8:"parentid";s:3:"197";s:8:"app_code";s:3:"pay";s:10:"controller";s:6:"member";s:6:"method";s:8:"listinfo";s:8:"extparam";s:0:"";s:9:"listorder";s:1:"0";s:5:"islog";s:1:"1";s:7:"display";s:1:"1";}', 'edit', '127.0.0.1', 1378294424),
(83, 1, 'wangcanliang', 1, '超级管理员', '216', '编辑游戏', 'a:19:{s:4:"name";s:12:"诺瓦奇兵";s:4:"code";s:4:"nova";s:12:"webgame_type";s:1:"1";s:14:"webgame_status";s:1:"1";s:8:"url_home";s:21:"http://nova.kids.com/";s:10:"url_server";s:0:"";s:7:"url_bbs";s:0:"";s:9:"listorder";s:1:"1";s:5:"ispay";s:1:"1";s:11:"description";s:48:"诺瓦奇兵，倾心打造，经典儿童游戏";s:9:"pic_small";s:62:"http://upload.kids.com/passport2013/0905/20130905144330972.jpg";s:10:"pic_middle";s:62:"http://upload.kids.com/passport2013/0905/20130905144418890.jpg";s:7:"pic_big";s:62:"http://upload.kids.com/passport2013/0905/20130905144425525.jpg";s:9:"coin_name";s:6:"瓦币";s:9:"coin_unit";s:3:"个";s:9:"coin_rate";s:2:"10";s:14:"start_maintain";i:1377164880;s:12:"end_maintain";i:1377769680;s:12:"url_maintain";s:21:"http://nova.kids.com/";}', 'a:21:{s:2:"id";s:1:"1";s:4:"code";s:4:"nova";s:4:"name";s:12:"诺瓦奇兵";s:11:"description";s:48:"诺瓦奇兵，倾心打造，经典儿童游戏";s:5:"brief";N;s:9:"pic_small";s:62:"http://upload.kids.com/passport2013/0828/20130828182405772.jpg";s:10:"pic_middle";s:62:"http://upload.kids.com/passport2013/0828/20130828182415985.jpg";s:7:"pic_big";s:62:"http://upload.kids.com/passport2013/0828/20130828182438223.png";s:8:"url_home";s:21:"http://nova.kids.com/";s:10:"url_server";s:0:"";s:7:"url_bbs";s:0:"";s:9:"coin_name";s:6:"瓦币";s:9:"coin_unit";s:3:"个";s:9:"coin_rate";s:2:"10";s:9:"listorder";s:1:"1";s:5:"ispay";s:1:"1";s:12:"webgame_type";s:1:"1";s:14:"webgame_status";s:1:"1";s:12:"url_maintain";s:21:"http://nova.kids.com/";s:14:"start_maintain";s:10:"1377164880";s:12:"end_maintain";s:10:"1377769680";}', 'edit', '127.0.0.1', 1378363494),
(84, 1, 'wangcanliang', 1, '超级管理员', '219', '添加服务器', 'a:10:{s:4:"name";s:13:"神仙道1服";s:11:"server_mark";s:1:"1";s:12:"webgame_code";s:6:"shenxd";s:9:"listorder";s:1:"2";s:5:"ispay";s:1:"1";s:13:"server_status";s:1:"1";s:10:"time_start";s:17:"2013-09-05  15:43";s:14:"start_maintain";i:1378453380;s:12:"end_maintain";i:1379144580;s:12:"url_maintain";s:0:"";}', 'a:0:{}', 'add', '127.0.0.1', 1378367054),
(85, 1, 'wangcanliang', 1, '超级管理员', '219', '添加服务器', 'a:10:{s:4:"name";s:13:"神仙道2服";s:11:"server_mark";s:1:"2";s:12:"webgame_code";s:6:"shenxd";s:9:"listorder";s:2:"66";s:5:"ispay";s:1:"1";s:13:"server_status";s:1:"1";s:10:"time_start";s:17:"2013-09-05  15:44";s:14:"start_maintain";i:1378280640;s:12:"end_maintain";i:1378453440;s:12:"url_maintain";s:2:"as";}', 'a:0:{}', 'add', '127.0.0.1', 1378367083),
(86, 1, 'wangcanliang', 1, '超级管理员', '219', '添加服务器', 'a:10:{s:4:"name";s:10:"网游1服";s:11:"server_mark";s:1:"a";s:12:"webgame_code";s:3:"www";s:9:"listorder";s:1:"4";s:5:"ispay";s:1:"1";s:13:"server_status";s:1:"1";s:10:"time_start";s:17:"2013-08-31  15:44";s:14:"start_maintain";i:1378453440;s:12:"end_maintain";i:1378539840;s:12:"url_maintain";s:0:"";}', 'a:0:{}', 'add', '127.0.0.1', 1378367114),
(87, 1, 'wangcanliang', 1, '超级管理员', '246', '添加包月', 'a:5:{s:4:"name";s:12:"诺瓦包月";s:5:"money";s:2:"10";s:4:"unit";s:1:"2";s:5:"thumb";s:62:"http://upload.kids.com/passport2013/0905/20130905194647580.jpg";s:9:"listorder";s:1:"8";}', 'a:0:{}', 'add', '127.0.0.1', 1378381610);

-- --------------------------------------------------------

--
-- 表的结构 `kp_admin_menu`
--

CREATE TABLE IF NOT EXISTS `kp_admin_menu` (
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
-- 转存表中的数据 `kp_admin_menu`
--

INSERT INTO `kp_admin_menu` (`id`, `name`, `parentid`, `app_code`, `controller`, `method`, `extparam`, `listorder`, `islog`, `display`) VALUES
(1, '我的面板', 0, 'passport', '', '', '', 0, '0', '1'),
(2, '管理设置', 0, 'passport', '', '', '', 1, '0', '1'),
(3, '用户中心', 0, 'passport', '', '', '', 2, '0', '1'),
(5, '应用管理', 0, 'passport', '', '', '', 5, '0', '1'),
(6, '管理员信息', 1, 'passport', '', '', '', 0, '0', '1'),
(7, '修改个人信息', 6, 'passport', 'manager', 'editm', '', 0, '0', '1'),
(8, '修改密码', 6, 'passport', 'manager', 'editp', '', 0, '0', '1'),
(9, '操作记录', 6, 'passport', 'managerlog', 'listinfom', '', 0, '0', '1'),
(10, '查看日志', 6, 'passport', 'managerlog', 'viewm', '', 0, '0', '3'),
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
(87, '角色权限', 11, 'passport', 'role', 'editPriv', '', 0, '1', '3'),
(123, '平台附件管理', 5, 'passport', '', '', '', 0, '1', '1'),
(124, '网页游戏', 0, 'webgame', '', '', '', 7, '0', '1'),
(125, '内容相关设置', 124, 'webgame', '', '', '', 2, '1', '1'),
(126, '内容管理', 124, 'webgame', '', '', '', 3, '1', '1'),
(247, '管理包月', 197, 'pay', 'paymonth', 'listinfo', '', 0, '1', '1'),
(246, '添加包月', 197, 'pay', 'paymonth', 'add', '', 0, '1', '2'),
(245, '查看包月', 197, 'pay', 'paymonth', 'view', '', 0, '1', '3'),
(244, '编辑包月', 197, 'pay', 'paymonth', 'edit', '', 0, '1', '3'),
(243, '删除包月', 197, 'pay', 'paymonth', 'delete', '', 0, '1', '3'),
(242, '友情链接管理', 237, 'passport', 'linkurl', 'listinfo', '', 0, '1', '1'),
(127, '发布管理', 124, 'webgame', '', '', '', 4, '1', '1'),
(226, '广告管理', 5, 'passport', '', '', '', 0, '1', '1'),
(129, '添加栏目', 125, 'webgame', 'category', 'add', '', 0, '1', '2'),
(130, '删除栏目', 125, 'webgame', 'category', 'delete', '', 0, '1', '3'),
(131, '编辑栏目', 125, 'webgame', 'category', 'edit', '', 0, '1', '3'),
(132, '管理栏目', 125, 'webgame', 'category', 'listinfo', '', 0, '1', '1'),
(133, '查看栏目', 125, 'webgame', 'category', 'view', '', 0, '1', '3'),
(134, '添加内容', 126, 'webgame', 'content', 'add', '', 0, '1', '2'),
(135, '管理内容', 126, 'webgame', 'content', 'catquick', '', 0, '1', '1'),
(136, '删除内容', 126, 'webgame', 'content', 'delete', '', 0, '1', '3'),
(137, '编辑内容', 126, 'webgame', 'content', 'edit', '', 0, '1', '3'),
(138, '内容列表', 126, 'webgame', 'content', 'listinfo', '', 0, '1', '3'),
(139, '查看内容', 126, 'webgame', 'content', 'view', '', 0, '1', '3'),
(140, '添加推荐位', 125, 'webgame', 'position', 'add', '', 0, '1', '2'),
(141, '删除推荐位', 125, 'webgame', 'position', 'delete', '', 0, '1', '3'),
(142, '编辑推荐位', 125, 'webgame', 'position', 'edit', '', 0, '1', '3'),
(143, '管理推荐位', 125, 'webgame', 'position', 'listinfo', '', 0, '1', '1'),
(144, '查看推荐位', 125, 'webgame', 'position', 'view', '', 0, '1', '3'),
(145, '生成栏目页', 127, 'webgame', 'publish', 'category', '', 0, '1', '1'),
(146, '生成内容页', 127, 'webgame', 'publish', 'content', '', 0, '1', '1'),
(147, '生成首页', 127, 'webgame', 'publish', 'index', '', 0, '1', '1'),
(148, '更新URL页', 127, 'webgame', 'publish', 'url', '', 0, '1', '1'),
(233, '删除广告', 226, 'passport', 'poster', 'delete', '', 0, '1', '3'),
(232, '添加版位', 226, 'passport', 'poster_space', 'add', '', 0, '1', '2'),
(231, '查看版位', 226, 'passport', 'poster_space', 'view', '', 0, '1', '3'),
(230, '编辑版位', 226, 'passport', 'poster_space', 'edit', '', 0, '1', '3'),
(229, '删除版位', 226, 'passport', 'poster_space', 'delete', '', 0, '1', '3'),
(228, '广告管理', 226, 'passport', 'poster', 'listinfo', '', 0, '1', '1'),
(227, '版位管理', 226, 'passport', 'poster_space', 'listinfo', '', 0, '1', '1'),
(241, '添加友链', 237, 'passport', 'linkurl', 'add', '', 0, '1', '2'),
(240, '查看友链', 237, 'passport', 'linkurl', 'view', '', 0, '1', '3'),
(239, '编辑友链', 237, 'passport', 'linkurl', 'edit', '', 0, '1', '3'),
(238, '删除友链', 237, 'passport', 'linkurl', 'delete', '', 0, '1', '3'),
(237, '友情链接', 5, 'passport', '', '', '', 0, '1', '1'),
(236, '添加广告', 226, 'passport', 'poster', 'add', '', 0, '1', '2'),
(235, '查看广告', 226, 'passport', 'poster', 'view', '', 0, '1', '3'),
(234, '编辑广告', 226, 'passport', 'poster', 'edit', '', 0, '1', '3'),
(225, '游戏帐号报表', 212, 'webgame', 'member', 'report', '', 0, '1', '2'),
(224, '游戏帐号明细', 212, 'webgame', 'member', 'listinfo', '', 4, '1', '1'),
(223, '复制服务器', 212, 'webgame', 'server', 'copy', '', 0, '1', '3'),
(222, '删除服务器', 212, 'webgame', 'server', 'delete', '', 0, '1', '3'),
(221, '编辑服务器', 212, 'webgame', 'server', 'edit', '', 0, '1', '3'),
(220, '查看服务器', 212, 'webgame', 'server', 'view', '', 0, '1', '3'),
(219, '添加服务器', 212, 'webgame', 'server', 'add', '', 0, '1', '2'),
(218, '管理服务器', 212, 'webgame', 'server', 'listinfo', '', 2, '1', '1'),
(217, '删除游戏', 212, 'webgame', 'webgame', 'delete', '', 0, '1', '3'),
(216, '编辑游戏', 212, 'webgame', 'webgame', 'edit', '', 0, '1', '3'),
(215, '查看游戏', 212, 'webgame', 'webgame', 'view', '', 0, '1', '3'),
(214, '添加游戏', 212, 'webgame', 'webgame', 'add', '', 0, '1', '2'),
(213, '管理游戏', 212, 'webgame', 'webgame', 'listinfo', '', 1, '1', '1'),
(212, '游戏管理', 124, 'webgame', '', '', '', 1, '0', '1'),
(211, '活动奖励', 198, 'pay', 'handcharge', 'listinfo', '', 0, '1', '1'),
(210, '手工充值', 198, 'pay', 'handcharge', 'add', '', 0, '1', '2'),
(209, '异常充值', 198, 'pay', 'account_unusual', 'listinfo', '', 0, '1', '1'),
(208, '支付记录', 198, 'pay', 'pay', 'listinfo', '', 0, '1', '1'),
(207, '充值记录', 198, 'pay', 'account', 'listinfo', '', 0, '1', '1'),
(206, '帐号充值统计', 197, 'pay', 'member_pay', 'listinfo', '', 0, '1', '1'),
(205, '删除支付方式', 197, 'pay', 'payment', 'delete', '', 0, '1', '3'),
(204, '编辑支付方式', 197, 'pay', 'payment', 'edit', '', 0, '1', '3'),
(203, '查看支付方式', 197, 'pay', 'payment', 'view', '', 0, '1', '3'),
(202, '添加支付方式', 197, 'pay', 'payment', 'add', '', 0, '1', '2'),
(201, '管理支付方式', 197, 'pay', 'payment', 'listinfo', '', 0, '1', '1'),
(200, '编辑配置', 197, 'pay', 'config', 'change', '', 0, '1', '3'),
(199, '支付配置', 197, 'pay', 'config', 'base', '', 0, '1', '1'),
(198, '支付报表', 196, 'pay', '', '', '', 0, '1', '1'),
(197, '支付管理', 196, 'pay', '', '', '', 0, '1', '1'),
(196, '支付模块', 0, 'pay', '', '', '', 8, '1', '1');

-- --------------------------------------------------------

--
-- 表的结构 `kp_admin_privilege`
--

CREATE TABLE IF NOT EXISTS `kp_admin_privilege` (
  `role_id` tinyint(3) unsigned NOT NULL COMMENT '角色ID',
  `menu_id` smallint(5) unsigned NOT NULL COMMENT '菜单ID',
  UNIQUE KEY `priviledge` (`role_id`,`menu_id`),
  KEY `operation` (`role_id`,`menu_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `kp_admin_role`
--

CREATE TABLE IF NOT EXISTS `kp_admin_role` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT COMMENT '角色ID',
  `name` varchar(50) NOT NULL COMMENT '名称',
  `description` varchar(1000) NOT NULL COMMENT '描述',
  `status` enum('0','1') NOT NULL COMMENT '0:禁用；1：启用',
  `listorder` smallint(5) unsigned NOT NULL COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `kp_admin_role`
--

INSERT INTO `kp_admin_role` (`id`, `name`, `description`, `status`, `listorder`) VALUES
(1, '超级管理员', '超级管理员', '', 7),
(2, '编辑', '网站编辑', '0', 0);

-- --------------------------------------------------------

--
-- 表的结构 `kp_attachment`
--

CREATE TABLE IF NOT EXISTS `kp_attachment` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=46 ;

--
-- 转存表中的数据 `kp_attachment`
--

INSERT INTO `kp_attachment` (`id`, `app_code`, `catid`, `contentid`, `file_name`, `file_path`, `file_size`, `file_ext`, `isimage`, `isthumb`, `downloads`, `userid`, `username`, `uploadtime`, `uploadip`, `status`, `authcode`) VALUES
(1, '', 0, 0, '0dc2a03eda99550ac22c58eb78a4a56d.jpg', 'passport2013/0828/20130828144909472.jpg', 9098, 'jpg', 0, 0, 0, 0, '', 0, '', 0, ''),
(2, '', 0, 0, '2a5f2d21063c813e5b53acf001bf2faf.jpg', 'passport2013/0828/20130828144919615.jpg', 9003, 'jpg', 0, 0, 0, 0, '', 0, '', 0, ''),
(3, '', 0, 0, '0dc2a03eda99550ac22c58eb78a4a56d.jpg', 'passport2013/0828/20130828144935687.jpg', 9098, 'jpg', 0, 0, 0, 0, '', 0, '', 0, ''),
(4, '', 0, 0, '1eafdd9c94802d32cdec7d8298ab83ff.jpg', 'passport2013/0828/20130828144950263.jpg', 8702, 'jpg', 0, 0, 0, 0, '', 0, '', 0, ''),
(5, '', 0, 0, '2aa533be8452207dff76ee6599de8561.jpg', 'passport2013/0828/20130828145232715.jpg', 8654, 'jpg', 0, 0, 0, 0, '', 0, '', 0, ''),
(6, '', 0, 0, '0e73218a47b6b87ad90f5792f6eb490e.jpg', 'passport2013/0828/20130828145441213.jpg', 6323, 'jpg', 0, 0, 0, 0, '', 0, '', 0, ''),
(7, '', 0, 0, '0e73218a47b6b87ad90f5792f6eb490e.jpg', 'passport2013/0828/20130828145619430.jpg', 6323, 'jpg', 0, 0, 0, 0, '', 0, '', 0, ''),
(8, '', 0, 0, '2aa533be8452207dff76ee6599de8561.jpg', 'passport2013/0828/20130828145716547.jpg', 8654, 'jpg', 0, 0, 0, 0, '', 0, '', 0, ''),
(9, '', 0, 0, '2aa533be8452207dff76ee6599de8561.jpg', 'passport2013/0828/20130828145808163.jpg', 8654, 'jpg', 0, 0, 0, 0, '', 0, '', 0, ''),
(10, '', 0, 0, '2c49174a6c1162675fe9b36aa67d7191.jpg', 'passport2013/0828/20130828150123793.jpg', 8256, 'jpg', 0, 0, 0, 0, '', 0, '', 0, ''),
(11, '', 0, 0, '2c49174a6c1162675fe9b36aa67d7191.jpg', 'passport2013/0828/20130828150147973.jpg', 8256, 'jpg', 0, 0, 0, 0, '', 0, '', 0, ''),
(12, '', 0, 0, '002a7172a45cf3cab26e07c656a25ee0.jpg', 'passport2013/0828/20130828150150582.jpg', 8310, 'jpg', 0, 0, 0, 0, '', 0, '', 0, ''),
(13, '', 0, 0, '2aa533be8452207dff76ee6599de8561.jpg', 'passport2013/0828/20130828150241998.jpg', 8654, 'jpg', 0, 0, 0, 0, '', 0, '', 0, ''),
(14, '', 0, 0, '0e73218a47b6b87ad90f5792f6eb490e.jpg', 'passport2013/0828/20130828150320289.jpg', 6323, 'jpg', 0, 0, 0, 0, '', 0, '', 0, ''),
(15, '', 0, 0, '1f29f3a039c14864f921c8d7a3c162fe.jpg', 'passport2013/0828/20130828150420355.jpg', 6742, 'jpg', 0, 0, 0, 0, '', 0, '', 0, ''),
(16, '', 0, 0, '0dc2a03eda99550ac22c58eb78a4a56d.jpg', 'passport2013/0828/20130828150439617.jpg', 9098, 'jpg', 0, 0, 0, 0, '', 0, '', 0, ''),
(17, '', 0, 0, '2aa533be8452207dff76ee6599de8561.jpg', 'passport2013/0828/20130828150616730.jpg', 8654, 'jpg', 0, 0, 0, 0, '', 0, '', 0, ''),
(18, '', 0, 0, '2aa533be8452207dff76ee6599de8561.jpg', 'passport2013/0828/20130828150627365.jpg', 8654, 'jpg', 0, 0, 0, 0, '', 0, '', 0, ''),
(19, '', 0, 0, '2a5f2d21063c813e5b53acf001bf2faf.jpg', 'passport2013/0828/20130828151653882.jpg', 9003, 'jpg', 0, 0, 0, 0, '', 0, '', 0, ''),
(20, '', 0, 0, '00b3988a8300033b4e88b62cb0fce284.jpg', 'passport2013/0828/20130828151705721.jpg', 7706, 'jpg', 0, 0, 0, 0, '', 0, '', 0, ''),
(21, '', 0, 0, '2a5f2d21063c813e5b53acf001bf2faf.jpg', 'passport2013/0828/20130828152509270.jpg', 9003, 'jpg', 0, 0, 0, 0, '', 0, '', 0, ''),
(22, '', 0, 0, '2aa533be8452207dff76ee6599de8561.jpg', 'passport2013/0828/20130828152656337.jpg', 8654, 'jpg', 0, 0, 0, 0, '', 0, '', 0, ''),
(23, '', 0, 0, '1ebc1fc27f2a9bc75613ba1c9096859a.jpg', 'passport2013/0828/20130828182405772.jpg', 78630, 'jpg', 0, 0, 0, 0, '', 0, '', 0, ''),
(24, '', 0, 0, '1ebc1fc27f2a9bc75613ba1c9096859a.jpg', 'passport2013/0828/20130828182415985.jpg', 78630, 'jpg', 0, 0, 0, 0, '', 0, '', 0, ''),
(25, '', 0, 0, '35f23a2286b722954ea3a329699d6de2.png', 'passport2013/0828/20130828182421420.png', 42150, 'png', 0, 0, 0, 0, '', 0, '', 0, ''),
(26, '', 0, 0, '2012092866495.jpg', 'passport2013/0828/20130828182426439.jpg', 233480, 'jpg', 0, 0, 0, 0, '', 0, '', 0, ''),
(27, '', 0, 0, '2012101133321.png', 'passport2013/0828/20130828182431663.png', 277768, 'png', 0, 0, 0, 0, '', 0, '', 0, ''),
(28, '', 0, 0, '2012092619706.png', 'passport2013/0828/20130828182438223.png', 407191, 'png', 0, 0, 0, 0, '', 0, '', 0, ''),
(29, '', 0, 0, '2012122425456.jpg', 'passport2013/0828/20130828182801991.jpg', 229891, 'jpg', 0, 0, 0, 0, '', 0, '', 0, ''),
(30, '', 0, 0, '2013022040650.png', 'passport2013/0828/20130828182810323.png', 262197, 'png', 0, 0, 0, 0, '', 0, '', 0, ''),
(31, '', 0, 0, '2013022024771.png', 'passport2013/0828/20130828182818206.png', 251669, 'png', 0, 0, 0, 0, '', 0, '', 0, ''),
(32, '', 0, 0, 'topbar_loading.png', 'passport2013/0829/20130829154830772.png', 1983, 'png', 0, 0, 0, 0, '', 0, '', 0, ''),
(33, '', 0, 0, 'topbar_loading.png', 'passport2013/0829/20130829154839522.png', 1983, 'png', 0, 0, 0, 0, '', 0, '', 0, ''),
(34, '', 0, 0, 'topbar_loading.png', 'passport2013/0829/20130829162341821.png', 1983, 'png', 0, 0, 0, 0, '', 0, '', 0, ''),
(35, '', 0, 0, '2012101060080.png', 'passport2013/0829/20130829165118385.png', 256164, 'png', 0, 0, 0, 0, '', 0, '', 0, ''),
(36, '', 0, 0, '2012092896369.jpg', 'passport2013/0829/20130829165158554.jpg', 246837, 'jpg', 0, 0, 0, 0, '', 0, '', 0, ''),
(37, '', 0, 0, '2012092619706.png', 'passport2013/0829/20130829165231318.png', 407191, 'png', 0, 0, 0, 0, '', 0, '', 0, ''),
(38, '', 0, 0, '2012092476849.png', 'passport2013/0902/20130902113329102.png', 227413, 'png', 0, 0, 0, 0, '', 0, '', 0, ''),
(39, '', 0, 0, '2012092619706.png', 'passport2013/0902/20130902141706112.png', 407191, 'png', 0, 0, 0, 0, '', 0, '', 0, ''),
(40, '', 0, 0, 'QQ图片20130905144308.jpg', 'passport2013/0905/20130905144330972.jpg', 168981, 'jpg', 0, 0, 0, 0, '', 0, '', 0, ''),
(41, '', 0, 0, 'QQ图片20130905144308.jpg', 'passport2013/0905/20130905144418890.jpg', 168981, 'jpg', 0, 0, 0, 0, '', 0, '', 0, ''),
(42, '', 0, 0, 'QQ图片20130905144308.jpg', 'passport2013/0905/20130905144425525.jpg', 168981, 'jpg', 0, 0, 0, 0, '', 0, '', 0, ''),
(43, '', 0, 0, 'sxd.jpg', 'passport2013/0905/20130905194546107.jpg', 67788, 'jpg', 0, 0, 0, 0, '', 0, '', 0, ''),
(44, '', 0, 0, 'QQ图片20130905144255.jpg', 'passport2013/0905/20130905194647580.jpg', 62110, 'jpg', 0, 0, 0, 0, '', 0, '', 0, ''),
(45, '', 0, 0, 'QQ图片20130905144308.jpg', 'passport2013/0906/20130906095918950.jpg', 207182, 'jpg', 0, 0, 0, 0, '', 0, '', 0, '');

-- --------------------------------------------------------

--
-- 表的结构 `kp_linkurl`
--

CREATE TABLE IF NOT EXISTS `kp_linkurl` (
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
-- 转存表中的数据 `kp_linkurl`
--

INSERT INTO `kp_linkurl` (`id`, `linkurl_type`, `name`, `url`, `logo`, `description`, `username`, `listorder`, `linkurl_status`, `add_time`) VALUES
(1, 'nova', '友情链接1', 'http://abc.com', 'http://upload.kids.com/passport2013/0902/20130902141706112.png', '暗室逢灯', '', 2, 1, 1378081920),
(2, 'nova', '网页游戏', 'http://weibo.com/ajaxlogin.php?framelogin=1&callback=parent.sinaSSOController.feedBackUrlCallBack', '', '', '', 66, 1, 1378536060),
(3, 'web', '淘米游戏样式style', 'http://weibo.com/ajaxlogin.php?framelogin=1&callback=parent.sinaSSOController.feedBackUrlCallBack', '', '', '', 444, 0, 1378622460);

-- --------------------------------------------------------

--
-- 表的结构 `kp_member`
--

CREATE TABLE IF NOT EXISTS `kp_member` (
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
  PRIMARY KEY (`userid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=698433 ;

--
-- 转存表中的数据 `kp_member`
--

INSERT INTO `kp_member` (`userid`, `username`, `ucserver_id`, `password`, `pwd_strong`, `encrypt`, `avatar`, `email`, `truename`, `gender`, `msn`, `telephone`, `get_username`, `address`, `qq`, `birthday`, `postcode`, `mobile`, `idcard`, `regip`, `regdate`, `loginnum`, `lastloginip`, `lastlogintime`) VALUES
(57932, 'aaaaaa', 1, '170b5743df733c6eb341037d704ba9e5', '1', 'aujb3v', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1378366376, 147, '127.0.0.1', 1378455617),
(641497, '0641497', 2, '04d3bba96dd1f8ea6bdc0235e602d66c', '1', 'rTEGjh', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1378444670, 0, '0', 0),
(684970, '0684970', 3, 'aa0eb5ff7f62b108f8d325b7bf06beaf', '1', 'zJKrZ4', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1378444754, 0, '0', 0),
(666256, '0666256', 4, '9cf2506d8d3761569e86d45f0ee02fdc', '1', 'qnz3vR', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1378444755, 0, '0', 0),
(679258, '0679258', 5, 'f3c224ed64ee27dc8800a895f1462829', '1', 'eu19Id', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1378444755, 0, '0', 0),
(655197, '0655197', 6, '316e8374d3d56a51ff465d23322c0069', '1', 'GQ48lg', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1378444755, 0, '0', 0),
(683024, '0683024', 7, 'f2a7ced2a0e076d6e08dea2c424c1722', '1', 'pm9DKF', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1378444756, 0, '0', 0),
(680045, '0680045', 8, '9cbbbddb67ca73b9591ea184583f4a70', '1', 'HrZWXL', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1378444756, 0, '0', 0),
(647697, '0647697', 9, 'ec6838ce7f66ed6c43d75f4e2d875da1', '1', 'NFLVaS', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1378444756, 0, '0', 0),
(640921, '0640921', 10, '893853a850978c7fce57ce89f858e1a5', '1', 'qhLyi8', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1378444756, 0, '0', 0),
(634332, '0634332', 11, 'c41e10de392c889ba65fa5ae5beb5c3e', '1', '4u2qny', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1378444757, 0, '0', 0),
(682445, '0682445', 12, '2b4ff81d04e12d6165cdf1be73fa3801', '1', 'clMDQS', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1378444757, 0, '0', 0),
(684761, '0684761', 13, '6928684de40b39be890acc9a0468bd96', '1', 'eSU1Mc', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1378444757, 0, '0', 0),
(660285, '0660285', 14, 'f745aeea5cfcd736b82ec62c0fc58b0a', '1', 'Abw1Aq', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1378444757, 0, '0', 0),
(68989, '068989', 15, 'ee964d44a5f114f2ec73f8db1e82c2ec', '1', '27FsHb', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1378444757, 0, '0', 0),
(644288, '0644288', 16, 'bc80e124498c56bd22bd8254599d2875', '1', 'fNxMIf', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1378444758, 0, '0', 0),
(665623, '0665623', 17, 'b1272e5f8c91d2ee9a10281408090cd0', '1', 'hqrKXH', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1378444758, 0, '0', 0),
(640745, '0640745', 18, '9a4eba2e119ad6902076e8087906dc10', '1', 'ibPsV5', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1378444758, 0, '0', 0),
(627810, '0627810', 19, '37d456c1aabbf646d314fd644cf0a645', '1', 'EtAq5P', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1378444758, 0, '0', 0),
(645552, '0645552', 20, '6d028cba6d685bef1cd6feb3a55129fc', '1', 'GH38Wz', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1378444758, 0, '0', 0),
(683209, '0683209', 21, 'c13d17bde1439f9c5f724bcbd3f80221', '1', 'CRDZHN', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1378444759, 0, '0', 0),
(678907, '0678907', 22, '753ce145a7c7a8dc9b55de73b42dfddc', '1', 'WRwlB9', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1378444759, 0, '0', 0),
(667246, '0667246', 23, '1c05c006a5d73b0746128307592d0f64', '1', 'hwv93J', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1378444759, 0, '0', 0),
(617954, '0617954', 24, '033f33ae66985268da1f91e0cbe05ac7', '1', 'YMa8Ad', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1378444759, 0, '0', 0),
(616015, '0616015', 25, 'f2768b76b2ef9d9fd6c124eca2a71622', '1', 'VPZAeT', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1378444759, 0, '0', 0),
(648350, '0648350', 26, '317261641b67d5b362bc0ed04b6736f8', '1', 'Di6QTn', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1378444760, 0, '0', 0),
(683644, '0683644', 27, '2de109a54c16e2f1462af71306486f50', '1', 'a3uAbl', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1378444760, 0, '0', 0),
(633155, '0633155', 28, 'eef89be6233a89e2bbd9387ebd378adf', '1', '7exqrp', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1378444760, 0, '0', 0),
(613220, '0613220', 29, 'b789754971ddc8a711fb7a93a8b2b68c', '1', 'aHCAPZ', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1378444760, 0, '0', 0),
(631774, '0631774', 30, 'c406ead66456e04c0e2a7d596c2efc7d', '1', 'RL1QDB', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1378444761, 0, '0', 0),
(663992, '0663992', 31, '8f75e694b4ca7efb2dffcbd0d33e45da', '1', '6l1nfZ', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1378444761, 0, '0', 0),
(611077, '0611077', 32, '527c5084ffaec136025e6a81952fa6dc', '1', 'IikEg8', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1378444761, 0, '0', 0),
(675653, '0675653', 33, '76b24e70d014622f9a76f0ec53b172b3', '1', 'qHBKes', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1378444762, 0, '0', 0),
(642879, '0642879', 34, '09cac8d9f7571bc19908c17795c2b9d7', '1', 'jzH7LU', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1378444762, 0, '0', 0),
(653274, '0653274', 35, '018fdcc45e79451a1759db9f8cfadb60', '1', 'CKENxN', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1378444763, 0, '0', 0),
(639345, '0639345', 36, '3276cbbdb1eed87139e9800281b06289', '1', 'HQT7qz', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1378444763, 0, '0', 0),
(684310, '0684310', 37, '7a9d8954c96f6065fd369913643775ce', '1', 'SQ5IHv', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1378444764, 0, '0', 0),
(624306, '0624306', 38, 'aca0f6e9c6fcd0850b3c790cac0d0491', '1', 'uMrFsr', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1378445168, 0, '0', 0),
(620432, '0620432', 39, 'b249a0a60ae80b5ca3ef5c5b6df6ca04', '1', 'Vydxxg', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1378446335, 0, '0', 0),
(698432, '0698432', 40, '355aed579cfd3f99e9e8e85c48c547ba', '1', 'iYa38q', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1378446379, 0, '0', 0),
(617590, '0617590', 41, '32fff8d3e417837d44fd574c0e01974f', '1', 'EtP1zR', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1378446423, 0, '0', 0),
(663770, '0663770', 42, '3e66640c535e5e295f0c89919ff854e3', '1', 'DNTVgc', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1378446442, 0, '0', 0),
(634700, '0634700', 43, '91101cd2061451240b348ca3ba84a8dd', '1', 'zMtW7N', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1378446518, 0, '0', 0),
(645958, '0645958', 44, '76ca405eef184a13a5f78b0b98205d2a', '1', 'vZbFcQ', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1378446523, 0, '0', 0),
(631390, '0631390', 45, '4bebc7af08dd05678f72b187d019ef65', '1', 'uuvA3r', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1378446524, 0, '0', 0),
(686203, '0686203', 46, '698fbd68efaa28aff9a15861a2419c6b', '1', '7FWPYT', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1378446525, 0, '0', 0),
(693808, '0693808', 47, '176825cc0344d14145eed98c8296eef6', '1', 'sVnXMZ', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1378446526, 0, '0', 0),
(638498, '0638498', 48, '09284c4247deb3e5bb0604dfad8b1e21', '1', '7syZIL', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1378446527, 0, '0', 0),
(672816, '0672816', 49, 'c4be3491b4e28ab1737203639a2e4169', '1', 'AFszwc', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1378446555, 0, '0', 0),
(640205, '0640205', 50, '35abb67b46db2de1b503b187a7f49efc', '1', '5ZaxAt', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1378446555, 0, '0', 0),
(638240, '0638240', 51, 'd0f7e132593d0b2042a57bdb657ff702', '1', 'XnehSp', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1378446586, 0, '0', 0),
(693986, '0693986', 52, '8490594b28670ae8a49a17e19ffe1612', '1', 'G2A216', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1378446586, 0, '0', 0),
(65146, '065146', 53, '5de6483a20858ea16596746b7db8b9b1', '1', 'qjUXC3', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1378446634, 0, '0', 0),
(674057, '0674057', 54, 'b15b76526ec0e5218649bb1715140a50', '1', 'wxe84N', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1378446634, 2, '127.0.0.1', 1378447294),
(696358, '0696358', 55, 'f2a4bdd9759cfd1b4dd4035c42ecb227', '1', '2MuJut', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1378446947, 0, '0', 0),
(655605, '0655605', 56, '39f6690ae2a66097de3378f3bfe6054b', '1', 'ujTYb6', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1378446948, 1, '127.0.0.1', 1378446950),
(696578, '0696578', 57, 'fd4942486e7e810a14c92bb907e1bcfa', '1', 'ekeiLC', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1378455636, 0, '0', 0),
(63899, '063899', 58, 'b3fe18eae6ce6f1f52bf235566601e7b', '1', 'lWMQGM', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1378455636, 1, '127.0.0.1', 1378455638);

-- --------------------------------------------------------

--
-- 表的结构 `kp_poster`
--

CREATE TABLE IF NOT EXISTS `kp_poster` (
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
-- 转存表中的数据 `kp_poster`
--

INSERT INTO `kp_poster` (`id`, `name`, `space_id`, `ad_type`, `start_time`, `end_time`, `add_time`, `listorder`, `ad_status`, `url`, `url_ext`, `pic`, `pic_ext`) VALUES
(1, '幻灯广告1', 1, 'image', 0, 0, 0, 1, 1, '', '', 'http://upload.kids.com/passport2013/0829/20130829165118385.png', ''),
(2, '首页幻灯广告2', 1, '0', 0, 0, 0, 0, 1, '', '', 'http://upload.kids.com/passport2013/0829/20130829165158554.jpg', ''),
(3, '首页幻灯广告3', 1, 'image', 0, 0, 0, 4, 1, 'http://www.163.com/special/0077450P/login_frame.html', '', 'http://upload.kids.com/passport2013/0829/20130829165231318.png', ''),
(4, '幻灯广告4', 1, 'image', 0, 0, 0, 1, 1, '', '', 'http://upload.kids.com/passport2013/0829/20130829165118385.png', ''),
(5, '首页幻灯广告5', 1, '0', 0, 0, 0, 0, 1, '', '', 'http://upload.kids.com/passport2013/0829/20130829165158554.jpg', ''),
(6, '首页幻灯广告6', 1, 'image', 0, 0, 0, 4, 1, 'http://www.163.com/special/0077450P/login_frame.html', '', 'http://upload.kids.com/passport2013/0829/20130829165231318.png', '');

-- --------------------------------------------------------

--
-- 表的结构 `kp_poster_space`
--

CREATE TABLE IF NOT EXISTS `kp_poster_space` (
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
-- 转存表中的数据 `kp_poster_space`
--

INSERT INTO `kp_poster_space` (`id`, `name`, `space_type`, `width`, `height`, `description`, `space_status`) VALUES
(1, '首页幻灯广告', 'imagelist', 400, 500, '首页幻灯图片广告列表', 0);

-- --------------------------------------------------------

--
-- 表的结构 `kp_times`
--

CREATE TABLE IF NOT EXISTS `kp_times` (
  `username` char(40) NOT NULL,
  `ip` char(15) NOT NULL,
  `logintime` int(10) unsigned NOT NULL DEFAULT '0',
  `isadmin` tinyint(1) NOT NULL DEFAULT '0',
  `times` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`username`,`isadmin`)
) ENGINE=MEMORY DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `kp_times`
--

INSERT INTO `kp_times` (`username`, `ip`, `logintime`, `isadmin`, `times`) VALUES
('aaaaaa', '127.0.0.1', 1378437616, 0, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
