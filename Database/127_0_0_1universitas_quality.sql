-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2015 at 06:22 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `universitas_quality`
--
CREATE DATABASE IF NOT EXISTS `universitas_quality` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `universitas_quality`;

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE IF NOT EXISTS `fakultas` (
  `id_fakultas` varchar(4) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `warna` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Informasi Fakultas';

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`id_fakultas`, `nama`, `gambar`, `warna`) VALUES
('FE', 'Fakultas Ekonomi', 'images/fak/ekonomi-kota.jpg', '#555555'),
('FH', 'Fakultas Hukum', 'images/fak/hukum.jpg', '#981318'),
('FKIP', 'Fakultas Keguruan & Ilmu Pendidikan', 'images/fak/pendidikan-sd.jpg', '#ffcd33'),
('FP', 'Fakultas Pertanian', 'images/fak/pertanian-labu.jpg', '#00803e'),
('FT', 'Fakultas Teknik', 'images/fak/teknik.jpg', '#ff8a00');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE IF NOT EXISTS `fasilitas` (
`id_fasilitas` int(11) NOT NULL,
  `id_fakultas` varchar(10) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasilitas`, `id_fakultas`, `nama`, `gambar`, `keterangan`) VALUES
(1, 'FP', 'Kebun Pendidikan', '', 'Untuk mempraktekkan teori dalam kelas, maka mahasiswa akan mendapatkan keuntungan yang lebih dengan langsung melakukan pada kegiatan di lapangan.'),
(2, 'FP', 'Screen House', '', 'Rumah dengan kontrol sepenuhnya dari praktikan, sehingga objek tidak terganggu oleh perubahan ilkim.'),
(3, 'FP', 'Laboratorium Pertanian', '', 'Dengan fasilitas alat-alat mutakhir yang yang sangat bermanfaat untuk meneliti objek.'),
(4, 'FE', 'Lab. Komputer', '', 'Di era degital sekarang ini komputer akan sangat membantu memajukan perekonomian. Oleh karena itu komputer merupakan perangkat penting yang patut untuk dikuasai.'),
(5, 'FE', 'Pojok UKM', '', 'Untuk Simulasi teori perekonomian diperlukan sarana untuk mempraktekkannya.'),
(6, 'FE', 'Pojok Bursa Efek', '', 'Untuk membantu mahasiswa mempelajari bagaimana sebenarnya pasar bursa pada dunia nyata.'),
(7, 'FKIP', 'Lab. Microteaching', '', 'Untuk melatih bagaimana mengajar yang baik dan benar, maka lab ini sangat penting untuk mensimulasikan lingkungan belajar yang sebenarnya.'),
(8, 'FT', 'Lab. Teknik Sipil', '', 'Dengan peralatan yang sesuai dengan tuntutan dunia dan berkualitas tinggi. Maka mahasiswa akan merasakan keuntungan dan kemudahan untuk mempelajarinya.'),
(9, 'FT', 'Lab. Fisika', '', 'Dengan peralatan high tech, setiap teori yang dipelajari akan mudah dicoba.'),
(10, 'FH', 'Klinis Hukum', '', 'Simulasi sidang, akan mempermudah mahasiswa untuk mengingat apa saja yang sudah dipelajari.');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE IF NOT EXISTS `prodi` (
`id_prodi` int(11) NOT NULL,
  `id_fakultas` varchar(10) NOT NULL,
  `nama_prodi` varchar(200) NOT NULL,
  `nomor_izin` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `id_fakultas`, `nama_prodi`, `nomor_izin`) VALUES
(1, 'FP', 'Teknologi Hasil Pertanian', 'No. Perp. Izin: 8750/D/T/K-I/2011'),
(2, 'FP', 'Agroteknologi', 'No. Perp. Izin: 8740/D/T/K-I/2011\r\n'),
(3, 'FP', 'Agribisnis', 'No. Perp. Izin: 8751/D/T/K-I/2011\r\n'),
(4, 'FE', 'Ekonomi Pembangunan', 'No. Perp. Izin: 7822/D/T/K-I/2011'),
(5, 'FE', 'Manajemen Bisnis', 'No. Perp. Izin: 7841/D/T/K-I/2011'),
(6, 'FE', 'Manajemen Keuangan', 'No. Perp. Izin: 7841/D/T/K-I/2011'),
(7, 'FE', 'Manajemen Pemasaran', 'No. Perp. Izin: 7841/D/T/K-I/2011'),
(8, 'FKIP', 'Pendidikan Pancasila dan Kewarganegaraan', 'No. Perp. Izin: 8752/D/T/K-I/2011'),
(9, 'FKIP', 'Pendidikan Guru SD', 'SK MENDIKBUD No: 275/E/O/2012'),
(10, 'FKIP', 'Pendidkan Matematika', 'No. Perp. Izin: 7843/D/T/K-I/2011'),
(11, 'FT', 'Teknik Industri', 'No. Perp. Izin: 8749/D/T/K-I/2011'),
(12, 'FT', 'Teknik Sipil', 'No. Perp. Izin: 7839/D/T/K-I/2011'),
(13, 'FH', 'Ilmu Hukum', 'No. Perp. Izin: 7842/D/T/K-I/2011');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
 ADD PRIMARY KEY (`id_fakultas`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
 ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
 ADD PRIMARY KEY (`id_prodi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
