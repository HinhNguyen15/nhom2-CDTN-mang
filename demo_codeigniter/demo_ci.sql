-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 13, 2020 lúc 06:05 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `demo_ci`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quyentruycap`
--

CREATE TABLE `quyentruycap` (
  `id` int(11) NOT NULL,
  `name` varchar(2047) NOT NULL,
  `is_news_list` tinyint(1) NOT NULL DEFAULT 1,
  `is_news_admin_list` tinyint(1) NOT NULL DEFAULT 0,
  `is_user_admin_list` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `quyentruycap`
--

INSERT INTO `quyentruycap` (`id`, `name`, `is_news_list`, `is_news_admin_list`, `is_user_admin_list`) VALUES
(1, 'admin', 1, 1, 1),
(2, 'Người dùng', 1, 0, 0),
(3, 'Biên tâp viên', 1, 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `taikhoan` varchar(2047) NOT NULL,
  `matkhau` varchar(2047) NOT NULL,
  `anh` text NOT NULL,
  `phanquyen` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `taikhoan`, `matkhau`, `anh`, `phanquyen`) VALUES
(1, 'linh', '25d55ad283aa400af464c76d713c07ad', 'sach2.jpg', 2),
(2, 'admin', '25d55ad283aa400af464c76d713c07ad', 'sach2.jpg', 1),
(3, 'admin123', '25d55ad283aa400af464c76d713c07ad', 'sach2.jpg', 3),
(4, 'user', '25d55ad283aa400af464c76d713c07ad', 'sach2.jpg', 2),
(5, 'user123', '12345678', '', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `id` int(11) NOT NULL,
  `tieude` varchar(2047) NOT NULL,
  `noidung` text NOT NULL,
  `anh` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`id`, `tieude`, `noidung`, `anh`) VALUES
(1, '123okecheck insert news', '    success - check insert news	', 'sach2.jpg'),
(4, 'adleirg', 'asrgryhj', ''),
(6, 'adleirg123445', 'asrgryhjawekfuiyw3ouighlj1', ''),
(7, 'linh 123456', 'DDaof Thij Myx Linh rgryht', ''),
(9, 'Chuyeen ddeef ', 'chuyeen ddeef toots nghieepj', ''),
(14, 'check insert news', 'success - check insert news', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `quyentruycap`
--
ALTER TABLE `quyentruycap`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `quyentruycap`
--
ALTER TABLE `quyentruycap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
