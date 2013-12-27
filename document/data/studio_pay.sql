-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013-12-27 10:33:37
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `sp_account`
--

INSERT INTO `sp_account` (`id`, `orderid`, `orderid_plat`, `payment_code`, `type`, `webgame_code`, `server_id`, `server_role`, `paymonth_id`, `pay_userid`, `pay_username`, `userid`, `username`, `mobile`, `payment_rate`, `money`, `money_valid_middle`, `money_valid`, `account_time`, `day`, `account_time_valid`, `account_data`, `status`, `handpay_manager`) VALUES
(1, '2013102433681', '', 'yeepay', 'touser', '', 0, '', 0, 16033066, 'cccccc', 16033066, 'cccccc', '', 0.3, 6.00, 6.00, 4.20, 1382604442, '20131024', 1382604539, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:1:"6";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013102433681";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"1040ab268307bdd687d023b7e01a1a38";}', '1', NULL),
(2, '2013103104014', '', 'yeepay', 'touser', '', 0, '', 0, 19028947, '19028947', 19028947, '19028947', '', 0.3, 88.00, 88.00, 61.60, 1383208060, '20131031', 1383208066, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:2:"88";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013103104014";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"13e781c6bfa928743db584b60e18e593";}', '1', NULL),
(3, '2013110854288', '', 'yeepay', 'touser', '', 0, '', 0, 18962869, 'aaaaaa', 18962869, 'aaaaaa', '', 0.3, 7.00, 7.00, 4.90, 1383900741, '20131108', 1383900792, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:1:"7";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013110854288";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"a4441f93d6194fd6026eea190edbe78a";}', '1', NULL),
(4, '2013110865555', '', 'yeepay', 'towebgame', 'nova', 0, '', 0, 18962869, 'aaaaaa', 18962869, 'aaaaaa', '', 0.3, 100.00, 100.00, 70.00, 1383900902, '20131108', 1383900909, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:3:"100";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013110865555";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"644a449e17488d4eca5b527e8a45ec63";}', '1', NULL),
(5, '2013110883421', '', 'yeepay', 'towebgame', 'nova', 0, '', 0, 18962869, 'aaaaaa', 18962869, 'aaaaaa', '', 0.3, 1000.00, 1000.00, 700.00, 1383901022, '20131108', 1383901041, 'a:12:{s:4:"code";s:6:"yeepay";s:6:"r0_Cmd";s:3:"Buy";s:7:"r1_Code";s:0:"";s:8:"r2_TrxId";s:0:"";s:6:"r3_Amt";s:4:"1000";s:6:"r4_Cur";s:3:"CNY";s:6:"r5_Pid";s:0:"";s:8:"r6_Order";s:13:"2013110883421";s:6:"r7_Uid";s:0:"";s:5:"r8_MP";s:0:"";s:8:"r9_BType";s:0:"";s:4:"hmac";s:32:"008df4d5d547efcbe5b5a20eac228407";}', '1', NULL),
(6, '2013111914437', '', 'kuaiq', 'touser', '', 0, '', 0, 0, '', 18962869, 'aaaaaa', '', 0, 444.00, 0.00, 0.00, 1384847034, '20131119', 0, '', '0', NULL);

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
(16033066, 'cccccc', 2.2, 6, 1, 6, 4.2, 1, 1382604539, 1, 2, 1382604679, 1382604679, '0.00'),
(19028947, '19028947', 51.6, 88, 1, 88, 61.6, 1, 1383208066, 1, 10, 1383208169, 1383208169, '0.00'),
(18962869, 'aaaaaa', 0.9, 1551, 4, 1107, 774.9, 3, 1384847034, 3, 774, 1383901041, 1383901041, '0.00');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `sp_pay`
--

INSERT INTO `sp_pay` (`id`, `orderid`, `orderid_account`, `get_username`, `get_userid`, `userid`, `username`, `money`, `webgame_code`, `server_id`, `server_role`, `pay_time`, `day`) VALUES
(1, '2013102428514', '0', 'cccccc', 16033066, 16033066, 'cccccc', 2, 'nova', 0, '', 1382604679, '20131024'),
(2, '2013103152753', '0', '19028947', 19028947, 19028947, '19028947', 10, 'nova', 0, '', 1383208169, '20131031'),
(3, '2013110896035', '0', 'aaaaaa', 18962869, 18962869, 'aaaaaa', 4, 'nova', 0, '', 1383900851, '20131108'),
(4, '2013110871228', '2013110865555', 'aaaaaa', 18962869, 18962869, 'aaaaaa', 70, 'nova', 0, '', 1383900909, '20131108'),
(5, '2013110828213', '2013110883421', 'aaaaaa', 18962869, 18962869, 'aaaaaa', 700, 'nova', 0, '', 1383901041, '20131108');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- 转存表中的数据 `sp_payment`
--

INSERT INTO `sp_payment` (`id`, `code`, `name`, `description`, `thumb`, `listorder`, `rate`, `status`) VALUES
(1, 'yeepay', '银行卡充值（易宝）', '银行卡支付说明：<br />\n1、您必须开通了网上银行业务；<br />\n2、网上银行开通办法请咨询当地所属银行；<br />\n3、请您关闭所有屏蔽弹出窗口之类的功能，否则在线支付将无法继续，比如：3721、上网助手、google toolbar、alexa toolbar、baidu等；<br />\n4、如果您用信用卡支付，请确认该信用卡的网上交易限额大于等于您的充值金额；<br />\n5、如果有疑问，请联系我们在线客服或拨打客服电话。<br />\n6、<font  style="color:#cc0000">请充值时务必确认好您的充值金额准确无误后再进行充值，避免输错金额导致的失误，如因未仔细确认金额造成的充值问题，我们将一律不予处理此类退款申诉。</font>\n', '1', 100, 0.3, '1'),
(2, 'alipay', '支付宝', '支付宝支付说明：<br />\n1、您必须开通了网上银行业务；<br />\n2、使用支付宝网银支付，对消费者来说，目前不需要任何的手续费；<br />\n3、请您关闭所有屏蔽弹出窗口之类的功能，否则在线支付将无法继续，比如：3721、上网助手、google toolbar、alexa toolbar、baidu等；<br />\n4、请使用IE，TT，Maxthon浏览器以确保支付宝充值成功。<br />\n5、如果有疑问，请联系我们在线客服或拨打客服电话。<br />\n6、请您每次充值务必到支付页面进行提交，并按照充值流程完成充值，不要单独付款给我们的支付宝账户，避免出现不必要的损失！<br />\n7、<font style="color:#cc0000">请充值时务必确认好您的充值金额准确无误后再进行充值，避免输错金额导致的失误，如因未仔细确认金额造成的充值问题，我们将一律不予处理此类退款申诉。</font>\n', '1', 8, 0, '1'),
(3, 'ybshenzx', '神州行充值卡', '神州行充值卡说明：<br />\n1、请确认您的充值卡是序列号17位、密码18位，由中国移动发行的全国通用的神州行充值卡，而且是没有使用过的。<br />\n2、请务必使用与您选择的面额相同的神州行卡进行支付，如果选择金额额度不正确会导致卡面金额丢失。<br />\n3、本充值方式还支持江苏、浙江、广东、辽宁、福建的神州行地方卡。支持300和500元面额。<br />\n4、如果有疑问，请联系我们在线客服或拨打客服电话。\n', '1', 97, 0.04, '1'),
(4, 'ybtele', '电信卡', '电信卡<br />\n电信卡', '0', 10, 0.04, '1'),
(5, 'myself', '诺币兑换', '', '0', 0, 0, '1'),
(21, 'kuaiq', '快钱', '', '0', 0, 0, '1');

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
  `get_username` char(20) NOT NULL,
  `get_userid` int(8) NOT NULL,
  `userid` int(8) unsigned NOT NULL COMMENT '用户ID',
  `username` char(20) NOT NULL COMMENT '用户名',
  `money` float NOT NULL COMMENT '支付金额',
  `month` tinyint(1) NOT NULL COMMENT '服务月数',
  `webgame_code` char(10) NOT NULL COMMENT '游戏代码',
  `pay_time` int(10) NOT NULL COMMENT '支付时间',
  `day` char(9) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
