-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 03, 2020 at 01:06 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `db_email`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_bil`
--

CREATE TABLE `tb_bil` (
  `b_id` int(11) NOT NULL,
  `b_email` varchar(255) NOT NULL,
  `b_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `b_price` varchar(255) NOT NULL,
  `b_status` varchar(255) NOT NULL,
  `b_par` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_bil`
--

INSERT INTO `tb_bil` (`b_id`, `b_email`, `b_time`, `b_price`, `b_status`, `b_par`) VALUES
(10, 'merchant@gmail.com', '2020-04-02 12:37:20', '0.0489', 'Paid', 'merchant@gmail.com'),
(29, 'merchant@gmail.com', '2020-04-03 03:08:22', '0.0489', 'Paid', 'merchant@gmail.com'),
(30, 'merchant@gmail.com', '2020-04-03 03:13:39', '0.0489', 'Paid', 'merchant@gmail.com'),
(31, 'merchant@gmail.com', '2020-04-03 04:15:39', '0.0489', 'Paid', 'merchant@gmail.com'),
(32, 'merchant@gmail.com', '2020-04-03 04:18:17', '0.0489', 'Paid', 'merchant@gmail.com'),
(33, 'merchant@gmail.com', '2020-04-03 04:25:14', '0.0489', 'Paid', 'merchant@gmail.com'),
(34, 'merchant@gmail.com', '2020-04-03 04:27:37', '0.0489', 'Paid', 'merchant@gmail.com'),
(35, 'merchant@gmail.com', '2020-04-03 04:43:27', '0.0489', 'Paid', 'merchant@gmail.com'),
(36, 'merchant@gmail.com', '2020-04-03 04:51:42', '0.0489', 'Paid', 'merchant@gmail.com'),
(37, 'merchant@gmail.com', '2020-04-03 04:52:00', '0.0489', 'Paid', 'merchant@gmail.com'),
(38, 'merchant@gmail.com', '2020-04-03 04:52:41', '0.0489', 'Paid', 'merchant@gmail.com'),
(39, 'merchant@gmail.com', '2020-04-03 05:00:10', '0.0489', 'Paid', 'merchant@gmail.com'),
(40, 'merchant@gmail.com', '2020-04-03 05:02:00', '0.0489', 'Paid', 'merchant@gmail.com'),
(41, 'merchant@gmail.com', '2020-04-03 05:03:48', '0.0489', 'Paid', 'merchant@gmail.com'),
(42, 'merchant@gmail.com', '2020-04-03 05:04:06', '0.0489', 'Paid', 'merchant@gmail.com'),
(43, 'merchant@gmail.com', '2020-04-03 05:04:22', '0.0489', 'Paid', 'merchant@gmail.com'),
(44, 'merchant@gmail.com', '2020-04-03 05:06:34', '0.0489', 'Paid', 'merchant@gmail.com'),
(45, 'merchant@gmail.com', '2020-04-03 05:14:00', '0.0489', 'Paid', 'merchant@gmail.com'),
(46, 'merchant@gmail.com', '2020-04-03 05:14:45', '0.0489', 'Paid', 'merchant@gmail.com'),
(47, 'merchant@gmail.com', '2020-04-03 05:19:49', '0.0489', 'Paid', 'merchant@gmail.com'),
(48, 'merchant@gmail.com', '2020-04-03 05:24:26', '0.0489', 'Paid', 'merchant@gmail.com'),
(49, 'merchant@gmail.com', '2020-04-03 05:24:48', '0.0489', 'Paid', 'merchant@gmail.com'),
(50, 'merchant@gmail.com', '2020-04-03 05:24:51', '0.0489', 'Paid', 'merchant@gmail.com'),
(51, 'merchant@gmail.com', '2020-04-03 05:25:04', '0.0489', 'Paid', 'merchant@gmail.com'),
(52, 'merchant@gmail.com', '2020-04-03 05:37:49', '0.0489', 'Paid', 'merchant@gmail.com'),
(53, 'merchant@gmail.com', '2020-04-03 05:39:02', '0.0489', 'Paid', 'merchant@gmail.com'),
(54, 'merchant@gmail.com', '2020-04-03 05:39:18', '0.0489', 'Paid', 'merchant@gmail.com'),
(55, 'merchant@gmail.com', '2020-04-03 05:39:38', '0.0489', 'Paid', 'merchant@gmail.com'),
(56, 'merchant@gmail.com', '2020-04-03 05:40:04', '0.0489', 'Paid', 'merchant@gmail.com'),
(57, 'merchant@gmail.com', '2020-04-03 05:42:47', '0.0489', 'Paid', 'merchant@gmail.com'),
(58, 'merchant@gmail.com', '2020-04-03 05:43:13', '0.0489', 'Paid', 'merchant@gmail.com'),
(59, 'merchant@gmail.com', '2020-04-03 05:43:41', '0.0489', 'Paid', 'merchant@gmail.com'),
(60, 'merchant@gmail.com', '2020-04-03 05:44:48', '0.0489', 'Paid', 'merchant@gmail.com'),
(61, 'merchant@gmail.com', '2020-04-03 05:45:33', '0.0489', 'Paid', 'merchant@gmail.com'),
(62, 'merchant@gmail.com', '2020-04-03 05:46:31', '0.0489', 'Paid', 'merchant@gmail.com'),
(63, 'merchant@gmail.com', '2020-04-03 05:47:24', '0.0489', 'Paid', 'merchant@gmail.com'),
(64, 'merchant@gmail.com', '2020-04-03 05:48:44', '0.0489', 'Paid', 'merchant@gmail.com'),
(65, 'merchant@gmail.com', '2020-04-03 05:49:01', '0.0489', 'Paid', 'merchant@gmail.com'),
(66, 'merchant@gmail.com', '2020-04-03 05:50:30', '0.0489', 'Paid', 'merchant@gmail.com'),
(67, 'merchant@gmail.com', '2020-04-03 05:50:53', '0.0489', 'Paid', 'merchant@gmail.com'),
(68, 'merchant@gmail.com', '2020-04-03 05:52:42', '0.0489', 'Paid', 'merchant@gmail.com'),
(69, 'merchant@gmail.com', '2020-04-03 05:55:28', '0.0489', 'Paid', 'merchant@gmail.com'),
(70, 'merchant@gmail.com', '2020-04-03 05:56:38', '0.0489', 'Paid', 'merchant@gmail.com'),
(71, 'merchant@gmail.com', '2020-04-03 05:57:52', '0.0489', 'Paid', 'merchant@gmail.com'),
(72, 'merchant@gmail.com', '2020-04-03 05:58:24', '0.0489', 'Paid', 'merchant@gmail.com'),
(73, 'merchant@gmail.com', '2020-04-03 05:59:52', '0.0489', 'Paid', 'merchant@gmail.com'),
(74, 'merchant@gmail.com', '2020-04-03 06:00:11', '0.0489', 'Paid', 'merchant@gmail.com'),
(75, 'merchant@gmail.com', '2020-04-03 06:00:20', '0.0489', 'Paid', 'merchant@gmail.com'),
(77, 'merchant@gmail.com', '2020-04-03 06:27:44', '0.0489', 'Paid', 'merchant@gmail.com'),
(78, 'merchant@gmail.com', '2020-04-03 06:29:35', '0.0489', 'Paid', 'merchant@gmail.com'),
(79, 'merchant@gmail.com', '2020-04-03 06:29:40', '0.0489', 'Paid', 'merchant@gmail.com'),
(81, 'merchant@gmail.com', '2020-04-03 08:03:16', '0.0489', 'Paid', 'merchant@gmail.com'),
(82, 'merchant@gmail.com', '2020-04-03 08:10:22', '0.0489', 'Paid', 'merchant@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_req`
--

CREATE TABLE `tb_req` (
  `r_id` int(11) NOT NULL,
  `r_to` varchar(255) NOT NULL,
  `r_from` varchar(255) NOT NULL,
  `r_cc` varchar(255) NOT NULL,
  `r_bcc` varchar(255) NOT NULL,
  `r_sub` varchar(255) NOT NULL,
  `r_body` text NOT NULL,
  `r_status` varchar(255) NOT NULL,
  `r_p` varchar(255) NOT NULL,
  `r_ref` varchar(255) NOT NULL,
  `r_web` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_req`
--

INSERT INTO `tb_req` (`r_id`, `r_to`, `r_from`, `r_cc`, `r_bcc`, `r_sub`, `r_body`, `r_status`, `r_p`, `r_ref`, `r_web`, `time`) VALUES
(91, '', 'merchant@gmail.com', 'a@gmail.com', 'b@gmail.com', '', 'e', 'processed', 'merchant@gmail.com', 'arZTUw', 'http://localhost:8888/php/merchant/pages/sendapi.php', '2020-04-03 06:29:35'),
(92, '', 'merchant@gmail.com', 'a@gmail.com', 'b@gmail.com', '', 'e', 'processed', 'merchant@gmail.com', 'GtdSmz', 'http://localhost:8888/php/merchant/pages/sendapi.php', '2020-04-03 06:29:40'),
(93, 'to@gmailcom', 'merchant@gmail.com', 'cc@gmail.com', 'ccb@gmail.com', 'dsaf', 'fasafsfsf', 'processed', 'merchant@gmail.com', 'fhNXS5', 'http://localhost:8888/php/merchant/pages/sendapi.php', '2020-04-03 07:01:11'),
(94, 'hi@gmail.com', 'merchant@gmail.com', 'c@gmail.com', 'usa@gmail.com', 'new subjectt', 'body is this', 'processed', 'merchant@gmail.com', 'W4mqR4', 'http://localhost:8888/php/merchant/pages/sendapi.php', '2020-04-03 08:03:16'),
(95, 'usama@gmail.com', 'merchant@gmail.com', '', '', 'ds', 'ds', 'processed', 'merchant@gmail.com', 'bRUirw', 'http://localhost:8888/php/merchant/pages/sendapi.php', '2020-04-03 08:10:22');

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `u_id` int(11) NOT NULL,
  `u_p` varchar(255) NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `u_phone` bigint(255) NOT NULL,
  `u_add` text NOT NULL,
  `u_role` varchar(255) NOT NULL,
  `u_resp` varchar(255) NOT NULL,
  `u_pass` varchar(255) NOT NULL,
  `u_bal` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`u_id`, `u_p`, `u_name`, `u_email`, `u_phone`, `u_add`, `u_role`, `u_resp`, `u_pass`, `u_bal`) VALUES
(1, '0', 'Admin', 'admin@admin.com', 3067687667, '                             	sadbhsf                             ', 'admin', 'all', '123', 500),
(18, 'merchant@gmail.com', 'Merchant', 'merchant@gmail.com', 304875633, 'main boluevard Lahore', 'merchant', 'all', '123', 46.1149),
(19, 'ahsan@gmail.com', 'Ahsan', 'ahsan@gmail.com', 432532535, 'nice chwl lahore kashmir', 'merchant', 'all', '123', 50),
(20, 'merchant@gmail.com', 'ali', 'ali@gmail.com', 34324325353, 'dsafsafnlsaf', 'sub', 'Payments', '123', 50),
(21, 'merchant@gmail.com', 's2', 's2@gmail.com', 334432424, 'usama', 'sub', 'Request & Payments', '123', 50),
(22, 'er@gmail.com', 'Usama', 'er@gmail.com', 32142141204, 'dsaf', 'merchant', 'all', '123', 50),
(23, 'admin@admin.com', 'se', 'SE@GMAIL.COM', 324214212, 'adsafsafsaf', 'sub', 'All', '123', 50);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_bil`
--
ALTER TABLE `tb_bil`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `tb_req`
--
ALTER TABLE `tb_req`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_bil`
--
ALTER TABLE `tb_bil`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `tb_req`
--
ALTER TABLE `tb_req`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
