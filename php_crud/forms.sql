-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2019 at 11:35 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forms`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `cnfpassword` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `cnfpassword`, `gender`) VALUES
(22, 'muneeb', 'm@gmail.com', '12345678iK@', '12345678iK@', '0'),
(23, 'yasir', 'y@gmail.com', '12345678iK@', '12345678iK@', '0'),
(24, 'irfan', 'i@gmail.com', '12345678iK@', '12345678iK@', '0'),
(25, 'ali', 'a@gmail.com', '12345678iK@', '12345678iK@', '0'),
(26, 'haya', 'h@gmail.com', '12345678iK@', '12345678iK@', '0'),
(27, 'john', 'j@gmail.com', '12345678iK@', '12345678iK@', '0'),
(28, 'harry', 'harry@gmail.com', '12345678iK@', '12345678iK@', '0'),
(29, 'porter', 'porter@gmail.com', '12345678iK@', '12345678iK@', '0'),
(30, 'johny', 'jony@gmail.com', '12345678iK@', '12345678iK@', '0'),
(31, 'rehan', 'rehan@gmail.com', '12345678iK@', '12345678iK@ ', 'male'),
(33, 'hey', 'hey@gmail.com', '12345678iK@', '12345678iK@ ', 'female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
