/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : prueba

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-12-28 09:55:32
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for gym_proveedores
-- ----------------------------
DROP TABLE IF EXISTS `gym_proveedores`;
CREATE TABLE `gym_proveedores` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `pais` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `imail` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `correo` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `id_usuario` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `usuario_proveedor_idx` (`id_usuario`),
  CONSTRAINT `gym_proveedores_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- ----------------------------
-- Records of gym_proveedores
-- ----------------------------
