-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 16, 2023 at 06:22 PM
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
  `ID` int NOT NULL AUTO_INCREMENT,
  `total_research` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `year` text NOT NULL,
  `total_citation` int NOT NULL,
  `source` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl4_1`
--

INSERT INTO `tbl4_1` (`ID`, `total_research`, `title`, `author`, `year`, `total_citation`, `source`) VALUES
(22, 23, 'A STUDY OF THE IMPACT OF EARLY CHILDHOOD EDUCATION ON COGNITIVE  AND SOCIOEMOTIONAL DEVELOPMENT, AND EFFECTIVE STRATEGIES FOR  IMPROVING ACCESS TO HIGH-QUALITY EARLY CHILDHOOD EDUCATION', 'ERIKA', '2023', 2, 'SCOPUC'),
(23, 12, 'EXPLORING THE EFFECTIVENESS OF PEER MENTORING PROGRAMS IN \r\nPROMOTING ACADEMIC SUCCESS AND SOCIAL SUPPORT FOR STUDENTS \r\nFROM MARGINALIZED BACKGROUNDS', 'ERIKA', '1999', 2, 'KIMIII'),
(24, 2, 'A STUDY OF THE IMPACT OF EDUCATION ON LIFELONG LEARNING AND SKILLS \r\nDEVELOPMENT, AND EFFECTIVE STRATEGIES FOR PROMOTING LIFELONG \r\nLEARNING\r\n', 'ERIKA', '2022', 23, 'KIMIII KIMIII KIMIII KIMIII KIMIII KIMIII KIMIII'),
(26, 1, 'SASAASAA', 'EWWEWE', '2009', 21, 'EMMEEEE');

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
) ENGINE=MyISAM AUTO_INCREMENT=86 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl421_licensure`
--

INSERT INTO `tbl421_licensure` (`ID`, `Program`, `EligibleTotal`, `TookExam`, `Acquired`, `Failed`, `PercentEligible`, `PercentTookExam`, `PercentAcquired`, `PercentFailed`) VALUES
(85, 'CE', 2000, 1500, 790, 610, '100.00', '75.00', '52.67', '40.67');

-- --------------------------------------------------------

--
-- Table structure for table `tbl422_let`
--

DROP TABLE IF EXISTS `tbl422_let`;
CREATE TABLE IF NOT EXISTS `tbl422_let` (
  `ID` int NOT NULL,
  `let total number` int NOT NULL,
  `bsed total number` int NOT NULL,
  `beed total number` int NOT NULL,
  `bped total number` int NOT NULL,
  `btled total number` int NOT NULL,
  `percentage` int NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl422_let`
--

INSERT INTO `tbl422_let` (`ID`, `let total number`, `bsed total number`, `beed total number`, `bped total number`, `btled total number`, `percentage`) VALUES
(0, 100, 100, 100, 100, 100, 0);

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
  `fund` int NOT NULL,
  PRIMARY KEY (`total_number`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl432_events`
--

DROP TABLE IF EXISTS `tbl432_events`;
CREATE TABLE IF NOT EXISTS `tbl432_events` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `total_events_hosted` int DEFAULT NULL,
  `event_title` varchar(100) DEFAULT NULL,
  `event_description` text,
  `total_cost` decimal(10,2) DEFAULT NULL,
  `fund_source` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl433_vocational`
--

DROP TABLE IF EXISTS `tbl433_vocational`;
CREATE TABLE IF NOT EXISTS `tbl433_vocational` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `total_number` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `cost` int NOT NULL,
  `fund` int NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl434_outreach`
--

DROP TABLE IF EXISTS `tbl434_outreach`;
CREATE TABLE IF NOT EXISTS `tbl434_outreach` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `total_number` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `cost` int NOT NULL,
  `fund` int NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  `fund` int NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
