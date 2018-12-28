/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : prueba

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-12-28 09:55:24
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for gym_pais
-- ----------------------------
DROP TABLE IF EXISTS `gym_pais`;
CREATE TABLE `gym_pais` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `activo` bit(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=247 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of gym_pais
-- ----------------------------
INSERT INTO `gym_pais` VALUES ('1', 'Australia', '');
INSERT INTO `gym_pais` VALUES ('2', 'Austria', '');
INSERT INTO `gym_pais` VALUES ('3', 'Azerbaiyán', '');
INSERT INTO `gym_pais` VALUES ('4', 'Anguilla', '');
INSERT INTO `gym_pais` VALUES ('5', 'Argentina', '');
INSERT INTO `gym_pais` VALUES ('6', 'Armenia', '');
INSERT INTO `gym_pais` VALUES ('7', 'Bielorrusia', '');
INSERT INTO `gym_pais` VALUES ('8', 'Belice', '');
INSERT INTO `gym_pais` VALUES ('9', 'Bélgica', '');
INSERT INTO `gym_pais` VALUES ('10', 'Bermudas', '');
INSERT INTO `gym_pais` VALUES ('11', 'Bulgaria', '');
INSERT INTO `gym_pais` VALUES ('12', 'Brasil', '');
INSERT INTO `gym_pais` VALUES ('13', 'Reino Unido', '');
INSERT INTO `gym_pais` VALUES ('14', 'Hungría', '');
INSERT INTO `gym_pais` VALUES ('15', 'Vietnam', '');
INSERT INTO `gym_pais` VALUES ('16', 'Haiti', '');
INSERT INTO `gym_pais` VALUES ('17', 'Guadalupe', '');
INSERT INTO `gym_pais` VALUES ('18', 'Alemania', '');
INSERT INTO `gym_pais` VALUES ('19', 'Países Bajos, Holanda', '');
INSERT INTO `gym_pais` VALUES ('20', 'Grecia', '');
INSERT INTO `gym_pais` VALUES ('21', 'Georgia', '');
INSERT INTO `gym_pais` VALUES ('22', 'Dinamarca', '');
INSERT INTO `gym_pais` VALUES ('23', 'Egipto', '');
INSERT INTO `gym_pais` VALUES ('24', 'Israel', '');
INSERT INTO `gym_pais` VALUES ('25', 'India', '');
INSERT INTO `gym_pais` VALUES ('26', 'Irán', '');
INSERT INTO `gym_pais` VALUES ('27', 'Irlanda', '');
INSERT INTO `gym_pais` VALUES ('28', 'España', '');
INSERT INTO `gym_pais` VALUES ('29', 'Italia', '');
INSERT INTO `gym_pais` VALUES ('30', 'Kazajstán', '');
INSERT INTO `gym_pais` VALUES ('31', 'Camerún', '');
INSERT INTO `gym_pais` VALUES ('32', 'Canadá', '');
INSERT INTO `gym_pais` VALUES ('33', 'Chipre', '');
INSERT INTO `gym_pais` VALUES ('34', 'Kirguistán', '');
INSERT INTO `gym_pais` VALUES ('35', 'China', '');
INSERT INTO `gym_pais` VALUES ('36', 'Costa Rica', '');
INSERT INTO `gym_pais` VALUES ('37', 'Kuwait', '');
INSERT INTO `gym_pais` VALUES ('38', 'Letonia', '');
INSERT INTO `gym_pais` VALUES ('39', 'Libia', '');
INSERT INTO `gym_pais` VALUES ('40', 'Lituania', '');
INSERT INTO `gym_pais` VALUES ('41', 'Luxemburgo', '');
INSERT INTO `gym_pais` VALUES ('42', 'México', '');
INSERT INTO `gym_pais` VALUES ('43', 'Moldavia', '');
INSERT INTO `gym_pais` VALUES ('44', 'Mónaco', '');
INSERT INTO `gym_pais` VALUES ('45', 'Nueva Zelanda', '');
INSERT INTO `gym_pais` VALUES ('46', 'Noruega', '');
INSERT INTO `gym_pais` VALUES ('47', 'Polonia', '');
INSERT INTO `gym_pais` VALUES ('48', 'Portugal', '');
INSERT INTO `gym_pais` VALUES ('49', 'Reunión', '');
INSERT INTO `gym_pais` VALUES ('50', 'Rusia', '');
INSERT INTO `gym_pais` VALUES ('51', 'El Salvador', '');
INSERT INTO `gym_pais` VALUES ('52', 'Eslovaquia', '');
INSERT INTO `gym_pais` VALUES ('53', 'Eslovenia', '');
INSERT INTO `gym_pais` VALUES ('54', 'Surinam', '');
INSERT INTO `gym_pais` VALUES ('55', 'Estados Unidos', '');
INSERT INTO `gym_pais` VALUES ('56', 'Tadjikistan', '');
INSERT INTO `gym_pais` VALUES ('57', 'Turkmenistan', '');
INSERT INTO `gym_pais` VALUES ('58', 'Islas Turcas y Caicos', '');
INSERT INTO `gym_pais` VALUES ('59', 'Turquía', '');
INSERT INTO `gym_pais` VALUES ('60', 'Uganda', '');
INSERT INTO `gym_pais` VALUES ('61', 'Uzbekistán', '');
INSERT INTO `gym_pais` VALUES ('62', 'Ucrania', '');
INSERT INTO `gym_pais` VALUES ('63', 'Finlandia', '');
INSERT INTO `gym_pais` VALUES ('64', 'Francia', '');
INSERT INTO `gym_pais` VALUES ('65', 'República Checa', '');
INSERT INTO `gym_pais` VALUES ('66', 'Suiza', '');
INSERT INTO `gym_pais` VALUES ('67', 'Suecia', '');
INSERT INTO `gym_pais` VALUES ('68', 'Estonia', '');
INSERT INTO `gym_pais` VALUES ('69', 'Corea del Sur', '');
INSERT INTO `gym_pais` VALUES ('70', 'Japón', '');
INSERT INTO `gym_pais` VALUES ('71', 'Croacia', '');
INSERT INTO `gym_pais` VALUES ('72', 'Rumanía', '');
INSERT INTO `gym_pais` VALUES ('73', 'Hong Kong', '');
INSERT INTO `gym_pais` VALUES ('74', 'Indonesia', '');
INSERT INTO `gym_pais` VALUES ('75', 'Jordania', '');
INSERT INTO `gym_pais` VALUES ('76', 'Malasia', '');
INSERT INTO `gym_pais` VALUES ('77', 'Singapur', '');
INSERT INTO `gym_pais` VALUES ('78', 'Taiwan', '');
INSERT INTO `gym_pais` VALUES ('79', 'Bosnia y Herzegovina', '');
INSERT INTO `gym_pais` VALUES ('80', 'Bahamas', '');
INSERT INTO `gym_pais` VALUES ('81', 'Chile', '');
INSERT INTO `gym_pais` VALUES ('82', 'Colombia', '');
INSERT INTO `gym_pais` VALUES ('83', 'Islandia', '');
INSERT INTO `gym_pais` VALUES ('84', 'Corea del Norte', '');
INSERT INTO `gym_pais` VALUES ('85', 'Macedonia', '');
INSERT INTO `gym_pais` VALUES ('86', 'Malta', '');
INSERT INTO `gym_pais` VALUES ('87', 'Pakistán', '');
INSERT INTO `gym_pais` VALUES ('88', 'Papúa-Nueva Guinea', '');
INSERT INTO `gym_pais` VALUES ('89', 'Perú', '');
INSERT INTO `gym_pais` VALUES ('90', 'Filipinas', '');
INSERT INTO `gym_pais` VALUES ('91', 'Arabia Saudita', '');
INSERT INTO `gym_pais` VALUES ('92', 'Tailandia', '');
INSERT INTO `gym_pais` VALUES ('93', 'Emiratos árabes Unidos', '');
INSERT INTO `gym_pais` VALUES ('94', 'Groenlandia', '');
INSERT INTO `gym_pais` VALUES ('95', 'Venezuela', '');
INSERT INTO `gym_pais` VALUES ('96', 'Zimbabwe', '');
INSERT INTO `gym_pais` VALUES ('97', 'Kenia', '');
INSERT INTO `gym_pais` VALUES ('98', 'Algeria', '');
INSERT INTO `gym_pais` VALUES ('99', 'Líbano', '');
INSERT INTO `gym_pais` VALUES ('100', 'Botsuana', '');
INSERT INTO `gym_pais` VALUES ('101', 'Tanzania', '');
INSERT INTO `gym_pais` VALUES ('102', 'Namibia', '');
INSERT INTO `gym_pais` VALUES ('103', 'Ecuador', '');
INSERT INTO `gym_pais` VALUES ('104', 'Marruecos', '');
INSERT INTO `gym_pais` VALUES ('105', 'Ghana', '');
INSERT INTO `gym_pais` VALUES ('106', 'Siria', '');
INSERT INTO `gym_pais` VALUES ('107', 'Nepal', '');
INSERT INTO `gym_pais` VALUES ('108', 'Mauritania', '');
INSERT INTO `gym_pais` VALUES ('109', 'Seychelles', '');
INSERT INTO `gym_pais` VALUES ('110', 'Paraguay', '');
INSERT INTO `gym_pais` VALUES ('111', 'Uruguay', '');
INSERT INTO `gym_pais` VALUES ('112', 'Congo (Brazzaville)', '');
INSERT INTO `gym_pais` VALUES ('113', 'Cuba', '');
INSERT INTO `gym_pais` VALUES ('114', 'Albania', '');
INSERT INTO `gym_pais` VALUES ('115', 'Nigeria', '');
INSERT INTO `gym_pais` VALUES ('116', 'Zambia', '');
INSERT INTO `gym_pais` VALUES ('117', 'Mozambique', '');
INSERT INTO `gym_pais` VALUES ('119', 'Angola', '');
INSERT INTO `gym_pais` VALUES ('120', 'Sri Lanka', '');
INSERT INTO `gym_pais` VALUES ('121', 'Etiopía', '');
INSERT INTO `gym_pais` VALUES ('122', 'Túnez', '');
INSERT INTO `gym_pais` VALUES ('123', 'Bolivia', '');
INSERT INTO `gym_pais` VALUES ('124', 'Panamá', '');
INSERT INTO `gym_pais` VALUES ('125', 'Malawi', '');
INSERT INTO `gym_pais` VALUES ('126', 'Liechtenstein', '');
INSERT INTO `gym_pais` VALUES ('127', 'Bahrein', '');
INSERT INTO `gym_pais` VALUES ('128', 'Barbados', '');
INSERT INTO `gym_pais` VALUES ('130', 'Chad', '');
INSERT INTO `gym_pais` VALUES ('131', 'Man, Isla de', '');
INSERT INTO `gym_pais` VALUES ('132', 'Jamaica', '');
INSERT INTO `gym_pais` VALUES ('133', 'Malí', '');
INSERT INTO `gym_pais` VALUES ('134', 'Madagascar', '');
INSERT INTO `gym_pais` VALUES ('135', 'Senegal', '');
INSERT INTO `gym_pais` VALUES ('136', 'Togo', '');
INSERT INTO `gym_pais` VALUES ('137', 'Honduras', '');
INSERT INTO `gym_pais` VALUES ('138', 'República Dominicana', '');
INSERT INTO `gym_pais` VALUES ('139', 'Mongolia', '');
INSERT INTO `gym_pais` VALUES ('140', 'Irak', '');
INSERT INTO `gym_pais` VALUES ('141', 'Sudáfrica', '');
INSERT INTO `gym_pais` VALUES ('142', 'Aruba', '');
INSERT INTO `gym_pais` VALUES ('143', 'Gibraltar', '');
INSERT INTO `gym_pais` VALUES ('144', 'Afganistán', '');
INSERT INTO `gym_pais` VALUES ('145', 'Andorra', '');
INSERT INTO `gym_pais` VALUES ('147', 'Antigua y Barbuda', '');
INSERT INTO `gym_pais` VALUES ('149', 'Bangladesh', '');
INSERT INTO `gym_pais` VALUES ('151', 'Benín', '');
INSERT INTO `gym_pais` VALUES ('152', 'Bután', '');
INSERT INTO `gym_pais` VALUES ('154', 'Islas Virgenes Británicas', '');
INSERT INTO `gym_pais` VALUES ('155', 'Brunéi', '');
INSERT INTO `gym_pais` VALUES ('156', 'Burkina Faso', '');
INSERT INTO `gym_pais` VALUES ('157', 'Burundi', '');
INSERT INTO `gym_pais` VALUES ('158', 'Camboya', '');
INSERT INTO `gym_pais` VALUES ('159', 'Cabo Verde', '');
INSERT INTO `gym_pais` VALUES ('164', 'Comores', '');
INSERT INTO `gym_pais` VALUES ('165', 'Congo (Kinshasa)', '');
INSERT INTO `gym_pais` VALUES ('166', 'Cook, Islas', '');
INSERT INTO `gym_pais` VALUES ('168', 'Costa de Marfil', '');
INSERT INTO `gym_pais` VALUES ('169', 'Djibouti, Yibuti', '');
INSERT INTO `gym_pais` VALUES ('171', 'Timor Oriental', '');
INSERT INTO `gym_pais` VALUES ('172', 'Guinea Ecuatorial', '');
INSERT INTO `gym_pais` VALUES ('173', 'Eritrea', '');
INSERT INTO `gym_pais` VALUES ('175', 'Feroe, Islas', '');
INSERT INTO `gym_pais` VALUES ('176', 'Fiyi', '');
INSERT INTO `gym_pais` VALUES ('178', 'Polinesia Francesa', '');
INSERT INTO `gym_pais` VALUES ('180', 'Gabón', '');
INSERT INTO `gym_pais` VALUES ('181', 'Gambia', '');
INSERT INTO `gym_pais` VALUES ('184', 'Granada', '');
INSERT INTO `gym_pais` VALUES ('185', 'Guatemala', '');
INSERT INTO `gym_pais` VALUES ('186', 'Guernsey', '');
INSERT INTO `gym_pais` VALUES ('187', 'Guinea', '');
INSERT INTO `gym_pais` VALUES ('188', 'Guinea-Bissau', '');
INSERT INTO `gym_pais` VALUES ('189', 'Guyana', '');
INSERT INTO `gym_pais` VALUES ('193', 'Jersey', '');
INSERT INTO `gym_pais` VALUES ('195', 'Kiribati', '');
INSERT INTO `gym_pais` VALUES ('196', 'Laos', '');
INSERT INTO `gym_pais` VALUES ('197', 'Lesotho', '');
INSERT INTO `gym_pais` VALUES ('198', 'Liberia', '');
INSERT INTO `gym_pais` VALUES ('200', 'Maldivas', '');
INSERT INTO `gym_pais` VALUES ('201', 'Martinica', '');
INSERT INTO `gym_pais` VALUES ('202', 'Mauricio', '');
INSERT INTO `gym_pais` VALUES ('205', 'Myanmar', '');
INSERT INTO `gym_pais` VALUES ('206', 'Nauru', '');
INSERT INTO `gym_pais` VALUES ('207', 'Antillas Holandesas', '');
INSERT INTO `gym_pais` VALUES ('208', 'Nueva Caledonia', '');
INSERT INTO `gym_pais` VALUES ('209', 'Nicaragua', '');
INSERT INTO `gym_pais` VALUES ('210', 'Níger', '');
INSERT INTO `gym_pais` VALUES ('212', 'Norfolk Island', '');
INSERT INTO `gym_pais` VALUES ('213', 'Omán', '');
INSERT INTO `gym_pais` VALUES ('215', 'Isla Pitcairn', '');
INSERT INTO `gym_pais` VALUES ('216', 'Qatar', '');
INSERT INTO `gym_pais` VALUES ('217', 'Ruanda', '');
INSERT INTO `gym_pais` VALUES ('218', 'Santa Elena', '');
INSERT INTO `gym_pais` VALUES ('219', 'San Cristobal y Nevis', '');
INSERT INTO `gym_pais` VALUES ('220', 'Santa Lucía', '');
INSERT INTO `gym_pais` VALUES ('221', 'San Pedro y Miquelón', '');
INSERT INTO `gym_pais` VALUES ('222', 'San Vincente y Granadinas', '');
INSERT INTO `gym_pais` VALUES ('223', 'Samoa', '');
INSERT INTO `gym_pais` VALUES ('224', 'San Marino', '');
INSERT INTO `gym_pais` VALUES ('225', 'San Tomé y Príncipe', '');
INSERT INTO `gym_pais` VALUES ('226', 'Serbia y Montenegro', '');
INSERT INTO `gym_pais` VALUES ('227', 'Sierra Leona', '');
INSERT INTO `gym_pais` VALUES ('228', 'Islas Salomón', '');
INSERT INTO `gym_pais` VALUES ('229', 'Somalia', '');
INSERT INTO `gym_pais` VALUES ('232', 'Sudán', '');
INSERT INTO `gym_pais` VALUES ('234', 'Swazilandia', '');
INSERT INTO `gym_pais` VALUES ('235', 'Tokelau', '');
INSERT INTO `gym_pais` VALUES ('236', 'Tonga', '');
INSERT INTO `gym_pais` VALUES ('237', 'Trinidad y Tobago', '');
INSERT INTO `gym_pais` VALUES ('239', 'Tuvalu', '');
INSERT INTO `gym_pais` VALUES ('240', 'Vanuatu', '');
INSERT INTO `gym_pais` VALUES ('241', 'Wallis y Futuna', '');
INSERT INTO `gym_pais` VALUES ('242', 'Sáhara Occidental', '');
INSERT INTO `gym_pais` VALUES ('243', 'Yemen', '');
INSERT INTO `gym_pais` VALUES ('246', 'Puerto Rico', '');
