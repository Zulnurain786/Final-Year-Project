-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2024 at 12:11 PM
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
  `loginstatus` int(11) NOT NULL DEFAULT 1,
  `pmo_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `allgroupslogins`
--

INSERT INTO `allgroupslogins` (`id`, `projectid`, `password`, `session`, `created_at`, `updated_at`, `loginstatus`, `pmo_id`) VALUES
(20, 'GIMS-BSCS-F202015', '12345678', '2024', '2024-05-16 03:12:26', '2024-05-16 03:12:26', 1, 8),
(21, 'GIMS-BSCS-F202011', '12345678', '2023', '2024-05-16 03:12:45', '2024-05-16 03:12:45', 1, 8),
(22, 'GIMS-BSCS-F202012', '12345678', '2024', '2024-05-16 03:13:19', '2024-05-16 03:13:19', 1, 8),
(23, 'GIMS-BSCS-F202013', '12345678', '2023', '2024-05-16 03:13:35', '2024-05-16 03:13:35', 1, 8),
(24, 'GIMS-BSCS-F202014', '12345678', '2023', '2024-05-16 03:13:45', '2024-05-16 03:13:45', 1, 8);

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
(39, 'student', '27', 'supervisor', '59', 'abstract_GIMS-BSCS-F202013 (4).docx', '2024-05-16 03:52:58', '2024-05-16 03:52:58'),
(40, 'student', '26', 'supervisor', '56', 'abstract_GIMS-BSCS-F202013 (4)_1715849665.docx', '2024-05-16 03:54:25', '2024-05-16 03:54:25');

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

--
-- Dumping data for table `groupsubmiteditems`
--

INSERT INTO `groupsubmiteditems` (`id`, `groupid`, `booklet`, `CD`, `flex`, `created_at`, `updated_at`, `pmo_id`) VALUES
(2, 27, 1, 1, 1, '2024-05-16 05:02:38', '2024-05-16 05:02:38', 8);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `queue`, `payload`, `attempts`, `reserved_at`, `available_at`, `created_at`) VALUES
(52, 'default', '{\"uuid\":\"3059513c-b427-4585-897c-d59618da6ce3\",\"displayName\":\"Closure (pmocontroller.php:82)\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Queue\\\\CallQueuedClosure\",\"command\":\"O:34:\\\"Illuminate\\\\Queue\\\\CallQueuedClosure\\\":2:{s:7:\\\"closure\\\";O:47:\\\"Laravel\\\\SerializableClosure\\\\SerializableClosure\\\":1:{s:12:\\\"serializable\\\";O:46:\\\"Laravel\\\\SerializableClosure\\\\Serializers\\\\Signed\\\":2:{s:12:\\\"serializable\\\";s:544:\\\"O:46:\\\"Laravel\\\\SerializableClosure\\\\Serializers\\\\Native\\\":5:{s:3:\\\"use\\\";a:1:{s:5:\\\"email\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:14:\\\"App\\\\Models\\\\pmo\\\";s:2:\\\"id\\\";i:8;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}}s:8:\\\"function\\\";s:135:\\\"function() use (&$email) {\\n                    $email->passwordresettoken = null;\\n                    $email->save();\\n                }\\\";s:5:\\\"scope\\\";s:34:\\\"App\\\\Http\\\\Controllers\\\\pmocontroller\\\";s:4:\\\"this\\\";N;s:4:\\\"self\\\";s:32:\\\"000000000000012b0000000000000000\\\";}\\\";s:4:\\\"hash\\\";s:44:\\\"csmQEAHx9skJr+AE9LVpP0QOXiiQG86uYJ2oeC5Zl+M=\\\";}}s:5:\\\"delay\\\";O:25:\\\"Illuminate\\\\Support\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2024-05-01 05:00:25.922505\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1714539625, 1714539567);

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
(39, '2024_03_25_103310_add_purposel_reason_to_preliminaryproposals_table', 35),
(40, '2024_03_28_054125_add_forgetpassword_tokken_to_pmos_table', 36),
(41, '2024_03_30_082529_add_loginstastus_to_allgroupslogins_table', 37),
(42, '2024_03_30_083642_add_session_to_studentgroups_table', 38),
(43, '2024_04_01_093444_create_jobs_table', 39),
(44, '2024_04_01_105024_create_projectweightages_table', 40),
(45, '2024_03_20_202723_add_pmo_id_to_news_table', 41),
(46, '2024_04_04_101925_add_session_to_supervisersessions_table', 42),
(47, '2024_04_04_103004_add_groupid_supervisrid_to_preliminaryproposals_table', 43),
(48, '2024_04_04_103803_add_loginid_to_studentgroups_table', 44),
(49, '2024_03_20_200743_add_pmo_id_to_allgroupslogin_table', 45),
(50, '2024_04_08_130326_add_valuesofweightage_to_projectweightages_table', 46);

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
(22, 'main dashboard superviser', 1, 'superviser', '2024-04-30 04:48:20', '2024-04-30 04:48:20', 8),
(23, 'main dashboard student', 1, 'student', '2024-04-30 04:48:27', '2024-04-30 04:48:27', 8),
(24, 'main dashboard both', 1, 'both', '2024-04-30 04:48:34', '2024-04-30 04:48:34', 8),
(25, 'supervisor dashboard superviser', 1, 'superviser', '2024-04-30 04:49:01', '2024-04-30 04:49:01', 8),
(26, 'student dashboard student', 1, 'student', '2024-04-30 04:49:18', '2024-04-30 04:49:18', 8),
(27, 'student dashboard both', 1, 'both', '2024-04-30 04:49:31', '2024-04-30 04:49:31', 8),
(28, 'supervisor dshborad supervisor', 1, 'superviser', '2024-04-30 04:52:12', '2024-04-30 04:52:12', 8),
(29, 'supervisor dashboard student', 1, 'student', '2024-04-30 04:52:32', '2024-04-30 04:52:32', 8),
(30, 'supervisor dashboard both', 1, 'both', '2024-04-30 04:52:40', '2024-04-30 04:52:40', 8),
(33, 'both', 1, 'both', '2024-05-13 23:20:16', '2024-05-13 23:20:16', 8),
(34, 'supervisor', 1, 'superviser', '2024-05-13 23:20:23', '2024-05-13 23:20:23', 8),
(35, 'student', 1, 'student', '2024-05-13 23:20:28', '2024-05-13 23:20:28', 8);

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `passwordresettoken` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pmos`
--

INSERT INTO `pmos` (`id`, `name`, `pnumber`, `email`, `password`, `session`, `rolid`, `loginstatus`, `created_at`, `updated_at`, `passwordresettoken`) VALUES
(8, 'zulnurain', '03137898078', 'meet.zulnurain@gmail.com', '12345678', '2025', 1, 1, '2024-04-04 08:19:58', '2024-05-16 00:51:31', NULL),
(9, 'sana', '03137898012', 'sana@gmail.com', '12345678', '2025', 1, 1, '2024-05-13 23:14:19', '2024-05-13 23:20:38', NULL),
(10, 'saira', '03137898012', 'saira@gmailcom', '12345678', '2023', 1, 1, '2024-05-13 23:15:49', '2024-05-13 23:15:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `preliminaryproposals`
--

CREATE TABLE `preliminaryproposals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `projectname` varchar(255) NOT NULL,
  `purposelstatus` varchar(255) NOT NULL DEFAULT 'NotApproved',
  `electivecourses` text DEFAULT NULL,
  `programminglanguagetools` text DEFAULT NULL,
  `purposelreason` varchar(500) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `groupid` bigint(20) UNSIGNED NOT NULL,
  `superviserid` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `preliminaryproposals`
--

INSERT INTO `preliminaryproposals` (`id`, `projectname`, `purposelstatus`, `electivecourses`, `programminglanguagetools`, `purposelreason`, `created_at`, `updated_at`, `groupid`, `superviserid`) VALUES
(21, 'PMS', 'approved', 'PHP,JAVA,Laraval', 'sql,php,laraval,java', 'ok', '2024-05-16 03:22:24', '2024-05-16 05:07:33', 25, 56),
(22, 'HZS', 'reject', 'AI', 'AI', 'no', '2024-05-16 03:45:58', '2024-05-16 04:02:15', 26, 56),
(23, 'Ai', 'approved', 'oop', 'laravell', 'ok', '2024-05-16 03:51:46', '2024-05-16 04:03:37', 27, 59),
(24, 'HZS', 'approved', 'AI', 'AI', 'ok', '2024-05-16 04:08:03', '2024-05-16 04:09:50', 26, 58);

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
(9, 'abstract_GIMS-BSCS-F202012.docx', NULL, 27, '2024-05-16 03:52:34', '2024-05-16 03:52:34'),
(10, NULL, 'documentation_GIMS-BSCS-F202011.docx', 26, '2024-05-16 03:54:12', '2024-05-16 03:54:12'),
(11, NULL, 'documentation_GIMS-BSCS-F202015.docx', 25, '2024-05-16 03:55:17', '2024-05-16 03:55:17');

-- --------------------------------------------------------

--
-- Table structure for table `projectweightages`
--

CREATE TABLE `projectweightages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `purposelid` bigint(20) UNSIGNED NOT NULL,
  `supervisorid` bigint(20) UNSIGNED NOT NULL,
  `keyNvalue` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`keyNvalue`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `valuesofweighatage` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projectweightages`
--

INSERT INTO `projectweightages` (`id`, `purposelid`, `supervisorid`, `keyNvalue`, `created_at`, `updated_at`, `valuesofweighatage`) VALUES
(13, 23, 59, '{\"Front-End\":\"50\",\"Back-End\":\"50\"}', '2024-05-16 04:04:20', '2024-05-16 04:05:05', '{\"Front-End\":\"50\",\"Back-End\":\"50\"}'),
(14, 24, 58, '{\"DOC\":\"50\",\"Project\":\"50\"}', '2024-05-16 04:11:02', '2024-05-16 04:11:54', '{\"DOC\":\"50\",\"Project\":\"60\"}'),
(15, 21, 58, '{\"Front-End\":\"50\",\"DOC\":\"30\",\"Back-End\":\"20\"}', '2024-05-16 05:05:35', '2024-05-16 05:06:50', '{\"Front-End\":\"50\",\"DOC\":\"30\",\"Back-End\":\"50\"}');

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
(4, '2023', '2024-05-16 03:05:15', '2024-05-16 03:05:15'),
(5, '2024', '2024-05-16 03:05:23', '2024-05-16 03:05:23');

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
  `roleid` int(11) NOT NULL DEFAULT 3,
  `loginstatus` int(11) NOT NULL DEFAULT 0,
  `totalviewnews` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `session` varchar(255) NOT NULL,
  `loginid` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `studentgroups`
--

INSERT INTO `studentgroups` (`id`, `m1regno`, `m2regno`, `m3regno`, `groupmembers`, `roleid`, `loginstatus`, `totalviewnews`, `created_at`, `updated_at`, `session`, `loginid`) VALUES
(25, '20-Arid-1717', '20-Arid-1716', '20-Arid-1718', 3, 3, 0, 0, '2024-05-16 03:20:20', '2024-05-16 03:20:20', '2024', 20),
(26, '20-Arid-1719', '20-Arid-1720', '20-Arid-1721', 3, 3, 0, 0, '2024-05-16 03:24:24', '2024-05-16 03:24:24', '2024', 21),
(27, '20-Arid-1724', '20-Arid-1725', '20-Arid-1727', 3, 3, 0, 0, '2024-05-16 03:50:45', '2024-05-16 03:50:45', '2024', 22);

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
  `pmo_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `studentsrecords`
--

INSERT INTO `studentsrecords` (`id`, `name`, `email`, `department`, `session`, `regno`, `pnumber`, `enrolledingroup`, `created_at`, `updated_at`, `pmo_id`) VALUES
(64, 'Sana khalil', 'sana@gmail.com', 'CS', '2024', '20-Arid-1716', '3137898012', 1, '2024-05-16 03:04:21', '2024-05-16 03:20:20', 8),
(65, 'Zunu rathore', 'zunu@gmail.com', 'CS', '2024', '20-Arid-1717', '3137898012', 1, '2024-05-16 03:04:21', '2024-05-16 03:20:20', 8),
(66, 'Saira tasleem', 'saira@gmail.com', 'CS', '2024', '20-Arid-1718', '3137898012', 1, '2024-05-16 03:04:21', '2024-05-16 03:20:20', 8),
(67, 'Qasim Ali', 'Qasim@gmail.com', 'CS', '2024', '20-Arid-1719', '3137898012', 1, '2024-05-16 03:04:21', '2024-05-16 03:24:24', 8),
(68, 'Zaman ', 'Zaman@gmail.com', 'CS', '2024', '20-Arid-1720', '3137898012', 1, '2024-05-16 03:04:21', '2024-05-16 03:24:24', 8),
(69, 'Ali', 'ali@gmail.com', 'CS', '2024', '20-Arid-1721', '3137898012', 1, '2024-05-16 03:04:21', '2024-05-16 03:24:24', 8),
(70, 'Hamza', 'hamza@gmail.com', 'CS', '2024', '20-Arid-1722', '3137898012', 0, '2024-05-16 03:04:21', '2024-05-16 03:04:21', 8),
(71, 'habib', 'habib@gmail.com', 'CS', '2024', '20-Arid-1723', '3137898012', 0, '2024-05-16 03:04:21', '2024-05-16 03:04:21', 8),
(72, 'abdullah', 'abdulla@gmail.com', 'CS', '2024', '20-Arid-1724', '3137898012', 1, '2024-05-16 03:04:21', '2024-05-16 03:50:45', 8),
(73, 'husnain', 'husnain@gmail.com', 'CS', '2024', '20-Arid-1725', '3137898012', 1, '2024-05-16 03:04:21', '2024-05-16 03:50:45', 8),
(74, 'zulqurnain', 'zulqurnain@gmail.com', 'CS', '2024', '20-Arid-1726', '3137898012', 0, '2024-05-16 03:04:21', '2024-05-16 03:04:21', 8),
(75, 'khalil', 'khalil@gmail.com', 'CS', '2024', '20-Arid-1727', '3137898012', 1, '2024-05-16 03:04:21', '2024-05-16 03:50:45', 8),
(76, 'arshad', 'arshad@gmail.com', 'CS', '2024', '20-Arid-1728', '3137898012', 0, '2024-05-16 03:04:21', '2024-05-16 03:04:21', 8),
(77, 'tasleem', 'tasleem@gmail.com', 'CS', '2024', '20-Arid-1729', '3137898012', 0, '2024-05-16 03:04:21', '2024-05-16 03:04:21', 8),
(78, 'sulman', 'sulman@gmail.com', 'CS', '2024', '20-Arid-1730', '3137898012', 0, '2024-05-16 03:04:21', '2024-05-16 03:04:21', 8),
(79, 'umair', 'umair@gmail.com', 'CS', '2024', '20-Arid-1731', '3137898012', 0, '2024-05-16 03:04:21', '2024-05-16 03:04:21', 8),
(80, 'moiz', 'moiz@gmail.com', 'CS', '2024', '20-Arid-1732', '3137898012', 0, '2024-05-16 03:04:21', '2024-05-16 03:04:21', 8),
(81, 'arsal', 'arsal@gmail.com', 'CS', '2024', '20-Arid-1733', '3137898012', 0, '2024-05-16 03:04:21', '2024-05-16 03:04:21', 8),
(82, 'ahad', 'ahad@gmail.com', 'CS', '2024', '20-Arid-1734', '3137898012', 0, '2024-05-16 03:04:21', '2024-05-16 03:04:21', 8),
(83, 'maria', 'maria@gmail.com', 'CS', '2024', '20-Arid-1735', '3137898012', 0, '2024-05-16 03:04:21', '2024-05-16 03:04:21', 8),
(84, 'sania', 'sania@gmail.com', 'CS', '2024', '20-Arid-1736', '3137898012', 0, '2024-05-16 03:04:21', '2024-05-16 03:04:21', 8),
(85, 'rania', 'rania@gmail.com', 'CS', '2024', '20-Arid-1737', '3137898012', 0, '2024-05-16 03:04:21', '2024-05-16 03:04:21', 8),
(86, 'ayesha', 'ayesha@gmail.com', 'CS', '2024', '20-Arid-1738', '3137898012', 0, '2024-05-16 03:04:21', '2024-05-16 03:04:21', 8),
(87, 'hania', 'hania@gmail.com', 'CS', '2024', '20-Arid-1739', '3137898012', 0, '2024-05-16 03:04:21', '2024-05-16 03:04:21', 8),
(88, 'saman', 'saman@gmail.com', 'CS', '2024', '20-Arid-1740', '3137898012', 0, '2024-05-16 03:04:21', '2024-05-16 03:04:21', 8),
(89, 'esha', 'esha@gmail.com', 'CS', '2024', '20-Arid-1741', '3137898012', 0, '2024-05-16 03:04:21', '2024-05-16 03:04:21', 8),
(90, 'eshal', 'eshal@gmail.com', 'CS', '2024', '20-Arid-1742', '3137898012', 0, '2024-05-16 03:04:21', '2024-05-16 03:04:21', 8);

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
(56, 'Bilal Mazhar', 'Web Development', '03137898012', 'bilalmazhar@gmail.com', '12345678', 2, 1, 0, '2024-05-16 03:14:40', '2024-05-16 03:17:30', 8),
(57, 'Awais', 'Web Development', '03137898012', 'awais@gmail.com', '12345678', 2, 1, 0, '2024-05-16 03:15:31', '2024-05-16 03:15:31', 8),
(58, 'Samiullah', 'Web Development', '03137898012', 'sami@gmail.com', '12345678', 2, 1, 0, '2024-05-16 03:16:02', '2024-05-16 03:16:02', 8),
(59, 'Ashar', 'Web Development', '03137898012', 'ashar@gmail.com', '12345678', 2, 1, 0, '2024-05-16 03:16:41', '2024-05-16 03:16:41', 8),
(60, 'waqas', 'Web Development', '03137898012', 'waqas@gmail.com', '12345678', 2, 1, 0, '2024-05-16 03:17:02', '2024-05-16 03:17:02', 8);

-- --------------------------------------------------------

--
-- Table structure for table `supervisersessions`
--

CREATE TABLE `supervisersessions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `superviserid` bigint(20) UNSIGNED NOT NULL,
  `session` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `supervisersessions`
--

INSERT INTO `supervisersessions` (`id`, `created_at`, `updated_at`, `superviserid`, `session`) VALUES
(9, '2024-05-16 03:14:40', '2024-05-16 03:14:40', 56, '2024'),
(10, '2024-05-16 03:15:31', '2024-05-16 03:15:31', 57, '2023'),
(11, '2024-05-16 03:16:02', '2024-05-16 03:16:02', 58, '2024'),
(12, '2024-05-16 03:16:41', '2024-05-16 03:16:41', 59, '2024'),
(13, '2024-05-16 03:17:02', '2024-05-16 03:17:02', 60, '2023');

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
-- Indexes for dumped tables
--

--
-- Indexes for table `allgroupslogins`
--
ALTER TABLE `allgroupslogins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `allgroupslogins_email_unique` (`projectid`),
  ADD KEY `allgroupslogins_pmo_id_foreign` (`pmo_id`);

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
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_pmo_id_foreign` (`pmo_id`);

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
  ADD KEY `preliminaryproposals_groupid_foreign` (`groupid`),
  ADD KEY `preliminaryproposals_superviserid_foreign` (`superviserid`);

--
-- Indexes for table `projectdocumentations`
--
ALTER TABLE `projectdocumentations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projectdocumentations_groupid_foreign` (`groupid`);

--
-- Indexes for table `projectweightages`
--
ALTER TABLE `projectweightages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projectweightages_purposelid_foreign` (`purposelid`),
  ADD KEY `projectweightages_supervisorid_foreign` (`supervisorid`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `supervisersessions_superviserid_foreign` (`superviserid`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `fileuplouds`
--
ALTER TABLE `fileuplouds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `groupsubmiteditems`
--
ALTER TABLE `groupsubmiteditems`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `preliminaryproposals`
--
ALTER TABLE `preliminaryproposals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `projectdocumentations`
--
ALTER TABLE `projectdocumentations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `projectweightages`
--
ALTER TABLE `projectweightages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `studentgroups`
--
ALTER TABLE `studentgroups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `studentsrecords`
--
ALTER TABLE `studentsrecords`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `supervisers`
--
ALTER TABLE `supervisers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `supervisersessions`
--
ALTER TABLE `supervisersessions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `supervisormeetingstimes`
--
ALTER TABLE `supervisormeetingstimes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `allgroupslogins`
--
ALTER TABLE `allgroupslogins`
  ADD CONSTRAINT `allgroupslogins_pmo_id_foreign` FOREIGN KEY (`pmo_id`) REFERENCES `pmos` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `groupsubmiteditems`
--
ALTER TABLE `groupsubmiteditems`
  ADD CONSTRAINT `groupsubmiteditems_groupid_foreign` FOREIGN KEY (`groupid`) REFERENCES `studentgroups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `groupsubmiteditems_pmo_id_foreign` FOREIGN KEY (`pmo_id`) REFERENCES `pmos` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_pmo_id_foreign` FOREIGN KEY (`pmo_id`) REFERENCES `pmos` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `preliminaryproposals`
--
ALTER TABLE `preliminaryproposals`
  ADD CONSTRAINT `preliminaryproposals_groupid_foreign` FOREIGN KEY (`groupid`) REFERENCES `studentgroups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `preliminaryproposals_superviserid_foreign` FOREIGN KEY (`superviserid`) REFERENCES `supervisers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `projectdocumentations`
--
ALTER TABLE `projectdocumentations`
  ADD CONSTRAINT `projectdocumentations_groupid_foreign` FOREIGN KEY (`groupid`) REFERENCES `studentgroups` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `projectweightages`
--
ALTER TABLE `projectweightages`
  ADD CONSTRAINT `projectweightages_purposelid_foreign` FOREIGN KEY (`purposelid`) REFERENCES `preliminaryproposals` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `projectweightages_supervisorid_foreign` FOREIGN KEY (`supervisorid`) REFERENCES `supervisers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `studentgroups`
--
ALTER TABLE `studentgroups`
  ADD CONSTRAINT `studentgroups_loginid_foreign` FOREIGN KEY (`loginid`) REFERENCES `allgroupslogins` (`id`) ON DELETE CASCADE;

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
-- Constraints for table `supervisersessions`
--
ALTER TABLE `supervisersessions`
  ADD CONSTRAINT `supervisersessions_superviserid_foreign` FOREIGN KEY (`superviserid`) REFERENCES `supervisers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `supervisormeetingstimes`
--
ALTER TABLE `supervisormeetingstimes`
  ADD CONSTRAINT `supervisormeetingstimes_supervisorid_foreign` FOREIGN KEY (`supervisorid`) REFERENCES `supervisers` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
