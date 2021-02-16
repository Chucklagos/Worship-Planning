-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 16-02-2021 a las 02:09:22
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Church`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuario`
--

CREATE TABLE `Usuario` (
  `idUsuario` varchar(13) NOT NULL,
  `email` varchar(45) NOT NULL,
  `contrasena` varchar(45) NOT NULL,
  `estado` varchar(10) NOT NULL,
  `primerNombre` varchar(45) NOT NULL,
  `segundoNombre` varchar(45) NOT NULL,
  `primerApellido` varchar(45) NOT NULL,
  `segundoApellido` varchar(45) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `estadoCivil` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Usuario`
--

INSERT INTO `Usuario` (`idUsuario`, `email`, `contrasena`, `estado`, `primerNombre`, `segundoNombre`, `primerApellido`, `segundoApellido`, `telefono`, `fechaNacimiento`, `estadoCivil`) VALUES
('0801158909432', 'chucklagos17@gmail.com', '1234', 'activo', 'Andres', 'Fernando', 'Alvarado', 'Lopez', '87982345', '2008-02-15', 'divorciado'),
('0801199619860', 'chucklagos17@gmail.com', 'lakjsdlakjsldkajs', 'activo', 'Chuck', 'Heriberto', 'Guifarro', 'Lagos', '22458976', '2016-02-15', 'soltero'),
('0801456897856', 'chucklagos17@gmail.com', '123456789', 'activo', 'Chuck', 'Heriberto', 'Guifarro', 'Lagos', '22458976', '1996-10-04', 'soltero'),
('0912319827323', 'chucklagos17@gmail.com', 'iusda82731kksda', 'activo', 'Juan', 'Heriberto', 'Guifarro', 'Sanchez', '7722883311', '2021-02-14', 'soltero'),
('0912319827398', 'chucklagos17@gmail.com', 'oiaposidasd', 'activo', 'Juan', 'Miguel', 'Sanchez', 'Sanchez', '22339098', '2021-02-03', 'casado'),
('1231231231231', 'chucklagos17@gmail.com', '123123123123123', 'activo', 'Chuck', 'Heriberto', 'Guifarro', 'Lagos', '22458976', '2021-02-14', 'casado');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Usuario`
--
ALTER TABLE `Usuario`
  ADD PRIMARY KEY (`idUsuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
