-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2020 at 10:58 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission_form`
--

CREATE TABLE `admission_form` (
  `admission_id` int(15) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `father_name` varchar(30) NOT NULL,
  `mather_name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `dob` date NOT NULL,
  `blood_group` varchar(5) NOT NULL,
  `religion` varchar(10) NOT NULL,
  `class` varchar(10) NOT NULL,
  `shift` varchar(10) NOT NULL,
  `paymentnumber` int(20) NOT NULL,
  `photo` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `student_id` int(15) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `father_name` varchar(30) NOT NULL,
  `mather_name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `dob` date NOT NULL,
  `blood_group` varchar(5) NOT NULL,
  `religion` varchar(10) NOT NULL,
  `class` varchar(10) NOT NULL,
  `shift` varchar(10) NOT NULL,
  `paymentnumber` int(20) NOT NULL,
  `photo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`student_id`, `fname`, `lname`, `father_name`, `mather_name`, `email`, `phone`, `gender`, `dob`, `blood_group`, `religion`, `class`, `shift`, `paymentnumber`, `photo`) VALUES
(31, 'Soahnur', 'Rahman Sohan', 'Md. Lal Mia Sarkar', 'Sokhina Begum', 'sohan@gmail.com', '0168845454', 'male', '1998-12-02', 'B+', 'Islam', 'Five', 'Morning', 123456789, 'images/cpanel.jpg'),
(32, 'Abu', 'Said', 'Md.Pavel Bhuiyan', 'Sohely Rahman', 'abuside@gmail.com', '01714581296', 'male', '2010-05-08', 'O-', 'Hinduis', 'Three', 'Morning', 1747184996, 'images/Screenshot (1'),
(33, 'Rafi ', 'Ahmed', 'Md.Dhrubo', 'Tasdika', 'rafi@gmail.com', '01785469325', 'male', '2005-05-08', 'O-', 'Islam', 'Two', 'Morning', 1725896325, 'images/Screenshot (2'),
(34, 'Rifat', 'Dewan', 'Md.kamal', 'Hamim', 'rifat@gmail.com', '01745289632', 'male', '2006-02-12', 'O-', 'Islam', 'Three', 'Morning', 1723659841, 'images/Screenshot (3'),
(35, 'Moon', 'Ahmed', 'Kamrul', 'Jamila', 'moon@gmail.com', '01825478965', 'male', '2006-05-06', 'O+', 'Islam', 'One', 'Morning', 1832659874, 'images/Screenshot (3'),
(36, 'Turjo', 'Ahmed', 'hasan', 'shila', 'torjo@gmail.com', '01745896325', 'male', '2006-02-06', 'A-', 'Islam', 'Three', 'Morning', 1745896325, 'images/Screenshot (2'),
(37, 'Hasan', 'Ahmed', 'adff', 'sdfsdfgsdg', 'hasanjab14@gmail.com', '01680964668', 'male', '1998-12-02', 'B+', 'Islam', 'Four', 'Morning', 1747184996, 'images/Screenshot (2');

-- --------------------------------------------------------

--
-- Table structure for table `user_list`
--

CREATE TABLE `user_list` (
  `id` int(15) NOT NULL,
  `password` varchar(30) NOT NULL,
  `role` varchar(10) NOT NULL,
  `username` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_list`
--

INSERT INTO `user_list` (`id`, `password`, `role`, `username`) VALUES
(1, 'test', 'Admin', 'Admin'),
(13, 'test', 'Student', 'antukhan'),
(14, '1234', 'Student', 'sohan'),
(15, '4321', 'Student', 'abu'),
(16, '0987', 'Student', 'moon'),
(17, '54321', 'Student', 'rifat'),
(18, '7890', 'Student', 'turjo'),
(19, '9876', 'Student', 'rafi'),
(20, '123', 'Student', 'hasan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission_form`
--
ALTER TABLE `admission_form`
  ADD PRIMARY KEY (`admission_id`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `user_list`
--
ALTER TABLE `user_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admission_form`
--
ALTER TABLE `admission_form`
  MODIFY `admission_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `user_list`
--
ALTER TABLE `user_list`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
