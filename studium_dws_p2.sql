-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-03-2023 a las 10:28:28
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `studium_dws_p2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ninos`
--

CREATE TABLE `ninos` (
  `idNino` int(11) NOT NULL,
  `nombreNino` varchar(45) NOT NULL,
  `apellidosNino` varchar(60) NOT NULL,
  `anoNacimientoNino` date NOT NULL,
  `buenoNino` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ninos`
--

INSERT INTO `ninos` (`idNino`, `nombreNino`, `apellidosNino`, `anoNacimientoNino`, `buenoNino`) VALUES
(1, 'Alberto', 'Alcántara', '1994-10-13', 0),
(2, 'Beatriz', 'Bueno', '1982-04-18', 1),
(3, 'Carlos', 'Crepo', '1998-12-01', 1),
(4, 'Diana', 'Domínguez', '1987-09-02', 0),
(5, 'Emilio', 'Enamorado', '1996-08-12', 1),
(6, 'Francisca', 'Fernández', '1990-07-28', 1),
(8, 'miguel', 'vazquez', '2023-03-06', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recibidos`
--

CREATE TABLE `recibidos` (
  `idRecibido` int(11) NOT NULL,
  `idNinoFK` int(11) NOT NULL,
  `idRegaloFK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `recibidos`
--

INSERT INTO `recibidos` (`idRecibido`, `idNinoFK`, `idRegaloFK`) VALUES
(9, 1, 1),
(10, 2, 3),
(11, 3, 4),
(12, 4, 5),
(13, 5, 6),
(14, 6, 7),
(15, 8, 8),
(16, 1, 13),
(17, 2, 12),
(18, 3, 11),
(19, 4, 10),
(20, 5, 9),
(21, 6, 8),
(22, 8, 7),
(23, 1, 5),
(24, 4, 9),
(25, 2, 12),
(26, 6, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `regalos`
--

CREATE TABLE `regalos` (
  `idRegalo` int(11) NOT NULL,
  `nombreRegalo` varchar(60) NOT NULL,
  `precioRegalo` decimal(6,2) NOT NULL,
  `idReyFK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `regalos`
--

INSERT INTO `regalos` (`idRegalo`, `nombreRegalo`, `precioRegalo`, `idReyFK`) VALUES
(1, 'Aula de ciencia: Robot Mini ERP', '159.95', 1),
(2, 'Carbón', '0.00', 1),
(3, 'Cochecito Classic', '99.95', 1),
(4, 'Consola PS4 1 TB', '349.90', 1),
(5, 'Lego Villa familiar modular', '64.99', 2),
(6, 'Magia Borrás Clásica 150 trucos con luz', '32.95', 2),
(7, 'Meccano Excavadora construcción', '30.99', 2),
(8, 'Nenuco Hace pompas', '29.95', 2),
(9, 'Peluche delfín rosa', '34.00', 3),
(10, 'Pequeordenador', '22.95', 3),
(11, 'Robot Coji', '69.95', 3),
(12, 'Telescopio astronómico terrestre', '72.00', 3),
(13, 'Twister', '17.95', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reyes`
--

CREATE TABLE `reyes` (
  `idRey` int(11) NOT NULL,
  `nombreRey` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reyes`
--

INSERT INTO `reyes` (`idRey`, `nombreRey`) VALUES
(1, 'Melchor'),
(2, 'Gaspar'),
(3, 'Baltasar');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ninos`
--
ALTER TABLE `ninos`
  ADD PRIMARY KEY (`idNino`);

--
-- Indices de la tabla `recibidos`
--
ALTER TABLE `recibidos`
  ADD PRIMARY KEY (`idRecibido`),
  ADD KEY `idNinoFK` (`idNinoFK`),
  ADD KEY `idRegaloFK` (`idRegaloFK`);

--
-- Indices de la tabla `regalos`
--
ALTER TABLE `regalos`
  ADD PRIMARY KEY (`idRegalo`),
  ADD KEY `idReyFK` (`idReyFK`);

--
-- Indices de la tabla `reyes`
--
ALTER TABLE `reyes`
  ADD PRIMARY KEY (`idRey`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ninos`
--
ALTER TABLE `ninos`
  MODIFY `idNino` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `recibidos`
--
ALTER TABLE `recibidos`
  MODIFY `idRecibido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `regalos`
--
ALTER TABLE `regalos`
  MODIFY `idRegalo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `reyes`
--
ALTER TABLE `reyes`
  MODIFY `idRey` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `recibidos`
--
ALTER TABLE `recibidos`
  ADD CONSTRAINT `recibidos_ibfk_1` FOREIGN KEY (`idNinoFK`) REFERENCES `ninos` (`idNino`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `recibidos_ibfk_2` FOREIGN KEY (`idRegaloFK`) REFERENCES `regalos` (`idRegalo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `regalos`
--
ALTER TABLE `regalos`
  ADD CONSTRAINT `regalos_ibfk_1` FOREIGN KEY (`idReyFK`) REFERENCES `reyes` (`idRey`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
