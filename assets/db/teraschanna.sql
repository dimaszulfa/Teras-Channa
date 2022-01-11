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
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table teras_channa.tbl_checkout: ~25 rows (approximately)
/*!40000 ALTER TABLE `tbl_checkout` DISABLE KEYS */;
REPLACE INTO `tbl_checkout` (`id`, `user`, `order_id`, `gross_amount`, `payment_type`, `bank`, `va_number`, `biller_code`, `transaction_status`, `transaction_time`, `pdf_url`, `date_created`, `date_modified`) VALUES
	(1, '0', 621737195, '684642', 'bank_transfer', 'bca', '01780576761', '', 'expire', '2021-12-12 22:27:52', 'https://app.sandbox.midtrans.com/snap/v1/transactions/a00cf60f-416b-448e-b96d-ef9a54926c69/pdf', 1639322873, 1639450408),
	(2, '0', 1318201693, '684642', 'bank_transfer', 'bca', '01780814901', '', 'expire', '2021-12-12 23:07:16', 'https://app.sandbox.midtrans.com/snap/v1/transactions/8ade0a5f-3028-43ee-9627-ac333896aa17/pdf', 1639325238, 1639449379),
	(3, '0', 1446355864, '684642', 'bank_transfer', 'bca', '01780503037', '', 'pending', '2021-12-12 23:18:54', 'https://app.sandbox.midtrans.com/snap/v1/transactions/fcc1d105-7de9-4146-8634-03c9fc47d849/pdf', 1639325935, 1639325935),
	(4, '0', 1446355864, '684642', 'bank_transfer', 'bca', '01780503037', '', 'pending', '2021-12-12 23:18:54', 'https://app.sandbox.midtrans.com/snap/v1/transactions/fcc1d105-7de9-4146-8634-03c9fc47d849/pdf', 1639364728, 1639364728),
	(5, '0', 519090872, '1249284', 'bank_transfer', 'bca', '01780091698', '', 'settlement', '2021-12-13 11:58:06', 'https://app.sandbox.midtrans.com/snap/v1/transactions/3f5154db-2a0e-4930-a75d-4c7016db9064/pdf', 1639371491, 1639449088),
	(6, '0', 1984588783, '1249284', 'bank_transfer', 'bca', '01780604682', '', 'pending', '2021-12-13 12:03:03', 'https://app.sandbox.midtrans.com/snap/v1/transactions/8f85a4b2-fece-4bbc-838a-56b3288556aa/pdf', 1639371790, 1639449106),
	(7, '0', 2138428738, '332321', 'bank_transfer', 'permata', '017001573331347', '', 'pending', '2021-12-14 07:42:53', 'https://app.sandbox.midtrans.com/snap/v1/transactions/54517a17-4bd9-4119-87d8-b4a98f35881c/pdf', 1639442576, 1639442576),
	(8, '0', 893020937, '332321', 'echannel', 'mandiri', '279953308689', '', 'pending', '2021-12-14 07:44:45', 'https://app.sandbox.midtrans.com/snap/v1/transactions/63afbfe4-8aad-4ebf-b6b1-82c531135a86/pdf', 1639442687, 1639442687),
	(9, '0', 1600066552, '312321', 'cstore', 'alfamart/indomart', '1433603453370059', '', 'pending', '2021-12-14 07:46:01', 'https://app.sandbox.midtrans.com/snap/v1/transactions/6dbfc8a5-02e0-4a50-b7a3-4c659a527a15/pdf', 1639442762, 1639442762),
	(10, '0', 1021573714, '332321', 'cstore', 'alfamart/indomart', '307606576065', '', 'pending', '2021-12-14 07:46:27', 'https://app.sandbox.midtrans.com/snap/v1/transactions/01b674a2-611b-4c55-8d68-400e8bf2b173/pdf', 1639442791, 1639442791),
	(11, '0', 2114939765, '624642', 'echannel', 'mandiri', '29548829912', '', 'pending', '2021-12-14 09:43:42', 'https://app.sandbox.midtrans.com/snap/v1/transactions/3b127b7d-bb0d-4f3a-86c0-9f505f157b52/pdf', 1639449823, 1639449823),
	(12, 'jamesb', 893831348, '20000', 'echannel', 'mandiri', '210601245758', '70012', 'settlement', '2021-12-14 09:45:41', 'https://app.sandbox.midtrans.com/snap/v1/transactions/0274311d-6a48-4518-9eb6-726f947e7565/pdf', 1639449942, 1639450002),
	(13, '0', 1771904993, '624642', 'bank_transfer', 'bca', '01780645904', '', 'settlement', '2021-12-14 18:07:20', 'https://app.sandbox.midtrans.com/snap/v1/transactions/0f11764a-46a6-409d-85f2-5cb448cc66ce/pdf', 1639480045, 1639480101),
	(14, '0', 608522572, '332321', 'cstore', 'alfamart/indomart', '696453364533', '', 'pending', '2021-12-24 03:37:59', 'https://app.sandbox.midtrans.com/snap/v1/transactions/1f7fbe4b-55e6-4e1d-93f8-55762d08ba93/pdf', 1640291882, 1640291882),
	(15, '0', 447663939, '332321', 'bank_transfer', 'bca', '01780349504', '', 'pending', '2021-12-29 19:28:57', 'https://app.sandbox.midtrans.com/snap/v1/transactions/c4c58198-115f-40a0-bd77-83211d4fbe5c/pdf', 1640780939, 1640780939),
	(16, '0', 670806231, '312321', 'cstore', 'alfamart/indomart', '712119901454', '', 'pending', '2021-12-29 19:34:50', 'https://app.sandbox.midtrans.com/snap/v1/transactions/233145ec-63e1-47c3-983e-747e5558c5dc/pdf', 1640781293, 1640781293),
	(17, '0', 442680572, '624642', 'cstore', 'alfamart/indomart', '862119901454', '', 'pending', '2021-12-29 21:39:56', 'https://app.sandbox.midtrans.com/snap/v1/transactions/3c65b61a-3887-4cbc-9f5e-2f95510e59d7/pdf', 1640788799, 1640788799),
	(18, 'tester', 1747023962, '644642', 'cstore', 'alfamart/indomart', '538992833424', '', 'settlement', '2021-12-30 14:22:07', 'https://app.sandbox.midtrans.com/snap/v1/transactions/ad63f28b-aa18-44ac-823a-40980d8fa282/pdf', 1640848938, 1640849040),
	(19, '0', 1087992516, '20000', 'cstore', 'alfamart/indomart', '098992833424', '', 'pending', '2022-01-01 15:32:52', 'https://app.sandbox.midtrans.com/snap/v1/transactions/02d5cedf-ad66-4e54-9883-65bd3b82b48c/pdf', 1641025940, 1641025940),
	(20, '0', 157132303, '312321', 'cstore', 'alfamart/indomart', '108992833424', '', 'pending', '2022-01-01 15:38:25', 'https://app.sandbox.midtrans.com/snap/v1/transactions/f33e8dab-c3ba-414c-9d76-d60fce8e6f43/pdf', 1641026274, 1641026274),
	(21, '0', 315113431, '312321', 'cstore', 'alfamart/indomart', '1433890384586880', '', 'pending', '2022-01-01 15:41:10', 'https://app.sandbox.midtrans.com/snap/v1/transactions/c180480f-e11c-4367-8244-d7d5c2c4631d/pdf', 1641026439, 1641026439),
	(22, '0', 861480500, '312321', 'bank_transfer', 'bca', '01780137448', '', 'pending', '2022-01-01 15:43:49', 'https://app.sandbox.midtrans.com/snap/v1/transactions/c4c1d75d-3eb5-4b45-a4d2-c70505f795bc/pdf', 1641026598, 1641026598),
	(23, 'jesterthomas', 1060410233, '624642', 'cstore', 'alfamart/indomart', '138992833424', '', 'settlement', '2022-01-01 15:46:38', 'https://app.sandbox.midtrans.com/snap/v1/transactions/5fe563bf-26e9-4fa4-9c82-4dd1157d0294/pdf', 1641026766, 1641027383),
	(24, 'jesterthomas', 2034331643, '624642', 'bank_transfer', 'bni', '9880178074124116', '', 'pending', '2022-01-08 10:06:25', 'https://app.sandbox.midtrans.com/snap/v1/transactions/e6b8ce9d-7a3b-4aa8-b6ea-919288e6cdb5/pdf', 1641611182, 1641611182),
	(25, 'jesterthomas', 1012202989, '644642', 'cstore', 'alfamart/indomart', '902112345678', '', 'pending', '2022-01-08 11:03:47', 'https://app.sandbox.midtrans.com/snap/v1/transactions/2944e456-ecfb-425a-9556-c99cfe4d2724/pdf', 1641614623, 1641614623);
/*!40000 ALTER TABLE `tbl_checkout` ENABLE KEYS */;

-- Dumping structure for table teras_channa.tbl_graph
CREATE TABLE IF NOT EXISTS `tbl_graph` (
  `id_ikan` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_ikan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table teras_channa.tbl_graph: ~2 rows (approximately)
/*!40000 ALTER TABLE `tbl_graph` DISABLE KEYS */;
REPLACE INTO `tbl_graph` (`id_ikan`, `nama`, `jumlah`) VALUES
	(12, 'Aurantirytrty', 25),
	(13, 'asdasd', 2),
	(14, 'sdf', 5),
	(18, 'jdfgioq', 10);
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table teras_channa.tbl_ikan: ~4 rows (approximately)
/*!40000 ALTER TABLE `tbl_ikan` DISABLE KEYS */;
REPLACE INTO `tbl_ikan` (`id`, `nama`, `famili`, `ukuran`, `berat`, `usia`, `harga`, `stok`, `gambar`, `keterangan`) VALUES
	(12, 'Aurantirytrty', 'asdf', 2, 2, 2, 20000, -3, 'Wildan_Kusnaedi_41155050180061_SOA_Tugas_21.png', 'qwertyuiop'),
	(13, 'asdasd', 'aur', 0, 0, 0, 0, -2, '', ''),
	(14, 'sdf', 'dsfsd', 123, 312312, 312321, 312321, 312305, 'channa_example2.jpg', '43543534534fdgdfgdfgfdg'),
	(18, 'jdfgioq', 'jafs', 2, 2, 21, 12, 4, 'asdkl', 'm,lxfs');
/*!40000 ALTER TABLE `tbl_ikan` ENABLE KEYS */;

-- Dumping structure for table teras_channa.tbl_invoice
CREATE TABLE IF NOT EXISTS `tbl_invoice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(56) DEFAULT NULL,
  `alamat` varchar(225) DEFAULT NULL,
  `tgl_pesan` datetime DEFAULT NULL,
  `batas_bayar` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table teras_channa.tbl_invoice: ~5 rows (approximately)
/*!40000 ALTER TABLE `tbl_invoice` DISABLE KEYS */;
REPLACE INTO `tbl_invoice` (`id`, `nama`, `alamat`, `tgl_pesan`, `batas_bayar`) VALUES
	(12, NULL, NULL, '2022-01-01 15:40:39', '2022-01-02 15:40:39'),
	(13, 'tester', NULL, '2022-01-01 15:43:18', '2022-01-02 15:43:18'),
	(14, 'tester', 'kfdskfdskfdksfkdsfkdskfsdkfdksfk', '2022-01-01 15:46:06', '2022-01-02 15:46:06'),
	(15, 'jesterthomas', 'chicago kecamatan kidul desa gundul pacul rt 05 ew 005', '2022-01-08 10:06:22', '2022-01-09 10:06:22'),
	(16, 'jesterthomas', 'chicago kecamatan kidul desa gundul pacul rt 05 ew 005', '2022-01-08 11:03:43', '2022-01-09 11:03:43');
/*!40000 ALTER TABLE `tbl_invoice` ENABLE KEYS */;

-- Dumping structure for table teras_channa.tbl_keranjang
CREATE TABLE IF NOT EXISTS `tbl_keranjang` (
  `id_keranjang` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_keranjang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table teras_channa.tbl_keranjang: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_keranjang` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_keranjang` ENABLE KEYS */;

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
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table teras_channa.tbl_pesanan: ~8 rows (approximately)
/*!40000 ALTER TABLE `tbl_pesanan` DISABLE KEYS */;
REPLACE INTO `tbl_pesanan` (`id_pemesanan`, `id_invoice`, `id`, `nama`, `jumlah`, `harga`, `pilihan`) VALUES
	(17, 12, 13, 'asdasd', 1, 312321, NULL),
	(18, 13, 14, 'sdf', 1, 312321, NULL),
	(19, 14, 14, 'sdf', 1, 312321, NULL),
	(20, 14, 13, 'asdasd', 1, 312321, NULL),
	(21, 15, 13, 'asdasd', 1, 312321, NULL),
	(22, 15, 14, 'sdf', 1, 312321, NULL),
	(23, 16, 12, 'Aurantirytrty', 1, 20000, NULL),
	(24, 16, 13, 'asdasd', 1, 312321, NULL),
	(25, 16, 14, 'sdf', 1, 312321, NULL),
	(26, 13, 13, 'asdasd', 2, 312321, NULL);
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

-- Dumping data for table teras_channa.tbl_user: ~7 rows (approximately)
/*!40000 ALTER TABLE `tbl_user` DISABLE KEYS */;
REPLACE INTO `tbl_user` (`fullname`, `username`, `password`, `usertype`, `email`, `address`, `nohp`, `resetpass`) VALUES
	('James Bond', 'jamesb', '1111', 'pembeli', 'james02@hotmail.com', 'Cikampek', '082119934561', NULL),
	('jester thomas', 'jesterthomas', '$2y$10$G8.NsQZTuua7VgRv1GaIlei/mDZVn3Z6YP1tUDuRj9B6gAMmT4/uu', 'pembeli', 'jest005@gmail.com', 'chicago kecamatan kidul desa gundul pacul rt 05 ew 005', '082112345678', NULL),
	('Nataka Grasia', 'nataka', '$2y$10$jSRl0hJpzqoc5H1Kor6cI.D4YeAztk1t2X/.v0HgzmlgQkUjPsBe2', 'pembeli', 'NatakaG@yaohoo.com', 'Kota Jakarta Selatan Jl. Sejati Blok 532', '082344567890', NULL),
	('satira blamtam', 'satria', '12345678', 'pembeli', 'saatirablam@hotmail.com', 'Kab. Bandung, Kec. Banjaran Desa banjaran', '085155679012', NULL),
	('wildan kusnaedi', 'stigma', '$2y$10$MVlenE6eX8M/MF9y.pvOyekwwGxGWFZZLojW0fgfWzXDH8LQVJf6W', 'admin', 'wildank42@gmail.com', 'Cimaung', '085998541670', 'OR2wZX0cYBq6ogT1j9AS4rxIntVGLp7vDQUmsdFKkflHNhayMW'),
	('tester', 'tester', '$2y$10$Zzm.CVOjjWVFsXP4vcc06.0PRXfhM0.AncwZ73flnbExBqMC3b8qK', 'pembeli', 'tester@gmail.com', 'kfdskfdskfdksfkdsfkdskfsdkfdksfk', '088992833424', NULL),
	('wildan kusnaedi', 'wildan', '$2y$10$Zzm.CVOjjWVFsXP4vcc06.0PRXfhM0.AncwZ73flnbExBqMC3b8qK', 'admin', 'wildank40@gmail.com', 'Kab. Bandung, Kec. Banjaran Desa Cimaung Sabelah', '082119901454', 'DCoe5vBgSrkmVxR0YZy3Jnb2O6iXMULa78fIA4KPhQ9GjcE1sd');
/*!40000 ALTER TABLE `tbl_user` ENABLE KEYS */;

-- Dumping structure for trigger teras_channa.graph_ikan
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `graph_ikan` AFTER INSERT ON `tbl_ikan` FOR EACH ROW BEGIN
INSERT INTO `teras_channa`.`tbl_graph` (`id_ikan`,`nama`, `jumlah`) VALUES (NEW.id, NEW.nama, 0);
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Dumping structure for trigger teras_channa.pesanan_penjualan
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION';
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
