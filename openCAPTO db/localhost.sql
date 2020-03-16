-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 06, 2020 at 12:47 AM
-- Server version: 5.6.44-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `satellite_Data`
--
CREATE DATABASE IF NOT EXISTS `satellite_Data` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `satellite_Data`;

-- --------------------------------------------------------

--
-- Table structure for table `abc`
--

CREATE TABLE `abc` (
  `id` int(50) NOT NULL,
  `aptnumber` varchar(100) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(200) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `aptdate` varchar(50) NOT NULL,
  `aptime` varchar(50) NOT NULL,
  `services` varchar(200) NOT NULL,
  `applydate` varchar(50) NOT NULL,
  `remark` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `abc`
--

INSERT INTO `abc` (`id`, `aptnumber`, `name`, `email`, `telephone`, `aptdate`, `aptime`, `services`, `applydate`, `remark`) VALUES
(12, '567110510', 'shoes', 'xyz@email.com', '1111112121', '1/1/2020', '', '', '', ''),
(11, '557146101', 'shoes', 'xyz@email.com', '1111112121', '1/1/2020', '', '', '', ''),
(13, '326830803', 'shoes', 'xyz@email.com', '1111112121', '1/1/2020', '1:30am', 'Body Spa', '', ''),
(14, '258954811', 'shoes', 'xyz@email.com', '1111112121', '1/1/2020', '1:30am', 'Body Spa', '', ''),
(15, '143454831', 'shoes', 'xyz@email.com', '1111112121', '1/1/2020', '1:30am', 'Body Spa', '12/31/2019', ''),
(16, '247047892', 'shoes', 'xyz@email.com', '1111112121', '1/1/2020', '1:30am', 'Body Spa', '12/31/2019', ''),
(17, '692682343', 'shoes', 'xyz@email.com', '1111112121', '1/1/2020', '1:30am', 'Body Spa', '12/31/2019', ''),
(18, '447812430', 'shoes', 'xyz@email.com', '1111112121', '1/1/2020', '1:30am', 'Body Spa', '12/31/2019', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `appoitment`
--

CREATE TABLE `appoitment` (
  `id` int(50) NOT NULL,
  `aptnumber` varchar(100) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `telephone` int(20) NOT NULL,
  `aptdate` varchar(55) NOT NULL,
  `apttime` varchar(50) NOT NULL,
  `services` varchar(200) NOT NULL,
  `applydate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gsm_data`
--

CREATE TABLE `gsm_data` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `country` varchar(255) NOT NULL,
  `Brand` varchar(255) NOT NULL,
  `Operator` varchar(255) NOT NULL,
  `MCC` int(11) NOT NULL,
  `MNC` int(11) NOT NULL,
  `LAC` int(11) NOT NULL,
  `CellID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gsm_data`
--

INSERT INTO `gsm_data` (`id`, `date`, `country`, `Brand`, `Operator`, `MCC`, `MNC`, `LAC`, `CellID`) VALUES
(182, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 655),
(181, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 655),
(180, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 655),
(179, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 655),
(178, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 655),
(177, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 655),
(176, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 655),
(173, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 655),
(171, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 655),
(170, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 655),
(86, '0000-00-00', 'South Africa ', 'MNT', 'MNT Group', 555, 543, 4545, 758756),
(85, '0000-00-00', 'pak', 'MNT', 'MNT', 555, 543, 4545, 435345),
(84, '0000-00-00', 'south Africa', 'MTN', 'MTN Group', 445, 556, 54588, 669878),
(83, '0000-00-00', 'south Africa', 'MTN', 'MTN Group', 445, 556, 54588, 669878),
(184, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 655),
(185, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(186, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(187, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(188, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(189, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(190, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(191, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(192, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 655),
(193, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 655),
(194, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 655),
(195, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 655),
(196, '0000-00-00', 'Australia', 'Vodafone', 'Vodafone Hutchison Australia Proprietary Limited', 655, 10, 22823, 505),
(197, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 655),
(198, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 655),
(199, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 655),
(200, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 655),
(201, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 655),
(202, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 655),
(203, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 655),
(204, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 655),
(205, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 655),
(206, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 655),
(207, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 655),
(208, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 655),
(209, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 655),
(210, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 655),
(211, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 655),
(212, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 655),
(213, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 655),
(214, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 0, 0, 0, 0),
(215, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(216, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(217, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(218, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(219, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(220, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(221, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(222, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(223, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(224, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(225, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(226, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(227, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(228, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(229, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(230, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(231, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(232, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(233, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(234, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(235, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(236, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(237, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(238, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(239, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(240, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(241, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(242, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(243, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(244, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(245, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(246, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(247, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(248, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(249, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(250, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(251, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(252, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(253, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(254, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(255, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(256, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(257, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(258, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(259, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(260, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(261, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(262, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(263, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(264, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(265, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(266, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(267, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(268, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(269, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(270, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(271, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(272, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(273, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(274, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(275, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(276, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(277, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(278, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(279, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(280, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(281, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(282, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(284, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(285, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(286, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(287, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(288, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(289, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(290, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(291, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(292, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(293, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(294, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(295, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(296, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(297, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(298, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(299, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(300, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(301, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(302, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(303, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(304, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(305, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(306, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(307, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(308, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(309, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(310, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(311, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(312, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(313, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(314, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(315, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(316, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(317, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(318, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(319, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(320, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(321, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(322, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(323, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(324, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(325, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(326, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(327, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(328, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(329, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(330, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(331, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(332, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(334, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(335, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(336, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(337, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(338, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(339, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(340, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(341, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(342, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(343, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(344, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(345, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(346, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(347, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(348, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(349, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(350, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(351, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(352, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(353, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(354, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(355, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(356, '0000-00-00', 'Australia', 'Vodafone', 'Vodafone Hutchison Australia Proprietary Limited', 655, 10, 22823, 65424),
(357, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(358, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(359, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(360, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(361, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(362, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(363, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(364, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(365, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(366, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(367, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(368, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(369, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(370, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(371, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(372, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(373, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(374, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(375, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(376, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(377, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(378, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(379, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(380, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(381, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(382, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(383, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(384, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(385, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(386, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(387, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(388, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(389, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(390, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(391, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(392, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(393, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(394, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(395, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(396, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(397, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(398, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(399, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(400, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(401, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(402, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(403, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(404, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(405, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(406, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(407, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(408, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(409, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(410, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(411, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(412, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(413, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(414, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(415, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(416, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(417, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(418, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(419, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(420, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(421, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(422, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(423, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(424, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(425, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(426, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(427, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(428, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(429, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(430, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(431, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(432, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(433, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(434, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(435, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(436, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(437, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(438, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(439, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(440, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(441, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(442, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(443, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(444, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(445, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(446, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(447, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(448, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(449, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(450, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(451, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(452, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(453, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(454, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(455, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(456, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(457, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(458, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(459, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(460, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(461, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(462, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(463, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(464, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(465, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(466, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(467, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(468, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(469, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(470, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(471, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(472, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(473, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(474, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(475, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(476, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(477, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(478, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(479, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(480, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(481, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(482, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(483, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(484, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(485, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(486, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(487, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(488, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(489, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(490, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(491, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(492, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(493, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(494, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(495, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(496, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(497, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(498, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(499, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(501, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(502, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(503, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(504, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(505, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(506, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(507, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(508, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(509, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(510, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(511, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(512, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(513, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(514, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(515, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(516, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(517, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(518, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(519, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(520, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(521, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(522, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(523, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(524, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(525, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(526, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(527, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(528, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(529, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(530, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(531, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(532, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(533, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(534, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(535, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(536, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(537, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(538, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(539, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(540, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(541, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(542, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(543, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(544, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(545, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(546, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(547, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(548, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(549, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(550, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(551, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(552, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(553, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(554, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(555, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(556, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(557, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(558, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(559, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(560, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(561, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(562, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(563, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(564, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(565, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(566, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(567, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(568, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(569, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(570, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(571, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(572, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(573, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(574, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(575, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(576, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(577, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(578, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(579, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(580, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(581, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(582, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(583, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(584, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(585, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(586, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(587, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(588, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(589, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(590, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(591, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(592, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(593, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(594, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(595, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(596, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(597, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(598, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(599, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(600, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(601, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(602, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(603, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(604, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(605, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(606, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(607, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(608, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(609, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(610, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(611, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(612, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(613, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(614, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(615, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(616, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(617, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(618, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(619, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(620, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(621, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(622, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(623, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(624, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(625, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(626, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(627, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(628, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(629, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(630, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(631, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(632, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(633, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(634, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(635, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(636, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(637, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(638, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(639, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(640, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(641, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(642, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(643, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(644, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(645, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(646, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(647, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(648, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(649, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(650, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(651, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(652, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(653, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(654, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(655, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(656, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(657, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(658, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424),
(659, '0000-00-00', 'South Africa', 'MTN', 'MTN Group', 655, 10, 22823, 65424);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(250) NOT NULL,
  `Quantity` varchar(50) NOT NULL,
  `description` varchar(250) NOT NULL,
  `date` varchar(200) NOT NULL,
  `expiryDate` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`, `Quantity`, `description`, `date`, `expiryDate`) VALUES
(8, 'Scrub', '945Rs', '10', 'Whitening Scrub', '01/01/2020 ', '2020-02-29'),
(10, 'fair', '120Rs', '12', 'cream', '01/01/2020 03:14:55', '2020-02-22');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(50) NOT NULL,
  `amount` int(100) NOT NULL,
  `userid` varchar(250) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `amount`, `userid`, `date`) VALUES
(108, 60, '68d30a9594728bc39aa24be94b319d21', '2020-01-04'),
(101, 0, '', '2020-01-03'),
(107, 300, '123', '2020-01-04'),
(103, 0, '', '2020-01-03'),
(100, 0, '', '2020-01-03'),
(99, 0, '', '2020-01-03'),
(98, 0, '', '2020-01-03'),
(96, 0, '', '2020-01-02'),
(97, 0, '', '2020-01-03'),
(95, 0, '', '2020-01-02'),
(94, 0, '', '2020-01-02'),
(93, 0, '', '2020-01-02'),
(92, 0, '', '2020-01-02'),
(90, 0, '', '2020-01-02'),
(91, 0, '', '2020-01-02'),
(115, 300, '3ef815416f775098fe977004015c6193', '2020-01-05'),
(111, 300, '', '2020-01-05'),
(116, 300, '93db85ed909c13838ff95ccfa94cebd9', '2020-01-05'),
(117, 60, '', '2020-01-05');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` char(50) DEFAULT NULL,
  `UserName` char(50) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'test', 'admin', 7898799798, 'tester1@gmail.com', '202cb962ac59075b964b07152d234b70', '2019-07-25 06:21:50');

-- --------------------------------------------------------

--
-- Table structure for table `tblappointment`
--

CREATE TABLE `tblappointment` (
  `ID` int(10) NOT NULL,
  `AptNumber` varchar(80) DEFAULT NULL,
  `Name` varchar(120) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `PhoneNumber` bigint(11) DEFAULT NULL,
  `AptDate` varchar(120) DEFAULT NULL,
  `AptTime` varchar(120) DEFAULT NULL,
  `Services` varchar(120) DEFAULT NULL,
  `ApplyDate` varchar(50) DEFAULT NULL,
  `Remark` varchar(200) DEFAULT NULL,
  `Status` varchar(200) DEFAULT NULL,
  `RemarkDate` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblappointment`
--

INSERT INTO `tblappointment` (`ID`, `AptNumber`, `Name`, `Email`, `PhoneNumber`, `AptDate`, `AptTime`, `Services`, `ApplyDate`, `Remark`, `Status`, `RemarkDate`) VALUES
(15, '703046122', 'arsalan', 'abc.@register.com', 1234567898, '2/6/2020', '1:30am', 'Normal Menicure', '01/01/2020 01:30:34', 'Testing', '1', '01/01/2020 01:31:05'),
(16, '473243824', 'shoes', 'admin@admin.com', 1234567898, '1/31/2020', '12:30am', 'Fruit Facial', '01/02/2020 01:02:41', '0', '0', '0'),
(17, '848232310', 'Kazim Hussain', 'embeddedworld770@gmail.com', 3055364344, '1/22/2020', '12:30am', 'Fruit Facial', '01/04/2020 05:55:02', '0', '0', '0'),
(18, '249617682', 'Kazim Hussain', 'kazimhussain440@gmail.com', 923055364344, '1/29/2020', '12:30am', 'Deluxe Pedicure', '01/04/2020 06:05:45', '0', '0', '0'),
(19, '721890026', 'arsalan', 'admin@admin.com', 923425506624, '2/6/2020', '12:00am', 'Charcol Facial', '01/04/2020 06:07:11', '0', '0', '0'),
(20, '418428453', 'Kazim Hussain', 'embeddedworld770@gmail.com', 3055364344, '1/28/2020', '1:00am', 'Charcol Facial', '01/04/2020 06:09:04', '0', '0', '0'),
(21, '459322215', 'arsalan', 'admin@admin.com', 923425506624, '2/6/2020', '12:00am', 'Charcol Facial', '01/04/2020 06:10:41', '0', '0', '0'),
(22, '248655982', 'arsalan', 'abc.@register.com', 923361103326, '1/10/2020', '12:30am', 'Body Spa', '01/04/2020 06:11:15', '0', '0', '0'),
(23, '561191468', 'arsalan', 'abc.@register.com', 923361103326, '1/10/2020', '12:30am', 'Body Spa', '01/04/2020 06:12:46', '0', '0', '0'),
(24, '892433102', 'arsalan', 'abc.@register.com', 923361103326, '1/10/2020', '12:30am', 'Body Spa', '01/04/2020 06:15:22', '0', '0', '0'),
(25, '131518262', 'arsalan', 'abc.@register.com', 923361103326, '1/10/2020', '12:30am', 'Body Spa', '01/04/2020 06:16:15', '0', '0', '0'),
(26, '629128705', 'arsalan', 'admin@admin.com', 923425506624, '2/6/2020', '1:00am', 'Charcol Facial', '01/04/2020 06:16:30', '0', '0', '0'),
(27, '149912137', 'Kazim Hussain', 'kazimhussain440@gmail.com', 3055364344, '1/29/2020', '12:30am', 'Normal Menicure', '01/04/2020 06:17:24', '0', '0', '0'),
(28, '943813220', 'arsalan', 'abc.@register.com', 435346574576345, '2/6/2020', '1:30am', 'Charcol Facial', '01/04/2020 06:18:51', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tblcustomers`
--

CREATE TABLE `tblcustomers` (
  `ID` int(10) NOT NULL,
  `Name` varchar(120) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(11) DEFAULT NULL,
  `Gender` enum('Female','Male','Transgender') DEFAULT NULL,
  `Details` mediumtext,
  `CreationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcustomers`
--

INSERT INTO `tblcustomers` (`ID`, `Name`, `Email`, `MobileNumber`, `Gender`, `Details`, `CreationDate`, `UpdationDate`) VALUES
(7, 'arsalan', 'test@test.com', 12345678, 'Male', 'Testing', '2019-12-31 06:06:47', '2020-01-01 08:35:45'),
(8, 'admin', 'admin@admin.com', 12345678, 'Female', 'sdsasdsda', '2019-12-31 06:07:00', '2019-12-31 06:16:40');

-- --------------------------------------------------------

--
-- Table structure for table `tblinvoice`
--

CREATE TABLE `tblinvoice` (
  `id` int(11) NOT NULL,
  `Userid` int(11) DEFAULT NULL,
  `ServiceId` int(11) DEFAULT NULL,
  `BillingId` int(11) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblinvoice`
--

INSERT INTO `tblinvoice` (`id`, `Userid`, `ServiceId`, `BillingId`, `PostingDate`) VALUES
(1, 2, 2, 621839533, '2018-07-30 15:33:22'),
(2, 2, 5, 621839533, '2019-06-04 15:33:22'),
(3, 2, 6, 621839533, '2019-07-30 15:33:22'),
(4, 2, 7, 621839533, '2019-07-30 15:33:22'),
(5, 1, 1, 904156433, '2019-07-30 15:40:42'),
(6, 1, 2, 904156433, '2019-07-30 15:40:42'),
(7, 1, 3, 904156433, '2019-07-30 15:40:42'),
(8, 1, 4, 904156433, '2019-07-30 15:40:42'),
(9, 3, 1, 225057023, '2019-07-30 16:03:32'),
(10, 3, 8, 225057023, '2019-07-30 16:03:32'),
(11, 3, 1, 970548035, '2019-07-31 04:42:45'),
(12, 3, 6, 970548035, '2019-07-31 04:42:45'),
(13, 3, 9, 970548035, '2019-07-31 04:42:45'),
(14, 4, 2, 942476283, '2019-08-19 13:39:13'),
(15, 4, 12, 942476283, '2019-08-19 13:39:13'),
(16, 5, 3, 297018570, '2019-08-21 16:25:27'),
(17, 5, 4, 297018570, '2019-08-21 16:25:27'),
(18, 5, 8, 297018570, '2019-08-21 16:25:27'),
(19, 7, 10, 973526392, '2020-01-01 08:33:18'),
(20, 7, 11, 973526392, '2020-01-01 08:33:18'),
(21, 7, 12, 973526392, '2020-01-01 08:33:18');

-- --------------------------------------------------------

--
-- Table structure for table `tblpage`
--

CREATE TABLE `tblpage` (
  `ID` int(10) NOT NULL,
  `PageType` varchar(200) DEFAULT NULL,
  `PageTitle` mediumtext,
  `PageDescription` mediumtext,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `UpdationDate` date DEFAULT NULL,
  `Timing` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpage`
--

INSERT INTO `tblpage` (`ID`, `PageType`, `PageTitle`, `PageDescription`, `Email`, `MobileNumber`, `UpdationDate`, `Timing`) VALUES
(1, 'aboutus', 'About Us', '                Our main focus is on quality and hygiene. Our Parlour is well equipped with advanced technology equipments and provides best quality services. Our staff is well trained and experienced, offering advanced services in Skin, Hair and Body Shaping that will provide you with a luxurious experience that leave you feeling relaxed and stress free. The specialities in the parlour are, apart from regular bleachings and Facials, many types of hairstyles, Bridal and cine make-up and different types of Facials &amp; fashion hair colourings.', NULL, NULL, NULL, ''),
(2, 'contactus', 'Contact Us', '        Testing', 'info@gmail.com', 7896541236, NULL, '10:30 am to 7:30 pm');

-- --------------------------------------------------------

--
-- Table structure for table `tblservices`
--

CREATE TABLE `tblservices` (
  `ID` int(10) NOT NULL,
  `ServiceName` varchar(200) DEFAULT NULL,
  `Cost` int(10) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblservices`
--

INSERT INTO `tblservices` (`ID`, `ServiceName`, `Cost`, `CreationDate`) VALUES
(1, 'O3 Facial', 1200, '2019-07-25 11:22:38'),
(2, 'Fruit Facial', 500, '2019-07-25 11:22:53'),
(3, 'Charcol Facial', 1000, '2019-07-25 11:23:10'),
(4, 'Deluxe Menicure', 500, '2019-07-25 11:23:34'),
(5, 'Deluxe Pedicure', 600, '2019-07-25 11:23:47'),
(6, 'Normal Menicure', 300, '2019-07-25 11:24:01'),
(7, 'Normal Pedicure', 400, '2019-07-25 11:24:19'),
(8, 'U-Shape Hair Cut', 250, '2019-07-25 11:24:38'),
(9, 'Layer Haircut', 550, '2019-07-25 11:24:53'),
(10, 'Rebonding', 3999, '2019-07-25 11:25:08'),
(11, 'Loreal Hair Color(Full)', 1200, '2019-07-25 11:25:35'),
(12, 'Body Spa', 1500, '2019-08-19 13:36:27'),
(14, 'Test', 100, '2019-08-21 15:45:50'),
(15, 'ABC', 200, '2019-08-21 16:23:23'),
(16, 'Testing', 120, '2020-01-01 08:32:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `imei` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `telephone` varchar(200) NOT NULL,
  `cnic` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL,
  `password` varchar(200) NOT NULL,
  `image` varchar(191) NOT NULL,
  `isadmin` tinyint(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `imei`, `address`, `telephone`, `cnic`, `description`, `password`, `image`, `isadmin`) VALUES
(56, 'Admin', '0', 'adminsir00@gmail.com', '', 'ofifice no# f24 Rahmanabad Rawalpindi pakistan', '0311-5435556', '43243-4455345-4', 'This is admin portal', 'admin@480', 'Images/client.jpg', 1),
(54, 'admin', '0', 'saadali8345@gmail.com', '', 'backside of suleman bakery, afshan colony near ziarat', '0336-1103322', '37405-1491560-1', '1wqeeeeeeeeeeee', '12345678', 'Images/profile.png', 0),
(55, 'Kazim Hussain', '0', 'kazimhussain440@gmail.com', '', 'Rawalpindi', '0305-5364344', '02145-2547885-2', 'Hy this is just for testing purpose of update', '12345678', 'Images/Tutor007.png', 0),
(82, 'Umer', 'Abbasi', 'embeddedworld770@gmail.com', '457554747745756', 'ofifice no# f24 Rahmanabad Rawalpindi pakistan', '03155163189', '8130275021789', 'hi', 'umerserwnjkf3rhsjkd', 'Images/Desert.jpg', 0),
(83, 'Umer', 'Abbasi', 'embeddedworld770@gmail.com', '457554747745756', 'ofifice no# f24 Rahmanabad Rawalpindi pakistan', '03155163189', '8130257680910', 'hi', '6ftf76fghcgfx', 'Images/Lighthouse.jpg', 0),
(74, 'Sheikh Saad', '0', 'saad-king_1@hotmail.com', '', 'House No. CB511/1, Afshan Colony near ziarat, Musa Street', '0333-3333333', '37405-1491560-9', 'ssssssssss', '12345678', 'Images/pngtree-user-icon-vector-illustration-in-glyph-style-for-any-purpose-png-image_975597.jpg', 0),
(75, 'admin', '0', 'xyz@email.com', '', 'link road Linking park new york', '+27 061 379 3', '3423423423423', 'dfsdfsdfdsfsd', '12345678', 'Images/www.YTS.LT.jpg', 0),
(71, 'jhon', '0', 'jhon@jhon.com', '', 'link road Linking park new york', '0300-0000000', '11111-1111111-1', 'saddads', '12345678', 'Images/avatar-01.jpg', 0),
(69, 'Carel SJ Herbst', '0', 'admin@admin.com', '', 'Neural Robotics HQ Pretoria ', '0300-0000000', '11111-1111111-1', 'Supper User Admin ', '12345678', 'Images/Carel SJ Herbst.jpg', 1),
(70, 'user', '0', 'user@user.com', '', 'link road Linking park new york', '0300-0000000', '11111-1111111-1', 'sadsad', '12345678', 'Images/banner-06.jpg', 0),
(72, 'Carel SJ Herbst', '0', 'carelherbst99@gmail.com', '', '102 Dassiebos Avenue', '0315-5163189', '88888-8888888-8', 'Admin', 'Carel@196877', 'Images/Carel SJ Herbst.jpg', 0),
(80, 'Arsalan', 'Mustafa', 'xyz@email.com', '12313213213213213213', 'link road Linking park new york', '0342-5506624', '11111-1111111', 'sadddddddddddd', '12345678', 'Images/www.YTS.LT.jpg', 0),
(81, 'Umer', 'Abbasi', 'embeddedworld770@gmail.com', '4535435345233435', 'ofifice no# f24 Rahmanabad Rawalpindi pakistan', '03155163189', '8130257680910', 'i want to track my child location.', 'umersaddique480', 'Images/Koala.jpg', 0),
(84, 'Bill', 'Gates', 'billgates@microsoft.com', '254789652145789', 'USA', '4485745787', '23213234', 'Fazool', '123456789', 'Images/stock-market.jpg', 0),
(85, 'Umer', 'Abbasi', 'embeddedworld770@gmail.com', '654757835235465', 'ofifice no# f24 Rahmanabad Rawalpindi pakistan', '03155163189', '8130257680910', 'rtertwetertwer', 'awrwetwertwet', 'Images/Koala.jpg', 0),
(86, 'Umer', 'Abbasi', 'embeddedworld770@gmail.com', '457554747745756', 'ofifice no# f24 Rahmanabad Rawalpindi pakistan', '03155163189', '8130257680916', 'fsfsdfewwe', 'umer12345678', 'Images/Tulips.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abc`
--
ALTER TABLE `abc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appoitment`
--
ALTER TABLE `appoitment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gsm_data`
--
ALTER TABLE `gsm_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblappointment`
--
ALTER TABLE `tblappointment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcustomers`
--
ALTER TABLE `tblcustomers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblinvoice`
--
ALTER TABLE `tblinvoice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `tblpage`
--
ALTER TABLE `tblpage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblservices`
--
ALTER TABLE `tblservices`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abc`
--
ALTER TABLE `abc`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `appoitment`
--
ALTER TABLE `appoitment`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gsm_data`
--
ALTER TABLE `gsm_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=661;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblappointment`
--
ALTER TABLE `tblappointment`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tblcustomers`
--
ALTER TABLE `tblcustomers`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblinvoice`
--
ALTER TABLE `tblinvoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tblpage`
--
ALTER TABLE `tblpage`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblservices`
--
ALTER TABLE `tblservices`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
