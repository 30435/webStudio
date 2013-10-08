-- MySQL dump 10.13  Distrib 5.6.11, for Win32 (x86)
--
-- Host: localhost    Database: studio_pay
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
-- Current Database: `studio_pay`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `studio_pay` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `studio_pay`;

--
-- Table structure for table `sp_account`
--

DROP TABLE IF EXISTS `sp_account`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sp_account` (
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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sp_account`
--

LOCK TABLES `sp_account` WRITE;
/*!40000 ALTER TABLE `sp_account` DISABLE KEYS */;
INSERT INTO `sp_account` VALUES (1,'2013100806514','','yeepay','touser','',0,'',0,10884184,'aaaaaa',10884184,'aaaaaa','',0.3,1000.00,1000.00,700.00,1381223055,'20131008',1381223056,'a:12:{s:4:\"code\";s:6:\"yeepay\";s:6:\"r0_Cmd\";s:3:\"Buy\";s:7:\"r1_Code\";s:0:\"\";s:8:\"r2_TrxId\";s:0:\"\";s:6:\"r3_Amt\";s:4:\"1000\";s:6:\"r4_Cur\";s:3:\"CNY\";s:6:\"r5_Pid\";s:0:\"\";s:8:\"r6_Order\";s:13:\"2013100806514\";s:6:\"r7_Uid\";s:0:\"\";s:5:\"r8_MP\";s:0:\"\";s:8:\"r9_BType\";s:0:\"\";s:4:\"hmac\";s:32:\"7bc865f9ed933fddd154b403bb5f924a\";}','1',NULL),(2,'2013100826078','','yeepay','towebgame','nova',0,'',0,10884184,'aaaaaa',10884184,'aaaaaa','',0.3,1.00,1.00,0.70,1381223080,'20131008',1381223082,'a:12:{s:4:\"code\";s:6:\"yeepay\";s:6:\"r0_Cmd\";s:3:\"Buy\";s:7:\"r1_Code\";s:0:\"\";s:8:\"r2_TrxId\";s:0:\"\";s:6:\"r3_Amt\";s:1:\"1\";s:6:\"r4_Cur\";s:3:\"CNY\";s:6:\"r5_Pid\";s:0:\"\";s:8:\"r6_Order\";s:13:\"2013100826078\";s:6:\"r7_Uid\";s:0:\"\";s:5:\"r8_MP\";s:0:\"\";s:8:\"r9_BType\";s:0:\"\";s:4:\"hmac\";s:32:\"045ad722c0218fa6980411954aeeb735\";}','1',NULL),(3,'2013100895563','','yeepay','towebgame','nova',0,'',0,10884184,'aaaaaa',10884184,'aaaaaa','',0.3,10.00,10.00,7.00,1381224699,'20131008',1381224701,'a:12:{s:4:\"code\";s:6:\"yeepay\";s:6:\"r0_Cmd\";s:3:\"Buy\";s:7:\"r1_Code\";s:0:\"\";s:8:\"r2_TrxId\";s:0:\"\";s:6:\"r3_Amt\";s:2:\"10\";s:6:\"r4_Cur\";s:3:\"CNY\";s:6:\"r5_Pid\";s:0:\"\";s:8:\"r6_Order\";s:13:\"2013100895563\";s:6:\"r7_Uid\";s:0:\"\";s:5:\"r8_MP\";s:0:\"\";s:8:\"r9_BType\";s:0:\"\";s:4:\"hmac\";s:32:\"6353959ed119b3a304f68f02cbacf2f4\";}','1',NULL),(4,'2013100806856','','yeepay','towebgame','nova',0,'',0,10884184,'aaaaaa',16075186,'aaaaaaa','',0.3,333.00,333.00,233.10,1381225975,'20131008',1381225977,'a:12:{s:4:\"code\";s:6:\"yeepay\";s:6:\"r0_Cmd\";s:3:\"Buy\";s:7:\"r1_Code\";s:0:\"\";s:8:\"r2_TrxId\";s:0:\"\";s:6:\"r3_Amt\";s:3:\"333\";s:6:\"r4_Cur\";s:3:\"CNY\";s:6:\"r5_Pid\";s:0:\"\";s:8:\"r6_Order\";s:13:\"2013100806856\";s:6:\"r7_Uid\";s:0:\"\";s:5:\"r8_MP\";s:0:\"\";s:8:\"r9_BType\";s:0:\"\";s:4:\"hmac\";s:32:\"cc133157ecca4ee2dbcd48db7b929e81\";}','1',NULL);
/*!40000 ALTER TABLE `sp_account` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sp_account_unusual`
--

DROP TABLE IF EXISTS `sp_account_unusual`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sp_account_unusual` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sp_account_unusual`
--

LOCK TABLES `sp_account_unusual` WRITE;
/*!40000 ALTER TABLE `sp_account_unusual` DISABLE KEYS */;
/*!40000 ALTER TABLE `sp_account_unusual` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sp_member_pay`
--

DROP TABLE IF EXISTS `sp_member_pay`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sp_member_pay` (
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sp_member_pay`
--

LOCK TABLES `sp_member_pay` WRITE;
/*!40000 ALTER TABLE `sp_member_pay` DISABLE KEYS */;
INSERT INTO `sp_member_pay` VALUES (10884184,'aaaaaa',642.7,1011,3,1011,707.7,3,1381224701,10,65,1381226142,1381226142,0.00),(16075186,'aaaaaaa',0.1,333,1,333,233.1,1,1381225977,1,233,1381225977,1381225977,0.00);
/*!40000 ALTER TABLE `sp_member_pay` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sp_pay`
--

DROP TABLE IF EXISTS `sp_pay`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sp_pay` (
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
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sp_pay`
--

LOCK TABLES `sp_pay` WRITE;
/*!40000 ALTER TABLE `sp_pay` DISABLE KEYS */;
INSERT INTO `sp_pay` VALUES (1,'2013100865180','2013100826078','',0,10884184,'aaaaaa',0,'nova',0,'',1381223150,'20131008'),(2,'2013100891619','2013100826078','',0,10884184,'aaaaaa',0,'nova',0,'',1381223158,'20131008'),(3,'2013100893921','2013100826078','',0,10884184,'aaaaaa',0,'nova',0,'',1381223158,'20131008'),(4,'2013100883440','2013100895563','',0,10884184,'aaaaaa',7,'nova',0,'',1381224701,'20131008'),(5,'2013100871698','2013100895563','aaaaaa',10884184,10884184,'aaaaaa',7,'nova',0,'',1381225247,'20131008'),(6,'2013100877365','2013100895563','aaaaaa',10884184,10884184,'aaaaaa',7,'nova',0,'',1381225250,'20131008'),(7,'2013100882459','0','aaaaaaa',16075186,10884184,'aaaaaa',10,'nova',0,'',1381225429,'20131008'),(8,'2013100854187','0','aaaaaaa',16075186,10884184,'aaaaaa',10,'nova',0,'',1381225458,'20131008'),(9,'2013100853387','0','aaaaaaa',16075186,10884184,'aaaaaa',10,'nova',0,'',1381225658,'20131008'),(10,'2013100880755','0','aaaaaaa',16075186,10884184,'aaaaaa',10,'nova',0,'',1381225713,'20131008'),(11,'2013100864152','0','aaaaaaa',16075186,10884184,'aaaaaa',10,'nova',0,'',1381225736,'20131008'),(12,'2013100817717','0','aaaaaaa',16075186,10884184,'aaaaaa',10,'nova',0,'',1381225773,'20131008'),(13,'2013100862173','0','aaaaaaa',16075186,10884184,'aaaaaa',10,'nova',0,'',1381225786,'20131008'),(14,'2013100860751','0','aaaaaaa',16075186,10884184,'aaaaaa',10,'nova',0,'',1381225852,'20131008'),(15,'2013100848469','0','aaaaaaa',16075186,10884184,'aaaaaa',10,'nova',0,'',1381225865,'20131008'),(16,'2013100802120','2013100806856','aaaaaaa',16075186,16075186,'aaaaaaa',233,'nova',0,'',1381225977,'20131008'),(17,'2013100867284','0','aaaaaaa',16075186,10884184,'aaaaaa',12,'nova',0,'',1381226043,'20131008'),(18,'2013100823821','0','aaaaaaa',16075186,10884184,'aaaaaa',12,'nova',0,'',1381226142,'20131008');
/*!40000 ALTER TABLE `sp_pay` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sp_pay_paymonth`
--

DROP TABLE IF EXISTS `sp_pay_paymonth`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sp_pay_paymonth` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sp_pay_paymonth`
--

LOCK TABLES `sp_pay_paymonth` WRITE;
/*!40000 ALTER TABLE `sp_pay_paymonth` DISABLE KEYS */;
/*!40000 ALTER TABLE `sp_pay_paymonth` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sp_payment`
--

DROP TABLE IF EXISTS `sp_payment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sp_payment` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT COMMENT '支付方式ID',
  `code` char(10) NOT NULL COMMENT '代码',
  `name` varchar(20) NOT NULL COMMENT '名称',
  `description` varchar(1000) NOT NULL COMMENT '描述',
  `thumb` varchar(100) NOT NULL COMMENT '图标',
  `listorder` tinyint(3) unsigned NOT NULL COMMENT '排序',
  `rate` float NOT NULL,
  `status` enum('1','0') NOT NULL COMMENT '状态，0：暂停使用；1：可正常使用',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sp_payment`
--

LOCK TABLES `sp_payment` WRITE;
/*!40000 ALTER TABLE `sp_payment` DISABLE KEYS */;
INSERT INTO `sp_payment` VALUES (1,'yeepay','银行卡充值（易宝）','银行卡支付说明：<br />\n1、您必须开通了网上银行业务；<br />\n2、网上银行开通办法请咨询当地所属银行；<br />\n3、请您关闭所有屏蔽弹出窗口之类的功能，否则在线支付将无法继续，比如：3721、上网助手、google toolbar、alexa toolbar、baidu等；<br />\n4、如果您用信用卡支付，请确认该信用卡的网上交易限额大于等于您的充值金额；<br />\n5、如果有疑问，请联系我们在线客服或拨打客服电话。<br />\n6、<font  style=\"color:#cc0000\">请充值时务必确认好您的充值金额准确无误后再进行充值，避免输错金额导致的失误，如因未仔细确认金额造成的充值问题，我们将一律不予处理此类退款申诉。</font>\n','1',100,0.3,'1'),(2,'alipay','支付宝','支付宝支付说明：<br />\n1、您必须开通了网上银行业务；<br />\n2、使用支付宝网银支付，对消费者来说，目前不需要任何的手续费；<br />\n3、请您关闭所有屏蔽弹出窗口之类的功能，否则在线支付将无法继续，比如：3721、上网助手、google toolbar、alexa toolbar、baidu等；<br />\n4、请使用IE，TT，Maxthon浏览器以确保支付宝充值成功。<br />\n5、如果有疑问，请联系我们在线客服或拨打客服电话。<br />\n6、请您每次充值务必到支付页面进行提交，并按照充值流程完成充值，不要单独付款给我们的支付宝账户，避免出现不必要的损失！<br />\n7、<font style=\"color:#cc0000\">请充值时务必确认好您的充值金额准确无误后再进行充值，避免输错金额导致的失误，如因未仔细确认金额造成的充值问题，我们将一律不予处理此类退款申诉。</font>\n','1',8,0,'1'),(3,'ybshenzx','神州行充值卡','神州行充值卡说明：<br />\n1、请确认您的充值卡是序列号17位、密码18位，由中国移动发行的全国通用的神州行充值卡，而且是没有使用过的。<br />\n2、请务必使用与您选择的面额相同的神州行卡进行支付，如果选择金额额度不正确会导致卡面金额丢失。<br />\n3、本充值方式还支持江苏、浙江、广东、辽宁、福建的神州行地方卡。支持300和500元面额。<br />\n4、如果有疑问，请联系我们在线客服或拨打客服电话。\n','1',97,0.04,'1'),(4,'ybtele','电信卡','电信卡<br />\n电信卡','0',10,0.04,'1'),(5,'myself','诺币兑换','','0',0,0,'1');
/*!40000 ALTER TABLE `sp_payment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sp_paymonth`
--

DROP TABLE IF EXISTS `sp_paymonth`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sp_paymonth` (
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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sp_paymonth`
--

LOCK TABLES `sp_paymonth` WRITE;
/*!40000 ALTER TABLE `sp_paymonth` DISABLE KEYS */;
INSERT INTO `sp_paymonth` VALUES (1,'诺瓦包月','nova',5,2,'http://upload.ci.com/passport2013/0910/20130910144500693.jpg',233),(2,'诺瓦包年','seer',50,0,'http://upload.ci.com/passport2013/0910/20130910144532119.jpg',23),(3,'诺币兑换','nova',10,1,'http://upload.ci.com/passport2013/0912/20130912172705850.png',66);
/*!40000 ALTER TABLE `sp_paymonth` ENABLE KEYS */;
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
