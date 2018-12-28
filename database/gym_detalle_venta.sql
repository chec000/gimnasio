/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : prueba

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-12-28 09:53:15
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for gym_detalle_venta
-- ----------------------------
DROP TABLE IF EXISTS `gym_detalle_venta`;
CREATE TABLE `gym_detalle_venta` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `venta_id` int(10) NOT NULL,
  `producto_id` int(10) NOT NULL,
  `producto` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `cantidad` int(10) NOT NULL,
  `subtotal` double NOT NULL,
  PRIMARY KEY (`id`),
  KEY `venta_idx` (`venta_id`),
  CONSTRAINT `gym_detalle_venta_ibfk_1` FOREIGN KEY (`venta_id`) REFERENCES `gym_venta` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=279 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- ----------------------------
-- Records of gym_detalle_venta
-- ----------------------------
INSERT INTO `gym_detalle_venta` VALUES ('277', '170', '1', 'Inscripción', '1', '23');
INSERT INTO `gym_detalle_venta` VALUES ('278', '170', '2', 'Membresia Gold', '1', '6');
