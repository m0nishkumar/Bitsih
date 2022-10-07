-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 07, 2022 at 09:30 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hackathon`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

DROP TABLE IF EXISTS `admin_users`;
CREATE TABLE IF NOT EXISTS `admin_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$aXV2rd1fVuByIDTk9XXDdulpRyAsh3dJAgQx/VdY4p0MkeZ4uV2PK');

-- --------------------------------------------------------

--
-- Table structure for table `final_participants`
--

DROP TABLE IF EXISTS `final_participants`;
CREATE TABLE IF NOT EXISTS `final_participants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `team` varchar(80) NOT NULL,
  `email` varchar(100) NOT NULL,
  `problem` int(11) NOT NULL,
  `link` longtext NOT NULL,
  `status` varchar(80) NOT NULL DEFAULT 'Initiated',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `final_participants`
--

INSERT INTO `final_participants` (`id`, `team`, `email`, `problem`, `link`, `status`) VALUES
(1, 'Sleek', 'allwin.cs21@bitsathy.ac.in', 101, 'http://www.agarampublicschool.in/', 'Accepted'),
(2, 'Sleek', 'allwin.cs21@bitsathy.ac.in', 102, 'http://www.agarampublicschool.in/', 'Initiated');

-- --------------------------------------------------------

--
-- Table structure for table `lab_count`
--

DROP TABLE IF EXISTS `lab_count`;
CREATE TABLE IF NOT EXISTS `lab_count` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lab_name` varchar(100) NOT NULL,
  `count` int(11) NOT NULL DEFAULT '0',
  `final_count` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `lab_name_UNIQUE` (`lab_name`)
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lab_count`
--

INSERT INTO `lab_count` (`id`, `lab_name`, `count`, `final_count`) VALUES
(1, 'APPAREL MADE-UPS AND HOME FURNISHINGS LAB', 0, 0),
(2, 'ART AND DESIGN LABORATORY', 0, 0),
(3, 'ARTIFICIAL INTELLIGENCE - PRODUCT DEVELOPMENT', 0, 0),
(4, 'BIO PROSPECTING LAB', 0, 0),
(5, 'BIOPOLYMER AND BIOMATERIAL SYNTHESIS AND ANAYLTICAL TESTING', 0, 0),
(6, 'BIOPROCESS AND BIOPRODUCTS LAB', 0, 0),
(7, 'BLOCKCHAIN TECHNOLOGY', 0, 0),
(8, 'CLOUD COMPUTING', 0, 0),
(9, 'COMMUNICATION PROTOCOL', 0, 0),
(10, 'CYBER SECURITY', 0, 0),
(11, 'DATA SCIENCE - INDUSTRIAL APPLICATIONS', 0, 0),
(12, 'ELECTRICAL DRIVES AND AUTOMATION', 0, 0),
(13, 'ELECTRICAL PRODUCT DEV LAB', 0, 0),
(14, 'ELECTRONIC PRODUCT DEV LAB', 0, 0),
(15, 'ELECTRONIC SYSTEM FOR WILDLIFE CONSERVATION', 0, 0),
(16, 'EMBEDDED TECHNOLOGY', 0, 0),
(17, 'ENERGY AND THERMAL PRODUCT DESIGN & DEVELOPMENT LAB', 0, 0),
(18, 'ENERGY STORAGE & CONVERSION', 0, 0),
(19, 'FUNCTIONAL FOOD & NUTRACEUTICALS', 0, 0),
(20, 'FUNGAL BIODIVERSITY AND BIO- RESOURCES LABORATORY', 0, 0),
(21, 'HACKATHON LAB', 0, 0),
(22, 'AI BASED INDUSTRIAL AUTOMATION', 0, 0),
(23, 'INDUSTRIAL DESIGN', 0, 0),
(24, 'INDUSTRIAL IOT', 0, 0),
(25, 'IOT', 0, 0),
(26, 'MANUFACTURING & FABRICATION', 0, 0),
(27, 'MICRO PROTOTYPING LAB', 0, 0),
(28, 'MOBILE AND WEB APP FOR SOFTWARE APPLICATIONS', 1, 0),
(29, 'MODELLING & ANALYSIS', 0, 0),
(30, 'DESIGN AND PROTOTYPING', 0, 0),
(31, 'MOLECULAR DIAGNOSTICS & BIO MOLECULE CHARACTERISATION', 0, 0),
(32, 'NEW PRODUCT DEVELOPMENT LAB', 0, 0),
(33, 'INTELLIGENT COMMUNICATION AND EMBEDDED SYSTEMS LAB', 0, 0),
(34, 'PRINTED CIRCUIT BOARD (PCB) LAB', 0, 0),
(35, 'RENEWABLE ENERGY AND HVAC PRODUCTS', 0, 0),
(36, 'ROBOTICS & AUTOMATION LAB', 0, 0),
(37, 'INTEGRATED AI & SENSORS', 0, 0),
(38, 'SIGNAL PROCESSING FOR HEALTH CARE LAB', 0, 0),
(39, 'SMART AGRICULTURE', 0, 0),
(40, 'SMART AND HEALTHY INFRASTRUCTURE', 0, 0),
(41, 'ROBOTIC PROCESS AUTOMATION LAB', 0, 0),
(42, 'SUSTAINABLE CIVIL ENGINEERING MATERIALS LAB', 0, 0),
(43, 'TECHNICAL TEXTILE', 0, 0),
(44, 'UNMANNED AERIAL VEHICLE', 0, 0),
(45, 'UNMANNED UNDERWATER VEHICLE', 0, 0),
(46, 'VIRTUAL INSTRUMENTATION LAB', 0, 0),
(47, 'VIRTUAL REALITY / AUGMENTED REALITY', 0, 0),
(48, 'VISION ENGINEERING LAB', 0, 0),
(49, 'INTELLIGENCE INNOVATION LAB', 0, 0),
(50, 'SMART SENSOR INTELLIGENT', 0, 0),
(51, 'BIOMEDICAL SYSTEMS', 0, 0),
(52, 'ELECTRICAL INTEGRATED DRIVES', 0, 0),
(53, 'ARTIFICIAL INTELLIGENCE - TECHNOLOGIES', 0, 75),
(54, 'ARTIFICIAL INTELLIGENCE - INDUSTRIAL APPLICATIONS', 0, 0),
(55, 'ARTIFICIAL INTELLIGENCE - SOFTWARE SOLUTIONS', 0, 0),
(56, 'DATA SCIENCE - COMPUTATIONAL INTELLIGENCE', 0, 0),
(57, 'DATA SCIENCE - BIG DATA ANALYTICS', 0, 0),
(58, 'DATA SCIENCE - EXPERT SYSTEMS', 0, 25),
(59, 'WEB DESIGN AND DEVELOPMENT', 0, 0),
(60, 'SILK FASHION LAB', 0, 0),
(61, 'INDUSTRIAL WEB AND MOBILE APP DEVELOPMENT', 0, 0),
(62, 'INTEGRATED SMART BUILDINGS LAB', 0, 0),
(63, 'E-MOBILITY LAB', 0, 0),
(64, 'HUMAN CENTERED AI LAB', 0, 0),
(65, 'COMPUTATIONAL BIOLOGY LAB', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `problems`
--

DROP TABLE IF EXISTS `problems`;
CREATE TABLE IF NOT EXISTS `problems` (
  `id` int(11) NOT NULL DEFAULT '1000',
  `title` mediumtext NOT NULL,
  `brief` longtext NOT NULL,
  `solution` longtext NOT NULL,
  `faculty` varchar(80) NOT NULL,
  `count` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `problems`
--

INSERT INTO `problems` (`id`, `title`, `brief`, `solution`, `faculty`, `count`) VALUES
(101, 'ON DUTY / LEAVE Portal', 'To develop an application for facilitating the leave/ON DUTY approval process inside the campus and communicating the same to the parents in real time through SMS.', 'ON DUTY/ LEAVE requisition is submitted by the students detailing the necessity of ON DUTY / LEAVE. Once submitted, the approval form should be forwarded to Special Lab Incharge, Mentor and Special Lab Head sequentially. Upon the approval of the various heads, finally the form should be forwarded to the Dean.                  Once the Dean approves the ON DUTY/ LEAVE, the concern students should be intimated automatically about the approval / cancellation through SMS/ Mail.                 When the student leave the campus, the detail of the student (In/Out Time, place, reason) have to be communicated to the parents through SMS.', 'Mrs. M. Karthiga, AP/CSE', 1),
(102, 'Parent Interactive Portal', 'To develop a mobile application for communicating the complete details about their children in a single portal.', 'Login credential for both parents and mentors (Admin). For parents, login is facilitated by their registered mobile number. For mentors, login through their bitsathy mail Id. Once the parents, logged in, complete details about their son/daughter should be visible. Complete Details include: Mark details, Attendance details, Competition participated details, Rewards earned, Skill obtained, Placement attended details, Offer letter - Internship/Placement, ON DUTY details, BITSATHY event photos, Subject handing faculties details along with Timetable, Daily News Link.', 'Dr. P. Dhivya, AP/CSE', 1);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `team` varchar(80) NOT NULL,
  `email` varchar(100) NOT NULL,
  `problem` mediumtext NOT NULL,
  `link` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `team`, `email`, `problem`, `link`) VALUES
(1, 'Sleek', 'allwin.cs21@bitsathy.ac.in', '101', 'http://www.agarampublicschool.in/'),
(2, 'Sleek', 'anusuya.cs21@bitsathy.ac.in', '101', 'http://www.agarampublicschool.in/'),
(3, 'Sleek', 'kavinkumar.cs21@bitsathy.ac.in', '101', 'http://www.agarampublicschool.in/'),
(4, 'Sleek', 'monishkumar.cs21@bitsathy.ac.in', '101', 'http://www.agarampublicschool.in/'),
(5, 'Sleek', 'allwin.cs21@bitsathy.ac.in', '102', 'http://www.agarampublicschool.in/'),
(6, 'Sleek', 'anusuya.cs21@bitsathy.ac.in', '102', 'http://www.agarampublicschool.in/'),
(7, 'Sleek', 'kavinkumar.cs21@bitsathy.ac.in', '102', 'http://www.agarampublicschool.in/'),
(8, 'Sleek', 'monishkumar.cs21@bitsathy.ac.in', '102', 'http://www.agarampublicschool.in/');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

DROP TABLE IF EXISTS `student_details`;
CREATE TABLE IF NOT EXISTS `student_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `roll_no` varchar(45) DEFAULT NULL,
  `lab_name` varchar(45) DEFAULT NULL,
  `lab_id` varchar(45) DEFAULT NULL,
  `phone_number` bigint(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  UNIQUE KEY `phone_number_UNIQUE` (`phone_number`),
  UNIQUE KEY `roll_no_UNIQUE` (`roll_no`)
) ENGINE=MyISAM AUTO_INCREMENT=1020 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`id`, `email`, `name`, `roll_no`, `lab_name`, `lab_id`, `phone_number`) VALUES
(1, 'demo', 'Random', '7376211CS999', 'demo', 'SLB003', 9978642975),
(1016, 'monishkumar.cs21@bitsathy.ac.in', 'monish', '7376211CS217', 'ARTIFICIAL INTELLIGENCE - TECHNOLOGIES', 'SLB065', 7010220960),
(1019, 'kavinkumar.cs21@bitsathy.ac.in', 'Kavinkumar B', '7376211CS183', 'ARTIFICIAL INTELLIGENCE - TECHNOLOGIES', 'SLB065', 8072677947),
(1014, 'allwin.cs21@bitsathy.ac.in', 'ALLWIN G B', '7376211CS113', 'ARTIFICIAL INTELLIGENCE - TECHNOLOGIES', 'SLB065', 9360639389),
(1017, 'anusuya.cs21@bitsathy.ac.in', 'Anusuya J', '7376211CS117', 'DATA SCIENCE - EXPERT SYSTEMS', 'SLB070', 9677927470),
(1018, 'anushmamahalakshmi.cs21@bitsathy.ac.in', 'anushma mahalakshmi a', '7376211cs116', 'MOBILE AND WEB APP FOR SOFTWARE APPLICATIONS', 'SLB015', 9585472727);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

DROP TABLE IF EXISTS `team`;
CREATE TABLE IF NOT EXISTS `team` (
  `email` varchar(40) NOT NULL,
  `team_id` varchar(30) NOT NULL,
  `designation` varchar(20) NOT NULL,
  `parent_id` varchar(30) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `register_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`email`, `team_id`, `designation`, `parent_id`, `id`, `register_name`) VALUES
('demo', 'demo', 'demo', '1', 1, 'demo'),
('allwin.cs21@bitsathy.ac.in', 'Sleek', 'leader', '1016', 2, 'Sleek28'),
('anusuya.cs21@bitsathy.ac.in', 'Sleek', 'members', '', 3, 'Sleek28'),
('kavinkumar.cs21@bitsathy.ac.in', 'Sleek', 'members', '1014', 4, 'Sleek28'),
('monishkumar.cs21@bitsathy.ac.in', 'Sleek', 'members', '1019', 5, 'Sleek28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'allwin.cs21@bitsathy.ac.in', '$2y$10$yzELQ5.Hb4AqKAjK8MbsRO96no5L2vQaXke468SA3We8T2.ZxdKkS', '2022-09-29 11:34:38'),
(2, 'kavinkumar.cs21@bitsathy.ac.in', '$2y$10$IMjrA36nkCPp1KDXd42qAOrELre.m4jPXtNPmJwqaz/62ppLQEqHy', '2022-09-29 11:42:28'),
(3, 'monishkumar.cs21@bitsathy.ac.in', '$2y$10$bX5eeFmPaPGuMhUxbQaIN.L93YtybfhKhDWsDnHMuF6geM2NZ0WAm', '2022-09-29 11:45:04'),
(6, 'sanjay.ad21@bitsathy.ac.in', '$2y$10$9yfaal/d9f7tee05Ua3h2u28xK6NF4H.dKn5T.U9w2IVaFs5ZYQt6', '2022-09-29 12:06:55'),
(7, 'anusuya.cs21@bitsathy.ac.in', '$2y$10$Q5RF121Te3WvitRtu/hzVu69MDyIPX8zSLJMeLY8dI3VaSEl72kMG', '2022-09-29 13:55:25'),
(8, 'anushmamahalakshmi.cs21@bitsathy.ac.in', '$2y$10$po54o/RcBqqFBm94YBkfRebCvB9UBvqAYGI6z7VO11UXWInIT9dD2', '2022-09-30 10:16:48'),
(10, 'mail@gd.industries', '$2y$10$h7haPt/MGzzv8j3LTTaQx.Ba2s3Q1Wax2FxxWJT0j4e86Dowg8Knq', '2022-10-07 13:32:05');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
