/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : prueba

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-12-28 09:55:47
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for gym_venta
-- ----------------------------
DROP TABLE IF EXISTS `gym_venta`;
CREATE TABLE `gym_venta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `nombre_cliente` varchar(60) NOT NULL,
  `id_empleado` int(11) NOT NULL,
  `tipo_pago` varchar(50) NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `estatus` bit(1) NOT NULL,
  `descuento_id` int(11) NOT NULL,
  `factura` varchar(300) NOT NULL,
  `diferencia` decimal(10,0) NOT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(6),
  `updated_at` timestamp(6) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(6),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=171 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of gym_venta
-- ----------------------------
INSERT INTO `gym_venta` VALUES ('170', '2018-12-16', '43', 'Cliente 2 Dominguez', '1', 'efectivo', '6', '', '2', 'http://portalgym.com/uploads/facturas/factura-Cliente 2.pdf', '0', '2018-12-16 19:56:33.025310', '2018-12-16 19:56:33.000000');
