-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2023 at 07:23 AM
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
(1, 1, 'as', 'qww', '2012', 2, ''),
(17, 12, 'ERIKA', 'ERIKA', '2001', 12, 'SCOPUS');

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
-- Table structure for table `tbl422_beed`
--

CREATE TABLE `tbl422_beed` (
  `ID` int(11) NOT NULL,
  `male` int(11) NOT NULL,
  `female` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl422_bped`
--

CREATE TABLE `tbl422_bped` (
  `ID` int(11) NOT NULL,
  `male` int(11) NOT NULL,
  `female` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl422_bsed`
--

CREATE TABLE `tbl422_bsed` (
  `ID` int(11) NOT NULL,
  `male` int(11) NOT NULL,
  `female` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl422_btled`
--

CREATE TABLE `tbl422_btled` (
  `ID` int(11) NOT NULL,
  `male` int(11) NOT NULL,
  `female` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl422_let`
--

CREATE TABLE `tbl422_let` (
  `ID` int(11) NOT NULL,
  `male` int(11) NOT NULL,
  `female` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Indexes for table `tbl422_beed`
--
ALTER TABLE `tbl422_beed`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl422_bped`
--
ALTER TABLE `tbl422_bped`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl422_bsed`
--
ALTER TABLE `tbl422_bsed`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl422_btled`
--
ALTER TABLE `tbl422_btled`
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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `tbl422_beed`
--
ALTER TABLE `tbl422_beed`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl422_bsed`
--
ALTER TABLE `tbl422_bsed`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl422_btled`
--
ALTER TABLE `tbl422_btled`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl422_let`
--
ALTER TABLE `tbl422_let`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

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
