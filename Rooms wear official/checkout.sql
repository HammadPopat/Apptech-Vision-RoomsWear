-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2023 at 10:54 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `room`
--

-- --------------------------------------------------------

--
-- Table structure for table `decore`
--

CREATE TABLE `decore` (
  `id` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `state` varchar(123) NOT NULL,
  `zip` int(11) NOT NULL,
  `cardname` varchar(200) NOT NULL,
  `cardnumber` int(11) NOT NULL,
  `expmonth` varchar(50) NOT NULL,
  `expyear` int(11) NOT NULL,
  `cvv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `decore`
--

INSERT INTO `decore` (`id`, `fname`, `email`, `address`, `city`, `state`, `zip`, `cardname`, `cardnumber`, `expmonth`, `expyear`, `cvv`) VALUES
(1, 'adad', 'ateeshmaheshwary6@gmail.com', 'dadadada', 'dadada', 'dada', 3132, 'nababab', 2147483647, 'dadadada', 3123, 312),
(2, 'adad', 'ateeshmaheshwary6@gmail.com', 'dadadada', 'dadada', 'dada', 3132, 'nababab', 2147483647, 'dadadada', 3123, 312),
(3, '', '', '', '', '', 0, '', 0, '', 0, 0),
(4, '', '', '', '', '', 0, '', 0, '', 0, 0),
(5, 'adad', 'ateeshmaheshwary6@gmail.com', 'dadadada', 'dadada', 'dada', 3132, 'nababab', 0, 'adadada', 0, 0),
(6, 'adad', 'ateeshmaheshwary6@gmail.com', 'dadadada', 'dadada', 'dada', 3132, 'nababab', 0, 'adadada', 0, 0),
(7, '', '', '', '', '', 0, '', 0, '', 0, 0),
(8, 'adad', 'ateeshmaheshwary6@gmail.com', 'dadadada', 'dadada', 'dada', 3132, 'nababab', 456464594, '5456456', 2131313, 13213),
(9, 'adad', 'ateeshmaheshwary6@gmail.com', 'dadadada', 'dadada', 'dada', 3132, 'nababab', 456464594, '5456456', 2131313, 13213);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `decore`
--
ALTER TABLE `decore`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `decore`
--
ALTER TABLE `decore`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
