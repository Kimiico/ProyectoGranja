-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-06-2020 a las 21:47:43
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd-granja`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuadra`
--

CREATE TABLE `cuadra` (
  `no` int(255) NOT NULL,
  `cuadra_id` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `capacidad_max` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cuadra`
--

INSERT INTO `cuadra` (`no`, `cuadra_id`, `nombre`, `capacidad_max`) VALUES
(1, '1-g', 'Bacas', '10000'),
(3, '1243-g', 'Ovejas', '200');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lote`
--

CREATE TABLE `lote` (
  `no` int(255) NOT NULL,
  `lote_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cantidad` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sexo` enum('M','F','O','') COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `lote`
--

INSERT INTO `lote` (`no`, `lote_id`, `nombre`, `cantidad`, `sexo`, `fecha`) VALUES
(1, 'id de prueba', 'prueba #1', '10', 'M', '2020-06-13'),
(3, '123-j', 'Bacas', '', 'M', '0000-00-00'),
(4, '123-j', 'oioioi', '1000', 'M', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nave`
--

CREATE TABLE `nave` (
  `no` int(255) NOT NULL,
  `nave_id` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `m2` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `nave`
--

INSERT INTO `nave` (`no`, `nave_id`, `nombre`, `m2`) VALUES
(1, '3444', 'Bacas', 1000);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cuadra`
--
ALTER TABLE `cuadra`
  ADD PRIMARY KEY (`no`);

--
-- Indices de la tabla `lote`
--
ALTER TABLE `lote`
  ADD PRIMARY KEY (`no`);

--
-- Indices de la tabla `nave`
--
ALTER TABLE `nave`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cuadra`
--
ALTER TABLE `cuadra`
  MODIFY `no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `lote`
--
ALTER TABLE `lote`
  MODIFY `no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `nave`
--
ALTER TABLE `nave`
  MODIFY `no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
