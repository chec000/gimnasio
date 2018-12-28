/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : prueba

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-12-28 09:55:13
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for gym_objetivos_deporte
-- ----------------------------
DROP TABLE IF EXISTS `gym_objetivos_deporte`;
CREATE TABLE `gym_objetivos_deporte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  `descripcion` text NOT NULL,
  `activo` bit(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of gym_objetivos_deporte
-- ----------------------------
INSERT INTO `gym_objetivos_deporte` VALUES ('1', 'Mejora la elasticidad y flexibilidad.', 'Mejora la elasticidad y flexibilidad.Mejora la elasticidad y flexibilidad.Mejora la elasticidad y flexibilidad.', '');
INSERT INTO `gym_objetivos_deporte` VALUES ('2', 'Refuerza el core.', 'Refuerza el core.Refuerza el core.Refuerza el core.Refuerza el core.', '');
INSERT INTO `gym_objetivos_deporte` VALUES ('3', 'Fuerza', 'Coje resistencia y mejora tu capacidad cardio pulmonar con uno de los aparatos mas exigentes como es el Remo y combínalo con diversos movimientos funcionales consiguiendo mejorar tu resistencia, movilidad, fuerza con unos movimientos libres de cargas articulares, esta vez queremos exprimir al máximo las posibilidades de las bandas elásticas, atrevete a mejorar', '');
