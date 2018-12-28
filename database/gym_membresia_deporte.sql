/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : prueba

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-12-28 09:54:45
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for gym_membresia_deporte
-- ----------------------------
DROP TABLE IF EXISTS `gym_membresia_deporte`;
CREATE TABLE `gym_membresia_deporte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `deporte_id` int(11) NOT NULL,
  `membresia_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=86 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of gym_membresia_deporte
-- ----------------------------
INSERT INTO `gym_membresia_deporte` VALUES ('81', '5', '17');
INSERT INTO `gym_membresia_deporte` VALUES ('78', '3', '3');
INSERT INTO `gym_membresia_deporte` VALUES ('6', '3', '6');
INSERT INTO `gym_membresia_deporte` VALUES ('7', '3', '7');
INSERT INTO `gym_membresia_deporte` VALUES ('8', '3', '8');
INSERT INTO `gym_membresia_deporte` VALUES ('9', '3', '9');
INSERT INTO `gym_membresia_deporte` VALUES ('10', '3', '10');
INSERT INTO `gym_membresia_deporte` VALUES ('11', '3', '11');
INSERT INTO `gym_membresia_deporte` VALUES ('12', '3', '12');
INSERT INTO `gym_membresia_deporte` VALUES ('40', '9', '14');
INSERT INTO `gym_membresia_deporte` VALUES ('39', '8', '14');
INSERT INTO `gym_membresia_deporte` VALUES ('24', '9', '13');
INSERT INTO `gym_membresia_deporte` VALUES ('23', '8', '13');
INSERT INTO `gym_membresia_deporte` VALUES ('22', '7', '13');
INSERT INTO `gym_membresia_deporte` VALUES ('21', '4', '13');
INSERT INTO `gym_membresia_deporte` VALUES ('20', '3', '13');
INSERT INTO `gym_membresia_deporte` VALUES ('38', '6', '14');
INSERT INTO `gym_membresia_deporte` VALUES ('37', '5', '14');
INSERT INTO `gym_membresia_deporte` VALUES ('36', '4', '14');
INSERT INTO `gym_membresia_deporte` VALUES ('50', '10', '15');
INSERT INTO `gym_membresia_deporte` VALUES ('49', '6', '15');
INSERT INTO `gym_membresia_deporte` VALUES ('48', '5', '15');
INSERT INTO `gym_membresia_deporte` VALUES ('47', '4', '15');
INSERT INTO `gym_membresia_deporte` VALUES ('46', '3', '15');
INSERT INTO `gym_membresia_deporte` VALUES ('51', '3', '16');
INSERT INTO `gym_membresia_deporte` VALUES ('52', '4', '16');
INSERT INTO `gym_membresia_deporte` VALUES ('53', '5', '16');
INSERT INTO `gym_membresia_deporte` VALUES ('54', '8', '16');
INSERT INTO `gym_membresia_deporte` VALUES ('55', '9', '16');
INSERT INTO `gym_membresia_deporte` VALUES ('56', '10', '16');
INSERT INTO `gym_membresia_deporte` VALUES ('80', '4', '17');
INSERT INTO `gym_membresia_deporte` VALUES ('79', '3', '17');
INSERT INTO `gym_membresia_deporte` VALUES ('77', '4', '2');
INSERT INTO `gym_membresia_deporte` VALUES ('84', '5', '4');
INSERT INTO `gym_membresia_deporte` VALUES ('83', '4', '4');
INSERT INTO `gym_membresia_deporte` VALUES ('82', '3', '4');
INSERT INTO `gym_membresia_deporte` VALUES ('74', '3', '1');
INSERT INTO `gym_membresia_deporte` VALUES ('75', '4', '1');
INSERT INTO `gym_membresia_deporte` VALUES ('76', '5', '1');
