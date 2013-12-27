-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013-12-27 10:32:14
-- 服务器版本: 5.6.11
-- PHP 版本: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `studio_bookbar`
--

-- --------------------------------------------------------

--
-- 表的结构 `sb_book`
--

CREATE TABLE IF NOT EXISTS `sb_book` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '图书ID',
  `code` char(10) NOT NULL COMMENT '图书代码',
  `name` varchar(50) NOT NULL COMMENT '图书名称',
  `author` varchar(50) NOT NULL COMMENT '作者',
  `listorder` smallint(5) unsigned NOT NULL COMMENT '排序',
  `positions` varchar(20) NOT NULL COMMENT '推荐位',
  `description` varchar(500) NOT NULL COMMENT '图书描述',
  `type` tinyint(4) NOT NULL COMMENT '图书类型',
  `fcover_small` varchar(200) NOT NULL,
  `fcover` varchar(200) NOT NULL COMMENT '图书封面',
  `num_words` smallint(5) unsigned NOT NULL COMMENT '字数',
  `is_publish` enum('1','0') NOT NULL COMMENT '是否出版，1：出版，0：未出版',
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- 转存表中的数据 `sb_book`
--

INSERT INTO `sb_book` (`id`, `code`, `name`, `author`, `listorder`, `positions`, `description`, `type`, `fcover_small`, `fcover`, `num_words`, `is_publish`) VALUES
(1, 'lxnahan', '呐喊', '鲁迅', 0, '0', '', 0, 'http://upload.91zuiai.com/bookbar/lx/nahan.jpg', 'http://upload.91zuiai.com/bookbar/lx/nahan.jpg', 0, '1'),
(2, 'lxpangh', '彷徨', '鲁迅', 0, '0', '', 0, 'http://upload.91zuiai.com/bookbar/lx/panghuang.jpg', 'http://upload.91zuiai.com/bookbar/lx/panghuang.jpg', 0, '1'),
(3, 'lxgushixb', '故事新编', '鲁迅', 0, '0', '', 0, 'http://upload.91zuiai.com/bookbar/lx/gushixinbian.jpg', 'http://upload.91zuiai.com/bookbar/lx/gushixinbian.jpg', 0, '1'),
(4, 'lxzhaohxs', '朝花夕拾', '鲁迅', 0, '0', '', 0, 'http://upload.91zuiai.com/bookbar/lx/zhaohuaxishi.jpg', 'http://upload.91zuiai.com/bookbar/lx/zhaohuaxishi.jpg', 0, '1'),
(5, 'lxyec', '野草', '鲁迅', 0, '0', '', 0, 'http://upload.91zuiai.com/bookbar/lx/yecao.jpg', 'http://upload.91zuiai.com/bookbar/lx/yecao.jpg', 0, '1'),
(6, 'lxfen', '坟', '鲁迅', 0, '0', '', 0, 'http://upload.91zuiai.com/bookbar/lx/gushixinbian.jpg', 'http://upload.91zuiai.com/bookbar/lx/gushixinbian.jpg', 0, '1'),
(7, 'lxrefeng', '热风', '鲁迅', 0, '0', '', 0, 'http://upload.91zuiai.com/bookbar/lx/zhaohuaxishi.jpg', 'http://upload.91zuiai.com/bookbar/lx/zhaohuaxishi.jpg', 0, '1'),
(8, 'lxhuagj', '华盖集', '鲁迅', 0, '0', '', 0, 'http://upload.91zuiai.com/bookbar/lx/panghuang.jpg', 'http://upload.91zuiai.com/bookbar/lx/panghuang.jpg', 0, '1'),
(9, 'lxzhunfyt', '准风月谈', '鲁迅', 0, '0', '', 0, 'http://upload.91zuiai.com/bookbar/lx/gushixinbian.jpg', 'http://upload.91zuiai.com/bookbar/lx/gushixinbian.jpg', 0, '1'),
(10, 'lxeryj', '而已集', '鲁迅', 0, '0', '', 0, 'http://upload.91zuiai.com/bookbar/lx/zhaohuaxishi.jpg', 'http://upload.91zuiai.com/bookbar/lx/zhaohuaxishi.jpg', 0, '1'),
(11, 'lxerxj', '二心集', '鲁迅', 0, '0', '', 0, 'http://upload.91zuiai.com/bookbar/lx/yecao.jpg', 'http://upload.91zuiai.com/bookbar/lx/yecao.jpg', 0, '1'),
(12, 'lxnanqbd', '南腔北调集', '鲁迅', 0, '0', '', 0, 'http://upload.91zuiai.com/bookbar/lx/gushixinbian.jpg', 'http://upload.91zuiai.com/bookbar/lx/gushixinbian.jpg', 0, '1'),
(13, 'lxqjt', '且介亭杂文', '鲁迅', 0, '0', '', 0, 'http://upload.91zuiai.com/bookbar/lx/zhaohuaxishi.jpg', 'http://upload.91zuiai.com/bookbar/lx/zhaohuaxishi.jpg', 0, '1'),
(14, 'lxhuagjxb', '华盖集续编', '鲁迅', 0, '0', '', 0, 'http://upload.91zuiai.com/bookbar/lx/gushixinbian.jpg', 'http://upload.91zuiai.com/bookbar/lx/gushixinbian.jpg', 0, '1'),
(15, 'lxweizys', '伪自由书', '鲁迅', 0, '0', '', 0, 'http://upload.91zuiai.com/bookbar/lx/zhaohuaxishi.jpg', 'http://upload.91zuiai.com/bookbar/lx/zhaohuaxishi.jpg', 0, '1'),
(16, 'lxhuab', '花边文学', '鲁迅', 0, '0', '', 0, 'http://upload.91zuiai.com/bookbar/lx/yecao.jpg', 'http://upload.91zuiai.com/bookbar/lx/yecao.jpg', 0, '1'),
(17, 'lxqjt2', '且介亭杂文二集', '鲁迅', 0, '0', '', 0, 'http://upload.91zuiai.com/bookbar/lx/gushixinbian.jpg', 'http://upload.91zuiai.com/bookbar/lx/gushixinbian.jpg', 0, '1'),
(18, 'lxqjt3', '且介亭杂文末编', '鲁迅', 0, '0', '', 0, 'http://upload.91zuiai.com/bookbar/lx/zhaohuaxishi.jpg', 'http://upload.91zuiai.com/bookbar/lx/zhaohuaxishi.jpg', 0, '1'),
(19, 'lxsanxj', '三闲集', '鲁迅', 0, '0', '', 0, 'http://upload.91zuiai.com/bookbar/lx/zhaohuaxishi.jpg', 'http://upload.91zuiai.com/bookbar/lx/zhaohuaxishi.jpg', 0, '1'),
(20, 'xifzxs', '西方哲学史', '罗素', 0, '0', '', 0, 'http://upload.91zuiai.com/bookbar/lx/nahan.jpg', 'http://upload.91zuiai.com/bookbar/lx/nahan.jpg', 0, '1'),
(21, 'zhonggzxjs', '中国哲学简史', '冯友兰', 0, '0', '', 0, 'http://upload.91zuiai.com/bookbar/lx/panghuang.jpg', 'http://upload.91zuiai.com/bookbar/lx/panghuang.jpg', 0, '1'),
(22, 'quanqts', '全球通史', '斯塔夫里阿诺斯', 0, '0', '', 0, 'http://upload.91zuiai.com/bookbar/lx/gushixinbian.jpg', 'http://upload.91zuiai.com/bookbar/lx/gushixinbian.jpg', 0, '1'),
(23, 'zhexwt', '哲学问题', '罗素', 0, '0', '', 0, 'http://upload.91zuiai.com/bookbar/lx/zhaohuaxishi.jpg', 'http://upload.91zuiai.com/bookbar/lx/zhaohuaxishi.jpg', 0, '1'),
(24, 'shouyr', '中国文化的守夜人', '王得后', 0, '0', '', 0, 'http://upload.91zuiai.com/bookbar/lx/yecao.jpg', 'http://upload.91zuiai.com/bookbar/lx/yecao.jpg', 0, '1'),
(25, 'kafk', '卡发卡小说集', '卡夫卡', 0, '0', '', 0, 'http://upload.91zuiai.com/bookbar/lx/gushixinbian.jpg', 'http://upload.91zuiai.com/bookbar/lx/gushixinbian.jpg', 0, '1'),
(26, 'honglm', '红楼梦', '曹雪芹', 0, '0', '', 0, 'http://upload.91zuiai.com/bookbar/lx/zhaohuaxishi.jpg', 'http://upload.91zuiai.com/bookbar/lx/zhaohuaxishi.jpg', 0, '1'),
(27, 'gaolt', '高老头', '巴尔扎克', 0, '0', '', 0, 'http://upload.91zuiai.com/bookbar/lx/panghuang.jpg', 'http://upload.91zuiai.com/bookbar/lx/panghuang.jpg', 0, '1'),
(28, 'leiy', '雷雨', '曹禺', 0, '0', '', 0, 'http://upload.91zuiai.com/bookbar/lx/gushixinbian.jpg', 'http://upload.91zuiai.com/bookbar/lx/gushixinbian.jpg', 0, '1'),
(29, 'guwgz', '古文观止', '古人', 0, '0', '', 0, 'http://upload.91zuiai.com/bookbar/lx/zhaohuaxishi.jpg', 'http://upload.91zuiai.com/bookbar/lx/zhaohuaxishi.jpg', 0, '1'),
(30, 'zhouy', '周易', '圣人', 0, '0', '', 0, 'http://upload.91zuiai.com/bookbar/lx/yecao.jpg', 'http://upload.91zuiai.com/bookbar/lx/yecao.jpg', 0, '1');

-- --------------------------------------------------------

--
-- 表的结构 `sb_category`
--

CREATE TABLE IF NOT EXISTS `sb_category` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `sb_new`
--

CREATE TABLE IF NOT EXISTS `sb_new` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `sb_picture`
--

CREATE TABLE IF NOT EXISTS `sb_picture` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `sb_spage`
--

CREATE TABLE IF NOT EXISTS `sb_spage` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '单网页资讯ID',
  `catid` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '栏目ID',
  `title` varchar(80) NOT NULL DEFAULT '' COMMENT '标题',
  `username` char(20) NOT NULL COMMENT '录入者',
  `content` mediumtext NOT NULL COMMENT '内容',
  `template` varchar(30) NOT NULL COMMENT '使用模板',
  `inputtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '录入时间',
  `updatetime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
