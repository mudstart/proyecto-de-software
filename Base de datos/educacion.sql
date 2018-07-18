-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 01-04-2017 a las 18:34:10
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `educacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura`
--

CREATE TABLE `asignatura` (
  `ID_ASIGNATURA` int(11) NOT NULL,
  `NOMBRE` varchar(20) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `asignatura`
--

INSERT INTO `asignatura` (`ID_ASIGNATURA`, `NOMBRE`) VALUES
(1, 'Lengua Española'),
(2, 'Matemática'),
(3, 'Biología'),
(4, 'Ciencia Naturales'),
(5, 'Química Orgánica'),
(6, 'Inglés'),
(7, 'Francés'),
(8, 'Educación Física'),
(9, 'Formación I.H.R'),
(10, 'Educación Artística'),
(11, 'Historia Universal'),
(12, 'Ciencia Sociales'),
(13, 'Informática'),
(14, 'Lab. de Informática'),
(15, 'Educación Cívica'),
(16, 'Cultura Emprendedora'),
(17, 'Orientación');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asig_prof`
--

CREATE TABLE `asig_prof` (
  `ASIG_PROF` int(11) NOT NULL,
  `ID_PROFESOR` bigint(255) NOT NULL,
  `ID_ASIGNATURA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `asig_prof`
--

INSERT INTO `asig_prof` (`ASIG_PROF`, `ID_PROFESOR`, `ID_ASIGNATURA`) VALUES
(1, 1, 7),
(2, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificacion`
--

CREATE TABLE `calificacion` (
  `ID_CALIFICACION` bigint(255) NOT NULL,
  `ID_PROFESOR` bigint(255) NOT NULL,
  `ID_ASIGNATURA` int(11) NOT NULL,
  `ID_ESTUDIANTE` bigint(255) NOT NULL,
  `P` int(3) NOT NULL,
  `S` int(3) NOT NULL,
  `T` int(3) NOT NULL,
  `C` int(3) NOT NULL,
  `Q` int(3) NOT NULL,
  `CFP_1` int(3) NOT NULL,
  `P_2` int(3) NOT NULL,
  `S_2` int(3) NOT NULL,
  `T_2` int(3) NOT NULL,
  `C_2` int(3) NOT NULL,
  `Q_2` int(3) NOT NULL,
  `CFP_2` int(3) NOT NULL,
  `CFA` int(3) NOT NULL,
  `PC` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `calificacion`
--

INSERT INTO `calificacion` (`ID_CALIFICACION`, `ID_PROFESOR`, `ID_ASIGNATURA`, `ID_ESTUDIANTE`, `P`, `S`, `T`, `C`, `Q`, `CFP_1`, `P_2`, `S_2`, `T_2`, `C_2`, `Q_2`, `CFP_2`, `CFA`, `PC`) VALUES
(1, 2, 1, 1, 86, 91, 92, 93, 85, 0, 90, 95, 96, 98, 88, 0, 0, 0),
(2, 2, 1, 2, 70, 45, 67, 78, 90, 0, 98, 76, 67, 89, 89, 0, 0, 0),
(3, 1, 7, 1, 56, 78, 98, 87, 67, 0, 79, 98, 88, 78, 98, 0, 0, 0),
(4, 1, 7, 2, 80, 98, 76, 57, 78, 0, 89, 76, 79, 88, 78, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conducta`
--

CREATE TABLE `conducta` (
  `ID_CONDUCTA` int(11) NOT NULL,
  `ID_DIRECTOR` bigint(255) NOT NULL,
  `ID_ESTUDIANTE` bigint(255) NOT NULL,
  `DESCRIPCION` text COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `ID_CURSO` int(11) NOT NULL,
  `ID_RECINTO` bigint(255) NOT NULL,
  `NOMBRE` varchar(4) COLLATE utf8_spanish2_ci NOT NULL,
  `PUPITRES` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`ID_CURSO`, `ID_RECINTO`, `NOMBRE`, `PUPITRES`) VALUES
(1, 1, '1roA', 25),
(2, 1, '2doB', 30),
(3, 2, '3roA', 20),
(4, 2, '4toB', 23);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cur_asig`
--

CREATE TABLE `cur_asig` (
  `CUR_ASIG` bigint(255) NOT NULL,
  `ID_CURSO` int(11) NOT NULL,
  `ID_ASIGNATURA` int(11) NOT NULL,
  `HORARIO` time NOT NULL,
  `TERMINO` time NOT NULL,
  `DIA` varchar(2) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cur_asig`
--

INSERT INTO `cur_asig` (`CUR_ASIG`, `ID_CURSO`, `ID_ASIGNATURA`, `HORARIO`, `TERMINO`, `DIA`) VALUES
(1, 4, 12, '07:00:00', '07:45:00', 'Lu'),
(2, 4, 7, '07:45:00', '08:30:00', 'Lu'),
(3, 4, 7, '08:30:00', '09:15:00', 'Lu'),
(4, 4, 6, '09:15:00', '10:00:00', 'Lu'),
(5, 4, 1, '10:30:00', '11:15:00', 'Lu'),
(6, 4, 14, '11:15:00', '12:00:00', 'Lu'),
(7, 4, 10, '12:00:00', '12:45:00', 'Lu'),
(8, 4, 6, '07:00:00', '07:45:00', 'Ma'),
(9, 4, 12, '07:45:00', '08:30:00', 'Ma'),
(10, 4, 1, '08:30:00', '09:15:00', 'Ma'),
(11, 4, 10, '09:15:00', '10:00:00', 'Ma'),
(12, 4, 9, '10:30:00', '11:45:00', 'Ma'),
(13, 4, 4, '11:15:00', '12:00:00', 'Ma'),
(14, 4, 2, '12:00:00', '12:45:00', 'Ma'),
(15, 4, 2, '07:00:00', '07:45:00', 'Mi'),
(16, 4, 7, '07:45:00', '08:30:00', 'Mi'),
(17, 4, 1, '08:30:00', '09:15:00', 'Mi'),
(18, 4, 14, '09:15:00', '10:00:00', 'Mi'),
(19, 4, 15, '10:30:00', '11:45:00', 'Mi'),
(20, 4, 15, '11:15:00', '12:00:00', 'Mi'),
(21, 4, 4, '12:00:00', '12:45:00', 'Mi'),
(22, 4, 12, '07:00:00', '07:45:00', 'Ju'),
(23, 4, 8, '07:45:00', '08:30:00', 'Ju'),
(24, 4, 4, '08:30:00', '09:15:00', 'Ju'),
(25, 4, 2, '09:15:00', '10:00:00', 'Ju'),
(26, 4, 1, '10:00:00', '11:45:00', 'Ju'),
(27, 4, 6, '11:15:00', '12:00:00', 'Ju'),
(28, 4, 6, '12:00:00', '12:45:00', 'Ju'),
(29, 4, 4, '07:00:00', '07:45:00', 'Vi'),
(30, 4, 12, '07:45:00', '08:30:00', 'Vi'),
(31, 4, 6, '08:30:00', '09:15:00', 'Vi'),
(32, 4, 2, '09:15:00', '10:00:00', 'Vi'),
(33, 4, 13, '10:30:00', '11:45:00', 'Vi'),
(34, 4, 1, '11:15:00', '12:00:00', 'Vi'),
(35, 4, 17, '12:00:00', '12:45:00', 'Vi');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cur_est`
--

CREATE TABLE `cur_est` (
  `CUR_EST` bigint(255) NOT NULL,
  `ID_CURSO` int(11) NOT NULL,
  `ID_ESTUDIANTE` bigint(255) NOT NULL,
  `ID_SECRETARIA` int(11) NOT NULL,
  `FECHA_INSC` date NOT NULL,
  `ESTADO` varchar(1) COLLATE utf8_spanish2_ci NOT NULL DEFAULT 'C'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cur_est`
--

INSERT INTO `cur_est` (`CUR_EST`, `ID_CURSO`, `ID_ESTUDIANTE`, `ID_SECRETARIA`, `FECHA_INSC`, `ESTADO`) VALUES
(1, 4, 1, 1, '2017-03-15', 'C'),
(2, 4, 2, 1, '2017-03-21', 'C');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `director`
--

CREATE TABLE `director` (
  `ID_DIRECTOR` bigint(255) NOT NULL,
  `ID_RECINTO` bigint(255) NOT NULL,
  `NOMBRE` varchar(70) COLLATE utf8_spanish2_ci NOT NULL,
  `APELLIDO` varchar(70) COLLATE utf8_spanish2_ci NOT NULL,
  `SEXO` varchar(1) COLLATE utf8_spanish2_ci NOT NULL,
  `CEDULA` varchar(13) COLLATE utf8_spanish2_ci NOT NULL,
  `DIRECCION` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `USER` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `PASS` varchar(30) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `ID_ESTUDIANTE` bigint(255) NOT NULL,
  `NOMBRE` varchar(70) COLLATE utf8_spanish2_ci NOT NULL,
  `APELLIDO` varchar(70) COLLATE utf8_spanish2_ci NOT NULL,
  `SEXO` varchar(1) COLLATE utf8_spanish2_ci NOT NULL,
  `FECHA_NAC` date NOT NULL,
  `FECHA_IN` date NOT NULL,
  `TUTOR` varchar(70) COLLATE utf8_spanish2_ci NOT NULL,
  `TELEFONO` varchar(12) COLLATE utf8_spanish2_ci NOT NULL,
  `MATRICULA` varchar(6) COLLATE utf8_spanish2_ci NOT NULL,
  `USER` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `PASS` varchar(30) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`ID_ESTUDIANTE`, `NOMBRE`, `APELLIDO`, `SEXO`, `FECHA_NAC`, `FECHA_IN`, `TUTOR`, `TELEFONO`, `MATRICULA`, `USER`, `PASS`) VALUES
(1, 'José Miguel', 'Castillo Rosario', 'M', '1996-03-05', '2010-08-06', 'José Castillo Haragón', '809-242-2103', '', 'JMC009603', 'prueba'),
(2, 'Carlos Angel', 'Pichardo Santana', 'M', '1996-02-12', '2010-08-18', 'Rafael Angel Pichardo Vasquez', '809-573-2013', '', 'CAP009602', 'prueba'),
(3, 'Javier Ignacio ', 'Molina Cano', 'M', '1995-12-20', '2010-07-12', 'Pedro Marte Molina Salcedo', '809-242-8790', '', 'JIM009512', 'prueba'),
(4, 'Lillian Eugenia ', 'Gómez Álvarez', 'M', '1995-10-21', '2010-07-23', 'Augusto Osorio Gómez Tobón', '809-242-1287', '', 'LEG009510', 'prueba'),
(5, 'Héctor Manuel ', 'Pineda Gaviria', 'M', '1997-03-30', '2011-07-20', 'Mario Troncoso Pineda Espinal', '809-242-3023', '', 'HPM009703', 'prueba'),
(6, 'Julio Cesar ', 'Rodríguez Monsalve', 'M', '1997-05-12', '2011-08-23', 'Oscar Darío Rodríguez Giraldo', '809-573-8920', '', 'JCR009705', 'prueba');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

CREATE TABLE `libro` (
  `ID_LIBRO` int(11) NOT NULL,
  `NOMBRE` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `PORTADA` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `PAGINAS` int(11) NOT NULL,
  `ENLACE` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `RESUMEN` text COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `ID_PROFESOR` bigint(255) NOT NULL,
  `ID_RECINTO` bigint(255) NOT NULL,
  `NOMBRE` varchar(70) COLLATE utf8_spanish2_ci NOT NULL,
  `APELLIDO` varchar(70) COLLATE utf8_spanish2_ci NOT NULL,
  `SEXO` varchar(1) COLLATE utf8_spanish2_ci NOT NULL,
  `CEDULA` varchar(13) COLLATE utf8_spanish2_ci NOT NULL,
  `FECHA_NAC` date NOT NULL,
  `FECHA_IN` date NOT NULL,
  `DIRECCION` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `EMAIL` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `USER` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `PASS` varchar(10) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`ID_PROFESOR`, `ID_RECINTO`, `NOMBRE`, `APELLIDO`, `SEXO`, `CEDULA`, `FECHA_NAC`, `FECHA_IN`, `DIRECCION`, `EMAIL`, `USER`, `PASS`) VALUES
(1, 1, 'Jose Ramon', 'Capellan', 'M', '047-2013897-8', '2017-03-15', '2017-03-31', 'La Vega R.D', 'ejemplo@hotmai.com', 'GAA881020S', 'prueba'),
(2, 1, 'Macier Blanco', 'Marte', 'F', '047-8132945-6', '2017-03-01', '2017-03-24', 'La Vega, R.D', 'ejemplo@hotmail.com', 'JCR009705', 'prueba');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recinto`
--

CREATE TABLE `recinto` (
  `ID_RECINTO` bigint(255) NOT NULL,
  `ID_REGIONAL` int(11) NOT NULL,
  `DISTRITO` varchar(2) COLLATE utf8_spanish2_ci NOT NULL,
  `NOMBRE` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `DIRECCION` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `TELEFONO` varchar(12) COLLATE utf8_spanish2_ci NOT NULL,
  `SECTOR` varchar(10) COLLATE utf8_spanish2_ci NOT NULL DEFAULT 'Público'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `recinto`
--

INSERT INTO `recinto` (`ID_RECINTO`, `ID_REGIONAL`, `DISTRITO`, `NOMBRE`, `DIRECCION`, `TELEFONO`, `SECTOR`) VALUES
(1, 1, '04', 'Liceo Don Pepe Alvarez', 'Avenida Imbet, Concepción de La Vega, Rep. Dom.', '809-242-3023', 'Público'),
(2, 1, '05', 'Liceo Secundario El Ranchito', 'Ranchito, La Vega, Rep. Dom.', '809-573-8920', 'Público');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `regional`
--

CREATE TABLE `regional` (
  `ID_REGIONAL` int(11) NOT NULL,
  `NOMBRE` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `PROVINCIA` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
  `REGIONAL` varchar(2) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `regional`
--

INSERT INTO `regional` (`ID_REGIONAL`, `NOMBRE`, `PROVINCIA`, `REGIONAL`) VALUES
(1, 'La Vega Este', 'La Vega', '06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secretaria`
--

CREATE TABLE `secretaria` (
  `ID_SECRETARIA` int(11) NOT NULL,
  `ID_RECINTO` bigint(255) NOT NULL,
  `NOMBRE` varchar(70) COLLATE utf8_spanish2_ci NOT NULL,
  `APELLIDO` varchar(70) COLLATE utf8_spanish2_ci NOT NULL,
  `CEDULA` varchar(13) COLLATE utf8_spanish2_ci NOT NULL,
  `DIRECCION` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `FECHA_NAC` date NOT NULL,
  `FECHA_IN` date NOT NULL,
  `USER` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `PASS` varchar(30) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `secretaria`
--

INSERT INTO `secretaria` (`ID_SECRETARIA`, `ID_RECINTO`, `NOMBRE`, `APELLIDO`, `CEDULA`, `DIRECCION`, `FECHA_NAC`, `FECHA_IN`, `USER`, `PASS`) VALUES
(1, 1, 'Gloria Amparo ', 'Alzate Agudelo', '047-2013897-8', 'Los Esquimales, La Vega, República Dominicana', '1988-10-20', '1990-02-14', 'GAA881020S', 'prueba'),
(2, 2, 'Maria Isabel ', 'López Gaviria', '047-2078897-2', 'Los Caracoles, La Vega, República Dominicana', '1985-03-30', '1988-10-28', 'MIL850330S', 'prueba');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutor`
--

CREATE TABLE `tutor` (
  `ID_TUTOR` int(11) NOT NULL,
  `ID_PROFESOR` bigint(255) NOT NULL,
  `ID_CURSO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD PRIMARY KEY (`ID_ASIGNATURA`);

--
-- Indices de la tabla `asig_prof`
--
ALTER TABLE `asig_prof`
  ADD PRIMARY KEY (`ASIG_PROF`),
  ADD KEY `ID_PROFESOR` (`ID_PROFESOR`),
  ADD KEY `ID_ASIGNATURA` (`ID_ASIGNATURA`);

--
-- Indices de la tabla `calificacion`
--
ALTER TABLE `calificacion`
  ADD PRIMARY KEY (`ID_CALIFICACION`),
  ADD KEY `ID_ESTUDIANTE` (`ID_ESTUDIANTE`),
  ADD KEY `ID_PROFESOR` (`ID_PROFESOR`),
  ADD KEY `ID_ASIGNATURA` (`ID_ASIGNATURA`);

--
-- Indices de la tabla `conducta`
--
ALTER TABLE `conducta`
  ADD PRIMARY KEY (`ID_CONDUCTA`),
  ADD KEY `ID_DIRECTOR` (`ID_DIRECTOR`),
  ADD KEY `ID_ESTUDIANTE` (`ID_ESTUDIANTE`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`ID_CURSO`),
  ADD KEY `ID_RECINTO` (`ID_RECINTO`);

--
-- Indices de la tabla `cur_asig`
--
ALTER TABLE `cur_asig`
  ADD PRIMARY KEY (`CUR_ASIG`),
  ADD KEY `ID_CURSO` (`ID_CURSO`),
  ADD KEY `ID_ASIGNATURA` (`ID_ASIGNATURA`);

--
-- Indices de la tabla `cur_est`
--
ALTER TABLE `cur_est`
  ADD PRIMARY KEY (`CUR_EST`),
  ADD KEY `ID_CURSO` (`ID_CURSO`),
  ADD KEY `ID_ESTUDIANTE` (`ID_ESTUDIANTE`),
  ADD KEY `ID_SECRETARIA` (`ID_SECRETARIA`);

--
-- Indices de la tabla `director`
--
ALTER TABLE `director`
  ADD PRIMARY KEY (`ID_DIRECTOR`),
  ADD KEY `ID_RECINTO` (`ID_RECINTO`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`ID_ESTUDIANTE`);

--
-- Indices de la tabla `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`ID_LIBRO`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`ID_PROFESOR`),
  ADD KEY `ID_RECINTO` (`ID_RECINTO`);

--
-- Indices de la tabla `recinto`
--
ALTER TABLE `recinto`
  ADD PRIMARY KEY (`ID_RECINTO`),
  ADD KEY `ID_REGIONAL` (`ID_REGIONAL`);

--
-- Indices de la tabla `regional`
--
ALTER TABLE `regional`
  ADD PRIMARY KEY (`ID_REGIONAL`);

--
-- Indices de la tabla `secretaria`
--
ALTER TABLE `secretaria`
  ADD PRIMARY KEY (`ID_SECRETARIA`),
  ADD KEY `ID_RECINTO` (`ID_RECINTO`);

--
-- Indices de la tabla `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`ID_TUTOR`),
  ADD KEY `id_profesor` (`ID_PROFESOR`),
  ADD KEY `id_curso` (`ID_CURSO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  MODIFY `ID_ASIGNATURA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `asig_prof`
--
ALTER TABLE `asig_prof`
  MODIFY `ASIG_PROF` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `calificacion`
--
ALTER TABLE `calificacion`
  MODIFY `ID_CALIFICACION` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `conducta`
--
ALTER TABLE `conducta`
  MODIFY `ID_CONDUCTA` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
  MODIFY `ID_CURSO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `cur_asig`
--
ALTER TABLE `cur_asig`
  MODIFY `CUR_ASIG` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT de la tabla `cur_est`
--
ALTER TABLE `cur_est`
  MODIFY `CUR_EST` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `director`
--
ALTER TABLE `director`
  MODIFY `ID_DIRECTOR` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `ID_ESTUDIANTE` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `libro`
--
ALTER TABLE `libro`
  MODIFY `ID_LIBRO` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `profesor`
--
ALTER TABLE `profesor`
  MODIFY `ID_PROFESOR` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `recinto`
--
ALTER TABLE `recinto`
  MODIFY `ID_RECINTO` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `regional`
--
ALTER TABLE `regional`
  MODIFY `ID_REGIONAL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `secretaria`
--
ALTER TABLE `secretaria`
  MODIFY `ID_SECRETARIA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tutor`
--
ALTER TABLE `tutor`
  MODIFY `ID_TUTOR` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asig_prof`
--
ALTER TABLE `asig_prof`
  ADD CONSTRAINT `asig_prof_ibfk_1` FOREIGN KEY (`ID_ASIGNATURA`) REFERENCES `asignatura` (`ID_ASIGNATURA`) ON UPDATE CASCADE,
  ADD CONSTRAINT `asig_prof_ibfk_2` FOREIGN KEY (`ID_PROFESOR`) REFERENCES `profesor` (`ID_PROFESOR`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `calificacion`
--
ALTER TABLE `calificacion`
  ADD CONSTRAINT `calificacion_ibfk_2` FOREIGN KEY (`ID_ESTUDIANTE`) REFERENCES `estudiante` (`ID_ESTUDIANTE`) ON UPDATE CASCADE,
  ADD CONSTRAINT `calificacion_ibfk_3` FOREIGN KEY (`ID_PROFESOR`) REFERENCES `profesor` (`ID_PROFESOR`) ON UPDATE CASCADE,
  ADD CONSTRAINT `calificacion_ibfk_4` FOREIGN KEY (`ID_ASIGNATURA`) REFERENCES `asignatura` (`ID_ASIGNATURA`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `conducta`
--
ALTER TABLE `conducta`
  ADD CONSTRAINT `conducta_ibfk_1` FOREIGN KEY (`ID_ESTUDIANTE`) REFERENCES `estudiante` (`ID_ESTUDIANTE`) ON UPDATE CASCADE,
  ADD CONSTRAINT `conducta_ibfk_2` FOREIGN KEY (`ID_DIRECTOR`) REFERENCES `director` (`ID_DIRECTOR`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `curso`
--
ALTER TABLE `curso`
  ADD CONSTRAINT `curso_ibfk_1` FOREIGN KEY (`ID_RECINTO`) REFERENCES `recinto` (`ID_RECINTO`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `cur_asig`
--
ALTER TABLE `cur_asig`
  ADD CONSTRAINT `cur_asig_ibfk_1` FOREIGN KEY (`ID_CURSO`) REFERENCES `curso` (`ID_CURSO`) ON UPDATE CASCADE,
  ADD CONSTRAINT `cur_asig_ibfk_2` FOREIGN KEY (`ID_ASIGNATURA`) REFERENCES `asignatura` (`ID_ASIGNATURA`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `cur_est`
--
ALTER TABLE `cur_est`
  ADD CONSTRAINT `cur_est_ibfk_1` FOREIGN KEY (`ID_ESTUDIANTE`) REFERENCES `estudiante` (`ID_ESTUDIANTE`) ON UPDATE CASCADE,
  ADD CONSTRAINT `cur_est_ibfk_2` FOREIGN KEY (`ID_CURSO`) REFERENCES `curso` (`ID_CURSO`) ON UPDATE CASCADE,
  ADD CONSTRAINT `cur_est_ibfk_3` FOREIGN KEY (`ID_SECRETARIA`) REFERENCES `secretaria` (`ID_SECRETARIA`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `director`
--
ALTER TABLE `director`
  ADD CONSTRAINT `director_ibfk_1` FOREIGN KEY (`ID_RECINTO`) REFERENCES `recinto` (`ID_RECINTO`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD CONSTRAINT `profesor_ibfk_1` FOREIGN KEY (`ID_RECINTO`) REFERENCES `recinto` (`ID_RECINTO`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `recinto`
--
ALTER TABLE `recinto`
  ADD CONSTRAINT `recinto_ibfk_1` FOREIGN KEY (`ID_REGIONAL`) REFERENCES `regional` (`ID_REGIONAL`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `secretaria`
--
ALTER TABLE `secretaria`
  ADD CONSTRAINT `secretaria_ibfk_1` FOREIGN KEY (`ID_RECINTO`) REFERENCES `recinto` (`ID_RECINTO`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tutor`
--
ALTER TABLE `tutor`
  ADD CONSTRAINT `tutor_ibfk_1` FOREIGN KEY (`id_profesor`) REFERENCES `profesor` (`ID_PROFESOR`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tutor_ibfk_2` FOREIGN KEY (`id_curso`) REFERENCES `curso` (`ID_CURSO`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
