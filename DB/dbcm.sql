-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2019 at 07:13 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbcm`
--

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `tag` varchar(200) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `file` varchar(200) NOT NULL,
  `userid` int(11) NOT NULL,
  `departmentid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `title`, `tag`, `description`, `date`, `file`, `userid`, `departmentid`) VALUES
(28, 'Software', 'csc-470', 'This is very important....', '2018-04-07 01:41:34', 'CSC_330_Lab_Exp11.pdf', 19, 16),
(29, 'DLD', 'CSC 330', 'Hello', '2018-04-07 01:42:17', 'CSC_330_Lab_Exp10.pdf', 19, 16),
(30, 'DLD', 'CSC 330', 'Hello', '2018-04-07 01:44:55', 'CSC_330_Lab_Exp10.pdf', 19, 16),
(31, 'DLD', 'CSC 330', 'Hello', '2018-04-07 01:44:58', 'CSC_330_Lab_Exp10.pdf', 19, 16),
(32, 'DLD', 'CSC 330', 'Hello', '2018-04-07 01:45:11', 'CSC_330_Lab_Exp10.pdf', 19, 16),
(33, 'new', 'csc 445', 'll', '2018-04-07 01:46:25', 'CSC_330_Lab_Exp10.pdf', 19, 16),
(34, 'new', 'csc 445', 'll', '2018-04-07 01:46:46', 'CSC_330_Lab_Exp10.pdf', 19, 16);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `co_name` varchar(50) NOT NULL,
  `short_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name`, `co_name`, `short_name`) VALUES
(16, 'Computer Science', 'UKD', 'BCSE');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `message`) VALUES
(7, 'Tahmid', 'tahmidone@gmail.com', 'Below is some feedback that has been sent to me from the demos I hold. It\'s great to see people enjoying the demos, and also writing to me about how it went');

-- --------------------------------------------------------

--
-- Table structure for table `sdeatils`
--

CREATE TABLE `sdeatils` (
  `sid` int(11) NOT NULL,
  `sname` varchar(200) NOT NULL,
  `Email_id` varchar(200) NOT NULL,
  `Contact_No` varchar(200) NOT NULL,
  `attendance` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `inst` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `cpassword` varchar(200) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `inst` varchar(200) NOT NULL,
  `dpt` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `cpassword` varchar(200) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `type` int(11) NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `gender`, `inst`, `dpt`, `email`, `password`, `cpassword`, `contact`, `type`, `img`) VALUES
(4, 'Admin', 'admin', 'male', 'none', 'none', 'admin@gmail.com', '*A4B6157319038724E3560894F7F932C8886EBFCF', '*A4B6157319038724E3560894F7F932C8886EBFCF', '01822597379', 3, ''),
(17, 'Alex', 'Dude', 'Male', 'iubat', '16', 'alex@gmail.com', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257', '0178115596', 1, '3.jpg'),
(18, 'benhar', 'charls', 'Male', 'iubat', '16', 'benhar@gmail.com', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257', '01781559966', 1, '1.jpg'),
(19, 'samiul', 'Islam', '', 'iubat', '16', 'sami@gmail.com', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257', '0178855566', 1, '6.jpg'),
(20, 'Tahmid', 'Nishat', '', 'iubat', '16', 'nishat@gmail.com', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257', '0178555666', 1, '5.jpg'),
(22, 'Shibly', 'Noman', 'Male', 'Iubat', '16', 'shibly@gmail.com', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257', '01889665', 2, '2.jpg'),
(23, 'admin', 'ali', 'male', 'none', 'none', 'admin@system.com', '*8D107483454CDAB3D75861092A729103DE99F0C6', '*8D107483454CDAB3D75861092A729103DE99F0C6', '1223333', 3, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sdeatils`
--
ALTER TABLE `sdeatils`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `sdeatils`
--
ALTER TABLE `sdeatils`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
