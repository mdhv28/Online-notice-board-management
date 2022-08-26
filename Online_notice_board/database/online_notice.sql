-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2022 at 07:02 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_notice`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `user`, `pass`) VALUES
(1, 'admin@gmail.com', 'admin'),
(3, 'karthik@gmail.com', 'karthik');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(50) NOT NULL,
  `event_desc` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Pending by HOD'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_name`, `event_desc`, `Date`, `status`) VALUES
(64, 'a', 'First', '2022-02-16', 'Approved'),
(65, 'b', 'bb', '2022-02-13', 'Rejected'),
(66, 'C', 'cc', '2022-02-17', 'Approved'),
(67, 'D', 'DD', '2022-02-10', 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `facultydetails`
--

CREATE TABLE `facultydetails` (
  `sem` int(11) NOT NULL,
  `sec` varchar(5) NOT NULL,
  `subcode` varchar(50) NOT NULL,
  `sub` varchar(50) NOT NULL,
  `facultyname` varchar(50) NOT NULL,
  `profileLink` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facultydetails`
--

INSERT INTO `facultydetails` (`sem`, `sec`, `subcode`, `sub`, `facultyname`, `profileLink`) VALUES
(5, 'A', '18CS53', 'Database Management System', 'Prof. Muddasir', 'https://drive.google.com/file/d/1PhvZ3pGB6TUd4TOMksyBMuyTTkjGjAb1/view');

-- --------------------------------------------------------

--
-- Table structure for table `feestructure`
--

CREATE TABLE `feestructure` (
  `year` int(11) NOT NULL,
  `cetnormal` varchar(50) NOT NULL,
  `cetlateralentry` varchar(50) NOT NULL,
  `cetsnq` varchar(50) NOT NULL,
  `comedk` varchar(50) NOT NULL,
  `management` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feestructure`
--

INSERT INTO `feestructure` (`year`, `cetnormal`, `cetlateralentry`, `cetsnq`, `comedk`, `management`) VALUES
(2018, '78,050', '75,090', '24,590', '2,08,190', '2,08,190'),
(2019, '83,396', '78,050', '24,590', '2,26,550', '2,26,550'),
(2020, '86,896', '86,896', '28,090', '2,28,090', '2,28,090'),
(2021, '86,896', '86,896', '28,090', '2,28,090', '2,28,090');

-- --------------------------------------------------------

--
-- Table structure for table `hod`
--

CREATE TABLE `hod` (
  `username` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hod`
--

INSERT INTO `hod` (`username`, `pass`) VALUES
('hod_ise', 'hod');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `notice_id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`notice_id`, `user`, `subject`, `Description`, `Date`) VALUES
(22, 'udupa@gmail.com', 'Mini Project', 'Mini Project', '2022-02-11 22:42:34'),
(23, 'udupa@gmail.com', 'hi', 'hi', '2022-02-11 23:22:34');

-- --------------------------------------------------------

--
-- Table structure for table `scholarship`
--

CREATE TABLE `scholarship` (
  `sname` varchar(100) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `eligibility` text NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scholarship`
--

INSERT INTO `scholarship` (`sname`, `startdate`, `enddate`, `eligibility`, `link`) VALUES
('SSP', '2022-02-11', '2022-02-18', 'SC Annual Income - <2.5 lakh\r\nST Annual Income - <2.5 lakh\r\nST Annual Income - <2.5 lakh\r\n', 'https://ssp.postmatric.karnataka.gov.in/');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `sem` int(10) NOT NULL,
  `sec` varchar(5) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`sem`, `sec`, `image`) VALUES
(4, 'A', 'TimeTableImages/4A.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usn` varchar(10) NOT NULL,
  `name` char(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `mobile` bigint(11) NOT NULL,
  `gender` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usn`, `name`, `email`, `pass`, `mobile`, `gender`) VALUES
('4VV19EC005', 'Adithya', 'adithya@gmail.com', 'a47e3bfc5dec7f7862ae3f5c132ef419', 1234567890, 'M'),
('4VV19IS034', 'karthik udupa G V', 'udupa@gmail.com', 'student', 7019502877, 'M');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `facultydetails`
--
ALTER TABLE `facultydetails`
  ADD PRIMARY KEY (`sem`,`sec`,`subcode`);

--
-- Indexes for table `feestructure`
--
ALTER TABLE `feestructure`
  ADD PRIMARY KEY (`year`);

--
-- Indexes for table `hod`
--
ALTER TABLE `hod`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `scholarship`
--
ALTER TABLE `scholarship`
  ADD PRIMARY KEY (`sname`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`sem`,`sec`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usn`),
  ADD UNIQUE KEY `email` (`email`);
ALTER TABLE `users` ADD FULLTEXT KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
