-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2019 at 08:39 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

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
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `logId` int(11) NOT NULL,
  `event` text NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`logId`, `event`, `time`) VALUES
(1, 'Quiz With Name AI is Created', '2019-04-28 20:04:00'),
(2, 'Admin Viewed Activity Log', '2019-04-28 20:04:00'),
(3, 'Quiz With Name Computer Archetecure is Created', '2019-04-28 20:04:00'),
(4, 'Someone opened our Quiz List ', '2019-04-28 20:04:00'),
(5, 'Admin Viewed Activity Log', '2019-04-28 20:04:00'),
(6, 'Someone opened our Quiz List ', '2019-04-28 20:04:00'),
(7, 'Someone opened our Quiz List ', '2019-04-28 20:04:00'),
(8, 'Quiz With Id  is Deleted', '2019-04-28 20:04:00'),
(9, 'Admin Viewed Activity Log', '2019-04-28 20:04:00'),
(10, 'Quiz With Id 808 is Deleted', '2019-04-28 20:04:00'),
(11, 'Admin Viewed Activity Log', '2019-04-28 20:04:00');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `QId` int(11) NOT NULL,
  `QuestId` int(11) NOT NULL,
  `Quetion` text NOT NULL,
  `Valid` text NOT NULL,
  `FakeAns1` text NOT NULL,
  `FakeAns2` text NOT NULL,
  `FakeAns3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`QId`, `QuestId`, `Quetion`, `Valid`, `FakeAns1`, `FakeAns2`, `FakeAns3`) VALUES
(2957, 1, 'how are you ???', 'Fine', 'Good', '5arra', 'Tamam');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `QuizId` int(10) UNSIGNED NOT NULL,
  `QuizTitle` varchar(20) NOT NULL,
  `QuizDescription` text NOT NULL,
  `TotalScore` int(11) NOT NULL,
  `Duration` int(11) NOT NULL,
  `CompanyId` int(100) DEFAULT NULL,
  `Rate` int(11) DEFAULT NULL,
  `Numof_participant` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Table stores the data of the Quiz';

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`QuizId`, `QuizTitle`, `QuizDescription`, `TotalScore`, `Duration`, `CompanyId`, `Rate`, `Numof_participant`) VALUES
(999, 'Computer Archetecure', 'Test yourself in Computer Arch and Design or more opportunities ', 100, 15, NULL, NULL, NULL),
(2957, 'Algorithms', 'Test yourself in Algorithms concepts and stay tuned for more opportunities ', 10, 10, 22, NULL, NULL),
(8008, 'Computer Graphics', 'bla bla bla bla', 100, 10, NULL, NULL, NULL),
(10020, 'AI', 'Test yourself in AI concepts and stay tuned for more opportunities ', 100, 15, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`logId`);

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
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `logId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `QuestId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
