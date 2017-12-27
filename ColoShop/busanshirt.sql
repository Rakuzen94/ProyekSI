-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27 Des 2017 pada 11.43
-- Versi Server: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `busanshirt`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `identitas`
--

CREATE TABLE `identitas` (
  `id` int(11) NOT NULL,
  `nama_panggilan` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `profesi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kaos`
--

CREATE TABLE `kaos` (
  `id` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `ukuran` enum('S','M','L','XL','XXL') NOT NULL DEFAULT 'L',
  `jenis` enum('Woman','Man','Couple','') NOT NULL DEFAULT 'Man',
  `kodewarna` int(11) NOT NULL,
  `lengan` enum('Panjang','3/4','Pendek','') NOT NULL DEFAULT 'Pendek',
  `stok` int(11) NOT NULL,
  `design_kaos` varchar(200) NOT NULL,
  `harga` int(200) NOT NULL,
  `status` varchar(200) NOT NULL DEFAULT 'new',
  `diskon` int(200) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kaos`
--

INSERT INTO `kaos` (`id`, `nama`, `ukuran`, `jenis`, `kodewarna`, `lengan`, `stok`, `design_kaos`, `harga`, `status`, `diskon`, `created_at`) VALUES
('A1', 'Polos', 'L', 'Man', 1, 'Pendek', 100, 'Polos', 20000, 'new', 0, '2017-12-27 10:35:22'),
('A2', 'Love 1', 'M', 'Couple', 2, 'Pendek', 10, 'Dragon', 70000, 'new', 0, '2017-12-27 10:35:22'),
('A3', 'Polos', 'M', 'Woman', 1, 'Pendek', 100, 'Polos_cewek', 30000, 'new', 0, '2017-12-27 10:35:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `role`) VALUES
(1, 'administrator'),
(2, 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL DEFAULT 'default.svg',
  `role` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `name`, `photo`, `role`, `created_at`) VALUES
(13, 'Rakuzen', 'ahamad.rijal.h@mail.ugm.ac.id', '$2y$10$mfROAHE7sfCl63Ow5t4REe50m9v0nURbGd5ga1epTHhZEWnLNtUmi', 'Ahmad Rijal Hadiyan', 'default.svg', 2, '2017-12-27 10:33:58'),
(14, 'april', 'ahmadrijalhadiyan@gmail.com', '$2y$10$FbibpG2pCc0yW3stIzYD9OiEQn1S40MHS6CG7XZODVt8Nthv5qdzW', 'Aprilian', 'default.svg', 2, '2017-12-27 10:33:58'),
(15, 'yuls', 'yulindasven@gmail.com', '$2y$10$2FzHQK/jYncQo4hACAKQlevc62dRXn3YO4UhIAeH9bXKooISmXh1W', 'Yulinda', 'default.svg', 2, '2017-12-27 10:33:58'),
(17, 'Rakuzen94', 'ahmadrijalhadyan@gmail.com', '$2y$10$E3mufokrS65enWyWJ.xnyucwPMttRzg5T.QOHngmbwBTqIYgSMYxC', 'Rijal', 'default.svg', 2, '2017-12-27 10:33:58'),
(18, 'Rizka', 'rizkadwi@gmail.com', '$2y$10$hzkWVLxFnR7q91gCDQTNRu3Swr1vq19IOtEZKtblhDSjN3BYX1yP.', 'Rizka Dewi A', 'default.svg', 2, '2017-12-27 10:33:58'),
(19, 'intan', 'intanur@gmail.com', '$2y$10$oyTI/IzFgH/c3KZN9aYHUeN6zm7fjjY5W2nbdehwFH2PrvmU2FE9m', 'Intanur habibah', 'default.svg', 2, '2017-12-27 10:33:58'),
(20, 'andini', 'andiniparamas@gmail.com', '$2y$10$OqFwYWW/P7O/nIXu7Wjv1u1Bg/qD48NXwIYfVocadiy7/4Med.UbO', 'Andini Paramastri', 'default.svg', 2, '2017-12-27 10:33:58'),
(21, 'abdur', 'abduraman@gmail.com', '$2y$10$U3ZGgzaftAsZ/zJyDrpdlOKY7z2xjSyzsZFw.s2kj0O2Bi5PLTXZO', 'abdurahamman', 'default.svg', 2, '2017-12-27 10:33:58'),
(23, 'admin', 'admin@admin.com', '$2y$10$WrcfKCDg45oPcuKt0stPeOrZf1GVihH1derDrvJVdtJ0uuNY.GO5e', 'admin', 'default.svg', 1, '2017-12-27 10:33:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `warna`
--

CREATE TABLE `warna` (
  `kode` int(11) NOT NULL,
  `warna` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `warna`
--

INSERT INTO `warna` (`kode`, `warna`) VALUES
(1, 'Putih'),
(2, 'Hitam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `identitas`
--
ALTER TABLE `identitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kaos`
--
ALTER TABLE `kaos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `warna`
--
ALTER TABLE `warna`
  ADD PRIMARY KEY (`kode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `identitas`
--
ALTER TABLE `identitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `warna`
--
ALTER TABLE `warna`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
