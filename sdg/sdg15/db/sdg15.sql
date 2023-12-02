-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 02, 2023 at 03:41 PM
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
-- Database: `sdg15`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl15_1_landecosystem`
--

DROP TABLE IF EXISTS `tbl15_1_landecosystem`;
CREATE TABLE IF NOT EXISTS `tbl15_1_landecosystem` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `year` text NOT NULL,
  `total_citation` int NOT NULL,
  `source` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl15_1_landecosystem`
--

INSERT INTO `tbl15_1_landecosystem` (`ID`, `title`, `author`, `year`, `total_citation`, `source`) VALUES
(2, 'THE ROLE OF INDIGENOUS KNOWLEDGE IN LAND ECOSYSTEM \r\nMANAGEMENT', 'ERIKA', '2023', 11, 'WEB OF SCIENCE');

-- --------------------------------------------------------

--
-- Table structure for table `tbl15_2_employee`
--

DROP TABLE IF EXISTS `tbl15_2_employee`;
CREATE TABLE IF NOT EXISTS `tbl15_2_employee` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `total_employees` int DEFAULT NULL,
  `emp_mgardening` int DEFAULT NULL,
  `emp_fgardening` int DEFAULT NULL,
  `emp_mvertical` int DEFAULT NULL,
  `emp_fvertical` int DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl15_2_employee`
--

INSERT INTO `tbl15_2_employee` (`ID`, `total_employees`, `emp_mgardening`, `emp_fgardening`, `emp_mvertical`, `emp_fvertical`) VALUES
(2, 4500, 100, 200, 300, 400);

-- --------------------------------------------------------

--
-- Table structure for table `tbl15_2_student`
--

DROP TABLE IF EXISTS `tbl15_2_student`;
CREATE TABLE IF NOT EXISTS `tbl15_2_student` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `total_students` int DEFAULT NULL,
  `mgardening` int DEFAULT NULL,
  `fgardening` int DEFAULT NULL,
  `mvertical` int DEFAULT NULL,
  `fvertical` int DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl15_2_student`
--

INSERT INTO `tbl15_2_student` (`ID`, `total_students`, `mgardening`, `fgardening`, `mvertical`, `fvertical`) VALUES
(7, 4500, 100, 200, 300, 450);

-- --------------------------------------------------------

--
-- Table structure for table `tbl15_2_sustainable`
--

DROP TABLE IF EXISTS `tbl15_2_sustainable`;
CREATE TABLE IF NOT EXISTS `tbl15_2_sustainable` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `ppa_title` varchar(100) DEFAULT NULL,
  `ppa_description` text,
  `total_cost` decimal(10,2) DEFAULT NULL,
  `fund_source` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl15_2_sustainable`
--

INSERT INTO `tbl15_2_sustainable` (`ID`, `ppa_title`, `ppa_description`, `total_cost`, `fund_source`) VALUES
(1, 'PLANTING TREES AS A HABIT', 'PLANTING SEEDLINGS IS A SIMPLE GESTURE TO HELP THE ENVIRONMENT BUT HAVE A GREAT IMPACT.', '25000.00', 'DEPARTMENT OF AGRICULTURE'),
(2, 'PLANTING BARAKO', 'PLANTING TREES FOR THE FUTURE GENERATION.', '35000.00', 'DEPARTMENT OF AGRICULTURE'),
(3, 'SEEDS OF OUR DEEDS', 'PLANTING ACTIVITY IN OUR COMMUNITY TO PROMOTE PLANTING.', '50000.00', 'DEPARTMENT OF AGRICULTURE');

-- --------------------------------------------------------

--
-- Table structure for table `tbl15_3_endangered`
--

DROP TABLE IF EXISTS `tbl15_3_endangered`;
CREATE TABLE IF NOT EXISTS `tbl15_3_endangered` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `total_number` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `cost` decimal(10,2) NOT NULL,
  `fund` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl15_3_endangered`
--

INSERT INTO `tbl15_3_endangered` (`ID`, `total_number`, `title`, `description`, `cost`, `fund`) VALUES
(3, 1, 'Habitat Restoration', ' Restore habitats that have been damaged \r\nor degraded by human activity. This may involve planting native \r\nplants, removing invasive species, or creating new habitats.', '1199.00', 'Batangas State University Lipa Campus');

-- --------------------------------------------------------

--
-- Table structure for table `tbl15_5_1_biodiversity`
--

DROP TABLE IF EXISTS `tbl15_5_1_biodiversity`;
CREATE TABLE IF NOT EXISTS `tbl15_5_1_biodiversity` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `cost` decimal(10,2) NOT NULL,
  `fund` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl15_5_1_biodiversity`
--

INSERT INTO `tbl15_5_1_biodiversity` (`ID`, `title`, `description`, `cost`, `fund`) VALUES
(1, 'Tree Planting Campaign', ' Launch a tree-planting campaign on \r\ncampus that encourages students to plant trees to improve \r\nbiodiversity, reduce erosion, and sequester carbon.', '7877.00', 'Batangas State University Lipa Campus TNEU');

-- --------------------------------------------------------

--
-- Table structure for table `tbl15_41_events`
--

DROP TABLE IF EXISTS `tbl15_41_events`;
CREATE TABLE IF NOT EXISTS `tbl15_41_events` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `cost` decimal(10,2) NOT NULL,
  `fund` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl15_41_events`
--

INSERT INTO `tbl15_41_events` (`ID`, `title`, `description`, `cost`, `fund`) VALUES
(1, 'Forest Management Workshop//', 'This workshop could provide students with practical knowledge and skills on forest management practices such as tree planting, pruning, and harvesting, which are important for sustaining forests...', '1300.00', 'Non-Government Organizationsss');

-- --------------------------------------------------------

--
-- Table structure for table `tbl15_42_food`
--

DROP TABLE IF EXISTS `tbl15_42_food`;
CREATE TABLE IF NOT EXISTS `tbl15_42_food` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `total_policies` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `cost` decimal(10,2) NOT NULL,
  `fund` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl15_42_food`
--

INSERT INTO `tbl15_42_food` (`ID`, `total_policies`, `title`, `description`, `cost`, `fund`) VALUES
(1, 1, 'sasaa', 'ppoopopoo', '3332.00', 'Batangas State University Lipa Campus TNEU'),
(2, 0, 'xxxxxxxxxxx', 'xxxxxxxxxxxxxx', '1200.00', 'Batangas State University Lipa Campus');

-- --------------------------------------------------------

--
-- Table structure for table `tbl15_43_ecosystem`
--

DROP TABLE IF EXISTS `tbl15_43_ecosystem`;
CREATE TABLE IF NOT EXISTS `tbl15_43_ecosystem` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `cost` decimal(10,2) NOT NULL,
  `fund` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl15_43_ecosystem`
--

INSERT INTO `tbl15_43_ecosystem` (`ID`, `title`, `description`, `cost`, `fund`) VALUES
(1, 'Native Plant Garden:', 'Create a native plant garden on campus that showcases the diverse plant species of the region. Use the garden as an educational tool to teach students and visitors about the importance of native plants in maintaining biodiversity.', '3000.00', 'Non-Government Organization');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
