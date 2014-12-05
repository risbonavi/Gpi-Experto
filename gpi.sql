-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 05-12-2014 a las 16:50:42
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `gpi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuestados`
--

CREATE TABLE IF NOT EXISTS `encuestados` (
  `id_encuestados` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombres` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `rut` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  PRIMARY KEY (`id_encuestados`),
  UNIQUE KEY `rut` (`rut`),
  UNIQUE KEY `id` (`id_encuestados`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `encuestados`
--

INSERT INTO `encuestados` (`id_encuestados`, `nombres`, `apellidos`, `rut`, `correo`) VALUES
(1, 'neftali', 'neftali2', 'r1', '1@1.com'),
(2, 'pedro', 'pedro2', 'r2', '2@2.com'),
(3, 'cristian', 'cristian2', 'r3', '3@3.com'),
(4, 'boris', 'boris2', 'r4', '4@4.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transacciones`
--

CREATE TABLE IF NOT EXISTS `transacciones` (
  `id_transacciones` int(11) NOT NULL AUTO_INCREMENT,
  `rut` varchar(255) DEFAULT NULL,
  `cargo_final` varchar(255) DEFAULT NULL,
  `Nivel` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_transacciones`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `transacciones`
--

INSERT INTO `transacciones` (`id_transacciones`, `rut`, `cargo_final`, `Nivel`) VALUES
(1, 'r1', 'representante_ventas', 'Tactico'),
(2, 'r2', 'contador', 'Tactico'),
(3, 'r3', 'contador', 'Tactico'),
(4, 'r4', 'gerente_produccion', 'Estrategico');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
