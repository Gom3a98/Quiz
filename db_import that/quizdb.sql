-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2019 at 10:57 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `QId` int(11) NOT NULL,
  `QuestId` int(11) NOT NULL,
  `Quetion` varchar(20) NOT NULL,
  `Valid` text NOT NULL,
  `FakeAns1` text NOT NULL,
  `FakeAns2` text NOT NULL,
  `FakeAns3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`QId`, `QuestId`, `Quetion`, `Valid`, `FakeAns1`, `FakeAns2`, `FakeAns3`) VALUES
(1886, 256, 'KK', 'KKK', 'LL', 'QQ', 'QQ'),
(1886, 601, 'MM', 'HH', 'HH', 'HH', 'HHH'),
(1886, 637, 'KK', 'KKK', 'LL', 'QQ', 'QQ'),
(8809, 673, '', '', '', '', ''),
(1886, 747, 'MM', 'HH', 'HH', 'HH', 'HHH'),
(1886, 837, 'UU', 'GG', 'GG', 'GG', 'GG'),
(8948, 850, '', '', '', '', ''),
(1886, 1037, 'KK', 'KKK', 'LL', 'QQ', 'QQ'),
(1886, 1153, 'DD', 'DD', 'DD', 'DD', 'DD'),
(8948, 1320, '', '', '', '', ''),
(1886, 1346, 'HH', 'KK', 'KK', 'KKK', 'KKKK'),
(8948, 1375, '', '', '', '', ''),
(1886, 1451, 'FF', 'FF', 'FF', 'FF', 'FF'),
(1886, 1646, 'KK', 'KKK', 'LL', 'QQ', 'QQ'),
(1886, 1648, 'HH', 'KK', 'KK', 'KKK', 'KKKK'),
(1886, 1722, 'CC', 'CC', 'CC', 'CC', 'CC'),
(1886, 1787, 'MM', 'HH', 'HH', 'HH', 'HHH'),
(1886, 1869, 'CC', 'CC', 'CC', 'CC', 'CC'),
(1886, 1949, 'FF', 'FF', 'FF', 'FF', 'FF'),
(1886, 2079, 'QQQ', 'QQQ', 'QQQ', 'QQQ', 'QQQ'),
(1886, 2151, 'GG', 'GG', 'GG', 'GG', 'GG'),
(1886, 2354, 'QQQ', 'QQQ', 'QQQ', 'QQQ', 'QQQ'),
(1886, 2786, 'CC', 'CC', 'CC', 'CC', 'CC'),
(1886, 2911, 'CC', 'CC', 'CC', 'CC', 'CC'),
(1886, 3229, 'DD', 'DD', 'DD', 'DD', 'DD'),
(1886, 3297, 'MM', 'HH', 'HH', 'HH', 'HHH'),
(8948, 3395, '', '', '', '', ''),
(1886, 3725, 'asfdsfsdf', 'AA', 'BB', 'B', 'BB'),
(1886, 3823, 'UU', 'GG', 'GG', 'GG', 'GG'),
(8948, 3834, '', '', '', '', ''),
(1886, 3877, 'CC', 'CC', 'CC', 'CC', 'CC'),
(1886, 4409, 'asfdsfsdf', 'AA', 'BB', 'B', 'BB'),
(1886, 4580, 'asfdsfsdf', 'AA', 'BB', 'B', 'BB'),
(1886, 4817, 'GG', 'GG', 'GG', 'GG', 'GG'),
(1886, 4981, 'QQQ', 'QQQ', 'QQQ', 'QQQ', 'QQQ'),
(1886, 5182, 'HH', 'KK', 'KK', 'KKK', 'KKKK'),
(1886, 5301, 'asfdsfsdf', 'AA', 'BB', 'B', 'BB'),
(1886, 5358, 'GG', 'GG', 'GG', 'GG', 'GG'),
(1886, 5500, 'FF', 'FF', 'FF', 'FF', 'FF'),
(1886, 5535, 'UU', 'GG', 'GG', 'GG', 'GG'),
(8948, 5569, '', '', '', '', ''),
(1886, 5603, 'DD', 'DD', 'DD', 'DD', 'DD'),
(1886, 5605, 'HH', 'KK', 'KK', 'KKK', 'KKKK'),
(1886, 5756, 'UU', 'GG', 'GG', 'GG', 'GG'),
(8948, 5967, '', '', '', '', ''),
(1886, 6032, 'DD', 'DD', 'DD', 'DD', 'DD'),
(1886, 6432, 'UU', 'GG', 'GG', 'GG', 'GG'),
(1886, 6528, 'UU', 'GG', 'GG', 'GG', 'GG'),
(1886, 6572, 'HH', 'KK', 'KK', 'KKK', 'KKKK'),
(1886, 6718, 'MM', 'HH', 'HH', 'HH', 'HHH'),
(1886, 6755, 'QQQ', 'QQQ', 'QQQ', 'QQQ', 'QQQ'),
(8948, 6895, '', '', '', '', ''),
(1886, 7001, 'MM', 'HH', 'HH', 'HH', 'HHH'),
(1886, 7367, 'FF', 'FF', 'FF', 'FF', 'FF'),
(1886, 7390, 'KK', 'KKK', 'LL', 'QQ', 'QQ'),
(1886, 7636, 'GG', 'GG', 'GG', 'GG', 'GG'),
(1886, 7731, 'HH', 'KK', 'KK', 'KKK', 'KKKK'),
(1886, 8214, 'KK', 'KKK', 'LL', 'QQ', 'QQ'),
(1886, 8487, 'CC', 'CC', 'CC', 'CC', 'CC'),
(1886, 8592, 'QQQ', 'QQQ', 'QQQ', 'QQQ', 'QQQ'),
(1886, 8626, 'GG', 'GG', 'GG', 'GG', 'GG'),
(1886, 8715, 'asfdsfsdf', 'AA', 'BB', 'B', 'BB'),
(1886, 8733, 'FF', 'FF', 'FF', 'FF', 'FF'),
(1886, 8734, 'asfdsfsdf', 'AA', 'BB', 'B', 'BB'),
(1886, 9102, 'DD', 'DD', 'DD', 'DD', 'DD'),
(8948, 9145, '', '', '', '', ''),
(1886, 9339, 'GG', 'GG', 'GG', 'GG', 'GG'),
(1886, 9416, 'QQQ', 'QQQ', 'QQQ', 'QQQ', 'QQQ'),
(1886, 9711, 'FF', 'FF', 'FF', 'FF', 'FF');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `QuizId` int(10) UNSIGNED NOT NULL,
  `QuizTitle` varchar(20) DEFAULT NULL,
  `QuizDescription` text,
  `TotalScore` int(11) DEFAULT NULL,
  `Duration` int(11) DEFAULT NULL,
  `companyId` int(100) DEFAULT NULL,
  `Numof_participant` int(100) DEFAULT NULL,
  `Rate` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Table stores the data of the Quiz';

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`QuizId`, `QuizTitle`, `QuizDescription`, `TotalScore`, `Duration`, `companyId`, `Numof_participant`, `Rate`) VALUES
(631, 'Operating System', 'Test Your self in OS Principles', 10, 10, 5, 0, 0),
(1886, 'OOP', 'Great Subject', 7, 9, 5, 3, 41),
(3474, 'Java', 'Java Tutorial', 10, 20, 1, 0, 0),
(4921, 'Design Pattern', 'Practice on Design pattern', 10, 5, 10, 0, 0),
(8809, 'C++ Programming Lang', 'Tet yourSelf', 15, 20, 20, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`QuestId`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`QuizId`),
  ADD UNIQUE KEY `QuizTitle` (`QuizTitle`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `QuestId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9712;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
