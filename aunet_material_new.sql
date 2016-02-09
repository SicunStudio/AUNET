-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-02-09 01:45:27
-- 服务器版本： 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `aunet`
--

-- --------------------------------------------------------

--
-- 表的结构 `aunet_material_colorprinting`
--

CREATE TABLE IF NOT EXISTS `aunet_material_colorprinting` (
  `AssociationName` varchar(100) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `ActivityContent` text,
  `ActivityDate` varchar(50) DEFAULT NULL,
  `UseTime` varchar(50) DEFAULT NULL,
  `Location` varchar(200) DEFAULT NULL,
  `Commercial` varchar(10) DEFAULT NULL,
  `Remark` text,
  `CreateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ApproveTime` datetime DEFAULT NULL,
  `ApproveState` varchar(10) NOT NULL DEFAULT '未审批',
  `ApproveNote` text,
  `StoreURL` varchar(100) DEFAULT NULL,
  `UserName` varchar(40) NOT NULL,
  `ID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `aunet_material_east4`
--

CREATE TABLE IF NOT EXISTS `aunet_material_east4` (
  `AssociationName` varchar(100) NOT NULL,
  `ActivityName` varchar(200) NOT NULL,
  `JoinNumber` varchar(10) NOT NULL,
  `ActivityDate` varchar(50) NOT NULL,
  `ActivityTime` varchar(50) NOT NULL,
  `ActivityLocation` varchar(200) DEFAULT NULL,
  `ActivityContent` text,
  `Commercial` varchar(10) NOT NULL,
  `CommercialPart` text,
  `ActivityChargePerson` varchar(50) DEFAULT NULL,
  `ActivityPhone` varchar(20) DEFAULT NULL,
  `AssociationComment` text,
  `CreateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ApproveTime` datetime DEFAULT NULL,
  `ApproveState` varchar(8) NOT NULL DEFAULT '未审批',
  `ApproveNote` text,
  `StoreURL` varchar(100) DEFAULT NULL,
  `UserName` varchar(40) NOT NULL,
  `ID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `aunet_material_materialapply`
--

CREATE TABLE IF NOT EXISTS `aunet_material_materialapply` (
  `AssociationName` varchar(100) NOT NULL,
  `ActivityName` varchar(200) NOT NULL,
  `ActivityLocation` varchar(200) NOT NULL,
  `BorrowTime` varchar(50) NOT NULL,
  `JoinNumber` varchar(10) NOT NULL,
  `ProjectorNumber` int(10) DEFAULT NULL,
  `PReturnTime` varchar(50) DEFAULT NULL,
  `PowerWattage` int(10) DEFAULT NULL,
  `DeskNumber` int(10) DEFAULT NULL,
  `ChairNumber` int(10) DEFAULT NULL,
  `DCReturnTime` varchar(50) DEFAULT NULL,
  `CarryDeskNumber` int(10) DEFAULT NULL,
  `CarryChairNumber` int(10) DEFAULT NULL,
  `ActivityChargePerson` varchar(50) DEFAULT NULL,
  `ActivityPhone` varchar(20) DEFAULT NULL,
  `AssociationComment` text,
  `CreateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ApproveTime` datetime DEFAULT NULL,
  `ApproveState` varchar(8) NOT NULL DEFAULT '未审批',
  `ApproveNote` text,
  `StoreURL` varchar(100) DEFAULT NULL,
  `UserName` varchar(40) NOT NULL,
  `ID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `aunet_material_outdoor`
--

CREATE TABLE IF NOT EXISTS `aunet_material_outdoor` (
  `AssociationName` varchar(100) NOT NULL,
  `ActivityName` varchar(10) NOT NULL,
  `JoinNumber` varchar(10) NOT NULL,
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
  `ApproveTime` datetime DEFAULT NULL,
  `ApproveState` varchar(8) NOT NULL DEFAULT '未审批',
  `ApproveNote` text,
  `StoreURL` varchar(100) DEFAULT NULL,
  `UserName` varchar(40) NOT NULL,
  `ID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `aunet_material_plan`
--

CREATE TABLE IF NOT EXISTS `aunet_material_plan` (
  `AssociationName` varchar(100) NOT NULL,
  `ActivityName` varchar(200) NOT NULL,
  `ApproveState` varchar(8) NOT NULL DEFAULT '未审批',
  `ApproveNote` text,
  `StoreURL` varchar(100) DEFAULT NULL,
  `UserName` varchar(40) NOT NULL,
  `ID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `aunet_material_sacenter`
--

CREATE TABLE IF NOT EXISTS `aunet_material_sacenter` (
  `AssociationName` varchar(100) NOT NULL,
  `ActivityName` varchar(200) NOT NULL,
  `JoinNumber` varchar(10) NOT NULL,
  `ActivityDate` varchar(20) NOT NULL,
  `ActivityTime` varchar(20) NOT NULL,
  `NormalClassroom` varchar(10) DEFAULT NULL,
  `LadderClassroom` varchar(10) DEFAULT NULL,
  `Queried` varchar(4) NOT NULL,
  `ActivityContent` text,
  `Commercial` varchar(10) NOT NULL,
  `CommercialPart` text,
  `ActivityChargePerson` varchar(50) DEFAULT NULL,
  `ActivityPhone` varchar(20) DEFAULT NULL,
  `AssociationComment` text,
  `CreateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ApproveTime` datetime DEFAULT NULL,
  `ApproveState` varchar(8) NOT NULL DEFAULT '未审批',
  `ApproveNote` text,
  `StoreURL` varchar(100) DEFAULT NULL,
  `UserName` varchar(40) NOT NULL,
  `ID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `aunet_material_special`
--

CREATE TABLE IF NOT EXISTS `aunet_material_special` (
  `AssociationName` varchar(100) NOT NULL,
  `ActivityName` varchar(200) NOT NULL,
  `JoinNumber` varchar(10) DEFAULT NULL,
  `ActivityDate` varchar(20) DEFAULT NULL,
  `ActivityTime` varchar(20) DEFAULT NULL,
  `ActivityLocation` varchar(200) DEFAULT NULL,
  `Queried` varchar(2) NOT NULL,
  `ActivityContent` text,
  `Commercial` varchar(10) NOT NULL,
  `CommercialPart` text,
  `ActivityChargePerson` varchar(50) DEFAULT NULL,
  `ActivityPhone` varchar(20) DEFAULT NULL,
  `AssociationComment` text,
  `CreateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ApproveTime` datetime DEFAULT NULL,
  `ApproveState` varchar(8) NOT NULL DEFAULT '未审批',
  `ApproveNote` text,
  `StoreURL` varchar(100) DEFAULT NULL,
  `UserName` varchar(40) NOT NULL,
  `ID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `aunet_material_sports`
--

CREATE TABLE IF NOT EXISTS `aunet_material_sports` (
  `ApplyName` varchar(100) NOT NULL,
  `OperatorName` varchar(50) DEFAULT NULL,
  `OperatorPhone` varchar(20) DEFAULT NULL,
  `OperatorID` varchar(20) DEFAULT NULL,
  `OperatorDepartment` varchar(100) DEFAULT NULL,
  `ActivityContent` text,
  `ActivityDate` varchar(50) DEFAULT NULL,
  `UseTime` varchar(100) DEFAULT NULL,
  `UseLocation` varchar(200) DEFAULT NULL,
  `Remark` text,
  `CreateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ApproveTime` datetime DEFAULT NULL,
  `ApproveState` varchar(8) NOT NULL DEFAULT '未审批',
  `ApproveNote` text,
  `StoreURL` varchar(100) DEFAULT NULL,
  `UserName` varchar(40) NOT NULL,
  `ID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `aunet_material_teachingbuilding`
--

CREATE TABLE IF NOT EXISTS `aunet_material_teachingbuilding` (
  `AssociationNameA` varchar(100) NOT NULL,
  `ActivityName` varchar(200) NOT NULL,
  `ActivityTimeA` varchar(20) NOT NULL,
  `ActivityLocation` varchar(200) NOT NULL,
  `JoinNumber` varchar(10) NOT NULL,
  `ActivityContent` text NOT NULL,
  `PresidentSignal` varchar(5) DEFAULT NULL,
  `AssociationNameB` varchar(100) NOT NULL,
  `ClassroomCapacity` int(10) DEFAULT NULL,
  `ApplyerName` varchar(50) NOT NULL,
  `ApplyerAttr` varchar(50) DEFAULT NULL,
  `ClassroomFunction` varchar(50) NOT NULL,
  `OfficePhone` varchar(20) DEFAULT NULL,
  `MobilePhone` varchar(20) DEFAULT NULL,
  `ClassTime` varchar(100) NOT NULL,
  `ActivityTimeB` varchar(100) NOT NULL,
  `Week` int(4) NOT NULL,
  `Day` varchar(4) NOT NULL,
  `TeachingBuilding` varchar(10) NOT NULL,
  `NormalConferenceContent` text,
  `HostName` varchar(50) DEFAULT NULL,
  `HostCompany` varchar(100) DEFAULT NULL,
  `HostPost` varchar(100) DEFAULT NULL,
  `LectureContent` text,
  `SpeakerName` varchar(50) DEFAULT NULL,
  `SpeakerCompany` varchar(100) DEFAULT NULL,
  `SpeakerPost` varchar(100) DEFAULT NULL,
  `CreateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ApproveTime` datetime DEFAULT NULL,
  `ApproveState` varchar(8) NOT NULL DEFAULT '未审批',
  `ApproveNote` text,
  `StoreURL` varchar(100) DEFAULT NULL,
  `UserName` varchar(40) NOT NULL,
  `ID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aunet_material_colorprinting`
--
ALTER TABLE `aunet_material_colorprinting`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `aunet_material_east4`
--
ALTER TABLE `aunet_material_east4`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `aunet_material_materialapply`
--
ALTER TABLE `aunet_material_materialapply`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `aunet_material_outdoor`
--
ALTER TABLE `aunet_material_outdoor`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `aunet_material_plan`
--
ALTER TABLE `aunet_material_plan`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `aunet_material_sacenter`
--
ALTER TABLE `aunet_material_sacenter`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `aunet_material_special`
--
ALTER TABLE `aunet_material_special`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `aunet_material_sports`
--
ALTER TABLE `aunet_material_sports`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `aunet_material_teachingbuilding`
--
ALTER TABLE `aunet_material_teachingbuilding`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aunet_material_colorprinting`
--
ALTER TABLE `aunet_material_colorprinting`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `aunet_material_east4`
--
ALTER TABLE `aunet_material_east4`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `aunet_material_materialapply`
--
ALTER TABLE `aunet_material_materialapply`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `aunet_material_outdoor`
--
ALTER TABLE `aunet_material_outdoor`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `aunet_material_plan`
--
ALTER TABLE `aunet_material_plan`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `aunet_material_sacenter`
--
ALTER TABLE `aunet_material_sacenter`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `aunet_material_special`
--
ALTER TABLE `aunet_material_special`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `aunet_material_sports`
--
ALTER TABLE `aunet_material_sports`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `aunet_material_teachingbuilding`
--
ALTER TABLE `aunet_material_teachingbuilding`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT;