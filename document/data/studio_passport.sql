-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013-09-18 08:42:41
-- 服务器版本: 5.6.11
-- PHP 版本: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `studio_passport`
--

-- --------------------------------------------------------

--
-- 表的结构 `sp_admin_manager`
--

CREATE TABLE IF NOT EXISTS `sp_admin_manager` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '管理员ID',
  `username` varchar(20) NOT NULL COMMENT '管理员帐号',
  `truename` varchar(30) NOT NULL,
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `sp_admin_manager`
--

INSERT INTO `sp_admin_manager` (`id`, `username`, `truename`, `password`, `roleid`, `email`, `encrypt`, `createtime`, `loginnum`, `lastip`, `lasttime`, `islock`, `handpay_key`, `handpay_en`) VALUES
(1, 'wangcanliang', '', '04ffd28d0a85e2050db77cbeeaa7d8ac', 1, '0', 'l9rIUD', 1361149565, 139, '127.0.0.1', 1379483457, '1', '2f5a45a93f1bb1824dbb649e85e3753d', 'tE4RTF'),
(2, 'wangcan', 'wang', '29508d34d7437cdfde48f5b4a9b668c8', 3, 'eee@test.com', 'hkKv5M', 1379388042, 21, '127.0.0.1', 1379468412, '1', '', '');

-- --------------------------------------------------------

--
-- 表的结构 `sp_admin_managerlog`
--

CREATE TABLE IF NOT EXISTS `sp_admin_managerlog` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=72 ;

--
-- 转存表中的数据 `sp_admin_managerlog`
--

INSERT INTO `sp_admin_managerlog` (`id`, `userid`, `username`, `roleid`, `role_name`, `menu_id`, `menu_name`, `data`, `data_old`, `logtype`, `ip`, `inputtime`) VALUES
(1, 2, 'wangcan', 3, '管理员', '32', '编辑', 'a:8:{s:4:"name";s:12:"查看日志";s:8:"parentid";s:2:"11";s:8:"app_code";s:8:"passport";s:10:"controller";s:10:"managerlog";s:6:"method";s:5:"viewm";s:8:"extparam";s:0:"";s:9:"listorder";b:0;s:7:"display";s:1:"4";}', 'a:10:{s:2:"id";s:2:"15";s:4:"name";s:12:"查看日志";s:8:"parentid";s:2:"11";s:8:"app_code";s:8:"passport";s:10:"controller";s:10:"managerlog";s:6:"method";s:5:"viewm";s:8:"extparam";s:0:"";s:9:"listorder";s:1:"0";s:5:"islog";s:1:"0";s:7:"display";s:1:"1";}', 'edit', '127.0.0.1', 1378793797),
(2, 2, 'wangcan', 3, '管理员', '118', '添加游戏', 'a:19:{s:4:"name";s:12:"诺瓦奇兵";s:4:"code";s:4:"nova";s:12:"webgame_type";s:1:"1";s:14:"webgame_status";s:1:"1";s:8:"url_home";s:19:"http://nova.ci.com/";s:10:"url_server";s:19:"http://nova.ci.com/";s:7:"url_bbs";s:18:"http://bbs.ci.com/";s:9:"listorder";s:1:"1";s:5:"ispay";s:1:"1";s:11:"description";s:66:"知金教育倾情奉献，最好的儿童网游，寓教于游。";s:9:"pic_small";s:60:"http://upload.ci.com/passport2013/0910/20130910141912626.jpg";s:10:"pic_middle";s:60:"http://upload.ci.com/passport2013/0910/20130910141919705.jpg";s:7:"pic_big";s:60:"http://upload.ci.com/passport2013/0910/20130910141925472.jpg";s:9:"coin_name";s:6:"诺币";s:9:"coin_unit";s:3:"枚";s:9:"coin_rate";s:2:"10";s:14:"start_maintain";i:0;s:12:"end_maintain";i:0;s:12:"url_maintain";s:0:"";}', 'a:0:{}', 'add', '127.0.0.1', 1378794012),
(3, 2, 'wangcan', 3, '管理员', '59', '添加版位', 'a:6:{s:4:"name";s:12:"幻灯广告";s:10:"space_type";s:6:"fixure";s:5:"width";s:0:"";s:6:"height";s:0:"";s:11:"description";s:0:"";s:12:"space_status";s:1:"1";}', 'a:0:{}', 'add', '127.0.0.1', 1378794106),
(4, 2, 'wangcan', 3, '管理员', '64', '添加广告', 'a:12:{s:4:"name";s:13:"幻灯广告1";s:7:"ad_type";s:5:"image";s:8:"space_id";s:1:"1";s:3:"url";s:20:"http://www.baidu.com";s:7:"url_ext";s:0:"";s:8:"add_time";s:17:"2013-09-10  14:21";s:10:"start_time";s:17:"2013-09-10  14:21";s:8:"end_time";s:17:"2013-09-29  14:21";s:9:"listorder";s:2:"66";s:9:"ad_status";s:1:"1";s:3:"pic";s:60:"http://upload.ci.com/passport2013/0910/20130910142240992.jpg";s:7:"pic_ext";s:0:"";}', 'a:0:{}', 'add', '127.0.0.1', 1378794168),
(5, 2, 'wangcan', 3, '管理员', '64', '添加广告', 'a:12:{s:4:"name";s:12:"网页游戏";s:7:"ad_type";s:5:"image";s:8:"space_id";s:1:"1";s:3:"url";s:18:"http://www.163.com";s:7:"url_ext";s:0:"";s:8:"add_time";s:0:"";s:10:"start_time";s:0:"";s:8:"end_time";s:0:"";s:9:"listorder";s:1:"2";s:9:"ad_status";s:1:"1";s:3:"pic";s:60:"http://upload.ci.com/passport2013/0910/20130910142311290.jpg";s:7:"pic_ext";s:0:"";}', 'a:0:{}', 'add', '127.0.0.1', 1378794202),
(6, 2, 'wangcan', 3, '管理员', '64', '添加广告', 'a:12:{s:4:"name";s:13:"测试站点2";s:7:"ad_type";s:5:"image";s:8:"space_id";s:1:"1";s:3:"url";s:16:"http://weibo.com";s:7:"url_ext";s:0:"";s:8:"add_time";s:0:"";s:10:"start_time";s:0:"";s:8:"end_time";s:0:"";s:9:"listorder";s:1:"2";s:9:"ad_status";s:1:"0";s:3:"pic";s:60:"http://upload.ci.com/passport2013/0910/20130910142358994.jpg";s:7:"pic_ext";s:0:"";}', 'a:0:{}', 'add', '127.0.0.1', 1378794241),
(7, 2, 'wangcan', 3, '管理员', '64', '添加广告', 'a:12:{s:4:"name";s:9:"管理员";s:7:"ad_type";s:5:"image";s:8:"space_id";s:1:"1";s:3:"url";s:23:"http://passport.ci.com/";s:7:"url_ext";s:0:"";s:8:"add_time";s:0:"";s:10:"start_time";s:0:"";s:8:"end_time";s:0:"";s:9:"listorder";s:1:"8";s:9:"ad_status";s:1:"1";s:3:"pic";s:60:"http://upload.ci.com/passport2013/0910/20130910142445635.png";s:7:"pic_ext";s:0:"";}', 'a:0:{}', 'add', '127.0.0.1', 1378794294),
(8, 2, 'wangcan', 3, '管理员', '64', '添加广告', 'a:12:{s:4:"name";s:12:"幻灯广告";s:7:"ad_type";s:5:"image";s:8:"space_id";s:1:"1";s:3:"url";s:15:"http://abc.com/";s:7:"url_ext";s:0:"";s:8:"add_time";s:0:"";s:10:"start_time";s:0:"";s:8:"end_time";s:0:"";s:9:"listorder";s:1:"9";s:9:"ad_status";s:1:"1";s:3:"pic";s:60:"http://upload.ci.com/passport2013/0910/20130910142529332.jpg";s:7:"pic_ext";s:0:"";}', 'a:0:{}', 'add', '127.0.0.1', 1378794333),
(9, 2, 'wangcan', 3, '管理员', '118', '添加游戏', 'a:19:{s:4:"name";s:9:"赛尔号";s:4:"code";s:4:"seer";s:12:"webgame_type";s:1:"2";s:14:"webgame_status";s:1:"1";s:8:"url_home";s:19:"http://seer.ci.com/";s:10:"url_server";s:19:"http://seer.ci.com/";s:7:"url_bbs";s:18:"http://bbs.ci.com/";s:9:"listorder";s:1:"2";s:5:"ispay";s:1:"1";s:11:"description";s:93:"知金教育用自己强大的用户群体运营第三方的游戏赛尔号，强强联合！";s:9:"pic_small";s:60:"http://upload.ci.com/passport2013/0910/20130910143505676.jpg";s:10:"pic_middle";s:60:"http://upload.ci.com/passport2013/0910/20130910143545206.png";s:7:"pic_big";s:60:"http://upload.ci.com/passport2013/0910/20130910143551723.png";s:9:"coin_name";s:6:"金币";s:9:"coin_unit";s:3:"个";s:9:"coin_rate";s:2:"10";s:14:"start_maintain";i:0;s:12:"end_maintain";i:0;s:12:"url_maintain";s:0:"";}', 'a:0:{}', 'add', '127.0.0.1', 1378794992),
(10, 1, 'wangcanliang', 3, '管理员', '118', '添加游戏', 'a:19:{s:4:"name";s:9:"神仙道";s:4:"code";s:6:"shenxd";s:12:"webgame_type";s:1:"3";s:14:"webgame_status";s:1:"1";s:8:"url_home";s:21:"http://shenxd.ci.com/";s:10:"url_server";s:28:"http://shenxd.ci.com/server/";s:7:"url_bbs";s:18:"http://bbs.ci.com/";s:9:"listorder";s:1:"5";s:5:"ispay";s:1:"1";s:11:"description";s:0:"";s:9:"pic_small";s:60:"http://upload.ci.com/passport2013/0910/20130910143739823.jpg";s:10:"pic_middle";s:60:"http://upload.ci.com/passport2013/0910/20130910143746964.jpg";s:7:"pic_big";s:60:"http://upload.ci.com/passport2013/0910/20130910143751644.jpg";s:9:"coin_name";s:6:"水晶";s:9:"coin_unit";s:3:"个";s:9:"coin_rate";s:3:"100";s:14:"start_maintain";i:0;s:12:"end_maintain";i:0;s:12:"url_maintain";s:0:"";}', 'a:0:{}', 'add', '127.0.0.1', 1378795152),
(11, 2, 'wangcan', 3, '管理员', '123', '添加包月', 'a:5:{s:4:"name";s:12:"诺瓦包月";s:5:"money";s:2:"10";s:4:"unit";s:1:"2";s:5:"thumb";s:60:"http://upload.ci.com/passport2013/0910/20130910144500693.jpg";s:9:"listorder";s:1:"2";}', 'a:0:{}', 'add', '127.0.0.1', 1378795503),
(12, 2, 'wangcan', 3, '管理员', '123', '添加包月', 'a:5:{s:4:"name";s:12:"诺瓦包年";s:5:"money";s:2:"50";s:4:"unit";s:1:"1";s:5:"thumb";s:60:"http://upload.ci.com/passport2013/0910/20130910144532119.jpg";s:9:"listorder";s:1:"2";}', 'a:0:{}', 'add', '127.0.0.1', 1378795535),
(13, 2, 'wangcan', 3, '管理员', '113', '添加服务器', 'a:10:{s:4:"name";s:13:"神仙道1服";s:11:"server_mark";s:1:"3";s:12:"webgame_code";s:6:"shenxd";s:9:"listorder";s:1:"1";s:5:"ispay";s:1:"1";s:13:"server_status";s:1:"1";s:10:"time_start";s:0:"";s:14:"start_maintain";i:0;s:12:"end_maintain";i:0;s:12:"url_maintain";s:0:"";}', 'a:0:{}', 'add', '127.0.0.1', 1378810611),
(14, 2, 'wangcan', 3, '管理员', '99', '删除内容', 'a:18:{s:2:"id";s:1:"1";s:5:"catid";s:1:"7";s:5:"title";s:15:"方法gggggeeee";s:5:"thumb";s:1:"0";s:8:"keywords";s:1:"0";s:11:"description";s:0:"";s:3:"url";s:0:"";s:9:"listorder";s:1:"0";s:6:"status";s:1:"1";s:6:"islink";s:1:"0";s:8:"username";s:7:"wangcan";s:8:"copyfrom";s:0:"";s:7:"content";s:43:"<p>\r\n	发撒是打发士大夫eeeeeee</p>\r\n";s:8:"template";s:1:"0";s:9:"inputtime";s:10:"1378867286";s:10:"updatetime";s:10:"1378881419";s:4:"fbak";s:1:"0";s:9:"seo_title";s:0:"";}', 'a:0:{}', 'delete', '127.0.0.1', 1378884749),
(15, 2, 'wangcan', 3, '管理员', '131', '添加支付方式', 'a:7:{s:2:"id";b:0;s:4:"name";s:12:"诺币兑换";s:4:"code";s:6:"myself";s:5:"thumb";b:0;s:9:"listorder";s:0:"";s:4:"rate";s:0:"";s:14:"payment_status";s:1:"1";}', 'a:0:{}', 'add', '127.0.0.1', 1378899605),
(16, 2, 'wangcan', 3, '管理员', '123', '添加包月', 'a:6:{s:4:"name";s:12:"诺币兑换";s:5:"money";s:2:"10";s:4:"unit";s:1:"1";s:5:"thumb";s:60:"http://upload.ci.com/passport2013/0912/20130912172705850.png";s:9:"listorder";s:2:"66";s:12:"webgame_code";s:4:"nova";}', 'a:0:{}', 'add', '127.0.0.1', 1378978028),
(17, 2, 'wangcan', 3, '管理员', '125', '编辑包月', 'a:6:{s:4:"name";s:12:"诺币兑换";s:5:"money";s:2:"10";s:4:"unit";s:3:"年";s:5:"thumb";s:60:"http://upload.ci.com/passport2013/0912/20130912172705850.png";s:9:"listorder";s:2:"66";s:12:"webgame_code";s:4:"nova";}', 'a:7:{s:2:"id";s:1:"3";s:4:"name";s:12:"诺币兑换";s:12:"webgame_code";s:4:"nova";s:5:"money";s:2:"10";s:4:"unit";s:1:"1";s:5:"thumb";s:60:"http://upload.ci.com/passport2013/0912/20130912172705850.png";s:9:"listorder";s:2:"66";}', 'edit', '127.0.0.1', 1378978420),
(18, 2, 'wangcan', 3, '管理员', '125', '编辑包月', 'a:6:{s:4:"name";s:12:"诺瓦包年";s:5:"money";s:2:"50";s:4:"unit";s:3:"月";s:5:"thumb";s:60:"http://upload.ci.com/passport2013/0910/20130910144532119.jpg";s:9:"listorder";s:1:"2";s:12:"webgame_code";s:4:"seer";}', 'a:7:{s:2:"id";s:1:"2";s:4:"name";s:12:"诺瓦包年";s:12:"webgame_code";s:4:"seer";s:5:"money";s:2:"50";s:4:"unit";s:1:"1";s:5:"thumb";s:60:"http://upload.ci.com/passport2013/0910/20130910144532119.jpg";s:9:"listorder";s:1:"2";}', 'edit', '127.0.0.1', 1378978432),
(19, 2, 'wangcan', 3, '管理员', '125', '编辑包月', 'a:6:{s:4:"name";s:12:"诺币兑换";s:5:"money";s:2:"10";s:5:"month";s:1:"1";s:5:"thumb";s:60:"http://upload.ci.com/passport2013/0912/20130912172705850.png";s:9:"listorder";s:2:"66";s:12:"webgame_code";s:4:"nova";}', 'a:7:{s:2:"id";s:1:"3";s:4:"name";s:12:"诺币兑换";s:12:"webgame_code";s:4:"nova";s:5:"money";s:2:"10";s:5:"month";s:1:"0";s:5:"thumb";s:60:"http://upload.ci.com/passport2013/0912/20130912172705850.png";s:9:"listorder";s:2:"66";}', 'edit', '127.0.0.1', 1378980822),
(20, 2, 'wangcan', 3, '管理员', '125', '编辑包月', 'a:6:{s:4:"name";s:12:"诺瓦包月";s:5:"money";s:1:"5";s:5:"month";s:1:"2";s:5:"thumb";s:60:"http://upload.ci.com/passport2013/0910/20130910144500693.jpg";s:9:"listorder";s:1:"2";s:12:"webgame_code";s:4:"nova";}', 'a:7:{s:2:"id";s:1:"1";s:4:"name";s:12:"诺瓦包月";s:12:"webgame_code";s:0:"";s:5:"money";s:2:"10";s:5:"month";s:1:"2";s:5:"thumb";s:60:"http://upload.ci.com/passport2013/0910/20130910144500693.jpg";s:9:"listorder";s:1:"2";}', 'edit', '127.0.0.1', 1378980853),
(21, 2, 'wangcan', 3, '管理员', '92', '添加栏目', 'a:14:{s:7:"catname";s:12:"赛尔资讯";s:8:"parentid";s:1:"0";s:7:"modelid";s:1:"2";s:6:"catdir";s:4:"sezx";s:5:"image";s:0:"";s:11:"description";s:0:"";s:6:"ishtml";s:1:"1";s:8:"template";s:1:"0";s:10:"meta_title";s:0:"";s:13:"meta_keywords";s:0:"";s:16:"meta_description";s:0:"";s:9:"listorder";b:0;s:7:"urlrule";s:1:"0";s:11:"bind_domain";s:19:"http://seer.ci.com/";}', 'a:0:{}', 'add', '127.0.0.1', 1379312868),
(22, 2, 'wangcan', 3, '管理员', '94', '编辑栏目', 'a:14:{s:7:"catname";s:12:"赛尔资讯";s:8:"parentid";s:1:"0";s:7:"modelid";s:1:"2";s:6:"catdir";s:4:"sezx";s:5:"image";s:0:"";s:11:"description";s:0:"";s:6:"ishtml";s:1:"0";s:8:"template";s:1:"0";s:10:"meta_title";s:0:"";s:13:"meta_keywords";s:0:"";s:16:"meta_description";s:0:"";s:9:"listorder";b:0;s:7:"urlrule";s:1:"0";s:11:"bind_domain";s:19:"http://seer.ci.com/";}', 'a:17:{s:2:"id";s:2:"23";s:7:"catname";s:12:"赛尔资讯";s:6:"catdir";s:4:"sezx";s:9:"parentdir";s:0:"";s:5:"image";s:0:"";s:8:"parentid";s:1:"0";s:7:"modelid";s:1:"2";s:11:"bind_domain";s:19:"http://seer.ci.com/";s:3:"url";s:27:"http://webgame.ci.com/.html";s:9:"listorder";s:1:"0";s:11:"description";s:0:"";s:8:"template";s:1:"0";s:10:"meta_title";s:0:"";s:13:"meta_keywords";s:0:"";s:16:"meta_description";s:0:"";s:7:"urlrule";s:1:"0";s:6:"ishtml";s:1:"1";}', 'edit', '127.0.0.1', 1379312897),
(23, 2, 'wangcan', 3, '管理员', '92', '添加栏目', 'a:14:{s:7:"catname";s:12:"赛尔新闻";s:8:"parentid";s:2:"23";s:7:"modelid";s:1:"2";s:6:"catdir";s:4:"sexw";s:5:"image";s:0:"";s:11:"description";s:0:"";s:6:"ishtml";s:1:"1";s:8:"template";s:1:"0";s:10:"meta_title";s:0:"";s:13:"meta_keywords";s:0:"";s:16:"meta_description";s:0:"";s:9:"listorder";b:0;s:7:"urlrule";s:1:"0";s:11:"bind_domain";s:0:"";}', 'a:0:{}', 'add', '127.0.0.1', 1379313440),
(24, 2, 'wangcan', 3, '管理员', '94', '编辑栏目', 'a:14:{s:7:"catname";s:12:"赛尔资讯";s:8:"parentid";s:1:"0";s:7:"modelid";s:1:"2";s:6:"catdir";s:4:"sezx";s:5:"image";s:0:"";s:11:"description";s:0:"";s:6:"ishtml";s:1:"1";s:8:"template";s:1:"0";s:10:"meta_title";s:0:"";s:13:"meta_keywords";s:0:"";s:16:"meta_description";s:0:"";s:9:"listorder";b:0;s:7:"urlrule";s:1:"0";s:11:"bind_domain";s:19:"http://seer.ci.com/";}', 'a:17:{s:2:"id";s:2:"23";s:7:"catname";s:12:"赛尔资讯";s:6:"catdir";s:4:"sezx";s:9:"parentdir";s:0:"";s:5:"image";s:0:"";s:8:"parentid";s:1:"0";s:7:"modelid";s:1:"2";s:11:"bind_domain";s:19:"http://seer.ci.com/";s:3:"url";s:27:"http://webgame.ci.com/.html";s:9:"listorder";s:1:"0";s:11:"description";s:0:"";s:8:"template";s:1:"0";s:10:"meta_title";s:0:"";s:13:"meta_keywords";s:0:"";s:16:"meta_description";s:0:"";s:7:"urlrule";s:1:"0";s:6:"ishtml";s:1:"0";}', 'edit', '127.0.0.1', 1379313513),
(25, 2, 'wangcan', 3, '管理员', '94', '编辑栏目', 'a:14:{s:7:"catname";s:12:"赛尔新闻";s:8:"parentid";s:2:"23";s:7:"modelid";s:1:"2";s:6:"catdir";s:4:"sexw";s:5:"image";s:0:"";s:11:"description";s:0:"";s:6:"ishtml";s:1:"1";s:8:"template";s:1:"0";s:10:"meta_title";s:0:"";s:13:"meta_keywords";s:0:"";s:16:"meta_description";s:0:"";s:9:"listorder";b:0;s:7:"urlrule";s:1:"0";s:11:"bind_domain";s:0:"";}', 'a:16:{s:2:"id";s:2:"24";s:7:"catname";s:12:"赛尔新闻";s:6:"catdir";s:4:"sexw";s:5:"image";s:0:"";s:8:"parentid";s:2:"23";s:7:"modelid";s:1:"2";s:11:"bind_domain";s:0:"";s:3:"url";s:29:"http://seer.ci.com/sezx/.html";s:9:"listorder";s:1:"0";s:11:"description";s:0:"";s:8:"template";s:1:"0";s:10:"meta_title";s:0:"";s:13:"meta_keywords";s:0:"";s:16:"meta_description";s:0:"";s:7:"urlrule";s:1:"0";s:6:"ishtml";s:1:"1";}', 'edit', '127.0.0.1', 1379316849),
(26, 2, 'wangcan', 3, '管理员', '94', '编辑栏目', 'a:14:{s:7:"catname";s:4:"test";s:8:"parentid";s:2:"24";s:7:"modelid";s:1:"0";s:6:"catdir";s:3:"ttt";s:5:"image";s:0:"";s:11:"description";s:0:"";s:6:"ishtml";s:1:"1";s:8:"template";s:1:"0";s:10:"meta_title";s:0:"";s:13:"meta_keywords";s:0:"";s:16:"meta_description";s:0:"";s:9:"listorder";b:0;s:7:"urlrule";s:1:"0";s:11:"bind_domain";s:0:"";}', 'a:16:{s:2:"id";s:2:"26";s:7:"catname";s:4:"test";s:6:"catdir";s:3:"ttt";s:5:"image";s:0:"";s:8:"parentid";s:2:"24";s:7:"modelid";s:1:"0";s:11:"bind_domain";s:0:"";s:3:"url";s:0:"";s:9:"listorder";s:1:"0";s:11:"description";s:0:"";s:8:"template";s:1:"0";s:10:"meta_title";s:0:"";s:13:"meta_keywords";s:0:"";s:16:"meta_description";s:0:"";s:7:"urlrule";s:1:"0";s:6:"ishtml";s:1:"0";}', 'edit', '127.0.0.1', 1379316951),
(27, 2, 'wangcan', 3, '管理员', '94', '编辑栏目', 'a:14:{s:7:"catname";s:4:"test";s:8:"parentid";s:2:"24";s:7:"modelid";s:1:"0";s:6:"catdir";s:3:"ttt";s:5:"image";s:0:"";s:11:"description";s:0:"";s:6:"ishtml";s:1:"1";s:8:"template";s:1:"0";s:10:"meta_title";s:0:"";s:13:"meta_keywords";s:0:"";s:16:"meta_description";s:0:"";s:9:"listorder";b:0;s:7:"urlrule";s:1:"0";s:11:"bind_domain";s:0:"";}', 'a:16:{s:2:"id";s:2:"26";s:7:"catname";s:4:"test";s:6:"catdir";s:3:"ttt";s:5:"image";s:0:"";s:8:"parentid";s:2:"24";s:7:"modelid";s:1:"0";s:11:"bind_domain";s:0:"";s:3:"url";s:0:"";s:9:"listorder";s:1:"0";s:11:"description";s:0:"";s:8:"template";s:1:"0";s:10:"meta_title";s:0:"";s:13:"meta_keywords";s:0:"";s:16:"meta_description";s:0:"";s:7:"urlrule";s:1:"0";s:6:"ishtml";s:1:"1";}', 'edit', '127.0.0.1', 1379317007),
(28, 2, 'wangcan', 3, '管理员', '94', '编辑栏目', 'a:15:{s:7:"catname";s:4:"test";s:8:"parentid";s:2:"24";s:7:"modelid";s:1:"0";s:6:"catdir";s:3:"ttt";s:5:"image";s:0:"";s:11:"description";s:0:"";s:6:"ishtml";s:1:"1";s:8:"template";s:1:"0";s:10:"meta_title";s:0:"";s:13:"meta_keywords";s:0:"";s:16:"meta_description";s:0:"";s:9:"listorder";b:0;s:7:"urlrule";s:1:"0";s:11:"bind_domain";s:0:"";s:3:"url";N;}', 'a:16:{s:2:"id";s:2:"26";s:7:"catname";s:4:"test";s:6:"catdir";s:3:"ttt";s:5:"image";s:0:"";s:8:"parentid";s:2:"24";s:7:"modelid";s:1:"0";s:11:"bind_domain";s:0:"";s:3:"url";s:0:"";s:9:"listorder";s:1:"0";s:11:"description";s:0:"";s:8:"template";s:1:"0";s:10:"meta_title";s:0:"";s:13:"meta_keywords";s:0:"";s:16:"meta_description";s:0:"";s:7:"urlrule";s:1:"0";s:6:"ishtml";s:1:"1";}', 'edit', '127.0.0.1', 1379318093),
(29, 2, 'wangcan', 3, '管理员', '92', '添加栏目', 'a:15:{s:7:"catname";s:15:"神仙道资讯";s:8:"parentid";s:1:"0";s:7:"modelid";s:1:"2";s:6:"catdir";s:5:"sxdzx";s:5:"image";s:0:"";s:11:"description";s:0:"";s:6:"ishtml";s:1:"1";s:8:"template";s:1:"0";s:10:"meta_title";s:0:"";s:13:"meta_keywords";s:0:"";s:16:"meta_description";s:0:"";s:9:"listorder";b:0;s:7:"urlrule";s:1:"0";s:11:"bind_domain";s:0:"";s:3:"url";s:0:"";}', 'a:0:{}', 'add', '127.0.0.1', 1379318198),
(30, 2, 'wangcan', 3, '管理员', '92', '添加栏目', 'a:14:{s:7:"catname";s:7:"游戏2";s:8:"parentid";s:1:"0";s:7:"modelid";s:1:"2";s:6:"catdir";s:2:"yx";s:5:"image";s:0:"";s:11:"description";s:0:"";s:6:"ishtml";s:1:"1";s:8:"template";s:1:"0";s:10:"meta_title";s:0:"";s:13:"meta_keywords";s:0:"";s:16:"meta_description";s:0:"";s:9:"listorder";b:0;s:7:"urlrule";s:1:"0";s:11:"bind_domain";s:0:"";}', 'a:0:{}', 'add', '127.0.0.1', 1379318297),
(31, 2, 'wangcan', 3, '管理员', '92', '添加栏目', 'a:14:{s:7:"catname";s:7:"游戏3";s:8:"parentid";s:1:"0";s:7:"modelid";s:1:"2";s:6:"catdir";s:3:"rrr";s:5:"image";s:0:"";s:11:"description";s:0:"";s:6:"ishtml";s:1:"1";s:8:"template";s:1:"0";s:10:"meta_title";s:0:"";s:13:"meta_keywords";s:0:"";s:16:"meta_description";s:0:"";s:9:"listorder";b:0;s:7:"urlrule";s:1:"0";s:11:"bind_domain";s:17:"http://yx.ci.com/";}', 'a:0:{}', 'add', '127.0.0.1', 1379318378),
(32, 2, 'wangcan', 3, '管理员', '94', '编辑栏目', 'a:15:{s:7:"catname";s:7:"游戏3";s:8:"parentid";s:1:"0";s:7:"modelid";s:1:"2";s:6:"catdir";s:3:"rrr";s:5:"image";s:0:"";s:11:"description";s:0:"";s:6:"ishtml";s:1:"1";s:8:"template";s:1:"0";s:10:"meta_title";s:0:"";s:13:"meta_keywords";s:0:"";s:16:"meta_description";s:0:"";s:9:"listorder";b:0;s:7:"urlrule";s:1:"0";s:11:"bind_domain";s:17:"http://yx.ci.com/";s:3:"url";N;}', 'a:16:{s:2:"id";s:2:"29";s:7:"catname";s:7:"游戏3";s:6:"catdir";s:3:"rrr";s:5:"image";s:0:"";s:8:"parentid";s:1:"0";s:7:"modelid";s:1:"2";s:11:"bind_domain";s:17:"http://yx.ci.com/";s:3:"url";s:0:"";s:9:"listorder";s:1:"0";s:11:"description";s:0:"";s:8:"template";s:1:"0";s:10:"meta_title";s:0:"";s:13:"meta_keywords";s:0:"";s:16:"meta_description";s:0:"";s:7:"urlrule";s:1:"0";s:6:"ishtml";s:1:"1";}', 'edit', '127.0.0.1', 1379318426),
(33, 2, 'wangcan', 3, '管理员', '94', '编辑栏目', 'a:15:{s:7:"catname";s:7:"游戏3";s:8:"parentid";s:1:"0";s:7:"modelid";s:1:"2";s:6:"catdir";s:3:"rrr";s:5:"image";s:0:"";s:11:"description";s:0:"";s:6:"ishtml";s:1:"1";s:8:"template";s:1:"0";s:10:"meta_title";s:0:"";s:13:"meta_keywords";s:0:"";s:16:"meta_description";s:0:"";s:9:"listorder";b:0;s:7:"urlrule";s:1:"0";s:11:"bind_domain";s:17:"http://yx.ci.com/";s:3:"url";s:32:"http://webgame.ci.com/index.html";}', 'a:16:{s:2:"id";s:2:"29";s:7:"catname";s:7:"游戏3";s:6:"catdir";s:3:"rrr";s:5:"image";s:0:"";s:8:"parentid";s:1:"0";s:7:"modelid";s:1:"2";s:11:"bind_domain";s:17:"http://yx.ci.com/";s:3:"url";s:0:"";s:9:"listorder";s:1:"0";s:11:"description";s:0:"";s:8:"template";s:1:"0";s:10:"meta_title";s:0:"";s:13:"meta_keywords";s:0:"";s:16:"meta_description";s:0:"";s:7:"urlrule";s:1:"0";s:6:"ishtml";s:1:"1";}', 'edit', '127.0.0.1', 1379318484),
(34, 2, 'wangcan', 3, '管理员', '92', '添加栏目', 'a:14:{s:7:"catname";s:4:"test";s:8:"parentid";s:1:"0";s:7:"modelid";s:1:"2";s:6:"catdir";s:3:"ttt";s:5:"image";s:0:"";s:11:"description";s:0:"";s:6:"ishtml";b:0;s:8:"template";s:1:"0";s:10:"meta_title";s:0:"";s:13:"meta_keywords";s:0:"";s:16:"meta_description";s:0:"";s:9:"listorder";b:0;s:7:"urlrule";s:1:"0";s:11:"bind_domain";s:19:"http://nova.ci.com/";}', 'a:0:{}', 'add', '127.0.0.1', 1379318511),
(35, 2, 'wangcan', 3, '管理员', '94', '编辑栏目', 'a:15:{s:7:"catname";s:4:"test";s:8:"parentid";s:1:"0";s:7:"modelid";s:1:"2";s:6:"catdir";s:3:"ttt";s:5:"image";s:0:"";s:11:"description";s:0:"";s:6:"ishtml";s:1:"1";s:8:"template";s:1:"0";s:10:"meta_title";s:0:"";s:13:"meta_keywords";s:0:"";s:16:"meta_description";s:0:"";s:9:"listorder";b:0;s:7:"urlrule";s:1:"0";s:11:"bind_domain";s:19:"http://nova.ci.com/";s:3:"url";s:32:"http://webgame.ci.com/index.html";}', 'a:16:{s:2:"id";s:2:"30";s:7:"catname";s:4:"test";s:6:"catdir";s:3:"ttt";s:5:"image";s:0:"";s:8:"parentid";s:1:"0";s:7:"modelid";s:1:"2";s:11:"bind_domain";s:19:"http://nova.ci.com/";s:3:"url";s:45:"http://webgame.ci.com/index/category?catid=30";s:9:"listorder";s:1:"0";s:11:"description";s:0:"";s:8:"template";s:1:"0";s:10:"meta_title";s:0:"";s:13:"meta_keywords";s:0:"";s:16:"meta_description";s:0:"";s:7:"urlrule";s:1:"0";s:6:"ishtml";s:1:"0";}', 'edit', '127.0.0.1', 1379318532),
(36, 2, 'wangcan', 3, '管理员', '94', '编辑栏目', 'a:15:{s:7:"catname";s:4:"test";s:8:"parentid";s:1:"0";s:7:"modelid";s:1:"2";s:6:"catdir";s:3:"ttt";s:5:"image";s:0:"";s:11:"description";s:0:"";s:6:"ishtml";s:1:"1";s:8:"template";s:1:"0";s:10:"meta_title";s:0:"";s:13:"meta_keywords";s:0:"";s:16:"meta_description";s:0:"";s:9:"listorder";b:0;s:7:"urlrule";s:1:"0";s:11:"bind_domain";s:19:"http://nova.ci.com/";s:3:"url";s:29:"http://nova.ci.com/index.html";}', 'a:16:{s:2:"id";s:2:"30";s:7:"catname";s:4:"test";s:6:"catdir";s:3:"ttt";s:5:"image";s:0:"";s:8:"parentid";s:1:"0";s:7:"modelid";s:1:"2";s:11:"bind_domain";s:19:"http://nova.ci.com/";s:3:"url";s:32:"http://webgame.ci.com/index.html";s:9:"listorder";s:1:"0";s:11:"description";s:0:"";s:8:"template";s:1:"0";s:10:"meta_title";s:0:"";s:13:"meta_keywords";s:0:"";s:16:"meta_description";s:0:"";s:7:"urlrule";s:1:"0";s:6:"ishtml";s:1:"1";}', 'edit', '127.0.0.1', 1379318614),
(37, 2, 'wangcan', 3, '管理员', '92', '添加栏目', 'a:14:{s:7:"catname";s:3:"fff";s:8:"parentid";s:2:"25";s:7:"modelid";s:1:"2";s:6:"catdir";s:5:"aaaaa";s:5:"image";s:0:"";s:11:"description";s:0:"";s:6:"ishtml";s:1:"1";s:8:"template";s:1:"0";s:10:"meta_title";s:0:"";s:13:"meta_keywords";s:0:"";s:16:"meta_description";s:0:"";s:9:"listorder";b:0;s:7:"urlrule";s:1:"0";s:11:"bind_domain";s:0:"";}', 'a:0:{}', 'add', '127.0.0.1', 1379319788),
(38, 2, 'wangcan', 3, '管理员', '94', '编辑栏目', 'a:15:{s:7:"catname";s:3:"fff";s:8:"parentid";s:2:"25";s:7:"modelid";s:1:"2";s:6:"catdir";s:5:"aaaaa";s:5:"image";s:0:"";s:11:"description";s:0:"";s:6:"ishtml";s:1:"0";s:8:"template";s:1:"0";s:10:"meta_title";s:0:"";s:13:"meta_keywords";s:0:"";s:16:"meta_description";s:0:"";s:9:"listorder";b:0;s:7:"urlrule";s:1:"0";s:11:"bind_domain";s:0:"";s:3:"url";s:34:"http://seer.ci.com/category?catid=";}', 'a:16:{s:2:"id";s:2:"31";s:7:"catname";s:3:"fff";s:6:"catdir";s:5:"aaaaa";s:5:"image";s:0:"";s:8:"parentid";s:2:"25";s:7:"modelid";s:1:"2";s:11:"bind_domain";s:0:"";s:3:"url";s:43:"http://seer.ci.com/sezx/sexw/rrr/index.html";s:9:"listorder";s:1:"0";s:11:"description";s:0:"";s:8:"template";s:1:"0";s:10:"meta_title";s:0:"";s:13:"meta_keywords";s:0:"";s:16:"meta_description";s:0:"";s:7:"urlrule";s:1:"0";s:6:"ishtml";s:1:"1";}', 'edit', '127.0.0.1', 1379320067),
(39, 2, 'wangcan', 3, '管理员', '94', '编辑栏目', 'a:15:{s:7:"catname";s:3:"fff";s:8:"parentid";s:2:"25";s:7:"modelid";s:1:"2";s:6:"catdir";s:5:"aaaaa";s:5:"image";s:0:"";s:11:"description";s:0:"";s:6:"ishtml";s:1:"0";s:8:"template";s:1:"0";s:10:"meta_title";s:0:"";s:13:"meta_keywords";s:0:"";s:16:"meta_description";s:0:"";s:9:"listorder";b:0;s:7:"urlrule";s:1:"0";s:11:"bind_domain";s:0:"";s:3:"url";s:34:"http://seer.ci.com/category?catid=";}', 'a:16:{s:2:"id";s:2:"31";s:7:"catname";s:3:"fff";s:6:"catdir";s:5:"aaaaa";s:5:"image";s:0:"";s:8:"parentid";s:2:"25";s:7:"modelid";s:1:"2";s:11:"bind_domain";s:0:"";s:3:"url";s:34:"http://seer.ci.com/category?catid=";s:9:"listorder";s:1:"0";s:11:"description";s:0:"";s:8:"template";s:1:"0";s:10:"meta_title";s:0:"";s:13:"meta_keywords";s:0:"";s:16:"meta_description";s:0:"";s:7:"urlrule";s:1:"0";s:6:"ishtml";s:1:"0";}', 'edit', '127.0.0.1', 1379320181),
(40, 2, 'wangcan', 3, '管理员', '94', '编辑栏目', 'a:15:{s:7:"catname";s:4:"test";s:8:"parentid";s:1:"0";s:7:"modelid";s:1:"2";s:6:"catdir";s:3:"ttt";s:5:"image";s:0:"";s:11:"description";s:0:"";s:6:"ishtml";s:1:"0";s:8:"template";s:1:"0";s:10:"meta_title";s:0:"";s:13:"meta_keywords";s:0:"";s:16:"meta_description";s:0:"";s:9:"listorder";b:0;s:7:"urlrule";s:1:"0";s:11:"bind_domain";s:19:"http://nova.ci.com/";s:3:"url";s:34:"http://nova.ci.com/category?catid=";}', 'a:16:{s:2:"id";s:2:"30";s:7:"catname";s:4:"test";s:6:"catdir";s:3:"ttt";s:5:"image";s:0:"";s:8:"parentid";s:1:"0";s:7:"modelid";s:1:"2";s:11:"bind_domain";s:19:"http://nova.ci.com/";s:3:"url";s:29:"http://nova.ci.com/index.html";s:9:"listorder";s:1:"0";s:11:"description";s:0:"";s:8:"template";s:1:"0";s:10:"meta_title";s:0:"";s:13:"meta_keywords";s:0:"";s:16:"meta_description";s:0:"";s:7:"urlrule";s:1:"0";s:6:"ishtml";s:1:"1";}', 'edit', '127.0.0.1', 1379320203),
(41, 2, 'wangcan', 3, '管理员', '94', '编辑栏目', 'a:15:{s:7:"catname";s:4:"test";s:8:"parentid";s:1:"0";s:7:"modelid";s:1:"2";s:6:"catdir";s:3:"ttt";s:5:"image";s:0:"";s:11:"description";s:0:"";s:6:"ishtml";s:1:"0";s:8:"template";s:1:"0";s:10:"meta_title";s:0:"";s:13:"meta_keywords";s:0:"";s:16:"meta_description";s:0:"";s:9:"listorder";b:0;s:7:"urlrule";s:1:"0";s:11:"bind_domain";s:19:"http://nova.ci.com/";s:3:"url";s:36:"http://nova.ci.com/category?catid=30";}', 'a:16:{s:2:"id";s:2:"30";s:7:"catname";s:4:"test";s:6:"catdir";s:3:"ttt";s:5:"image";s:0:"";s:8:"parentid";s:1:"0";s:7:"modelid";s:1:"2";s:11:"bind_domain";s:19:"http://nova.ci.com/";s:3:"url";s:34:"http://nova.ci.com/category?catid=";s:9:"listorder";s:1:"0";s:11:"description";s:0:"";s:8:"template";s:1:"0";s:10:"meta_title";s:0:"";s:13:"meta_keywords";s:0:"";s:16:"meta_description";s:0:"";s:7:"urlrule";s:1:"0";s:6:"ishtml";s:1:"0";}', 'edit', '127.0.0.1', 1379320226),
(42, 2, 'wangcan', 3, '管理员', '94', '编辑栏目', 'a:15:{s:7:"catname";s:3:"fff";s:8:"parentid";s:2:"25";s:7:"modelid";s:1:"2";s:6:"catdir";s:5:"aaaaa";s:5:"image";s:0:"";s:11:"description";s:0:"";s:6:"ishtml";s:1:"0";s:8:"template";s:1:"0";s:10:"meta_title";s:0:"";s:13:"meta_keywords";s:0:"";s:16:"meta_description";s:0:"";s:9:"listorder";b:0;s:7:"urlrule";s:1:"0";s:11:"bind_domain";s:0:"";s:3:"url";s:36:"http://seer.ci.com/category?catid=31";}', 'a:16:{s:2:"id";s:2:"31";s:7:"catname";s:3:"fff";s:6:"catdir";s:5:"aaaaa";s:5:"image";s:0:"";s:8:"parentid";s:2:"25";s:7:"modelid";s:1:"2";s:11:"bind_domain";s:0:"";s:3:"url";s:34:"http://seer.ci.com/category?catid=";s:9:"listorder";s:1:"0";s:11:"description";s:0:"";s:8:"template";s:1:"0";s:10:"meta_title";s:0:"";s:13:"meta_keywords";s:0:"";s:16:"meta_description";s:0:"";s:7:"urlrule";s:1:"0";s:6:"ishtml";s:1:"0";}', 'edit', '127.0.0.1', 1379320245),
(43, 2, 'wangcan', 3, '管理员', '12', '修改个人信息', 'a:4:{s:8:"truename";s:4:"wang";s:5:"email";s:12:"eee@test.com";s:8:"username";s:7:"wangcan";s:10:"createtime";i:1379387533;}', 'a:14:{s:2:"id";s:1:"2";s:8:"username";s:7:"wangcan";s:8:"truename";s:4:"wang";s:8:"password";s:32:"3b7bdee72acc991e195b29abf6ee2471";s:6:"roleid";s:1:"3";s:5:"email";s:12:"eee@test.com";s:7:"encrypt";s:6:"SEQ7TW";s:10:"createtime";s:10:"1378707398";s:8:"loginnum";s:2:"14";s:6:"lastip";s:9:"127.0.0.1";s:8:"lasttime";s:10:"1379387509";s:6:"islock";s:1:"1";s:11:"handpay_key";s:0:"";s:10:"handpay_en";s:0:"";}', 'edit', '127.0.0.1', 1379387533),
(44, 2, 'wangcan', 3, '管理员', '12', '修改个人信息', 'a:4:{s:8:"truename";s:4:"wang";s:5:"email";s:12:"eee@test.com";s:8:"username";s:7:"wangcan";s:10:"createtime";i:1379387601;}', 'a:14:{s:2:"id";s:1:"2";s:8:"username";s:7:"wangcan";s:8:"truename";s:4:"wang";s:8:"password";s:32:"3b7bdee72acc991e195b29abf6ee2471";s:6:"roleid";s:1:"3";s:5:"email";s:12:"eee@test.com";s:7:"encrypt";s:6:"SEQ7TW";s:10:"createtime";s:10:"1379387533";s:8:"loginnum";s:2:"14";s:6:"lastip";s:9:"127.0.0.1";s:8:"lasttime";s:10:"1379387509";s:6:"islock";s:1:"1";s:11:"handpay_key";s:0:"";s:10:"handpay_en";s:0:"";}', 'edit', '127.0.0.1', 1379387601),
(45, 2, 'wangcan', 3, '管理员', '12', '修改个人信息', 'a:4:{s:8:"truename";s:4:"wang";s:5:"email";s:12:"eee@test.com";s:8:"username";s:7:"wangcan";s:10:"createtime";i:1379387666;}', 'a:14:{s:2:"id";s:1:"2";s:8:"username";s:7:"wangcan";s:8:"truename";s:4:"wang";s:8:"password";s:32:"3b7bdee72acc991e195b29abf6ee2471";s:6:"roleid";s:1:"3";s:5:"email";s:12:"eee@test.com";s:7:"encrypt";s:6:"SEQ7TW";s:10:"createtime";s:10:"1379387601";s:8:"loginnum";s:2:"14";s:6:"lastip";s:9:"127.0.0.1";s:8:"lasttime";s:10:"1379387509";s:6:"islock";s:1:"1";s:11:"handpay_key";s:0:"";s:10:"handpay_en";s:0:"";}', 'edit', '127.0.0.1', 1379387666),
(46, 2, 'wangcan', 3, '管理员', '12', '修改个人信息', 'a:4:{s:8:"truename";s:4:"wang";s:5:"email";s:12:"eee@test.com";s:8:"username";s:7:"wangcan";s:10:"createtime";i:1379387693;}', 'a:14:{s:2:"id";s:1:"2";s:8:"username";s:7:"wangcan";s:8:"truename";s:4:"wang";s:8:"password";s:32:"3b7bdee72acc991e195b29abf6ee2471";s:6:"roleid";s:1:"3";s:5:"email";s:12:"eee@test.com";s:7:"encrypt";s:6:"SEQ7TW";s:10:"createtime";s:10:"1379387666";s:8:"loginnum";s:2:"14";s:6:"lastip";s:9:"127.0.0.1";s:8:"lasttime";s:10:"1379387509";s:6:"islock";s:1:"1";s:11:"handpay_key";s:0:"";s:10:"handpay_en";s:0:"";}', 'edit', '127.0.0.1', 1379387693),
(47, 2, 'wangcan', 3, '管理员', '12', '修改个人信息', 'a:4:{s:8:"truename";s:4:"wang";s:5:"email";s:12:"eee@test.com";s:8:"username";N;s:10:"createtime";i:1379387785;}', 'a:14:{s:2:"id";s:1:"2";s:8:"username";s:7:"wangcan";s:8:"truename";s:4:"wang";s:8:"password";s:32:"3b7bdee72acc991e195b29abf6ee2471";s:6:"roleid";s:1:"3";s:5:"email";s:12:"eee@test.com";s:7:"encrypt";s:6:"SEQ7TW";s:10:"createtime";s:10:"1379387693";s:8:"loginnum";s:2:"14";s:6:"lastip";s:9:"127.0.0.1";s:8:"lasttime";s:10:"1379387509";s:6:"islock";s:1:"1";s:11:"handpay_key";s:0:"";s:10:"handpay_en";s:0:"";}', 'edit', '127.0.0.1', 1379387785),
(48, 2, 'wangcan', 3, '管理员', '12', '修改个人信息', 'a:4:{s:8:"truename";s:4:"wang";s:5:"email";s:12:"eee@test.com";s:8:"username";N;s:10:"createtime";i:1379388042;}', 'a:14:{s:2:"id";s:1:"2";s:8:"username";s:7:"wangcan";s:8:"truename";s:4:"wang";s:8:"password";s:32:"04ffd28d0a85e2050db77cbeeaa7d8ac";s:6:"roleid";s:1:"3";s:5:"email";s:12:"eee@test.com";s:7:"encrypt";s:6:"l9rIUD";s:10:"createtime";s:10:"1379387785";s:8:"loginnum";s:2:"15";s:6:"lastip";s:9:"127.0.0.1";s:8:"lasttime";s:10:"1379388032";s:6:"islock";s:1:"1";s:11:"handpay_key";s:0:"";s:10:"handpay_en";s:0:"";}', 'edit', '127.0.0.1', 1379388042),
(49, 2, 'wangcan', 3, '管理员', '12', '修改个人信息', 'a:4:{s:8:"truename";s:4:"wang";s:5:"email";s:12:"eee@test.com";s:8:"username";s:7:"wangcan";s:10:"createtime";s:10:"1379388042";}', 'a:14:{s:2:"id";s:1:"2";s:8:"username";s:7:"wangcan";s:8:"truename";s:4:"wang";s:8:"password";s:32:"04ffd28d0a85e2050db77cbeeaa7d8ac";s:6:"roleid";s:1:"3";s:5:"email";s:12:"eee@test.com";s:7:"encrypt";s:6:"l9rIUD";s:10:"createtime";s:10:"1379388042";s:8:"loginnum";s:2:"16";s:6:"lastip";s:9:"127.0.0.1";s:8:"lasttime";s:10:"1379388103";s:6:"islock";s:1:"1";s:11:"handpay_key";s:0:"";s:10:"handpay_en";s:0:"";}', 'edit', '127.0.0.1', 1379388829),
(50, 2, 'wangcan', 3, '管理员', '12', '修改个人信息', 'a:4:{s:8:"truename";s:4:"wang";s:5:"email";s:12:"eee@test.com";s:8:"username";s:7:"wangcan";s:10:"createtime";s:10:"1379388042";}', 'a:14:{s:2:"id";s:1:"2";s:8:"username";s:7:"wangcan";s:8:"truename";s:4:"wang";s:8:"password";s:32:"04ffd28d0a85e2050db77cbeeaa7d8ac";s:6:"roleid";s:1:"3";s:5:"email";s:12:"eee@test.com";s:7:"encrypt";s:6:"l9rIUD";s:10:"createtime";s:10:"1379388042";s:8:"loginnum";s:2:"16";s:6:"lastip";s:9:"127.0.0.1";s:8:"lasttime";s:10:"1379388103";s:6:"islock";s:1:"1";s:11:"handpay_key";s:0:"";s:10:"handpay_en";s:0:"";}', 'edit', '127.0.0.1', 1379388834),
(51, 2, 'wangcan', 3, '管理员', '12', '修改个人信息', 'a:4:{s:8:"truename";s:4:"wang";s:5:"email";s:12:"eee@test.com";s:8:"username";s:7:"wangcan";s:10:"createtime";s:10:"1379388042";}', 'a:14:{s:2:"id";s:1:"2";s:8:"username";s:7:"wangcan";s:8:"truename";s:4:"wang";s:8:"password";s:32:"04ffd28d0a85e2050db77cbeeaa7d8ac";s:6:"roleid";s:1:"3";s:5:"email";s:12:"eee@test.com";s:7:"encrypt";s:6:"l9rIUD";s:10:"createtime";s:10:"1379388042";s:8:"loginnum";s:2:"16";s:6:"lastip";s:9:"127.0.0.1";s:8:"lasttime";s:10:"1379388103";s:6:"islock";s:1:"1";s:11:"handpay_key";s:0:"";s:10:"handpay_en";s:0:"";}', 'edit', '127.0.0.1', 1379388841),
(52, 2, 'wangcan', 3, '管理员', '13', '修改密码', 'a:4:{s:8:"username";s:7:"wangcan";s:10:"createtime";s:10:"1379388042";s:8:"password";s:32:"836fe0cba3643f11490a82b76059a77c";s:7:"encrypt";s:6:"hFeG78";}', 'a:14:{s:2:"id";s:1:"2";s:8:"username";s:7:"wangcan";s:8:"truename";s:4:"wang";s:8:"password";s:32:"04ffd28d0a85e2050db77cbeeaa7d8ac";s:6:"roleid";s:1:"3";s:5:"email";s:12:"eee@test.com";s:7:"encrypt";s:6:"l9rIUD";s:10:"createtime";s:10:"1379388042";s:8:"loginnum";s:2:"16";s:6:"lastip";s:9:"127.0.0.1";s:8:"lasttime";s:10:"1379388103";s:6:"islock";s:1:"1";s:11:"handpay_key";s:0:"";s:10:"handpay_en";s:0:"";}', 'edit', '127.0.0.1', 1379388855),
(53, 2, 'wangcan', 3, '管理员', '13', '修改密码', 'a:4:{s:8:"username";s:7:"wangcan";s:10:"createtime";s:10:"1379388042";s:8:"password";s:32:"1c372b4a2049607135a717ead97deb55";s:7:"encrypt";s:6:"npmahP";}', 'a:14:{s:2:"id";s:1:"2";s:8:"username";s:7:"wangcan";s:8:"truename";s:4:"wang";s:8:"password";s:32:"836fe0cba3643f11490a82b76059a77c";s:6:"roleid";s:1:"3";s:5:"email";s:12:"eee@test.com";s:7:"encrypt";s:6:"hFeG78";s:10:"createtime";s:10:"1379388042";s:8:"loginnum";s:2:"17";s:6:"lastip";s:9:"127.0.0.1";s:8:"lasttime";s:10:"1379388891";s:6:"islock";s:1:"1";s:11:"handpay_key";s:0:"";s:10:"handpay_en";s:0:"";}', 'edit', '127.0.0.1', 1379389144),
(54, 2, 'wangcan', 3, '管理员', '32', '编辑', 'a:8:{s:4:"name";s:13:"测试站点2";s:8:"parentid";s:1:"0";s:8:"app_code";s:6:"tbshop";s:10:"controller";s:0:"";s:6:"method";s:0:"";s:8:"extparam";s:0:"";s:9:"listorder";b:0;s:7:"display";s:1:"1";}', 'a:10:{s:2:"id";s:1:"9";s:4:"name";s:13:"测试站点2";s:8:"parentid";s:1:"0";s:8:"app_code";s:6:"tbshop";s:10:"controller";s:0:"";s:6:"method";s:0:"";s:8:"extparam";s:0:"";s:9:"listorder";s:1:"9";s:5:"islog";s:1:"0";s:7:"display";s:1:"1";}', 'edit', '127.0.0.1', 1379396095),
(55, 2, 'wangcan', 3, '管理员', '61', '编辑版位', 'a:6:{s:4:"name";s:12:"幻灯广告";s:4:"type";b:0;s:5:"width";s:1:"0";s:6:"height";s:1:"0";s:11:"description";s:0:"";s:6:"status";s:1:"1";}', 'a:7:{s:2:"id";s:1:"1";s:4:"name";s:12:"幻灯广告";s:4:"type";s:6:"fixure";s:5:"width";s:1:"0";s:6:"height";s:1:"0";s:11:"description";s:0:"";s:6:"status";s:1:"1";}', 'edit', '127.0.0.1', 1379396479),
(56, 2, 'wangcan', 3, '管理员', '66', '编辑广告', 'a:12:{s:4:"name";s:12:"幻灯广告";s:4:"type";b:0;s:8:"space_id";b:0;s:3:"url";s:15:"http://abc.com/";s:7:"url_ext";s:0:"";s:8:"add_time";s:0:"";s:10:"start_time";s:0:"";s:8:"end_time";s:0:"";s:9:"listorder";s:1:"9";s:6:"status";s:1:"1";s:3:"pic";s:60:"http://upload.ci.com/passport2013/0910/20130910142529332.jpg";s:7:"pic_ext";s:0:"";}', 'a:13:{s:2:"id";s:1:"5";s:4:"name";s:12:"幻灯广告";s:8:"space_id";s:1:"1";s:4:"type";s:5:"image";s:10:"start_time";s:1:"0";s:8:"end_time";s:1:"0";s:8:"add_time";s:1:"0";s:9:"listorder";s:1:"9";s:6:"status";s:1:"1";s:3:"url";s:15:"http://abc.com/";s:7:"url_ext";s:0:"";s:3:"pic";s:60:"http://upload.ci.com/passport2013/0910/20130910142529332.jpg";s:7:"pic_ext";s:0:"";}', 'edit', '127.0.0.1', 1379396485),
(57, 2, 'wangcan', 3, '管理员', '69', '添加友链', 'a:8:{s:4:"name";s:7:"友链1";s:4:"type";s:4:"nova";s:3:"url";s:21:"http://www.baidu.com/";s:4:"logo";s:0:"";s:9:"listorder";s:0:"";s:8:"add_time";i:1379396460;s:11:"description";s:0:"";s:6:"status";s:1:"1";}', 'a:0:{}', 'add', '127.0.0.1', 1379396520),
(58, 1, 'wangcanliang', 1, '超级管理员', '116', '编辑游戏', 'a:19:{s:4:"name";s:9:"赛尔号";s:4:"code";s:4:"seer";s:4:"type";s:1:"2";s:6:"status";s:1:"1";s:8:"url_home";s:19:"http://seer.ci.com/";s:10:"url_server";s:19:"http://seer.ci.com/";s:7:"url_bbs";s:18:"http://bbs.ci.com/";s:9:"listorder";s:1:"2";s:5:"ispay";s:1:"1";s:11:"description";s:93:"知金教育用自己强大的用户群体运营第三方的游戏赛尔号，强强联合！";s:9:"pic_small";s:60:"http://upload.ci.com/passport2013/0910/20130910143505676.jpg";s:10:"pic_middle";s:60:"http://upload.ci.com/passport2013/0910/20130910143545206.png";s:7:"pic_big";s:60:"http://upload.ci.com/passport2013/0910/20130910143551723.png";s:9:"coin_name";s:6:"金币";s:9:"coin_unit";s:3:"个";s:9:"coin_rate";s:2:"10";s:14:"start_maintain";i:0;s:12:"end_maintain";i:0;s:12:"url_maintain";s:0:"";}', 'a:21:{s:2:"id";s:1:"2";s:4:"code";s:4:"seer";s:4:"name";s:9:"赛尔号";s:11:"description";s:93:"知金教育用自己强大的用户群体运营第三方的游戏赛尔号，强强联合！";s:5:"brief";N;s:9:"pic_small";s:60:"http://upload.ci.com/passport2013/0910/20130910143505676.jpg";s:10:"pic_middle";s:60:"http://upload.ci.com/passport2013/0910/20130910143545206.png";s:7:"pic_big";s:60:"http://upload.ci.com/passport2013/0910/20130910143551723.png";s:8:"url_home";s:19:"http://seer.ci.com/";s:10:"url_server";s:19:"http://seer.ci.com/";s:7:"url_bbs";s:18:"http://bbs.ci.com/";s:9:"coin_name";s:6:"金币";s:9:"coin_unit";s:3:"个";s:9:"coin_rate";s:2:"10";s:9:"listorder";s:1:"2";s:5:"ispay";s:1:"1";s:4:"type";s:1:"2";s:6:"status";s:1:"1";s:12:"url_maintain";s:0:"";s:14:"start_maintain";s:1:"0";s:12:"end_maintain";s:1:"0";}', 'edit', '127.0.0.1', 1379397746),
(59, 1, 'wangcanliang', 1, '超级管理员', '111', '编辑服务器', 'a:10:{s:4:"name";s:13:"神仙道1服";s:11:"server_mark";s:1:"3";s:12:"webgame_code";s:6:"shenxd";s:9:"listorder";s:1:"1";s:5:"ispay";s:1:"1";s:6:"status";s:1:"1";s:10:"time_start";s:0:"";s:14:"start_maintain";i:0;s:12:"end_maintain";i:0;s:12:"url_maintain";s:0:"";}', 'a:11:{s:2:"id";s:1:"1";s:12:"webgame_code";s:6:"shenxd";s:4:"name";s:13:"神仙道1服";s:9:"listorder";s:1:"1";s:5:"ispay";s:1:"1";s:6:"status";s:1:"1";s:10:"time_start";s:1:"0";s:11:"server_mark";s:1:"3";s:14:"start_maintain";s:1:"0";s:12:"end_maintain";s:1:"0";s:12:"url_maintain";s:0:"";}', 'edit', '127.0.0.1', 1379397751),
(60, 2, 'wangcan', 3, '管理员', '13', '修改密码', 'a:4:{s:8:"username";s:7:"wangcan";s:10:"createtime";s:10:"1379388042";s:8:"password";s:32:"29508d34d7437cdfde48f5b4a9b668c8";s:7:"encrypt";s:6:"hkKv5M";}', 'a:14:{s:2:"id";s:1:"2";s:8:"username";s:7:"wangcan";s:8:"truename";s:4:"wang";s:8:"password";s:32:"1c372b4a2049607135a717ead97deb55";s:6:"roleid";s:1:"3";s:5:"email";s:12:"eee@test.com";s:7:"encrypt";s:6:"npmahP";s:10:"createtime";s:10:"1379388042";s:8:"loginnum";s:2:"19";s:6:"lastip";s:9:"127.0.0.1";s:8:"lasttime";s:10:"1379398458";s:6:"islock";s:1:"1";s:11:"handpay_key";s:0:"";s:10:"handpay_en";s:0:"";}', 'edit', '127.0.0.1', 1379398477),
(61, 2, 'wangcan', 3, '管理员', '125', '编辑包月', 'a:3:{i:1;s:1:"2";i:2;s:1:"2";i:3;s:2:"66";}', 'a:0:{}', 'listorder', '127.0.0.1', 1379398810),
(62, 2, 'wangcan', 3, '管理员', '125', '编辑包月', 'a:3:{i:1;s:1:"2";i:2;s:2:"23";i:3;s:2:"66";}', 'a:0:{}', 'listorder', '127.0.0.1', 1379398815),
(63, 2, 'wangcan', 3, '管理员', '125', '编辑包月', 'a:6:{s:4:"name";s:12:"诺瓦包月";s:5:"money";s:1:"5";s:5:"month";s:1:"2";s:5:"thumb";s:60:"http://upload.ci.com/passport2013/0910/20130910144500693.jpg";s:9:"listorder";s:3:"233";s:12:"webgame_code";s:4:"nova";}', 'a:7:{s:2:"id";s:1:"1";s:4:"name";s:12:"诺瓦包月";s:12:"webgame_code";s:4:"nova";s:5:"money";s:1:"5";s:5:"month";s:1:"2";s:5:"thumb";s:60:"http://upload.ci.com/passport2013/0910/20130910144500693.jpg";s:9:"listorder";s:1:"2";}', 'edit', '127.0.0.1', 1379398822),
(64, 2, 'wangcan', 3, '管理员', '125', '编辑包月', 'a:6:{s:4:"name";s:12:"诺币兑换";s:5:"money";s:2:"10";s:5:"month";s:1:"1";s:5:"thumb";s:60:"http://upload.ci.com/passport2013/0912/20130912172705850.png";s:9:"listorder";s:2:"66";s:12:"webgame_code";s:4:"nova";}', 'a:7:{s:2:"id";s:1:"3";s:4:"name";s:12:"诺币兑换";s:12:"webgame_code";s:4:"nova";s:5:"money";s:2:"10";s:5:"month";s:1:"1";s:5:"thumb";s:60:"http://upload.ci.com/passport2013/0912/20130912172705850.png";s:9:"listorder";s:2:"66";}', 'edit', '127.0.0.1', 1379398836),
(65, 2, 'wangcan', 3, '管理员', '129', '编辑支付方式', 'a:5:{i:1;s:3:"100";i:2;s:2:"99";i:8;s:2:"97";i:14;s:1:"0";i:20;s:1:"0";}', 'a:0:{}', 'listorder', '127.0.0.1', 1379399341),
(66, 2, 'wangcan', 3, '管理员', '129', '编辑支付方式', 'a:5:{i:1;s:3:"100";i:2;s:2:"99";i:8;s:2:"97";i:14;s:2:"10";i:20;s:1:"0";}', 'a:0:{}', 'listorder', '127.0.0.1', 1379399348),
(67, 2, 'wangcan', 3, '管理员', '129', '编辑支付方式', 'a:5:{i:1;s:3:"100";i:2;s:1:"8";i:8;s:2:"97";i:14;s:2:"10";i:20;s:1:"0";}', 'a:0:{}', 'listorder', '127.0.0.1', 1379399355),
(68, 2, 'wangcan', 3, '管理员', '129', '编辑支付方式', 'a:7:{s:2:"id";b:0;s:4:"name";s:9:"电信卡";s:4:"code";b:0;s:5:"thumb";b:0;s:9:"listorder";s:2:"10";s:4:"rate";s:4:"0.04";s:6:"status";s:1:"1";}', 'a:8:{s:2:"id";s:2:"14";s:4:"code";s:9:"ybtelecom";s:4:"name";s:9:"电信卡";s:11:"description";s:25:"电信卡<br />\n电信卡";s:5:"thumb";s:0:"";s:9:"listorder";s:2:"10";s:4:"rate";s:4:"0.04";s:6:"status";s:1:"1";}', 'edit', '127.0.0.1', 1379399479),
(69, 2, 'wangcan', 3, '管理员', '129', '编辑支付方式', 'a:5:{s:4:"name";s:9:"电信卡";s:5:"thumb";b:0;s:9:"listorder";s:2:"10";s:4:"rate";s:4:"0.04";s:6:"status";s:1:"1";}', 'a:8:{s:2:"id";s:1:"4";s:4:"code";s:6:"ybtele";s:4:"name";s:9:"电信卡";s:11:"description";s:25:"电信卡<br />\n电信卡";s:5:"thumb";s:1:"0";s:9:"listorder";s:2:"10";s:4:"rate";s:4:"0.04";s:6:"status";s:1:"1";}', 'edit', '127.0.0.1', 1379399725),
(70, 2, 'wangcan', 3, '管理员', '129', '编辑支付方式', 'a:5:{s:4:"name";s:9:"电信卡";s:5:"thumb";b:0;s:9:"listorder";s:2:"10";s:4:"rate";s:4:"0.04";s:6:"status";s:1:"1";}', 'a:8:{s:2:"id";s:1:"4";s:4:"code";s:6:"ybtele";s:4:"name";s:9:"电信卡";s:11:"description";s:25:"电信卡<br />\n电信卡";s:5:"thumb";s:1:"0";s:9:"listorder";s:2:"10";s:4:"rate";s:4:"0.04";s:6:"status";s:1:"1";}', 'edit', '127.0.0.1', 1379399733),
(71, 2, 'wangcan', 3, '管理员', '129', '编辑支付方式', 'a:6:{s:4:"name";s:9:"电信卡";s:4:"code";s:6:"ybtele";s:5:"thumb";b:0;s:9:"listorder";s:2:"10";s:4:"rate";s:4:"0.04";s:6:"status";s:1:"1";}', 'a:8:{s:2:"id";s:1:"4";s:4:"code";s:6:"ybtele";s:4:"name";s:9:"电信卡";s:11:"description";s:25:"电信卡<br />\n电信卡";s:5:"thumb";s:1:"0";s:9:"listorder";s:2:"10";s:4:"rate";s:4:"0.04";s:6:"status";s:1:"1";}', 'edit', '127.0.0.1', 1379399853);

-- --------------------------------------------------------

--
-- 表的结构 `sp_admin_menu`
--

CREATE TABLE IF NOT EXISTS `sp_admin_menu` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=248 ;

--
-- 转存表中的数据 `sp_admin_menu`
--

INSERT INTO `sp_admin_menu` (`id`, `name`, `parentid`, `app_code`, `controller`, `method`, `extparam`, `listorder`, `islog`, `display`) VALUES
(1, '我的面板', 0, 'passport', '', '', '', 1, '0', '1'),
(2, '管理设置', 0, 'passport', '', '', '', 2, '0', '1'),
(3, '用户中心', 0, 'passport', '', '', '', 3, '0', '1'),
(4, '应用管理', 0, 'passport', '', '', '', 4, '0', '1'),
(5, '网页游戏', 0, 'webgame', '', '', '', 5, '0', '1'),
(6, '支付模块', 0, 'pay', '', '', '', 6, '0', '1'),
(7, '采集系统', 0, 'spider', '', '', '', 7, '0', '1'),
(8, '测试站点', 0, 'movie', '', '', '', 8, '0', '1'),
(9, '测试站点2', 0, 'tbshop', '', '', '', 0, '0', '1'),
(10, '儿童教育', 0, 'kidsedu', '', '', '', 10, '0', '1'),
(11, '管理员信息', 1, 'passport', '', '', '', 0, '0', '1'),
(12, '修改个人信息', 11, 'passport', 'manager', 'editm', '', 0, '0', '1'),
(13, '修改密码', 11, 'passport', 'manager', 'editp', '', 0, '0', '1'),
(14, '操作记录', 11, 'passport', 'managerlog', 'listinfom', '', 0, '0', '1'),
(15, '查看日志', 11, 'passport', 'managerlog', 'viewm', '', 0, '0', '4'),
(16, '管理员设置', 2, 'passport', '', '', '', 0, '0', '1'),
(17, '管理员操作日志', 2, 'passport', '', '', '', 1, '0', '0'),
(18, '管理员管理', 16, 'passport', 'manager', 'listinfo', '', 0, '0', '1'),
(19, '添加管理员', 16, 'passport', 'manager', 'add', '', 0, '1', '2'),
(20, '编辑管理员', 16, 'passport', 'manager', 'edit', '', 0, '1', '3'),
(21, '删除管理员', 16, 'passport', 'manager', 'delete', '', 0, '1', '3'),
(22, '锁定管理员', 16, 'passport', 'manager', 'lock', '', 0, '1', '3'),
(23, '查看管理员', 16, 'passport', 'manager', 'view', '', 0, '1', '3'),
(24, '角色管理', 16, 'passport', 'role', 'listinfo', '', 0, '0', '1'),
(25, '查看', 16, 'passport', 'role', 'view', '', 0, '1', '3'),
(26, '编辑', 16, 'passport', 'role', 'edit', '', 0, '1', '3'),
(27, '删除', 16, 'passport', 'role', 'delete', '', 0, '1', '3'),
(28, '添加角色', 16, 'passport', 'role', 'add', '', 0, '1', '2'),
(29, '菜单管理', 16, 'passport', 'menu', 'listinfo', '', 0, '0', '1'),
(30, '查看', 16, 'passport', 'menu', 'view', '', 0, '1', '2'),
(31, '查看', 16, 'passport', 'menu', 'view', '', 0, '1', '3'),
(32, '编辑', 16, 'passport', 'menu', 'edit', '', 0, '1', '3'),
(33, '删除角色', 16, 'passport', 'menu', 'delete', '', 0, '1', '3'),
(34, '添加菜单', 16, 'passport', 'menu', 'add', '', 0, '1', '2'),
(35, '角色权限', 16, 'passport', 'role', 'editPriv', '', 0, '1', '3'),
(36, '查看日志', 17, 'passport', 'managerlog', 'view', '', 0, '0', '3'),
(37, '操作日志', 17, 'passport', 'managerlog', 'listinfo', '', 0, '0', '1'),
(38, '用户中心设置', 3, 'passport', '', '', '', 0, '1', '1'),
(39, '用户管理', 3, 'passport', '', '', '', 1, '1', '1'),
(40, '用户组管理', 3, 'passport', '', '', '', 2, '1', '1'),
(41, '基本设置', 38, 'passport', 'config', 'base', '', 0, '1', '1'),
(42, '管理用户', 39, 'passport', 'member', 'listinfo', '', 0, '1', '1'),
(43, '查看用户', 39, 'passport', 'member', 'view', '', 0, '1', '1'),
(44, '审核用户', 39, 'passport', 'member', 'check', '', 0, '1', '1'),
(45, '管理用户组', 40, 'passport', 'group', 'listinfo', '', 0, '1', '1'),
(46, '添加用户组', 40, 'passport', 'group', 'add', '', 0, '1', '2'),
(47, '查看用户组', 40, 'passport', 'group', 'view', '', 0, '1', '3'),
(48, '编辑用户组', 40, 'passport', 'group', 'edit', '', 0, '1', '3'),
(49, '删除用户组', 40, 'passport', 'group', 'delete', '', 0, '1', '3'),
(50, '平台附件管理', 4, 'passport', '', '', '', 0, '1', '1'),
(51, '广告管理', 4, 'passport', '', '', '', 0, '1', '1'),
(52, '友情链接', 4, 'passport', '', '', '', 0, '1', '1'),
(53, '消息管理', 4, 'passport', '', '', '', 0, '1', '1'),
(54, '评论管理', 4, 'passport', '', '', '', 0, '1', '1'),
(55, '管理附件', 50, 'passport', 'attachment', 'listinfo', '', 0, '1', '1'),
(56, '查看附件', 50, 'passport', 'attachment', 'view', '', 0, '1', '3'),
(57, '删除附件', 50, 'passport', 'attachment', 'delete', '', 0, '1', '3'),
(58, '管理版位', 51, 'passport', 'poster_space', 'listinfo', '', 0, '1', '1'),
(59, '添加版位', 51, 'passport', 'poster_space', 'add', '', 0, '1', '2'),
(60, '查看版位', 51, 'passport', 'poster_space', 'view', '', 0, '1', '3'),
(61, '编辑版位', 51, 'passport', 'poster_space', 'edit', '', 0, '1', '3'),
(62, '删除版位', 51, 'passport', 'poster_space', 'delete', '', 0, '1', '3'),
(63, '管理广告', 51, 'passport', 'poster', 'listinfo', '', 0, '1', '1'),
(64, '添加广告', 51, 'passport', 'poster', 'add', '', 0, '1', '2'),
(65, '查看广告', 51, 'passport', 'poster', 'view', '', 0, '1', '3'),
(66, '编辑广告', 51, 'passport', 'poster', 'edit', '', 0, '1', '3'),
(67, '删除广告', 51, 'passport', 'poster', 'delete', '', 0, '1', '3'),
(68, '管理友链', 52, 'passport', 'linkurl', 'listinfo', '', 0, '1', '1'),
(69, '添加友链', 52, 'passport', 'linkurl', 'add', '', 0, '1', '2'),
(70, '查看友链', 52, 'passport', 'linkurl', 'view', '', 0, '1', '3'),
(71, '编辑友链', 52, 'passport', 'linkurl', 'edit', '', 0, '1', '3'),
(72, '删除友链', 52, 'passport', 'linkurl', 'delete', '', 0, '1', '3'),
(73, '管理类型', 53, 'passport', 'message_type', 'listinfo', '', 0, '1', '1'),
(74, '添加类型', 53, 'passport', 'message_type', 'add', '', 0, '1', '2'),
(75, '查看类型', 53, 'passport', 'message_type', 'view', '', 0, '1', '3'),
(76, '编辑类型', 53, 'passport', 'message_type', 'edit', '', 0, '1', '3'),
(77, '删除类型', 53, 'passport', 'message_type', 'delete', '', 0, '1', '3'),
(78, '管理消息', 53, 'passport', 'message', 'listinfo', '', 0, '1', '1'),
(79, '添加消息', 53, 'passport', 'message', 'add', '', 0, '1', '2'),
(80, '查看消息', 53, 'passport', 'message', 'view', '', 0, '1', '3'),
(81, '编辑消息', 53, 'passport', 'message', 'edit', '', 0, '1', '3'),
(82, '删除消息', 53, 'passport', 'message', 'delete', '', 0, '1', '3'),
(83, '管理评论', 54, 'passport', 'commend', 'listinfo', '', 0, '1', '1'),
(84, '添加评论', 54, 'passport', 'commend', 'add', '', 0, '1', '2'),
(85, '查看评论', 54, 'passport', 'commend', 'view', '', 0, '1', '3'),
(86, '编辑评论', 54, 'passport', 'commend', 'edit', '', 0, '1', '3'),
(87, '删除评论', 54, 'passport', 'commend', 'delete', '', 0, '1', '3'),
(88, '游戏管理', 5, 'webgame', '', '', '', 1, '0', '1'),
(89, '内容相关设置', 5, 'webgame', '', '', '', 2, '1', '1'),
(90, '内容管理', 5, 'webgame', '', '', '', 3, '1', '1'),
(91, '发布管理', 5, 'webgame', '', '', '', 4, '1', '1'),
(92, '添加栏目', 89, 'webgame', 'category', 'add', '', 0, '1', '2'),
(93, '删除栏目', 89, 'webgame', 'category', 'delete', '', 0, '1', '3'),
(94, '编辑栏目', 89, 'webgame', 'category', 'edit', '', 0, '1', '3'),
(95, '管理栏目', 89, 'webgame', 'category', 'listinfo', '', 0, '1', '1'),
(96, '查看栏目', 89, 'webgame', 'category', 'view', '', 0, '1', '3'),
(97, '添加内容', 90, 'webgame', 'content', 'add', '', 0, '1', '2'),
(98, '管理内容', 90, 'webgame', 'content', 'catquick', '', 0, '1', '1'),
(99, '删除内容', 90, 'webgame', 'content', 'delete', '', 0, '1', '3'),
(100, '编辑内容', 90, 'webgame', 'content', 'edit', '', 0, '1', '3'),
(101, '内容列表', 90, 'webgame', 'content', 'listinfo', '', 0, '1', '3'),
(102, '查看内容', 90, 'webgame', 'content', 'view', '', 0, '1', '3'),
(103, '生成栏目页', 91, 'webgame', 'publish', 'category', '', 0, '1', '1'),
(104, '生成内容页', 91, 'webgame', 'publish', 'content', '', 0, '1', '1'),
(105, '生成首页', 91, 'webgame', 'publish', 'index', '', 0, '1', '1'),
(106, '更新URL页', 91, 'webgame', 'publish', 'url', '', 0, '1', '1'),
(107, '游戏帐号报表', 88, 'webgame', 'member_webgame', 'report', '', 0, '1', '2'),
(108, '游戏帐号明细', 88, 'webgame', 'member_webgame', 'listinfo', '', 4, '1', '1'),
(109, '复制服务器', 88, 'webgame', 'server', 'copy', '', 0, '1', '3'),
(110, '删除服务器', 88, 'webgame', 'server', 'delete', '', 0, '1', '3'),
(111, '编辑服务器', 88, 'webgame', 'server', 'edit', '', 0, '1', '3'),
(112, '查看服务器', 88, 'webgame', 'server', 'view', '', 0, '1', '3'),
(113, '添加服务器', 88, 'webgame', 'server', 'add', '', 0, '1', '2'),
(114, '管理服务器', 88, 'webgame', 'server', 'listinfo', '', 2, '1', '1'),
(115, '删除游戏', 88, 'webgame', 'webgame', 'delete', '', 0, '1', '3'),
(116, '编辑游戏', 88, 'webgame', 'webgame', 'edit', '', 0, '1', '3'),
(117, '查看游戏', 88, 'webgame', 'webgame', 'view', '', 0, '1', '3'),
(118, '添加游戏', 88, 'webgame', 'webgame', 'add', '', 0, '1', '2'),
(119, '管理游戏', 88, 'webgame', 'webgame', 'listinfo', '', 1, '1', '1'),
(120, '支付管理', 6, 'pay', '', '', '', 0, '1', '1'),
(121, '支付报表', 6, 'pay', '', '', '', 0, '1', '1'),
(122, '管理包月', 120, 'pay', 'paymonth', 'listinfo', '', 0, '1', '1'),
(123, '添加包月', 120, 'pay', 'paymonth', 'add', '', 0, '1', '2'),
(124, '查看包月', 120, 'pay', 'paymonth', 'view', '', 0, '1', '3'),
(125, '编辑包月', 120, 'pay', 'paymonth', 'edit', '', 0, '1', '3'),
(126, '删除包月', 120, 'pay', 'paymonth', 'delete', '', 0, '1', '3'),
(127, '帐号充值统计', 120, 'pay', 'member_pay', 'listinfo', '', 0, '1', '1'),
(128, '删除支付方式', 120, 'pay', 'payment', 'delete', '', 0, '1', '3'),
(129, '编辑支付方式', 120, 'pay', 'payment', 'edit', '', 0, '1', '3'),
(130, '查看支付方式', 120, 'pay', 'payment', 'view', '', 0, '1', '3'),
(131, '添加支付方式', 120, 'pay', 'payment', 'add', '', 0, '1', '2'),
(132, '管理支付方式', 120, 'pay', 'payment', 'listinfo', '', 0, '1', '1'),
(133, '编辑配置', 120, 'pay', 'config', 'change', '', 0, '1', '3'),
(134, '支付配置', 120, 'pay', 'config', 'base', '', 0, '1', '1'),
(135, '活动奖励', 121, 'pay', 'handcharge', 'listinfo', '', 0, '1', '1'),
(136, '手工充值', 121, 'pay', 'handcharge', 'add', '', 0, '1', '2'),
(137, '异常充值', 121, 'pay', 'account_unusual', 'listinfo', '', 0, '1', '1'),
(138, '支付记录', 121, 'pay', 'pay', 'listinfo', '', 0, '1', '1'),
(139, '充值记录', 121, 'pay', 'account', 'listinfo', '', 0, '1', '1'),
(140, '源站管理', 7, 'spider', '', '', '', 0, '0', '1'),
(141, '采集管理', 7, 'spider', '', '', '', 1, '0', '1'),
(142, '采集内容管理', 7, 'spider', '', '', '', 2, '0', '1'),
(143, '源站管理', 140, 'spider', 'site', 'listinfo', '', 0, '0', '1'),
(144, '添加源站', 140, 'spider', 'site', 'add', '', 0, '0', '2'),
(145, '编辑源站', 140, 'spider', 'site', 'edit', '', 0, '0', '3'),
(146, '删除源站', 140, 'spider', 'site', 'delete', '', 0, '0', '3'),
(147, '源站页面采集', 140, 'spider', 'sitePage', 'listinfo', '', 0, '0', '1'),
(148, '添加页面', 140, 'spider', 'sitePage', 'add', '', 0, '0', '2'),
(149, '编辑页面', 140, 'spider', 'sitePage', 'edit', '', 0, '0', '3'),
(150, '删除页面', 140, 'spider', 'sitePage', 'delete', '', 0, '0', '3'),
(151, '查看源页面', 140, 'spider', 'sitePage', 'showSource', '', 0, '0', '3'),
(152, '查看本地页面', 140, 'spider', 'sitePage', 'showTarget', '', 0, '0', '3'),
(153, '采集页面资源', 140, 'spider', 'sitePage', 'spider', '', 0, '0', '3'),
(154, '页面本地化', 140, 'spider', 'sitePage', 'localPage', '', 0, '0', '3'),
(155, '采集资源', 140, 'spider', 'sitePage', 'downFile', '', 0, '1', '4'),
(156, '复制任务', 141, 'spider', 'job', 'copy', '', 0, '0', '3'),
(157, '采集规则管理', 141, 'spider', 'crule', 'listinfo', '', 0, '0', '1'),
(158, '添加规则', 141, 'spider', 'crule', 'add', '', 0, '0', '2'),
(159, '编辑规则', 141, 'spider', 'crule', 'edit', '', 0, '0', '3'),
(160, '删除规则', 141, 'spider', 'crule', 'delete', '', 0, '0', '3'),
(161, '采集任务管理', 141, 'spider', 'job', 'listinfo', '', 0, '0', '1'),
(162, '添加任务', 141, 'spider', 'job', 'add', '', 0, '0', '2'),
(163, '编辑任务', 141, 'spider', 'job', 'edit', '', 0, '0', '3'),
(164, '删除任务', 141, 'spider', 'job', 'delete', '', 0, '0', '3'),
(165, '列表页面采集', 141, 'spider', 'spider', 'spiderList', '', 0, '0', '3'),
(166, '列表页处理', 141, 'spider', 'spider', 'dealList', '', 0, '0', '3'),
(167, '内容页面采集', 141, 'spider', 'spider', 'spiderContent', '', 0, '0', '3'),
(168, '内容页处理', 141, 'spider', 'spider', 'dealContent', '', 0, '0', '3'),
(169, '申请强制处理', 141, 'spider', 'spider', 'askForce', '', 0, '0', '3'),
(170, '文件采集', 141, 'spider', 'spider', 'spiderFile', '', 0, '0', '3'),
(171, '采集内容管理', 142, 'spider', 'content', 'listinfo', '', 0, '0', '1'),
(172, '采集任务发布', 142, 'spider', 'content', 'publish', '', 0, '0', '1'),
(173, '查看源内容', 142, 'spider', 'content', 'showSource', '', 0, '0', '3'),
(174, '查看本地内容', 142, 'spider', 'content', 'showTarget', '', 0, '0', '3'),
(175, '内容管理', 8, 'movie', '', '', '', 3, '1', '1'),
(176, '发布管理', 8, 'movie', '', '', '', 4, '1', '1'),
(177, '添加栏目', 175, 'movie', 'category', 'add', '', 0, '1', '2'),
(178, '删除栏目', 175, 'movie', 'category', 'delete', '', 0, '1', '3'),
(179, '编辑栏目', 175, 'movie', 'category', 'edit', '', 0, '1', '3'),
(180, '管理栏目', 175, 'movie', 'category', 'listinfo', '', 0, '1', '1'),
(181, '查看栏目', 175, 'movie', 'category', 'view', '', 0, '1', '3'),
(182, '添加内容', 175, 'movie', 'content', 'add', '', 0, '1', '2'),
(183, '管理内容', 175, 'movie', 'content', 'catquick', '', 0, '1', '1'),
(184, '删除内容', 175, 'movie', 'content', 'delete', '', 0, '1', '3'),
(185, '编辑内容', 175, 'movie', 'content', 'edit', '', 0, '1', '3'),
(186, '内容列表', 175, 'movie', 'content', 'listinfo', '', 0, '1', '3'),
(187, '查看内容', 175, 'movie', 'content', 'view', '', 0, '1', '3'),
(188, '生成栏目页', 176, 'movie', 'publish', 'category', '', 0, '1', '1'),
(189, '生成内容页', 176, 'movie', 'publish', 'content', '', 0, '1', '1'),
(190, '生成首页', 176, 'movie', 'publish', 'index', '', 0, '1', '1'),
(191, '更新URL页', 176, 'movie', 'publish', 'url', '', 0, '1', '1'),
(192, '内容管理', 9, 'tbshop', '', '', '', 3, '1', '1'),
(193, '发布管理', 9, 'tbshop', '', '', '', 4, '1', '1'),
(194, '添加栏目', 192, 'tbshop', 'category', 'add', '', 0, '1', '2'),
(195, '删除栏目', 192, 'tbshop', 'category', 'delete', '', 0, '1', '3'),
(196, '编辑栏目', 192, 'tbshop', 'category', 'edit', '', 0, '1', '3'),
(197, '管理栏目', 192, 'tbshop', 'category', 'listinfo', '', 0, '1', '1'),
(198, '查看栏目', 192, 'tbshop', 'category', 'view', '', 0, '1', '3'),
(199, '添加内容', 192, 'tbshop', 'content', 'add', '', 0, '1', '2'),
(200, '管理内容', 192, 'tbshop', 'content', 'catquick', '', 0, '1', '1'),
(201, '删除内容', 192, 'tbshop', 'content', 'delete', '', 0, '1', '3'),
(202, '编辑内容', 192, 'tbshop', 'content', 'edit', '', 0, '1', '3'),
(203, '内容列表', 192, 'tbshop', 'content', 'listinfo', '', 0, '1', '3'),
(204, '查看内容', 192, 'tbshop', 'content', 'view', '', 0, '1', '3'),
(205, '生成栏目页', 193, 'tbshop', 'publish', 'category', '', 0, '1', '1'),
(206, '生成内容页', 193, 'tbshop', 'publish', 'content', '', 0, '1', '1'),
(207, '生成首页', 193, 'tbshop', 'publish', 'index', '', 0, '1', '1'),
(208, '更新URL页', 193, 'tbshop', 'publish', 'url', '', 0, '1', '1'),
(209, '机构管理', 10, 'kidsedu', '', '', '', 0, '0', '1'),
(210, '内容管理', 10, 'kidsedu', '', '', '', 0, '0', '1'),
(211, '资源管理', 10, 'kidsedu', '', '', '', 0, '0', '1'),
(212, '内容发布管理', 10, 'kidsedu', '', '', '', 0, '0', '1'),
(213, '添加栏目', 210, 'kidsedu', 'category', 'add', '', 0, '1', '2'),
(214, '删除栏目', 210, 'kidsedu', 'category', 'delete', '', 0, '1', '3'),
(215, '编辑栏目', 210, 'kidsedu', 'category', 'edit', '', 0, '1', '3'),
(216, '管理栏目', 210, 'kidsedu', 'category', 'listinfo', '', 0, '1', '1'),
(217, '查看栏目', 210, 'kidsedu', 'category', 'view', '', 0, '1', '3'),
(218, '添加内容', 210, 'kidsedu', 'content', 'add', '', 0, '1', '2'),
(219, '管理内容', 210, 'kidsedu', 'content', 'catquick', '', 0, '1', '1'),
(220, '删除内容', 210, 'kidsedu', 'content', 'delete', '', 0, '1', '3'),
(221, '编辑内容', 210, 'kidsedu', 'content', 'edit', '', 0, '1', '3'),
(222, '内容列表', 210, 'kidsedu', 'content', 'listinfo', '', 0, '1', '3'),
(223, '查看内容', 210, 'kidsedu', 'content', 'view', '', 0, '1', '3'),
(224, '生成栏目页', 212, 'kidsedu', 'publish', 'category', '', 0, '1', '1'),
(225, '生成内容页', 212, 'kidsedu', 'publish', 'content', '', 0, '1', '1'),
(226, '生成首页', 212, 'kidsedu', 'publish', 'index', '', 0, '1', '1'),
(227, '更新URL页', 212, 'kidsedu', 'publish', 'url', '', 0, '1', '1'),
(228, '添加机构', 209, 'kidsedu', 'agency', 'add', '', 0, '1', '2'),
(229, '删除机构', 209, 'kidsedu', 'agency', 'delete', '', 0, '1', '3'),
(230, '编辑机构', 209, 'kidsedu', 'agency', 'edit', '', 0, '1', '3'),
(231, '管理机构', 209, 'kidsedu', 'agency', 'listinfo', '', 0, '1', '1'),
(232, '查看机构', 209, 'kidsedu', 'agency', 'view', '', 0, '1', '3'),
(233, '添加管理员', 209, 'kidsedu', 'superuserl', 'add', '', 0, '1', '2'),
(234, '删除管理员', 209, 'kidsedu', 'superuserl', 'delete', '', 0, '1', '3'),
(235, '编辑管理员', 209, 'kidsedu', 'superuserl', 'edit', '', 0, '1', '3'),
(236, '管理管理员', 209, 'kidsedu', 'superuserl', 'listinfo', '', 0, '1', '1'),
(237, '查看管理员', 209, 'kidsedu', 'superuserl', 'view', '', 0, '1', '3'),
(238, '添加课程', 211, 'kidsedu', 'course', 'add', '', 0, '1', '2'),
(239, '删除课程', 211, 'kidsedu', 'course', 'delete', '', 0, '1', '3'),
(240, '编辑课程', 211, 'kidsedu', 'course', 'edit', '', 0, '1', '3'),
(241, '管理课程', 211, 'kidsedu', 'course', 'listinfo', '', 0, '1', '1'),
(242, '查看课程', 211, 'kidsedu', 'course', 'view', '', 0, '1', '3'),
(243, '添加学校', 211, 'kidsedu', 'school', 'add', '', 0, '1', '2'),
(244, '删除学校', 211, 'kidsedu', 'school', 'delete', '', 0, '1', '3'),
(245, '编辑学校', 211, 'kidsedu', 'school', 'edit', '', 0, '1', '3'),
(246, '管理学校', 211, 'kidsedu', 'school', 'listinfo', '', 0, '1', '1'),
(247, '查看学校', 211, 'kidsedu', 'school', 'view', '', 0, '1', '3');

-- --------------------------------------------------------

--
-- 表的结构 `sp_admin_privilege`
--

CREATE TABLE IF NOT EXISTS `sp_admin_privilege` (
  `role_id` tinyint(3) unsigned NOT NULL COMMENT '角色ID',
  `menu_id` smallint(5) unsigned NOT NULL COMMENT '菜单ID',
  UNIQUE KEY `priviledge` (`role_id`,`menu_id`),
  KEY `operation` (`role_id`,`menu_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `sp_admin_privilege`
--

INSERT INTO `sp_admin_privilege` (`role_id`, `menu_id`) VALUES
(2, 5),
(2, 88),
(2, 89),
(2, 90),
(2, 91),
(2, 92),
(2, 93),
(2, 94),
(2, 95),
(2, 96),
(2, 97),
(2, 98),
(2, 99),
(2, 100),
(2, 101),
(2, 102),
(2, 103),
(2, 104),
(2, 105),
(2, 106),
(2, 107),
(2, 108),
(2, 109),
(2, 110),
(2, 111),
(2, 112),
(2, 113),
(2, 114),
(2, 115),
(2, 116),
(2, 117),
(2, 118),
(2, 119),
(3, 1),
(3, 2),
(3, 3),
(3, 4),
(3, 5),
(3, 6),
(3, 11),
(3, 12),
(3, 13),
(3, 14),
(3, 15),
(3, 16),
(3, 17),
(3, 18),
(3, 19),
(3, 20),
(3, 21),
(3, 22),
(3, 23),
(3, 24),
(3, 25),
(3, 26),
(3, 27),
(3, 28),
(3, 29),
(3, 30),
(3, 31),
(3, 32),
(3, 33),
(3, 34),
(3, 35),
(3, 36),
(3, 37),
(3, 38),
(3, 39),
(3, 40),
(3, 41),
(3, 42),
(3, 43),
(3, 44),
(3, 45),
(3, 46),
(3, 47),
(3, 48),
(3, 49),
(3, 50),
(3, 51),
(3, 52),
(3, 53),
(3, 54),
(3, 55),
(3, 56),
(3, 57),
(3, 58),
(3, 59),
(3, 60),
(3, 61),
(3, 62),
(3, 63),
(3, 64),
(3, 65),
(3, 66),
(3, 67),
(3, 68),
(3, 69),
(3, 70),
(3, 71),
(3, 72),
(3, 73),
(3, 74),
(3, 75),
(3, 76),
(3, 77),
(3, 78),
(3, 79),
(3, 80),
(3, 81),
(3, 82),
(3, 83),
(3, 84),
(3, 85),
(3, 86),
(3, 87),
(3, 88),
(3, 89),
(3, 90),
(3, 91),
(3, 92),
(3, 93),
(3, 94),
(3, 95),
(3, 96),
(3, 97),
(3, 98),
(3, 99),
(3, 100),
(3, 101),
(3, 102),
(3, 103),
(3, 104),
(3, 105),
(3, 106),
(3, 107),
(3, 108),
(3, 109),
(3, 110),
(3, 111),
(3, 112),
(3, 113),
(3, 114),
(3, 115),
(3, 116),
(3, 117),
(3, 118),
(3, 119),
(3, 120),
(3, 121),
(3, 122),
(3, 123),
(3, 124),
(3, 125),
(3, 126),
(3, 127),
(3, 128),
(3, 129),
(3, 130),
(3, 131),
(3, 132),
(3, 133),
(3, 134),
(3, 135),
(3, 136),
(3, 137),
(3, 138),
(3, 139);

-- --------------------------------------------------------

--
-- 表的结构 `sp_admin_role`
--

CREATE TABLE IF NOT EXISTS `sp_admin_role` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT COMMENT '角色ID',
  `name` varchar(50) NOT NULL COMMENT '名称',
  `description` varchar(1000) NOT NULL COMMENT '描述',
  `status` enum('0','1') NOT NULL COMMENT '0:禁用；1：启用',
  `listorder` smallint(5) unsigned NOT NULL COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `sp_admin_role`
--

INSERT INTO `sp_admin_role` (`id`, `name`, `description`, `status`, `listorder`) VALUES
(1, '超级管理员', '超级管理员', '', 7),
(2, '编辑', '网站编辑', '1', 0),
(3, '管理员', '', '1', 0);

-- --------------------------------------------------------

--
-- 表的结构 `sp_attachment`
--

CREATE TABLE IF NOT EXISTS `sp_attachment` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- 转存表中的数据 `sp_attachment`
--

INSERT INTO `sp_attachment` (`id`, `app_code`, `catid`, `contentid`, `file_name`, `file_path`, `file_size`, `file_ext`, `isimage`, `isthumb`, `downloads`, `userid`, `username`, `uploadtime`, `uploadip`, `status`, `authcode`) VALUES
(1, '', 0, 0, 'navo2.jpg', 'passport2013/0910/20130910141912626.jpg', 220469, 'jpg', 0, 0, 0, 0, '', 0, '', 0, ''),
(2, '', 0, 0, 'navo2.jpg', 'passport2013/0910/20130910141919705.jpg', 220469, 'jpg', 0, 0, 0, 0, '', 0, '', 0, ''),
(3, '', 0, 0, 'navo2.jpg', 'passport2013/0910/20130910141925472.jpg', 220469, 'jpg', 0, 0, 0, 0, '', 0, '', 0, ''),
(4, '', 0, 0, '1ebc1fc27f2a9bc75613ba1c9096859a.jpg', 'passport2013/0910/20130910142240992.jpg', 78630, 'jpg', 0, 0, 0, 0, '', 0, '', 0, ''),
(5, '', 0, 0, '2012092896369.jpg', 'passport2013/0910/20130910142311290.jpg', 246837, 'jpg', 0, 0, 0, 0, '', 0, '', 0, ''),
(6, '', 0, 0, '2012122400068.jpg', 'passport2013/0910/20130910142358994.jpg', 218866, 'jpg', 0, 0, 0, 0, '', 0, '', 0, ''),
(7, '', 0, 0, '2013012947865.png', 'passport2013/0910/20130910142445635.png', 257154, 'png', 0, 0, 0, 0, '', 0, '', 0, ''),
(8, '', 0, 0, '2012092691310.jpg', 'passport2013/0910/20130910142529332.jpg', 358073, 'jpg', 0, 0, 0, 0, '', 0, '', 0, ''),
(9, '', 0, 0, 'QQ图片20130905144255.jpg', 'passport2013/0910/20130910143505676.jpg', 62110, 'jpg', 0, 0, 0, 0, '', 0, '', 0, ''),
(10, '', 0, 0, 'QQ图片20130905144308.jpg', 'passport2013/0910/20130910143514632.jpg', 207182, 'jpg', 0, 0, 0, 0, '', 0, '', 0, ''),
(11, '', 0, 0, 'QQ图片20130905144308.jpg', 'passport2013/0910/20130910143520311.jpg', 207182, 'jpg', 0, 0, 0, 0, '', 0, '', 0, ''),
(12, '', 0, 0, '2013010691620.jpg', 'passport2013/0910/20130910143536811.jpg', 219665, 'jpg', 0, 0, 0, 0, '', 0, '', 0, ''),
(13, '', 0, 0, '2012101190770.png', 'passport2013/0910/20130910143545206.png', 246267, 'png', 0, 0, 0, 0, '', 0, '', 0, ''),
(14, '', 0, 0, '2012101137321.png', 'passport2013/0910/20130910143551723.png', 286266, 'png', 0, 0, 0, 0, '', 0, '', 0, ''),
(15, '', 0, 0, 'sxd.jpg', 'passport2013/0910/20130910143739823.jpg', 67788, 'jpg', 0, 0, 0, 0, '', 0, '', 0, ''),
(16, '', 0, 0, 'sxd.jpg', 'passport2013/0910/20130910143746964.jpg', 67788, 'jpg', 0, 0, 0, 0, '', 0, '', 0, ''),
(17, '', 0, 0, 'sxd.jpg', 'passport2013/0910/20130910143751644.jpg', 67788, 'jpg', 0, 0, 0, 0, '', 0, '', 0, ''),
(18, '', 0, 0, 'QQ图片20130905144255.jpg', 'passport2013/0910/20130910144500693.jpg', 62110, 'jpg', 0, 0, 0, 0, '', 0, '', 0, ''),
(19, '', 0, 0, 'QQ图片20130905144308.jpg', 'passport2013/0910/20130910144532119.jpg', 207182, 'jpg', 0, 0, 0, 0, '', 0, '', 0, ''),
(20, '', 0, 0, 'QQ图片20130905144237.jpg', 'passport2013/0910/20130910152355374.jpg', 58070, 'jpg', 0, 0, 0, 0, '', 0, '', 0, ''),
(21, '', 0, 0, 'QQ图片20130905144237.jpg', 'passport2013/0911/20130911113510484.jpg', 58070, 'jpg', 0, 0, 0, 0, '', 0, '', 0, ''),
(22, '', 0, 0, 'QQ图片20130905144255.jpg', 'passport2013/0911/20130911163359465.jpg', 62110, 'jpg', 0, 0, 0, 0, '', 0, '', 0, ''),
(23, '', 0, 0, 'QQ图片20130905144237.jpg', 'passport2013/0911/20130911163559221.jpg', 58070, 'jpg', 0, 0, 0, 0, '', 0, '', 0, ''),
(24, '', 0, 0, 'lgz.jpg', 'passport2013/0911/20130911163649869.jpg', 95006, 'jpg', 0, 0, 0, 0, '', 0, '', 0, ''),
(25, '', 0, 0, 'QQ图片20130905144255.jpg', 'passport2013/0911/20130911163649114.jpg', 62110, 'jpg', 0, 0, 0, 0, '', 0, '', 0, ''),
(26, '', 0, 0, 'QQ图片20130905144237.jpg', 'passport2013/0911/20130911165102242.jpg', 58070, 'jpg', 0, 0, 0, 0, '', 0, '', 0, ''),
(27, '', 0, 0, '2012092406342.png', 'passport2013/0912/20130912172705850.png', 227413, 'png', 0, 0, 0, 0, '', 0, '', 0, '');

-- --------------------------------------------------------

--
-- 表的结构 `sp_linkurl`
--

CREATE TABLE IF NOT EXISTS `sp_linkurl` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `sp_linkurl`
--

INSERT INTO `sp_linkurl` (`id`, `type`, `name`, `url`, `logo`, `description`, `username`, `listorder`, `status`, `add_time`) VALUES
(1, 'nova', '友链1', 'http://www.baidu.com/', '', '', '', 0, 1, 1379396460);

-- --------------------------------------------------------

--
-- 表的结构 `sp_member`
--

CREATE TABLE IF NOT EXISTS `sp_member` (
  `userid` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户ID',
  `username` char(32) NOT NULL DEFAULT '' COMMENT '用户名',
  `ucserver_id` int(10) unsigned NOT NULL DEFAULT '0',
  `password` char(32) NOT NULL DEFAULT '' COMMENT '密码',
  `pwd_strong` enum('1','2','3') NOT NULL DEFAULT '1' COMMENT '密码强度 1 弱 2 中 3 强',
  `encrypt` char(6) NOT NULL COMMENT '辅助加密字符串',
  `avatar` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '用户头像',
  `email` char(32) NOT NULL DEFAULT '' COMMENT '邮箱',
  `truename` varchar(255) NOT NULL DEFAULT '' COMMENT '真实姓名',
  `gender` enum('1','2') NOT NULL DEFAULT '2' COMMENT '性别 1 男 2 女',
  `msn` varchar(20) NOT NULL DEFAULT '' COMMENT 'msn帐号',
  `telephone` varchar(255) NOT NULL DEFAULT '' COMMENT '电话',
  `get_username` varchar(32) NOT NULL COMMENT '收货人地址',
  `address` varchar(255) NOT NULL DEFAULT '' COMMENT '地址',
  `qq` varchar(255) NOT NULL DEFAULT '' COMMENT 'QQ号',
  `birthday` int(11) NOT NULL COMMENT '生日',
  `postcode` varchar(255) NOT NULL DEFAULT '' COMMENT '邮编',
  `mobile` varchar(255) NOT NULL DEFAULT '' COMMENT '手机号',
  `idcard` char(18) NOT NULL COMMENT '身份证号',
  `regip` char(15) NOT NULL DEFAULT '' COMMENT '注册IP',
  `regdate` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '注册时间',
  `loginnum` int(8) NOT NULL COMMENT '登录次数',
  `lastloginip` char(15) NOT NULL DEFAULT '0' COMMENT '最后一次登录IP',
  `lastlogintime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '最后一次登录时间',
  PRIMARY KEY (`userid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1391332 ;

--
-- 转存表中的数据 `sp_member`
--

INSERT INTO `sp_member` (`userid`, `username`, `ucserver_id`, `password`, `pwd_strong`, `encrypt`, `avatar`, `email`, `truename`, `gender`, `msn`, `telephone`, `get_username`, `address`, `qq`, `birthday`, `postcode`, `mobile`, `idcard`, `regip`, `regdate`, `loginnum`, `lastloginip`, `lastlogintime`) VALUES
(1089692, '1089692', 1, '542666faae27ef5b977a701af4e86b19', '1', '2NlgqY', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1378800835, 0, '0', 0),
(1065112, '1065112', 2, '514c59761aeaba4fbe7cc788577fc515', '1', 'l4IZ1m', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1378801338, 0, '0', 0),
(104760, '104760', 3, '1218a4b526c794480d28eefb08047400', '1', 'pdgEsz', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1378801338, 1, '127.0.0.1', 1378801341),
(1062753, '1062753', 4, 'e521f1e8065594e421b3b708878b14c1', '1', 'Zxinxa', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1378811253, 0, '0', 0),
(1023032, '1023032', 5, '1d3c7c23f550f7430e4da301a8f5d21d', '1', 'BK7Sng', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1378811253, 1, '127.0.0.1', 1378811256),
(1193559, 'aaaaaa', 6, '6dceefbc8399e41b5fae06839a8bdc2f', '1', 'JFAkWH', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1378863829, 6, '127.0.0.1', 1379381861),
(1286042, 'bbbbbb', 7, 'ab794e1d2c0513f38a0af9ef90550cfe', '1', 'uyZ6UZ', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1378979837, 1, '127.0.0.1', 1379468433),
(1386195, '1386195', 8, '87bef5b42e7e4a6a8b4c8a30542f503e', '1', 'm5iEPU', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1379064838, 0, '0', 0),
(1391331, '1391331', 9, '2b2fbd378f47bdfa682f6f5ae63a0aff', '1', 'WPylpC', 0, '', '', '2', '', '', '', '', '', 0, '', '', '', '127.0.0.1', 1379064839, 1, '127.0.0.1', 1379064847);

-- --------------------------------------------------------

--
-- 表的结构 `sp_poster`
--

CREATE TABLE IF NOT EXISTS `sp_poster` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `sp_poster`
--

INSERT INTO `sp_poster` (`id`, `name`, `space_id`, `type`, `start_time`, `end_time`, `add_time`, `listorder`, `status`, `url`, `url_ext`, `pic`, `pic_ext`) VALUES
(1, '幻灯广告1', 1, 'image', 2013, 2013, 2013, 66, 1, 'http://www.baidu.com', '', 'http://upload.ci.com/passport2013/0910/20130910142240992.jpg', ''),
(2, '网页游戏', 1, 'image', 0, 0, 0, 2, 1, 'http://www.163.com', '', 'http://upload.ci.com/passport2013/0910/20130910142311290.jpg', ''),
(3, '测试站点2', 1, 'image', 0, 0, 0, 2, 0, 'http://weibo.com', '', 'http://upload.ci.com/passport2013/0910/20130910142358994.jpg', ''),
(4, '管理员', 1, 'image', 0, 0, 0, 8, 1, 'http://passport.ci.com/', '', 'http://upload.ci.com/passport2013/0910/20130910142445635.png', ''),
(5, '幻灯广告', 0, '0', 0, 0, 0, 9, 1, 'http://abc.com/', '', 'http://upload.ci.com/passport2013/0910/20130910142529332.jpg', '');

-- --------------------------------------------------------

--
-- 表的结构 `sp_poster_space`
--

CREATE TABLE IF NOT EXISTS `sp_poster_space` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(50) NOT NULL,
  `type` char(30) NOT NULL,
  `width` smallint(4) unsigned NOT NULL DEFAULT '0',
  `height` smallint(4) unsigned NOT NULL DEFAULT '0',
  `description` char(100) NOT NULL,
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `disabled` (`status`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `sp_poster_space`
--

INSERT INTO `sp_poster_space` (`id`, `name`, `type`, `width`, `height`, `description`, `status`) VALUES
(1, '幻灯广告', '0', 0, 0, '', 1);

-- --------------------------------------------------------

--
-- 表的结构 `sp_times`
--

CREATE TABLE IF NOT EXISTS `sp_times` (
  `username` char(40) NOT NULL,
  `ip` char(15) NOT NULL,
  `logintime` int(10) unsigned NOT NULL DEFAULT '0',
  `isadmin` tinyint(1) NOT NULL DEFAULT '0',
  `times` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`username`,`isadmin`)
) ENGINE=MEMORY DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
