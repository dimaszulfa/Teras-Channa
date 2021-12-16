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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table teras_channa.tbl_ikan: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_ikan` DISABLE KEYS */;
REPLACE INTO `tbl_ikan` (`id`, `nama`, `famili`, `ukuran`, `berat`, `usia`, `harga`, `stok`, `gambar`, `keterangan`) VALUES
	(12, 'Aurantirytrty', 'asdf', 2, 2, 2, 20000, 2, 'Wildan_Kusnaedi_41155050180061_SOA_Tugas_21.png', 'qwertyuiop'),
	(13, 'Barcas', 'serea', 2, 5, 55, 20000, 5, 'permission_adminpcpart.png', 'gabus');
/*!40000 ALTER TABLE `tbl_ikan` ENABLE KEYS */;

-- Dumping structure for table teras_channa.tbl_keranjang
CREATE TABLE IF NOT EXISTS `tbl_keranjang` (
  `id_keranjang` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` varchar(50) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `id_ikan` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_keranjang`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table teras_channa.tbl_keranjang: ~4 rows (approximately)
/*!40000 ALTER TABLE `tbl_keranjang` DISABLE KEYS */;
REPLACE INTO `tbl_keranjang` (`id_keranjang`, `id_user`, `qty`, `price`, `name`, `id_ikan`) VALUES
	(5, 'satrias', 1, 20000, 'Barcas', 13),
	(6, 'satrias', 1, 20000, 'Aurantirytrty', 12),
	(8, 'nataka', 4, 20000, 'Barcas', 13),
	(12, 'nataka', 1, 20000, 'Aurantirytrty', 12);
/*!40000 ALTER TABLE `tbl_keranjang` ENABLE KEYS */;

-- Dumping structure for table teras_channa.tbl_pemesanan
CREATE TABLE IF NOT EXISTS `tbl_pemesanan` (
  `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_pemesanan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table teras_channa.tbl_pemesanan: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_pemesanan` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_pemesanan` ENABLE KEYS */;

-- Dumping structure for table teras_channa.tbl_transaksi
CREATE TABLE IF NOT EXISTS `tbl_transaksi` (
  `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,
  `batas_waktu` date DEFAULT NULL,
  `status_transaksi` date DEFAULT NULL,
  `waktu_pemesanan` date DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table teras_channa.tbl_transaksi: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_transaksi` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_transaksi` ENABLE KEYS */;

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

-- Dumping data for table teras_channa.tbl_user: ~6 rows (approximately)
/*!40000 ALTER TABLE `tbl_user` DISABLE KEYS */;
REPLACE INTO `tbl_user` (`fullname`, `username`, `password`, `usertype`, `email`, `address`, `nohp`, `resetpass`) VALUES
	('James Bond', 'jamesb', '1111', 'pembeli', 'james02@hotmail.com', 'Cikampek', '082119934561', NULL),
	('Nataka Grasia', 'nataka', '$2y$10$jSRl0hJpzqoc5H1Kor6cI.D4YeAztk1t2X/.v0HgzmlgQkUjPsBe2', 'pembeli', 'NatakaG@yaohoo.com', 'Kota Jakarta Selatan Jl. Sejati Blok 532', '082344567890', NULL),
	('satira blamtam', 'satria', '12345678', 'pembeli', 'saatirablam@hotmail.com', 'Kab. Bandung, Kec. Banjaran Desa banjaran', '085155679012', NULL),
	('satira blamtamasd', 'satrias', '$2y$10$UZxWb7xELi1kf8VptTkq5u1QHVrpCawxx99rQF5h292NPql/Ks6Pm', 'pembeli', 'saatirablam@hotmail.com', 'Kab. Tiki land Bikini Bottom Blok 237', '022145642230', NULL),
	('wildan kusnaedi', 'stigma', '$2y$10$MVlenE6eX8M/MF9y.pvOyekwwGxGWFZZLojW0fgfWzXDH8LQVJf6W', 'admin', 'wildank42@gmail.com', 'Cimaung', '085998541670', 'OR2wZX0cYBq6ogT1j9AS4rxIntVGLp7vDQUmsdFKkflHNhayMW'),
	('wildan kusnaedi', 'wildan', '$2y$10$hU9EJ.nz0EngjP9Dy1qxIeckN/8jzE6MnUEnv1GHHxJl5gPzWh9J6', 'admin', 'wildank40@gmail.com', 'Kab. Bandung, Kec. Banjaran Desa Cimaung Sabelah', '082119901454', '0MV7at5QjTerpNAmPcISC6H8l2oYzZbK1nsODxvwh3XG4iLydk');
/*!40000 ALTER TABLE `tbl_user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
