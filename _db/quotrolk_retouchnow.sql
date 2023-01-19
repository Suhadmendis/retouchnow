-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 09, 2022 at 11:10 PM
-- Server version: 10.3.36-MariaDB-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quotrolk_retouchnow`
--

-- --------------------------------------------------------

--
-- Table structure for table `doc`
--

CREATE TABLE `doc` (
  `docid` bigint(20) DEFAULT NULL,
  `docname` varchar(100) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `grp` varchar(30) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `icon_class` varchar(90) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `doc`
--

INSERT INTO `doc` (`docid`, `docname`, `name`, `grp`, `id`, `icon_class`) VALUES
(2, 'Create User', 'new_user', 'Administration', 62, 'fa fa-cogs'),
(1, 'Change Password', 'change_password', 'Administration', 63, 'fa fa-cogs'),
(3, 'Manage Permission', 'user_p', 'Administration', 64, 'fa fa-cogs');

-- --------------------------------------------------------

--
-- Table structure for table `invpara`
--

CREATE TABLE `invpara` (
  `COMCODE` varchar(10) DEFAULT NULL,
  `LOCODE` varchar(10) DEFAULT NULL,
  `COMPANY` varchar(50) DEFAULT NULL,
  `ADD1` varchar(50) DEFAULT NULL,
  `ADD2` varchar(50) DEFAULT NULL,
  `ADD3` varchar(50) DEFAULT NULL,
  `TELE` varchar(50) DEFAULT NULL,
  `FAX` varchar(50) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `cleaner_master_code` int(11) DEFAULT NULL,
  `vahical_code` int(11) DEFAULT NULL,
  `item_master_file_code` int(11) DEFAULT NULL,
  `driver_master_file_code` int(11) DEFAULT NULL,
  `trip_ref` int(11) DEFAULT NULL,
  `expense` int(11) DEFAULT NULL,
  `fuel` int(11) DEFAULT NULL,
  `loan_code` int(11) DEFAULT NULL,
  `od_ref_code` int(11) DEFAULT NULL,
  `deduction_code` int(11) DEFAULT NULL,
  `advance_code` int(11) DEFAULT NULL,
  `pay_code` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `m_category`
--

CREATE TABLE `m_category` (
  `id` int(12) NOT NULL,
  `REF` varchar(50) DEFAULT NULL,
  `name` varchar(70) DEFAULT NULL,
  `feature_1` varchar(50) DEFAULT NULL,
  `feature_2` varchar(50) DEFAULT NULL,
  `feature_3` varchar(50) DEFAULT NULL,
  `feature_4` varchar(50) DEFAULT NULL,
  `feature_5` varchar(50) DEFAULT NULL,
  `feature_6` varchar(50) DEFAULT NULL,
  `feature_7` varchar(50) DEFAULT NULL,
  `feature_8` varchar(50) DEFAULT NULL,
  `feature_9` varchar(50) DEFAULT NULL,
  `sys_time` timestamp NULL DEFAULT current_timestamp(),
  `cost` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `m_category`
--

INSERT INTO `m_category` (`id`, `REF`, `name`, `feature_1`, `feature_2`, `feature_3`, `feature_4`, `feature_5`, `feature_6`, `feature_7`, `feature_8`, `feature_9`, `sys_time`, `cost`) VALUES
(52, 'CAT/0001', 'Base Retouch', 'feature_1', 'feature_1', 'feature_1', 'feature_1', 'feature_1', 'feature_1', 'feature_1', 'feature_1', 'feature_1', '2021-10-15 23:42:37', '12.00'),
(53, 'CAT/0002', 'Advanced Retouch', 'feature_1', 'feature_1', 'feature_1', 'feature_1', 'feature_1', 'feature_1', 'feature_1', 'feature_1', 'feature_1', '2021-10-15 23:42:39', '23.00');

-- --------------------------------------------------------

--
-- Table structure for table `m_order`
--

CREATE TABLE `m_order` (
  `id` int(11) NOT NULL,
  `REF` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `reg_ref` varchar(50) DEFAULT NULL,
  `reg_name` varchar(100) DEFAULT NULL,
  `sub_tot` decimal(10,2) DEFAULT NULL,
  `tot` decimal(10,2) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `cancel` varchar(1) DEFAULT '0',
  `sys_time` timestamp NULL DEFAULT current_timestamp(),
  `user` varchar(50) DEFAULT NULL,
  `uniq` varchar(100) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `m_order`
--

INSERT INTO `m_order` (`id`, `REF`, `date`, `reg_ref`, `reg_name`, `sub_tot`, `tot`, `status`, `cancel`, `sys_time`, `user`, `uniq`, `name`) VALUES
(109, 'JOB/0000000007', '2021-10-16', 'REG/0000001', 'admin', NULL, '12.00', 'Delivered', '0', '2021-10-16 22:24:46', NULL, NULL, 'Name 1'),
(110, 'JOB/0000000008', '2021-10-16', 'REG/0000001', 'admin', NULL, '12.00', 'Delivered', '0', '2021-10-16 22:26:54', NULL, NULL, 'Name 2'),
(111, 'JOB/0000000009', '2021-10-16', 'REG/0000001', 'admin', NULL, '46.00', 'Delivered', '0', '2021-10-16 22:30:19', NULL, NULL, 'Name 3'),
(112, 'JOB/0000000010', '2021-10-18', 'REG/0000001', 'admin', NULL, '35.00', 'Delivered', '0', '2021-10-17 21:19:07', NULL, NULL, 'aa'),
(113, 'JOB/0000000011', '2021-11-14', '', '', NULL, '0.00', 'Delivered', '0', '2021-11-13 21:17:29', NULL, NULL, ''),
(114, 'JOB/0000000012', '2021-11-14', '', '', NULL, '0.00', 'Delivered', '0', '2021-11-13 21:17:42', NULL, NULL, ''),
(115, 'JOB/0000000013', '2021-11-21', 'REG/0000000008', 'Suhad', NULL, '12.00', 'Delivered', '0', '2021-11-20 19:02:03', NULL, NULL, ''),
(116, 'JOB/0000000014', '2021-11-21', 'REG/0000000008', 'Suhad', NULL, '35.00', 'Delivered', '0', '2021-11-20 19:06:04', NULL, NULL, 'first job'),
(117, 'JOB/0000000015', '2022-03-06', 'REG/0000000001', 'thimuthu', NULL, '12.00', 'Delivered', '0', '2022-03-06 12:49:32', NULL, NULL, ''),
(118, 'JOB/0000000016', '2022-03-06', 'REG/0000000001', 'thimuthu', NULL, '12.00', 'Delivered', '0', '2022-03-06 12:49:35', NULL, NULL, ''),
(119, 'JOB/0000000017', '2022-03-06', 'REG/0000000001', 'thimuthu', NULL, '12.00', 'Delivered', '0', '2022-03-06 12:49:38', NULL, NULL, ''),
(120, 'JOB/0000000018', '2022-03-06', 'REG/0000000001', 'thimuthu', NULL, '12.00', 'Delivered', '0', '2022-03-06 12:49:41', NULL, NULL, ''),
(121, 'JOB/0000000019', '2022-03-06', 'REG/0000000001', 'thimuthu', NULL, '23.00', 'Delivered', '0', '2022-03-06 12:50:19', NULL, NULL, 'akila');

-- --------------------------------------------------------

--
-- Table structure for table `m_order_detail`
--

CREATE TABLE `m_order_detail` (
  `id` int(11) NOT NULL,
  `REF` varchar(255) DEFAULT NULL,
  `category_ref` varchar(255) DEFAULT NULL,
  `cost` decimal(12,2) DEFAULT NULL,
  `sys_time` timestamp NULL DEFAULT current_timestamp(),
  `user` varchar(50) DEFAULT NULL,
  `uniq` varchar(100) DEFAULT NULL,
  `remark` varchar(1000) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `m_order_detail`
--

INSERT INTO `m_order_detail` (`id`, `REF`, `category_ref`, `cost`, `sys_time`, `user`, `uniq`, `remark`, `status`) VALUES
(49, 'JOB/0000000007', 'CAT/0001', '12.00', '2021-10-16 22:24:46', NULL, NULL, '', 'Delivered'),
(50, 'JOB/0000000008', 'CAT/0001', '12.00', '2021-10-16 22:26:55', NULL, NULL, 'gdfgdfg', 'Delivered'),
(51, 'JOB/0000000009', 'CAT/0002', '23.00', '2021-10-16 22:30:20', NULL, NULL, 'gdfgdfg', 'Delivered'),
(52, 'JOB/0000000009', 'CAT/0002', '23.00', '2021-10-16 22:30:20', NULL, NULL, 'gdfgdfg', 'Delivered'),
(53, 'JOB/0000000010', 'CAT/0001', '12.00', '2021-10-17 21:19:07', NULL, NULL, 'hello', 'Delivered'),
(54, 'JOB/0000000010', 'CAT/0002', '23.00', '2021-10-17 21:19:07', NULL, NULL, 'hi', 'Delivered'),
(55, 'JOB/0000000013', 'CAT/0001', '12.00', '2021-11-20 19:02:03', NULL, NULL, '', 'Delivered'),
(56, 'JOB/0000000014', 'CAT/0002', '23.00', '2021-11-20 19:06:04', NULL, NULL, 'fdsf', 'Delivered'),
(57, 'JOB/0000000014', 'CAT/0001', '12.00', '2021-11-20 19:06:04', NULL, NULL, 'fsdfg', 'Delivered'),
(58, 'JOB/0000000015', 'CAT/0001', '12.00', '2022-03-06 12:49:33', NULL, NULL, 'fdsfsdf', 'Delivered'),
(59, 'JOB/0000000016', 'CAT/0001', '12.00', '2022-03-06 12:49:35', NULL, NULL, 'fdsfsdf', 'Delivered'),
(60, 'JOB/0000000017', 'CAT/0001', '12.00', '2022-03-06 12:49:38', NULL, NULL, 'fdsfsdf', 'Delivered'),
(61, 'JOB/0000000018', 'CAT/0001', '12.00', '2022-03-06 12:49:41', NULL, NULL, 'fdsfsdf', 'Delivered'),
(62, 'JOB/0000000019', 'CAT/0002', '23.00', '2022-03-06 12:50:19', NULL, NULL, 'fsdfgsdfg', 'Delivered');

-- --------------------------------------------------------

--
-- Table structure for table `m_payment`
--

CREATE TABLE `m_payment` (
  `id` int(12) NOT NULL,
  `REF` varchar(50) DEFAULT NULL,
  `reg_ref` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `amount` decimal(12,2) DEFAULT NULL,
  `cancel` varchar(1) DEFAULT '0',
  `user` varchar(50) DEFAULT NULL,
  `sys_time` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `m_registration`
--

CREATE TABLE `m_registration` (
  `id` int(12) NOT NULL,
  `REF` varchar(50) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `address_1` varchar(100) DEFAULT NULL,
  `address_2` varchar(100) DEFAULT NULL,
  `tel_1` varchar(50) DEFAULT NULL,
  `tel_2` varchar(50) DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `remark` varchar(300) DEFAULT NULL,
  `joineddate` date DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `loc_lat` varchar(20) DEFAULT NULL,
  `loc_lng` varchar(20) DEFAULT NULL,
  `active` varchar(1) DEFAULT '0',
  `black_list` varchar(1) DEFAULT '0',
  `status` varchar(1) DEFAULT '0',
  `approve` varchar(1) DEFAULT '0',
  `platform` varchar(15) DEFAULT NULL,
  `user` varchar(50) DEFAULT NULL,
  `sys_time` timestamp NULL DEFAULT current_timestamp(),
  `token` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `m_registration`
--

INSERT INTO `m_registration` (`id`, `REF`, `first_name`, `last_name`, `address_1`, `address_2`, `tel_1`, `tel_2`, `sex`, `dob`, `email`, `password`, `remark`, `joineddate`, `type`, `loc_lat`, `loc_lng`, `active`, `black_list`, `status`, `approve`, `platform`, `user`, `sys_time`, `token`) VALUES
(119, 'REG/0000001', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', '123', NULL, NULL, NULL, NULL, NULL, '0', '0', '0', '0', NULL, NULL, '2021-10-15 22:55:58', NULL),
(120, 'REG/0000000001', 'thimuthu', 'weragoda', NULL, NULL, NULL, NULL, NULL, NULL, 'thim@gmail.com', '123', NULL, NULL, NULL, NULL, NULL, '0', '0', '0', '0', NULL, NULL, '2021-11-20 18:27:52', NULL),
(121, 'REG/0000000002', 'Suhad', 'Mendis', NULL, NULL, NULL, NULL, NULL, NULL, 'suhad.a.mendis@gmail.com', '123', NULL, NULL, NULL, NULL, NULL, '0', '0', '0', '0', NULL, NULL, '2021-11-20 18:30:01', NULL),
(122, 'REG/0000000003', 'Suhad', 'Mendis', NULL, NULL, NULL, NULL, NULL, NULL, 'suhad.a.mendis@gmail.com', '123', NULL, NULL, NULL, NULL, NULL, '0', '0', '0', '0', NULL, NULL, '2021-11-20 18:30:04', NULL),
(123, 'REG/0000000004', 'Suhad', 'Mendis', NULL, NULL, NULL, NULL, NULL, NULL, 'suhad.a.mendis@gmail.com', '123', NULL, NULL, NULL, NULL, NULL, '0', '0', '0', '0', NULL, NULL, '2021-11-20 18:30:20', NULL),
(124, 'REG/0000000005', 'Suhad', 'Mendis', NULL, NULL, NULL, NULL, NULL, NULL, 'suhad.a.mendis@gmail.com', '123', NULL, NULL, NULL, NULL, NULL, '0', '0', '0', '0', NULL, NULL, '2021-11-20 18:30:22', NULL),
(125, 'REG/0000000006', 'hello', 'hello', NULL, NULL, NULL, NULL, NULL, NULL, 'hello@gmailcio', 'gnfsdgs', NULL, NULL, NULL, NULL, NULL, '0', '0', '0', '0', NULL, NULL, '2021-11-20 18:35:50', NULL),
(126, 'REG/0000000007', 'Suhad', 'Mendis', NULL, NULL, NULL, NULL, NULL, NULL, 'suhad.a.mendis@gmail.com', '1', NULL, NULL, NULL, NULL, NULL, '0', '0', '0', '0', NULL, NULL, '2021-11-20 18:42:05', NULL),
(127, 'REG/0000000008', 'Suhad', 'Mendis', NULL, NULL, NULL, NULL, NULL, NULL, 'suhad.a.mendis@gmail.com', '1234', NULL, NULL, NULL, NULL, NULL, '0', '0', '0', '0', NULL, NULL, '2021-11-20 18:43:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sys_entry`
--

CREATE TABLE `sys_entry` (
  `id` int(11) NOT NULL,
  `entry` varchar(50) DEFAULT NULL,
  `url` varchar(50) DEFAULT NULL,
  `des` varchar(50) DEFAULT NULL,
  `super` varchar(50) DEFAULT NULL,
  `main` varchar(50) DEFAULT NULL,
  `sub` varchar(50) DEFAULT NULL,
  `class_1` varchar(50) DEFAULT NULL,
  `class_2` varchar(50) DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  `block` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `sys_info`
--

CREATE TABLE `sys_info` (
  `id` int(11) NOT NULL,
  `COM_NAME` varchar(100) DEFAULT NULL,
  `COM_EMAIL` varchar(50) DEFAULT NULL,
  `COM_ADD1` varchar(100) DEFAULT NULL,
  `COM_ADD2` varchar(100) DEFAULT NULL,
  `COM_TEL1` varchar(50) DEFAULT NULL,
  `COM_TEL2` varchar(50) DEFAULT NULL,
  `COM_FAX` varchar(50) DEFAULT NULL,
  `payment_ref` int(12) DEFAULT NULL,
  `store_ref` int(12) DEFAULT NULL,
  `item_ref` int(12) DEFAULT NULL,
  `category_ref` int(12) DEFAULT NULL,
  `registration_ref` int(12) DEFAULT NULL,
  `order_ref` int(12) DEFAULT NULL,
  `cart_ref` int(12) DEFAULT NULL,
  `sub_order_ref` int(12) DEFAULT NULL,
  `reg_ref` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `sys_info`
--

INSERT INTO `sys_info` (`id`, `COM_NAME`, `COM_EMAIL`, `COM_ADD1`, `COM_ADD2`, `COM_TEL1`, `COM_TEL2`, `COM_FAX`, `payment_ref`, `store_ref`, `item_ref`, `category_ref`, `registration_ref`, `order_ref`, `cart_ref`, `sub_order_ref`, `reg_ref`) VALUES
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 1, 20, 1, 1, 9);

-- --------------------------------------------------------

--
-- Table structure for table `sys_log`
--

CREATE TABLE `sys_log` (
  `id` bigint(20) NOT NULL,
  `REF` varchar(50) DEFAULT NULL,
  `entry` varchar(100) DEFAULT NULL,
  `operation` varchar(100) DEFAULT NULL,
  `sys_time` timestamp NULL DEFAULT current_timestamp(),
  `user` varchar(50) DEFAULT NULL,
  `ip` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `sys_log`
--

INSERT INTO `sys_log` (`id`, `REF`, `entry`, `operation`, `sys_time`, `user`, `ip`) VALUES
(16472, 'JOB/0000000001', 'entry', 'SAVE Product', '2021-10-16 22:11:29', 'User Name', 'ip'),
(16473, 'JOB/0000000002', 'entry', 'SAVE Product', '2021-10-16 22:12:06', 'User Name', 'ip'),
(16474, 'JOB/0000000003', 'entry', 'SAVE Product', '2021-10-16 22:12:28', 'User Name', 'ip'),
(16475, 'JOB/0000000004', 'entry', 'SAVE Product', '2021-10-16 22:12:53', 'User Name', 'ip'),
(16476, 'JOB/0000000005', 'entry', 'SAVE Product', '2021-10-16 22:13:20', 'User Name', 'ip'),
(16477, 'JOB/0000000006', 'entry', 'SAVE Product', '2021-10-16 22:22:19', 'User Name', 'ip'),
(16478, 'JOB/0000000007', 'entry', 'SAVE Product', '2021-10-16 22:24:46', 'User Name', 'ip'),
(16479, 'JOB/0000000008', 'entry', 'SAVE Product', '2021-10-16 22:26:55', 'User Name', 'ip'),
(16480, 'JOB/0000000009', 'entry', 'SAVE Product', '2021-10-16 22:30:21', 'User Name', 'ip'),
(16481, 'JOB/0000000010', 'entry', 'SAVE Product', '2021-10-17 21:19:07', 'User Name', 'ip'),
(16482, 'JOB/0000000011', 'entry', 'SAVE Product', '2021-11-13 21:17:29', 'User Name', 'ip'),
(16483, 'JOB/0000000012', 'entry', 'SAVE Product', '2021-11-13 21:17:42', 'User Name', 'ip'),
(16484, 'REG/0000000001', 'entry', 'SAVE Client', '2021-11-20 18:27:52', 'User Name', 'ip'),
(16485, 'REG/0000000002', 'entry', 'SAVE Client', '2021-11-20 18:30:02', 'User Name', 'ip'),
(16486, 'REG/0000000003', 'entry', 'SAVE Client', '2021-11-20 18:30:04', 'User Name', 'ip'),
(16487, 'REG/0000000004', 'entry', 'SAVE Client', '2021-11-20 18:30:20', 'User Name', 'ip'),
(16488, 'REG/0000000005', 'entry', 'SAVE Client', '2021-11-20 18:30:22', 'User Name', 'ip'),
(16489, 'REG/0000000006', 'entry', 'SAVE Client', '2021-11-20 18:35:51', 'User Name', 'ip'),
(16490, 'REG/0000000007', 'entry', 'SAVE Client', '2021-11-20 18:42:06', 'User Name', 'ip'),
(16491, 'REG/0000000008', 'entry', 'SAVE Client', '2021-11-20 18:43:34', 'User Name', 'ip'),
(16492, 'JOB/0000000013', 'entry', 'SAVE Product', '2021-11-20 19:02:04', 'User Name', 'ip'),
(16493, 'JOB/0000000014', 'entry', 'SAVE Product', '2021-11-20 19:06:05', 'User Name', 'ip'),
(16494, 'JOB/0000000015', 'entry', 'SAVE Product', '2022-03-06 12:49:33', 'User Name', 'ip'),
(16495, 'JOB/0000000016', 'entry', 'SAVE Product', '2022-03-06 12:49:36', 'User Name', 'ip'),
(16496, 'JOB/0000000017', 'entry', 'SAVE Product', '2022-03-06 12:49:39', 'User Name', 'ip'),
(16497, 'JOB/0000000018', 'entry', 'SAVE Product', '2022-03-06 12:49:41', 'User Name', 'ip'),
(16498, 'JOB/0000000019', 'entry', 'SAVE Product', '2022-03-06 12:50:20', 'User Name', 'ip');

-- --------------------------------------------------------

--
-- Table structure for table `userpermission`
--

CREATE TABLE `userpermission` (
  `id` bigint(20) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL,
  `userpass` varchar(50) DEFAULT NULL,
  `grp` varchar(50) DEFAULT NULL,
  `docid` bigint(20) DEFAULT 0,
  `doc_view` smallint(6) DEFAULT 0,
  `doc_feed` smallint(6) DEFAULT 0,
  `doc_mod` smallint(6) DEFAULT 0,
  `price_edit` smallint(6) DEFAULT 0,
  `admin` smallint(6) DEFAULT 0,
  `dev` smallint(6) DEFAULT 0,
  `doc_print` smallint(6) DEFAULT 0,
  `comcode` varchar(1) DEFAULT '0',
  `comname` varchar(1) DEFAULT '0',
  `sal_ex` varchar(100) DEFAULT NULL,
  `logdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `userpermission`
--

INSERT INTO `userpermission` (`id`, `username`, `userpass`, `grp`, `docid`, `doc_view`, `doc_feed`, `doc_mod`, `price_edit`, `admin`, `dev`, `doc_print`, `comcode`, `comname`, `sal_ex`, `logdate`) VALUES
(NULL, 'akila', '', 'Administration', 1, 1, 0, 0, 0, 0, 0, 0, '0', '0', NULL, NULL),
(NULL, 'akila', '', 'Administration', 2, 1, 0, 0, 0, 0, 0, 0, '0', '0', NULL, NULL),
(NULL, 'akila', '', 'Administration', 3, 1, 0, 0, 0, 0, 0, 0, '0', '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_mast`
--

CREATE TABLE `user_mast` (
  `user_name` varchar(20) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `user_type` varchar(40) DEFAULT NULL,
  `user_depart` varchar(20) DEFAULT NULL,
  `U_email` varchar(50) DEFAULT NULL,
  `R_email` varchar(100) DEFAULT NULL,
  `user_level` varchar(20) DEFAULT '0',
  `dev` varchar(20) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `user_mast`
--

INSERT INTO `user_mast` (`user_name`, `password`, `user_type`, `user_depart`, `U_email`, `R_email`, `user_level`, `dev`) VALUES
('akila', '123', NULL, NULL, NULL, NULL, '0', '0');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_menu`
-- (See below for the actual view)
--
CREATE TABLE `view_menu` (
`docid` bigint(20)
,`docname` varchar(100)
,`name` varchar(30)
,`grp` varchar(30)
,`username` varchar(200)
,`doc_view` smallint(6)
,`doc_feed` smallint(6)
,`doc_mod` smallint(6)
,`price_edit` smallint(6)
,`admin` smallint(6)
,`doc_print` smallint(6)
,`icon_class` varchar(90)
);

-- --------------------------------------------------------

--
-- Structure for view `view_menu`
--
DROP TABLE IF EXISTS `view_menu`;

CREATE ALGORITHM=UNDEFINED DEFINER=`quotrolk`@`localhost` SQL SECURITY DEFINER VIEW `view_menu`  AS SELECT `doc`.`docid` AS `docid`, `doc`.`docname` AS `docname`, `doc`.`name` AS `name`, `doc`.`grp` AS `grp`, `userpermission`.`username` AS `username`, `userpermission`.`doc_view` AS `doc_view`, `userpermission`.`doc_feed` AS `doc_feed`, `userpermission`.`doc_mod` AS `doc_mod`, `userpermission`.`price_edit` AS `price_edit`, `userpermission`.`admin` AS `admin`, `userpermission`.`doc_print` AS `doc_print`, `doc`.`icon_class` AS `icon_class` FROM (`doc` join `userpermission` on(`doc`.`docid` = `userpermission`.`docid`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doc`
--
ALTER TABLE `doc`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `doc` (`docid`,`grp`) USING BTREE;

--
-- Indexes for table `m_category`
--
ALTER TABLE `m_category`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `m_order`
--
ALTER TABLE `m_order`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `m_order_detail`
--
ALTER TABLE `m_order_detail`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `m_payment`
--
ALTER TABLE `m_payment`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `m_registration`
--
ALTER TABLE `m_registration`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `sys_entry`
--
ALTER TABLE `sys_entry`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `sys_info`
--
ALTER TABLE `sys_info`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `sys_log`
--
ALTER TABLE `sys_log`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `userpermission`
--
ALTER TABLE `userpermission`
  ADD KEY `userpermission` (`username`,`grp`,`docid`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doc`
--
ALTER TABLE `doc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT for table `m_category`
--
ALTER TABLE `m_category`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `m_order`
--
ALTER TABLE `m_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `m_order_detail`
--
ALTER TABLE `m_order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `m_payment`
--
ALTER TABLE `m_payment`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `m_registration`
--
ALTER TABLE `m_registration`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `sys_entry`
--
ALTER TABLE `sys_entry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sys_info`
--
ALTER TABLE `sys_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sys_log`
--
ALTER TABLE `sys_log`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16499;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
