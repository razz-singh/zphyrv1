-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2017 at 04:15 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zephrydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `EMAIL` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `LAST_LOGIN` datetime(6) NOT NULL,
  `LAST_LOGOUT` datetime(6) NOT NULL,
  `TOKEN` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `FIRST_NAME` char(30) NOT NULL,
  `LAST_NAME` char(30) NOT NULL,
  `COUNTRY` char(30) NOT NULL,
  `STATE` char(30) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `GAME_PREFERENCE` varchar(50) NOT NULL,
  `LOGIN_TYPE` varchar(20) NOT NULL,
  `CREATE_TIME` datetime(6) NOT NULL,
  `gender` char(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`FIRST_NAME`, `LAST_NAME`, `COUNTRY`, `STATE`, `EMAIL`, `PASSWORD`, `GAME_PREFERENCE`, `LOGIN_TYPE`, `CREATE_TIME`, `gender`) VALUES
('', '', '', '', '', '', '', 'social', '0000-00-00 00:00:00.000000', ''),
('sadf', 'dfs', 'Angola', 'Cuando Cubango', 'dsaf@dfsafds.com', 'dsaf', 'LOL', 'social', '0000-00-00 00:00:00.000000', 'other'),
(' AVVC', ' AVVC', ' AVVC', ' AVVC', 'prakhar4151@gmail.com', '  11', ' AVVC', ' AVVC', '0000-00-00 00:00:00.000000', ' AVVC'),
(' AVVC', ' AVVC', ' AVVC', ' AVVC', 'prakhar415@gmail.com', '  11', ' AVVC', ' AVVC', '0000-00-00 00:00:00.000000', ' AVVC'),
('', 'mathur', 'Afghanistan', 'Kandahar', 'prakhar@prakhar.com', 'prakhar', 'CSGO', '', '0000-00-00 00:00:00.000000', 'male'),
('razz', 'singh', 'Afghanistan', 'Farah', 'raj@gmail.com', 'razz@123', 'CSGO', 'social', '0000-00-00 00:00:00.000000', 'male'),
('siddhartha', 'sharma', 'Angola', 'Bie', 'sid@gmail.com', 'sid@123', 'DOTA 2', 'social', '0000-00-00 00:00:00.000000', 'male'),
('siddhartha', 'sharma', 'Antartica', 'Antartica', 'siddu@gmail.com', '123', 'OTHER', 'social', '2017-04-27 23:04:25.000000', 'female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD KEY `LOGIN_fk0` (`EMAIL`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`EMAIL`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `LOGIN_fk0` FOREIGN KEY (`EMAIL`) REFERENCES `registration` (`EMAIL`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
