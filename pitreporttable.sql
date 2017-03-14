-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2017 at 09:50 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scoutdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `pitreporttable`
--

CREATE TABLE `pitreporttable` (
  `reportID` int(11) NOT NULL,
  `teamNumber` int(11) NOT NULL,
  `teamName` text NOT NULL,
  `maxSpeed` int(11) NOT NULL,
  `operatingSpeed` int(11) NOT NULL,
  `driveName` text NOT NULL,
  `autonomous` tinyint(1) NOT NULL,
  `autonomousDesc` text NOT NULL,
  `oppositeRight` tinyint(1) NOT NULL,
  `oppositeLeft` tinyint(1) NOT NULL,
  `sameSide` tinyint(1) NOT NULL,
  `none` tinyint(1) NOT NULL,
  `notFeederRobot` tinyint(1) NOT NULL,
  `highGoal` tinyint(1) NOT NULL,
  `lowGoal` tinyint(1) NOT NULL,
  `maxBalls` int(11) NOT NULL,
  `capableOfGears` tinyint(1) NOT NULL,
  `gearLeft` tinyint(1) NOT NULL,
  `gearRight` tinyint(1) NOT NULL,
  `gearMiddlePeg` tinyint(1) NOT NULL,
  `gearNone` tinyint(1) NOT NULL,
  `notAGearRobot` tinyint(1) NOT NULL,
  `capableOfRope` tinyint(1) NOT NULL,
  `comments` text NOT NULL,
  `competition1` tinyint(1) NOT NULL,
  `competition2` tinyint(1) NOT NULL,
  `competition3` tinyint(1) NOT NULL,
  `reporterFirstName` text NOT NULL,
  `reporterLastName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pitreporttable`
--

INSERT INTO `pitreporttable` (`reportID`, `teamNumber`, `teamName`, `maxSpeed`, `operatingSpeed`, `driveName`, `autonomous`, `autonomousDesc`, `oppositeRight`, `oppositeLeft`, `sameSide`, `none`, `notFeederRobot`, `highGoal`, `lowGoal`, `maxBalls`, `capableOfGears`, `gearLeft`, `gearRight`, `gearMiddlePeg`, `gearNone`, `notAGearRobot`, `capableOfRope`, `comments`, `competition1`, `competition2`, `competition3`, `reporterFirstName`, `reporterLastName`) VALUES
(8, 1458, 'Red Tie Robotics', 32, 12, '2r33', 1, ' efad', 1, 0, 0, 0, 0, 1, 0, 321, 0, 1, 0, 0, 0, 0, 1, 'fadfd', 1, 1, 0, 'Esha', 'Vaishnav'),
(9, 1458, 'rqw', 213, 234, '124', 1, 'fasdf', 1, 1, 0, 0, 0, 1, 0, 12, 1, 1, 1, 0, 0, 0, 0, 'reqwr', 1, 1, 0, 'Esha', 'Vaishnav'),
(10, 1738, 'Blue Devils Robotics', 35, 10, 'ladfkl', 1, ' iaopgih', 1, 0, 1, 0, 0, 0, 1, 30, 1, 1, 1, 0, 0, 0, 0, 'hjfkdahlgksjdg', 1, 1, 0, 'Billy', 'Bob Jr.'),
(11, 234, 'fasdsadf', 1235, 1235, 'fdafsad', 1, ' 43wefda', 1, 1, 0, 0, 0, 1, 0, 1234, 1, 1, 0, 1, 0, 0, 0, 'afdfda', 1, 1, 0, 'Esha', 'Vaishnav');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pitreporttable`
--
ALTER TABLE `pitreporttable`
  ADD PRIMARY KEY (`reportID`),
  ADD KEY `reportID` (`reportID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pitreporttable`
--
ALTER TABLE `pitreporttable`
  MODIFY `reportID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
