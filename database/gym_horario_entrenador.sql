/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : prueba

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-12-28 09:54:06
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for gym_horario_entrenador
-- ----------------------------
DROP TABLE IF EXISTS `gym_horario_entrenador`;
CREATE TABLE `gym_horario_entrenador` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_entrenador` int(10) NOT NULL,
  `id_horario` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- ----------------------------
-- Records of gym_horario_entrenador
-- ----------------------------
