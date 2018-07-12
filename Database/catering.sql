-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 12, 2018 at 01:40 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `catering`
--

-- --------------------------------------------------------

--
-- Table structure for table `daerah`
--

CREATE TABLE IF NOT EXISTS `daerah` (
  `id_daerah` int(10) NOT NULL AUTO_INCREMENT,
  `provinsi` varchar(25) NOT NULL,
  `kota` varchar(35) NOT NULL,
  `kecamatan` varchar(35) NOT NULL,
  PRIMARY KEY (`id_daerah`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;

--
-- Dumping data for table `daerah`
--

INSERT INTO `daerah` (`id_daerah`, `provinsi`, `kota`, `kecamatan`) VALUES
(1, 'DKI Jakarta', 'Jakarta Timur', 'Jakarta Timur'),
(2, 'DKI Jakarta', 'Jakarta Timur ', 'Cakung'),
(3, 'DKI Jakarta', 'Jakarta Timur', 'Cipayung'),
(4, 'DKI Jakarta', 'Jakarta Timur ', 'Ciracas'),
(5, 'DKI Jakarta', 'Jakarta Timur', 'Duren Sawit'),
(6, 'DKI Jakarta', 'Jakarta Timur ', 'Jatinegara'),
(7, 'DKI Jakarta', 'Jakarta Timur', 'Kramat Jati'),
(8, 'DKI Jakarta', 'Jakarta Timur ', 'Makassar'),
(9, 'DKI Jakarta', 'Jakarta Timur', 'Matraman'),
(10, 'DKI Jakarta', 'Jakarta Timur', 'Pasar Rebo'),
(11, 'DKI Jakarta', 'Jakarta Timur', 'Pulo Gadung'),
(13, 'DKI Jakarta', 'Jakarta Utara', 'Jakarta Utara'),
(14, 'DKI Jakarta', 'Jakarta Utara', 'Kelapa Gading'),
(15, 'DKI Jakarta', 'Jakarta Utara', 'Koja'),
(16, 'DKI Jakarta', 'Jakarta Utara', 'Pademangan'),
(17, 'DKI Jakarta', 'Jakarta Utara', 'Penjaringan'),
(18, 'DKI Jakarta', 'Jakarta Utara', 'Tanjung Priok'),
(19, 'DKI Jakarta', 'Jakarta Utara ', 'Cilincing'),
(21, 'DKI Jakarta', 'Jakarta Pusat', 'Jakarta Pusat'),
(22, 'DKI Jakarta', 'Jakarta Pusat', 'Cempaka Putih'),
(23, 'DKI Jakarta', 'Jakarta Pusat', 'Gambir'),
(24, 'DKI Jakarta', 'Jakarta Pusat', 'Johar Baru'),
(25, 'DKI Jakarta', 'Jakarta Pusat', 'Kemayoran'),
(26, 'DKI Jakarta', 'Jakarta Pusat', 'Menteng'),
(27, 'DKI Jakarta', 'Jakarta Pusat', 'Sawah Besar'),
(28, 'DKI Jakarta', 'Jakarta Pusat', 'Senen'),
(29, 'DKI Jakarta', 'Jakarta Pusat', 'Tanah Abang'),
(30, 'Jawa Barat', 'Kota Bekasi', 'Bekasi'),
(31, 'Jawa Barat', 'Kota Bekasi', 'Bekasi Barat'),
(32, 'Jawa Barat', 'Kota Bekasi', 'Bekasi Timur'),
(33, 'Jawa Barat', 'Kota Bekasi', 'Bekasi Utara'),
(34, 'Jawa Barat', 'Kota Bekasi', 'Bekasi Selatan'),
(35, 'Jawa Barat', 'Kota Bekasi', 'Bantar Gebang'),
(36, 'Jawa Barat', 'Kota Bekasi', 'Jatiasih'),
(37, 'Jawa Barat', 'Kota Bekasi', 'Jatisampurna'),
(38, 'Jawa Barat', 'Kota Bekasi', 'Medan Satria'),
(39, 'Jawa Barat', 'Kota Bekasi', 'Medan Satria'),
(40, 'Jawa Barat', 'Kota Bekasi', 'Mustika Raya'),
(41, 'Jawa Barat', 'Kota Bekasi', 'Pondok Gede'),
(42, 'Jawa Barat', 'Kota Bekasi', 'Pondok Melati'),
(43, 'Jawa Barat', 'Kota Bekasi', 'Rawalumbu'),
(44, 'Jawa Barat', 'Kab. Bekasi', 'Cikarang'),
(45, 'Jawa Barat', 'Kab. Bekasi', 'Cikarang Barat'),
(46, 'Jawa Barat', 'Kab. Bekasi', 'Cikarang Pusat'),
(47, 'Jawa Barat', 'Kab. Bekasi', 'Cikarang Selatan'),
(48, 'Jawa Barat', 'Kab, Bekasi', 'Cikarang Timur'),
(49, 'Jawa Barat', 'Kab, Bekasi', 'Cikarang Utara'),
(50, 'Jawa Barat', 'Kab. Bekasi', 'Cabangbungin'),
(51, 'Jawa Barat', 'Kab. Bekasi', 'Cibarusah'),
(52, 'Jawa Barat', 'Kab, Bekasi ', 'Cibitung'),
(53, 'Jawa Barat', 'Kab. Bekasi', 'Kedungwaringin'),
(54, 'Jawa Barat', 'Kab. Bekasi ', 'Setu'),
(55, 'Jawa Barat', 'Kab. Bekasi', 'Sukatani'),
(56, 'Jawa Barat', 'Kab. Bekasi', 'Tambelang'),
(57, 'Jawa Barat', 'Kab. Bekasi', 'Sukakarya'),
(58, 'Jawa Barat', 'Kab. Bekasi', 'Sukawangi'),
(59, 'Jawa Barat', 'Kab. Bekasi', 'Tambun Selatan'),
(60, 'Jawa Barat', 'Kab. Bekasi', 'Tambun Utara'),
(61, 'Jawa Barat', 'Kab. Bekasi', 'Tarumajaya'),
(62, 'Jawa Barat', 'Kab. Bekasi', 'Babelan'),
(63, 'Jawa Barat', 'Kab. Bekasi', 'Bojongmanggu');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_menu` int(20) NOT NULL,
  `nama_menu` varchar(20) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `pertanyaan` text NOT NULL,
  `balasan` text NOT NULL,
  `tgl` varchar(25) NOT NULL,
  `type` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `id_menu`, `nama_menu`, `nama`, `pertanyaan`, `balasan`, `tgl`, `type`) VALUES
(2, 15, 'Ika Bakar', 'gita', 'Hello', '', '30-06-2018:03:18:51', ''),
(3, 15, 'Ika Bakar', 'gita', 'yo', '', '30-06-2018:03:27:04', ''),
(4, 15, 'Ika Bakar', 'gita', 'bye', '', '30-06-2018:03:34:19', 'Paket'),
(9, 7, 'Ayam Balado', 'gita', 'ohayou', 'Ohayou', '30-06-2018:03:41:53', 'Satuan'),
(11, 7, 'Ayam Balado', 'gita', 'yo', '', '30-06-2018:09:44:38', 'Paket'),
(15, 8, 'Ayam Bakar', 'gita', 'u', 'j', '30-06-2018:11:11:01', 'Paket'),
(16, 7, 'Ayam Balado', 'gita', 'iyiy', '', '02-07-2018:11:03:55', 'Paket'),
(17, 7, 'Ayam Balado', 'gita', 'iyiy', '', '02-07-2018:11:03:55', 'Paket'),
(19, 7, 'Ayam Balado', 'gita', 'ut', '', '02-07-2018:11:05:31', 'Paket'),
(20, 7, 'Ayam Balado', 'gita', 'cacci maki saja diriku', '', '02-07-2018:11:07:17', 'Paket'),
(26, 7, 'Ayam Balado', 'gita', 'dulu aku cinta padamu', '', '02-07-2018:11:08:00', 'Paket'),
(27, 7, 'Ayam Balado', 'gita', 'hello', '', '02-07-2018:11:08:55', 'Paket'),
(28, 8, 'Ayam Bakar', 'gita', 'apa', '', '02-07-2018:11:14:25', 'Paket'),
(29, 8, 'Ayam Bakar', 'gita', 'masukkan\r\n', '', '02-07-2018:11:22:32', 'Paket'),
(31, 8, 'Ayam Bakar', 'gita', 'batre', '', '02-07-2018:11:25:00', 'Paket'),
(32, 8, 'Ayam Bakar', 'gita', 'bau', '', '02-07-2018:11:27:10', 'Paket'),
(33, 8, 'Ayam Bakar', 'gita', 'agfagha', '', '02-07-2018:11:28:32', 'Paket'),
(34, 8, 'Ayam Bakar', 'gita', 'suka', '', '02-07-2018:11:28:41', 'Paket'),
(36, 8, 'Ayam Bakar', 'Gita', 'Hy', '', '10-07-2018:08:10:39', 'Satuan');

-- --------------------------------------------------------

--
-- Table structure for table `komenweb`
--

CREATE TABLE IF NOT EXISTS `komenweb` (
  `id_komen` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `pertanyaan` varchar(100) NOT NULL,
  `tgl` varchar(25) NOT NULL,
  `balas` varchar(100) NOT NULL,
  PRIMARY KEY (`id_komen`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `komenweb`
--

INSERT INTO `komenweb` (`id_komen`, `nama`, `email`, `pertanyaan`, `tgl`, `balas`) VALUES
(1, 'Nian', 'nian@gmail.com', 'apa', '14-05-2018:08:0', 'ya'),
(2, 'Tia', 'tia@gmail.com', 'Hallo', '14-05-2018:08:22:03', 'Hai'),
(3, 'Mia', 'mia@gmail.com', 'apa kabar?', '11-06-2018:07:10:49', 'Hai'),
(4, 'Diam', 'diam@gmail.com', 'Salam Kenal', '26-06-2018:01:48:38', 'Hai');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id_menu` int(20) NOT NULL AUTO_INCREMENT,
  `kode_menu` varchar(10) NOT NULL,
  `jenis_menu` varchar(10) NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `gambar_menu` varchar(50) NOT NULL,
  `hargamenu` text NOT NULL,
  `hargasatuan` text NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `kode_menu`, `jenis_menu`, `nama_menu`, `gambar_menu`, `hargamenu`, `hargasatuan`, `keterangan`) VALUES
(7, 'A001', 'Ayam', 'Ayam Balado', '../makanan/AYAM BALADO PADANG PEDAS.jpg', '18000', '15000', '- Ayam Balado + Lalaban + Kerupuk -'),
(8, 'A002', 'Ayam', 'Ayam Bakar', '../makanan/ccb6d16ae65339e80cbe6eb349245fd4.jpg', '18000', '15000', '- Ayam Bakar + Lalaban + Sambal + Kerupuk -'),
(10, 'A003', 'Ayam', 'Ayam Goreng S.Hijau', '../makanan/download.jpg', '17000', '14000', '- Ayam Goreng + Lalaban + Sambal Ijo + Kerupuk -'),
(14, 'A004', 'Ayam', 'Ayam Goreng', '../makanan/Bn7Ag9gCEAMzuKl.jpg', '17000', '14000', '- Ayam Goreng + Lalaban + Kerupuk-'),
(15, 'I001', 'Ikan', 'Ikan Bakar', '../makanan/img_6593.jpg', '18000', '15000', '- Ikan Bakar + Sambal + Lalaban + Kerupuk -'),
(18, 'I002', 'Ikan', 'Ikan Goreng', '../makanan/3CJTL8969E2AC8BF43B551lv.jpg', '17000', '14000', '- Ikan Goreng + Lalaban + Sambal + Kerupuk -'),
(29, 'I003', 'Ikan', 'Ikan Bakar P.Manis', '../makanan/Cara Membuat Ikan Bakar Pedas Manis.jpg', '18000', '15000', '- Ikan Bakar Pedas Manis + Sambal + Lalaban +Kerupuk -'),
(30, 'S001', 'Sop', 'Sop Daging Sapi', '../makanan/Resep-sop-daging-sapi.JPG', '17000', '14000', '- Sop Sapi Padang + Kerupuk -'),
(31, 'S002', 'Sop', 'Sop Daging Kambing', '../makanan/1366634705.jpg', '17000', '14000', '- Sop Kambing + Kerupuk -');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE IF NOT EXISTS `pembelian` (
  `id_pembelian` int(10) NOT NULL AUTO_INCREMENT,
  `id_user` int(10) NOT NULL,
  `nama_pembeli` varchar(30) NOT NULL,
  `tgl` varchar(25) NOT NULL,
  `kode_menu` varchar(5) NOT NULL,
  `nama_menu` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `jenis_wadah` varchar(25) NOT NULL,
  `harga` int(50) NOT NULL,
  `hargamenu` int(50) NOT NULL,
  `buah` varchar(25) NOT NULL,
  `jumlah` int(25) NOT NULL,
  `total` int(50) NOT NULL,
  `totalcek` int(50) NOT NULL,
  `tgl_pesan` varchar(25) NOT NULL,
  `tgl_butuh` varchar(25) NOT NULL,
  `catatan` varchar(50) NOT NULL,
  `invoice` varchar(50) NOT NULL,
  `fixed` int(2) NOT NULL,
  PRIMARY KEY (`id_pembelian`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=110 ;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `id_user`, `nama_pembeli`, `tgl`, `kode_menu`, `nama_menu`, `type`, `jenis_wadah`, `harga`, `hargamenu`, `buah`, `jumlah`, `total`, `totalcek`, `tgl_pesan`, `tgl_butuh`, `catatan`, `invoice`, `fixed`) VALUES
(92, 1, 'Gita', '10-07-2018', 'A002', 'Ayam Bakar', 'Satuan', '-', 0, 15000, '-', 2, 30000, 30000, '10-07-2018 : 23:24:22', '2018-07-14', 'tr', '161', 1),
(96, 1, 'Gita', '10-07-2018', 'S002', 'Sop Daging Kambing', 'Satuan', '-', 0, 14000, '-', 2, 28000, 28000, '10-07-2018 : 23:57:18', '2018-07-11', 'qw', '336', 1),
(97, 1, 'Gita', '10-07-2018', 'A002', 'Ayam Bakar', 'Paket', 'Kotak Kerdus', 2800, 18000, 'Jeruk', 2, 38800, 38800, '11-07-2018 : 00:54:13', '2018-07-13', 'er', '328', 1),
(98, 1, 'Gita', '10-07-2018', 'A002', 'Ayam Bakar', 'Satuan', '-', 0, 15000, '-', 1, 15000, 71800, '11-07-2018 : 01:15:36', '2018-07-12', 'rt', '383', 1),
(99, 1, 'Gita', '10-07-2018', 'A001', 'Ayam Balado', 'Paket', 'Kotak Kerdus', 2800, 18000, 'Pisang', 3, 56800, 71800, '11-07-2018 : 01:15:36', '2018-07-13', 'yui', '383', 1),
(100, 1, 'Gita', '10-07-2018', 'A001', 'Ayam Balado', 'Satuan', '-', 0, 15000, '-', 3, 45000, 45000, '11-07-2018 : 01:20:46', '2018-07-13', 'rew', '294', 1),
(105, 10, 'MS', '11-07-2018', 'A002', 'Ayam Bakar', 'Satuan', '-', 0, 15000, '-', 5, 75000, 927800, '12-07-2018 : 10:48:05', '2018-07-14', 'hj', '756', 1),
(106, 10, 'MS', '12-07-2018', 'A003', 'Ayam Goreng S.Hijau', 'Paket', 'Kotak Kerdus', 2800, 17000, 'Pisang', 50, 852800, 927800, '12-07-2018 : 10:48:05', '2018-07-18', 'yang enak bgt', '756', 1),
(107, 1, 'Gita', '12-07-2018', 'A003', 'Ayam Goreng S.Hijau', 'Paket', 'Kotak Kerdus', 2800, 17000, 'Pisang', 60, 1022800, 1022800, '12-Jul-2018 : 15:35:49', '2018-07-15', 'tyu', '240', 1),
(108, 10, 'MS', '12-Jul-2018', 'A001', 'Ayam Balado', 'Satuan', '-', 0, 15000, '-', 50, 750000, 1602800, '12-Jul-2018 : 18:19:40', '2018-07-14', 'yut', '80', 1),
(109, 10, 'MS', '12-07-2018', 'S001', 'Sop Daging Sapi', 'Paket', 'Kotak Kerdus', 2800, 17000, 'Jeruk', 50, 852800, 1602800, '12-Jul-2018 : 18:19:40', '2018-07-21', 'tyra', '80', 1);

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `id_request` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `nama_pemesan` varchar(20) NOT NULL,
  `tanggal` datetime NOT NULL,
  `kode_menu` varchar(8) NOT NULL,
  `nama_menu` varchar(20) NOT NULL,
  `request` varchar(25) NOT NULL,
  `harga` int(11) NOT NULL,
  PRIMARY KEY (`id_request`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `tanggal` varchar(25) NOT NULL,
  `nama_pembeli` varchar(20) NOT NULL,
  `totalcek` int(50) NOT NULL,
  `upload` varchar(35) NOT NULL,
  `konfirmasi` int(2) NOT NULL,
  `invoice` int(50) NOT NULL,
  `selesai` int(2) NOT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `tanggal`, `nama_pembeli`, `totalcek`, `upload`, `konfirmasi`, `invoice`, `selesai`) VALUES
(11, 1, '2018-07-11', 'Gita', 38800, '../img/2.png', 0, 328, 0),
(16, 10, '2018-07-12', 'MS', 927800, '../img/WhatsApp Image 2018-01-23 at', 1, 756, 1),
(17, 1, '12-Jul-2018', 'Gita', 30000, '../img/WhatsApp Image 2018-01-24 at', 1, 161, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(25) NOT NULL,
  `username` varchar(10) NOT NULL,
  `pj` varchar(50) NOT NULL,
  `password` varchar(45) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `provinsi` varchar(40) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(25) NOT NULL,
  `no_tlp` text NOT NULL,
  `level` varchar(10) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `username`, `pj`, `password`, `jk`, `provinsi`, `kota`, `kecamatan`, `alamat`, `email`, `no_tlp`, `level`) VALUES
(1, 'Gita', 'Gita', 'Eka', '4cb6903c6f8b22d7f191aff3e137dbef', 'perempuan', 'Jawa Barat', 'Bekasi', 'Bekasi Barat', 'Bekasi', 'gitaapriyani16@gmail.com', '2147483647', 'user'),
(7, 'admin', 'admin', '', '21232f297a57a5a743894a0e4a801fc3', 'Laki-laki', 'Jawa Barat', 'Bekasi', 'Cikarang', 'Bekasi', 'admin@gmail.com', '8732', 'Admin'),
(8, 'rina', 'rina', '', '3aea9516d222934e35dd30f142fda18c', 'perempuan', 'Jawa Barat', 'Bekasi', 'Bekasi Barat', 'Bekasi', 'rina@gmail.com', '81627', 'Owner'),
(10, 'Pt. Majelis Sejahtera', 'MS', 'Mia', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'Perempuan', 'Jawa Barat', 'Kab. Bekasi', 'Cikarang', 'Bekasi', 'Ms@gmail.com', '08132433', 'user'),
(12, 'Aura', 'Aura', 'Mama', 'd41d8cd98f00b204e9800998ecf8427e', 'Perempuan', 'DKI Jakarta', 'Jakarta Timur', 'Duren Sawit', 'Bekasi', 'aura@gmail.com', '0876534', 'user'),
(13, 'Pt. Arnot', 'Arnot', 'Kiki', '63c79416484c16748f6d281511810100', 'Laki-laki', 'Jawa Barat', 'Kota Bekasi', 'Bekasi Barat', 'Bekasi', 'arnot@gmail.com', '0866542783', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `wadah`
--

CREATE TABLE IF NOT EXISTS `wadah` (
  `id_wadah` int(5) NOT NULL AUTO_INCREMENT,
  `jenis_wadah` varchar(20) NOT NULL,
  `harga` text NOT NULL,
  PRIMARY KEY (`id_wadah`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `wadah`
--

INSERT INTO `wadah` (`id_wadah`, `jenis_wadah`, `harga`) VALUES
(1, 'Sterofoam', '2000'),
(2, 'Kotak Kerdus', '2800');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
