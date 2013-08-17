-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 19, 2013 at 01:00 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(30) NOT NULL DEFAULT 'myname',
  `EMAIL` varchar(60) NOT NULL,
  `PASSWD` varchar(32) NOT NULL,
  `LOGDATE` date NOT NULL,
  `IMAGE` varchar(30) NOT NULL DEFAULT 'defimg.jpg',
  `active` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `NAME`, `EMAIL`, `PASSWD`, `LOGDATE`, `IMAGE`, `active`) VALUES
(1, 'sujit nag', 'sujitnag2011@gmail.com', 'sujitnag', '2013-07-14', '\r\n1BMU.jpeg', 1),
(2, 'মৌরসি নাগ', 'mourosi@gmail.com', 'mourosi', '2013-07-08', '2BMU.jpeg', 1),
(14, 'fyttf', 'sujitnag2011@gmail.org.in', 'fhgf', '2013-07-15', 'defimg.jpg', 0),
(15, '&#2478;&#2494;&#2478;&#2494;', 'dd@gmail.com', 'dddd', '2013-07-15', '15BMU.jpeg', 1),
(16, 'mmmm', 'ff@gmail.com', 'ghghg', '2013-07-15', '16BMU.jpeg', 0),
(17, 'fff', 'new@gmail.com', 'newww', '2013-07-16', '17BMU.jpeg', 0),
(18, 'dipk ghose', 'dod@gmail.com', 'dip', '2013-07-16', '18BMU.jpeg', 1),
(19, 'musumi ', '', '', '2013-07-17', 'defimg.jpg', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
