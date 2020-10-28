-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2020 at 04:24 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumniweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_projek`
--

CREATE TABLE `data_projek` (
  `id` int(11) NOT NULL,
  `namaprojek` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL,
  `category` text NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `statusfield1` text DEFAULT NULL,
  `statusfield2` text DEFAULT NULL,
  `statusfield3` text DEFAULT NULL,
  `gambar` varchar(255) NOT NULL DEFAULT 'default_thumbnail.png',
  `created_by` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  `datafield_1` varchar(255) DEFAULT NULL,
  `datafield_2` varchar(255) DEFAULT NULL,
  `datafield_3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_projek`
--

INSERT INTO `data_projek` (`id`, `namaprojek`, `token`, `role`, `category`, `deskripsi`, `statusfield1`, `statusfield2`, `statusfield3`, `gambar`, `created_by`, `created_date`, `updated_date`, `datafield_1`, `datafield_2`, `datafield_3`) VALUES
(22, 'saya bersedia', 'HV6z1Dxx3WqZ8ZOVSS7W3PuqGw4XoFOTWoMQ34x7Oo', 'alumni', 'all', '3 tahun', 'on', 'on', 'on', '1603847524_b05c0acb23bab7c3d27b.jpg', 'fandilladp', '2020-10-27 20:12:04', '0000-00-00 00:00:00', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `salt` text NOT NULL,
  `avatar` varchar(150) NOT NULL DEFAULT 'default.jpg',
  `role` int(1) NOT NULL DEFAULT 1,
  `aktif` int(11) NOT NULL DEFAULT 0,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `salt`, `avatar`, `role`, `aktif`, `created_date`, `updated_date`) VALUES
(5, 'fandilladp', 'fandilladp@gmail.com', 'dd608e495d210b0e1e41b8b7e5391cfe', '5f61bc58d044c5.92226995', 'default.jpg', 1, 1, '2020-09-16 02:18:48', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `usertoken`
--

CREATE TABLE `usertoken` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `token` varchar(128) NOT NULL,
  `created_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_projek`
--
ALTER TABLE `data_projek`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertoken`
--
ALTER TABLE `usertoken`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_projek`
--
ALTER TABLE `data_projek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `usertoken`
--
ALTER TABLE `usertoken`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
