-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2023 at 09:29 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sales`
--

-- --------------------------------------------------------

--
-- Table structure for table `products_sales`
--

CREATE TABLE `products_sales` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` double NOT NULL,
  `product_sales` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products_sales`
--

INSERT INTO `products_sales` (`id`, `product_name`, `product_price`, `product_sales`) VALUES
(1, 'LEGO Star Wars The Mandalorians N-1 Starfighter', 42, 50),
(2, 'LEGO 75336 Star Wars Transport of the Inquisitor Scythe', 64, 1000),
(3, 'LEGO Star Wars - 501st Battle Pack 75345', 16, 3500),
(4, 'LEGO Star Wars The Jedi Starfighter by Obi-Wan Kenobi', 25, 1750),
(5, 'JBL Tune 760NC', 79, 10000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products_sales`
--
ALTER TABLE `products_sales`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products_sales`
--
ALTER TABLE `products_sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
