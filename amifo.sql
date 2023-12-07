-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2023 at 02:48 PM
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
-- Database: `amifo`
--

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id_payment` int(11) NOT NULL,
  `bank` varchar(100) NOT NULL,
  `nova` varchar(100) NOT NULL,
  `pembayaran` varchar(100) NOT NULL,
  `nominal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id_payment`, `bank`, `nova`, `pembayaran`, `nominal`) VALUES
(1, 'Muamalat', '7575 01 21114496', 'Remedial', 'Rp. 1.000.000'),
(2, 'Muamalat', '7575 02 21114496', 'SPP Tetap', 'Rp. 2.000.000'),
(3, 'Muamalat', '7575 03 21114496', 'SPP Variabel', 'Rp. 3.000.000'),
(4, 'BRI', '10976 01 21114496', 'Remedial', 'Rp. 1.000.000'),
(5, 'BRI', '10976 02 21114496', 'SPP Tetap', 'Rp. 2.000.000'),
(6, 'BRI', '10976 03 21114496', 'SPP Variabel', 'Rp. 3.000.000');

-- --------------------------------------------------------

--
-- Table structure for table `payment_info`
--

CREATE TABLE `payment_info` (
  `id_bayar` int(11) NOT NULL,
  `bank` varchar(100) NOT NULL,
  `nova` varchar(100) NOT NULL,
  `pembayaran` varchar(100) NOT NULL,
  `nominal` varchar(100) NOT NULL,
  `selected_bank` varchar(100) NOT NULL,
  `no_rek` varchar(100) NOT NULL,
  `season_sender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment_info`
--

INSERT INTO `payment_info` (`id_bayar`, `bank`, `nova`, `pembayaran`, `nominal`, `selected_bank`, `no_rek`, `season_sender`) VALUES
(23, 'BRI', '10976 02 21114496', 'SPP Tetap', 'Rp. 2.000.000', 'mandiri', '3123 12 31 3', 'user'),
(24, 'Muamalat', '7575 01 21114496', 'Remedial', 'Rp. 1.000.000', 'mandiri', '123123 123 12312', 'user'),
(25, 'Muamalat', '7575 01 21114496', 'Remedial', 'Rp. 1.000.000', 'mandiri', '75757575  5757575 ', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `pengingat`
--

CREATE TABLE `pengingat` (
  `id_pengingat` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `whatsapp` varchar(100) NOT NULL,
  `telegram` varchar(100) NOT NULL,
  `season_sender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengingat`
--

INSERT INTO `pengingat` (`id_pengingat`, `email`, `whatsapp`, `telegram`, `season_sender`) VALUES
(1, 'dedeamikom66@students.amikom.ac.id', '081327210927', 'dedewahyu', 'user'),
(2, 'dedewahyu@wdwdwdad', '09091232', 'dwdasdw', 'dede wahyu');

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `id_login` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `tahun` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`id_login`, `username`, `password`, `level`, `tahun`) VALUES
(1, 'admin', '123', 'admin', '2021'),
(2, 'user', '456', 'user', '2021'),
(3, 'dede', '123', 'admin', '2021'),
(4, 'dede wahyu', '123', 'user', '2023');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id_payment`);

--
-- Indexes for table `payment_info`
--
ALTER TABLE `payment_info`
  ADD PRIMARY KEY (`id_bayar`);

--
-- Indexes for table `pengingat`
--
ALTER TABLE `pengingat`
  ADD PRIMARY KEY (`id_pengingat`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id_login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id_payment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `payment_info`
--
ALTER TABLE `payment_info`
  MODIFY `id_bayar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `pengingat`
--
ALTER TABLE `pengingat`
  MODIFY `id_pengingat` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
