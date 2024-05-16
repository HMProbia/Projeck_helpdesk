/*
 Navicat Premium Data Transfer

 Source Server         : AttaAutohaus(Dep)
 Source Server Type    : MySQL
 Source Server Version : 100422
 Source Host           : localhost:3306
 Source Schema         : project_helpdesk

 Target Server Type    : MySQL
 Target Server Version : 100422
 File Encoding         : 65001

 Date: 16/05/2024 11:16:04
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tbl_admin
-- ----------------------------
DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE `tbl_admin`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `admin_email` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `admin_pwd` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `admin_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `admin_status` int NOT NULL COMMENT '0=BAN, 1=Online',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_admin
-- ----------------------------
INSERT INTO `tbl_admin` VALUES (1, 'a@a.com', 'c58a03e5842fa1ad52d6781faaf0921bf039c2f0', 'Mr.Admin', 1);
INSERT INTO `tbl_admin` VALUES (2, 'l.chaiyaporn@attaautohaus.com', 'a0159b2eb81705fc0a1324919392a815a6293adf', 'AdminFluk', 1);

-- ----------------------------
-- Table structure for tbl_case
-- ----------------------------
DROP TABLE IF EXISTS `tbl_case`;
CREATE TABLE `tbl_case`  (
  `id` int NOT NULL AUTO_INCREMENT COMMENT 'ID ',
  `type_company` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'บริษัท',
  `case_type` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'ประเภทของเคส',
  `case_detail` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'คำอธิบายเพิ่มเติม',
  `case_loc` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'สถานที่',
  `p_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'ชื่อผู้แจ้งเคส',
  `p_email` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'Email ผู้แจ้งเคส',
  `p_img` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'รูปภาพประกอบ',
  `p_tel` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT 'เบอร์โทร',
  `case_status` int NOT NULL COMMENT 'DEFAULT 1',
  `date_save` timestamp NOT NULL DEFAULT current_timestamp COMMENT 'TimeStamp',
  `tech_id` int NULL DEFAULT NULL COMMENT 'ID   IT',
  `tech_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT 'Name IT ',
  `case_update` datetime NULL DEFAULT NULL COMMENT 'วันที่อัพเดทเคส',
  `case_update_log` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'รายละเอียดอัพเดทงาน',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_case
-- ----------------------------
INSERT INTO `tbl_case` VALUES (1, '', 'อุปกรณ์ไอที', 'เปิด PC ไม่ติด', 'ตึก B ห้อง SA', 'ทดสอบ admin', 'test@attaautohaus.com', 'e6dfdd7c867b1e5f3f2dfde2a4dec96f.PNG', NULL, 2, '2023-10-28 14:01:00', 1, 'Mr.Admin', '2023-10-30 07:13:30', 'test');
INSERT INTO `tbl_case` VALUES (2, '', 'ประปา', 'น้ำแตก', 'หน้าตึกใหญ่', 'ทดสอบ admin 2', 'admin@atttt.com', '33b1312124b68469627da7832cfc2b0d.PNG', NULL, 4, '2023-10-30 14:12:37', 1, 'Mr.Admin', '2023-10-31 06:46:35', '127');
INSERT INTO `tbl_case` VALUES (3, '', 'SaleForce', 'พังมาดูด่วนนนนนน', 'โต๊ะเซลล์', 'เทสระบบ', 'Sale@attaautohaus.com', '59ff5f047dcaae48efe6d38d859f32e1.PNG', NULL, 3, '2023-10-31 14:19:41', 1, 'Mr.Admin', '2023-10-31 08:29:56', 'กำลังทำ');
INSERT INTO `tbl_case` VALUES (4, '', 'DMS', 'tesssssss', 'aaasdsadasd', 'adminnnn', 'admin222@attaautohaus.com', 'af83724f0ab9d5ab657d43ce802238c1.PNG', NULL, 1, '2023-10-31 14:28:45', 2, 'AdminFluk', '2023-11-22 03:39:07', 'ส่งเคสแล้ว');
INSERT INTO `tbl_case` VALUES (5, '', 'Xentry', 'test systems', 'SA 112374653576', 'admin Test', 'admin222@attaautohaus.com', '4394d4d7a2b55f16dca03813442a9ac1.PNG', NULL, 1, '2023-11-04 14:04:22', 1, 'Mr.Admin', NULL, '');
INSERT INTO `tbl_case` VALUES (6, 'ATTA Autohaus Co., Ltd.', 'DMS', 'ะำหหหห', 'tessss', 'ชัย', 'l.chaiyaporn@attaautohaus.com', '037dbd5ba3e3e87a18942cfacfdaeca2.PNG', '0624535393', 2, '2024-03-05 15:02:03', 1, 'Mr.Admin', '2024-03-05 09:07:23', 'รอตรวจสบจากMB');

-- ----------------------------
-- Table structure for tbl_company
-- ----------------------------
DROP TABLE IF EXISTS `tbl_company`;
CREATE TABLE `tbl_company`  (
  `id_company` int NOT NULL COMMENT 'id company',
  `company_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'conpany_name',
  `is_approve` int NULL DEFAULT NULL COMMENT '1/2 เท่านั้นนน',
  PRIMARY KEY (`id_company`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_company
-- ----------------------------
INSERT INTO `tbl_company` VALUES (1, 'ATTA Autohaus Co., Ltd.', 1);
INSERT INTO `tbl_company` VALUES (2, 'Benz Talingchan Co., Ltd.', 1);

-- ----------------------------
-- Table structure for tbl_type_case
-- ----------------------------
DROP TABLE IF EXISTS `tbl_type_case`;
CREATE TABLE `tbl_type_case`  (
  `id` int NOT NULL COMMENT 'ID ของ Typecase',
  `type_detail_case` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'รายการหมวดเคส',
  `is_approve` int NOT NULL COMMENT 'แสดงผล'
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_type_case
-- ----------------------------
INSERT INTO `tbl_type_case` VALUES (0, 'อุปกรณ์ไอที', 1);
INSERT INTO `tbl_type_case` VALUES (1, 'DMS', 1);
INSERT INTO `tbl_type_case` VALUES (2, 'SaleForce', 1);
INSERT INTO `tbl_type_case` VALUES (3, 'Xentry', 1);

SET FOREIGN_KEY_CHECKS = 1;
