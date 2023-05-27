-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2023 at 06:24 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `basic`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `firstclass` text NOT NULL,
  `secondclass` text NOT NULL,
  `thirdclass` text NOT NULL,
  `fourthclass` text NOT NULL,
  `fifthclass` text NOT NULL,
  `sixthclass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `firstclass`, `secondclass`, `thirdclass`, `fourthclass`, `fifthclass`, `sixthclass`) VALUES
(1, 'DBMS', 'MATH', 'OS', 'MC LAB', 'MC LAB', 'OS'),
(2, 'CI AND PE', 'CSS', 'DAA', 'MC', 'OS', 'OS LAB'),
(3, 'MC', 'DBMS', 'CI', 'DBMS', 'DAA', 'MATH TUTORIAL'),
(4, 'DAA', 'DAA', 'DBMS', 'OS', 'MATH', 'MATH'),
(5, 'DBMS', 'OS', 'MATH TUTORIAL', 'MATH TUTORIAL', 'AECS', 'MC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
