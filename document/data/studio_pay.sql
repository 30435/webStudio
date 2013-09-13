-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013-09-13 13:11:07
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

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
(8, '2013091380541', '', 'yeepay', '1', '', 0, NULL, 1193559, 1193559, 'aaaaaa', '', 0.3, 5000.00, 5000.00, 3500.00, 1379061768, '20130913', 1379061769, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:4:"5000";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013091380541";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"e08e218eda5dd73b2585322cc6532ea4";}', '1', NULL);

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
  `unusual_money` decimal(10,2) NOT NULL COMMENT '异常金额',
  PRIMARY KEY (`userid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `sp_member_pay`
--

INSERT INTO `sp_member_pay` (`userid`, `username`, `money`, `want_money`, `want_times`, `valid_money_middle`, `valid_money`, `valid_times`, `lasttime_account`, `pay_times`, `pay_money`, `lasttime_pay`, `unusual_money`) VALUES
(1089692, '1089692', 5.6, 26, 5, 8, 5.6, 2, 1378811215, 0, 0, 0, '0.00'),
(1286042, 'bbbbbb', 23.1, 33, 1, 33, 23.1, 1, 1378979863, 0, 0, 0, '0.00'),
(1193559, 'aaaaaa', 3500, 5007, 2, 5000, 3500, 1, 1379061769, 0, 0, 0, '0.00');

-- --------------------------------------------------------

--
-- 表的结构 `sp_pay`
--

CREATE TABLE IF NOT EXISTS `sp_pay` (
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
