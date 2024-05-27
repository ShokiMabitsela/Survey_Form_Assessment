-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2024 at 06:30 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `survey_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `surveys`
--

CREATE TABLE `surveys` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contact` int(10) DEFAULT NULL,
  `favorite_food` varchar(255) DEFAULT NULL,
  `eat_out_rating` int(11) DEFAULT NULL,
  `watch_movies_rating` int(11) DEFAULT NULL,
  `watch_tv_rating` int(11) DEFAULT NULL,
  `listen_radio_rating` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `surveys`
--

INSERT INTO `surveys` (`id`, `name`, `age`, `email`, `contact`, `favorite_food`, `eat_out_rating`, `watch_movies_rating`, `watch_tv_rating`, `listen_radio_rating`) VALUES
(17, 'Shoki Mabitsela', 26, 'shokireshoketswe63@gmail.com', 855055052, 'Pasta', 1, 2, 2, 3),
(18, 'Walter Khanyile', 21, 'walterk@gmail.com', 814819929, 'Pap and Wors', 1, 1, 3, 2),
(19, 'Mpho Langa', 30, 'mpholanga20@gmail.com', 723327854, 'Pizza', 4, 1, 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `surveys`
--
ALTER TABLE `surveys`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `surveys`
--
ALTER TABLE `surveys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
