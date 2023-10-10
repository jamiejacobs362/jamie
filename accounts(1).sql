-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2023 at 12:37 AM
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
(24, 'boris', '', '', '$2y$10$yl.G5aATnMDJiEzMWhNVlO86wq.OK7e62wql6IKLCJkWrNXv70PAm', 'boris@mail.com', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
