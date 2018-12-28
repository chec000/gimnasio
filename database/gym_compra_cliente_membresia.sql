/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : prueba

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-12-28 09:52:44
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for gym_compra_cliente_membresia
-- ----------------------------
DROP TABLE IF EXISTS `gym_compra_cliente_membresia`;
CREATE TABLE `gym_compra_cliente_membresia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cliente_id` int(11) NOT NULL,
  `membresia_id` int(11) NOT NULL,
  `nombre_membresia` varchar(350) NOT NULL,
  `precio` decimal(10,0) NOT NULL,
  `compra_id` int(11) NOT NULL,
  `fecha_compra` date NOT NULL,
  `fecha_proximo_pago` date NOT NULL,
  `estatus` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of gym_compra_cliente_membresia
-- ----------------------------
INSERT INTO `gym_compra_cliente_membresia` VALUES ('1', '29', '1', 'inscripcion', '0', '96', '2018-10-18', '2018-10-18', '', '2018-10-18 15:56:21', '2018-10-18 15:32:22');
INSERT INTO `gym_compra_cliente_membresia` VALUES ('2', '29', '4', 'inscripcion', '0', '96', '2018-10-18', '2018-10-18', '', '2018-10-18 15:56:21', '2018-10-18 15:32:22');
INSERT INTO `gym_compra_cliente_membresia` VALUES ('3', '29', '2', 'Membresia Gold', '6', '155', '2018-11-02', '2019-09-02', '', '2018-11-02 15:50:12', '2018-11-02 15:50:12');
INSERT INTO `gym_compra_cliente_membresia` VALUES ('4', '29', '1', 'Inscripción', '23', '153', '2018-11-02', '2019-06-02', '', '2018-11-02 15:45:52', '2018-11-02 15:45:52');
INSERT INTO `gym_compra_cliente_membresia` VALUES ('5', '28', '1', 'inscripcion', '0', '96', '2018-10-18', '2018-10-18', '', '2018-10-18 15:56:21', '2018-10-18 15:32:22');
INSERT INTO `gym_compra_cliente_membresia` VALUES ('6', '30', '1', '', '23', '0', '2018-10-22', '2018-10-22', '', '2018-10-22 11:12:00', '2018-10-22 11:12:00');
INSERT INTO `gym_compra_cliente_membresia` VALUES ('7', '30', '1', '', '23', '0', '2018-10-22', '2018-10-22', '', '2018-10-22 11:12:00', '2018-10-22 11:12:00');
INSERT INTO `gym_compra_cliente_membresia` VALUES ('8', '33', '1', 'Inscripción', '23', '0', '2018-10-24', '2019-05-24', '', '2018-10-24 17:44:35', '2018-10-24 17:44:35');
INSERT INTO `gym_compra_cliente_membresia` VALUES ('9', '33', '2', 'Membresia Gold', '6', '148', '2018-10-29', '2019-08-29', '', '2018-10-29 15:24:44', '2018-10-29 14:24:44');
INSERT INTO `gym_compra_cliente_membresia` VALUES ('10', '35', '1', 'Inscripción', '23', '149', '2018-11-01', '2019-06-01', '', '2018-11-01 09:55:03', '2018-11-01 09:55:03');
INSERT INTO `gym_compra_cliente_membresia` VALUES ('11', '35', '1', 'Inscripción', '23', '149', '2018-11-01', '2019-06-01', '', '2018-11-01 09:55:03', '2018-11-01 09:55:03');
INSERT INTO `gym_compra_cliente_membresia` VALUES ('12', '36', '1', 'Inscripción', '23', '150', '2018-11-01', '2019-06-01', '', '2018-11-01 10:54:32', '2018-11-01 10:54:32');
INSERT INTO `gym_compra_cliente_membresia` VALUES ('13', '36', '2', 'Membresia Gold', '6', '150', '2018-11-01', '2019-06-01', '', '2018-11-01 10:54:32', '2018-11-01 10:54:32');
INSERT INTO `gym_compra_cliente_membresia` VALUES ('14', '37', '1', 'Inscripción', '23', '151', '2018-11-01', '2019-06-01', '', '2018-11-01 10:56:14', '2018-11-01 10:56:14');
INSERT INTO `gym_compra_cliente_membresia` VALUES ('15', '37', '2', 'Membresia Gold', '6', '151', '2018-11-01', '2019-06-01', '', '2018-11-01 10:56:14', '2018-11-01 10:56:14');
INSERT INTO `gym_compra_cliente_membresia` VALUES ('16', '38', '1', 'Inscripción', '23', '152', '2018-11-01', '2019-06-01', '', '2018-11-01 11:11:58', '2018-11-01 11:11:58');
INSERT INTO `gym_compra_cliente_membresia` VALUES ('17', '38', '2', 'Membresia Gold', '6', '152', '2018-11-01', '2019-06-01', '', '2018-11-01 11:11:58', '2018-11-01 11:11:58');
INSERT INTO `gym_compra_cliente_membresia` VALUES ('18', '40', '1', 'Inscripción', '23', '156', '2018-12-07', '2019-07-07', '', '2018-12-07 12:46:06', '2018-12-07 12:46:06');
INSERT INTO `gym_compra_cliente_membresia` VALUES ('19', '40', '4', 'Ponte Fuerte', '67', '157', '2018-12-07', '2019-11-07', '', '2018-12-07 15:59:14', '2018-12-07 15:59:14');
INSERT INTO `gym_compra_cliente_membresia` VALUES ('20', '40', '2', 'Membresia Gold', '6', '156', '2018-12-07', '2019-07-07', '', '2018-12-07 12:46:06', '2018-12-07 12:46:06');
INSERT INTO `gym_compra_cliente_membresia` VALUES ('21', '40', '1', 'Inscripción', '23', '158', '2018-12-13', '2019-07-13', '', '2018-12-13 16:28:34', '2018-12-13 16:28:34');
INSERT INTO `gym_compra_cliente_membresia` VALUES ('22', '40', '2', 'Membresia Gold', '6', '158', '2018-12-13', '2019-07-13', '', '2018-12-13 16:28:34', '2018-12-13 16:28:34');
INSERT INTO `gym_compra_cliente_membresia` VALUES ('23', '40', '4', 'Ponte Fuerte', '67', '159', '2018-12-13', '2018-12-13', '', '2018-12-13 16:49:21', '2018-12-13 16:49:21');
INSERT INTO `gym_compra_cliente_membresia` VALUES ('24', '40', '2', 'Membresia Gold', '6', '159', '2018-12-13', '2018-12-13', '', '2018-12-13 16:49:21', '2018-12-13 16:49:21');
INSERT INTO `gym_compra_cliente_membresia` VALUES ('25', '40', '2', 'Membresia Gold', '6', '160', '2018-12-13', '2018-12-13', '', '2018-12-13 17:02:47', '2018-12-13 17:02:47');
INSERT INTO `gym_compra_cliente_membresia` VALUES ('26', '40', '1', 'Inscripción', '23', '161', '2018-12-14', '2018-12-14', '', '2018-12-14 11:32:53', '2018-12-14 11:32:53');
INSERT INTO `gym_compra_cliente_membresia` VALUES ('27', '40', '2', 'Membresia Gold', '6', '162', '2018-12-14', '2018-12-14', '', '2018-12-14 11:43:44', '2018-12-14 11:43:44');
INSERT INTO `gym_compra_cliente_membresia` VALUES ('28', '40', '18', 'asas', '23', '163', '2018-12-14', '2018-12-14', '', '2018-12-14 11:49:50', '2018-12-14 11:49:50');
INSERT INTO `gym_compra_cliente_membresia` VALUES ('29', '40', '4', 'Ponte Fuerte', '67', '164', '2018-12-14', '2018-12-14', '', '2018-12-14 12:34:23', '2018-12-14 12:34:23');
INSERT INTO `gym_compra_cliente_membresia` VALUES ('30', '40', '4', 'Ponte Fuerte', '67', '165', '2018-12-14', '2018-12-14', '', '2018-12-14 12:54:32', '2018-12-14 12:54:32');
INSERT INTO `gym_compra_cliente_membresia` VALUES ('31', '41', '1', 'Inscripción', '23', '166', '2018-12-14', '2019-07-14', '', '2018-12-14 15:06:12', '2018-12-14 15:06:12');
INSERT INTO `gym_compra_cliente_membresia` VALUES ('32', '41', '2', 'Membresia Gold', '6', '166', '2018-12-14', '2019-07-14', '', '2018-12-14 15:06:12', '2018-12-14 15:06:12');
INSERT INTO `gym_compra_cliente_membresia` VALUES ('33', '41', '3', 'PONTE FIT', '67', '166', '2018-12-14', '2019-07-14', '', '2018-12-14 15:06:12', '2018-12-14 15:06:12');
INSERT INTO `gym_compra_cliente_membresia` VALUES ('34', '40', '1', 'Inscripción', '23', '167', '2018-12-14', '2018-12-14', '', '2018-12-14 16:56:53', '2018-12-14 16:56:53');
INSERT INTO `gym_compra_cliente_membresia` VALUES ('35', '40', '1', 'Inscripción', '23', '168', '2018-12-14', '2018-12-14', '', '2018-12-14 17:02:27', '2018-12-14 17:02:27');
INSERT INTO `gym_compra_cliente_membresia` VALUES ('36', '42', '1', 'Inscripción', '23', '169', '2018-12-14', '2019-07-14', '', '2018-12-14 17:12:07', '2018-12-14 17:12:07');
INSERT INTO `gym_compra_cliente_membresia` VALUES ('37', '43', '1', 'Inscripción', '23', '170', '2018-12-16', '2019-07-16', '', '2018-12-16 19:56:27', '2018-12-16 19:56:27');
INSERT INTO `gym_compra_cliente_membresia` VALUES ('38', '43', '2', 'Membresia Gold', '6', '170', '2018-12-16', '2019-07-16', '', '2018-12-16 19:56:27', '2018-12-16 19:56:27');

-- ----------------------------
-- Table structure for gym_deportes
-- ----------------------------
DROP TABLE IF EXISTS `gym_deportes`;
CREATE TABLE `gym_deportes` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(70) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish2_ci NOT NULL,
  `precio` decimal(10,0) NOT NULL,
  `foto` varchar(300) COLLATE utf8_spanish2_ci NOT NULL,
  `activo` bit(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- ----------------------------
-- Records of gym_deportes
-- ----------------------------
