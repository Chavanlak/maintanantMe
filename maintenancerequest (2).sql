-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2025 at 12:57 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maintenancerequest`
--

-- --------------------------------------------------------

--
-- Table structure for table `approve`
--

CREATE TABLE `approve` (
  `approveId` int(11) NOT NULL,
  `approveStatus` text NOT NULL,
  `userId` int(11) NOT NULL,
  `dateRequest` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `branchId` int(11) NOT NULL,
  `branchCode` varchar(16) NOT NULL,
  `branchName` text NOT NULL,
  `location` text NOT NULL,
  `UserId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branchId`, `branchCode`, `branchName`, `location`, `UserId`) VALUES
(1, 'POS', 'TanaGroupInternational(สำนักงานใหญ่)', 'กรุงเทพมหานคร', 0),
(2, 'F01', 'ร้านอาหารฟูจิเซ็นทรัลลาดพร้าว(ชั้น 3)', 'กรุงเทพมหานคร(ลาดพร้าว)', 0);

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `equipmentId` int(11) NOT NULL,
  `serialNumber` text DEFAULT NULL,
  `equipmentName` text NOT NULL,
  `eqipmentType` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`equipmentId`, `serialNumber`, `equipmentName`, `eqipmentType`) VALUES
(1, NULL, 'สายเเลน', 'อุปกรณ์ไอที'),
(2, NULL, 'เครื่องปริ้น', 'อุปกรณ์ไอที'),
(5, NULL, 'เครื่องดูดฝุ่น', 'เครื่องใช้ไฟฟ้า');

-- --------------------------------------------------------

--
-- Table structure for table `repairrequest`
--

CREATE TABLE `repairrequest` (
  `requestId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `equipmentId` int(11) NOT NULL,
  `dateRequest` datetime NOT NULL,
  `apporveId` int(11) NOT NULL,
  `branchId` int(11) NOT NULL,
  `status` enum('ปิดงานเรียบร้อย','กำลังดำเนินการ','รอดำเนินการ') NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `Role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `workdetail`
--

CREATE TABLE `workdetail` (
  `workdetailId` int(11) NOT NULL,
  `statusId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `approve`
--
ALTER TABLE `approve`
  ADD PRIMARY KEY (`approveId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`branchId`),
  ADD KEY `UserId` (`UserId`);

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`equipmentId`);

--
-- Indexes for table `repairrequest`
--
ALTER TABLE `repairrequest`
  ADD PRIMARY KEY (`requestId`),
  ADD KEY `userId` (`userId`,`equipmentId`),
  ADD KEY `apporveId` (`apporveId`),
  ADD KEY `equipmentId` (`equipmentId`),
  ADD KEY `branchId` (`branchId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `workdetail`
--
ALTER TABLE `workdetail`
  ADD PRIMARY KEY (`workdetailId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `approve`
--
ALTER TABLE `approve`
  MODIFY `approveId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `branchId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `equipmentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `repairrequest`
--
ALTER TABLE `repairrequest`
  MODIFY `requestId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `workdetail`
--
ALTER TABLE `workdetail`
  MODIFY `workdetailId` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `repairrequest`
--
ALTER TABLE `repairrequest`
  ADD CONSTRAINT `repairrequest_ibfk_1` FOREIGN KEY (`apporveId`) REFERENCES `approve` (`approveId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `repairrequest_ibfk_2` FOREIGN KEY (`equipmentId`) REFERENCES `equipment` (`equipmentId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `repairrequest_ibfk_3` FOREIGN KEY (`branchId`) REFERENCES `branch` (`branchId`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
