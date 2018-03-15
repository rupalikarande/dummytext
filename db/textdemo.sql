-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2018 at 07:21 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dummy`
--

-- --------------------------------------------------------

--
-- Table structure for table `textdemo`
--

CREATE TABLE IF NOT EXISTS `textdemo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(256) NOT NULL,
  `Phone_No` varchar(20) NOT NULL,
  `DOB` varchar(20) NOT NULL,
  `Address` varchar(256) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `textdemo`
--

INSERT INTO `textdemo` (`id`, `Name`, `Phone_No`, `DOB`, `Address`, `City`, `Email`, `status`) VALUES
(1, '', '', '', '', '', '', 0),
(2, 'rupali k', '9561753446', '03/08/2018', 'satara', 'satara', 'sn@gmail.com', 0),
(3, '', '', '', '', '', '', 0),
(4, '', '', '', '', '', '', 0),
(5, '', '', '', '', '', '', 0),
(6, 'rupali k', '9850351531', '03/13/2018', 'satara', 'satara', 'rup@gmail.com', 0),
(7, '', '', '', '', '', '', 0),
(8, '', '', '', '', '', '', 0),
(9, 'omi', '7709066467', '03/12/2018', 'pune', 'pune', 'omi@gmail.com', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
