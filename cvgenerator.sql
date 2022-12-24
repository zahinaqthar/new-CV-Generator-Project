-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2022 at 05:01 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cvgenerator`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_cv`
--

CREATE TABLE `tb_cv` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phonenum` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `qualy` varchar(255) DEFAULT NULL,
  `interest` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `address1` varchar(255) DEFAULT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `address3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_cv`
--

INSERT INTO `tb_cv` (`id`, `id_user`, `fname`, `email`, `phonenum`, `photo`, `qualy`, `interest`, `website`, `address1`, `address2`, `address3`) VALUES
(23, 14, 'Bambang Aja', 'bambang@gmail.com', '0812010283812', '__original_drawn_by_kakao__4353d2978d5aa84aed88d4b21ed4c32b1.png', 'Sehat Walafiat', 'Main Bola', 'bambang.com', 'SURABAYA', 'JAWA TIMUR', 'INDONESIA');

-- --------------------------------------------------------

--
-- Table structure for table `tb_edu`
--

CREATE TABLE `tb_edu` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `cname` varchar(255) DEFAULT NULL,
  `iname` varchar(255) DEFAULT NULL,
  `start` char(4) DEFAULT NULL,
  `end` char(4) DEFAULT NULL,
  `otheredu` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_edu`
--

INSERT INTO `tb_edu` (`id`, `id_user`, `cname`, `iname`, `start`, `end`, `otheredu`) VALUES
(6, 14, 'Jurusan Olahraga', 'Universitas Negeri Surabaya', '2010', '2015', 'Mendapatkan banyak piagam penghargaan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`id`, `username`, `password`, `email`) VALUES
(14, 'Bambang', '1234', 'bambang@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_work`
--

CREATE TABLE `tb_work` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `jobtit` varchar(255) DEFAULT NULL,
  `compname` varchar(255) DEFAULT NULL,
  `startw` char(4) DEFAULT NULL,
  `endw` char(4) DEFAULT NULL,
  `otherwe` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_work`
--

INSERT INTO `tb_work` (`id`, `id_user`, `jobtit`, `compname`, `startw`, `endw`, `otherwe`) VALUES
(9, 14, 'Pelatih Sepak Bola', 'Persebaya', '2015', '2022', 'Melatih dengan penuh semangat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_cv`
--
ALTER TABLE `tb_cv`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_edu`
--
ALTER TABLE `tb_edu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_edu_cv` (`id_user`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tb_work`
--
ALTER TABLE `tb_work`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_work_cv` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_cv`
--
ALTER TABLE `tb_cv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tb_edu`
--
ALTER TABLE `tb_edu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_work`
--
ALTER TABLE `tb_work`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_cv`
--
ALTER TABLE `tb_cv`
  ADD CONSTRAINT `fk_cv_users` FOREIGN KEY (`id_user`) REFERENCES `tb_users` (`id`);

--
-- Constraints for table `tb_edu`
--
ALTER TABLE `tb_edu`
  ADD CONSTRAINT `fk_edu_cv` FOREIGN KEY (`id_user`) REFERENCES `tb_users` (`id`);

--
-- Constraints for table `tb_work`
--
ALTER TABLE `tb_work`
  ADD CONSTRAINT `fk_work_cv` FOREIGN KEY (`id_user`) REFERENCES `tb_users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
