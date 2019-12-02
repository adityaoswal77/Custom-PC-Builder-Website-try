-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2019 at 09:46 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `custom`
--

-- --------------------------------------------------------

--
-- Table structure for table `build`
--

CREATE TABLE `build` (
  `build_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cpu` varchar(255) NOT NULL,
  `motherboard` varchar(255) NOT NULL,
  `processor` varchar(255) NOT NULL,
  `gpu` varchar(255) NOT NULL,
  `ram` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `build`
--

INSERT INTO `build` (`build_id`, `name`, `cpu`, `motherboard`, `processor`, `gpu`, `ram`) VALUES
(1, 'AMD Processor', 'w6er', 'Msi', '', '', ''),
(2, 'Intel Processor', 'Aditya Oswal', 'Msi', '', '', ''),
(3, 'Intel Processor', 'Aditya Oswal', 'Msi', '', '', ''),
(4, 'AMD Processor', 'gwgef', 'Msi', '', '', ''),
(68, 'w6er', 'AMD Processor', 'Msi', '', '', ''),
(69, 'w6er', 'AMD Processor', 'Msi', '', '', ''),
(70, 'w6er', 'AMD Processor', 'Msi', '', '', ''),
(71, '', '', '', '', '', ''),
(72, '', '', '', '', '', ''),
(73, '', '', '', '', '', ''),
(74, '', '', '', '', '', ''),
(75, '', '', '', '', '', ''),
(76, '', '', '', '', '', ''),
(77, 'w6er', 'AMD Processor', 'Msi', '', '', ''),
(78, 'w6er', 'AMD Processor', 'Msi', '', '', ''),
(79, '', '', '', '', '', ''),
(80, '', '', '', '', '', ''),
(81, '', '', '', '', '', ''),
(82, 'w6er', 'AMD Processor', 'Msi', '', '', ''),
(83, '', '', '', '', '', ''),
(84, '', '', '', '', '', ''),
(85, 'w6er', 'AMD Processor', 'Msi', '', '', ''),
(86, '', '', '', '', '', ''),
(87, '', '', '', '', '', ''),
(88, 'w6er', 'AMD Processor', 'Msi', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(3) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(255) NOT NULL,
  `item_name` int(255) NOT NULL,
  `item_price` int(255) NOT NULL,
  `cart_cpu` varchar(255) NOT NULL,
  `cart_gpu` varchar(255) NOT NULL,
  `cart_ram` varchar(255) NOT NULL,
  `cart_ssd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` int(3) NOT NULL,
  `item_company` varchar(255) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_info` varchar(255) NOT NULL,
  `item_price` varchar(255) NOT NULL,
  `item_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `item_company`, `item_name`, `item_info`, `item_price`, `item_type`) VALUES
(1, 'Intel', 'i7-8750H', 'Cores : 6\r\nBase clock @ 2.20GHz\r\nBoost clock @ 4.10GHz', '400$', 'cpu'),
(2, 'AMD', 'Ryzen 7 7700X', 'Cores : 8\r\nBase clock @ 3.60GHz\r\nBoost clock @ 4.40GHz', '340$', 'cpu'),
(3, 'Intel', 'i7-9700K', 'Cores : 8\r\nBase clock @ 3.60GHz\r\nBoost clock @ 4.90GHz', '350$', 'cpu'),
(4, 'AMD', 'Ryzen 5 3600X', 'Cores : 6\r\nBase clock @ 3.80GHz\r\nBoost clock @ 4.40GHz', '250$', 'cpu'),
(5, 'NVIDIA', 'GTX 1080Ti', '11GB GDDR5', '700$', 'gpu'),
(6, 'NVIDIA', 'GTX 1050Ti', '4GB GDDR5', '160$', 'gpu'),
(7, 'NVIDIA', 'GTX 1070Ti', '8GB GDDR5', '500$', 'gpu'),
(8, 'NVIDIA', 'GTX 1060Ti', '6GB GDDR5', '300$', 'gpu'),
(35, 'Kingston', 'HyperX Fury Black', '16 GB 2666 MHz', '80$', 'ram'),
(36, 'Kingston ', 'HyperX Predator Black', '16 GB 3300 MHz', '90$', 'ram'),
(37, 'Corsair ', 'Vengeance LPX', '32GB 4000 MHz', '150$', 'ram'),
(38, 'Corsair \r\n', 'Dominator Platinum', '32GB 4700 MHz', '170$', 'ram'),
(39, 'Samsung', '970 Evo', '970GB', '100$', 'ssd'),
(40, 'Samsung', '960 Evo', '960GB', '90$', 'ssd'),
(41, 'Western Digital', 'Black SN750', '512 GB', '80$', 'ssd'),
(42, 'Western Digital', 'Blue 3D', '750 GB', '100$', 'ssd');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(3) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='User info';

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `email`, `phone`, `password`) VALUES
(1, 'Aditya Oswal', 'aditya.oswal@avantika.edu.in', 2147483647, 'qwerty@123'),
(2, 'Aditya Oswal', 'adityaoswal77@gmail.com', 2147483647, 'Aditya@123'),
(19, 'Atul', 'atul@ffsfsf', 2147483647, 'qwerty'),
(20, 'atul', 'atul@c', 2147483647, 'Aditya@123'),
(21, '!!@@#dds123', 'adityaoswal77@gmail.com', 123, 'Aditya@123'),
(22, 'noob', 'asd@asd.asd', 2147483647, 'Aayush@123'),
(23, 'Prabhu', 'yogeshwaraprabhu.kollipara@avantika.edu.in', 2147483647, 'Prabhu@123'),
(24, 'manas', 'manas@gmail.com', 9999, 'abcd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `build`
--
ALTER TABLE `build`
  ADD PRIMARY KEY (`build_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `build`
--
ALTER TABLE `build`
  MODIFY `build_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
