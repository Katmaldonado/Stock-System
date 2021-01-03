-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3325:3325
-- Generation Time: Jan 02, 2021 at 09:12 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stock_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id` int(11) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `version` varchar(100) NOT NULL,
  `potencia` varchar(100) NOT NULL,
  `cilindrada` varchar(100) NOT NULL,
  `combustible` varchar(100) NOT NULL,
  `transmision` varchar(100) NOT NULL,
  `precio` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `marca`, `modelo`, `version`, `potencia`, `cilindrada`, `combustible`, `transmision`, `precio`) VALUES
(1, 'Fiat', '500', '2008', '69', '1242', 'Gasolina', 'Manual', '6,500€'),
(2, 'Renault', 'CAPTUR', '2015', '90', '1461', 'Diesel', 'Automático', '10,950€'),
(3, 'Toyota', 'AURIS', '2013', '136', '1798', 'Gasolina', 'Automático', '10,950€'),
(4, 'Volkswagen', 'Passat', '2015', '120', '1598 CC', 'Diesel', 'Manual', '15,500€'),
(5, 'Skoda', 'Rapid', '2015', '115', '1598 CC', 'Diesel', 'Manual', '10,500€'),
(6, 'Opel', 'Zafira', '2016', '120', '1598 CC', 'Diesel', 'Automático ', '11,950€'),
(7, 'Seat', 'Arona', '2016', '95', '1000', 'Gasolina', 'Manual', '12,950€'),
(8, 'Citroen', 'Jumpy', '2012', '98', '1997', 'Diesel', 'Automático ', '13,950€'),
(9, 'Hyundai', 'i10', '2015', '87', '1.248', 'Gasolina', 'Manual', '7.989 €');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
