-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2017 at 06:31 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cse`
--

-- --------------------------------------------------------

--
-- Table structure for table `pollution`
--

CREATE TABLE IF NOT EXISTS `pollution` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `value` varchar(11) NOT NULL,
  `lat` double NOT NULL,
  `lang` double NOT NULL,
  `s02` double NOT NULL,
  `pm_2` double NOT NULL,
  `pm_10` double NOT NULL,
  `co2` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pollution`
--

INSERT INTO `pollution` (`id`, `name`, `value`, `lat`, `lang`, `s02`, `pm_2`, `pm_10`, `co2`) VALUES
(2, 'ISM Gate', '12', 23.8093864, 86.4424253, 5, 5, 5, 5),
(3, 'DHAYA GATE', '7', 23.8115176, 86.4529971, 6.145, 5.255, 6.6988, 1.3255),
(4, 'NLHC', '12', 23.8163447, 86.4392834, 0.25, 3.25, 0.258, 6.321),
(5, 'Health Center', '7', 23.8066067, 86.4332452, 11.255, 6.3258, 4.36698, 2.3658),
(6, 'ISM Main Gate', '7', 23.8116385, 86.4444718, 5.36, 5.55, 6.325, 4.356),
(7, 'HERITAGE BUILDING', '12', 23.8145422, 86.4410816, 5, 5, 6, 5),
(8, 'Main Canteen', '7', 23.815131, 86.4414378, 3.654, 2.365, 6.325, 4.258),
(9, 'SBI ATM', '3', 23.8117962, 86.4420941, 6.325, 4.215, 6.321, 2.156),
(10, 'Rosaline Hostel', '7', 23.8133016, 86.4449681, 3.65, 3.25, 6.32, 1.25),
(11, 'SAC', '12', 23.8172259, 86.4375291, 1.256, 5.258, 6.321, 4.26),
(12, 'Housing Colonly', '7', 23.8074271, 86.4351332, 6.325, 7.259, 6.25, 1.255);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pollution`
--
ALTER TABLE `pollution`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pollution`
--
ALTER TABLE `pollution`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
