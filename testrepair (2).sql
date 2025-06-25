-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2025 at 12:56 PM
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
-- Database: `testrepair`
--

-- --------------------------------------------------------

--
-- Table structure for table `authentication`
--

CREATE TABLE `authentication` (
  `AuthenticationId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `branchId` int(11) NOT NULL,
  `Branchcode` text NOT NULL,
  `branchName` text NOT NULL,
  `location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branchId`, `Branchcode`, `branchName`, `location`) VALUES
(1, 'F152', 'บริษัท ฟูจิ กูร์เม ครีเอชั่น จำกัด', 'โรงพยาบาลสมิติเวช ศรีนครินทร์'),
(2, 'C05', 'บริษัท อิชิบานยา มิดเวสท์ เอเซีย จำกัด', 'มาบุญครอง ชั้น7');

-- --------------------------------------------------------

--
-- Table structure for table `eqipment`
--

CREATE TABLE `eqipment` (
  `equipmentId` int(11) NOT NULL,
  `equipmentname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `eqipment`
--

INSERT INTO `eqipment` (`equipmentId`, `equipmentname`) VALUES
(1, 'จอคอม'),
(2, 'สายเเลน');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `messageId` int(11) NOT NULL,
  `reportProblemId` int(11) NOT NULL,
  `title` text NOT NULL,
  `detailcomment` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`messageId`, `reportProblemId`, `title`, `detailcomment`) VALUES
(1, 2, '', 'คอมพัง'),
(2, 1, 'เเจ้งทั่วไป', 's');

-- --------------------------------------------------------

--
-- Table structure for table `notirepair`
--

CREATE TABLE `notirepair` (
  `NotirepairId` int(11) NOT NULL,
  `messageId` int(11) NOT NULL,
  `user` text DEFAULT NULL,
  `datesave` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `notirepair`
--

INSERT INTO `notirepair` (`NotirepairId`, `messageId`, `user`, `datesave`) VALUES
(7, 1, '1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reportproblem`
--

CREATE TABLE `reportproblem` (
  `reportProblemId` int(11) NOT NULL,
  `reportProblemtype` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `reportproblem`
--

INSERT INTO `reportproblem` (`reportProblemId`, `reportProblemtype`) VALUES
(1, 'เเจ้งทั่วไป'),
(2, 'เเจ้งซ่อมอุปกรณ์ไอที'),
(3, 'เเจ้งสั่งซื้ออุปกรณ์');

-- --------------------------------------------------------

--
-- Table structure for table `title`
--

CREATE TABLE `title` (
  `titleId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authentication`
--
ALTER TABLE `authentication`
  ADD PRIMARY KEY (`AuthenticationId`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`branchId`);

--
-- Indexes for table `eqipment`
--
ALTER TABLE `eqipment`
  ADD PRIMARY KEY (`equipmentId`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`messageId`),
  ADD KEY `id` (`reportProblemId`);

--
-- Indexes for table `notirepair`
--
ALTER TABLE `notirepair`
  ADD PRIMARY KEY (`NotirepairId`),
  ADD KEY `messageId` (`messageId`);

--
-- Indexes for table `reportproblem`
--
ALTER TABLE `reportproblem`
  ADD PRIMARY KEY (`reportProblemId`);

--
-- Indexes for table `title`
--
ALTER TABLE `title`
  ADD PRIMARY KEY (`titleId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authentication`
--
ALTER TABLE `authentication`
  MODIFY `AuthenticationId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `branchId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `eqipment`
--
ALTER TABLE `eqipment`
  MODIFY `equipmentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `messageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notirepair`
--
ALTER TABLE `notirepair`
  MODIFY `NotirepairId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reportproblem`
--
ALTER TABLE `reportproblem`
  MODIFY `reportProblemId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `title`
--
ALTER TABLE `title`
  MODIFY `titleId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`reportProblemId`) REFERENCES `reportproblem` (`reportProblemId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `notirepair`
--
ALTER TABLE `notirepair`
  ADD CONSTRAINT `notirepair_ibfk_1` FOREIGN KEY (`messageId`) REFERENCES `message` (`messageId`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
