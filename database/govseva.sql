-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2022 at 07:48 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `govseva`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_buyer`
--

CREATE TABLE `tb_buyer` (
  `idb` int(100) NOT NULL,
  `bname` varchar(200) NOT NULL,
  `baadhar` varchar(11) NOT NULL,
  `bidtype` varchar(60) NOT NULL,
  `binum` varchar(50) NOT NULL,
  `bidproof` varchar(50) NOT NULL,
  `bphno3` varchar(30) NOT NULL,
  `baddress` varchar(250) NOT NULL,
  `bphoto` varchar(50) NOT NULL,
  `idus` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_nc`
--

CREATE TABLE `tb_nc` (
  `idnc` int(50) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `nname` varchar(100) NOT NULL,
  `idtype` varchar(50) NOT NULL,
  `inum` varchar(100) NOT NULL,
  `idproof` varchar(75) NOT NULL,
  `phno2` varchar(30) NOT NULL,
  `addr` text NOT NULL,
  `pin` varchar(30) NOT NULL,
  `yob1` varchar(20) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `idus` int(50) NOT NULL,
  `status` int(30) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_seller`
--

CREATE TABLE `tb_seller` (
  `ids` int(50) NOT NULL,
  `sname` varchar(150) NOT NULL,
  `saadhar` varchar(200) NOT NULL,
  `sphno3` varchar(200) NOT NULL,
  `sidtype` varchar(100) NOT NULL,
  `sinum` varchar(250) NOT NULL,
  `sidproof` varchar(200) NOT NULL,
  `knum` varchar(200) NOT NULL,
  `kproof` varchar(200) NOT NULL,
  `snum` varchar(200) NOT NULL,
  `spin` varchar(200) NOT NULL,
  `saddress` varchar(250) NOT NULL,
  `sphoto` varchar(150) NOT NULL,
  `idus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaction`
--

CREATE TABLE `tb_transaction` (
  `idt` int(30) NOT NULL,
  `tbid` int(30) NOT NULL,
  `tsid` int(30) NOT NULL,
  `tidus` int(30) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `phno` int(11) NOT NULL,
  `aadhar` varchar(12) NOT NULL,
  `yob` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `name`, `phno`, `aadhar`, `yob`) VALUES
(6, 'appu', 1, '1', 2000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_buyer`
--
ALTER TABLE `tb_buyer`
  ADD PRIMARY KEY (`idb`);

--
-- Indexes for table `tb_nc`
--
ALTER TABLE `tb_nc`
  ADD PRIMARY KEY (`idnc`);

--
-- Indexes for table `tb_seller`
--
ALTER TABLE `tb_seller`
  ADD PRIMARY KEY (`ids`);

--
-- Indexes for table `tb_transaction`
--
ALTER TABLE `tb_transaction`
  ADD PRIMARY KEY (`idt`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `aadhar` (`aadhar`),
  ADD UNIQUE KEY `phonenumber` (`phno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_buyer`
--
ALTER TABLE `tb_buyer`
  MODIFY `idb` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_nc`
--
ALTER TABLE `tb_nc`
  MODIFY `idnc` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_seller`
--
ALTER TABLE `tb_seller`
  MODIFY `ids` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_transaction`
--
ALTER TABLE `tb_transaction`
  MODIFY `idt` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
