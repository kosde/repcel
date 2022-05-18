-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 29-12-2014 a las 10:23:00
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `demo`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `cotizaciones_demo`
-- 

CREATE TABLE `cotizaciones_demo` (
  `id_cotizacion` int(11) NOT NULL auto_increment,
  `numero_cotizacion` int(11) NOT NULL,
  `fecha_cotizacion` datetime NOT NULL,
  `atencion` varchar(50) NOT NULL,
  `tel1` varchar(9) NOT NULL,
  `empresa` varchar(75) NOT NULL,
  `tel2` varchar(9) NOT NULL,
  `email` varchar(30) NOT NULL,
  `condiciones_pago` char(20) NOT NULL,
  `validez_oferta` varchar(20) NOT NULL,
  `tiempo_entrega` char(20) NOT NULL,
  `vendedor` int(11) NOT NULL,
  PRIMARY KEY  (`id_cotizacion`),
  UNIQUE KEY `numero_cotizacion` (`numero_cotizacion`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `cotizaciones_demo`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `detalle_cotizacion_demo`
-- 

CREATE TABLE `detalle_cotizacion_demo` (
  `id_detalle_cotizacion` int(11) NOT NULL auto_increment,
  `numero_cotizacion` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio_venta` double NOT NULL,
  PRIMARY KEY  (`id_detalle_cotizacion`),
  KEY `numero_cotizacion` (`numero_cotizacion`,`id_producto`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `detalle_cotizacion_demo`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `marcas_demo`
-- 

CREATE TABLE `marcas_demo` (
  `id_marca` int(11) NOT NULL auto_increment,
  `nombre_marca` char(40) NOT NULL,
  PRIMARY KEY  (`id_marca`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=89 ;

-- 
-- Volcar la base de datos para la tabla `marcas_demo`
-- 

INSERT INTO `marcas_demo` VALUES (1, 'Mega');
INSERT INTO `marcas_demo` VALUES (2, 'HP');
INSERT INTO `marcas_demo` VALUES (3, 'Black and decker');
INSERT INTO `marcas_demo` VALUES (4, 'Honda');
INSERT INTO `marcas_demo` VALUES (5, 'Pedrollo');
INSERT INTO `marcas_demo` VALUES (6, 'Taifu');
INSERT INTO `marcas_demo` VALUES (7, 'Porter cable');
INSERT INTO `marcas_demo` VALUES (8, 'Milwaukee');
INSERT INTO `marcas_demo` VALUES (9, 'Riggid');
INSERT INTO `marcas_demo` VALUES (10, 'Karcher');
INSERT INTO `marcas_demo` VALUES (11, 'Lincoln electric');
INSERT INTO `marcas_demo` VALUES (12, 'Goni');
INSERT INTO `marcas_demo` VALUES (13, 'Poulan');
INSERT INTO `marcas_demo` VALUES (14, 'Bosch');
INSERT INTO `marcas_demo` VALUES (15, 'Franklin electric');
INSERT INTO `marcas_demo` VALUES (16, 'Shell Helix');
INSERT INTO `marcas_demo` VALUES (17, 'QUINCIP');
INSERT INTO `marcas_demo` VALUES (18, 'Briggs stratton');
INSERT INTO `marcas_demo` VALUES (19, 'Champions');
INSERT INTO `marcas_demo` VALUES (20, 'Parker');
INSERT INTO `marcas_demo` VALUES (21, 'Norflex');
INSERT INTO `marcas_demo` VALUES (22, 'Campbell Hausfeld');
INSERT INTO `marcas_demo` VALUES (23, 'Koyo');
INSERT INTO `marcas_demo` VALUES (24, 'Alkota');
INSERT INTO `marcas_demo` VALUES (25, 'Amsterdam');
INSERT INTO `marcas_demo` VALUES (26, 'Oster');
INSERT INTO `marcas_demo` VALUES (27, 'Trupper');
INSERT INTO `marcas_demo` VALUES (28, 'Truck Hose');
INSERT INTO `marcas_demo` VALUES (29, 'Trapp');
INSERT INTO `marcas_demo` VALUES (30, 'Ducar');
INSERT INTO `marcas_demo` VALUES (31, 'Brahman');
INSERT INTO `marcas_demo` VALUES (32, 'Ngk');
INSERT INTO `marcas_demo` VALUES (33, 'Midwest Can');
INSERT INTO `marcas_demo` VALUES (34, 'Maccolloch');
INSERT INTO `marcas_demo` VALUES (35, 'Nuvo');
INSERT INTO `marcas_demo` VALUES (36, 'Oregon');
INSERT INTO `marcas_demo` VALUES (37, 'Swingfog');
INSERT INTO `marcas_demo` VALUES (38, 'Irwin');
INSERT INTO `marcas_demo` VALUES (39, 'Makita');
INSERT INTO `marcas_demo` VALUES (40, 'Hilti');
INSERT INTO `marcas_demo` VALUES (41, 'JOHN DEERE');
INSERT INTO `marcas_demo` VALUES (42, 'Valdoch');
INSERT INTO `marcas_demo` VALUES (43, 'JAZ');
INSERT INTO `marcas_demo` VALUES (44, 'Stanley');
INSERT INTO `marcas_demo` VALUES (45, 'Pressure wave');
INSERT INTO `marcas_demo` VALUES (46, 'Delta');
INSERT INTO `marcas_demo` VALUES (47, 'Urrea');
INSERT INTO `marcas_demo` VALUES (48, 'Skil');
INSERT INTO `marcas_demo` VALUES (49, 'Surtek');
INSERT INTO `marcas_demo` VALUES (50, 'China');
INSERT INTO `marcas_demo` VALUES (51, 'Foy');
INSERT INTO `marcas_demo` VALUES (52, 'Amana tool');
INSERT INTO `marcas_demo` VALUES (53, 'Norton');
INSERT INTO `marcas_demo` VALUES (54, '3M');
INSERT INTO `marcas_demo` VALUES (55, 'Square');
INSERT INTO `marcas_demo` VALUES (56, 'Vanguard');
INSERT INTO `marcas_demo` VALUES (57, 'Gbs');
INSERT INTO `marcas_demo` VALUES (58, 'Quality');
INSERT INTO `marcas_demo` VALUES (59, 'Miller');
INSERT INTO `marcas_demo` VALUES (60, 'Mundial');
INSERT INTO `marcas_demo` VALUES (61, 'Fini');
INSERT INTO `marcas_demo` VALUES (62, 'Nova');
INSERT INTO `marcas_demo` VALUES (63, 'Somar');
INSERT INTO `marcas_demo` VALUES (64, 'Timberline');
INSERT INTO `marcas_demo` VALUES (65, 'Forte');
INSERT INTO `marcas_demo` VALUES (66, 'Aguila');
INSERT INTO `marcas_demo` VALUES (67, 'Kimberly Clark');
INSERT INTO `marcas_demo` VALUES (68, 'Diamond');
INSERT INTO `marcas_demo` VALUES (69, 'Schulz');
INSERT INTO `marcas_demo` VALUES (70, 'Genteq');
INSERT INTO `marcas_demo` VALUES (71, 'Bellota');
INSERT INTO `marcas_demo` VALUES (72, 'Ultra');
INSERT INTO `marcas_demo` VALUES (73, 'Craftsman');
INSERT INTO `marcas_demo` VALUES (74, 'Asein');
INSERT INTO `marcas_demo` VALUES (75, 'Knova');
INSERT INTO `marcas_demo` VALUES (76, 'Generica');
INSERT INTO `marcas_demo` VALUES (77, 'Sagola');
INSERT INTO `marcas_demo` VALUES (78, 'Arvek');
INSERT INTO `marcas_demo` VALUES (79, 'Yale');
INSERT INTO `marcas_demo` VALUES (80, 'Leeson');
INSERT INTO `marcas_demo` VALUES (81, 'Siemen');
INSERT INTO `marcas_demo` VALUES (82, 'Baldor');
INSERT INTO `marcas_demo` VALUES (83, 'StaRite');
INSERT INTO `marcas_demo` VALUES (84, 'Diablo');
INSERT INTO `marcas_demo` VALUES (88, 'ARO');
INSERT INTO `marcas_demo` VALUES (86, 'Booster');
INSERT INTO `marcas_demo` VALUES (87, 'Dremel');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `productos_demo`
-- 

CREATE TABLE `productos_demo` (
  `id_producto` int(11) NOT NULL auto_increment,
  `codigo_producto` char(20) NOT NULL,
  `nombre_producto` char(100) NOT NULL,
  `modelo_producto` varchar(30) NOT NULL,
  `id_departamento_producto` int(11) NOT NULL,
  `id_marca_producto` int(11) NOT NULL,
  `status_producto` tinyint(4) NOT NULL,
  `unidad_medida_producto` char(20) NOT NULL,
  `peso_producto` char(20) NOT NULL,
  `date_added` datetime NOT NULL,
  `precio_producto` double NOT NULL,
  PRIMARY KEY  (`id_producto`),
  UNIQUE KEY `codigo_producto` (`codigo_producto`),
  KEY `id_departamento_producto` (`id_departamento_producto`),
  KEY `id_marca_producto` (`id_marca_producto`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4301 ;

-- 
-- Volcar la base de datos para la tabla `productos_demo`
-- 

INSERT INTO `productos_demo` VALUES (1, 'MG01', 'Mouse inalambrico', '', 3, 1, 1, 'Cada una', 'sin peso', '2013-03-25 20:35:15', 10);
INSERT INTO `productos_demo` VALUES (2, 'TCL01', 'Teclado multimedia', '', 3, 1, 1, '', '', '2013-03-25 20:35:15', 15);
INSERT INTO `productos_demo` VALUES (3, 'ILK059', 'Nuevo mini 2.4g micro inalambrico de teclado', '', 3, 1, 1, '', '', '2013-03-25 20:35:15', 25);
INSERT INTO `productos_demo` VALUES (4, '4520', 'TECLADO para HP 4520', 'MS250', 3, 2, 1, '', '', '2013-03-25 20:35:15', 40);
INSERT INTO `productos_demo` VALUES (5, 'A081', 'Altavoz de la computadora', '', 3, 2, 1, '', '', '2013-03-25 20:35:15', 18);
INSERT INTO `productos_demo` VALUES (64, 'MSD01', '2GB Tarjeta Micro SD', '', 2, 2, 1, '', '', '2013-03-25 20:35:15', 5);
INSERT INTO `productos_demo` VALUES (65, 'AUR01', 'Adaptador usb para radio cd', '', 2, 2, 1, '', '', '2013-03-25 20:35:15', 5);
INSERT INTO `productos_demo` VALUES (66, 'SA-205', '2.0 de canal de sonido multimedia sa-205', '', 2, 2, 1, '', '', '2013-03-25 20:35:15', 13);
INSERT INTO `productos_demo` VALUES (67, 'KB-1830', 'Teclado multimedia de alta calidad', '', 2, 1, 1, '', '', '2013-03-25 20:35:15', 12);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `tmp_cotizacion`
-- 

CREATE TABLE `tmp_cotizacion` (
  `id_tmp` int(11) NOT NULL auto_increment,
  `id_producto` int(11) NOT NULL,
  `cantidad_tmp` int(11) NOT NULL,
  `precio_tmp` double(8,2) default NULL,
  `session_id` varchar(100) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id_tmp`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `tmp_cotizacion`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `user_demo`
-- 

CREATE TABLE `user_demo` (
  `user_id` int(11) NOT NULL auto_increment,
  `firstname` varchar(32) character set utf8 collate utf8_bin NOT NULL default '',
  `lastname` varchar(32) character set utf8 collate utf8_bin NOT NULL default '',
  `email` varchar(96) character set utf8 collate utf8_bin NOT NULL default '',
  `code` varchar(32) character set utf8 collate utf8_bin NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date_added` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- Volcar la base de datos para la tabla `user_demo`
-- 

INSERT INTO `user_demo` VALUES (1, 0x4f626564, 0x416c76617261646f, 0x6a6f617175696e6f62656440676d61696c2e636f6d, 0x32353535, 1, '2014-04-11 00:00:00');
