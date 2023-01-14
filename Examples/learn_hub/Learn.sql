-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 31, 2020 at 07:51 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Learn`
--

-- --------------------------------------------------------

--
-- Table structure for table `coursetb`
--

CREATE TABLE `coursetb` (
  `Title` varchar(200) NOT NULL,
  `id` int(11) NOT NULL,
  `why learn` varchar(200) NOT NULL,
  `things learned` varchar(200) NOT NULL,
  `level` int(11) NOT NULL,
  `author` varchar(200) NOT NULL,
  `summary` varchar(200) NOT NULL,
  `timestart` datetime NOT NULL DEFAULT current_timestamp(),
  `major subject` varchar(200) NOT NULL,
  `minor subject` varchar(200) NOT NULL,
  `cost` int(11) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=big5;

--
-- Dumping data for table `coursetb`
--

INSERT INTO `coursetb` (`Title`, `id`, `why learn`, `things learned`, `level`, `author`, `summary`, `timestart`, `major subject`, `minor subject`, `cost`, `time`) VALUES
('Course example', 1, 'why learn 1, why learn 2, why learn 3', 'things 1, things 2, things 3, things 4', 1, 'Mark Soulier', 'this is the summary', '2020-07-13 22:16:44', 'Buissness', 'Acounting', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `majortb`
--

CREATE TABLE `majortb` (
  `Title` varchar(200) NOT NULL,
  `pic src` varchar(200) NOT NULL,
  `why learn` varchar(200) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=big5;

--
-- Dumping data for table `majortb`
--

INSERT INTO `majortb` (`Title`, `pic src`, `why learn`, `id`) VALUES
('Buissness', 'buisness.jpeg', 'reason 1, reason 2, reason 3, reason 4', 1),
('Design', 'Design.jpeg', '', 2),
('Cooking', 'cooking.jpeg', '', 3),
('Finance', 'finance.jpeg', '', 4),
('Health', 'health.jpeg', '', 5),
('Development', 'engineering.jpeg', '', 6),
('Lifestyle', 'lifestyle.jpeg', '', 7),
('Literature', 'literature.jpeg', '', 8);

-- --------------------------------------------------------

--
-- Table structure for table `minortb`
--

CREATE TABLE `minortb` (
  `Title` varchar(200) NOT NULL,
  `pic src` varchar(200) NOT NULL,
  `why learn` varchar(200) NOT NULL,
  `id` int(11) NOT NULL,
  `things learned` varchar(200) NOT NULL,
  `Major catagory` varchar(200) NOT NULL,
  `Summary` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=big5;

--
-- Dumping data for table `minortb`
--

INSERT INTO `minortb` (`Title`, `pic src`, `why learn`, `id`, `things learned`, `Major catagory`, `Summary`) VALUES
('Accounting', '', 'why learn 1, why learn 2, why learn 3, why learn 4', 1, 'things you will learn 1, things , things 3, things 4', 'Buissness', 'This is the summary of the minor category');

-- --------------------------------------------------------

--
-- Table structure for table `mysqlchangestb`
--

CREATE TABLE `mysqlchangestb` (
  `sampleid` int(11) NOT NULL,
  `Ttable` varchar(200) NOT NULL,
  `Tid` int(11) NOT NULL,
  `Tcolumn` varchar(200) NOT NULL,
  `successtest` int(11) NOT NULL,
  `totaltest` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=big5;

-- --------------------------------------------------------

--
-- Table structure for table `usertb`
--

CREATE TABLE `usertb` (
  `Name` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `saved course ids` varchar(200) NOT NULL,
  `date started` timestamp NOT NULL DEFAULT current_timestamp(),
  `id` int(11) NOT NULL,
  `points` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=big5;

--
-- Dumping data for table `usertb`
--

INSERT INTO `usertb` (`Name`, `password`, `saved course ids`, `date started`, `id`, `points`) VALUES
('Mark Soulier', 'password', '', '2020-07-13 20:37:43', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coursetb`
--
ALTER TABLE `coursetb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `majortb`
--
ALTER TABLE `majortb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `minortb`
--
ALTER TABLE `minortb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mysqlchangestb`
--
ALTER TABLE `mysqlchangestb`
  ADD PRIMARY KEY (`sampleid`);

--
-- Indexes for table `usertb`
--
ALTER TABLE `usertb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coursetb`
--
ALTER TABLE `coursetb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `majortb`
--
ALTER TABLE `majortb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `minortb`
--
ALTER TABLE `minortb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mysqlchangestb`
--
ALTER TABLE `mysqlchangestb`
  MODIFY `sampleid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usertb`
--
ALTER TABLE `usertb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
