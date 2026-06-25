-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 25, 2026 at 01:43 PM
-- Server version: 12.3.2-MariaDB
-- PHP Version: 8.5.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rental_pbo`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_kendaraan`
--

CREATE TABLE `tabel_kendaraan` (
  `id_kendaraan` int(11) NOT NULL,
  `no_plat` varchar(15) NOT NULL,
  `merk_model` varchar(100) NOT NULL,
  `hari_sewa` int(11) NOT NULL,
  `tarif_per_hari` decimal(10,2) NOT NULL,
  `jenis_kendaraan` enum('Mobil','Motor','SepedaListrik') NOT NULL,
  `kapasitas_penumpang` int(11) DEFAULT NULL,
  `asuransi_id` varchar(50) DEFAULT NULL,
  `kapasitas_cc` int(11) DEFAULT NULL,
  `termasuk_helm_box` tinyint(1) DEFAULT NULL,
  `daya_baterai_watt` int(11) DEFAULT NULL,
  `kapasitas_bagasi_liter` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tabel_kendaraan`
--

INSERT INTO `tabel_kendaraan` (`id_kendaraan`, `no_plat`, `merk_model`, `hari_sewa`, `tarif_per_hari`, `jenis_kendaraan`, `kapasitas_penumpang`, `asuransi_id`, `kapasitas_cc`, `termasuk_helm_box`, `daya_baterai_watt`, `kapasitas_bagasi_liter`) VALUES
(1, 'B 1234 ABC', 'Toyota Avanza', 3, 350000.00, 'Mobil', 7, 'ASR-MBL-01', NULL, NULL, NULL, NULL),
(2, 'B 5678 DEF', 'Honda Brio', 2, 300000.00, 'Mobil', 5, 'ASR-MBL-02', NULL, NULL, NULL, NULL),
(3, 'D 9012 GHI', 'Mitsubishi Xpander', 5, 400000.00, 'Mobil', 7, 'ASR-MBL-03', NULL, NULL, NULL, NULL),
(4, 'L 3456 JKL', 'Toyota Innova Zenix', 4, 650000.00, 'Mobil', 7, 'ASR-MBL-04', NULL, NULL, NULL, NULL),
(5, 'F 7890 MNO', 'Suzuki Ertiga', 1, 350000.00, 'Mobil', 7, 'ASR-MBL-05', NULL, NULL, NULL, NULL),
(6, 'B 2345 PQR', 'Hyundai Stargazer', 3, 420000.00, 'Mobil', 7, 'ASR-MBL-06', NULL, NULL, NULL, NULL),
(7, 'DK 6789 STU', 'Honda HR-V', 2, 500000.00, 'Mobil', 5, 'ASR-MBL-07', NULL, NULL, NULL, NULL),
(8, 'B 3210 VWX', 'Honda Vario 160', 2, 80000.00, 'Motor', NULL, NULL, 160, 1, NULL, NULL),
(9, 'D 6543 YZA', 'Yamaha NMAX', 4, 120000.00, 'Motor', NULL, NULL, 155, 1, NULL, NULL),
(10, 'F 9876 BC', 'Honda Beat', 1, 60000.00, 'Motor', NULL, NULL, 110, 1, NULL, NULL),
(11, 'L 2109 DE', 'Yamaha Aerox', 3, 110000.00, 'Motor', NULL, NULL, 155, 1, NULL, NULL),
(12, 'AB 5432 FG', 'Vespa Sprint', 2, 150000.00, 'Motor', NULL, NULL, 150, 0, NULL, NULL),
(13, 'B 8765 HI', 'Honda PCX 160', 5, 130000.00, 'Motor', NULL, NULL, 160, 1, NULL, NULL),
(14, 'D 1092 JK', 'Kawasaki Ninja 250', 2, 250000.00, 'Motor', NULL, NULL, 250, 0, NULL, NULL),
(15, 'SEDA-01', 'Uwinfly Dragonfly', 1, 40000.00, 'SepedaListrik', NULL, NULL, NULL, NULL, 500, 10),
(16, 'SEDA-02', 'Exotic Groza', 2, 45000.00, 'SepedaListrik', NULL, NULL, NULL, NULL, 600, 12),
(17, 'SEDA-03', 'Goda 145 Raptor', 1, 50000.00, 'SepedaListrik', NULL, NULL, NULL, NULL, 500, 15),
(18, 'SEDA-04', 'Pacific Syncros', 3, 45000.00, 'SepedaListrik', NULL, NULL, NULL, NULL, 650, 12),
(19, 'SEDA-05', 'Selis Murai', 2, 55000.00, 'SepedaListrik', NULL, NULL, NULL, NULL, 800, 20),
(20, 'SEDA-06', 'Volta 100', 1, 35000.00, 'SepedaListrik', NULL, NULL, NULL, NULL, 350, 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_kendaraan`
--
ALTER TABLE `tabel_kendaraan`
  ADD PRIMARY KEY (`id_kendaraan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_kendaraan`
--
ALTER TABLE `tabel_kendaraan`
  MODIFY `id_kendaraan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
