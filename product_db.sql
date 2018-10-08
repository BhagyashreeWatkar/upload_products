-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2018 at 10:47 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `product_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`product_id`, `product_name`, `product_image`) VALUES
(2, 'panasonic', ''),
(4, 'abcdef', ''),
(5, 'xyz', 'IMAG1774.jpg'),
(6, 'sony', ''),
(7, 'azx', 'IMAG0117_11.jpg'),
(8, 'aqs', 'IMAG0117_12.jpg'),
(9, 'aqs', 'IMAG0117_1.jpg'),
(10, 'aqs', 'IMAG0117_11.jpg'),
(11, '', ''),
(12, 'abc', ''),
(13, 'xyz', ''),
(14, 'bajaj', 'IMAG0137.jpg'),
(15, 'panasonic', 'IMAG01371.jpg'),
(16, 'panasonic', 'IMAG01372.jpg'),
(17, 'panasonic', 'IMAG01373.jpg'),
(18, '', ''),
(19, '', ''),
(20, 'xyz', 'IMAG01374.jpg'),
(21, 'samsung', ''),
(22, '', ''),
(23, '', ''),
(24, '', ''),
(25, 'mnn', ''),
(26, 'samsung', ''),
(27, 'abc', ''),
(28, 'abc', ''),
(29, 'abc', ''),
(30, 'abc', ''),
(31, 'abc', ''),
(32, 'abc', ''),
(33, 'abc', ''),
(34, '', ''),
(35, '', ''),
(36, 'abc', ''),
(37, 'abcdef', ''),
(38, 'abc', 'IMAG1634.jpg'),
(39, '', ''),
(40, 'abc', ''),
(41, 'aqs', 'IMAG0117_12.jpg'),
(42, 'aqs', 'IMAG0117_13.jpg'),
(43, 'ddddd', ''),
(44, '', ''),
(45, '', ''),
(46, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
