-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 17, 2020 at 11:39 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `b31_25376655_shopwise`
--

-- --------------------------------------------------------

--
-- Table structure for table `card_details`
--

DROP TABLE IF EXISTS `card_details`;
CREATE TABLE IF NOT EXISTS `card_details` (
  `Card_Number` varchar(50) NOT NULL,
  `Card_Type` varchar(255) NOT NULL,
  `Pin_Number` int(50) NOT NULL,
  `Cus_ID` int(50) NOT NULL,
  PRIMARY KEY (`Card_Number`),
  KEY `Cus_ID` (`Cus_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `card_details`
--

INSERT INTO `card_details` (`Card_Number`, `Card_Type`, `Pin_Number`, `Cus_ID`) VALUES
('4916217501611292', 'Visa', 123, 3);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `CartNo` int(100) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(255) NOT NULL,
  `ItemID` int(100) NOT NULL,
  `Qty` int(100) NOT NULL,
  `NewPrice` float NOT NULL,
  `Colour` varchar(100) NOT NULL,
  `Size` varchar(100) NOT NULL,
  PRIMARY KEY (`CartNo`),
  KEY `ItemID` (`ItemID`)
) ENGINE=MyISAM AUTO_INCREMENT=469 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`CartNo`, `UserName`, `ItemID`, `Qty`, `NewPrice`, `Colour`, `Size`) VALUES
(1, 'janith', 1, 1, 800, '', ''),
(2, 'janith', 1, 1, 750, '', ''),
(11, 'saman', 10, 1, 765, 'Blue', 'S'),
(6, 'saman', 5, 1, 2925, 'Red', 'S'),
(10, 'saman', 9, 1, 882, 'Blue', 'Free Size'),
(4, 'saman', 3, 1, 7500, 'White', 'Free Size'),
(3, 'saman', 2, 1, 1275, 'Red', 'Free Size'),
(17, 'Denu', 2, 4, 1275, 'Red', 'Free Size'),
(18, 'Denu', 10, 0, 765, 'Black', 'S'),
(19, 'Denu', 2, 1, 1275, 'Ash', 'Free Size'),
(20, 'Denu', 2, 1, 1275, 'Ash', 'Free Size'),
(21, 'Denu', 2, 1, 1275, 'Ash', 'Free Size'),
(22, 'Denu', 2, 1, 1275, 'Ash', 'Free Size'),
(23, 'Denu', 2, 1, 1275, 'Ash', 'Free Size'),
(24, 'Denu', 2, 1, 1275, 'Ash', 'Free Size'),
(25, 'Denu', 2, 1, 1275, 'Ash', 'Free Size'),
(26, 'Denu', 2, 1, 1275, 'Ash', 'Free Size'),
(27, 'Denu', 2, 1, 1275, 'Ash', 'Free Size'),
(28, 'Denu', 2, 1, 1275, 'Ash', 'Free Size'),
(29, 'Denu', 2, 1, 1275, 'Ash', 'Free Size'),
(30, 'Denu', 2, 1, 1275, 'Ash', 'Free Size'),
(31, 'Denu', 2, 1, 1275, 'Ash', 'Free Size'),
(32, 'Denu', 2, 1, 1275, 'Ash', 'Free Size'),
(33, 'Denu', 2, 1, 1275, 'Ash', 'Free Size'),
(34, 'Denu', 2, 1, 1275, 'Ash', 'Free Size'),
(35, 'Denu', 10, 2, 765, 'Blue', 'S'),
(36, 'Denu', 10, 2, 765, 'Blue', 'S'),
(37, 'Denu', 10, 2, 765, 'Blue', 'S'),
(38, 'Denu', 9, 1, 882, 'Blue', 'Free Size'),
(39, 'Denu', 9, 1, 882, 'Blue', 'Free Size'),
(40, 'Denu', 9, 1, 882, 'Blue', 'Free Size'),
(41, 'Denu', 9, 1, 882, 'Blue', 'Free Size'),
(42, 'Denu', 9, 1, 882, 'Blue', 'Free Size'),
(43, 'Denu', 9, 1, 882, 'Blue', 'Free Size'),
(44, 'Denu', 9, 1, 882, 'Blue', 'Free Size'),
(45, 'Denu', 9, 1, 882, 'Blue', 'Free Size'),
(46, 'Denu', 9, 1, 882, 'Blue', 'Free Size'),
(47, 'Denu', 9, 1, 882, 'Blue', 'Free Size'),
(48, 'Denu', 9, 1, 882, 'Blue', 'Free Size'),
(49, 'Denu', 9, 1, 882, 'Blue', 'Free Size'),
(50, 'Denu', 9, 1, 882, 'Blue', 'Free Size'),
(51, 'Denu', 9, 1, 882, 'Blue', 'Free Size'),
(52, 'Denu', 9, 1, 882, 'Blue', 'Free Size'),
(53, 'Denu', 9, 1, 882, 'Blue', 'Free Size'),
(54, 'Denu', 9, 1, 882, 'Blue', 'Free Size'),
(55, 'Denu', 9, 1, 882, 'Blue', 'Free Size'),
(56, 'Denu', 9, 1, 882, 'Blue', 'Free Size'),
(57, 'Denu', 9, 1, 882, 'Blue', 'Free Size'),
(58, 'Denu', 9, 1, 882, 'Blue', 'Free Size'),
(59, 'Denu', 9, 1, 882, 'Blue', 'Free Size'),
(60, 'Denu', 9, 1, 882, 'Blue', 'Free Size'),
(61, 'Denu', 9, 1, 882, 'Blue', 'Free Size'),
(62, 'Denu', 9, 1, 882, 'Blue', 'Free Size'),
(63, 'Denu', 9, 1, 882, 'Blue', 'Free Size'),
(64, 'Denu', 10, 4, 765, 'Blue', 'M'),
(65, 'Denu', 10, 4, 765, 'Blue', 'M'),
(66, 'Denu', 10, 4, 765, 'Blue', 'M'),
(67, 'Denu', 10, 4, 765, 'Blue', 'M'),
(68, 'Denu', 10, 4, 765, 'Blue', 'M'),
(69, 'Denu', 10, 4, 765, 'Blue', 'M'),
(70, 'Denu', 9, 4, 882, 'Blue', 'Free Size'),
(71, 'Denu', 9, 4, 882, 'Blue', 'Free Size'),
(72, 'Denu', 5, 30, 2925, 'Red', 'S'),
(73, 'Denu', 5, 30, 2925, 'Red', 'S'),
(74, 'Denu', 5, 30, 2925, 'Red', 'S'),
(75, 'Denu', 5, 30, 2925, 'Red', 'S'),
(76, 'Denu', 5, 30, 2925, 'Red', 'S'),
(77, 'Denu', 5, 30, 2925, 'Red', 'S'),
(78, 'Denu', 5, 30, 2925, 'Red', 'S'),
(79, 'Denu', 5, 30, 2925, 'Red', 'S'),
(80, 'Denu', 7, 2, 792, 'Red', 'Free Size'),
(81, 'Denu', 7, 2, 792, 'Red', 'Free Size'),
(82, 'Denu', 7, 2, 792, 'Red', 'Free Size'),
(83, 'Denu', 7, 2, 792, 'Red', 'Free Size'),
(84, 'Denu', 7, 2, 792, 'Red', 'Free Size'),
(8, 'Denu', 7, 2, 792, 'Red', 'Free Size'),
(85, 'Denu', 7, 2, 792, 'Red', 'Free Size'),
(86, 'Denu', 7, 2, 792, 'Red', 'Free Size'),
(87, 'Denu', 7, 2, 792, 'Red', 'Free Size'),
(88, 'Denu', 7, 2, 792, 'Red', 'Free Size'),
(89, 'Denu', 10, 1, 765, 'Blue', 'M'),
(90, 'Denu', 10, 1, 765, 'Blue', 'M'),
(91, 'Denu', 10, 1, 765, 'Blue', 'M'),
(92, 'Denu', 10, 1, 765, 'Blue', 'M'),
(93, 'Denu', 10, 1, 765, 'Blue', 'M'),
(94, 'Denu', 10, 1, 765, 'Blue', 'M'),
(95, 'Denu', 10, 1, 765, 'Blue', 'M'),
(96, 'Denu', 10, 1, 765, 'Blue', 'M'),
(97, 'Denu', 10, 1, 765, 'Blue', 'M'),
(98, 'Denu', 10, 1, 765, 'Blue', 'M'),
(99, 'Denu', 10, 1, 765, 'Blue', 'M'),
(100, 'Denu', 10, 1, 765, 'Blue', 'M'),
(101, 'Denu', 10, 1, 765, 'Blue', 'M'),
(102, 'Denu', 10, 1, 765, 'Blue', 'M'),
(103, 'Denu', 10, 1, 765, 'Blue', 'M'),
(104, 'Denu', 10, 1, 765, 'Blue', 'M'),
(105, 'Denu', 10, 1, 765, 'Blue', 'M'),
(106, 'Denu', 10, 1, 765, 'Blue', 'M'),
(107, 'Denu', 10, 1, 765, 'Blue', 'M'),
(108, 'Denu', 10, 1, 765, 'Blue', 'M'),
(109, 'Denu', 10, 1, 765, 'Blue', 'M'),
(110, 'Denu', 10, 1, 765, 'Blue', 'M'),
(111, 'Denu', 10, 1, 765, 'Blue', 'M'),
(112, 'Denu', 10, 1, 765, 'Blue', 'M'),
(113, 'Denu', 10, 2, 765, 'Blue', 'S'),
(114, 'Denu', 10, 2, 765, 'Blue', 'S'),
(115, 'Denu', 10, 2, 765, 'Blue', 'S'),
(116, 'Denu', 10, 2, 765, 'Blue', 'S'),
(117, 'Denu', 10, 2, 765, 'Blue', 'S'),
(118, 'Denu', 10, 4, 765, 'Blue', 'S'),
(119, 'Denu', 10, 4, 765, 'Blue', 'S'),
(120, 'Denu', 10, 0, 765, 'Black', 'S'),
(121, 'Denu', 10, 1, 765, 'Blue', 'S'),
(122, 'Denu', 9, 3, 882, 'Blue', 'Free Size'),
(123, 'Denu', 9, 2, 882, 'Blue', 'Free Size'),
(124, 'Denu', 10, 1, 765, 'Blue', 'S'),
(125, 'Denu', 10, 4, 765, 'Blue', 'S'),
(126, 'Denu', 0, 0, 2691, '', ''),
(127, 'Denu', 0, 0, 2691, '', ''),
(128, 'Denu', 0, 0, 2691, '', ''),
(129, 'Denu', 5, 1, 2925, 'Red', 'S'),
(130, 'Denu', 0, 0, 2691, '', ''),
(131, 'Denu', 0, 0, 2691, '', ''),
(132, 'Denu', 0, 0, 2691, '', ''),
(133, 'Denu', 0, 0, 2691, '', ''),
(134, 'Denu', 0, 0, 2691, '', ''),
(135, 'Denu', 0, 0, 2691, '', ''),
(136, 'Denu', 0, 0, 2691, '', ''),
(137, 'Denu', 0, 0, 2691, '', ''),
(138, 'Denu', 0, 0, 2691, '', ''),
(139, 'Denu', 0, 0, 2691, '', ''),
(140, 'Denu', 0, 0, 2691, '', ''),
(141, 'Denu', 0, 0, 2691, '', ''),
(142, 'Denu', 0, 0, 2691, '', ''),
(143, 'Denu', 0, 0, 2691, '', ''),
(144, 'Denu', 0, 0, 2691, '', ''),
(145, 'Denu', 0, 0, 2691, '', ''),
(146, 'Denu', 0, 0, 2691, '', ''),
(147, 'Denu', 0, 0, 2691, '', ''),
(148, 'Denu', 5, 1, 2925, 'Red', 'S'),
(149, 'Denu', 5, 1, 2925, 'Red', 'S'),
(150, 'Denu', 5, 1, 2925, 'Red', 'S'),
(151, 'Denu', 5, 1, 2925, 'Red', 'S'),
(152, 'Denu', 5, 1, 2925, 'Red', 'S'),
(153, 'Denu', 5, 1, 2925, 'Red', 'S'),
(154, 'Denu', 5, 1, 2925, 'Red', 'S'),
(155, 'Denu', 5, 1, 2925, 'Red', 'S'),
(156, 'Denu', 5, 1, 2925, 'Red', 'S'),
(157, 'Denu', 5, 1, 2925, 'Red', 'S'),
(158, 'Denu', 5, 1, 2925, 'Red', 'S'),
(159, 'Denu', 5, 1, 2925, 'Red', 'S'),
(160, 'Denu', 5, 1, 2925, 'Red', 'S'),
(161, 'Denu', 5, 4, 2925, 'Red', 'S'),
(162, 'Denu', 5, 4, 2925, 'Red', 'S'),
(163, 'Denu', 5, 4, 2925, 'Red', 'S'),
(164, 'Denu', 5, 4, 2925, 'Red', 'S'),
(165, 'Denu', 5, 4, 2925, 'Red', 'S'),
(166, 'Denu', 5, 4, 2925, 'Red', 'S'),
(167, 'janith', 10, 2, 765, 'Blue', 'S'),
(168, 'janith', 10, 2, 765, 'Blue', 'S'),
(169, 'Denu', 2, 2, 1275, 'Red', 'Free Size'),
(170, 'Denu', 11, 2, 1611, 'Red', 'Free Size'),
(171, 'Denu', 11, 2, 1611, 'Red', 'Free Size'),
(172, 'Denu', 11, 2, 1611, 'Red', 'Free Size'),
(173, 'Denu', 11, 2, 1611, 'Black', 'Free Size'),
(174, 'Denu', 11, 2, 1611, 'Black', 'Free Size'),
(175, 'Denu', 11, 2, 1611, 'Black', 'Free Size'),
(176, 'Denu', 5, 4, 2925, 'Red', 'S'),
(177, 'Denu', 5, 4, 2925, 'Red', 'S'),
(178, 'Denu', 5, 4, 2925, 'Red', 'S'),
(179, 'Denu', 11, 5, 1611, 'Red', 'Free Size'),
(180, 'Denu', 11, 5, 1611, 'Red', 'Free Size'),
(181, 'Denu', 10, 0, 765, 'Blue', 'S'),
(182, 'Denu', 10, 0, 765, 'Blue', 'S'),
(183, 'Denu', 12, 2, 2025.9, 'Pink', 'S'),
(184, 'Denu', 12, 2, 2025.9, 'Pink', 'S'),
(185, 'Denu', 12, 2, 2025.9, 'Pink', 'S'),
(186, 'Denu', 12, 2, 2025.9, 'Pink', 'S'),
(187, 'Denu', 12, 2, 2025.9, 'Pink', 'S'),
(188, 'Denu', 12, 2, 2025.9, 'Pink', 'S'),
(189, 'Denu', 12, 2, 2025.9, 'Pink', 'S'),
(190, 'Denu', 12, 2, 2025.9, 'Pink', 'S'),
(191, 'Denu', 12, 2, 2025.9, 'Pink', 'S'),
(192, 'Denu', 12, 2, 2025.9, 'Pink', 'S'),
(193, 'Denu', 12, 2, 2025.9, 'Pink', 'S'),
(194, 'Denu', 10, 0, 765, '', ''),
(195, 'Denu', 10, 0, 765, '', ''),
(196, 'Denu', 10, 0, 765, '', ''),
(197, 'Denu', 11, 0, 1611, '', ''),
(198, 'Denu', 11, 0, 1611, '', ''),
(199, 'Denu', 11, 0, 1611, '', ''),
(200, 'Denu', 0, 0, 1611, '', ''),
(201, 'Denu', 0, 0, 0, '', ''),
(202, 'Denu', 0, 0, 0, '', ''),
(203, 'Denu', 0, 0, 0, '', ''),
(204, 'Denu', 0, 0, 0, '', ''),
(205, 'Denu', 0, 0, 0, '', ''),
(206, 'Denu', 0, 0, 0, '', ''),
(207, 'Denu', 0, 0, 0, '', ''),
(208, 'Denu', 0, 0, 0, '', ''),
(209, 'Denu', 0, 0, 0, '', ''),
(210, 'Denu', 12, 0, 2025.9, '', ''),
(211, 'Denu', 12, 0, 2025.9, '', ''),
(212, 'Denu', 12, 0, 2025.9, '', ''),
(213, 'Denu', 12, 0, 2025.9, '', ''),
(214, 'Denu', 12, 0, 2025.9, '', ''),
(215, 'Denu', 12, 0, 2025.9, '', ''),
(216, 'Denu', 12, 0, 2025.9, '', ''),
(217, 'Denu', 12, 0, 2025.9, '', ''),
(218, 'Denu', 11, 4, 1611, 'Black', 'Free Size'),
(219, 'Denu', 10, 100, 765, '1', ''),
(220, 'Denu', 10, 100, 765, '1', ''),
(221, 'Denu', 0, 0, 765, '', ''),
(222, 'Denu', 0, 0, 765, '', ''),
(223, 'Denu', 10, 2, 765, 'Blue', 'S'),
(224, 'Denu', 10, 2, 765, 'Blue', 'S'),
(225, 'Denu', 11, 4, 1611, 'Red', 'Free Size'),
(226, 'Denu', 11, 2, 1611, 'Red', 'Free Size'),
(227, 'Denu', 11, 2, 1611, 'Red', 'Free Size'),
(228, 'Denu', 11, 4, 1611, 'Black', 'Free Size'),
(229, 'Denu', 11, 0, 1611, '1', 'Select A Size'),
(230, 'Denu', 11, 0, 1611, '1', 'Select A Size'),
(231, 'Denu', 11, 0, 1611, '1', 'Select A Size'),
(232, 'Denu', 12, 2, 2025.9, 'Pink', 'S'),
(233, 'Denu', 11, 2, 1611, 'Red', 'Free Size'),
(234, 'Denu', 11, 2, 1611, 'Red', 'Free Size'),
(235, 'Denu', 11, 2, 1611, 'Red', 'Free Size'),
(236, 'Denu', 11, 2, 1611, 'Red', 'Free Size'),
(237, 'Denu', 11, 2, 1611, 'Red', 'Free Size'),
(238, 'Denu', 11, 2, 1611, 'Red', 'Free Size'),
(239, 'Denu', 11, 2, 1611, 'Red', 'Free Size'),
(240, 'Denu', 11, 2, 1611, 'Red', 'Free Size'),
(241, 'Denu', 11, 2, 1611, 'Red', 'Free Size'),
(242, 'Denu', 11, 2, 1611, 'Red', 'Free Size'),
(243, 'Denu', 11, 2, 1611, 'Red', 'Free Size'),
(244, 'Denu', 11, 2, 1611, 'Red', 'Free Size'),
(245, 'Denu', 12, 2, 2025.9, 'Pink', 'S'),
(246, 'Denu', 12, 2, 2025.9, 'Pink', 'S'),
(247, 'Denu', 12, 2, 2025.9, 'Pink', 'S'),
(248, 'Denu', 12, 2, 2025.9, 'Pink', 'S'),
(249, 'Denu', 12, 2, 2025.9, 'Pink', 'S'),
(250, 'Denu', 12, 2, 2025.9, 'Pink', 'S'),
(251, 'Denu', 12, 2, 2025.9, 'Pink', 'S'),
(252, 'Denu', 12, 2, 2025.9, 'Pink', 'S'),
(253, 'Denu', 12, 4, 2025.9, 'Pink', 'S'),
(254, 'Denu', 12, 4, 2025.9, 'Pink', 'S'),
(255, 'Denu', 5, 2, 2925, 'Red', 'S'),
(256, 'Denu', 5, 2, 2925, 'Red', 'S'),
(257, 'Denu', 5, 2, 2925, 'Red', 'S'),
(258, 'Denu', 5, 2, 2925, 'Red', 'S'),
(259, 'Denu', 5, 2, 2925, 'Red', 'S'),
(260, 'Denu', 5, 2, 2925, 'Red', 'S'),
(261, 'Denu', 5, 2, 2925, 'Red', 'S'),
(262, 'Denu', 5, 2, 2925, 'Red', 'S'),
(263, 'Denu', 5, 2, 2925, 'Red', 'S'),
(264, 'Denu', 5, 2, 2925, 'Red', 'S'),
(265, 'Denu', 5, 2, 2925, 'Red', 'S'),
(266, 'Denu', 5, 2, 2925, 'Red', 'S'),
(267, 'Denu', 5, 2, 2925, 'Red', 'S'),
(268, 'Denu', 5, 2, 2925, 'Red', 'S'),
(269, 'Denu', 5, 2, 2925, 'Red', 'S'),
(270, 'Denu', 5, 2, 2925, 'Red', 'S'),
(271, 'Denu', 5, 2, 2925, 'Red', 'S'),
(272, 'Denu', 5, 2, 2925, 'Red', 'S'),
(273, 'Denu', 5, 2, 2925, 'Red', 'S'),
(274, 'Denu', 5, 2, 2925, 'Red', 'S'),
(275, 'Denu', 5, 2, 2925, 'Red', 'S'),
(276, 'Denu', 10, 100, 765, 'Blue', 'S'),
(277, 'Denu', 10, 100, 765, 'Blue', 'S'),
(278, 'Denu', 10, 100, 765, 'Blue', 'S'),
(279, 'Denu', 10, 100, 765, 'Blue', 'S'),
(280, 'Denu', 10, 100, 765, 'Blue', 'S'),
(281, 'Denu', 10, 100, 765, 'Blue', 'S'),
(282, 'Denu', 10, 100, 765, 'Blue', 'S'),
(283, 'Denu', 11, 4, 1611, 'Red', 'Free Size'),
(284, 'Denu', 11, 4, 1611, 'Red', 'Free Size'),
(285, 'Denu', 11, 4, 1611, 'Red', 'Free Size'),
(286, 'Denu', 11, 4, 1611, 'Red', 'Free Size'),
(287, 'Denu', 11, 4, 1611, 'Red', 'Free Size'),
(288, 'Denu', 11, 4, 1611, 'Red', 'Free Size'),
(289, 'Denu', 11, 4, 1611, 'Red', 'Free Size'),
(290, 'Denu', 11, 4, 1611, 'Red', 'Free Size'),
(291, 'Denu', 11, 4, 1611, 'Red', 'Free Size'),
(292, 'Denu', 11, 4, 1611, 'Red', 'Free Size'),
(293, 'Denu', 11, 4, 1611, 'Red', 'Free Size'),
(294, 'Denu', 11, 4, 1611, 'Red', 'Free Size'),
(295, 'Denu', 11, 4, 1611, 'Red', 'Free Size'),
(296, 'Denu', 11, 4, 1611, 'Red', 'Free Size'),
(297, 'Denu', 11, 4, 1611, 'Red', 'Free Size'),
(298, 'Denu', 9, 4, 882, 'Blue', 'Free Size'),
(299, 'Denu', 9, 4, 882, 'Blue', 'Free Size'),
(300, 'Denu', 11, 4, 1611, 'Red', 'Free Size'),
(301, 'Denu', 10, 100, 765, 'Blue', 'S'),
(302, 'Denu', 10, 2, 765, 'Blue', 'S'),
(303, 'Denu', 10, 2, 765, 'Blue', 'S'),
(304, 'Denu', 10, 2, 765, 'Blue', 'S'),
(305, 'Denu', 10, 2, 765, 'Blue', 'S'),
(306, 'Denu', 10, 2, 765, 'Blue', 'S'),
(307, 'DENUKA', 10, 2, 765, 'Blue', 'S'),
(308, 'DENUKA', 7, 2, 792, 'Red', 'Free Size'),
(309, 'Denu', 7, 2, 792, 'Red', 'Free Size'),
(310, 'Denu', 12, 1, 2025.9, 'Pink', 'S'),
(311, 'Denu', 11, 0, 1611, 'Black', 'Free Size'),
(312, 'Denu', 11, 0, 1611, 'Black', 'Free Size'),
(313, 'Denu', 11, 0, 1611, 'Black', 'Free Size'),
(314, 'Denu', 11, 0, 1611, 'Black', 'Free Size'),
(315, 'Denu', 11, 0, 1611, 'Black', 'Free Size'),
(316, 'Denu', 11, 3, 1611, 'Black', 'Free Size'),
(317, 'Denu', 11, 22, 1611, 'Black', 'Free Size'),
(318, 'Denu', 11, 2, 1611, 'Black', 'Free Size'),
(319, 'Denu', 12, 6, 2025.9, 'Pink', 'S'),
(320, 'Denu', 12, 6, 2025.9, 'Pink', 'S'),
(321, 'Denu', 12, 6, 2025.9, 'Pink', 'S'),
(322, 'Denu', 12, 6, 2025.9, 'Pink', 'S'),
(323, 'Denu', 12, 6, 2025.9, 'Pink', 'S'),
(324, 'Denu', 12, 6, 2025.9, 'Pink', 'S'),
(325, 'Denu', 12, 6, 2025.9, 'Pink', 'S'),
(326, 'Denu', 12, 6, 2025.9, 'Pink', 'S'),
(327, 'Denu', 12, 6, 2025.9, 'Pink', 'S'),
(328, 'Denu', 12, 6, 2025.9, 'Pink', 'S'),
(329, 'Denu', 12, 6, 2025.9, 'Pink', 'S'),
(330, 'Denu', 12, 6, 2025.9, 'Pink', 'S'),
(331, 'Denu', 12, 6, 2025.9, 'Pink', 'S'),
(332, 'Denu', 12, 6, 2025.9, 'Pink', 'S'),
(333, 'Denu', 12, 6, 2025.9, 'Pink', 'S'),
(334, 'Denu', 12, 6, 2025.9, 'Pink', 'S'),
(335, 'Denu', 10, 3, 765, 'Blue', 'S'),
(336, 'Denu', 10, 3, 765, 'Blue', 'S'),
(337, 'Denu', 10, 3, 765, 'Blue', 'S'),
(338, 'Denu', 10, 1, 765, 'Blue', 'S'),
(339, 'Denu', 10, 1, 765, 'Blue', 'S'),
(340, 'Denu', 10, 1, 765, 'Blue', 'S'),
(341, 'Denu', 11, 2, 1611, 'Black', 'Free Size'),
(342, 'Denu', 11, 2, 1611, 'Black', 'Free Size'),
(343, 'Denu', 11, 2, 1611, 'Black', 'Free Size'),
(344, 'Denu', 11, 6, 1611, 'Black', 'Free Size'),
(345, 'Denu', 11, 6, 1611, 'Black', 'Free Size'),
(346, 'Denu', 11, 6, 1611, 'Black', 'Free Size'),
(347, 'Denu', 11, 6, 1611, 'Black', 'Free Size'),
(348, 'Denu', 11, 6, 1611, 'Black', 'Free Size'),
(349, 'Denu', 11, 6, 1611, 'Black', 'Free Size'),
(350, 'Denu', 11, 6, 1611, 'Black', 'Free Size'),
(351, 'Denu', 11, 6, 1611, 'Black', 'Free Size'),
(352, 'Denu', 11, 6, 1611, 'Black', 'Free Size'),
(353, 'Denu', 11, 6, 1611, 'Black', 'Free Size'),
(354, 'Denu', 11, 6, 1611, 'Black', 'Free Size'),
(355, 'Denu', 11, 6, 1611, 'Black', 'Free Size'),
(356, 'Denu', 11, 6, 1611, 'Black', 'Free Size'),
(357, 'Denu', 10, 1, 765, 'Blue', 'S'),
(358, 'Denu', 10, 1, 765, 'Blue', 'S'),
(359, 'Denu', 10, 1, 765, 'Blue', 'S'),
(360, 'Denu', 10, 1, 765, 'Blue', 'S'),
(361, 'Denu', 12, 2, 2025.9, 'Pink', 'S'),
(362, 'Denu', 12, 2, 2025.9, 'Pink', 'S'),
(363, 'Denu', 12, 2, 2025.9, 'Pink', 'S'),
(364, 'Denu', 12, 2, 2025.9, 'Pink', 'S'),
(365, 'Denu', 12, 2, 2025.9, 'Pink', 'S'),
(366, 'Denu', 12, 2, 2025.9, 'Pink', 'S'),
(367, 'Denu', 12, 2, 2025.9, 'Pink', 'S'),
(368, 'Denu', 12, 2, 2025.9, 'Pink', 'S'),
(369, 'Denu', 12, 2, 2025.9, 'Pink', 'S'),
(370, 'Denu', 12, 2, 2025.9, 'Pink', 'S'),
(371, 'Denu', 12, 2, 2025.9, 'Pink', 'S'),
(372, 'Denu', 12, 2, 2025.9, 'Pink', 'S'),
(373, 'Denu', 12, 2, 2025.9, 'Pink', 'S'),
(374, 'Denu', 12, 2, 2025.9, 'Pink', 'S'),
(375, 'Denu', 12, 2, 2025.9, 'Pink', 'S'),
(376, 'Denu', 12, 2, 2025.9, 'Pink', 'S'),
(377, 'Denu', 12, 2, 2025.9, 'Pink', 'S'),
(378, 'Denu', 12, 2, 2025.9, 'Pink', 'S'),
(379, 'Denu', 12, 2, 2025.9, 'Pink', 'S'),
(380, 'Denu', 12, 2, 2025.9, 'Pink', 'S'),
(381, 'Denu', 12, 2, 2025.9, 'Pink', 'S'),
(382, 'Denu', 12, 2, 2025.9, 'Pink', 'S'),
(383, 'Denu', 11, 2, 1611, 'Black', 'Free Size'),
(384, 'Denu', 12, 2, 2025.9, 'Pink', 'S'),
(385, 'Denu', 12, 2, 2025.9, 'Pink', 'S'),
(386, 'Denu', 12, 2, 2025.9, 'Pink', 'S'),
(387, 'Denu', 12, 2, 2025.9, 'Pink', 'S'),
(388, 'Denu', 3, 3, 7500, 'White', 'Free Size'),
(389, 'Denu', 3, 3, 7500, 'White', 'Free Size'),
(390, 'Denu', 12, 2, 2025.9, 'Pink', 'S'),
(391, 'Denu', 11, 5, 1611, 'Black', 'Free Size'),
(392, 'Denu', 12, 5, 2025.9, 'Pink', 'S'),
(393, 'Denu', 11, 5, 1611, 'Black', 'Free Size'),
(394, 'Denu', 12, 3, 2025.9, 'Pink', 'S'),
(395, 'Denu', 7, 6, 792, 'Red', 'Free Size'),
(396, 'Denu', 9, 2, 882, 'Blue', 'Free Size'),
(397, 'Denu', 12, 3, 2025.9, 'Pink', 'S'),
(398, 'Denu', 10, 3, 765, 'Blue', 'S'),
(399, 'Denu', 7, 5, 792, 'Red', 'Free Size'),
(400, 'Denu', 6, 3, 1050, 'Grey', 'Select a size'),
(401, 'Denu', 6, 3, 1050, 'Grey', 'Select a size'),
(402, 'Denu', 6, 3, 1050, 'Grey', 'Select a size'),
(403, 'Denu', 6, 3, 1050, 'Grey', 'Select a size'),
(404, 'Denu', 3, 1, 7500, 'White', 'Free Size'),
(405, 'Denu', 3, 1, 7500, 'White', 'Free Size'),
(406, 'Denu', 3, 1, 7500, 'White', 'Free Size'),
(407, 'Denu', 3, 1, 7500, 'White', 'Free Size'),
(408, 'Denu', 3, 1, 7500, 'White', 'Free Size'),
(409, 'Denu', 3, 1, 7500, 'White', 'Free Size'),
(410, 'Denu', 3, 1, 7500, 'White', 'Free Size'),
(411, 'Denu', 3, 1, 7500, 'White', 'Free Size'),
(412, 'Denu', 3, 1, 7500, 'White', 'Free Size'),
(413, 'Denu', 3, 1, 7500, 'White', 'Free Size'),
(414, 'Denu', 3, 1, 7500, 'White', 'Free Size'),
(415, 'Denu', 3, 1, 7500, 'White', 'Free Size'),
(416, 'Denu', 12, 6, 2025.9, 'Pink', 'S'),
(417, 'Denu', 12, 6, 2025.9, 'Pink', 'S'),
(418, 'Denu', 12, 6, 2025.9, 'Pink', 'S'),
(419, 'Denu', 12, 6, 2025.9, 'Pink', 'S'),
(420, 'Denu', 12, 6, 2025.9, 'Pink', 'S'),
(421, 'Denu', 11, 2, 1611, 'Black', 'Free Size'),
(422, 'Denu', 11, 2, 1611, 'Black', 'Free Size'),
(423, 'Denu', 11, 2, 1611, 'Black', 'Free Size'),
(424, 'Denu', 12, 5, 2025.9, 'Pink', 'S'),
(425, 'Denu', 11, 5, 1611, 'Black', 'Free Size'),
(426, 'Denu', 11, 5, 1611, 'Black', 'Free Size'),
(427, 'Denu', 11, 5, 1611, 'Black', 'Free Size'),
(428, 'Denu', 11, 5, 1611, 'Black', 'Free Size'),
(429, 'Denu', 11, 5, 1611, 'Black', 'Free Size'),
(430, 'Denu', 12, 5, 2025.9, 'Pink', 'S'),
(431, 'Denu', 12, 6, 2025.9, 'Pink', 'S'),
(432, 'Denu', 12, 6, 2025.9, 'Pink', 'S'),
(433, 'Denu', 12, 6, 2025.9, 'Pink', 'S'),
(434, 'Denu', 11, 5, 1611, 'Black', 'Free Size'),
(435, 'Denu', 11, 5, 1611, 'Black', 'Free Size'),
(436, 'Denu', 11, 5, 1611, 'Black', 'Free Size'),
(437, 'Denu', 12, 5, 2025.9, 'Pink', 'S'),
(438, 'Denu', 11, 5, 1611, 'Black', 'Free Size'),
(439, 'Denu', 10, 3, 765, 'Blue', 'S'),
(440, 'Denu', 3, 1, 7500, 'White', 'Free Size'),
(441, 'Denu', 11, 5, 1611, 'Black', 'Free Size'),
(442, 'Denu', 12, 6, 2025.9, 'Pink', 'S'),
(443, 'Denu', 12, 6, 2025.9, 'Pink', 'S'),
(444, 'Denu', 10, 3, 765, 'Blue', 'S'),
(445, 'Denu', 10, 3, 765, 'Blue', 'S'),
(446, 'Denu', 12, 3, 2025.9, 'Pink', 'S'),
(447, 'Denu', 12, 3, 2025.9, 'Pink', 'S'),
(448, 'Denu', 10, 3, 765, 'Blue', 'S'),
(449, 'Denu', 11, 5, 1611, 'Black', 'Free Size'),
(450, 'Denu', 11, 5, 1611, 'Black', 'Free Size'),
(451, 'Denu', 11, 5, 1611, 'Black', 'Free Size'),
(452, 'Denu', 11, 5, 1611, 'Black', 'Free Size'),
(453, 'Denu', 10, 1, 765, 'Blue', 'S'),
(454, 'Denu', 11, 3, 1611, 'Black', 'Free Size'),
(455, 'Denu', 9, 1, 882, 'Blue', 'Free Size'),
(456, 'Denu', 18, 1, 4500, 'Blue', 'S'),
(457, 'Denu', 18, 1, 4500, 'Blue', 'S'),
(458, 'Denu', 18, 3, 4500, 'Blue', 'XS'),
(459, 'Denu', 15, 1, 2550, 'Black', 'M'),
(460, 'Denu', 19, 1, 702, 'Blue', 'M'),
(461, 'anura', 15, 1, 2550, 'Black', 'M'),
(462, 'Denu', 19, 1, 702, 'Blue', 'S'),
(463, 'Denu', 17, 1, 603, 'Brown', '8.5 UK'),
(464, 'Denu', 17, 1, 603, 'Brown', '8.5 UK'),
(465, 'Denu', 17, 1, 603, 'Brown', '9 UK'),
(466, 'denu', 19, 9, 702, 'Blue', 'L'),
(467, 'denu', 19, 1, 702, 'Blue', 'S'),
(468, 'denu', 19, 1, 702, 'Blue', 'S');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `Cat_ID` int(50) NOT NULL,
  `Cat_Name` varchar(255) NOT NULL,
  PRIMARY KEY (`Cat_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Cat_ID`, `Cat_Name`) VALUES
(1, 'Apparel and Textiles'),
(2, 'Jewelry and Accessories'),
(3, 'Toys and Baby Items');

-- --------------------------------------------------------

--
-- Table structure for table `colour`
--

DROP TABLE IF EXISTS `colour`;
CREATE TABLE IF NOT EXISTS `colour` (
  `ColourNo` int(100) NOT NULL,
  `Colour` varchar(255) NOT NULL,
  PRIMARY KEY (`ColourNo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `colour`
--

INSERT INTO `colour` (`ColourNo`, `Colour`) VALUES
(1, 'Blue'),
(2, 'Red'),
(3, 'Black'),
(4, 'White'),
(5, 'Grey'),
(6, 'Yellow'),
(7, 'Pink'),
(8, 'Green'),
(9, 'Brown'),
(10, 'Floral Blue');

-- --------------------------------------------------------

--
-- Table structure for table `cus_order`
--

DROP TABLE IF EXISTS `cus_order`;
CREATE TABLE IF NOT EXISTS `cus_order` (
  `OrderNo` int(50) NOT NULL,
  `Cus_ID` int(50) NOT NULL,
  `Ordered_Date` date NOT NULL,
  `Ordered_Time` time(6) NOT NULL,
  `Total_Amount` double NOT NULL,
  `Order_Status` varchar(255) NOT NULL,
  `Paid_or_Unpaid` varchar(255) NOT NULL,
  PRIMARY KEY (`OrderNo`),
  KEY `Cus_ID` (`Cus_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cus_order`
--

INSERT INTO `cus_order` (`OrderNo`, `Cus_ID`, `Ordered_Date`, `Ordered_Time`, `Total_Amount`, `Order_Status`, `Paid_or_Unpaid`) VALUES
(21, 3, '2020-03-11', '10:13:28.000000', 95850, 'Successfully ordered', 'Paid'),
(22, 3, '2020-03-11', '10:15:29.000000', 88200, 'Successfully ordered', 'Paid'),
(23, 3, '2020-03-11', '10:17:07.000000', 88200, 'Shipped', 'Paid'),
(1, 3, '2020-03-10', '19:00:00.000000', 3200, 'Shipped', 'Paid'),
(24, 3, '2020-03-11', '12:14:45.000000', 1530, 'Successfully ordered', 'Paid'),
(25, 3, '2020-03-11', '12:17:30.000000', 1530, 'Shipped', 'Paid'),
(26, 3, '2020-03-11', '12:19:26.000000', 5100, 'Successfully ordered', 'Paid'),
(27, 3, '2020-03-11', '12:34:59.000000', 5610, 'Successfully ordered', 'Paid'),
(36, 2, '2020-03-15', '10:47:30.000000', 4816.8, 'Successfully ordered', 'Unpaid'),
(28, 2, '2020-03-11', '04:25:35.000000', 76500, 'Successfully ordered', 'Paid'),
(29, 2, '2020-03-12', '07:59:46.000000', 2550, 'Successfully ordered', 'Paid'),
(30, 2, '2020-03-12', '09:18:09.000000', 765, 'Successfully ordered', 'Paid'),
(31, 2, '2020-03-12', '09:42:34.000000', 1275, 'Successfully ordered', 'Paid'),
(32, 2, '2020-03-14', '06:16:34.000000', 3114, 'Successfully ordered', 'Paid'),
(33, 2, '2020-03-14', '06:20:26.000000', 14450.4, 'Successfully ordered', 'Paid'),
(34, 2, '2020-03-14', '06:25:37.000000', 765, 'Successfully ordered', 'Paid'),
(35, 2, '2020-03-14', '06:26:30.000000', 3222, 'Successfully ordered', 'Paid'),
(37, 2, '2020-03-15', '10:57:20.000000', 22877.4, 'Successfully ordered', 'Unpaid'),
(38, 2, '2020-03-15', '01:16:28.000000', 8055, 'Successfully ordered', 'Unpaid'),
(39, 2, '2020-03-15', '01:25:12.000000', 765, 'Successfully ordered', 'Paid'),
(40, 2, '2020-03-15', '01:27:28.000000', 4833, 'Successfully ordered', 'Paid'),
(41, 2, '2020-03-17', '10:11:40.000000', 13500, 'Successfully ordered', 'Unpaid'),
(42, 2, '2020-03-17', '10:12:33.000000', 2550, 'Successfully ordered', 'Paid'),
(43, 2, '2020-03-20', '01:19:42.000000', 702, 'Successfully ordered', 'Unpaid'),
(44, 2, '2020-03-20', '01:24:59.000000', 603, 'Successfully ordered', 'Paid'),
(45, 2, '2020-03-20', '01:26:37.000000', 603, 'Successfully ordered', 'Paid');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `FNO` int(50) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `ItemID` varchar(255) NOT NULL,
  `FeedBack` varchar(255) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `Time` varchar(255) NOT NULL,
  PRIMARY KEY (`FNO`),
  KEY `ItemID` (`ItemID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`FNO`, `UserName`, `ItemID`, `FeedBack`, `Date`, `Time`) VALUES
(1, 'janith', '18', 'good', '2020/02/10', '08:01:26');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

DROP TABLE IF EXISTS `item`;
CREATE TABLE IF NOT EXISTS `item` (
  `ItemID` int(255) NOT NULL,
  `ItemName` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Price` float NOT NULL,
  `Sub_Cat_Name` varchar(255) NOT NULL,
  `Product_Img1` text NOT NULL,
  `Product_Img2` text NOT NULL,
  `Product_Img3` text NOT NULL,
  `Offer_ID` int(10) NOT NULL,
  `Cat_Name` varchar(255) NOT NULL,
  PRIMARY KEY (`ItemID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`ItemID`, `ItemName`, `Description`, `Price`, `Sub_Cat_Name`, `Product_Img1`, `Product_Img2`, `Product_Img3`, `Offer_ID`, `Cat_Name`) VALUES
(1, 'Plane T Shirt', 'A brand-new, unused, and unworn item (including handmade items) in the original packaging (such as the original box or bag) and/or with the original tags attached. See all condition definitions', 850, 'Gents wear', 'items/black.jpg', 'items/white.jpg', 'items/red.jpg', 2, 'Apparel and Textiles'),
(2, 'Womens Business  Dress', 'It is made of high quality materials,durable enought for your daily wearing and Hand Wash Recommand or Dry Clean Your Dress', 1500, 'ladies wear', 'items/black2.jpg', 'items/red2.jpg', 'items/ash2.jpg', 2, 'Apparel and Textiles'),
(7, 'Sunglasses Driving Sports Outdoor Eyewear', 'KEITHION Square Fashion Polarized Men/Women Sunglasses Driving Sports Outdoor Eyewear', 880, 'Eye Wear', 'items/eyeblack7.jpg', 'items/eyered7.jpg', 'items/eyeblue7.jpg', 1, 'Jewelry and Accessories'),
(3, 'Giant Teddy Bear ', 'Giant 80CM-200CM Stuffed Animal Soft Cotton Plush Toy ', 10000, 'Toys', 'items/teddybearwhite3.jpg', 'items/teddybearpink3.jpg', 'items/teddybearbrown3.jpg', 3, 'Toys and Baby Items'),
(4, 'Watch', 'G style Shock Watches Men Military Army Mens Watch', 2990, 'Watches', 'items/GShock4', '', '', 1, 'Jewelry and Accessories'),
(5, 'Kids Christmas Sleeveless Casual Wear ', 'Kids Christmas Clothes Dresses Sleeveless Casual Wear Elegant Costume Outfit New', 3250, 'Kids wear', 'items/kidsfrockred6.jpg', 'items/kidsfrock6.jpg', 'items/kidsfrockblack6.jpg', 1, 'Apparel and Textiles'),
(6, 'Stroller Cartoon Baby Feeding-Bottle Holder', 'Stroller Cartoon Baby Feeding-Bottle Holder Rabbit, Panda, Unicorn Free Hand', 1400, 'Baby Items', 'items/feeding5.jpg', '', '', 3, 'Toys and Baby Items'),
(8, 'Necklace Bib Choker', 'Fashion Crystal Necklace Bib Choker Chain Chunk Statement Pendant Women Jewelry', 5500, 'Jewelry', 'items/jewelery8.jpg', '', '', 1, 'Jewelry and Accessories'),
(9, 'Monkey Teddy', 'Monkey Teddy', 980, 'Toys', 'items/teddy9.jpg', '', '', 1, 'Toys and Baby Items'),
(10, 'Born To Code', 'Born To code t Shirt with 100$ cotton 190 gsm.', 850, 'Gents wear', 'items/PicsArt_11-28-11.20.52.jpg', 'items/srilankan.jpg', 'items/srilankan1.jpg', 1, 'Apparel and Textiles'),
(11, 'LAPEL COLLAR PIPING DETAIL CHECK SHORT DRESS', 'LAPEL COLLAR PIPING DETAIL CHECK SHORT DRESS\r\n', 1790, 'ladies wear', 'items/143A9118E-490x700.jpg', 'items/1010201924-490x700.jpg', 'items/20062019030-490x700.jpg', 1, 'Apparel and Textiles'),
(12, 'Girl Flower Dress Kids Party Wear Sleeveless Clothing Girl Wedding Dresses', 'Dress, Material: Polyester fiber, Color: , Rose Red, Gender: Girl, Sleeve length: sleeveless, Seasons: spring, summer, autumn, .', 2251, 'Kids wear', 'items/b83b897312a6e70b6b4e4e58396d33fc.jpg', 'items/b83b897312a6e70b6b4e4e58396d33fc.jpg', 'items/b83b897312a6e70b6b4e4e58396d33fc.jpg', 1, 'Apparel and Textiles'),
(13, 'Military LED Digital Waterproof Wristwatch', 'SKMEI Watch Luxury Sport Mens Watches Military LED Digital Waterproof Wristwatch', 2500, 'Watches', 'items/w3.jpg', 'items/w4.jpg', 'items/', 1, 'Jewelry and Accessories'),
(14, 'CAIPO hevrolet Camaro Alloy Car', 'CAIPO 1:43 Chevrolet Camaro Alloy Car Model Pull Back Vehicles Kids Boys Toy', 3000, 'Toys', 'items/c.jpg', 'items/c1.jpg', 'items/', 2, 'Toys and Baby Items'),
(15, 'Mens Blazer', 'Mens Blazer for Parties', 3400, 'Gents wear', 'items/blazer.jpg', 'items/blazer2.jpg', 'items/blazer3.jpg', 3, 'Apparel and Textiles'),
(16, 'New POLARIZED QuikSilver Sunglasses With Box', 'New POLARIZED QuikSilver Sunglasses With Box Outdoor Sport Beach Surfing UV400', 1000, 'Eye Wear', 'items/e.jpg', 'items/e2.jpg', 'items/e3.jpg', 3, 'Jewelry and Accessories'),
(17, 'Baby Footwear', 'Baby Unisex Footwear', 670, 'Baby Items', 'items/b.jpg', 'items/b2.jpg', 'items/', 1, 'Toys and Baby Items'),
(18, 'Party Frock Long', 'Ladies party frock for outdoor parties and indoor parties.', 5000, 'ladies wear', 'items/l.jpg', 'items/l2.jpg', 'items/l3.jpg', 1, 'Apparel and Textiles'),
(19, 'Baby Kids wear', 'Baby wear', 780, 'Kids wear', 'items/k2.jpg', 'items/k3.jpg', 'items/k.jpg', 1, 'Toys and Baby Items');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `MNO` int(50) NOT NULL,
  `Date` date NOT NULL,
  `Time` time(6) NOT NULL,
  `Message` varchar(255) NOT NULL,
  `Cus_ID` int(50) NOT NULL,
  `Received_By` varchar(255) NOT NULL,
  PRIMARY KEY (`MNO`),
  KEY `Cus_ID` (`Cus_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`MNO`, `Date`, `Time`, `Message`, `Cus_ID`, `Received_By`) VALUES
(1, '2020-02-10', '07:52:17.000000', 'erdfdfgg', 2, 'Admin'),
(2, '2020-02-10', '07:53:19.000000', 'ok', 0, '2'),
(3, '2020-02-10', '07:53:58.000000', 'ok', 1, 'Admin'),
(4, '2020-02-10', '07:54:26.000000', 'sds', 1, 'Admin'),
(5, '2020-02-10', '07:54:37.000000', 'wewew', 1, 'Admin'),
(6, '2020-02-10', '07:54:49.000000', 'ok', 0, '1'),
(7, '2020-02-10', '07:55:15.000000', 'now', 0, ''),
(8, '2020-02-10', '07:58:53.000000', 'today', 0, '1'),
(9, '2020-02-10', '02:46:22.000000', 'Best Products', 1, 'Admin'),
(11, '2020-02-10', '02:47:31.000000', 'besttt', 1, 'Admin'),
(14, '2020-02-16', '07:23:30.000000', 'item was gpd', 1, 'Admin'),
(15, '2020-02-16', '07:25:05.000000', 'good', 2, 'Admin'),
(17, '2020-02-16', '07:26:30.000000', 'was', 2, 'Admin'),
(18, '2020-02-16', '07:26:55.000000', 'pooo', 1, 'Denu'),
(19, '2020-03-07', '02:03:24.000000', 'dddd', 2, 'Admin'),
(20, '2020-03-07', '02:03:58.000000', 'ss', 1, 'Denu'),
(21, '2020-03-07', '02:04:22.000000', 'wwww', 1, ''),
(22, '2020-03-07', '02:05:00.000000', 'ghfhf', 1, 'Denu'),
(23, '2020-03-07', '02:09:43.000000', 'testtesttesttesttest testtest testtest testtesttesttesttesttest test testtest test', 2, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

DROP TABLE IF EXISTS `offer`;
CREATE TABLE IF NOT EXISTS `offer` (
  `OfferID` int(100) NOT NULL,
  `O_Name` varchar(255) NOT NULL,
  `Percentage` double NOT NULL,
  PRIMARY KEY (`OfferID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`OfferID`, `O_Name`, `Percentage`) VALUES
(1, 'NewYear Offer', 10),
(2, 'Christmas Offer', 15),
(3, 'End of the year Offer', 25);

-- --------------------------------------------------------

--
-- Table structure for table `order_delivery`
--

DROP TABLE IF EXISTS `order_delivery`;
CREATE TABLE IF NOT EXISTS `order_delivery` (
  `OrderNO` int(50) NOT NULL,
  `Rider_Name` varchar(255) NOT NULL,
  `Rider_Phone_No` int(50) NOT NULL,
  `DeliveredDate` date NOT NULL,
  `DeliveredTime` time(6) NOT NULL,
  KEY `OrderNO` (`OrderNO`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_delivery`
--

INSERT INTO `order_delivery` (`OrderNO`, `Rider_Name`, `Rider_Phone_No`, `DeliveredDate`, `DeliveredTime`) VALUES
(1, 'Danushka', 713445090, '2020-03-16', '00:00:00.000000'),
(0, 'gfhy', 657890, '2020-03-11', '21:07:00.000000'),
(21, 'hv', 657890, '2020-02-24', '21:07:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `order_includes_item`
--

DROP TABLE IF EXISTS `order_includes_item`;
CREATE TABLE IF NOT EXISTS `order_includes_item` (
  `OrderNO` int(10) NOT NULL,
  `ItemID` int(10) NOT NULL,
  `Qty` int(10) DEFAULT NULL,
  PRIMARY KEY (`OrderNO`,`ItemID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_includes_item`
--

INSERT INTO `order_includes_item` (`OrderNO`, `ItemID`, `Qty`) VALUES
(21, 13, 10),
(21, 15, 100),
(22, 15, 100),
(23, 15, 100),
(24, 13, 2),
(25, 13, 2),
(26, 6, 4),
(27, 5, 2),
(27, 13, 4),
(28, 13, 100),
(29, 5, 2),
(30, 13, 1),
(31, 5, 1),
(32, 13, 2),
(32, 16, 2),
(33, 13, 3),
(33, 21, 6),
(34, 13, 1),
(35, 18, 2),
(36, 13, 1),
(36, 21, 2),
(37, 8, 1),
(37, 18, 2),
(37, 21, 6),
(38, 18, 5),
(39, 13, 1),
(40, 18, 3),
(41, 46, 3),
(42, 28, 1),
(43, 63, 1),
(44, 39, 1),
(45, 40, 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `OrderNO` int(100) NOT NULL,
  `Payment_Method` varchar(255) NOT NULL,
  `Amount` double NOT NULL,
  `Paid_Time` time(5) NOT NULL,
  `Paid_Date` date NOT NULL,
  PRIMARY KEY (`OrderNO`),
  KEY `OrderNO` (`OrderNO`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`OrderNO`, `Payment_Method`, `Amount`, `Paid_Time`, `Paid_Date`) VALUES
(21, 'Visa Card', 95850, '10:13:28.00000', '2020-03-11'),
(22, 'Visa Card', 88200, '10:15:29.00000', '2020-03-11'),
(23, 'Visa Card', 88200, '10:17:07.00000', '2020-03-11'),
(24, 'Visa Card', 1530, '12:14:45.00000', '2020-03-11'),
(25, 'Visa Card', 1530, '12:17:30.00000', '2020-03-11'),
(26, 'Visa Card', 5100, '12:19:26.00000', '2020-03-11'),
(27, 'Visa Card', 5610, '12:34:59.00000', '2020-03-11'),
(0, 'Visa Card', 0, '04:16:41.00000', '2020-03-11'),
(28, 'Visa Card', 76500, '04:25:35.00000', '2020-03-11'),
(29, 'Visa Card', 2550, '07:59:46.00000', '2020-03-12'),
(30, 'Visa Card', 765, '09:18:09.00000', '2020-03-12'),
(31, 'Visa Card', 1275, '09:42:34.00000', '2020-03-12'),
(32, 'Visa Card', 3114, '06:16:34.00000', '2020-03-14'),
(33, 'Visa Card', 14450.4, '06:20:26.00000', '2020-03-14'),
(34, 'Visa Card', 765, '06:25:37.00000', '2020-03-14'),
(35, 'Visa Card', 3222, '06:26:30.00000', '2020-03-14'),
(36, 'Visa Card', 4816.8, '10:47:30.00000', '2020-03-15'),
(37, 'Visa Card', 22877.4, '10:57:20.00000', '2020-03-15'),
(38, 'Visa Card', 8055, '01:16:28.00000', '2020-03-15'),
(39, 'Visa Card', 765, '01:25:12.00000', '2020-03-15'),
(40, 'Visa Card', 4833, '01:27:28.00000', '2020-03-15'),
(41, 'Visa Card', 13500, '10:11:40.00000', '2020-03-17'),
(42, 'Visa Card', 2550, '10:12:33.00000', '2020-03-17'),
(43, 'Visa Card', 702, '01:19:42.00000', '2020-03-20'),
(44, 'Visa Card', 603, '01:24:59.00000', '2020-03-20'),
(45, 'Visa Card', 603, '01:26:37.00000', '2020-03-20');

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

DROP TABLE IF EXISTS `size`;
CREATE TABLE IF NOT EXISTS `size` (
  `SizeNo` int(100) NOT NULL,
  `Size` varchar(255) NOT NULL,
  PRIMARY KEY (`SizeNo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`SizeNo`, `Size`) VALUES
(1, 'XS'),
(2, 'S'),
(3, 'M'),
(4, 'L'),
(5, 'XL'),
(6, 'XXL'),
(7, '3XL'),
(8, 'Free Size'),
(9, '8.5 UK'),
(10, '9 UK'),
(11, '11 UK'),
(12, '12 UK');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

DROP TABLE IF EXISTS `stock`;
CREATE TABLE IF NOT EXISTS `stock` (
  `ItemNo` int(100) NOT NULL,
  `ItemID` int(100) NOT NULL,
  `Colour` varchar(255) NOT NULL,
  `Size` varchar(255) NOT NULL,
  `Qty` int(100) NOT NULL,
  `img` text NOT NULL,
  KEY `ItemID` (`ItemID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`ItemNo`, `ItemID`, `Colour`, `Size`, `Qty`, `img`) VALUES
(1, 1, 'Black', 'M', 5, 'items/black.jpg'),
(2, 1, 'Black', 'S', 5, 'items/black.jpg'),
(3, 1, 'White', 'L', 5, 'items/white.jpg'),
(16, 7, 'Red', 'Free Size', 98, 'items/eyered7.jpg'),
(5, 2, 'Red', 'Free Size', 0, 'items/red2.jpg'),
(6, 2, 'Black', 'Free Size', 0, 'items/black2.jpg'),
(7, 2, 'Ash', 'Free Size', 3, 'items/ash2.jpg'),
(8, 3, 'White', 'Free Size', 5, 'items/teddybearwhite3.jpg'),
(9, 3, 'Pink', 'Free Size', 5, 'items/teddybearpink3.jpg'),
(10, 3, 'Brown', 'Free Size', 6, 'items/teddybearbrown3.jpg'),
(11, 4, 'Black', '7.5 inch', 5, 'items/GShock4.jpg'),
(12, 5, 'Red', 'S', 100, 'items/kidsfrockred6.jpg'),
(13, 10, 'Blue', 'S', 92, 'items/PicsArt_11-28-11.20.52.jpg'),
(14, 10, 'Black', 'M', 100, 'items/srilankan1.jpg'),
(15, 9, 'Blue', 'Free Size', 100, 'items/teddy9.jpg'),
(17, 7, 'Blue', 'Free Size', 100, 'items/eyeblue7.jpg'),
(18, 11, 'Black', 'Free Size', 88, 'items/143A9118E-490x700.jpg'),
(19, 11, 'Red', 'Free Size', 100, 'items/1010201924-490x700.jpg'),
(20, 11, 'Grey', 'Free Size', 100, 'items/20062019030-490x700.jpg'),
(21, 12, 'Pink', 'S', 86, 'items/b83b897312a6e70b6b4e4e58396d33fc.jpg'),
(22, 6, 'Grey', 'Select a size', 100, 'items/feeding5.jpg'),
(23, 13, 'White', '7.5 inch', 100, 'items/w3.jpg'),
(24, 13, 'Black', '7.0 inch', 100, 'items/w4.jpg'),
(25, 14, 'Yellow', 'Free Size', 100, 'items/c1.jpg'),
(26, 14, 'Red', 'Free Size', 100, 'items/c.jpg'),
(27, 15, 'Black', 'S', 100, 'items/blazer.jpg'),
(28, 15, 'Black', 'M', 99, 'items/blazer.jpg'),
(31, 15, 'Blue', 'M', 100, 'items/blazer2.jpg'),
(34, 15, 'Red', 'M', 100, 'items/blazer3.jpg'),
(35, 15, 'Red', 'L', 100, 'items/blazer3.jpg'),
(36, 16, 'Blue', 'Free Size', 100, 'items/e.jpg'),
(37, 16, 'Yellow', 'Free Size', 100, 'items/e2.jpg'),
(38, 16, 'Green', 'Free Size', 100, 'items/e3.jpg'),
(40, 17, 'Brown', '9 UK', 99, 'items/b.jpg'),
(42, 17, 'Brown', '12 UK', 100, 'items/b.jpg'),
(43, 17, 'Blue', '8.5 UK', 100, 'items/b2.jpg'),
(45, 17, 'Blue', '11 UK', 100, 'items/b2.jpg'),
(46, 18, 'Blue', 'XS', 97, 'items/l.jpg'),
(49, 18, 'Blue', 'L', 100, 'items/l.jpg'),
(52, 18, 'Black', 'M', 100, 'items/l2.jpg'),
(55, 18, 'Pink', 'M', 100, 'items/l3.jpg'),
(57, 19, 'Blue', 'S', 99, 'items/k2.jpg'),
(58, 19, 'Blue', 'M', 100, 'items/k2.jpg'),
(59, 19, 'Blue', 'L', 100, 'items/k2.jpg'),
(61, 19, 'Pink', 'L', 100, 'items/k3.jpg'),
(62, 19, 'Pink', 'XL', 100, 'items/k3.jpg'),
(66, 19, 'Floral Blue', 'XL', 100, 'items/k.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

DROP TABLE IF EXISTS `sub_category`;
CREATE TABLE IF NOT EXISTS `sub_category` (
  `Sub_Cat_ID` int(50) NOT NULL,
  `Cat_ID` int(50) NOT NULL,
  `Sub_Cat_Name` varchar(255) NOT NULL,
  PRIMARY KEY (`Sub_Cat_ID`),
  KEY `Cat_ID` (`Cat_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`Sub_Cat_ID`, `Cat_ID`, `Sub_Cat_Name`) VALUES
(2, 1, 'Gents wear'),
(1, 1, 'ladies wear'),
(3, 1, 'Kids wear'),
(4, 2, 'Jewelry'),
(5, 2, 'Eye Wear'),
(6, 2, 'Watches'),
(7, 3, 'Toys'),
(8, 3, 'Baby Items');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `UserID` int(100) NOT NULL,
  `FName` varchar(255) NOT NULL,
  `LName` varchar(255) NOT NULL,
  `Home_no` int(50) NOT NULL,
  `Street` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone_No` int(50) NOT NULL,
  `DOB` date NOT NULL,
  `Image` varchar(255) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `UserType` varchar(255) NOT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `FName`, `LName`, `Home_no`, `Street`, `City`, `Email`, `Phone_No`, `DOB`, `Image`, `UserName`, `Password`, `UserType`) VALUES
(1, 'Janith', 'De Silva', 12, 'Udugampola', 'Gampaha', 'janithlakshanmadusha@gmail.com', 712132904, '1997-12-03', '', 'Janith', '123', 'admin'),
(2, 'Denuka', 'Thennakoon', 52, 'Moragolla', 'Polgahawela', 'denuka.1993@gmail.com', 713449576, '1993-10-26', 'ProfilePic/My.jpg', 'Denu', '456', 'Customer'),
(5, 'dass', 'ds', 0, 'ds', 'ds', 'fs@gmail.com', 2147483647, '2020-03-01', 'ProfilePic/ash2.jpg', 'saman1', 'saman', 'Customer'),
(3, 'Saman', 'Kumara', 3, 'Sweet', 'Kandy', 'sanch@gmail.com', 987876545, '2016-01-21', '', 'saman', 'saman', 'Customer'),
(4, 'ass', 'sad', 34, 'fa', 'sfg', 'sanchiu@gmail.com', 2147483647, '0000-00-00', 'ProfilePic/ash2.jpg', 'DENUKA', '45678', 'Customer'),
(6, 'danb', 'dajs', 1, 'a', 'san', 'sa@gmail.com', 2147483647, '2020-03-31', 'ProfilePic/ash2.jpg', 'Saman23', 'saman', 'Customer'),
(7, 'Janith', 'DeSilva', 787, 'Hi I', 'Gampaha', 'janithlakshamadusha@gmail.com', 712132904, '2020-03-01', 'ProfilePic/1de.jpg', 'sami', 'qwert', 'Customer'),
(8, 'DavV', 'Logan', 123, 'Manches', 'California ', 'jhanu@gmail.com ', 775465432, '2019-11-04', 'ProfilePic/eatsleeptshirt-navy-3.jpg', 'Logan ', 'lllll', 'Customer'),
(9, 'Anura', 'DeSilv', 787, 'sasa', 'Gampaha', 'anura@gmail.com', 775037871, '2020-03-02', 'ProfilePic/game mode.jpg', 'anura', 'anura', 'Customer');

-- --------------------------------------------------------

--
-- Table structure for table `wish_list`
--

DROP TABLE IF EXISTS `wish_list`;
CREATE TABLE IF NOT EXISTS `wish_list` (
  `WishListNo` int(100) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `ItemID` int(100) NOT NULL,
  `Qty` int(100) NOT NULL,
  `NewPrice` float NOT NULL,
  `color` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  PRIMARY KEY (`WishListNo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wish_list`
--

INSERT INTO `wish_list` (`WishListNo`, `UserName`, `ItemID`, `Qty`, `NewPrice`, `color`, `size`) VALUES
(210, 'Denu', 11, 2, 1611, 'Red', 'Free Size'),
(211, 'Denu', 11, 2, 1611, 'Red', 'Free Size'),
(212, 'Denu', 9, 2, 882, 'Blue', 'Free Size'),
(221, 'Denu', 11, 2, 1611, 'Black', 'Free Size'),
(222, 'Denu', 10, 2, 765, 'Blue', 'S'),
(223, 'Denu', 10, 2, 765, 'Blue', 'S'),
(224, 'Denu', 10, 2, 765, 'Blue', 'S'),
(226, 'Denu', 11, 2, 1611, 'Red', 'Free Size'),
(228, 'Denu', 11, 2, 1611, 'Red', 'Free Size'),
(229, 'Denu', 11, 0, 1611, '1', 'Select A Size'),
(233, 'Denu', 11, 2, 1611, 'Red', 'Free Size'),
(255, 'Denu', 5, 2, 2925, 'Red', 'S'),
(281, 'Denu', 12, 3, 2025.9, 'Pink', 'S'),
(282, 'Denu', 10, 4, 765, 'Blue', 'S'),
(285, 'Denu', 9, 4, 882, 'Blue', 'Free Size'),
(288, 'Denu', 7, 2, 792, 'Red', 'Free Size'),
(292, 'Denu', 11, 4, 1611, 'Black', 'Free Size'),
(294, 'Denu', 11, 7, 1611, 'Red', 'Free Size'),
(295, 'Denu', 9, 0, 882, 'Blue', 'Free Size'),
(296, 'Denu', 9, 4, 882, 'Blue', 'Free Size'),
(298, 'Denu', 9, 4, 882, 'Blue', 'Free Size'),
(307, 'Denu', 10, 2, 765, 'Blue', 'S'),
(308, 'DENUKA', 7, 2, 792, 'Red', 'Free Size'),
(319, 'Denu', 10, 2, 765, 'Blue', 'S'),
(348, 'Denu', 11, 6, 1611, 'Black', 'Free Size'),
(361, 'Denu', 12, 2, 2025.9, 'Pink', 'S'),
(388, 'Denu', 3, 3, 7500, 'White', 'Free Size'),
(392, 'Denu', 12, 5, 2025.9, 'Pink', 'S'),
(395, 'Denu', 9, 2, 882, 'Blue', 'Free Size'),
(400, 'Denu', 3, 1, 7500, 'White', 'Free Size'),
(416, 'Denu', 12, 6, 2025.9, 'Pink', 'S'),
(449, 'Denu', 11, 5, 1611, 'Black', 'Free Size'),
(451, 'Denu', 11, 6, 1611, 'Black', 'Free Size'),
(453, 'Denu', 10, 1, 765, 'Blue', 'S');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
