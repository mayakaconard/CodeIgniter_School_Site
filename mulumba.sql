-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2018 at 03:41 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mulumba`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumini`
--

CREATE TABLE IF NOT EXISTS `alumini` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `salutation` varchar(10) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `idnumber` int(8) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `postal` varchar(255) NOT NULL,
  `edulevel` varchar(100) NOT NULL,
  `country` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `alumini`
--

INSERT INTO `alumini` (`id`, `salutation`, `fname`, `mname`, `lname`, `gender`, `idnumber`, `email`, `mobile`, `phone`, `postal`, `edulevel`, `country`) VALUES
(1, 'Prof.', 'CONARD', 'MAYAKA', 'OTOTO', 'Male', 32154678, 'conarditoh@gmail.com', '0750799920', '+254720258658', '190-50400, KAKAMEGA', 'University', 'Kenya');

-- --------------------------------------------------------

--
-- Table structure for table `board_of_management`
--

CREATE TABLE IF NOT EXISTS `board_of_management` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `message` varchar(120) NOT NULL,
  `pass` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `board_of_management`
--

INSERT INTO `board_of_management` (`id`, `title`, `first_name`, `surname`, `middle_name`, `position`, `message`, `pass`) VALUES
(1, 'Dr.', 'SAMWEL', 'KIMANZI', 'M', 'ChairMman', 'the school needs trinity', 'ba4d2cfb10a44d77f5e6bf187c815a73.jpg'),
(2, 'Dr.', 'ESTHER', 'MORAA', '', 'MEMBER', 'dedication is key', '7e0b9131a6b2dc315d3b4857a2d90a11.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `daily_qoutes`
--

CREATE TABLE IF NOT EXISTS `daily_qoutes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `daily_qoute` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `daily_qoutes`
--

INSERT INTO `daily_qoutes` (`id`, `daily_qoute`) VALUES
(1, 'the early bird catches the worm'),
(2, 'Better late than never'),
(3, 'education is the key to success'),
(4, 'He who slumbers has nothing to give to his kinship in future');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE IF NOT EXISTS `departments` (
  `dept_id` int(11) NOT NULL AUTO_INCREMENT,
  `department_name` varchar(50) NOT NULL,
  PRIMARY KEY (`dept_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`dept_id`, `department_name`) VALUES
(1, 'MATHEMATICS'),
(2, 'SCIENCES'),
(3, 'HUMANITIES'),
(4, 'GUIDANCE & CONSELLING'),
(5, 'GAMES AND SPORTS'),
(6, 'TECHNICALS'),
(7, 'BOARDING & ACOMMODATION'),
(8, 'ICT'),
(9, 'ACADEMICS'),
(10, 'LANGUAGES');

-- --------------------------------------------------------

--
-- Table structure for table `department_directors`
--

CREATE TABLE IF NOT EXISTS `department_directors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher` int(11) NOT NULL,
  `department` int(11) NOT NULL,
  `about` text NOT NULL,
  `objectives` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `department_directors`
--

INSERT INTO `department_directors` (`id`, `teacher`, `department`, `about`, `objectives`) VALUES
(2, 2, 1, ' The current clearance system of the university is a manual one. Efforts has been made to by the institution to replace the existing system manual process which makes the clearance so tedious and time consuming. Here, students have to visit all the clearance offices with a form for them to sign. Once these forms are signed, it proves that the student has been cleared.', ' process which makes the clearance so tedious and time consuming. Here, students have to visit all the clearance offices with a form for them to sign. Once these forms are signed, it proves that the student has been cleared.'),
(3, 1, 2, ' process which makes the clearance so tedious and time consuming. Here, students have to visit all the clearance offices with a form for them to sign. Once these forms are signed, it proves that the student has been cleared.', ' process which makes the clearance so tedious and time consuming. Here, students have to visit all the clearance offices with a form for them to sign. Once these forms are signed, it proves that the student has been cleared.'),
(4, 3, 8, ' Statement of the problem\r\nThe current clearance system of the university is a manual one. Efforts has been made to by the institution to replace the existing system manual process which makes the clearance so tedious and time consuming. Here, students have to visit all the clearance offices with a form for them to sign. Once these forms are signed, it proves that the student has been cleared. This process takes a couple of time to be completed and poses a lot of stress to both staff and students involved. In the manual system, the clearance forms are documented in a file cabinet. Each time the clearance form is needed, ', ' Statement of the problem\r\nThe current clearance system of the university is a manual one. Efforts has been made to by the institution to replace the existing system manual process which makes the clearance so tedious and time consuming. Here, students have to visit all the clearance offices with a form for them to sign. Once these forms are signed, it proves that the student has been cleared. This process takes a couple of time to be completed and poses a lot of ');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `dated` date NOT NULL,
  `date_posted` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `subject`, `message`, `dated`, `date_posted`) VALUES
(2, 'jhwgdhwd', 'ncwijfwhfwuiof', '2018-05-09', '2018-05-02 23:29:30');

-- --------------------------------------------------------

--
-- Table structure for table `image_gallery`
--

CREATE TABLE IF NOT EXISTS `image_gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photo` varchar(100) NOT NULL,
  `category_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `date_posted` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `image_gallery`
--

INSERT INTO `image_gallery` (`id`, `photo`, `category_id`, `description`, `date_posted`) VALUES
(2, 'fa0c12c085b902adf725fc8f0bfce4fc.PNG', 1, ' Student At Parade Alert for further instructions from the HOD', '0000-00-00 00:00:00'),
(3, '62e9307a53e7df88c26947c59cd9ad2a.jpg', 2, ' our new tuition block', '0000-00-00 00:00:00'),
(4, '29add6e4250e3f89349e34d3ef303935.PNG', 1, 'The football team ready to face their opponets', '0000-00-00 00:00:00'),
(5, '5ebec15491fe32bc18332c73c3e04e52.PNG', 1, ' students undertaking discussion with their teacher', '0000-00-00 00:00:00'),
(6, '930ea5758e0d62239bf4a84b01a02159.jpg', 2, ' our modern Library', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `news` text NOT NULL,
  `photo` varbinary(100) NOT NULL,
  `date_posted` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `news`, `photo`, `date_posted`) VALUES
(5, ' KCSE Exams 2018', ' St MAthias mulumba emerges the leading in 2018 KCSE exams. Hurray!!!!!!', 'c8d5f1ce72ab828bdea142400d2c35fb.jpg', '2018-05-05 23:19:17');

-- --------------------------------------------------------

--
-- Table structure for table `physical_facilities`
--

CREATE TABLE IF NOT EXISTS `physical_facilities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photo` varbinary(100) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pta_members`
--

CREATE TABLE IF NOT EXISTS `pta_members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `position` varchar(100) NOT NULL,
  `image` varbinary(100) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pta_members`
--

INSERT INTO `pta_members` (`id`, `title`, `first_name`, `surname`, `middle_name`, `position`, `image`, `message`) VALUES
(1, 'Dr.', 'ISAIAH', 'MUTETHIA', 'KAIRU', 'ChairMman', '5cad2d852dab20f280ede95af50b1cc4.jpg', ' ncaiufqa');

-- --------------------------------------------------------

--
-- Table structure for table `student_leaders`
--

CREATE TABLE IF NOT EXISTS `student_leaders` (
  `st_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `surname` varchar(50) DEFAULT NULL,
  `level` varchar(10) NOT NULL,
  `position` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `message` varchar(120) NOT NULL,
  PRIMARY KEY (`st_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `student_leaders`
--

INSERT INTO `student_leaders` (`st_id`, `first_name`, `middle_name`, `surname`, `level`, `position`, `image`, `message`) VALUES
(3, 'CONARD', '', 'MAYAKA', '4', 'STUDENT LEADER', 'd6c577a9fd2db2c249a96e6ab113718f.jpg', 'coding is sweet'),
(4, 'SAMWEL', '', 'OKELO', '3', 'Games Captain', '42b5622029a18fb07b5131f277a47e17.jpg', 'too much work makes jack a dull boy'),
(5, 'SHARON', '', 'MUTETHIA', '4', 'SPIRITUAL LEADER', 'b2c9e1ac7f66fae674c71e4ff309b089.jpg', ' Put God first in your endevers');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE IF NOT EXISTS `teachers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `surname` varchar(50) NOT NULL,
  `combination` varchar(50) NOT NULL,
  `passport` varbinary(1000) NOT NULL,
  `message` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `title`, `first_name`, `middle_name`, `surname`, `combination`, `passport`, `message`) VALUES
(1, 'MR.', 'CONARD', 'M', 'MAYAKA', 'MATHEMATHICS/PHYSICS', '870f8d48dedac4df70cb49a388a3850f.jpg', ' yyyyea'),
(2, 'Mrs.', 'MAYAKA', 'M', 'BLESSING', 'CHEMISTRY/PHYSICS', 'bbf062de32dd3f414618b6662ddb88ae.jpg', ' madam wa nguvu'),
(3, 'Mrs.', 'SHARON', '', 'KIMANZI', 'BIOLOGY/CHEMISTRY', '85a5252208e031ce67f8bcf6339f49da.jpg', 'process which makes the clearance so tedious and time consuming. ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
