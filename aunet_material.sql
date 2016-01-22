-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2015-12-24 17:54:03
-- 服务器版本： 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `aunet_material`
--
use aunet;
-- --------------------------------------------------------

--
-- 表的结构 `aunet_material_materialapply`
--

CREATE TABLE IF NOT EXISTS `aunet_material_materialapply` (
  `AssociationName` varchar(100) NOT NULL,
  `ActivityName` varchar(200) NOT NULL,
  `ActivityLocation` varchar(200) NOT NULL,
  `BorrowTime` varchar(10) NOT NULL,
  `JoinNumber` varchar(4) NOT NULL,
  `ProjectorNumber` int(3) ,
  `PReturnTime` varchar(10) ,
  `PowerWattage` int(5),
  `DeskNumber` int(4),
  `ChairNumber` int(4),
  `DCReturnTime` varchar(10),
  `CarryDeskNumber` int(4),
  `CarryChairNumber` int(4),
  `ActivityChargePerson` varchar(50) ,
  `ActivityPhone` varchar(20) ,
  `AssociationComment` text ,
  `CreateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ApproveTime` date,
  `ApproveState` varchar(8) NOT NULL DEFAULT '未审批',
  `ApproveNote` text ,
  `StoreURL` varchar(100),
  `UserName` varchar(40) NOT NULL,
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  primary key (ID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `aunet_material_sports`
--

CREATE TABLE IF NOT EXISTS `aunet_material_sports` (
  `ApplyName` varchar(100) NOT NULL,
  `OperatorName` varchar(50) ,
  `OperatorPhone` varchar(20) ,
  `OperatorID` varchar(20) ,
  `OperatorDepartment` varchar(100) ,
  `ActivityContent` text ,
  `ActivityDate` varchar(50) ,
  `UseTime` varchar(100) ,
  `UseLocation` varchar(200) ,
  `Remark` text ,
  `CreateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ApproveTime` datetime(6) ,
  `ApproveState` varchar(8) NOT NULL DEFAULT '未审批',
  `ApproveNote` text,
  `StoreURL` varchar(100),
  `UserName` varchar(40) NOT NULL,
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  primary key (ID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 表的结构 `aunet_material_special`
--

CREATE TABLE IF NOT EXISTS `aunet_material_special` (
  `AssociationName` varchar(100) NOT NULL,
  `ActivityName` varchar(200) NOT NULL,
  `JoinNumber` varchar(5) ,
  `ActivityDate` varchar(20) ,
  `ActivityTime` varchar(20) ,
  `ActivityLocation` varchar(200) ,
  `Queried` varchar(2) NOT NULL,
  `ActivityContent` text ,
  `Commercial` varchar(10) NOT NULL,
  `CommercialPart` text,
  `ActivityChargePerson` varchar(50) ,
  `ActivityPhone` varchar(20) , 
  `AssociationComment` text ,
  `CreateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ApproveTime` date,
  `ApproveState` varchar(8) NOT NULL DEFAULT '未审批',
  `ApproveNote` text,
  `StoreURL` varchar(100),
  `UserName` varchar(40) NOT NULL,
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  primary key (ID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
--
-- 表的结构 `aunet_material_teachingbuilding`
--

CREATE TABLE IF NOT EXISTS `aunet_material_teachingbuilding` (
  `AssociationNameA` varchar(100) NOT NULL,
  `ActivityName` varchar(200) NOT NULL,
  `ActivityTimeA` varchar(20) NOT NULL,
  `ActivityLocation` varchar(200) NOT NULL,
  `JoinNumber` varchar(5) NOT NULL,
  `ActivityContent` text NOT NULL,
  `PresidentSignal` varchar(5) ,
  `AssociationNameB` varchar(100) NOT NULL,
  `ClassroomCapacity` int(4),
  `ApplyerName` varchar(50) NOT NULL,
  `ApplyerAttr`  varchar(50) ,
  `ClassroomFunction` varchar(50) NOT NULL,
  `OfficePhone` varchar(20) ,
  `MobilePhone` varchar(20) ,
  `ClassTime` varchar(100) NOT NULL,
  `ActivityTimeB` varchar(100) NOT NULL,
  `Week` int(4) NOT NULL,
  `Day` varchar(4) NOT NULL,
  `TeachingBuilding` varchar(10) NOT NULL, 
  `NormalConferenceContent` text ,
  `HostName` varchar(50) ,
  `HostCompany` varchar(100) ,
  `HostPost` varchar(100) ,
  `LectureContent` text ,
  `SpeakerName` varchar(50) ,
  `SpeakerCompany` varchar(100) ,
  `SpeakerPost` varchar(100) ,
  `CreateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ApproveTime` date,
  `ApproveState` varchar(8) NOT NULL DEFAULT '未审批',
  `ApproveNote` text,
  `StoreURL` varchar(100),
  `UserName` varchar(40) NOT NULL,
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  primary key (ID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
--
-- 表的结构 `aunet_material_outdoor`
--

CREATE TABLE IF NOT EXISTS `aunet_material_outdoor` (
  `AssociationName` varchar(100) NOT NULL,
  `ActivityName` varchar(10) NOT NULL,
  `JoinNumber` varchar(5) NOT NULL,
  `ActivityDate` varchar(10) NOT NULL,
  `ActivityTime` varchar(10) NOT NULL,
  `ActivityLocation` varchar(20) NOT NULL,
  `ActivityContent` text NOT NULL,
  `Commercial` varchar(10) NOT NULL,
  `CommercialPart` text NOT NULL,
  `ActivityChargePerson` varchar(50) NOT NULL,
  `ActivityPhone` varchar(20) NOT NULL, 
  `AssociationComment` text NOT NULL,
  `CreateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ApproveTime` date,
  `ApproveState` varchar(8) NOT NULL DEFAULT '未审批',
  `ApproveNote` text,
  `StoreURL` varchar(100),
  `UserName` varchar(40) NOT NULL,
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  primary key (ID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
--
-- 表的结构 `aunet_material_eaast4`
--

CREATE TABLE IF NOT EXISTS `aunet_material_east4` (
  `AssociationName` varchar(100) NOT NULL,
  `ActivityName` varchar(200) NOT NULL,
  `JoinNumber` varchar(5) NOT NULL,
  `ActivityDate` varchar(20) NOT NULL,
  `ActivityTime` varchar(20) NOT NULL,
  `ActivityLocation` varchar(200) ,
  `ActivityContent` text ,
  `Commercial` varchar(10) NOT NULL,
  `CommercialPart` text ,
  `ActivityChargePerson` varchar(50) ,
  `ActivityPhone` varchar(20) , 
  `AssociationComment` text,
  `CreateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ApproveTime` date,
  `ApproveState` varchar(8) NOT NULL DEFAULT '未审批',
  `ApproveNote` text,
  `StoreURL` varchar(100),
  `UserName` varchar(40) NOT NULL,
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  primary key (ID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
--
-- 表的结构 `aunet_material_sacenter`
--

CREATE TABLE IF NOT EXISTS `aunet_material_sacenter` (
  `AssociationName` varchar(100) NOT NULL,
  `ActivityName` varchar(200) NOT NULL,
  `JoinNumber` varchar(5) NOT NULL,
  `ActivityDate` varchar(20) NOT NULL,
  `ActivityTime` varchar(20) NOT NULL,
  `NormalClassroom` varchar(10) ,
  `LadderClassroom` varchar(10) ,
  `Queried` varchar(4) NOT NULL,
  `ActivityContent` text ,
  `Commercial` varchar(10) NOT NULL,
  `CommercialPart` text ,
  `ActivityChargePerson` varchar(50),
  `ActivityPhone` varchar(20) , 
  `AssociationComment` text,
  `CreateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ApproveTime` date,
  `ApproveState` varchar(8) NOT NULL DEFAULT '未审批',
  `ApproveNote` text,
  `StoreURL` varchar(100),
  `UserName` varchar(40) NOT NULL,
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  primary key (ID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
--
-- 表的结构 `aunet_material_colorprinting`
--

CREATE TABLE IF NOT EXISTS `aunet_material_colorprinting` (
  `AssociationName` varchar(100) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `ActivityContent` text ,
  `ActivityDate` varchar(20) ,
  `UseTime` varchar(20) ,
  `Location` varchar(200) ,
  `Commercial` varchar(2) ,
  `Remark` text ,
  `CreateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ApproveTime` date,
  `ApproveState` varchar(10) NOT NULL DEFAULT '未审批',
  `ApproveNote` text,
  `StoreURL` varchar(100),
  `UserName` varchar(40) NOT NULL,
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  primary key (ID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
--
-- 表的结构 `aunet_material_plan`
--

CREATE TABLE IF NOT EXISTS `aunet_material_plan` (
  `AssociationName` varchar(100) NOT NULL,
  `ActivityName` varchar(200) NOT NULL, 
  `ApproveState` varchar(8) NOT NULL DEFAULT '未审批',
  `ApproveNote` text,
  `StoreURL` varchar(100),
  `UserName` varchar(40) NOT NULL,
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  primary key (ID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
