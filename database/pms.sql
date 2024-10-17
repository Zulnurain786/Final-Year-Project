-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2024 at 05:36 PM
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
  `updated_at` timestamp NULL DEFAULT NULL,
  `pmo_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `allgroupslogins`
--

INSERT INTO `allgroupslogins` (`id`, `projectid`, `password`, `session`, `created_at`, `updated_at`, `pmo_id`) VALUES
(10, 'GIMS-BSCS-F202013', '12345678', '2024', '2024-03-20 15:59:22', '2024-03-20 15:59:22', 1),
(11, 'Fall-202013', '12345678', '2024', '2024-03-25 07:34:40', '2024-03-25 07:34:40', 1);

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
(11, 'pmo', '1', 'supervisor', '26', 'complete fyp111_1711197215.docx', '2024-03-23 07:33:35', '2024-03-23 07:33:35'),
(13, 'pmo', '1', 'supervisor', 'supervisor', 'complete fyp111_1711202104.docx', '2024-03-23 08:55:04', '2024-03-23 08:55:04'),
(14, 'pmo', '1', 'student', 'student', 'api\'s.txt', '2024-03-23 09:00:21', '2024-03-23 09:00:21'),
(15, 'pmo', '1', 'supervisor', 'supervisor', 'email.txt', '2024-03-23 09:05:48', '2024-03-23 09:05:48'),
(16, 'pmo', '1', 'student', 'student', 'flasholr_db.txt', '2024-03-23 09:06:02', '2024-03-23 09:06:02'),
(17, 'pmo', '1', 'both', 'both_id', 'email_1711202903.txt', '2024-03-23 09:08:23', '2024-03-23 09:08:23'),
(18, 'pmo', '1', 'supervisor', 'supervisor_id', 'api\'s_1711202913.txt', '2024-03-23 09:08:33', '2024-03-23 09:08:33'),
(20, 'pmo', '1', 'student', '12', 'email_1711203104.txt', '2024-03-23 09:11:44', '2024-03-23 09:11:44'),
(21, 'pmo', '1', 'supervisor', '26', 'email_1711203151.txt', '2024-03-23 09:12:31', '2024-03-23 09:12:31'),
(22, 'student', '12', 'supervisor', '26', 'email_1711303101.txt', '2024-03-24 12:58:21', '2024-03-24 12:58:21'),
(29, 'supervisor', '26', 'pmo', 'pmo', 'email_1711360809.txt', '2024-03-25 05:00:09', '2024-03-25 05:00:09'),
(30, 'supervisor', '26', 'student', '12', 'complete fyp111.docx', '2024-03-25 05:17:32', '2024-03-25 05:17:32');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `pmo_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(34, '2024_03_12_115522_create_supervisormeetingstimes_table', 30),
(35, '2024_03_20_202427_add_pmo_id_to_groupsubmiteditems_table', 31),
(36, '2024_03_20_202946_add_pmo_id_to_studentsrecords_table', 32),
(37, '2024_03_20_203242_add_pmo_id_to_supervisers_table', 33),
(38, '2024_03_24_172917_create_projectdocumentations_table', 34),
(39, '2024_03_25_103310_add_purposel_reason_to_preliminaryproposals_table', 35);

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `pmo_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news`, `sharedby`, `sharedfor`, `created_at`, `updated_at`, `pmo_id`) VALUES
(4, 'Superviser', 1, 'superviser', '2023-12-06 23:29:43', '2023-12-06 23:29:43', 0),
(5, 'Student', 1, 'student', '2023-12-06 23:29:50', '2023-12-06 23:29:50', 0),
(7, 'hlo', 1, 'superviser', '2023-12-08 03:54:50', '2023-12-08 03:54:50', 0),
(8, 's', 1, 'superviser', '2023-12-08 04:09:58', '2023-12-08 04:09:58', 0),
(9, 'Again Superviser', 1, 'superviser', '2023-12-08 04:12:52', '2023-12-08 04:12:52', 0),
(10, 'hlo', 1, 'superviser', '2023-12-08 04:15:08', '2023-12-08 04:15:08', 0),
(11, 's', 1, 'superviser', '2023-12-08 04:16:09', '2023-12-08 04:16:09', 0),
(12, 'hhhhhhhh', 1, 'superviser', '2023-12-08 04:18:50', '2023-12-08 04:18:50', 0),
(13, 'sd', 1, 'superviser', '2023-12-08 04:21:08', '2023-12-08 04:21:08', 0),
(14, 'z', 1, 'superviser', '2023-12-08 04:22:30', '2023-12-08 04:22:30', 0),
(15, 'sd', 1, 'superviser', '2023-12-08 04:23:12', '2023-12-08 04:23:12', 0),
(16, 'sdjhdb', 1, 'superviser', '2023-12-08 04:23:58', '2023-12-08 04:23:58', 0),
(17, 'hchg', 1, 'superviser', '2023-12-08 04:25:30', '2023-12-08 04:25:30', 0),
(18, 'j', 1, 'superviser', '2023-12-08 04:26:31', '2023-12-08 04:26:31', 0),
(21, 'hlo from pmo to superviser', 1, 'superviser', '2023-12-08 04:31:28', '2023-12-08 04:31:28', 0),
(22, 'hlo from pmo to superviser', 1, 'superviser', '2023-12-08 04:35:11', '2023-12-08 04:35:11', 0);

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
(1, 'Zunu Rathore', '03137898012', 'meet.zulnurain@gmail.com', '12345678', '2025', 1, 0, '2023-12-06 11:48:29', '2024-03-15 02:03:49'),
(3, 'Zunu Rathore', '03137898012', 'zunuain@gmail.com', '123', '2026', 1, 0, '2023-12-07 20:26:08', '2024-03-09 07:53:10'),
(6, 'Bilal Mazhar', '03137898012', 'bilal@gmail.com', '12345678', '2024', 1, 1, '2024-03-20 16:04:25', '2024-03-20 16:04:25');

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
  `purposelreason` varchar(500) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `preliminaryproposals`
--

INSERT INTO `preliminaryproposals` (`id`, `groupid`, `projectname`, `purposelstatus`, `superviserid`, `electivecourses`, `programminglanguagetools`, `purposelreason`, `created_at`, `updated_at`) VALUES
(1, 12, 'PMS', 'reject', 26, 'khkh', 'hkkh', 'ssk', '2024-03-20 17:04:48', '2024-03-25 06:49:04'),
(2, 12, 'PMS', 'approved', 26, 'kkl', 'klmlk', 'sak', '2024-03-25 06:33:17', '2024-03-25 06:55:51');

-- --------------------------------------------------------

--
-- Table structure for table `projectdocumentations`
--

CREATE TABLE `projectdocumentations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `purposelabstract` varchar(255) DEFAULT NULL,
  `documentation` varchar(255) DEFAULT NULL,
  `groupid` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projectdocumentations`
--

INSERT INTO `projectdocumentations` (`id`, `purposelabstract`, `documentation`, `groupid`, `created_at`, `updated_at`) VALUES
(2, 'abstract_GIMS-BSCS-F202013.docx', 'documentation_GIMS-BSCS-F202013.docx', 12, '2024-03-24 14:36:49', '2024-03-24 14:40:13');

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
(2, '2023', NULL, NULL),
(3, '2024', '2024-03-20 15:50:40', '2024-03-20 15:50:40');

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
(12, '20-arid-1747', '20-arid-1748', '0', 2, 10, 3, 0, 0, '2024-03-20 17:04:18', '2024-03-20 17:04:18'),
(13, '20-arid-1111', '20-arid-1113', '0', 2, 11, 3, 0, 0, '2024-03-25 07:39:06', '2024-03-25 07:39:06');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `pmo_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `studentsrecords`
--

INSERT INTO `studentsrecords` (`id`, `name`, `email`, `department`, `session`, `regno`, `pnumber`, `enrolledingroup`, `created_at`, `updated_at`, `pmo_id`) VALUES
(40, 'Zunu Rathore', 'meet.zulnurain@gmail.com', 'CS', '2024', '20-arid-1747', '03137898012', 1, '2024-03-20 15:59:43', '2024-03-20 17:04:18', 1),
(41, 'Ali', 'ali@gmail.com', 'CS', '2024', '20-arid-1748', '03137898012', 1, '2024-03-20 16:00:00', '2024-03-20 17:04:18', 1),
(42, 'Hamza', 'hamza@gmaill.com', 'CS', '2024', '20-arid-1740', '03137898012', 1, '2024-03-20 16:00:20', '2024-03-20 17:04:18', 1),
(43, 'saad', 'saad@gmail.com', 'CS', '2024', '20-arid-1111', '03137898012', 1, '2024-03-25 07:35:05', '2024-03-25 07:39:06', 1),
(44, 'mali', 'mali@gmail.com', 'CS', '2024', '20-arid-1113', '03137898012', 1, '2024-03-25 07:35:26', '2024-03-25 07:39:06', 1);

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `pmo_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `supervisers`
--

INSERT INTO `supervisers` (`id`, `name`, `domain`, `pnumber`, `email`, `password`, `rolid`, `loginstatus`, `totalviewnews`, `created_at`, `updated_at`, `pmo_id`) VALUES
(25, 'Zunu Rathore', 'Web Development', '03137898012', 'meet.zulnurain@gmail.com', '12345678', 2, 1, 0, '2024-03-20 16:06:49', '2024-03-20 16:06:49', 1),
(26, 'Bilal Mazhar', 'Web Development', '03137898012', 'bilal@gmail.com', '12345678', 2, 1, 0, '2024-03-20 16:07:22', '2024-03-20 16:07:22', 1);

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
(1, 25, '2024', '2024-03-20 16:06:49', '2024-03-20 16:06:49'),
(2, 26, '2024', '2024-03-20 16:07:22', '2024-03-20 16:07:22');

-- --------------------------------------------------------

--
-- Table structure for table `supervisormeetingstimes`
--

CREATE TABLE `supervisormeetingstimes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `datetime` time NOT NULL,
  `detail` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `supervisorid` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `supervisormeetingstimes`
--

INSERT INTO `supervisormeetingstimes` (`id`, `datetime`, `detail`, `day`, `date`, `supervisorid`, `created_at`, `updated_at`) VALUES
(1, '09:28:00', 'hhh', 'Tuesday', '2024-03-05', 26, '2024-03-25 05:24:58', '2024-03-25 05:24:58');

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
  ADD KEY `groupsubmiteditems_groupid_foreign` (`groupid`),
  ADD KEY `groupsubmiteditems_pmo_id_foreign` (`pmo_id`);

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
-- Indexes for table `projectdocumentations`
--
ALTER TABLE `projectdocumentations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projectdocumentations_groupid_foreign` (`groupid`);

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
  ADD UNIQUE KEY `studentsrecords_regno_unique` (`regno`),
  ADD KEY `studentsrecords_pmo_id_foreign` (`pmo_id`);

--
-- Indexes for table `supervisers`
--
ALTER TABLE `supervisers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `supervisers_email_unique` (`email`),
  ADD KEY `supervisers_pmo_id_foreign` (`pmo_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fileuplouds`
--
ALTER TABLE `fileuplouds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `groupsubmiteditems`
--
ALTER TABLE `groupsubmiteditems`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `preliminaryproposals`
--
ALTER TABLE `preliminaryproposals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `projectdocumentations`
--
ALTER TABLE `projectdocumentations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `studentgroups`
--
ALTER TABLE `studentgroups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `studentsrecords`
--
ALTER TABLE `studentsrecords`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `supervisers`
--
ALTER TABLE `supervisers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `supervisersessions`
--
ALTER TABLE `supervisersessions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `supervisormeetingstimes`
--
ALTER TABLE `supervisormeetingstimes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `groupsubmiteditems`
--
ALTER TABLE `groupsubmiteditems`
  ADD CONSTRAINT `groupsubmiteditems_groupid_foreign` FOREIGN KEY (`groupid`) REFERENCES `studentgroups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `groupsubmiteditems_pmo_id_foreign` FOREIGN KEY (`pmo_id`) REFERENCES `pmos` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `preliminaryproposals`
--
ALTER TABLE `preliminaryproposals`
  ADD CONSTRAINT `preliminaryproposals_groupid_foreign` FOREIGN KEY (`groupid`) REFERENCES `studentgroups` (`id`),
  ADD CONSTRAINT `preliminaryproposals_ibfk_1` FOREIGN KEY (`superviserid`) REFERENCES `supervisers` (`id`);

--
-- Constraints for table `projectdocumentations`
--
ALTER TABLE `projectdocumentations`
  ADD CONSTRAINT `projectdocumentations_groupid_foreign` FOREIGN KEY (`groupid`) REFERENCES `studentgroups` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `studentgroups`
--
ALTER TABLE `studentgroups`
  ADD CONSTRAINT `studentgroups_loginid_foreign` FOREIGN KEY (`loginid`) REFERENCES `allgroupslogins` (`id`);

--
-- Constraints for table `studentsrecords`
--
ALTER TABLE `studentsrecords`
  ADD CONSTRAINT `studentsrecords_pmo_id_foreign` FOREIGN KEY (`pmo_id`) REFERENCES `pmos` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `supervisers`
--
ALTER TABLE `supervisers`
  ADD CONSTRAINT `supervisers_pmo_id_foreign` FOREIGN KEY (`pmo_id`) REFERENCES `pmos` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `supervisormeetingstimes`
--
ALTER TABLE `supervisormeetingstimes`
  ADD CONSTRAINT `supervisormeetingstimes_supervisorid_foreign` FOREIGN KEY (`supervisorid`) REFERENCES `supervisers` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
