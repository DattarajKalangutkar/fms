-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2022 at 01:46 PM
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
(1, 'SuperAdmin', 'superadmin', '123', '9545366932', 0, 0, 0, '2022-06-20 04:24:09', '1'),
(2, 'Admin', 'admin', '1234', '9545369111', 0, 0, 1, '2022-06-20 04:24:09', '1'),
(3, 'MI', 'MI', '202cb962ac59075b964b07152d234b70', '9545366922', 0, 0, 3, '2022-06-20 04:24:09', '1'),
(4, 'Dattaraj', 'Dattz', '202cb962ac59075b964b07152d234b70', '9545366928', 1, 0, 4, '2022-09-19 15:20:43', '1'),
(5, 'Saniya', 'Sanya', '202cb962ac59075b964b07152d234b70', '9545366978', 1, 1, 2, '2022-09-19 15:25:27', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`iId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `iId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
