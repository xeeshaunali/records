-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 26, 2023 at 07:42 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `record`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `ctccc`
--

DROP TABLE IF EXISTS `ctccc`;
CREATE TABLE IF NOT EXISTS `ctccc` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `underSection` varchar(100) DEFAULT NULL,
  `courtname` varchar(100) DEFAULT NULL,
  `casecateg` varchar(100) DEFAULT NULL,
  `caseno` int(50) DEFAULT NULL,
  `year` varchar(15) DEFAULT NULL,
  `partyone` varchar(150) DEFAULT NULL,
  `partytwo` varchar(150) DEFAULT NULL,
  `crimeno` int(15) DEFAULT NULL,
  `crimeyear` int(15) DEFAULT NULL,
  `s_rbf` varchar(100) DEFAULT NULL,
  `dateInst` date DEFAULT NULL,
  `dateSubmission` date DEFAULT NULL,
  `dateDisp` date DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `cost` int(50) DEFAULT NULL,
  `remarks` varchar(250) DEFAULT NULL,
  `ps` varchar(100) DEFAULT NULL,
  `row` int(20) DEFAULT NULL,
  `shelf` varchar(20) DEFAULT NULL,
  `bundle` int(11) DEFAULT NULL,
  `file` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=106 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ctccc`
--

INSERT INTO `ctccc` (`id`, `underSection`, `courtname`, `casecateg`, `caseno`, `year`, `partyone`, `partytwo`, `crimeno`, `crimeyear`, `s_rbf`, `dateInst`, `dateSubmission`, `dateDisp`, `status`, `cost`, `remarks`, `ps`, `row`, `shelf`, `bundle`, `file`) VALUES
(69, NULL, 'DJ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(70, NULL, 'DJ', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(71, NULL, 'DJ', 'criminal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(72, NULL, 'DJ', 'criminal', 1, '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(73, NULL, 'DJ', 'criminal', 1, '2023', 'sdsdsd', 'sdsd', 1, 2023, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(74, NULL, 'DJ', 'criminal', 1, '1', '1', '1', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(75, NULL, 'DJ', 'criminal', 1, '1', '1', '1', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(76, '1', 'DJ', 'criminal', 1, '1', '1', '1', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(77, '1', NULL, 'criminal', 1, '1', '1', '1', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Rajri', NULL, NULL, NULL, NULL),
(78, '1', '', 'criminal', 1, '1', '1', '1', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(79, '1', 'DJ', 'criminal', 1, '1', '1', '1', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(80, '1', 'CJJM-MANJHAND', 'other', 1, '1', '1', '1', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(81, '1', 'DJ', 'criminal', 1, '1', '1', '1', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL),
(82, '1', 'DJ', 'criminal', 4, '1', '1', '1', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jamshoro', NULL, NULL, NULL, NULL),
(83, '1', 'DJ', 'criminal', 1, '1', '1', '1', 1, 1, NULL, '2023-12-23', NULL, NULL, NULL, NULL, NULL, 'Jamshoro', NULL, NULL, NULL, NULL),
(84, '1', 'DJ', 'criminal', 1, '1', '1', '1', 1, 1, NULL, '2023-12-23', NULL, '2023-12-23', NULL, NULL, NULL, 'Jamshoro', NULL, NULL, NULL, NULL),
(85, '1', 'DJ', 'criminal', 1, '1', '1', '1', 1, 1, NULL, '2023-12-23', '2023-02-12', '2023-12-23', NULL, NULL, NULL, 'Jamshoro', NULL, NULL, NULL, NULL),
(86, '1', 'DJ', 'criminal', 1, '1', '1', '1', 1, 1, 'S1R1B1F1', '2023-12-23', '2023-02-12', '2023-12-23', NULL, NULL, NULL, 'Jamshoro', NULL, NULL, NULL, NULL),
(87, '1', 'DJ', 'criminal', 1, '1', '1', '1', 1, 1, 'S1R1B1F1', '2023-02-12', '2023-02-22', '2023-02-12', 'LyingWithOneWindow', NULL, NULL, 'Jamshoro', NULL, NULL, NULL, NULL),
(88, '1', 'DJ', 'criminal', 1, '1', '1', '1', 1, 1, 'S1R1B1F1', '2023-12-23', '2023-12-23', '2023-12-23', 'LyingWithOneWindow', NULL, 'sdd', 'Jamshoro', NULL, NULL, NULL, NULL),
(89, '1', 'DJ', 'criminal', 1, '1', '1', '1', 1, 1, 'S1R1B1F1', '2023-02-23', '2023-02-02', '2023-02-23', 'LyingWithOneWindow', NULL, 'Case Disposed', 'Jamshoro', NULL, NULL, NULL, NULL),
(90, '1', 'DJ', 'criminal', 1, '1', '1', '1', 1, 1, 'S1R1B1F1', '0002-02-23', '2023-02-02', '2023-02-02', 'LyingWithRecord1', NULL, 'Disposed', 'Jamshoro', NULL, NULL, NULL, NULL),
(91, '1', 'DJ', 'criminal', 1, '1', '1', '1', 1, 1, 'S1R1B1F1', '2023-12-23', '2023-02-28', '2023-12-23', 'LyingWithRecord1', NULL, '2323', 'Jamshoro', NULL, NULL, NULL, NULL),
(92, '1', 'DJ', 'criminal', 1, '1', '1', '1', 1, 1, 'S1R1B1F1', '2023-12-23', '2023-12-23', '2023-12-23', 'LyingWithRecord2', NULL, 'Disposed', 'Jamshoro', NULL, NULL, NULL, NULL),
(93, '1', 'DJ', 'criminal', 1, '1', '1', '1', 1, 1, 'S1R1B1F1', '2023-12-23', '2023-12-23', '2023-12-23', 'DistrictTransffer', NULL, 'Tryinggggg', 'Jamshoro', NULL, NULL, NULL, NULL),
(94, '1', 'DJ', 'criminal', 1, '1', '1', '1', 1, 1, 'dsdd', '2023-02-03', '2023-02-02', '2023-02-02', 'LyingWithRecord2', NULL, 'sdd', 'Jamshoro', NULL, NULL, NULL, NULL),
(95, '302 324', 'DJ', 'criminal', 1, '2023', 'The State', 'Me My Self and Irine', 1, 2023, 'S1R1B1F1', '2021-12-23', '2023-12-23', '2022-12-23', 'LyingWithRecord', NULL, 'Hyderabad District', 'Jamshoro', NULL, NULL, NULL, NULL),
(96, '302 324', 'ADJ-I', 'criminal', 1, '2023', 'The State', 'Me My Self and Irine', 1, 2023, 'S1R1B1F1', '2021-12-23', '2023-12-23', '2022-12-23', 'LyingWithOneWindow', NULL, 'In Record', 'Jamshoro', NULL, NULL, NULL, NULL),
(97, '302 324', 'ADJ-II', 'criminal', 1, '2023', 'The State', 'Me My Self and Irine', 1, 2023, 'S1R1B1F1', '2021-12-23', '2023-12-23', '2022-12-23', 'LyingWithClerk', NULL, 'Clerk', 'Jamshoro', NULL, NULL, NULL, NULL),
(98, '302 324', 'DJ', 'criminal', 1, '2023', 'The State', 'Me My Self and Irine', 1, 2023, 'S1R1B1F1', '2021-12-23', '2023-12-23', '2022-12-23', 'LyingWithRecord', NULL, 'Trying to save and fetch record', 'Jamshoro', NULL, NULL, NULL, NULL),
(99, '302 324', 'DJ', 'criminal', 1, '2023', 'The State', 'Me MY Self And Irine', 1, 2023, '', '2023-12-26', '2023-12-26', '2023-12-26', 'LyingWithClerk', NULL, 'dfddfdf', 'Jamshoro', NULL, NULL, NULL, NULL),
(100, '302 324', 'DJ', 'criminal', 1, '2023', 'sdfsdf', 'sdsdsd', 1, 2023, NULL, '2023-12-26', '2023-12-26', '2023-12-26', 'LyingWithClerk', NULL, 'sdsd', 'Jamshoro', NULL, '', NULL, NULL),
(101, '302 324', 'DJ', 'criminal', 1, '2023', 'The State', 'Me My Self and Irine', 1, 2023, NULL, '2023-12-26', '2023-12-26', '2023-12-26', 'LyingWithOneWindow', NULL, 'asdada', 'Jamshoro', NULL, 'A', NULL, NULL),
(102, '23232', 'DJ', 'criminal', 1, '2023', 'Ty', 'sdsadd', 1, 2023, NULL, '2023-12-12', '2023-12-12', '2023-12-12', 'LyingWithOneWindow', NULL, 'dwssd', 'Jamshoro', NULL, 'V', NULL, NULL),
(103, '302 324', 'DJ', 'criminal', 1, '2023', 'dfdsfdsf', 'dssdsd', 1, 2023, NULL, '2023-12-26', '2023-12-26', '2023-12-26', 'LyingWithOneWindow', NULL, 'sdfdf', 'Jamshoro', 1, 'V', 1, 1),
(104, '302 324 PPC', 'CJJM-MANJHAND', 'Misc', 200, '2023', 'The State', 'Me My Self and Irine', 200, 2023, NULL, '2021-12-26', '2023-12-26', '2022-12-26', 'LyingWithRecord', NULL, 'File is in record Room', 'Jamshoro', 200, 'A', 200, 200),
(105, '23', 'DJ', 'criminal', 1, '1', '1', '1', 1, 1, NULL, '2023-12-26', '2023-12-26', '2023-12-26', 'LyingWithOneWindow', NULL, 'dsadd', 'Jamshoro', 1, 'A', 1, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
