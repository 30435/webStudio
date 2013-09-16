-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013-09-16 11:04:28
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
(9, '');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

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
(9, '1391331', 'c5b460092cd5e9005f58fe18a9c82e27', '', '', '', '127.0.0.1', 1379064839, 0, 0, '71641b', '');

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
