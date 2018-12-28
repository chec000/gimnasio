/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : prueba

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-12-28 09:54:54
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for gym_membresias
-- ----------------------------
DROP TABLE IF EXISTS `gym_membresias`;
CREATE TABLE `gym_membresias` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_id` int(11) NOT NULL,
  `precio` int(10) NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `duracion_meses` int(11) NOT NULL,
  `imagen` varchar(400) COLLATE utf8_spanish_ci NOT NULL,
  `activo` bit(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- ----------------------------
-- Records of gym_membresias
-- ----------------------------
INSERT INTO `gym_membresias` VALUES ('1', 'Inscripción', '1', '23', '', '7', '/uploads/images/imagenes-generales/WEB-Madres-GRAL.jpg', '', '2018-08-20 22:45:04', '2018-10-24 17:54:57');
INSERT INTO `gym_membresias` VALUES ('2', 'Membresia Gold', '1', '6', '', '10', '/uploads/images/imagenes-generales/golds-gym-GymMembershipFees-218x150.jpg', '', '2018-08-27 03:50:59', '2018-10-24 17:55:29');
INSERT INTO `gym_membresias` VALUES ('3', 'PONTE FIT', '1', '67', 'Restricciones: Aplica en horario especial de 11 am – 4 pm. Promoción válida para clientes nuevos. Es necesario domiciliar tarjeta bancaria.', '7', '/uploads/images/imagenes-generales/logo_2.png', '', '2018-08-27 04:05:41', '2018-10-24 17:56:51');
INSERT INTO `gym_membresias` VALUES ('4', 'Ponte Fuerte', '1', '67', '', '11', '/uploads/images/imagenes-generales/337_381097706.jpg', '', '2018-08-27 04:05:56', '2018-10-24 18:00:32');
INSERT INTO `gym_membresias` VALUES ('5', 'membresias', '1', '34', 'The following example creates a responsive video by adding an .embed-responsive-item class to an <iframe> tag (the video will then scale nicely to the parent element). The containing <div> defines the aspect ratio of the video', '20180818', '/uploads/images/imagenes-generales/manzanas.jpg', '\0', '2018-08-28 18:01:14', '2018-10-15 13:07:04');
INSERT INTO `gym_membresias` VALUES ('6', 'membresias', '1', '56', 'The following example creates a responsive video by adding an .embed-responsive-item class to an <iframe> tag (the video will then scale nicely to the parent element). The containing <div> defines the aspect ratio of the video', '20180812', '/uploads/images/imagenes-generales/manzanas.jpg', '\0', '2018-08-28 18:01:30', '2018-10-15 13:07:03');
INSERT INTO `gym_membresias` VALUES ('7', 'membresias', '1', '34', 'The following example creates a responsive video by adding an .embed-responsive-item class to an <iframe> tag (the video will then scale nicely to the parent element). The containing <div> defines the aspect ratio of the video', '20180810', '/uploads/images/imagenes-generales/manzanas.jpg', '\0', '2018-08-28 18:02:49', '2018-10-15 13:07:02');
INSERT INTO `gym_membresias` VALUES ('8', 'membresias', '1', '344', 'The following example creates a responsive video by adding an .embed-responsive-item class to an <iframe> tag (the video will then scale nicely to the parent element). The containing <div> defines the aspect ratio of the video', '20180826', '/uploads/images/imagenes-generales/manzanas.jpg', '\0', '2018-08-28 18:03:02', '2018-10-15 13:07:01');
INSERT INTO `gym_membresias` VALUES ('9', 'membresias', '1', '4', 'The following example creates a responsive video by adding an .embed-responsive-item class to an <iframe> tag (the video will then scale nicely to the parent element). The containing <div> defines the aspect ratio of the video', '20180826', '/uploads/images/imagenes-generales/manzanas.jpg', '\0', '2018-08-28 18:03:16', '2018-10-15 13:07:00');
INSERT INTO `gym_membresias` VALUES ('10', 'membresias', '1', '34', 'The following example creates a responsive video by adding an .embed-responsive-item class to an <iframe> tag (the video will then scale nicely to the parent element). The containing <div> defines the aspect ratio of the video', '20180825', '/uploads/images/imagenes-generales/manzanas.jpg', '\0', '2018-08-28 18:03:31', '2018-10-15 13:06:59');
INSERT INTO `gym_membresias` VALUES ('11', 'membresias', '1', '34', 'The following example creates a responsive video by adding an .embed-responsive-item class to an <iframe> tag (the video will then scale nicely to the parent element). The containing <div> defines the aspect ratio of the video', '20180818', '/uploads/images/imagenes-generales/manzanas.jpg', '\0', '2018-08-28 18:03:42', '2018-10-15 13:06:58');
INSERT INTO `gym_membresias` VALUES ('12', 'membresias', '1', '34', 'The following example creates a responsive video by adding an .embed-responsive-item class to an <iframe> tag (the video will then scale nicely to the parent element). The containing <div> defines the aspect ratio of the video', '20180825', '/uploads/images/imagenes-generales/manzanas.jpg', '\0', '2018-08-28 19:21:06', '2018-10-15 13:06:58');
INSERT INTO `gym_membresias` VALUES ('13', 'prueba', '2', '343', 'The following example creates a responsive video by adding an .embed-responsive-item class to an <iframe> tag (the video will then scale nicely to the parent element). The containing <div> defines the aspect ratio of the video', '20180906', '/uploads/images/imagenes-generales/manzanas.jpg', '\0', '2018-09-06 21:27:15', '2018-10-15 13:07:06');
INSERT INTO `gym_membresias` VALUES ('14', 'membresia sergio', '2', '54', 'The following example creates a responsive video by adding an .embed-responsive-item class to an <iframe> tag (the video will then scale nicely to the parent element). The containing <div> defines the aspect ratio of the video', '20180923', '/uploads/images/imagenes-generales/manzanas.jpg', '\0', '2018-09-06 21:59:23', '2018-10-15 13:06:54');
INSERT INTO `gym_membresias` VALUES ('15', 'tests support', '2', '80', 'The following example creates a responsive video by adding an .embed-responsive-item class to an <iframe> tag (the video will then scale nicely to the parent element). The containing <div> defines the aspect ratio of the video', '20180921', '/uploads/images/imagenes-generales/manzanas.jpg', '\0', '2018-09-21 11:26:19', '2018-09-21 11:28:55');
INSERT INTO `gym_membresias` VALUES ('16', 'qwqw', '1', '34', 'Buenas prácticas y recomendaciones de uso\r\n4. Ejemplos\r\n5. Enlaces externos\r\nÁrea: Ingeniería de requisitos\r\nCarácter del recurso: Recomendado\r\nDescripción\r\nIntroducción\r\nEn ingeniería del software, un caso de uso es una técnica para la captura de requisitos potenciales de un nuevo sistema o una actualización de software. Cada caso de uso proporciona uno o más escenarios que indican cómo debería i', '20180913', '/uploads/images/imagenes-generales/manzanas.jpg', '\0', '2018-09-25 13:01:05', '2018-10-15 13:06:53');
INSERT INTO `gym_membresias` VALUES ('17', 'SYNRGY BOX', '2', '34', 'Restricciones: A grupos mínimo de 4 personas, sólo familiares directos. Deberá cubrir procesamiento, mensualidad y depósito cada uno. Promoción válida sólo con tarjeta bancaria', '1', '/uploads/images/imagenes-generales/a-woman-doing-pushups-in-the-gym-health-hd-wallpaper-3077x2052.jpg', '', '2018-10-22 12:58:41', '2018-10-24 17:57:41');
INSERT INTO `gym_membresias` VALUES ('18', 'asas', '2', '23', '', '11', '/uploads/imagenes/images.jpg', '', '2018-12-06 10:18:55', '2018-12-27 19:07:40');
