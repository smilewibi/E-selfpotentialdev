-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 28, 2008 at 05:21 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mbti`
--
CREATE DATABASE IF NOT EXISTS `mbti` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mbti`;

-- --------------------------------------------------------

--
-- Table structure for table `auth_assignment`
--

CREATE TABLE IF NOT EXISTS `auth_assignment` (
  `id_auth_assignment` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_auth_assignment`),
  KEY `item_name` (`item_name`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `auth_assignment`
--

INSERT INTO `auth_assignment` (`id_auth_assignment`, `item_name`, `user_id`, `created_at`) VALUES
(1, 'Create-MBTI', 2, NULL),
(2, 'Admin', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item`
--

CREATE TABLE IF NOT EXISTS `auth_item` (
  `id_auth_item` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `rule_name` varchar(100) DEFAULT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_auth_item`),
  KEY `nama` (`nama`),
  KEY `rule_name` (`rule_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `auth_item`
--

INSERT INTO `auth_item` (`id_auth_item`, `nama`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
(1, 'Create-MBTI', 1, NULL, NULL, NULL, NULL, NULL),
(2, 'create-BidKarir', 1, 'Allow to create', NULL, NULL, NULL, NULL),
(3, 'Admin', 1, 'Admin bisa CRUD', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_child`
--

CREATE TABLE IF NOT EXISTS `auth_item_child` (
  `parent` varchar(100) NOT NULL,
  `child` varchar(100) NOT NULL,
  KEY `parent` (`parent`),
  KEY `child` (`child`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('Admin', 'create-BidKarir'),
('Admin', 'Create-MBTI');

-- --------------------------------------------------------

--
-- Table structure for table `auth_rule`
--

CREATE TABLE IF NOT EXISTS `auth_rule` (
  `name` varchar(100) NOT NULL,
  `data` text NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bid_karir`
--

CREATE TABLE IF NOT EXISTS `bid_karir` (
  `id_bid_karir` int(11) NOT NULL AUTO_INCREMENT,
  `nm_bid` varchar(32) NOT NULL,
  PRIMARY KEY (`id_bid_karir`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `bid_karir`
--

INSERT INTO `bid_karir` (`id_bid_karir`, `nm_bid`) VALUES
(1, 'Kesehatan'),
(2, 'Pendidikan'),
(3, 'Seni'),
(4, 'Wiraswasta');

-- --------------------------------------------------------

--
-- Table structure for table `dikotomi_ei`
--

CREATE TABLE IF NOT EXISTS `dikotomi_ei` (
  `id_ei` int(11) NOT NULL AUTO_INCREMENT,
  `id_tes` int(11) NOT NULL,
  `tot_jwb_a` int(11) NOT NULL,
  `tot_jwb_b` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  PRIMARY KEY (`id_ei`),
  KEY `id_tes` (`id_tes`),
  KEY `id_user` (`id_user`),
  KEY `id_kategori` (`id_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `dikotomi_jp`
--

CREATE TABLE IF NOT EXISTS `dikotomi_jp` (
  `id_jp` int(11) NOT NULL AUTO_INCREMENT,
  `id_tes` int(11) NOT NULL,
  `tot_jwb_a` int(11) NOT NULL,
  `tot_jwb_b` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  PRIMARY KEY (`id_jp`),
  KEY `id_tes` (`id_tes`),
  KEY `id_user` (`id_user`),
  KEY `id_kategori` (`id_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `dikotomi_sn`
--

CREATE TABLE IF NOT EXISTS `dikotomi_sn` (
  `id_sn` int(11) NOT NULL AUTO_INCREMENT,
  `id_tes` int(11) NOT NULL,
  `tot_jwb_a` int(11) NOT NULL,
  `tot_jwb_b` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  PRIMARY KEY (`id_sn`),
  KEY `id_tes` (`id_tes`),
  KEY `id_user` (`id_user`),
  KEY `id_kategori` (`id_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `dikotomi_tf`
--

CREATE TABLE IF NOT EXISTS `dikotomi_tf` (
  `id_tf` int(11) NOT NULL AUTO_INCREMENT,
  `id_tes` int(11) NOT NULL,
  `tot_jwb_a` int(11) NOT NULL,
  `tot_jwb_b` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  PRIMARY KEY (`id_tf`),
  KEY `id_tes` (`id_tes`),
  KEY `id_user` (`id_user`),
  KEY `id_kategori` (`id_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `karir`
--

CREATE TABLE IF NOT EXISTS `karir` (
  `id_karir` int(11) NOT NULL AUTO_INCREMENT,
  `nm_karir` varchar(32) NOT NULL,
  `id_bid_karir` int(11) NOT NULL,
  PRIMARY KEY (`id_karir`),
  KEY `id_bid_karir` (`id_bid_karir`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `karir`
--

INSERT INTO `karir` (`id_karir`, `nm_karir`, `id_bid_karir`) VALUES
(1, 'Perawat', 1),
(2, 'Pengajar', 2),
(3, 'Analis Kesehatan', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(100) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(1, 'Ekstrovet / Introvet'),
(2, 'Sensory / Intuitive'),
(3, 'Thinking / Feeling'),
(4, 'Judging / Perceiving');

-- --------------------------------------------------------

--
-- Table structure for table `kepribadian`
--

CREATE TABLE IF NOT EXISTS `kepribadian` (
  `id_kepribadian` int(11) NOT NULL AUTO_INCREMENT,
  `id_type` int(11) NOT NULL,
  `nama_type` varchar(4) NOT NULL,
  `sinopsis` text NOT NULL,
  `kelebihan` text NOT NULL,
  `kekurangan` text NOT NULL,
  `motivasi` text NOT NULL,
  `id_bid_karir` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_kepribadian`),
  KEY `id_type` (`id_type`),
  KEY `id_bid_karir` (`id_bid_karir`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `kesan`
--

CREATE TABLE IF NOT EXISTS `kesan` (
  `id_kesan` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_jam` datetime NOT NULL,
  `judul` varchar(100) NOT NULL,
  `kesan` text NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_kesan`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1211996072),
('m130524_201442_init', 1211996099);

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE IF NOT EXISTS `pesan` (
  `id_pesan` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_jam` datetime NOT NULL,
  `judul` varchar(100) NOT NULL,
  `pesan` text NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_pesan`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `potensi_kepribadian`
--

CREATE TABLE IF NOT EXISTS `potensi_kepribadian` (
  `id_potensi` int(11) NOT NULL AUTO_INCREMENT,
  `id_kepribadian` int(11) NOT NULL,
  `id_tes_tpa` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_potensi`),
  KEY `id_kepribadian` (`id_kepribadian`),
  KEY `id_tes_tpa` (`id_tes_tpa`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tesmbti`
--

CREATE TABLE IF NOT EXISTS `tesmbti` (
  `id_tes` int(11) NOT NULL AUTO_INCREMENT,
  `Soal` text NOT NULL,
  `Jwb_a` varchar(50) NOT NULL,
  `Jwb_b` varchar(50) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  PRIMARY KEY (`id_tes`),
  KEY `kategori` (`id_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `tesmbti`
--

INSERT INTO `tesmbti` (`id_tes`, `Soal`, `Jwb_a`, `Jwb_b`, `id_kategori`) VALUES
(3, 'Saya mendapat ide atau inspirasi dari....', 'Diskusi atau dialog', 'Refleksi atau merenungkan', 1),
(4, 'Saya lebih tertarik', 'Berbicara daripada mendengarkan', 'Mendengarkan daripada berbicara', 1),
(5, 'Saya lebih senang dengan kegiatan...', 'Arung jeram bersama teman-teman', 'Menulis cerita pendek atau novel dikamar', 1),
(6, 'Saya hanya akan mendapatkan energi dan bersemangat jika....', 'Berinteraksi dengan teman-teman', 'Merenung yang jauh dari keramaian', 1),
(7, 'Di pesta ulang tahun teman, saya lebih suka', 'Berbincang-bincang  dengan banyak orang', 'Mengobrol berdua/tiga orang dengan teman terdekat', 1),
(8, 'Dalam menyelesaikan pekerjaan, saya lebih tertarik dengan cara...', 'Melakukanya secara bertahap sesuai dengan petunjuk', 'Terobosan atau lompatan yang efisien', 2),
(9, 'Saya lebih tertarik dengan hal yang..', 'Konkret, riil, dapat diukur', 'Abstrack dan imajinatif', 2),
(10, 'Yang utama bagi saya...', 'Masalah dapat selesai dengan praktis, aplikatif', 'Masalah selesai dengan inofatif, kreatif, unik', 2),
(11, 'Ketika berbicara, saya selalu...', 'Spesifik dan rinci', 'Menggunakan analogi atau kiasan', 2),
(12, 'Bagi saya putih adalah...', 'Warna', 'Bersih dan suci', 2),
(13, 'Ketika berinteraksi dengan teman-teman,saya suka..', 'Berbicara tegas dan lugas', 'Berbicara dengan hati-hati supaya tidakmenyinggung', 3),
(14, 'Saya tertarik dengan sikap...', 'Tegas', 'Bijak', 3),
(15, 'Jika teman saya terhimpit kesulitan,saya akan..', 'Menawarkan jalan penyelesaian', 'Menunjukkan simpati dan menenangkanya', 3),
(16, 'Saya mengutamakan pada...', 'Banar dan salah', 'Suka atau tidak suka', 3),
(17, 'Saya mengutamakan pada...', 'Apa yang saya pikirkan', 'Apa yang saya rasakan', 3),
(18, 'Saya suka dengan...', 'Rencana yang matang dan pasti', 'Kejutan atau hal-hal diluar perkiraan', 4),
(19, 'Orang beranggapan bahwa saya...', 'Teratur, terencana, serius dan kaku', 'Fleksibel, spontan, periang, kurang disiplin', 4),
(20, 'Saya menganggap jadwal dan petunjuk merupakan..', 'Ketentuan, pegangan pekerjaan yang harus dipatuhi', 'Pengingat saja, dan bisa bekerja dengan cara saya', 4),
(21, 'Saya menyukai pola hidup...', 'Sistematis dan terstruktur', 'Apa adanya', 4),
(22, 'Dalam menghadapi situasi yang tidak pasti, saya merasa...', 'Cemas', 'Tertantang', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tes_tpa`
--

CREATE TABLE IF NOT EXISTS `tes_tpa` (
  `id_tpa` int(11) NOT NULL AUTO_INCREMENT,
  `soal` text NOT NULL,
  `jwb_a` text NOT NULL,
  `jwb_b` text NOT NULL,
  `jwb_c` text NOT NULL,
  `jwb_d` text NOT NULL,
  `jwb_e` text NOT NULL,
  `jwb_bnr` text NOT NULL,
  `id_karir` int(11) NOT NULL,
  PRIMARY KEY (`id_tpa`),
  KEY `id_karir` (`id_karir`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `type_kepribadian`
--

CREATE TABLE IF NOT EXISTS `type_kepribadian` (
  `id_type` int(11) NOT NULL AUTO_INCREMENT,
  `id_ei` int(11) NOT NULL,
  `type_ei` varchar(1) NOT NULL,
  `id_sn` int(11) NOT NULL,
  `type_sn` varchar(1) NOT NULL,
  `id_tf` int(11) NOT NULL,
  `type_tf` varchar(1) NOT NULL,
  `id_jp` int(11) NOT NULL,
  `type_jp` varchar(1) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_tes` int(11) NOT NULL,
  PRIMARY KEY (`id_type`),
  KEY `id_ei` (`id_ei`),
  KEY `id_sn` (`id_sn`),
  KEY `id_tf` (`id_tf`),
  KEY `id_jp` (`id_jp`),
  KEY `id_user` (`id_user`),
  KEY `id_tes` (`id_tes`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama_depan` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `nama_belakang` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `tempat_lahir` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `golongan_darah` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telepon` int(12) NOT NULL,
  `alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `nama_depan`, `nama_belakang`, `tempat_lahir`, `tanggal_lahir`, `golongan_darah`, `telepon`, `alamat`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', '', '', '', '0000-00-00', NULL, 0, '', 'QVcoIqB676VkduUdc3OHGtqlLzVeYzk2', '$2y$13$CTdE5hid5ImtXQfUueZNbeq/G0YW.fUQfjyiYwze4Jlhv7YLwey4y', 'H86EW6yy2c98jGAE_dm-3_Ob1YeatpXo_1212000845', 'admin@mbti.com', 10, 1211996289, 1212000845),
(2, 'superuser', '', '', '', '0000-00-00', NULL, 0, '', 'vuQJwD2_HLgICQbZsC9TCh9gMz30zw8X', '$2y$13$1booGWc37B8hshZevbZczuFjbgDyHov6rV9R7mjeS.34ZafWXfcF6', 'lKCkXqlLLYXQxX4Ih-LE5MM81ht4LSzI_1211996402', 'superuser@psychocentre.com', 10, 1211995128, 1211996402),
(3, 'dicoba', 'dicoba', 'dicaba', 'dicoba', '0000-00-00', 'O', 68767, 'hdwfjhfdwj', 'AY_qtyqjUZzIJ-cOhUpKUHHNc2LK9Sqf', '$2y$13$F6PqEiTThV.ftH3kTs8u..LEXQd2X0J76ukKOqmGEZso48/J.lxAy', NULL, 'gshfdsh@gmail.com', 10, 1211996479, 1211996479);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`nama`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_assignment_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`nama`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`nama`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dikotomi_ei`
--
ALTER TABLE `dikotomi_ei`
  ADD CONSTRAINT `dikotomi_ei_ibfk_1` FOREIGN KEY (`id_tes`) REFERENCES `tesmbti` (`id_tes`),
  ADD CONSTRAINT `dikotomi_ei_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `dikotomi_ei_ibfk_3` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);

--
-- Constraints for table `dikotomi_jp`
--
ALTER TABLE `dikotomi_jp`
  ADD CONSTRAINT `dikotomi_jp_ibfk_1` FOREIGN KEY (`id_tes`) REFERENCES `tesmbti` (`id_tes`),
  ADD CONSTRAINT `dikotomi_jp_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `dikotomi_jp_ibfk_3` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);

--
-- Constraints for table `dikotomi_sn`
--
ALTER TABLE `dikotomi_sn`
  ADD CONSTRAINT `dikotomi_sn_ibfk_1` FOREIGN KEY (`id_tes`) REFERENCES `tesmbti` (`id_tes`),
  ADD CONSTRAINT `dikotomi_sn_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `dikotomi_sn_ibfk_3` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);

--
-- Constraints for table `dikotomi_tf`
--
ALTER TABLE `dikotomi_tf`
  ADD CONSTRAINT `dikotomi_tf_ibfk_1` FOREIGN KEY (`id_tes`) REFERENCES `tesmbti` (`id_tes`),
  ADD CONSTRAINT `dikotomi_tf_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `dikotomi_tf_ibfk_3` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);

--
-- Constraints for table `karir`
--
ALTER TABLE `karir`
  ADD CONSTRAINT `karir_ibfk_1` FOREIGN KEY (`id_bid_karir`) REFERENCES `bid_karir` (`id_bid_karir`);

--
-- Constraints for table `kepribadian`
--
ALTER TABLE `kepribadian`
  ADD CONSTRAINT `kepribadian_ibfk_1` FOREIGN KEY (`id_type`) REFERENCES `type_kepribadian` (`id_type`),
  ADD CONSTRAINT `kepribadian_ibfk_2` FOREIGN KEY (`id_bid_karir`) REFERENCES `bid_karir` (`id_bid_karir`),
  ADD CONSTRAINT `kepribadian_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Constraints for table `kesan`
--
ALTER TABLE `kesan`
  ADD CONSTRAINT `kesan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Constraints for table `pesan`
--
ALTER TABLE `pesan`
  ADD CONSTRAINT `pesan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Constraints for table `potensi_kepribadian`
--
ALTER TABLE `potensi_kepribadian`
  ADD CONSTRAINT `potensi_kepribadian_ibfk_1` FOREIGN KEY (`id_kepribadian`) REFERENCES `kepribadian` (`id_kepribadian`),
  ADD CONSTRAINT `potensi_kepribadian_ibfk_2` FOREIGN KEY (`id_tes_tpa`) REFERENCES `tes_tpa` (`id_tpa`),
  ADD CONSTRAINT `potensi_kepribadian_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Constraints for table `tesmbti`
--
ALTER TABLE `tesmbti`
  ADD CONSTRAINT `tesmbti_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);

--
-- Constraints for table `tes_tpa`
--
ALTER TABLE `tes_tpa`
  ADD CONSTRAINT `tes_tpa_ibfk_1` FOREIGN KEY (`id_karir`) REFERENCES `karir` (`id_karir`);

--
-- Constraints for table `type_kepribadian`
--
ALTER TABLE `type_kepribadian`
  ADD CONSTRAINT `type_kepribadian_ibfk_1` FOREIGN KEY (`id_ei`) REFERENCES `dikotomi_ei` (`id_ei`),
  ADD CONSTRAINT `type_kepribadian_ibfk_2` FOREIGN KEY (`id_sn`) REFERENCES `dikotomi_sn` (`id_sn`),
  ADD CONSTRAINT `type_kepribadian_ibfk_3` FOREIGN KEY (`id_tf`) REFERENCES `dikotomi_tf` (`id_tf`),
  ADD CONSTRAINT `type_kepribadian_ibfk_4` FOREIGN KEY (`id_jp`) REFERENCES `dikotomi_jp` (`id_jp`),
  ADD CONSTRAINT `type_kepribadian_ibfk_5` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `type_kepribadian_ibfk_6` FOREIGN KEY (`id_tes`) REFERENCES `tesmbti` (`id_tes`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
