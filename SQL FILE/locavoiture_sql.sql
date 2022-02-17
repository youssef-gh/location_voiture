-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2021 at 05:30 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `locavoiture`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', '5c428d8875d2948607f3e3fe134d71b4', '2017-06-18 12:22:38');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userEmail` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `VehicleId` int(11) DEFAULT NULL,
  `FromDate` varchar(20) DEFAULT NULL,
  `ToDate` varchar(20) DEFAULT NULL,
  `Status` int(11) DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `paiement` varchar(50) NOT NULL,
  `depart` varchar(20) NOT NULL,
  `retour` varchar(20) NOT NULL,
  `nbjours` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=97 ;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `userEmail`, `VehicleId`, `FromDate`, `ToDate`, `Status`, `PostingDate`, `paiement`, `depart`, `retour`, `nbjours`) VALUES
(4, NULL, 1, '09/08/2021', '12/08/2021', 0, '2021-08-16 23:34:04', '', '', '', 0),
(5, NULL, 1, '09/08/2021', '30/08/2021', 0, '2021-08-17 01:53:23', '', '', '', 0),
(6, 'test@gmail.com', 2, '09/08/2021', '31/08/2021', 1, '2021-08-17 02:10:38', '', '', '', 0),
(7, 'test@gmail.com', 1, '09/08/2021', '12/08/2021', 1, '2021-08-17 02:20:55', '', '', '', 0),
(8, NULL, 1, '09/08/2021', '12/08/2021', 0, '2021-08-17 14:27:39', 'Cheque', '', '', 0),
(9, NULL, 5, '01/01/2022', '31/08/2021', 0, '2021-08-17 15:47:55', '', '', '', 0),
(10, NULL, 5, '01/01/2022', '31/08/2021', 0, '2021-08-17 15:50:25', '', '', '', 0),
(11, NULL, 5, '01/01/2022', '31/08/2021', 0, '2021-08-17 15:51:56', '', '', '', 0),
(12, NULL, 3, '09/08/2021', '12/08/2021', 0, '2021-08-17 15:57:05', 'Espece', '', '', 0),
(13, NULL, 3, '09/08/2021', '12/08/2021', 0, '2021-08-17 16:09:04', 'cheque', '', '', 0),
(14, '1', 3, '09/08/2021', '30/08/2021', 0, '2021-08-17 16:22:30', 'Espece', '', '', 0),
(15, 'gilgamesh', 3, '09/08/2021', '30/08/2021', 1, '2021-08-17 16:24:42', 'Espece', '', '', 0),
(16, 'gilgamesh', 3, '09/08/2021', '30/08/2021', 1, '2021-08-17 16:24:48', 'cheque', '', '', 0),
(17, 'gilgamesh', 3, '09/08/2021', '30/08/2021', 1, '2021-08-17 16:25:41', 'cheque', '', '', 0),
(18, 'gilgamesh', 5, '01/01/2022', '31/08/2021', 1, '2021-08-17 16:25:59', 'Espece', '', '', 0),
(19, 'gilgamesh', 5, '01/01/2022', '31/08/2021', 1, '2021-08-17 21:48:50', 'Espece', '', '', 0),
(20, 'gilgamesh', 10, '2021/09/01', '2021/09/08', 0, '2021-08-18 01:19:38', 'Espece', '', '', 0),
(21, 'gilgamesh', 10, '2021/09/01', '2021/09/08', 0, '2021-08-18 01:19:58', 'Espece', '', '', 0),
(22, 'gilgamesh', 10, '2021/09/01', '2021/09/08', 0, '2021-08-18 01:30:26', 'Espece', '', '', 0),
(23, 'gilgamesh', 10, '2021/09/01', '2021/09/08', 0, '2021-08-18 01:31:15', 'Espece', '', '', 0),
(24, 'gilgamesh', 10, '2021/09/01', '2021/09/08', 1, '2021-08-18 01:31:29', 'Espece', '', '', 0),
(25, 'gilgamesh', 10, '2021/09/01', '2021/09/08', 1, '2021-08-18 01:32:38', 'Espece', '', '', 0),
(26, 'gilgamesh', 10, '2021/09/01', '2021/09/08', 0, '2021-08-18 01:35:33', 'Espece', '', '', 0),
(27, 'gilgamesh', 10, '2021/09/01', '2021/09/08', 0, '2021-08-18 01:36:19', 'Espece', '', '', 0),
(28, 'gilgamesh', 10, '2021/09/01', '2021/09/08', 0, '2021-08-18 01:37:13', 'Espece', '', '', 0),
(29, 'gilgamesh', 10, '2021/09/01', '2021/09/08', 0, '2021-08-18 01:39:26', 'Espece', '', '', 0),
(30, 'gilgamesh', 10, '2021/09/01', '2021/09/08', 0, '2021-08-18 01:40:09', 'Espece', '', '', 0),
(31, 'gilgamesh', 3, '2021-09-01', '2021-09-09', 0, '2021-08-18 01:47:37', 'Espece', '', '', 0),
(32, 'gilgamesh', 3, '2021-09-01', '2021-09-09', 0, '2021-08-18 01:49:59', 'Espece', '', '', 0),
(33, 'gilgamesh', 3, '2021-09-01', '2021-09-09', 0, '2021-08-18 01:51:04', 'Espece', '', '', 0),
(34, 'gilgamesh', 3, '2021-09-01', '2021-09-09', 0, '2021-08-18 02:00:36', 'Espece', '', '', 0),
(35, 'gilgamesh', 3, '2021-09-01', '2021-09-09', 0, '2021-08-18 02:10:55', 'Espece', '', '', 0),
(36, 'gilgamesh', 3, '2021-09-01', '2021-09-09', 1, '2021-08-18 02:11:40', 'Espece', '', '', 0),
(37, 'gilgamesh', 3, '2021-09-01', '2021-09-09', 0, '2021-08-18 02:11:58', 'Espece', '', '', 0),
(38, 'gilgamesh', 3, '2021-09-01', '2021-09-09', 0, '2021-08-18 02:12:27', 'Espece', '', '', 0),
(39, 'gilgamesh', 3, '2021-09-01', '2021-09-09', 0, '2021-08-18 02:15:44', 'Espece', '', '', 0),
(40, 'gilgamesh', 3, '2021-09-01', '2021-09-09', 0, '2021-08-18 02:17:21', 'Espece', '', '', 0),
(41, 'gilgamesh', 3, '2021-09-01', '2021-09-09', 0, '2021-08-18 02:19:04', 'Espece', '', '', 0),
(42, 'gilgamesh', 3, '2021-09-01', '2021-09-09', 0, '2021-08-18 02:19:29', 'Espece', '', '', 0),
(43, 'gilgamesh', 3, '2021-09-01', '2021-09-09', 0, '2021-08-18 02:21:22', 'Espece', '', '', 0),
(44, 'gilgamesh', 3, '2021-09-01', '2021-09-09', 0, '2021-08-18 02:28:26', 'Espece', '', '', 0),
(45, 'gilgamesh', 3, '2021-09-01', '2021-09-09', 1, '2021-08-18 02:29:05', 'Espece', '', '', 0),
(46, 'gilgamesh', 3, '2021-09-01', '2021-09-09', 0, '2021-08-18 02:32:16', 'Espece', '', '', 0),
(47, 'gilgamesh', 3, '2021-09-01', '2021-09-09', 0, '2021-08-18 02:34:13', 'Espece', '', '', 0),
(48, 'gilgamesh', 3, '2021-09-01', '2021-09-09', 0, '2021-08-18 02:35:39', 'Espece', '', '', 0),
(49, 'gilgamesh', 3, '2021-09-01', '2021-09-09', 1, '2021-08-18 02:41:10', 'Espece', '', '', 0),
(50, 'gilgamesh', 3, '2021-09-01', '2021-09-09', 0, '2021-08-18 02:41:45', 'Espece', '', '', 0),
(51, 'gilgamesh', 3, '2021-09-01', '2021-09-09', 0, '2021-08-18 02:42:15', 'Espece', '', '', 0),
(52, 'gilgamesh', 3, '2021-09-01', '2021-09-09', 0, '2021-08-18 02:46:34', 'Espece', '', '', 0),
(53, 'gilgamesh', 3, '2021-09-01', '2021-09-09', 0, '2021-08-18 02:48:47', 'Espece', '', '', 0),
(54, 'gilgamesh', 3, '2021-09-01', '2021-09-09', 0, '2021-08-18 02:50:03', 'Espece', '', '', 0),
(55, 'gilgamesh', 3, '2021-09-01', '2021-09-09', 0, '2021-08-18 02:52:06', 'Espece', '', '', 0),
(56, 'gilgamesh', 3, '2021-09-01', '2021-09-09', 1, '2021-08-18 02:52:27', 'Espece', '', '', 0),
(57, 'gilgamesh', 3, '2021-09-01', '2021-09-09', 0, '2021-08-18 02:53:14', 'Espece', '', '', 0),
(58, 'gilgamesh', 3, '2021-09-01', '2021-09-09', 0, '2021-08-18 02:55:28', 'Espece', '', '', 0),
(59, 'gilgamesh', 3, '2021-09-01', '2021-09-09', 0, '2021-08-18 02:56:05', 'Espece', '', '', 0),
(60, 'gilgamesh', 3, '2021-09-01', '2021-09-09', 0, '2021-08-18 02:57:15', 'Espece', '', '', 0),
(61, 'gilgamesh', 3, '2021-09-01', '2021-09-09', 0, '2021-08-18 02:59:27', 'Espece', '', '', 0),
(62, 'gilgamesh', 3, '2021-09-01', '2021-09-09', 0, '2021-08-18 02:59:28', 'Espece', '', '', 0),
(63, 'gilgamesh', 3, '2021-09-01', '2021-09-09', 0, '2021-08-18 03:00:26', 'Espece', '', '', 0),
(64, 'gilgamesh', 3, '2021-09-01', '2021-09-09', 0, '2021-08-18 03:01:26', 'Espece', '', '', 0),
(65, 'gilgamesh', 3, '2021-09-01', '2021-09-09', 0, '2021-08-18 03:02:56', 'Espece', '', '', 0),
(66, 'gilgamesh', 3, '2021-09-01', '2021-09-09', 0, '2021-08-18 03:03:31', 'Espece', '', '', 0),
(67, 'gilgamesh', 3, '2021-09-01', '2021-09-09', 0, '2021-08-18 03:03:46', 'Espece', '', '', 0),
(68, 'gilgamesh', 3, '2021-09-01', '2021-09-09', 0, '2021-08-18 03:04:06', 'Espece', '', '', 0),
(69, 'gilgamesh', 3, '2021-09-01', '2021-09-09', 0, '2021-08-18 03:05:03', 'Espece', '', '', 0),
(70, 'gilgamesh', 3, '2021-09-01', '2021-09-09', 0, '2021-08-18 03:05:36', 'Espece', '', '', 0),
(71, 'gilgamesh', 3, '2021-09-01', '2021-09-09', 0, '2021-08-18 03:06:00', 'Espece', '', '', 0),
(72, 'gilgamesh', 3, '2021-09-01', '2021-09-09', 0, '2021-08-18 03:06:30', 'Espece', '', '', 0),
(73, 'gilgamesh', 3, '2021-09-01', '2021-09-09', 0, '2021-08-18 03:07:14', 'Espece', '', '', 0),
(74, 'gilgamesh', 3, '2021-09-01', '2021-09-09', 0, '2021-08-18 03:08:14', 'Espece', '', '', 0),
(75, 'gilgamesh', 3, '2021-09-01', '2021-09-09', 0, '2021-08-18 03:08:42', 'Espece', '', '', 0),
(76, 'gilgamesh', 3, '2021-09-01', '2021-09-09', 0, '2021-08-18 03:09:09', 'Espece', '', '', 0),
(77, 'gilgamesh', 3, '2021-09-01', '2021-09-09', 1, '2021-08-18 03:09:28', 'Espece', '', '', 0),
(78, 'gilgamesh', 1, '09/08/2021', NULL, 0, '2021-08-18 23:12:06', 'Espece', '', '', 5),
(79, 'gilgamesh', 1, '09/08/2021', NULL, 0, '2021-08-18 23:18:09', 'Espece', '', '', 5),
(80, 'gilgamesh', 1, '09/08/2021', NULL, 1, '2021-08-18 23:21:07', 'Espece', '', '', 5),
(81, 'gilgamesh', 1, '09/08/2021', NULL, 0, '2021-08-18 23:22:26', 'Espece', '', '', 5),
(82, 'gilgamesh', 1, '09/08/2021', NULL, 0, '2021-08-18 23:22:52', 'Espece', '', '', 5),
(83, 'gilgamesh', 1, '09/08/2021', '12/08/2021', 1, '2021-08-27 15:55:48', 'Espece', '', '', 4),
(84, 'gilgamesh', 6, '01/01/2022', '30/08/2021', 1, '2021-08-27 17:49:55', 'cheque', '', '', 10),
(85, 'gilgamesh', 6, '01/01/2022', '30/08/2021', 0, '2021-08-27 18:14:11', 'cheque', '', '', 10),
(86, 'gilgamesh', 6, '01/01/2022', '30/08/2021', 0, '2021-08-27 18:14:17', 'cheque', '', '', 10),
(87, 'gilgamesh', 3, '01/01/2022', '19/08/2021', 1, '2021-08-27 18:24:16', 'Espece', '', '', 4),
(88, 'gilgamesh', 3, '01/01/2022', '19/08/2021', 0, '2021-08-27 18:25:00', 'Espece', '', '', 4),
(89, 'gilgamesh', 1, '09/08/2021', '30/08/2021', 0, '2021-08-30 02:42:18', 'Espece', '', '', 10),
(90, 'gilgamesh', 36, '09/09/2021', '12/09/2021', 1, '2021-08-30 23:48:37', 'Espece', '', '', 3),
(91, 'newuser', 37, '17/09/2021', '27/09/2021', 0, '2021-08-30 23:50:08', 'Espece', '', '', 10),
(92, 'newuser', 38, '01/09/2021', '05/09/2021', 0, '2021-08-30 23:50:42', 'cheque', '', '', 4),
(93, 'newuser', 39, '17/09/2021', '21/09/2021', 1, '2021-08-30 23:51:41', 'Espece', '', '', 4),
(94, 'simogh', 39, '17/09/2021', '31/09/2021', 0, '2021-08-31 00:23:19', 'Espece', '', '', 14),
(95, 'simogh', 40, '18/10/2021', '25/10/2021', 0, '2021-08-31 00:24:11', 'Espece', '', '', 7),
(96, 'newuser', 37, '11/09/2021', '15/09/2021', 0, '2021-08-31 00:25:02', 'Espece', '', '', 4);

-- --------------------------------------------------------

--
-- Table structure for table `facture`
--

CREATE TABLE IF NOT EXISTS `facture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `avance` varchar(255) DEFAULT NULL,
  `fraislv` varchar(255) DEFAULT NULL,
  `frais` int(11) DEFAULT NULL,
  `CIN` varchar(30) NOT NULL,
  `nbjours` int(11) NOT NULL,
  `ttc` double NOT NULL,
  `tva` double NOT NULL DEFAULT '0.2',
  `Name` varchar(50) NOT NULL,
  `matricule` varchar(50) NOT NULL,
  `montant` int(11) NOT NULL,
  `dates` date NOT NULL,
  `total` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `facture`
--

INSERT INTO `facture` (`id`, `avance`, `fraislv`, `frais`, `CIN`, `nbjours`, `ttc`, `tva`, `Name`, `matricule`, `montant`, `dates`, `total`) VALUES
(15, '400', '100', 70, 'T234234', 10, 0, 0.2, 'Ghoundal', 'A53456', 5000, '2021-08-31', 0),
(16, '300', '90', 50, 'IT53453', 5, 0, 0.2, 'HROUCH', 'L34222', 1500, '2021-08-31', 0),
(17, '500', '200', 40, 'B25E43', 8, 0, 0.2, 'SBAAI', 'OI33453', 3000, '2021-08-31', 0),
(18, '250', '60', 30, 'I256445', 3, 0, 0.2, 'FAJRI', 'JRT346', 1000, '2021-08-31', 0),
(19, '700', '200', 100, 'A234232', 10, 0, 0.2, 'EJLBARI', 'Q432532', 6000, '2021-08-31', 0),
(20, '800', '100', 50, 'L3532', 12, 0, 0.2, 'LAMOUILAH', 'Y52345', 4000, '2021-08-31', 0),
(21, '200', '100', 40, 'O435345', 5, 0, 0.2, 'AMINE', 'Z532325T', 1400, '2021-08-31', 0),
(22, '400', '80', 70, 'L2354325', 12, 0, 0.2, 'FERDOUS', 'LK53422', 5000, '2021-08-31', 0),
(23, '500', '150', 100, 'P12423', 10, 0, 0.2, 'ELALAMI', 'JK4343', 4000, '2021-08-31', 0),
(24, '700', '200', 100, 'G343522', 11, 0, 0.2, 'HAJJI', 'Y2342T', 6000, '2021-08-31', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblbrands`
--

CREATE TABLE IF NOT EXISTS `tblbrands` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `BrandName` varchar(120) NOT NULL,
  `CreationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tblbrands`
--

INSERT INTO `tblbrands` (`id`, `BrandName`, `CreationDate`, `UpdationDate`) VALUES
(1, 'Maruti', '2017-06-18 16:24:34', '2017-06-19 06:42:23'),
(2, 'BMW', '2017-06-18 16:24:50', NULL),
(3, 'Audi', '2017-06-18 16:25:03', NULL),
(4, 'Nissan', '2017-06-18 16:25:13', NULL),
(5, 'Toyota', '2017-06-18 16:25:24', NULL),
(7, 'Marutiu', '2017-06-19 06:22:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(120) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `passport` varchar(50) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `CIN` varchar(50) NOT NULL,
  `datenaissance` date NOT NULL,
  `permis` varchar(20) NOT NULL,
  `nationalite` varchar(50) NOT NULL,
  `Ville` varchar(50) NOT NULL DEFAULT 'BENI MELLAL',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `Password`, `passport`, `prenom`, `RegDate`, `UpdationDate`, `CIN`, `datenaissance`, `permis`, `nationalite`, `Ville`) VALUES
(5, 'Youssef', 'newuser', '$2y$10$5/4DSxSLMnJp8KwBtOHriOEPU.sAm0D3B2XVAZZvyPaoMZ/fxImam', 'T46433', 'Ghoundal', '2021-08-15 16:24:42', NULL, 'I23523', '2000-03-06', 'N56456456', 'Marocaine', 'BENI MELLAL'),
(6, 'Mohcine', 'gilgamesh', '$2y$10$Y2tfjzdavmJf.o6JDLSwy.buCmZEGa6KIlQghnja0L/LsUjkU3/6y', 't353453', 'frds', '2021-08-15 16:49:04', NULL, 'I234234', '2000-08-06', 'T3452432', 'Marocaine', 'BENI MELLAL'),
(7, 'Haytham', 'youssefwalt', '$2y$10$IFGUyktwcU99vGSKCCF9V.91YyrhLTdBtWeCH6t1Yi.bYx.053KQe', 'T34534345', 'sbaai', '2021-08-17 00:25:10', NULL, 'I53524', '2000-05-06', 'A4353403', 'Marocaine', 'BENI MELLAL'),
(8, 'Mohamed', 'simogh', '$2y$10$7MK6grrlT06lsOIdgPjd/uaiGjNf0ybj2onupylhv7xKu4v0Qlsz.', '3778908743', 'ghoundal', '2021-08-17 02:20:32', NULL, 'I4534534', '2000-03-06', 'O93757354', 'Marocaine', 'BENI MELLAL'),
(9, 'jihad', 'jihadgh', '$2y$10$tvg1Wf4cm6vXWY/xF56Q1Oqu6KT2bI5x3xcGR25qG3FjVpx44e5wK', 't35325322', 'GH', '2021-08-17 02:25:45', NULL, 'IA42542', '2000-03-06', '2806840544', 'Marocaine', 'BENI MELLAL'),
(10, 'Aymane', 'aymanehr', '$2y$10$yJAnYJ2HZlAxqUtPk/eKBeu78FALTZvWx3kNWbCnYcovK8N0gXxZK', '3453453453452', 'hrouch', '2021-08-17 02:26:26', NULL, 'A13254', '2000-03-06', 'I435345345', 'Marocaine', 'BENI MELLAL'),
(11, 'amine', 'aminejb', '$2y$10$vXiRBcorGQI2ckqyPOqAF.8rfkP16.hQ1obbcNuhvqxUfGn3emF1W', 'TT43634', 'eljb', '2021-08-17 02:27:28', NULL, 'B234563', '2000-03-06', '7889696544', 'marocain', 'BENI MELLAL');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE IF NOT EXISTS `vehicles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `VehiclesTitle` varchar(150) DEFAULT NULL,
  `VehiclesBrand` int(11) DEFAULT NULL,
  `VehiclesOverview` longtext,
  `PricePerDay` int(11) DEFAULT NULL,
  `FuelType` varchar(100) DEFAULT NULL,
  `ModelYear` int(6) DEFAULT NULL,
  `SeatingCapacity` int(11) DEFAULT NULL,
  `Vimage1` varchar(120) DEFAULT NULL,
  `Vimage2` varchar(120) DEFAULT NULL,
  `Vimage3` varchar(120) DEFAULT NULL,
  `Vimage4` varchar(120) DEFAULT NULL,
  `Vimage5` varchar(120) DEFAULT NULL,
  `AirConditioner` int(11) DEFAULT NULL,
  `PowerDoorLocks` int(11) DEFAULT NULL,
  `AntiLockBrakingSystem` int(11) DEFAULT NULL,
  `BrakeAssist` int(11) DEFAULT NULL,
  `PowerSteering` int(11) DEFAULT NULL,
  `DriverAirbag` int(11) DEFAULT NULL,
  `PassengerAirbag` int(11) DEFAULT NULL,
  `PowerWindows` int(11) DEFAULT NULL,
  `CDPlayer` int(11) DEFAULT NULL,
  `CentralLocking` int(11) DEFAULT NULL,
  `CrashSensor` int(11) DEFAULT NULL,
  `LeatherSeats` int(11) DEFAULT NULL,
  `RegDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `paiement` varchar(50) NOT NULL,
  `coleur` varchar(50) NOT NULL,
  `Disponible` varchar(50) NOT NULL DEFAULT 'DISPONIBLE',
  `depart` varchar(20) NOT NULL,
  `retour` varchar(20) NOT NULL,
  `nbjours` int(11) NOT NULL,
  `matricule` varchar(50) NOT NULL,
  `Stat` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `VehiclesTitle`, `VehiclesBrand`, `VehiclesOverview`, `PricePerDay`, `FuelType`, `ModelYear`, `SeatingCapacity`, `Vimage1`, `Vimage2`, `Vimage3`, `Vimage4`, `Vimage5`, `AirConditioner`, `PowerDoorLocks`, `AntiLockBrakingSystem`, `BrakeAssist`, `PowerSteering`, `DriverAirbag`, `PassengerAirbag`, `PowerWindows`, `CDPlayer`, `CentralLocking`, `CrashSensor`, `LeatherSeats`, `RegDate`, `UpdationDate`, `paiement`, `coleur`, `Disponible`, `depart`, `retour`, `nbjours`, `matricule`, `Stat`) VALUES
(36, 'CLIO ', NULL, NULL, 250, 'OUI', NULL, 6, 'c1.jpg', 'c2.jpg', 'c3.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-30 22:38:26', '2021-08-31 00:16:51', '', 'ROUGE', 'NON', '10:10', '18:30', 0, '', 0),
(37, 'RANGE ROVER', NULL, NULL, 400, 'OUI', NULL, 7, 'r1.jpg', 'r2.jpg', 'r3.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-30 22:39:20', '2021-08-31 00:17:29', '', 'ROUGE', 'NON', '14:18', '17:10', 0, '', 0),
(38, 'GOLF', NULL, NULL, 300, 'OUI', NULL, 6, 'g1.jpg', 'g2.jpg', 'g3.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-30 22:39:50', '2021-08-31 00:18:33', '', 'NOIRE', 'NON', '18:00', '12:00', 0, '', 0),
(39, 'MERCEDES', NULL, NULL, 400, 'OUI', NULL, 7, 'm1.jpg', 'm2.jpg', 'm3.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-30 22:41:34', NULL, '', 'BLANCHE', 'DISPONIBLE', '', '', 0, '', 0),
(40, 'DACIA', NULL, NULL, 200, 'OUI', NULL, 7, 'd1.jpg', 'd2.jpg', 'd3.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-30 23:43:31', NULL, '', 'NOIRE', 'DISPONIBLE', '', '', 0, '', 0),
(41, 'AUDI', NULL, NULL, 350, 'OUI', NULL, 7, 'a3.jpg', 'a2.jpg', 'a3.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-30 23:44:28', NULL, '', 'GRIS', 'DISPONIBLE', '', '', 0, '', 0),
(42, 'FORD', NULL, NULL, 300, 'OUI', NULL, 7, 'f1.jpg', 'f2.jpg', 'f3.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-30 23:45:42', NULL, '', 'BLUE', 'DISPONIBLE', '', '', 0, '', 0),
(43, 'NISSAN', NULL, NULL, 300, 'OUI', NULL, 7, 'r1.jpg', 'r2.jpg', 'r3.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-30 23:46:26', NULL, '', 'ROUGE', 'DISPONIBLE', '', '', 0, '', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
