-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2023 at 02:31 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

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

CREATE TABLE `tbl4_1` (
  `ID` int(11) NOT NULL,
  `total_research` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `year` text NOT NULL,
  `total_citation` int(11) NOT NULL,
  `source` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

CREATE TABLE `tbl44_firstgen` (
  `ID` int(11) NOT NULL,
  `total_number` int(11) NOT NULL,
  `male` int(11) NOT NULL,
  `female` int(11) NOT NULL,
  `percentage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl44_firstgen_firstyear`
--

CREATE TABLE `tbl44_firstgen_firstyear` (
  `ID` int(11) NOT NULL,
  `total_number` int(11) NOT NULL,
  `male` int(11) NOT NULL,
  `female` int(11) NOT NULL,
  `percentage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl44_firstyear`
--

CREATE TABLE `tbl44_firstyear` (
  `ID` int(11) NOT NULL,
  `total_number` int(11) NOT NULL,
  `male` int(11) NOT NULL,
  `female` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl421_acquired`
--

CREATE TABLE `tbl421_acquired` (
  `ID` int(11) NOT NULL,
  `total_number` int(11) NOT NULL,
  `program` varchar(255) NOT NULL,
  `male` int(11) NOT NULL,
  `female` int(11) NOT NULL,
  `percentage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl421_eligible`
--

CREATE TABLE `tbl421_eligible` (
  `ID` int(11) NOT NULL,
  `total_number` int(11) NOT NULL,
  `program` varchar(255) NOT NULL,
  `male` int(11) NOT NULL,
  `female` int(11) NOT NULL,
  `percentage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl421_eligible`
--

INSERT INTO `tbl421_eligible` (`ID`, `total_number`, `program`, `male`, `female`, `percentage`) VALUES
(1, 12, 'beed', 6, 6, ''),
(2, 12, 'beed', 6, 6, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl421_failed`
--

CREATE TABLE `tbl421_failed` (
  `ID` int(11) NOT NULL,
  `total_number` int(11) NOT NULL,
  `program` varchar(255) NOT NULL,
  `male` int(11) NOT NULL,
  `female` int(11) NOT NULL,
  `percentage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl421_graduates`
--

CREATE TABLE `tbl421_graduates` (
  `ID` int(11) NOT NULL,
  `total_number` int(11) NOT NULL,
  `program` varchar(255) NOT NULL,
  `male` int(11) NOT NULL,
  `female` varchar(255) NOT NULL,
  `percentage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl422_let`
--

CREATE TABLE `tbl422_let` (
  `ID` int(11) NOT NULL,
  `let total number` int(11) NOT NULL,
  `letmale` int(11) NOT NULL,
  `letfemale` int(11) NOT NULL,
  `bsed total number` int(11) NOT NULL,
  `bsedmale` int(11) NOT NULL,
  `bsedfemale` int(11) NOT NULL,
  `beed total number` int(11) NOT NULL,
  `beedmale` int(11) NOT NULL,
  `beedfemale` int(11) NOT NULL,
  `bped total number` int(11) NOT NULL,
  `bpedmale` int(11) NOT NULL,
  `bpedfemale` int(11) NOT NULL,
  `btled total number` int(11) NOT NULL,
  `btledmale` int(11) NOT NULL,
  `btledfemale` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl422_let`
--

INSERT INTO `tbl422_let` (`ID`, `let total number`, `letmale`, `letfemale`, `bsed total number`, `bsedmale`, `bsedfemale`, `beed total number`, `beedmale`, `beedfemale`, `bped total number`, `bpedmale`, `bpedfemale`, `btled total number`, `btledmale`, `btledfemale`) VALUES
(34, 23, 10, 13, 7, 3, 4, 6, 3, 3, 5, 2, 3, 5, 2, 3),
(36, 4156, 610, 3546, 67, 23, 44, 3777, 343, 3434, 266, 232, 34, 46, 12, 34),
(37, 4156, 610, 3546, 67, 23, 44, 3777, 343, 3434, 266, 232, 34, 46, 12, 34),
(38, 189, 88, 101, 35, 23, 12, 57, 23, 34, 53, 21, 32, 44, 21, 23),
(39, 189, 88, 101, 35, 23, 12, 57, 23, 34, 53, 21, 32, 44, 21, 23),
(40, 554, 66, 488, 35, 12, 23, 42, 21, 21, 233, 21, 212, 244, 12, 232),
(41, 554, 66, 488, 35, 12, 23, 42, 21, 21, 233, 21, 212, 244, 12, 232);

-- --------------------------------------------------------

--
-- Table structure for table `tbl431_resources`
--

CREATE TABLE `tbl431_resources` (
  `ID` int(11) NOT NULL,
  `total_number` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `cost` int(11) NOT NULL,
  `fund` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl432_events`
--

CREATE TABLE `tbl432_events` (
  `ID` int(11) NOT NULL,
  `total_number` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `cost` int(11) NOT NULL,
  `fund` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl433_vocational`
--

CREATE TABLE `tbl433_vocational` (
  `ID` int(11) NOT NULL,
  `total_number` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `cost` int(11) NOT NULL,
  `fund` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl434_outreach`
--

CREATE TABLE `tbl434_outreach` (
  `ID` int(11) NOT NULL,
  `total_number` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `cost` int(11) NOT NULL,
  `fund` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl435_access`
--

CREATE TABLE `tbl435_access` (
  `ID` int(11) NOT NULL,
  `50above` int(11) NOT NULL,
  `50abovePercentage` int(11) NOT NULL,
  `totalaccess` int(11) NOT NULL,
  `totalPPAS` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `cost` int(11) NOT NULL,
  `fund` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl4_1`
--
ALTER TABLE `tbl4_1`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl44_firstgen`
--
ALTER TABLE `tbl44_firstgen`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl44_firstgen_firstyear`
--
ALTER TABLE `tbl44_firstgen_firstyear`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl44_firstyear`
--
ALTER TABLE `tbl44_firstyear`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl421_acquired`
--
ALTER TABLE `tbl421_acquired`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl421_eligible`
--
ALTER TABLE `tbl421_eligible`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl421_failed`
--
ALTER TABLE `tbl421_failed`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl421_graduates`
--
ALTER TABLE `tbl421_graduates`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl422_let`
--
ALTER TABLE `tbl422_let`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl431_resources`
--
ALTER TABLE `tbl431_resources`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl432_events`
--
ALTER TABLE `tbl432_events`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl433_vocational`
--
ALTER TABLE `tbl433_vocational`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl434_outreach`
--
ALTER TABLE `tbl434_outreach`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl435_access`
--
ALTER TABLE `tbl435_access`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl4_1`
--
ALTER TABLE `tbl4_1`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl44_firstgen`
--
ALTER TABLE `tbl44_firstgen`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl44_firstgen_firstyear`
--
ALTER TABLE `tbl44_firstgen_firstyear`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl44_firstyear`
--
ALTER TABLE `tbl44_firstyear`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl421_acquired`
--
ALTER TABLE `tbl421_acquired`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl421_eligible`
--
ALTER TABLE `tbl421_eligible`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl421_failed`
--
ALTER TABLE `tbl421_failed`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl421_graduates`
--
ALTER TABLE `tbl421_graduates`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl422_let`
--
ALTER TABLE `tbl422_let`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tbl431_resources`
--
ALTER TABLE `tbl431_resources`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl432_events`
--
ALTER TABLE `tbl432_events`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl433_vocational`
--
ALTER TABLE `tbl433_vocational`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl434_outreach`
--
ALTER TABLE `tbl434_outreach`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl435_access`
--
ALTER TABLE `tbl435_access`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
