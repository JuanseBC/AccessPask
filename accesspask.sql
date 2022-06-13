-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-05-2022 a las 06:57:25
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
(801, 'Octavo'),
(901, 'Noveno'),
(1001, 'Decimo'),
(1101, 'Once');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `excusas`
--

CREATE TABLE `excusas` (
  `id_excusas` int(11) NOT NULL,
  `nombre` varchar(80) DEFAULT NULL,
  `apellido` varchar(80) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `descripcion` varchar(10000) DEFAULT NULL,
  `archivo` varchar(1000) DEFAULT NULL,
  `doc` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `excusas`
--

INSERT INTO `excusas` (`id_excusas`, `nombre`, `apellido`, `fecha`, `descripcion`, `archivo`, `doc`) VALUES
(3, 'Felipe', 'Castrillon', '2022-05-24', 'Ensayo N° 3', '../img/dog.jpg', 64644687);

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
  `hin` time DEFAULT NULL,
  `hsa` time DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `documento` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `idCurso` int(11) DEFAULT NULL,
  `Nombre` varchar(100) DEFAULT NULL,
  `Apellido` varchar(50) DEFAULT NULL,
  `contraseña` varbinary(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idDoc`, `documento`, `idRol`, `idCurso`, `Nombre`, `Apellido`, `contraseña`) VALUES
(1, 12456818, 2, 0, 'Andrea', 'Mondragon', 0x3831646339626462353264303464633230303336646264383331336564303535),
(2, 64644687, 3, 601, 'Felipe', 'Castrillon', 0x3831646339626462353264303464633230303336646264383331336564303535),
(1, 67594356, 2, 0, 'Carlos', 'Méndez', 0x3831646339626462353264303464633230303336646264383331336564303535),
(1, 80976546, 2, 0, 'Luis', 'Beltran', 0x3831646339626462353264303464633230303336646264383331336564303535),
(2, 87657544, 3, 701, 'Alix', 'Pascagaza', 0x3831646339626462353264303464633230303336646264383331336564303535),
(1, 468546789, 2, 0, 'Marcos', 'Perez', 0x3831646339626462353264303464633230303336646264383331336564303535),
(2, 654656865, 3, 601, 'Veronica', 'Giraldo', 0x3831646339626462353264303464633230303336646264383331336564303535),
(1, 897786568, 3, 701, 'Sergio', 'Bautista', 0x3831646339626462353264303464633230303336646264383331336564303535),
(1, 1000933126, 1, 0, 'Sebastian', 'Camelo', 0x3831646339626462353264303464633230303336646264383331336564303535),
(1, 2147483647, 3, 1101, 'Andrea', 'Rodriguez', 0x3831646339626462353264303464633230303336646264383331336564303535);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cursos_`
--
ALTER TABLE `cursos_`
  ADD PRIMARY KEY (`idCurso`);

--
-- Indices de la tabla `excusas`
--
ALTER TABLE `excusas`
  ADD PRIMARY KEY (`id_excusas`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `tiempo`
--
ALTER TABLE `tiempo`
  ADD PRIMARY KEY (`idtiempo`);

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
  ADD KEY `idRol` (`idRol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `excusas`
--
ALTER TABLE `excusas`
  MODIFY `id_excusas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`idDoc`) REFERENCES `tipdoc` (`idDoc`),
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`idRol`) REFERENCES `rol` (`idRol`),
  ADD CONSTRAINT `usuario_ibfk_3` FOREIGN KEY (`idCurso`) REFERENCES `cursos_` (`idCurso`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
