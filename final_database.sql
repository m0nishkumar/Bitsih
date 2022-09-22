-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 22, 2022 at 10:12 AM
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
CREATE DATABASE IF NOT EXISTS `hackathon` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `hackathon`;

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
  `name` varchar(80) NOT NULL,
  `roll_no` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phonenumber` bigint(11) NOT NULL,
  `lab` varchar(80) NOT NULL,
  `lab_id` varchar(11) NOT NULL,
  `problem` mediumtext NOT NULL,
  `link` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `final_participants`
--

INSERT INTO `final_participants` (`id`, `name`, `roll_no`, `email`, `phonenumber`, `lab`, `lab_id`, `problem`, `link`) VALUES
(1, 'Kavinkumar B', '7376211CS183', 'kavinkumar.cs21@bitsathy.ac.in', 8072677947, 'AI LAB', 'SLB003', '1101', 'http://localhost/phpmyadmin/index.php?route=/table/change&db=hackathon&table=register'),
(2, 'Kavinkumar B', '7376211CS183', 'kavinkumar.cs21@bitsathy.ac.in', 8072677947, 'AI LAB', 'SLB003', '1101', 'http://localhost/phpmyadmin/index.php?route=/table/change&db=hackathon&table=register'),
(3, 'Kavinkumar B', '7376211CS183', 'kavinkumar.cs21@bitsathy.ac.in', 8072677947, 'AI LAB', 'SLB003', '1', 'http://localhost/phpmyadmin/index.php?route=/table/change&db=hackathon&table=register'),
(4, 'Kavinkumar B', '7376211CS183', 'kavinkumar.cs21@bitsathy.ac.in', 8072677947, 'AI LAB', 'SLB003', '1', 'http://localhost/phpmyadmin/index.php?route=/table/change&db=hackathon&table=register'),
(5, 'Kavinkumar B', '7376211CS183', 'kavinkumar.cs21@bitsathy.ac.in', 8072677947, 'AI LAB', 'SLB003', '1', 'http://localhost/phpmyadmin/index.php?route=/table/change&db=hackathon&table=register'),
(6, 'Kavinkumar B', '7376211CS183', 'kavinkumar.cs21@bitsathy.ac.in', 8072677947, 'AI LAB', 'SLB003', '1101', 'http://localhost/phpmyadmin/index.php?route=/table/change&db=hackathon&table=register'),
(7, 'Monishkumar B', '7376211CS217', 'monishkumar.cs21@bitsathy.ac.in', 7010220960, 'AI LAB', 'SLB006', '1102', 'http://localhost/bitsih/brief.php');

-- --------------------------------------------------------

--
-- Table structure for table `problems`
--

DROP TABLE IF EXISTS `problems`;
CREATE TABLE IF NOT EXISTS `problems` (
  `id` int(11) NOT NULL DEFAULT '1000',
  `title` mediumtext NOT NULL,
  `brief` longtext NOT NULL,
  `count` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `problems`
--

INSERT INTO `problems` (`id`, `title`, `brief`, `count`) VALUES
(1101, 'Low cost and sustainable solution for clean water and sanitation.', 'Billions of people worldwide lack basic amenities such as clean water and sanitation. Over 673 million people still practise open defecation, one in three people in the world do not have access to safe drinking water, and two out of five people do not have a basic hand-washing facility with soap and water. With the growing necessity for Clean Water and Sanitation, there arises an un- demanding quest to a revolutionary change over for a low cost and highly sustainable solution for the same.', 4),
(1102, 'Sustainable/renewable energy for poor/rural area. No darkness anymore', 'With an increase in the world\'s population to 8.0 billion by mid- November 2022, there increases the urge for affordable energy. The need to enhance international cooperation to facilitate access to clean energy research and technology, including renewable energy, energy efficiency and advanced and cleaner fossil-fuel technology, and to bring about changes in energy infrastructure and clean energy technology are the need of the hour.', 1),
(1103, 'Smart water irrigation (preventing water losses)', 'Ensure sustainable food production systems and implement resilient agricultural practices that increase productivity and production, that help maintain ecosystems, that strengthen capacity for adaptation to climate change, extreme weather, drought, flooding and other disasters and that progressively improve land and soil quality. Eventually promote inclusive and sustainable industrialization. With reference to the above said, bringing in innovation in Smart Irrigation and in terms of smart soil fertility analyser can take India ahead in the deck of automation.', 0),
(1104, 'Minimizing the grid load during peak hours', 'Global warming and the declining price of lithium-ion batteries are two factors that have made electric vehicles a viable alternative mode of transportation in the private sector. The rapid penetration of electric vehicles into urban distribution power system networks, however, presents difficulties for grid operators such line overload. To reduce the grid load during peak hours, we must therefore offer solutions.', 1),
(1105, 'Hybrid energy storage system', 'The world\'s rising need for electricity will have an impact on the availability of natural resources including coal, gas, and oil. Additionally, the production of power using natural resources will pollute the environment through the release of carbon dioxide. The introduction of alternative energy will help to solve this issue. The energy of the future will be alternative energy, which is connected to sustainability, renewability, and pollution reduction. An example of alternative energy is renewable energy, which includes biomass, sun, wind, and hydropower. Due to the reliability of their operation, the new developments in renewable energy, such as solar and wind energy, also have issues. In this instance, the stand-alone renewable energy has a poor system and application maintenance flexibility and reliability. On the other hand, the output energy that will be generated by standalone renewable energy sources will not be consistent because the system has not met the required specifications. So, provide proper Hybrid storage system for Renewable energy adaptation .', 0);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  `email` varchar(100) NOT NULL,
  `problem` mediumtext NOT NULL,
  `link` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `problem`, `link`) VALUES
(1, 'Ternos', 'kavinkumar.cs21@bitsathy.ac.in', '1102', 'https://drive.google.com/file/d/1KZit7gbBrvccFIbM-7QvIYM4vBoUZ_Cx/view'),
(2, 'Kavinkumar', 'kavinkumar.cs21@bitsathy.ac.in', '1101', 'https://drive.google.com/file/d/1KZit7gbBrvccFIbM-7QvIYM4vBoUZ_Cx/view'),
(3, 'Kavinkumar', 'kavinkumar.cs21@bitsathy.ac.in', '1104', 'https://drive.google.com/file/d/1KZit7gbBrvccFIbM-7QvIYM4vBoUZ_Cx/view'),
(4, 'ternos', 'kavin.apm2003@gmail.com', '1102', 'https://drive.google.com/file/d/1KZit7gbBrvccFIbM-7QvIYM4vBoUZ_Cx/view'),
(5, 'ternos', 'kavin.apm2003@gmail.com', '1101', 'https://drive.google.com/file/d/1KZit7gbBrvccFIbM-7QvIYM4vBoUZ_Cx/view');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

DROP TABLE IF EXISTS `student_details`;
CREATE TABLE IF NOT EXISTS `student_details` (
  `id` int(11) NOT NULL DEFAULT '1001',
  `email` varchar(200) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `roll_no` varchar(45) DEFAULT NULL,
  `lab_name` varchar(45) DEFAULT NULL,
  `lab_id` varchar(45) DEFAULT NULL,
  `phone_number` bigint(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  UNIQUE KEY `phone_number_UNIQUE` (`phone_number`),
  UNIQUE KEY `roll_no_UNIQUE` (`roll_no`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`id`, `email`, `name`, `roll_no`, `lab_name`, `lab_id`, `phone_number`) VALUES
(1, 'rangom@gmail.com', 'Random', '7376211CS999', 'AI LAB', 'SLB003', 9978642975),
(1001, 'allwin.cs21@bitsathy.ac.in', 'Allwin GB', '7376211CS113', 'AI LAB', 'SLB065', 9360639389);

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`email`, `team_id`, `designation`, `parent_id`, `id`, `register_name`) VALUES
('monishkumar.cs21@bitsathy.ac.in', 'Error40444', 'leader', '10', 1, 'Error40444860'),
('monishkumar.cs21@bitsathy.ac.in', 'Error40444', 'members', '10', 2, 'Error40444860'),
('monishkumar.cs21@bitsathy.ac.in', 'Error40444', 'members', '10', 3, 'Error40444860'),
('monishkumar.cs21@bitsathy.ac.in', 'Error40444', 'members', '10', 4, 'Error40444860'),
('monishkumar.cs21@bitsathy.ac.in', 'Error40444', 'members', '10', 5, 'Error40444860');

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'ternos', '$2y$10$1nRtPkhk9VmcO0KNNna//e2GhShCFvXNmqi5k3hRVLlcd5EFHoSyK', '2022-09-20 13:57:17'),
(3, 'GD', '$2y$10$o4JRvXXKS1xdjLES/Sh7zOjBG/mLlrqCoLtafUoqNSILYwQlUSuCe', '2022-09-20 14:52:32'),
(4, 'kavin.apm2003@gmail.com', '$2y$10$5C/IKWsg7x88EoSgZ6476uvu3VjWcLsNVkik4S8O/KEgrobx8nAOu', '2022-09-20 21:10:15'),
(5, 'allwin.cs21@bitsathy.ac.in', '$2y$10$yCHf0LyoKQyutBWKs36kPeDTAPnB9plZO/.73Eq.itUGh.07np4e2', '2022-09-22 11:07:49');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
