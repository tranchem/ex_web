-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 15, 2020 lúc 02:16 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `popeyes`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_chi_tiet_don_hang`
--

CREATE TABLE `tbl_chi_tiet_don_hang` (
  `id_don_hang` int(11) NOT NULL,
  `id_san_pham` int(11) NOT NULL,
  `don_gia` float(255,0) DEFAULT NULL,
  `so_luong` int(11) DEFAULT NULL,
  `thanh_tien` float(255,0) DEFAULT NULL,
  `ghi_chu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `tbl_chi_tiet_don_hang`
--

INSERT INTO `tbl_chi_tiet_don_hang` (`id_don_hang`, `id_san_pham`, `don_gia`, `so_luong`, `thanh_tien`, `ghi_chu`) VALUES
(3, 1, 36000, 2, 72000, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danh_muc`
--

CREATE TABLE `tbl_danh_muc` (
  `id_danh_muc` int(11) NOT NULL,
  `ten_danh_muc` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `mo_ta` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `anh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `tbl_danh_muc`
--

INSERT INTO `tbl_danh_muc` (`id_danh_muc`, `ten_danh_muc`, `mo_ta`, `anh`) VALUES
(1, 'Món lẻ', '', 'món lẻ.jpeg'),
(2, 'Món mới', '', 'monmoi.jpg'),
(3, 'Gà giòn cay', '', 'gagioncay.jpg'),
(4, 'Gà giòn không cay', '', 'gagionkcay.jpg'),
(5, 'Gà giòn không xương', '', 'gagionkhongxuong.jpg'),
(6, 'Bơ-gơ', '', 'bogo.jpg'),
(7, 'Hải sản', '', 'haisan.jpg'),
(8, 'Phần ăn gia đình', '', 'phanangiadinh.jpg'),
(9, 'Thức uống và tráng miệng', '', 'douong.jpg'),
(10, 'Combo cơm', '', 'combocom.jpg'),
(11, 'Kid meal', '', 'kid.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_don_hang`
--

CREATE TABLE `tbl_don_hang` (
  `id_don_hang` int(11) NOT NULL,
  `id_khach_hang` int(11) DEFAULT NULL,
  `id_nhan_vien` int(11) DEFAULT NULL,
  `tong_tien` float(255,0) DEFAULT NULL,
  `trang_thai` int(4) DEFAULT 0,
  `ngay_dat` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `tbl_don_hang`
--

INSERT INTO `tbl_don_hang` (`id_don_hang`, `id_khach_hang`, `id_nhan_vien`, `tong_tien`, `trang_thai`, `ngay_dat`) VALUES
(3, 1, NULL, 72000, 0, '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_khach_hang`
--

CREATE TABLE `tbl_khach_hang` (
  `id_khach_hang` int(11) NOT NULL,
  `ten_khach_hang` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `so_dien_thoai` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dia_chi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ghi_chu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mat_khau` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `tbl_khach_hang`
--

INSERT INTO `tbl_khach_hang` (`id_khach_hang`, `ten_khach_hang`, `email`, `so_dien_thoai`, `dia_chi`, `ghi_chu`, `mat_khau`) VALUES
(1, 'trần văn tú', 'tuchem002@gmail.com', '0945320619', 'ngách 12, ngõ 185 chùa láng, đống đa, hà nội', NULL, '123456');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_nhan_vien`
--

CREATE TABLE `tbl_nhan_vien` (
  `id_nhan_vien` int(11) NOT NULL,
  `ten_nhan_vien` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `so_dien_thoai` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `tai_khoan` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `mat_khau` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `tbl_nhan_vien`
--

INSERT INTO `tbl_nhan_vien` (`id_nhan_vien`, `ten_nhan_vien`, `email`, `so_dien_thoai`, `tai_khoan`, `mat_khau`) VALUES
(1, 'mai đức việt', 'sktt1levi99@gmail.com', '0945320619', 'abc', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_san_pham`
--

CREATE TABLE `tbl_san_pham` (
  `id_san_pham` int(11) NOT NULL,
  `ten_san_pham` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `don_gia` float(11,0) DEFAULT NULL,
  `id_danh_muc` int(11) NOT NULL,
  `anh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mo_ta` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `tbl_san_pham`
--

INSERT INTO `tbl_san_pham` (`id_san_pham`, `ten_san_pham`, `don_gia`, `id_danh_muc`, `anh`, `mo_ta`) VALUES
(1, '1 MIẾNG GÀ GIÒN CAY', 36000, 1, 'gà giòn cayy.png', 'Gà giòn Cajun tươi mới được ướp với công thức gia vị Louisiana (cay hoặc không cay), tẩm bột thủ công và rán chín cùng lớp phủ giòn tan đặc trưng của miền Nam nước Mỹ.'),
(2, 'GÀ TẮM NƯỚC MẮM', 40000, 1, 'gà tắm nước mắm.jpg', '1 miếng gà tắm nước mắm'),
(9, '1 MIẾNG GÀ CHÁY TỎI', 40000, 1, '520x390-min.jpg', '1 MIẾNG GÀ CHÁY TỎI'),
(10, '1 MIẾNG GÀ GIÒN KHÔNG CAY', 36000, 1, 'Gà-Giòn-Không-Cay-1-Miếng.png', 'Gà giòn Cajun tươi mới được ướp với công thức gia vị Louisiana (cay hoặc không cay), tẩm bột thủ công và rán chín cùng lớp phủ giòn tan đặc trưng của miền Nam nước Mỹ.'),
(11, '5 MIẾNG GÀ GIÒN KHÔNG SƯƠNG', 75000, 1, '5 MIẾNG GÀ KO XUONG.png', '5 miếng gà không xương + 1 chén sốt blackened/spicy mayo'),
(12, 'BURGER GÀ CAJUN/CREOLE', 54000, 1, 'menu_burger_chicken_1_2.png', '1 Burger gà Cajun (cay) hoặc Creole (không cay)'),
(15, 'COCA LIGHT', 19000, 1, 'cocalight.png', ''),
(16, 'FANTA 390ML', 19000, 1, 'fanta.png', ''),
(17, 'SPRITE 390ML', 19000, 1, 'sprite.png', ''),
(18, 'COMBO GÀ GIÒN KHÔNG XƯƠNG 3 MIẾNG', 69000, 5, '201811292615-combo-3-mieng-ga-ko-xuong.jpg', '3 miếng gà giòn không xương + 1 phần bắp cải trộn (vừa) + 1 sốt chấm tự chọn (Blackened ranch/Spicy mayo) + 1 bánh mật ong + 1 coca'),
(19, 'COMBO GÀ GIÒN KHÔNG XƯƠNG 5 MIẾNG', 89000, 5, '5 MIẾNG GÀ KO XUONG.png', '5 miếng gà giòn không xương + 1 phần bắp cải trộn (vừa) + 1 sốt chấm tự chọn (blackended ranch/ spicy mayo) + 1 bánh mật ong + 1 coca'),
(20, 'BÁNH TART PHÔ MAI', 29000, 9, 'maxresdefault.jpg', 'BÁNH TART PHÔ MAI'),
(21, '4 BÁNH NƯỚNG MẬT ONG', 19000, 9, 'honey_biscuit.png', '4 Bánh Nướng Mật Ong'),
(22, 'COCA 390ML', 19000, 9, 'coca.png', 'Uống thả ga khi dùng tại nhà hàng'),
(23, 'FANTA 390ML', 19000, 9, 'fanta.png', 'Uống thả ga khi dùng tại nhà hàng'),
(24, 'DASANI', 19000, 9, 'P01500_1_l.jpg', ''),
(25, 'COCA LIGHT', 19000, 9, 'cocalight.png', ''),
(26, 'COMBO GÀ CHÁY TỎI - 1 NGƯỜI', 94000, 2, 'combo94k_optimized.jpg', '2 Gà Cháy Tỏi 1 Món ăn kèm (vừa) 1 Bánh Nướng Mật Ong 1 Coca 390ml'),
(27, 'COMBO GÀ CHÁY TỎI – 2 NGƯỜI', 119000, 2, 'combo94k_optimized.jpg', '2 Gà Cháy Tỏi 4 Snack Cá 1 Khoai Tây Nghiền (vừa) 2 Gà Giòn Không Xương'),
(28, 'COMBO GÀ CHÁY TỎI – 3 NGƯỜI', 189000, 2, 'combo189k_optimized.jpg', '2 Gà Cháy Tỏi 3 Gà Giòn Không Xương 3 Snack Cá 1 Khoai Tây Nghiền (vừa) 1 Burger Tôm 3 Coca 390m'),
(29, 'COMBO BURGER GÀ', 72000, 6, 'menu_burger_combo7.png', '1 burger gà Cajun/Creole + 1 phần khoai tây chiên (vừa) + 1 coca'),
(30, 'COMBO BURGER CÁ CAJUN', 72000, 6, 'menu_burger_combo8_1_1.png', '1 burger cá + 1 phần khoai tây chiên (vừa) + 1 coca'),
(31, 'COMBO BURGER TÔM', 63000, 6, 'menu_burger_combo9_1.png', '1 bơ gơ tôm + 1 phần khoai tây chiên (vừa) + 1 coca'),
(32, 'CƠM GÀ GIÒN + CANH ( M1)', 39000, 10, 'CƠM 1.jpg', 'Cơm sốt Gravy + 1 miếng gà giòn cay/không cay + 1 canh súp'),
(33, 'CƠM GÀ GIÒN KHÔNG XƯƠNG + CANH (M2)', 39000, 10, 'm2_2.png', 'Cơm sốt Gravy + 2 miếng Gà Giòn Không Xương + 1 Canh Soup'),
(34, 'CƠM GÀ TẮM NƯỚC MẮM+ BẮP CẢI TRỘN + NƯỚC NGỌT + CANH (M5)...  ', 65000, 10, 'm5.png', 'Cơm sốt Gravy + 1 miếng gà tắm nước mắm + 1 súp + 1 bắp cải trộn ( size vừa) + 1 nước ngọt 390ml'),
(35, 'COMBO GÀ GIÒN CAY (2 MIẾNG)', 84000, 3, 'menu_spicy_combo1_1.png', '2 miếng gà giòn cay + 1 khoai tây chiên (vừa) + 1 bánh nướng mật ong + 1 Coca'),
(36, 'COMBO GÀ GIÒN CAY (3 MIẾNG)', 115000, 3, '3MIENG.png', '3 miếng gà giòn cay + 1 khoai tây chiên (vừa) + 1 bánh nướng mật ong + 1 Coc'),
(37, 'COMBO GÀ TẮM NƯỚC MẮM', 95000, 3, 'M666.png', '2 miếng Gà Tắm Nước Mắm + 1 Món ăn kèm (vừa) + 1 Bánh Nướng Mật Ong + 1 Nước ngọt'),
(38, 'COMBO PHI-LÊ CÁ RÁN', 62000, 7, 'PHILE.png', '1 miếng cá phi lê + 1 chén sốt tartar + 1 phần khoai tây chiên (vừa) + 1 bánh nướng mật ong + 1 Coca'),
(39, 'PHI-LÊ CÁ RÁN', 46000, 7, 'PHILE1.png', '1 miếng phi-lê cá rán + 1 chén sốt tartar'),
(40, 'COMBO KID MEAL 1', 69000, 11, 'KID1.jpg', '1 Burger tôm + Milo 115ml + 1 Đồ chơ'),
(41, 'COMBO KID MEAL 2', 79000, 11, 'M44.jpg', '2 Gà Giòn Không Xương + 2 Fish Nuggest + 1 milo 115ml + 1 Đồ chơi'),
(42, 'COMBO KID MEAL 3', 79000, 11, 'M5566.jpg', '1 Gà giòn + Khoai Tây chiên + 1 milo 115ml + 1 Đồ chơi'),
(43, 'COMBO GÀ GIÒN KHÔNG CAY (2 MIẾNG)', 84000, 4, '12.png', '2 miếng gà giòn không cay + 1 khoai tây nghiền (vừa) + 1 bánh mật ong + 1 Coca'),
(44, 'COMBO GÀ GIÒN KHÔNG CAY (3 MIẾNG)', 115000, 4, '5.png', '3 miếng gà giòn không cay + 1 khoai tây nghiền (vừa) + 1 bánh mật ong + 1 Coca'),
(45, 'COMBO GIA ĐÌNH A', 299000, 8, '34.jpg', '8 gà giòn cay + 1 phần khoai tây nghiền (lớn) + 4 bánh nướng mật ong + 4 coca 390m'),
(46, 'COMBO GIA ĐÌNH B', 299000, 8, '56.jpg', '8 miếng gà không xương + 4 miếng gà giòn cay + 1 phần khoai tây nghiền (lớn) + 4 bánh mật ong + 4 coca 390ml + 1 sốt blackended + 1 sốt spicy mayo');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_chi_tiet_don_hang`
--
ALTER TABLE `tbl_chi_tiet_don_hang`
  ADD PRIMARY KEY (`id_don_hang`,`id_san_pham`) USING BTREE,
  ADD KEY `id_san_pham` (`id_san_pham`) USING BTREE;

--
-- Chỉ mục cho bảng `tbl_danh_muc`
--
ALTER TABLE `tbl_danh_muc`
  ADD PRIMARY KEY (`id_danh_muc`) USING BTREE;

--
-- Chỉ mục cho bảng `tbl_don_hang`
--
ALTER TABLE `tbl_don_hang`
  ADD PRIMARY KEY (`id_don_hang`) USING BTREE,
  ADD KEY `id_khach_hang` (`id_khach_hang`) USING BTREE,
  ADD KEY `id_nhan_vien` (`id_nhan_vien`) USING BTREE;

--
-- Chỉ mục cho bảng `tbl_khach_hang`
--
ALTER TABLE `tbl_khach_hang`
  ADD PRIMARY KEY (`id_khach_hang`) USING BTREE;

--
-- Chỉ mục cho bảng `tbl_nhan_vien`
--
ALTER TABLE `tbl_nhan_vien`
  ADD PRIMARY KEY (`id_nhan_vien`) USING BTREE;

--
-- Chỉ mục cho bảng `tbl_san_pham`
--
ALTER TABLE `tbl_san_pham`
  ADD PRIMARY KEY (`id_san_pham`) USING BTREE,
  ADD KEY `id_danh_muc` (`id_danh_muc`) USING BTREE;

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_danh_muc`
--
ALTER TABLE `tbl_danh_muc`
  MODIFY `id_danh_muc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `tbl_don_hang`
--
ALTER TABLE `tbl_don_hang`
  MODIFY `id_don_hang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_khach_hang`
--
ALTER TABLE `tbl_khach_hang`
  MODIFY `id_khach_hang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_nhan_vien`
--
ALTER TABLE `tbl_nhan_vien`
  MODIFY `id_nhan_vien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_san_pham`
--
ALTER TABLE `tbl_san_pham`
  MODIFY `id_san_pham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_chi_tiet_don_hang`
--
ALTER TABLE `tbl_chi_tiet_don_hang`
  ADD CONSTRAINT `tbl_chi_tiet_don_hang_ibfk_1` FOREIGN KEY (`id_don_hang`) REFERENCES `tbl_don_hang` (`id_don_hang`),
  ADD CONSTRAINT `tbl_chi_tiet_don_hang_ibfk_2` FOREIGN KEY (`id_san_pham`) REFERENCES `tbl_san_pham` (`id_san_pham`);

--
-- Các ràng buộc cho bảng `tbl_don_hang`
--
ALTER TABLE `tbl_don_hang`
  ADD CONSTRAINT `tbl_don_hang_ibfk_1` FOREIGN KEY (`id_khach_hang`) REFERENCES `tbl_khach_hang` (`id_khach_hang`),
  ADD CONSTRAINT `tbl_don_hang_ibfk_2` FOREIGN KEY (`id_nhan_vien`) REFERENCES `tbl_nhan_vien` (`id_nhan_vien`);

--
-- Các ràng buộc cho bảng `tbl_san_pham`
--
ALTER TABLE `tbl_san_pham`
  ADD CONSTRAINT `tbl_san_pham_ibfk_1` FOREIGN KEY (`id_danh_muc`) REFERENCES `tbl_danh_muc` (`id_danh_muc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
