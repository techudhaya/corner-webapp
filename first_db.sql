-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 28, 2018 at 03:03 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `first_db`
--
CREATE DATABASE IF NOT EXISTS `first_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `first_db`;

-- --------------------------------------------------------

--
-- Table structure for table `table1`
--

CREATE TABLE IF NOT EXISTS `table1` (
  `reg_no` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table1`
--

INSERT INTO `table1` (`reg_no`, `name`, `location`) VALUES
(113, 'udhaya', 'chennai'),
(112, 'sneha', 'tirupathi'),
(70, 'ravi', 'gummidipoondi'),
(78, 'pradeep', 'vellore'),
(114, 'varsha', 'thiruvallur'),
(118, 'naruto', 'hidden village'),
(101, 'Mickey', 'mickey world'),
(101, 'Mickey', 'mickey world'),
(101, 'Mickey', 'mickey world'),
(121, 'working', 'workin city'),
(321, 'Mickey', 'g villaa'),
(321, 'Mickey', 'g villaa'),
(321, 'udhaya', ''),
(321, 'udhaya', ''),
(321, '', ''),
(321, '', ''),
(321, '', ''),
(321, '', ''),
(321, '', ''),
(321, '', ''),
(321, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `xbasic_details`
--

CREATE TABLE IF NOT EXISTS `xbasic_details` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `secondname` varchar(255) DEFAULT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `birthday` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `xbasic_details`
--

INSERT INTO `xbasic_details` (`ID`, `username`, `firstname`, `secondname`, `contact`, `address`, `email`, `birthday`, `gender`) VALUES
(3, 'udhaya', 'udhaya', 'thunga', '9487892432', 'chennai', 'techudhay@gmail.com', '12-05-1999', 'male'),
(11, 'pradeep', 'pradeep', 'kumar', '94861564', 'mooka vellore', 'pradeep@gmail.com', '17-03-1999', 'male'),
(18, 'use', 'useerr', 'rer', '1002002', 'hidden village', 'yy@gmail.com', '20-05-2222', 'female'),
(19, 'ravi', 'ravi', 'kumar', '916946516', 'gummi', 'ravi@gmail.com', '20-05-2222', 'female'),
(20, 'haripotter', 'hari', 'potter', '001178974915', 'hogward', 'haripotter@gmail.com', '01-01-1789', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `xcontact`
--

CREATE TABLE IF NOT EXISTS `xcontact` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `comments` text,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `xcontact`
--

INSERT INTO `xcontact` (`ID`, `name`, `email`, `comments`) VALUES
(1, 'udhayaa', 'techudhay@gmail.com', 'helllo'),
(2, 'udhayaa', 'techudhay@gmail.com', 'hello'),
(3, 'udhayaa', 'techudhay@gmail.com', 'hello'),
(5, 'udhayaa', 'techudhay@gmail.com', 'odii poo'),
(8, 'varsha', 'varsha@gmail.com', 'semma poo'),
(9, 'udhayaa', 'techudhay@gmail.com', 'dsds'),
(10, 'haripotter', 'haripotter@gmail.com', 'magic.........');

-- --------------------------------------------------------

--
-- Table structure for table `xregister`
--

CREATE TABLE IF NOT EXISTS `xregister` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `xregister`
--

INSERT INTO `xregister` (`ID`, `username`, `email`, `password`) VALUES
(1, 'uuu', 'uuu@gmail.com', 'ccc'),
(2, 'udhaya', 'techudhay@gmail.com', 'qqq'),
(36, 'pradeep', 'p@gmail.com', 'poi'),
(38, 'sneha', 'sneha@gmail.com', 'udhaya'),
(39, 'varsha', 'varsha@gmail.com', 'vaa'),
(40, 'ravi', 'ravi@gmail.com', 'ravi'),
(41, 'krithika', 'krithika@gmail.com', 'barbie'),
(42, 'haripotter', 'haripotter@gmail.com', 'eme');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
