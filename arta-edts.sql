-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 15, 2024 at 04:18 PM
-- Server version: 8.0.34
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arta-edts`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Office of the Director General', 'ODG', NULL, NULL),
(2, 'Office of the Deputy Director General for Administration & Finance', 'ODDGAF', NULL, NULL),
(3, 'Office of the Deputy Director General for Legal', 'ODDGL', NULL, NULL),
(4, 'Office of the Deputy Director General for Operations', 'ODDGO', NULL, NULL),
(5, 'All Offices', 'All Offices', '2024-11-14 02:47:24', '2024-11-14 02:47:24');

-- --------------------------------------------------------

--
-- Table structure for table `div_unit`
--

CREATE TABLE `div_unit` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `div_unit`
--

INSERT INTO `div_unit` (`id`, `name`, `slug`, `department_id`, `office_id`, `created_at`, `updated_at`) VALUES
(1, 'Head Executive Assistant', 'HEA', '1', '1', NULL, NULL),
(2, 'Executive Assistant', 'EA', '1', '1', NULL, NULL),
(3, 'Administrative Assistant', 'AA', '1', '1', NULL, NULL),
(4, 'Program Officer', 'PO', '1', '1', NULL, NULL),
(5, 'Information Officer', 'IO', '1', '2', NULL, NULL),
(6, 'Program Officer', 'PO', '1', '2', NULL, NULL),
(7, 'Executive Assistant', 'EA', '2', '3', NULL, NULL),
(8, 'Administrative Assistant', 'AA', '2', '3', NULL, NULL),
(9, 'Program Officer', 'PO', '2', '3', NULL, NULL),
(10, 'Office of the Director', 'FAO-OD', '2', '4', NULL, NULL),
(11, 'OD-Administrative Assistant', 'AA', '2', '4', NULL, NULL),
(12, 'OD-Program Officer', 'PO', '2', '4', NULL, NULL),
(13, 'Finance Division', 'FD', '2', '4', NULL, NULL),
(14, 'General Services Division', 'GSD', '2', '4', NULL, NULL),
(15, 'Human Resource Development Division', 'HRDD', '2', '4', NULL, NULL),
(16, 'Information and Technology Officer', 'ITO', '2', '5', NULL, NULL),
(17, 'Program Officer', 'PO', '2', '5', NULL, NULL),
(18, 'Planning Officer', 'PlanOff', '2', '6', NULL, NULL),
(19, 'Executive Assistant', 'EA', '3', '7', NULL, NULL),
(20, 'Administrative Assistant', 'AA', '3', '7', NULL, NULL),
(21, 'Program Officer', 'PO', '3', '7', NULL, NULL),
(22, 'Office of the Director', 'IELO-OD', '3', '8', NULL, NULL),
(23, 'OD-Administrative Assistant', 'AA', '3', '8', NULL, NULL),
(24, 'OD-Program Officer', 'PO', '3', '8', NULL, NULL),
(25, 'Investigation and Enforcement Division', 'IED', '3', '8', NULL, NULL),
(26, 'Litigation Division', 'LitDiv', '3', '8', NULL, NULL),
(27, 'Office of the Director', 'LPAO-OD', '3', '9', NULL, NULL),
(28, 'OD-Administrative Assistant', 'AA', '3', '9', NULL, NULL),
(29, 'OD-Program Officer', 'PO', '3', '9', NULL, NULL),
(30, 'Legal Division', 'LegDiv', '3', '9', NULL, NULL),
(31, 'Public Assistance Division', 'PAD', '3', '9', NULL, NULL),
(32, 'Executive Assistant', 'EA', '4', '10', NULL, NULL),
(33, 'Administrative Assistant', 'AA', '4', '10', NULL, NULL),
(34, 'Program Officer', 'PO', '4', '10', NULL, NULL),
(35, 'Office of the Director', 'BRO-OD', '4', '11', NULL, NULL),
(36, 'OD-Administrative Assistant', 'AA', '4', '11', NULL, NULL),
(37, 'OD-Program Officer', 'PO', '4', '11', NULL, NULL),
(38, 'Sectoral Division A', 'BRO A', '4', '11', NULL, NULL),
(39, 'Sectoral Division B', 'BRO B', '4', '11', NULL, NULL),
(40, 'Sectoral Division C', 'BRO C', '4', '11', NULL, NULL),
(41, 'Sectoral Division D', 'BRO D', '4', '11', NULL, NULL),
(42, 'Doing Business Division', 'DBD', '4', '11', NULL, NULL),
(43, 'Regulatory Management and Training Division', 'RMTD', '4', '11', NULL, NULL),
(44, 'Office of the Director', 'CMEO-OD', '4', '12', NULL, NULL),
(45, 'OD-Administrative Assistant', 'AA', '4', '12', NULL, NULL),
(46, 'OD-Program Officer', 'PO', '4', '12', NULL, NULL),
(47, 'Division A', 'CMEO A', '4', '12', NULL, NULL),
(48, 'Division B', 'CMEO B', '4', '12', NULL, NULL),
(49, 'Division C', 'CMEO C', '4', '12', NULL, NULL),
(50, 'Division D', 'CMEO D', '4', '12', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doc_class`
--

CREATE TABLE `doc_class` (
  `id` bigint UNSIGNED NOT NULL,
  `doc_type_id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doc_type`
--

CREATE TABLE `doc_type` (
  `id` bigint UNSIGNED NOT NULL,
  `doc_class_id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `externals`
--

CREATE TABLE `externals` (
  `id` bigint UNSIGNED NOT NULL,
  `dts` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ex_route_id` int UNSIGNED DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Open',
  `department` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `div_unit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `personnel` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doc_class` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doc_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mode_of_trans` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_profile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_contact` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filename` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_by_div_unit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_received` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time_received` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by_user_id` int UNSIGNED DEFAULT NULL,
  `created_by_department` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by_office` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by_div_unit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `modified_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `modified_by_div_unit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ex_route`
--

CREATE TABLE `ex_route` (
  `id` bigint UNSIGNED NOT NULL,
  `dts` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dts_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `externals_id` int UNSIGNED DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Open',
  `department` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department_id` bigint UNSIGNED DEFAULT NULL,
  `office` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office_id` bigint UNSIGNED DEFAULT NULL,
  `div_unit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `div_unit_id` bigint UNSIGNED DEFAULT NULL,
  `personnel` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `personnel_id` bigint UNSIGNED DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `action_req` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_upload` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sharepoint_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note_comment_routed` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `assigned_date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `due_date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cc_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doc_class` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doc_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sent_date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sent_time` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `modeoftrans` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `outgoing` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note_comment_personnel` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `previous_comment` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `routed_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `routed_by_div_unit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `modified_at` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `open_at` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `e_dtsjetstream`
--

CREATE TABLE `e_dtsjetstream` (
  `COL 1` varchar(40) DEFAULT NULL,
  `COL 2` varchar(75) DEFAULT NULL,
  `COL 3` varchar(12) DEFAULT NULL,
  `COL 4` varchar(131) DEFAULT NULL,
  `COL 5` varchar(592) DEFAULT NULL,
  `COL 6` varchar(25) DEFAULT NULL,
  `COL 7` varchar(17) DEFAULT NULL,
  `COL 8` varchar(60) DEFAULT NULL,
  `COL 9` varchar(17) DEFAULT NULL,
  `COL 10` varchar(25) DEFAULT NULL,
  `COL 11` varchar(18) DEFAULT NULL,
  `COL 12` varchar(32) DEFAULT NULL,
  `COL 13` varchar(24) DEFAULT NULL,
  `COL 14` varchar(50) DEFAULT NULL,
  `COL 15` varchar(75) DEFAULT NULL,
  `COL 16` varchar(19) DEFAULT NULL,
  `COL 17` varchar(39) DEFAULT NULL,
  `COL 18` varchar(16) DEFAULT NULL,
  `COL 19` varchar(53) DEFAULT NULL,
  `COL 20` varchar(20) DEFAULT NULL,
  `COL 21` varchar(20) DEFAULT NULL,
  `COL 22` varchar(13) DEFAULT NULL,
  `COL 23` varchar(19) DEFAULT NULL,
  `COL 24` varchar(18) DEFAULT NULL,
  `COL 25` varchar(75) DEFAULT NULL,
  `COL 26` varchar(75) DEFAULT NULL,
  `COL 27` varchar(39) DEFAULT NULL,
  `COL 28` varchar(53) DEFAULT NULL,
  `COL 29` varchar(20) DEFAULT NULL,
  `COL 30` varchar(31) DEFAULT NULL,
  `COL 31` varchar(19) DEFAULT NULL,
  `COL 32` varchar(19) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `e_dtsjetstream`
--

INSERT INTO `e_dtsjetstream` (`COL 1`, `COL 2`, `COL 3`, `COL 4`, `COL 5`, `COL 6`, `COL 7`, `COL 8`, `COL 9`, `COL 10`, `COL 11`, `COL 12`, `COL 13`, `COL 14`, `COL 15`, `COL 16`, `COL 17`, `COL 18`, `COL 19`, `COL 20`, `COL 21`, `COL 22`, `COL 23`, `COL 24`, `COL 25`, `COL 26`, `COL 27`, `COL 28`, `COL 29`, `COL 30`, `COL 31`, `COL 32`) VALUES
('id', 'name', 'slug', 'created_at', 'updated_at', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1', 'Office of the Director General (ODG)', 'ODG', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('2', 'Office of the Deputy Director General for Administration & Finance (ODDGAF)', 'ODDGAF', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('3', 'Office of the Deputy Director General for Legal (ODDGL)', 'ODDGL', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('4', 'Office of the Deputy Director General for Operations (ODDGO)', 'ODDGO', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('id', 'name', 'slug', 'department_id', 'office_id', 'created_at', 'updated_at', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1', 'Security and Intelligence', 'SI', '1', '1', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('2', 'Special Project Management Teams', 'SPMT', '1', '1', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('3', 'Finance Division', 'Finance', '2', '2', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('4', 'General Services Division (GSD)', 'GSD', '2', '2', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('5', 'Human Resource Development Division (HRDD)', 'HRDD', '2', '2', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('6', 'Information and Communications Technology Unit (ICTU)', 'ICTU', '2', '2', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('7', 'Public Relations Unit (PRU)', 'PRU', '2', '2', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('8', 'Investigation and Enforcement Division (IED)', 'IED', '3', '3', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('9', 'Litigation Division', 'LD', '3', '3', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('10', 'Legal Division', 'Legal', '3', '4', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('11', 'Public Assistance Division (PAD)', 'PAD', '3', '4', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('12', 'Better Regulation Division A (BRD A)', 'BRD-A', '4', '5', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('13', 'Better Regulation Division B (BRD B)', 'BRD-B', '4', '5', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('14', 'Better Regulation Division C (BRD C)', 'BRD-C', '4', '5', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('15', 'Better Regulation Division D (BRD D)', 'BRD-D', '4', '5', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('16', 'Compliance Monitoring and Evaluation Division A (CMED A)', 'CMED-A', '4', '6', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('17', 'Compliance Monitoring and Evaluation Division B (CMED B)', 'CMED-B', '4', '6', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('18', 'Compliance Monitoring and Evaluation Division C (CMED C)', 'CMED-C', '4', '6', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('19', 'Compliance Monitoring and Evaluation Division D (CMED D)', 'CMED-D', '4', '6', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('id', 'doc_type_id', 'name', 'created_at', 'updated_at', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('id', 'doc_class_id', 'name', 'created_at', 'updated_at', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('id', 'status', 'department', 'office', 'div_unit', 'personnel', 'doc_class', 'doc_type', 'title', 'subject', 'mode_of_trans', 's_profile', 's_name', 's_address', 's_email', 's_contact', 'file_title', 'filename', 'received_by', 'received_by_div_unit', 'comment', 'date_received', 'time_received', 'created_by', 'created_by_user_id', 'created_by_department', 'created_by_office', 'created_by_div_unit', 'modified_by', 'modified_by_div_unit', 'created_at', 'updated_at'),
('146', 'Closed', '3', '4', 'Public Assistance Division (PAD)', 'Usec. Eduardo Bringas', 'Complaints', 'Hardcopy', '', 'Sample complaint title 1', 'Personal / Walk-in', 'Private', 'Juan Dela Cruz', 'Makati City', 'sample@gmail.com', '09123456789', '', '', 'Reception User', '', '- ', '02/07/2022', '10:24 AM', 'Reception User', '16', 'Office of the Deputy Director General for Administration & Finance (ODDGAF)', 'Finance and Administrative Office (FAO)', 'General Services Division (GSD)', 'Record Officer', 'General Services Division (GSD)', '2022-02-07 08:24:44', '2022-02-09 09:27:10'),
('147', 'Open', '1', '1', 'Special Project Management Teams', 'Sed sequi vel at ips', 'Sealed', 'Softcopy', '', 'Sample complaint title 2', '', '', 'Adipisicing ut quod ', 'Illo mollitia est qu', 'puhured@mailinator.com', '612', '', '', 'Reception User', '', 'Iste impedit in ut ', '02/09/2022', '12:29 AM', 'ICT Admin', '1', 'Office of the Deputy Director General for Administration & Finance (ODDGAF)', 'Finance and Administrative Office (FAO)', 'Information and Communications Technology Unit (ICTU)', '', '', '2022-02-08 22:29:12', '2022-02-08 22:29:12'),
('148', 'Open', '3', '4', 'Public Assistance Division (PAD)', 'Usec. Bringas', 'Complaints', 'Hardcopy', '', 'Sample complaint title 3', 'Courier', 'Local Government Unit (LGU)', 'Ipsum ducimus conse', 'Exercitationem dolor', 'higegikok@mailinator.com', '916', '', '', 'Reception User', '', 'Adipisci quam non la', '08/19/1987', 'Soluta alias amet n', 'Record Officer', '24', 'Office of the Deputy Director General for Administration & Finance (ODDGAF)', 'Finance and Administrative Office (FAO)', 'General Services Division (GSD)', '', '', '2022-02-09 09:20:32', '2022-02-09 09:20:32'),
('149', 'Open', '4', '5', 'Better Regulation Division D (BRD D)', 'Division Chief name', 'Department Order', 'Hardcopy', '', 'Subject 2', 'Courier', 'National Government Agency (NGA)', 'Juan Dela Cruz', 'Makati City', 'sample@gmail.com', '09123456789', '', '', 'Reception User', '', '- ', '02/09/2022', '11:26 AM', 'Reception User', '16', 'Office of the Deputy Director General for Administration & Finance (ODDGAF)', 'Finance and Administrative Office (FAO)', 'General Services Division (GSD)', '', '', '2022-02-09 09:26:05', '2022-02-09 09:26:05'),
('150', 'Open', '3', '4', 'Public Assistance Division (PAD)', 'Usec. Bringas', 'Complaints', 'Hardcopy', '', 'Title', 'Personal / Walk-in', 'Private', 'Juan Dela Cruz', 'Makati City', 'sample@gmail.com', '09123456789', '', '', 'Reception User', '', '- ', '02/09/2022', '3:16 PM', 'Reception User', '16', 'Office of the Deputy Director General for Administration & Finance (ODDGAF)', 'Finance and Administrative Office (FAO)', 'General Services Division (GSD)', '', '', '2022-02-09 13:16:40', '2022-02-09 13:16:40'),
('151', 'Open', '3', '4', 'Legal Division', 'Numquam nihil volupt', 'Confidential', 'Hardcopy', '', 'Dolore dolorem archi', '', '', 'Aperiam non non natu', 'Dicta dolor deserunt', 'facolupak@mailinator.com', '323', '', '', 'ICT Admin', '', 'Quos quibusdam dolor', '04/19/1992', '3:37 AM', 'Reception User', '16', 'Office of the Deputy Director General for Administration & Finance (ODDGAF)', 'Finance and Administrative Office (FAO)', 'General Services Division (GSD)', '', '', '2022-02-15 01:37:57', '2022-02-15 01:37:57'),
('id', 'dts_no', 'status', 'department', 'department_id', 'office', 'office_id', 'div_unit', 'div_unit_id', 'personnel', 'personnel_id', 'action_req', 'subject', 'file_upload', 'note_comment', 'assigned_date', 'due_date', 'cc_email', 'doc_class', 'doc_type', 'sent_date', 'sent_time', 'modeoftrans', 'routed_by', 'routed_by_div_unit', 'modified_at', 'created_at', 'updated_at', 'open_at', NULL, NULL, NULL),
('162', '146', 'Done', '2', '', '2', '', 'General Services Division (GSD)', '', 'Record Officer', '', 'For appropriate action', 'Sample complaint title 1', 'files/KjMb5hx5k6h84jituQwWQxnXgZxvMc9j2p5p9NPe.pdf', '-', '2022-02-07 08:27:25', '', '', 'External', '', '', '', 'Personal / Walk-in', 'Reception User', 'General Services Division (GSD)', '2022-02-09 09:26:39', '2022-02-07 08:27:25', '2022-02-09 09:26:39', '2022-02-07 17:58:37', NULL, NULL, NULL),
('163', '147', 'Done', '2', '', '2', '', 'General Services Division (GSD)', '', 'Record Officer', '', 'For appropriate action', 'Sample complaint title 2', 'files/KjMb5hx5k6h84jituQwWQxnXgZxvMc9j2p5p9NPe.pdf', '-', '2022-02-07 08:27:25', '', 'For signature pa', 'External', '', '', '', 'Personal / Walk-in', 'Reception User', 'General Services Division (GSD)', '2022-02-09 11:59:58', '2022-02-07 08:27:25', '2022-02-09 11:59:58', '2022-02-09 11:59:42', NULL, NULL, NULL),
('164', '148', 'Hold', '2', '', '2', '', 'General Services Division (GSD)', '', 'Record Officer', '', 'For appropriate action', 'Sample complaint title 3', 'files/KjMb5hx5k6h84jituQwWQxnXgZxvMc9j2p5p9NPe.pdf', '-', '2022-02-07 08:27:25', '', 'For signature pa', 'External', '', '', '', 'Personal / Walk-in', 'Reception User', 'General Services Division (GSD)', '', '2022-02-07 08:27:25', '2022-02-07 20:36:27', '', NULL, NULL, NULL),
('165', '148', 'Done', '2', '', '2', '', 'General Services Division (GSD)', '', 'Record Officer', '', 'For appropriate action', 'Sample complaint title 3', 'files/KjMb5hx5k6h84jituQwWQxnXgZxvMc9j2p5p9NPe.pdf', '-', '2022-02-07 08:27:25', '', 'For signature pa', 'External', '', '', '', 'Personal / Walk-in', 'Reception User', 'General Services Division (GSD)', '', '2022-02-07 08:27:25', '2022-02-07 20:36:27', '', NULL, NULL, NULL),
('166', '147', 'Hold', '2', '', '2', '', 'General Services Division (GSD)', '', 'User1', '', 'For your information', 'Sample complaint title 2', 'files/v0RTzYV1iJcRyanFIBBwUHjVRxW3D8EBJM68MIsS.jpg', '- adsfasdfasdf', '2022-02-08 22:47:44', '02/09/2022', '-', 'External', '', '', '', 'E-DTS', 'User1', 'Information and Communications Technology Unit (ICTU)', '2022-02-08 23:14:43', '2022-02-08 22:47:44', '2022-02-08 23:14:43', '2022-02-08 23:12:36', NULL, NULL, NULL),
('167', '150', 'Done', '2', '', '2', '', 'General Services Division (GSD)', '', 'Record Officer', '', 'For appropriate action', 'Title', 'files/jxp7wfyc7tmPo9d0TacGxtFvliAplykDbsYT8RMX.jpg', '- ', '2022-02-09 13:17:41', '', '-', 'Internal', '', '', '', 'E-DTS', 'Reception User', 'General Services Division (GSD)', '2022-02-10 07:31:09', '2022-02-09 13:17:41', '2022-02-10 07:31:09', '2022-02-09 13:47:34', NULL, NULL, NULL),
('168', '151', 'New', '4', '', '5', '', 'Better Regulation Division A (BRD A)', '', 'DDG', '', 'For revision', 'Veritatis nulla fugi', 'files/7rbkd33L7jfDwNaxxNjS4R9aynynxk6UAmsXwzUE.jpg', 'Suscipit qui incidid', '2022-02-15 01:40:11', '03/19/1993', '- ', '', '', '', '', 'Registered', 'Reception User', 'General Services Division (GSD)', '', '2022-02-15 01:40:11', '2022-02-15 01:40:11', '', NULL, NULL, NULL),
('id', 'uuid', 'connection', 'queue', 'payload', 'exception', 'failed_at', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('id', 'status', 'department', 'office', 'div_unit', 'personnel', 'doc_class', 'doc_type', 'title', 'subject', 'mode_of_trans', 's_profile', 's_name', 's_address', 's_email', 's_contact', 'file_title', 'filename', 'received_by', 'comment', 'date_received', 'time_received', 'created_by', 'created_by_user_id', 'created_by_department', 'created_by_office', 'created_by_div_unit', 'modified_by', 'modified_by_div_unit', 'created_at', 'updated_at', NULL),
('14', 'Open', '2', '2', 'General Services Division (GSD)', 'Jojo', 'Complaints', 'Hardcopy', '', 'dasdasdasdasd', 'Courier', '', 'Unit Head', '', 'unithead@arta.gov.ph', '', '', '', '', '- ', '', '', 'Unit Head', '21', 'Office of the Deputy Director General for Administration & Finance (ODDGAF)', 'Finance and Administrative Office (FAO)', 'General Services Division (GSD)', '', '', '2022-02-07 21:49:17', '2022-02-07 21:49:17', NULL),
('id', 'dts_no', 'status', 'department', 'department_id', 'office', 'office_id', 'div_unit', 'div_unit_id', 'personnel', 'personnel_id', 'action_req', 'subject', 'file_upload', 'note_comment', 'assigned_date', 'due_date', 'cc_email', 'doc_class', 'doc_type', 'sent_date', 'sent_time', 'modeoftrans', 'routed_by', 'routed_by_div_unit', 'modified_at', 'created_at', 'updated_at', 'open_at', NULL, NULL, NULL),
('17', '14', 'New', '1', '', '1', '', 'Special Project Management Teams', '4', 'User1', '', 'For compliance/implementation', 'sadsadasdasdasd', 'files/k9WX77OJWrXzokxunn9uaEYkrpjd0XjnW8Tu2pdJ.jpg', '- ', '2022-02-07 21:50:01', '', '- ', '', '', '', '', 'E-DTS', 'Unit Head', 'General Services Division (GSD)', '', '2022-02-07 21:50:02', '2022-02-07 21:50:02', '', NULL, NULL, NULL),
('id', 'migration', 'batch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('20', '2014_10_12_000000_create_users_table', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('21', '2014_10_12_100000_create_password_resets_table', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('22', '2014_10_12_200000_add_two_factor_columns_to_users_table', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('23', '2019_08_19_000000_create_failed_jobs_table', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('24', '2019_12_14_000001_create_personal_access_tokens_table', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('25', '2021_05_28_074221_create_sessions_table', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('26', '2021_06_30_031423_create_dropdown_list_table', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('27', '2021_07_05_122729_create_uploads_table', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('28', '2021_07_23_091805_create_permission_tables', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('29', '2021_08_23_204442_create_department_table', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('30', '2021_08_23_205128_create_office_table', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('31', '2021_08_23_205326_create_div_unit_table', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('32', '2021_10_12_221312_create_ex_route_table', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('33', '2021_10_15_142524_update_externals_table', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('34', '2021_10_28_200826_add_columns_to_exroute_table', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('35', '2021_11_05_083720_rename_action_in_ex_route_table', '6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('36', '2021_11_05_085729_add_default_value_in_ex_reoute_table', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('37', '2021_11_16_193433_create_in_route_table', '8', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('38', '2021_11_18_140258_add_column_in_ex_route_table', '9', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('39', '2021_11_19_131937_add_columns', '10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('40', '2021_11_24_094834_add_multiple_columns', '11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('41', '2021_11_24_102258_add_column_in_user_table', '12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('42', '2022_01_10_181640_create_permission_tables', '13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('43', '2022_01_10_235008_create_products_table', '14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('44', '2022_01_31_161221_add_multiple_column_to_ex_in_table', '15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('permission_id', 'model_type', 'model_id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('9', 'App\\Models\\User', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('10', 'App\\Models\\User', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('11', 'App\\Models\\User', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('12', 'App\\Models\\User', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('13', 'App\\Models\\User', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('14', 'App\\Models\\User', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('15', 'App\\Models\\User', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('16', 'App\\Models\\User', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('role_id', 'model_type', 'model_id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('4', 'App\\Models\\User', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('7', 'App\\Models\\User', '21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('8', 'App\\Models\\User', '16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('8', 'App\\Models\\User', '24', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('8', 'App\\Models\\User', '25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('9', 'App\\Models\\User', '22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('10', 'App\\Models\\User', '23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('id', 'name', 'slug', 'department_id', 'created_at', 'updated_at', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1', 'Special Project Management Office (SPMO)', 'SPMO', '1', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('2', 'Finance and Administrative Office (FAO)', 'FAO', '2', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('3', 'Investigation, Enforcement and Litigation Office (IELO)', 'IELO', '3', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('4', 'Legal and Public Assistance Office (LPAO)', 'LPAO', '3', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('5', 'Better Regulations Office (BRO)', 'BRO', '4', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('6', 'Compliance Monitoring and Evaluation Office (CMEO)', 'CMEO', '4', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('email', 'token', 'created_at', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('id', 'name', 'guard_name', 'created_at', 'updated_at', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('9', 'role-list', 'web', '2022-01-11 00:31:22', '2022-01-11 00:31:22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('10', 'role-create', 'web', '2022-01-11 00:31:25', '2022-01-11 00:31:25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('11', 'role-edit', 'web', '2022-01-11 00:31:26', '2022-01-11 00:31:26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('12', 'role-delete', 'web', '2022-01-11 00:31:26', '2022-01-11 00:31:26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('13', 'user-list', 'web', '2022-01-11 00:31:26', '2022-01-11 00:31:26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('14', 'user-create', 'web', '2022-01-11 00:31:27', '2022-01-11 00:31:27', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('15', 'user-edit', 'web', '2022-01-11 00:31:27', '2022-01-11 00:31:27', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('16', 'user-delete', 'web', '2022-01-11 00:31:27', '2022-01-11 00:31:27', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('17', 'department_status', 'web', '2022-02-03 09:21:02', '2022-02-03 09:21:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('18', 'office_status', 'web', '2022-02-03 09:21:02', '2022-02-03 09:21:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('19', 'div_unit_status', 'web', '2022-02-03 09:22:25', '2022-02-03 09:22:25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('id', 'tokenable_type', 'tokenable_id', 'name', 'token', 'abilities', 'last_used_at', 'created_at', 'updated_at', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('id', 'name', 'detail', 'created_at', 'updated_at', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('id', 'name', 'guard_name', 'created_at', 'updated_at', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('4', 'SuperAdmin', 'web', '2022-01-11 00:31:55', '2022-01-11 00:31:55', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('5', 'Admin', 'web', '2022-01-11 03:00:26', '2022-01-11 03:00:26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('7', 'Head', 'web', '2022-01-11 03:12:52', '2022-01-11 03:12:52', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('8', 'User', 'web', '2022-01-11 18:42:17', '2022-01-11 18:42:17', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('9', 'Director', 'web', '2022-02-06 17:22:34', '2022-02-06 17:22:34', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('10', 'ODDG', 'web', '2022-02-06 17:27:07', '2022-02-06 17:27:07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('permission_id', 'role_id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('9', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('9', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('10', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('11', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('11', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('12', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('13', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('13', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('14', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('15', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('15', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('16', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('17', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('17', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('17', '10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('18', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('18', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('18', '9', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('19', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('19', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('19', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('id', 'user_id', 'ip_address', 'user_agent', 'payload', 'last_activity', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('2t3gW0To2o9bUUXJbEpjtfAELjWV68GwABhjBigk', '1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.80 Safari/537.36 Edg/98.0.1108.50', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiQVJINDg0MXhpdWFuV0hGQXJ5dGVkWUZYS29Ic1NqN092Z3owcVhKdiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9yb2xlcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRhbjBUVDZzaGxJSVFVdlBwbjNwZkx1T2RHLzUxSmUycVVaaTZwY1hRM0ljbDEuS2lzR0FJYSI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkYW4wVFQ2c2hsSUlRVXZQcG4zcGZMdU9kRy81MUplMnFVWmk2cGNYUTNJY2wxLktpc0dBSWEiO30=', '1644923703', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('3T2bSI3xWNVAqmKhV2HEaSUhbRRQl2wet8FsBKq7', '', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.80 Safari/537.36 Edg/98.0.1108.50', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSkwybmFRT2s5elEwOWxyVEZTZmZLSXEzSEFjUzkzdW9NZ3BvUUhiYSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozMzoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2FkbWluL3JvbGVzIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9yb2xlcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', '1644933443', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('98NopBm0hjT4i00DdOgYD4FvPaNAvXrdjLJDr56T', '', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.80 Safari/537.36 Edg/98.0.1108.50', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZ0ZTUktyTHlWeTNub1pFZjh2eWV4WXdVTzdnQkdXVnl3dWR3SXBuRSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', '1644918148', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('clBLN0eiWCQNmFVviJTumtNfwMcdoUafjYl4brs7', '', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.80 Safari/537.36 Edg/98.0.1108.50', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidHg4VFVqY25XbDlobHlzU3dkcDZoTGFieTAwNXlWazRjUlk4cmZHMSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', '1644944938', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('SBjjHa1c2euMQfeLA6RDgvE37izmeQg77pTdz2So', '', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.80 Safari/537.36 Edg/98.0.1108.50', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieG45YUFBQ1RCNFE0bUJmWWFQT1FWM3kzdHlVSWUza2k5d3JWUEVCeSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', '1644970027', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('id', 'created_at', 'updated_at', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('id', 'approved', 'role', 'role_id', 'name', 'email', 'email_verified_at', 'password', 'two_factor_secret', 'two_factor_recovery_codes', 'remember_token', 'current_team_id', 'profile_photo_path', 'department_id', 'department', 'office_id', 'office', 'div_unit_id', 'div_unit', 'created_at', 'updated_at', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1', 'active', 'user', '', 'ICT Admin', 'ictadmin@arta.gov.ph', '', '$2y$10$an0TT6shlIIQUvPpn3pfLuOdG/51Je2qUZi6pcXQ3Icl1.KisGAIa', '', '', '', '', '', '2', 'Office of the Deputy Director General for Administration & Finance (ODDGAF)', '2', 'Finance and Administrative Office (FAO)', '6', 'Information and Communications Technology Unit (ICTU)', '2021-10-15 12:49:24', '2022-02-09 09:43:15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('16', 'active', 'user', '', 'Reception User', 'receptionuser@arta.gov.ph', '', '$2y$10$QKi5ID/W.9G.VVMF1QfqLeS1grJbTNCxfdcJTpJ3KewGZdHJ8Zznq', '', '', '', '', '', '2', 'Office of the Deputy Director General for Administration & Finance (ODDGAF)', '2', 'Finance and Administrative Office (FAO)', '4', 'General Services Division (GSD)', '2022-01-11 06:52:44', '2022-02-07 08:20:12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('21', 'active', 'user', '', 'Unit Head', 'unithead@arta.gov.ph', '', '$2y$10$cqzkj9yWUoxkivHlL1hNbuMbha3oKniCobalSyKPh8Lp8LUUZgWbm', '', '', '', '', '', '2', 'Office of the Deputy Director General for Administration & Finance (ODDGAF)', '2', 'Finance and Administrative Office (FAO)', '4', 'General Services Division (GSD)', '2022-02-07 06:51:07', '2022-02-07 06:59:43', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('22', 'active', 'user', '', 'Director', 'director@arta.gov.ph', '', '$2y$10$vondWx8b8sFAKZGwhPGTzeT5IOPFfsBpOyA3rjOCqznmmuBTmznbi', '', '', '', '', '', '2', 'Office of the Deputy Director General for Administration & Finance (ODDGAF)', '2', 'Finance and Administrative Office (FAO)', '5', 'Human Resource Development Division (HRDD)', '2022-02-07 06:52:50', '2022-02-07 06:59:07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('23', 'active', 'user', '', 'DDG', 'ddg@arta.gov.ph', '', '$2y$10$0cNQ9zjEJr3C65dmSyljEuqxeMb9Xkry4Ae2ZM65pKmWNMy261uQK', '', '', '', '', '', '2', 'Office of the Deputy Director General for Administration & Finance (ODDGAF)', '2', 'Finance and Administrative Office (FAO)', '3', 'Finance Division', '2022-02-07 06:54:07', '2022-02-07 06:58:34', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('24', 'active', 'user', '', 'Record Officer', 'recordofficer@arta.gov.ph', '', '$2y$10$j2uwbGTXkNOjdh.piJsKbeuOwkmJ5Cy/bWOllxtnBIGV3esCLZSoq', '', '', '', '', '', '2', 'Office of the Deputy Director General for Administration & Finance (ODDGAF)', '2', 'Finance and Administrative Office (FAO)', '4', 'General Services Division (GSD)', '2022-02-07 07:53:49', '2022-02-07 08:21:29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('25', 'active', 'user', '', 'User', 'user@arta.gov.ph', '', '$2y$10$rPYoHrgBpKYw65Ck95KG..D4IS4e0ePDwmIVeiELGZsIgT2t0C1w6', '', '', '', '', '', '2', 'Office of the Deputy Director General for Administration & Finance (ODDGAF)', '2', 'Finance and Administrative Office (FAO)', '', 'General Services Division (GSD)', '2022-02-09 13:04:45', '2022-02-09 13:06:17', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `internals`
--

CREATE TABLE `internals` (
  `id` bigint UNSIGNED NOT NULL,
  `dts` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `in_route_id` int UNSIGNED DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Open',
  `department` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `div_unit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `personnel` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doc_class` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doc_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mode_of_trans` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_profile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_contact` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filename` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_received` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time_received` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by_user_id` int UNSIGNED DEFAULT NULL,
  `created_by_department` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by_office` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by_div_unit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `modified_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `modified_by_div_unit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `in_route`
--

CREATE TABLE `in_route` (
  `id` bigint UNSIGNED NOT NULL,
  `dts` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dts_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `internals_id` int UNSIGNED DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'New',
  `department` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department_id` bigint UNSIGNED DEFAULT NULL,
  `office` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office_id` bigint UNSIGNED DEFAULT NULL,
  `div_unit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `div_unit_id` bigint UNSIGNED DEFAULT NULL,
  `personnel` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `personnel_id` bigint UNSIGNED DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `action_req` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_upload` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sharepoint_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `outgoing` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note_comment_personnel` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `previous_comment` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note_comment_routed` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `assigned_date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `due_date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cc_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doc_class` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doc_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sent_date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sent_time` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `modeoftrans` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `routed_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `routed_by_div_unit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `modified_at` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `open_at` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_05_28_074221_create_sessions_table', 1),
(7, '2021_06_30_031423_create_dropdown_list_table', 1),
(8, '2021_07_05_122729_create_uploads_table', 1),
(9, '2021_08_23_204442_create_department_table', 2),
(10, '2021_08_23_205128_create_office_table', 2),
(11, '2021_08_23_205326_create_div_unit_table', 2),
(12, '2021_10_12_221312_create_ex_route_table', 2),
(13, '2021_10_15_142524_update_externals_table', 3),
(14, '2021_10_28_200826_add_columns_to_exroute_table', 4),
(15, '2021_11_05_083720_rename_action_in_ex_route_table', 5),
(16, '2021_11_16_193433_create_in_route_table', 6),
(17, '2021_11_18_140258_add_column_in_ex_route_table', 7),
(18, '2021_11_19_131937_add_columns', 8),
(19, '2021_11_24_094834_add_multiple_columns', 9),
(20, '2021_11_24_102258_add_column_in_user_table', 10),
(21, '2022_01_10_181640_create_permission_tables', 11),
(22, '2022_01_31_161221_add_multiple_column_to_ex_in_table', 12),
(23, '2022_02_23_171427_personnel_table', 13),
(24, '2022_02_24_155619_add_columns_ex_in_route_tables', 14),
(25, '2022_03_23_145201_add_column_tables', 15),
(26, '2022_03_21_111248_add_column_table', 16);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(6, 'App\\Models\\User', 1),
(1, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 8),
(7, 'App\\Models\\User', 11);

-- --------------------------------------------------------

--
-- Table structure for table `office`
--

CREATE TABLE `office` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `office`
--

INSERT INTO `office` (`id`, `name`, `slug`, `department_id`, `created_at`, `updated_at`) VALUES
(1, 'ODG - Personnel', 'ODG - Personnel', '1', NULL, NULL),
(2, 'Information and Public Relations Division', 'IPRD', '1', NULL, NULL),
(3, 'ODDGAF - Personnel', 'ODDGAF - Personnel', '2', NULL, NULL),
(4, 'Finance and Administrative Office', 'FAO', '2', NULL, NULL),
(5, 'Information and Communications Technology Unit', 'ICTU', '2', NULL, NULL),
(6, 'Planning Unit', 'PU', '2', NULL, NULL),
(7, 'ODDGL - Personnel', 'ODDGL - Personnel', '3', NULL, NULL),
(8, 'Investigation, Enforcement and Litigation Office', 'IELO', '3', NULL, NULL),
(9, 'Legal and Public Assistance Office', 'LPAO', '3', NULL, NULL),
(10, 'ODDGO - Personnel', 'ODDGO - Personnel', '4', NULL, NULL),
(11, 'Better Regulations Office', 'BRO', '4', NULL, NULL),
(12, 'Compliance Monitoring and Evaluation Office', 'CMEO', '4', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'role-list', 'web', '2022-02-15 09:02:20', '2022-02-15 09:02:20'),
(2, 'role-create', 'web', '2022-02-15 09:02:20', '2022-02-15 09:02:20'),
(3, 'role-edit', 'web', '2022-02-15 09:02:20', '2022-02-15 09:02:20'),
(4, 'role-delete', 'web', '2022-02-15 09:02:20', '2022-02-15 09:02:20'),
(5, 'user-list', 'web', '2022-02-15 09:02:21', '2022-02-15 09:02:21'),
(6, 'user-create', 'web', '2022-02-15 09:02:21', '2022-02-15 09:02:21'),
(7, 'user-edit', 'web', '2022-02-15 09:02:21', '2022-02-15 09:02:21'),
(8, 'user-delete', 'web', '2022-02-15 09:02:21', '2022-02-15 09:02:21'),
(9, 'department-status', 'web', '2022-02-15 09:23:23', '2022-02-15 09:23:23'),
(10, 'office-status', 'web', '2022-02-15 09:23:23', '2022-02-15 09:23:23'),
(11, 'div_unit-status', 'web', '2022-02-15 09:23:23', '2022-02-15 09:23:23'),
(12, 'dashboard-view', 'web', '2022-02-15 13:15:21', '2022-02-15 13:15:21'),
(13, 'sidebar-view', 'web', '2022-02-15 13:15:21', '2022-02-15 13:15:21'),
(14, 'guest-view', 'web', '2022-02-15 13:30:17', '2022-02-15 13:30:17'),
(15, 'user-view', 'web', '2022-02-16 06:41:43', '2022-02-16 06:41:43');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personnel`
--

CREATE TABLE `personnel` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `div_unit_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personnel`
--

INSERT INTO `personnel` (`id`, `name`, `slug`, `department_id`, `office_id`, `div_unit_id`, `created_at`, `updated_at`) VALUES
(1, 'ICT Super Admin', 'ictuadmin@arta.gov.ph', '1', '1', '6', '2022-02-23 09:18:43', '2022-02-23 09:18:43');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2022-02-15 09:02:49', '2022-02-15 09:02:49'),
(2, 'SuperAdmin', 'web', '2022-02-15 14:50:19', '2022-02-15 14:50:19'),
(6, 'User', 'web', '2022-03-01 01:10:44', '2022-03-01 01:10:44'),
(7, 'Director', 'web', '2022-03-01 01:14:54', '2022-03-01 01:14:54');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(3, 1),
(5, 1),
(7, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(15, 1),
(1, 2),
(2, 2),
(3, 2),
(4, 2),
(5, 2),
(6, 2),
(7, 2),
(8, 2),
(9, 2),
(10, 2),
(11, 2),
(12, 2),
(13, 2),
(15, 2),
(12, 6),
(13, 6),
(15, 6),
(10, 7),
(12, 7),
(13, 7),
(15, 7);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `payload` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('OCZfIZYWIiyLDNwZHEm10plf80LEtqhfqijWUBY3', 11, '10.20.29.32', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 Edg/131.0.0.0', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoibjVHN2RvYmlibHZmdVZrTkFyejRNajVzTjBDVHVsbmtsb002cWFLQyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly8xMC4yMC4yOS4zMi9kYXNoYm9hcmQiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxMTtzOjQ6ImF1dGgiO2E6MTp7czoyMToicGFzc3dvcmRfY29uZmlybWVkX2F0IjtpOjE3MzQyNzgzOTk7fXM6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkUWhiRnpSdGhONTVSdG12Z2k0c0lLdWV1MUFTb0xZOGZaVGJobGY4U3JMSXg3eExVb3VyMWUiO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJFFoYkZ6UnRoTjU1UnRtdmdpNHNJS3VldTFBU29MWThmWlRiaGxmOFNyTEl4N3hMVW91cjFlIjt9', 1734278567),
('Ri250hiIaoXN76gz9SIxMc0U1k4h4jIO2o821Xqq', 8, '10.20.29.32', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 Edg/131.0.0.0', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoieWxPQWtnajVRVmdWM3FycU0xdjJuNFpoZkZFR1NKVDRWNWhEZExOQiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly8xMC4yMC4yOS4zMi9maWxlcy9pdi8xIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6ODtzOjQ6ImF1dGgiO2E6MTp7czoyMToicGFzc3dvcmRfY29uZmlybWVkX2F0IjtpOjE3MzQyNzgwODA7fXM6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkSDNWOEFzYlB2dmhMUlh1SFN0YWcudVYwSGVRdHF0aktzQm9MSHh3SC4yYTdBcTc5ZmkvdEsiO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJEgzVjhBc2JQdnZoTFJYdUhTdGFnLnVWMEhlUXRxdGpLc0JvTEh4d0guMmE3QXE3OWZpL3RLIjt9', 1734278361);

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `approved` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `role` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `role_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint UNSIGNED DEFAULT NULL,
  `profile_photo_path` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `department_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `div_unit_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `div_unit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `approved`, `role`, `role_id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `department_id`, `department`, `office_id`, `office`, `div_unit_id`, `div_unit`, `created_at`, `updated_at`) VALUES
(1, 'active', 'user', '', 'User 1', 'user1@arta.gov.ph', NULL, '$2y$10$5R22tIy0R/Pwa3nkur65b.A7a4KW85ax4ZNrgIIILW9fGLCE8RJMS', NULL, NULL, NULL, NULL, NULL, '4', 'Office of the Deputy Director General for Operations (ODDGO)', '12', 'Compliance Monitoring and Evaluation Office (CMEO)', '47', 'Division A (CMED A)', '2022-02-15 08:40:58', '2024-12-15 15:38:54'),
(2, 'active', 'user', '', 'User Admin', 'marialorenignacio@gmail.com', NULL, '$2y$10$PaQNyhgWTjI8q4xftthuRe137E4/YLVXI8q/G8qMjytenl8Hp.Qzm', NULL, NULL, 'sGSURFIA5qCtPJRhg7TLCV7AcfS7YlXLhq3JrQ7wB3wBFBMI8s3e2nFBWRhi', NULL, NULL, '2', 'Office of the Deputy Director General for Administration & Finance (ODDGAF)', '2', 'Finance and Administrative Office (FAO)', '16', 'Information and Technology Officer (ITO)', '2022-02-15 09:02:49', '2024-12-14 22:32:38'),
(8, 'active', 'user', '', 'Maria Loren Ignacio', 'marialorenignacio@arta.gov.ph', NULL, '$2y$10$H3V8AsbPvvhLRXuHStag.uV0HeQtqtjKsBoLHxwH.2a7Aq79fi/tK', NULL, NULL, '3NqY0Rt8Iv2OqGswf6gRX8kN9kvjnfmdCSstNkfJ1YYk8yIkiZX3M5D36EWK', NULL, NULL, '4', 'Office of the Deputy Director General for Operations (ODDGO)', '11', 'Better Regulations Office (BRO)', '40', 'Sectoral Division C (BRO C)', '2022-03-02 18:06:10', '2024-12-14 22:27:11'),
(11, 'active', 'user', '', 'User Director', 'mlignacio.arta@gmail.com', NULL, '$2y$10$QhbFzRthN55Rtmvgi4sIKueu1ASoLY8fZTbhlf8SrLIx7xLUour1e', NULL, NULL, NULL, NULL, NULL, '4', 'Office of the Deputy Director General for Operations (ODDGO)', '11', 'Better Regulations Office (BRO)', '35', 'Office of the Director (BRO-OD)', '2024-12-14 22:34:11', '2024-12-15 15:58:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `div_unit`
--
ALTER TABLE `div_unit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doc_class`
--
ALTER TABLE `doc_class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doc_type`
--
ALTER TABLE `doc_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `externals`
--
ALTER TABLE `externals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ex_route`
--
ALTER TABLE `ex_route`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `internals`
--
ALTER TABLE `internals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `in_route`
--
ALTER TABLE `in_route`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `office`
--
ALTER TABLE `office`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `personnel`
--
ALTER TABLE `personnel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `div_unit`
--
ALTER TABLE `div_unit`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `doc_class`
--
ALTER TABLE `doc_class`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doc_type`
--
ALTER TABLE `doc_type`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `externals`
--
ALTER TABLE `externals`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ex_route`
--
ALTER TABLE `ex_route`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `internals`
--
ALTER TABLE `internals`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `in_route`
--
ALTER TABLE `in_route`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `office`
--
ALTER TABLE `office`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personnel`
--
ALTER TABLE `personnel`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
