-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2020 at 11:01 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `SMARTPHONE.KG`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,0) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`, `item_register`) VALUES
(1, 'Samsung', 'Samsung Galaxy 10', 14000, './assets/products/1.png', NOW()), -- NOW()
(2, 'Xiaomi', 'Redmi Note 7', 10000, './assets/products/2.png', NOW()),
(3, 'Xiaomi', 'Redmi Note 7 Pro', 12800, './assets/products/3.png', NOW()),
(4, 'Xiaomi', 'Redmi Note 5a 4/64', 9400, './assets/products/4.png', NOW()),
(5, 'Xiaomi', 'Redmi Note 5 4/64gb', 9900, './assets/products/6.png', NOW()),
(6, 'Xiaomi', 'Redmi Mi Note 3 6/64gb', 8600, './assets/products/7.png', NOW()),
(7, 'Xiaomi', 'Redmi Note 5 6/128gb', 10500, './assets/products/10.png', NOW()),
(8, 'Apple', 'Apple IPhone X', 55000, './assets/products/13.png', NOW()),
(9, 'Xiaomi', 'Redmi Note 8 4/64gb', 12500, './assets/products/note8.jpg', NOW()),
(10, 'Huawei', 'Huawei Nova 9', 16400, './assets/products/hnova9.jpg', NOW()),
(11, 'Lenovo', 'Lenovo Z6 Lite', 19300, './assets/products/lz6lite.jpg', NOW()),
(12, 'Apple', 'Apple IPhone 11', 62000, './assets/products/i11.jpg', NOW()),
(13, 'Apple', 'Apple IPhone 12', 68000, './assets/products/i12.jpg', NOW()),
(14, 'Xiaomi', 'Redmi Note 8 Pro 6/128', 14800, './assets/products/note8pro.jpg', NOW()),
(15, 'Xiaomi', 'Redmi Note 10 4/128', 15800, './assets/products/rnote10.jpg', NOW()),
(16, 'Lenovo', 'Lenovo A7010 2/32gb', 8200, './assets/products/la7010.jpg', NOW()),
(17, 'Samsung', 'Samsung A32 4/64', 12600, './assets/products/sa32.jpg', NOW()),
(18, 'Xiaomi', 'Redmi Mi A2 Lite', 11400, './assets/products/mia2lite.jpg', NOW()),
(19, 'Samsung', 'Samsung A32 6/128', 13400, './assets/products/sa32b.jpg', NOW()),
(20, 'Apple', 'Apple IPhone 12 Pro', 68000, './assets/products/ip12.jpg', NOW()),
(21, 'Apple', 'Apple IPhone 13', 72000, './assets/products/i13.jpg', NOW()),
(22, 'Xiaomi', 'Redmi Mi 8', 12600, './assets/products/mi8.jpg', NOW()),
(23, 'Huawei', 'Huawei P30', 16700, './assets/products/hp30.jpg', NOW()),
(24, 'Apple', 'Apple IPhone 5', 11500, './assets/products/15.png', NOW()),
(25, 'Samsung', 'Samsung S7 Edge(Gold)', 14700, './assets/products/ss7edge.jpg', NOW()),
(26, 'Samsung', 'Samsung S8', 15900, './assets/products/ss8.jpg', NOW()),
(27, 'Samsung', 'Samsung A12 4/64', 12600, './assets/products/sa12.jpg', NOW()),
(28, 'Huawei', 'Huawei P Smart', 17400, './assets/products/hpsmart.jpg', NOW()),
(29, 'Xiaomi', 'Redmi Note 9', 16900, './assets/products/note%209.jpg', NOW()),
(30, 'Lenovo', 'Lenovo Legion 5G', 32000, './assets/products/llegionduel5g.jpg', NOW()),
(31, 'Huawei', 'Huawei Mate 20 Pro', 34000, './assets/products/hmate20pro.jpg', NOW()),
(32, 'Lenovo', 'Lenovo K10 Note', 32000, './assets/products/lk10note.jpg', NOW()),
(33, 'Samsung', 'Samsung A52 6/128', 26000, './assets/products/sa52.jpg', NOW()),
(34, 'Lenovo', 'Lenovo Z5 S', 35600, './assets/products/lz5s.jpg', NOW()),
(35, 'Lenovo', 'Lenovo Z6', 29800, './assets/products/lz6.jpg', NOW()),
(36, 'Lenovo', 'Lenovo Z6 Lite', 28600, './assets/products/lz6lite.jpg', NOW()),
(37, 'Xiaomi', 'Redmi Note 10 Pro', 24200, './assets/products/rnote10pro.jpg', NOW()),
(38, 'Xiaomi', 'Redmi Mi 10 Ultra', 25300, './assets/products/mi10ultra.jpg', NOW()),
(39, 'Xiaomi', 'Redmi Mi 11 Ultra', 29900, './assets/products/mi11ultra.jpg', NOW()),
(40, 'Huawei', 'Huawei Y9 Prime', 31200, './assets/products/hy9prime.jpg', NOW()),
(41, 'Lenovo', 'Lenovo Z6 Pro', 31500, './assets/products/lz6pro.jpg', NOW()),
(42, 'Xiaomi', 'Redmi Note 11', 28600, './assets/products/rnote11.jpg', NOW()),
(43, 'Xiaomi', 'Redmi Note 11 Pro', 31200, './assets/products/rnote11pro.jpg', NOW()),
(44, 'Huawei', 'Huawei 40 Pro Plus', 51000, './assets/products/hmate40proplus.jpg', NOW()),
(45, 'Samsung', 'Samsung S20 Plus', 46700, './assets/products/ss20plus.jpg', NOW()),
(46, 'Samsung', 'Samsung S22 Ultra', 48200, './assets/products/ss22ultra.jpg', NOW());

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `register_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `register_date`) VALUES
(1, 'Kenjebekov', 'Daniyar', NOW()),
(2, 'Another', 'User', NOW());

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
