-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 25, 2021 at 05:46 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kebakaran-nn`
--

-- --------------------------------------------------------

--
-- Table structure for table `datacenter`
--

DROP TABLE IF EXISTS `datacenter`;
CREATE TABLE IF NOT EXISTS `datacenter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `temprature` float NOT NULL,
  `rm` float NOT NULL,
  `windspeed` float NOT NULL,
  `rain` float NOT NULL,
  `ffmc` float NOT NULL,
  `dmc` float NOT NULL,
  `dc` float NOT NULL,
  `isi` float NOT NULL,
  `bui` float NOT NULL,
  `fwi` float NOT NULL,
  `incident` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=134 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datacenter`
--

INSERT INTO `datacenter` (`id`, `tanggal`, `temprature`, `rm`, `windspeed`, `rain`, `ffmc`, `dmc`, `dc`, `isi`, `bui`, `fwi`, `incident`) VALUES
(12, '2012-06-01', 29, 57, 18, 0, 65.7, 3.4, 7.6, 1.3, 3.4, 0.5, '0'),
(13, '2012-06-02', 29, 61, 13, 1.3, 64.4, 4.1, 7.6, 1, 3.9, 0.4, '0'),
(14, '2012-06-03', 26, 82, 22, 13.1, 47.1, 2.5, 7.1, 0.3, 2.7, 0.1, '0'),
(15, '2012-06-04', 25, 89, 13, 2.5, 28.6, 1.3, 6.9, 0, 1.7, 0, '0'),
(16, '2012-06-05', 27, 77, 16, 0, 64.8, 3, 14.2, 1.2, 3.9, 0.5, '0'),
(17, '2012-06-06', 31, 67, 14, 0, 82.6, 5.8, 22.2, 3.1, 7, 2.5, '1'),
(18, '2012-06-07', 33, 54, 13, 0, 88.2, 9.9, 30.5, 6.4, 1.9, 7.2, '1'),
(19, '2012-06-08', 30, 73, 15, 0, 86.6, 12.1, 38.3, 5.6, 13.5, 7.1, '1'),
(20, '2012-06-09', 25, 88, 13, 0.2, 52.9, 7.9, 38.8, 0.4, 10.5, 0.3, '0'),
(21, '2012-06-10', 28, 79, 12, 0, 73.2, 9.5, 46.3, 1.3, 12.6, 0.9, '0'),
(22, '2012-06-11', 31, 65, 14, 0, 84.5, 12.5, 54.3, 4, 15.8, 5.6, '1'),
(23, '2012-06-12', 26, 81, 19, 0, 84, 13.8, 61.4, 4.8, 17.7, 7.1, '1'),
(24, '2012-06-13', 27, 84, 21, 1.2, 50, 6.7, 17, 0.5, 6.7, 0.2, '0'),
(25, '2012-06-14', 30, 78, 20, 0.5, 59, 4.6, 7.8, 1, 4.4, 0.4, '0'),
(26, '2012-06-15', 28, 80, 17, 3.1, 49.4, 3, 7.4, 0.4, 3, 0.1, '0'),
(27, '2012-06-16', 29, 89, 13, 0.7, 36.1, 1.7, 7.6, 0, 2.2, 0, '0'),
(28, '2012-06-17', 30, 89, 16, 0.6, 37.3, 1.1, 7.8, 0, 1.6, 0, '0'),
(29, '2012-06-18', 31, 78, 14, 0.3, 56.9, 1.9, 8, 0.7, 2.4, 0.2, '0'),
(30, '2012-06-19', 31, 55, 16, 0.1, 79.9, 4.5, 16, 2.5, 5.3, 1.4, '0'),
(31, '2012-06-20', 30, 80, 16, 0.4, 59.8, 3.4, 27.1, 0.9, 5.1, 0.4, '0'),
(32, '2012-06-21', 30, 78, 14, 0, 81, 6.3, 31.6, 2.6, 8.4, 2.2, '1'),
(33, '2012-06-22', 31, 67, 17, 0.1, 79.1, 7, 39.5, 2.4, 9.7, 2.3, '0'),
(34, '2012-06-23', 32, 62, 18, 0.1, 81.4, 8.2, 47.7, 3.3, 11.5, 3.8, '1'),
(35, '2012-06-24', 32, 62, 18, 0.1, 81.4, 8.2, 47.7, 3.3, 11.5, 3.8, '1'),
(36, '2012-06-25', 31, 64, 15, 0, 86.7, 14.2, 63.8, 5.7, 18.3, 8.4, '1'),
(37, '2012-06-26', 31, 64, 18, 0, 86.8, 17.8, 71.8, 6.7, 21.6, 10.6, '1'),
(38, '2012-06-27', 34, 53, 18, 0, 89, 21.6, 80.3, 9.2, 25.8, 15, '1'),
(39, '2012-06-28', 32, 55, 14, 0, 89.1, 25.5, 88.5, 7.6, 29.7, 13.9, '1'),
(40, '2012-06-29', 32, 47, 13, 0.3, 79.9, 18.4, 84.4, 2.2, 23.8, 3.9, '0'),
(41, '2012-06-30', 33, 50, 14, 0, 88.7, 22.9, 92.8, 7.2, 28.3, 12.9, '1'),
(42, '2012-07-01', 29, 68, 19, 1, 59.9, 2.5, 8.6, 1.1, 2.9, 0.4, '0'),
(43, '2012-07-02', 27, 75, 19, 1.2, 55.7, 2.4, 8.3, 0.8, 2.8, 0.3, '0'),
(44, '2012-07-03', 32, 75, 20, 0.7, 63.1, 2.6, 9.2, 1.3, 3, 0.5, '0'),
(45, '2012-07-04', 33, 78, 17, 0, 80.1, 4.6, 18.5, 2.7, 5.7, 1.7, '0'),
(46, '2012-07-05', 33, 66, 14, 0, 85.9, 7.6, 27.9, 4.8, 9.1, 4.9, '1'),
(47, '2012-07-06', 32, 63, 14, 0, 87, 10.9, 37, 5.6, 12.5, 6.8, '1'),
(48, '2012-07-07', 35, 64, 18, 0.2, 80, 9.7, 40.4, 2.8, 12.1, 3.2, '0'),
(49, '2012-07-08', 33, 68, 17, 0, 85.6, 12.5, 49.8, 6, 15.4, 8, '1'),
(50, '2012-07-09', 32, 68, 14, 1.4, 66.6, 7.7, 9.2, 1.1, 7.4, 0.6, '0'),
(51, '2012-07-10', 33, 69, 13, 0.7, 66.6, 6, 9.3, 1.1, 5.8, 0.5, '0'),
(52, '2012-07-11', 33, 76, 14, 0, 81.1, 8.1, 18.7, 2.6, 8.1, 2.2, '0'),
(53, '2012-07-12', 31, 75, 13, 0.1, 75.1, 7.9, 27.7, 1.5, 9.2, 0.9, '0'),
(54, '2012-07-13', 34, 81, 15, 0, 81.8, 9.7, 37.2, 3, 11.7, 3.4, '0'),
(55, '2012-07-14', 34, 61, 13, 0.6, 73.9, 7.8, 22.9, 1.4, 8.4, 0.8, '0'),
(56, '2012-07-15', 30, 80, 19, 0.4, 6.7, 5.2, 17, 1.1, 5.9, 0.5, '0'),
(57, '2012-07-16', 28, 76, 21, 0, 72.6, 7, 25.5, 0.7, 8.3, 0.4, '0'),
(58, '2012-07-17', 29, 70, 14, 0, 82.8, 9.4, 34.1, 3.2, 11.1, 3.6, '1'),
(59, '2012-07-18', 31, 68, 14, 0, 85.4, 12.1, 43.1, 4.6, 14.2, 6, '1'),
(60, '2012-07-19', 35, 59, 17, 0, 88.1, 12, 52.8, 7.7, 18.2, 10.9, '1'),
(61, '2012-07-20', 33, 65, 15, 0.1, 81.4, 12.3, 62.1, 2.8, 16.5, 4, '1'),
(62, '2012-07-21', 33, 70, 17, 0, 85.4, 18.5, 71.5, 5.2, 22.4, 8.8, '1'),
(63, '2012-07-22', 28, 79, 18, 0.1, 73.4, 16.4, 79.9, 1.8, 21.7, 2.8, '0'),
(64, '2012-07-23', 27, 66, 22, 0.4, 68.2, 10.5, 71.3, 1.8, 15.4, 2.1, '0'),
(65, '2012-07-24', 28, 78, 16, 0.1, 70, 9.6, 79.7, 1.4, 14.7, 1.3, '0'),
(66, '2012-07-25', 31, 65, 18, 0, 84.3, 12.5, 88.7, 4.8, 18.5, 7.3, '1'),
(67, '2012-07-26', 36, 53, 17, 0, 89.2, 17.1, 98.6, 10, 23.9, 15.3, '1'),
(68, '2012-07-27', 36, 48, 13, 0, 90.3, 22.2, 108.5, 8.7, 29.4, 15.3, '1'),
(69, '2012-07-28', 33, 76, 15, 0, 86.5, 24.4, 117.8, 5.6, 32.1, 11.3, '1'),
(70, '2012-07-29', 32, 73, 15, 0, 86.6, 26.7, 127, 5.6, 35, 11.9, '1'),
(71, '2012-07-30', 31, 79, 15, 0, 85.4, 28.5, 136, 4.7, 37.4, 10.7, '1'),
(72, '2012-07-31', 35, 64, 17, 0, 87.2, 31.9, 145.7, 6.8, 41.2, 15.7, '1'),
(73, '2012-08-01', 36, 45, 14, 0, 78.8, 4.8, 10.2, 2, 4.7, 0.9, '0'),
(74, '2012-08-02', 35, 55, 12, 0.4, 78, 5.8, 10, 1.7, 5.5, 0.8, '0'),
(75, '2012-08-03', 35, 63, 14, 0.3, 76.6, 5.7, 10, 1.7, 5.5, 0.8, '0'),
(76, '2012-08-04', 34, 69, 13, 0, 85, 8.2, 19.8, 4, 8.2, 3.9, '1'),
(77, '2012-08-05', 34, 65, 13, 0, 86.8, 11.1, 29.7, 5.2, 11.5, 6.1, '1'),
(78, '2012-08-06', 32, 75, 14, 0, 86.4, 13, 39.1, 5.2, 14.2, 6.8, '1'),
(79, '2012-08-07', 32, 69, 16, 0, 86.5, 15.5, 48.6, 5.5, 17.2, 8, '1'),
(80, '2012-08-08', 32, 60, 18, 0.3, 77.1, 11.3, 47, 2.2, 14.1, 2.6, '0'),
(81, '2012-08-09', 35, 59, 17, 0, 87.4, 14.8, 57, 6.9, 17.9, 9.9, '1'),
(82, '2012-08-10', 35, 55, 14, 0, 88.9, 18.6, 67, 7.4, 21.9, 11.6, '1'),
(83, '2012-08-11', 35, 63, 13, 0, 88.9, 21.7, 77, 7.1, 25.5, 12.1, '1'),
(84, '2012-08-12', 35, 51, 13, 0.3, 81.3, 15.6, 75.1, 2.5, 20.7, 4.2, '0'),
(85, '2012-08-13', 35, 63, 15, 0, 87, 19, 85.1, 5.9, 24.4, 10.2, '1'),
(86, '2012-08-14', 33, 66, 14, 0, 87, 21.7, 94.7, 5.7, 27.2, 10.6, '1'),
(87, '2012-08-15', 36, 55, 13, 0.3, 82.4, 15.6, 92.5, 3.7, 22, 6.3, '1'),
(88, '2012-08-16', 36, 61, 18, 0.3, 80.2, 11.7, 90.4, 2.8, 17.6, 4.2, '1'),
(89, '2012-08-17', 37, 52, 18, 0, 89.3, 16, 100.7, 9.7, 22.9, 14.6, '1'),
(90, '2012-08-18', 36, 54, 18, 0, 89.4, 20, 110.9, 9.7, 27.5, 16.1, '1'),
(91, '2012-08-19', 35, 62, 19, 0, 89.4, 23.2, 120.9, 9.7, 31.3, 17.2, '1'),
(92, '2012-08-20', 35, 68, 19, 0, 88.3, 25.9, 130.6, 8.8, 34.7, 16.8, '1'),
(93, '2012-08-21', 36, 58, 19, 0, 88.6, 29.6, 141.1, 9.2, 38.8, 18.4, '1'),
(94, '2012-08-22', 36, 55, 17, 0, 89.1, 33.5, 151.3, 9.9, 43.1, 20.4, '1'),
(95, '2012-08-23', 36, 53, 16, 0, 89.5, 37.6, 161.5, 10.4, 47.5, 22.3, '1'),
(96, '2012-08-24', 34, 64, 14, 0, 88.9, 40.5, 171.3, 9, 50.9, 20.9, '1'),
(97, '2012-08-25', 35, 60, 15, 0, 88.9, 43.9, 181.3, 8.2, 54.7, 20.3, '1'),
(98, '2012-08-26', 31, 78, 17, 0, 85.8, 45.6, 190.6, 4.7, 57.1, 13.7, '1'),
(99, '2012-08-27', 33, 82, 21, 0, 84.9, 47, 200.2, 4.4, 59.3, 13.2, '1'),
(100, '2012-08-28', 34, 64, 16, 0, 89.4, 50.2, 210.4, 7.3, 62.9, 19.9, '1'),
(101, '2012-08-29', 35, 48, 18, 0, 90.1, 54.2, 220.4, 12.5, 67.4, 30.2, '1'),
(102, '2012-08-30', 35, 70, 17, 0.8, 72.7, 25.2, 180.4, 1.7, 37.4, 4.2, '0'),
(103, '2012-08-31', 28, 80, 21, 16.8, 52.5, 8.7, 8.7, 0.6, 8.3, 0.3, '0'),
(104, '2012-09-01', 25, 76, 17, 7.2, 46, 1.3, 7.5, 0.2, 1.8, 0.1, '0'),
(105, '2012-09-02', 22, 86, 15, 10.1, 30.5, 0.7, 7, 0, 1.1, 0, '0'),
(106, '2012-09-03', 25, 78, 15, 3.8, 42.6, 1.2, 7.5, 0.1, 1.7, 0, '0'),
(107, '2012-09-04', 29, 73, 17, 0.1, 68.4, 1.9, 15.7, 1.4, 2.9, 0.5, '0'),
(108, '2012-09-05', 29, 75, 16, 0, 80.8, 3.4, 24, 2.8, 5.1, 1.7, '1'),
(109, '2012-09-06', 29, 74, 19, 0.1, 75.8, 3.6, 32.2, 2.1, 5.6, 0.9, '0'),
(110, '2012-09-07', 31, 71, 17, 0.3, 69.6, 3.2, 30.1, 1.5, 5.1, 0.6, '0'),
(111, '2012-09-08', 30, 73, 17, 0.9, 62, 2.6, 8.4, 1.1, 3, 0.4, '0'),
(112, '2012-09-09', 30, 77, 15, 1, 56.1, 2.1, 8.4, 0.7, 2.6, 0.2, '0'),
(113, '2012-09-10', 33, 73, 12, 1.8, 59.9, 2.2, 8.9, 0.7, 2.7, 0.3, '0'),
(114, '2012-09-11', 30, 77, 21, 1.8, 58.5, 1.9, 8.4, 1.1, 2.4, 0.3, '0'),
(115, '2012-09-12', 29, 88, 13, 0, 71, 2.6, 16.6, 1.2, 3.7, 0.5, '0'),
(116, '2012-09-13', 25, 86, 21, 4.6, 40.9, 1.3, 7.5, 0.1, 1.8, 0, '0'),
(117, '2012-09-14', 22, 76, 26, 8.3, 47.4, 1.1, 7, 0.4, 1.6, 0.1, '0'),
(118, '2012-09-15', 24, 82, 15, 0.4, 44.9, 0.9, 7.3, 0.2, 1.4, 0, '0'),
(119, '2012-09-16', 30, 65, 14, 0, 78.1, 3.2, 15.7, 1.9, 4.2, 0.8, '0'),
(120, '2012-09-17', 31, 52, 14, 0, 87.7, 6.4, 24.3, 6.2, 7.7, 5.9, '1'),
(121, '2012-09-18', 32, 49, 11, 0, 89.4, 9.8, 33.1, 6.8, 11.3, 7.7, '1'),
(122, '2012-09-19', 29, 57, 14, 0, 89.3, 12.5, 41.3, 7.8, 14.2, 9.7, '1'),
(123, '2012-09-20', 28, 84, 18, 0, 83.8, 13.5, 49.3, 4.5, 16, 6.3, '1'),
(124, '2012-09-21', 31, 55, 11, 0, 87.8, 16.5, 57.9, 5.4, 19.2, 8.3, '1'),
(125, '2012-09-22', 31, 50, 19, 0.6, 77.8, 10.6, 41.4, 2.4, 12.9, 2.8, '0'),
(126, '2012-09-23', 32, 54, 11, 0.5, 73.7, 7.3, 30.4, 1.2, 9.6, 0.7, '0'),
(127, '2012-09-24', 29, 65, 19, 0.6, 68.3, 5.5, 15.2, 1.5, 5.8, 0.7, '0'),
(128, '2012-09-25', 26, 81, 21, 5.8, 48.6, 3, 7.7, 0.4, 3, 0.1, '0'),
(129, '2012-09-26', 31, 54, 11, 0, 82, 6, 16.3, 2.5, 6.2, 1.7, '0'),
(130, '2012-09-27', 31, 66, 11, 0, 85.7, 8.3, 24.9, 4, 9, 4.1, '1'),
(131, '2012-09-28', 32, 47, 14, 0.7, 77.5, 7.1, 8.8, 1.8, 6.8, 0.9, '0'),
(132, '2012-09-29', 26, 80, 16, 1.8, 47.4, 2.9, 7.7, 0.3, 3, 0.1, '0'),
(133, '2012-09-30', 25, 78, 14, 1.4, 45, 1.9, 7.5, 0.2, 2.4, 0.1, '0');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
