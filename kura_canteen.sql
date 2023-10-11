-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2023 at 12:14 AM
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
-- Table structure for table `core`
--

CREATE TABLE `core` (
  `core_id` int(11) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `ph` varchar(20) NOT NULL,
  `ad1` varchar(50) NOT NULL,
  `ad2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `core`
--

INSERT INTO `core` (`core_id`, `surname`, `firstname`, `ph`, `ad1`, `ad2`) VALUES
(170001, 'Olive', 'Grant', '0201234567', '62 Smith Road', 'Warkworth'),
(170002, 'Bounty', 'William', '0221234567', '23 Omaha Valley Rd', 'Warkworth');

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
(14, 1, 9, '2023-10-12');

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

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `results_id` int(11) NOT NULL,
  `standard_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `core_id` int(11) NOT NULL,
  `result` varchar(1) NOT NULL,
  `Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`results_id`, `standard_id`, `title`, `core_id`, `result`, `Date`) VALUES
(1, 91900, 'Inquiry', 170001, 'M', '2022-02-09'),
(2, 91909, 'Internal', 170001, 'M', '2022-02-09'),
(3, 91903, 'external', 170001, 'M', '2022-02-09'),
(4, 91909, 'External', 170001, '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `standards`
--

CREATE TABLE `standards` (
  `standard_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `version` int(11) NOT NULL,
  `extra` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `standards`
--

INSERT INTO `standards` (`standard_id`, `title`, `version`, `extra`) VALUES
(91900, 'Inquiry', 1, 1),
(91902, 'Create a Database', 1, 1),
(91903, 'Create A website', 1, 1),
(91909, 'Present a reflective analysis of developing a digital outcome', 1, 1);

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
-- Indexes for table `core`
--
ALTER TABLE `core`
  ADD PRIMARY KEY (`core_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`results_id`),
  ADD KEY `results_id` (`results_id`),
  ADD KEY `standard_id` (`standard_id`),
  ADD KEY `core_id` (`core_id`);

--
-- Indexes for table `standards`
--
ALTER TABLE `standards`
  ADD PRIMARY KEY (`standard_id`);

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
-- AUTO_INCREMENT for table `core`
--
ALTER TABLE `core`
  MODIFY `core_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170003;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `results_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
