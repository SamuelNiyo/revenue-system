-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2024 at 06:30 AM
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
-- Database: `revenuesystem`
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
  `id` int(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminn`
--

INSERT INTO `adminn` (`id`, `first_name`, `last_name`, `email`, `telephone`) VALUES
(23, 'sam', 'muvyo', 'asdfghjk', 2345),
(24, 'sam', 'muvyo', 'asdfghjk', 2345),
(1223, 'sdfgh', 'asdfg', 'asd', 1234);

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `id` int(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` int(50) NOT NULL,
  `adminid` int(100) NOT NULL,
  `managerid` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`id`, `first_name`, `last_name`, `email`, `telephone`, `adminid`, `managerid`) VALUES
(12, 'sasa', 'mumu', 'samu', 1234567890, 12, 13),
(1, 'samuel', 'niyomurengezi', 'niyomurengezisammy', 1234, 34, 66);

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `id` int(100) NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `address` varchar(100) NOT NULL,
  `specialization` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`id`, `first_name`, `last_name`, `address`, `specialization`) VALUES
(12, 'niyobyose', 'eric', 'rubavu', 'accounting'),
(14, 'sam', 'mumu', 'nyanza', 'B.I.T'),
(34, 'regis', 'kit', 'kigali', 'social work'),
(100, 'abias', 'emmy', 'huye', 'finance'),
(101, 'aime', 'diane', 'kigali', 'marketing'),
(343, 'sasa', 'mumu', 'nyanza', 'B.I.T');

-- --------------------------------------------------------

--
-- Table structure for table `revenue`
--

CREATE TABLE `revenue` (
  `id` int(100) NOT NULL,
  `amount` int(100) NOT NULL,
  `revenue_type` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `revenue`
--

INSERT INTO `revenue` (`id`, `amount`, `revenue_type`) VALUES
(25, 2500, 'TVA'),
(15, 1500, 'Personal Tax');

-- --------------------------------------------------------

--
-- Table structure for table `revenue_view`
--

CREATE TABLE `revenue_view` (
  `Revenue_id` int(11) DEFAULT NULL,
  `Amount` int(11) DEFAULT NULL,
  `Revenue_type` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(150) NOT NULL,
  `userid` int(150) NOT NULL,
  `revenueid` int(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `userid`, `revenueid`) VALUES
(1, 44, 77),
(4, 44, 77),
(6, 2, 3),
(10, 150, 150),
(11, 2, 3),
(19, 2, 3),
(23, 55, 65),
(43, 64, 475),
(48, 55, 76),
(54, 345, 345),
(69, 90, 100),
(77, 55, 76),
(123, 2, 3),
(230, 3, 65),
(250, 23, 34),
(1000, 2323, 33);

-- --------------------------------------------------------

--
-- Table structure for table `transaction_view`
--

CREATE TABLE `transaction_view` (
  `Transaction_id` int(11) DEFAULT NULL,
  `User_id` int(11) DEFAULT NULL,
  `Revenue_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(50) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `tin_number` int(25) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `registration_date` date NOT NULL,
  `agent_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `tin_number`, `address`, `email`, `registration_date`, `agent_id`) VALUES
(4, 'aime', 'marie', 1234566, 'KIGALI', 'aimema', '2024-04-16', 3),
(5, 'vestine', 'Veve', 1012545445, 'muhanga', 'vestine12@gmail.com', '2024-04-16', 2),
(7, 'aime', 'marie', 1234566, 'KIGALI', 'aimema', '2024-04-16', 3);

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

-- --------------------------------------------------------

--
-- Table structure for table `user_view`
--

CREATE TABLE `user_view` (
  `User_id` int(11) DEFAULT NULL,
  `First_name` varchar(70) DEFAULT NULL,
  `Last_name` varchar(70) DEFAULT NULL,
  `Tin_number` int(11) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Registration_date` date DEFAULT NULL,
  `Agent_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD UNIQUE KEY `managerid` (`managerid`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
