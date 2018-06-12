-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 12, 2018 at 03:07 AM
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
  `email` varchar(30) NOT NULL,
  `pertanyaan` text NOT NULL,
  `balasan` text NOT NULL,
  `tgl` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `id_menu`, `nama_menu`, `nama`, `email`, `pertanyaan`, `balasan`, `tgl`) VALUES
(1, 7, '', 'ass', 'as@gja.com', 'apa?', 'ya', '13-05-2018:09:5');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `komenweb`
--

INSERT INTO `komenweb` (`id_komen`, `nama`, `email`, `pertanyaan`, `tgl`, `balas`) VALUES
(1, 'Nian', 'nian@gmail.com', 'apa', '14-05-2018:08:0', 'ya'),
(2, 'Tia', 'tia@gmail.com', 'Hallo', '14-05-2018:08:22:03', ''),
(3, 'Mia', 'mia@gmail.com', 'apa kabar?', '11-06-2018:07:10:49', '');

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
  `hargamenu` int(11) NOT NULL,
  `hargasatuan` int(15) NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `kode_menu`, `jenis_menu`, `nama_menu`, `gambar_menu`, `hargamenu`, `hargasatuan`, `keterangan`) VALUES
(7, 'A001', 'Ayam', 'Ayam', '../makanan/3.jpg', 18000, 13000, '- Enak\r\n- Lezat\r\n- Murah'),
(8, 'A002', 'Ayam', 'Ayam Bakar', '../makanan/a-ayam-lala-2.jpg', 18000, 13000, 'Enaque'),
(10, 'I001', 'Ikan', 'Ikan Goreng', '../makanan/Cara Membuat Ikan Bakar Pedas Manis.jpg', 17000, 11000, '- Gurih - Lezat - Maknyus  '),
(14, '003', 'Ayam', 'as', '../makanan/1.jpg', 1454, 0, 'Matapz'),
(15, 'et', 'Sop', 'dgrg', '../makanan/9798Paket B.png', 13452, 0, 'dfdf'),
(18, '003', 'Ikan', 'as', '../makanan/2_bebek_hijau.jpg', 1454, 0, 'xzc'),
(19, 'gf', 'Sop', 'ggf', '../makanan/2.jpg', 1345, 0, 'Gurih dan mantap');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE IF NOT EXISTS `pembelian` (
  `id_pembelian` int(10) NOT NULL AUTO_INCREMENT,
  `id_user` int(10) NOT NULL,
  `nama_pembeli` varchar(30) NOT NULL,
  `tgl` varchar(15) NOT NULL,
  `kode_menu` varchar(5) NOT NULL,
  `nama_menu` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `jenis_wadah` varchar(10) NOT NULL,
  `harga` int(11) NOT NULL,
  `hargamenu` int(10) NOT NULL,
  `buah` varchar(10) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `total` int(11) NOT NULL,
  `totalcek` int(15) NOT NULL,
  `tgl_pesan` varchar(25) NOT NULL,
  `tgl_butuh` varchar(25) NOT NULL,
  `catatan` varchar(50) NOT NULL,
  `invoice` varchar(50) NOT NULL,
  `fixed` int(2) NOT NULL,
  PRIMARY KEY (`id_pembelian`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=69 ;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `id_user`, `nama_pembeli`, `tgl`, `kode_menu`, `nama_menu`, `type`, `jenis_wadah`, `harga`, `hargamenu`, `buah`, `jumlah`, `total`, `totalcek`, `tgl_pesan`, `tgl_butuh`, `catatan`, `invoice`, `fixed`) VALUES
(58, 9, 'nadia', '06-06-2018', 'A001', 'Ayam', 'Satuan', '-', 0, 13000, '-', 1, 13000, 0, '', '', 'pake sambel yang banyak', '946', 1),
(59, 9, 'nadia', '06-06-2018', 'I001', 'Ikan Goreng', 'Satuan', '-', 0, 11000, '-', 2, 22000, 0, '', '', 'jkkk', '944', 1),
(60, 9, 'nadia', '06-06-2018', 'A002', 'Ayam Bakar', 'Satuan', '-', 0, 13000, '-', 2, 26000, 0, '', '', 'jj', '615', 1),
(61, 9, 'nadia', '06-06-2018', 'A001', 'Ayam', 'Paket', 'Kotak Kerd', 2800, 18000, 'Jeruk', 2, 38800, 0, '', '', 'as', '589', 1),
(62, 9, 'nadia', '06-06-2018', 'A002', 'Ayam Bakar', 'Paket', 'Kotak Kerd', 2800, 18000, 'Jeruk', 1, 20800, 0, '', '', 'dg', '839', 1),
(63, 1, 'gita', '06-06-2018', 'A002', 'Ayam Bakar', 'Paket', 'Kotak Kerd', 2800, 18000, 'Jeruk', 1, 20800, 0, '', '', 'as', '77', 1),
(64, 1, 'gita', '', 'A001', 'Ayam', 'Paket', 'Kotak Kerd', 2800, 18000, 'Jeruk', 2, 38800, 0, '12-06-2018 : 07:39:21', '', 'sd', '270', 1),
(65, 1, 'gita', '', 'I001', 'Ikan Goreng', 'Paket', 'Kotak Kerd', 2800, 17000, 'Pisang', 3, 53800, 0, '12-06-2018 : 07:39:21', '', 'df', '270', 1),
(66, 1, 'gita', '12-06-2018', 'A001', 'Ayam', 'Paket', 'Kotak Kerd', 2800, 18000, 'Pisang', 2, 38800, 0, '12-06-2018 : 07:39:21', '', 'sd', '270', 1),
(67, 1, 'gita', '12-06-2018', 'A002', 'Ayam Bakar', 'Paket', 'Sterofoam', 2000, 18000, 'Pisang', 2, 38000, 0, '12-06-2018 : 07:51:38', '', 'sds', '789', 1),
(68, 1, 'gita', '12-06-2018', 'A001', 'Ayam', 'Paket', 'Kotak Kerd', 2800, 18000, 'Pisang', 1, 20800, 0, '12-06-2018 : 07:51:38', '2018-06-22', 'ks', '789', 1);

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
  `totalcek` int(25) NOT NULL,
  `upload` varchar(35) NOT NULL,
  `konfirmasi` int(2) NOT NULL,
  `invoice` int(3) NOT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(25) NOT NULL,
  `username` varchar(10) NOT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `username`, `password`, `jk`, `provinsi`, `kota`, `kecamatan`, `alamat`, `email`, `no_tlp`, `level`) VALUES
(1, 'Gita', 'gita', '4cb6903c6f8b22d7f191aff3e137dbef', 'perempuan', 'Jawa Barat', 'Bekasi', 'Bekasi Barat', 'Bekasi', 'gitaapriyani16@gmail.com', '08127648536', 'user'),
(7, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Laki-laki', 'Jawa Barat', 'Bekasi', 'Cikarang', 'Bekasi', 'admin@gmail.com', '08732', 'Admin'),
(8, 'rina', 'rina', '3aea9516d222934e35dd30f142fda18c', 'perempuan', 'Jawa Barat', 'Bekasi', 'Bekasi Barat', 'Bekasi', 'rina@gmail.com', '081627', 'Owner'),
(9, 'Nadia Salsabil', 'nadia', '827ccb0eea8a706c4c34a16891f84e7b', 'Perempuan', 'DKI Jakarta', 'Jakarta Timur', 'Cipayung', 'sakfnaskf', 'diagia@gmail.com', '', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `wadah`
--

CREATE TABLE IF NOT EXISTS `wadah` (
  `id_wadah` int(5) NOT NULL AUTO_INCREMENT,
  `jenis_wadah` varchar(20) NOT NULL,
  `harga` double NOT NULL,
  PRIMARY KEY (`id_wadah`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `wadah`
--

INSERT INTO `wadah` (`id_wadah`, `jenis_wadah`, `harga`) VALUES
(1, 'Sterofoam', 2000),
(2, 'Kotak Kerdus', 2800);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
