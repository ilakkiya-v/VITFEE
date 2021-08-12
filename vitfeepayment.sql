-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 02, 2021 at 06:42 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vitfeepayment`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatbot_hints`
--

DROP TABLE IF EXISTS `chatbot_hints`;
CREATE TABLE IF NOT EXISTS `chatbot_hints` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(100) NOT NULL,
  `reply` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chatbot_hints`
--

INSERT INTO `chatbot_hints` (`id`, `question`, `reply`) VALUES
(1, 'HI||Hello||Hola', 'Hello, how are you.'),
(2, 'How are you', 'Good to see you again!'),
(3, 'what is your name||whats your name', 'My name is VITbot'),
(4, 'what should I call you', 'You can call me VITbot'),
(6, 'Bye||See you later||Have a Good Day', 'Sad to see you are going. Have a nice day'),
(7, 'how to pay fee?|how can i pay tuition fees', 'Please press the payment section where you can see the \"Tuition Payment\" section through which you can do it!'),
(8, 'how to contact the college?|phone number for vit|college contact', 'here is the contact for the VIT CHENNAI:\r\nAddress:Vandalur-Kelambakkam Road\r\nChennai-600 127\r\nphone:044 3993 1555\r\nFax:044 3993 2555\r\nemail:admin.chennai@vit.ac.in'),
(9, 'how to contact chancellor?|chancellor email?', 'you can contact the chancellor by mailing to his mail ID: 	chancellor@vit.ac.in'),
(10, 'Thank you|thanks|okay', 'Hope I\'ve helped you!'),
(11, 'fine', 'awesome! can I be of any help?');

-- --------------------------------------------------------

--
-- Table structure for table `eventorder`
--

DROP TABLE IF EXISTS `eventorder`;
CREATE TABLE IF NOT EXISTS `eventorder` (
  `regno` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `event` varchar(255) NOT NULL,
  `amt` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `event` varchar(500) NOT NULL,
  `amt` int(100) NOT NULL,
  `descr` text NOT NULL,
  `image` varchar(250) NOT NULL,
  `link` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event`, `amt`, `descr`, `image`, `link`) VALUES
(1, 'hackamotiVE 2020', 200, 'An innovative event that blends students, technologists, academicians to ideate, formulate and render\r\n									automotive concepts embodying the future of connected cars.\r\n									HacamotiVE serves as a blithesome, explorative platform nurturing originative ideas affirming innovation', 'hackamotive2020.jpg', 'https://vit.ac.in/hackamotiVE/'),
(2, 'GSDC Certificate courses in Languages', 135, 'In this globalized village, it is indispensable to have a working knowledge of other languages to have close association\r\n									with developed societies. This would enhance the scientific-technical co-operation and\r\ncultural integration            ', 'global-skill-development-centre.jpg', 'https://vit.ac.in/system/files/global-skill-development-centre.pdf'),
(3, '21st International Conference on Science,Engineering and Technology (ICSET)', 800, 'This 21st International Conference will serve as a great platform with excellent form of academicians\r\n									and experts from industries for sharing knowledge and research in the field of life sciences. \r\n									Engineering and Tech along with managerial aspects.', 'icset-2020-conference.jpg', 'https://vit.ac.in/system/files/21st_ICSET-2020-Conference_0.pdf'),
(4, 'Two-Day Virtual Conference on Online University Education and English Language Teaching: Scope and Challenges', 0, 'Since there is a sudden shift from traditional education to online education, there is a need to understand online education methodologies, to measure its effectiveness, as well as to prepare a shift to a new system. There is a need to examine Teaching-Learning approaches,\r\n									evaluation and assessment methodologies and educational experience for \r\n									students and attitude change among teachers.', 'ELT2020.jpg', 'https://vit.ac.in/ELT2020/'),
(5, 'International Conference on Application of Information and Communication Technology and Statistics in Economy and Education (ICAICTSEE - 2020)', 250, 'International Conference on Application of Information and Communication Technology and Statistics in Economy and Education (ICAICTSEE - 2020), \r\n									to be organised by School of Electronics Engineering in collaboration with University of National and World Economy, Sofia, Bulgaria.', 'international.jpg', '\"https://vit.ac.in/system/files/international-conference-on-application-of--information-and-communication-technology-and-statistics-in-economy-and-education.pdf'),
(6, '2nd International Conference on Microelectronic Devices Circuits and Systems', 300, 'The 2nd International Conference on Microelectronics Devices, Circuits and Systems (ICMDCS 2020) will be held at the Vellore Institute of Technology (VIT), Vellore India from 22nd to 24th January 2020. ICMDCS 2020 will be organized by Department of Micro and Nanoelectronics and technically co-sponsored by IEEE Bangalore Section, CAS Chapter. The conference covers the subject areas including: \r\n									digital IC design, analog/RF/Mixed Signal IC design, Device Modeling and Technology,\r\n									RF communication circuits, embedded systems;', 'ICMDCS-2020-1.jpg', 'https://vit.ac.in/ICMDCS/');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` text NOT NULL,
  `added_on` datetime NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `message`, `added_on`, `type`) VALUES
(1, 'hi', '2020-10-30 10:42:39', 'user'),
(2, 'Hello, how are you.', '2020-10-30 10:42:39', 'bot'),
(3, 'fine', '2020-11-01 01:19:23', 'user'),
(4, 'awesome! can I be of any help?', '2020-11-01 01:19:24', 'bot'),
(5, 'fee', '2020-11-10 08:10:56', 'user'),
(6, 'Please press the payment section where you can see the \"Tuition Payment\" section through which you can do it!', '2020-11-10 08:10:57', 'bot');

-- --------------------------------------------------------

--
-- Table structure for table `payfee`
--

DROP TABLE IF EXISTS `payfee`;
CREATE TABLE IF NOT EXISTS `payfee` (
  `regno` varchar(50) NOT NULL,
  `paymentMethod` varchar(100) NOT NULL,
  `fee_or_event` varchar(100) NOT NULL,
  `amount` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`regno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payfee`
--

INSERT INTO `payfee` (`regno`, `paymentMethod`, `fee_or_event`, `amount`, `time`) VALUES
('19BCE1699', 'UPI', 'Tuition/Hostel fee', 640000, '2020-11-10 10:02:03');

-- --------------------------------------------------------

--
-- Table structure for table `stud_fee`
--

DROP TABLE IF EXISTS `stud_fee`;
CREATE TABLE IF NOT EXISTS `stud_fee` (
  `regno` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL,
  `hostelfee` int(11) NOT NULL,
  `tuitionfee` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  PRIMARY KEY (`regno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stud_fee`
--

INSERT INTO `stud_fee` (`regno`, `name`, `status`, `hostelfee`, `tuitionfee`, `image`) VALUES
('19BCE1699', 'ilakkiya', 'hosteller', 0, 0, 'ila.jpg'),
('19BCE1665', 'yukti ', 'day scholar', 0, 490000, 'yukt.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `stud_prof`
--

DROP TABLE IF EXISTS `stud_prof`;
CREATE TABLE IF NOT EXISTS `stud_prof` (
  `regno` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `programme` varchar(50) NOT NULL,
  `school` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `postal` int(11) NOT NULL,
  PRIMARY KEY (`regno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stud_prof`
--

INSERT INTO `stud_prof` (`regno`, `password`, `name`, `image`, `phone`, `programme`, `school`, `email`, `address`, `city`, `state`, `postal`) VALUES
('19BCE1699', 'ilakkiya', 'ILAKKIYA V', 'ila.jpg', '+91 8072878772', 'btech', 'scope', 'ilakkiya.v2019@vitstudent.ac.in', 'no 23, second street,velmurugan street', 'chennai', 'tamil nadu', 600099),
('19BCE1665', 'yukti', 'YUKTI S', 'yukt.jpg', '+91 9444849765', 'btech', 'scope', 'yukti.s2019@vitstudent.ac.in', 'Plot no:1 Radha Krishna Nagar, Jayanthy Nagar 2nd cross street, Kolathur', 'chennai', 'tamil nadu', 600099),
('19BCE1437', 'yesh', 'YESHASWINI B', 'yes.jpg', '+91 9677135754', 'btech', 'scope', 'lakkimaji2001@gmail.com', 'no 11,curran plot,sam street', 'chennai', 'tamil nadu', 600066);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
