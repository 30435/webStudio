-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013-09-29 11:58:49
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
  `type` char(10) NOT NULL,
  `webgame_code` char(10) NOT NULL COMMENT '游戏代码',
  `server_id` smallint(5) unsigned NOT NULL COMMENT '游戏服务器ID',
  `server_role` varchar(50) DEFAULT NULL COMMENT '游戏角色',
  `paymonth_id` smallint(5) NOT NULL,
  `pay_userid` int(8) NOT NULL COMMENT '操作充值者id',
  `pay_username` varchar(20) NOT NULL,
  `userid` int(8) NOT NULL COMMENT '充值目标帐号',
  `username` char(32) NOT NULL COMMENT '被充值用户的用户名',
  `mobile` varchar(11) NOT NULL COMMENT '手机号',
  `payment_rate` float NOT NULL,
  `money` double(10,2) NOT NULL COMMENT '充值金额',
  `money_valid_middle` double(10,2) NOT NULL COMMENT '实际充值金额',
  `money_valid` double(10,2) NOT NULL COMMENT '有效充值金额',
  `account_time` int(10) NOT NULL COMMENT '充值时间',
  `day` char(9) NOT NULL,
  `account_time_valid` int(10) NOT NULL COMMENT '成功充值时间',
  `account_data` varchar(5000) NOT NULL COMMENT '平台传递的数据',
  `status` enum('1','0') NOT NULL COMMENT '充值状态，0：未支付，1：成功支付；',
  `handpay_manager` tinyint(4) DEFAULT NULL COMMENT '手工支付管理员账号',
  PRIMARY KEY (`id`),
  UNIQUE KEY `orderid` (`orderid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=47 ;

--
-- 转存表中的数据 `sp_account`
--

INSERT INTO `sp_account` (`id`, `orderid`, `orderid_plat`, `payment_code`, `type`, `webgame_code`, `server_id`, `server_role`, `paymonth_id`, `pay_userid`, `pay_username`, `userid`, `username`, `mobile`, `payment_rate`, `money`, `money_valid_middle`, `money_valid`, `account_time`, `day`, `account_time_valid`, `account_data`, `status`, `handpay_manager`) VALUES
(1, '2013092226975', '', 'yeepay', 'touser', '', 0, '', 0, 0, '', 1193559, 'aaaaaa', '', 0.3, 700.00, 700.00, 490.00, 1379828316, '20130922', 1379828328, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:3:"700";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013092226975";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"bc893b5ae1aad92b63f037c9bd236241";}', '1', NULL),
(2, '2013092254613', '', 'yeepay', 'touser', '', 0, '', 0, 1193559, 'aaaaaa', 1193559, 'aaaaaa', '', 0.3, 1000.00, 1000.00, 700.00, 1379830136, '20130922', 1379830142, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:4:"1000";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013092254613";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"a1410a6e41e8ebb514c82ea45daf2142";}', '1', NULL),
(3, '2013092334525', '', 'yeepay', 'touser', '', 0, '', 0, 1193559, 'aaaaaa', 1193559, 'aaaaaa', '', 0.3, 1000.00, 1000.00, 700.00, 1379904433, '20130923', 1379904438, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:4:"1000";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013092334525";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"86cdeba84e362a5919dced29e65005e4";}', '1', NULL),
(4, '2013092460074', '', 'yeepay', 'towebgame', 'nova', 0, '', 0, 1193559, 'aaaaaa', 1193559, 'aaaaaa', '', 0.3, 8.00, 8.00, 5.60, 1380020182, '20130924', 1380020184, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:1:"8";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013092460074";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"27454a613dca4f15be1472f6d5246769";}', '1', NULL),
(5, '2013092484735', '', 'yeepay', 'towebgame', 'nova', 0, '', 0, 1193559, 'aaaaaa', 1193559, 'aaaaaa', '', 0.3, 8.00, 8.00, 5.60, 1380020843, '20130924', 1380020844, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:1:"8";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013092484735";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"211640d395ca97dae586f8c34032833c";}', '1', NULL),
(6, '2013092436395', '', 'yeepay', 'touser', '', 0, '', 0, 1193559, 'aaaaaa', 1193559, 'aaaaaa', '', 0.3, 7.00, 7.00, 4.90, 1380021175, '20130924', 1380021177, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:1:"7";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013092436395";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"1ffb04be10822f4cd88178b1d9e9ea6a";}', '1', NULL),
(7, '2013092486571', '', 'yeepay', 'touser', '', 0, '', 0, 1193559, 'aaaaaa', 1193559, 'aaaaaa', '', 0.3, 7.00, 7.00, 4.90, 1380021188, '20130924', 1380021190, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:1:"7";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013092486571";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"c2f8cbfd9b5c37e0a3a2e51d9707bbcb";}', '1', NULL),
(8, '2013092404581', '', 'yeepay', 'towebgame', 'nova', 0, '', 0, 1193559, 'aaaaaa', 1193559, 'aaaaaa', '', 0.3, 8.00, 8.00, 5.60, 1380021234, '20130924', 1380021236, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:1:"8";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013092404581";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"65823ee2e1f08d38dca3e19e68265aa2";}', '1', NULL),
(9, '2013092458138', '', 'yeepay', 'touser', '', 0, '', 0, 1193559, 'aaaaaa', 1193559, 'aaaaaa', '', 0.3, 7.00, 7.00, 4.90, 1380021243, '20130924', 1380021249, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:1:"7";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013092458138";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"addbe467b5ec5d2d7bf1420d10e16eda";}', '1', NULL),
(10, '2013092416579', '', 'yeepay', 'towebgame', 'nova', 0, '', 0, 1193559, 'aaaaaa', 1193559, 'aaaaaa', '', 0.3, 4.00, 4.00, 2.80, 1380021261, '20130924', 1380021265, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:1:"4";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013092416579";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"134235812a971140f64006bc04e2a6db";}', '1', NULL),
(11, '2013092417966', '', 'yeepay', 'towebgame', 'nova', 0, '', 0, 1193559, 'aaaaaa', 1193559, 'aaaaaa', '', 0.3, 8.00, 8.00, 5.60, 1380025813, '20130924', 1380025814, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:1:"8";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013092417966";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"b366002a1f8e6c7eb9631114ca22c4da";}', '1', NULL),
(12, '2013092501383', '', 'yeepay', '', '', 0, NULL, 0, 0, '', 0, '', '', 0, 0.00, 7.00, 0.00, 0, '', 1380073185, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:1:"7";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013092501383";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"09ad3be5a0438904334ce6e24d9cbc00";}', '', NULL),
(13, '2013092520213', '', 'yeepay', '', '', 0, NULL, 0, 0, '', 0, '', '', 0, 0.00, 8.00, 0.00, 0, '', 1380073205, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:1:"8";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013092520213";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"5b49ababa368055e19e57f367cc49cb0";}', '', NULL),
(14, '2013092521421', '', 'yeepay', '', '', 0, NULL, 0, 0, '', 0, '', '', 0, 0.00, 4.00, 0.00, 0, '', 1380073306, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:1:"4";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013092521421";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"6cbb907dd7077764fd2c2a4396c64473";}', '', NULL),
(15, '2013092575087', '', 'yeepay', 'towebgame', 'nova', 0, '', 0, 1193559, 'aaaaaa', 1193559, 'aaaaaa', '', 0.3, 7.00, 7.00, 4.90, 1380108276, '20130925', 1380108278, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:1:"7";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013092575087";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"fe7120c6578e5b0915b1769f4072a665";}', '1', NULL),
(16, '2013092594006', '', 'yeepay', 'towebgame', 'nova', 0, '', 0, 1193559, 'aaaaaa', 1193559, 'aaaaaa', '', 0.3, 3.00, 3.00, 2.10, 1380109419, '20130925', 1380109421, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:1:"3";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013092594006";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"998154182bbc83736c93aa36f11345e6";}', '1', NULL),
(17, '2013092970396', '', 'yeepay', 'topaymonth', 'nova', 0, '', 3, 0, '', 1193559, 'aaaaaa', '', 0.3, 15.00, 15.00, 10.50, 1380417721, '20130929', 1380417722, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:2:"15";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013092970396";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"4f93e231ecb976dbc3311a9c206b0341";}', '1', NULL),
(18, '2013092984940', '', 'yeepay', 'towebgame', 'shenxd', 1, 'undefined', 0, 17183510, '17183510', 17183510, '17183510', '', 0.3, 3.00, 3.00, 2.10, 1380426336, '20130929', 1380426337, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:1:"3";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013092984940";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"57ef3eaa654f09f484571ae6cc891fd6";}', '1', NULL),
(19, '2013092944772', '', 'yeepay', 'towebgame', 'nova', 0, '', 0, 17183510, '17183510', 17183510, '17183510', '', 0.3, 8.00, 8.00, 5.60, 1380433342, '20130929', 1380433343, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:1:"8";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013092944772";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"fb8fbf0b730bfdf963f5c6ee28ddcc80";}', '1', NULL),
(20, '2013092948249', '', 'yeepay', 'towebgame', 'nova', 0, '', 0, 17183510, '17183510', 1193559, 'aaaaaa', '', 0.3, 8.00, 8.00, 5.60, 1380433378, '20130929', 1380433380, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:1:"8";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013092948249";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"f01935e9541123ada779990a6f0cf043";}', '1', NULL),
(21, '2013092941894', '', 'yeepay', 'towebgame', 'shenxd', 1, 'undefined', 0, 17183510, '17183510', 17183510, '17183510', '', 0.3, 99.00, 0.00, 0.00, 1380435492, '20130929', 0, '', '0', NULL),
(22, '2013092929732', '', 'yeepay', 'towebgame', 'shenxd', 1, 'undefined', 0, 17183510, '17183510', 17183510, '17183510', '', 0.3, 1.00, 0.00, 0.00, 1380435527, '20130929', 0, '', '0', NULL),
(23, '2013092915635', '', 'yeepay', 'touser', '', 0, '', 0, 17183510, '17183510', 17183510, '17183510', '', 0.3, 12.00, 12.00, 8.40, 1380438538, '20130929', 1380438539, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:2:"12";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013092915635";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"b3b9c65fe3cf0cbb9b1e258164ab803c";}', '1', NULL),
(24, '2013092932091', '', 'yeepay', 'touser', '', 0, '', 0, 17183510, '17183510', 1193559, 'aaaaaa', '', 0.3, 3.00, 3.00, 2.10, 1380438556, '20130929', 1380438558, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:1:"3";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013092932091";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"6288714fbe3585008a02cc3e0b172c57";}', '1', NULL),
(25, '2013092970431', '', 'yeepay', 'topaymonth', 'nova', 0, '', 1, 17183510, '17183510', 17183510, '17183510', '', 0.3, 8.00, 8.00, 5.60, 1380438590, '20130929', 1380438592, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:1:"8";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013092970431";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"8912bf92676a1e5d514e7d2d4888190d";}', '1', NULL),
(26, '2013092959783', '', 'yeepay', 'touser', '', 0, '', 0, 0, '', 1193559, 'aaaaaa', '', 0.3, 333.00, 333.00, 233.10, 1380441077, '20130929', 1380441078, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:3:"333";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013092959783";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"2dd8f29ef2c16c141bf264ff2467d7cd";}', '1', NULL),
(27, '2013092925449', '', 'yeepay', 'topaymonth', 'nova', 0, '', 1, 0, '', 1193559, 'aaaaaa', '', 0.3, 8.00, 8.00, 5.60, 1380441098, '20130929', 1380441100, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:1:"8";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013092925449";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"1d3b108892f8b55aef0dbf8b9aa0c6b5";}', '1', NULL),
(28, '2013092914825', '', 'yeepay', 'towebgame', 'nova', 0, '', 0, 0, '', 1193559, 'aaaaaa', '', 0.3, 10.00, 10.00, 7.00, 1380441123, '20130929', 1380441124, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:2:"10";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013092914825";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"e71896465a034ff54606d37485cd2669";}', '1', NULL),
(29, '2013092983206', '', 'yeepay', 'towebgame', 'shenxd', 1, 'undefined', 0, 0, '', 1193559, 'aaaaaa', '', 0.3, 3.00, 3.00, 2.10, 1380441148, '20130929', 1380441149, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:1:"3";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013092983206";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"c497fb2d8141d4edc44e9cbe21a577a1";}', '1', NULL),
(30, '2013092963382', '', 'yeepay', 'towebgame', 'shenxd', 1, 'undefined', 0, 0, '', 1193559, 'aaaaaa', '', 0.3, 333.00, 333.00, 233.10, 1380441168, '20130929', 1380441172, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:3:"333";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013092963382";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"23e57c03d0c6d4a83cae3c30ddc1313e";}', '1', NULL),
(31, '2013092978175', '', 'yeepay', 'towebgame', 'shenxd', 1, 'undefined', 0, 0, '', 1193559, 'aaaaaa', '', 0.3, 3.00, 3.00, 2.10, 1380441278, '20130929', 1380441279, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:1:"3";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013092978175";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"8dc51c66c0a060a1ca70ca0a26f87163";}', '1', NULL),
(32, '2013092986240', '', 'yeepay', 'towebgame', 'shenxd', 1, 'undefined', 0, 0, '', 1193559, 'aaaaaa', '', 0.3, 333.00, 333.00, 233.10, 1380441531, '20130929', 1380441532, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:3:"333";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013092986240";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"78bbcea76ea287a64fb01075ad6e5540";}', '1', NULL),
(33, '2013092971933', '', 'yeepay', 'towebgame', 'shenxd', 1, 'undefined', 0, 0, '', 1193559, 'aaaaaa', '', 0.3, 333.00, 333.00, 233.10, 1380441541, '20130929', 1380441542, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:3:"333";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013092971933";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"60f3a42961b5d526323b27fd06d2330f";}', '1', NULL),
(34, '2013092902344', '', 'yeepay', 'towebgame', 'nova', 0, '', 0, 0, '', 1193559, 'aaaaaa', '', 0.3, 33.00, 33.00, 23.10, 1380441616, '20130929', 1380441617, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:2:"33";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013092902344";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"85596d6d2266a0dddf1e2ab0cb623003";}', '1', NULL),
(35, '2013092954211', '', 'yeepay', 'touser', '', 0, '', 0, 19028947, '19028947', 19028947, '19028947', '', 0.3, 2.00, 2.00, 1.40, 1380441680, '20130929', 1380441681, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:1:"2";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013092954211";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"a0316d4fd8b9a909d8f02bc68b719ef3";}', '1', NULL),
(36, '2013092969372', '', 'yeepay', 'topaymonth', 'seer', 0, '', 2, 19028947, '19028947', 19028947, '19028947', '', 0.3, 72.00, 72.00, 50.40, 1380441692, '20130929', 1380441693, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:2:"72";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013092969372";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"06bf118d5c05dd8d3d41ef4c004c5df8";}', '1', NULL),
(37, '2013092972221', '', 'yeepay', 'topaymonth', 'nova', 0, '', 3, 19028947, '19028947', 19028947, '19028947', '', 0.3, 15.00, 15.00, 10.50, 1380441706, '20130929', 1380441707, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:2:"15";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013092972221";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"e76185adc3e804d8f80d61d6847bd562";}', '1', NULL),
(38, '2013092923052', '', 'yeepay', 'topaymonth', 'nova', 0, '', 1, 19028947, '19028947', 19028947, '19028947', '', 0.3, 8.00, 8.00, 5.60, 1380441758, '20130929', 1380441759, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:1:"8";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013092923052";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"8472b44108f5158c8e80a6f76e832251";}', '1', NULL),
(39, '2013092961965', '', 'yeepay', 'towebgame', 'shenxd', 1, 'undefined', 0, 19028947, '19028947', 19028947, '19028947', '', 0.3, 33.00, 33.00, 23.10, 1380441793, '20130929', 1380441794, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:2:"33";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013092961965";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"800ed9e27aacdd24476287f75a8d973e";}', '1', NULL),
(40, '2013092919575', '', 'yeepay', 'towebgame', 'shenxd', 1, 'undefined', 0, 19028947, '19028947', 1193559, 'aaaaaa', '', 0.3, 1.00, 1.00, 0.70, 1380441811, '20130929', 1380441812, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:1:"1";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013092919575";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"19f43e5aa1720d2f1768c96268ef36ba";}', '1', NULL),
(41, '2013092984565', '', 'yeepay', 'towebgame', 'shenxd', 1, 'undefined', 0, 19028947, '19028947', 1193559, 'aaaaaa', '', 0.3, 10.00, 10.00, 7.00, 1380441845, '20130929', 1380441846, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:2:"10";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013092984565";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"12da1c544b670a75609f9cf8408dddc0";}', '1', NULL),
(42, '2013092991008', '', 'yeepay', 'touser', '', 0, '', 0, 19028947, '19028947', 19028947, '19028947', '', 0.3, 1000.00, 1000.00, 700.00, 1380443349, '20130929', 1380443352, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:4:"1000";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013092991008";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"590f47a37c3c2df2510fbd26d5df5a8a";}', '1', NULL),
(43, '2013092917018', '', 'yeepay', '', '', 0, NULL, 0, 0, '', 0, '', '', 0, 0.00, 1000.00, 0.00, 0, '', 1380443441, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:4:"1000";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013092917018";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"ea7582041cdb1559cc87e8c1f6c36f8f";}', '', NULL),
(44, '2013092938095', '', 'yeepay', '', '', 0, NULL, 0, 0, '', 0, '', '', 0, 0.00, 1000.00, 0.00, 0, '', 1380443478, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:4:"1000";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013092938095";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"e1ae2868001d0ad0b29ca204c437cb77";}', '', NULL),
(45, '2013092961199', '', 'yeepay', 'touser', '', 0, '', 0, 19028947, '19028947', 19028947, '19028947', '', 0.3, 200.00, 200.00, 140.00, 1380443549, '20130929', 1380443553, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:3:"200";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013092961199";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"dcbc64d31f83a4f78cf7281fc9a437de";}', '1', NULL),
(46, '2013092977390', '', 'yeepay', 'touser', '', 0, '', 0, 19028947, '19028947', 19028947, '19028947', '', 0.3, 1000.00, 1000.00, 700.00, 1380443561, '20130929', 1380443563, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:4:"1000";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013092977390";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"e777bdaa163bd3c8c1551759ba5b7289";}', '1', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `sp_account_unusual`
--

CREATE TABLE IF NOT EXISTS `sp_account_unusual` (
  `id` int(8) NOT NULL AUTO_INCREMENT COMMENT '充值记录ID',
  `orderid` char(32) NOT NULL COMMENT '订单号',
  `orderid_plat` varchar(64) NOT NULL COMMENT '平台订单号',
  `payment_code` char(10) NOT NULL COMMENT '支付方式代码',
  `type` enum('1','2') NOT NULL COMMENT '1:充值到游戏；2:充值到账号',
  `webgame_code` char(10) NOT NULL COMMENT '游戏代码',
  `server_id` smallint(5) unsigned NOT NULL COMMENT '服务器ID',
  `server_role` varchar(50) DEFAULT NULL COMMENT '游戏角色',
  `pay_userid` int(8) NOT NULL COMMENT '充值帐号',
  `pay_username` varchar(20) NOT NULL,
  `userid` int(8) NOT NULL COMMENT '充值目标帐号',
  `username` char(32) NOT NULL COMMENT '被充值用户的用户名',
  `mobile` varchar(11) NOT NULL COMMENT '手机号',
  `payment_rate` float NOT NULL,
  `money` double(10,2) NOT NULL COMMENT '充值金额',
  `money_valid_middle` double(10,2) NOT NULL COMMENT '实际充值金额',
  `money_valid` double(10,2) NOT NULL COMMENT '有效充值金额',
  `account_time` int(10) NOT NULL COMMENT '充值时间',
  `day` char(9) NOT NULL,
  `account_time_valid` int(10) NOT NULL COMMENT '成功充值时间',
  `account_data` varchar(5000) NOT NULL COMMENT '平台传递的数据',
  `status` enum('4','3','2') NOT NULL COMMENT '充值状态，2：验证失败，3：未知支付，4：重复支付；',
  `hand_manager` tinyint(4) DEFAULT NULL COMMENT '手工支付管理员账号',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `sp_account_unusual`
--

INSERT INTO `sp_account_unusual` (`id`, `orderid`, `orderid_plat`, `payment_code`, `type`, `webgame_code`, `server_id`, `server_role`, `pay_userid`, `pay_username`, `userid`, `username`, `mobile`, `payment_rate`, `money`, `money_valid_middle`, `money_valid`, `account_time`, `day`, `account_time_valid`, `account_data`, `status`, `hand_manager`) VALUES
(1, '2013092460074', '', 'yeepay', '1', '', 0, NULL, 0, '', 0, '', '', 0, 0.00, 8.00, 0.00, 0, '', 1380020825, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:1:"8";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013092460074";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"27454a613dca4f15be1472f6d5246769";}', '4', NULL),
(2, '2013092938095', '', 'yeepay', '1', '', 0, NULL, 0, '', 0, '', '', 0, 0.00, 1000.00, 0.00, 0, '', 1380443481, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:4:"1000";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013092938095";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"e1ae2868001d0ad0b29ca204c437cb77";}', '4', NULL);

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
(1193559, 'aaaaaa', 171.1, 4193, 27, 4193, 2935.1, 27, 1380441846, 31, 2764, 1380443653, 1380443653, '0.00'),
(17183510, '17183510', 6.7, 131, 6, 31, 21.7, 4, 1380438592, 3, 15, 1380439770, 1380439770, '0.00'),
(19028947, '19028947', 1567, 2330, 8, 2330, 1631, 8, 1380443563, 8, 64, 1380443664, 1380443664, '0.00');

-- --------------------------------------------------------

--
-- 表的结构 `sp_pay`
--

CREATE TABLE IF NOT EXISTS `sp_pay` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '支付ID',
  `orderid` char(32) NOT NULL,
  `orderid_account` char(32) NOT NULL,
  `get_username` char(20) NOT NULL,
  `get_userid` int(8) NOT NULL,
  `userid` int(8) unsigned NOT NULL COMMENT '用户ID',
  `username` char(20) NOT NULL COMMENT '用户名',
  `money` float NOT NULL COMMENT '支付金额',
  `webgame_code` char(10) NOT NULL COMMENT '游戏代码',
  `server_id` smallint(5) unsigned NOT NULL COMMENT '游戏服务器ID',
  `server_role` varchar(50) DEFAULT NULL,
  `pay_time` int(10) NOT NULL COMMENT '支付时间',
  `day` char(9) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=43 ;

--
-- 转存表中的数据 `sp_pay`
--

INSERT INTO `sp_pay` (`id`, `orderid`, `orderid_account`, `get_username`, `get_userid`, `userid`, `username`, `money`, `webgame_code`, `server_id`, `server_role`, `pay_time`, `day`) VALUES
(1, '2013092202098', '0', '', 0, 1193559, 'aaaaaa', 19, 'shenxd', 1, '', 1379831359, '20130922'),
(2, '2013092395373', '0', '', 0, 1193559, 'aaaaaa', 100, 'shenxd', 1, '', 1379904474, '20130923'),
(3, '2013092539765', '2013092594006', '', 0, 1193559, 'aaaaaa', 2, 'nova', 0, '', 1380109421, '20130925'),
(4, '2013092901368', '2013092944772', '', 0, 17183510, '17183510', 5, 'nova', 0, '', 1380433343, '20130929'),
(5, '2013092965130', '2013092948249', '', 0, 1193559, 'aaaaaa', 5, 'nova', 0, '', 1380433380, '20130929'),
(6, '2013092954243', '2013092970431', '', 0, 17183510, '17183510', 5, 'nova', 0, '', 1380438592, '20130929'),
(7, '2013092956036', '0', '', 0, 17183510, '17183510', 5, 'nova', 0, '', 1380439770, '20130929'),
(8, '2013092935498', '2013092925449', '', 0, 1193559, 'aaaaaa', 5, 'nova', 0, '', 1380441100, '20130929'),
(9, '2013092975461', '2013092914825', '', 0, 1193559, 'aaaaaa', 7, 'nova', 0, '', 1380441124, '20130929'),
(10, '2013092912364', '2013092978175', '', 0, 1193559, 'aaaaaa', 2, 'shenxd', 1, 'undefined', 1380441421, '20130929'),
(11, '2013092983458', '2013092978175', '', 0, 1193559, 'aaaaaa', 2, 'shenxd', 1, 'undefined', 1380441424, '20130929'),
(12, '2013092976404', '2013092978175', '', 0, 1193559, 'aaaaaa', 2, 'shenxd', 1, 'undefined', 1380441425, '20130929'),
(13, '2013092937751', '2013092978175', '', 0, 1193559, 'aaaaaa', 2, 'shenxd', 1, 'undefined', 1380441425, '20130929'),
(14, '2013092932461', '2013092978175', '', 0, 1193559, 'aaaaaa', 2, 'shenxd', 1, 'undefined', 1380441426, '20130929'),
(15, '2013092983537', '2013092978175', '', 0, 1193559, 'aaaaaa', 2, 'shenxd', 1, 'undefined', 1380441458, '20130929'),
(16, '2013092982505', '2013092986240', '', 0, 1193559, 'aaaaaa', 233, 'shenxd', 1, 'undefined', 1380441532, '20130929'),
(17, '2013092908075', '2013092971933', '', 0, 1193559, 'aaaaaa', 233, 'shenxd', 1, 'undefined', 1380441542, '20130929'),
(18, '2013092959004', '2013092971933', '', 0, 1193559, 'aaaaaa', 233, 'shenxd', 1, 'undefined', 1380441571, '20130929'),
(19, '2013092998462', '2013092971933', '', 0, 1193559, 'aaaaaa', 233, 'shenxd', 1, 'undefined', 1380441573, '20130929'),
(20, '2013092930859', '2013092971933', '', 0, 1193559, 'aaaaaa', 233, 'shenxd', 1, 'undefined', 1380441573, '20130929'),
(21, '2013092962035', '2013092971933', '', 0, 1193559, 'aaaaaa', 233, 'shenxd', 1, 'undefined', 1380441573, '20130929'),
(22, '2013092986373', '2013092971933', '', 0, 1193559, 'aaaaaa', 233, 'shenxd', 1, 'undefined', 1380441574, '20130929'),
(23, '2013092916897', '2013092971933', '', 0, 1193559, 'aaaaaa', 233, 'shenxd', 1, 'undefined', 1380441574, '20130929'),
(24, '2013092907646', '2013092971933', '', 0, 1193559, 'aaaaaa', 233, 'shenxd', 1, 'undefined', 1380441574, '20130929'),
(25, '2013092988454', '2013092971933', '', 0, 1193559, 'aaaaaa', 233, 'shenxd', 1, 'undefined', 1380441574, '20130929'),
(26, '2013092962612', '2013092971933', '', 0, 1193559, 'aaaaaa', 233, 'shenxd', 1, 'undefined', 1380441575, '20130929'),
(27, '2013092996470', '2013092902344', '', 0, 1193559, 'aaaaaa', 23, 'nova', 0, '', 1380441617, '20130929'),
(28, '2013092975141', '2013092972221', '', 0, 19028947, '19028947', 10, 'nova', 0, '', 1380441707, '20130929'),
(29, '2013092981719', '2013092923052', '', 0, 19028947, '19028947', 5, 'nova', 0, '', 1380441759, '20130929'),
(30, '2013092931313', '2013092961965', '', 0, 19028947, '19028947', 23, 'shenxd', 1, 'undefined', 1380441794, '20130929'),
(31, '2013092971369', '2013092919575', '', 0, 1193559, 'aaaaaa', 0, 'shenxd', 1, 'undefined', 1380441812, '20130929'),
(32, '2013092934627', '2013092984565', '', 0, 1193559, 'aaaaaa', 7, 'shenxd', 1, 'undefined', 1380441846, '20130929'),
(33, '2013092986286', '0', '', 0, 1193559, 'aaaaaa', 1, 'shenxd', 1, '', 1380441856, '20130929'),
(34, '2013092929797', '0', '', 0, 19028947, '19028947', 1, 'nova', 0, '', 1380441875, '20130929'),
(35, '2013092906019', '0', '', 0, 19028947, '19028947', 5, 'nova', 0, '', 1380441894, '20130929'),
(36, '2013092900481', '0', '', 0, 19028947, '19028947', 10, 'nova', 0, '', 1380441908, '20130929'),
(37, '2013092932384', '0', '', 0, 1193559, 'aaaaaa', 5, 'nova', 0, '', 1380441921, '20130929'),
(38, '2013092936545', '0', '', 0, 1193559, 'aaaaaa', 5, 'nova', 0, '', 1380441939, '20130929'),
(39, '2013092940382', '0', '', 0, 19028947, '19028947', 5, 'nova', 0, '', 1380443584, '20130929'),
(40, '2013092939940', '0', '', 0, 1193559, 'aaaaaa', 5, 'nova', 0, '', 1380443596, '20130929'),
(41, '2013092950490', '0', '', 0, 1193559, 'aaaaaa', 5, 'nova', 0, '', 1380443653, '20130929'),
(42, '2013092923224', '0', '', 0, 19028947, '19028947', 5, 'nova', 0, '', 1380443664, '20130929');

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
  `status` enum('1','0') NOT NULL COMMENT '状态，0：暂停使用；1：可正常使用',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- 转存表中的数据 `sp_payment`
--

INSERT INTO `sp_payment` (`id`, `code`, `name`, `description`, `thumb`, `listorder`, `rate`, `status`) VALUES
(1, 'yeepay', '银行卡充值（易宝）', '银行卡支付说明：<br />\n1、您必须开通了网上银行业务；<br />\n2、网上银行开通办法请咨询当地所属银行；<br />\n3、请您关闭所有屏蔽弹出窗口之类的功能，否则在线支付将无法继续，比如：3721、上网助手、google toolbar、alexa toolbar、baidu等；<br />\n4、如果您用信用卡支付，请确认该信用卡的网上交易限额大于等于您的充值金额；<br />\n5、如果有疑问，请联系我们在线客服或拨打客服电话。<br />\n6、<font  style="color:#cc0000">请充值时务必确认好您的充值金额准确无误后再进行充值，避免输错金额导致的失误，如因未仔细确认金额造成的充值问题，我们将一律不予处理此类退款申诉。</font>\n', '1', 100, 0.3, '1'),
(2, 'alipay', '支付宝', '支付宝支付说明：<br />\n1、您必须开通了网上银行业务；<br />\n2、使用支付宝网银支付，对消费者来说，目前不需要任何的手续费；<br />\n3、请您关闭所有屏蔽弹出窗口之类的功能，否则在线支付将无法继续，比如：3721、上网助手、google toolbar、alexa toolbar、baidu等；<br />\n4、请使用IE，TT，Maxthon浏览器以确保支付宝充值成功。<br />\n5、如果有疑问，请联系我们在线客服或拨打客服电话。<br />\n6、请您每次充值务必到支付页面进行提交，并按照充值流程完成充值，不要单独付款给我们的支付宝账户，避免出现不必要的损失！<br />\n7、<font style="color:#cc0000">请充值时务必确认好您的充值金额准确无误后再进行充值，避免输错金额导致的失误，如因未仔细确认金额造成的充值问题，我们将一律不予处理此类退款申诉。</font>\n', '1', 8, 0, '1'),
(3, 'ybshenzx', '神州行充值卡', '神州行充值卡说明：<br />\n1、请确认您的充值卡是序列号17位、密码18位，由中国移动发行的全国通用的神州行充值卡，而且是没有使用过的。<br />\n2、请务必使用与您选择的面额相同的神州行卡进行支付，如果选择金额额度不正确会导致卡面金额丢失。<br />\n3、本充值方式还支持江苏、浙江、广东、辽宁、福建的神州行地方卡。支持300和500元面额。<br />\n4、如果有疑问，请联系我们在线客服或拨打客服电话。\n', '1', 97, 0.04, '1'),
(4, 'ybtele', '电信卡', '电信卡<br />\n电信卡', '0', 10, 0.04, '1'),
(5, 'myself', '诺币兑换', '', '0', 0, 0, '1');

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
(1, '诺瓦包月', 'nova', 5, 2, 'http://upload.ci.com/passport2013/0910/20130910144500693.jpg', 233),
(2, '诺瓦包年', 'seer', 50, 0, 'http://upload.ci.com/passport2013/0910/20130910144532119.jpg', 23),
(3, '诺币兑换', 'nova', 10, 1, 'http://upload.ci.com/passport2013/0912/20130912172705850.png', 66);

-- --------------------------------------------------------

--
-- 表的结构 `sp_pay_paymonth`
--

CREATE TABLE IF NOT EXISTS `sp_pay_paymonth` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '支付ID',
  `paymonth_id` smallint(4) NOT NULL COMMENT '支付ID',
  `orderid` char(32) NOT NULL,
  `orderid_account` char(32) NOT NULL,
  `pay_username` char(20) NOT NULL,
  `pay_userid` int(8) NOT NULL,
  `userid` int(8) unsigned NOT NULL COMMENT '用户ID',
  `username` char(20) NOT NULL COMMENT '用户名',
  `money` float NOT NULL COMMENT '支付金额',
  `month` tinyint(1) NOT NULL COMMENT '服务月数',
  `webgame_code` char(10) NOT NULL COMMENT '游戏代码',
  `pay_time` int(10) NOT NULL COMMENT '支付时间',
  `day` char(9) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `sp_pay_paymonth`
--

INSERT INTO `sp_pay_paymonth` (`id`, `paymonth_id`, `orderid`, `orderid_account`, `pay_username`, `pay_userid`, `userid`, `username`, `money`, `month`, `webgame_code`, `pay_time`, `day`) VALUES
(1, 1, '2013092954243', '2013092970431', '', 0, 17183510, '17183510', 5, 2, 'nova', 1380438592, '20130929'),
(2, 1, '2013092956036', '0', '', 0, 17183510, '17183510', 5, 2, 'nova', 1380439770, '20130929'),
(3, 1, '2013092935498', '2013092925449', '', 0, 1193559, 'aaaaaa', 5, 2, 'nova', 1380441100, '20130929'),
(4, 3, '2013092975141', '2013092972221', '', 0, 19028947, '19028947', 10, 1, 'nova', 1380441707, '20130929'),
(5, 1, '2013092981719', '2013092923052', '', 0, 19028947, '19028947', 5, 2, 'nova', 1380441759, '20130929'),
(6, 1, '2013092906019', '0', '', 0, 19028947, '19028947', 5, 2, 'nova', 1380441894, '20130929'),
(7, 3, '2013092900481', '0', '', 0, 19028947, '19028947', 10, 1, 'nova', 1380441908, '20130929'),
(8, 1, '2013092932384', '0', '', 0, 1193559, 'aaaaaa', 5, 2, 'nova', 1380441921, '20130929'),
(9, 1, '2013092936545', '0', '', 0, 1193559, 'aaaaaa', 5, 2, 'nova', 1380441939, '20130929'),
(10, 1, '2013092940382', '0', '', 0, 19028947, '19028947', 5, 2, 'nova', 1380443584, '20130929'),
(11, 1, '2013092939940', '0', '', 0, 1193559, 'aaaaaa', 5, 2, 'nova', 1380443596, '20130929'),
(12, 1, '2013092950490', '0', '', 0, 1193559, 'aaaaaa', 5, 2, 'nova', 1380443653, '20130929'),
(13, 1, '2013092923224', '0', '', 0, 19028947, '19028947', 5, 2, 'nova', 1380443664, '20130929');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
