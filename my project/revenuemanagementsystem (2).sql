-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2024 at 12:25 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `revenuemanagementsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `id_number` int(150) NOT NULL,
  `phone` int(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `martial_status` varchar(100) NOT NULL,
  `DoB` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`fname`, `lname`, `id_number`, `phone`, `gender`, `martial_status`, `DoB`, `email`, `password`) VALUES
('sdftgyh', 'sdfgyh', 123456, 123456, 'Female', 'single', '2000-11-11', '123456789', '123456789'),
('AAAAA', 'BBBBB', 250, 789554555, 'Female', 'single', '2001-11-24', 'asdfghjkl', '123456789'),
('asdfghj', 'asdfgh', 1234, 1234567, 'Female', 'married', '2000-11-12', '12345', '12345'),
('SAM', 'NIYOMU', 12345, 123456789, 'Male', 'SINGLE', '2002-11-12', '123456789', '123456789'),
('SAM', 'NIYOMU', 12345, 123456789, 'Male', 'SINGLE', '2002-11-12', 'admin', '123445'),
('SAM', 'NIYOMU', 12345, 123456789, 'Male', 'SINGLE', '2002-11-12', '12345', '123445');

-- --------------------------------------------------------

--
-- Table structure for table `adminn`
--

CREATE TABLE `adminn` (
  `aid` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminn`
--

INSERT INTO `adminn` (`aid`, `first_name`, `last_name`, `email`, `telephone`) VALUES
(23, 'sam', 'niyo', 'sam@gmail.com', 1223);

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `agid` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `telephone` int(50) NOT NULL,
  `adminnid` int(11) DEFAULT NULL,
  `managerid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`agid`, `first_name`, `last_name`, `telephone`, `adminnid`, `managerid`) VALUES
(1, 'sam', 'niyo', 788201441, 23, 34),
(2, 'Benitha', 'Uwanyirigira', 788201441, 23, 34),
(5, 'eric', 'Niyobyose', 788201441, 23, 34),
(15, 'Mugisha', 'Hertier', 2147483647, 23, 12);

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `mid` int(11) NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `address` varchar(100) NOT NULL,
  `specialization` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`mid`, `first_name`, `last_name`, `address`, `specialization`) VALUES
(12, 'niyobyose', 'eric', 'Musanze', 'accounting'),
(14, 'sam', 'mumu', 'nyanza', 'B.I.T'),
(34, 'regis', 'kit', 'kigali', 'social work');

-- --------------------------------------------------------

--
-- Table structure for table `revenue`
--

CREATE TABLE `revenue` (
  `rid` int(11) NOT NULL,
  `amount` int(100) NOT NULL,
  `revenue_type` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `revenue`
--

INSERT INTO `revenue` (`rid`, `amount`, `revenue_type`) VALUES
(1, 2000000, 'Personal Tax'),
(2, 75500, 'TVA'),
(3, 68500, 'TVA'),
(1234, 500000, 'TVA');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `tid` int(11) NOT NULL,
  `userid` int(11) DEFAULT NULL,
  `revenueid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`tid`, `userid`, `revenueid`) VALUES
(1, 2, 1234),
(2, 3, 1234),
(3, 2, 1234),
(5, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `tin_number` int(25) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `registration_date` date NOT NULL,
  `agent_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `first_name`, `last_name`, `tin_number`, `address`, `email`, `registration_date`, `agent_id`) VALUES
(2, 'diane', 'aime', 2345678, 'Muhanga', 'sam250@gmail.com', '2024-04-18', 5),
(3, 'Abias', 'Ndayishimiye', 1234567, 'Musanze', 'ndayishimiyeab10@gmail.com', '2024-04-18', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `creationdate` datetime DEFAULT current_timestamp(),
  `activation_code` varchar(50) DEFAULT NULL,
  `is_activated` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`firstname`, `lastname`, `username`, `email`, `telephone`, `password`, `creationdate`, `activation_code`, `is_activated`) VALUES
('', '', '', '', '', '', '0000-00-00 00:00:00', '', 0),
('asas', 'asas', 'asas', 'mpamire@gmail.com', '0788201441', 'asas', '2024-04-12 00:00:00', '1', 12),
('Benitha', 'uwase', 'benitha', 'habari@bit.com', '12345', '123@', '2024-04-21 00:00:00', '12', 1),
('Eric', 'Niyobyose', 'ericn', 'ericni@gmail.com', '078883653', '123345', '2024-04-14 00:00:00', '55', 0),
('janvier', 'braver', 'janvier', 'jan@gmail.com', '0788201441', '123456', '2024-04-12 00:00:00', '40', 0),
('Manzi', 'Thiery', 'Manzi', 'manzi@gmail.com', '0788834334', '123456789', '2024-04-12 00:00:00', '100', 0),
('Manzi', 'Thiery', 'manzii', 'manzii@gmail.com', '0788834334', '12345', '2024-04-12 00:00:00', '100', 0),
('muhire', 'kevin', 'muhirekevin', 'muhirekevin10@gmail.com', '0788540267', 'muhire', '2023-09-10 00:00:00', '123', 0),
('olivier', 'nsengimana', 'olivier', 'olivier@gmail.com', '0788888464', 'xampp', '2024-04-15 00:00:00', '25', 0),
('pasi', 'niyo', 'pasi', 'pasiii@gmail.com', '12345', 'zxcvbnm', '2024-04-16 00:00:00', '12', 0),
('sa', 'sa', 'sa', 'mpamire10@gmail.com', '0788201441', '123', '2024-04-12 00:00:00', '12345', 0),
('samuel', 'niyomurengezi', 'sam', 'sam@gmail.com', '0788201441', '12345', '2024-05-12 00:00:00', '12', 12),
('sa', 'ni', 'sani', '430807MPC0062023', '0788201441', '12345', '2024-04-15 00:00:00', '25', 0),
('isimbi', 'veve', 'ves', 'veve@gmail', '0788897654', '12345', '2024-04-16 00:00:00', '33333', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminn`
--
ALTER TABLE `adminn`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`agid`),
  ADD KEY `adminnid` (`adminnid`),
  ADD KEY `managerid` (`managerid`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `revenue`
--
ALTER TABLE `revenue`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`tid`),
  ADD KEY `userid` (`userid`),
  ADD KEY `revenueid` (`revenueid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `agent_id` (`agent_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminn`
--
ALTER TABLE `adminn`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1226;

--
-- AUTO_INCREMENT for table `agent`
--
ALTER TABLE `agent`
  MODIFY `agid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=344;

--
-- AUTO_INCREMENT for table `revenue`
--
ALTER TABLE `revenue`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1348;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `agent`
--
ALTER TABLE `agent`
  ADD CONSTRAINT `agent_ibfk_1` FOREIGN KEY (`adminnid`) REFERENCES `adminn` (`aid`),
  ADD CONSTRAINT `agent_ibfk_2` FOREIGN KEY (`managerid`) REFERENCES `manager` (`mid`);

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`uid`),
  ADD CONSTRAINT `transaction_ibfk_2` FOREIGN KEY (`revenueid`) REFERENCES `revenue` (`rid`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`agent_id`) REFERENCES `agent` (`agid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
