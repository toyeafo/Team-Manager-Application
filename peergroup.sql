-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2020 at 01:14 AM
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
-- Database: `peergroup`
--

-- --------------------------------------------------------

--
-- Table structure for table `groupa`
--

CREATE TABLE `groupa` (
  `uid` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `stdgroup` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `groupb`
--

CREATE TABLE `groupb` (
  `uid` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `stdgroup` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `groupc`
--

CREATE TABLE `groupc` (
  `uid` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `stdgroup` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `groupd`
--

CREATE TABLE `groupd` (
  `uid` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `stdgroup` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `groupe`
--

CREATE TABLE `groupe` (
  `uid` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `stdgroup` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `groupf`
--

CREATE TABLE `groupf` (
  `uid` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `stdgroup` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `uid` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `reason` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `uid` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `course` varchar(100) DEFAULT NULL,
  `coursecode` varchar(255) DEFAULT NULL,
  `stdgroup` varchar(200) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`uid`, `fullname`, `course`, `coursecode`, `stdgroup`, `role`) VALUES
(1, 'afrogenius', 'Data Science', 'cmm001', 'A', 'Student'),
(2, 'james morty', 'Information Technology', 'cmm002', 'C', 'Student'),
(3, 'Usman Smart', 'Cybersecurity', 'cmm002', 'B', 'Student'),
(4, 'Klay Harris', 'Data Science', 'cmm001', 'D', 'Student'),
(5, 'Noah Combs', 'Information Technology', 'cmm001', 'F', 'Student'),
(6, 'Indigo Rosa', 'Information Technology', 'cmm003', 'D', 'Student'),
(7, 'Shelly May', 'Cybersecurity', 'cmm001', 'B', 'Student'),
(8, 'Tasmin Mcdaniel', 'Information Technology', 'cmm001', 'E', 'Student'),
(9, 'Anaya Sherman', 'Information Technology', 'cmm001', 'A', 'Student'),
(10, 'Bjorn Campbell', 'Computer Science', 'cmm001', 'C', 'Student'),
(11, 'Franklyn Erickson', 'Cybersecurity', 'cmm001', 'A', 'Student'),
(12, 'TillyMae Greene', 'Information Technology', 'cmm001', 'A', 'Student'),
(13, 'TillyMae Greene', 'Information Technology', 'cmm001', 'C', 'Student'),
(14, 'Aliyah Marsden', 'Computer Science', 'cmm001', 'D', 'Student'),
(15, 'Florence Owens', 'Data Science', 'cmm003', 'B', 'Student'),
(16, 'Candice Avalos', 'Cybersecurity', 'cmm001', 'F', 'Student'),
(17, 'Sofija Howarth', 'Information Technology', 'cmm003', 'A', 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `username`, `password`, `email`, `role`, `image`) VALUES
(13, 'Admin', 'e10adc3949ba59abbe56e057f20f883e', 'admin@intranet.com', 'Admin', ''),
(14, 'Student', 'e10adc3949ba59abbe56e057f20f883e', 'student@intranet.com', 'Student', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `groupa`
--
ALTER TABLE `groupa`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `groupb`
--
ALTER TABLE `groupb`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `groupc`
--
ALTER TABLE `groupc`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `groupd`
--
ALTER TABLE `groupd`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `groupe`
--
ALTER TABLE `groupe`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `groupf`
--
ALTER TABLE `groupf`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groupa`
--
ALTER TABLE `groupa`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `groupb`
--
ALTER TABLE `groupb`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `groupc`
--
ALTER TABLE `groupc`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `groupd`
--
ALTER TABLE `groupd`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `groupe`
--
ALTER TABLE `groupe`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `groupf`
--
ALTER TABLE `groupf`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
