-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 18, 2017 at 10:54 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `concert`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `eid` int(10) NOT NULL AUTO_INCREMENT,
  `e_name` varchar(25) NOT NULL,
  `e_description` varchar(255) NOT NULL,
  `e_banner` varchar(255) NOT NULL,
  `e_venue` varchar(200) NOT NULL,
  `e_startdate` date NOT NULL,
  `e_enddate` date NOT NULL,
  `e_seatavail` int(200) NOT NULL,
  `e_url` int(11) NOT NULL,
  `e_contact` varchar(15) NOT NULL,
  `e_contact1` varchar(15) NOT NULL,
  `b_url` varchar(20) NOT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eid`, `e_name`, `e_description`, `e_banner`, `e_venue`, `e_startdate`, `e_enddate`, `e_seatavail`, `e_url`, `e_contact`, `e_contact1`, `b_url`) VALUES
(1, 'concert', 'Concert by renowned singers like SHAN, ALKA YAGNIK', 'C:\\wamp\\www\\Concert\\Concert\\images\\g1.jpg', 'BVB Vidyanagar Hubbali', '2017-05-24', '2017-05-24', 200, 0, '123456', '987654', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
