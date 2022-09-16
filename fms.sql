-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2022 at 07:28 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fms`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `iId` int(11) NOT NULL,
  `vName` varchar(255) NOT NULL,
  `dCreatedDate` datetime NOT NULL,
  `vStatus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`iId`, `vName`, `dCreatedDate`, `vStatus`) VALUES
(1, 'Technical', '2022-09-12 16:43:51', '1'),
(2, 'Non Technical', '2022-09-12 16:45:32', '1');

-- --------------------------------------------------------

--
-- Table structure for table `services_types`
--

CREATE TABLE `services_types` (
  `iId` int(11) NOT NULL,
  `vName` varchar(255) NOT NULL,
  `iDepartmentId` int(10) NOT NULL,
  `dCreatedDate` datetime NOT NULL,
  `vStatus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services_types`
--

INSERT INTO `services_types` (`iId`, `vName`, `iDepartmentId`, `dCreatedDate`, `vStatus`) VALUES
(1, 'Birth Certificate', 1, '2022-09-14 10:10:48', '1');

-- --------------------------------------------------------

--
-- Table structure for table `service_registration_form`
--

CREATE TABLE `service_registration_form` (
  `iId` int(10) NOT NULL,
  `vServiceSrNo` varchar(255) NOT NULL,
  `vServiceInwardletterno` varchar(255) NOT NULL,
  `dServiceInwardletterdate` date NOT NULL,
  `vReceivedFrom` varchar(255) NOT NULL,
  `iServiceId` int(10) NOT NULL,
  `vReplyToLetterNo` varchar(255) NOT NULL,
  `dReplyToLetterDate` date NOT NULL,
  `dReceiptDate` date NOT NULL,
  `vReplyNo` varchar(255) NOT NULL,
  `dReplyDate` int(11) NOT NULL,
  `vRemarks` varchar(255) NOT NULL,
  `dEntryDate` date NOT NULL,
  `iCreatedBy` int(10) NOT NULL,
  `iApprovedUserId` int(10) NOT NULL,
  `iApprovalStatus` int(11) NOT NULL,
  `dCreatedDate` date NOT NULL,
  `vStatus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_registration_form`
--

INSERT INTO `service_registration_form` (`iId`, `vServiceSrNo`, `vServiceInwardletterno`, `dServiceInwardletterdate`, `vReceivedFrom`, `iServiceId`, `vReplyToLetterNo`, `dReplyToLetterDate`, `dReceiptDate`, `vReplyNo`, `dReplyDate`, `vRemarks`, `dEntryDate`, `iCreatedBy`, `iApprovedUserId`, `iApprovalStatus`, `dCreatedDate`, `vStatus`) VALUES
(2, '00003', '10dfsdf', '2022-01-02', '23', 1, '2resd', '2022-01-02', '2022-01-02', '3', 2022, 'Please Ignore', '2022-01-02', 0, 2, 1, '2022-09-14', '1');

-- --------------------------------------------------------

--
-- Table structure for table `statusform`
--

CREATE TABLE `statusform` (
  `iId` int(10) NOT NULL,
  `vName` varchar(255) NOT NULL,
  `dCreatedDate` datetime NOT NULL,
  `vStatus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statusform`
--

INSERT INTO `statusform` (`iId`, `vName`, `dCreatedDate`, `vStatus`) VALUES
(1, 'Created', '2022-09-16 15:53:44', '1'),
(2, 'Updated', '2022-09-16 15:53:49', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `iId` int(10) NOT NULL,
  `vName` varchar(255) NOT NULL,
  `vUsername` varchar(255) NOT NULL,
  `vPassword` varchar(255) NOT NULL,
  `vPhone` varchar(255) NOT NULL,
  `iDepartmentId` int(10) NOT NULL,
  `iHod` int(10) NOT NULL DEFAULT '0',
  `dCreatedDate` datetime NOT NULL,
  `vStatus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`iId`, `vName`, `vUsername`, `vPassword`, `vPhone`, `iDepartmentId`, `iHod`, `dCreatedDate`, `vStatus`) VALUES
(1, 'Dattaraj', 'Dattz', '202cb962ac59075b964b07152d234b70', '9545366928', 1, 0, '2022-09-16 16:33:08', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`iId`);

--
-- Indexes for table `services_types`
--
ALTER TABLE `services_types`
  ADD PRIMARY KEY (`iId`);

--
-- Indexes for table `service_registration_form`
--
ALTER TABLE `service_registration_form`
  ADD PRIMARY KEY (`iId`);

--
-- Indexes for table `statusform`
--
ALTER TABLE `statusform`
  ADD PRIMARY KEY (`iId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`iId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `iId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services_types`
--
ALTER TABLE `services_types`
  MODIFY `iId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `service_registration_form`
--
ALTER TABLE `service_registration_form`
  MODIFY `iId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `statusform`
--
ALTER TABLE `statusform`
  MODIFY `iId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `iId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
