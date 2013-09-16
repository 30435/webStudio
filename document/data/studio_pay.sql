-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013-09-16 11:04:09
-- 服务器版本: 5.6.11
-- PHP 版本: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `studio_pay`
--

-- --------------------------------------------------------

--
-- 表的结构 `sp_account`
--

CREATE TABLE IF NOT EXISTS `sp_account` (
  `id` int(8) NOT NULL AUTO_INCREMENT COMMENT '充值记录ID',
  `orderid` char(32) NOT NULL COMMENT '订单号',
  `orderid_plat` varchar(64) NOT NULL COMMENT '平台订单号',
  `payment_code` char(10) NOT NULL COMMENT '支付方式代码',
  `pay_type` enum('1','2') NOT NULL COMMENT '1:充值到游戏；2:充值到账号',
  `webgame_code` char(10) NOT NULL COMMENT '游戏代码',
  `server_id` smallint(5) unsigned NOT NULL COMMENT '游戏服务器ID',
  `server_role` varchar(50) DEFAULT NULL COMMENT '游戏角色',
  `pay_userid` int(8) NOT NULL COMMENT '充值帐号',
  `get_userid` int(8) NOT NULL COMMENT '充值目标帐号',
  `get_username` char(32) NOT NULL COMMENT '被充值用户的用户名',
  `mobile` varchar(11) NOT NULL COMMENT '手机号',
  `payment_rate` float NOT NULL,
  `money` double(10,2) NOT NULL COMMENT '充值金额',
  `money_valid_middle` double(10,2) NOT NULL COMMENT '实际充值金额',
  `money_valid` double(10,2) NOT NULL COMMENT '有效充值金额',
  `account_time` int(10) NOT NULL COMMENT '充值时间',
  `day` char(9) NOT NULL,
  `account_time_valid` int(10) NOT NULL COMMENT '成功充值时间',
  `account_data` varchar(5000) NOT NULL COMMENT '平台传递的数据',
  `account_status` enum('1','0') NOT NULL COMMENT '充值状态，0：未支付，1：成功支付；',
  `handpay_manager` tinyint(4) DEFAULT NULL COMMENT '手工支付管理员账号',
  PRIMARY KEY (`id`),
  UNIQUE KEY `orderid` (`orderid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `sp_account`
--

INSERT INTO `sp_account` (`id`, `orderid`, `orderid_plat`, `payment_code`, `pay_type`, `webgame_code`, `server_id`, `server_role`, `pay_userid`, `get_userid`, `get_username`, `mobile`, `payment_rate`, `money`, `money_valid_middle`, `money_valid`, `account_time`, `day`, `account_time_valid`, `account_data`, `account_status`, `handpay_manager`) VALUES
(1, '2013091030992', '', 'yeepay', '1', '', 0, NULL, 1089692, 1089692, '1089692', '', 0.3, 3.00, 0.00, 0.00, 1378800849, '20130910', 0, '', '0', NULL),
(2, '2013091097972', '', 'yeepay', '1', '', 0, NULL, 1089692, 1089692, '1089692', '', 0.3, 3.00, 3.00, 2.10, 1378800932, '20130910', 1378800977, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:1:"3";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013091097972";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"5dcc18b4cb08c47fc8d64d51e6f5f550";}', '1', NULL),
(3, '2013091031501', '', 'alipay', '1', '', 0, NULL, 1089692, 1089692, '1089692', '', 0, 7.00, 0.00, 0.00, 1378800994, '20130910', 0, '', '0', NULL),
(4, '2013091090875', '', 'alipay', '1', '', 0, NULL, 1089692, 1089692, '1089692', '', 0, 8.00, 0.00, 0.00, 1378801153, '20130910', 0, '', '0', NULL),
(5, '2013091035924', '', 'yeepay', '1', '', 0, NULL, 1089692, 1089692, '1089692', '', 0.3, 5.00, 5.00, 3.50, 1378811214, '20130910', 1378811215, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:1:"5";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013091035924";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"f8e1e2ed3b98a69486077451cafae812";}', '1', NULL),
(6, '2013091296758', '', 'yeepay', '1', '', 0, NULL, 1286042, 1286042, 'bbbbbb', '', 0.3, 33.00, 33.00, 23.10, 1378979861, '20130912', 1378979863, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:2:"33";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013091296758";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"903e8015e2ed49fc1967f70e3c8b73f9";}', '1', NULL),
(7, '2013091333814', '', 'yeepay', '1', '', 0, NULL, 1193559, 1193559, 'aaaaaa', '', 0.3, 7.00, 0.00, 0.00, 1379054245, '20130913', 0, '', '0', NULL),
(8, '2013091380541', '', 'yeepay', '1', '', 0, NULL, 1193559, 1193559, 'aaaaaa', '', 0.3, 5000.00, 5000.00, 3500.00, 1379061768, '20130913', 1379061769, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:4:"5000";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013091380541";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"e08e218eda5dd73b2585322cc6532ea4";}', '1', NULL),
(9, '2013091669757', '', 'yeepay', '1', '', 0, NULL, 0, 1193559, 'aaaaaa', '', 0.3, 4444.00, 4444.00, 3110.80, 1379304113, '20130916', 1379304114, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:4:"4444";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013091669757";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"17705b0775ca895f57e240ae66ab28c0";}', '1', NULL),
(10, '2013091690228', '', 'yeepay', '1', '', 0, NULL, 0, 1193559, 'aaaaaa', '', 0.3, 4444.00, 4444.00, 3110.80, 1379304214, '20130916', 1379304216, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:4:"4444";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013091690228";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"aafe601c7bd86ca058e903bb46904da7";}', '1', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `sp_account_unusual`
--

CREATE TABLE IF NOT EXISTS `sp_account_unusual` (
  `id` int(8) NOT NULL AUTO_INCREMENT COMMENT '充值记录ID',
  `orderid` char(32) NOT NULL COMMENT '订单号',
  `orderid_plat` varchar(64) NOT NULL COMMENT '平台订单号',
  `payment_code` char(10) NOT NULL COMMENT '支付方式代码',
  `pay_type` enum('1','2') NOT NULL COMMENT '1:充值到游戏；2:充值到账号',
  `webgame_code` char(10) NOT NULL COMMENT '游戏代码',
  `server_id` smallint(5) unsigned NOT NULL COMMENT '服务器ID',
  `server_role` varchar(50) DEFAULT NULL COMMENT '游戏角色',
  `pay_userid` int(8) NOT NULL COMMENT '充值帐号',
  `get_userid` int(8) NOT NULL COMMENT '充值目标帐号',
  `get_username` char(32) NOT NULL COMMENT '被充值用户的用户名',
  `mobile` varchar(11) NOT NULL COMMENT '手机号',
  `payment_rate` float NOT NULL,
  `money` double(10,2) NOT NULL COMMENT '充值金额',
  `money_valid_middle` double(10,2) NOT NULL COMMENT '实际充值金额',
  `money_valid` double(10,2) NOT NULL COMMENT '有效充值金额',
  `account_time` int(10) NOT NULL COMMENT '充值时间',
  `day` char(9) NOT NULL,
  `account_time_valid` int(10) NOT NULL COMMENT '成功充值时间',
  `account_data` varchar(5000) NOT NULL COMMENT '平台传递的数据',
  `account_status` enum('4','3','2') NOT NULL COMMENT '充值状态，2：验证失败，3：未知支付，4：重复支付；',
  `hand_manager` tinyint(4) DEFAULT NULL COMMENT '手工支付管理员账号',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `sp_member_pay`
--

CREATE TABLE IF NOT EXISTS `sp_member_pay` (
  `userid` int(8) unsigned NOT NULL COMMENT '用户ID',
  `username` char(32) NOT NULL COMMENT '用户名',
  `money` float unsigned NOT NULL DEFAULT '0' COMMENT '用户余额',
  `want_money` float NOT NULL COMMENT '用户充值金额',
  `want_times` smallint(5) unsigned NOT NULL COMMENT '用户充值次数',
  `valid_money_middle` float NOT NULL,
  `valid_money` float NOT NULL COMMENT '用户实际充值金额',
  `valid_times` int(4) NOT NULL COMMENT '用户实际充值次数',
  `lasttime_account` int(10) NOT NULL,
  `pay_times` smallint(5) NOT NULL,
  `pay_money` float NOT NULL,
  `lasttime_pay` int(10) NOT NULL,
  `locktime` int(10) NOT NULL,
  `unusual_money` decimal(10,2) NOT NULL COMMENT '异常金额',
  PRIMARY KEY (`userid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `sp_member_pay`
--

INSERT INTO `sp_member_pay` (`userid`, `username`, `money`, `want_money`, `want_times`, `valid_money_middle`, `valid_money`, `valid_times`, `lasttime_account`, `pay_times`, `pay_money`, `lasttime_pay`, `locktime`, `unusual_money`) VALUES
(1089692, '1089692', 5.6, 26, 5, 8, 5.6, 2, 1378811215, 0, 0, 0, 0, '0.00'),
(1286042, 'bbbbbb', 23.1, 33, 1, 33, 23.1, 1, 1378979863, 0, 0, 0, 0, '0.00'),
(1193559, 'aaaaaa', 2458.8, 4444, 1, 4444, 3110.8, 1, 1379304216, 81, 5096, 1379310332, 1379312732, '0.00');

-- --------------------------------------------------------

--
-- 表的结构 `sp_pay`
--

CREATE TABLE IF NOT EXISTS `sp_pay` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '支付ID',
  `orderid` char(32) NOT NULL,
  `orderid_plat` char(32) NOT NULL,
  `username_pay` char(20) NOT NULL,
  `userid_pay` int(8) NOT NULL,
  `userid` int(8) unsigned NOT NULL COMMENT '用户ID',
  `username` char(20) NOT NULL COMMENT '用户名',
  `money` float NOT NULL COMMENT '支付金额',
  `webgame_code` char(10) NOT NULL COMMENT '游戏代码',
  `serverid` smallint(5) unsigned NOT NULL COMMENT '游戏服务器ID',
  `server_role` varchar(50) DEFAULT NULL,
  `pay_time` int(10) NOT NULL COMMENT '支付时间',
  `day` char(9) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=83 ;

--
-- 转存表中的数据 `sp_pay`
--

INSERT INTO `sp_pay` (`id`, `orderid`, `orderid_plat`, `username_pay`, `userid_pay`, `userid`, `username`, `money`, `webgame_code`, `serverid`, `server_role`, `pay_time`, `day`) VALUES
(1, '2013091686282', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379303909, '20130916'),
(2, '2013091656122', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379304117, '20130916'),
(3, '2013091682649', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379304236, '20130916'),
(4, '2013091643008', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379304297, '20130916'),
(5, '2013091624040', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379304298, '20130916'),
(6, '2013091601781', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379304299, '20130916'),
(7, '2013091613020', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379304300, '20130916'),
(8, '2013091679596', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379304363, '20130916'),
(9, '2013091609158', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379304621, '20130916'),
(10, '2013091629891', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379304637, '20130916'),
(11, '2013091600405', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379304638, '20130916'),
(12, '2013091641721', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379304638, '20130916'),
(13, '2013091699630', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379304670, '20130916'),
(14, '2013091694209', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379304671, '20130916'),
(15, '2013091623704', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379304671, '20130916'),
(16, '2013091690671', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379304671, '20130916'),
(17, '2013091674053', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379304672, '20130916'),
(18, '2013091625195', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379304672, '20130916'),
(19, '2013091683641', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379304672, '20130916'),
(20, '2013091616787', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379304672, '20130916'),
(21, '2013091649483', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379304699, '20130916'),
(22, '2013091621496', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379304856, '20130916'),
(23, '2013091646604', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379304930, '20130916'),
(24, '2013091653735', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379304973, '20130916'),
(25, '2013091696994', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379305007, '20130916'),
(26, '2013091608047', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379305084, '20130916'),
(27, '2013091634222', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379305104, '20130916'),
(28, '2013091684464', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379305105, '20130916'),
(29, '2013091627214', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379305106, '20130916'),
(30, '2013091660620', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379305106, '20130916'),
(31, '2013091624981', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379305106, '20130916'),
(32, '2013091600654', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379305107, '20130916'),
(33, '2013091665410', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379305107, '20130916'),
(34, '2013091651901', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379305107, '20130916'),
(35, '2013091625227', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379305107, '20130916'),
(36, '2013091619660', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379305107, '20130916'),
(37, '2013091639906', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379305107, '20130916'),
(38, '2013091612765', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379305108, '20130916'),
(39, '2013091653028', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379305108, '20130916'),
(40, '2013091664926', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379305108, '20130916'),
(41, '2013091604885', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379305108, '20130916'),
(42, '2013091655202', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379305108, '20130916'),
(43, '2013091673102', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379305108, '20130916'),
(44, '2013091621165', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379305108, '20130916'),
(45, '2013091679499', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379305108, '20130916'),
(46, '2013091652570', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379305108, '20130916'),
(47, '2013091651356', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379305108, '20130916'),
(48, '2013091655360', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379305108, '20130916'),
(49, '2013091653231', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379305108, '20130916'),
(50, '2013091661239', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379305108, '20130916'),
(51, '2013091604536', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379305108, '20130916'),
(52, '2013091635394', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379305108, '20130916'),
(53, '2013091625322', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379305108, '20130916'),
(54, '2013091600252', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379305109, '20130916'),
(55, '2013091630633', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379305109, '20130916'),
(56, '2013091644600', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379305109, '20130916'),
(57, '2013091642846', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379305109, '20130916'),
(58, '2013091697999', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379305109, '20130916'),
(59, '2013091631336', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379305109, '20130916'),
(60, '2013091660400', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379305109, '20130916'),
(61, '2013091616860', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379305109, '20130916'),
(62, '2013091697790', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379305109, '20130916'),
(63, '2013091696823', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379305109, '20130916'),
(64, '2013091677467', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379305109, '20130916'),
(65, '2013091652801', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379305109, '20130916'),
(66, '2013091682557', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379305109, '20130916'),
(67, '2013091632360', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379305109, '20130916'),
(68, '2013091600650', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379305109, '20130916'),
(69, '2013091631232', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379305109, '20130916'),
(70, '2013091611705', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379305109, '20130916'),
(71, '2013091643575', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379305109, '20130916'),
(72, '2013091623852', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379305109, '20130916'),
(73, '2013091699948', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379305109, '20130916'),
(74, '2013091675739', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379305109, '20130916'),
(75, '2013091617406', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379305118, '20130916'),
(76, '2013091652114', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379305119, '20130916'),
(77, '2013091628632', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379305119, '20130916'),
(78, '2013091615852', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379305119, '20130916'),
(79, '2013091647215', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379305120, '20130916'),
(80, '2013091619479', '', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, '', 1379305120, '20130916'),
(81, '2013091692174', '', '', 0, 1193559, 'aaaaaa', 100, 'shenxd', 1, '', 1379305165, '20130916'),
(82, '2013091674070', '', '', 0, 1193559, 'aaaaaa', 6, 'shenxd', 1, '', 1379310332, '20130916');

-- --------------------------------------------------------

--
-- 表的结构 `sp_payment`
--

CREATE TABLE IF NOT EXISTS `sp_payment` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT COMMENT '支付方式ID',
  `code` char(10) NOT NULL COMMENT '代码',
  `name` varchar(20) NOT NULL COMMENT '名称',
  `description` varchar(1000) NOT NULL COMMENT '描述',
  `thumb` varchar(100) NOT NULL COMMENT '图标',
  `listorder` tinyint(3) unsigned NOT NULL COMMENT '排序',
  `rate` float NOT NULL,
  `payment_status` enum('1','0') NOT NULL COMMENT '状态，0：暂停使用；1：可正常使用',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- 转存表中的数据 `sp_payment`
--

INSERT INTO `sp_payment` (`id`, `code`, `name`, `description`, `thumb`, `listorder`, `rate`, `payment_status`) VALUES
(1, 'yeepay', '银行卡充值（易宝）', '银行卡支付说明：<br />\n1、您必须开通了网上银行业务；<br />\n2、网上银行开通办法请咨询当地所属银行；<br />\n3、请您关闭所有屏蔽弹出窗口之类的功能，否则在线支付将无法继续，比如：3721、上网助手、google toolbar、alexa toolbar、baidu等；<br />\n4、如果您用信用卡支付，请确认该信用卡的网上交易限额大于等于您的充值金额；<br />\n5、如果有疑问，请联系我们在线客服或拨打客服电话。<br />\n6、<font  style="color:#cc0000">请充值时务必确认好您的充值金额准确无误后再进行充值，避免输错金额导致的失误，如因未仔细确认金额造成的充值问题，我们将一律不予处理此类退款申诉。</font>\n', '1', 100, 0.3, '1'),
(2, 'alipay', '支付宝', '支付宝支付说明：<br />\n1、您必须开通了网上银行业务；<br />\n2、使用支付宝网银支付，对消费者来说，目前不需要任何的手续费；<br />\n3、请您关闭所有屏蔽弹出窗口之类的功能，否则在线支付将无法继续，比如：3721、上网助手、google toolbar、alexa toolbar、baidu等；<br />\n4、请使用IE，TT，Maxthon浏览器以确保支付宝充值成功。<br />\n5、如果有疑问，请联系我们在线客服或拨打客服电话。<br />\n6、请您每次充值务必到支付页面进行提交，并按照充值流程完成充值，不要单独付款给我们的支付宝账户，避免出现不必要的损失！<br />\n7、<font style="color:#cc0000">请充值时务必确认好您的充值金额准确无误后再进行充值，避免输错金额导致的失误，如因未仔细确认金额造成的充值问题，我们将一律不予处理此类退款申诉。</font>\n', '1', 99, 0, '1'),
(8, 'ybshenzx', '神州行充值卡', '神州行充值卡说明：<br />\n1、请确认您的充值卡是序列号17位、密码18位，由中国移动发行的全国通用的神州行充值卡，而且是没有使用过的。<br />\n2、请务必使用与您选择的面额相同的神州行卡进行支付，如果选择金额额度不正确会导致卡面金额丢失。<br />\n3、本充值方式还支持江苏、浙江、广东、辽宁、福建的神州行地方卡。支持300和500元面额。<br />\n4、如果有疑问，请联系我们在线客服或拨打客服电话。\n', '1', 97, 0.04, '1'),
(14, 'ybtelecom', '电信卡', '电信卡<br />\n电信卡', '', 0, 0.04, '1'),
(20, 'myself', '诺币兑换', '', '0', 0, 0, '1');

-- --------------------------------------------------------

--
-- 表的结构 `sp_paymonth`
--

CREATE TABLE IF NOT EXISTS `sp_paymonth` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT COMMENT '包月ID',
  `name` varchar(20) NOT NULL COMMENT '名称',
  `webgame_code` char(10) NOT NULL,
  `money` int(4) unsigned NOT NULL COMMENT '费用',
  `month` tinyint(4) NOT NULL COMMENT '单位',
  `thumb` varchar(100) NOT NULL COMMENT '图标',
  `listorder` tinyint(3) unsigned NOT NULL COMMENT '排序',
  PRIMARY KEY (`id`),
  UNIQUE KEY `webgamemoney` (`webgame_code`,`money`),
  UNIQUE KEY `webgamemonth` (`webgame_code`,`month`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `sp_paymonth`
--

INSERT INTO `sp_paymonth` (`id`, `name`, `webgame_code`, `money`, `month`, `thumb`, `listorder`) VALUES
(1, '诺瓦包月', 'nova', 5, 2, 'http://upload.ci.com/passport2013/0910/20130910144500693.jpg', 2),
(2, '诺瓦包年', 'seer', 50, 0, 'http://upload.ci.com/passport2013/0910/20130910144532119.jpg', 2),
(3, '诺币兑换', 'nova', 10, 1, 'http://upload.ci.com/passport2013/0912/20130912172705850.png', 66);

-- --------------------------------------------------------

--
-- 表的结构 `sp_pay_paymonth`
--

CREATE TABLE IF NOT EXISTS `sp_pay_paymonth` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '支付ID',
  `paymonth_id` smallint(4) NOT NULL COMMENT '支付ID',
  `orderid` char(32) NOT NULL,
  `orderid_plat` char(32) NOT NULL,
  `username_pay` char(20) NOT NULL,
  `userid_pay` int(8) NOT NULL,
  `userid` int(8) unsigned NOT NULL COMMENT '用户ID',
  `username` char(20) NOT NULL COMMENT '用户名',
  `money` float NOT NULL COMMENT '支付金额',
  `month` tinyint(1) NOT NULL COMMENT '服务月数',
  `webgame_code` char(10) NOT NULL COMMENT '游戏代码',
  `pay_time` int(10) NOT NULL COMMENT '支付时间',
  `day` char(9) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `sp_pay_setting`
--

CREATE TABLE IF NOT EXISTS `sp_pay_setting` (
  `id` tinyint(2) NOT NULL AUTO_INCREMENT COMMENT '配置ID',
  `pay_start` enum('1','0') NOT NULL COMMENT '是否开启支付 1 表示开启',
  `min_money` double NOT NULL COMMENT '最小金额',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
