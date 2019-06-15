-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2019 at 03:33 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arthaque`
--

-- --------------------------------------------------------

--
-- Table structure for table `neng`
--

CREATE TABLE `neng` (
  `ndi` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `neng`
--

INSERT INTO `neng` (`ndi`) VALUES
(' asf'),
('aa'),
('aas');

-- --------------------------------------------------------

--
-- Table structure for table `yak`
--

CREATE TABLE `yak` (
  `hemm` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `yak`
--

INSERT INTO `yak` (`hemm`) VALUES
('aas'),
('http://localhost/phpmyadmin/sql.php?server=1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `neng`
--
ALTER TABLE `neng`
  ADD PRIMARY KEY (`ndi`);

--
-- Indexes for table `yak`
--
ALTER TABLE `yak`
  ADD PRIMARY KEY (`hemm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
