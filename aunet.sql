-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1
-- 生成日期: 2015 �?07 �?08 �?15:41
-- 服务器版本: 5.6.11
-- PHP 版本: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `aunet`
--
CREATE DATABASE IF NOT EXISTS `aunet` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `aunet`;

-- --------------------------------------------------------

--
-- 表的结构 `aunet_access`
--

CREATE TABLE IF NOT EXISTS `aunet_access` (
  `role_id` smallint(6) unsigned NOT NULL,
  `node_id` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) NOT NULL,
  `module` varchar(50) DEFAULT NULL,
  KEY `groupId` (`role_id`),
  KEY `nodeId` (`node_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `aunet_access`
--

INSERT INTO `aunet_access` (`role_id`, `node_id`, `level`, `module`) VALUES
(5, 59, 3, NULL),
(5, 48, 2, NULL),
(5, 47, 3, NULL),
(4, 70, 3, NULL),
(4, 68, 3, NULL),
(4, 69, 3, NULL),
(4, 62, 2, NULL),
(5, 46, 3, NULL),
(5, 60, 3, NULL),
(5, 61, 3, NULL),
(5, 45, 2, NULL),
(5, 36, 3, NULL),
(5, 37, 3, NULL),
(5, 38, 3, NULL),
(5, 72, 3, NULL),
(5, 63, 3, NULL),
(5, 34, 2, NULL),
(5, 40, 3, NULL),
(5, 41, 3, NULL),
(5, 39, 2, NULL),
(5, 70, 3, NULL),
(5, 68, 3, NULL),
(5, 69, 3, NULL),
(5, 62, 2, NULL),
(5, 33, 1, NULL),
(5, 35, 1, NULL),
(5, 89, 3, NULL),
(5, 88, 2, NULL),
(5, 86, 1, NULL),
(4, 33, 1, NULL),
(5, 58, 3, NULL),
(5, 50, 3, NULL),
(5, 49, 3, NULL),
(4, 104, 3, NULL),
(4, 103, 2, NULL),
(4, 91, 1, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `aunet_advise`
--

CREATE TABLE IF NOT EXISTS `aunet_advise` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `qq` varchar(9) DEFAULT NULL,
  `title` varchar(15) NOT NULL DEFAULT ' ',
  `content` text NOT NULL,
  `feedback` tinyint(1) NOT NULL DEFAULT '0',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `aunet_advise`
--

INSERT INTO `aunet_advise` (`id`, `name`, `phone`, `qq`, `title`, `content`, `feedback`, `time`) VALUES
(7, 'aaa', 'aaa', 'aaa', 'aaa', 'aaaa', 1, '2015-04-25 08:42:48'),
(9, 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 1, '2015-04-28 10:54:31');

-- --------------------------------------------------------

--
-- 表的结构 `aunet_announce`
--

CREATE TABLE IF NOT EXISTS `aunet_announce` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(10) unsigned NOT NULL DEFAULT '0',
  `title` varchar(30) NOT NULL DEFAULT '',
  `time` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `uid` (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `aunet_announce`
--

INSERT INTO `aunet_announce` (`id`, `uid`, `title`, `time`) VALUES
(2, 1, '明天社团网上线', 1429942058);

-- --------------------------------------------------------

--
-- 表的结构 `aunet_attr`
--

CREATE TABLE IF NOT EXISTS `aunet_attr` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(10) NOT NULL DEFAULT '',
  `color` char(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `aunet_attr`
--

INSERT INTO `aunet_attr` (`id`, `name`, `color`) VALUES
(2, '精华', 'green'),
(4, '最新', 'red');

-- --------------------------------------------------------

--
-- 表的结构 `aunet_cate`
--

CREATE TABLE IF NOT EXISTS `aunet_cate` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(15) NOT NULL DEFAULT '',
  `pid` int(10) unsigned NOT NULL DEFAULT '0',
  `sort` smallint(6) NOT NULL DEFAULT '100',
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- 转存表中的数据 `aunet_cate`
--

INSERT INTO `aunet_cate` (`id`, `name`, `pid`, `sort`) VALUES
(10, '社联', 0, 100),
(13, '社团', 0, 100),
(18, '法语', 13, 100);

-- --------------------------------------------------------

--
-- 表的结构 `aunet_doc`
--

CREATE TABLE IF NOT EXISTS `aunet_doc` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `filename` char(50) NOT NULL DEFAULT '',
  `remark` varchar(32) NOT NULL DEFAULT '',
  `user` varchar(20) NOT NULL DEFAULT '',
  `time` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

--
-- 转存表中的数据 `aunet_doc`
--

INSERT INTO `aunet_doc` (`id`, `filename`, `remark`, `user`, `time`) VALUES
(30, './Upload/UploadsDoc/test/54e07c4258005.docx', '社团网总体需求.docx', 'test', 1423998018),
(29, './Upload/UploadsDoc/admin/54e05d1a08a86.docx', '社团网总体需求.docx', 'admin', 1423990042),
(28, './Upload/UploadsDoc/admin/54e05d1a0869d.docx', '社团网.docx', 'admin', 1423990042),
(27, './Upload/UploadsDoc/admin/54e05d1a07ecd.docx', '[社团部]社团网场地物资借用及相关功能与要求.docx', 'admin', 1423990042),
(26, './Upload/UploadsDoc/admin/54e05b90b5a1f.docx', '社团网.docx', 'admin', 1423989648),
(31, './Upload/UploadsDoc/admin/54e093cf597e7.docx', '社团网总体需求.docx', 'admin', 1424004047);

-- --------------------------------------------------------

--
-- 表的结构 `aunet_event`
--

CREATE TABLE IF NOT EXISTS `aunet_event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` char(255) NOT NULL,
  `pic` text NOT NULL,
  `time` int(10) unsigned NOT NULL DEFAULT '0',
  `year` varchar(4) NOT NULL DEFAULT ' ',
  `month` varchar(4) NOT NULL DEFAULT '',
  `day` varchar(2) NOT NULL DEFAULT ' ',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `aunet_event`
--

INSERT INTO `aunet_event` (`id`, `content`, `pic`, `time`, `year`, `month`, `day`) VALUES
(4, 'ddd', '/Upload/Event/1989/12/16/554a3c7366019.jpg', 1430928499, '1989', '12', '16');

-- --------------------------------------------------------

--
-- 表的结构 `aunet_news`
--

CREATE TABLE IF NOT EXISTS `aunet_news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL DEFAULT '',
  `content` text,
  `time` int(10) unsigned NOT NULL DEFAULT '0',
  `cid` int(10) unsigned NOT NULL,
  `del` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `pic` text NOT NULL,
  `src` text NOT NULL,
  `text` text,
  PRIMARY KEY (`id`),
  KEY `cid` (`cid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=68 ;

--
-- 转存表中的数据 `aunet_news`
--

INSERT INTO `aunet_news` (`id`, `title`, `content`, `time`, `cid`, `del`, `pic`, `src`, `text`) VALUES
(67, '111', '<p>11111<br/></p>', 1430066145, 10, 0, ' ', '', '11111'),
(66, 'asdf', '<p>asdfasdf<img src="/AUNET./Upload/news/image/1/20150425/553b4cfb36ae5.png" title="553b4cfb36ae5.png" alt="下载.png"/>asdf11111</p>', 1429949702, 10, 0, '/AUNET./Upload/news/image/1/20150425/553b4cfb36ae5.png', ' /AUNET./Upload/news/image/1/20150425/553b4cfb36ae5.png', 'asdfasdfasdf11111');

-- --------------------------------------------------------

--
-- 表的结构 `aunet_news_attr`
--

CREATE TABLE IF NOT EXISTS `aunet_news_attr` (
  `nid` int(10) unsigned NOT NULL,
  `aid` int(10) unsigned NOT NULL,
  KEY `nid` (`nid`),
  KEY `aid` (`aid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `aunet_news_attr`
--

INSERT INTO `aunet_news_attr` (`nid`, `aid`) VALUES
(2, 1),
(3, 1),
(3, 2),
(5, 1),
(5, 2),
(6, 2),
(7, 2),
(8, 2),
(8, 4),
(10, 2),
(11, 2),
(12, 2),
(13, 2),
(14, 2),
(15, 2),
(16, 2),
(17, 2),
(17, 4),
(21, 4),
(22, 2),
(29, 4),
(28, 2),
(30, 2),
(34, 2),
(35, 2),
(36, 2),
(37, 2),
(39, 2),
(40, 2),
(42, 2),
(43, 2),
(44, 2),
(45, 2),
(46, 4),
(47, 2),
(47, 4),
(48, 2),
(49, 2),
(50, 4),
(51, 4),
(52, 2),
(53, 2),
(55, 2),
(56, 2),
(57, 4),
(58, 2),
(60, 2),
(61, 2),
(62, 2),
(65, 2),
(66, 2),
(67, 2);

-- --------------------------------------------------------

--
-- 表的结构 `aunet_node`
--

CREATE TABLE IF NOT EXISTS `aunet_node` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `remark` varchar(255) DEFAULT NULL,
  `sort` smallint(6) unsigned DEFAULT NULL,
  `pid` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `level` (`level`),
  KEY `pid` (`pid`),
  KEY `status` (`status`),
  KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=108 ;

--
-- 转存表中的数据 `aunet_node`
--

INSERT INTO `aunet_node` (`id`, `name`, `title`, `status`, `remark`, `sort`, `pid`, `level`) VALUES
(33, 'Admin', '后台', 1, NULL, 1, 0, 1),
(34, 'News', '新闻管理', 1, NULL, 1, 33, 2),
(35, 'Home', '前台', 1, NULL, 1, 0, 1),
(36, 'news_index', '文章列表', 1, NULL, 1, 34, 3),
(37, 'addNews', '添加新闻', 1, NULL, 1, 34, 3),
(38, 'trash', '回收站', 1, NULL, 1, 34, 3),
(39, 'Upload', '资料上传', 1, NULL, 1, 33, 2),
(40, 'upload_index', '上传附件', 1, NULL, 1, 39, 3),
(41, 'doc_list', '资料列表', 1, NULL, 1, 39, 3),
(46, 'attr_index', '属性列表', 1, NULL, 1, 45, 3),
(45, 'NewsAttribute', '属性管理', 1, NULL, 1, 33, 2),
(47, 'addAttr', '添加属性', 1, NULL, 1, 45, 3),
(48, 'Category', '分类管理', 1, NULL, 1, 33, 2),
(49, 'cate_index', '分类列表', 1, NULL, 1, 48, 3),
(50, 'addCate', '添加分类', 1, NULL, 1, 48, 3),
(51, 'Rbac', '权限管理', 1, NULL, 1, 33, 2),
(52, 'role', '角色列表', 1, NULL, 1, 51, 3),
(53, 'node', '节点列表', 1, NULL, 1, 51, 3),
(54, 'user', '用户列表', 1, NULL, 1, 51, 3),
(66, 'access', '配置权限', 1, NULL, 1, 51, 3),
(65, 'addNode', '添加节点', 1, NULL, 1, 51, 3),
(64, 'addUser', '添加用户', 1, NULL, 1, 51, 3),
(58, 'editCate', '编辑分类', 1, NULL, 1, 48, 3),
(59, 'deleteCate', '删除分类及其子分类', 1, NULL, 1, 48, 3),
(60, 'editAttr', '编辑属性', 1, NULL, 1, 45, 3),
(61, 'deleteAttr', '删除属性', 1, NULL, 1, 45, 3),
(62, 'Forecast', '社联大事记', 1, NULL, 1, 33, 2),
(63, 'delete', '删除新闻', 1, NULL, 1, 34, 3),
(67, 'addRole', '添加角色', 1, NULL, 1, 51, 3),
(68, 'delForecast', '删除预告', 1, NULL, 1, 62, 3),
(69, 'editForecast', '修改预告', 1, NULL, 1, 62, 3),
(70, 'addForecast', '添加预告', 1, NULL, 1, 62, 3),
(71, 'lock', '锁定用户', 1, NULL, 1, 51, 3),
(72, 'clearCache', '清除缓存', 1, NULL, 1, 34, 3),
(103, 'Material', '物资系统', 1, NULL, 1, 91, 2),
(104, 'material_index', '物资系统界面', 1, NULL, 1, 103, 3),
(94, 'Design', '设计委任', 1, NULL, 1, 0, 1),
(105, 'Grade', '评分系统', 1, NULL, 1, 97, 2),
(106, 'grade_index', '评分系统界面', 1, NULL, 1, 105, 3),
(107, 'Userdel', '删除用户', 1, NULL, 8, 51, 3),
(91, 'Material', '物资系统', 1, NULL, 1, 0, 1),
(97, 'Grade', '评分系统', 1, NULL, 1, 0, 1),
(101, 'design_index', '设计委任界面', 1, NULL, 1, 100, 3),
(100, 'Design', '设计委任', 1, NULL, 1, 94, 2);

-- --------------------------------------------------------

--
-- 表的结构 `aunet_role`
--

CREATE TABLE IF NOT EXISTS `aunet_role` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `pid` smallint(6) DEFAULT NULL,
  `status` tinyint(1) unsigned DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`),
  KEY `status` (`status`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `aunet_role`
--

INSERT INTO `aunet_role` (`id`, `name`, `pid`, `status`, `remark`) VALUES
(4, 'Editor', NULL, 1, '编辑'),
(5, 'Home', NULL, 1, '前台');

-- --------------------------------------------------------

--
-- 表的结构 `aunet_role_user`
--

CREATE TABLE IF NOT EXISTS `aunet_role_user` (
  `role_id` mediumint(9) unsigned DEFAULT NULL,
  `user_id` char(32) DEFAULT NULL,
  KEY `group_id` (`role_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `aunet_role_user`
--

INSERT INTO `aunet_role_user` (`role_id`, `user_id`) VALUES
(4, '5'),
(4, '6'),
(5, '6'),
(4, '7');

-- --------------------------------------------------------

--
-- 表的结构 `aunet_user`
--

CREATE TABLE IF NOT EXISTS `aunet_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `password` char(32) NOT NULL DEFAULT '',
  `logintime` int(10) unsigned NOT NULL,
  `loginip` varchar(30) NOT NULL,
  `lock` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `aunet_user`
--

INSERT INTO `aunet_user` (`id`, `username`, `password`, `logintime`, `loginip`, `lock`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1436361085, '127.0.0.1', 0),
(7, 'test', '098f6bcd4621d373cade4e832627b4f6', 1434380153, '127.0.0.1', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
