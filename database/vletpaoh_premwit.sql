-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2015 年 12 月 28 日 14:18
-- サーバのバージョン： 5.5.31
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vletpaoh_premwit`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `alphabet_cost`
--

CREATE TABLE IF NOT EXISTS `alphabet_cost` (
  `alphabet` char(1) DEFAULT NULL,
  `percent` double DEFAULT NULL,
  `cost` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `alphabet_cost`
--

INSERT INTO `alphabet_cost` (`alphabet`, `percent`, `cost`) VALUES
('A', 8.17, 110),
('B', 1.49, 20),
('C', 2.78, 30),
('D', 4.25, 60),
('E', 12.7, 180),
('F', 2.23, 30),
('G', 2.02, 20),
('H', 6.09, 80),
('I', 6.97, 90),
('J', 0.15, 10),
('K', 0.77, 10),
('L', 4.03, 50),
('M', 2.41, 30),
('N', 6.75, 90),
('O', 7.51, 100),
('P', 1.93, 20),
('Q', 0.1, 10),
('R', 5.99, 80),
('S', 6.33, 90),
('T', 9.06, 120),
('U', 2.76, 30),
('V', 0.98, 10),
('W', 2.36, 30),
('X', 0.15, 10),
('Y', 1.97, 20),
('Z', 0.07, 10),
('a', 8.17, 110),
('b', 1.49, 20),
('c', 2.78, 30),
('d', 4.25, 60),
('e', 12.7, 180),
('f', 2.23, 30),
('g', 2.02, 20),
('h', 6.09, 80),
('i', 6.97, 90),
('j', 0.15, 10),
('k', 0.77, 10),
('l', 4.03, 50),
('m', 2.41, 30),
('n', 6.75, 90),
('o', 7.51, 100),
('p', 1.93, 20),
('q', 0.1, 10),
('r', 5.99, 80),
('s', 6.33, 90),
('t', 9.06, 120),
('u', 2.76, 30),
('v', 0.98, 10),
('w', 2.36, 30),
('x', 0.15, 10),
('y', 1.97, 20),
('z', 0.07, 10);

-- --------------------------------------------------------

--
-- テーブルの構造 `bank_account`
--

CREATE TABLE IF NOT EXISTS `bank_account` (
  `group_number` int(11) DEFAULT NULL,
  `money` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `bank_account`
--

INSERT INTO `bank_account` (`group_number`, `money`) VALUES
(1, 21004326),
(2, 7040),
(3, 12109),
(4, 4780),
(5, 72448),
(6, 5614),
(7, 6070),
(8, 14655),
(9, 1512),
(10, 11727),
(11, 17012),
(12, 9944),
(13, 17048),
(14, 17122),
(15, 8821),
(16, 5260),
(17, 23374),
(18, 9802),
(19, 31569),
(20, 28484),
(21, 24700),
(22, 10652),
(23, 38754),
(24, 5363);

-- --------------------------------------------------------

--
-- テーブルの構造 `bidding_cmd`
--

CREATE TABLE IF NOT EXISTS `bidding_cmd` (
  `group_number` int(11) NOT NULL DEFAULT '0',
  `bid_max` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `bidding_cmd`
--

INSERT INTO `bidding_cmd` (`group_number`, `bid_max`) VALUES
(6, 3000);

-- --------------------------------------------------------

--
-- テーブルの構造 `card_cost`
--

CREATE TABLE IF NOT EXISTS `card_cost` (
  `card_type` varchar(255) NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `card_cost`
--

INSERT INTO `card_cost` (`card_type`, `cost`) VALUES
('green1', 400),
('green2', 1200),
('green3', 3600),
('blue1', 480),
('blue2', 1440),
('blue3', 4500),
('red1', 600),
('red2', 1800),
('red3', 5400);

-- --------------------------------------------------------

--
-- テーブルの構造 `card_drop_pool_1`
--

CREATE TABLE IF NOT EXISTS `card_drop_pool_1` (
  `group_id` int(11) NOT NULL,
  `red1` int(11) NOT NULL DEFAULT '0',
  `red2` int(11) NOT NULL DEFAULT '0',
  `red3` int(11) NOT NULL DEFAULT '0',
  `green1` int(11) NOT NULL DEFAULT '0',
  `green2` int(11) NOT NULL DEFAULT '0',
  `green3` int(11) DEFAULT '0',
  `blue1` int(11) NOT NULL DEFAULT '0',
  `blue2` int(11) NOT NULL DEFAULT '0',
  `blue3` int(11) NOT NULL DEFAULT '0',
  `rg1` int(11) NOT NULL DEFAULT '0',
  `gb1` int(11) NOT NULL DEFAULT '0',
  `rb1` int(11) NOT NULL DEFAULT '0',
  `rg2` int(11) NOT NULL DEFAULT '0',
  `gb2` int(11) NOT NULL DEFAULT '0',
  `rb2` int(11) NOT NULL,
  `rb3` int(11) NOT NULL DEFAULT '0',
  `rg3` int(11) NOT NULL DEFAULT '0',
  `gb3` int(11) NOT NULL DEFAULT '0',
  `red4` int(11) NOT NULL DEFAULT '0',
  `green4` int(11) NOT NULL DEFAULT '0',
  `blue4` int(11) NOT NULL DEFAULT '0',
  `rgb1` int(11) NOT NULL DEFAULT '0',
  `rgb2` int(11) NOT NULL DEFAULT '0',
  `rgb3` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `card_drop_pool_1`
--

INSERT INTO `card_drop_pool_1` (`group_id`, `red1`, `red2`, `red3`, `green1`, `green2`, `green3`, `blue1`, `blue2`, `blue3`, `rg1`, `gb1`, `rb1`, `rg2`, `gb2`, `rb2`, `rb3`, `rg3`, `gb3`, `red4`, `green4`, `blue4`, `rgb1`, `rgb2`, `rgb3`) VALUES
(1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(16, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(17, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(18, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(19, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(21, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(23, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(24, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- テーブルの構造 `card_drop_pool_2`
--

CREATE TABLE IF NOT EXISTS `card_drop_pool_2` (
  `group_id` int(11) NOT NULL,
  `red1` int(11) NOT NULL DEFAULT '0',
  `red2` int(11) NOT NULL DEFAULT '0',
  `red3` int(11) NOT NULL DEFAULT '0',
  `green1` int(11) NOT NULL DEFAULT '0',
  `green2` int(11) NOT NULL DEFAULT '0',
  `green3` int(11) DEFAULT '0',
  `blue1` int(11) NOT NULL DEFAULT '0',
  `blue2` int(11) NOT NULL DEFAULT '0',
  `blue3` int(11) NOT NULL DEFAULT '0',
  `rg1` int(11) NOT NULL DEFAULT '0',
  `gb1` int(11) NOT NULL DEFAULT '0',
  `rb1` int(11) NOT NULL DEFAULT '0',
  `rg2` int(11) NOT NULL DEFAULT '0',
  `gb2` int(11) NOT NULL DEFAULT '0',
  `rb2` int(11) NOT NULL,
  `rb3` int(11) NOT NULL DEFAULT '0',
  `rg3` int(11) NOT NULL DEFAULT '0',
  `gb3` int(11) NOT NULL DEFAULT '0',
  `red4` int(11) NOT NULL DEFAULT '0',
  `green4` int(11) NOT NULL DEFAULT '0',
  `blue4` int(11) NOT NULL DEFAULT '0',
  `rgb1` int(11) NOT NULL DEFAULT '0',
  `rgb2` int(11) NOT NULL DEFAULT '0',
  `rgb3` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `card_drop_pool_2`
--

INSERT INTO `card_drop_pool_2` (`group_id`, `red1`, `red2`, `red3`, `green1`, `green2`, `green3`, `blue1`, `blue2`, `blue3`, `rg1`, `gb1`, `rb1`, `rg2`, `gb2`, `rb2`, `rb3`, `rg3`, `gb3`, `red4`, `green4`, `blue4`, `rgb1`, `rgb2`, `rgb3`) VALUES
(1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(16, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(17, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(18, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(19, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(21, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(23, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(24, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- テーブルの構造 `card_drop_pool_3`
--

CREATE TABLE IF NOT EXISTS `card_drop_pool_3` (
  `group_id` int(11) NOT NULL,
  `red1` int(11) NOT NULL DEFAULT '0',
  `red2` int(11) NOT NULL DEFAULT '0',
  `red3` int(11) NOT NULL DEFAULT '0',
  `green1` int(11) NOT NULL DEFAULT '0',
  `green2` int(11) NOT NULL DEFAULT '0',
  `green3` int(11) DEFAULT '0',
  `blue1` int(11) NOT NULL DEFAULT '0',
  `blue2` int(11) NOT NULL DEFAULT '0',
  `blue3` int(11) NOT NULL DEFAULT '0',
  `rg1` int(11) NOT NULL DEFAULT '0',
  `gb1` int(11) NOT NULL DEFAULT '0',
  `rb1` int(11) NOT NULL DEFAULT '0',
  `rg2` int(11) NOT NULL DEFAULT '0',
  `gb2` int(11) NOT NULL DEFAULT '0',
  `rb2` int(11) NOT NULL,
  `rb3` int(11) NOT NULL DEFAULT '0',
  `rg3` int(11) NOT NULL DEFAULT '0',
  `gb3` int(11) NOT NULL DEFAULT '0',
  `red4` int(11) NOT NULL DEFAULT '0',
  `green4` int(11) NOT NULL DEFAULT '0',
  `blue4` int(11) NOT NULL DEFAULT '0',
  `rgb1` int(11) NOT NULL DEFAULT '0',
  `rgb2` int(11) NOT NULL DEFAULT '0',
  `rgb3` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `card_drop_pool_3`
--

INSERT INTO `card_drop_pool_3` (`group_id`, `red1`, `red2`, `red3`, `green1`, `green2`, `green3`, `blue1`, `blue2`, `blue3`, `rg1`, `gb1`, `rb1`, `rg2`, `gb2`, `rb2`, `rb3`, `rg3`, `gb3`, `red4`, `green4`, `blue4`, `rgb1`, `rgb2`, `rgb3`) VALUES
(1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(16, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(17, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(18, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(19, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(21, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(23, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(24, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- テーブルの構造 `card_drop_pool_4`
--

CREATE TABLE IF NOT EXISTS `card_drop_pool_4` (
  `group_id` int(11) NOT NULL,
  `red1` int(11) NOT NULL DEFAULT '0',
  `red2` int(11) NOT NULL DEFAULT '0',
  `red3` int(11) NOT NULL DEFAULT '0',
  `green1` int(11) NOT NULL DEFAULT '0',
  `green2` int(11) NOT NULL DEFAULT '0',
  `green3` int(11) DEFAULT '0',
  `blue1` int(11) NOT NULL DEFAULT '0',
  `blue2` int(11) NOT NULL DEFAULT '0',
  `blue3` int(11) NOT NULL DEFAULT '0',
  `rg1` int(11) NOT NULL DEFAULT '0',
  `gb1` int(11) NOT NULL DEFAULT '0',
  `rb1` int(11) NOT NULL DEFAULT '0',
  `rg2` int(11) NOT NULL DEFAULT '0',
  `gb2` int(11) NOT NULL DEFAULT '0',
  `rb2` int(11) NOT NULL,
  `rb3` int(11) NOT NULL DEFAULT '0',
  `rg3` int(11) NOT NULL DEFAULT '0',
  `gb3` int(11) NOT NULL DEFAULT '0',
  `red4` int(11) NOT NULL DEFAULT '0',
  `green4` int(11) NOT NULL DEFAULT '0',
  `blue4` int(11) NOT NULL DEFAULT '0',
  `rgb1` int(11) NOT NULL DEFAULT '0',
  `rgb2` int(11) NOT NULL DEFAULT '0',
  `rgb3` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `card_drop_pool_4`
--

INSERT INTO `card_drop_pool_4` (`group_id`, `red1`, `red2`, `red3`, `green1`, `green2`, `green3`, `blue1`, `blue2`, `blue3`, `rg1`, `gb1`, `rb1`, `rg2`, `gb2`, `rb2`, `rb3`, `rg3`, `gb3`, `red4`, `green4`, `blue4`, `rgb1`, `rgb2`, `rgb3`) VALUES
(1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(16, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(17, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(18, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(19, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(21, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(23, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(24, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- テーブルの構造 `card_drop_pool_boss`
--

CREATE TABLE IF NOT EXISTS `card_drop_pool_boss` (
  `group_id` int(11) NOT NULL,
  `red1` int(11) NOT NULL DEFAULT '0',
  `red2` int(11) NOT NULL DEFAULT '0',
  `red3` int(11) NOT NULL DEFAULT '0',
  `green1` int(11) NOT NULL DEFAULT '0',
  `green2` int(11) NOT NULL DEFAULT '0',
  `green3` int(11) DEFAULT '0',
  `blue1` int(11) NOT NULL DEFAULT '0',
  `blue2` int(11) NOT NULL DEFAULT '0',
  `blue3` int(11) NOT NULL DEFAULT '0',
  `rg1` int(11) NOT NULL DEFAULT '0',
  `gb1` int(11) NOT NULL DEFAULT '0',
  `rb1` int(11) NOT NULL DEFAULT '0',
  `rg2` int(11) NOT NULL DEFAULT '0',
  `gb2` int(11) NOT NULL DEFAULT '0',
  `rb2` int(11) NOT NULL,
  `rb3` int(11) NOT NULL DEFAULT '0',
  `rg3` int(11) NOT NULL DEFAULT '0',
  `gb3` int(11) NOT NULL DEFAULT '0',
  `red4` int(11) NOT NULL DEFAULT '0',
  `green4` int(11) NOT NULL DEFAULT '0',
  `blue4` int(11) NOT NULL DEFAULT '0',
  `rgb1` int(11) NOT NULL DEFAULT '0',
  `rgb2` int(11) NOT NULL DEFAULT '0',
  `rgb3` int(11) NOT NULL DEFAULT '0',
  `poison_per_shot` int(11) NOT NULL DEFAULT '0',
  `amount_shot` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `card_drop_pool_boss`
--

INSERT INTO `card_drop_pool_boss` (`group_id`, `red1`, `red2`, `red3`, `green1`, `green2`, `green3`, `blue1`, `blue2`, `blue3`, `rg1`, `gb1`, `rb1`, `rg2`, `gb2`, `rb2`, `rb3`, `rg3`, `gb3`, `red4`, `green4`, `blue4`, `rgb1`, `rgb2`, `rgb3`, `poison_per_shot`, `amount_shot`) VALUES
(1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(16, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(17, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(18, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(19, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(21, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(23, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(24, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- テーブルの構造 `interface_down_stat`
--

CREATE TABLE IF NOT EXISTS `interface_down_stat` (
  `stat` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `interface_down_stat`
--

INSERT INTO `interface_down_stat` (`stat`) VALUES
(1);

-- --------------------------------------------------------

--
-- テーブルの構造 `killer_annoucement_dmg`
--

CREATE TABLE IF NOT EXISTS `killer_annoucement_dmg` (
  `titan_1` int(11) NOT NULL,
  `titan_2` int(11) NOT NULL,
  `titan_3` int(11) NOT NULL,
  `titan_4` int(11) NOT NULL,
  `titan_boss` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `killer_annoucement_dmg`
--

INSERT INTO `killer_annoucement_dmg` (`titan_1`, `titan_2`, `titan_3`, `titan_4`, `titan_boss`) VALUES
(0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- テーブルの構造 `killer_annoucement_group`
--

CREATE TABLE IF NOT EXISTS `killer_annoucement_group` (
  `titan_1` int(11) NOT NULL DEFAULT '0',
  `titan_2` int(11) NOT NULL DEFAULT '0',
  `titan_3` int(11) NOT NULL DEFAULT '0',
  `titan_4` int(11) NOT NULL DEFAULT '0',
  `titan_boss` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `killer_annoucement_group`
--

INSERT INTO `killer_annoucement_group` (`titan_1`, `titan_2`, `titan_3`, `titan_4`, `titan_boss`) VALUES
(0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- テーブルの構造 `message_inbox`
--

CREATE TABLE IF NOT EXISTS `message_inbox` (
  `Message` varchar(255) NOT NULL,
  `From_who` varchar(255) NOT NULL,
  `Time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `message_inbox`
--

INSERT INTO `message_inbox` (`Message`, `From_who`, `Time`) VALUES
('THIS IS AN TEST MESSAGE!', 'phpMyAdmin', 'N/A');

-- --------------------------------------------------------

--
-- テーブルの構造 `player_status`
--

CREATE TABLE IF NOT EXISTS `player_status` (
  `group_number` int(11) DEFAULT NULL,
  `Hp` int(11) DEFAULT NULL,
  `LV` int(11) DEFAULT NULL,
  `EXP` int(11) DEFAULT NULL,
  `bonus` int(11) DEFAULT NULL,
  `death` int(11) NOT NULL DEFAULT '0',
  `bid_win` int(11) NOT NULL DEFAULT '0',
  `attack_all` int(11) NOT NULL DEFAULT '0',
  `hp_max` int(11) NOT NULL,
  `exp_max` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `player_status`
--

INSERT INTO `player_status` (`group_number`, `Hp`, `LV`, `EXP`, `bonus`, `death`, `bid_win`, `attack_all`, `hp_max`, `exp_max`) VALUES
(1, 43071, 11, 1000, 30, 0, 0, 468340, 75000, 6000),
(2, 39000, 11, 5000, 30, 0, 0, 406163, 75000, 6000),
(3, 45000, 10, 4000, 25, 0, 0, 1094930, 70000, 5000),
(4, 6000, 11, 3500, 30, 0, 0, 1316820, 75000, 6000),
(5, 39000, 11, 500, 30, 0, 0, 2643315, 75000, 6000),
(6, 49000, 11, 2000, 30, 0, 0, 1850210, 75000, 6000),
(7, 37000, 10, 4500, 25, 0, 0, 589238, 70000, 5000),
(8, 41600, 12, 0, 35, 0, 0, 983530, 80000, 7000),
(9, 37000, 10, 4000, 25, 0, 0, 294035, 70000, 5000),
(10, 42000, 11, 2000, 30, 0, 0, 1320070, 75000, 6000),
(11, 67000, 10, 2500, 25, 0, 0, 303135, 70000, 5000),
(12, 0, 13, 2000, 40, 0, 0, 523660, 85000, 8000),
(13, 36000, 12, 3000, 35, 0, 0, 2239381, 80000, 7000),
(14, 49000, 11, 2500, 30, 0, 0, 728515, 75000, 6000),
(15, 42000, 12, 2500, 35, 0, 0, 1763245, 80000, 7000),
(16, 45000, 11, 2500, 30, 0, 0, 3105545, 75000, 6000),
(17, 37000, 10, 4000, 25, 0, 0, 935613, 70000, 5000),
(18, 57000, 11, 0, 30, 0, 0, 836090, 75000, 6000),
(19, 37000, 10, 4000, 25, 0, 0, 1682844, 70000, 5000),
(20, 45000, 11, 2000, 30, 0, 0, 3537107, 75000, 6000),
(21, 65036, 11, 500, 30, 0, 0, 5752839, 75000, 6000),
(22, 57000, 11, 5500, 30, 0, 0, 4116860, 75000, 6000),
(23, 37000, 10, 3500, 25, 0, 0, 1369325, 70000, 5000),
(24, 42000, 11, 4500, 30, 0, 0, 3411327, 75000, 6000);

-- --------------------------------------------------------

--
-- テーブルの構造 `titan_status`
--

CREATE TABLE IF NOT EXISTS `titan_status` (
  `titan_name` int(11) NOT NULL,
  `titan_hp` int(11) NOT NULL,
  `titan_exp` int(11) NOT NULL,
  `titan_atk` int(11) NOT NULL,
  `titan_atk_max` int(11) NOT NULL,
  `titan_hp_max` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `titan_status`
--

INSERT INTO `titan_status` (`titan_name`, `titan_hp`, `titan_exp`, `titan_atk`, `titan_atk_max`, `titan_hp_max`) VALUES
(0, 0, 500, 0, 15000, 59846601),
(1, 0, 500, 0, 4000, 20000000),
(2, 0, 500, 0, 4000, 20000000),
(3, 0, 500, 0, 4000, 20000000),
(4, 0, 500, 0, 4000, 20000000);

-- --------------------------------------------------------

--
-- テーブルの構造 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user` varchar(255) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `permission` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `user`
--

INSERT INTO `user` (`user`, `password`, `name`, `permission`) VALUES
('BeamBeamMuhi', 'dd3484f29d51ee8b2c3eb03df3fd18e6', 'BeamBeam', 'Administrator'),
('Namejjang', 'c56d0e9a7ccec67b4ea131655038d604', 'Namejjang', 'Staff'),
('KornKung', '34743f002c6723bfcdc9a746beac2f72', 'KornAS', 'Bid'),
('Prizepraew', 'e93e78a22822ce4251c79141ef00a39a', 'Prizepraew', 'Staff'),
('Wanaleena ', '2f30c53259ad266ef42e83d60791337a', 'Wanaleena', 'Staff'),
('por333', 'd1629be9ecd116fb63c703cc19b567b7', 'por', 'Shop_Alphabet'),
('S5806996', 'c4302c90d7d8d803743a2cf809aba8f0', 'fONkt', 'Staff'),
('pianoza', 'b2adaf1ad18c9a16a92680fadceb2f7f', 'piano:)', 'Bid'),
('KhingSaGa', '1311cea4d270e527035f01881875df2e', 'KhingSaGa', 'Shop_Alphabet'),
('Poom', '0d117a8db51df0bce846752899ed9d06', 'Poom', 'Staff'),
('I_Bumyametha', 'a71c9355f4672a1953af3aeb09fd4d00', 'Alpha-MHC', 'Shop_Alphabet'),
('techut', '21d5631c50199f27127469e0c145f4cb', 'Te[NOT]chut', 'Staff'),
('Sim', '8420c65a363f1e7833faff7656e7dbb1', 'Sim', 'Card_Drop'),
('Naravut', 'c56d0e9a7ccec67b4ea131655038d604', '&#128405;Abadabee Zuzeeloto&#128405;', 'Bank'),
('Naravutt', 'c56d0e9a7ccec67b4ea131655038d604', '&#128293;Abadabee Zuzeeloto&#128293;', 'Bank'),
('Honoka_chan10', 'e3a8c85de630f832cf07eb7355aa6d7a', 'Kousaka Honoka', 'Card_Drop'),
('MirrorCraze', 'fuhq3938rj7h47hok02dowjfi38hfjoad', 'MirrorTheCreator', 'Supervisor'),
('MirrorBank', '7f065c625cac90f5a4b3f676a00bd5f5', 'MirrortheBank', 'Bank'),
('iceponlakrit', '00ba9a2ef0bd4d648c9859c0befa4cf2', 'ÁÕ¤¹ºÍ¡ÇèÒª×èÍ¼ÁÂÒÇ ¼Á¡çäÁèà¢éÒã¨ÇèÒª×èÍ¼ÁÂÒÇµÃ§äË¹ ¶ÒÁ¨ÃÔ§æª×èÍ¼ÁÂÒÇËÃÍ  ª×èèÍ¼ÁäÁèä´éÂÒÇ¹Ðá¤èÊÑé¹æ ã¤ÃÇèÒª×èÍ¼ÁÂÒÇâ¤ÃµÁÑèÇ¼Áª×èÍ ... àËç¹ÁÑéÂäÁèÂÒÇ', 'Bank'),
('KwsNarak', 'ce09563b6674178ca26a37261a342eda', 'KwsNarak', 'Card_Drop'),
('feilley', '506f85b641431774813f742618ccb7b2', 'feilley', 'Bank'),
('yamazhakim', '4ab7c345a77cc069841217f8737aafa5', 'yamazhakim', 'Card_Drop'),
('HunterZden', 'd7bebd0940c32c1ef9df0d7c64c9452b', 'panda_kung', 'Staff'),
('tonliew16442', 'abf8ee2a6da50ea2367fb6d845078858', 'Tonliew', 'Shop_Alphabet'),
('ArcherArch', '836c97aef362b64518a0f5af2c52f097', 'ArcherArch', 'Staff'),
('nanniiz', 'c612a130dfc7046e8323c906e85f5a7c', 'anatha', 'Shop_Alphabet'),
('Momo_Panyada', '2db685117bc4ee6b5cad99893693c873', 'Momo_Panyada', 'Bank'),
('gayriffy', '54a5s1f51v2e05f1d1v2w54f65gbb12s1', 'Ray Riffy', 'Supervisor'),
('tonpho', '27d5422b9f083fac32031385e0345ddf', 'Pho', 'Staff'),
('Pear', '5a22e6c339c96c9c0513a46e44c39683', 'Pear', 'Staff'),
('FREezeSHadow', 'wfjnwn2ijkmks62f989b8d9wwe98sd08a', 'Y.Nana', 'Supervisor'),
('Meiji', 'd82ba53825b198cf303cebe2e23aeabf', 'Meiji', 'Staff'),
('momentum', 'de25ea53f985da08030e3960f3011455', 'MOMENTUM', 'Bank'),
('satasis7', 'f4b6e08a7588e618fccdbb94fbbebb7b', 'Kkaow', 'Shop_Card'),
('S.Srt', '4160a7ece46661abeb724f93cd9464e4', 'yimsrp', 'Shop_Innovation'),
('yellowzaza', '8b80a486ad4796038b79fca9b435fd29', 'Noname', 'Card_Drop'),
('Pattawee', '2b966a9b9eada8913d9eb8b5f4e4e0e7', 'NPC', 'Shop_Alphabet'),
('Pongsatorn', 'e2cb70d06c478eda278f6d1a4f4dd178', 'Ball The Handsome Boy', 'Bank'),
('chayut', 'cc865317b69b9acde65374335262111e', 'Esp[R]essO', 'Shop_Card'),
('nuttdam', 'a628f98203307ea0635ed9cee73d062e', 'Nuttdam', 'Supervisor'),
('areefil', 'fdf3ca005b56eac0d59cc5a14d3ff029', 'Hello123', 'Healer'),
('chain011', '6136bf57cfa28b1d6df65a3b65d0d895', 'chain011', 'Staff'),
('RayaBurong25.1', 'v9wihv9398ghdv9j9e9w09jwd9jfjef9v', 'RayaBurong25.1', 'Supervisor'),
('Nana', '9c0d1d28f21970834b85d312e9f93fea', 'Nana', 'Bank'),
('film07010', '62f5faf761af4a10bb68fcba0b805345', 'Film', 'Shop_Card'),
('kasidithkop', 'ee9a56742e03e44fb328da4eb6fab1a2', 'kasidith', 'Card_Drop'),
('nentneny', '85dd998dc8e9585dd65518a7665be830', 'NENTNENY', 'Staff'),
('Boss', 'a2688a2a75100f6e21dcc1e3c873893a', 'Boss', 'Card_Drop'),
('Tongrockk', '8485eefca5428f2b20581f898f0015e0', 'Tongrockk', 'Staff'),
('Patriya', 'afc9055ba056071162ad42981acd3342', 'Patriya', 'Staff'),
('S5807041', 'be67ab519310279b4e00375f7d47bc8f', 'S5807041', 'Card_Drop'),
('sin_cos_tan', '7h2b9ewwe9jwe93j9we8h48sh8h8sehf', 'sin_cos_tan', 'Supervisor'),
('123456', 'c56d0e9a7ccec67b4ea131655038d604', 'C|ain', 'Healer'),
('S5806982', 'kegij3f9fijfijw45ofo846oskfkdmoo', 'New Terapit', 'Shop_Alphabet'),
('Millimeter', 'd68fe10051dae54566ba1a56f7270f91', 'Mil', 'Staff'),
('Tat12345', '7a359953e811ec895e958d9936557a1b', 'Tat', 'Card_Drop'),
('S5806990', '831125402bcdfaca96bfbfc41558e01e', 'Kol', 'Shop_Alphabet'),
('1234567', '730e923b7a809210a7ebd9ca6a25aa68', 'RzS', 'Card_Drop'),
('S5807086', 'f05b2edd14a6ed6e43469be362e2fd7c', 'ChiPusit', 'Staff'),
('S5807037', '68d0e7377ffb3d4b7fb9ce80e2e8d945', 'TuiTuiZa55', 'Healer'),
('S5806967', 'f0f375458c5fd4879b65c7b25a343001', 'ohmzaazaa999', 'Card_Drop'),
('Wanwan', '2f30c53259ad266ef42e83d60791337a', 'Wanwan', 'Staff');

-- --------------------------------------------------------

--
-- テーブルの構造 `verification_code`
--

CREATE TABLE IF NOT EXISTS `verification_code` (
  `Class` varchar(50) DEFAULT NULL,
  `Code` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `verification_code`
--

INSERT INTO `verification_code` (`Class`, `Code`) VALUES
('Administrator', 'UiRXP9qLznoA3SSd'),
('Staff', '7jm8EJi70X46tQW1'),
('Inspector', '0M5XPkIyT2SA31b6'),
('Bank', 'H5G6uT6F6gfrt67U'),
('Healer', 'DE56yfre456YFde4'),
('Shop_Alphabet', 'e345TE34rE45Ure5'),
('Shop_Card', 'F567g9Mb79Ht7T67'),
('Bid', 'XE3456yujkLP0987'),
('Card_Drop', 'VF678Knbt68oKO95'),
('Interface', '3D3dfRTG6hhJ8td3'),
('Shop_Innovation', 'f6Tij7UY9Ijh67R6');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
