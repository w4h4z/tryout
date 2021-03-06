-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2020 at 06:46 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tryout`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_paket`
--

CREATE TABLE `tbl_paket` (
  `id_paket` int(11) NOT NULL,
  `paket` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_paket`
--

INSERT INTO `tbl_paket` (`id_paket`, `paket`) VALUES
(1, 'A'),
(2, 'B');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_questions`
--

CREATE TABLE `tbl_questions` (
  `id_question` int(11) NOT NULL,
  `question` text NOT NULL,
  `pilihan_a` text,
  `pilihan_b` text,
  `pilihan_c` text,
  `pilihan_d` text,
  `pilihan_e` text,
  `id_tipe_question` int(11) NOT NULL,
  `kunci_jawaban` varchar(55) NOT NULL,
  `token` varchar(55) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_questions`
--

INSERT INTO `tbl_questions` (`id_question`, `question`, `pilihan_a`, `pilihan_b`, `pilihan_c`, `pilihan_d`, `pilihan_e`, `id_tipe_question`, `kunci_jawaban`, `token`, `created_at`) VALUES
(12, '<p>Siapakah Ketua Senat 2022/2023 ?<br></p>', '<p>Guntur Satria Ajie<br></p>', '<p>Asep Setiawan<br></p>', '<p>Fathurrahman Rifqi Azzami<br></p>', '<p>Muhammad Faiz Syukron<br></p>', '<p>Ilham Jati Kusuma<br></p>', 1, 'c', '34dd8f4e04ac4bbd3f56459723b913b6', '2020-07-25 16:08:46'),
(13, 'Jumlah Anggota HIMA 2019 / 2020 adalah sebanyak 129 orang.<br>', '', '', '', '', '', 2, 't', '34dd8f4e04ac4bbd3f56459723b913b6', '2020-07-25 16:13:54'),
(14, '<p>Apa bener kalo cewe sensitif terus pake sensodyne, sensitif nya ilang ?<br></p>', '', '', '', '', '', 2, 't', 'generatexxx', '2020-07-25 16:18:03');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

CREATE TABLE `tbl_role` (
  `id_role` int(11) NOT NULL,
  `role` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_role`
--

INSERT INTO `tbl_role` (`id_role`, `role`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_test`
--

CREATE TABLE `tbl_test` (
  `id_test` int(11) NOT NULL,
  `test_name` text NOT NULL,
  `time_test` int(11) DEFAULT NULL,
  `id_paket` int(11) DEFAULT NULL,
  `id_question` int(11) DEFAULT NULL,
  `pilihan` varchar(55) DEFAULT NULL,
  `token` varchar(55) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_test`
--

INSERT INTO `tbl_test` (`id_test`, `test_name`, `time_test`, `id_paket`, `id_question`, `pilihan`, `token`, `created_at`) VALUES
(1, 'try apps', NULL, NULL, NULL, NULL, 'generatexxx', '2020-07-03 04:07:48'),
(9, 'Pembinaan Test', NULL, NULL, NULL, NULL, '34dd8f4e04ac4bbd3f56459723b913b6', '2020-07-04 09:57:41');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tipe_questions`
--

CREATE TABLE `tbl_tipe_questions` (
  `id_tipe_question` int(11) NOT NULL,
  `tipe_question` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tipe_questions`
--

INSERT INTO `tbl_tipe_questions` (`id_tipe_question`, `tipe_question`) VALUES
(1, 'pilihan ganda'),
(2, 'true false');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id_user` int(11) NOT NULL,
  `id_role` int(11) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id_user`, `id_role`, `email`, `password`, `created_at`) VALUES
(1, 1, 'admin@poltekssn.com', 'admin@poltekssn.com', '2020-07-02 10:39:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_paket`
--
ALTER TABLE `tbl_paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `tbl_questions`
--
ALTER TABLE `tbl_questions`
  ADD PRIMARY KEY (`id_question`),
  ADD KEY `id_tipe_questions` (`id_tipe_question`);

--
-- Indexes for table `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `tbl_test`
--
ALTER TABLE `tbl_test`
  ADD PRIMARY KEY (`id_test`),
  ADD KEY `id_paket` (`id_paket`),
  ADD KEY `id_question` (`id_question`);

--
-- Indexes for table `tbl_tipe_questions`
--
ALTER TABLE `tbl_tipe_questions`
  ADD PRIMARY KEY (`id_tipe_question`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_role` (`id_role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_paket`
--
ALTER TABLE `tbl_paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_questions`
--
ALTER TABLE `tbl_questions`
  MODIFY `id_question` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_test`
--
ALTER TABLE `tbl_test`
  MODIFY `id_test` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_tipe_questions`
--
ALTER TABLE `tbl_tipe_questions`
  MODIFY `id_tipe_question` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_questions`
--
ALTER TABLE `tbl_questions`
  ADD CONSTRAINT `tbl_questions_ibfk_1` FOREIGN KEY (`id_tipe_question`) REFERENCES `tbl_tipe_questions` (`id_tipe_question`);

--
-- Constraints for table `tbl_test`
--
ALTER TABLE `tbl_test`
  ADD CONSTRAINT `tbl_test_ibfk_1` FOREIGN KEY (`id_paket`) REFERENCES `tbl_paket` (`id_paket`),
  ADD CONSTRAINT `tbl_test_ibfk_2` FOREIGN KEY (`id_question`) REFERENCES `tbl_questions` (`id_question`);

--
-- Constraints for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD CONSTRAINT `tbl_users_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `tbl_role` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
