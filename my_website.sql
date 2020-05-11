-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2020 at 09:03 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `pk` int(11) NOT NULL,
  `ex_date` date NOT NULL,
  `ex_type` varchar(50) NOT NULL,
  `ex_note` varchar(200) CHARACTER SET armscii8 NOT NULL,
  `ex_amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`pk`, `ex_date`, `ex_type`, `ex_note`, `ex_amount`) VALUES
(1, '2020-05-30', '', 'me', 1234),
(2, '2020-05-09', '1', 'me', 1234),
(3, '2020-05-01', '1', 'me', 1234),
(4, '2020-05-06', '1', 'me', 1234),
(5, '2020-05-01', '1', 'me', 1234),
(6, '2020-05-14', '1', 'me', 1234),
(7, '2020-05-14', '1', 'me', 1234),
(8, '2020-05-06', '1', 'me', 1234),
(9, '2020-05-19', '1', 'me', 1234),
(10, '2020-05-05', '1', 'me', 123),
(11, '2020-05-21', '1', 'me', 123),
(12, '2020-05-20', '1', 'me', 1234),
(13, '2020-05-23', '1', 'me', 1234),
(14, '2020-05-23', '1', 'me', 1234),
(15, '2020-05-15', '1', 'love', 1235),
(16, '2020-05-27', '1', 'me', 123),
(17, '2020-05-21', '1', 'me', 1234),
(18, '2020-05-21', '1', 'me', 1234),
(19, '2020-05-07', '1', 'me', 12),
(20, '2020-05-08', 'การออม&การลงทุน', 'me', 1234),
(21, '2020-05-14', 'การออม&การลงทุน', 'me', 1234),
(22, '2020-05-09', 'การออม&การลงทุน', 'me', 1234);

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE `income` (
  `seq` int(11) NOT NULL,
  `in_date` date NOT NULL,
  `in_amount` int(50) NOT NULL,
  `in_type` varchar(50) NOT NULL,
  `in_note` varchar(200) CHARACTER SET armscii8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `income`
--

INSERT INTO `income` (`seq`, `in_date`, `in_amount`, `in_type`, `in_note`) VALUES
(2, '2020-04-10', 122222, 'เงินเดือน', 'love'),
(4, '2020-05-04', 1234, 'เงินเดือน', 'love'),
(5, '2020-05-01', 1234, 'เงินเดือน', 'love'),
(6, '2020-05-04', 1234, 'เงินเดือน', 'love'),
(7, '2020-05-04', 1234, 'เงินเดือน', 'love'),
(8, '2020-05-04', 1234, 'เงินเดือน', 'love'),
(9, '2020-05-04', 1234, 'เงินเดือน', 'love'),
(10, '2020-05-04', 1234, 'เงินเดือน', 'love'),
(11, '2020-05-04', 1234, 'เงินเดือน', 'love'),
(12, '2020-05-04', 1234, 'เงินเดือน', 'love'),
(13, '2020-05-06', 1234, 'เงินเดือน', 'love'),
(14, '2020-05-14', 3, 'เลือกประเภท', 'love'),
(16, '2020-05-14', 3, 'เงินเดือน', 'love'),
(17, '2020-05-14', 1, 'เงินเดือน', 'love'),
(18, '2020-05-13', 1, 'เงินเดือน', 'love'),
(19, '2020-05-14', 100000, 'เงินเดือน', 'love'),
(20, '2020-05-08', 70000000, 'ดอกเบี้ย', 'love'),
(21, '2020-05-02', 1234, 'เงินเดือน', 'love'),
(22, '2020-04-30', 1234, 'เงินเดือน', 'love'),
(23, '2020-05-27', 1234, 'เงินเดือน', 'love'),
(24, '2020-05-21', 1234, 'เงินเดือน', 'love'),
(25, '2020-05-19', 1234, 'เงินเดือน', 'me'),
(26, '2020-05-10', 1234, 'เงินเดือน', 'love'),
(27, '2020-05-04', 1234, 'เงินเดือน', 'love');

-- --------------------------------------------------------

--
-- Table structure for table `planning`
--

CREATE TABLE `planning` (
  `private` int(30) NOT NULL COMMENT 'ส่วนตัว',
  `month` int(30) NOT NULL,
  `another` int(30) NOT NULL COMMENT 'อื่นๆ',
  `plan_id` int(12) NOT NULL,
  `savings` int(20) NOT NULL COMMENT 'การออมและการลงทุน',
  `utility` int(20) NOT NULL COMMENT 'สาธารณูปโภค',
  `family` int(30) NOT NULL COMMENT 'ครอบครัว',
  `recreation` int(30) NOT NULL COMMENT 'สัทนาการ',
  `debt` int(30) NOT NULL COMMENT 'หนี้สิน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `useraccount`
--

CREATE TABLE `useraccount` (
  `user_id` int(5) NOT NULL,
  `user_name` varchar(12) NOT NULL COMMENT 'ชื่อผู้ใช้งาน',
  `user_pass` varchar(10) NOT NULL COMMENT 'รหัสผ่าน',
  `user_email` varchar(30) NOT NULL COMMENT 'อีเมลล์',
  `user_fname` varchar(30) NOT NULL COMMENT 'ชื่อ',
  `user_sname` varchar(30) NOT NULL COMMENT 'นามสกุล',
  `user_gen` varchar(10) NOT NULL COMMENT 'เพศ',
  `user_bd` int(10) NOT NULL COMMENT 'วันเกิด',
  `Plan_id` int(5) NOT NULL,
  `Save_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `useraccount`
--

INSERT INTO `useraccount` (`user_id`, `user_name`, `user_pass`, `user_email`, `user_fname`, `user_sname`, `user_gen`, `user_bd`, `Plan_id`, `Save_id`) VALUES
(1, 't', '1', '', 't', 't', '', 0, 0, 0),
(2, 't', '1', '', 't', 't', '', 0, 0, 0),
(3, 't', 'ๅ/-ภ', 'oil_foy@hotmail.com', 'สุกัญญา', 'สังศักดิ์', '', 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`pk`);

--
-- Indexes for table `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`seq`);

--
-- Indexes for table `planning`
--
ALTER TABLE `planning`
  ADD PRIMARY KEY (`plan_id`);

--
-- Indexes for table `useraccount`
--
ALTER TABLE `useraccount`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `income`
--
ALTER TABLE `income`
  MODIFY `seq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `useraccount`
--
ALTER TABLE `useraccount`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
