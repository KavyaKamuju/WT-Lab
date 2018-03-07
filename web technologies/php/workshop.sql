-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2018 at 03:14 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `workshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`username`, `password`) VALUES
('admin', 'kavya');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `name` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `college` varchar(30) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `worshop` varchar(30) NOT NULL,
  `remind` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`name`, `gender`, `email`, `password`, `college`, `branch`, `worshop`, `remind`) VALUES
('Usha', 'f', '15pa1a0570@vishnu.edu.in', 'usha', 'VIT', 'CSE', 'workshop2', 'yes'),
('Gayatri', 'f', '15pa1a0586@vishnu.edu.in', 'padma', 'VIT', 'CSE', 'workshop3', 'yes'),
('Rupa', 'f', '15pa1a05a9@vishnu.edu.in', 'rupa', 'VIT', 'CSE', 'workshop1', 'yes'),
('Chaitanya Srinivas.Kamuju', 'm', 'chaitanyasrinivas2145@gmail.co', 'kavya', 'Swarandhra College Of Engineer', 'Mechanical Engg', 'workshop1', 'yes'),
('hehfs', 'f', 'jsdhjsjsks@gmail.com', 'jkdsssdjd', 'VIT', 'cse', 'workshop3', 'yes'),
('kavya', 'f', 'kaamuju66@gmail.com', '', 'svecw', 'cse', 'workshop2', 'yes'),

('kavya', 'f', 'kavyakamuju@gmail.com', 'kavyaa', 'vit', 'cse', 'workshop2', 'yes'),

('nidhisha', 'f', 'nidhisha@gmail.com', 'nidhisha', 'svecw', 'cse', 'workshop2', 'yes'),

('sahitha', 'f', 'sahitha123@gmail.com', 'fgfdgd', 'VIT', 'cse', 'workshop3', 'yes'),

('sahitha', 'f', 'sahitha@gmail.com', 'kjkshd', 'VIT', 'cse', 'workshop3', 'yes'),

('uma', 'f', 'umaradha@gmail.com', 'radha', 'VIT', 'CSE', 'workshop2', 'yes');

-- -
-------------------------------------------------------

--
-- Table structure for table `workshop_table`
--


CREATE TABLE `workshop_table` (
  `workshopno` varchar(30) NOT NULL,
  `title` varchar(30) NOT NULL,
 
 `description` text NOT NULL,
  `department` varchar(30) NOT NULL,
  `fee` int(10) NOT NULL
) 
ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Dumping data for table 
`workshop_table`
--


INSERT INTO `workshop_table` (`workshopno`, `title`, `description`, `department`, `fee`) VALUES
('Workshop-2', 'Artificial Intelligence', 
'Artificial intelligence is intelligence displayed by machines, in contrast with the natural intelligence displayed by humans and other animals.\r\n        In computer science AI research is defined as the study of \"intelligent agents\":  any device that perceives its environment and takes actions that maximize its chance of success at some goal.Colloquially, the term \"artificial intelligence\" is applied when a machine mimics \"cognitive\" functions that humans associate with other human minds, such as \"learning\" and \"problem solving\".', 'CSE', 2000),
('Workshop-1', 
'BITCOINS', '
', 'CSE', 2000),
('Workshop-3', 'IOT', 'The Internet of things (IoT) is the network of physical devices, vehicles, home appliances and other items embedded with electronics, software, sensors, actuators, and connectivity which enables these objects to connect and exchange data. Each thing is uniquely identifiable through its embedded computing system but is able to inter-operate within the existing Internet infrastructure. Experts estimate that the IoT will consist of about 30 billion objects by 2020. It is also estimated that the global market value of IoT will reach $7.1 trillion by 2020.', 'CSE', 5000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD UNIQUE KEY `unique` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
