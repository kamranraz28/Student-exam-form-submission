-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2021 at 04:25 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_s1`
--

CREATE TABLE `add_s1` (
  `id` int(200) NOT NULL,
  `sub_name` varchar(255) NOT NULL,
  `sub_code` varchar(200) NOT NULL,
  `credit` float(30,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_s1`
--

INSERT INTO `add_s1` (`id`, `sub_name`, `sub_code`, `credit`) VALUES
(1, 'Computer Fundamental and Programming Basics', 'CSE101', 3.0),
(2, 'Computer Fundamental and Programming Basic Lab', 'CSE102', 1.5),
(3, 'Discrete Mathmatics', 'CSE103', 3.0),
(4, 'Basic Electrical Engineering', 'EEE161', 3.0),
(5, 'Basic Electrical Lab', 'EEE 162', 1.5);

-- --------------------------------------------------------

--
-- Table structure for table `add_s2`
--

CREATE TABLE `add_s2` (
  `id` int(20) NOT NULL,
  `sub_name` varchar(255) NOT NULL,
  `sub_code` varchar(255) NOT NULL,
  `credit` float(30,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_s2`
--

INSERT INTO `add_s2` (`id`, `sub_name`, `sub_code`, `credit`) VALUES
(1, 'Structured Programming', 'CSE 121', 3.0),
(2, 'Structured Programming Lab', 'CSE 122', 1.5),
(3, 'Numerical Methods', 'CSE 127', 3.0);

-- --------------------------------------------------------

--
-- Table structure for table `add_s3`
--

CREATE TABLE `add_s3` (
  `id` int(20) NOT NULL,
  `sub_name` varchar(255) NOT NULL,
  `sub_code` varchar(255) NOT NULL,
  `credit` float(30,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_s3`
--

INSERT INTO `add_s3` (`id`, `sub_name`, `sub_code`, `credit`) VALUES
(3, 'Object Oriented Programming', 'CDE 201', 3.0);

-- --------------------------------------------------------

--
-- Table structure for table `add_s4`
--

CREATE TABLE `add_s4` (
  `id` int(20) NOT NULL,
  `sub_name` varchar(255) NOT NULL,
  `sub_code` varchar(255) NOT NULL,
  `credit` float(30,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_s4`
--

INSERT INTO `add_s4` (`id`, `sub_name`, `sub_code`, `credit`) VALUES
(3, 'Algorithms', 'CSE 221', 3.0);

-- --------------------------------------------------------

--
-- Table structure for table `add_s5`
--

CREATE TABLE `add_s5` (
  `id` int(20) NOT NULL,
  `sub_name` varchar(255) NOT NULL,
  `sub_code` varchar(255) NOT NULL,
  `credit` float(30,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_s5`
--

INSERT INTO `add_s5` (`id`, `sub_name`, `sub_code`, `credit`) VALUES
(3, 'Microprocessors', 'CSE 301', 3.0);

-- --------------------------------------------------------

--
-- Table structure for table `add_s6`
--

CREATE TABLE `add_s6` (
  `id` int(20) NOT NULL,
  `sub_name` varchar(255) NOT NULL,
  `sub_code` varchar(255) NOT NULL,
  `credit` float(30,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_s6`
--

INSERT INTO `add_s6` (`id`, `sub_name`, `sub_code`, `credit`) VALUES
(1, 'Computer Networks', 'CSE 321', 3.0),
(2, 'Computer Networks Lab', 'CSE 322', 1.5),
(3, 'Compiler Design', 'CSE 323', 3.0);

-- --------------------------------------------------------

--
-- Table structure for table `add_s7`
--

CREATE TABLE `add_s7` (
  `id` int(20) NOT NULL,
  `sub_name` varchar(255) NOT NULL,
  `sub_code` varchar(255) NOT NULL,
  `credit` float(30,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_s7`
--

INSERT INTO `add_s7` (`id`, `sub_name`, `sub_code`, `credit`) VALUES
(5, 'Software Engineering', 'CSE 401', 3.0);

-- --------------------------------------------------------

--
-- Table structure for table `add_s8`
--

CREATE TABLE `add_s8` (
  `id` int(20) NOT NULL,
  `sub_name` varchar(255) NOT NULL,
  `sub_code` varchar(255) NOT NULL,
  `credit` float(30,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_s8`
--

INSERT INTO `add_s8` (`id`, `sub_name`, `sub_code`, `credit`) VALUES
(2, 'Artificial Intelligence', 'CSE 421', 3.0);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_user`, `password`) VALUES
('kajal@cse', 'kajal12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_s1`
--
ALTER TABLE `add_s1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_s2`
--
ALTER TABLE `add_s2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_s3`
--
ALTER TABLE `add_s3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_s4`
--
ALTER TABLE `add_s4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_s5`
--
ALTER TABLE `add_s5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_s6`
--
ALTER TABLE `add_s6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_s7`
--
ALTER TABLE `add_s7`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_s8`
--
ALTER TABLE `add_s8`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_s1`
--
ALTER TABLE `add_s1`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `add_s2`
--
ALTER TABLE `add_s2`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `add_s3`
--
ALTER TABLE `add_s3`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `add_s4`
--
ALTER TABLE `add_s4`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `add_s5`
--
ALTER TABLE `add_s5`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `add_s6`
--
ALTER TABLE `add_s6`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `add_s7`
--
ALTER TABLE `add_s7`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `add_s8`
--
ALTER TABLE `add_s8`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
