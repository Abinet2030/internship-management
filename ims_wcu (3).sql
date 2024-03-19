-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220615.97c9e3ad3b
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2022 at 07:40 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ims_wcu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `Name` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`Name`, `Password`) VALUES
('Admin', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `departments` varchar(50) NOT NULL,
  `sex` text NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`firstname`, `lastname`, `email`, `departments`, `sex`, `password`) VALUES
('user', 'userf', 'user@gmail.com', 'Software Engineering', 'Male', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `internship`
--

CREATE TABLE `internship` (
  `id` int(50) NOT NULL,
  `category` varchar(100) NOT NULL,
  `postedOn` date NOT NULL,
  `applyBy` date NOT NULL,
  `nameOfCompany` varchar(100) NOT NULL,
  `aboutInternship` varchar(100) NOT NULL,
  `place` varchar(50) NOT NULL,
  `duration` int(11) NOT NULL,
  `positions` int(11) NOT NULL,
  `whoCanApply` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `internship`
--

INSERT INTO `internship` (`id`, `category`, `postedOn`, `applyBy`, `nameOfCompany`, `aboutInternship`, `place`, `duration`, `positions`, `whoCanApply`) VALUES
(1, 'Software Engineering', '2022-02-01', '2022-06-05', 'Addis Software', 'it is a four month internship, interns are expected to work five days a week and work on various pro', 'Addis Ababa', 4, 6, 'students who completed their fourth year course in Software engineering from Ethiopian university'),
(2, 'Architecture', '2022-01-07', '2022-06-16', 'Chiret Design studio', 'it is a four month internship, interns are expected to work five days a week and work on various pro', 'Hossana', 4, 7, 'students who completed their fourth year course in Architecture from Ethiopian university'),
(3, 'Civil Engineering', '2022-01-07', '2022-06-24', ' Pyramid Construction', 'it is a four month internship, interns are expected to work five days a week and work on various pro', 'Hossana', 4, 5, 'students who completed their fourth year course in Civil engineering from Ethiopian university'),
(4, 'Software engineering', '2021-12-08', '2022-07-09', 'INSA', 'it is a four month internship, interns are expected to work five days a week and work on various pro', 'Hawassa', 4, 6, 'students who completed their fourth year course in Software engineering from Ethiopian university');

-- --------------------------------------------------------

--
-- Table structure for table `internship_register1`
--

CREATE TABLE `internship_register1` (
  `id` int(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `nameOfCompany` varchar(100) NOT NULL,
  `applicationDate` date NOT NULL,
  `place` varchar(50) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `dipartment` varchar(100) NOT NULL,
  `applicationLatter` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `internship_register1`
--

INSERT INTO `internship_register1` (`id`, `firstname`, `lastname`, `category`, `nameOfCompany`, `applicationDate`, `place`, `dateOfBirth`, `dipartment`, `applicationLatter`) VALUES
(1, 'user', 'userf', 'Software Engineering', 'Ethio Telecom', '2022-07-20', 'hossana', '2000-08-14', 'Software Engineering', 'apply');

-- --------------------------------------------------------

--
-- Stand-in structure for view `int_view`
-- (See below for the actual view)
--
CREATE TABLE `int_view` (
`id` int(50)
,`category` varchar(100)
,`nameOfCompany` varchar(100)
,`postedOn` date
,`place` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sex` text NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `email`, `sex`, `password`) VALUES
(0, 'yabets', 'temesgen', 'yabtemesgen@gmail.com', 'male', 'qwerty'),
(2, 'user', 'user2', 'user@gmail.com', 'Male', '123');

-- --------------------------------------------------------

--
-- Structure for view `int_view`
--
DROP TABLE IF EXISTS `int_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`user`@`localhost` SQL SECURITY DEFINER VIEW `int_view`  AS SELECT `internship`.`id` AS `id`, `internship`.`category` AS `category`, `internship`.`nameOfCompany` AS `nameOfCompany`, `internship`.`postedOn` AS `postedOn`, `internship`.`place` AS `place` FROM `internship``internship`  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`Name`);

--
-- Indexes for table `internship_register1`
--
ALTER TABLE `internship_register1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `internship_register1`
--
ALTER TABLE `internship_register1`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



