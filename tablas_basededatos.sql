
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
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Table loc_serv (with foreign key dependencies on local and servicio)
CREATE TABLE IF NOT EXISTS `loc_serv` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `id_local` int(11) NOT NULL,
    `id_servicio` int(11) NOT NULL,
    PRIMARY KEY (`id`),
    KEY `id_local` (`id_local`),
    KEY `id_servicio` (`id_servicio`),
    CONSTRAINT `fk_loc_serv_local` FOREIGN KEY (`id_local`) REFERENCES `local` (`id`),
    CONSTRAINT `fk_loc_serv_servicio` FOREIGN KEY (`id_servicio`) REFERENCES `servicio` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Turn foreign key checks back on
SET FOREIGN_KEY_CHECKS = 1;

COMMIT;
