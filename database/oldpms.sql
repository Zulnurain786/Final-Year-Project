-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2024 at 01:50 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pms`
--

-- --------------------------------------------------------

--
-- Table structure for table `allgroupslogins`
--

CREATE TABLE `allgroupslogins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `projectid` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `session` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `allgroupslogins`
--

INSERT INTO `allgroupslogins` (`id`, `projectid`, `password`, `session`, `created_at`, `updated_at`) VALUES
(2, 'Fall-202013', '12345678', '2028', '2023-12-08 16:14:19', '2023-12-08 16:30:09'),
(4, 'Spring-201203', '12345678', '2023', '2023-12-10 01:50:14', '2023-12-10 01:50:14'),
(8, 'Fall-120334', '12345678', '2023', '2023-12-21 02:26:35', '2023-12-21 02:26:35'),
(9, 'Fall30302', '12345678', '2023', '2024-02-22 04:51:36', '2024-02-22 04:51:36');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fileuplouds`
--

CREATE TABLE `fileuplouds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sharedby` varchar(255) NOT NULL,
  `sharedbyid` varchar(255) NOT NULL,
  `sharedwith` varchar(255) NOT NULL,
  `sharedwithid` varchar(255) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fileuplouds`
--

INSERT INTO `fileuplouds` (`id`, `sharedby`, `sharedbyid`, `sharedwith`, `sharedwithid`, `filename`, `created_at`, `updated_at`) VALUES
(8, 'pmo', '1', 'student', 'student', 'complete fyp111.docx', '2024-03-11 09:45:28', '2024-03-11 09:45:28'),
(10, 'supervisor', '21', 'pmo', 'pmo', 'complete fyp111_1710242018.docx', '2024-03-12 06:13:39', '2024-03-12 06:13:39'),
(12, 'pmo', '1', 'supervisor', 'supervisor', 'complete fyp111_1710243155.docx', '2024-03-12 06:32:35', '2024-03-12 06:32:35');

-- --------------------------------------------------------

--
-- Table structure for table `groupsubmiteditems`
--

CREATE TABLE `groupsubmiteditems` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `groupid` bigint(20) UNSIGNED NOT NULL,
  `booklet` int(11) DEFAULT NULL,
  `CD` int(11) DEFAULT NULL,
  `flex` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `groupsubmiteditems`
--

INSERT INTO `groupsubmiteditems` (`id`, `groupid`, `booklet`, `CD`, `flex`, `created_at`, `updated_at`) VALUES
(11, 7, 1, 1, 0, '2024-03-09 07:44:53', '2024-03-09 07:49:13');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_12_02_061132_create_pmos_table', 1),
(6, '2023_12_02_062421_create_sessions_table', 2),
(7, '2023_12_02_063157_create_personroles_table', 3),
(8, '2023_12_02_064254_create_pmos_table', 4),
(9, '2023_12_03_044101_create_news_table', 5),
(10, '2023_12_05_103054_create_pmos_table', 6),
(11, '2023_12_06_034508_create_pmos_table', 7),
(12, '2023_12_06_145326_create_news_table', 8),
(13, '2023_12_06_184930_create_supervisers_table', 9),
(14, '2023_12_08_051154_create_grouplogins_table', 10),
(15, '2023_12_08_052941_create_allgrouplogins_table', 11),
(16, '2023_12_08_075719_create_allgrouplogin_table', 12),
(17, '2023_12_08_080834_create_allgroupslogins_table', 13),
(18, '2023_12_08_100540_create_studentrecords_table', 14),
(19, '2023_12_06_191514_create_supervisersessions_table', 15),
(20, '2023_12_08_102254_create_studentrecords_table', 16),
(21, '2023_12_08_105212_create_studentsrecords_table', 17),
(22, '2023_12_09_080744_create_studentgroups_table', 18),
(23, '2023_12_09_091339_create_studentsgroups_table', 19),
(24, '2023_12_09_093422_create_studentsgroups_table', 20),
(25, '2023_12_09_120340_create_preliminaryproposals_table', 21),
(26, '2023_12_10_071938_create_student_groups_table', 22),
(27, '2023_12_10_072350_create_studentgroups_table', 23),
(28, '2023_12_16_074326_create_sessionmodels_table', 24),
(29, '2023_12_16_074326_CreatE_sessionmodels_table', 25),
(30, '2024_03_09_113235_create_groupsubmiteditems_table', 26),
(31, '2024_03_11_100929_create_fileuplouds_table', 27),
(32, '2024_03_12_113437_create_supervisormeetings_table', 28),
(33, '2024_03_12_115408_create_supervisormeetings_table', 29),
(34, '2024_03_12_115522_create_supervisormeetingstimes_table', 30);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `news` text NOT NULL,
  `sharedby` int(11) NOT NULL,
  `sharedfor` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news`, `sharedby`, `sharedfor`, `created_at`, `updated_at`) VALUES
(4, 'Superviser', 1, 'superviser', '2023-12-06 23:29:43', '2023-12-06 23:29:43'),
(5, 'Student', 1, 'student', '2023-12-06 23:29:50', '2023-12-06 23:29:50'),
(7, 'hlo', 1, 'superviser', '2023-12-08 03:54:50', '2023-12-08 03:54:50'),
(8, 's', 1, 'superviser', '2023-12-08 04:09:58', '2023-12-08 04:09:58'),
(9, 'Again Superviser', 1, 'superviser', '2023-12-08 04:12:52', '2023-12-08 04:12:52'),
(10, 'hlo', 1, 'superviser', '2023-12-08 04:15:08', '2023-12-08 04:15:08'),
(11, 's', 1, 'superviser', '2023-12-08 04:16:09', '2023-12-08 04:16:09'),
(12, 'hhhhhhhh', 1, 'superviser', '2023-12-08 04:18:50', '2023-12-08 04:18:50'),
(13, 'sd', 1, 'superviser', '2023-12-08 04:21:08', '2023-12-08 04:21:08'),
(14, 'z', 1, 'superviser', '2023-12-08 04:22:30', '2023-12-08 04:22:30'),
(15, 'sd', 1, 'superviser', '2023-12-08 04:23:12', '2023-12-08 04:23:12'),
(16, 'sdjhdb', 1, 'superviser', '2023-12-08 04:23:58', '2023-12-08 04:23:58'),
(17, 'hchg', 1, 'superviser', '2023-12-08 04:25:30', '2023-12-08 04:25:30'),
(18, 'j', 1, 'superviser', '2023-12-08 04:26:31', '2023-12-08 04:26:31'),
(21, 'hlo from pmo to superviser', 1, 'superviser', '2023-12-08 04:31:28', '2023-12-08 04:31:28'),
(22, 'hlo from pmo to superviser', 1, 'superviser', '2023-12-08 04:35:11', '2023-12-08 04:35:11');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personroles`
--

CREATE TABLE `personroles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `PMOrole` int(11) NOT NULL,
  `Superviserrole` int(11) NOT NULL,
  `Groupsrole` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personroles`
--

INSERT INTO `personroles` (`id`, `PMOrole`, `Superviserrole`, `Groupsrole`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pmos`
--

CREATE TABLE `pmos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `pnumber` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `session` varchar(255) NOT NULL,
  `rolid` bigint(20) UNSIGNED NOT NULL DEFAULT 1,
  `loginstatus` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pmos`
--

INSERT INTO `pmos` (`id`, `name`, `pnumber`, `email`, `password`, `session`, `rolid`, `loginstatus`, `created_at`, `updated_at`) VALUES
(1, 'Zunu Rathore', '03137898012', 'meet.zulnurain@gmail.com', '123456789', '2023', 1, 0, '2023-12-06 11:48:29', '2024-03-12 03:09:01'),
(3, 'Zunu Rathore', '03137898012', 'zunuain@gmail.com', '123', '2026', 1, 0, '2023-12-07 20:26:08', '2024-03-09 07:53:10');

-- --------------------------------------------------------

--
-- Table structure for table `preliminaryproposals`
--

CREATE TABLE `preliminaryproposals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `groupid` bigint(20) UNSIGNED NOT NULL,
  `projectname` varchar(255) NOT NULL,
  `purposelstatus` varchar(255) NOT NULL DEFAULT 'NotApproved',
  `superviserid` bigint(11) UNSIGNED NOT NULL,
  `electivecourses` text DEFAULT NULL,
  `programminglanguagetools` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `preliminaryproposals`
--

INSERT INTO `preliminaryproposals` (`id`, `groupid`, `projectname`, `purposelstatus`, `superviserid`, `electivecourses`, `programminglanguagetools`, `created_at`, `updated_at`) VALUES
(14, 7, 'PMO', 'NotApproved', 21, 'hh', 'jkbjk', '2024-03-06 02:41:07', '2024-03-06 02:41:07');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Year` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`id`, `Year`, `created_at`, `updated_at`) VALUES
(1, '2025', '2023-12-18 03:25:34', '2023-12-18 03:25:34'),
(2, '2023', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `studentgroups`
--

CREATE TABLE `studentgroups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `m1regno` varchar(255) NOT NULL DEFAULT '0',
  `m2regno` varchar(255) NOT NULL DEFAULT '0',
  `m3regno` varchar(255) NOT NULL DEFAULT '0',
  `groupmembers` int(11) NOT NULL,
  `loginid` bigint(20) UNSIGNED NOT NULL,
  `roleid` int(11) NOT NULL DEFAULT 3,
  `loginstatus` int(11) NOT NULL DEFAULT 0,
  `totalviewnews` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `studentgroups`
--

INSERT INTO `studentgroups` (`id`, `m1regno`, `m2regno`, `m3regno`, `groupmembers`, `loginid`, `roleid`, `loginstatus`, `totalviewnews`, `created_at`, `updated_at`) VALUES
(7, '20-Arid-1747', '20-Arid-1711', '20-arid-1744', 3, 8, 3, 0, 0, '2024-03-06 02:39:26', '2024-03-06 02:39:26');

-- --------------------------------------------------------

--
-- Table structure for table `studentsrecords`
--

CREATE TABLE `studentsrecords` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `session` varchar(255) NOT NULL,
  `regno` varchar(255) NOT NULL,
  `pnumber` varchar(255) NOT NULL,
  `enrolledingroup` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `studentsrecords`
--

INSERT INTO `studentsrecords` (`id`, `name`, `email`, `department`, `session`, `regno`, `pnumber`, `enrolledingroup`, `created_at`, `updated_at`) VALUES
(5, 'Zunu Rathore', 'meet.zulnurain@gmail.com', 'CS', '2024', '20-Arid-1747', '03137898012', 1, '2023-12-08 20:00:51', '2024-03-06 02:39:26'),
(14, 'Ali', 'ali@gmail.com', 'CS', '2024', '20-Arid-1711', '3137898012', 1, '2023-12-09 00:14:21', '2024-03-06 02:39:26'),
(15, 'ali', 'ali1@gmail.com', 'CS', '2023', '20-Arid-1712', '3137898012', 1, '2023-12-09 00:14:22', '2023-12-11 16:25:57'),
(28, 'ali', 'aliok@gmail.com', 'CS', '2023', '20-Arid-1717', '3137898012', 1, '2023-12-09 15:05:03', '2023-12-10 21:50:09'),
(29, 'Zunu Rathore', '1234@gmail.com', 'CS', '2026', '20-arid-1111', '03137898012', 0, '2023-12-09 15:17:43', '2023-12-09 15:17:43'),
(30, 'Zunu Rathore', '1@gmail.com', 'CS', '2026', '20-arid-1113', '03137898012', 0, '2023-12-09 15:42:30', '2023-12-09 15:42:30'),
(31, 'sana khalil', 'sana@gmail.com', 'CS', '2024', '20-arid-1744', '03137898012', 1, '2023-12-10 18:32:59', '2024-03-06 02:39:26'),
(32, 'qasim', 'Qasim@gmail.com', 'CS', '2023', '20-arid-1745', '03137898012', 1, '2023-12-10 18:33:22', '2023-12-11 16:25:57'),
(33, 'saira', 'saira@gmail.com', 'IT', '2024', '20-arid-1740', '03137898012', 0, '2023-12-10 19:15:12', '2023-12-18 03:39:34'),
(34, 'Zunu Rathor', 'n@gmail.com', 'IT', '2023', '20-arid-1741', '03137898012', 0, '2023-12-10 19:15:38', '2023-12-18 03:39:34'),
(35, 'Usama', 'usamaain@gmail.com', 'CS', '2024', '20-arid-1110', '03137898012', 0, '2023-12-18 03:26:03', '2023-12-18 03:26:03'),
(36, 'Imazullah', 'Imazullah@gmail.com', 'CS', '2024', '20-arid-1725', '03137898012', 0, '2023-12-18 03:29:04', '2023-12-18 03:39:34'),
(37, 'Zaman', 'zaman@gmail.com', 'CS', '2023', '20-arid-1718', '03137898012', 1, '2023-12-21 02:29:01', '2023-12-21 02:32:51'),
(38, 'Umair', 'Umair@gmail.com', 'CS', '2023', '20-arid-1120', '03137898012', 1, '2023-12-21 02:29:25', '2023-12-21 02:32:51'),
(39, 'Gulraiz', 'gulrazi@gmail.com', 'CS', '2024', '20-arid-1750', '03137898012', 0, '2023-12-21 02:30:19', '2023-12-21 02:32:51');

-- --------------------------------------------------------

--
-- Table structure for table `supervisers`
--

CREATE TABLE `supervisers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `domain` varchar(255) NOT NULL,
  `pnumber` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rolid` int(11) NOT NULL DEFAULT 2,
  `loginstatus` int(11) NOT NULL DEFAULT 1,
  `totalviewnews` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `supervisers`
--

INSERT INTO `supervisers` (`id`, `name`, `domain`, `pnumber`, `email`, `password`, `rolid`, `loginstatus`, `totalviewnews`, `created_at`, `updated_at`) VALUES
(21, 'Zunu Rathore', 'Web Development', '03137898012', 'meet.zulnurain@gmail.com', '123456789', 2, 1, 0, '2023-12-08 20:24:26', '2023-12-12 16:02:34'),
(22, 'Zunu Rathore', 'Web Development', '03137898012', '123@gmail.com', '12345678', 2, 1, 0, '2023-12-09 15:04:01', '2023-12-09 15:04:01'),
(23, 'Zunu', 'Web Development', '03137898012', 'ali2@gmail.com', '12345678', 2, 1, 0, '2023-12-09 20:16:31', '2023-12-09 20:16:31'),
(24, 'Bilal Mazhar', 'Web Development', '03137898012', 'bilal@gmail.com', '12345678', 2, 1, 0, '2023-12-10 15:10:37', '2023-12-10 15:10:37');

-- --------------------------------------------------------

--
-- Table structure for table `supervisersessions`
--

CREATE TABLE `supervisersessions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `superviserid` int(11) NOT NULL DEFAULT 1,
  `session` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `supervisersessions`
--

INSERT INTO `supervisersessions` (`id`, `superviserid`, `session`, `created_at`, `updated_at`) VALUES
(4, 21, '2024', '2023-12-08 20:24:26', '2023-12-09 20:15:22'),
(5, 22, '2024', '2023-12-09 15:04:01', '2023-12-09 15:04:01'),
(6, 22, '2023', '2023-12-09 15:04:34', '2023-12-09 15:04:34'),
(7, 21, '2024', '2023-12-09 20:15:34', '2023-12-09 20:15:34'),
(8, 23, '2023', '2023-12-09 20:16:31', '2023-12-09 20:16:31'),
(9, 24, '2023', '2023-12-10 15:10:37', '2023-12-10 15:10:37');

-- --------------------------------------------------------

--
-- Table structure for table `supervisormeetingstimes`
--

CREATE TABLE `supervisormeetingstimes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `datetime` time NOT NULL,
  `detail` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `supervisorid` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `supervisormeetingstimes`
--

INSERT INTO `supervisormeetingstimes` (`id`, `datetime`, `detail`, `day`, `supervisorid`, `created_at`, `updated_at`) VALUES
(2, '00:43:00', 'nsnsn', 'Tuesday', 21, '2024-03-12 07:41:38', '2024-03-12 07:41:38'),
(3, '04:40:00', 'sjjs', 'Wednesday', 21, '2024-03-12 07:43:20', '2024-03-12 07:43:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allgroupslogins`
--
ALTER TABLE `allgroupslogins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `allgroupslogins_email_unique` (`projectid`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fileuplouds`
--
ALTER TABLE `fileuplouds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groupsubmiteditems`
--
ALTER TABLE `groupsubmiteditems`
  ADD PRIMARY KEY (`id`),
  ADD KEY `groupsubmiteditems_groupid_foreign` (`groupid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `personroles`
--
ALTER TABLE `personroles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pmos`
--
ALTER TABLE `pmos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pmos_email_unique` (`email`),
  ADD KEY `pmos_rolid_foreign` (`rolid`);

--
-- Indexes for table `preliminaryproposals`
--
ALTER TABLE `preliminaryproposals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `superviserid` (`superviserid`),
  ADD KEY `preliminaryproposals_groupid_foreign` (`groupid`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `session_year_unique` (`Year`);

--
-- Indexes for table `studentgroups`
--
ALTER TABLE `studentgroups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `studentgroups_loginid_foreign` (`loginid`);

--
-- Indexes for table `studentsrecords`
--
ALTER TABLE `studentsrecords`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `studentsrecords_email_unique` (`email`),
  ADD UNIQUE KEY `studentsrecords_regno_unique` (`regno`);

--
-- Indexes for table `supervisers`
--
ALTER TABLE `supervisers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `supervisers_email_unique` (`email`);

--
-- Indexes for table `supervisersessions`
--
ALTER TABLE `supervisersessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supervisormeetingstimes`
--
ALTER TABLE `supervisormeetingstimes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `supervisormeetingstimes_supervisorid_foreign` (`supervisorid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allgroupslogins`
--
ALTER TABLE `allgroupslogins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fileuplouds`
--
ALTER TABLE `fileuplouds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `groupsubmiteditems`
--
ALTER TABLE `groupsubmiteditems`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personroles`
--
ALTER TABLE `personroles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pmos`
--
ALTER TABLE `pmos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `preliminaryproposals`
--
ALTER TABLE `preliminaryproposals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `studentgroups`
--
ALTER TABLE `studentgroups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `studentsrecords`
--
ALTER TABLE `studentsrecords`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `supervisers`
--
ALTER TABLE `supervisers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `supervisersessions`
--
ALTER TABLE `supervisersessions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `supervisormeetingstimes`
--
ALTER TABLE `supervisormeetingstimes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `groupsubmiteditems`
--
ALTER TABLE `groupsubmiteditems`
  ADD CONSTRAINT `groupsubmiteditems_groupid_foreign` FOREIGN KEY (`groupid`) REFERENCES `studentgroups` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `preliminaryproposals`
--
ALTER TABLE `preliminaryproposals`
  ADD CONSTRAINT `preliminaryproposals_groupid_foreign` FOREIGN KEY (`groupid`) REFERENCES `studentgroups` (`id`),
  ADD CONSTRAINT `preliminaryproposals_ibfk_1` FOREIGN KEY (`superviserid`) REFERENCES `supervisers` (`id`);

--
-- Constraints for table `studentgroups`
--
ALTER TABLE `studentgroups`
  ADD CONSTRAINT `studentgroups_loginid_foreign` FOREIGN KEY (`loginid`) REFERENCES `allgroupslogins` (`id`);

--
-- Constraints for table `supervisormeetingstimes`
--
ALTER TABLE `supervisormeetingstimes`
  ADD CONSTRAINT `supervisormeetingstimes_supervisorid_foreign` FOREIGN KEY (`supervisorid`) REFERENCES `supervisers` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
