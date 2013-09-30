-- MySQL dump 10.13  Distrib 5.5.27, for Win32 (x86)
--
-- Host: localhost    Database: studio_ucserver
-- ------------------------------------------------------
-- Server version	5.5.27

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `studio_ucserver`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `studio_ucserver` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `studio_ucserver`;

--
-- Table structure for table `su_admins`
--

DROP TABLE IF EXISTS `su_admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `su_admins` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `su_admins`
--

LOCK TABLES `su_admins` WRITE;
/*!40000 ALTER TABLE `su_admins` DISABLE KEYS */;
/*!40000 ALTER TABLE `su_admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `su_applications`
--

DROP TABLE IF EXISTS `su_applications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `su_applications` (
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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `su_applications`
--

LOCK TABLES `su_applications` WRITE;
/*!40000 ALTER TABLE `su_applications` DISABLE KEYS */;
INSERT INTO `su_applications` VALUES (1,'DISCUZX','kids bbs!','http://bbs.kids.com','Lby2Abx741Fdl5qfk3m76f56aciae751n5408ef9Dc3a66EcJbje63rcG5U6WdW8','','','uc.php','utf-8','utf8',1,1,'','<?xml version=\"1.0\" encoding=\"ISO-8859-1\"?>\r\n<root>\r\n	<item id=\"template\"><![CDATA[<a href=\"{url}\" target=\"_blank\">{subject}</a>]]></item>\r\n	<item id=\"fields\">\r\n		<item id=\"subject\"><![CDATA[标题]]></item>\r\n		<item id=\"uid\"><![CDATA[用户 ID]]></item>\r\n		<item id=\"username\"><![CDATA[发帖者]]></item>\r\n		<item id=\"dateline\"><![CDATA[日期]]></item>\r\n		<item id=\"url\"><![CDATA[主题地址]]></item>\r\n	</item>\r\n</root>',''),(2,'OTHER','ci平台','http://passport.kids.com/api/index','776frojkxvPD2dshIXcw2QwlldZca7ryEwZfw+dFQGRB9X4IcjSa','','','uc.php','','',1,1,'a:1:{s:7:\"apppath\";s:0:\"\";}','<?xml version=\"1.0\" encoding=\"ISO-8859-1\"?>\r\n<root>\r\n	<item id=\"template\"><![CDATA[]]></item>\r\n</root>','');
/*!40000 ALTER TABLE `su_applications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `su_badwords`
--

DROP TABLE IF EXISTS `su_badwords`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `su_badwords` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `admin` varchar(15) NOT NULL DEFAULT '',
  `find` varchar(255) NOT NULL DEFAULT '',
  `replacement` varchar(255) NOT NULL DEFAULT '',
  `findpattern` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `find` (`find`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `su_badwords`
--

LOCK TABLES `su_badwords` WRITE;
/*!40000 ALTER TABLE `su_badwords` DISABLE KEYS */;
/*!40000 ALTER TABLE `su_badwords` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `su_domains`
--

DROP TABLE IF EXISTS `su_domains`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `su_domains` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `domain` char(40) NOT NULL DEFAULT '',
  `ip` char(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `su_domains`
--

LOCK TABLES `su_domains` WRITE;
/*!40000 ALTER TABLE `su_domains` DISABLE KEYS */;
/*!40000 ALTER TABLE `su_domains` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `su_failedlogins`
--

DROP TABLE IF EXISTS `su_failedlogins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `su_failedlogins` (
  `ip` char(15) NOT NULL DEFAULT '',
  `count` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `lastupdate` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`ip`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `su_failedlogins`
--

LOCK TABLES `su_failedlogins` WRITE;
/*!40000 ALTER TABLE `su_failedlogins` DISABLE KEYS */;
INSERT INTO `su_failedlogins` VALUES ('127.0.0.1',4,1380275430);
/*!40000 ALTER TABLE `su_failedlogins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `su_feeds`
--

DROP TABLE IF EXISTS `su_feeds`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `su_feeds` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `su_feeds`
--

LOCK TABLES `su_feeds` WRITE;
/*!40000 ALTER TABLE `su_feeds` DISABLE KEYS */;
/*!40000 ALTER TABLE `su_feeds` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `su_friends`
--

DROP TABLE IF EXISTS `su_friends`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `su_friends` (
  `uid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `friendid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `direction` tinyint(1) NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `delstatus` tinyint(1) NOT NULL DEFAULT '0',
  `comment` char(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`version`),
  KEY `uid` (`uid`),
  KEY `friendid` (`friendid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `su_friends`
--

LOCK TABLES `su_friends` WRITE;
/*!40000 ALTER TABLE `su_friends` DISABLE KEYS */;
/*!40000 ALTER TABLE `su_friends` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `su_mailqueue`
--

DROP TABLE IF EXISTS `su_mailqueue`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `su_mailqueue` (
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
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `su_mailqueue`
--

LOCK TABLES `su_mailqueue` WRITE;
/*!40000 ALTER TABLE `su_mailqueue` DISABLE KEYS */;
/*!40000 ALTER TABLE `su_mailqueue` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `su_memberfields`
--

DROP TABLE IF EXISTS `su_memberfields`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `su_memberfields` (
  `uid` mediumint(8) unsigned NOT NULL,
  `blacklist` text NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `su_memberfields`
--

LOCK TABLES `su_memberfields` WRITE;
/*!40000 ALTER TABLE `su_memberfields` DISABLE KEYS */;
/*!40000 ALTER TABLE `su_memberfields` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `su_members`
--

DROP TABLE IF EXISTS `su_members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `su_members` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `su_members`
--

LOCK TABLES `su_members` WRITE;
/*!40000 ALTER TABLE `su_members` DISABLE KEYS */;
/*!40000 ALTER TABLE `su_members` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `su_mergemembers`
--

DROP TABLE IF EXISTS `su_mergemembers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `su_mergemembers` (
  `appid` smallint(6) unsigned NOT NULL,
  `username` char(15) NOT NULL,
  PRIMARY KEY (`appid`,`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `su_mergemembers`
--

LOCK TABLES `su_mergemembers` WRITE;
/*!40000 ALTER TABLE `su_mergemembers` DISABLE KEYS */;
/*!40000 ALTER TABLE `su_mergemembers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `su_newpm`
--

DROP TABLE IF EXISTS `su_newpm`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `su_newpm` (
  `uid` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `su_newpm`
--

LOCK TABLES `su_newpm` WRITE;
/*!40000 ALTER TABLE `su_newpm` DISABLE KEYS */;
/*!40000 ALTER TABLE `su_newpm` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `su_notelist`
--

DROP TABLE IF EXISTS `su_notelist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `su_notelist` (
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
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `su_notelist`
--

LOCK TABLES `su_notelist` WRITE;
/*!40000 ALTER TABLE `su_notelist` DISABLE KEYS */;
INSERT INTO `su_notelist` VALUES (1,'updateapps',1,0,0,'','<?xml version=\"1.0\" encoding=\"ISO-8859-1\"?>\r\n<root>\r\n	<item id=\"1\">\r\n		<item id=\"appid\"><![CDATA[1]]></item>\r\n		<item id=\"type\"><![CDATA[DISCUZX]]></item>\r\n		<item id=\"name\"><![CDATA[kids bbs!]]></item>\r\n		<item id=\"url\"><![CDATA[http://bbs.kids.com]]></item>\r\n		<item id=\"ip\"><![CDATA[]]></item>\r\n		<item id=\"charset\"><![CDATA[utf-8]]></item>\r\n		<item id=\"synlogin\"><![CDATA[1]]></item>\r\n		<item id=\"extra\"><![CDATA[]]></item>\r\n	</item>\r\n	<item id=\"UC_API\"><![CDATA[http://ucserver.kids.com]]></item>\r\n</root>',0,0,0,0),(2,'updatepw',1,1,1,'username=aaaaaaaa&password=','',1378362370,0,1,0),(3,'updatepw',1,1,1,'username=aaaaaaaa&password=','',1378362371,0,1,0),(4,'updatepw',1,1,1,'username=bbbbbb&password=','',1378362371,0,1,0),(5,'updateapps',1,1,1,'','<?xml version=\"1.0\" encoding=\"ISO-8859-1\"?>\r\n<root>\r\n	<item id=\"1\">\r\n		<item id=\"appid\"><![CDATA[1]]></item>\r\n		<item id=\"type\"><![CDATA[DISCUZX]]></item>\r\n		<item id=\"name\"><![CDATA[kids bbs!]]></item>\r\n		<item id=\"url\"><![CDATA[http://bbs.kids.com]]></item>\r\n		<item id=\"ip\"><![CDATA[]]></item>\r\n		<item id=\"viewprourl\"><![CDATA[]]></item>\r\n		<item id=\"apifilename\"><![CDATA[uc.php]]></item>\r\n		<item id=\"charset\"><![CDATA[utf-8]]></item>\r\n		<item id=\"synlogin\"><![CDATA[1]]></item>\r\n		<item id=\"extra\"><![CDATA[]]></item>\r\n		<item id=\"recvnote\"><![CDATA[1]]></item>\r\n	</item>\r\n	<item id=\"2\">\r\n		<item id=\"appid\"><![CDATA[2]]></item>\r\n		<item id=\"type\"><![CDATA[OTHER]]></item>\r\n		<item id=\"name\"><![CDATA[ci平台]]></item>\r\n		<item id=\"url\"><![CDATA[http://passport.kids.com/api/index]]></item>\r\n		<item id=\"ip\"><![CDATA[]]></item>\r\n		<item id=\"viewprourl\"><![CDATA[]]></item>\r\n		<item id=\"apifilename\"><![CDATA[uc.php]]></item>\r\n		<item id=\"charset\"><![CDATA[]]></item>\r\n		<item id=\"synlogin\"><![CDATA[1]]></item>\r\n		<item id=\"extra\">\r\n			<item id=\"apppath\"><![CDATA[]]></item>\r\n		</item>\r\n		<item id=\"recvnote\"><![CDATA[1]]></item>\r\n	</item>\r\n	<item id=\"UC_API\"><![CDATA[http://ucserver.kids.com]]></item>\r\n</root>',1378362488,0,1,0),(6,'updatepw',0,5,0,'username=cccccc&password=','',1378362832,0,0,-5),(7,'updatepw',0,5,0,'username=cccccc&password=','',1378362967,0,0,-5),(8,'updatepw',0,5,0,'username=cccccc&password=','',1378363099,0,0,-5),(9,'updatepw',0,2,0,'username=cccccc&password=','',1378366478,0,0,-2),(10,'updatepw',0,0,0,'username=cccccc&password=','',0,0,0,0);
/*!40000 ALTER TABLE `su_notelist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `su_pm_indexes`
--

DROP TABLE IF EXISTS `su_pm_indexes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `su_pm_indexes` (
  `pmid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `plid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`pmid`),
  KEY `plid` (`plid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `su_pm_indexes`
--

LOCK TABLES `su_pm_indexes` WRITE;
/*!40000 ALTER TABLE `su_pm_indexes` DISABLE KEYS */;
/*!40000 ALTER TABLE `su_pm_indexes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `su_pm_lists`
--

DROP TABLE IF EXISTS `su_pm_lists`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `su_pm_lists` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `su_pm_lists`
--

LOCK TABLES `su_pm_lists` WRITE;
/*!40000 ALTER TABLE `su_pm_lists` DISABLE KEYS */;
/*!40000 ALTER TABLE `su_pm_lists` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `su_pm_members`
--

DROP TABLE IF EXISTS `su_pm_members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `su_pm_members` (
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `su_pm_members`
--

LOCK TABLES `su_pm_members` WRITE;
/*!40000 ALTER TABLE `su_pm_members` DISABLE KEYS */;
/*!40000 ALTER TABLE `su_pm_members` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `su_pm_messages_0`
--

DROP TABLE IF EXISTS `su_pm_messages_0`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `su_pm_messages_0` (
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `su_pm_messages_0`
--

LOCK TABLES `su_pm_messages_0` WRITE;
/*!40000 ALTER TABLE `su_pm_messages_0` DISABLE KEYS */;
/*!40000 ALTER TABLE `su_pm_messages_0` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `su_pm_messages_1`
--

DROP TABLE IF EXISTS `su_pm_messages_1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `su_pm_messages_1` (
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `su_pm_messages_1`
--

LOCK TABLES `su_pm_messages_1` WRITE;
/*!40000 ALTER TABLE `su_pm_messages_1` DISABLE KEYS */;
/*!40000 ALTER TABLE `su_pm_messages_1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `su_pm_messages_2`
--

DROP TABLE IF EXISTS `su_pm_messages_2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `su_pm_messages_2` (
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `su_pm_messages_2`
--

LOCK TABLES `su_pm_messages_2` WRITE;
/*!40000 ALTER TABLE `su_pm_messages_2` DISABLE KEYS */;
/*!40000 ALTER TABLE `su_pm_messages_2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `su_pm_messages_3`
--

DROP TABLE IF EXISTS `su_pm_messages_3`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `su_pm_messages_3` (
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `su_pm_messages_3`
--

LOCK TABLES `su_pm_messages_3` WRITE;
/*!40000 ALTER TABLE `su_pm_messages_3` DISABLE KEYS */;
/*!40000 ALTER TABLE `su_pm_messages_3` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `su_pm_messages_4`
--

DROP TABLE IF EXISTS `su_pm_messages_4`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `su_pm_messages_4` (
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `su_pm_messages_4`
--

LOCK TABLES `su_pm_messages_4` WRITE;
/*!40000 ALTER TABLE `su_pm_messages_4` DISABLE KEYS */;
/*!40000 ALTER TABLE `su_pm_messages_4` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `su_pm_messages_5`
--

DROP TABLE IF EXISTS `su_pm_messages_5`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `su_pm_messages_5` (
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `su_pm_messages_5`
--

LOCK TABLES `su_pm_messages_5` WRITE;
/*!40000 ALTER TABLE `su_pm_messages_5` DISABLE KEYS */;
/*!40000 ALTER TABLE `su_pm_messages_5` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `su_pm_messages_6`
--

DROP TABLE IF EXISTS `su_pm_messages_6`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `su_pm_messages_6` (
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `su_pm_messages_6`
--

LOCK TABLES `su_pm_messages_6` WRITE;
/*!40000 ALTER TABLE `su_pm_messages_6` DISABLE KEYS */;
/*!40000 ALTER TABLE `su_pm_messages_6` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `su_pm_messages_7`
--

DROP TABLE IF EXISTS `su_pm_messages_7`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `su_pm_messages_7` (
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `su_pm_messages_7`
--

LOCK TABLES `su_pm_messages_7` WRITE;
/*!40000 ALTER TABLE `su_pm_messages_7` DISABLE KEYS */;
/*!40000 ALTER TABLE `su_pm_messages_7` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `su_pm_messages_8`
--

DROP TABLE IF EXISTS `su_pm_messages_8`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `su_pm_messages_8` (
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `su_pm_messages_8`
--

LOCK TABLES `su_pm_messages_8` WRITE;
/*!40000 ALTER TABLE `su_pm_messages_8` DISABLE KEYS */;
/*!40000 ALTER TABLE `su_pm_messages_8` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `su_pm_messages_9`
--

DROP TABLE IF EXISTS `su_pm_messages_9`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `su_pm_messages_9` (
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `su_pm_messages_9`
--

LOCK TABLES `su_pm_messages_9` WRITE;
/*!40000 ALTER TABLE `su_pm_messages_9` DISABLE KEYS */;
/*!40000 ALTER TABLE `su_pm_messages_9` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `su_protectedmembers`
--

DROP TABLE IF EXISTS `su_protectedmembers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `su_protectedmembers` (
  `uid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `username` char(15) NOT NULL DEFAULT '',
  `appid` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `dateline` int(10) unsigned NOT NULL DEFAULT '0',
  `admin` char(15) NOT NULL DEFAULT '0',
  UNIQUE KEY `username` (`username`,`appid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `su_protectedmembers`
--

LOCK TABLES `su_protectedmembers` WRITE;
/*!40000 ALTER TABLE `su_protectedmembers` DISABLE KEYS */;
INSERT INTO `su_protectedmembers` VALUES (2,'kidsadmin',0,1377851696,'');
/*!40000 ALTER TABLE `su_protectedmembers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `su_settings`
--

DROP TABLE IF EXISTS `su_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `su_settings` (
  `k` varchar(32) NOT NULL DEFAULT '',
  `v` text NOT NULL,
  PRIMARY KEY (`k`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `su_settings`
--

LOCK TABLES `su_settings` WRITE;
/*!40000 ALTER TABLE `su_settings` DISABLE KEYS */;
INSERT INTO `su_settings` VALUES ('accessemail',''),('censoremail',''),('censorusername',''),('dateformat','y-n-j'),('doublee','0'),('nextnotetime','0'),('timeoffset','28800'),('privatepmthreadlimit','25'),('chatpmthreadlimit','30'),('chatpmmemberlimit','35'),('pmfloodctrl','15'),('pmcenter','1'),('sendpmseccode','1'),('pmsendregdays','0'),('maildefault','username@21cn.com'),('mailsend','1'),('mailserver','smtp.21cn.com'),('mailport','25'),('mailauth','1'),('mailfrom','UCenter <username@21cn.com>'),('mailauth_username','username@21cn.com'),('mailauth_password','password'),('maildelimiter','0'),('mailusername','1'),('mailsilent','1'),('version','1.6.0');
/*!40000 ALTER TABLE `su_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `su_sqlcache`
--

DROP TABLE IF EXISTS `su_sqlcache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `su_sqlcache` (
  `sqlid` char(6) NOT NULL DEFAULT '',
  `data` char(100) NOT NULL,
  `expiry` int(10) unsigned NOT NULL,
  PRIMARY KEY (`sqlid`),
  KEY `expiry` (`expiry`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `su_sqlcache`
--

LOCK TABLES `su_sqlcache` WRITE;
/*!40000 ALTER TABLE `su_sqlcache` DISABLE KEYS */;
/*!40000 ALTER TABLE `su_sqlcache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `su_tags`
--

DROP TABLE IF EXISTS `su_tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `su_tags` (
  `tagname` char(20) NOT NULL,
  `appid` smallint(6) unsigned NOT NULL DEFAULT '0',
  `data` mediumtext,
  `expiration` int(10) unsigned NOT NULL,
  KEY `tagname` (`tagname`,`appid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `su_tags`
--

LOCK TABLES `su_tags` WRITE;
/*!40000 ALTER TABLE `su_tags` DISABLE KEYS */;
/*!40000 ALTER TABLE `su_tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `su_vars`
--

DROP TABLE IF EXISTS `su_vars`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `su_vars` (
  `name` char(32) NOT NULL DEFAULT '',
  `value` char(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`name`)
) ENGINE=MEMORY DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `su_vars`
--

LOCK TABLES `su_vars` WRITE;
/*!40000 ALTER TABLE `su_vars` DISABLE KEYS */;
/*!40000 ALTER TABLE `su_vars` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-09-30  9:55:50
