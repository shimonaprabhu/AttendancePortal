-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 02, 2018 at 11:20 PM
-- Server version: 5.7.24-0ubuntu0.16.04.1
-- PHP Version: 7.0.32-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `branch` varchar(200) NOT NULL,
  `sem` varchar(200) NOT NULL,
  `status` float NOT NULL,
  `student_id` varchar(200) NOT NULL,
  `subject_code` varchar(200) NOT NULL,
  `attended` int(11) NOT NULL,
  `tutor_id` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`branch`, `sem`, `status`, `student_id`, `subject_code`, `attended`, `tutor_id`) VALUES
('ISE', '5', 100, '1PE15IS001', '15CS51', 2, 'T1'),
('ISE', '5', 100, '1PE15IS001', '15CS52', 2, 'T1'),
('ISE', '5', 50, '1PE15IS002', '15CS51', 1, 'T1'),
('ISE', '5', 50, '1PE15IS003', '15CS51', 1, 'T1');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `branch` varchar(200) NOT NULL,
  `sem` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `branch`, `sem`, `email`, `phone`, `password`) VALUES
('1PE15IS001', 'b', 'ISE', '5', 'b@gmail.com', '9855634555', 'b'),
('1PE15IS002', 'a', 'ISE', '5', 'a@gmail.com', '7645356468', 'a'),
('1PE15IS003', 'c', 'ISE', '5', 'c@gmail.com', '9678965765', 'c');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `code` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `branch` varchar(200) NOT NULL,
  `sem` varchar(200) NOT NULL,
  `classes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`code`, `name`, `branch`, `sem`, `classes`) VALUES
('15CS42', 'DAA', 'CSE', '4', 0),
('15CS51', 'DS', 'ISE', '5', 2),
('15CS52', 'ME', 'ISE', '5', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

CREATE TABLE `tutor` (
  `id` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `sem` varchar(200) NOT NULL,
  `branch` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`id`, `name`, `email`, `phone`, `password`, `sem`, `branch`) VALUES
('T1', 'Tejesh Reddy ', 'tejesh@gmail.com', '9844636526', 'tejesh', 'ISE', '5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`student_id`,`subject_code`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
