-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-10-2022 a las 23:19:22
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
-- Base de datos: `accesspask`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacion`
--

CREATE TABLE `asignacion` (
  `id` int(15) NOT NULL,
  `docu` int(50) NOT NULL,
  `Curso` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asignacion`
--

INSERT INTO `asignacion` (`id`, `docu`, `Curso`) VALUES
(58, 12012012, 701),
(59, 12012012, 601),
(60, 1927902, 601),
(62, 12012012, 1101),
(63, 12012012, 802),
(64, 12012012, 801);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos_`
--

CREATE TABLE `cursos_` (
  `idCurso` int(15) NOT NULL,
  `Nombre` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cursos_`
--

INSERT INTO `cursos_` (`idCurso`, `Nombre`) VALUES
(601, 'Sexto'),
(701, 'Septimo'),
(702, NULL),
(801, 'Octavo'),
(802, NULL),
(901, 'Noveno'),
(902, NULL),
(903, NULL),
(1001, 'Decimo'),
(1101, 'Once'),
(1107, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `idEst` int(11) NOT NULL,
  `EstUsu` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`idEst`, `EstUsu`) VALUES
(1, 'activo'),
(2, 'inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `excusas`
--

CREATE TABLE `excusas` (
  `id_excusas` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `descripcion` varchar(10000) DEFAULT NULL,
  `archivo` varchar(1000) DEFAULT NULL,
  `documento` int(50) NOT NULL,
  `Docu_Dest` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `excusas`
--

INSERT INTO `excusas` (`id_excusas`, `fecha`, `descripcion`, `archivo`, `documento`, `Docu_Dest`) VALUES
(15, '2022-10-19', 'todo fue por una salchipapa', '../img/NTC  2050.pdf', 1425687, 12012012);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idRol` int(11) NOT NULL,
  `Rol` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idRol`, `Rol`) VALUES
(1, 'Administrador'),
(2, 'Maestro'),
(3, 'Alumno');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiempo`
--

CREATE TABLE `tiempo` (
  `idtiempo` int(11) NOT NULL,
  `hin` varchar(100) DEFAULT NULL,
  `hsa` varchar(100) DEFAULT NULL,
  `Fecha` varchar(100) DEFAULT NULL,
  `documento` int(50) DEFAULT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tiempo`
--

INSERT INTO `tiempo` (`idtiempo`, `hin`, `hsa`, `Fecha`, `documento`, `estado`) VALUES
(1, '4:38 PM', '4:53 PM', '2022-06-28 ', 87657544, 2),
(85, '11:27:00', '11:27:00', '2022-06-13', 64644687, 2),
(86, '11:28:00', '11:28:00', '2022-06-13', 64644687, 2),
(87, '4:50 PM', '4:53 PM', '2022-06-28 ', 1000933126, 2),
(88, '11:24 PM', '11:24 PM', '2022-08-18 ', 64644687, 2),
(89, '11:25 PM', '11:25 PM', '2022-08-18 ', 87657544, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipcor`
--

CREATE TABLE `tipcor` (
  `idCor` int(11) NOT NULL,
  `tipcor` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipcor`
--

INSERT INTO `tipcor` (`idCor`, `tipcor`) VALUES
(1, 'institucional'),
(2, 'personal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipdoc`
--

CREATE TABLE `tipdoc` (
  `idDoc` int(15) NOT NULL,
  `Doc` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipdoc`
--

INSERT INTO `tipdoc` (`idDoc`, `Doc`) VALUES
(1, 'C.C'),
(2, 'T.I'),
(3, 'C.E');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idDoc` int(3) DEFAULT NULL,
  `documento` int(50) NOT NULL,
  `idRol` int(11) DEFAULT NULL,
  `idCurso` int(15) DEFAULT NULL,
  `Nombre` varchar(100) DEFAULT NULL,
  `Apellido` varchar(50) DEFAULT NULL,
  `contraseña` varbinary(100) DEFAULT NULL,
  `idEst` int(11) NOT NULL,
  `idCor` int(11) NOT NULL,
  `correo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idDoc`, `documento`, `idRol`, `idCurso`, `Nombre`, `Apellido`, `contraseña`, `idEst`, `idCor`, `correo`) VALUES
(2, 1425687, 3, 601, 'Sara', 'Castro', 0x3831646339626462353264303464633230303336646264383331336564303535, 1, 2, 'Sarita@gmail.com'),
(3, 1927902, 2, NULL, 'neymar', 'jr', 0x3831646339626462353264303464633230303336646264383331336564303535, 1, 2, 'firu022@gmail.com'),
(1, 12012012, 2, NULL, 'firulais', 'choque', 0x3831646339626462353264303464633230303336646264383331336564303535, 1, 1, 'firu@gmail.com'),
(1, 12456818, 2, 0, 'Andrea', 'Mondragon', 0x3831646339626462353264303464633230303336646264383331336564303535, 1, 2, 'andrea@gmail.com'),
(3, 52463157, 2, NULL, 'Angie', 'Ruiz', 0x3831646339626462353264303464633230303336646264383331336564303535, 1, 2, 'Angie123@gmail.com'),
(2, 64644687, 3, 601, 'Felipe', 'Castrillon', 0x3831646339626462353264303464633230303336646264383331336564303535, 1, 1, 'Felipe@gmail.com'),
(1, 67594356, 2, 0, 'Carlos', 'Méndez', 0x3831646339626462353264303464633230303336646264383331336564303535, 1, 2, 'Carlos@gmail.com'),
(1, 80976546, 2, 0, 'Luis', 'Beltran', 0x3831646339626462353264303464633230303336646264383331336564303535, 1, 1, 'Luis@gmail.com'),
(2, 87657544, 3, 701, 'Alix', 'Pascagaza', 0x3831646339626462353264303464633230303336646264383331336564303535, 1, 2, 'Alix@gmail.com'),
(2, 181818181, 3, 601, 'derg', 'mondragon', 0x3831646339626462353264303464633230303336646264383331336564303535, 1, 2, 'firu02@gmail.com'),
(1, 468546789, 2, 0, 'Marcos', 'Perez', 0x3831646339626462353264303464633230303336646264383331336564303535, 1, 1, 'Marcos@gmail.com'),
(2, 654656865, 3, 601, 'Veronica', 'Giraldo', 0x3831646339626462353264303464633230303336646264383331336564303535, 1, 2, 'Veronica@gmail.com'),
(1, 897786568, 3, 701, 'Sergio', 'Bautista', 0x3831646339626462353264303464633230303336646264383331336564303535, 1, 1, 'Sergio@gmail.com'),
(1, 1000933126, 1, 0, 'Sebastian', 'Camelo', 0x3831646339626462353264303464633230303336646264383331336564303535, 1, 2, 'Sebastian@gmail.com'),
(1, 2147483647, 3, 1101, 'Andrea', 'Rodriguez', 0x3831646339626462353264303464633230303336646264383331336564303535, 1, 1, 'andreaR@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asignacion`
--
ALTER TABLE `asignacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wtf` (`docu`),
  ADD KEY `rtx` (`Curso`);

--
-- Indices de la tabla `cursos_`
--
ALTER TABLE `cursos_`
  ADD PRIMARY KEY (`idCurso`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`idEst`);

--
-- Indices de la tabla `excusas`
--
ALTER TABLE `excusas`
  ADD PRIMARY KEY (`id_excusas`),
  ADD KEY `documento` (`documento`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `tiempo`
--
ALTER TABLE `tiempo`
  ADD PRIMARY KEY (`idtiempo`),
  ADD KEY `gg` (`documento`);

--
-- Indices de la tabla `tipcor`
--
ALTER TABLE `tipcor`
  ADD PRIMARY KEY (`idCor`);

--
-- Indices de la tabla `tipdoc`
--
ALTER TABLE `tipdoc`
  ADD PRIMARY KEY (`idDoc`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`documento`),
  ADD KEY `idDoc` (`idDoc`),
  ADD KEY `idRol` (`idRol`),
  ADD KEY `idEst` (`idEst`),
  ADD KEY `idCor` (`idCor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asignacion`
--
ALTER TABLE `asignacion`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT de la tabla `excusas`
--
ALTER TABLE `excusas`
  MODIFY `id_excusas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `tiempo`
--
ALTER TABLE `tiempo`
  MODIFY `idtiempo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asignacion`
--
ALTER TABLE `asignacion`
  ADD CONSTRAINT `rtx` FOREIGN KEY (`Curso`) REFERENCES `cursos_` (`idCurso`),
  ADD CONSTRAINT `wtf` FOREIGN KEY (`docu`) REFERENCES `usuario` (`documento`);

--
-- Filtros para la tabla `excusas`
--
ALTER TABLE `excusas`
  ADD CONSTRAINT `excusas_ibfk_1` FOREIGN KEY (`documento`) REFERENCES `usuario` (`documento`);

--
-- Filtros para la tabla `tiempo`
--
ALTER TABLE `tiempo`
  ADD CONSTRAINT `gg` FOREIGN KEY (`documento`) REFERENCES `usuario` (`documento`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`idCor`) REFERENCES `tipcor` (`idCor`),
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`idRol`) REFERENCES `rol` (`idRol`),
  ADD CONSTRAINT `usuario_ibfk_3` FOREIGN KEY (`idDoc`) REFERENCES `tipdoc` (`idDoc`),
  ADD CONSTRAINT `usuario_ibfk_4` FOREIGN KEY (`idEst`) REFERENCES `estado` (`idEst`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
