-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 08, 2019 at 06:04 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marwa`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `uername` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `img` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `uername`, `email`, `img`, `password_hash`) VALUES
(1, 'ahmed', 'cypher', 'ahmed.mohamed@gmail.com', '', '$2y$10$zCxiZCywgFR5wYgKgY1t/unPJl6A6GQFWYTNGA0nblKuuxoC3DoM2'),
(3, 'abdalrhman', 'admin', 'ahmed.mohamed@gmail.com', '1570505234.932.photo3.jpg', '$2y$10$ZF67UkojZhCjuqi7J081i.ARdxrmcHeA3m/c3beO5xh8p3e5AjjCm'),
(4, 'abdalrhman 2', 'admin', 'ahmed.mohamed@gmail.com', '1570505668.1933.photo2.jpg', '$2y$10$KvYGT00dqB2nYofIQdwr7uc2G6eoW6GcRJanqF2rOHUOzvR8euBwm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
