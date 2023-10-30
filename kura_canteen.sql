-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2023 at 12:54 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kura_canteen`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(50) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `surname`, `firstname`, `password`, `email`, `activation_code`) VALUES
(1, 'admin', '', '', '$2y$10$SfhYIDtn.iOuCW7zfoFLuuZHX6lja4lF4XA4JqNmpiH/.P3zB8JCa', 'admin@mail.com', ''),
(2, 'jamie', '', '', '$2y$10$/BDU21.H3.TH.uhJB./Dhu/NVeKLk9Rrg9wYUEl4BInBiDBtmP9Xm', 'jamieja@gmail.com', ''),
(9, 'bob', '', '', '$2y$10$1c1mav.kpxzAZOiuQGcTRu.xTCHQ73en665p8qt1Do9s7x9.bjkY.', 'bob@mail.com', ''),
(17, 'lucy', '', '', '$2y$10$UwV1L/Caz1fcS6yKzMfdqeU9bESsUv71SDHMI1yjrhUikMMi7ZOU2', 'lucy@mail.com', ''),
(19, 'mary', '', '', '$2y$10$KOHUQ7spTty.bKVa8Tk0i.t4ljs1x9fMqxXjlWlxJB4nR3pMP.zuu', 'mary@mail.com', ''),
(21, 'leigh', '', '', '$2y$10$vdOAPM.PBKEwXpa/890WQOd7rOlQc/8UW/NPpkZ6EkYCS6peeYHrC', 'leigh@mail.com', ''),
(22, 'otis', 'Jacobs', 'Otis', '$2y$10$HrqNDmrqWhBxPUuPJ4u2deP7LtyFK8osEvTyfF1sh/eGs86kp/gRy', 'otis@mail.com', ''),
(24, 'boris', '', '', '$2y$10$yl.G5aATnMDJiEzMWhNVlO86wq.OK7e62wql6IKLCJkWrNXv70PAm', 'boris@mail.com', ''),
(25, 'vern', 'Dempster', 'Vern', '$2y$10$jx0F7czdK/5OmiypPR1W7e8fPjvhp4GGU42qjKFDM6FYl2tuVOJle', 'vern@mail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `fname`, `lname`, `email`, `comment`) VALUES
(1, 'jack', 'lee', 'jack@mail.com', 'i like your food'),
(2, 'Jamie', 'jacobs', 'jamie@email.com', 'i like your drinks'),
(6, 'John', 'Doe', 'john@mail.com', 'nice food'),
(7, 'John', 'Doe', 'john@mail.com', ''),
(8, 'jacob', 'james', 'jamie@mail.com', 'nice food'),
(9, 'John', 'Doe', 'john@mail.com', 'xd');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`, `description`, `image`) VALUES
(1, 'Mac and cheese ', 3, 'Mac and Cheese', 'maccheese.jpg'),
(2, 'Bottle of water', 1, 'Bottle water', 'water.jpg'),
(3, 'Juicie', 2, 'This is a juicie', 'juicie.jpg'),
(4, 'juicie', 2, 'This is another juicie', 'juicie2.jpg'),
(5, 'hotdog', 5, 'This is our hotdog', 'hotdog.jpg'),
(6, 'Chicken tenders and saled', 6, 'This is chicken tenders and saled', 'IMG_8479.jpg'),
(7, 'pie', 5, 'This is our pie', 'pie.jpg'),
(8, 'Pizza', 3, 'This is a pizza', 'pizza.jpg'),
(9, 'Popcorn', 4, 'This is popcorn', 'popcorn.jpg'),
(10, 'Pork dumplings', 4, 'pork dumplings', 'pork_dumplings.jpg'),
(11, 'Spaghetti on a bun', 3, 'Spaghetti on a bun', 'spaghetti_on_bun.jpg'),
(12, 'Up and go banana flavored', 2, 'Up and go banana flavored', 'upgo_banana.jpg'),
(13, 'Up and go vanilla flavored', 2, 'Up and go vanilla flavored', 'upgo_vanilla.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `items_id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `account_id`, `items_id`, `date`) VALUES
(3, 22, 1, '2023-09-06'),
(4, 22, 3, '2023-09-08'),
(5, 22, 1, '2023-09-15'),
(6, 22, 1, '2023-09-15'),
(7, 24, 1, '2023-10-11'),
(8, 24, 1, '2023-10-11'),
(9, 24, 2, '2023-10-11'),
(10, 25, 5, '2023-10-11'),
(11, 25, 9, '2023-10-12'),
(12, 25, 9, '2023-10-12'),
(13, 25, 9, '2023-10-12'),
(14, 1, 9, '2023-10-12'),
(15, 22, 2, '2023-10-12'),
(16, 22, 2, '2023-10-12');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title1` varchar(100) NOT NULL,
  `text1` text NOT NULL,
  `image1` varchar(50) NOT NULL,
  `image2` varchar(50) NOT NULL,
  `image3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title1`, `text1`, `image1`, `image2`, `image3`) VALUES
(1, 'Welcome to Kura Canteen', '', 'shelf1.jpg', 'shelf2.jpg', 'shelf3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `account_id` (`account_id`),
  ADD KEY `items_id` (`items_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`items_id`) REFERENCES `items` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
