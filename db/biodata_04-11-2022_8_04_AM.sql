-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2022 at 03:32 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biodata`
--

-- --------------------------------------------------------

--
-- Table structure for table `basic_detail`
--

CREATE TABLE `basic_detail` (
  `id` int(22) NOT NULL,
  `user_code` varchar(333) NOT NULL,
  `name` varchar(533) NOT NULL,
  `address` varchar(555) NOT NULL,
  `email` varchar(55) NOT NULL,
  `mobile` int(12) NOT NULL,
  `profile` varchar(555) NOT NULL,
  `objective` varchar(1000) NOT NULL,
  `declaration` varchar(5555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `education_details`
--

CREATE TABLE `education_details` (
  `id` int(10) NOT NULL,
  `user_code` int(15) NOT NULL,
  `coursename` varchar(40) NOT NULL,
  `university` varchar(50) NOT NULL,
  `college` varchar(44) NOT NULL,
  `passyear` varchar(20) NOT NULL,
  `percentage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `education_details`
--

INSERT INTO `education_details` (`id`, `user_code`, `coursename`, `university`, `college`, `passyear`, `percentage`) VALUES
(11, 311, 'java programming', 'ms university', 's.t.hindu college', '2022', '88'),
(13, 101, 'python programing', 'anna university', 'st xaviers', '2021', '81');

-- --------------------------------------------------------

--
-- Table structure for table `experience_details`
--

CREATE TABLE `experience_details` (
  `id` int(33) NOT NULL,
  `user_code` varchar(23) NOT NULL,
  `organization_name` varchar(55) NOT NULL,
  `experience` varchar(45) NOT NULL,
  `role` varchar(233) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `experience_details`
--

INSERT INTO `experience_details` (`id`, `user_code`, `organization_name`, `experience`, `role`) VALUES
(23, '123', 'phoenix', '2 years', 'backend developer'),
(24, '122', 'sparrow', '3', 'UI & ux designer');

-- --------------------------------------------------------

--
-- Table structure for table `personal_details`
--

CREATE TABLE `personal_details` (
  `id` int(10) NOT NULL,
  `user_code` varchar(10) NOT NULL,
  `personal_type` varchar(400) NOT NULL,
  `personal_detail` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal_details`
--

INSERT INTO `personal_details` (`id`, `user_code`, `personal_type`, `personal_detail`) VALUES
(2, '0234', 'team', 'phoenix'),
(3, '1112', 'manager', 'suganya');

-- --------------------------------------------------------

--
-- Table structure for table `technology_details`
--

CREATE TABLE `technology_details` (
  `id` int(10) NOT NULL,
  `user_code` varchar(222) NOT NULL,
  `experience_type` varchar(33) NOT NULL,
  `experience_detail` varchar(44) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `technology_details`
--

INSERT INTO `technology_details` (`id`, `user_code`, `experience_type`, `experience_detail`) VALUES
(22, '456', '3 years', 'role as frontend developer'),
(23, '457', '5 years', 'role as project manager');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `id` int(8) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobileno` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`id`, `name`, `username`, `password`, `email`, `mobileno`) VALUES
(1, 'renuka', 'admin22', 'welcome', 'renukasindhu23@gmail.com', '123456789'),
(6, 'abith', 'admin23', 'eerrhxq', 'abithjvinith@gmail.com', '987654321');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basic_detail`
--
ALTER TABLE `basic_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education_details`
--
ALTER TABLE `education_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience_details`
--
ALTER TABLE `experience_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_details`
--
ALTER TABLE `personal_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technology_details`
--
ALTER TABLE `technology_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `basic_detail`
--
ALTER TABLE `basic_detail`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `education_details`
--
ALTER TABLE `education_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `experience_details`
--
ALTER TABLE `experience_details`
  MODIFY `id` int(33) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `personal_details`
--
ALTER TABLE `personal_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `technology_details`
--
ALTER TABLE `technology_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
