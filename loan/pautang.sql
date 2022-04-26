-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2021 at 02:58 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pautang`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_utang`
--

CREATE TABLE `tbl_utang` (
  `utangID` int(11) NOT NULL,
  `lName` varchar(255) NOT NULL,
  `fName` varchar(255) NOT NULL,
  `mName` varchar(255) NOT NULL,
  `amntBorrowed` int(11) NOT NULL,
  `terms` int(11) NOT NULL,
  `rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_utang`
--

INSERT INTO `tbl_utang` (`utangID`, `lName`, `fName`, `mName`, `amntBorrowed`, `terms`, `rate`) VALUES
(31, 'Laban', 'Ira Mae', 'Dugan', 20000, 6, 5),
(32, 'Bombay', 'Pautang', 'paybsics', 5000, 5, 20),
(33, 'Try', 'Test', 'Subok', 20000, 12, 10),
(34, 'Last Try', 'Hello', ' Goodbye', 50000, 12, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_utang`
--
ALTER TABLE `tbl_utang`
  ADD PRIMARY KEY (`utangID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_utang`
--
ALTER TABLE `tbl_utang`
  MODIFY `utangID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
