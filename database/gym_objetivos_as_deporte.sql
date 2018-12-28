/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : prueba

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-12-28 09:55:03
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for gym_objetivos_as_deporte
-- ----------------------------
DROP TABLE IF EXISTS `gym_objetivos_as_deporte`;
CREATE TABLE `gym_objetivos_as_deporte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `deporte_id` int(11) NOT NULL,
  `objetivo_deporte_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of gym_objetivos_as_deporte
-- ----------------------------
INSERT INTO `gym_objetivos_as_deporte` VALUES ('24', '9', '1');
INSERT INTO `gym_objetivos_as_deporte` VALUES ('25', '9', '2');
INSERT INTO `gym_objetivos_as_deporte` VALUES ('26', '9', '3');
INSERT INTO `gym_objetivos_as_deporte` VALUES ('27', '10', '1');
INSERT INTO `gym_objetivos_as_deporte` VALUES ('28', '10', '2');
INSERT INTO `gym_objetivos_as_deporte` VALUES ('29', '10', '3');
INSERT INTO `gym_objetivos_as_deporte` VALUES ('55', '8', '1');
INSERT INTO `gym_objetivos_as_deporte` VALUES ('56', '8', '2');
INSERT INTO `gym_objetivos_as_deporte` VALUES ('57', '8', '3');
INSERT INTO `gym_objetivos_as_deporte` VALUES ('58', '3', '1');
INSERT INTO `gym_objetivos_as_deporte` VALUES ('59', '3', '2');
INSERT INTO `gym_objetivos_as_deporte` VALUES ('60', '3', '3');
INSERT INTO `gym_objetivos_as_deporte` VALUES ('62', '4', '1');
INSERT INTO `gym_objetivos_as_deporte` VALUES ('63', '5', '1');
INSERT INTO `gym_objetivos_as_deporte` VALUES ('64', '6', '2');
INSERT INTO `gym_objetivos_as_deporte` VALUES ('65', '6', '3');
INSERT INTO `gym_objetivos_as_deporte` VALUES ('66', '9', '1');
INSERT INTO `gym_objetivos_as_deporte` VALUES ('67', '9', '2');
INSERT INTO `gym_objetivos_as_deporte` VALUES ('68', '9', '3');
