-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-06-2021 a las 20:58:08
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inventario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `idarea` int(11) NOT NULL,
  `nombrearea` varchar(60) DEFAULT NULL,
  `responsable` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`idarea`, `nombrearea`, `responsable`) VALUES
(1, 'LABORATORIO DE BROMATOLOGÍA', 'M.C. Federico Francisco Martínez'),
(2, 'ÁREA DE PESADO', 'M.C. Federico Francisco Martínez'),
(3, 'LABORATORIO DE QUÍMICA ', 'Ing. Antonio Gómez Salazar       '),
(4, 'LABORATORIO DE MICROBIOLOGÍA', 'Ing. Viridiana Hernández Martínez        '),
(5, 'LABORATORIO DE FISIOLOGÍA ANIMAL Y VEGETAL', 'Doc. Freddy Mera Zuñiga');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrada`
--

CREATE TABLE `entrada` (
  `id_entrada` int(11) NOT NULL,
  `materia` varchar(100) NOT NULL,
  `responsable` varchar(80) NOT NULL,
  `grupo` varchar(20) NOT NULL,
  `carrera` varchar(50) NOT NULL,
  `n_practica` varchar(50) NOT NULL,
  `nombre_practica` varchar(300) NOT NULL,
  `fecha` date NOT NULL,
  `h_entrada` time NOT NULL,
  `h_salida` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `entrada`
--

INSERT INTO `entrada` (`id_entrada`, `materia`, `responsable`, `grupo`, `carrera`, `n_practica`, `nombre_practica`, `fecha`, `h_entrada`, `h_salida`) VALUES
(9, 'Programación web', 'Daniel de la Cruz', '6D', 'ISC', '2', 'Vistas', '2021-06-30', '11:47:00', '11:51:12'),
(10, 'Ingenieria de software', 'Cauich Yam', '7D', 'ISC', '2', 'Conexion a la base de datos', '2021-06-30', '11:48:27', '11:51:05'),
(11, 'Bioquimica', 'Jose Arturo Manuel', '9A', 'IA', '0', 'Revisión de las cedulas', '2021-06-30', '11:49:51', '11:49:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `id_equipo` int(11) NOT NULL,
  `n_serie` varchar(30) NOT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `marca` varchar(30) DEFAULT NULL,
  `modelo` varchar(30) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `observaciones` varchar(30) NOT NULL,
  `idarea` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`id_equipo`, `n_serie`, `descripcion`, `marca`, `modelo`, `cantidad`, `observaciones`, `idarea`) VALUES
(1, 'GSDGSDGTGG34GSD', 'PC', 'ACER', 'FDGDFGsdfg', 122, 'EN BUEN ESTADO', 3),
(2, 'GSDGSDGSDGFSDF', 'MONITOR', 'HP', 'HP 240', 21, 'EN BUEN ESTADO', 2),
(7, 'DFGHFDGHF', 'DFGDF', 'DFD', 'DFGDF', 2, 'CFGDFG', 4),
(8, 'GSDGSDGTGG34GKK', 'MONITOR', 'ACER', 'MMDFSMD', 100, 'EN BUEN ESTADO', 3),
(9, 'GSDGSDGTGG34TT', 'CPU', 'HP', 'REDGFS', 25, 'EN BUEN ESTADO', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE `historial` (
  `idhistorial` int(11) NOT NULL,
  `f_prestado` date NOT NULL,
  `cantidad` int(11) NOT NULL,
  `estado` varchar(10) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `idmaterial` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `historial`
--

INSERT INTO `historial` (`idhistorial`, `f_prestado`, `cantidad`, `estado`, `idusuario`, `idmaterial`) VALUES
(2, '2021-06-24', 1, 'Prestado', 6, 3),
(3, '2021-06-24', 1, 'Prestado', 6, 4),
(4, '2021-06-24', 1, 'Prestado', 6, 6),
(5, '2021-06-24', 1, 'Prestado', 3, 3),
(6, '2021-06-24', 1, 'Prestado', 10, 3),
(7, '2021-06-24', 1, 'Prestado', 9, 3),
(8, '2021-06-24', 1, 'Prestado', 6, 3),
(9, '2021-06-24', 1, 'Prestado', 6, 4),
(10, '2021-06-24', 1, 'Prestado', 6, 6),
(11, '2021-06-24', 1, 'Prestado', 8, 3),
(12, '2021-06-24', 1, 'Prestado', 11, 3),
(13, '2021-06-26', 1, 'Prestado', 5, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventarios`
--

CREATE TABLE `inventarios` (
  `idinventario` int(11) NOT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `estado` varchar(60) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `n_serie` int(11) DEFAULT NULL,
  `idmaterial` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materiales`
--

CREATE TABLE `materiales` (
  `idmaterial` int(11) NOT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `unidad` varchar(30) NOT NULL,
  `observaciones` varchar(30) NOT NULL,
  `idarea` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `materiales`
--

INSERT INTO `materiales` (`idmaterial`, `descripcion`, `cantidad`, `unidad`, `observaciones`, `idarea`) VALUES
(3, 'Mesa', 7, 'pz', 'Usada', 2),
(4, 'Escoba', 30, 'pz', 'Nuevo', 2),
(6, 'palas', 2, 'pza.', 'EN BUEN ESTADO', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamo`
--

CREATE TABLE `prestamo` (
  `idprestamo` int(11) NOT NULL,
  `f_prestado` date DEFAULT NULL,
  `cantidad` int(11) NOT NULL,
  `estado` varchar(10) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `idmaterial` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `prestamo`
--

INSERT INTO `prestamo` (`idprestamo`, `f_prestado`, `cantidad`, `estado`, `idusuario`, `idmaterial`) VALUES
(99, '2021-06-26', 1, 'Prestado', 5, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reactivos`
--

CREATE TABLE `reactivos` (
  `idreactivos` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `unidad` varchar(20) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `marca` varchar(30) NOT NULL,
  `descripcion` varchar(30) NOT NULL,
  `idarea` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reactivos`
--

INSERT INTO `reactivos` (`idreactivos`, `cantidad`, `unidad`, `nombre`, `marca`, `descripcion`, `idarea`) VALUES
(2, 25, 'pza.', 'cloro', 'rey', 'En buen estado', 2),
(3, 4, 'dfhdf', 'dfhdfh', 'dfdfhdf', 'dfhdfh', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `residuos`
--

CREATE TABLE `residuos` (
  `idresiduos` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `unidad` varchar(30) NOT NULL,
  `clasificacion` varchar(30) NOT NULL,
  `recipiente` varchar(30) NOT NULL,
  `observaciones` varchar(30) NOT NULL,
  `idarea` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `residuos`
--

INSERT INTO `residuos` (`idresiduos`, `cantidad`, `unidad`, `clasificacion`, `recipiente`, `observaciones`, `idarea`) VALUES
(2, 56, 'pz', 'Cr', 'Garra', 'Nuevas', 1),
(4, 45, 'pza.', 'botellas', 'recipiente', 'buen estado', 2),
(5, 300, 'pza.', 'tazas', 'recipiente', 'EN BUEN ESTADO', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `idrol` int(11) NOT NULL,
  `rol` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`idrol`, `rol`) VALUES
(1, 'administrador'),
(2, 'invitado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `usuario` varchar(60) NOT NULL,
  `e_mail` varchar(60) NOT NULL,
  `clave` varchar(80) NOT NULL,
  `idrol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `usuario`, `e_mail`, `clave`, `idrol`) VALUES
(10, 'admin', 'dan@gmail.com', '25d55ad283aa400af464c76d713c07ad', 1),
(11, 'usuario', 'verdizcastro@gmail.com', '25d55ad283aa400af464c76d713c07ad', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuario` int(11) NOT NULL,
  `matricula` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellidos` varchar(60) DEFAULT NULL,
  `carrera` varchar(50) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `gmail` varchar(70) DEFAULT NULL,
  `perfil` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `matricula`, `nombre`, `apellidos`, `carrera`, `telefono`, `gmail`, `perfil`) VALUES
(2, 14970101, 'Lorena', 'PÃ©rez Martinez', 'ISC', '7698563322', 'lorena@gmail.com', 'Alumna'),
(3, 14970102, 'David', 'Martinez', 'IA', '95332546798', 'david@gmail.com', 'Alumno'),
(4, 14970103, 'Griselda', 'Garcias Garcias', 'IA', '5678093465', 'gris@gmail.com', 'Alumna'),
(5, 14970104, 'Daniel', 'De laCruz', 'ISC', '23233453', 'gmail.com', 'Admin'),
(6, 14970105, 'Lorenzo', 'Baltazar', 'IGE', '3456780978', 'lorenzo@gmail.com', 'Alumno'),
(7, 14970106, 'Angela', 'De laCruz', 'ISC', '45634634', 'a@gmail.com', 'Admin'),
(8, 14970107, 'Mancilla', 'Juarez', 'Agro', '89564534', 'mancla@gmail.com', 'maestro'),
(9, 14970108, 'Juan', 'Antonio Cova', 'IGE', '3456780976', 'cova@gmail.com', 'Maestro'),
(10, 14970109, 'Dircio', 'López', 'IGE', '275435678', 'dircio@gmail.com', 'Egresado'),
(11, 14970110, 'Erika', 'Bautista', 'ISC', '9531235432', 'erika@gmail.com', 'Alumna');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`idarea`);

--
-- Indices de la tabla `entrada`
--
ALTER TABLE `entrada`
  ADD PRIMARY KEY (`id_entrada`);

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`id_equipo`);

--
-- Indices de la tabla `historial`
--
ALTER TABLE `historial`
  ADD PRIMARY KEY (`idhistorial`),
  ADD KEY `idusuario` (`idusuario`,`idmaterial`),
  ADD KEY `idmaterial` (`idmaterial`);

--
-- Indices de la tabla `inventarios`
--
ALTER TABLE `inventarios`
  ADD PRIMARY KEY (`idinventario`),
  ADD KEY `n_serie` (`n_serie`),
  ADD KEY `idmaterial` (`idmaterial`);

--
-- Indices de la tabla `materiales`
--
ALTER TABLE `materiales`
  ADD PRIMARY KEY (`idmaterial`),
  ADD KEY `idsubarea` (`idarea`);

--
-- Indices de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD PRIMARY KEY (`idprestamo`),
  ADD KEY `idusuario` (`idusuario`,`idmaterial`),
  ADD KEY `idmaterial` (`idmaterial`);

--
-- Indices de la tabla `reactivos`
--
ALTER TABLE `reactivos`
  ADD PRIMARY KEY (`idreactivos`);

--
-- Indices de la tabla `residuos`
--
ALTER TABLE `residuos`
  ADD PRIMARY KEY (`idresiduos`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`idrol`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `idrol` (`idrol`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `area`
--
ALTER TABLE `area`
  MODIFY `idarea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `entrada`
--
ALTER TABLE `entrada`
  MODIFY `id_entrada` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `id_equipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `historial`
--
ALTER TABLE `historial`
  MODIFY `idhistorial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `inventarios`
--
ALTER TABLE `inventarios`
  MODIFY `idinventario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `materiales`
--
ALTER TABLE `materiales`
  MODIFY `idmaterial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  MODIFY `idprestamo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT de la tabla `reactivos`
--
ALTER TABLE `reactivos`
  MODIFY `idreactivos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `residuos`
--
ALTER TABLE `residuos`
  MODIFY `idresiduos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `historial`
--
ALTER TABLE `historial`
  ADD CONSTRAINT `historial_ibfk_1` FOREIGN KEY (`idmaterial`) REFERENCES `materiales` (`idmaterial`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `historial_ibfk_2` FOREIGN KEY (`idusuario`) REFERENCES `usuarios` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD CONSTRAINT `prestamo_ibfk_1` FOREIGN KEY (`idmaterial`) REFERENCES `materiales` (`idmaterial`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prestamo_ibfk_2` FOREIGN KEY (`idusuario`) REFERENCES `usuarios` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
