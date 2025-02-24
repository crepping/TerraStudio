-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-02-2025 a las 16:37:00
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `topografia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `rut_cliente` varchar(10) DEFAULT NULL,
  `nombres` varchar(30) DEFAULT NULL,
  `apellidos` varchar(30) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `ubicacion` varchar(255) DEFAULT NULL,
  `profesional` varchar(30) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `rut_cliente`, `nombres`, `apellidos`, `email`, `telefono`, `ubicacion`, `profesional`, `fecha_creacion`) VALUES
(1, '17183287-K', 'Juan Roberto', 'Cerna Escobar', 'shokkadin@gmail.com', '+569519108', 'El Huape S/N', 'Ricardo Ruiz', '2025-02-10'),
(2, '18684881-0', 'Scalette Lisolette', 'Nova Telgie', 'scarlette.nova@gmail.com', '5656256525', 'La paz 607', 'Lorena', '2025-02-10'),
(3, '7723139-0', 'Flor Delfina', 'Escobar Torres', 'florescobar@gmail.com', '98591375', 'Talcahuano #8273', 'Lorena', '2025-02-18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fusion`
--

CREATE TABLE `fusion` (
  `id_fusion` int(11) NOT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `id_rol` int(11) DEFAULT NULL,
  `fecha_ingreso` date DEFAULT NULL,
  `f_titulodominio` int(11) DEFAULT 0,
  `f_incripcion` int(11) DEFAULT 0,
  `f_certificadonumero` int(11) DEFAULT 0,
  `f_certificadodominio` int(11) DEFAULT 0,
  `f_cedula` int(11) DEFAULT 0,
  `f_podernotarial` int(11) DEFAULT 0,
  `f_siidetallado` int(11) DEFAULT 0,
  `comentario` varchar(255) DEFAULT NULL,
  `estado` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `fusion`
--

INSERT INTO `fusion` (`id_fusion`, `id_cliente`, `id_rol`, `fecha_ingreso`, `f_titulodominio`, `f_incripcion`, `f_certificadonumero`, `f_certificadodominio`, `f_cedula`, `f_podernotarial`, `f_siidetallado`, `comentario`, `estado`) VALUES
(1, 3, 14, '2025-02-18', 1, 1, 1, 1, 1, 1, 0, 'Queda pendiente SII', 0),
(2, 3, 14, '2025-02-24', 0, 0, 0, 0, 0, 1, 0, 'Prueba', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `regularizacion`
--

CREATE TABLE `regularizacion` (
  `id_regularizar` int(11) NOT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `id_rol` int(11) DEFAULT NULL,
  `fecha_ingreso` date DEFAULT NULL,
  `f_titulodominio` int(11) DEFAULT 0,
  `f_incripcion` int(11) DEFAULT 0,
  `f_certificadonumero` int(11) DEFAULT 0,
  `f_cedula` int(11) DEFAULT 0,
  `f_areapropiedad` int(11) DEFAULT 0,
  `f_obrasmunicipales` int(11) DEFAULT 0,
  `informe_tecnico` int(11) DEFAULT 0,
  `ingreso_municipalidad` int(11) DEFAULT 0,
  `comentarios` varchar(255) DEFAULT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `regularizacion`
--

INSERT INTO `regularizacion` (`id_regularizar`, `id_cliente`, `id_rol`, `fecha_ingreso`, `f_titulodominio`, `f_incripcion`, `f_certificadonumero`, `f_cedula`, `f_areapropiedad`, `f_obrasmunicipales`, `informe_tecnico`, `ingreso_municipalidad`, `comentarios`, `estado`) VALUES
(1, 1, 1, '2025-02-11', 1, 1, 0, 0, 0, 0, 0, 1, 'El cliente debe atualmente $500.000', 1),
(2, 1, 12, '2025-02-11', 0, 0, 0, 1, 0, 0, 0, 0, 'Debe todos los documentos Llamar al Cliente.', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL,
  `numero_rol` varchar(30) DEFAULT NULL,
  `ubicacion` varchar(255) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `fecha_rol` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `numero_rol`, `ubicacion`, `id_cliente`, `fecha_rol`) VALUES
(1, '651-1', 'Coroney #123', 1, '2025-02-10'),
(4, '705-6', 'El santo #566', 2, '2025-02-11'),
(5, '506-3', 'Rafael, Picis', 1, '2025-02-11'),
(10, '202-2', 'Chillan S/N', 1, '2025-02-11'),
(11, '111-2', 'El huape, Camino Rinco 3', 1, '2025-02-11'),
(12, '333-1', 'Chillan S/N', 1, '2025-02-11'),
(14, '101-7', 'Dichato #8733', 3, '2025-02-18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subdivicion`
--

CREATE TABLE `subdivicion` (
  `id_subdivicion` int(11) NOT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `id_rol` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `f_rolevaluodetallado` int(11) DEFAULT NULL,
  `f_escritura` int(11) DEFAULT NULL,
  `f_cedula` int(11) DEFAULT NULL,
  `f_certificadorural` int(11) DEFAULT NULL,
  `f_certificadodominio` int(11) DEFAULT NULL,
  `f_certficadoprevias` int(11) DEFAULT NULL,
  `comentarios` varchar(255) DEFAULT NULL,
  `estado` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `subdivicion`
--

INSERT INTO `subdivicion` (`id_subdivicion`, `id_cliente`, `id_rol`, `fecha`, `f_rolevaluodetallado`, `f_escritura`, `f_cedula`, `f_certificadorural`, `f_certificadodominio`, `f_certficadoprevias`, `comentarios`, `estado`) VALUES
(1, 3, 14, '2025-02-24', 0, 0, 0, 0, 0, 1, 'dadas', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(10) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pasword` varchar(50) NOT NULL,
  `tipo` int(11) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `rut` int(8) NOT NULL,
  `telefono` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `user`, `pasword`, `tipo`, `nombres`, `apellidos`, `rut`, `telefono`) VALUES
(1, 'juan', 'reppack123', 1, 'Juan ', 'Cerna', 17183287, 932606932),
(2, 'liso', '123', 2, 'Scarlette', 'Nova', 18684881, 525655555);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `fusion`
--
ALTER TABLE `fusion`
  ADD PRIMARY KEY (`id_fusion`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_rol` (`id_rol`);

--
-- Indices de la tabla `regularizacion`
--
ALTER TABLE `regularizacion`
  ADD PRIMARY KEY (`id_regularizar`),
  ADD KEY `id_rol` (`id_rol`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `subdivicion`
--
ALTER TABLE `subdivicion`
  ADD PRIMARY KEY (`id_subdivicion`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_rol` (`id_rol`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `fusion`
--
ALTER TABLE `fusion`
  MODIFY `id_fusion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `regularizacion`
--
ALTER TABLE `regularizacion`
  MODIFY `id_regularizar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `subdivicion`
--
ALTER TABLE `subdivicion`
  MODIFY `id_subdivicion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `fusion`
--
ALTER TABLE `fusion`
  ADD CONSTRAINT `fusion_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`),
  ADD CONSTRAINT `fusion_ibfk_2` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`);

--
-- Filtros para la tabla `regularizacion`
--
ALTER TABLE `regularizacion`
  ADD CONSTRAINT `regularizacion_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`),
  ADD CONSTRAINT `regularizacion_ibfk_2` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`);

--
-- Filtros para la tabla `rol`
--
ALTER TABLE `rol`
  ADD CONSTRAINT `rol_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`);

--
-- Filtros para la tabla `subdivicion`
--
ALTER TABLE `subdivicion`
  ADD CONSTRAINT `subdivicion_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`),
  ADD CONSTRAINT `subdivicion_ibfk_2` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
