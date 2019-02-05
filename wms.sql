-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2018 at 12:14 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ems`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `attendanceID` int(10) UNSIGNED NOT NULL,
  `employeeID` int(10) UNSIGNED DEFAULT NULL,
  `inTime` datetime DEFAULT NULL,
  `outTime` datetime DEFAULT NULL,
  `userID` int(10) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`attendanceID`, `employeeID`, `inTime`, `outTime`, `userID`, `deleted_at`, `created_at`, `updated_at`) VALUES
(15, 1, '2018-11-15 03:40:15', '2018-11-15 03:43:04', 2, NULL, '2018-11-15 09:40:15', '2018-11-15 09:43:04'),
(16, 1, '2018-11-15 03:40:19', '2018-11-15 03:43:00', 2, NULL, '2018-11-15 09:40:19', '2018-11-15 09:43:00'),
(17, 1, '2018-11-15 03:40:22', '2018-11-15 03:42:55', 2, NULL, '2018-11-15 09:40:22', '2018-11-15 09:42:55'),
(18, 2, '2018-11-15 03:40:41', '2018-11-15 03:47:53', 3, NULL, '2018-11-15 09:40:41', '2018-11-15 09:47:53'),
(19, 2, '2018-11-15 03:40:43', '2018-11-15 03:47:48', 3, NULL, '2018-11-15 09:40:43', '2018-11-15 09:47:48'),
(20, 3, '2018-11-15 03:41:41', '2018-11-15 03:48:22', 4, NULL, '2018-11-15 09:41:41', '2018-11-15 09:48:22'),
(21, 3, '2018-11-15 03:41:43', '2018-11-15 03:48:19', 4, NULL, '2018-11-15 09:41:43', '2018-11-15 09:48:19'),
(22, 3, '2018-11-15 03:51:28', '2018-11-15 03:52:39', 4, NULL, '2018-11-15 09:51:28', '2018-11-15 09:52:39'),
(23, 1, '2018-11-20 06:42:31', '2018-11-21 03:40:03', 2, NULL, '2018-11-20 12:42:31', '2018-11-20 21:40:03'),
(24, 2, '2018-11-20 06:54:08', '2018-11-21 03:40:37', 3, NULL, '2018-11-20 12:54:08', '2018-11-20 21:40:37'),
(25, 3, '2018-11-23 05:31:58', '2018-11-23 05:34:24', 4, NULL, '2018-11-23 11:31:58', '2018-11-23 11:34:24'),
(26, 1, '2018-11-24 06:12:27', '2018-11-24 06:12:38', 2, NULL, '2018-11-24 12:12:27', '2018-11-24 12:12:38'),
(27, 1, '2018-12-01 11:31:36', '2018-12-01 11:34:02', 2, NULL, '2018-12-01 05:31:36', '2018-12-01 05:34:02');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `companyID` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateFormat` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owner` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `companyType` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(160) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userID` int(10) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`companyID`, `name`, `address`, `city`, `state`, `post`, `currency`, `dateFormat`, `owner`, `phone`, `fax`, `mobile`, `website`, `email`, `companyType`, `logo`, `userID`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Leading University, Sylhet', 'Kamal Bazar, Sylhet, Bangladesh', NULL, NULL, NULL, NULL, NULL, 'Ragib-Ali', '+8812345678', NULL, '+8801719894414', 'http://www.lus.ac.bd/', 'admin@admin.com', NULL, NULL, 1, NULL, '2018-11-15 20:20:26', '2018-11-15 20:35:37');

-- --------------------------------------------------------

--
-- Table structure for table `contact_message`
--

CREATE TABLE `contact_message` (
  `contactID` int(10) UNSIGNED NOT NULL,
  `employeeID` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `userID` int(10) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_message`
--

INSERT INTO `contact_message` (`contactID`, `employeeID`, `name`, `email`, `subject`, `message`, `userID`, `deleted_at`, `created_at`, `updated_at`) VALUES
(3, 2, 'Iqbal', 'Iqbal@Iqbal.com', 'Hello', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 3, NULL, '2018-11-10 11:35:16', '2018-11-10 11:35:16'),
(4, 2, 'Iqbal', 'Iqbal@Iqbal.com', 'Project', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 3, NULL, '2018-11-10 11:42:17', '2018-11-10 11:42:17'),
(5, 2, 'Iqbal', 'Iqbal@Iqbal.com', 'Sir', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 3, NULL, '2018-11-10 11:42:38', '2018-11-10 11:42:38'),
(6, 1, 'Sukanta Purkayastha', 'user@user.com', 'sukanta', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 2, NULL, '2018-11-10 12:47:27', '2018-11-10 12:47:27'),
(7, 1, 'Sukanta Purkayastha', 'user@user.com', 'Hellow', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 2, NULL, '2018-11-10 12:47:39', '2018-11-10 12:47:39'),
(8, 1, 'Sukanta Purkayastha', 'user@user.com', 'Project', 'tyttt', 2, NULL, '2018-12-01 05:33:45', '2018-12-01 05:33:45');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employeeID` int(10) UNSIGNED NOT NULL,
  `position` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary` double NOT NULL DEFAULT '0',
  `father` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `mother` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postCode` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nid` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imageName` varchar(160) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account` double NOT NULL DEFAULT '0',
  `userID` int(10) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employeeID`, `position`, `salary`, `father`, `dob`, `mother`, `gender`, `mobile`, `address`, `city`, `postCode`, `country`, `nid`, `imageName`, `account`, `userID`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'CEO', 50000, 'Subhash  Purkayastha', '2018-12-19', 'Mira Rani Jourder', 'Male', '+8801675870047', 'sylhet', 'Sylhet', '123456789', 'Bangladesh', '123456789', 'de118b15764e8d1f48928d359521d5b4.jpeg', 45984, 2, NULL, '2018-11-07 03:52:07', '2018-12-05 06:42:40'),
(2, 'Member', 15016, 'This is your Father name', '1995-10-30', 'This is your mother name', 'Male', '01869251410', 'sylhet', 'Sylhet', '4040', 'Bangladesh', '123456789', '825404aa953e79c7a1677530eb222143.jpeg', 15016, 3, NULL, '2018-11-08 00:08:08', '2018-11-11 06:09:48'),
(3, 'hi', 600, 'Sharafot', '1993-09-08', 'Pori banu', 'Male', '01869251410', 'dsdf', 'Sylhet', '4040', 'wwnbwjn', '12346777', '0623b4456ca51ab792f80b1279619692.jpeg', 600, 4, NULL, '2018-11-14 22:29:03', '2018-12-04 16:16:40');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `eventID` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doe` date DEFAULT NULL,
  `toe` time DEFAULT NULL,
  `venue` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `userID` int(10) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eventID`, `title`, `doe`, `toe`, `venue`, `description`, `userID`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Lorem Ipsum', '2018-11-09', '11:00:00', 'Lorem Ipsum', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown', 1, NULL, '2018-11-08 00:23:16', '2018-11-09 14:01:47'),
(2, 'Khawar Dawat', '2018-11-14', '12:50:00', 'Sir er basa', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown', 1, NULL, '2018-11-09 13:48:38', '2018-11-09 14:00:07'),
(3, 'Meeting', '2018-11-22', '12:40:00', 'Sylhet Stadium', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown', 1, NULL, '2018-11-09 14:05:07', '2018-11-09 14:05:07'),
(4, 'Lorem Ipsum', '2018-11-21', '15:08:00', 'Lorem Ipsum', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown', 1, NULL, '2018-11-10 04:43:54', '2018-11-10 04:43:54'),
(5, 'Maramari', '2018-10-23', '15:07:00', 'Lorem Ipsum', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown', 1, NULL, '2018-11-10 04:47:02', '2018-11-10 04:47:02'),
(6, 'Crime Report', '2018-11-13', '17:05:00', 'Lorem Ipsum', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown', 1, NULL, '2018-11-10 04:47:20', '2018-11-10 04:47:20'),
(7, 'Crime Report', '2018-11-10', '21:09:00', 'Sylhet Stadium', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown', 1, NULL, '2018-11-10 04:47:39', '2018-11-10 04:47:39'),
(8, 'Khawar Dawat', '2018-11-20', '15:08:00', 'Lorem Ipsum', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown', 1, NULL, '2018-11-10 04:48:52', '2018-11-10 04:48:52'),
(9, 'Khawar Dawat', '2018-11-22', '12:37:00', 'Sir er basa', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown', 1, NULL, '2018-11-10 04:49:11', '2018-11-10 04:49:11'),
(10, 'Crime Report', '2018-11-21', '17:00:00', 'Sylhet Stadium', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown', 1, NULL, '2018-11-10 04:49:36', '2018-11-10 04:49:36'),
(11, 'Lorem Ipsum', '2018-11-14', '15:09:00', 'Sylhet Stadium', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown', 1, NULL, '2018-11-10 04:50:11', '2018-11-10 04:50:11'),
(12, 'malayasha', '2018-11-21', '18:07:00', 'Lorem Ipsum', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown', 1, NULL, '2018-11-10 04:50:39', '2018-11-10 04:50:39'),
(13, 'Crime Report', '2018-11-21', '15:45:00', 'Sylhet Stadium', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown', 1, NULL, '2018-11-10 04:51:00', '2018-11-10 04:51:00');

-- --------------------------------------------------------

--
-- Table structure for table `job_circular`
--

CREATE TABLE `job_circular` (
  `circularID` int(10) UNSIGNED NOT NULL,
  `jobTitle` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vacancy` int(11) NOT NULL DEFAULT '0',
  `jobResponsibilities` text COLLATE utf8mb4_unicode_ci,
  `employmentStatus` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edu_Requirements` text COLLATE utf8mb4_unicode_ci,
  `exp_Requirements` text COLLATE utf8mb4_unicode_ci,
  `addi_Requirements` text COLLATE utf8mb4_unicode_ci,
  `jobLocation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary` double NOT NULL DEFAULT '0',
  `other_Benefits` text COLLATE utf8mb4_unicode_ci,
  `deadline` date DEFAULT NULL,
  `imageName` varchar(160) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userID` int(10) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_circular`
--

INSERT INTO `job_circular` (`circularID`, `jobTitle`, `vacancy`, `jobResponsibilities`, `employmentStatus`, `edu_Requirements`, `exp_Requirements`, `addi_Requirements`, `jobLocation`, `salary`, `other_Benefits`, `deadline`, `imageName`, `userID`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Web developer', 3, 'Ami onnay kichu koile boka dio madam. Permission dilam. Odhikar ache boka deyar', 'Part Time', 'Ami onnay kichu koile boka dio madam. Permission dilam. Odhikar ache boka deyar', 'Ami onnay kichu koile boka dio madam. Permission dilam. Odhikar ache boka deyar', 'Ami onnay kichu koile boka dio madam. Permission dilam. Odhikar ache boka deyar', 'Sylhet', 2000, 'Ami onnay kichu koile boka dio madam. Permission dilam. Odhikar ache boka deyar', '2018-11-22', NULL, 1, NULL, '2018-11-16 21:08:02', '2018-11-17 08:44:19'),
(2, 'Computer Operator', 4, 'Ami onnay kichu koile boka dio madam. Permission dilam. Odhikar ache boka deyar', 'Full Time', 'Ami onnay kichu koile boka dio madam. Permission dilam. Odhikar ache boka deyar', 'Ami onnay kichu koile boka dio madam. Permission dilam. Odhikar ache boka deyar', 'Ami onnay kichu koile boka dio madam. Permission dilam. Odhikar ache boka deyar', 'Tilagorh, Sylhet', 5000, 'Ami onnay kichu koile boka dio madam. Permission dilam. Odhikar ache boka deyar', '2018-11-21', NULL, 1, NULL, '2018-11-17 10:15:38', '2018-11-17 10:15:38'),
(4, 'Web developer', 6, 'Ami onnay kichu koile boka dio madam. Permission dilam. Odhikar ache boka deyar', 'Full Time', 'Ami onnay kichu koile boka dio madam. Permission dilam. Odhikar ache boka deyar', 'Ami onnay kichu koile boka dio madam. Permission dilam. Odhikar ache boka deyar', 'Ami onnay kichu koile boka dio madam. Permission dilam. Odhikar ache boka deyar', 'Sylhet', 1000, 'Ami onnay kichu koile boka dio madam. Permission dilam. Odhikar ache boka deyar', '2018-11-21', NULL, 1, NULL, '2018-11-17 10:23:20', NULL),
(5, 'Web developer', 6, 'Ami onnay kichu koile boka dio madam. Permission dilam. Odhikar ache boka deyar', 'Part Time', 'Ami onnay kichu koile boka dio madam. Permission dilam. Odhikar ache boka deyar', 'Ami onnay kichu koile boka dio madam. Permission dilam. Odhikar ache boka deyar', 'Ami onnay kichu koile boka dio madam. Permission dilam. Odhikar ache boka deyar', 'Sylhet', 4000, 'Ami onnay kichu koile boka dio madam. Permission dilam. Odhikar ache boka deyar', '2018-11-28', NULL, 1, NULL, '2018-11-17 11:09:05', '2018-11-17 11:09:05'),
(6, 'Computer Operator', 5, 'Ami onnay kichu koile boka dio madam. Permission dilam. Odhikar ache boka deyar', 'Full Time', 'Ami onnay kichu koile boka dio madam. Permission dilam. Odhikar ache boka deyar', 'Ami onnay kichu koile boka dio madam. Permission dilam. Odhikar ache boka deyar', 'Ami onnay kichu koile boka dio madam. Permission dilam. Odhikar ache boka deyar', 'Tilagorh, Sylhet', 0, 'Ami onnay kichu koile boka dio madam. Permission dilam. Odhikar ache boka deyar', '2018-11-13', NULL, 1, NULL, '2018-11-17 11:10:11', '2018-11-17 11:10:11'),
(7, 'Computer Operator', 6, 'Ami onnay kichu koile boka dio madam. Permission dilam. Odhikar ache boka deyar', 'Full Time', 'Ami onnay kichu koile boka dio madam. Permission dilam. Odhikar ache boka deyar', 'Ami onnay kichu koile boka dio madam. Permission dilam. Odhikar ache boka deyar', 'Ami onnay kichu koile boka dio madam. Permission dilam. Odhikar ache boka deyar', 'Tilagorh, Sylhet', 0, 'Ami onnay kichu koile boka dio madam. Permission dilam. Odhikar ache boka deyar', '2018-11-30', NULL, 1, NULL, '2018-11-17 11:10:33', '2018-11-17 11:10:33'),
(8, 'Web developer', 5, 'Ami onnay kichu koile boka dio madam. Permission dilam. Odhikar ache boka deyar', 'Part Time', 'Ami onnay kichu koile boka dio madam. Permission dilam. Odhikar ache boka deyar', 'Ami onnay kichu koile boka dio madam. Permission dilam. Odhikar ache boka deyar', 'Ami onnay kichu koile boka dio madam. Permission dilam. Odhikar ache boka deyar', 'Tilagorh, Sylhet', 6000, 'Ami onnay kichu koile boka dio madam. Permission dilam. Odhikar ache boka deyar', '2018-11-23', NULL, 1, NULL, '2018-11-17 11:19:26', '2018-11-17 11:19:26');

-- --------------------------------------------------------

--
-- Table structure for table `leave_requests`
--

CREATE TABLE `leave_requests` (
  `leaverequestID` int(10) UNSIGNED NOT NULL,
  `employeeID` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `sincerely` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `userID` int(10) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leave_requests`
--

INSERT INTO `leave_requests` (`leaverequestID`, `employeeID`, `name`, `subject`, `description`, `sincerely`, `status`, `userID`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Sukanta Purkayastha', 'Prayar For Leave for some days.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Sukanta Purkayastha', 'Accepted', 2, NULL, '2018-11-12 12:51:30', '2018-11-12 12:51:30'),
(2, 1, 'Sukanta Purkayastha', 'Project', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Sukanta Purkayastha', 'Rejected', 2, NULL, '2018-11-12 13:07:05', '2018-11-12 14:57:31'),
(3, 2, 'Iqbal', 'Prayar For Leave for some days.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Iqbal', 'Accepted', 3, NULL, '2018-11-12 13:17:09', '2018-11-12 14:51:17'),
(4, 1, 'Sukanta Purkayastha', 'Prayar For Leave for some days.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Sukanta Purkayastha', 'Rejected', 2, NULL, '2018-11-12 15:01:14', '2018-11-12 15:04:05'),
(5, 1, 'Sukanta Purkayastha', 'Prayar For Leave for some days.', 'Oct 5, 2016 - Buy Smart HRM - Project Management, Payroll, Attendance & Timesheet Timer by ... Attendance Management; Payroll Management; Employee details management with ... AskMe - Advanced Support Ticket System - CodeCanyon Item for Sale. Installer for Laravel Application - CodeCanyon Item for Sale.', 'Sukanta Purkayastha', 'Accepted', 2, NULL, '2018-11-13 03:57:04', '2018-11-13 03:57:58'),
(6, 1, 'Sukanta Purkayastha', 'Prayar For Leave for some days.', 'Oct 5, 2016 - Buy Smart HRM - Project Management, Payroll, Attendance & Timesheet Timer by ... Attendance Management; Payroll Management; Employee details management with ... AskMe - Advanced Support Ticket System - CodeCanyon Item for Sale. Installer for Laravel Application - CodeCanyon Item for Sale.', 'Sukanta Purkayastha', 'Pending', 2, NULL, '2018-11-23 11:37:41', '2018-11-23 11:37:41');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(17, '2014_10_12_000000_create_users_table', 1),
(18, '2014_10_12_100000_create_password_resets_table', 1),
(19, '2018_10_06_202712_create_employee_table', 1),
(20, '2018_10_07_210742_create_months_table', 1),
(21, '2018_10_08_034944_create_salary_sheet_table', 1),
(22, '2018_10_08_035043_create_salary_payment_table', 1),
(23, '2018_10_08_035345_create_leave_request_table', 1),
(24, '2018_10_08_035419_create_events_table', 1),
(25, '2018_11_10_092124_create_contact_message_table', 2),
(26, '2018_11_11_184340_create_leave_requests_table', 3),
(27, '2018_11_13_182612_create_attendance_table', 4),
(28, '2018_11_15_171727_create_job_circular_table', 5),
(29, '2018_11_16_001130_create_company_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `months`
--

CREATE TABLE `months` (
  `monthID` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userID` int(10) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `salary_payment`
--

CREATE TABLE `salary_payment` (
  `salarypaymentID` int(10) UNSIGNED NOT NULL,
  `salarysheetID` int(10) UNSIGNED DEFAULT NULL,
  `employeeID` int(10) UNSIGNED DEFAULT NULL,
  `employeeName` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salaryName` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `address` varchar(160) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` double NOT NULL DEFAULT '0',
  `descriptions` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userID` int(10) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `salary_payment`
--

INSERT INTO `salary_payment` (`salarypaymentID`, `salarysheetID`, `employeeID`, `employeeName`, `salaryName`, `dob`, `address`, `amount`, `descriptions`, `userID`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'Iqbal', 'Nov-2018', '2018-11-23', 'sylhet', 15006, NULL, 1, NULL, '2018-11-09 16:06:17', '2018-11-08 16:06:17'),
(2, 2, 1, 'Sukanta Purkayastha', 'Nov-2018', '2018-11-29', 'sylhet', 30000, NULL, 1, NULL, '2018-11-09 16:09:22', '2018-11-08 16:09:22'),
(3, 3, 2, 'Iqbal', 'Dhaka South', '2018-11-23', 'sylhet', 15016, NULL, 1, NULL, '2018-11-09 17:53:39', '2018-11-08 17:53:39'),
(4, 4, 2, 'Iqbal', 'REAL TASTE SYLHET BRANCH', '2018-11-23', 'sylhet', 15006, NULL, 1, NULL, '2018-11-08 17:51:40', '2018-11-08 17:51:40'),
(5, 5, 2, 'Iqbal', 'Dec-2018', '2018-11-23', 'sylhet', 15016, NULL, 1, NULL, '2018-11-09 17:53:14', '2018-11-08 17:53:14'),
(6, 6, 1, 'Sukanta Purkayastha', 'May-2018', '2018-11-29', 'sylhet', 50000, NULL, 1, NULL, '2018-11-12 06:07:41', '2018-11-11 06:07:41'),
(7, 7, 2, 'Iqbal', 'Nov-2018', '1995-10-30', 'sylhet', 15016, NULL, 1, NULL, '2018-11-11 06:09:48', '2018-11-11 06:09:48'),
(8, 8, 3, 'Ammmi', 'Jan-2018', '1993-09-08', 'dsdf', 500, NULL, 1, NULL, '2018-11-15 12:20:11', '2018-11-15 12:20:11'),
(9, 9, 3, 'Ammmi', 'Nov-2018', '1993-09-08', 'dsdf', 510, NULL, 1, NULL, '2018-11-23 11:30:26', '2018-11-23 11:30:26'),
(10, 10, 3, 'Ammmi', 'Mohammed Shamsuddah', '1993-09-08', 'dsdf', 517, NULL, 1, NULL, '2018-11-24 10:04:24', '2018-11-24 10:04:24'),
(11, 11, 3, 'Ammmi', 'Dec-2018', '1993-09-08', 'dsdf', 600, NULL, 1, NULL, '2018-12-01 05:40:50', '2018-12-01 05:40:50'),
(12, 12, 3, 'Ammmi', 'Dec-2018', '1993-09-08', 'dsdf', 600, NULL, 1, NULL, '2018-12-04 16:16:40', '2018-12-04 16:16:40');

-- --------------------------------------------------------

--
-- Table structure for table `salary_sheet`
--

CREATE TABLE `salary_sheet` (
  `salarysheetID` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employeeID` int(10) UNSIGNED DEFAULT NULL,
  `employeeName` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nid` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `address` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` double NOT NULL DEFAULT '0',
  `description` varchar(160) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userID` int(10) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `salary_sheet`
--

INSERT INTO `salary_sheet` (`salarysheetID`, `name`, `employeeID`, `employeeName`, `nid`, `dob`, `address`, `amount`, `description`, `userID`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Nov-2018', 2, 'Iqbal', '123456789', '2018-11-23', 'sylhet', 15006, NULL, 1, NULL, '2018-11-09 16:06:17', '2018-11-08 16:06:17'),
(2, 'Nov-2018', 1, 'Sukanta Purkayastha', '123456789', '2018-11-29', 'sylhet', 30000, NULL, 1, NULL, '2018-11-09 16:09:22', '2018-11-08 16:09:22'),
(3, 'Dhaka', 2, 'Iqbal', '123456789', '2018-11-23', 'sylhet', 15016, NULL, 1, NULL, '2018-11-09 17:53:39', '2018-11-08 17:53:39'),
(4, 'REAL TASTE SYLHET BRANCH', 2, 'Iqbal', '123456789', '2018-11-23', 'sylhet', 15006, NULL, 1, NULL, '2018-11-08 17:51:40', '2018-11-08 17:51:40'),
(5, 'Dec-2018', 2, 'Iqbal', '123456789', '2018-11-23', 'sylhet', 15016, NULL, 1, NULL, '2018-11-09 17:53:14', '2018-11-08 17:53:14'),
(6, 'May-2018', 1, 'Sukanta Purkayastha', '123456789', '2018-11-29', 'sylhet', 50000, NULL, 1, NULL, '2018-11-12 06:07:41', '2018-11-11 06:07:41'),
(7, 'Nov-2018', 2, 'Iqbal', '123456789', '1995-10-30', 'sylhet', 15016, NULL, 1, NULL, '2018-11-11 06:09:48', '2018-11-11 06:09:48'),
(8, 'Jan-2018', 3, 'Ammmi', '12346777', '1993-09-08', 'dsdf', 500, NULL, 1, NULL, '2018-11-15 12:20:11', '2018-11-15 12:20:11'),
(9, 'Nov-2018', 3, 'Ammmi', '12346777', '1993-09-08', 'dsdf', 510, NULL, 1, NULL, '2018-11-23 11:30:26', '2018-11-23 11:30:26'),
(10, 'Mohammed Shamsuddah', 3, 'Ammmi', '12346777', '1993-09-08', 'dsdf', 517, NULL, 1, NULL, '2018-11-24 10:04:24', '2018-11-24 10:04:24'),
(11, 'Dec-2018', 3, 'Ammmi', '12346777', '1993-09-08', 'dsdf', 600, NULL, 1, NULL, '2018-12-01 05:40:50', '2018-12-01 05:40:50'),
(12, 'Dec-2018', 3, 'Ammmi', '12346777', '1993-09-08', 'dsdf', 600, NULL, 1, NULL, '2018-12-04 16:16:40', '2018-12-04 16:16:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userType` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Employee',
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `userType`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'Admin', 'admin@admin.com', NULL, '$2y$10$9K6io.ZCnKNwdxoWWetJW.Yo7ZZfkLSWUu2uNvYbIeC57kW7V9lEu', 'cwAb8YzuPiDODOXDPxgWRD0Oh92Ovd1wlSkYF7RQ3qCJP2JvGmQDAn7KrlDo', '2018-11-07 03:50:46', '2018-11-07 03:50:46'),
(2, 'Sukanta Purkayastha', 'Employee', 'user@user.com', NULL, '$2y$10$677fi0WFBEc2rEqGRqpTHO6x0Oj.C0b.pHWhDO.nEn8M7bD8Y8BBO', 'C8uPIXzuoF4AWtGMNSXWOyCAkgiOQsr3PZuthMuBmVASmKeT6m4kIHZJR8Cq', '2018-11-07 03:51:58', '2018-11-07 03:51:58'),
(3, 'Iqbal', 'Employee', 'Iqbal@Iqbal.com', NULL, '$2y$10$9asbDTuL87nlangkomwFbOFqmDM63tEAfU0JfJx2mP1X2J6g3uSrm', 'eyfIMW204aDabyERJuAv1RxPtWWs1KNr0eUikR7KHN9WZedaLEYsJPpCITMq', '2018-11-08 00:02:13', '2018-11-08 00:02:13'),
(4, 'Ammmi', 'Employee', 'ammmi@ammmi.com', NULL, '$2y$10$gHf7iPl3IXlC5knentSJCeBg0I8Cplt3lKSQyYE4U6eDkw1tMl/gi', 'lHtVY6xDapReUUbRp8rHpJvo91FPGQxbb3qEuHnpU1mP2asDmcfeviznY7BL', '2018-11-14 22:28:45', '2018-11-14 22:28:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`attendanceID`),
  ADD KEY `attendance_employeeid_index` (`employeeID`),
  ADD KEY `attendance_userid_index` (`userID`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`companyID`),
  ADD UNIQUE KEY `company_userid_unique` (`userID`);

--
-- Indexes for table `contact_message`
--
ALTER TABLE `contact_message`
  ADD PRIMARY KEY (`contactID`),
  ADD KEY `contact_message_employeeid_index` (`employeeID`),
  ADD KEY `contact_message_userid_index` (`userID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employeeID`),
  ADD UNIQUE KEY `employee_mobile_userid_unique` (`mobile`,`userID`),
  ADD KEY `employee_userid_index` (`userID`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`eventID`),
  ADD KEY `events_userid_index` (`userID`);

--
-- Indexes for table `job_circular`
--
ALTER TABLE `job_circular`
  ADD PRIMARY KEY (`circularID`),
  ADD KEY `job_circular_userid_index` (`userID`);

--
-- Indexes for table `leave_requests`
--
ALTER TABLE `leave_requests`
  ADD PRIMARY KEY (`leaverequestID`),
  ADD KEY `leave_requests_employeeid_index` (`employeeID`),
  ADD KEY `leave_requests_userid_index` (`userID`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `months`
--
ALTER TABLE `months`
  ADD PRIMARY KEY (`monthID`),
  ADD UNIQUE KEY `months_name_unique` (`name`),
  ADD KEY `months_userid_index` (`userID`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `salary_payment`
--
ALTER TABLE `salary_payment`
  ADD PRIMARY KEY (`salarypaymentID`),
  ADD KEY `salary_payment_salarysheetid_index` (`salarysheetID`),
  ADD KEY `salary_payment_employeeid_index` (`employeeID`),
  ADD KEY `salary_payment_userid_index` (`userID`);

--
-- Indexes for table `salary_sheet`
--
ALTER TABLE `salary_sheet`
  ADD PRIMARY KEY (`salarysheetID`),
  ADD KEY `salary_sheet_employeeid_index` (`employeeID`),
  ADD KEY `salary_sheet_userid_index` (`userID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `attendanceID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `companyID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_message`
--
ALTER TABLE `contact_message`
  MODIFY `contactID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employeeID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `eventID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `job_circular`
--
ALTER TABLE `job_circular`
  MODIFY `circularID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `leave_requests`
--
ALTER TABLE `leave_requests`
  MODIFY `leaverequestID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `months`
--
ALTER TABLE `months`
  MODIFY `monthID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `salary_payment`
--
ALTER TABLE `salary_payment`
  MODIFY `salarypaymentID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `salary_sheet`
--
ALTER TABLE `salary_sheet`
  MODIFY `salarysheetID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_employeeid_foreign` FOREIGN KEY (`employeeID`) REFERENCES `employee` (`employeeID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `attendance_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `company`
--
ALTER TABLE `company`
  ADD CONSTRAINT `company_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `contact_message`
--
ALTER TABLE `contact_message`
  ADD CONSTRAINT `contact_message_employeeid_foreign` FOREIGN KEY (`employeeID`) REFERENCES `employee` (`employeeID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `contact_message_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `job_circular`
--
ALTER TABLE `job_circular`
  ADD CONSTRAINT `job_circular_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `leave_requests`
--
ALTER TABLE `leave_requests`
  ADD CONSTRAINT `leave_requests_employeeid_foreign` FOREIGN KEY (`employeeID`) REFERENCES `employee` (`employeeID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `leave_requests_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `months`
--
ALTER TABLE `months`
  ADD CONSTRAINT `months_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `salary_payment`
--
ALTER TABLE `salary_payment`
  ADD CONSTRAINT `salary_payment_employeeid_foreign` FOREIGN KEY (`employeeID`) REFERENCES `employee` (`employeeID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `salary_payment_salarysheetid_foreign` FOREIGN KEY (`salarysheetID`) REFERENCES `salary_sheet` (`salarysheetID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `salary_payment_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `salary_sheet`
--
ALTER TABLE `salary_sheet`
  ADD CONSTRAINT `salary_sheet_employeeid_foreign` FOREIGN KEY (`employeeID`) REFERENCES `employee` (`employeeID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `salary_sheet_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
