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
-- 数据库: `kids_ucserver`
--

-- --------------------------------------------------------

--
-- 表的结构 `ku_admins`
--

CREATE TABLE IF NOT EXISTS `ku_admins` (
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
-- 表的结构 `ku_applications`
--

CREATE TABLE IF NOT EXISTS `ku_applications` (
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
-- 转存表中的数据 `ku_applications`
--

INSERT INTO `ku_applications` (`appid`, `type`, `name`, `url`, `authkey`, `ip`, `viewprourl`, `apifilename`, `charset`, `dbcharset`, `synlogin`, `recvnote`, `extra`, `tagtemplates`, `allowips`) VALUES
(1, 'DISCUZX', 'kids bbs!', 'http://bbs.kids.com', 'Lby2Abx741Fdl5qfk3m76f56aciae751n5408ef9Dc3a66EcJbje63rcG5U6WdW8', '', '', 'uc.php', 'utf-8', 'utf8', 1, 1, '', '<?xml version="1.0" encoding="ISO-8859-1"?>\r\n<root>\r\n	<item id="template"><![CDATA[<a href="{url}" target="_blank">{subject}</a>]]></item>\r\n	<item id="fields">\r\n		<item id="subject"><![CDATA[标题]]></item>\r\n		<item id="uid"><![CDATA[用户 ID]]></item>\r\n		<item id="username"><![CDATA[发帖者]]></item>\r\n		<item id="dateline"><![CDATA[日期]]></item>\r\n		<item id="url"><![CDATA[主题地址]]></item>\r\n	</item>\r\n</root>', ''),
(2, 'OTHER', 'ci平台', 'http://passport.kids.com/api/index', '776frojkxvPD2dshIXcw2QwlldZca7ryEwZfw+dFQGRB9X4IcjSa', '', '', 'uc.php', '', '', 1, 1, 'a:1:{s:7:"apppath";s:0:"";}', '<?xml version="1.0" encoding="ISO-8859-1"?>\r\n<root>\r\n	<item id="template"><![CDATA[]]></item>\r\n</root>', '');

-- --------------------------------------------------------

--
-- 表的结构 `ku_badwords`
--

CREATE TABLE IF NOT EXISTS `ku_badwords` (
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
-- 表的结构 `ku_domains`
--

CREATE TABLE IF NOT EXISTS `ku_domains` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `domain` char(40) NOT NULL DEFAULT '',
  `ip` char(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `ku_failedlogins`
--

CREATE TABLE IF NOT EXISTS `ku_failedlogins` (
  `ip` char(15) NOT NULL DEFAULT '',
  `count` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `lastupdate` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`ip`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `ku_feeds`
--

CREATE TABLE IF NOT EXISTS `ku_feeds` (
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
-- 表的结构 `ku_friends`
--

CREATE TABLE IF NOT EXISTS `ku_friends` (
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
-- 表的结构 `ku_mailqueue`
--

CREATE TABLE IF NOT EXISTS `ku_mailqueue` (
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
-- 表的结构 `ku_memberfields`
--

CREATE TABLE IF NOT EXISTS `ku_memberfields` (
  `uid` mediumint(8) unsigned NOT NULL,
  `blacklist` text NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `ku_memberfields`
--

INSERT INTO `ku_memberfields` (`uid`, `blacklist`) VALUES
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
(58, '');

-- --------------------------------------------------------

--
-- 表的结构 `ku_members`
--

CREATE TABLE IF NOT EXISTS `ku_members` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=59 ;

--
-- 转存表中的数据 `ku_members`
--

INSERT INTO `ku_members` (`uid`, `username`, `password`, `email`, `myid`, `myidkey`, `regip`, `regdate`, `lastloginip`, `lastlogintime`, `salt`, `secques`) VALUES
(1, 'aaaaaa', '823ac4c6ba00a8a3e5679deba20f4190', '', '', '', '127.0.0.1', 1378366376, 0, 0, '8bf03f', ''),
(2, '0641497', '3ca8d703fad377c94dadd6b10de795d9', '', '', '', '127.0.0.1', 1378444670, 0, 0, 'e06c10', ''),
(3, '0684970', 'be5d7e5fc9401c9bc18fbdb554d73b63', '', '', '', '127.0.0.1', 1378444754, 0, 0, '28f9b5', ''),
(4, '0666256', 'eb42aa6cad55b3b7db0c23c0db495748', '', '', '', '127.0.0.1', 1378444755, 0, 0, '319266', ''),
(5, '0679258', '5da54b844eb86f5bd9eb61aa70d9a874', '', '', '', '127.0.0.1', 1378444755, 0, 0, '3785d6', ''),
(6, '0655197', 'b15fab09434a352c2c515f6adb2b8c46', '', '', '', '127.0.0.1', 1378444755, 0, 0, '3cff67', ''),
(7, '0683024', '22a173993a5f12c2f09f6d777afdfc03', '', '', '', '127.0.0.1', 1378444756, 0, 0, '42bcd8', ''),
(8, '0680045', 'bc6749ff080bc2b8c932fb84c660cbd8', '', '', '', '127.0.0.1', 1378444756, 0, 0, '46c8c8', ''),
(9, '0647697', 'e575dfe59dd0197d2ebc7f825d403f52', '', '', '', '127.0.0.1', 1378444756, 0, 0, '4a5ad9', ''),
(10, '0640921', '8490c556568c2d1ef9cec0ad503ed3a6', '', '', '', '127.0.0.1', 1378444756, 0, 0, '4daff9', ''),
(11, '0634332', 'da8608a79f15c8c05bffd25e154c3710', '', '', '', '127.0.0.1', 1378444757, 0, 0, '5148f9', ''),
(12, '0682445', '7740165c1d82a9c7ceef9775ec184b29', '', '', '', '127.0.0.1', 1378444757, 0, 0, '53e74a', ''),
(13, '0684761', 'dcae10a8dd7ac2a4917c5da30a3e0f83', '', '', '', '127.0.0.1', 1378444757, 0, 0, '56ff7a', ''),
(14, '0660285', '86cd6a6787bf38ce33b22169cec5b324', '', '', '', '127.0.0.1', 1378444757, 0, 0, '5a549a', ''),
(15, '068989', '0ef6cdca72bc69ec0262276df25beeef', '', '', '', '127.0.0.1', 1378444757, 0, 0, '5d2fdb', ''),
(16, '0644288', '7eb64f79580d1e594e8500939ed30e71', '', '', '', '127.0.0.1', 1378444758, 0, 0, '6105cb', ''),
(17, '0665623', '45b9a4eb3116d948d404d2f612675f69', '', '', '', '127.0.0.1', 1378444758, 0, 0, '63e10b', ''),
(18, '0640745', '21d5db9104197d27e93f247f9a467c3a', '', '', '', '127.0.0.1', 1378444758, 0, 0, '66bc4c', ''),
(19, '0627810', 'c28ffa61a64f7a3ad071243318dbc7a5', '', '', '', '127.0.0.1', 1378444758, 0, 0, '69978c', ''),
(20, '0645552', 'c44659bc76b6334d778197efdfbb55b4', '', '', '', '127.0.0.1', 1378444758, 0, 0, '6cecac', ''),
(21, '0683209', '2d353804edb8bf93cc349a3180999dd9', '', '', '', '127.0.0.1', 1378444759, 0, 0, '7085ad', ''),
(22, '0678907', '56f9351de8f7c9d871c352d8c58f7863', '', '', '', '127.0.0.1', 1378444759, 0, 0, '7360ed', ''),
(23, '0667246', 'e9150b15a0a5879e51f08aea50e6d260', '', '', '', '127.0.0.1', 1378444759, 0, 0, '76791d', ''),
(24, '0617954', 'cc5c237c4ce152b7663c16385deac81b', '', '', '', '127.0.0.1', 1378444759, 0, 0, '79914e', ''),
(25, '0616015', '8b9ea7492d14125fe3bd6469f6700839', '', '', '', '127.0.0.1', 1378444759, 0, 0, '7c6c8e', ''),
(26, '0648350', '593fef35693f8e4cc22f3aeac1ef7ad0', '', '', '', '127.0.0.1', 1378444760, 0, 0, '80bc5e', ''),
(27, '0683644', '0173601081d1357393aa460ca53a80a6', '', '', '', '127.0.0.1', 1378444760, 0, 0, '84117f', ''),
(28, '0633155', 'c039d060845d32aa1db04261a9e132bb', '', '', '', '127.0.0.1', 1378444760, 0, 0, '87a38f', ''),
(29, '0613220', 'dda8adca0fe30eb09c0722ff4c33c617', '', '', '', '127.0.0.1', 1378444760, 0, 0, '8d5a10', ''),
(30, '0631774', 'caaeca3bbf4a9fc3cbdc04e851024300', '', '', '', '127.0.0.1', 1378444761, 0, 0, '944831', ''),
(31, '0663992', '29d364467f9607b480521587627af068', '', '', '', '127.0.0.1', 1378444761, 0, 0, '985421', ''),
(32, '0611077', '906f31feb13aaffd9d22a6fa8ae445ad', '', '', '', '127.0.0.1', 1378444761, 0, 0, '9c6012', ''),
(33, '0675653', '24e1712a7b6b9f4cba90aa0593860cd3', '', '', '', '127.0.0.1', 1378444762, 0, 0, 'a25a72', ''),
(34, '0642879', '38ca24691979a922a84a1a1d9f9951f7', '', '', '', '127.0.0.1', 1378444762, 0, 0, 'a8c7c3', ''),
(35, '0653274', '48094af2038c83a074a80aa522a0f2ad', '', '', '', '127.0.0.1', 1378444763, 0, 0, 'b69d14', ''),
(36, '0639345', 'a8d60ce9ecda4802e387519b5be3fd40', '', '', '', '127.0.0.1', 1378444763, 0, 0, 'bef1e5', ''),
(37, '0684310', '151c13b5e6b3c178a8d5ef2bd92931bb', '', '', '', '127.0.0.1', 1378444764, 0, 0, 'c52936', ''),
(38, '0624306', 'd13de36996df96c273dad64e84249f1e', '', '', '', '127.0.0.1', 1378445168, 0, 0, '0ceae2', ''),
(39, '0620432', '3107b90a60fcfabe5e638442b578219a', '', '', '', '127.0.0.1', 1378446335, 0, 0, 'fccd16', ''),
(40, '0698432', 'ea166a6464d5da0db9b5f7e7813400f1', '', '', '', '127.0.0.1', 1378446379, 0, 0, 'b49642', ''),
(41, '0617590', '6114383e3a610172f49f93460845dbbe', '', '', '', '127.0.0.1', 1378446423, 0, 0, '73c080', ''),
(42, '0663770', 'f503b2ed081b0ebf24350f35c3b4f41c', '', '', '', '127.0.0.1', 1378446442, 0, 0, 'a755d1', ''),
(43, '0634700', 'a6d41cf8937c5b55d6d742ce1146d51c', '', '', '', '127.0.0.1', 1378446518, 0, 0, '67dcb7', ''),
(44, '0645958', '06d02945ab0e21639cc97b4ef103f91b', '', '', '', '127.0.0.1', 1378446523, 0, 0, 'b280df', ''),
(45, '0631390', '3c628aaed899c5f50130f0c149776933', '', '', '', '127.0.0.1', 1378446524, 0, 0, 'c5cfc1', ''),
(46, '0686203', 'daa46294b8e4d9b7817e7f64e120fb02', '', '', '', '127.0.0.1', 1378446525, 0, 0, 'd6fa33', ''),
(47, '0693808', 'ad23142ef82fcdf6a7e770f0fb8ea78a', '', '', '', '127.0.0.1', 1378446526, 0, 0, 'e58655', ''),
(48, '0638498', 'ed4802394041ef6d6bdc547d21e13cd4', '', '', '', '127.0.0.1', 1378446527, 0, 0, 'f1ee06', ''),
(49, '0672816', 'b4a82ba77053e40b8c67c0bc4de60de2', '', '', '', '127.0.0.1', 1378446555, 0, 0, 'b601f8', ''),
(50, '0640205', 'ddb5941ba8bd15da05b4f329ab376a45', '', '', '', '127.0.0.1', 1378446555, 0, 0, 'b6b8c8', ''),
(51, '0638240', 'f34c474411d0c18bbeb951f765c0ee28', '', '', '', '127.0.0.1', 1378446586, 0, 0, 'abadbf', ''),
(52, '0693986', 'c534f1fb16ddb4283769d78bda2ad9ce', '', '', '', '127.0.0.1', 1378446586, 0, 0, 'ac648f', ''),
(53, '065146', '2887cefdcca2d29aa458fef49ca6195c', '', '', '', '127.0.0.1', 1378446634, 0, 0, 'a4cb92', ''),
(54, '0674057', 'e08766f7d00e19814ebf9f6be607c8da', '', '', '', '127.0.0.1', 1378446634, 0, 0, 'a58262', ''),
(55, '0696358', '20ace1be392340634726e0f00306d0fa', '', '', '', '127.0.0.1', 1378446948, 0, 0, '40064a', ''),
(56, '0655605', '7d9966373be5f1d8ac94ab5a9d5161cd', '', '', '', '127.0.0.1', 1378446948, 0, 0, '40fa0a', ''),
(57, '0696578', '5cc2a4df94d2c9e498a5156b42f0e3f9', '', '', '', '127.0.0.1', 1378455636, 0, 0, '4984a2', ''),
(58, '063899', '2f07ac0aeae3e05586b38ecefc590e86', '', '', '', '127.0.0.1', 1378455636, 0, 0, '4a6b1d', '');

-- --------------------------------------------------------

--
-- 表的结构 `ku_mergemembers`
--

CREATE TABLE IF NOT EXISTS `ku_mergemembers` (
  `appid` smallint(6) unsigned NOT NULL,
  `username` char(15) NOT NULL,
  PRIMARY KEY (`appid`,`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `ku_newpm`
--

CREATE TABLE IF NOT EXISTS `ku_newpm` (
  `uid` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `ku_notelist`
--

CREATE TABLE IF NOT EXISTS `ku_notelist` (
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
-- 转存表中的数据 `ku_notelist`
--

INSERT INTO `ku_notelist` (`noteid`, `operation`, `closed`, `totalnum`, `succeednum`, `getdata`, `postdata`, `dateline`, `pri`, `app1`, `app2`) VALUES
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
-- 表的结构 `ku_pm_indexes`
--

CREATE TABLE IF NOT EXISTS `ku_pm_indexes` (
  `pmid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `plid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`pmid`),
  KEY `plid` (`plid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `ku_pm_lists`
--

CREATE TABLE IF NOT EXISTS `ku_pm_lists` (
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
-- 表的结构 `ku_pm_members`
--

CREATE TABLE IF NOT EXISTS `ku_pm_members` (
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
-- 表的结构 `ku_pm_messages_0`
--

CREATE TABLE IF NOT EXISTS `ku_pm_messages_0` (
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
-- 表的结构 `ku_pm_messages_1`
--

CREATE TABLE IF NOT EXISTS `ku_pm_messages_1` (
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
-- 表的结构 `ku_pm_messages_2`
--

CREATE TABLE IF NOT EXISTS `ku_pm_messages_2` (
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
-- 表的结构 `ku_pm_messages_3`
--

CREATE TABLE IF NOT EXISTS `ku_pm_messages_3` (
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
-- 表的结构 `ku_pm_messages_4`
--

CREATE TABLE IF NOT EXISTS `ku_pm_messages_4` (
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
-- 表的结构 `ku_pm_messages_5`
--

CREATE TABLE IF NOT EXISTS `ku_pm_messages_5` (
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
-- 表的结构 `ku_pm_messages_6`
--

CREATE TABLE IF NOT EXISTS `ku_pm_messages_6` (
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
-- 表的结构 `ku_pm_messages_7`
--

CREATE TABLE IF NOT EXISTS `ku_pm_messages_7` (
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
-- 表的结构 `ku_pm_messages_8`
--

CREATE TABLE IF NOT EXISTS `ku_pm_messages_8` (
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
-- 表的结构 `ku_pm_messages_9`
--

CREATE TABLE IF NOT EXISTS `ku_pm_messages_9` (
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
-- 表的结构 `ku_protectedmembers`
--

CREATE TABLE IF NOT EXISTS `ku_protectedmembers` (
  `uid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `username` char(15) NOT NULL DEFAULT '',
  `appid` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `dateline` int(10) unsigned NOT NULL DEFAULT '0',
  `admin` char(15) NOT NULL DEFAULT '0',
  UNIQUE KEY `username` (`username`,`appid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `ku_protectedmembers`
--

INSERT INTO `ku_protectedmembers` (`uid`, `username`, `appid`, `dateline`, `admin`) VALUES
(2, 'kidsadmin', 0, 1377851696, '');

-- --------------------------------------------------------

--
-- 表的结构 `ku_settings`
--

CREATE TABLE IF NOT EXISTS `ku_settings` (
  `k` varchar(32) NOT NULL DEFAULT '',
  `v` text NOT NULL,
  PRIMARY KEY (`k`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `ku_settings`
--

INSERT INTO `ku_settings` (`k`, `v`) VALUES
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
-- 表的结构 `ku_sqlcache`
--

CREATE TABLE IF NOT EXISTS `ku_sqlcache` (
  `sqlid` char(6) NOT NULL DEFAULT '',
  `data` char(100) NOT NULL,
  `expiry` int(10) unsigned NOT NULL,
  PRIMARY KEY (`sqlid`),
  KEY `expiry` (`expiry`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `ku_tags`
--

CREATE TABLE IF NOT EXISTS `ku_tags` (
  `tagname` char(20) NOT NULL,
  `appid` smallint(6) unsigned NOT NULL DEFAULT '0',
  `data` mediumtext,
  `expiration` int(10) unsigned NOT NULL,
  KEY `tagname` (`tagname`,`appid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `ku_vars`
--

CREATE TABLE IF NOT EXISTS `ku_vars` (
  `name` char(32) NOT NULL DEFAULT '',
  `value` char(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`name`)
) ENGINE=MEMORY DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
