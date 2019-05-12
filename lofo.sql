-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2019 at 06:02 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.1.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lofo`
--

-- --------------------------------------------------------

--
-- Table structure for table `personlisting`
--

CREATE TABLE `personlisting` (
  `personId` int(255) NOT NULL,
  `personName` varchar(200) DEFAULT NULL,
  `personAge` int(5) DEFAULT NULL,
  `personGender` varchar(10) DEFAULT NULL,
  `personHeight` int(5) DEFAULT NULL,
  `personWeight` int(5) DEFAULT NULL,
  `personRace` varchar(200) DEFAULT NULL,
  `personPlace` varchar(255) DEFAULT NULL,
  `personClothing` varchar(255) DEFAULT NULL,
  `personDesc` varchar(210) DEFAULT NULL,
  `listerEmail` varchar(200) DEFAULT NULL,
  `listerContact` varchar(100) DEFAULT NULL,
  `listerName` varchar(100) DEFAULT NULL,
  `personCountry` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personlisting`
--

INSERT INTO `personlisting` (`personId`, `personName`, `personAge`, `personGender`, `personHeight`, `personWeight`, `personRace`, `personPlace`, `personClothing`, `personDesc`, `listerEmail`, `listerContact`, `listerName`, `personCountry`) VALUES
(2, 'Charlie', 11, 'Male', 140, 35, 'Asian', 'Pagoda', 'White t-shirt with animations and blue jeans with black rubber shoes', '', 'contact@gmail.com', '', 'Claire', 'Myanmar');

-- --------------------------------------------------------

--
-- Table structure for table `petlisting`
--

CREATE TABLE `petlisting` (
  `petId` int(200) NOT NULL,
  `petName` varchar(255) DEFAULT NULL,
  `petBreed` varchar(200) DEFAULT NULL,
  `petGender` varchar(20) DEFAULT NULL,
  `petCoat` varchar(100) DEFAULT NULL,
  `petColor` varchar(100) DEFAULT NULL,
  `petCountry` varchar(200) DEFAULT NULL,
  `petPlace` varchar(200) DEFAULT NULL,
  `petCollar` varchar(100) DEFAULT NULL,
  `petDesc` varchar(210) DEFAULT NULL,
  `listerEmail` varchar(200) NOT NULL,
  `listerContact` varchar(200) NOT NULL,
  `listerName` varchar(200) DEFAULT NULL,
  `petType` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petlisting`
--

INSERT INTO `petlisting` (`petId`, `petName`, `petBreed`, `petGender`, `petCoat`, `petColor`, `petCountry`, `petPlace`, `petCollar`, `petDesc`, `listerEmail`, `listerContact`, `listerName`, `petType`) VALUES
(1, 'Alice', 'Chihuahua', 'Female', 'Shorthaired', 'Black with white spots', 'Anguilla', 'Around the park', 'Bone collar with her name on it', 'Responds to Alice', 'contact@contact.com', '', 'Alex', 'Dog');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `userId` int(200) NOT NULL,
  `firstName` varchar(200) DEFAULT NULL,
  `lastName` varchar(200) DEFAULT NULL,
  `emailAdd` varchar(200) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `indentification` varchar(255) DEFAULT NULL,
  `country` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`userId`, `firstName`, `lastName`, `emailAdd`, `password`, `indentification`, `country`) VALUES
(9, 'Clarisse', 'Catacutan', 'clarissevjoyce@gmail.com', '$2y$12$uH6bt8mdqDWY5KJqeJELt.bMn3k6QQ/YYM8Zpkmd7hSs9VCbq0OVi', NULL, 'MY');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `personlisting`
--
ALTER TABLE `personlisting`
  ADD PRIMARY KEY (`personId`);

--
-- Indexes for table `petlisting`
--
ALTER TABLE `petlisting`
  ADD PRIMARY KEY (`petId`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `personlisting`
--
ALTER TABLE `personlisting`
  MODIFY `personId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `petlisting`
--
ALTER TABLE `petlisting`
  MODIFY `petId` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `userId` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
