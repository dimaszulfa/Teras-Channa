-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.21-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for teras_channa
CREATE DATABASE IF NOT EXISTS `teras_channa` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `teras_channa`;

-- Dumping structure for table teras_channa.tbl_checkout
CREATE TABLE IF NOT EXISTS `tbl_checkout` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
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
  `date_modified` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table teras_channa.tbl_checkout: ~6 rows (approximately)
/*!40000 ALTER TABLE `tbl_checkout` DISABLE KEYS */;
REPLACE INTO `tbl_checkout` (`id`, `user`, `order_id`, `gross_amount`, `payment_type`, `bank`, `va_number`, `biller_code`, `transaction_status`, `transaction_time`, `pdf_url`, `date_created`, `date_modified`) VALUES
	(42, 'wildan', 1833928202, '747855', 'bank_transfer', 'bca', '01780412086', '', 'settlement', '2022-01-11 19:27:02', 'https://app.sandbox.midtrans.com/snap/v1/transactions/ca19e592-8f29-4241-a3a5-205c628b6cf6/pdf', 1641904023, 1641904023),
	(43, 'tester', 2051660103, '624642', 'bank_transfer', 'bca', '01780284131', '', 'pending', '2022-01-11 20:10:30', 'https://app.sandbox.midtrans.com/snap/v1/transactions/3c9622f3-3634-48e7-a0d3-a1bad1c30c2f/pdf', 1641906631, 1641906631),
	(44, 'wildan', 1668867493, '1550000', 'bank_transfer', 'bca', '01780990078', '', 'settlement', '2022-01-12 00:18:35', 'https://app.sandbox.midtrans.com/snap/v1/transactions/0ca20aeb-28f6-45ee-be50-fa782d3fcd14/pdf', 1641921517, 1641921517),
	(45, 'tester', 1599104626, '1250000', 'echannel', 'mandiri', '818901066996', '70012', 'pending', '2022-01-12 00:25:53', 'https://app.sandbox.midtrans.com/snap/v1/transactions/99fde819-e455-4cbb-8211-72d7f23a6ae3/pdf', 1641921955, 1641921955),
	(46, 'wildan', 1780903686, '1250000', 'cstore', 'alfamart/indomart', '652119901454', '', 'pending', '2022-01-12 00:27:11', 'https://app.sandbox.midtrans.com/snap/v1/transactions/b86a0e6b-6cd3-4edf-a48e-2c5c1fef9431/pdf', 1641922033, 1641922033),
	(47, 'dimaszulfa', 1127501436, '600000', 'bank_transfer', 'bca', '01780307252', '', 'pending', '2022-01-12 00:29:14', 'https://app.sandbox.midtrans.com/snap/v1/transactions/e4c205e9-e1e3-46d7-95ff-996af92786ff/pdf', 1641922156, 1641922156);
/*!40000 ALTER TABLE `tbl_checkout` ENABLE KEYS */;

-- Dumping structure for table teras_channa.tbl_graph
CREATE TABLE IF NOT EXISTS `tbl_graph` (
  `id_ikan` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_ikan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table teras_channa.tbl_graph: ~5 rows (approximately)
/*!40000 ALTER TABLE `tbl_graph` DISABLE KEYS */;
REPLACE INTO `tbl_graph` (`id_ikan`, `nama`, `jumlah`) VALUES
	(29, 'Ikan Channa Maru 30cm', 2),
	(30, 'Ikan Channa Auranti', 1),
	(31, 'Ikan Channa Pulchra 20cm', 1),
	(32, 'Ikan Channa Maru 18 cm', 0),
	(33, 'asd', 0);
/*!40000 ALTER TABLE `tbl_graph` ENABLE KEYS */;

-- Dumping structure for table teras_channa.tbl_ikan
CREATE TABLE IF NOT EXISTS `tbl_ikan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) NOT NULL,
  `famili` varchar(200) NOT NULL,
  `ukuran` int(11) NOT NULL,
  `berat` int(11) NOT NULL,
  `usia` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `gambar` varchar(300) NOT NULL,
  `keterangan` varchar(1000) NOT NULL,
  `asal` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table teras_channa.tbl_ikan: ~4 rows (approximately)
/*!40000 ALTER TABLE `tbl_ikan` DISABLE KEYS */;
REPLACE INTO `tbl_ikan` (`id`, `nama`, `famili`, `ukuran`, `berat`, `usia`, `harga`, `stok`, `gambar`, `keterangan`, `asal`) VALUES
	(29, 'Ikan Channa Maru 30cm', 'Maru', 30, 1, 10, 300000, 38, 'yellow_sentarum.jpg', 'Channa Maru Yellow Sentarum yang diperolehnya dari perairan Danau Sentarum Kalimantan Barat', 'cimaung'),
	(30, 'Ikan Channa Auranti', 'Auranti', 15, 1, 5, 850000, 20, 'auranti1.jpeg', 'Ikan ini merupakan endemik sungai Brahmaputra India, ikan ini lumayan populer diantara para pecinta ikan predator. Channa Auranti terbilang mirip dengan Channa Barca, orang awam akan sulit membedakan dua Channa ini.', 'baleendah'),
	(31, 'Ikan Channa Pulchra 20cm', 'Pulchra', 20, 1, 7, 400000, 30, 'pulchra1.png', 'Channa pulcra atau Peacock snakehead merupakan jenis channa yang baru teridentifikasi pada tahun 2007 oleh R. Britz dari seekor spesimen yang didapatkan dari Sungai Kyentali Chaung di Rakhine Yoma, Myanmar Barat.\r\n\r\nDi tempat asalnya, mereka hidup di aliran sungai yang deras dengan oksigen tinggi dengan suhu yang cukup dingin (subtropical) karena air tempat mereka hidup berasal dari pegunungan Himalaya.', 'chciago'),
	(32, 'Ikan Channa Maru 18 cm', 'Maru', 18, 20, 5, 150000, 50, 'channa1.jpg', 'Ada beberapa jenis ikan channa, jenis yang cukup ramai di pasaran adalah Yellow Sentarum. Jenis ini memiliki warna kuning pekat dan hitam di tubuhnya. Channa Maru Yellow Sentarum ini bisa mencapai ukuran 35 cm. ', 'Sentarum'),
	(33, 'asd', 'asd', 2, 2, 2, 222, 2, 'channa2.jpg', 'asdasdasdasdasdasdadasd', '22');
/*!40000 ALTER TABLE `tbl_ikan` ENABLE KEYS */;

-- Dumping structure for table teras_channa.tbl_info
CREATE TABLE IF NOT EXISTS `tbl_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `waktu_posting` timestamp NULL DEFAULT current_timestamp(),
  `gambar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table teras_channa.tbl_info: ~5 rows (approximately)
/*!40000 ALTER TABLE `tbl_info` DISABLE KEYS */;
REPLACE INTO `tbl_info` (`id`, `nama`, `waktu_posting`, `gambar`) VALUES
	(5, '5 Tips Perawatan Ikan Channa', '2022-01-10 12:48:37', '5tips.png'),
	(6, 'TES', '2022-01-10 15:58:54', 'Green_Abstract_Take_Care_Garden_Tips_Infographic.png'),
	(7, 'SDFSDF', '2022-01-10 15:59:02', 'Green_Abstract_Take_Care_Garden_Tips_Infographic1.png'),
	(8, 'dsfsdf', '2022-01-10 16:09:19', 'Green_Abstract_Take_Care_Garden_Tips_Infographic2.png'),
	(9, 'sdff', '2022-01-10 16:09:25', 'Green_Abstract_Take_Care_Garden_Tips_Infographic3.png');
/*!40000 ALTER TABLE `tbl_info` ENABLE KEYS */;

-- Dumping structure for table teras_channa.tbl_invoice
CREATE TABLE IF NOT EXISTS `tbl_invoice` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(56) DEFAULT NULL,
  `alamat` varchar(225) DEFAULT NULL,
  `tgl_pesan` datetime DEFAULT NULL,
  `transaction_status` varchar(50) DEFAULT NULL,
  `resi` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`order_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2051660104 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table teras_channa.tbl_invoice: ~6 rows (approximately)
/*!40000 ALTER TABLE `tbl_invoice` DISABLE KEYS */;
REPLACE INTO `tbl_invoice` (`order_id`, `nama`, `alamat`, `tgl_pesan`, `transaction_status`, `resi`) VALUES
	(1127501436, 'dimaszulfa', 'Jawa Barat, Bandung, Baleendah, 40375.', '2022-01-12 00:29:16', 'pending', '123231'),
	(1599104626, 'tester', 'kfdskfdskfdksfkdsfkdskfsdkfdksfk', '2022-01-12 00:25:55', 'pending', '678'),
	(1668867493, 'wildan', 'Kab. Bandung, Kec. Banjaran Desa Cimaung Sabelah', '2022-01-12 00:18:37', 'settlement', NULL),
	(1780903686, 'wildan', 'Kab. Bandung, Kec. Banjaran Desa Cimaung Sabelah', '2022-01-12 00:27:13', 'pending', NULL),
	(1833928202, 'wildan', 'Kab. Bandung, Kec. Banjaran Desa Cimaung Sabelah', '2022-01-11 19:27:03', 'settlement', '2'),
	(2051660103, 'tester', 'kfdskfdskfdksfkdsfkdskfsdkfdksfk', '2022-01-11 20:10:31', 'pending', '2');
/*!40000 ALTER TABLE `tbl_invoice` ENABLE KEYS */;

-- Dumping structure for table teras_channa.tbl_pesanan
CREATE TABLE IF NOT EXISTS `tbl_pesanan` (
  `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT,
  `id_invoice` int(11) DEFAULT NULL,
  `id` int(11) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jumlah` int(3) DEFAULT NULL,
  `harga` int(10) DEFAULT NULL,
  `pilihan` text DEFAULT NULL,
  PRIMARY KEY (`id_pemesanan`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table teras_channa.tbl_pesanan: ~12 rows (approximately)
/*!40000 ALTER TABLE `tbl_pesanan` DISABLE KEYS */;
REPLACE INTO `tbl_pesanan` (`id_pemesanan`, `id_invoice`, `id`, `nama`, `jumlah`, `harga`, `pilihan`) VALUES
	(47, 1833928202, 14, 'sdf', 2, 312321, NULL),
	(48, 1833928202, 25, 'fdsfsdfdsf', 1, 123213, NULL),
	(49, 2051660103, 14, 'sdf', 1, 312321, NULL),
	(50, 2051660103, 13, 'asdasd', 1, 312321, NULL),
	(51, 1668867493, 29, 'Ikan Channa Maru 30cm', 1, 300000, NULL),
	(52, 1668867493, 30, 'Ikan Channa Auranti', 1, 850000, NULL),
	(53, 1668867493, 31, 'Ikan Channa Pulchra 20cm', 1, 400000, NULL),
	(54, 1599104626, 30, 'Ikan Channa Auranti', 1, 850000, NULL),
	(55, 1599104626, 31, 'Ikan Channa Pulchra 20cm', 1, 400000, NULL),
	(56, 1780903686, 30, 'Ikan Channa Auranti', 1, 850000, NULL),
	(57, 1780903686, 31, 'Ikan Channa Pulchra 20cm', 1, 400000, NULL),
	(58, 1127501436, 29, 'Ikan Channa Maru 30cm', 2, 300000, NULL);
/*!40000 ALTER TABLE `tbl_pesanan` ENABLE KEYS */;

-- Dumping structure for table teras_channa.tbl_user
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `fullname` varchar(50) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) DEFAULT NULL,
  `usertype` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `nohp` varchar(50) DEFAULT NULL,
  `resetpass` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table teras_channa.tbl_user: ~8 rows (approximately)
/*!40000 ALTER TABLE `tbl_user` DISABLE KEYS */;
REPLACE INTO `tbl_user` (`fullname`, `username`, `password`, `usertype`, `email`, `address`, `nohp`, `resetpass`) VALUES
	('Dimas Zulfa Santana', 'dimaszulfa', '$2y$10$aHzNS4E6WHB/LQaBVEFFBOjuiuTwsJh4iiZS3w4ZivlR5TcViKXiS', 'pembeli', 'dimaszulfa0@gmail.com', 'Jawa Barat, Bandung, Baleendah, 40375.', '089662988939', NULL),
	('James Bond', 'jamesb', '1111', 'pembeli', 'james02@hotmail.com', 'Cikampek', '082119934561', NULL),
	('jester thomas', 'jesterthomas', '$2y$10$G8.NsQZTuua7VgRv1GaIlei/mDZVn3Z6YP1tUDuRj9B6gAMmT4/uu', 'pembeli', 'jest005@gmail.com', 'chicago kecamatan kidul desa gundul pacul rt 05 ew 005', '082112345678', NULL),
	('Nataka Grasia', 'nataka', '$2y$10$jSRl0hJpzqoc5H1Kor6cI.D4YeAztk1t2X/.v0HgzmlgQkUjPsBe2', 'pembeli', 'NatakaG@yaohoo.com', 'Kota Jakarta Selatan Jl. Sejati Blok 532', '082344567890', NULL),
	('satira blamtam', 'satria', '12345678', 'pembeli', 'saatirablam@hotmail.com', 'Kab. Bandung, Kec. Banjaran Desa banjaran', '085155679012', NULL),
	('wildan kusnaedi', 'stigma', '$2y$10$MVlenE6eX8M/MF9y.pvOyekwwGxGWFZZLojW0fgfWzXDH8LQVJf6W', 'admin', 'wildank42@gmail.com', 'Cimaung', '085998541670', 'OR2wZX0cYBq6ogT1j9AS4rxIntVGLp7vDQUmsdFKkflHNhayMW'),
	('tester', 'tester', '$2y$10$Zzm.CVOjjWVFsXP4vcc06.0PRXfhM0.AncwZ73flnbExBqMC3b8qK', 'pembeli', 'tester@gmail.com', 'kfdskfdskfdksfkdsfkdskfsdkfdksfk', '088992833424', NULL),
	('wildan kusnaedi', 'wildan', '$2y$10$Zzm.CVOjjWVFsXP4vcc06.0PRXfhM0.AncwZ73flnbExBqMC3b8qK', 'admin', 'wildank40@gmail.com', 'Kab. Bandung, Kec. Banjaran Desa Cimaung Sabelah', '082119901454', 'DCoe5vBgSrkmVxR0YZy3Jnb2O6iXMULa78fIA4KPhQ9GjcE1sd');
/*!40000 ALTER TABLE `tbl_user` ENABLE KEYS */;

-- Dumping structure for trigger teras_channa.graph_ikan
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO';
DELIMITER //
CREATE TRIGGER `graph_ikan` AFTER INSERT ON `tbl_ikan` FOR EACH ROW BEGIN
INSERT INTO `teras_channa`.`tbl_graph` (`id_ikan`,`nama`, `jumlah`) VALUES (NEW.id, NEW.nama, 0);
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Dumping structure for trigger teras_channa.pesanan_penjualan
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO';
DELIMITER //
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `tbl_pesanan` FOR EACH ROW BEGIN
	UPDATE tbl_ikan SET stok = stok-NEW.jumlah
	WHERE id = NEW.id;
	UPDATE tbl_graph SET jumlah = jumlah+NEW.jumlah
	WHERE id_ikan = NEW.id;
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
