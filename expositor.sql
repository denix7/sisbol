-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-10-2017 a las 06:00:49
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `expositor`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `expo`
--

CREATE TABLE `expo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `expo`
--

INSERT INTO `expo` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Mark Elliot Zuckerberg', 'Facebook es un sitio web de redes sociales creado por Mark Zuckerberg y fundado junto a Eduardo Saverin, Chris Hughes y Dustin Moskovitz. Originalmente era un sitio para estudiantes de la Universidad de Harvard'),
(2, 'Steven Paul Jobs', 'Apple Inc. es una empresa multinacional estadounidense que diseña y produce equipos electrónicos, software y servicios en línea, con sede en Cupertino y la sede europea en la ciudad de Cork'),
(3, 'Jan Koum', 'WhatsApp es una aplicación de mensajería instantánea para teléfonos inteligentes, que envía ... WhatsApp Inc. fue fundada en 2009 por Jan Koum (quien había llegado desde Ucrania a Estados Unidos a principios ');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `expo`
--
ALTER TABLE `expo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `expo`
--
ALTER TABLE `expo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
