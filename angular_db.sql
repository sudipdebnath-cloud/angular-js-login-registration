-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2018 at 11:03 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `angular_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `ng_user`
--

CREATE TABLE `ng_user` (
  `ID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ng_user`
--

INSERT INTO `ng_user` (`ID`, `name`, `email`, `password`) VALUES
(5, 'SD', 'sd@gmail.com', '$2y$10$YPrulvgVlx08T4aBsA0A2.IxTNm.iFTrgRfxfhrOkcqakx4kAoCYC'),
(8, 'SD', 'sddef@gmail.com', '$2y$10$c9LFWb9ihxXHP0i5vB.hbe.jQ6hIZ6Gp0aUWtplaSoXPu2UME8awy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ng_user`
--
ALTER TABLE `ng_user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ng_user`
--
ALTER TABLE `ng_user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
