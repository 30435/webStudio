-- MySQL dump 10.13  Distrib 5.5.27, for Win32 (x86)
--
-- Host: localhost    Database: studio_spider
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
-- Current Database: `studio_spider`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `studio_spider` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `studio_spider`;

--
-- Table structure for table `ss_content`
--

DROP TABLE IF EXISTS `ss_content`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ss_content` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `job_id` int(4) NOT NULL,
  `content_key` char(32) NOT NULL,
  `pageurl` varchar(200) NOT NULL,
  `title` varchar(100) NOT NULL,
  `title_source` varchar(100) NOT NULL,
  `catid` int(4) NOT NULL,
  `thumb_local` varchar(200) NOT NULL,
  `thumb` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `content_source` text NOT NULL,
  `author` varchar(30) NOT NULL,
  `copyfrom` varchar(100) NOT NULL,
  `keywords` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `inputtime` int(10) NOT NULL,
  `starttime` int(8) NOT NULL,
  `endtime` int(8) NOT NULL,
  `is_mulpage` tinyint(1) NOT NULL,
  `is_force` tinyint(1) NOT NULL,
  `gpage_num` int(4) NOT NULL,
  `spage_num` int(4) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `content_key` (`content_key`),
  KEY `title` (`title`),
  KEY `gpage` (`job_id`,`status`,`gpage_num`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ss_content`
--

LOCK TABLES `ss_content` WRITE;
/*!40000 ALTER TABLE `ss_content` DISABLE KEYS */;
/*!40000 ALTER TABLE `ss_content` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ss_content_result`
--

DROP TABLE IF EXISTS `ss_content_result`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ss_content_result` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `listpage_num` int(8) NOT NULL,
  `listpage_num_valid` int(8) NOT NULL,
  `listspider_num` int(8) NOT NULL,
  `listspider_num_valid` int(8) NOT NULL,
  `listcontent_num` int(8) NOT NULL,
  `listcontent_num_valid` int(8) NOT NULL,
  `contentpage_num` int(8) NOT NULL,
  `contentpage_num_valid` int(8) NOT NULL,
  `contentspider_num` int(8) NOT NULL,
  `contentspider_num_valid` int(8) NOT NULL,
  `getfile_num` int(8) NOT NULL,
  `getfile_num_valid` int(8) NOT NULL,
  `filespider_num` int(8) NOT NULL,
  `filespider_num_valid` int(8) NOT NULL,
  `publish_num` int(8) NOT NULL,
  `publish_num_valid` int(8) NOT NULL,
  `date` int(9) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ss_content_result`
--

LOCK TABLES `ss_content_result` WRITE;
/*!40000 ALTER TABLE `ss_content_result` DISABLE KEYS */;
/*!40000 ALTER TABLE `ss_content_result` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ss_crule`
--

DROP TABLE IF EXISTS `ss_crule`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ss_crule` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `site_id` int(8) NOT NULL DEFAULT '0',
  `name` varchar(100) NOT NULL DEFAULT '',
  `pageurl` varchar(100) NOT NULL,
  `mulpage_mark` varchar(50) NOT NULL,
  `pattern_time` varchar(30) NOT NULL,
  `pattern_file` varchar(2500) NOT NULL,
  `pattern` varchar(2500) NOT NULL,
  `replace_source` varchar(2500) NOT NULL,
  `replace_target` varchar(2500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ss_crule`
--

LOCK TABLES `ss_crule` WRITE;
/*!40000 ALTER TABLE `ss_crule` DISABLE KEYS */;
/*!40000 ALTER TABLE `ss_crule` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ss_file`
--

DROP TABLE IF EXISTS `ss_file`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ss_file` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `file_key` char(40) NOT NULL,
  `remote_url` varchar(200) NOT NULL,
  `path` varchar(200) NOT NULL,
  `extname` char(8) NOT NULL,
  `content_id` int(8) NOT NULL,
  `content_key` char(40) NOT NULL,
  `type` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `remote_url` (`remote_url`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ss_file`
--

LOCK TABLES `ss_file` WRITE;
/*!40000 ALTER TABLE `ss_file` DISABLE KEYS */;
/*!40000 ALTER TABLE `ss_file` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ss_job`
--

DROP TABLE IF EXISTS `ss_job`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ss_job` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `site_id` varchar(30) NOT NULL DEFAULT '0',
  `crule_id` varchar(20) NOT NULL DEFAULT '0',
  `name` varchar(100) NOT NULL DEFAULT '',
  `content_urlpre` varchar(100) NOT NULL,
  `list_url` varchar(2500) NOT NULL,
  `list_start` varchar(100) NOT NULL,
  `list_end` varchar(100) NOT NULL,
  `pattern` varchar(2500) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ss_job`
--

LOCK TABLES `ss_job` WRITE;
/*!40000 ALTER TABLE `ss_job` DISABLE KEYS */;
/*!40000 ALTER TABLE `ss_job` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ss_job_result`
--

DROP TABLE IF EXISTS `ss_job_result`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ss_job_result` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `job_id` int(4) NOT NULL,
  `listpage_num` int(8) NOT NULL,
  `listpage_num_valid` int(8) NOT NULL,
  `listspider_num` int(8) NOT NULL,
  `listspider_num_valid` int(8) NOT NULL,
  `listcontent_num` int(8) NOT NULL,
  `listcontent_num_valid` int(8) NOT NULL,
  `contentpage_num` int(8) NOT NULL,
  `contentpage_num_valid` int(8) NOT NULL,
  `contentspider_num` int(8) NOT NULL,
  `contentspider_num_valid` int(8) NOT NULL,
  `getfile_num` int(8) NOT NULL,
  `getfile_num_valid` int(8) NOT NULL,
  `filespider_num` int(8) NOT NULL,
  `filespider_num_valid` int(8) NOT NULL,
  `publish_num` int(8) NOT NULL,
  `publish_num_valid` int(8) NOT NULL,
  `date` int(9) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ss_job_result`
--

LOCK TABLES `ss_job_result` WRITE;
/*!40000 ALTER TABLE `ss_job_result` DISABLE KEYS */;
/*!40000 ALTER TABLE `ss_job_result` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ss_list`
--

DROP TABLE IF EXISTS `ss_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ss_list` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `job_id` int(8) NOT NULL,
  `base_file` char(36) NOT NULL,
  `list_url` varchar(200) NOT NULL,
  `inputtime` int(10) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `glist` (`job_id`,`status`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ss_list`
--

LOCK TABLES `ss_list` WRITE;
/*!40000 ALTER TABLE `ss_list` DISABLE KEYS */;
/*!40000 ALTER TABLE `ss_list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ss_result_total`
--

DROP TABLE IF EXISTS `ss_result_total`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ss_result_total` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `job_id` int(4) NOT NULL,
  `listpage_num` int(8) NOT NULL,
  `listpage_num_valid` int(8) NOT NULL,
  `listspider_num` int(8) NOT NULL,
  `listspider_num_valid` int(8) NOT NULL,
  `listcontent_num` int(8) NOT NULL,
  `listcontent_num_valid` int(8) NOT NULL,
  `contentpage_num` int(8) NOT NULL,
  `contentpage_num_valid` int(8) NOT NULL,
  `contentspider_num` int(8) NOT NULL,
  `contentspider_num_valid` int(8) NOT NULL,
  `getfile_num` int(8) NOT NULL,
  `getfile_num_valid` int(8) NOT NULL,
  `filespider_num` int(8) NOT NULL,
  `filespider_num_valid` int(8) NOT NULL,
  `publish_num` int(8) NOT NULL,
  `publish_num_valid` int(8) NOT NULL,
  `date` int(9) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ss_result_total`
--

LOCK TABLES `ss_result_total` WRITE;
/*!40000 ALTER TABLE `ss_result_total` DISABLE KEYS */;
/*!40000 ALTER TABLE `ss_result_total` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ss_site`
--

DROP TABLE IF EXISTS `ss_site`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ss_site` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `siteurl` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ss_site`
--

LOCK TABLES `ss_site` WRITE;
/*!40000 ALTER TABLE `ss_site` DISABLE KEYS */;
INSERT INTO `ss_site` VALUES (1,'4399网页游戏','http://web.4399.com/'),(2,'淘米游戏','http://game.61.com/'),(3,'淘米平台','http://web.2125.com/');
/*!40000 ALTER TABLE `ss_site` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ss_site_file`
--

DROP TABLE IF EXISTS `ss_site_file`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ss_site_file` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '资源ID',
  `site_id` smallint(5) unsigned NOT NULL COMMENT '资源所属站点',
  `page_id` smallint(5) unsigned NOT NULL COMMENT '资源所属站点',
  `url` varchar(200) NOT NULL COMMENT '资源地址',
  `urlfull` varchar(200) NOT NULL COMMENT '资源完整地址',
  `urllocal` varchar(200) NOT NULL COMMENT '资源本地地址',
  `pathlocal` varchar(200) NOT NULL COMMENT '资源本地路径',
  `isdown` tinyint(1) NOT NULL,
  `downtime` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `urlfull` (`urlfull`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ss_site_file`
--

LOCK TABLES `ss_site_file` WRITE;
/*!40000 ALTER TABLE `ss_site_file` DISABLE KEYS */;
/*!40000 ALTER TABLE `ss_site_file` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ss_site_page`
--

DROP TABLE IF EXISTS `ss_site_page`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ss_site_page` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '页面ID',
  `site_id` smallint(5) unsigned NOT NULL COMMENT '页面所属站点',
  `name` varchar(30) NOT NULL COMMENT '页面名称',
  `pageurl` varchar(100) NOT NULL COMMENT '页面源地址',
  `baseurl` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ss_site_page`
--

LOCK TABLES `ss_site_page` WRITE;
/*!40000 ALTER TABLE `ss_site_page` DISABLE KEYS */;
INSERT INTO `ss_site_page` VALUES (1,1,'web4399首页','http://web.4399.com/','http://web.4399.com/'),(2,1,'web3499样式header','http://web.4399.com/css/header.css','http://web.4399.com/'),(3,1,'web4399样式topnavcss','http://web.4399.com/css/topnavcss.css','http://web.4399.com/'),(4,1,'web4399样式loft_new','http://web.4399.com/css/left_new.css','http://web.4399.com/'),(5,1,'web3499样式main_new','http://web.4399.com/css/main_new.css','http://web.4399.com/'),(6,2,'淘米游戏首页','http://game.61.com/','http://game.61.com/'),(7,3,'淘米平台首页','http://web.2125.com/','http://web.2125.com/'),(8,3,'淘米注册页','http://account.61.com/register','http://web.2125.com/');
/*!40000 ALTER TABLE `ss_site_page` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ss_site_result`
--

DROP TABLE IF EXISTS `ss_site_result`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ss_site_result` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `site_id` int(4) NOT NULL,
  `listpage_num` int(8) NOT NULL,
  `listpage_num_valid` int(8) NOT NULL,
  `listspider_num` int(8) NOT NULL,
  `listspider_num_valid` int(8) NOT NULL,
  `listcontent_num` int(8) NOT NULL,
  `listcontent_num_valid` int(8) NOT NULL,
  `contentpage_num` int(8) NOT NULL,
  `contentpage_num_valid` int(8) NOT NULL,
  `contentspider_num` int(8) NOT NULL,
  `contentspider_num_valid` int(8) NOT NULL,
  `getfile_num` int(8) NOT NULL,
  `getfile_num_valid` int(8) NOT NULL,
  `filespider_num` int(8) NOT NULL,
  `filespider_num_valid` int(8) NOT NULL,
  `publish_num` int(8) NOT NULL,
  `publish_num_valid` int(8) NOT NULL,
  `date` int(9) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ss_site_result`
--

LOCK TABLES `ss_site_result` WRITE;
/*!40000 ALTER TABLE `ss_site_result` DISABLE KEYS */;
/*!40000 ALTER TABLE `ss_site_result` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-09-30  9:55:49
