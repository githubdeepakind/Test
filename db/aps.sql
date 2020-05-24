-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 03, 2018 at 06:17 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `aps`
--
CREATE DATABASE IF NOT EXISTS `aps` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `aps`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_std_reg`
--

CREATE TABLE IF NOT EXISTS `tbl_std_reg` (
  `reg_id` int(11) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(50) DEFAULT NULL,
  `l_name` varchar(50) DEFAULT NULL,
  `dob` varchar(100) DEFAULT NULL,
  `mail` varchar(150) DEFAULT NULL,
  `contact` varchar(50) DEFAULT NULL,
  `sc_name` varchar(250) DEFAULT NULL,
  `u_course` varchar(100) DEFAULT NULL,
  `stream` varchar(100) DEFAULT NULL,
  `t_course` varchar(100) DEFAULT NULL,
  `reg_amt` varchar(100) DEFAULT NULL,
  `t_no` varchar(100) DEFAULT NULL,
  `hear` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`reg_id`),
  UNIQUE KEY `reg_id_UNIQUE` (`reg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=106 ;

--
-- Dumping data for table `tbl_std_reg`
--

INSERT INTO `tbl_std_reg` (`reg_id`, `f_name`, `l_name`, `dob`, `mail`, `contact`, `sc_name`, `u_course`, `stream`, `t_course`, `reg_amt`, `t_no`, `hear`) VALUES
(101, 'Deepak', 'Yadav', '1991-11-09', 'kr.deepak@hotmail.com', '9546205063', 'IMCC', 'PHP', 'Computer Science', 'PHP', '700', 'TSN001', 'News Paper'),
(102, 'Tippu', 'Sultan', '1990-01-01', 'tippu@gmail.com', '9934383980', 'St. Columba', 'I.Sc', 'Science', 'HTML', '500', 'TSN002', 'Facebook'),
(103, 'Arvind', 'Rana', '1992-03-13', 'arvindrana422@gmail.com', '9060195704', 'Inter Science College', 'B.Sc', 'Science', 'Java', '3000', 'TSN00103', 'Any Other'),
(104, 'Priya', 'Yadav', '1990-01-01', 'priya@gmail.com', '9934383980', 'Inter Science College', 'I.Sc', 'Science', 'Java', '700', 'TSN004', 'Google'),
(105, 'Arvind', 'Rana', '1992-03-13', 'arvindrana422@gmail.com', '9060195704', 'Inter Science College', 'B.Sc', 'Science', 'Java', '3000', 'TSN00103', 'Any Other');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
