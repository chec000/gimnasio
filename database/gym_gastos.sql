/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : prueba

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-12-28 09:53:59
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for gym_gastos
-- ----------------------------
DROP TABLE IF EXISTS `gym_gastos`;
CREATE TABLE `gym_gastos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cod_producto` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `cantidad` int(10) NOT NULL,
  `valor_costo` int(10) NOT NULL,
  `valor_total` int(10) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `fecha_compra` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- ----------------------------
-- Records of gym_gastos
-- ----------------------------
INSERT INTO `gym_gastos` VALUES ('1', 'jhjhjh', 'jhjhjh', 'jhjhjhj', '87', '78', '78', '0', '2018-10-26', '2018-10-30 17:47:25', '2018-10-30 16:42:05');
INSERT INTO `gym_gastos` VALUES ('2', '0', 'jhasjshjh', 'jhjshajsh', '887', '87', '77', '0', '2018-10-20', '2018-10-30 16:42:41', '2018-10-30 16:42:41');
INSERT INTO `gym_gastos` VALUES ('3', '0', 'sergio', 'jhjhj', '878', '7', '87', '0', '2018-10-21', '2018-10-30 16:43:57', '2018-10-30 16:43:57');
INSERT INTO `gym_gastos` VALUES ('4', '0', 'sergio', 'jhjhj', '878', '7', '87', '0', '2018-10-21', '2018-10-30 16:44:24', '2018-10-30 16:44:24');
INSERT INTO `gym_gastos` VALUES ('5', '0', 'iuiuiu', 'iuiuiui', '787', '78', '79', '0', '2018-10-13', '2018-10-30 16:46:03', '2018-10-30 16:46:03');
INSERT INTO `gym_gastos` VALUES ('6', 'code', 'kjsjdskj', 'kjskajsk', '98', '89', '98', '0', '2018-10-20', '2018-10-30 16:47:49', '2018-10-30 16:47:49');
INSERT INTO `gym_gastos` VALUES ('7', 'kshdbsjb', 'Jumex', 'hdsjdhjb', '98', '98', '989', '0', '2018-10-13', '2018-10-31 10:14:18', '2018-10-31 10:14:18');
INSERT INTO `gym_gastos` VALUES ('8', '567767', 'serviletas', 'kshdsjdh', '78', '78', '878', '0', '2018-12-08', '2018-12-07 12:37:57', '2018-12-07 12:37:57');
