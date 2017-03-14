-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2017 at 09:48 PM
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
-- Table structure for table `matchreporttable`
--

CREATE TABLE `matchreporttable` (
  `reportID` int(11) NOT NULL,
  `teamNumber` int(11) NOT NULL,
  `driveStation` text NOT NULL,
  `autoHopper` tinyint(1) NOT NULL,
  `crossLine` tinyint(1) NOT NULL,
  `gearUse` text NOT NULL,
  `shooterRating` int(11) NOT NULL,
  `engageHopper` tinyint(1) NOT NULL,
  `shootingPlace` tinyint(1) NOT NULL,
  `whereShootingPlace` text NOT NULL,
  `susceptibleDefense` tinyint(1) NOT NULL,
  `highGoal` tinyint(1) NOT NULL,
  `lowGoal` tinyint(1) NOT NULL,
  `oppositeLeft` tinyint(1) NOT NULL,
  `oppositeRight` tinyint(1) NOT NULL,
  `sameSide` tinyint(1) NOT NULL,
  `noFeeder` tinyint(1) NOT NULL,
  `pickUp` tinyint(1) NOT NULL,
  `nuclear` tinyint(1) NOT NULL,
  `teleopHopper` tinyint(1) NOT NULL,
  `gearsPassedInAirship` int(11) NOT NULL,
  `leftPeg` tinyint(1) NOT NULL,
  `rightPeg` tinyint(1) NOT NULL,
  `centerPeg` tinyint(1) NOT NULL,
  `headingToRopeTime` int(11) NOT NULL,
  `timeToGrab` int(11) NOT NULL,
  `timeToClimb` int(11) NOT NULL,
  `lightOn` tinyint(1) NOT NULL,
  `climbRope` tinyint(1) NOT NULL,
  `comments` text NOT NULL,
  `robotDefense` tinyint(1) NOT NULL,
  `robotRating` int(11) NOT NULL,
  `competition` text NOT NULL,
  `teamScore` int(11) NOT NULL,
  `reporterFirstName` text NOT NULL,
  `reporterLastName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matchreporttable`
--

INSERT INTO `matchreporttable` (`reportID`, `teamNumber`, `driveStation`, `autoHopper`, `crossLine`, `gearUse`, `shooterRating`, `engageHopper`, `shootingPlace`, `whereShootingPlace`, `susceptibleDefense`, `highGoal`, `lowGoal`, `oppositeLeft`, `oppositeRight`, `sameSide`, `noFeeder`, `pickUp`, `nuclear`, `teleopHopper`, `gearsPassedInAirship`, `leftPeg`, `rightPeg`, `centerPeg`, `headingToRopeTime`, `timeToGrab`, `timeToClimb`, `lightOn`, `climbRope`, `comments`, `robotDefense`, `robotRating`, `competition`, `teamScore`, `reporterFirstName`, `reporterLastName`) VALUES
(8, 13241, '', 0, 0, 'attempted', 0, 0, 0, '', 0, 0, 1, 0, 1, 1, 0, 1, 0, 0, 342, 0, 1, 1, 0, 0, 0, 0, 1, 'fdfa', 0, 0, 'Competition 2', 311, 'Esha', 'Vaishnav'),
(9, 34, 'stationOne', 0, 0, 'True', 123, 0, 0, '0adsf', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 12, 0, 0, 0, 24, 12, 532, 0, 0, 'yeee', 0, 4, 'Competition 1', 194, 'Esha', 'Vaishnav'),
(10, 1421, 'stationOne', 0, 0, 'True', 4, 0, 0, ' 12534', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 145, 0, 0, 0, 643, 235, 53, 0, 0, 'YeEET', 0, 7, 'Competition 2', 1424, 'Esha', 'Vaishnav'),
(11, 1421, 'stationOne', 0, 0, 'True', 4, 0, 0, ' 12534', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 145, 0, 0, 0, 643, 235, 53, 0, 0, 'YeEET', 0, 7, 'Competition 2', 1424, 'Esha', 'Vaishnav'),
(12, 1421, 'stationOne', 0, 0, 'True', 4, 0, 0, ' 12534', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 145, 0, 0, 0, 643, 235, 53, 0, 0, 'YeEET', 0, 7, 'Competition 2', 1424, 'Esha', 'Vaishnav'),
(13, 1421, 'stationOne', 0, 0, 'True', 4, 0, 0, ' 12534', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 145, 0, 0, 0, 643, 235, 53, 0, 0, 'YeEET', 0, 7, 'Competition 2', 1424, 'Esha', 'Vaishnav'),
(14, 1421, 'stationOne', 0, 0, 'True', 4, 0, 0, ' 12534', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 145, 0, 0, 0, 643, 235, 53, 0, 0, 'YeEET', 0, 7, 'Competition 2', 1424, 'Esha', 'Vaishnav'),
(15, 1421, 'stationOne', 0, 0, 'True', 4, 0, 0, ' 12534', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 145, 0, 0, 0, 643, 235, 53, 0, 0, 'YeEET', 0, 7, 'Competition 2', 1424, 'Esha', 'Vaishnav'),
(16, 5357, 'stationOne', 0, 0, 'True', 4, 0, 0, ' 12534', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 145, 0, 0, 0, 643, 235, 53, 0, 0, 'YeEET', 0, 7, 'Competition 2', 1424, 'Esha', 'Vaishnav');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `matchreporttable`
--
ALTER TABLE `matchreporttable`
  ADD PRIMARY KEY (`reportID`),
  ADD KEY `reportID` (`reportID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `matchreporttable`
--
ALTER TABLE `matchreporttable`
  MODIFY `reportID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
