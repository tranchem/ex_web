/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100406
 Source Host           : localhost:3306
 Source Schema         : popeyes

 Target Server Type    : MySQL
 Target Server Version : 100406
 File Encoding         : 65001

 Date: 11/07/2020 16:47:45
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tbl_danh_muc
-- ----------------------------
DROP TABLE IF EXISTS `tbl_danh_muc`;
CREATE TABLE `tbl_danh_muc`  (
  `id_danh_muc` int(11) NOT NULL AUTO_INCREMENT,
  `ten_danh_muc` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mo_ta` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `anh` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_danh_muc`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_danh_muc
-- ----------------------------
INSERT INTO `tbl_danh_muc` VALUES (1, 'Món lẻ', NULL, NULL);
INSERT INTO `tbl_danh_muc` VALUES (2, 'Món mới', NULL, NULL);
INSERT INTO `tbl_danh_muc` VALUES (3, 'Gà giòn cay', NULL, NULL);
INSERT INTO `tbl_danh_muc` VALUES (4, 'Gà giòn không cay', NULL, NULL);
INSERT INTO `tbl_danh_muc` VALUES (5, 'Gà giòn không xương', NULL, NULL);
INSERT INTO `tbl_danh_muc` VALUES (6, 'Bơ-gơ', NULL, NULL);
INSERT INTO `tbl_danh_muc` VALUES (7, 'Hải sản', NULL, NULL);
INSERT INTO `tbl_danh_muc` VALUES (8, 'Phần ăn gia đình', NULL, NULL);
INSERT INTO `tbl_danh_muc` VALUES (9, 'Thức uống và tráng miệng', NULL, NULL);
INSERT INTO `tbl_danh_muc` VALUES (10, 'Combo cơm', NULL, NULL);
INSERT INTO `tbl_danh_muc` VALUES (11, 'Kid meal', NULL, NULL);

-- ----------------------------
-- Table structure for tbl_khach_hang
-- ----------------------------
DROP TABLE IF EXISTS `tbl_khach_hang`;
CREATE TABLE `tbl_khach_hang`  (
  `id_khach_hang` int(11) NOT NULL AUTO_INCREMENT,
  `ten_khach_hang` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `email` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `so_dien_thoai` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `dia_chi` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `ghi_chu` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `mat_khau` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_khach_hang`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for tbl_nhan_vien
-- ----------------------------
DROP TABLE IF EXISTS `tbl_nhan_vien`;
CREATE TABLE `tbl_nhan_vien`  (
  `id_nhan_vien` int(11) NOT NULL AUTO_INCREMENT,
  `ten_nhan_vien` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `so_dien_thoai` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tai_khoan` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mat_khau` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_nhan_vien`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for tbl_san_pham
-- ----------------------------
DROP TABLE IF EXISTS `tbl_san_pham`;
CREATE TABLE `tbl_san_pham`  (
  `id_san_pham` int(11) NOT NULL AUTO_INCREMENT,
  `ten_san_pham` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `don_gia` float(11, 0) NULL DEFAULT NULL,
  `id_danh_muc` int(11) NOT NULL,
  `anh` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `mo_ta` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_san_pham`) USING BTREE,
  INDEX `id_danh_muc`(`id_danh_muc`) USING BTREE,
  CONSTRAINT `tbl_san_pham_ibfk_1` FOREIGN KEY (`id_danh_muc`) REFERENCES `tbl_danh_muc` (`id_danh_muc`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for tbl_don_hang
-- ----------------------------
DROP TABLE IF EXISTS `tbl_don_hang`;
CREATE TABLE `tbl_don_hang`  (
  `id_don_hang` int(11) NOT NULL AUTO_INCREMENT,
  `id_khach_hang` int(11) NULL DEFAULT NULL,
  `id_nhan_vien` int(11) NOT NULL,
  `tong_tien` float(255, 0) NOT NULL,
  `trang_thai` int(4) NULL DEFAULT 0,
  `ngay_dat` datetime(6) NULL DEFAULT NULL,
  PRIMARY KEY (`id_don_hang`) USING BTREE,
  INDEX `id_khach_hang`(`id_khach_hang`) USING BTREE,
  INDEX `id_nhan_vien`(`id_nhan_vien`) USING BTREE,
  CONSTRAINT `tbl_don_hang_ibfk_1` FOREIGN KEY (`id_khach_hang`) REFERENCES `tbl_khach_hang` (`id_khach_hang`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `tbl_don_hang_ibfk_2` FOREIGN KEY (`id_nhan_vien`) REFERENCES `tbl_nhan_vien` (`id_nhan_vien`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for tbl_chi_tiet_don_hang
-- ----------------------------
DROP TABLE IF EXISTS `tbl_chi_tiet_don_hang`;
CREATE TABLE `tbl_chi_tiet_don_hang`  (
  `id_don_hang` int(11) NOT NULL,
  `id_san_pham` int(11) NOT NULL,
  `don_gia` float(255, 0) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `thanh_tien` float(255, 0) NOT NULL,
  `ghi_chu` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_don_hang`, `id_san_pham`) USING BTREE,
  INDEX `id_san_pham`(`id_san_pham`) USING BTREE,
  CONSTRAINT `tbl_chi_tiet_don_hang_ibfk_1` FOREIGN KEY (`id_don_hang`) REFERENCES `tbl_don_hang` (`id_don_hang`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `tbl_chi_tiet_don_hang_ibfk_2` FOREIGN KEY (`id_san_pham`) REFERENCES `tbl_san_pham` (`id_san_pham`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_san_pham
-- ----------------------------
INSERT INTO `tbl_san_pham` VALUES (1, '1 MIẾNG GÀ GIÒN CAY', 36000, 1, 'https://popeyes.vn/media/catalog/product/cache/1/small_image/210x/9df78eab33525d08d6e5fb8d27136e95/_/8/_8ccdd1a622a3b94e72bf0fa457756b71ba0fbe8c38d48fe976_pimgpsh_fullsize_distr.png', 'Gà giòn Cajun tươi mới được ướp với công thức gia vị Louisiana (cay hoặc không cay), tẩm bột thủ công và rán chín cùng lớp phủ giòn tan đặc trưng của miền Nam nước Mỹ.');
INSERT INTO `tbl_san_pham` VALUES (2, 'GÀ TẮM NƯỚC MẮM', 40000, 1, 'https://popeyes.vn/media/catalog/product/cache/1/small_image/210x/9df78eab33525d08d6e5fb8d27136e95/m/e/menu_spicy_redboat1pc.png', '1 miếng Gà Tắm Nước Mắm');

SET FOREIGN_KEY_CHECKS = 1;
