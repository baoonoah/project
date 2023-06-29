-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2023 at 06:35 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlbh_dt`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin_status` int(11) NOT NULL,
  `create_datetime` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `admin_status`, `create_datetime`) VALUES
(5, 'admin', '0192023a7bbd73250516f069df18b500', 0, '2023-01-08'),
(6, 'giabao', '202cb962ac59075b964b07152d234b70', 0, '2023-01-08'),
(7, '123', '202cb962ac59075b964b07152d234b70', 0, '2023-01-08');

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(255) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id_danhmuc`, `tendanhmuc`, `thutu`) VALUES
(1, 'Iphone', 1),
(2, 'Samsung', 2),
(3, 'Oppo', 3),
(4, 'Xiaomi', 4);

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `id_hoadon` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `mahd` varchar(255) NOT NULL,
  `tenkh` varchar(255) NOT NULL,
  `gioitinh` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sdt` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `soluongmua` int(11) NOT NULL,
  `tongtien` int(11) NOT NULL,
  `ngaydathang` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`id_hoadon`, `id_sanpham`, `mahd`, `tenkh`, `gioitinh`, `email`, `sdt`, `diachi`, `soluongmua`, `tongtien`, `ngaydathang`) VALUES
(34, 15, '6995', 'Gia Bao', 'Anh', 'baog0093@gmail.com', '0948405402', 'cần thơ', 1, 12500000, '2023-01-11');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `create_datetime` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `masp` varchar(255) NOT NULL,
  `tensp` varchar(255) NOT NULL,
  `soluongton` int(11) NOT NULL,
  `giasp` int(11) NOT NULL,
  `hinhanh` varchar(255) NOT NULL,
  `noidung` text NOT NULL,
  `id_danhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id_sanpham`, `masp`, `tensp`, `soluongton`, `giasp`, `hinhanh`, `noidung`, `id_danhmuc`) VALUES
(3, '1002', 'Apple iPhone 14 - 128GB - Chính hãng VN/A', 100, 30000000, '1673013364_iphone14.png', 'fgfg', 1),
(5, '1003', 'Samsung Galaxy S22 Plus - 8GB/128GB - Chính hãng', 100, 18000000, '1673016085_samsung1.png', 'ghhhhh', 2),
(6, '1007', 'Apple iPhone 13 - 256GB - Chính hãng VN/A ', 100, 20990000, '1673020056_image-removebg-preview-4.png', 'hhhhhh', 1),
(8, '10078', 'iPhone 8 Plus - 128GB - Chính hãng (VN/A)', 2, 7990000, '1673020201_iPhone-8-Plus.png', 'cho free', 1),
(9, '10079', 'Apple iPhone 14 Pro Max - 256GB - Chính hãng VN/A', 100, 33990000, '1673020377_1111-2.png', 'HHHHHHHH', 1),
(10, '10000', 'Apple iPhone 11 - 128GB - Chính hãng VN/A', 13, 12500000, '1673020494_iphone11.png', 'GHHHH', 1),
(11, '122', 'Xiaomi 12 Pro - Chính hãng', 100, 20590000, '1673020954_xiaomiii.png', 'hh', 4),
(12, '1003', 'Xiaomi 12 - Chính hãng', 100, 14390000, '1673021102_hhhhh.png', 'fbfb', 4),
(13, '24435', 'OPPO Reno6 5G - Chính Hãng', 100, 8900000, '1673021250_oppo.png', 'ggg', 3),
(14, '228hd', 'OPPO Reno7 5G - Chính Hãng', 100, 9650000, '1673023817_reno7-4.png', 'hgfh', 3),
(15, '1001', 'Apple iPhone 11 - 128GB - Chính hãng VN/A', 100, 12500000, '1673024059_iphone11.png', '', 1),
(17, '12d32', 'Samsung Galaxy S22 Ultra - 8GB/128GB - Chính hãng', 100, 21500000, '1673155041_image-removebg-preview-19.png', 'dfsdfsdf', 2),
(18, '12d32', 'Samsung Galaxy S22 Ultra - 8GB/128GB - Chính hãng', 100, 21500000, '1673155121_image-removebg-preview-19.png', 'dfsdfsdf', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id_hoadon`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sanpham`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id_hoadon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
