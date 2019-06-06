-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 09, 2014 at 08:58 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `school_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `calendar_events`
--

CREATE TABLE IF NOT EXISTS `calendar_events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_title` varchar(25) DEFAULT NULL,
  `event_shortdesc` varchar(255) DEFAULT NULL,
  `event_start` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `calendar_events`
--

INSERT INTO `calendar_events` (`id`, `event_title`, `event_shortdesc`, `event_start`) VALUES
(1, '\r\n			Final Exam', 'Summer14 final examination', '1980-08-20 01:00:00'),
(2, '\r\n			', '', '1980-08-20 01:00:00'),
(3, '\r\n			Summer14 Exam', 'Final examination', '2014-08-01 01:00:00'),
(4, '\r\n			', '', '2010-08-12 01:15:00'),
(5, '\n			Exam Recess', '', '2014-08-06 01:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `sl_number` int(3) NOT NULL,
  `userlevel` int(1) NOT NULL,
  `id` int(8) NOT NULL,
  `username` text NOT NULL,
  `password` varchar(8) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`sl_number`, `userlevel`, `id`, `username`, `password`, `email`) VALUES
(1, 2, 10301012, 'Fahmida', '123', 'fahmida.zhn@gmail.com'),
(2, 3, 10301015, 'Nusrat', '123', 'nusrat.bracu@gmail.com'),
(3, 1, 10301014, 'Prima', '123', 'prima.tass@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `staff_info`
--

CREATE TABLE IF NOT EXISTS `staff_info` (
  `sl_number` int(3) NOT NULL AUTO_INCREMENT,
  `username` int(8) NOT NULL,
  `name` text NOT NULL,
  PRIMARY KEY (`sl_number`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `staff_info`
--

INSERT INTO `staff_info` (`sl_number`, `username`, `name`) VALUES
(1, 10301012, 'Fahmida Zahan'),
(2, 10301014, 'Nusrat Mahmud');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE IF NOT EXISTS `student_info` (
  `first name` int(11) NOT NULL,
  `middle name` int(11) NOT NULL,
  `last name` int(11) NOT NULL,
  `father's name` int(11) NOT NULL,
  `mother's name` int(11) NOT NULL,
  `gender` int(11) NOT NULL,
  `nationality` int(11) NOT NULL,
  `religion` int(11) NOT NULL,
  `blood group` int(11) NOT NULL,
  `phone no` int(11) NOT NULL,
  `permanent address` int(11) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info`
--


-- --------------------------------------------------------

--
-- Table structure for table `teacher_info`
--

CREATE TABLE IF NOT EXISTS `teacher_info` (
  `id` int(8) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` int(11) NOT NULL,
  `fax` int(11) NOT NULL,
  `gender` text NOT NULL,
  `addressline1` varchar(20) NOT NULL,
  `addressline2` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_info`
--

INSERT INTO `teacher_info` (`id`, `firstname`, `lastname`, `email`, `mobile`, `fax`, `gender`, `addressline1`, `addressline2`) VALUES
(10301000, 'Bayzid', 'Mostofa', 'bayzid_mostofa@yahoo.com', 1920787929, 29512100, 'Male', 'House-2 Street-14 se', 'Lake Circus'),
(10301011, 'Aziz', 'Rahman', 'aziz@gmail.com', 1671024312, 95121073, 'Male', 'Sector 3 North Tower', 'Uttara'),
(10301012, 'Fahmida', 'Zahan', 'fahmida.zhn@gmail.com', 1928370882, 95121073, 'Female', 'House-10 Road-16', 'Nikunja-2'),
(10301014, 'Nusrat', 'Mahmud', 'nusrat.bracu@gmail.com', 1671040338, 95121073, 'Female', 'Apartment-65 Shelter', 'Shyamoli'),
(10301017, 'Sadia', 'Afrin', 'sadia@gmail.com', 1928370882, 95121073, 'Female', 'House-10 Road-16', 'Nikunja-2'),
(10321003, 'Amanna', 'Nawshin', 'nawshin.amanna@gmail.com', 1724684988, 25232110, 'Female', 'House14 Army Housing', 'Cantonment');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_level` bigint(2) NOT NULL DEFAULT '4',
  `first_name` varchar(100) COLLATE utf8_bin NOT NULL,
  `m_name` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `last_name` varchar(100) COLLATE utf8_bin NOT NULL,
  `father_name` varchar(100) COLLATE utf8_bin NOT NULL,
  `mother_name` varchar(100) COLLATE utf8_bin NOT NULL,
  `gender` varchar(100) COLLATE utf8_bin NOT NULL,
  `nationality` varchar(100) COLLATE utf8_bin NOT NULL,
  `religion` varchar(100) COLLATE utf8_bin NOT NULL,
  `blood_group` varchar(100) COLLATE utf8_bin NOT NULL,
  `phone_no` varchar(100) COLLATE utf8_bin NOT NULL,
  `permanent_address` varchar(100) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `salt` varchar(40) COLLATE utf8_bin NOT NULL,
  `password` varchar(40) COLLATE utf8_bin NOT NULL,
  `bio` text COLLATE utf8_bin,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_level`, `first_name`, `m_name`, `last_name`, `father_name`, `mother_name`, `gender`, `nationality`, `religion`, `blood_group`, `phone_no`, `permanent_address`, `email`, `salt`, `password`, `bio`) VALUES
(1, 1, 'admin', NULL, 'user', '', '0', '', '', '', '', '', '', 'admin@admin.com', '0f38586bae2b8e4adc8eafda1b0373cacabeebab', 'ef07bd904964fbe14d188c23f16ef1c6c5fb5769', NULL),
(2, 2, 'staff', NULL, 'user', '', '0', '', '', '', '', '', '', 'staff@staff.com', 'ad37f2ffe3c920922cefaf299c81bcfd456607d4', '5c360953c9dfea948a6c7b346c038e8757ba25be', NULL),
(3, 4, 'student', NULL, 'user', '', '0', '', '', '', '', '', '', 'student@student.com', '55b3a0b5585e06d1671cafedd021fbd223099d8f', '2eb1bd018ea4ad59e53dbef634a99b22c8cc7f57', NULL),
(4, 3, 'teacher', NULL, 'user', '', '0', '', '', '', '', '', '', 'teacher@teacher.com', '0503906575f5d107e73ec2a54797b1f6937504d6', 'e7342a39c22622cbdc196178b168f9660901ac34', NULL),
(5, 4, 'marzana', NULL, 'amin', '', '0', '', '', '', '', '', '', 'shormeeamin7@gmail.com', '4fa7e889c652bae66531afbfff9f001b8c7ae889', '37cd47bb51075fe2dfe9345664263af945c08938', NULL),
(6, 4, 'aaa', 'bbb', 'ccc', 'ddd', 'eee', 'fff', 'ggg', 'hhh', 'iii', 'jjj', 'kkk', 'anika@gmail.com', '7793f5a48ac4067a43efebe8fc79121e17742ab8', 'b5f59675e6ea248d626adebdc258f614b1062240', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_level`
--

CREATE TABLE IF NOT EXISTS `users_level` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `level` varchar(255) COLLATE utf8_bin NOT NULL,
  `login_level` int(4) NOT NULL,
  `permission` enum('on','off') COLLATE utf8_bin NOT NULL DEFAULT 'on',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users_level`
--

INSERT INTO `users_level` (`id`, `level`, `login_level`, `permission`) VALUES
(1, 'admin', 1, 'on'),
(2, 'Prouser', 2, 'on'),
(3, 'Teacher', 3, 'on'),
(4, 'User', 4, 'on');
