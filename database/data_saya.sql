-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2022 at 07:57 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_saya`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `merek` varchar(200) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `harga` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `nama`, `merek`, `gambar`, `harga`) VALUES
(12, 'Brio', 'Honda', 'https://www.honda-indonesia.com/uploads/images/models/colors/cyellow2__1613396998399.png', 'Rp155,7 - 235,9 Juta'),
(13, 'Avanza', 'Toyota', 'http://www.ixotransport.com/images/armada/grand_avanza_1518543543.png', 'Rp255,1 - 288,4 Juta'),
(14, 'Sirion', 'Daihatsu', 'http://astradaihatsukebumen.id/images/SIRION.png', 'Rp335,4 - 401,0 Juta');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'juan', 'juankordak89@gmail.com', '202cb962ac59075b964b07152d234b70'),
(2, 'admin', 'edwardkordak@gmail.com', '202cb962ac59075b964b07152d234b70'),
(3, 'juan', 'lunarthemoonlight20@gmail.com', '202cb962ac59075b964b07152d234b70'),
(5, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(6, '123', 'natan@123', '202cb962ac59075b964b07152d234b70'),
(7, 'juan', '123@123', '202cb962ac59075b964b07152d234b70'),
(8, 'senku', 'djdd@123', '77963b7a931377ad4ab5ad6a9cd718aa'),
(9, 'tovel', 'juankordak@gmail.com', '202cb962ac59075b964b07152d234b70'),
(10, 'gea', '123@124', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
