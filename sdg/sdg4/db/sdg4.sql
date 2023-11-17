-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 17, 2023 at 10:06 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdg4`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl4_1`
--

DROP TABLE IF EXISTS `tbl4_1`;
CREATE TABLE IF NOT EXISTS `tbl4_1` (
  `total_research` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `year` text NOT NULL,
  `total_citation` int NOT NULL,
  `source` varchar(255) NOT NULL,
  PRIMARY KEY (`total_research`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl4_1`
--

INSERT INTO `tbl4_1` (`total_research`, `title`, `author`, `year`, `total_citation`, `source`) VALUES
(23, 'A STUDY OF THE IMPACT OF EARLY CHILDHOOD EDUCATION ON COGNITIVE  AND SOCIOEMOTIONAL DEVELOPMENT, AND EFFECTIVE STRATEGIES FOR  IMPROVING ACCESS TO HIGH-QUALITY EARLY CHILDHOOD EDUCATION', 'ERIKA', '2023', 2, 'SCOPUS');

-- --------------------------------------------------------

--
-- Table structure for table `tbl44_firstgen`
--

DROP TABLE IF EXISTS `tbl44_firstgen`;
CREATE TABLE IF NOT EXISTS `tbl44_firstgen` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `total_number` int NOT NULL,
  `male` int NOT NULL,
  `female` int NOT NULL,
  `percentage` int NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl44_firstgen_firstyear`
--

DROP TABLE IF EXISTS `tbl44_firstgen_firstyear`;
CREATE TABLE IF NOT EXISTS `tbl44_firstgen_firstyear` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `total_number` int NOT NULL,
  `male` int NOT NULL,
  `female` int NOT NULL,
  `percentage` int NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl44_firstyear`
--

DROP TABLE IF EXISTS `tbl44_firstyear`;
CREATE TABLE IF NOT EXISTS `tbl44_firstyear` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `total_number` int NOT NULL,
  `male` int NOT NULL,
  `female` int NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl421_licensure`
--

DROP TABLE IF EXISTS `tbl421_licensure`;
CREATE TABLE IF NOT EXISTS `tbl421_licensure` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Program` varchar(255) NOT NULL,
  `EligibleTotal` int NOT NULL,
  `TookExam` int NOT NULL,
  `Acquired` int NOT NULL,
  `Failed` int NOT NULL,
  `PercentEligible` decimal(5,2) NOT NULL,
  `PercentTookExam` decimal(5,2) NOT NULL,
  `PercentAcquired` decimal(5,2) NOT NULL,
  `PercentFailed` decimal(5,2) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=87 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl421_licensure`
--

INSERT INTO `tbl421_licensure` (`ID`, `Program`, `EligibleTotal`, `TookExam`, `Acquired`, `Failed`, `PercentEligible`, `PercentTookExam`, `PercentAcquired`, `PercentFailed`) VALUES
(85, 'CE', 2000, 1500, 790, 610, '100.00', '75.00', '52.67', '40.67'),
(86, 'CTE', 500, 400, 360, 40, '100.00', '80.00', '90.00', '10.00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl422_let`
--

DROP TABLE IF EXISTS `tbl422_let`;
CREATE TABLE IF NOT EXISTS `tbl422_let` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `let total number` int NOT NULL,
  `bsed total number` int NOT NULL,
  `beed total number` int NOT NULL,
  `bped total number` int NOT NULL,
  `btled total number` int NOT NULL,
  `percentage` int NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl422_let`
--

INSERT INTO `tbl422_let` (`ID`, `let total number`, `bsed total number`, `beed total number`, `bped total number`, `btled total number`, `percentage`) VALUES
(1, 100, 100, 100, 100, 100, 92),
(2, 330, 70, 70, 90, 100, 92);

-- --------------------------------------------------------

--
-- Table structure for table `tbl431_resources`
--

DROP TABLE IF EXISTS `tbl431_resources`;
CREATE TABLE IF NOT EXISTS `tbl431_resources` (
  `total_number` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `cost` int NOT NULL,
  `fund` varchar(255) NOT NULL,
  PRIMARY KEY (`total_number`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl431_resources`
--

INSERT INTO `tbl431_resources` (`total_number`, `title`, `description`, `cost`, `fund`) VALUES
(2, 'Free courses leading to certificates or awards', 'Open courseware: Offer free access to course materials, lectures, and assignments for their undergraduate and graduate-level courses through their OpenCourseWare (OCW) programs. Anyone can access these materials without needing to enroll in a course or pa', 5000, 'Non-Government Organization');

-- --------------------------------------------------------

--
-- Table structure for table `tbl432_events`
--

DROP TABLE IF EXISTS `tbl432_events`;
CREATE TABLE IF NOT EXISTS `tbl432_events` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `event_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `event_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `total_cost` decimal(10,2) NOT NULL,
  `fund_source` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl432_events`
--

INSERT INTO `tbl432_events` (`ID`, `event_title`, `event_description`, `total_cost`, `fund_source`) VALUES
(1, 'The Goodness for All\r\nSpookython - A Coding Marathon', 'it is a coding a and a viewing program open fpr public', '2500.00', 'Mayor and Organization Funds'),
(3, 'Public lectures', 'Regularly host public lectures featuring experts and scholars from different fields of study. These lectures are \r\noften free or have a nominal fee, and they cover a range of topics, from science and technology to humanities and social sciences. Public lectures can provide an excellent opportunity for individuals to learn about new research and ideas in various fields.', '11000.00', 'Non-Government Organization');

-- --------------------------------------------------------

--
-- Table structure for table `tbl433_vocational`
--

DROP TABLE IF EXISTS `tbl433_vocational`;
CREATE TABLE IF NOT EXISTS `tbl433_vocational` (
  `total_number` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `cost` int NOT NULL,
  `fund` varchar(255) NOT NULL,
  PRIMARY KEY (`total_number`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl433_vocational`
--

INSERT INTO `tbl433_vocational` (`total_number`, `title`, `description`, `cost`, `fund`) VALUES
(1, 'Executive education programme', 'Programs that are usually offered by universities and business schools and are designed to be flexible and convenient for working professionals.', 25000, 'Batangas State University Lipa Campus TNEU');

-- --------------------------------------------------------

--
-- Table structure for table `tbl434_outreach`
--

DROP TABLE IF EXISTS `tbl434_outreach`;
CREATE TABLE IF NOT EXISTS `tbl434_outreach` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `cost` decimal(10,2) NOT NULL,
  `fund` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl434_outreach`
--

INSERT INTO `tbl434_outreach` (`ID`, `title`, `description`, `cost`, `fund`) VALUES
(2, 'Community service projects', 'Organize community service projects that involve students, faculty, and staff. These projects \r\ncan include initiatives such as volunteering at local schools, homeless shelters, or food banks. Such activities can benefit the community and also provide val', '12222.00', 'Batangas State University Lipa Campus TNEU');

-- --------------------------------------------------------

--
-- Table structure for table `tbl435_access`
--

DROP TABLE IF EXISTS `tbl435_access`;
CREATE TABLE IF NOT EXISTS `tbl435_access` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `50above` int NOT NULL,
  `50abovePercentage` int NOT NULL,
  `totalaccess` int NOT NULL,
  `totalPPAS` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `cost` int NOT NULL,
  `fund` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
