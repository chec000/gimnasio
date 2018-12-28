/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : prueba

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-12-28 09:53:42
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for gym_entrenadores
-- ----------------------------
DROP TABLE IF EXISTS `gym_entrenadores`;
CREATE TABLE `gym_entrenadores` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `nombres` int(60) NOT NULL,
  `apellidos` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `direccion` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `fecha_registro` date NOT NULL,
  `id_usuario` int(10) NOT NULL,
  `estado` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `foto` longblob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `entrenador_usuario_idx` (`id_usuario`),
  CONSTRAINT `gym_entrenadores_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- ----------------------------
-- Records of gym_entrenadores
-- ----------------------------
INSERT INTO `gym_entrenadores` VALUES ('1', 'jeghgsd', '1', 'hghg', 'jhajhsajhsajh', '787878', '2018-08-21', '2018-08-21', '7', '1', '');
