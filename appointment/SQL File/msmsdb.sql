-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2023 at 10:10 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `msmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `poll`
--

CREATE TABLE `poll` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `feedback` text NOT NULL,
  `suggestions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `poll`
--

INSERT INTO `poll` (`id`, `name`, `email`, `phone`, `feedback`, `suggestions`) VALUES
(1, '', '', '', 'poor', 'dwe'),
(2, '', '', '', 'good', 'aascd'),
(3, '', '', '', 'good', 'aascd'),
(4, '', '', '', 'excellent', 'jenil'),
(5, 'Jenil', 'zadafiyajenil84@gmail.com', '9999999999', 'excellent', 'hi'),
(6, 'Jenil', 'zadafiyajenil84@gmail.com', '9999999999', 'excellent', 'hi'),
(7, 'jenil', 'admin@admin.com', '9999999999', 'excellent', 'hi'),
(8, 'dwef', 'df@gmail.com', 'dsf', 'neutral', 'wdef'),
(9, 'Jenil', 'zadafiyajenil84@gmail.com', '9999999999', 'excellent', 'hloooo'),
(10, 'k', 'zadafiyajenil84@gmail.com', '9999999999', 'excellent', 'hi'),
(11, 'Jenil', 'zadafiyajenil84@gmail.com', '9999999999', 'excellent', 'defrv'),
(12, 'feedback', 'tester1@gmail.com', '9999999999', 'excellent', 'jol');

-- --------------------------------------------------------

--
-- Table structure for table `provider`
--

CREATE TABLE `provider` (
  `ID` int(10) NOT NULL,
  `ProviderName` char(50) DEFAULT NULL,
  `UserName` char(50) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `providerRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `provider`
--

INSERT INTO `provider` (`ID`, `ProviderName`, `UserName`, `MobileNumber`, `Email`, `Password`, `providerRegdate`) VALUES
(1, 'Provider1', 'provider01', 7898799798, 'provider1@gmail.com', '202cb962ac59075b964b07152d234b70', '2019-07-25 00:51:50');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` char(50) DEFAULT NULL,
  `UserName` char(50) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'Admin', 'admin', 7898799798, 'tester1@gmail.com', '202cb962ac59075b964b07152d234b70', '2019-07-25 06:21:50');

-- --------------------------------------------------------

--
-- Table structure for table `tblappointment`
--

CREATE TABLE `tblappointment` (
  `ID` int(10) NOT NULL,
  `AptNumber` varchar(80) DEFAULT NULL,
  `Name` varchar(120) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `PhoneNumber` bigint(11) DEFAULT NULL,
  `Address` varchar(155) DEFAULT NULL,
  `AptDate` varchar(120) DEFAULT NULL,
  `AptTime` varchar(120) DEFAULT NULL,
  `Services` varchar(120) DEFAULT NULL,
  `ApplyDate` timestamp NULL DEFAULT current_timestamp(),
  `Remark` varchar(250) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `RemarkDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblappointment`
--

INSERT INTO `tblappointment` (`ID`, `AptNumber`, `Name`, `Email`, `PhoneNumber`, `Address`, `AptDate`, `AptTime`, `Services`, `ApplyDate`, `Remark`, `Status`, `RemarkDate`) VALUES
(4, '578797544', 'Anuj Kumar', 'phpgurukulofficial@gmail.com', 123456789, NULL, '8/30/2019', '1:30am', 'Test', '2019-08-21 16:13:13', 'Selected', '1', '2021-07-19 12:24:48'),
(5, '899118550', 'bb', 'bgfdh@fdfdsf.com', 4234235423, NULL, '8/27/2019', '1:30am', 'Loreal Hair Color(Full)', '2019-08-21 16:14:14', 'lkj', '1', '2023-05-18 17:16:30'),
(6, '621107928', 'ABC', 'abc@gmail.com', 1234567890, NULL, '8/27/2019', '1:30am', 'Rebonding', '2019-08-21 16:22:25', 'Testing', '2', '2019-08-21 16:24:10'),
(7, '184242778', 'Harish', 'har@gmail.com', 4654646546, NULL, '2021-07-23', '10:38', 'MUSTACHE TRIM', '2021-07-20 06:40:43', 'selected', '1', '2021-07-21 07:40:06'),
(8, '777343097', 'Manish', 'manish@gmail.com', 2678979789, NULL, '2021-07-24', '13:23', 'Hair Cut', '2021-07-20 06:52:33', 'selected', '1', '2021-07-25 17:32:06'),
(9, '290594099', 'Yash', 'yash@gmail.com', 4654654654, NULL, '2021-07-24', '14:36', 'Hair Cut', '2021-07-21 08:05:47', '', '', '2021-07-25 17:32:08'),
(10, '128617343', 'Dinesh', 'dinesh@gmail.com', 6876876868, NULL, '2021-07-25', '15:30', 'Hair Cut', '2021-07-23 04:56:47', '', '', '2021-07-25 17:32:11'),
(11, '600991456', 'Test', 'test@gmail.com', 7987987897, NULL, '2021-07-24', '15:40', 'Hair Cut', '2021-07-23 05:10:56', 'Selected', '1', '2021-07-25 17:32:14'),
(12, '336388269', 'Anuj', 'ak@gmail.com', 1234569870, NULL, '2021-07-30', '15:52', 'Hair Cut', '2021-07-25 17:22:37', 'Confirmed', '1', '2021-07-25 17:32:16'),
(13, '204211477', 'Zadafiya Jenil', 'admin@admin.com', 9898988656, 'B-22 Prerna Bunglows opp haridham harivilla nr bapa sitaram chowk new naroda Ahmedabad', '2023-05-20', '12:47', 'ABC', '2023-05-18 17:17:07', '', '', '0000-00-00 00:00:00'),
(14, '945783394', 'Zadafiya Jenil', 'jenil@gmail.com', 9104671383, 'B-22 Prerna Bunglows opp haridham harivilla nr bapa sitaram chowk new naroda Ahmedabad', '2023-05-18', '22:00', 'Tradinational Cut', '2023-05-18 17:25:27', '', '', '0000-00-00 00:00:00'),
(15, '841445213', 'Zadafiya Jenil', 'jenil@gmail.com', 9104671383, 'B-22 Prerna Bunglows opp haridham harivilla nr bapa sitaram chowk new naroda Ahmedabad', '2023-05-18', '22:00', 'Tradinational Cut', '2023-05-18 17:33:09', '', '', '0000-00-00 00:00:00'),
(16, '299499067', 'Zadafiya Jenil', 'jenil@gmail.com', 9104671383, 'B-22 Prerna Bunglows opp haridham harivilla nr bapa sitaram chowk new naroda Ahmedabad', '2023-05-24', '23:17', 'ABC', '2023-05-18 17:44:12', '', '', '0000-00-00 00:00:00'),
(17, '210800041', 'Zadafiya Jenil', 'jenil@gmail.com', 9104671383, 'B-22 Prerna Bunglows opp haridham harivilla nr bapa sitaram chowk new naroda Ahmedabad', '2023-05-24', '23:17', 'ABC', '2023-05-18 17:45:02', '', '', '0000-00-00 00:00:00'),
(18, '573162553', 'Zadafiya Jenil', 'zadafiyajenil84@gmail.com', 9898988656, 'B-22 Prerna Bunglows opp haridham harivilla nr bapa sitaram chowk new naroda Ahmedabad', '2023-05-31', '10:50', 'Complete House Cleaning', '2023-05-30 05:17:48', 'kl', '1', '2023-05-30 05:19:15'),
(19, '916944345', 'BAUSERVICE', 'zadafiyajenil84@gmail.com', 9104671383, 'B-22 Prerna Bunglows opp haridham harivilla nr bapa sitaram chowk new naroda Ahmedabad', '2023-05-26', '12:05', 'Complete House Cleaning', '2023-05-31 06:32:00', '', '', '0000-00-00 00:00:00'),
(20, '124889251', 'BAUSERVICE', 'zadafiyajenil84@gmail.com', 9104671383, 'B-22 Prerna Bunglows opp haridham harivilla nr bapa sitaram chowk new naroda Ahmedabad', '2023-05-26', '12:05', 'Complete House Cleaning', '2023-05-31 06:33:29', '', '', '0000-00-00 00:00:00'),
(21, '485870994', 'BAUSERVICE', 'jenilzadafiya0077@gmail.com', 9104671383, 'B-22 Prerna Bunglows opp haridham harivilla nr bapa sitaram chowk new naroda Ahmedabad', '2023-05-25', '14:05', 'Plumbing', '2023-05-31 06:35:27', '', '', '0000-00-00 00:00:00'),
(22, '563138831', 'Zadafiya Jenil', 'zadafiyajenil84@gmail.com', 9104671383, 'B-22 Prerna Bunglows opp haridham harivilla nr bapa sitaram chowk new naroda Ahmedabad', '2023-05-27', '12:11', 'Plumbing', '2023-05-31 06:39:44', '', '', '0000-00-00 00:00:00'),
(23, '587302352', 'BAUSERVICE', 'jenilzadafiya0077@gmail.com', 9104671383, 'B-22 Prerna Bunglows opp haridham harivilla nr bapa sitaram chowk new naroda Ahmedabad', '2023-06-03', '12:17', 'Plumbing', '2023-05-31 06:47:17', '', '', '0000-00-00 00:00:00'),
(24, '765191591', 'BAUSERVICE', 'jenilzadafiya0077@gmail.com', 9104671383, 'B-22 Prerna Bunglows opp haridham harivilla nr bapa sitaram chowk new naroda Ahmedabad', '2023-06-02', '16:38', 'Complete House Cleaning', '2023-05-31 07:08:29', '', '', '0000-00-00 00:00:00'),
(25, '855325017', 'Zadafiya Jenil', 'zadafiyajenil84@gmail.com', 9104671383, 'Ahmedabad', '2023-07-07', '21:18', 'Complete House Cleaning', '2023-06-02 15:43:22', '', '', '0000-00-00 00:00:00'),
(26, '401428651', 'Zadafiya Jenil', 'zadafiyajenil84@gmail.com', 9104671383, 'B-22 Prerna Bunglows opp haridham harivilla nr bapa sitaram chowk new naroda Ahmedabad', '2023-06-23', '12:18', 'Plumbing', '2023-06-02 15:48:33', '', '', '0000-00-00 00:00:00'),
(27, '746342855', 'Zadafiya Jenil', 'zadafiyajenil84@gmail.com', 9104671383, 'B-22 Prerna Bunglows opp haridham harivilla nr bapa sitaram chowk new naroda Ahmedabad', '2023-06-30', '21:48', 'Painting Work', '2023-06-02 16:14:52', '', '', '0000-00-00 00:00:00'),
(28, '836791780', 'Zadafiya Jenil', 'zadafiyajenil84@gmail.com', 9104671383, 'B-22 Prerna Bunglows opp haridham harivilla nr bapa sitaram chowk new naroda Ahmedabad', '2023-07-07', '21:02', 'Complete House Cleaning', '2023-06-02 16:29:37', '', '', '0000-00-00 00:00:00'),
(29, '318776484', 'BAUSERVICE', 'zadafiyajenil84@gmail.com', 9104671383, 'B-22 Prerna Bunglows opp haridham harivilla nr bapa sitaram chowk new naroda Ahmedabad', '2023-06-30', '22:03', 'Furniture', '2023-06-02 16:30:55', '', '', '0000-00-00 00:00:00'),
(30, '548101213', 'BAUSERVICE', 'zadafiyajenil84@gmail.com', 9898988656, 'B-22 Prerna Bunglows opp haridham harivilla nr bapa sitaram chowk new naroda Ahmedabad', '2023-07-08', '15:01', 'Painting Work', '2023-06-02 16:32:04', '', '', '0000-00-00 00:00:00'),
(31, '509550453', 'preet', 'preetppatel03@gmail.com', 9898988656, 'Ahmedabad', '2023-07-08', '22:10', 'Painting Work', '2023-06-02 16:35:19', '', '', '0000-00-00 00:00:00'),
(32, '', 'Zadafiya Jenil', 'zadafiyajenil84@gmail.com', 9104671383, 'B-22 Prerna Bunglows opp haridham harivilla nr bapa sitaram chowk new naroda Ahmedabad', '2023-07-01', '16:08', 'Painting Work', '2023-06-02 16:39:28', '', '', '0000-00-00 00:00:00'),
(33, '', 'Zadafiya Jenil', 'zadafiyajenil84@gmail.com', 9104671383, 'B-22 Prerna Bunglows opp haridham harivilla nr bapa sitaram chowk new naroda Ahmedabad', '2023-07-08', '16:09', 'Plumbing', '2023-06-02 16:39:54', '', '', '0000-00-00 00:00:00'),
(34, '', 'BAUSERVICE', 'zadafiyajenil84@gmail.com', 9898988656, 'B-22 Prerna Bunglows opp haridham harivilla nr bapa sitaram chowk new naroda Ahmedabad', '2023-07-01', '22:17', 'Painting Work', '2023-06-02 16:41:09', '', '', '0000-00-00 00:00:00'),
(35, '647a1dd226be3', 'Zadafiya Jenil', 'zadafiyajenil84@gmail.com', 9898988656, 'Ahmedabad', '2023-08-09', '22:26', 'Painting Work', '2023-06-02 16:50:33', '', '', '0000-00-00 00:00:00'),
(36, '', 'Zadafiya Jenil', 'zadafiyajenil84@gmail.com', 9898988656, 'Ahmedabad', '2023-07-08', '22:28', 'Painting Work', '2023-06-02 16:52:20', '', '', '0000-00-00 00:00:00'),
(37, '', 'Zadafiya Jenil', 'zadafiyajenil84@gmail.com', 9898988656, 'Ahmedabad', '2023-07-08', '22:28', 'Painting Work', '2023-06-02 17:10:30', '', '', '0000-00-00 00:00:00'),
(38, '', 'Zadafiya Jenil', 'zadafiyajenil84@gmail.com', 9898988656, 'B-22 Prerna Bunglows opp haridham harivilla nr bapa sitaram chowk new naroda Ahmedabad', '2023-06-21', '12:05', 'Painting Work', '2023-06-06 14:35:31', '', '', '0000-00-00 00:00:00'),
(39, '513176452', 'BAUSERVICE', 'zadafiyajenil84@gmail.com', 9104671383, 'Testing', '2023-06-07', '23:12', 'Complete House Cleaning', '2023-06-06 15:43:01', '', '', '0000-00-00 00:00:00'),
(40, '191743765', 'BAUSERVICE', 'zadafiyajenil84@gmail.com', 9104671383, 'Testing', '2023-06-07', '23:12', 'Complete House Cleaning', '2023-06-06 15:44:18', '', '', '0000-00-00 00:00:00'),
(41, '175721358', 'BAUSERVICE', 'zadafiyajenil84@gmail.com', 9104671383, 'Testing', '2023-06-07', '23:12', 'Complete House Cleaning', '2023-06-06 15:45:12', '', '', '0000-00-00 00:00:00'),
(42, '256954521', 'Zadafiya Jenil', 'zadafiyajenil84@gmail.com', 9104671383, 'Ahmedabad', '2023-06-22', '12:16', 'Complete House Cleaning', '2023-06-06 15:46:49', 'ok', '1', '2023-06-06 16:08:54'),
(43, '821119762', 'Zadafiya Jenil', 'zadafiyajenil84@gmail.com', 9104671383, 'Ahmedabad', '2023-06-22', '12:16', 'Complete House Cleaning', '2023-06-06 16:12:26', '', '', '0000-00-00 00:00:00'),
(44, '154425310', 'Zadafiya Jenil', 'zadafiyajenil84@gmail.com', 9104671383, 'Ahmedabad', '2023-06-22', '12:16', 'Complete House Cleaning', '2023-06-06 16:13:14', '', '', '0000-00-00 00:00:00'),
(45, '736509769', 'BAUSERVICE', 'zadafiyajenil84@gmail.com', 9898988656, 'B-22 Prerna Bunglows opp haridham harivilla nr bapa sitaram chowk new naroda Ahmedabad', '2023-06-25', '21:51', 'Complete House Cleaning', '2023-06-06 16:21:13', '', '', '0000-00-00 00:00:00'),
(46, '445430970', 'BAUSERVICE', 'zadafiyajenil84@gmail.com', 9898988656, 'B-22 Prerna Bunglows opp haridham harivilla nr bapa sitaram chowk new naroda Ahmedabad', '2023-06-25', '21:51', 'Complete House Cleaning', '2023-06-06 16:33:53', '', '', '0000-00-00 00:00:00'),
(47, '504290925', 'BAUSERVICE', 'zadafiyajenil84@gmail.com', 9898988656, 'B-22 Prerna Bunglows opp haridham harivilla nr bapa sitaram chowk new naroda Ahmedabad', '2023-06-25', '21:51', 'Complete House Cleaning', '2023-06-06 16:35:48', ',m', '2', '2023-06-06 16:41:29'),
(48, '386968175', 'Zadafiya Jenil', 'jenilzadafiya0077@gmail.com', 9104671383, 'Ahmedabad', '2023-06-19', '14:31', 'Painting Work', '2023-06-06 17:01:48', '', '', '0000-00-00 00:00:00'),
(49, '309962829', 'Zadafiya Jenil', 'jenilzadafiya0077@gmail.com', 9104671383, 'Ahmedabad', '2023-06-19', '14:31', 'Painting Work', '2023-06-06 17:02:59', '', '', '0000-00-00 00:00:00'),
(50, '261789663', 'Zadafiya Jenil', 'jenilzadafiya0077@gmail.com', 9104671383, 'Ahmedabad', '2023-06-19', '14:31', 'Painting Work', '2023-06-06 17:06:29', '', '', '0000-00-00 00:00:00'),
(51, '449163335', 'Zadafiya Jenil', 'jenilzadafiya0077@gmail.com', 9104671383, 'Ahmedabad', '2023-06-19', '14:31', 'Furniture', '2023-06-06 17:06:40', '', '', '0000-00-00 00:00:00'),
(52, '625012202', 'BAUSERVICE', 'zadafiyajenil84@gmail.com', 9104671383, 'B-22 Prerna Bunglows opp haridham harivilla nr bapa sitaram chowk new naroda Ahmedabad', '2023-06-30', '22:40', 'Furniture', '2023-06-06 17:06:54', '', '', '0000-00-00 00:00:00'),
(53, '247870477', 'BAUSERVICE', 'zadafiyajenil84@gmail.com', 9104671383, 'B-22 Prerna Bunglows opp haridham harivilla nr bapa sitaram chowk new naroda Ahmedabad', '2023-06-30', '22:40', 'Furniture', '2023-06-06 17:08:11', '', '', '0000-00-00 00:00:00'),
(54, '536756238', 'Zadafiya Jenil', 'zadafiyajenil84@gmail.com', 9104671383, 'B-22 Prerna Bunglows opp haridham harivilla nr bapa sitaram chowk new naroda Ahmedabad', '2023-06-29', '23:35', 'Painting Work', '2023-06-06 18:01:01', '', '', '0000-00-00 00:00:00'),
(55, '665702877', 'BAUSERVICE', 'zadafiyajenil84@gmail.com', 9104671383, 'Ahmedabad', '2023-06-28', '23:39', 'Complete House Cleaning', '2023-06-06 18:04:58', '', '', '0000-00-00 00:00:00'),
(56, '181629122', 'Zadafiya Jenil', 'zadafiyajenil84@gmail.com', 9104671383, 'Ahmedabad', '2023-06-22', '23:41', 'Complete House Cleaning', '2023-06-06 18:06:56', '', '', '0000-00-00 00:00:00'),
(57, '276651094', 'Zadafiya Jenil', 'zadafiyajenil84@gmail.com', 9104671383, 'B-22 Prerna Bunglows opp haridham harivilla nr bapa sitaram chowk new naroda Ahmedabad', '2023-06-24', '03:31', 'Complete House Cleaning', '2023-06-07 06:01:59', '', '', '0000-00-00 00:00:00'),
(58, '116847079', 'Zadafiya Jenil', 'zadafiyajenil84@gmail.com', 9104671383, 'B-22 Prerna Bunglows opp haridham harivilla nr bapa sitaram chowk new naroda Ahmedabad', '2023-06-16', '11:57', 'Painting Work', '2023-06-07 06:23:00', '', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblcustomers`
--

CREATE TABLE `tblcustomers` (
  `ID` int(10) NOT NULL,
  `Name` varchar(120) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(11) DEFAULT NULL,
  `Gender` enum('Female','Male','Transgender') DEFAULT NULL,
  `Details` mediumtext DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblcustomers`
--

INSERT INTO `tblcustomers` (`ID`, `Name`, `Email`, `MobileNumber`, `Gender`, `Details`, `CreationDate`, `UpdationDate`) VALUES
(2, 'Rahul Singh', 'singh@gmail.com', 5565565656, 'Male', 'Taken haircut by him', '2019-07-26 11:10:02', NULL),
(5, 'Test user', 'testuser@gmail.com', 1234567890, 'Female', 'Test', '2019-08-21 16:24:53', '2019-08-21 16:25:11'),
(6, 'Manish', 'manish@gmail.com', 9879879798, 'Male', 'vjhgjhghg;lk;lklnhfjkhkjfnkl\r\nlkjklfjlkjlkc jjlkj\r\nl;ljlkj lkcjtkrjkjne', '2021-07-21 07:42:54', NULL),
(7, 'Anuj kumar', 'ak@gmail.com', 1234567899, 'Transgender', 'Test', '2021-07-25 17:25:54', '2021-07-25 17:26:31'),
(8, 'Zadafiya Jenil', 'zadafiyajenil84@gmail.com', 9898989898, 'Male', 'ok', '2023-06-06 16:10:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblinvoice`
--

CREATE TABLE `tblinvoice` (
  `id` int(11) NOT NULL,
  `Userid` int(11) DEFAULT NULL,
  `ServiceId` int(11) DEFAULT NULL,
  `BillingId` int(11) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblinvoice`
--

INSERT INTO `tblinvoice` (`id`, `Userid`, `ServiceId`, `BillingId`, `PostingDate`) VALUES
(1, 2, 7, 600922156, '2021-07-21 07:48:58'),
(2, 2, 9, 600922156, '2021-07-21 07:48:58'),
(3, 5, 7, 777590972, '2021-07-23 05:16:41'),
(4, 5, 9, 777590972, '2021-07-23 05:16:41'),
(6, 7, 9, 631074383, '2021-07-25 17:26:51'),
(7, 7, 15, 631074383, '2021-07-25 17:26:51'),
(8, 2, 1, 373085105, '2023-05-30 05:18:50'),
(9, 2, 2, 219615357, '2023-05-30 05:19:55'),
(10, 2, 2, 855867446, '2023-06-06 16:10:02'),
(11, 8, 2, 420828144, '2023-06-06 16:10:32'),
(12, 8, 3, 420828144, '2023-06-06 16:10:32'),
(13, 2, 1, 300119839, '2023-06-07 07:37:41');

-- --------------------------------------------------------

--
-- Table structure for table `tblpage`
--

CREATE TABLE `tblpage` (
  `ID` int(10) NOT NULL,
  `PageType` varchar(200) DEFAULT NULL,
  `PageTitle` mediumtext DEFAULT NULL,
  `PageDescription` mediumtext DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `UpdationDate` date DEFAULT NULL,
  `Timing` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblpage`
--

INSERT INTO `tblpage` (`ID`, `PageType`, `PageTitle`, `PageDescription`, `Email`, `MobileNumber`, `UpdationDate`, `Timing`) VALUES
(1, 'aboutus', 'About Us', '        Our main focus is on quality and hygiene. Our Parlour is well equipped with advanced technology equipments and provides best quality services. Our staff is well trained and experienced, offering advanced services in Skin, Hair and Body Shaping that will provide you with a luxurious experience that leave you feeling relaxed and stress free. The specialities in the parlour are, apart from regular bleachings and Facials, many types of hairstyles, Bridal and cine make-up and different types of Facials & fashion hair colourings.', NULL, NULL, NULL, ''),
(2, 'contactus', 'Contact Us', '        890,Sector 62, Gyan Sarovar, GAIL Noida(Delhi/NCR)', 'info@gmail.com', 7896541236, NULL, '10:30 am to 8:30 pm');

-- --------------------------------------------------------

--
-- Table structure for table `tblservices`
--

CREATE TABLE `tblservices` (
  `ID` int(10) NOT NULL,
  `ServiceName` varchar(200) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `Cost` int(10) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblservices`
--

INSERT INTO `tblservices` (`ID`, `ServiceName`, `Description`, `Cost`, `CreationDate`) VALUES
(1, 'Plumbing', 'Rate is calculated hourly.', 120, '2019-07-25 11:22:38'),
(2, 'Complete House Cleaning', 'A to Z cleaning of your house.', 500, '2019-07-25 11:22:53'),
(3, 'Painting Work', 'Covers painting and cost is calculated per foot.', 1000, '2019-07-25 11:23:10'),
(4, 'Furniture', 'Repairing of your furniture.', 500, '2019-07-25 11:23:34'),
(5, 'Hire Electrician', 'Rate is calculated hourly.', 600, '2019-07-25 11:23:47');

-- --------------------------------------------------------

--
-- Table structure for table `tblsubscriber`
--

CREATE TABLE `tblsubscriber` (
  `ID` int(5) NOT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `DateofSub` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblsubscriber`
--

INSERT INTO `tblsubscriber` (`ID`, `Email`, `DateofSub`) VALUES
(1, 'ani@gmail.com', '2021-07-16 07:32:33'),
(2, 'rahul@gmail.com', '2021-07-16 07:32:33'),
(3, 'ganesh@gmail.com', '2021-07-21 07:36:46'),
(4, 'ak@gmail.com', '2021-07-25 17:25:29');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `username`, `password`) VALUES
(18, 'jenil', 'jenil@gmail.com', '202cb962ac59075b964b07152d234b70'),
(19, 'j', 'j@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710'),
(20, 'k', 'k@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `passsword` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `passsword`) VALUES
(1, 'admin@admin.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `poll`
--
ALTER TABLE `poll`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provider`
--
ALTER TABLE `provider`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblappointment`
--
ALTER TABLE `tblappointment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcustomers`
--
ALTER TABLE `tblcustomers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblinvoice`
--
ALTER TABLE `tblinvoice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `tblpage`
--
ALTER TABLE `tblpage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblservices`
--
ALTER TABLE `tblservices`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblsubscriber`
--
ALTER TABLE `tblsubscriber`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `poll`
--
ALTER TABLE `poll`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `provider`
--
ALTER TABLE `provider`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblappointment`
--
ALTER TABLE `tblappointment`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `tblcustomers`
--
ALTER TABLE `tblcustomers`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblinvoice`
--
ALTER TABLE `tblinvoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tblpage`
--
ALTER TABLE `tblpage`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblservices`
--
ALTER TABLE `tblservices`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tblsubscriber`
--
ALTER TABLE `tblsubscriber`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
