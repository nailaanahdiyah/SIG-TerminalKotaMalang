-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2021 at 07:15 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prakgis_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `namalengkap` varchar(50) NOT NULL,
  `jk` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`username`, `password`, `namalengkap`, `jk`, `email`, `level`) VALUES
('bunga', '80219675a4b4f2bb1fa1e48fe8397f30', 'Shafa Risqi', 'perempuan', 'xx', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_keberangkatan`
--

CREATE TABLE `jadwal_keberangkatan` (
  `id` int(11) NOT NULL,
  `id_terminal` int(11) NOT NULL,
  `operator` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `jam_berangkat` varchar(20) NOT NULL,
  `jam_datang` varchar(30) NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `waktu_tempuh` varchar(30) NOT NULL,
  `harga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal_keberangkatan`
--

INSERT INTO `jadwal_keberangkatan` (`id`, `id_terminal`, `operator`, `kelas`, `jam_berangkat`, `jam_datang`, `tujuan`, `waktu_tempuh`, `harga`) VALUES
(1, 1, 'Dieng Travel', 'Reguler', '18.10', '23.10', 'Semarang - Terminal Simpang Lima', '5 jam', 'Rp. 160.000'),
(2, 1, 'Handoyo', 'Ekonomi AC', '19.00', '03.57', 'Semarang', '8 jam 52 menit', 'Rp. 105.000'),
(3, 1, 'Medali Mas', 'Eksekutif AC', '19.00', '04.30', 'Semarang - Agen Medali Mas Krapyak', '9 Jam 30 Menit', 'Rp. 160.000'),
(4, 2, 'Bagong', 'Non Ekonomi AC', '12.00', '15.00', 'Jombang - Terminal Kepuhsari', '3 Jam', 'Rp. 25.000'),
(5, 1, 'Gunung Harta', 'Executive', '07.30', '20.00', 'Jakarta - Terminal Kampung Rambutan', '12 Jam 30 menit', 'Rp. 450.000'),
(6, 1, 'Kramat Djati Jakarta', 'Executive', '12.30', '07.00', 'Jakarta - Terminal Pondok Pinang', '16 Jam 30 menit', 'Rp. 450.000'),
(7, 1, 'Lorena', 'Executive', '13.00', '03.48', 'Jakarta - Terminal Lebak Bulus', '14 Jam 48 Menit', 'Rp. 470.000'),
(8, 1, 'Malang Indah', 'Eksekutif', '17.00', '06.00', 'Bali - Terminal Mengwi', '13 Jam', 'Rp. 180.000'),
(9, 1, 'Midas Nusantara', 'Eksekutif', '17.30', '08.00', 'Bali - Terminal Mengwi', '14 Jam 30 Menit', 'Rp. 170.000'),
(10, 1, 'Menggala', '', '06.28', '07.50', 'Surabaya - Terminal Bungurasih', '1 Jam 27 Menit', 'Rp.30.000'),
(11, 1, 'Restu Panda', '', '07.24', '08.46', 'Surabaya - Terminal Bungurasih', '1 Jam 22 Menit', 'Rp. 15.000');

-- --------------------------------------------------------

--
-- Table structure for table `terminal`
--

CREATE TABLE `terminal` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `longitude` float NOT NULL,
  `latitude` float NOT NULL,
  `tipe` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `terminal`
--

INSERT INTO `terminal` (`id`, `nama`, `alamat`, `longitude`, `latitude`, `tipe`) VALUES
(1, 'Terminal Arjosari', 'Jl. Terusan Raden Intan No.1, Arjosari, Kec. Blimbing, Kota Malang, Jawa Timur 65126', 112.657, -7.93075, 'Terminal Bus'),
(2, 'Terminal Landungsari', 'Jl. Tlogomas, Dusun Rambaan, Landungsari, Kec. Dau, Malang, Jawa Timur 65151', 112.598, -7.92353, 'Terminal Bus'),
(3, 'Terminal Hamid Rusdi', 'Jl. Mayjen Sungkono No.11, Wonokoyo, Kec. Kedungkandang, Kota Malang, Jawa Timur 65135', 112.643, -8.02602, 'Terminal Bus'),
(4, 'SUB Terminal Madyopuro', 'Jl. Danau Jonge No.1, Madyopuro, Kec. Kedungkandang, Kota Malang, Jawa Timur 65139', 112.671, -7.97456, 'Terminal Angkutan Umum'),
(5, 'SUB Terminal Mulyorejo', 'Jl. Mulyorejo, Mulyorejo, Kec. Sukun, Kota Malang, Jawa Timur 65147', 112.599, -7.99057, 'Terminal Angkotan Umum'),
(6, 'Terminal Tasikmadu', 'Jl. Golf, Tasikmadu, Kota Malang, Jawa Timur', 112.629, -7.91291, 'Terminal Angkutan Umum'),
(7, 'Pangkalan Angkot AT', 'Jl. Himalaya, Karangbesuki, Kec. Sukun, Kota Malang, Jawa Timur 65151', 112.599, -7.9593, 'Terminal Angkutan Umum'),
(8, 'Terminal Gadang', 'Jl. Raya Gadang, Gadang, Kec. Sukun, Kota Malang, Jawa Timur 65149', 112.628, -8.02319, 'Terminal Angkutan Umum');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `jadwal_keberangkatan`
--
ALTER TABLE `jadwal_keberangkatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_terminal` (`id_terminal`);

--
-- Indexes for table `terminal`
--
ALTER TABLE `terminal`
  ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal_keberangkatan`
--
ALTER TABLE `jadwal_keberangkatan`
  ADD CONSTRAINT `jadwal_keberangkatan_ibfk_1` FOREIGN KEY (`id_terminal`) REFERENCES `terminal` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
