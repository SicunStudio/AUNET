-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-02-27 14:12:28
-- 服务器版本： 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aunet`
--
USE `aunet`;

-- --------------------------------------------------------

--
-- 表的结构 `aunet_freshmen`
--

CREATE TABLE `aunet_freshmen` (
  `id` int(4) NOT NULL,
  `name` varchar(10) NOT NULL,
  `sex` varchar(4) NOT NULL DEFAULT '男',
  `uid` varchar(12) NOT NULL,
  `class` varchar(20) NOT NULL,
  `dorm` varchar(30) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `qq` varchar(12) NOT NULL,
  `depart1` varchar(20) NOT NULL,
  `depart2` varchar(20) NOT NULL,
  `concede` varchar(4) NOT NULL,
  `introduction` text NOT NULL,
  `expectation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `aunet_freshmen`
--



--
-- Indexes for dumped tables
--

--
-- Indexes for table `aunet_freshmen`
--
ALTER TABLE `aunet_freshmen`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `aunet_freshmen`
--
ALTER TABLE `aunet_freshmen`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
