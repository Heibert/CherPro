-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-08-2022 a las 04:02:20
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
-- Base de datos: `bdproyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `idAdministrador` int(11) NOT NULL,
  `nombreAdmin` varchar(30) DEFAULT NULL,
  `apellidoAdmin` varchar(30) DEFAULT NULL,
  `correoAdmin` varchar(45) DEFAULT NULL,
  `telefonoAdmin` int(11) DEFAULT NULL,
  `idPrograma` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aprendiz`
--

CREATE TABLE `aprendiz` (
  `idAprendiz` int(11) NOT NULL,
  `nombreAprend` varchar(30) DEFAULT NULL,
  `apelliApren` varchar(30) DEFAULT NULL,
  `tipoDoc` char(2) DEFAULT NULL,
  `numDoc` int(11) DEFAULT NULL,
  `correoMisena` varchar(45) DEFAULT NULL,
  `correoApren` varchar(45) DEFAULT NULL,
  `telefonoApren` int(11) DEFAULT NULL,
  `idFicha` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE `asistencia` (
  `idAsistencia` int(11) NOT NULL,
  `fechaAsistencia` date DEFAULT NULL,
  `idAprendiz` int(11) DEFAULT NULL,
  `idTematica` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coordinacion`
--

CREATE TABLE `coordinacion` (
  `idCoordinacion` int(11) NOT NULL,
  `nomCoordinacion` varchar(30) DEFAULT NULL,
  `idPrograma` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coordinador`
--

CREATE TABLE `coordinador` (
  `idCoordinador` int(11) NOT NULL,
  `nomCoordinador` varchar(30) DEFAULT NULL,
  `apeCoordinador` varchar(30) DEFAULT NULL,
  `tipoDoc` char(2) DEFAULT NULL,
  `numDoc` int(11) DEFAULT NULL,
  `correoMisena` varchar(45) DEFAULT NULL,
  `telefonoCoordinador` int(11) DEFAULT NULL,
  `idCoordinacion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `excusa`
--

CREATE TABLE `excusa` (
  `idExcusa` int(11) NOT NULL,
  `fechaExcusa` date DEFAULT NULL,
  `descExcusa` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ficha`
--

CREATE TABLE `ficha` (
  `idFicha` int(11) NOT NULL,
  `NumFicha` int(11) DEFAULT NULL,
  `CantAprendiz` int(11) DEFAULT NULL,
  `InstuEncargado` varchar(60) DEFAULT NULL,
  `idPrograma` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ficha_has_instructor`
--

CREATE TABLE `ficha_has_instructor` (
  `idFicha` int(11) DEFAULT NULL,
  `idInstructor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instructor`
--

CREATE TABLE `instructor` (
  `idInstructor` int(11) NOT NULL,
  `nombreInst` varchar(30) DEFAULT NULL,
  `apellidoInst` varchar(30) DEFAULT NULL,
  `tipoDoc` char(2) DEFAULT NULL,
  `numDoc` int(11) DEFAULT NULL,
  `correoMisena` varchar(45) DEFAULT NULL,
  `telefonoInst` int(11) DEFAULT NULL,
  `idTematica` int(11) DEFAULT NULL,
  `idPrograma` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instructor_has_tematica`
--

CREATE TABLE `instructor_has_tematica` (
  `idInstructor` int(11) DEFAULT NULL,
  `idTematica` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa`
--

CREATE TABLE `programa` (
  `idPrograma` int(11) NOT NULL,
  `nombrePrograma` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporte`
--

CREATE TABLE `reporte` (
  `idReporte` int(11) NOT NULL,
  `idInstructor` int(11) DEFAULT NULL,
  `idCoordinador` int(11) DEFAULT NULL,
  `fechaReporte` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tematica`
--

CREATE TABLE `tematica` (
  `idTematica` int(11) NOT NULL,
  `nombreTematica` varchar(45) DEFAULT NULL,
  `idInstructor` int(11) DEFAULT NULL,
  `idPrograma` int(11) DEFAULT NULL,
  `idFicha` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trimestre`
--

CREATE TABLE `trimestre` (
  `idTrimestre` int(11) NOT NULL,
  `numTrimestre` int(11) DEFAULT NULL,
  `idFicha` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trimestre_has_tematica`
--

CREATE TABLE `trimestre_has_tematica` (
  `idTrimestre` int(11) DEFAULT NULL,
  `idTematica` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`idAdministrador`),
  ADD KEY `fk_admin_programa` (`idPrograma`);

--
-- Indices de la tabla `aprendiz`
--
ALTER TABLE `aprendiz`
  ADD PRIMARY KEY (`idAprendiz`),
  ADD KEY `fk_aprendiz_ficha` (`idFicha`);

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD PRIMARY KEY (`idAsistencia`),
  ADD UNIQUE KEY `idAsistencia` (`idAsistencia`),
  ADD UNIQUE KEY `idAsistencia_2` (`idAsistencia`),
  ADD KEY `fk_asistencia_aprendiz` (`idAprendiz`),
  ADD KEY `fk_asistencia_tematica` (`idTematica`);

--
-- Indices de la tabla `coordinacion`
--
ALTER TABLE `coordinacion`
  ADD PRIMARY KEY (`idCoordinacion`),
  ADD UNIQUE KEY `idCoordinacion` (`idCoordinacion`);

--
-- Indices de la tabla `coordinador`
--
ALTER TABLE `coordinador`
  ADD PRIMARY KEY (`idCoordinador`),
  ADD UNIQUE KEY `idCoordinador` (`idCoordinador`);

--
-- Indices de la tabla `excusa`
--
ALTER TABLE `excusa`
  ADD PRIMARY KEY (`idExcusa`),
  ADD UNIQUE KEY `idExcusa` (`idExcusa`);

--
-- Indices de la tabla `ficha`
--
ALTER TABLE `ficha`
  ADD PRIMARY KEY (`idFicha`),
  ADD KEY `fk_ficha_programa` (`idPrograma`);

--
-- Indices de la tabla `ficha_has_instructor`
--
ALTER TABLE `ficha_has_instructor`
  ADD KEY `idFicha` (`idFicha`),
  ADD KEY `idInstructor` (`idInstructor`);

--
-- Indices de la tabla `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`idInstructor`),
  ADD KEY `fk_instructor_programa` (`idPrograma`),
  ADD KEY `fk_instructor_tematica` (`idTematica`);

--
-- Indices de la tabla `instructor_has_tematica`
--
ALTER TABLE `instructor_has_tematica`
  ADD KEY `idInstructor` (`idInstructor`),
  ADD KEY `idTematica` (`idTematica`);

--
-- Indices de la tabla `programa`
--
ALTER TABLE `programa`
  ADD PRIMARY KEY (`idPrograma`);

--
-- Indices de la tabla `reporte`
--
ALTER TABLE `reporte`
  ADD PRIMARY KEY (`idReporte`),
  ADD KEY `fk_reporte_coordinador` (`idCoordinador`),
  ADD KEY `fk_reporte_instructor` (`idInstructor`);

--
-- Indices de la tabla `tematica`
--
ALTER TABLE `tematica`
  ADD PRIMARY KEY (`idTematica`),
  ADD KEY `fk_tematica_programa` (`idPrograma`),
  ADD KEY `fk_tematica_ficha` (`idFicha`),
  ADD KEY `fk_tematica_instructor` (`idInstructor`);

--
-- Indices de la tabla `trimestre`
--
ALTER TABLE `trimestre`
  ADD PRIMARY KEY (`idTrimestre`);

--
-- Indices de la tabla `trimestre_has_tematica`
--
ALTER TABLE `trimestre_has_tematica`
  ADD KEY `idTrimestre` (`idTrimestre`),
  ADD KEY `idTematica` (`idTematica`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `idAdministrador` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `aprendiz`
--
ALTER TABLE `aprendiz`
  MODIFY `idAprendiz` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  MODIFY `idAsistencia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `coordinacion`
--
ALTER TABLE `coordinacion`
  MODIFY `idCoordinacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `coordinador`
--
ALTER TABLE `coordinador`
  MODIFY `idCoordinador` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `excusa`
--
ALTER TABLE `excusa`
  MODIFY `idExcusa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ficha`
--
ALTER TABLE `ficha`
  MODIFY `idFicha` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `instructor`
--
ALTER TABLE `instructor`
  MODIFY `idInstructor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `programa`
--
ALTER TABLE `programa`
  MODIFY `idPrograma` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reporte`
--
ALTER TABLE `reporte`
  MODIFY `idReporte` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tematica`
--
ALTER TABLE `tematica`
  MODIFY `idTematica` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `trimestre`
--
ALTER TABLE `trimestre`
  MODIFY `idTrimestre` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `fk_admin_programa` FOREIGN KEY (`idPrograma`) REFERENCES `programa` (`idPrograma`);

--
-- Filtros para la tabla `aprendiz`
--
ALTER TABLE `aprendiz`
  ADD CONSTRAINT `fk_aprendiz_ficha` FOREIGN KEY (`idFicha`) REFERENCES `ficha` (`idFicha`);

--
-- Filtros para la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD CONSTRAINT `fk_asistencia_aprendiz` FOREIGN KEY (`idAprendiz`) REFERENCES `aprendiz` (`idAprendiz`),
  ADD CONSTRAINT `fk_asistencia_tematica` FOREIGN KEY (`idTematica`) REFERENCES `tematica` (`idTematica`);

--
-- Filtros para la tabla `coordinador`
--
ALTER TABLE `coordinador`
  ADD CONSTRAINT `fk_coordi_coordinacion` FOREIGN KEY (`idCoordinador`) REFERENCES `coordinacion` (`idCoordinacion`);

--
-- Filtros para la tabla `excusa`
--
ALTER TABLE `excusa`
  ADD CONSTRAINT `fk_excusa_asistencia` FOREIGN KEY (`idExcusa`) REFERENCES `asistencia` (`idAsistencia`);

--
-- Filtros para la tabla `ficha`
--
ALTER TABLE `ficha`
  ADD CONSTRAINT `fk_ficha_programa` FOREIGN KEY (`idPrograma`) REFERENCES `programa` (`idPrograma`);

--
-- Filtros para la tabla `ficha_has_instructor`
--
ALTER TABLE `ficha_has_instructor`
  ADD CONSTRAINT `ficha_has_instructor_ibfk_1` FOREIGN KEY (`idFicha`) REFERENCES `ficha` (`idFicha`),
  ADD CONSTRAINT `ficha_has_instructor_ibfk_2` FOREIGN KEY (`idInstructor`) REFERENCES `instructor` (`idInstructor`);

--
-- Filtros para la tabla `instructor`
--
ALTER TABLE `instructor`
  ADD CONSTRAINT `fk_instructor_programa` FOREIGN KEY (`idPrograma`) REFERENCES `programa` (`idPrograma`),
  ADD CONSTRAINT `fk_instructor_tematica` FOREIGN KEY (`idTematica`) REFERENCES `instructor_has_tematica` (`idInstructor`);

--
-- Filtros para la tabla `instructor_has_tematica`
--
ALTER TABLE `instructor_has_tematica`
  ADD CONSTRAINT `instructor_has_tematica_ibfk_1` FOREIGN KEY (`idInstructor`) REFERENCES `instructor` (`idInstructor`),
  ADD CONSTRAINT `instructor_has_tematica_ibfk_2` FOREIGN KEY (`idTematica`) REFERENCES `tematica` (`idTematica`);

--
-- Filtros para la tabla `reporte`
--
ALTER TABLE `reporte`
  ADD CONSTRAINT `fk_reporte_coordinador` FOREIGN KEY (`idCoordinador`) REFERENCES `coordinador` (`idCoordinador`),
  ADD CONSTRAINT `fk_reporte_instructor` FOREIGN KEY (`idInstructor`) REFERENCES `instructor` (`idInstructor`);

--
-- Filtros para la tabla `tematica`
--
ALTER TABLE `tematica`
  ADD CONSTRAINT `fk_tematica_ficha` FOREIGN KEY (`idFicha`) REFERENCES `ficha` (`idFicha`),
  ADD CONSTRAINT `fk_tematica_instructor` FOREIGN KEY (`idInstructor`) REFERENCES `instructor_has_tematica` (`idTematica`),
  ADD CONSTRAINT `fk_tematica_programa` FOREIGN KEY (`idPrograma`) REFERENCES `programa` (`idPrograma`);

--
-- Filtros para la tabla `trimestre`
--
ALTER TABLE `trimestre`
  ADD CONSTRAINT `fk_ficha_trimestre` FOREIGN KEY (`idTrimestre`) REFERENCES `ficha` (`idFicha`);

--
-- Filtros para la tabla `trimestre_has_tematica`
--
ALTER TABLE `trimestre_has_tematica`
  ADD CONSTRAINT `trimestre_has_tematica_ibfk_1` FOREIGN KEY (`idTrimestre`) REFERENCES `trimestre` (`idTrimestre`),
  ADD CONSTRAINT `trimestre_has_tematica_ibfk_2` FOREIGN KEY (`idTematica`) REFERENCES `tematica` (`idTematica`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
