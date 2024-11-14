-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2024 a las 00:33:41
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `local`
--

CREATE TABLE `local` (
  `id` int(11) NOT NULL,
  `local` varchar(30) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `link_img` varchar(300) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `local`
--

INSERT INTO `local` (`id`, `local`, `direccion`, `telefono`, `link_img`, `id_usuario`) VALUES
(1, 'Prana Palermo', 'Julián Álvarez 2090', '1534661442', '', 3),
(2, 'Bacan Palermo', 'Bulnes 2552', '48043539', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `loc_serv`
--

CREATE TABLE `loc_serv` (
  `id` int(11) NOT NULL,
  `id_local` int(11) NOT NULL,
  `id_servicio` int(11) NOT NULL,
  `horario_ini` time NOT NULL,
  `horario_fin` time NOT NULL,
  `disponibilidad` enum('disponible','ocupado','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `loc_serv`
--

INSERT INTO `loc_serv` (`id`, `id_local`, `id_servicio`, `horario_ini`, `horario_fin`, `disponibilidad`) VALUES
(1, 1, 1, '10:00:00', '11:00:00', 'disponible'),
(2, 1, 2, '10:00:00', '11:00:00', 'disponible'),
(3, 2, 1, '10:00:00', '11:00:00', 'disponible'),
(4, 2, 2, '10:00:00', '11:00:00', 'disponible');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `id` int(11) NOT NULL,
  `nombre_servicio` varchar(50) NOT NULL,
  `duracion` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`id`, `nombre_servicio`, `duracion`) VALUES
(1, 'Corte', '01:00:00'),
(2, 'Peinado', '01:00:00'),
(3, 'Color', '01:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turno`
--

CREATE TABLE `turno` (
  `id` int(11) NOT NULL,
  `dia` date NOT NULL,
  `horario` time NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `estado` enum('disponible','reservado','finalizado') NOT NULL,
  `id_loc_serv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `turno`
--

INSERT INTO `turno` (`id`, `dia`, `horario`, `id_usuario`, `estado`, `id_loc_serv`) VALUES
(1, '2023-10-18', '10:00:00', 1, 'disponible', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `telefono` varchar(25) NOT NULL,
  `tipo_usuario` enum('administrador','usuario','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellido`, `email`, `password`, `telefono`, `tipo_usuario`) VALUES
(1, 'Mario', 'Gonzalez', 'mgonzales@gmail.com', '1234', '1112345678', 'usuario'),
(2, 'Gustavo', 'Gomez', 'ggomez@gmail.com', '1234', '114455233', 'usuario'),
(3, 'Camila', 'Ruiz', 'cruiz@gmail.com', '1234', '1141442235', 'administrador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `local`
--
ALTER TABLE `local`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `loc_serv`
--
ALTER TABLE `loc_serv`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_local` (`id_local`),
  ADD KEY `id_servicio` (`id_servicio`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `turno`
--
ALTER TABLE `turno`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_loc_serv` (`id_loc_serv`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `local`
--
ALTER TABLE `local`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `loc_serv`
--
ALTER TABLE `loc_serv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `turno`
--
ALTER TABLE `turno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `local`
--
ALTER TABLE `local`
  ADD CONSTRAINT `fk_local_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `loc_serv`
--
ALTER TABLE `loc_serv`
  ADD CONSTRAINT `fk_loc_serv_local` FOREIGN KEY (`id_local`) REFERENCES `local` (`id`),
  ADD CONSTRAINT `fk_loc_serv_servicio` FOREIGN KEY (`id_servicio`) REFERENCES `servicio` (`id`),
  ADD CONSTRAINT `id_local` FOREIGN KEY (`id_local`) REFERENCES `local` (`id`),
  ADD CONSTRAINT `id_servicio` FOREIGN KEY (`id_servicio`) REFERENCES `servicio` (`id`);

--
-- Filtros para la tabla `turno`
--
ALTER TABLE `turno`
  ADD CONSTRAINT `id_loc_serv` FOREIGN KEY (`id_loc_serv`) REFERENCES `loc_serv` (`id`),
  ADD CONSTRAINT `nombre_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
