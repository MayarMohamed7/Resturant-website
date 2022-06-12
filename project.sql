-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2022 at 11:09 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `cashiers`
--

CREATE TABLE `cashiers` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cashiers`
--

INSERT INTO `cashiers` (`name`, `email`, `pass`) VALUES
('mohamed', 'mohamed@cashier.com', 'mohamed23');

-- --------------------------------------------------------

--
-- Table structure for table `cashorderdet`
--

CREATE TABLE `cashorderdet` (
  `order_id` int(100) NOT NULL,
  `food` varchar(100) NOT NULL,
  `qty` int(100) NOT NULL,
  `price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cashorderdet`
--

INSERT INTO `cashorderdet` (`order_id`, `food`, `qty`, `price`) VALUES
(1, 'Pan Seared Steak', 2, 330);

-- --------------------------------------------------------

--
-- Table structure for table `cashorders`
--

CREATE TABLE `cashorders` (
  `order_id` int(20) NOT NULL,
  `pay_meth` varchar(100) NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cashorders`
--

INSERT INTO `cashorders` (`order_id`, `pay_meth`, `date`) VALUES
(1, 'Cash', '2022-06-12 01:55:33am');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `descrip` text NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `image_name` varchar(100) NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `title`, `descrip`, `price`, `image_name`, `img`) VALUES
(1, 'Tostada', 'This easy and satisfying Mexican-inspired breakfast recipe brings lots of flavor to your plate. Made with a fried corn tortilla, topped with eggs, refried beans, shredded cheese, salsa, and other toppings', '100', 'Tostada', ''),
(2, 'Cranberry Pancakes', 'Start your day off right with these easy pancakes, packed with cranberrys sour spike.', '75', 'Cranberry', ''),
(3, 'Spinach & Egg Scramble with Raspberries', 'This quick egg scramble with hearty bread is one of the best breakfasts. It combines power foods, eggs and raspberries, with filling whole-grain toast and nutrient-packed spinach.', '125', 'spinacheggs', ''),
(4, 'Spinach-Mushroom Frittata with Avocado Salad\r\n', 'Frittatas are like omelets, only easier--and they taste great hot, warm or cold. This vegetable-packed version is spiked with Mediterranean flavor and paired with a cool salad of lemony cucumbers and tomatoes with creamy avocados', '125', 'frittata', ''),
(5, 'Classic Grilled Chicken', 'Grilled Chicken marinated with our special sauce with a side of pasta.', '150', 'lunch1', ''),
(6, 'Chicken Panne', 'Golden fried chicken breasts with a side of fries and your choice of sauce.', '65', 'lunch2', ''),
(7, 'Pan Seared Steak', 'A premium Steak seared with a garlic rosemary-infused butter.', '165', 'lunch3', ''),
(8, 'Lemon Garlic Shrimp Pasta', 'Buttery noodles with juicy shrimp, flavored with lemon and garlic', '180', 'lunch4', '');

-- --------------------------------------------------------

--
-- Table structure for table `orderdet`
--

CREATE TABLE `orderdet` (
  `order_id` int(100) NOT NULL,
  `food_name` varchar(100) NOT NULL,
  `qty` int(10) NOT NULL,
  `price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderdet`
--

INSERT INTO `orderdet` (`order_id`, `food_name`, `qty`, `price`) VALUES
(14, 'Spinach & Egg Scramble with Raspberries', 2, 250),
(14, 'Cranberry Pancakes', 2, 150),
(15, 'Spinach-Mushroom Frittata with Avocado Salad', 2, 250),
(16, 'Breakfast Tostada', 2, 200),
(16, 'Chicken Panne', 2, 300),
(17, 'Peach Cooler', 2, 150);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(10) NOT NULL,
  `custemail` varchar(100) NOT NULL,
  `pay_meth` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `custemail`, `pay_meth`, `date`) VALUES
(14, 'mayar@gmail.com', 'Cash', '2022-06-09'),
(15, 'mayar@gmail.com', 'Cash', '2022-06-10'),
(16, 'mayar@gmail.com', 'Cash', '2022-06-10'),
(17, 'mayar@gmail.com', 'Cash', '2022-06-12');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `custemail` varchar(100) NOT NULL,
  `food` varchar(100) NOT NULL,
  `rating` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`custemail`, `food`, `rating`) VALUES
('mayar@gmail.com', '', 0),
('mayar@gmail.com', 'Breakfast Tostada', 0),
('mayar@gmail.com', 'Breakfast Tostada', 5),
('mayar@gmail.com', 'Breakfast Tostada', 4),
('mayar@gmail.com', 'Breakfast Tostada', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `img` varchar(200) NOT NULL,
  `nationalID` int(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `password`, `img`, `nationalID`) VALUES
('mayar', 'mayar@gmail.com', 'mayar20', 'null', 2147483647),
('aya', 'aya@hotmail.com', 'aya', 'null', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cashorders`
--
ALTER TABLE `cashorders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cashorders`
--
ALTER TABLE `cashorders`
  MODIFY `order_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
