-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 06, 2017 at 04:10 PM
-- Server version: 5.5.54-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_rainkids`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('7fce7bd4c9186033ae2ed2a2bd2d5b14', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:51.0) Gecko/20100101 Firefox/51.0', 1486372164, ''),
('a53e1da0c4acb42b6611d0f837f8a0ac', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:50.0) Gecko/20100101 Firefox/50.0', 1482589616, 'a:2:{s:9:"user_data";s:0:"";s:4:"user";a:2:{s:8:"username";s:11:"rainkids228";s:8:"password";s:11:"rainkids228";}}'),
('e88ebd0dec641fe0df03f0af092c57ae', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:51.0) Gecko/20100101 Firefox/51.0', 1486139528, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id_admin` int(3) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nama`, `username`, `password`) VALUES
(1, 'rainkids228', 'rainkids228', 'rainkids228');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE IF NOT EXISTS `tbl_cart` (
  `id_detailcart` int(11) NOT NULL AUTO_INCREMENT,
  `invoice` varchar(20) NOT NULL,
  `no_resi` text NOT NULL,
  `kode_member` varchar(20) NOT NULL,
  `nama` varchar(26) NOT NULL,
  `email` varchar(24) NOT NULL,
  `no_hp` int(15) NOT NULL,
  `point` int(4) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `total` int(11) NOT NULL,
  `status` int(3) NOT NULL,
  PRIMARY KEY (`id_detailcart`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=140 ;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`id_detailcart`, `invoice`, `no_resi`, `kode_member`, `nama`, `email`, `no_hp`, `point`, `tanggal`, `total`, `status`) VALUES
(103, 'INC0001', '', '', 'adi', 'zukiungu@gmail.com', 768768768, 0, '2016-10-25 11:42:24', 780000, 0),
(104, 'INC0002', '300', '', 'adier', 'pondoksoft@gmail.com', 53454, 0, '2016-10-25 11:44:37', 360000, 1),
(105, 'INC0003', '', '0123', 'boy', 'rainkids.stocklot2@gmail', 2147483647, 3, '2016-10-26 04:30:55', 300000, 1),
(106, 'INC0004', '', '123', 'zuki', 'zukiungu@gmail.com', 768678668, 3, '2016-10-26 11:34:49', 300000, 0),
(107, 'INC0005', '23456', '123', 'zuki', 'zukiungu@gmail.com', 768678668, 3, '2016-11-03 17:22:29', 360000, 1),
(108, 'INC0006', '', '123', 'zuki', 'zukiungu@gmail.com', 768678668, 5, '2016-11-05 09:37:48', 540000, 0),
(109, 'INC0007', '', '123', 'zuki', 'zukiungu@gmail.com', 768678668, 4, '2016-11-05 09:45:39', 450000, 0),
(110, 'INC0008', '', '123', 'zuki', 'zukiungu@gmail.com', 768678668, 4, '2016-11-05 09:46:15', 450000, 0),
(111, 'INC0009', 'jne 09888887666666', '111', 'Ivan', 'ivangenzi@gmail.com', 0, 1, '2016-11-06 01:22:47', 100000, 1),
(112, 'INC0010', '', '', 'fgstwe', 'adofadhoil@gmail.com', 3424, 3, '2016-11-07 06:45:41', 320000, 0),
(113, 'INC0010', '', '', 'fghdg', 'adofadhoil@gmail.com', 32, 3, '2016-11-07 06:48:30', 320000, 0),
(114, 'INC0010', '', '', 'qswqs', 'sqwsq', 0, 3, '2016-11-07 06:50:06', 320000, 0),
(115, 'INC0010', '', '', 'qswqs', 'sqwsq', 0, 3, '2016-11-07 06:50:06', 320000, 0),
(116, 'INC0010', '', '', '', '', 0, 3, '2016-11-07 06:52:06', 320000, 0),
(117, 'INC0010', '', '', '', '', 0, 3, '2016-11-07 06:52:15', 320000, 0),
(118, 'INC0011', '', '01234567891011', 'BOY', 'RAINKIDS.STOCKLOT2@GMAIL', 2147483647, 10, '2016-11-07 07:14:23', 1000000, 1),
(119, 'INC0012', '1111111111jne', '111', 'Ivan', 'ivangenzi@gmail.com', 0, 5, '2016-11-08 01:06:42', 500000, 1),
(120, 'INC0013', '5', '123', 'zuki', 'zukiungu@gmail.com', 768678668, 4, '2016-11-08 07:39:03', 450000, 1),
(121, 'INC0014', '6767', '123', 'zuki', 'zukiungu@gmail.com', 2147483647, 28, '2016-11-08 07:57:29', 2880000, 1),
(122, 'INC0015', '8778', '123', 'zuki', 'zukiungu@gmail.com', 2147483647, 0, '2016-11-08 07:59:52', 90000, 1),
(123, 'INC0016', '7676', '', 'yuyu', 'yutut@hjhjh.fs', 5657, 1, '2016-11-08 08:02:17', 100000, 1),
(124, 'INC0017', '6767', '', '67', '6867', 686, 1, '2016-11-08 08:04:26', 100000, 1),
(125, 'INC0018', '76868', '', '87979', '7979', 797, 21, '2016-11-08 08:06:02', 2160000, 1),
(126, 'INC0019', '45466476', '123', 'zuki', 'zukiungu@gmail.com', 2147483647, 0, '2016-11-08 08:07:59', 90000, 1),
(127, 'INC0020', '5677', '123', 'zuki', 'zukiungu@gmail.com', 2147483647, 1, '2016-11-08 08:09:41', 180000, 1),
(128, 'INC0021', '123456789', '01234567891011', 'BOY', 'RAINKIDS.STOCKLOT2@GMAIL', 2147483647, 10, '2016-11-12 02:25:52', 1000000, 1),
(129, 'INC0022', '', '01234567891011', 'BOY', 'RAINKIDS.STOCKLOT2@GMAIL', 2147483647, 12, '2016-11-12 04:36:21', 1270000, 0),
(130, 'INC0023', '145623', '01234567891011', 'BOY', 'RAINKIDS.STOCKLOT2@GMAIL', 2147483647, 2, '2016-11-14 02:42:16', 200000, 1),
(131, 'INC0024', '', '01234567891011', 'BOY', 'RAINKIDS.STOCKLOT2@GMAIL', 2147483647, 5, '2016-11-17 16:57:28', 540000, 0),
(132, 'INC0025', '', '555', '555', '555', 555, 5, '2016-11-17 17:11:21', 540000, 0),
(133, 'INC0026', '', '555', '555', '555', 555, 5, '2016-11-17 17:14:10', 540000, 0),
(134, 'INC0027', '44', '555', '555', '555', 555, 5, '2016-11-17 17:17:58', 540000, 0),
(135, 'INC0027', '', '555', '555', '555', 555, 5, '2016-11-17 17:18:00', 540000, 0),
(136, 'INC0028', '', '555', '555', '555', 555, 5, '2016-11-17 17:19:10', 540000, 0),
(137, 'INC0028', '', '555', '555', '555', 555, 5, '2016-11-17 17:21:01', 540000, 0),
(138, 'INC0029', '', '555', '555', '555', 555, 4, '2016-11-17 17:21:27', 450000, 0),
(139, 'INC0030', '', '555', '555', '555', 555, 5, '2016-11-17 17:23:23', 540000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detailcart`
--

CREATE TABLE IF NOT EXISTS `tbl_detailcart` (
  `id_cart` int(3) NOT NULL AUTO_INCREMENT,
  `invoice` varchar(20) NOT NULL,
  `no_resi` text NOT NULL,
  `kode_produk` varchar(20) NOT NULL,
  `tanggal` text NOT NULL,
  `jumlah_beli` int(4) NOT NULL,
  `ukuran` varchar(10) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `harga` int(20) NOT NULL,
  `total` int(20) NOT NULL,
  `status` int(3) NOT NULL,
  `kode_member` varchar(10) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `aktif` varchar(8) NOT NULL,
  `ongkir` int(91) NOT NULL,
  `ket_tambah` text NOT NULL,
  PRIMARY KEY (`id_cart`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=204 ;

--
-- Dumping data for table `tbl_detailcart`
--

INSERT INTO `tbl_detailcart` (`id_cart`, `invoice`, `no_resi`, `kode_produk`, `tanggal`, `jumlah_beli`, `ukuran`, `jenis`, `harga`, `total`, `status`, `kode_member`, `gambar`, `aktif`, `ongkir`, `ket_tambah`) VALUES
(162, 'INC0004', '', 'KD0001', '10/26/2016', 3, '25', '1', 100000, 300000, 0, '1', 'Chrysanthemum.jpg', '', 0, ''),
(161, 'INC0003', '', 'KD0001', '10/26/2016', 3, '25', '1', 100000, 300000, 1, '0', 'Chrysanthemum.jpg', '', 0, ''),
(160, 'INC0002', '300', 'KD0001', '10/25/2016', 3, '25', '1', 120000, 360000, 1, '', 'Chrysanthemum.jpg', '', 6000, 'rrwerw'),
(159, 'INC0001', '', 'KD0001', '10/25/2016', 4, '25', '1', 120000, 480000, 0, '', 'Chrysanthemum.jpg', '', 14000, 'eqweweq'),
(158, 'INC0001', '', 'KD0002', '10/25/2016', 3, '25', '1', 100000, 300000, 0, '', 'Koala.jpg', '', 14000, 'eqweweq'),
(163, 'INC0005', '23456', 'KD0002', '11/04/2016', 4, '25', '1', 90000, 360000, 1, '1', 'Koala.jpg', '', 8000, '--'),
(164, 'INC0006', '', 'KD0002', '11/05/2016', 6, '25', '1', 90000, 540000, 0, '1', 'Koala.jpg', '', 12000, 'testing'),
(165, 'INC0007', '', 'KD0002', '11/05/2016', 5, '25', '1', 90000, 450000, 0, '1', 'Koala.jpg', '', 17500, 'yuy'),
(166, 'INC0008', '', 'KD0002', '11/05/2016', 5, '25', '1', 90000, 450000, 0, '1', 'Koala.jpg', '', 10000, 'hj'),
(167, 'INC0009', 'jne 09888887666666', 'KD0001', '11/06/2016', 1, '25', '1', 100000, 100000, 1, '1', 'Chrysanthemum.jpg', '', 2000, 'fff ggggggggg6'),
(168, 'INC0010', '', 'KD0001', '11/07/2016', 1, '25', '1', 120000, 120000, 0, '', 'Chrysanthemum.jpg', '', 33000, 'qewqeqweqeqq'),
(169, 'INC0010', '', 'KD0002', '11/07/2016', 2, '25', '1', 100000, 200000, 0, '', 'Koala.jpg', '', 33000, 'qewqeqweqeqq'),
(170, 'INC0010', '', 'KD0001', '11/07/2016', 1, '25', '1', 120000, 120000, 0, '', 'Chrysanthemum.jpg', '', 75000, 'qweqwdqw'),
(171, 'INC0010', '', 'KD0002', '11/07/2016', 2, '25', '1', 100000, 200000, 0, '', 'Koala.jpg', '', 75000, 'qweqwdqw'),
(172, 'INC0010', '', 'KD0001', '11/07/2016', 1, '25', '1', 120000, 120000, 0, '', 'Chrysanthemum.jpg', '', 75000, 'qweqw'),
(173, 'INC0010', '', 'KD0002', '11/07/2016', 2, '25', '1', 100000, 200000, 0, '', 'Koala.jpg', '', 75000, 'qweqw'),
(174, 'INC0010', '', 'KD0001', '11/07/2016', 1, '25', '1', 120000, 120000, 0, '', 'Chrysanthemum.jpg', '', 75000, 'qweqw'),
(175, 'INC0010', '', 'KD0002', '11/07/2016', 2, '25', '1', 100000, 200000, 0, '', 'Koala.jpg', '', 75000, 'qweqw'),
(176, 'INC0010', '', 'KD0001', '11/07/2016', 1, '25', '1', 120000, 120000, 0, '', 'Chrysanthemum.jpg', '', 0, ''),
(177, 'INC0010', '', 'KD0002', '11/07/2016', 2, '25', '1', 100000, 200000, 0, '', 'Koala.jpg', '', 0, ''),
(178, 'INC0010', '', 'KD0001', '11/07/2016', 1, '25', '1', 120000, 120000, 0, '', 'Chrysanthemum.jpg', '', 0, ''),
(179, 'INC0010', '', 'KD0002', '11/07/2016', 2, '25', '1', 100000, 200000, 0, '', 'Koala.jpg', '', 0, ''),
(180, 'INC0011', '', 'KD0001', '11/07/2016', 10, '25', '1', 100000, 1000000, 1, '0', 'Chrysanthemum.jpg', '', 70000, 'SIZE MIX'),
(181, 'INC0012', '1111111111jne', 'KD0001', '11/08/2016', 5, '25', '1', 100000, 500000, 1, '1', 'Chrysanthemum.jpg', '', 125000, '5555'),
(182, 'INC0013', '5', 'KD0002', '11/08/2016', 5, '25', '1', 90000, 450000, 1, '1', 'Koala.jpg', '', 95000, '--'),
(183, 'INC0014', '6767', 'KD0002', '11/08/2016', 3, '27', '12', 80000, 2880000, 1, '1', 'Koala.jpg', '', 1692000, '-'),
(184, 'INC0015', '8778', 'KD0002', '11/08/2016', 1, '27', '1', 90000, 90000, 1, '1', 'Koala.jpg', '', 19000, '-'),
(185, 'INC0016', '7676', 'KD0002', '11/08/2016', 1, '25', '1', 100000, 100000, 1, '', 'Koala.jpg', '', 19000, '678'),
(186, 'INC0017', '6767', 'KD0002', '11/08/2016', 1, '27', '1', 100000, 100000, 1, '', 'Koala.jpg', '', 19000, '6868'),
(187, 'INC0018', '76868', 'KD0002', '11/08/2016', 2, '27', '12', 100000, 2160000, 1, '', 'Koala.jpg', '', 456000, '79797'),
(188, 'INC0019', '45466476', 'KD0002', '11/08/2016', 1, '27', '1', 90000, 90000, 1, '1', 'Koala.jpg', '', 19000, '-'),
(189, 'INC0020', '5677', 'KD0002', '11/08/2016', 2, '27', '1', 90000, 180000, 1, '1', 'Koala.jpg', '', 38000, '-'),
(190, 'INC0021', '123456789', 'KD0001', '11/12/2016', 10, '25', '1', 100000, 1000000, 1, '0', 'Chrysanthemum.jpg', '', 110000, 'asdasdasdad'),
(191, 'INC0022', '', 'KD0001', '11/12/2016', 10, '25', '1', 100000, 1000000, 0, '0', 'Chrysanthemum.jpg', '', 0, ''),
(192, 'INC0022', '', 'KD0002', '11/12/2016', 3, '25', '1', 90000, 270000, 0, '1', 'Koala.jpg', '', 0, ''),
(193, 'INC0023', '145623', 'KD0001', '11/14/2016', 2, '25', '1', 100000, 200000, 1, '0', 'Chrysanthemum.jpg', '', 22000, 'asfasfasfas'),
(194, 'INC0024', '', 'KD0002', '11/17/2016', 6, '25', '1', 90000, 540000, 0, '0', 'Koala.jpg', '', 156000, '767868'),
(195, 'INC0025', '', 'KD0002', '11/18/2016', 6, '25', '1', 90000, 540000, 0, '5', 'Koala.jpg', '', 114000, 'ket'),
(196, 'INC0026', '', 'KD0002', '11/18/2016', 6, '25', '1', 90000, 540000, 0, '5', 'Koala.jpg', '', 114000, '7686'),
(197, 'INC0026', '', 'KD0002', '11/18/2016', 6, '25', '1', 90000, 540000, 0, '5', 'Koala.jpg', '', 114000, '768'),
(198, 'INC0027', '', 'KD0002', '11/18/2016', 6, '25', '1', 90000, 540000, 0, '5', 'Koala.jpg', '', 114000, 'd'),
(199, 'INC0027', '', 'KD0002', '11/18/2016', 6, '25', '1', 90000, 540000, 0, '5', 'Koala.jpg', '', 114000, 'd'),
(200, 'INC0028', '', 'KD0002', '11/18/2016', 6, '25', '1', 90000, 540000, 0, '5', 'Koala.jpg', '', 114000, 'as'),
(201, 'INC0028', '', 'KD0002', '11/18/2016', 6, '25', '1', 90000, 540000, 0, '5', 'Koala.jpg', '', 114000, 'as'),
(202, 'INC0029', '', 'KD0002', '11/18/2016', 5, '25', '1', 90000, 450000, 0, '5', 'Koala.jpg', '', 95000, 'dsds'),
(203, 'INC0030', '', 'KD0002', '11/18/2016', 6, '25', '1', 90000, 540000, 0, '5', 'Koala.jpg', '', 114000, 'sa');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jenissatuan`
--

CREATE TABLE IF NOT EXISTS `tbl_jenissatuan` (
  `id_jenissatuan` int(3) NOT NULL AUTO_INCREMENT,
  `satuan` varchar(40) NOT NULL,
  `nilai` int(5) NOT NULL,
  PRIMARY KEY (`id_jenissatuan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_jenissatuan`
--

INSERT INTO `tbl_jenissatuan` (`id_jenissatuan`, `satuan`, `nilai`) VALUES
(5, 'Lusin', 12),
(6, 'Kodi', 20);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE IF NOT EXISTS `tbl_kategori` (
  `id_kategori` int(4) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(50) NOT NULL,
  `img` text NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nama_kategori`, `img`) VALUES
(1, 'GIRLS', 'K.jpg'),
(2, 'BOYS', 'K2.jpg'),
(3, 'BABY', 'K4.jpg'),
(4, 'SWIMWEAR', 'K3.jpg'),
(5, 'OTHERS', 'K5.jpg'),
(6, 'REWARD POINT', 'K6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_konfirmasi`
--

CREATE TABLE IF NOT EXISTS `tbl_konfirmasi` (
  `id_konfirmasi` int(5) NOT NULL AUTO_INCREMENT,
  `no_rekening` text NOT NULL,
  `email` varchar(26) NOT NULL,
  `jumlah_transfer` int(12) NOT NULL,
  `atas_nama` varchar(26) NOT NULL,
  `nama_bank` varchar(15) NOT NULL,
  `invoice` varchar(20) NOT NULL,
  `no_resi` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(3) NOT NULL,
  `gambar` text NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id_konfirmasi`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Dumping data for table `tbl_konfirmasi`
--

INSERT INTO `tbl_konfirmasi` (`id_konfirmasi`, `no_rekening`, `email`, `jumlah_transfer`, `atas_nama`, `nama_bank`, `invoice`, `no_resi`, `tanggal`, `status`, `gambar`, `keterangan`) VALUES
(34, '777777777777', 'zukiungu@gmail.com', 888888, 'adi', 'BRI', 'INC0001', '', '2016-10-25 11:37:53', 0, 'Jellyfish.jpg', 'bandung aja'),
(35, '777777777777', 'zukiungu@gmail.com', 888888, 'adi', 'BRI', 'INC0001', '', '2016-10-25 11:43:07', 0, 'Hydrangeas.jpg', 'w'),
(36, '344', 'pondoksoft@gmail.com', 543535, 'fdsfsd', '53453', 'INC0002', '300', '2016-10-25 11:45:00', 1, 'Lighthouse.jpg', 'fdsffs'),
(37, '545445', 'rainkids.stocklot2@gmail', 300000, 'boy', 'asdas', 'INC0003', '', '2016-10-26 04:33:24', 1, 'LOKER.jpg', 'asdasdasdasdasdasdasdasdasd'),
(38, '8787979', 'zukiungu@gmail.com', 3300000, 'okii', 'bri', 'INC0005', '23456', '2016-11-03 17:23:11', 1, '12105.JPG', 'tes'),
(39, '0950787503', 'ivangenzi@gmail.com', 110000, 'ivan arafat', 'bca', 'INC0009', 'jne 09888887666666', '2016-11-06 01:25:16', 1, 'colorbars.jpg', 'jl ratu'),
(40, 'fwetrwerwr', '', 0, 'rwerw', 'erwerw', 'INC0031', '', '2016-11-07 06:06:27', 0, 'kubu.jpg', 'werwerw'),
(41, 'eweq', 'adofadhoil@gmail.com', 0, 'eqweqwe', 'qewq', 'INC0010', '', '2016-11-07 06:49:49', 0, 'mobo.PNG', 'erfqew'),
(42, '2323232323', 'RAINKIDS.STOCKLOT2@GMAIL', 1070000, 'BOY', 'BAC', 'INC0011', '', '2016-11-07 07:15:57', 1, 'booth cntoh.jpg', 'ASDASDASD'),
(43, '0950787503', 'ivangenzi@gmail.com', 600000, 'ivan arafat', 'bca', 'INC0012', '1111111111jne', '2016-11-08 01:08:06', 1, 'connected_multiple.jpg', 'mjy'),
(44, '68766', 'zukiungu@gmail.com', 786868, '7', '86876', 'INC0013', '5', '2016-11-08 07:39:23', 1, '45.png', '576575'),
(45, '5757', 'zukiungu@gmail.com', 5757, '5757', '65757', 'INC0014', '6767', '2016-11-08 07:57:46', 1, '30101.png', '67676'),
(46, '76', 'zukiungu@gmail.com', 6867, '676', '6686', 'INC0015', '8778', '2016-11-08 08:00:08', 1, '30101.png', '898'),
(47, '57', 'yutut@hjhjh.fs', 75757, '575', '5757', 'INC0016', '7676', '2016-11-08 08:02:31', 1, '30103.png', '686878'),
(48, '7', '6867', 97979, '979797', '99797', 'INC0017', '6767', '2016-11-08 08:04:40', 1, '30103.png', '6768'),
(49, '7686', '7979', 67686, '686868', '86868', 'INC0018', '76868', '2016-11-08 08:06:13', 1, '30102.png', '87687'),
(50, '57675', 'zukiungu@gmail.com', 7567757, '575', '75757', 'INC0019', '45466476', '2016-11-08 08:08:11', 1, '30101.png', '7868'),
(51, '768', 'zukiungu@gmail.com', 66, '6868', '6868', 'INC0020', '5677', '2016-11-08 08:09:52', 1, '30102.png', '67676'),
(52, '4677754', '', 67765, 'Ggxxff', 'Bca', 'INC0035', '', '2016-11-10 10:54:10', 0, 'IMG_20161110_122934_HDR.jpg', 'Ffghhff'),
(53, '212133344', 'RAINKIDS.STOCKLOT2@GMAIL', 1110000, 'boy', 'asd', 'INC0021', '123456789', '2016-11-12 02:30:52', 1, 'BIP.jpg', 'asd'),
(54, 'wsaSAS', 'RAINKIDS.STOCKLOT2@GMAIL', 0, 'asAs', 'asaSAs', 'INC0023', '145623', '2016-11-14 02:52:02', 1, 'BIP.jpg', 'sasaSAs');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kota`
--

CREATE TABLE IF NOT EXISTS `tbl_kota` (
  `id_kota` int(3) NOT NULL AUTO_INCREMENT,
  `id_provinsi` varchar(100) NOT NULL,
  `kota` varchar(200) NOT NULL,
  `ongkos` int(20) NOT NULL,
  PRIMARY KEY (`id_kota`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `tbl_kota`
--

INSERT INTO `tbl_kota` (`id_kota`, `id_provinsi`, `kota`, `ongkos`) VALUES
(14, '7', 'BANDAR LAMPUNG', 19000),
(13, '19', 'BANDA ACEH', 33000),
(12, '18', 'BALIKPAPAN', 30000),
(11, '6', 'ASAHAN', 47000),
(10, '9', 'JAKARTA', 11000),
(15, '10', 'BANDUNG', 7000),
(17, '21', 'BANJARMASIN', 28000),
(18, '11', 'BANYUMAS', 22000),
(19, '12', 'BANYUWANGI', 47000),
(20, '22', 'BATAM', 25000),
(21, '10', 'BEKASI', 11000),
(22, '10', 'BOGOR', 11000),
(23, '23', 'CILEGON', 13000),
(24, '15', 'DENPASAR', 20000),
(25, '10', 'DEPOK', 11000),
(26, '10', 'GARUT', 9000),
(27, '12', 'GRESIK', 18000),
(28, '10', 'KARAWANG', 11000),
(29, '24', 'MAKASSAR', 26000),
(30, '12', 'MALANG', 22000),
(31, '25', 'MANADO', 41000),
(32, '16', 'MATARAM', 28000),
(33, '6', 'MEDAN', 25000),
(34, '7', 'PADANG', 25000),
(35, '11', 'SEMARANG', 16000),
(36, '11', 'SOLO', 16000),
(37, '23', 'TANGERANG', 11000),
(38, '14', 'YOGYAKARTA', 16000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE IF NOT EXISTS `tbl_member` (
  `id_member` int(4) NOT NULL AUTO_INCREMENT,
  `kode_member` varchar(20) NOT NULL,
  `nama_member` varchar(10) NOT NULL,
  `nama_belakang` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  `email_member` varchar(55) NOT NULL,
  `no_hp` text NOT NULL,
  `alamat_member` text NOT NULL,
  `point` int(5) NOT NULL,
  `status` int(3) NOT NULL,
  `tanggal_register` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_member`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`id_member`, `kode_member`, `nama_member`, `nama_belakang`, `username`, `password`, `email_member`, `no_hp`, `alamat_member`, `point`, `status`, `tanggal_register`) VALUES
(26, '01234567891011', 'BOY', 'BOBOBOI', 'BOY', 'BOBOBOI', 'RAINKIDS.STOCKLOT2@GMAIL.COM', '0821545654125', 'JL BATU ABC NO 5', 0, 1, '2016-11-07 07:10:06'),
(25, '111', 'Ivan', 'arafat', 'ivan', '123', 'ivangenzi@gmail.com', '', 'bdg', 6, 1, '2016-11-06 01:18:18'),
(21, '123', 'zuki', 'vixi', 'zuki', 'zuki', 'zukiungu@gmail.com', '676767676767676767', 'hyuyi', 32, 1, '2016-10-25 11:48:40'),
(27, '555', '555', '555', '555', '555', '555', '555', '555', 0, 1, '2016-11-17 16:59:01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_point`
--

CREATE TABLE IF NOT EXISTS `tbl_point` (
  `kode_point` varchar(20) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `point` int(5) NOT NULL,
  `img1` text NOT NULL,
  `img2` text NOT NULL,
  `img3` text NOT NULL,
  `date` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_point`
--

INSERT INTO `tbl_point` (`kode_point`, `nama_produk`, `point`, `img1`, `img2`, `img3`, `date`, `keterangan`) VALUES
('PNT.0001', 'jalan jalan ke bali', 4, 'Lighthouse.jpg', 'Tulips.jpg', 'Desert.jpg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk`
--

CREATE TABLE IF NOT EXISTS `tbl_produk` (
  `kode_produk` varchar(20) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `harga_nonmember` int(10) NOT NULL,
  `harga_member` int(10) NOT NULL,
  `nama_kategori` varchar(30) NOT NULL,
  `img1` text NOT NULL,
  `img2` text NOT NULL,
  `img3` text NOT NULL,
  `date` text NOT NULL,
  `keterangan` text NOT NULL,
  `type` varchar(25) NOT NULL,
  `berat` text NOT NULL,
  `aktif` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_produk`
--

INSERT INTO `tbl_produk` (`kode_produk`, `nama_produk`, `harga_nonmember`, `harga_member`, `nama_kategori`, `img1`, `img2`, `img3`, `date`, `keterangan`, `type`, `berat`, `aktif`) VALUES
('KD0002', 'coba 2', 100000, 90000, 'BABY', 'Koala.jpg', 'Penguins.jpg', 'Tulips.jpg', '', '<p>\n	-</p>\n', 'terbaru', '1', 1),
('KD0001', 'coba 1', 120000, 100000, 'GIRLS', 'Chrysanthemum.jpg', 'Desert.jpg', 'Hydrangeas.jpg', '', '<p>\n	-</p>\n', 'terbaru', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_provinsi`
--

CREATE TABLE IF NOT EXISTS `tbl_provinsi` (
  `id_provinsi` int(3) NOT NULL AUTO_INCREMENT,
  `id_kota` varchar(100) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  PRIMARY KEY (`id_provinsi`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `tbl_provinsi`
--

INSERT INTO `tbl_provinsi` (`id_provinsi`, `id_kota`, `provinsi`) VALUES
(7, '', 'SUMATERA BARAT'),
(6, '', 'SUMATERA UTARA'),
(8, '', 'RIAU'),
(9, '', 'DKI JAKARTA'),
(10, '', 'JAWA BARAT'),
(11, '', 'JAWA TENGAH'),
(12, '', 'JAWA TIMUR'),
(14, '', 'DAERAH ISTIMEWA YOGYAKARTA'),
(15, '', 'BALI'),
(16, '', 'NUSA TENGGARA BARAT'),
(17, '', 'KALIMANTAN BARAT'),
(18, '', 'KALIMANTAN TIMUR'),
(19, '', 'NANGGRO ACEH DARUSSALAM'),
(20, '', 'LAMPUNG'),
(21, '', 'KALIMANTAN SELATAN'),
(22, '', 'KEPULAUAN RIAU'),
(23, '', 'BANTEN'),
(24, '', 'SULAWESI SELATAN'),
(25, '', 'SULAWESI UTARA');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_satuan`
--

CREATE TABLE IF NOT EXISTS `tbl_satuan` (
  `id_satuan` int(3) NOT NULL AUTO_INCREMENT,
  `kode_produk` varchar(20) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `harga_member` int(11) NOT NULL,
  `harga_nonmember` int(11) NOT NULL,
  PRIMARY KEY (`id_satuan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `tbl_satuan`
--

INSERT INTO `tbl_satuan` (`id_satuan`, `kode_produk`, `jenis`, `harga_member`, `harga_nonmember`) VALUES
(30, 'KD0002', 'kodi', 70000, 80000),
(29, 'KD0002', 'lusin', 80000, 90000),
(28, 'KD0001', 'kodi', 60000, 65000),
(27, 'KD0001', 'lusin', 70000, 80000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_set`
--

CREATE TABLE IF NOT EXISTS `tbl_set` (
  `id_set` int(3) NOT NULL AUTO_INCREMENT,
  `info` text NOT NULL,
  `set` text NOT NULL,
  PRIMARY KEY (`id_set`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tbl_set`
--

INSERT INTO `tbl_set` (`id_set`, `info`, `set`) VALUES
(1, 'point', '100000'),
(3, 'cara belanja', '<p>\n	&nbsp;</p>\n<p>\n	<strong><span style="font-size:14px;">1. Pilih item barang</span></strong></p>\n<p>\n	<strong><span style="font-size:14px;">2. Isi Quantity dan informasi mengenai barang</span></strong></p>\n<p>\n	<strong><span style="font-size:14px;">3. Check Out</span></strong></p>\n'),
(4, 'tentang_point', '<p>\r\n	tentang point</p>\r\n'),
(5, 'member', '<p>\r\n	ini memebrrr</p>\r\n'),
(6, 'about', '<p>\r\n	about</p>\r\n'),
(7, 'kontak', ''),
(8, 'karir', '<p>\r\n	ini karir</p>\r\n'),
(9, 'patner', ''),
(10, 'icon', ''),
(11, 'alamat', '<p>\n	bandung</p>\n'),
(12, 'email', ''),
(13, 'phone', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slide`
--

CREATE TABLE IF NOT EXISTS `tbl_slide` (
  `id_slide` int(11) NOT NULL AUTO_INCREMENT,
  `slide` text NOT NULL,
  `ket` text NOT NULL,
  PRIMARY KEY (`id_slide`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_slide`
--

INSERT INTO `tbl_slide` (`id_slide`, `slide`, `ket`) VALUES
(1, '1.jpg', ''),
(2, '2.jpg', ''),
(3, '3.jpg', ''),
(4, '4.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stok`
--

CREATE TABLE IF NOT EXISTS `tbl_stok` (
  `id_stok` int(4) NOT NULL AUTO_INCREMENT,
  `kode_produk` varchar(20) NOT NULL,
  `id_ukuran` int(3) NOT NULL,
  `id_warna` int(3) NOT NULL,
  `stok` int(7) NOT NULL,
  PRIMARY KEY (`id_stok`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `tbl_stok`
--

INSERT INTO `tbl_stok` (`id_stok`, `kode_produk`, `id_ukuran`, `id_warna`, `stok`) VALUES
(49, 'KD0002', 27, 0, 238),
(48, 'KD0002', 25, 0, 240),
(47, 'KD0001', 27, 0, 300),
(46, 'KD0001', 25, 0, 166);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tukarpoint`
--

CREATE TABLE IF NOT EXISTS `tbl_tukarpoint` (
  `id_transaksipoint` int(4) NOT NULL AUTO_INCREMENT,
  `kode_transaksi` varchar(20) NOT NULL,
  `kode_point` varchar(20) NOT NULL,
  `kode_member` varchar(20) NOT NULL,
  `gambar` text NOT NULL,
  `sisa_point` int(6) NOT NULL,
  `tanggal` text NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id_transaksipoint`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `tbl_tukarpoint`
--

INSERT INTO `tbl_tukarpoint` (`id_transaksipoint`, `kode_transaksi`, `kode_point`, `kode_member`, `gambar`, `sisa_point`, `tanggal`, `status`) VALUES
(8, 'KPONT0001', 'PNT.0001', '111', 'Lighthouse.jpg', 2, '11/08/2016', 0),
(9, 'KPONT0001', 'PNT.0001', '111', 'Lighthouse.jpg', 2, '11/08/2016', 0),
(10, 'KPONT0001', 'PNT.0001', '111', 'Lighthouse.jpg', 2, '11/08/2016', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ukuran`
--

CREATE TABLE IF NOT EXISTS `tbl_ukuran` (
  `id_ukuran` int(3) NOT NULL AUTO_INCREMENT,
  `ukuran` varchar(20) NOT NULL,
  PRIMARY KEY (`id_ukuran`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `tbl_ukuran`
--

INSERT INTO `tbl_ukuran` (`id_ukuran`, `ukuran`) VALUES
(25, '1 - 5'),
(27, '5 - 10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_warna`
--

CREATE TABLE IF NOT EXISTS `tbl_warna` (
  `id_warna` int(3) NOT NULL AUTO_INCREMENT,
  `warna` text NOT NULL,
  PRIMARY KEY (`id_warna`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
