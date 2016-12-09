-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
<<<<<<< HEAD
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 09, 2016 at 10:00 PM
=======
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2016 at 11:47 AM
>>>>>>> afa33100314e0d06b25e17115c0daa45ebeb79c2
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ekatalog_ta`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(3) NOT NULL,
  `nip` varchar(18) DEFAULT NULL,
  `nama` text,
  `alamat` varchar(70) DEFAULT NULL,
  `no_tlp` varchar(13) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(35) DEFAULT NULL,
  `image` text
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nip`, `nama`, `alamat`, `no_tlp`, `username`, `password`, `image`) VALUES
(1, '101981710910199504', 'I Putu Sugita Wiguna', 'Jln Trengguli GG IV D', '081236665664', 'admin', '21232f297a57a5a743894a0e4a801fc3', '101981710910199504.jpg'),
(3, '123124124123124124', 'asdasdasdasdasd', 'asdasdasdasd', '1231241241231', 'qwert', 'a384b6463fc216a5f8ecb6670f86456a', '123124124123124124.jpg'),
(9, '123123123123444444', 'dssdasdsadadasd000000', 'sdsdsdasdadasd', '1241253535353', '123123', '63ee451939ed580ef3c4b6f0109d1fd0', '123123123123444444.png'),
(11, '111111111111111111', '21312313asdddddd2222', 'asd', '1222222222222', 'sadasd', 'a8f5f167f44f4964e6c998dee827110c', '111111111111111111.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE IF NOT EXISTS `dosen` (
  `id_dosen` int(6) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `nama` text NOT NULL,
  `no_tlp` varchar(13) NOT NULL,
  `email` text NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `nip`, `nama`, `no_tlp`, `email`, `alamat`) VALUES
(1, '214748364712345678', 'asdasdads', '2147483647123', 'asdasdasdadsasd@asdasd.com', 'sadasdasdasdasd'),
(3, '213091209410294012', '4214124', '1239012301230', '1231@2313.com', 'qajnawdnawdnawd'),
(4, '903102182040120138', 'adnkadwnakdwk', '1239120310239', 'asdad@gmasda.com', 'oadjaodwoadwaowdl');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE IF NOT EXISTS `jurusan` (
  `id_jurusan` int(3) NOT NULL,
  `nama_jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`) VALUES
(1, 'Teknik Elektro'),
(2, 'Teknik Mesin'),
(3, 'Akuntansi');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `id_jurusan` int(3) NOT NULL,
  `id_prodi` int(3) NOT NULL,
<<<<<<< HEAD
=======
  `angkatan` int(4) NOT NULL,
>>>>>>> afa33100314e0d06b25e17115c0daa45ebeb79c2
  `jk` varchar(1) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

<<<<<<< HEAD
--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `id_jurusan`, `id_prodi`, `jk`, `email`) VALUES
('1415323040', 'I Putu Sugita Wiguna', 1, 1, 'L', 'sugita95@hotmail.com');

=======
>>>>>>> afa33100314e0d06b25e17115c0daa45ebeb79c2
-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id_member` int(6) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `no_id` int(18) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `image` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE IF NOT EXISTS `prodi` (
  `id_prodi` int(3) NOT NULL,
  `id_jurusan` int(3) NOT NULL,
  `nama_prodi` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `id_jurusan`, `nama_prodi`) VALUES
(1, 1, 'D3 Manajemen Informatika'),
(2, 2, 'D3 Teknik Mesein'),
(3, 1, 'D3 Teknik Listrik'),
(5, 3, 'D3 Akuntansi');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_prodi`
--
CREATE TABLE IF NOT EXISTS `view_prodi` (
`id_prodi` int(3)
,`nama_jurusan` varchar(50)
,`nama_prodi` varchar(50)
);

-- --------------------------------------------------------

--
-- Structure for view `view_prodi`
--
DROP TABLE IF EXISTS `view_prodi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_prodi` AS select `m1`.`id_prodi` AS `id_prodi`,`m2`.`nama_jurusan` AS `nama_jurusan`,`m1`.`nama_prodi` AS `nama_prodi` from (`jurusan` `m2` join `prodi` `m1` on((`m2`.`id_jurusan` = `m1`.`id_jurusan`)));

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id_prodi` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
