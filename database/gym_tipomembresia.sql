/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : prueba

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-12-28 09:55:40
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for gym_tipomembresia
-- ----------------------------
DROP TABLE IF EXISTS `gym_tipomembresia`;
CREATE TABLE `gym_tipomembresia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `activo` bit(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of gym_tipomembresia
-- ----------------------------
INSERT INTO `gym_tipomembresia` VALUES ('1', 'coorporativo', 'asasas', '');
INSERT INTO `gym_tipomembresia` VALUES ('2', 'familiar', 'jhjshajh', '');
