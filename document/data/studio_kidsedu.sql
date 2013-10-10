-- MySQL dump 10.13  Distrib 5.6.11, for Win32 (x86)
--
-- Host: localhost    Database: studio_kidsedu
-- ------------------------------------------------------
-- Server version	5.6.11

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
-- Current Database: `studio_kidsedu`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `studio_kidsedu` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `studio_kidsedu`;

--
-- Table structure for table `sk_agency`
--

DROP TABLE IF EXISTS `sk_agency`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sk_agency` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '机构ID',
  `userid` int(10) unsigned NOT NULL COMMENT '机构所有者ID',
  `username` char(20) NOT NULL COMMENT '机构所有者',
  `name` varchar(80) NOT NULL DEFAULT '' COMMENT '机构名称',
  `name_english` varchar(80) NOT NULL DEFAULT '' COMMENT '机构英文名称',
  `type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '机构类型',
  `industry` tinyint(1) NOT NULL DEFAULT '0' COMMENT '机构所属行业',
  `capital` int(8) unsigned NOT NULL DEFAULT '0' COMMENT '注册资金',
  `regdate` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '注册时间',
  `address` varchar(160) NOT NULL DEFAULT '' COMMENT '机构地址',
  `contact_man` varchar(80) NOT NULL DEFAULT '' COMMENT '联系人',
  `contact_email` varchar(80) NOT NULL DEFAULT '' COMMENT '机构邮箱',
  `contact_mobile` char(13) NOT NULL DEFAULT '' COMMENT '联系手机',
  `contact_telephone` char(15) NOT NULL DEFAULT '' COMMENT '联系电话',
  `brand_name` varchar(80) NOT NULL DEFAULT '' COMMENT '品牌名称',
  `brand_name_english` varchar(80) NOT NULL DEFAULT '' COMMENT '品牌英文名称',
  `invest_capital` varchar(80) NOT NULL DEFAULT '' COMMENT '投资额度',
  `invit_model` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '招商模式',
  `direct_num` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '直营店数量',
  `league_num` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '加盟店数量',
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sk_agency`
--

LOCK TABLES `sk_agency` WRITE;
/*!40000 ALTER TABLE `sk_agency` DISABLE KEYS */;
/*!40000 ALTER TABLE `sk_agency` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sk_category`
--

DROP TABLE IF EXISTS `sk_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sk_category` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '栏目ID',
  `catname` varchar(40) NOT NULL DEFAULT '''''' COMMENT '栏目名称',
  `catdir` varchar(100) NOT NULL COMMENT '栏目所至目录',
  `image` varchar(100) NOT NULL,
  `parentid` mediumint(9) NOT NULL DEFAULT '0' COMMENT '父栏目ID',
  `modelid` smallint(6) NOT NULL DEFAULT '1' COMMENT '模型ID',
  `bind_domain` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `listorder` smallint(5) NOT NULL,
  `description` varchar(300) NOT NULL,
  `template` varchar(20) NOT NULL,
  `meta_title` varchar(100) NOT NULL,
  `meta_keywords` varchar(200) NOT NULL COMMENT '栏目关键字',
  `meta_description` varchar(300) NOT NULL COMMENT '栏目描述',
  `ishtml` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否显示 1不显示 0 显示',
  PRIMARY KEY (`id`),
  KEY `catname` (`catname`,`parentid`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sk_category`
--

LOCK TABLES `sk_category` WRITE;
/*!40000 ALTER TABLE `sk_category` DISABLE KEYS */;
/*!40000 ALTER TABLE `sk_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sk_course`
--

DROP TABLE IF EXISTS `sk_course`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sk_course` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '课程ID',
  `agency_id` smallint(5) unsigned NOT NULL COMMENT '所属机构ID',
  `school_id` smallint(5) unsigned NOT NULL COMMENT '所属学校ID',
  `name` char(20) NOT NULL COMMENT '课程名称',
  `sort` char(10) NOT NULL DEFAULT '' COMMENT '课程分类',
  `description` mediumtext NOT NULL COMMENT '课程描述',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sk_course`
--

LOCK TABLES `sk_course` WRITE;
/*!40000 ALTER TABLE `sk_course` DISABLE KEYS */;
/*!40000 ALTER TABLE `sk_course` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sk_member_kidsedu`
--

DROP TABLE IF EXISTS `sk_member_kidsedu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sk_member_kidsedu` (
  `userid` int(10) unsigned NOT NULL COMMENT '用户ID',
  `username` char(32) NOT NULL COMMENT '用户名',
  `firsttime` int(10) unsigned NOT NULL COMMENT '第一次玩游戏的时间',
  `lasttime_login` int(10) NOT NULL,
  `lasttime_pay` int(10) NOT NULL,
  `lasttime` int(10) unsigned NOT NULL COMMENT '最后一次玩游戏的时间'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sk_member_kidsedu`
--

LOCK TABLES `sk_member_kidsedu` WRITE;
/*!40000 ALTER TABLE `sk_member_kidsedu` DISABLE KEYS */;
/*!40000 ALTER TABLE `sk_member_kidsedu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sk_new`
--

DROP TABLE IF EXISTS `sk_new`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sk_new` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '新闻类资讯ID',
  `catid` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '栏目ID',
  `title` varchar(80) NOT NULL DEFAULT '' COMMENT '标题',
  `thumb` varchar(100) NOT NULL DEFAULT '' COMMENT '缩略图',
  `keywords` char(40) NOT NULL DEFAULT '' COMMENT '关键字',
  `description` mediumtext NOT NULL COMMENT '描述',
  `url` char(100) NOT NULL COMMENT '资讯访问地址',
  `listorder` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  `status` tinyint(2) unsigned NOT NULL DEFAULT '1' COMMENT '状态',
  `islink` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否为链接内容',
  `username` char(20) NOT NULL COMMENT '录入者',
  `copyfrom` varchar(100) NOT NULL DEFAULT '' COMMENT '来源',
  `position` varchar(20) NOT NULL,
  `content` mediumtext NOT NULL COMMENT '内容',
  `template` varchar(30) NOT NULL COMMENT '使用模板',
  `inputtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '录入时间',
  `updatetime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  `fbak` int(11) NOT NULL,
  `seo_title` varchar(80) NOT NULL COMMENT 'SEO标题',
  PRIMARY KEY (`id`),
  KEY `status` (`status`,`listorder`,`id`),
  KEY `listorder` (`catid`,`status`,`listorder`,`id`),
  KEY `catid` (`catid`,`status`,`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sk_new`
--

LOCK TABLES `sk_new` WRITE;
/*!40000 ALTER TABLE `sk_new` DISABLE KEYS */;
/*!40000 ALTER TABLE `sk_new` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sk_picture`
--

DROP TABLE IF EXISTS `sk_picture`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sk_picture` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '图片类资讯ID',
  `catid` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '栏目ID',
  `title` varchar(80) NOT NULL DEFAULT '' COMMENT '标题',
  `thumb` varchar(100) NOT NULL DEFAULT '' COMMENT '缩略图',
  `keywords` char(40) NOT NULL DEFAULT '' COMMENT '关键字',
  `description` mediumtext NOT NULL COMMENT '描述',
  `url` char(100) NOT NULL COMMENT '资讯访问地址',
  `listorder` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  `status` tinyint(2) unsigned NOT NULL DEFAULT '1' COMMENT '状态',
  `islink` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否为链接内容',
  `username` char(20) NOT NULL COMMENT '录入者',
  `copyfrom` varchar(100) NOT NULL DEFAULT '' COMMENT '来源',
  `content` mediumtext NOT NULL COMMENT '内容',
  `pictureurls` mediumtext NOT NULL,
  `template` varchar(30) NOT NULL COMMENT '使用模板',
  `inputtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '录入时间',
  `updatetime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`),
  KEY `status` (`status`,`listorder`,`id`),
  KEY `listorder` (`catid`,`status`,`listorder`,`id`),
  KEY `catid` (`catid`,`status`,`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sk_picture`
--

LOCK TABLES `sk_picture` WRITE;
/*!40000 ALTER TABLE `sk_picture` DISABLE KEYS */;
/*!40000 ALTER TABLE `sk_picture` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sk_school`
--

DROP TABLE IF EXISTS `sk_school`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sk_school` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '学校ID',
  `agency_id` smallint(5) unsigned NOT NULL COMMENT '所属机构ID',
  `name` char(20) NOT NULL COMMENT '学校名称',
  `address` varchar(160) NOT NULL DEFAULT '' COMMENT '学校地址',
  `contact_man` varchar(80) NOT NULL DEFAULT '' COMMENT '联系人',
  `email` varchar(80) NOT NULL DEFAULT '' COMMENT '学校邮箱',
  `mobile` char(13) NOT NULL DEFAULT '' COMMENT '联系手机',
  `telephone` char(15) NOT NULL DEFAULT '' COMMENT '联系电话',
  `school_app` varchar(80) NOT NULL DEFAULT '' COMMENT '手机端应用',
  `school_map` varchar(80) NOT NULL DEFAULT '' COMMENT '地图信息',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sk_school`
--

LOCK TABLES `sk_school` WRITE;
/*!40000 ALTER TABLE `sk_school` DISABLE KEYS */;
/*!40000 ALTER TABLE `sk_school` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sk_spage`
--

DROP TABLE IF EXISTS `sk_spage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sk_spage` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '单网页资讯ID',
  `catid` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '栏目ID',
  `title` varchar(80) NOT NULL DEFAULT '' COMMENT '标题',
  `username` char(20) NOT NULL COMMENT '录入者',
  `content` mediumtext NOT NULL COMMENT '内容',
  `template` varchar(30) NOT NULL COMMENT '使用模板',
  `inputtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '录入时间',
  `updatetime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sk_spage`
--

LOCK TABLES `sk_spage` WRITE;
/*!40000 ALTER TABLE `sk_spage` DISABLE KEYS */;
/*!40000 ALTER TABLE `sk_spage` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-10-10 19:53:13
