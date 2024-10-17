-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2024 at 01:43 PM
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
(16, 'GIMS-BSCS-F202013', '12345678', '2024', '2024-04-09 14:33:44', '2024-04-09 14:42:33', 1, 8);

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

--
-- Dumping data for table `failed_jobs`
--

INSERT INTO `failed_jobs` (`id`, `uuid`, `connection`, `queue`, `payload`, `exception`, `failed_at`) VALUES
(1, '74fde428-6f26-4b98-bc2f-a0ce04551c58', 'database', 'default', '{\"uuid\":\"74fde428-6f26-4b98-bc2f-a0ce04551c58\",\"displayName\":\"Closure (pmocontroller.php:56)\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Queue\\\\CallQueuedClosure\",\"command\":\"O:34:\\\"Illuminate\\\\Queue\\\\CallQueuedClosure\\\":2:{s:7:\\\"closure\\\";O:47:\\\"Laravel\\\\SerializableClosure\\\\SerializableClosure\\\":1:{s:12:\\\"serializable\\\";O:46:\\\"Laravel\\\\SerializableClosure\\\\Serializers\\\\Signed\\\":2:{s:12:\\\"serializable\\\";s:704:\\\"O:46:\\\"Laravel\\\\SerializableClosure\\\\Serializers\\\\Native\\\":5:{s:3:\\\"use\\\";a:1:{s:5:\\\"email\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:14:\\\"App\\\\Models\\\\pmo\\\";s:2:\\\"id\\\";i:1;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}}s:8:\\\"function\\\";s:295:\\\"function() use (&$email) {\\n                $maildata = [\\n                    \'title\' => \'GIMS\',\\n                    \'body\' => \'Forget Password OTP: \' . $tok,\\n                ];\\n                \\\\Mail::to($email->email)->send(new \\\\App\\\\Mail\\\\forgetpassword($maildata));                \\n            }\\\";s:5:\\\"scope\\\";s:34:\\\"App\\\\Http\\\\Controllers\\\\pmocontroller\\\";s:4:\\\"this\\\";N;s:4:\\\"self\\\";s:32:\\\"000000000000012c0000000000000000\\\";}\\\";s:4:\\\"hash\\\";s:44:\\\"Vqd2XS+uPOuDOuY+tm6CpfzdWB6J\\/9zwspRVc5XqCUI=\\\";}}s:5:\\\"delay\\\";O:25:\\\"Illuminate\\\\Support\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2024-04-01 09:59:13.645196\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 'ErrorException: Undefined variable $tok in laravel-serializable-closure://function() use (&$email) {\n                $maildata = [\n                    \'title\' => \'GIMS\',\n                    \'body\' => \'Forget Password OTP: \' . $tok,\n                ];\n                \\Mail::to($email->email)->send(new \\App\\Mail\\forgetpassword($maildata));                \n            }:5\nStack trace:\n#0 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Bootstrap\\HandleExceptions.php(255): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleError(2, \'Undefined varia...\', \'laravel-seriali...\', 5)\n#1 laravel-serializable-closure://function() use (&$email) {\n                $maildata = [\n                    \'title\' => \'GIMS\',\n                    \'body\' => \'Forget Password OTP: \' . $tok,\n                ];\n                \\Mail::to($email->email)->send(new \\App\\Mail\\forgetpassword($maildata));                \n            }(5): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->Illuminate\\Foundation\\Bootstrap\\{closure}(2, \'Undefined varia...\', \'laravel-seriali...\', 5)\n#2 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): App\\Http\\Controllers\\pmocontroller::{closure}(Object(Illuminate\\Queue\\CallQueuedClosure))\n#3 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#4 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(81): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#5 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Object(Closure), Object(Closure))\n#6 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Object(Closure), Array, NULL)\n#7 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedClosure.php(69): Illuminate\\Container\\Container->call(Object(Closure), Array)\n#8 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\CallQueuedClosure->handle(Object(Illuminate\\Foundation\\Application))\n#9 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#10 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#11 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#12 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#13 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#14 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Queue\\CallQueuedClosure))\n#15 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Queue\\CallQueuedClosure))\n#16 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#17 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(123): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Queue\\CallQueuedClosure), false)\n#18 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(Illuminate\\Queue\\CallQueuedClosure))\n#19 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Queue\\CallQueuedClosure))\n#20 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#21 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\CallQueuedClosure))\n#22 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#23 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#24 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#25 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#26 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(137): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#27 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(120): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#28 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#29 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#30 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#31 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#32 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#33 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(211): Illuminate\\Container\\Container->call(Array)\n#34 D:\\MY Projects\\FIneal-year\\vendor\\symfony\\console\\Command\\Command.php(326): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#35 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(180): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#36 D:\\MY Projects\\FIneal-year\\vendor\\symfony\\console\\Application.php(1096): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#37 D:\\MY Projects\\FIneal-year\\vendor\\symfony\\console\\Application.php(324): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#38 D:\\MY Projects\\FIneal-year\\vendor\\symfony\\console\\Application.php(175): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#39 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(201): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#40 D:\\MY Projects\\FIneal-year\\artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#41 {main}', '2024-04-01 04:59:15'),
(2, 'ceddcd6b-2d40-49fd-b0ac-1805a1cf62a5', 'database', 'default', '{\"uuid\":\"ceddcd6b-2d40-49fd-b0ac-1805a1cf62a5\",\"displayName\":\"App\\\\Jobs\\\\GenerateMidEvaPdf\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\GenerateMidEvaPdf\",\"command\":\"O:26:\\\"App\\\\Jobs\\\\GenerateMidEvaPdf\\\":1:{s:5:\\\"\\u0000*\\u0000id\\\";s:2:\\\"12\\\";}\"}}', 'Error: Class \"Illuminate\\Support\\Facades\\Pdf\" not found in D:\\MY Projects\\FIneal-year\\app\\Jobs\\GenerateMidEvaPdf.php:38\nStack trace:\n#0 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): App\\Jobs\\GenerateMidEvaPdf->handle()\n#1 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#2 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#3 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#4 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#5 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#6 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(App\\Jobs\\GenerateMidEvaPdf))\n#7 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\GenerateMidEvaPdf))\n#8 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#9 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(123): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\GenerateMidEvaPdf), false)\n#10 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(App\\Jobs\\GenerateMidEvaPdf))\n#11 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\GenerateMidEvaPdf))\n#12 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#13 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(App\\Jobs\\GenerateMidEvaPdf))\n#14 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#15 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#16 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#17 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#18 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(137): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#19 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(120): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#20 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#21 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#22 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#23 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#24 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#25 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(211): Illuminate\\Container\\Container->call(Array)\n#26 D:\\MY Projects\\FIneal-year\\vendor\\symfony\\console\\Command\\Command.php(326): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#27 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(180): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#28 D:\\MY Projects\\FIneal-year\\vendor\\symfony\\console\\Application.php(1096): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#29 D:\\MY Projects\\FIneal-year\\vendor\\symfony\\console\\Application.php(324): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#30 D:\\MY Projects\\FIneal-year\\vendor\\symfony\\console\\Application.php(175): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#31 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(201): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#32 D:\\MY Projects\\FIneal-year\\artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#33 {main}', '2024-04-03 06:14:27'),
(3, '0792bb4b-a97b-439b-84a7-706da2ed8f58', 'database', 'default', '{\"uuid\":\"0792bb4b-a97b-439b-84a7-706da2ed8f58\",\"displayName\":\"App\\\\Jobs\\\\GenerateMidEvaPdf\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\GenerateMidEvaPdf\",\"command\":\"O:26:\\\"App\\\\Jobs\\\\GenerateMidEvaPdf\\\":1:{s:5:\\\"\\u0000*\\u0000id\\\";s:2:\\\"12\\\";}\"}}', 'Error: Class \"Illuminate\\Support\\Facades\\Pdf\" not found in D:\\MY Projects\\FIneal-year\\app\\Jobs\\GenerateMidEvaPdf.php:38\nStack trace:\n#0 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): App\\Jobs\\GenerateMidEvaPdf->handle()\n#1 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#2 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#3 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#4 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#5 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#6 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(App\\Jobs\\GenerateMidEvaPdf))\n#7 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\GenerateMidEvaPdf))\n#8 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#9 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(123): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\GenerateMidEvaPdf), false)\n#10 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(App\\Jobs\\GenerateMidEvaPdf))\n#11 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\GenerateMidEvaPdf))\n#12 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#13 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(App\\Jobs\\GenerateMidEvaPdf))\n#14 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#15 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#16 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#17 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#18 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(137): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#19 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(120): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#20 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#21 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#22 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#23 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#24 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#25 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(211): Illuminate\\Container\\Container->call(Array)\n#26 D:\\MY Projects\\FIneal-year\\vendor\\symfony\\console\\Command\\Command.php(326): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#27 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(180): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#28 D:\\MY Projects\\FIneal-year\\vendor\\symfony\\console\\Application.php(1096): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#29 D:\\MY Projects\\FIneal-year\\vendor\\symfony\\console\\Application.php(324): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#30 D:\\MY Projects\\FIneal-year\\vendor\\symfony\\console\\Application.php(175): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#31 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(201): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#32 D:\\MY Projects\\FIneal-year\\artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#33 {main}', '2024-04-03 06:15:49'),
(4, 'e2d63ce2-f069-4e10-8ff0-eb4523945fe8', 'database', 'default', '{\"uuid\":\"e2d63ce2-f069-4e10-8ff0-eb4523945fe8\",\"displayName\":\"App\\\\Jobs\\\\GenerateMidEvaPdf\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\GenerateMidEvaPdf\",\"command\":\"O:26:\\\"App\\\\Jobs\\\\GenerateMidEvaPdf\\\":1:{s:5:\\\"\\u0000*\\u0000id\\\";s:2:\\\"12\\\";}\"}}', 'Error: Class \"Illuminate\\Support\\Facades\\Pdf\" not found in D:\\MY Projects\\FIneal-year\\app\\Jobs\\GenerateMidEvaPdf.php:38\nStack trace:\n#0 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): App\\Jobs\\GenerateMidEvaPdf->handle()\n#1 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#2 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#3 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#4 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#5 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#6 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(App\\Jobs\\GenerateMidEvaPdf))\n#7 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\GenerateMidEvaPdf))\n#8 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#9 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(123): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\GenerateMidEvaPdf), false)\n#10 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(App\\Jobs\\GenerateMidEvaPdf))\n#11 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\GenerateMidEvaPdf))\n#12 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#13 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(App\\Jobs\\GenerateMidEvaPdf))\n#14 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#15 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#16 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#17 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#18 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(137): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#19 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(120): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#20 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#21 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#22 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#23 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#24 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#25 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(211): Illuminate\\Container\\Container->call(Array)\n#26 D:\\MY Projects\\FIneal-year\\vendor\\symfony\\console\\Command\\Command.php(326): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#27 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(180): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#28 D:\\MY Projects\\FIneal-year\\vendor\\symfony\\console\\Application.php(1096): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#29 D:\\MY Projects\\FIneal-year\\vendor\\symfony\\console\\Application.php(324): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#30 D:\\MY Projects\\FIneal-year\\vendor\\symfony\\console\\Application.php(175): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#31 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(201): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#32 D:\\MY Projects\\FIneal-year\\artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#33 {main}', '2024-04-03 06:16:33'),
(5, '741c6ece-2f1e-4a56-bb36-43b6851891e9', 'database', 'default', '{\"uuid\":\"741c6ece-2f1e-4a56-bb36-43b6851891e9\",\"displayName\":\"App\\\\Jobs\\\\GenerateMidEvaPdf\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\GenerateMidEvaPdf\",\"command\":\"O:26:\\\"App\\\\Jobs\\\\GenerateMidEvaPdf\\\":1:{s:5:\\\"\\u0000*\\u0000id\\\";s:2:\\\"12\\\";}\"}}', 'Error: Class \"Illuminate\\Support\\Facades\\Pdf\" not found in D:\\MY Projects\\FIneal-year\\app\\Jobs\\GenerateMidEvaPdf.php:38\nStack trace:\n#0 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): App\\Jobs\\GenerateMidEvaPdf->handle()\n#1 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#2 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#3 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#4 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#5 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#6 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(App\\Jobs\\GenerateMidEvaPdf))\n#7 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\GenerateMidEvaPdf))\n#8 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#9 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(123): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\GenerateMidEvaPdf), false)\n#10 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(App\\Jobs\\GenerateMidEvaPdf))\n#11 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\GenerateMidEvaPdf))\n#12 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#13 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(App\\Jobs\\GenerateMidEvaPdf))\n#14 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#15 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#16 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#17 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#18 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(137): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#19 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(120): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#20 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#21 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#22 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#23 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#24 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#25 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(211): Illuminate\\Container\\Container->call(Array)\n#26 D:\\MY Projects\\FIneal-year\\vendor\\symfony\\console\\Command\\Command.php(326): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#27 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(180): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#28 D:\\MY Projects\\FIneal-year\\vendor\\symfony\\console\\Application.php(1096): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#29 D:\\MY Projects\\FIneal-year\\vendor\\symfony\\console\\Application.php(324): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#30 D:\\MY Projects\\FIneal-year\\vendor\\symfony\\console\\Application.php(175): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#31 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(201): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#32 D:\\MY Projects\\FIneal-year\\artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#33 {main}', '2024-04-03 06:17:31'),
(6, 'ba98dc09-a757-430f-b075-6e272165044d', 'database', 'default', '{\"uuid\":\"ba98dc09-a757-430f-b075-6e272165044d\",\"displayName\":\"App\\\\Jobs\\\\GenerateMidEvaPdf\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\GenerateMidEvaPdf\",\"command\":\"O:26:\\\"App\\\\Jobs\\\\GenerateMidEvaPdf\\\":1:{s:5:\\\"\\u0000*\\u0000id\\\";s:2:\\\"12\\\";}\"}}', 'Error: Class \"Illuminate\\Support\\Facades\\Pdf\" not found in D:\\MY Projects\\FIneal-year\\app\\Jobs\\GenerateMidEvaPdf.php:38\nStack trace:\n#0 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): App\\Jobs\\GenerateMidEvaPdf->handle()\n#1 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#2 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#3 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#4 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#5 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#6 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(App\\Jobs\\GenerateMidEvaPdf))\n#7 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\GenerateMidEvaPdf))\n#8 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#9 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(123): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\GenerateMidEvaPdf), false)\n#10 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(App\\Jobs\\GenerateMidEvaPdf))\n#11 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\GenerateMidEvaPdf))\n#12 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#13 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(App\\Jobs\\GenerateMidEvaPdf))\n#14 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#15 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#16 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#17 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#18 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(137): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#19 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(120): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#20 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#21 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#22 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#23 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#24 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#25 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(211): Illuminate\\Container\\Container->call(Array)\n#26 D:\\MY Projects\\FIneal-year\\vendor\\symfony\\console\\Command\\Command.php(326): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#27 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(180): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#28 D:\\MY Projects\\FIneal-year\\vendor\\symfony\\console\\Application.php(1096): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#29 D:\\MY Projects\\FIneal-year\\vendor\\symfony\\console\\Application.php(324): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#30 D:\\MY Projects\\FIneal-year\\vendor\\symfony\\console\\Application.php(175): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#31 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(201): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#32 D:\\MY Projects\\FIneal-year\\artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#33 {main}', '2024-04-03 06:17:45');
INSERT INTO `failed_jobs` (`id`, `uuid`, `connection`, `queue`, `payload`, `exception`, `failed_at`) VALUES
(7, 'c67977d8-898c-4d91-a4ef-460eb289386d', 'database', 'default', '{\"uuid\":\"c67977d8-898c-4d91-a4ef-460eb289386d\",\"displayName\":\"App\\\\Jobs\\\\GenerateMidEvaPdf\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\GenerateMidEvaPdf\",\"command\":\"O:26:\\\"App\\\\Jobs\\\\GenerateMidEvaPdf\\\":1:{s:5:\\\"\\u0000*\\u0000id\\\";s:2:\\\"12\\\";}\"}}', 'Error: Class \"Illuminate\\Support\\Facades\\Pdf\" not found in D:\\MY Projects\\FIneal-year\\app\\Jobs\\GenerateMidEvaPdf.php:38\nStack trace:\n#0 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): App\\Jobs\\GenerateMidEvaPdf->handle()\n#1 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#2 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#3 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#4 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#5 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#6 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(App\\Jobs\\GenerateMidEvaPdf))\n#7 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\GenerateMidEvaPdf))\n#8 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#9 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(123): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\GenerateMidEvaPdf), false)\n#10 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(App\\Jobs\\GenerateMidEvaPdf))\n#11 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\GenerateMidEvaPdf))\n#12 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#13 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(App\\Jobs\\GenerateMidEvaPdf))\n#14 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#15 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#16 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#17 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#18 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(137): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#19 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(120): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#20 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#21 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#22 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#23 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#24 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#25 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(211): Illuminate\\Container\\Container->call(Array)\n#26 D:\\MY Projects\\FIneal-year\\vendor\\symfony\\console\\Command\\Command.php(326): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#27 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(180): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#28 D:\\MY Projects\\FIneal-year\\vendor\\symfony\\console\\Application.php(1096): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#29 D:\\MY Projects\\FIneal-year\\vendor\\symfony\\console\\Application.php(324): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#30 D:\\MY Projects\\FIneal-year\\vendor\\symfony\\console\\Application.php(175): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#31 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(201): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#32 D:\\MY Projects\\FIneal-year\\artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#33 {main}', '2024-04-03 06:18:20'),
(8, '45f9137e-0074-4afd-b148-b02495d07cf9', 'database', 'default', '{\"uuid\":\"45f9137e-0074-4afd-b148-b02495d07cf9\",\"displayName\":\"App\\\\Jobs\\\\GenerateMidEvaPdf\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\GenerateMidEvaPdf\",\"command\":\"O:26:\\\"App\\\\Jobs\\\\GenerateMidEvaPdf\\\":1:{s:5:\\\"\\u0000*\\u0000id\\\";s:2:\\\"12\\\";}\"}}', 'Error: Class \"Illuminate\\Support\\Facades\\Pdf\" not found in D:\\MY Projects\\FIneal-year\\app\\Jobs\\GenerateMidEvaPdf.php:38\nStack trace:\n#0 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): App\\Jobs\\GenerateMidEvaPdf->handle()\n#1 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#2 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#3 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#4 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#5 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#6 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(App\\Jobs\\GenerateMidEvaPdf))\n#7 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\GenerateMidEvaPdf))\n#8 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#9 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(123): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\GenerateMidEvaPdf), false)\n#10 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(App\\Jobs\\GenerateMidEvaPdf))\n#11 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\GenerateMidEvaPdf))\n#12 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#13 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(App\\Jobs\\GenerateMidEvaPdf))\n#14 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#15 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#16 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#17 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#18 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(137): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#19 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(120): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#20 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#21 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#22 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#23 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#24 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#25 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(211): Illuminate\\Container\\Container->call(Array)\n#26 D:\\MY Projects\\FIneal-year\\vendor\\symfony\\console\\Command\\Command.php(326): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#27 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(180): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#28 D:\\MY Projects\\FIneal-year\\vendor\\symfony\\console\\Application.php(1096): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#29 D:\\MY Projects\\FIneal-year\\vendor\\symfony\\console\\Application.php(324): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#30 D:\\MY Projects\\FIneal-year\\vendor\\symfony\\console\\Application.php(175): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#31 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(201): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#32 D:\\MY Projects\\FIneal-year\\artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#33 {main}', '2024-04-03 06:20:02'),
(9, 'f1f6244e-cb57-4718-a59b-cf631dd055cb', 'database', 'default', '{\"uuid\":\"f1f6244e-cb57-4718-a59b-cf631dd055cb\",\"displayName\":\"App\\\\Jobs\\\\GenerateMidEvaPdf\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\GenerateMidEvaPdf\",\"command\":\"O:26:\\\"App\\\\Jobs\\\\GenerateMidEvaPdf\\\":1:{s:5:\\\"\\u0000*\\u0000id\\\";s:2:\\\"12\\\";}\"}}', 'Error: Class \"Illuminate\\Support\\Facades\\Pdf\" not found in D:\\MY Projects\\FIneal-year\\app\\Jobs\\GenerateMidEvaPdf.php:38\nStack trace:\n#0 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): App\\Jobs\\GenerateMidEvaPdf->handle()\n#1 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#2 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#3 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#4 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#5 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#6 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(App\\Jobs\\GenerateMidEvaPdf))\n#7 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\GenerateMidEvaPdf))\n#8 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#9 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(123): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\GenerateMidEvaPdf), false)\n#10 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(App\\Jobs\\GenerateMidEvaPdf))\n#11 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\GenerateMidEvaPdf))\n#12 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#13 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(App\\Jobs\\GenerateMidEvaPdf))\n#14 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#15 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#16 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#17 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#18 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(137): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#19 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(120): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#20 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#21 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#22 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#23 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#24 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#25 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(211): Illuminate\\Container\\Container->call(Array)\n#26 D:\\MY Projects\\FIneal-year\\vendor\\symfony\\console\\Command\\Command.php(326): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#27 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(180): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#28 D:\\MY Projects\\FIneal-year\\vendor\\symfony\\console\\Application.php(1096): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#29 D:\\MY Projects\\FIneal-year\\vendor\\symfony\\console\\Application.php(324): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#30 D:\\MY Projects\\FIneal-year\\vendor\\symfony\\console\\Application.php(175): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#31 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(201): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#32 D:\\MY Projects\\FIneal-year\\artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#33 {main}', '2024-04-03 06:21:31'),
(10, 'b583a91d-b952-4c23-81f7-99f97edfb661', 'database', 'default', '{\"uuid\":\"b583a91d-b952-4c23-81f7-99f97edfb661\",\"displayName\":\"App\\\\Jobs\\\\GenerateMidEvaPdf\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\GenerateMidEvaPdf\",\"command\":\"O:26:\\\"App\\\\Jobs\\\\GenerateMidEvaPdf\\\":1:{s:5:\\\"\\u0000*\\u0000id\\\";s:2:\\\"12\\\";}\"}}', 'Error: Class \"Illuminate\\Support\\Facades\\Pdf\" not found in D:\\MY Projects\\FIneal-year\\app\\Jobs\\GenerateMidEvaPdf.php:38\nStack trace:\n#0 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): App\\Jobs\\GenerateMidEvaPdf->handle()\n#1 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#2 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#3 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#4 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#5 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#6 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(App\\Jobs\\GenerateMidEvaPdf))\n#7 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\GenerateMidEvaPdf))\n#8 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#9 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(123): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\GenerateMidEvaPdf), false)\n#10 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(App\\Jobs\\GenerateMidEvaPdf))\n#11 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\GenerateMidEvaPdf))\n#12 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#13 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(App\\Jobs\\GenerateMidEvaPdf))\n#14 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#15 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#16 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#17 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#18 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(137): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#19 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(120): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#20 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#21 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#22 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#23 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#24 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#25 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(211): Illuminate\\Container\\Container->call(Array)\n#26 D:\\MY Projects\\FIneal-year\\vendor\\symfony\\console\\Command\\Command.php(326): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#27 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(180): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#28 D:\\MY Projects\\FIneal-year\\vendor\\symfony\\console\\Application.php(1096): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#29 D:\\MY Projects\\FIneal-year\\vendor\\symfony\\console\\Application.php(324): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#30 D:\\MY Projects\\FIneal-year\\vendor\\symfony\\console\\Application.php(175): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#31 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(201): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#32 D:\\MY Projects\\FIneal-year\\artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#33 {main}', '2024-04-03 06:22:15'),
(11, '2484d094-d5ae-4a3b-8219-e3a692871ee2', 'database', 'default', '{\"uuid\":\"2484d094-d5ae-4a3b-8219-e3a692871ee2\",\"displayName\":\"App\\\\Jobs\\\\GenerateMidEvaPdf\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\GenerateMidEvaPdf\",\"command\":\"O:26:\\\"App\\\\Jobs\\\\GenerateMidEvaPdf\\\":1:{s:5:\\\"\\u0000*\\u0000id\\\";s:2:\\\"12\\\";}\"}}', 'Error: Class \"Illuminate\\Support\\Facades\\Pdf\" not found in D:\\MY Projects\\FIneal-year\\app\\Jobs\\GenerateMidEvaPdf.php:38\nStack trace:\n#0 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): App\\Jobs\\GenerateMidEvaPdf->handle()\n#1 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#2 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#3 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#4 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#5 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#6 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(App\\Jobs\\GenerateMidEvaPdf))\n#7 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\GenerateMidEvaPdf))\n#8 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#9 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(123): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\GenerateMidEvaPdf), false)\n#10 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(App\\Jobs\\GenerateMidEvaPdf))\n#11 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\GenerateMidEvaPdf))\n#12 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#13 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(App\\Jobs\\GenerateMidEvaPdf))\n#14 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#15 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#16 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#17 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#18 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(137): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#19 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(120): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#20 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#21 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#22 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#23 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#24 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#25 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(211): Illuminate\\Container\\Container->call(Array)\n#26 D:\\MY Projects\\FIneal-year\\vendor\\symfony\\console\\Command\\Command.php(326): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#27 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(180): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#28 D:\\MY Projects\\FIneal-year\\vendor\\symfony\\console\\Application.php(1096): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#29 D:\\MY Projects\\FIneal-year\\vendor\\symfony\\console\\Application.php(324): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#30 D:\\MY Projects\\FIneal-year\\vendor\\symfony\\console\\Application.php(175): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#31 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(201): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#32 D:\\MY Projects\\FIneal-year\\artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#33 {main}', '2024-04-03 06:24:56'),
(12, 'f700582e-419f-412f-a6dc-dc84911aeb52', 'database', 'default', '{\"uuid\":\"f700582e-419f-412f-a6dc-dc84911aeb52\",\"displayName\":\"App\\\\Jobs\\\\GenerateMidEvaPdf\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\GenerateMidEvaPdf\",\"command\":\"O:26:\\\"App\\\\Jobs\\\\GenerateMidEvaPdf\\\":1:{s:5:\\\"\\u0000*\\u0000id\\\";s:2:\\\"12\\\";}\"}}', 'Error: Class \"Illuminate\\Support\\Facades\\Pdf\" not found in D:\\MY Projects\\FIneal-year\\app\\Jobs\\GenerateMidEvaPdf.php:39\nStack trace:\n#0 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): App\\Jobs\\GenerateMidEvaPdf->handle()\n#1 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#2 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#3 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#4 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#5 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#6 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(App\\Jobs\\GenerateMidEvaPdf))\n#7 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\GenerateMidEvaPdf))\n#8 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#9 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(123): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\GenerateMidEvaPdf), false)\n#10 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(App\\Jobs\\GenerateMidEvaPdf))\n#11 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\GenerateMidEvaPdf))\n#12 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#13 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(App\\Jobs\\GenerateMidEvaPdf))\n#14 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#15 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#16 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#17 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#18 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(137): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#19 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(120): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#20 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#21 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#22 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#23 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#24 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#25 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(211): Illuminate\\Container\\Container->call(Array)\n#26 D:\\MY Projects\\FIneal-year\\vendor\\symfony\\console\\Command\\Command.php(326): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#27 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(180): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#28 D:\\MY Projects\\FIneal-year\\vendor\\symfony\\console\\Application.php(1096): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#29 D:\\MY Projects\\FIneal-year\\vendor\\symfony\\console\\Application.php(324): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#30 D:\\MY Projects\\FIneal-year\\vendor\\symfony\\console\\Application.php(175): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#31 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(201): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#32 D:\\MY Projects\\FIneal-year\\artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#33 {main}', '2024-04-03 06:26:05');
INSERT INTO `failed_jobs` (`id`, `uuid`, `connection`, `queue`, `payload`, `exception`, `failed_at`) VALUES
(13, '728a28ec-d829-451c-83f6-f18ac80487e9', 'database', 'default', '{\"uuid\":\"728a28ec-d829-451c-83f6-f18ac80487e9\",\"displayName\":\"App\\\\Jobs\\\\GenerateMidEvaPdf\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\GenerateMidEvaPdf\",\"command\":\"O:26:\\\"App\\\\Jobs\\\\GenerateMidEvaPdf\\\":1:{s:5:\\\"\\u0000*\\u0000id\\\";s:2:\\\"12\\\";}\"}}', 'Error: Class \"Illuminate\\Support\\Facades\\Pdf\" not found in D:\\MY Projects\\FIneal-year\\app\\Jobs\\GenerateMidEvaPdf.php:39\nStack trace:\n#0 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): App\\Jobs\\GenerateMidEvaPdf->handle()\n#1 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#2 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#3 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#4 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#5 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#6 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(App\\Jobs\\GenerateMidEvaPdf))\n#7 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\GenerateMidEvaPdf))\n#8 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#9 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(123): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\GenerateMidEvaPdf), false)\n#10 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(App\\Jobs\\GenerateMidEvaPdf))\n#11 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\GenerateMidEvaPdf))\n#12 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#13 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(App\\Jobs\\GenerateMidEvaPdf))\n#14 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#15 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#16 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#17 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#18 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(137): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#19 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(120): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#20 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#21 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#22 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#23 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#24 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#25 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(211): Illuminate\\Container\\Container->call(Array)\n#26 D:\\MY Projects\\FIneal-year\\vendor\\symfony\\console\\Command\\Command.php(326): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#27 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(180): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#28 D:\\MY Projects\\FIneal-year\\vendor\\symfony\\console\\Application.php(1096): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#29 D:\\MY Projects\\FIneal-year\\vendor\\symfony\\console\\Application.php(324): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#30 D:\\MY Projects\\FIneal-year\\vendor\\symfony\\console\\Application.php(175): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#31 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(201): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#32 D:\\MY Projects\\FIneal-year\\artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#33 {main}', '2024-04-03 06:26:54'),
(14, '0294f401-f4bc-46e4-8ac8-448bd8d5b2f9', 'database', 'default', '{\"uuid\":\"0294f401-f4bc-46e4-8ac8-448bd8d5b2f9\",\"displayName\":\"App\\\\Jobs\\\\GenerateMidEvaPdf\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\GenerateMidEvaPdf\",\"command\":\"O:26:\\\"App\\\\Jobs\\\\GenerateMidEvaPdf\\\":1:{s:5:\\\"\\u0000*\\u0000id\\\";s:2:\\\"12\\\";}\"}}', 'Error: Call to undefined method Dompdf\\Dompdf::loadView() in D:\\MY Projects\\FIneal-year\\app\\Jobs\\GenerateMidEvaPdf.php:42\nStack trace:\n#0 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): App\\Jobs\\GenerateMidEvaPdf->handle()\n#1 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#2 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#3 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#4 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#5 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#6 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(App\\Jobs\\GenerateMidEvaPdf))\n#7 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\GenerateMidEvaPdf))\n#8 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#9 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(123): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\GenerateMidEvaPdf), false)\n#10 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(App\\Jobs\\GenerateMidEvaPdf))\n#11 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\GenerateMidEvaPdf))\n#12 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#13 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(App\\Jobs\\GenerateMidEvaPdf))\n#14 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#15 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#16 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#17 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#18 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(137): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#19 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(120): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#20 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#21 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#22 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#23 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#24 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#25 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(211): Illuminate\\Container\\Container->call(Array)\n#26 D:\\MY Projects\\FIneal-year\\vendor\\symfony\\console\\Command\\Command.php(326): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#27 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(180): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#28 D:\\MY Projects\\FIneal-year\\vendor\\symfony\\console\\Application.php(1096): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#29 D:\\MY Projects\\FIneal-year\\vendor\\symfony\\console\\Application.php(324): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#30 D:\\MY Projects\\FIneal-year\\vendor\\symfony\\console\\Application.php(175): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#31 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(201): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#32 D:\\MY Projects\\FIneal-year\\artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#33 {main}', '2024-04-03 06:28:36'),
(15, '8c2fdf06-3c23-4cad-880d-cd31c95f4712', 'database', 'default', '{\"uuid\":\"8c2fdf06-3c23-4cad-880d-cd31c95f4712\",\"displayName\":\"App\\\\Jobs\\\\GenerateMidEvaPdf\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\GenerateMidEvaPdf\",\"command\":\"O:26:\\\"App\\\\Jobs\\\\GenerateMidEvaPdf\\\":1:{s:5:\\\"\\u0000*\\u0000id\\\";s:2:\\\"12\\\";}\"}}', 'Error: Class \"App\\Jobs\\Response\" not found in D:\\MY Projects\\FIneal-year\\app\\Jobs\\GenerateMidEvaPdf.php:49\nStack trace:\n#0 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): App\\Jobs\\GenerateMidEvaPdf->handle()\n#1 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#2 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#3 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#4 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#5 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#6 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(App\\Jobs\\GenerateMidEvaPdf))\n#7 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\GenerateMidEvaPdf))\n#8 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#9 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(123): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\GenerateMidEvaPdf), false)\n#10 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(App\\Jobs\\GenerateMidEvaPdf))\n#11 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\GenerateMidEvaPdf))\n#12 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#13 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(App\\Jobs\\GenerateMidEvaPdf))\n#14 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#15 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#16 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#17 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#18 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(137): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#19 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(120): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#20 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#21 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#22 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#23 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#24 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#25 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(211): Illuminate\\Container\\Container->call(Array)\n#26 D:\\MY Projects\\FIneal-year\\vendor\\symfony\\console\\Command\\Command.php(326): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#27 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(180): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#28 D:\\MY Projects\\FIneal-year\\vendor\\symfony\\console\\Application.php(1096): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#29 D:\\MY Projects\\FIneal-year\\vendor\\symfony\\console\\Application.php(324): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#30 D:\\MY Projects\\FIneal-year\\vendor\\symfony\\console\\Application.php(175): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#31 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(201): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#32 D:\\MY Projects\\FIneal-year\\artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#33 {main}', '2024-04-03 06:35:57'),
(16, 'fc3b8ba3-464e-4bc3-b4f4-a970cbbe33c7', 'database', 'default', '{\"uuid\":\"fc3b8ba3-464e-4bc3-b4f4-a970cbbe33c7\",\"displayName\":\"Closure (pmocontroller.php:1599)\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Queue\\\\CallQueuedClosure\",\"command\":\"O:34:\\\"Illuminate\\\\Queue\\\\CallQueuedClosure\\\":2:{s:7:\\\"closure\\\";O:47:\\\"Laravel\\\\SerializableClosure\\\\SerializableClosure\\\":1:{s:12:\\\"serializable\\\";O:46:\\\"Laravel\\\\SerializableClosure\\\\Serializers\\\\Signed\\\":2:{s:12:\\\"serializable\\\";s:916:\\\"O:46:\\\"Laravel\\\\SerializableClosure\\\\Serializers\\\\Native\\\":5:{s:3:\\\"use\\\";a:1:{s:8:\\\"fileName\\\";O:41:\\\"Illuminate\\\\Foundation\\\\Bus\\\\PendingDispatch\\\":2:{s:6:\\\"\\u0000*\\u0000job\\\";O:26:\\\"App\\\\Jobs\\\\GenerateMidEvaPdf\\\":1:{s:5:\\\"\\u0000*\\u0000id\\\";s:2:\\\"12\\\";}s:16:\\\"\\u0000*\\u0000afterResponse\\\";b:0;}}s:8:\\\"function\\\";s:532:\\\"function() use (&$fileName){\\n            $pdfPath = storage_path(\'app\\/public\\/\' . $fileName);\\n            \\/\\/ Check if the PDF file exists\\n            if (file_exists($pdfPath)) {\\n                \\/\\/ Return a response with the PDF file for download\\n                return \\\\Illuminate\\\\Support\\\\Facades\\\\Response::download($pdfPath, $fileName);\\n            } else {\\n                \\/\\/ Return a response indicating that the PDF file does not exist\\n                return back()->with(\'error\', \'PDF file not found.\');\\n            }\\n        }\\\";s:5:\\\"scope\\\";s:34:\\\"App\\\\Http\\\\Controllers\\\\pmocontroller\\\";s:4:\\\"this\\\";N;s:4:\\\"self\\\";s:32:\\\"00000000000001210000000000000000\\\";}\\\";s:4:\\\"hash\\\";s:44:\\\"sPO1kwHfRkZy9+B6vmD7yJqBKf6okVYgzy1p4D\\/raSU=\\\";}}s:5:\\\"delay\\\";O:25:\\\"Illuminate\\\\Support\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2024-04-03 12:01:44.147333\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 'Error: Object of class Illuminate\\Foundation\\Bus\\PendingDispatch could not be converted to string in laravel-serializable-closure://function() use (&$fileName){\n            $pdfPath = storage_path(\'app/public/\' . $fileName);\n            // Check if the PDF file exists\n            if (file_exists($pdfPath)) {\n                // Return a response with the PDF file for download\n                return \\Illuminate\\Support\\Facades\\Response::download($pdfPath, $fileName);\n            } else {\n                // Return a response indicating that the PDF file does not exist\n                return back()->with(\'error\', \'PDF file not found.\');\n            }\n        }:3\nStack trace:\n#0 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): App\\Http\\Controllers\\pmocontroller::{closure}(Object(Illuminate\\Queue\\CallQueuedClosure))\n#1 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#2 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(81): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#3 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Object(Closure), Object(Closure))\n#4 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Object(Closure), Array, NULL)\n#5 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedClosure.php(69): Illuminate\\Container\\Container->call(Object(Closure), Array)\n#6 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\CallQueuedClosure->handle(Object(Illuminate\\Foundation\\Application))\n#7 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#8 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#9 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#10 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#11 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#12 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Queue\\CallQueuedClosure))\n#13 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Queue\\CallQueuedClosure))\n#14 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#15 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(123): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Queue\\CallQueuedClosure), false)\n#16 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(Illuminate\\Queue\\CallQueuedClosure))\n#17 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Queue\\CallQueuedClosure))\n#18 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#19 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\CallQueuedClosure))\n#20 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#21 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#22 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#23 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#24 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(137): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#25 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(120): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#26 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#27 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#28 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#29 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#30 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#31 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(211): Illuminate\\Container\\Container->call(Array)\n#32 D:\\MY Projects\\FIneal-year\\vendor\\symfony\\console\\Command\\Command.php(326): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#33 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(180): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#34 D:\\MY Projects\\FIneal-year\\vendor\\symfony\\console\\Application.php(1096): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#35 D:\\MY Projects\\FIneal-year\\vendor\\symfony\\console\\Application.php(324): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#36 D:\\MY Projects\\FIneal-year\\vendor\\symfony\\console\\Application.php(175): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#37 D:\\MY Projects\\FIneal-year\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(201): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#38 D:\\MY Projects\\FIneal-year\\artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#39 {main}', '2024-04-03 07:01:52');

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
(29, 'supervisor', '26', 'pmo', 'pmo', 'email_1711360809.txt', '2024-03-25 05:00:09', '2024-03-25 05:00:09'),
(30, 'supervisor', '26', 'student', '12', 'complete fyp111.docx', '2024-03-25 05:17:32', '2024-03-25 05:17:32'),
(33, 'supervisor', '55', 'student', 'student', 'custom_filename.pdf', '2024-04-13 12:05:42', '2024-04-13 12:05:42'),
(34, 'supervisor', '55', 'student', 'student', 'custom_filename_1713027943.pdf', '2024-04-13 12:05:43', '2024-04-13 12:05:43');

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
(3, 'Zunu Rathore', '03137898012', 'zunuain@gmail.com', '12345678', '2026', 1, 1, '2023-12-07 20:26:08', '2024-04-09 14:40:41', ''),
(8, 'Zunu Rathore', '03137898012', 'meet.zulnurain@gmail.com', '12345678', '2023', 1, 1, '2024-04-04 08:19:58', '2024-04-09 14:40:40', NULL);

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
  `roleid` int(11) NOT NULL DEFAULT 3,
  `loginstatus` int(11) NOT NULL DEFAULT 0,
  `totalviewnews` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `session` varchar(255) NOT NULL,
  `loginid` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(49, 'bilal', 'bilal@gmail.com', 'CS', '2024', '20-arid-1748', '03137898012', 0, '2024-04-04 08:21:36', '2024-04-09 14:33:08', 8),
(50, 'ali', 'ali@gmail.com', 'CS', '2024', '20-arid-1740', '03137898012', 0, '2024-04-04 08:21:48', '2024-04-09 14:33:17', 8),
(51, 'Zunu Rathore', 'n@gmail.com', 'CS', '2024', '20-arid-1700', '03137898012', 0, '2024-04-07 23:23:13', '2024-04-09 14:33:17', 8),
(52, 'Zunu Rathore', 'urain@gmail.com', 'CS', '2024', '20-arid-1701', '03137898012', 0, '2024-04-07 23:23:29', '2024-04-07 23:23:29', 8),
(53, 'Zunu Rathore', 'ulnurain@gmail.com', 'CS', '2024', '20-arid-1706', '03137898012', 0, '2024-04-07 23:57:02', '2024-04-07 23:57:02', 8);

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
(54, 'Zunu Rathore', 'Web Development', '03137898012', 'meet.zulnurain@gmail.com', '12345678', 2, 1, 0, '2024-04-04 08:22:22', '2024-04-07 23:33:42', 8),
(55, 'Umair Butt', 'Website development', '03066298835', 'muhammadumairbutt70@gmail.com', 'muhammad', 2, 1, 0, '2024-04-13 12:00:49', '2024-04-13 12:00:49', 8);

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
(7, '2024-04-04 08:22:22', '2024-04-04 08:22:22', 54, '2024'),
(8, '2024-04-13 12:00:49', '2024-04-13 12:00:49', 55, '2024');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `fileuplouds`
--
ALTER TABLE `fileuplouds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `groupsubmiteditems`
--
ALTER TABLE `groupsubmiteditems`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `preliminaryproposals`
--
ALTER TABLE `preliminaryproposals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `projectdocumentations`
--
ALTER TABLE `projectdocumentations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `projectweightages`
--
ALTER TABLE `projectweightages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `studentgroups`
--
ALTER TABLE `studentgroups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `studentsrecords`
--
ALTER TABLE `studentsrecords`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `supervisers`
--
ALTER TABLE `supervisers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `supervisersessions`
--
ALTER TABLE `supervisersessions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
