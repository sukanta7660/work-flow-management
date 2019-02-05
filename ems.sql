-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2018 at 09:40 AM
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
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employeeID` int(10) UNSIGNED NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `salary` double NOT NULL DEFAULT '0',
  `father` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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

INSERT INTO `employee` (`employeeID`, `gender`, `position`, `dob`, `salary`, `father`, `mother`, `mobile`, `address`, `city`, `postCode`, `country`, `nid`, `imageName`, `account`, `userID`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Female', 'CEO', '2018-11-21', 5000, 'Subhash Purkayastha', 'Mira Rani Jourder', '01719894414', 'Tilagorh,Sylhet', 'Sylhet', '3100', 'Bangladesh', '123456789', '1c60cd22d21f3c4560a222c8a2e368a9.jpeg', 0, 2, NULL, NULL, '2018-11-06 06:00:23'),
(2, NULL, 'cheif', '2018-11-02', 50000, 'Subhash Purkayastha', 'Mira Rani Jourder', '01719894414', 'Sylhet', 'Sylhet', '8080', 'Bangladesh', '1901672787872', '2affee3f63aead41281c39688baf797e.jpeg', 0, 3, NULL, NULL, '2018-11-04 05:09:55'),
(3, NULL, 'super', '2018-11-28', 0, 'This is your Father name', 'Pori banu', '01656434346', 'ggg', 'hbshbhs', '3100', 'Bangladesh', '3777557', '8658752bffa348bcc273af20be838d8c.jpeg', 0, 6, NULL, '2018-11-04 05:21:58', '2018-11-05 14:07:30'),
(5, NULL, 'cheif', '2018-11-15', 10000, 'This is your Father name', 'Mira Rani Jourder', '01719894414', 'sylhet', 'Sylhet', '8080', 'Bangladesh', '123456988', 'a3e235e4c4491f0f1fcf70ad1be50749.jpeg', 0, 7, NULL, NULL, '2018-11-04 05:55:22'),
(6, 'Male', 'super', '2018-11-21', 5000, 'Sharafot', 'Pori banu', '01656434346', 'sylhet', 'Sylhet', '8080', 'Bangladesh', '6565435555745376', '2b3a5661a93a0d21d3efc45f36f1880c.jpeg', 0, 4, NULL, NULL, '2018-11-06 23:45:22'),
(7, NULL, 'CEO', '2018-11-13', 40000, 'This is your Father name', 'This is your mother name', '+8801675870047', 'sylhet', 'Sylhet', '1234567', 'Bangladesh', '123456789', 'd9e18e88b976d60acf04b548d8bdebbb.jpeg', 0, 8, NULL, '2018-11-05 10:57:53', '2018-11-05 16:19:12'),
(8, NULL, 'cheif_we', '2018-11-14', 10000, 'Subhash  Purkayastha', 'Mira Rani Jourder', '+8801675870047', 'sylhet', 'Sylhet', '1234567', 'Bangladesh', '12434264262', 'e590956e5a707bd84276c0bb664d8cb1.jpeg', 0, 9, NULL, '2018-11-05 11:27:32', '2018-11-05 16:19:42'),
(9, NULL, 'cheif', '2018-11-29', 7000, 'Sharafot', 'Pori banu', '01719894414', 'tilagorh,sylhet', 'Sylhet', '8080', 'Bangladesh', '123456789', 'f7594885e91635c2333349908e780d33.jpeg', 0, 10, NULL, '2018-11-06 03:49:10', '2018-11-06 05:23:50'),
(10, NULL, 'Suifer', '1995-03-27', 0, 'Abdul hye', 'Mst. Husneara', '01728288363', 'Sylhet,Bangladesh', 'Sylhet', '4040', 'Bangladesh', '1234567890', '7192a6de36aa0ec09db7452c0b4436a6.jpeg', 0, 11, NULL, '2018-11-06 05:17:26', '2018-11-06 05:19:39'),
(11, 'Male', 'hi', '2018-11-22', 0, 'This is your Father name', 'This is your mother name', '01728288363', 'bangladesh', 'Sylhet', '8080', 'Bangladesh', '123435456787', 'c60713d1ed14f40ba3af49c258f7d5d2.jpeg', 0, 12, NULL, '2018-11-06 05:49:38', '2018-11-06 05:56:44');

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
(1, 'Kuakata', '2018-11-07', '22:50:00', 'Sylhet Stadium', 'argent', 1, NULL, '2018-11-01 15:31:11', '2018-11-05 18:04:58'),
(2, 'Khawar Dawat', '2018-11-15', '12:30:00', 'Sir er basa', 'Tikh time a jaio.', 1, NULL, '2018-11-05 18:06:28', '2018-11-05 18:06:28');

-- --------------------------------------------------------

--
-- Table structure for table `leave_request`
--

CREATE TABLE `leave_request` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_10_06_202712_create_employee_table', 1),
(4, '2018_10_07_210742_create_months_table', 1),
(5, '2018_10_08_034944_create_salary_sheet_table', 1),
(6, '2018_10_08_035043_create_salary_payment_table', 1),
(7, '2018_10_08_035345_create_leave_request_table', 1),
(8, '2018_10_08_035419_create_events_table', 1);

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
  `month` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employeeID` int(10) UNSIGNED DEFAULT NULL,
  `amount` double NOT NULL DEFAULT '0',
  `type` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userID` int(10) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `salary_sheet`
--

CREATE TABLE `salary_sheet` (
  `salarysheetID` int(10) UNSIGNED NOT NULL,
  `month` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employeeID` int(10) UNSIGNED DEFAULT NULL,
  `amount` double NOT NULL DEFAULT '0',
  `userID` int(10) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'Super Admin', 'Admin', 'admin@admin.com', NULL, '$2y$10$2k/PUuEgv3yAyaFruTiP0.lw5RvxAKo.es.JtMLnl98CGNT8o1z5G', '9cc3ix1Waf6a2U6rUUAOuWc9CWnDKaVUjIa7hjNQjjgJn57L2IQAN7Jrmb5U', '2018-10-30 06:28:30', '2018-10-30 06:28:30'),
(2, 'Sukanta Purkayastha', 'Employee', 'user@user.com', NULL, '$2y$10$HTWudu.iu45bN/pIvHWLF.TChlHAP94n.iTTxswsDYK1NocKroyDy', 'mzHaBIqDovHgdCas4WY2DEgDbOnT66gyQgTBLVm6JWkdgzgEd0zhRcVYz3HP', '2018-10-30 06:30:14', '2018-10-30 06:30:14'),
(3, 'Susmita Purkayastha', 'Employee', 'user@gmail.com', NULL, '$2y$10$qDUEZpI9mDIaTo0kCCBmfuCs.SgJb3V8ximfPIYUoe0p1/L/RXzYm', 'XzuGcwjyMYJtCwKGPAq73o7v2Tp3BHHbMwxUAzsrDYlECBKJMN3Kl0fUNQyZ', '2018-10-30 07:38:21', '2018-10-30 07:38:21'),
(4, 'A', 'Employee', 'a@a.com', NULL, '$2y$10$jgfOeH8ylz.IRyAR5aMljOlmWrGop/XAsI/Tpyn7oXrsZsyC7lyLm', '5mCdUlqxXYYnt7hpNrqvWrVd7hThcnuwSpZyP7gAwsbzplVnXcapvLDq2Doe', '2018-10-30 08:13:32', '2018-10-30 08:13:32'),
(5, 'sukanta', 'Employee', 'sukanta@gmail.com', NULL, '$2y$10$2lYHnQhizQKvJRJ/NnLOeepgiZHUGTLESLC5KqV81yJg503uVmkrq', 'zvzg6ccQjjX8JecMPhE8ta5Mu9yH6mc6YVlPOqAI4vaXFYQugMr1gk9e7eKG', '2018-10-30 08:18:09', '2018-10-30 08:18:09'),
(6, 'Dipen Kumer Das', 'Employee', 'rj1994ninja@gmail.com', NULL, '$2y$10$YO9zI9IAAi.kvJHUuOuWkun/rtFtnso5mqDkYL6rAl56ByeI0zhaG', 'GdDs1avA9bLGwzUBBf943xRDmCBQO35WkhG3iLUqZkfbFkF0kW0GfXczaAtl', '2018-11-04 03:24:08', '2018-11-04 03:24:08'),
(7, 'Mohammed Shamsuddah', 'Employee', 'cmrs@cmrs.com', NULL, '$2y$10$C5u9qnM5eHtkDrDyqJCe6OgJarKeH.inJyYcUFOS2dejSOlJzOb5G', 'qTkFTi86yYfHwzPHlzFj4FBVG18iQ0vjPBKDxDpB3o5oZ7dNMIEF0OX4DCCd', '2018-11-04 05:26:23', '2018-11-04 05:26:23'),
(8, 'Subhash Chandra Purkayastha', 'Employee', 'gmail@gmail.com', NULL, '$2y$10$BtylGjhEMv9J0.Zrxqxdm.1axIKsGW5gv5PTiAYeEzDWDsptop44y', 'rZRrtOfzOmJwhfo92tIS5pyzeRFcMYSzRDpAIyQNOKWUWboe0FvG2F11E3M4', '2018-11-05 10:45:37', '2018-11-05 10:45:37'),
(9, 'Manush', 'Employee', 'manus@manus.com', NULL, '$2y$10$FXZP3jIjMmmtBD3Xmq8iHOpQCyqbT4Flw31o9jcWqVMSjjJK8xZbi', 'ufvetYwgozcijvlDushGGzDUEkec6IMF293DvJ2Hr1zk2fTtQJDYWivGr9yK', '2018-11-05 11:27:23', '2018-11-05 11:27:23'),
(10, 'Amina', 'Employee', 'ami@gmail.com', NULL, '$2y$10$BKtq8SRT8PK3tBMJQNpU2..PEOVwrNeN.ivXM5aK5y/kqxxP0enLa', 'rzWNuazLpZWUB25Zh5bIfWimeuNymp3SVwUIG6CtdPuFP3GILAh1zsmbQFjD', '2018-11-06 03:48:58', '2018-11-06 03:48:58'),
(11, 'Habib Rahman', 'Employee', 'habib@habib.com', NULL, '$2y$10$yqLuVJe/8ifWtBmsCSwOTusFT8c5/5Om3ua44RvgtXLtGGzMoOVFm', 'Q2OzGq2sWE9c4LmYvR44bXrCLzhFiuUwYMkdz9DYxgCVRH331uw9PmnyuhIJ', '2018-11-06 05:16:47', '2018-11-06 05:16:47'),
(12, 'Sukanta Pura', 'Employee', 'sukantasp@gmail.com', NULL, '$2y$10$srs0vjAR.gX9sooBALeUIeC5iSlBkastNSUnQNvkBYfA5B86LxaI6', 'fYP4dCOjnbg99zTVd5tIZ23ytvvW6WYpEFI60VqpijOOSPOUEkWECe0UomDy', '2018-11-06 05:49:23', '2018-11-06 05:49:23');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `leave_request`
--
ALTER TABLE `leave_request`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employeeID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `eventID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `leave_request`
--
ALTER TABLE `leave_request`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `months`
--
ALTER TABLE `months`
  MODIFY `monthID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `salary_payment`
--
ALTER TABLE `salary_payment`
  MODIFY `salarypaymentID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `salary_sheet`
--
ALTER TABLE `salary_sheet`
  MODIFY `salarysheetID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

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
-- Constraints for table `months`
--
ALTER TABLE `months`
  ADD CONSTRAINT `months_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `salary_payment`
--
ALTER TABLE `salary_payment`
  ADD CONSTRAINT `salary_payment_employeeid_foreign` FOREIGN KEY (`employeeID`) REFERENCES `employee` (`employeeID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
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
