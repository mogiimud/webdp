-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2024 at 05:56 AM
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
-- Database: `pengolahan keju`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `comment`, `created_at`) VALUES
(1, 'Maudina mey nur hidayah', 'mantapp', '2024-03-29 15:15:50'),
(2, 'candra', 'websitenya keren bangett semangaatt yaaa', '2024-03-29 15:36:56'),
(3, 'viskaa', ' baguss sekali', '2024-03-31 23:50:20'),
(4, 'cia', 'mantap', '2024-04-26 02:02:23');

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `id materi` int(255) NOT NULL,
  `informasi` varchar(255) NOT NULL,
  `bab` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `level`) VALUES
(7, 'maudina', 'mogiid', '123567', 'admin'),
(8, 'yosi', 'yosisisi', '202cb962ac59075b964b07152d234b70', 'user'),
(10, 'candra', 'cdnxz', 'c4b31ce7d95c75ca70d50c19aef08bf1', 'user'),
(11, 'raihan', 'hana', '202cb962ac59075b964b07152d234b70', 'user'),
(12, 'ataya', 'tayaa', '44e6b86aeefa3eca5832a98043a7b6fa', 'user'),
(13, 'nana', 'moana', '81dc9bdb52d04dc20036dbd8313ed055', 'admin'),
(14, 'mona', 'onaa', '814f06ab7f40b2cff77f2c7bdffd3415', 'admin'),
(15, 'candra', 'cdnxz', 'c4b31ce7d95c75ca70d50c19aef08bf1', 'admin'),
(16, 'maudi', 'mogii', 'd2cdf047a6674cef251d56544a3cf029', 'admin'),
(17, 'maudi', 'mogii', 'd2cdf047a6674cef251d56544a3cf029', 'admin'),
(18, 'ucinya', 'ucii', 'd005ce7aeef46bd18515f783fb8e87fa', 'admin'),
(19, 'selvii', 'selpii', 'c26820b8a4c1b3c2aa868d6d57e14a79', 'admin'),
(20, 'maudi', 'mogii', 'd2cdf047a6674cef251d56544a3cf029', 'admin'),
(21, 'akumu', 'kumuu', '1f262a60600e30c026663a7ccbed6bab', 'admin'),
(22, 'dina', 'dinaa', 'd2cdf047a6674cef251d56544a3cf029', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
