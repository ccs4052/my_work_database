-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2016 at 08:48 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `im`
--

-- --------------------------------------------------------

--
-- Table structure for table `authorization`
--

CREATE TABLE `authorization` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tell` int(255) NOT NULL,
  `role` tinyint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `authorization`
--

INSERT INTO `authorization` (`id`, `name`, `pass`, `email`, `tell`, `role`) VALUES
(76, 'sdfsdfsdf', 'dssdfdsf', 'adssf@sdfsd.com', 34324234, 1),
(77, 'dfsfsdfdsf', 'dsfsdfsdfdsf', 'sdfdsfd@dsfd.com', 342342343, 1),
(78, 'sdfsfsdf', 'sdfdsfdsf', '23123123@assd.com', 2147483647, 1),
(79, 'sdfdsf', 'sfsdfsdf', 'sfdsfsdfdf', 234234324, 1),
(82, 'sdfdsf', 'sfsdfsdf', 'sfdsfsdfdf', 234234324, 1),
(84, 'sdfdsf', 'sfsdfsdf', 'sfdsfsdfdf', 234234324, 1),
(85, 'sdfdsf', 'sfsdfsdf', 'sfdsfsdfdf', 234234324, 1),
(86, 'sdfdsf', 'sfsdfsdf', 'sfdsfsdfdf', 234234324, 1),
(87, 'sdfdsf', 'sfsdfsdf', 'sfdsfsdfdf', 234234324, 1),
(88, 'sdfdsf', 'sfsdfsdf', 'sfdsfsdfdf', 234234324, 1),
(89, 'sdfdsf', 'sfsdfsdf', 'sfdsfsdfdf', 234234324, 1),
(90, 'sdfdsf', 'sfsdfsdf', 'sfdsfsdfdf', 234234324, 1),
(91, 'sdfdsf', 'sfsdfsdf', 'sfdsfsdfdf', 234234324, 1),
(92, 'sdfdsf', 'sfsdfsdf', 'sfdsfsdfdf', 234234324, 1),
(93, 'sdfdsf', 'sfsdfsdf', 'sfdsfsdfdf', 234234324, 1),
(94, 'sdfdsf', 'sfsdfsdf', 'sfdsfsdfdf', 234234324, 1),
(95, 'sdfdsf', 'sfsdfsdf', 'sfdsfsdfdf', 234234324, 1),
(96, 'sdfdsf', 'sfsdfsdf', 'sfdsfsdfdf', 234234324, 1),
(97, 'sdfdsf', 'sfsdfsdf', 'sfdsfsdfdf', 234234324, 1),
(98, 'sdfdsf', 'sfsdfsdf', 'sfdsfsdfdf', 234234324, 1),
(99, 'sdfdsf', 'sfsdfsdf', 'sfdsfsdfdf', 234234324, 1),
(100, 'sdfdsf', 'sfsdfsdf', 'sfdsfsdfdf', 234234324, 1),
(101, 'sdfdsf', 'sfsdfsdf', 'sfdsfsdfdf', 234234324, 1),
(102, 'sdfdsf', 'sfsdfsdf', 'sfdsfsdfdf', 234234324, 1),
(103, 'sdfdsf', 'sfsdfsdf', 'sfdsfsdfdf', 234234324, 1),
(104, 'sdfdsf', 'sfsdfsdf', 'sfdsfsdfdf', 234234324, 1),
(105, 'sdfdsf', 'sfsdfsdf', 'sfdsfsdfdf', 234234324, 1),
(106, 'sdfdsf', 'sfsdfsdf', 'sfdsfsdfdf', 234234324, 1),
(107, 'sdfdsf', 'sfsdfsdf', 'sfdsfsdfdf', 234234324, 1),
(108, 'sdfdsf', 'sfsdfsdf', 'sfdsfsdfdf', 234234324, 1),
(109, 'sdfdsf', 'sfsdfsdf', 'sfdsfsdfdf', 234234324, 1),
(110, 'sdfdsf', 'sfsdfsdf', 'sfdsfsdfdf', 234234324, 1),
(111, 'sdfdsf', 'sfsdfsdf', 'sfdsfsdfdf', 234234324, 1),
(112, 'sdfdsf', 'sfsdfsdf', 'sfdsfsdfdf', 234234324, 1),
(113, 'sdfdsf', 'sfsdfsdf', 'sfdsfsdfdf', 234234324, 1),
(114, 'sdfdsf', 'sfsdfsdf', 'sfdsfsdfdf', 234234324, 1),
(115, 'sdfdsf', 'sfsdfsdf', 'sfdsfsdfdf', 234234324, 1),
(116, 'sdfdsf', 'sfsdfsdf', 'sfdsfsdfdf', 234234324, 1),
(117, 'sdfdsf', 'sfsdfsdf', 'sfdsfsdfdf', 234234324, 1),
(118, 'sdfdsf', 'sfsdfsdf', 'sfdsfsdfdf', 234234324, 1),
(119, 'sdfdsf', 'sfsdfsdf', 'sfdsfsdfdf', 234234324, 1),
(120, 'sdfdsf', 'sfsdfsdf', 'sfdsfsdfdf', 234234324, 1),
(121, 'sdfdsf', 'sfsdfsdf', 'sfdsfsdfdf', 234234324, 1),
(122, 'sdfdsf', 'sfsdfsdf', 'sfdsfsdfdf', 234234324, 1),
(123, 'sdfdsf', 'sfsdfsdf', 'sfdsfsdfdf', 234234324, 1),
(124, 'sdfdsf', 'sfsdfsdf', 'sfdsfsdfdf', 234234324, 1),
(125, 'sdfdsf', 'sfsdfsdf', 'sfdsfsdfdf', 234234324, 1),
(126, 'sdfdsf', 'sfsdfsdf', 'sfdsfsdfdf', 234234324, 1),
(127, 'sdfdsf', 'sfsdfsdf', 'sfdsfsdfdf', 234234324, 1),
(128, 'sdfdsf', 'sfsdfsdf', 'sfdsfsdfdf', 234234324, 1),
(129, 'sdfdsf', 'sfsdfsdf', 'sfdsfsdfdf', 234234324, 1),
(130, 'sdfdsf', 'sfsdfsdf', 'sfdsfsdfdf', 234234324, 1),
(131, 'sdfdsf', 'sfsdfsdf', 'sfdsfsdfdf', 234234324, 1),
(132, 'sdfdsf', 'sfsdfsdf', 'sfdsfsdfdf', 234234324, 1),
(133, 'sdfdsf', 'sfsdfsdf', 'sfdsfsdfdf', 234234324, 1),
(134, 'sdfdsf', 'sfsdfsdf', 'sfdsfsdfdf', 234234324, 1),
(135, 'sdfdsf', 'sfsdfsdf', 'sfdsfsdfdf', 234234324, 1),
(136, 'sdfdsf', 'sfsdfsdf', 'sfdsfsdfdf', 234234324, 1),
(137, 'sdfdsf', 'sfsdfsdf', 'sfdsfsdfdf', 234234324, 1),
(138, 'sdfdsf', 'sfsdfsdf', 'sfdsfsdfdf', 234234324, 1),
(139, 'sdfdsf', 'sfsdfsdf', 'sfdsfsdfdf', 234234324, 1),
(140, 'sdfdsf', 'sfsdfsdf', 'sfdsfsdfdf', 234234324, 1),
(141, 'sdfdsf', 'sfsdfsdf', 'sfdsfsdfdf', 234234324, 1),
(142, 'sdfdsf', 'sfsdfsdf', 'sfdsfsdfdf', 234234324, 1),
(143, 'bogdan', 'b0baee9d279d34fa1dfd71aadb908c3f', 'bogdan@rambler.ru', 11111, 4),
(144, 'fdsdfsd', 'sdfsdfsdf', 'dsadsad@dfsdf.com', 2147483647, 1),
(145, '&lt;?php echo ''ok''; ?&gt;', '4234324', '42324@.com', 2147483647, 1),
(146, 'fsdfsdfsdf', 'sdfdsfdsfsdfsdfdsf', 'adfsdf@sdf.com', 324234234, 1),
(147, 'dsdfsdf', 'sdfsdf', 'asdsd@sdf.com', 3243243, 1);

-- --------------------------------------------------------

--
-- Table structure for table `im_news`
--

CREATE TABLE `im_news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `edite_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `im_news`
--

INSERT INTO `im_news` (`id`, `title`, `description`, `keywords`, `date`, `edite_date`) VALUES
(2, 'ddsfdsfdsfs', 'dsfdsfsdfsdfsdf', 'dsfsdfsdfsdfds', '2003-03-16', '2003-03-16'),
(3, 'dsfsdfsdf', 'ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'sfsdf,sdfdsfsdf,sdfdsfsdf', '2016-03-03', NULL),
(4, 'dsfsdfsdf', 'ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'sfsdf,sdfdsfsdf,sdfdsfsdf', '2016-03-03', NULL),
(5, 'dsfsdfsdf', 'ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'sfsdf,sdfdsfsdf,sdfdsfsdf', '2016-03-03', NULL),
(6, 'dsfsdfsdf', 'ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'sfsdf,sdfdsfsdf,sdfdsfsdf', '2016-03-03', NULL),
(7, 'dsfsdfsdf', 'ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'sfsdf,sdfdsfsdf,sdfdsfsdf', '2016-03-03', NULL),
(8, 'dsfsdfsdf', 'ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'sfsdf,sdfdsfsdf,sdfdsfsdf', '2016-03-03', NULL),
(9, 'dsfsdfsdf', 'ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'sfsdf,sdfdsfsdf,sdfdsfsdf', '2016-03-03', NULL),
(10, 'dsfsdfsdf', 'ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'sfsdf,sdfdsfsdf,sdfdsfsdf', '2016-03-03', NULL),
(11, 'dsfsdfsdf', 'ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'sfsdf,sdfdsfsdf,sdfdsfsdf', '2016-03-03', NULL),
(12, 'dsfsdfsdf', 'ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'sfsdf,sdfdsfsdf,sdfdsfsdf', '2016-03-03', NULL),
(13, 'dsfsdfsdf', 'ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'sfsdf,sdfdsfsdf,sdfdsfsdf', '2016-03-03', NULL),
(14, 'dsfsdfsdf', 'ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'sfsdf,sdfdsfsdf,sdfdsfsdf', '2016-03-03', NULL),
(15, 'dsfsdfsdf', 'ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'sfsdf,sdfdsfsdf,sdfdsfsdf', '2016-03-03', NULL),
(16, 'dsfsdfsdf', 'ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'sfsdf,sdfdsfsdf,sdfdsfsdf', '2016-03-03', NULL),
(17, 'dsfsdfsdf', 'ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'sfsdf,sdfdsfsdf,sdfdsfsdf', '2016-03-03', NULL),
(18, 'dsfsdfsdf', 'ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'sfsdf,sdfdsfsdf,sdfdsfsdf', '2016-03-03', NULL),
(19, 'dsfsdfsdf', 'ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'sfsdf,sdfdsfsdf,sdfdsfsdf', '2016-03-03', NULL),
(20, 'dsfsdfsdf', 'ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'sfsdf,sdfdsfsdf,sdfdsfsdf', '2016-03-03', NULL),
(21, 'dsfsdfsdf', 'ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'sfsdf,sdfdsfsdf,sdfdsfsdf', '2016-03-03', NULL),
(22, 'dsfsdfsdf', 'ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'sfsdf,sdfdsfsdf,sdfdsfsdf', '2016-03-03', NULL),
(23, 'dsfsdfsdf', 'ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'sfsdf,sdfdsfsdf,sdfdsfsdf', '2016-03-03', NULL),
(24, 'dsfsdfsdf', 'ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'sfsdf,sdfdsfsdf,sdfdsfsdf', '2016-03-03', NULL),
(25, 'dsfsdfsdf', 'ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'sfsdf,sdfdsfsdf,sdfdsfsdf', '2016-03-03', NULL),
(27, 'dsfsdfsdf', 'ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'sfsdf,sdfdsfsdf,sdfdsfsdf', '2016-03-03', NULL),
(28, 'dsfsdfsdf', 'ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'sfsdf,sdfdsfsdf,sdfdsfsdf', '2016-03-03', NULL),
(29, 'etretrt', 'new description', 'ddd', '2003-03-16', NULL),
(31, 'fgdfgfdgfdgdfgdfgfdg', '1', '111111', '2003-03-16', '2016-03-03'),
(33, 'ddddd', 'ddddd', 'ddddd', '2003-03-16', NULL),
(34, 'sdfdsdssdf', '111', 'sdfsdfdsfsdf', '2003-03-16', '2016-03-03'),
(35, '111', '2222222222222222222', '2222', '2016-03-03', '2016-03-09'),
(37, 'dgfdfgd', 'fdgfdgdfgd', '11111', '2016-03-03', '2016-03-03'),
(38, '1111111', '111111', '3333333333', '2016-03-03', '2016-03-03'),
(39, 'rrrr', 'rrrr', 'rrrrrr,rrrr,rrrrrr', '2016-03-03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(255) NOT NULL,
  `customer` varchar(255) NOT NULL,
  `order_status` varchar(50) NOT NULL DEFAULT 'not paid',
  `comment` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `id_authorization` int(11) NOT NULL,
  `date_add` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modify` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer`, `order_status`, `comment`, `user_agent`, `id_authorization`, `date_add`, `date_modify`) VALUES
(1, 'www.com', 'not paid', 'dsfdsf', 'sdfd', 147, '2003-05-15 21:00:00', '0000-00-00'),
(2, 'sdfdsf', 'not paid', 'sdfsdfsdfsdff', '45trhm6785g', 147, '2013-04-15 21:00:00', '0000-00-00'),
(3, 'dfdsf', 'not paid', 'hgfhgfhfg fdgdfgd fgfdg', '234fg5464rfey34543tre', 140, '2016-03-11 11:07:09', NULL),
(4, 'fgfdg', 'not paid', 'ffdg fdgdfg fdgfdg', '234rg5645yeyh', 130, '2016-03-11 12:35:29', NULL),
(5, 'sdsdfgfgfhfgh', 'not paid', '435435dgdfgdfg', '435gdfg354345', 100, '2016-03-11 12:39:13', NULL),
(7, 'jkljkjlk', 'not paid', 'ljklkjl', 'kljklu8i', 90, '2016-03-11 12:48:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `order_product_id` int(255) NOT NULL,
  `id_orders` int(255) NOT NULL,
  `id_goods` int(255) NOT NULL,
  `quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_product`
--

INSERT INTO `order_product` (`order_product_id`, `id_orders`, `id_goods`, `quantity`) VALUES
(1, 1, 1, 10),
(2, 1, 2, 4),
(3, 2, 1, 5),
(4, 3, 4, 10),
(5, 4, 2, 3),
(6, 4, 4, 30),
(7, 5, 4, 60),
(9, 7, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `stock_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `category_id` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`stock_id`, `name`, `photo`, `category_id`, `quantity`, `price`) VALUES
(1, 'Bike-sport', 'urltothephoto', 5, 50, 250.5),
(2, 'car', 'urltothephoto', 10, 50, 14000.6),
(3, 'wheels', 'sdsdfsdfdsf', 30, 100, 120.5),
(4, 'Spoke', 'dsdfsdf', 80, 60, 10.5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authorization`
--
ALTER TABLE `authorization`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `im_news`
--
ALTER TABLE `im_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`order_product_id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`stock_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authorization`
--
ALTER TABLE `authorization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;
--
-- AUTO_INCREMENT for table `im_news`
--
ALTER TABLE `im_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `order_product`
--
ALTER TABLE `order_product`
  MODIFY `order_product_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `stock_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
