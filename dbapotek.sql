-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2016 at 01:35 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbapotek`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblbeli`
--

CREATE TABLE IF NOT EXISTS `tblbeli` (
  `id_beli` int(11) NOT NULL,
  `faktur` varchar(50) NOT NULL,
  `staff` varchar(50) NOT NULL,
  `namaobat` text NOT NULL,
  `harga` float NOT NULL,
  `jenis` text NOT NULL,
  `deskripsi` text NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbeli`
--

INSERT INTO `tblbeli` (`id_beli`, `faktur`, `staff`, `namaobat`, `harga`, `jenis`, `deskripsi`, `jumlah`, `tanggal`) VALUES
(1, '2232323', 'n00b', 'matamu', 2000, 'Bermerk', 'Kokoako', 2, '0000-00-00'),
(2, '290290920', 'Mirr', 'moko', 2000, 'Generik', 'kokoaok', 12, '0000-00-00'),
(3, '18981989', 'Mirr', 'kokakk', 2000, 'Paten Generik', 'kaokaoaa', 3, '0000-00-00'),
(4, '19821981', 'Mirr', 'spirin', 4000, 'Bermerk', 'Kokoa', 2, '0000-00-00'),
(5, '10920910', 'Mirr', 'ahsu', 2122, 'Paten Generik', 'kaoa', 2, '2016-03-14');

-- --------------------------------------------------------

--
-- Table structure for table `tblidentitas`
--

CREATE TABLE IF NOT EXISTS `tblidentitas` (
  `namaapotek` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblidentitas`
--

INSERT INTO `tblidentitas` (`namaapotek`, `alamat`, `telp`, `deskripsi`) VALUES
('Seger Waras', 'Jl. Mandala IV No.418 RT.16 RW.04', '081232555232', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dol');

-- --------------------------------------------------------

--
-- Table structure for table `tbljenis`
--

CREATE TABLE IF NOT EXISTS `tbljenis` (
  `jenis` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbljenis`
--

INSERT INTO `tbljenis` (`jenis`) VALUES
('Bermerk'),
('Generik'),
('Paten Generik');

-- --------------------------------------------------------

--
-- Table structure for table `tbljual`
--

CREATE TABLE IF NOT EXISTS `tbljual` (
  `id_jual` int(11) NOT NULL,
  `pembeli` varchar(150) NOT NULL,
  `tanggal` date NOT NULL,
  `faktur` varchar(30) NOT NULL,
  `namaobat` varchar(150) NOT NULL,
  `total` int(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbljual`
--

INSERT INTO `tbljual` (`id_jual`, `pembeli`, `tanggal`, `faktur`, `namaobat`, `total`) VALUES
(32, 'Sukimin', '2016-03-15', '1603150733', 'Aspirin', 12),
(33, 'Sukimin', '2016-03-15', '1603150733', 'Oskadon', 12);

-- --------------------------------------------------------

--
-- Table structure for table `tblobat`
--

CREATE TABLE IF NOT EXISTS `tblobat` (
  `id_obat` int(11) NOT NULL,
  `namaobat` text NOT NULL,
  `harga` float NOT NULL,
  `jenis` text NOT NULL,
  `deskripsi` text NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblobat`
--

INSERT INTO `tblobat` (`id_obat`, `namaobat`, `harga`, `jenis`, `deskripsi`, `stok`) VALUES
(2, 'Aspirin', 500, 'Generik', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 230),
(5, 'Oskadon', 2000, 'Bermerk', 'Obat loro ndas', 23),
(6, 'Paramex', 3000, 'Bermerk', 'Obat loro ndas', 2),
(7, 'OBH', 15000, 'Bermerk', 'Obat loro watuk', 23);

-- --------------------------------------------------------

--
-- Table structure for table `tblsaldo`
--

CREATE TABLE IF NOT EXISTS `tblsaldo` (
  `saldo` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE IF NOT EXISTS `tbluser` (
  `id_user` int(11) NOT NULL,
  `email` text NOT NULL,
  `nama` text NOT NULL,
  `password` text NOT NULL,
  `level` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`id_user`, `email`, `nama`, `password`, `level`) VALUES
(1, 'girij@ati.com', 'Mirr', '1234', '1'),
(5, 'admin@lariso.com', 'qweqee', 'SASASA', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblbeli`
--
ALTER TABLE `tblbeli`
  ADD PRIMARY KEY (`id_beli`);

--
-- Indexes for table `tblidentitas`
--
ALTER TABLE `tblidentitas`
  ADD PRIMARY KEY (`namaapotek`);

--
-- Indexes for table `tbljenis`
--
ALTER TABLE `tbljenis`
  ADD PRIMARY KEY (`jenis`);

--
-- Indexes for table `tbljual`
--
ALTER TABLE `tbljual`
  ADD PRIMARY KEY (`id_jual`);

--
-- Indexes for table `tblobat`
--
ALTER TABLE `tblobat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblbeli`
--
ALTER TABLE `tblbeli`
  MODIFY `id_beli` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbljual`
--
ALTER TABLE `tbljual`
  MODIFY `id_jual` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `tblobat`
--
ALTER TABLE `tblobat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
