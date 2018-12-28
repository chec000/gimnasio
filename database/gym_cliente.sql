/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : prueba

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-12-28 09:52:09
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for gym_cliente
-- ----------------------------
DROP TABLE IF EXISTS `gym_cliente`;
CREATE TABLE `gym_cliente` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_inscripcion` date NOT NULL,
  `codigo_cliente` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `id_usuario` int(10) NOT NULL,
  `estado_cliente` enum('Al dia','Atrasado') COLLATE utf8_spanish_ci NOT NULL,
  `activo` bit(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- ----------------------------
-- Records of gym_cliente
-- ----------------------------
INSERT INTO `gym_cliente` VALUES ('43', '2018-12-16', 'CLCD-43', '43', 'Al dia', '');
