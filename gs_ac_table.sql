-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017 年 9 朁E28 日 15:34
-- サーバのバージョン： 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gs_db31`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_ac_table`
--

CREATE TABLE IF NOT EXISTS `gs_ac_table` (
`id` int(12) NOT NULL,
  `date` date NOT NULL,
  `salary` int(12) NOT NULL,
  `bonus` int(12) NOT NULL,
  `other_rev` int(12) NOT NULL,
  `sum_in` int(12) NOT NULL,
  `food` int(12) NOT NULL,
  `utility` int(12) NOT NULL,
  `trans_net` int(12) NOT NULL,
  `housing` int(12) NOT NULL,
  `daily` int(12) NOT NULL,
  `social` int(12) NOT NULL,
  `other_exp` int(12) NOT NULL,
  `sum_out` int(12) NOT NULL,
  `total` int(12) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_ac_table`
--

INSERT INTO `gs_ac_table` (`id`, `date`, `salary`, `bonus`, `other_rev`, `sum_in`, `food`, `utility`, `trans_net`, `housing`, `daily`, `social`, `other_exp`, `sum_out`, `total`) VALUES
(54, '2017-09-01', 0, 1000000, 0, 1000000, 0, 0, 0, 0, 0, 0, 0, 0, 1000000),
(67, '2017-09-03', 0, 0, 0, 0, 0, 0, 30000, 0, 0, 0, 0, 30000, 770000),
(68, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 530000),
(69, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 530000),
(70, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 530000),
(71, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 530000),
(72, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 530000),
(73, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 530000),
(74, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 530000),
(75, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 530000),
(66, '2017-09-03', 0, 0, 0, 0, 0, 0, 30000, 0, 0, 0, 0, 30000, 770000),
(65, '2017-09-03', 0, 0, 0, 0, 0, 0, 30000, 0, 0, 0, 0, 30000, 770000),
(64, '2017-09-03', 0, 0, 0, 0, 0, 0, 30000, 0, 0, 0, 0, 30000, 770000),
(55, '2017-09-02', 0, 0, 0, 0, 50000, 0, 0, 0, 0, 0, 0, 50000, -50000),
(56, '2017-09-02', 0, 0, 0, 0, 50000, 0, 0, 0, 0, 0, 0, 50000, -50000),
(57, '2017-09-02', 0, 0, 0, 0, 50000, 0, 0, 0, 0, 0, 0, 50000, -50000),
(58, '2017-09-02', 0, 0, 0, 0, 50000, 0, 0, 0, 0, 0, 0, 50000, -50000),
(59, '2017-09-03', 0, 0, 0, 0, 0, 0, 30000, 0, 0, 0, 0, 30000, 770000),
(60, '2017-09-03', 0, 0, 0, 0, 0, 0, 30000, 0, 0, 0, 0, 30000, 770000),
(61, '2017-09-03', 0, 0, 0, 0, 0, 0, 30000, 0, 0, 0, 0, 30000, 770000),
(62, '2017-09-03', 0, 0, 0, 0, 0, 0, 30000, 0, 0, 0, 0, 30000, 770000),
(63, '2017-09-03', 0, 0, 0, 0, 0, 0, 30000, 0, 0, 0, 0, 30000, 770000),
(76, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 530000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_ac_table`
--
ALTER TABLE `gs_ac_table`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gs_ac_table`
--
ALTER TABLE `gs_ac_table`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=77;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
