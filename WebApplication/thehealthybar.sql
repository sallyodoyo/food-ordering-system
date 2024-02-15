-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2021 at 10:36 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thehealthybar`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `user_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `email_address` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  `confirm_password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`user_id`, `username`, `user_type`, `email_address`, `password`, `confirm_password`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', 'admin', 'admin'),
(2, 'client27', 'client', 'client27@gmail.com', 'client27', 'client27'),
(3, 'client3', 'client', 'client3@gmail.com', 'client3', 'client3'),
(4, 'client4', 'client', 'client4@gmail.com', 'client4', 'client4'),
(5, 'Madam', 'client', 'madam@gmail.com', '123', '123'),
(6, 'client6', 'client', 'client6@gmail.com', 'client6', 'client6'),
(8, 'client7', 'client', 'client7@gmail.com', 'client7', 'client7'),
(9, 'client90', 'client', 'princetobit@gmail.com', '123', '123'),
(10, 'client91', 'client', 'printobit@gmail.com', '12', '12'),
(11, 'Sally Keju', 'client', 'sallykeju@gmail.com', '12345', '12345'),
(12, 'New Client', 'client', 'newclient@example.com', '1234', '12w4'),
(13, 'new Admin1', 'client', 'newadmin@example.com', '123', '123'),
(15, 'Odoyo', 'admin', 'odoyo@gm.com', '098', '098'),
(16, 'Odoyo22', 'client', 'odoyo22@gm.com', '123', '123'),
(19, 'client1', 'client', 'client1@example.com', '123', '123'),
(20, 'client2', 'client', 'client2@example.com', '123', '123'),
(21, 'admin1', 'admin', 'admin1@example.com', '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `orderss`
--

CREATE TABLE `orderss` (
  `Client_name` varchar(255) NOT NULL,
  `orderid` varchar(255) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `productprice` int(255) NOT NULL,
  `total` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderss`
--

INSERT INTO `orderss` (`Client_name`, `orderid`, `productname`, `productprice`, `total`) VALUES
('client3', 'client31100', '', 0, '1100'),
('', '', 'Veggie Soup', 500, ''),
('', '', 'Club Sandwich', 600, ''),
('client1', 'client11800', '', 0, '1800'),
('', '', 'food1', 500, ''),
('', '', 'food2', 800, ''),
('', '', 'food3', 500, ''),
('client2', 'client21200', '', 0, '1200'),
('', '', 'Caesar Salad', 700, ''),
('', '', 'food3', 500, '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productid` int(11) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `productprice` int(10) NOT NULL,
  `productimage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productid`, `productname`, `code`, `productprice`, `productimage`) VALUES
(1, 'Garlic Chicken', 'meal1', 1000, 'img/meal1.jpg'),
(2, 'Caesar Salad', 'meal2', 700, 'img/meal2.jpg'),
(3, 'Veggie Soup', 'meal3', 500, 'img/veggiesoup.jpg'),
(4, 'Club Sandwich', 'meal4', 600, 'img/sandwich.jpg'),
(5, 'Creamy Pasta & Brocolli', 'meal5', 1100, 'img/pasta.jpg'),
(6, 'Fruit Salad', 'meal6', 600, 'img/fruitsalad.jpg'),
(7, 'Classic Passion', 'meal7', 300, 'img/passion.jpg'),
(8, 'Classic Mango', 'meal8', 300, 'img/mango.jpg'),
(9, 'Berry Blast', 'meal9', 400, 'img/berryblast.jpg'),
(10, 'Tropical Cocktail', 'meal10', 400, 'img/cocktail.jpg'),
(11, 'Lemonade', 'meal11', 400, 'img/lemonade.jpg'),
(12, 'Pineapple Mint', 'meal12', 400, 'img/pinemint.jpg'),
(13, 'Peanut Butter', 'meal13', 700, 'img/peanutbutter.jpg'),
(14, 'Blueberry', 'meal14', 750, 'img/blueberry.jpg'),
(15, 'Banana Split', 'meal15', 650, 'img/banana.jpg'),
(16, 'Tropical Green', 'meal16', 600, 'img/green.jpg'),
(20, 'food1', 'food1', 500, 'img/6135248e4f5650.07029148.jpg'),
(21, 'food2', 'food22', 800, 'img/613524aa2157e4.80138223.jpeg'),
(22, 'food3', 'food3', 500, 'img/613524c59b0412.47548146.jfif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productid`),
  ADD KEY `productcode` (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
