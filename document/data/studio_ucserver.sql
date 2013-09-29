-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013-09-29 07:57:07
-- 服务器版本: 5.6.11
-- PHP 版本: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `studio_ucserver`
--

-- --------------------------------------------------------

--
-- 表的结构 `su_admins`
--

CREATE TABLE IF NOT EXISTS `su_admins` (
  `uid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `username` char(15) NOT NULL DEFAULT '',
  `allowadminsetting` tinyint(1) NOT NULL DEFAULT '0',
  `allowadminapp` tinyint(1) NOT NULL DEFAULT '0',
  `allowadminuser` tinyint(1) NOT NULL DEFAULT '0',
  `allowadminbadword` tinyint(1) NOT NULL DEFAULT '0',
  `allowadmintag` tinyint(1) NOT NULL DEFAULT '0',
  `allowadminpm` tinyint(1) NOT NULL DEFAULT '0',
  `allowadmincredits` tinyint(1) NOT NULL DEFAULT '0',
  `allowadmindomain` tinyint(1) NOT NULL DEFAULT '0',
  `allowadmindb` tinyint(1) NOT NULL DEFAULT '0',
  `allowadminnote` tinyint(1) NOT NULL DEFAULT '0',
  `allowadmincache` tinyint(1) NOT NULL DEFAULT '0',
  `allowadminlog` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`uid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `su_applications`
--

CREATE TABLE IF NOT EXISTS `su_applications` (
  `appid` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(16) NOT NULL DEFAULT '',
  `name` varchar(20) NOT NULL DEFAULT '',
  `url` varchar(255) NOT NULL DEFAULT '',
  `authkey` varchar(255) NOT NULL DEFAULT '',
  `ip` varchar(15) NOT NULL DEFAULT '',
  `viewprourl` varchar(255) NOT NULL,
  `apifilename` varchar(30) NOT NULL DEFAULT 'uc.php',
  `charset` varchar(8) NOT NULL DEFAULT '',
  `dbcharset` varchar(8) NOT NULL DEFAULT '',
  `synlogin` tinyint(1) NOT NULL DEFAULT '0',
  `recvnote` tinyint(1) DEFAULT '0',
  `extra` text NOT NULL,
  `tagtemplates` text NOT NULL,
  `allowips` text NOT NULL,
  PRIMARY KEY (`appid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `su_applications`
--

INSERT INTO `su_applications` (`appid`, `type`, `name`, `url`, `authkey`, `ip`, `viewprourl`, `apifilename`, `charset`, `dbcharset`, `synlogin`, `recvnote`, `extra`, `tagtemplates`, `allowips`) VALUES
(1, 'DISCUZX', 'kids bbs!', 'http://bbs.kids.com', 'Lby2Abx741Fdl5qfk3m76f56aciae751n5408ef9Dc3a66EcJbje63rcG5U6WdW8', '', '', 'uc.php', 'utf-8', 'utf8', 1, 1, '', '<?xml version="1.0" encoding="ISO-8859-1"?>\r\n<root>\r\n	<item id="template"><![CDATA[<a href="{url}" target="_blank">{subject}</a>]]></item>\r\n	<item id="fields">\r\n		<item id="subject"><![CDATA[标题]]></item>\r\n		<item id="uid"><![CDATA[用户 ID]]></item>\r\n		<item id="username"><![CDATA[发帖者]]></item>\r\n		<item id="dateline"><![CDATA[日期]]></item>\r\n		<item id="url"><![CDATA[主题地址]]></item>\r\n	</item>\r\n</root>', ''),
(2, 'OTHER', 'ci平台', 'http://passport.kids.com/api/index', '776frojkxvPD2dshIXcw2QwlldZca7ryEwZfw+dFQGRB9X4IcjSa', '', '', 'uc.php', '', '', 1, 1, 'a:1:{s:7:"apppath";s:0:"";}', '<?xml version="1.0" encoding="ISO-8859-1"?>\r\n<root>\r\n	<item id="template"><![CDATA[]]></item>\r\n</root>', '');

-- --------------------------------------------------------

--
-- 表的结构 `su_badwords`
--

CREATE TABLE IF NOT EXISTS `su_badwords` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `admin` varchar(15) NOT NULL DEFAULT '',
  `find` varchar(255) NOT NULL DEFAULT '',
  `replacement` varchar(255) NOT NULL DEFAULT '',
  `findpattern` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `find` (`find`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `su_domains`
--

CREATE TABLE IF NOT EXISTS `su_domains` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `domain` char(40) NOT NULL DEFAULT '',
  `ip` char(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `su_failedlogins`
--

CREATE TABLE IF NOT EXISTS `su_failedlogins` (
  `ip` char(15) NOT NULL DEFAULT '',
  `count` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `lastupdate` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`ip`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `su_failedlogins`
--

INSERT INTO `su_failedlogins` (`ip`, `count`, `lastupdate`) VALUES
('127.0.0.1', 4, 1380275430);

-- --------------------------------------------------------

--
-- 表的结构 `su_feeds`
--

CREATE TABLE IF NOT EXISTS `su_feeds` (
  `feedid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `appid` varchar(30) NOT NULL DEFAULT '',
  `icon` varchar(30) NOT NULL DEFAULT '',
  `uid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `username` varchar(15) NOT NULL DEFAULT '',
  `dateline` int(10) unsigned NOT NULL DEFAULT '0',
  `hash_template` varchar(32) NOT NULL DEFAULT '',
  `hash_data` varchar(32) NOT NULL DEFAULT '',
  `title_template` text NOT NULL,
  `title_data` text NOT NULL,
  `body_template` text NOT NULL,
  `body_data` text NOT NULL,
  `body_general` text NOT NULL,
  `image_1` varchar(255) NOT NULL DEFAULT '',
  `image_1_link` varchar(255) NOT NULL DEFAULT '',
  `image_2` varchar(255) NOT NULL DEFAULT '',
  `image_2_link` varchar(255) NOT NULL DEFAULT '',
  `image_3` varchar(255) NOT NULL DEFAULT '',
  `image_3_link` varchar(255) NOT NULL DEFAULT '',
  `image_4` varchar(255) NOT NULL DEFAULT '',
  `image_4_link` varchar(255) NOT NULL DEFAULT '',
  `target_ids` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`feedid`),
  KEY `uid` (`uid`,`dateline`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `su_friends`
--

CREATE TABLE IF NOT EXISTS `su_friends` (
  `uid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `friendid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `direction` tinyint(1) NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `delstatus` tinyint(1) NOT NULL DEFAULT '0',
  `comment` char(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`version`),
  KEY `uid` (`uid`),
  KEY `friendid` (`friendid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `su_mailqueue`
--

CREATE TABLE IF NOT EXISTS `su_mailqueue` (
  `mailid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `touid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `tomail` varchar(32) NOT NULL,
  `frommail` varchar(100) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `charset` varchar(15) NOT NULL,
  `htmlon` tinyint(1) NOT NULL DEFAULT '0',
  `level` tinyint(1) NOT NULL DEFAULT '1',
  `dateline` int(10) unsigned NOT NULL DEFAULT '0',
  `failures` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `appid` smallint(6) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`mailid`),
  KEY `appid` (`appid`),
  KEY `level` (`level`,`failures`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- 表的结构 `su_memberfields`
--

CREATE TABLE IF NOT EXISTS `su_memberfields` (
  `uid` mediumint(8) unsigned NOT NULL,
  `blacklist` text NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `su_memberfields`
--

INSERT INTO `su_memberfields` (`uid`, `blacklist`) VALUES
(1, ''),
(2, ''),
(3, ''),
(4, ''),
(5, ''),
(6, ''),
(7, ''),
(8, ''),
(9, ''),
(10, ''),
(11, ''),
(12, ''),
(13, ''),
(14, ''),
(15, ''),
(16, ''),
(17, ''),
(18, ''),
(19, ''),
(20, ''),
(21, ''),
(22, ''),
(23, ''),
(24, ''),
(25, ''),
(26, ''),
(27, ''),
(28, ''),
(29, ''),
(30, ''),
(31, ''),
(32, ''),
(33, ''),
(34, ''),
(35, ''),
(36, ''),
(37, ''),
(38, ''),
(39, ''),
(40, ''),
(41, ''),
(42, ''),
(43, ''),
(44, ''),
(45, ''),
(46, ''),
(47, ''),
(48, ''),
(49, ''),
(50, ''),
(51, ''),
(52, ''),
(53, ''),
(54, ''),
(55, ''),
(56, ''),
(57, ''),
(58, ''),
(59, ''),
(60, ''),
(61, ''),
(62, ''),
(63, ''),
(64, ''),
(65, ''),
(66, ''),
(67, ''),
(68, ''),
(69, ''),
(70, ''),
(71, ''),
(72, ''),
(73, ''),
(74, ''),
(75, ''),
(76, ''),
(77, ''),
(78, ''),
(79, ''),
(80, ''),
(81, ''),
(82, ''),
(83, ''),
(84, ''),
(85, ''),
(86, ''),
(87, ''),
(88, ''),
(89, ''),
(90, ''),
(91, ''),
(92, ''),
(93, ''),
(94, ''),
(95, ''),
(96, ''),
(97, ''),
(98, ''),
(99, ''),
(100, ''),
(101, ''),
(102, ''),
(103, ''),
(104, ''),
(105, ''),
(106, ''),
(107, ''),
(108, ''),
(109, ''),
(110, ''),
(111, ''),
(112, ''),
(113, ''),
(114, ''),
(115, ''),
(116, ''),
(117, '');

-- --------------------------------------------------------

--
-- 表的结构 `su_members`
--

CREATE TABLE IF NOT EXISTS `su_members` (
  `uid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `username` char(15) NOT NULL DEFAULT '',
  `password` char(32) NOT NULL DEFAULT '',
  `email` char(32) NOT NULL DEFAULT '',
  `myid` char(30) NOT NULL DEFAULT '',
  `myidkey` char(16) NOT NULL DEFAULT '',
  `regip` char(15) NOT NULL DEFAULT '',
  `regdate` int(10) unsigned NOT NULL DEFAULT '0',
  `lastloginip` int(10) NOT NULL DEFAULT '0',
  `lastlogintime` int(10) unsigned NOT NULL DEFAULT '0',
  `salt` char(6) NOT NULL,
  `secques` char(8) NOT NULL DEFAULT '',
  PRIMARY KEY (`uid`),
  UNIQUE KEY `username` (`username`),
  KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=118 ;

--
-- 转存表中的数据 `su_members`
--

INSERT INTO `su_members` (`uid`, `username`, `password`, `email`, `myid`, `myidkey`, `regip`, `regdate`, `lastloginip`, `lastlogintime`, `salt`, `secques`) VALUES
(1, '1089692', '86e221e2967dc7ff4c926e04f268124b', '', '', '', '127.0.0.1', 1378800835, 0, 0, '3bb209', ''),
(2, '1065112', 'be263e48fd00ae78868748bb9b18ca9e', '', '', '', '127.0.0.1', 1378801338, 0, 0, 'a5f44d', ''),
(3, '104760', 'b697855731e79d7bc1c452870c227011', '', '', '', '127.0.0.1', 1378801338, 0, 0, 'a6cf11', ''),
(4, '1062753', 'ac2c43195ac5e73c35f035176a610e3e', '', '', '', '127.0.0.1', 1378811253, 0, 0, '56b03a', ''),
(5, '1023032', '890ccab736983a4212bd56118318f774', '', '', '', '127.0.0.1', 1378811253, 0, 0, '578ee5', ''),
(6, 'aaaaaa', '38a3d3326e8a9cd35fd4c179f23dffc0', '', '', '', '127.0.0.1', 1378863829, 0, 0, '5916e7', ''),
(7, 'bbbbbb', '39893139c87f5a575a35ee03fde0c39b', '', '', '', '127.0.0.1', 1378979837, 0, 0, 'd8e952', ''),
(8, '1386195', 'd3aede17b9d061d78737d5e11d75d426', '', '', '', '127.0.0.1', 1379064838, 0, 0, '6eecec', ''),
(9, '1391331', 'c5b460092cd5e9005f58fe18a9c82e27', '', '', '', '127.0.0.1', 1379064839, 0, 0, '71641b', ''),
(10, '2240404', '7612446c8908b2846ca645bd33803768', '', '', '', '127.0.0.1', 1379829032, 0, 0, '82f3d4', ''),
(11, '2240362', '05b143db947b60eee1bff41c7ad10002', '', '', '', '127.0.0.1', 1379829032, 0, 0, '846ada', ''),
(12, '238261', '6db5be4179456735615334bc2f3b7381', '', '', '', '127.0.0.1', 1379902088, 0, 0, '88e1af', ''),
(13, '2319390', 'b25470c8c4ca020bb52b8438a7b254d2', '', '', '', '127.0.0.1', 1379902088, 0, 0, '89f70b', ''),
(14, '2363687', 'bb8b60910dc81295020ae46b44cfd348', '', '', '', '127.0.0.1', 1379917908, 0, 0, '42153a', ''),
(15, '2372554', '897a51f05842c51d6a1d958061e995a2', '', '', '', '127.0.0.1', 1379917924, 0, 0, '410b41', ''),
(16, '2448817', 'd7a5b08728afdeea6b8cf48e09c39965', '', '', '', '127.0.0.1', 1379987007, 0, 0, 'f351c3', ''),
(17, '2586903', '0d86ee26f7eecb3608ea5a2b59fa515c', '', '', '', '127.0.0.1', 1380112361, 0, 0, '93bfe4', ''),
(18, '2663555', 'f3b408d07c001f9a72c7ecc540fc6721', '', '', '', '127.0.0.1', 1380182157, 0, 0, 'd49b79', ''),
(19, '2664350', '93f8520675dd0e131036445e7de85bbb', '', '', '', '127.0.0.1', 1380182185, 0, 0, '967299', ''),
(20, '2647789', '3a5295dcdc17948fb59cf8f18ba8c0c3', '', '', '', '127.0.0.1', 1380182352, 0, 0, '0cd5a9', ''),
(21, '2655805', '47d9ab8c71b23e6e3ef19ad7d361cb9b', '', '', '', '127.0.0.1', 1380182372, 0, 0, '42818a', ''),
(22, '2687356', 'dc275fe8dc591f2c6f5800a2bd73e63b', '', '', '', '127.0.0.1', 1380182475, 0, 0, 'bc50fa', ''),
(23, '2698260', 'e7eb8c7b0197a5028ce220074e3a8283', '', '', '', '127.0.0.1', 1380182674, 0, 0, '2ea441', ''),
(24, '2657104', '8e1ed1a820588a583dbc5730d8998761', '', '', '', '127.0.0.1', 1380183640, 0, 0, '8d0b0f', ''),
(25, '2656318', '83c4008e20660e2bbe590849a9142915', '', '', '', '127.0.0.1', 1380189944, 0, 0, '863b16', ''),
(26, '2694116', 'f8077cc3d80a414fdf17facb7a405314', '', '', '', '127.0.0.1', 1380197302, 0, 0, '612d78', ''),
(27, '2680510', '69b43becad1df0ac3129017d0ab076e4', '', '', '', '127.0.0.1', 1380197449, 0, 0, '928abd', ''),
(28, '2625120', 'cf42eafbac9dc0410578696d9df884f4', '', '', '', '127.0.0.1', 1380197509, 0, 0, '577268', ''),
(29, '2659323', 'b3aa4085c6838dc3a21aefa7c04ff020', '', '', '', '127.0.0.1', 1380197542, 0, 0, '6b5dee', ''),
(30, '2634757', 'a22494a00ced4eac6e9af5c11824edcb', '', '', '', '127.0.0.1', 1380197546, 0, 0, 'a841e7', ''),
(31, '268632', 'a9ba4e847a52e09cf03836646663ecb7', '', '', '', '127.0.0.1', 1380197547, 0, 0, 'b5c55f', ''),
(32, '2660479', 'bc220fa29e4bbb9949e930e0449ff9b7', '', '', '', '127.0.0.1', 1380197548, 0, 0, 'c0a11d', ''),
(33, '2678546', '14c12cbaa436d4b6b234efa17aa968d1', '', '', '', '127.0.0.1', 1380197548, 0, 0, 'c7446e', ''),
(34, '2666594', '9a2365abb28217290356660e078829df', '', '', '', '127.0.0.1', 1380197782, 0, 0, '605094', ''),
(35, '2673902', '235d576d34e8768f7a20095b70771ad7', '', '', '', '127.0.0.1', 1380197821, 0, 0, 'd7d75e', ''),
(36, '2744509', 'cf694af12d7410f074af0b21f492f260', '', '', '', '127.0.0.1', 1380260239, 0, 0, 'f1f090', ''),
(37, '2784714', '2d4ed6d9ae779dc6fcb8e033cb0a3ddd', '', '', '', '127.0.0.1', 1380260261, 0, 0, '542beb', ''),
(38, '2776985', '815d87a3e79c813bf3313b06bc43ee3d', '', '', '', '127.0.0.1', 1380260303, 0, 0, 'fd12f6', ''),
(39, '2794921', '93ce54bdb62c643b9efb98245dca592b', '', '', '', '127.0.0.1', 1380260304, 0, 0, '0b4e09', ''),
(40, '2773239', '1e898f31315040581bd43c7387492e55', '', '', '', '127.0.0.1', 1380260305, 0, 0, '169728', ''),
(41, '2745535', '2f4436e94014fb0de05d4651c20af7c2', '', '', '', '127.0.0.1', 1380260306, 0, 0, '209ff3', ''),
(42, '2776577', 'a4c83d3a82463524975652ee623c3275', '', '', '', '127.0.0.1', 1380260306, 0, 0, '261e48', ''),
(43, '2745276', '4671562c7d171d8d7b67b446a16afc0f', '', '', '', '127.0.0.1', 1380260306, 0, 0, '2b564b', ''),
(44, '2722343', '026b18cefacab15345dd00946113ce05', '', '', '', '127.0.0.1', 1380260307, 0, 0, '319260', ''),
(45, '2746944', 'd2e50a29647e7c9559543ad3600b33c2', '', '', '', '127.0.0.1', 1380260307, 0, 0, '3766a6', ''),
(46, '2714013', 'f904eac603870b2b66628c4b180e869e', '', '', '', '127.0.0.1', 1380260307, 0, 0, '3cc5ba', ''),
(47, '2785463', '3d74a9fbb61372d040c863c91b564ff8', '', '', '', '127.0.0.1', 1380260308, 0, 0, '4261a4', ''),
(48, '2750161', '066bb2fa8bc9bb86df330e8813916233', '', '', '', '127.0.0.1', 1380260308, 0, 0, '46a774', ''),
(49, '2724973', '6854be2cdaae2bcc497d12e934256d34', '', '', '', '127.0.0.1', 1380260308, 0, 0, '4b27dd', ''),
(50, '273790', '88cfe66ddaa525a8a310b9852810c855', '', '', '', '127.0.0.1', 1380260309, 0, 0, '50e308', ''),
(51, '2766620', '4852c9d552d1f64ffcaa08fe8ed32f78', '', '', '', '127.0.0.1', 1380260309, 0, 0, '56ea16', ''),
(52, '2741032', 'dd18d1242b9b3ced5aa442cdcaab5d03', '', '', '', '127.0.0.1', 1380260309, 0, 0, '5cf125', ''),
(53, '2723837', '7db1884241cbf396af5089c85b62a4ed', '', '', '', '127.0.0.1', 1380260310, 0, 0, '6563aa', ''),
(54, '2743601', '500432a05d29791034aec68e008a0dc0', '', '', '', '127.0.0.1', 1380260366, 0, 0, 'e23401', ''),
(55, '2773390', '1be21ebaaa661dafb91ee3afc36f9422', '', '', '', '127.0.0.1', 1380260393, 0, 0, '9cb5c8', ''),
(56, '2720279', 'f070a57355653cfaa70d16b24d4a5821', '', '', '', '127.0.0.1', 1380260398, 0, 0, 'ec12d4', ''),
(57, '2745919', '120e93225fcc56f1a48acbd189564d74', '', '', '', '127.0.0.1', 1380260399, 0, 0, 'f67578', ''),
(58, '2775621', '1e8c534438bdd24c9bbfaf7863c4db34', '', '', '', '127.0.0.1', 1380260399, 0, 0, 'fce9e8', ''),
(59, '2757903', 'be28354ed35b41a10a0317ae689d530f', '', '', '', '127.0.0.1', 1380260400, 0, 0, '015906', ''),
(60, '2760801', '972acecd53f2659fdc6ea24b77a4bbea', '', '', '', '127.0.0.1', 1380260530, 0, 0, '20b2bf', ''),
(61, '2778959', 'd9909820cfce6422dd5633a6dfffde47', '', '', '', '127.0.0.1', 1380260800, 0, 0, '0217f8', ''),
(62, '2783897', '37c53c19d3c88ef448a3b888cf58c325', '', '', '', '127.0.0.1', 1380261079, 0, 0, '74a817', ''),
(63, '2732283', 'eb64b75db7d3b8fbdd7e14a73103a3d6', '', '', '', '127.0.0.1', 1380261079, 0, 0, '7def3a', ''),
(64, '2726384', 'c218e05a4e997232b076cc79ff830a5e', '', '', '', '127.0.0.1', 1380261080, 0, 0, '87a9e4', ''),
(65, '278843', 'ed01eca0cce48c6ac9c58e268fe913ab', '', '', '', '127.0.0.1', 1380261363, 0, 0, '3b4c5c', ''),
(66, '2757731', '829c07f669d1c346767a30c3abf231ba', '', '', '', '127.0.0.1', 1380261368, 0, 0, '8ee768', ''),
(67, '2753620', 'e5b0430568c378eda7e28c3303d1e0c6', '', '', '', '127.0.0.1', 1380261378, 0, 0, '20b0ce', ''),
(68, '277164', '285135844abb522494c152c90bc9902b', '', '', '', '127.0.0.1', 1380261378, 0, 0, '2d4b8d', ''),
(69, '2724403', 'ecdfa72d8676d2cded4a81d64ee3bc52', '', '', '', '127.0.0.1', 1380261379, 0, 0, '3208cc', ''),
(70, '2797123', '2333f8da0da9f95ed3ea60e82cb00a4d', '', '', '', '127.0.0.1', 1380261379, 0, 0, '34fabf', ''),
(71, '2770129', '75912605edc13d2b1091993628f33891', '', '', '', '127.0.0.1', 1380261379, 0, 0, '37d92a', ''),
(72, '2790849', 'fdcce9ea494e8d8f78303dd39c291287', '', '', '', '127.0.0.1', 1380261379, 0, 0, '3ab3ad', ''),
(73, '2718347', '4232774d830323da9dfcb2835c082d0e', '', '', '', '127.0.0.1', 1380261379, 0, 0, '3dc8c8', ''),
(74, '2717159', '1f2aac093a560648334c408bd2c0e99f', '', '', '', '127.0.0.1', 1380261380, 0, 0, '414d83', ''),
(75, '2746507', '5e911bc832cd4dbc8fb98dfc45f53979', '', '', '', '127.0.0.1', 1380261380, 0, 0, '4456e6', ''),
(76, '2717289', 'be9bcbce31df7afceac5d20189a7e467', '', '', '', '127.0.0.1', 1380261405, 0, 0, 'd5b829', ''),
(77, '2760247', '6bee9249cf8dfbd16dd1c11ebaca4f8f', '', '', '', '127.0.0.1', 1380261469, 0, 0, 'db5c3b', ''),
(78, '277830', 'd9d805cd66336976b39a3376b603d428', '', '', '', '127.0.0.1', 1380261472, 0, 0, '09d259', ''),
(79, '2784387', '9f9c0b6c3cc69ef98a5cff62f8cc34dc', '', '', '', '127.0.0.1', 1380261473, 0, 0, '1244de', ''),
(80, '2731456', '59161655e07126266ef3bfd9f2464fce', '', '', '', '127.0.0.1', 1380261473, 0, 0, '18d88e', ''),
(81, '2797054', '68b05970cee5a919a5c30afd00f0a83f', '', '', '', '127.0.0.1', 1380261474, 0, 0, '2060b0', ''),
(82, '2758061', '844ef9598d1f03a942f3ca61f77fa792', '', '', '', '127.0.0.1', 1380261474, 0, 0, '27c36c', ''),
(83, '2726014', '274c242021bd9686099b689e7de9dd8f', '', '', '', '127.0.0.1', 1380261474, 0, 0, '2de5d3', ''),
(84, '2771219', '7f07c0fb6e07352ab013254fad0ed101', '', '', '', '127.0.0.1', 1380261475, 0, 0, '358d35', ''),
(85, '2799215', 'fb3801f1fcf049cda2b3270ad0c5f298', '', '', '', '127.0.0.1', 1380261475, 0, 0, '39e68d', ''),
(86, '2727884', 'dc13fbe3538813e46121d42c31ad1273', '', '', '', '127.0.0.1', 1380261475, 0, 0, '3eb12f', ''),
(87, '2747093', '3235634ded105e0057d3f8ec1ad47bda', '', '', '', '127.0.0.1', 1380261476, 0, 0, '448b9a', ''),
(88, '2753624', '7adc1bd432f84178000ec0485ca66452', '', '', '', '127.0.0.1', 1380261476, 0, 0, '47d37e', ''),
(89, '2737135', 'fbdfa38e67a3635e4ebb9445ef8e3f19', '', '', '', '127.0.0.1', 1380261476, 0, 0, '4c482f', ''),
(90, '2781237', 'be7573ff379acdd258e2b33691df08f2', '', '', '', '127.0.0.1', 1380261477, 0, 0, '52788b', ''),
(91, '2787491', '04ba2eef9e67f3a14ac9370d83499ed0', '', '', '', '127.0.0.1', 1380261477, 0, 0, '56415a', ''),
(92, '2735152', 'e1cad8eba0bcf49a0f1f823c4626dd63', '', '', '', '127.0.0.1', 1380261477, 0, 0, '594ea5', ''),
(93, '2797022', 'f252f085ab872599b87da5e6388d1f04', '', '', '', '127.0.0.1', 1380261477, 0, 0, '5c4868', ''),
(94, '2731403', 'a283d600e4efa4832e63b3dfb384123f', '', '', '', '127.0.0.1', 1380261478, 0, 0, '613870', ''),
(95, '2798842', '538c6fca254bd42c3597586baad74e47', '', '', '', '127.0.0.1', 1380261485, 0, 0, 'db34d6', ''),
(96, '2760978', '77150091fb8543f09d372160a9e70334', '', '', '', '127.0.0.1', 1380261531, 0, 0, 'b5d069', ''),
(97, '2717767', 'ea666c44f2640e0fa5e4197689c675ec', '', '', '', '127.0.0.1', 1380261533, 0, 0, 'd43e7d', ''),
(98, '2720810', '70068586ac1e79a90b1c3e342a7bd0e4', '', '', '', '127.0.0.1', 1380261533, 0, 0, 'dae99e', ''),
(99, '2781738', 'adc1306bc936a527ee405a1cf3ff2e3d', '', '', '', '127.0.0.1', 1380261533, 0, 0, 'df23b6', ''),
(100, '2773053', '5bfb1a95b29b60bcd880c695e7106b55', '', '', '', '127.0.0.1', 1380261534, 0, 0, 'e38eec', ''),
(101, '2711597', 'e4352c21a6394c6e0efe0489b9830f08', '', '', '', '127.0.0.1', 1380261534, 0, 0, 'e7b963', ''),
(102, '2728269', '6dded39a6571ac14e9d5ec107c8d7247', '', '', '', '127.0.0.1', 1380261534, 0, 0, 'eb14d0', ''),
(103, '2797265', '1e9c7ff53f774d1f56f891793bd93e52', '', '', '', '127.0.0.1', 1380261534, 0, 0, 'ee7424', ''),
(104, '2743511', '2f4e920a8f28d6b7c0d97c4d308cd755', '', '', '', '127.0.0.1', 1380261566, 0, 0, 'e7cc42', ''),
(105, '2770524', '54e6920b8bbfd3b5e86d61a3fb3e2443', '', '', '', '127.0.0.1', 1380261567, 0, 0, 'f33c72', ''),
(106, '2784828', '484eb7db5bd8d47edf314e7da55b9242', '', '', '', '127.0.0.1', 1380261627, 0, 0, 'b178fb', ''),
(107, '2740391', '377082f2e1ad672e8d34675bcb6aeb26', '', '', '', '127.0.0.1', 1380261831, 0, 0, '70eef5', ''),
(108, '2758049', '50c2e91637131dbcea2c77c0c69b31d8', '', '', '', '127.0.0.1', 1380263642, 0, 0, 'abb34d', ''),
(109, '277886', 'c78392d2c664e7c791170bd20666cad0', '', '', '', '127.0.0.1', 1380263697, 0, 0, '19f2a0', ''),
(110, '2718797', '26616758ed5ec295c63c18e7e8dceed8', '', '', '', '127.0.0.1', 1380263699, 0, 0, '3952e8', ''),
(111, '2740439', 'a29b7df9e4b3532efcfb291065e1db9c', '', '', '', '127.0.0.1', 1380265936, 0, 0, '0b1bc4', ''),
(112, '2740638', 'b9714028ad03dafe66dac2792d59fecb', '', '', '', '127.0.0.1', 1380266176, 0, 0, '05dec8', ''),
(113, '2723540', '98f6cfb5b4919014c9787dfe67d9bba2', '', '', '', '127.0.0.1', 1380266181, 0, 0, '5caa47', ''),
(114, '2759886', '3e698cdbfcd0c55dc4d5cae59674247e', '', '', '', '127.0.0.1', 1380266279, 0, 0, '70a26f', ''),
(115, '2758277', '64b4170e70511bb0fcb5999c0a87129d', '', '', '', '127.0.0.1', 1380266309, 0, 0, '5e1abe', ''),
(116, '2728763', '833e4989e953be7d7ed93b637912a4e0', '', '', '', '127.0.0.1', 1380270704, 0, 0, '043736', ''),
(117, '17183510', '64ec2db8ceda02b95213b2841407c9a1', '', '', '', '127.0.0.1', 1380425447, 0, 0, '7d11e1', '');

-- --------------------------------------------------------

--
-- 表的结构 `su_mergemembers`
--

CREATE TABLE IF NOT EXISTS `su_mergemembers` (
  `appid` smallint(6) unsigned NOT NULL,
  `username` char(15) NOT NULL,
  PRIMARY KEY (`appid`,`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `su_newpm`
--

CREATE TABLE IF NOT EXISTS `su_newpm` (
  `uid` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `su_notelist`
--

CREATE TABLE IF NOT EXISTS `su_notelist` (
  `noteid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `operation` char(32) NOT NULL,
  `closed` tinyint(4) NOT NULL DEFAULT '0',
  `totalnum` smallint(6) unsigned NOT NULL DEFAULT '0',
  `succeednum` smallint(6) unsigned NOT NULL DEFAULT '0',
  `getdata` mediumtext NOT NULL,
  `postdata` mediumtext NOT NULL,
  `dateline` int(10) unsigned NOT NULL DEFAULT '0',
  `pri` tinyint(3) NOT NULL DEFAULT '0',
  `app1` tinyint(4) NOT NULL,
  `app2` tinyint(4) NOT NULL,
  PRIMARY KEY (`noteid`),
  KEY `closed` (`closed`,`pri`,`noteid`),
  KEY `dateline` (`dateline`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `su_notelist`
--

INSERT INTO `su_notelist` (`noteid`, `operation`, `closed`, `totalnum`, `succeednum`, `getdata`, `postdata`, `dateline`, `pri`, `app1`, `app2`) VALUES
(1, 'updateapps', 1, 0, 0, '', '<?xml version="1.0" encoding="ISO-8859-1"?>\r\n<root>\r\n	<item id="1">\r\n		<item id="appid"><![CDATA[1]]></item>\r\n		<item id="type"><![CDATA[DISCUZX]]></item>\r\n		<item id="name"><![CDATA[kids bbs!]]></item>\r\n		<item id="url"><![CDATA[http://bbs.kids.com]]></item>\r\n		<item id="ip"><![CDATA[]]></item>\r\n		<item id="charset"><![CDATA[utf-8]]></item>\r\n		<item id="synlogin"><![CDATA[1]]></item>\r\n		<item id="extra"><![CDATA[]]></item>\r\n	</item>\r\n	<item id="UC_API"><![CDATA[http://ucserver.kids.com]]></item>\r\n</root>', 0, 0, 0, 0),
(2, 'updatepw', 1, 1, 1, 'username=aaaaaaaa&password=', '', 1378362370, 0, 1, 0),
(3, 'updatepw', 1, 1, 1, 'username=aaaaaaaa&password=', '', 1378362371, 0, 1, 0),
(4, 'updatepw', 1, 1, 1, 'username=bbbbbb&password=', '', 1378362371, 0, 1, 0),
(5, 'updateapps', 1, 1, 1, '', '<?xml version="1.0" encoding="ISO-8859-1"?>\r\n<root>\r\n	<item id="1">\r\n		<item id="appid"><![CDATA[1]]></item>\r\n		<item id="type"><![CDATA[DISCUZX]]></item>\r\n		<item id="name"><![CDATA[kids bbs!]]></item>\r\n		<item id="url"><![CDATA[http://bbs.kids.com]]></item>\r\n		<item id="ip"><![CDATA[]]></item>\r\n		<item id="viewprourl"><![CDATA[]]></item>\r\n		<item id="apifilename"><![CDATA[uc.php]]></item>\r\n		<item id="charset"><![CDATA[utf-8]]></item>\r\n		<item id="synlogin"><![CDATA[1]]></item>\r\n		<item id="extra"><![CDATA[]]></item>\r\n		<item id="recvnote"><![CDATA[1]]></item>\r\n	</item>\r\n	<item id="2">\r\n		<item id="appid"><![CDATA[2]]></item>\r\n		<item id="type"><![CDATA[OTHER]]></item>\r\n		<item id="name"><![CDATA[ci平台]]></item>\r\n		<item id="url"><![CDATA[http://passport.kids.com/api/index]]></item>\r\n		<item id="ip"><![CDATA[]]></item>\r\n		<item id="viewprourl"><![CDATA[]]></item>\r\n		<item id="apifilename"><![CDATA[uc.php]]></item>\r\n		<item id="charset"><![CDATA[]]></item>\r\n		<item id="synlogin"><![CDATA[1]]></item>\r\n		<item id="extra">\r\n			<item id="apppath"><![CDATA[]]></item>\r\n		</item>\r\n		<item id="recvnote"><![CDATA[1]]></item>\r\n	</item>\r\n	<item id="UC_API"><![CDATA[http://ucserver.kids.com]]></item>\r\n</root>', 1378362488, 0, 1, 0),
(6, 'updatepw', 0, 5, 0, 'username=cccccc&password=', '', 1378362832, 0, 0, -5),
(7, 'updatepw', 0, 5, 0, 'username=cccccc&password=', '', 1378362967, 0, 0, -5),
(8, 'updatepw', 0, 5, 0, 'username=cccccc&password=', '', 1378363099, 0, 0, -5),
(9, 'updatepw', 0, 2, 0, 'username=cccccc&password=', '', 1378366478, 0, 0, -2),
(10, 'updatepw', 0, 0, 0, 'username=cccccc&password=', '', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `su_pm_indexes`
--

CREATE TABLE IF NOT EXISTS `su_pm_indexes` (
  `pmid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `plid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`pmid`),
  KEY `plid` (`plid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `su_pm_lists`
--

CREATE TABLE IF NOT EXISTS `su_pm_lists` (
  `plid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `authorid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `pmtype` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `subject` varchar(80) NOT NULL,
  `members` smallint(5) unsigned NOT NULL DEFAULT '0',
  `min_max` varchar(17) NOT NULL,
  `dateline` int(10) unsigned NOT NULL DEFAULT '0',
  `lastmessage` text NOT NULL,
  PRIMARY KEY (`plid`),
  KEY `pmtype` (`pmtype`),
  KEY `min_max` (`min_max`),
  KEY `authorid` (`authorid`,`dateline`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `su_pm_members`
--

CREATE TABLE IF NOT EXISTS `su_pm_members` (
  `plid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `uid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `isnew` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `pmnum` int(10) unsigned NOT NULL DEFAULT '0',
  `lastupdate` int(10) unsigned NOT NULL DEFAULT '0',
  `lastdateline` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`plid`,`uid`),
  KEY `isnew` (`isnew`),
  KEY `lastdateline` (`uid`,`lastdateline`),
  KEY `lastupdate` (`uid`,`lastupdate`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `su_pm_messages_0`
--

CREATE TABLE IF NOT EXISTS `su_pm_messages_0` (
  `pmid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `plid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `authorid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `message` text NOT NULL,
  `delstatus` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `dateline` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`pmid`),
  KEY `plid` (`plid`,`delstatus`,`dateline`),
  KEY `dateline` (`plid`,`dateline`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `su_pm_messages_1`
--

CREATE TABLE IF NOT EXISTS `su_pm_messages_1` (
  `pmid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `plid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `authorid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `message` text NOT NULL,
  `delstatus` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `dateline` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`pmid`),
  KEY `plid` (`plid`,`delstatus`,`dateline`),
  KEY `dateline` (`plid`,`dateline`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `su_pm_messages_2`
--

CREATE TABLE IF NOT EXISTS `su_pm_messages_2` (
  `pmid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `plid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `authorid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `message` text NOT NULL,
  `delstatus` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `dateline` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`pmid`),
  KEY `plid` (`plid`,`delstatus`,`dateline`),
  KEY `dateline` (`plid`,`dateline`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `su_pm_messages_3`
--

CREATE TABLE IF NOT EXISTS `su_pm_messages_3` (
  `pmid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `plid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `authorid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `message` text NOT NULL,
  `delstatus` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `dateline` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`pmid`),
  KEY `plid` (`plid`,`delstatus`,`dateline`),
  KEY `dateline` (`plid`,`dateline`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `su_pm_messages_4`
--

CREATE TABLE IF NOT EXISTS `su_pm_messages_4` (
  `pmid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `plid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `authorid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `message` text NOT NULL,
  `delstatus` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `dateline` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`pmid`),
  KEY `plid` (`plid`,`delstatus`,`dateline`),
  KEY `dateline` (`plid`,`dateline`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `su_pm_messages_5`
--

CREATE TABLE IF NOT EXISTS `su_pm_messages_5` (
  `pmid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `plid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `authorid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `message` text NOT NULL,
  `delstatus` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `dateline` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`pmid`),
  KEY `plid` (`plid`,`delstatus`,`dateline`),
  KEY `dateline` (`plid`,`dateline`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `su_pm_messages_6`
--

CREATE TABLE IF NOT EXISTS `su_pm_messages_6` (
  `pmid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `plid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `authorid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `message` text NOT NULL,
  `delstatus` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `dateline` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`pmid`),
  KEY `plid` (`plid`,`delstatus`,`dateline`),
  KEY `dateline` (`plid`,`dateline`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `su_pm_messages_7`
--

CREATE TABLE IF NOT EXISTS `su_pm_messages_7` (
  `pmid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `plid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `authorid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `message` text NOT NULL,
  `delstatus` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `dateline` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`pmid`),
  KEY `plid` (`plid`,`delstatus`,`dateline`),
  KEY `dateline` (`plid`,`dateline`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `su_pm_messages_8`
--

CREATE TABLE IF NOT EXISTS `su_pm_messages_8` (
  `pmid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `plid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `authorid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `message` text NOT NULL,
  `delstatus` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `dateline` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`pmid`),
  KEY `plid` (`plid`,`delstatus`,`dateline`),
  KEY `dateline` (`plid`,`dateline`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `su_pm_messages_9`
--

CREATE TABLE IF NOT EXISTS `su_pm_messages_9` (
  `pmid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `plid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `authorid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `message` text NOT NULL,
  `delstatus` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `dateline` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`pmid`),
  KEY `plid` (`plid`,`delstatus`,`dateline`),
  KEY `dateline` (`plid`,`dateline`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `su_protectedmembers`
--

CREATE TABLE IF NOT EXISTS `su_protectedmembers` (
  `uid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `username` char(15) NOT NULL DEFAULT '',
  `appid` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `dateline` int(10) unsigned NOT NULL DEFAULT '0',
  `admin` char(15) NOT NULL DEFAULT '0',
  UNIQUE KEY `username` (`username`,`appid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `su_protectedmembers`
--

INSERT INTO `su_protectedmembers` (`uid`, `username`, `appid`, `dateline`, `admin`) VALUES
(2, 'kidsadmin', 0, 1377851696, '');

-- --------------------------------------------------------

--
-- 表的结构 `su_settings`
--

CREATE TABLE IF NOT EXISTS `su_settings` (
  `k` varchar(32) NOT NULL DEFAULT '',
  `v` text NOT NULL,
  PRIMARY KEY (`k`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `su_settings`
--

INSERT INTO `su_settings` (`k`, `v`) VALUES
('accessemail', ''),
('censoremail', ''),
('censorusername', ''),
('dateformat', 'y-n-j'),
('doublee', '0'),
('nextnotetime', '0'),
('timeoffset', '28800'),
('privatepmthreadlimit', '25'),
('chatpmthreadlimit', '30'),
('chatpmmemberlimit', '35'),
('pmfloodctrl', '15'),
('pmcenter', '1'),
('sendpmseccode', '1'),
('pmsendregdays', '0'),
('maildefault', 'username@21cn.com'),
('mailsend', '1'),
('mailserver', 'smtp.21cn.com'),
('mailport', '25'),
('mailauth', '1'),
('mailfrom', 'UCenter <username@21cn.com>'),
('mailauth_username', 'username@21cn.com'),
('mailauth_password', 'password'),
('maildelimiter', '0'),
('mailusername', '1'),
('mailsilent', '1'),
('version', '1.6.0');

-- --------------------------------------------------------

--
-- 表的结构 `su_sqlcache`
--

CREATE TABLE IF NOT EXISTS `su_sqlcache` (
  `sqlid` char(6) NOT NULL DEFAULT '',
  `data` char(100) NOT NULL,
  `expiry` int(10) unsigned NOT NULL,
  PRIMARY KEY (`sqlid`),
  KEY `expiry` (`expiry`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `su_tags`
--

CREATE TABLE IF NOT EXISTS `su_tags` (
  `tagname` char(20) NOT NULL,
  `appid` smallint(6) unsigned NOT NULL DEFAULT '0',
  `data` mediumtext,
  `expiration` int(10) unsigned NOT NULL,
  KEY `tagname` (`tagname`,`appid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `su_vars`
--

CREATE TABLE IF NOT EXISTS `su_vars` (
  `name` char(32) NOT NULL DEFAULT '',
  `value` char(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`name`)
) ENGINE=MEMORY DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
