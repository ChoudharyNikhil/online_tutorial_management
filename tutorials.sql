-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 16, 2014 at 04:53 PM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tutorial`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_content`
--

CREATE TABLE IF NOT EXISTS `tbl_content` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `subj_id` int(5) DEFAULT NULL,
  `subtopic_id` int(5) DEFAULT NULL,
  `heading` text NOT NULL,
  `content` longtext NOT NULL,
  `example` longtext NOT NULL,
  `snapshot` varchar(100) NOT NULL,
  `vediolink` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `tbl_content`
--

INSERT INTO `tbl_content` (`id`, `subj_id`, `subtopic_id`, `heading`, `content`, `example`, `snapshot`, `vediolink`) VALUES
(20, 16, 12, 'CORE JAVA', '', '', 'image/CORE JAVA.JPG', 'www.youtube.com/embed/-ZsVhMN-J_A'),
(21, 16, 13, 'SERVLET', '', '', 'image/SERVLET.PNG', 'www.youtube.com/embed/tkFRGdUgCsE'),
(19, 15, 23, 'YII', '', '', 'image/YII.JPG', 'www.youtube.com/embed/raO6sfO8S5k'),
(15, 15, 9, 'WORD PRESS', '', '', 'image/WORDPRESS.JPG', 'www.youtube.com/embed/jexUS43sdeQ'),
(16, 15, 10, 'JOOMLA', '', '', 'image/JOOMLA.PNG', 'www.youtube.com/embed/C-_l0TLjtzw'),
(17, 15, 11, 'CODEGINITER', '', '', 'image/CODEIGNITER.JPG', 'www.youtube.com/embed/9hRNFgSLLAQ'),
(18, 15, 22, 'MEGENTO', '', '', 'image/MAGENTO.JPG', 'www.youtube.com/embed/nSxq-eJ0VvY'),
(14, 15, 8, 'CORE PHP', '', '', 'image/PHP1.JPG', 'www.youtube.com/embed/Zz16_xnE-kg'),
(22, 16, 14, 'JSP', '', '', 'image/JSP.JPG', 'www.youtube.com/embed/Q0WyiOfOGCc'),
(23, 16, 15, 'STRUTS', '', '', 'image/STRUCT.JPG', 'www.youtube.com/embed/f46WEeM8HTA'),
(24, 16, 24, 'HIBERNET', '', '', 'image/HIBERNATE.PNG', 'www.youtube.com/embed/wNT-EZsaC98'),
(25, 16, 25, 'J2ME', '', '', 'image/J2ME.PNG', 'www.youtube.com/embed/-65VWxkio-4'),
(26, 17, 16, 'C#', '', '', 'image/C#.JPG', 'www.youtube.com/embed/OBsGRqXzOhk'),
(27, 17, 17, 'ASP.NET', '', '', 'image/ASP.NET.JPG', 'www.youtube.com/embed/3AYoipyqOkQ'),
(28, 17, 18, 'MVC', '', '', 'image/MVC NET.JPG', 'www.youtube.com/embed/KAKxm4eQP24'),
(29, 17, 26, 'SQLSERVER', '', '', 'image/SQLLOGO.JPG', 'www.youtube.com/embed/Kp3dS-T16x4'),
(30, 17, 27, 'VB.NET', '', '', 'image/VB.NET.JPG', 'www.youtube.com/embed/hkcO_M9gcNw'),
(31, 18, 19, 'SIMPLE APP', '', '', 'image/ANDROID BASIC.JPG', 'www.youtube.com/embed/3Nv6TV4cyFY'),
(32, 18, 20, 'MULTIMEDIA APP', '', '', 'image/MULTIMEDIA.JPG', 'www.youtube.com/embed/davcYvCJ63w'),
(33, 18, 21, 'DYNAMIC APP', '', '', 'image/DYNAMIC APP.JPG', 'www.youtube.com/embed/axjbUYY_-Zk'),
(34, 18, 28, 'OS', '', '', 'image/OS.JPG', 'www.youtube.com/embed/f7TD3Z03l2I'),
(35, 18, 29, 'SECURITY', '', '', 'image/ANDROID-SECURITY.JPG', 'www.youtube.com/embed/tKJiSjVk8NA');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE IF NOT EXISTS `tbl_feedback` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `email` varchar(25) NOT NULL,
  `feedback` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`id`, `email`, `feedback`) VALUES
(1, 'shradhaj93@gmail.com', 'this is an excellent website'),
(2, 'gauravk@gmail.com', 'this is a good website');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subj`
--

CREATE TABLE IF NOT EXISTS `tbl_subj` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `sub_name` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `tbl_subj`
--

INSERT INTO `tbl_subj` (`id`, `sub_name`) VALUES
(15, 'PHP'),
(16, 'JAVA'),
(17, 'DOTNET'),
(18, 'ANDROID');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subtopic`
--

CREATE TABLE IF NOT EXISTS `tbl_subtopic` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `subj_id` int(5) NOT NULL,
  `topic_name` varchar(30) NOT NULL,
  `hits` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `tbl_subtopic`
--

INSERT INTO `tbl_subtopic` (`id`, `subj_id`, `topic_name`, `hits`) VALUES
(10, 15, 'JOOMLA', 0),
(9, 15, 'WORD PRESS', 0),
(8, 15, 'CORE PHP', 0),
(11, 15, 'CODEGINITER', 0),
(12, 16, 'CORE JAVA', 0),
(13, 16, 'SERVLET', 0),
(14, 16, 'JSP', 0),
(15, 16, 'STRUCTS', 0),
(16, 17, 'C#', 0),
(17, 17, 'ASP.NET', 0),
(18, 17, 'MVC', 0),
(19, 18, 'SIMPLE APP', 0),
(20, 18, 'MULTIMEDIA APP', 0),
(21, 18, 'DYNAMIC APP', 0),
(22, 15, 'MEGENTO', 0),
(23, 15, 'YII', 0),
(24, 16, 'HIBERNET', 0),
(25, 16, 'J2ME', 0),
(26, 17, 'SQLSERVER', 0),
(27, 17, 'VB.NET', 0),
(28, 18, 'OS', 0),
(29, 18, 'SECURITY', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `email` varchar(50) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `dob` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `first_name`, `last_name`, `pass`, `status`, `email`, `gender`, `dob`) VALUES
(9, 'ankit', 'kumar', '1234', 1, 'ankit@gmail.com', 'm', '1990-06-25');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
