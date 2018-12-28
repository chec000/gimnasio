/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : prueba

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-12-28 09:54:36
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for gym_inventario
-- ----------------------------
DROP TABLE IF EXISTS `gym_inventario`;
CREATE TABLE `gym_inventario` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `total` int(10) NOT NULL,
  `fecha` date NOT NULL,
  `id_empleado` int(10) NOT NULL,
  `nombre_producto` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `unidades_existencia` int(10) NOT NULL,
  `cantidad_pedido` int(10) NOT NULL,
  `precio_unitario` int(10) NOT NULL,
  `id_compra` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- ----------------------------
-- Records of gym_inventario
-- ----------------------------
