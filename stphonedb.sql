-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 24, 2022 lúc 09:09 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+07:00";
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;
/*!40101 SET NAMES utf8mb4 */
;
--
-- Cơ sở dữ liệu: `stphonedb`
--
-- --------------------------------------------------------
-- Cấu trúc bảng cho bảng `admin`
--
CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `hoadmin` nvarchar(20) NOT NULL,
  `tenadmin` nvarchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tendangnhap` varchar(20) NOT NULL,
  `matkhau` varchar(20) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
--
-- Nhập dữ liệu cho bảng admin
INSERT INTO `admin` (
    `id`,
    `hoadmin`,
    `tenadmin`,
    `email`,
    `tendangnhap`,
    `matkhau`
  )
VALUES (
    1,
    'Đinh Quốc',
    'Sách',
    'sach.207ct47914@vanlanguni.vn',
    'dinhquocsach',
    'sach2002'
  ),
  (
    2,
    'Phạm Ngọc',
    'Thanh',
    'thanh.207ct40630@vanlanguni.vn',
    'phamngocthanh',
    'thanh2002'
  );
-- --------------------------------------------------------
--
-- Cấu trúc bảng cho bảng `nguoidung`
--
CREATE TABLE `nguoidung` (
  `id` int(11) NOT NULL,
  `tennguoidung` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
--
-- Nhập dữ liệu cho bảng nguoidung
-- Mật khẩu là 1
INSERT INTO `nguoidung` (`id`, `tennguoidung`, `password`, `email`)
VALUES (
    1,
    'user1',
    'c4ca4238a0b923820dcc509a6f75849b',
    'user1@gmail.com'
  ),
  (
    2,
    'user2',
    'c4ca4238a0b923820dcc509a6f75849b',
    'user2@gmail.com'
  ),
  (
    3,
    'user3',
    'c4ca4238a0b923820dcc509a6f75849b',
    'user3@gmail.com'
  ),
  (
    4,
    'user4',
    'c4ca4238a0b923820dcc509a6f75849b',
    'user4@gmail.com'
  ),
  (
    5,
    'user5',
    'c4ca4238a0b923820dcc509a6f75849b',
    'user5@gmail.com'
  );
-- --------------------------------------------------------
--
-- Cấu trúc bảng cho bảng `sanpham`
--
CREATE TABLE `sanpham` (
  `masanpham` int(11) NOT NULL,
  `tensanpham` nvarchar(100) NOT NULL,
  `hangsanpham` varchar(20) NOT NULL,
  `gia` int(20) NOT NULL,
  `mota` nvarchar(255) NOT NULL,
  `imgURL` varchar(255) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
--
-- Nhập dữ liệu cho bảng sanpham
INSERT INTO `sanpham` (
    `masanpham`,
    `tensanpham`,
    `hangsanpham`,
    `gia`,
    `mota`,
    `imgURL`
  )
VALUES (
    1,
    'Asus Gaming ROG Flow Z13',
    'Asus',
    1600000,
    'Asus Gaming ROG Flow Z13 new',
    'lenovo-gaming-legion-5-15ith6-i7-82jk00fnvn-180322-100552-600x600.jpg'
  );
-- --------------------------------------------------------
--
-- Cấu trúc bảng cho bảng `sanphammoi`
--
CREATE TABLE `sanphammoi` (
  `masanpham` int(11) NOT NULL,
  `tensanpham` nvarchar(100) NOT NULL,
  `hangsanpham` varchar(20) NOT NULL,
  `gia` int(20) NOT NULL,
  `mota` nvarchar(255) NOT NULL,
  `imgURL` varchar(255) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
--
-- Nhập dữ liệu cho bảng sanphammoi
INSERT INTO `sanphammoi` (
    `masanpham`,
    `tensanpham`,
    `hangsanpham`,
    `gia`,
    `mota`,
    `imgURL`
  )
VALUES (
    1,
    'Asus Gaming ROG Flow Z13',
    'Asus',
    1600000,
    'Asus Gaming ROG Flow Z13 new',
    'lenovo-gaming-legion-5-15ith6-i7-82jk00fnvn-180322-100552-600x600.jpg'
  );
-- --------------------------------------------------------
--
-- Cấu trúc bảng cho bảng `sanphamgiamgia`
--
CREATE TABLE `sanphamgiamgia` (
  `masanpham` int(11) NOT NULL,
  `tensanpham` nvarchar(100) NOT NULL,
  `hangsanpham` varchar(20) NOT NULL,
  `gia` int(20) NOT NULL,
  `phantramgiam` int(2) NOT NULL,
  `mota` nvarchar(255) NOT NULL,
  `imgURL` varchar(255) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
--
-- Nhập dữ liệu cho bảng sanphamgiamgia
INSERT INTO `sanphamgiamgia` (
    `masanpham`,
    `tensanpham`,
    `hangsanpham`,
    `gia`,
    `phantramgiam`,
    `mota`,
    `imgURL`
  )
VALUES (
    1,
    'iPhone 14 Pro Max',
    'Apple',
    33590000,
    20,
    'Apple iPhone 14 Pro Max new',
    'iphone-14-pro-max-tong-quan-1020x570.jpg'
  );
-- --------------------------------------------------------
--
-- Cấu trúc bảng cho bảng `sanphamsapphathanh`
--
CREATE TABLE `sanphamsapphathanh` (
  `masanpham` int(11) NOT NULL,
  `tensanpham` nvarchar(100) NOT NULL,
  `hangsanpham` varchar(20) NOT NULL,
  `gia` int(20) NOT NULL,
  `mota` nvarchar(255) NOT NULL,
  `imgURL` varchar(255) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
--
-- Nhập dữ liệu cho bảng sanphamsapphathanh
INSERT INTO `sanphamsapphathanh` (
    `masanpham`,
    `tensanpham`,
    `hangsanpham`,
    `gia`,
    `mota`,
    `imgURL`
  )
VALUES (
    1,
    'Asus Gaming ROG Flow Z13',
    'Asus',
    1600000,
    'Asus Gaming ROG Flow Z13 new',
    'lenovo-gaming-legion-5-15ith6-i7-82jk00fnvn-180322-100552-600x600.jpg'
  );
-- --------------------------------------------------------
--
-- Cấu trúc bảng cho bảng `nguoidung`
--
-- CREATE TABLE `tblchitietdonhang` (
-- `mactdh` int(11) NOT NULL,
-- `madh` int(11) NOT NULL,
-- `tenhang` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
-- `gia` float NOT NULL,
-- `soluong` int(11) NOT NULL
-- ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
--
-- Dumping data for table `tblchitietdonhang`
--
-- INSERT INTO
-- `tblchitietdonhang` (`mactdh`, `madh`, `tenhang`, `gia`, `soluong`)
-- VALUES (1, 1, 'Sản phẩm A', 5000000, 3),
--   (2, 1, 'Sản phẩm E', 800000, 2),
--   (3, 2, 'Sản phẩm A', 5000000, 5),
--   (4, 2, 'Sản phẩm B', 2600000, 1),
--   (5, 2, 'Sản phẩm D', 1200000, 3);
-- --------------------------------------------------------
--
-- Table structure for table `tbldonhang`
--
-- CREATE TABLE `tbldonhang` (
-- `madh` int(11) NOT NULL,
-- `sodienthoai` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
-- `diachigiao` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
-- `tinhtrang` int(11) NOT NULL
-- ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
--
-- Table structure for table `tblkhachhang`
--
-- CREATE TABLE `tblkhachhang` (
-- `sodienthoai` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
-- `tenkh` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
-- `diachi` text COLLATE utf8mb4_unicode_ci NOT NULL
-- );
-- --------------------------------------------------------
--
-- Table structure for table `tblsanpham`
--
-- CREATE TABLE `tblsanpham` (
-- `ma` int(11) NOT NULL,
-- `ten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
-- `gia` float NOT NULL,
-- `mota` text COLLATE utf8mb4_unicode_ci NOT NULL
-- ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
-- CREATE TABLE `tbltinhtrang` (
--   `matt` int(11) NOT NULL,
--   `tentt` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
-- ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
--
--
-- Đang đổ dữ liệu cho bảng `sanpham`
--
-- --------------------------------------------------------
--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--
--
-- Chỉ mục cho các bảng đã đổ
--
--
-- Chỉ mục cho bảng `dienthoai`
--
-- ALTER TABLE
-- `dienthoai`
-- ADD PRIMARY KEY (`id`);
--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
ADD PRIMARY KEY (`masanpham`);
--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
ADD PRIMARY KEY (`id`);
--
-- AUTO_INCREMENT cho các bảng đã đổ
--
--
-- AUTO_INCREMENT cho bảng `dienthoai`
--
-- ALTER TABLE
-- `dienthoai`
-- MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
--   AUTO_INCREMENT = 8;
--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
MODIFY `masanpham` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 7;
--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 13;
COMMIT;
-- /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
-- -- ;
-- /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
-- -- ;
-- /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
-- ;
--
-- Dumping data for table `tbldonhang`
--
-- INSERT INTO
-- `tbldonhang` (`madh`, `sodienthoai`, `diachigiao`, `tinhtrang`)
-- VALUES (
--     1,
--     '0987654321',
--     '147 Nơ Trang Long, Bình Thạnh, TP.HCM',
--     1
--   ),
--   (
--     2,
--     '0981234567',
--     '15 Kha Vạn Cân, Thủ Đức, TP.HCM',
--     2
--   );
-- --------------------------------------------------------
-- ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
--
-- Dumping data for table `tblkhachhang`
--
-- INSERT INTO
-- `tblkhachhang` (`sodienthoai`, `tenkh`, `diachi`)
-- VALUES (
--     '0981234567',
--     'Đặng Dương Khang',
--     '129, Châu Phú A, Châu Đốc, An Giang'
--   ),
--   (
--     '0987654321',
--     'Nguyễn Bình An',
--     'Sô 1, Chung cư ABC, TP.HCM'
--   );
--
-- Dumping data for table `tblsanpham`
--
-- INSERT INTO
-- `tblsanpham` (`ma`, `ten`, `gia`, `mota`)
-- VALUES (2, 'Sản phẩm A', 5000000, 'Mô tả sản phẩm A'),
--   (3, 'Sản phẩm B', 2600000, 'Mô tả sản phẩm B'),
--   (4, 'Sản phẩm C', 5350000, 'Mô tả sản phẩm C'),
--   (5, 'Sản phẩm D', 1200000, 'Mô tả Sản phẩm D'),
--   (6, 'Sản phẩm E', 800000, 'Mô tả Sản phẩm E');
-- --------------------------------------------------------
--
-- Table structure for table `tbltinhtrang`
--
-- Dumping data for table `tbltinhtrang`
--
-- INSERT INTO
-- `tbltinhtrang` (`matt`, `tentt`)
-- VALUES (1, 'Chờ duyệt'),
--   (2, 'Đã duyệt'),
--   (3, 'Đang giao'),
--   (4, 'Hoàn tất');
--
-- Indexes for dumped tables
--
--
-- Indexes for table `tblchitietdonhang`
--
-- ALTER TABLE
-- `tblchitietdonhang`
-- ADD PRIMARY KEY (`mactdh`);
--
-- Indexes for table `tbldonhang`
--
-- ALTER TABLE
-- `tbldonhang`
-- ADD PRIMARY KEY (`madh`);
--
-- Indexes for table `tblkhachhang`
--
-- ALTER TABLE
-- `tblkhachhang`
-- ADD PRIMARY KEY (`sodienthoai`);
--
-- Indexes for table `tblsanpham`
--
-- ALTER TABLE
-- `tblsanpham`
-- ADD PRIMARY KEY (`ma`);
--
-- Indexes for table `tbltinhtrang`
--
-- ALTER TABLE
-- `tbltinhtrang`
-- ADD PRIMARY KEY (`matt`);
--
-- AUTO_INCREMENT for dumped tables
--
--
-- AUTO_INCREMENT for table `tblchitietdonhang`
--
-- ALTER TABLE
-- `tblchitietdonhang`
-- MODIFY `mactdh` int(11) NOT NULL AUTO_INCREMENT,
--   AUTO_INCREMENT = 6;
--
-- AUTO_INCREMENT for table `tbldonhang`
--
-- ALTER TABLE
-- `tbldonhang`
-- MODIFY `madh` int(11) NOT NULL AUTO_INCREMENT,
--   AUTO_INCREMENT = 3;
--
-- AUTO_INCREMENT for table `tblsanpham`
--
-- ALTER TABLE
-- `tblsanpham`
-- MODIFY `ma` int(11) NOT NULL AUTO_INCREMENT,
--   AUTO_INCREMENT = 7;
-- COMMIT;
-- /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
-- -- ;
-- /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
-- -- ;
-- /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
-- -- ;