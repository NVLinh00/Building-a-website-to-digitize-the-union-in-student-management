-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 16, 2021 lúc 05:23 AM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `hph`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dangnhap`
--

CREATE TABLE `dangnhap` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `dangnhap`
--

INSERT INTO `dangnhap` (`id`, `name`, `password`) VALUES
(8, 'b1812280', '2e25653939c31b81584548b9631ce77a'),
(9, 'b123456', '2e25653939c31b81584548b9631ce77a'),
(10, '123456', '0f34a4d93d5a8812c1bd7545a0ae9f96'),
(11, 'nvlinh', '2e25653939c31b81584548b9631ce77a'),
(12, 'b1812294', '2e25653939c31b81584548b9631ce77a'),
(13, 'admin', '2e25653939c31b81584548b9631ce77a');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diem`
--

CREATE TABLE `diem` (
  `id_diem` varchar(20) NOT NULL,
  `ten_diem` varchar(50) DEFAULT NULL,
  `so_diem` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `diem`
--

INSERT INTO `diem` (`id_diem`, `ten_diem`, `so_diem`) VALUES
('1001', 'NTVT', 50),
('1002', 'Vệ Sinh', 50),
('1003', 'KT Miệng 7-8đ', 25),
('1004', 'KT Miệng 9-10đ', 50),
('1005', 'Chào cờ', 50);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diemthuong`
--

CREATE TABLE `diemthuong` (
  `id` int(11) NOT NULL,
  `id_dt` varchar(20) NOT NULL,
  `id_hs` varchar(20) NOT NULL,
  `id_lop` char(4) NOT NULL,
  `ngay` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `diemthuong`
--

INSERT INTO `diemthuong` (`id`, `id_dt`, `id_hs`, `id_lop`, `ngay`) VALUES
(4, '1004', '190257', '11A1', '2021-01-07'),
(5, '1002', '190257', '11A1', '2021-01-07'),
(6, '1003', '190257', '11A1', '2021-01-07'),
(7, '1004', '190257', '11A1', '2021-01-07'),
(12, '1001', '190261', '10A1', '2021-01-05'),
(13, '1002', '190261', '10A1', '2021-01-05'),
(14, '1003', '190261', '10A1', '2021-01-05'),
(16, '1003', '190305', '10A1', '2021-01-05'),
(18, '1001', '190271', '10A2', '2021-01-06'),
(19, '1002', '190271', '10A2', '2021-01-06'),
(20, '1003', '190271', '10A2', '2021-01-06'),
(21, '1003', '190284', '11A1', '2021-01-05'),
(26, '1002', '190313', '12A1', '2021-01-30'),
(27, '1003', '190313', '12A1', '2021-01-30'),
(28, '1004', '190313', '12A1', '2021-01-30'),
(29, '1001', '190313', '12A1', '2021-01-30'),
(30, '1002', '190313', '12A1', '2021-01-30'),
(31, '1003', '190313', '12A1', '2021-01-30'),
(33, '1001', '190318', '11A2', '2021-01-04'),
(34, '1002', '190318', '11A2', '2021-01-04'),
(35, '1003', '190318', '11A2', '2021-01-04'),
(36, '1004', '190318', '11A2', '2021-01-04'),
(37, '1001', '190289', '12A1', '2021-01-09'),
(38, '1002', '190289', '12A1', '2021-01-09'),
(39, '1003', '190289', '12A1', '2021-01-09'),
(40, '1004', '190289', '12A1', '2021-01-09'),
(41, '1001', '190316', '12A2', '2021-01-07'),
(42, '1003', '190316', '12A2', '2021-01-07'),
(43, '1004', '190316', '12A2', '2021-01-07'),
(44, '1001', '190282', '10A1', '2021-01-06'),
(45, '1002', '190282', '10A1', '2021-01-06'),
(46, '1003', '190282', '10A1', '2021-01-06'),
(47, '1004', '190282', '10A1', '2021-01-06');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hs`
--

CREATE TABLE `hs` (
  `id_hs` char(20) NOT NULL,
  `ten` varchar(30) DEFAULT NULL,
  `ngaysinh` varchar(30) DEFAULT NULL,
  `gioitinh` varchar(3) DEFAULT NULL,
  `id_lop` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hs`
--

INSERT INTO `hs` (`id_hs`, `ten`, `ngaysinh`, `gioitinh`, `id_lop`) VALUES
('190021', 'Nguyễn Văn Linh', '2000-07-06', 'Nam', '12A2'),
('190164', 'Ngô Thị Hải Yến', '2000-07-07', 'Nữ', '10A2'),
('190255', 'Phạm Hà Linh', '2000-02-07', 'Nữ', '10A1'),
('190256', 'Phạm Diệu Linh', '2000-03-08', 'Nam', '10A2'),
('190257', 'Đỗ Quân Anh', '2000-04-11', 'Nữ', '11A1'),
('190258', 'Đỗ Thanh Phong', '2000-05-12', 'Nam', '11A2'),
('190259', 'Tạ Quang Minh', '2000-02-08', 'Nam', '12A1'),
('190260', 'Trương Minh Đức', '2000-03-09', 'Nam', '12A2'),
('190261', 'Trần Khánh Chi', '2000-04-12', 'Nữ', '10A1'),
('190271', 'Phạm Văn Tuấn', '2000-02-11', 'Nam', '10A2'),
('190272', 'Hoàng Thị Hoa', '2000-03-12', 'Nữ', '11A1'),
('190273', 'Nguyễn Phương Thùy', '2000-04-15', 'Nữ', '11A2'),
('190274', 'Hoàng Thái Hà', '2000-05-16', 'Nam', '12A1'),
('190275', 'Vũ Văn Trọng', '2000-02-12', 'Nam', '12A2'),
('190276', 'Tạ Thị Nhung', '2000-03-13', 'Nữ', '10A1'),
('190277', 'Bùi Thu Phương', '2000-04-16', 'Nữ', '10A2'),
('190278', 'Nguyễn Thị Khuyên', '2000-05-17', 'Nữ', '11A1'),
('190279', 'Đào Thị Thu Hương', '2000-02-13', 'Nữ', '11A2'),
('190280', 'Dương Thu Huyền', '2000-03-14', 'Nữ', '12A1'),
('190281', 'Trần Thị Tâm', '2000-04-17', 'Nữ', '12A2'),
('190282', 'Nguyễn Thu Hiền', '2000-05-18', 'Nữ', '10A1'),
('190283', 'Lại Mai Phương', '2000-02-14', 'Nữ', '10A2'),
('190284', 'Nguyễn Phương Thảo', '2000-03-15', 'Nữ', '11A1'),
('190285', 'Hoàng Thị Hà', '2000-04-18', 'Nữ', '11A2'),
('190286', 'Nguyễn Thị Ngọc', '2000-05-19', 'Nữ', '12A1'),
('190287', 'Tran Thanh Hiep', '2000-10-15', 'Nam', '10A1'),
('190288', 'Le Cong Trieu', '2000-11-20', 'Nam', '11A2'),
('190289', 'Nguyen Thi Kieu', '2000-12-10', 'Nữ', '12A1'),
('190290', 'Tran Bach Lan', '2000-10-16', 'Nữ', '10A2'),
('190291', 'Nguyen Thi My Tuyen', '2000-11-21', 'Nữ', '11A1'),
('190292', 'Le Thi Diem Ai', '2000-12-11', 'Nữ', '12A2'),
('190293', 'Truong Vu Linh', '2000-10-17', 'Nam', '10A1'),
('190294', 'Phan Thuy An', '2000-11-22', 'Nữ', '11A2'),
('190296', 'Nguyen Thi Lung', '2000-10-18', 'Nữ', '10A2'),
('190297', 'Nguyen Thi Ngoc Anh', '2000-11-23', 'Nữ', '11A1'),
('190298', 'Le Hoang Hai', '2000-12-13', 'Nam', '12A2'),
('190299', 'Ly Yen Minh', '2000-10-19', 'Nữ', '10A1'),
('190300', 'Tran Hoang Minh', '2000-11-24', 'Nam', '11A2'),
('190301', 'Lam Quoc Nam', '2000-12-14', 'Nam', '12A1'),
('190302', 'Truong Huynh Ngoc', '2000-10-20', 'Nữ', '10A2'),
('190303', 'Tran Thi Ngoc Quyen', '2000-11-25', 'Nữ', '11A1'),
('190304', 'Le Thanh Tam', '2000-12-15', 'Nam', '12A2'),
('190305', 'Bui Van Dang', '2000-10-21', 'Nam', '10A1'),
('190306', 'Thai Thanh Duợc', '2000-11-26', 'Nam', '11A2'),
('190308', 'Nguyen Quoc Thai', '2000-10-22', 'Nam', '10A2'),
('190309', 'Pham Thu Thao', '2000-11-27', 'Nữ', '11A1'),
('190310', 'Le Thi My Hanh', '2000-12-17', 'Nữ', '12A2'),
('190311', 'Tran Huu Thong', '2000-10-23', 'Nam', '10A1'),
('190312', 'Nguyen Kim Hang', '2000-11-28', 'Nữ', '11A2'),
('190313', 'Vo Thi Thu', '2000-12-18', 'Nữ', '12A1'),
('190314', 'Huynh Thi Anh Hong', '2000-10-24', 'Nữ', '10A2'),
('190315', 'Nguyen Minh Tri', '2000-11-29', 'Nam', '11A1'),
('190316', 'Vo Viet Ngan', '2000-12-19', 'Nam', '12A2'),
('190317', 'Huynh Thi Cam Van', '2000-10-25', 'Nữ', '10A1'),
('190318', 'Tran Le Vinh', '2000-11-30', 'Nam', '11A2'),
('190319', 'Dao Thi Hong Xuyen', '2000-12-20', 'Nữ', '12A1'),
('190320', 'Nguyen Thuy Linh', '2000-10-26', 'Nữ', '10A2'),
('190322', 'Pham Minh Nga', '2000-12-21', 'Nữ', '12A2'),
('190323', 'Nguyen Van Ay', '2000-10-27', 'Nam', '10A1'),
('190324', 'Nguyen Thanh Thuy', '2000-11-02', 'Nữ', '11A2'),
('190325', 'Tran Thi Thuy Hang', '2000-12-22', 'Nữ', '12A1'),
('190326', 'Tran Hoang Dung', '2000-10-28', 'Nam', '10A2'),
('190327', 'Nguyen Thi My Duyen', '2000-11-03', 'Nữ', '11A1'),
('190328', 'Tran Hong Duc', '2000-12-23', 'Nam', '12A2'),
('190329', 'Tran Thi Nhung Em', '2000-10-29', 'Nữ', '10A1'),
('190330', 'Phan Ha', '2000-11-04', 'Nữ', '11A2'),
('190331', 'Truong Thi Kim Hai', '2000-12-24', 'Nữ', '12A1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lop`
--

CREATE TABLE `lop` (
  `id_lop` varchar(10) NOT NULL,
  `khoi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `lop`
--

INSERT INTO `lop` (`id_lop`, `khoi`) VALUES
('10A1', 10),
('10A2', 10),
('11A1', 11),
('11A2', 11),
('12A1', 12),
('12A2', 12);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vipham`
--

CREATE TABLE `vipham` (
  `id` int(11) NOT NULL,
  `id_vp` varchar(20) NOT NULL,
  `id_hs` varchar(20) NOT NULL,
  `id_lop` char(4) NOT NULL,
  `ngayvp` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `vipham`
--

INSERT INTO `vipham` (`id`, `id_vp`, `id_hs`, `id_lop`, `ngayvp`) VALUES
(1, '101', '190021', '12A2', '2021-01-07'),
(14, '101', '190255', '10A1', '2021-01-07'),
(15, '102', '190255', '10A1', '2021-01-07'),
(16, '105', '190255', '10A1', '2021-01-07'),
(18, '102', '190276', '10A1', '2021-01-07'),
(19, '103', '190276', '10A1', '2021-01-07'),
(20, '101', '190277', '10A2', '2021-01-07'),
(21, '103', '190277', '10A2', '2021-01-07'),
(22, '105', '190277', '10A2', '2021-01-07'),
(23, '102', '190272', '11A1', '2021-01-05'),
(24, '103', '190272', '11A1', '2021-01-05'),
(25, '101', '190273', '11A2', '2021-01-08'),
(26, '102', '190273', '11A2', '2021-01-08'),
(27, '103', '190273', '11A2', '2021-01-08');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vp`
--

CREATE TABLE `vp` (
  `id_vp` varchar(20) NOT NULL,
  `ten_vp` varchar(60) NOT NULL,
  `diem` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `vp`
--

INSERT INTO `vp` (`id_vp`, `ten_vp`, `diem`) VALUES
('101', 'Đi trễ', -50),
('102', 'Không thuộc bài', -50),
('103', 'Nói chuyện', -25),
('104', 'Đánh nhau', -100),
('105', 'KT Miệng <5đ', -50);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `dangnhap`
--
ALTER TABLE `dangnhap`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `diem`
--
ALTER TABLE `diem`
  ADD PRIMARY KEY (`id_diem`);

--
-- Chỉ mục cho bảng `diemthuong`
--
ALTER TABLE `diemthuong`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_dt` (`id_dt`),
  ADD KEY `id_hs` (`id_hs`),
  ADD KEY `id_lop` (`id_lop`);

--
-- Chỉ mục cho bảng `hs`
--
ALTER TABLE `hs`
  ADD PRIMARY KEY (`id_hs`),
  ADD KEY `id_lop` (`id_lop`);

--
-- Chỉ mục cho bảng `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`id_lop`);

--
-- Chỉ mục cho bảng `vipham`
--
ALTER TABLE `vipham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_vp` (`id_vp`),
  ADD KEY `id_hs` (`id_hs`),
  ADD KEY `id_lop` (`id_lop`);

--
-- Chỉ mục cho bảng `vp`
--
ALTER TABLE `vp`
  ADD PRIMARY KEY (`id_vp`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `dangnhap`
--
ALTER TABLE `dangnhap`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `diemthuong`
--
ALTER TABLE `diemthuong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT cho bảng `vipham`
--
ALTER TABLE `vipham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `diemthuong`
--
ALTER TABLE `diemthuong`
  ADD CONSTRAINT `diemthuong_ibfk_1` FOREIGN KEY (`id_dt`) REFERENCES `diem` (`id_diem`),
  ADD CONSTRAINT `diemthuong_ibfk_2` FOREIGN KEY (`id_hs`) REFERENCES `hs` (`id_hs`),
  ADD CONSTRAINT `diemthuong_ibfk_3` FOREIGN KEY (`id_lop`) REFERENCES `lop` (`id_lop`);

--
-- Các ràng buộc cho bảng `hs`
--
ALTER TABLE `hs`
  ADD CONSTRAINT `hs_ibfk_1` FOREIGN KEY (`id_lop`) REFERENCES `lop` (`id_lop`);

--
-- Các ràng buộc cho bảng `vipham`
--
ALTER TABLE `vipham`
  ADD CONSTRAINT `vipham_ibfk_1` FOREIGN KEY (`id_vp`) REFERENCES `vp` (`id_vp`),
  ADD CONSTRAINT `vipham_ibfk_2` FOREIGN KEY (`id_hs`) REFERENCES `hs` (`id_hs`),
  ADD CONSTRAINT `vipham_ibfk_3` FOREIGN KEY (`id_lop`) REFERENCES `lop` (`id_lop`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
