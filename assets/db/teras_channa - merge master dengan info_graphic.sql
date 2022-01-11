-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2022 at 06:16 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teras_channa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_checkout`
--

CREATE TABLE `tbl_checkout` (
  `id` bigint(20) NOT NULL,
  `user` varchar(50) NOT NULL DEFAULT '0',
  `order_id` bigint(20) NOT NULL DEFAULT 0,
  `gross_amount` varchar(120) NOT NULL DEFAULT '0',
  `payment_type` varchar(120) NOT NULL DEFAULT '0',
  `bank` varchar(123) NOT NULL DEFAULT '0',
  `va_number` varchar(123) NOT NULL DEFAULT '0',
  `biller_code` varchar(123) NOT NULL DEFAULT '0',
  `transaction_status` varchar(123) NOT NULL DEFAULT '0',
  `transaction_time` varchar(123) NOT NULL DEFAULT '0',
  `pdf_url` varchar(256) NOT NULL DEFAULT '0',
  `date_created` int(11) NOT NULL DEFAULT 0,
  `date_modified` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_checkout`
--

INSERT INTO `tbl_checkout` (`id`, `user`, `order_id`, `gross_amount`, `payment_type`, `bank`, `va_number`, `biller_code`, `transaction_status`, `transaction_time`, `pdf_url`, `date_created`, `date_modified`) VALUES
(42, 'wildan', 1833928202, '747855', 'bank_transfer', 'bca', '01780412086', '', 'settlement', '2022-01-11 19:27:02', 'https://app.sandbox.midtrans.com/snap/v1/transactions/ca19e592-8f29-4241-a3a5-205c628b6cf6/pdf', 1641904023, 1641904023),
(43, 'tester', 2051660103, '624642', 'bank_transfer', 'bca', '01780284131', '', 'pending', '2022-01-11 20:10:30', 'https://app.sandbox.midtrans.com/snap/v1/transactions/3c9622f3-3634-48e7-a0d3-a1bad1c30c2f/pdf', 1641906631, 1641906631);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_graph`
--

CREATE TABLE `tbl_graph` (
  `id_ikan` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_graph`
--

INSERT INTO `tbl_graph` (`id_ikan`, `nama`, `jumlah`) VALUES
(12, 'Aurantirytrty', 25),
(18, 'jdfgioq', 10),
(29, 'Ikan Channa Maru 30cm', 0),
(30, 'Ikan Channa Auranti', 0),
(31, 'Ikan Channa Pulchra 20cm', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ikan`
--

CREATE TABLE `tbl_ikan` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `famili` varchar(200) NOT NULL,
  `ukuran` int(11) NOT NULL,
  `berat` int(11) NOT NULL,
  `usia` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `gambar` varchar(300) NOT NULL,
  `keterangan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_ikan`
--

INSERT INTO `tbl_ikan` (`id`, `nama`, `famili`, `ukuran`, `berat`, `usia`, `harga`, `stok`, `gambar`, `keterangan`) VALUES
(29, 'Ikan Channa Maru 30cm', 'Maru', 30, 1, 10, 300000, 3, 'yellow_sentarum.jpg', 'Channa Maru Yellow Sentarum yang diperolehnya dari perairan Danau Sentarum Kalimantan Barat'),
(30, 'Ikan Channa Auranti', 'Auranti', 15, 1, 5, 850000, 2, 'auranti1.jpeg', 'Ikan ini merupakan endemik sungai Brahmaputra India, ikan ini lumayan populer diantara para pecinta ikan predator. Channa Auranti terbilang mirip dengan Channa Barca, orang awam akan sulit membedakan dua Channa ini.'),
(31, 'Ikan Channa Pulchra 20cm', 'Pulchra', 20, 1, 7, 400000, 1, 'pulchra1.png', 'Channa pulcra atau Peacock snakehead merupakan jenis channa yang baru teridentifikasi pada tahun 2007 oleh R. Britz dari seekor spesimen yang didapatkan dari Sungai Kyentali Chaung di Rakhine Yoma, Myanmar Barat.\r\n\r\nDi tempat asalnya, mereka hidup di aliran sungai yang deras dengan oksigen tinggi dengan suhu yang cukup dingin (subtropical) karena air tempat mereka hidup berasal dari pegunungan Himalaya.');

--
-- Triggers `tbl_ikan`
--
DELIMITER $$
CREATE TRIGGER `graph_ikan` AFTER INSERT ON `tbl_ikan` FOR EACH ROW BEGIN
INSERT INTO `teras_channa`.`tbl_graph` (`id_ikan`,`nama`, `jumlah`) VALUES (NEW.id, NEW.nama, 0);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_info`
--

CREATE TABLE `tbl_info` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `waktu_posting` timestamp NULL DEFAULT current_timestamp(),
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_info`
--

INSERT INTO `tbl_info` (`id`, `nama`, `waktu_posting`, `gambar`) VALUES
(5, '5 Tips Perawatan Ikan Channa', '2022-01-10 05:48:37', '5tips.png'),
(6, 'TES', '2022-01-10 08:58:54', 'Green_Abstract_Take_Care_Garden_Tips_Infographic.png'),
(7, 'SDFSDF', '2022-01-10 08:59:02', 'Green_Abstract_Take_Care_Garden_Tips_Infographic1.png'),
(8, 'dsfsdf', '2022-01-10 09:09:19', 'Green_Abstract_Take_Care_Garden_Tips_Infographic2.png'),
(9, 'sdff', '2022-01-10 09:09:25', 'Green_Abstract_Take_Care_Garden_Tips_Infographic3.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_invoice`
--

CREATE TABLE `tbl_invoice` (
  `order_id` int(11) NOT NULL,
  `nama` varchar(56) DEFAULT NULL,
  `alamat` varchar(225) DEFAULT NULL,
  `tgl_pesan` datetime DEFAULT NULL,
  `transaction_status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_invoice`
--

INSERT INTO `tbl_invoice` (`order_id`, `nama`, `alamat`, `tgl_pesan`, `transaction_status`) VALUES
(1833928202, 'wildan', 'Kab. Bandung, Kec. Banjaran Desa Cimaung Sabelah', '2022-01-11 19:27:03', 'settlement'),
(2051660103, 'tester', 'kfdskfdskfdksfkdsfkdskfsdkfdksfk', '2022-01-11 20:10:31', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pesanan`
--

CREATE TABLE `tbl_pesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `id_invoice` int(11) DEFAULT NULL,
  `id` int(11) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jumlah` int(3) DEFAULT NULL,
  `harga` int(10) DEFAULT NULL,
  `pilihan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pesanan`
--

INSERT INTO `tbl_pesanan` (`id_pemesanan`, `id_invoice`, `id`, `nama`, `jumlah`, `harga`, `pilihan`) VALUES
(47, 1833928202, 14, 'sdf', 2, 312321, NULL),
(48, 1833928202, 25, 'fdsfsdfdsf', 1, 123213, NULL),
(49, 2051660103, 14, 'sdf', 1, 312321, NULL),
(50, 2051660103, 13, 'asdasd', 1, 312321, NULL);

--
-- Triggers `tbl_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `tbl_pesanan` FOR EACH ROW BEGIN
	UPDATE tbl_ikan SET stok = stok-NEW.jumlah
	WHERE id = NEW.id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `fullname` varchar(50) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) DEFAULT NULL,
  `usertype` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `nohp` varchar(50) DEFAULT NULL,
  `resetpass` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`fullname`, `username`, `password`, `usertype`, `email`, `address`, `nohp`, `resetpass`) VALUES
('James Bond', 'jamesb', '1111', 'pembeli', 'james02@hotmail.com', 'Cikampek', '082119934561', NULL),
('jester thomas', 'jesterthomas', '$2y$10$G8.NsQZTuua7VgRv1GaIlei/mDZVn3Z6YP1tUDuRj9B6gAMmT4/uu', 'pembeli', 'jest005@gmail.com', 'chicago kecamatan kidul desa gundul pacul rt 05 ew 005', '082112345678', NULL),
('Nataka Grasia', 'nataka', '$2y$10$jSRl0hJpzqoc5H1Kor6cI.D4YeAztk1t2X/.v0HgzmlgQkUjPsBe2', 'pembeli', 'NatakaG@yaohoo.com', 'Kota Jakarta Selatan Jl. Sejati Blok 532', '082344567890', NULL),
('satira blamtam', 'satria', '12345678', 'pembeli', 'saatirablam@hotmail.com', 'Kab. Bandung, Kec. Banjaran Desa banjaran', '085155679012', NULL),
('wildan kusnaedi', 'stigma', '$2y$10$MVlenE6eX8M/MF9y.pvOyekwwGxGWFZZLojW0fgfWzXDH8LQVJf6W', 'admin', 'wildank42@gmail.com', 'Cimaung', '085998541670', 'OR2wZX0cYBq6ogT1j9AS4rxIntVGLp7vDQUmsdFKkflHNhayMW'),
('tester', 'tester', '$2y$10$Zzm.CVOjjWVFsXP4vcc06.0PRXfhM0.AncwZ73flnbExBqMC3b8qK', 'pembeli', 'tester@gmail.com', 'kfdskfdskfdksfkdsfkdskfsdkfdksfk', '088992833424', NULL),
('wildan kusnaedi', 'wildan', '$2y$10$Zzm.CVOjjWVFsXP4vcc06.0PRXfhM0.AncwZ73flnbExBqMC3b8qK', 'admin', 'wildank40@gmail.com', 'Kab. Bandung, Kec. Banjaran Desa Cimaung Sabelah', '082119901454', 'DCoe5vBgSrkmVxR0YZy3Jnb2O6iXMULa78fIA4KPhQ9GjcE1sd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_checkout`
--
ALTER TABLE `tbl_checkout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_graph`
--
ALTER TABLE `tbl_graph`
  ADD PRIMARY KEY (`id_ikan`);

--
-- Indexes for table `tbl_ikan`
--
ALTER TABLE `tbl_ikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_info`
--
ALTER TABLE `tbl_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  ADD PRIMARY KEY (`order_id`) USING BTREE;

--
-- Indexes for table `tbl_pesanan`
--
ALTER TABLE `tbl_pesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_checkout`
--
ALTER TABLE `tbl_checkout`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tbl_ikan`
--
ALTER TABLE `tbl_ikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_info`
--
ALTER TABLE `tbl_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2051660104;

--
-- AUTO_INCREMENT for table `tbl_pesanan`
--
ALTER TABLE `tbl_pesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
