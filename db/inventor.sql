-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2018 at 04:40 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventor`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` smallint(6) NOT NULL,
  `category` varchar(30) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category`) VALUES
(1, 'Family'),
(2, 'Friend'),
(3, 'Office'),
(4, 'Dating'),
(5, 'Client');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `category_id` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `address`, `category_id`) VALUES
(1, 'lorem', 'lorem@sample.com', '08787878', 'lorem address', 1),
(3, 'Lorem', 'Lorem@sample.com', '', 'Address for Lorem', 3),
(4, 'ipsum', 'ipsum@sample.com', '', 'Address for ipsum', 1),
(5, 'dolor', 'dolor@sample.com', '', 'Address for dolor', 4),
(6, 'sit', 'sit@sample.com', '', 'Address for sit', 3),
(7, 'amet,', 'amet,@sample.com', '', 'Address for amet,', 5),
(8, 'consectetur', 'consectetur@sample.com', '', 'Address for consectetur', 2),
(9, 'adipisicing', 'adipisicing@sample.com', '', 'Address for adipisicing', 1),
(10, 'elit,', 'elit,@sample.com', '', 'Address for elit,', 2),
(11, 'sed', 'sed@sample.com', '', 'Address for sed', 5),
(12, 'do', 'do@sample.com', '', 'Address for do', 2),
(13, 'eiusmod\ntempor', 'eiusmod\ntempor@sample.com', '', 'Address for eiusmod\ntempor', 1),
(14, 'incididunt', 'incididunt@sample.com', '', 'Address for incididunt', 4),
(15, 'ut', 'ut@sample.com', '', 'Address for ut', 1),
(16, 'labore', 'labore@sample.com', '', 'Address for labore', 1),
(17, 'et', 'et@sample.com', '', 'Address for et', 2),
(18, 'dolore', 'dolore@sample.com', '', 'Address for dolore', 4),
(19, 'magna', 'magna@sample.com', '', 'Address for magna', 3),
(20, 'aliqua', 'aliqua.@sample.com', '', 'Address for aliqua.', 4),
(21, 'Ut', 'Ut@sample.com', '', 'Address for Ut', 2),
(22, 'enim', 'enim@sample.com', '', 'Address for enim', 4),
(23, 'ad', 'ad@sample.com', '', 'Address for ad', 5),
(24, 'minim', 'minim@sample.com', '', 'Address for minim', 5),
(25, 'veniam,\nquis', 'veniam,\nquis@sample.com', '', 'Address for veniam,\nquis', 3),
(26, 'nostrud', 'nostrud@sample.com', '', 'Address for nostrud', 4),
(27, 'exercitation', 'exercitation@sample.com', '', 'Address for exercitation', 1),
(28, 'ullamco', 'ullamco@sample.com', '', 'Address for ullamco', 5),
(29, 'laboris', 'laboris@sample.com', '', 'Address for laboris', 4),
(30, 'nisi', 'nisi@sample.com', '', 'Address for nisi', 3),
(31, 'ut', 'ut@sample.com', '', 'Address for ut', 5),
(32, 'aliquip', 'aliquip@sample.com', '', 'Address for aliquip', 3),
(33, 'ex', 'ex@sample.com', '', 'Address for ex', 3),
(34, 'ea', 'ea@sample.com', '', 'Address for ea', 2),
(35, 'commodo\nconsequat', 'commodo\nconsequat.@sample.com', '', 'Address for commodo\nconsequat.', 2),
(36, 'Duis', 'Duis@sample.com', '', 'Address for Duis', 5),
(37, 'aute', 'aute@sample.com', '', 'Address for aute', 2),
(38, 'irure', 'irure@sample.com', '', 'Address for irure', 3),
(39, 'dolor', 'dolor@sample.com', '', 'Address for dolor', 5),
(40, 'in', 'in@sample.com', '', 'Address for in', 4),
(41, 'reprehenderit', 'reprehenderit@sample.com', '', 'Address for reprehenderit', 5),
(42, 'in', 'in@sample.com', '', 'Address for in', 2),
(43, 'voluptate', 'voluptate@sample.com', '', 'Address for voluptate', 5),
(44, 'velit', 'velit@sample.com', '', 'Address for velit', 2),
(45, 'esse\ncillum', 'esse\ncillum@sample.com', '', 'Address for esse\ncillum', 4),
(46, 'dolore', 'dolore@sample.com', '', 'Address for dolore', 3),
(47, 'eu', 'eu@sample.com', '', 'Address for eu', 4),
(48, 'fugiat', 'fugiat@sample.com', '', 'Address for fugiat', 2),
(49, 'nulla', 'nulla@sample.com', '', 'Address for nulla', 3),
(50, 'pariatur', 'pariatur.@sample.com', '', 'Address for pariatur.', 1),
(51, 'Excepteur', 'Excepteur@sample.com', '', 'Address for Excepteur', 3),
(52, 'sint', 'sint@sample.com', '', 'Address for sint', 5),
(53, 'occaecat', 'occaecat@sample.com', '', 'Address for occaecat', 4),
(54, 'cupidatat', 'cupidatat@sample.com', '', 'Address for cupidatat', 3),
(55, 'non\nproident,', 'non\nproident,@sample.com', '', 'Address for non\nproident,', 5),
(56, 'sunt', 'sunt@sample.com', '', 'Address for sunt', 4),
(57, 'in', 'in@sample.com', '', 'Address for in', 5),
(58, 'culpa', 'culpa@sample.com', '', 'Address for culpa', 4),
(59, 'qui', 'qui@sample.com', '', 'Address for qui', 1),
(60, 'officia', 'officia@sample.com', '', 'Address for officia', 2),
(61, 'deserunt', 'deserunt@sample.com', '', 'Address for deserunt', 1),
(62, 'mollit', 'mollit@sample.com', '', 'Address for mollit', 2),
(63, 'anim', 'anim@sample.com', '', 'Address for anim', 3),
(64, 'id', 'id@sample.com', '', 'Address for id', 1),
(65, 'est', 'est@sample.com', '', 'Address for est', 2),
(66, 'laborum', 'laborum.@sample.com', '', 'Address for laborum.', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inventory`
--

CREATE TABLE `tbl_inventory` (
  `Barcode` int(11) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `Brand` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Unit` varchar(50) NOT NULL,
  `Stock` int(11) NOT NULL,
  `Price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_inventory`
--

INSERT INTO `tbl_inventory` (`Barcode`, `Category`, `Brand`, `Type`, `Unit`, `Stock`, `Price`) VALUES
(1, 'Full Glass', 'Bavin', 'Samsung', 'JS Prime', 3, 450),
(2, 'Full Glass', 'Bavin', 'Samsung', 'JS Prime', 4, 450),
(3, 'Full Glass', 'Bavin', 'Samsung', 'J7 Prime', 2, 450),
(4, 'Full Glass', 'Bavin', 'Samsung', 'J7 Pro / J7 30', 2, 450),
(5, 'Full Glass', 'Bavin', 'IPhone', '6 (4.7)', 2, 450),
(6, 'Full Glass', 'Bavin', 'IPhone', '6 (5.5) / 6 Plus', 1, 450),
(7, 'Full Glass', 'Bavin', 'IPhone', '8 (4.7)', 4, 450),
(8, 'Full Glass', 'Bavin', 'IPhone', '8 (5.5) / 8 Plus', 1, 450),
(9, 'Full Glass', 'Bavin', 'IPhone', 'X', 2, 450),
(10, 'Full Glass', 'Totu', 'Samsung', 'Note 8 Black', 3, 1450),
(11, 'Full Glass', 'Totu', 'Samsung', 'S8 Black', 1, 1450),
(12, 'Full Glass', 'Totu', 'Samsung', 'S8 Plus Black', 3, 1450),
(13, 'Full Glass', 'Totu', 'Samsung', 'S9 Black', 3, 1450),
(14, 'Full Glass', 'Totu', 'Samsung', 'S9 Plus Black', 1, 1450),
(15, 'Case', 'Lumee', 'Iphone', 'Iphone 5', 2, 600),
(16, 'Case', 'Lumee', 'Iphone', 'Iphone 6 (4.7)', 3, 600),
(17, 'Case', 'Lumee', 'Iphone', 'Iphone 6 Plus', 3, 600),
(18, 'Case', 'Lumee', 'Iphone', 'Iphone 7 (4.7)', 3, 600),
(19, 'Case', 'Lumee', 'Iphone', 'Iphone 7 Plus', 1, 600),
(20, 'Case', 'Lumee', 'Samsung', 'S7 Edge', 2, 600),
(21, 'Tempered Glass', 'Lumee', 'Samsung', 'S6 Edge TPU Colored', 1, 150),
(22, 'Tempered Glass', 'Lumee', 'Samsung', 'S6 Edge Plus Colored', 1, 150),
(23, 'Button', 'Lumee', 'Oppo', 'Button with Design', 0, 80),
(24, 'Button', 'Lumee', 'Oppo', 'Button Black', 2, 80),
(25, 'Button', 'Lumee', 'Oppo', 'Button Blue/White', 3, 60),
(26, 'Button', 'Lumee', 'Oppo', 'Button Gold', 5, 60),
(27, 'Button', 'Lumee', 'Oppo', 'Button Gold/Black', 0, 60),
(28, 'Button', 'Lumee', 'Oppo', 'Button Gold/Blue', 2, 60),
(29, 'Button', 'Lumee', 'Oppo', 'Button Gold/Green', 0, 60),
(30, 'Button', 'Lumee', 'Oppo', 'Button Gold/Pink', 5, 60),
(31, 'Button', 'Lumee', 'Oppo', 'Button Gold/Red', 4, 60),
(32, 'Button', 'Lumee', 'Oppo', 'Button Gold/White', 4, 60),
(33, 'Button', 'Lumee', 'Oppo', 'Button Gold/Yellow', 1, 60),
(34, 'Button', 'Lumee', 'Oppo', 'Button Pink/White', 4, 60),
(35, 'Button', 'Lumee', 'Oppo', 'Button Red', 2, 60),
(36, 'Button', 'Lumee', 'Oppo', 'Button Rosegold', 2, 60),
(37, 'Button', 'Lumee', 'Oppo', 'Button Rosegold/Pink', 2, 60),
(38, 'Button', 'Lumee', 'Oppo', 'Button Rosegold/Black', 3, 60),
(39, 'Button', 'Lumee', 'Oppo', 'Button Rosegold/White', 0, 60),
(40, 'Button', 'Lumee', 'Oppo', 'Button Rosepink/White', 1, 60),
(41, 'Button', 'Lumee', 'Oppo', 'Button Silver/ Black', 2, 60),
(42, 'Button', 'Lumee', 'Oppo', 'Button Silver/Pink', 2, 60),
(43, 'Button', 'Lumee', 'Oppo', 'Button Silver/White', 0, 60),
(44, 'Button', 'Lumee', 'Oppo', 'Button Violet/White', 3, 60),
(45, 'Button', 'Lumee', 'Oppo', 'Oppo Plain', 0, 120),
(46, 'Button', 'Lumee', 'Oppo', 'Oppo with Design', 2, 120),
(47, 'Button/Lens Iphone Set ', 'Lumee', 'Iphone', 'Iphone 6(4.7) Black', 3, 200),
(48, 'Button/Lens Iphone Set ', 'Lumee', 'Iphone', 'Iphone 6 (4.7) Blue', 2, 200),
(49, 'Button/Lens Iphone Set ', 'Lumee', 'Iphone', 'Iphone 6(4.7) Gold', 1, 200),
(50, 'Button/Lens Iphone Set ', 'Lumee', 'Iphone', 'Iphone 6(4.7) Pink', 2, 200),
(51, 'Button/Lens Iphone Set ', 'Lumee', 'Iphone', 'Iphone 6(4.7) Rosegold', 2, 200),
(52, 'Button/Lens Iphone Set ', 'Lumee', 'Iphone', 'Iphone 6(4.7) Silver', 4, 200),
(53, 'Button/Lens Iphone Set ', 'Lumee', 'Iphone', 'Iphone 6(5.5)/6 Plus Black', 0, 200),
(54, 'Button/Lens Iphone Set ', 'Lumee', 'Iphone', 'Iphone 6(5.5)/6 Plus Blue', 2, 200),
(55, 'Button/Lens Iphone Set ', 'Lumee', 'Iphone', 'Iphone 6(5.5)/6 Plus Gold', 0, 200),
(56, 'Button/Lens Iphone Set ', 'Lumee', 'Iphone', 'Iphone 6(5.5)/6 Plus Pink', 0, 200),
(57, 'Button/Lens Iphone Set ', 'Lumee', 'Iphone', 'Iphone 6(5.5)/6 Plus Rosegold', 2, 200),
(58, 'Button/Lens Iphone Set ', 'Lumee', 'Iphone', 'Iphone 6(5.5)/6 Plus Silver', 1, 200),
(59, 'Button/Lens Iphone Set ', 'Lumee', 'Iphone', 'Iphone 7(4.7)/Iphone 7 Black', 2, 200),
(60, 'Button/Lens Iphone Set', 'Lumee', 'Iphone', 'Iphone 7(4.7)/Iphone 7 Blue', 0, 200),
(61, 'Button/Lens Iphone Set', 'Lumee', 'Iphone', 'Iphone 7(4.7)/Iphone 7 Gold', 2, 200),
(62, 'Button/Lens Iphone Set', 'Lumee', 'Iphone', 'Iphone 7(4.7)/Iphone 7 Pink', 1, 200),
(63, 'Button/Lens Iphone Set', 'Lumee', 'Iphone', 'Iphone 7(4.7)/Iphone 7 Rosegold', 1, 200),
(64, 'Button/Lens Iphone Set', 'Lumee', 'Iphone', 'Iphone 7(4.7)/Iphone 7 Silver', 2, 200),
(65, 'Button/Lens Iphone Set', 'Lumee', 'Iphone', 'Iphone 7(5.5)/Iphone 7 Plus Black', 1, 200),
(66, 'Button/Lens Iphone Set', 'Lumeee', 'Iphone', 'Iphone 7(5.5)/Iphone 7 Plus Blue', 2, 200),
(67, 'Button/Lens Iphone Set', 'Lumee', 'Iphone', 'Iphone 7(5.5)/Iphone 7 Plus Gold', 2, 200),
(68, 'Button/Lens Iphone Set', 'Lumee', 'Iphone', 'Iphone 7(5.5)/Iphone 7 Plus Pink', 0, 200),
(69, 'Button/Lens Iphone Set', 'Lumee', 'Iphone', 'Iphone 7(5.5)/Iphone 7 Plus Rosegold', 0, 200),
(70, 'Button/Lens Iphone Set', 'Lumee', 'Iphone', 'Iphone 7(5.5)/Iphone 7 Plus Silver', 2, 200),
(71, 'Button/Lens Iphone Set', 'Lumee', 'Iphone', 'Iphone X / Black', 2, 200),
(72, 'Button/Lens Iphone Set', 'Lumee', 'Iphone', 'Iphone X / Blue', 2, 200),
(73, 'Button/Lens Iphone Set', 'Lumee', 'Iphone', 'Iphone X / Pink', 1, 200),
(74, 'Button/Lens Iphone Set', 'Lumee', 'Iphone', 'Iphone X / Rosegold', 2, 200),
(75, 'Button/Lens Iphone Set', 'Lumee', 'Iphone', 'Iphone X / Silver', 0, 200),
(76, 'Lens Pro Iphone (Single)', 'Lumee', 'Iphone', 'Iphone6(4.7) Single Black', 2, 80),
(77, 'Lens Pro Iphone (Single)', 'Lumee', 'Iphone', 'Lens Pro Iphone6(4.7) Single Blue', 1, 80),
(78, 'Lens Pro Iphone (Single)', 'Lumee', 'Iphone', 'Lens Pro Iphone6(4.7) Single Gold', 0, 80),
(79, 'Lens Pro Iphone (Single)', 'Lumee', 'Iphone', 'Lens Pro Iphone6(4.7) Single Gray/Silver', 1, 80),
(80, 'Lens Pro Iphone (Single)', 'Lumee', 'Iphone', 'Lens Pro Iphone6(4.7) Single Pink', 1, 80),
(81, 'Lens Pro Iphone (Single)', 'Lumee', 'Iphone', 'Lens Pro Iphone6 (5.5) Single Black', 0, 80),
(82, 'Lens Pro Iphone (Single)', 'Lumee', 'Iphone', 'Lens Pro Iphone6(5.5) Single Blue', 1, 80),
(83, 'Lens Pro Iphone (Single)', 'Lumee', 'Iphone', 'Lens Pro Iphone6(5.5) Single Gold', 0, 80),
(84, 'Lens Pro Iphone (Single)', 'Lumee', 'Iphone', 'Lens Pro Iphone6(5.5) Single Gray/Gold', 2, 80),
(85, 'Lens Pro Iphone (Single)', 'Lumee', 'Iphone', 'Lens Pro Iphone6(5.5) Single Pink', 0, 80),
(86, 'Lens Pro Iphone (Single)', 'Lumee', 'Iphone', 'Lens Pro Iphone X Single Black', 0, 80),
(87, 'Lens Pro Iphone (Single)', 'Lumee', 'Iphone', 'Lens Pro Iphone X Single Blue', 0, 80),
(88, 'Lens Pro Iphone (Single)', 'Lumee', 'Iphone', 'Lens Pro Iphone X Single Gold', 0, 80),
(89, 'Lens Pro Iphone (Single)', 'Lumee', 'Iphone', 'Lens Pro Iphone X Single Gray/Silver', 0, 80),
(90, 'Lens Pro Iphone (Single)', 'Lumee', 'Iphone', 'Lens Pro Iphone X Single Pink', 0, 80),
(91, 'Case', 'Xunod ', 'Iphone', 'Armor Series Iphone 6(4.7)', 1, 450),
(92, 'Case', 'Xunod ', 'Iphone', 'Beatle Series 6(4.7)', 2, 380),
(93, 'Case', 'Xunod ', 'Iphone', 'Gun Metal', 0, 350),
(94, 'Case', 'Xunod', 'Iphone', 'Jazz 2ND Series Iphone 6(4.7)', 2, 350),
(95, 'Case', 'Xunod', 'Iphone', 'Jazz 2ND  Ring Series Iphone 6(4.7)', 1, 399),
(96, 'Case', 'Xunod ', 'Iphone', 'Magic Beatle Series Iphone 6(4.7)', 1, 499),
(97, 'Case', 'Xunod ', 'Iphone', 'Magic Shield Series N-850', 2, 750),
(98, 'Case', 'Xunod ', 'Iphone', 'Jing Series Iphone 6(4.7)', 0, 350),
(99, 'Case', 'Xunod ', 'Iphone', 'Ufo Series 6(4.7)', 0, 350),
(100, 'Case', 'Xunod ', 'Iphone', 'Vette Series Iphone 6(4.7)', 1, 550),
(101, 'Case', 'Xunod ', 'Iphone', 'Warrior Ring Series Iphone 6(4.7)', 0, 750),
(102, 'Case', 'Xunod', 'Iphone', 'Xring Plus Series Iphone 6(4.7)', 0, 399),
(103, 'Case', 'Xunod', 'Iphone', 'Saina Series (Leather) Iphone 6(4.7)', 2, 550),
(104, 'Case', 'Xunod ', 'Iphone', 'Armor Series Iphone 6 Plus', 0, 450),
(105, 'Case', 'Xunod ', 'Iphone', 'Beatle Series Iphone 6 Plus', 1, 380),
(106, 'Case', 'Xunod', 'Iphone', 'Gun Metal Iphone 6 Plus', 2, 350),
(107, 'Case', 'Xunod ', 'Iphone', 'Jazz Series Iphone 6 Plus', 1, 350),
(108, 'Case', 'Xunod ', 'Iphone', 'Jazz 2ND Series Iphone 6 Plus', 2, 350),
(109, 'Case', 'Xunod ', 'Iphone', 'Jazz 2ND  Ring Series Iphone 6 Plus', 2, 399),
(110, 'Case', 'Xunod ', 'Iphone', 'Jazz Magic Series Iphone 6 Plus', 2, 399),
(111, 'Case', 'Xunod ', 'Iphone', '2ND Jazz Magic Series Iphone 6 Plus', 0, 399),
(112, 'Case', 'Xunod ', 'Iphone', 'Magic Beatles Series Iphone 6 Plus', 2, 499),
(113, 'Case', 'Xunod ', 'Iphone', 'Magic Shield Series N-850 Iphone 6 Plus', 0, 750),
(114, 'Case', 'Xunod ', 'Iphone', 'Magic Waltz Series Iphone 6 Plus', 2, 450),
(115, 'Case', 'Xunod ', 'Iphone', '2ND Jazz Magic Series Iphone 5', 2, 450),
(116, 'Case', 'Xunod ', 'Iphone', 'Jazz 2ND Series Iphone 5', 1, 380),
(117, 'Case', 'Xunod ', 'Iphone', 'Saina Series Iphone 5', 2, 499),
(118, 'Case', 'Xunod ', 'Iphone', 'Jing Series  / Iphone 6 Plus', 1, 350),
(119, 'Case', 'Xunod ', 'Iphone', 'Vette Series / Iphone 6 Plus', 2, 550),
(120, 'Case', 'Xunod ', 'Iphone', 'Warrior Ring Series / Iphone 6 Plus', 2, 750),
(121, 'Case', 'Xunod ', 'Iphone', 'Xring Plus Series / Iphone 6 Plus', 1, 399),
(122, 'Case', 'Xunod ', 'Iphone', 'Armor Series Iphone 7(4.7)', 2, 450),
(123, 'Case', 'Xunod ', 'Iphone', 'Beatle Series Iphone 7(4.7)', 0, 380),
(124, 'Case', 'Xunod ', 'Iphone', 'Gun Metal Iphone 7(4.7)', 2, 350),
(125, 'Case', 'Xunod ', 'Iphone', 'Jazz 2ND Series Iphone 7(4.7)', 2, 350),
(126, 'Case', 'Xunod ', 'Iphone', 'Jazz 2ND  Ring Series Iphone 7(4.7)', 30, 399),
(127, 'Case', 'Xunod ', 'Iphone', 'Jazz Magic Series Iphone 7(4.7)', 1, 399),
(128, 'Case', 'Xunod ', 'Iphone', '2ND Jazz Magic Series Iphone 7(4.7)', 2, 399),
(129, 'Case', 'Xunod ', 'Iphone', 'Magic Beatle Series Iphone 7(4.7)', 2, 399),
(130, 'Case', 'Xunod ', 'Iphone', 'Magic Shield Series N-850 Iphone 7(4.7)', 0, 750),
(132, 'Case', 'Xunod ', 'Iphone', 'Jing Series Iphone 7(4.7)', 2, 350),
(133, 'Case', 'Xunod ', 'Iphone', 'Vette Series Iphone 7(4.7)', 2, 550),
(134, 'Case', 'Xunod ', 'Iphone', 'Warrior Ring Series Iphone 7(4.7)', 1, 750),
(136, 'Case', 'Xunod ', 'Iphone', 'Xring Plus Series Iphone 7(4.7)', 2, 399),
(137, 'Case', 'Xunod ', 'Iphone', 'Saina Series Iphone 7(4.7)', 1, 550),
(138, 'Case', 'Xunod ', 'Iphone', 'Armor Series Iphone 7 Plus', 2, 450),
(140, 'Case', 'Xunod ', 'Iphone', 'Beatle Series Iphone 7 Plus', 2, 380),
(141, 'Case', 'Xunod ', 'Iphone', 'Gun Metal Iphone 7 Plus', 2, 350),
(142, 'Case', 'Xunod ', 'Iphone', 'Jazz Series Iphone 7 Plus', 1, 350),
(143, 'Case', 'Xunod ', 'Iphone', 'Jazz 2ND Series Iphone 7 Plus', 0, 350),
(144, 'Case', 'Xunod ', 'Iphone', 'Jazz 2ND  Ring Series Iphone 7 Plus', 2, 399),
(145, 'Case', 'Xunod ', 'Iphone', 'Jazz Magic Series Iphone 7 Plus', 2, 399),
(146, 'Case', 'Xunod ', 'Iphone', '2ND Jazz Magic Series Iphone 7 Plus', 2, 399),
(147, 'Case', 'Xunod ', 'Iphone', 'Magic Beatle Series Iphone 7 Plus', 2, 399),
(148, 'Case', 'Xunod ', 'Iphone', 'Magic Shield Series Iphone 7 Plus', 2, 750),
(149, 'Case', 'Xunod ', 'Iphone', 'Jing Series Iphone 7 Plus', 0, 350),
(150, 'Case', 'Xunod ', 'Iphone', 'Vette Series Iphone 7 Plus', 1, 550),
(151, 'Case', 'Xunod ', 'Iphone', 'Warrior Ring Series Iphone 7 Plus', 2, 750),
(152, 'Case', 'Xunod ', 'Iphone', 'Xring Plus Series Iphone 7 Plus', 2, 399),
(153, 'Case', 'Xunod ', 'Iphone', 'Saina Series Iphone 7 Plus', 1, 550),
(154, 'Case', 'Xunod ', 'Iphone', 'Saina Series Iphone 7 Plus', 2, 350),
(155, 'Case', 'Xunod ', 'Iphone', 'Encore Series (Leather) Iphone 7 Plus', 2, 499),
(156, 'Case', 'Xunod ', 'Iphone', 'Beatle Series Iphone X', 1, 380),
(157, 'Case', 'Xunod ', 'Iphone', 'Jazz 2ND Series Iphone X', 2, 350),
(158, 'Case', 'Xunod ', 'Iphone', '2ND Jazz Magic Series Iphone X', 2, 450),
(159, 'Case', 'Xunod ', 'Iphone', 'Magic Beatle Series Iphone X', 2, 499),
(160, 'Case', 'Xunod ', 'Iphone', 'Ufo Series Iphone X', 3, 350),
(161, 'Case', 'Xunod ', 'Iphone', 'Vette Series Iphone X', 0, 550),
(162, 'Case', 'Xunod ', 'Samsung', 'A5 2017 Jazz 2ND Series', 2, 350),
(163, 'Case', 'Xunod ', 'Samsung', 'A5 2017 Jazz 2ND  Ring Series', 1, 399),
(164, 'Case', 'Xunod ', 'Samsung', 'A7 2017/A720 Jazz 2ND Series', 2, 350),
(165, 'Case', 'Xunod ', 'Samsung', 'A7 2017/A720 Jazz 2ND  Ring Series', 2, 399),
(166, 'Case', 'Xunod ', 'Samsung', 'A8 2018 2ND Jazz Magic Series', 2, 450),
(167, 'Case', 'Xunod ', 'Samsung', 'A8 2018 Jazz 2ND Series', 1, 380),
(168, 'Case', 'Xunod ', 'Samsung', 'A8 2018 Ufo Series', 2, 350),
(170, 'Case', 'Xunod ', 'Samsung', 'A8 Plus (2018) 2ND Jazz Magic Series', 2, 450),
(171, 'Case', 'Xunod ', 'Samsung', 'A8 Plus (2018) Ufo Series', 2, 350),
(172, 'Case', 'Xunod ', 'Samsung', 'A9/A9 Pro Jazz 2ND  Ring Series', 1, 399),
(173, 'Case', 'Xunod ', 'Samsung', 'A9/A9 Pro Xring Plus Series', 1, 399),
(174, 'Case', 'Xunod ', 'Samsung', 'A9/A9 Pro Encore Series (Leather)', 2, 499),
(175, 'Case', 'Xunod ', 'Samsung', 'G6000/ON 7 Ufo Series', 2, 350),
(176, 'Case', 'Xunod ', 'Samsung', 'J2 Prime Beatle Series', 2, 380),
(177, 'Case', 'Xunod ', 'Samsung', 'J2 Prime Ufo Series', 2, 350),
(178, 'Case', 'Xunod ', 'Samsung', 'J7 Core/J7 2015 2ND Jazz Magic Series', 2, 350),
(179, 'Case', 'Xunod ', 'Samsung', 'J7 Core/J7 2015 Jazz Series', 2, 350),
(180, 'Case', 'Xunod ', 'Samsung', 'J7 Core/J7 2015 Ufo Series', 2, 350),
(181, 'Case', 'Xunod ', 'Samsung', 'J7 Core/J7 2015 Saina Series', 2, 499),
(182, 'Case', 'Xunod ', 'Samsung', 'J7 Prime Earl Series', 1, 380),
(183, 'Case', 'Xunod ', 'Samsung', 'J7 Prime 2ND Jazz Magic Series', 1, 450),
(184, 'Case', 'Xunod ', 'Samsung', 'J7 Prime Jazz 2ND  Ring Series', 2, 399),
(185, 'Case', 'Xunod ', 'Samsung', 'J7 Prime Ufo Series', 2, 350),
(186, 'Case', 'Xunod ', 'Samsung', 'J7 Pro/J730 2ND Jazz Magic Series', 2, 399),
(187, 'Case', 'Xunod ', 'Samsung', 'J7 Pro/J730 Beatle Series', 2, 380),
(188, 'Case', 'Xunod ', 'Samsung', 'J7 Pro/J730 Earl Ring Series', 2, 399),
(189, 'Case', 'Xunod ', 'Samsung', 'J7 Pro/J730 Magic Beatle Series', 0, 399),
(190, 'Case', 'Xunod ', 'Samsung', 'J7 Pro/J730 Magic Earl Ring Series', 2, 450),
(191, 'Case', 'Xunod ', 'Samsung', 'J7 Pro/J730 Ufo Series', 2, 399),
(192, 'Case', 'Xunod ', 'Samsung', 'J7 Pro/J730 Vette Series', 1, 550),
(193, 'Case', 'Xunod ', 'Samsung', 'J7 Pro/J730 Saina Series', 1, 499),
(194, 'Case', 'Xunod ', 'Samsung', 'Note 8 Beatle Series N-399', 2, 380),
(195, 'Case', 'Xunod ', 'Samsung', 'Note 8 Earl Series', 3, 380),
(196, 'Case', 'Xunod ', 'Samsung', 'Note 8 2ND Jazz Magic Series N-450', 2, 399),
(197, 'Case', 'Xunod ', 'Samsung', 'Note 8 Jazz 2ND Series', 2, 380),
(198, 'Case', 'Xunod ', 'Samsung', 'Note 8 Magic Beatle Series N-450', 2, 399),
(199, 'Case', 'Xunod ', 'Samsung', 'Note 8 Magic Earl Series N-450', 2, 399),
(200, 'Case', 'Xunod ', 'Samsung', 'Note 8 Ufo Series', 2, 350),
(201, 'Case', 'Xunod ', 'Samsung', 'Note 8 Vette Series', 1, 550),
(202, 'Case', 'Xunod ', 'Samsung', 'Note 8 Encore Series (Leather)', 2, 480),
(203, 'Case', 'Xunod ', 'Samsung', 'Note 8 Encore Ring Buckles Series (Leather)', 1, 550),
(204, 'Case', 'Xunod ', 'Samsung', 'Note 8 Saina Series', 2, 550),
(205, 'Case', 'Xunod ', 'Samsung', 'S6 Edge Encore Series(Leather)', 2, 450),
(206, 'Case', 'Xunod ', 'Samsung', 'S7 Edge Plus 2ND Jazz Magic Series', 1, 399),
(207, 'Case', 'Xunod ', 'Samsung', 'S7 Edge Plus Jazz Series', 2, 350),
(208, 'Case', 'Xunod ', 'Samsung', 'S7 Edge Plus Magic Waltz Ring Series', 1, 450),
(209, 'Case', 'Xunod ', 'Samsung', 'S7 Edge Plus Xring Plus Series', 2, 350),
(210, 'Case', 'Xunod ', 'Samsung', 'S7 Edge Plus Ufo Series', 0, 350),
(211, 'Case', 'Xunod ', 'Samsung', 'S7 Edge Plus Vette Series', 1, 450),
(212, 'Case', 'Xunod ', 'Samsung', 'S7 Edge Plus Encore Series (Leather)', 1, 450),
(213, 'Case', 'Xunod ', 'Samsung', 'S7 Edge Plus Gentleman Series', 0, 550),
(214, 'Case', 'Xunod ', 'Samsung', 'S7 Jazz 2nd Ring Series', 2, 399),
(215, 'Case', 'Xunod ', 'Samsung', 'S7 Xring Plus Series', 0, 399),
(216, 'Case', 'Xunod ', 'Iphone', 'S7 Encore Series', 2, 499),
(217, 'Case', 'Xunod ', 'Samsung', 'S7 Gentleman Series', 2, 550),
(218, 'Case', 'Xunod ', 'Samsung', 'S8 Armor Series', 2, 450),
(219, 'Case', 'Xunod ', 'Samsung', 'S8 Beatle Series N-399', 2, 380),
(220, 'Case', 'Xunod ', 'Samsung', 'S8 Jazz 2nd Series', 0, 350),
(221, 'Case', 'Xunod ', 'Samsung', 'S8 Jazz 2nd Ring Series', 0, 399),
(222, 'Case', 'Xunod ', 'Samsung', 'S8 2ND Jazz Magic Series', 1, 399),
(223, 'Case', 'Xunod ', 'Samsung', 'S8 Magic Waltz Series', 2, 399),
(224, 'Case', 'Xunod ', 'Samsung', 'S8 Ufo Series', 2, 350),
(225, 'Case', 'Xunod ', 'Samsung', 'S8 Vette Series', 2, 550),
(226, 'Case', 'Xunod ', 'Samsung', 'S8 Waltz Ring Series', 0, 450),
(227, 'Case', 'Xunod ', 'Samsung', 'S8 Encore Series (Leather)', 2, 499),
(228, 'Case', 'Xunod ', 'Samsung', 'S8 Encore Ring Buckles Series (Leather)', 1, 550);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sales`
--

CREATE TABLE `tbl_sales` (
  `Product` varchar(50) NOT NULL,
  `Code` varchar(20) NOT NULL,
  `Quantity` int(20) NOT NULL,
  `unit_price` double NOT NULL,
  `tbl_sales_ID` int(11) NOT NULL,
  `order_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sales`
--

INSERT INTO `tbl_sales` (`Product`, `Code`, `Quantity`, `unit_price`, `tbl_sales_ID`, `order_date`) VALUES
('7', 'as', 1, 450, 12, '2018-11-12 14:23:36'),
('7', 'as', 3, 450, 13, '2018-11-12 14:23:36'),
('6', 'fae', 2, 450, 14, '2018-11-13 14:41:33'),
('7', 'fae', 2, 450, 15, '2018-11-13 14:42:22'),
('7', 'fae', 1, 450, 16, '2018-11-13 14:42:39'),
('18', 'fae', 2, 600, 17, '2018-11-13 14:43:11'),
('26', 'fae', 1, 60, 18, '2018-11-13 14:43:34'),
('27', 'fae', 2, 60, 19, '2018-11-13 14:44:02'),
('29', 'fae', 5, 60, 20, '2018-11-13 14:44:40'),
('45', 'fae', 3, 120, 21, '2018-11-13 14:45:09'),
('126', 'fae', 4, 399, 22, '2018-11-13 14:45:46'),
('161', 'fae', 1, 550, 23, '2018-11-13 14:57:15'),
('99', 'fae', 2, 350, 24, '2018-11-13 14:57:54'),
('105', 'fae', 2, 380, 25, '2018-11-13 15:01:59'),
('126', 'fae', 5, 399, 26, '2018-11-13 15:02:27'),
('142', 'fae', 2, 350, 27, '2018-11-13 15:02:44'),
('159', 'fae', 2, 499, 28, '2018-11-13 15:03:08'),
('7', 'fae', 2, 450, 29, '2018-11-15 07:33:37'),
('15', 'fae', 1, 600, 30, '2018-11-15 07:33:58'),
('17', 'fae', 2, 600, 31, '2018-11-15 07:34:22'),
('21', 'fae', 2, 150, 32, '2018-11-15 07:34:40'),
('23', 'fae', 3, 80, 33, '2018-11-15 07:34:53'),
('26', 'fae', 1, 60, 34, '2018-11-15 07:35:06'),
('31', 'fae', 2, 60, 35, '2018-11-15 07:35:25'),
('36', 'fae', 2, 60, 36, '2018-11-15 07:35:52'),
('44', 'fae', 1, 60, 37, '2018-11-15 07:36:09'),
('58', 'fae', 2, 200, 38, '2018-11-15 07:37:05'),
('69', 'fae', 1, 200, 39, '2018-11-15 07:37:20'),
('77', 'fae', 1, 80, 40, '2018-11-15 07:37:37'),
('86', 'fae', 1, 80, 41, '2018-11-15 07:37:50'),
('91', 'fae', 1, 450, 42, '2018-11-15 07:38:40'),
('102', 'fae', 2, 399, 43, '2018-11-15 07:39:03'),
('104', 'fae', 1, 450, 44, '2018-11-15 07:39:20'),
('107', 'fae', 2, 350, 45, '2018-11-15 07:39:37'),
('116', 'fae', 1, 380, 46, '2018-11-15 07:40:04'),
('126', 'fae', 3, 399, 47, '2018-11-15 07:40:21'),
('134', 'fae', 1, 750, 48, '2018-11-15 07:40:39'),
('149', 'fae', 2, 350, 49, '2018-11-15 07:40:55'),
('160', 'fae', 1, 350, 50, '2018-11-15 07:41:11'),
('161', 'fae', 1, 550, 51, '2018-11-15 07:41:31'),
('172', 'fae', 1, 399, 52, '2018-11-15 07:41:56'),
('161', 'fae', 1, 550, 53, '2018-11-15 07:43:45'),
('182', 'fae', 1, 380, 54, '2018-11-15 07:44:10'),
('189', 'fae', 1, 399, 55, '2018-11-15 07:44:25'),
('195', 'fae', 2, 380, 56, '2018-11-15 07:44:39'),
('201', 'fae', 1, 550, 57, '2018-11-15 07:45:02'),
('192', 'fae', 1, 550, 58, '2018-11-15 07:45:13'),
('18', 'fae', 1, 600, 59, '2018-11-15 07:45:24'),
('206', 'fae', 1, 399, 60, '2018-11-15 07:45:39'),
('101', 'fae', 1, 750, 61, '2018-11-15 07:45:52'),
('208', 'fae', 1, 450, 62, '2018-11-15 07:46:06'),
('210', 'fae', 2, 350, 63, '2018-11-15 07:46:21'),
('90', 'fae', 2, 80, 64, '2018-11-15 07:46:42'),
('60', 'fae', 2, 200, 65, '2018-11-15 07:46:57'),
('215', 'fae', 2, 399, 66, '2018-11-15 07:47:16'),
('85', 'fae', 2, 80, 67, '2018-11-15 07:47:38'),
('220', 'fae', 2, 350, 68, '2018-11-15 07:47:51'),
('213', 'fae', 1, 550, 69, '2018-11-15 07:48:17'),
('226', 'fae', 2, 450, 70, '2018-11-15 07:48:40'),
('13', 'fae', 2, 1450, 71, '2018-11-15 07:48:52'),
('222', 'fae', 1, 399, 72, '2018-11-15 07:49:05'),
('6', 'fae', 2, 450, 73, '2018-11-15 07:50:30'),
('7', 'fae', 1, 450, 74, '2018-11-15 07:50:51'),
('2', 'fae', 1, 450, 75, '2018-11-15 07:51:07'),
('8', 'fae', 1, 1450, 76, '2018-11-15 07:51:37'),
('20', 'fae', 1, 1450, 77, '2018-11-15 07:51:55'),
('89', 'fae', 2, 80, 78, '2018-11-15 07:53:08'),
('75', 'fae', 2, 200, 79, '2018-11-15 07:53:41'),
('86', 'fae', 1, 80, 80, '2018-11-15 07:53:52'),
('33', 'fae', 2, 60, 81, '2018-11-15 07:54:07'),
('95', 'fae', 1, 399, 82, '2018-11-15 07:54:21'),
('101', 'fae', 1, 750, 83, '2018-11-15 07:54:49'),
('123', 'fae', 1, 380, 84, '2018-11-15 07:55:05'),
('43', 'fae', 3, 60, 85, '2018-11-15 07:55:24'),
('15', 'fae', 1, 600, 86, '2018-11-15 07:55:37'),
('63', 'fae', 1, 200, 87, '2018-11-15 07:56:05'),
('73', 'fae', 1, 200, 88, '2018-11-15 07:56:23'),
('83', 'fae', 1, 80, 89, '2018-11-15 07:56:46'),
('93', 'fae', 1, 350, 90, '2018-11-15 07:57:03'),
('113', 'fae', 1, 750, 91, '2018-11-15 07:57:14'),
('143', 'fae', 1, 350, 92, '2018-11-15 07:57:31'),
('153', 'fae', 1, 550, 93, '2018-11-15 07:57:46'),
('163', 'fae', 1, 399, 94, '2018-11-15 08:01:01'),
('173', 'fae', 1, 399, 95, '2018-11-15 08:01:43'),
('183', 'fae', 1, 450, 96, '2018-11-15 08:02:10'),
('193', 'fae', 1, 499, 97, '2018-11-15 08:02:22'),
('203', 'fae', 1, 550, 98, '2018-11-15 08:02:50'),
('113', 'fae', 1, 750, 99, '2018-11-15 08:03:13'),
('143', 'fae', 1, 350, 100, '2018-11-15 08:03:39'),
('213', 'fae', 1, 550, 101, '2018-11-15 08:03:55'),
('20', 'fae', 1, 600, 102, '2018-11-15 08:04:21'),
('25', 'fae', 1, 60, 103, '2018-11-15 08:04:53'),
('78', 'bae', 2, 80, 104, '2018-11-15 18:50:24'),
('150', 'fae', 1, 550, 105, '2018-11-15 18:51:13'),
('1', 'fae', 2, 450, 106, '2018-11-15 18:56:29'),
('126', 'bal', 8, 399, 107, '2018-11-16 10:54:30'),
('18', 'fae', 1, 600, 108, '2018-11-16 10:55:15'),
('98', 'fae', 1, 350, 109, '2018-11-16 10:55:33'),
('189', 'fae', 1, 399, 110, '2018-11-16 10:56:25'),
('6', 'fae', 1, 450, 111, '2018-11-17 22:44:16'),
('6', 'fae', 2, 450, 112, '2018-11-17 22:44:34'),
('29', 'fae', 1, 60, 113, '2018-11-17 22:45:02'),
('100', 'fae', 1, 550, 114, '2018-11-17 22:45:20'),
('211', 'fae', 1, 450, 115, '2018-11-17 22:46:03'),
('16', 'fae', 1, 600, 116, '2018-11-17 22:47:31'),
('56', 'fae', 1, 200, 117, '2018-11-17 22:47:45'),
('96', 'fae', 1, 499, 118, '2018-11-17 22:48:20'),
('88', 'fae', 2, 80, 119, '2018-11-17 22:48:31'),
('46', 'fae', 1, 120, 120, '2018-11-17 22:48:58'),
('98', 'fae', 1, 350, 121, '2018-11-17 22:49:15'),
('68', 'fae', 1, 200, 122, '2018-11-18 14:49:41'),
('93', 'fae', 1, 350, 123, '2018-11-18 14:49:56'),
('54', 'fae', 1, 200, 124, '2018-11-18 14:50:17'),
('221', 'fae', 1, 399, 125, '2018-11-18 14:50:35'),
('83', 'fae', 1, 80, 126, '2018-11-18 14:50:50'),
('42', 'fae', 1, 60, 127, '2018-11-18 14:51:06'),
('21', 'fae', 1, 150, 128, '2018-11-18 14:51:23'),
('20', 'fae', 1, 600, 129, '2018-11-18 14:51:38'),
('7', 'fae', 1, 450, 130, '2018-11-18 14:52:00'),
('156', 'fae', 1, 380, 131, '2018-11-18 14:52:23'),
('212', 'fae', 1, 450, 132, '2018-11-18 14:52:43'),
('167', 'fae', 1, 380, 133, '2018-11-18 14:52:57'),
('49', 'fae', 1, 200, 134, '2018-11-18 14:53:21'),
('28', 'fae', 1, 60, 135, '2018-11-18 14:53:57'),
('6', 'fae', 1, 0, 136, '2018-11-19 11:26:27'),
('2', 'fae', 1, 450, 137, '2018-11-20 14:47:20'),
('7', 'fae', 1, 450, 138, '2018-11-20 14:47:31'),
('19', 'fae', 1, 600, 139, '2018-11-20 14:47:44'),
('31', 'fae', 1, 60, 140, '2018-11-20 14:47:59'),
('79', 'fae', 1, 80, 141, '2018-11-20 14:48:06'),
('81', 'fae', 1, 80, 142, '2018-11-20 14:48:16'),
('69', 'fae', 1, 200, 143, '2018-11-20 14:48:23'),
('62', 'fae', 1, 200, 144, '2018-11-20 14:48:38'),
('48', 'fae', 1, 200, 145, '2018-11-20 14:49:00'),
('32', 'fae', 1, 60, 146, '2018-11-20 14:49:06'),
('22', 'fae', 1, 150, 147, '2018-11-20 14:49:28'),
('4', 'fae', 2, 450, 148, '2018-11-20 14:50:33'),
('55', 'fae', 2, 200, 149, '2018-11-21 12:53:50'),
('104', 'bal', 1, 450, 150, '2018-11-21 12:54:56'),
('118', 'bal', 1, 350, 151, '2018-11-21 12:55:18'),
('130', 'fae', 1, 750, 152, '2018-11-21 12:55:45'),
('111', 'bal', 1, 399, 153, '2018-11-21 12:55:59'),
('130', 'bal', 1, 750, 154, '2018-11-21 12:56:54'),
('137', 'bal', 1, 550, 155, '2018-11-21 12:57:05'),
('68', 'bal', 1, 200, 156, '2018-11-21 15:39:33'),
('1', 'fae', 1, 450, 157, '2018-11-22 20:34:35'),
('6', 'fae', 2, 450, 158, '2018-11-22 20:49:10'),
('87', 'bal', 2, 80, 159, '2018-11-22 20:49:54'),
('80', 'fae', 1, 80, 160, '2018-11-24 13:47:24'),
('81', 'fae', 1, 80, 161, '2018-11-24 13:47:38'),
('82', 'bal', 1, 80, 162, '2018-11-24 13:48:23'),
('111', 'bae', 1, 399, 163, '2018-11-24 13:49:09'),
('65', 'fal', 1, 200, 164, '2018-11-26 12:32:35'),
('121', 'fae', 1, 399, 165, '2018-11-26 21:14:05'),
('123', 'fae', 1, 380, 166, '2018-11-26 21:14:24'),
('127', 'fae', 1, 399, 167, '2018-11-26 21:14:58'),
('228', 'bal', 1, 550, 168, '2018-11-26 21:17:26'),
('221', 'fae', 1, 399, 169, '2018-11-26 21:17:39');

-- --------------------------------------------------------

--
-- Stand-in structure for view `tbl_sales_view`
-- (See below for the actual view)
--
CREATE TABLE `tbl_sales_view` (
`Barcode` int(11)
,`Category` varchar(50)
,`Brand` varchar(50)
,`Type` varchar(50)
,`Unit` varchar(50)
,`Stock` int(11)
,`Price` int(50)
,`Product` varchar(50)
,`Code` varchar(20)
,`Quantity` int(20)
,`unit_price` double
,`tbl_sales_ID` int(11)
,`order_date` datetime
);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `username`, `password`) VALUES
(15, 'admin', 'admin', 'd41d8cd98f00b204e9800998ecf8427e'),
(16, 'Antonette Pineda', 'tonettepineda', '827ccb0eea8a706c4c34a16891f84e7b'),
(17, 'Kim Lyzza Esteban', 'kimamaaaa', '5f44fb90403c257ff18cddd657317c2f'),
(18, 'Shina Marie Pabellano', 'shinamarie', 'd41d8cd98f00b204e9800998ecf8427e'),
(20, 'IPROTEXZONE', 'ipro', '6654ba53fb0ded99145a639be3f19ef9');

-- --------------------------------------------------------

--
-- Structure for view `tbl_sales_view`
--
DROP TABLE IF EXISTS `tbl_sales_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tbl_sales_view`  AS  select `a`.`Barcode` AS `Barcode`,`a`.`Category` AS `Category`,`a`.`Brand` AS `Brand`,`a`.`Type` AS `Type`,`a`.`Unit` AS `Unit`,`a`.`Stock` AS `Stock`,`a`.`Price` AS `Price`,`b`.`Product` AS `Product`,`b`.`Code` AS `Code`,`b`.`Quantity` AS `Quantity`,`b`.`unit_price` AS `unit_price`,`b`.`tbl_sales_ID` AS `tbl_sales_ID`,`b`.`order_date` AS `order_date` from (`tbl_inventory` `a` join `tbl_sales` `b`) where (`a`.`Barcode` = `b`.`Product`) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `tbl_inventory`
--
ALTER TABLE `tbl_inventory`
  ADD PRIMARY KEY (`Barcode`);

--
-- Indexes for table `tbl_sales`
--
ALTER TABLE `tbl_sales`
  ADD PRIMARY KEY (`tbl_sales_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `tbl_inventory`
--
ALTER TABLE `tbl_inventory`
  MODIFY `Barcode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=229;
--
-- AUTO_INCREMENT for table `tbl_sales`
--
ALTER TABLE `tbl_sales`
  MODIFY `tbl_sales_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `contacts_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
