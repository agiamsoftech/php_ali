-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 01, 2017 at 08:15 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `php_ali`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `admin_id` varchar(100) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `off_password` varchar(100) NOT NULL,
  `alt_email` varchar(200) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `linked_in` varchar(255) NOT NULL,
  `mobile_no` varchar(50) NOT NULL,
  `phone_no` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `zip` varchar(6) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `add_date` datetime NOT NULL,
  `contactus` varchar(100) NOT NULL,
  `feedback` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_id`, `admin_name`, `email`, `password`, `off_password`, `alt_email`, `facebook`, `twitter`, `linked_in`, `mobile_no`, `phone_no`, `address`, `country`, `state`, `city`, `zip`, `status`, `add_date`, `contactus`, `feedback`, `message`) VALUES
(1, 'admin', 'ALI', 'info@ali.in', 'password', 'password', 'info@ali.in', 'http://www.facebook.com/', 'https://twitter.com/', 'http://www.linkedin.com/', '7050336114', '0123456789', 'B.N.R. Nadi Dhowra, Post-Kustore, Dhanbad', 'India', '16', 'Dhanbad', '876536', 1, '2016-12-22 00:00:00', 'ag.agakbar@gmail.com', 'ag.agakbar@gmail.com', 'Wel Come to Our Site');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `city_id` int(11) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(255) NOT NULL,
  `city_desc` varchar(255) NOT NULL,
  PRIMARY KEY (`city_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`, `city_desc`) VALUES
(1, 'Dhanbad', ''),
(2, 'Baliyapur', ''),
(3, 'Govindpur', '');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `country_name` varchar(255) NOT NULL,
  `country_desc` varchar(255) NOT NULL,
  PRIMARY KEY (`country_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`, `country_desc`) VALUES
(1, 'India', ''),
(2, 'Pakistan', ''),
(3, 'USA', ''),
(4, 'UAE', '');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(255) NOT NULL,
  `course_desc` varchar(255) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `course_desc`) VALUES
(1, 'BBA', ''),
(2, 'MBA', ''),
(3, 'BCA', ''),
(4, 'MCA', ''),
(5, 'BA', ''),
(6, 'MA', '');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `state_id` int(11) NOT NULL AUTO_INCREMENT,
  `state_name` varchar(255) NOT NULL,
  `state_desc` varchar(255) NOT NULL,
  PRIMARY KEY (`state_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `state_name`, `state_desc`) VALUES
(1, 'Jharkhand', ''),
(2, 'Bihar', ''),
(3, 'UP', ''),
(4, 'MP', '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `st_id` int(11) NOT NULL AUTO_INCREMENT,
  `st_reg` int(11) NOT NULL,
  `st_name` varchar(255) NOT NULL,
  `st_father` varchar(255) NOT NULL,
  `st_add1` varchar(255) NOT NULL,
  `st_add2` varchar(255) NOT NULL,
  `st_city` varchar(255) NOT NULL,
  `st_state` varchar(255) NOT NULL,
  `st_country` varchar(255) NOT NULL,
  `st_nationality` varchar(255) NOT NULL,
  `st_gender` varchar(255) NOT NULL,
  `st_qul` varchar(255) NOT NULL,
  `st_course` varchar(255) NOT NULL,
  `st_photo` varchar(255) NOT NULL,
  `st_hobbies` varchar(255) NOT NULL,
  `st_mobile` varchar(255) NOT NULL,
  PRIMARY KEY (`st_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`st_id`, `st_reg`, `st_name`, `st_father`, `st_add1`, `st_add2`, `st_city`, `st_state`, `st_country`, `st_nationality`, `st_gender`, `st_qul`, `st_course`, `st_photo`, `st_hobbies`, `st_mobile`) VALUES
(32, 0, 'Rajiv', 'Raj Kumar', 'Bajaj camp', 'Bajaj Camp', '2', '2', '1', 'Indian', 'male', '5', '2', 'DSC02257_1484748404.JPG', 'Singing', '8282131456'),
(31, 0, 'Md Irfan Ansari', 'Md Ali Akbar', 'Shimla Bahal Basti\r\nPost-Bhagaban\r\nPs-Borragadh\r\nDist-Dhanbad', 'Shimla Bahal Basti\r\nPost-Bhagaban\r\nPs-Borragadh\r\nDist-Dhanbad', '1', '1', '1', 'Indian', 'male', '3,4', '4', 'Picture sonu 001_1484545727.jpg', 'Playing Ludo', '879702192'),
(40, 0, 'fasdfa', 'asdfsaf', 'dasfsdfs', 'sdfsdafsa', '1', '4', '2', 'sdfsdfsdfsd', 'male', '1,3', '3', 'BHATIJA & BHATIJI (MD SHAQUIB & ATIBA SHAKIL)_1491014558.jpg', 'sadfsadfsdaf', 'sdfsdfsdafsdasadsda'),
(27, 0, 'asdfsda', 'dsafasd', 'dfsadfsda', 'dfsadfsd', '2', '1', '4', 'sfsdafsad', 'female', '5,1', '1', 'Penguins_1484385957.jpg', 'sadfasd', 'dasfsadfads'),
(39, 0, 'fsadfs', 'asfasd', '', '', '2', '2', '1', '', 'male', '1,3', '1', '1SONU_1489769471.JPG', 'safds', ''),
(30, 0, 'Mohsin Khan', 'Sufed Khan', 'B.N.R. Nadi Dhowra\r\nPost-Kustore\r\nPS-Kenduadih\r\nDt-Dhanbad', 'B.N.R. Nadi Dhowra\r\nPost-Kustore\r\nPS-Kenduadih\r\nDt-Dhanbad', '1', '1', '1', 'Indian', 'male', '3', '4', 'DSC02799_1484545517.JPG', 'Playing Cricket', '8797894563'),
(33, 0, 'Mohsin Khan', 'sufed Khan', 'bnr', 'bnr ', '1', '1', '1', 'Indian', 'male', '5,1', '6', 'DSC02797_1485270656.JPG', 'singing', '8281177285352'),
(34, 0, 'Md Sonu ', 'REYAz ', 'BNR', 'VNR', '1', '1', '2', 'Pakistan', 'male', '5', '4', 'DSC02803_1485272203.JPG', 'Singing', 'singing'),
(35, 0, 'chand', 'thakur', 'raj ganj', 'raj gan', '1', '1', '1', 'ind', 'male', '5', '1', '2CHAND_1485273210.JPG', 'Patang udana', '7050336114'),
(36, 0, 'rahul  ', 'thakur sharma', 'rajiv chowk', 'chowk jh', '2', '3', '4', 'Arab', 'male', '1', '6', 'DSC02704_1485273397.JPG', 'sona', '1203145607'),
(37, 0, 'aasdfasdfasfd', 'adfasdfsadf', 'asdfasdfsad', 'asdfasdfsd', '2', '1', '1', 'adfasdfs', 'male', '5,1', '3', '1SONU_1489748272.JPG', 'asdfas', 'asdfasdf'),
(38, 0, 'asdfasdf', 'adfasdfsa', 'asdfads', 'adsfasd', '2', '2', '1', 'adfasdf', 'male', '5,1', '1', '3AMAN DANISH BITTU SHARIQUE_1489748420.jpg', 'adfas', 'sadfsdaf');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_type` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `car_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alt_email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `alt_mobile` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `state` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  `contact_person` varchar(255) NOT NULL,
  `regd_date` datetime NOT NULL,
  `active_status` tinyint(1) NOT NULL,
  `email_confirm` tinyint(1) NOT NULL,
  `total_logins` int(11) NOT NULL,
  `last_login` datetime NOT NULL,
  `current_login` datetime NOT NULL,
  `code` varchar(255) NOT NULL,
  `random` bigint(20) NOT NULL,
  `profile_status` int(1) NOT NULL,
  `pointsearned` float NOT NULL COMMENT 'total points earned',
  `referedby` int(11) NOT NULL,
  `refbytype` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `users`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
