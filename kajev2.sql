-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2023 at 10:16 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kajev2`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(255) DEFAULT NULL,
  `isi_berita` text DEFAULT NULL,
  `foto` text DEFAULT NULL,
  `user` varchar(255) DEFAULT NULL,
  `jenis` varchar(255) DEFAULT NULL,
  `perusahaan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `isi_berita`, `foto`, `user`, `jenis`, `perusahaan`, `created_at`, `updated_at`) VALUES
(4, 'Lorem ipsum', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p><p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'item-230624-573cfad179.jpg', 'admin', 'Berita', 'PT. KUNANGO JANTAN', '2023-06-24 04:07:05', '2023-06-24 04:07:05'),
(7, 'Lorem ', '<p>berita_isi</p>', 'item-230618-66e06d5277.jpg', 'admin', 'Berita', 'PT. KUNANGO JANTAN', '2023-06-18 08:04:03', '2023-06-18 08:04:03'),
(8, 'Beton', 'wq', 'item-230618-a59a9c2e2e.jpg', 'admin', 'CSR', 'PT. KUNANGO JANTAN', '2023-06-18 08:07:36', '2023-06-18 08:07:36'),
(9, 'Lorem ', '<p>ew qeqwewqe wq</p>', 'item-230618-79a49b3e37.jpg', 'admin', 'Berita', 'PT. KUNANGO JANTAN', '2023-06-18 08:07:52', '2023-06-18 08:07:52'),
(10, 'Lorem ', '<p>fasfqwe r3q</p>', 'item-230618-c9de64b0aa.jpg', 'admin', 'Berita', 'PT. TIGA PILAR SAKATO', '2023-06-18 08:08:44', '2023-06-18 08:08:44'),
(11, 'Lorem ', '<p>1 32e41eqwd</p>', 'item-230618-5dc624e80d.jpg', 'admin', 'Berita', 'PT. KUNANGO JANTAN', '2023-06-18 08:08:54', '2023-06-18 08:08:54');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `h_id` int(11) NOT NULL,
  `h_text1` varchar(500) NOT NULL,
  `h_text2` varchar(500) NOT NULL,
  `h_text3` varchar(500) NOT NULL,
  `h_picbanner` varchar(500) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`h_id`, `h_text1`, `h_text2`, `h_text3`, `h_picbanner`, `created_at`, `updated_at`) VALUES
(5, 'Selamat Datang', 'Kunango Jantan Group', 'Perusahaan Multi Nasional', 'item-230607-9830672f72.jpg', '2023-06-07', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) DEFAULT NULL,
  `jenis_kategori` varchar(255) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `foto` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `jenis_kategori`, `keterangan`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'PT. KUNANGO JANTAN', 'Steel Division', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate.</p>', 'item-230618-86f77fb5fa.png', '2023-06-18 04:43:57', '2023-06-18 04:43:57'),
(2, 'PT. TIGA PILAR SAKATO', 'Steel Division', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate.</p>', 'item-230618-8d8875e24e.png', '2023-06-18 05:10:46', '2023-06-18 05:10:46');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(11) NOT NULL,
  `lokasi` text DEFAULT NULL,
  `perusahaan` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `hp` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `lokasi`, `perusahaan`, `email`, `hp`, `created_at`, `updated_at`) VALUES
(2, 'Komp. Mela, Jl. Tuanku Tambusai, Tengkerang Bar., Kec. Marpoyan Damai, Kota Pekanbaru, Riau ', 'PT. KUNANGO JANTAN', 'kunango@gmail.com', '23123123', '2023-06-18 08:57:03', '2023-06-18 08:57:03'),
(3, 'Komp. Mela, Jl. Tuanku Tambusai, Tengkerang Bar., Kec. Marpoyan Damai, Kota Pekanbaru, Riau 28124', 'PT. TIGA PILAR SAKATO', 'ichsanul99@gmail.com', '2434154', '2023-06-18 09:07:15', '2023-06-18 09:07:15');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id_project` int(11) NOT NULL,
  `nama_project` varchar(255) DEFAULT NULL,
  `nama_perusahaan` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id_project`, `nama_project`, `nama_perusahaan`, `status`, `keterangan`, `foto`, `created_at`, `updated_at`) VALUES
(2, 'tes', '123112', 'Berjalan', '<p>tes</p>', 'item-230618-bc9c8c7059.jpg', '2023-06-18 04:40:39', '2023-06-18 04:40:39'),
(4, 'tes', 'tes', 'Selesai', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum molestie turpis sit amet venenatis pulvinar. Curabitur sodales ante sed ex mattis dictum</p>', 'service-2.jpg', '2023-06-17 18:04:39', '2023-06-17 18:04:39');

-- --------------------------------------------------------

--
-- Table structure for table `struktur`
--

CREATE TABLE `struktur` (
  `id_struktur` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `foto` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `struktur`
--

INSERT INTO `struktur` (`id_struktur`, `nama`, `jabatan`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'isan1', 'CEO & Founder', 'item-230618-243f6a5292.jpg', '2023-06-18 10:32:49', '2023-06-18 10:32:49'),
(2, 'jimmbo', 'DIREKTUR', 'item-230619-d3559a5fa6.jpg', '2023-06-18 21:23:45', '2023-06-18 21:23:45');

-- --------------------------------------------------------

--
-- Table structure for table `tentang`
--

CREATE TABLE `tentang` (
  `t_id` int(11) NOT NULL,
  `t_text1` varchar(500) NOT NULL,
  `t_text2` varchar(500) NOT NULL,
  `t_text3` varchar(500) NOT NULL,
  `t_pic` varchar(500) NOT NULL,
  `t_pekerja` varchar(500) DEFAULT NULL,
  `t_clients` varchar(500) DEFAULT NULL,
  `t_projectsel` varchar(500) DEFAULT NULL,
  `t_projectber` varchar(500) DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tentang`
--

INSERT INTO `tentang` (`t_id`, `t_text1`, `t_text2`, `t_text3`, `t_pic`, `t_pekerja`, `t_clients`, `t_projectsel`, `t_projectber`, `created_at`, `updated_at`) VALUES
(1, 'Selamat Datang di Website Resmi PT. Kunango Jantang Group', '10 Tahun Pengalaman', '<p>Kunango Jantan Group adalah Kelompok Usaha yang fokus dalam penyediaan, produksi, dan distribusi material baja dan beton siap pakai untuk industri konstruksi, kelistrikan, pertambangan, telekomunikasi, dan perhubungan.</p><p><strong>Kunango Jantan Grup beroperasi di dua lokasi, yang berkantor pusat di Padang dan memiliki Pabrik Cabang di Pekanbaru yang lebih focus terhadap produksi beton.</strong></p><p> </p>', 'item-230608-05a38f814c.jpg', '300', '20', '120', '10', '2023-06-08', '2023-06-08');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id_testimoni` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `perusahaan` varchar(255) DEFAULT NULL,
  `testi` text DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id_testimoni`, `nama`, `perusahaan`, `testi`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'isan', 'PP Persero', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi egestas nec quam ac blandit. Morbi pulvinar faucibus felis, quis commodo neque iaculis eget. Maecenas tempor dui faucibus, ornare neque et, condimentum risus. Duis viverra eu arcu quis posuere. Aenean eu pellentesque justo. Aliquam vehicula imperdiet arcu, eu luctus orci convallis sit amet. Cras dignissim, erat non vulputate finibus, tortor tellus accumsan turpis, vel ultricies nibh lectus ut orci. Ut gravida, purus eget dignissim consectetur, magna nisl eleifend lacus, eget ullamcorper lorem sapien sed metus.', 'item-230618-0fa55706c7.jpg', '2023-06-18 10:49:14', '2023-06-18 10:49:14'),
(2, 'smith', 'PP Infra', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi egestas nec quam ac blandit. Morbi pulvinar faucibus felis, quis commodo neque iaculis eget. Maecenas tempor dui faucibus, ornare neque et, condimentum risus. Duis viverra eu arcu quis posuere. Aenean eu pellentesque justo.', 'item-230618-d15ff2db80.jpg', '2023-06-18 10:57:58', '2023-06-18 10:57:58');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `usr_id` int(11) NOT NULL,
  `usr_username` varchar(100) NOT NULL,
  `usr_password` varchar(255) NOT NULL,
  `usr_nama` varchar(255) NOT NULL,
  `usr_level` enum('Admin','User') NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`usr_id`, `usr_username`, `usr_password`, `usr_nama`, `usr_level`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$hO03qwrv6F2e/k4L1Onh4.WSwt7G22e6S7EYokgVYWUp51JEkkSru', 'Jimmbo', 'Admin', '2023-03-10', '2023-06-06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id_project`);

--
-- Indexes for table `struktur`
--
ALTER TABLE `struktur`
  ADD PRIMARY KEY (`id_struktur`);

--
-- Indexes for table `tentang`
--
ALTER TABLE `tentang`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id_testimoni`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`usr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `h_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id_project` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `struktur`
--
ALTER TABLE `struktur`
  MODIFY `id_struktur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tentang`
--
ALTER TABLE `tentang`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id_testimoni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `usr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
