-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013-09-18 08:42:48
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=34 ;

--
-- 转存表中的数据 `sp_account`
--

INSERT INTO `sp_account` (`id`, `orderid`, `orderid_plat`, `payment_code`, `type`, `webgame_code`, `server_id`, `server_role`, `paymonth_id`, `pay_userid`, `userid`, `username`, `mobile`, `payment_rate`, `money`, `money_valid_middle`, `money_valid`, `account_time`, `day`, `account_time_valid`, `account_data`, `status`, `handpay_manager`) VALUES
(1, '2013091030992', '', 'yeepay', '1', '', 0, NULL, 0, 1089692, 1089692, '1089692', '', 0.3, 3.00, 0.00, 0.00, 1378800849, '20130910', 0, '', '0', NULL),
(2, '2013091097972', '', 'yeepay', '1', '', 0, NULL, 0, 1089692, 1089692, '1089692', '', 0.3, 3.00, 3.00, 2.10, 1378800932, '20130910', 1378800977, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:1:"3";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013091097972";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"5dcc18b4cb08c47fc8d64d51e6f5f550";}', '1', NULL),
(3, '2013091031501', '', 'alipay', '1', '', 0, NULL, 0, 1089692, 1089692, '1089692', '', 0, 7.00, 0.00, 0.00, 1378800994, '20130910', 0, '', '0', NULL),
(4, '2013091090875', '', 'alipay', '1', '', 0, NULL, 0, 1089692, 1089692, '1089692', '', 0, 8.00, 0.00, 0.00, 1378801153, '20130910', 0, '', '0', NULL),
(5, '2013091035924', '', 'yeepay', '1', '', 0, NULL, 0, 1089692, 1089692, '1089692', '', 0.3, 5.00, 5.00, 3.50, 1378811214, '20130910', 1378811215, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:1:"5";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013091035924";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"f8e1e2ed3b98a69486077451cafae812";}', '1', NULL),
(6, '2013091296758', '', 'yeepay', '1', '', 0, NULL, 0, 1286042, 1286042, 'bbbbbb', '', 0.3, 33.00, 33.00, 23.10, 1378979861, '20130912', 1378979863, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:2:"33";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013091296758";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"903e8015e2ed49fc1967f70e3c8b73f9";}', '1', NULL),
(7, '2013091333814', '', 'yeepay', '1', '', 0, NULL, 0, 1193559, 1193559, 'aaaaaa', '', 0.3, 7.00, 0.00, 0.00, 1379054245, '20130913', 0, '', '0', NULL),
(8, '2013091380541', '', 'yeepay', '1', '', 0, NULL, 0, 1193559, 1193559, 'aaaaaa', '', 0.3, 5000.00, 5000.00, 3500.00, 1379061768, '20130913', 1379061769, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:4:"5000";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013091380541";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"e08e218eda5dd73b2585322cc6532ea4";}', '1', NULL),
(9, '2013091669757', '', 'yeepay', '1', '', 0, NULL, 0, 0, 1193559, 'aaaaaa', '', 0.3, 4444.00, 4444.00, 3110.80, 1379304113, '20130916', 1379304114, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:4:"4444";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013091669757";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"17705b0775ca895f57e240ae66ab28c0";}', '1', NULL),
(10, '2013091690228', '', 'yeepay', '1', '', 0, NULL, 0, 0, 1193559, 'aaaaaa', '', 0.3, 4444.00, 4444.00, 3110.80, 1379304214, '20130916', 1379304216, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:4:"4444";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013091690228";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"aafe601c7bd86ca058e903bb46904da7";}', '1', NULL),
(11, '', '', 'yeepay', '1', '', 0, NULL, 0, 0, 0, '', '', 0, 0.00, 0.00, 0.00, 0, '', 1379322905, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:0:"";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:0:"";s:6:"r4_Cur";s:0:"";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:0:"";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:0:"";}', '', NULL),
(12, '2013091733604', '', 'yeepay', '1', '', 0, NULL, 0, 0, 0, '', '', 0, 0.00, 6.00, 0.00, 0, '', 1379407114, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:1:"6";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013091733604";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"e21506854ac70a532a307746708a637e";}', '', NULL),
(13, '2013091702600', '', 'yeepay', '1', '', 0, NULL, 0, 0, 0, '', '', 0, 0.00, 6.00, 0.00, 0, '', 1379409703, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:1:"6";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013091702600";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"8256d1d20b9ef91b3e5264a9d4810543";}', '', NULL),
(14, '2013091854612', '', 'yeepay', '1', '', 0, NULL, 0, 1286042, 1286042, 'bbbbbb', '', 0.3, 888.00, 0.00, 0.00, 1379471420, '20130918', 0, '', '0', NULL),
(15, '2013091847038', '', 'yeepay', '1', '', 0, NULL, 0, 1286042, 1286042, 'bbbbbb', '', 0.3, 888.00, 0.00, 0.00, 1379471466, '20130918', 0, '', '0', NULL),
(16, '2013091887670', '', 'yeepay', '', 'shenxd', 1, 'undefined', 0, 1286042, 1286042, 'bbbbbb', '', 0.3, 888.00, 888.00, 621.60, 1379471803, '20130918', 1379471826, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:3:"888";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013091887670";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"828e0d43240b3674d0ce67ba1bbfc25d";}', '1', NULL),
(17, '2013091845589', '', 'yeepay', '', 'nova', 0, '', 1, 1286042, 1286042, 'bbbbbb', '', 0.3, 5.00, 5.00, 3.50, 1379471852, '20130918', 1379471853, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:1:"5";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013091845589";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"bd5fa354de6963e0df8aa1f5e2ad607c";}', '1', NULL),
(18, '2013091882139', '', 'yeepay', '', 'nova', 0, '', 1, 1286042, 1286042, 'bbbbbb', '', 0.3, 5.00, 5.00, 3.50, 1379471986, '20130918', 1379471988, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:1:"5";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013091882139";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"d905b479d6c96bfa3fdafd4c5db71458";}', '1', NULL),
(19, '2013091844132', '', 'yeepay', 'topaymonth', 'nova', 0, '', 1, 1286042, 1286042, 'bbbbbb', '', 0.3, 5.00, 5.00, 3.50, 1379473971, '20130918', 1379473973, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:1:"5";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013091844132";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"cc0587903865baed2fec61513a9c4a7a";}', '1', NULL),
(20, '2013091889020', '', 'yeepay', 'topaymonth', 'nova', 0, '', 1, 1286042, 1286042, 'bbbbbb', '', 0.3, 5.00, 5.00, 3.50, 1379474022, '20130918', 1379474024, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:1:"5";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013091889020";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"9487a5c5720793c8bf6733f3062cfb9a";}', '1', NULL),
(21, '2013091821361', '', 'yeepay', 'topaymonth', 'nova', 0, '', 1, 1286042, 1286042, 'bbbbbb', '', 0.3, 5.00, 5.00, 3.50, 1379474076, '20130918', 1379474077, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:1:"5";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013091821361";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"0c5d772efc784cc89fb17e3a693bdf36";}', '1', NULL),
(22, '2013091824189', '', 'yeepay', 'topaymonth', 'nova', 0, '', 1, 1286042, 1286042, 'bbbbbb', '', 0.3, 5.00, 5.00, 3.50, 1379474158, '20130918', 1379474159, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:1:"5";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013091824189";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"e35c3ea593425a5bd5636b927095e0df";}', '1', NULL),
(23, '2013091876868', '', 'yeepay', 'topaymonth', 'nova', 0, '', 1, 1286042, 1286042, 'bbbbbb', '', 0.3, 5.00, 0.00, 0.00, 1379475204, '20130918', 0, '', '0', NULL),
(24, '2013091843961', '', 'yeepay', 'topaymonth', 'nova', 0, '', 1, 1286042, 1286042, 'bbbbbb', '', 0.3, 5.00, 0.00, 0.00, 1379475712, '20130918', 0, '', '0', NULL),
(25, '2013091821680', '', 'yeepay', 'topaymonth', 'nova', 0, '', 1, 1286042, 1286042, 'bbbbbb', '', 0.3, 5.00, 0.00, 0.00, 1379475839, '20130918', 0, '', '0', NULL),
(26, '2013091815893', '', 'yeepay', 'topaymonth', 'nova', 0, '', 1, 1286042, 1286042, 'bbbbbb', '', 0.3, 5.00, 0.00, 0.00, 1379475930, '20130918', 0, '', '0', NULL),
(27, '2013091814132', '', 'yeepay', 'topaymonth', 'nova', 0, '', 1, 1286042, 1286042, 'bbbbbb', '', 0.3, 5.00, 5.00, 3.50, 1379476118, '20130918', 1379476119, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:1:"5";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013091814132";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"115e4840f414cf47ff35120745db476f";}', '1', NULL),
(28, '2013091877066', '', 'yeepay', 'towebgame', 'shenxd', 1, 'undefined', 0, 1286042, 1286042, 'bbbbbb', '', 0.3, 77.00, 77.00, 53.90, 1379476144, '20130918', 1379476145, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:2:"77";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013091877066";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"8fe7f519f78cf7e9c92bf6e8be80f489";}', '1', NULL),
(29, '2013091818321', '', 'yeepay', 'towebgame', 'shenxd', 1, 'undefined', 0, 1286042, 1286042, 'bbbbbb', '', 0.3, 77.00, 77.00, 53.90, 1379476833, '20130918', 1379476834, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:2:"77";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013091818321";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"57c0317f877ef75bc9ca3c1d4962196a";}', '1', NULL),
(30, '2013091858707', '', 'yeepay', 'towebgame', 'shenxd', 1, 'undefined', 0, 1286042, 1286042, 'bbbbbb', '', 0.3, 77.00, 77.00, 53.90, 1379476859, '20130918', 1379476860, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:2:"77";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013091858707";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"c4d4a98e4e55b04cc0c334cd523789f4";}', '1', NULL),
(31, '2013091838842', '', 'yeepay', 'topaymonth', 'nova', 0, '', 3, 1286042, 1286042, 'bbbbbb', '', 0.3, 10.00, 10.00, 7.00, 1379476898, '20130918', 1379476899, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:2:"10";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013091838842";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"c112d8ada000d4d73e5e4ec1648d792a";}', '1', NULL),
(32, '2013091830028', '', 'yeepay', 'topaymonth', 'nova', 0, '', 3, 1286042, 1286042, 'bbbbbb', '', 0.3, 10.00, 10.00, 7.00, 1379476948, '20130918', 1379476949, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:2:"10";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013091830028";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"6de02626e2b8776b75a17e3d2af7c9b5";}', '1', NULL),
(33, '2013091817698', '', 'yeepay', 'topaymonth', 'nova', 0, '', 1, 1286042, 1286042, 'bbbbbb', '', 0.3, 8.00, 8.00, 5.60, 1379478421, '20130918', 1379478422, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:1:"8";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013091817698";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"df0021c861af36dded7dad5d9f85ca88";}', '1', NULL);

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

INSERT INTO `sp_account_unusual` (`id`, `orderid`, `orderid_plat`, `payment_code`, `type`, `webgame_code`, `server_id`, `server_role`, `pay_userid`, `userid`, `username`, `mobile`, `payment_rate`, `money`, `money_valid_middle`, `money_valid`, `account_time`, `day`, `account_time_valid`, `account_data`, `status`, `hand_manager`) VALUES
(1, '2013091733604', '', 'yeepay', '1', '', 0, NULL, 0, 0, '', '', 0, 0.00, 6.00, 0.00, 0, '', 1379409688, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:1:"6";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013091733604";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"e21506854ac70a532a307746708a637e";}', '4', NULL),
(2, '2013091889020', '', 'yeepay', '1', '', 0, NULL, 0, 0, '', '', 0, 0.00, 5.00, 0.00, 0, '', 1379474030, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:1:"5";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013091889020";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"9487a5c5720793c8bf6733f3062cfb9a";}', '4', NULL);

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
(1286042, 'bbbbbb', 69.5, 3011, 21, 1215, 850.5, 15, 1379478422, 31, 781, 1379481587, 1379481587, '0.00'),
(1193559, 'aaaaaa', 2458.8, 4444, 1, 4444, 3110.8, 1, 1379304216, 81, 5096, 1379310332, 1379381153, '0.00');

-- --------------------------------------------------------

--
-- 表的结构 `sp_pay`
--

CREATE TABLE IF NOT EXISTS `sp_pay` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '支付ID',
  `orderid` char(32) NOT NULL,
  `orderid_account` char(32) NOT NULL,
  `pay_username` char(20) NOT NULL,
  `pay_userid` int(8) NOT NULL,
  `userid` int(8) unsigned NOT NULL COMMENT '用户ID',
  `username` char(20) NOT NULL COMMENT '用户名',
  `money` float NOT NULL COMMENT '支付金额',
  `webgame_code` char(10) NOT NULL COMMENT '游戏代码',
  `server_id` smallint(5) unsigned NOT NULL COMMENT '游戏服务器ID',
  `server_role` varchar(50) DEFAULT NULL,
  `pay_time` int(10) NOT NULL COMMENT '支付时间',
  `day` char(9) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=126 ;

--
-- 转存表中的数据 `sp_pay`
--

INSERT INTO `sp_pay` (`id`, `orderid`, `orderid_account`, `pay_username`, `pay_userid`, `userid`, `username`, `money`, `webgame_code`, `server_id`, `server_role`, `pay_time`, `day`) VALUES
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
(82, '2013091674070', '', '', 0, 1193559, 'aaaaaa', 6, 'shenxd', 1, '', 1379310332, '20130916'),
(83, '2013091800591', '2013091877066', '', 0, 1286042, 'bbbbbb', 53, 'shenxd', 1, 'undefined', 1379476625, '20130918'),
(84, '2013091839982', '2013091877066', '', 0, 1286042, 'bbbbbb', 53, 'shenxd', 1, 'undefined', 1379476683, '20130918'),
(85, '2013091824999', '2013091877066', '', 0, 1286042, 'bbbbbb', 53, 'shenxd', 1, 'undefined', 1379476684, '20130918'),
(86, '2013091826313', '2013091877066', '', 0, 1286042, 'bbbbbb', 53, 'shenxd', 1, 'undefined', 1379476685, '20130918'),
(87, '2013091898801', '2013091877066', '', 0, 1286042, 'bbbbbb', 53, 'shenxd', 1, 'undefined', 1379476686, '20130918'),
(88, '2013091826058', '2013091877066', '', 0, 1286042, 'bbbbbb', 53, 'shenxd', 1, 'undefined', 1379476686, '20130918'),
(89, '2013091843523', '2013091877066', '', 0, 1286042, 'bbbbbb', 53, 'shenxd', 1, 'undefined', 1379476686, '20130918'),
(90, '2013091896865', '2013091877066', '', 0, 1286042, 'bbbbbb', 53, 'shenxd', 1, 'undefined', 1379476686, '20130918'),
(91, '2013091834716', '2013091877066', '', 0, 1286042, 'bbbbbb', 53, 'shenxd', 1, 'undefined', 1379476686, '20130918'),
(92, '2013091804459', '2013091877066', '', 0, 1286042, 'bbbbbb', 53, 'shenxd', 1, 'undefined', 1379476687, '20130918'),
(93, '2013091841647', '2013091877066', '', 0, 1286042, 'bbbbbb', 53, 'shenxd', 1, 'undefined', 1379476800, '20130918'),
(94, '2013091860131', '2013091818321', '', 0, 1286042, 'bbbbbb', 53, 'shenxd', 1, 'undefined', 1379476834, '20130918'),
(95, '2013091820005', '2013091858707', '', 0, 1286042, 'bbbbbb', 53, 'shenxd', 1, 'undefined', 1379476860, '20130918'),
(96, '2013091821037', '2013091838842', '', 0, 1286042, 'bbbbbb', 7, 'nova', 0, '', 1379476899, '20130918'),
(97, '2013091822557', '2013091838842', '', 0, 1286042, 'bbbbbb', 7, 'nova', 0, '', 1379476942, '20130918'),
(98, '2013091859795', '2013091838842', '', 0, 1286042, 'bbbbbb', 7, 'nova', 0, '', 1379476943, '20130918'),
(99, '2013091802750', '2013091838842', '', 0, 1286042, 'bbbbbb', 7, 'nova', 0, '', 1379476943, '20130918'),
(100, '2013091812827', '2013091838842', '', 0, 1286042, 'bbbbbb', 7, 'nova', 0, '', 1379476944, '20130918'),
(101, '2013091845298', '2013091838842', '', 0, 1286042, 'bbbbbb', 7, 'nova', 0, '', 1379476944, '20130918'),
(102, '2013091834328', '2013091838842', '', 0, 1286042, 'bbbbbb', 7, 'nova', 0, '', 1379476944, '20130918'),
(103, '2013091817756', '2013091830028', '', 0, 1286042, 'bbbbbb', 7, 'nova', 0, '', 1379476949, '20130918'),
(104, '2013091864017', '2013091830028', '', 0, 1286042, 'bbbbbb', 7, 'nova', 0, '', 1379476996, '20130918'),
(105, '2013091872064', '2013091830028', '', 0, 1286042, 'bbbbbb', 7, 'nova', 0, '', 1379477269, '20130918'),
(106, '2013091809175', '2013091830028', '', 0, 1286042, 'bbbbbb', 7, 'nova', 0, '', 1379477269, '20130918'),
(107, '2013091859789', '2013091830028', '', 0, 1286042, 'bbbbbb', 7, 'nova', 0, '', 1379477269, '20130918'),
(108, '2013091867228', '2013091830028', '', 0, 1286042, 'bbbbbb', 7, 'nova', 0, '', 1379477291, '20130918'),
(109, '2013091811786', '2013091817698', '', 0, 1286042, 'bbbbbb', 5, 'nova', 0, '', 1379478422, '20130918'),
(110, '2013091808299', '2013091817698', '', 0, 1286042, 'bbbbbb', 5, 'nova', 0, '', 1379478468, '20130918'),
(111, '2013091893318', '2013091817698', '', 0, 1286042, 'bbbbbb', 5, 'nova', 0, '', 1379478469, '20130918'),
(112, '2013091829730', '2013091817698', '', 0, 1286042, 'bbbbbb', 5, 'nova', 0, '', 1379478469, '20130918'),
(113, '2013091846870', '2013091817698', '', 0, 1286042, 'bbbbbb', 5, 'nova', 0, '', 1379478470, '20130918'),
(114, '2013091819939', '2013091817698', '', 0, 1286042, 'bbbbbb', 5, 'nova', 0, '', 1379478470, '20130918'),
(115, '2013091803977', '2013091817698', '', 0, 1286042, 'bbbbbb', 5, 'nova', 0, '', 1379478470, '20130918'),
(116, '2013091853749', '2013091817698', '', 0, 1286042, 'bbbbbb', 5, 'nova', 0, '', 1379478471, '20130918'),
(117, '2013091866485', '2013091817698', '', 0, 1286042, 'bbbbbb', 5, 'nova', 0, '', 1379478471, '20130918'),
(118, '2013091849737', '2013091817698', '', 0, 1286042, 'bbbbbb', 5, 'nova', 0, '', 1379478471, '20130918'),
(119, '2013091832416', '2013091817698', '', 0, 1286042, 'bbbbbb', 5, 'nova', 0, '', 1379478472, '20130918'),
(120, '2013091871182', '2013091817698', '', 0, 1286042, 'bbbbbb', 5, 'nova', 0, '', 1379478472, '20130918'),
(121, '2013091847012', '2013091817698', '', 0, 1286042, 'bbbbbb', 5, 'nova', 0, '', 1379480504, '20130918'),
(122, '2013091881894', '2013091817698', '', 0, 1286042, 'bbbbbb', 5, 'nova', 0, '', 1379481113, '20130918'),
(123, '2013091880871', '2013091817698', '', 0, 1286042, 'bbbbbb', 5, 'nova', 0, '', 1379481180, '20130918'),
(124, '2013091890236', '2013091817698', '', 0, 1286042, 'bbbbbb', 5, 'nova', 0, '', 1379481202, '20130918'),
(125, '2013091893460', '2013091817698', '', 0, 1286042, 'bbbbbb', 5, 'nova', 0, '', 1379481587, '20130918');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- 转存表中的数据 `sp_pay_paymonth`
--

INSERT INTO `sp_pay_paymonth` (`id`, `paymonth_id`, `orderid`, `orderid_account`, `pay_username`, `pay_userid`, `userid`, `username`, `money`, `month`, `webgame_code`, `pay_time`, `day`) VALUES
(1, 3, '2013091867228', '2013091830028', '', 0, 1286042, 'bbbbbb', 7, 1, 'nova', 1379477291, '20130918'),
(2, 1, '2013091811786', '2013091817698', '', 0, 1286042, 'bbbbbb', 5, 2, 'nova', 1379478422, '20130918'),
(3, 1, '2013091808299', '2013091817698', '', 0, 1286042, 'bbbbbb', 5, 2, 'nova', 1379478468, '20130918'),
(4, 1, '2013091893318', '2013091817698', '', 0, 1286042, 'bbbbbb', 5, 2, 'nova', 1379478469, '20130918'),
(5, 1, '2013091829730', '2013091817698', '', 0, 1286042, 'bbbbbb', 5, 2, 'nova', 1379478469, '20130918'),
(6, 1, '2013091846870', '2013091817698', '', 0, 1286042, 'bbbbbb', 5, 2, 'nova', 1379478470, '20130918'),
(7, 1, '2013091819939', '2013091817698', '', 0, 1286042, 'bbbbbb', 5, 2, 'nova', 1379478470, '20130918'),
(8, 1, '2013091803977', '2013091817698', '', 0, 1286042, 'bbbbbb', 5, 2, 'nova', 1379478470, '20130918'),
(9, 1, '2013091853749', '2013091817698', '', 0, 1286042, 'bbbbbb', 5, 2, 'nova', 1379478471, '20130918'),
(10, 1, '2013091866485', '2013091817698', '', 0, 1286042, 'bbbbbb', 5, 2, 'nova', 1379478471, '20130918'),
(11, 1, '2013091849737', '2013091817698', '', 0, 1286042, 'bbbbbb', 5, 2, 'nova', 1379478471, '20130918'),
(12, 1, '2013091832416', '2013091817698', '', 0, 1286042, 'bbbbbb', 5, 2, 'nova', 1379478472, '20130918'),
(13, 1, '2013091871182', '2013091817698', '', 0, 1286042, 'bbbbbb', 5, 2, 'nova', 1379478472, '20130918'),
(14, 1, '2013091847012', '2013091817698', '', 0, 1286042, 'bbbbbb', 5, 2, 'nova', 1379480504, '20130918'),
(15, 1, '2013091881894', '2013091817698', '', 0, 1286042, 'bbbbbb', 5, 2, 'nova', 1379481113, '20130918'),
(16, 1, '2013091880871', '2013091817698', '', 0, 1286042, 'bbbbbb', 5, 2, 'nova', 1379481180, '20130918'),
(17, 1, '2013091890236', '2013091817698', '', 0, 1286042, 'bbbbbb', 5, 2, 'nova', 1379481202, '20130918'),
(18, 1, '2013091893460', '2013091817698', '', 0, 1286042, 'bbbbbb', 5, 2, 'nova', 1379481587, '20130918');

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
