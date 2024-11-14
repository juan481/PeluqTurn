-- phpMyAdmin SQL Dump Corrected Version

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Turn off foreign key checks for import
SET FOREIGN_KEY_CHECKS = 0;

-- Table usuario
CREATE TABLE IF NOT EXISTS `usuario` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `nombre` varchar(50) NOT NULL,
    `apellido` varchar(30) NOT NULL,
    `email` varchar(40) NOT NULL,
    `password` varchar(20) NOT NULL,
    `telefono` varchar(25) NOT NULL,
    `tipo_usuario` enum('administrador','usuario','','') NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Table local (with foreign key dependency on usuario)
CREATE TABLE IF NOT EXISTS `local` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `local` varchar(30) NOT NULL,
    `direccion` varchar(30) NOT NULL,
    `telefono` varchar(20) NOT NULL,
    `link_img` varchar(300) NOT NULL,
    `id_usuario` int(11) NOT NULL,
    PRIMARY KEY (`id`),
    KEY `id_usuario` (`id_usuario`),
    CONSTRAINT `fk_local_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Table servicio
CREATE TABLE IF NOT EXISTS `servicio` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `nombre_servicio` varchar(50) NOT NULL,
    `duracion` time NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Table loc_serv (with foreign key dependencies on local and servicio)
CREATE TABLE IF NOT EXISTS `loc_serv` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `id_local` int(11) NOT NULL,
    `id_servicio` int(11) NOT NULL,
    `horario_ini` time NOT NULL,
    `horario_fin` time NOT NULL,
    PRIMARY KEY (`id`),
    KEY `id_local` (`id_local`),
    KEY `id_servicio` (`id_servicio`),
    CONSTRAINT `fk_loc_serv_local` FOREIGN KEY (`id_local`) REFERENCES `local` (`id`),
    CONSTRAINT `fk_loc_serv_servicio` FOREIGN KEY (`id_servicio`) REFERENCES `servicio` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Table turno
CREATE TABLE IF NOT EXISTS `turno` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `dia` date NOT NULL,
    `horario` time NOT NULL,
    `id_usuario` int(11) NOT NULL,
    `estado` enum('disponible', 'reservado', 'finalizado') NOT NULL,
    `id_loc_serv` int(11) NOT NULL,
    PRIMARY KEY (`id`),
    KEY `id_usuario` (`id_usuario`),
    KEY `id_loc_serv` (`id_loc_serv`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

-- Insert data into usuario table
INSERT INTO `usuario` (`nombre`, `apellido`, `email`, `password`, `telefono`, `tipo_usuario`) VALUES
('Mario', 'Gonzalez', 'mgonzales@gmail.com', '1234','1112345678', 'usuario'),
('Gustavo', 'Gomez', 'ggomez@gmail.com', '1234', '114455233', 'usuario'),
('Camila', 'Ruiz', 'cruiz@gmail.com', '1234', '1141442235', 'administrador');

-- Insert data into servicio table
INSERT INTO `servicio` (`id`, `nombre_servicio`, `duracion`) VALUES
(1, 'Corte', '01:00:00'),
(2, 'Peinado', '01:00:00'),
(3, 'Color', '01:00:00');

-- Insert data into local table
INSERT INTO `local` (`id`, `local`, `direccion`, `telefono`, `link_img`, `id_usuario`) VALUES
(1, 'Prana Palermo', 'Julián Álvarez 2090', '1534661442', '', 3),
(2, 'Bacan Palermo', 'Bulnes 2552', '48043539', '', 1);

-- Insert data into loc_serv table
INSERT INTO `loc_serv` (`id`, `id_servicio`, `id_local`, `horario_ini`, `horario_fin`) VALUES
(1, 1, 1, '10:00:00', '11:00:00'),
(2, 2, 1, '10:00:00', '11:00:00'),
(3, 1, 2, '10:00:00', '11:00:00'),
(4, 2, 2, '10:00:00', '11:00:00');

-- Insert data into turno table
INSERT INTO `turno` (`id`, `dia`, `horario`, `id_usuario`, `estado`, `id_loc_serv`) VALUES
(1, '2023-10-18', '10:00:00', 1, 'disponible', 2);

-- --------------------------------------------------------

-- Índices para tablas volcadas

-- AUTO_INCREMENT de las tablas volcadas

-- AUTO_INCREMENT de la tabla `local`
ALTER TABLE `local`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

-- AUTO_INCREMENT de la tabla `loc_serv`
ALTER TABLE `loc_serv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
  ADD `disponibilidad` ENUM('disponible','ocupado','','') NOT NULL AFTER `horario_fin`;

-- AUTO_INCREMENT de la tabla `servicio`
ALTER TABLE `servicio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

-- AUTO_INCREMENT de la tabla `turno`
ALTER TABLE `turno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

-- AUTO_INCREMENT de la tabla `usuario`
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

-- Restricciones para tablas volcadas

-- Filtros para la tabla `local`
ALTER TABLE `local`
  ADD CONSTRAINT `id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

-- Filtros para la tabla `loc_serv`
ALTER TABLE `loc_serv`
  ADD CONSTRAINT `id_local` FOREIGN KEY (`id_local`) REFERENCES `local` (`id`),
  ADD CONSTRAINT `id_servicio` FOREIGN KEY (`id_servicio`) REFERENCES `servicio` (`id`);

-- Filtros para la tabla `turno`
ALTER TABLE `turno`
  ADD CONSTRAINT `id_loc_serv` FOREIGN KEY (`id_loc_serv`) REFERENCES `loc_serv` (`id`),
  ADD CONSTRAINT `nombre_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

COMMIT;
