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
-- 数据库: `kids_pay`
--

-- --------------------------------------------------------

--
-- 表的结构 `kp_account`
--

CREATE TABLE IF NOT EXISTS `kp_account` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `kp_account`
--

INSERT INTO `kp_account` (`id`, `orderid`, `orderid_plat`, `payment_code`, `pay_type`, `webgame_code`, `server_id`, `server_role`, `pay_userid`, `get_userid`, `get_username`, `mobile`, `payment_rate`, `money`, `money_valid_middle`, `money_valid`, `account_time`, `day`, `account_time_valid`, `account_data`, `account_status`, `handpay_manager`) VALUES
(1, '2013090518997', '', 'yeepay', '1', '', 0, NULL, 57932, 57932, 'aaaaaa', '', 0.3, 7.00, 0.00, 0.00, 1378376147, '20130905', 0, '', '0', NULL),
(2, '2013090552857', '', 'yeepay', '1', '', 0, NULL, 57932, 57932, 'aaaaaa', '', 0.3, 7.00, 0.00, 0.00, 1378376160, '20130905', 0, '', '0', NULL),
(3, '2013090569590', '', 'yeepay', '1', '', 0, NULL, 57932, 57932, 'aaaaaa', '', 0.3, 50.00, 50.00, 35.00, 1378376488, '20130905', 1378376491, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:2:"50";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013090569590";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"c5e58ab1f88064c33b485b7ffe7b878c";}', '1', NULL),
(4, '2013090590547', '', 'yeepay', '1', '', 0, NULL, 57932, 57932, 'aaaaaa', '', 0.3, 50.00, 50.00, 35.00, 1378376727, '20130905', 1378376730, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:2:"50";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013090590547";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"710a69e3288683e6b4da5a7a774abc4d";}', '1', NULL),
(5, '2013090561945', '', 'yeepay', '1', '', 0, NULL, 57932, 57932, 'aaaaaa', '', 0.3, 100.00, 100.00, 70.00, 1378376835, '20130905', 1378376838, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:3:"100";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013090561945";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"375c1ccf6461a10c0ffb8b74a60a8e36";}', '1', NULL),
(6, '2013090529895', '', 'yeepay', '1', '', 0, NULL, 57932, 57932, 'aaaaaa', '', 0.3, 100.00, 100.00, 70.00, 1378377058, '20130905', 1378377059, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:3:"100";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013090529895";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"31697f8917e04792c594b9f14b79607e";}', '1', NULL),
(7, '2013090514680', '', 'yeepay', '1', '', 0, NULL, 57932, 57932, 'aaaaaa', '', 0.3, 100.00, 100.00, 70.00, 1378377135, '20130905', 1378377136, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:3:"100";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013090514680";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"f8b881f1ed3a767e82bb8eab6de8b788";}', '1', NULL),
(8, '2013090506442', '', 'yeepay', '1', '', 0, NULL, 57932, 57932, 'aaaaaa', '', 0.3, 100.00, 100.00, 70.00, 1378378337, '20130905', 1378378339, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:3:"100";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013090506442";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"e0ba3e1a26dab736b9b09ad1ff18f0cd";}', '1', NULL),
(9, '2013090622722', '', 'yeepay', '1', '', 0, NULL, 57932, 57932, 'aaaaaa', '', 0.3, 5.00, 5.00, 3.50, 1378457845, '20130906', 1378457847, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:1:"5";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013090622722";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"44b159856fd252c5d81380592887ba50";}', '1', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `kp_account_unusual`
--

CREATE TABLE IF NOT EXISTS `kp_account_unusual` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `kp_account_unusual`
--

INSERT INTO `kp_account_unusual` (`id`, `orderid`, `orderid_plat`, `payment_code`, `pay_type`, `webgame_code`, `server_id`, `server_role`, `pay_userid`, `get_userid`, `get_username`, `mobile`, `payment_rate`, `money`, `money_valid_middle`, `money_valid`, `account_time`, `day`, `account_time_valid`, `account_data`, `account_status`, `hand_manager`) VALUES
(1, '2013090590547', '', 'yeepay', '1', '', 0, NULL, 0, 0, '', '', 0, 0.00, 50.00, 0.00, 0, '', 1378376786, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:2:"50";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013090590547";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"710a69e3288683e6b4da5a7a774abc4d";}', '4', NULL),
(2, '2013090529895', '', 'yeepay', '1', '', 0, NULL, 0, 0, '', '', 0, 0.00, 100.00, 0.00, 0, '', 1378377109, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:3:"100";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013090529895";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"31697f8917e04792c594b9f14b79607e";}', '4', NULL),
(3, '2013090514680', '', 'yeepay', '1', '', 0, NULL, 0, 0, '', '', 0, 0.00, 100.00, 0.00, 0, '', 1378377195, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:3:"100";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013090514680";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"f8b881f1ed3a767e82bb8eab6de8b788";}', '4', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `kp_member_pay`
--

CREATE TABLE IF NOT EXISTS `kp_member_pay` (
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
  `unusual_money` decimal(10,2) NOT NULL COMMENT '异常金额',
  PRIMARY KEY (`userid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `kp_member_pay`
--

INSERT INTO `kp_member_pay` (`userid`, `username`, `money`, `want_money`, `want_times`, `valid_money_middle`, `valid_money`, `valid_times`, `lasttime_account`, `pay_times`, `pay_money`, `lasttime_pay`, `unusual_money`) VALUES
(57932, 'aaaaaa', 353.5, 519, 9, 505, 353.5, 7, 1378457847, 0, 0, 0, '0.00');

-- --------------------------------------------------------

--
-- 表的结构 `kp_pay`
--

CREATE TABLE IF NOT EXISTS `kp_pay` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '支付ID',
  `orderid` char(32) NOT NULL,
  `orderid_plat` char(32) NOT NULL,
  `get_username` char(20) NOT NULL,
  `get_userid` int(8) NOT NULL,
  `userid` int(8) unsigned NOT NULL COMMENT '用户ID',
  `username` char(20) NOT NULL COMMENT '用户名',
  `money` float NOT NULL COMMENT '支付金额',
  `webgame_code` char(10) NOT NULL COMMENT '游戏代码',
  `serverid` smallint(5) unsigned NOT NULL COMMENT '游戏服务器ID',
  `server_role` varchar(50) DEFAULT NULL,
  `pay_time` int(10) NOT NULL COMMENT '支付时间',
  `day` char(9) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `kp_payment`
--

CREATE TABLE IF NOT EXISTS `kp_payment` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT COMMENT '支付方式ID',
  `code` char(10) NOT NULL COMMENT '代码',
  `name` varchar(20) NOT NULL COMMENT '名称',
  `description` varchar(1000) NOT NULL COMMENT '描述',
  `thumb` varchar(100) NOT NULL COMMENT '图标',
  `listorder` tinyint(3) unsigned NOT NULL COMMENT '排序',
  `rate` float NOT NULL,
  `payment_status` enum('1','0') NOT NULL COMMENT '状态，0：暂停使用；1：可正常使用',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- 转存表中的数据 `kp_payment`
--

INSERT INTO `kp_payment` (`id`, `code`, `name`, `description`, `thumb`, `listorder`, `rate`, `payment_status`) VALUES
(1, 'yeepay', '银行卡充值（易宝）', '银行卡支付说明：<br />\n1、您必须开通了网上银行业务；<br />\n2、网上银行开通办法请咨询当地所属银行；<br />\n3、请您关闭所有屏蔽弹出窗口之类的功能，否则在线支付将无法继续，比如：3721、上网助手、google toolbar、alexa toolbar、baidu等；<br />\n4、如果您用信用卡支付，请确认该信用卡的网上交易限额大于等于您的充值金额；<br />\n5、如果有疑问，请联系我们在线客服或拨打客服电话。<br />\n6、<font  style="color:#cc0000">请充值时务必确认好您的充值金额准确无误后再进行充值，避免输错金额导致的失误，如因未仔细确认金额造成的充值问题，我们将一律不予处理此类退款申诉。</font>\n', '1', 100, 0.3, '1'),
(2, 'alipay', '支付宝', '支付宝支付说明：<br />\n1、您必须开通了网上银行业务；<br />\n2、使用支付宝网银支付，对消费者来说，目前不需要任何的手续费；<br />\n3、请您关闭所有屏蔽弹出窗口之类的功能，否则在线支付将无法继续，比如：3721、上网助手、google toolbar、alexa toolbar、baidu等；<br />\n4、请使用IE，TT，Maxthon浏览器以确保支付宝充值成功。<br />\n5、如果有疑问，请联系我们在线客服或拨打客服电话。<br />\n6、请您每次充值务必到支付页面进行提交，并按照充值流程完成充值，不要单独付款给我们的支付宝账户，避免出现不必要的损失！<br />\n7、<font style="color:#cc0000">请充值时务必确认好您的充值金额准确无误后再进行充值，避免输错金额导致的失误，如因未仔细确认金额造成的充值问题，我们将一律不予处理此类退款申诉。</font>\n', '1', 99, 0, '1'),
(8, 'ybshenzx', '神州行充值卡', '神州行充值卡说明：<br />\n1、请确认您的充值卡是序列号17位、密码18位，由中国移动发行的全国通用的神州行充值卡，而且是没有使用过的。<br />\n2、请务必使用与您选择的面额相同的神州行卡进行支付，如果选择金额额度不正确会导致卡面金额丢失。<br />\n3、本充值方式还支持江苏、浙江、广东、辽宁、福建的神州行地方卡。支持300和500元面额。<br />\n4、如果有疑问，请联系我们在线客服或拨打客服电话。\n', '1', 97, 0.04, '1'),
(14, 'ybtelecom', '电信卡', '电信卡<br />\n电信卡', '', 0, 0.04, '1');

-- --------------------------------------------------------

--
-- 表的结构 `kp_paymonth`
--

CREATE TABLE IF NOT EXISTS `kp_paymonth` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT COMMENT '包月ID',
  `name` varchar(20) NOT NULL COMMENT '名称',
  `money` int(4) unsigned NOT NULL COMMENT '费用',
  `unit` char(4) NOT NULL COMMENT '单位',
  `thumb` varchar(100) NOT NULL COMMENT '图标',
  `listorder` tinyint(3) unsigned NOT NULL COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `kp_paymonth`
--

INSERT INTO `kp_paymonth` (`id`, `name`, `money`, `unit`, `thumb`, `listorder`) VALUES
(1, '诺瓦包月', 10, '2', 'http://upload.kids.com/passport2013/0905/20130905194647580.jpg', 8);

-- --------------------------------------------------------

--
-- 表的结构 `kp_pay_setting`
--

CREATE TABLE IF NOT EXISTS `kp_pay_setting` (
  `id` tinyint(2) NOT NULL AUTO_INCREMENT COMMENT '配置ID',
  `pay_start` enum('1','0') NOT NULL COMMENT '是否开启支付 1 表示开启',
  `min_money` double NOT NULL COMMENT '最小金额',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
