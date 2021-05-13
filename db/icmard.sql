-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 13, 2021 at 10:45 AM
-- Server version: 5.7.34-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `icmard`
--

-- --------------------------------------------------------

--
-- Table structure for table `md_customer`
--

CREATE TABLE `md_customer` (
  `uin` int(10) NOT NULL,
  `cust_type` varchar(5) NOT NULL,
  `cust_name` varchar(100) NOT NULL,
  `addr_line1` varchar(100) NOT NULL,
  `pin` int(10) NOT NULL,
  `gstin` varchar(50) NOT NULL,
  `pan` varchar(50) NOT NULL,
  `tan` varchar(50) NOT NULL,
  `propieter_namr` varchar(100) NOT NULL,
  `contact_person` varchar(100) NOT NULL,
  `mobile_no` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `company_type` varchar(5) NOT NULL,
  `bank_name` varchar(100) NOT NULL,
  `branch_name` varchar(100) NOT NULL,
  `ac_no` varchar(30) NOT NULL,
  `ifs_code` varchar(30) NOT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `created_dt` datetime DEFAULT NULL,
  `modified_by` varchar(50) DEFAULT NULL,
  `modified_dt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `md_item`
--

CREATE TABLE `md_item` (
  `id` int(11) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `license` int(1) NOT NULL DEFAULT '0',
  `Insurance` int(1) NOT NULL DEFAULT '0',
  `amc` int(1) NOT NULL DEFAULT '0',
  `created_by` varchar(55) DEFAULT NULL,
  `created_dt` datetime DEFAULT NULL,
  `modified_by` varchar(55) DEFAULT NULL,
  `modified_dt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `md_item`
--

INSERT INTO `md_item` (`id`, `item_name`, `license`, `Insurance`, `amc`, `created_by`, `created_dt`, `modified_by`, `modified_dt`) VALUES
(1, 'demo', 0, 1, 0, 'synergic', '2021-05-12 17:50:44', NULL, 0),
(2, 'demos', 0, 1, 0, 'synergic', '2021-05-12 18:06:33', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `md_users`
--

CREATE TABLE `md_users` (
  `user_id` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` enum('U','M','A','B') NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_status` char(1) NOT NULL,
  `branch_id` varchar(20) NOT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `created_dt` datetime DEFAULT NULL,
  `modified_by` varchar(50) DEFAULT NULL,
  `modified_dt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `md_users`
--

INSERT INTO `md_users` (`user_id`, `password`, `user_type`, `user_name`, `user_status`, `branch_id`, `created_by`, `created_dt`, `modified_by`, `modified_dt`) VALUES
('sss', '$2y$10$4lh8owRjV9NClHfR6nA11O67Btw/HrMsU0L01QAg4DTcQRubInxdW', 'A', 'synergic', 'A', '342', 'synergic', '2020-07-27 06:20:29', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `md_customer`
--
ALTER TABLE `md_customer`
  ADD PRIMARY KEY (`uin`);

--
-- Indexes for table `md_item`
--
ALTER TABLE `md_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `md_users`
--
ALTER TABLE `md_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `md_item`
--
ALTER TABLE `md_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
