-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2023 at 09:37 AM
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
-- Database: `m&e`
--

-- --------------------------------------------------------

--
-- Table structure for table `proj_tb`
--

CREATE TABLE `proj_tb` (
  `id` int(50) NOT NULL,
  `project_title` varchar(250) NOT NULL,
  `proj_loc` varchar(250) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `funding_partner` varchar(250) NOT NULL,
  `proj_budget` int(250) NOT NULL,
  `proj_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_archive`
--

CREATE TABLE `tb_archive` (
  `id` int(11) NOT NULL,
  `project_title` varchar(250) NOT NULL,
  `proj_loc` varchar(250) NOT NULL,
  `start_date` datetime(6) NOT NULL,
  `end_date` datetime(6) NOT NULL,
  `funding_partner` varchar(250) NOT NULL,
  `proj_budget` int(250) NOT NULL,
  `proj_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_archive`
--

INSERT INTO `tb_archive` (`id`, `project_title`, `proj_loc`, `start_date`, `end_date`, `funding_partner`, `proj_budget`, `proj_status`) VALUES
(7, 'starmall', 'Nasisi,Ligao City', '2023-11-06 00:00:00.000000', '2023-11-30 00:00:00.000000', 'LCC Ligao', 300010, 'ongoing'),
(8, 'Try', 'Legazpi', '2023-11-21 00:00:00.000000', '2023-12-09 00:00:00.000000', 'SM', 84574653, 'ongoing'),
(9, 'me', 'masbate', '2023-11-01 00:00:00.000000', '2023-12-01 00:00:00.000000', 'lcc malls', 2147483647, 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `proj_tb`
--
ALTER TABLE `proj_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_archive`
--
ALTER TABLE `tb_archive`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `proj_tb`
--
ALTER TABLE `proj_tb`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_archive`
--
ALTER TABLE `tb_archive`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
