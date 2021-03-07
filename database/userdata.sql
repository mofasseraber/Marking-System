-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2017 at 02:28 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Name` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Name`, `Password`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `html5`
--

CREATE TABLE `html5` (
  `Name` varchar(30) NOT NULL,
  `MCQ` int(10) NOT NULL,
  `Subjective1` int(20) NOT NULL,
  `Subjective2` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `html5`
--

INSERT INTO `html5` (`Name`, `MCQ`, `Subjective1`, `Subjective2`) VALUES
('aber', 20, 10, 30),
('Clark', 10, 0, 10);

-- --------------------------------------------------------

--
-- Table structure for table `javascript`
--

CREATE TABLE `javascript` (
  `Name` varchar(20) NOT NULL,
  `MCQ` int(20) NOT NULL,
  `Subjective1` int(20) NOT NULL,
  `Subjective2` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `javascript`
--

INSERT INTO `javascript` (`Name`, `MCQ`, `Subjective1`, `Subjective2`) VALUES
('Clark', 20, 20, 20);

-- --------------------------------------------------------

--
-- Table structure for table `php`
--

CREATE TABLE `php` (
  `Name` varchar(30) NOT NULL,
  `MCQ` int(20) NOT NULL,
  `Subjective1` int(20) NOT NULL,
  `Subjective2` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `php`
--

INSERT INTO `php` (`Name`, `MCQ`, `Subjective1`, `Subjective2`) VALUES
('Clark', 20, 20, 20);

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `Name` varchar(50) NOT NULL,
  `ID` int(20) NOT NULL,
  `Adress` varchar(90) NOT NULL,
  `Number` bigint(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Photo` blob NOT NULL,
  `Type` varchar(100) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`Name`, `ID`, `Adress`, `Number`, `Email`, `Photo`, `Type`, `Password`) VALUES
('Clark', 1, 'krypton', 911, 'superman@gmail.com', '', 'profesional', 'Iamsuperman'),
('aber', 16, 'subang', 11111111, 'aber@yahoo.com', '', 'member', 'aber');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `Name` (`Name`),
  ADD UNIQUE KEY `Password` (`Password`);

--
-- Indexes for table `html5`
--
ALTER TABLE `html5`
  ADD UNIQUE KEY `Name_2` (`Name`),
  ADD KEY `Name` (`Name`);

--
-- Indexes for table `javascript`
--
ALTER TABLE `javascript`
  ADD UNIQUE KEY `Name` (`Name`);

--
-- Indexes for table `php`
--
ALTER TABLE `php`
  ADD UNIQUE KEY `Name` (`Name`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
