-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2022 at 12:42 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stphonedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `hoadmin` varchar(20) CHARACTER SET utf8 NOT NULL,
  `tenadmin` varchar(20) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tendangnhap` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkhau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `hoadmin`, `tenadmin`, `email`, `tendangnhap`, `matkhau`) VALUES
(1, 'Đinh Quốc', 'Sách', 'sach.207ct47914@vanlanguni.vn', 'dinhquocsach', 'c4ca4238a0b923820dcc509a6f75849b'),
(2, 'Phạm Ngọc', 'Thanh', 'thanh.207ct40630@vanlanguni.vn', 'phamngocthanh', 'c4ca4238a0b923820dcc509a6f75849b');

-- --------------------------------------------------------

--
-- Table structure for table `chitietsanpham`
--

CREATE TABLE `chitietsanpham` (
  `masanpham` int(11) NOT NULL,
  `mausac` int(11) NOT NULL,
  `bonho` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `id` int(11) NOT NULL,
  `tennguoidung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hovaten` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioitinh` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaysinh` date DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sodienthoai` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diachi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`id`, `tennguoidung`, `hovaten`, `gioitinh`, `ngaysinh`, `password`, `email`, `sodienthoai`, `diachi`) VALUES
(1, 'user1', 'Nguyễn Văn A', 'Nam', '2002-12-01', 'c4ca4238a0b923820dcc509a6f75849b', 'anguyenvan@gmail.com', '0123456789', 'Phường 26, Bình Thạnh, Thành phố Hồ Chí Minh'),
(2, 'user2', 'Nguyễn Văn B', 'Nam', '2002-12-01', 'c4ca4238a0b923820dcc509a6f75849b', 'bnguyenvan@gmail.com', '0123456789', 'Phường 26, Bình Thạnh, Thành phố Hồ Chí Minh'),
(3, 'user3', 'Nguyễn Văn C', 'Nam', '2002-01-01', 'c4ca4238a0b923820dcc509a6f75849b', 'cnguyenvan@gmail.com', NULL, 'Phường 26, Bình Thạnh, Thành phố Hồ Chí Minh'),
(13, 'sach', 'Đinh Quốc Sách', 'Nam', '2002-11-21', '202cb962ac59075b964b07152d234b70', 'sach@1234gmail.com', NULL, 'Phường 13, Quận Bình Thạnh, Thành phố Hồ Chí Minh');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `masanpham` int(11) NOT NULL,
  `tensanpham` varchar(100) CHARACTER SET utf8 NOT NULL,
  `hangsanpham` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` int(20) NOT NULL,
  `mota` varchar(255) CHARACTER SET utf8 NOT NULL,
  `imgURL` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`masanpham`, `tensanpham`, `hangsanpham`, `gia`, `mota`, `imgURL`) VALUES
(8, 'Macbook Air', 'apple', 30000000, 'Laptop Apple MacBook Air M1 2020 16GB/256GB/7-core GPU (Z12A0004Z)', 'macbook-air.jpg'),
(9, 'iPhone 14 Pro Max', 'Apple', 49990000, '', 'iphone-14-pro-max-1TB.jpg'),
(10, 'iPhone 14 Pro Max', 'Apple', 49990000, '', 'iphone-14-pro-max-1TB.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sanphamgiamgia`
--

CREATE TABLE `sanphamgiamgia` (
  `masanpham` int(11) NOT NULL,
  `tensanpham` varchar(100) CHARACTER SET utf8 NOT NULL,
  `hangsanpham` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` int(20) NOT NULL,
  `phantramgiam` int(2) NOT NULL,
  `mota` varchar(255) CHARACTER SET utf8 NOT NULL,
  `imgURL` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sanphamgiamgia`
--

INSERT INTO `sanphamgiamgia` (`masanpham`, `tensanpham`, `hangsanpham`, `gia`, `phantramgiam`, `mota`, `imgURL`) VALUES
(1, 'iPhone 14 Pro Max', 'Apple', 33590000, 1, 'Apple iPhone 14 Pro Max new', 'iphone-14-pro-max-tong-quan-1020x570.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sanphammoi`
--

CREATE TABLE `sanphammoi` (
  `masanpham` int(11) NOT NULL,
  `tensanpham` varchar(100) CHARACTER SET utf8 NOT NULL,
  `hangsanpham` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` int(20) NOT NULL,
  `mota` varchar(255) CHARACTER SET utf8 NOT NULL,
  `imgURL` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sanphammoi`
--

INSERT INTO `sanphammoi` (`masanpham`, `tensanpham`, `hangsanpham`, `gia`, `mota`, `imgURL`) VALUES
(1, 'Asus Gaming ROG Flow Z13', 'Asus', 1600000, 'Asus Gaming ROG Flow Z13 new', 'lenovo-gaming-legion-5-15ith6-i7-82jk00fnvn-180322-100552-600x600.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sanphamsapphathanh`
--

CREATE TABLE `sanphamsapphathanh` (
  `masanpham` int(11) NOT NULL,
  `tensanpham` varchar(100) CHARACTER SET utf8 NOT NULL,
  `hangsanpham` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` int(20) NOT NULL,
  `mota` varchar(255) CHARACTER SET utf8 NOT NULL,
  `imgURL` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sanphamsapphathanh`
--

INSERT INTO `sanphamsapphathanh` (`masanpham`, `tensanpham`, `hangsanpham`, `gia`, `mota`, `imgURL`) VALUES
(1, 'Asus Gaming ROG Flow Z13', 'Asus', 1600000, 'Asus Gaming ROG Flow Z13 new', 'lenovo-gaming-legion-5-15ith6-i7-82jk00fnvn-180322-100552-600x600.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chitietsanpham`
--
ALTER TABLE `chitietsanpham`
  ADD KEY `masanpham` (`masanpham`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`masanpham`);

--
-- Indexes for table `sanphamgiamgia`
--
ALTER TABLE `sanphamgiamgia`
  ADD PRIMARY KEY (`masanpham`);

--
-- Indexes for table `sanphammoi`
--
ALTER TABLE `sanphammoi`
  ADD PRIMARY KEY (`masanpham`);

--
-- Indexes for table `sanphamsapphathanh`
--
ALTER TABLE `sanphamsapphathanh`
  ADD PRIMARY KEY (`masanpham`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `masanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietsanpham`
--
ALTER TABLE `chitietsanpham`
  ADD CONSTRAINT `masanpham` FOREIGN KEY (`masanpham`) REFERENCES `sanpham` (`masanpham`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
