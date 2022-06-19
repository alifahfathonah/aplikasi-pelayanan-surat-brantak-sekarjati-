-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2022 at 07:28 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pelayanansurat`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jekel` enum('Laki-laki','Perempuan') NOT NULL,
  `role_id` int(2) NOT NULL,
  `password` varchar(225) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`id`, `nama`, `email`, `jekel`, `role_id`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@gmail.com', 'Laki-laki', 1, '$2y$10$zedAdfe5XgVeOX1MyqCK5uxwdlbZeI/jAh92IKfz/92IM7ROfTIuu', '2022-03-17 13:47:13', '0000-00-00 00:00:00'),
(2, 'Kepala Desa', 'kades@gmail.com', 'Laki-laki', 2, '$2y$10$Q93HdyfptAa5TQPWEd/BJewVoUu0k4Rlo9ke2taQU73vXxSwsJQ7q', '2022-03-17 13:47:51', '2022-03-31 17:56:46');

-- --------------------------------------------------------

--
-- Table structure for table `surat_domisili`
--

CREATE TABLE `surat_domisili` (
  `id` int(11) NOT NULL,
  `id_warga` int(11) NOT NULL,
  `jenis_surat` varchar(50) NOT NULL,
  `nomor_surat` varchar(20) NOT NULL,
  `tanggal_surat` varchar(25) NOT NULL,
  `tanggal_kadaluarsa` varchar(25) NOT NULL,
  `keperluan` text NOT NULL,
  `file_kk` varchar(225) NOT NULL,
  `file_ktp` varchar(225) NOT NULL,
  `status` varchar(20) NOT NULL,
  `komentar` text NOT NULL,
  `notifikasi` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `surat_kelahiran`
--

CREATE TABLE `surat_kelahiran` (
  `id` int(11) NOT NULL,
  `id_warga` int(11) NOT NULL,
  `jenis_surat` varchar(40) NOT NULL,
  `nomor_surat` varchar(20) NOT NULL,
  `tanggal_surat` varchar(20) NOT NULL,
  `tanggal_kadaluarsa` varchar(20) NOT NULL,
  `ayah` varchar(30) NOT NULL,
  `ibu` varchar(30) NOT NULL,
  `no_kk` int(16) NOT NULL,
  `nama_bayi` varchar(30) NOT NULL,
  `jekel_b` varchar(10) NOT NULL,
  `tempat_lahir_b` varchar(20) NOT NULL,
  `tanggal_lahir_b` date NOT NULL,
  `anak_ke` int(2) NOT NULL,
  `agama_b` varchar(10) NOT NULL,
  `kewarganegaraan_b` varchar(10) NOT NULL,
  `alamat_b` text NOT NULL,
  `keperluan` text NOT NULL,
  `file_kk` varchar(225) NOT NULL,
  `file_ktp` varchar(225) NOT NULL,
  `status` varchar(20) NOT NULL,
  `komentar` text DEFAULT NULL,
  `notifikasi` int(2) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `surat_kematian`
--

CREATE TABLE `surat_kematian` (
  `id` int(11) NOT NULL,
  `id_warga` int(11) NOT NULL,
  `jenis_surat` varchar(50) NOT NULL,
  `nomor_surat` varchar(20) NOT NULL,
  `tanggal_surat` varchar(25) NOT NULL,
  `tanggal_kadaluarsa` varchar(25) NOT NULL,
  `hubungan` varchar(100) NOT NULL,
  `nama_alm` varchar(50) NOT NULL,
  `bin` varchar(50) NOT NULL,
  `nik_a` varchar(30) NOT NULL,
  `jekel_a` varchar(15) NOT NULL,
  `tempat_lahir_a` varchar(20) NOT NULL,
  `tanggal_lahir_a` varchar(20) NOT NULL,
  `kewarganegaraan_a` varchar(5) NOT NULL,
  `status_perkawinan_a` varchar(10) NOT NULL,
  `pekerjaan_a` varchar(225) NOT NULL,
  `alamat_a` text NOT NULL,
  `file_kk` varchar(225) NOT NULL,
  `file_ktp` varchar(225) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `tanggal_meninggal` varchar(20) NOT NULL,
  `jam_meninggal` varchar(10) NOT NULL,
  `tempat_meninggal` varchar(225) NOT NULL,
  `sebab_meninggal` varchar(225) NOT NULL,
  `tempat_pemakaman` varchar(100) NOT NULL,
  `keperluan` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `komentar` text DEFAULT NULL,
  `notifikasi` int(2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `surat_keterangan_pengantar`
--

CREATE TABLE `surat_keterangan_pengantar` (
  `id` int(11) NOT NULL,
  `id_warga` int(11) NOT NULL,
  `jenis_surat` varchar(50) NOT NULL,
  `nomor_surat` varchar(20) NOT NULL,
  `tanggal_surat` varchar(20) NOT NULL,
  `tanggal_kadaluarsa` varchar(20) NOT NULL,
  `keperluan` text NOT NULL,
  `file_kk` varchar(100) NOT NULL,
  `file_ktp` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `komentar` text DEFAULT NULL,
  `notifikasi` int(2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `surat_tidak_mampu`
--

CREATE TABLE `surat_tidak_mampu` (
  `id` int(11) NOT NULL,
  `id_warga` int(11) NOT NULL,
  `jenis_surat` varchar(50) NOT NULL,
  `nomor_surat` varchar(50) NOT NULL,
  `tanggal_surat` varchar(25) NOT NULL,
  `tanggal_kadaluarsa` varchar(25) NOT NULL,
  `keperluan` text NOT NULL,
  `file_kk` varchar(225) NOT NULL,
  `file_ktp` varchar(225) NOT NULL,
  `status` varchar(20) NOT NULL,
  `notifikasi` int(2) NOT NULL,
  `komentar` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `surat_usaha`
--

CREATE TABLE `surat_usaha` (
  `id` int(11) NOT NULL,
  `id_warga` int(11) NOT NULL,
  `jenis_surat` varchar(50) NOT NULL,
  `nomor_surat` varchar(20) NOT NULL,
  `tanggal_surat` varchar(25) NOT NULL,
  `tanggal_kadaluarsa` varchar(25) NOT NULL,
  `nama_usaha` varchar(225) NOT NULL,
  `tgl_mulai` varchar(20) NOT NULL,
  `alamat_usaha` text NOT NULL,
  `keperluan` text NOT NULL,
  `file_kk` varchar(225) NOT NULL,
  `file_ktp` varchar(225) NOT NULL,
  `status` varchar(20) NOT NULL,
  `komentar` text NOT NULL,
  `notifikasi` varchar(2) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='f';

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `id_warga` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(225) NOT NULL,
  `role_id` int(2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `warga`
--

CREATE TABLE `warga` (
  `id_warga` int(11) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jekel` enum('Laki-laki','Perempuan') NOT NULL,
  `agama` varchar(10) NOT NULL,
  `golongan_darah` varchar(4) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `status_pernikahan` varchar(20) NOT NULL,
  `pekerjaan` varchar(225) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `rt` int(5) NOT NULL,
  `rw` int(5) NOT NULL,
  `alamat` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `warga`
--

INSERT INTO `warga` (`id_warga`, `nik`, `nama`, `jekel`, `agama`, `golongan_darah`, `pendidikan`, `status_pernikahan`, `pekerjaan`, `tempat_lahir`, `tgl_lahir`, `rt`, `rw`, `alamat`, `created_at`, `updated_at`) VALUES
(1, '123456789123456', 'Warga Desa Brantaksekarjati', 'Laki-laki', 'Islam', 'Tida', 'Tamat SMA/Sederajat', 'Belum Menikah', 'Freelancer', 'Jepara', '2000-02-02', 1, 3, 'Desa Brantaksekarjati, Rt.001/Rw.002 Kecamatan Welahan Kabupaten Jepara', '2022-04-02 00:03:14', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_domisili`
--
ALTER TABLE `surat_domisili`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_warga` (`id_warga`);

--
-- Indexes for table `surat_kelahiran`
--
ALTER TABLE `surat_kelahiran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_warga` (`id_warga`);

--
-- Indexes for table `surat_kematian`
--
ALTER TABLE `surat_kematian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_warga` (`id_warga`);

--
-- Indexes for table `surat_keterangan_pengantar`
--
ALTER TABLE `surat_keterangan_pengantar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_warga` (`id_warga`);

--
-- Indexes for table `surat_tidak_mampu`
--
ALTER TABLE `surat_tidak_mampu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wr` (`id_warga`);

--
-- Indexes for table `surat_usaha`
--
ALTER TABLE `surat_usaha`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_warga` (`id_warga`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`),
  ADD KEY `warga_rel` (`id_warga`);

--
-- Indexes for table `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`id_warga`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `surat_domisili`
--
ALTER TABLE `surat_domisili`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `surat_kelahiran`
--
ALTER TABLE `surat_kelahiran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `surat_kematian`
--
ALTER TABLE `surat_kematian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `surat_keterangan_pengantar`
--
ALTER TABLE `surat_keterangan_pengantar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `surat_tidak_mampu`
--
ALTER TABLE `surat_tidak_mampu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `surat_usaha`
--
ALTER TABLE `surat_usaha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `warga`
--
ALTER TABLE `warga`
  MODIFY `id_warga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `surat_domisili`
--
ALTER TABLE `surat_domisili`
  ADD CONSTRAINT `surat_domisili_ibfk_1` FOREIGN KEY (`id_warga`) REFERENCES `warga` (`id_warga`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `surat_kelahiran`
--
ALTER TABLE `surat_kelahiran`
  ADD CONSTRAINT `surat_kelahiran_ibfk_1` FOREIGN KEY (`id_warga`) REFERENCES `warga` (`id_warga`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `surat_kematian`
--
ALTER TABLE `surat_kematian`
  ADD CONSTRAINT `surat_kematian_ibfk_1` FOREIGN KEY (`id_warga`) REFERENCES `warga` (`id_warga`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `surat_keterangan_pengantar`
--
ALTER TABLE `surat_keterangan_pengantar`
  ADD CONSTRAINT `surat_keterangan_pengantar_ibfk_1` FOREIGN KEY (`id_warga`) REFERENCES `warga` (`id_warga`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `surat_tidak_mampu`
--
ALTER TABLE `surat_tidak_mampu`
  ADD CONSTRAINT `wr` FOREIGN KEY (`id_warga`) REFERENCES `warga` (`id_warga`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `surat_usaha`
--
ALTER TABLE `surat_usaha`
  ADD CONSTRAINT `surat_usaha_ibfk_1` FOREIGN KEY (`id_warga`) REFERENCES `warga` (`id_warga`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `warga_rel` FOREIGN KEY (`id_warga`) REFERENCES `warga` (`id_warga`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
