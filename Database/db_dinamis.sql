-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2022 at 04:45 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `db_dinamis`
--

-- --------------------------------------------------------

--
-- Table structure for table `film_ku`
--

CREATE TABLE `film_ku` (
  `id` int(11) NOT NULL,
  `namafilm` varchar(255) NOT NULL,
  `produser` varchar(255) NOT NULL,
  `genre` text NOT NULL,
  `tahun_rilis` varchar(255) NOT NULL,
  `sinopsis` text NOT NULL,
  `tayangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `film_ku`
--

INSERT INTO `film_ku` (`id`, `namafilm`, `produser`, `genre`, `tahun_rilis`, `sinopsis`, `tayangan`) VALUES
(107, 'Dr. Strange', 'Marvel', '[\"Comedy\",\"Fantasy\",\"Slice\"]', '2022', 'Dr. Strange melawan monster\r\n', 'SU'),
(108, 'Remake : Bucin', 'Last Production', '[\"Comedy\"]', '2019', 'Candra liaow di tolak wanita', 'SU'),
(109, 'Ben 10', 'Reservers', '[\"Comedy\",\"Fantasy\"]', '2016', 'Ben mendapatkan kekuatan untuk berubah menjadi alien', 'SU'),
(110, 'Sepatu Super', 'MC Production', '[\"Comedy\",\"Fantasy\"]', '2015', 'Ujang dan udin mendapatkan sepatu super saat melakukan pemungutan sampah', 'A'),
(111, 'Captain marvel', 'Marvel', '[\"Comedy\",\"Fantasy\"]', '2020', 'Kekuatan luar biasa yang berasal dari luar bumi datang untuk menyelamatkan bumi', 'SU'),
(112, 'Sadako', 'Japanese Production', '[\"Horror\"]', '2015', 'Hantu wanita yang keluar dari Televisi', 'SU'),
(113, 'KKN', 'Last Production', '[\"Horror\",\"Comedy\",\"Fantasy\"]', '2020', 'Anak anak perkuliahan yang melakukan KKN dan diserang oleh makhluk ghaib', 'SU'),
(114, 'Spiderman Home Coming', 'Marvel', '[\"Fantasy\"]', '2021', 'Identitas peter ketahuan sebagai spiderman', 'SU'),
(115, 'Hulk', 'Marvel', '[\"Comedy\",\"Fantasy\"]', '2017', 'Dr. Bruce terkena cahaya gamma dan berevolusi', 'SU'),
(116, 'Dead Pool', 'Marvel', '[\"Horror\",\"Comedy\",\"Fantasy\"]', '2019', 'Deadpool menyerang sekelompok penjahat dengan kedua tangannya sendiri ', 'SU'),
(117, 'Gatot Kaca', '100 Productive', '[\"Comedy\",\"Fantasy\"]', '2022', 'Menggatot adalah sebuah kata-kata dari gatot kaca modern', 'SU');

-- --------------------------------------------------------

--
-- Table structure for table `info_log`
--

CREATE TABLE `info_log` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_statusakun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info_log`
--

INSERT INTO `info_log` (`id`, `username`, `password`, `id_statusakun`) VALUES
(1, 'renal', '123', 1),
(2, 'naya', '123', 2),
(37, 'ari', '234', 2);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `tanggal_tayang` varchar(255) NOT NULL,
  `jam_tayang` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `id_op` int(11) NOT NULL,
  `id_teater` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `tanggal_tayang`, `jam_tayang`, `id`, `id_op`, `id_teater`) VALUES
(20, '2022-05-31', '06:54', 107, 8, 6),
(21, '2022-05-31', '09:58', 108, 17, 14),
(22, '2022-05-31', '11:00', 109, 9, 8),
(23, '2022-05-31', '00:00', 110, 8, 8),
(24, '2022-05-31', '13:20', 111, 8, 6),
(25, '2022-06-01', '22:00', 111, 15, 13),
(26, '2022-06-01', '19:00', 112, 8, 6),
(27, '2022-06-02', '11:00', 113, 16, 15),
(28, '2022-06-03', '14:02', 113, 15, 7),
(29, '2022-06-04', '06:03', 115, 9, 10);

-- --------------------------------------------------------

--
-- Table structure for table `operator`
--

CREATE TABLE `operator` (
  `id_op` int(11) NOT NULL,
  `nama_op` varchar(255) NOT NULL,
  `tugas_op` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `operator`
--

INSERT INTO `operator` (`id_op`, `nama_op`, `tugas_op`) VALUES
(8, 'Renal', 'Stand ticket'),
(9, 'Azka', 'Stand Popcorn'),
(10, 'Ari', 'Stand minuman'),
(11, 'Bulan', 'Stand ticket premier'),
(12, 'Vito', 'Stand confirm ticket'),
(13, 'Robin', 'Stand penyambut tamu'),
(14, 'Rita', 'Stand pengawasan'),
(15, 'Wahyu', 'Stand pembersih bioskop'),
(16, 'Maidi', 'Operator pemutar film'),
(17, 'Bima', 'Operator pencahayaan');

-- --------------------------------------------------------

--
-- Table structure for table `status_log`
--

CREATE TABLE `status_log` (
  `id` int(11) NOT NULL,
  `status_akun` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status_log`
--

INSERT INTO `status_log` (`id`, `status_akun`) VALUES
(1, 'admin'),
(2, 'guest');

-- --------------------------------------------------------

--
-- Table structure for table `teater`
--

CREATE TABLE `teater` (
  `id_teater` int(11) NOT NULL,
  `nama_teater` varchar(255) NOT NULL,
  `sound_teater` varchar(255) NOT NULL,
  `tingkat_teater` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teater`
--

INSERT INTO `teater` (`id_teater`, `nama_teater`, `sound_teater`, `tingkat_teater`) VALUES
(6, 'Studio 1', 'Dolby', '2 Tingkat'),
(7, 'Studio 2', 'Sony', '1 Tingkat'),
(8, 'Studio 3', 'Dolby', '2 Tingkat'),
(9, 'Studio 4', 'Dolby : Spesial', '2 Tingkat'),
(10, 'Studio 5', 'Sony', '2 Tingkat'),
(11, 'Studio Premier 1', 'Dolby : Pro Spesial', '1 Tingkat'),
(12, 'Studio Premier 2', 'Dolby : Pro Spesial', '2 Tingkat'),
(13, 'Studio 6', 'Sony/Dolby', '2 Tingkat'),
(14, 'Studio 7', 'Dolby', '2 Tingkat'),
(15, 'Studio 8', 'Apple Sound', '3 Tingkat');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `via_transaksi` varchar(255) NOT NULL,
  `no_seat` varchar(255) NOT NULL,
  `id_jadwal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `via_transaksi`, `no_seat`, `id_jadwal`) VALUES
(3, 'online', 'A1', 20),
(4, 'online', 'B2', 21),
(5, 'offline', 'C3', 22),
(6, 'online', 'F4', 23),
(7, 'online', 'G5', 24),
(8, 'offline', 'H6', 26),
(9, 'offline', 'I7', 26),
(10, 'online', 'J8', 27),
(11, 'offline', 'K9', 28),
(12, 'offline', 'L10', 29);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `film_ku`
--
ALTER TABLE `film_ku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info_log`
--
ALTER TABLE `info_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_statusakun` (`id_statusakun`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id` (`id`),
  ADD KEY `id_operator` (`id_op`),
  ADD KEY `id_op` (`id_op`),
  ADD KEY `id_teater` (`id_teater`);

--
-- Indexes for table `operator`
--
ALTER TABLE `operator`
  ADD PRIMARY KEY (`id_op`);

--
-- Indexes for table `status_log`
--
ALTER TABLE `status_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teater`
--
ALTER TABLE `teater`
  ADD PRIMARY KEY (`id_teater`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_jadwal` (`id_jadwal`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `film_ku`
--
ALTER TABLE `film_ku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `info_log`
--
ALTER TABLE `info_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `operator`
--
ALTER TABLE `operator`
  MODIFY `id_op` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `status_log`
--
ALTER TABLE `status_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teater`
--
ALTER TABLE `teater`
  MODIFY `id_teater` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `info_log`
--
ALTER TABLE `info_log`
  ADD CONSTRAINT `info_log_ibfk_1` FOREIGN KEY (`id_statusakun`) REFERENCES `status_log` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_1` FOREIGN KEY (`id`) REFERENCES `film_ku` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwal_ibfk_2` FOREIGN KEY (`id_op`) REFERENCES `operator` (`id_op`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwal_ibfk_3` FOREIGN KEY (`id_teater`) REFERENCES `teater` (`id_teater`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwal` (`id_jadwal`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;