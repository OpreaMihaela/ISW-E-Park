-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2023 at 05:59 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookingsysystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings_record1`
--

CREATE TABLE `bookings_record1` (
  `ID` int(100) NOT NULL,
  `FIRSTNAME` varchar(30) NOT NULL,
  `LASTNAME` varchar(30) NOT NULL,
  `PHONE` varchar(30) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings_record1`
--

INSERT INTO `bookings_record1` (`ID`, `FIRSTNAME`, `LASTNAME`, `PHONE`, `EMAIL`, `DATE`) VALUES
(1, 'Andrei', 'Ion', '758698321', 'andrei@yahoo.com', '2023-04-29'),
(3, 'test', 'test', 'test', 'test@yahoo.com', '2023-04-25'),
(4, 'Ionescu', 'Valentina', '0758348215', 'valentina@gmail.com', '2023-04-26'),
(6, 'miau', 'miau', 'miau', 'miau@miau', '2023-05-02'),
(8, 'test', 'test', '0789548662', 'test@yahoo.com', '2023-05-08');

-- --------------------------------------------------------

--
-- Table structure for table `bookings_record2`
--

CREATE TABLE `bookings_record2` (
  `ID` int(100) NOT NULL,
  `FIRSTNAME` varchar(30) NOT NULL,
  `LASTNAME` varchar(30) NOT NULL,
  `PHONE` varchar(30) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings_record2`
--

INSERT INTO `bookings_record2` (`ID`, `FIRSTNAME`, `LASTNAME`, `PHONE`, `EMAIL`, `DATE`) VALUES
(1, 'Marinescu', 'Mihaela', '0759241665', 'mihaela@gmail.com', '2023-05-09');

-- --------------------------------------------------------

--
-- Table structure for table `bookings_record3`
--

CREATE TABLE `bookings_record3` (
  `ID` int(100) NOT NULL,
  `FIRSTNAME` varchar(30) NOT NULL,
  `LASTNAME` varchar(30) NOT NULL,
  `PHONE` varchar(30) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings_record3`
--

INSERT INTO `bookings_record3` (`ID`, `FIRSTNAME`, `LASTNAME`, `PHONE`, `EMAIL`, `DATE`) VALUES
(1, 'maria', 'ilie', '0754865998', 'mari@yahoo.com', '2023-05-09'),
(2, 'test', 'test', '846532', 'test@gmail.com', '2023-04-28');

-- --------------------------------------------------------

--
-- Table structure for table `bookings_record4`
--

CREATE TABLE `bookings_record4` (
  `ID` int(100) NOT NULL,
  `FIRSTNAME` varchar(30) NOT NULL,
  `LASTNAME` varchar(30) NOT NULL,
  `PHONE` varchar(30) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings_record4`
--

INSERT INTO `bookings_record4` (`ID`, `FIRSTNAME`, `LASTNAME`, `PHONE`, `EMAIL`, `DATE`) VALUES
(1, 'test', 'test', '45365963', 'test@gmail.com', '2023-04-30');

-- --------------------------------------------------------

--
-- Table structure for table `bookings_record5`
--

CREATE TABLE `bookings_record5` (
  `ID` int(100) NOT NULL,
  `FIRSTNAME` varchar(30) NOT NULL,
  `LASTNAME` varchar(30) NOT NULL,
  `PHONE` varchar(30) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings_record5`
--

INSERT INTO `bookings_record5` (`ID`, `FIRSTNAME`, `LASTNAME`, `PHONE`, `EMAIL`, `DATE`) VALUES
(1, 'test', 'test', '845623', 'test@yahoo.com', '2023-05-02');

-- --------------------------------------------------------

--
-- Table structure for table `bookings_record6`
--

CREATE TABLE `bookings_record6` (
  `ID` int(100) NOT NULL,
  `FIRSTNAME` varchar(30) NOT NULL,
  `LASTNAME` varchar(30) NOT NULL,
  `PHONE` varchar(30) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings_record6`
--

INSERT INTO `bookings_record6` (`ID`, `FIRSTNAME`, `LASTNAME`, `PHONE`, `EMAIL`, `DATE`) VALUES
(4, 'test', 'test', '8456132', 'test@yahoo.com', '2023-05-02');

-- --------------------------------------------------------

--
-- Table structure for table `bookings_record7`
--

CREATE TABLE `bookings_record7` (
  `ID` int(100) NOT NULL,
  `FIRSTNAME` varchar(30) NOT NULL,
  `LASTNAME` varchar(30) NOT NULL,
  `PHONE` varchar(30) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings_record7`
--

INSERT INTO `bookings_record7` (`ID`, `FIRSTNAME`, `LASTNAME`, `PHONE`, `EMAIL`, `DATE`) VALUES
(1, 'test', 'test', '8451236', 'test@yahoo.com', '2023-05-16');

-- --------------------------------------------------------

--
-- Table structure for table `bookings_record8`
--

CREATE TABLE `bookings_record8` (
  `ID` int(100) NOT NULL,
  `FIRSTNAME` varchar(30) NOT NULL,
  `LASTNAME` varchar(30) NOT NULL,
  `PHONE` varchar(30) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings_record8`
--

INSERT INTO `bookings_record8` (`ID`, `FIRSTNAME`, `LASTNAME`, `PHONE`, `EMAIL`, `DATE`) VALUES
(1, 'test', 'test', '9841326', 'test@gmail.com', '2023-05-05');

-- --------------------------------------------------------

--
-- Table structure for table `bookings_record9`
--

CREATE TABLE `bookings_record9` (
  `ID` int(100) NOT NULL,
  `FIRSTNAME` varchar(30) NOT NULL,
  `LASTNAME` varchar(30) NOT NULL,
  `PHONE` varchar(30) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings_record9`
--

INSERT INTO `bookings_record9` (`ID`, `FIRSTNAME`, `LASTNAME`, `PHONE`, `EMAIL`, `DATE`) VALUES
(1, 'test', 'test', '85123', 'test@gmail.com', '2023-05-09');

-- --------------------------------------------------------

--
-- Table structure for table `bookings_record10`
--

CREATE TABLE `bookings_record10` (
  `ID` int(100) NOT NULL,
  `FIRSTNAME` varchar(30) NOT NULL,
  `LASTNAME` varchar(30) NOT NULL,
  `PHONE` varchar(30) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings_record10`
--

INSERT INTO `bookings_record10` (`ID`, `FIRSTNAME`, `LASTNAME`, `PHONE`, `EMAIL`, `DATE`) VALUES
(1, 'Dumitrache', 'Bianca', '0758624117', 'bianca@yahoo.com', '2023-05-09'),
(2, 'test', 'test', '745132', 'test@gmail.com', '2023-04-27');

-- --------------------------------------------------------

--
-- Table structure for table `bookings_record11`
--

CREATE TABLE `bookings_record11` (
  `ID` int(100) NOT NULL,
  `FIRSTNAME` varchar(30) NOT NULL,
  `LASTNAME` varchar(30) NOT NULL,
  `PHONE` varchar(30) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings_record11`
--

INSERT INTO `bookings_record11` (`ID`, `FIRSTNAME`, `LASTNAME`, `PHONE`, `EMAIL`, `DATE`) VALUES
(1, 'jk', 'vghbjk', 'vghbj', 'vghbj@gh.com', '2023-04-27'),
(2, 'jk', 'vghbjk', 'vghbj', 'vghbj@gh.com', '2023-04-27'),
(3, 'jk', 'vghbjk', 'vghbj', 'vghbj@gh.com', '2023-04-27'),
(4, 'test', 'test', '541698456', 'test@yahoo.com', '2023-05-12');

-- --------------------------------------------------------

--
-- Table structure for table `bookings_record12`
--

CREATE TABLE `bookings_record12` (
  `ID` int(100) NOT NULL,
  `FIRSTNAME` varchar(30) NOT NULL,
  `LASTNAME` varchar(30) NOT NULL,
  `PHONE` varchar(30) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings_record12`
--

INSERT INTO `bookings_record12` (`ID`, `FIRSTNAME`, `LASTNAME`, `PHONE`, `EMAIL`, `DATE`) VALUES
(1, 'test', 'test', '9845123', 'test@gmail.com', '2023-05-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings_record1`
--
ALTER TABLE `bookings_record1`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `bookings_record2`
--
ALTER TABLE `bookings_record2`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `bookings_record3`
--
ALTER TABLE `bookings_record3`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `bookings_record4`
--
ALTER TABLE `bookings_record4`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `bookings_record5`
--
ALTER TABLE `bookings_record5`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `bookings_record6`
--
ALTER TABLE `bookings_record6`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `bookings_record7`
--
ALTER TABLE `bookings_record7`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `bookings_record8`
--
ALTER TABLE `bookings_record8`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `bookings_record9`
--
ALTER TABLE `bookings_record9`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `bookings_record10`
--
ALTER TABLE `bookings_record10`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `bookings_record11`
--
ALTER TABLE `bookings_record11`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `bookings_record12`
--
ALTER TABLE `bookings_record12`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings_record1`
--
ALTER TABLE `bookings_record1`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `bookings_record2`
--
ALTER TABLE `bookings_record2`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookings_record3`
--
ALTER TABLE `bookings_record3`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bookings_record4`
--
ALTER TABLE `bookings_record4`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookings_record5`
--
ALTER TABLE `bookings_record5`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookings_record6`
--
ALTER TABLE `bookings_record6`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bookings_record7`
--
ALTER TABLE `bookings_record7`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookings_record8`
--
ALTER TABLE `bookings_record8`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookings_record9`
--
ALTER TABLE `bookings_record9`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookings_record10`
--
ALTER TABLE `bookings_record10`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bookings_record11`
--
ALTER TABLE `bookings_record11`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bookings_record12`
--
ALTER TABLE `bookings_record12`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
