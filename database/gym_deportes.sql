/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : prueba

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-12-28 09:52:54
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for gym_deportes
-- ----------------------------
DROP TABLE IF EXISTS `gym_deportes`;
CREATE TABLE `gym_deportes` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(70) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish2_ci NOT NULL,
  `precio` decimal(10,0) NOT NULL,
  `foto` varchar(300) COLLATE utf8_spanish2_ci NOT NULL,
  `activo` bit(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- ----------------------------
-- Records of gym_deportes
-- ----------------------------
