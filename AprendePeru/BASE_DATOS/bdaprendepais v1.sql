-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 04-12-2011 a las 01:41:49
-- Versión del servidor: 5.5.8
-- Versión de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bdaprendepais`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bandera`
--

CREATE TABLE IF NOT EXISTS `bandera` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ubicacion` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL,
  `pais_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_bandera_pais1` (`pais_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `bandera`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_examen`
--

CREATE TABLE IF NOT EXISTS `detalle_examen` (
  `examen_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `puntaje` int(11) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `fechahora` datetime DEFAULT NULL,
  KEY `fk_detalle_examen_examen` (`examen_id`),
  KEY `fk_detalle_examen_usuario1` (`usuario_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcar la base de datos para la tabla `detalle_examen`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_idioma`
--

CREATE TABLE IF NOT EXISTS `detalle_idioma` (
  `idioma_id` int(11) NOT NULL,
  `pais_id` int(11) NOT NULL,
  KEY `fk_detalle_idioma_idioma1` (`idioma_id`),
  KEY `fk_detalle_idioma_pais1` (`pais_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcar la base de datos para la tabla `detalle_idioma`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_ubicacion`
--

CREATE TABLE IF NOT EXISTS `detalle_ubicacion` (
  `ubicacion_id` int(11) NOT NULL,
  `pais_id` int(11) NOT NULL,
  KEY `fk_detalle_ubicacion_ubicacion1` (`ubicacion_id`),
  KEY `fk_detalle_ubicacion_pais1` (`pais_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcar la base de datos para la tabla `detalle_ubicacion`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `examen`
--

CREATE TABLE IF NOT EXISTS `examen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL,
  `pass` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL,
  `usuario_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_examen_usuario1` (`usuario_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `examen`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idioma`
--

CREATE TABLE IF NOT EXISTS `idioma` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricion` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `idioma`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `moneda`
--

CREATE TABLE IF NOT EXISTS `moneda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL,
  `pais_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_moneda_pais1` (`pais_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `moneda`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE IF NOT EXISTS `pais` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `pais`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta`
--

CREATE TABLE IF NOT EXISTS `pregunta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `p_tipo` int(11) DEFAULT NULL,
  `p_id` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL,
  `r_tipo` int(11) DEFAULT NULL,
  `r_id` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL,
  `examen_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_pregunta_examen1` (`examen_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `pregunta`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presidente`
--

CREATE TABLE IF NOT EXISTS `presidente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL,
  `pais_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_presidente_pais1` (`pais_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `presidente`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE IF NOT EXISTS `tipo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `tipo`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicacion`
--

CREATE TABLE IF NOT EXISTS `ubicacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ubicacion` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `ubicacion`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL,
  `user` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL,
  `pass` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL,
  `tipo_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_usuario_tipo1` (`tipo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `usuario`
--


--
-- Filtros para las tablas descargadas (dump)
--

--
-- Filtros para la tabla `bandera`
--
ALTER TABLE `bandera`
  ADD CONSTRAINT `fk_bandera_pais1` FOREIGN KEY (`pais_id`) REFERENCES `pais` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `detalle_examen`
--
ALTER TABLE `detalle_examen`
  ADD CONSTRAINT `fk_detalle_examen_examen` FOREIGN KEY (`examen_id`) REFERENCES `examen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_detalle_examen_usuario1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `detalle_idioma`
--
ALTER TABLE `detalle_idioma`
  ADD CONSTRAINT `fk_detalle_idioma_idioma1` FOREIGN KEY (`idioma_id`) REFERENCES `idioma` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_detalle_idioma_pais1` FOREIGN KEY (`pais_id`) REFERENCES `pais` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `detalle_ubicacion`
--
ALTER TABLE `detalle_ubicacion`
  ADD CONSTRAINT `fk_detalle_ubicacion_ubicacion1` FOREIGN KEY (`ubicacion_id`) REFERENCES `ubicacion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_detalle_ubicacion_pais1` FOREIGN KEY (`pais_id`) REFERENCES `pais` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `examen`
--
ALTER TABLE `examen`
  ADD CONSTRAINT `fk_examen_usuario1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `moneda`
--
ALTER TABLE `moneda`
  ADD CONSTRAINT `fk_moneda_pais1` FOREIGN KEY (`pais_id`) REFERENCES `pais` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pregunta`
--
ALTER TABLE `pregunta`
  ADD CONSTRAINT `fk_pregunta_examen1` FOREIGN KEY (`examen_id`) REFERENCES `examen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `presidente`
--
ALTER TABLE `presidente`
  ADD CONSTRAINT `fk_presidente_pais1` FOREIGN KEY (`pais_id`) REFERENCES `pais` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_tipo1` FOREIGN KEY (`tipo_id`) REFERENCES `tipo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
