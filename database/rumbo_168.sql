-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-11-2026 a las 05:51:13
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `rumbo_168`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `test_emocional`
--

CREATE TABLE `test_emocional` (
  `id` int(11) NOT NULL,
  `alumno` varchar(100) NOT NULL,
  `fecha` datetime DEFAULT current_timestamp(),
  `pregunta1` tinyint(4) NOT NULL,
  `pregunta2` tinyint(4) NOT NULL,
  `pregunta3` tinyint(4) NOT NULL,
  `pregunta4` tinyint(4) NOT NULL,
  `pregunta5` tinyint(4) NOT NULL,
  `pregunta6` tinyint(4) NOT NULL,
  `pregunta7` tinyint(4) NOT NULL,
  `pregunta8` tinyint(4) NOT NULL,
  `pregunta9` tinyint(4) NOT NULL,
  `pregunta10` tinyint(4) NOT NULL,
  `puntuacion_final` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `test_emocional`
--

INSERT INTO `test_emocional` (`id`, `alumno`, `fecha`, `pregunta1`, `pregunta2`, `pregunta3`, `pregunta4`, `pregunta5`, `pregunta6`, `pregunta7`, `pregunta8`, `pregunta9`, `pregunta10`, `puntuacion_final`) VALUES
(1, 'Artemio', '2026-11-02 12:58:08', 1, 5, 5, 1, 1, 4, 3, 2, 1, 1, 0),
(2, 'Artemio', '2026-11-02 12:58:15', 1, 5, 5, 1, 1, 4, 3, 2, 1, 1, 0),
(3, 'Noe', '2026-11-03 00:00:00', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `test_emocional`
--
ALTER TABLE `test_emocional`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `test_emocional`
--
ALTER TABLE `test_emocional`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
