-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2022 a las 06:37:09
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_mundial`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE `grupo` (
  `id_grupo` int(11) NOT NULL,
  `grupo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`id_grupo`, `grupo`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C'),
(4, 'D');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partido`
--

CREATE TABLE `partido` (
  `id_partido` int(11) NOT NULL,
  `id_seleccion` int(11) NOT NULL,
  `id_seleccion_dos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `partido`
--

INSERT INTO `partido` (`id_partido`, `id_seleccion`, `id_seleccion_dos`) VALUES
(1, 1, 2),
(2, 3, 4),
(3, 1, 3),
(4, 2, 4),
(5, 2, 3),
(6, 4, 1),
(7, 5, 6),
(8, 7, 8),
(9, 6, 7),
(10, 8, 5),
(11, 5, 7),
(12, 8, 6),
(13, 9, 10),
(14, 11, 12),
(15, 10, 12),
(16, 11, 9),
(17, 12, 9),
(18, 10, 11),
(19, 13, 14),
(20, 15, 16),
(21, 14, 15),
(22, 13, 16),
(23, 15, 13),
(24, 16, 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultado`
--

CREATE TABLE `resultado` (
  `id_resultado` int(11) NOT NULL,
  `id_partido` int(11) NOT NULL,
  `goles_equipo_uno` int(11) NOT NULL,
  `goles_equipo_dos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `resultado`
--

INSERT INTO `resultado` (`id_resultado`, `id_partido`, `goles_equipo_uno`, `goles_equipo_dos`) VALUES
(1, 1, 3, 2),
(2, 2, 1, 0),
(3, 3, 3, 1),
(4, 4, 2, 3),
(5, 5, 0, 2),
(6, 6, 2, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seleccion`
--

CREATE TABLE `seleccion` (
  `id_seleccion` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `grupo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `seleccion`
--

INSERT INTO `seleccion` (`id_seleccion`, `nombre`, `grupo`) VALUES
(1, 'Colombia', 1),
(2, 'Francia', 1),
(3, 'Nigeria', 1),
(4, 'Corea', 1),
(5, 'Inglaterra', 2),
(6, 'Uruguay', 2),
(7, 'Japon', 2),
(8, 'Nueva Zelanda', 2),
(9, 'Brasil', 3),
(10, 'España', 3),
(11, 'Senegal', 3),
(12, 'Jamaica', 3),
(13, 'Argentina', 4),
(14, 'Portugal', 4),
(15, 'Italia', 4),
(16, 'Mexico', 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`id_grupo`);

--
-- Indices de la tabla `partido`
--
ALTER TABLE `partido`
  ADD PRIMARY KEY (`id_partido`),
  ADD KEY `partido_equipo_uno` (`id_seleccion`),
  ADD KEY `partido_equipo_dos` (`id_seleccion_dos`);

--
-- Indices de la tabla `resultado`
--
ALTER TABLE `resultado`
  ADD PRIMARY KEY (`id_resultado`),
  ADD KEY `resultado_idx` (`id_partido`);

--
-- Indices de la tabla `seleccion`
--
ALTER TABLE `seleccion`
  ADD PRIMARY KEY (`id_seleccion`),
  ADD KEY `Grp_Sel` (`grupo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `grupo`
--
ALTER TABLE `grupo`
  MODIFY `id_grupo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `partido`
--
ALTER TABLE `partido`
  MODIFY `id_partido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `resultado`
--
ALTER TABLE `resultado`
  MODIFY `id_resultado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `seleccion`
--
ALTER TABLE `seleccion`
  MODIFY `id_seleccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `partido`
--
ALTER TABLE `partido`
  ADD CONSTRAINT `id_seleccionTeamOne` FOREIGN KEY (`id_seleccion`) REFERENCES `seleccion` (`id_seleccion`),
  ADD CONSTRAINT `id_seleccionTeamTwo` FOREIGN KEY (`id_seleccion_dos`) REFERENCES `seleccion` (`id_seleccion`);

--
-- Filtros para la tabla `resultado`
--
ALTER TABLE `resultado`
  ADD CONSTRAINT `id_partidoScore` FOREIGN KEY (`id_partido`) REFERENCES `partido` (`id_partido`);

--
-- Filtros para la tabla `seleccion`
--
ALTER TABLE `seleccion`
  ADD CONSTRAINT `GrpSel` FOREIGN KEY (`grupo`) REFERENCES `grupo` (`id_grupo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
