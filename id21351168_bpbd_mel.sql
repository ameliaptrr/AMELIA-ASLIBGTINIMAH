-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 18, 2023 at 10:19 AM
-- Server version: 10.5.20-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id21351168_bpbd_mel`
--

-- --------------------------------------------------------

--
-- Table structure for table `laporan_kejadian`
--

CREATE TABLE `laporan_kejadian` (
  `id_laporan_kejadian` int(11) NOT NULL,
  `jenis_kejadian` varchar(80) NOT NULL,
  `waktu_kejadian` datetime NOT NULL,
  `lokasi_kejadian` text NOT NULL,
  `penyebab_kejadian` text NOT NULL,
  `kronologi_kejadian` text NOT NULL,
  `dampak` text NOT NULL,
  `upaya_yang_dilakukan` text NOT NULL,
  `kebutuhan_mendesak` text NOT NULL,
  `sumber_informasi` text NOT NULL,
  `dokumentasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laporan_kejadian`
--

INSERT INTO `laporan_kejadian` (`id_laporan_kejadian`, `jenis_kejadian`, `waktu_kejadian`, `lokasi_kejadian`, `penyebab_kejadian`, `kronologi_kejadian`, `dampak`, `upaya_yang_dilakukan`, `kebutuhan_mendesak`, `sumber_informasi`, `dokumentasi`) VALUES
(1, 'Kebakaran', '2023-09-09 12:41:14', 'Salawu', 'api unggun anak pramuka', 'main api ditengah jalan', 'jalanan terganggu dan tepi jalan terbakar habis', 'pemadaman oleh warga dengan air hujan', 'Obat, ..', 'Masyarakat setempat', 'foto/kebakaran.jpg'),
(8, 'Kebakaran Rumah', '2023-07-31 23:30:00', '- Kampung : Mandalawangi  - RT/RW : 005/005 - Desa : Ciroyom - Kecamatan : Bojonggambir - Kabupaten : Tasikmalaya ', 'Terjadinya kebakaran dari arus pendek listrik', ' terjadinya kebakaran berasal dari percikan api dari arus pendek listrik berasal dari atap rumah hingga terjadi kebakaran', '- Rumah Hangus Terbakar, ukuran 7m x 6 m, milik Sdr. Horis 52 tahun, jumlah jiwa 4 orang. - Dokumen Penting lainnya terbakar - Barang Berharga terbakar', '- Memadamkan Api  - masyarakat berbondong\" Mecari air dari rumah kerumah - upaya dari pemerintah  setempat, menempatkan korban sementara mengungsi di tetangga/keluarga    POTENSI  - Tidak ada Korban Jiwa, Di taksir kerugian mencapai 70 juta', '- Sandang Pangan - Obat-Obatan - Pakaian - dan tempat tinggal.', '- Pemerintah Desa Ciroyom - Relawan PB.', 'foto/kebakaran.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_pengguna` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('admin','masyarakat') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_pengguna`, `username`, `password`, `level`) VALUES
(7, 'amelia', '8cb2237d0679ca88db6464eac60da96345513964', 'admin'),
(8, 'iqlima', '6df3258a9c424ab47d146573b380ea6f7fc2d4c5', 'masyarakat'),
(10, 'Amelia', '8cb2237d0679ca88db6464eac60da96345513964', 'admin'),
(11, 'Amelia', '8cb2237d0679ca88db6464eac60da96345513964', 'admin'),
(12, 'amel', '356a192b7913b04c54574d18c28d46e6395428ab', 'masyarakat'),
(13, 'amel', '356a192b7913b04c54574d18c28d46e6395428ab', 'masyarakat');

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` int(11) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `email` varchar(80) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `judul_laporan` text NOT NULL,
  `isi_laporan` text NOT NULL,
  `photo` varchar(40) NOT NULL,
  `status` enum('0','proses','selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `tanggal`, `email`, `nama_lengkap`, `judul_laporan`, `isi_laporan`, `photo`, `status`) VALUES
(31, '2023-09-15 13:39:00', 'Amelia@gmail.com', 'Iqlima', 'Longsor', '', 'foto/longsor.jpg', '0'),
(36, '2023-09-16 14:59:00', 'driswandi342@gmail.com', 'Amelia', 'Banjir', 'ee', 'foto/banjir.jpg', '0'),
(41, '2023-10-12 13:43:00', '0053886190@smkn4-tsm.sch.id', 'AMELIA', 'gempa', 'Tolong untuk segera ditangani', 'foto/tes.jpg', '0'),
(42, '2023-10-16 13:24:00', 'lyra@smkn4-tsm.sch.id', 'Lyra Shakinah S', 'banjir', 'bantu', 'foto/download.jpg', '0'),
(43, '2023-11-09 13:31:00', 'Amelia@smkn4-tsm.sch.id', 'Amelia', 'test', 'tolong', 'foto/LAPORAN PKL ZAIDAN.docx', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tanggapan`
--

CREATE TABLE `tanggapan` (
  `id_tanggapan` int(11) NOT NULL,
  `id_pengaduan` int(11) NOT NULL,
  `id_laporan_kejadian` int(11) NOT NULL,
  `tgl_tanggapan` date NOT NULL,
  `tanggapan` text NOT NULL,
  `status` enum('0','proses','selesai') NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laporan_kejadian`
--
ALTER TABLE `laporan_kejadian`
  ADD PRIMARY KEY (`id_laporan_kejadian`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`);

--
-- Indexes for table `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD PRIMARY KEY (`id_tanggapan`,`id_pengaduan`,`id_laporan_kejadian`,`id_admin`),
  ADD KEY `id_pengaduan` (`id_pengaduan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laporan_kejadian`
--
ALTER TABLE `laporan_kejadian`
  MODIFY `id_laporan_kejadian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tanggapan`
--
ALTER TABLE `tanggapan`
  MODIFY `id_tanggapan` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
