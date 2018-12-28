/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : prueba

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-12-28 09:51:30
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for gym_asistencias
-- ----------------------------
DROP TABLE IF EXISTS `gym_asistencias`;
CREATE TABLE `gym_asistencias` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha` datetime NOT NULL,
  `id_cliente` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `asistencia_cliente_idx` (`id_cliente`),
  CONSTRAINT `gym_asistencias_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `gym_cliente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- ----------------------------
-- Records of gym_asistencias
-- ----------------------------
