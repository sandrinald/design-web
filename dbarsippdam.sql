-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2023 at 03:53 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbarsippdam`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbperjalanandinas`
--

CREATE TABLE `tbperjalanandinas` (
  `id_dinas` int(4) NOT NULL,
  `nama_pejabat` varchar(30) NOT NULL,
  `jabatan` enum('Direksi','Manager','Asman','Pelaksana') NOT NULL,
  `no_sppd` varchar(30) NOT NULL,
  `tujuan` varchar(30) NOT NULL,
  `tgl` date NOT NULL,
  `biaya` varchar(30) NOT NULL,
  `dokumen` varchar(30) NOT NULL,
  `nama_admin` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbperjalanandinas`
--

INSERT INTO `tbperjalanandinas` (`id_dinas`, `nama_pejabat`, `jabatan`, `no_sppd`, `tujuan`, `tgl`, `biaya`, `dokumen`, `nama_admin`) VALUES
(101, 'M. Eric Saktana, S.E.', 'Direksi', '008/SPPD/PDAM/2022', 'Cianjur', '2023-01-19', 'Rp 8.000.000', 'DINAS.pdf', 'Sandrina Luthfia Dewi'),
(102, 'Aldrin Primaguna', 'Pelaksana', '212/SPPD/PDAM/2022', 'Tangerang', '2022-09-30', 'Rp 5.000.000', 'DINAS.pdf', 'Efbram Pebriansyah'),
(103, 'Waisul ', 'Pelaksana', '934/SPPD/PDAM/2022', 'Batam', '2023-02-10', 'Rp 3.000.000', 'DINAS.pdf', 'Efbram Pebriansyah'),
(104, 'Tiara Anindita', 'Pelaksana', '612/SPPD/PDAM/2022', 'Pontianak', '2023-01-25', 'Rp 9.000.000', 'DINAS.pdf', 'Sandrina Luthfia Dewi'),
(105, 'Roihan', 'Asman', '058/SPPD/PDAM/2022', 'Lombok', '2023-04-13', 'Rp 7.500.000', 'DINAS.pdf', 'Sandrina Luthfia Dewi'),
(106, 'Palatanhar', 'Manager', '876/SPPD/PDAM/2022', 'Bekasi', '2023-01-16', 'Rp 7.000.000', 'DINAS.pdf', 'Efbram Pebriansyah');

-- --------------------------------------------------------

--
-- Table structure for table `tbrapat`
--

CREATE TABLE `tbrapat` (
  `id_rapat` int(4) NOT NULL,
  `agenda` varchar(100) NOT NULL,
  `tgl` date NOT NULL,
  `tempat` varchar(30) NOT NULL,
  `jenis` enum('Eksternal','Internal') NOT NULL,
  `dokumen` varchar(30) NOT NULL,
  `nama_admin` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbrapat`
--

INSERT INTO `tbrapat` (`id_rapat`, `agenda`, `tgl`, `tempat`, `jenis`, `dokumen`, `nama_admin`) VALUES
(121, 'Evaluasi Kinerja Triwulan', '2022-07-29', 'Graha Tirta Musi Palembang', 'Internal', 'RAPAT.pdf', 'Sandrina Luthfia Dewi'),
(122, 'Rencana Kerja dan Anggaran RKA Tahun 2023', '2023-02-09', 'Graha Tirta Musi Palembang', 'Internal', 'RAPAT.pdf', 'Efbram Pebriansyah'),
(123, 'Audiensi Koordinasi Penanganan Dampak Inflasi Untuk Masyarakat Berpenghasilan Rendah', '2022-07-18', 'BPKP Provinsi Sumatera Selatan', 'Eksternal', 'RAPAT.pdf', 'Efbram Pebriansyah'),
(124, 'Rapat Koordinasi Percepatan Pelaksanaan Peraturan Menteri Keuangan Nomor 134/PMK.07 Tahun 2022', '2023-02-11', 'Ruang Rapat SETDA II Kota Pale', 'Eksternal', 'RAPAT.pdf', 'Sandrina Luthfia Dewi'),
(125, 'Rapat pembahasan dan koordinasi mengenai penghargaan BUMD Award bersama kabag perekonomian setda', '2023-03-16', 'Ruang Rapat Gedung Utama', 'Internal', 'RAPAT.pdf', 'Efbram Pebriansyah'),
(126, 'Focus Group Discussion Laporan Akhir Kegiatan Updating Recana Induk Sistem Penyediaan Air Minum', '2023-01-17', 'BPKP Provinsi Sumatera Selatan', 'Eksternal', 'RAPAT.pdf', 'Sandrina Luthfia Dewi');

-- --------------------------------------------------------

--
-- Table structure for table `tbstaf`
--

CREATE TABLE `tbstaf` (
  `idstaf` varchar(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jeniskelamin` varchar(10) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `status` varchar(20) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbstaf`
--

INSERT INTO `tbstaf` (`idstaf`, `nama`, `jeniskelamin`, `alamat`, `status`, `foto`) VALUES
('01020', 'Efbram Pebriansyah', 'Pria', 'Jalan Akbp km5', 'Tidak Meminjam', '01020304.jpeg'),
('01030', 'Sandrina Luthfia Dewi', 'Wanita', 'Jalan Iswahyudi No 06', 'Tidak Meminjam', '01030.jpeg'),
('01040', 'Adita Trie Ramadani', 'Wanita', 'Plaju Ujung no 12', 'Tidak Meminjam', '01040.jpeg'),
('01050', 'Mardatilla Aqis', 'Wanita', 'Jalan AKBP Cek Agus', 'Tidak Meminjam', '01050.jpeg'),
('01060', 'Siti Okta Rina', 'Wanita', 'Jalan Karya Baru Lebong Gajah', 'Tidak Meminjam', '01060.jpeg'),
('01070', 'Diana Ranofa', 'Wanita', 'Perumahan Kota Palembang, Gandus', 'Tidak Meminjam', '01070.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tbsurat`
--

CREATE TABLE `tbsurat` (
  `id_surat` int(4) NOT NULL,
  `no_surat` varchar(30) NOT NULL,
  `tgl` date NOT NULL,
  `perihal` varchar(100) NOT NULL,
  `jenis` enum('Surat Masuk','Surat Keluar') NOT NULL,
  `dokumen` varchar(30) NOT NULL,
  `nama_admin` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbsurat`
--

INSERT INTO `tbsurat` (`id_surat`, `no_surat`, `tgl`, `perihal`, `jenis`, `dokumen`, `nama_admin`) VALUES
(101, '123/KEU/PDAM/XI/2021', '2021-11-30', 'Bantuan Penyusunan RAB dan Pengadaan Aplikai Penyusutan dan RKAP online', 'Surat Masuk', '01_1.pdf', 'Sandrina Luthfia Dewi'),
(102, '203/KEU/PDAM/VIII/2022', '2022-10-23', 'Usulan Pelatihan Brevet Pajak', 'Surat Masuk', '02.pdf', 'Sandrina Luthfia Dewi'),
(103, '233/KEU/PDAM/VIII/2022', '2022-08-29', 'Pembuatan SK RKAP 2023', 'Surat Masuk', '03.pdf', 'Sandrina Luthfia Dewi'),
(104, '110/KEU/PDAM/X/2021', '2021-10-28', 'Permintaan Dokumen Pembayaran Rekening KN', 'Surat Masuk', '04.pdf', 'Sandrina Luthfia Dewi'),
(105, '0193/986/PDAM/2022', '2022-07-12', 'Tanggapan atas Permohonan Kunjungan Kerja', 'Surat Masuk', '05.pdf', 'Sandrina Luthfia Dewi'),
(106, '005/002028/itko/2022', '2022-08-31', 'Undangan', 'Surat Masuk', '06.pdf', 'Efbram Pebriansyah'),
(107, '010/SMARTFM/KEU/III/2022', '2022-03-31', 'Tagihan', 'Surat Masuk', '07.pdf', 'Efbram Pebriansyah'),
(108, '800/1311/BPKAD/2021', '2021-12-21', 'Permintaan Data Proyeksi Pendapatan Tahun 2023', 'Surat Masuk', '08.pdf', 'Efbram Pebriansyah'),
(109, '005/184/CS/VIII/2022', '2022-08-25', 'Undangan', 'Surat Masuk', '09 (1).pdf', 'Efbram Pebriansyah'),
(110, '800/1311/BPKAD/2021', '2022-08-24', 'Ralat Undangan Kegiatan Pelaksanaan Hari Keluarga Nasional Tingkat Kota Palembang', 'Surat Masuk', '10.pdf', 'Efbram Pebriansyah');

-- --------------------------------------------------------

--
-- Table structure for table `tbuser`
--

CREATE TABLE `tbuser` (
  `iduser` varchar(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbuser`
--

INSERT INTO `tbuser` (`iduser`, `nama`, `jabatan`, `username`, `password`) VALUES
('0001', 'Sandrina Luthfia Dewi', 'Manager', 'sandrina', 'sandrina30'),
('0002', 'Efbram Pebriansyah', 'Asisten Manager', 'efbram', 'efbram'),
('0003', 'Administrator', 'Admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbperjalanandinas`
--
ALTER TABLE `tbperjalanandinas`
  ADD PRIMARY KEY (`id_dinas`);

--
-- Indexes for table `tbrapat`
--
ALTER TABLE `tbrapat`
  ADD PRIMARY KEY (`id_rapat`);

--
-- Indexes for table `tbstaf`
--
ALTER TABLE `tbstaf`
  ADD PRIMARY KEY (`idstaf`);

--
-- Indexes for table `tbsurat`
--
ALTER TABLE `tbsurat`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indexes for table `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`iduser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
