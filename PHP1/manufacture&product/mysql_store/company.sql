-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2024 at 11:03 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `company`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `add_manufacture` (IN `fname` VARCHAR(100), IN `maddress` VARCHAR(100), IN `cnumber` VARCHAR(12))   BEGIN 
INSERT INTO 
manufacture(name,address,contact_no)VALUES(fname,maddress,cnumber);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `add_product` (IN `pname` VARCHAR(100), IN `pprice` DOUBLE(10,2), IN `mid` INT(5))   BEGIN 
INSERT INTO
product(name,price,manufacture_id)VALUES(pname,pprice,mid);

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `manufacture`
--

CREATE TABLE `manufacture` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `address` varchar(20) DEFAULT NULL,
  `contact_no` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manufacture`
--

INSERT INTO `manufacture` (`id`, `name`, `address`, `contact_no`) VALUES
(14, 'tuhin', 'khil', '0125'),
(15, 'apple', '', ''),
(16, 'Samsung', 'korea', '01xxx'),
(17, 'Samsung', 'korea', '01xxx'),
(18, 'Samsung', 'korea', '01xxx'),
(19, 'Samsung', 'korea', '01xxx'),
(20, 'walton', 'bangladesh', '012xx'),
(21, 'walton', 'bangladesh', '012xx'),
(25, 'Butterfly', 'bangladesh', '01xxx'),
(26, 'apple', 'bangladesh', '0125');

--
-- Triggers `manufacture`
--
DELIMITER $$
CREATE TRIGGER `del_triger` AFTER DELETE ON `manufacture` FOR EACH ROW BEGIN 
DELETE FROM product WHERE manufacture_id = old.id;

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `manufacture_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `manufacture_id`) VALUES
(20, 'Hitachi', 11000, 14);

-- --------------------------------------------------------

--
-- Stand-in structure for view `select_product`
-- (See below for the actual view)
--
CREATE TABLE `select_product` (
`id` int(11)
,`name` varchar(20)
,`price` int(11)
,`manufacture_id` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_product`
-- (See below for the actual view)
--
CREATE TABLE `view_product` (
`id` int(11)
,`name` varchar(20)
,`price` int(11)
,`mname` varchar(20)
,`address` varchar(20)
,`contact_no` varchar(100)
);

-- --------------------------------------------------------

--
-- Structure for view `select_product`
--
DROP TABLE IF EXISTS `select_product`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `select_product`  AS SELECT `product`.`id` AS `id`, `product`.`name` AS `name`, `product`.`price` AS `price`, `product`.`manufacture_id` AS `manufacture_id` FROM `product` WHERE `product`.`price` > 5000 ORDER BY `product`.`name` ASC ;

-- --------------------------------------------------------

--
-- Structure for view `view_product`
--
DROP TABLE IF EXISTS `view_product`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_product`  AS SELECT `product`.`id` AS `id`, `product`.`name` AS `name`, `product`.`price` AS `price`, `manufacture`.`name` AS `mname`, `manufacture`.`address` AS `address`, `manufacture`.`contact_no` AS `contact_no` FROM (`product` join `manufacture`) WHERE `manufacture`.`id` = `product`.`manufacture_id` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manufacture`
--
ALTER TABLE `manufacture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manufacture`
--
ALTER TABLE `manufacture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
