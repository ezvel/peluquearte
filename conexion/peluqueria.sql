-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 10-07-2023 a las 20:13:48
-- Versión del servidor: 11.0.2-MariaDB-log
-- Versión de PHP: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `peluqueria`
--
CREATE DATABASE IF NOT EXISTS `peluqueria` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `peluqueria`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `Id` int(2) NOT NULL,
  `Descripcion` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`Id`, `Descripcion`) VALUES
(0, 'Cancelado'),
(1, 'Reservado'),
(2, 'Confirmado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel`
--

CREATE TABLE `nivel` (
  `Id` int(2) NOT NULL,
  `Descripcion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `nivel`
--

INSERT INTO `nivel` (`Id`, `Descripcion`) VALUES
(0, 'Cliente'),
(1, 'Peluquero'),
(2, 'Operador'),
(3, 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `Id` int(4) NOT NULL,
  `Dni` int(11) NOT NULL,
  `Dia` varchar(15) NOT NULL,
  `Hora` varchar(111) NOT NULL,
  `Id_estado` int(2) NOT NULL,
  `Dni_peluquero` int(11) NOT NULL,
  `Dni_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reserva`
--

INSERT INTO `reserva` (`Id`, `Dni`, `Dia`, `Hora`, `Id_estado`, `Dni_peluquero`, `Dni_cliente`) VALUES
(1, 65453523, '2020 - 07 - 11', '10:30', 2, 43234634, 65453523),
(2, 65453523, '2023 - 07 - 24', '20:30', 2, 65463521, 65453523),
(3, 25342636, '2023 - 11 - 23', '07:30', 1, 43234634, 25342636);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Dni` int(11) NOT NULL,
  `Nombre` varchar(25) NOT NULL,
  `Apellido` varchar(25) NOT NULL,
  `Usuario` varchar(30) NOT NULL,
  `Contraseña` varchar(20) NOT NULL,
  `Id_nivel` int(2) NOT NULL,
  `Ruta` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Dni`, `Nombre`, `Apellido`, `Usuario`, `Contraseña`, `Id_nivel`, `Ruta`) VALUES
(21212343, 'Jake', 'Nackos', 'Jake Nackos', 'admin', 3, '../../assets/imagenes/users/jake-nackos-IF9TK5Uy-KI-unsplash.jpg'),
(23273682, 'Aiony', 'Haust', 'ay8', '1234', 0, '../../assets/imagenes/users/aiony-haust-3TLl_97HNJo-unsplash.jpg'),
(23456352, 'Lucas', 'Godina', 'lucgodina', 'ope123', 2, '../../assets/imagenes/users/lukas-godina-wNB3DFN3u9Q-unsplash.jpg'),
(25342636, 'Jurica', 'Koletic', 'juric1', '1234', 0, '../../assets/imagenes/users/jurica-koletic-7YVZYZeITc8-unsplash.jpg'),
(33212343, 'Christopher', 'Campbell', 'Chris Camp', '1234', 3, '../../assets/imagenes/users/christopher-campbell-rDEOVtE7vOs-unsplash.jpg'),
(43234634, 'Michael', 'Dam', 'dami2', 'pelu444', 1, '../../assets/imagenes/users/michael-dam-mEZ3PoFGs_k-unsplash.jpg'),
(65453523, 'Carlos', 'Sanchez', 'carlitos27', '1234', 0, '../../assets/imagenes/users/iheb-ab-OBufvGMaBaQ-unsplash.jpg'),
(65463521, 'Nicolas', 'Horn', 'nichorn', 'peulq123', 1, '../../assets/imagenes/users/nicolas-horn-MTZTGvDsHFY-unsplash.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `nivel`
--
ALTER TABLE `nivel`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `reserva_ibfk_1` (`Dni`),
  ADD KEY `reserva_ibfk_2` (`Dni_peluquero`),
  ADD KEY `reserva_ibfk_3` (`Dni_cliente`),
  ADD KEY `reserva_ibfk_4` (`Id_estado`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Dni`),
  ADD KEY `usuario_ibfk_1` (`Id_nivel`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `Id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `reserva_ibfk_1` FOREIGN KEY (`Dni`) REFERENCES `usuario` (`Dni`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `reserva_ibfk_2` FOREIGN KEY (`Dni_peluquero`) REFERENCES `usuario` (`Dni`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `reserva_ibfk_3` FOREIGN KEY (`Dni_cliente`) REFERENCES `usuario` (`Dni`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `reserva_ibfk_4` FOREIGN KEY (`Id_estado`) REFERENCES `estado` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`Id_nivel`) REFERENCES `nivel` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
