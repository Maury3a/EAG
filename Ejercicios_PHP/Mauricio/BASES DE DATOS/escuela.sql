-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-04-2019 a las 11:36:42
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `escuela`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `dni` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `nom_alum` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_nac` date NOT NULL,
  `provincia` set('Granada','Jaen','Malaga') COLLATE utf8_unicode_ci NOT NULL,
  `beca` set('Si','No') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`dni`, `nom_alum`, `fecha_nac`, `provincia`, `beca`) VALUES
('11111111Z', 'Lucía', '1992-05-12', 'Malaga', 'No'),
('12345678C', 'Luis', '1995-01-13', 'Granada', 'Si'),
('33333333R', 'César', '1993-09-08', 'Granada', 'No'),
('55555555T', 'Roberto', '1998-11-24', 'Malaga', 'Si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignaturas`
--

CREATE TABLE `asignaturas` (
  `cod_asig` int(20) NOT NULL,
  `nom_asig` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `creditos` int(2) DEFAULT NULL,
  `curso` set('1','2','3') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `asignaturas`
--

INSERT INTO `asignaturas` (`cod_asig`, `nom_asig`, `creditos`, `curso`) VALUES
(1, 'Lengua', 14, '1'),
(2, 'Matematicas', 8, '1'),
(3, 'Ciencias', 19, '2'),
(4, 'Literatura', 7, '2'),
(5, 'Historia', 25, '1'),
(6, 'Dibujo', 12, '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aula`
--

CREATE TABLE `aula` (
  `cod_aula` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `capacidad` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `aula`
--

INSERT INTO `aula` (`cod_aula`, `capacidad`) VALUES
('A1', 25),
('A2', 30),
('A3', 32);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE `grupo` (
  `cod_gru` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `cod_asig` int(20) NOT NULL,
  `nrp` int(2) NOT NULL,
  `cod_aula` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` set('M','T') COLLATE utf8_unicode_ci NOT NULL,
  `max_al` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`cod_gru`, `cod_asig`, `nrp`, `cod_aula`, `tipo`, `max_al`) VALUES
('G1', 2, 21, 'A1', 'M', 23),
('G2', 1, 15, 'A2', 'M', 18),
('G3', 3, 21, 'A3', 'M', 20),
('G4', 3, 15, 'A3', 'T', 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matriculas`
--

CREATE TABLE `matriculas` (
  `cod_asig` int(20) NOT NULL,
  `dni` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `convocatoria` int(1) NOT NULL,
  `calificacion` decimal(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `matriculas`
--

INSERT INTO `matriculas` (`cod_asig`, `dni`, `convocatoria`, `calificacion`) VALUES
(1, '11111111Z', 1, '2.00'),
(1, '11111111Z', 2, '5.00'),
(1, '12345678C', 1, '7.00'),
(1, '12345678C', 2, '1.00'),
(2, '11111111Z', 1, '4.00'),
(2, '33333333R', 1, '3.00'),
(2, '55555555T', 1, '6.00'),
(3, '11111111Z', 1, '6.00'),
(4, '12345678C', 1, '2.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `nrp` int(2) NOT NULL,
  `nom_prof` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `categoria` set('Titular','Suplente') COLLATE utf8_unicode_ci NOT NULL,
  `area` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `cod_dpto` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`nrp`, `nom_prof`, `categoria`, `area`, `cod_dpto`) VALUES
(21, 'Alfonso', 'Suplente', 'Científica', 3),
(34, 'Helena', 'Suplente', 'Científica', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`dni`);

--
-- Indices de la tabla `asignaturas`
--
ALTER TABLE `asignaturas`
  ADD PRIMARY KEY (`cod_asig`,`nom_asig`);

--
-- Indices de la tabla `aula`
--
ALTER TABLE `aula`
  ADD PRIMARY KEY (`cod_aula`);

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`cod_gru`,`cod_asig`,`nrp`,`cod_aula`);

--
-- Indices de la tabla `matriculas`
--
ALTER TABLE `matriculas`
  ADD PRIMARY KEY (`cod_asig`,`dni`,`convocatoria`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`nrp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
