-- MySQL dump 10.13  Distrib 5.6.11, for Win32 (x86)
--
-- Host: localhost    Database: studio_passport
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
-- Current Database: `studio_passport`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `studio_passport` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `studio_passport`;

--
-- Table structure for table `sp_admin_manager`
--

DROP TABLE IF EXISTS `sp_admin_manager`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sp_admin_manager` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '管理员ID',
  `username` varchar(20) NOT NULL COMMENT '管理员帐号',
  `truename` varchar(30) NOT NULL DEFAULT '',
  `password` char(32) NOT NULL COMMENT '管理员密码',
  `roleid` smallint(5) unsigned NOT NULL COMMENT '管理员角色',
  `email` varchar(40) NOT NULL COMMENT '管理员E-mail',
  `encrypt` char(6) NOT NULL COMMENT '辅助加密字符串',
  `createtime` int(10) unsigned NOT NULL COMMENT '创建时间',
  `loginnum` smallint(5) unsigned NOT NULL COMMENT '登录次数',
  `lastip` varchar(15) NOT NULL COMMENT '最后登录IP',
  `lasttime` int(10) unsigned NOT NULL COMMENT '最后登录时间',
  `islock` enum('1','0') NOT NULL COMMENT '是否锁定，0：锁定，1：不锁定',
  `handpay_key` char(100) NOT NULL COMMENT '人工支付密钥',
  `handpay_en` char(10) NOT NULL COMMENT '支付密钥短语',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sp_admin_manager`
--

LOCK TABLES `sp_admin_manager` WRITE;
/*!40000 ALTER TABLE `sp_admin_manager` DISABLE KEYS */;
INSERT INTO `sp_admin_manager` VALUES (1,'wangcanliang','','04ffd28d0a85e2050db77cbeeaa7d8ac',1,'0','l9rIUD',1361149565,142,'127.0.0.1',1380245093,'1','2f5a45a93f1bb1824dbb649e85e3753d','tE4RTF'),(2,'wangcan','wang','29508d34d7437cdfde48f5b4a9b668c8',3,'eee@test.com','hkKv5M',1379388042,33,'127.0.0.1',1381198434,'1','','');
/*!40000 ALTER TABLE `sp_admin_manager` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sp_admin_managerlog`
--

DROP TABLE IF EXISTS `sp_admin_managerlog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sp_admin_managerlog` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '日志ID',
  `userid` smallint(5) unsigned NOT NULL COMMENT '管理员ID',
  `username` varchar(20) NOT NULL COMMENT '管理员帐号',
  `roleid` smallint(5) unsigned NOT NULL COMMENT '角色ID',
  `role_name` varchar(50) NOT NULL COMMENT '角色名称',
  `menu_id` varchar(100) NOT NULL COMMENT '菜单ID',
  `menu_name` char(20) NOT NULL COMMENT '菜单名称',
  `data` mediumtext NOT NULL COMMENT '操作详情',
  `data_old` varchar(5000) NOT NULL,
  `logtype` varchar(20) NOT NULL,
  `ip` varchar(17) NOT NULL COMMENT '操作IP',
  `inputtime` int(10) unsigned NOT NULL COMMENT '操作时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sp_admin_managerlog`
--

LOCK TABLES `sp_admin_managerlog` WRITE;
/*!40000 ALTER TABLE `sp_admin_managerlog` DISABLE KEYS */;
/*!40000 ALTER TABLE `sp_admin_managerlog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sp_admin_menu`
--

DROP TABLE IF EXISTS `sp_admin_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sp_admin_menu` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '菜单ID',
  `name` char(20) NOT NULL COMMENT '名称',
  `parentid` smallint(5) unsigned NOT NULL COMMENT '父级菜单ID',
  `app_code` char(20) NOT NULL COMMENT '所属应用代码',
  `controller` char(20) NOT NULL COMMENT '控制器代码',
  `method` char(20) NOT NULL COMMENT '方法',
  `extparam` char(100) NOT NULL COMMENT '附加参数',
  `listorder` smallint(5) unsigned NOT NULL COMMENT '排序',
  `islog` enum('1','0') NOT NULL COMMENT '是否记入管理员操作日志，0：不记入；1：记入',
  `display` enum('4','3','2','1','0') NOT NULL DEFAULT '1' COMMENT '显示类型，0或1：在后台顶部和左侧显示；2：在后台右侧顶部显示；3：基于具体的记录显示',
  PRIMARY KEY (`id`),
  KEY `listorder` (`listorder`),
  KEY `parentid` (`parentid`),
  KEY `operation` (`app_code`,`controller`,`method`)
) ENGINE=MyISAM AUTO_INCREMENT=249 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sp_admin_menu`
--

LOCK TABLES `sp_admin_menu` WRITE;
/*!40000 ALTER TABLE `sp_admin_menu` DISABLE KEYS */;
INSERT INTO `sp_admin_menu` VALUES (1,'我的面板',0,'passport','','','',1,'0','1'),(2,'管理设置',0,'passport','','','',2,'0','1'),(3,'用户中心',0,'passport','','','',3,'0','1'),(4,'应用管理',0,'passport','','','',4,'0','1'),(5,'网页游戏',0,'webgame','','','',5,'0','1'),(6,'支付模块',0,'pay','','','',6,'0','1'),(7,'采集系统',0,'spider','','','',7,'0','1'),(8,'测试站点',0,'movie','','','',8,'0','1'),(9,'测试站点2',0,'tbshop','','','',0,'0','1'),(10,'儿童教育',0,'kidsedu','','','',10,'0','1'),(11,'管理员信息',1,'passport','','','',0,'0','1'),(12,'修改个人信息',11,'passport','manager','editm','',0,'0','1'),(13,'修改密码',11,'passport','manager','editp','',0,'0','1'),(14,'操作记录',11,'passport','managerlog','listinfom','',0,'0','1'),(15,'查看日志',11,'passport','managerlog','viewm','',0,'0','4'),(16,'管理员设置',2,'passport','','','',0,'0','1'),(17,'管理员操作日志',2,'passport','','','',1,'0','0'),(18,'管理员管理',16,'passport','manager','listinfo','',0,'0','1'),(19,'添加管理员',16,'passport','manager','add','',0,'1','2'),(20,'编辑管理员',16,'passport','manager','edit','',0,'1','3'),(21,'删除管理员',16,'passport','manager','delete','',0,'1','3'),(22,'锁定管理员',16,'passport','manager','lock','',0,'1','3'),(23,'查看管理员',16,'passport','manager','view','',0,'1','3'),(24,'角色管理',16,'passport','role','listinfo','',0,'0','1'),(25,'查看',16,'passport','role','view','',0,'1','3'),(26,'编辑',16,'passport','role','edit','',0,'1','3'),(27,'删除',16,'passport','role','delete','',0,'1','3'),(28,'添加角色',16,'passport','role','add','',0,'1','2'),(29,'菜单管理',16,'passport','menu','listinfo','',0,'0','1'),(30,'查看',16,'passport','menu','view','',0,'1','2'),(31,'查看',16,'passport','menu','view','',0,'1','3'),(32,'编辑',16,'passport','menu','edit','',0,'1','3'),(33,'删除角色',16,'passport','menu','delete','',0,'1','3'),(34,'添加菜单',16,'passport','menu','add','',0,'1','2'),(35,'角色权限',16,'passport','role','editPriv','',0,'1','3'),(36,'查看日志',17,'passport','managerlog','view','',0,'0','3'),(37,'操作日志',17,'passport','managerlog','listinfo','',0,'0','1'),(38,'用户中心设置',3,'passport','','','',0,'1','1'),(39,'用户管理',3,'passport','','','',1,'1','1'),(41,'基本设置',38,'passport','config','base','',0,'1','1'),(42,'管理用户',39,'passport','member','listinfo','',0,'1','1'),(43,'查看用户',39,'passport','member','view','',0,'1','3'),(44,'审核用户',39,'passport','member','check','',0,'1','3'),(248,'编辑配置',38,'passport','config','change','',0,'1','2'),(50,'平台附件管理',4,'passport','','','',0,'1','1'),(51,'广告管理',4,'passport','','','',0,'1','1'),(52,'友情链接',4,'passport','','','',0,'1','1'),(53,'消息管理',4,'passport','','','',0,'1','1'),(54,'评论管理',4,'passport','','','',0,'1','1'),(55,'管理附件',50,'passport','attachment','listinfo','',0,'1','1'),(56,'查看附件',50,'passport','attachment','view','',0,'1','3'),(57,'删除附件',50,'passport','attachment','delete','',0,'1','3'),(58,'管理版位',51,'passport','poster_space','listinfo','',0,'1','1'),(59,'添加版位',51,'passport','poster_space','add','',0,'1','2'),(60,'查看版位',51,'passport','poster_space','view','',0,'1','3'),(61,'编辑版位',51,'passport','poster_space','edit','',0,'1','3'),(62,'删除版位',51,'passport','poster_space','delete','',0,'1','3'),(63,'管理广告',51,'passport','poster','listinfo','',0,'1','1'),(64,'添加广告',51,'passport','poster','add','',0,'1','2'),(65,'查看广告',51,'passport','poster','view','',0,'1','3'),(66,'编辑广告',51,'passport','poster','edit','',0,'1','3'),(67,'删除广告',51,'passport','poster','delete','',0,'1','3'),(68,'管理友链',52,'passport','linkurl','listinfo','',0,'1','1'),(69,'添加友链',52,'passport','linkurl','add','',0,'1','2'),(70,'查看友链',52,'passport','linkurl','view','',0,'1','3'),(71,'编辑友链',52,'passport','linkurl','edit','',0,'1','3'),(72,'删除友链',52,'passport','linkurl','delete','',0,'1','3'),(73,'管理类型',53,'passport','message_type','listinfo','',0,'1','1'),(74,'添加类型',53,'passport','message_type','add','',0,'1','2'),(75,'查看类型',53,'passport','message_type','view','',0,'1','3'),(76,'编辑类型',53,'passport','message_type','edit','',0,'1','3'),(77,'删除类型',53,'passport','message_type','delete','',0,'1','3'),(78,'管理消息',53,'passport','message','listinfo','',0,'1','1'),(79,'添加消息',53,'passport','message','add','',0,'1','2'),(80,'查看消息',53,'passport','message','view','',0,'1','3'),(81,'编辑消息',53,'passport','message','edit','',0,'1','3'),(82,'删除消息',53,'passport','message','delete','',0,'1','3'),(83,'管理评论',54,'passport','commend','listinfo','',0,'1','1'),(84,'添加评论',54,'passport','commend','add','',0,'1','2'),(85,'查看评论',54,'passport','commend','view','',0,'1','3'),(86,'编辑评论',54,'passport','commend','edit','',0,'1','3'),(87,'删除评论',54,'passport','commend','delete','',0,'1','3'),(88,'游戏管理',5,'webgame','','','',1,'0','1'),(90,'内容管理',5,'webgame','','','',3,'1','1'),(92,'添加栏目',90,'webgame','category','add','',0,'1','2'),(93,'删除栏目',90,'webgame','category','delete','',0,'1','3'),(94,'编辑栏目',90,'webgame','category','edit','',0,'1','3'),(95,'管理栏目',90,'webgame','category','listinfo','',0,'1','1'),(96,'查看栏目',90,'webgame','category','view','',0,'1','3'),(97,'添加内容',90,'webgame','content','add','',0,'1','2'),(98,'管理内容',90,'webgame','content','catquick','',0,'1','1'),(99,'删除内容',90,'webgame','content','delete','',0,'1','3'),(100,'编辑内容',90,'webgame','content','edit','',0,'1','3'),(101,'内容列表',90,'webgame','content','listinfo','',0,'1','3'),(102,'查看内容',90,'webgame','content','view','',0,'1','3'),(107,'游戏帐号报表',88,'webgame','member_webgame','report','',0,'1','2'),(108,'游戏帐号明细',88,'webgame','member_webgame','listinfo','',4,'1','1'),(109,'复制服务器',88,'webgame','server','copy','',0,'1','3'),(110,'删除服务器',88,'webgame','server','delete','',0,'1','3'),(111,'编辑服务器',88,'webgame','server','edit','',0,'1','3'),(112,'查看服务器',88,'webgame','server','view','',0,'1','3'),(113,'添加服务器',88,'webgame','server','add','',0,'1','2'),(114,'管理服务器',88,'webgame','server','listinfo','',2,'1','1'),(115,'删除游戏',88,'webgame','webgame','delete','',0,'1','3'),(116,'编辑游戏',88,'webgame','webgame','edit','',0,'1','3'),(117,'查看游戏',88,'webgame','webgame','view','',0,'1','3'),(118,'添加游戏',88,'webgame','webgame','add','',0,'1','2'),(119,'管理游戏',88,'webgame','webgame','listinfo','',1,'1','1'),(120,'支付管理',6,'pay','','','',0,'1','1'),(121,'支付报表',6,'pay','','','',0,'1','1'),(122,'管理包月',120,'pay','paymonth','listinfo','',0,'1','1'),(123,'添加包月',120,'pay','paymonth','add','',0,'1','2'),(124,'查看包月',120,'pay','paymonth','view','',0,'1','3'),(125,'编辑包月',120,'pay','paymonth','edit','',0,'1','3'),(126,'删除包月',120,'pay','paymonth','delete','',0,'1','3'),(127,'帐号充值统计',120,'pay','member_pay','listinfo','',0,'1','1'),(128,'删除支付方式',120,'pay','payment','delete','',0,'1','3'),(129,'编辑支付方式',120,'pay','payment','edit','',0,'1','3'),(130,'查看支付方式',120,'pay','payment','view','',0,'1','3'),(131,'添加支付方式',120,'pay','payment','add','',0,'1','2'),(132,'管理支付方式',120,'pay','payment','listinfo','',0,'1','1'),(133,'编辑配置',120,'pay','config','change','',0,'1','2'),(134,'支付配置',120,'pay','config','base','',0,'1','1'),(135,'活动奖励',121,'pay','handcharge','listinfo','',0,'1','4'),(136,'手工充值',121,'pay','handcharge','add','',0,'1','2'),(137,'异常充值',121,'pay','account_unusual','listinfo','',0,'1','1'),(138,'支付记录',121,'pay','pay','listinfo','',0,'1','1'),(139,'充值记录',121,'pay','account','listinfo','',0,'1','1'),(140,'源站管理',7,'spider','','','',0,'0','1'),(141,'采集管理',7,'spider','','','',1,'0','1'),(142,'采集内容管理',7,'spider','','','',2,'0','1'),(143,'源站管理',140,'spider','site','listinfo','',0,'0','1'),(144,'添加源站',140,'spider','site','add','',0,'0','2'),(145,'编辑源站',140,'spider','site','edit','',0,'0','3'),(146,'删除源站',140,'spider','site','delete','',0,'0','3'),(147,'源站页面采集',140,'spider','sitePage','listinfo','',0,'0','1'),(148,'添加页面',140,'spider','sitePage','add','',0,'0','2'),(149,'编辑页面',140,'spider','sitePage','edit','',0,'0','3'),(150,'删除页面',140,'spider','sitePage','delete','',0,'0','3'),(151,'查看源页面',140,'spider','sitePage','showSource','',0,'0','3'),(152,'查看本地页面',140,'spider','sitePage','showTarget','',0,'0','3'),(153,'采集页面资源',140,'spider','sitePage','spider','',0,'0','3'),(154,'页面本地化',140,'spider','sitePage','localPage','',0,'0','3'),(155,'采集资源',140,'spider','sitePage','downFile','',0,'1','4'),(156,'复制任务',141,'spider','job','copy','',0,'0','3'),(157,'采集规则管理',141,'spider','crule','listinfo','',0,'0','1'),(158,'添加规则',141,'spider','crule','add','',0,'0','2'),(159,'编辑规则',141,'spider','crule','edit','',0,'0','3'),(160,'删除规则',141,'spider','crule','delete','',0,'0','3'),(161,'采集任务管理',141,'spider','job','listinfo','',0,'0','1'),(162,'添加任务',141,'spider','job','add','',0,'0','2'),(163,'编辑任务',141,'spider','job','edit','',0,'0','3'),(164,'删除任务',141,'spider','job','delete','',0,'0','3'),(165,'列表页面采集',141,'spider','spider','spiderList','',0,'0','3'),(166,'列表页处理',141,'spider','spider','dealList','',0,'0','3'),(167,'内容页面采集',141,'spider','spider','spiderContent','',0,'0','3'),(168,'内容页处理',141,'spider','spider','dealContent','',0,'0','3'),(169,'申请强制处理',141,'spider','spider','askForce','',0,'0','3'),(170,'文件采集',141,'spider','spider','spiderFile','',0,'0','3'),(171,'采集内容管理',142,'spider','content','listinfo','',0,'0','1'),(172,'采集任务发布',142,'spider','content','publish','',0,'0','1'),(173,'查看源内容',142,'spider','content','showSource','',0,'0','3'),(174,'查看本地内容',142,'spider','content','showTarget','',0,'0','3'),(175,'内容管理',8,'movie','','','',3,'1','1'),(176,'发布管理',8,'movie','','','',4,'1','4'),(177,'添加栏目',175,'movie','category','add','',0,'1','2'),(178,'删除栏目',175,'movie','category','delete','',0,'1','3'),(179,'编辑栏目',175,'movie','category','edit','',0,'1','3'),(180,'管理栏目',175,'movie','category','listinfo','',0,'1','1'),(181,'查看栏目',175,'movie','category','view','',0,'1','3'),(182,'添加内容',175,'movie','content','add','',0,'1','2'),(183,'管理内容',175,'movie','content','catquick','',0,'1','1'),(184,'删除内容',175,'movie','content','delete','',0,'1','3'),(185,'编辑内容',175,'movie','content','edit','',0,'1','3'),(186,'内容列表',175,'movie','content','listinfo','',0,'1','3'),(187,'查看内容',175,'movie','content','view','',0,'1','3'),(188,'生成栏目页',176,'movie','publish','category','',0,'1','4'),(189,'生成内容页',176,'movie','publish','content','',0,'1','4'),(190,'生成首页',176,'movie','publish','index','',0,'1','4'),(191,'更新URL页',176,'movie','publish','url','',0,'1','4'),(192,'内容管理',9,'tbshop','','','',3,'1','1'),(194,'添加栏目',192,'tbshop','category','add','',0,'1','2'),(195,'删除栏目',192,'tbshop','category','delete','',0,'1','3'),(196,'编辑栏目',192,'tbshop','category','edit','',0,'1','3'),(197,'管理栏目',192,'tbshop','category','listinfo','',0,'1','1'),(198,'查看栏目',192,'tbshop','category','view','',0,'1','3'),(199,'添加内容',192,'tbshop','content','add','',0,'1','2'),(200,'管理内容',192,'tbshop','content','catquick','',0,'1','1'),(201,'删除内容',192,'tbshop','content','delete','',0,'1','3'),(202,'编辑内容',192,'tbshop','content','edit','',0,'1','3'),(203,'内容列表',192,'tbshop','content','listinfo','',0,'1','3'),(204,'查看内容',192,'tbshop','content','view','',0,'1','3'),(209,'机构管理',10,'kidsedu','','','',0,'0','1'),(210,'内容管理',10,'kidsedu','','','',0,'0','1'),(211,'资源管理',10,'kidsedu','','','',0,'0','1'),(213,'添加栏目',210,'kidsedu','category','add','',0,'1','2'),(214,'删除栏目',210,'kidsedu','category','delete','',0,'1','3'),(215,'编辑栏目',210,'kidsedu','category','edit','',0,'1','3'),(216,'管理栏目',210,'kidsedu','category','listinfo','',0,'1','1'),(217,'查看栏目',210,'kidsedu','category','view','',0,'1','3'),(218,'添加内容',210,'kidsedu','content','add','',0,'1','2'),(219,'管理内容',210,'kidsedu','content','catquick','',0,'1','1'),(220,'删除内容',210,'kidsedu','content','delete','',0,'1','3'),(221,'编辑内容',210,'kidsedu','content','edit','',0,'1','3'),(222,'内容列表',210,'kidsedu','content','listinfo','',0,'1','3'),(223,'查看内容',210,'kidsedu','content','view','',0,'1','3'),(228,'添加机构',209,'kidsedu','agency','add','',0,'1','2'),(229,'删除机构',209,'kidsedu','agency','delete','',0,'1','3'),(230,'编辑机构',209,'kidsedu','agency','edit','',0,'1','3'),(231,'管理机构',209,'kidsedu','agency','listinfo','',0,'1','1'),(232,'查看机构',209,'kidsedu','agency','view','',0,'1','3'),(233,'添加管理员',209,'kidsedu','superuserl','add','',0,'1','2'),(234,'删除管理员',209,'kidsedu','superuserl','delete','',0,'1','3'),(235,'编辑管理员',209,'kidsedu','superuserl','edit','',0,'1','3'),(236,'管理管理员',209,'kidsedu','superuserl','listinfo','',0,'1','1'),(237,'查看管理员',209,'kidsedu','superuserl','view','',0,'1','3'),(238,'添加课程',211,'kidsedu','course','add','',0,'1','2'),(239,'删除课程',211,'kidsedu','course','delete','',0,'1','3'),(240,'编辑课程',211,'kidsedu','course','edit','',0,'1','3'),(241,'管理课程',211,'kidsedu','course','listinfo','',0,'1','1'),(242,'查看课程',211,'kidsedu','course','view','',0,'1','3'),(243,'添加学校',211,'kidsedu','school','add','',0,'1','2'),(244,'删除学校',211,'kidsedu','school','delete','',0,'1','3'),(245,'编辑学校',211,'kidsedu','school','edit','',0,'1','3'),(246,'管理学校',211,'kidsedu','school','listinfo','',0,'1','1'),(247,'查看学校',211,'kidsedu','school','view','',0,'1','3');
/*!40000 ALTER TABLE `sp_admin_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sp_admin_privilege`
--

DROP TABLE IF EXISTS `sp_admin_privilege`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sp_admin_privilege` (
  `role_id` tinyint(3) unsigned NOT NULL COMMENT '角色ID',
  `menu_id` smallint(5) unsigned NOT NULL COMMENT '菜单ID',
  UNIQUE KEY `priviledge` (`role_id`,`menu_id`),
  KEY `operation` (`role_id`,`menu_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sp_admin_privilege`
--

LOCK TABLES `sp_admin_privilege` WRITE;
/*!40000 ALTER TABLE `sp_admin_privilege` DISABLE KEYS */;
INSERT INTO `sp_admin_privilege` VALUES (2,5),(2,88),(2,89),(2,90),(2,91),(2,92),(2,93),(2,94),(2,95),(2,96),(2,97),(2,98),(2,99),(2,100),(2,101),(2,102),(2,103),(2,104),(2,105),(2,106),(2,107),(2,108),(2,109),(2,110),(2,111),(2,112),(2,113),(2,114),(2,115),(2,116),(2,117),(2,118),(2,119),(3,1),(3,2),(3,3),(3,4),(3,5),(3,6),(3,11),(3,12),(3,13),(3,14),(3,15),(3,16),(3,17),(3,18),(3,19),(3,20),(3,21),(3,22),(3,23),(3,24),(3,25),(3,26),(3,27),(3,28),(3,29),(3,30),(3,31),(3,32),(3,33),(3,34),(3,35),(3,36),(3,37),(3,38),(3,39),(3,41),(3,42),(3,43),(3,44),(3,50),(3,51),(3,52),(3,53),(3,54),(3,55),(3,56),(3,57),(3,58),(3,59),(3,60),(3,61),(3,62),(3,63),(3,64),(3,65),(3,66),(3,67),(3,68),(3,69),(3,70),(3,71),(3,72),(3,73),(3,74),(3,75),(3,76),(3,77),(3,78),(3,79),(3,80),(3,81),(3,82),(3,83),(3,84),(3,85),(3,86),(3,87),(3,88),(3,90),(3,92),(3,93),(3,94),(3,95),(3,96),(3,97),(3,98),(3,99),(3,100),(3,101),(3,102),(3,107),(3,108),(3,109),(3,110),(3,111),(3,112),(3,113),(3,114),(3,115),(3,116),(3,117),(3,118),(3,119),(3,120),(3,121),(3,122),(3,123),(3,124),(3,125),(3,126),(3,127),(3,128),(3,129),(3,130),(3,131),(3,132),(3,133),(3,134),(3,135),(3,136),(3,137),(3,138),(3,139),(3,248);
/*!40000 ALTER TABLE `sp_admin_privilege` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sp_admin_role`
--

DROP TABLE IF EXISTS `sp_admin_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sp_admin_role` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT COMMENT '角色ID',
  `name` varchar(50) NOT NULL COMMENT '名称',
  `description` varchar(1000) NOT NULL COMMENT '描述',
  `status` enum('0','1') NOT NULL COMMENT '0:禁用；1：启用',
  `listorder` smallint(5) unsigned NOT NULL COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sp_admin_role`
--

LOCK TABLES `sp_admin_role` WRITE;
/*!40000 ALTER TABLE `sp_admin_role` DISABLE KEYS */;
INSERT INTO `sp_admin_role` VALUES (1,'超级管理员','超级管理员','',7),(2,'编辑','网站编辑','1',0),(3,'管理员','','1',0);
/*!40000 ALTER TABLE `sp_admin_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sp_aid_cre`
--

DROP TABLE IF EXISTS `sp_aid_cre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sp_aid_cre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aid` int(11) NOT NULL DEFAULT '0',
  `aid_status` int(2) DEFAULT '0',
  `email` varchar(20) DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `aid_index` (`aid`)
) ENGINE=InnoDB AUTO_INCREMENT=501 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sp_aid_cre`
--

LOCK TABLES `sp_aid_cre` WRITE;
/*!40000 ALTER TABLE `sp_aid_cre` DISABLE KEYS */;
INSERT INTO `sp_aid_cre` VALUES (1,16033066,1,''),(2,18110861,1,''),(3,12455107,1,''),(4,17942955,1,''),(5,12349451,1,''),(6,17918393,1,''),(7,12543609,1,''),(8,18962868,1,''),(9,17183510,1,''),(10,19028947,1,''),(11,13594205,1,''),(12,10884184,1,''),(13,13638307,1,''),(14,15538984,1,''),(15,16779997,1,''),(16,17283036,1,''),(17,16075186,1,''),(18,18526822,1,''),(19,14408553,1,''),(20,16462301,1,''),(21,19085843,0,''),(22,16042313,0,''),(23,12954037,0,''),(24,16643249,0,''),(25,14354133,0,''),(26,11840917,0,''),(27,16142188,0,''),(28,15188186,0,''),(29,17514370,0,''),(30,12007288,0,''),(31,17493336,0,''),(32,11444812,0,''),(33,14744055,0,''),(34,19385841,0,''),(35,12697035,0,''),(36,18547166,0,''),(37,16752867,0,''),(38,18122838,0,''),(39,10355589,0,''),(40,17409432,0,''),(41,15980391,0,''),(42,17673660,0,''),(43,10427127,0,''),(44,19114660,0,''),(45,14291914,0,''),(46,14115594,0,''),(47,17702227,0,''),(48,16164351,0,''),(49,17715077,0,''),(50,10082331,0,''),(51,17266426,0,''),(52,16085134,0,''),(53,18626392,0,''),(54,14876558,0,''),(55,18503616,0,''),(56,17888405,0,''),(57,13931178,0,''),(58,15990674,0,''),(59,18159839,0,''),(60,19656339,0,''),(61,19800180,0,''),(62,10031882,0,''),(63,10758876,0,''),(64,13698733,0,''),(65,16217035,0,''),(66,19988978,0,''),(67,11293784,0,''),(68,16501987,0,''),(69,18628581,0,''),(70,13636944,0,''),(71,12298977,0,''),(72,10584054,0,''),(73,16023343,0,''),(74,18364551,0,''),(75,13752724,0,''),(76,13669970,0,''),(77,17091677,0,''),(78,14448475,0,''),(79,10967345,0,''),(80,11491303,0,''),(81,14554481,0,''),(82,18298494,0,''),(83,17829027,0,''),(84,14249652,0,''),(85,17761180,0,''),(86,16056943,0,''),(87,16835057,0,''),(88,13171753,0,''),(89,15353596,0,''),(90,17252722,0,''),(91,10202821,0,''),(92,19255942,0,''),(93,15671245,0,''),(94,10588401,0,''),(95,15928271,0,''),(96,17876150,0,''),(97,11595936,0,''),(98,14351235,0,''),(99,16968366,0,''),(100,11788125,0,''),(101,18035531,0,''),(102,14813276,0,''),(103,19959788,0,''),(104,15359109,0,''),(105,16916183,0,''),(106,18503590,0,''),(107,11769398,0,''),(108,13336223,0,''),(109,11372920,0,''),(110,16855933,0,''),(111,10160905,0,''),(112,10236728,0,''),(113,10700926,0,''),(114,12794446,0,''),(115,11869452,0,''),(116,10963923,0,''),(117,19211262,0,''),(118,13164536,0,''),(119,18188896,0,''),(120,11450872,0,''),(121,12687673,0,''),(122,19085752,0,''),(123,17365739,0,''),(124,19571440,0,''),(125,15759982,0,''),(126,10085590,0,''),(127,13148006,0,''),(128,15483259,0,''),(129,17972278,0,''),(130,13411612,0,''),(131,13141226,0,''),(132,15471297,0,''),(133,17932807,0,''),(134,13250142,0,''),(135,12452292,0,''),(136,12511035,0,''),(137,15198298,0,''),(138,18458384,0,''),(139,16697024,0,''),(140,18109970,0,''),(141,10458775,0,''),(142,17963970,0,''),(143,18443524,0,''),(144,18325710,0,''),(145,16297976,0,''),(146,16512751,0,''),(147,13669828,0,''),(148,18810889,0,''),(149,13044959,0,''),(150,18792132,0,''),(151,14825781,0,''),(152,17752510,0,''),(153,14285206,0,''),(154,18168502,0,''),(155,17986892,0,''),(156,15428953,0,''),(157,13184088,0,''),(158,19633582,0,''),(159,18615646,0,''),(160,14177483,0,''),(161,15040481,0,''),(162,12669954,0,''),(163,18228329,0,''),(164,13131783,0,''),(165,10973928,0,''),(166,15474295,0,''),(167,14449687,0,''),(168,15825551,0,''),(169,15778692,0,''),(170,11416810,0,''),(171,19747975,0,''),(172,14489442,0,''),(173,13203288,0,''),(174,12548115,0,''),(175,13130709,0,''),(176,18009204,0,''),(177,10653889,0,''),(178,19241838,0,''),(179,14247521,0,''),(180,13512090,0,''),(181,14817891,0,''),(182,13553181,0,''),(183,13312235,0,''),(184,15901634,0,''),(185,19571465,0,''),(186,10152419,0,''),(187,12047704,0,''),(188,19781262,0,''),(189,12763198,0,''),(190,14472204,0,''),(191,14071426,0,''),(192,16940519,0,''),(193,12488317,0,''),(194,11620031,0,''),(195,10635201,0,''),(196,18315918,0,''),(197,19673981,0,''),(198,13422152,0,''),(199,18088820,0,''),(200,10177642,0,''),(201,16621754,0,''),(202,12575839,0,''),(203,13013938,0,''),(204,17342172,0,''),(205,17669045,0,''),(206,16318707,0,''),(207,18586402,0,''),(208,14120237,0,''),(209,18673522,0,''),(210,11006897,0,''),(211,19013923,0,''),(212,12048921,0,''),(213,13202839,0,''),(214,19867432,0,''),(215,19728639,0,''),(216,19040902,0,''),(217,16018591,0,''),(218,12970249,0,''),(219,16795473,0,''),(220,15066618,0,''),(221,14946672,0,''),(222,19533507,0,''),(223,12827515,0,''),(224,15537059,0,''),(225,19202750,0,''),(226,19402569,0,''),(227,19404598,0,''),(228,18815280,0,''),(229,15862606,0,''),(230,12867190,0,''),(231,16748135,0,''),(232,15139103,0,''),(233,15451112,0,''),(234,11838250,0,''),(235,12837918,0,''),(236,18674838,0,''),(237,14860433,0,''),(238,18277653,0,''),(239,16806968,0,''),(240,19201879,0,''),(241,15588488,0,''),(242,10336808,0,''),(243,14918576,0,''),(244,13582455,0,''),(245,13156547,0,''),(246,15035371,0,''),(247,15707214,0,''),(248,13429958,0,''),(249,10028148,0,''),(250,19850868,0,''),(251,19169893,0,''),(252,16296861,0,''),(253,13974626,0,''),(254,10982548,0,''),(255,12988865,0,''),(256,11016808,0,''),(257,19094002,0,''),(258,12419583,0,''),(259,14815910,0,''),(260,16820799,0,''),(261,19656268,0,''),(262,17818941,0,''),(263,10125901,0,''),(264,17172685,0,''),(265,15485720,0,''),(266,15910547,0,''),(267,13095575,0,''),(268,17746235,0,''),(269,13983543,0,''),(270,11584367,0,''),(271,15971206,0,''),(272,15102930,0,''),(273,17601033,0,''),(274,12696375,0,''),(275,15304760,0,''),(276,14487469,0,''),(277,16523064,0,''),(278,19152913,0,''),(279,16195373,0,''),(280,13518128,0,''),(281,19004522,0,''),(282,14468223,0,''),(283,15327550,0,''),(284,13233083,0,''),(285,10182765,0,''),(286,11214579,0,''),(287,15524600,0,''),(288,13979262,0,''),(289,13322511,0,''),(290,14674771,0,''),(291,13406320,0,''),(292,13007289,0,''),(293,14817485,0,''),(294,15065557,0,''),(295,10875330,0,''),(296,19179983,0,''),(297,13273921,0,''),(298,18829660,0,''),(299,14326532,0,''),(300,15143685,0,''),(301,12738829,0,''),(302,18263091,0,''),(303,13098964,0,''),(304,10705550,0,''),(305,14230860,0,''),(306,19037648,0,''),(307,12495658,0,''),(308,15365351,0,''),(309,19339780,0,''),(310,10602843,0,''),(311,14994880,0,''),(312,13165869,0,''),(313,10844705,0,''),(314,14725922,0,''),(315,11095495,0,''),(316,11299708,0,''),(317,13212058,0,''),(318,12161163,0,''),(319,11169642,0,''),(320,19364725,0,''),(321,13314695,0,''),(322,18479301,0,''),(323,12452417,0,''),(324,16824187,0,''),(325,16763681,0,''),(326,13345844,0,''),(327,16438178,0,''),(328,12153359,0,''),(329,11452261,0,''),(330,10801230,0,''),(331,19649369,0,''),(332,15843151,0,''),(333,10267651,0,''),(334,13808803,0,''),(335,18241063,0,''),(336,19778905,0,''),(337,11519953,0,''),(338,15085767,0,''),(339,10868976,0,''),(340,19087583,0,''),(341,12830982,0,''),(342,16892164,0,''),(343,15967875,0,''),(344,19162881,0,''),(345,17910780,0,''),(346,12065255,0,''),(347,16593938,0,''),(348,16773925,0,''),(349,14087809,0,''),(350,10117270,0,''),(351,18322927,0,''),(352,11262821,0,''),(353,11345328,0,''),(354,12938178,0,''),(355,10654905,0,''),(356,14459992,0,''),(357,10335246,0,''),(358,18296254,0,''),(359,10475531,0,''),(360,17488897,0,''),(361,16017890,0,''),(362,17622758,0,''),(363,10060120,0,''),(364,17432331,0,''),(365,16981291,0,''),(366,12609463,0,''),(367,12103443,0,''),(368,12688827,0,''),(369,17133806,0,''),(370,17602547,0,''),(371,16611316,0,''),(372,10248939,0,''),(373,11410750,0,''),(374,16306934,0,''),(375,17302417,0,''),(376,17591286,0,''),(377,16049178,0,''),(378,17472032,0,''),(379,19212627,0,''),(380,13647039,0,''),(381,10597316,0,''),(382,12045462,0,''),(383,18435366,0,''),(384,16040440,0,''),(385,14896103,0,''),(386,16359196,0,''),(387,17107671,0,''),(388,16460769,0,''),(389,10980828,0,''),(390,15521839,0,''),(391,14666708,0,''),(392,16768024,0,''),(393,19839996,0,''),(394,18895907,0,''),(395,14959548,0,''),(396,15671463,0,''),(397,14027249,0,''),(398,13121857,0,''),(399,13527538,0,''),(400,18272119,0,''),(401,10777981,0,''),(402,19073553,0,''),(403,13033817,0,''),(404,17948428,0,''),(405,10640687,0,''),(406,19358157,0,''),(407,14868721,0,''),(408,16269135,0,''),(409,16739513,0,''),(410,14890160,0,''),(411,14232262,0,''),(412,16490831,0,''),(413,19757370,0,''),(414,19314354,0,''),(415,17299660,0,''),(416,18555237,0,''),(417,10877207,0,''),(418,18720325,0,''),(419,10970002,0,''),(420,18689038,0,''),(421,10535180,0,''),(422,16608792,0,''),(423,11438417,0,''),(424,17365710,0,''),(425,12513298,0,''),(426,10469363,0,''),(427,14806921,0,''),(428,12626516,0,''),(429,18711820,0,''),(430,15679548,0,''),(431,12262280,0,''),(432,14272759,0,''),(433,14576956,0,''),(434,10066503,0,''),(435,16601649,0,''),(436,12808734,0,''),(437,14238726,0,''),(438,12767427,0,''),(439,11120956,0,''),(440,17302500,0,''),(441,13149632,0,''),(442,13840663,0,''),(443,19754418,0,''),(444,17250097,0,''),(445,16987235,0,''),(446,13185882,0,''),(447,14967708,0,''),(448,15280893,0,''),(449,11501342,0,''),(450,11664032,0,''),(451,13816135,0,''),(452,14088580,0,''),(453,18994493,0,''),(454,12706725,0,''),(455,16550150,0,''),(456,14630571,0,''),(457,13502408,0,''),(458,13620326,0,''),(459,17594409,0,''),(460,17111064,0,''),(461,12772094,0,''),(462,12527280,0,''),(463,14320119,0,''),(464,14018756,0,''),(465,17133425,0,''),(466,13610852,0,''),(467,16653989,0,''),(468,12437386,0,''),(469,12224965,0,''),(470,13812669,0,''),(471,12388448,0,''),(472,10504235,0,''),(473,15355833,0,''),(474,15266460,0,''),(475,10264798,0,''),(476,15524613,0,''),(477,16828669,0,''),(478,17569506,0,''),(479,17361523,0,''),(480,14099099,0,''),(481,18410925,0,''),(482,19757328,0,''),(483,13553863,0,''),(484,18497335,0,''),(485,11825082,0,''),(486,13633408,0,''),(487,12691794,0,''),(488,12558746,0,''),(489,14718349,0,''),(490,15915507,0,''),(491,15422486,0,''),(492,19365911,0,''),(493,10562095,0,''),(494,14712745,0,''),(495,11877438,0,''),(496,15248957,0,''),(497,10612469,0,''),(498,17315479,0,''),(499,14739984,0,''),(500,11753483,0,'');
/*!40000 ALTER TABLE `sp_aid_cre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sp_attachment`
--

DROP TABLE IF EXISTS `sp_attachment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sp_attachment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `app_code` char(15) NOT NULL,
  `catid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `contentid` int(10) unsigned NOT NULL,
  `file_name` char(50) NOT NULL,
  `file_path` char(200) NOT NULL,
  `file_size` int(10) unsigned NOT NULL DEFAULT '0',
  `file_ext` char(10) NOT NULL,
  `isimage` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `isthumb` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `downloads` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `username` char(32) NOT NULL DEFAULT '',
  `uploadtime` int(10) unsigned NOT NULL DEFAULT '0',
  `uploadip` char(15) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `authcode` char(32) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `authcode` (`authcode`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sp_attachment`
--

LOCK TABLES `sp_attachment` WRITE;
/*!40000 ALTER TABLE `sp_attachment` DISABLE KEYS */;
INSERT INTO `sp_attachment` VALUES (1,'',0,0,'navo2.jpg','passport2013/0910/20130910141912626.jpg',220469,'jpg',0,0,0,0,'',0,'',0,''),(2,'',0,0,'navo2.jpg','passport2013/0910/20130910141919705.jpg',220469,'jpg',0,0,0,0,'',0,'',0,''),(3,'',0,0,'navo2.jpg','passport2013/0910/20130910141925472.jpg',220469,'jpg',0,0,0,0,'',0,'',0,''),(4,'',0,0,'1ebc1fc27f2a9bc75613ba1c9096859a.jpg','passport2013/0910/20130910142240992.jpg',78630,'jpg',0,0,0,0,'',0,'',0,''),(5,'',0,0,'2012092896369.jpg','passport2013/0910/20130910142311290.jpg',246837,'jpg',0,0,0,0,'',0,'',0,''),(6,'',0,0,'2012122400068.jpg','passport2013/0910/20130910142358994.jpg',218866,'jpg',0,0,0,0,'',0,'',0,''),(7,'',0,0,'2013012947865.png','passport2013/0910/20130910142445635.png',257154,'png',0,0,0,0,'',0,'',0,''),(8,'',0,0,'2012092691310.jpg','passport2013/0910/20130910142529332.jpg',358073,'jpg',0,0,0,0,'',0,'',0,''),(9,'',0,0,'QQ图片20130905144255.jpg','passport2013/0910/20130910143505676.jpg',62110,'jpg',0,0,0,0,'',0,'',0,''),(10,'',0,0,'QQ图片20130905144308.jpg','passport2013/0910/20130910143514632.jpg',207182,'jpg',0,0,0,0,'',0,'',0,''),(11,'',0,0,'QQ图片20130905144308.jpg','passport2013/0910/20130910143520311.jpg',207182,'jpg',0,0,0,0,'',0,'',0,''),(12,'',0,0,'2013010691620.jpg','passport2013/0910/20130910143536811.jpg',219665,'jpg',0,0,0,0,'',0,'',0,''),(13,'',0,0,'2012101190770.png','passport2013/0910/20130910143545206.png',246267,'png',0,0,0,0,'',0,'',0,''),(14,'',0,0,'2012101137321.png','passport2013/0910/20130910143551723.png',286266,'png',0,0,0,0,'',0,'',0,''),(15,'',0,0,'sxd.jpg','passport2013/0910/20130910143739823.jpg',67788,'jpg',0,0,0,0,'',0,'',0,''),(16,'',0,0,'sxd.jpg','passport2013/0910/20130910143746964.jpg',67788,'jpg',0,0,0,0,'',0,'',0,''),(17,'',0,0,'sxd.jpg','passport2013/0910/20130910143751644.jpg',67788,'jpg',0,0,0,0,'',0,'',0,''),(18,'',0,0,'QQ图片20130905144255.jpg','passport2013/0910/20130910144500693.jpg',62110,'jpg',0,0,0,0,'',0,'',0,''),(19,'',0,0,'QQ图片20130905144308.jpg','passport2013/0910/20130910144532119.jpg',207182,'jpg',0,0,0,0,'',0,'',0,''),(20,'',0,0,'QQ图片20130905144237.jpg','passport2013/0910/20130910152355374.jpg',58070,'jpg',0,0,0,0,'',0,'',0,''),(21,'',0,0,'QQ图片20130905144237.jpg','passport2013/0911/20130911113510484.jpg',58070,'jpg',0,0,0,0,'',0,'',0,''),(22,'',0,0,'QQ图片20130905144255.jpg','passport2013/0911/20130911163359465.jpg',62110,'jpg',0,0,0,0,'',0,'',0,''),(23,'',0,0,'QQ图片20130905144237.jpg','passport2013/0911/20130911163559221.jpg',58070,'jpg',0,0,0,0,'',0,'',0,''),(24,'',0,0,'lgz.jpg','passport2013/0911/20130911163649869.jpg',95006,'jpg',0,0,0,0,'',0,'',0,''),(25,'',0,0,'QQ图片20130905144255.jpg','passport2013/0911/20130911163649114.jpg',62110,'jpg',0,0,0,0,'',0,'',0,''),(26,'',0,0,'QQ图片20130905144237.jpg','passport2013/0911/20130911165102242.jpg',58070,'jpg',0,0,0,0,'',0,'',0,''),(27,'',0,0,'2012092406342.png','passport2013/0912/20130912172705850.png',227413,'png',0,0,0,0,'',0,'',0,'');
/*!40000 ALTER TABLE `sp_attachment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sp_linkurl`
--

DROP TABLE IF EXISTS `sp_linkurl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sp_linkurl` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `type` char(8) NOT NULL DEFAULT '',
  `name` varchar(50) NOT NULL DEFAULT '',
  `url` varchar(255) NOT NULL DEFAULT '',
  `logo` varchar(255) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `username` varchar(30) NOT NULL DEFAULT '',
  `listorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sp_linkurl`
--

LOCK TABLES `sp_linkurl` WRITE;
/*!40000 ALTER TABLE `sp_linkurl` DISABLE KEYS */;
INSERT INTO `sp_linkurl` VALUES (1,'nova','友链1','http://www.baidu.com/','','','',0,1,1379396460);
/*!40000 ALTER TABLE `sp_linkurl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sp_member`
--

DROP TABLE IF EXISTS `sp_member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sp_member` (
  `userid` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户ID',
  `username` char(32) NOT NULL DEFAULT '' COMMENT '用户名',
  `ucserver_id` int(10) unsigned NOT NULL DEFAULT '0',
  `password` char(32) NOT NULL DEFAULT '' COMMENT '密码',
  `encrypt` char(6) NOT NULL COMMENT '辅助加密字符串',
  `avatar` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '用户头像',
  `email` char(32) NOT NULL DEFAULT '' COMMENT '邮箱',
  `channel_code` char(15) NOT NULL,
  `truename` varchar(255) NOT NULL DEFAULT '' COMMENT '真实姓名',
  `gender` enum('1','2') NOT NULL DEFAULT '2' COMMENT '性别 1 男 2 女',
  `telephone` varchar(255) NOT NULL DEFAULT '' COMMENT '电话',
  `address` varchar(255) NOT NULL DEFAULT '' COMMENT '地址',
  `qq` varchar(255) NOT NULL DEFAULT '' COMMENT 'QQ号',
  `birthday` int(11) NOT NULL DEFAULT '0' COMMENT '生日',
  `postcode` varchar(255) NOT NULL DEFAULT '' COMMENT '邮编',
  `mobile` varchar(255) NOT NULL DEFAULT '' COMMENT '手机号',
  `idcard` char(18) NOT NULL DEFAULT '' COMMENT '身份证号',
  `regip` char(15) NOT NULL DEFAULT '' COMMENT '注册IP',
  `regdate` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '注册时间',
  `loginnum` int(8) NOT NULL COMMENT '登录次数',
  `lastloginip` char(15) NOT NULL DEFAULT '0' COMMENT '最后一次登录IP',
  `lastlogintime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '最后一次登录时间',
  `is_lock` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`userid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=18526823 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sp_member`
--

LOCK TABLES `sp_member` WRITE;
/*!40000 ALTER TABLE `sp_member` DISABLE KEYS */;
INSERT INTO `sp_member` VALUES (13594205,'13594205',1,'57365dbe22f0d2ae6d09d54626889af1','S1EiGv',0,'','plat','','2','','','',0,'','','','127.0.0.1',1381209132,0,'0',0,0),(10884184,'aaaaaa',2,'ca3f08861e16fecb683bfa17380b3905','s4MdgT',0,'','plat','','2','','','',0,'','','','127.0.0.1',1381209218,1,'127.0.0.1',1381222117,0),(13638307,'13638307',3,'f6dd74080eb5279e35d917a1986ae24a','vGmSe3',0,'','plat','','2','','','',0,'','','','127.0.0.1',1381209251,1,'127.0.0.1',1381209282,0),(15538984,'15538984',4,'ae4256a886068c304a1c1cbb22389574','tQw97N',0,'','plat','','2','','','',0,'','','','127.0.0.1',1381214448,0,'0',0,0),(16779997,'16779997',5,'d45c0e8a6ec5ee4ba56195f7ed8894be','SkLIE7',0,'','plat','','2','','','',0,'','','','127.0.0.1',1381214470,0,'0',0,0),(16075186,'aaaaaaa',6,'19853cdb25ab644e5f10aa0038cde6de','y7RjZq',0,'','plat','','2','','','',0,'','','','127.0.0.1',1381214878,0,'0',0,0),(18526822,'18526822',7,'228e80b23de4dcb9bea830428c09122e','XrDlXe',0,'','plat','','2','','','',0,'','','','127.0.0.1',1381214900,0,'0',0,0),(14408553,'14408553',8,'58df273bf65285d4921c2819115c3189','5fyApq',0,'','plat','','2','','','',0,'','','','127.0.0.1',1381215276,0,'0',0,0),(16462301,'16462301',9,'87fab1287112cb140f4e84414db5fb06','lYpR11',0,'','plat','','2','','','',0,'','','','127.0.0.1',1381218941,0,'0',0,0);
/*!40000 ALTER TABLE `sp_member` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sp_poster`
--

DROP TABLE IF EXISTS `sp_poster`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sp_poster` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `space_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `type` varchar(10) NOT NULL,
  `start_time` int(10) unsigned NOT NULL DEFAULT '0',
  `end_time` int(10) unsigned NOT NULL DEFAULT '0',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0',
  `listorder` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `url` varchar(200) NOT NULL,
  `url_ext` varchar(200) NOT NULL,
  `pic` varchar(200) NOT NULL,
  `pic_ext` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `spaceid` (`space_id`,`status`,`listorder`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sp_poster`
--

LOCK TABLES `sp_poster` WRITE;
/*!40000 ALTER TABLE `sp_poster` DISABLE KEYS */;
INSERT INTO `sp_poster` VALUES (1,'幻灯广告1',1,'image',2013,2013,2013,66,1,'http://www.baidu.com','','http://upload.ci.com/passport2013/0910/20130910142240992.jpg',''),(2,'网页游戏',1,'image',0,0,0,2,1,'http://www.163.com','','http://upload.ci.com/passport2013/0910/20130910142311290.jpg',''),(3,'测试站点2',1,'image',0,0,0,2,0,'http://weibo.com','','http://upload.ci.com/passport2013/0910/20130910142358994.jpg',''),(4,'管理员',1,'image',0,0,0,8,1,'http://passport.ci.com/','','http://upload.ci.com/passport2013/0910/20130910142445635.png',''),(5,'幻灯广告',0,'0',0,0,0,9,1,'http://abc.com/','','http://upload.ci.com/passport2013/0910/20130910142529332.jpg','');
/*!40000 ALTER TABLE `sp_poster` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sp_poster_space`
--

DROP TABLE IF EXISTS `sp_poster_space`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sp_poster_space` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(50) NOT NULL,
  `type` char(30) NOT NULL,
  `width` smallint(4) unsigned NOT NULL DEFAULT '0',
  `height` smallint(4) unsigned NOT NULL DEFAULT '0',
  `description` char(100) NOT NULL,
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `disabled` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sp_poster_space`
--

LOCK TABLES `sp_poster_space` WRITE;
/*!40000 ALTER TABLE `sp_poster_space` DISABLE KEYS */;
INSERT INTO `sp_poster_space` VALUES (1,'幻灯广告','0',0,0,'',1);
/*!40000 ALTER TABLE `sp_poster_space` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sp_times`
--

DROP TABLE IF EXISTS `sp_times`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sp_times` (
  `username` char(40) NOT NULL,
  `ip` char(15) NOT NULL,
  `logintime` int(10) unsigned NOT NULL DEFAULT '0',
  `isadmin` tinyint(1) NOT NULL DEFAULT '0',
  `times` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`username`,`isadmin`)
) ENGINE=MEMORY DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sp_times`
--

LOCK TABLES `sp_times` WRITE;
/*!40000 ALTER TABLE `sp_times` DISABLE KEYS */;
/*!40000 ALTER TABLE `sp_times` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-10-08 18:12:13
