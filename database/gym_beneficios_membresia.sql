/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : prueba

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-12-28 09:51:51
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for gym_beneficios_membresia
-- ----------------------------
DROP TABLE IF EXISTS `gym_beneficios_membresia`;
CREATE TABLE `gym_beneficios_membresia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `membresia_id` int(11) NOT NULL,
  `beneficio_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of gym_beneficios_membresia
-- ----------------------------
INSERT INTO `gym_beneficios_membresia` VALUES ('42', '1', '2');
INSERT INTO `gym_beneficios_membresia` VALUES ('41', '1', '1');
INSERT INTO `gym_beneficios_membresia` VALUES ('45', '17', '1');
INSERT INTO `gym_beneficios_membresia` VALUES ('44', '3', '2');
INSERT INTO `gym_beneficios_membresia` VALUES ('43', '3', '1');
INSERT INTO `gym_beneficios_membresia` VALUES ('13', '6', '2');
INSERT INTO `gym_beneficios_membresia` VALUES ('46', '4', '2');
INSERT INTO `gym_beneficios_membresia` VALUES ('14', '7', '2');
INSERT INTO `gym_beneficios_membresia` VALUES ('15', '8', '1');
INSERT INTO `gym_beneficios_membresia` VALUES ('16', '9', '2');
INSERT INTO `gym_beneficios_membresia` VALUES ('17', '10', '2');
INSERT INTO `gym_beneficios_membresia` VALUES ('18', '11', '2');
INSERT INTO `gym_beneficios_membresia` VALUES ('19', '12', '2');
INSERT INTO `gym_beneficios_membresia` VALUES ('29', '15', '2');
INSERT INTO `gym_beneficios_membresia` VALUES ('22', '13', '2');
INSERT INTO `gym_beneficios_membresia` VALUES ('28', '15', '1');
INSERT INTO `gym_beneficios_membresia` VALUES ('30', '16', '1');
INSERT INTO `gym_beneficios_membresia` VALUES ('31', '16', '2');
INSERT INTO `gym_beneficios_membresia` VALUES ('52', '18', '2');
INSERT INTO `gym_beneficios_membresia` VALUES ('51', '18', '1');
