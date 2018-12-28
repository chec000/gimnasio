/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : prueba

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-12-28 09:52:27
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for gym_cliente_membresia
-- ----------------------------
DROP TABLE IF EXISTS `gym_cliente_membresia`;
CREATE TABLE `gym_cliente_membresia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cliente_id` int(11) NOT NULL,
  `membresia_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `membresia_idx` (`membresia_id`),
  KEY `cliente_idx` (`cliente_id`),
  KEY `membresias_idx` (`membresia_id`),
  CONSTRAINT `gym_cliente_membresia_ibfk_1` FOREIGN KEY (`cliente_id`) REFERENCES `gym_cliente` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `gym_cliente_membresia_ibfk_2` FOREIGN KEY (`membresia_id`) REFERENCES `gym_membresias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=257 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of gym_cliente_membresia
-- ----------------------------
INSERT INTO `gym_cliente_membresia` VALUES ('255', '43', '1');
INSERT INTO `gym_cliente_membresia` VALUES ('256', '43', '2');
