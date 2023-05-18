-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2023 at 11:17 PM
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
-- Database: `putovanje`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `administratorId` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`administratorId`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'maja', '123');

-- --------------------------------------------------------

--
-- Table structure for table `destinacija`
--

CREATE TABLE `destinacija` (
  `destinacijaId` int(11) NOT NULL,
  `nazivDestinacije` varchar(255) NOT NULL,
  `brojLjudi` int(11) NOT NULL,
  `cena` decimal(10,2) NOT NULL,
  `vrstaId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `destinacija`
--

INSERT INTO `destinacija` (`destinacijaId`, `nazivDestinacije`, `brojLjudi`, `cena`, `vrstaId`) VALUES
(1, 'Lefkada', 2, '60000.00', 1),
(2, 'Rim', 2, '100000.00', 4),
(3, 'Bec', 3, '60000.00', 4),
(4, 'Tajland', 2, '120000.00', 3),
(5, 'Paris', 2, '100000.00', 4),
(6, 'London', 1, '80000.00', 4),
(7, 'Egipat', 2, '120000.00', 3),
(8, 'Alpi', 3, '90000.00', 2),
(9, 'Krit', 4, '80000.00', 1),
(10, 'Positano', 1, '70000.00', 1),
(11, 'Kuba', 2, '130000.00', 3);

-- --------------------------------------------------------

--
-- Table structure for table `vrsta`
--

CREATE TABLE `vrsta` (
  `vrstaId` int(11) NOT NULL,
  `nazivVrste` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vrsta`
--

INSERT INTO `vrsta` (`vrstaId`, `nazivVrste`) VALUES
(1, 'Letovanje'),
(2, 'Zimovanje'),
(3, 'Egzoticno putovanje'),
(4, 'Putovanje - gradovi Evrope');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`administratorId`);

--
-- Indexes for table `destinacija`
--
ALTER TABLE `destinacija`
  ADD PRIMARY KEY (`destinacijaId`),
  ADD KEY `vrstaId` (`vrstaId`);

--
-- Indexes for table `vrsta`
--
ALTER TABLE `vrsta`
  ADD PRIMARY KEY (`vrstaId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `administratorId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `destinacija`
--
ALTER TABLE `destinacija`
  MODIFY `destinacijaId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `vrsta`
--
ALTER TABLE `vrsta`
  MODIFY `vrstaId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `destinacija`
--
ALTER TABLE `destinacija`
  ADD CONSTRAINT `destinacija_ibfk_1` FOREIGN KEY (`vrstaId`) REFERENCES `vrsta` (`vrstaId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
