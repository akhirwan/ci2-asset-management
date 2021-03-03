-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2018 at 10:36 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_amits`
--

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `area_id` varchar(50) NOT NULL,
  `area_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`area_id`, `area_name`) VALUES
('AREA0002', 'Central Receiving'),
('AREA0003', 'Main Gate'),
('AREA1810180001', 'P3'),
('AREA1810220001', 'Mezzanine');

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE `assets` (
  `id` int(50) NOT NULL,
  `ast_id` varchar(50) NOT NULL,
  `ast_name` varchar(100) NOT NULL,
  `cat_id` varchar(50) NOT NULL,
  `person_id` varchar(50) NOT NULL,
  `area_id` varchar(50) NOT NULL,
  `ast_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assets`
--

INSERT INTO `assets` (`id`, `ast_id`, `ast_name`, `cat_id`, `person_id`, `area_id`, `ast_desc`) VALUES
(2, 'AST1810180001', 'CPU', 'CAT0003', 'USER1810290002', 'AREA1810220001', 'erweqfwefweqdfde'),
(3, 'AST1810190001', 'qweq', 'CAT0002', 'AK', 'AREA1810180001', 'asdasd'),
(4, 'AST1810240001', 'CPU', 'CAT0003', 'USER1810310001', 'AREA1810180001', 'yuyuyuyuy'),
(5, 'AST1810240002', 'inkyun', 'CAT0003', 'HI', 'AREA1810220001', 'rtyrty'),
(6, 'AST0001', 'inkyun', 'CAT0002', 'HI', 'AREA0002', 'werwerwerwerw'),
(7, 'AST1810240003', 'inkyun', 'CAT0002', 'USER1810290003', 'AREA0003', 'tetetetetete');

-- --------------------------------------------------------

--
-- Table structure for table `asset_spec`
--

CREATE TABLE `asset_spec` (
  `id` int(50) NOT NULL,
  `ast_id` varchar(50) NOT NULL,
  `attr` varchar(225) DEFAULT NULL,
  `value` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asset_spec`
--

INSERT INTO `asset_spec` (`id`, `ast_id`, `attr`, `value`) VALUES
(11, 'AST1810190001', 'Processor', 'Intel'),
(12, 'AST1810190001', 'Motherboard', 'Motherfucker'),
(13, 'AST1810190001', 'Hardisk', 'eweweewwee'),
(14, 'AST1810190001', 'RAM', 'eweweewwee'),
(15, 'AST1810190001', 'Operation System', 'eweweewwee'),
(16, 'AST1810190001', 'other', 'other'),
(17, 'AST1810190001', 'other', 'other'),
(18, 'AST1810190001', 'other', 'other'),
(19, 'AST1810190001', 'other', 'other'),
(20, 'AST1810190001', 'other', 'other'),
(31, '0', 'Processor', 'Intel'),
(32, '0', 'Processor', 'Intel'),
(33, 'AST1810180001', 'Processor', 'Intel'),
(34, 'AST1810180001', 'Motherboard', 'Gegebet'),
(35, 'AST1810180001', 'Harddisk', 'WD'),
(36, 'AST1810180001', 'RAM', 'DDR 3'),
(48, 'AST1810180001', 'Harddisk', 'Intel'),
(91, 'AST1810240003', 'Processor', ''),
(92, 'AST1810240003', 'Motherboard', ''),
(93, 'AST1810240003', 'Harddisk', ''),
(94, 'AST1810240003', 'RAM', ''),
(95, 'AST1810240003', 'Power Supply', ''),
(96, 'AST1810240003', 'other', ''),
(97, 'AST1810240003', 'other', ''),
(98, 'AST1810240003', 'other', ''),
(99, 'AST1810240003', 'other', ''),
(100, 'AST1810180001', 'IP Address', '172.16.10.99');

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

CREATE TABLE `assignments` (
  `id` int(50) NOT NULL,
  `asg_id` varchar(50) NOT NULL,
  `complaint_date` date NOT NULL,
  `complaints` text NOT NULL,
  `service_start` date NOT NULL,
  `service_end` date NOT NULL,
  `stat_id` varchar(50) NOT NULL,
  `support_by` varchar(225) NOT NULL,
  `support_by_last` varchar(225) NOT NULL,
  `ast_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignments`
--

INSERT INTO `assignments` (`id`, `asg_id`, `complaint_date`, `complaints`, `service_start`, `service_end`, `stat_id`, `support_by`, `support_by_last`, `ast_id`) VALUES
(1, 'SIGN1810300001', '2018-10-30', 'teu nanaon', '2018-10-30', '2018-10-30', 'STAT0001', 'Drs. Haji Dudunk', 'Drs. Haji Dudunk', 'AST1810180001'),
(2, 'SIGN1810300002', '2018-10-30', 'modar', '2018-10-30', '2018-10-31', 'STAT0002', 'Drs. Haji Dudunk', 'Drs. Haji Dudunk', 'AST1810180001'),
(3, 'SIGN1810310001', '2018-10-31', 'hese', '2018-10-31', '2018-10-31', 'STAT0003', 'Drs. Haji Dudunk', 'Drs. Haji Dudunk', 'AST1810180001'),
(4, 'SIGN1810310002', '2018-10-31', 'tetetetetetet\r\n', '2018-10-31', '2018-10-31', 'STAT0002', 'Drs. Haji Dudunk', 'Drs. Haji Dudunk', 'AST1810240003'),
(6, 'SIGN1811010001', '2018-11-01', 'qwerty tryrt fghdfghdfg', '2018-11-01', '2018-11-02', 'STAT0002', 'Drs. Haji Dudunk', 'Drs. Haji Dudunk', 'AST1810180001');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` varchar(50) NOT NULL,
  `cat_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`) VALUES
('CAT0002', 'Software'),
('CAT0003', 'Hardware'),
('CAT0004', 'dsfsd');

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `id` varchar(5) NOT NULL,
  `app_name` varchar(225) NOT NULL,
  `company` varchar(225) NOT NULL,
  `address` varchar(225) NOT NULL,
  `phone1` varchar(225) NOT NULL,
  `phone2` varchar(225) NOT NULL,
  `fax` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `url` varchar(225) NOT NULL,
  `about` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`id`, `app_name`, `company`, `address`, `phone1`, `phone2`, `fax`, `email`, `url`, `about`) VALUES
('1', 'A.M.I.T.S', 'Trans Studio Bandung', 'jl. Gatot Subroto 289, Bandung 40273', '022-86012555', '022-', '022-', 'it.support@transstudiobandung.co.id', 'www', 'Asset Management of IT System');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `dept_id` varchar(50) NOT NULL,
  `dept_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`dept_id`, `dept_name`) VALUES
('DEPT0001', 'IT Support'),
('DEPT0002', 'Finance and Accounting'),
('DEPT0003', 'Service and Operations');

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `lvl_id` varchar(50) NOT NULL,
  `lvl_name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`lvl_id`, `lvl_name`) VALUES
('LVL0001', 'General Manager'),
('LVL0002', 'General Manager Deputy'),
('LVL0003', 'Department Head / Manager'),
('LVL0004', 'Assistant Manager'),
('LVL0005', 'Supervisor'),
('LVL0006', 'Staff'),
('LVL0007', 'Superadmin');

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE `persons` (
  `id` int(50) NOT NULL,
  `person_id` varchar(50) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `full_name` varchar(225) NOT NULL,
  `pwd` varchar(225) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dept_id` varchar(50) NOT NULL,
  `lvl_id` varchar(225) NOT NULL,
  `inactive` int(50) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`id`, `person_id`, `nik`, `user_name`, `full_name`, `pwd`, `email`, `dept_id`, `lvl_id`, `inactive`) VALUES
(1, 'USER1810290001', '1104489', 'dudunk', 'Drs. Haji Dudunk', '0476bad9c0a260b6456c675a5f11ea56', 'it.support@transstudiobandung.co.id', 'DEPT0001', 'LVL0007', 0),
(4, 'USER1810290002', '1104489', 'akhirwan', 'Akhirwan Novendi', '0476bad9c0a260b6456c675a5f11ea56', 'akhirwan.novendi@transstudiobandung.co.id', 'DEPT0001', 'LVL0007', 0),
(5, 'USER1810290003', '1104489', 'qwerty', 'Qwerty Uiop', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'qwerty@transstudiobandung.co.id', 'DEPT0002', 'LVL0006', 1),
(6, 'USER1810310001', '1104489', 'sengseong', 'jhgfkjhgjhgg', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'seng@transstudiobandung.co.id', 'DEPT0003', 'LVL0006', 0);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `stat_id` varchar(50) NOT NULL,
  `stat_name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`stat_id`, `stat_name`) VALUES
('STAT0001', 'Done'),
('STAT0002', 'On Progress'),
('STAT0003', 'Pending'),
('STAT0004', 'Canceled');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `kd_barang` varchar(5) NOT NULL,
  `nm_barang` varchar(20) NOT NULL,
  `stok` int(10) NOT NULL,
  `harga` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_barang`
--

INSERT INTO `tbl_barang` (`kd_barang`, `nm_barang`, `stok`, `harga`) VALUES
('B-001', 'Notebook', 12, 4000000),
('B-002', 'Monitor', 12, 600000),
('B-003', 'Printer', 12, 750000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(1) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `alamat` text,
  `telp` varchar(30) DEFAULT NULL,
  `email` varchar(225) DEFAULT NULL,
  `website` varchar(225) DEFAULT NULL,
  `owner` varchar(30) DEFAULT NULL,
  `desc` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `nama`, `alamat`, `telp`, `email`, `website`, `owner`, `desc`) VALUES
(1, 'A.M.I.T.S', 'Bandung', '08123456789', 'akhirwan.novendi@transstudiobandung.co.id', 'it.support@transstudiobandung.co.id', 'IT Support TSB', 'Asset Management of Information Technology System');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pegawai`
--

CREATE TABLE `tbl_pegawai` (
  `kd_pegawai` varchar(5) NOT NULL DEFAULT '0',
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL,
  `nama` varchar(25) DEFAULT NULL,
  `level` enum('pegawai','admin') DEFAULT 'pegawai'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pegawai`
--

INSERT INTO `tbl_pegawai` (`kd_pegawai`, `username`, `password`, `nama`, `level`) VALUES
('K-001', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Gilang Sonar', 'admin'),
('K-002', 'gilang', 'd85e336d61f5344395c42126fac239bc', 'User Pegawai', 'pegawai');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pelanggan`
--

CREATE TABLE `tbl_pelanggan` (
  `kd_pelanggan` varchar(5) NOT NULL,
  `nm_pelanggan` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pelanggan`
--

INSERT INTO `tbl_pelanggan` (`kd_pelanggan`, `nm_pelanggan`, `alamat`, `email`) VALUES
('P-001', 'RS. Sardjito', 'Kompleks UGM', 'mail@sardjito.com'),
('P-002', 'Hotel Ibis', 'Malioboro', 'mail@ibis-hotel.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penjualan_detail`
--

CREATE TABLE `tbl_penjualan_detail` (
  `kd_penjualan` varchar(5) NOT NULL,
  `kd_barang` varchar(10) NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_penjualan_detail`
--

INSERT INTO `tbl_penjualan_detail` (`kd_penjualan`, `kd_barang`, `qty`) VALUES
('O-001', 'B-001', 2),
('O-001', 'B-002', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penjualan_header`
--

CREATE TABLE `tbl_penjualan_header` (
  `kd_penjualan` varchar(5) NOT NULL,
  `kd_pelanggan` varchar(10) NOT NULL,
  `total_harga` int(20) NOT NULL,
  `tanggal_penjualan` date NOT NULL,
  `kd_pegawai` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_penjualan_header`
--

INSERT INTO `tbl_penjualan_header` (`kd_penjualan`, `kd_pelanggan`, `total_harga`, `tanggal_penjualan`, `kd_pegawai`) VALUES
('O-001', 'P-002', 9800000, '2014-06-20', 'K-001');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`area_id`);

--
-- Indexes for table `assets`
--
ALTER TABLE `assets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `asset_spec`
--
ALTER TABLE `asset_spec`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assignments`
--
ALTER TABLE `assignments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `persons`
--
ALTER TABLE `persons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`stat_id`);

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`kd_barang`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  ADD PRIMARY KEY (`kd_pegawai`);

--
-- Indexes for table `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  ADD PRIMARY KEY (`kd_pelanggan`);

--
-- Indexes for table `tbl_penjualan_header`
--
ALTER TABLE `tbl_penjualan_header`
  ADD PRIMARY KEY (`kd_penjualan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assets`
--
ALTER TABLE `assets`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `asset_spec`
--
ALTER TABLE `asset_spec`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `assignments`
--
ALTER TABLE `assignments`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `persons`
--
ALTER TABLE `persons`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
