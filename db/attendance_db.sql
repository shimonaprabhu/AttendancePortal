-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 09, 2018 at 05:39 PM
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
('ISE', '7', 48.88, 'S1', '15CS71', 22, 't1'),
('ISE', '7', 100, 'S1', '15CS72', 25, 't2'),
('ISE', '7', 100, 'S1', '15CS73', 53, 't3'),
('ISE', '7', 100, 'S1', '15CS741', 35, 't4'),
('ISE', '7', 100, 'S1', '15CS754', 24, 't5'),
('ISE', '7', 64.44, 'S10', '15CS71', 29, 't1'),
('ISE', '7', 44, 'S10', '15CS72', 11, 't2'),
('ISE', '7', 94.33, 'S10', '15CS73', 50, 't3'),
('ISE', '7', 71.42, 'S10', '15CS741', 25, 't4'),
('ISE', '7', 62.5, 'S10', '15CS754', 15, 't5'),
('ISE', '7', 66.66, 'S11', '15CS71', 30, 't1'),
('ISE', '7', 56, 'S11', '15CS72', 14, 't2'),
('ISE', '7', 96.22, 'S11', '15CS73', 51, 't3'),
('ISE', '7', 100, 'S11', '15CS741', 35, 't4'),
('ISE', '7', 100, 'S11', '15CS754', 24, 't5'),
('ISE', '7', 91.11, 'S12', '15CS71', 41, 't1'),
('ISE', '7', 12, 'S12', '15CS72', 3, 't2'),
('ISE', '7', 100, 'S12', '15CS73', 53, 't3'),
('ISE', '7', 100, 'S12', '15CS741', 35, 't4'),
('ISE', '7', 100, 'S12', '15CS754', 24, 't5'),
('ISE', '7', 28.88, 'S13', '15CS71', 13, 't1'),
('ISE', '7', 84, 'S13', '15CS72', 21, 't2'),
('ISE', '7', 100, 'S13', '15CS73', 53, 't3'),
('ISE', '7', 100, 'S13', '15CS741', 35, 't4'),
('ISE', '7', 100, 'S13', '15CS754', 24, 't5'),
('ISE', '7', 93.33, 'S14', '15CS71', 42, 't1'),
('ISE', '7', 52, 'S14', '15CS72', 13, 't2'),
('ISE', '7', 100, 'S14', '15CS73', 53, 't3'),
('ISE', '7', 100, 'S14', '15CS741', 35, 't4'),
('ISE', '7', 91.66, 'S14', '15CS754', 22, 't5'),
('ISE', '7', 97.77, 'S15', '15CS71', 44, 't1'),
('ISE', '7', 84, 'S15', '15CS72', 21, 't2'),
('ISE', '7', 100, 'S15', '15CS73', 53, 't3'),
('ISE', '7', 100, 'S15', '15CS741', 35, 't4'),
('ISE', '7', 79.16, 'S15', '15CS754', 19, 't5'),
('ISE', '7', 91.11, 'S2', '15CS71', 41, 't1'),
('ISE', '7', 100, 'S2', '15CS72', 25, 't2'),
('ISE', '7', 100, 'S2', '15CS73', 53, 't3'),
('ISE', '7', 100, 'S2', '15CS741', 35, 't4'),
('ISE', '7', 100, 'S2', '15CS754', 24, 't5'),
('ISE', '7', 6.66, 'S3', '15CS71', 3, 't1'),
('ISE', '7', 100, 'S3', '15CS72', 25, 't2'),
('ISE', '7', 100, 'S3', '15CS73', 53, 't3'),
('ISE', '7', 100, 'S3', '15CS741', 35, 't4'),
('ISE', '7', 100, 'S3', '15CS754', 24, 't5'),
('ISE', '7', 97.77, 'S4', '15CS71', 44, 't1'),
('ISE', '7', 100, 'S4', '15CS72', 25, 't2'),
('ISE', '7', 45.28, 'S4', '15CS73', 24, 't3'),
('ISE', '7', 100, 'S4', '15CS741', 35, 't4'),
('ISE', '7', 87.5, 'S4', '15CS754', 21, 't5'),
('ISE', '7', 80, 'S5', '15CS71', 36, 't1'),
('ISE', '7', 100, 'S5', '15CS72', 25, 't2'),
('ISE', '7', 92.45, 'S5', '15CS73', 49, 't3'),
('ISE', '7', 82.85, 'S5', '15CS741', 29, 't4'),
('ISE', '7', 25, 'S5', '15CS754', 6, 't5'),
('ISE', '7', 60, 'S6', '15CS71', 27, 't1'),
('ISE', '7', 96, 'S6', '15CS72', 24, 't2'),
('ISE', '7', 58.49, 'S6', '15CS73', 31, 't3'),
('ISE', '7', 88.57, 'S6', '15CS741', 31, 't4'),
('ISE', '7', 54.16, 'S6', '15CS754', 13, 't5'),
('ISE', '7', 68.88, 'S7', '15CS71', 31, 't1'),
('ISE', '7', 60, 'S7', '15CS72', 15, 't2'),
('ISE', '7', 77.35, 'S7', '15CS73', 41, 't3'),
('ISE', '7', 85.71, 'S7', '15CS741', 30, 't4'),
('ISE', '7', 33.33, 'S7', '15CS754', 8, 't5'),
('ISE', '7', 88.88, 'S8', '15CS71', 40, 't1'),
('ISE', '7', 40, 'S8', '15CS72', 10, 't2'),
('ISE', '7', 100, 'S8', '15CS73', 53, 't3'),
('ISE', '7', 82.85, 'S8', '15CS741', 29, 't4'),
('ISE', '7', 37.5, 'S8', '15CS754', 9, 't5'),
('ISE', '7', 26.66, 'S9', '15CS71', 12, 't1'),
('ISE', '7', 80, 'S9', '15CS72', 20, 't2'),
('ISE', '7', 81.13, 'S9', '15CS73', 43, 't3'),
('ISE', '7', 57.14, 'S9', '15CS741', 20, 't4'),
('ISE', '7', 45.83, 'S9', '15CS754', 11, 't5');

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
('S1', 'Student One', 'ISE', '7', 'tejeshreddy111@gmail.com', '9856437256', 'tejesh'),
('S10', 'Student Student', 'ISE', '7', 's10@gmail.com', '7825647382', 's10'),
('S11', 'Student Eleven', 'ISE', '7', 's11@gmail.com', '7275647382', 's11'),
('S12', 'Student Twelve', 'ISE', '7', 's12@gmail.com', '8862647382', 's12'),
('S13', 'Student Thirteen', 'ISE', '7', 's13@gmail.com', '9875647382', 's13'),
('S14', 'Student Fourteen', 'ISE', '7', 's14@gmail.com', '7767647382', 's14'),
('S15', 'Student Fifteen', 'ISE', '7', 's15@gmail.com', '8975647382', 's15'),
('S2', 'Student Two', 'ISE', '7', 'saikumarc365@gmail.com', '7645356468', 'saikumar'),
('S3', 'Student Three', 'ISE', '7', '0718shimona@gmail.com', '9855634555', 'shimona'),
('S4', 'Student Four', 'ISE', '7', 's4@gmail.com', '7355342615', 's4'),
('S5', 'Student Five', 'ISE', '7', 's5@gmail.com', '7245362789', 's5'),
('S6', 'Student Six', 'ISE', '7', 's6@gmail.com', '9875647382', 's6'),
('S7', 'Student Seven', 'ISE', '7', 's7@gmail.com', '9839277382', 's7'),
('S8', 'Student Eight', 'ISE', '7', 's8@gmail.com', '8875647382', 's8'),
('S9', 'Student Nine', 'ISE', '7', 's9@gmail.com', '8876647382', 's9');

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
('15CS71', 'WEB', 'ISE', '7', 45),
('15CS72', 'SADP', 'ISE', '7', 25),
('15CS73', 'ML', 'ISE', '7', 53),
('15CS741', 'NLP', 'ISE', '7', 35),
('15CS754', 'SAN', 'ISE', '7', 24);

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
('T1', 'Teacher1', 'teacher1@gmail.com', '9844636526', 'teacher1', '7', 'ISE'),
('T2', 'Teacher2', 'teacher2@gmail.com', '8873564536', 'teacher2', '7', 'ISE'),
('T3', 'Teacher3', 'teacher3@gmail.com', '7873564536', 'teacher3', '7', 'ISE'),
('T4', 'Teacher4', 'teacher4@gmail.com', '9873564536', 'teacher4', '7', 'ISE'),
('T5', 'Teacher5', 'teacher5@gmail.com', '7773564536', 'teacher5', '7', 'ISE');

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
