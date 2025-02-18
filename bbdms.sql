-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2018 at 06:07 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bbdms`
--

-- --------------------------------------------------------

--
-- Table structure for table `system_log`
--

CREATE TABLE `system_log` (
  `LogID` int(11) NOT NULL,
  `UID` int(11) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `LogTime` time NOT NULL,
  `LogDate` date NOT NULL,
  `LogLink` varchar(255) NOT NULL,
  `Browser` varchar(255) NOT NULL,
  `Page` varchar(255) NOT NULL,
  `IP` varchar(255) NOT NULL,
  `OS` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `system_log`
--

INSERT INTO `system_log` (`LogID`, `UID`, `UserName`, `Description`, `LogTime`, `LogDate`, `LogLink`, `Browser`, `Page`, `IP`, `OS`) VALUES
(1, 1, 'admin', 'has logged in', '14:12:32', '2018-06-13', '06-13-2018 14:12:32 -  - Google Chrome - ::1 - none - http://localhost:81/gks/login.php', 'Google Chrome', 'http://localhost:81/gks/login.php', '::1', ''),
(2, 1, 'admin', 'has logged in', '14:14:29', '2018-06-13', '06-13-2018 14:14:29 -  - Google Chrome - ::1 - none - http://localhost:81/gks/login.php', 'Google Chrome', 'login.php', '::1', ''),
(3, 1, 'admin', 'has logged in', '14:15:46', '2018-06-13', '06-13-2018 14:15:46 -  - Google Chrome - ::1 - none - http://localhost:81/gks/login.php', 'Google Chrome', 'login', '::1', ''),
(4, 1, 'admin', 'has logged in', '14:17:27', '2018-06-13', '06-13-2018 14:17:27 -  - Google Chrome - ::1 - none - http://localhost:81/gks/login.php', 'Google Chrome', 'login', '::1', ''),
(5, 1, 'admin', 'has logged in', '14:18:44', '2018-06-13', '06-13-2018 14:18:44 -  - Google Chrome - ::1 - none - http://localhost:81/gks/login.php', 'Google Chrome', 'login', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36'),
(6, 1, 'admin', 'has logged in', '14:19:58', '2018-06-13', '06-13-2018 14:19:58 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/login.php', 'Google Chrome', 'login', '::1', 'Windows 10'),
(7, 0, '', 'has Visited to', '18:08:52', '2018-06-13', '06-13-2018 18:08:52 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/admin/profile.php', 'Google Chrome', 'admin/profile', '::1', 'Windows 10'),
(8, 0, '', 'has Visited to', '18:09:28', '2018-06-13', '06-13-2018 18:09:28 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/admin/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(9, 1, 'admin', 'has logged in', '18:14:36', '2018-06-13', '06-13-2018 18:14:36 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/login.php', 'Google Chrome', 'login', '::1', 'Windows 10'),
(10, 0, '', 'has Visited to', '18:14:38', '2018-06-13', '06-13-2018 18:14:38 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/admin/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(11, 0, '', 'has Visited to', '18:15:21', '2018-06-13', '06-13-2018 18:15:21 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/admin/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(12, 0, '', 'has Visited to', '18:19:11', '2018-06-13', '06-13-2018 18:19:11 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/admin/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(13, 0, '', 'has Visited to', '18:20:31', '2018-06-13', '06-13-2018 18:20:31 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/admin/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(14, 0, '', 'has Visited to', '18:21:30', '2018-06-13', '06-13-2018 18:21:30 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/admin/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(15, 0, '', 'has Visited to', '18:22:18', '2018-06-13', '06-13-2018 18:22:18 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/admin/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(16, 1, 'admin', 'has Visited to', '18:23:50', '2018-06-13', '06-13-2018 18:23:50 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/admin/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(17, 1, 'admin', 'has Visited to', '18:23:59', '2018-06-13', '06-13-2018 18:23:59 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/admin/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(18, 1, 'admin', 'has updated his profile', '18:23:59', '2018-06-13', '06-13-2018 18:23:59 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/admin/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(19, 1, 'admin', 'has Visited to', '18:24:00', '2018-06-13', '06-13-2018 18:24:00 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/admin/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(20, 1, 'admin', 'has Visited to', '18:24:04', '2018-06-13', '06-13-2018 18:24:04 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/admin/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(21, 1, 'admin', 'has logged in', '18:24:32', '2018-06-13', '06-13-2018 18:24:32 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/login.php', 'Google Chrome', 'login', '::1', 'Windows 10'),
(22, 1, 'admin', 'has Visited to', '18:24:35', '2018-06-13', '06-13-2018 18:24:35 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/admin/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(23, 1, 'admin', 'has Visited to', '18:24:54', '2018-06-13', '06-13-2018 18:24:54 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/admin/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(24, 1, 'admin', 'has Visited to', '18:25:25', '2018-06-13', '06-13-2018 18:25:25 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/admin/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(25, 1, 'admin', 'has Visited to', '18:26:05', '2018-06-13', '06-13-2018 18:26:05 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/admin/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(26, 1, 'admin', 'has Visited to', '18:26:08', '2018-06-13', '06-13-2018 18:26:08 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/admin/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(27, 1, 'admin', 'has Visited to', '18:26:22', '2018-06-13', '06-13-2018 18:26:22 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/admin/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(28, 1, 'admin', 'has Visited to', '18:26:37', '2018-06-13', '06-13-2018 18:26:37 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/admin/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(29, 1, 'admin', 'has Visited to', '18:26:46', '2018-06-13', '06-13-2018 18:26:46 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/admin/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(30, 1, 'admin', 'has Visited to', '18:27:23', '2018-06-13', '06-13-2018 18:27:23 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/admin/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(31, 1, 'admin', 'has Visited to', '18:27:46', '2018-06-13', '06-13-2018 18:27:46 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/admin/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(32, 1, 'admin', 'has Visited to', '18:27:55', '2018-06-13', '06-13-2018 18:27:55 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/admin/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(33, 1, 'admin', 'has Visited to', '18:28:06', '2018-06-13', '06-13-2018 18:28:06 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/admin/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(34, 1, 'admin', 'has Visited to', '18:28:22', '2018-06-13', '06-13-2018 18:28:22 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/admin/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(35, 1, 'admin', 'has logged in', '23:01:10', '2018-06-13', '06-13-2018 23:01:10 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/login.php', 'Google Chrome', 'login', '::1', 'Windows 10'),
(36, 1, 'admin', 'has Visited to', '23:01:19', '2018-06-13', '06-13-2018 23:01:19 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/admin/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(37, 1, 'admin', 'has Visited to', '23:02:04', '2018-06-13', '06-13-2018 23:02:04 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/admin/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(38, 1, 'admin', 'has Visited to', '07:41:16', '2018-06-14', '06-14-2018 07:41:16 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/admin/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(39, 1, 'admin', 'has Visited to', '07:45:21', '2018-06-14', '06-14-2018 07:45:21 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/admin/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(40, 3, 'Bishal2100', 'has logged in', '07:48:59', '2018-06-14', '06-14-2018 07:48:59 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/login.php', 'Google Chrome', 'http://localhost:81/gks/login.php', '::1', 'Windows 10'),
(41, 3, 'Bishal2100', 'has Visited to', '07:51:10', '2018-06-14', '06-14-2018 07:51:10 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'http://localhost:81/gks/donor/profile', '::1', 'Windows 10'),
(42, 3, 'Bishal2100', 'has Visited to', '07:51:28', '2018-06-14', '06-14-2018 07:51:28 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'http://localhost:81/gks/donor/profile', '::1', 'Windows 10'),
(43, 3, 'Bishal2100', 'has updated his profile', '07:51:28', '2018-06-14', '06-14-2018 07:51:28 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'http://localhost:81/gks/donor/profile', '::1', 'Windows 10'),
(44, 3, 'Bishal2100', 'has Visited to', '07:51:30', '2018-06-14', '06-14-2018 07:51:30 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'http://localhost:81/gks/donor/profile', '::1', 'Windows 10'),
(45, 3, 'Bishal2100', 'has Visited to', '07:51:32', '2018-06-14', '06-14-2018 07:51:32 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'http://localhost:81/gks/donor/profile', '::1', 'Windows 10'),
(46, 3, 'Bishal2100', 'has Visited to', '07:51:35', '2018-06-14', '06-14-2018 07:51:35 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'http://localhost:81/gks/donor/profile', '::1', 'Windows 10'),
(47, 3, 'Bishal2100', 'has Visited to', '07:51:37', '2018-06-14', '06-14-2018 07:51:37 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'http://localhost:81/gks/donor/profile', '::1', 'Windows 10'),
(48, 3, 'Bishal2100', 'has Visited to', '07:51:37', '2018-06-14', '06-14-2018 07:51:37 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'http://localhost:81/gks/donor/profile', '::1', 'Windows 10'),
(49, 3, 'Bishal2100', 'has Visited to', '07:51:37', '2018-06-14', '06-14-2018 07:51:37 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'http://localhost:81/gks/donor/profile', '::1', 'Windows 10'),
(50, 3, 'Bishal2100', 'has Visited to', '07:51:37', '2018-06-14', '06-14-2018 07:51:37 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'http://localhost:81/gks/donor/profile', '::1', 'Windows 10'),
(51, 3, 'Bishal2100', 'has Visited to', '07:52:04', '2018-06-14', '06-14-2018 07:52:04 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'http://localhost:81/gks/donor/profile', '::1', 'Windows 10'),
(52, 3, 'Bishal2100', 'has updated his profile', '07:52:04', '2018-06-14', '06-14-2018 07:52:04 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'http://localhost:81/gks/donor/profile', '::1', 'Windows 10'),
(53, 3, 'Bishal2100', 'has Visited to', '07:52:06', '2018-06-14', '06-14-2018 07:52:06 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'http://localhost:81/gks/donor/profile', '::1', 'Windows 10'),
(54, 3, 'Bishal2100', 'has logged in', '07:52:57', '2018-06-14', '06-14-2018 07:52:57 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/login.php', 'Google Chrome', 'login', '::1', 'Windows 10'),
(55, 3, 'Bishal2100', 'has logged in', '07:53:51', '2018-06-14', '06-14-2018 07:53:51 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/login.php', 'Google Chrome', 'http://localhost:81/gks/login.php', '::1', 'Windows 10'),
(56, 3, 'Bishal2100', 'has logged in', '07:56:12', '2018-06-14', '06-14-2018 07:56:12 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/login.php', 'Google Chrome', 'http://localhost:81/gks/login.php', '::1', 'Windows 10'),
(57, 3, 'Bishal2100', 'has Visited to', '07:56:24', '2018-06-14', '06-14-2018 07:56:24 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'http://localhost:81/gks/donor/profile', '::1', 'Windows 10'),
(58, 3, 'Bishal2100', 'has Visited to', '07:56:41', '2018-06-14', '06-14-2018 07:56:41 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'http://localhost:81/gks/donor/profile', '::1', 'Windows 10'),
(59, 3, 'Bishal2100', 'has updated his profile', '07:56:41', '2018-06-14', '06-14-2018 07:56:41 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'http://localhost:81/gks/donor/profile', '::1', 'Windows 10'),
(60, 3, 'Bishal2100', 'has Visited to', '07:56:43', '2018-06-14', '06-14-2018 07:56:43 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'http://localhost:81/gks/donor/profile', '::1', 'Windows 10'),
(61, 3, 'Bishal2100', 'has Visited to', '07:56:47', '2018-06-14', '06-14-2018 07:56:47 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'http://localhost:81/gks/donor/profile', '::1', 'Windows 10'),
(62, 3, 'bishal2100', 'has logged in', '07:57:04', '2018-06-14', '06-14-2018 07:57:04 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/login.php', 'Google Chrome', 'login', '::1', 'Windows 10'),
(63, 3, 'bishal2100', 'has logged in', '07:59:46', '2018-06-14', '06-14-2018 07:59:46 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/login.php', 'Google Chrome', 'http://localhost:81/gks/login.php', '::1', 'Windows 10'),
(64, 3, 'bishal2100', 'has Visited to', '07:59:49', '2018-06-14', '06-14-2018 07:59:49 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'http://localhost:81/gks/donor/profile', '::1', 'Windows 10'),
(65, 3, 'bishal2100', 'has Visited to', '08:01:56', '2018-06-14', '06-14-2018 08:01:56 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'http://localhost:81/gks/donor/profile', '::1', 'Windows 10'),
(66, 3, 'bishal2100', 'has Visited to', '08:02:15', '2018-06-14', '06-14-2018 08:02:15 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'http://localhost:81/gks/donor/profile', '::1', 'Windows 10'),
(67, 3, 'bishal2100', 'has updated his profile', '08:02:15', '2018-06-14', '06-14-2018 08:02:15 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'http://localhost:81/gks/donor/profile', '::1', 'Windows 10'),
(68, 3, 'bishal2100', 'has Visited to', '08:02:17', '2018-06-14', '06-14-2018 08:02:17 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'http://localhost:81/gks/donor/profile', '::1', 'Windows 10'),
(69, 3, 'bishal2100', 'has logged in', '08:02:34', '2018-06-14', '06-14-2018 08:02:34 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/login.php', 'Google Chrome', 'http://localhost:81/gks/login.php', '::1', 'Windows 10'),
(70, 3, 'bishal2100', 'has Visited to', '08:02:42', '2018-06-14', '06-14-2018 08:02:42 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'http://localhost:81/gks/donor/profile', '::1', 'Windows 10'),
(71, 3, 'bishal2100', 'has Visited to', '08:03:51', '2018-06-14', '06-14-2018 08:03:51 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'http://localhost:81/gks/donor/profile', '::1', 'Windows 10'),
(72, 3, 'bishal2100', 'has Visited to', '08:04:21', '2018-06-14', '06-14-2018 08:04:21 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'donor/profile', '::1', 'Windows 10'),
(73, 3, 'bishal2100', 'has Visited to', '08:04:54', '2018-06-14', '06-14-2018 08:04:54 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(74, 3, 'bishal2100', 'has Visited to', '08:05:33', '2018-06-14', '06-14-2018 08:05:33 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(75, 3, 'bishal2100', 'has Visited to', '08:05:48', '2018-06-14', '06-14-2018 08:05:48 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(76, 3, 'bishal2100', 'has Visited to', '08:05:51', '2018-06-14', '06-14-2018 08:05:51 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(77, 3, 'bishal2100', 'has Visited to', '08:07:33', '2018-06-14', '06-14-2018 08:07:33 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(78, 3, 'bishal2100', 'has Visited to', '08:07:56', '2018-06-14', '06-14-2018 08:07:56 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(79, 3, 'bishal2100', 'has Visited to', '08:08:38', '2018-06-14', '06-14-2018 08:08:38 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(80, 3, 'bishal2100', 'has Visited to', '08:08:49', '2018-06-14', '06-14-2018 08:08:49 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(81, 3, 'bishal2100', 'has Visited to', '08:09:08', '2018-06-14', '06-14-2018 08:09:08 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(82, 3, 'bishal2100', 'has updated his profile', '08:09:08', '2018-06-14', '06-14-2018 08:09:08 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(83, 3, 'bishal2100', 'has Visited to', '08:09:09', '2018-06-14', '06-14-2018 08:09:09 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(84, 3, 'bishal2100', 'has logged in', '08:09:19', '2018-06-14', '06-14-2018 08:09:19 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/login.php', 'Google Chrome', 'http://localhost:81/gks/login.php', '::1', 'Windows 10'),
(85, 1, 'admin', 'has logged in', '08:13:30', '2018-06-14', '06-14-2018 08:13:30 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/login.php', 'Google Chrome', 'login', '::1', 'Windows 10'),
(86, 1, 'admin', 'has Visited to', '08:15:41', '2018-06-14', '06-14-2018 08:15:41 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/admin/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(87, 3, 'bishal2100', 'has logged in', '08:51:31', '2018-06-14', '06-14-2018 08:51:31 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/login.php', 'Google Chrome', 'http://localhost:81/gks/login.php', '::1', 'Windows 10'),
(88, 3, 'bishal2100', 'has Visited to', '08:51:42', '2018-06-14', '06-14-2018 08:51:42 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(89, 3, 'bishal2100', 'has Visited to', '08:51:54', '2018-06-14', '06-14-2018 08:51:54 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(90, 3, 'bishal2100', 'has updated his profile', '08:51:54', '2018-06-14', '06-14-2018 08:51:54 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(91, 3, 'bishal2100', 'has Visited to', '08:51:56', '2018-06-14', '06-14-2018 08:51:56 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(92, 3, 'bishal2100', 'has logged in', '09:33:15', '2018-06-14', '06-14-2018 09:33:15 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/login.php', 'Google Chrome', 'http://localhost:81/gks/login.php', '::1', 'Windows 10'),
(93, 3, 'bishal2100', 'has Visited to', '09:34:30', '2018-06-14', '06-14-2018 09:34:30 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(94, 3, 'bishal2100', 'has Visited to', '09:35:31', '2018-06-14', '06-14-2018 09:35:31 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(95, 3, 'bishal2100', 'has updated his profile', '09:35:31', '2018-06-14', '06-14-2018 09:35:31 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(96, 3, 'bishal2100', 'has Visited to', '09:35:37', '2018-06-14', '06-14-2018 09:35:37 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(97, 3, 'bishal2100', 'has Visited to', '09:35:42', '2018-06-14', '06-14-2018 09:35:42 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(98, 3, 'bishal2100', 'has Visited to', '09:37:24', '2018-06-14', '06-14-2018 09:37:24 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(99, 1, 'admin', 'has logged in', '09:37:38', '2018-06-14', '06-14-2018 09:37:38 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/login.php', 'Google Chrome', 'login', '::1', 'Windows 10'),
(100, 1, 'admin', 'has logged in', '10:15:20', '2018-06-14', '06-14-2018 10:15:20 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/login.php', 'Google Chrome', 'login', '::1', 'Windows 10'),
(101, 1, 'admin', 'has logged in', '10:43:17', '2018-06-14', '06-14-2018 10:43:17 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/login.php', 'Google Chrome', 'login', '::1', 'Windows 10'),
(102, 1, 'admin', 'has Visited to', '13:09:49', '2018-06-14', '06-14-2018 13:09:49 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/admin/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(103, 5, 'Agks199015', 'has Contacted you regarding Membership.', '18:38:40', '2018-06-14', '06-14-2018 18:38:40 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/savetodb.php', 'Google Chrome', 'http://localhost:81/gks/savetodb.php', '::1', 'Windows 10'),
(104, 1, 'admin', 'has logged in', '19:41:36', '2018-06-14', '06-14-2018 19:41:36 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/login.php', 'Google Chrome', 'login', '::1', 'Windows 10'),
(105, 4, 'Monu5051', 'has logged in', '20:06:33', '2018-06-14', '06-14-2018 20:06:33 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/login.php', 'Google Chrome', 'http://localhost:81/gks/login.php', '::1', 'Windows 10'),
(106, 4, 'Monu5051', 'has Visited to', '20:06:37', '2018-06-14', '06-14-2018 20:06:37 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(107, 4, 'Monu5051', 'has Visited to', '20:06:46', '2018-06-14', '06-14-2018 20:06:46 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(108, 4, 'Monu5051', 'has updated his profile', '20:06:46', '2018-06-14', '06-14-2018 20:06:46 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(109, 4, 'Monu5051', 'has Visited to', '20:06:48', '2018-06-14', '06-14-2018 20:06:48 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(110, 5, 'Agks199015', 'has logged in', '20:07:25', '2018-06-14', '06-14-2018 20:07:25 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/login.php', 'Google Chrome', 'http://localhost:81/gks/login.php', '::1', 'Windows 10'),
(111, 5, 'Agks199015', 'has Visited to', '20:07:28', '2018-06-14', '06-14-2018 20:07:28 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(112, 5, 'Agks199015', 'has Visited to', '20:07:37', '2018-06-14', '06-14-2018 20:07:37 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(113, 5, 'Agks199015', 'has updated his profile', '20:07:37', '2018-06-14', '06-14-2018 20:07:37 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(114, 5, 'Agks199015', 'has Visited to', '20:07:39', '2018-06-14', '06-14-2018 20:07:39 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(115, 5, 'Agks199015', 'has logged in', '23:05:55', '2018-06-14', '06-14-2018 23:05:55 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/login.php', 'Google Chrome', 'http://localhost:81/gks/login.php', '::1', 'Windows 10'),
(116, 5, 'Agks199015', 'has Visited to', '23:05:59', '2018-06-14', '06-14-2018 23:05:59 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(117, 5, 'Agks199015', 'has Visited to', '23:06:21', '2018-06-14', '06-14-2018 23:06:21 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(118, 5, 'Agks199015', 'has updated his profile', '23:06:21', '2018-06-14', '06-14-2018 23:06:21 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(119, 5, 'Agks199015', 'has Visited to', '23:06:23', '2018-06-14', '06-14-2018 23:06:23 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(120, 5, 'Agks199015', 'has Visited to', '23:06:29', '2018-06-14', '06-14-2018 23:06:29 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(121, 5, 'Agks199015', 'has Visited to', '23:06:40', '2018-06-14', '06-14-2018 23:06:40 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(122, 5, 'pihu', 'has logged in', '23:07:02', '2018-06-14', '06-14-2018 23:07:02 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/login.php', 'Google Chrome', 'http://localhost:81/gks/login.php', '::1', 'Windows 10'),
(123, 5, 'pihu', 'has Visited to', '23:07:10', '2018-06-14', '06-14-2018 23:07:10 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(124, 4, 'Monu5051', 'has logged in', '23:49:59', '2018-06-14', '06-14-2018 23:49:59 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/login.php', 'Google Chrome', 'http://localhost:81/gks/login.php', '::1', 'Windows 10'),
(125, 4, 'Monu5051', 'has Visited to', '23:50:02', '2018-06-14', '06-14-2018 23:50:02 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(126, 4, 'Monu5051', 'has Visited to', '23:50:17', '2018-06-14', '06-14-2018 23:50:17 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(127, 4, 'Monu5051', 'has updated his profile', '23:50:17', '2018-06-14', '06-14-2018 23:50:17 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(128, 4, 'Monu5051', 'has Visited to', '23:50:19', '2018-06-14', '06-14-2018 23:50:19 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(129, 3, 'bishal2100', 'has logged in', '23:52:00', '2018-06-14', '06-14-2018 23:52:00 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/login.php', 'Google Chrome', 'http://localhost:81/gks/login.php', '::1', 'Windows 10'),
(130, 1, 'admin', 'has logged in', '00:04:31', '2018-06-15', '06-15-2018 00:04:31 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/login.php', 'Google Chrome', 'login', '::1', 'Windows 10'),
(131, 1, 'admin', 'has logged in', '00:45:46', '2018-06-15', '06-15-2018 00:45:46 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/login.php', 'Google Chrome', 'login', '::1', 'Windows 10'),
(132, 1, 'admin', 'has logged in', '09:43:34', '2018-06-15', '06-15-2018 09:43:34 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/login.php', 'Google Chrome', 'login', '::1', 'Windows 10'),
(133, 6, 'g2ks199015', 'has Contacted you regarding Membership.', '09:51:59', '2018-06-15', '06-15-2018 09:51:59 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/savetodb.php', 'Google Chrome', 'http://localhost:81/gks/savetodb.php', '::1', 'Windows 10'),
(134, 1, 'admin', 'has logged in', '09:52:24', '2018-06-15', '06-15-2018 09:52:24 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/login.php', 'Google Chrome', 'login', '::1', 'Windows 10'),
(135, 6, 'g2ks199015', 'has logged in', '10:02:22', '2018-06-15', '06-15-2018 10:02:22 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/login.php', 'Google Chrome', 'http://localhost:81/gks/login.php', '::1', 'Windows 10'),
(136, 6, 'g2ks199015', 'has Visited to', '10:02:59', '2018-06-15', '06-15-2018 10:02:59 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(137, 6, 'g2ks199015', 'has Visited to', '10:03:39', '2018-06-15', '06-15-2018 10:03:39 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(138, 6, 'g2ks199015', 'has updated his profile', '10:03:39', '2018-06-15', '06-15-2018 10:03:39 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(139, 6, 'g2ks199015', 'has Visited to', '10:03:42', '2018-06-15', '06-15-2018 10:03:42 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(140, 6, 'kshitiz', 'has logged in', '10:04:35', '2018-06-15', '06-15-2018 10:04:35 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/login.php', 'Google Chrome', 'http://localhost:81/gks/login.php', '::1', 'Windows 10'),
(141, 6, 'kshitiz', 'has Visited to', '10:04:42', '2018-06-15', '06-15-2018 10:04:42 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(142, 7, 'gks1U99015', 'has Contacted you regarding Membership.', '10:41:55', '2018-06-15', '06-15-2018 10:41:55 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/savetodb.php', 'Google Chrome', 'http://localhost:81/gks/savetodb.php', '::1', 'Windows 10'),
(143, 1, 'admin', 'has logged in', '10:42:06', '2018-06-15', '06-15-2018 10:42:06 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/login.php', 'Google Chrome', 'login', '::1', 'Windows 10'),
(144, 8, 'gks1s99015', 'has Contacted you regarding Membership.', '11:53:03', '2018-06-15', '06-15-2018 11:53:03 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/savetodb.php', 'Google Chrome', 'http://localhost:81/gks/savetodb.php', '::1', 'Windows 10'),
(145, 7, 'gks1U99015', 'has logged in', '12:23:13', '2018-06-15', '06-15-2018 12:23:13 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/login.php', 'Google Chrome', 'http://localhost:81/gks/login.php', '::1', 'Windows 10'),
(146, 7, 'gks1U99015', 'has Visited to', '12:23:29', '2018-06-15', '06-15-2018 12:23:29 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(147, 7, 'gks1U99015', 'has Visited to', '12:28:22', '2018-06-15', '06-15-2018 12:28:22 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(148, 7, 'gks1U99015', 'has Visited to', '12:28:41', '2018-06-15', '06-15-2018 12:28:41 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(149, 7, 'gks1U99015', 'has Visited to', '12:29:43', '2018-06-15', '06-15-2018 12:29:43 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(150, 7, 'gks1U99015', 'has Visited to', '12:31:05', '2018-06-15', '06-15-2018 12:31:05 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(151, 7, 'gks1U99015', 'has Visited to', '12:31:24', '2018-06-15', '06-15-2018 12:31:24 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(152, 7, 'gks1U99015', 'has Visited to', '12:31:38', '2018-06-15', '06-15-2018 12:31:38 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(153, 7, 'gks1U99015', 'has Visited to', '12:32:35', '2018-06-15', '06-15-2018 12:32:35 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(154, 7, 'gks1U99015', 'has Visited to', '12:33:34', '2018-06-15', '06-15-2018 12:33:34 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(155, 7, 'gks1U99015', 'has updated his profile', '12:33:34', '2018-06-15', '06-15-2018 12:33:34 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(156, 7, 'gks1U99015', 'has Visited to', '12:33:35', '2018-06-15', '06-15-2018 12:33:35 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(157, 7, 'kiran', 'has logged in', '12:36:29', '2018-06-15', '06-15-2018 12:36:29 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/login.php', 'Google Chrome', 'http://localhost:81/gks/login.php', '::1', 'Windows 10'),
(158, 7, 'kiran', 'has Visited to', '12:36:31', '2018-06-15', '06-15-2018 12:36:31 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(159, 7, 'kiran', 'has Visited to', '12:36:40', '2018-06-15', '06-15-2018 12:36:40 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(160, 7, 'kiran', 'has Visited to', '12:37:15', '2018-06-15', '06-15-2018 12:37:15 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(161, 7, 'kiran', 'has updated his profile', '12:37:15', '2018-06-15', '06-15-2018 12:37:15 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(162, 7, 'kiran', 'has Visited to', '12:37:16', '2018-06-15', '06-15-2018 12:37:16 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(163, 7, 'kiran', 'has logged in', '12:37:41', '2018-06-15', '06-15-2018 12:37:41 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/login.php', 'Google Chrome', 'http://localhost:81/gks/login.php', '::1', 'Windows 10'),
(164, 7, 'kiran', 'has Visited to', '12:37:43', '2018-06-15', '06-15-2018 12:37:43 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(165, 7, 'kiran', 'has Visited to', '12:38:40', '2018-06-15', '06-15-2018 12:38:40 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(166, 7, 'kiran', 'has updated his profile', '12:38:40', '2018-06-15', '06-15-2018 12:38:40 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(167, 7, 'kiran', 'has Visited to', '12:38:42', '2018-06-15', '06-15-2018 12:38:42 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(168, 1, 'admin', 'has logged in', '12:42:14', '2018-06-15', '06-15-2018 12:42:14 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/login.php', 'Google Chrome', 'login', '::1', 'Windows 10'),
(169, 9, '1gks199015', 'has Contacted you regarding Membership.', '12:45:22', '2018-06-15', '06-15-2018 12:45:22 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/savetodb.php', 'Google Chrome', 'http://localhost:81/gks/savetodb.php', '::1', 'Windows 10'),
(170, 9, '1gks199015', 'has logged in', '12:48:56', '2018-06-15', '06-15-2018 12:48:56 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/login.php', 'Google Chrome', 'http://localhost:81/gks/login.php', '::1', 'Windows 10'),
(171, 9, '1gks199015', 'has Visited to', '12:49:10', '2018-06-15', '06-15-2018 12:49:10 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(172, 9, '1gks199015', 'has Visited to', '12:49:31', '2018-06-15', '06-15-2018 12:49:31 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(173, 9, '1gks199015', 'has updated his profile', '12:49:31', '2018-06-15', '06-15-2018 12:49:31 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(174, 9, '1gks199015', 'has Visited to', '12:49:33', '2018-06-15', '06-15-2018 12:49:33 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/donor/profile.php', 'Google Chrome', 'profile', '::1', 'Windows 10'),
(175, 1, 'admin', 'has logged in', '12:49:52', '2018-06-15', '06-15-2018 12:49:52 - Windows 10 - Google Chrome - ::1 - none - http://localhost:81/gks/login.php', 'Google Chrome', 'login', '::1', 'Windows 10'),
(176, 1, 'admin', 'has logged in', '13:21:54', '2018-06-15', '06-15-2018 13:21:54 -  - Google Chrome - ::1 - none - http://localhost/bishal/login.php', 'Google Chrome', 'http://localhost/bishal/login', '::1', ''),
(177, 3, 'bishal2100', 'has logged in', '15:22:24', '2018-06-15', '06-15-2018 15:22:24 -  - Google Chrome - ::1 - none - http://localhost/bishal/login.php', 'Google Chrome', 'http://localhost/bishal/login.php', '::1', ''),
(178, 3, 'bishal2100', 'has logged in', '15:23:34', '2018-06-15', '06-15-2018 15:23:34 -  - Google Chrome - ::1 - none - http://localhost/bishal/login.php', 'Google Chrome', 'http://localhost/bishal/login.php', '::1', ''),
(179, 1, 'admin', 'has logged in', '15:24:04', '2018-06-15', '06-15-2018 15:24:04 -  - Google Chrome - ::1 - none - http://localhost/bishal/login.php', 'Google Chrome', 'http://localhost/bishal/login', '::1', ''),
(180, 1, 'admin', 'has Visited to', '15:24:46', '2018-06-15', '06-15-2018 15:24:46 -  - Google Chrome - ::1 - none - http://localhost/bishal/admin/profile.php', 'Google Chrome', 'http://localhost/bishal/admin/profile', '::1', ''),
(181, 1, 'admin', 'has logged in', '15:57:37', '2018-06-15', '06-15-2018 15:57:37 -  - Google Chrome - ::1 - none - http://localhost/bishal/login.php', 'Google Chrome', 'http://localhost/bishal/login', '::1', ''),
(182, 10, 'gkys199015', 'has Contacted you regarding Membership.', '16:27:53', '2018-06-15', '06-15-2018 16:27:53 -  - Google Chrome - ::1 - none - http://localhost/bishal/savetodb.php', 'Google Chrome', 'http://localhost/bishal/savetodb.php', '::1', ''),
(183, 1, 'admin', 'has logged in', '16:28:28', '2018-06-15', '06-15-2018 16:28:28 -  - Google Chrome - ::1 - none - http://localhost/bishal/login.php', 'Google Chrome', 'http://localhost/bishal/login', '::1', ''),
(184, 11, 'bgks199015', 'has Contacted you regarding Membership.', '16:37:57', '2018-06-15', '06-15-2018 16:37:57 -  - Google Chrome - ::1 - none - http://localhost/bishal/savetodb.php', 'Google Chrome', 'http://localhost/bishal/savetodb.php', '::1', ''),
(185, 1, 'admin', 'has logged in', '16:39:08', '2018-06-15', '06-15-2018 16:39:08 -  - Google Chrome - ::1 - none - http://localhost/bishal/login.php', 'Google Chrome', 'http://localhost/bishal/login', '::1', ''),
(186, 1, 'admin', 'has Visited to', '16:41:22', '2018-06-15', '06-15-2018 16:41:22 -  - Google Chrome - ::1 - none - http://localhost/bishal/admin/profile.php', 'Google Chrome', 'http://localhost/bishal/admin/profile', '::1', ''),
(187, 1, 'admin', 'has Visited to', '16:47:13', '2018-06-15', '06-15-2018 16:47:13 -  - Google Chrome - ::1 - none - http://localhost/bishal/admin/profile.php', 'Google Chrome', 'http://localhost/bishal/admin/profile', '::1', ''),
(188, 1, 'admin', 'has Visited to', '16:47:29', '2018-06-15', '06-15-2018 16:47:29 -  - Google Chrome - ::1 - none - http://localhost/bishal/admin/profile.php', 'Google Chrome', 'http://localhost/bishal/admin/profile', '::1', ''),
(189, 1, 'admin', 'has Visited to', '16:47:33', '2018-06-15', '06-15-2018 16:47:33 -  - Google Chrome - ::1 - none - http://localhost/bishal/admin/profile.php', 'Google Chrome', 'http://localhost/bishal/admin/profile', '::1', ''),
(190, 1, 'admin', 'has logged in', '16:47:55', '2018-06-15', '06-15-2018 16:47:55 -  - Google Chrome - ::1 - none - http://localhost/bishal/login.php', 'Google Chrome', 'http://localhost/bishal/login', '::1', ''),
(191, 1, 'admin', 'has Visited to', '16:48:01', '2018-06-15', '06-15-2018 16:48:01 -  - Google Chrome - ::1 - none - http://localhost/bishal/admin/profile.php', 'Google Chrome', 'http://localhost/bishal/admin/profile', '::1', ''),
(192, 1, 'admin', 'has Visited to', '16:48:55', '2018-06-15', '06-15-2018 16:48:55 -  - Google Chrome - ::1 - none - http://localhost/bishal/admin/profile.php', 'Google Chrome', 'http://localhost/bishal/admin/profile', '::1', ''),
(193, 1, 'admin', 'has updated his profile', '16:48:55', '2018-06-15', '06-15-2018 16:48:55 -  - Google Chrome - ::1 - none - http://localhost/bishal/admin/profile.php', 'Google Chrome', 'http://localhost/bishal/admin/profile', '::1', ''),
(194, 1, 'admin', 'has Visited to', '16:48:59', '2018-06-15', '06-15-2018 16:48:59 -  - Google Chrome - ::1 - none - http://localhost/bishal/admin/profile.php', 'Google Chrome', 'http://localhost/bishal/admin/profile', '::1', ''),
(195, 1, 'admin', 'has Visited to', '16:49:05', '2018-06-15', '06-15-2018 16:49:05 -  - Google Chrome - ::1 - none - http://localhost/bishal/admin/profile.php', 'Google Chrome', 'http://localhost/bishal/admin/profile', '::1', ''),
(196, 1, 'admin', 'has logged in', '16:49:22', '2018-06-15', '06-15-2018 16:49:22 -  - Google Chrome - ::1 - none - http://localhost/bishal/login.php', 'Google Chrome', 'http://localhost/bishal/login', '::1', ''),
(197, 1, 'admin', 'has Visited to', '16:49:32', '2018-06-15', '06-15-2018 16:49:32 -  - Google Chrome - ::1 - none - http://localhost/bishal/admin/profile.php', 'Google Chrome', 'http://localhost/bishal/admin/profile', '::1', ''),
(198, 1, 'admin', 'has Visited to', '16:51:30', '2018-06-15', '06-15-2018 16:51:30 -  - Google Chrome - ::1 - none - http://localhost/bishal/admin/profile.php', 'Google Chrome', 'http://localhost/bishal/admin/profile', '::1', ''),
(199, 1, 'admin', 'has updated his profile', '16:51:30', '2018-06-15', '06-15-2018 16:51:30 -  - Google Chrome - ::1 - none - http://localhost/bishal/admin/profile.php', 'Google Chrome', 'http://localhost/bishal/admin/profile', '::1', ''),
(200, 1, 'admin', 'has Visited to', '16:51:32', '2018-06-15', '06-15-2018 16:51:32 -  - Google Chrome - ::1 - none - http://localhost/bishal/admin/profile.php', 'Google Chrome', 'http://localhost/bishal/admin/profile', '::1', ''),
(201, 1, 'admin', 'has logged in', '16:51:48', '2018-06-15', '06-15-2018 16:51:48 -  - Google Chrome - ::1 - none - http://localhost/bishal/login.php', 'Google Chrome', 'http://localhost/bishal/login', '::1', ''),
(202, 1, 'admin', 'has Visited to', '16:51:54', '2018-06-15', '06-15-2018 16:51:54 -  - Google Chrome - ::1 - none - http://localhost/bishal/admin/profile.php', 'Google Chrome', 'http://localhost/bishal/admin/profile', '::1', ''),
(203, 1, 'admin', 'has Visited to', '16:53:14', '2018-06-15', '06-15-2018 16:53:14 -  - Google Chrome - ::1 - none - http://localhost/bishal/admin/profile.php', 'Google Chrome', 'http://localhost/bishal/admin/profile', '::1', ''),
(204, 1, 'admin', 'has updated his profile', '16:53:14', '2018-06-15', '06-15-2018 16:53:14 -  - Google Chrome - ::1 - none - http://localhost/bishal/admin/profile.php', 'Google Chrome', 'http://localhost/bishal/admin/profile', '::1', ''),
(205, 1, 'admin', 'has Visited to', '16:53:17', '2018-06-15', '06-15-2018 16:53:17 -  - Google Chrome - ::1 - none - http://localhost/bishal/admin/profile.php', 'Google Chrome', 'http://localhost/bishal/admin/profile', '::1', ''),
(206, 1, 'admin', 'has logged in', '16:54:19', '2018-06-15', '06-15-2018 16:54:19 -  - Google Chrome - ::1 - none - http://localhost/bishal/login.php', 'Google Chrome', 'http://localhost/bishal/login', '::1', ''),
(207, 1, 'admin', 'has Visited to', '16:54:24', '2018-06-15', '06-15-2018 16:54:24 -  - Google Chrome - ::1 - none - http://localhost/bishal/admin/profile.php', 'Google Chrome', 'http://localhost/bishal/admin/profile', '::1', ''),
(208, 1, 'admin', 'has logged in', '16:57:39', '2018-06-15', '06-15-2018 16:57:39 -  - Google Chrome - ::1 - none - http://localhost/bishal/login.php', 'Google Chrome', 'http://localhost/bishal/login', '::1', ''),
(209, 1, 'admin', 'has Visited to', '17:03:09', '2018-06-15', '06-15-2018 17:03:09 -  - Google Chrome - ::1 - none - http://localhost/bishal/admin/profile.php', 'Google Chrome', 'http://localhost/bishal/admin/profile', '::1', ''),
(210, 12, 'gks19c9015', 'has Contacted you regarding Membership.', '17:21:47', '2018-06-15', '06-15-2018 17:21:47 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/savetodb.php', 'Google Chrome', 'http://localhost/bloodbank/savetodb.php', '::1', ''),
(211, 1, 'admin', 'has logged in', '17:21:59', '2018-06-15', '06-15-2018 17:21:59 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/login.php', 'Google Chrome', 'http://localhost/bloodbank/login', '::1', ''),
(212, 12, 'gks19c9015', 'has logged in', '17:23:14', '2018-06-15', '06-15-2018 17:23:14 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/login.php', 'Google Chrome', 'http://localhost/bloodbank/login.php', '::1', ''),
(213, 12, 'gks19c9015', 'has Visited to', '17:23:21', '2018-06-15', '06-15-2018 17:23:21 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/donor/profile.php', 'Google Chrome', 'http://localhost/bloodbank/donor/profile', '::1', ''),
(214, 12, 'gks19c9015', 'has Visited to', '17:25:11', '2018-06-15', '06-15-2018 17:25:11 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/donor/profile.php', 'Google Chrome', 'http://localhost/bloodbank/donor/profile', '::1', ''),
(215, 12, 'gks19c9015', 'has updated his profile', '17:25:11', '2018-06-15', '06-15-2018 17:25:11 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/donor/profile.php', 'Google Chrome', 'http://localhost/bloodbank/donor/profile', '::1', ''),
(216, 12, 'gks19c9015', 'has Visited to', '17:25:15', '2018-06-15', '06-15-2018 17:25:15 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/donor/profile.php', 'Google Chrome', 'http://localhost/bloodbank/donor/profile', '::1', ''),
(217, 12, 'agbishal', 'has logged in', '17:26:01', '2018-06-15', '06-15-2018 17:26:01 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/login.php', 'Google Chrome', 'http://localhost/bloodbank/login.php', '::1', ''),
(218, 12, 'agbishal', 'has Visited to', '17:26:09', '2018-06-15', '06-15-2018 17:26:09 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/donor/profile.php', 'Google Chrome', 'http://localhost/bloodbank/donor/profile', '::1', '');
INSERT INTO `system_log` (`LogID`, `UID`, `UserName`, `Description`, `LogTime`, `LogDate`, `LogLink`, `Browser`, `Page`, `IP`, `OS`) VALUES
(219, 1, 'admin', 'has logged in', '17:26:54', '2018-06-15', '06-15-2018 17:26:54 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/login.php', 'Google Chrome', 'http://localhost/bloodbank/login', '::1', ''),
(220, 12, 'agbishal', 'has logged in', '17:28:40', '2018-06-15', '06-15-2018 17:28:40 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/login.php', 'Google Chrome', 'http://localhost/bloodbank/login.php', '::1', ''),
(221, 12, 'agbishal', 'has Visited to', '17:28:45', '2018-06-15', '06-15-2018 17:28:45 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/donor/profile.php', 'Google Chrome', 'http://localhost/bloodbank/donor/profile', '::1', ''),
(222, 12, 'agbishal', 'has Visited to', '17:28:58', '2018-06-15', '06-15-2018 17:28:58 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/donor/profile.php', 'Google Chrome', 'http://localhost/bloodbank/donor/profile', '::1', ''),
(223, 12, 'agbishal', 'has updated his profile', '17:28:58', '2018-06-15', '06-15-2018 17:28:58 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/donor/profile.php', 'Google Chrome', 'http://localhost/bloodbank/donor/profile', '::1', ''),
(224, 12, 'agbishal', 'has Visited to', '17:29:01', '2018-06-15', '06-15-2018 17:29:01 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/donor/profile.php', 'Google Chrome', 'http://localhost/bloodbank/donor/profile', '::1', ''),
(225, 1, 'admin', 'has logged in', '17:29:37', '2018-06-15', '06-15-2018 17:29:37 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/login.php', 'Google Chrome', 'http://localhost/bloodbank/login', '::1', ''),
(226, 1, 'admin', 'has logged in', '17:30:45', '2018-06-15', '06-15-2018 17:30:45 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/login.php', 'Google Chrome', 'http://localhost/bloodbank/login', '::1', ''),
(227, 1, 'admin', 'has Visited to', '17:48:18', '2018-06-15', '06-15-2018 17:48:18 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/admin/profile.php', 'Google Chrome', 'http://localhost/bloodbank/admin/profile', '::1', ''),
(228, 1, 'admin', 'has logged in', '17:55:47', '2018-06-15', '06-15-2018 17:55:47 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/login.php', 'Google Chrome', 'http://localhost/bloodbank/login', '::1', ''),
(229, 1, 'admin', 'has logged in', '17:56:36', '2018-06-15', '06-15-2018 17:56:36 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/login.php', 'Google Chrome', 'http://localhost/bloodbank/login', '::1', ''),
(230, 12, 'agbishal', 'has logged in', '18:02:36', '2018-06-15', '06-15-2018 18:02:36 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/login.php', 'Google Chrome', 'http://localhost/bloodbank/login.php', '::1', ''),
(231, 12, 'agbishal', 'has Visited to', '18:03:00', '2018-06-15', '06-15-2018 18:03:00 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/donor/profile.php', 'Google Chrome', 'http://localhost/bloodbank/donor/profile', '::1', ''),
(232, 12, 'agbishal', 'has logged in', '18:09:36', '2018-06-15', '06-15-2018 18:09:36 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/login.php', 'Google Chrome', 'http://localhost/bloodbank/login.php', '::1', ''),
(233, 1, 'admin', 'has logged in', '18:13:56', '2018-06-15', '06-15-2018 18:13:56 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/login.php', 'Google Chrome', 'http://localhost/bloodbank/login', '::1', ''),
(234, 1, 'admin', 'has logged in', '12:41:19', '2018-06-16', '06-16-2018 12:41:19 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/login.php', 'Google Chrome', 'http://localhost/bloodbank/login', '::1', ''),
(235, 13, 'agrahari bishal7537', 'has logged in', '12:45:54', '2018-06-16', '06-16-2018 12:45:54 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/login.php', 'Google Chrome', 'http://localhost/bloodbank/login.php', '::1', ''),
(236, 13, 'agrahari bishal7537', 'has Visited to', '12:46:53', '2018-06-16', '06-16-2018 12:46:53 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/donor/profile.php', 'Google Chrome', 'http://localhost/bloodbank/donor/profile', '::1', ''),
(237, 13, 'agrahari bishal7537', 'has Visited to', '12:53:30', '2018-06-16', '06-16-2018 12:53:30 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/donor/profile.php', 'Google Chrome', 'http://localhost/bloodbank/donor/profile', '::1', ''),
(238, 13, 'agrahari bishal7537', 'has Visited to', '12:53:43', '2018-06-16', '06-16-2018 12:53:43 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/donor/profile.php', 'Google Chrome', 'http://localhost/bloodbank/donor/profile', '::1', ''),
(239, 13, 'agrahari bishal7537', 'has Visited to', '12:54:25', '2018-06-16', '06-16-2018 12:54:25 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/donor/profile.php', 'Google Chrome', 'http://localhost/bloodbank/donor/profile', '::1', ''),
(240, 13, 'agrahari bishal7537', 'has updated his profile', '12:54:25', '2018-06-16', '06-16-2018 12:54:25 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/donor/profile.php', 'Google Chrome', 'http://localhost/bloodbank/donor/profile', '::1', ''),
(241, 13, 'agrahari bishal7537', 'has Visited to', '12:54:31', '2018-06-16', '06-16-2018 12:54:31 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/donor/profile.php', 'Google Chrome', 'http://localhost/bloodbank/donor/profile', '::1', ''),
(242, 13, 'agrahari bishal7537', 'has Visited to', '12:54:36', '2018-06-16', '06-16-2018 12:54:36 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/donor/profile.php', 'Google Chrome', 'http://localhost/bloodbank/donor/profile', '::1', ''),
(243, 1, 'admin', 'has logged in', '12:55:42', '2018-06-16', '06-16-2018 12:55:42 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/login.php', 'Google Chrome', 'http://localhost/bloodbank/login', '::1', ''),
(244, 1, 'admin', 'has logged in', '12:55:43', '2018-06-16', '06-16-2018 12:55:43 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/login.php', 'Google Chrome', 'http://localhost/bloodbank/login', '::1', ''),
(245, 1, 'admin', 'has Visited to', '12:56:43', '2018-06-16', '06-16-2018 12:56:43 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/admin/profile.php', 'Google Chrome', 'http://localhost/bloodbank/admin/profile', '::1', ''),
(246, 1, 'admin', 'has Visited to', '12:59:44', '2018-06-16', '06-16-2018 12:59:44 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/admin/profile.php', 'Google Chrome', 'http://localhost/bloodbank/admin/profile', '::1', ''),
(247, 1, 'admin', 'has updated his profile', '12:59:44', '2018-06-16', '06-16-2018 12:59:44 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/admin/profile.php', 'Google Chrome', 'http://localhost/bloodbank/admin/profile', '::1', ''),
(248, 1, 'admin', 'has Visited to', '12:59:46', '2018-06-16', '06-16-2018 12:59:46 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/admin/profile.php', 'Google Chrome', 'http://localhost/bloodbank/admin/profile', '::1', ''),
(249, 1, 'admin', 'has logged in', '13:00:00', '2018-06-16', '06-16-2018 13:00:00 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/login.php', 'Google Chrome', 'http://localhost/bloodbank/login', '::1', ''),
(250, 1, 'admin', 'has Visited to', '13:00:13', '2018-06-16', '06-16-2018 13:00:13 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/admin/profile.php', 'Google Chrome', 'http://localhost/bloodbank/admin/profile', '::1', ''),
(251, 1, 'admin', 'has Visited to', '13:00:28', '2018-06-16', '06-16-2018 13:00:28 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/admin/profile.php', 'Google Chrome', 'http://localhost/bloodbank/admin/profile', '::1', ''),
(252, 1, 'admin', 'has updated his profile', '13:00:28', '2018-06-16', '06-16-2018 13:00:28 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/admin/profile.php', 'Google Chrome', 'http://localhost/bloodbank/admin/profile', '::1', ''),
(253, 1, 'admin', 'has Visited to', '13:00:31', '2018-06-16', '06-16-2018 13:00:31 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/admin/profile.php', 'Google Chrome', 'http://localhost/bloodbank/admin/profile', '::1', ''),
(254, 1, 'admin', 'has logged in', '11:49:31', '2018-06-17', '06-17-2018 11:49:31 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/login.php', 'Google Chrome', 'http://localhost/bloodbank/login', '::1', ''),
(255, 11, 'glks199015', 'has Contacted you regarding Membership.', '11:53:02', '2018-06-17', '06-17-2018 11:53:02 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/savetodb.php', 'Google Chrome', 'http://localhost/bloodbank/savetodb.php', '::1', ''),
(256, 1, 'admin', 'has logged in', '11:53:17', '2018-06-17', '06-17-2018 11:53:17 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/login.php', 'Google Chrome', 'http://localhost/bloodbank/login', '::1', ''),
(257, 1, 'admin', 'has logged in', '11:59:06', '2018-06-17', '06-17-2018 11:59:06 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/login.php', 'Google Chrome', 'http://localhost/bloodbank/login', '::1', ''),
(258, 1, 'admin', 'has Visited to', '12:00:38', '2018-06-17', '06-17-2018 12:00:38 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/admin/profile.php', 'Google Chrome', 'http://localhost/bloodbank/admin/profile', '::1', ''),
(259, 12, 'gks199h015', 'has Contacted you regarding Membership.', '18:35:49', '2018-06-17', '06-17-2018 18:35:49 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/savetodb.php', 'Google Chrome', 'http://localhost/bloodbank/savetodb.php', '::1', ''),
(260, 1, 'admin', 'has logged in', '18:36:39', '2018-06-17', '06-17-2018 18:36:39 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/login.php', 'Google Chrome', 'http://localhost/bloodbank/login', '::1', ''),
(261, 12, 'gks199h015', 'has logged in', '18:38:04', '2018-06-17', '06-17-2018 18:38:04 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/login.php', 'Google Chrome', 'http://localhost/bloodbank/login.php', '::1', ''),
(262, 12, 'gks199h015', 'has Visited to', '18:38:11', '2018-06-17', '06-17-2018 18:38:11 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/donor/profile.php', 'Google Chrome', 'http://localhost/bloodbank/donor/profile', '::1', ''),
(263, 12, 'gks199h015', 'has Visited to', '18:38:50', '2018-06-17', '06-17-2018 18:38:50 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/donor/profile.php', 'Google Chrome', 'http://localhost/bloodbank/donor/profile', '::1', ''),
(264, 12, 'gks199h015', 'has updated his profile', '18:38:50', '2018-06-17', '06-17-2018 18:38:50 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/donor/profile.php', 'Google Chrome', 'http://localhost/bloodbank/donor/profile', '::1', ''),
(265, 12, 'gks199h015', 'has Visited to', '18:38:52', '2018-06-17', '06-17-2018 18:38:52 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/donor/profile.php', 'Google Chrome', 'http://localhost/bloodbank/donor/profile', '::1', ''),
(266, 12, 'agbishal', 'has logged in', '18:39:33', '2018-06-17', '06-17-2018 18:39:33 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/login.php', 'Google Chrome', 'http://localhost/bloodbank/login.php', '::1', ''),
(267, 1, 'admin', 'has logged in', '18:41:01', '2018-06-17', '06-17-2018 18:41:01 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/login.php', 'Google Chrome', 'http://localhost/bloodbank/login', '::1', ''),
(268, 1, 'admin', 'has Visited to', '18:43:50', '2018-06-17', '06-17-2018 18:43:50 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/admin/profile.php', 'Google Chrome', 'http://localhost/bloodbank/admin/profile', '::1', ''),
(269, 12, 'agbishal', 'has logged in', '18:45:00', '2018-06-17', '06-17-2018 18:45:00 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/login.php', 'Google Chrome', 'http://localhost/bloodbank/login.php', '::1', ''),
(270, 1, 'admin', 'has logged in', '18:45:42', '2018-06-17', '06-17-2018 18:45:42 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/login.php', 'Google Chrome', 'http://localhost/bloodbank/login', '::1', ''),
(271, 12, 'agbishal', 'has logged in', '18:48:40', '2018-06-17', '06-17-2018 18:48:40 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/login.php', 'Google Chrome', 'http://localhost/bloodbank/login.php', '::1', ''),
(272, 1, 'admin', 'has logged in', '18:49:08', '2018-06-17', '06-17-2018 18:49:08 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/login.php', 'Google Chrome', 'http://localhost/bloodbank/login', '::1', ''),
(273, 1, 'admin', 'has Visited to', '18:49:16', '2018-06-17', '06-17-2018 18:49:16 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/admin/profile.php', 'Google Chrome', 'http://localhost/bloodbank/admin/profile', '::1', ''),
(274, 12, 'agbishal', 'has logged in', '18:50:15', '2018-06-17', '06-17-2018 18:50:15 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/login.php', 'Google Chrome', 'http://localhost/bloodbank/login.php', '::1', ''),
(275, 13, 'gks1989015', 'has Contacted you regarding Membership.', '06:53:18', '2018-06-18', '06-18-2018 06:53:18 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/savetodb.php', 'Google Chrome', 'http://localhost/bloodbank/savetodb.php', '::1', ''),
(276, 1, 'admin', 'has logged in', '06:53:54', '2018-06-18', '06-18-2018 06:53:54 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/login.php', 'Google Chrome', 'http://localhost/bloodbank/login', '::1', ''),
(277, 1, 'admin', 'has logged in', '06:59:52', '2018-06-18', '06-18-2018 06:59:52 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/login.php', 'Google Chrome', 'http://localhost/bloodbank/login', '::1', ''),
(278, 1, 'admin', 'has Visited to', '07:01:17', '2018-06-18', '06-18-2018 07:01:17 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/admin/profile.php', 'Google Chrome', 'http://localhost/bloodbank/admin/profile', '::1', ''),
(279, 1, 'admin', 'has logged in', '07:02:50', '2018-06-18', '06-18-2018 07:02:50 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/login.php', 'Google Chrome', 'http://localhost/bloodbank/login', '::1', ''),
(280, 14, '_gks199015', 'has Contacted you regarding Membership.', '07:05:35', '2018-06-18', '06-18-2018 07:05:35 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/savetodb.php', 'Google Chrome', 'http://localhost/bloodbank/savetodb.php', '::1', ''),
(281, 1, 'admin', 'has logged in', '07:05:48', '2018-06-18', '06-18-2018 07:05:48 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/login.php', 'Google Chrome', 'http://localhost/bloodbank/login', '::1', ''),
(282, 1, 'admin', 'has Visited to', '08:17:58', '2018-06-18', '06-18-2018 08:17:58 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/admin/profile.php', 'Google Chrome', 'http://localhost/bloodbank/admin/profile', '::1', ''),
(283, 14, '_gks199015', 'has logged in', '08:24:57', '2018-06-18', '06-18-2018 08:24:57 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/login.php', 'Google Chrome', 'http://localhost/bloodbank/login.php', '::1', ''),
(284, 14, '_gks199015', 'has Visited to', '08:25:04', '2018-06-18', '06-18-2018 08:25:04 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/donor/profile.php', 'Google Chrome', 'http://localhost/bloodbank/donor/profile', '::1', ''),
(285, 14, '_gks199015', 'has Visited to', '08:25:48', '2018-06-18', '06-18-2018 08:25:48 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/donor/profile.php', 'Google Chrome', 'http://localhost/bloodbank/donor/profile', '::1', ''),
(286, 14, '_gks199015', 'has updated his profile', '08:25:48', '2018-06-18', '06-18-2018 08:25:48 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/donor/profile.php', 'Google Chrome', 'http://localhost/bloodbank/donor/profile', '::1', ''),
(287, 14, '_gks199015', 'has Visited to', '08:25:51', '2018-06-18', '06-18-2018 08:25:51 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/donor/profile.php', 'Google Chrome', 'http://localhost/bloodbank/donor/profile', '::1', ''),
(288, 1, 'admin', 'has logged in', '08:26:47', '2018-06-18', '06-18-2018 08:26:47 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/login.php', 'Google Chrome', 'http://localhost/bloodbank/login', '::1', ''),
(289, 1, 'admin', 'has logged in', '08:29:29', '2018-06-18', '06-18-2018 08:29:29 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/login.php', 'Google Chrome', 'http://localhost/bloodbank/login', '::1', ''),
(290, 1, 'admin', 'has logged in', '09:39:51', '2018-06-18', '06-18-2018 09:39:51 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/login.php', 'Google Chrome', 'http://localhost/bloodbank/login', '::1', ''),
(291, 1, 'admin', 'has logged in', '07:28:15', '2018-06-19', '06-19-2018 07:28:15 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/login.php', 'Google Chrome', 'http://localhost/bloodbank/login', '::1', ''),
(292, 12, 'agbishal', 'has logged in', '07:31:03', '2018-06-19', '06-19-2018 07:31:03 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/login.php', 'Google Chrome', 'http://localhost/bloodbank/login.php', '::1', ''),
(293, 1, 'admin', 'has logged in', '10:07:30', '2018-06-20', '06-20-2018 10:07:30 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/login.php', 'Google Chrome', 'http://localhost/bloodbank/login', '::1', ''),
(294, 15, 'gks199O015', 'has Contacted you regarding Membership.', '10:09:24', '2018-06-20', '06-20-2018 10:09:24 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/savetodb.php', 'Google Chrome', 'http://localhost/bloodbank/savetodb.php', '::1', ''),
(295, 1, 'admin', 'has logged in', '10:09:46', '2018-06-20', '06-20-2018 10:09:46 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/login.php', 'Google Chrome', 'http://localhost/bloodbank/login', '::1', ''),
(296, 15, 'gks199O015', 'has logged in', '10:14:34', '2018-06-20', '06-20-2018 10:14:34 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/login.php', 'Google Chrome', 'http://localhost/bloodbank/login.php', '::1', ''),
(297, 15, 'gks199O015', 'has Visited to', '10:14:40', '2018-06-20', '06-20-2018 10:14:40 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/donor/profile.php', 'Google Chrome', 'http://localhost/bloodbank/donor/profile', '::1', ''),
(298, 15, 'gks199O015', 'has Visited to', '10:15:02', '2018-06-20', '06-20-2018 10:15:02 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/donor/profile.php', 'Google Chrome', 'http://localhost/bloodbank/donor/profile', '::1', ''),
(299, 15, 'gks199O015', 'has updated his profile', '10:15:02', '2018-06-20', '06-20-2018 10:15:02 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/donor/profile.php', 'Google Chrome', 'http://localhost/bloodbank/donor/profile', '::1', ''),
(300, 15, 'gks199O015', 'has Visited to', '10:15:04', '2018-06-20', '06-20-2018 10:15:04 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/donor/profile.php', 'Google Chrome', 'http://localhost/bloodbank/donor/profile', '::1', ''),
(301, 15, 'aarif', 'has logged in', '10:15:30', '2018-06-20', '06-20-2018 10:15:30 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/login.php', 'Google Chrome', 'http://localhost/bloodbank/login.php', '::1', ''),
(302, 1, 'admin', 'has logged in', '10:17:10', '2018-06-20', '06-20-2018 10:17:10 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/login.php', 'Google Chrome', 'http://localhost/bloodbank/login', '::1', ''),
(303, 1, 'admin', 'has logged in', '22:00:19', '2018-06-20', '06-20-2018 22:00:19 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/login.php', 'Google Chrome', 'http://localhost/bloodbank/login', '::1', ''),
(304, 1, 'admin', 'has logged in', '22:04:12', '2018-06-20', '06-20-2018 22:04:12 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/login.php', 'Google Chrome', 'http://localhost/bloodbank/login', '::1', ''),
(305, 16, 'gkTs199015', 'has Contacted you regarding Membership.', '13:10:39', '2018-06-24', '06-24-2018 13:10:39 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/savetodb.php', 'Google Chrome', 'http://localhost/bloodbank/savetodb.php', '::1', ''),
(306, 1, 'admin', 'has logged in', '13:10:53', '2018-06-24', '06-24-2018 13:10:53 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/login.php', 'Google Chrome', 'http://localhost/bloodbank/login', '::1', ''),
(307, 1, 'admin', 'has logged in', '08:08:22', '2018-06-25', '06-25-2018 08:08:22 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/login.php', 'Google Chrome', 'http://localhost/bloodbank/login', '::1', ''),
(308, 1, 'admin', 'has logged in', '08:20:42', '2018-06-25', '06-25-2018 08:20:42 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/login.php', 'Google Chrome', 'http://localhost/bloodbank/login', '::1', ''),
(309, 1, 'admin', 'has Visited to', '08:20:51', '2018-06-25', '06-25-2018 08:20:51 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/admin/profile.php', 'Google Chrome', 'http://localhost/bloodbank/admin/profile', '::1', ''),
(310, 16, 'gks199y015', 'has Contacted you regarding Membership.', '10:25:38', '2018-06-25', '06-25-2018 10:25:38 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/savetodb.php', 'Google Chrome', 'http://localhost/bloodbank/savetodb.php', '::1', ''),
(311, 1, 'admin', 'has logged in', '10:25:55', '2018-06-25', '06-25-2018 10:25:55 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/login.php', 'Google Chrome', 'http://localhost/bloodbank/login', '::1', ''),
(312, 16, 'gks199y015', 'has logged in', '10:29:28', '2018-06-25', '06-25-2018 10:29:28 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/login.php', 'Google Chrome', 'http://localhost/bloodbank/login.php', '::1', ''),
(313, 16, 'gks199y015', 'has Visited to', '10:29:37', '2018-06-25', '06-25-2018 10:29:37 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/donor/profile.php', 'Google Chrome', 'http://localhost/bloodbank/donor/profile', '::1', ''),
(314, 16, 'gks199y015', 'has Visited to', '10:30:31', '2018-06-25', '06-25-2018 10:30:31 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/donor/profile.php', 'Google Chrome', 'http://localhost/bloodbank/donor/profile', '::1', ''),
(315, 16, 'gks199y015', 'has updated his profile', '10:30:31', '2018-06-25', '06-25-2018 10:30:31 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/donor/profile.php', 'Google Chrome', 'http://localhost/bloodbank/donor/profile', '::1', ''),
(316, 16, 'gks199y015', 'has Visited to', '10:30:34', '2018-06-25', '06-25-2018 10:30:34 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/donor/profile.php', 'Google Chrome', 'http://localhost/bloodbank/donor/profile', '::1', ''),
(317, 1, 'admin', 'has logged in', '10:31:06', '2018-06-25', '06-25-2018 10:31:06 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/login.php', 'Google Chrome', 'http://localhost/bloodbank/login', '::1', ''),
(318, 16, 'rajeev', 'has logged in', '10:31:38', '2018-06-25', '06-25-2018 10:31:38 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/login.php', 'Google Chrome', 'http://localhost/bloodbank/login.php', '::1', ''),
(319, 16, 'rajeev', 'has Visited to', '10:31:47', '2018-06-25', '06-25-2018 10:31:47 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/donor/profile.php', 'Google Chrome', 'http://localhost/bloodbank/donor/profile', '::1', ''),
(320, 16, 'rajeev', 'has Visited to', '10:31:55', '2018-06-25', '06-25-2018 10:31:55 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/donor/profile.php', 'Google Chrome', 'http://localhost/bloodbank/donor/profile', '::1', ''),
(321, 16, 'rajeev', 'has updated his profile', '10:31:55', '2018-06-25', '06-25-2018 10:31:55 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/donor/profile.php', 'Google Chrome', 'http://localhost/bloodbank/donor/profile', '::1', ''),
(322, 16, 'rajeev', 'has Visited to', '10:31:58', '2018-06-25', '06-25-2018 10:31:58 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/donor/profile.php', 'Google Chrome', 'http://localhost/bloodbank/donor/profile', '::1', ''),
(323, 1, 'admin', 'has logged in', '10:33:03', '2018-06-25', '06-25-2018 10:33:03 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/login.php', 'Google Chrome', 'http://localhost/bloodbank/login', '::1', ''),
(324, 16, 'rajeev', 'has logged in', '10:34:28', '2018-06-25', '06-25-2018 10:34:28 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/login.php', 'Google Chrome', 'http://localhost/bloodbank/login.php', '::1', ''),
(325, 16, 'rajeev', 'has Visited to', '10:34:35', '2018-06-25', '06-25-2018 10:34:35 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/donor/profile.php', 'Google Chrome', 'http://localhost/bloodbank/donor/profile', '::1', ''),
(326, 16, 'rajeev', 'has Visited to', '10:34:49', '2018-06-25', '06-25-2018 10:34:49 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/donor/profile.php', 'Google Chrome', 'http://localhost/bloodbank/donor/profile', '::1', ''),
(327, 16, 'rajeev', 'has updated his profile', '10:34:49', '2018-06-25', '06-25-2018 10:34:49 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/donor/profile.php', 'Google Chrome', 'http://localhost/bloodbank/donor/profile', '::1', ''),
(328, 16, 'rajeev', 'has Visited to', '10:34:52', '2018-06-25', '06-25-2018 10:34:52 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/donor/profile.php', 'Google Chrome', 'http://localhost/bloodbank/donor/profile', '::1', ''),
(329, 16, 'rajeev', 'has logged in', '10:37:12', '2018-06-25', '06-25-2018 10:37:12 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/login.php', 'Google Chrome', 'http://localhost/bloodbank/login.php', '::1', ''),
(330, 16, 'rajeev', 'has Visited to', '10:37:17', '2018-06-25', '06-25-2018 10:37:17 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/donor/profile.php', 'Google Chrome', 'http://localhost/bloodbank/donor/profile', '::1', ''),
(331, 16, 'rajeev', 'has Visited to', '10:37:25', '2018-06-25', '06-25-2018 10:37:25 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/donor/profile.php', 'Google Chrome', 'http://localhost/bloodbank/donor/profile', '::1', ''),
(332, 16, 'rajeev', 'has updated his profile', '10:37:25', '2018-06-25', '06-25-2018 10:37:25 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/donor/profile.php', 'Google Chrome', 'http://localhost/bloodbank/donor/profile', '::1', ''),
(333, 16, 'rajeev', 'has Visited to', '10:37:27', '2018-06-25', '06-25-2018 10:37:27 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/donor/profile.php', 'Google Chrome', 'http://localhost/bloodbank/donor/profile', '::1', ''),
(334, 16, 'rajeev', 'has logged in', '10:38:18', '2018-06-25', '06-25-2018 10:38:18 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/login.php', 'Google Chrome', 'http://localhost/bloodbank/login.php', '::1', ''),
(335, 16, 'rajeev', 'has Visited to', '10:38:25', '2018-06-25', '06-25-2018 10:38:25 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/donor/profile.php', 'Google Chrome', 'http://localhost/bloodbank/donor/profile', '::1', ''),
(336, 17, 'gks1j99015', 'has Contacted you regarding Membership.', '10:50:21', '2018-06-25', '06-25-2018 10:50:21 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/savetodb.php', 'Google Chrome', 'http://localhost/bloodbank/savetodb.php', '::1', ''),
(337, 1, 'admin', 'has logged in', '10:50:34', '2018-06-25', '06-25-2018 10:50:34 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/login.php', 'Google Chrome', 'http://localhost/bloodbank/login', '::1', ''),
(338, 1, 'admin', 'has logged in', '11:04:00', '2018-06-25', '06-25-2018 11:04:00 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/login.php', 'Google Chrome', 'http://localhost/bloodbank/login', '::1', ''),
(339, 18, 'gksZ199015', 'has Contacted you regarding Membership.', '11:05:25', '2018-06-25', '06-25-2018 11:05:25 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/savetodb.php', 'Google Chrome', 'http://localhost/bloodbank/savetodb.php', '::1', ''),
(340, 1, 'admin', 'has logged in', '11:05:39', '2018-06-25', '06-25-2018 11:05:39 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/login.php', 'Google Chrome', 'http://localhost/bloodbank/login', '::1', ''),
(341, 0, 'gksK199015', 'has Contacted you regarding Membership.', '11:09:27', '2018-06-25', '06-25-2018 11:09:27 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/savetodb.php', 'Google Chrome', 'http://localhost/bloodbank/savetodb.php', '::1', ''),
(342, 1, 'admin', 'has logged in', '11:09:44', '2018-06-25', '06-25-2018 11:09:44 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/login.php', 'Google Chrome', 'http://localhost/bloodbank/login', '::1', ''),
(343, 0, 'gks19S9015', 'has Contacted you regarding Membership.', '11:15:47', '2018-06-25', '06-25-2018 11:15:47 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/savetodb.php', 'Google Chrome', 'http://localhost/bloodbank/savetodb.php', '::1', ''),
(344, 1, 'admin', 'has logged in', '11:16:04', '2018-06-25', '06-25-2018 11:16:04 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/login.php', 'Google Chrome', 'http://localhost/bloodbank/login', '::1', ''),
(345, 0, 'igks199015', 'has Contacted you regarding Membership.', '11:24:38', '2018-06-25', '06-25-2018 11:24:38 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/savetodb.php', 'Google Chrome', 'http://localhost/bloodbank/savetodb.php', '::1', ''),
(346, 1, 'admin', 'has logged in', '11:24:51', '2018-06-25', '06-25-2018 11:24:51 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/login.php', 'Google Chrome', 'http://localhost/bloodbank/login', '::1', ''),
(347, 0, 'gks19q9015', 'has Contacted you regarding Membership.', '11:31:38', '2018-06-25', '06-25-2018 11:31:38 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/savetodb.php', 'Google Chrome', 'http://localhost/bloodbank/savetodb.php', '::1', ''),
(348, 0, 'gks19z9015', 'has Contacted you regarding Membership.', '11:32:21', '2018-06-25', '06-25-2018 11:32:21 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/savetodb.php', 'Google Chrome', 'http://localhost/bloodbank/savetodb.php', '::1', ''),
(349, 12, 'agbishal', 'has logged in', '11:33:24', '2018-06-25', '06-25-2018 11:33:24 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/login.php', 'Google Chrome', 'http://localhost/bloodbank/login.php', '::1', ''),
(350, 12, 'agbishal', 'has Visited to', '11:33:29', '2018-06-25', '06-25-2018 11:33:29 -  - Google Chrome - ::1 - none - http://localhost/bloodbank/donor/profile.php', 'Google Chrome', 'http://localhost/bloodbank/donor/profile', '::1', ''),
(351, 1, 'admin', 'has logged in', '11:42:24', '2018-06-25', '06-25-2018 11:42:24 -  - Google Chrome - 127.0.0.1 - none - http://bloodbank.com/login.php', 'Google Chrome', 'http://bloodbank.com/login', '127.0.0.1', ''),
(352, 1, 'admin', 'has logged in', '11:43:38', '2018-06-25', '06-25-2018 11:43:38 -  - Google Chrome - 127.0.0.1 - none - http://bloodbank.com/login.php', 'Google Chrome', 'http://bloodbank.com/login', '127.0.0.1', ''),
(353, 1, 'admin', 'has Visited to', '11:48:17', '2018-06-25', '06-25-2018 11:48:17 -  - Google Chrome - 127.0.0.1 - none - http://bloodbank.com/admin/profile.php', 'Google Chrome', 'http://bloodbank.com/admin/profile', '127.0.0.1', ''),
(354, 1, 'admin', 'has logged in', '17:19:25', '2018-06-25', '06-25-2018 17:19:25 -  - Google Chrome - 127.0.0.1 - none - http://bloodbank.com/login.php', 'Google Chrome', 'http://bloodbank.com/login', '127.0.0.1', ''),
(355, 1, 'admin', 'has Visited to', '17:21:05', '2018-06-25', '06-25-2018 17:21:05 -  - Google Chrome - 127.0.0.1 - none - http://bloodbank.com/admin/profile.php', 'Google Chrome', 'http://bloodbank.com/admin/profile', '127.0.0.1', ''),
(356, 12, 'agbishal', 'has logged in', '17:21:58', '2018-06-25', '06-25-2018 17:21:58 -  - Google Chrome - 127.0.0.1 - none - http://bloodbank.com/login.php', 'Google Chrome', 'http://bloodbank.com/login.php', '127.0.0.1', ''),
(357, 12, 'agbishal', 'has Visited to', '17:22:32', '2018-06-25', '06-25-2018 17:22:32 -  - Google Chrome - 127.0.0.1 - none - http://bloodbank.com/donor/profile.php', 'Google Chrome', 'http://bloodbank.com/donor/profile', '127.0.0.1', ''),
(358, 17, 'gMks199015', 'has Contacted you regarding Membership.', '17:31:16', '2018-06-25', '06-25-2018 17:31:16 -  - Google Chrome - 127.0.0.1 - none - http://bloodbank.com/savetodb.php', 'Google Chrome', 'http://bloodbank.com/savetodb.php', '127.0.0.1', ''),
(359, 1, 'admin', 'has logged in', '17:31:31', '2018-06-25', '06-25-2018 17:31:31 -  - Google Chrome - 127.0.0.1 - none - http://bloodbank.com/login.php', 'Google Chrome', 'http://bloodbank.com/login', '127.0.0.1', ''),
(360, 17, 'gMks199015', 'has logged in', '17:32:51', '2018-06-25', '06-25-2018 17:32:51 -  - Google Chrome - 127.0.0.1 - none - http://bloodbank.com/login.php', 'Google Chrome', 'http://bloodbank.com/login.php', '127.0.0.1', ''),
(361, 17, 'gMks199015', 'has logged in', '17:34:44', '2018-06-25', '06-25-2018 17:34:44 -  - Google Chrome - 127.0.0.1 - none - http://bloodbank.com/login.php', 'Google Chrome', 'http://bloodbank.com/login.php', '127.0.0.1', ''),
(362, 1, 'admin', 'has logged in', '17:35:05', '2018-06-25', '06-25-2018 17:35:05 -  - Google Chrome - 127.0.0.1 - none - http://bloodbank.com/login.php', 'Google Chrome', 'http://bloodbank.com/login', '127.0.0.1', ''),
(363, 18, 'gks199J015', 'has Contacted you regarding Membership.', '17:36:39', '2018-06-25', '06-25-2018 17:36:39 -  - Google Chrome - 127.0.0.1 - none - http://bloodbank.com/savetodb.php', 'Google Chrome', 'http://bloodbank.com/savetodb.php', '127.0.0.1', ''),
(364, 19, 'gks199f015', 'has Contacted you regarding Membership.', '17:37:16', '2018-06-25', '06-25-2018 17:37:16 -  - Google Chrome - 127.0.0.1 - none - http://bloodbank.com/savetodb.php', 'Google Chrome', 'http://bloodbank.com/savetodb.php', '127.0.0.1', ''),
(365, 1, 'admin', 'has logged in', '17:37:30', '2018-06-25', '06-25-2018 17:37:30 -  - Google Chrome - 127.0.0.1 - none - http://bloodbank.com/login.php', 'Google Chrome', 'http://bloodbank.com/login', '127.0.0.1', ''),
(366, 12, 'agbishal', 'has logged in', '17:44:00', '2018-06-25', '06-25-2018 17:44:00 -  - Google Chrome - 127.0.0.1 - none - http://bloodbank.com/login.php', 'Google Chrome', 'http://bloodbank.com/login.php', '127.0.0.1', ''),
(367, 12, 'agbishal', 'has Visited to', '17:44:04', '2018-06-25', '06-25-2018 17:44:04 -  - Google Chrome - 127.0.0.1 - none - http://bloodbank.com/donor/profile.php', 'Google Chrome', 'http://bloodbank.com/donor/profile', '127.0.0.1', ''),
(368, 1, 'admin', 'has logged in', '08:21:20', '2018-06-26', '06-26-2018 08:21:20 -  - Google Chrome - 127.0.0.1 - none - http://bloodbank.com/login.php', 'Google Chrome', 'http://bloodbank.com/login', '127.0.0.1', ''),
(369, 1, 'admin', 'has Visited to', '08:23:55', '2018-06-26', '06-26-2018 08:23:55 -  - Google Chrome - 127.0.0.1 - none - http://bloodbank.com/admin/profile.php', 'Google Chrome', 'http://bloodbank.com/admin/profile', '127.0.0.1', ''),
(370, 1, 'admin', 'has logged in', '08:49:07', '2018-06-27', '06-27-2018 08:49:07 -  - Google Chrome - 127.0.0.1 - none - http://bloodbank.com/login.php', 'Google Chrome', 'http://bloodbank.com/login', '127.0.0.1', ''),
(371, 0, 'igks199015', 'has Contacted you regarding Membership.', '08:52:57', '2018-06-27', '06-27-2018 08:52:57 -  - Google Chrome - 127.0.0.1 - none - http://bloodbank.com/savetodb.php', 'Google Chrome', 'http://bloodbank.com/savetodb.php', '127.0.0.1', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblbloodgroup`
--

CREATE TABLE `tblbloodgroup` (
  `id` int(11) NOT NULL,
  `BloodGroup` varchar(20) DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbloodgroup`
--

INSERT INTO `tblbloodgroup` (`id`, `BloodGroup`, `PostingDate`) VALUES
(1, 'A-', '2018-06-15 08:14:25'),
(2, 'AB-', '2017-06-30 20:34:00'),
(4, 'B-', '2018-06-13 15:09:55'),
(5, 'A+', '2017-06-30 20:34:13'),
(6, 'AB+', '2017-06-30 20:34:18'),
(7, 'O+', '2018-06-13 15:10:03'),
(8, 'O-', '2018-06-13 15:08:09'),
(9, 'B+', '2018-06-14 10:29:53');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactusquery`
--

CREATE TABLE `tblcontactusquery` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `EmailId` varchar(120) DEFAULT NULL,
  `ContactNumber` char(11) DEFAULT NULL,
  `Message` longtext,
  `PostingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcontactusquery`
--

INSERT INTO `tblcontactusquery` (`id`, `name`, `EmailId`, `ContactNumber`, `Message`, `PostingDate`, `status`) VALUES
(5, 'Gopal Shah', 'gopalshah2408@gmail.com', '9804341835', 'Need AB+ blood Urgently', '2018-06-13 02:50:18', 1),
(6, 'Bishal', 'bishal@yopmail.com', '9802714703', 'Need B+ blood Urgently', '2018-06-14 03:01:40', 1),
(7, 'Karan verma', 'karan@yopmail.com', '0000098000', 'Need Urgently AB+', '2018-06-14 07:05:59', 1),
(8, 'Rohan Kumar Mishra', 'rohan@yopmail.com', '2536897412', 'Please help us with O+ its Urgent', '2018-06-14 19:00:30', 1),
(9, 'Jaanardan Sir', 'janardan@yopmail.com', '0000000000', 'Urgently need AB+', '2018-06-15 03:58:18', 1),
(10, 'agrahari bishal', 'agraharibishal786@gmail.com', '9816372072', 'urgently need B+ blood at Nobel Medical college ,BIratnagar', '2018-06-15 11:12:18', 1),
(11, 'bk agrhari', 'bishalagrahari@gmail.com', '9843456562', 'urgently need B+ blood', '2018-06-15 11:35:39', 1),
(12, 'rohit', 'bishalagrahari@gmail.com', '9842464501', 'urgently need b+ blood', '2018-06-17 12:55:45', 1),
(13, 'bisu', 'bishalagrahari@gmail.com', '9842464506', 'urgently need b- blood', '2018-06-18 01:17:36', 1),
(14, 'nirajan joshi', 'nirajanjoshi80@gmail.com', '9842520245', 'urgently need b+ blood', '2018-06-18 02:43:59', 1),
(15, 'bishal', 'bishalagrahari@gmail.com', '9842464506', 'urgently need ab+ blood', '2018-06-20 04:31:19', 1),
(16, 'bishal', 'bishalagrahari@gmail.com', '9842426656', 'urgently need b+ blood', '2018-06-25 05:58:24', 1),
(17, 'bish', 'bishalagrahari@gmail.com', '9843235331', 'urgently need b+ blood', '2018-06-26 02:35:57', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UID` int(11) NOT NULL,
  `FullName` varchar(150) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `MobileNumber` varchar(10) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Age` int(11) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `BloodGroup` varchar(10) NOT NULL,
  `Address` text NOT NULL,
  `Message` text NOT NULL,
  `JoinDate` date NOT NULL,
  `Status` varchar(20) NOT NULL,
  `PostingDate` datetime NOT NULL,
  `LastDonatedDate` date NOT NULL,
  `Role` tinyint(1) NOT NULL,
  `DonorImage` varchar(255) NOT NULL,
  `Public` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UID`, `FullName`, `Email`, `MobileNumber`, `Gender`, `Age`, `UserName`, `Password`, `BloodGroup`, `Address`, `Message`, `JoinDate`, `Status`, `PostingDate`, `LastDonatedDate`, `Role`, `DonorImage`, `Public`) VALUES
(1, 'Bishal Kumar Agrahari', 'blood.info44@gmail.com', '9842464506', 'Male', 23, 'admin', 'admin', 'B+', 'Duhabi-6, Sunsari, Nepal', 'Nothing To Say', '2018-06-13', 'Active', '2018-06-13 09:09:06', '2018-06-01', 0, 'bishal.jpg', 0),
(5, 'Pihu Kumar Shah', 'pihu@yopmail.com', '1234567890', 'FeMale', 23, 'pihu', '1234', 'O+', 'Keshaliya Road 7, Biratnagar, Nepal', 'Nothing To Say', '2018-06-14', 'Active', '2018-06-14 18:38:40', '2018-03-14', 1, 'avatar3.png', 0),
(9, 'Gopal Kumar Shah', 'gopal@yopmail.com', '980271703', 'Male', 28, '1gks199015', '1gks1990', 'A+', 'Dharan', 'Need To Donate Blood', '2018-06-15', 'Active', '2018-06-15 12:45:22', '2018-04-15', 1, 'user8-128x128.jpg', 1),
(10, 'ashish chaudhary', 'grunch.me1@gmail.com', '9845234466', 'male', 23, 'ashish', 'gkys1990', 'B-', 'keshaliya Road, biratnagar', '', '2018-06-15', 'Active', '2018-06-15 16:27:53', '2018-06-15', 1, '32889713_1691968294223049_1247736824676220928_o.jpg', 1),
(12, 'agrahari bishal', 'agraharibishal786@gmail.com', '9816372072', 'Male', 23, 'agbishal', '1234', 'B+', 'duhabi', '', '2018-06-17', 'Active', '2018-06-17 18:35:49', '2018-03-17', 1, 'tm1.jpg', 1),
(13, 'nirajan joshi', 'nirajanjoshi80@gmail.com', '9842520245', 'male', 22, 'gks1989015', 'gks19890', 'B-', 'dharan', '', '2018-06-18', 'Active', '2018-06-18 06:53:18', '2018-06-18', 1, '', 1),
(14, 'kshitiz gautam', 'kshitizgautam143@gmail.com', '9816347872', 'Male', 22, 'kapil', 'kapil', 'B+', 'hatkhola,biratnagar', '', '2018-06-18', 'Active', '2018-06-18 07:05:35', '2018-01-11', 1, '23722208_2058232111065085_1038768689113017987_n.jpg', 1),
(15, 'aarif ansari', 'aarifa965@gmail.com', '9816387492', 'Male', 22, 'aarif', '1234', 'A+', 'hatkhola', '', '2018-06-20', 'Active', '2018-06-20 10:09:24', '2018-01-02', 1, '21950046_1960099157611517_5094958670724881893_o.jpg', 1),
(16, 'rajeev majhi', 'rajeevkumarmajhi@gmail.com', '9842015715', 'Male', 25, 'rajeev', 'rajeev', 'O+', 'biratnagar', '', '2018-06-25', 'Active', '2018-06-25 10:25:38', '2018-02-05', 1, 'tm2.jpg', 1),
(17, 'monu', 'monu@yopmail.com', '9832113133', 'FeMale', 22, 'gMks199015', 'gMks1990', 'O-', 'dharan', '', '2018-06-25', 'Active', '2018-06-25 17:31:16', '2018-06-25', 1, '', 1),
(18, 'ram', 'ram@yopmail.com', '9816372072', 'Male', 22, 'gks199J015', 'gks199J0', 'B-', 'dhran', '', '2018-06-25', 'Active', '2018-06-25 17:36:39', '2018-06-25', 1, '', 0),
(19, 'shyam', 'shyam@yopmail.com', '9832354646', 'Male', 24, 'gks199f015', 'gks199f0', 'AB-', 'brt', '', '2018-06-25', 'Active', '2018-06-25 17:37:16', '2018-06-25', 1, '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `system_log`
--
ALTER TABLE `system_log`
  ADD PRIMARY KEY (`LogID`);

--
-- Indexes for table `tblbloodgroup`
--
ALTER TABLE `tblbloodgroup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcontactusquery`
--
ALTER TABLE `tblcontactusquery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `system_log`
--
ALTER TABLE `system_log`
  MODIFY `LogID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=372;
--
-- AUTO_INCREMENT for table `tblbloodgroup`
--
ALTER TABLE `tblbloodgroup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tblcontactusquery`
--
ALTER TABLE `tblcontactusquery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
