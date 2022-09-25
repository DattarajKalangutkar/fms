-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2022 at 02:40 PM
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
(1, 'Birth Certificate', 1, '2022-09-14 10:10:48', '1'),
(2, 'Construction Licenses', 1, '2022-09-18 13:53:10', '1'),
(3, 'Renewal Licenses', 1, '2022-09-18 13:53:10', '1'),
(4, 'Repair Licenses', 1, '2022-09-18 13:54:03', '1'),
(5, 'Revalidation of construction licences', 1, '2022-09-18 14:33:58', '1'),
(6, 'Occupancy certificate', 1, '2022-09-18 14:33:58', '1'),
(7, 'MSW Matters', 1, '2022-09-18 14:34:39', '1'),
(8, 'Collection of Rent', 1, '2022-09-18 14:34:39', '1'),
(9, 'Collection of House Tax', 1, '2022-09-18 14:35:11', '1'),
(10, 'Trade License', 1, '2022-09-18 14:35:11', '1'),
(11, 'Other fees and taxes', 1, '2022-09-18 14:35:44', '1'),
(12, 'Transfer of property', 1, '2022-09-18 14:35:44', '1'),
(13, 'Income certificates', 1, '2022-09-18 14:36:14', '1'),
(14, 'Lease cases of the council', 1, '2022-09-18 14:36:14', '1'),
(15, 'NOC for water and power service matters', 1, '2022-09-18 14:36:49', '1');

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
(2, '00003', '10dfsdf', '2022-01-02', '23', 1, '2resd', '2022-01-02', '2022-01-02', '3', 2022, 'Please Ignore', '2022-01-02', 0, 2, 1, '2022-09-14', '1'),
(3, '00003', 'T8989', '2022-09-24', 'Shilpa Kamat', 14, '234234', '2022-09-24', '2022-09-24', 'sdfsdf', 2022, '', '2022-09-24', 1, 2, 1, '2022-09-24', '1'),
(4, '00003', '24324', '2022-09-24', 'ssss', 13, 'sss', '2022-09-24', '2022-09-16', '213123', 2022, '', '2022-09-24', 1, 2, 1, '2022-09-24', '1'),
(5, '00003', 'T1212', '2022-09-25', 'Dattaraj Kalangutkar', 8, 'T1212/21', '2022-09-25', '2022-09-25', 'T1211/1212', 2022, '', '2022-09-25', 1, 2, 1, '2022-09-25', '1'),
(6, '00003', 'T909', '2022-09-25', 'Purva Kalangutkar', 1, 'T1212', '2022-09-25', '2022-09-25', 'T090/2323', 2022, '', '2022-09-25', 1, 2, 1, '2022-09-25', '1'),
(7, '00003', 'T0909', '2022-09-25', 'Nidhi Shetty', 12, 'T323', '2022-09-25', '2022-09-25', 't0909', 2022, '', '2022-09-25', 1, 2, 1, '2022-09-25', '1'),
(8, '00003', '123/121', '2022-09-10', 'Dattaraj', 12, '3434', '2022-09-17', '2022-09-22', 'sfsdf', 2022, '', '2022-09-25', 1, 2, 1, '2022-09-25', '1');

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
  `iLevel` int(10) NOT NULL,
  `dCreatedDate` datetime NOT NULL,
  `vStatus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`iId`, `vName`, `vUsername`, `vPassword`, `vPhone`, `iDepartmentId`, `iHod`, `iLevel`, `dCreatedDate`, `vStatus`) VALUES
(1, 'SuperAdmin', 'superadmin', '202cb962ac59075b964b07152d234b70', '9545366932', 0, 0, 0, '2022-06-20 04:24:09', '1'),
(2, 'Admin', 'admin', '202cb962ac59075b964b07152d234b70', '9545369111', 0, 0, 1, '2022-06-20 04:24:09', '1'),
(3, 'MI', 'MI', '202cb962ac59075b964b07152d234b70', '9545366922', 0, 0, 3, '2022-06-20 04:24:09', '1'),
(4, 'Dattaraj', 'Dattz', '202cb962ac59075b964b07152d234b70', '9545366928', 1, 0, 4, '2022-09-19 15:20:43', '1'),
(5, 'Saniya', 'Sanya', '202cb962ac59075b964b07152d234b70', '9545366978', 1, 1, 2, '2022-09-19 15:25:27', '1');

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
  MODIFY `iId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `service_registration_form`
--
ALTER TABLE `service_registration_form`
  MODIFY `iId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `statusform`
--
ALTER TABLE `statusform`
  MODIFY `iId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `iId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
