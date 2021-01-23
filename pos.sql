-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2020 at 07:22 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`, `date`) VALUES
(1, 'ELECTROMECHANICAL EQUIPMENT', '2020-12-01 10:12:00'),
(2, 'DRILLS', '2020-12-01 10:12:00'),
(3, 'SCAFFOLDING', '2020-12-01 10:12:00'),
(4, 'POWER GENERATORS', '2020-12-01 10:12:00'),
(5, 'CONSTRUCTION EQUIPMENT', '2020-12-01 10:12:00');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `document` int(11) NOT NULL,
  `email` text NOT NULL,
  `phone` int(11) NOT NULL,
  `address` text NOT NULL,
  `birth_date` date NOT NULL,
  `purchases` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `document`, `email`, `phone`, `address`, `birth_date`, `purchases`, `date`) VALUES
(1, 'tamim', 812564, 'j@gmail.com', 1627587987, 'Khulna', '1994-09-13', 0, '2020-12-17 05:34:20'),
(3, 'Poran', 4574, 'a@gmail.com', 1546556, 'Nikunjo 2, Dhaka', '0000-00-00', 0, '2020-12-17 06:07:03');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `code` text NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `stock` int(11) NOT NULL,
  `buying_price` float NOT NULL,
  `selling_price` float NOT NULL,
  `sales` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `id_category`, `code`, `description`, `image`, `stock`, `buying_price`, `selling_price`, `sales`, `date`) VALUES
(1, 1, '101', 'Industrial vacuum cleaner', 'dist/img/products/aspirador-industrial.png', 20, 1500, 2100, 0, '2020-12-01 16:12:46'),
(2, 1, '102', 'Float Plate for Palletizer', 'dist/img/products/aspirador-industrial.png', 20, 4500, 6300, 0, '2020-12-01 16:12:50'),
(3, 1, '103', 'Air Compressor for painting', 'dist/img/products/aspirador-industrial.png', 20, 3000, 4200, 0, '2020-12-01 16:12:52'),
(4, 1, '104', 'Adobe Cutter without Disk', 'dist/img/products/aspirador-industrial.png', 20, 4000, 5600, 0, '2020-12-01 16:12:55'),
(5, 1, '105', 'Floor Cutter without Disk', 'dist/img/products/aspirador-industrial.png', 20, 1540, 2156, 0, '2020-12-01 16:12:57'),
(6, 1, '106', 'Diamond Tip Disk', 'dist/img/products/aspirador-industrial.png', 20, 1100, 1540, 0, '2020-12-01 16:12:58'),
(7, 1, '107', 'Air extractor', 'dist/img/products/aspirador-industrial.png', 20, 1540, 2156, 0, '2020-12-01 16:13:03'),
(8, 1, '108', 'Mower', 'dist/img/products/aspirador-industrial.png', 20, 1540, 2156, 0, '2020-12-01 16:13:01'),
(9, 1, '109', 'Electric Water Washer', 'dist/img/products/aspirador-industrial.png', 20, 2600, 3640, 0, '2020-12-01 16:13:08'),
(10, 1, '110', 'Petrol pressure washer', 'dist/img/products/aspirador-industrial.png', 20, 2210, 3094, 0, '2020-12-01 16:13:11'),
(11, 1, '111', 'Gasoline motor pump', 'dist/img/products/aspirador-industrial.png', 20, 2860, 4004, 0, '2020-12-01 16:18:14'),
(12, 1, '112', 'Electric motor pump', 'dist/img/products/compresor de aire.jpg', 20, 2400, 3360, 0, '2020-12-01 16:16:54'),
(13, 1, '113', 'Circular saw', 'dist/img/products/compresor de aire.jpg', 20, 1100, 1540, 0, '2020-12-01 16:16:53'),
(14, 1, '114', 'Tungsten disc for circular saw', 'dist/img/products/compresor de aire.jpg', 20, 4500, 6300, 0, '2020-12-01 16:16:50'),
(15, 1, '115', 'Electric welder', 'dist/img/products/compresor de aire.jpg', 20, 1980, 2772, 0, '2020-12-01 16:16:45'),
(16, 1, '116', 'Welders face', 'dist/img/products/compresor de aire.jpg', 20, 4200, 5880, 0, '2020-12-01 16:16:48'),
(17, 1, '117', 'Illumination tower', 'dist/img/products/compresor de aire.jpg', 20, 1800, 2520, 0, '2020-12-01 16:16:40'),
(18, 2, '201', 'Floor Demolishing Hammer 110V', 'dist/img/products/compresor de aire.jpg', 20, 5600, 7840, 0, '2020-12-01 16:16:37'),
(19, 2, '202', 'Muela or chisel hammer demolishing floor', 'dist/img/products/compresor de aire.jpg', 20, 9600, 13440, 0, '2020-12-01 16:16:34'),
(20, 2, '203', 'Wall Wrecking Drill 110V', 'dist/img/products/compresor de aire.jpg', 20, 3850, 5390, 0, '2020-12-01 16:16:33'),
(21, 2, '204', 'Muela or chisel hammer demolition wall', 'dist/img/products/compresor de aire.jpg', 20, 9600, 13440, 0, '2020-12-01 16:16:30'),
(22, 2, '205', '1/2 Hammer Drill Wood and Metal', 'dist/img/products/cortadora de disco.jpg', 20, 8000, 11200, 0, '2020-12-01 16:16:26'),
(23, 2, '206', 'Drill Percussion SDS Plus 110V', 'dist/img/products/cortadora de disco.jpg', 20, 3900, 5460, 0, '2020-12-01 16:16:02'),
(24, 2, '207', 'Drill Percussion SDS Max 110V (Mining)', 'dist/img/products/cortadora de disco.jpg', 20, 4600, 6440, 0, '2020-12-01 16:15:57'),
(25, 3, '301', 'Hanging scaffolding', '', 20, 1440, 2016, 0, '2020-12-01 06:38:07'),
(26, 3, '302', 'Scaffolding hanging spacer', 'dist/img/products/cortadora de disco.jpg', 20, 1600, 2240, 0, '2020-12-01 16:15:50'),
(27, 3, '303', 'Modular scaffolding frame', 'dist/img/products/cortadora de disco.jpg', 20, 900, 1260, 0, '2020-12-01 16:15:45'),
(28, 3, '304', 'Frame scaffolding scissors', 'dist/img/products/cortadora de disco.jpg', 20, 100, 140, 0, '2020-12-01 16:15:38'),
(29, 3, '305', 'Scaffolding scissors', '', 20, 162, 226, 0, '2020-12-01 06:38:07'),
(30, 3, '306', 'Internal ladder for scaffolding', '', 20, 270, 378, 0, '2020-12-01 06:38:07'),
(31, 3, '307', 'Security handrails', '', 20, 75, 105, 0, '2020-12-01 06:38:07'),
(32, 3, '308', 'Rotating wheel for scaffolding', '', 20, 168, 235, 0, '2020-12-01 06:38:07'),
(33, 3, '309', 'safety harness', '', 20, 1750, 2450, 0, '2020-12-01 06:38:07'),
(34, 3, '310', 'Sling for harness', '', 20, 175, 245, 0, '2020-12-01 06:38:07'),
(35, 3, '311', 'Metallic Platform', '', 20, 420, 588, 0, '2020-12-01 06:38:07'),
(36, 4, '401', '6 Kva Diesel Power Plant', '', 20, 3500, 4900, 0, '2020-12-01 06:38:07'),
(37, 4, '402', '10 Kva Diesel Power Plant', '', 20, 3550, 4970, 0, '2020-12-01 06:38:07'),
(38, 4, '403', '20 Kva Diesel Power Plant', '', 20, 3600, 5040, 0, '2020-12-01 06:38:07'),
(39, 4, '404', '30 Kva Diesel Power Plant', '', 20, 3650, 5110, 0, '2020-12-01 06:38:07'),
(40, 4, '405', '60 Kva Diesel Power Plant', '', 20, 3700, 5180, 0, '2020-12-01 06:38:07'),
(41, 4, '406', '75 Kva Diesel Power Plant', '', 20, 3750, 5250, 0, '2020-12-01 06:38:07'),
(42, 4, '407', '100 Kva Diesel Power Plant', '', 20, 3800, 5320, 0, '2020-12-01 06:38:07'),
(43, 4, '408', '120 Kva Diesel Power Plant', '', 20, 3850, 5390, 0, '2020-12-01 06:38:07'),
(44, 5, '501', 'Aluminum Scissor Ladder', '', 20, 350, 490, 0, '2020-12-01 06:38:07'),
(45, 5, '502', 'Electric extension', '', 20, 370, 518, 0, '2020-12-01 06:38:07'),
(46, 5, '503', 'Tensioner cat', '', 20, 380, 532, 0, '2020-12-01 06:38:07'),
(47, 5, '504', 'Lamina Covers Gap', '', 20, 380, 532, 0, '2020-12-01 06:38:07'),
(48, 5, '505', 'Pipe wrench', '', 20, 480, 672, 0, '2020-12-01 06:38:07'),
(49, 5, '506', 'Manila by Metro', '', 20, 600, 840, 0, '2020-12-01 06:38:07'),
(50, 5, '507', '2-channel pulley', '', 20, 900, 1260, 0, '2020-12-01 06:38:07'),
(51, 5, '508', 'Tensor', '', 20, 100, 140, 0, '2020-12-01 06:38:07'),
(52, 5, '509', 'Weighing machine', '', 20, 130, 182, 0, '2020-12-01 06:38:07'),
(53, 5, '510', 'Hydrostatic pump', '', 20, 770, 1078, 0, '2020-12-01 06:38:07'),
(54, 5, '511', 'Chapeta', '', 20, 660, 924, 0, '2020-12-01 06:38:07'),
(55, 5, '512', 'Concrete sample cylinder', '', 20, 400, 560, 0, '2020-12-01 06:38:07'),
(56, 5, '513', 'Lever Shear', '', 20, 450, 630, 0, '2020-12-01 06:38:07'),
(57, 5, '514', 'Scissor Shear', '', 20, 580, 812, 0, '2020-12-01 06:38:07'),
(58, 5, '515', 'Pneumatic tire car', '', 20, 420, 588, 0, '2020-12-01 06:38:07'),
(59, 5, '516', 'Cone slump', '', 20, 140, 196, 0, '2020-12-01 06:38:07'),
(60, 5, '517', 'Baldosin cutter', '', 20, 930, 1302, 0, '2020-12-01 06:38:07'),
(64, 5, '$879', 'new ', 'dist/img/products/879/483.jpg', 20, 169.33, 220.33, 0, '2020-12-12 16:36:34'),
(66, 0, '98', 'new', 'dist/img/products/98/937.jpg', 32, 323, 512615, 0, '2020-12-13 10:16:33'),
(68, 4, '2', 'new', 'dist/img/products/2/627.jpg', 25, 215, 6565, 0, '2020-12-13 09:55:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `user` text NOT NULL,
  `password` text NOT NULL,
  `profile` text NOT NULL,
  `picture` text NOT NULL,
  `status` int(11) NOT NULL,
  `last_login` datetime NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `user`, `password`, `profile`, `picture`, `status`, `last_login`, `date`) VALUES
(38, 'admin', 'admin', '$2y$10$gykYGy8nAHOmWbDqIRya8./BYynsU/.E3FtAsZc9ZlqBczs4PLHxu', 'Adminastrator', '', 1, '0000-00-00 00:00:00', '2020-12-17 05:06:39'),
(39, 'tamanna m', 'tamanna', '$2y$10$hBUVi3a6x4CWlCHumBNJzeyHAdvIJ76NR4I7mdVOWYODrWYwrY5hm', 'Adminastrator', 'dist/img/users/tamanna/677.jpg', 1, '0000-00-00 00:00:00', '2020-11-30 06:53:48'),
(43, 'najmul', 'najmul', '$2y$10$JWONzgvfILY93SCju0nPQ.eMHjPrAwpqyLbCK3oKAZLRwLGsoxnPK', 'Adminastrator', 'dist/img/users/najmul/644.png', 1, '0000-00-00 00:00:00', '2020-12-01 07:15:28'),
(60, 'asif', 'asif', '$2y$10$P3.qT.icZS/Hi.uUZHm4bOjrfYxKUgSDXUso4BHdVEQIC7qmNzvyK', 'Adminastrator', 'dist/img/users/asif/686.png', 1, '0000-00-00 00:00:00', '2020-12-13 06:33:48'),
(61, 'zamil', 'zamil', '$2y$10$sPdpmWd5yg5Ktm3i96OM2ueiNGXJvang13HV69segPxLIAkVIpYmi', 'Adminastrator', 'dist/img/users/zamil/367.png', 1, '0000-00-00 00:00:00', '2020-12-14 06:04:34'),
(62, 'tasnim', 'tasnim', '$2y$10$HM07mHTDFpsdOFZ.rEVuAeG22/gCi3IFc.f7vt0v/3EnXd6uQruN6', '', 'dist/img/users/tasnim/997.png', 0, '0000-00-00 00:00:00', '2020-12-13 06:33:42'),
(64, 'ejaz', 'ejaz', '$2y$10$uzGfE.gZ0ZmQtoInz7WmdeDsJPROGUlRXT5pz/XYgGJZmHzr3MFpO', 'Seller', 'dist/img/users/ejaz/242.png', 1, '0000-00-00 00:00:00', '2020-12-03 09:33:10'),
(66, 'jalal', 'jalal', '$2y$10$LV6G6LftIMf.zcTKiEICPuNWO339phSD20GkkL6CwvQu55/P8zHI6', 'Adminastrator', 'dist/img/users/jalal/899.png', 1, '0000-00-00 00:00:00', '2020-12-12 15:26:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
