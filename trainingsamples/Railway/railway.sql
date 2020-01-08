-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2018 at 08:44 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `railway`
--

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
