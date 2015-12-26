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

-- --------------------------------------------------------

--
-- 表的结构 `aunet_material_materialapply`
--

CREATE TABLE IF NOT EXISTS `aunet_material_materialapply` (
  `AssociationName` varchar(15) NOT NULL,
  `ActivityName` varchar(20) NOT NULL,
  `ActivityLocation` varchar(20) NOT NULL,
  `BorrowTime` varchar(10) NOT NULL,
  `JoinNumber` varchar(4) NOT NULL,
  `ProjectorNumber` int(3) NOT NULL,
  `PReturnTime` varchar(10) NOT NULL,
  `PowerWattage` int(5) NOT NULL,
  `DeskNumber` int(4) NOT NULL,
  `ChairNumber` int(4) NOT NULL,
  `DCReturnTime` varchar(10) NOT NULL,
  `CarryDeskNumber` int(4) NOT NULL,
  `CarryChairNumber` int(4) NOT NULL,
  `ActivityChargePerson` varchar(10) NOT NULL,
  `ActivityPhone` varchar(12) NOT NULL,
  `AssociationComment` text NOT NULL,
  `CreateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ApproveTime` datetime(6) NOT NULL,
  `ApproveState` varchar(8) NOT NULL DEFAULT '未审批',
  `ApproveNote` text NOT NULL,
  `StoreURL` varchar(40) NOT NULL,
  `UserName` varchar(10) NOT NULL,
  `ID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `aunet_material_sports`
--

CREATE TABLE IF NOT EXISTS `aunet_material_sports` (
  `ApplyName` varchar(15) NOT NULL,
  `OperatorName` varchar(6) NOT NULL,
  `OperatorPhone` varchar(15) NOT NULL,
  `OperatorID` varchar(10) NOT NULL,
  `OperatorDepartment` varchar(20) NOT NULL,
  `ActivityContent` text NOT NULL,
  `ActivityDate` varchar(20) NOT NULL,
  `UseTime` varchar(10) NOT NULL,
  `UseLocation` varchar(20) NOT NULL,
  `Remark` text NOT NULL,
  `CreateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ApproveTime` datetime(6) NOT NULL,
  `ApproveState` varchar(8) NOT NULL DEFAULT '未审批',
  `ApproveNote` text NOT NULL,
  `StoreURL` varchar(40) NOT NULL,
  `UserName` varchar(10) NOT NULL,
  `ID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 表的结构 `aunet_material_special`
--

CREATE TABLE IF NOT EXISTS `aunet_material_special` (
  `AssociationName` varchar(15) NOT NULL,
  `ActivityName` varchar(10) NOT NULL,
  `JoinNumber` varchar(5) NOT NULL,
  `ActivityDate` varchar(10) NOT NULL,
  `ActivityTime` varchar(10) NOT NULL,
  `ActivityLocation` varchar(20) NOT NULL,
  `Queried` varchar(2) NOT NULL,
  `ActivityContent` text NOT NULL,
  `Commercial` varchar(10) NOT NULL,
  `CommercialPart` text NOT NULL,
  `ActivityChargePerson` varchar(10) NOT NULL,
  `ActivityPhone` varchar(12) NOT NULL, 
  `AssociationComment` text NOT NULL,
  `CreateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ApproveTime` datetime(6) NOT NULL,
  `ApproveState` varchar(8) NOT NULL DEFAULT '未审批',
  `ApproveNote` text NOT NULL,
  `StoreURL` varchar(40) NOT NULL,
  `UserName` varchar(10) NOT NULL,
  `ID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
--
-- 表的结构 `aunet_material_teachingbuilding`
--

CREATE TABLE IF NOT EXISTS `aunet_material_teachingbuilding` (
  `AssociationNameA` varchar(15) NOT NULL,
  `ActivityName` varchar(10) NOT NULL,
  `JoinNumber` varchar(5) NOT NULL,
  `ActivityTimeA` varchar(10) NOT NULL,
  `ActivityLocation` varchar(20) NOT NULL,
  `ActivityContent` text NOT NULL,
  `ActivityPhone` varchar(12) NOT NULL, 
  `ActivityContent` text NOT NULL,
  `PresidentSignal` varchar(5) NOT NULL,
  `AssociationNameB` varchar(15) NOT NULL,
  `ClassroomFunction` int(3) NOT NULL,
  `ApplyerName` varchar(10) NOT NULL,
  `ApplyerAttr`  varchar(4) NOT NULL,
  `ClassroomFunction` varchar(5) NOT NULL,
  `OfficePhone` varchar(15) NOT NULL,
  `MobilePhone` varchar(15) NOT NULL,
  `ClassTime` varchar(8) NOT NULL,
  `ActivityTimeB` varchar(10) NOT NULL,
  `Week` int(2) NOT NULL,
  `Day` varchar(2) NOT NULL,
  `TeachingBuing` varchar(8) NOT NULL, 
  `NormalConferenceContent` text NOT NULL,
  `HostName` varchar(5) NOT NULL,
  `HostCompany` varchar(15) NOT NULL,
  `HostPost` varchar(5) NOT NULL,
  `LectureContent` text NOT NULL,
  `SpeakerName` varchar(5) NOT NULL,
  `SpeakerCompany` varchar(15) NOT NULL,
  `SpeakerPost` varchar(15) NOT NULL,
  `CreateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ApproveTime` datetime(6) NOT NULL,
  `ApproveState` varchar(8) NOT NULL DEFAULT '未审批',
  `ApproveNote` text NOT NULL,
  `StoreURL` varchar(40) NOT NULL,
  `UserName` varchar(10) NOT NULL,
  `ID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
--
-- 表的结构 `aunet_material_outdoor`
--

CREATE TABLE IF NOT EXISTS `aunet_material_outdoor` (
  `AssociationName` varchar(15) NOT NULL,
  `ActivityName` varchar(10) NOT NULL,
  `JoinNumber` varchar(5) NOT NULL,
  `ActivityDate` varchar(10) NOT NULL,
  `ActivityTime` varchar(10) NOT NULL,
  `ActivityLocation` varchar(20) NOT NULL,
  `ActivityContent` text NOT NULL,
  `Commercial` varchar(10) NOT NULL,
  `CommercialPart` text NOT NULL,
  `ActivityChargePerson` varchar(10) NOT NULL,
  `ActivityPhone` varchar(12) NOT NULL, 
  `AssociationComment` text NOT NULL,
  `CreateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ApproveTime` datetime(6) NOT NULL,
  `ApproveState` varchar(8) NOT NULL DEFAULT '未审批',
  `ApproveNote` text NOT NULL,
  `StoreURL` varchar(40) NOT NULL,
  `UserName` varchar(10) NOT NULL,
  `ID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
--
-- 表的结构 `aunet_material_eaast4`
--

CREATE TABLE IF NOT EXISTS `aunet_material_east4` (
  `AssociationName` varchar(15) NOT NULL,
  `ActivityName` varchar(10) NOT NULL,
  `JoinNumber` varchar(5) NOT NULL,
  `ActivityDate` varchar(10) NOT NULL,
  `ActivityTime` varchar(10) NOT NULL,
  `ActivityContent` text NOT NULL,
  `Commercial` varchar(10) NOT NULL,
  `CommercialPart` text NOT NULL,
  `ActivityChargePerson` varchar(10) NOT NULL,
  `ActivityPhone` varchar(12) NOT NULL, 
  `AssociationComment` text NOT NULL,
  `CreateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ApproveTime` datetime(6) NOT NULL,
  `ApproveState` varchar(8) NOT NULL DEFAULT '未审批',
  `ApproveNote` text NOT NULL,
  `StoreURL` varchar(40) NOT NULL,
  `UserName` varchar(10) NOT NULL,
  `ID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
--
-- 表的结构 `aunet_material_sacenter`
--

CREATE TABLE IF NOT EXISTS `aunet_material_sacenter` (
  `AssociationName` varchar(15) NOT NULL,
  `ActivityName` varchar(10) NOT NULL,
  `JoinNumber` varchar(5) NOT NULL,
  `ActivityDate` varchar(10) NOT NULL,
  `ActivityTime` varchar(10) NOT NULL,
  `NormalClassroom` varchar(4) NOT NULL,
  `LadderClassroom` varchar(4) NOT NULL,
  `Queried` varchar(2) NOT NULL,
  `ActivityContent` text NOT NULL,
  `Commercial` varchar(10) NOT NULL,
  `CommercialPart` text NOT NULL,
  `ActivityChargePerson` varchar(10) NOT NULL,
  `ActivityPhone` varchar(12) NOT NULL, 
  `AssociationComment` text NOT NULL,
  `CreateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ApproveTime` datetime(6) NOT NULL,
  `ApproveState` varchar(8) NOT NULL DEFAULT '未审批',
  `ApproveNote` text NOT NULL,
  `StoreURL` varchar(40) NOT NULL,
  `UserName` varchar(10) NOT NULL,
  `ID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
--
-- 表的结构 `aunet_material_colorprinting`
--

CREATE TABLE IF NOT EXISTS `aunet_material_colorprinting` (
  `AssociationName` varchar(15) NOT NULL,
  `Name` varchar(15) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `ActivityContent` text NOT NULL,
  `ActivityDate` varchar(10) NOT NULL,
  `UseTime` varchar(10) NOT NULL,
  `Location` varchar(20) NOT NULL,
  `Commercial` varchar(2) NOT NULL,
  `Remark` text NOT NULL,
  `CreateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ApproveTime` datetime(6) NOT NULL,
  `ApproveState` varchar(8) NOT NULL DEFAULT '未审批',
  `ApproveNote` text NOT NULL,
  `StoreURL` varchar(40) NOT NULL,
  `UserName` varchar(10) NOT NULL,
  `ID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
--
-- Indexes for dumped tables
--

--
-- Indexes for table `aunet_material_materialapply`
--
ALTER TABLE `aunet_material_materialapply`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `aunet_material_sports`
--
ALTER TABLE `aunet_material_sports`
  ADD PRIMARY KEY (`ID`);
--
-- Indexes for table `aunet_material_special`
--
ALTER TABLE `aunet_material_special`
  ADD PRIMARY KEY (`ID`);
--
-- Indexes for table `aunet_material_teachingbuilding`
--
ALTER TABLE `aunet_material_teachingbuilding`
  ADD PRIMARY KEY (`ID`);
--
-- Indexes for table `aunet_material_outdoor`
--
ALTER TABLE `aunet_material_outdoor`
  ADD PRIMARY KEY (`ID`);
--
-- Indexes for table `aunet_material_eaast4`
--
ALTER TABLE `aunet_material_eaast4`
  ADD PRIMARY KEY (`ID`);
--
-- Indexes for table `aunet_material_sacenter`
--
ALTER TABLE `aunet_material_sacenter`
  ADD PRIMARY KEY (`ID`);
  --
-- Indexes for table `aunet_material_colorprinting`
--
ALTER TABLE `aunet_material_colorprinting`
  ADD PRIMARY KEY (`ID`);
--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aunet_material_materialapply`
--
ALTER TABLE `aunet_material_materialapply`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `aunet_material_sports`
--
ALTER TABLE `aunet_material_sports`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `aunet_material_special`
--
ALTER TABLE `aunet_material_special`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `aunet_material_teachingbuilding`
--
ALTER TABLE `aunet_material_teachingbuilding`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `aunet_material_outdoor`
--
ALTER TABLE `aunet_material_outdoor`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `aunet_material_eaast4`
--
ALTER TABLE `aunet_material_eaast4`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `aunet_material_sacenter`
--
ALTER TABLE `aunet_material_sacenter`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `aunet_material_colorprinting`
--
ALTER TABLE `aunet_material_colorprinting`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
