-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.19-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping data for table teras_channa.tbl_checkout: ~18 rows (approximately)
/*!40000 ALTER TABLE `tbl_checkout` DISABLE KEYS */;
REPLACE INTO `tbl_checkout` (`id`, `order_id`, `gross_amount`, `payment_type`, `bank`, `va_number`, `biller_code`, `transaction_status`, `transaction_time`, `pdf_url`, `date_created`, `date_modified`) VALUES
	(1, 621737195, '684642', 'bank_transfer', 'bca', '01780576761', '', 'expire', '2021-12-12 22:27:52', 'https://app.sandbox.midtrans.com/snap/v1/transactions/a00cf60f-416b-448e-b96d-ef9a54926c69/pdf', 1639322873, 1639450408),
	(2, 1318201693, '684642', 'bank_transfer', 'bca', '01780814901', '', 'expire', '2021-12-12 23:07:16', 'https://app.sandbox.midtrans.com/snap/v1/transactions/8ade0a5f-3028-43ee-9627-ac333896aa17/pdf', 1639325238, 1639449379),
	(3, 1446355864, '684642', 'bank_transfer', 'bca', '01780503037', '', 'pending', '2021-12-12 23:18:54', 'https://app.sandbox.midtrans.com/snap/v1/transactions/fcc1d105-7de9-4146-8634-03c9fc47d849/pdf', 1639325935, 1639325935),
	(4, 1446355864, '684642', 'bank_transfer', 'bca', '01780503037', '', 'pending', '2021-12-12 23:18:54', 'https://app.sandbox.midtrans.com/snap/v1/transactions/fcc1d105-7de9-4146-8634-03c9fc47d849/pdf', 1639364728, 1639364728),
	(5, 519090872, '1249284', 'bank_transfer', 'bca', '01780091698', '', 'settlement', '2021-12-13 11:58:06', 'https://app.sandbox.midtrans.com/snap/v1/transactions/3f5154db-2a0e-4930-a75d-4c7016db9064/pdf', 1639371491, 1639449088),
	(6, 1984588783, '1249284', 'bank_transfer', 'bca', '01780604682', '', 'pending', '2021-12-13 12:03:03', 'https://app.sandbox.midtrans.com/snap/v1/transactions/8f85a4b2-fece-4bbc-838a-56b3288556aa/pdf', 1639371790, 1639449106),
	(7, 2138428738, '332321', 'bank_transfer', 'permata', '017001573331347', '', 'pending', '2021-12-14 07:42:53', 'https://app.sandbox.midtrans.com/snap/v1/transactions/54517a17-4bd9-4119-87d8-b4a98f35881c/pdf', 1639442576, 1639442576),
	(8, 893020937, '332321', 'echannel', 'mandiri', '279953308689', '', 'pending', '2021-12-14 07:44:45', 'https://app.sandbox.midtrans.com/snap/v1/transactions/63afbfe4-8aad-4ebf-b6b1-82c531135a86/pdf', 1639442687, 1639442687),
	(9, 1600066552, '312321', 'cstore', 'alfamart/indomart', '1433603453370059', '', 'pending', '2021-12-14 07:46:01', 'https://app.sandbox.midtrans.com/snap/v1/transactions/6dbfc8a5-02e0-4a50-b7a3-4c659a527a15/pdf', 1639442762, 1639442762),
	(10, 1021573714, '332321', 'cstore', 'alfamart/indomart', '307606576065', '', 'pending', '2021-12-14 07:46:27', 'https://app.sandbox.midtrans.com/snap/v1/transactions/01b674a2-611b-4c55-8d68-400e8bf2b173/pdf', 1639442791, 1639442791),
	(11, 2114939765, '624642', 'echannel', 'mandiri', '29548829912', '', 'pending', '2021-12-14 09:43:42', 'https://app.sandbox.midtrans.com/snap/v1/transactions/3b127b7d-bb0d-4f3a-86c0-9f505f157b52/pdf', 1639449823, 1639449823),
	(12, 893831348, '20000', 'echannel', 'mandiri', '210601245758', '70012', 'settlement', '2021-12-14 09:45:41', 'https://app.sandbox.midtrans.com/snap/v1/transactions/0274311d-6a48-4518-9eb6-726f947e7565/pdf', 1639449942, 1639450002),
	(13, 1771904993, '624642', 'bank_transfer', 'bca', '01780645904', '', 'settlement', '2021-12-14 18:07:20', 'https://app.sandbox.midtrans.com/snap/v1/transactions/0f11764a-46a6-409d-85f2-5cb448cc66ce/pdf', 1639480045, 1639480101),
	(14, 608522572, '332321', 'cstore', 'alfamart/indomart', '696453364533', '', 'pending', '2021-12-24 03:37:59', 'https://app.sandbox.midtrans.com/snap/v1/transactions/1f7fbe4b-55e6-4e1d-93f8-55762d08ba93/pdf', 1640291882, 1640291882),
	(15, 447663939, '332321', 'bank_transfer', 'bca', '01780349504', '', 'pending', '2021-12-29 19:28:57', 'https://app.sandbox.midtrans.com/snap/v1/transactions/c4c58198-115f-40a0-bd77-83211d4fbe5c/pdf', 1640780939, 1640780939),
	(16, 670806231, '312321', 'cstore', 'alfamart/indomart', '712119901454', '', 'pending', '2021-12-29 19:34:50', 'https://app.sandbox.midtrans.com/snap/v1/transactions/233145ec-63e1-47c3-983e-747e5558c5dc/pdf', 1640781293, 1640781293),
	(17, 442680572, '624642', 'cstore', 'alfamart/indomart', '862119901454', '', 'pending', '2021-12-29 21:39:56', 'https://app.sandbox.midtrans.com/snap/v1/transactions/3c65b61a-3887-4cbc-9f5e-2f95510e59d7/pdf', 1640788799, 1640788799),
	(18, 1747023962, '644642', 'cstore', 'alfamart/indomart', '538992833424', '', 'settlement', '2021-12-30 14:22:07', 'https://app.sandbox.midtrans.com/snap/v1/transactions/ad63f28b-aa18-44ac-823a-40980d8fa282/pdf', 1640848938, 1640849040);
/*!40000 ALTER TABLE `tbl_checkout` ENABLE KEYS */;

-- Dumping data for table teras_channa.tbl_ikan: ~3 rows (approximately)
/*!40000 ALTER TABLE `tbl_ikan` DISABLE KEYS */;
REPLACE INTO `tbl_ikan` (`id`, `nama`, `famili`, `ukuran`, `berat`, `usia`, `harga`, `stok`, `gambar`, `keterangan`) VALUES
	(12, 'Aurantirytrty', 'asdf', 2, 2, 2, 20000, -1, 'Wildan_Kusnaedi_41155050180061_SOA_Tugas_21.png', 'qwertyuiop'),
	(13, 'asdasd', 'dsfsd', 123, 312312, 312321, 312321, 312307, 'channa_example.jpg', '43543534534fdgdfgdfgfdg'),
	(14, 'sdf', 'dsfsd', 123, 312312, 312321, 312321, 312310, 'channa_example2.jpg', '43543534534fdgdfgdfgfdg');
/*!40000 ALTER TABLE `tbl_ikan` ENABLE KEYS */;

-- Dumping data for table teras_channa.tbl_invoice: ~9 rows (approximately)
/*!40000 ALTER TABLE `tbl_invoice` DISABLE KEYS */;
REPLACE INTO `tbl_invoice` (`id`, `nama`, `alamat`, `tgl_pesan`, `batas_bayar`) VALUES
	(1, '213213123', NULL, '2021-12-11 20:20:56', '2021-12-12 20:20:56'),
	(2, '213213123', NULL, '2021-12-11 20:21:18', '2021-12-12 20:21:18'),
	(3, 'asfd21312', 'etet', '2021-12-11 20:22:10', '2021-12-12 20:22:10'),
	(4, '123123', 'zulfa', '2021-12-11 21:20:32', '2021-12-12 21:20:32'),
	(5, '213213213', 'e23', '2021-12-11 21:52:55', '2021-12-12 21:52:55'),
	(6, NULL, NULL, '2021-12-29 21:39:59', '2021-12-30 21:39:59'),
	(7, NULL, NULL, '2021-12-30 14:21:17', '2021-12-31 14:21:17'),
	(8, NULL, NULL, '2021-12-30 14:21:19', '2021-12-31 14:21:19'),
	(9, NULL, NULL, '2021-12-30 14:22:18', '2021-12-31 14:22:18');
/*!40000 ALTER TABLE `tbl_invoice` ENABLE KEYS */;

-- Dumping data for table teras_channa.tbl_keranjang: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_keranjang` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_keranjang` ENABLE KEYS */;

-- Dumping data for table teras_channa.tbl_pemesanan: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_pemesanan` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_pemesanan` ENABLE KEYS */;

-- Dumping data for table teras_channa.tbl_pesanan: ~14 rows (approximately)
/*!40000 ALTER TABLE `tbl_pesanan` DISABLE KEYS */;
REPLACE INTO `tbl_pesanan` (`id_pemesanan`, `id_invoice`, `id`, `nama`, `jumlah`, `harga`, `pilihan`) VALUES
	(1, 2, 12, 'Aurantirytrty', 2, 20000, NULL),
	(2, 3, 12, 'Aurantirytrty', 1, 20000, NULL),
	(3, 4, 13, 'sdf', 1, 312321, NULL),
	(4, 4, 14, 'sdf', 2, 312321, NULL),
	(5, 4, 12, 'Aurantirytrty', 2, 20000, NULL),
	(6, 5, 12, 'Aurantirytrty', 1, 20000, NULL),
	(7, 670806231, 13, 'asdasd', 1, 312321, NULL),
	(8, 6, 13, 'asdasd', 2, 312321, NULL),
	(9, 7, 12, 'Aurantirytrty', 1, 20000, NULL),
	(10, 7, 13, 'asdasd', 1, 312321, NULL),
	(11, 7, 14, 'sdf', 1, 312321, NULL),
	(12, 9, 14, 'sdf', 1, 312321, NULL),
	(13, 9, 13, 'asdasd', 1, 312321, NULL),
	(14, 9, 12, 'Aurantirytrty', 1, 20000, NULL);
/*!40000 ALTER TABLE `tbl_pesanan` ENABLE KEYS */;

-- Dumping data for table teras_channa.tbl_transaksi: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_transaksi` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_transaksi` ENABLE KEYS */;

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

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
