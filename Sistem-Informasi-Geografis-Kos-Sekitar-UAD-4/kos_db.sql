-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2024 at 03:15 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kos_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `kost`
--

CREATE TABLE `kost` (
  `id` int(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `nama_pemilik` varchar(50) NOT NULL,
  `telepon` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `jumlah_kamar` varchar(50) NOT NULL,
  `fasilitas` varchar(500) NOT NULL,
  `keterangan` varchar(500) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `bayar` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `status` enum('pending','terupload') DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kost`
--

INSERT INTO `kost` (`id`, `nama`, `alamat`, `nama_pemilik`, `telepon`, `email`, `harga`, `jumlah_kamar`, `fasilitas`, `keterangan`, `latitude`, `bayar`, `foto`, `longitude`, `jenis`, `status`) VALUES
(13, 'Toko Dan Kos Mbak Ika', 'Tamanan, Banguntapan, Bantul Regency, Special Region of Yogyakarta', 'Ika', '0', 'xxxxxxxxxx@gmail.com', '800000', '0', '0', '0', '-7.836245095494292', 'thumbnail.jpeg', 'thumbnail.jpeg', '110.38465574372172', 'Putri', 'terupload'),
(14, 'Kos putri rezam dua', '597M+8P7, Tamanan, Banguntapan, Bantul Regency, Special Region of Yogyakarta 55191', 'Rezam', '087881070901', 'xxxxxxxxxx@gmail.com', '750000', '0', '0', '0', '-7.836245095494292', 'IMG_20200609_105206.jpg', 'IMG_20200609_105206.jpg', ' 110.38420513261305', 'Putri', 'terupload'),
(15, 'Kos Pak Ratman Jiratmi', 'Jln. Kalimo Sodo Tamanan Kulon RT 02 TAMANAN. (kos pak ratman), Kec. Banguntapan Kab. Bantul Prov. D.I Yogyakarta Kodepos, Tamanan, Kec. Banguntapan, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55198', 'Ratman', '0', 'xxxxxxxxxx@gmail.com', '600000', '0', '0', '0', '-7.835357711527278', 'thumbnail_(1).jpeg', 'thumbnail_(1).jpeg', '110.38463200418437', 'Putra', 'terupload'),
(16, 'Kos Mas Bayu', '597M+M6P, Tamanan, Banguntapan, Bantul Regency, Special Region of Yogyakarta 55191', 'Bayu', '0', 'xxxxxxxxxx@gmail.com', '0', '0', '0', '0', '-7.83510560583519', 'thumbnail_(2).jpeg', 'thumbnail_(2).jpeg', '110.3832005458492', 'Putri / Putra', 'terupload'),
(17, 'Kos Mas Slamet', '597J+7Q3, Tamanan, Banguntapan, Bantul Regency, Special Region of Yogyakarta 55191', 'Slamet', '0895391381959', 'xxxxxxxxxx@gmail.com', '0', '0', '0', '0', '-7.835861922453492', '2021-06-10.jpg', '2021-06-10.jpg', '110.38211899955152', 'Putra', 'terupload'),
(18, 'Kos Putra Atmaja 3', 'Rejokusuman No.RT 04, Sokowaten, Tamanan, Kec. Banguntapan, Kabupaten Bantul, Daerah Istimewa Yogyakarta', 'Atmaja', '087839745270', 'xxxxxxxxxx@gmail.com', '0', '0', '0', '0', '-7.835463889146257', '2024-03-30.jpg', '2024-03-30.jpg', '110.38010518120426', 'Putra', 'terupload'),
(19, 'Kos Putri Draupadi', '597H+GXP, Gg. Patin, Sokowaten, Tamanan, Kec. Banguntapan, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55191', 'Draupadi', '000000', 'xxxxxxxxxx@gmail.com', '900000', '0', '0', '0', '-7.83521962134204', '2019-08-03.jpg', '2019-08-03.jpg', '110.38000817034522', 'Putri', 'terupload'),
(20, 'Kos Kemutug', '597J+WMV, Kragilan, Tamanan, Banguntapan, Bantul Regency, Special Region of Yogyakarta 55191', 'Kemutug', '085753164396', 'xxxxxxxxxx@gmail.com', '1000000', '0', '0', '0', '-7.834701652739216', '2024-03-20.jpg', '2024-03-20.jpg', '110.38169719935819', 'Putra', 'terupload'),
(21, 'Kos Pemuda 69', '599P+R9P, Tamanan, Banguntapan, Bantul Regency, Special Region of Yogyakarta 55163', '0', '0', 'xxxxxxxxxx@gmail.com', '780000', '0', '0', '0', '-7.829895930982083', 'thumbnail_(3).jpeg', 'thumbnail_(3).jpeg', '110.38590935566768', 'Putra', 'terupload'),
(23, 'Kos Putri Nia', '59CM+368, Kragilan, Tamanan, Banguntapan, Bantul Regency, Special Region of Yogyakarta 55191', 'Nia', '085975342499', 'xxxxxxxxxx@gmail.com', '950000', '0', '0', '0', '-7.829501313548732', 'thumbnail_(4).jpeg', 'thumbnail_(4).jpeg', '110.38308438567657', 'Putri', 'terupload'),
(24, 'Kos Putri Enbe 1', 'Jl. Singoranu Jl. Potronanggan No.Rt 05, Kragilan, Tamanan, Kec. Banguntapan, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55191', 'Enbe', '0', 'xxxxxxxxxx@gmail.com', '80000', '0', '0', '0', '-7.830907210310904', 'thumbnail_(5).jpeg', 'thumbnail_(5).jpeg', '110.3820595935354', 'Putri', 'terupload'),
(25, 'Kos Putri - Pak Hadi Rima', 'Banguntapan, Kragilan, Tamanan, Kec. Banguntapan, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55191', 'Hadi Rima', '0', 'xxxxxxxxxx@gmail.com', '950000', '0', '0', '0', '-7.830084419880504', '2022-04-11.jpg', '2022-04-11.jpg', '110.38048624971272', 'Putri', 'terupload'),
(26, 'Kos Rama Jaya', 'Rejokusuman RT 04, Sokowaten, Tamanan, Kec. Banguntapan, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55191', 'Rama', '0', 'xxxxxxxxxx@gmail.com', '780000', '0', '0', '0', '-7.834305976226015', 'IMG-20220831-WA0003.jpg', 'IMG-20220831-WA0003.jpg', '110.37917764573459', 'Putra', 'terupload'),
(27, 'Kos Trisno', 'Sokowaten, Tamanan, Kec. Banguntapan, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55191', 'Trisno', '083840001321', 'xxxxxxxxxx@gmail.com', '80000', '0', '0', '0', '-7.8331613901355155', 'tresno.jpg', 'tresno.jpg', '110.37708572923134', 'Putra', 'pending'),
(28, 'Kos Putra Hartana', 'Gg. Paus No.26, Sokowaten, Tamanan, Kec. Banguntapan, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55191', 'Hartana', '081228856633', 'xxxxxxxxxx@gmail.com', '90001', '0', '0', '0', '-7.837752974725662', 'thumbnail_(6).jpeg', 'thumbnail_(6).jpeg', '110.37899546202077', 'Putra', 'terupload'),
(29, 'Kos Putra Mas Wildan', '596H+HRP, Sokowaten, Tamanan, Kec. Banguntapan, Kabupaten Bantul, Daerah Istimewa Yogyakarta', 'Wildan', '0', 'xxxxxxxxxx@gmail.com', '9999999999', '0', '0', '0', '-7.83809309008168', 'thumbnail_(7).jpeg', 'thumbnail_(7).jpeg', '110.37968210751276', 'Putra', 'pending'),
(30, 'Kos & kontrakan (putra) Dafri', 'Tamanan Wetan, Jalan Tamanan, RT.3, Kec. Banguntapan, Yogyakarta, Daerah Istimewa Yogyakarta 55198', 'Dafri', '081393950596', 'xxxxxxxxxx@gmail.com', '95000', '0', '0', '0', '-7.834160489236745', '2022-10-05.jpg', '2022-10-05.jpg', '110.38652710495235', 'Putra', 'terupload'),
(31, 'Kos Putri Tiga Dara uad 4', '598M+5FG, Tamanan, Kec. Banguntapan, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55191', 'Dara', '085105638883', 'xxxxxxxxxx@gmail.com', '0', '0', '0', '0', '-7.834330548409398', '2021-10-23.jpg', '2021-10-23.jpg', '110.38356594620438', 'Putri', 'pending'),
(32, 'Kos Muslim Pria', 'Gg. Arwana I No.576, Sorosutan, Kec. Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55162', '0', '085641619506', 'xxxxxxxxxx@gmail.com', '98698698', '0', '0', '0', '-7.828063791967959', 'IMG20190106095620.jpg', 'IMG20190106095620.jpg', '110.38534297697417', 'Putra', 'terupload'),
(33, 'Kos Putri GRIYA MAHKOTA', 'Jl. Singoranu No.87, Kragilan, Tamanan, Kec. Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55191', '0', '081390809139', 'xxxxxxxxxx@gmail.com', '87874878', '0', '0', '0', '-7.828682352194907', '2023-03-27.jpg', '2023-03-27.jpg', '110.38465615994402', 'Putri', 'pending'),
(34, 'Kos Putri \" ASTUTI \"', 'Jl. Patih Singoranu No.97, Kragilan, Tamanan, Kec. Banguntapan, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55191', 'Astuti', '085701023384', 'xxxxxxxxxx@gmail.com', '0', '0', '0', '0', '-7.8285586401903995', 'thumbnail_(9).jpeg', 'thumbnail_(9).jpeg', '110.38325130686309', 'Putri', 'terupload'),
(35, 'Kos Makayasa', 'Kragilan, Tamanan, Kec. Banguntapan, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55191', '0', '089665006001', 'xxxxxxxxxx@gmail.com', '0', '0', '0', '0', '-7.829115343774892', '2020-06-28.jpg', '2020-06-28.jpg', '110.38090988516936', 'Putri / Putra', 'pending'),
(36, 'Kos Pak Susanto', 'Kragilan, Tamanan, Kec. Banguntapan, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55191', 'Susanto', '0', 'xxxxxxxxxx@gmail.com', '0', '0', '0', '0', '-7.831280295088308', 'thumbnail_(10).jpeg', 'thumbnail_(10).jpeg', '110.38140938846402', 'Putri / Putra', 'pending'),
(37, 'Kos Putri AVISENA', '599J+JQV, Kragilan, Tamanan, Kec. Banguntapan, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55191', 'Avisena', '085293001112', 'xxxxxxxxxx@gmail.com', '0', '0', '0', '0', '-7.830166892960755', '2019-09-01.jpg', '2019-09-01.jpg', '110.3819401107146', 'Putri', 'terupload'),
(38, 'Kos Putri Afista', 'Jl. Ki Ageng Pemanahan No.8, Kragilan, Tamanan, Kec. Banguntapan, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55191', 'Afista', '089630992966', 'xxxxxxxxxx@gmail.com', '90001', '0', '0', '0', '-7.834311208024441', '2022-01-15.jpg', '2022-01-15.jpg', '110.38134695055217', 'Putri', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'rizka', 'rizka123'),
(2, 'brilian', 'brilian123');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `visit_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `ip_address`, `visit_date`) VALUES
(1, '::1', '2024-06-12'),
(2, '::1', '2024-06-12'),
(3, '::1', '2024-06-12'),
(4, '::1', '2024-06-12'),
(5, '::1', '2024-06-12'),
(6, '::1', '2024-06-12'),
(7, '::1', '2024-06-12'),
(8, '::1', '2024-06-12'),
(9, '::1', '2024-06-12'),
(10, '::1', '2024-06-12'),
(11, '::1', '2024-06-12'),
(12, '::1', '2024-06-12'),
(13, '::1', '2024-06-12'),
(14, '::1', '2024-06-12'),
(15, '::1', '2024-06-12'),
(16, '::1', '2024-06-12'),
(17, '::1', '2024-06-12'),
(18, '::1', '2024-06-12'),
(19, '::1', '2024-06-12'),
(20, '::1', '2024-06-12'),
(21, '::1', '2024-06-12'),
(22, '::1', '2024-06-12'),
(23, '::1', '2024-06-12'),
(24, '::1', '2024-06-12'),
(25, '::1', '2024-06-12'),
(26, '::1', '2024-06-12'),
(27, '::1', '2024-06-12'),
(28, '::1', '2024-06-12'),
(29, '::1', '2024-06-12'),
(30, '::1', '2024-06-12'),
(31, '::1', '2024-06-12'),
(32, '::1', '2024-06-12'),
(33, '::1', '2024-06-12'),
(34, '::1', '2024-06-12'),
(35, '::1', '2024-06-12'),
(36, '::1', '2024-06-12'),
(37, '::1', '2024-06-12'),
(38, '::1', '2024-06-12'),
(39, '::1', '2024-06-12'),
(40, '::1', '2024-06-12'),
(41, '::1', '2024-06-12'),
(42, '::1', '2024-06-12'),
(43, '::1', '2024-06-12'),
(44, '::1', '2024-06-12'),
(45, '::1', '2024-06-12'),
(46, '::1', '2024-06-12'),
(47, '::1', '2024-06-12'),
(48, '::1', '2024-06-12'),
(49, '::1', '2024-06-12'),
(50, '::1', '2024-06-12'),
(51, '::1', '2024-06-13'),
(52, '::1', '2024-06-13'),
(53, '::1', '2024-06-13'),
(54, '::1', '2024-06-13'),
(55, '::1', '2024-06-13'),
(56, '::1', '2024-06-13'),
(57, '::1', '2024-06-13'),
(58, '::1', '2024-06-13'),
(59, '::1', '2024-06-13'),
(60, '::1', '2024-06-13'),
(61, '::1', '2024-06-13'),
(62, '::1', '2024-06-13'),
(63, '::1', '2024-06-13'),
(64, '::1', '2024-06-13'),
(65, '::1', '2024-06-13'),
(66, '::1', '2024-06-13'),
(67, '::1', '2024-06-13'),
(68, '::1', '2024-06-13'),
(69, '::1', '2024-06-13'),
(70, '::1', '2024-06-13'),
(71, '::1', '2024-06-13'),
(72, '::1', '2024-06-13'),
(73, '::1', '2024-06-13'),
(74, '::1', '2024-06-13'),
(75, '::1', '2024-06-13'),
(76, '::1', '2024-06-13'),
(77, '::1', '2024-06-13'),
(78, '::1', '2024-06-13'),
(79, '::1', '2024-06-13'),
(80, '::1', '2024-06-13'),
(81, '::1', '2024-06-13'),
(82, '::1', '2024-06-13'),
(83, '::1', '2024-06-13'),
(84, '::1', '2024-06-13'),
(85, '::1', '2024-06-13'),
(86, '::1', '2024-06-13'),
(87, '::1', '2024-06-13'),
(88, '::1', '2024-06-13'),
(89, '::1', '2024-06-13'),
(90, '::1', '2024-06-13'),
(91, '::1', '2024-06-13'),
(92, '::1', '2024-06-13'),
(93, '::1', '2024-06-13'),
(94, '::1', '2024-06-13'),
(95, '::1', '2024-06-13'),
(96, '::1', '2024-06-13'),
(97, '::1', '2024-06-13'),
(98, '::1', '2024-06-13'),
(99, '::1', '2024-06-14'),
(100, '::1', '2024-06-14'),
(101, '::1', '2024-06-14'),
(102, '::1', '2024-06-14'),
(103, '::1', '2024-06-14'),
(104, '::1', '2024-06-14'),
(105, '::1', '2024-06-20'),
(106, '::1', '2024-06-20'),
(107, '::1', '2024-06-20'),
(108, '::1', '2024-06-20'),
(109, '::1', '2024-06-20'),
(110, '::1', '2024-06-20'),
(111, '::1', '2024-06-20'),
(112, '::1', '2024-06-20'),
(113, '::1', '2024-06-20'),
(114, '::1', '2024-06-20'),
(115, '::1', '2024-06-20'),
(116, '::1', '2024-06-20'),
(117, '::1', '2024-06-20'),
(118, '::1', '2024-06-20'),
(119, '::1', '2024-06-20'),
(120, '::1', '2024-06-20'),
(121, '::1', '2024-06-20'),
(122, '::1', '2024-06-20'),
(123, '::1', '2024-06-20'),
(124, '::1', '2024-06-20'),
(125, '::1', '2024-06-20'),
(126, '::1', '2024-06-20'),
(127, '::1', '2024-06-20'),
(128, '::1', '2024-06-20'),
(129, '::1', '2024-06-20'),
(130, '::1', '2024-06-20'),
(131, '::1', '2024-06-20'),
(132, '::1', '2024-06-20'),
(133, '::1', '2024-06-20'),
(134, '::1', '2024-06-20'),
(135, '::1', '2024-06-20'),
(136, '::1', '2024-06-20'),
(137, '::1', '2024-06-20'),
(138, '::1', '2024-06-20'),
(139, '::1', '2024-06-20'),
(140, '::1', '2024-06-20'),
(141, '::1', '2024-06-20'),
(142, '::1', '2024-06-20'),
(143, '::1', '2024-06-20'),
(144, '::1', '2024-06-20'),
(145, '::1', '2024-06-20'),
(146, '::1', '2024-06-20'),
(147, '::1', '2024-06-20'),
(148, '::1', '2024-06-20'),
(149, '::1', '2024-06-20'),
(150, '::1', '2024-06-20'),
(151, '::1', '2024-06-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kost`
--
ALTER TABLE `kost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kost`
--
ALTER TABLE `kost`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
