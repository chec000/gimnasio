/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : prueba

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-12-28 09:51:59
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for gym_caracteristicas_cliente
-- ----------------------------
DROP TABLE IF EXISTS `gym_caracteristicas_cliente`;
CREATE TABLE `gym_caracteristicas_cliente` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `brazo_derecho` int(10) NOT NULL,
  `brazo_izquierdo` int(10) NOT NULL,
  `pierna_derecha` int(11) NOT NULL,
  `pierna_irquierda` int(11) NOT NULL,
  `cadera` int(11) NOT NULL,
  `pecho` int(11) NOT NULL,
  `libras` int(11) NOT NULL,
  `adomen` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `tipo_sangre` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `enfermedad` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `obserbacion` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `id_cliente` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `caracteristicas_cliente_idx` (`id_cliente`),
  CONSTRAINT `gym_caracteristicas_cliente_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `gym_cliente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- ----------------------------
-- Records of gym_caracteristicas_cliente
-- ----------------------------
