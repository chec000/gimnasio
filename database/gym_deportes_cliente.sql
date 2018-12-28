/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : prueba

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-12-28 09:53:03
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for gym_deportes_cliente
-- ----------------------------
DROP TABLE IF EXISTS `gym_deportes_cliente`;
CREATE TABLE `gym_deportes_cliente` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(10) NOT NULL,
  `id_deporte` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cliente_idx` (`id_cliente`),
  KEY `deporte_idx` (`id_deporte`),
  CONSTRAINT `gym_deportes_cliente_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `gym_cliente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `gym_deportes_cliente_ibfk_2` FOREIGN KEY (`id_deporte`) REFERENCES `gym_deportes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- ----------------------------
-- Records of gym_deportes_cliente
-- ----------------------------
