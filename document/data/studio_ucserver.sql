-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013-12-27 10:34:11
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
('127.0.0.1', 1, 1382499658);

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
(1269, ''),
(1270, ''),
(1271, ''),
(1272, ''),
(1273, ''),
(1274, ''),
(1275, ''),
(1276, ''),
(1277, ''),
(1278, ''),
(1279, ''),
(1280, ''),
(1281, ''),
(1282, ''),
(1283, ''),
(1284, ''),
(1285, ''),
(1286, '');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1287 ;

--
-- 转存表中的数据 `su_members`
--

INSERT INTO `su_members` (`uid`, `username`, `password`, `email`, `myid`, `myidkey`, `regip`, `regdate`, `lastloginip`, `lastlogintime`, `salt`, `secques`) VALUES
(1, 'kidsadmin1', '38e52520c7b3fd8990e142366771e2ed', 'aaaaaa@admin.com', '', '', '127.0.0.1', 1382499684, 0, 0, '212635', ''),
(2, 'kidsadmin', '3daa74a676f1bd69b8e56ee708570ce1', '', '', '', '', 0, 0, 0, '135552', ''),
(1240, '80000372', '31bd1a31fc5b48bc4ccc50871cf06b86', '', '', '', '', 1382282544, 0, 0, '0e8c44', ''),
(1241, '80000373', '31bd1a31fc5b48bc4ccc50871cf06b86', '', '', '', '', 1382282544, 0, 0, '0e8c44', ''),
(1242, '80000374', '31bd1a31fc5b48bc4ccc50871cf06b86', '', '', '', '', 1382282544, 0, 0, '0e8c44', ''),
(1243, '80000375', '31bd1a31fc5b48bc4ccc50871cf06b86', '', '', '', '', 1382282544, 0, 0, '0e8c44', ''),
(1244, '80000376', '31bd1a31fc5b48bc4ccc50871cf06b86', '', '', '', '', 1382282544, 0, 0, '0e8c44', ''),
(1245, '80000377', '31bd1a31fc5b48bc4ccc50871cf06b86', '', '', '', '', 1382282544, 0, 0, '0e8c44', ''),
(1246, '80000378', '31bd1a31fc5b48bc4ccc50871cf06b86', '', '', '', '', 1382282544, 0, 0, '0e8c44', ''),
(1247, '80000379', '31bd1a31fc5b48bc4ccc50871cf06b86', '', '', '', '', 1382282544, 0, 0, '0e8c44', ''),
(1248, '80000380', '31bd1a31fc5b48bc4ccc50871cf06b86', '', '', '', '', 1382282544, 0, 0, '0e8c44', ''),
(1249, '80000381', '31bd1a31fc5b48bc4ccc50871cf06b86', '', '', '', '', 1382282544, 0, 0, '0e8c44', ''),
(1250, '80000382', '31bd1a31fc5b48bc4ccc50871cf06b86', '', '', '', '', 1382282544, 0, 0, '0e8c44', ''),
(1251, '80000383', '31bd1a31fc5b48bc4ccc50871cf06b86', '', '', '', '', 1382282544, 0, 0, '0e8c44', ''),
(1252, '80000384', '31bd1a31fc5b48bc4ccc50871cf06b86', '', '', '', '', 1382282544, 0, 0, '0e8c44', ''),
(1253, '80000385', '31bd1a31fc5b48bc4ccc50871cf06b86', '', '', '', '', 1382282544, 0, 0, '0e8c44', ''),
(1254, '80000386', '31bd1a31fc5b48bc4ccc50871cf06b86', '', '', '', '', 1382282544, 0, 0, '0e8c44', ''),
(1255, '80000387', '31bd1a31fc5b48bc4ccc50871cf06b86', '', '', '', '', 1382282544, 0, 0, '0e8c44', ''),
(1256, '80000388', '31bd1a31fc5b48bc4ccc50871cf06b86', '', '', '', '', 1382282544, 0, 0, '0e8c44', ''),
(1257, '80000389', '31bd1a31fc5b48bc4ccc50871cf06b86', '', '', '', '', 1382282544, 0, 0, '0e8c44', ''),
(1258, '80000390', '31bd1a31fc5b48bc4ccc50871cf06b86', '', '', '', '', 1382282544, 0, 0, '0e8c44', ''),
(1259, '80000391', '31bd1a31fc5b48bc4ccc50871cf06b86', '', '', '', '', 1382282544, 0, 0, '0e8c44', ''),
(1260, '80000392', '31bd1a31fc5b48bc4ccc50871cf06b86', '', '', '', '', 1382282544, 0, 0, '0e8c44', ''),
(1261, '80000393', '31bd1a31fc5b48bc4ccc50871cf06b86', '', '', '', '', 1382282544, 0, 0, '0e8c44', ''),
(1262, '80000394', '31bd1a31fc5b48bc4ccc50871cf06b86', '', '', '', '', 1382282544, 0, 0, '0e8c44', ''),
(1263, '80000395', '31bd1a31fc5b48bc4ccc50871cf06b86', '', '', '', '', 1382282544, 0, 0, '0e8c44', ''),
(1264, '80000396', '31bd1a31fc5b48bc4ccc50871cf06b86', '', '', '', '', 1382282544, 0, 0, '0e8c44', ''),
(1265, '80000397', '31bd1a31fc5b48bc4ccc50871cf06b86', '', '', '', '', 1382282544, 0, 0, '0e8c44', ''),
(1266, '80000398', '31bd1a31fc5b48bc4ccc50871cf06b86', '', '', '', '', 1382282544, 0, 0, '0e8c44', ''),
(1267, '80000399', '31bd1a31fc5b48bc4ccc50871cf06b86', '', '', '', '', 1382282544, 0, 0, '0e8c44', ''),
(1268, '80000400', '31bd1a31fc5b48bc4ccc50871cf06b86', '', '', '', '', 1382282541, 0, 0, '0e8c44', ''),
(1269, 'cccccc', '3f74eee9087dfafd763c5ac03d667efb', '', '', '', '127.0.0.1', 1382597684, 0, 0, '490eb6', ''),
(1270, '18110861', '1769247dcc1cbfc43faaa6bb4b3e668a', '', '', '', '127.0.0.1', 1383043076, 0, 0, '4af195', ''),
(1271, '12455107', '0950822aa827eef4f2940ec101c9d1b5', '', '', '', '127.0.0.1', 1383120780, 0, 0, 'c3953d', ''),
(1272, '12543609', '38f38c06fc93ba83d40e5f9d831e1a51', '', '', '', '127.0.0.1', 1383121202, 0, 0, '22e5fb', ''),
(1273, '18962868', '517afe1d9fdbd89a31d3ef613fb0465d', '', '', '', '127.0.0.1', 1383123311, 0, 0, 'f6b526', ''),
(1274, '17183510', '7d0e9408aba67f0b7426986e5a515ccc', '', '', '', '127.0.0.1', 1383123989, 0, 0, '525ed9', ''),
(1275, '19028947', '5ac3c0f93f04cdf56c075246fbfac629', '', '', '', '127.0.0.1', 1383207901, 0, 0, 'dde3f0', ''),
(1276, '13594205', 'e826b2dc557af0bf95cb3b830f267aab', 'aaa@ddd.com', '', '', '127.0.0.1', 1383211577, 0, 0, '9d44c5', ''),
(1277, '10884184', '4edcf7412bd13c662c1080d36d8c43a3', '', '', '', '127.0.0.1', 1383273858, 0, 0, '2368e6', ''),
(1278, '13638307', 'd47f19c9030e4c4a517a2675cd45c4f7', '', '', '', '127.0.0.1', 1383535008, 0, 0, '09254e', ''),
(1279, '15538984', 'a34da7e81a3e697415c5b4631e21116e', '', '', '', '127.0.0.1', 1383536721, 0, 0, '152639', ''),
(1280, '16779997', 'a0b75b1f18e4b1a3d68173267933cc43', '', '', '', '127.0.0.1', 1383537088, 0, 0, '07e55a', ''),
(1281, '17283036', 'e8b6338357b7994a3e57b1bde42793c0', '', '', '', '127.0.0.1', 1383537123, 0, 0, '3bae2b', ''),
(1282, '16075186', 'fe67d762ad6e702bfd3972a7e278a1cd', '', '', '', '127.0.0.1', 1383644855, 0, 0, '80eb63', ''),
(1283, '18526822', '64efdd29303ce16408d4bb9fab4d5f18', '', '', '', '127.0.0.1', 1383645116, 0, 0, 'c192dd', ''),
(1284, '14408553', '2d43960c2138b40ab7564e2bda508379', '', '', '', '127.0.0.1', 1383645268, 0, 0, '4d70e7', ''),
(1285, '16462301', 'e120f218d792faedf4d2b7530937df73', '', '', '', '127.0.0.1', 1383645380, 0, 0, '462b1a', ''),
(1286, '19085843', '8188651049e41563a310748182d01e2c', '', '', '', '127.0.0.1', 1384321603, 0, 0, '321bbd', '');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- 转存表中的数据 `su_notelist`
--

INSERT INTO `su_notelist` (`noteid`, `operation`, `closed`, `totalnum`, `succeednum`, `getdata`, `postdata`, `dateline`, `pri`, `app1`, `app2`) VALUES
(1, 'updateapps', 1, 0, 0, '', '<?xml version="1.0" encoding="ISO-8859-1"?>\r\n<root>\r\n	<item id="1">\r\n		<item id="appid"><![CDATA[1]]></item>\r\n		<item id="type"><![CDATA[DISCUZX]]></item>\r\n		<item id="name"><![CDATA[kids bbs!]]></item>\r\n		<item id="url"><![CDATA[http://bbs.kids.com]]></item>\r\n		<item id="ip"><![CDATA[]]></item>\r\n		<item id="charset"><![CDATA[utf-8]]></item>\r\n		<item id="synlogin"><![CDATA[1]]></item>\r\n		<item id="extra"><![CDATA[]]></item>\r\n	</item>\r\n	<item id="UC_API"><![CDATA[http://ucserver.kids.com]]></item>\r\n</root>', 0, 0, 0, 0),
(2, 'updatepw', 1, 1, 1, 'username=aaaaaaaa&password=', '', 1378362370, 0, 1, 0),
(3, 'updatepw', 1, 1, 1, 'username=aaaaaaaa&password=', '', 1378362371, 0, 1, 0),
(4, 'updatepw', 1, 1, 1, 'username=bbbbbb&password=', '', 1378362371, 0, 1, 0),
(5, 'updateapps', 1, 1, 1, '', '<?xml version="1.0" encoding="ISO-8859-1"?>\r\n<root>\r\n	<item id="1">\r\n		<item id="appid"><![CDATA[1]]></item>\r\n		<item id="type"><![CDATA[DISCUZX]]></item>\r\n		<item id="name"><![CDATA[kids bbs!]]></item>\r\n		<item id="url"><![CDATA[http://bbs.kids.com]]></item>\r\n		<item id="ip"><![CDATA[]]></item>\r\n		<item id="viewprourl"><![CDATA[]]></item>\r\n		<item id="apifilename"><![CDATA[uc.php]]></item>\r\n		<item id="charset"><![CDATA[utf-8]]></item>\r\n		<item id="synlogin"><![CDATA[1]]></item>\r\n		<item id="extra"><![CDATA[]]></item>\r\n		<item id="recvnote"><![CDATA[1]]></item>\r\n	</item>\r\n	<item id="2">\r\n		<item id="appid"><![CDATA[2]]></item>\r\n		<item id="type"><![CDATA[OTHER]]></item>\r\n		<item id="name"><![CDATA[ci平台]]></item>\r\n		<item id="url"><![CDATA[http://passport.kids.com/api/index]]></item>\r\n		<item id="ip"><![CDATA[]]></item>\r\n		<item id="viewprourl"><![CDATA[]]></item>\r\n		<item id="apifilename"><![CDATA[uc.php]]></item>\r\n		<item id="charset"><![CDATA[]]></item>\r\n		<item id="synlogin"><![CDATA[1]]></item>\r\n		<item id="extra">\r\n			<item id="apppath"><![CDATA[]]></item>\r\n		</item>\r\n		<item id="recvnote"><![CDATA[1]]></item>\r\n	</item>\r\n	<item id="UC_API"><![CDATA[http://ucserver.kids.com]]></item>\r\n</root>', 1378362488, 0, 1, 0),
(6, 'updatepw', 1, 10, 0, 'username=cccccc&password=', '', 1385344429, 0, -5, -5),
(7, 'updatepw', 1, 10, 0, 'username=cccccc&password=', '', 1385344998, 0, -5, -5),
(8, 'updatepw', 0, 10, 0, 'username=cccccc&password=', '', 1385345086, 0, -5, -5),
(9, 'updatepw', 1, 10, 0, 'username=cccccc&password=', '', 1385345142, 0, -5, -5),
(10, 'updatepw', 0, 8, 0, 'username=cccccc&password=', '', 1385345179, 0, -3, -5),
(11, 'updatepw', 0, 4, 0, 'username=aaaaaa&password=', '', 1383124696, 0, 0, -4),
(12, 'updatepw', 0, 0, 0, 'username=cccccc&password=', '', 0, 0, 0, 0),
(13, 'updatepw', 0, 0, 0, 'username=aaaaaa&password=', '', 0, 0, 0, 0),
(14, 'renameuser', 0, 0, 0, 'uid=1&oldusername=aaaaaa&newusername=kidsadmin', '', 0, 0, 0, 0),
(15, 'updatepw', 0, 0, 0, 'username=aaaaaa&password=', '', 0, 0, 0, 0),
(16, 'renameuser', 0, 0, 0, 'uid=1&oldusername=kidsadmin&newusername=kidsadmin1', '', 0, 0, 0, 0),
(17, 'renameuser', 0, 0, 0, 'uid=2&oldusername=bbbbbb&newusername=kidsadmin', '', 0, 0, 0, 0),
(18, 'updatepw', 0, 0, 0, 'username=bbbbbb&password=', '', 0, 0, 0, 0);

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
