-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2022 at 06:08 PM
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
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `descrip` text NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `image_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `title`, `descrip`, `price`, `image_name`) VALUES
(1, 'Tostada', 'This easy and satisfying Mexican-inspired breakfast recipe brings lots of flavor to your plate. Made with a fried corn tortilla, topped with eggs, refried beans, shredded cheese, salsa, and other toppings', '100', 'Tostada'),
(2, 'Cranberry Pancakes', 'Start your day off right with these easy pancakes, packed with cranberrys sour spike.', '75', 'Cranberry'),
(3, 'Spinach & Egg Scramble with Raspberries', 'This quick egg scramble with hearty bread is one of the best breakfasts. It combines power foods, eggs and raspberries, with filling whole-grain toast and nutrient-packed spinach.', '125', 'spinacheggs'),
(4, 'Spinach-Mushroom Frittata with Avocado Salad\r\n', 'Frittatas are like omelets, only easier--and they taste great hot, warm or cold. This vegetable-packed version is spiked with Mediterranean flavor and paired with a cool salad of lemony cucumbers and tomatoes with creamy avocados', '125', 'frittata'),
(5, 'Classic Grilled Chicken', 'Grilled Chicken marinated with our special sauce with a side of pasta.', '150', 'lunch1'),
(6, 'Chicken Panne', 'Golden fried chicken breasts with a side of fries and your choice of sauce.', '65', 'lunch2'),
(7, 'Pan Seared Steak', 'A premium Steak seared with a garlic rosemary-infused butter.', '165', 'lunch3'),
(8, 'Lemon Garlic Shrimp Pasta', 'Buttery noodles with juicy shrimp, flavored with lemon and garlic', '180', 'lunch4');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `custemail` varchar(100) NOT NULL,
  `food` varchar(100) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `qty` int(20) NOT NULL,
  `date` date NOT NULL,
  `total` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `password`, `name`) VALUES
('aya@gmail.com', 'aya22', 'aya'),
('marina@gmail.com', 'marina20', 'marina'),
('hagar@gmail.com', 'hagar23', 'hagar'),
('marina@gmail.com', 'marina111', 'Marina Maurice');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
