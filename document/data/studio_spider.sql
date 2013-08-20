-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1
-- 生成日期: 2013 �?08 �?20 �?12:53
-- 服务器版本: 5.6.11
-- PHP 版本: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `studio_spider`
--
CREATE DATABASE IF NOT EXISTS `studio_spider` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `studio_spider`;

-- --------------------------------------------------------

--
-- 表的结构 `ss_content`
--

CREATE TABLE IF NOT EXISTS `ss_content` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `ss_content_result`
--

CREATE TABLE IF NOT EXISTS `ss_content_result` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `ss_crule`
--

CREATE TABLE IF NOT EXISTS `ss_crule` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `ss_file`
--

CREATE TABLE IF NOT EXISTS `ss_file` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `ss_job`
--

CREATE TABLE IF NOT EXISTS `ss_job` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `ss_job_result`
--

CREATE TABLE IF NOT EXISTS `ss_job_result` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `ss_list`
--

CREATE TABLE IF NOT EXISTS `ss_list` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `job_id` int(8) NOT NULL,
  `base_file` char(36) NOT NULL,
  `list_url` varchar(200) NOT NULL,
  `inputtime` int(10) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `glist` (`job_id`,`status`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `ss_result_total`
--

CREATE TABLE IF NOT EXISTS `ss_result_total` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `ss_site`
--

CREATE TABLE IF NOT EXISTS `ss_site` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `siteurl` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `ss_site`
--

INSERT INTO `ss_site` (`id`, `name`, `siteurl`) VALUES
(1, '4399网页游戏', 'http://web.4399.com/'),
(2, '淘米游戏', 'http://game.61.com/'),
(3, '淘米平台', 'http://web.2125.com/');

-- --------------------------------------------------------

--
-- 表的结构 `ss_site_file`
--

CREATE TABLE IF NOT EXISTS `ss_site_file` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `ss_site_page`
--

CREATE TABLE IF NOT EXISTS `ss_site_page` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '页面ID',
  `site_id` smallint(5) unsigned NOT NULL COMMENT '页面所属站点',
  `name` varchar(30) NOT NULL COMMENT '页面名称',
  `pageurl` varchar(100) NOT NULL COMMENT '页面源地址',
  `baseurl` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `ss_site_page`
--

INSERT INTO `ss_site_page` (`id`, `site_id`, `name`, `pageurl`, `baseurl`) VALUES
(1, 1, 'web4399首页', 'http://web.4399.com/', 'http://web.4399.com/'),
(2, 1, 'web3499样式header', 'http://web.4399.com/css/header.css', 'http://web.4399.com/'),
(3, 1, 'web4399样式topnavcss', 'http://web.4399.com/css/topnavcss.css', 'http://web.4399.com/'),
(4, 1, 'web4399样式loft_new', 'http://web.4399.com/css/left_new.css', 'http://web.4399.com/'),
(5, 1, 'web3499样式main_new', 'http://web.4399.com/css/main_new.css', 'http://web.4399.com/'),
(6, 2, '淘米游戏首页', 'http://game.61.com/', 'http://game.61.com/'),
(7, 3, '淘米平台首页', 'http://web.2125.com/', 'http://web.2125.com/'),
(8, 3, '淘米注册页', 'http://account.61.com/register', 'http://web.2125.com/');

-- --------------------------------------------------------

--
-- 表的结构 `ss_site_result`
--

CREATE TABLE IF NOT EXISTS `ss_site_result` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
