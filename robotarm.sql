-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29 يونيو 2021 الساعة 06:06
-- إصدار الخادم: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `robotarm`
--

-- --------------------------------------------------------

--
-- بنية الجدول `motors`
--

CREATE TABLE `motors` (
  `Motor1` int(3) NOT NULL,
  `Motor2` int(3) NOT NULL,
  `Motor3` int(3) NOT NULL,
  `Motor4` int(3) NOT NULL,
  `Motor5` int(3) NOT NULL,
  `Motor6` int(3) NOT NULL,
  `S` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `motors`
--

INSERT INTO `motors` (`Motor1`, `Motor2`, `Motor3`, `Motor4`, `Motor5`, `Motor6`, `S`) VALUES
(10, 139, 71, 116, 38, 172, 1),
(90, 43, 11, 73, 124, 148, 1),
(90, 149, 75, 33, 125, 16, 1);

-- --------------------------------------------------------

--
-- بنية الجدول `offon`
--

CREATE TABLE `offon` (
  `Off` int(1) NOT NULL DEFAULT 0,
  `On` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `offon`
--

INSERT INTO `offon` (`Off`, `On`) VALUES
(1, 0),
(0, 1),
(1, 0),
(0, 1),
(1, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
