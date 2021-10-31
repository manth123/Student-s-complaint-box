-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 02, 2020 at 04:37 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbcomplaint`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblcomplaint`
--

CREATE TABLE `tblcomplaint` (
  `complaintid` int(11) NOT NULL,
  `class` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `uid` int(11) NOT NULL,
  `actiontaken` text NOT NULL,
  `ddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcomplaint`
--

INSERT INTO `tblcomplaint` (`complaintid`, `class`, `type`, `description`, `uid`, `actiontaken`, `ddate`) VALUES
(3, 'FyBSc(CS)', 'Cleanliness', 'hdjjd', 1, 'sdfghj', '0000-00-00'),
(4, 'FyBSc(CS)', 'Cleanliness', 'hueie', 1, '', '2020-06-02');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `uid` int(11) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `upass` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`uid`, `uname`, `upass`, `email`) VALUES
(1, 'raj', 'raj', 'raj@gmail.com'),
(2, 'sham', 'sham', 'sham@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblcomplaint`
--
ALTER TABLE `tblcomplaint`
  ADD PRIMARY KEY (`complaintid`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblcomplaint`
--
ALTER TABLE `tblcomplaint`
  MODIFY `complaintid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
