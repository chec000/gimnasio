/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : prueba

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-12-28 09:51:41
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for gym_beneficios
-- ----------------------------
DROP TABLE IF EXISTS `gym_beneficios`;
CREATE TABLE `gym_beneficios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `activo` bit(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of gym_beneficios
-- ----------------------------
INSERT INTO `gym_beneficios` VALUES ('1', 'entrenadores', 'asasa', '');
INSERT INTO `gym_beneficios` VALUES ('2', 'clases de baile', 'asasasa', '');
