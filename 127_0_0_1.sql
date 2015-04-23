-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2015 at 06:41 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `matinee`
--

-- --------------------------------------------------------

--
-- Table structure for table `hall`
--

CREATE TABLE IF NOT EXISTS `hall` (
  `hid` varchar(3) NOT NULL,
  `hname` varchar(50) NOT NULL,
  `adress` varchar(50) NOT NULL,
  PRIMARY KEY (`hid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hall`
--

INSERT INTO `hall` (`hid`, `hname`, `adress`) VALUES
('h01', 'Mayajaal', 'East Coast Road Kanthur'),
('h02', 'Abirami', 'Purasaiwalkam High Road'),
('h03', 'Kamala', 'Arcot Road Vadapalani'),
('h04', 'Sangam', 'Poonamallee High Road Kilpauk');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE IF NOT EXISTS `movie` (
  `mid` varchar(5) NOT NULL,
  `movName` varchar(25) NOT NULL,
  `hrs` int(11) NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`mid`, `movName`, `hrs`) VALUES
('m01', 'PK', 3),
('m02', 'Focus', 2);

-- --------------------------------------------------------

--
-- Table structure for table `shows`
--

CREATE TABLE IF NOT EXISTS `shows` (
  `date` date NOT NULL,
  `time` time NOT NULL,
  `mid` varchar(5) NOT NULL,
  `hid` varchar(3) NOT NULL,
  `seats` int(11) NOT NULL,
  PRIMARY KEY (`date`,`time`,`mid`,`hid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shows`
--

INSERT INTO `shows` (`date`, `time`, `mid`, `hid`, `seats`) VALUES
('2015-04-06', '13:00:00', 'm02', 'h01', 100),
('2015-04-06', '18:00:00', 'm02', 'h02', 100),
('2015-04-06', '20:00:00', 'm01', 'h02', 100),
('2015-04-06', '22:00:00', 'm01', 'h01', 100);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userid` varchar(50) NOT NULL,
  `pwd` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `pwd`, `email`) VALUES
('ajay kumar agrawal', '123', 'killerajay21@gmail.com'),
('subhodip', '123', 'subhodip.11@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
