-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 18, 2022 at 03:27 AM
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
-- Table structure for table `evaluation`
--

DROP TABLE IF EXISTS `evaluation`;
CREATE TABLE IF NOT EXISTS `evaluation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `team` varchar(45) NOT NULL,
  `prob_id` int(11) NOT NULL,
  `front_end` int(11) NOT NULL,
  `back_end` int(11) NOT NULL,
  `data_base` int(11) NOT NULL,
  `ad_tech` int(11) NOT NULL,
  `solution` int(11) NOT NULL,
  `comments` longtext,
  `training` longtext,
  `evaluated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `evaluation`
--

INSERT INTO `evaluation` (`id`, `team`, `prob_id`, `front_end`, `back_end`, `data_base`, `ad_tech`, `solution`, `comments`, `training`, `evaluated_at`) VALUES
(1, '0', 0, 0, 0, 0, 0, 0, 'NIL', 'NIL', '2022-10-15 23:14:14'),
(2, 'Sleek', 101, 10, 10, 10, 10, 10, 'qwe', 'rty', '2022-10-17 15:53:18'),
(4, 'Sleek', 102, 10, 10, 10, 10, 10, 'Nil', 'Nil', '2022-10-17 15:22:19');

-- --------------------------------------------------------

--
-- Table structure for table `eval_filter`
--

DROP TABLE IF EXISTS `eval_filter`;
CREATE TABLE IF NOT EXISTS `eval_filter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(45) DEFAULT NULL,
  `prob_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eval_filter`
--

INSERT INTO `eval_filter` (`id`, `user`, `prob_id`) VALUES
(1, 'evaluator1', 101),
(2, 'evaluator1', 102),
(3, 'evaluator1', 103),
(4, 'evaluator2', 104),
(5, 'evaluator2', 105),
(6, 'evaluator2', 106),
(7, 'evaluator3', 107),
(8, 'evaluator3', 108),
(9, 'evaluator3', 109),
(10, 'evaluator4', 110),
(11, 'evaluator4', 111),
(12, 'evaluator4', 112),
(13, 'evaluator5', 113),
(14, 'evaluator5', 114),
(15, 'evaluator5', 115),
(16, 'evaluator6', 116),
(17, 'evaluator6', 117),
(18, 'evaluator6', 201),
(19, 'evaluator7', 301),
(20, 'evaluator7', 302),
(21, 'evaluator7', 303),
(22, 'evaluator8', 304),
(23, 'evaluator8', 305),
(24, 'evaluator8', 306),
(25, 'evaluator9', 307),
(26, 'evaluator9', 308),
(27, 'evaluator9', 309),
(28, 'evaluator10', 310),
(29, 'evaluator10', 311),
(30, 'evaluator10', 312);

-- --------------------------------------------------------

--
-- Table structure for table `eval_users`
--

DROP TABLE IF EXISTS `eval_users`;
CREATE TABLE IF NOT EXISTS `eval_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eval_users`
--

INSERT INTO `eval_users` (`id`, `username`, `password`) VALUES
(2, 'evaluator1', '$2y$10$JjA1iRfzRc/yXhnW9oNJc.UASLFs9lTl7f23.DPC5AoQAx5Yqwi8.');

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
(53, 'ARTIFICIAL INTELLIGENCE - TECHNOLOGIES', 1, 75),
(54, 'ARTIFICIAL INTELLIGENCE - INDUSTRIAL APPLICATIONS', 0, 0),
(55, 'ARTIFICIAL INTELLIGENCE - SOFTWARE SOLUTIONS', 1, 0),
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
  `faculty_mail` varchar(150) NOT NULL,
  `count` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `problems`
--

INSERT INTO `problems` (`id`, `title`, `brief`, `solution`, `faculty`, `faculty_mail`, `count`) VALUES
(101, 'ON DUTY / LEAVE Portal', 'To develop an application for facilitating the leave/ON DUTY approval process inside the campus and communicating the same to the parents in real time through SMS.', 'ON DUTY/ LEAVE requisition is submitted by the students detailing the necessity of ON DUTY / LEAVE. Once submitted, the approval form should be forwarded to Special Lab Incharge, Mentor and Special Lab Head sequentially. Upon the approval of the various heads, finally the form should be forwarded to the Dean.                  Once the Dean approves the ON DUTY/ LEAVE, the concern students should be intimated automatically about the approval / cancellation through SMS/ Mail.                 When the student leave the campus, the detail of the student (In/Out Time, place, reason) have to be communicated to the parents through SMS.', 'Mr. Nataraj N / AP - IT', 'nataraj@bitsathy.ac.in', 0),
(102, 'Parent Interactive Portal', 'To develop a mobile application for communicating the complete details about their children in a single portal.', 'Login credential for both parents and mentors (Admin). For parents, login is facilitated by their registered mobile number. For mentors, login through their bitsathy mail Id. Once the parents, logged in, complete details about their son/daughter should be visible. Complete Details include: Mark details, Attendance details, Competition participated details, Rewards earned, Skill obtained, Placement attended details, Offer letter - Internship/Placement, ON DUTY details, BITSATHY event photos, Subject handing faculties details along with Timetable, Daily News Link.', 'Dr. P. Dhivya, AP/CSE', 'dhivyap@bitsathy.ac.in', 0),
(103, 'Invigilation duty', 'To develop an automated system for invigilation duty reminder, hall allotment and entry registration', 'Prior intimation (one day before) of the duty schedule. Allotted halls should be shuffled and allocated to the registered faculty, and the allocated hall intimation to the concerned faculty member half an hour before the scheduled time. The duty reporting details based on biometric.', 'Mr. Pandiyan M / AP-ISE', 'pandiyanm@bitsathy.ac.in', 0),
(104, 'Result intimation', 'To develop an automated system for intimating the end semester results', 'End semester results of the registered courses should be intimated to the student concerned.', 'Mr. Pandiyan M / AP-II-ISE', 'pandiyanm@bitsathy.ac.in', 0),
(105, 'Booking and utilization Application', 'To develop an application for venue booking and utilization inside our campus.', 'Software which can be used for booking classroom and seminar hall. Utilization tracking and consolidating reports for each venue by nature of the event (regular class, skill training, exam, etc). Administrator rights will be infrastructure activities and faculty members should be provided with view rights for finding the status of the venue. The parameters of the venue should include facilities and capacity,', 'Dr. Gokulnath B V / AP - IT', 'gokulnathbv@bitsathy.ac.in', 0),
(106, 'Automatic FRS Calculation for Wiki Page entry by faculty', 'Automatic FRS Calculation for Wiki Page entry by faculty', 'The faculty members have to submit their lesson plans before the deadline through this application. After the submission of the lesson plan, lecture material, video, discussion questions, and discourse link the team academics going to evaluate all lesson plans and comment on the mistakes through this application. If the mistakes and corrections are over,  the respective FRS will be calculated based on the deadlines. Finally the corrected lesson plan and its contents will be shown Wikipage automatically.', 'Ms. Abirami A / AP-II - IT', 'abiramia@bitsathy.ac.in', 0),
(107, 'Classroom Allotment and Venue Blocking', 'To develop an application of Classroom Allotment and Venue Blocking.', 'The application has to collect all the classroom allotment and venue-blocking details. Based on the requirement of classroom and venue for academic progress the allotment has to be done by this application. The application needs to showcase a number of venues available and booked. The classroom and venue details need to showcase clearly (classroom size, no of sheets, projector, speaker availability, and working conditions.', 'Dr. Lakshmanaprakash S/AP - III - IT', 'lakshmanaprakashs@bitsathy.ac.in', 0),
(108, 'Material Tracking System', 'To develop an application for Material status tracking inside the campus and while requesting the material, display the availability with the location ', 'Any Proposals will be forwarded by the heads to the Apex committee through the Principal / Dean PDS. After the Apex Committee approval, a. the form should be forwarded to the respective heads, b. while assigning a Purchase Request (PR),  material status should be displayed, c. pending finance status, d. For online/local purchases, (i) Gate Entry, (ii) min entry at stores. Submit the bills to the accounts through the IQAC Approvals team.', 'Dr. Sri Vigna Hema V / AP-II - IT', 'srivignahemav@bitsathy.ac.in', 0),
(109, 'Student Survey and Feedback with Summary Report', 'To develop an application that provides the detailed report related to course feedback and course exit survey based on the responses received from the students in excel format.\r', 'Faculty feedback average calculation from students\' responses. Categorizing faculty members based on the feedback score (<3, 3 to 4, >4). Converting responses received on 5 point scale to 3 point scale for the course exit survey.', 'Dr. Sri Vigna Hema V / AP-II - IT', 'srivignahemav@bitsathy.ac.in', 0),
(110, 'Final Year Project Management  System', 'To develop an application that manages the students project work activitie', 'An application should have a provision for Project registration. Provision for approving external projects by Project Approval Committee (PAC). Unique Project ID allocation to be done for all batches. PMC allocation for project Review to be done automatically. Detailed reports related to students\' projects like Consolidated marks like No of batches, No of Students, Review completion status and Project pending status, etc.', 'Ms. Priya L/AP - IT', 'priyal@bitsathy.ac.in', 0),
(111, 'SKILLS  TRAINING PORTAL', 'To develop a Web/Mobile application for skills registration, attendance monitoring, assessment conduction, mark submission and feedback collection at BIT', 'Web and/or Mobile App needs to be developed for the below themes. Registration of the skill choice (which needs to be verified with previous semester skills). Attendance monitoring & Mark submission. Feedback Collection from students.', 'Mr. Selvakumar M / AP - IT', 'selvakumarm@bitsathy.ac.in', 0),
(112, 'REWARD POINTS SYSTEM PORTAL', 'To develop a Web/Mobile App for Reward Points System @ BIT', 'Web and/or Mobile App needs to be developed for the following themes. Displaying the students’ reward points (Consolidated reward points and detailed activity-wise reward points). Provision for registering the rewards point activity by faculty members, and approval by concerned heads. Activity-wise attendance monitoring and database creation for student-wise reward points submission and consolidation of reward points against student names. Reward points Redemption (Conversion of reward points to marks).', 'Mr. Selvakumar M / AP - IT', 'selvakumarm@bitsathy.ac.in', 0),
(113, 'Elective Subject Exemption Portal', 'To develop a Web/Mobile App. for elective subject exemption', 'Web and/or Mobile App needs to be developed for the below themes.  Verify the NPTEL online course certificates entered in the BIP portal. Verify the internship certificates entered in the BIP portal. Verify the one-credit course completion list provided by the CoE. Verify the add-on completion list provided by the CoE.', 'Dr. Eswaramoorthy V / AP - III - IT', 'eswaramoorthyv@bitsathy.ac.in', 0),
(114, 'External Technical Events Portal', 'To develop a Mobile App for tracking the student participation in external events by students.', 'Mobile App needs to be developed for the below themes. Tracking the student participation in the particular event. Originality of the certificate submitted in the BIP portal.', 'Dr. Eswaramoorthy V / AP - III - IT', 'eswaramoorthyv@bitsathy.ac.in', 0),
(115, 'BIT-LinkedIn portal', 'Develop a model Linked-In Portal specially for BIT community', 'Login credentials using BIT sathy mail ID. All facilities inside a general LinkedIn portal should be reflected. Need messaging facility among the peers. Provide a Job search platform wherein the students could search for jobs/ internships based on their interests. Separate Link to know about the BIT on-campus placement drives and results. Portal to design a resume professionally (Separate plugins should be added to design a resume on submitting the details).', 'Ms. Karthiga M / AP - II - CSE', 'karthigam@bitsathy.ac.in', 0),
(116, ' Grievances and Redressal portal', 'Develop a portal to record the Grievances and Redressal for both students and faculty\r', 'Login credentials using BIT sathy mail ID. Separate forms to collect the grievances of both students and faculty. The grievances addressed should be viewed by the Management team in an anonymous manner. The redressal of the grievances once resolved should be updated in the portal automatically. ', 'Dr. Dhivya P / AP - CSE', 'dhivyap@bitsathy.ac.in', 0),
(117, 'Special Lab Change Dashboard\r', 'Develop a portal to facilitate the special lab change of students and intimation to old and new faculty incharge accordingly\r \r ', 'Login credentials using BIT sathy mail ID.Forms for changing the Special Lab, once the student submitted the form for changing the special lab, the concerned special-lab-in-charge should approve the change. The new special-lab-in-charge should approve by the student, once approval from both labs in charge, the Special lab head should approve finally. After all approval, the new Special lab details should be reflected to the students. The approval/rejection should be automatically reflected in the common students\' database.', 'Mr. Nataraj N / AP - IT', 'nataraj@bitsathy.ac.in', 0),
(201, 'Open Innovation Category', 'Open Innovation Category', 'The challenge accepts limitless space and creativity. Students having amazing idea and a desire to implement the idea in our campus are encouraged to register for the open innovation category.', 'Dr. Rajasekar L / ASP - EIE', 'rajasekarl@bitsathy.ac.in', 0),
(301, 'Heritage Identification', 'HERITAGE Identification of monuments using Deep Learning Techniques', 'To identify the monuments from Satellite Images using Deep Learning and Integration of Interpretability for the predicted outcomes (Explainable AI). For datasets and additional information, please visit:  https://vedas.sac.gov.in/en/sih2022.html', 'Pradeesh E L/AP-II & MTRS', 'pradeeshel@bitsathy.ac.in', 0),
(302, 'Communication for Hearing Impaired', 'Enabling communication strategies for persons with hearing impairment.', 'Background: Successful communication requires the efforts of all people involved in a conversation. Even when the person with hearing loss utilizes hearing aids and active listening strategies, it is crucial that others involved in the communication process consistently use good communication strategies. The solution is to provide access to people with hearing impairment audio information received from various sources and enable persons with hearing disabilities to communicate with fellow humans. Summary: 1) The main barrier to communication for people who are hearing impaired is the lack of consideration by others. 2) There is an urgent requirement to include all humans in society as per the ratification of the UNCRPD act. 3) Considering the wealth of information being circulated, the pers with hearing impairment may lag behind if they cannot access this information, some of which may be vital and urgent. Objective: Develop solutions for the real-time provision of closed and open captioning, subtitles for videos, text telephone which will allow text messaging over the phone line, and telecommunications relay services which allow text-to-speak conversions through an operator.', 'Pradeesh E L/AP-II & MTRS', 'pradeeshel@bitsathy.ac.in', 0),
(303, 'Monitoring School Safety', 'Monitoring safety in schools by the school, students, teachers and parents, with escalation of issues to District and state level with the help of an App masking the identity of person who escalates the issue', 'Summary: A safe and secure school is a non-negotiable for providing quality education. DoSEL has come out with very detailed safety guidelines for schools. The guidelines prescribe safety walks, safety inspections, parental consultation, safety class projects, etc. It is necessary that schools/teachers do not consider the implementation of these guidelines as a burden. An App based solution based on these guidelines is required which has an interface with schools, teachers, students, and parents.', 'Chinnadurai C L/AP - EEE', 'chinnaduraicl@bitsathy.ac.in', 0),
(304, 'Regional Language Translation', 'Real time translations for regional languages', 'When a culturally diverse country like India is working on common goals yet preserving the local languages and cultures at regional level, sometimes communicating across, and communicating together in multiple languages over virtual medium becomes a hurdle while progressing, due to the very reason of not knowing other regional languages. This creates blocks and slows down the progress, apart from creating misunderstandings and inefficient use of time. Background- The Eighth Schedule of the Indian Constitution lists 22 languages, which have been referred to as scheduled languages and given recognition, status and official encouragement. According to the Census of India of 2001, India has 122 major languages and 1599 other languages. However, figures from other sources vary, primarily due to differences in definition of the terms \"\"language\"\" and \"\"dialect\"\". The 2001 Census recorded 30 languages which were spoken by more than a million native speakers and 122 which were spoken by more than 10,000 people While newer challenges India is facing in the areas of agriculture, environmental imbalances, cultural brain drains, political instability and the most recent pandemic affects, it is most important to come together to brainstorm and work on solutions collaboratively, come up with PAN India communication solution irrespective of language and culture differences. Giant Indian industries having widespread operations across Indian geography attract local talent, however making them communicate and collaborate to resolve issues. With people working on better opportunities, but across their regional periphery, makes them uncomfortable and less productive sometimes. Thus, communication now needs to be faster and seamless despite members lack cross language communication skills. Indian government is also working on a technology that can translate in real-time various vernacular Indian languages to enable the exchange of communications between two persons not speaking the same language. This will bridge boundaries and make us progress. Relevance/Detailed Description As we know, the recent pandemic has forced us adopt newer ways of working and world has come closer. As much as communicating in foreign language is difficult for an individual in India to work with a team member in China region (who mostly prefers to talk in Chinese) Or a German colleague (who use their native language to the fullest), it also becomes a barrier for an Indian person or citizen to interact with other people from different Indian States speaking different and unknown language. In such a situation, for ex. when a Maharashtrian person needs to share the information from the ancient Indian literature in Maharashtrian texts in his/her respective regional language with the other person from Bengal or Andhra Pradesh, he or she may pose a hurdle in the work, if he/she lacks the language skills. There arises a need to support agile communication in different languages seamlessly without having to bother about the language expertise. This necessitates need to develop a solution by means of which we can achieve real time translation of one language into another. The real time means, on the fly translation as one speaks. Our prime minister Shri. Narendra Modi has chosen his speech language as “Hindi” no matter which country he speaks. This one example necessitates an efficient real time language translation system that makes the message reach the world in each of the member’s preferred language. Language as a barrier is to be swept and communications need to be more inclusive and seamless with the use of digital technology – is what Government of India is striving to achieve in coming few years (Ministry of Electronics and Information Technology declared recently). Objectives Develop a technology that enables Real-Time translations of regional languages and hence language doesn’t become barrier between interpersonal, social or corporate communication. Further the objective is to come up with ways and means to make meaningful digital application/s that can use this technology and generate feature-rich application that applies at one or more scenarios and helps businesses. The objective of this problem statement resolution is also to come up with innovative application, service and/or integration which can convert one language speech into another on the fly using comprehensive Artificial Intelligence algorithms and deliver end to end solution.', 'Chinnadurai C L/AP - EEE', 'chinnaduraicl@bitsathy.ac.in', 0),
(305, 'Health Monitoring', 'Develop a smart application to Monitor the health of roads and trigger the reports to concern authorities for maintenance', 'Road are continuously constructed across various locations all over the country. The present system of monitoring the construction process and health is manually and thus becomes tedious and physically impossible many a time. Roads thus become due for repairs / maintenance prematurely due to various reasons. There is a requirement to devise a smart process may be by using smart technology to monitor the process at the time of construction, embedding sensors during road construction, use of smart imaging technology to assess condition using drones, smart devices installed on remote operated / autonomous vehicles for overseeing during construction, etc. There is an immediate need to identify a viable solution to increase the longevity of roads and prevent premature failure.', 'Abirami A/AP - II - IT', 'abiramia@bitsathy.ac.in', 0),
(306, 'Vehicle Detection', 'Moving vehicle registration plate detection', 'Background: Mining operations are generally spread over a vast area in remote locations and harsh environments. Coal extraction is a high cost and increasingly high technology venture that requires the utmost operational efficiency as well as uninterrupted workflow and delivery cycles. Operations cannot afford to be impacted due to lack of visibility as to the location and status of machinery, equipment and vehicles, since this causes delays, increased cost and mounting losses and is also an open invitation to theft and misuse. Real-time location tracking and monitoring, especially of moveable assets such as the vehicle fleet transporting the coal, is thus of critical importance to the mining industry. Tracking pickups and deliveries of thousands of truck-loads moving daily to and from various locations inside mining areas to processing plants, rail wagons or jetties is a logistics nightmare. Moving vehicle registration plate detection: RFID is fitted with vehicles moving across the mining region. The RFIDs are mapped to their respective registration number. It happens that two vehicles may exchange registration plates for malicious purpose including theft or forgery. A system is to be created to extract registration number from number plate of moving vehicle. The data captured should be transferred to cloud environment which can be available for further analysis of theft or proof reading. Summary: In general, most companies employ an active (battery-powered) radio frequency identification system to track trucks entering and leaving a mine with a load. This can be accomplished via a real-time location system (RTLS) if there are vehicles parked that need to be located quickly. But more commonly, an active RFID transponder is affixed to a vehicle, with readers set up at various points—at a mine’s entry gate, at a weigh station, at an exit and so forth. Software tracks the truck’s location, and you can usually run a variety of reports. The best solution really depends on the type of information that you would like to collect and use. Objective: To create an anti-theft auto security system that can extract registration number from number plate of moving vehicle. And can capture and transfer data to cloud, which can be available for further analysis of theft or proof reading.', 'Dr. Lakshmanaprakash S/AP-III IT', 'Lakshmanaprakashs@bitsathy.ac.in', 0),
(307, 'Monuments App', 'AR App for Monuments', 'Background: History plays an eminent role in cultural representation of any place as heritage sites and monuments reflect tradition, art and culture of the previous golden era.This can be achieved through AR in historical recreation. Using a smartphone, the user can visit historic buildings and learn more about the past, swipe through monuments and see events of the past come alive in 3D. Summary: To develop an AR application for visitors so that they can scan any area in a monument and can see history come alive through augmented animations. Objective: ? An \"Immersive Augmented Reality\" based App to explore the Cultural Heritage of India.', 'Ms. Karthiga M / AP - II - CSE', 'Karthigam@bitsathy.ac.in', 0),
(308, 'Pumping Data Analysis', 'Standalone Desktop application for pumping test data analysis', 'CGWB suggests developing a standalone desktop application for analysis and interpretation of pumping test data which can be distributed as freeware for use by ground water professionals, researchers, students, teachers and others Considering the pivotal role of groundwater in the world’s water supply and its gradual depletion coupled with growing contamination, there is an urgent need to investigate the reaction of aquifers to various human activities in terms of both quantity and quality of groundwater so as to avoid severe and often irreversible damages to the mankind and ecosystem. To achieve this broad goal, a prior knowledge of the hydraulic properties of different aquifer systems is a basic necessity for almost all groundwater-related studies. The pumping test (or ‘aquifer performance test’) is the standard and most widely used method for determining the hydraulic parameters of aquifers. Pumping tests are conducted on a large scale by CGWB, State Groundwater Departments, and other Groundwater agencies for estimating the hydraulic characters of water bearing layers. Various aquifer parameters such as Transmissivity, Storativity, Specific Yield can be estimated using pumping test. Analysis and interpretation of pumping test data is a tedious process and is usually done using computer applications. However, there are no Indian software available for this purpose. Central Ground Water Board proposes to develop standalone desktop application for analysis and interpretation of pumping test data which can be distributed as freeware for use by ground water professionals, researchers, students, teachers and others. Data Source: Professionals using the software application will enter the data. The user can chose to enter the data directly using forms or import it from existing data sources. Expected Outcome: A standalone desktop application for analysis and interpretation of pumping test data. Modules for interpretation involving standard methods like Theiss, Theiss recovery and Jacob methods can be made part of the software application. Innovative approach may be attempted to: Design the most complete set of tools for aquifer test data input, analysis, visualization, interpretation and reporting.', 'Dr. Dhivya P / AP - CSE', 'dhivyap@bitsathy.ac.in', 0),
(309, 'Addressing Non Revenue Water', 'Use of Digital Technology in addressing Non-Revenue Water (NRW)', 'With ever-increasing urban population growth and expanding area coverage, many water utilities in India struggling to provide clean drinking water to their consumers. Water supply issues are related to sources and usage of raw water; intermittent water supply and the quality of tap water at the consumers’ end. One of the major challenge facing is the high level of water loss in distribution networks. “Non-Revenue Water” (NRW) is defined as the difference between the amount of water put into the distribution system and the amount of water recovered from consumers. NRW is a good indicator for water utility performance; high levels of NRW typically indicate a poorly managed water utility. In addition, available NRW data are often found problematic, suspicious, inaccurate, or provide only partial information. Despite of knowing the benefits of reducing NRW, decades of effort have not delivered much improvement in India. Lack of support for comprehensive NRW management by 691788/2021/e-Governance Section 20/30 2 utility owners and chief executive officers makes it difficult to motivate utility staff and provide them with the means (funding, training, and technology) to successfully and sustainably reduce NRW. Hence, there is a need to develop a system or technology to trace and tackle non-revenue water and convert it into revenue water using digital methods. This will save water as well as increase profitability and improves the return on investment with respective to water distribution networks.', 'Dr. Gokulnath B V / AP - IT', 'gokulnathbv@bitsathy.ac.in', 0),
(310, 'Flood Avoidance', 'Predictive warning for release of water from reservoirs causing flood situation', 'IMD (Indian Meteorology department) is responsible to issue warnings for the rainfall and CWC (Central Water Commission) keeps a record of water reservoirs, however there is a lack of collation of data issued from both these departments. This prevents us from determining the impact/seriousness and due to which there are times where adequate forewarnings are not provided. There are several High rainfall areas, low lying areas or flood prone areas. Currently there are limitations that these areas cannot be alerted before the critical situation because of the data unavailability or unavailability of simulation models which can calculate and predict the data. There is a requirement of data on the area likely to be inundated(depth) by release of water from reservoirs. 3D models may help in calculation of such data. a) Adequate forewarning for the area where floods are likely to occur. b) Low lying areas may be alerted about the release of accurate quantity of water from the reservoirs and thus evacuation/shifting of the people can be planned. c) It will help the Response forces to deploy their resources accordingly d) Prediction of release of water based on rainfall in catchment area and dissemination of an information to the affected public through mobile and other mediums.', 'Ms. Priya L/AP - IT', 'priyal@bitsathy.ac.in', 0),
(311, 'System Tracking', 'To track list of software installed in the PC’s / Workstation’s attached to the network.', 'Any organization will have authorized software preinstalled on their PC’s/Workstations during system build. Later, by mistake, staff may tend to install software that is freely available over the internet, which in turn may pave the way to viruses/spyware/spamware which potentially paralyze the network. Develop a software (scheduler based) to track the list of all software installed on the PCs & Workstations attached to the network and generate a report based on IPs. The report may be sent to the admin and the admin should be able to delete or uninstall the software of a particular user’s system. To track the list of software installed in the PCs / Workstations attached to the network.', 'Venkatesan R/AP - IT', 'venkatesanr@bitsathy.ac.in', 0),
(312, 'Region Connectivity', 'Identification of Missing Bridges which would increase the connectivity between regions', 'Based on road network, habitation, facilities datawhich bridge over a water body will drasticallyimprove connectivity in a region. Alternatively, algorithm to identify compute utility of aproposed bridge.', 'Venkatesan R/AP - IT', 'venkatesanr@bitsathy.ac.in', 0);

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
) ENGINE=MyISAM AUTO_INCREMENT=1022 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`id`, `email`, `name`, `roll_no`, `lab_name`, `lab_id`, `phone_number`) VALUES
(1, 'demo', 'Random', '7376211CS999', 'demo', 'SLB003', 9978642975),
(1016, 'monishkumar.cs21@bitsathy.ac.in', 'monish', '7376211CS217', 'ARTIFICIAL INTELLIGENCE - TECHNOLOGIES', 'SLB065', 7010220960),
(1020, 'kavinkumar.cs21@bitsathy.ac.in', 'Kavinkumar B', '7376211CS183', 'ARTIFICIAL INTELLIGENCE - TECHNOLOGIES', 'SLB065', 8072677947),
(1014, 'allwin.cs21@bitsathy.ac.in', 'ALLWIN G B', '7376211CS113', 'ARTIFICIAL INTELLIGENCE - TECHNOLOGIES', 'SLB065', 9360639389),
(1017, 'anusuya.cs21@bitsathy.ac.in', 'Anusuya J', '7376211CS117', 'DATA SCIENCE - EXPERT SYSTEMS', 'SLB070', 9677927470),
(1018, 'anushmamahalakshmi.cs21@bitsathy.ac.in', 'anushma mahalakshmi a', '7376211cs116', 'MOBILE AND WEB APP FOR SOFTWARE APPLICATIONS', 'SLB015', 9585472727),
(1021, 'ragul.cb20@bitsathy.ac.in', 'Ragul A S', '202CB132', 'ARTIFICIAL INTELLIGENCE - SOFTWARE SOLUTIONS', 'SLB066', 9597931909);

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`email`, `team_id`, `designation`, `parent_id`, `id`, `register_name`) VALUES
('demo', 'demo', 'demo', '1', 1, 'demo');

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

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
(10, 'mail@gd.industries', '$2y$10$h7haPt/MGzzv8j3LTTaQx.Ba2s3Q1Wax2FxxWJT0j4e86Dowg8Knq', '2022-10-07 13:32:05'),
(11, 'ragul.cb20@bitsathy.ac.in', '$2y$10$FtuSxOxgdLyIoWBlUGueV.ooyRt1ymx9R91TindkSxl0Km8X6NFqa', '2022-10-13 14:42:19');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
