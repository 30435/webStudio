-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013-09-29 07:56:25
-- 服务器版本: 5.6.11
-- PHP 版本: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `studio_game`
--

-- --------------------------------------------------------

--
-- 表的结构 `t_account`
--

CREATE TABLE IF NOT EXISTS `t_account` (
  `aid` bigint(20) NOT NULL AUTO_INCREMENT,
  `accname` varchar(50) NOT NULL DEFAULT '""' COMMENT '帐号名',
  `dbversion` int(11) NOT NULL DEFAULT '1' COMMENT '数据库版本',
  `lastlogouttime` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '上次登出时间',
  `totalonlinetime` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '总共在线时间',
  `isfatigue` tinyint(4) DEFAULT '1' COMMENT '是否防沉迷用户',
  `isvalid` tinyint(4) DEFAULT '1' COMMENT '当前纪录是否有效',
  `money` int(11) DEFAULT '0',
  PRIMARY KEY (`aid`),
  KEY `index_accname` (`accname`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `t_account`
--

INSERT INTO `t_account` (`aid`, `accname`, `dbversion`, `lastlogouttime`, `totalonlinetime`, `isfatigue`, `isvalid`, `money`) VALUES
(1, '17183510', 1, 0, 0, 1, 1, 5),
(2, '1193559', 1, 0, 0, 1, 1, 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
