-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 07, 2020 at 12:53 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Student`
--

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `marks_id` int(11) NOT NULL,
  `student_no` varchar(10) DEFAULT NULL,
  `module_code` varchar(8) DEFAULT NULL,
  `mark` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`marks_id`, `student_no`, `module_code`, `mark`) VALUES
(1, '20060101', 'CM0001', 80),
(2, '20060101', 'CM0002', 65),
(3, '20060101', 'CM0003', 50),
(4, '20060102', 'CM0001', 75),
(5, '20060102', 'CM0003', 45),
(6, '20060102', 'CM0004', 70),
(7, '20060103', 'CM0001', 60),
(8, '20060103', 'CM0002', 75),
(9, '20060103', 'CM0004', 60),
(10, '20060104', 'CM0001', 55),
(11, '20060104', 'CM0002', 40),
(12, '20060104', 'CM0003', 45),
(13, '20060105', 'CM0001', 55),
(14, '20060105', 'CM0002', 50),
(15, '20060105', 'CM0004', 65);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `modules_id` int(11) NOT NULL,
  `module_code` varchar(8) DEFAULT NULL,
  `module_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`modules_id`, `module_code`, `module_name`) VALUES
(1, 'CM0001', 'Databases'),
(2, 'CM0002', 'Programming Languages'),
(3, 'CM0003', 'Operating Systems'),
(4, 'CM0004', 'Graphics');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `students_id` int(11) NOT NULL,
  `student_no` varchar(10) DEFAULT NULL,
  `surname` varchar(20) DEFAULT NULL,
  `forename` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`students_id`, `student_no`, `surname`, `forename`) VALUES
(1, '20060101', 'Dickens', 'Charles'),
(2, '20060102', 'ApGwilym', 'Dafydd'),
(3, '20060103', 'Zola', 'Emile'),
(4, '20060104', 'Mann', 'Thomas'),
(5, '20060105', 'Stevenson', 'Robert'),
(6, '20161083', 'Monoget', 'saha'),
(8, '20161084', 'Shimul', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`marks_id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`modules_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`students_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `marks_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `modules_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `students_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
