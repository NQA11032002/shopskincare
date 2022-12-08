-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 01, 2022 lúc 12:50 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `banmypham`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `ID` int(11) NOT NULL,
  `IDKH` int(11) DEFAULT NULL,
  `IDSP` int(11) DEFAULT NULL,
  `binhLuan` text DEFAULT NULL,
  `ngayBL` text DEFAULT NULL,
  `star` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`ID`, `IDKH`, `IDSP`, `binhLuan`, `ngayBL`, `star`) VALUES
(7, 1, 1, 'zxczxc', '2022-08-17 18:05:31', 0),
(8, 1, 1, 'bi', '2022-08-17 18:05:34', 0),
(9, 1, 1, 'zxczcx', '2022-08-17 18:06:17', 3),
(10, 1, 1, 'anh', '2022-08-17 18:06:31', 3),
(12, 1, 1, 'zxczxc', '2022-08-17 18:25:41', 2),
(13, 1, 1, '12312', '2022-08-17 18:25:56', 1),
(75, 1, 9, '', '2022-08-17 18:47:38', 3),
(76, 1, 9, '', '2022-08-17 18:47:40', 4),
(77, 1, 9, 'zxcz', '2022-08-17 18:47:41', 4),
(78, 1, 9, 'zxcz', '2022-08-17 18:47:45', 2),
(79, 1, 9, 'zxcz', '2022-08-17 18:47:47', 5),
(80, 1, 9, 'zxcz', '2022-08-17 18:47:49', 1),
(81, 1, 9, 'zxcz', '2022-08-17 18:47:53', 2),
(82, 1, 9, 'zxcz', '2022-08-17 18:47:56', 3),
(83, 1, 9, 'zxcz', '2022-08-17 18:47:59', 4),
(84, 1, 9, 'zxcz', '2022-08-17 18:48:02', 5),
(85, 1, 9, 'zxcz', '2022-08-17 18:48:05', 2),
(86, 1, 9, 'zxcz', '2022-08-17 18:48:06', 2),
(87, 1, 9, 'zxcz', '2022-08-17 18:48:06', 2),
(88, 1, 9, 'zxcz', '2022-08-17 18:48:07', 2),
(89, 1, 12, '123123', '2022-08-17 18:50:37', 3),
(90, 1, 12, '123123zxczxc', '2022-08-17 18:50:40', 4),
(91, 1, 12, '12321313', '2022-08-17 18:50:42', 5),
(92, 1, 12, '12321313', '2022-08-17 18:50:47', 1),
(93, 1, 12, '12321313', '2022-08-17 18:50:51', 2),
(94, 1, 15, '12313', '2022-08-17 18:51:17', 4),
(95, 1, 15, '12313', '2022-08-17 18:51:19', 5),
(96, 1, 15, '12313', '2022-08-17 18:51:21', 2),
(97, 1, 15, '12313', '2022-08-17 18:51:23', 1),
(98, 1, 15, '12313', '2022-08-17 18:51:25', 4),
(99, 1, 15, '12313', '2022-08-17 18:51:29', 1),
(100, 1, 15, '12313', '2022-08-17 18:51:31', 5),
(101, 1, 15, '12313', '2022-08-17 18:51:34', 5),
(102, 1, 15, '12313', '2022-08-17 18:51:34', 5),
(103, 1, 15, '12313', '2022-08-17 18:51:35', 5),
(104, 1, 15, '12313', '2022-08-17 18:51:36', 5),
(105, 1, 15, '12313', '2022-08-17 18:51:37', 5),
(106, 1, 15, '12313', '2022-08-17 18:51:38', 5),
(107, 1, 15, '12313', '2022-08-17 18:51:39', 5),
(108, 1, 15, '12313', '2022-08-17 18:51:40', 5),
(109, 1, 15, '12313', '2022-08-17 18:51:41', 5),
(110, 1, 15, '12313', '2022-08-17 18:51:42', 5),
(111, 1, 15, '12313', '2022-08-17 18:51:43', 5),
(112, 1, 15, '12313', '2022-08-17 18:51:44', 5),
(113, 1, 14, '12313', '2022-08-18 03:19:27', 4),
(114, 1, 14, 'zxczxc', '2022-08-18 03:36:37', 3),
(115, 1, 14, '12313', '2022-08-18 03:36:49', 3),
(116, 1, 14, '1231', '2022-08-18 03:37:27', 2),
(117, 1, 14, '12312414', '2022-08-18 03:39:18', 2),
(118, 1, 14, '12312414', '2022-08-18 03:40:25', 4),
(119, 1, 14, '12312414', '2022-08-18 03:41:11', 2),
(120, 1, 14, '123123', '2022-08-18 03:43:35', 3),
(121, 1, 14, '1231', '2022-08-18 03:43:59', 2),
(122, 1, 14, 'zxczc', '2022-08-18 03:56:37', 3),
(123, 1, 14, '123123', '2022-08-18 04:02:46', 2),
(124, 1, 14, 'bi', '2022-08-18 04:17:20', 5),
(125, 1, 14, 'bi', '2022-08-18 04:17:24', 5),
(126, 1, 14, 'anh', '2022-08-18 04:17:31', 2),
(127, 1, 9, '124124', '2022-08-18 05:07:23', 4),
(128, 1, 9, 'zxczxc', '2022-08-18 05:10:39', 4),
(129, 1, 9, 'zxczxc', '2022-08-18 05:10:39', 4),
(130, 1, 9, 'zxczxc', '2022-08-18 05:10:40', 4),
(131, 1, 9, 'zxczxc', '2022-08-18 05:10:41', 4),
(132, 1, 9, 'ZXCZXCZXCZXC', '2022-08-18 05:17:35', 4),
(133, 1, 9, '1231313', '2022-08-18 05:17:39', 5),
(134, 1, 9, 'zxczxc', '2022-08-18 05:19:41', 4),
(162, 1, 20, 'zxczxc', '2022-08-18 05:46:40', 2),
(163, 1, 20, 'zxczxc', '2022-08-18 05:46:43', 2),
(164, 1, 20, 'zxczxc', '2022-08-18 05:46:44', 2),
(165, 1, 20, 'zxczxc', '2022-08-18 05:46:46', 2),
(166, 1, 20, 'zxczxc', '2022-08-18 05:46:48', 2),
(167, 1, 20, 'zxczxc', '2022-08-18 05:46:51', 2),
(168, 1, 20, 'zxczxc', '2022-08-18 05:46:53', 2),
(169, 1, 20, 'zxczxc', '2022-08-18 05:46:55', 2),
(170, 1, 20, 'zxczxc', '2022-08-18 05:46:55', 2),
(171, 1, 20, 'zxczxc', '2022-08-18 05:46:55', 2),
(172, 1, 20, 'zxczxc', '2022-08-18 05:46:56', 2),
(173, 1, 20, 'zxczxc', '2022-08-18 05:46:56', 2),
(174, 1, 20, 'zxczxc', '2022-08-18 05:46:56', 2),
(175, 1, 20, 'zxczxc', '2022-08-18 05:47:16', 1),
(176, 1, 20, 'zxczxc', '2022-08-18 05:47:18', 1),
(177, 1, 20, '1231', '2022-08-18 05:47:39', 5),
(178, 1, 20, 'zxczxc', '2022-08-18 05:48:19', 5),
(179, 1, 20, 'zxczxc', '2022-08-18 05:48:31', 3),
(180, 1, 20, 'zxczxc', '2022-08-18 05:48:52', 3),
(261, 33, 15, 'âôăôă', '2022-11-11 15:02:20', 3),
(262, 33, 15, 'ZXCZXC', '2022-11-11 15:02:31', 5),
(263, 34, 12, 'tot', '2022-11-12 16:58:09', 3),
(264, 37, 12, 'cxzcc', '2022-11-30 16:26:54', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brand`
--

CREATE TABLE `brand` (
  `ID` int(11) NOT NULL,
  `tenBrand` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `brand`
--

INSERT INTO `brand` (`ID`, `tenBrand`) VALUES
(1, 'Jen'),
(2, 'Beauty'),
(3, 'Top'),
(4, 'Kessy CREY'),
(5, 'Toggle'),
(6, 'Fride');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `ID` int(11) NOT NULL,
  `IDDH` int(11) DEFAULT NULL,
  `IDSP` int(11) NOT NULL,
  `soLuong` int(11) NOT NULL,
  `Size` varchar(100) NOT NULL,
  `tongTien` float NOT NULL,
  `cachThanhToan` varchar(100) DEFAULT NULL,
  `ten` varchar(100) DEFAULT NULL,
  `diaChi` varchar(200) DEFAULT NULL,
  `sdt` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `ghiChu` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`ID`, `IDDH`, `IDSP`, `soLuong`, `Size`, `tongTien`, `cachThanhToan`, `ten`, `diaChi`, `sdt`, `email`, `ghiChu`) VALUES
(247, 151, 1, 3, '150ml', 540000, 'Chuyển khoản ngân hàng', 'uquwdq', 'zxczxczxc', 'null', 'kawasakisga2@gmail.com', ''),
(248, 151, 9, 4, '32ml', 320000, 'Chuyển khoản ngân hàng', 'uquwdq', 'zxczxczxc', 'null', 'kawasakisga2@gmail.com', ''),
(249, 151, 12, 15, '32ml', 2700000, 'Chuyển khoản ngân hàng', 'uquwdq', 'zxczxczxc', 'null', 'kawasakisga2@gmail.com', ''),
(250, 151, 14, 2, '32ml', 220000, 'Chuyển khoản ngân hàng', 'uquwdq', 'zxczxczxc', 'null', 'kawasakisga2@gmail.com', ''),
(251, 151, 15, 10, '32ml', 1900000, 'Chuyển khoản ngân hàng', 'uquwdq', 'zxczxczxc', 'null', 'kawasakisga2@gmail.com', ''),
(252, 151, 20, 10, '32ml', 1800000, 'Chuyển khoản ngân hàng', 'uquwdq', 'zxczxczxc', 'null', 'kawasakisga2@gmail.com', ''),
(254, 153, 15, 2, '32ml', 304000, 'Chuyển khoản ngân hàng', 'Quốc anh', '372783xcx', 'null', 'Kawasakisga@gmail.com', ''),
(255, 154, 20, 2, '32ml', 288000, 'Chuyển khoản ngân hàng', 'Quốc anh', '372783xcx', 'null', 'Kawasakisga@gmail.com', ''),
(256, 155, 15, 2, '32ml', 304000, 'Chuyển khoản ngân hàng', 'Quốc anh', '372783xcx', 'null', 'Kawasakisga@gmail.com', ''),
(257, 156, 29, 1, '32ml', 150000, 'Chuyển khoản ngân hàng', 'Quốc anh', '372783xcx', 'null', 'Kawasakisga@gmail.com', ''),
(258, 157, 12, 44, '32ml', 6336000, 'Chuyển khoản ngân hàng', 'uquwdq', 'zxczxczxc', 'null', 'kawasakisga2@gmail.com', ''),
(259, 157, 15, 34, '32ml', 5168000, 'Chuyển khoản ngân hàng', 'uquwdq', 'zxczxczxc', 'null', 'kawasakisga2@gmail.com', ''),
(260, 157, 20, 12, '32ml', 1728000, 'Chuyển khoản ngân hàng', 'uquwdq', 'zxczxczxc', 'null', 'kawasakisga2@gmail.com', ''),
(261, 158, 15, 7, '32ml', 1170400, 'Chuyển khoản ngân hàng', 'Quốc anh', '372783xcx', 'null', 'Kawasakisga@gmail.com', ''),
(262, 158, 20, 2, '32ml', 316800, 'Chuyển khoản ngân hàng', 'Quốc anh', '372783xcx', 'null', 'Kawasakisga@gmail.com', ''),
(263, 158, 30, 3, '32ml', 202500, 'Chuyển khoản ngân hàng', 'Quốc anh', '372783xcx', 'null', 'Kawasakisga@gmail.com', ''),
(264, 159, 12, 5, '32ml', 171000, 'Chuyển khoản ngân hàng', 'uquwdq', 'zxczxczxc', 'null', 'kawasakisga2@gmail.com', ''),
(265, 159, 15, 19, '32ml', 3176800, 'Chuyển khoản ngân hàng', 'uquwdq', 'zxczxczxc', 'null', 'kawasakisga2@gmail.com', ''),
(266, 159, 20, 8, '32ml', 1267200, 'Chuyển khoản ngân hàng', 'uquwdq', 'zxczxczxc', 'null', 'kawasakisga2@gmail.com', ''),
(267, 159, 29, 1, '32ml', 132000, 'Chuyển khoản ngân hàng', 'uquwdq', 'zxczxczxc', 'null', 'kawasakisga2@gmail.com', ''),
(268, 159, 30, 5, '32ml', 67500, 'Chuyển khoản ngân hàng', 'uquwdq', 'zxczxczxc', 'null', 'kawasakisga2@gmail.com', ''),
(269, 160, 12, 6, '32ml', 1026000, 'Chuyển khoản ngân hàng', 'uquwdq', 'zxczxczxc', 'null', 'kawasakisga2@gmail.com', ''),
(273, 163, 15, 1, '32ml', 190000, 'Chuyển khoản ngân hàng', 'quoc em', 'nguyen he', 'null', 'bikunte5@gmail.com', ''),
(274, 164, 15, 4, '32ml', 760000, 'Trả tiền mặt khi nhận hàng (COD)', 'quốc em', '96/7 Nguyễn huệ', 'null', 'bikunte6@gmail.com', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `combo`
--

CREATE TABLE `combo` (
  `ID` int(11) NOT NULL,
  `tenCombo` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `combo`
--

INSERT INTO `combo` (`ID`, `tenCombo`) VALUES
(1, 'Combo nước hoa'),
(2, 'Combo dầu thơm'),
(3, 'Combo dưỡng da'),
(4, 'Combo son 1'),
(5, 'Combo nước hoa vàng'),
(6, 'Kem chống nắng'),
(7, 'Sửa rửa mặt bạc hà'),
(8, 'Tẩy da chết'),
(9, 'Xịt chống nắng'),
(10, 'Sơn môi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhsachyeuthich`
--

CREATE TABLE `danhsachyeuthich` (
  `ID` int(11) NOT NULL,
  `IDKH` int(11) DEFAULT NULL,
  `IDSP` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhsachyeuthich`
--

INSERT INTO `danhsachyeuthich` (`ID`, `IDKH`, `IDSP`) VALUES
(548, 33, 20),
(549, 33, 20),
(550, 34, 15),
(551, 34, 15),
(552, 37, 20),
(553, 37, 20),
(554, 37, 20),
(555, 35, 45),
(556, 35, 45),
(557, 35, 45),
(558, 35, 45);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `ID` int(11) NOT NULL,
  `IDKH` int(11) NOT NULL,
  `ngayDat` date DEFAULT NULL,
  `tinhTrang` varchar(100) DEFAULT NULL,
  `phiGD` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`ID`, `IDKH`, `ngayDat`, `tinhTrang`, `phiGD`) VALUES
(151, 34, '2022-11-11', 'Đã nhận hàng', 29000),
(153, 33, '2022-11-12', 'Đã nhận hàng', 29000),
(154, 33, '2022-11-12', 'Đã nhận hàng', 29000),
(155, 33, '2022-11-12', 'Đã nhận hàng', 29000),
(156, 33, '2022-11-12', 'Đã nhận hàng', 29000),
(157, 34, '2022-11-12', 'Đã nhận hàng', 29000),
(158, 33, '2022-11-12', 'Đã nhận hàng', 29000),
(159, 34, '2022-11-14', 'Đã nhận hàng', 29000),
(160, 34, '2022-11-14', 'Đã nhận hàng', 29000),
(163, 36, '2022-11-19', 'Đã duyệt', 29000),
(164, 37, '2022-11-30', 'Đang xử lý', 29000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giamgia`
--

CREATE TABLE `giamgia` (
  `ID` int(11) NOT NULL,
  `IDSK` int(11) DEFAULT NULL,
  `IDSP` int(11) DEFAULT NULL,
  `giaGiam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `giamgia`
--

INSERT INTO `giamgia` (`ID`, `IDSK`, `IDSP`, `giaGiam`) VALUES
(48, NULL, 20, 0),
(49, NULL, 15, 0),
(52, NULL, 29, 0),
(53, 64, 30, 20),
(61, NULL, 38, 0),
(62, NULL, 39, 0),
(63, NULL, 40, 0),
(64, NULL, 41, 0),
(65, NULL, 42, 0),
(66, NULL, 43, 0),
(67, NULL, 44, 0),
(68, NULL, 45, 0),
(69, NULL, 46, 0),
(70, NULL, 47, 0),
(72, NULL, 49, 0),
(73, NULL, 50, 0),
(74, NULL, 51, 0),
(75, NULL, 52, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `ID` int(11) NOT NULL,
  `IDKH` int(11) DEFAULT NULL,
  `IDSP` int(11) DEFAULT NULL,
  `soLuong` int(11) DEFAULT NULL,
  `size` text NOT NULL,
  `tongTien` float DEFAULT NULL,
  `thoiGian` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`ID`, `IDKH`, `IDSP`, `soLuong`, `size`, `tongTien`, `thoiGian`) VALUES
(818, 1, 1, 1, '32ml', 153000, '2022-08-18'),
(1812, 34, 15, 2, '32ml', 334400, '2022-11-14'),
(1813, 34, 20, 3, '32ml', 475200, '2022-11-14'),
(1814, 34, 12, 1, '32ml', 171000, '2022-11-14'),
(1819, 36, 12, 4, '32ml', 720000, '2022-11-19'),
(1825, 37, 12, 12, '32ml', 2160000, '2022-11-30'),
(1826, 37, 30, 2, '32ml', 240000, '2022-11-30'),
(1827, 35, 20, 1, '32ml', 180000, '2022-12-01'),
(1828, 35, 29, 1, '32ml', 150000, '2022-12-01'),
(1829, 35, 15, 1, '32ml', 190000, '2022-12-01'),
(1830, 35, 39, 2, '32ml', 300000, '2022-12-01'),
(1831, 35, 38, 1, '32ml', 150000, '2022-12-01'),
(1832, 35, 30, 1, '32ml', 120000, '2022-12-01'),
(1833, 35, 41, 1, '32ml', 120000, '2022-12-01'),
(1834, 35, 42, 1, '120ml', 220000, '2022-12-01'),
(1835, 35, 40, 1, '32ml', 180000, '2022-12-01'),
(1836, 35, 47, 1, '32ml', 80000, '2022-12-01'),
(1837, 35, 49, 1, '120ml', 230000, '2022-12-01'),
(1838, 35, 46, 1, '32ml', 250000, '2022-12-01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `ID` int(11) NOT NULL,
  `IDTK` int(11) DEFAULT NULL,
  `hoTen` varchar(50) DEFAULT NULL,
  `ngaysinh` text DEFAULT NULL,
  `gioiTinh` varchar(50) NOT NULL,
  `sdt` varchar(20) DEFAULT NULL,
  `diachi` varchar(100) DEFAULT NULL,
  `ranks` int(30) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`ID`, `IDTK`, `hoTen`, `ngaysinh`, `gioiTinh`, `sdt`, `diachi`, `ranks`, `image`) VALUES
(1, 1, 'Nguyễn Quôc Anh', '2002-03-11', '', '0389660305', '96/7 Nguyen hue', 2, 'Public/image/Avatar/37_22022_11_30_17_06_33.jpg'),
(5, 5, 'zxczxc', '2022-08-19', '', '12312313', 'zxc', 1, 'Public/image/Avatar/62022_11_30_17_37_14.png'),
(6, 6, 'zxczx', '2022-08-20', '', '', 'zxczxczxc', 1, 'Public/image/Avatar/72022_11_30_17_38_15.jpg'),
(25, 25, 'zxczxc', '2022-10-20', '', '', 'zxczcz', 3, 'Public/image/Avatar/32022_11_30_17_45_15.jpg'),
(32, 32, 'zxczx', '1522-03-12', 'Nam', 'null', 'xcxvxc', 4, 'Public/image/Avatar/372022_11_30_17_28_32.jpg'),
(33, 33, 'Quốc anh', '2002-03-11', 'Nam', 'null', '372783xcx', 3, 'Public/image/Avatar/QA.jpg'),
(34, 34, 'Quốc anh', '2002-03-11', 'Nam', 'null', 'zxczxczxc', 0, 'Public/image/Avatar/noavatar.png'),
(35, 35, 'quốc ánh', '2002-03-11', 'Nữ', 'null', '098 hà nội', 3, 'Public/image/Avatar/22022_12_01_12_03_49.jpg'),
(36, 36, 'quoc em', '2002-03-11', 'Nam', 'null', 'nguyen he', 0, 'Public/image/Avatar/noavatar.png'),
(37, 37, 'quốc em', '2002-03-11', 'Nam', 'null', '96/7 Nguyễn huệ', 0, 'Public/image/Avatar/22022_11_30_17_39_05.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kichthuoc`
--

CREATE TABLE `kichthuoc` (
  `ID` int(11) NOT NULL,
  `size` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `kichthuoc`
--

INSERT INTO `kichthuoc` (`ID`, `size`) VALUES
(1, '32ml'),
(2, '50ml'),
(3, '100ml'),
(4, '120ml'),
(5, '150ml'),
(6, '200ml'),
(7, '250ml'),
(8, '300ml');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lichsubanhang`
--

CREATE TABLE `lichsubanhang` (
  `ID` int(11) NOT NULL,
  `IDKH` int(11) DEFAULT NULL,
  `IDSP` int(11) DEFAULT NULL,
  `soLuong` int(11) DEFAULT NULL,
  `ngayBan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `lichsubanhang`
--

INSERT INTO `lichsubanhang` (`ID`, `IDKH`, `IDSP`, `soLuong`, `ngayBan`) VALUES
(66, 34, 12, 6, '2022-11-16'),
(68, 34, 15, 19, '2022-11-16'),
(69, 34, 20, 8, '2022-11-16'),
(70, 34, 29, 1, '2022-10-16'),
(71, 34, 30, 5, '2022-11-16'),
(72, 33, 20, 2, '2022-11-16'),
(73, 33, 15, 2, '2022-11-16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `magiam`
--

CREATE TABLE `magiam` (
  `ID` int(11) NOT NULL,
  `IDSK` int(11) DEFAULT NULL,
  `codes` varchar(100) DEFAULT NULL,
  `giagiam` int(11) NOT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mausac`
--

CREATE TABLE `mausac` (
  `ID` int(11) NOT NULL,
  `tenMau` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `mausac`
--

INSERT INTO `mausac` (`ID`, `tenMau`) VALUES
(1, 'Xanh lá'),
(2, 'Nâu'),
(3, 'Trắng'),
(4, 'Đen'),
(5, 'Vàng'),
(6, 'Đỏ'),
(7, 'Hồng'),
(8, 'Tím');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `ID` int(11) NOT NULL,
  `IDLoai` int(11) DEFAULT NULL,
  `IDBrand` int(11) DEFAULT NULL,
  `IDSize` int(11) DEFAULT NULL,
  `IDMau` int(11) DEFAULT NULL,
  `IDSX` int(11) DEFAULT NULL,
  `tenSP` varchar(200) DEFAULT NULL,
  `giaSP` float DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `image1` text NOT NULL,
  `image2` text NOT NULL,
  `moTa` text NOT NULL,
  `congDung` text NOT NULL,
  `suDung` text NOT NULL,
  `gioiThieuTH` text NOT NULL,
  `combo` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`ID`, `IDLoai`, `IDBrand`, `IDSize`, `IDMau`, `IDSX`, `tenSP`, `giaSP`, `image`, `image1`, `image2`, `moTa`, `congDung`, `suDung`, `gioiThieuTH`, `combo`, `status`) VALUES
(1, 8, 4, 5, 3, 8, 'Dưỡng da dầu Oil hương thơm', 180000, 'Public/image/1.png', 'Public/image/1_2.jpg', 'Public/image/1_1.jpg', 'Nếu bạn có làn da nhạy cảm, hãy tìm một loại kem dưỡng ẩm có nhãn không gây dị ứng. Nếu bạn có làn da nhờn, kem dưỡng ẩm không chứa dầu sẽ là lựa chọn tối ưu, và nếu bạn có làn da khô, kem dưỡng ẩm giàu chất dưỡng ẩm sẽ là tốt nhất. Nhưng làn da của bạn là da tổng hợp, một loại kem dưỡng ẩm không chứa dầu cho toàn bộ khuôn mặt của bạn và chấm khu vực khô hơn với một loại kem giàu chất dưỡng ẩm sẽ là tốt nhất. Hãy nhớ rằng bạn có thể cần kem dưỡng ẩm nhẹ vào mùa hè, và thuốc mỡ trong mùa đông hay kem dưỡng ẩm màu đông.', 'Kem dưỡng ẩm đang trở thành một trong những loại mỹ phẩm chăm sóc da quan trọng, đặc biệt cho làn da khô. Ích lợi của kem dưỡng ẩm hẳn các bạn cũng đều biết, nhưng nên mua loại kem dưỡng ẩm nào, hay nên sử dụng kem dưỡng ẩm khi nào, có lẽ không ai trong chúng ta cũng nắm rõ. Elle sẽ giúp bạn trả lời những câu hỏi quan trọng này.kem dưỡng ẩm', 'Vì da mặt thường mỏng và nhạy cảm, vì vậy bạn nên sử dụng kem dưỡng ẩm dành cho da mặt thay vì dùng kem dưỡng ẩm toàn thân. Luôn nhớ mua loại kem dưỡng ẩm dán nhãn “không gây bít lỗ chân lông” vì các dưỡng chất trong loại kem này sẽ không làm tắc nghẽn lỗ chân lông của bạn. Và tất nhiên, luôn chọn loại kem phù hợp với loại da của mình.', 'Victoria’s Secret là một nhãn hiệu nội y nổi tiếng với show thời trang thường niên luôn thu hút được sự quan tâm của hàng chục triệu người trên toàn thế giới. Dòng mỹ phẩm và nước hoa mang tên Victoria’s Secret cũng đầy gợi cảm như các thiên thần của họ trên sàn catwalk.', 1, 1),
(9, 7, 3, 1, 6, 4, 'Kẻ chân mày', 80000, 'Public/image/30.jpg', 'Public/image/30_1.jpg', 'Public/image/30_2.jpg', 'Nếu bạn có làn da nhạy cảm, hãy tìm một loại kem dưỡng ẩm có nhãn không gây dị ứng. Nếu bạn có làn da nhờn, kem dưỡng ẩm không chứa dầu sẽ là lựa chọn tối ưu, và nếu bạn có làn da khô, kem dưỡng ẩm giàu chất dưỡng ẩm sẽ là tốt nhất. Nhưng làn da của bạn là da tổng hợp, một loại kem dưỡng ẩm không chứa dầu cho toàn bộ khuôn mặt của bạn và chấm khu vực khô hơn với một loại kem giàu chất dưỡng ẩm sẽ là tốt nhất. Hãy nhớ rằng bạn có thể cần kem dưỡng ẩm nhẹ vào mùa hè, và thuốc mỡ trong mùa đông hay kem dưỡng ẩm màu đông.', 'Kem dưỡng ẩm đang trở thành một trong những loại mỹ phẩm chăm sóc da quan trọng, đặc biệt cho làn da khô. Ích lợi của kem dưỡng ẩm hẳn các bạn cũng đều biết, nhưng nên mua loại kem dưỡng ẩm nào, hay nên sử dụng kem dưỡng ẩm khi nào, có lẽ không ai trong chúng ta cũng nắm rõ. Elle sẽ giúp bạn trả lời những câu hỏi quan trọng này.kem dưỡng ẩm', 'Lấy 1 lượng sản phẩm vừa đủ thoa đều lên cơ thể, massage nhẹ nhàng  Tắm sạch lại với nước', 'Victoria’s Secret là một nhãn hiệu nội y nổi tiếng với show thời trang thường niên luôn thu hút được sự quan tâm của hàng chục triệu người trên toàn thế giới. Dòng mỹ phẩm và nước hoa mang tên Victoria’s Secret cũng đầy gợi cảm như các thiên thần của họ trên sàn catwalk.', 2, 1),
(12, 2, 1, 1, 3, 4, 'sửa rửa mặt sun', 180000, 'Public/image/24.jpg', 'Public/image/24_1.jpg', 'Public/image/24_2.png', 'bạn có làn da nhạy cảm, hãy tìm một loại kem dưỡng ẩm có nhãn không gây dị ứng. Nếu bạn có làn da nhờn, kem dưỡng ẩm không chứa dầu sẽ là lựa chọn tối ưu, và nếu bạn có làn da khô, kem dưỡng ẩm giàu chất dưỡng ẩm sẽ là tốt nhất. Nhưng làn da của bạn là da tổng hợp, một loại kem dưỡng ẩm không chứa dầu cho toàn bộ khuôn mặt của bạn và chấm khu vực khô hơn với một loại kem giàu chất dưỡng ẩm sẽ là tốt nhất. Hãy nhớ rằng bạn có thể cần kem dưỡng ẩm nhẹ vào mùa hè, và thuốc mỡ trong mùa đông hay kem dưỡng ẩm màu đông.', 'Kem dưỡng ẩm đang trở thành một trong những loại mỹ phẩm chăm sóc da quan trọng, đặc biệt cho làn da khô. Ích lợi của kem dưỡng ẩm hẳn các bạn cũng đều biết, nhưng nên mua loại kem dưỡng ẩm nào, hay nên sử dụng kem dưỡng ẩm khi nào, có lẽ không ai trong chúng ta cũng nắm rõ. Elle sẽ giúp bạn trả lời những câu hỏi quan trọng này.kem dưỡng ẩm', 'Vì da mặt thường mỏng và nhạy cảm, vì vậy bạn nên sử dụng kem dưỡng ẩm dành cho da mặt thay vì dùng kem dưỡng ẩm toàn thân. Luôn nhớ mua loại kem dưỡng ẩm dán nhãn “không gây bít lỗ chân lông” vì các dưỡng chất trong loại kem này sẽ không làm tắc nghẽn lỗ chân lông của bạn. Và tất nhiên, luôn chọn loại kem phù hợp với loại da của mình.', 'Victoria’s Secret là một nhãn hiệu nội y nổi tiếng với show thời trang thường niên luôn thu hút được sự quan tâm của hàng chục triệu người trên toàn thế giới. Dòng mỹ phẩm và nước hoa mang tên Victoria’s Secret cũng đầy gợi cảm như các thiên thần của họ trên sàn catwalk.', 3, 1),
(14, 7, 1, 1, 3, 4, 'Cọ trang điểm', 110000, 'Public/image/14.jpg', 'Public/image/14_1.jpg', 'Public/image/14_2.jpg', 'bạn có làn da nhạy cảm, hãy tìm một loại kem dưỡng ẩm có nhãn không gây dị ứng. Nếu bạn có làn da nhờn, kem dưỡng ẩm không chứa dầu sẽ là lựa chọn tối ưu, và nếu bạn có làn da khô, kem dưỡng ẩm giàu chất dưỡng ẩm sẽ là tốt nhất. Nhưng làn da của bạn là da tổng hợp, một loại kem dưỡng ẩm không chứa dầu cho toàn bộ khuôn mặt của bạn và chấm khu vực khô hơn với một loại kem giàu chất dưỡng ẩm sẽ là tốt nhất. Hãy nhớ rằng bạn có thể cần kem dưỡng ẩm nhẹ vào mùa hè, và thuốc mỡ trong mùa đông hay kem dưỡng ẩm màu đông.', 'Kem dưỡng ẩm đang trở thành một trong những loại mỹ phẩm chăm sóc da quan trọng, đặc biệt cho làn da khô. Ích lợi của kem dưỡng ẩm hẳn các bạn cũng đều biết, nhưng nên mua loại kem dưỡng ẩm nào, hay nên sử dụng kem dưỡng ẩm khi nào, có lẽ không ai trong chúng ta cũng nắm rõ. Elle sẽ giúp bạn trả lời những câu hỏi quan trọng này.kem dưỡng ẩm', 'mặt thường mỏng và nhạy cảm, vì vậy bạn nên sử dụng kem dưỡng ẩm dành cho da mặt thay vì dùng kem dưỡng ẩm toàn thân. Luôn nhớ mua loại kem dưỡng ẩm dán nhãn “không gây bít lỗ chân lông” vì các dưỡng chất trong loại kem này sẽ không làm tắc nghẽn lỗ chân lông của bạn. Và tất nhiên, luôn chọn loại kem phù hợp với loại da của mình.', 'Victoria’s Secret là một nhãn hiệu nội y nổi tiếng với show thời trang thường niên luôn thu hút được sự quan tâm của hàng chục triệu người trên toàn thế giới. Dòng mỹ phẩm và nước hoa mang tên Victoria’s Secret cũng đầy gợi cảm như các thiên thần của họ trên sàn catwalk.', 4, 1),
(15, 7, 1, 1, 3, 5, 'Sửa rửa mặt con dê', 190000, 'Public/image/56.jpg', 'Public/image/56_1.jpg', 'Public/image/56_2.jpg', 'Nếu bạn có làn da nhạy cảm, hãy tìm một loại kem dưỡng ẩm có nhãn không gây dị ứng. Nếu bạn có làn da nhờn, kem dưỡng ẩm không chứa dầu sẽ là lựa chọn tối ưu, và nếu bạn có làn da khô, kem dưỡng ẩm giàu chất dưỡng ẩm sẽ là tốt nhất. Nhưng làn da của bạn là da tổng hợp, một loại kem dưỡng ẩm không chứa dầu cho toàn bộ khuôn mặt của bạn và chấm khu vực khô hơn với một loại kem giàu chất dưỡng ẩm sẽ là tốt nhất. Hãy nhớ rằng bạn có thể cần kem dưỡng ẩm nhẹ vào mùa hè, và thuốc mỡ trong mùa đông hay kem dưỡng ẩm màu đông.', 'Kem dưỡng ẩm đang trở thành một trong những loại mỹ phẩm chăm sóc da quan trọng, đặc biệt cho làn da khô. Ích lợi của kem dưỡng ẩm hẳn các bạn cũng đều biết, nhưng nên mua loại kem dưỡng ẩm nào, hay nên sử dụng kem dưỡng ẩm khi nào, có lẽ không ai trong chúng ta cũng nắm rõ. Elle sẽ giúp bạn trả lời những câu hỏi quan trọng này.kem dưỡng ẩm', 'mặt thường mỏng và nhạy cảm, vì vậy bạn nên sử dụng kem dưỡng ẩm dành cho da mặt thay vì dùng kem dưỡng ẩm toàn thân. Luôn nhớ mua loại kem dưỡng ẩm dán nhãn “không gây bít lỗ chân lông” vì các dưỡng chất trong loại kem này sẽ không làm tắc nghẽn lỗ chân lông của bạn. Và tất nhiên, luôn chọn loại kem phù hợp với loại da của mình.', 'Victoria’s là một nhãn hiệu nội y nổi tiếng với show thời trang thường niên luôn thu hút được sự quan tâm của hàng chục triệu người trên toàn thế giới. Dòng mỹ phẩm và nước hoa mang tên Victoria’s Secret cũng đầy gợi cảm như các thiên thần của họ trên sàn catwalk.', 7, 1),
(20, 7, 1, 1, 3, 2, 'Sửa rửa mặt trị mụn', 180000, 'Public/image/40.jpg', 'Public/image/40_1.jpg', 'Public/image/40_2.jpg', 'bạn có làn da nhạy cảm, hãy tìm một loại kem dưỡng ẩm có nhãn không gây dị ứng. Nếu bạn có làn da nhờn, kem dưỡng ẩm không chứa dầu sẽ là lựa chọn tối ưu, và nếu bạn có làn da khô, kem dưỡng ẩm giàu chất dưỡng ẩm sẽ là tốt nhất. Nhưng làn da của bạn là da tổng hợp, một loại kem dưỡng ẩm không chứa dầu cho toàn bộ khuôn mặt của bạn và chấm khu vực khô hơn với một loại kem giàu chất dưỡng ẩm sẽ là tốt nhất. Hãy nhớ rằng bạn có thể cần kem dưỡng ẩm nhẹ vào mùa hè, và thuốc mỡ trong mùa đông hay kem dưỡng ẩm màu đông.', 'Kem dưỡng ẩm đang trở thành một trong những loại mỹ phẩm chăm sóc da quan trọng, đặc biệt cho làn da khô. Ích lợi của kem dưỡng ẩm hẳn các bạn cũng đều biết, nhưng nên mua loại kem dưỡng ẩm nào, hay nên sử dụng kem dưỡng ẩm khi nào, có lẽ không ai trong chúng ta cũng nắm rõ. Elle sẽ giúp bạn trả lời những câu hỏi quan trọng này.kem dưỡng ẩm', 'Lấy 1 lượng sản phẩm vừa đủ thoa đều lên cơ thể, massage nhẹ nhàng  Tắm sạch lại với nước', 'Victoria’s Secret là một nhãn hiệu nội y nổi tiếng với show thời trang thường niên luôn thu hút được sự quan tâm của hàng chục triệu người trên toàn thế giới. Dòng mỹ phẩm và nước hoa mang tên Victoria’s Secret cũng đầy gợi cảm như các thiên thần của họ trên sàn catwalk.', 5, 1),
(29, 7, 2, 1, 1, 2, 'Nước hoa trắng thơm', 150000, 'Public/image/6.png', 'Public/image/6_2.jpg', 'Public/image/6_1.jpg', 'Nếu bạn có làn da nhạy cảm, hãy tìm một loại kem dưỡng ẩm có nhãn không gây dị ứng. Nếu bạn có làn da nhờn, kem dưỡng ẩm không chứa dầu sẽ là lựa chọn tối ưu, và nếu bạn có làn da khô, kem dưỡng ẩm giàu chất dưỡng ẩm sẽ là tốt nhất. Nhưng làn da của bạn là da tổng hợp, một loại kem dưỡng ẩm không chứa dầu cho toàn bộ khuôn mặt của bạn và chấm khu vực khô hơn với một loại kem giàu chất dưỡng ẩm sẽ là tốt nhất. Hãy nhớ rằng bạn có thể cần kem dưỡng ẩm nhẹ vào mùa hè, và thuốc mỡ trong mùa đông hay kem dưỡng ẩm màu đông.', 'Kem dưỡng ẩm đang trở thành một trong những loại mỹ phẩm chăm sóc da quan trọng, đặc biệt cho làn da khô. Ích lợi của kem dưỡng ẩm hẳn các bạn cũng đều biết, nhưng nên mua loại kem dưỡng ẩm nào, hay nên sử dụng kem dưỡng ẩm khi nào, có lẽ không ai trong chúng ta cũng nắm rõ. Elle sẽ giúp bạn trả lời những câu hỏi quan trọng này.kem dưỡng ẩm', 'Vì da mặt thường mỏng và nhạy cảm, vì vậy bạn nên sử dụng kem dưỡng ẩm dành cho da mặt thay vì dùng kem dưỡng ẩm toàn thân. Luôn nhớ mua loại kem dưỡng ẩm dán nhãn “không gây bít lỗ chân lông” vì các dưỡng chất trong loại kem này sẽ không làm tắc nghẽn lỗ chân lông của bạn. Và tất nhiên, luôn chọn loại kem phù hợp với loại da của mình.', 'Victoria’s Secret là một nhãn hiệu nội y nổi tiếng với show thời trang thường niên luôn thu hút được sự quan tâm của hàng chục triệu người trên toàn thế giới. Dòng mỹ phẩm và nước hoa mang tên Victoria’s Secret cũng đầy gợi cảm như các thiên thần của họ trên sàn catwalk.', 1, 1),
(30, 8, 1, 1, 1, 4, 'Dưỡng da dầu', 150000, 'Public/image/18.jpg', 'Public/image/17_2.jpg', 'Public/image/18_2.jpg', 'bạn có làn da nhạy cảm, hãy tìm một loại kem dưỡng ẩm có nhãn không gây dị ứng. Nếu bạn có làn da nhờn, kem dưỡng ẩm không chứa dầu sẽ là lựa chọn tối ưu, và nếu bạn có làn da khô, kem dưỡng ẩm giàu chất dưỡng ẩm sẽ là tốt nhất. Nhưng làn da của bạn là da tổng hợp, một loại kem dưỡng ẩm không chứa dầu cho toàn bộ khuôn mặt của bạn và chấm khu vực khô hơn với một loại kem giàu chất dưỡng ẩm sẽ là tốt nhất. Hãy nhớ rằng bạn có thể cần kem dưỡng ẩm nhẹ vào mùa hè, và thuốc mỡ trong mùa đông hay kem dưỡng ẩm màu đông.', 'Kem dưỡng ẩm đang trở thành một trong những loại mỹ phẩm chăm sóc da quan trọng, đặc biệt cho làn da khô. Ích lợi của kem dưỡng ẩm hẳn các bạn cũng đều biết, nhưng nên mua loại kem dưỡng ẩm nào, hay nên sử dụng kem dưỡng ẩm khi nào, có lẽ không ai trong chúng ta cũng nắm rõ. Elle sẽ giúp bạn trả lời những câu hỏi quan trọng này.kem dưỡng ẩm', 'Vì da mặt thường mỏng và nhạy cảm, vì vậy bạn nên sử dụng kem dưỡng ẩm dành cho da mặt thay vì dùng kem dưỡng ẩm toàn thân. Luôn nhớ mua loại kem dưỡng ẩm dán nhãn “không gây bít lỗ chân lông” vì các dưỡng chất trong loại kem này sẽ không làm tắc nghẽn lỗ chân lông của bạn. Và tất nhiên, luôn chọn loại kem phù hợp với loại da của mình.', 'Victoria’s Secret là một nhãn hiệu nội y nổi tiếng với show thời trang thường niên luôn thu hút được sự quan tâm của hàng chục triệu người trên toàn thế giới. Dòng mỹ phẩm và nước hoa mang tên Victoria’s Secret cũng đầy gợi cảm như các thiên thần của họ trên sàn catwalk.', 1, 1),
(38, 8, 1, 1, 1, 2, 'Sửa rửa mặt trị mụn', 150000, 'Public/image/37.jpg', 'Public/image/37_1.jpg', 'Public/image/37_2.jpg', 'Nếu bạn có làn da nhạy cảm, hãy tìm một loại kem dưỡng ẩm có nhãn không gây dị ứng. Nếu bạn có làn da nhờn, kem dưỡng ẩm không chứa dầu sẽ là lựa chọn tối ưu, và nếu bạn có làn da khô, kem dưỡng ẩm giàu chất dưỡng ẩm sẽ là tốt nhất. Nhưng làn da của bạn là da tổng hợp, một loại kem dưỡng ẩm không chứa dầu cho toàn bộ khuôn mặt của bạn và chấm khu vực khô hơn với một loại kem giàu chất dưỡng ẩm sẽ là tốt nhất. Hãy nhớ rằng bạn có thể cần kem dưỡng ẩm nhẹ vào mùa hè, và thuốc mỡ trong mùa đông hay kem dưỡng ẩm màu đông.', 'Kem dưỡng ẩm đang trở thành một trong những loại mỹ phẩm chăm sóc da quan trọng, đặc biệt cho làn da khô. Ích lợi của kem dưỡng ẩm hẳn các bạn cũng đều biết, nhưng nên mua loại kem dưỡng ẩm nào, hay nên sử dụng kem dưỡng ẩm khi nào, có lẽ không ai trong chúng ta cũng nắm rõ. Elle sẽ giúp bạn trả lời những câu hỏi quan trọng này.kem dưỡng ẩm', 'Vì da mặt thường mỏng và nhạy cảm, vì vậy bạn nên sử dụng kem dưỡng ẩm dành cho da mặt thay vì dùng kem dưỡng ẩm toàn thân. Luôn nhớ mua loại kem dưỡng ẩm dán nhãn “không gây bít lỗ chân lông” vì các dưỡng chất trong loại kem này sẽ không làm tắc nghẽn lỗ chân lông của bạn. Và tất nhiên, luôn chọn loại kem phù hợp với loại da của mình.', 'Victoria’s Secret là một nhãn hiệu nội y nổi tiếng với show thời trang thường niên luôn thu hút được sự quan tâm của hàng chục triệu người trên toàn thế giới. Dòng mỹ phẩm và nước hoa mang tên Victoria’s Secret cũng đầy gợi cảm như các thiên thần của họ trên sàn catwalk.', 1, 1),
(39, 11, 4, 1, 7, 2, 'Nước dưỡng ẩm da hương dâu', 150000, 'Public/image/4_1.jpg', 'Public/image/4.png', 'Public/image/4_2.png', 'bạn có làn da nhạy cảm, hãy tìm một loại kem dưỡng ẩm có nhãn không gây dị ứng. Nếu bạn có làn da nhờn, kem dưỡng ẩm không chứa dầu sẽ là lựa chọn tối ưu, và nếu bạn có làn da khô, kem dưỡng ẩm giàu chất dưỡng ẩm sẽ là tốt nhất. Nhưng làn da của bạn là da tổng hợp, một loại kem dưỡng ẩm không chứa dầu cho toàn bộ khuôn mặt của bạn và chấm khu vực khô hơn với một loại kem giàu chất dưỡng ẩm sẽ là tốt nhất. Hãy nhớ rằng bạn có thể cần kem dưỡng ẩm nhẹ vào mùa hè, và thuốc mỡ trong mùa đông hay kem dưỡng ẩm màu đông.', 'Kem dưỡng ẩm đang trở thành một trong những loại mỹ phẩm chăm sóc da quan trọng, đặc biệt cho làn da khô. Ích lợi của kem dưỡng ẩm hẳn các bạn cũng đều biết, nhưng nên mua loại kem dưỡng ẩm nào, hay nên sử dụng kem dưỡng ẩm khi nào, có lẽ không ai trong chúng ta cũng nắm rõ. Elle sẽ giúp bạn trả lời những câu hỏi quan trọng này.kem dưỡng ẩm', 'Vì da mặt thường mỏng và nhạy cảm, vì vậy bạn nên sử dụng kem dưỡng ẩm dành cho da mặt thay vì dùng kem dưỡng ẩm toàn thân. Luôn nhớ mua loại kem dưỡng ẩm dán nhãn “không gây bít lỗ chân lông” vì các dưỡng chất trong loại kem này sẽ không làm tắc nghẽn lỗ chân lông của bạn. Và tất nhiên, luôn chọn loại kem phù hợp với loại da của mình.', 'Victoria’s là một nhãn hiệu nội y nổi tiếng với show thời trang thường niên luôn thu hút được sự quan tâm của hàng chục triệu người trên toàn thế giới. Dòng mỹ phẩm và nước hoa mang tên Victoria’s Secret cũng đầy gợi cảm như các thiên thần của họ trên sàn catwalk.', 3, 1),
(40, 8, 3, 1, 7, 2, 'Sửa rửa mặt trị mụn', 180000, 'Public/image/6_1.jpg', 'Public/image/6_2.jpg', 'Public/image/6.png', 'bạn có làn da nhạy cảm, hãy tìm một loại kem dưỡng ẩm có nhãn không gây dị ứng. Nếu bạn có làn da nhờn, kem dưỡng ẩm không chứa dầu sẽ là lựa chọn tối ưu, và nếu bạn có làn da khô, kem dưỡng ẩm giàu chất dưỡng ẩm sẽ là tốt nhất. Nhưng làn da của bạn là da tổng hợp, một loại kem dưỡng ẩm không chứa dầu cho toàn bộ khuôn mặt của bạn và chấm khu vực khô hơn với một loại kem giàu chất dưỡng ẩm sẽ là tốt nhất. Hãy nhớ rằng bạn có thể cần kem dưỡng ẩm nhẹ vào mùa hè, và thuốc mỡ trong mùa đông hay kem dưỡng ẩm màu đông.', 'dưỡng ẩm đang trở thành một trong những loại mỹ phẩm chăm sóc da quan trọng, đặc biệt cho làn da khô. Ích lợi của kem dưỡng ẩm hẳn các bạn cũng đều biết, nhưng nên mua loại kem dưỡng ẩm nào, hay nên sử dụng kem dưỡng ẩm khi nào, có lẽ không ai trong chúng ta cũng nắm rõ. Elle sẽ giúp bạn trả lời những câu hỏi quan trọng này.kem dưỡng ẩm', 'mặt thường mỏng và nhạy cảm, vì vậy bạn nên sử dụng kem dưỡng ẩm dành cho da mặt thay vì dùng kem dưỡng ẩm toàn thân. Luôn nhớ mua loại kem dưỡng ẩm dán nhãn “không gây bít lỗ chân lông” vì các dưỡng chất trong loại kem này sẽ không làm tắc nghẽn lỗ chân lông của bạn. Và tất nhiên, luôn chọn loại kem phù hợp với loại da của mình.', 'Victoria’s là một nhãn hiệu nội y nổi tiếng với show thời trang thường niên luôn thu hút được sự quan tâm của hàng chục triệu người trên toàn thế giới. Dòng mỹ phẩm và nước hoa mang tên Victoria’s Secret cũng đầy gợi cảm như các thiên thần của họ trên sàn catwalk.', 1, 1),
(41, 43, 6, 1, 4, 2, 'Kem chống nắng rám da', 120000, 'Public/image/7.jpg', 'Public/image/7_1.jpg', 'Public/image/7_2.jpg', 'bạn có làn da nhạy cảm, hãy tìm một loại kem dưỡng ẩm có nhãn không gây dị ứng. Nếu bạn có làn da nhờn, kem dưỡng ẩm không chứa dầu sẽ là lựa chọn tối ưu, và nếu bạn có làn da khô, kem dưỡng ẩm giàu chất dưỡng ẩm sẽ là tốt nhất. Nhưng làn da của bạn là da tổng hợp, một loại kem dưỡng ẩm không chứa dầu cho toàn bộ khuôn mặt của bạn và chấm khu vực khô hơn với một loại kem giàu chất dưỡng ẩm sẽ là tốt nhất. Hãy nhớ rằng bạn có thể cần kem dưỡng ẩm nhẹ vào mùa hè, và thuốc mỡ trong mùa đông hay kem dưỡng ẩm màu đông.', 'Kem dưỡng ẩm đang trở thành một trong những loại mỹ phẩm chăm sóc da quan trọng, đặc biệt cho làn da khô. Ích lợi của kem dưỡng ẩm hẳn các bạn cũng đều biết, nhưng nên mua loại kem dưỡng ẩm nào, hay nên sử dụng kem dưỡng ẩm khi nào, có lẽ không ai trong chúng ta cũng nắm rõ. Elle sẽ giúp bạn trả lời những câu hỏi quan trọng này.kem dưỡng ẩm', 'Lấy 1 lượng sản phẩm vừa đủ thoa đều lên cơ thể, massage nhẹ nhàng  Tắm sạch lại với nước', 'Victoria’s Secret là một nhãn hiệu nội y nổi tiếng với show thời trang thường niên luôn thu hút được sự quan tâm của hàng chục triệu người trên toàn thế giới. Dòng mỹ phẩm và nước hoa mang tên Victoria’s Secret cũng đầy gợi cảm như các thiên thần của họ trên sàn catwalk.', 6, 1),
(42, 8, 1, 4, 1, 2, 'Sửa rửa mặt hương vị bạc hà', 220000, 'Public/image/8.jpg', 'Public/image/8_1.jpg', 'Public/image/8_2.jpg', 'bạn có làn da nhạy cảm, hãy tìm một loại kem dưỡng ẩm có nhãn không gây dị ứng. Nếu bạn có làn da nhờn, kem dưỡng ẩm không chứa dầu sẽ là lựa chọn tối ưu, và nếu bạn có làn da khô, kem dưỡng ẩm giàu chất dưỡng ẩm sẽ là tốt nhất. Nhưng làn da của bạn là da tổng hợp, một loại kem dưỡng ẩm không chứa dầu cho toàn bộ khuôn mặt của bạn và chấm khu vực khô hơn với một loại kem giàu chất dưỡng ẩm sẽ là tốt nhất. Hãy nhớ rằng bạn có thể cần kem dưỡng ẩm nhẹ vào mùa hè, và thuốc mỡ trong mùa đông hay kem dưỡng ẩm màu đông.', 'Kem dưỡng ẩm đang trở thành một trong những loại mỹ phẩm chăm sóc da quan trọng, đặc biệt cho làn da khô. Ích lợi của kem dưỡng ẩm hẳn các bạn cũng đều biết, nhưng nên mua loại kem dưỡng ẩm nào, hay nên sử dụng kem dưỡng ẩm khi nào, có lẽ không ai trong chúng ta cũng nắm rõ. Elle sẽ giúp bạn trả lời những câu hỏi quan trọng này.kem dưỡng ẩm', 'Vì da mặt thường mỏng và nhạy cảm, vì vậy bạn nên sử dụng kem dưỡng ẩm dành cho da mặt thay vì dùng kem dưỡng ẩm toàn thân. Luôn nhớ mua loại kem dưỡng ẩm dán nhãn “không gây bít lỗ chân lông” vì các dưỡng chất trong loại kem này sẽ không làm tắc nghẽn lỗ chân lông của bạn. Và tất nhiên, luôn chọn loại kem phù hợp với loại da của mình.', 'Victoria’s Secret là một nhãn hiệu nội y nổi tiếng với show thời trang thường niên luôn thu hút được sự quan tâm của hàng chục triệu người trên toàn thế giới. Dòng mỹ phẩm và nước hoa mang tên Victoria’s Secret cũng đầy gợi cảm như các thiên thần của họ trên sàn catwalk.', 7, 1),
(43, 46, 2, 1, 3, 6, 'Phấn bảo vệ da ', 220000, 'Public/image/11.jpg', 'Public/image/11_2.jpg', 'Public/image/31.jpg', 'bạn có làn da nhạy cảm, hãy tìm một loại kem dưỡng ẩm có nhãn không gây dị ứng. Nếu bạn có làn da nhờn, kem dưỡng ẩm không chứa dầu sẽ là lựa chọn tối ưu, và nếu bạn có làn da khô, kem dưỡng ẩm giàu chất dưỡng ẩm sẽ là tốt nhất. Nhưng làn da của bạn là da tổng hợp, một loại kem dưỡng ẩm không chứa dầu cho toàn bộ khuôn mặt của bạn và chấm khu vực khô hơn với một loại kem giàu chất dưỡng ẩm sẽ là tốt nhất. Hãy nhớ rằng bạn có thể cần kem dưỡng ẩm nhẹ vào mùa hè, và thuốc mỡ trong mùa đông hay kem dưỡng ẩm màu đông.', 'dưỡng ẩm đang trở thành một trong những loại mỹ phẩm chăm sóc da quan trọng, đặc biệt cho làn da khô. Ích lợi của kem dưỡng ẩm hẳn các bạn cũng đều biết, nhưng nên mua loại kem dưỡng ẩm nào, hay nên sử dụng kem dưỡng ẩm khi nào, có lẽ không ai trong chúng ta cũng nắm rõ. Elle sẽ giúp bạn trả lời những câu hỏi quan trọng này.kem dưỡng ẩm', 'mặt thường mỏng và nhạy cảm, vì vậy bạn nên sử dụng kem dưỡng ẩm dành cho da mặt thay vì dùng kem dưỡng ẩm toàn thân. Luôn nhớ mua loại kem dưỡng ẩm dán nhãn “không gây bít lỗ chân lông” vì các dưỡng chất trong loại kem này sẽ không làm tắc nghẽn lỗ chân lông của bạn. Và tất nhiên, luôn chọn loại kem phù hợp với loại da của mình.', 'Victoria’s Secret là một nhãn hiệu nội y nổi tiếng với show thời trang thường niên luôn thu hút được sự quan tâm của hàng chục triệu người trên toàn thế giới. Dòng mỹ phẩm và nước hoa mang tên Victoria’s Secret cũng đầy gợi cảm như các thiên thần của họ trên sàn catwalk.', 6, 1),
(44, 9, 5, 1, 1, 19, 'Tẩy da chết lâu ngày', 165000, 'Public/image/16.jpg', 'Public/image/16_1.jpg', 'Public/image/16_2.jpg', 'bạn có làn da nhạy cảm, hãy tìm một loại kem dưỡng ẩm có nhãn không gây dị ứng. Nếu bạn có làn da nhờn, kem dưỡng ẩm không chứa dầu sẽ là lựa chọn tối ưu, và nếu bạn có làn da khô, kem dưỡng ẩm giàu chất dưỡng ẩm sẽ là tốt nhất. Nhưng làn da của bạn là da tổng hợp, một loại kem dưỡng ẩm không chứa dầu cho toàn bộ khuôn mặt của bạn và chấm khu vực khô hơn với một loại kem giàu chất dưỡng ẩm sẽ là tốt nhất. Hãy nhớ rằng bạn có thể cần kem dưỡng ẩm nhẹ vào mùa hè, và thuốc mỡ trong mùa đông hay kem dưỡng ẩm màu đông.', 'dưỡng ẩm đang trở thành một trong những loại mỹ phẩm chăm sóc da quan trọng, đặc biệt cho làn da khô. Ích lợi của kem dưỡng ẩm hẳn các bạn cũng đều biết, nhưng nên mua loại kem dưỡng ẩm nào, hay nên sử dụng kem dưỡng ẩm khi nào, có lẽ không ai trong chúng ta cũng nắm rõ. Elle sẽ giúp bạn trả lời những câu hỏi quan trọng này.kem dưỡng ẩm', 'mặt thường mỏng và nhạy cảm, vì vậy bạn nên sử dụng kem dưỡng ẩm dành cho da mặt thay vì dùng kem dưỡng ẩm toàn thân. Luôn nhớ mua loại kem dưỡng ẩm dán nhãn “không gây bít lỗ chân lông” vì các dưỡng chất trong loại kem này sẽ không làm tắc nghẽn lỗ chân lông của bạn. Và tất nhiên, luôn chọn loại kem phù hợp với loại da của mình.', 'Victoria’s Secret là một nhãn hiệu nội y nổi tiếng với show thời trang thường niên luôn thu hút được sự quan tâm của hàng chục triệu người trên toàn thế giới. Dòng mỹ phẩm và nước hoa mang tên Victoria’s Secret cũng đầy gợi cảm như các thiên thần của họ trên sàn catwalk.', 8, 1),
(45, 8, 6, 1, 3, 2, 'Sửa rửa mặt tan chất nhờn', 150000, 'Public/image/17.jpg', 'Public/image/17_1.jpg', 'Public/image/17_2.jpg', 'bạn có làn da nhạy cảm, hãy tìm một loại kem dưỡng ẩm có nhãn không gây dị ứng. Nếu bạn có làn da nhờn, kem dưỡng ẩm không chứa dầu sẽ là lựa chọn tối ưu, và nếu bạn có làn da khô, kem dưỡng ẩm giàu chất dưỡng ẩm sẽ là tốt nhất. Nhưng làn da của bạn là da tổng hợp, một loại kem dưỡng ẩm không chứa dầu cho toàn bộ khuôn mặt của bạn và chấm khu vực khô hơn với một loại kem giàu chất dưỡng ẩm sẽ là tốt nhất. Hãy nhớ rằng bạn có thể cần kem dưỡng ẩm nhẹ vào mùa hè, và thuốc mỡ trong mùa đông hay kem dưỡng ẩm màu đông.', 'Kem dưỡng ẩm đang trở thành một trong những loại mỹ phẩm chăm sóc da quan trọng, đặc biệt cho làn da khô. Ích lợi của kem dưỡng ẩm hẳn các bạn cũng đều biết, nhưng nên mua loại kem dưỡng ẩm nào, hay nên sử dụng kem dưỡng ẩm khi nào, có lẽ không ai trong chúng ta cũng nắm rõ. Elle sẽ giúp bạn trả lời những câu hỏi quan trọng này.kem dưỡng ẩm', 'mặt thường mỏng và nhạy cảm, vì vậy bạn nên sử dụng kem dưỡng ẩm dành cho da mặt thay vì dùng kem dưỡng ẩm toàn thân. Luôn nhớ mua loại kem dưỡng ẩm dán nhãn “không gây bít lỗ chân lông” vì các dưỡng chất trong loại kem này sẽ không làm tắc nghẽn lỗ chân lông của bạn. Và tất nhiên, luôn chọn loại kem phù hợp với loại da của mình.', 'Victoria’s là một nhãn hiệu nội y nổi tiếng với show thời trang thường niên luôn thu hút được sự quan tâm của hàng chục triệu người trên toàn thế giới. Dòng mỹ phẩm và nước hoa mang tên Victoria’s Secret cũng đầy gợi cảm như các thiên thần của họ trên sàn catwalk.', 1, 1),
(46, 45, 4, 1, 3, 2, 'Dưỡng da dầu Oil ', 250000, 'Public/image/18.jpg', 'Public/image/18_1.jpg', 'Public/image/18_2.jpg', 'Nếu bạn có làn da nhạy cảm, hãy tìm một loại kem dưỡng ẩm có nhãn không gây dị ứng. Nếu bạn có làn da nhờn, kem dưỡng ẩm không chứa dầu sẽ là lựa chọn tối ưu, và nếu bạn có làn da khô, kem dưỡng ẩm giàu chất dưỡng ẩm sẽ là tốt nhất. Nhưng làn da của bạn là da tổng hợp, một loại kem dưỡng ẩm không chứa dầu cho toàn bộ khuôn mặt của bạn và chấm khu vực khô hơn với một loại kem giàu chất dưỡng ẩm sẽ là tốt nhất. Hãy nhớ rằng bạn có thể cần kem dưỡng ẩm nhẹ vào mùa hè, và thuốc mỡ trong mùa đông hay kem dưỡng ẩm màu đông.', 'Kem dưỡng ẩm đang trở thành một trong những loại mỹ phẩm chăm sóc da quan trọng, đặc biệt cho làn da khô. Ích lợi của kem dưỡng ẩm hẳn các bạn cũng đều biết, nhưng nên mua loại kem dưỡng ẩm nào, hay nên sử dụng kem dưỡng ẩm khi nào, có lẽ không ai trong chúng ta cũng nắm rõ. Elle sẽ giúp bạn trả lời những câu hỏi quan trọng này.kem dưỡng ẩm', 'mặt thường mỏng và nhạy cảm, vì vậy bạn nên sử dụng kem dưỡng ẩm dành cho da mặt thay vì dùng kem dưỡng ẩm toàn thân. Luôn nhớ mua loại kem dưỡng ẩm dán nhãn “không gây bít lỗ chân lông” vì các dưỡng chất trong loại kem này sẽ không làm tắc nghẽn lỗ chân lông của bạn. Và tất nhiên, luôn chọn loại kem phù hợp với loại da của mình.', 'Victoria’s là một nhãn hiệu nội y nổi tiếng với show thời trang thường niên luôn thu hút được sự quan tâm của hàng chục triệu người trên toàn thế giới. Dòng mỹ phẩm và nước hoa mang tên Victoria’s Secret cũng đầy gợi cảm như các thiên thần của họ trên sàn catwalk.', 9, 1),
(47, 10, 4, 1, 2, 5, 'Dưỡng ẩm cho mắt', 80000, 'Public/image/19.jpg', 'Public/image/14.jpg', 'Public/image/37_2.jpg', 'Nếu bạn có làn da nhạy cảm, hãy tìm một loại kem dưỡng ẩm có nhãn không gây dị ứng. Nếu bạn có làn da nhờn, kem dưỡng ẩm không chứa dầu sẽ là lựa chọn tối ưu, và nếu bạn có làn da khô, kem dưỡng ẩm giàu chất dưỡng ẩm sẽ là tốt nhất. Nhưng làn da của bạn là da tổng hợp, một loại kem dưỡng ẩm không chứa dầu cho toàn bộ khuôn mặt của bạn và chấm khu vực khô hơn với một loại kem giàu chất dưỡng ẩm sẽ là tốt nhất. Hãy nhớ rằng bạn có thể cần kem dưỡng ẩm nhẹ vào mùa hè, và thuốc mỡ trong mùa đông hay kem dưỡng ẩm màu đông.', 'Kem dưỡng ẩm đang trở thành một trong những loại mỹ phẩm chăm sóc da quan trọng, đặc biệt cho làn da khô. Ích lợi của kem dưỡng ẩm hẳn các bạn cũng đều biết, nhưng nên mua loại kem dưỡng ẩm nào, hay nên sử dụng kem dưỡng ẩm khi nào, có lẽ không ai trong chúng ta cũng nắm rõ. Elle sẽ giúp bạn trả lời những câu hỏi quan trọng này.kem dưỡng ẩm', 'Vì da mặt thường mỏng và nhạy cảm, vì vậy bạn nên sử dụng kem dưỡng ẩm dành cho da mặt thay vì dùng kem dưỡng ẩm toàn thân. Luôn nhớ mua loại kem dưỡng ẩm dán nhãn “không gây bít lỗ chân lông” vì các dưỡng chất trong loại kem này sẽ không làm tắc nghẽn lỗ chân lông của bạn. Và tất nhiên, luôn chọn loại kem phù hợp với loại da của mình.', 'Victoria’s là một nhãn hiệu nội y nổi tiếng với show thời trang thường niên luôn thu hút được sự quan tâm của hàng chục triệu người trên toàn thế giới. Dòng mỹ phẩm và nước hoa mang tên Victoria’s Secret cũng đầy gợi cảm như các thiên thần của họ trên sàn catwalk.', 1, 1),
(49, 2, 3, 4, 5, 4, 'Tẩy da chết bám lâu ngày', 230000, 'Public/image/40.jpg', 'Public/image/40_1.jpg', 'Public/image/40_2.jpg', 'Nếu bạn có làn da nhạy cảm, hãy tìm một loại kem dưỡng ẩm có nhãn không gây dị ứng. Nếu bạn có làn da nhờn, kem dưỡng ẩm không chứa dầu sẽ là lựa chọn tối ưu, và nếu bạn có làn da khô, kem dưỡng ẩm giàu chất dưỡng ẩm sẽ là tốt nhất. Nhưng làn da của bạn là da tổng hợp, một loại kem dưỡng ẩm không chứa dầu cho toàn bộ khuôn mặt của bạn và chấm khu vực khô hơn với một loại kem giàu chất dưỡng ẩm sẽ là tốt nhất. Hãy nhớ rằng bạn có thể cần kem dưỡng ẩm nhẹ vào mùa hè, và thuốc mỡ trong mùa đông hay kem dưỡng ẩm màu đông.', 'Kem dưỡng ẩm đang trở thành một trong những loại mỹ phẩm chăm sóc da quan trọng, đặc biệt cho làn da khô. Ích lợi của kem dưỡng ẩm hẳn các bạn cũng đều biết, nhưng nên mua loại kem dưỡng ẩm nào, hay nên sử dụng kem dưỡng ẩm khi nào, có lẽ không ai trong chúng ta cũng nắm rõ. Elle sẽ giúp bạn trả lời những câu hỏi quan trọng này.kem dưỡng ẩm', 'Vì da mặt thường mỏng và nhạy cảm, vì vậy bạn nên sử dụng kem dưỡng ẩm dành cho da mặt thay vì dùng kem dưỡng ẩm toàn thân. Luôn nhớ mua loại kem dưỡng ẩm dán nhãn “không gây bít lỗ chân lông” vì các dưỡng chất trong loại kem này sẽ không làm tắc nghẽn lỗ chân lông của bạn. Và tất nhiên, luôn chọn loại kem phù hợp với loại da của mình.', 'Victoria’s Secret là một nhãn hiệu nội y nổi tiếng với show thời trang thường niên luôn thu hút được sự quan tâm của hàng chục triệu người trên toàn thế giới. Dòng mỹ phẩm và nước hoa mang tên Victoria’s Secret cũng đầy gợi cảm như các thiên thần của họ trên sàn catwalk.', 8, 1),
(50, 47, 1, 1, 1, 2, 'Sơn môi hương Socola', 350000, 'Public/image/13.jpg', 'Public/image/13_1.jpg', 'Public/image/13_2.jpg', 'Sữa tắm Sparkling Citrus Luscious Crush – Victoria’s Secret mang đến sức sống căng tràn và vẻ mịn màng tươi trẻ cho làn da nhờ chiết xuất từ quýt và những loài hoa thơm mê đắm.  Các hạt vitamin C nhẹ nhàng làm sạch và nuôi dưỡng làn da giúp cho làn da mịn màng, mềm mại và không kém phần quyến rũ. Hãy đánh thức vẻ đẹp của làn da bạn ngay từ bây giờ!.', 'dưỡng ẩm đang trở thành một trong những loại mỹ phẩm chăm sóc da quan trọng, đặc biệt cho làn da khô. Ích lợi của kem dưỡng ẩm hẳn các bạn cũng đều biết, nhưng nên mua loại kem dưỡng ẩm nào, hay nên sử dụng kem dưỡng ẩm khi nào, có lẽ không ai trong chúng ta cũng nắm rõ. Elle sẽ giúp bạn trả lời những câu hỏi quan trọng này.kem dưỡng ẩm', 'Vì da mặt thường mỏng và nhạy cảm, vì vậy bạn nên sử dụng kem dưỡng ẩm dành cho da mặt thay vì dùng kem dưỡng ẩm toàn thân. Luôn nhớ mua loại kem dưỡng ẩm dán nhãn “không gây bít lỗ chân lông” vì các dưỡng chất trong loại kem này sẽ không làm tắc nghẽn lỗ chân lông của bạn. Và tất nhiên, luôn chọn loại kem phù hợp với loại da của mình.', 'Victoria’s Secret là một nhãn hiệu nội y nổi tiếng với show thời trang thường niên luôn thu hút được sự quan tâm của hàng chục triệu người trên toàn thế giới. Dòng mỹ phẩm và nước hoa mang tên Victoria’s Secret cũng đầy gợi cảm như các thiên thần của họ trên sàn catwalk.', 1, 1),
(51, 8, 1, 1, 3, 5, 'Sửa rửa mặt trắng mịn thơm', 180000, 'Public/image/56_2.jpg', 'Public/image/56_1.jpg', 'Public/image/56.jpg', 'bạn có làn da nhạy cảm, hãy tìm một loại kem dưỡng ẩm có nhãn không gây dị ứng. Nếu bạn có làn da nhờn, kem dưỡng ẩm không chứa dầu sẽ là lựa chọn tối ưu, và nếu bạn có làn da khô, kem dưỡng ẩm giàu chất dưỡng ẩm sẽ là tốt nhất. Nhưng làn da của bạn là da tổng hợp, một loại kem dưỡng ẩm không chứa dầu cho toàn bộ khuôn mặt của bạn và chấm khu vực khô hơn với một loại kem giàu chất dưỡng ẩm sẽ là tốt nhất. Hãy nhớ rằng bạn có thể cần kem dưỡng ẩm nhẹ vào mùa hè, và thuốc mỡ trong mùa đông hay kem dưỡng ẩm màu đông.', 'Kem dưỡng ẩm đang trở thành một trong những loại mỹ phẩm chăm sóc da quan trọng, đặc biệt cho làn da khô. Ích lợi của kem dưỡng ẩm hẳn các bạn cũng đều biết, nhưng nên mua loại kem dưỡng ẩm nào, hay nên sử dụng kem dưỡng ẩm khi nào, có lẽ không ai trong chúng ta cũng nắm rõ. Elle sẽ giúp bạn trả lời những câu hỏi quan trọng này.kem dưỡng ẩm', 'Vì da mặt thường mỏng và nhạy cảm, vì vậy bạn nên sử dụng kem dưỡng ẩm dành cho da mặt thay vì dùng kem dưỡng ẩm toàn thân. Luôn nhớ mua loại kem dưỡng ẩm dán nhãn “không gây bít lỗ chân lông” vì các dưỡng chất trong loại kem này sẽ không làm tắc nghẽn lỗ chân lông của bạn. Và tất nhiên, luôn chọn loại kem phù hợp với loại da của mình.', 'Victoria’s Secret là một nhãn hiệu nội y nổi tiếng với show thời trang thường niên luôn thu hút được sự quan tâm của hàng chục triệu người trên toàn thế giới. Dòng mỹ phẩm và nước hoa mang tên Victoria’s Secret cũng đầy gợi cảm như các thiên thần của họ trên sàn catwalk.', 1, 1),
(52, 43, 1, 1, 1, 19, 'Kem chống nắng mùa hè', 50000, 'Public/image/29.jpg', 'Public/image/23.jpg', 'Public/image/31.jpg', 'bạn có làn da nhạy cảm, hãy tìm một loại kem dưỡng ẩm có nhãn không gây dị ứng. Nếu bạn có làn da nhờn, kem dưỡng ẩm không chứa dầu sẽ là lựa chọn tối ưu, và nếu bạn có làn da khô, kem dưỡng ẩm giàu chất dưỡng ẩm sẽ là tốt nhất. Nhưng làn da của bạn là da tổng hợp, một loại kem dưỡng ẩm không chứa dầu cho toàn bộ khuôn mặt của bạn và chấm khu vực khô hơn với một loại kem giàu chất dưỡng ẩm sẽ là tốt nhất. Hãy nhớ rằng bạn có thể cần kem dưỡng ẩm nhẹ vào mùa hè, và thuốc mỡ trong mùa đông hay kem dưỡng ẩm màu đông.', 'Kem dưỡng ẩm đang trở thành một trong những loại mỹ phẩm chăm sóc da quan trọng, đặc biệt cho làn da khô. Ích lợi của kem dưỡng ẩm hẳn các bạn cũng đều biết, nhưng nên mua loại kem dưỡng ẩm nào, hay nên sử dụng kem dưỡng ẩm khi nào, có lẽ không ai trong chúng ta cũng nắm rõ. Elle sẽ giúp bạn trả lời những câu hỏi quan trọng này.kem dưỡng ẩm', 'Lấy 1 lượng sản phẩm vừa đủ thoa đều lên cơ thể, massage nhẹ nhàng  Tắm sạch lại với nước', 'Victoria’s Secret là một nhãn hiệu nội y nổi tiếng với show thời trang thường niên luôn thu hút được sự quan tâm của hàng chục triệu người trên toàn thế giới. Dòng mỹ phẩm và nước hoa mang tên Victoria’s Secret cũng đầy gợi cảm như các thiên thần của họ trên sàn catwalk.', 6, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sukien`
--

CREATE TABLE `sukien` (
  `ID` int(11) NOT NULL,
  `tenSK` varchar(200) DEFAULT NULL,
  `ngayBD` text DEFAULT NULL,
  `ngayKT` text DEFAULT NULL,
  `noiDung` text DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sukien`
--

INSERT INTO `sukien` (`ID`, `tenSK`, `ngayBD`, `ngayKT`, `noiDung`, `image`) VALUES
(64, 'Merry Christmas', '2022-11-16', '2022-11-18', 'Tự tin với vẻ đẹp cùng với những sản phẩm đến từ shop', 'Public/image/SuKien/1.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `ID` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `passwords` varchar(200) DEFAULT NULL,
  `role` varchar(50) NOT NULL,
  `checktk` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`ID`, `email`, `passwords`, `role`, `checktk`, `status`) VALUES
(1, 'ADMIN', 'ADMIN', 'Admin', 0, 0),
(5, 'admin12@gmail.com', '$2y$10$r0JxBEtacoLqRFV8OgOnXumX6QWUUD6Lm03A.SQNf6/', 'user', 0, 1),
(6, 'admin123@gmail.com', '37971', 'user', 0, 0),
(25, 'bikunte1152151@gmail.com', '$2y$10$.ZZir3IALTvkNoawg.cjRuURTfyDgqDe/uag9/tPgwjo.gM2/Take', 'user', 0, 0),
(32, 'bikunte15151@gmail.com', '$2y$10$h32Yq7lE9L.z2X3/D1rqHuLPdz4oKDF8Qj.iTEOUcAZJ7bVczzWMS', 'user', 0, 0),
(33, 'Kawasakisga@gmail.com', '$2y$10$iZNkMr5cwKabrXG2LV6EKudIH3Jtudt5iJNEgYFMR.eICIr4e5Lhi', 'Admin', 6, 0),
(34, 'kawasakisga2@gmail.com', '12479', 'user', 4, 0),
(35, 'kawasakisga3@gmail.com', '$2y$10$6UTR6YZ7d/iqImIGxlf3euJu5zKhlztA11QQx.1OohSFSvVI3w1lq', 'Admin', 0, 1),
(36, 'bikunte5@gmail.com', '$2y$10$mh5BoWvOhTYelzBAMDH4XuVHvSQrOxCbUBRQRLMSyjksfrH0PLiiS', 'user', 0, 1),
(37, 'bikunte6@gmail.com', '$2y$10$gBjVQa7ouSSp2Zqsc5e0I.bY.aBwt/TyOh74i9ZcwyMJiyJfd/2Ke', 'user', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `ID` int(11) NOT NULL,
  `tenTL` varchar(100) DEFAULT NULL,
  `Loai` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`ID`, `tenTL`, `Loai`) VALUES
(2, 'Bông tẩy trang', '0'),
(7, 'Dầu tẩy trang', '0'),
(8, 'Sữa rửa mặt', '0'),
(9, 'Tẩy da chết', '0'),
(10, 'Dưỡng mắt', '1'),
(11, 'Dưỡng ẩm', '1'),
(12, 'Mặt nạ dưỡng', '1'),
(14, 'Xịt khoáng', '1'),
(15, 'Mặt nạ giấy', '2'),
(16, 'Mặt nạ ngủ', '2'),
(40, 'Mặt nạ rửa', '2'),
(41, 'Mặt nạ môi', '2'),
(42, 'Mặt nạ mắt', '2'),
(43, 'Kem chống nắng', '3'),
(44, 'Phấn chống nắng', '3'),
(45, 'Xịt chống nắng', '3'),
(46, 'Phấn phũ da', '3'),
(47, 'Sơn môi', '3');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `ID` int(11) NOT NULL,
  `title` varchar(250) DEFAULT NULL,
  `date_at` date DEFAULT NULL,
  `content` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `category` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`ID`, `title`, `date_at`, `content`, `image`, `category`) VALUES
(40, 'DƯỠNG ẨM ĐÚNG CÁCH CHO DA', '2022-11-30', '“Dưỡng ẩm cho da” là cụm từ rất phổ biến. Nếu bạn gõ cụm từ “làm thế nào để dưỡng\r\n                                        ẩm” cho ra đến 56 triệu kết quả. Điều này chứng tỏ có rất nhiều người vẫn còn\r\n                                        lúng túng...', '//file.hstatic.net/200000259653/article/kem-lot-khoang-co-nhu-innisfree_f1f69d5c34814e858caad96982c228bc_grande.jpg', 1),
(41, 'DƯỠNG ẨM ĐÚNG CÁCH CHO DA', '2022-11-30', '“Dưỡng ẩm cho da” là cụm từ rất phổ biến. Nếu bạn gõ cụm từ “làm thế nào để dưỡng\r\n                                        ẩm” cho ra đến 56 triệu kết quả. Điều này chứng tỏ có rất nhiều người vẫn còn\r\n                                        lúng túng...', '//file.hstatic.net/200000259653/article/kem-duong-danh-cho-da-mat-innisf_b946cb9a5dbd49b591b1a9e1fbc0b59c_grande.jpg', 1),
(42, '8 bước vàng để có được làn da chuẩn mực như sao Hàn', '2022-12-01', 'Primer và Makeup Base đều là sản phẩm lót trang điểm giúp bảo vệ bề mặt da, ngăn ngừa tình trạng phấn trang điểm len lỏi vào lỗ chân lông...', '//file.hstatic.net/1000187239/article/tt5_large.jpg', 2),
(43, '8 bước vàng để có được làn da chuẩn mực như sao Hàn', '2022-12-01', 'Primer và Makeup Base đều là sản phẩm lót trang điểm giúp bảo vệ bề mặt da, ngăn ngừa tình trạng phấn trang điểm len lỏi vào lỗ chân lông...', '//file.hstatic.net/1000187239/article/tt4_95e8fe0045584959b282a3381d3544f1f_large.jpg', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `xuatxu`
--

CREATE TABLE `xuatxu` (
  `ID` int(11) NOT NULL,
  `tenSX` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `xuatxu`
--

INSERT INTO `xuatxu` (`ID`, `tenSX`) VALUES
(2, 'Hàn Quốc'),
(4, 'Nga'),
(5, 'Hoa Kỳ'),
(6, 'Nhật Bản'),
(8, 'Pháp'),
(19, 'Việt Nam');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDKH` (`IDKH`),
  ADD KEY `IDSP` (`IDSP`);

--
-- Chỉ mục cho bảng `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDDH` (`IDDH`);

--
-- Chỉ mục cho bảng `combo`
--
ALTER TABLE `combo`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `danhsachyeuthich`
--
ALTER TABLE `danhsachyeuthich`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDKH` (`IDKH`),
  ADD KEY `IDSP` (`IDSP`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDKH` (`IDKH`);

--
-- Chỉ mục cho bảng `giamgia`
--
ALTER TABLE `giamgia`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDSK` (`IDSK`),
  ADD KEY `IDSP` (`IDSP`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDKH` (`IDKH`),
  ADD KEY `IDSP` (`IDSP`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDTK` (`IDTK`);

--
-- Chỉ mục cho bảng `kichthuoc`
--
ALTER TABLE `kichthuoc`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `lichsubanhang`
--
ALTER TABLE `lichsubanhang`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDKH` (`IDKH`),
  ADD KEY `IDSP` (`IDSP`);

--
-- Chỉ mục cho bảng `magiam`
--
ALTER TABLE `magiam`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDSK` (`IDSK`);

--
-- Chỉ mục cho bảng `mausac`
--
ALTER TABLE `mausac`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDLoai` (`IDLoai`),
  ADD KEY `IDBrand` (`IDBrand`),
  ADD KEY `IDSize` (`IDSize`),
  ADD KEY `IDMau` (`IDMau`),
  ADD KEY `IDSX` (`IDSX`);

--
-- Chỉ mục cho bảng `sukien`
--
ALTER TABLE `sukien`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `xuatxu`
--
ALTER TABLE `xuatxu`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=265;

--
-- AUTO_INCREMENT cho bảng `brand`
--
ALTER TABLE `brand`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=275;

--
-- AUTO_INCREMENT cho bảng `combo`
--
ALTER TABLE `combo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `danhsachyeuthich`
--
ALTER TABLE `danhsachyeuthich`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=559;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT cho bảng `giamgia`
--
ALTER TABLE `giamgia`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1839;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `kichthuoc`
--
ALTER TABLE `kichthuoc`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `lichsubanhang`
--
ALTER TABLE `lichsubanhang`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT cho bảng `magiam`
--
ALTER TABLE `magiam`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `mausac`
--
ALTER TABLE `mausac`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT cho bảng `sukien`
--
ALTER TABLE `sukien`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `theloai`
--
ALTER TABLE `theloai`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT cho bảng `xuatxu`
--
ALTER TABLE `xuatxu`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`IDKH`) REFERENCES `khachhang` (`ID`),
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`IDSP`) REFERENCES `sanpham` (`ID`);

--
-- Các ràng buộc cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`IDDH`) REFERENCES `donhang` (`ID`);

--
-- Các ràng buộc cho bảng `danhsachyeuthich`
--
ALTER TABLE `danhsachyeuthich`
  ADD CONSTRAINT `danhsachyeuthich_ibfk_1` FOREIGN KEY (`IDKH`) REFERENCES `khachhang` (`ID`),
  ADD CONSTRAINT `danhsachyeuthich_ibfk_2` FOREIGN KEY (`IDSP`) REFERENCES `sanpham` (`ID`);

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`IDKH`) REFERENCES `khachhang` (`ID`);

--
-- Các ràng buộc cho bảng `giamgia`
--
ALTER TABLE `giamgia`
  ADD CONSTRAINT `giamgia_ibfk_1` FOREIGN KEY (`IDSK`) REFERENCES `sukien` (`ID`),
  ADD CONSTRAINT `giamgia_ibfk_2` FOREIGN KEY (`IDSP`) REFERENCES `sanpham` (`ID`);

--
-- Các ràng buộc cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_ibfk_1` FOREIGN KEY (`IDKH`) REFERENCES `khachhang` (`ID`),
  ADD CONSTRAINT `giohang_ibfk_2` FOREIGN KEY (`IDSP`) REFERENCES `sanpham` (`ID`);

--
-- Các ràng buộc cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD CONSTRAINT `khachhang_ibfk_1` FOREIGN KEY (`IDTK`) REFERENCES `taikhoan` (`ID`);

--
-- Các ràng buộc cho bảng `lichsubanhang`
--
ALTER TABLE `lichsubanhang`
  ADD CONSTRAINT `lichsubanhang_ibfk_1` FOREIGN KEY (`IDKH`) REFERENCES `khachhang` (`ID`),
  ADD CONSTRAINT `lichsubanhang_ibfk_2` FOREIGN KEY (`IDSP`) REFERENCES `sanpham` (`ID`);

--
-- Các ràng buộc cho bảng `magiam`
--
ALTER TABLE `magiam`
  ADD CONSTRAINT `magiam_ibfk_1` FOREIGN KEY (`IDSK`) REFERENCES `sukien` (`ID`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`IDLoai`) REFERENCES `theloai` (`ID`),
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`IDBrand`) REFERENCES `brand` (`ID`),
  ADD CONSTRAINT `sanpham_ibfk_3` FOREIGN KEY (`IDSize`) REFERENCES `kichthuoc` (`ID`),
  ADD CONSTRAINT `sanpham_ibfk_4` FOREIGN KEY (`IDMau`) REFERENCES `mausac` (`ID`),
  ADD CONSTRAINT `sanpham_ibfk_5` FOREIGN KEY (`IDSX`) REFERENCES `xuatxu` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
