-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2023 at 12:59 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `beverages`
--

CREATE TABLE `beverages` (
  `bev_id` int(10) UNSIGNED NOT NULL,
  `bev_date` date DEFAULT NULL,
  `title` varchar(100) NOT NULL,
  `active_b` varchar(100) DEFAULT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `image` blob NOT NULL,
  `cat_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `beverages`
--

INSERT INTO `beverages` (`bev_id`, `bev_date`, `title`, `active_b`, `description`, `price`, `image`, `cat_id`) VALUES
(9, '2023-08-01', 'Iced Cappuccino', 'Yes', 'Made by layering espresso and foamed milk in a glass of ice.', 18, 0x696365642d63617070756363696e6f2e706e67, 1),
(10, '2023-08-03', 'Iced Espresso', 'Yes', 'Espresso complemented with white chocolate, syrup and steamed milk.\r\n\r\n', 15, 0x696365642d657370726573736f2e706e67, 1),
(11, '2023-08-03', 'Iced Latte', 'Yes', 'An iced latte is a simple and straight forward cold espresso based drink.\r\n\r\n', 12, 0x696365642d6c617474652e706e67, 1),
(12, NULL, 'Iced Americano', 'Yes', 'Espresso shots topped with cold water produce a light layer of crema, then served over ice.\r\n\r\n', 11, 0x696365642d616d65726963616e6f2e706e67, 1),
(13, NULL, 'Hot Cappuccino', 'Yes', 'A freshly pulled shot of espresso layered with steamed whole milk and thick rich foam to offer a luxurious velvety texture and complex aroma.\r\n', 10, 0x686f742d63617070756363696e6f2e706e67, 2),
(14, NULL, 'Hot Espresso', 'Yes', 'A concentrated form of coffee brewed with high pressure, hot water and finely ground coffee beans.\r\n\r\n', 8, 0x686f742d657370726573736f2e706e67, 2),
(15, NULL, 'Hot Latte', 'Yes', 'A milk coffee that boasts a silky layer of foam as a real highlight to the drink.\r\n', 7, 0x686f742d6c617474652e706e67, 2),
(16, NULL, 'Strawberry Smoothie', 'Yes', 'Light vanilla yogurt and perfectly sweet, juicy strawberries, Contains Milk.\r\n\r\n', 13, 0x736d6f6f746869652d312e706e67, 3),
(17, NULL, 'Red Berry Smoothie', 'Yes', 'Frozen berries, vanilla Greek yogurt, liquid of your choice, and sweetener if you desire.\r\n\r\n', 15, 0x736d6f6f746869652d322e706e67, 3),
(18, NULL, 'Pineapple Smoothie', 'Yes', 'Pineapple, pineapple-orange-juice concentrate, yogurt, water and ice cubes.\r\n\r\n', 17, 0x736d6f6f746869652d332e706e67, 3),
(19, NULL, 'Spinach Smoothie	', 'Yes', 'Ripe bananas, pineapple, baby spinach, yogurt and ice cubes.\r\n\r\n', 19, 0x736d6f6f746869652d342e706e67, 3),
(21, '2023-11-01', 'Hot Americano', 'Yes', 'Freshly pulled shots of espresso combined with hot water.\r\n\r\n', 9, 0x686f742d616d65726963616e6f2e706e67, 2);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(10) UNSIGNED NOT NULL,
  `cat_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`) VALUES
(1, 'Cold Drinks'),
(2, 'Hot Drinks'),
(3, 'Iced Juices');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `reg_date` date DEFAULT NULL,
  `full_name` varchar(200) NOT NULL,
  `user_name` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `active` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `reg_date`, `full_name`, `user_name`, `email`, `active`, `password`) VALUES
(1, '2023-11-05', 'Yasmin sayed', 'yass0', 'yassmin.sayed868@gmail.com', 'Yes', '123'),
(2, '2023-11-06', 'Hager Ahmed', 'hag33', 'hager@gmail.com', 'No', '225588'),
(3, NULL, 'Omar Sayed', 'omar22', 'omar@gmail.com', 'Yes', '21456'),
(4, NULL, 'Ahmed Ashraf', 'ahmed1254', 'ahmed@yahoo.com', 'No', 'A123k');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beverages`
--
ALTER TABLE `beverages`
  ADD PRIMARY KEY (`bev_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beverages`
--
ALTER TABLE `beverages`
  MODIFY `bev_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `beverages`
--
ALTER TABLE `beverages`
  ADD CONSTRAINT `beverages_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
