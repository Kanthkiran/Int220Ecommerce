-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2020 at 06:27 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cart_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `total_price` varchar(100) NOT NULL,
  `product_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pmode` varchar(50) NOT NULL,
  `products` varchar(255) NOT NULL,
  `amount_paid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_qty` int(11) NOT NULL DEFAULT 1,
  `product_image` varchar(255) NOT NULL,
  `product_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_price`, `product_qty`, `product_image`, `product_code`) VALUES
(1, 'CNDCREATION Casual Shirt', '900', 1, 'https://rukminim2.flixcart.com/image/880/1056/khqllzk0-0/shirt/p/3/b/l-ap004-cndcreation-original-imafxzrzz9ersyvt.jpeg?q=50', 'p1000'),
(2, 'CNDCREATION Casual Shirt', '750', 1, 'https://rukminim2.flixcart.com/image/714/857/kmccosw0/shirt/t/l/2/xl-men-regular-super-slim-fit-striped-casual-shirt-icome-original-imagf9q2epye5kks.jpeg?q=50" width="100%" id="ProductImg', 'p1001'),
(3, 'CNDCREATION Casual Shirt', '650', 1, 'https://rukminim2.flixcart.com/image/880/1056/ktyp8cw0/shirt/d/r/8/m-s-398-cndcreation-original-imag76ykqqtfuc4a.jpeg?q=50', 'p1002'),
(4, 'CNDCREATION Casual Shirt', '1500', 1, 'https://rukminim2.flixcart.com/image/880/1056/km57hjk0/shirt/b/k/5/m-st1-vebnor-original-imagf45gbhmebzdx.jpeg?q=50', 'p1003'),
(5, 'CNDCREATION Casual Shirt', '250', 1, 'https://rukminim2.flixcart.com/image/880/1056/kjd6nww0-0/fabric/3/x/2/no-unstitched-ve59-bollydolldesigner-original-imafyyg2wbhbfq7w.jpeg?q=50', 'p1004'),
(6, 'CNDCREATION Casual Shirt', '350', 1, 'https://rukminim2.flixcart.com/image/880/1056/km2clu80/shirt/c/9/w/m-st1-vebnor-original-imagffxj4yj8xzxu.jpeg?q=50', 'p1005'),
(7, 'CNDCREATION Casual Shirt', '1500', 1, 'https://m.media-amazon.com/images/I/81XPHYuYXbL._AC_SX466._SX._UX._SY._UY_.jpg', 'p1006'),
(9, 'CNDCREATION Casual Shirt', '850', 1, 'https://rukminim2.flixcart.com/image/880/1056/khqllzk0-0/shirt/p/3/b/l-ap004-cndcreation-original-imafxzrzz9ersyvt.jpeg?q=50', 'p1007');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code_2` (`product_code`),
  ADD KEY `product_code` (`product_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
