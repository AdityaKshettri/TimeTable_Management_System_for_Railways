-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2018 at 05:59 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `timetable`
--

-- --------------------------------------------------------

--
-- Table structure for table `admininfo`
--

CREATE TABLE `admininfo` (
  `username` varchar(30) NOT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admininfo`
--

INSERT INTO `admininfo` (`username`, `password`) VALUES
('arijit', '287903'),
('shalvi', 'she'),
('shyam', '99999');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `start` varchar(100) NOT NULL,
  `end` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `name`, `start`, `end`) VALUES
('EODL0007', 'Equipment Course in Dataloggers for Officers', '11-06-2018', '15-06-2018'),
('ESDL0012	', 'Equipment Course in Dataloggers for JE/SSE (Sig)', '11-06-2018', '06-07-2018'),
('ESDL0012', 'Equipment Course in Dataloggers for JE/SSE (Sig)', '11-06-2018', '15-06-2018'),
('ETLX0040', 'Equipment Course in Electronic Exchange for JE/SSE (Tele)', '11-06-2018', '15-06-2018'),
('IPP20031', 'Initial Course for IRSSE(P) Phase-2', '23-04-2018', '27-07-2018'),
('ISP10121', 'Initial Course for Apprentice JE (Sig) Phase-1', '23-04-2018', '27-07-2018'),
('ITGI10035', 'Initial Course for Apprentice SSE (Tele) Phase-1', '30-04-2018', '20-07-2018'),
('ITP10109', 'Initial Course for Apprentice JE (Tele) Phase-1', '09-04-2018', '13-07-2018'),
('RE-EXAM0019', 'Re-Examination for Gazetted & Non-Gazetted Trainees', '01-01-2018', '29-06-2018'),
('RTJE0128', 'Refresher Course for JE/SSE (Tele)', '04-06-2018', '29-06-2018'),
('SPST0009', 'Promotional Course for JE to SSE for S&T Supervisors', '11-06-2018', '22-06-2018'),
('VC0030', 'Virtual class session', '02-04-2018', '29-06-2018');

-- --------------------------------------------------------

--
-- Table structure for table `courseinfo`
--

CREATE TABLE `courseinfo` (
  `coursename` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `typea1` varchar(30) NOT NULL,
  `typeb1` varchar(30) NOT NULL,
  `typec1` varchar(30) NOT NULL,
  `typea2` varchar(30) NOT NULL,
  `typeb2` varchar(30) NOT NULL,
  `typec2` varchar(30) NOT NULL,
  `typea3` varchar(30) NOT NULL,
  `typeb3` varchar(30) NOT NULL,
  `typec3` varchar(30) NOT NULL,
  `typea4` varchar(30) NOT NULL,
  `typeb4` varchar(30) NOT NULL,
  `typec4` varchar(30) NOT NULL,
  `typea5` varchar(30) NOT NULL,
  `typeb5` varchar(30) NOT NULL,
  `typec5` varchar(30) NOT NULL,
  `typea6` varchar(30) NOT NULL,
  `typeb6` varchar(30) NOT NULL,
  `typec6` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courseinfo`
--

INSERT INTO `courseinfo` (`coursename`, `date`, `typea1`, `typeb1`, `typec1`, `typea2`, `typeb2`, `typec2`, `typea3`, `typeb3`, `typec3`, `typea4`, `typeb4`, `typec4`, `typea5`, `typeb5`, `typec5`, `typea6`, `typeb6`, `typec6`) VALUES
('arijit', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('asdf', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('asdf', '2018-06-28', 'asdf', 'asdf', 'asdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('shalivasdfasf', '2018-06-28', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'fghj', 'fghf', 'fghgf', '', '', '', '', '', ''),
('shalivasdfasf', '2018-06-28', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'fghj', 'fghf', 'fghgf', 'fhjhgj', 'fghjfg', 'fghjfgh', 'fghjfgh', 'fghjfgh', 'gfhjg'),
('shalivasdfasf', '2018-06-28', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'fghj', 'fghf', 'fghgf', 'fhjhgj', 'fghjfg', 'fghjfgh', 'fghjfgh', 'fghjfgh', 'gfhjg'),
('darsh', '2018-06-16', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `facultyinfo`
--

CREATE TABLE `facultyinfo` (
  `facultyname` varchar(30) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `subject1` varchar(30) NOT NULL,
  `subject2` varchar(30) NOT NULL,
  `subject3` varchar(30) NOT NULL,
  `subject4` varchar(30) NOT NULL,
  `subject5` varchar(30) NOT NULL,
  `subject6` varchar(30) NOT NULL,
  `facultytype` varchar(30) NOT NULL,
  `Notice` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facultyinfo`
--

INSERT INTO `facultyinfo` (`facultyname`, `designation`, `date`, `subject1`, `subject2`, `subject3`, `subject4`, `subject5`, `subject6`, `facultytype`, `Notice`) VALUES
('', '', '0000-00-00', '', '', '', '', '', '', '', ''),
('-', '-', '0000-00-00', '-', '-', '-', '-', '-', '-', '-', '-'),
('aditya', 'dean', '2018-06-20', 'chemistry', '-', '-', '-', '-', '-', 'Non Gazetted Faculty', 'kuch bhi'),
('anmol', 'teacher', '2018-06-29', 'No class', 'No class', 'No class', 'No class', 'No class', 'No class', 'Non Gazetted Telecom Faculty', 'timepass'),
('Arijit Anand', 'DEAN', '2018-06-07', 'vela', 'kuch bhi karta hai', 'No class', 'No class', 'No class', 'No class', 'Gazetted Faculty', 'No class'),
('dfgdf', '-', '2018-06-15', '-', '-', '-', '-', '-', '-', 'Gazetted Faculty', '-'),
('jgfjhgjhg', 'yjjhk', '2018-06-06', '-', '-', '-', '-', '-', '-', 'Gazetted Faculty', 'gjbh,'),
('moni', 'dean', '2018-06-29', 'chemistry', 'economic', 'sadfa', '-', '-', '-', 'Gazetted Faculty', 'asdfasdfa'),
('ram', 'GOD', '2018-01-01', '-', '-', '-', '-', '-', '-', 'Gazetted Faculty', '-'),
('random', 'mba', '2018-06-19', '-', '-', '-', '-', '-', '-', 'Gazetted Faculty', '-'),
('shalvi', 'veli', '2018-06-22', 'No class', 'No class', 'No class', 'No class', 'No class', 'No class', 'Non Gazetted Faculty', 'kuch bhi nhi karta bas shramdaan krti hai chaubees ghanta'),
('Star', 'rt', '2018-06-20', '-', '-', '-', '-', '-', '-', 'Gazetted Faculty', 'sdfsd');

-- --------------------------------------------------------

--
-- Table structure for table `labinfo`
--

CREATE TABLE `labinfo` (
  `labname` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `typea1` varchar(30) NOT NULL,
  `typeb1` varchar(30) NOT NULL,
  `typec1` varchar(11) NOT NULL,
  `typed1` varchar(11) NOT NULL,
  `typea2` varchar(11) NOT NULL,
  `typeb2` varchar(11) NOT NULL,
  `typec2` varchar(11) NOT NULL,
  `typed2` varchar(11) NOT NULL,
  `typea3` varchar(11) NOT NULL,
  `typeb3` varchar(11) NOT NULL,
  `typec3` varchar(11) NOT NULL,
  `typed3` varchar(11) NOT NULL,
  `typea4` varchar(11) NOT NULL,
  `typeb4` varchar(11) NOT NULL,
  `typec4` varchar(11) NOT NULL,
  `typed4` varchar(11) NOT NULL,
  `typea5` varchar(11) NOT NULL,
  `typeb5` varchar(11) NOT NULL,
  `typec5` varchar(11) NOT NULL,
  `typed5` varchar(11) NOT NULL,
  `typea6` varchar(11) NOT NULL,
  `typeb6` varchar(11) NOT NULL,
  `typec6` varchar(11) NOT NULL,
  `typed6` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `labinfo`
--

INSERT INTO `labinfo` (`labname`, `date`, `typea1`, `typeb1`, `typec1`, `typed1`, `typea2`, `typeb2`, `typec2`, `typed2`, `typea3`, `typeb3`, `typec3`, `typed3`, `typea4`, `typeb4`, `typec4`, `typed4`, `typea5`, `typeb5`, `typec5`, `typed5`, `typea6`, `typeb6`, `typec6`, `typed6`) VALUES
('arijit', '2018-06-09', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
('-', '2018-06-29', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
('sdfsdf', '2018-06-29', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
('sdf', '2018-06-30', '-', 'sdfd', '-', '-', 'zcz', '-', 'zxc', '-', '-', 'zxc', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
('sdf', '2018-06-30', '-', 'sdfd', '-', '-', 'zcz', '-', 'zxc', '-', '-', 'zxc', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
('sdf', '2018-06-30', '-', 'sdfd', '-', '-', 'zcz', '-', 'zxc', '-', '-', 'zxc', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `timetablechart`
--

CREATE TABLE `timetablechart` (
  `Date` date NOT NULL,
  `Slot1` varchar(20) NOT NULL,
  `faculty1` varchar(30) NOT NULL,
  `Slot2` varchar(20) NOT NULL,
  `faculty2` varchar(30) NOT NULL,
  `Slot3` varchar(20) NOT NULL,
  `faculty3` varchar(30) NOT NULL,
  `Slot4` varchar(20) NOT NULL,
  `faculty4` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetablechart`
--

INSERT INTO `timetablechart` (`Date`, `Slot1`, `faculty1`, `Slot2`, `faculty2`, `Slot3`, `faculty3`, `Slot4`, `faculty4`) VALUES
('2018-06-14', 'x', 'a', 'x', 'x', 'x', 'x', 'x', 'x'),
('2018-06-15', 'x', 'x', 'x', 'a', 'x', 'x', 'x', 'x'),
('2018-06-16', 'x', 'x', 'x', 'x', 'x', 'a', 'x', 'x'),
('2018-06-17', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x'),
('2018-06-18', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admininfo`
--
ALTER TABLE `admininfo`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facultyinfo`
--
ALTER TABLE `facultyinfo`
  ADD PRIMARY KEY (`facultyname`);

--
-- Indexes for table `timetablechart`
--
ALTER TABLE `timetablechart`
  ADD PRIMARY KEY (`Date`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
